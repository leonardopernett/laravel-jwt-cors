<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable=['title','body'];

   /* protected $hidden =['title','body'];
    protected $appends=['post_name','post_except'];

    public function getPostNameAttribute(){
        return strtoupper($this->title);
    }

    public function getPostExceptAttribute(){
        return strtoupper( substr($this->body,0,10)). "...";
    }
    */
}
