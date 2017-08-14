<ul>
    <li class="@if(isset($dashboard)){{  $dashboard  }} @endif"><a href="{{ route ('client-dashboard') }}">Dashboard</a></li>
    <li class="@if(isset($cpp)){{  $cpp  }} @endif"><a href="{{ route ('client-setting') }}">Change profile picture</a></li>
    <li class="@if(isset($up)) {{  $up  }} @endif"><a href="{{ route ('client-update-profile') }}">Update profile</a></li>
    <li class="@if(isset($cp)) {{  $cp  }} @endif"><a href="{{ route ('client-change-password') }}">Change Password</a></li>
    <li class="@if(isset($notification)) {{  $notification  }} @endif"><a href="{{ route ('client-notification') }}">Notification</a></li>
    <li class="@if(isset($aboutme)) {{  $aboutme  }} @endif"><a href="{{ route ('client-aboutme') }}">About Me</a></li>
    <li class="@if(isset($employmenthistory)) {{  $employmenthistory  }} @endif"><a href="{{ route ('client-employment-history') }}">Employment  Detail</a></li>
</ul>
