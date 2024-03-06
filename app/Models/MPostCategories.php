<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MPostCategories extends Model
{
    use HasFactory;

    protected $table = 'app_post_categories';

    public $timestamps = false;

}
