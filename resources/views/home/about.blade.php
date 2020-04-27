<!-- Intro Section -->
<div class="hero-section">
    <div class="hero-content">
        <div class="hero-center">
            @foreach ($logo as $item)
            <img src="{{asset("storage/".$item->photo)}}" height="40px" alt="">
            <p>{{$item->text}}</p>
            @endforeach
        </div>
    </div>
    <!-- slider -->
    <div id="hero-slider" class="owl-carousel">
        @foreach($carousel as $item)
        <div class="item  hero-item" data-bg="{{asset("storage/".$item->photo)}}"></div>
        <div class="item  hero-item" data-bg="img/02.jpg"></div>
        @endforeach
    </div>
</div>
<!-- Intro Section -->


<!-- About section -->
<div class="about-section">
    <div class="overlay"></div>
    <!-- card section -->
    <div class="card-section">
        <div class="container">
            <div class="row">
                <!-- single card -->
                @foreach($random as $item)
                <div class="col-md-4 col-sm-6">
                    <div class="lab-card">
                        <div class="icon">
                            <i class="{{$item->icone}}"></i>
                        </div>
                        <h2>{{$item->titre}}</h2>
                        <p>{{$item->text}}</p>
                    </div>
                </div>
                @endforeach
                <!-- single card -->
            </div>
        </div>
    </div>
    <!-- card section end-->


    <!-- About contant -->
    <div class="about-contant">
        <div class="container">
            @foreach ($para as $item)
            <div class="section-title">
            <h2>{{$item->titre}}</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                <p>{{$item->description1}}</p>
                </div>
                <div class="col-md-6">
                <p>{{$item->description2}}</p>
                </div>
            </div>
            @endforeach

            <div class="text-center mt60">
            <a href="{{route('contact')}}" class="site-btn">Browse</a>
            </div>
            <!-- popup video -->
            <div class="intro-video">
                <div class="row">
                    
                    <div class="col-md-8 col-md-offset-2">
                        <img src="img/video.jpg" alt="">
                    <a href="{{$video->video}}" class="video-popup">
                            <i class="fa fa-play"></i>
                        </a>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About section end -->
