@extends('layouts.app')

@section('content')

{{--    @include('preloaer')--}}
    @include('blocks.about')
    @include('blocks.how_it_works')
    @include('blocks.categories')
    @include('blocks.testimony')

@endsection

@push('styles')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endpush
@push('scripts')
{{--    <script src="{{ asset('js/main.js') }}"></script>--}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        {{--$(document).ready(function () {--}}
        {{--    $('.slick-prev').html('<img src="{{ asset('img/Arrow 2.png') }}"> <p class="pl-4">Previous</p>');--}}
        {{--    $('.slick-next').html('<img src="{{ asset('img/Arrow 1.png') }}"> <p class="pr-4">Next</p>');--}}
        {{--})--}}
    </script>
@endpush
