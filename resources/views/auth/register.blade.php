@extends('layouts.app')

@section('content')
    <style>
        body {
            height: 700px;
            background-size: cover;
            background-repeat:no-repeat;
            background-position: center center;
        }
        .m{
            width: 40%;
            height: auto;
        }
        .form {
            width: 300px;
            height: 300px;
            display: grid;
            place-content: center;

            background: rgba(255, 255, 255, 0.1);

            box-shadow: 0 26px 42px rgba(0, 0, 0, 0.1);
        }

    </style>
    <div  style="background: rgba(255, 255, 255, 0.6)"
          class="block mx-auto my-7 p-4  w-1/3 border border-gray-200
    round-lg shadow-lg" >
        <h1 class="text-5xl text-center pt-7">REGISTRO</h1>
        <div class="ima" >
            <img class="m offset-3" src=" https://cdn-icons-png.flaticon.com/512/3534/3534139.png">
        </div>

        <form class="mt-2" method="POST" action="">
            @csrf

            <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Name" id="name" name="name">

            @error('name')

            <p class="border border-red-500 rounded-md bg-red-100 w-full
            text-red-600 p-2 my-2">* {{$message}}</p>
            @enderror

            <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Email" id="email" name="email">

            @error('email')

            <p class="border border-red-500 rounded-md bg-red-100 w-full
            text-red-600 p-2 my-2">* {{$message}}</p>
            @enderror


            <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Password" id="password" name="password">

            @error('password')

            <p class="border border-red-500 rounded-md bg-red-100 w-full
            text-red-600 p-2 my-2">* {{$message}}</p>
            @enderror
            <input type="password_confirmation" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Password_confirmation" id="password_confirmation" name="password_confirmation">



            <button type="submit" class="rounded-md bg-indigo-500 w-full text-lg
            text-white font-semibold p-2 my-3 hover:bg-indigo-600">Registrar</button>
        </form>
    </div>
@endsection
