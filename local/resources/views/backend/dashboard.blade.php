@extends('backend/master')
@section('content')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main ">
      		<div class="text-justify jumbotron">
      		@include('errors/alert')	
      			<h1>Xin chào!</h1>
      			<p>Chào mừng bạn đến với trang quản trị của Vietpro Blog. Đ.</p>
            <p>Vietpro Blog hiện đang ở phiên bản 1.0 nên còn nhiều hạn chế. Chúng tôi sẽ sớm khắc phục và cập nhật những tính năng mới trong thời gian tới.</p>
      			<p>Tác giả - giảng viên: Đặng Như Trần Lương</p>
      			<p><a class="btn btn-primary btn-lg" href="http://hocthietkeweb.net.vn/" role="button" target="_blank">Learn more &raquo;</a></p>
      		</div>
        </div>
@stop
