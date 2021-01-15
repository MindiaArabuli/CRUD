<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\AllRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books=Book::all();
        return view('admin.index',compact('books'));
    }

    public function request()
    {
        $requests=AllRequest::orderBy('created_at', 'desc')->get();
        return view('admin.request',compact('requests'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        $book = new Book([
            'BookTitle' => $request->get('BookTitle'), 
            'BookDescription' => $request->get('Description'),
             'BookPrice' => $request->get('BookPrice') ,
             'BookImageLink' => $request->get('Link'),
            ]);
        $book->save();
        return redirect('/admin')->with('success','book saved!');
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
        $book = book::find($id);
        return view('admin.edit', compact('book'));    
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
        

        $book = Book::find($id);
        $book->BookTitle = $request->get('BookTitle');
        $book->BookPrice = $request->get('BookPrice');
        $book->BookDescription = $request->get('BookDescription');
        $book->BookImageLink = $request->get('BookImageLink');
        
        $book->save();

        return redirect('/admin')->with('success', 'Contact updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();

        return redirect('/admin')->with('success', 'Contact deleted!');
    }
}
