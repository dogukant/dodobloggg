<?php
use Illuminate\Support\Str;
?>
@extends('front.layouts.master')
@section('title','Dodo Blog')
@section('content')
    <div class="col-md-10 col-lg-8 col-xl-7">
        <!-- Post preview-->
        @foreach($contents as $content)
            <div class="post-preview">
                <a href="{{route('single',[$content->getCategory->slug,$content->slug])}}">
                    <h2 class="post-title">{{$content->title}}</h2>
                    <img src="{{$content->image}}">
                    <h3 class="post-subtitle">{!!str::limit($content->text,50)!!}</h3>
                </a>
                <p class="post-meta">
                    Kategori:
                    <a href="#!">{{$content->getCategory->name}}</a>
                    <span class="float-end"> {{$content->created_at->diffForHumans()}}</span>
                </p>
            </div>
        @endforeach
        <!-- Divider-->
        <hr class="my-4" />
        <!-- Pager-->
        <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
    </div>
    @include('front.widgets.categoryWidget')
@endsection


