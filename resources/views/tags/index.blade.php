@extends('layouts.app')

@section('content')

<div class="jumbotron container">


    <a class="btn btn-primary btn-lg" href="{{route('tag.create')}}" role="button">create tag</a>
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
            <th scope="col">tag</th>
            <th scope="col">actions</th>
          </tr>
        </thead>
        <tbody>

              @php
                  $i=0;
              @endphp
           @foreach ($tags as $item )
           <tr>
           <th scope="row">{{++$i}}</th>
           <td>{{$item->tag}}</td>
           <td>
            <div class="row">
                <div class="col-sm">
                    <a href="{{route('tag.edit',$item->id)}}" class="btn btn-success">edit</a>
                </div>

                    <form action="{{route('tag.destroy',$item->id)}}" >
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit" class="btn btn-dander">delete</button>
                        </form>
                </div>
              </div>
           </td>
        </tr>
           @endforeach
        </tbody>
      </table>

      {!!$tags->links()!!}
  </div>

@endsection
{{-- ['id'=>$item->id] --}}

