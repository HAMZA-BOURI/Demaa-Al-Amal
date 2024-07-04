@props(["C_List","Emp"])
@extends('ADMIN.layouts.Master')
@section('titre')
    {{ $titre = 'ADD Center' }}
@endsection
@section('main')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Create Center</h4>
                    <h6>Add Center Return</h6>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <form action="/Admin/ADD Center" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Center Name</label>
                                    <input name="Center_Name" type="text">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="mail" type="text">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input name="Phone" type="text">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Start Date</label>
                                    <div class="input-groupicon">
                                        <input name="DateS" type="date" placeholder="DD-MM-YYYY" class="form-control">

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Ville</label>
                                    <select name="ville" class="form-select">
                                        <option>Choose Ville</option>
                                        <option>Berrchid</option>
                                        <option>Casablanca</option>
                                        <option>Settat</option>
                                        <option>Jadida</option>
                                        <option>Mohammedia</option>
                                    </select>
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
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Employee Name</label>
                                    <div class="row">
                                        <div class="col-lg-10 col-sm-10 col-10">
                                            <select class="form-select " id="Worck">
                                                <option></option>
                                                @foreach($Worke as $item)
                                                    <option
                                                        value="{{$item["id"]}}">{{$item['Nom']}} {{$item['Prenom']}} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-2 col-sm-2 col-2 ps-0">
                                            <div class="add-icon">
                                                <a href="javascript:void(0);" onclick="add()"><img
                                                        src="/assets_dashboard/img/icons/plus1.svg"
                                                        alt="img"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br/>

                        <div class="row">
                            <div class="table-responsive ">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Employee Name</th>
                                        <th>CIN</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Role</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody id="table_Worke">

                                    </tbody>
                                </table>
                            </div>
                            <br>
                            <div class="col-lg-12">
                                <button type="submit" onclick="return test()" class="btn btn-submit me-2">Submit
                                </button>
                                <a href="salesreturnlist.html" class="btn btn-cancel">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="/assets_dashboard/js/AddWorks.js">
    </script>
    <script>
        function test() {
            // Get elements by name and check if their values meet the conditions
            let centerName = document.getElementsByName("Center_Name")[0]?.value;
            let phone = document.getElementsByName("Phone")[0]?.value;
            let mail = document.getElementsByName("mail")[0]?.value;
            let dateS = document.getElementsByName("DateS")[0]?.value;
            let ville = document.getElementsByName("ville")[0]?.value;
            let status = document.getElementsByName("Status")[0]?.value;

            // Debugging logs to check the values
            console.log('Center_Name:', centerName);
            console.log('Phone:', phone);
            console.log('Mail:', mail);
            console.log('DateS:', dateS);
            console.log('Ville:', ville);
            console.log('Status:', status);

            // Check if any of the required fields are empty or not selected
            if (!centerName ||
                !phone ||
                !mail ||
                !dateS ||
                ville === "Choose Ville" ||
                status === "Choose Status") {
                alert('Form validation failed');
                return false;
            } else {
                return true;
            }
        }


    </script>
@endsection
