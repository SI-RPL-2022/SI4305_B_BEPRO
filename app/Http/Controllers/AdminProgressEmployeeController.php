<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class AdminProgressEmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:Admin']);
    }
    
    private $param;
    public function index(){
        try {
            $this->param['getEmployee'] = User::whereHas('roles', function($thisRole){
                $thisRole->where('name', 'Employee');
            })->get();
            // $this->param['getDivision'] = Division::all(); 
            // return view('admin.pages.division.list', $this->param);

            return view('admin.pages.progress-employee.list', $this->param);
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    public function detail($id) {
        try {
            $this->param['getMyCourse'] = \DB::table('enrolls')
                                        ->select('courses.*')
                                        ->join('courses', 'courses.id', 'enrolls.course_id')
                                        ->where('enrolls.user_id', $id)
                                        ->where('enrolls.status', 'active')
                                        ->get();
            
            $this->param['getTotalContent'] = \DB::table('course_module_contents')
                                                ->select(array('courses.id AS course_id', 'courses.course_name AS course_name', \DB::raw('COUNT(course_module_contents.id) AS total_content')))
                                                ->join('course_modules', 'course_module_contents.course_module_id', 'course_modules.id')
                                                ->join('courses', 'course_modules.course_id', 'courses.id')
                                                ->groupBy('courses.course_name')
                                                ->get();
            $this->param['getTotalContentDone'] = \DB::table('course_module_content_finsishs')
                                                ->select(array('courses.id AS course_id', 'courses.course_name AS course_name', \DB::raw('COUNT(course_module_content_finsishs.course_module_content_id) AS total_content')))
                                                ->join('enrolls', 'course_module_content_finsishs.enroll_id', 'enrolls.id')
                                                ->join('courses', 'enrolls.course_id', 'courses.id')
                                                ->where('enrolls.user_id', $id)
                                                ->groupBy('courses.course_name')
                                                ->get();

            return view('admin.pages.progress-employee.detail', $this->param);
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }
}
