@extends('fontend.layouts.main')

@section('main-container')

    <!-- end header section -->
  </div>

  <!-- about section -->

  <section class="about_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container ">
              <h2>
                About Us
              </h2>
            </div>
            <p>
              It is established fact that a reader will be distracted by the
              readable content of a page when looking at its layout. The point
              of using Lorem Ipsum is that it has a more-or-less normal
              distribution of letters, generators on the Internet tend to repeat predefined chunks as
              necessary, making this the first true generator on the
              Internet.
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="{{url('fontend/images/about-img.jpg')}}" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- info section -->

@endsection  