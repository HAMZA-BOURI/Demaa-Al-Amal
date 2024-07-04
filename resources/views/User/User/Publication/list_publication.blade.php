@extends('User.layouts.Master')
@section('titre')
    {{ $titre = 'Publication List' }}
@endsection
@section('main')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Publications list</h4>
                    <h6>Manage Publications</h6>
                </div>
                <div class="page-btn">
                    <a href="{{route('FormADDPub')}}" class="btn btn-added"><img src="/User_dashboard/img/icons/plus.svg" alt="img"
                                                                                   class="me-2">Add Publications</a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-top">
                        <div class="search-set">
                            <div class="search-path">
                                <a class="btn btn-filter" id="filter_search">
                                    <img src="/User_dashboard/img/icons/filter.svg" alt="img">
                                    <span><img src="/User_dashboard/img/icons/closes.svg" alt="img"></span>
                                </a>
                            </div>
                            <div class="search-input">
                                <a class="btn btn-searchset">
                                    <img src="/User_dashboard/img/icons/search-white.svg" alt="img">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table  datanew">
                            <x-User.table-user_list/>
                            <x-User.Data.data_user_list :Pub="$Pub"/>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
