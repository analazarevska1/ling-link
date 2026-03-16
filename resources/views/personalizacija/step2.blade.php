@extends('parts.main')
@section('content')
<section class="min-h-screen flex flex-col items-center justify-center py-16" style="background: #f5f5f5;">

  <!-- Progress -->
  <div class="flex gap-3 mb-12">
    <div class="h-2 rounded-full" style="width: 60px; background: #194077;"></div>
    <div class="h-2 rounded-full" style="width: 60px; background: #194077;"></div>
    <div class="h-2 rounded-full" style="width: 60px; background: #d1d5db;"></div>
    <div class="h-2 rounded-full" style="width: 60px; background: #d1d5db;"></div>
  </div>

  <h1 class="font-black text-4xl uppercase text-center leading-tight mb-12" style="font-family: 'Jost', sans-serif;">
    КОЈА Е <span style="font-weight: 500; font-style: italic;">ТВОЈАТА</span> <span style="color: #194077;">ВОЗРАСТ</span>?
  </h1>

  <form method="POST" action="{{ route('personalizacija.save2') }}" class="w-full" style="max-width: 500px;">
    @csrf
    <div class="flex flex-col gap-4">
      @foreach(['До 12 години', '13-17 години', '18-25 години', '26-35 години', '40+ години'] as $age)
        <label class="flex items-center justify-between px-6 py-4 bg-white rounded-2xl cursor-pointer transition-all duration-200 option-card"
          style="box-shadow: 0px 0px 7px rgba(0,0,0,0.08);">
          <span class="font-bold text-base" style="font-family: 'Montserrat', sans-serif;">{{ $age }}</span>
          <input type="radio" name="age_group" value="{{ $age }}" class="hidden" onchange="this.closest('form').submit()">
          <div class="w-6 h-6 rounded-full border-2 flex items-center justify-center radio-circle" style="border-color: #d1d5db;">
            <div class="w-3 h-3 rounded-full hidden radio-dot" style="background: white;"></div>
          </div>
        </label>
      @endforeach
    </div>
    @error('age_group')
      <p class="text-red-500 text-sm mt-4 text-center" style="font-family: 'Montserrat', sans-serif;">{{ $message }}</p>
    @enderror
  </form>
</section>

<style>
  .option-card:has(input:checked) { background: #194077 !important; }
  .option-card:has(input:checked) span { color: white; }
  .option-card:has(input:checked) .radio-circle { border-color: white !important; }
  .option-card:has(input:checked) .radio-dot { display: block !important; }
</style>
@endsection