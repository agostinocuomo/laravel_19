<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class Category extends Model
{
    use HasFactory;

    public $fillable=[
        'category'
    ];
public function article(){
    return $this->belongsToMany(Article::class);
}
}
