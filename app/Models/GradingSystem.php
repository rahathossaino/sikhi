<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SchoolClass;
use App\Models\Semester;



class GradingSystem extends Model
{
    use HasFactory;
    protected $fillable = [
        'system_name',
        'class_id',
        'semester_id',
        'session_id'
    ];

    public function semester() {
        return $this->belongsTo(Semester::class, 'semester_id');
    }

    public function schoolClass() {
        return $this->belongsTo(SchoolClass::class, 'class_id');
    }
}
