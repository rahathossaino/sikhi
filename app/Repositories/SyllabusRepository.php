<?php

namespace App\Repositories;

use App\Models\Syllabus;
use Illuminate\Support\Facades\Storage;

class SyllabusRepository {
    public function store($request) {
        $file=$request['file'];
        $ext=$file->getClientOriginalExtension();
        $fileName=uniqid().".".$ext;
        $file->move(public_path()."/upload/syllabus/",$fileName);
        try {
            Syllabus::create([
                'syllabus_name'           => $request['syllabus_name'],
                'syllabus_file_path'      => "upload/syllabus/".$fileName,
                'class_id'                => $request['class_id'],
                'course_id'               => $request['course_id'],
                'session_id'              => $request['session_id']
            ]);
        } catch (\Exception $e) {
            throw new \Exception('Failed to create syllabus. '.$e->getMessage());
        }
    }

    public function getByClass($class_id) {
        return Syllabus::where('class_id', $class_id)->get();
    }

    public function getByCourse($course_id) {
        return Syllabus::where('course_id', $course_id)->get();
    }
}