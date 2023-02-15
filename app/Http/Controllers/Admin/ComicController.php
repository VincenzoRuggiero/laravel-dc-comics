<?php

namespace App\Http\Controllers\Admin;

use App\Models\Comic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Milestone 1 - Controller created with '-r' shortcut command to populate CRUD ops
class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // Defined 'index' method to visualize all comics as a list with a table
    public function index()
    {
        $comics = Comic::all();
        return view('admin.products.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    // Get data from Create blade's input fields to be then stored in db
        $formData = $request->all();

        $newComic = new Comic();
        // $newComic->title = $formData['title'];
        // $newComic->description = $formData['description'];
        // $newComic->thumb = $formData['thumb'];
        // $newComic->price = $formData['price'];
        // $newComic->series = $formData['series'];
        // $newComic->sale_date = $formData['sale_date'];
        // $newComic->type = $formData['type'];
        // $newComic->save();
    
    // Bonus 2 - Using 'Fillables' to store data from form
        $newComic->fill($formData);
        $newComic->save();

    // After storing the item the browser self-opens the newly created 
    // product/comic
    // return redirect()->route('products.show', $newComic->id);

    // Redirect to index page with all products listed
        return redirect()->route('admin.products.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // Defined 'show' method to visualize a single comic in a separate page
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        // dd($comic);
        return view('admin.products.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $comic = Comic::findOrFail($id);
        return view('admin.products.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // Update stored db data with the 'edit' blade's form
    public function update(Request $request, $id)
    {
        $formData = $request->all();
        $comic = Comic::findOrFail($id);
        $comic->update($formData);

        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Comic $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    // public function destroy($id)
    {   
        // $comic = Comic::findOrFail($id);
        $comic->delete();
        return redirect()->route('admin.products.index');
    }
}
