<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <title>Laravel</title>

 <!-- Fonts -->
 <link rel="preconnect" href="https://fonts.bunny.net">
 <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

 <!-- Styles / Scripts -->
 @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans antialiased">
 <nav class="flex items-center justify-between bg-slate-100 p-6">
  <ul class="flex gap-4">
   <li class="hover:underline"><a href="{{ route('home') }}">Home</a></li>
   <li class="hover:underline"><a href="{{ route('posts.index') }}">Post</a></li>
   <li class="hover:underline"><a href="{{ route('page', 'about-us') }}">About</a></li>
   <li class="hover:underline"><a href="{{ route('page', 'contact-us') }}">Contact</a></li>
  </ul>
  <a href="{{ route('login') }}" class="hover:underline">Login</a>
 </nav>
 <h1 class="text-3xl">Hello</h1>
</body>

</html>
