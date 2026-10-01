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
    }
    .ui-autocomplete {
    z-index: 99999 !important;
    max-height: 250px;
    overflow-y: auto;
    overflow-x: hidden;
    background: #fff;
    border: 1px solid #dee2e6;
    border-radius: 8px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, .15);
    padding: 5px 0;
}

.ui-menu-item-wrapper {
    padding: 10px 12px !important;
    font-size: 14px;
    cursor: pointer;
}

.ui-menu-item-wrapper.ui-state-active {
    background: #f1f5ff !important;
    color: #212529 !important;
    border: 0 !important;
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
                
            
   <input
                type="text"
                class="form-control"
                id="opdPatientSearch"
                name="patient_search"
                autocomplete="off"
                placeholder="Search patient name, mobile number or patient ID"
                required
            >
   <input
            type="hidden"
            name="patient_id"
            id="selectedPatientId"
            value=""
        >
                <button type="button" class="btn btn-outline-primary">
                  <i class="bi bi-person-plus me-1"></i> New Patient </button>
              </div>
            </div>
            <!-- SELECTED PATIENT -->
<div class="col-12">
  <div class="patient-summary" id="selectedPatientSummary">
    <div class="d-flex align-items-center gap-3">

      <div
        class="patient-avatar bg-primary-subtle text-primary"
        id="patientAvatar"
      >
        ?
      </div>

      <div class="flex-grow-1">
        <div class="fw-bold" id="selectedPatientName">
          Select Patient
        </div>

        <div
          class="small text-muted"
          id="selectedPatientDetails"
        >
          Search patient by name, mobile number or patient ID
        </div>
      </div>

      <span
        class="badge bg-secondary-subtle text-secondary"
        id="patientStatus"
      >
        Not Selected
      </span>

    </div>
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
                <input type="text" class="form-control" placeholder="120/80">
              </div>
            </div>
            <div class="col-6 col-md-2">
              <div class="vital-box">
                <label class="form-label"> Pulse </label>
                <input type="number" class="form-control" placeholder="72">
              </div>
            </div>
            <div class="col-6 col-md-2">
              <div class="vital-box">
                <label class="form-label"> Temperature </label>
                <input type="text" class="form-control" placeholder="98.6">
              </div>
            </div>
            <div class="col-6 col-md-2">
              <div class="vital-box">
                <label class="form-label"> SpO₂ </label>
                <input type="number" class="form-control" placeholder="98">
              </div>
            </div>
            <div class="col-6 col-md-2">
              <div class="vital-box">
                <label class="form-label"> Weight </label>
                <input type="number" class="form-control" placeholder="60">
              </div>
            </div>
            <div class="col-6 col-md-2">
              <div class="vital-box">
                <label class="form-label"> Sugar </label>
                <input type="text" class="form-control" placeholder="110">
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
            <div class="col-md-4">
              <label class="form-label"> Payment Status </label>
              <select class="form-select" name="payment_status">
                <option value="paid"> Paid </option>
                <option value="pending"> Pending </option>
                <option value="partial"> Partially Paid </option>
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
              <i class="bi bi-prescription2 me-2"></i> Prescription </span>
            <button type="button" class="btn btn-sm btn-outline-primary" id="addMedicineBtn">
              <i class="bi bi-plus-circle me-1"></i> Add Medicine </button>
          </div>
          <div id="medicineContainer">
            <!-- MEDICINE ROW -->
            <div class="medicine-row">
              <div class="row g-2 align-items-end">
                <div class="col-lg-4">
                  <label class="form-label"> Medicine </label>
                  <input type="text" class="form-control" placeholder="Search medicine">
                </div>
                <div class="col-6 col-lg-2">
                  <label class="form-label"> Dosage </label>
                  <input type="text" class="form-control" placeholder="500mg">
                </div>
                <div class="col-6 col-lg-2">
                  <label class="form-label"> Frequency </label>
                  <select class="form-select">
                    <option> 1-0-1 </option>
                    <option> 1-1-1 </option>
                    <option> 0-1-0 </option>
                    <option> 0-0-1 </option>
                  </select>
                </div>
                <div class="col-6 col-lg-2">
                  <label class="form-label"> Duration </label>
                  <input type="text" class="form-control" placeholder="5 Days">
                </div>
                <div class="col-6 col-lg-1">
                  <label class="form-label"> Timing </label>
                  <select class="form-select">
                    <option> After Food </option>
                    <option> Before Food </option>
                    <option> With Food </option>
                  </select>
                </div>
                <div class="col-lg-1">
                  <button type="button" class="btn btn-outline-danger
                                               remove-medicine w-100" title="Remove medicine">
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
              <textarea class="form-control" rows="2" placeholder="General medicine instructions for patient"></textarea>
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
              <select class="form-select">
                <option> No Reminder </option>
                <option> Follow-up Reminder </option>
                <option> Medicine Completion Reminder </option>
              </select>
            </div>
            <div class="col-md-4">
              <label class="form-label"> Reminder Date </label>
              <input type="date" class="form-control">
            </div>
            <div class="col-md-4">
              <label class="form-label"> Notification </label>
              <select class="form-select">
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
</div>
<!-- =========================================================
     PAGE JAVASCRIPT
========================================================= -->
<script>
  document.addEventListener("DOMContentLoaded", function() {
    /* =====================================================
       SEARCH + STATUS FILTER
    ===================================================== */
    const searchInput = document.getElementById("consultationSearch");
    const statusFilter = document.getElementById("consultationStatus");
    const rows = document.querySelectorAll("#consultationTableBody tr");

    function filterConsultations() {
      const search = searchInput.value.toLowerCase().trim();
      const status = statusFilter.value.toLowerCase();
      rows.forEach(function(row) {
        const text = row.innerText.toLowerCase();
        const rowStatus = row.getAttribute("data-status");
        const searchMatch = text.includes(search);
        const statusMatch = !status || rowStatus === status;
        row.style.display = searchMatch && statusMatch ? "" : "none";
      });
    }
    searchInput.addEventListener("input", filterConsultations);
    statusFilter.addEventListener("change", filterConsultations);
    /* =====================================================
       ADD MEDICINE
    ===================================================== */
    const addMedicineBtn = document.getElementById("addMedicineBtn");
    const medicineContainer = document.getElementById("medicineContainer");
    addMedicineBtn.addEventListener("click", function() {
      const medicineRow = document.createElement("div");
      medicineRow.className = "medicine-row";
      medicineRow.innerHTML = `<div class="row g-2 align-items-end">
  <div class="col-lg-4">
    <label class="form-label"> Medicine </label>
    <input type="text" class="form-control" placeholder="Search medicine">
  </div>
  <div class="col-6 col-lg-2">
    <label class="form-label"> Dosage </label>
    <input type="text" class="form-control" placeholder="500mg">
  </div>
  <div class="col-6 col-lg-2">
    <label class="form-label"> Frequency </label>
    <select class="form-select">
      <option>1-0-1</option>
      <option>1-1-1</option>
      <option>0-1-0</option>
      <option>0-0-1</option>
    </select>
  </div>
  <div class="col-6 col-lg-2">
    <label class="form-label"> Duration </label>
    <input type="text" class="form-control" placeholder="5 Days">
  </div>
  <div class="col-6 col-lg-1">
    <label class="form-label"> Timing </label>
    <select class="form-select">
      <option> After Food </option>
      <option> Before Food </option>
      <option> With Food </option>
    </select>
  </div>
  <div class="col-lg-1">
    <button type="button" class="btn btn-outline-danger
                                   remove-medicine w-100">
      <i class="bi bi-trash"></i>
    </button>
  </div>
</div>`;
      medicineContainer.appendChild(medicineRow);
    });
    /* =====================================================
       REMOVE MEDICINE
    ===================================================== */
    medicineContainer.addEventListener("click", function(event) {
      const removeButton = event.target.closest(".remove-medicine");
      if (!removeButton) {
        return;
      }
      const medicineRows = medicineContainer.querySelectorAll(".medicine-row");
      if (medicineRows.length <= 1) {
        alert("At least one medicine row is required.");
        return;
      }
      removeButton.closest(".medicine-row").remove();
    });

  });
</script>
</main>
</div>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://code.jquery.com/ui/1.14.2/jquery-ui.js"></script>
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



<script>
$(document).ready(function () {

    console.log("=================================");
    console.log("PATIENT SEARCH INITIALIZED");
    console.log("=================================");

    /* =====================================================
       PATIENT DATA FROM PHP
    ===================================================== */

    var patients = [

        <?php
        if (!empty($patients)) {

            foreach ($patients as $patient) {

                $patientId = is_object($patient)
                    ? ($patient->patient_id ?? '')
                    : ($patient['patient_id'] ?? '');

                $firstName = is_object($patient)
                    ? ($patient->first_name ?? '')
                    : ($patient['first_name'] ?? '');

                $middleName = is_object($patient)
                    ? ($patient->middle_name ?? '')
                    : ($patient['middle_name'] ?? '');

                $lastName = is_object($patient)
                    ? ($patient->last_name ?? '')
                    : ($patient['last_name'] ?? '');

                $patientCode = is_object($patient)
                    ? ($patient->patient_code ?? '')
                    : ($patient['patient_code'] ?? '');

                $mobile = is_object($patient)
                    ? ($patient->mobile ?? '')
                    : ($patient['mobile'] ?? '');

                $fullName = trim(
                    $firstName . ' ' .
                    $middleName . ' ' .
                    $lastName
                );
        ?>

        {
            id: <?= json_encode((string)$patientId) ?>,
            name: <?= json_encode($fullName) ?>,
            patientCode: <?= json_encode((string)$patientCode) ?>,
            mobile: <?= json_encode((string)$mobile) ?>
        },

        <?php
            }
        }
        ?>

    ];

    console.log("TOTAL PATIENTS:", patients.length);


    /* =====================================================
       ELEMENTS
    ===================================================== */

    var $patientSearch = $("#opdPatientSearch");
    var $selectedPatientId = $("#selectedPatientId");

    if (!$patientSearch.length) {
        console.error("ERROR: #opdPatientSearch not found");
        return;
    }

    if (!$selectedPatientId.length) {
        console.error("ERROR: #selectedPatientId not found");
        return;
    }


    /* =====================================================
       CHECK JQUERY UI
    ===================================================== */

    if (typeof $.ui === "undefined") {

        console.error("ERROR: jQuery UI is NOT loaded");

        return;
    }

    console.log("jQuery UI version:", $.ui.version);


    /* =====================================================
       PATIENT AUTOCOMPLETE
    ===================================================== */

    $patientSearch.autocomplete({

        minLength: 1,

        delay: 150,

        appendTo: "#consultationModal",

        /* =================================================
           SEARCH PATIENT
        ================================================= */

        source: function (request, response) {

            var search = $.trim(request.term).toLowerCase();

            console.log("Searching patient:", search);

            if (!search) {
                response([]);
                return;
            }

            var results = $.grep(
                patients,
                function (patient) {

                    var name = String(
                        patient.name || ""
                    ).toLowerCase();

                    var mobile = String(
                        patient.mobile || ""
                    ).toLowerCase();

                    var id = String(
                        patient.id || ""
                    ).toLowerCase();

                    var code = String(
                        patient.patientCode || ""
                    ).toLowerCase();

                    return (
                        name.indexOf(search) !== -1 ||
                        mobile.indexOf(search) !== -1 ||
                        id.indexOf(search) !== -1 ||
                        code.indexOf(search) !== -1
                    );
                }
            );

            console.log("Search results:", results);

            response(
                $.map(
                    results,
                    function (patient) {

                        return {

                            label:
                                patient.name +
                                " | ID: " +
                                patient.patientCode +
                                " | Mobile: " +
                                patient.mobile,

                            value: patient.name,

                            patient: patient
                        };

                    }
                )
            );
        },


        /* =================================================
           SELECT PATIENT
        ================================================= */

        select: function (event, ui) {

            event.preventDefault();

            var patient = ui.item.patient;

            console.log("SELECTED PATIENT:", patient);


            /* =================================================
               SET SEARCH INPUT
            ================================================= */

            $patientSearch.val(patient.name);


            /* =================================================
               SET HIDDEN PATIENT ID
            ================================================= */

            $selectedPatientId.val(patient.id);


            /* =================================================
               CREATE INITIALS
            ================================================= */

            var nameParts = $.trim(patient.name).split(/\s+/);

            var initials = "";

            if (nameParts.length >= 2) {

                initials =
                    nameParts[0].charAt(0) +
                    nameParts[nameParts.length - 1].charAt(0);

            } else {

                initials =
                    nameParts[0]
                        .substring(0, 2);

            }


            /* =================================================
               UPDATE AVATAR
            ================================================= */

            $("#patientAvatar")
                .text(initials.toUpperCase())
                .removeClass(
                    "bg-primary-subtle text-primary"
                )
                .addClass(
                    "bg-success-subtle text-success"
                );


            /* =================================================
               UPDATE PATIENT NAME
            ================================================= */

            $("#selectedPatientName")
                .text(patient.name);


            /* =================================================
               UPDATE PATIENT DETAILS
            ================================================= */

            $("#selectedPatientDetails").html(

                "ID: <strong>" +
                (patient.patientCode || "-") +
                "</strong>" +

                " &nbsp; • &nbsp; " +

                "Mobile: <strong>" +
                (patient.mobile || "-") +
                "</strong>"

            );


            /* =================================================
               UPDATE STATUS
            ================================================= */

            $("#patientStatus")
                .removeClass(
                    "bg-secondary-subtle text-secondary"
                )
                .addClass(
                    "bg-success-subtle text-success"
                )
                .text("Existing Patient");


            return false;
        }

    });


    /* =====================================================
       CLEAR SELECTED PATIENT WHEN SEARCH IS CHANGED
    ===================================================== */

    $patientSearch.on("input", function () {

        var currentValue = $.trim($(this).val());

        var selectedId = $selectedPatientId.val();

        var selectedName = $.trim(
            $("#selectedPatientName").text()
        );


        /*
         * If user edits the selected patient name,
         * remove selected patient ID.
         */

        if (
            selectedId !== "" &&
            currentValue !== selectedName
        ) {

            clearSelectedPatient();

        }

    });


    /* =====================================================
       CLEAR PATIENT FUNCTION
    ===================================================== */

    function clearSelectedPatient() {

        $selectedPatientId.val("");

        $("#patientAvatar")
            .text("?")
            .removeClass(
                "bg-success-subtle text-success"
            )
            .addClass(
                "bg-primary-subtle text-primary"
            );

        $("#selectedPatientName")
            .text("Select Patient");

        $("#selectedPatientDetails")
            .text(
                "Search patient by name, mobile number or patient ID"
            );

        $("#patientStatus")
            .removeClass(
                "bg-success-subtle text-success"
            )
            .addClass(
                "bg-secondary-subtle text-secondary"
            )
            .text("Not Selected");
    }


    /* =====================================================
       FORM SUBMIT VALIDATION
    ===================================================== */

    $("#consultationForm").on(
        "submit",
        function (e) {

            var patientId = $selectedPatientId.val();

            console.log(
                "SUBMIT PATIENT ID:",
                patientId
            );


            if (!patientId) {

                e.preventDefault();

                alert(
                    "Please select a patient from the search list."
                );

                $patientSearch.focus();

                return false;
            }

        }
    );


    /* =====================================================
       FORM RESET
    ===================================================== */

    $("#consultationForm").on(
        "reset",
        function () {

            setTimeout(function () {

                clearSelectedPatient();

                $patientSearch.val("");

            }, 50);

        }
    );


    /* =====================================================
       NEW PATIENT BUTTON
    ===================================================== */

    $(".btn-outline-primary").on(
        "click",
        function () {

            /*
             * Only handle the New Patient button
             * inside patient search area.
             */

            if (
                $(this)
                    .closest(".input-group")
                    .find("#opdPatientSearch").length
            ) {

                console.log("New Patient button clicked");

                /*
                 * Future:
                 * Open New Patient modal here.
                 */
            }

        }
    );


    console.log("PATIENT AUTOCOMPLETE READY");

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