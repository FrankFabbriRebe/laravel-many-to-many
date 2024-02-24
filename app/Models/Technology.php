<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;

    // function to create relation with project table
    public function projects()
    {

        return $this->belongsToMany(Project::class);
    }

}
