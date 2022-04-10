<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminDivisionPositionController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminCategoryCourseController;
use App\Http\Controllers\AdminCourseController;

use App\Http\Controllers\MentorDashboardController;
use App\Http\Controllers\MentorCategoryCourseController;
use App\Http\Controllers\MentorCourseController;

use App\Http\Controllers\EmployeeDashboardController;
use App\Http\Controllers\EmployeeCourseController;
use App\Http\Controllers\EmployeeEnrollController;

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
    return redirect('/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// admin
Route::get('/back-admin/dashboard', [AdminDashboardController::class, 'index']);

Route::get('/back-admin/division-position/list-division', [AdminDivisionPositionController::class, 'listDivision']);
Route::get('/back-admin/division-position/add-division', [AdminDivisionPositionController::class, 'addDivision']);
Route::post('/back-admin/division-position/store-division', [AdminDivisionPositionController::class, 'storeDivision']);
Route::post('/back-admin/division-position/{id}/edit-division', [AdminDivisionPositionController::class, 'editDivision']);
Route::put('/back-admin/division-position/{id}/update-division', [AdminDivisionPositionController::class, 'updateDivision']);
Route::delete('/back-admin/division-position/{id}/destroy-division', [AdminDivisionPositionController::class, 'destroyDivision']);

Route::get('/back-admin/division-position/list-position', [AdminDivisionPositionController::class, 'listPosition']);
Route::get('/back-admin/division-position/add-position', [AdminDivisionPositionController::class, 'addPosition']);
Route::post('/back-admin/division-position/store-position', [AdminDivisionPositionController::class, 'storePosition']);
Route::post('/back-admin/division-position/{id}/edit-position', [AdminDivisionPositionController::class, 'editPosition']);
Route::put('/back-admin/division-position/{id}/update-position', [AdminDivisionPositionController::class, 'updatePosition']);
Route::delete('/back-admin/division-position/{id}/destroy-position', [AdminDivisionPositionController::class, 'destroyPosition']);

Route::get('/back-admin/user/list-employee', [AdminUserController::class, 'listEmployee']);
Route::get('/back-admin/user/add-employee', [AdminUserController::class, 'addEmployee']);
Route::post('/back-admin/user/store-employee', [AdminUserController::class, 'storeEmployee']);
Route::put('/back-admin/user/{id}/reset-employee', [AdminUserController::class, 'resetEmployee']);

Route::get('/back-admin/user/list-mentor', [AdminUserController::class, 'listMentor']);
Route::get('/back-admin/user/add-mentor', [AdminUserController::class, 'addMentor']);
Route::post('/back-admin/user/store-mentor', [AdminUserController::class, 'storeMentor']);
Route::put('/back-admin/user/{id}/reset-mentor', [AdminUserController::class, 'resetMentor']);


Route::get('/back-admin/category-course/list-category-course', [AdminCategoryCourseController::class, 'index']);
Route::post('/back-admin/category-course/store-category-course', [AdminCategoryCourseController::class, 'store']);
Route::post('/back-admin/category-course/{id}/edit-category-course', [AdminCategoryCourseController::class, 'edit']);
Route::put('/back-admin/category-course/{id}/update-category-course', [AdminCategoryCourseController::class, 'update']);
Route::delete('/back-admin/category-course/{id}/destroy-category-course', [AdminCategoryCourseController::class, 'destroy']);

Route::get('/back-admin/course/list-course', [AdminCourseController::class, 'index']);
Route::get('/back-admin/course/add-course', [AdminCourseController::class, 'add']);
Route::post('/back-admin/course/store-course', [AdminCourseController::class, 'store']);
Route::post('/back-admin/course/{id}/edit-course', [AdminCourseController::class, 'edit']);
Route::put('/back-admin/course/{id}/update-course', [AdminCourseController::class, 'update']);
Route::delete('/back-admin/course/{id}/destroy-course', [AdminCourseController::class, 'destroy']);


// mentor
Route::get('/back-mentor/dashboard', [MentorDashboardController::class, 'index']);

Route::get('/back-mentor/category-course/list-category-course', [MentorCategoryCourseController::class, 'index']);
Route::post('/back-mentor/category-course/store-category-course', [MentorCategoryCourseController::class, 'store']);
Route::post('/back-mentor/category-course/{id}/edit-category-course', [MentorCategoryCourseController::class, 'edit']);
Route::put('/back-mentor/category-course/{id}/update-category-course', [MentorCategoryCourseController::class, 'update']);
Route::delete('/back-mentor/category-course/{id}/destroy-category-course', [MentorCategoryCourseController::class, 'destroy']);

Route::get('/back-mentor/course/list-course', [MentorCourseController::class, 'index']);
Route::get('/back-mentor/course/add-course', [MentorCourseController::class, 'add']);
Route::post('/back-mentor/course/store-course', [MentorCourseController::class, 'store']);
Route::post('/back-mentor/course/{id}/edit-course', [MentorCourseController::class, 'edit']);
Route::put('/back-mentor/course/{id}/update-course', [MentorCourseController::class, 'update']);
Route::delete('/back-mentor/course/{id}/destroy-course', [MentorCourseController::class, 'destroy']);


// employee
Route::get('/back-employee/dashboard', [EmployeeDashboardController::class, 'index']);

Route::get('/back-employee/course/list-course', [EmployeeCourseController::class, 'index']);

Route::post('/back-employee/enroll/enroll-course/{id}', [EmployeeEnrollController::class, 'store']);