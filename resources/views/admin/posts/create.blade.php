@extends('layouts.app')

@section('content')

	<div class="panel panel-default">
		<div class="panel-heading">
			Create a new post
		</div>
		<div class="panel-body">
			<form action="{{ route('post.store') }}" method="post">
			{{ csrf_field() }}
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" class="form-control" name="title">
				</div>
				<div class="form-group">
					<label for="featured">Featured image</label>
					<input type="file" class="form-control" name="featured">
				</div>
				<div class="form-group">
					<label for="content">Content</label>
					<textarea name="content" id="content" class="form-control" cols="5" rows="5"></textarea>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-block btn-success" value="Submit">
				</div>
			</form>
		</div>
	</div>

@stop