{{-- EXAM REGISTRATION MODAL --}}
<div
    x-data="{
        open: false,
        dateId: null,
        dateLabel: null,
        submitted: false,
        init() {
            window.addEventListener('open-exam-modal', (e) => {
                this.dateId = e.detail.dateId;
                this.dateLabel = e.detail.dateLabel;
                this.submitted = false;
                this.open = true;
            });
        }
    }"
    x-show="open"
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    @keydown.escape.window="open = false"
    class="fixed inset-0 z-50 flex items-center justify-center px-4"
    style="display: none;">

    {{-- Backdrop --}}
    <div class="absolute inset-0 bg-black/50 backdrop-blur-sm" @click="open = false"></div>

    {{-- Modal Box --}}
    <div
        x-show="open"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="relative bg-white rounded-2xl shadow-2xl w-full max-w-lg z-10"
        style="padding: 48px 40px 40px;">

        {{-- Close Button --}}
        <button @click="open = false"
            class="absolute top-5 right-5 text-gray-400 hover:text-gray-700 transition text-xl font-light leading-none">
            ✕
        </button>

        {{-- Success State --}}
        <div x-show="submitted" class="flex flex-col items-center justify-center py-8 text-center gap-4">
            <div class="w-16 h-16 rounded-full bg-green-100 flex items-center justify-center">
                <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                </svg>
            </div>
            <h3 class="font-black text-2xl uppercase text-[#194077] text-center" style="font-family: 'Montserrat', sans-serif;">
                {{ __('exams.modal_success_title') }}
            </h3>
            <p class="text-gray-500 text-sm text-center" style="font-family: 'Montserrat', sans-serif;">
                {{ __('exams.modal_success_sub') }}
            </p>
            <button @click="open = false"
                class="mt-2 w-full text-white font-bold py-4 rounded-xl transition-all duration-200"
                style="background: #194077; font-family: 'Montserrat', sans-serif; font-size: 15px;"
                onmouseover="this.style.background='#020C1B';"
                onmouseout="this.style.background='#194077';">
                {{ __('exams.modal_close') }}
            </button>
        </div>

        {{-- Form State --}}
        <div x-show="!submitted">

            {{-- Title --}}
            <h3 class="font-black text-2xl uppercase text-center text-[#111827] mb-3 leading-tight"
                style="font-family: 'Montserrat', sans-serif;">
                {{ __('exams.modal_title') }}
            </h3>

            {{-- Subtitle --}}
            <p class="text-gray-500 text-sm text-center mb-8 leading-relaxed" style="font-family: 'Montserrat', sans-serif;">
                <span x-show="dateLabel">{{ __('exams.modal_subtitle_date') }} <strong x-text="dateLabel"></strong>.</span>
                <span x-show="!dateLabel">{{ __('exams.modal_subtitle_no_date') }}</span>
            </p>

            <form
                x-data="{ loading: false }"
                @submit.prevent="
                    if (loading) return;
                    loading = true;
                    fetch('{{ route('exams.register', $exam) }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            full_name: $el.querySelector('[name=full_name]').value,
                            email: $el.querySelector('[name=email]').value,
                            phone: $el.querySelector('[name=phone]').value,
                            message: $el.querySelector('[name=message]').value,
                            exam_date_id: dateId
                        })
                    })
                    .then(r => r.json())
                    .then(data => {
                        if (data.success) {
                            submitted = true;
                        }
                    })
                    .catch(() => {
                        alert('{{ __('exams.modal_error') }}');
                    })
                    .finally(() => {
                        loading = false;
                    })
                "
                class="flex flex-col gap-5">

                {{-- Full Name --}}
                <div>
                    <label class="block text-sm font-bold text-[#111827] mb-2" style="font-family: 'Montserrat', sans-serif;">
                        {{ __('exams.modal_name') }}
                    </label>
                    <input type="text" name="full_name" required
                        placeholder="{{ __('exams.modal_name_placeholder') }}"
                        class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm text-gray-700 outline-none focus:border-[#194077] transition placeholder-gray-300"
                        style="font-family: 'Montserrat', sans-serif;">
                </div>

                {{-- Email --}}
                <div>
                    <label class="block text-sm font-bold text-[#111827] mb-2" style="font-family: 'Montserrat', sans-serif;">
                        {{ __('exams.modal_email') }}
                    </label>
                    <input type="email" name="email" required
                        placeholder="{{ __('exams.modal_email_placeholder') }}"
                        class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm text-gray-700 outline-none focus:border-[#194077] transition placeholder-gray-300"
                        style="font-family: 'Montserrat', sans-serif;">
                </div>

                {{-- Phone --}}
                <div>
                    <label class="block text-sm font-bold text-[#111827] mb-2" style="font-family: 'Montserrat', sans-serif;">
                        {{ __('exams.modal_phone') }}
                    </label>
                    <input type="text" name="phone" required
                        placeholder="{{ __('exams.modal_phone_placeholder') }}"
                        class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm text-gray-700 outline-none focus:border-[#194077] transition placeholder-gray-300"
                        style="font-family: 'Montserrat', sans-serif;">
                </div>

                {{-- Message --}}
                <div>
                    <label class="block text-sm font-bold text-[#111827] mb-2" style="font-family: 'Montserrat', sans-serif;">
                        {{ __('exams.modal_message') }}
                    </label>
                    <textarea name="message" rows="3"
                        placeholder="{{ __('exams.modal_message_placeholder') }}"
                        class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm text-gray-700 outline-none focus:border-[#194077] transition placeholder-gray-300 resize-none"
                        style="font-family: 'Montserrat', sans-serif;"></textarea>
                </div>

                {{-- Submit --}}
                <button type="submit"
                    :disabled="loading"
                    :style="loading ? 'background: #6b7280; cursor: not-allowed;' : 'background: #194077;'"
                    class="w-full text-white font-bold py-4 rounded-xl transition-all duration-200 mt-1 uppercase tracking-wide"
                    style="font-family: 'Montserrat', sans-serif; font-size: 15px;"
                    onmouseover="if(!this.disabled){ this.style.background='#020C1B'; }"
                    onmouseout="if(!this.disabled){ this.style.background='#194077'; }">
                    <span x-show="!loading">{{ __('exams.modal_submit') }}</span>
                    <span x-show="loading">{{ __('exams.modal_sending') }}</span>
                </button>

            </form>
        </div>
    </div>
</div>