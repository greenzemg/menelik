@if($errors->count() > 0)
	<div class="alert alert-danger">
		There was an error submiting the form
		@foreach($errors->all() as $error)
			<ul>
				<li> {{ $error }}</li>
			</ul>
		@endforeach
	</div>
@endif