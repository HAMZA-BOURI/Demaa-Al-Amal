@extends('ADMIN.layouts.Master')

@section('titre')
    {{ $titre = 'List Publication' }}
@endsection
@section('main')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Publication List</h4>
                    <h6>Manage Publication</h6>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-top">
                        <div class="search-set">
                            <div class="search-path">
                                <a class="btn btn-filter" id="filter_search">
                                    <img src="/assets_dashboard/img/icons/filter.svg" alt="img">
                                    <span><img src="/assets_dashboard/img/icons/closes.svg" alt="img"></span>
                                </a>
                            </div>
                            <div class="search-input">
                                <a class="btn btn-searchset">
                                    <img src="/assets_dashboard/img/icons/search-white.svg" alt="img">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table  datanew">
                                <x-Admin_Comp.table_list_-publication/>
                                <x-Admin_Comp.Data.data_list_-publication :dataAdmin="$publication"/>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
