Xin chào: {{(!empty($data->Student))?$data->Student->student_name:$data->Teacher->teacher_name}}

<br>
------
<br>
Tiêu đề:  {{$data->title}}

<br>
Ngày muốn mượn: {{$data->date_borrow}}

<br>
@if(!empty($data->description))
Nội dung: {{$data->description}}
@endif
<br>
@if($data->status == 1)
Kết quả: Yêu cầu mượn phòng của bạn đã được xác nhận thành công!.
@else
Kết quả: Admin đã từ chối yêu cầu mượn phòng của bạn!
@endif
<br>
-------
<br>


Chúc bạn 1 ngày làm việc thành công!