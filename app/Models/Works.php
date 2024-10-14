<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Status;

class Works extends Model
{
    use HasFactory;
    
    public $timestamps = true;

    protected $table = 'works';

    protected $fillable = [
        'title',
        'status_id',
        'progress',
    ];

    public function status(){
        return $this->belongsTo(Status::class, 'status_id');
    }
}

