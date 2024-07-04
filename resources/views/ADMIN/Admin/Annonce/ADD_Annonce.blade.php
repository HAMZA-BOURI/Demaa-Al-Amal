@props(["C_List","Emp"])
@extends('ADMIN.layouts.Master')
@section('titre')
    {{ $titre = 'Blood Donations Details' }}
@endsection
@section('main')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Announcements Management</h4>
                    <h6>Update Announcements</h6>
                </div>
            </div>
            <form action="" method="post">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="Title" >
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Start Date</label>
                                    <div class="input-groupicon">
                                        <input name="DateS" type="date" placeholder="DD-MM-YYYY"  class="form-control">

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
                                              class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Announcements Image</label>
                                    <div class="image-upload">
                                        <input type="file" name="image" accept="image/*">
                                        <div class="image-uploads">
                                            <img src="assets/img/icons/upload.svg" alt="img">
                                            <h4>Drag and drop a file to upload</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="product-list">
                                    <ul class="row">
                                        <li class="ps-0">
                                            <div class="productviewset">
                                                <div class="productviewsimg">
                                                    <img src="assets/img/customer/profile2.jpg" alt="img">
                                                </div>
                                                <div class="productviewscontent">
                                                    <a href="javascript:void(0);" class="hideset"><i
                                                            class="fa fa-trash-alt"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" >Update</button>
                                <a class="btn btn-cancel">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
