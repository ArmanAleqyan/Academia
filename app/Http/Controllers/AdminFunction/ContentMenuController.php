<?php

namespace App\Http\Controllers\AdminFunction;

use DB;
use Carbon\Carbon;
use App\Models\Email;
use App\Models\MenuContent;
use App\Models\Category;
use App\Models\product;
use App\Models\productattributes;
use App\Models\productparam;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Mtownsend\XmlToArray\XmlToArray;


class ContentMenuController extends Controller
{
    public function index(){
    //   $product = product::with('params','category','atributes')->paginate(5);
    //     dd($product);
        return view('admin.contentmenu.contentmenu');
    }

   


    public function createcategory(Request $request){

        $urlcetegory = $request->urlcategory;


        $xmlDataString = file_get_contents($urlcetegory);
        $array_xml_data = XmlToArray::convert($xmlDataString);


        if (!empty($array_xml_data)) {
            $company_shop = $array_xml_data['shop'];
             $company_shop_categories = $this->category_convert($company_shop['categories']['category']);
             $company_shop_products = $this->product_convert($company_shop['offers']['offer']);
             $company_shop_products_params = $this->product_param_convert($company_shop['offers']['offer']);
             $company_shop_products_atributes = $this->product_atributes_convert($company_shop['offers']['offer']);
        }
         return redirect()->back();
    }

    

    public function category_convert($category_arr){
        
             $data = array();
             foreach ($category_arr  as $categorydata) {
                 
                if(!empty($categorydata['@attributes']['parentId'])){
                    $categorydata['@attributes']['parentId'] = $categorydata['@attributes']['parentId'];
                }else{
                    $categorydata['@attributes']['parentId']  = NULL;
                }
                $data[] = [
                    'category_id' => $categorydata['@attributes']['id'],
                    'parentId' => $categorydata['@attributes']['parentId'],
                    'category' => $categorydata['@content'],
                ];
               

                
            }
      
            $items = collect($data);    	
          //  $chunks = $items->chunk(100);
            
      
     
          
        foreach($items->chunk(100) as $chunk) {
            foreach($chunk as $item) {
             
                Category::updateOrCreate(
                    [
                        'category_id' => $item['category_id']
                    ],
                    $item
                );
            }
           
         }

            // foreach($chunks as $chunk){
            //     DB::table('categories')->insert($chunk->toArray());
            // }


            return true;
            


    }

    public function product_convert($product_arr){
        
         $data = array();
         
          foreach($product_arr as $products2){
          
             
            if(!empty($products2['oldprice'])){
                $old_prices =  $products2['oldprice'];
            }else{
               $old_prices = NULL;
            }
            $old_prices = json_encode($old_prices);
            $products2['description'] = json_encode($products2['description']);

              $data[] =  [
                'product_id' => $products2['@attributes']['id'],
                'url' => $products2['url'],
                'price' => $products2['price'],
                'oldprice' =>$old_prices,
                'currencyId' => $products2['currencyId'],
                'parentId' => $products2['parentId'],
                'categoryId' => $products2['categoryId'],
                'picture' => $products2['picture'],
                'pickup' => $products2['pickup'],
                'delivery' => $products2['delivery'],
                'vendor' => $products2['vendor'],
                'model' => $products2['model'],
                'description' => $products2['description'],
                'sales_notes' => $products2['sales_notes'],
                'manufacturer_warranty' => $products2['manufacturer_warranty'],
                'created_at' =>  Carbon::now(),
              ];




          }

        

          $items = collect($data); 
          
          
         // $chunks = $items->chunk(100);

            // foreach($chunks as $chunk){
            //     DB::table('products')->insert($chunk->toArray());
            // }




        foreach($items->chunk(100) as $chunk) {
            foreach($chunk as $item) {
                product::updateOrCreate(
                    [
                        'product_id' => $item['product_id']
                    ],
                    $item
                );
            }
         }

        
          return true;

          

    }
    
    public function product_param_convert($param_arr){

        $data = array();
      
        foreach($param_arr as $param_data){
            foreach($param_data['param'] as $params){
                    $params['@content'] = json_encode($params['@content']);
                    $params['@attributes']['name'] = json_encode($params['@attributes']['name']);
                    $data[] = [ 
                        'productid' => $param_data['@attributes']['id'],
                        'contenet' => $params['@content'],
                        'attributes'  =>  $params['@attributes']['name'],
                        'created_at' =>  Carbon::now(),
                    ];
        }  
    }
    
    $items = collect($data);    	
    $chunks = $items->chunk(500);
 
     $param =  productparam::truncate();
    foreach($chunks as $chunk){
        DB::table('productparams')->insert($chunk->toArray());
    }
  
    return true;

}

    public function product_atributes_convert($atribute){
        
        $data = array();
        foreach($atribute as $productAtribute){
            $data[] = [
                'product_id'  => $productAtribute['@attributes']['id'],
                'type' => $productAtribute['@attributes']['type'],
                'available' => $productAtribute['@attributes']['available'],
               'bid' => $productAtribute['@attributes']['bid'],
               'created_at' =>  Carbon::now(),
            ];
        }

        $items = collect($data);    	
      //  $chunks = $items->chunk(100);


             
        foreach($items->chunk(100) as $chunk) {
            foreach($chunk as $item) {
          
                productattributes::updateOrCreate(
                    [
                        'product_id' => $item['product_id']
                    ],
                    $item
                );
            }
           
         }

        
        // foreach($chunks as $chunk){
        // DB::table('productattributes')->insert($chunk->toArray());
        // }
    return true;

    }

}
