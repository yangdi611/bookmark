<header class="navbar navbar-expand-md navbar-light bg-dark">
  <div class="container">
    <div class="offset-md-1 col-md-10">
      <a href="/" id="logo">Bookmarks</a>
            <nav>
        <ul class="nav justify-content-end">
          @if (Auth::check())
            <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}">User list</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->email }} <b class="caret"></b>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('users.show', Auth::user()->id) }}">User center</a>
                <a class="dropdown-item" href="{{ route('users.edit', Auth::user()->id) }}">Edit profile</a>
                <div class="dropdown-divider"></div>
                  <a class="dropdown-item" id="logout" href="#">
                    <form action="{{ route('logout') }}" method="POST">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      <button class="btn btn-block btn-danger" type="submit" name="button">Log out</button>
                    </form>
                  </a>
            </div>
            </li>
          @else
            <li class="nav-item"><a class="nav-link" href="{{ route('help') }}">Help</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Sign in</a></li>
          @endif
        </ul>
      </nav>
    </div>
  </div>
</header>
