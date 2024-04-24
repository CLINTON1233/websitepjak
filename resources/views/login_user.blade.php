@extends('layouts.loginuser')

@section('title', 'loginuser')

@section('content')

<body class="bg-gray-200">
    <div class="mx-auto w-full h-full bg-white flex justify-content align-items">
        <div class="w-3/4">
            <img src="{{ asset('images/Picture2.jpg') }}" alt="" class="">
        </div>
        <div class="w-1/2">
            <h2 class="text-center text-2xl font-semibold mb-6">Silahkan Login Terlebih Dahulu</h2>

            <form>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email address:</label>
                    <input type="email" id="email" name="email" required class="w-full p-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-300">
                </div>
                <div class="mb-4">
                    <label for="pwd" class="block text-gray-700 font-bold mb-2">Password:</label>
                    <input type="password" id="pwd" name="pwd" required class="w-full p-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-300">
                </div>
                <div class="flex items-center mb-4">
                    <input type="checkbox" id="remember" name="remember" class="mr-2">
                    <label for="remember" class="text-gray-700">Remember me</label>
                </div>
                <a href="#" class="block text-center text-blue-700 mb-4">Forgot password?</a>
                <button type="submit" class="w-full py-2 px-4 bg-green-700 text-white rounded-md hover:bg-blue-800">Sign In</button>
                <a href="#" class="block text-center text-black-700 mb-4 mt-2">OR</a>
                <button type="submit" href="http://127.0.0.1:8000/register" class="w-full py-2 px-4 bg-blue-700 text-white rounded-md hover:bg-blue-800"> <a href="http://127.0.0.1:8000/register" class="text--700 mr-4">Register</a></button>
            </form>

            <div class="mt-6 flex justify-center">

                <span class="text-gray-500 mr-2">|</span>
                <a href="#" class="text-blue-700 ml-4">Login as admin</a>
                <span class="text-gray-500 mx-2">|</span>
                <a href="#" class="text-blue-700">Login as konsultan</a>
            </div>
        </div>
</body>


@endsection