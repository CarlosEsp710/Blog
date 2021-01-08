<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function posts()
    {
        return view('posts',[ //retornar Vista con parámetros
            'posts' => Post::with('user')->latest()->paginate() //cargar la relación con Eloquent, traer datos por orden descendente, retornar datos con estructura de paginación
        ]);
    }
    //Retornar un post, con el modelo/clase Post
    public function post(Post $post) //Parámetro de consulta
    {
        return view('post',['post' => $post]); //retornar vista que imprime un único post por medio de consulta
    }
}
