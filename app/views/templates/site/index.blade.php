<?
/**
 * TITLE: Главная страница
 * AVAILABLE_ONLY_IN_ADVANCED_MODE
 */
?>
@extends(Helper::layout())
@section('style')
@stop
@section('content')
    <div class="horizontal-center-wrapper vertical-center-wrapper">
        <div class="support"></div>
        <div class="holder">
            <h1>{{ $page->seo->h1 }}</h1>
            <div class="about">
                {{ $page->block('about') }}
            </div>
            <div class="where">
                <div class="ico-mark"><img src="{{ asset(Config::get('site.theme_path')) }}/images/ico-mark.png"></div>
                <div class="title">{{ $page->block('address') }}</div>
            </div>
            <!--<a href="{{ pageurl('projects') }}" class="btn">Выбрать дом</a>-->
        </div>
    </div>
@stop
@section('scripts')
@stop