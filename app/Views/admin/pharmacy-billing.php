<?php include('header.php'); ?>

<!-- Main Content -->
<main class="content">

    <!-- Page Header -->
    <div class="page-header mb-4 d-flex justify-content-between align-items-center flex-wrap gap-3">
        <div>
            <h4 class="fw-bold mb-1">
                <i class="bi bi-receipt-cutoff me-2"></i>Pharmacy Billing
            </h4>
            <p class="text-muted mb-0">
                Manage prescription sales, medicine bills and pharmacy payments.
            </p>
        </div>

        <button class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#salePrescriptionModal">
            <i class="bi bi-cart-plus me-1"></i>
            Sale Medicine
        </button>
    </div>


    <!-- Summary Cards -->
    <div class="row g-3 mb-4">

        <div class="col-xl-3 col-md-6">
            <div class="dashboard-card">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted small">Today's Sales</span>
                        <h4 class="fw-bold mt-1 mb-0">₹24,850</h4>
                        <small class="text-success">
                            <i class="bi bi-arrow-up"></i> 12.5%
                        </small>
                    </div>
                    <div class="card-icon bg-primary-subtle text-primary">
                        <i class="bi bi-currency-rupee"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="dashboard-card">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted small">Bills Today</span>
                        <h4 class="fw-bold mt-1 mb-0">48</h4>
                        <small class="text-muted">Generated invoices</small>
                    </div>
                    <div class="card-icon bg-success-subtle text-success">
                        <i class="bi bi-receipt"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="dashboard-card">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted small">Pending Payments</span>
                        <h4 class="fw-bold mt-1 mb-0">₹4,250</h4>
                        <small class="text-warning">Pending collection</small>
                    </div>
                    <div class="card-icon bg-warning-subtle text-warning">
                        <i class="bi bi-wallet2"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="dashboard-card">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-muted small">Prescriptions</span>
                        <h4 class="fw-bold mt-1 mb-0">16</h4>
                        <small class="text-danger">Awaiting sale</small>
                    </div>
                    <div class="card-icon bg-danger-subtle text-danger">
                        <i class="bi bi-prescription2"></i>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Billing Table Card -->
    <div class="dashboard-card">

        <div class="d-flex flex-wrap align-items-center
                    justify-content-between gap-3 mb-3">

            <div>
                <h5 class="fw-bold mb-1">
                    Pharmacy Sales
                </h5>
                <p class="text-muted small mb-0">
                    Recent medicine sales and pharmacy invoices
                </p>
            </div>

            <div class="d-flex gap-2">

                <div class="input-group">
                    <span class="input-group-text bg-white">
                        <i class="bi bi-search"></i>
                    </span>
                    <input type="text"
                           class="form-control"
                           placeholder="Search bill / patient...">
                </div>

                <button class="btn btn-light border">
                    <i class="bi bi-funnel me-1"></i>
                    Filter
                </button>

            </div>
        </div>


        <!-- Responsive Table -->
        <div class="table-responsive">

            <table class="table align-middle mb-0">

                <thead>
                    <tr>
                        <th>Bill No.</th>
                        <th>Patient</th>
                        <th>Patient ID</th>
                        <th>Medicines</th>
                        <th>Amount</th>
                        <th>Payment</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th class="text-end">Action</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>
                            <span class="fw-semibold">
                                PH-1001
                            </span>
                        </td>

                        <td>
                            <div class="patient-info">
                                <div class="patient-avatar">
                                    AS
                                </div>
                                <div>
                                    <div class="fw-semibold">
                                        Amit Sharma
                                    </div>
                                    <small class="text-muted">
                                        9876543210
                                    </small>
                                </div>
                            </div>
                        </td>

                        <td>
                            <span class="badge bg-light text-dark">
                                VET-10045
                            </span>
                        </td>

                        <td>
                            <span class="fw-semibold">4 Medicines</span>
                            <br>
                            <small class="text-muted">
                                Paracetamol, Amoxicillin...
                            </small>
                        </td>

                        <td>
                            <strong>₹850</strong>
                        </td>

                        <td>
                            <span class="badge bg-success-subtle text-success">
                                Paid
                            </span>
                        </td>

                        <td>
                            03 Sep 2026
                            <br>
                            <small class="text-muted">10:25 AM</small>
                        </td>

                        <td>
                            <span class="status-badge status-completed">
                                Completed
                            </span>
                        </td>

                        <td class="text-end">

                            <button class="btn btn-sm btn-light"
                                    title="View">
                                <i class="bi bi-eye"></i>
                            </button>

                            <button class="btn btn-sm btn-light"
                                    title="Print">
                                <i class="bi bi-printer"></i>
                            </button>

                        </td>
                    </tr>


                    <tr>

                        <td>
                            <span class="fw-semibold">
                                PH-1002
                            </span>
                        </td>

                        <td>
                            <div class="patient-info">
                                <div class="patient-avatar">
                                    SP
                                </div>

                                <div>
                                    <div class="fw-semibold">
                                        Sneha Patil
                                    </div>
                                    <small class="text-muted">
                                        9988776655
                                    </small>
                                </div>
                            </div>
                        </td>

                        <td>
                            <span class="badge bg-light text-dark">
                                VET-10046
                            </span>
                        </td>

                        <td>
                            <span class="fw-semibold">
                                6 Medicines
                            </span>
                            <br>
                            <small class="text-muted">
                                Metformin, Pantoprazole...
                            </small>
                        </td>

                        <td>
                            <strong>₹1,250</strong>
                        </td>

                        <td>
                            <span class="badge bg-warning-subtle text-warning">
                                Partial
                            </span>
                        </td>

                        <td>
                            03 Sep 2026
                            <br>
                            <small class="text-muted">11:10 AM</small>
                        </td>

                        <td>
                            <span class="status-badge status-pending">
                                Pending
                            </span>
                        </td>

                        <td class="text-end">

                            <button class="btn btn-sm btn-light">
                                <i class="bi bi-eye"></i>
                            </button>

                            <button class="btn btn-sm btn-light">
                                <i class="bi bi-printer"></i>
                            </button>

                        </td>

                    </tr>


                    <tr>

                        <td>
                            <span class="fw-semibold">
                                PH-1003
                            </span>
                        </td>

                        <td>

                            <div class="patient-info">

                                <div class="patient-avatar">
                                    RK
                                </div>

                                <div>
                                    <div class="fw-semibold">
                                        Rahul Kulkarni
                                    </div>

                                    <small class="text-muted">
                                        9123456789
                                    </small>
                                </div>

                            </div>

                        </td>

                        <td>
                            <span class="badge bg-light text-dark">
                                VET-10047
                            </span>
                        </td>

                        <td>
                            <span class="fw-semibold">
                                3 Medicines
                            </span>
                            <br>
                            <small class="text-muted">
                                Azithromycin, Vitamin D...
                            </small>
                        </td>

                        <td>
                            <strong>₹650</strong>
                        </td>

                        <td>
                            <span class="badge bg-success-subtle text-success">
                                Paid
                            </span>
                        </td>

                        <td>
                            03 Sep 2026
                            <br>
                            <small class="text-muted">12:05 PM</small>
                        </td>

                        <td>
                            <span class="status-badge status-completed">
                                Completed
                            </span>
                        </td>

                        <td class="text-end">

                            <button class="btn btn-sm btn-light">
                                <i class="bi bi-eye"></i>
                            </button>

                            <button class="btn btn-sm btn-light">
                                <i class="bi bi-printer"></i>
                            </button>

                        </td>

                    </tr>

                </tbody>

            </table>

        </div>


        <!-- Pagination -->

        <div class="d-flex flex-wrap justify-content-between
                    align-items-center mt-4">

            <small class="text-muted">
                Showing 1 to 3 of 48 bills
            </small>

            <nav>
                <ul class="pagination pagination-sm mb-0">

                    <li class="page-item disabled">
                        <a class="page-link">Previous</a>
                    </li>

                    <li class="page-item active">
                        <a class="page-link">1</a>
                    </li>

                    <li class="page-item">
                        <a class="page-link">2</a>
                    </li>

                    <li class="page-item">
                        <a class="page-link">3</a>
                    </li>

                    <li class="page-item">
                        <a class="page-link">Next</a>
                    </li>

                </ul>
            </nav>

        </div>

    </div>

</div>


<!-- =========================================================
     SALE MEDICINE FROM PRESCRIPTION MODAL
     ========================================================= -->

<div class="modal fade"
     id="salePrescriptionModal"
     tabindex="-1"
     aria-hidden="true">

    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">

        <div class="modal-content">
              <form id="pharmacyBillingForm">
                <input type="hidden"
                       name="pb_id"
                       id="pb_id"
                       value="">

                <input type="hidden"
                       name="pb_bill_status"
                       id="pb_bill_status"
                       value="Generated">

            <!-- Modal Header -->

            <div class="modal-header">

                <div>
                    <h5 class="modal-title fw-bold">
                        <i class="bi bi-prescription2 me-2"></i>
                        Sale Medicine from Prescription
                    </h5>

                    <small class="text-muted">
                        Process prescribed medicines and generate pharmacy bill.
                    </small>
                </div>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal">
                </button>

            </div>


            <!-- Modal Body -->

            <div class="modal-body">

                <!-- Patient Information -->

                <div class="section-title">
                    <i class="bi bi-person-circle me-2"></i>
                    Patient Information
                </div>

                <div class="row g-3 mb-4">

                    <div class="col-md-4">

                        <label class="form-label">
                            Search Patient
                            <span class="text-danger">*</span>
                        </label>

                        <div class="input-group">

                            <span class="input-group-text">
                                <i class="bi bi-search"></i>
                            </span>

                            <input type="text"
                                   class="form-control"
                                   placeholder="Patient name / ID / mobile">

                        </div>

                    </div>


                    <div class="col-md-4">

                        <label class="form-label">
                            Patient ID
                        </label>

                     <input type="text"
       class="form-control"
       name="pb_patient_id"
       id="pb_patient_id"
       value="VET-10048"
       readonly>

                    </div>


                    <div class="col-md-4">

                        <label class="form-label">
                            Patient Name
                        </label>

                     <input type="text"
       class="form-control"
       name="pb_patient_name"
       id="pb_patient_name"
       value="Neha Joshi"
       readonly>

                    </div>

                </div>


                <!-- Prescription -->

                <div class="section-title">
                    <i class="bi bi-file-medical me-2"></i>
                    Prescription
                </div>

                <div class="row g-3 mb-4">

                    <div class="col-md-6">

                        <label class="form-label">
                            Prescription
                            <span class="text-danger">*</span>
                        </label>

                      <select class="form-select"
        name="pb_prescription_id"
        id="pb_prescription_id">

    <option value="RX-2026-0048" selected>
        RX-2026-0048 - 03 Sep 2026
    </option>

    <option value="RX-2026-0047">
        RX-2026-0047 - 02 Sep 2026
    </option>

    <option value="RX-2026-0045">
        RX-2026-0045 - 01 Sep 2026
    </option>

</select>

                    </div>

                    <div class="col-md-3">

                        <label class="form-label">
                            Doctor
                        </label>
<input type="text"
       class="form-control"
       name="pb_doctor_name"
       id="pb_doctor_name"
       value="Dr. Samer Jawalkar"
       readonly>

                    </div>

                    <div class="col-md-3">

                        <label class="form-label">
                            Prescription Date
                        </label>

                     <input type="date"
       class="form-control"
       name="pb_prescription_date"
       id="pb_prescription_date"
       value="2026-09-03"
       readonly>

                    </div>

                </div>


                <!-- Medicines -->

                <div class="section-title d-flex justify-content-between">

                    <span>
                        <i class="bi bi-capsule me-2"></i>
                        Prescribed Medicines
                    </span>

                    <span class="badge bg-primary-subtle text-primary">
                        4 Medicines
                    </span>

                </div>


                <div class="table-responsive mb-4">

                    <table class="table table-bordered align-middle">

                        <thead class="table-light">

                            <tr>

                                <th style="min-width:220px;">
                                    Medicine
                                </th>

                                <th>
                                    Dosage
                                </th>

                                <th>
                                    Frequency
                                </th>

                                <th>
                                    Duration
                                </th>

                                <th>
                                    Prescribed Qty
                                </th>

                                <th style="width:110px;">
                                    Sale Qty
                                </th>

                                <th>
                                    Rate
                                </th>

                                <th>
                                    Amount
                                </th>

                            </tr>

                        </thead>

                        <tbody>

                            <tr>

                                <td>
                                    <strong>
                                        Paracetamol 500mg
                                    </strong>
                                    <small class="d-block text-muted">
                                        Tablet
                                    </small>
                                </td>

                                <td>1 Tablet</td>

                                <td>1-0-1</td>

                                <td>5 Days</td>

                                <td>10</td>

                                <td>
                                    <input type="number"
                                           class="form-control form-control-sm"
                                           value="10"
                                           min="0">
                                </td>

                                <td>₹2.50</td>

                                <td>
                                    <strong>₹25.00</strong>
                                </td>

                            </tr>


                            <tr>

                                <td>
                                    <strong>
                                        Amoxicillin 500mg
                                    </strong>
                                    <small class="d-block text-muted">
                                        Capsule
                                    </small>
                                </td>

                                <td>1 Capsule</td>

                                <td>1-0-1</td>

                                <td>5 Days</td>

                                <td>10</td>

                                <td>
                                    <input type="number"
                                           class="form-control form-control-sm"
                                           value="10"
                                           min="0">
                                </td>

                                <td>₹8.00</td>

                                <td>
                                    <strong>₹80.00</strong>
                                </td>

                            </tr>


                            <tr>

                                <td>
                                    <strong>
                                        Pantoprazole 40mg
                                    </strong>

                                    <small class="d-block text-muted">
                                        Tablet
                                    </small>

                                </td>

                                <td>1 Tablet</td>

                                <td>1-0-0</td>

                                <td>10 Days</td>

                                <td>10</td>

                                <td>

                                    <input type="number"
                                           class="form-control form-control-sm"
                                           value="10"
                                           min="0">

                                </td>

                                <td>₹3.00</td>

                                <td>
                                    <strong>₹30.00</strong>
                                </td>

                            </tr>


                            <tr>

                                <td>

                                    <strong>
                                        Vitamin D3
                                    </strong>

                                    <small class="d-block text-muted">
                                        Tablet
                                    </small>

                                </td>

                                <td>1 Tablet</td>

                                <td>0-0-1</td>

                                <td>30 Days</td>

                                <td>30</td>

                                <td>

                                    <input type="number"
                                           class="form-control form-control-sm"
                                           value="30"
                                           min="0">

                                </td>

                                <td>₹5.00</td>

                                <td>
                                    <strong>₹150.00</strong>
                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>


                <!-- Billing Information -->

                <div class="section-title">

                    <i class="bi bi-calculator me-2"></i>
                    Billing Summary

                </div>


                <div class="row justify-content-end">

                    <div class="col-lg-5">

                        <div class="billing-summary">

                            <div class="summary-row">
                                <span>Subtotal</span>
                             <strong id="subtotalAmount">₹285.00</strong>

<input type="hidden"
       name="pb_subtotal"
       id="pb_subtotal"
       value="285">
                            </div>

                            <div class="summary-row">

                                <span>Discount</span>

                                <div class="input-group input-group-sm"
                                     style="width:150px;">

                                    <span class="input-group-text">
                                        ₹
                                    </span>

                                <input type="number"
       class="form-control"
       name="pb_discount"
       id="pb_discount"
       value="0"
       min="0">

                                </div>

                            </div>


                            <div class="summary-row">

                                <span>Tax / GST</span>

                            <strong id="taxAmount">₹0.00</strong>

<input type="hidden"
       name="pb_tax"
       id="pb_tax"
       value="0">

                            </div>


                            <hr>


                            <div class="summary-row total-row">

                                <span>Total Amount</span>

                                <strong id="totalAmount">₹285.00</strong>
                                <input type="hidden"
       name="pb_total_amount"
       id="pb_total_amount"
       value="285">

                            </div>

                        </div>

                    </div>

                </div>


                <!-- Payment -->

                <div class="section-title mt-4">

                    <i class="bi bi-credit-card me-2"></i>
                    Payment Details

                </div>


                <div class="row g-3">

                    <div class="col-md-4">

                        <label class="form-label">
                            Payment Method
                            <span class="text-danger">*</span>
                        </label>

                       <select class="form-select"
        name="pb_payment_method"
        id="pb_payment_method">

    <option value="Cash">Cash</option>
    <option value="UPI">UPI</option>
    <option value="Debit / Credit Card">
        Debit / Credit Card
    </option>
    <option value="Bank Transfer">
        Bank Transfer
    </option>
    <option value="Pending">Pending</option>

</select>

                    </div>


                    <div class="col-md-4">

                        <label class="form-label">
                            Amount Received
                        </label>

                     <input type="number"
       class="form-control"
       name="pb_amount_received"
       id="pb_amount_received"
       value="285"
       min="0">

                    </div>


                    <div class="col-md-4">

                        <label class="form-label">
                            Payment Status
                        </label>

                 <select class="form-select"
        name="pb_payment_status"
        id="pb_payment_status">

    <option value="Paid" selected>Paid</option>
    <option value="Partial">Partial</option>
    <option value="Pending">Pending</option>

</select>

                    </div>


                    <div class="col-12">

                        <label class="form-label">
                            Billing Notes
                        </label>

                        <textarea class="form-control" id="pb_billing_notes"
                                  rows="2"
                                  placeholder="Enter billing notes..."></textarea>

                    </div>

                </div>

            </div>


            <!-- Modal Footer -->

            <div class="modal-footer">

                <button type="button"
                        class="btn btn-light border"
                        data-bs-dismiss="modal">

                    <i class="bi bi-x-circle me-1"></i>
                    Cancel

                </button>

                <button type="button"
                        class="btn btn-outline-primary" id="saveBillingDraftBtn">

                    <i class="bi bi-save me-1"></i>
                    Save Draft

                </button>

                <button type="button"
                        class="btn btn-primary"   id="generateBillBtn">

                    <i class="bi bi-receipt me-1"></i>
                    Generate Bill

                </button>

            </div>

            </form>

        
        </div>

    </div>

</main>


<!-- =========================================================
     PAGE-SPECIFIC CSS
     ========================================================= -->

<style>

.dashboard-card {
    background: #ffffff;
    border: 1px solid #e9edf3;
    border-radius: 14px;
    padding: 20px;
    box-shadow: 0 3px 12px rgba(20, 40, 80, .04);
}

.card-icon {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 21px;
}

.patient-info {
    display: flex;
    align-items: center;
    gap: 10px;
}

.patient-avatar {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background: #eaf2ff;
    color: #0d6efd;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    font-weight: 700;
    flex-shrink: 0;
}

.status-badge {
    display: inline-flex;
    align-items: center;
    padding: 5px 10px;
    border-radius: 30px;
    font-size: 12px;
    font-weight: 600;
}

.status-completed {
    background: #e9f8ef;
    color: #198754;
}

.status-pending {
    background: #fff4d6;
    color: #b77900;
}

.section-title {
    font-size: 14px;
    font-weight: 700;
    color: #26344a;
    padding-bottom: 10px;
    margin-bottom: 15px;
    border-bottom: 1px solid #edf0f5;
}

.modal-content {
    border: 0;
    border-radius: 16px;
    overflow: hidden;
}

.modal-header {
    background: #f8faff;
    border-bottom: 1px solid #e8edf5;
    padding: 18px 22px;
}

.modal-body {
    padding: 22px;
}

.modal-footer {
    background: #fafbfc;
    border-top: 1px solid #edf0f5;
    padding: 15px 22px;
}

.form-label {
    font-size: 13px;
    font-weight: 600;
    color: #344054;
}

.form-control,
.form-select,
.input-group-text {
    border-color: #dfe5ec;
    min-height: 42px;
}

.form-control:focus,
.form-select:focus {
    border-color: #0d6efd;
    box-shadow: 0 0 0 .2rem rgba(13, 110, 253, .08);
}

.table thead th {
    background: #f8faff;
    color: #475467;
    font-size: 12px;
    font-weight: 700;
    white-space: nowrap;
    border-bottom: 1px solid #e5eaf1;
}

.table tbody td {
    font-size: 13px;
    color: #344054;
}

.billing-summary {
    background: #f8faff;
    border: 1px solid #e5eaf1;
    border-radius: 12px;
    padding: 16px;
}

.summary-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 15px;
    margin-bottom: 12px;
    font-size: 14px;
}

.summary-row:last-child {
    margin-bottom: 0;
}

.total-row {
    font-size: 17px;
    color: #0d6efd;
}

@media (max-width: 767.98px) {

    .page-header {
        align-items: flex-start;
        flex-direction: column;
    }

    .page-header .btn {
        width: 100%;
    }

    .dashboard-card {
        padding: 16px;
    }

    .modal-body {
        padding: 15px;
    }

    .modal-footer {
        padding: 12px 15px;
        flex-wrap: wrap;
    }

    .modal-footer .btn {
        flex: 1 1 auto;
    }

    .billing-summary {
        margin-top: 10px;
    }

}

</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<body>
</html>