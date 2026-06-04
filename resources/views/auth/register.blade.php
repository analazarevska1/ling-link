@extends('parts.main')

@section('content')
<section class="min-h-screen flex items-center justify-center py-16" style="background: #f0f9ff;">
  <div class="bg-white rounded-3xl shadow-lg p-12" style="width: 480px;">

    <!-- Logo -->
    <div class="flex justify-center mb-8">
      <img src="{{ asset('images/logo.png') }}" alt="LinguaLink" style="width: 160px;">
    </div>

    <!-- Title -->
    <h1 class="font-black text-3xl uppercase text-center mb-2" style="font-family: 'Jost', sans-serif;">
      {{ __('auth.register_title') }}
    </h1>
    <p class="text-center text-gray-500 text-sm mb-8" style="font-family: 'Montserrat', sans-serif;">
      {{ __('auth.register_subtitle') }}
    </p>

    <!-- Form -->
    <form method="POST" action="{{ route('register') }}">
      @csrf

      <!-- Name -->
      <div class="mb-5">
        <label class="block text-sm font-bold mb-2 text-gray-700" style="font-family: 'Montserrat', sans-serif;">
          {{ __('auth.name') }}
        </label>
        <input type="text" name="name" value="{{ old('name') }}" required autofocus
          class="w-full px-4 py-3 rounded-xl border text-sm outline-none transition-all duration-200"
          style="font-family: 'Montserrat', sans-serif; border-color: #e5e7eb;"
          onfocus="this.style.borderColor='#194077'"
          onblur="this.style.borderColor='#e5e7eb'"
          placeholder="Марија Петковска">
        @error('name')
          <p class="text-red-500 text-xs mt-1" style="font-family: 'Montserrat', sans-serif;">{{ $message }}</p>
        @enderror
      </div>

      <!-- Email -->
      <div class="mb-5">
        <label class="block text-sm font-bold mb-2 text-gray-700" style="font-family: 'Montserrat', sans-serif;">
          {{ __('auth.email') }}
        </label>
        <input type="email" name="email" value="{{ old('email') }}" required
          class="w-full px-4 py-3 rounded-xl border text-sm outline-none transition-all duration-200"
          style="font-family: 'Montserrat', sans-serif; border-color: #e5e7eb;"
          onfocus="this.style.borderColor='#194077'"
          onblur="this.style.borderColor='#e5e7eb'"
          placeholder="ime@email.com">
        @error('email')
          <p class="text-red-500 text-xs mt-1" style="font-family: 'Montserrat', sans-serif;">{{ $message }}</p>
        @enderror
      </div>

      <!-- Password -->
      <div class="mb-5">
        <label class="block text-sm font-bold mb-2 text-gray-700" style="font-family: 'Montserrat', sans-serif;">
          {{ __('auth.password') }}
        </label>
        <input type="password" name="password" required
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
        <input type="password" name="password_confirmation" required
          class="w-full px-4 py-3 rounded-xl border text-sm outline-none transition-all duration-200"
          style="font-family: 'Montserrat', sans-serif; border-color: #e5e7eb;"
          onfocus="this.style.borderColor='#194077'"
          onblur="this.style.borderColor='#e5e7eb'"
          placeholder="••••••••">
      </div>

      <!-- Submit -->
      <button type="submit" class="w-full py-3 text-white font-bold rounded-xl transition-all duration-200"
        style="background: linear-gradient(to right, #194077, #194077); font-family: 'Montserrat', sans-serif;"
        onmouseover="this.style.background='linear-gradient(to right, #2a6db5, #0d1f3c)'"
        onmouseout="this.style.background='linear-gradient(to right, #194077, #194077)'">
        {{ __('auth.register_btn') }}
      </button>
    </form>

    <!-- Login link -->
    <p class="text-center text-sm text-gray-500 mt-6" style="font-family: 'Montserrat', sans-serif;">
      {{ __('auth.have_account') }}
      <a href="{{ route('login') }}" class="font-bold underline" style="color: #194077;">{{ __('auth.login_link') }}</a>
    </p>

  </div>
</section>
@endsection