<nav>
    <div class="logo">
        <img src="/nopis/storage/app/public/layout/nopis.png" alt="">
        <h1>Nopis.pl</h1>
    </div>
    @auth
    <div class="menu nav-user">
        <a style="" href="/nopis/public/">Home</a>

        <a style="" href="/nopis/public/exam">Egazminy</a>

        <a style="" href="/nopis/public/files">Notatki</a>
        <div class="nick">{{auth()->user()->name}}</div>

        <form class="nav-form" action="/nopis/public/logout" method="post" style="display:inline;">
            @csrf
            <button type="submit" name="button" style="">Wyloguj</button>
        </form>
    </div>
  
    @endauth

    @guest
    <a href="/nopis/public/login">Zaloguj</a>

    @endguest




</nav>
