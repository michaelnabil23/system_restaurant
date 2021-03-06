<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard.welcome') }}" class="brand-link">
        <img src="{{ setting('logo_path') }}" alt="Logo" class="brand-image" style="border-radius: .25rem;opacity: .8">
        <span class="brand-text font-weight-light">{{ setting('name') }}</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('default.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item"><a class="nav-link {{ Route::is('dashboard.welcome') ? 'active' : ''  }}"
                                        href="{{ route('dashboard.welcome') }}"><i
                            class="nav-icon fa fa-home"></i>
                        <p> @lang('site.dashboard')</p></a></li>
                @php($user = Auth::user())
                @if ($user->hasAnyPermission(['read_categories','create_categories']))
                    <li
                        class="nav-item has-treeview {{ Route::is('dashboard.categories.index') ||  Route::is('dashboard.categories.create')  ? 'menu-open' : ''  }}">
                        <a href="#"
                           class="nav-link {{ Route::is('dashboard.categories.index') ||  Route::is('dashboard.categories.create')  ? 'active' : ''  }}">
                            <i class="nav-icon fa fa-list-alt"></i>
                            <p>
                                @lang('site.categories')
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('read_categories')
                                <li class="nav-item">
                                    <a href="{{ route('dashboard.categories.index') }}"
                                       class="nav-link {{ Route::is('dashboard.categories.index') ? 'active' : ''  }}">
                                        <i class="fa fa-list-alt nav-icon"></i>
                                        <p>@lang('site.categories')</p>
                                    </a>
                                </li>
                            @endcan
                            @can('create_categories')
                                <li class="nav-item">
                                    <a href="{{ route('dashboard.categories.create') }}"
                                       class="nav-link {{ Route::is('dashboard.categories.create') ? 'active' : ''  }}">
                                        <i class="fa fa-plus nav-icon"></i>
                                        <p>@lang('site.add')</p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endif

                @if ($user->hasAnyPermission(['read_products','create_products']))
                    <li
                        class="nav-item has-treeview {{ Route::is('dashboard.products.index') ||  Route::is('dashboard.products.create')  ? 'menu-open' : ''  }}">
                        <a href="#"
                           class="nav-link {{ Route::is('dashboard.products.index') ||  Route::is('dashboard.products.create')  ? 'active' : ''  }}">
                            <i class="nav-icon fa fa-th"></i>
                            <p>
                                @lang('site.products')
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('read_products')
                                <li class="nav-item">
                                    <a href="{{ route('dashboard.products.index') }}"
                                       class="nav-link {{ Route::is('dashboard.products.index') ? 'active' : ''  }}">
                                        <i class="fa fa-th nav-icon"></i>
                                        <p>@lang('site.products')</p>
                                    </a>
                                </li>
                            @endcan
                            @can('create_products')
                                <li class="nav-item">
                                    <a href="{{ route('dashboard.products.create') }}"
                                       class="nav-link {{ Route::is('dashboard.products.create') ? 'active' : ''  }}">
                                        <i class="fa fa-plus nav-icon"></i>
                                        <p>@lang('site.add')</p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endif
                @if ($user->hasAnyPermission(['read_orders','create_orders']))
                    <li
                        class="nav-item has-treeview {{ Route::is('dashboard.orders.index') ||  Route::is('dashboard.orders.create')  ? 'menu-open' : ''  }}">
                        <a href="#"
                           class="nav-link {{ Route::is('dashboard.orders.index') ||  Route::is('dashboard.orders.create')  ? 'active' : ''  }}">
                            <i class="nav-icon fa fa-shopping-bag"></i>
                            <p>
                                @lang('site.orders')
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('read_orders')
                                <li class="nav-item">
                                    <a href="{{ route('dashboard.orders.index') }}"
                                       class="nav-link {{ Route::is('dashboard.orders.index') ? 'active' : ''  }}">
                                        <i class="fa fa-shopping-bag nav-icon"></i>
                                        <p>@lang('site.orders')</p>
                                    </a>
                                </li>
                            @endcan
                            @can('create_orders')
                                <li class="nav-item">
                                    <a href="{{ route('dashboard.orders.create') }}"
                                       class="nav-link {{ Route::is('dashboard.orders.create') ? 'active' : ''  }}">
                                        <i class="fa fa-plus nav-icon"></i>
                                        <p>@lang('site.add')</p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endif

                @if ($user->hasAnyPermission(['read_drivers','create_drivers']))
                    <li
                        class="nav-item has-treeview {{ Route::is('dashboard.drivers.index') ||  Route::is('dashboard.drivers.create')  ? 'menu-open' : ''  }}">
                        <a href="#"
                           class="nav-link {{ Route::is('dashboard.drivers.index') ||  Route::is('dashboard.drivers.create')  ? 'active' : ''  }}">
                            <i class="nav-icon fa fa-th"></i>
                            <p>
                                @lang('site.drivers')
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('read_drivers')
                                <li class="nav-item">
                                    <a href="{{ route('dashboard.drivers.index') }}"
                                       class="nav-link {{ Route::is('dashboard.drivers.index') ? 'active' : ''  }}">
                                        <i class="fa fa-th nav-icon"></i>
                                        <p>@lang('site.drivers')</p>
                                    </a>
                                </li>
                            @endcan
                            @can('create_drivers')
                                <li class="nav-item">
                                    <a href="{{ route('dashboard.drivers.create') }}"
                                       class="nav-link {{ Route::is('dashboard.drivers.create') ? 'active' : ''  }}">
                                        <i class="fa fa-plus nav-icon"></i>
                                        <p>@lang('site.add')</p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endif
                @if ($user->hasAnyPermission(['read_users','create_users']))
                    <li
                        class="nav-item has-treeview {{ Route::is('dashboard.users.index') ||  Route::is('dashboard.users.create')  ? 'menu-open' : ''  }}">
                        <a href="#"
                           class="nav-link {{ Route::is('dashboard.users.index') ||  Route::is('dashboard.users.create')  ? 'active' : ''  }}">
                            <i class="nav-icon fa fa-users"></i>
                            <p>
                                @lang('site.users')
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('read_users')
                                <li class="nav-item">
                                    <a href="{{ route('dashboard.users.index') }}"
                                       class="nav-link {{ Route::is('dashboard.users.index') ? 'active' : ''  }}">
                                        <i class="fa fa-users nav-icon"></i>
                                        <p>@lang('site.users')</p>
                                    </a>
                                </li>
                            @endcan
                            @can('create_users')
                                <li class="nav-item">
                                    <a href="{{ route('dashboard.users.create') }}"
                                       class="nav-link {{ Route::is('dashboard.users.create') ? 'active' : ''  }}">
                                        <i class="fa fa-plus nav-icon"></i>
                                        <p>@lang('site.add')</p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endif

                @if (Auth::id() == 1)
                    <li class="nav-item"><a class="nav-link {{ Route::is('dashboard.reports.index') ? 'active' : ''  }}"
                                            href="{{ route('dashboard.reports.index') }}"><i
                                class="nav-icon fa fa-file"></i>
                            <p> @lang('site.reports')</p></a></li>
                    <li class="nav-item"><a class="nav-link {{ Route::is('dashboard.setting.index') ? 'active' : '' }}"
                                            href="{{ route('dashboard.setting.index') }}"><i
                                class="nav-icon fa fa-cogs"></i>
                            <p> @lang('site.setting')</p></a></li>
                    <li class="nav-item"><a class="nav-link {{ Route::is('dashboard.backups.index') ? 'active' : '' }}"
                                            href="{{ route('dashboard.backups.index') }}"><i
                                class="nav-icon fa fa-database"></i>
                            <p> @lang('site.backups')</p></a></li>
                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
