<!-- partial:partials/_sidebar.html -->
<nav class="sidebar">
    <div class="sidebar-header">
        <a href="{{ route('adminDashboard') }}" class="sidebar-brand">
            La<span>CRUD</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">

            <li class="nav-item">
                <a href="{{ route('adminDashboard') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#students" role="button" aria-expanded="false" aria-controls="students">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Students</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="students">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('studentIndex') }}" class="nav-link">All Students</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('student-create') }}" class="nav-link">Add New Student</a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#teachers" role="button" aria-controls="teachers">
                    <i class="link-icon" data-feather="pen-tool"></i>
                    <span class="link-title">Teachers</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="teachers">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('teachers.index') }}" class="nav-link">All Teachers</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('teachers.create') }}" class="nav-link">Add New Teacher</a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#staff" role="button" aria-expanded="false" aria-controls="staff">
                    <i class="link-icon" data-feather="crosshair"></i>
                    <span class="link-title">Staff</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="staff">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="pages/email/inbox.html" class="nav-link">All Staff</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/email/read.html" class="nav-link">Add New Staff</a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#settings" role="button" aria-expanded="false" aria-controls="settings">
                    <i class="link-icon" data-feather="tool"></i>
                    <span class="link-title">Settings</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="settings">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="pages/email/inbox.html" class="nav-link">1</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/email/read.html" class="nav-link">2</a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/email/compose.html" class="nav-link">3</a>
                        </li>
                    </ul>
                </div>
            </li>


        </ul>
    </div>
</nav>

<!-- partial -->