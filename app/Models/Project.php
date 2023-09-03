<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    // protected $table = 'Project';
    protected $fillable = [
        'title',
        'description',
        'type_id',
        'image',
        'group_name',
        'started_at',
        'finished_at',
        'final_score',
    ];

    public function type(){
        return $this->belongsTo(Type::class);
    }
    
    public function technology(){
        return $this->belongsToMany(Technology::class);
    }
}
