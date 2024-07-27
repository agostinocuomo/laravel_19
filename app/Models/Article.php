<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
   
    use HasFactory;

    public $table = 'article';

   public $fillable =['titolo', 'descrizione', 'img'];

   public function category(){
    
    return $this->belongsToMany(Category::class);
}
}
