@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white rounded-lg p-6">
            @if(session('status'))
                <div class=" bg-red-500 p-4 block rounded-lg mb-6 text-white text-center">
                    {{session('status')}}
                </div>
            @endif

            <form action="{{route('login')}}" method="post">
                @csrf

                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" placeholder="Email"
                           class="bg-gray-100 rounded-lg w-full border-2 p-4 @error('email') border-red-500  @enderror" value="{{old('email')}}">

                    @error('email')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Password"
                           class="w-full rounded-lg border-2 bg-gray-100 p-4 @error('password') border-red-500 @enderror">

                    @error('password')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                 <div class="mb-4">
                     <div class="flex items-center">
                         <input class="mr-2" type="checkbox" name="remember" id="remember">
                         <label for="remember">Remember me</label>
                     </div>
                 </div>
                <div>
                    <button type="submit" class="bg-gray-500 text-white px-4 py-3 rounded font-medium w-full">Login</button>
                    <a class="text-center text-blue-500 pt-5 block" href="{{route('register')}}">I don't have an account!</a>
                </div>
            </form>
        </div>

    </div>
@endsection
