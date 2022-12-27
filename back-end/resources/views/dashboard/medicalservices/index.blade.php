@extends('../layouts/dashboard')
@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Medical Services /</span>Medical Services List</h4>
        <hr>
            <a href="{{route('medical.create')}}" class="btn btn-primary">Careate New Medical Service</a>
        <hr>
        <div class="card">
            <div class="table-responsive text-nowrap p-3">
                <table class="table datatable-table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td>Demo</td>
                            <td>
                                <a href="#"><i class="menu-icon fa-solid fa-pen-to-square text-primary"></i></a>
                                <a href="#"><i class="menu-icon fa-solid fa-trash text-danger"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection