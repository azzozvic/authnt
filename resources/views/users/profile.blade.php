@extends('layouts.app')
@section('content')
<div class="container">
@php
    $genderArray=['male','female'];
@endphp

@if (count($errors)>0)
@foreach ($errors->all() as $item)
<div class="alert alert-danger" role="alert">
    {{$item}}
  </div>
@endforeach

@endif
    <form action="{{route('profile.update')}}" method="POST">
        @csrf
        @method('PUT')
        {{-- <div class="form-group">
          <label for="exampleFormControlInput1">name</label>
          <input type="email" class="form-control" name="name" value="{{$user->name}}">
        </div> --}}
        <div class="form-group">
            <label for="exampleFormControlInput1">province</label>
            <input type="email" class="form-control" name="province" value="{{$user->profile->province}}" >
          </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">gender</label>
          <select class="form-control" name="gender">
              @foreach ( $genderArray as $item)
              <option value="{{$item}}"  {{( $user->profile->gender==$item) ? 'selected' : ''}}>{{$item}}</option>
              @endforeach


          </select>
        </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">bio</label>
          <textarea class="form-control"  rows="3" name="bio">{{ $user->profile->bio}}</textarea>
        </div>

        <div class="form-group">
       <button class="btn btn-success" type="submit">update</button>
          </div>
      </form>
</div>
@endsection
