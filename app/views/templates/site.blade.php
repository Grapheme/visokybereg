<?
/**
 * MENU_PLACEMENTS: main_menu=Основное меню|1_etazhnye_menu=Меню проектов, одноэтажные|2_etazhnye_menu=Меню проектов, двухэтажные
 */
?>
@if (@is_object($page->meta->seo))
@section('title'){{ $page->meta->seo->title ? $page->meta->seo->title : $page->name }}@stop
@section('description'){{ $page->meta->seo->description }}@stop
@section('keywords'){{ $page->meta->seo->keywords }}@stop
@elseif (@is_object($page->meta))
@section('title')
{{{ $page->name }}}@stop
@elseif (@is_object($seo))
@section('title'){{ $seo->title }}@stop
@section('description'){{ $seo->description }}@stop
@section('keywords'){{ $seo->keywords }}@stop
@endif
<!DOCTYPE html>
@section('page_class')index @stop
<html>
<head>
	@include(Helper::layout('head'))
    @section('style')
    @show
</head>
<body class="@yield('page_class')">
    @include(Helper::layout('header'))

    @section('content')
        {{ @$content }}
    @show

    @section('footer')
        @include(Helper::layout('footer'))
    @show
    @include(Helper::layout('scripts'))

    @section('scripts')
    @show
</body>
</html>