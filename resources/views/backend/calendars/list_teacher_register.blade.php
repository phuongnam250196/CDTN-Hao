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
                            @if(session('messages'))
                                <p class="alert alert-success">{{session('messages')}}</p>
                            @endif
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">Họ & tên</th>
                                        <th scope="col">Lý do mượn</th>
                                        <th scope="col">Ngày mượn</th>
                                        <th class="text-center" colspan="2">Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody {{$dem=1}}>
                                    @foreach($data as $dat)
                                        <tr>
                                            <th scope="row">{{$dem++}}</th>
                                            <td>
                                                <p class="a122" data-id="{{$dat->id}}" value="{{$dat->id}}">
                                                    @if(!empty($dat->Teacher->teacher_name))
                                                        {{$dat->Teacher->teacher_name}}
                                                    @elseif(!empty($dat->Student->student_name))
                                                        {{$dat->Student->student_name}}
                                                    @else
                                                        
                                                    @endif
                                                </p>
                                            </td>
                                            <td>{{$dat->title}}</td>
                                            <td>{{$dat->date_borrow}}</td>
                                            <td>
                                                <a href="{{url('admin/calendars/edit/'.$dat->id)}}" class="btn btn-outline-info"><i class="fa  fa-pencil"></i></a>
                                            </td>
                                            <td>
                                                <a href="{{url('admin/calendars/delete/'.$dat->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa không?');" class="btn btn-outline-danger"><i class="fa  fa-times"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{$data->links()}}
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- .animated -->
        <button type="button" class="btn btn-secondary mb-1 bn" data-toggle="modal" data-target="#mediumModal" hidden="">
            Medium
        </button>

         <div class="modal" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="mediumModalLabel"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Ngày mượn: <span class="borrow-data"></span></p>
                        <p>Ca mượn: <span class="ca-data"></span></p>
                        <p  >Nội dung: <span class="description-data"></span></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('add')
    <script>
        jQuery(document).ready(function($){
            // var id = $('p.a122').val();
            // jQuery('#avatar').click(function($){
                jQuery('.a122').click(function($) {
                    var id = jQuery(this).attr('value');
                    // alert('a' + id)
                    console.log(id)
                    jQuery.ajax({
                        url     : '/admin/calendars/show/' + id,
                        method  : 'get',
                        
                        headers:
                        {
                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                        },
                        success : function(response){
                            // alert(response)
                            console.log(response.data)
                            // jQuery('#mediumModal').addClass('show');
                            // jQuery('#mediumModal').attr('aria-hidden', 'false');
                            jQuery('.bn').trigger('click');
                            jQuery('h5#mediumModalLabel').text(response.data.title);
                            
                            jQuery('span.borrow-data').text(response.data.date_borrow);
                            if(response.data.type == 1) {
                                jQuery('span.ca-data').text('Ca 1-2');
                            } 
                            if (response.data.type ==2) {
                                jQuery('span.ca-data').text('Ca 3-4-5');
                            }
                            if (response.data.type ==3) {
                                jQuery('span.ca-data').text('Ca 6-7');
                            } 
                            if(response.data.type ==4) {
                                jQuery('span.ca-data').text('Ca 8-9');
                            } 
                            if(response.data.type ==5) {
                                jQuery('span.ca-data').text('Buổi sáng');
                            } 
                            if(response.data.type ==6) {
                                jQuery('span.ca-data').text('Buổi chiều');
                            } 
                            if(response.data.type ==7) {
                                jQuery('span.ca-data').text('Cả ngày');
                            }
                            if(response.data.teacher_id != null) {
                                jQuery('.description-data').text(response.data.description);
                            } else {
                                jQuery('.description-data').text('');
                            }
                        }
                    });
                });
            // });
        });
        
    </script>
@endsection