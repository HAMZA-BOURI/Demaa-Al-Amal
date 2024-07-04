@extends('ADMIN.layouts.Master')
@section('titre')
    {{ $titre = 'Blood Donations Details' }}
@endsection
@section('main')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Blood Donations Details</h4>
                    <h6>{{ $Dlist['name'] }}</h6>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="productdetails">
                                <ul class="product-bar">
                                    <li>
                                        <h4>ID Donation</h4>
                                        <h6>{{ $Dlist['done_id'] }}</h6>
                                    </li>
                                    <li>
                                        <h4>Full Name</h4>
                                        <h6>{{ $Dlist['name'] }} {{ $Dlist['Prenom'] }}</h6>
                                    </li>
                                    <li>
                                        <h4>CNI</h4>
                                        <h6>{{ $Dlist['CIN'] }}</h6>
                                    </li>
                                    <li>
                                        <h4>Type Blood</h4>
                                        <h6>{{ $Dlist['Type_Blood'] }}</h6>
                                    </li>
                                    <li>
                                        <h4>Date Donation</h4>
                                        <h6>{{ $Dlist['Date_D'] }}</h6>
                                    </li>
                                    <li>
                                        <h4>Phone Number</h4>
                                        <h6>{{ $Dlist['Phone'] }}</h6>
                                    </li>
                                    <li>
                                        <h4>Donation Center</h4>
                                        <h6>{{ $Dlist['Nome'] }}</h6>
                                    </li>
                                    <li>
                                        <h4>Mail</h4>
                                        <h6>{{ $Dlist['mail'] }}</h6>
                                    </li>
                                    <li>
                                        <h4>Address</h4>
                                        <h6>{{ $Dlist['Adresse'] }}</h6>
                                    </li>
                                    <li>
                                        <h4>Sex</h4>
                                        <h6>{{ $Dlist['sex'] }}</h6>
                                    </li>
                                    <li>
                                        <h4>Quantity of blood bag</h4>
                                        <h6>{{ $Dlist['qte'] }}</h6>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
