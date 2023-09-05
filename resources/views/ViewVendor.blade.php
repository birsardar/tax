<!DOCTYPE html>
<html lang="en">
@include('links')

<body>

    <div class="main-wrapper">

        @include('header')


        @include('vertical-nav')


        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="content-page-header ">
                        <h5>Vendors</h5>
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

                                    <a href="{{ route('add-vendor') }}" class="btn btn-primary">
                                        ADD VENDOR
                                    </a>

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
                                                <th>Number</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($vendor as $vendorRecord)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        <h2 class="table-avatar">
                                                            <a href="" class="avatar avatar-sm me-2">
                                                                <img class="avatar-img rounded-circle"
                                                                    src="assets/img/profiles/avatar-02.jpg"
                                                                    alt="User Image">
                                                            </a>
                                                            <a href="">{{ $vendorRecord->VendorName }}
                                                                <span>{{ $vendorRecord->Email }}</span></a>
                                                        </h2>
                                                    </td>
                                                    <td>{{ $vendorRecord->MobileNumber }}</td>
                                                    <td>{{ $vendorRecord->created_at->format('d M Y, h:i A') }}</td>
                                                    <td>${{ $vendorRecord->BankAccount }}</td>
                                                    <td class="d-flex align-items-center">
                                                        <a href="" class="btn btn-greys me-2">
                                                            <i class="fa fa-eye me-1"></i> Ledger
                                                        </a>
                                                        <div class="dropdown dropdown-action">
                                                            <a href="#" class=" btn-action-icon "
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fas fa-ellipsis-v"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul>
                                                                    <li>
                                                                        <a class="dropdown-item"
                                                                            href="{{ route('delete-vendor', ['id' => $vendorRecord->VendorId]) }}">
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


        {{-- <div class="toggle-sidebar">
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
                                    <a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Customer
                                        <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample1">
                                <div class="card-body-chat">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="checkBoxes1">
                                                <div class="form-custom">
                                                    <input type="text" class="form-control" id="member_search1"
                                                        placeholder="Search here">
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
                                                            <a href="javascript:void(0);"
                                                                class="viewall-button-One"><span class="me-2">View
                                                                    All</span><span><i
                                                                        class="fa fa-circle-chevron-down"></i></span></a>
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
                                    <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="true"
                                        aria-controls="collapseTwo">
                                        Select Date
                                        <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample2">
                                <div class="card-body-chat">
                                    <div class="form-group">
                                        <label class="form-control-label">From</label>
                                        <div class="cal-icon">
                                            <input type="email" class="form-control datetimepicker"
                                                placeholder="DD-MM-YYYY">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">To</label>
                                        <div class="cal-icon">
                                            <input type="email" class="form-control datetimepicker"
                                                placeholder="DD-MM-YYYY">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="accordion" id="accordionMain3">
                            <div class="card-header-new" id="headingThree">
                                <h6 class="filter-title">
                                    <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="true"
                                        aria-controls="collapseThree">
                                        By Status
                                        <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample3">
                                <div class="card-body-chat">
                                    <div id="checkBoxes2">
                                        <div class="form-custom">
                                            <input type="text" class="form-control" id="member_search2"
                                                placeholder="Search here">
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
                                    <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="true"
                                        aria-controls="collapseFour">
                                        Category
                                        <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample4">
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
                                                    <a href="javascript:void(0);" class="viewall-button-Two"><span
                                                            class="me-2">View All</span><span><i
                                                                class="fa fa-circle-chevron-down"></i></span></a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="submit"
                            class="d-inline-flex align-items-center justify-content-center btn w-100 btn-primary">
                            <span><img src="assets/img/icons/chart.svg" class="me-2"
                                    alt="Generate report"></span>Generate report
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

        @foreach ($vendor as $vendorRecord)
            <form id="editVendorForm" method="POST"
                action="{{ route('update-vendor', ['id' => $vendorRecord->VendorId]) }}">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="email here">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                    placeholder="Enter Reference Number">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group mb-0">
                                <label for="balance">PAN no.</label>
                                <input type="text" class="form-control" id="pan" name="pan"
                                    placeholder="Enter Reference Number">
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
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary paid-cancel-btn me-2"
                            data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary paid-continue-btn">Update</button>
                    </div>
            </form>



            <div class="modal custom-modal fade" id="delete_modal" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-md">
                    <div class="modal-content">
                        <form id="deleteVendorForm" method="POST"
                            action="{{ route('delete-vendor', ['id' => $vendorRecord->VendorId]) }}">
                            @csrf
                            <div class="modal-body">
                                <div class="form-header">
                                    <h3>Delete Vendor</h3>
                                    <p>Are you sure you want to delete?</p>
                                </div>
                                <div class="modal-btn delete-action">
                                    <div class="row">
                                        <div class="col-6">
                                            <button type="submit"
                                                class="w-100 btn btn-primary paid-continue-btn">Delete</button>
                                        </div>
                                        <div class="col-6">
                                            <button type="button" data-bs-dismiss="modal"
                                                class="w-100 btn btn-primary paid-cancel-btn">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach --}}

    </div>


    @include('script-links')
</body>

</html>
<script>
    function cancelForm() {
        // Get the form element
        var form = document.getElementById('vendorForm');
        // Reset the form to its initial state
        form.reset();
    }

    document.getElementById("vendorForm").addEventListener("submit", function() {

        // Validate the fields
        if (!validateName() || !validateEmail() || !validatePhoneNumber() || !validatePAN() || !
            validateBankName() || !validateIFSC() || !validateAccountNumber()) {
            return;
        }

        // If all fields are valid, you can proceed with form submission or other actions.
        var form = document.getElementById('vendorForm');
        // form.reset();

    });

    function hideModal() {
        var addVendorModal = new bootstrap.Modal(document.getElementById('add_vendor'));
        addVendorModal.hide();
    }

    function validateName() {
        const name = document.getElementById("name").value.trim();
        if (name === "") {
            alert("Please enter a valid Name.");
            return false;
        }
        return true;
    }

    function validateEmail() {
        const email = document.getElementById("email").value.trim();
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert("Please enter a valid Email Address.");
            return false;
        }
        return true;
    }

    function validatePhoneNumber() {
        const phoneNumber = document.getElementById("phone").value.trim();
        const phoneRegex = /^\d{10}$/;
        if (!phoneRegex.test(phoneNumber)) {
            alert("Please enter a valid Phone Number (10 digits only).");
            return false;
        }
        return true;
    }

    function validatePAN() {
        const pan = document.getElementById("pan").value.trim();
        const panRegex = /^([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}?$/;
        if (!panRegex.test(pan)) {
            alert("Please enter a valid PAN Number.");
            return false;
        }
        return true;
    }

    function validateBankName() {
        const bankName = document.getElementById("bankname").value.trim();
        if (bankName === "") {
            alert("Please enter a valid Bank Name.");
            return false;
        }
        return true;
    }

    function validateIFSC() {
        const ifsc = document.getElementById("ifsc").value.trim();
        const ifscRegex = /^[A-Za-z]{4}\d{7}$/;
        if (!ifscRegex.test(ifsc)) {
            alert("Please enter a valid IFSC code.");
            return false;
        }
        return true;
    }

    function validateAccountNumber() {
        const accountNumber = document.getElementById("accountnumber").value.trim();
        if (accountNumber === "" || isNaN(accountNumber)) {
            alert("Please enter a valid Account Number.");
            return false;
        }
        return true;
    }
</script>
