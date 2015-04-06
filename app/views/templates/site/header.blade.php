<?
/**
 * TEMPLATE_IS_NOT_SETTABLE
 */
?>
<header>
    <div class="holder">
        @if(Request::is('/'))
            <div class="logo"><img src="{{ asset(Config::get('site.theme_path')) }}/images/logo.png"></div>
        @else
            <a href="{{ URL::route('mainpage') }}" class="logo"><img src="{{ asset(Config::get('site.theme_path')) }}/images/logo.png"></a>
        @endif
        <ul class="main-menu">
            <li><a href="{{ pageurl('about') }}">О поселке</a></li>
            <li><a href="{{ pageurl('plan') }}">План поселка</a></li>
            <li><a href="{{ pageurl('projects') }}">Проекты</a></li>
            <li><a href="{{ pageurl('construction') }}">Строительство</a></li>
        </ul><a href="tel:+79034016623" class="phone">+7 (903) 401-66-23</a>
        <div class="clrfx"></div>
    </div>
    <hr>
</header>