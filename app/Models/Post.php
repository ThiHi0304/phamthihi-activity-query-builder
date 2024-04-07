<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Post extends Model
{
    use HasFactory;
    protected $table='posts';
    public function getAllPost(){
        $posts = DB::table('posts')->get();
        return $posts;
    }
    public function getOnePost($id){
        $post = DB::table('posts')
            ->where('id', $id)
            ->first();
        return $post;
    }     
}
