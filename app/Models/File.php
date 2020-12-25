<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Snippet;

class File extends Model
{
    use HasFactory;


    public function snippet()
    {
        return $this->belongsTo(Snippet::class);
    }
}
