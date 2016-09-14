@extends('layouts.UI')
@section('content')

    <div class="content">
    <div class="container">

  <h2>Timeline</h2>
  <p class="big grey">Something Goes Here.</p>
  <hr />


        <!-- Timeline list. Note down the class name before editing. -->
            <div class="row">
                <div class="col-md-12 col-sm-12">
    @foreach ($postList as $post)
        <!-- Timeline #1 -->
                    <div class="time">
                      <div class="tidate b-blue">{{$post->created}}</div>
                        <div class="timatter">
                            <h5 class="grey"><a href="{{url('/postList/{id}')}}">{{$post->title}}</a></h5>
                            <p>{{$post->content}}</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
        @endforeach
                </div>
            </div>
    <!-- Timeline ends -->
    <div class="border"></div>

</div>
    </div>
@endsection()