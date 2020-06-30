<header class="header">
    <ul class="nav">
        <li class="">
            <a href="{{ route('top') }}" class="">
                <img src="/storage/images/partone_rogo_bw.png" class="" alt="">
            </a>
        </li>
        <li class="hamburger_icon">
            <nav>
                <button class="hamburgeranime">
                    <span class="first"></span>
                    <span class="second"></span>
                    <span class="third"></span>
                </button>
            </nav>
        </li>
    </ul>

    <nav class="gnavi-contents">

        <ul class="header_nav">
            <li class="list_none list_width">
                <a class="" href="{{ route('top') }}">HOME</a>
            </li>
            <li class="list_none list_width">
                <a class="" href="{{ route('works') }}">制作実績</a>
            </li>
            <li class="list_none list_width has-children">
                <a class="" href="/#shop">ショップサイト</a>
                <ul class="children" style="list-style: none;">
                    <li class="list_none">
                        <a class="" href="">
                            e-HOBBY SHOP
                        </a>
                    </li>
                    <li class="list_none">
                        <a class="" href="">
                            Freeart
                        </a>
                    </li>
                </ul>
            </li>
            <li class="list_none list_width">
                <a class="" href="/#greet">ごあいさつ</a>
            </li>
            <li class="list_none list_width">
                <a class="" href="{{ route('profile') }}">会社概要</a>
            </li>
            <li class="list_none list_width">
                <a class="" href="{{ route('info') }}">採用情報</a>
            </li>
            <li class="list_none list_width">
                <a class="" href="{{ route('job') }}">外部スタッフ募集</a>
            </li>
        </ul>
    </nav>
</header>
