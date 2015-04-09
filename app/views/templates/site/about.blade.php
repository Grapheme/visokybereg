<?
/**
 * TITLE: О поселке
 * AVAILABLE_ONLY_IN_ADVANCED_MODE
 */
?>
@extends(Helper::layout())
@section('style')
@stop
@section('page_class')about
@stop
@section('content')
    <div class="content">
        <div class="big-visual">
            <div class="holder">
                <h1>{{ $page->seo->h1 }}</h1>
                <div class="description">
                    {{ $page->block('description') }}
                </div>
            </div>
        </div>
        <div class="holder col-2 chess">
            <div class="row"><img src="{{ asset(Config::get('site.theme_path').'/images/visual-map.png') }}" class="visual map">
                <div class="text">
                    <h2>{{ $page->block('location') }}</h2>
                    {{ $page->block('location_text') }}
                </div>
            </div>
            <div class="row">
                <div class="text">
                    <h2>{{ $page->block('lifestyle') }}</h2>
                    {{ $page->block('lifestyle_text') }}
                </div>
                <div class="icons-title-holder">
                    <div class="unit"><img src="{{ asset(Config::get('site.theme_path').'/images/ico-ball.png') }}" class="ico">
                        <div class="title">Спортивные площадки</div>
                    </div>
                    <div class="unit"><img src="{{ asset(Config::get('site.theme_path').'/images/yacht.png') }}" class="ico">
                        <div class="title">Яхт-клуб</div>
                    </div>
                    <div class="unit"><img src="{{ asset(Config::get('site.theme_path').'/images/ico-cart.png') }}" class="ico">
                        <div class="title">Супермаркет</div>
                    </div>
                    <div class="unit"><img src="{{ asset(Config::get('site.theme_path').'/images/ico-baby.png') }}" class="ico">
                        <div class="title">Детский сад</div>
                    </div>
                    <div class="unit"><img src="{{ asset(Config::get('site.theme_path').'/images/ico-coast.png') }}" class="ico">
                        <div class="title">Собственный пляж</div>
                    </div>
                    <div class="unit"><img src="{{ asset(Config::get('site.theme_path').'/images/ico-book.png') }}" class="ico">
                        <div class="title">Школа</div>
                    </div>
                </div>
            </div>
            <div class="row"><img src="{{ asset(Config::get('site.theme_path').'/images/visual-nature-1.png') }}" class="visual">
                <div class="text">
                    <h2>{{ $page->block('ecology') }}</h2>
                    {{ $page->block('ecology_text') }}
                </div>
            </div>
            <div class="row">
                <div class="text">
                    <h2>{{ $page->block('ecology_podvorya') }}</h2>
                    {{ $page->block('ecology_podvorya_text') }}
                </div><img src="{{ asset(Config::get('site.theme_path').'/images/visual-nature-2.png') }}" class="visual">
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