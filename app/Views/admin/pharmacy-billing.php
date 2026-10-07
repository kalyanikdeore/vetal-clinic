<?php include('header.php'); ?>
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
/* #salePrescriptionModal {
    --bs-modal-margin: 0 !important;
} */

@media (min-width: 576px) {
    #salePrescriptionModal {
        --bs-modal-margin: 0 !important;
    }

   /
}

</style>

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
     aria-labelledby="salePrescriptionModalLabel"
     aria-hidden="true">

    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable sale-medicine-dialog">

        <div class="modal-content">

            <form id="pharmacyBillingForm">

                <!-- Hidden Fields -->
                <input type="hidden"
                       name="pb_id"
                       id="pb_id"
                       value="">

                <input type="hidden"
                       name="pb_bill_status"
                       id="pb_bill_status"
                       value="Generated">


                <!-- =================================================
                     HEADER
                     ================================================= -->

                <div class="modal-header">

                    <div>
                        <h5 class="modal-title fw-bold"
                            id="salePrescriptionModalLabel">

                            <i class="bi bi-prescription2 me-2"></i>
                            Sale Medicine from Prescription

                        </h5>

                        <small class="text-muted">
                            Process prescribed medicines and generate pharmacy bill.
                        </small>
                    </div>

                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close">
                    </button>

                </div>


                <!-- =================================================
                     BODY
                     ================================================= -->

                <div class="modal-body">


                    <!-- =================================================
                         1. PATIENT INFORMATION
                         ================================================= -->

                    <div class="section-title">

                        <i class="bi bi-person-circle me-2"></i>
                        Patient Information

                    </div>


                    <div class="row g-3 mb-4">

                        <!-- Search Patient -->

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
                                       id="patientSearch"
                                       autocomplete="off"
                                       placeholder="Search name, mobile or patient ID"
                                       required>

                            </div>

                        </div>


                        <!-- Patient ID -->

                        <div class="col-md-4">

                            <label class="form-label">
                                Patient ID
                            </label>

                            <input type="text"
                                   class="form-control"
                                   id="pb_patient_id"
                                   readonly>

                            <input type="hidden"
                                   name="pb_patient_db_id"
                                   id="pb_patient_db_id">

                        </div>


                        <!-- Patient Name -->

                        <div class="col-md-4">

                            <label class="form-label">
                                Patient Name
                            </label>

                            <input type="text"
                                   class="form-control"
                                   name="pb_patient_name"
                                   id="pb_patient_name"
                                   readonly>

                        </div>

                    </div>


                    <!-- =================================================
                         2. PRESCRIPTION
                         ================================================= -->

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
        name="pb_opd_id"
        id="pb_opd_id"
        required>

    <option value="">Select OPD</option>

</select>

</div>


                        <div class="col-md-6">

                            <label class="form-label">
                                Doctor
                            </label>

                            <input type="text"
                                   class="form-control"
                                   name="pb_doctor_name"
                                   id="pb_doctor_name"
                                   value=""
                                   readonly>



                        </div>


                        <!-- <div class="col-md-3">

                            <label class="form-label">
                                Prescription Date
                            </label>

                            <input type="date"
                                   class="form-control"
                                   name="pb_prescription_date"
                                   id="pb_prescription_date"
                                   value="2026-09-03"
                                   readonly>

                        </div> -->

                    </div>


                  <!-- =================================================
     3. PRESCRIBED MEDICINES
     ================================================= -->

<div class="section-title d-flex justify-content-between align-items-center">

    <span>
        <i class="bi bi-capsule me-2"></i>
        Prescribed Medicines
    </span>

    <span class="badge bg-primary-subtle text-primary"
          id="medicineCountBadge">
        0 Medicines
    </span>

</div>

<div class="table-responsive medicine-table-wrapper mb-4">

    <table class="table table-bordered align-middle">

        <thead class="table-light">

            <tr>
                <th>Medicine</th>
                <th>Dosage</th>
                <th>Frequency</th>
                <th>Duration</th>
                <th>Prescribed Qty</th>
                <th>Sale Qty</th>
                <th>Rate</th>
                <th>Amount</th>
            </tr>

        </thead>

        <tbody id="prescribedMedicinesBody">

            <tr>
                <td colspan="8"
                    class="text-center text-muted py-4">

                    <i class="bi bi-capsule me-1"></i>
                    Select OPD to load prescribed medicines.

                </td>
            </tr>

        </tbody>

    </table>

</div>

                    <!-- =================================================
                         4. BILLING SUMMARY
                         ================================================= -->

                    <div class="section-title">

                        <i class="bi bi-calculator me-2"></i>
                        Billing Summary

                    </div>


                    <div class="row justify-content-end">

                        <div class="col-lg-5">

                            <div class="billing-summary">

                                <div class="summary-row">

                                    <span>Subtotal</span>

                                    <strong id="subtotalAmount">
                                        ₹285.00
                                    </strong>

                                    <input type="hidden"
                                           name="pb_subtotal"
                                           id="pb_subtotal"
                                           value="285">

                                </div>


                                <div class="summary-row">

                                    <span>Discount (%)</span>

                                    <div class="input-group input-group-sm"
                                         style="width:150px;">

                                        <!-- <span class="input-group-text">
                                            ₹
                                        </span> -->
   <input type="number"
               class="form-control"
               name="pb_discount"
               id="pb_discount"
               value="0"
               min="0"
               max="100"
               step="0.01">

        <span class="input-group-text">
            %
        </span>

                                    </div>

                                </div>
                                


                                <div class="summary-row">

                                    <span>Tax / GST</span>

                                    <strong id="taxAmount">
                                        ₹0.00
                                    </strong>

                                    <input type="hidden"
                                           name="pb_tax"
                                           id="pb_tax"
                                           value="0">

                                </div>


                                <hr>


                                <div class="summary-row total-row">

                                    <span>Total Amount</span>

                                    <strong id="totalAmount">
                                        ₹285.00
                                    </strong>

                                    <input type="hidden"
                                           name="pb_total_amount"
                                           id="pb_total_amount"
                                           value="285">

                                </div>

                            </div>

                        </div>

                    </div>


                    <!-- =================================================
                         5. PAYMENT DETAILS
                         ================================================= -->

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
                                    id="pb_payment_method"
                                    required>

                                <option value="Cash">
                                    Cash
                                </option>

                                <option value="UPI">
                                    UPI
                                </option>

                                <option value="Debit / Credit Card">
                                    Debit / Credit Card
                                </option>

                                <option value="Bank Transfer">
                                    Bank Transfer
                                </option>

                                <option value="Pending">
                                    Pending
                                </option>

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

                                <option value="Paid" selected>
                                    Paid
                                </option>

                              

                                <option value="Pending">
                                    Pending
                                </option>

                            </select>

                        </div>


                        <div class="col-12">

                            <label class="form-label">
                                Billing Notes
                            </label>

                            <textarea class="form-control"
                                      name="pb_billing_notes"
                                      id="pb_billing_notes"
                                      rows="2"
                                      placeholder="Enter billing notes..."></textarea>

                        </div>

                    </div>

                </div>


                <!-- =================================================
                     FOOTER
                     ================================================= -->

                <div class="modal-footer">

                    <button type="button"
                            class="btn btn-light border"
                            data-bs-dismiss="modal">

                        <i class="bi bi-x-circle me-1"></i>
                        Cancel

                    </button>


                    <button type="button"
                            class="btn btn-outline-primary"
                            id="saveBillingDraftBtn">

                        <i class="bi bi-save me-1"></i>
                        Save Draft

                    </button>


                    <button type="submit"
                            class="btn btn-primary"
                            id="generateBillBtn">

                        <i class="bi bi-receipt me-1"></i>
                        Generate Bill

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>



<script>

$(document).ready(function () {

    // =========================================================
    // PATIENT DATA FROM PHP
    // =========================================================

    var patients = <?= json_encode($patients ?? [], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?>;

    console.log("Total patients:", patients.length);
    console.log("Patients:", patients);


    // =========================================================
    // CHECK PATIENT DATA
    // =========================================================

    if (!Array.isArray(patients)) {
        patients = [];
    }


    // =========================================================
    // PREPARE PATIENT LIST
    // =========================================================

    var patientList = $.map(patients, function (patient) {

        var firstName  = patient.first_name || '';
        var middleName = patient.middle_name || '';
        var lastName   = patient.last_name || '';

        var fullName = $.trim(
            firstName + ' ' + middleName + ' ' + lastName
        );

        return {

            label: fullName,

            value: fullName,

            patient_id: String(patient.patient_id || ''),

            patient_code: String(patient.patient_code || ''),

            mobile: String(patient.mobile || ''),

            name: fullName

        };

    });


    console.log("Prepared patient list:", patientList);


    // =========================================================
    // PATIENT AUTOCOMPLETE
    // =========================================================

    $("#patientSearch").autocomplete({

        minLength: 1,

        delay: 0,

        source: function (request, response) {

            var term = $.trim(request.term).toLowerCase();

            console.log("Searching:", term);

            if (term === '') {

                response([]);

                return;
            }


            // =================================================
            // SEARCH NAME / MOBILE / PATIENT ID / CODE
            // =================================================

            var results = $.grep(patientList, function (patient) {

                var name = String(patient.name || '').toLowerCase();

                var mobile = String(patient.mobile || '').toLowerCase();

                var patientId = String(patient.patient_id || '').toLowerCase();

                var patientCode = String(patient.patient_code || '').toLowerCase();


                return (
                    name.indexOf(term) !== -1 ||
                    mobile.indexOf(term) !== -1 ||
                    patientId.indexOf(term) !== -1 ||
                    patientCode.indexOf(term) !== -1
                );

            });


            console.log("Matching patients:", results);

            response(results);

        },


        // =====================================================
        // SHOW DROPDOWN
        // =====================================================

        open: function () {

            $(".ui-autocomplete").css({

                "z-index": "99999",

                "max-height": "300px",

                "overflow-y": "auto",

                "overflow-x": "hidden"

            });

        },


        // =====================================================
        // CUSTOM DROPDOWN DISPLAY
        // =====================================================

        focus: function (event, ui) {

            event.preventDefault();

        },


        // =====================================================
        // SELECT PATIENT
        // =====================================================

        select: function (event, ui) {

            event.preventDefault();

            console.log("Selected patient:", ui.item);


            // Patient fields

            $("#patientSearch").val(ui.item.name);

            $("#pb_patient_id").val(ui.item.patient_code);

            $("#pb_patient_db_id").val(ui.item.patient_id);

            $("#pb_patient_name").val(ui.item.name);


            // Selected patient चे OPD load करा

            loadPatientOPD(ui.item.patient_id);


            return false;

        }

    });


    // =========================================================
    // CUSTOM AUTOCOMPLETE ITEM
    // =========================================================

    $("#patientSearch").autocomplete("instance")._renderItem =

        function (ul, item) {

            return $("<li>")

                .append(

                    '<div style="padding:8px 10px; cursor:pointer;">' +

                        '<div style="font-weight:600; color:#26344a;">' +

                            $('<div>')
                                .text(item.name)
                                .html() +

                        '</div>' +

                        '<div style="font-size:12px; color:#667085; margin-top:3px;">' +

                            '<span>' +

                                'Patient ID: ' +

                                $('<span>')
                                    .text(item.patient_code)
                                    .html() +

                            '</span>' +

                            ' &nbsp; | &nbsp; ' +

                            '<span>' +

                                'Mobile: ' +

                                $('<span>')
                                    .text(item.mobile)
                                    .html() +

                            '</span>' +

                        '</div>' +

                    '</div>'

                )

                .appendTo(ul);

        };


    // =========================================================
    // CLEAR SELECTED PATIENT WHEN USER TYPES AGAIN
    // =========================================================

    $("#patientSearch").on("input", function () {

        $("#pb_patient_id").val('');

        $("#pb_patient_db_id").val('');

        $("#pb_patient_name").val('');

        // OPD dropdown पण reset करा

        $("#pb_opd_id").html(
            '<option value="">Select OPD</option>'
        );

        // Medicines table पण reset करा

        $("#prescribedMedicinesBody").html(`
            <tr>
                <td colspan="8"
                    class="text-center text-muted py-4">

                    <i class="bi bi-capsule me-1"></i>

                    Select OPD to load prescribed medicines.

                </td>
            </tr>
        `);

        $("#medicineCountBadge").text("0 Medicines");

    });


    // =========================================================
    // LOAD PATIENT OPD
    // =========================================================

    function loadPatientOPD(patientId) {

        var opdDropdown = $("#pb_opd_id");


        // Patient select झाल्यावर loading दाखवा

        opdDropdown.html(
            '<option value="">Loading OPD...</option>'
        );


        if (!patientId) {

            opdDropdown.html(
                '<option value="">Select OPD</option>'
            );

            return;

        }


        $.ajax({

            url: "<?= base_url('pharmacy/getPatientOPD') ?>",

            type: "POST",

            data: {

                patient_id: patientId

            },

            dataType: "json",


            success: function (response) {

                console.log("Patient ID:", patientId);

                console.log(
                    "Patient OPD response:",
                    response
                );


                opdDropdown.empty();


                opdDropdown.append(

                    $('<option>', {

                        value: '',

                        text: 'Select OPD'

                    })

                );


                if (

                    response.status &&

                    Array.isArray(response.data) &&

                    response.data.length > 0

                ) {


                    // ==========================================
                    // LATEST OPD FIRST
                    // ==========================================

                    response.data.sort(function (a, b) {

                        return parseInt(b.opd_id) -
                               parseInt(a.opd_id);

                    });


                    // $.each(
                    //     response.data,
                    //     function (index, opd) {

                    //         opdDropdown.append(

                    //             $('<option>', {

                    //                 value: opd.opd_id,

                    //                 text:
                    //                     opd.opd_code +
                    //                     ' - ' +
                    //                     opd.opd_date

                    //             })

                    //         );

                    //     }
                    // );
                    $.each(
    response.data,
    function (index, opd) {

        opdDropdown.append(

            $('<option>', {

                value: opd.opd_id,

                text:
                    opd.opd_code +
                    ' - ' +
                    opd.opd_date,

                'data-doctor-name':
                    opd.doctor_name || ''

            })

        );

    }
);


                } else {

                    opdDropdown.append(

                        $('<option>', {

                            value: '',

                            text: 'No OPD found',

                            disabled: true

                        })

                    );

                }

            },


            error: function (xhr, status, error) {

                console.error(
                    "OPD AJAX Error:",
                    xhr.responseText
                );


                opdDropdown.html(

                    '<option value="">' +
                    'Unable to load OPD' +
                    '</option>'

                );

            }

        });

    }


    // =========================================================
    // CHECK JQUERY UI
    // =========================================================

    if ($.ui && $.ui.autocomplete) {

        console.log(
            "jQuery UI Autocomplete loaded successfully."
        );

    } else {

        console.error(
            "jQuery UI Autocomplete is NOT loaded."
        );

    }

});


// =========================================================
// ESCAPE HTML
// IMPORTANT: This fixes escapeHtml is not defined error
// =========================================================

function escapeHtml(value) {

    if (
        value === null ||
        value === undefined
    ) {

        return '';

    }


    return $('<div>')
        .text(String(value))
        .html();

}


// =========================================================
// LOAD OPD PRESCRIBED MEDICINES
// =========================================================

function loadOPDMedicines(opdId) {

    var medicineBody =
        $("#prescribedMedicinesBody");

    var medicineBadge =
        $("#medicineCountBadge");


    // =========================================================
    // RESET
    // =========================================================

    medicineBody.html(`

        <tr>

            <td colspan="8"
                class="text-center text-muted py-4">

                Loading prescribed medicines...

            </td>

        </tr>

    `);


    medicineBadge.text("0 Medicines");


    // =========================================================
    // NO OPD
    // =========================================================

    if (!opdId) {

        medicineBody.html(`

            <tr>

                <td colspan="8"
                    class="text-center text-muted py-4">

                    <i class="bi bi-capsule me-1"></i>

                    Select OPD to load prescribed medicines.

                </td>

            </tr>

        `);

        return;

    }


    // =========================================================
    // AJAX
    // =========================================================

    $.ajax({

        url:
            "<?= base_url('pharmacy/getOPDPrescription') ?>",

        type: "POST",

        data: {

            opd_id: opdId

        },

        dataType: "json",


        success: function (response) {

            console.log(
                "Prescription response:",
                response
            );


            medicineBody.empty();


            // =================================================
            // CHECK RESPONSE
            // =================================================

            if (

                response.status &&

                Array.isArray(response.data) &&

                response.data.length > 0

            ) {


                // =================================================
                // MEDICINE COUNT
                // =================================================

                medicineBadge.text(

                    response.data.length +
                    " Medicines"

                );


                // =================================================
                // MEDICINE ROWS
                // =================================================

                $.each(
                    response.data,
                    function (index, medicine) {


                        var medicineName =
                            medicine.medicine_name || '-';


                        var dosage =
                            medicine.dosage || '-';

                          

                        var frequency =
                            medicine.frequency || '-';


                        var duration =
                            medicine.duration || '-';
     var prescribed_qty =
                            medicine.prescribed_qty || '-';

                        var timing =
                            medicine.timing || '';


                        // =================================================
                        // QUANTITY / RATE
                        // =================================================

                        // var prescribedQty =
                        //     parseFloat(
                        //         medicine.prescribed_qty || 0
                        //     );


                        // var rate =
                        //     parseFloat(
                        //         medicine.rate || 0
                        //     );


                        // var amount =
                        //     prescribedQty * rate;
                        var stockQuantity =
    parseFloat(
        medicine.stock_quantity || 0
    );

var sellingPrice =
    parseFloat(
        medicine.selling_price || 0
    );

var prescribedQty =
    parseFloat(
        medicine.prescribed_qty || 0
    );

// ==========================================
// 1 UNIT RATE
// ==========================================

var rate = 0;

if (stockQuantity > 0) {

    rate = sellingPrice / stockQuantity;

}

// ==========================================
// DEFAULT SALE QTY
// ==========================================

var saleQty = prescribedQty;

// ==========================================
// FINAL AMOUNT
// Sale Qty × Rate
// ==========================================

var amount =
    saleQty * rate;


                        // =================================================
                        // MEDICINE ROW
                        // =================================================

                        var row = `

                            <tr>

                                <td>

                                    <strong>

                                        ${escapeHtml(
                                            medicineName
                                        )}

                                    </strong>


                                    ${
                                        timing

                                        ?

                                        `<small
                                            class="d-block text-muted">

                                            ${escapeHtml(
                                                timing
                                            )}

                                        </small>`

                                        :

                                        ''
                                    }

                                </td>


                                <td>

                                    ${escapeHtml(
                                        dosage
                                    )}

                                </td>


                               


                                <td>

                                    ${escapeHtml(
                                        frequency
                                    )}

                                </td>


                                <td>

                                    ${escapeHtml(
                                        duration
                                    )}

                                </td>


                                   <td>

                                    ${escapeHtml(
                                        prescribed_qty
                                    )}

                                </td>


                                <td>

                                  
<input
    type="number"
    class="form-control form-control-sm sale-qty"
    name="sale_qty[]"
    value="${saleQty}"
    min="0"
    step="1"
    data-rate="${rate}"
    data-prescribed-qty="${prescribedQty}"
>

                                </td>


                                <td>

                                    ₹${rate.toFixed(2)}

                                </td>


                                <td>

                                    <strong
                                        class="medicine-amount">

                                        ₹${amount.toFixed(2)}

                                    </strong>

                                </td>

                            </tr>

                        `;


                        medicineBody.append(row);

                    }
                );


                calculateMedicineTotal();


            } else {


                // =================================================
                // NO MEDICINES
                // =================================================

                medicineBadge.text(
                    "0 Medicines"
                );


                medicineBody.html(`

                    <tr>

                        <td colspan="8"
                            class="text-center text-muted py-4">

                            <i class="bi bi-info-circle me-1"></i>

                            No medicines prescribed for this OPD.

                        </td>

                    </tr>

                `);


                calculateMedicineTotal();

            }

        },


        error: function (
            xhr,
            status,
            error
        ) {

            console.error(
                "Prescription AJAX Error:",
                xhr.responseText
            );


            medicineBadge.text(
                "0 Medicines"
            );


            medicineBody.html(`

                <tr>

                    <td colspan="8"
                        class="text-center text-danger py-4">

                        Unable to load prescribed medicines.

                    </td>

                </tr>

            `);

        }

    });

}


// =========================================================
// CALCULATE MEDICINE TOTAL
// =========================================================

$(document).on(
    "input",
    ".sale-qty",
    function () {

        var input = $(this);

        var saleQty =
            parseFloat(input.val()) || 0;

        var rate =
            parseFloat(
                input.attr("data-rate")
            ) || 0;

        // ==========================================
        // SALE QTY CAN BE MORE THAN PRESCRIBED QTY
        // ==========================================

        if (saleQty < 0) {

            saleQty = 0;

            input.val(0);

        }

        // ==========================================
        // CALCULATE AMOUNT
        // ==========================================

        var amount =
            saleQty * rate;

        input
            .closest("tr")
            .find(".medicine-amount")
            .text(
                "₹" + amount.toFixed(2)
            );

        // ==========================================
        // RECALCULATE BILL TOTAL
        // ==========================================

        calculateMedicineTotal();

    }
);

// =========================================================
// CALCULATE TOTAL
// =========================================================

function calculateMedicineTotal() {

    var subtotal = 0;


    $(".medicine-amount").each(
        function () {

            var amountText =
                $(this)
                    .text()
                    .replace("₹", "")
                    .trim();


            subtotal +=
                parseFloat(amountText) || 0;

        }
    );


    // =========================================================
    // SUBTOTAL
    // =========================================================

    $("#subtotalAmount").text(

        "₹" +
        subtotal.toFixed(2)

    );


    $("#pb_subtotal").val(

        subtotal.toFixed(2)

    );


    // =========================================================
    // DISCOUNT
    // =========================================================

    var discountPercent =
    parseFloat(
        $("#pb_discount").val()
    ) || 0;

// Maximum 100%
if (discountPercent < 0) {
    discountPercent = 0;
    $("#pb_discount").val(0);
}

if (discountPercent > 100) {
    discountPercent = 100;
    $("#pb_discount").val(100);
}

// =========================================================
// CALCULATE DISCOUNT AMOUNT
// =========================================================

var discountAmount =
    (subtotal * discountPercent) / 100;


// =========================================================
// SHOW DISCOUNT AMOUNT
// =========================================================

$("#discountAmount").text(
    "₹" + discountAmount.toFixed(2)
);


    // =========================================================
    // TAX
    // =========================================================

    var tax =
        parseFloat(
            $("#pb_tax").val()
        ) || 0;

// =========================================================
// FINAL TOTAL
// =========================================================

var total =
    subtotal -
    discountAmount +
    tax;


if (total < 0) {
    total = 0;
}

// =========================================================
// DISPLAY FINAL TOTAL
// =========================================================

$("#totalAmount").text(
    "₹" + total.toFixed(2)
);

$("#pb_total_amount").val(
    total.toFixed(2)
);


// =========================================================
// AMOUNT RECEIVED
// =========================================================

$("#pb_amount_received").val(
    total.toFixed(2)
);
    // =========================================================
    // TOTAL
    // =========================================================

    var total =
        subtotal -
        discount +
        tax;


    if (total < 0) {

        total = 0;

    }


    $("#totalAmount").text(

        "₹" +
        total.toFixed(2)

    );


    $("#pb_total_amount").val(

        total.toFixed(2)

    );


    $("#pb_amount_received").val(

        total.toFixed(2)

    );

}

$(document).on(
    "input",
    "#pb_discount",
    function () {
        calculateMedicineTotal();
    }
);
// =========================================================
// LOAD PRESCRIPTION WHEN OPD IS SELECTED
// =========================================================

// $(document).on(
//     "change",
//     "#pb_opd_id",
//     function () {

//         var opdId =
//             $(this).val();


//         console.log(
//             "Selected OPD ID:",
//             opdId
//         );


//         loadOPDMedicines(opdId);

//     }
// );
$(document).on(
    "change",
    "#pb_opd_id",
    function () {

        var opdId = $(this).val();

        var selectedOption =
            $(this).find("option:selected");

        var doctorName =
            selectedOption.attr("data-doctor-name") || "";

        console.log(
            "Selected OPD ID:",
            opdId
        );

        console.log(
            "Doctor Name:",
            doctorName
        );


        // ==========================================
        // DISPLAY DOCTOR NAME
        // ==========================================

        $("#pb_doctor_name").val(
            doctorName
        );


        // ==========================================
        // LOAD PRESCRIBED MEDICINES
        // ==========================================

        loadOPDMedicines(opdId);

    }
);

</script>



</main>




<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script> -->
<body>
</html>