<?php include('header.php'); ?>
<!-- =================================================
         CONTENT
    ================================================== -->
<main class="content">
  <!-- =========================================================
     MANAGE PATIENTS
     Paste ONLY inside your existing dashboard content area
========================================================= -->
  <style>
    /* =========================
           STAT CARDS
        ========================== */
    .patient-stat {
      background: #fff;
      border: 1px solid var(--border);
      border-radius: 14px;
      padding: 17px;
      height: 100%;
    }

    .stat-icon {
      width: 40px;
      height: 40px;
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 18px;
      margin-bottom: 11px;
    }

    .stat-blue {
      background: #eff6ff;
      color: var(--primary);
    }

    .stat-green {
      background: #ecfdf5;
      color: var(--success);
    }

    .stat-orange {
      background: #fff7ed;
      color: var(--warning);
    }

    .stat-red {
      background: #fef2f2;
      color: var(--danger);
    }

    .stat-number {
      font-size: 22px;
      font-weight: 800;
      color: var(--dark);
    }

    .stat-label {
      font-size: 11px;
      color: var(--muted);
      margin-top: 2px;
    }

    /* =========================
           FILTER CARD
        ========================== */
    .filter-card {
      background: #fff;
      border: 1px solid var(--border);
      border-radius: 14px;
      padding: 17px;
      margin-top: 22px;
      margin-bottom: 18px;
    }

    .form-label {
      font-size: 11px;
      font-weight: 700;
      color: #475569;
      margin-bottom: 6px;
    }

    .form-control,
    .form-select {
      border-color: var(--border);
      border-radius: 8px;
      min-height: 40px;
      font-size: 12px;
      box-shadow: none !important;
    }

    .form-control:focus,
    .form-select:focus {
      border-color: #93c5fd;
    }

    .search-wrapper {
      position: relative;
    }

    .search-wrapper i {
      position: absolute;
      left: 12px;
      top: 12px;
      color: #94a3b8;
    }

    .search-wrapper input {
      padding-left: 35px;
    }

    /* =========================
           PATIENT TABLE
        ========================== */
    .table-card {
      background: #fff;
      border: 1px solid var(--border);
      border-radius: 14px;
      overflow: hidden;
    }

    .table-header {
      padding: 17px 19px;
      border-bottom: 1px solid var(--border);
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .table-header h3 {
      font-size: 14px;
      color: var(--dark);
      font-weight: 800;
      margin: 0;
    }

    .table-header span {
      font-size: 11px;
      color: var(--muted);
    }

    .table-responsive {
      overflow-x: auto;
    }

    .patient-table {
      margin: 0;
      min-width: 950px;
    }

    .patient-table th {
      background: #f8fafc;
      border-bottom: 1px solid var(--border);
      padding: 12px 15px;
      font-size: 10px;
      text-transform: uppercase;
      letter-spacing: .4px;
      color: #64748b;
      font-weight: 800;
      white-space: nowrap;
    }

    .patient-table td {
      padding: 13px 15px;
      border-bottom: 1px solid #f1f5f9;
      vertical-align: middle;
      font-size: 12px;
      color: #475569;
    }

    .patient-table tbody tr:hover {
      background: #fbfdff;
    }

    .patient-info {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .patient-avatar {
      width: 38px;
      height: 38px;
      border-radius: 10px;
      object-fit: cover;
      background: #eff6ff;
      color: var(--primary);
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 800;
    }

    .patient-name {
      color: var(--dark);
      font-size: 12px;
      font-weight: 800;
    }

    .patient-id {
      font-size: 10px;
      color: #94a3b8;
      margin-top: 2px;
    }

    .status-badge {
      display: inline-flex;
      align-items: center;
      padding: 5px 8px;
      border-radius: 20px;
      font-size: 9px;
      font-weight: 800;
    }

    .status-active {
      background: #ecfdf5;
      color: #15803d;
    }

    .status-pending {
      background: #fff7ed;
      color: #c2410c;
    }

    .status-normal {
      background: #eff6ff;
      color: #1d4ed8;
    }

    .action-btn {
      width: 30px;
      height: 30px;
      border-radius: 7px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      border: 1px solid var(--border);
      background: #fff;
      color: #64748b;
      margin-right: 3px;
      transition: .2s;
    }

    .action-btn:hover {
      color: var(--primary);
      border-color: #bfdbfe;
      background: #eff6ff;
    }

    .action-btn.delete:hover {
      color: var(--danger);
      border-color: #fecaca;
      background: #fef2f2;
    }

    /* =========================
           PAGINATION
        ========================== */
    .table-footer {
      padding: 14px 18px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .table-footer-text {
      font-size: 11px;
      color: var(--muted);
    }

    .pagination .page-link {
      border: 0;
      font-size: 11px;
      color: #64748b;
      border-radius: 7px;
      margin: 0 2px;
    }

    .pagination .active .page-link {
      background: var(--primary);
      color: #fff;
    }

    /* =========================
           MODAL
        ========================== */
    .modal-content {
      border: 0;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 25px 60px rgba(15, 23, 42, 0.18);
    }

    .modal-header {
      padding: 18px 22px;
      border-bottom: 1px solid var(--border);
      background: #fff;
    }

    .modal-title {
      font-size: 16px;
      font-weight: 800;
      color: var(--dark);
    }

    .modal-subtitle {
      font-size: 10px;
      color: var(--muted);
      margin-top: 3px;
    }

    .modal-body {
      padding: 22px;
      background: #fbfdff;
    }

    .modal-footer {
      padding: 15px 22px;
      border-top: 1px solid var(--border);
      background: #fff;
    }

    .section-box {
      background: #fff;
      border: 1px solid var(--border);
      border-radius: 11px;
      padding: 16px;
      margin-bottom: 15px;
    }

    .section-box-title {
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 12px;
      font-weight: 800;
      color: var(--dark);
      margin-bottom: 15px;
    }

    .section-box-title i {
      color: var(--primary);
    }

    .photo-upload {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .photo-preview {
      width: 70px;
      height: 70px;
      border-radius: 12px;
      background: #eff6ff;
      color: var(--primary);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 28px;
      border: 1px dashed #93c5fd;
      overflow: hidden;
    }

    .photo-preview img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .upload-info {
      flex: 1;
    }

    .upload-info p {
      font-size: 10px;
      color: var(--muted);
      margin: 5px 0 0;
    }

    .required {
      color: #dc2626;
    }

    textarea.form-control {
      min-height: 75px;
      resize: vertical;
    }

    .radio-group {
      display: flex;
      gap: 7px;
      flex-wrap: wrap;
    }

    .radio-option {
      position: relative;
    }

    .radio-option input {
      position: absolute;
      opacity: 0;
    }

    .radio-option label {
      display: block;
      padding: 7px 11px;
      border: 1px solid var(--border);
      border-radius: 7px;
      font-size: 10px;
      color: #64748b;
      cursor: pointer;
      background: #fff;
    }

    .radio-option input:checked+label {
      background: #eff6ff;
      border-color: #93c5fd;
      color: var(--primary);
      font-weight: 700;
    }

    /* =========================
           OVERLAY
        ========================== */
    .sidebar-overlay {
      display: none;
      position: fixed;
      inset: 0;
      background: rgba(15, 23, 42, .45);
      z-index: 1040;
    }

    /* =========================
           RESPONSIVE
        ========================== */
    @media (max-width: 991.98px) {
      .sidebar {
        transform: translateX(-100%);
      }

      .sidebar.show {
        transform: translateX(0);
      }

      .sidebar-overlay.show {
        display: block;
      }

      .main-content {
        margin-left: 0;
        width: 100%;
      }

      .mobile-menu-btn {
        display: block;
      }

      .topbar {
        padding: 0 17px;
      }

      .content-area {
        padding: 18px;
      }
    }

    @media (max-width: 767.98px) {
      .topbar {
        height: 64px;
      }

      .page-heading h1 {
        font-size: 17px;
      }

      .page-heading p {
        display: none;
      }

      .doctor-name,
      .doctor-role {
        display: none;
      }

      .page-actions {
        align-items: flex-start;
        flex-direction: column;
      }

      .page-actions .btn {
        width: 100%;
      }

      .table-footer {
        align-items: flex-start;
        flex-direction: column;
        gap: 12px;
      }

      .modal-dialog {
        margin: 8px;
      }

      .modal-body {
        padding: 15px;
      }

      .modal-header {
        padding: 15px;
      }

      .modal-footer {
        padding: 12px 15px;
      }
    }

    @media (max-width: 575.98px) {
      .content-area {
        padding: 14px;
      }

      .topbar-right {
        gap: 7px;
      }

      .notification {
        width: 34px;
        height: 34px;
      }

      .doctor-avatar {
        width: 34px;
        height: 34px;
      }

      .patient-stat {
        padding: 14px;
      }

      .stat-number {
        font-size: 20px;
      }

      .filter-card {
        padding: 13px;
      }
    }
  </style>
  <div class="patients-page">
    <!-- ================= PAGE HEADER ================= -->
    <div class="page-header d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
      <div>
        <div class="page-title"> Manage Patients </div>
        <div class="page-subtitle"> Manage patient registration and medical records </div>
      </div>
      <button type="button" class="btn btn-primary px-3" data-bs-toggle="modal" data-bs-target="#addPatientModal">
        <i class="bi bi-person-plus-fill me-1"></i> Add Patient </button>
    </div>
    <!-- ================= PATIENT TABLE CARD ================= -->
    <div class="patients-card">
      <!-- STATISTICS -->
      <div class="row g-3">
        <div class="col-6 col-xl-3">
          <div class="patient-stat">
            <div class="stat-icon stat-blue">
              <i class="bi bi-people-fill"></i>
            </div>
            <div class="stat-number"> 2,486 </div>
            <div class="stat-label"> Total Patients </div>
          </div>
        </div>
        <div class="col-6 col-xl-3">
          <div class="patient-stat">
            <div class="stat-icon stat-green">
              <i class="bi bi-person-check-fill"></i>
            </div>
            <div class="stat-number"> 48 </div>
            <div class="stat-label"> Today's Patients </div>
          </div>
        </div>
        <div class="col-6 col-xl-3">
          <div class="patient-stat">
            <div class="stat-icon stat-orange">
              <i class="bi bi-calendar2-check-fill"></i>
            </div>
            <div class="stat-number"> 17 </div>
            <div class="stat-label"> Follow-Up Patients </div>
          </div>
        </div>
        <div class="col-6 col-xl-3">
          <div class="patient-stat">
            <div class="stat-icon stat-red">
              <i class="bi bi-heart-pulse-fill"></i>
            </div>
            <div class="stat-number"> 326 </div>
            <div class="stat-label"> Chronic Patients </div>
          </div>
        </div>
      </div>
      <!-- FILTER -->
      <div class="filter-card">
        <div class="row g-3 align-items-end">
          <div class="col-lg-5">
            <label class="form-label"> Search Patient </label>
            <div class="search-wrapper">
              <i class="bi bi-search"></i>
              <input type="text" class="form-control" id="patientSearch" placeholder="Search by patient name, mobile or patient ID...">
            </div>
          </div>
          <div class="col-sm-4 col-lg-2">
            <label class="form-label"> Gender </label>
            <select class="form-select">
              <option value="">All Gender</option>
              <option>Male</option>
              <option>Female</option>
              <option>Other</option>
            </select>
          </div>
          <div class="col-sm-4 col-lg-2">
            <label class="form-label"> Medical Status </label>
            <select class="form-select">
              <option value="">All Status</option>
              <option>BP</option>
              <option>Sugar</option>
              <option>Normal</option>
            </select>
          </div>
          <div class="col-sm-4 col-lg-3">
            <button class="btn btn-light border w-100" style="
                                height:40px;
                                font-size:12px;
                                font-weight:700;
                                border-radius:8px;
                            ">
              <i class="bi bi-funnel me-1"></i> Apply Filters </button>
          </div>
        </div>
      </div>
      <!-- PATIENT TABLE -->
      <div class="table-card">
        <div class="table-header">
          <div>
            <h3>Patient Records</h3>
            <span>Recently registered and active patients</span>
          </div>
          <button class="btn btn-sm btn-light border" style="font-size:11px;">
            <i class="bi bi-download me-1"></i> Export </button>
        </div>
        <div class="table-responsive">
          <table class="table patient-table">
            <thead>
              <tr>
                <th>Patient</th>
                <th>Gender / Age</th>
                <th>Mobile</th>
                <th>Medical Status</th>
                <th>Last Visit</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="patientTableBody">
              <!-- PATIENT 1 -->
              <?php foreach($patients as $patient){ ?>
              <tr>
                <td>
                  <div class="patient-info">
                    <!-- <div class="patient-avatar"> AS </div> -->
                    <div>
                      <div class="patient-name"> <?=$patient->first_name.' '.$patient->last_name;?> </div>
                      <div class="patient-id"> <?=$patient->patient_code;?> </div>
                    </div>
                  </div>
                </td>
                <td> <?=$patient->gender;?> / <?=$patient->age;?> </td>
                <td> <?=$patient->mobile;?> </td>
                <td>
                  <span class="status-badge status-pending">
                    <i class="bi bi-heart-pulse me-1"></i> BP Patient </span>
                </td>
                <td> <?php $date = DateTime::createFromFormat('Y-m-d H:i:s', $patient->patient_created); echo $formattedDate = $date->format('j M Y');?> </td>
                <td>
                  <span class="status-badge status-active"> Active </span>
                </td>
                <td>
                  <button class="action-btn" title="View">
                    <i class="bi bi-eye"></i>
                  </button>
                  <button class="action-btn" title="Edit">
                    <i class="bi bi-pencil"></i>
                  </button>
                  <button class="action-btn delete" title="Delete">
                    <i class="bi bi-trash3"></i>
                  </button>
                </td>
              </tr>
              <?php } ?>
              <!-- PATIENT 2 -->
              <!-- <tr>
                <td>
                  <div class="patient-info">
                    <div class="patient-avatar"> PN </div>
                    <div>
                      <div class="patient-name"> Priya Nair </div>
                      <div class="patient-id"> PT-2026-00123 </div>
                    </div>
                  </div>
                </td>
                <td> Female / 35 </td>
                <td> +91 99887 66554 </td>
                <td>
                  <span class="status-badge status-pending">
                    <i class="bi bi-droplet-half me-1"></i> Sugar Patient </span>
                </td>
                <td> 26 Aug 2026 </td>
                <td>
                  <span class="status-badge status-active"> Active </span>
                </td>
                <td>
                  <button class="action-btn">
                    <i class="bi bi-eye"></i>
                  </button>
                  <button class="action-btn">
                    <i class="bi bi-pencil"></i>
                  </button>
                  <button class="action-btn delete">
                    <i class="bi bi-trash3"></i>
                  </button>
                </td>
              </tr> -->
              <!-- PATIENT 3 -->
              <!-- <tr>
                <td>
                  <div class="patient-info">
                    <div class="patient-avatar"> RK </div>
                    <div>
                      <div class="patient-name"> Rahul Kulkarni </div>
                      <div class="patient-id"> PT-2026-00122 </div>
                    </div>
                  </div>
                </td>
                <td> Male / 29 </td>
                <td> +91 91234 56789 </td>
                <td>
                  <span class="status-badge status-normal"> Normal </span>
                </td>
                <td> 25 Aug 2026 </td>
                <td>
                  <span class="status-badge status-active"> Active </span>
                </td>
                <td>
                  <button class="action-btn">
                    <i class="bi bi-eye"></i>
                  </button>
                  <button class="action-btn">
                    <i class="bi bi-pencil"></i>
                  </button>
                  <button class="action-btn delete">
                    <i class="bi bi-trash3"></i>
                  </button>
                </td>
              </tr> -->
              <!-- PATIENT 4 -->
              <!-- <tr>
                <td>
                  <div class="patient-info">
                    <div class="patient-avatar"> SM </div>
                    <div>
                      <div class="patient-name"> Sneha More </div>
                      <div class="patient-id"> PT-2026-00121 </div>
                    </div>
                  </div>
                </td>
                <td> Female / 47 </td>
                <td> +91 97654 32109 </td>
                <td>
                  <span class="status-badge status-pending"> BP + Sugar </span>
                </td>
                <td> 24 Aug 2026 </td>
                <td>
                  <span class="status-badge status-active"> Active </span>
                </td>
                <td>
                  <button class="action-btn">
                    <i class="bi bi-eye"></i>
                  </button>
                  <button class="action-btn">
                    <i class="bi bi-pencil"></i>
                  </button>
                  <button class="action-btn delete">
                    <i class="bi bi-trash3"></i>
                  </button>
                </td>
              </tr> -->
            </tbody>
          </table>
        </div>
        <!-- TABLE FOOTER -->
        <div class="table-footer">
          <div class="table-footer-text"> Showing 1 to 4 of 2,486 patients </div>
          <nav>
            <ul class="pagination mb-0">
              <li class="page-item disabled">
                <a class="page-link" href="#">
                  <i class="bi bi-chevron-left"></i>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">
                  <i class="bi bi-chevron-right"></i>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- =========================================================
     ADD PATIENT POPUP
========================================================= -->
  <div class="modal fade" id="addPatientModal" tabindex="-1" aria-labelledby="addPatientModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
      <div class="modal-content">
        <!-- ================= MODAL HEADER ================= -->
        <div class="modal-header bg-primary text-white">
          <div>
            <h5 class="modal-title fw-bold" id="addPatientModalLabel">
              <i class="bi bi-person-plus-fill me-2"></i> Add New Patient
            </h5>
            <small class="opacity-75"> Register a new patient </small>
          </div>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <!-- ================= FORM ================= -->
        <form id="addPatientForm" method="post">
          <div class="modal-body" style="max-height: 60vh; overflow-y: auto;">
            <!-- ================= BASIC INFORMATION ================= -->
            <div class="section-title">
              <i class="bi bi-person-vcard me-2"></i> Basic Patient Information
            </div>
            <div class="row g-3">
              <div class="col-md-3">
                <label class="form-label"> Patient ID </label>
                <input type="text" class="form-control" value="Auto Generated" readonly>
              </div>
              <div class="col-md-3">
                <label class="form-label"> First Name <span class="text-danger">*</span>
                </label>
                <input type="text" name="first_name" class="form-control" placeholder="First name" required>
              </div>
              <div class="col-md-3">
                <label class="form-label"> Middle Name </label>
                <input type="text" name="middle_name" class="form-control" placeholder="Middle name">
              </div>
              <div class="col-md-3">
                <label class="form-label"> Last Name <span class="text-danger">*</span>
                </label>
                <input type="text" name="last_name" class="form-control" placeholder="Last name" required>
              </div>
              <div class="col-md-3">
                <label class="form-label"> Gender <span class="text-danger">*</span>
                </label>
                <select name="gender" class="form-select" required>
                  <option value=""> Select Gender </option>
                  <option value="Male"> Male </option>
                  <option value="Female"> Female </option>
                  <option value="Other"> Other </option>
                </select>
              </div>
              <div class="col-md-3">
                <label class="form-label"> Date of Birth </label>
                <input type="date" name="dob" class="form-control">
              </div>
              <div class="col-md-2">
                <label class="form-label"> Age </label>
                <input type="number" name="age" class="form-control" placeholder="Age" min="0" max="120">
              </div>
              <div class="col-md-4">
                <label class="form-label"> Mobile Number <span class="text-danger">*</span>
                </label>
                <input type="tel" name="mobile" class="form-control" placeholder="10 digit mobile number" maxlength="10" pattern="[0-9]{10}" required>
              </div>
            </div>
            <!-- ================= CONTACT ================= -->
            <div class="section-title mt-4">
              <i class="bi bi-geo-alt me-2"></i> Contact Information
            </div>
            <div class="row g-3">
              <div class="col-md-4">
                <label class="form-label"> Email Address </label>
                <input type="email" name="email" class="form-control" placeholder="patient@example.com">
              </div>
              <div class="col-md-8">
                <label class="form-label"> Address </label>
                <input type="text" name="address" class="form-control" placeholder="Complete address">
              </div>
              <div class="col-md-4">
                <label class="form-label"> City </label>
                <input type="text" name="city" class="form-control" placeholder="City">
              </div>
              <div class="col-md-4">
                <label class="form-label"> State </label>
                <select name="state" class="form-select">
                  <option value=""> Select State </option>
                  <option>Maharashtra</option>
                  <option>Gujarat</option>
                  <option>Karnataka</option>
                  <option>Madhya Pradesh</option>
                  <option>Goa</option>
                  <option>Delhi</option>
                </select>
              </div>
              <div class="col-md-4">
                <label class="form-label"> PIN Code </label>
                <input type="text" name="pincode" class="form-control" placeholder="6 digit PIN" maxlength="6" pattern="[0-9]{6}">
              </div>
            </div>
            <!-- ================= MEDICAL ================= -->
            <div class="section-title mt-4">
              <i class="bi bi-heart-pulse me-2"></i> Medical Information
            </div>
            <div class="row g-3">
              <div class="col-md-3">
                <label class="form-label"> Blood Group </label>
                <select name="blood_group" class="form-select">
                  <option value=""> Select Blood Group </option>
                  <option>A+</option>
                  <option>A-</option>
                  <option>B+</option>
                  <option>B-</option>
                  <option>AB+</option>
                  <option>AB-</option>
                  <option>O+</option>
                  <option>O-</option>
                </select>
              </div>
              <div class="col-md-3">
                <label class="form-label"> BP Status </label>
                <select name="bp_status" class="form-select">
                  <option value="Normal"> Normal </option>
                  <option value="High BP"> High BP </option>
                  <option value="Low BP"> Low BP </option>
                  <option value="Under Treatment"> Under Treatment </option>
                </select>
              </div>
              <div class="col-md-3">
                <label class="form-label"> Sugar Status </label>
                <select name="sugar_status" class="form-select">
                  <option value="Normal"> Normal </option>
                  <option value="Diabetic"> Diabetic </option>
                  <option value="Pre-Diabetic"> Pre-Diabetic </option>
                  <option value="Under Treatment"> Under Treatment </option>
                </select>
              </div>
              <div class="col-md-3">
                <label class="form-label"> Allergies </label>
                <input type="text" name="allergies" class="form-control" placeholder="Known allergies">
              </div>
              <div class="col-12">
                <label class="form-label"> Medical History </label>
                <textarea name="medical_history" class="form-control" rows="3" placeholder="Previous diseases, surgeries, treatments, etc."></textarea>
              </div>
              <div class="col-12">
                <label class="form-label"> Previous Treatment / Notes </label>
                <textarea name="previous_treatment" class="form-control" rows="3" placeholder="Previous treatment details"></textarea>
              </div>
            </div>
            <!-- ================= EMERGENCY ================= -->
            <div class="section-title mt-4">
              <i class="bi bi-telephone-forward me-2"></i> Emergency Contact
            </div>
            <div class="row g-3">
              <div class="col-md-4">
                <label class="form-label"> Contact Person </label>
                <input type="text" name="emergency_contact_name" class="form-control" placeholder="Contact name">
              </div>
              <div class="col-md-4">
                <label class="form-label"> Relationship </label>
                <input type="text" name="emergency_relationship" class="form-control" placeholder="Father / Mother / Spouse">
              </div>
              <div class="col-md-4">
                <label class="form-label"> Emergency Mobile </label>
                <input type="tel" name="emergency_mobile" class="form-control" placeholder="10 digit mobile" maxlength="10" pattern="[0-9]{10}">
              </div>
            </div>
            <!-- ================= NOTES ================= -->
            <div class="section-title mt-4">
              <i class="bi bi-journal-text me-2"></i> Additional Notes
            </div>
            <textarea name="notes" class="form-control" rows="3" placeholder="Additional patient notes"></textarea>
            <!-- ================= CONFIRMATION ================= -->
            <div class="form-check mt-4">
              <input class="form-check-input" type="checkbox" id="patientConfirmation" required>
              <label class="form-check-label small" for="patientConfirmation"> I confirm that the patient information entered is correct. </label>
            </div>
          </div>
          <!-- ================= FOOTER ================= -->
          <div class="modal-footer bg-light">
            <button type="button" class="btn btn-light border" data-bs-dismiss="modal">
              <i class="bi bi-x-circle me-1"></i> Cancel </button>
            <button type="reset" class="btn btn-outline-secondary">
              <i class="bi bi-arrow-counterclockwise me-1"></i> Reset </button>
            <button type="submit" class="btn btn-primary">
              <i class="bi bi-check-circle me-1"></i> Save Patient </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- =========================================================
     PATIENT SEARCH + FILTER
========================================================= -->
  <script>
    const searchInput = document.getElementById("patientSearch");
    const tableBody = document.getElementById("patientTableBody");
    searchInput.addEventListener("keyup", function() {
      const searchValue = this.value.toLowerCase().trim();
      const rows = tableBody.querySelectorAll("tr");
      rows.forEach(function(row) {
        const rowText = row.innerText.toLowerCase();
        if (rowText.includes(searchValue)) {
          row.style.display = "";
        } else {
          row.style.display = "none";
        }
      });
    });
  </script>
</main>
</div>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
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
<script>$("#addPatientForm").on("submit", function(e) {

    e.preventDefault();

    let form = this;

    $.ajax({
        url: "<?= base_url('patients/addPatient') ?>",
        type: "POST",
        data: $(form).serialize(),
        dataType: "json",

        success: function(response) {

            if (response.status) {

                // New patient information browser मध्ये temporarily store
                sessionStorage.setItem(
                    "newPatient",
                    JSON.stringify(response.patient)
                );

                // OPD page वर redirect
                window.location.href =
                    "<?= base_url('opd') ?>";

            } else {

                alert(response.message || "Patient save failed");

            }
        },

        error: function(xhr) {

            console.log(xhr.responseText);

            alert("Something went wrong while saving patient.");
        }
    });

});
</script>
</body>
</html>