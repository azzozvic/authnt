@extends('layouts.app')

@section('content')

<div class="jumbotron container">


    <a class="btn btn-primary btn-lg" href="{{route('user.create')}}" role="button">create user</a>
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
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>

              @php
                  $i=0;
              @endphp
           @foreach ($users as $item )
           <tr>
           <th scope="row">{{++$i}}</th>
           <td>{{$item->name}}</td>
           <td>{{$item->email}}</td>
           <td>
            <div class="row">
                    <form action="{{route('user.destroy',$item->id)}}" >
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

      {{-- {!!$users->links()!!} --}}
  </div>

@endsection
{{-- ['id'=>$item->id] --}}

