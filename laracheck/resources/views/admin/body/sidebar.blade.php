<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu" style="height:90%">
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-home"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="index.html">Dashboard Light</a></li>
                    <li><a href="index-2.html">Dashboard Dark</a></li>
                    <li><a href="project-page.html">Project</a></li>
                    <li><a href="contacts.html">Contacts</a></li>
                    <li><a href="kanban.html">Kanban</a></li>
                    <li><a href="calendar-page.html">Calendar</a></li>
                    <li><a href="message.html">Messages</a></li>
                </ul>
            </li>

            <li><a href="widget-basic.html" class="" aria-expanded="false">
                    <i class="fas fa-user-check"></i>
                    <span class="nav-text">Widget</span>
                </a>
            </li>
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-file-alt"></i>
                    <span class="nav-text">Home</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('home.slide') }}">Home Slider Setup</a></li>
                    <li><a href="{{ route('about.page') }}">About Page Setup</a></li>
                    <li><a href="{{route('about.multi.image')}}">About Multi Images</a></li>
                    <li><a href="form-pickers.html">Pickers</a></li>
                    <li><a href="form-validation.html">Form Validate</a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-table"></i>
                    <span class="nav-text">Table</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
                    <li><a href="table-datatable-basic.html">Datatable</a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-clone"></i>
                    <span class="nav-text">Pages</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="page-login.html">Login</a></li>
                    <li><a href="page-register.html">Register</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                        <ul aria-expanded="false">
                            <li><a href="page-error-400.html">Error 400</a></li>
                            <li><a href="page-error-403.html">Error 403</a></li>
                            <li><a href="page-error-404.html">Error 404</a></li>
                            <li><a href="page-error-500.html">Error 500</a></li>
                            <li><a href="page-error-503.html">Error 503</a></li>
                        </ul>
                    </li>
                    <li><a href="page-lock-screen.html">Lock Screen</a></li>
                    <li><a href="empty-page.html">Empty Page</a></li>
                </ul>
            </li>
        </ul>
        {{-- <div class="side-bar-profile">
            <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="side-bar-profile-img">
                    <img src="{{ asset('backend/images') }}/user.jpg" alt="">
                </div>
                <div class="profile-info1">
                    <h4 class="fs-18 font-w500">Levi Siregar</h4>
                    <span><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                            data-cfemail="4e222b38273c2b292f3c0e232f2722602d2123">[email&#160;protected]</a></span>
                </div>
                <div class="profile-button">
                    <i class="fas fa-caret-down scale5 text-light"></i>
                </div>
            </div>
            <div class="d-flex justify-content-between mb-2 progress-info">
                <span class="fs-12"><i class="fas fa-star text-orange me-2"></i>Task Progress</span>
                <span class="fs-12">20/45</span>
            </div>
            <div class="progress default-progress">
                <div class="progress-bar bg-gradientf progress-animated" style="width: 45%; height:10px;"
                    role="progressbar">
                    <span class="sr-only">45% Complete</span>
                </div>
            </div>
        </div> --}}
        <div class="copyright">
            <p><strong>Check-up Codes Admin</strong> © 2022 All Rights Reserved</p>
            <p class="fs-12">Made with <span class="heart"></span> by Cekap</p>
        </div>
    </div>
</div>
