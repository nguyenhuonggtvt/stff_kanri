<?php
    $routerName = Route::currentRouteName();
?>
<ul class="navbar-nav bg-gradient-sidebar sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-graduation-cap"></i>
        </div>
        <div class="sidebar-brand-text mx-3">JPREP</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Schedules Menu -->
    <?php
        $arySchedule = ['scheduleSearch', 'scheduleRegister', 'scheduleEdit',
        'scheduleSearchLesson', 'scheduleLessionEdit', 'scheduleLessionDetail',
        'scheduleLessionSubstitute'];
    ?>
    <li class="nav-item {{ (in_array($routerName, $arySchedule)) ? 'active' : '' }}">
        <a class="nav-link {{ (!in_array($routerName, $arySchedule)) ? 'collapsed' : '' }}" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="far fa-calendar-alt"></i>
            <span>Class Timetable</span>
        </a>
        <div id="collapsePages" class="collapse {{ (in_array($routerName, $arySchedule)) ? 'show' : '' }}" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Schedule</h6>
            <a class="collapse-item {{ ($routerName == 'scheduleSearch') ? 'active' : '' }}" href="{{ route('scheduleSearch') }}">Search</a>
            <a class="collapse-item {{ ($routerName == 'scheduleRegister') ? 'active' : '' }}" href="{{ route('scheduleRegister') }}">Register</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Lesson:</h6>
            <a class="collapse-item {{ ($routerName == 'scheduleSearchLesson') ? 'active' : '' }}" href="{{ route('scheduleSearchLesson') }}">Search</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Staffs Menu -->
    <?php
        $aryStaffRouter = ['staffSearch', 'staffRegister', 'staffEdit', 'staffDetail', 'staffLession', 'staffEvaluation'];
    ?>
    <li class="nav-item {{ (in_array($routerName, $aryStaffRouter)) ? 'active' : '' }}">
        <a class="nav-link {{ (!in_array($routerName, $aryStaffRouter)) ? 'collapsed' : '' }}" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-user-alt"></i>
            <span>Staff Information</span>
        </a>
        <div id="collapseTwo" class="collapse {{ (in_array($routerName, $aryStaffRouter)) ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item {{ ($routerName == 'staffSearch') ? 'active' : '' }}" href="{{ route('staffSearch') }}">Search</a>
            <a class="collapse-item {{ ($routerName == 'staffRegister') ? 'active' : '' }}" href="{{ route('staffRegister') }}">Register</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Teacher Suggestion Menu -->
    <li class="nav-item {{ ($routerName == 'teacherSugguestion') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('teacherSugguestion') }}">
            <i class="fas fa-user-check"></i>
            <span>Teacher Suggestion</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Evaluations Menu -->
    <?php
        $aryEvaluation = ['evaluationSearch', 'evaluationInput', 'evaluationDetail', 'evaluationEdit'];
    ?>
    <li class="nav-item {{ (in_array($routerName, $aryEvaluation)) ? 'active' : '' }}">
        <a class="nav-link {{ (!in_array($routerName, $aryEvaluation)) ? 'collapsed' : '' }}" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="far fa-file-alt"></i>
            <span>Evaluation</span>
        </a>
        <div id="collapseUtilities" class="collapse {{ (in_array($routerName, $aryEvaluation)) ? 'show' : '' }}" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item {{ ($routerName == 'evaluationSearch') ? 'active' : '' }}" href="{{ route('evaluationSearch') }}">Search</a>
            <a class="collapse-item {{ ($routerName == 'evaluationInput') ? 'active' : '' }}" href="{{ route('evaluationInput') }}">Input</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
