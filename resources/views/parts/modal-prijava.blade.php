<div id="modal-{{ $id }}" class="fixed inset-0 flex items-center justify-center z-50 hidden px-4" style="background: rgba(0,0,0,0.5);">
    <div class="bg-white md:bg-transparent rounded-[32px] md:rounded-2xl overflow-hidden shadow-2xl md:shadow-none flex flex-col md:flex-row w-full max-w-[450px] md:max-w-[948px] relative">
  
      <!-- Close Button (Mobile Primary) -->
      <button onclick="closeModal('modal-{{ $id }}')" class="md:hidden absolute top-6 right-6 text-2xl text-black hover:text-gray-700 z-50">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
      </button>

      <!-- Left: Info (Desktop Only) -->
      <div class="hidden md:flex flex-col justify-center p-10 text-white" style="width: 430px; background: #194077; min-height: 500px;">
        <h2 class="font-black text-3xl uppercase mb-6" style="font-family: 'Jost', sans-serif;">{{ $title }}</h2>
        <div style="font-family: 'Montserrat', sans-serif; font-size: 14px;">
          {!! $description !!}
        </div>
      </div>
  
      <!-- Right: Content (Mobile Form) -->
      <div class="flex flex-col justify-center p-8 md:p-10 bg-white relative w-full md:w-[518px]">
  
        <!-- Desktop Close Button -->
        <button onclick="closeModal('modal-{{ $id }}')" class="hidden md:block absolute top-4 right-4 text-2xl text-gray-400 hover:text-gray-700">&times;</button>
  
        <!-- Mobile Header (Title + Description) -->
        <div class="md:hidden flex flex-col items-center text-center mb-8">
            <h2 class="text-[#194077] font-black text-2xl uppercase mb-4 text-center leading-tight" style="font-family: 'Jost', sans-serif;">{{ $title }}</h2>
            <div class="text-xs text-gray-600 leading-relaxed" style="font-family: 'Montserrat', sans-serif;">
                {!! $description_mobile ?? $description !!}
            </div>
        </div>

        <h3 class="hidden md:block font-black text-2xl text-center uppercase mb-6" style="font-family: 'Jost', sans-serif;">
            {{ __('modal.form_title') }}
        </h3>
  
        <form method="POST" action="{{ route('prijava.store', $id) }}" class="flex flex-col gap-4">
          @csrf
  
          <!-- Field Group: Name & Phone -->
          <div class="flex flex-col md:flex-row gap-4">
            <div class="flex-1">
              <label class="block text-xs font-bold mb-2 text-gray-700 md:text-gray-700" style="font-family: 'Montserrat', sans-serif;">
                {{ __('modal.name_label') }}
              </label>
              <input type="text" name="name" placeholder="{{ __('modal.name_placeholder') }}" required
                class="w-full px-5 py-3 md:py-2 rounded-2xl md:rounded-xl border text-sm outline-none transition-all"
                style="font-family: 'Montserrat', sans-serif; border-color: #e5e7eb; box-shadow: 0px 2px 4px rgba(0,0,0,0.02);"
                onfocus="this.style.borderColor='#194077'; this.style.boxShadow='0px 4px 6px rgba(0,0,0,0.05)'" 
                onblur="this.style.borderColor='#e5e7eb'; this.style.boxShadow='0px 2px 4px rgba(0,0,0,0.02)'">
            </div>
            <div class="flex-1">
              <label class="block text-xs font-bold mb-2 text-gray-700" style="font-family: 'Montserrat', sans-serif;">
                {{ __('modal.phone_label') }}
              </label>
              <input type="text" name="phone" placeholder="{{ __('modal.phone_placeholder') }}" required
                class="w-full px-5 py-3 md:py-2 rounded-2xl md:rounded-xl border text-sm outline-none transition-all"
                style="font-family: 'Montserrat', sans-serif; border-color: #e5e7eb; box-shadow: 0px 2px 4px rgba(0,0,0,0.02);"
                onfocus="this.style.borderColor='#194077'; this.style.boxShadow='0px 4px 6px rgba(0,0,0,0.05)'" 
                onblur="this.style.borderColor='#e5e7eb'; this.style.boxShadow='0px 2px 4px rgba(0,0,0,0.02)'">
            </div>
          </div>
  
          <!-- Field: Email -->
          <div>
            <label class="block text-xs font-bold mb-2 text-gray-700" style="font-family: 'Montserrat', sans-serif;">
                {{ __('modal.email_label') }}
            </label>
            <input type="email" name="email" placeholder="{{ __('modal.email_placeholder') }}" required
              class="w-full px-5 py-3 md:py-2 rounded-2xl md:rounded-xl border text-sm outline-none transition-all"
              style="font-family: 'Montserrat', sans-serif; border-color: #e5e7eb; box-shadow: 0px 2px 4px rgba(0,0,0,0.02);"
              onfocus="this.style.borderColor='#194077'; this.style.boxShadow='0px 4px 6px rgba(0,0,0,0.05)'" 
              onblur="this.style.borderColor='#e5e7eb'; this.style.boxShadow='0px 2px 4px rgba(0,0,0,0.02)'">
          </div>
  
          <!-- Field: Message -->
          <div>
            <label class="block text-xs font-bold mb-2 text-gray-700" style="font-family: 'Montserrat', sans-serif;">
                {{ __('modal.message_label') }}
            </label>
            <textarea name="message" placeholder="{{ __('modal.message_placeholder') }}" rows="4"
              class="w-full px-5 py-3 md:py-2 rounded-2xl md:rounded-xl border text-sm outline-none resize-none transition-all"
              style="font-family: 'Montserrat', sans-serif; border-color: #e5e7eb; box-shadow: 0px 2px 4px rgba(0,0,0,0.02);"
              onfocus="this.style.borderColor='#194077'; this.style.boxShadow='0px 4px 6px rgba(0,0,0,0.05)'" 
              onblur="this.style.borderColor='#e5e7eb'; this.style.boxShadow='0px 2px 4px rgba(0,0,0,0.02)'"></textarea>
          </div>
  
          <button type="submit" class="w-full py-4 md:py-3 text-white font-bold rounded-2xl md:rounded-xl shadow-lg transition-all duration-300 transform active:scale-[0.98]"
            style="background: #194077; font-family: 'Montserrat', sans-serif;"
            onmouseover="this.style.background='#0d2345'"
            onmouseout="this.style.background='#194077'">
            {{ __('modal.submit_btn') }}
          </button>
        </form>
      </div>
    </div>
  </div>