@extends('layouts.admin')

@section('body')
    <body class="page-body">

    <div class="page-container">
        <div class="sidebar-menu toggle-others fixed">

            <div class="sidebar-menu-inner">

                <header class="logo-env">

                    <!-- logo -->
                    <div class="logo">
                        <a href="{{ route('admin.home') }}" class="logo-expanded">
                            <img src="{{ asset('admin/images/logo@2x.png') }}" width="80" alt="" />
                        </a>

                        <a href="{{ route('admin.home') }}" class="logo-collapsed">
                            <img src="{{ asset('admin/images/logo-collapsed@2x.png') }}" width="40" alt="" />
                        </a>
                    </div>

                    <!-- This will toggle the mobile menu and will be visible only on mobile devices -->
                    <div class="mobile-menu-toggle visible-xs">
                        <a href="#" data-toggle="user-info-menu">
                            <i class="fa-bell-o"></i>
                            <span class="badge badge-success">7</span>
                        </a>

                        <a href="#" data-toggle="mobile-menu">
                            <i class="fa-bars"></i>
                        </a>
                    </div>

                </header>



                <ul id="main-menu" class="main-menu">
                    <li @if(isset($activeTab) && $activeTab == 'home') class="active opened active" @endif>
                        <a href="{{ route('admin.home') }}">
                            <i class="linecons-cloud"></i>
                            <span class="title">数据统计</span>
                        </a>
                    </li>
                    {{--<li @if(isset($activeTab) && ($activeTab == 'withdraw' || $activeTab == 'product.settlement' || $activeTab == 'contract.settlement')) class="active opened active" @endif>--}}
                        {{--<a href="{{ route('admin.withdraw') }}">--}}
                            {{--<i class="linecons-wallet"></i>--}}
                            {{--<span class="title">财务管理</span>--}}
                        {{--</a>--}}
                        {{--<ul>--}}
                            {{--<li @if(isset($activeTab) && $activeTab == 'product.settlement') class="active" @endif>--}}
                                {{--<a href="{{ route('product.settlement') }}">--}}
                                    {{--<span class="title">产品收益</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li @if(isset($activeTab) && $activeTab == 'contract.settlement') class="active" @endif>--}}
                                {{--<a href="{{ route('contract.settlement') }}">--}}
                                    {{--<span class="title">合约结算</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li @if(isset($activeTab) && $activeTab == 'withdraw') class="active" @endif>--}}
                                {{--<a href="{{ route('admin.withdraw') }}">--}}
                                    {{--<span class="title">提现列表</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li @if(isset($activeTab) && ($activeTab == 'banner' || $activeTab == 'banner.create' || $activeTab == 'banner.edit' || $activeTab == 'notify' || $activeTab == 'notify.create' || $activeTab == 'notify.edit')) class="active opened active" @endif>--}}
                        {{--<a href="{{ route('admin.banner') }}">--}}
                            {{--<i class="linecons-doc"></i>--}}
                            {{--<span class="title">内容管理</span>--}}
                        {{--</a>--}}
                        {{--<ul>--}}
                            {{--<li @if(isset($activeTab) && $activeTab == 'banner') class="active" @endif>--}}
                                {{--<a href="{{ route('admin.banner') }}">--}}
                                    {{--<span class="title">Banner管理</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li @if(isset($activeTab) && $activeTab == 'banner.create') class="active" @endif>--}}
                                {{--<a href="{{ route('admin.banner.create') }}">--}}
                                    {{--<span class="title">添加Banner</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li @if(isset($activeTab) && $activeTab == 'notify') class="active" @endif>--}}
                                {{--<a href="{{ route('admin.notify') }}">--}}
                                    {{--<span class="title">公告管理</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li @if(isset($activeTab) && $activeTab == 'notify.create') class="active" @endif>--}}
                                {{--<a href="{{ route('admin.notify.create') }}">--}}
                                    {{--<span class="title">添加公告</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li @if(isset($activeTab) && ($activeTab=='product' || $activeTab=='product.add' || $activeTab=='product.edit')) class="active opened active" @endif>--}}
                        {{--<a href="{{ route('admin.product') }}">--}}
                            {{--<i class="linecons-inbox"></i>--}}
                            {{--<span class="title">产品管理</span>--}}
                        {{--</a>--}}
                        {{--<ul>--}}
                            {{--<li @if(isset($activeTab) && $activeTab == 'product') class="active" @endif>--}}
                                {{--<a href="{{ route('admin.product') }}">--}}
                                    {{--<span class="title">产品列表</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li @if(isset($activeTab) && $activeTab == 'product.add') class="active" @endif>--}}
                                {{--<a href="{{ route('admin.product.add') }}">--}}
                                    {{--<span class="title">上架产品</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li @if(isset($activeTab) && ($activeTab == 'contracts' || $activeTab == 'contracts.create' || $activeTab == 'contracts.edit')) class="active opened active" @endif>--}}
                        {{--<a href="{{ route('contracts.index') }}">--}}
                            {{--<i class="linecons-note"></i>--}}
                            {{--<span class="title">合约管理</span>--}}
                        {{--</a>--}}
                        {{--<ul>--}}
                            {{--<li @if(isset($activeTab) && $activeTab == 'contracts') class="active" @endif>--}}
                                {{--<a href="{{ route('contracts.index') }}">--}}
                                    {{--<span class="title">合约列表</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li @if(isset($activeTab) && $activeTab == 'contracts.create') class="active" @endif>--}}
                                {{--<a href="{{ route('contracts.create') }}">--}}
                                    {{--<span class="title">上架合约</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li @if(isset($activeTab) && ($activeTab == 'job' || $activeTab == 'message')) class="active opened active" @endif>--}}
                        {{--<a href="{{ route('admin.job') }}">--}}
                            {{--<i class="linecons-paper-plane"></i>--}}
                            {{--<span class="title">工单管理</span>--}}
                        {{--</a>--}}
                        {{--<ul>--}}
                            {{--<li @if(isset($activeTab) && $activeTab == 'job') class="active" @endif>--}}
                                {{--<a href="{{ route('admin.job') }}">--}}
                                    {{--<span class="title">用户工单</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li @if(isset($activeTab) && $activeTab == 'message') class="active" @endif>--}}
                                {{--<a href="{{ route('admin.message') }}">--}}
                                    {{--<span class="title">留言管理</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li @if(isset($activeTab) && $activeTab == 'question') class="active" @endif>--}}
                                {{--<a href="{{ route('admin.job') }}">--}}
                                    {{--<span class="title">FAQ配置</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li @if(isset($activeTab) && ($activeTab == 'user' || $activeTab=='user.details')) class="active opened active" @endif>--}}
                        {{--<a href="{{ route('admin.user') }}">--}}
                            {{--<i class="linecons-user"></i>--}}
                            {{--<span class="title">用户管理</span>--}}
                        {{--</a>--}}
                        {{--<ul>--}}
                            {{--<li @if(isset($activeTab) && $activeTab == 'user') class="active" @endif>--}}
                                {{--<a href="{{ route('admin.user') }}">--}}
                                    {{--<span class="title">用户列表</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li @if(isset($activeTab) && ($activeTab == 'currency' || $activeTab=='currency.create')) class="active opened active" @endif>--}}
                        {{--<a href="{{ route('admin.currency') }}">--}}
                            {{--<i class="linecons-money"></i>--}}
                            {{--<span class="title">币种管理</span>--}}
                        {{--</a>--}}
                        {{--<ul>--}}
                            {{--<li @if(isset($activeTab) && $activeTab == 'currency') class="active" @endif>--}}
                                {{--<a href="{{ route('admin.currency') }}">--}}
                                    {{--<span class="title">币种列表</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li @if(isset($activeTab) && $activeTab == 'currency.create') class="active" @endif>--}}
                                {{--<a href="{{ route('currency.create') }}">--}}
                                    {{--<span class="title">添加币种</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li @if(isset($activeTab) && $activeTab == 'permission') class="active opened active" @endif>--}}
                        {{--<a href="{{ route('admin.permission') }}">--}}
                            {{--<i class="linecons-lock"></i>--}}
                            {{--<span class="title">权限管理</span>--}}
                        {{--</a>--}}
                        {{--<ul>--}}
                            {{--<li @if(isset($activeTab) && $activeTab == 'permission') class="active" @endif>--}}
                                {{--<a href="{{ route('admin.permission') }}">--}}
                                    {{--<span class="title">角色管理</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li @if(isset($activeTab) && $activeTab == 'admins') class="active" @endif>--}}
                                {{--<a href="{{ route('admin.permission') }}">--}}
                                    {{--<span class="title">后台账户</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                </ul>

            </div>

        </div>

        <div class="main-content">

            <!-- User Info, Notifications and Menu Bar -->
            <nav class="navbar user-info-navbar" role="navigation">

                <!-- Left links for user info navbar -->
                <ul class="user-info-menu left-links list-inline list-unstyled">

                    <li class="hidden-sm hidden-xs">
                        <a href="#" data-toggle="sidebar">
                            <i class="fa-bars"></i>
                        </a>
                    </li>

                </ul>


                <!-- Right links for user info navbar -->
                <ul class="user-info-menu right-links list-inline list-unstyled">

                    <li class="dropdown user-profile">
                        <a href="#" data-toggle="dropdown">
                            <img src="{{ asset('admin/images/user-4.png') }}" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
                            <span>
								{{ auth('admin')->user()->name }}
								<i class="fa-angle-down"></i>
							</span>
                        </a>

                        <ul class="dropdown-menu user-profile-menu list-unstyled">
                            <li>
                                <a href="#help">
                                    <i class="fa-info"></i>
                                    帮助
                                </a>
                            </li>
                            <li class="last">
                                <a href="{{ route('admin.logout') }}">
                                    <i class="fa-lock"></i>
                                    退出
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </nav>

            @yield('top')

            @if(count($errors) > 0)
            <div class="col-md-12">
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only">Close</span>
                    </button>

                    <strong>错误提示 !</strong>&nbsp;&nbsp;&nbsp;
                    @foreach ($errors->all() as $error){{ $error }}@endforeach
                </div>
            </div>
            @endif

            @yield('content')

            <!-- Main Footer -->
            <footer class="main-footer sticky footer-type-1">

                <div class="footer-inner">

                    <!-- Add your copyright text here -->
                    <div class="footer-text">
                        &copy; 2018
                        <strong>Jeecloud</strong>
                        友情合作 <a href="http://ulord.jeeclooud.com/" target="_blank" title="Jeecloud">ULORD吉池-Jeepool</a> 和 <a href="http://xdag.jeepool.com/" title="吉池-Jeepool" target="_blank">XDAG吉池-Jeepool</a>
                    </div>


                    <!-- Go to Top Link, just add rel="go-top" to any link to add this functionality -->
                    <div class="go-up">

                        <a href="#" rel="go-top">
                            <i class="fa-angle-up"></i>
                        </a>

                    </div>

                </div>

            </footer>
        </div>

    </div>

    <script src="{{ asset('/org/layer/layer.js') }}"></script>

@endsection