<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Category;
use App\Services;

class CategoryController extends Controller
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
        $categories = Category::all();
        $services = Services::all();
        return view('category.index')->with('categories',$categories)->with('services',$services);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
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
        
        // Create Category
        $category = new Category;
        $category->title = $request->input('title');
        $category->description = $request->input('description');
        $category->user_id = auth()->user()->id;
        $category->cover_image = $fileNameToStore;
        $category->save();
        
        return redirect('/category')->with('success', 'Category Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        return view('category.show')->with('category',$category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        if(auth()->user()->id !== $category->user_id){
            return redirect('/category')->with('error','Unauthorized Page');
        }
        
        return view('category.edit')->with('category',$category);
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
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);
        $category = Category::find($id);
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
            
            // Delete file if exists
            Storage::delete('public/cover_images/'.$category->cover_image);
            
        }
        
        // Update Category
        $category->title = $request->input('title');
        $category->description = $request->input('description');
        if($request->hasFile('cover_image')){
            $category->cover_image = $fileNameToStore;
        }
        $category->save();
        
        return redirect('/category')->with('success', 'Category Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        
        //Check if category exists before deleting
        if (!isset($category)){
            return redirect('/category')->with('error', 'No Category Found');
        }
        
        // Check for correct user
        if(auth()->user()->id !==$category->user_id){
            return redirect('/category')->with('error', 'Unauthorized Page');
        }
        
        if($category->cover_image != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/cover_images/'.$category->cover_image);
        }
        
        $category->delete();
        return redirect('/category')->with('success', 'Category Removed');
    }
}
