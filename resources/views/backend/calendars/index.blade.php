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
                            <a href="{{url('/admin/posts/create')}}" class="btn btn-outline-success pull-right">Thêm mới</a href="{{url('/admin/posts/')}}">
                        </div>
                        <div class="card-body">
                            <div id='calendar'></div>
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- .animated -->
    </div>
@stop
@section('style-rewrite')
    <link href='{{asset('/backend')}}/assets/fullcalendar/fullcalendar.min.css' rel='stylesheet' />
    <link href='{{asset('/backend')}}/assets/fullcalendar/fullcalendar.print.min.css' rel='stylesheet' media='print' />
@stop
@section('script-rewrite')
    <script src='{{asset('/backend')}}/assets/fullcalendar/lib/moment.min.js'></script>
    <script src='{{asset('/backend')}}/assets/fullcalendar/lib/jquery.min.js'></script>
    <script src='{{asset('/backend')}}/assets/fullcalendar/fullcalendar.min.js'></script>
    <script>

        $(document).ready(function() {
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                defaultDate: '{{$date}}',
                navLinks: true, // can click day/week names to navigate views
                selectable: true,
                selectHelper: true,
                select: function(start, end) {
                    var title = prompt('Event Title:');
                    var eventData;
                    if (title) {
                        eventData = {
                            title: title,
                            start: start,
                            end: end
                        };
                        $('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
                    }
                    $('#calendar').fullCalendar('unselect');
                },
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                events: [
                    {
                        title: 'All Day Event',
                        start: '2017-10-01'
                    },
                    {
                        title: 'Long Event',
                        start: '2017-10-07',
                        end: '2017-10-10'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: '2017-10-09T16:00:00'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: '2017-10-16T16:00:00'
                    },
                    {
                        title: 'Conference',
                        start: '2017-10-11',
                        end: '2017-10-13'
                    },
                    {
                        title: 'Meeting',
                        start: '2017-10-12T10:30:00',
                        end: '2017-10-12T12:30:00'
                    },
                    {
                        title: 'Lunch',
                        start: '2017-10-12T12:00:00'
                    },
                    {
                        title: 'Meeting',
                        start: '2017-10-12T14:30:00'
                    },
                    {
                        title: 'Happy Hour',
                        start: '2017-10-12T17:30:00'
                    },
                    {
                        title: 'Dinner',
                        start: '2019-01-09T20:00:00'
                    },
                    {
                        title: 'Hôm nay không có gì chỉ vắng 2 học sinh  có gì chỉ vắng 2 học sinh',
                        start: '2019-01-10T08:00-12:00'
                    },
                    {
                        title: 'Click for Google',
                        url: 'http://google.com/',
                        start: '2017-10-28'
                    }
                ]
            });
            
        });

    </script>
@stop