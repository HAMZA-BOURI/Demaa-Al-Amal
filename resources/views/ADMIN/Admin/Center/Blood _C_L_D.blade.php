@extends('ADMIN.layouts.Master')

@section('titre')
    {{ $titre = 'Center Details' }}
@endsection

@section('main')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h3>Center Details</h3>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="card-sales-split">
                        <h2>Center Detail :</h2>
                        <ul>
                            <li>
                                <a href="{{route("FormEditCenter",$center->id)}}"><img src="/assets_dashboard/img/icons/edit.svg" alt="img"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="invoice-box table-height"
                         style="max-width: 1600px; width: 100%; overflow: auto; margin: 15px auto; padding: 0; font-size: 14px; line-height: 24px; color: #555;">
                        <table cellpadding="0" cellspacing="0" style="width: 100%; line-height: inherit; text-align: left;">
                            <tbody>
                            <x-Admin_Comp.table-c-l-d_data :data="$center"/>
                            <x-Admin_Comp.table-c-l-d/>
                            <x-Admin_Comp.Data.data-c-l-d :Emp="$Emp" :data="$center"/>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-select">
                                    <option @if($center->Status == 'Active') selected @endif>Active</option>
                                    <option @if($center->Status == 'In Active') selected @endif>In Active</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="total-order w-100 max-widthauto m-auto mb-4">
                                    <ul>
                                        <li>
                                            <h4>Stock</h4>
                                            <h5>{{ $center->Stock }}</h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="total-order w-100 max-widthauto m-auto mb-4">
                                    <ul>
                                        <li class="total">
                                            <h4>Donor</h4>
                                            <h5>{{ $center->Donor }}</h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <a href="javascript:void(0);" class="btn btn-submit me-2">Update</a>
                            <a href="javascript:void(0);" class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
