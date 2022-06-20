<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;

class ExportEmployeeQuiz implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $exportEmployee = \DB::table('report_quises')
                            ->select('users.name', 'courses.course_name', 'course_modules.module_name', \DB::raw("SUM(IF(report_quises.status = 'true', course_module_quizes.score, 0)) AS Nilai"))
                            ->join('course_module_quizes', 'course_module_quizes.id', 'report_quises.course_module_quiz_id')
                            ->join('course_modules', 'course_modules.id', 'course_module_quizes.course_module_id')
                            ->join('courses', 'courses.id', 'course_modules.course_id')
                            ->join('enrolls', 'enrolls.course_id', 'courses.id')
                            ->join('users', 'users.id', 'enrolls.user_id')
                            ->where('report_quises.status', '<>', 'not_corrected')
                            ->groupBy('course_module_quizes.course_module_id')
                            ->get();
                            
        return $exportEmployee;
    }
}
