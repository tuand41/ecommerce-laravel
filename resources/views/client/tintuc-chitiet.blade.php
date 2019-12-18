@extends('client.master2')
@section('title','Tin tức')
@section('main')
<div class="col-xs-12 ">
    <ul class="breadcrumb" style="margin-top: 20px">
        <li><a href="{{ route('root') }}">Home</a></li>
        <li class="active">Tin tuc</li>
    </ul>
    <div style="margin: 0 15px">
        <h1 style="text-align: justify; font-weight: 600">{{$post->name}}</h1>
        <div>
            <span style="font-size: 12px; color: #A69EBA;">
                <i class="fas fa-calendar-alt"></i>
                {{ date('d/m/Y H:i',strtotime($post->created_at)) }}</span>
        </div>
        <div>
            {{$post->content}}
        </div>
    </div>
    <hr>
    <div class="panel panel-default ">
        <div class="panel-heading">
            Bình Luận
        </div>
        <div class="panel-body">
            <div class="row">
                <form method="post" action="{{ route('comment-bai-viet', $post->id) }}" class="col-md-12">
                    {{ csrf_field() }}
                    <div class="form-group">
                        @if(Auth::check())
                        <label>Bình luận:</label>
                        <textarea required rows="4" class="form-control" name="contents"></textarea>
                        <input type="submit" name="submit" value="Gửi" class="form-control btn btn-primary">
                        @else
                        <h2>bạn phải đăng nhập</h2>
                        @endif
                    </div>
                </form>

            </div>
            <hr>
            <div class="row">
                <div class="comment" style="margin-left: 15px">
                    @foreach ($comments as $com)
                    {{-- expr --}}
                    <div class="media">
                        <div class="media-left me">
                            <img src="images/img_avatar1.png" class="media-object" style="width:60px">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">{{ $com->com_name }}</h4>
                            <span>{{ $com->com_email }}</span>
                            <span style="color: #999">{{ date('d/m/Y H:i',strtotime($com->created_at)) }}</span>
                            <p>{{ $com->com_noidung }}</p>
                        </div>
                    </div>
                    <hr>
                    @endforeach

                    <div class="col-md-offset-3">
                        {{ $comments->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div> <!-- /.col-xs-12.col-md-3.center -->
@stop
