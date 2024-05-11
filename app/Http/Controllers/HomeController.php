<?php

namespace App\Http\Controllers;

use App\Interfaces\SchoolClassInterface;
use App\Interfaces\SchoolSessionInterface;
use App\Interfaces\UserInterface;
use App\Repositories\NoticeRepository;
use App\Repositories\PromotionRepository;
use App\Traits\SchoolSession;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    use SchoolSession;
    protected $schoolSessionRepository;
    protected $schoolClassRepository;
    protected $userRepository;
    public function __construct(UserInterface $userRepository, SchoolSessionInterface $schoolSessionRepository, SchoolClassInterface $schoolClassRepository){
        $this->userRepository = $userRepository;
        $this->schoolSessionRepository = $schoolSessionRepository;
        $this->schoolClassRepository = $schoolClassRepository;
    }
    public function index()
    {
        $current_school_session_id = $this->getSchoolCurrentSession();

        $classCount = $this->schoolClassRepository->getAllBySession($current_school_session_id)->count();

        $studentCount = $this->userRepository->getAllStudentsBySessionCount($current_school_session_id);

        $promotionRepository = new PromotionRepository();

        $maleStudentsBySession = $promotionRepository->getMaleStudentsBySessionCount($current_school_session_id);

        $teacherCount = $this->userRepository->getAllTeachers()->count();

        $noticeRepository = new NoticeRepository();
        $notices = $noticeRepository->getAll($current_school_session_id);

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
