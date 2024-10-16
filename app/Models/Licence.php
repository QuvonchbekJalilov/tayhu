<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Licence extends Model
{
    use HasFactory;

    protected $table = 'licences';

    protected $fillable = [
        'name_uz',
        'name_ru',
        'name_en',
        'image',
    ];
}
