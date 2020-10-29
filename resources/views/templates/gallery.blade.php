	<!-- Start Gallery -->
	<div id="gallery" class="gallery-box">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Gallery</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					</div>
				</div>
			</div>
			<div class="row">
				<ul class="popup-gallery clearfix">
					@foreach ($galleries->shuffle()->splice(0,8) as $gallery)
					<li>
						@if (Storage::disk('public')->has($gallery->img))
						<a href={{asset('storage/'.$gallery->img)}}>
							<img class="img-fluid img-thumbnail" src={{asset('storage/'.$gallery->img)}} alt="single image">
							<span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
						</a>
						@else
						<a href={{$gallery->img}}>
							<img class="img-fluid img-thumbnail" src={{$gallery->img}} alt="single image">
							<span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
						</a>
						@endif
					</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
	<!-- End Gallery -->
	