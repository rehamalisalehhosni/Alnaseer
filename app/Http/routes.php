<?php

Route::auth();
Route::get('/', 'front\HomeController@index');
Route::get('contactUs', ['as' => 'contactUs.index', 'uses' => 'front\ContactUsController@index']);
Route::post('contactUs', ['as' => 'contactUs.store', 'uses' => 'front\ContactUsController@store']);
Route::get('ourProcessing', ['as' => 'ourProcessing.index', 'uses' => 'front\OurProcessingController@index']);
Route::get('ourCustomers', ['as' => 'ourCustomers.index', 'uses' => 'front\OurCustomersController@index']);
Route::post('subscribe/add', ['as' => 'subscribe.add', 'uses' => 'front\SubscribeController@add']);

Route::group(['prefix' => 'adminControl',  'middleware' => 'auth'], function()
{
  //////////////Users///////////////////
  Route::get('/', ['as' => 'statistic.index', 'uses' => 'admin\StatisticController@index']);
  Route::get('users', ['as' => 'users.index', 'uses' => 'admin\UserController@index']);
  Route::get('users/create', ['as' => 'users.create', 'uses' => 'admin\UserController@create']);
  Route::post('users/create', ['as' => 'users.store', 'uses' => 'admin\UserController@store']);
  Route::get('users/{id}', ['as' => 'users.show', 'uses' => 'admin\UserController@show']);
  Route::get('users/{id}/edit', ['as' => 'users.edit', 'uses' => 'admin\UserController@edit']);
  Route::patch('users/{id}', ['as' => 'users.update', 'uses' => 'admin\UserController@update']);
  Route::delete('users/{id}', ['as' => 'users.destroy', 'uses' => 'admin\UserController@destroy']);
  Route::post('uploadImage/store', ['as' => 'uploadImage.store', 'uses' => 'admin\UploadImageController@store']);
  //////////////Setting///////////////////
  Route::get('setting/{id}/edit', ['as' => 'setting.edit', 'uses' => 'admin\SettingController@edit']);
  Route::patch('setting/{id}', ['as' => 'setting.update', 'uses' => 'admin\SettingController@update']);
  //////////////Setting///////////////////
  Route::get('ourProcess/{id}/edit', ['as' => 'ourProcess.edit', 'uses' => 'admin\OurProcessController@edit']);
  Route::patch('ourProcess/{id}', ['as' => 'ourProcess.update', 'uses' => 'admin\OurProcessController@update']);
  /////////socialMedia ///////////
  Route::get('socialMedia', ['as' => 'socialMedia.index', 'uses' => 'admin\SocialMediaController@index']);
  Route::get('socialMedia/create', ['as' => 'socialMedia.create', 'uses' => 'admin\SocialMediaController@create']);
  Route::post('socialMedia/create', ['as' => 'socialMedia.store', 'uses' => 'admin\SocialMediaController@store']);
  Route::get('socialMedia/{id}', ['as' => 'socialMedia.show', 'uses' => 'admin\SocialMediaController@show']);
  Route::get('socialMedia/{id}/edit', ['as' => 'socialMedia.edit', 'uses' => 'admin\SocialMediaController@edit']);
  Route::patch('socialMedia/{id}', ['as' => 'socialMedia.update', 'uses' => 'admin\SocialMediaController@update']);
  Route::delete('socialMedia/{id}', ['as' => 'socialMedia.destroy', 'uses' => 'admin\SocialMediaController@destroy']);

  /////////Contact us ///////////
  Route::get('contactRequest', ['as' => 'contactRequest.index', 'uses' => 'admin\ContactRequestController@index']);
  Route::get('newsletter', ['as' => 'newsletter.index', 'uses' => 'admin\NewsletterController@index']);
  Route::get('sendMsg', ['as' => 'newsletter.message', 'uses' => 'admin\NewsletterController@message']);
  Route::post('sendMsg/send', ['as' => 'newsletter.send', 'uses' => 'admin\NewsletterController@send']);
  /////////Services ///////////
  Route::get('services', ['as' => 'services.index', 'uses' => 'admin\ServicesController@index']);
  Route::get('services/create', ['as' => 'services.create', 'uses' => 'admin\ServicesController@create']);
  Route::post('services/create', ['as' => 'services.store', 'uses' => 'admin\ServicesController@store']);
  Route::get('services/{id}', ['as' => 'services.show', 'uses' => 'admin\ServicesController@show']);
  Route::get('services/{id}/edit', ['as' => 'services.edit', 'uses' => 'admin\ServicesController@edit']);
  Route::patch('services/{id}', ['as' => 'services.update', 'uses' => 'admin\ServicesController@update']);
  Route::delete('services/{id}', ['as' => 'services.destroy', 'uses' => 'admin\ServicesController@destroy']);
  /////////Services ///////////
  Route::get('customer', ['as' => 'customer.index', 'uses' => 'admin\CustomerController@index']);
  Route::get('customer/create', ['as' => 'customer.create', 'uses' => 'admin\CustomerController@create']);
  Route::post('customer/create', ['as' => 'customer.store', 'uses' => 'admin\CustomerController@store']);
  Route::get('customer/{id}', ['as' => 'customer.show', 'uses' => 'admin\CustomerController@show']);
  Route::get('customer/{id}/edit', ['as' => 'customer.edit', 'uses' => 'admin\CustomerController@edit']);
  Route::patch('customer/{id}', ['as' => 'customer.update', 'uses' => 'admin\CustomerController@update']);
  Route::delete('customer/{id}', ['as' => 'customer.destroy', 'uses' => 'admin\CustomerController@destroy']);

  /////////slider ///////////
/*  Route::get('slider', ['as' => 'slider.index', 'uses' => 'admin\SliderController@index', 'middleware' => ['permission:slider-list|slider-create|slider-edit|slider-delete']]);
  Route::get('slider/create', ['as' => 'slider.create', 'uses' => 'admin\SliderController@create', 'middleware' => ['permission:slider-create']]);
  Route::post('slider/create', ['as' => 'slider.store', 'uses' => 'admin\SliderController@store', 'middleware' => ['permission:slider-create']]);
  Route::get('slider/{id}', ['as' => 'slider.show', 'uses' => 'admin\SliderController@show', 'middleware' => ['permission:slider-list']]);
  Route::get('slider/{id}/edit', ['as' => 'slider.edit', 'uses' => 'admin\SliderController@edit', 'middleware' => ['permission:slider-edit']]);
  Route::patch('slider/{id}', ['as' => 'slider.update', 'uses' => 'admin\SliderController@update', 'middleware' => ['permission:slider-edit']]);
  Route::delete('slider/{id}', ['as' => 'slider.destroy', 'uses' => 'admin\SliderController@destroy', 'middleware' => ['permission:slider-delete']]);
*/  /////////CpasOwnersCertifications ///////////
  /////////Services ///////////
/*  Route::get('services', ['as' => 'services.index', 'uses' => 'admin\ServicesController@index', 'middleware' => ['permission:services-list|services-create|services-edit|services-delete']]);
  Route::get('services/create', ['as' => 'services.create', 'uses' => 'admin\ServicesController@create', 'middleware' => ['permission:services-create']]);
  Route::post('services/create', ['as' => 'services.store', 'uses' => 'admin\ServicesController@store', 'middleware' => ['permission:services-create']]);
  Route::get('services/{id}', ['as' => 'services.show', 'uses' => 'admin\ServicesController@show', 'middleware' => ['permission:services-list']]);
  Route::get('services/{id}/edit', ['as' => 'services.edit', 'uses' => 'admin\ServicesController@edit', 'middleware' => ['permission:services-edit']]);
  Route::patch('services/{id}', ['as' => 'services.update', 'uses' => 'admin\ServicesController@update', 'middleware' => ['permission:services-edit']]);
  Route::delete('services/{id}', ['as' => 'services.destroy', 'uses' => 'admin\ServicesController@destroy', 'middleware' => ['permission:services-delete']]);
*/  /////////Services ///////////
  /////////Pages ///////////
/*  Route::get('pages', ['as' => 'pages.index', 'uses' => 'admin\PagesController@index', 'middleware' => ['permission:pages-list|pages-create|pages-edit|pages-delete']]);
  Route::get('pages/create', ['as' => 'pages.create', 'uses' => 'admin\PagesController@create', 'middleware' => ['permission:pages-create']]);
  Route::post('pages/create', ['as' => 'pages.store', 'uses' => 'admin\PagesController@store', 'middleware' => ['permission:pages-create']]);
  Route::get('pages/{id}', ['as' => 'pages.show', 'uses' => 'admin\PagesController@show', 'middleware' => ['permission:pages-list']]);
  Route::get('pages/{id}/edit', ['as' => 'pages.edit', 'uses' => 'admin\PagesController@edit', 'middleware' => ['permission:pages-edit']]);
  Route::patch('pages/{id}', ['as' => 'pages.update', 'uses' => 'admin\PagesController@update', 'middleware' => ['permission:pages-edit']]);
  Route::delete('pages/{id}', ['as' => 'pages.destroy', 'uses' => 'admin\PagesController@destroy', 'middleware' => ['permission:pages-delete']]);
*/  /////////careers ///////////
/*  Route::get('careers', ['as' => 'careers.index', 'uses' => 'admin\CareersController@index', 'middleware' => ['permission:careers-list|careers-create|careers-edit|careers-delete']]);
  Route::get('careers/create', ['as' => 'careers.create', 'uses' => 'admin\CareersController@create', 'middleware' => ['permission:careers-create']]);
  Route::post('careers/create', ['as' => 'careers.store', 'uses' => 'admin\CareersController@store', 'middleware' => ['permission:careers-create']]);
  Route::get('careers/{id}', ['as' => 'careers.show', 'uses' => 'admin\CareersController@show', 'middleware' => ['permission:careers-list']]);
  Route::get('careers/{id}/edit', ['as' => 'careers.edit', 'uses' => 'admin\CareersController@edit', 'middleware' => ['permission:careers-edit']]);
  Route::patch('careers/{id}', ['as' => 'careers.update', 'uses' => 'admin\CareersController@update', 'middleware' => ['permission:careers-edit']]);
  Route::delete('careers/{id}', ['as' => 'careers.destroy', 'uses' => 'admin\CareersController@destroy', 'middleware' => ['permission:careers-delete']]);
*/  /////////Newsletter ///////////
/*  Route::get('newsletter', ['as' => 'newsletter.index', 'uses' => 'admin\NewsletterController@index', 'middleware' => ['permission:newsletter-list|newsletter-create|newsletter-edit|newsletter-delete']]);
  Route::get('newsletter/create', ['as' => 'newsletter.create', 'uses' => 'admin\NewsletterController@create', 'middleware' => ['permission:newsletter-create']]);
  Route::post('newsletter/create', ['as' => 'newsletter.store', 'uses' => 'admin\NewsletterController@store', 'middleware' => ['permission:newsletter-create']]);
  Route::get('newsletter/{id}', ['as' => 'newsletter.show', 'uses' => 'admin\NewsletterController@show', 'middleware' => ['permission:newsletter-list']]);
  Route::get('newsletter/{id}/edit', ['as' => 'newsletter.edit', 'uses' => 'admin\NewsletterController@edit', 'middleware' => ['permission:newsletter-edit']]);
  Route::patch('newsletter/{id}', ['as' => 'newsletter.update', 'uses' => 'admin\NewsletterController@update', 'middleware' => ['permission:newsletter-edit']]);
  Route::delete('newsletter/{id}', ['as' => 'newsletter.destroy', 'uses' => 'admin\NewsletterController@destroy', 'middleware' => ['permission:newsletter-delete']]);
*/
});
