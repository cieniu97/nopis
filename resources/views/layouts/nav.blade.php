

    <div class="row">
      <div class="col-sm-12 ">
        <div class="min-menu">
          <div class="logo" onclick="window.location='/'" style="cursor:pointer">
              Nopis.pl <img src="{{url('layout/nopis.png')}}" alt="" >
          </div>
          @guest


            <div class="min-menu-przyciski">
              <a href="/login">Zaloguj</a>
              <a href="/register" class="min-menu-register">Zarejestruj</a>
            </div>
          @endguest

          @auth
            <div class="min-menu-auth">
              <a style="" href="/home">Home</a>

              <a style="" href="/exam">Egzaminy</a>

              <a style="" href="/files">Notatki</a>
              <a href="/user">{{auth()->user()->name}}</a>


              <form class="nav-form" action="/logout" method="post" style="display:inline;">
                  @csrf
                  <button type="submit" name="button" class="min-menu-register" style="border:none;">Wyloguj</button>
              </form>
            </div>
          @endauth
        </div>
      </div>
    </div>
