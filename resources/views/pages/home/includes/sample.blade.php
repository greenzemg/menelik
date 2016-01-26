<section>
	<div class="row">
		<div class="col-md-12">
			<div class="dropdown">
				<button class="btn btn-default dropdown-toggle" type="button" id="dd-menu" data-toggle="dropdown">
					Dropdown <spane class="caret"></spane>
				</button>
				<ul class="dropdown-menu">
					<li>
						<a href="">Item 1</a>
						<a href="">Item 2</a>
						<a href="">Item 3</a>
						<a href="">Item 4</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-12">
			{{-- Tabes  --}}
			<ul class="nav nav-pills nav-justified">
				<li class="active"><a href="#section-1" data-toggle="tab">Section 1</a></li>
				<li><a href="#section-2" data-toggle="tab">Section 2</a></li>
				<li><a href="#section-3" data-toggle="tab">Section 3</a></li>
			</ul>
			{{-- Tabes contetn --}}
			<div class="tab-content">
				<div class="tab-pane active fade in" id="section-1">
					<p>This is section 1 content</p>
				</div>
				<div class="tab-pane fade" id="section-2">
					<p>This is section 2 content</p>
				</div>
				<div class="tab-pane fade" id="section-3">
					<p>This is section 3 content</p>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<div class="row">
		<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-link">
						<spane class="icon-bar"></spane>
						<spane class="icon-bar"></spane>
						<spane class="icon-bar"></spane>
					</button>
					<a href="#" class="navbar-brand">Brand</a>
				</div>
				<div class="collapse navbar-collapse" id="nav-link">
					<ul class="nav navbar-nav">
						<li><a href="">link 1</a></li>
						<li><a href="">link 2</a></li>
						<li><a href="">link 3</a></li>
					</ul>
					<form action="" class="navbar-form">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="search">
						</div>
						<button class="btn btn-default" type="submit">Search</button>
					</form>
				</div>
			</div>
		</nav>
	</div>
</section>