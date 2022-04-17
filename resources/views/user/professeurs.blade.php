<div class="page-section">
        <div class="container">
            <h1 class="text-center mb-5 wow fadeInUp">Nos Professeurs</h1>

            <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
                @foreach($professor as $professors)
            
                <div class="item">
                    <div class="card-doctor">
                        <div class="header">
                            <img height="300px" src="profphoto/{{$professors->photo}}" alt="">
                            <div class="meta">
                                <a href="#"><span class="mai-call"></span></a>
                                <a href="#"><span class="mai-logo-whatsapp"></span></a>
                            </div>
                        </div>
                        <div class="body">
                            <p class="text-xl mb-0">{{$professors->nom}}</p>
                            <span class="text-sm text-grey">{{$professors->specialite}}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            <
            </div>
        </div>
    </div>