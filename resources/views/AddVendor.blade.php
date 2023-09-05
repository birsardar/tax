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
                    <div class="content-page-header ">
                        <h5> New Vendor</h5>
                    </div>


                    <div class="modal-body">
                        <div class="row">
                            <form id="vendorForm" method="POST" action="{{ route('submit-vendor') }}">
                                @csrf
                                <div class="col-lg-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name"
                                            placeholder="Enter Name" required name="name">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email"
                                            placeholder="Enter Email Address" required name="email">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input type="text" class="form-control" id="phone"
                                            placeholder="Enter Phone Number" required name="phone">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <div class="form-group ">
                                        <label for="pan">PAN No.</label>
                                        <input type="text" class="form-control" id="pan"
                                            placeholder="Enter PAN No." required name="pan">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="gst">GST No.<span class="optional">(Optional)</span></label>
                                        <input type="text" class="form-control" id="gst"
                                            placeholder="Enter GST No." name="gst">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-12 mb-0">
                                    <div class="form-group">
                                        <label for="bankname">Bank Name</label>
                                        <input type="text" class="form-control" id="bankname"
                                            placeholder="Enter Bank Name" required name="BankName">
                                    </div>
                                    <div class="form-group">
                                        <label for="ifsc">IFSC</label>
                                        <input type="text" class="form-control" id="ifsc"
                                            placeholder="Enter Bank IFSC here" required name="IFSC">
                                    </div>
                                    <div class="form-group">
                                        <label for="accountnumber">Account Number</label>
                                        <input type="text" class="form-control" id="accountnumber"
                                            placeholder="Enter Account Number" required name="BankAccount">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary paid-cancel-btn me-2"
                                        onclick="cancelForm()">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Add Vendor</button>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
            </div>



        </div>
    </div>


    </div>
</body>

</html>
