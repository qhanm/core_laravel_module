<?php
//dd(auth()->user()->can(['user.list', 'user.create']));
?>
<div class="vertical-menu">

    <div data-simplebar="" class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                @if(auth()->user()->can(['user.list', 'user.create']))
                    <li>
                        <a href="javascript: void(0);" class="waves-effect">
                            <i class="bx bx-home-circle"></i>
                            <span>{{ __('backend::sidebar.account') }}</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('backend.user.index') }}">{{ __('backend::sidebar.users') }}</a></li>
                            <li><a href="{{ route('backend.role.index') }}">{{ __('backend::sidebar.roles') }}</a></li>
                        </ul>
                    </li>
                @endif
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-home-circle"></i><span class="badge badge-pill badge-info float-right">03</span>
                        <span>Dashboards</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="index.html">Default</a></li>
                        <li><a href="dashboard-saas.html">Saas</a></li>
                        <li><a href="dashboard-crypto.html">Crypto</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Layouts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="layouts-horizontal.html">Horizontal</a></li>
                        <li><a href="layouts-light-sidebar.html">Light Sidebar</a></li>
                        <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                        <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                        <li><a href="layouts-boxed.html">Boxed Width</a></li>
                        <li><a href="layouts-preloader.html">Preloader</a></li>
                        <li><a href="layouts-colored-sidebar.html">Colored Sidebar</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
