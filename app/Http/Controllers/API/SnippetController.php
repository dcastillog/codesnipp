<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Response;

use App\Models\Snippet;
use App\Models\File;
use App\Models\Tag;
use App\Http\Resources\Snippet as SnippetResource;

class SnippetController extends Controller
{
    public function index()
    {
        return SnippetResource::collection(Snippet::all());
    }
    
    public function store(Request $request) 
    {
        $snippet = Snippet::create($request->all());

        foreach($request['files'] as $file)
        {
            $snippet->files()->create($file);
        }

        foreach($request['tags'] as $tag)
        {
            $newTag = new Tag();
            $newTag->name = $tag;
            $newTag->save();

            $snippet->tags()->attach($newTag);
        }

        return SnippetResource::make($snippet);


    }

    public function show(Snippet $snippet) 
    {
        return SnippetResource::make($snippet);
    }

    public function update(Snippet $snippet, Request $request)
    {
        $snippet = Snippet::find($snippet->id);

        $snippet->update($request->all());

        return Response::json([
            'msg' => 'Updated successfully',
            'status' => 'OK',
        ], 200);
    }

    public function destroy(Snippet $snippet) 
    {
        $snippet->delete();

        return Response::json([
            'msg' => 'Deleted successfully',
            'status' => 'OK',
        ], 200);
    }
}
