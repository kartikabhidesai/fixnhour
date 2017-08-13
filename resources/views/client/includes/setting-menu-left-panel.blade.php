<ul>
    <li class="@if(isset($cpp)){{  $cpp  }} @endif"><a href="{{ route ('client-setting') }}">Change profile picture</a></li>
    <li class="@if(isset($up)) {{  $up  }} @endif"><a href="{{ route ('client-update-profile') }}">Update profile</a></li>
    <li class="@if(isset($cp)) {{  $cp  }} @endif"><a href="{{ route ('client-change-password') }}">Change Password</a></li>
    <li class="@if(isset($notification)) {{  $notification  }} @endif"><a href="{{ route ('client-notification') }}">Notification</a></li>
</ul>
<style>
    div.job-left {
    float: left;
    border: 1px solid #ccc;
    background-color: #4CC3C8;
    width: 100%;
    
}

/* Style the buttons inside the tab */
div.job-left li {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
}
div.job-left li.active {
   
    background-color: #fff;
    
}
div.job-left li a {
    color: white;
    font-size: 15.5px;
}
div.job-left li.active a{
   
    color: #4CC3C8;
    
}
</style>