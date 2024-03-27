{{-- <x-mail::message>
# Introduction

The body of your message.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>{{$mailData['title']}}</h1>
    <p>{{$mailData['body']}}</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad et autem quibusdam veritatis velit aliquid provident cupiditate iste doloremque in! Non laboriosam omnis incidunt qui iusto soluta expedita odit consequatur.</p>
    
    <p>thank you.</p>
</body>
</html>