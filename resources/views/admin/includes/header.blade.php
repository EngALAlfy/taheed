<header class="app-header">
    <div class="container-fluid">
        <div class="row gutters">
            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-3 col-4">
                <a class="mini-nav-btn" href="#" id="app-side-mini-toggler">
                    <i class="icon-menu5"></i>
                </a>
                <a href="#app-side" data-toggle="onoffcanvas" class="onoffcanvas-toggler" aria-expanded="true">
                    <i class="icon-chevron-thin-left"></i>
                </a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-4">
                <a href="{{route("admin.home")}}" class="logo">
                </a>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-3 col-4">
                <ul class="header-actions">
                    <!-- Language Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i
                                class="fi fi-{{ strtolower(str_replace(\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale() . '_', '', \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocaleRegional())) }}"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-left p-0">
                            @foreach (\Mcamara\LaravelLocalization\Facades\LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <a @class([
                                'dropdown-item',
                                'active' =>
                                    \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale() ==
                                    $localeCode,
                            ]) rel="alternate" hreflang="{{ $localeCode }}"
                                   href="{{ \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    <i
                                        class="fi fi-{{ strtolower(str_replace($localeCode . '_', '', $properties['regional'])) }} mr-2"></i>{{ $properties['native'] }}
                                </a>
                            @endforeach
                        </div>
                    </li>

                    <li class="dropdown">
                        <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown"
                           aria-haspopup="true">
                            <img class="avatar" src="{{asset("assets/admin/img/user.png")}}" alt="{{auth()->user()->name}}"/>
                            <span class="user-name">{{auth()->user()->name}}</span>
                            <i class="icon-chevron-small-down"></i>
                        </a>
                        <div class="dropdown-menu lg dropdown-menu-right" aria-labelledby="userSettings">
                            <ul class="user-settings-list">
                                <li class="col">
                                    <a href="{{route("admin.profile.index")}}">
                                        <div class="icon">
                                            <i class="icon-account_circle"></i>
                                        </div>
                                        <p>{{__('Profile')}}</p>
                                    </a>
                                </li>
                            </ul>
                            <div class="logout-btn">
                                <a href="{{route("logout")}}" class="btn btn-primary">Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
