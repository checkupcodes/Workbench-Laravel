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

            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-file-alt"></i>
                    <span class="nav-text">Home</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('home.slide') }}">Home Slider Setup</a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-file-alt"></i>
                    <span class="nav-text">About</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('about.page') }}">About Page Setup</a></li>
                    <li><a href="{{ route('about.multi.image') }}">Add Multi Images</a></li>
                    <li><a href="{{ route('all.multi.image') }}">All Multi Images</a></li>
                </ul>
                </a>
            </li>

            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-file-alt"></i>
                    <span class="nav-text">Portfolio</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('all.portfolio') }}">All Portfolio</a></li>
                    <li><a href="{{ route('add.portfolio') }}">Add Portfolio</a></li>
                </ul>
                </a>
            </li>
            <hr>

            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-table"></i>
                    <span class="nav-text">Blog Category</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('all.blog.category') }}">All Blog Category</a></li>
                    <li><a href="{{ route('add.blog.category') }}">Add Blog Category</a></li>
                </ul>
            </li>
            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-table"></i>
                    <span class="nav-text">Blog</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('all.blog') }}">All Blog</a></li>
                    <li><a href="{{ route('add.blog') }}">Add Blog</a></li>
                </ul>
            </li>

            <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
                <i class="fas fa-table"></i>
                <span class="nav-text">Footer</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ route('footer.setup') }}">Footer Setup</a></li>
                <li><a href="{{ route('add.blog') }}">Add Blog</a></li>
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
