<div class="sidebar-widget-area">
    <h5 class="title">Danh sách chức năng</h5>
    <div class="widget-content">
        <ul>
            <li class="@if(Request::is('student/info') || Request::is('student/info/*')) active @endif"><a href="{{url('/student/info')}}">Xem thông tin</a></li>
            <li class="@if(Request::is('student/posts') || Request::is('student/posts/*')) active @endif"><a href="{{url('/student/posts')}}">Viết bài</a></li>
            <li class="@if(Request::is('student/devices') || Request::is('student/devices/*')) active @endif"><a href="{{url('/student/devices')}}">Mượn thiết bị</a></li>
            <li class="@if(Request::is('student/calendars') || Request::is('student/calendars/*')) active @endif"><a href="{{url('/student/calendars')}}">Đăng ký lịch trực</a></li>
        </ul>
    </div>
</div>