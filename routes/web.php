<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/login', function () {
    return view('admin.login');
});


Route::group(['middleware' => ['admin']], function () {
    Route::get('/dashboard', ['as' => '/dashboard', 'uses' => 'App\Http\Controllers\Admin\Dashboard\DashboardController@index']);
    Route::get('/change-password', ['as' => '/change-password', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\ChangePassword@index']);
    Route::post('/update-password', ['as' => '/update-password', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\ChangePassword@updatePassword']);
    Route::get('/edit-user-profile', ['as' => 'edit-user-profile', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\RegisterController@editUsersProfile']);

    Route::post('/update-user-profile', ['as' => 'update-user-profile', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\RegisterController@updateProfile']);

    Route::post('/website-contact', ['as' => 'website-contact', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\RegisterController@updateProfile']);




    Route::get('/list-location-address', ['as' => 'list-location-address', 'uses' => 'App\Http\Controllers\Admin\Master\LocationAddressController@index']);
    Route::get('/add-location-address', ['as' => 'add-location-address', 'uses' => 'App\Http\Controllers\Admin\Master\LocationAddressController@add']);
    Route::post('/add-location-address', ['as' => 'add-location-address', 'uses' => 'App\Http\Controllers\Admin\Master\LocationAddressController@store']);
    Route::get('/edit-location-address/{edit_id}', ['as' => 'edit-location-address', 'uses' => 'App\Http\Controllers\Admin\Master\LocationAddressController@edit']);
    Route::post('/update-location-address', ['as' => 'update-location-address', 'uses' => 'App\Http\Controllers\Admin\Master\LocationAddressController@update']);
    Route::post('/show-location-address', ['as' => 'show-location-address', 'uses' => 'App\Http\Controllers\Admin\Master\LocationAddressController@show']);
    Route::post('/delete-location-address', ['as' => 'delete-location-address', 'uses' => 'App\Http\Controllers\Admin\Master\LocationAddressController@destroy']);
    Route::post('/update-one-location-address', ['as' => 'update-one-location-address', 'uses' => 'App\Http\Controllers\Admin\Master\LocationAddressController@updateOne']);
    
// ==============Slider============
    Route::get('/list-slide', ['as' => 'list-slide', 'uses' => 'App\Http\Controllers\Admin\Home\SliderController@index']);
    Route::get('/add-slide', ['as' => 'add-slide', 'uses' => 'App\Http\Controllers\Admin\Home\SliderController@add']);
    Route::post('/add-slide', ['as' => 'add-slide', 'uses' => 'App\Http\Controllers\Admin\Home\SliderController@store']);
    Route::get('/edit-slide/{edit_id}', ['as' => 'edit-slide', 'uses' => 'App\Http\Controllers\Admin\Home\SliderController@edit']);
    Route::post('/update-slide', ['as' => 'update-slide', 'uses' => 'App\Http\Controllers\Admin\Home\SliderController@update']);
    Route::post('/show-slide', ['as' => 'show-slide', 'uses' => 'App\Http\Controllers\Admin\Home\SliderController@show']);
    Route::post('/delete-slide', ['as' => 'delete-slide', 'uses' => 'App\Http\Controllers\Admin\Home\SliderController@destroy']);
    Route::post('/update-active-slide', ['as' => 'update-active-slide', 'uses' => 'App\Http\Controllers\Admin\Home\SliderController@updateOne']);
    
// =============About Us============
    Route::get('/list-aboutus', ['as' => 'list-aboutus', 'uses' => 'App\Http\Controllers\Admin\Home\AboutUsController@index']);
    Route::get('/add-aboutus', ['as' => 'add-aboutus', 'uses' => 'App\Http\Controllers\Admin\Home\AboutUsController@add']);
    Route::post('/add-aboutus', ['as' => 'add-aboutus', 'uses' => 'App\Http\Controllers\Admin\Home\AboutUsController@store']);
    Route::get('/edit-aboutus/{edit_id}', ['as' => 'edit-aboutus', 'uses' => 'App\Http\Controllers\Admin\Home\AboutUsController@edit']);
    Route::post('/update-aboutus', ['as' => 'update-aboutus', 'uses' => 'App\Http\Controllers\Admin\Home\AboutUsController@update']);
    Route::post('/show-aboutus', ['as' => 'show-aboutus', 'uses' => 'App\Http\Controllers\Admin\Home\AboutUsController@show']);
    Route::post('/delete-aboutus', ['as' => 'delete-aboutus', 'uses' => 'App\Http\Controllers\Admin\Home\AboutUsController@destroy']);
    Route::post('/update-active-aboutus', ['as' => 'update-active-aboutus', 'uses' => 'App\Http\Controllers\Admin\Home\AboutUsController@updateOne']);
  
  // =============Product============
  Route::get('/list-product', ['as' => 'list-product', 'uses' => 'App\Http\Controllers\Admin\Home\ProductController@index']);
  Route::get('/add-product', ['as' => 'add-product', 'uses' => 'App\Http\Controllers\Admin\Home\ProductController@add']);
  Route::post('/add-product', ['as' => 'add-product', 'uses' => 'App\Http\Controllers\Admin\Home\ProductController@store']);
  Route::get('/edit-product/{edit_id}', ['as' => 'edit-product', 'uses' => 'App\Http\Controllers\Admin\Home\ProductController@edit']);
  Route::post('/update-product', ['as' => 'update-product', 'uses' => 'App\Http\Controllers\Admin\Home\ProductController@update']);
  Route::post('/show-product', ['as' => 'show-product', 'uses' => 'App\Http\Controllers\Admin\Home\ProductController@show']);
  Route::post('/delete-product', ['as' => 'delete-product', 'uses' => 'App\Http\Controllers\Admin\Home\ProductController@destroy']);
  Route::post('/update-active-product', ['as' => 'update-active-product', 'uses' => 'App\Http\Controllers\Admin\Home\ProductController@updateOne']);

    // ============Marquee=============
    Route::get('/list-marquee-tab', ['as' => 'list-marquee-tab', 'uses' => 'App\Http\Controllers\Admin\Master\MarqueeTabController@index']);
    Route::get('/add-marquee-tab', ['as' => 'add-marquee-tab', 'uses' => 'App\Http\Controllers\Admin\Master\MarqueeTabController@add']);
    Route::post('/add-marquee-tab', ['as' => 'add-marquee-tab', 'uses' => 'App\Http\Controllers\Admin\Master\MarqueeTabController@store']);
    Route::get('/edit-marquee-tab/{edit_id}', ['as' => 'edit-marquee-tab', 'uses' => 'App\Http\Controllers\Admin\Master\MarqueeTabController@edit']);
    Route::post('/update-marquee-tab', ['as' => 'update-marquee-tab', 'uses' => 'App\Http\Controllers\Admin\Master\MarqueeTabController@update']);
    Route::post('/show-marquee-tab', ['as' => 'show-marquee-tab', 'uses' => 'App\Http\Controllers\Admin\Master\MarqueeTabController@show']);
    Route::post('/delete-marquee-tab', ['as' => 'delete-marquee-tab', 'uses' => 'App\Http\Controllers\Admin\Master\MarqueeTabController@destroy']);
    Route::post('/update-one-marquee-tab', ['as' => 'update-one-marquee-tab', 'uses' => 'App\Http\Controllers\Admin\Master\MarqueeTabController@updateOne']);
    
     Route::get('/list-courses', ['as' => 'list-courses', 'uses' => 'App\Http\Controllers\Admin\Master\CourseController@index']);
    Route::get('/add-courses', ['as' => 'add-courses', 'uses' => 'App\Http\Controllers\Admin\Master\CourseController@add']);
    Route::post('/add-courses', ['as' => 'add-courses', 'uses' => 'App\Http\Controllers\Admin\Master\CourseController@store']);
    Route::get('/edit-courses/{edit_id}', ['as' => 'edit-courses', 'uses' => 'App\Http\Controllers\Admin\Master\CourseController@edit']);
    Route::post('/update-courses', ['as' => 'update-courses', 'uses' => 'App\Http\Controllers\Admin\Master\CourseController@update']);
    Route::post('/show-courses', ['as' => 'show-courses', 'uses' => 'App\Http\Controllers\Admin\Master\CourseController@show']);
    Route::post('/delete-courses', ['as' => 'delete-courses', 'uses' => 'App\Http\Controllers\Admin\Master\CourseController@destroy']);
    Route::post('/update-active-courses', ['as' => 'update-active-courses', 'uses' => 'App\Http\Controllers\Admin\Master\CourseController@updateOne']);


    // ============marquee=============
    Route::get('/list-marquee', ['as' => 'list-marquee', 'uses' => 'App\Http\Controllers\Admin\Home\MarqueeController@index']);
    Route::get('/add-marquee', ['as' => 'add-marquee', 'uses' => 'App\Http\Controllers\Admin\Home\MarqueeController@add']);
    Route::post('/add-marquee', ['as' => 'add-marquee', 'uses' => 'App\Http\Controllers\Admin\Home\MarqueeController@store']);
    Route::get('/edit-marquee/{edit_id}', ['as' => 'edit-marquee', 'uses' => 'App\Http\Controllers\Admin\Home\MarqueeController@edit']);
    Route::post('/update-marquee', ['as' => 'update-marquee', 'uses' => 'App\Http\Controllers\Admin\Home\MarqueeController@update']);
    Route::post('/show-marquee', ['as' => 'show-marquee', 'uses' => 'App\Http\Controllers\Admin\Home\MarqueeController@show']);
    Route::post('/delete-marquee', ['as' => 'delete-marquee', 'uses' => 'App\Http\Controllers\Admin\Home\MarqueeController@destroy']);
    Route::post('/update-one_marquee', ['as' => 'update-one_marquee', 'uses' => 'App\Http\Controllers\Admin\Home\MarqueeController@updateOne']);

     // =============upcoming courses============
     Route::get('/list-upcoming-courses', ['as' => 'list-upcoming-courses', 'uses' => 'App\Http\Controllers\Admin\Home\UpcomingCoursesController@index']);
     Route::get('/add-upcoming-courses', ['as' => 'add-upcoming-courses', 'uses' => 'App\Http\Controllers\Admin\Home\UpcomingCoursesController@add']);
     Route::post('/add-upcoming-courses', ['as' => 'add-upcoming-courses', 'uses' => 'App\Http\Controllers\Admin\Home\UpcomingCoursesController@store']);
     Route::get('/edit-upcoming-courses/{edit_id}', ['as' => 'edit-upcoming-courses', 'uses' => 'App\Http\Controllers\Admin\Home\UpcomingCoursesController@edit']);
     Route::post('/update-upcoming-courses', ['as' => 'update-upcoming-courses', 'uses' => 'App\Http\Controllers\Admin\Home\UpcomingCoursesController@update']);
     Route::post('/show-upcoming-courses', ['as' => 'show-upcoming-courses', 'uses' => 'App\Http\Controllers\Admin\Home\UpcomingCoursesController@show']);
     Route::post('/delete-upcoming-courses', ['as' => 'delete-upcoming-courses', 'uses' => 'App\Http\Controllers\Admin\Home\UpcomingCoursesController@destroy']);
     Route::post('/update-active-upcoming-courses', ['as' => 'update-active-upcoming-courses', 'uses' => 'App\Http\Controllers\Admin\Home\UpcomingCoursesController@updateOne']);
     
    // =============Testimonial============
    Route::get('/list-testimonial', ['as' => 'list-testimonial', 'uses' => 'App\Http\Controllers\Admin\Home\TestimonialController@index']);
    Route::get('/add-testimonial', ['as' => 'add-testimonial', 'uses' => 'App\Http\Controllers\Admin\Home\TestimonialController@add']);
    Route::post('/add-testimonial', ['as' => 'add-testimonial', 'uses' => 'App\Http\Controllers\Admin\Home\TestimonialController@store']);
    Route::get('/edit-testimonial/{edit_id}', ['as' => 'edit-testimonial', 'uses' => 'App\Http\Controllers\Admin\Home\TestimonialController@edit']);
    Route::post('/update-testimonial', ['as' => 'update-testimonial', 'uses' => 'App\Http\Controllers\Admin\Home\TestimonialController@update']);
    Route::post('/show-testimonial', ['as' => 'show-testimonial', 'uses' => 'App\Http\Controllers\Admin\Home\TestimonialController@show']);
    Route::post('/delete-testimonial', ['as' => 'delete-testimonial', 'uses' => 'App\Http\Controllers\Admin\Home\TestimonialController@destroy']);
    Route::post('/update-active-testimonial', ['as' => 'update-active-testimonial', 'uses' => 'App\Http\Controllers\Admin\Home\TestimonialController@updateOne']);
    
    
      Route::get('/list-course-details', ['as' => 'list-course-details', 'uses' => 'App\Http\Controllers\Admin\Home\CourseDetailsController@index']);
    Route::get('/add-course-details', ['as' => 'add-course-details', 'uses' => 'App\Http\Controllers\Admin\Home\CourseDetailsController@add']);
    Route::post('/add-course-details', ['as' => 'add-course-details', 'uses' => 'App\Http\Controllers\Admin\Home\CourseDetailsController@store']);
    Route::get('/edit-course-details/{edit_id}', ['as' => 'edit-course-details', 'uses' => 'App\Http\Controllers\Admin\Home\CourseDetailsController@edit']);
    Route::post('/update-course-details', ['as' => 'update-course-details', 'uses' => 'App\Http\Controllers\Admin\Home\CourseDetailsController@update']);
    Route::post('/show-course-details', ['as' => 'show-course-details', 'uses' => 'App\Http\Controllers\Admin\Home\CourseDetailsController@show']);
    Route::post('/delete-course-details', ['as' => 'delete-course-details', 'uses' => 'App\Http\Controllers\Admin\Home\CourseDetailsController@destroy']);
    Route::post('/update-active-course-details', ['as' => 'update-active-course-details', 'uses' => 'App\Http\Controllers\Admin\Home\CourseDetailsController@updateOne']);
    // ==============Gallery============
    Route::get('/list-media', ['as' => 'list-media', 'uses' => 'App\Http\Controllers\Admin\Media\MediaController@index']);
    Route::get('/add-media', ['as' => 'add-media', 'uses' => 'App\Http\Controllers\Admin\Media\MediaController@add']);
    Route::post('/add-media', ['as' => 'add-media', 'uses' => 'App\Http\Controllers\Admin\Media\MediaController@store']);
    Route::get('/edit-media/{edit_id}', ['as' => 'edit-media', 'uses' => 'App\Http\Controllers\Admin\Media\MediaController@edit']);
    Route::post('/update-media', ['as' => 'update-media', 'uses' => 'App\Http\Controllers\Admin\Media\MediaController@update']);
    Route::post('/show-media', ['as' => 'show-media', 'uses' => 'App\Http\Controllers\Admin\Media\MediaController@show']);
    Route::post('/delete-media', ['as' => 'delete-media', 'uses' => 'App\Http\Controllers\Admin\Media\MediaController@destroy']);
    Route::post('/update-active-media', ['as' => 'update-active-media', 'uses' => 'App\Http\Controllers\Admin\Media\MediaController@updateOne']);
    
    // ===============Our Result=============
    Route::get('/list-ourresult-category', ['as' => 'list-ourresult-category', 'uses' => 'App\Http\Controllers\Admin\OurResult\OurResultCategoryController@index']);
    Route::get('/add-ourresult-category', ['as' => 'add-ourresult-category', 'uses' => 'App\Http\Controllers\Admin\OurResult\OurResultCategoryController@add']);
    Route::post('/add-ourresult-category', ['as' => 'add-ourresult-category', 'uses' => 'App\Http\Controllers\Admin\OurResult\OurResultCategoryController@store']);
    Route::get('/edit-ourresult-category/{edit_id}', ['as' => 'edit-ourresult-category', 'uses' => 'App\Http\Controllers\Admin\OurResult\OurResultCategoryController@edit']);
    Route::post('/update-ourresult-category', ['as' => 'update-ourresult-category', 'uses' => 'App\Http\Controllers\Admin\OurResult\OurResultCategoryController@update']);
    Route::post('/show-ourresult-category', ['as' => 'show-ourresult-category', 'uses' => 'App\Http\Controllers\Admin\OurResult\OurResultCategoryController@show']);
    Route::post('/delete-ourresult-category', ['as' => 'delete-ourresult-category', 'uses' => 'App\Http\Controllers\Admin\OurResult\OurResultCategoryController@destroy']);
    Route::post('/update-one-ourresult-category', ['as' => 'update-one-ourresult-category', 'uses' => 'App\Http\Controllers\Admin\OurResult\OurResultCategoryController@updateOne']);

    Route::get('/list-ourresult', ['as' => 'list-ourresult', 'uses' => 'App\Http\Controllers\Admin\OurResult\OurResultController@index']);
    Route::get('/add-ourresult', ['as' => 'add-ourresult', 'uses' => 'App\Http\Controllers\Admin\OurResult\OurResultController@add']);
    Route::post('/add-ourresult', ['as' => 'add-ourresult', 'uses' => 'App\Http\Controllers\Admin\OurResult\OurResultController@store']);
    Route::get('/edit-ourresult/{edit_id}', ['as' => 'edit-ourresult', 'uses' => 'App\Http\Controllers\Admin\OurResult\OurResultController@edit']);
    Route::post('/update-ourresult', ['as' => 'update-ourresult', 'uses' => 'App\Http\Controllers\Admin\OurResult\OurResultController@update']);
    Route::post('/show-ourresult', ['as' => 'show-ourresult', 'uses' => 'App\Http\Controllers\Admin\OurResult\OurResultController@show']);
    Route::post('/delete-ourresult', ['as' => 'delete-ourresult', 'uses' => 'App\Http\Controllers\Admin\OurResult\OurResultController@destroy']);
    Route::post('/update-one-ourresult', ['as' => 'update-one-ourresult', 'uses' => 'App\Http\Controllers\Admin\OurResult\OurResultController@updateOne']);

    // Admission=================
    Route::get('/list-application-form', ['as' => 'list-application-form', 'uses' => 'App\Http\Controllers\Admin\Application\ApplicationListController@index']);
    Route::post('/show-application-form', ['as' => 'show-application-form', 'uses' => 'App\Http\Controllers\Admin\Application\ApplicationListController@show']);
    Route::post('/delete-application-form', ['as' => 'delete-application-form', 'uses' => 'App\Http\Controllers\Admin\Application\ApplicationListController@destroy']);

    Route::get('/list-scolarship-form', ['as' => 'list-scolarship-form', 'uses' => 'App\Http\Controllers\Admin\Application\ScolarshipListController@index']);
    Route::post('/show-scolarship-form', ['as' => 'show-scolarship-form', 'uses' => 'App\Http\Controllers\Admin\Application\ScolarshipListController@show']);
    Route::post('/delete-scolarship-form', ['as' => 'delete-scolarship-form', 'uses' => 'App\Http\Controllers\Admin\Application\ScolarshipListController@destroy']);

    Route::get('/list-fesspayment-form', ['as' => 'list-fesspayment-form', 'uses' => 'App\Http\Controllers\Admin\Application\FessPaymentListController@index']);
    Route::post('/show-fesspayment-form', ['as' => 'show-fesspayment-form', 'uses' => 'App\Http\Controllers\Admin\Application\FessPaymentListController@show']);
    Route::post('/delete-fesspayment-form', ['as' => 'delete-fesspayment-form', 'uses' => 'App\Http\Controllers\Admin\Application\FessPaymentListController@destroy']);

    // ===============Contact 
    Route::get('/list-contactus-form', ['as' => 'list-contactus-form', 'uses' => 'App\Http\Controllers\Admin\ContactUs\ContactUsListController@index']);
    Route::post('/show-contactus-form', ['as' => 'show-contactus-form', 'uses' => 'App\Http\Controllers\Admin\ContactUs\ContactUsListController@show']);
    Route::post('/delete-contactus-form', ['as' => 'delete-contactus-form', 'uses' => 'App\Http\Controllers\Admin\ContactUs\ContactUsListController@destroy']);


    Route::get('/list-gallery-category', ['as' => 'list-gallery-category', 'uses' => 'App\Http\Controllers\Admin\Our\GalleryCategoryController@index']);
    Route::get('/add-gallery-category', ['as' => 'add-gallery-category', 'uses' => 'App\Http\Controllers\Admin\Our\GalleryCategoryController@add']);
    Route::post('/add-gallery-category', ['as' => 'add-gallery-category', 'uses' => 'App\Http\Controllers\Admin\Our\GalleryCategoryController@store']);
    Route::get('/edit-gallery-category/{edit_id}', ['as' => 'edit-gallery-category', 'uses' => 'App\Http\Controllers\Admin\Our\GalleryCategoryController@edit']);
    Route::post('/update-gallery-category', ['as' => 'update-gallery-category', 'uses' => 'App\Http\Controllers\Admin\Our\GalleryCategoryController@update']);
    Route::post('/show-gallery-category', ['as' => 'show-gallery-category', 'uses' => 'App\Http\Controllers\Admin\Our\GalleryCategoryController@show']);
    Route::post('/delete-gallery-category', ['as' => 'delete-gallery-category', 'uses' => 'App\Http\Controllers\Admin\Our\GalleryCategoryController@destroy']);
    Route::post('/update-one-gallery-category', ['as' => 'update-one-gallery-category', 'uses' => 'App\Http\Controllers\Admin\Our\GalleryCategoryController@updateOne']);
    
    Route::get('/list-gallery-main', ['as' => 'list-gallery-main', 'uses' => 'App\Http\Controllers\Admin\Our\GalleryController@index']);
    Route::get('/add-gallery-main', ['as' => 'add-gallery-main', 'uses' => 'App\Http\Controllers\Admin\Our\GalleryController@add']);
    Route::post('/add-gallery-main', ['as' => 'add-gallery-main', 'uses' => 'App\Http\Controllers\Admin\Our\GalleryController@store']);
    Route::get('/edit-gallery-main/{edit_id}', ['as' => 'edit-gallery-main', 'uses' => 'App\Http\Controllers\Admin\Our\GalleryController@edit']);
    Route::post('/update-gallery-main', ['as' => 'update-gallery-main', 'uses' => 'App\Http\Controllers\Admin\Our\GalleryController@update']);
    Route::post('/show-gallery-main', ['as' => 'show-gallery-main', 'uses' => 'App\Http\Controllers\Admin\Our\GalleryController@show']);
    Route::post('/delete-gallery-main', ['as' => 'delete-gallery-main', 'uses' => 'App\Http\Controllers\Admin\Our\GalleryController@destroy']);
    Route::post('/update-one-gallery-main', ['as' => 'update-one-gallery-main', 'uses' => 'App\Http\Controllers\Admin\Our\GalleryController@updateOne']);
    












    Route::get('/db-backup', ['as' => 'db-backup', 'uses' => 'App\Http\Controllers\DBBackup\DBBackupController@downloadBackup']);
    Route::get('/log-out', ['as' => 'log-out', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\LoginController@logout']);

});
    Route::get('/login', ['as' => 'login', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\LoginController@index']);
    Route::post('/submitLogin', ['as' => 'submitLogin', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\LoginController@submitLogin']);
// website====================================================================
    Route::get('/', ['as' => '/', 'uses' => 'App\Http\Controllers\Website\IndexController@index']);
    //About Us========
    Route::get('/aboutus', ['as' => 'aboutus', 'uses' => 'App\Http\Controllers\Website\AboutUs\AboutUsController@index']);
 
    //Start Application========
    Route::get('/media', ['as' => 'media', 'uses' => 'App\Http\Controllers\Website\Media\MediaController@index']);
    Route::get('/product', ['as' => 'product', 'uses' => 'App\Http\Controllers\Website\Product\ProductController@index']);
    Route::get('/services', ['as' => 'services', 'uses' => 'App\Http\Controllers\Website\Product\ProductController@getServices']);

    

  
    //End Application========


   
    // Route::post('/particular-upcoming-courses', ['as' => 'particular-upcoming-courses', 'uses' => 'App\Http\Controllers\Website\IndexController@showParticularUpcominCourses']);


    //Start Contact========
    Route::get('/contactus', ['as' => 'contactus', 'uses' => 'App\Http\Controllers\Website\ContactUs\ContactUsController@getContactUs']);
    Route::post('/add-contactus', ['as' => 'add-contactus', 'uses' => 'App\Http\Controllers\Website\ContactUs\ContactUsController@addContactUs']);
    //Start Contact========
    
    // Route::get('/gallery', ['as' => 'gallery', 'uses' => 'App\Http\Controllers\Website\Gallery\GalleryController@getAllMultimedia']);
    Route::post('/list-ajax-multimedia-web', ['as' => 'list-ajax-multimedia-web', 'uses' => 'App\Http\Controllers\Website\Gallery\OurResultController@getAllAjaxMultimedia']);
