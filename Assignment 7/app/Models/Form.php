<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $table = 'form';
    protected $primaryKey = 'id_form';
    protected $fillable = ['form_name', 'from_phonenumber', 'form_date', 'form_time', 'form_desc'];
    public $timestamps = false;
    public function doctor () {
        return $this->belongsTo(Doctor::class);
    }
}