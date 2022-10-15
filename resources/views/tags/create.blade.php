@extends('layouts.app')
@section('content')
<div class="container">


    <div class="jumbotron container">


        <a class="btn btn-primary btn-lg" href="{{route('tags')}}" role="button"> tags</a>
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
    <form action="{{route('tag.store')}}" method="POST" >
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">tag</label>
            <input type="text" class="form-control" name="tag"  >
          </div>

        <div class="form-group">
       <button class="btn btn-success" type="submit">save</button>
          </div>
      </form>
</div>
@endsection
