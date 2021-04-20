@component('mail::message')
<h1>Traffic Log Pro</h1>

{{ session('content') }}


@component('mail::button', ['url' => ''])
More
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
