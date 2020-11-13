<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
<div class="flex flex-col">
  

    <div class="min-h-screen flex items-center justify-center">
        <div class="flex flex-col justify-between h-full">
            <div class="flex">
                
                    <img 
                        src="/images/logo.png" 
                        alt="tweety" 
                        width="300"
                        class="flex-1 rounded-full border border-blue-400"
                    >
                        
                
                </div>
                <div class="flex justify-center mb-15 my-6">
                    @auth
                        <a href="{{ url('/tweets') }}" >Home</a>
                    @else
                        <a href="{{ route('login') }}" class="no-underline ml-4 hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Login') }}</a>
                        
                            <a href="{{ route('register') }}" class="no-underline mx-2 hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Register') }}</a>                        
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
