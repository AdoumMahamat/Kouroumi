<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'contenu',
        'image',
        'id_users',
        'id_categorie',

    ];
    public function categorie(){
        return $this->BelongsTo(Categorie::class,'id_categorie');
    }

    public function user(){
        return $this->BelongsTo(user::class,'id_user');
    }
}
