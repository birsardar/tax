<!DOCTYPE html>
<html>

<head>
    @include('links')
</head>

<body>
    <!-- Wrapper -->
    <div class="hk-wrapper" data-layout="vertical" data-layout-style="default" data-menu="light" data-footer="simple">
        @include('vertical-nav')

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <div class="invoice-body p-2">
                <div data-simplebar class="nicescroll-bar">
                    <div class="invoice-list-view">
                        <table id="datable_1" class="table nowrap w-100 mb-5">
                            <thead>
                                <tr>
                                    <th><span class="form-check mb-0">
                                            <input type="checkbox" class="form-check-input check-select-all"
                                                id="customCheck1">
                                            <label class="form-check-label" for="customCheck1"></label>
                                        </span></th>
                                    <th>Bill Number</th>
                                    <th>Bill Date</th>
                                    <th>good/services</th>
                                    <th>taxablevalue</th>
                                    <th>HSN/SAC</th>
                                    <th>Quantity</th>
                                    <th>UQC</th>
                                    <th>Gst Rate</th>
                                    <th>IGST</th>
                                    <th>CGST</th>
                                    <th>SGST/UTGST</th>
                                    <th>Paid</th>
                                    <th>Unpaid</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($purchases as $Purchase)
                                    <tr>
                                        <td></td>
                                        <td>{{ $Purchase->BillNumber }}</td>
                                        <td>
                                            <div class="text-dark">{{ $Purchase->BillDate }}</div>
                                        </td>
                                        <td>
                                            <div class="fs-7">{{ $Purchase->good }}</div>
                                        </td>
                                        <td>
                                            <div class="fs-7">{{ $Purchase->taxablevalue }}</div>
                                        </td>
                                        <td>
                                            <div class="fs-7">{{ $Purchase->HSN }}</div>
                                        </td>
                                        <td>
                                            <div class="fs-7">{{ $Purchase->quantity }}</div>
                                        </td>
                                        <td>
                                            <div class="fs-7">{{ $Purchase->UQC }}</div>
                                        </td>
                                        <td>
                                            <div class="fs-7">{{ $Purchase->GstRate }}</div>
                                        </td>
                                        <td>
                                            <div class="fs-7">{{ $Purchase->IGST }}</div>
                                        </td>
                                        <td>
                                            <div class="fs-7">{{ $Purchase->CGST }}</div>
                                        </td>
                                        <td>
                                            <div class="fs-7">{{ $Purchases->SGST }}</div>
                                        </td>
                                        <td>
                                            <div class="fs-7">{{ $Purchase->Paid }}</div>
                                        </td>
                                        <td>
                                            <div class="fs-7">{{ $Purchase->UnPaid }}</div>
                                        </td>
                                        <td>
                                            <a
                                                href="{{ url('/ViewPurchaseBill/delete/') }}{{ $Purchases->PurchaseId }}"><button
                                                    class="btn btn-gradient-danger">Delete</button></a>
                                        </td>
                                        {{-- <td>
                                    <td><a href="{{url('/')}}{{$customers->CustomerId}}"><button class="btn btn-primary" type="button">Edit</button></a></td>
                                </td> --}}
                                        {{-- </tr> --}}
                                @endforeach
                            </tbody>
                        </table>

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
