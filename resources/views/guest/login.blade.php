<div>
 <h1>Login</h1>
 <form action="#" class="max-w-xl">
  @method('POST')
  @csrf
  <div class="w-full">
   <label for="email">Email</label>
   <input type="email" name="email" id="email" value="{{ old('email') }}" class="w-full">
  </div>
  <div class="w-full">
   <label for="password">Password</label>
   <input type="password" name="password" id="password" class="w-full">
  </div>
 </form>
</div>
