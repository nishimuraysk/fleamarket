<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coachtechフリマ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header-utilities">
                <div class="logo__container">
                    <a class="header__logo" href="/">
                        coachtechフリマ
                    </a>
                </div>
                <nav class="nav">
                    <div class="search-box">
                        <form action="/search" class="search-form" method="get">
                            @if ( !empty($input_keyword) )
                            <input type="text" name="keyword" value="{{ $input_keyword }}" placeholder="なにをお探しですか？" class="search-text">
                            @else
                            <input type="text" name="keyword" placeholder="なにをお探しですか？" class="search-text">
                            @endif
                            <button class="search-button">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                    <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                                </svg>
                            </button>
                        </form>
                    </div>
                    <div class="header-nav__container">
                        <ul class="header-nav">
                            @if (Auth::check())
                            <li class="header-nav__item">
                                <form class="form" action="/logout" method="post">
                                    @csrf
                                    <button class="header-nav__button">ログアウト</button>
                                </form>
                            </li>
                            <li class="header-nav__item">
                                <a class="header-nav__link" href="/mypage">マイページ</a>
                            </li>
                            <li class="header-nav__item-sell">
                                <a class="header-nav__link-sell" href="/sell">出品</a>
                            </li>
                            @else
                            <li class="header-nav__item">
                                <a class="header-nav__button" href=" /login">ログイン</a>
                            </li>
                            <li class="header-nav__item">
                                <a class="header-nav__link" href="/register">会員登録</a>
                            </li>
                            <li class="header-nav__item-sell">
                                <a class="header-nav__link-sell" href="/sell">出品</a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="hamburger" id="js-hamburger">
            <span class="hamburger_border hamburger_border_top"></span>
            <span class="hamburger_border hamburger_border_center"></span>
            <span class="hamburger_border hamburger_border_bottom"></span>
        </div>
        <div class="black_bg" id="js-black-bg"></div>
    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>

<script language="javascript" type="text/javascript">
    function toggleNav() {
        var body = document.body;
        var hamburger = document.getElementById('js-hamburger');
        var blackBg = document.getElementById('js-black-bg');

        hamburger.addEventListener('click', function() {
            body.classList.toggle('nav-open');
        });
        blackBg.addEventListener('click', function() {
            body.classList.remove('nav-open');
        });
    }
    toggleNav();
</script>