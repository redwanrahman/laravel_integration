@extends('fontend.layouts.main')

@section('main-container')

    <!-- end header section -->
  </div>

  <!-- client section -->
  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          What is says our clients
        </h2>
      </div>
      <div id="carouselExample2Indicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-7 mx-auto">
                <div class="client_container">
                  <div class="client_detail">
                    <p>
                      <i class="fa fa-quote-left" aria-hidden="true"></i> &nbsp;
                      There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                      alteration in The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
                      letters, generators on the Internet tend to repeat predefined chunks as necessary &nbsp;
                      <i class="fa fa-quote-right" aria-hidden="true"></i>
                    </p>
                  </div>
                  <div class="img-box">
                    <img src="{{url('fontend/images/client.jpg')}}" alt="">
                  </div>
                  <div class="name">
                    <h5>
                      Kev Johnson
                    </h5>
                    <h6>
                      <span>
                        Client
                      </span>
                    </h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-7 mx-auto">
                <div class="client_container">
                  <div class="client_detail">
                    <p>
                      <i class="fa fa-quote-left" aria-hidden="true"></i> &nbsp;
                      There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                      alteration in The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
                      letters, generators on the Internet tend to repeat predefined chunks as necessary &nbsp;
                      <i class="fa fa-quote-right" aria-hidden="true"></i>
                    </p>
                  </div>
                  <div class="img-box">
                    <img src="{{url('fontend/images/client.jpg')}}" alt="">
                  </div>
                  <div class="name">
                    <h5>
                      Kev Johnson
                    </h5>
                    <h6>
                      <span>
                        Client
                      </span>
                    </h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-7 mx-auto">
                <div class="client_container">
                  <div class="client_detail">
                    <p>
                      <i class="fa fa-quote-left" aria-hidden="true"></i> &nbsp;
                      There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                      alteration in The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
                      letters, generators on the Internet tend to repeat predefined chunks as necessary &nbsp;
                      <i class="fa fa-quote-right" aria-hidden="true"></i>
                    </p>
                  </div>
                  <div class="img-box">
                    <img src="{{url('fontend/images/client.jpg')}}" alt="">
                  </div>
                  <div class="name">
                    <h5>
                      Kev Johnson
                    </h5>
                    <h6>
                      <span>
                        Client
                      </span>
                    </h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#carouselExample2Indicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="1"></li>
          <li data-target="#carouselExample2Indicators" data-slide-to="2"></li>
        </ol>
      </div>
    </div>
  </section>
  <!-- end client section -->

  <!-- info section -->

@endsection  