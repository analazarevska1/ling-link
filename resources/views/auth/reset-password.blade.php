@extends('parts.main')

@section('content')
<section class="min-h-screen flex items-center justify-center py-16" style="background: #f0f9ff;">
  <div class="bg-white rounded-3xl shadow-lg p-12" style="width: 480px;">

    <!-- Logo -->
    <div class="flex justify-center mb-8">
      <img src="{{ asset('images/logo.png') }}" alt="LinguaLink" style="width: 160px;">
    </div>

    <h1 class="font-black text-3xl uppercase text-center mb-2" style="font-family: 'Jost', sans-serif;">
      {{ __('auth.reset_title') }}
    </h1>
    <p class="text-center text-gray-500 text-sm mb-8" style="font-family: 'Montserrat', sans-serif;">
      {{ __('auth.reset_subtitle') }}
    </p>

    <form method="POST" action="{{ route('password.store') }}">
      @csrf
      <input type="hidden" name="token" value="{{ $request->route('token') }}">

      <!-- Email -->
      <div class="mb-5">
        <label class="block text-sm font-bold mb-2 text-gray-700" style="font-family: 'Montserrat', sans-serif;">
          {{ __('auth.email') }}
        </label>
        <input type="email" name="email" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username"
          class="w-full px-4 py-3 rounded-xl border text-sm outline-none transition-all duration-200"
          style="font-family: 'Montserrat', sans-serif; border-color: #e5e7eb;"
          onfocus="this.style.borderColor='#194077'"
          onblur="this.style.borderColor='#e5e7eb'">
        @error('email')
          <p class="text-red-500 text-xs mt-1" style="font-family: 'Montserrat', sans-serif;">{{ $message }}</p>
        @enderror
      </div>

      <!-- Password -->
      <div class="mb-5">
        <label class="block text-sm font-bold mb-2 text-gray-700" style="font-family: 'Montserrat', sans-serif;">
          {{ __('auth.password') }}
        </label>
        <input type="password" name="password" required autocomplete="new-password"
          class="w-full px-4 py-3 rounded-xl border text-sm outline-none transition-all duration-200"
          style="font-family: 'Montserrat', sans-serif; border-color: #e5e7eb;"
          onfocus="this.style.borderColor='#194077'"
          onblur="this.style.borderColor='#e5e7eb'"
          placeholder="••••••••">
        @error('password')
          <p class="text-red-500 text-xs mt-1" style="font-family: 'Montserrat', sans-serif;">{{ $message }}</p>
        @enderror
      </div>

      <!-- Confirm Password -->
      <div class="mb-8">
        <label class="block text-sm font-bold mb-2 text-gray-700" style="font-family: 'Montserrat', sans-serif;">
          {{ __('auth.confirm_password') }}
        </label>
        <input type="password" name="password_confirmation" required autocomplete="new-password"
          class="w-full px-4 py-3 rounded-xl border text-sm outline-none transition-all duration-200"
          style="font-family: 'Montserrat', sans-serif; border-color: #e5e7eb;"
          onfocus="this.style.borderColor='#194077'"
          onblur="this.style.borderColor='#e5e7eb'"
          placeholder="••••••••">
        @error('password_confirmation')
          <p class="text-red-500 text-xs mt-1" style="font-family: 'Montserrat', sans-serif;">{{ $message }}</p>
        @enderror
      </div>

      <button type="submit" class="w-full py-3 text-white font-bold rounded-xl transition-all duration-200"
        style="background: #194077; font-family: 'Montserrat', sans-serif;"
        onmouseover="this.style.background='linear-gradient(to right, #2a6db5, #0d1f3c)'"
        onmouseout="this.style.background='#194077'">
        {{ __('auth.reset_btn') }}
      </button>
    </form>

  </div>
</section>
@endsection