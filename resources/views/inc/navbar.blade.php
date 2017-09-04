<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav">
			<li class="nav-item {{Request::is('/')?'active':''}}">
				<a class="nav-link " href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item {{Request::is('contact')?'active':''}}">
				<a class="nav-link" href="{{ url('/contact') }}">Contact</a>
			</li>
			<li class="nav-item {{Request::is('messages')?'active':''}}">
				<a class="nav-link" href="{{ url('/messages') }}">Messages</a>
			</li>
		</ul>
	</div>
</nav>

