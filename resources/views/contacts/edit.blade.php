@extends('contacts.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('contact/' .$contacts->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$contacts->id}}" id="id" />
        <label>FirsName</label></br>
        <input type="text" name="firstname" id="firstname" value="{{$contacts->firstname}}" class="form-control"></br>
        <label>LastName</label></br>
        <input type="text" name="lastname" id="lastname" value="{{$contacts->lastname}}" class="form-control"></br>
        <label>Date_of_birth</label></br>
        <input type="date" name="Dateofbirth" id="Dateofbirth" value="{{$contacts->Dateofbirth}}" class="form-control"></br>
        <label>UserName</label></br>
        <input type="text" name="username" id="username" value="{{$contacts->username}}" class="form-control"></br>
        <label>Password</label></br>
        <input type="password" name="password" id="password" value="{{$contacts->password}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$contacts->email}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
@endsection