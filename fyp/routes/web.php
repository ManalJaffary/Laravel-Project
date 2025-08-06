<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\maincontroller;
use App\Http\Controllers\parentController;
use App\Http\Controllers\ForgotPasswordController;
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


Route::get('/', [parentController::class,'landingpage']);
Route::get('/index', [maincontroller::class,'index']);
Route::get('/login', [maincontroller::class,'login']);
Route::get('/error', [maincontroller::class,'error']);
Route::post('/loginUser', [maincontroller::class,'loginUser']);
Route::get('/logout', [maincontroller::class,'logout']);
Route::get('/register', [maincontroller::class,'register']);
Route::post('/insertUser', [maincontroller::class,'insert']);
Route::post('/insertUsers', [maincontroller::class,'insertUsers']);
Route::post('/insertChild', [maincontroller::class,'insertChild']);
Route::post('/insertpChild', [parentController::class,'insertpChild']);
Route::post('/updatechild', [parentController::class,'updatechild']);
Route::get('/removechild/{id}', [parentController::class,'removechild']);
Route::get('/editchild/{id}', [parentController::class,'editchild']);
Route::post('/insertVaccine', [maincontroller::class,'insertVaccine']);
Route::post('/insertVaccineprocess', [maincontroller::class,'insertVaccineprocess']);
Route::get('/a_vaccine_record', [maincontroller::class,'a_vaccine_record']);
Route::get('/profile', [maincontroller::class,'profile']);
Route::get('/parentprofile', [parentController::class,'parent_profile']);
Route::get('/mychild', [parentController::class,'mychild']);
Route::get('/updateparent', [parentController::class,'updateparent']);
Route::post('/updateUser', [maincontroller::class,'updateUser']);
Route::post('/updateUsers', [maincontroller::class,'updateUsers']);
Route::post('/updatehcc', [maincontroller::class,'updatehcc']);
Route::get('/hccusers', [maincontroller::class,'hccusers']);
Route::get('/childlist', [maincontroller::class,'childlist']);
Route::get('/registerchild', [maincontroller::class,'registerchild']);
Route::get('/add_vaccine', [maincontroller::class,'add_vaccine']);
Route::post('/editVaccine', [maincontroller::class,'editVaccine']);
Route::get('/edit_vaccine/{id}', [maincontroller::class,'edit_vaccine']);
Route::post('/editVaccineprocess', [maincontroller::class,'editVaccineprocess']);
Route::get('/edit_vaccineprocess/{id}', [maincontroller::class,'edit_vaccineprocess']);
Route::get('/vaccine_record', [maincontroller::class,'vaccine_record']);
Route::get('/vaccineprocess/{id}', [maincontroller::class,'vaccineprocess']);
Route::get('/vaccinerecord/{id}', [maincontroller::class,'vaccinerecord']);
Route::get('/vaccinator_users', [maincontroller::class,'vaccinator_users']);
Route::get('/parent_users', [maincontroller::class,'parent_users']);
Route::get('/a_parent_users/{id}', [maincontroller::class,'a_parent_users']);
Route::get('/a_vaccinator_users/{id}', [maincontroller::class,'a_vaccinator_users']);
Route::get('/verify/{id}', [maincontroller::class,'verify']);
Route::get('/verifyUsers/{id}', [maincontroller::class,'verifyUsers']);
Route::get('/block/{id}', [maincontroller::class,'block']);
Route::get('/blockUsers/{id}', [maincontroller::class,'blockUsers']);
Route::get('/unblock/{id}', [maincontroller::class,'unblock']);
Route::get('/unblockUsers/{id}', [maincontroller::class,'unblockUsers']);
Route::get('/remove/{id}', [maincontroller::class,'remove']);
Route::get('/removeUsers/{id}', [maincontroller::class,'removeUsers']);
Route::get('/viewdetails/{id}', [maincontroller::class,'viewdetails']);
Route::get('/hccdetails/{id}', [parentController::class,'hccdetails']);
Route::post('/search', [parentController::class,'search']);
Route::get('/viewdetailschild/{id}', [maincontroller::class,'viewdetailschild']);
Route::get('/viewdetailsUsers/{id}', [maincontroller::class,'viewdetailsUsers']);
Route::get('/viewdetailsAllusers/{id}', [maincontroller::class,'viewdetailsAllusers']);
Route::get('/editprofile', [maincontroller::class,'editprofile']);
Route::get('/editprofilehcc/{id}', [maincontroller::class,'editprofilehcc']);
Route::get('/editprofileUsers/{id}', [maincontroller::class,'editprofileUsers']);
Route::get('/editprofileAllusers/{id}', [maincontroller::class,'editprofileAllusers']);
Route::get('/appointments', [maincontroller::class,'appointments']);
Route::get('/services', [parentController::class,'services']);
Route::get('/nearesthcc', [parentController::class,'nearesthcc']);
Route::post('/makeappointment', [parentController::class,'makeappointment']);
Route::get('/removeappointment/{id}', [maincontroller::class,'remove']);
Route::get('child_details/{id}', [parentController::class,'child_details']);
Route::get('/add_vaccination/{id}', [maincontroller::class,'add_vaccination']);
Route::get('/updatevaccination/{id}', [maincontroller::class,'updatevaccination']);
Route::get('vaccinationprocess/{id}', [parentController::class,'vaccinationprocess']);
Route::get('viewvaccinationprocess/{id}', [maincontroller::class,'viewvaccinationprocess']);
Route::get('viewhistory/{id}', [maincontroller::class,'viewhistory']);
Route::get('generatecard/{id}', [parentController::class,'generatecard']);
// Route::get('/createpdf', [parentController::class, 'createPDF']);
Route::get('/downloadPDF/{id}',[parentController::class,'downloadPDF']);
Route::get('/forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
