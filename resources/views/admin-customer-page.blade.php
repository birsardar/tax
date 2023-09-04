<!DOCTYPE html>
<html>
<head>
    @include('links')
</head>
<body>
    <!-- Wrapper -->
    <div class="hk-wrapper" data-layout="vertical" data-layout-style="default" data-menu="light" data-footer="simple">
        {{-- @include('top-navbar') --}}
        @include('header')
        @include('vertical-nav')
        {{-- @include('chat-popup') --}}

        <!-- Main Content -->
        <div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="content-page-header ">
<h5>Companies</h5>
<div class="list-btn">
<ul class="filter-list">
<li>
<a class="btn btn-filters w-auto popup-toggle"><span class="me-2"><i class="fe fe-filter"></i></span>Filter </a>
</li>
<li>
<a class="btn btn-primary" href="{{ route('add-vendor') }}" data-bs-toggle="modal" data-bs-target="#add_vendor"><i class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add Vendors</a>
</li>
</ul>
</div>
</div>
</div>


<div id="filter_inputs" class="card filter-card">
<div class="card-body pb-0">
<div class="row">
<div class="col-sm-6 col-md-3">
<div class="form-group">
<label>Name</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-sm-6 col-md-3">
<div class="form-group">
<label>Email</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-sm-6 col-md-3">
<div class="form-group">
<label>Phone</label>
<input type="text" class="form-control">
</div>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class=" card-table">
<div class="card-body">
<div class="table-responsive">
    <table class="table table-center table-hover datatable">
        <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Contact No</th>
                <th>Created</th>
                <th>Username</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>
                    <h2 class="table-avatar">
                        <a href="" class="avatar avatar-sm me-2">
                            <img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-02.jpg" alt="User Image">
                        </a>
                        <a href="">{{ $row->name }} </a>
                    </h2>
                </td>
                <td>{{ $row->number }}</td>
                <td>{{ $row->created_at->format('d M Y, h:i A') }}</td>
                <td>${{ $row->email }}</td>
                <td class="d-flex align-items-center">
                    <div class="dropdown dropdown-action" id="adminOption">
                        <a href="#" class=" btn-action-icon " data-bs-toggle="dropdown" aria-expanded="false" onclick='openDropdown()'>
                            <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <ul>
                            <li>
                                    <a class="dropdown-item" href="{{ route('adminCustomerView', ['id' => $row->id]) }}" >
                                        <i class="far fa-trash-alt me-2"></i>Customers
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('adminViewVendor', ['id' => $row->id]) }}" >
                                        <i class="far fa-trash-alt me-2"></i>Vendors
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('delete-customer-admin', ['id' => $row->id]) }}" >
                                        <i class="far fa-trash-alt me-2"></i>Delete
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
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
</div>

        </div>
        <!-- /Main Content -->
    </div>
    <!-- Wrapper -->
    @include('script-links')
</body>
</html>
<script>
    function openDropdown(){
        var dropdown = document.querySelector("#adminOption .dropdown-menu");
    if (dropdown.style.display === "block") {
      dropdown.style.display = "none";
    } else {
      dropdown.style.display = "block";
    }
    }
    </script>