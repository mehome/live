@extends('layouts.layout')
@section('title', $room['user']['nickname'].'的直播间')
@section('style')
    <link rel="stylesheet" href="{{asset('css/videojs.css')}}">
@endsection

@section('script')
    <script src="{{asset('js/video.js')}}"></script>
    <script src="{{asset('js/videojs-contrib-hls.min.js')}}"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>{{$room['user']['nickname'].'的直播间'}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center center-block">
            <video id="live-video" width="1280" height="720" class="video-js vjs-default-skin center-block" controls>
                <source src="/live/live_room_id_{{$room['id']}}.m3u8" type="application/x-mpegURL">
            </video>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            我是评论区
        </div>
    </div>
    <script>
        var player = videojs('live-video');
        player.play();
    </script>
@endsection