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

Route::get('/', function () {
    return view('auth.login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/view', 'Backend\UserController@view')->name('users.view');

Route::group(['middleware'=>'auth'],function(){
  Route::prefix('users')->group(function(){
    Route::get('/view', 'Backend\UserController@view')->name('users.view');
    Route::get('/add', 'Backend\UserController@add')->name('users.add');
    Route::post('/store', 'Backend\UserController@store')->name('users.store');
    Route::get('/edit/{id}', 'Backend\UserController@edit')->name('users.edit');
    Route::post('/update/{id}', 'Backend\UserController@update')->name('users.update');
    Route::get('/delete/{id}', 'Backend\UserController@delete')->name('users.delete');
  });

  Route::prefix('profiles')->group(function(){
    Route::get('/view', 'Backend\ProfileController@view')->name('profiles.view');
    Route::get('/edit', 'Backend\ProfileController@edit')->name('profiles.edit');
    Route::post('/update', 'Backend\ProfileController@update')->name('profiles.update');
    Route::get('/password/view', 'Backend\ProfileController@passwordview')->name('profiles.password.view');
    Route::post('/password/update', 'Backend\ProfileController@passwordupdate')->name('profiles.password.update');

  });

  Route::prefix('setups')->group(function(){
    //Stduent Class
    Route::get('/student/class/view', 'Backend\Setup\StudentClassController@view')->name('setups.student.class.view');
    Route::get('/student/class/add', 'Backend\Setup\StudentClassController@add')->name('setups.student.class.add');
    Route::post('/student/class/tore', 'Backend\Setup\StudentClassController@store')->name('setups.student.class.store');
    Route::get('/student/class/edit/{id}', 'Backend\Setup\StudentClassController@edit')->name('setups.student.class.edit');
    Route::post('/student/class/update/{id}', 'Backend\Setup\StudentClassController@update')->name('setups.student.class.update');
    Route::get('/student/class/delete/{id}', 'Backend\Setup\StudentClassController@delete')->name('setups.student.class.delete');
    // Year / Session
    Route::get('/student/year/view', 'Backend\Setup\YearController@view')->name('setups.student.year.view');
    Route::get('/student/year/add', 'Backend\Setup\YearController@add')->name('setups.student.year.add');
    Route::post('/student/year/tore', 'Backend\Setup\YearController@store')->name('setups.student.year.store');
    Route::get('/student/year/edit/{id}', 'Backend\Setup\YearController@edit')->name('setups.student.year.edit');
    Route::post('/student/year/update/{id}', 'Backend\Setup\YearController@update')->name('setups.student.year.update');
    //Student group
    Route::get('/student/group/view', 'Backend\Setup\GroupController@view')->name('setups.student.group.view');
    Route::get('/student/group/add', 'Backend\Setup\GroupController@add')->name('setups.student.group.add');
    Route::post('/student/group/tore', 'Backend\Setup\GroupController@store')->name('setups.student.group.store');
    Route::get('/student/group/edit/{id}', 'Backend\Setup\GroupController@edit')->name('setups.student.group.edit');
    Route::post('/student/group/update/{id}', 'Backend\Setup\GroupController@update')->name('setups.student.group.update');
    //Studen Shift
    Route::get('/student/shift/view', 'Backend\Setup\ShiftController@view')->name('setups.student.shift.view');
    Route::get('/student/shift/add', 'Backend\Setup\ShiftController@add')->name('setups.student.shift.add');
    Route::post('/student/shift/tore', 'Backend\Setup\ShiftController@store')->name('setups.student.shift.store');
    Route::get('/student/shift/edit/{id}', 'Backend\Setup\ShiftController@edit')->name('setups.student.shift.edit');
    Route::post('/student/shift/update/{id}', 'Backend\Setup\ShiftController@update')->name('setups.student.shift.update');
    //Fee Category
    Route::get('/fee/category/view', 'Backend\Setup\FeeCategoryController@view')->name('setups.fee.category.view');
    Route::get('/fee/category/add', 'Backend\Setup\FeeCategoryController@add')->name('setups.fee.category.add');
    Route::post('/fee/category/tore', 'Backend\Setup\FeeCategoryController@store')->name('setups.fee.category.store');
    Route::get('/fee/category/edit/{id}', 'Backend\Setup\FeeCategoryController@edit')->name('setups.fee.category.edit');
    Route::post('/fee/category/update/{id}', 'Backend\Setup\FeeCategoryController@update')->name('setups.fee.category.update');
    //Fee Category Amount
    Route::get('/fee/amount/view', 'Backend\Setup\FeeAmountController@view')->name('setups.fee.amount.view');
    Route::get('/fee/amount/add', 'Backend\Setup\FeeAmountController@add')->name('setups.fee.amount.add');
    Route::post('/fee/amount/store', 'Backend\Setup\FeeAmountController@store')->name('setups.fee.amount.store');
    Route::get('/fee/amount/edit/{fee_category_id}', 'Backend\Setup\FeeAmountController@edit')->name('setups.fee.amount.edit');
    Route::post('/fee/amount/update/{fee_category_id}', 'Backend\Setup\FeeAmountController@update')->name('setups.fee.amount.update');
    Route::get('/fee/amount/details/{fee_category_id}', 'Backend\Setup\FeeAmountController@details')->name('setups.fee.amount.details');
    //Exam Type
    Route::get('/exam/type/view', 'Backend\Setup\EaxmTypeController@view')->name('setups.exam.type.view');
    Route::get('/exam/type/add', 'Backend\Setup\EaxmTypeController@add')->name('setups.exam.type.add');
    Route::post('/exam/type/tore', 'Backend\Setup\EaxmTypeController@store')->name('setups.exam.type.store');
    Route::get('/exam/type/edit/{id}', 'Backend\Setup\EaxmTypeController@edit')->name('setups.exam.type.edit');
    Route::post('/exam/type/update/{id}', 'Backend\Setup\EaxmTypeController@update')->name('setups.exam.type.update');
    //Subjects
    Route::get('/subject/view', 'Backend\Setup\SubjectController@view')->name('setups.subject.view');
    Route::get('/subject/add', 'Backend\Setup\SubjectController@add')->name('setups.subject.add');
    Route::post('/subject/tore', 'Backend\Setup\SubjectController@store')->name('setups.subject.store');
    Route::get('/subject/edit/{id}', 'Backend\Setup\SubjectController@edit')->name('setups.subject.edit');
    Route::post('/subject/update/{id}', 'Backend\Setup\SubjectController@update')->name('setups.subject.update');
    //Assign Subjects
    Route::get('/assign/subject/view', 'Backend\Setup\AssignSubjectController@view')->name('setups.assign.subject.view');
    Route::get('/assign/subject/add', 'Backend\Setup\AssignSubjectController@add')->name('setups.assign.subject.add');
    Route::post('/assign/subject/tore', 'Backend\Setup\AssignSubjectController@store')->name('setups.assign.subject.store');
    Route::get('/assign/subject/edit/{class_id}', 'Backend\Setup\AssignSubjectController@edit')->name('setups.assign.subject.edit');
    Route::post('/assign/subject/update/{class_id}', 'Backend\Setup\AssignSubjectController@update')->name('setups.assign.subject.update');
    Route::get('/assign/subject/details/{class_id}','Backend\Setup\AssignSubjectController@details')->name('setups.assign.subject.details');
    //Designation
    Route::get('/designation/view', 'Backend\Setup\DesignationController@view')->name('setups.designation.view');
    Route::get('/designation/add', 'Backend\Setup\DesignationController@add')->name('setups.designation.add');
    Route::post('/designation/tore', 'Backend\Setup\DesignationController@store')->name('setups.designation.store');
    Route::get('/designation/edit/{id}', 'Backend\Setup\DesignationController@edit')->name('setups.designation.edit');
    Route::post('/designation/update/{id}', 'Backend\Setup\DesignationController@update')->name('setups.designation.update');
  });

  // Mabage Studebt
  Route::prefix('student')->group(function(){
    //Student Registration
    Route::get('/registration/view', 'Backend\Student\StudentRegController@view')->name('student.registration.view');
    Route::get('/registration/add', 'Backend\Student\StudentRegController@add')->name('student.registration.add');
    Route::post('/registration/store', 'Backend\Student\StudentRegController@store')->name('student.registration.store');
    Route::get('/registration/edit/{student_id}', 'Backend\Student\StudentRegController@edit')->name('student.registration.edit');
    Route::post('/registration/update/{student_id}', 'Backend\Student\StudentRegController@update')->name('student.registration.update');
    Route::get('/year-class-wise', 'Backend\Student\StudentRegController@yearClassWise')->name('student.year.class.wise');
    Route::get('/registration/promotion/{student_id}', 'Backend\Student\StudentRegController@promotion')->name('student.registration.promotion');
    Route::post('/registration/promotion/{student_id}', 'Backend\Student\StudentRegController@promotionStore')->name('student.registration.promotion.store');
    Route::get('/registration/details/{student_id}', 'Backend\Student\StudentRegController@details')->name('student.registration.details');

    //Studen Roll Generate
    Route::get('/roll/view', 'Backend\Student\StudentRollController@view')->name('student.roll.view');
    Route::get('/roll/get-student', 'Backend\Student\StudentRollController@getStudent')->name('student.roll.get-student');
    Route::post('/roll/store', 'Backend\Student\StudentRollController@store')->name('student.roll.store');
  });


});
