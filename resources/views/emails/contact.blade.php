@component('mail::message')
    # Bonjour, vous avez un nouvel email

    Nom: {{ $data['name'] }}
    Email: {{ $data['email'] }}
    Message: {{ $data['message'] }}

    Thanks,
@endcomponent
