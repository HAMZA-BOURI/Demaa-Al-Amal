@extends('ADMIN.layouts.Master')

@section('titre')
    {{ $titre = 'Add new Workers' }}
@endsection

@section('main')

    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Workers List</h4>
                </div>
                <div class="page-btn">
                    <a href="{{route('ShowformAdd')}}" class="btn btn-added"><img src="/assets_dashboard/img/icons/plus.svg"
                                                                      alt="img">Add Workers</a>
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
                                <a class="btn btn-searchset"><img src="/assets_dashboard/img/icons/search-white.svg"
                                                                  alt="img"></a>
                            </div>
                        </div>
                    </div>

                    <x-Admin_Comp.table_list_-workers :Worke="$Worke"/>

                </div>
            </div>

        </div>
    </div>
    </div>
@endsection
