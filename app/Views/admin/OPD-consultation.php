<?php include('header.php'); ?>
<!-- =================================================
         CONTENT
    ================================================== -->
<main class="content">
  <!-- =========================================================
     VETAL CLINIC OPD
     OPD CONSULTATION MANAGEMENT
     
     Replace ONLY the existing dashboard main-content area.
     Header / Sidebar / Footer remain unchanged.
========================================================= -->
  <style>
    /* =====================================================
       OPD CONSULTATION PAGE
       Uses existing dashboard Bootstrap/theme colors
    ===================================================== */
    .opd-page {
      width: 100%;
    }

    .opd-page .opd-page-title {
      font-size: 1.35rem;
      font-weight: 700;
      color: #1f2937;
    }

    .opd-page .opd-page-subtitle {
      font-size: .82rem;
      color: #6b7280;
    }

    .opd-page .opd-card {
      border: 0;
      border-radius: 14px;
      overflow: hidden;
    }

    .opd-page .opd-card-header {
      background: #fff;
      border-bottom: 1px solid #eef0f3;
      padding: 17px 18px;
    }

    .opd-page .stat-card {
      background: #fff;
      border: 0;
      border-radius: 14px;
      padding: 17px;
      height: 100%;
      box-shadow: 0 .125rem .35rem rgba(0, 0, 0, .06);
    }

    .opd-page .stat-icon {
      width: 44px;
      height: 44px;
      border-radius: 11px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 19px;
    }

    .opd-page .stat-label {
      color: #7b8494;
      font-size: .76rem;
      margin-bottom: 3px;
    }

    .opd-page .stat-value {
      color: #1f2937;
      font-size: 1.35rem;
      font-weight: 700;
    }

    .opd-page .consultation-table th {
      font-size: .76rem;
      color: #6b7280;
      font-weight: 700;
      white-space: nowrap;
      padding: 13px 15px;
    }

    .opd-page .consultation-table td {
      font-size: .82rem;
      padding: 13px 15px;
      vertical-align: middle;
    }

    .opd-page .patient-avatar {
      width: 40px;
      height: 40px;
      min-width: 40px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: .75rem;
      font-weight: 700;
    }

    .opd-page .patient-name {
      font-weight: 600;
      color: #202631;
    }

    .opd-page .patient-id {
      font-size: .68rem;
      color: #8b93a1;
      margin-top: 2px;
    }

    .opd-page .visit-badge {
      padding: 5px 9px;
      border-radius: 20px;
      font-size: .68rem;
      font-weight: 600;
    }

    .opd-page .badge-new {
      color: #0d6efd;
      background: #eaf2ff;
    }

    .opd-page .badge-followup {
      color: #a66a00;
      background: #fff4d6;
    }

    .opd-page .badge-completed {
      color: #198754;
      background: #e8f7ef;
    }

    .opd-page .action-btn {
      width: 31px;
      height: 31px;
      padding: 0;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      border-radius: 7px;
    }

    .opd-page .filter-control {
      min-width: 145px;
    }

    .opd-page .search-control {
      min-width: 235px;
    }

    /* =====================================================
       CONSULTATION MODAL
    ===================================================== */
    #consultationModal .modal-content {
      border: 0;
      border-radius: 16px;
      overflow: hidden;
    }

    #consultationModal .modal-header {
      padding: 17px 22px;
      border: 0;
    }

    #consultationModal .modal-body {
      padding: 21px;
    }

    #consultationModal .modal-footer {
      padding: 13px 21px;
    }

    #consultationModal .section-heading {
      font-size: .88rem;
      font-weight: 700;
      color: #0d6efd;
      border-bottom: 1px solid #e9ecef;
      padding-bottom: 9px;
      margin-bottom: 15px;
    }

    #consultationModal .form-label {
      font-size: .76rem;
      font-weight: 600;
      color: #374151;
      margin-bottom: 5px;
    }

    #consultationModal .form-control,
    #consultationModal .form-select {
      min-height: 41px;
      border-radius: 8px;
      font-size: .82rem;
    }

    #consultationModal textarea.form-control {
      min-height: 85px;
    }

    #consultationModal .patient-summary {
      background: #f7f9fc;
      border: 1px solid #edf0f4;
      border-radius: 11px;
      padding: 13px;
    }

    #consultationModal .vital-box {
      background: #fff;
      border: 1px solid #e7eaf0;
      border-radius: 9px;
      padding: 9px;
    }

    #consultationModal .vital-label {
      font-size: .67rem;
      color: #7c8491;
      margin-bottom: 3px;
    }

    /* =====================================================
       PRESCRIPTION
    ===================================================== */
    .medicine-row {
      background: #f9fafc;
      border: 1px solid #e9edf2;
      border-radius: 9px;
      padding: 10px;
      margin-bottom: 9px;
    }

    .medicine-row .form-control,
    .medicine-row .form-select {
      min-height: 38px !important;
    }

    .remove-medicine {
      width: 37px;
      height: 38px;
    }

    /* =====================================================
       MOBILE
    ===================================================== */
    @media (max-width: 991.98px) {
      .opd-page .search-control {
        min-width: 0;
        width: 100%;
      }

      .opd-page .filter-control {
        min-width: 0;
        width: 100%;
      }

      .opd-page .filter-area {
        width: 100%;
      }
    }

    @media (max-width: 767.98px) {
      .opd-page .opd-page-title {
        font-size: 1.12rem;
      }

      .opd-page .opd-page-subtitle {
        font-size: .75rem;
      }

      .opd-page .page-top-action {
        width: 100%;
      }

      .opd-page .page-top-action .btn {
        width: 100%;
      }

      .opd-page .table-responsive {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
      }

      .opd-page .consultation-table {
        min-width: 950px;
      }

      #consultationModal .modal-dialog {
        margin: 0;
        max-width: 100%;
      }

      #consultationModal .modal-content {
        min-height: 100vh;
        border-radius: 0;
      }

      #consultationModal .modal-body {
        padding: 15px;
      }
    }

    @media (max-width: 575.98px) {
      .opd-page .stat-card {
        padding: 13px;
      }

      .opd-page .stat-icon {
        width: 38px;
        height: 38px;
        font-size: 16px;
      }

      .opd-page .stat-value {
        font-size: 1.12rem;
      }

      .opd-page .stat-label {
        font-size: .68rem;
      }

      .opd-page .opd-card-header {
        padding: 13px;
      }

      #consultationModal .modal-header {
        padding: 14px 15px;
      }

      #consultationModal .modal-title {
        font-size: .98rem;
      }

      #consultationModal .modal-footer {
        padding: 11px 15px;
      }

      #consultationModal .modal-footer .btn {
        flex: 1;
        font-size: .76rem;
      }
      /* =====================================================
   OPD PATIENT AUTOCOMPLETE
===================================================== */

.ui-autocomplete {
    z-index: 99999 !important;
    max-height: 280px;
    overflow-y: auto;
    overflow-x: hidden;
    padding: 6px 0;
    border: 1px solid #e5e7eb;
    border-radius: 10px;
    background: #fff;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
}

.ui-menu-item {
    list-style: none;
    margin: 0;
    padding: 0;
}

.ui-menu-item-wrapper {
    padding: 10px 14px !important;
    font-size: 13px;
    color: #374151;
    cursor: pointer;
    white-space: normal;
}

.ui-menu-item-wrapper:hover,
.ui-state-active {
    background: #eaf2ff !important;
    border: 0 !important;
    color: #07446f !important;
}

#opdPatientSearch {
    position: relative;
}
    }
    #consultationModal .ui-autocomplete {
    z-index: 99999 !important;
    max-height: 280px;
    overflow-y: auto;
    overflow-x: hidden;
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 8px 25px rgba(0,0,0,.15);
}

#consultationModal .ui-menu-item-wrapper {
    padding: 10px 14px !important;
    font-size: 13px;
    cursor: pointer;
}

#consultationModal .ui-menu-item-wrapper:hover,
#consultationModal .ui-state-active {
    background: #eaf2ff !important;
    color: #07446f !important;
    border: 0 !important;
}
/* =====================================================
   OPD PATIENT AUTOCOMPLETE
===================================================== */

.ui-autocomplete {
    z-index: 99999 !important;
    max-height: 280px;
    overflow-y: auto;
    overflow-x: hidden;
    padding: 6px 0;
    border: 1px solid #e5e7eb;
    border-radius: 10px;
    background: #fff;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
}

.ui-menu-item {
    list-style: none;
    margin: 0;
    padding: 0;
}

.ui-menu-item-wrapper {
    padding: 10px 14px !important;
    font-size: 13px;
    color: #374151;
    cursor: pointer;
    white-space: normal;
}

.ui-menu-item-wrapper:hover,
.ui-state-active {
    background: #eaf2ff !important;
    border: 0 !important;
    color: #07446f !important;
}
  </style>
  <div class="opd-page">
    <!-- =====================================================
         PAGE HEADER
    ===================================================== -->
    <div class="d-flex justify-content-between align-items-center
                flex-wrap gap-3 mb-4">
      <div>
        <div class="opd-page-title"> OPD Consultation Management </div>
        <div class="opd-page-subtitle"> Manage patient visits, consultations, diagnosis, treatment and prescriptions </div>
      </div>
      <div class="page-top-action">
        <button type="button" class="btn btn-primary px-3" data-bs-toggle="modal" data-bs-target="#consultationModal">
          <i class="bi bi-plus-circle-fill me-1"></i> New OPD Consultation </button>
      </div>
    </div>
    <!-- =====================================================
         OPD STATISTICS
    ===================================================== -->
    <div class="row g-3 mb-4">
      <!-- TODAY -->
      <div class="col-6 col-xl-3">
        <div class="stat-card">
          <div class="d-flex align-items-center gap-3">
            <div class="stat-icon bg-primary-subtle text-primary">
              <i class="bi bi-people-fill"></i>
            </div>
            <div>
              <div class="stat-label"> Today's Patients </div>
              <div class="stat-value"> 48 </div>
            </div>
          </div>
        </div>
      </div>
      <!-- NEW -->
      <div class="col-6 col-xl-3">
        <div class="stat-card">
          <div class="d-flex align-items-center gap-3">
            <div class="stat-icon bg-success-subtle text-success">
              <i class="bi bi-person-plus-fill"></i>
            </div>
            <div>
              <div class="stat-label"> New Patients </div>
              <div class="stat-value"> 17 </div>
            </div>
          </div>
        </div>
      </div>
      <!-- FOLLOW UP -->
      <div class="col-6 col-xl-3">
        <div class="stat-card">
          <div class="d-flex align-items-center gap-3">
            <div class="stat-icon bg-warning-subtle text-warning">
              <i class="bi bi-arrow-repeat"></i>
            </div>
            <div>
              <div class="stat-label"> Follow-ups </div>
              <div class="stat-value"> 13 </div>
            </div>
          </div>
        </div>
      </div>
      <!-- COMPLETED -->
      <div class="col-6 col-xl-3">
        <div class="stat-card">
          <div class="d-flex align-items-center gap-3">
            <div class="stat-icon bg-info-subtle text-info">
              <i class="bi bi-check-circle-fill"></i>
            </div>
            <div>
              <div class="stat-label"> Completed </div>
              <div class="stat-value"> 35 </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- =====================================================
         CONSULTATION TABLE
    ===================================================== -->
    <div class="card shadow-sm opd-card">
      <div class="opd-card-header">
        <div class="d-flex justify-content-between
                        align-items-center flex-wrap gap-3">
          <div>
            <h6 class="mb-1 fw-bold">
              <i class="bi bi-clipboard2-pulse text-primary me-2"></i> Today's OPD Consultations
            </h6>
            <small class="text-muted"> Patient consultation and visit records </small>
          </div>
          <div class="filter-area d-flex flex-wrap gap-2">
            <!-- SEARCH -->
            <div class="input-group input-group-sm search-control">
              <span class="input-group-text bg-white">
                <i class="bi bi-search text-muted"></i>
              </span>
              <input type="text" id="consultationSearch" class="form-control" placeholder="Search patient / ID / mobile">
            </div>
            <!-- STATUS -->
            <select id="consultationStatus" class="form-select form-select-sm filter-control">
              <option value=""> All Visits </option>
              <option value="new"> New Patient </option>
              <option value="followup"> Follow-up </option>
              <option value="completed"> Completed </option>
            </select>
          </div>
        </div>
      </div>
      <!-- TABLE -->
      <div class="table-responsive">
        <table class="table table-hover mb-0 consultation-table">
          <thead class="table-light">
            <tr>
              <th> Patient </th>
              <th> Visit Time </th>
              <th> Visit Type </th>
              <th> Symptoms </th>
              <th> Diagnosis </th>
              <th> Follow-up </th>
              <th> Status </th>
              <th class="text-end"> Actions </th>
            </tr>
          </thead>
          <tbody id="consultationTableBody">


            <tr data-status="new">
              <td>
                <div class="d-flex align-items-center gap-2">
                  <div class="patient-avatar
                                            bg-success-subtle text-success"> VS </div>
                  <div>
                    <div class="patient-name"> Vikram Singh </div>
                    <div class="patient-id"> PT-0001246 </div>
                  </div>
                </div>
              </td>
              <td> 10:30 AM </td>
              <td>
                <span class="visit-badge badge-new"> New Patient </span>
              </td>
              <td> Cough, cold </td>
              <td> Respiratory Infection </td>
              <td> 04 Sep 2026 </td>
              <td>
                <span class="visit-badge badge-completed"> Completed </span>
              </td>
              <td class="text-end">
                <button class="btn btn-light border action-btn">
                  <i class="bi bi-eye"></i>
                </button>
                <button class="btn btn-light border action-btn">
                  <i class="bi bi-pencil"></i>
                </button>
                <button class="btn btn-light border action-btn">
                  <i class="bi bi-prescription2"></i>
                </button>
              </td>
            </tr>
            
            <tr data-status="followup">
              <td>
                <div class="d-flex align-items-center gap-2">
                  <div class="patient-avatar
                                            bg-warning-subtle text-warning"> MK </div>
                  <div>
                    <div class="patient-name"> Mahesh Kulkarni </div>
                    <div class="patient-id"> PT-0001244 </div>
                  </div>
                </div>
              </td>
              <td> 11:10 AM </td>
              <td>
                <span class="visit-badge badge-followup"> Follow-up </span>
              </td>
              <td> Sugar monitoring </td>
              <td> Diabetes </td>
              <td> 30 Aug 2026 </td>
              <td>
                <span class="visit-badge badge-followup"> Follow-up </span>
              </td>
              <td class="text-end">
                <button class="btn btn-light border action-btn">
                  <i class="bi bi-eye"></i>
                </button>
                <button class="btn btn-light border action-btn">
                  <i class="bi bi-pencil"></i>
                </button>
                <button class="btn btn-light border action-btn">
                  <i class="bi bi-prescription2"></i>
                </button>
              </td>
            </tr>


          </tbody>
        </table>
      </div>
      <!-- TABLE FOOTER -->
      <div class="card-footer bg-white border-top py-3">
        <div class="d-flex justify-content-between
                        align-items-center flex-wrap gap-2">
          <small class="text-muted"> Showing 1–5 of 48 consultations </small>
          <nav>
            <ul class="pagination pagination-sm mb-0">
              <li class="page-item disabled">
                <a class="page-link" href="#"> Previous </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#"> 1 </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#"> 2 </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#"> 3 </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#"> Next </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>





















    
  </div>
</main>
<!-- =========================================================
     NEW OPD CONSULTATION MODAL
========================================================= -->
<div class="modal fade" id="consultationModal" tabindex="-1" aria-labelledby="consultationModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <!-- MODAL HEADER -->
      <div class="modal-header bg-primary text-white">
        <div>
          <h5 class="modal-title fw-bold" id="consultationModalLabel">
            <i class="bi bi-clipboard2-pulse me-2"></i> New OPD Consultation
          </h5>
          <small class="opacity-75"> Create patient consultation and prescription </small>
        </div>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <!-- <form id="consultationForm" method="post"> -->
        <form id="consultationForm" method="post">
          <div class="modal-body" style="max-height: 60vh; overflow-y: auto;">
          <!-- =================================================
                         PATIENT INFORMATION
                    ================================================= -->
          <div class="section-heading">
            <i class="bi bi-person-vcard me-2"></i> Patient Information
          </div>
          <div class="row g-3">
            <div class="col-lg-8 ui-widget">


              <label for="patientSearch" class="form-label"> Search Patient <span class="text-danger">*</span>
              </label>



              <div class="input-group">
                <span class="input-group-text bg-white">
                  <i class="bi bi-search"></i>
                </span>
                <!-- <input type="text" class="form-control" id="patientSearch" autocomplete="off" placeholder="Search patient name, mobile or patient ID" required> -->
                 <input type="text"
       class="form-control" 
       id="patientSearch"
       autocomplete="off"
       placeholder="Search patient name, mobile or patient ID"
       required>
       <input type="hidden" id="selectedPatientId" name="patient_id">

                <button type="button" class="btn btn-outline-primary"  id="newPatientBtn" >
                  <i class="bi bi-person-plus me-1"></i> New Patient </button>
                  <script>
$(document).ready(function () {

    $("#newPatientBtn").on("click", function () {

        // Manage Patients page वर redirect
        window.location.href = "<?= base_url('index.php/patients') ?>?openAddPatient=1";

    });

});
</script>
              </div>
            </div>
            <div class="col-lg-4">
              <label class="form-label"> Visit Type </label>
              <select class="form-select" name="visit_type">
                <option value="new"> New Patient </option>
                <option value="followup"> Follow-up Visit </option>
                <option value="review"> Treatment Review </option>
              </select>
            </div>
            <!-- SELECTED PATIENT -->
            <!-- <div class="col-12">
              <div class="patient-summary">
                <div class="d-flex align-items-center gap-3">
                  <div class="patient-avatar
                                                bg-primary-subtle text-primary"> RS </div>
                  <div class="flex-grow-1">
                    <div class="fw-bold"> Rahul Sharma </div>
                    <div class="small text-muted"> PT-0001248 &nbsp; • &nbsp; Male &nbsp; • &nbsp; 42 Years &nbsp; • &nbsp; 9876543210 </div>
                  </div>
                  <span class="badge bg-success-subtle text-success"> Existing Patient </span>
                </div>
              </div>
            </div> -->
            <div class="col-12">
    <div class="patient-summary" id="selectedPatientSummary" style="display:none;">

        <div class="d-flex align-items-center gap-3">

            <!-- Avatar -->
            <div class="patient-avatar bg-primary-subtle text-primary"
                 id="summaryAvatar">
                --
            </div>

            <!-- Patient Details -->
            <div class="flex-grow-1">
                <div class="fw-bold" id="summaryPatientName">
                    --
                </div>

                <div class="small text-muted" id="summaryPatientDetails">
                    --
                </div>
            </div>

            <!-- Status -->
            <span class="badge bg-success-subtle text-success" id="patientStatusBadge">
                
            </span>

        </div>

    </div>
</div>


          </div>
          <!-- =================================================
                         VITALS
                    ================================================= -->
          <div class="section-heading mt-4">
            <i class="bi bi-heart-pulse me-2"></i> Patient Vitals
          </div>
          <div class="row g-2">
            <div class="col-6 col-md-2">
              <div class="vital-box">
                <label class="form-label"> BP </label>
                <input type="text" class="form-control"  name="bp_count" placeholder="120/80">
              </div>
            </div>
            <div class="col-6 col-md-2">
              <div class="vital-box">
                <label class="form-label"> Pulse </label>
                <input type="number" class="form-control"  name="pulse_count" placeholder="72">
              </div>
            </div>
            <div class="col-6 col-md-2">
              <div class="vital-box">
                <label class="form-label"> Temperature </label>
                <input type="text" class="form-control" name="temperature" placeholder="98.6">
              </div>
            </div>
            <div class="col-6 col-md-2">
              <div class="vital-box">
                <label class="form-label"> SpO₂ </label>
                <input type="number" class="form-control" name="spo2" placeholder="98">
              </div>
            </div>
            <div class="col-6 col-md-2">
              <div class="vital-box">
                <label class="form-label"> Weight </label>
                <input type="number" class="form-control" name="weight" placeholder="60">
              </div>
            </div>
            <div class="col-6 col-md-2">
              <div class="vital-box">
                <label class="form-label"> Sugar </label>
                <input type="text" class="form-control"    name="sugar" placeholder="110">
              </div>
            </div>
          </div>
          <!-- =================================================
                         CONSULTATION
                    ================================================= -->
          <div class="section-heading mt-4">
            <i class="bi bi-chat-left-medical me-2"></i> Consultation Details
          </div>
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label"> Symptoms / Chief Complaints </label>
              <textarea class="form-control" name="symptoms" placeholder="Enter patient's symptoms and complaints"></textarea>
            </div>
            <div class="col-md-6">
              <label class="form-label"> Diagnosis </label>
              <textarea class="form-control" name="diagnosis" placeholder="Enter diagnosis"></textarea>
            </div>
            <div class="col-md-6">
              <label class="form-label"> Treatment Advice </label>
              <textarea class="form-control" name="treatment_advice" placeholder="Enter treatment advice"></textarea>
            </div>
            <div class="col-md-6">
              <label class="form-label"> Doctor Notes </label>
              <textarea class="form-control" name="doctor_notes" placeholder="Additional consultation notes"></textarea>
            </div>
            <div class="col-md-4">
              <label class="form-label"> Follow-up Date </label>
              <input type="date" class="form-control" name="followup_date">
            </div>
            <div class="col-md-4">
              <label class="form-label"> Consultation Fee </label>
              <div class="input-group">
                <span class="input-group-text"> ₹ </span>
                <input type="number" class="form-control" name="consultation_fee" value="500">
              </div>
            </div>
            <!-- <div class="col-md-4">
              <label class="form-label"> Payment Status </label>
              <select class="form-select" name="payment_status"    id="payment_status" required>
                <option value="paid"> Paid </option>
                <option value="pending"> Pending </option>
                <option value="partial"> Partially Paid </option>
              </select>
            </div> -->
            <div class="col-md-4">
    <label class="form-label">Payment Status</label>

    <select class="form-select"
            name="payment_status"
            id="payment_status"
            required>

        <option value="paid" selected>Paid</option>
        <option value="pending">Pending</option>
        <option value="partial">Partially Paid</option>

    </select>
</div>
          </div>
      
<!-- =================================================
     PRESCRIPTION
================================================= -->
<div class="section-heading mt-4
            d-flex justify-content-between
            align-items-center">
    <span>
        <i class="bi bi-prescription2 me-2"></i>
        Prescription
    </span>

    <button type="button"
            class="btn btn-sm btn-outline-primary"
            id="addMedicineBtn">
        <i class="bi bi-plus-circle me-1"></i>
        Add Medicine
    </button>
</div>

<div id="medicineContainer">

    <!-- MEDICINE ROW -->
    <div class="medicine-row">

        <div class="row g-2 align-items-end">

            <!-- MEDICINE -->
            <div class="col-lg-4">
                <label class="form-label">
                    Medicine
                </label>

             <input type="text"
       class="form-control medicine-name"
       name="medicine_name[]"
       placeholder="Search medicine"
       autocomplete="off">
            </div>  

            <!-- DOSAGE -->
            <div class="col-6 col-lg-2">
                <label class="form-label">
                    Dosage
                </label>

                <input type="text"
                       class="form-control"
                       name="dosage[]"
                       placeholder="500mg">
            </div>

            <!-- FREQUENCY -->
            <div class="col-6 col-lg-2">
                <label class="form-label">
                    Frequency
                </label>

                <select class="form-select"
                        name="frequency[]">

                    <option value="1-0-1">1-0-1</option>
                    <option value="1-1-1">1-1-1</option>
                    <option value="0-1-0">0-1-0</option>
                    <option value="0-0-1">0-0-1</option>

                </select>
            </div>

            <!-- DURATION -->
            <div class="col-6 col-lg-2">
                <label class="form-label">
                    Duration
                </label>

                <input type="text"
                       class="form-control"
                       name="duration[]"
                       placeholder="5 Days">
            </div>

            <!-- TIMING -->
            <div class="col-6 col-lg-1">
                <label class="form-label">
                    Timing
                </label>

                <select class="form-select"
                        name="timing[]">

                    <option value="After Food">After Food</option>
                    <option value="Before Food">Before Food</option>
                    <option value="With Food">With Food</option>

                </select>
            </div>

            <!-- REMOVE -->
            <div class="col-lg-1">
                <button type="button"
                        class="btn btn-outline-danger remove-medicine w-100"
                        title="Remove medicine">

                    <i class="bi bi-trash"></i>

                </button>
            </div>

        </div>

    </div>

</div>


          <!-- =================================================
                         PRESCRIPTION INSTRUCTIONS
                    ================================================= -->
          <div class="row g-3 mt-1">
            <div class="col-12">
              <label class="form-label"> Prescription Instructions </label>
              <textarea class="form-control" name="prescription_instructions" rows="2" placeholder="General medicine instructions for patient"></textarea>
            </div>
          </div>
          <!-- =================================================
                         REMINDER
                    ================================================= -->
          <div class="section-heading mt-4">
            <i class="bi bi-bell me-2"></i> Follow-up & Reminder
          </div>
          <div class="row g-3">
            <div class="col-md-4">
              <label class="form-label"> Reminder Type </label>
              <select class="form-select" name="reminder_type">
                <option> No Reminder </option>
                <option> Follow-up Reminder </option>
                <option> Medicine Completion Reminder </option>
              </select>
            </div>
            <div class="col-md-4">
              <label class="form-label"> Reminder Date </label>
              <input type="date" class="form-control"   name="reminder_date">
            </div>
            <div class="col-md-4">
              <label class="form-label"> Notification </label>
              <select class="form-select" name="notification">
                <option> Dashboard Alert </option>
                <option> WhatsApp </option>
                <option> SMS </option>
                <option> WhatsApp + SMS </option>
              </select>
            </div>
          </div>
          <!-- CONFIRMATION -->
          <div class="form-check mt-4">
            <input class="form-check-input" type="checkbox" id="consultationConfirmation" required>
            <label class="form-check-label small" for="consultationConfirmation"> I confirm that the consultation details, diagnosis and prescription information have been reviewed. </label>
          </div>
        </div>
        <!-- =================================================
                     MODAL FOOTER
                ================================================= -->
        <div class="modal-footer bg-light">
          <button type="button" class="btn btn-light border" data-bs-dismiss="modal">
            <i class="bi bi-x-circle me-1"></i> Cancel </button>
          <button type="reset" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-counterclockwise me-1"></i> Reset </button>
          <button type="submit" class="btn btn-primary">
            <i class="bi bi-check-circle me-1"></i> Save Consultation </button>
        </div>
      </form>
    </div>
  </div>









<script>
$(document).ready(function () {

    // ==========================================
    // STOCK MEDICINES FROM PHP
    // ==========================================

    var stocks = <?= json_encode(
        $stocks ?? [],
        JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES
    ) ?>;

    console.log("TOTAL STOCK RECORDS:", stocks.length);
    console.log("STOCK DATA:", stocks);


    // ==========================================
    // CREATE UNIQUE MEDICINE LIST
    // ==========================================

    var medicineList = [];

    $.each(stocks, function (index, stock) {

        var medicineName = $.trim(
            String(stock.medicine_name || '')
        );

        if (medicineName === '') {
            return;
        }

        var alreadyExists = medicineList.some(function (item) {
            return item.toLowerCase() === medicineName.toLowerCase();
        });

        if (!alreadyExists) {
            medicineList.push(medicineName);
        }
    });

    console.log("MEDICINE LIST:", medicineList);


    // ==========================================
    // CHECK JQUERY UI
    // ==========================================

    if (typeof $.fn.autocomplete !== "function") {

        console.error(
            "jQuery UI Autocomplete NOT loaded"
        );

        return;
    }


    // ==========================================
    // MEDICINE AUTOCOMPLETE
    // ==========================================
// ==========================================
// MEDICINE AUTOCOMPLETE
// ==========================================

function initMedicineAutocomplete(element) {

    $(element).autocomplete({

        // IMPORTANT:
        // Empty click/focus वर dropdown open होणार नाही
        minLength: 1,

        delay: 0,

        source: function (request, response) {

            var search = $.trim(request.term).toLowerCase();

            // काहीही type केले नसेल तर काहीही show करू नका
            if (search.length < 1) {
                response([]);
                return;
            }

            var results = $.grep(
                medicineList,
                function (medicine) {

                    return medicine
                        .toLowerCase()
                        .startsWith(search);
                }
            );

            console.log(
                "Medicine Search:",
                search,
                results
            );

            response(results);
        },

        select: function (event, ui) {

            event.preventDefault();

            $(this).val(ui.item.value);

            return false;
        }
    });

}


    // ==========================================
    // FIRST MEDICINE ROW
    // ==========================================

    $(".medicine-name").each(function () {

        initMedicineAutocomplete(this);

    });


    // ==========================================
    // ADD MEDICINE
    // ==========================================

    $("#addMedicineBtn").on("click", function () {

        var medicineRow = `
            <div class="medicine-row mt-2">

                <div class="row g-2 align-items-end">

                    <div class="col-lg-4">

                        <label class="form-label">
                            Medicine
                        </label>

                        <input
                            type="text"
                            class="form-control medicine-name"
                            name="medicine_name[]"
                            placeholder="Search medicine"
                            autocomplete="off"
                        >

                    </div>


                    <div class="col-lg-2">

                        <label class="form-label">
                            Dosage
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            name="dosage[]"
                            placeholder="e.g. 1 tablet"
                        >

                    </div>


                    <div class="col-lg-2">

                        <label class="form-label">
                            Frequency
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            name="frequency[]"
                            placeholder="e.g. 1-0-1"
                        >

                    </div>


                    <div class="col-lg-2">

                        <label class="form-label">
                            Duration
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            name="duration[]"
                            placeholder="e.g. 5 days"
                        >

                    </div>


                    <div class="col-lg-1">

                        <label class="form-label">
                            Timing
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            name="timing[]"
                            placeholder="After food"
                        >

                    </div>


                    <div class="col-lg-1">

                        <button
                            type="button"
                            class="btn btn-outline-danger remove-medicine"
                            title="Remove"
                        >
                            <i class="bi bi-trash"></i>
                        </button>

                    </div>

                </div>

            </div>
        `;

        $("#medicineContainer").append(medicineRow);

        var newMedicineInput =
            $("#medicineContainer .medicine-row:last .medicine-name");

        initMedicineAutocomplete(
            newMedicineInput
        );
    });


    // ==========================================
    // REMOVE MEDICINE
    // ==========================================

    $(document).on(
        "click",
        ".remove-medicine",
        function () {

            var rows =
                $("#medicineContainer .medicine-row");

            if (rows.length > 1) {

                $(this)
                    .closest(".medicine-row")
                    .remove();

            } else {

                $(this)
                    .closest(".medicine-row")
                    .find("input")
                    .val("");

            }
        }
    );

});
</script>



<script>

  $("#consultationForm").on("submit", function (e) {

    e.preventDefault();

    var form = this;

    // Patient select केला आहे का?
    if ($("#selectedPatientId").val() === "") {

        alert("Please select a patient.");

        return;
    }

    var formData = new FormData(form);

    $.ajax({

        url: "<?= base_url('index.php/patients/saveOPD') ?>",

        type: "POST",

        data: formData,

        processData: false,

        contentType: false,

        dataType: "json",

        beforeSend: function () {

            $("#consultationForm button[type='submit']")
                .prop("disabled", true)
                .html(
                    '<span class="spinner-border spinner-border-sm me-1"></span> Saving...'
                );
        },

        success: function (response) {

            if (response.status === true) {

                // Modal close
                var modalElement =
                    document.getElementById("consultationModal");

                var modal =
                    bootstrap.Modal.getInstance(modalElement);

                if (!modal) {
                    modal =
                        new bootstrap.Modal(modalElement);
                }

                modal.hide();

                // Form reset
                form.reset();

                // Patient data clear
                $("#selectedPatientId").val("");
                $("#patientSearch").val("");
                $("#selectedPatientSummary").hide();

                // Optional success message
                alert(response.message);

            } else {

                alert(response.message);
            }
        },

        error: function (xhr) {

            console.log(xhr.responseText);

            alert("Something went wrong while saving.");

        },

        complete: function () {

            $("#consultationForm button[type='submit']")
                .prop("disabled", false)
                .html(
                    '<i class="bi bi-check-circle me-1"></i> Save Consultation'
                );
        }

    });

});
</script>

<script>
$(document).ready(function () {

    /* =====================================================
       PATIENT DATA FROM PHP
    ===================================================== */

    var patients = <?= json_encode($patients ?? []) ?>;

    console.log("OPD PATIENTS:", patients);
    console.log("OPD PATIENT COUNT:", patients.length);


    /* =====================================================
       CHECK JQUERY UI
    ===================================================== */

    if (!$.fn.autocomplete) {
        console.error("jQuery UI Autocomplete NOT loaded");
        return;
    }


    /* =====================================================
       PATIENT AUTOCOMPLETE
    ===================================================== */

    $("#patientSearch").autocomplete({

        appendTo: "#consultationModal",

        minLength: 1,

        delay: 0,


        /* =================================================
           SEARCH
        ================================================= */

        source: function (request, response) {

            var search = $.trim(request.term).toLowerCase();

            var results = $.grep(patients, function (patient) {

                var firstName =
                    String(patient.first_name || "");

                var middleName =
                    String(patient.middle_name || "");

                var lastName =
                    String(patient.last_name || "");

                var mobile =
                    String(patient.mobile || "");

                var patientCode =
                    String(patient.patient_code || "");


                var fullName = $.trim(
                    firstName + " " +
                    middleName + " " +
                    lastName
                );


                /*
                 * Search by:
                 * Name
                 * Mobile
                 * Patient Code
                 */

                return (
                    fullName.toLowerCase().indexOf(search) !== -1 ||

                    mobile.toLowerCase().indexOf(search) !== -1 ||

                    patientCode.toLowerCase().indexOf(search) !== -1
                );

            });


            /* =================================================
               AUTOCOMPLETE RESULT
            ================================================= */

            response(
                $.map(results, function (patient) {

                    var firstName =
                        String(patient.first_name || "");

                    var middleName =
                        String(patient.middle_name || "");

                    var lastName =
                        String(patient.last_name || "");


                    var fullName = $.trim(
                        firstName + " " +
                        middleName + " " +
                        lastName
                    );


                    var mobile =
                        String(patient.mobile || "");

                    var patientCode =
                        String(patient.patient_code || "");


                    var label = "";


                    /*
                     * NAME SEARCH
                     */

                    if (
                        fullName
                            .toLowerCase()
                            .indexOf(search) !== -1
                    ) {

                        label = fullName;

                    }


                    /*
                     * MOBILE SEARCH
                     */

                    else if (
                        mobile
                            .toLowerCase()
                            .indexOf(search) !== -1
                    ) {

                        label = mobile;

                    }


                    /*
                     * PATIENT CODE SEARCH
                     */

                    else if (
                        patientCode
                            .toLowerCase()
                            .indexOf(search) !== -1
                    ) {

                        label = patientCode;

                    }


                    return {

                        label: label,

                        value: label,

                        patient_id:
                            patient.patient_id,

                        first_name:
                            patient.first_name,

                        middle_name:
                            patient.middle_name,

                        last_name:
                            patient.last_name,

                        patient_code:
                            patient.patient_code,

                        gender:
                            patient.gender,

                        age:
                            patient.age,

                        dob:
                            patient.dob,

                        mobile:
                            patient.mobile,

                        created_at:
                            patient.created_at

                    };

                })
            );

        },


        /* =====================================================
           PATIENT SELECT
        ===================================================== */

        select: function (event, ui) {

            /*
             * Prevent default autocomplete behaviour
             */

            event.preventDefault();


            /* =================================================
               SET SEARCH VALUE
            ================================================= */

            $("#patientSearch")
                .val(ui.item.value);


            /* =================================================
               SET HIDDEN PATIENT ID
            ================================================= */

            $("#selectedPatientId")
                .val(ui.item.patient_id);


            console.log("SELECTED PATIENT:", ui.item);

            console.log(
                "SELECTED PATIENT ID:",
                ui.item.patient_id
            );


            /* =================================================
               FULL PATIENT NAME
            ================================================= */

            var firstName =
                String(ui.item.first_name || "");

            var middleName =
                String(ui.item.middle_name || "");

            var lastName =
                String(ui.item.last_name || "");


            var fullName = $.trim(
                firstName + " " +
                middleName + " " +
                lastName
            );


            /* =================================================
               INITIALS
            ================================================= */

            var initials = "";


            if (firstName) {

                initials +=
                    firstName
                        .charAt(0)
                        .toUpperCase();

            }


            if (lastName) {

                initials +=
                    lastName
                        .charAt(0)
                        .toUpperCase();

            }


            if (!initials) {

                initials = "--";

            }


            /* =================================================
               PATIENT STATUS
               
               TODAY = NEW PATIENT
               OLD DATE = EXISTING PATIENT
            ================================================= */

            var patientStatus =
                "Existing Patient";


            var createdAt =
                String(ui.item.created_at || "").trim();


            /*
             * MySQL date format:
             *
             * 2026-10-05 10:23:12
             *
             * We only take:
             *
             * 2026-10-05
             */

            var createdDay =
                createdAt.substring(0, 10);


            /* =================================================
               TODAY DATE
            ================================================= */

            var today = new Date();


            var todayDay =
                today.getFullYear() +
                "-" +
                String(
                    today.getMonth() + 1
                ).padStart(2, "0") +
                "-" +
                String(
                    today.getDate()
                ).padStart(2, "0");


            console.log(
                "PATIENT CREATED DATE:",
                createdDay
            );

            console.log(
                "TODAY DATE:",
                todayDay
            );


            /* =================================================
               STATUS DECISION
            ================================================= */

            if (
                createdDay &&
                createdDay !== "0000-00-00" &&
                createdDay === todayDay
            ) {

                patientStatus =
                    "New Patient";

            }
            else {

                patientStatus =
                    "Existing Patient";

            }


            console.log(
                "PATIENT STATUS:",
                patientStatus
            );


            /* =================================================
               SUMMARY AVATAR
            ================================================= */

            $("#summaryAvatar")
                .text(initials);


            /* =================================================
               SUMMARY NAME
            ================================================= */

            $("#summaryPatientName")
                .text(fullName || "--");


            /* =================================================
               SUMMARY DETAILS
            ================================================= */

            $("#summaryPatientDetails").html(

                (ui.item.patient_code || "--") +

                " &nbsp; • &nbsp; " +

                (ui.item.gender || "--") +

                " &nbsp; • &nbsp; " +

                (ui.item.age || "--") +

                " Years" +

                " &nbsp; • &nbsp; " +

                (ui.item.mobile || "--")

            );


            /* =================================================
               STATUS BADGE
            ================================================= */

            var statusBadge =
                $("#patientStatusBadge");


            /*
             * First remove both old styles
             */

            statusBadge
                .removeClass(
                    "bg-success-subtle " +
                    "text-success " +
                    "bg-primary-subtle " +
                    "text-primary"
                );


            /* =================================================
               NEW PATIENT
            ================================================= */

            if (
                patientStatus === "New Patient"
            ) {

                statusBadge
                    .text("New Patient")
                    .addClass(
                        "bg-primary-subtle text-primary"
                    );

            }


            /* =================================================
               EXISTING PATIENT
            ================================================= */

            else {

                statusBadge
                    .text("Existing Patient")
                    .addClass(
                        "bg-success-subtle text-success"
                    );

            }


            /* =================================================
               SHOW PATIENT SUMMARY
            ================================================= */

            $("#selectedPatientSummary")
                .show();


            return false;

        }

    });


    /* =====================================================
       USER TYPES / CHANGES SEARCH
    ===================================================== */

    $("#patientSearch").on(
        "input",
        function () {

            /*
             * User typed something new.
             * Previously selected patient is no longer valid.
             */

            $("#selectedPatientId")
                .val("");


            /*
             * Hide selected patient summary
             */

            $("#selectedPatientSummary")
                .hide();

        }
    );


    /* =====================================================
       MODAL CLOSE
    ===================================================== */

    $("#consultationModal").on(
        "hidden.bs.modal",
        function () {

            /*
             * Clear search
             */

            $("#patientSearch")
                .val("");


            /*
             * Clear patient ID
             */

            $("#selectedPatientId")
                .val("");


            /*
             * Hide summary
             */

            $("#selectedPatientSummary")
                .hide();


            /*
             * Reset badge
             */

            $("#patientStatusBadge")
                .text("Existing Patient")
                .removeClass(
                    "bg-primary-subtle text-primary"
                )
                .addClass(
                    "bg-success-subtle text-success"
                );

        }
    );


    /* =====================================================
       FORM RESET
    ===================================================== */

    $("#consultationForm").on(
        "reset",
        function () {

            setTimeout(function () {

                $("#patientSearch")
                    .val("");


                $("#selectedPatientId")
                    .val("");


                $("#selectedPatientSummary")
                    .hide();


                $("#patientStatusBadge")
                    .text("Existing Patient")
                    .removeClass(
                        "bg-primary-subtle text-primary"
                    )
                    .addClass(
                        "bg-success-subtle text-success"
                    );

            }, 0);

        }
    );

});
</script>







</main>
</div>


  
<script>
  /* =====================================================
       MOBILE SIDEBAR
    ===================================================== */
  const menuToggle = document.getElementById("menuToggle");
  const sidebar = document.getElementById("sidebar");
  const overlay = document.getElementById("sidebarOverlay");

  function openSidebar() {
    sidebar.classList.add("show");
    overlay.classList.add("show");
    document.body.style.overflow = "hidden";
  }

  function closeSidebar() {
    sidebar.classList.remove("show");
    overlay.classList.remove("show");
    document.body.style.overflow = "";
  }
  menuToggle.addEventListener("click", function() {
    if (sidebar.classList.contains("show")) {
      closeSidebar();
    } else {
      openSidebar();
    }
  });
  overlay.addEventListener("click", closeSidebar);
  /* =====================================================
     CLOSE MOBILE SIDEBAR AFTER CLICKING MENU
  ===================================================== */
  document.querySelectorAll(".sidebar-menu a").forEach(function(link) {
    link.addEventListener("click", function() {
      if (window.innerWidth <= 991) {
        closeSidebar();
      }
    });
  });
  /* =====================================================
     ACTIVE MENU
  ===================================================== */
  document.querySelectorAll(".sidebar-menu a").forEach(function(link) {
    link.addEventListener("click", function(event) {
      document.querySelectorAll(".sidebar-menu a").forEach(function(item) {
        item.classList.remove("active");
      });
      this.classList.add("active");
    });
  });
  /* =====================================================
     RESPONSIVE RESET
  ===================================================== */
  window.addEventListener("resize", function() {
    if (window.innerWidth > 991) {
      sidebar.classList.remove("show");
      overlay.classList.remove("show");
      document.body.style.overflow = "";
    }
  });
  
</script>
<!-- 
<script>
  $( function() {
    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    $( "#patientSearch" ).autocomplete({
      source: availableTags
    });
  } );
  </script> -->


</body>
</html>