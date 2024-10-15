<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $table = 'portfolios';

    protected $fillable = [
        'team_id',
        'title_uz',
        'title_ru',
        'title_en',
        'image',
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
