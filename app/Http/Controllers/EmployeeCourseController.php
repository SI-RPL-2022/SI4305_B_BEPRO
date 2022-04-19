<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\CourseBenefit;
use App\Models\Enroll;

class EmployeeCourseController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:Employee']);
    }

    private $param;
    public function index()
    {
        try {
            // $this->param['getCourse'] = \DB::table('courses')
            //                             ->select('courses.*', 'course_categories.category_name')
            //                             ->join('course_categories', 'courses.category_id', 'course_categories.id')
            //                             ->get();
            // $this->param['getCourse'] = \DB::table('courses')
            //                             ->select('courses.*', 'course_categories.category_name')
            //                             ->join('course_categories', 'courses.category_id', 'course_categories.id')
            //                             ->leftJoin('enrolls', 'courses.id', 'enrolls.course_id')
            //                             ->leftJoin('users', 'users.id', 'enrolls.user_id')
            //                             ->where('enrolls.id', NULL)
            //                             ->where('enrolls.user_id', '=', \Auth::user()->id)
            //                             ->get();
            $this->param['getCourse'] = \DB::table('courses')
                                            ->select('courses.*', 'course_categories.category_name')
                                            ->join('course_categories', 'courses.category_id', 'course_categories.id')
                                            ->join('enrolls', 'courses.id', 'enrolls.course_id')
                                            ->join('users', 'enrolls.user_id', 'users.id')
                                            ->where('users.id', \Auth::user()->id)
                                            ->get();
            $courseID = array_column($this->param['getCourse']->toArray(), 'id');
            $this->param['getCoursed'] = \DB::table('courses')
                                        ->select('courses.*', 'course_categories.category_name')
                                        ->join('course_categories', 'courses.category_id', 'course_categories.id')
                                        ->whereNotIn('courses.id', $courseID)
                                        ->get();
            // dd($courseID);
            // $this->param['getCoursed'] = \DB::table('courses')
            //                                 ->select('courses.*')
            //                                 ->join('enrolls', 'courses.id', 'enrolls.course_id')
            //                                 ->leftJoin('users', 'enrolls.user_id', 'users.id')
            //                                 ->where('users.id', \Auth::user()->id)
            //                                 ->where('courses.id', NULL)
            //                                 ->get();
            // $this->param['getCoursed'] = \DB::table('users')
            //                             ->select('courses.*')
            //                             ->join('enrolls', 'users.id', 'enrolls.user_id')
            //                             ->join('courses', 'enrolls.course_id', 'courses.id')
            //                             ->where('users.id', \Auth::user()->id)
            //                             ->where('enrolls.course_id', NULL)
            //                             ->where('enrolls.user_id', NULL)
            //                             ->get();

            $this->param['getcBenefit'] = CourseBenefit::all();
            $this->param['getEnroll'] = Enroll::where('user_id', \Auth::user()->id)->get();
            
            return view('employee.pages.course.list', $this->param);
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }
}
