<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{ 
    use HasFactory;
    protected $fillable = ['titre', 'description', 'image',"user_id","note","groupe_id"];

}
