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
                <h5>Add Customers</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <form id="customerForm" action="{{ route('add.customer.submit') }}" method="post" onsubmit="return validateForm()">
                    @csrf <!-- Add CSRF token field for security -->
                    <div class="card-body">
                        <div class="form-group-item">
                            <h5 class="form-title">Basic Details</h5>
<div class="profile-picture">
<div class="upload-profile">
<div class="profile-img">
<img id="blah" class="avatar" src="{{ asset('assets/img/profiles/avatar-10.jpg') }}" alt>
</div>
<div class="add-profile">
<h5>Upload a New Photo</h5>
<span>Profile-pic.jpg</span>
</div>
</div>
<div class="img-upload">
<label class="btn btn-primary">
Upload <input type="file">
</label>
<a class="btn btn-remove">Remove</a>
</div>
</div>
<div class="row">
                      <div class="col-lg-4 col-md-6 col-sm-12">
                          <div class="form-group">
                              <label>Name</label>
                              <input type="text" class="form-control" placeholder="Enter Name" name="CustomerName" required>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-12">
                          <div class="form-group">
                              <label>Email</label>
                              <input type="email" class="form-control" placeholder="Enter Email Address" name="Email" required>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6 col-sm-12">
                          <div class="form-group">
                              <label>Phone</label>
                              <input type="text" id="mobile_code" class="form-control" placeholder="Enter Phone Number" name="MobileNumber" required>
                          </div>
                      </div>

<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<label>Address</label>
<input type="text" class="form-control" placeholder="Enter Address" required name="CustomerAddress">
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="form-group">
<label>PAN Number</label>
<input type="text" class="form-control" placeholder="Enter PAN Number" required name="PanNumber">
</div>
</div>
</div>
</div>
<div class="form-group-customer customer-additional-form">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-12">
<div class="form-group">
<h5 class="form-title">Bank Details </h5>
</div>
<div class="form-group">
<label>Bank Name </label>
<input type="text" class="form-control" placeholder="Enter Bank Name" required name="BankName">
</div>
<div class="form-group notes-form-group">
<label>IFSC</label>
<input type="text" class="form-control" placeholder="Bank IFSC here" required name="IFSC">
</div>
<div class="form-group">
<label >Account Number</label>
<input type="text" class="form-control" placeholder="Enter Account Number" required name="BankAccount">
</div>
<div class=" d-flex justify-content-between">
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-12">
<div class="form-group">
<h5 class="form-title">Company Details </h5>
</div>
<div class="form-group">
<label>Company Name<span class="optional">(Optional)</span></label>
<input type="text" class="form-control" placeholder="Enter Company Name">
</div>
<div class="form-group">
<label>GST No</label>
<input type="text" class="form-control" placeholder="Enter GST Number" required name="GstNumber">
</div>
</div>
</div>
</div>
</div>
                   <div class="add-customer-btns text-end">
                   <button type="button" class="btn customer-btn-cancel" onclick="cancelForm()">Cancel</button>
                    <button type="submit" class="btn customer-btn-save">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>


@include('script-links')
<script>

function cancelForm() {
    // Get the form element
    var form = document.getElementById('customerForm');
    // Reset the form to its initial state
    form.reset();
}
    function validateForm() {
        // Basic Details
        var customerName = document.getElementsByName("CustomerName")[0].value;
        var email = document.getElementsByName("Email")[0].value;
        var mobileNumber = document.getElementsByName("MobileNumber")[0].value;
        var customerAddress = document.getElementsByName("CustomerAddress")[0].value;
        var panNumber = document.getElementsByName("PanNumber")[0].value;

        // Bank Details
        var bankName = document.getElementsByName("BankName")[0].value;
        var ifsc = document.getElementsByName("IFSC")[0].value;
        var bankAccount = document.getElementsByName("BankAccount")[0].value;

        // Company Details
        var gstNumber = document.getElementsByName("GstNumber")[0].value;

        // Regular expression for mobile number (allows only numeric digits and should be 10 digits long)
        var mobileNumberPattern = /^\d{10}$/;

        // Regular expression for PAN number (allows only uppercase alphanumeric characters and should be 10 characters long)
        var panNumberPattern = /^[A-Z0-9]{10}$/;

        // Regular expression for IFSC code (allows uppercase alphanumeric characters and should be 11 characters long)
        var ifscPattern = /^[A-Z0-9]{11}$/;

        // Regular expression for GST number (allows uppercase alphanumeric characters and should be 15 characters long)
        var gstNumberPattern = /^[A-Z0-9]{15}$/;



        // Perform validation
        if (customerName.trim() === "") {
            alert("Please enter a valid customer name.");
            return false;
        }

        if (email.trim() === "") {
            alert("Please enter a valid email address.");
            return false;
        }

        if (mobileNumber.trim() === "") {
            alert("Please enter a valid mobile number.");
            return false;
        }

        if (customerAddress.trim() === "") {
            alert("Please enter a valid customer address.");
            return false;
        }

        if (panNumber.trim() === "") {
            alert("Please enter a valid PAN number.");
            return false;
        }

        if (bankName.trim() === "") {
            alert("Please enter a valid bank name.");
            return false;
        }

        if (ifsc.trim() === "") {
            alert("Please enter a valid IFSC code.");
            return false;
        }

        if (bankAccount.trim() === "") {
            alert("Please enter a valid bank account number.");
            return false;
        }

        if (gstNumber.trim() === "") {
            alert("Please enter a valid GST number.");
            return false;
        }

        if (!mobileNumber.match(mobileNumberPattern)) {
            alert("Please enter a valid 10-digit mobile number.");
            return false;
        }

        if (!panNumber.match(panNumberPattern)) {
            alert("Please enter a valid 10-character PAN number in uppercase.");
            return false;
        }

        if (!ifsc.match(ifscPattern)) {
            alert("Please enter a valid 11-character IFSC code in uppercase.");
            return false;
        }

        if (!gstNumber.match(gstNumberPattern)) {
            alert("Please enter a valid 15-character GST number in uppercase.");
            return false;
        }


        return true;
    }
</script>
</body>
</html>
