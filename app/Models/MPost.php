<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MPost extends Model{

    use HasFactory;

    protected $table = 'app_post';

    public $timestamps = false;

}
