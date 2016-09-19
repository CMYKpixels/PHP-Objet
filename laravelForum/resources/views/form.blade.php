@extends('layouts.UI')
@section('content')

    @if (count($errors) > 0)
        <div class="alert alert_danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <h2>Make Post</h2>
    <p class="big grey">Something Goes Here.</p>
    <hr />

    <div class="row make-post">

      <div class="col-md-8 col-sm-8">
        <div class="well">
          <h5>Make Post</h5>
          <hr />
            {!! Form::open(['url'=>'form'])  !!}
            {{--<div class="form-group">--}}
            {{Form::text('title','', array('class' => 'form-control','placeholder'=>'Title this Bastardzzzz'))}}
            <br />
            <div class="form-inline">
            {{Form::text('name','', array('class' => 'form-control','placeholder'=>'Author'))}}
            {{Form::text('email','', array('class' => 'form-control','placeholder'=>'Email'))}}
            {{Form::button('<i class="fa fa-paperclip"></i>&nbsp; Add Media',['type'=>'submit','class'=>'btn btn-info'])}}
            </div>
            {{--<br />--}}
            {{--<br />--}}
            {{--<br />--}}
            <br />
            {{Form::textarea('content','',
            array(
            'class' => 'form-control',
            'row'=>'7',
            'placeholder'=>'Post goes here Mothafuckazzz'))}}
            {{--{{Form::button('<i class="fa fa-paperclip"></i>',['type'=>'submit','class'=>'btn btn-primary btn-lg btn-block'])}}--}}
            {{--{{Form::submit('Publish',['class'=>'btn btn-primary btn-lg btn-block'])}}--}}
            {!! Form::open(['url'=>'form'])  !!}
		  <div class="clearfix"></div>
        </div>
      </div>

      <div class="col-md-4 col-sm-4">

        <div class="well">
                    <form class="form-horizontal">

                      <h6>Category</h6>
                      <hr />
                      <div class="uni">
                        <label class="checkbox"><input type='checkbox' value='check1' /> General</label>
                        <label class="checkbox"><input type='checkbox' value='check2' /> Latest News</label>
                        <label class="checkbox"><input type='checkbox' value='check3' /> Health</label>
                      </div>

                      <hr />
                      <h6>Tags</h6>
                      <hr />
					  <div class="form-group">
					  <div class="col-md-12">
						<input class="form-control" type="text" placeholder="Tags" />
					  </div>
					  </div>
                      <hr />

						<div class="form-group">
						<div class="col-md-12">
						  <button class="btn btn-primary btn-sm">Publish</button>
						  <button class="btn btn-default btn-sm">Save Draft</button>
						  <button class="btn btn-danger btn-sm">Trash</button>
						 </div>
						</div>
                    </form>
        </div>

      </div>

    </div>




    <div class="border"></div>
@endsection()