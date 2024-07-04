@props(["C_List","Emp"])
@extends('ADMIN.layouts.Master')
@section('titre')
    {{ $titre = 'Update Publication' }}
@endsection
@section('main')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Publication Management</h4>
                    <h6>Update Publication</h6>
                </div>
            </div>
            <form action="{{route('PubUpdate',$data['id'])}}" method="post">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text"  value="{{$data['Titre']}}" name="Title" disabled>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Blood Type</label>
                                    <input type="text"  value="{{$data['Type_blood']}}" name="Title" disabled>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>location</label>
                                    <input type="text"  value="{{$data['location']}}" name="Title" disabled>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>UserName</label>
                                    <input type="text"  value="{{$data['UserName']}}" name="Title" disabled>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Ville</label>
                                    <input type="text"  value="{{$data['Ville']}}" name="Title" disabled>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="Status" class="form-select">
                                        <option>Choose Status</option>
                                        <option>Active</option>
                                        <option>In Active</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Start Public</label>
                                    <div class="input-groupicon">
                                        <input name="DateS" type="date" value="{{$data['Date_Public']}}" placeholder="DD-MM-YYYY"  class="form-control" disabled>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Stop Date</label>
                                    <div class="input-groupicon">
                                        <input name="DateE" type="date"  placeholder="DD-MM-YYYY"  class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="Description"
                                              class="form-control" disabled>{{$data['Description']}}</textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-submit me-2">Update</button>
                                <a class="btn btn-cancel" href="{{route('listPubAdmin')}}">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
