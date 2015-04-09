<?
/**
 * TITLE: Строительство
 * AVAILABLE_ONLY_IN_ADVANCED_MODE
 */
?>
@extends(Helper::layout())
@section('style')
@stop
@section('page_class')building
@stop
@section('content')
    <div class="content">
        <div class="holder col-2 chess">
            <div class="row"></div>
            <div class="row">
                <div class="text">
                    <h1>{{ $page->seo->h1 }}</h1>
                    {{ $page->block('description') }}
                </div><img src="{{ asset(Config::get('site.theme_path').'/images/visual-common-1.png') }}" class="visual">
            </div>
        </div>
        <div class="holder col-2 wside">
            <div class="row">
                <div class="text">
                    <h2>{{ $page->block('vodosnabzhenie') }}</h2>
                    {{ $page->block('vodosnabzhenie_text') }}
                </div>
                <div class="side">
                    <div class="unit"><img src="{{ asset(Config::get('site.theme_path').'/images/ico-water.png') }}"></div>
                    <div class="unit">
                        <div class="title">Скважина</div><strong>{{ $page->block('skvazhina') }}</strong>
                    </div>
                    <div class="unit">
                        <div class="title">Водоотведение</div><strong>{{ $page->block('vodootvedenie') }}</strong>
                    </div>
                </div>
            </div>
        </div>
        <div class="holder col-2 wside">
            <div class="row">
                <div class="text">
                    <h2>{{ $page->block('elektrosnabzhenie') }}</h2>
                    {{ $page->block('elektrosnabzhenie_text') }}
                </div>
                <div class="side">
                    <div class="unit"><img src="{{ asset(Config::get('site.theme_path').'/images/ico-electro.png') }}"></div>
                    <div class="unit">
                        <div class="title">Мощность на дом</div><strong>{{ $page->block('moshhnost') }}</strong>
                    </div>
                    <div class="unit">
                        <div class="title">Подстанция</div><strong>{{ $page->block('podstanciya') }}</strong>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="text">
                    <h2>{{ $page->block('individualnoe-stroitelstvo') }}</h2>
                    {{ $page->block('individualnoe-stroitelstvo-text') }}
                </div>
            </div>
        </div>
        <div class="holder col-2 wside">
            <div class="row">
                <div class="text">
                    <h2>{{ $page->block('o-zastrojshhike') }}</h2>
                    {{ $page->block('o-zastrojshhike-text') }}
                </div>
                <div class="side">
                    <div class="unit">
                        <div class="head"><img src="{{ asset(Config::get('site.theme_path').'/images/ico-house-3.png') }}" class="ico">
                            <div class="title">Малоэтажное <br>строительство</div>
                        </div>
                    </div>
                    <div class="unit">
                        <div class="head"><img src="{{ asset(Config::get('site.theme_path').'/images/ico-paint-roller.png') }}" class="ico">
                            <div class="title">Ремонт и отделка <br>помещений</div>
                        </div>
                    </div>
                    <div class="unit">
                        <div class="head"><img src="{{ asset(Config::get('site.theme_path').'/images/ico-threes.png') }}" class="ico">
                            <div class="title">Благоустройство <br>территори</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="text">
                {{ $page->block('seo') }}
            </div>
        </div>
    </div>
@stop
@section('scripts')
@stop