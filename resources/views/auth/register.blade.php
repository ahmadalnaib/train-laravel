@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white rounded-lg p-6">
            <form action="{{route('register')}}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name"
                           class="bg-gray-100 rounded-lg w-full border-2 p-4 @error('name') border-red-500 @enderror" placeholder="Name" value="{{old('name')}}">
                    @error('name')
                    <div class="text-red-500 mt-2 text-sm">{{$message}}</div>
                    @enderror
                </div>
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
                    <label for="password_confirmation" class="sr-only">Password again</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                    placeholder="Password again" class="bg-gray-100 rounded-lg w-full p-4 border-2">
                </div>
                <div>
                    <button type="submit" class="bg-gray-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
                </div>
            </form>
        </div>

    </div>
@endsection
