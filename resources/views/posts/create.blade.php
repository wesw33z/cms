@extends('layouts.app')

@section('content')

    <form method="post" action="/posts">
        {{csrf_field()}}
        <input type="text" name="title" placeholder="Enter Title">
        <input type="submit" name="submit">
        
    </form>



@yield('footer')