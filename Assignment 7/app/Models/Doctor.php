<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $table = 'doctor';
    protected $primaryKey = 'id_doctor';
    protected $fillable = ['doctor_name', 'specialization', 'doctor_desc'];
    public $timestamps = false;
    public function form () {;
        return $this->hasMany(Form::class);
    }
}