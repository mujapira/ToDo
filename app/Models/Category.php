<?php

namespace App\Models;

use App\Models\User;
use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    use HasFactory;

    protected $fillable = [
        'title',
        'color',
        'user_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function tasks() {
        return $this->hasMany(Task::class);
    }
}
