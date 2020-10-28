@extends('layouts.default')
@section('content')
<section class="hero is-medium header-image">
	<div class="hero-body">
		<div class="container">
			<div class="columns">
				<div class="column">
					<h1 class="title">
						107.8 Pass FM
					</h1>
					<h2 class="subtitle">
						Radio komunitas bikin warga makin cerdas
					</h2>
				</div>
				<div class="column">
					<!--<img src="./assets/podcast.svg" width="30%" alt="" srcset="">-->
				</div>
			</div>
		</div>
	</div>
</section>
<section class="hero is-light">
	<div class="hero-body has-text-centered">
		<div class="container">
			<h2 class="title">Live Stream</h2>
			<h3 class="subtitle">
				Nama Program
			</h3>
			<iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fradiokpassbandung%2Fvideos%2F691075275130646%2F" style="border:none;overflow:hidden;width:600px;height:348px" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media" allowFullScreen="true"></iframe>
		</div>
	</div>
</section>
<section class="section">
	<div class="container is-clipped">
		<h1 class="title">Program</h1>
		<div id="slider">
			<div class="card">
				<div class="card-image">
					<figure class="image is-16by9 is-covered">
						<img src="https://images.unsplash.com/photo-1550921082-c282cdc432d6?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" alt="" />
					</figure>
				</div>
				<div class="card-content">
					<div class="item__title">
						Mon titre 1
					</div>
					<div class="item__description">
						Ici une petite description pour tester le slider
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-image">
					<figure class="image is-16by9 is-covered">
						<img src="https://images.unsplash.com/photo-1550945771-515f118cef86?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1000&q=80" alt="" />
					</figure>
				</div>
				<div class="card-content">
					<div class="item__title">
						Mon titre 2
					</div>
					<div class="item__description">
						Ici une petite description pour tester le slider
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-image">
					<figure class="image is-16by9 is-covered">
						<img src="https://images.unsplash.com/photo-1550971264-3f7e4a7bb349?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" alt="" />
					</figure>
				</div>
				<div class="card-content">
					<div class="item__title">
						Mon titre 3
					</div>
					<div class="item__description">
						Ici une petite description pour tester le slider
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-image">
					<figure class="image is-16by9 is-covered">
						<img src="https://images.unsplash.com/photo-1550931937-2dfd45a40da0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" alt="" />
					</figure>
				</div>
				<div class="card-content">
					<div class="item__title">
						Mon titre 4
					</div>
					<div class="item__description">
						Ici une petite description pour tester le slider
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-image">
					<figure class="image is-16by9 is-covered">
						<img src="https://images.unsplash.com/photo-1550930516-af8b8cc4f871?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1000&q=80" alt="" />
					</figure>
				</div>
				<div class="card-content">
					<div class="item__title">
						Mon titre 5
					</div>
					<div class="item__description">
						Ici une petite description pour tester le slider
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-image">
					<figure class="image video-container is-16by9">
						<iframe type="text/html" src="https://www.youtube.com/embed/H0v773vKS_U" frameborder="0"></iframe>
					</figure>
				</div>
				<div class="card-content">
					<div class="item__title">
						Mon titre 6
					</div>
					<div class="item__description">
						Ici une petite description pour tester le slider
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
