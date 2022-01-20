<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = ['item', 'completed'];

    public function user()
    {
        return $this->belongsToMany(User::class, 'user_todos');
    }

}
