<?php

use App\Http\Controllers\AcademicSettingController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AssignedTeacherController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ExamRuleController;
use App\Http\Controllers\GradeRuleController;
use App\Http\Controllers\GradingSystemController;
use App\Http\Controllers\SchoolClassController;
use App\Http\Controllers\SchoolSessionController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\UserController;




Route::group(['prefix'=>'admin'],function(){
    Route::group(['middlware'=>'guest'],function(){
        Route::get('/login',[AdminAuthController::class,'login'])->name('admin.login');
        Route::post('/login',[AdminAuthController::class,'process'])->name('admin.process');
    });
    Route::group(['middleware'=>'auth'],function(){
        Route::get('/home',[HomeController::class,'index'])->name('dashboard');
        Route::get('/logout',[AdminAuthController::class,'logout'])->name('admin.logout');


        Route::get('/academics/settings',[AcademicSettingController::class,'index'])->name('academic.setting');
        Route::post('session/store',[SchoolSessionController::class,'store'])->name('session.store');

        //class
        Route::get('/classes', [SchoolClassController::class, 'index'])->name('class.list');
        Route::post('class/store',[SchoolClassController::class,'store'])->name('class.store');
        Route::get('/class/edit/{id}', [SchoolClassController::class, 'edit'])->name('class.edit');
        Route::post('class/update', [SchoolClassController::class, 'update'])->name('class.update');

        Route::post('semester/store',[SemesterController::class,'store'])->name('semester.store');
        
        Route::post('attandence/update',[AcademicSettingController::class,'updateAttendanceType'])->name('attatndence.update');Route::post('section/create', [SectionController::class, 'store'])->name('section.create');
        


        //section
        Route::post('section/store', [SectionController::class, 'store'])->name('section.store');
        Route::get('/section/edit/{id}', [SectionController::class, 'edit'])->name('section.edit');
        Route::post('section/update', [SectionController::class, 'update'])->name('section.update');
        Route::get('/section/{id}', [SectionController::class, 'getByClassId'])->name('get.sections.courses.by.classId');

        // Courses
        Route::post('course/store', [CourseController::class, 'store'])->name('course.store');
        Route::post('course/update', [CourseController::class, 'update'])->name('course.update');
        Route::get('course/edit/{id}', [CourseController::class, 'edit'])->name('course.edit');


        //teacher
        Route::get('teacher/add',[AcademicSettingController::class,'create'])->name('teacher.create');
        Route::post('teacher/store',[UserController::class,'storeTeacher'])->name('teacher.store');
        Route::post('teacher/assign', [AssignedTeacherController::class, 'store'])->name('teacher.assign');
        Route::get('/teachers', [UserController::class, 'getTeacherList'])->name('teacher.list');
        Route::get('teacher/profile/{id}', [UserController::class, 'showTeacherProfile'])->name('teacher.profile');
        Route::get('/teachers/{id}', [UserController::class, 'editTeacher'])->name('teacher.edit');
        Route::post('teacher/update', [UserController::class, 'updateTeacher'])->name('teacher.update');

        //student 
        Route::get('/students/add', [UserController::class, 'createStudent'])->name('student.create');
        Route::post('student/store', [UserController::class, 'storeStudent'])->name('student.store');
        Route::get('/students', [UserController::class, 'getStudentList'])->name('student.list');
        Route::get('/students/{id}', [UserController::class, 'editStudent'])->name('student.edit');
        Route::post('student/update', [UserController::class, 'updateStudent'])->name('student.update');
        Route::get('/students/profile/{id}', [UserController::class, 'showStudentProfile'])->name('student.profile');
        Route::get('/students/attendance/{id}', [AttendanceController::class, 'showStudentAttendance'])->name('student.attendance');

        //exams
        Route::get('/exams', [ExamController::class, 'index'])->name('exam.list');
    // Route::get('/exams/view/history', function () {
    //     return view('exams.history');
    // });
        Route::get('/exams/add', [ExamController::class, 'create'])->name('exam.create');

        Route::post('/exams/store', [ExamController::class, 'store'])->name('exam.store');
        // Route::post('/exams/delete', [ExamController::class, 'delete'])->name('exam.delete');

        //exam rules
        Route::get('/exams/rules', [ExamRuleController::class, 'index'])->name('exam.rule.list');
        Route::get('/exams/rules/add', [ExamRuleController::class, 'create'])->name('exam.rule.create');
        Route::post('/exams/rules/store', [ExamRuleController::class, 'store'])->name('exam.rule.store');
        Route::get('/exams/rules/edit', [ExamRuleController::class, 'edit'])->name('exam.rule.edit');
        Route::post('/exams/rules/update', [ExamRuleController::class, 'update'])->name('exam.rule.update');


        Route::get('/exams/grade/create', [GradingSystemController::class, 'create'])->name('exam.grade.system.create');
        Route::post('/exams/grade/store', [GradingSystemController::class, 'store'])->name('exam.grade.system.store');
        Route::get('/exams/grade', [GradingSystemController::class, 'index'])->name('exam.grade.system.list');
        Route::get('/exams/grade/rules/add', [GradeRuleController::class, 'create'])->name('exam.grade.system.rule.create');
        Route::post('/exams/grade/rule/store', [GradeRuleController::class, 'store'])->name('exam.grade.system.rule.store');
        Route::get('/exams/grade/rules', [GradeRuleController::class, 'index'])->name('exam.grade.system.rule.list');
        Route::post('/exams/grade/rule/delete', [GradeRuleController::class, 'destroy'])->name('exam.grade.system.rule.delete');
    });
});


