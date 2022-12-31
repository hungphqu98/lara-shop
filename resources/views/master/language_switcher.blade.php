<div class="header__top__hover">
<span>{{ $current_locale }}<i class="arrow_carrot-down"></i></span>
<ul>
@foreach($available_locales as $locale_name => $available_locale)
@if($available_locale === $current_locale)
<li><a href="language/{{ $available_locale }}">{{ $locale_name }}</a></li>
@else
<li><a href="language/{{ $available_locale }}">{{ $locale_name }}</a></li>
@endif
@endforeach
</ul>
</div>