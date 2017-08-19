<ul>
    <li class="@if(isset($dashboard)){{ $dashboard }} @endif">
        <a href="{{ route ('dashboard') }}">
            <i class="fa fa-dashboard"></i> Dashboard
        </a>
    </li>
    <li class="@if(isset($cpp)){{ $profilePic }} @endif">
        <a href="{{ route ('profile-picture') }}"> 
            <i class="fa fa-user"></i> Change profile picture
        </a>
    </li>
    <li class="@if(isset($up)) {{ $profileInfo }} @endif">
        <a href="{{ route ('update-profile') }}">
            <i class="fa fa-edit"></i> Update profile
        </a>
    </li>
    <li class="@if(isset($cp)) {{ $changePwd }} @endif">
        <a href="{{ route ('change-password') }}">
            <i class="fa fa-key"></i> Change Password
        </a>
    </li>
    <li class="@if(isset($notification)) {{  $notification  }} @endif">
        <a href="{{ route ('notification') }}">
            <i class="fa fa-warning"></i> Notification
        </a>
    </li>
    <li class="@if(isset($aboutme)) {{ $aboutme }} @endif">
        <a href="{{ route ('aboutme') }}">
            <i class="fa fa-briefcase"></i> About Me
        </a>
    </li>
    <li class="@if(isset($employmenthistory)) {{  $employmenthistory  }} @endif">
        <a href="{{ route ('client-employment-history') }}">
            <i class="fa fa-puzzle-piece"></i> Employment  Detail
        </a>
    </li>
    <li class="@if(isset($education)) {{  $education  }} @endif">
        <a href="{{ route ('client-education') }}">
            <i class="fa fa-book"></i> Education
        </a>
    </li>
</ul>
