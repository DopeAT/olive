<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        <!-- Nav Item - Alerts -->
        @if(\Request::route()->getName() === 'dashboard')
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell fa-fw"></i>
                    <!-- Counter - Alerts -->
{{--                    @if($notifications['orders']['total'] + $notifications['newsletter']['total'] > 0)--}}
{{--                        <span class="badge badge-danger badge-counter">{{ $notifications['orders']['total'] + $notifications['newsletter']['total'] }}</span>--}}
{{--                    @endif--}}
                    @if($notifications['newsletter']['total'] > 0)
                        <span class="badge badge-danger badge-counter">{{ $notifications['newsletter']['total'] }}</span>
                    @endif
                </a>
                <!-- Dropdown - Alerts -->
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">
                        Alerts Center
                    </h6>
{{--                    @if($notifications['orders']['total'] + $notifications['newsletter']['total'] === 0)--}}

                    @if($notifications['newsletter']['total'] === 0)
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <div>
                                <span class="font-weight-bold">No Notifications Available</span>
                            </div>
                        </a>
                    @else
{{--                        @if($notifications['orders']['total'] > 0)--}}
{{--                            <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.orders.index') }}">--}}
{{--                                <div class="mr-3">--}}
{{--                                    <div class="icon-circle bg-primary">--}}
{{--                                        <i class="fas fa-file-alt text-white"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div>--}}
{{--                                    <span class="font-weight-bold">{{ $notifications['orders']['total'] }} New Orders</span>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        @endif--}}

                        @if($notifications['newsletter']['total'] > 0)
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.newsletter.index') }}">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="font-weight-bold">{{ $notifications['newsletter']['total'] }} New Newsletter</span>
                                </div>
                            </a>
                        @endif
                    @endif
                </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-envelope fa-fw"></i>
                    <!-- Counter - Messages -->
                    <span class="badge badge-danger badge-counter">{{ $notifications['messages']['total'] }}</span>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                    <h6 class="dropdown-header">
                        Messages Inbox
                    </h6>

                    @forelse($notifications['messages']['data'] as $messagesData)
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.messages.show', $messagesData->id) }}">
                            <div class="dropdown-list-image mr-3">
                                <img class="rounded-circle" src="https://uybor.uz/borless/uybor/img/user-images/no-avatar.png" alt="">
                                <div class="status-indicator bg-success"></div>
                            </div>
                            <div class="font-weight-bold">
                                <div class="text-truncate">{!! substr($messagesData->message, 0, 40) !!}</div>
                                <div class="small text-gray-500">{{ $messagesData->name }} · {{ $messagesData->created_at->diffForHumans() }}</div>
                            </div>
                        </a>
                    @empty
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <span>No new Messages</span>
                        </a>
                    @endforelse


                    <a class="dropdown-item text-center small text-gray-500" href="{{ route('admin.messages.index') }}">Read More Messages</a>
                </div>
            </li>
        @endif

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Alex Tser</span>
                <img class="img-profile rounded-circle" src="https://uybor.uz/borless/uybor/img/user-images/no-avatar.png">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->
