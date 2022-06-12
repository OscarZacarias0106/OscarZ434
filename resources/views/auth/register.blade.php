@extends('layouts.app')

@section('content')
    <style>
        body {
            height: 700px;
            background-image: url("https://p4.wallpaperbetter.com/wallpaper/40/461/105/video-game-love-money-rock-n-roll-original-anime-school-wallpaper-preview.jpg");
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

            /* Add a transparency to the background
               using rgba value */
            background: rgba(255, 255, 255, 0.1);

            /* Add a transparency to shadow */
            box-shadow: 0 26px 42px rgba(0, 0, 0, 0.1);
        }

    </style>
    <div  style="background: rgba(255, 255, 255, 0.6)"
          class="block mx-auto my-7 p-4  w-1/3 border border-gray-200
    round-lg shadow-lg" >
        <h1 class="text-5xl text-center pt-7">REGISTRO</h1>
        <div class="ima" >
            <img class="m offset-3" src=" https://sat02pap001files.storage.live.com/y4m9YQNFz3Bw23yN7jaX4SVGvKnWX6B656RnehoyWQOdmeOXvxZGe4UY1E4cIjF4WVjOjcoai1MQMIoCBgh6nujA_-fRavx3C9WPrbGM5S9bNrmCMPVKB08d2qcR0S_eP-xz9OD8252cr6lEjr0aRbRbrxS5y_P5-G1sNh2BVJ3_z6oqbPrdBIZUhiwO4A_KVrj?width=1018&height=832&cropmode=none">
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
