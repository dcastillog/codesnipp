<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\File;
use App\Models\Tag;

class Snippet extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function files() 
    {
        return $this->hasMany(File::class);
    }

    public function tags() 
    {
        return $this->belongsToMany(Tag::class);
    }
}
