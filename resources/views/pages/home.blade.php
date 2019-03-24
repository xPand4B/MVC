@extends('layouts.master')

@section('content')
    Homepage

    <br>
    
    {{-- Output: /mnt/Private/Programm Files/Google Drive/Private/WebDev/01-BKR/2018-19/02-Portfolio/public/img/collections/01-First-Steps/first-time-html.png --}}
    {{-- {{ collection_image('01-First-Steps', 'first-time-html.png') }} --}}

    {{ collection_image('01-First-Steps/first-time-html.png') }}
   

@endsection
