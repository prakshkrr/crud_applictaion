@extends('contacts.layout')
@section('content')


    <div class="card">
        <div class="card-header">Detail Page</div>
        <div class="card-body">


            <div class="card-body">
                <h6 class="card-title">FirstName : {{ $contacts->firstname }}</h6>
                <p class="card-text">LastName : {{ $contacts->lastname }}</p>
                <p class="card-text">Dateofbirth : {{ $contacts->Dateofbirth }}</p>
                <p class="card-text">Username : {{ $contacts->username }}</p>
                <p class="card-text">Password : {{ $contacts->password }}</p>
                <p class="card-text">Email : {{ $contacts->email }}</p>

            </div>


        </div>
    </div>
@endsection