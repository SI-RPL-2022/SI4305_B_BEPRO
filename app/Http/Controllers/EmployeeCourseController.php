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
            $this->param['getCourse'] = \DB::table('courses')
                                        ->select('courses.*', 'course_categories.category_name')
                                        ->join('course_categories', 'courses.category_id', 'course_categories.id')
                                        ->get();
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
