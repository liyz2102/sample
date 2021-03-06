

<header class="navbar navbar-fixed-top navbar-inverse">
	<div class="container">
		<div class="col-md-offset-1 col-md-10">
			<a href="/" id="logo">sample app</a>
			<nav>
				<ul class="nav navbar-nav navbar-right">
				@if (Auth::check()) 
					<li><a href="#">user list</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						{{ Auth::user()->name }} <b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><a href="{{ route('users.show', Auth::user()->id) }}">myself</a></li>
							<li><a href="#">edit your information</a></li>
							<li class="divider"></li>
							<li>
								<a id="logout" href="#">
									<form action="{{ route('logout') }}" method="POST">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}
										<button class="btn btn-block btn-danger" type="submit" name="button">logout</button>
									</form>
								
								</a>
							</li>
						</ul>
					</li>
					@else
					<li><a href="{{ route('help') }}">help</a></li>
					<li><a href="{{route('loginn') }}/#">login</a></li>
					@endif
				</ul>
			</nav>
		</div>
	</div>
</header>
