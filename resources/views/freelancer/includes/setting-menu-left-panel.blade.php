<ul>
    <li class="@if(isset($cpp)){{  $cpp  }} @endif">
        <a href="{{ route ('setting') }}">
             <i class="fa fa-user"></i>Change profile picture
        </a>
    </li>
    <li class="@if(isset($up)) {{  $up  }} @endif">
        <a href="{{ route ('freelancer-update-profile') }}">
            <i class="fa fa-edit"></i>Update profile
        </a>
    </li>
    <li class="@if(isset($cp)) {{  $cp  }} @endif">
        <a href="{{ route ('freelancer-change-password') }}">
            <i class="fa fa-key"></i>Change Password
        </a>
    </li>
    <li class="@if(isset($notification)) {{  $notification  }} @endif">
        <a href="{{ route ('freelancer-notification') }}">
            <i class="fa fa-warning"></i> Notification
        </a>
    </li>
    <li class="@if(isset($aboutme)) {{ $aboutme }} @endif">
        <a href="{{ route ('freelancer-aboutme') }}">
            <i class="fa fa-briefcase"></i> About Me
        </a>
    </li>
    <li class="@if(isset($employmenthistory)) {{  $employmenthistory  }} @endif">
        <a href="{{ route ('freelancer-employment-history') }}">
            <i class="fa fa-puzzle-piece"></i> Employment  Detail
        </a>
    </li>
    <li class="@if(isset($education)) {{  $education  }} @endif">
        <a href="{{ route ('freelancer-education') }}">
            <i class="fa fa-book"></i> Education
        </a>
    </li>
    <li class="@if(isset($skill)) {{  $skill  }} @endif">
        <a href="{{ route ('freelancer-skill') }}">
            <i class="fa fa-book"></i> Skill
        </a>
    </li>
</ul>
