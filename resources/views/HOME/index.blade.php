@extends('HOME.Layouts.Master')
@section('titre')
    {{$titre="Home"}}
@endsection
@section('main')
    <!-- ################# Slider Starts Here#######################--->
    <x-Home.annonce :Annonces="$Annonces"/>
    <!--*************** About Us Starts Here ***************--->
    <!-- Articles Start -->
    <x-Home.publication  :Pub="$Pub"/>
    <!-- Articles End -->
    <!--################# Donation Process Start Here #######################--->
    <section id="process" class="donation-care">
        <div class="container">
            <div class="row session-title">
                <h2>Donation Process</h2>
                <p>The donation process from the time you arrive center until the time you leave</p>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu">
                        <img src="assets/images/gallery/g1.jpg" alt="">
                        <h4><b>1 - </b>Health and Eligibility ?</h4>
                        <a href="/Health and Eligibility" class="btn btn-sm btn-danger">Read More <i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu">
                        <img src="assets/images/gallery/g2.jpg" alt="">
                        <h4><b>2 - </b>Health Assessment ?</h4>
                        <a href="/Health assessment" class="btn btn-sm btn-danger">
                            Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu">
                        <img src="assets/images/gallery/g3.jpg" alt="">
                        <h4><b>3 - </b>What Happens to Donated Blood ?</h4>
                        <a href="/What Happens to Donated Blood" class="btn btn-sm btn-danger">Read More <i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu">
                        <img src="assets/images/gallery/g4.jpg" alt="">
                        <h4><b>4 - </b>Who You Could Help ?</h4>
                        <a href="/Who You Could Help" class="btn btn-sm btn-danger">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
@endsection
