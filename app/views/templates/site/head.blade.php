<?
/**
 * TEMPLATE_IS_NOT_SETTABLE
 */
?>
@section('title'){{{ isset($page_title) ? $page_title : Config::get('app.default_page_title') }}}@stop
@section('description'){{{ isset($page_description) ? $page_description : Config::get('app.default_page_description') }}}@stop
@section('keywords'){{{ isset($page_keywords) ? $page_keywords : Config::get('app.default_page_keywords') }}}@stop

<meta charset="utf-8">
<title>@yield('title')</title>
<meta name="description" content="@yield('description')">
<meta name="keywords" content="@yield('keywords')">
<meta name="viewport" content="width=device-width, initial-scale=1">
{{ HTML::stylemod(Config::get('site.theme_path').'/styles/main.css') }}
{{ HTML::scriptmod(Config::get('site.theme_path').'/scripts/vendor/modernizr.js') }}
<link rel="icon" type="image/png" href="{{ Config::get('site.theme_path') }}/images/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="{{ Config::get('site.theme_path') }}/images/favicon-16x16.png" sizes="16x16" />
