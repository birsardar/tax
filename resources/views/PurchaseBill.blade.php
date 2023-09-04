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
<h5>Expenses</h5>
<div class="list-btn">
<ul class="filter-list">
<li>
<a class="btn btn-filters w-auto popup-toggle" data-bs-toggle="modal" data-bs-target="#filter_inputs">
   <span> <img src="{{ url('global_assets/images/filter.svg') }}" alt="Filter"></span>
    Filter
</a></li>
<li>
<a class="btn btn-primary" href=""><i class="fa fa-plus-circle me-2" aria-hidden="true"></i>New Expense</a>
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
<div class="card-table">
<div class="card-body">
<div class="table-responsive">
<table class="table table-stripped table-hover datatable">
<thead class="thead-light">
<tr>
<th>
Purchase ID
</th>

<th>GST NO/ State</th>
<th>Invoice Number</th>
<th>Party's Name</th>
<th>Invoice Date</th>
<th>Goods/Service</th>
<th>Taxable Value</th>
<th>HSN/SAC Code</th>
<th>Quantity</th>
<th>UQC</th>
<th>GST RATE</th>
<th>IGST</th>
<th>CGST</th>
<th>SGST/UTGST</th>
<th>Status</th>
<th class="text-end">Action</th>
</tr>
</thead>
@foreach($purchases as $purchase)
<tbody>
<tr>
<td>{{$loop->iteration}}</td>
<td>{{$purchase->GST_No}}</td>
<td>{{$purchase->InvoiceNumber}}</td>
<td>
{{$purchase->PartyName}}
</td>
<td>{{$purchase->InvoiceDate}}</td>
<td>{{$purchase->goodservices}}</td>
<td>{{$purchase->taxablevalue}}</td>
<td>{{$purchase->HSNSAC}}</td>
<td>{{$purchase->quantity}}</td>
<td>{{$purchase->UQC}}</td>
<td>{{$purchase->GstRate}}</td>
<td>{{$purchase->IGST}}</td>
<td>{{$purchase->CGST}}</td>
<td>{{$purchase->SGSTUTGST}}</td>
<td>{{$purchase->Status}}</td>
<td id = "delete">
    <div class="dropdown dropdown-action ">
        <a href="#" class="btn-action-icon" data-bs-toggle="dropdown" aria-expanded="false" onclick="toggleDropdown()"><i class="fas fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-end " id="deletepurchase">
            <a class="dropdown-item delete-action"  href="{{ route('delete-purchase', ['id' => $purchase->PurchaseId]) }}">
                <i class="far fa-trash-alt me-2"></i>Delete
            </a>
        </div>
    </div>
</td>


</tr>
</tbody>
@endforeach
</table>
<div class="modal custom-modal fade" id="delete_modal" role="dialog">
<div class="modal-dialog modal-dialog-centered modal-md">
<div class="modal-content">
<div class="modal-body">
<div class="form-header">
<h3>Delete Invoice</h3>
<p>Are you sure want to delete?</p>
</div>
<div class="modal-btn delete-action">
<div class="row">
<div class="col-6">
<button type="button" class="w-100 btn btn-primary paid-continue-btn" id="modal-delete-btn">Delete</button>
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
@include("script-links")
</body>
</html>
<script>
   function toggleDropdown() {
    var dropdown = document.querySelector("#delete .dropdown-menu");
    if (dropdown.style.display === "block") {
      dropdown.style.display = "none";
    } else {
      dropdown.style.display = "block";
    }
  }
</script>

