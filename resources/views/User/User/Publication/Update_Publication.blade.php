@extends('User.layouts.Master')
@section('titre')
    {{ $titre = 'Update Publication' }}
@endsection
@section('main')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Add Publication</h4>
                    <h6>Create new Publication</h6>
                </div>
            </div>
            <form action="" method="post">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input type="text" value="{{$Pub->Username}}" name="Username">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" value="{{$Pub->Username}}" name="title">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" value="{{$Pub->Username}}" name="city">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Location</label>
                                    <input type="text" value="{{$Pub->Username}}" name="Location">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Blood Type</label>
                                    <select id='groupeSanguin' name='Blood_type' class="form-select" required>
                                        <option value=''>Select your blood type</option>
                                        <option value='A+' >A+</option>
                                        <option value='A-'>A-</option>
                                        <option value='B+'>B+</option>
                                        <option value='B-'>B-</option>
                                        <option value='AB+'>AB+</option>
                                        <option value='AB-'>AB-</option>
                                        <option value='O+'>O+</option>
                                        <option value='O-'>O-</option>
                                    </select><br>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Date Publication</label>
                                    <div class="input-groupicon">
                                        <input name="DateP" value="{{$Pub->Username}}" type="date" placeholder="DD-MM-YYYY" class="form-control">

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control"  name="Description">{{$Pub->Username}}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-submit me-2"> Submit</button>
                                <a href="categorylist.html" class="btn btn-cancel">Cancel</a>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
