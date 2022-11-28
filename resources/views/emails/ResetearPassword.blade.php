<x-mail::message>
Se ha solicitado un reestablecimiento de contraseña para {{$email}},
Su nueva clave es {{$password}}

Gracias,<br>
{{ config('app.name') }}
</x-mail::message>
