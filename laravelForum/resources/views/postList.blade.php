@extends('layouts.UI')
@section('content')
<h2>Blog</h2>
<p class="big grey">Something Goes Here.</p>
<hr />

<!-- Blog starts -->

<div class="blog">
    <div class="row">
        <div class="col-md-12">

<!-- Blog Posts -->
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <div class="posts">

    <!-- Each posts should be enclosed inside "entry" class" -->
    @foreach ($postList as $post)
    <div class="entry">
        <h2><a href="{{url('post',$post->id)}}">{{$post->title}}</a></h2>

    <!-- Meta details -->
        <div class="meta">
            <i class="fa fa-calendar"></i> {{$post->created}}
            <i class="fa fa-user"></i> {{$post->name}} <i class="fa fa-folder-open"></i>
            {{--<a href="#">General</a>--}}
            {{--<span class="pull-right"><i class="fa fa-comment"></i><a href="#">2 Comments</a></span>--}}
        </div>

        <!-- Thumbnail -->
        <div class="bthumb2">
                <a href="#"><img src="{{url('img/photos/6.jpg')}}" alt="" /></a>
        </div>
        <p>{{$post->content}}</p>
        <div class="button"><a href="{{url('post',$post->id)}}">Read More...</a></div>
        <div class="clearfix"></div>
    </div>
    @endforeach


    <!-- Pagination -->
    <div class="paging">
        <span class='current'>1</span>
        <a href='#'>2</a>
        <span class="dots">&hellip;</span>
        <a href='#'>6</a>
        <a href="#">Next</a>
    </div>

    <div class="clearfix"></div>

   </div>
</div>
<div class="col-md-4 col-sm-4">
   <div class="sidebar">
      <!-- Widget -->
      <div class="widget">
         <h4>Search</h4>
          <form role="form">
           <div class="input-group">
             <input type="email" class="form-control" id="search" placeholder="Type...">
            <span class="input-group-btn">
                <button type="submit" class="btn btn-default">Search</button>
            </span>
           </div>
         </form>
      </div>
      <div class="widget">
         <h4>Recent Posts</h4>
         <ul>
             @foreach ($postList as $post)
             <li><a href="{{url('post',$post->id)}}">{{$post->title}}</a></li>
                 @endforeach

         </ul>
      </div>
      <div class="widget">
         <h4>About</h4>
         <p>Nulla facilisi. Sed justo dui, id erat. Morbi auctor adipiscing tempor. Phasellus condimentum rutrum aliquet. Quisque eu consectetur erat. Proin rutrum, erat eget posuere semper, <em>arcu mauris posuere tortor</em>,velit at <a href="#">magna sollicitudin cursus</a> ac ultrices magna. Aliquam consequat, purus vitae auctor ullamcorper, sem velit convallis quam, a pharetra justo nunc et mauris. </p>
      </div>
   </div>
</div>
</div>
        </div>
    </div>
</div>


<div class="border"></div>
@endsection()