@extends('layouts.app')
@section('content')
<div class="container">


    <div class="jumbotron container">


        <a class="btn btn-primary btn-lg" href="{{route('posts')}}" role="button"> posts</a>
        {{-- <a class="btn btn-primary btn-lg" href="{{route('products.trash')}}" role="button">trashed</a> --}}
      </div>
      <div class="container">
          {{-- @if ($message=Session::get('success'))
          <div class="alert alert-primary" role="alert">
           {{$message}}
          </div>
          @endif --}}

      </div>


    @if (count($errors)>0)
        @foreach ($errors->all() as $item)
        <div class="alert alert-danger" role="alert">
            {{$item}}
          </div>
        @endforeach
    @endif
    <form action="{{route('post.update',$post->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleFormControlInput1">title</label>
            <input type="text" class="form-control" name="title" value="{{$post->title}}" >
          </div>


          <div class="form-group">
            @foreach ($tags as $item)
            <input type="checkbox"  name="tags[]" value="{{$item->id}}"
            @foreach ($post->tag as $item2)
                @if ($item->id==$item2->id)
                    checked
                @endif
            @endforeach

            >
            <label for="">{{$item->tag}}</label>
            @endforeach
        </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">content</label>
          <textarea class="form-control"  rows="3" name="content"> {!!$post->content!!} </textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">photo</label>
            <input type="file" class="form-control" name="photo"  value="{{$post->photo}}" >
          </div>

        <div class="form-group">
       <button class="btn btn-success" type="submit">update</button>
          </div>
      </form>
</div>
@endsection
