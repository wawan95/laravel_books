@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">

            <div class="pull-center">
            
                <a class="btn btn-success" href="{{ route('books.create') }}"> Create New Book</a>
                <a class="btn btn-success" href="{{  url('/export-excel') }}"> Download excel</a>
            </div>
        </div>
    </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Judul</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Penerbit</th>
            <th scope="col">Harga</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <?php $i =1;?>
        @foreach ($books as $book)
        <tbody>
            <tr>
            <th scope="row">{{ $i++ }}</th>
            <td>{{ $book->title }}</td>
            <td>{{ $book->description }}</td>
            <td>{{ $book->publisher }}</td>
            <td>{{ $book->price }}</td>
            <td>
            <form action="{{ route('books.destroy',$book->id) }}" method="POST">
            <a href="{{ route('books.edit',$book->id) }}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                </form>
            </td>
            </tr>
        </tbody>
        @endforeach
        </table>
        </div>
    </div>
</div>
@endsection
