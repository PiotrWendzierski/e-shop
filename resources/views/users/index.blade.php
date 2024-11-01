@extends('layouts.app')

@section('content')
<div class="container">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">EMAIL</th>
      <th scope="col">FIRST NAME</th>
      <th scope="col">LAST NAME</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th scope="row">{{ $user->id}}</th>
      <td>{{ $user->email}}</td>
      <td>{{ $user->name}}</td>
      <td>-</td>
      <td></td>
      <td></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection