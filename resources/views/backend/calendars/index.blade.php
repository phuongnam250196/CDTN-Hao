@extends('backend.master')
@section('title', 'Lịch trực')
@section("main")
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Quản lý lịch trực</strong>
                            <a href="{{url('/admin/calendars/list_teacher')}}" class="btn btn-outline-success pull-right">Giáo viên</a href="{{url('/admin/posts/')}}">

                            <a href="{{url('/admin/posts/create')}}" class="btn btn-outline-success pull-right">Thêm mới</a href="{{url('/admin/posts/')}}">
                        </div>
                        {{-- <div class="card-body"> --}}
                            <div class="calendarContOuter"></div>
                        {{-- </div> --}}
                    </div>
                </div>

            </div>
        </div><!-- .animated -->
    </div>
@stop
@section('style-rewrite')
    
    
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('/frontend')}}/CalenStyle-master/src/calenstyle.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('/frontend')}}/CalenStyle-master/src/calenstyle-jquery-ui-override.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('/frontend')}}/CalenStyle-master/src/calenstyle-iconfont.css" /> --}}
    
@stop
@section('style-calendar')
    <script type="text/javascript" src="{{asset('/frontend')}}/CalenStyle-master/demo/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="{{asset('/frontend')}}/CalenStyle-master/demo/js/jquery-ui-custom-1.11.2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('/frontend')}}/CalenStyle-master/src/calenstyle.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('/frontend')}}/CalenStyle-master/src/calenstyle-jquery-ui-override.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('/frontend')}}/CalenStyle-master/src/calenstyle-iconfont.css" />
    <script type="text/javascript" src="{{asset('/frontend')}}/CalenStyle-master/src/calenstyle.js"></script>

    <script type="text/javascript" src="{{asset('/frontend')}}/CalenStyle-master/demo/js/CalJsonGenerator.js"></script>
@endsection
@section('source')
    eventSource: [
        @foreach($data as $dat)
        {
          "identifier": "{{$dat->id}}", 
          "isAllDay": false, 
          "start": "{{$dat->start}}",
          "end": "{{$dat->end}}",
          "calendar": "Meeting", 
          "tag": "Work",
          "title": "{{$dat->title}}", 
          "description": "{{$dat->description}}", 
          "url": "{{$dat->url}}", 

          "icon": "cs-icon-Meeting", 
          "color": "20DAEC", 
          "borderColor": "000000", 
          "textColor": "000000",
          "nonAllDayEventsTextColor": "000000",

          "isDragNDropInMonthView": true, 
          "isDragNDropInDetailView": true, 
          "isResizeInDetailView": true 
        },
        @endforeach
    ]
@endsection
