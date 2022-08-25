@extends('layouts.app')

@section('content')
<div>
    <div class="row">
        <div class="col-6">
            <h1 style="font-size: 5vh; padding-top: 5vh;">Eventos</h1>
            <p style="padding-top: 1vh; padding-bottom: 3vh; font-size: 1.75vh;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consectetur justo quis euismod vehicula. Quisque diam dui, imperdiet et hendrerit in, accumsan tempus erat.
            </p>
            <p style="padding-top: 1vh; padding-bottom: 3vh; font-size: 1.75vh;">
                Nullam ornare blandit urna, eu pulvinar elit faucibus eget. Sed justo mauris, ultricies eu urna at, gravida commodo mauris. Quisque ac felis ac sapien dictum gravida aliquet ac purus. Donec sit amet ex vel ex sollicitudin posuere at et metus. Duis sodales ligula nisi, molestie lacinia ex rhoncus vel.
            </p>
            <p style="padding-top: 1vh; padding-bottom: 3vh; font-size: 1.75vh;">
                Nullam ornare blandit urna, eu pulvinar elit faucibus eget. Sed justo mauris, ultricies eu urna at, gravida commodo mauris. Quisque ac felis ac sapien dictum gravida aliquet ac purus. Donec sit amet ex vel ex sollicitudin posuere at et metus. Duis sodales ligula nisi, molestie lacinia ex rhoncus vel.
            </p>
        </div>
        <div class="col-6" style="padding-left: 10%;">
            <img class="title-image" id="events-img" src="/images/Events.jpg" style="max-width:100%;">
        </div>
    </div>
    <!-- News Subscription -->
    @component('components.subscribe')
    @endcomponent
</div>
@endsection