<!-- resources/views/emails/contact-form.blade.php -->
@component('mail::message')
# Contact Form Submission

**Name:** {{ $formData['name'] }}

**Email:** {{ $formData['email'] }}

**Message:**
{{ $formData['message'] }}
@endcomponent
