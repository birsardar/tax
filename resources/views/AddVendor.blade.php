<!DOCTYPE html>
<html lang="en">
<head>
@include('links')
</head>
<body>

@inlclude('header')


@include('vertical-nav')


<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="content-page-header ">
<h5>Vendors</h5>
<div class="list-btn">
<ul class="filter-list">
<li>
<a class="btn btn-filters w-auto popup-toggle"><span class="me-2"><i class="fe fe-filter"></i></span>Filter </a>
</li>
<li>
<a class="btn-filters" href="javascript:void(0);"><span><i class="fe fe-grid"></i></span> </a>
</li>
<li>
<a class="active btn-filters" href="javascript:void(0);"><span><i class="fe fe-list"></i></span> </a>
</li>
<li class>
<div class="dropdown dropdown-action">
<a href="#" class="btn-filters" data-bs-toggle="dropdown" aria-expanded="false"><span><i class="fe fe-download"></i></span></a>
<div class="dropdown-menu dropdown-menu-end">
<ul class="d-block">
<li>
<a class="d-flex align-items-center download-item" href="javascript:void(0);" download><i class="far fa-file-pdf me-2"></i>PDF</a>
</li>
<li>
<a class="d-flex align-items-center download-item" href="javascript:void(0);" download><i class="far fa-file-text me-2"></i>CVS</a>
</li>
</ul>
</div>
</div>
</li>
<li>
<a class="btn-filters" href="javascript:void(0);"><span><i class="fe fe-printer"></i></span> </a>
</li>
<li>
<a class="btn btn-import" href="javascript:void(0);"><span><i class="fe fe-check-square me-2"></i> Import</span></a>
</li>
<li>
<a class="btn btn-primary" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add_vendor"><i class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add Vendors</a>
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
<th>#</th>
<th>Name</th>
<th>Phone</th>
<th>Created</th>
<th>Balance</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
<a href="profile.html">John Smith <span><span class="__cf_email__" data-cfemail="d1bbbeb9bf91b4a9b0bca1bdb4ffb2bebc">[email&#160;protected]</span></span></a>
</h2>
</td>
<td>+1 989-438-3131</td>
<td>19 Dec 2022, 06:12 PM</td>
<td>$4,220</td>
<td class="d-flex align-items-center">
<a href="ledger.html" class="btn btn-greys me-2"><i class="fa fa-eye me-1"></i> Ledger</a>
<div class="dropdown dropdown-action">
<a href="#" class=" btn-action-icon " data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-end">
<ul>
<li>
<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_vendor"><i class="far fa-edit me-2"></i>Edit</a>
</li>
<li>
<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="far fa-trash-alt me-2"></i>Delete</a>
</li>
</ul>
</div>
</div>
</td>
</tr>
<tr>
<td>2</td>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-03.jpg" alt="User Image"></a>
<a href="profile.html">Johnny <span><span class="__cf_email__" data-cfemail="305a5f585e5e49705548515d405c551e535f5d">[email&#160;protected]</span></span></a>
</h2>
</td>
<td>+1 843-443-3282</td>
<td>15 Dec 2022, 06:12 PM</td>
<td>$1,862</td>
<td class="d-flex align-items-center">
<a href="#" class="btn btn-greys me-2"><i class="fa fa-eye me-1"></i> Ledger</a>
<div class="dropdown dropdown-action">
<a href="#" class=" btn-action-icon " data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-end">
<ul>
<li>
<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_vendor"><i class="far fa-edit me-2"></i>Edit</a>
</li>
<li>
<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="far fa-trash-alt me-2"></i>Delete</a>
</li>
</ul>
</div>
</div>
</td>
</tr>
<tr>
<td>3</td>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-04.jpg" alt="User Image"></a>
<a href="profile.html">Robert <span><span class="__cf_email__" data-cfemail="80f2efe2e5f2f4c0e5f8e1edf0ece5aee3efed">[email&#160;protected]</span></span></a>
</h2>
</td>
<td>+1 917-409-0861</td>
<td>04 Dec 2022, 12:38 PM</td>
<td>$2,789</td>
<td class="d-flex align-items-center">
<a href="#" class="btn btn-greys me-2"><i class="fa fa-eye me-1"></i> Ledger</a>
<div class="dropdown dropdown-action">
<a href="#" class=" btn-action-icon " data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-end">
<ul>
<li>
<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_vendor"><i class="far fa-edit me-2"></i>Edit</a>
</li>
<li>
<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="far fa-trash-alt me-2"></i>Delete</a>
</li>
</ul>
</div>
</div>
</td>
</tr>
<tr>
<td>4</td>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-05.jpg" alt="User Image"></a>
<a href="profile.html">Sharonda <span><span class="__cf_email__" data-cfemail="90e3f8f1e2fffed0f5e8f1fde0fcf5bef3fffd">[email&#160;protected]</span></span></a>
</h2>
</td>
<td>+1 956-623-2880</td>
<td>14 Dec 2022, 12:38 PM</td>
<td>$6,789</td>
<td class="d-flex align-items-center">
<a href="#" class="btn btn-greys me-2"><i class="fa fa-eye me-1"></i> Ledger</a>
<div class="dropdown dropdown-action">
<a href="#" class=" btn-action-icon " data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-end">
<ul>
<li>
<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_vendor"><i class="far fa-edit me-2"></i>Edit</a>
</li>
<li>
<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="far fa-trash-alt me-2"></i>Delete</a>
</li>
</ul>
</div>
</div>
</td>
</tr>
<tr>
<td>5</td>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-06.jpg" alt="User Image"></a>
<a href="profile.html">Pricilla <span><span class="__cf_email__" data-cfemail="a2d2d0cbc1cbcecec3e2c7dac3cfd2cec78cc1cdcf">[email&#160;protected]</span></span></a>
</h2>
</td>
<td>+1 956-613-2880</td>
<td>12 Dec 2022, 12:38 PM</td>
<td>$1,789</td>
<td class="d-flex align-items-center">
<a href="#" class="btn btn-greys me-2"><i class="fa fa-eye me-1"></i> Ledger</a>
<div class="dropdown dropdown-action">
<a href="#" class=" btn-action-icon " data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-end">
<ul>
<li>
<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_vendor"><i class="far fa-edit me-2"></i>Edit</a>
</li>
<li>
<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="far fa-trash-alt me-2"></i>Delete</a>
</li>
</ul>
</div>
</div>
</td>
</tr>
<tr>
<td>6</td>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-07.jpg" alt="User Image"></a>
<a href="profile.html">Randall <span><span class="__cf_email__" data-cfemail="691b08070d080505290c11080419050c470a0604">[email&#160;protected]</span></span></a>
</h2>
</td>
<td>+1 117-409-0861</td>
<td>04 Dec 2022, 12:38 PM</td>
<td>$1,789</td>
<td class="d-flex align-items-center">
<a href="#" class="btn btn-greys me-2"><i class="fa fa-eye me-1"></i> Ledger</a>
<div class="dropdown dropdown-action">
<a href="#" class=" btn-action-icon " data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-end">
<ul>
<li>
<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_vendor"><i class="far fa-edit me-2"></i>Edit</a>
</li>
<li>
<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="far fa-trash-alt me-2"></i>Delete</a>
</li>
</ul>
</div>
</div>
</td>
</tr>
<tr>
<td>7</td>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-02.jpg" alt="User Image"></a>
<a href="profile.html">John Smith <span><span class="__cf_email__" data-cfemail="7e141116103e1b061f130e121b501d1113">[email&#160;protected]</span></span></a>
</h2>
</td>
<td>+1 989-438-3131</td>
<td>19 Dec 2022, 06:12 PM</td>
<td>$4,220</td>
<td class="d-flex align-items-center">
<a href="#" class="btn btn-greys me-2"><i class="fa fa-eye me-1"></i> Ledger</a>
<div class="dropdown dropdown-action">
<a href="#" class=" btn-action-icon " data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-end">
<ul>
<li>
<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_vendor"><i class="far fa-edit me-2"></i>Edit</a>
</li>
<li>
<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="far fa-trash-alt me-2"></i>Delete</a>
</li>
</ul>
</div>
</div>
</td>
</tr>
<tr>
<td>8</td>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-03.jpg" alt="User Image"></a>
<a href="profile.html">Johnny <span><span class="__cf_email__" data-cfemail="7e1411161010073e1b061f130e121b501d1113">[email&#160;protected]</span></span></a>
</h2>
</td>
<td>+1 843-443-3282</td>
<td>15 Dec 2022, 06:12 PM</td>
<td>$1,862</td>
<td class="d-flex align-items-center">
<a href="#" class="btn btn-greys me-2"><i class="fa fa-eye me-1"></i> Ledger</a>
<div class="dropdown dropdown-action">
<a href="#" class=" btn-action-icon " data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-end">
<ul>
<li>
<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_vendor"><i class="far fa-edit me-2"></i>Edit</a>
</li>
<li>
<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="far fa-trash-alt me-2"></i>Delete</a>
</li>
</ul>
</div>
</div>
</td>
</tr>
<tr>
<td>9</td>
<td>
<h2 class="table-avatar">
<a href="profile.html" class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/img/profiles/avatar-04.jpg" alt="User Image"></a>
<a href="profile.html">Robert <span><span class="__cf_email__" data-cfemail="4f3d202d2a3d3b0f2a372e223f232a612c2022">[email&#160;protected]</span></span></a>
</h2>
</td>
<td>+1 917-409-0861</td>
<td>04 Dec 2022, 12:38 PM</td>
<td>$2,789</td>
<td class="d-flex align-items-center">
<a href="#" class="btn btn-greys me-2"><i class="fa fa-eye me-1"></i> Ledger</a>
<div class="dropdown dropdown-action">
<a href="#" class=" btn-action-icon " data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-end">
<ul>
<li>
<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_vendor"><i class="far fa-edit me-2"></i>Edit</a>
</li>
<li>
<a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="far fa-trash-alt me-2"></i>Delete</a>
</li>
</ul>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="toggle-sidebar">
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


<div class="modal custom-modal fade" id="add_vendor" role="dialog">
<div class="modal-dialog modal-dialog-centered modal-md">
<div class="modal-content">
<div class="modal-header border-0 pb-0">
<div class="form-header modal-header-title text-start mb-0">
<h4 class="mb-0">Add Vendor</h4>
</div>
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
<span class="align-center" aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class="row">
<div class="col-lg-12 col-sm-12">
<div class="form-group">
<label>Name</label>
<input type="text" class="form-control" placeholder="Enter Name">
</div>
</div>
<div class="col-lg-12 col-sm-12">
<div class="form-group">
<label>Email</label>
<input type="text" class="form-control" placeholder="Enter Email Address">
</div>
</div>
<div class="col-lg-12 col-sm-12">
<div class="form-group">
<label>Phone Number</label>
<input type="number" class="form-control" placeholder="Enter Phone Number">
</div>
</div>
<div class="col-lg-12 col-sm-12">
<div class="form-group mb-0">
<label>Balance</label>
<input type="number" class="form-control" placeholder="Enter Balance Amount">
</div>
</div>
</div>
</div>
<div class="modal-footer">
<a href="#" data-bs-dismiss="modal" class="btn btn-primary paid-cancel-btn me-2">Cancel</a>
<a href="#" data-bs-dismiss="modal" class="btn btn-primary paid-continue-btn">Add Vendor</a>
</div>
</div>
</div>
</div>


<div class="modal custom-modal fade" id="edit_vendor" role="dialog">
<div class="modal-dialog modal-dialog-centered modal-md">
<div class="modal-content">
<div class="modal-header border-0 pb-0">
<div class="form-header modal-header-title text-start mb-0">
<h4 class="mb-0">Edit Vendor</h4>
</div>
<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
<span class="align-center" aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class="row">
<div class="col-lg-12 col-md-12">
<div class="form-group">
<label>Name</label>
<input type="text" class="form-control" value="John Smith" placeholder="Enter Name">
</div>
</div>
<div class="col-lg-12 col-md-12">
<div class="form-group">
<label>Email</label>
<input type="text" class="form-control" value="john@example.com" placeholder="Select Date">
</div>
</div>
<div class="col-lg-12 col-md-12">
<div class="form-group">
<label>Phone Number</label>
<input type="text" class="form-control" value="+1 989-438-3131" placeholder="Enter Reference Number">
</div>
</div>
<div class="col-lg-12 col-md-12">
<div class="form-group mb-0">
<label>Balance</label>
<input type="text" class="form-control" value="$4200" placeholder="Enter Reference Number">
</div>
</div>
</div>
</div>
<div class="modal-footer">
<a href="#" data-bs-dismiss="modal" class="btn btn-primary paid-cancel-btn me-2">Cancel</a>
<a href="#" data-bs-dismiss="modal" class="btn btn-primary paid-continue-btn">Update</a>
</div>
</div>
</div>
</div>


<div class="modal custom-modal fade" id="delete_modal" role="dialog">
<div class="modal-dialog modal-dialog-centered modal-md">
<div class="modal-content">
<div class="modal-body">
<div class="form-header">
<h3>Delete Vendor</h3>
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


@include('vertical-nav')
</body>
</html>