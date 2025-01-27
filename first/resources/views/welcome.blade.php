<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>first page</title>
    </head>
    <body class="antialiased">
        <h1>first page</h1>

        <a href="/post">post click</a>
        <a href="{{route ('about')}}">click</a>
        {{4+6}} <br>
        {{"hello txt"}} <br>
        {!!"hello"!!}

        {{-- {!!"<script>alert('hello')</script>"!!} --}}
        @php
            $data = ["name","age","category","add"];

        @endphp
        @foreach ($data as $dt)
            <li>{{$dt}}</li>
        @endforeach
        <br>

@php
$fruits = ["one"=> "apple", "two"=>"banana", "three"=>"grapes"]
@endphp

        @include('first-post', ['name'=>$fruits])
        {{-- {{$user}} --}}
    </body>
</html>
