<div id="modal-{{ $id }}" class="fixed inset-0 flex items-center justify-center z-50 hidden" style="background: rgba(0,0,0,0.5);">
    <div class="flex rounded-2xl overflow-hidden" style="width: 948px; height: 500px;">
  
      <!-- Left: Info -->
      <div class="flex flex-col justify-center p-10 text-white" style="width: 430px; background: #194077;">
        <h2 class="font-black text-3xl uppercase mb-6" style="font-family: 'Jost', sans-serif;">{{ $title }}</h2>
        <div style="font-family: 'Montserrat', sans-serif; font-size: 14px;">
          {!! $description !!}
        </div>
      </div>
  
      <!-- Right: Form -->
      <div class="flex flex-col justify-center p-10 bg-white relative" style="width: 518px;">
  
        <button onclick="closeModal('modal-{{ $id }}')" class="absolute top-4 right-4 text-2xl text-gray-400 hover:text-gray-700">&times;</button>
  
        <h3 class="font-black text-2xl text-center uppercase mb-6" style="font-family: 'Jost', sans-serif;">ФОРМА ЗА ПРИЈАВУВАЊЕ</h3>
  
        
  
        <form method="POST" action="{{ route('prijava.store', $id) }}">
          @csrf
  
          <div class="flex gap-4 mb-4">
            <div class="flex-1">
              <label class="block text-xs font-bold mb-1 text-gray-700" style="font-family: 'Montserrat', sans-serif;">Вашето име и презиме</label>
              <input type="text" name="name" placeholder="пр.Маја Иванова" required
                class="w-full px-4 py-2 rounded-xl border text-sm outline-none"
                style="font-family: 'Montserrat', sans-serif; border-color: #e5e7eb;"
                onfocus="this.style.borderColor='#194077'" onblur="this.style.borderColor='#e5e7eb'">
            </div>
            <div class="flex-1">
              <label class="block text-xs font-bold mb-1 text-gray-700" style="font-family: 'Montserrat', sans-serif;">Вашиот телефонски број</label>
              <input type="text" name="phone" placeholder="пр.07* *** ***" required
                class="w-full px-4 py-2 rounded-xl border text-sm outline-none"
                style="font-family: 'Montserrat', sans-serif; border-color: #e5e7eb;"
                onfocus="this.style.borderColor='#194077'" onblur="this.style.borderColor='#e5e7eb'">
            </div>
          </div>
  
          <div class="mb-4">
            <label class="block text-xs font-bold mb-1 text-gray-700" style="font-family: 'Montserrat', sans-serif;">Вашата е-меил адреса</label>
            <input type="email" name="email" placeholder="пр. majaivanova@gmail.com" required
              class="w-full px-4 py-2 rounded-xl border text-sm outline-none"
              style="font-family: 'Montserrat', sans-serif; border-color: #e5e7eb;"
              onfocus="this.style.borderColor='#194077'" onblur="this.style.borderColor='#e5e7eb'">
          </div>
  
          <div class="mb-6">
            <label class="block text-xs font-bold mb-1 text-gray-700" style="font-family: 'Montserrat', sans-serif;">Порака</label>
            <textarea name="message" placeholder='пр. "Сакам да се пријавам за активно и пасивно."' rows="3"
              class="w-full px-4 py-2 rounded-xl border text-sm outline-none resize-none"
              style="font-family: 'Montserrat', sans-serif; border-color: #e5e7eb;"
              onfocus="this.style.borderColor='#194077'" onblur="this.style.borderColor='#e5e7eb'"></textarea>
          </div>
  
          <button type="submit" class="w-full py-3 text-white font-bold rounded-xl transition-all duration-200"
            style="background: linear-gradient(90deg, #194077, #194077); font-family: 'Montserrat', sans-serif;"
            onmouseover="this.style.background='linear-gradient(90deg, #194077, #020C1B)'"
            onmouseout="this.style.background='linear-gradient(90deg, #194077, #194077)'">
            Пријави се
          </button>
        </form>
      </div>
    </div>
  </div>