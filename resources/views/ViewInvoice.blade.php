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
                        <h5>Invoices</h5>
                        <div class="list-btn">
                            <ul class="filter-list">
                                <li>
                                    <a class="btn btn-filters w-auto popup-toggle" data-bs-toggle="modal"
                                        data-bs-target="#filter_inputs">
                                        <span> <img src="{{ url('global_assets/images/filter.svg') }}"
                                                alt="Filter"></span>
                                        Filter
                                    </a>
                                </li>
                                <li>
                                    <a class="btn btn-primary" href="{{ route('add-invoice') }}"><i
                                            class="fa fa-plus-circle me-2" aria-hidden="true"></i>New Invoice</a>
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
                                                    #
                                                </th>
                                                <th>Sale Type</th>
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
                                        @foreach ($invoices as $invoice)
                                            <tbody>
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $invoice->SalesType }}</td>
                                                    <td>{{ $invoice->GST_No }}</td>
                                                    <td>{{ $invoice->InvoiceNumber }}</td>
                                                    <td>
                                                        {{ $invoice->PartyName }}
                                                    </td>
                                                    <td>{{ $invoice->InvoiceDate }}</td>
                                                    <td>{{ $invoice->goodservices }}</td>
                                                    <td>{{ $invoice->taxablevalue }}</td>
                                                    <td>{{ $invoice->HSNSAC }}</td>
                                                    <td>{{ $invoice->quantity }}</td>
                                                    <td>{{ $invoice->UQC }}</td>
                                                    <td>{{ $invoice->GstRate }}</td>
                                                    <td>{{ $invoice->IGST }}</td>
                                                    <td>{{ $invoice->CGST }}</td>
                                                    <td>{{ $invoice->SGSTUTGST }}</td>
                                                    <td>{{ $invoice->Status }}</td>
                                                    <td>
                                                        <a class="dropdown-item delete-action"
                                                            href="{{ route('delete-invoice', ['id' => $invoice->id]) }}">
                                                            <i class="far fa-trash-alt me-2"></i>Delete
                                                        </a>
                                                    </td>


                                                </tr>
                                            </tbody>
                                        @endforeach
                                    </table>

                                </div>
                                @include('script-links')
</body>

</html>
<script></script>
