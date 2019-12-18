@extends('client.master2')
@section('title','Tin tức')
@section('main')
    <div class="col-xs-12 ">
        <ul class="breadcrumb" style="margin-top: 20px">
        <li><a href="{{ route('root') }}">Home</a></li>            
            <li class="active">Tin tuc</li>
        </ul>
        
        @foreach ($post as $p)
        <div class="content-new row">
            <div class="img-box col-md-4">
                <a href="#">
                    <img src="{{ asset('storage/app/post/'.$p->img) }}" height="170" alt="">
                </a>
            </div>
            <div class="content-box col-md-8">
                <div class="new-title"><a href="#">{{ $p->name }}</a> </div>
            <div class="new-sub-title"><i class="far fa-calendar-alt"></i><span> {{ date('d/m/Y H:i',strtotime($p->created_at)) }}</span> 
                </div>
                <div class="new-des"><p>
                    {{ $p->content }}
                </p></div>
                <div class="new-meta">
                    <span class="cm-count">
                        0 comments
                    </span>
                    <span class="author">| Post by Admin</span>
                </div>
            </div>
        </div>
        <hr>
        @endforeach
    </div> <!-- /.col-xs-12.col-md-3.center -->
@stop
