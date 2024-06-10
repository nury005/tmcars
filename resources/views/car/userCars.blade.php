{{--@extends('layouts.app')--}}
{{--@section('title')--}}
    {{--@lang('app.car') - @lang('app.appName')--}}
{{--@endsection--}}
{{--@section('content')--}}
    {{--<div class="container-xxl py-3">--}}
        {{--<div class="d-flex justify-content-between align-items-center border-bottom py-2 mb-3">--}}
            {{--<div class="h4 text-bg-danger">My cars</div>--}}
        {{--</div>--}}
        {{--<div class="row g-3">--}}
            {{--<div class="col-sm">--}}
                {{--@if($cars->count() > 0)--}}
                    {{--<div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-3">--}}
                    {{--@foreach($cars as $car)--}}
                    {{--<div class="col">--}}
                        {{--@include('app.car')--}}
                    {{--</div>--}}
                    {{--@endforeach--}}
                    {{--</div>--}}
                    {{--@endif--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--@endsection--}}
