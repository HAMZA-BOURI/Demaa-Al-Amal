<footer id="Contact" class="container-fluid">
    <div class="container">
        <div class="row content-ro">
            <div class="col-lg-4 col-md-12 footer-contact">
                <h2>Contact Informatins</h2>
                <div class="address-row">
                    <div class="icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="detail">
                        <p>Ctre National de Transfusion Sanguine, Rabat, Morocco</p>
                    </div>
                </div>
                <div class="address-row">
                    <div class="icon">
                        <i class="far fa-envelope"></i>
                    </div>
                    <div class="detail">
                        <p> Demaa.Al.Amal@gmail.com <br> Demaa.Al.Amal.Support@gmail.com </p>
                    </div>
                </div>
                <div class="address-row">
                    <div class="icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="detail">
                        <p> +212 666902669 <br> +212 656905921 </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 footer-links">


            </div>
            <div class="col-lg-4 col-md-12 footer-form">
                <div class="form-card">
                    <div class="form-title">
                        <h4>Create Account</h4>
                    </div>
                    <form action="{{route('Singin')}}" method="post">
                        @csrf
                        <div class="form-body">
                            <input type="text" name="Name" placeholder="Name" class="form-control">
                            <input type="text" name="CIN" placeholder="CIN" class="form-control">
                            <input type="text" name="mail" placeholder="Email Address" class="form-control">
                            <input type="password" name="Password" placeholder="Password" class="form-control">
                            <button class="btn btn-sm btn-primary w-100">SING UP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer-copy">
            <div class="row">

            </div>
        </div>
    </div>
</footer>
