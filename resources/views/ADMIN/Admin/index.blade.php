@extends('ADMIN.layouts.Master')
@section('titre')
    {{$titre="Home"}}
@endsection
@section('main')
    <div class="page-wrapper">
        <div class="content">
            <x-Admin_Comp.Data.data-center :Data="$result"/>
            <div class="graphBox">
                <div class="box">
                    <h2>blood donation types</h2>
                    <canvas id="myChart"></canvas>
                </div>
                <div class="box1">
                    <h2>Male & Female</h2>
                    <span>
                        <div class="dropdown" style="left: 620px">
                            <select class="form-select" name="Years" id="yearSelect" style="width: 15%;">
                                @foreach($years as $item  )
                                    <option value="{{$item["year"]}}">{{$item["year"]}}</option>
                                @endforeach
                            </select>
                        </div>
                    </span>
                    <canvas id="myChart2"></canvas>
                </div>
            </div>
            <div class="card mb-0">
                <div class="card-body">
                    <h4 class="card-title">Donor List</h4>
                    <div class="table-responsive dataview">
                        <x-Admin_Comp.table-Donor :B_Dlist="$B_Dlist" :titre="$titre"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
