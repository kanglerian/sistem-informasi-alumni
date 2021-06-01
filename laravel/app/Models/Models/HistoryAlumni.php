<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HistoryAlumni extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'date','students_id','company_id','position','status','information'
    ];

    protected $hidden = [];

    public function students(){
        return $this->belongsTo(Students::class,'students_id','id');
    }

    public function company(){
        return $this->belongsTo(Company::class,'company_id','id');
    }
}
