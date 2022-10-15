@extends('layouts.app')

@section('content')

<div class="jumbotron container">


    <a class="btn btn-primary btn-lg" href="{{route('posts')}}" role="button"> posts</a>
    {{-- <a class="btn btn-primary btn-lg" href="{{route('post.trashed')}}" role="button">trashed</a> --}}
  </div>
  <div class="container">
      {{-- @if ($message=Session::get('success'))
      <div class="alert alert-primary" role="alert">
       {{$message}}
      </div>
      @endif --}}

  </div>

  <div class="container">

    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">user</th>
            <th scope="col">photo</th>
            <th scope="col">actions</th>
          </tr>
        </thead>
        <tbody>

              @php
                  $i=0;
              @endphp
           @foreach ($post as $item )
           <tr>
           <th scope="row">{{++$i}}</th>
           <td>{{$item->title}}</td>
           <td>{{$item->user->name}} </td>
           <td>
                 {{-- <img src=" {{$item->photo}}" alt=" {{$item->photo}}" --}}
            <img src=" {{URL::asset($item->photo)}}" alt=" {{$item->photo}}"
             class="tumbnail" width="100" height="50">

            </td>
           <td>
            <div class="row">
                <div class="col-sm">
                    <a href="{{route('post.restore',$item->id)}}" class="btn btn-success">restore</a>
                </div>

                <div class="col-sm">
                    <form action="{{route('post.hdelete',$item->id)}}" >
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit" class="btn btn-dander">hdelete</button>
                        </form>
                </div>
              </div>
           </td>
        </tr>
           @endforeach
        </tbody>
      </table>

      {{-- {!!$posts->links()!!} --}}
  </div>

@endsection
{{-- ['id'=>$item->id] --}}

