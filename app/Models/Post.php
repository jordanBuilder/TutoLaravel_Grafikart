<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // par defut quand on essaie de créer un obet à partir d'un tableau ,laravel ne l'autorise pas .

    // donc on doit spécifier les champs du model qui peuvent être remplis de cette manière
    protected $fillable = [
        'title',
        'slug',
        'content'
    ];

    // pour définir les champs qui ne sont pas remplissables de cette façon  c-a-d Post::create([...])
    protected $guarded = [];
}
