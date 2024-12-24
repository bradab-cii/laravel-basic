<x-app-layout>
 <nav class="flex items-center justify-between bg-slate-100 p-6">
  <ul class="flex gap-4">
   <li class="hover:underline"><a href="{{ route('home') }}">Home</a></li>
   <li class="hover:underline"><a href="{{ route('posts.index') }}">Post</a></li>
   <li class="hover:underline"><a href="{{ route('page', 'about-us') }}">About</a></li>
   <li class="hover:underline"><a href="{{ route('page', 'contact-us') }}">Contact</a></li>
  </ul>
  <a href="{{ route('login.view') }}" class="hover:underline">Login</a>
 </nav>
 <h1 class="text-3xl">Hello</h1>
</x-app-layout>
