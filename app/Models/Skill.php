<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Scout\Searchable;

class Skill extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'skill';

    protected $guarded = [
        'id'
    ];

    protected $fillable = [
        'nama_skill', 'deskripsi'
    ];
}
