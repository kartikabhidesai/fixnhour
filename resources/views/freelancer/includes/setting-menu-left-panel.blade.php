<ul>
    <li class="@if(isset($cpp)){{  $cpp  }} @endif"><a href="{{ url ('setting') }}">Change profile picture</a></li>
    <li class="@if(isset($up)) {{  $up  }} @endif"><a href="{{ url ('update-profile') }}">Update profile</a></li>
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