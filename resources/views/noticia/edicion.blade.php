@extends('template.bootstrap')

@section('script')
<script src="https://cdn.tiny.cloud/1/470vl6oydu4y113xe2muphz55fln53vldzpewunxn0v858qz/tinymce/5/tinymce.min.js"
    referrerpolicy="origin"></script>
<script src="{{asset('js/tiny.js')}}"></script>
@endsection

@section('content')
<textarea id="editorHtml"></textarea>
<button onclick="verHTML()">VER HTML</button>
@endsection

