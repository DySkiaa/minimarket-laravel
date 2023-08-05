@extends('layouts.app')



@section('content')
<div class="container">
    <center>
            <h1 class="mt-5">List Kategori</h1>
    </center>   
        <div class="row">
             @foreach($kategori as $k)
            <div class="col-4">
                
                <div class="card mt-3" style="width: 18rem;">
                    <img src="{{ asset('images/'.$k->gambark)}}" class="card-img-top p-3" alt="...">
                    <div class="card-body">
                       <center> <h5 class="card-title"><a href="sesuaikategori/{{$k->id_kategori}}" class="btn btn-primary">{{ $k->jenis}}</a></h5></center>
                       
                </div> 
            </div>
        </div>
  @endforeach
</div>
    
</div>


@endsection