@component('mail::message')
# Introduction

The body of your message.

- one
- two 
- three

Thanks so much for registering 

@component('mail::button', ['url' => 'https://laracasts.com'])
Start Browsing
@endcomponent

@component('mail::panel', ['url' => ''])
Some inspirational quote here. :)
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
