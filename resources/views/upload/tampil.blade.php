@extends('template')
@section('main')
    <h1>Upload File</h1>
    <form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="d-flex">
            <div class="form-group">
                <label for="exampleFormControlFile1">Pilih Gambar</label>
                <input type="file" class="form-control-file" name="image">
            </div>
            <div class="mt-4">
                <button class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td><img src="{{ asset('storage/'.$item->image) }}" alt="" width="300px"></td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
