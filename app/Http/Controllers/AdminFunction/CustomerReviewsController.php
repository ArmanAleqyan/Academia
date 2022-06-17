<?php

namespace App\Http\Controllers\AdminFunction;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerReviewsRequest;
use App\Models\CustomerReviews;
use Illuminate\Http\Request;


class CustomerReviewsController extends Controller
{
    public function index(){
        $fedback = CustomerReviews::orderBy('id', 'DESC')->get();

        return view('admin.UserFeedbackContent.UserFedback',compact('fedback'));

    }

    public function newFedback(){
        return view('admin.UserFeedbackContent.newFedback');
    }

    public function createFedback(CustomerReviewsRequest $request){

       $video = $request->video;
       $explode =  explode(' ', $video);

//       unset($explode[3]);
        $video  = str_replace('"', '', $explode[3]);



//
//        $destinationPath = 'fedback';
//        $originalFile = time() . $video->getClientOriginalName();
//        $video->move($destinationPath, $originalFile);
//        $video = $originalFile;

        $fedback = CustomerReviews::create([
           'name' => $request->name,
           'content' => $request->text,
           'video' => $video
        ]);

       if($fedback){
           return redirect()->route('allFedback')->with('succses','ok');
       }

    }

    public function deletefedback($id){
            $delete = CustomerReviews::where('id',$id)->delete();
            if($delete){
                return redirect()->back()->with('delete','delete');
            }
    }

    public function updateFedback($id){

        $update = CustomerReviews::where('id',$id)->get();
        return view('admin.UserFeedbackContent.oneFedback',compact('update'));
    }

    public function createupdateFedback(Request $request)
    {

        $video = $request->video;
        $explode =  explode(' ', $video);

//       unset($explode[3]);
        $video  = str_replace('"', '', $explode[3]);



//            $destinationPath = 'fedback';
//            $originalFile = time() . $video->getClientOriginalName();
//            $video->move($destinationPath, $originalFile);
//            $video = $originalFile;

            $update = CustomerReviews::where('id', $request->id)->update([
                'name' => $request->name,
                'content' => $request->text,
                'video' => $video
            ]);





         return redirect()->back()->with('succses','succses');
    }

}
