	<!-- Start Banner -->
	<div class="ulockd-home-slider">
		<div class="container-fluid">
			<div class="row">
				<div class="pogoSlider" id="js-main-slider">
					@foreach ($headers as $header)
					@if (Storage::disk('public')->has($header->img))
					<div class="pogoSlider-slide" data-transition="zipReveal" data-duration="1500" style="background-image:url({{asset('storage/'.$header->img)}});">
						<div class="lbox-caption">
							<div class="lbox-details">
								<h1>{{$header->title}}</h1>
								<h2>{{$header->subtitle}}</h2>
								<p>{{$header->subtitledate}} <strong>{{date('d F Y', strtotime($header->date)) }}</strong></p>
							</div>
						</div>
					</div>
					@else
					<div class="pogoSlider-slide" data-transition="zipReveal" data-duration="1500" style="background-image:url({{$header->img}});">
						<div class="lbox-caption">
							<div class="lbox-details">
								<h1>{{$header->title}}</h1>
								<h2>{{$header->subtitle}}</h2>
								<p>{{$header->subtitledate}} <strong>{{date('d F Y', strtotime($header->date)) }}</strong></p>
							</div>
						</div>
					</div>
					@endif
					@endforeach
				</div><!-- .pogoSlider -->
			</div>
		</div>
	</div>
	<!-- End Banner -->
	