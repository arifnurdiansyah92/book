@extends('layouts.app')
@section('title','Master Data - Category')
@section('content')
<section id="column-selectors">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Categories</h4>
                    <a href="{{ route('category.create') }}" class="btn btn-primary">New record</a>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table zero-configuration">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Category</th>
                                        <th>Pretty Url</th>
                                        <th>Book(s)</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $index => $value)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->pretty_url }}</td>
                                        <td>0</td>
                                        <td>
                                            <a href="{{ route('category.show',$value->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="{{ route('category.delete',$value->id) }}" class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
<!-- BEGIN: Page Vendor JS-->
<script src="/app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
<script src="/app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
<script src="/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
<script src="/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
<script src="/app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
<script src="/app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
<script src="/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
<script src="/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
<!-- END: Page Vendor JS-->
<script src="/app-assets/js/scripts/datatables/datatable.js"></script>
@endsection