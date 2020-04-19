<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Category;
use App\Services;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct()
    {
        $this->middleware('auth',['except' =>['index','show']]);
    }
    
    public function index()
    {
        $categories = Post::all();
        return view('category.index')->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('service.create')->with('categories',$categories);;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'category_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);
        
        // Handle File Upload
        if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        
        // Create Post
        $service = new Services;
        $service->title = $request->input('title');        
        $service->description = $request->input('description');
        $service->user_id = auth()->user()->id;
        $service->category_id = $request->input('category_id');
        $service->cover_image = $fileNameToStore;
        $service->save();
        
        return redirect('/category')->with('success', 'Service Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Services::find($id);
        
        //Check if post exists before deleting
        if (!isset($service)){
            return redirect('/category')->with('error', 'No Post Found');
        }
        
        // Check for correct user
        if(auth()->user()->id !==$service->user_id){
            return redirect('/category')->with('error', 'Unauthorized Page');
        }
        
        if($service->cover_image != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/cover_images/'.$service->cover_image);
        }
        
        $service->delete();
        return redirect('/category')->with('success', 'Service Removed');
    }
}
