<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Publisher;
use App\Models\Author;
use App\Models\Category;

class Book extends Model
{

    public function publisher()
    {
        return $this->belongsTo('Publisher');
    }

    public function author()
    {
        return $this->belongsTo('Author');
    }

    public function category()
    {
        return $this->belongsTo('Category');
    }
}
