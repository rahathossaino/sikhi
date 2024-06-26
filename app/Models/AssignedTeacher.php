<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignedTeacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'teacher_id',
        'semester_id',
        'class_id',
        'section_id',
        'course_id',
        'session_id',
    ];

    /**
     * Get the teacher.
     */
    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    /**
     * Get the schoolClass.
     */
    public function schoolClass() {
        return $this->belongsTo(SchoolClass::class, 'class_id');
    }

    /**
     * Get the section.
     */
    public function section() {
        return $this->belongsTo(Section::class, 'section_id');
    }

    /**
     * Get the course.
     */
    public function course() {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
