<section>
    
    		<div class="row">
    			<!--<div class="col l12 s12 m12 menu_aut">-->
    			<!--</div>-->
    			<div class="col l12 s12 m12 nav_b">
    			<nav class="nav_back">
			    <div class="nav-wrapper">
			      <a href="#" data-target="mobile-demo" class="sidenav-trigger">Меню</a>
			      <ul class="right hide-on-med-and-down">
			         @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Вход</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Регистрация</a>
            </li>
                @else
            <div class="one">
            <ul class="topmenu">
            <li class="nav-item"><a href="/home">Личный кабинет</a>
            <ul class="submenu">
            <li class="dropdown-item_2">
              <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Выйти
                                        </a>
            </li>
            </ul>
            </li>
            </ul>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
            </div>                         
                @endguest
			      </ul>
			      <ul class="left hide-on-med-and-down">
			        <li><a href="/">Главная</a></li>
			        <li><a href="/ssoboy">Что взять с собой?</a></li>
			        <li><a href="/photovideo">Фото/Видео</a></li>
                    <!-- <li><a href="/rasp">Расписание</a></li> -->
                    <li><a href="/docs">Документы</a></li>
			      </ul>
			    </div>
			  </nav>
			  <ul class="sidenav" id="mobile-demo">
                <li><a href="/">Главная</a></li>
			        <li><a href="/ssoboy">Что взять с собой?</a></li>
			        <li><a href="/photovideo">Фото/Видео</a></li>
                	<!-- <li><a href="/rasp">Расписание</a></li> -->
                	<li><a href="/docs">Документы</a></li>
			         @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Вход</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Регистрация</a>
            </li>
                @else
            <div class="one">
            <ul class="topmenu">
            <li class="nav-item"><a href="/home">Личный кабинет</a>
            
            <li class="">
              <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Выйти
                                        </a>
            </li>
            
            </li>
            </ul>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
            </div>                         
                @endguest 
			  </ul>
				</div>
    		</div>
   
    	</section>