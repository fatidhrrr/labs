    <!-- Promotion section -->
    <div class="promotion-section">
        <div class="container">
            <div class="row">
				<div class="col-md-9">
					@foreach($promotion as $item)
                    <h2>{{$item->titre}}</h2>
                    <p>{{$item->text}}</p>
					@endforeach
                </div>

                <div class="col-md-3">
                    <div class="promo-btn-area">
                        <a href="" class="site-btn btn-2">Browse</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Promotion section end-->
