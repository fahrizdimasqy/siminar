@component('mail::message')

{{-- ![](data:image/png;base64,{{base64_encode(file_get_contents(public_path('storage'.str_replace('/','\\',$detail['thumbnail']))))}}) --}}
Hello {{$user['name']}}
Nama anda telah terdaftar dalam peserta webinar {{$link_zoom}}
@component('mail::button', ['url' => $link_zoom, 'color' => 'primary'])
Link Zoom
@endcomponent
Gunakan token ini untuk absensi.

Panitia Webinar Jurusan Teknik Informatika<br>
{{ config('app.name') }}
@endcomponent