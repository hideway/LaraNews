@if (count($errors) > 0)
<div class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

<form action="{{ (isset($data)) ? route('posts.update', $data->id) : route('posts.store') }}" method="post">{{ csrf_field() }}
@if(Route::currentRouteName() == 'posts.edit')
	<input type="hidden" name="_method" value="put">
@endif

		<div class="form-group">
			<label for="name">Title</label>
			<input type="text" class="form-control" 
			id="name" 
			placeholder="Title" 
			name="name" 
			value="{{ (isset($data->name)) ? $data->name : old('name') }}"
			>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Slug</label>
			<input type="text" class="form-control" 
			id="slug" 
			placeholder="Slug" 
			name="slug" 
			value="{{ (isset($data->slug)) ? $data->slug : old('slug') }}"
			>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Content</label>
			<textarea class="form-control" 
			name="content" 
			rows="3" 
			id="content">{{ (isset($data->content)) ? $data->content : old('content') }}
		</textarea>
	</div>
	<div class="checkbox">
		<label>
			<input type="checkbox" name="online" value=1 checked="checked"> Online
		</label>
	</div>
	@if(Route::currentRouteName() === 'post.edit')
	<button type="submit" class="btn btn-default">Edit</button>
	@else
	<button type="submit" class="btn btn-default">Submit</button>
	@endif
</form>