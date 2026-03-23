<div id="modal-testimonial" class="fixed inset-0 flex items-center justify-center z-50 hidden" style="background: rgba(0,0,0,0.5);">
    <div class="bg-white rounded-2xl relative" style="width: 430px; padding: 30px 56px 30px 56px;">
  
      <!-- Close button -->
      <button onclick="closeModal('modal-testimonial')" class="absolute top-4 right-4 text-2xl text-gray-400 hover:text-gray-700">&times;</button>
  
      <!-- Title -->
      <h3 class="font-black text-2xl text-center uppercase mb-2" style="font-family: 'Jost', sans-serif;">СПОДЕЛИ ГО ТВОЕТО ИСКУСТВО</h3>
      <p class="text-center text-sm text-gray-500 mb-6" style="font-family: 'Montserrat', sans-serif;">
        Кажи ни за твоето искуство. Секоја повратна информација ни помага во нашето растење и подобрување.
      </p>
  
      @if(session('testimonial_success'))
        <div class="mb-4 px-4 py-3 rounded-xl text-sm text-green-700" style="background: #d1fae5; font-family: 'Montserrat', sans-serif;">
          {{ session('testimonial_success') }}
        </div>
      @endif
  
      <form method="POST" action="{{ route('testimonial.store') }}">
        @csrf
  
        <!-- Name -->
        <div class="mb-4">
          <label class="block text-xs font-bold mb-1 text-gray-700" style="font-family: 'Montserrat', sans-serif;">Вашето име и презиме</label>
          <input type="text" name="name" placeholder="пр.Маја Иванова" required
            class="w-full px-4 py-2 rounded-xl border text-sm outline-none"
            style="font-family: 'Montserrat', sans-serif; border-color: #e5e7eb;"
            onfocus="this.style.borderColor='#194077'" onblur="this.style.borderColor='#e5e7eb'">
        </div>
  
        <!-- Role -->
        <div class="mb-4">
          <label class="block text-xs font-bold mb-1 text-gray-700" style="font-family: 'Montserrat', sans-serif;">Твојата улога</label>
          <input type="text" name="role" placeholder="пр.Студент" required
            class="w-full px-4 py-2 rounded-xl border text-sm outline-none"
            style="font-family: 'Montserrat', sans-serif; border-color: #e5e7eb;"
            onfocus="this.style.borderColor='#194077'" onblur="this.style.borderColor='#e5e7eb'">
        </div>
  
        <!-- Rating -->
        <div class="mb-4">
          <label class="block text-xs font-bold mb-2 text-gray-700" style="font-family: 'Montserrat', sans-serif;">Рејтинг</label>
          <div class="flex gap-2" id="star-rating">
            @for($i = 1; $i <= 5; $i++)
              <span class="cursor-pointer text-3xl star" data-value="{{ $i }}" style="color: #FBBF24;">★</span>
            @endfor
          </div>
          <input type="hidden" name="rating" id="rating-value" value="5">
        </div>
  
        <!-- Message -->
        <div class="mb-6">
          <label class="block text-xs font-bold mb-1 text-gray-700" style="font-family: 'Montserrat', sans-serif;">Твоето искуство</label>
          <textarea name="message" placeholder="Сподели ги твоето искуство тука." rows="4" required
            class="w-full px-4 py-2 rounded-xl border text-sm outline-none resize-none"
            style="font-family: 'Montserrat', sans-serif; border-color: #e5e7eb;"
            onfocus="this.style.borderColor='#194077'" onblur="this.style.borderColor='#e5e7eb'"></textarea>
        </div>
  
        <!-- Submit -->
        <button type="submit" class="w-full py-3 text-white font-bold rounded-xl transition-all duration-200"
          style="background: linear-gradient(90deg, #194077, #194077); font-family: 'Montserrat', sans-serif;"
          onmouseover="this.style.background='linear-gradient(90deg, #194077, #020C1B)'"
          onmouseout="this.style.background='linear-gradient(90deg, #194077, #194077)'">
          Испрати одговор
        </button>
      </form>
    </div>
  </div>
  
  <script>
    const stars = document.querySelectorAll('.star');
    stars.forEach(star => {
      star.addEventListener('click', () => {
        const value = star.getAttribute('data-value');
        document.getElementById('rating-value').value = value;
        stars.forEach(s => {
          s.style.color = s.getAttribute('data-value') <= value ? '#FBBF24' : '#d1d5db';
        });
      });
      star.addEventListener('mouseover', () => {
        const value = star.getAttribute('data-value');
        stars.forEach(s => {
          s.style.color = s.getAttribute('data-value') <= value ? '#FBBF24' : '#d1d5db';
        });
      });
      star.addEventListener('mouseout', () => {
        const value = document.getElementById('rating-value').value;
        stars.forEach(s => {
          s.style.color = s.getAttribute('data-value') <= value ? '#FBBF24' : '#d1d5db';
        });
      });
    });
  </script>