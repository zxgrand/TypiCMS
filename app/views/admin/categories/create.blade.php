@section('main')

	{{ Former::vertical_open()->method('POST')->action('admin/categories/')->role('form') }}
		@include('admin.categories._form')
	{{ Former::close() }}

@stop