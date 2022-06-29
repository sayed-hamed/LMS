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




//Route::group(
//    [
//        'prefix' => LaravelLocalization::setLocale(),
//        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
//    ], function(){
//
//    Route::get('/', function () {
//        return view('dashboard');
//    });
//
//});
//


Route::group(['prefix' => LaravelLocalization::setLocale()], function () {



    Route::namespace('admin')->group(function () {

        Route::get('/dashbourd/login','AuthController@login')->name('admin.login');
        Route::post('/dashbourd/do-login','AuthController@doLogin')->name('admin.do-login');

        Route::middleware('AdminAuth:admin')->group(function (){




        Route::get('/dashbourd/logout','AuthController@logout')->name('admin.logout');

//            Route::group(['prefix'=>'dashbourd/cat','middleware'=>'can:home'],function () {

                Route::get('/dashbourd', 'HomeController@index')->name('admin.home');

//            });



//        Route::group(['prefix'=>'dashbourd/cat','middleware'=>'can:categories'],function (){

        Route::get('dashbourd/cat/','CatController@index')->name('admin.cat');
        Route::get('dashbourd/cat/create','CatController@create')->name('admin.cat.create');
        Route::post('dashbourd/cat/store','CatController@store')->name('admin.cat.store');
        Route::get('dashbourd/cat/edit/{id}','CatController@edit')->name('admin.cat.edit');
        Route::post('dashbourd/cat/update','CatController@update')->name('admin.cat.update');
        Route::get('dashbourd/cat/delete{id}','CatController@delete')->name('admin.cat.delete');

//        });

//            Route::group(['prefix'=>'dashbourd/trainer','middleware'=>'can:trainer'],function () {


                Route::get('dashbourd/trainer', 'TrainerController@index')->name('admin.trainer');
                Route::get('dashbourd/trainer/create', 'TrainerController@create')->name('admin.trainer.create');
                Route::post('dashbourd/trainer/store', 'TrainerController@store')->name('admin.trainer.store');
                Route::get('dashbourd/trainer/edit/{id}', 'TrainerController@edit')->name('admin.trainer.edit');
                Route::post('dashbourd/trainer/update', 'TrainerController@update')->name('admin.trainer.update');
                Route::get('dashbourd/trainer/delete{id}', 'TrainerController@delete')->name('admin.trainer.delete');

//            });


//            Route::group(['prefix'=>'dashbourd/student','middleware'=>'can:students'],function () {


                Route::get('dashbourd/student', 'StudentController@index')->name('admin.student');
                Route::get('dashbourd/student/create', 'StudentController@create')->name('admin.student.create');
                Route::post('dashbourd/student/store', 'StudentController@store')->name('admin.student.store');
                Route::get('dashbourd/student/edit/{id}', 'StudentController@edit')->name('admin.student.edit');
                Route::post('dashbourd/student/update', 'StudentController@update')->name('admin.student.update');
                Route::get('dashbourd/student/delete/{id}', 'StudentController@delete')->name('admin.student.delete');
                Route::get('dashbourd/student/showcourses{id}', 'StudentController@showcourses')->name('admin.student.showcourses');

//            });


//            Route::group(['prefix'=>'dashbourd/course','middleware'=>'can:courses'],function () {


                Route::get('dashbourd/course', 'CourseController@index')->name('admin.course');
                Route::get('dashbourd/course/create', 'CourseController@create')->name('admin.course.create');
                Route::post('dashbourd/course/store', 'CourseController@store')->name('admin.course.store');
                Route::get('dashbourd/course/edit/{id}', 'CourseController@edit')->name('admin.course.edit');
                Route::post('dashbourd/course/update', 'CourseController@update')->name('admin.course.update');
                Route::get('dashbourd/course/delete{id}', 'CourseController@delete')->name('admin.course.delete');

//            });


//            Route::group(['prefix'=>'dashbourd/blog','middleware'=>'can:articles'],function () {





            Route::get('dashbourd/event', 'EventController@index')->name('admin.event');
            Route::get('dashbourd/event/create', 'EventController@create')->name('admin.event.create');
            Route::post('dashbourd/event/store', 'EventController@store')->name('admin.event.store');
            Route::get('dashbourd/event/edit/{id}', 'EventController@edit')->name('admin.event.edit');
            Route::post('dashbourd/event/update', 'EventController@update')->name('admin.event.update');
            Route::get('dashbourd/event/delete/{id}', 'EventController@delete')->name('admin.event.delete');











            Route::get('dashbourd/blog', 'BlogController@index')->name('admin.blog');
                Route::get('dashbourd/blog/create', 'BlogController@create')->name('admin.blog.create');
                Route::post('dashbourd/blog/store', 'BlogController@store')->name('admin.blog.store');
                Route::get('dashbourd/blog/edit/{id}', 'BlogController@edit')->name('admin.blog.edit');
                Route::post('dashbourd/blog/update', 'BlogController@update')->name('admin.blog.update');
                Route::get('dashbourd/blog/delete/{id}', 'BlogController@delete')->name('admin.blog.delete');

//            });

//            Route::group(['prefix'=>'dashbourd/gallery','middleware'=>'can:gallery'],function () {


                Route::get('dashbourd/gallery', 'GalleryController@index')->name('admin.gallery');
                Route::get('dashbourd/gallery/create', 'GalleryController@create')->name('admin.gallery.create');
                Route::post('dashbourd/gallery/store', 'GalleryController@store')->name('admin.gallery.store');
                Route::get('dashbourd/gallery/edit/{id}', 'GalleryController@edit')->name('admin.gallery.edit');
                Route::post('dashbourd/gallery/update', 'GalleryController@update')->name('admin.gallery.update');
                Route::get('dashbourd/gallery/delete{id}', 'GalleryController@delete')->name('admin.gallery.delete');

//            });

//            Route::group(['prefix'=>'dashbourd/career','middleware'=>'can:career'],function () {


                Route::get('dashbourd/career', 'CareerController@index')->name('admin.career');
                Route::get('dashbourd/career/create', 'CareerController@create')->name('admin.career.create');
                Route::post('dashbourd/career/store', 'CareerController@store')->name('admin.career.store');
                Route::get('dashbourd/career/edit/{id}', 'CareerController@edit')->name('admin.career.edit');
                Route::post('dashbourd/career/update', 'CareerController@update')->name('admin.career.update');
                Route::get('dashbourd/career/delete/{id}', 'CareerController@delete')->name('admin.career.delete');

//            });

//            Route::group(['middleware'=>'can:messages'],function () {


                Route::get('dashbourd/message', 'MessageController@index')->name('admin.message');
                Route::get('dashbourd/message/delete/{id}', 'MessageController@delete')->name('admin.message.delete');

//            });

//            Route::group(['prefix'=>'dashbourd/cv','middleware'=>'can:cv'],function () {


                Route::get('dashbourd/cv', 'CarFormController@index')->name('admin.CV');

//            });



             //Roles

//            Route::group(['middleware'=>'can:role'],function () {


                Route::get('dashbourd/role', 'RoleController@index')->name('admin.role');
                Route::get('dashbourd/role/create', 'RoleController@create')->name('admin.role.create');
                Route::post('dashbourd/role/store', 'RoleController@store')->name('admin.role.store');
                Route::get('dashbourd/role/edit/{id}', 'RoleController@edit')->name('admin.role.edit');
                Route::post('dashbourd/role/update', 'RoleController@update')->name('admin.role.update');

//            });



            //users


//            Route::group(['middleware'=>'can:role'],function () {


                Route::get('dashbourd/users', 'UserController@index')->name('admin.users');
                Route::get('dashbourd/user/create', 'UserController@create')->name('admin.users.create');
                Route::post('dashbourd/user/store', 'UserController@store')->name('admin.users.store');


//            });

        });

        });


        //front settup

    Route::namespace('front')->group(function (){


        Route::get('/','HomeController@index')->name('front.HomePage');

        Route::get('/cat/{id}','CourseController@cat')->name('front.Cat');
        Route::get('/cat/{id}/course/{c_id}','CourseController@show')->name('front.coursedetails');
        Route::get('/courses','CoursesController@index')->name('front.courses');
        Route::get('/contact','ContactController@index')->name('front.contact');
        Route::post('/massege','MassegeController@massege')->name('front.massege');
        Route::get('/blog','BlogController@index')->name('front.blog');
        Route::get('/blogDetails/{id}','BlogDetailsController@index')->name('front.blogdetails');


        Route::get('/event','EventController@index')->name('front.event');
        Route::get('/eventDetails/{id}','EventController@show')->name('front.eventdetails');
        Route::get('/gallery','GalleryController@index')->name('front.gallery');
        Route::get('/partner','PartnerController@accredntial')->name('front.acredntial');
        Route::get('/client','PartnerController@client')->name('front.client');
        Route::get('/fadic','EventController@fadic')->name('front.fadic');
        Route::get('/pmp','EventController@pmp')->name('front.pmp');
        Route::get('/career','CareerController@index')->name('front.career');
        Route::post('/career/store','CareerController@store')->name('front.career.store');
        Route::get('/online','OnlineTestController@index')->name('front.online_test');
        Route::post('/online_exam','OnlineTestController@store')->name('front.online_start_test');
        Route::get('/general','GeneralController@index')->name('general');
        Route::get('/conversation','GeneralController@conversation')->name('conversation');





    });












    });








