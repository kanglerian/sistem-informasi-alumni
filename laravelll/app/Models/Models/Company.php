<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'logo','company_name','field', 'scale', 'email', 'contact', 'address', 'status'
    ];

    protected $hidden = [];

    public function history() {
        return $this->hasMany(HistoryAlumni::class,'company_id');
    }
}
