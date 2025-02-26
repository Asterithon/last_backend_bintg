<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    
    public function index(){
        $books = Book::all();
        return $books;
        // return view('book.index', compact('books'));
    }
    
    public function create(){
        return 'OK';
        // return view('book.create');
    }
    
    public function store(Request $request){
        // dd($request);
        $validasi = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'author' => 'required',
        ]);
        
        Book::create($validasi);
        return ['book'=>$validasi];
        // return redirect()->route('book.index');
    }

    public function show(Request $request, $id)
    {
        $book = Book::find($id);
        if ($book) {
            return response()->json($book);
        } else {
            return response()->json(['error' => 'Book not found'], 404);
        }
    }
    
    public function edit($id){
        $book = Book::find($id);
        return view('book.edit', compact('book'));
    }

    public function update(Request $request, $id){
        $book = Book::find($id);
        $validasi = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'author' => 'required',
        ]);

        $book->update($validasi);
        return $book;

    }

    public function destroy($id){
        $book = Book::find($id);
        $book->delete();
        return ['message' => 'buku berhasil dihapus'];
    }
}
