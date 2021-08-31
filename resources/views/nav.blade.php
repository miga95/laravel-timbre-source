<header class="container " style="background-color: #824C71">
    <nav class="navbar navbar-expand-lg navbar-light ">
        <img src="{{asset('img/logo_R_noir.png')}}" alt="" width="40px">
        <div class="d-flex justify-content-center collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('accueil')}}">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#"  id="navbarDropdownMenuLink" data-toggle="dropdown">Vente</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{route('vente-actuelle')}}">Vente Actuelle</a>
                        <a class="dropdown-item" href="">Ventes Anciennes</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('expertise')}}">Expertise</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('vendre-acheter')}}">Vendre/Acheter</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('maison-roumet')}}">Maison Roumet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Se connecter/S'inscrire</a>
                    </li>
                @endguest
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user px-1"></i>{{Auth::user()->name}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{route('dashboard')}}">Dashboard</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                             onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </div>
                </li>
                @endauth



            </ul>
        </div>
    </nav>
</header>
