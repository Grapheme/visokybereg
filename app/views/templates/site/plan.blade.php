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
                        <!--<a href="javascript:void(0);" class="download-file">
                            <img src="{{ asset(Config::get('site.theme_path').'/images/ico-pdf.png') }}" class="ico">
                            <div class="info">
                                <div class="filename">Генеральный план.pdf</div>
                                <div class="size">12мб</div>
                            </div>
                        </a>-->
                    </div>
                </div>
            </div>
            <div class="row wide">
                <img src="{{ asset(Config::get('site.theme_path').'/images/visual-map-scheme.png') }}" class="visual map">
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
                <!--
                    <div class="unit">
                        <div class="head"><img src="{{ asset(Config::get('site.theme_path').'/images/ico-house-1.png') }}" class="ico">
                            <div class="title">1 Этажные</div>
                        </div>
                        <ul class="section">
                            <li><a href="" class="active">67 м<sup>2</sup></a></li>
                            <li><a href="">75 м<sup>2</sup></a></li>
                            <li><a href="">89 м<sup>2</sup></a></li>
                        </ul>
                    </div>
                    <div class="unit">
                        <div class="head"><img src="{{ asset(Config::get('site.theme_path').'/images/ico-house-2.png') }}" class="ico">
                            <div class="title">2 Этажные</div>
                        </div>
                        <ul class="section">
                            <li><a href="">138 м<sup>2</sup></a></li>
                            <li><a href="">141 м<sup>2</sup></a></li>
                        </ul>
                    </div>
                -->
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