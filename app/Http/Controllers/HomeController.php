<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $current_school_session_id = 0;

        $classCount = 0;
        $studentCount = 0;
        // $promotionRepository = new PromotionRepository();

        $maleStudentsBySession = 0;

        $teacherCount = 0;

        // $noticeRepository = new NoticeRepository();
        $notices = 0;

        $data = [
            'classCount'    => $classCount,
            'studentCount'  => $studentCount,
            'teacherCount'  => $teacherCount,
            'notices'       => $notices,
            'maleStudentsBySession' => $maleStudentsBySession,
        ];

        return view('dashboard', $data);
    }
}
