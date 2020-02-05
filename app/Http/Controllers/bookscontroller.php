<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Carbon\Carbon;

class bookscontroller extends Controller
{
    public function index()
    {
        $book = \App\Book::all();
        return $book;
    }
    public function create($jdl)
    {
        $book = new Book();
        $book->title = $jdl;
        $book->publisher ="Assalam Studio";
        $book->pages=100;
        $book->date=Carbon::now();
        $book->price=10000;
        $book->status=false;
        $book->synopsis="Lorem Ipsum";
        $book->save();
        return $book;
    }

    public function show($id)
    {
        $book = Book::find($id);
        return $book;
    }
    public function edit($id,$jdl)
    {
        $book = Book::find($id);
        $book->title = $jdl;
        $book->publisher ="Assalam Studio";
        $book->pages=100;
        $book->date=Carbon::now();
        $book->price=10000;
        $book->status=false;
        $book->synopsis="Lorem Ipsum";
        $book->save();
        return $book;
    }

    public function delete($id)
    {
        $book =Book::find($id);
        $book->delete();
        return $book;
    }

    public function select()
    {
        $buku = Book::select('title','publisher','pages','price')->take(3)->get();
        return $buku;
    }
    public function record()
    {
        $buku=Book::count();
        return $buku;
    }

}
