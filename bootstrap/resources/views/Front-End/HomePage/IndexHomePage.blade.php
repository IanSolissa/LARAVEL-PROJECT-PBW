@extends('Front-End.HomePage.layouts.MainHomePage')

@section('content-HomePage')
@if($user->count()>0)
@foreach($user as $users)
<div class="container" style="
width:100%;
height:100vh;
">
    <div class="wrapper" style="
    display:flex;
    justify-content:center;
    align-items:center;
    ">
        <h1>Welcome Back,{{ $users->name }}</h1>
    </div>
</div>
@endforeach
@else
<div class="container" style="
width:100%;
height:100vh;
">
    <div class="wrapper" style="
    display:flex;
    justify-content:center;
    align-items:center;
    ">
        <h1>connect database di file .env</h1>
        <h1>jalanin commad ini di terminal</h1>
        <h1>php artisan migrate:fresh --seed</h1>
        <h1>refresh web</h1>
    </div>
</div>

@endif
@endsection