<?php

use Illuminate\Support\Facades\Route;

// middleware 
use App\Http\Middleware\Adminauthmiddleware;
use App\Http\Middleware\Deletebackmiddleware;

use App\Http\Controllers\Maincontroller;

// Backend controller 
use App\Http\Controllers\backend\Logincontroller;
use App\Http\Controllers\backend\Homecontroller;
use App\Http\Controllers\backend\Slidercontroller;
use App\Http\Controllers\backend\Officercontroller;
use App\Http\Controllers\backend\Photovideocontroller;
use App\Http\Controllers\backend\Softwarecontroller;
use App\Http\Controllers\backend\Menucontroller;
use App\Http\Controllers\backend\Sitecontentcontroller;
use App\Http\Controllers\backend\Contactcontroller;


Route::get('/',[Homecontroller::class,"lodata"]);
Route::get('/Ghughuli/{cat}',[Maincontroller::class,"aboutme"])->name('aboutme');
Route::get('/Ghughuli/{cat}/{sub}',[Maincontroller::class,"aboutme1"])->name('aboutme1');
Route::get('/Ghughuli/{cat}/{sub}/{child}',[Maincontroller::class,"aboutme2"])->name('aboutme2');
Route::get('Gallery/Photo',[Maincontroller::class,"imagegadsdsllery"])->name('imagegadsdsllery');
Route::get('Manchitra/Manchitra',[Maincontroller::class,"manchitrrrra"])->name('manchitrrrra');
Route::get('Contact/Contact',[Maincontroller::class,"contascvtnagar"])->name('contascvtnagar');
Route::post('consubmit',[Maincontroller::class,"consubmit"])->name('consubmit');

Route::post('logsubmit',[Logincontroller::class,"logsubmit"])->name('logsubmit');
// Backend controller 
Route::group(['middleware' => ['Adminauthmiddleware']], function(){
Route::get('Admin/Dashboard',[Logincontroller::class,"admindash"])->name('admindash');
Route::get('Admin/Form',[Homecontroller::class,"demo"])->name('demo');
Route::post('uploadslider',[Slidercontroller::class,"uploadslider"])->name('uploadslider');
Route::get('deddlete/{id}',[Slidercontroller::class,"deddlete"])->name('deddlete');// delete 
Route::get('Admin/Officer-Photo',[Officercontroller::class,"officerphoto"])->name('officerphoto');
Route::post('uploadofficer',[Officercontroller::class,"uploadofficer"])->name('uploadofficer');
Route::get('delete/{id}',[Officercontroller::class,"delete"])->name('delete');// delete 
Route::get('Admin/Gallery',[Photovideocontroller::class,"dataphoto"])->name('dataphoto');
Route::post('uploadphoto',[Photovideocontroller::class,"uploadphoto"])->name('uploadphoto');
Route::get('datadelete/{id}',[Photovideocontroller::class,"delete"])->name('datadelete');// delete 
Route::get('Admin/Manage-Software',[Softwarecontroller::class,"managesoftware"])->name('managesoftware');
Route::post('uploadsoftware',[Softwarecontroller::class,"uploadsoftware"])->name('uploadsoftware');
Route::get('delete/{id}',[Softwarecontroller::class,"delete"])->name('delete');// delete 
Route::get('Admin/Add-Menu',[Menucontroller::class,"addmenu"])->name('addmenu');
Route::post('uploadmenu',[Menucontroller::class,"uploadmenu"])->name('uploadmenu');
Route::get('dadelete/{id}',[Menucontroller::class,"dadelete"])->name('dadelete');// delete 
Route::get('Admin/Add-Sub-Menu',[Menucontroller::class,"addsubmenu"])->name('addsubmenu');
Route::post('uploadsubmenu',[Menucontroller::class,"uploadsubmenu"])->name('uploadsubmenu');
Route::get('dadsdfelete/{id}',[Menucontroller::class,"dadsdfelete"])->name('dadsdfelete');// delete 
Route::get('Admin/Add-Child-Menu',[Menucontroller::class,"addchildmenu"])->name('addchildmenu');
// ajax 
Route::post('admin/api/fetch-submenu', [Menucontroller::class, 'submenudata']); //fetch submenudata
Route::post('admin/api/fetch-childmenu', [Menucontroller::class, 'childmenudata']); //fetch childmenudata
// end 
Route::post('uploadchildmenu',[Menucontroller::class,"uploadchildmenu"])->name('uploadchildmenu');
Route::get('dadhgjngmnsdfelete/{id}',[Menucontroller::class,"dadhgjngmnsdfelete"])->name('dadhgjngmnsdfelete');// delete 
Route::get('Admin/Site-Content',[Sitecontentcontroller::class,"sitecontent"])->name('sitecontent');
Route::post('uploadsitecontent',[Sitecontentcontroller::class,"uploadsitecontent"])->name('uploadsitecontent');
Route::post('contentupdatedtata',[Sitecontentcontroller::class,"contentupdatedtata"])->name('contentupdatedtata');//edit
Route::get('dddcelete/{id}',[Sitecontentcontroller::class,"dddcelete"])->name('dddcelete');// delete 
Route::get('admin/Contact',[Contactcontroller::class,"contactsdata"])->name('contactsdata');
Route::get('dadhgjngmnXsdfelete/{id}',[Contactcontroller::class,"dadhgjngmnXsdfelete"])->name('dadhgjngmnXsdfelete');// delete 
});


// delete back history 
Route::group(['middleware' => ['Deletebackmiddleware']], function(){
    Route::get('Admin/Admin-Login',[Logincontroller::class,"adminlog"])->name('adminlog');
});

// form route 
Route::get('admin/logout',[Logincontroller::class,"logout"])->name('logout');// use logout admin