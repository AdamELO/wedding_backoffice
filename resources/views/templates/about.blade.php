	<!-- Start About us -->
	<div id="about" class="about-box">
		<div class="about-a1">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title-box">
							<h2>{{$abouts[0]->subtitle}} <span>&</span> {{$abouts[1]->subtitle}}</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="row align-items-center about-main-info">
							<div class="col-lg-8 col-md-6 col-sm-12">
								<h2> About <span>{{$abouts[0]->subtitle}}</span></h2>
								<p>{{$abouts[0]->text}}</p>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-12">
								<div class="about-img">
								@if (Storage::disk('public')->has($abouts[0]->img))
									<img class="img-fluid rounded" src="{{asset('storage/'.$abouts[0]->img)}}"/>
                    			@else
									<img class="img-fluid rounded" src="{{$abouts[0]->img}}"/>
                    			@endif
								</div>
							</div>
						</div>
						<div class="row align-items-center about-main-info">
							<div class="col-lg-4 col-md-6 col-sm-12">
								<div class="about-img">
								@if (Storage::disk('public')->has($abouts[1]->img))
									<img class="img-fluid rounded" src="{{asset('storage/'.$abouts[1]->img)}}"/>
                    			@else
									<img class="img-fluid rounded" src="{{$abouts[1]->img}}"/>
                    			@endif
								</div>
							</div>
							<div class="col-lg-8 col-md-6 col-sm-12">
								<h2> About <span>{{$abouts[1]->subtitle}}</span></h2>
								<p>{{$abouts[1]->text}}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About us -->