<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\Snippet as SnippetResource;
use App\Models\User;

class UserSnippetsController extends Controller
{
    public function index(User $user) 
    {
        return SnippetResource::collection(
            $user->snippets
        );
    }
}
