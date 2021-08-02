<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BooksController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('books.index')->with('books', $books);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $publishers = Publisher::all();
        $authors = Author::all();

        $data = array(
            'categories' => $categories,
            'publishers' => $publishers,
            'authors' => $authors
        );

        return view('books.create')->with($data);
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
            'num_of_pages' => 'required',
            'price' => 'required',
            'amount' => 'required',
            'sold' => 'required'
        ]);

        $book = new Book;

        $book->author_id = $request->input('author');
        $book->publisher_id = $request->input('publisher');
        $book->category_id = $request->input('category');
        $book->title = $request->input('title');
        $book->description = $request->input('description');
        $book->num_of_pages = $request->input('num_of_pages');
        $book->price = $request->input('price');
        $book->amount = $request->input('amount');
        $book->sold = $request->input('sold');

        $book->save();

        return redirect('/books')->with('success', 'Book created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id);
        return view('books.show')->with('book', $book);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);

        $data = array(
            'book' => $book,
            'authors' => Author::all(),
            'publishers' => Publisher::all(),
            'categories' => Category::all()
        );

        return view('books.edit')->with($data);
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
            'description' => 'required',
            'num_of_pages' => 'required',
            'price' => 'required',
            'amount' => 'required',
            'sold' => 'required'
        ]);

        $book = Book::find($id);

        $book->author_id = $request->input('author');
        $book->publisher_id = $request->input('publisher');
        $book->category_id = $request->input('category');
        $book->title = $request->input('title');
        $book->description = $request->input('description');
        $book->num_of_pages = $request->input('num_of_pages');
        $book->price = $request->input('price');
        $book->amount = $request->input('amount');
        $book->sold = $request->input('sold');

        $book->save();

        return redirect('/books')->with('success', 'Book created');
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
        return redirect('books')->with('success', 'Book deleted');
    }
}
