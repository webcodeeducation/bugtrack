@extends ('/layouts.main') 

@push('title')
<title>
    Home Page
</title>
@endpush

@section('main-section')  


   
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h5 class="mb-3"> <b> Powerful System </b> </h5>
                            <p>This Bug Tracking Tool is designed to handle all your needs with a dedicated dashboard support to track all the unwanted bugs !</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5 class="mb-3"> <b> 24x7 Support </b> </h5>
                            <p>This Software has full support system round the clock for guidance & assistance. Customer Satisfaction & Problem Resolution has always been our priority !</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <h5 class="mb-3"> <b> Easy to Use </b> </h5>
                            <p>This Software is designed with a user friendly interface to provide the easiest bug tracking experience ever !</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <h5 class="mb-3"> <b> Secure </b> </h5>
                            <p>This Software is encrypted with a user login based system to prevent unauthorized access !</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    
                    <h1 class="mb-4">Welcome to Bug Track Tool</h1>
                    <p class="mb-4">This tool will help you track all ur bugs in a single software. Users gets access to his own personal account where they are greeted with a neat & clean dashboard providing all vital information a user would ever need !! </p>
                    <p class="mb-4">Click the button below to start tracking your bugs : </p>
                    
                    <a class="btn btn-primary py-3 px-5 mt-2" href="{{url('/admin/login')}}">Lets Begin :) </a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"> Scroll Up <i class="bi bi-arrow-up"></i></a>

@endsection