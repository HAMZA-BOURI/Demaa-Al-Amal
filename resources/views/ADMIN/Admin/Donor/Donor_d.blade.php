@extends('ADMIN.layouts.Master')
@section('titre')
    {{ $titre = 'Donor Details' }}
@endsection
@section('main')
    @foreach($Donor as $iteme) @endforeach
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Donor Details</h4>
                    <h6>{{ $iteme['name'] }}</h6>
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
                                        <h6>{{ $iteme['id'] }}</h6>
                                    </li>
                                    <li>
                                        <h4>Full Name</h4>
                                        <h6>{{ $iteme['name'] }} {{ $iteme['Prenom'] }}</h6>
                                    </li>
                                    <li>
                                        <h4>CNI</h4>
                                        <h6>{{ $iteme['CIN'] }}</h6>
                                    </li>
                                    <li>
                                        <h4>Type Blood</h4>
                                        <h6>{{ $iteme['Type_Blood'] }}</h6>
                                    </li>
                                    <li>
                                        <h4>Phone Number</h4>
                                        <h6>{{ $iteme['Phone'] }}</h6>
                                    </li>
                                    <li>
                                        <h4>Mail</h4>
                                        <h6>{{ $iteme['mail'] }}</h6>
                                    </li>
                                    <li>
                                        <h4>Address</h4>
                                        <h6>{{ $iteme['Adresse'] }}</h6>
                                    </li>
                                    <li>
                                        <h4>Sex</h4>
                                        <h6>{{ $iteme['sex'] }}</h6>
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
