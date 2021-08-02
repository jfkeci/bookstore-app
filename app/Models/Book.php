<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Publisher;
use App\Models\Author;
use App\Models\Category;

class Book extends Model
{

    public function publishers()
    {
        return $this->hasMany('Publisher');
    }

    public function authors()
    {
        return $this->hasMany('Author');
    }

    public function categories()
    {
        return $this->hasMany('Category');
    }
}
