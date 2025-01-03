<?php

use App\Http\Controllers\Vkl_Loai_San_PhamController;
use App\Http\Controllers\Vkl_San_PhamController;
use App\Http\Controllers\Vkl_Quan_TriController;
use App\Http\Controllers\Vkl_Khach_HangController;
use App\Http\Controllers\Vkl_Hoa_DonController;
use App\Http\Controllers\Vkl_Ct_Hoa_DonController;
use App\Http\Controllers\Vkl_Tin_TucController;
use App\Http\Controllers\Vkl_Danh_Sach_Quan_TriController;
use App\Http\Controllers\Vkl_LoginController;
use App\Http\Controllers\Vkl_SignupController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


#admins -route
Route::get('/vkl-admins',function(){
    return view('vklAdmins.index');
});


Route::get('/vkl-admins/vklDsQuanTris/vklDanhMucs', [Vkl_Danh_Sach_Quan_TriController::class, 'vklDanhMuc'])->name('vklAdmins.vklDsQuanTris.vklDanhMucs');

Route::get('/vkl-admins/vklDsQuanTris/vklTinTucs', [Vkl_Danh_Sach_Quan_TriController::class, 'vklTinTuc'])->name('vklAdmins.vklDsQuanTris.vklDanhMucs.vklTinTuc');

Route::get('/vkl-admins/vklDsQuanTris/vklSanPham', [Vkl_Danh_Sach_Quan_TriControllerr::class, 'vklSanPham'])->name('vklAdmins.vklDsQuanTris.vklDanhMucs.vklSanPham');

Route::get('/vkl-admins/vklDsQuanTris/vklMoTa/{id}', [Vkl_Danh_Sach_Quan_TriController::class, 'vklMoTa'])->name('vklAdmins.vklDsQuanTris.vklDanhMucs.vklMoTa');

Route::get('/vkl-admins/vklDsQuanTris/vklNguoiDung', [Vkl_Danh_Sach_Quan_TriController::class, 'vklNguoiDung'])->name('vklAdmins.vklDsQuanTris.vklDanhMucs.vklNguoiDung');




// loai san pham
Route::get('/vkl-admins/vkl-loai-san-phams',[Vkl_Loai_San_PhamController::class,'vklList'])->name('vklAdmins.vklLoaiSanPhams.vkllist');



Route::get('/vkl-admins/vkl-loai-san-phams/vkl-create',[Vkl_Loai_San_PhamController::class,'vklCreate'])->name('vklAdmins.vklLoaiSanPhams.vklCreate');
Route::post('/vkl-admins/vkl-loai-san-phams/vkl-create',[Vkl_Loai_San_PhamController::class,'vklCreateSubmit'])->name('vklAdmins.vklLoaiSanPhams.vklCreateSubmit');



Route::get('/vkl-admins/vkl-loai-san-phams/vkl-edit/{id}',[Vkl_Loai_San_PhamController::class,'vklEdit'])->name('vklAdmins.vklLoaiSanPhams.vklEdit');
Route::post('/vkl-admins/vkl-loai-san-phams/vkl-edit',[Vkl_Loai_San_PhamController::class,'vklEditSubmit'])->name('vklAdmins.vklLoaiSanPhams.vklEditSubmit');



Route::get('/vkl-admins/vkl-loai-san-phams/vkl-delete/{id}',[Vkl_Loai_San_PhamController::class,'vklDelete'])->name('vklAdmins.vklLoaiSanPhams.vklDelete');

Route::get('/vkl-admins/vkl-loai-san-phams/vkl-detail/{id}',[Vkl_Loai_San_PhamController::class,'vklDetail'])->name('vklAdmins.vklLoaiSanPhams.vklDetail');





// san pham
Route::get('/vkl-admins/vkl-san-phams',[Vkl_San_PhamController::class,'vklList'])->name('vklAdmins.vklSanPhams.vkllist');


Route::get('/vkl-admins/vkl-san-phams/vkl-create',[Vkl_San_PhamController::class,'vklCreate'])->name('vklAdmins.vklSanPhams.vklCreate');
Route::post('/vkl-admins/vkl-san-phams/vkl-create',[Vkl_San_PhamController::class,'vklCreateSubmit'])->name('vklAdmins.vklSanPhams.vklCreateSubmit');



Route::get('/vkl-admins/vkl-san-phams/vkl-edit/{id}',[Vkl_San_PhamController::class,'vklEdit'])->name('vklAdmins.vklSanPhams.vklEdit');
Route::post('/vkl-admins/vkl-san-phams/vkl-edit',[Vkl_San_PhamController::class,'vklEditSubmit'])->name('vklAdmins.vklSanPhams.vklEditSubmit');


Route::get('/vkl-admins/vkl-san-phams/vkl-delete/{id}',[Vkl_San_PhamController::class,'vklDelete'])->name('vklAdmins.vklSanPhams.vklDelete');


Route::get('/vkl-admins/vkl-san-phams/vkl-detail/{id}',[Vkl_San_PhamController::class,'vklDetail'])->name('vklAdmins.vklSanPhams.vklDetail');






#quan tri
Route::get('/vkl-admins/vkl-quan-tris',[Vkl_Quan_TriController::class,'vklList'])->name('vklAdmins.vklQuanTris.vkllist');


Route::get('/vkl-admins/vkl-quan-tris/vkl-create',[Vkl_Quan_TriController::class,'vklCreate'])->name('vklAdmins.vklQuanTris.vklCreate');
Route::post('/vkl-admins/vkl-quan-tris/vkl-create',[Vkl_Quan_TriController::class,'vklCreateSubmit'])->name('vklAdmins.vklQuanTris.vklCreateSubmit');




Route::get('/vkl-admins/vkl-quan-tris/vkl-edit/{id}',[Vkl_Quan_TriController::class,'vklEdit'])->name('vklAdmins.vklQuanTris.vklEdit');
Route::post('/vkl-admins/vkl-quan-tris/vkl-edit',[Vkl_Quan_TriController::class,'vklEditSubmit'])->name('vklAdmins.vklQuanTris.vklEditSubmit');



Route::get('/vkl-admins/vkl-quan-tris/vkl-delete/{id}',[Vkl_Quan_TriController::class,'vklDelete'])->name('vklAdmins.vklQuanTris.vklDelete');

Route::get('/vkl-admins/vkl-quan-tris/vkl-detail/{id}',[Vkl_Quan_TriController::class,'vklDetail'])->name('vklAdmins.vklQuanTris.vklDetail');




// khach hang
Route::get('/vkl-admins/vkl-khach-hangs',[Vkl_Khach_HangController::class, 'vklList'])->name('vklAdmins.vklKhachHangs.vkllist');


Route::get('/vkl-admins/vkl-khach-hangs/vkl-create',[Vkl_Khach_HangController::class,'vklCreate'])->name('vklAdmins.vklKhachHangs.vklCreate');
Route::post('/vkl-admins/vkl-khach-hangs/vkl-create',[Vkl_Khach_HangController::class,'vklCreateSubmit'])->name('vklAdmins.vklKhachHangs.vklCreateSubmit');



Route::get('/vkl-admins/vkl-khach-hangs/vkl-edit/{id}',[Vkl_Khach_HangController::class,'vklEdit'])->name('vklAdmins.vklKhachHangs.vklEdit');
Route::post('/vkl-admins/vkl-khach-hangs/vkl-edit',[Vkl_Khach_HangController::class,'vklEditSubmit'])->name('vklAdmins.vklKhachHangs.vklEditSubmit');



Route::get('/vkl-admins/vkl-khach-hangs/vkl-delete/{id}',[Vkl_Khach_HangController::class,'vklDelete'])->name('vklAdmins.vklKhachHangs.vklDelete');



Route::get('/vkl-admins/vkl-khach-hangs/vkl-detail/{id}',[Vkl_Khach_HangController::class,'vklDetail'])->name('vklAdmins.vklKhachHangs.vklDetail');





// hoa don
Route::get('/vkl-admins/vkl-hoa-dons',[Vkl_Hoa_DonController::class,'vklList'])->name('vklAdmins.vklHoaDons.vkllist');

Route::get('/vkl-admins/vkl-hoa-dons/vkl-create',[Vkl_Hoa_DonController::class,'vklCreate'])->name('vklAdmins.vklHoaDons.vklCreate');
Route::post('/vkl-admins/vkl-hoa-dons/vkl-create',[Vkl_Hoa_DonController::class,'vklCreateSubmit'])->name('vklAdmins.vklHoaDons.vklCreateSubmit');

Route::get('/vkl-admins/vkl-hoa-dons/vkl-edit/{id}',[Vkl_Hoa_DonController::class,'vklEdit'])->name('vklAdmins.vklHoaDons.vklEdit');
Route::post('/vkl-admins/vkl-hoa-dons/vkl-edit',[Vkl_Hoa_DonController::class,'vklEditSubmit'])->name('vklAdmins.vklHoaDons.vklEditSubmit');

Route::get('/vkl-admins/vkl-hoa-dons/vkl-detail/{id}',[Vkl_Hoa_DonController::class,'vklDetail'])->name('vklAdmins.vklHoaDons.vklDetail');

Route::get('/vkl-admins/vkl-hoa-dons/vkl-delete/{id}',[Vkl_Hoa_DonController::class,'vklDelete'])->name('vklAdmins.vklHoaDons.vklDelete');






//ct hoa don
Route::get('/vkl-admins/vkl-ct-hoa-dons',[Vkl_Ct_Hoa_DonController::class,'vklList'])->name('vklAdmins.vklCtHoaDons.vkllist');

Route::get('/vkl-admins/vkl-ct-hoa-dons/vkl-create',[Vkl_Ct_Hoa_DonController::class,'vklCreate'])->name('vklAdmins.vklCtHoaDons.vklCreate');
Route::post('/vkl-admins/vkl-ct-hoa-dons/vkl-create',[Vkl_Ct_Hoa_DonController::class,'vklCreateSubmit'])->name('vklAdmins.vklCtHoaDons.vklCreateSubmit');

Route::get('/vkl-admins/vkl-ct-hoa-dons/vkl-edit/{id}',[Vkl_Ct_Hoa_DonController::class,'vklEdit'])->name('vklAdmins.vklCtHoaDons.vklEdit');
Route::post('/vkl-admins/vkl-ct-hoa-dons/vkl-edit',[Vkl_Ct_Hoa_DonController::class,'vklEditSubmit'])->name('vklAdmins.vklCtHoaDons.vklEditSubmit');

Route::get('/vkl-admins/vkl-ct-hoa-dons/vkl-detail/{id}',[Vkl_Ct_Hoa_DonController::class,'vklDetail'])->name('vklAdmins.vklCtHoaDons.vklDetail');

Route::get('/vkl-admins/vkl-ct-hoa-dons/vkl-delete/{id}',[Vkl_Ct_Hoa_DonController::class,'vklDelete'])->name('vklAdmins.vklCtHoaDons.vklDelete');



//tin tuc 
Route::get('/vkl-admins/vkl-tin-tucs',[Vkl_Tin_TucController::class,'vklList'])->name('vklAdmins.vklTinTucs.vkllist');

Route::get('/vkl-admins/vkl-tin-tucs/vkl-create',[Vkl_Tin_TucController::class,'vklCreate'])->name('vklAdmins.vklTinTucs.vklCreate');
Route::post('/vkl-admins/vkl-tin-tucs/vkl-create',[Vkl_Tin_TucController::class,'vklCreateSubmit'])->name('vklAdmins.vklTinTucs.vklCreateSubmit');

Route::get('/vkl-admins/vkl-tin-tucs/vkl-edit/{id}',[Vkl_Tin_TucController::class,'vklEdit'])->name('vklAdmins.vklTinTucs.vklEdit');
Route::post('/vkl-admins/vkl-tin-tucs/vkl-edit',[Vkl_Tin_TucController::class,'vklEditSubmit'])->name('vklAdmins.vklTinTucs.vklEditSubmit');

Route::get('/vkl-admins/vkl-tin-tucs/vkl-detail/{id}',[Vkl_Tin_TucController::class,'vklDetail'])->name('vklAdmins.vklTinTucs.vklDetail');

Route::get('/vkl-admins/vkl-tin-tucs/vkl-delete/{id}',[Vkl_Tin_TucController::class,'vklDelete'])->name('vklAdmins.vklTinTucs.vklDelete');
