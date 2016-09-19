@extends('layouts.UI')
@section('content')

    <!-- Blog starts -->

    <div class="blog">
               <div class="row">
                  <div class="col-md-12">

                     <!-- Blog Posts -->
                     <div class="row">
                        <div class="col-md-8 col-sm-8">
                           <div class="posts">
{{--{{dd($post->name)}}--}}
<!-- Each posts should be enclosed inside "entry" class" -->
    <!-- Post one -->
                              <div class="entry">
                                 <h2>{{$post->title}}</h2>

                                  <!-- Meta details -->
                                 <div class="meta clearfix">
                                    <i class="fa fa-calendar"></i>{{$post->created_at}}<i
                                             class="fa fa-user"></i>{{$post->name}}<i
                                             class="fa fa-folder-open"></i> <a href="#">General</a> <span
                                             class="pull-right"><i class="fa fa-comment"></i> <a href="#">2 Comments</a></span>
                                 </div>

                                  <!-- Thumbnail -->
                                 <div class="bthumb2">
                                    <a href="#"><img src="{{url('img/photos/1.jpg')}}" alt="" /></a>
                                 </div>

                                 <p>{{$post->content}}</p>


                              </div>

                              <div class="post-foot well">
                                 <!-- Social media icons -->
                                 <div class="social">
                                    <h6>Sharing is Sexy: </h6>
                                    <a href="#"><i class="fa fa-facebook facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter twitter"></i></a>
                                    <a href="#"><i class="fa fa-linkedin linkedin"></i></a>
                                    <a href="#"><i class="fa fa-pinterest pinterest"></i></a>
                                    <a href="#"><i class="fa fa-google-plus google-plus"></i></a>
                                 </div>
                              </div>

                               <hr />

    <!-- Comment section -->

                              <div class="comments">

                                    <div class="title"><h5>2 Comments</h5></div>

                                    <ul class="comment-list">
                                      <li class="comment">
                                        <a class="pull-left" href="#">
                                          <img class="avatar" src="{{url('img/photos/1.jpg')}}" class="img-responsive" />
                                        </a>
                                          <div class="comment-author"><a href="#">Ashok</a></div>
                                          <div class="cmeta">Commented on 25/12/2012</div>
                                          <p>Nulla facilisi. Sed justo dui, scelerisque ut consectetur vel, eleifend id erat. Phasellus condimentum rutrum aliquet. Quisque eu consectetur erat.</p>
                                          <div class="clearfix"></div>
                                      </li>
                                      <li class="comment reply">
                                        <a class="pull-left" href="#">
                                          <img class="avatar" src="{{url('img/photos/2.jpg')}}" class="img-responsive" />
                                        </a>
                                          <div class="comment-author"><a href="#">Ashok</a></div>
                                          <div class="cmeta">Commented on 25/12/2012</div>
                                          <p>Nulla facilisi. Sed justo dui, scelerisque ut consectetur vel, eleifend id erat. Phasellus condimentum rutrum aliquet. Quisque eu consectetur erat.</p>
                                          <div class="clearfix"></div>
                                      </li>
                                    </ul>
                              </div>

    <!-- Comment posting -->

                              <div class="respond well">
                                 <div class="title"><h5>Post Reply</h5></div>

                                 <div class="form">
                                   <form class="form-horizontal">
                                       <div class="form-group">
                                         <label class="control-label col-md-2" for="name">Name</label>
                                         <div class="col-md-8">
                                           <input type="text" class="form-control" id="name">
                                         </div>
                                       </div>
                                       <div class="form-group">
                                         <label class="control-label col-md-2" for="email">Email</label>
                                         <div class="col-md-8">
                                           <input type="text" class="form-control" id="email">
                                         </div>
                                       </div>
                                       <div class="form-group">
                                         <label class="control-label col-md-2" for="website">Website</label>
                                         <div class="col-md-8">
                                           <input type="text" class="form-control" id="website">
                                         </div>
                                       </div>
                                       <div class="form-group">
                                         <label class="control-label col-md-2" for="comment">Comment</label>
                                         <div class="col-md-8">
                                           <textarea class="form-control" id="comment" rows="3"></textarea>
                                         </div>
                                       </div>
                                       <div class="form-group">
										<div class="col-md-8 col-md-offset-2">
                                         <button type="submit" class="btn btn-default">Submit</button>
                                         <button type="reset" class="btn btn-default">Reset</button>
										</div>
                                       </div>
                                   </form>
                                 </div>
                              </div>

    <!-- Navigation -->

                              <div class="navigation button">
                                    <div class="pull-left"><a href="#">&laquo; Previous Post</a></div>
                                    <div class="pull-right"><a href="#">Next Post &raquo;</a></div>
                                    <div class="clearfix"></div>
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
                                 <p>Nulla facilisi. Sed justo dui, id erat. Morbi auctor adipiscing tempor. Phasellus condimentum rutrum aliquet. Quisque eu consectetur erat. Proin rutrum, erat eget posuere semper, <em>arcu mauris posuere tortor</em>,velit at <a
                                             href="#">magna sollicitudin cursus</a> ac ultrices magna. Aliquam consequat, purus vitae auctor ullamcorper, sem velit convallis quam, a pharetra justo nunc et mauris. </p>
                              </div>
                           </div>
                        </div>
                     </div>



                  </div>
               </div>
            </div>


    <div class="border"></div>

@endsection()