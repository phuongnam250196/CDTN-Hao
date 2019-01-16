<div class="sidebar-widget-area">
    <h5 class="title">Danh sách chức năng</h5>
    <div class="widget-content">
        <ul>
            <li class="@if(Request::is('teacher/info') || Request::is('teacher/info/*')) active @endif"><a href="{{url('/teacher/info')}}">Xem thông tin</a></li>
            <li class="@if(Request::is('teacher/posts') || Request::is('teacher/posts/*')) active @endif"><a href="{{url('/teacher/posts')}}">Viết bài</a></li>
            <li class="@if(Request::is('teacher/devices') || Request::is('teacher/devices/*')) active @endif"><a href="{{url('/teacher/devices')}}">Mượn thiết bị</a></li>
            <li class="@if(Request::is('teacher/calendars') || Request::is('teacher/calendars/*')) active @endif"><a href="{{url('/teacher/calendars')}}">Đăng ký lịch trực</a></li>
        </ul>
    </div>
</div>