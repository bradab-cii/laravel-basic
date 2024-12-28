<x-app-layout>
 <div class="p-4">
  <h1>Profile</h1>
  <table class="table-bordered mb-4 table border">
   <tr>
    <td class="border p-2">Name</td>
    <td class="border p-2">{{ $user->name }}</td>
   </tr>
   <tr>
    <td class="border p-2">Email</td>
    <td class="border p-2">{{ $user->email }}</td>
   </tr>
  </table>
  <form action="{{ route('user.profile.update') }}" class="mb-4 max-w-2xl border p-4" method="POST">
   @method('PATCH')
   @csrf
   <div class="mb-2 w-full">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{ $user->name }}" class="w-full rounded border p-2"
     autocomplete="new-name">
    <div class="block text-sm text-red-500">{{ $errors->first('name') }}</div>
   </div>
   <div class="mb-2 w-full">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="{{ $user->email }}" class="w-full rounded border p-2"
     autocomplete="new-email">
    <div class="block text-sm text-red-500">{{ $errors->first('email') }}</div>
   </div>
   <div>
    <button type="submit" class="rounded border bg-blue-500 p-2 text-white">Update Profile</button>
   </div>
  </form>

  <form action="{{ route('user.profile.password') }}" class="mb-4 max-w-2xl border p-4" method="POST">
   @method('PATCH')
   @csrf
   <div class="mb-2 w-full">
    <label for="password">Password</label>
    <input type="password" name="password" id="password" class="w-full rounded border p-2" autocomplete="new-password">
    <div class="block text-sm text-red-500">{{ $errors->first('password') }}</div>
   </div>
   <div class="mb-2 w-full">
    <label for="password_confirmation">Password Confirmation</label>
    <input type="password" name="password_confirmation" id="password_confirmation" class="w-full rounded border p-2"
     autocomplete="new-password">
    <div class="block text-sm text-red-500">{{ $errors->first('password_confirmation') }}</div>
   </div>
   <div>
    <button type="submit" class="rounded border bg-blue-500 p-2 text-white">Update Password</button>
   </div>
  </form>

  <form action="{{ route('user.profile.destroy') }}" class="mb-4 max-w-2xl border p-4" method="POST">
   @method('DELETE')
   @csrf
   <div>
    <button type="button" class="rounded border bg-red-500 p-2 text-white"
     onclick="if (confirm('Are you sure you want to delete your account?')) {
				this.closest('form').submit();
			}">
     Delete Account</button>
   </div>
  </form>
 </div>

</x-app-layout>
