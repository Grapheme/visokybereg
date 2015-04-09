<?
/**
 * TITLE: План поселка
 * AVAILABLE_ONLY_IN_ADVANCED_MODE
 */
?>
@extends(Helper::layout())
@section('style')
@stop
@section('page_class')scheme
@stop
@section('content')
    <div class="content">
        <div class="holder col-2 wside">
            <div class="row">
                <div class="text">
                    <h1>{{ $page->seo->h1 }}</h1>
                    {{ $page->block('description') }}
                </div>
                <div class="side">
                    <div class="unit">
                        <div class="title">Площадь поселка<br></div><strong>{{ $page->block('area_village') }}</strong>
                    </div>
                    <div class="unit">
                        <div class="title">Таунхаусы</div><strong>{{ $page->block('townhouses') }}</strong>
                    </div>
                    <div class="unit">
                        {{ $page->block('general_plan') }}
                    </div>
                </div>
            </div>
            <div class="row wide">
                <img src="/uploads/files/1428587812_1671.png" class="visual map">
            </div>
            <div class="row">
                <div class="text">
                    <h2>{{ $page->block('first_turn') }}</h2>
                    {{ $page->block('first_turn_text') }}
                </div>
            </div>
            <div class="row scheme">
                <div class="visual"><img src="{{ asset(Config::get('site.theme_path').'/images/visual-map-scheme-interactive.png') }}"></div>
                <div class="side">
                    {{ $page->block('plan_types') }}
                </div>
            </div>
            <div class="row">
                <div class="text">
                    {{ $page->block('seo') }}
                </div>
            </div>
        </div>
    </div>
@stop
@section('scripts')
@stop