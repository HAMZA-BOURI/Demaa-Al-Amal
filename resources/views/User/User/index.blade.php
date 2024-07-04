@extends('User.layouts.Master')
@section('titre')
    {{$titre="Home"}}
@endsection
@section('main')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Profile</h4>
                    <h6>User Profile</h6>
                </div>
            </div>
            <form action="{{route('Update')}}" method="post">
                @csrf
            <div class="card">
                <div class="card-body">
                    <div class="profile-set">
                        <div class="profile-head">
                        </div>
                        <div class="profile-top">
                            <div class="profile-content">
                                <div class="profile-contentimg">

                                    <img src="/User_dashboard/img Blood/{{$user->Type_Blood}}.jpg" alt="img" id="blah">
                                </div>
                                <div class="profile-contentname">
                                    <h2>{{$user->name}} {{$user->Prenom}}</h2>
                                    <h4>Updates Your Photo and Personal Details.</h4>
                                </div>
                            </div>
                            <div class="ms-auto">
                                <button type="submit" class="btn btn-submit me-2">Save</button>
                                <a href="javascript:void(0);" class="btn btn-cancel">Cancel</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="name" value="{{$user->name}}" placeholder="William">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="surname" value="{{$user->Prenom}}" placeholder="Castilo">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" value="{{$user->mail}}" name="mail" placeholder="william@example.com">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label>CIN</label>
                                <input type="text" value="{{$user->CIN}}" name="CIN" placeholder="WAXXXXXX">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" value="{{$user->Adresse}}" name="address" placeholder="Address">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" value="{{$user->Phone}}" name="Phone">
                            </div>
                        </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>Blood Type</label>
                                    <input type="text" name="blood_type"  value="{{$user->Type_Blood}}"  >
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>UserName</label>
                                    <input type="text" name="username" value="{{$user->UserName}}"   >
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="form-group">
                                    <label>Password</label>
                                    <div class="pass-group">
                                        <input type="password" name="password" class=" pass-input">
                                        <span class="fas toggle-password fa-eye-slash"></span>
                                    </div>
                                </div>
                            </div>
                        <div class="col-lg-6 col-sm-12">
                            <select name="Sex" class="form-select">
                                <option>male</option>
                                <option>Female</option>
                            </select>
                        </div>
                    </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
