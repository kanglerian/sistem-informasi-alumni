<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Students extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nim','photo','full_name','gender','birthday','alumni','telp','email','address','major','year_sign','status','facebook','instagram','youtube','tiktok'
    ];

    protected $hidden = [];

    public function history() {
        return $this->hasMany(HistoryAlumni::class,'students_id');
    }

    public function getPhotoAttribute($value)
    {
        return url('storage/',$value);
    }

}
