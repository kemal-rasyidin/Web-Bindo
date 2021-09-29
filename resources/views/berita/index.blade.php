@extends('master')

@section('judul')
    Data Blog
@endsection

@section('content')
<a class="btn btn-success mb-5" href="{{ route('berita.create') }}" style="float: right"> Tambah Data Baru</a>

<table class="table table-bordered text-white">
    <thead>
      <tr class="bg-primary">
        <th scope="col">No</th>
        <th scope="col">SubJudul</th>
        <th scope="col">isi</th>
        <th scope="col">sumber</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($beritas as $no => $data)
        <tr>
        <td style="width: 10%">{{ ++$no }}</td>
        <td>{{ $data->subjudul }}</td>
        <td>{{ $data->isi }}</td>
        <td>{{ $data->sumber }}</td>
        <td>
          <form action="{{ route('berita.destroy',$data->id) }}" method="POST">

            <a class="btn btn-info" href="{{ route('berita.show',$data->id) }}">Show</a>

            <a class="btn btn-primary" href="{{ route('berita.edit',$data->id) }}">Edit</a>

            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
    </tbody>
  </table>
@endsection