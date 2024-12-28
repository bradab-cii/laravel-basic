<x-app-layout>
 <nav class="flex items-center justify-between bg-slate-100 p-6">
  <ul class="flex gap-4">
   <li class="hover:underline"><a href="{{ route('home') }}">Home</a></li>
   <li class="hover:underline"><a href="{{ route('posts.index') }}">Post</a></li>
   <li class="hover:underline"><a href="{{ route('page', 'about-us') }}">About</a></li>
   <li class="hover:underline"><a href="{{ route('page', 'contact-us') }}">Contact</a></li>
  </ul>
  <div>
   @auth
    <div>
     <span>{{ auth()->user()->name }}</span>
     <span>{{ auth()->user()->email }}</span>
     <div>
      <a href="{{ route('user.profile') }}">
       <button class="hover:underline">Profile</button>
      </a>
      <form action="{{ route('logout') }}" method="post">
       @csrf
       @method('POST')
       <button type="submit" class="hover:underline">Logout</button>
      </form>
     </div>
    </div>
   @else
    <a href="{{ route('login.view') }}" class="hover:underline">Login</a>
    <a href="{{ route('register.view') }}" class="hover:underline">Register</a>
   @endauth
  </div>
 </nav>
 <h1 class="text-3xl">Hello</h1>
</x-app-layout>
