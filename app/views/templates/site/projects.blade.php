<?
/**
 * TITLE: Список проектов
 * AVAILABLE_ONLY_IN_ADVANCED_MODE
 */
?>
@extends(Helper::layout())
@section('style')
@stop
@section('page_class')project-list
@stop
@section('content')
    <div class="content square-list">
        <div class="holder">
            <h1>{{ $page->seo->h1 }}</h1>
        @if(FALSE)
            @foreach($projects as $project)
            <a href="" class="unit">
                <div style="background-image:url('http://dummyimage.com/497x305/');" class="visual"></div>
                <div class="info">
                    <div class="small">67м<sup>2</sup></div>
                    <div class="big">
                        <div class="wrapper">
                            <h2>Одноэтажный таунхаус, 67м<sup>2</sup></h2>
                            <div class="info">от 35 000 руб. за м<sup>2</sup></div>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        @endif
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