<!DOCTYPE html>
<html>

<head>
    @include('links')
</head>

<body>
    <!-- Wrapper -->
    <div class="hk-wrapper" data-layout="vertical" data-layout-style="default" data-menu="light" data-footer="simple">
        {{--
        @include('vertical-nav') --}}


        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <div class="hk-pg-body py-0">
                <div class="invoiceapp-wrap invoiceapp-setting-active">

                    <div class="invoiceapp-content" style="padding-left: 0">
                        <div class="invoiceapp-detail-wrap">

                            <div class="invoice-body">
                                <div data-simplebar class="nicescroll-bar">
                                    <div class="container">
                                        <form method="post"
                                            action="{{ route('customer.invoice.submit', ['id' => $CustomerDetail[$index]->id]) }}">
                                            @csrf <div class="create-invoice-wrap mt-xxl-5 p-md-5 p-3">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-5 order-md-0 order-1">
                                                        <div class="upload-logo">
                                                            <img src="added-assets/dist/img/TaxRx-01.png" alt=""
                                                                class="dropify-2 tax-rx-img">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 offset-lg-5 offset-md-3 col-md-4 mb-md-0 mb-4">
                                                        <h2
                                                            class="d-flex align-items-center justify-content-md-end mb-0 inline-editable-wrap">
                                                            <a class="btn btn-sm btn-icon btn-flush-light btn-rounded flush-soft-hover edit-tyn ms-md-5"
                                                                href="#"><span class="icon"><span
                                                                        class="feather-icon"><i
                                                                            data-feather="edit-2"></i></span></span></a><span
                                                                class="editable">Invoice</span>
                                                        </h2>
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-xxl-3">
                                                        <a class="d-inline-block mb-3" data-bs-toggle="collapse"
                                                            href="#address_collpase" role="button"
                                                            aria-expanded="false">
                                                            - Your business information
                                                        </a>
                                                        <div class="collapse show" id="address_collpase">
                                                            <div class="address-wrap">
                                                                <h6><input type="text" name="PartyName"
                                                                        value={{ $CustomerDetail[$index]->CustomerName }}>
                                                                </h6>
                                                                <p>{{ $CustomerDetail[$index]->CustomerAddress }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-4 offset-xxl-5 mt-xxl-0 mt-6">

                                                        <div class="row gx-3">
                                                            <div class="col-lg-6 form-group">
                                                                <input class="form-control" value="Invoice No*"
                                                                    type="text" readonly />
                                                            </div>
                                                            <div class="col-lg-6 form-group">
                                                                <input class="form-control" value="{{ uniqid('INV') }}"
                                                                    name="InvoiceNumber" type="text" />
                                                            </div>
                                                            <div class="row gx-3">
                                                                <div class="col-lg-6 form-group">
                                                                    <input class="form-control" value="Invoice Date*"
                                                                        type="text" readonly />
                                                                </div>
                                                                <div class="col-lg-6 form-group">
                                                                    <input class="form-control" name="InvoiceDate"
                                                                        value="24/2/2020" type="date" />
                                                                </div>
                                                            </div>
                                                            <div class="row gx-3">
                                                                <div class="col-lg-6 form-group">
                                                                    <input class="form-control" value="Due date*"
                                                                        type="text" readonly />
                                                                </div>
                                                                <div class="col-lg-6 form-group">
                                                                    <input class="form-control" name="DueDate"
                                                                        value="24/2/2020" type="date" />
                                                                </div>
                                                            </div>
                                                            <div class="row gx-3">
                                                                <div class="col-lg-6 form-group">
                                                                    <input class="form-control" value="GST Number*"
                                                                        type="text" readonly />
                                                                </div>
                                                                <div class="col-lg-6 form-group">
                                                                    <input class="form-control" name="GST_No"
                                                                        value="{{ $CustomerDetail[$index]->GstNumber }}"
                                                                        type="input" readonly />
                                                                </div>
                                                            </div>

                                                            <div class="repeater">
                                                                <div data-repeater-list="category-group">
                                                                    <div class="row gx-3" data-repeater-item
                                                                        style="display:none;">
                                                                        <div class="col-lg-6 form-group">
                                                                            <input class="form-control"
                                                                                placeholder="Label" type="text" />
                                                                        </div>
                                                                        <div class="col-lg-6 form-group">
                                                                            <input class="form-control"
                                                                                placeholder="Value" type="text" />
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="separator separator-light"></div>
                                                    <div class="row">
                                                        <div class="col-xxl-3 mb-xxl-0 mb-4">
                                                            <h6>Billed To</h6>
                                                            <div class="row gx-3">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <input class="form-control" type="text"
                                                                            value="{{ $CustomerDetail[$index]->CustomerName }}"
                                                                            name="GstNumber" placeholder="Billed To"
                                                                            readonly />
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-xxl-4 offset-xxl-5">
                                                            <h6>Ship To</h6>
                                                            <div class="repeater">
                                                                <div class="collapse" id="shipto_collpase">
                                                                    <div class="row gx-3">
                                                                        <div class="col-sm-12 form-group">
                                                                            <input class="form-control"
                                                                                name="ClientBussinessName"
                                                                                placeholder="Client business name"
                                                                                type="text" />
                                                                        </div>
                                                                        <div class="col-sm-12 form-group">
                                                                            <input class="form-control"
                                                                                name="ClientBussinessAddress"
                                                                                placeholder="Address"
                                                                                type="text" />
                                                                        </div>
                                                                        <div class="col-lg-6 form-group">
                                                                            <input class="form-control" name="City"
                                                                                placeholder="City" type="text" />
                                                                        </div>
                                                                        <div class="col-lg-6 form-group">
                                                                            <input class="form-control"
                                                                                name="PostalCode"
                                                                                placeholder="Postal Code"
                                                                                type="text" />
                                                                        </div>
                                                                        <div class="col-sm-12 form-group">
                                                                            <input class="form-control" name="State"
                                                                                placeholder="State" type="text" />
                                                                        </div>
                                                                        <div class="col-sm-12 form-group">
                                                                            <input class="form-control" name="Country"
                                                                                placeholder="Country"
                                                                                type="text" />
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <a data-bs-toggle="collapse" href="#shipto_collpase"
                                                                    class="d-inline-flex align-items-center">
                                                                    <i class="ri-add-box-line me-1"></i> Add shipping
                                                                    address
                                                                </a>


                                                                <div class="row gx-3">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label
                                                                                class="form-label">good/service</label>
                                                                            <input class="form-control" type="text"
                                                                                value="" name="goodservices"
                                                                                placeholder="Enter a Good/Services" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Taxable
                                                                                value</label>
                                                                            <input class="form-control" type="text"
                                                                                value="" name="TaxableValue"
                                                                                placeholder="Enter a Taxable value" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row gx-3">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label">HSN/SAC
                                                                                Code</label>
                                                                            <input class="form-control" type="text"
                                                                                value="" name="Hsn/Sac"
                                                                                placeholder="Enter an HSN/SAC Number" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Quantity</label>
                                                                            <input class="form-control" type="text"
                                                                                value="" name="Quantity"
                                                                                placeholder="Enter a gst number" />
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row gx-3">
                                                                    <div class="col-sm-6">

                                                                        <label>UQC</label>
                                                                        <select class="form-control select2"
                                                                            name="UQC">
                                                                            <option>Select</option>
                                                                            <option>NO OF PCS</option>
                                                                            <option>KG</option>
                                                                            <option>METER</option>
                                                                            <option>DOZEN</option>
                                                                            <option>LITER</option>
                                                                            <option>ETC</option>
                                                                        </select>

                                                                    </div>

                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label">GST RATE</label>
                                                                            <input class="form-control" type="text"
                                                                                value="" name="GstRate"
                                                                                placeholder="Enter a Gst Rate" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row gx-3">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label">IGST</label>
                                                                            <input class="form-control" type="text"
                                                                                value="" name="Igst"
                                                                                placeholder="Enter IGST" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label">CGST</label>
                                                                            <input class="form-control" type="text"
                                                                                value="" name="Cgst"
                                                                                placeholder="Enter a CGST" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row gx-3">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label
                                                                                class="form-label">SGST/UTGST</label>
                                                                            <input class="form-control" type="text"
                                                                                value="" name="SGST/UTGST"
                                                                                placeholder="Enter SGST/UTGST" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">

                                                                        <label>Supply Type</label>
                                                                        <select class="form-control select2"
                                                                            name="SupplyType">
                                                                            <option>Select</option>
                                                                            <option>EXPORT</option>
                                                                            <option>DEEMED EXPORT</option>
                                                                            <option>SEZ</option>
                                                                            <option>NIL RATED</option>
                                                                            <option>EXMEPT</option>
                                                                        </select>

                                                                    </div>
                                                                </div>
                                                                <div class="row gx-3">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Paid
                                                                                Ammount</label>
                                                                            <input class="form-control" type="text"
                                                                                value="" name="Paid"
                                                                                placeholder="Enter Paid ammount" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label class="form-label">Unpaid
                                                                                Ammount</label>
                                                                            <input class="form-control" type="text"
                                                                                value="" name="UnPaid"
                                                                                placeholder="Enter Unpaid ammount" />
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit"
                                                    class="btn btn-gradient-primary mt-5">Create</button>
                                        </form>

                                    </div>
                                </div>
                            </div>

                            <!-- /Billed Edit Info -->
                        </div>
                    </div>
                    <!-- /Page Body -->
                </div>
                <!-- /Page Body -->
            </div>

            <!-- Page Footer -->
            @include('footer')
        </div>
        <!-- /Main Content -->
    </div>
    <!-- Wrapper -->
    @include('script-links')
</body>

</html>
