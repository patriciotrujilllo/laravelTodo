<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Todo extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
}
