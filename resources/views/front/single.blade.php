@extends('front.layouts.master')
@section('title',$content->title)
@section('bg',$content->image)

@section('content')
    <?php
    use Illuminate\Support\Str;
    ?>
    <!-- Post Content-->
                <div class="col-md-10 col-lg-8 col-xl-7">
                    {!!$content->text!!}
                    <br>
                    <br>
                    <br>
                    <br>
                    <span class="text-black-50">Okunma Sayısı : <b>{{$content->hit}}</b></span>
                </div>
    @include('front.widgets.categoryWidget')
@endsection
