<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use Inertia\Inertia;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class ContentController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $content = Content::find(1);
        return Inertia::render("Admin", compact("content"));
    }


    /**
     * Update the specified resource in storage.
     */
    public function store(Request $request, string $id)
    {
        // dd($request);
        $validated = Validator::make($request->all(), [
            'mail' => 'nullable',
            'tel' => 'nullable',
            'tiktok' => 'nullable',
            'adress1' => 'nullable',
            'adress2' => 'nullable',
            'fb' => 'nullable',
            'insta' => 'nullable',
            'resonance' => 'nullable',
            'massage' => 'nullable',
            'pp' => 'nullable',
        ])->valid();
        
        if($request->get('pp') == 'delete') {
            $validated['pp'] = null;
        } elseif ($request->hasFile('pp')) {
            $path = Storage::disk('public')->put('image', $request->file('pp'));
            $validated['pp'] = '/storage/'.$path;
        }

        $cont = Content::findOrFail($id);
        $cont->update($validated);

        session()->flash('flash.banner', 'Contenu mis à jour');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->back();
    }

    /**
     * Display data for the frontpage.
     */
    public function show() 
    {
        $content = Content::find(1);
        return Inertia::render('Index', compact('content'));
    }


}
