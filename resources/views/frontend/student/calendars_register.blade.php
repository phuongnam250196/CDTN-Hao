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
                                      @if(session('messages'))
                                      <p class="alert alert-danger">{{session('messages')}}
                                      </p>
                                      @endif
                                        <form method="POST" enctype="multipart/form-data">
                                          <div class="form-group">
                                            <label>Lý do mượn phòng</label>
                                            <input type="text" class="form-control" name="title">
                                            @if($errors->has('title'))
                                              <p class="help text-danger">{{ $errors->first('title') }}</p>
                                            @endif
                                          </div>
                                          <div class="form-group">
                                            <label>Ngày mượn</label>
                                            <input type="date" class="form-control" name="date_borrow">
                                            @if($errors->has('date_borrow'))
                                              <p class="help text-danger">{{ $errors->first('date_borrow') }}</p>
                                            @endif
                                          </div>
                                          <div class="form-group">
                                            <label>Ca có thể đăng ký</label>
                                            <select name="ca" class="form-control">
                                              <option value="">Chọn ca trực</option>
                                            </select>
                                            @if($errors->has('ca'))
                                              <p class="help text-danger">{{ $errors->first('ca') }}</p>
                                            @endif
                                          </div>
                                          
                                          {{-- <div class="form-group">
                                            <label>Nhận xét</label>
                                            <textarea name="description" id="" class="form-control" cols="30" rows="4"></textarea>
                                          </div> --}}
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
    {{-- <script>
        $(document).ready(function(){
          $selectUser = $('input[name = "date_borrow"]')
            $($selectUser).change(function(){
                var id = this.value

                $.ajax({
                    url: '/admin/doanhnghiep/taikhoan/get-avatar/'+id,
                    type: 'get',
                    success:function(data){
                        $('#image-avatar').attr('src','{{asset('local/storage/app/public/')}}/' +data+'?'+new Date())
                        console.log(data)
                    },
                    errors: function (err) {
                        console.log(err)
                    }
                })

            })
        })
    </script> --}}
@endsection

@section('first')
<script>

  $(document).ready(function(){
          $selectUser = $('input[name = "date_borrow"]')
            $($selectUser).change(function(){
              // alert('hello')
                var date = $('input[name = "date_borrow"]').val();
                // alert(date);

                $.ajax({
                    url: '/QLDA/public/student/calendars/change_date/' + date,
                    type: 'get',
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    success:function(data){
                      for(var i in data.calendars) {
                        console.log(i + data.calendars[i].type)
                        if(data.calendars[i].type == 1) {
                          $('select[name = "ca"]').append("<option value='1'>Ca 1-2</option>")
                        }
                        if(data.calendars[i].type == 2) {
                          $('select[name = "ca"]').append("<option value='2'>Ca 3-4-5</option>")
                        }
                        if(data.calendars[i].type == 3) {
                          $('select[name = "ca"]').append("<option value='3'>Ca 6-7</option>")
                        }
                        if(data.calendars[i].type == 4) {
                          $('select[name = "ca"]').append("<option value='4'>Ca 8-9</option>")
                        }
                        if(data.calendars[i].type == 5) {
                          $('select[name = "ca"]').append("<option value='5'>Buổi sáng</option>")
                        }
                        if(data.calendars[i].type == 6) {
                          $('select[name = "ca"]').append("<option value='6'>Buổi chiều</option>")
                        }
                        if(data.calendars[i].type == 7) {
                          $('select[name = "ca"]').append("<option value='7'>Cả ngày</option>")
                        }
                      }
                        console.log(data.calendars)
                      
                    },
                    errors: function (err) {
                        console.log(err)
                    }
                })

            })
        })
</script>
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