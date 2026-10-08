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
                <!-- <th> Visit Time </th> -->
              <th> Visit Type </th>
              <th> Symptoms </th>
              <th> Diagnosis </th>
              <th> Follow-up </th>
              <th> Status </th>
              <th class="text-end"> Actions </th>
            </tr>
          </thead>
        
<tbody id="consultationTableBody">

<?php if (!empty($opdList)) { ?>

    <?php foreach ($opdList as $row) { ?>

        <?php
            // Patient name
            $firstName  = $row->first_name ?? '';
            $middleName = $row->middle_name ?? '';
            $lastName   = $row->last_name ?? '';

            $fullName = trim(
                $firstName . ' ' . $middleName . ' ' . $lastName
            );

            // Initials
            $initials = '';

            if (!empty($firstName)) {
                $initials .= strtoupper(substr($firstName, 0, 1));
            }

            if (!empty($lastName)) {
                $initials .= strtoupper(substr($lastName, 0, 1));
            }

            if (empty($initials)) {
                $initials = '--';
            }

            // Visit type
            $visitType = strtolower($row->visit_type ?? 'new');

            if ($visitType == 'followup') {
                $visitLabel = 'Follow-up';
                $visitClass = 'badge-followup';
            } else {
                $visitLabel = 'New Patient';
                $visitClass = 'badge-new';
            }

            // Status
            $status = strtolower($row->status ?? 'completed');

            if ($status == 'completed') {
                $statusLabel = 'Completed';
                $statusClass = 'badge-completed';
            } elseif ($status == 'followup') {
                $statusLabel = 'Follow-up';
                $statusClass = 'badge-followup';
            } else {
                $statusLabel = ucfirst($status);
                $statusClass = 'badge-new';
            }
        ?>

    <tr 
    data-status="<?= esc($visitType); ?>"
    data-search="<?= esc(
        strtolower(
            ($fullName ?? '') . ' ' .
            ($row->patient_code ?? '') . ' ' .
            ($row->mobile ?? '')
        )
    ); ?>"
>

            <!-- PATIENT -->
            <td>
                <div class="d-flex align-items-center gap-2">

                    <div class="patient-avatar bg-success-subtle text-success">
                        <?= esc($initials); ?>
                    </div>

                    <div>
                        <div class="patient-name">
                            <?= esc($fullName ?: '--'); ?>
                        </div>

                        <div class="patient-id">
                            <?= esc($row->patient_code ?? '--'); ?>
                        </div>
                    </div>

                </div>
            </td>

         

            <!-- VISIT TYPE -->
            <td>
                <span class="visit-badge <?= $visitClass; ?>">
                    <?= $visitLabel; ?>
                </span>
            </td>

            <!-- SYMPTOMS -->
            <td>
                <?= esc($row->symptoms ?? '--'); ?>
            </td>

            <!-- DIAGNOSIS -->
            <td>
                <?= esc($row->diagnosis ?? '--'); ?>
            </td>

            <!-- FOLLOW-UP -->
            <td>
                <?= !empty($row->followup_date)
                    ? date('d M Y', strtotime($row->followup_date))
                    : '--'; ?>
            </td>

            <!-- STATUS -->
            <td>
                <span class="visit-badge <?= $statusClass; ?>">
                    <?= $statusLabel; ?>
                </span>
            </td>

            <!-- ACTIONS -->
            <td class="text-end">

      <button
    type="button"
    class="btn btn-light border action-btn viewConsultationBtn"
    title="View"
    data-id="<?= esc($row->opd_id ?? ''); ?>">
    <i class="bi bi-eye"></i>
</button>

        <button
    type="button"
    class="btn btn-light border action-btn editConsultationBtn"
    title="Edit"
    data-id="<?= esc($row->opd_id ?? ''); ?>">
    <i class="bi bi-pencil"></i>
</button>

                <button
                    type="button"
                    class="btn btn-light border action-btn"
                    title="Prescription">
                    <i class="bi bi-prescription2"></i>
                </button>

            </td>

        </tr>

    <?php } ?>

<?php } else { ?>

    <tr>
        <td colspan="8" class="text-center text-muted py-4">
            No OPD consultations found.
        </td>
    </tr>

<?php } ?>

<script>
$(document).ready(function () {

    // =====================================================
    // COMMON URL
    // =====================================================
    const getOPDUrl = "<?= base_url('index.php/patients/getOPDDetails') ?>";
    const saveOPDUrl = "<?= base_url('index.php/patients/saveOPD') ?>";
    const updateOPDUrl = "<?= base_url('index.php/patients/updateOPD') ?>";


    // =====================================================
    // VIEW BUTTON
    // =====================================================
    $(document).on("click", ".viewConsultationBtn", function () {

        let opdId = $(this).attr("data-id");

        console.log("VIEW CLICKED");
        console.log("OPD ID:", opdId);

        if (!opdId || opdId === "undefined" || opdId === "null") {
            alert("OPD ID not found.");
            return;
        }

        loadOPDDetails(opdId, "view");
    });


    // =====================================================
    // EDIT BUTTON
    // =====================================================
    $(document).on("click", ".editConsultationBtn", function () {

        let opdId = $(this).attr("data-id");

        console.log("EDIT CLICKED");
        console.log("OPD ID:", opdId);

        if (!opdId || opdId === "undefined" || opdId === "null") {
            alert("OPD ID not found.");
            return;
        }

        loadOPDDetails(opdId, "edit");
    });


    // =====================================================
    // LOAD OPD DETAILS
    // =====================================================
    function loadOPDDetails(opdId, mode) {

        let url = getOPDUrl + "/" + opdId;

        console.log("=================================");
        console.log("GET OPD DETAILS");
        console.log("OPD ID:", opdId);
        console.log("URL:", url);
        console.log("MODE:", mode);
        console.log("=================================");

        $.ajax({

            url: url,
            type: "GET",
            dataType: "json",

            beforeSend: function () {

                console.log("Loading OPD details...");

                $("#consultationModalLabel").text("Loading...");

            },

            success: function (response) {

                console.log("OPD RESPONSE:", response);

                if (!response || response.status !== true) {

                    alert(
                        response && response.message
                            ? response.message
                            : "OPD details not found."
                    );

                    return;
                }

                // -------------------------------------------------
                // OPD DATA
                // -------------------------------------------------
                let opd = response.opd || {};
                let prescriptions = response.prescriptions || [];

                console.log("OPD DATA:", opd);
                console.log("PRESCRIPTIONS:", prescriptions);


                // -------------------------------------------------
                // SET OPD ID
                // -------------------------------------------------
                $("#opd_id").val(opd.opd_id || opdId);


                // =================================================
                // PATIENT INFORMATION
                // =================================================

                let patientName = "";

                patientName =
                    (opd.first_name || "") + " " +
                    (opd.middle_name || "") + " " +
                    (opd.last_name || "");

                patientName = patientName.replace(/\s+/g, " ").trim();

                console.log("Patient Name:", patientName);


                // Patient search field
                $("#patientSearch").val(patientName);


                // Hidden patient ID
                $("#selectedPatientId").val(opd.patient_id || "");


                // If another hidden patient_id exists
                $("input[name='patient_id']").val(opd.patient_id || "");


                // Patient summary if these fields exist
                $("#patientName").text(patientName);
                $("#selectedPatientName").text(patientName);

                $("#patientCode").text(opd.patient_code || "");
                $("#patientMobile").text(opd.mobile || "");
                $("#patientGender").text(opd.gender || "");
                $("#patientDob").text(opd.dob || "");


                // =================================================
                // BASIC OPD FIELDS
                // =================================================

                setValue("#visit_type", opd.visit_type);

                setValue("#bp_count", opd.bp_count);
                setValue("#pulse_count", opd.pulse_count);
                setValue("#temperature", opd.temperature);
                setValue("#spo2", opd.spo2);
                setValue("#weight", opd.weight);
                setValue("#sugar", opd.sugar);

                setValue("#symptoms", opd.symptoms);
                setValue("#diagnosis", opd.diagnosis);
                setValue("#treatment_advice", opd.treatment_advice);
                setValue("#doctor_notes", opd.doctor_notes);

                setValue("#followup_date", opd.followup_date);

                setValue("#consultation_fee", opd.consultation_fee);
                setValue("#payment_status", opd.payment_status);

                setValue(
                    "#prescription_instructions",
                    opd.prescription_instructions
                );

                setValue("#reminder_type", opd.reminder_type);
                setValue("#reminder_date", opd.reminder_date);

                setValue("#notification", opd.notification);


                // =================================================
                // PRESCRIPTIONS
                // =================================================

                loadPrescriptions(prescriptions);


                // =================================================
                // VIEW / EDIT MODE
                // =================================================

                if (mode === "view") {

                    $("#consultationModalLabel").text(
                        "View OPD Consultation"
                    );

                    // Hide save/update button
                    $("#saveConsultationBtn").hide();

                    // Disable all form controls
                    $("#consultationForm")
                        .find("input, select, textarea")
                        .prop("disabled", true);

                    // Keep hidden values enabled
                    $("#consultationForm")
                        .find("input[type='hidden']")
                        .prop("disabled", false);

                    // Hide Add Medicine button
                    $("#addMedicineBtn").hide();

                    // Hide remove medicine buttons
                    $(".remove-medicine").hide();

                } else {

                    $("#consultationModalLabel").text(
                        "Edit OPD Consultation"
                    );

                    // Show update button
                    $("#saveConsultationBtn")
                        .show()
                        .text("Update Consultation");

                    // Enable fields
                    $("#consultationForm")
                        .find("input, select, textarea")
                        .prop("disabled", false);

                    // Hidden fields should remain enabled
                    $("#consultationForm")
                        .find("input[type='hidden']")
                        .prop("disabled", false);

                    // Patient should remain fixed
                    $("#patientSearch").prop("disabled", true);

                    // Show add medicine
                    $("#addMedicineBtn").show();

                    // Show remove buttons
                    $(".remove-medicine").show();
                }


                // =================================================
                // OPEN MODAL
                // =================================================

                let modalElement =
                    document.getElementById("consultationModal");

                if (modalElement) {

                    let modal =
                        bootstrap.Modal.getOrCreateInstance(modalElement);

                    modal.show();

                } else {

                    console.error(
                        "#consultationModal not found."
                    );

                }

            },

            error: function (xhr, status, error) {

                console.error("==============================");
                console.error("GET OPD DETAILS ERROR");
                console.error("==============================");

                console.error("HTTP STATUS:", xhr.status);
                console.error("STATUS:", status);
                console.error("ERROR:", error);
                console.error("RESPONSE:", xhr.responseText);
                console.error("URL:", url);
                console.error("OPD ID:", opdId);

                alert(
                    "Unable to load OPD details. " +
                    "Check browser Console for error."
                );
            }

        });
    }


    // =====================================================
    // SET VALUE HELPER
    // =====================================================
    function setValue(selector, value) {

        if ($(selector).length) {

            if (value === null || value === undefined) {
                value = "";
            }

            $(selector).val(value);
        }
    }


    // =====================================================
    // LOAD PRESCRIPTIONS
    // =====================================================
    function loadPrescriptions(prescriptions) {

        let container = $("#medicineContainer");

        if (!container.length) {
            console.warn("#medicineContainer not found.");
            return;
        }

        // Remove existing medicine rows
        container.find(".medicine-row").remove();


        // No prescription
        if (!prescriptions || prescriptions.length === 0) {

            console.log("No prescriptions found.");

            return;
        }


        // -----------------------------------------------------
        // Create rows
        // -----------------------------------------------------
        $.each(prescriptions, function (index, medicine) {

            let row = `
                <div class="medicine-row row g-2 mb-2">

                    <div class="col-md-3">
                        <input
                            type="text"
                            name="medicine_name[]"
                            class="form-control medicine-name"
                            placeholder="Medicine Name"
                            value="${escapeHtml(medicine.medicine_name || '')}">
                    </div>

                    <div class="col-md-2">
                        <input
                            type="text"
                            name="dosage[]"
                            class="form-control"
                            placeholder="Dosage"
                            value="${escapeHtml(medicine.dosage || '')}">
                    </div>

                    <div class="col-md-2">
                        <input
                            type="text"
                            name="prescribed_qty[]"
                            class="form-control"
                            placeholder="Prescribed Qty"
                            value="${escapeHtml(medicine.prescribed_qty || '')}">
                    </div>

                    <div class="col-md-2">
                        <input
                            type="text"
                            name="frequency[]"
                            class="form-control"
                            placeholder="Frequency"
                            value="${escapeHtml(medicine.frequency || '')}">
                    </div>

                    <div class="col-md-2">
                        <input
                            type="text"
                            name="duration[]"
                            class="form-control"
                            placeholder="Duration"
                            value="${escapeHtml(medicine.duration || '')}">
                    </div>

                    <div class="col-md-1">
                        <input
                            type="text"
                            name="timing[]"
                            class="form-control"
                            placeholder="Timing"
                            value="${escapeHtml(medicine.timing || '')}">
                    </div>

                    <div class="col-12 text-end mt-1">
                        <button
                            type="button"
                            class="btn btn-sm btn-danger remove-medicine">
                            <i class="bi bi-trash"></i>
                        </button>
                    </div>

                </div>
            `;

            container.append(row);

        });


        console.log(
            "Prescription rows loaded:",
            prescriptions.length
        );
    }


    // =====================================================
    // HTML ESCAPE
    // =====================================================
    function escapeHtml(value) {

        return String(value)
            .replace(/&/g, "&amp;")
            .replace(/</g, "&lt;")
            .replace(/>/g, "&gt;")
            .replace(/"/g, "&quot;")
            .replace(/'/g, "&#039;");
    }


    // =====================================================
    // SAVE / UPDATE OPD
    // =====================================================
    $("#consultationForm").off("submit.opd").on(
        "submit.opd",
        function (e) {

            e.preventDefault();

            let form = this;

            let opdId = $("#opd_id").val();

            console.log("==============================");
            console.log("OPD FORM SUBMIT");
            console.log("OPD ID:", opdId);
            console.log("==============================");


            // -------------------------------------------------
            // Patient validation
            // -------------------------------------------------
            let patientId =
                $("#selectedPatientId").val() ||
                $("input[name='patient_id']").val();

            if (!patientId) {

                alert("Please select a patient.");
                return;
            }


            // -------------------------------------------------
            // Form Data
            // -------------------------------------------------
            let formData = new FormData(form);


            // Make sure patient ID is included
            formData.set(
                "patient_id",
                patientId
            );


            // Doctor ID
            let doctorId = $("#doctor_id").val();

            if (doctorId) {

                formData.set(
                    "doctor_id",
                    doctorId
                );
            }


            // -------------------------------------------------
            // Decide URL
            // -------------------------------------------------
            let saveUrl = "";

            if (opdId) {

                saveUrl = updateOPDUrl;

                console.log(
                    "MODE: UPDATE"
                );

            } else {

                saveUrl = saveOPDUrl;

                console.log(
                    "MODE: NEW SAVE"
                );
            }


            console.log(
                "SAVE URL:",
                saveUrl
            );


            // -------------------------------------------------
            // AJAX
            // -------------------------------------------------
            $.ajax({

                url: saveUrl,

                type: "POST",

                data: formData,

                processData: false,

                contentType: false,

                dataType: "json",

                beforeSend: function () {

                    $("#saveConsultationBtn")
                        .prop("disabled", true)
                        .text("Saving...");

                },

                success: function (response) {

                    console.log(
                        "SAVE RESPONSE:",
                        response
                    );


                    if (response.status === true) {

                        alert(
                            response.message ||
                            "OPD Consultation saved successfully."
                        );


                        // Close modal
                        let modalElement =
                            document.getElementById(
                                "consultationModal"
                            );

                        if (modalElement) {

                            let modal =
                                bootstrap.Modal
                                    .getOrCreateInstance(
                                        modalElement
                                    );

                            modal.hide();
                        }


                        // Reload page
                        setTimeout(function () {
                            location.reload();
                        }, 500);


                    } else {

                        alert(
                            response.message ||
                            "Unable to save OPD consultation."
                        );
                    }

                },

                error: function (xhr, status, error) {

                    console.error(
                        "SAVE/UPDATE ERROR"
                    );

                    console.error(
                        "HTTP STATUS:",
                        xhr.status
                    );

                    console.error(
                        "STATUS:",
                        status
                    );

                    console.error(
                        "ERROR:",
                        error
                    );

                    console.error(
                        "RESPONSE:",
                        xhr.responseText
                    );

                    alert(
                        "Unable to save OPD consultation. Check Console."
                    );

                },

                complete: function () {

                    $("#saveConsultationBtn")
                        .prop("disabled", false)
                        .text(
                            opdId
                                ? "Update Consultation"
                                : "Save Consultation"
                        );

                }

            });

        }
    );


    // =====================================================
    // NEW OPD BUTTON
    // =====================================================
    $(document).on(
        "click",
        '[data-bs-target="#consultationModal"]',
        function () {

            // Don't reset when clicking View/Edit
            if (
                $(this).hasClass("viewConsultationBtn") ||
                $(this).hasClass("editConsultationBtn")
            ) {
                return;
            }


            console.log("NEW OPD CONSULTATION");


            // Reset form
            $("#consultationForm")[0].reset();


            // Clear OPD ID
            $("#opd_id").val("");


            // Clear patient ID
            $("#selectedPatientId").val("");

            $("input[name='patient_id']").val("");


            // Clear patient search
            $("#patientSearch").val("");


            // Title
            $("#consultationModalLabel").text(
                "New OPD Consultation"
            );


            // Show save button
            $("#saveConsultationBtn")
                .show()
                .prop("disabled", false)
                .text("Save Consultation");


            // Enable fields
            $("#consultationForm")
                .find("input, select, textarea")
                .prop("disabled", false);


            // Clear medicine rows
            $("#medicineContainer")
                .find(".medicine-row")
                .remove();


            // Show add medicine
            $("#addMedicineBtn").show();

        }
    );


    // =====================================================
    // REMOVE MEDICINE
    // =====================================================
    $(document).on(
        "click",
        ".remove-medicine",
        function () {

            $(this)
                .closest(".medicine-row")
                .remove();

        }
    );

});
</script>
<script>
$(document).ready(function () {

    function filterConsultations() {

        let searchValue = $('#consultationSearch').val()
            .toLowerCase()
            .trim();

        let statusValue = $('#consultationStatus').val()
            .toLowerCase()
            .trim();

        let visibleRows = 0;

        $('#consultationTableBody tr').each(function () {

            let row = $(this);

            // No-data row skip
            if (!row.attr('data-search')) {
                return;
            }

            let searchData = (row.attr('data-search') || '').toLowerCase();
            let rowStatus = (row.attr('data-status') || '').toLowerCase();

            let searchMatch = searchValue === '' ||
                              searchData.includes(searchValue);

            let statusMatch = statusValue === '' ||
                              rowStatus === statusValue;

            if (searchMatch && statusMatch) {
                row.show();
                visibleRows++;
            } else {
                row.hide();
            }
        });

        // No result message
        $('#noConsultationResult').remove();

        if (visibleRows === 0) {
            $('#consultationTableBody').append(`
                <tr id="noConsultationResult">
                    <td colspan="7" class="text-center text-muted py-4">
                        No consultations found.
                    </td>
                </tr>
            `);
        }
    }

    // Search
    $('#consultationSearch').on('keyup input', function () {
        filterConsultations();
    });

    // Status filter
    $('#consultationStatus').on('change', function () {
        filterConsultations();
    });

});
</script>
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
          <input type="hidden" name="doctor_id" id="doctor_id">
           <input type="hidden" name="opd_id" id="opd_id">
   
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
                <input type="text" class="form-control"id="bp_count"  name="bp_count" placeholder="120/80">
              </div>
            </div>
            <div class="col-6 col-md-2">
              <div class="vital-box">
                <label class="form-label"> Pulse </label>
                <input type="number" class="form-control" id="pulse_count" name="pulse_count" placeholder="72">
              </div>
            </div>
            <div class="col-6 col-md-2">
              <div class="vital-box">
                <label class="form-label"> Temperature </label>
                <input type="text" class="form-control"id="temperature" name="temperature" placeholder="98.6">
              </div>
            </div>
            <div class="col-6 col-md-2">
              <div class="vital-box">
                <label class="form-label"> SpO₂ </label> 
                <input type="number" class="form-control" id="spo2" name="spo2" placeholder="98">
              </div>
            </div>
            <div class="col-6 col-md-2">
              <div class="vital-box">
                <label class="form-label"> Weight </label>
                <input type="number" class="form-control" id="weight" name="weight" placeholder="60">
              </div>
            </div>
            <div class="col-6 col-md-2">
              <div class="vital-box">
                <label class="form-label"> Sugar </label>
                <input type="text" class="form-control" id="sugar"   name="sugar" placeholder="110">
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
              <textarea class="form-control"       id="symptoms" name="symptoms" placeholder="Enter patient's symptoms and complaints"></textarea>
            </div>
            <div class="col-md-6">
              <label class="form-label"> Diagnosis </label>
              <textarea class="form-control"     id="diagnosis" name="diagnosis" placeholder="Enter diagnosis"></textarea>
            </div>
            <div class="col-md-6">
              <label class="form-label"> Treatment Advice </label>
              <textarea class="form-control" id="treatment_advice" name="treatment_advice" placeholder="Enter treatment advice"></textarea>
            </div>
            <div class="col-md-6">
              <label class="form-label"> Doctor Notes </label>
              <textarea class="form-control"   id="doctor_notes" name="doctor_notes" placeholder="Additional consultation notes"></textarea>
            </div>
            <div class="col-md-4">
              <label class="form-label"> Follow-up Date </label>
              <input type="date" class="form-control"   id="followup_date" name="followup_date">
            </div>
            <div class="col-md-4">
              <label class="form-label"> Consultation Fee </label>
              <div class="input-group">
                <span class="input-group-text"> ₹ </span>
                <input type="number" class="form-control"  id="consultation_fee" name="consultation_fee" value="500">
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
            <!-- <div class="col-lg-4"> -->
                <div class="col-6 col-lg-2">
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

                    <!-- Prescribed Qty -->
            <div class="col-6 col-lg-2">
                <label class="form-label">
                  Prescribed Qty
                </label>

                <input type="text"
                       class="form-control"
                       name="prescribed_qty[]"
                       placeholder=" Prescribed Qty">
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
              <textarea class="form-control"  id="prescription_instructions" name="prescription_instructions" rows="2" placeholder="General medicine instructions for patient"></textarea>
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
              <select class="form-select" id="reminder_type" name="reminder_type">
                <option> No Reminder </option>
                <option> Follow-up Reminder </option>
                <option> Medicine Completion Reminder </option>
              </select>
            </div>
            <div class="col-md-4">
              <label class="form-label"> Reminder Date </label>
              <input type="date" class="form-control" id="reminder_date"  name="reminder_date">
            </div>
            <div class="col-md-4">
              <label class="form-label"> Notification </label>
              <select class="form-select"  id="notification" name="notification">
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
          <button type="submit" class="btn btn-primary" id="saveConsultationBtn">
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

                       <div class="col-6 col-lg-2">

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
                            placeholder="500mg"
                        >

                    </div>
                                
                                  <!-- Prescribed Qty -->
            <div class="col-6 col-lg-2">
                <label class="form-label">
                  Prescribed Qty
                </label>

                <input type="text"
                       class="form-control"
                       name="prescribed_qty[]"
                       placeholder="  Prescribed Qty">
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

                    <div class="col-lg-2">

                        <label class="form-label">
                            Duration
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            name="duration[]"
                            placeholder=" 5 Days"
                        >

                    </div>


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


                 <div class="col-lg-1">
                <button type="button"
                        class="btn btn-outline-danger remove-medicine w-100"
                        title="Remove medicine">

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

    // Patient select validation
    if ($("#selectedPatientId").val() === "") {

        alert("Please select a patient.");
        return;

    }

    var formData = new FormData(form);

    var doctorId = $("#doctor_id").val();

    console.log("Doctor ID sent by AJAX:", doctorId);

    formData.append("doctor_id", doctorId);

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

                // Close modal
                var modalElement =
                    document.getElementById("consultationModal");

                var modal =
                    bootstrap.Modal.getInstance(modalElement);

                if (!modal) {
                    modal = new bootstrap.Modal(modalElement);
                }

                modal.hide();

                // Reset form
                form.reset();

                // Clear patient data
                $("#selectedPatientId").val("");
                $("#patientSearch").val("");
                $("#selectedPatientSummary").hide();

                // NO SUCCESS POPUP
                // alert(response.message);

            } else {

                // Only show error message if save failed
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