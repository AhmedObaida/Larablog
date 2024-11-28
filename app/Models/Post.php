<?php

namespace App\Models;


use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File  ;

class Post

{
    public static function all()
    {
        $files = File::files(resource_path("/posts"));

        return array_map(function ($file){
            return $file->getContents();
        }, $files);
    }

    public static function find($slug)
    {
        $path= resource_path("/posts/{$slug}.html");

        if(!file_exists($path)){
        //    return redirect('/posts');
            throw new ModelNotFoundException();
        }

        return cache()->remember("posts.{$slug}" , 1000 , function () use ($path){
            // var_dump("hit");
            return file_get_contents($path);
        });

    }
}