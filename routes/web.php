<?php

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

Route::get('/','HomeController@index')->name('home');

Route::get('home','HomeController@index')->name('home');

// Route::get('home','frontend\HomeController@home')->name('home');

Route::get('lienhe','frontend\ContactController@list')->name('lienhe');

Route::post('lienhe','NewController@insert_contact')->name('contact.add');

Route::get('admin/contact/delete/{id}','NewController@delete_contact')->name('contact.delete');

Route::get('admin/contact/edit/{id}-{status}','NewController@edit_contact')->name('contact.edit');

// Route::get('tinTuc','frontend\Talenwins@news')->name('tinTuc');

Route::get('traiNghiem','HomeController@product')->name('traiNghiem');

// Route::get('dichvu','HomeController@service')->name('dichvu');

Route::get('gioithieu','HomeController@about')->name('gioithieu');


Route::get('talentwins/{slug}','TalentWinsController@show')->name('talentwins');
Route::get('talentchitiet/{slug}','TalentWinsController@detail')->name('talentchitiet');

Route::get('tintucchitiet/{slug}','NewController@detail')->name('tintucchitiet');
Route::get('tintuc/{slug}','NewController@show')->name('tintuc');
Route::get('dichvu/{slug}','Cate_serviceController@show')->name('dichvu');
Route::get('chitietdichvu/{slug}','ServiceController@show')->name('chitietdichvu');











Route::group(['prefix' => 'admin',], function() {
			Route::get('login','LoginController@GetLogin')->middleware('CheckLogout');
			Route::post('login','LoginController@PostLogin');
	});

Route::group(['prefix' => 'admin','middleware'=>'CheckLogin'], function() {
	Route::get('/','HomeController@home');
	Route::get('logout','LoginController@GetLogout');


	//------------------examples---------------------
	Route::get('profile','ExamplesController@GetProfile');
	Route::get('register','ExamplesController@GetRegister');
	Route::post('register','ExamplesController@PostRegister');
	Route::get('list','ExamplesController@GetList');
	Route::get('edit','ExamplesController@EditList');
	Route::get('del/{id}','ExamplesController@DelUser');





	Route::prefix('new')->group(function () {
		Route::get('list','NewController@list')->name('new.list');
		Route::get('add','NewController@add')->name('new.add');
		Route::post('add','NewController@store')->name('new.add');
		Route::get('edit/{id}','NewController@edit')->name('new.edit');
		Route::post('edit/{id}','NewController@update')->name('new.edit');
		Route::get('delete/{id}','NewController@delete')->name('new.delete');
	});

	Route::prefix('cate_new')->group(function () {
		Route::get('list','CateNewController@list')->name('cate_new.list');
		Route::get('add','CateNewController@add')->name('cate_new.add');
		Route::post('add','CateNewController@insert')->name('cate_new.add');
		Route::get('edit','CateNewController@edit')->name('cate_new.edit');
		Route::post('update','CateNewController@update')->name('cate_new.update');
		Route::get('delete/{id}','CateNewController@delete')->name('cate_new.delete');
	});

	Route::prefix('banner')->group(function () {
		Route::get('list','BannerController@list')->name('banner.list');
		Route::get('add','BannerController@add')->name('banner.add');
		Route::post('add','BannerController@insert')->name('banner.insert');
		Route::get('edit/{id}','BannerController@edit')->name('banner.edit');
		Route::post('edit/{id}','BannerController@update')->name('banner.update');
		Route::get('delete/{id}','BannerController@delete')->name('banner.delete');
	});

	Route::prefix('contact')->group(function () {
		Route::get('list','ContactController@list')->name('contact.list');
		Route::get('delete/{id}','ContactController@delete')->name('contact.delete');
		Route::get('see/{id}-{status}','ContactController@see')->name('contact.see');
		Route::get('feedback/{id}-{status}','ContactController@feedback')->name('contact.feedback');
	});

	Route::prefix('adviser')->group(function () {
		Route::get('list','AdviserController@list')->name('adviser.list');
		Route::get('add','AdviserController@add')->name('adviser.add');
		Route::post('add','AdviserController@insert')->name('adviser.add');
		Route::get('edit/{id}','AdviserController@edit')->name('adviser.edit');
		Route::post('edit/{id}','AdviserController@update')->name('adviser.edit');
		Route::get('delete/{id}','AdviserController@delete')->name('adviser.delete');
	});

	Route::prefix('service')->group(function () {
		Route::get('list','ServiceController@list')->name('service.list');
		Route::get('add','ServiceController@add')->name('service.add');
		Route::post('add','ServiceController@insert')->name('service.add');
		Route::get('edit/{id}','ServiceController@edit')->name('service.edit');
		Route::post('edit/{id}','ServiceController@update')->name('service.edit');
		Route::get('delete/{id}','ServiceController@delete')->name('service.delete');
	});

	Route::prefix('cate_service')->group(function () {
		Route::get('list','Cate_serviceController@list')->name('cate_service.list');
		Route::get('add','Cate_serviceController@add')->name('cate_service.add');
		Route::post('add','Cate_serviceController@insert')->name('cate_service.add');
		Route::get('edit/{id}','Cate_serviceController@edit')->name('cate_service.edit');
		Route::post('edit/{id}','Cate_serviceController@update')->name('cate_service.edit');
		Route::get('delete/{id}','Cate_serviceController@delete')->name('cate_service.delete');
	});

	Route::prefix('talent_wins')->group(function () {
		Route::get('list','TalentWinsController@list')->name('talent_wins.list');
		Route::get('add','TalentWinsController@add')->name('talent_wins.add');
		Route::post('add','TalentWinsController@store')->name('talent_wins.add');
		Route::get('edit/{id}','TalentWinsController@edit')->name('talent_wins.edit');
		Route::post('edit/{id}','TalentWinsController@update')->name('talent_wins.edit');
		Route::get('delete/{id}','TalentWinsController@delete')->name('talent_wins.delete');
	});

	Route::prefix('sub_talentwins')->group(function () {
		Route::get('list','SubTalentWinsController@list')->name('sub_talentwins.list');
		Route::get('add','SubTalentWinsController@add')->name('sub_talentwins.add');
		Route::post('add','SubTalentWinsController@insert')->name('sub_talentwins.add');
		Route::get('edit/{id}','SubTalentWinsController@edit')->name('sub_talentwins.edit');
		Route::post('edit/{id}','SubTalentWinsController@update')->name('sub_talentwins.edit');
		Route::get('delete/{id}','SubTalentWinsController@delete')->name('sub_talentwins.delete');
	});

	Route::prefix('support')->group(function () {
		Route::get('list','SupportController@list')->name('support.list');
		Route::get('add','SupportController@add')->name('support.add');
		Route::post('add','SupportController@store')->name('support.add');
		Route::get('edit/{id}','SupportController@edit')->name('support.edit');
		Route::post('edit/{id}','SupportController@update')->name('support.edit');
		Route::get('delete/{id}','SupportController@delete')->name('support.delete');
	});

	Route::prefix('infor_company')->group(function () {
		Route::get('list','InforCompanyController@list')->name('infor_company.list');
		Route::get('add','InforCompanyController@add')->name('infor_company.add');
		Route::post('add','InforCompanyController@store')->name('infor_company.add');
		Route::get('edit/{id}','InforCompanyController@edit')->name('infor_company.edit');
		Route::post('edit/{id}','InforCompanyController@update')->name('infor_company.edit');
		Route::get('delete/{id}','InforCompanyController@delete')->name('infor_company.delete');
	});

	Route::prefix('e_learning')->group(function () {
		Route::get('list','ELearningController@list')->name('e_learning.list');
		Route::get('add','ELearningController@add')->name('e_learning.add');
		Route::post('add','ELearningController@insert')->name('e_learning.add');
		Route::get('edit/{id}','ELearningController@edit')->name('e_learning.edit');
		Route::post('update/{id}','ELearningController@update')->name('e_learning.update');
		Route::get('delete/{id}','ELearningController@delete')->name('e_learning.delete');
	});

	Route::prefix('sub_e_learning')->group(function () {
		Route::get('list','Sub_e_learningController@list')->name('sub_e_learning.list');
		Route::get('add','Sub_e_learningController@add')->name('sub_e_learning.add');
		Route::post('add','Sub_e_learningController@insert')->name('sub_e_learning.add');
		Route::get('edit/{id}','Sub_e_learningController@edit')->name('sub_e_learning.edit');
		Route::post('update/{id}','Sub_e_learningController@update')->name('sub_e_learning.update');
		Route::get('delete/{id}','Sub_e_learningController@delete')->name('sub_e_learning.delete');
	});

	Route::prefix('product')->group(function () {
		Route::get('list','ProductController@list')->name('product.list');
		Route::get('add','ProductController@add')->name('product.add');
		Route::post('add','ProductController@store')->name('product.add');
		Route::get('edit/{id}','ProductController@edit')->name('product.edit');
		Route::post('update/{id}','ProductController@update')->name('product.update');
		Route::get('delete/{id}','ProductController@delete')->name('product.delete');
	});

	Route::prefix('introduct')->group(function () {
		Route::get('','IntroductController@list');
		Route::get('edit/{id}','IntroductController@edit');
		Route::post('edit/{id}','IntroductController@PostEdit');


		Route::prefix('prize')->group(function () {
			Route::get('','IntroductController@ListPrize');
			Route::get('edit/{id}','IntroductController@EditPrize');
			Route::post('edit/{id}','IntroductController@PostEditPrize');
		});

		Route::prefix('cate_prize')->group(function () {
			Route::get('','IntroductController@ListcatePrize');
			Route::get('edit/{id}','IntroductController@EditcatePrize');
			Route::post('edit/{id}','IntroductController@PostEditcatePrize');
		});

		Route::prefix('cate_prize_new')->group(function () {
			Route::get('','IntroductController@ListcatePrizenew');
			Route::get('edit/{id}','IntroductController@EditcatePrizenew');
			Route::post('edit/{id}','IntroductController@PostEditcatePrizenew');
		});
		


	});




});



