@extends('ADMIN.layouts.Master')

@section('titre')
    {{ $titre = 'Add new Workers' }}
@endsection

@section('main')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Workers Management</h4>
                    <h6>Add Workers</h6>
                </div>
            </div>
            <form action="/Admin/new Workers" method="post">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input name="Name" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="mail" type="text">
                                </div>
                                <div class="form-group">
                                    <label>CIN</label>
                                    <input name="CIN" type="text">
                                </div>
                            </div>

                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>First name</label>
                                    <input name="F_name" type="text">
                                </div>
                                <div class="form-group">
                                    <label>Mobile</label>
                                    <input name="Phone" type="text">
                                </div>
                                <div class="form-group">
                                    <label >Role</label>
                                    <select name="Role" class="form-select">
                                        <option>Select</option>
                                        <option>Secretary</option>
                                        <option>The Doctor</option>
                                        <option>The Nurse</option>
                                        <option>Security</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-submit me-2">Submit</button>
                                <a href="/Admin/List Admins" class="btn btn-cancel">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
