@extends('layouts.app')
@section('content')
<div class="container">


    <div class="jumbotron container">


        <a class="btn btn-primary btn-lg" href="{{route('posts')}}" role="button"> posts</a>
        {{-- <a class="btn btn-primary btn-lg" href="{{route('products.trash')}}" role="button">trashed</a> --}}
      </div>
      <div class="container">
        <div class="card" style="width: 40rem;">
            <img src=" {{URL::asset($post->photo)}}" class="card-img-top" alt="{{$post->photo}}">
            <div class="card-body">
              <h5 class="card-title">{{$post->title}}</h5>
              <p class="card-text">{{$post->content}}</p>
              <p class=""> created : {{$post->created_at->diffForhumans()}}</p>
              <p class="">updated : {{$post->updated_at->diffForhumans()}}</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

      </div>




        {{-- <div class="form-group">
            <label for="exampleFormControlInput1">title</label>
            <input type="email" class="form-control" name="title" value="{{$post->title}}" >
          </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">content</label>
          <textarea class="form-control"  rows="3" name="content"> {!!$post->content!!} </textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">photo</label>
            <input type="file" class="form-control" name="photo"  value="{{$post->photo}}" >
          </div> --}}


</div>
@endsection
