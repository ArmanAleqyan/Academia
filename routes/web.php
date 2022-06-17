<?php

use App\Http\Controllers\AdminFunction\ActiveTariffsController;
use App\Http\Controllers\AdminFunction\CustomerReviewsController;
use App\Http\Controllers\AdminFunction\HistoriTariffController;
use App\Http\Controllers\AdminFunction\PartnerController;
use App\Http\Controllers\AdminFunction\SaiteContentController;
use App\Http\Controllers\AdminFunction\TariffController;
use App\Http\Controllers\AdminFunction\TeamAudioController;

use App\Http\Controllers\ViewController\CreateOrderController;
use App\Http\Controllers\ViewController\PersonalAreaController;
use App\Http\Controllers\ViewController\UserHomeController;
use App\Http\Controllers\ViewController\UserLoginController;
use App\Http\Controllers\ViewController\UserRegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminFunction\ContentMenuController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\AdminFunction\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/login' , [LoginController::class, 'index'])->name('login');
Route::get('settings', [LoginController::class, 'settings'])->name('settings');
Route::post('loginsend' , [LoginController::class, 'login'])->name('loginsend');
Route::post('updateprofileadmin', [LoginController::class, 'updateprofileadmin'])->name('updateprofileadmin');
Route::post('Adminupdatepassword', [LoginController::class, 'Adminupdatepassword'])->name('Adminupdatepassword');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['AuthAdmin'])->group(function () {
    Route::prefix('admin')->group(function (){

        Route::get('/team', [TeamAudioController::class, 'index'])->name('team');
        Route::get('/newteamview', [TeamAudioController::class, 'newteamview'])->name('newteamview');
        Route::get('/updateAudioview/audio_id={id}', [TeamAudioController::class, 'updateAudioview'])->name('updateAudioview');
        Route::post('updateAudio/{id}', [TeamAudioController::class, 'updateAudio'])->name('updateAudio');
        Route::get('/deleteaudio/audio_id={id}', [TeamAudioController::class, 'deleteaudio'])->name('deleteaudio');
        Route::post('/createNewTeam', [TeamAudioController::class, 'createNewTeam'])->name('createNewTeam');

       Route::get('allTariff', [TariffController::class, 'allTariff'])->name('allTariff');
       Route::get('newTariff', [TariffController::class, 'newTariff'])->name('newTariff');
       Route::post('createNewTariff', [TariffController::class, 'createNewTariff'])->name('createNewTariff');
       Route::get('deleteTariff/product_id={id}', [TariffController::class, 'deleteTariff'])->name('deleteTariff');
       Route::get('updateTariff/product_id={id}', [TariffController::class, 'updateTariff'])->name('updateTariff');
       Route::post('createupdateTariff/product_id={id}',[TariffController::class, 'createupdateTariff'])->name('createupdateTariff');

        Route::get('allPartners', [PartnerController::class, 'allPartners'])->name('allPartners');
        Route::get('newPartner', [PartnerController::class, 'newPartner'])->name('newPartner');
        Route::post('createNewPartner',[PartnerController::class, 'createNewPartner'])->name('createNewPartner');
        Route::get('deletePartner/partner_id={id}', [PartnerController::class, 'deletePartner'])->name('deletePartner');
        Route::get('updatePartner/partner_id={id}', [PartnerController::class, 'updatePartner'])->name('updatePartner');
        Route::post('createupdatePartner/partner_id={id}',[PartnerController::class, 'createupdatePartner'])->name('createupdatePartner');

      Route::get('allFedback', [CustomerReviewsController::class, 'index'])->name('allFedback');
      Route::get('newFedback', [CustomerReviewsController::class, 'newFedback'])->name('newFedback');
      Route::post('createFedback', [CustomerReviewsController::class, 'createFedback'])->name('createFedback');
      Route::get('deleteFedback/fedback_id={id}', [CustomerReviewsController::class, 'deletefedback'])->name('deletefedback');
      Route::get('updateFedback/fedback_id={id}', [CustomerReviewsController::class, 'updateFedback'])->name('updateFedback');
      Route::post('createupdateFedback', [CustomerReviewsController::class,'createupdateFedback'])->name('createupdateFedback');




        Route::get('/', [HomeController::class, 'index'])->name('home');
        Route::get('/deletuser/user_id={id}', [UserController::class, 'deletuser'])->name('deletuser');
        Route::get('users', [UserController::class, 'index'])->name('users');
        Route::get('oneuser/{id}',[UserController::class, 'oneuser'])->name('oneuser');
        Route::post('updateUser',[UserController::class,'updateUser'])->name('updateUser');
        Route::get('adminhome', [AdminHomeController::class, 'index'])->name('adminhome');
        Route::get('contentmenu', [ContentMenuController::class, 'index'])->name('contentmenu');
        Route::post('/createcategory', [ContentMenuController::class, 'createcategory'])->name('createcategory');




        Route::get('glavniekran', [SaiteContentController::class, 'glavniekran'])->name('glavniekran');
        Route::post('createglavniekran', [SaiteContentController::class, 'updateglavniekran'])->name('createglavniekran');
        Route::get('sistemaocenki',[SaiteContentController::class, 'sistemaocenki'])->name('sistemaocenki');
        Route::post('updatesistemaocenki',[SaiteContentController::class, 'updatesistemaocenki'])->name('updatesistemaocenki');
        Route::get('partnyorskayaprograma',[SaiteContentController::class, 'partnyorskayaprograma'])->name('partnyorskayaprograma');
        Route::get('comanda',[SaiteContentController::class, 'comanda'])->name('comanda');
        Route::post('updatecomanda',[SaiteContentController::class, 'updatecomanda'])->name('updatecomanda');
        Route::get('viberayutnas',[SaiteContentController::class,'viberayutnas'])->name('viberayutnas');
        Route::post('updateviberayutnas', [SaiteContentController::class, 'updateviberayutnas'])->name('updateviberayutnas');
        Route::get('tarifi', [SaiteContentController::class, 'tarifi'])->name('tarifi');
        Route::post('updatetarifi', [SaiteContentController::class, 'updatetarifi'])->name('updatetarifi');
        Route::get('komandnayarabota',[SaiteContentController::class,'komandnayarabota'])->name('komandnayarabota');
        Route::post('updatekomandnayarabota', [SaiteContentController::class,'updatekomandnayarabota'])->name('updatekomandnayarabota');
        Route::get('primeriotchota', [SaiteContentController::class, 'primeriotchota'])->name('primeriotchota');
        Route::post('updateprimeriotchota', [SaiteContentController::class, 'updateprimeriotchota'])->name('updateprimeriotchota');
        Route::get('drugoe', [SaiteContentController::class, 'drugoe'])->name('drugoe');
        Route::post('updatedrugoe', [SaiteContentController::class, 'updatedrugoe'])->name('updatedrugoe');
        Route::get('infoonas', [SaiteContentController::class, 'infoonas'])->name('infoonas');
        Route::post('updateinfoonas', [SaiteContentController::class, 'updateinfoonas'])->name('updateinfoonas');


        Route::get('activeTariff', [ActiveTariffsController::class, 'allTariff'])->name('activeTariff');
        Route::get('deleteActiveTariff/{id}', [ActiveTariffsController::class, 'deleteActiveTariff'])->name('deleteActiveTariff');
        Route::get('updateActiveTariff/{id}', [ActiveTariffsController::class,'updateActiveTariff'])->name('updateActiveTariff');
        Route::post('updateAdminActiveTariff',[ActiveTariffsController::class,'updateAdminActiveTariff'])->name('updateAdminActiveTariff');
        Route::get('updateAdminSendFileTAriff/{id}', [ActiveTariffsController::class,'updateAdminSendFileTAriff'])->name('updateAdminSendFileTAriff');
        Route::get('closeAdminTariff/{id}', [ActiveTariffsController::class, 'closeAdminTariff'])->name('closeAdminTariff');

        Route::get('historyAdminTariff', [HistoriTariffController::class, 'historyAdminTariff'])->name('historyAdminTariff');

        Route::get('allorder', [CreateOrderController::class, 'allorder'])->name('allorder');


        Route::get('adminSuccsesUserFeedback/{id}', [CreateOrderController::class, 'adminSuccsesUserFeedback'])->name('adminSuccsesUserFeedback');
        Route::get('adminDeleteUserFeedback/{id}', [CreateOrderController::class, 'adminDeleteUserFeedback'])->name('adminDeleteUserFeedback');
    });
});
Route::middleware(['NoAuthUser'])->group(function () {
    Route::get('/personalarea', [PersonalAreaController::class, 'index'])->name('personalarea');
    Route::get('UserHistoryTariff', [PersonalAreaController::class, 'UserHistoryTariff'])->name('UserHistoryTariff');
});


Route::get('/', [UserHomeController::class, 'index'])->name('Userhome');

Route::post('/xotiteuznaty', [UserHomeController::class, 'xotiteuznaty'])->name('xotiteuznaty');


Route::post('/sendexelefile', [CreateOrderController::class, 'sendexelefile'])->name('sendexelefile');
Route::post('/createorder', [CreateOrderController::class, 'createorder'])->name('createorder');

Route::post('/register',[UserRegisterController::class,'register'])->name('register');
Route::post('/userlogin', [UserLoginController::class, 'userlogin'])->name('userlogin');
Route::get('userlogout', [UserLoginController::class, 'userlogout'])->name('userlogout');
Route::post('/registercode', [UserRegisterController::class, 'registercode'])->name('registercode');
Route::get('/doubleregistercode', [UserRegisterController::class,'doubleregistercode'])->name('doubleregistercode');
Route::post('updatepasswordcode', [UserLoginController::class, 'updatepasswordcode'])->name('updatepasswordcode');
Route::post('/resetpasswordcode', [UserLoginController::class, 'resetpasswordcode'])->name('resetpasswordcode');
Route::post('/updatepassword', [UserLoginController::class,'updatepassword'])->name('updatepassword');
Route::post('/updateemailold', [UserLoginController::class, 'updateemailold'])->name('updateemailold');
Route::post('newemailsendcode', [UserLoginController::class, 'newemailsendcode'])->name('newemailsendcode');
Route::post('newemailveryfi', [UserLoginController::class, 'newemailveryfi'])->name('newemailveryfi');
Route::post('forgoutpassword', [UserLoginController::class,'forgoutpassword'])->name('forgoutpassword');
Route::post('forgotpasswordcode', [UserLoginController::class,'forgotpasswordcode'])->name('forgotpasswordcode');
Route::post('forgotpasswordnewpassword_form', [UserLoginController::class,'forgotpasswordnewpassword_form'])->name('forgotpasswordnewpassword_form');
Route::post('sendtwocodeforgotpassword', [UserLoginController::class, 'sendtwocodeforgotpassword'])->name('sendtwocodeforgotpassword');
Route::post('submityourapplication', [UserHomeController::class, 'submityourapplication'])->name('submityourapplication');





