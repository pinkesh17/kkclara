 <header class="header-area bg-white mb-4 rounded-bottom-15" id="header-area">
    <div class="row align-items-center">
        <div class="col-lg-4 col-sm-6">
            <div class="left-header-content">
                <ul class="d-flex align-items-center ps-0 mb-0 list-unstyled justify-content-center justify-content-sm-start">
                    <li>
                        <button class="header-burger-menu bg-transparent p-0 border-0" id="header-burger-menu">
                            <span class="material-symbols-outlined">menu</span>
                        </button>
                    </li>
                    <li>
                        <form class="src-form position-relative">
                            <input type="text" class="form-control" placeholder="Search here.....">
                            <button type="submit" class="src-btn position-absolute top-50 end-0 translate-middle-y bg-transparent p-0 border-0">
                                <span class="material-symbols-outlined">search</span>
                            </button>
                        </form>
                    </li>
                    <li>
                        <div class="dropdown notifications apps">
                            <button class="btn btn-secondary border-0 p-0 position-relative" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="material-symbols-outlined">apps</span>
                            </button>
                            <div class="dropdown-menu dropdown-lg p-0 border-0 py-4 px-3 max-h-312" data-simplebar>
                                <div class="notification-menu d-flex flex-wrap justify-content-between gap-4">
                                    <a href="https://www.figma.com/" target="_blank" class="dropdown-item p-0 text-center">
                                        <img src="{{asset('admin/assets/images/figma.svg')}}" class="wh-25" alt="united-states">
                                        <span>Figma</span>
                                    </a>
                                    <a href="https://www.dribbble.com/" target="_blank" class="dropdown-item p-0 text-center">
                                        <img src="{{asset('admin/assets/images/dribbble.svg')}}" class="wh-25" alt="united-states">
                                        <span>Dribbble</span>
                                    </a>
                                    <a href="https://www.spotify.com/" target="_blank" class="dropdown-item p-0 text-center">
                                        <img src="{{asset('admin/assets/images/spotify.svg')}}" class="wh-25" alt="united-states">
                                        <span>Spotify</span>
                                    </a>
                                    <a href="https://www.github.com/" target="_blank" class="dropdown-item p-0 text-center">
                                        <img src="{{asset('admin/assets/images/github.svg')}}" class="wh-25" alt="united-states">
                                        <span>Github</span>
                                    </a>
                                    <a href="https://www.google.com/drive/" target="_blank" class="dropdown-item p-0 text-center">
                                        <img src="{{asset('admin/assets/images/gdrive.svg')}}" class="wh-25" alt="united-states">
                                        <span>GDrive</span>
                                    </a>
                                    <a href="https://www.trello.com/" target="_blank" class="dropdown-item p-0 text-center">
                                        <img src="{{asset('admin/assets/images/trello.svg')}}" class="wh-25" alt="united-states">
                                        <span>Trello</span>
                                    </a>
                                    <a href="https://www.slak.com/" target="_blank" class="dropdown-item p-0 text-center">
                                        <img src="{{asset('admin/assets/images/slak.svg')}}" class="wh-25" alt="united-states">
                                        <span>Slak</span>
                                    </a>
                                    <a href="https://www.pinterest.com/" target="_blank" class="dropdown-item p-0 text-center">
                                        <img src="{{asset('admin/assets/images/pinterest.svg')}}" class="wh-25" alt="united-states">
                                        <span>Pinterest</span>
                                    </a>
                                    <a href="https://www.facebook.com/" target="_blank" class="dropdown-item p-0 text-center">
                                        <img src="{{asset('admin/assets/images/facebook.svg')}}" class="wh-25" alt="united-states">
                                        <span>Facebook</span>
                                    </a>
                                    <a href="https://www.linkedin.com/" target="_blank" class="dropdown-item p-0 text-center">
                                        <img src="{{asset('admin/assets/images/linkedin.svg')}}" class="wh-25" alt="united-states">
                                        <span>Linkedin</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-8 col-sm-6">
            <div class="right-header-content mt-2 mt-sm-0">
                <ul class="d-flex align-items-center justify-content-center justify-content-sm-end ps-0 mb-0 list-unstyled">

                    <li class="header-right-item" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="View website">
                        <a href="{{url('')}}"><span><i class="material-symbols-outlined">home</i></span> </a>
                    </li>

                    <li class="header-right-item" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="View Admin Section">
                        <a href="{{route('dashboard')}}"><span><i class="material-symbols-outlined">manage_accounts</i></span> </a>
                    </li>

                   

                    {{-- 
                    <li class="header-right-item">
                        <div class="light-dark">
                            <button class="switch-toggle settings-btn dark-btn p-0 bg-transparent border-0" id="switch-toggle">
                                <span class="dark"><i class="material-symbols-outlined">light_mode</i></span> 
                                <span class="light"><i class="material-symbols-outlined">dark_mode</i></span>
                            </button>
                        </div>
                    </li>
                    <li class="header-right-item">
                        <div class="dropdown notifications language">
                            <button class="btn btn-secondary dropdown-toggle border-0 p-0 position-relative" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="material-symbols-outlined">translate</span>
                            </button>
                            <div class="dropdown-menu dropdown-lg p-0 border-0 dropdown-menu-end">
                                <span class="fw-semibold fs-15 text-secondary title">Choose Language</span>
                                <div class="max-h-275" data-simplebar>
                                    <div class="notification-menu">
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="{{asset('admin/assets/images/usa.svg')}}" class="wh-30 rounded-circle" alt="united-states">
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <span class="text-secondary fw-medium fs-14">English</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="notification-menu">
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="{{asset('admin/assets/images/canada.svg')}}" class="wh-30 rounded-circle" alt="spain">
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <span class="text-secondary fw-medium fs-14">Canada</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="notification-menu">
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="{{asset('admin/assets/images/germany.svg')}}" class="wh-30 rounded-circle" alt="spain">
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <span class="text-secondary fw-medium fs-14">Germany</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="notification-menu">
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="{{asset('admin/assets/images/portugal.svg')}}" class="wh-30 rounded-circle" alt="portugal">
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <span class="text-secondary fw-medium fs-14">Portugal</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="notification-menu mb-0">
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="{{asset('admin/assets/images/spain.svg')}}" class="wh-30 rounded-circle" alt="spain">
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <span class="text-secondary fw-medium fs-14">Spain</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="header-right-item">
                        <button class="fullscreen-btn bg-transparent p-0 border-0" id="fullscreen-button">
                            <i class="material-symbols-outlined text-body">fullscreen</i>
                        </button>
                    </li>
                    <li class="header-right-item">
                        <div class="dropdown notifications noti">
                            <button class="btn btn-secondary border-0 p-0 position-relative badge" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="material-symbols-outlined">notifications</span>
                            </button>
                            <div class="dropdown-menu dropdown-lg p-0 border-0 p-0 dropdown-menu-end">
                                <div class="d-flex justify-content-between align-items-center title">
                                    <span class="fw-semibold fs-15 text-secondary">Notifications <span class="fw-normal text-body fs-14">(03)</span></span>
                                    <button class="p-0 m-0 bg-transparent border-0 fs-14 text-primary">Clear All</button>
                                </div> 

                                <div class="max-h-217" data-simplebar>
                                    <div class="notification-menu">
                                        <a href="notification.html" class="dropdown-item">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <i class="material-symbols-outlined text-primary">sms</i>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <p>You have requested to <span class="fw-semibold">withdrawal</span></p>
                                                    <span class="fs-13">2 hrs ago</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="notification-menu unseen">
                                        <a href="notification.html" class="dropdown-item">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <i class="material-symbols-outlined text-info">person</i>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <p>A new user added in Trezo</p>
                                                    <span class="fs-13">3 hrs ago</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="notification-menu">
                                        <a href="notification.html" class="dropdown-item">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <i class="material-symbols-outlined text-success">mark_email_unread</i>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <p>You have requested to <span class="fw-semibold">withdrawal</span></p>
                                                    <span class="fs-13">1 day ago</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="notification-menu">
                                        <a href="notification.html" class="dropdown-item">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <i class="material-symbols-outlined text-primary">sms</i>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <p>You have requested to <span class="fw-semibold">withdrawal</span></p>
                                                    <span class="fs-13">2 hrs ago</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="notification-menu unseen">
                                        <a href="notification.html" class="dropdown-item">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <i class="material-symbols-outlined text-info">person</i>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <p>A new user added in Trezo</p>
                                                    <span class="fs-13">3 hrs ago</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="notification-menu">
                                        <a href="notification.html" class="dropdown-item">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <i class="material-symbols-outlined text-success">mark_email_unread</i>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <p>You have requested to <span class="fw-semibold">withdrawal</span></p>
                                                    <span class="fs-13">1 day ago</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <a href="notification.html" class="dropdown-item text-center text-primary d-block view-all fw-medium rounded-bottom-3">
                                    <span>See All Notifications </span>
                                </a>
                            </div>
                        </div>
                    </li>
                    --}}
                    <li class="header-right-item">
                        <div class="dropdown admin-profile">
                            <div class="d-xxl-flex align-items-center bg-transparent border-0 text-start p-0 cursor dropdown-toggle" data-bs-toggle="dropdown">
                                <div class="flex-shrink-0">
                                    <img class="rounded-circle wh-40 administrator" src="{{asset('admin/assets/images/administrator.jpg')}}" alt="admin">
                                </div>
                            </div>

                            <div class="dropdown-menu border-0 bg-white dropdown-menu-end">
                                <div class="d-flex align-items-center info">
                                    <div class="flex-shrink-0">
                                        <img class="rounded-circle wh-30 administrator" src="{{asset('admin/assets/images/administrator.jpg')}}" alt="admin">
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h3 class="fw-medium">{{auth()->user()->first_name}} {{auth()->user()->first_last}}</h3>
                                    </div>
                                </div>
                                <ul class="admin-link ps-0 mb-0 list-unstyled">
                                    <li>
                                        <a class="dropdown-item admin-item-link d-flex align-items-center text-body" href="my-profile.html">
                                            <i class="material-symbols-outlined">account_circle</i>
                                            <span class="ms-2">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item admin-item-link d-flex align-items-center text-body" href="chat.html">
                                            <i class="material-symbols-outlined">chat</i>
                                            <span class="ms-2">Messages</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item admin-item-link d-flex align-items-center text-body" href="to-do-list.html">
                                            <i class="material-symbols-outlined">format_list_bulleted </i>
                                            <span class="ms-2">My Task</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item admin-item-link d-flex align-items-center text-body" href="checkout.html">
                                            <i class="material-symbols-outlined">credit_card </i>
                                            <span class="ms-2">Billing</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="admin-link ps-0 mb-0 list-unstyled">
                                    <li>
                                        <a class="dropdown-item admin-item-link d-flex align-items-center text-body" href="settings.html">
                                            <i class="material-symbols-outlined">settings </i>
                                            <span class="ms-2">Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item admin-item-link d-flex align-items-center text-body" href="tickets.html">
                                            <i class="material-symbols-outlined">support</i>
                                            <span class="ms-2">Support</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item admin-item-link d-flex align-items-center text-body" href="lock-screen.html">
                                            <i class="material-symbols-outlined">lock</i>
                                            <span class="ms-2">Lock Screen</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item admin-item-link d-flex align-items-center text-body" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="material-symbols-outlined">logout</i>
                                            <span class="ms-2">Logout</span>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="header-right-item">
                        <button class="theme-settings-btn p-0 border-0 bg-transparent" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                            <i class="material-symbols-outlined" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Click On Theme Settings">settings</i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>