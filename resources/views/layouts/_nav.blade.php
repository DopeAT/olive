<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top" id="nav">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="/images/242183095_4376096639173756_3833338272920078307_n.jpg" width="60px"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">{{ __('About') }} Olive Power</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link theme-color font-weight-bold" href="{{ route('order') }}">{{ __('ORDER') }}</a>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{ route('blog.index') }}">{{ __('Blog') }}</a>--}}
{{--                </li>--}}
                <li class="nav-item dropdown">
                    <a id="navbarDropdown"
                       class="nav-link dropdown-toggle text-uppercase"
                       href="#"
                       role="button"
                       data-toggle="dropdown"
                       aria-haspopup="true"
                       aria-expanded="false"
                       v-pre
                    >
                        @php
                        $localeCurrent = Config::get('app.locale');
                        $countryCode = 'ru';

                        if ($localeCurrent === 'el') {
                          $countryCode = 'gr';
                        } else if ($localeCurrent === 'en') {
                          $countryCode = 'gb';
                        }
                        @endphp
                        <span class="flag-icon flag-icon-{{ $countryCode }}"></span>
                        {{ $countryCode }}
                        <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right m-0 p-0" aria-labelledby="navbarDropdown">
                        @foreach (['el', 'en', 'ru'] as $locale)
                            <a class="dropdown-item"
                               href="{{ route(Illuminate\Support\Facades\Route::currentRouteName(), [], true, $locale) }}"
                            >
                                @php
                                    $country = 'ru';

                                    if ($locale === 'el') {
                                      $country = 'gr';
                                    } else if ($locale === 'en') {
                                      $country = 'gb';
                                    }
                                @endphp
                                <span class="flag-icon flag-icon-{{ $country }}"></span> {{ strtoupper($locale) }}
                            </a>
                        @endforeach
                    </div>
                </li>
{{--                @guest--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                    </li>--}}
{{--                @else--}}
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"--}}
{{--                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                            {{ Auth::user()->firstname. ' ' .Auth::user()->lastname }} <span class="caret"></span>--}}
{{--                        </a>--}}

{{--                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--                            <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>--}}
{{--                            <hr>--}}
{{--                            <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                               onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                {{ __('Logout') }}--}}
{{--                            </a>--}}

{{--                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                @csrf--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                @endguest--}}
            </ul>
        </div>
    </div>
</nav>
