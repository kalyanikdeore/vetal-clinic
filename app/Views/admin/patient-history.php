
<?php include('header.php'); ?>

<!-- =========================================================
     VETAL CLINIC OPD
     PATIENT HISTORY PAGE
     CONTENT AREA ONLY
     ========================================================= -->
<main class="content">

<div class="patient-history-page">

    <!-- PAGE HEADER -->
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4">

        <div>
            <h4 class="mb-1 fw-bold">
                Patient History
            </h4>

            <p class="text-muted mb-0">
                View complete OPD consultation, diagnosis, prescription and billing history.
            </p>
        </div>

        <div class="d-flex gap-2">

            <button type="button"
                    class="btn btn-outline-secondary"
                    id="printHistoryBtn">
                <i class="bi bi-printer me-1"></i>
                Print
            </button>

            <button type="button"
                    class="btn btn-primary"
                    id="exportHistoryBtn">
                <i class="bi bi-download me-1"></i>
                Export
            </button>

        </div>

    </div>


    <!-- =====================================================
         PATIENT SEARCH / FILTER PANEL
         ===================================================== -->

    <div class="card history-filter-card border-0 shadow-sm mb-4">

        <div class="card-body p-3 p-lg-4">

            <div class="filter-heading mb-3">

                <div class="filter-title">
                    <span class="filter-icon">
                        <i class="bi bi-funnel"></i>
                    </span>

                    <div>
                        <h6 class="mb-1 fw-bold">
                            Search & Filter Patient History
                        </h6>

                        <small class="text-muted">
                            Filter consultation records by patient, doctor, diagnosis and visit date.
                        </small>
                    </div>
                </div>

            </div>


            <form id="patientHistoryFilterForm">

                <div class="row g-3">

                    <!-- Patient Search -->
                    <div class="col-12 col-lg-4">

                        <label class="form-label">
                            Patient Search
                        </label>

                        <div class="input-group">

                            <span class="input-group-text">
                                <i class="bi bi-search"></i>
                            </span>

                            <input type="text"
                                   class="form-control"
                                   id="patientSearch"
                                   placeholder="Name, Patient ID or Mobile Number">

                        </div>

                    </div>


                    <!-- Doctor -->
                    <div class="col-12 col-sm-6 col-lg-2">

                        <label class="form-label">
                            Doctor
                        </label>

                        <select class="form-select"
                                id="doctorFilter">

                            <option value="">
                                All Doctors
                            </option>

                            <option>
                                Dr. Samer Jawalkar
                            </option>

                            <option>
                                Dr. Amit Patil
                            </option>

                        </select>

                    </div>


                    <!-- Diagnosis -->
                    <div class="col-12 col-sm-6 col-lg-2">

                        <label class="form-label">
                            Diagnosis
                        </label>

                        <select class="form-select"
                                id="diagnosisFilter">

                            <option value="">
                                All Diagnosis
                            </option>

                            <option>
                                Fever
                            </option>

                            <option>
                                Diabetes
                            </option>

                            <option>
                                Hypertension
                            </option>

                            <option>
                                Cold & Cough
                            </option>

                            <option>
                                Gastritis
                            </option>

                            <option>
                                Infection
                            </option>

                        </select>

                    </div>


                    <!-- Visit Type -->
                    <div class="col-12 col-sm-6 col-lg-2">

                        <label class="form-label">
                            Visit Type
                        </label>

                        <select class="form-select"
                                id="visitTypeFilter">

                            <option value="">
                                All Visits
                            </option>

                            <option>
                                New Visit
                            </option>

                            <option>
                                Follow-up
                            </option>

                            <option>
                                Emergency
                            </option>

                        </select>

                    </div>


                    <!-- Status -->
                    <div class="col-12 col-sm-6 col-lg-2">

                        <label class="form-label">
                            Status
                        </label>

                        <select class="form-select"
                                id="statusFilter">

                            <option value="">
                                All Status
                            </option>

                            <option>
                                Completed
                            </option>

                            <option>
                                Follow-up Due
                            </option>

                            <option>
                                Pending Payment
                            </option>

                        </select>

                    </div>


                    <!-- From Date -->
                    <div class="col-12 col-sm-6 col-lg-3">

                        <label class="form-label">
                            From Date
                        </label>

                        <div class="input-group">

                            <span class="input-group-text">
                                <i class="bi bi-calendar3"></i>
                            </span>

                            <input type="date"
                                   class="form-control"
                                   id="fromDate">

                        </div>

                    </div>


                    <!-- To Date -->
                    <div class="col-12 col-sm-6 col-lg-3">

                        <label class="form-label">
                            To Date
                        </label>

                        <div class="input-group">

                            <span class="input-group-text">
                                <i class="bi bi-calendar3"></i>
                            </span>

                            <input type="date"
                                   class="form-control"
                                   id="toDate">

                        </div>

                    </div>


                    <!-- Quick Date -->
                    <div class="col-12 col-lg-3">

                        <label class="form-label">
                            Quick Filter
                        </label>

                        <select class="form-select"
                                id="quickDateFilter">

                            <option value="">
                                Select Period
                            </option>

                            <option value="today">
                                Today
                            </option>

                            <option value="7">
                                Last 7 Days
                            </option>

                            <option value="30">
                                Last 30 Days
                            </option>

                            <option value="90">
                                Last 3 Months
                            </option>

                            <option value="365">
                                Last 1 Year
                            </option>

                        </select>

                    </div>


                    <!-- Buttons -->
                    <div class="col-12 col-lg-3 d-flex align-items-end">

                        <div class="filter-buttons w-100">

                            <button type="submit"
                                    class="btn btn-primary">

                                <i class="bi bi-search me-1"></i>
                                Apply Filters

                            </button>

                            <button type="button"
                                    class="btn btn-light border"
                                    id="resetHistoryFilter">

                                <i class="bi bi-arrow-counterclockwise me-1"></i>
                                Reset

                            </button>

                        </div>

                    </div>

                </div>

            </form>

        </div>

    </div>


    <!-- =====================================================
         SUMMARY CARDS
         ===================================================== -->

    <div class="row g-3 mb-4">

        <div class="col-6 col-xl-3">

            <div class="history-stat-card">

                <div class="stat-icon">
                    <i class="bi bi-people"></i>
                </div>

                <div class="stat-content">
                    <span>Total Patients</span>
                    <strong>1,284</strong>
                    <small>
                        <i class="bi bi-arrow-up"></i>
                        8.4% this month
                    </small>
                </div>

            </div>

        </div>


        <div class="col-6 col-xl-3">

            <div class="history-stat-card">

                <div class="stat-icon">
                    <i class="bi bi-calendar-check"></i>
                </div>

                <div class="stat-content">
                    <span>Total Visits</span>
                    <strong>3,642</strong>
                    <small>
                        126 this month
                    </small>
                </div>

            </div>

        </div>


        <div class="col-6 col-xl-3">

            <div class="history-stat-card">

                <div class="stat-icon">
                    <i class="bi bi-prescription2"></i>
                </div>

                <div class="stat-content">
                    <span>Prescriptions</span>
                    <strong>2,918</strong>
                    <small>
                        94 this month
                    </small>
                </div>

            </div>

        </div>


        <div class="col-6 col-xl-3">

            <div class="history-stat-card">

                <div class="stat-icon">
                    <i class="bi bi-clock-history"></i>
                </div>

                <div class="stat-content">
                    <span>Follow-ups Due</span>
                    <strong>38</strong>
                    <small>
                        Requires attention
                    </small>
                </div>

            </div>

        </div>

    </div>


    <!-- =====================================================
         SELECTED PATIENT PROFILE
         ===================================================== -->

    <div class="card selected-patient-card border-0 shadow-sm mb-4">

        <div class="card-body p-3 p-lg-4">

            <div class="row align-items-center g-3">

                <div class="col-12 col-lg-7">

                    <div class="selected-patient">

                        <div class="patient-avatar">
                            RP
                        </div>

                        <div class="patient-details">

                            <div class="d-flex flex-wrap align-items-center gap-2">

                                <h5 class="mb-0">
                                    Rahul Patil
                                </h5>

                                <span class="patient-status">
                                    Active
                                </span>

                            </div>

                            <div class="patient-meta">

                                <span>
                                    <i class="bi bi-person-badge"></i>
                                    P-1025
                                </span>

                                <span>
                                    <i class="bi bi-telephone"></i>
                                    +91 98XXXXXX45
                                </span>

                                <span>
                                    <i class="bi bi-gender-male"></i>
                                    Male
                                </span>

                                <span>
                                    <i class="bi bi-calendar3"></i>
                                    42 Years
                                </span>

                            </div>

                        </div>

                    </div>

                </div>


                <div class="col-12 col-lg-5">

                    <div class="patient-quick-info">

                        <div>
                            <span>First Visit</span>
                            <strong>12 Jan 2025</strong>
                        </div>

                        <div>
                            <span>Last Visit</span>
                            <strong>02 Sep 2026</strong>
                        </div>

                        <div>
                            <span>Total Visits</span>
                            <strong>18</strong>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- =====================================================
         HISTORY TABLE
         ===================================================== -->

    <div class="card history-table-card border-0 shadow-sm">

        <div class="card-header bg-white border-0 p-3 p-lg-4">

            <div class="d-flex flex-wrap align-items-center justify-content-between gap-2">

                <div>

                    <h6 class="mb-1 fw-bold">
                        Consultation History
                    </h6>

                    <small class="text-muted">
                        Showing 18 consultation records
                    </small>

                </div>

                <div class="history-results">
                    1–10 of 18
                </div>

            </div>

        </div>


        <!-- DESKTOP TABLE -->
        <div class="table-responsive history-table-wrapper">

            <table class="table align-middle mb-0 history-table">

                <thead>

                    <tr>

                        <th>Date</th>

                        <th>Patient</th>

                        <th>Doctor</th>

                        <th>Visit Type</th>

                        <th>Diagnosis</th>

                        <th>Prescription</th>

                        <th>Billing</th>

                        <th>Status</th>

                        <th class="text-end">
                            Action
                        </th>

                    </tr>

                </thead>

                <tbody>


                    <!-- RECORD 1 -->
                    <tr>

                        <td>
                            <div class="history-date">
                                <strong>02 Sep 2026</strong>
                                <small>10:35 AM</small>
                            </div>
                        </td>


                        <td>

                            <div class="mini-patient">

                                <div class="mini-avatar">
                                    RP
                                </div>

                                <div>
                                    <strong>Rahul Patil</strong>
                                    <small>P-1025</small>
                                </div>

                            </div>

                        </td>


                        <td>
                            Dr. Samer Jawalkar
                        </td>


                        <td>
                            <span class="visit-badge followup">
                                Follow-up
                            </span>
                        </td>


                        <td>
                            Hypertension
                        </td>


                        <td>

                            <span class="prescription-badge">
                                <i class="bi bi-prescription2"></i>
                                RX-00125
                            </span>

                        </td>


                        <td>
                            <strong>₹650</strong>
                        </td>


                        <td>
                            <span class="status-badge completed">
                                Completed
                            </span>
                        </td>


                        <td class="text-end">

                            <button type="button"
                                    class="btn btn-sm btn-light action-btn view-history"
                                    data-patient="Rahul Patil"
                                    data-id="P-1025"
                                    data-date="02 Sep 2026">

                                <i class="bi bi-eye"></i>

                            </button>

                        </td>

                    </tr>


                    <!-- RECORD 2 -->
                    <tr>

                        <td>
                            <div class="history-date">
                                <strong>12 Aug 2026</strong>
                                <small>11:15 AM</small>
                            </div>
                        </td>


                        <td>

                            <div class="mini-patient">

                                <div class="mini-avatar">
                                    RP
                                </div>

                                <div>
                                    <strong>Rahul Patil</strong>
                                    <small>P-1025</small>
                                </div>

                            </div>

                        </td>


                        <td>
                            Dr. Samer Jawalkar
                        </td>


                        <td>
                            <span class="visit-badge followup">
                                Follow-up
                            </span>
                        </td>


                        <td>
                            Hypertension
                        </td>


                        <td>
                            <span class="prescription-badge">
                                <i class="bi bi-prescription2"></i>
                                RX-00102
                            </span>
                        </td>


                        <td>
                            <strong>₹500</strong>
                        </td>


                        <td>
                            <span class="status-badge completed">
                                Completed
                            </span>
                        </td>


                        <td class="text-end">

                            <button type="button"
                                    class="btn btn-sm btn-light action-btn view-history"
                                    data-patient="Rahul Patil"
                                    data-id="P-1025"
                                    data-date="12 Aug 2026">

                                <i class="bi bi-eye"></i>

                            </button>

                        </td>

                    </tr>


                    <!-- RECORD 3 -->
                    <tr>

                        <td>
                            <div class="history-date">
                                <strong>10 Jul 2026</strong>
                                <small>09:50 AM</small>
                            </div>
                        </td>


                        <td>

                            <div class="mini-patient">

                                <div class="mini-avatar">
                                    RP
                                </div>

                                <div>
                                    <strong>Rahul Patil</strong>
                                    <small>P-1025</small>
                                </div>

                            </div>

                        </td>


                        <td>
                            Dr. Samer Jawalkar
                        </td>


                        <td>
                            <span class="visit-badge new">
                                New Visit
                            </span>
                        </td>


                        <td>
                            Diabetes
                        </td>


                        <td>
                            <span class="prescription-badge">
                                <i class="bi bi-prescription2"></i>
                                RX-00089
                            </span>
                        </td>


                        <td>
                            <strong>₹750</strong>
                        </td>


                        <td>
                            <span class="status-badge completed">
                                Completed
                            </span>
                        </td>


                        <td class="text-end">

                            <button type="button"
                                    class="btn btn-sm btn-light action-btn view-history"
                                    data-patient="Rahul Patil"
                                    data-id="P-1025"
                                    data-date="10 Jul 2026">

                                <i class="bi bi-eye"></i>

                            </button>

                        </td>

                    </tr>


                    <!-- RECORD 4 -->
                    <tr>

                        <td>
                            <div class="history-date">
                                <strong>15 Jun 2026</strong>
                                <small>12:20 PM</small>
                            </div>
                        </td>


                        <td>

                            <div class="mini-patient">

                                <div class="mini-avatar">
                                    RP
                                </div>

                                <div>
                                    <strong>Rahul Patil</strong>
                                    <small>P-1025</small>
                                </div>

                            </div>

                        </td>


                        <td>
                            Dr. Samer Jawalkar
                        </td>


                        <td>
                            <span class="visit-badge followup">
                                Follow-up
                            </span>
                        </td>


                        <td>
                            Diabetes
                        </td>


                        <td>
                            <span class="prescription-badge">
                                <i class="bi bi-prescription2"></i>
                                RX-00072
                            </span>
                        </td>


                        <td>
                            <strong>₹450</strong>
                        </td>


                        <td>
                            <span class="status-badge followup-due">
                                Follow-up Due
                            </span>
                        </td>


                        <td class="text-end">

                            <button type="button"
                                    class="btn btn-sm btn-light action-btn view-history"
                                    data-patient="Rahul Patil"
                                    data-id="P-1025"
                                    data-date="15 Jun 2026">

                                <i class="bi bi-eye"></i>

                            </button>

                        </td>

                    </tr>


                    <!-- RECORD 5 -->
                    <tr>

                        <td>
                            <div class="history-date">
                                <strong>20 May 2026</strong>
                                <small>10:05 AM</small>
                            </div>
                        </td>


                        <td>

                            <div class="mini-patient">

                                <div class="mini-avatar">
                                    RP
                                </div>

                                <div>
                                    <strong>Rahul Patil</strong>
                                    <small>P-1025</small>
                                </div>

                            </div>

                        </td>


                        <td>
                            Dr. Samer Jawalkar
                        </td>


                        <td>
                            <span class="visit-badge followup">
                                Follow-up
                            </span>
                        </td>


                        <td>
                            Gastritis
                        </td>


                        <td>
                            <span class="prescription-badge">
                                <i class="bi bi-prescription2"></i>
                                RX-00051
                            </span>
                        </td>


                        <td>
                            <strong>₹350</strong>
                        </td>


                        <td>
                            <span class="status-badge completed">
                                Completed
                            </span>
                        </td>


                        <td class="text-end">

                            <button type="button"
                                    class="btn btn-sm btn-light action-btn view-history"
                                    data-patient="Rahul Patil"
                                    data-id="P-1025"
                                    data-date="20 May 2026">

                                <i class="bi bi-eye"></i>

                            </button>

                        </td>

                    </tr>

                </tbody>

            </table>

        </div>


        <!-- MOBILE HISTORY CARDS -->

        <div class="mobile-history-list">

            <div class="mobile-history-item">

                <div class="mobile-history-top">

                    <div class="mobile-date">
                        <strong>02 Sep 2026</strong>
                        <span>10:35 AM</span>
                    </div>

                    <span class="status-badge completed">
                        Completed
                    </span>

                </div>


                <div class="mobile-patient-row">

                    <div class="mini-avatar">
                        RP
                    </div>

                    <div>
                        <strong>Rahul Patil</strong>
                        <small>P-1025</small>
                    </div>

                </div>


                <div class="mobile-history-grid">

                    <div>
                        <span>Doctor</span>
                        <strong>Dr. Samer Jawalkar</strong>
                    </div>

                    <div>
                        <span>Visit</span>
                        <strong>Follow-up</strong>
                    </div>

                    <div>
                        <span>Diagnosis</span>
                        <strong>Hypertension</strong>
                    </div>

                    <div>
                        <span>Prescription</span>
                        <strong>RX-00125</strong>
                    </div>

                    <div>
                        <span>Billing</span>
                        <strong>₹650</strong>
                    </div>

                </div>


                <button type="button"
                        class="btn btn-outline-primary btn-sm w-100 view-history"
                        data-patient="Rahul Patil"
                        data-id="P-1025"
                        data-date="02 Sep 2026">

                    <i class="bi bi-eye me-1"></i>
                    View Consultation Details

                </button>

            </div>


            <div class="mobile-history-item">

                <div class="mobile-history-top">

                    <div class="mobile-date">
                        <strong>12 Aug 2026</strong>
                        <span>11:15 AM</span>
                    </div>

                    <span class="status-badge completed">
                        Completed
                    </span>

                </div>


                <div class="mobile-patient-row">

                    <div class="mini-avatar">
                        RP
                    </div>

                    <div>
                        <strong>Rahul Patil</strong>
                        <small>P-1025</small>
                    </div>

                </div>


                <div class="mobile-history-grid">

                    <div>
                        <span>Doctor</span>
                        <strong>Dr. Samer Jawalkar</strong>
                    </div>

                    <div>
                        <span>Visit</span>
                        <strong>Follow-up</strong>
                    </div>

                    <div>
                        <span>Diagnosis</span>
                        <strong>Hypertension</strong>
                    </div>

                    <div>
                        <span>Prescription</span>
                        <strong>RX-00102</strong>
                    </div>

                    <div>
                        <span>Billing</span>
                        <strong>₹500</strong>
                    </div>

                </div>


                <button type="button"
                        class="btn btn-outline-primary btn-sm w-100 view-history"
                        data-patient="Rahul Patil"
                        data-id="P-1025"
                        data-date="12 Aug 2026">

                    <i class="bi bi-eye me-1"></i>
                    View Consultation Details

                </button>

            </div>

        </div>


        <!-- PAGINATION -->

        <div class="card-footer bg-white border-0 p-3 p-lg-4">

            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">

                <div class="text-muted small">
                    Showing <strong>1–10</strong> of <strong>18</strong> records
                </div>

                <nav aria-label="Patient history pagination">

                    <ul class="pagination pagination-sm mb-0">

                        <li class="page-item disabled">
                            <a class="page-link" href="#">
                                <i class="bi bi-chevron-left"></i>
                            </a>
                        </li>

                        <li class="page-item active">
                            <a class="page-link" href="#">
                                1
                            </a>
                        </li>

                        <li class="page-item">
                            <a class="page-link" href="#">
                                2
                            </a>
                        </li>

                        <li class="page-item">
                            <a class="page-link" href="#">
                                3
                            </a>
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

</main>

<!-- =========================================================
     CONSULTATION DETAILS MODAL
     ========================================================= -->

<div class="modal fade"
     id="patientHistoryModal"
     tabindex="-1"
     aria-labelledby="patientHistoryModalLabel"
     aria-hidden="true">

    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">

        <div class="modal-content history-modal">

            <div class="modal-header">

                <div class="d-flex align-items-center gap-3">

                    <div class="history-modal-icon">
                        <i class="bi bi-clock-history"></i>
                    </div>

                    <div>

                        <h5 class="modal-title mb-1"
                            id="patientHistoryModalLabel">

                            Consultation Details

                        </h5>

                        <small class="text-muted"
                               id="historyModalSubtitle">

                            Patient consultation history

                        </small>

                    </div>

                </div>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal">
                </button>

            </div>


            <div class="modal-body">

                <!-- Patient -->
                <div class="modal-patient-header">

                    <div class="patient-avatar">
                        RP
                    </div>

                    <div>

                        <h5 class="mb-1">
                            Rahul Patil
                        </h5>

                        <div class="patient-meta">

                            <span>
                                Patient ID: P-1025
                            </span>

                            <span>
                                Male
                            </span>

                            <span>
                                42 Years
                            </span>

                        </div>

                    </div>

                </div>


                <!-- Consultation -->
                <div class="detail-section">

                    <div class="detail-section-title">

                        <i class="bi bi-heart-pulse"></i>

                        Consultation Information

                    </div>


                    <div class="row g-3">

                        <div class="col-12 col-sm-6 col-lg-3">

                            <div class="detail-item">

                                <span>Visit Date</span>

                                <strong id="modalVisitDate">
                                    02 Sep 2026
                                </strong>

                            </div>

                        </div>


                        <div class="col-12 col-sm-6 col-lg-3">

                            <div class="detail-item">

                                <span>Doctor</span>

                                <strong>
                                    Dr. Samer Jawalkar
                                </strong>

                            </div>

                        </div>


                        <div class="col-12 col-sm-6 col-lg-3">

                            <div class="detail-item">

                                <span>Visit Type</span>

                                <strong>
                                    Follow-up
                                </strong>

                            </div>

                        </div>


                        <div class="col-12 col-sm-6 col-lg-3">

                            <div class="detail-item">

                                <span>Status</span>

                                <strong>
                                    Completed
                                </strong>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- Vitals -->
                <div class="detail-section">

                    <div class="detail-section-title">

                        <i class="bi bi-activity"></i>

                        Patient Vitals

                    </div>


                    <div class="row g-3">

                        <div class="col-6 col-md-3">

                            <div class="vital-box">

                                <span>Blood Pressure</span>

                                <strong>138/88</strong>

                                <small>mmHg</small>

                            </div>

                        </div>


                        <div class="col-6 col-md-3">

                            <div class="vital-box">

                                <span>Blood Sugar</span>

                                <strong>124</strong>

                                <small>mg/dL</small>

                            </div>

                        </div>


                        <div class="col-6 col-md-3">

                            <div class="vital-box">

                                <span>Pulse</span>

                                <strong>78</strong>

                                <small>BPM</small>

                            </div>

                        </div>


                        <div class="col-6 col-md-3">

                            <div class="vital-box">

                                <span>Weight</span>

                                <strong>72</strong>

                                <small>Kg</small>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- Diagnosis -->
                <div class="detail-section">

                    <div class="detail-section-title">

                        <i class="bi bi-clipboard2-pulse"></i>

                        Diagnosis & Clinical Notes

                    </div>


                    <div class="diagnosis-box">

                        <span>Primary Diagnosis</span>

                        <strong>
                            Hypertension
                        </strong>

                    </div>


                    <div class="clinical-notes">

                        <span>Doctor's Notes</span>

                        <p class="mb-0">
                            Patient reviewed for blood pressure management.
                            Continue current medication and maintain regular
                            BP monitoring. Follow-up advised as scheduled.
                        </p>

                    </div>

                </div>


                <!-- Prescription -->
                <div class="detail-section">

                    <div class="detail-section-title">

                        <i class="bi bi-prescription2"></i>

                        Prescribed Medicines

                    </div>


                    <div class="table-responsive">

                        <table class="table align-middle prescription-detail-table">

                            <thead>

                                <tr>

                                    <th>Medicine</th>
                                    <th>Dose</th>
                                    <th>Frequency</th>
                                    <th>Duration</th>
                                    <th>Instructions</th>

                                </tr>

                            </thead>

                            <tbody>

                                <tr>

                                    <td>
                                        <strong>
                                            Amlodipine 5mg
                                        </strong>
                                    </td>

                                    <td>
                                        1 Tablet
                                    </td>

                                    <td>
                                        1-0-0
                                    </td>

                                    <td>
                                        30 Days
                                    </td>

                                    <td>
                                        After Breakfast
                                    </td>

                                </tr>

                                <tr>

                                    <td>
                                        <strong>
                                            Telmisartan 40mg
                                        </strong>
                                    </td>

                                    <td>
                                        1 Tablet
                                    </td>

                                    <td>
                                        0-0-1
                                    </td>

                                    <td>
                                        30 Days
                                    </td>

                                    <td>
                                        After Dinner
                                    </td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>


                <!-- Billing -->
                <div class="detail-section mb-0">

                    <div class="detail-section-title">

                        <i class="bi bi-receipt"></i>

                        Billing Information

                    </div>


                    <div class="billing-summary">

                        <div>
                            <span>Consultation Fee</span>
                            <strong>₹500</strong>
                        </div>

                        <div>
                            <span>Pharmacy Amount</span>
                            <strong>₹150</strong>
                        </div>

                        <div class="total">
                            <span>Total</span>
                            <strong>₹650</strong>
                        </div>

                    </div>

                </div>

            </div>


            <div class="modal-footer">

                <button type="button"
                        class="btn btn-light border"
                        data-bs-dismiss="modal">

                    Close

                </button>

                <button type="button"
                        class="btn btn-primary">

                    <i class="bi bi-printer me-1"></i>
                    Print History

                </button>

            </div>

        </div>

    </div>

</div>


<!-- =========================================================
     PAGE-SPECIFIC CSS
     Does not modify existing dashboard shell
     ========================================================= -->

<style>

.patient-history-page {
    width: 100%;
}


/* FILTER */

.history-filter-card {
    border-radius: 14px;
}

.filter-title {
    display: flex;
    align-items: center;
    gap: 12px;
}

.filter-icon {
    width: 42px;
    height: 42px;
    min-width: 42px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(13, 110, 253, .10);
    color: var(--bs-primary);
    font-size: 18px;
}

.patient-history-page .form-label {
    font-size: 13px;
    font-weight: 600;
    margin-bottom: 7px;
}

.patient-history-page .form-control,
.patient-history-page .form-select {
    min-height: 43px;
    border-radius: 8px;
    font-size: 14px;
}

.patient-history-page .input-group-text {
    background: #f8f9fa;
    border-radius: 8px 0 0 8px;
}

.filter-buttons {
    display: flex;
    gap: 8px;
}

.filter-buttons .btn {
    flex: 1;
    min-height: 43px;
}


/* STAT CARDS */

.history-stat-card {
    height: 100%;
    min-height: 110px;
    padding: 18px;
    border: 1px solid #edf0f3;
    border-radius: 14px;
    background: #fff;
    box-shadow: 0 4px 18px rgba(0, 0, 0, .05);
    display: flex;
    align-items: center;
    gap: 14px;
}

.stat-icon {
    width: 48px;
    height: 48px;
    min-width: 48px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(13, 110, 253, .10);
    color: var(--bs-primary);
    font-size: 20px;
}

.stat-content {
    min-width: 0;
}

.stat-content span {
    display: block;
    color: #6c757d;
    font-size: 12px;
    margin-bottom: 2px;
}

.stat-content strong {
    display: block;
    font-size: 23px;
    line-height: 1.2;
}

.stat-content small {
    display: block;
    color: #6c757d;
    font-size: 11px;
    margin-top: 4px;
}


/* SELECTED PATIENT */

.selected-patient-card {
    border-radius: 14px;
}

.selected-patient {
    display: flex;
    align-items: center;
    gap: 14px;
}

.patient-avatar {
    width: 58px;
    height: 58px;
    min-width: 58px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--bs-primary);
    color: #fff;
    font-size: 18px;
    font-weight: 700;
}

.patient-details h5 {
    font-size: 18px;
}

.patient-status {
    display: inline-flex;
    padding: 4px 9px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 600;
    background: rgba(25, 135, 84, .10);
    color: #198754;
}

.patient-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 10px 16px;
    margin-top: 7px;
    color: #6c757d;
    font-size: 12px;
}

.patient-meta span {
    display: inline-flex;
    align-items: center;
    gap: 5px;
}

.patient-quick-info {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
}

.patient-quick-info > div {
    padding: 12px;
    border-radius: 10px;
    background: #f8f9fa;
}

.patient-quick-info span {
    display: block;
    color: #6c757d;
    font-size: 11px;
    margin-bottom: 3px;
}

.patient-quick-info strong {
    display: block;
    font-size: 13px;
}


/* TABLE */

.history-table-card {
    border-radius: 14px;
    overflow: hidden;
}

.history-table-wrapper {
    overflow-x: auto;
}

.history-table {
    min-width: 1100px;
}

.history-table thead th {
    padding: 13px 15px;
    background: #f8f9fa;
    border-bottom: 1px solid #e9ecef;
    color: #6c757d;
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    white-space: nowrap;
}

.history-table tbody td {
    padding: 14px 15px;
    border-bottom: 1px solid #f0f1f2;
    font-size: 13px;
    white-space: nowrap;
}

.history-date strong {
    display: block;
    font-size: 13px;
}

.history-date small {
    display: block;
    margin-top: 2px;
    color: #8a9299;
    font-size: 11px;
}

.mini-patient {
    display: flex;
    align-items: center;
    gap: 9px;
}

.mini-avatar {
    width: 36px;
    height: 36px;
    min-width: 36px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(13, 110, 253, .10);
    color: var(--bs-primary);
    font-size: 11px;
    font-weight: 700;
}

.mini-patient strong {
    display: block;
    font-size: 13px;
}

.mini-patient small {
    display: block;
    color: #8a9299;
    font-size: 10px;
    margin-top: 2px;
}


/* BADGES */

.visit-badge,
.status-badge,
.prescription-badge {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    border-radius: 20px;
    padding: 5px 9px;
    font-size: 10px;
    font-weight: 600;
}

.visit-badge.new {
    background: rgba(13, 110, 253, .10);
    color: var(--bs-primary);
}

.visit-badge.followup {
    background: rgba(108, 117, 125, .10);
    color: #6c757d;
}

.visit-badge.followup {
    background: rgba(111, 66, 193, .10);
    color: #6f42c1;
}

.status-badge.completed {
    background: rgba(25, 135, 84, .10);
    color: #198754;
}

.status-badge.followup-due {
    background: rgba(255, 193, 7, .14);
    color: #997404;
}

.status-badge.pending {
    background: rgba(220, 53, 69, .10);
    color: #dc3545;
}

.prescription-badge {
    background: rgba(13, 110, 253, .08);
    color: var(--bs-primary);
}

.action-btn {
    width: 34px;
    height: 34px;
    padding: 0;
    border-radius: 8px;
}


/* MOBILE HISTORY */

.mobile-history-list {
    display: none;
}

.mobile-history-item {
    padding: 16px;
    border-bottom: 1px solid #edf0f2;
}

.mobile-history-top {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 10px;
    margin-bottom: 13px;
}

.mobile-date strong {
    display: block;
    font-size: 13px;
}

.mobile-date span {
    display: block;
    color: #8a9299;
    font-size: 11px;
    margin-top: 2px;
}

.mobile-patient-row {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 14px;
}

.mobile-patient-row strong {
    display: block;
    font-size: 14px;
}

.mobile-patient-row small {
    display: block;
    color: #8a9299;
    font-size: 11px;
    margin-top: 2px;
}

.mobile-history-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 10px;
    padding: 12px;
    margin-bottom: 13px;
    background: #f8f9fa;
    border-radius: 10px;
}

.mobile-history-grid > div {
    min-width: 0;
}

.mobile-history-grid span {
    display: block;
    color: #8a9299;
    font-size: 10px;
    margin-bottom: 3px;
}

.mobile-history-grid strong {
    display: block;
    font-size: 12px;
    word-break: break-word;
}


/* MODAL */

.history-modal {
    border: 0;
    border-radius: 16px;
    overflow: hidden;
}

.history-modal .modal-header {
    padding: 18px 22px;
    border-bottom: 1px solid #e9ecef;
}

.history-modal .modal-body {
    padding: 22px;
}

.history-modal-icon {
    width: 44px;
    height: 44px;
    min-width: 44px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 11px;
    background: rgba(13, 110, 253, .10);
    color: var(--bs-primary);
    font-size: 19px;
}

.modal-patient-header {
    display: flex;
    align-items: center;
    gap: 13px;
    padding: 15px;
    margin-bottom: 18px;
    border-radius: 12px;
    background: #f8f9fa;
}

.detail-section {
    padding: 18px;
    margin-bottom: 15px;
    border: 1px solid #e9ecef;
    border-radius: 12px;
}

.detail-section-title {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 15px;
    font-size: 14px;
    font-weight: 700;
}

.detail-section-title i {
    color: var(--bs-primary);
}

.detail-item {
    padding: 12px;
    border-radius: 9px;
    background: #f8f9fa;
}

.detail-item span {
    display: block;
    color: #8a9299;
    font-size: 10px;
    margin-bottom: 4px;
}

.detail-item strong {
    display: block;
    font-size: 13px;
}

.vital-box {
    padding: 13px;
    border: 1px solid #e9ecef;
    border-radius: 10px;
    text-align: center;
}

.vital-box span {
    display: block;
    color: #8a9299;
    font-size: 10px;
}

.vital-box strong {
    display: block;
    font-size: 20px;
    margin: 4px 0 1px;
}

.vital-box small {
    color: #8a9299;
    font-size: 10px;
}

.diagnosis-box {
    padding: 13px;
    margin-bottom: 12px;
    border-radius: 10px;
    background: rgba(13, 110, 253, .06);
}

.diagnosis-box span,
.clinical-notes span {
    display: block;
    color: #8a9299;
    font-size: 10px;
    margin-bottom: 4px;
}

.diagnosis-box strong {
    font-size: 14px;
}

.clinical-notes {
    padding: 13px;
    border-radius: 10px;
    background: #f8f9fa;
}

.clinical-notes p {
    font-size: 13px;
    line-height: 1.6;
}

.prescription-detail-table {
    min-width: 700px;
}

.prescription-detail-table th {
    background: #f8f9fa;
    color: #6c757d;
    font-size: 11px;
    text-transform: uppercase;
}

.prescription-detail-table td {
    font-size: 12px;
}

.billing-summary {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-end;
    gap: 25px;
}

.billing-summary > div {
    min-width: 130px;
}

.billing-summary span {
    display: block;
    color: #8a9299;
    font-size: 11px;
}

.billing-summary strong {
    display: block;
    margin-top: 3px;
    font-size: 15px;
}

.billing-summary .total {
    padding-left: 20px;
    border-left: 1px solid #dee2e6;
}

.billing-summary .total strong {
    font-size: 19px;
}


/* TABLET */

@media (max-width: 991.98px) {

    .patient-quick-info {
        grid-template-columns: repeat(3, 1fr);
    }

}


/* MOBILE */

@media (max-width: 767.98px) {

    .history-table-wrapper {
        display: none;
    }

    .mobile-history-list {
        display: block;
    }

    .patient-history-page .card-body {
        padding: 15px;
    }

    .history-stat-card {
        padding: 13px;
        min-height: 95px;
    }

    .stat-icon {
        width: 40px;
        height: 40px;
        min-width: 40px;
        font-size: 17px;
    }

    .stat-content strong {
        font-size: 19px;
    }

    .selected-patient {
        align-items: flex-start;
    }

    .patient-avatar {
        width: 48px;
        height: 48px;
        min-width: 48px;
        font-size: 15px;
    }

    .patient-details h5 {
        font-size: 16px;
    }

    .patient-quick-info {
        margin-top: 5px;
    }

    .history-modal .modal-body {
        padding: 14px;
    }

    .detail-section {
        padding: 14px;
    }

    .billing-summary {
        justify-content: flex-start;
        gap: 15px;
    }

    .billing-summary .total {
        width: 100%;
        padding-left: 0;
        padding-top: 12px;
        border-left: 0;
        border-top: 1px solid #dee2e6;
    }

}


/* SMALL MOBILE */

@media (max-width: 575.98px) {

    .patient-quick-info {
        grid-template-columns: 1fr;
    }

    .patient-quick-info > div {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .patient-quick-info span,
    .patient-quick-info strong {
        margin: 0;
    }

    .filter-buttons {
        flex-direction: column;
    }

    .mobile-history-grid {
        grid-template-columns: 1fr;
    }

    .history-modal .modal-header {
        padding: 14px;
    }

    .history-modal .modal-title {
        font-size: 15px;
    }

}

</style>


<!-- =========================================================
     BOOTSTRAP 5 JS
     Add ONLY if your existing dashboard does not already
     load Bootstrap JS bundle.
     ========================================================= -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {

    /* ==========================================
       CONSULTATION HISTORY MODAL
       ========================================== */

    const historyModalElement =
        document.getElementById('patientHistoryModal');

    let historyModal = null;

    if (historyModalElement && typeof bootstrap !== 'undefined') {
        historyModal = new bootstrap.Modal(historyModalElement);
    }


    document.querySelectorAll('.view-history').forEach(function (button) {

        button.addEventListener('click', function () {

            const patient =
                this.getAttribute('data-patient');

            const patientId =
                this.getAttribute('data-id');

            const visitDate =
                this.getAttribute('data-date');


            const subtitle =
                document.getElementById('historyModalSubtitle');

            const modalVisitDate =
                document.getElementById('modalVisitDate');


            if (subtitle) {

                subtitle.textContent =
                    patient + ' • ' + patientId;

            }


            if (modalVisitDate) {

                modalVisitDate.textContent =
                    visitDate;

            }


            if (historyModal) {

                historyModal.show();

            }

        });

    });


    /* ==========================================
       FILTER FORM
       ========================================== */

    const filterForm =
        document.getElementById('patientHistoryFilterForm');

    if (filterForm) {

        filterForm.addEventListener('submit', function (event) {

            event.preventDefault();

            /*
             * Connect these values to your backend/API.
             */

            const search =
                document.getElementById('patientSearch').value;

            const doctor =
                document.getElementById('doctorFilter').value;

            const diagnosis =
                document.getElementById('diagnosisFilter').value;

            const visitType =
                document.getElementById('visitTypeFilter').value;

            const status =
                document.getElementById('statusFilter').value;

            const fromDate =
                document.getElementById('fromDate').value;

            const toDate =
                document.getElementById('toDate').value;


            console.log({
                search,
                doctor,
                diagnosis,
                visitType,
                status,
                fromDate,
                toDate
            });

        });

    }


    /* ==========================================
       RESET FILTERS
       ========================================== */

    const resetButton =
        document.getElementById('resetHistoryFilter');

    if (resetButton) {

        resetButton.addEventListener('click', function () {

            const form =
                document.getElementById('patientHistoryFilterForm');

            if (form) {
                form.reset();
            }

        });

    }


    /* ==========================================
       QUICK DATE FILTER
       ========================================== */

    const quickDate =
        document.getElementById('quickDateFilter');

    if (quickDate) {

        quickDate.addEventListener('change', function () {

            const value = this.value;

            const from =
                document.getElementById('fromDate');

            const to =
                document.getElementById('toDate');


            if (!value) {
                return;
            }


            const today = new Date();

            const formatDate = function (date) {

                const year =
                    date.getFullYear();

                const month =
                    String(date.getMonth() + 1).padStart(2, '0');

                const day =
                    String(date.getDate()).padStart(2, '0');

                return year + '-' + month + '-' + day;

            };


            to.value = formatDate(today);


            if (value === 'today') {

                from.value =
                    formatDate(today);

                return;

            }


            const days =
                parseInt(value, 10);

            if (!isNaN(days)) {

                const startDate =
                    new Date(today);

                startDate.setDate(
                    today.getDate() - days
                );

                from.value =
                    formatDate(startDate);

            }

        });

    }


    /* ==========================================
       PRINT
       ========================================== */

    const printButton =
        document.getElementById('printHistoryBtn');

    if (printButton) {

        printButton.addEventListener('click', function () {

            window.print();

        });

    }


    /* ==========================================
       EXPORT PLACEHOLDER
       ========================================== */

    const exportButton =
        document.getElementById('exportHistoryBtn');

    if (exportButton) {

        exportButton.addEventListener('click', function () {

            alert(
                'Connect this button to your Patient History Excel/PDF export functionality.'
            );

        });

    }

});
</script>

<body>
</html>