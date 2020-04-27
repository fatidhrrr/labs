	<!-- Contact section -->
	<div id="con_form" class="contact-section spad fix">
	    <div class="container">
	        <div class="row">
	            <!-- contact info -->
	            <div class="col-md-5 col-md-offset-1 contact-info col-push">
	                <div class="section-title left">
	                @foreach($contactus as $item)
	                    <h2>{{$item->titre}}</h2>
	                </div>
	                <p>{{$item->text}}</p>
	                <h3 class="mt60">{{$item->soustitre}}</h3>
	                <p class="con-item">{{$item->adress}}</p>
	                <p class="con-item">{{$item->numero}}</p>
	                <p class="con-item">{{$item->email}}</p>
	                @endforeach

	            </div>
				<!-- contact form -->
	            <div class="col-md-6 col-pull">
	                <form action="{{route('contactindex.store')}}" method="POST" class="form-class" id="con_form">
						@csrf
						{{-- est ce que session posssède msg  --}} 
						{{-- msg contient mon message --}}
						@if (session()->has('msg'))
							<div class="alert alert-success">{{ session('msg') }}</div>
						@endif
	                    <div class="row">
	                        <div class="col-sm-6">
	                            <input type="text" name="nom" placeholder="Your name">
	                        </div>
	                        <div class="col-sm-6">
	                            <input type="text" name="email" placeholder="Your email">
	                        </div>
	                        <div class="col-sm-12">
	                            <input type="text" name="subject" placeholder="Subject">
	                            <textarea name="message" placeholder="Message"></textarea>
	                            <button class="site-btn">send</button>
	                        </div>
	                    </div>
	                </form>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- Contact section end-->