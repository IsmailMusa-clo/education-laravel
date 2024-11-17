@extends('admin/layout/app')

@section('title')
    Blog - {{ env('APP_NAME') }}
@endsection

@section('content')
    blog section

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Blog</h5>
                </div>
                <div class="card-body">
                    <div id="model-datatables_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_length" id="model-datatables_length"><label>Show <select
                                            name="model-datatables_length" aria-controls="model-datatables"
                                            class="form-select form-select-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> entries</label></div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div id="model-datatables_filter" class="dataTables_filter"><label>Search:<input
                                            type="search" class="form-control form-control-sm" placeholder=""
                                            aria-controls="model-datatables"></label></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="model-datatables"
                                    class="table table-bordered nowrap table-striped align-middle dataTable no-footer dtr-inline"
                                    style="width: 100%;" aria-describedby="model-datatables_info">
                                    <thead>
                                        <tr>
                                            <th class="sorting sorting_asc" tabindex="0" aria-controls="model-datatables"
                                                rowspan="1" colspan="1" style="width: 41.4px;" aria-sort="ascending"
                                                aria-label="SR No.: activate to sort column descending">SR No.</th>
                                          
                                            <th class="sorting sorting_asc" tabindex="0" aria-controls="model-datatables"
                                                rowspan="1" colspan="1" style="width: 41.4px;" aria-sort="ascending"
                                                aria-label="SR No.: activate to sort column descending">name</th>
                                          
                                            <th class="sorting sorting_asc" tabindex="0" aria-controls="model-datatables"
                                                rowspan="1" colspan="1" style="width: 41.4px;" aria-sort="ascending"
                                                aria-label="SR No.: activate to sort column descending">description</th>
                                          
                                            <th class="sorting sorting_asc" tabindex="0" aria-controls="model-datatables"
                                                rowspan="1" colspan="1" style="width: 41.4px;" aria-sort="ascending"
                                                aria-label="SR No.: activate to sort column descending">img</th>
                                          
                                          
                                            <th class="sorting sorting_asc" tabindex="0" aria-controls="model-datatables"
                                                rowspan="1" colspan="1" style="width: 41.4px;" aria-sort="ascending"
                                                aria-label="SR No.: activate to sort column descending">blog_section_id</th>
                                          
                                            
                                            <th class="sorting" tabindex="0" aria-controls="model-datatables"
                                                rowspan="1" colspan="1" style="width: 43.4px;"
                                                aria-label="Action: activate to sort column ascending">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($blogs as $blog)
                                          
                                        <tr>
                                            <td class="dtr-control sorting_1" tabindex="0">{{ $blog->id}}</td>
                                            <td>{{ $blog->name }}</td>
                                            <td>{{ $blog->description }}</td>
                                            <td>{{ $blog->img }}</td>
                                            <td>{{ $blog->BlogSection->name }}</td>

                                            <td>
                                                <div class="dropdown d-inline-block">
                                                    <button class="btn btn-soft-secondary btn-sm dropdown show"
                                                        type="button" data-bs-toggle="dropdown" aria-expanded="true">
                                                        <i class="ri-more-fill align-middle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end show"
                                                        data-popper-placement="top-end"
                                                        style="position: absolute; inset: auto 0px 0px auto; margin: 0px; transform: translate(0px, -29px);"
                                                        data-popper-reference-hidden="">
                                                        <li><a href="#!" class="dropdown-item"><i
                                                                    class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                View</a></li>
                                                        <li><a class="dropdown-item edit-item-btn"><i
                                                                    class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                Edit</a></li>
                                                        <li>
                                                            <a class="dropdown-item remove-item-btn">
                                                                <i
                                                                    class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="model-datatables_info" role="status"
                                    aria-live="polite">Showing 1 to 10 of 14 entries</div>
                            </div>
                            <div class="col-sm-12 col-md-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="model-datatables_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled"
                                            id="model-datatables_previous"><a href="#"
                                                aria-controls="model-datatables" data-dt-idx="0" tabindex="0"
                                                class="page-link">Previous</a></li>
                                        <li class="paginate_button page-item active"><a href="#"
                                                aria-controls="model-datatables" data-dt-idx="1" tabindex="0"
                                                class="page-link">1</a></li>
                                        <li class="paginate_button page-item "><a href="#"
                                                aria-controls="model-datatables" data-dt-idx="2" tabindex="0"
                                                class="page-link">2</a></li>
                                        <li class="paginate_button page-item next" id="model-datatables_next"><a
                                                href="#" aria-controls="model-datatables" data-dt-idx="3"
                                                tabindex="0" class="page-link">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
