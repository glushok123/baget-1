@extends('layouts.app')

@section('content')

<main class="pageWrapper">


    <div class="container">
        <article id="post-3" class="post-3 page type-page status-publish hentry">
            <header class="entry-header">
                <h1 class="entry-title">Поиск по сайту</h1>
            </header>

            <form class="search-form custom-search" id="searchform">
                <input type="hidden" name="searchid">
                <input type="text" name="text" class="search-form__input" placeholder="Поиск по сайту.."
                    autocomplete="off">
                <input type="hidden" name="web" value="0">
                <button id="searchsubmit" data-search="body" class="headerSubmit"></button>
            </form>


            <style type="text/css">
            .ya-page_js_yes .ya-site-form_inited_no {
                display: none;
            }
            </style>
            <script type="text/javascript">
            (function(w, d, c) {
                var s = d.createElement('script'),
                    h = d.getElementsByTagName('script')[0],
                    e = d.documentElement;
                if ((' ' + e.className + ' ').indexOf(' ya-page_js_yes ') === -1) {
                    e.className += ' ya-page_js_yes';
                }
                s.type = 'text/javascript';
                s.async = true;
                s.charset = 'utf-8';
                s.src = (d.location.protocol === 'https:' ? 'https:' : 'http:') +
                '//site.yandex.net/v2.0/js/all.js';
                h.parentNode.insertBefore(s, h);
                (w[c] || (w[c] = [])).push(function() {
                    Ya.Site.Form.init()
                })
            })(window, document, 'yandex_site_callbacks');
            </script>
            <div class="entry-content">

            <div id="ya-site-results" data-bem="{&quot;tld&quot;: &quot;ru&quot;,&quot;language&quot;: &quot;ru&quot;,&quot;encoding&quot;: &quot;&quot;,&quot;htmlcss&quot;: &quot;1.x&quot;,&quot;updatehash&quot;: true}"></div><script type="text/javascript">(function(w,d,c){var s=d.createElement('script'),h=d.getElementsByTagName('script')[0];s.type='text/javascript';s.async=true;s.charset='utf-8';s.src=(d.location.protocol==='https:'?'https:':'http:')+'//site.yandex.net/v2.0/js/all.js';h.parentNode.insertBefore(s,h);(w[c]||(w[c]=[])).push(function(){Ya.Site.Results.init();})})(window,document,'yandex_site_callbacks');</script>

                <style>
                .b-head__l {
                    display: none;
                }

                .b-head__r {
                    padding: 0;
                    font-weight: 700;
                }

                #ya-site-results {
                    color: #000000;
                    background: #FFFFFF;
                }

                #ya-site-results .b-pager__current,
                #ya-site-results .b-serp-item__number {
                    color: #000000 !important;
                }

                #ya-site-results {
                    font-family: Arial !important;
                }

                #ya-site-results :visited,
                #ya-site-results .b-pager :visited,
                #ya-site-results .b-foot__link:visited,
                #ya-site-results .b-copyright__link:visited {
                    color: #800080;
                }

                #ya-site-results a:link,
                #ya-site-results a:active,
                #ya-site-results .b-pseudo-link,
                #ya-site-results .b-head-tabs__link,
                #ya-site-results .b-head-tabs__link:link,
                #ya-site-results .b-head-tabs__link:visited,
                #ya-site-results .b-dropdown__list .b-pseudo-link,
                #ya-site-results .b-dropdowna__switcher .b-pseudo-link,
                .b-popupa .b-popupa__content .b-menu__item,
                #ya-site-results .b-foot__link:link,
                #ya-site-results .b-copyright__link:link,
                #ya-site-results .b-serp-item__mime,
                #ya-site-results .b-pager :link {
                    color: #0033FF;
                }

                #ya-site-results :link:hover,
                #ya-site-results :visited:hover,
                #ya-site-results .b-pseudo-link:hover {
                    color: #FF0000 !important;
                }

                #ya-site-results .l-page,
                #ya-site-results .b-bottom-wizard {
                    font-size: 13px;
                }

                #ya-site-results .b-pager {
                    font-size: 1.25em;
                }

                #ya-site-results .b-serp-item__text,
                #ya-site-results .ad {
                    font-style: normal;
                    font-weight: normal;
                }

                #ya-site-results .b-serp-item__title-link,
                #ya-site-results .ad .ad-link {
                    font-style: normal;
                    font-weight: normal;
                }

                #ya-site-results .ad .ad-link a {
                    font-weight: bold;
                }

                #ya-site-results .b-serp-item__title,
                #ya-site-results .ad .ad-link {
                    font-size: 16px;
                }

                #ya-site-results .b-serp-item__title-link:link,
                #ya-site-results .b-serp-item__title-link {
                    font-size: 1em;
                }

                #ya-site-results .b-serp-item__number {
                    font-size: 13px;
                }

                #ya-site-results .ad .ad-link a {
                    font-size: 0.88em;
                }

                #ya-site-results .b-serp-url,
                #ya-site-results .b-direct .url,
                #ya-site-results .b-direct .url a:link,
                #ya-site-results .b-direct .url a:visited {
                    font-size: 13px;
                    font-style: normal;
                    font-weight: normal;
                    color: #329932;
                }

                #ya-site-results .b-serp-item__links-link {
                    font-size: 13px;
                    font-style: normal;
                    font-weight: normal;
                    color: #000000 !important;
                }

                #ya-site-results .b-pager__inactive,
                #ya-site-results .b-serp-item__from,
                #ya-site-results .b-direct__head-link,
                #ya-site-results .b-image__title,
                #ya-site-results .b-video__title {
                    color: #000000 !important;
                }

                #ya-site-results .b-pager__current,
                #ya-site-results .b-pager__select {
                    background: #E0E0E0;
                }

                #ya-site-results .b-foot,
                #ya-site-results .b-line {
                    border-top-color: #E0E0E0;
                }

                #ya-site-results .b-dropdown__popup .b-dropdown__list,
                .b-popupa .b-popupa__content {
                    background-color: #FFFFFF;
                }

                .b-popupa .b-popupa__tail {
                    border-color: #E0E0E0 transparent;
                }

                .b-popupa .b-popupa__tail-i {
                    border-color: #FFFFFF transparent;
                }

                .b-popupa_direction_left.b-popupa_theme_ffffff .b-popupa__tail-i,
                .b-popupa_direction_right.b-popupa_theme_ffffff .b-popupa__tail-i {
                    border-color: transparent #FFFFFF;
                }

                #ya-site-results .b-dropdowna__popup .b-menu_preset_vmenu .b-menu__separator {
                    border-color: #E0E0E0;
                }

                .b-specification-list,
                .b-specification-list .b-pseudo-link,
                .b-specification-item__content label,
                .b-specification-item__content .b-link,
                .b-specification-list .b-specification-list__reset .b-link {
                    color: #000000 !important;
                    font-family: Arial;
                    font-size: 13px;
                    font-style: normal;
                    font-weight: normal;
                }

                .b-specification-item__content .b-calendar__title {
                    font-family: Arial;
                    color: #000000;
                    font-size: 13px;
                    font-style: normal;
                    font-weight: normal;
                }

                .b-specification-item__content .b-calendar-month__day_now_yes {
                    color: #E0E0E0;
                }

                .b-specification-item__content .b-calendar .b-pseudo-link {
                    color: #000000;
                }

                .b-specification-item__content {
                    font-family: Arial !important;
                    font-size: 13px;
                }

                .b-specification-item__content :visited {
                    color: #800080;
                }

                .b-specification-item__content .b-pseudo-link:hover,
                .b-specification-item__content :visited:hover {
                    color: #FF0000 !important;
                }

                #ya-site-results .b-popupa .b-popupa__tail-i {
                    background: #FFFFFF;
                    border-color: #E0E0E0 !important;
                }
                </style>


                <br><br><br>

            </div>
        </article>
    </div>
</main>

@endsection

@section('description', 'JSERVICE — сервисный центр осуществляет ремонт любой техники c гарантией до 3-х лет ✅
Устраним поломку, если возникнет в гарантийный период бесплатно. В предоставляемую гарантию входит послеремонтное
обслуживание вашей техники.')
@section('keywords', 'гарантия на ремонт, JSERVICE — сервисный центр')
@section('title', 'Гарантия JSERVICE — сервисный центр по ремонту техники в Москве')