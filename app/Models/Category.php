<?php

namespace App;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;


class Category extends TCG\Voyager\Models\Category
{
    use HasFactory;


    public function trainings()
    {
        return $this->hasMany(Training::class, 'category_id', 'id');
    }
}
