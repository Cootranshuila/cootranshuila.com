<header id="topnav" class="defaultscroll sticky">
    <div class="px-xl-5 px-lg-3 px-2">
        <!-- Logo container-->
        <div>
            <a class="logo" href="/">
                <img src="{{ asset('assets/images/logo-dark.png') }}" class="l-dark" height="42" alt="">
                <img src="{{ asset('assets/images/logo-light.png') }}" class="l-light" height="42" alt="">
            </a>
        </div>
        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu nav-light float-right">
                <li class="has-submenu">
                    <a href="javascript:void(0)">Nosotros</a><span class="menu-arrow"></span>
                    <ul class="submenu megamenu">
                        <li>
                            <ul>
                                <li class="has-submenu"><a href="historia">Historia</a></li>
                                <li><a href="nuestra_empresa">Nuestra empresa</a></li>
                                <!--<li><a href="index-agency.html">Esal-2019</a></li>-->
                            </ul>
                        </li>
                    </ul>
                </li>
                <!--<li class="has-submenu">
                    <a href="javascript:void(0)">Nosotros</a><span class="menu-arrow"></span>
                    <ul class="submenu megamenu">
                        <li>
                            <ul>
                                <li><a href="/historia">Historia</a></li>
                                <li><a href="index-classic-saas.html">Nuestra empresa</a></li>
                                <li><a href="index-agency.html">Esal-2019</a></li>
                                <li><a href="index-saas.html">Saas</a></li>
                                <li><a href="index-classic-saas.html">Classic Saas</a></li>
                                <li><a href="index-agency.html">Agency</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>-->
                <li class="has-submenu">
                    <a href="javascript:void(0)">Servicios</a><span class="menu-arrow"></span>
                    <ul class="submenu megamenu">
                        <li>
                            <ul>
                                <li><a href="/inicio">Tiquetes Online</a></li>
                                <li><a href="javascript:void(0)">Servicio Especial</a></li>
                                <li><a href="javascript:void(0)">Estación de servicios</a></li>
                                <li><a href="{{route('encomiendas')}}">Carga y encomiendas</a></li>
                                <li><a href="{{route('flota')}}">Transporte de pasajeros</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#oficinas">Oficinas</a></li>
                <li class="has-submenu">
                    <a href="javascript:void(0)">Corporativo</a><span class="menu-arrow"></span>
                    <ul class="submenu megamenu">
                        <li>
                            <ul>
                                <li><a href="javascript:void(0)">TicketSoft</a></li>
                                <li><a href="http://huil.fics.sisorgcloud.com">Fics</a></li>
                                {{-- <li><a href="https://accounts.google.com/signin/v2/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ltmpl=default&hd=cootranshuila.com&service=mail&sacu=1&rip=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin">Correo Corporativo</a></li> --}}
                                <li><a href="javascript:void(0)">Administrador</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="{{route('contacto')}}">Contáctenos</a></li>
                <li class="has-submenu">
                    <a href="{{route('login')}}">
                        <i class="far fa-user-circle" style="font-size: 1.5rem"></i>
                    </a>
                    <ul class="submenu megamenu" style="padding: 2rem;">
                        <li>
                            <ul>
                                {{-- <li>Bienvenido</li>
                                <li><a href="index-classic-saas.html">Classic Saas</a></li>
                                <li><a href="index-agency.html">Agency</a></li> --}}
                                <li class="text-center">
                                    <img src="{{asset('assets/images/user/usuario.svg')}}" alt="" width="50">
                                </li>
                                <li>
                                    <div>Bienvenido, {{auth()->user() ? auth()->user()->name : 'Inicia sesión'}}</div>
                                </li>
                                <li class="text-center">
                                    <div>
                                        @auth
                                            <a href="{{route('home')}}" >Ir a mi perfil</a>
                                            <a  style="margin-top: .5rem; color: #fff !important;" href="{{ route('logout') }}" class="btn bg-danger btn-sm" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        @endauth
                                        @guest
                                            <a style="margin-top: .5rem; color: #fff !important;" href="{{route('login')}}" class="btn btn-primary btn-sm">Inicie Sesión</a>
                                        @endguest
                                    </div>
                                </li>                          
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</header><!--end header-->
