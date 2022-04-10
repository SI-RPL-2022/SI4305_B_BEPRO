<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Enroll;

class EmployeeEnrollController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:Employee']);
    }

    private $param;
    public function store(Request $request, $id)
    {
        try {
            $enroll = new Enroll();
            $enroll->course_id = $id;
            $enroll->user_id = \Auth::user()->id;
            $enroll->status = 'active';
            $enroll->save();

            return redirect('/back-employee/course/list-course')->withStatus('Berhasil melakukan Enrollment.');
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }
}
