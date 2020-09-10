@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Book</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('books.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
  
    <form action="{{ route('books.update',$book->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              
            <div class="form-group">
                <strong>Judul :</strong>
                <input type="text" name="title" value="{{ $book->title }}"  class="form-control" placeholder="Title">
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Deskripsi :</strong>
                    <input type="text" name="description" value="{{ $book->description }}"  class="form-control" placeholder="Description">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Penerbit :</strong>
                    <input type="text" name="publisher"  value="{{ $book->publisher }}" class="form-control" placeholder="publisher">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Harga :</strong>
                    <input type="text" name="price"  value="{{ $book->price }}" class="form-control" placeholder="price">
                </div>
            </div>

        
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
           
   
    </form>
@endsection