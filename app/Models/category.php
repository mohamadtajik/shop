<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    protected  $fillable = [
        'title' ,
        'category_id'
    ];

    public function parent()
    {
        return $this->belongsTo(category::class, 'category_id');
    }

    public function children()
    {
        return $this->hasMany(category::class , 'category_id');
    }
}
