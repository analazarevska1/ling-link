<!DOCTYPE html>
<html>
<body style="font-family: 'Montserrat', sans-serif; color: #111827; padding: 32px; max-width: 600px; margin: 0 auto;">
    
    <div style="background: #194077; padding: 24px 32px; border-radius: 12px 12px 0 0;">
        <h1 style="color: white; margin: 0; font-size: 20px;">LinguaLink</h1>
        <p style="color: rgba(255,255,255,0.7); margin: 4px 0 0; font-size: 14px;">Нова пријава за испит</p>
    </div>

    <div style="background: #f9fafb; padding: 32px; border-radius: 0 0 12px 12px; border: 1px solid #e5e7eb;">
        <p style="font-size: 15px; color: #374151;"><strong>Испит:</strong> {{ $registration->exam->title }}</p>

        @if($registration->examDate)
        <p style="font-size: 15px; color: #374151;"><strong>Термин:</strong> {{ \Carbon\Carbon::parse($registration->examDate->exam_date)->format('d.m.Y') }}</p>
        @else
        <p style="font-size: 15px; color: #374151;"><strong>Термин:</strong> По барање</p>
        @endif

        <p style="font-size: 15px; color: #374151;"><strong>Име:</strong> {{ $registration->full_name }}</p>
        <p style="font-size: 15px; color: #374151;"><strong>Е-пошта:</strong> {{ $registration->email }}</p>
        <p style="font-size: 15px; color: #374151;"><strong>Телефон:</strong> {{ $registration->phone }}</p>
        <p style="font-size: 15px; color: #374151;"><strong>Порака:</strong> {{ $registration->message ?? '—' }}</p>

        <hr style="border: none; border-top: 1px solid #e5e7eb; margin: 24px 0;">
        <p style="font-size: 13px; color: #9ca3af;">Пријавено на: {{ $registration->created_at->format('d.m.Y H:i') }}</p>
    </div>

</body>
</html>