<!DOCTYPE html>
<html lang="en">
<head>
@include('links')
</head>
<body>

<div class="main-wrapper">

@include('header')


@include('vertical-nav')


<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="content-page-header">
<h5>Customers</h5>
<div class="list-btn">
<ul class="filter-list">
<li>
<a id="filterButton" class="btn btn-filters w-auto popup-toggle" href="#">
    <span class="me-2"><i class="fe fe-filter"></i></span>Filter
</a></li>

<li>
</li>
<li>
<a class="btn btn-primary" href="{{ route('add-customer') }}"><i class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add Customer</a>
</li>
</ul>
</div>
</div>
</div>


<div class="card filter-card">
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
        <div class="card-table">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-center table-hover datatable">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Bank Name</th>
                                <th>Created</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($customer as $customerRecord)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <h2 class="table-avatar">
                                        <a href="profile.html" class="avatar avatar-md me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
                                        <a href="profile.html">{{ $customerRecord->CustomerName }}</a>
                                    </h2>
                                </td>
                                <td>{{ $customerRecord->MobileNumber }}</td>
                                <td>{{ $customerRecord->Email }}</td>
                                <td>{{ $customerRecord->BankName}}</td>
                                <td>{{ $customerRecord->created_at->format('d M Y, h:i A') }}</td>
                                <td class="d-flex align-items-center">
                                    <a href="{{ route('add-invoice', ['customerId' => $customerRecord->id]) }}" class="btn btn-greys me-2"><i class="fa fa-plus-circle me-1"></i> Invoice</a>
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class=" btn-action-icon " data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul>
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('delete-customer', ['id' => $customerRecord->CustomerId]) }}" ><i class="far fa-trash-alt me-2"></i>Remove</a>
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



<div id="filter_inputs" class="card filter-card toggle-sidebar" style="display: none;">
<div class="sidebar-layout-filter">
<div class="sidebar-header">
<h5>Filter</h5>
<a href="#" class="sidebar-closes"><i class="fa-regular fa-circle-xmark"></i></a>
</div>
<div class="sidebar-body">
<form action="#" autocomplete="off">

<div class="accordion" id="accordionMain1">
<div class="card-header-new" id="headingOne">
<h6 class="filter-title">
<a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
Customer
<span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
</a>
</h6>
</div>
<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample1">
<div class="card-body-chat">
<div class="row">
<div class="col-md-12">
<div id="checkBoxes1">
<div class="form-custom">
<input type="text" class="form-control" id="member_search1" placeholder="Search here">
<span><img src="assets/img/icons/search.svg" alt="img"></span>
</div>
<div class="selectBox-cont">
<label class="custom_check w-100">
<input type="checkbox" name="username">
<span class="checkmark"></span> Brian Johnson
</label>
<label class="custom_check w-100">
<input type="checkbox" name="username">
<span class="checkmark"></span> Russell Copeland
</label>
<label class="custom_check w-100">
<input type="checkbox" name="username">
<span class="checkmark"></span> Greg Lynch
</label>
<label class="custom_check w-100">
<input type="checkbox" name="username">
<span class="checkmark"></span> John Blair
</label>

<div class="view-content">
<div class="viewall-One">
<label class="custom_check w-100">
<input type="checkbox" name="username">
<span class="checkmark"></span> Barbara Moore
</label>
<label class="custom_check w-100">
<input type="checkbox" name="username">
<span class="checkmark"></span> Hendry Evan
</label>
<label class="custom_check w-100">
<input type="checkbox" name="username">
<span class="checkmark"></span> Richard Miles
</label>
</div>
<div class="view-all">
<a href="javascript:void(0);" class="viewall-button-One"><span class="me-2">View All</span><span><i class="fa fa-circle-chevron-down"></i></span></a>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="accordion" id="accordionMain2">
<div class="card-header-new" id="headingTwo">
<h6 class="filter-title">
<a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
Select Date
<span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
</a>
</h6>
</div>
<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
<div class="card-body-chat">
<div class="form-group">
<label class="form-control-label">From</label>
<div class="cal-icon">
<input type="email" class="form-control datetimepicker" placeholder="DD-MM-YYYY">
</div>
</div>
<div class="form-group">
<label class="form-control-label">To</label>
<div class="cal-icon">
<input type="email" class="form-control datetimepicker" placeholder="DD-MM-YYYY">
</div>
</div>
</div>
</div>
</div>


<div class="accordion" id="accordionMain3">
<div class="card-header-new" id="headingThree">
<h6 class="filter-title">
<a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
By Status
<span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
</a>
</h6>
</div>
<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample3">
<div class="card-body-chat">
<div id="checkBoxes2">
<div class="form-custom">
<input type="text" class="form-control" id="member_search2" placeholder="Search here">
<span><img src="assets/img/icons/search.svg" alt="img"></span>
</div>
<div class="selectBox-cont">
<label class="custom_check w-100">
<input type="checkbox" name="bystatus">
<span class="checkmark"></span> All Invoices
</label>
<label class="custom_check w-100">
<input type="checkbox" name="bystatus">
<span class="checkmark"></span> Paid
</label>
<label class="custom_check w-100">
<input type="checkbox" name="bystatus">
<span class="checkmark"></span> Overdue
</label>
<label class="custom_check w-100">
<input type="checkbox" name="bystatus">
<span class="checkmark"></span> Draft
</label>
<label class="custom_check w-100">
<input type="checkbox" name="bystatus">
<span class="checkmark"></span> Recurring
</label>
<label class="custom_check w-100">
<input type="checkbox" name="bystatus">
<span class="checkmark"></span> Cancelled
</label>
</div>
</div>
</div>
</div>
</div>


<div class="accordion accordion-last" id="accordionMain4">
<div class="card-header-new" id="headingFour">
<h6 class="filter-title">
<a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
Category
<span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
</a>
</h6>
</div>
<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample4">
<div class="card-body-chat">
<div id="checkBoxes3">
<div class="selectBox-cont">
<label class="custom_check w-100">
<input type="checkbox" name="category">
<span class="checkmark"></span> Advertising
</label>
<label class="custom_check w-100">
<input type="checkbox" name="category">
<span class="checkmark"></span> Food
</label>
<label class="custom_check w-100">
<input type="checkbox" name="category">
<span class="checkmark"></span> Repairs
</label>
<label class="custom_check w-100">
<input type="checkbox" name="category">
<span class="checkmark"></span> Software
</label>

<div class="view-content">
<div class="viewall-Two">
<label class="custom_check w-100">
<input type="checkbox" name="username">
<span class="checkmark"></span> Stationary
</label>
<label class="custom_check w-100">
<input type="checkbox" name="username">
<span class="checkmark"></span> Medical
</label>
<label class="custom_check w-100">
<input type="checkbox" name="username">
<span class="checkmark"></span> Designing
</label>
</div>
<div class="view-all">
<a href="javascript:void(0);" class="viewall-button-Two"><span class="me-2">View All</span><span><i class="fa fa-circle-chevron-down"></i></span></a>
</div>
</div>

</div>
</div>
</div>
</div>
</div>

<button type="submit" class="d-inline-flex align-items-center justify-content-center btn w-100 btn-primary">
<span><img src="assets/img/icons/chart.svg" class="me-2" alt="Generate report"></span>Generate report
</button>
</form>
</div>
</div>
</div>


<div class="modal custom-modal fade" id="delete_modal" role="dialog">
<div class="modal-dialog modal-dialog-centered modal-md">
<div class="modal-content">
<div class="modal-body">
<div class="form-header">
<h3>Delete FAQ</h3>
<p>Are you sure want to delete?</p>
</div>
<div class="modal-btn delete-action">
<div class="row">
<div class="col-6">
<button type="reset" data-bs-dismiss="modal" class="w-100 btn btn-primary paid-continue-btn">Delete</button>
</div>
<div class="col-6">
<button type="submit" data-bs-dismiss="modal" class="w-100 btn btn-primary paid-cancel-btn">Cancel</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>


@include('script-links')
</body>
</html>
<script>
    document.getElementById("filterButton").addEventListener("click", function () {
        var filterSidebar = document.querySelector(".toggle-sidebar");
        if (filterSidebar.style.display === "block") {
            filterSidebar.style.display = "none";
        } else {
            filterSidebar.style.display = "block";
        }
    });
</script>

