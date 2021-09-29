@extends('master')

@section('judul')
    Tambah Data
    <a href="{{route('berita.index')}}" style="float: right;" class="btn btn-primary">back</a>
    
@endsection

@section('content')


<form action="{{ route('berita.store') }}" method="POST" class="mt-4">
    @csrf
  
     <div class="row">
         <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12 ml-3">
            <div class="form-group">
                <strong>subjudul :</strong>
                <input type="text" name="subjudul" class="form-control" placeholder="subjudul" value="{{old('subjudul')}}">
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 ml-3">
        <div class="form-group">
            <label>isi :</label>
            <textarea class="form-control" name="isi" value="isi" rows="3"></textarea>
          </div>

          <div>
            <div class="form-group">
                <strong>sumber :</strong>
                <input type="text" name="sumber" class="form-control" placeholder="sumber" value="{{old('sumber')}}">
            </div>
        </div>
 
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-5 mb-5">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </div>
     </div>
     </div>
     
   
</form>

@endsection