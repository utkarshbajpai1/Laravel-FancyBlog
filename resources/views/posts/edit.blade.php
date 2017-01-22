@extends('main')

@section('title' , '|Edit Blog Posts')

@section('content')
	
	<div class="row"  style="margin-top:100px">
		{!! Form::model( $post , ['route' => ['posts.update' , $post->id] , 'method' => 'PUT']) !!}
		<div class="col-md-8">
			{{ Form::label('title' , 'Title:')}}
			{{ Form::text( 'title' , null , ["class" => 'form-control'] ) }}


			{{ Form::label('slug') , 'Slug:' }}
			{{ Form::text('slug' , null , ["class" => 'form-control'] ) }}

			{{Form::label('body' , 'Body:' , ['class' => 'form-spacing-top'] )}}
			{{ Form::textarea('body' , null , ['class' => 'form-control']) }}
		</div>

		<div class="col-md-4"  style="background-color:#C0C0C0">

			<div class="well">

				<dl class="dl-horizontal"  style="padding-top:10px;">
					<dt>created at:</dt>
					<dd>{{$post->created_at}}</dd>
				</dl>
				<dl class="dl-horizontal">
					<dt>Last Updated At:</dt>
					<dd>{{$post->updated_at}}</dd>
				</dl>

				<div class="row"  style="padding:20px;">
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.show' , 'Cancel' , array($post->id),array('class'=> 'btn btn-danger btn-block')) !!}
					</div>

					<div class="col-sm-6">
						{{ Form::submit('Save Changes' , [ 'class' => 'btn btn-block btn-success' ]) }}
					</div>
				</div>	

			</div>
		</div>
		{!! Form::close() !!}
	</div>	<!--end of row-->
@stop