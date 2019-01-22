@extends('frontend.master')
@section('title', 'Sinh viên | Lịch trực')
@section('main')
    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-3">
                    <div class="post-sidebar-area post-sidebar-area-2">
                        @include('frontend.navbar.nav')
                    </div>
                </div>

                <div class="col-12 col-lg-7">
                    <div class="post-content-area mb-100">
                        <!-- Catagory Area -->
                        <div class="world-catagory-area">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="title">Thông tin đăng ký trực</li>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <div class="row">
                                    <div class="col-md-10">
                                        <form method="POST" enctype="multipart/form-data">
                                          <div class="form-group">
                                            <label>Lý do mượn phòng</label>
                                            <input type="text" class="form-control" name="title">
                                          </div>
                                          <div class="form-group">
                                            <label>Ngày mượn</label>
                                            <input type="date" class="form-control" name="date_borrow">
                                          </div>
                                          <div class="form-group">
                                            <label>Thời gian bắt đầu</label>
                                            <input type="time" class="form-control" name="start">
                                          </div>
                                          <div class="form-group">
                                            <label>Thời gian kết thúc</label>
                                            <input type="time" class="form-control" name="end">
                                          </div>
                                          <div class="form-group">
                                            <label>Nhận xét</label>
                                            <textarea name="description" id="" class="form-control" cols="30" rows="4"></textarea>
                                          </div>
                                          <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Đăng ký</button>
                                            <a href="{{url('student/calendars')}}" class="btn btn-secondary">Hủy bỏ</a>
                                          </div>
                                          {{csrf_field()}}
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- @section('custom-style')
    <script type="text/javascript">
    
        $(function() 
        {
            
            $(".calendarContOuter").CalenStyle(
            {
            
                sectionsList: ["Header", "ActionBar", "Calendar"],
            
                visibleView: "DetailedMonthView",

                calDataSource: 
                [
                    {
                        sourceFetchType: "ALL",
                        sourceType: "JSON",                     
                        source: {

                            eventSource: [
                                {
                                  "identifier": "1", 
                                  "isAllDay": false, 
                                  "start": "14-01-2019 09:00",
                                  "end": "14-01-2019 11:00",
                                  "calendar": "Meeting", 
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
                                }
                            ]
                        }
                        
                    }
                ],
            
                modifyActionBarView: function(actionBar, visibleViewName)
                {
                    var thisObj = this;
                
                    $(actionBar).empty();
                    $(actionBar).append("<span class='reload'>Reload</span>");
                    $(".reload").click(function()
                    {
                        thisObj.reloadData();
                    });
                }
            
            });
            
        }); 
    </script>
@endsection --}}

{{-- @section('custom-script')
    <script type="text/javascript" src="{{asset('/frontend')}}/CalenStyle-master/src/calenstyle.js"></script>
    <script type="text/javascript" src="{{asset('/frontend')}}/CalenStyle-master/demo/js/CalJsonGenerator.js"></script>
@endsection --}}