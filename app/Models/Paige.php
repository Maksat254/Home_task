<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paige extends Model
{
    protected $fillable = ['title', 'content'];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }}
