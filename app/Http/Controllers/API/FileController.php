<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

use App\Http\Resources\File as FileResource;
use App\Models\File;

class FileController extends Controller
{
    public function index()
    {
        return FileResource::collection(File::all());
    }
}
