<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminDivisionPositionController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminCategoryCourseController;
use App\Http\Controllers\AdminBenefitCourseController;
use App\Http\Controllers\AdminCourseController;
use App\Http\Controllers\AdminCourseModuleController;
use App\Http\Controllers\AdminCourseModuleContentController;
use App\Http\Controllers\AdminCourseModuleQuizController;

use App\Http\Controllers\MentorDashboardController;
use App\Http\Controllers\MentorCategoryCourseController;
use App\Http\Controllers\MentorCourseController;
use App\Http\Controllers\MentorBenefitCourseController;
use App\Http\Controllers\MentorCourseModuleController;
use App\Http\Controllers\MentorCourseModuleContentController;
use App\Http\Controllers\MentorCourseModuleQuizController;

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
Route::put('/back-admin/user/{id}/deactive-employee', [AdminUserController::class, 'deactiveEmployee']);
Route::put('/back-admin/user/{id}/active-employee', [AdminUserController::class, 'activeEmployee']);
Route::put('/back-admin/user/{id}/deactive-mentor', [AdminUserController::class, 'deactiveMentor']);
Route::put('/back-admin/user/{id}/active-mentor', [AdminUserController::class, 'activeMentor']);

Route::get('/back-admin/user/list-mentor', [AdminUserController::class, 'listMentor']);
Route::get('/back-admin/user/add-mentor', [AdminUserController::class, 'addMentor']);
Route::post('/back-admin/user/store-mentor', [AdminUserController::class, 'storeMentor']);
Route::put('/back-admin/user/{id}/reset-mentor', [AdminUserController::class, 'resetMentor']);


Route::get('/back-admin/category-course/list-category-course', [AdminCategoryCourseController::class, 'index']);
Route::post('/back-admin/category-course/store-category-course', [AdminCategoryCourseController::class, 'store']);
Route::post('/back-admin/category-course/{id}/edit-category-course', [AdminCategoryCourseController::class, 'edit']);
Route::put('/back-admin/category-course/{id}/update-category-course', [AdminCategoryCourseController::class, 'update']);
Route::delete('/back-admin/category-course/{id}/destroy-category-course', [AdminCategoryCourseController::class, 'destroy']);

Route::get('/back-admin/benefit-course/list-benefit-course', [AdminBenefitCourseController::class, 'index']);
Route::post('/back-admin/benefit-course/store-benefit-course', [AdminBenefitCourseController::class, 'store']);
Route::delete('/back-admin/benefit-course/{id}/destroy-benefit-course', [AdminBenefitCourseController::class, 'destroy']);

Route::get('/back-admin/course/list-course', [AdminCourseController::class, 'index']);
Route::get('/back-admin/course/add-course', [AdminCourseController::class, 'add']);
Route::post('/back-admin/course/store-course', [AdminCourseController::class, 'store']);
Route::post('/back-admin/course/{id}/edit-course', [AdminCourseController::class, 'edit']);
Route::put('/back-admin/course/{id}/update-course', [AdminCourseController::class, 'update']);
Route::delete('/back-admin/course/{id}/destroy-course', [AdminCourseController::class, 'destroy']);

Route::get('/back-admin/course-module/list-course-module', [AdminCourseModuleController::class, 'index']);
Route::get('/back-admin/course-module/add-course-module', [AdminCourseModuleController::class, 'add']);
Route::post('/back-admin/course-module/store-course-module', [AdminCourseModuleController::class, 'store']);
Route::post('/back-admin/course-module/{id}/edit-course-module', [AdminCourseModuleController::class, 'edit']);
Route::put('/back-admin/course-module/{id}/update-course-module', [AdminCourseModuleController::class, 'update']);
Route::delete('/back-admin/course-module/{id}/destroy-course-module', [AdminCourseModuleController::class, 'destroy']);

Route::get('/back-admin/course-module-content/list-course-module-content', [AdminCourseModuleContentController::class, 'index']);
Route::get('/back-admin/course-module-content/add-course-module-content', [AdminCourseModuleContentController::class, 'add']);
Route::post('/back-admin/course-module-content/store-course-module-content', [AdminCourseModuleContentController::class, 'store']);
Route::post('/back-admin/course-module-content/{id}/edit-course-module-content', [AdminCourseModuleContentController::class, 'edit']);
Route::put('/back-admin/course-module-content/{id}/update-course-module-content', [AdminCourseModuleContentController::class, 'update']);
Route::delete('/back-admin/course-module-content/{id}/destroy-course-module-content', [AdminCourseModuleContentController::class, 'destroy']);

Route::get('/back-admin/course-module-quiz/list-course-module-quiz', [AdminCourseModuleQuizController::class, 'index']);
Route::get('/back-admin/course-module-quiz/add-course-module-quiz', [AdminCourseModuleQuizController::class, 'add']);
Route::post('/back-admin/course-module-quiz/store-course-module-quiz', [AdminCourseModuleQuizController::class, 'store']);
Route::post('/back-admin/course-module-quiz/{id}/edit-course-module-quiz', [AdminCourseModuleQuizController::class, 'edit']);
Route::put('/back-admin/course-module-quiz/{id}/update-course-module-quiz', [AdminCourseModuleQuizController::class, 'update']);
Route::delete('/back-admin/course-module-quiz/{id}/destroy-course-module-quiz', [AdminCourseModuleQuizController::class, 'destroy']);

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

Route::get('/back-mentor/benefit-course/list-benefit-course', [MentorBenefitCourseController::class, 'index']);
Route::post('/back-mentor/benefit-course/store-benefit-course', [MentorBenefitCourseController::class, 'store']);
Route::delete('/back-mentor/benefit-course/{id}/destroy-benefit-course', [MentorBenefitCourseController::class, 'destroy']);

Route::get('/back-mentor/course-module/list-course-module', [MentorCourseModuleController::class, 'index']);
Route::get('/back-mentor/course-module/add-course-module', [MentorCourseModuleController::class, 'add']);
Route::post('/back-mentor/course-module/store-course-module', [MentorCourseModuleController::class, 'store']);
Route::post('/back-mentor/course-module/{id}/edit-course-module', [MentorCourseModuleController::class, 'edit']);
Route::put('/back-mentor/course-module/{id}/update-course-module', [MentorCourseModuleController::class, 'update']);
Route::delete('/back-mentor/course-module/{id}/destroy-course-module', [MentorCourseModuleController::class, 'destroy']);

Route::get('/back-mentor/course-module-content/list-course-module-content', [MentorCourseModuleContentController::class, 'index']);
Route::get('/back-mentor/course-module-content/add-course-module-content', [MentorCourseModuleContentController::class, 'add']);
Route::post('/back-mentor/course-module-content/store-course-module-content', [MentorCourseModuleContentController::class, 'store']);
Route::post('/back-mentor/course-module-content/{id}/edit-course-module-content', [MentorCourseModuleContentController::class, 'edit']);
Route::put('/back-mentor/course-module-content/{id}/update-course-module-content', [MentorCourseModuleContentController::class, 'update']);
Route::delete('/back-mentor/course-module-content/{id}/destroy-course-module-content', [MentorCourseModuleContentController::class, 'destroy']);

Route::get('/back-mentor/course-module-quiz/list-course-module-quiz', [MentorCourseModuleQuizController::class, 'index']);
Route::get('/back-mentor/course-module-quiz/add-course-module-quiz', [MentorCourseModuleQuizController::class, 'add']);
Route::post('/back-mentor/course-module-quiz/store-course-module-quiz', [MentorCourseModuleQuizController::class, 'store']);
Route::post('/back-mentor/course-module-quiz/{id}/edit-course-module-quiz', [MentorCourseModuleQuizController::class, 'edit']);
Route::put('/back-mentor/course-module-quiz/{id}/update-course-module-quiz', [MentorCourseModuleQuizController::class, 'update']);
Route::delete('/back-mentor/course-module-quiz/{id}/destroy-course-module-quiz', [MentorCourseModuleQuizController::class, 'destroy']);

// employee
Route::get('/back-employee/dashboard', [EmployeeDashboardController::class, 'index']);

Route::get('/back-employee/course/list-course', [EmployeeCourseController::class, 'index']);
Route::get('/back-employee/my-course/list-course', [EmployeeCourseController::class, 'myCourse']);
Route::get('/back-employee/my-course/{slug}/persiapan-course', [EmployeeCourseController::class, 'myCourseDetail']);
Route::get('/back-employee/my-course/{slug}/rating-feedback', [EmployeeCourseController::class, 'rateCourse']);
Route::post('/back-employee/my-course/{slug}/rating-feedback/send', [EmployeeCourseController::class, 'rateCourseSend']);
Route::get('/back-employee/my-course/{slugCourse}/{slugModule}/quiz', [EmployeeCourseController::class, 'quiz']);
Route::post('/back-employee/my-course/quiz-store', [EmployeeCourseController::class, 'quizStore']);
Route::get('/back-employee/my-course/{slugCourse}/{slugModule}/{slugContent}', [EmployeeCourseController::class, 'myCourseDetails']);
Route::post('/back-employee/my-course/{slugCourse}/{slugModule}/{slugContent}/mark-done', [EmployeeCourseController::class, 'markAsDone']);
Route::post('/back-employee/my-course/{slugCourse}/{slugModule}/{slugContent}/assignment', [EmployeeCourseController::class, 'uploadAssigment']);

Route::post('/back-employee/enroll/enroll-course/{id}', [EmployeeEnrollController::class, 'store']);
