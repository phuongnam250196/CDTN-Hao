@extends('frontend.master')
@section('title', 'Sinh viên | Lịch trực')
@section('main')
    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-3">
                    <div class="post-sidebar-area post-sidebar-area-2">
                        <!-- Widget Area -->
                        @include('frontend.navbar.nav')
                    </div>
                </div>

                <div class="col-12 col-lg-7">
                    <div class="post-content-area mb-100">
                        <!-- Catagory Area -->
                        <div class="world-catagory-area">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="title">Lịch trực hiện tại</li>
                                <li class="nav-item">
                                    <a class="btn btn-primary"  href="{{url('student/calendars/register')}}">Đăng ký trực</a>
                                </li>
                            </ul>

                            <div >
                                @if(session('messages'))
                                    <p class="alert alert-success">{{session('messages')}}</p>
                                @endif
                                {{-- <div class="info">
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th>Ca \ Ngày</th>
                                            <th>Thứ 2</th>
                                            <th>Thứ 3</th>
                                            <th>Thứ 4</th>
                                            <th>Thứ 5</th>
                                            <th>Thứ 6</th>
                                            <th>Thứ 7</th>
                                            <th>Chủ nhật</th>
                                          </tr>
                                        </thead>
                                        <tbody {{$dem =1}}{{$a=11}}>
                                          @for($i=1;$i<$a;$i++)
                                          <tr>
                                            @for($j=0;$j<8;$j++)
                                                @if($i<11 && $j ==0)
                                                    <td class="text-center a{{$i}}{{$j}}">Ca {{$i}}</td>
                                                @else
                                                    <td class="text-center a{{$i}}{{$j}}">1</td>
                                                @endif
                                            @endfor
                                          </tr>
                                          @endfor
                                        </tbody>
                                      </table>
                                </div> --}}
                                {{-- {{$data->links()}} --}}
                                <div class="calendarContOuter"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
        {{-- {
          "identifier": "1", 
          "isAllDay": false, 
          "start": "14-01-2019 02:00",
          "end": "14-01-2019 04:00",
          "calendar": "abc", 
          "tag": "Work",
          "title": "Meeting with Ana", 
          "description": "", 
          "url": "", 

          "icon": "cs-icon-Meeting", 
          "color": "20DAEC", 
          "borderColor": "000000", 
          "textColor": "000000",
          "nonAllDayEventsTextColor": "000000",

          "isDragNDropInMonthView": true, 
          "isDragNDropInDetailView": true, 
          "isResizeInDetailView": true 
        }, --}}
    ]
@endsection

{{-- @section('custom-script')
    <script type="text/javascript" src="{{asset('/frontend')}}/CalenStyle-master/src/calenstyle.js"></script>
    <script type="text/javascript" src="{{asset('/frontend')}}/CalenStyle-master/demo/js/CalJsonGenerator.js"></script>
@endsection --}}