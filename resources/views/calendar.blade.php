@extends('layouts.app')

@section('css')

<style>
    .embed-container {
        position: relative;
        padding-bottom: 56.25%;
        height: 0;
        overflow: hidden;
    }
    .embed-container iframe {
        position: absolute;
        top:0;
        left: 0;
        width: 100%;
        height: 100%;
    }
</style>

@endsection

@section('content')
<div id="content">
    <h1>Calendario</h1>
    <div class="embed-container">
        <iframe src="https://calendly.com/i3peru/consultorias-y-proyectos" frameborder="0" allowfullscreen=""></iframe>
    </div>
</div>
@endsection