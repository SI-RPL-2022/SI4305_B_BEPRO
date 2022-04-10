<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseCategory;

class MentorCourseController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:Mentor']);
    }

    private $param;
    public function index()
    {
        try {
            $this->param['getCourse'] = \DB::table('courses')
                                        ->select('courses.*', 'course_categories.category_name')
                                        ->join('course_categories', 'courses.category_id', 'course_categories.id')
                                        ->get();
            $this->param['getcCategory'] = CourseCategory::all();
            
            return view('mentor.pages.course.list', $this->param);
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }
    
    public function add()
    {
        try {
            $this->param['getcCategory'] = CourseCategory::all();

            return view('mentor.pages.course.add', $this->param);
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }
    
    public function store(Request $request)
    {
        $this->validate($request, 
            [
                'course_name' => 'required|min:4',
                'description' => 'required|min:4',
                'thumbnail_video' => 'required|min:4',
            ],
            [
                'required' => ':attribute harus diisi.',
                'course_name.min' => 'Minimal panjang karakter 4.',
                'description.min' => 'Minimal panjang karakter 4.',
                'thumbnail_video.min' => 'Minimal panjang karakter 4.',
            ],
            [
                'course_name' => 'Nama Course',
                'description' => 'Deskripsi',
                'thumbnail_video' => 'Thumbnail Video',
            ],
        );

        try {
            $date = date('H-i-s');
            $random = \Str::random(5);

            $course = new Course();
            $course->course_name = $request->course_name;
            $course->description = $request->description;

            if ($request->file('avatar')) {
                $request->file('avatar')->move('image/upload/course/thumbnail', $date.$random.$request->file('avatar')->getClientOriginalName());
                $course->thumbnail_image = $date.$random.$request->file('avatar')->getClientOriginalName();
            } else {
                $course->thumbnail_image = 'default.png';
            }

            $course->thumbnail_video = $request->thumbnail_video;
            $course->category_id = $request->category;
            $course->slug = \Str::slug($request->course_name);
            $course->save();

            return redirect('/back-mentor/course/add-course')->withStatus('Berhasil menambah data.');
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    public function edit($id)
    {
        try {
            $this->param['getCourseDetail'] = Course::find($id);
            $this->param['getcCategory'] = CourseCategory::all();

            return view('mentor.pages.course.edit', $this->param);
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, 
            [
                'course_name' => 'required|min:4',
                'description' => 'required|min:4',
                'thumbnail_video' => 'required|min:4',
            ],
            [
                'required' => ':attribute harus diisi.',
                'course_name.min' => 'Minimal panjang karakter 4.',
                'description.min' => 'Minimal panjang karakter 4.',
                'thumbnail_video.min' => 'Minimal panjang karakter 4.',
            ],
            [
                'course_name' => 'Nama Course',
                'description' => 'Deskripsi',
                'thumbnail_video' => 'Thumbnail Video',
            ],
        );

        try {
            $date = date('H-i-s');
            $random = \Str::random(5);

            $course = Course::find($id);
            $course->course_name = $request->course_name;
            $course->description = $request->description;

            if ($request->file('avatar')) {
                $request->file('avatar')->move('image/upload/course/thumbnail', $date.$random.$request->file('avatar')->getClientOriginalName());
                $course->thumbnail_image = $date.$random.$request->file('avatar')->getClientOriginalName();
            }

            $course->thumbnail_video = $request->thumbnail_video;
            $course->category_id = $request->category;
            $course->slug = \Str::slug($request->course_name);
            $course->save();

            return redirect('/back-mentor/course/list-course')->withStatus('Berhasil memperbarui data.');
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            Course::find($id)->delete();
            return redirect('/back-mentor/course/list-course')->withStatus('Berhasil menghapus data.');
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }
}
