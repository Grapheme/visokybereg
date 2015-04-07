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
    @if(count($page->blocks))
        @foreach($page->blocks as $slug => $block)
            @if(substr($slug,0,7) == 'project')
            <a href="{{ pageurl($slug.'-page') }}" class="unit">
                {{ $page->block($slug) }}
            </a>
            @endif
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