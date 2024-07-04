@extends('ADMIN.layouts.Master')

@section('titre')
    {{ $titre = 'ADD Admin' }}
@endsection
@section('main')
    @foreach($admin as $item)
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Admin Management</h4>
                    <h6>Add Admin</h6>
                </div>
            </div>
            <form action="{{route('UpdatAdmin',$item->id)}}" method="post">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Admin First Name</label>
                                    <input name="F_nameF" value="{{$item->nom}}" type="text">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Admin Last Name</label>
                                    <input name="L_name" value="{{$item->Prenom}}" type="text">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="mail" value="{{$item->mail}}" type="text">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input name="Phone" value="{{$item->Phone}}" type="text">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Choose Center</label>
                                    <select name="Center" class="form-select">
                                        <option>Choose Center</option>
                                        @foreach($center as $value)
                                            <option value="{{$value->id}}">{{$value->Nome}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="Status" class="form-select">
                                        <option>Choose Status</option>
                                        <option @if($item->Status == 'Active') selected @endif>Active</option>
                                        <option @if($item->Status == 'In Active') selected @endif>In Active</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>CIN</label>
                                    <input name="CIN" value="{{$item->CIN}}"  type="text">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>UserName</label>
                                    <input name="UserName" value="{{$item->Username}}" type="text">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Password</label>
                                    <div class="pass-group">
                                        <input name="password" value="{{$item->Password}}" type="password" class=" pass-input">
                                        <span class="fas toggle-password fa-eye-slash"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <div class="pass-group">
                                        <input name="C_password" type="password" class=" pass-inputs">
                                        <span class="fas toggle-passworda fa-eye-slash"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-submit me-2" onclick="return test()">Submit
                                </button>
                                <a href="/Admin/List Admins" class="btn btn-cancel">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @endforeach
    <script>
        function test() {
            // Get elements by name and check if their values meet the conditions
            let firstName = document.getElementsByName("F_nameF")[0]?.value;
            let lastName = document.getElementsByName("L_name")[0]?.value;
            let email = document.getElementsByName("mail")[0]?.value;
            let phone = document.getElementsByName("Phone")[0]?.value;
            let center = document.getElementsByName("Center")[0]?.value;
            let status = document.getElementsByName("Status")[0]?.value;
            let cin = document.getElementsByName("CIN")[0]?.value;
            let userName = document.getElementsByName("UserName")[0]?.value;
            let password = document.getElementsByName("password")[0]?.value;
            let confirmPassword = document.getElementsByName("C_password")[0]?.value;

            // Debugging logs to check the values
            console.log('First Name:', firstName);
            console.log('Last Name:', lastName);
            console.log('Email:', email);
            console.log('Phone:', phone);
            console.log('Center:', center);
            console.log('Status:', status);
            console.log('CIN:', cin);
            console.log('User Name:', userName);
            console.log('Password:', password);
            console.log('Confirm Password:', confirmPassword);

            // Check if any of the required fields are empty or not selected
            if (!firstName ||
                !lastName ||
                !email ||
                !phone ||
                center === "Choose Center" ||
                status === "Choose Status" ||
                !cin ||
                !userName ||
                !password ||
                !confirmPassword) {
                alert('Form validation failed');
                return false;
            }
            if (password !== confirmPassword) {
                alert("Those passwords didn't match. Try again.")
                return false;
            }
            return true;
        }
    </script>
@endsection
