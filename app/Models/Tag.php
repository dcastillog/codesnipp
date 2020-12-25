<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Snippet;

class Tag extends Model
{
    use HasFactory;

    public function snippets()
    {
        return $this->belongsToMany(Snippet::class);
    }
}
