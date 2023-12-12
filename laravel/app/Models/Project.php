<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected  $fillable = ['username', 'price', 'mark_1', 'mark_2', 'mark_3', 'creator_user_id'];
}
