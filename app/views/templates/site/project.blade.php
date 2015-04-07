<?
/**
 * TITLE: Проект
 * AVAILABLE_ONLY_IN_ADVANCED_MODE
 */
?>
@extends(Helper::layout())
@section('style')
@stop
@section('page_class')project-detail
@stop
@section('content')
    <div class="slave-menu">
        <div class="holder">
            <h2>Выберите тип таунхауса</h2>
            <div class="row">
                <div class="type">
                    <div class="name">
                        <img src="{{ asset(Config::get('site.theme_path').'/images/ico-house-1.png') }}" class="ico">
                        <div class="title">1 этажные</div>
                    </div>
                    {{ Menu::placement('1_etazhnye_menu') }}
                </div>
                <div class="type">
                    <div class="name">
                        <img src="{{ asset(Config::get('site.theme_path').'/images/ico-house-2.png') }}" class="ico">
                        <div class="title">2 этажные</div>
                    </div>
                    {{ Menu::placement('2_etazhnye_menu') }}
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="holder col-2 wside">
            <div class="row">
                <div class="text">
                    <h1>{{ $page->seo->h1 }}</h1>
                    {{ $page->block('small_description') }}
                </div>
                <div class="side">
                    <div class="title">Цена</div><strong>{{ $page->block('price') }}</strong>
                </div>
            </div>
            <div class="row">
                <div class="visual-with-points">
                    {{ $page->block('main_image') }}
                </div>
            </div>
            <div class="row nomargin">
                <div class="text">
                    {{ $page->block('description') }}
                </div>
                <div class="side">
                    <div class="unit">
                        <div class="title">Жилая площадь</div><strong>{{ $page->block('zhilaya-ploshhad') }}</strong>
                    </div>
                    <div class="unit">
                        <div class="title">Участок</div><strong>{{ $page->block('uchastok') }}</strong>
                    </div>
                    <div class="unit">
                        <div class="title">Автостоянка</div><strong>{{ $page->block('avtostoyanka') }}</strong>
                    </div>
                </div>
            </div>
            <div class="row nomargin visual-hover">
            @if(count($page->blocks))
                @foreach($page->blocks as $slug => $block)
                    @if(substr($slug,0,5) == 'etazh')
                    {{ $page->block($slug) }}
                    @endif
                @endforeach
            @endif
            </div>
        </div>
    </div>
@stop
@section('scripts')
@stop