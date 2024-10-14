<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $table = 'teams';

    protected $fillable = [
        'name',
        'description_uz',
        'description_ru',
        'description_en',
        'skill_text_uz',
        'skill_text_ru',
        'skill_text_en',
        'architecture',
        'construction',
        'interior_design',
    ];
}
