<x-app-layout>
 <h1 class="mb-4 text-3xl font-medium">Register</h1>
 <form action="{{ route('register.store') }}" method="POST" class="max-w-64 p-4">
  @method('POST')
  @csrf
  <div class="mb-2 w-full">
   <label for="name">Name</label>
   <input type="text" name="name" id="name" value="{{ old('name') }}" class="w-full rounded border p-2"
    autocomplete="new-name">
   <div class="block text-sm text-red-500">{{ $errors->first('name') }}</div>
  </div>
  <div class="mb-2 w-full">
   <label for="email">Email</label>
   <input type="email" name="email" id="email" value="{{ old('email') }}" class="w-full rounded border p-2"
    autocomplete="new-email">
   <div class="block text-sm text-red-500">{{ $errors->first('email') }}</div>
  </div>
  <div class="mb-2 w-full">
   <label for="password">Password</label>
   <input type="password" name="password" id="password" class="w-full rounded border p-2" autocomplete="new-password">
   <div class="block text-sm text-red-500">{{ $errors->first('password') }}</div>
  </div>
  <div class="mb-2 w-full">
   <label for="password_confirmation">Confirm Password</label>
   <input type="password" name="password_confirmation" id="password_confirmation" class="w-full rounded border p-2"
    autocomplete="new-password">
   <div class="block text-sm text-red-500">{{ $errors->first('password_confirmation') }}</div>
  </div>
  <div>
   <button type="submit" class="rounded border bg-blue-500 p-2 text-white">Register</button>
  </div>
 </form>
</x-app-layout>
