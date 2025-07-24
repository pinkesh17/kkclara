<!-- Start Preloader Area -->
<div class="preloader" id="preloader">
    <div class="preloader">
        <div class="waviy position-relative">
            <span class="d-inline-block">T</span>
            <span class="d-inline-block">R</span>
            <span class="d-inline-block">E</span>
            <span class="d-inline-block">Z</span>
            <span class="d-inline-block">O</span>
        </div>
    </div>
</div>
<!-- End Preloader Area -->

<!-- Start Sidebar Area -->
<div class="sidebar-area" id="sidebar-area">
    <div class="logo position-relative">
        <a href="{{route('webadmin')}}" class="d-block text-decoration-none position-relative">
            <img src="{{asset('admin/assets/images/logo-icon.png')}}" alt="logo-icon">
            <span class="logo-text fw-bold text-dark">Trezo</span>
        </a>
        <button class="sidebar-burger-menu bg-transparent p-0 border-0 opacity-0 z-n1 position-absolute top-50 end-0 translate-middle-y" id="sidebar-burger-menu">
            <i data-feather="x"></i>
        </button>
    </div>

    <aside id="layout-menu" class="layout-menu menu-vertical menu active" data-simplebar>
        <ul class="menu-inner">
            <li class="menu-title small text-uppercase">
                <span class="menu-title-text">MAIN</span>
            </li>


            <li class="menu-item @if($activeMenu===1) open @endif">
                <a href="{{route('webadmin')}}" class="menu-link @if($activeMenu===1) active @endif">
                    <span class="material-symbols-outlined menu-icon">dashboard</span>
                    <span class="title">Dashboard</span>
                </a>
            </li>



            <li class="menu-item">
                <a href="calendar.html" class="menu-link">
                    <span class="material-symbols-outlined menu-icon">date_range</span>
                    <span class="title">Calendar</span>
                </a>
            </li>

           

            <li class="menu-item">
                <a href="chat.html" class="menu-link">
                    <span class="material-symbols-outlined menu-icon">chat</span>
                    <span class="title">Chat</span>
                </a>
            </li>

          

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <span class="material-symbols-outlined menu-icon">folder_open</span>
                    <span class="title">File Manager</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="file-manager.html" class="menu-link">
                            My Drive
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="assets.html" class="menu-link">
                            Assets
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="projects.html" class="menu-link">
                            Projects
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="personal.html" class="menu-link">
                            Personal
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="applications.html" class="menu-link">
                            Applications
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="documents.html" class="menu-link">
                            Documents
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="media.html" class="menu-link">
                            Media
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-title small text-uppercase">
                <span class="menu-title-text">PAGES</span>
            </li>




            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <span class="material-symbols-outlined menu-icon">local_activity</span>
                    <span class="title">Events</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="events.html" class="menu-link">
                            Events
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="events-list.html" class="menu-link">
                            Events List
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="event-details.html" class="menu-link">
                            Event Details
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="create-an-event.html" class="menu-link">
                            Create An Event
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="edit-an-event.html" class="menu-link">
                            Edit An Event
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <span class="material-symbols-outlined menu-icon">share</span>
                    <span class="title">Social</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="profile.html" class="menu-link">
                            Profile
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="settings.html" class="menu-link">
                            Settings
                        </a>
                    </li>
                </ul>
            </li>



            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <span class="material-symbols-outlined menu-icon">person</span>
                    <span class="title">Users</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="team-members.html" class="menu-link">
                            Team Members
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="users-list.html" class="menu-link">
                            Users List
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="add-user.html" class="menu-link">
                            Add User
                        </a>
                    </li>
                </ul>
            </li>


            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <span class="material-symbols-outlined menu-icon">account_box</span>
                    <span class="title">Profile</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="user-profile.html" class="menu-link">
                            User Profile
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="teams-2.html" class="menu-link">
                            Teams
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="my-projects.html" class="menu-link">
                            Projects
                        </a>
                    </li>
                </ul>
            </li>





            <li class="menu-item">
                <a href="members.html" class="menu-link">
                    <span class="material-symbols-outlined menu-icon">group</span>
                    <span class="title">Members</span>
                </a>
            </li>

        

            <li class="menu-item">
                <a href="my-profile.html" class="menu-link">
                    <span class="material-symbols-outlined menu-icon">account_circle</span>
                    <span class="title">My Profile</span>
                </a>
            </li>
            
            <li class="menu-item">
                <a href="javascript:void(0);" class="menu-link menu-toggle active">
                    <span class="material-symbols-outlined menu-icon">settings</span>
                    <span class="title">Settings</span>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="account-settings.html" class="menu-link">
                            Account Settings
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="change-password.html" class="menu-link">
                            Change Password
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="connections.html" class="menu-link">
                            Connections
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="connections.html" class="menu-link">
                            Connections
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="privacy-policy.html" class="menu-link">
                            Privacy Policy
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="terms-conditions.html" class="menu-link">
                            Terms & Conditions
                        </a>
                    </li>
                </ul>
            </li>


            <li class="menu-item">
                <a class="menu-link" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form-side').submit();">
                    <span class="material-symbols-outlined menu-icon">logout</span>
                    <span class="title">Logout</span>
                </a>
                <form id="logout-form-side" action="{{route('logout')}}" method="POST" class="d-none">@csrf</form>
            </li>
        </ul>
    </aside>
</div>
<!-- End Sidebar Area -->