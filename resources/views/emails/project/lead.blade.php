@component('mail::message')
    Dear {{{ $name = $request['name'] }}},

    I'm humbled and deeply grateful that you are willing to share some insights into your project with me.
    Your details are 100% safe and will not be shared with anyone!

    I would kindly ask you to give me 24 hours to follow-up on your request. #letsdothis!

    Your details:
    Name: {{ $name }}
    Surname: {{ $request['surname'] }}
    Email: {{ $request['email'] }}
    Phone: {{ $request['phone'] }}

    Project details:
    {{ $request['details'] }}

    Thanks,
    {{ config('app.name') }}
@endcomponent
