@props(['Data'])
<div>
    <div class="row">
        <div class="col-lg-3 col-sm-6 col-12 d-flex">
            <div class="dash-count">
                <div class="dash-counts">
                    <h4>{{$Data['Donor']}}</h4>
                    <h5>Donor</h5>
                </div>
                <div class="dash-imgs">
                    <i data-feather="user"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12 d-flex">
            <div class="dash-count das1">
                <div class="dash-counts">
                    <h4>{{$Data['Blood']}}</h4>
                    <h5>Blood Bag</h5>
                </div>
                <div class="dash-imgs">
                    <img src="assets_dashboard/img/icons/blood-bag.png" alt="img" />
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12 d-flex">
            <div class="dash-count das2">
                <div class="dash-counts">
                    <h4>{{$Data['Stock']}}</h4>
                    <h5>Blood Stocks</h5>
                </div>
                <div class="dash-imgs">
                    <i class="fa-solid fa-truck-droplet" style="color: #ffffff"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12 d-flex">
            <div class="dash-count das3">
                <div class="dash-counts">
                    <h4>{{$Data['Pub']}}</h4>
                    <h5>Publication</h5>
                </div>
                <div class="dash-imgs">

                    <i class="fa-solid fa-newspaper" style="color: #ffffff"></i>
                </div>
            </div>
        </div>
    </div>
</div>
