<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MUserAdicional extends Model
{
    use HasFactory;

    protected $table = 'app_user_adicional';

    /**
     * Desabilito los campos de updated_at y created_at
     * https://stackoverflow.com/a/57352764
     * @var bool
     */
    public $timestamps = false;

}
