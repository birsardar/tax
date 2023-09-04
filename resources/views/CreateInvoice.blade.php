<!DOCTYPE html>
<html lang="en">

<head>
    @include('links')
</head>

<body>

    @include('header')

    @include('vertical-nav')

    <form id="invoiceForm" method="post" action="{{ route('create.invoice.submit') }}" enctype="multipart/form-data">
        @csrf
        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="content-page-header">
                        <h5>Add Invoice</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group-item border-0 mb-0">
                                    <div class="row align-item-center">
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Sales Type</label>
                                                <select class="select" required name="SalesType">
                                                    <option>Non GST</option>
                                                    <option>Export</option>
                                                    <option>Deemed Export</option>
                                                    <option>Sez</option>
                                                    <option>Nil Rated</option>
                                                    <option>Exempt</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>GST No./State</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Invoice Number" required name="gstno">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Invoice Number</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Invoice Number" required name="InvoiceNo">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Party's Name</label>
                                                <input type="text" class="form-control" placeholder="Enter Name here"
                                                    required name="name">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Invoice Date</label>
                                                <input type="date" class="datetimepicker form-control"
                                                    placeholder="Select Date" required name="date">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Taxable Value</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Taxable Value" required name="taxValue">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>HSN/SAC Code</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Reference Number" required name="code">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Goods/Service</label>
                                                <select class="select" required name="goods/service">
                                                    <option>Goods</option>
                                                    <option>Service</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>UQC</label>
                                                <select class="select" required name="UQC">
                                                    <option>No. of Pieces</option>
                                                    <option>KG</option>
                                                    <option>Dozen</option>
                                                    <option>Meter</option>
                                                    <option>Liter</option>
                                                    <option>ETC</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="form-group">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="form-group">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Quantity</label>
                                                <input type="number" class="form-control" placeholder="Enter Quantity"
                                                    required name="quantity">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group-item border-0 p-0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <label>GST Rate<span>%</span></label>
                                                <input type="text" class="form-control" placeholder="Enter Rate here"
                                                    required name="rate">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <label>IGST</label>
                                                <input type="text" class="form-control" placeholder="IGST" required
                                                    name="IGST">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <label>CGST</label>
                                                <input type="text" class="form-control" placeholder="CGST" required
                                                    name="CGST">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <label>SGST/UTGST</label>
                                                <input type="text" class="form-control" placeholder="GST value"
                                                    required name="gstValue">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="select" required name="status">
                                                    <option>Paid</option>
                                                    <option>Unpaid</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="add-customer-btns text-end">
                        <button type="reset" class="btn btn-primary cancel me-2"
                            onclick="resetForm()">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </div>
    </form>

    @include('script-links')
</body>

</html>
<script>
    function resetForm() {
        document.getElementById("invoiceForm").reset();
    }

    document.getElementById("invoiceForm").addEventListener("submit", function(event) {
        if (validateForm()) {
            this.submit();
        }
    });

    function validateForm() {
        let isValid = true;
        const inputs = document.querySelectorAll(
            "#invoiceForm input[type='text'], #invoiceForm input[type='number'], #invoiceForm select");
        inputs.forEach((input) => {
            if (input.hasAttribute("required") && !input.value.trim()) {
                isValid = false;
                input.classList.add("is-invalid");
            } else {
                input.classList.remove("is-invalid");
            }
        });
        return isValid;
    }
</script>
