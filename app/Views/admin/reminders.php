<?php include('header.php'); ?>
<!-- =========================================================
     VETAL CLINIC OPD - REMINDERS PAGE
     CONTENT AREA ONLY
     Bootstrap 5
     ========================================================= -->
<main class="content">
<div class="reminder-page">

    <!-- Page Header -->
    <div class="reminder-page-header mb-4">
        <div class="d-flex flex-column flex-lg-row align-items-lg-center justify-content-between gap-3">

            <div>
                <div class="d-flex align-items-center gap-2 mb-2">
                    <span class="reminder-page-icon">
                        <i class="bi bi-bell"></i>
                    </span>

                    <div>
                        <h4 class="mb-0 fw-bold">Reminders</h4>
                        <div class="text-muted small">
                            Manage patient follow-ups, medicine completion and monitoring reminders
                        </div>
                    </div>
                </div>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb reminder-breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="#">
                                <i class="bi bi-grid me-1"></i> Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Reminders
                        </li>
                    </ol>
                </nav>
            </div>

            <button type="button"
                    class="btn btn-primary reminder-add-btn"
                    data-bs-toggle="modal"
                    data-bs-target="#addReminderModal">
                <i class="bi bi-plus-lg me-2"></i>
                Add New Reminder
            </button>

        </div>
    </div>


    <!-- =====================================================
         STATISTICS
         ===================================================== -->

    <div class="row g-3 mb-4">

        <!-- Total -->
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="reminder-stat-card">
                <div class="reminder-stat-icon">
                    <i class="bi bi-bell"></i>
                </div>

                <div class="reminder-stat-content">
                    <span>Total Reminders</span>
                    <h3>248</h3>
                    <small>
                        <i class="bi bi-calendar3 me-1"></i>
                        This month
                    </small>
                </div>
            </div>
        </div>

        <!-- Upcoming -->
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="reminder-stat-card">
                <div class="reminder-stat-icon reminder-icon-info">
                    <i class="bi bi-calendar-event"></i>
                </div>

                <div class="reminder-stat-content">
                    <span>Upcoming</span>
                    <h3>42</h3>
                    <small>
                        <i class="bi bi-clock me-1"></i>
                        Next 7 days
                    </small>
                </div>
            </div>
        </div>

        <!-- Due -->
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="reminder-stat-card">
                <div class="reminder-stat-icon reminder-icon-warning">
                    <i class="bi bi-exclamation-circle"></i>
                </div>

                <div class="reminder-stat-content">
                    <span>Due Today</span>
                    <h3>18</h3>
                    <small>
                        <i class="bi bi-arrow-up me-1"></i>
                        Needs attention
                    </small>
                </div>
            </div>
        </div>

        <!-- Sent -->
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="reminder-stat-card">
                <div class="reminder-stat-icon reminder-icon-success">
                    <i class="bi bi-check-circle"></i>
                </div>

                <div class="reminder-stat-content">
                    <span>Sent Successfully</span>
                    <h3>188</h3>
                    <small>
                        <i class="bi bi-send me-1"></i>
                        75.8% completion
                    </small>
                </div>
            </div>
        </div>

    </div>


    <!-- =====================================================
         QUICK REMINDER CATEGORIES
         ===================================================== -->

    <div class="row g-3 mb-4">

        <div class="col-12 col-md-6 col-xl-3">
            <div class="reminder-category-card">
                <div class="category-icon">
                    <i class="bi bi-calendar-check"></i>
                </div>

                <div class="category-info">
                    <span>Follow-up</span>
                    <strong>86</strong>
                    <small>Patient visits</small>
                </div>

                <i class="bi bi-chevron-right category-arrow"></i>
            </div>
        </div>

        <div class="col-12 col-md-6 col-xl-3">
            <div class="reminder-category-card">
                <div class="category-icon">
                    <i class="bi bi-capsule"></i>
                </div>

                <div class="category-info">
                    <span>Medicine</span>
                    <strong>72</strong>
                    <small>Completion reminders</small>
                </div>

                <i class="bi bi-chevron-right category-arrow"></i>
            </div>
        </div>

        <div class="col-12 col-md-6 col-xl-3">
            <div class="reminder-category-card">
                <div class="category-icon">
                    <i class="bi bi-heart-pulse"></i>
                </div>

                <div class="category-info">
                    <span>BP Monitoring</span>
                    <strong>39</strong>
                    <small>Monitoring reminders</small>
                </div>

                <i class="bi bi-chevron-right category-arrow"></i>
            </div>
        </div>

        <div class="col-12 col-md-6 col-xl-3">
            <div class="reminder-category-card">
                <div class="category-icon">
                    <i class="bi bi-droplet-half"></i>
                </div>

                <div class="category-info">
                    <span>Sugar Monitoring</span>
                    <strong>51</strong>
                    <small>Monitoring reminders</small>
                </div>

                <i class="bi bi-chevron-right category-arrow"></i>
            </div>
        </div>

    </div>


    <!-- =====================================================
         MAIN REMINDER SECTION
         ===================================================== -->

    <div class="card border-0 shadow-sm reminder-main-card">

        <!-- Card Header -->
        <div class="card-header bg-white border-0 p-3 p-lg-4">

            <div class="d-flex flex-column flex-xl-row justify-content-between gap-3">

                <div>
                    <h5 class="mb-1 fw-bold">
                        Reminder Management
                    </h5>

                    <p class="text-muted small mb-0">
                        Track and manage patient notifications and follow-ups.
                    </p>
                </div>

                <div class="d-flex flex-wrap gap-2">

                    <button class="btn btn-light border btn-sm">
                        <i class="bi bi-download me-1"></i>
                        Export
                    </button>

                    <button class="btn btn-light border btn-sm">
                        <i class="bi bi-arrow-clockwise me-1"></i>
                        Refresh
                    </button>

                </div>

            </div>

        </div>


        <!-- =================================================
             FILTERS
             ================================================= -->

        <div class="reminder-filter-area mx-3 mx-lg-4 mb-3">

            <div class="row g-2">

                <!-- Search -->
                <div class="col-12 col-lg-4">
                    <div class="input-group">
                        <span class="input-group-text bg-white">
                            <i class="bi bi-search text-muted"></i>
                        </span>

                        <input type="text"
                               class="form-control"
                               placeholder="Search patient, mobile or reminder...">
                    </div>
                </div>

                <!-- Reminder Type -->
                <div class="col-6 col-md-4 col-lg-2">
                    <select class="form-select">
                        <option value="">Reminder Type</option>
                        <option>Follow-up</option>
                        <option>Medicine</option>
                        <option>BP Monitoring</option>
                        <option>Sugar Monitoring</option>
                        <option>Appointment</option>
                        <option>Other</option>
                    </select>
                </div>

                <!-- Status -->
                <div class="col-6 col-md-4 col-lg-2">
                    <select class="form-select">
                        <option value="">Status</option>
                        <option>Upcoming</option>
                        <option>Due Today</option>
                        <option>Sent</option>
                        <option>Completed</option>
                        <option>Missed</option>
                    </select>
                </div>

                <!-- Method -->
                <div class="col-6 col-md-4 col-lg-2">
                    <select class="form-select">
                        <option value="">Method</option>
                        <option>WhatsApp</option>
                        <option>SMS</option>
                        <option>Call</option>
                        <option>Manual</option>
                    </select>
                </div>

                <!-- Filter Button -->
                <div class="col-6 col-lg-2">
                    <button class="btn btn-primary w-100">
                        <i class="bi bi-funnel me-1"></i>
                        Filter
                    </button>
                </div>

            </div>

        </div>


        <!-- =================================================
             TABLE
             ================================================= -->

        <div class="table-responsive reminder-table-wrapper">

            <table class="table reminder-table align-middle mb-0">

                <thead>
                    <tr>
                        <th>Patient</th>
                        <th>Reminder</th>
                        <th>Due Date</th>
                        <th>Method</th>
                        <th>Created By</th>
                        <th>Status</th>
                        <th class="text-end">Action</th>
                    </tr>
                </thead>

                <tbody>

                    <!-- ROW 1 -->
                    <tr>

                        <td>
                            <div class="d-flex align-items-center gap-3">

                                <div class="patient-avatar">
                                    AM
                                </div>

                                <div>
                                    <div class="fw-semibold">
                                        Amit More
                                    </div>

                                    <small class="text-muted">
                                        VET-10245 · 98765 43210
                                    </small>
                                </div>

                            </div>
                        </td>

                        <td>
                            <div class="reminder-name">
                                <i class="bi bi-calendar-check"></i>
                                Follow-up Visit
                            </div>

                            <small class="text-muted">
                                OPD follow-up consultation
                            </small>
                        </td>

                        <td>
                            <div class="fw-semibold">
                                12 Sep 2026
                            </div>

                            <small class="text-warning">
                                Tomorrow
                            </small>
                        </td>

                        <td>
                            <span class="method-badge">
                                <i class="bi bi-whatsapp"></i>
                                WhatsApp
                            </span>
                        </td>

                        <td>
                            <span class="small">
                                Dr. Samer
                            </span>
                        </td>

                        <td>
                            <span class="reminder-status status-upcoming">
                                Upcoming
                            </span>
                        </td>

                        <td class="text-end">

                            <div class="dropdown">

                                <button class="btn btn-sm btn-light border"
                                        data-bs-toggle="dropdown">
                                    <i class="bi bi-three-dots"></i>
                                </button>

                                <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0">

                                    <li>
                                        <button class="dropdown-item"
                                                data-bs-toggle="modal"
                                                data-bs-target="#viewReminderModal">
                                            <i class="bi bi-eye me-2"></i>
                                            View Reminder
                                        </button>
                                    </li>

                                    <li>
                                        <button class="dropdown-item"
                                                data-bs-toggle="modal"
                                                data-bs-target="#rescheduleReminderModal">
                                            <i class="bi bi-calendar2-week me-2"></i>
                                            Reschedule
                                        </button>
                                    </li>

                                    <li>
                                        <button class="dropdown-item">
                                            <i class="bi bi-send me-2"></i>
                                            Send Now
                                        </button>
                                    </li>

                                    <li><hr class="dropdown-divider"></li>

                                    <li>
                                        <button class="dropdown-item text-danger">
                                            <i class="bi bi-trash me-2"></i>
                                            Delete
                                        </button>
                                    </li>

                                </ul>

                            </div>

                        </td>

                    </tr>


                    <!-- ROW 2 -->
                    <tr>

                        <td>
                            <div class="d-flex align-items-center gap-3">

                                <div class="patient-avatar avatar-two">
                                    SP
                                </div>

                                <div>
                                    <div class="fw-semibold">
                                        Sunita Patil
                                    </div>

                                    <small class="text-muted">
                                        VET-10182 · 98221 45678
                                    </small>
                                </div>

                            </div>
                        </td>

                        <td>
                            <div class="reminder-name">
                                <i class="bi bi-capsule"></i>
                                Medicine Completion
                            </div>

                            <small class="text-muted">
                                Medicine course completion
                            </small>
                        </td>

                        <td>
                            <div class="fw-semibold">
                                11 Sep 2026
                            </div>

                            <small class="text-danger">
                                Due Today
                            </small>
                        </td>

                        <td>
                            <span class="method-badge">
                                <i class="bi bi-whatsapp"></i>
                                WhatsApp
                            </span>
                        </td>

                        <td>
                            <span class="small">
                                Pharmacy
                            </span>
                        </td>

                        <td>
                            <span class="reminder-status status-due">
                                Due Today
                            </span>
                        </td>

                        <td class="text-end">

                            <div class="dropdown">

                                <button class="btn btn-sm btn-light border"
                                        data-bs-toggle="dropdown">
                                    <i class="bi bi-three-dots"></i>
                                </button>

                                <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0">

                                    <li>
                                        <button class="dropdown-item"
                                                data-bs-toggle="modal"
                                                data-bs-target="#viewReminderModal">
                                            <i class="bi bi-eye me-2"></i>
                                            View Reminder
                                        </button>
                                    </li>

                                    <li>
                                        <button class="dropdown-item"
                                                data-bs-toggle="modal"
                                                data-bs-target="#rescheduleReminderModal">
                                            <i class="bi bi-calendar2-week me-2"></i>
                                            Reschedule
                                        </button>
                                    </li>

                                    <li>
                                        <button class="dropdown-item">
                                            <i class="bi bi-send me-2"></i>
                                            Send Now
                                        </button>
                                    </li>

                                </ul>

                            </div>

                        </td>

                    </tr>


                    <!-- ROW 3 -->
                    <tr>

                        <td>
                            <div class="d-flex align-items-center gap-3">

                                <div class="patient-avatar avatar-three">
                                    RK
                                </div>

                                <div>
                                    <div class="fw-semibold">
                                        Rajesh Kulkarni
                                    </div>

                                    <small class="text-muted">
                                        VET-10098 · 97654 32109
                                    </small>
                                </div>

                            </div>
                        </td>

                        <td>
                            <div class="reminder-name">
                                <i class="bi bi-droplet-half"></i>
                                Sugar Monitoring
                            </div>

                            <small class="text-muted">
                                Repeat sugar reading
                            </small>
                        </td>

                        <td>
                            <div class="fw-semibold">
                                13 Sep 2026
                            </div>

                            <small class="text-muted">
                                In 2 days
                            </small>
                        </td>

                        <td>
                            <span class="method-badge">
                                <i class="bi bi-chat-left-text"></i>
                                SMS
                            </span>
                        </td>

                        <td>
                            <span class="small">
                                Dr. Samer
                            </span>
                        </td>

                        <td>
                            <span class="reminder-status status-upcoming">
                                Upcoming
                            </span>
                        </td>

                        <td class="text-end">

                            <div class="dropdown">

                                <button class="btn btn-sm btn-light border"
                                        data-bs-toggle="dropdown">
                                    <i class="bi bi-three-dots"></i>
                                </button>

                                <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0">

                                    <li>
                                        <button class="dropdown-item"
                                                data-bs-toggle="modal"
                                                data-bs-target="#viewReminderModal">
                                            <i class="bi bi-eye me-2"></i>
                                            View Reminder
                                        </button>
                                    </li>

                                    <li>
                                        <button class="dropdown-item"
                                                data-bs-toggle="modal"
                                                data-bs-target="#rescheduleReminderModal">
                                            <i class="bi bi-calendar2-week me-2"></i>
                                            Reschedule
                                        </button>
                                    </li>

                                </ul>

                            </div>

                        </td>

                    </tr>


                    <!-- ROW 4 -->
                    <tr>

                        <td>
                            <div class="d-flex align-items-center gap-3">

                                <div class="patient-avatar avatar-four">
                                    PM
                                </div>

                                <div>
                                    <div class="fw-semibold">
                                        Prakash More
                                    </div>

                                    <small class="text-muted">
                                        VET-09982 · 98901 77889
                                    </small>
                                </div>

                            </div>
                        </td>

                        <td>
                            <div class="reminder-name">
                                <i class="bi bi-heart-pulse"></i>
                                BP Monitoring
                            </div>

                            <small class="text-muted">
                                Blood pressure monitoring
                            </small>
                        </td>

                        <td>
                            <div class="fw-semibold">
                                14 Sep 2026
                            </div>

                            <small class="text-muted">
                                In 3 days
                            </small>
                        </td>

                        <td>
                            <span class="method-badge">
                                <i class="bi bi-telephone"></i>
                                Call
                            </span>
                        </td>

                        <td>
                            <span class="small">
                                Nurse
                            </span>
                        </td>

                        <td>
                            <span class="reminder-status status-completed">
                                Completed
                            </span>
                        </td>

                        <td class="text-end">

                            <div class="dropdown">

                                <button class="btn btn-sm btn-light border"
                                        data-bs-toggle="dropdown">
                                    <i class="bi bi-three-dots"></i>
                                </button>

                                <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0">

                                    <li>
                                        <button class="dropdown-item"
                                                data-bs-toggle="modal"
                                                data-bs-target="#viewReminderModal">
                                            <i class="bi bi-eye me-2"></i>
                                            View Reminder
                                        </button>
                                    </li>

                                </ul>

                            </div>

                        </td>

                    </tr>


                    <!-- ROW 5 -->
                    <tr>

                        <td>
                            <div class="d-flex align-items-center gap-3">

                                <div class="patient-avatar avatar-five">
                                    AS
                                </div>

                                <div>
                                    <div class="fw-semibold">
                                        Anjali Shah
                                    </div>

                                    <small class="text-muted">
                                        VET-09876 · 98123 45678
                                    </small>
                                </div>

                            </div>
                        </td>

                        <td>
                            <div class="reminder-name">
                                <i class="bi bi-calendar-event"></i>
                                Follow-up Visit
                            </div>

                            <small class="text-muted">
                                Review after medicine course
                            </small>
                        </td>

                        <td>
                            <div class="fw-semibold">
                                09 Sep 2026
                            </div>

                            <small class="text-danger">
                                Missed
                            </small>
                        </td>

                        <td>
                            <span class="method-badge">
                                <i class="bi bi-whatsapp"></i>
                                WhatsApp
                            </span>
                        </td>

                        <td>
                            <span class="small">
                                Dr. Samer
                            </span>
                        </td>

                        <td>
                            <span class="reminder-status status-missed">
                                Missed
                            </span>
                        </td>

                        <td class="text-end">

                            <div class="dropdown">

                                <button class="btn btn-sm btn-light border"
                                        data-bs-toggle="dropdown">
                                    <i class="bi bi-three-dots"></i>
                                </button>

                                <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0">

                                    <li>
                                        <button class="dropdown-item"
                                                data-bs-toggle="modal"
                                                data-bs-target="#viewReminderModal">
                                            <i class="bi bi-eye me-2"></i>
                                            View Reminder
                                        </button>
                                    </li>

                                    <li>
                                        <button class="dropdown-item"
                                                data-bs-toggle="modal"
                                                data-bs-target="#rescheduleReminderModal">
                                            <i class="bi bi-calendar2-week me-2"></i>
                                            Reschedule
                                        </button>
                                    </li>

                                    <li>
                                        <button class="dropdown-item">
                                            <i class="bi bi-send me-2"></i>
                                            Send Again
                                        </button>
                                    </li>

                                </ul>

                            </div>

                        </td>

                    </tr>

                </tbody>

            </table>

        </div>


        <!-- =================================================
             PAGINATION
             ================================================= -->

        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-3 p-3 p-lg-4">

            <div class="text-muted small">
                Showing <strong>1–5</strong> of <strong>248</strong> reminders
            </div>

            <nav>
                <ul class="pagination pagination-sm mb-0">

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
                        <a class="page-link" href="#">4</a>
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


    <!-- =====================================================
         TODAY'S REMINDER TIMELINE
         ===================================================== -->

    <div class="card border-0 shadow-sm mt-4">

        <div class="card-header bg-white border-0 p-3 p-lg-4">

            <div>
                <h5 class="fw-bold mb-1">
                    Today's Reminder Activity
                </h5>

                <p class="text-muted small mb-0">
                    Recent reminder activity and delivery status
                </p>
            </div>

        </div>

        <div class="card-body p-3 p-lg-4">

            <div class="reminder-timeline">

                <div class="timeline-item">
                    <div class="timeline-dot">
                        <i class="bi bi-send"></i>
                    </div>

                    <div class="timeline-content">
                        <div class="d-flex justify-content-between gap-2">
                            <strong>Medicine reminder sent</strong>
                            <small class="text-muted">10:42 AM</small>
                        </div>

                        <p class="mb-0 text-muted small">
                            WhatsApp reminder sent to Sunita Patil.
                        </p>
                    </div>
                </div>


                <div class="timeline-item">
                    <div class="timeline-dot">
                        <i class="bi bi-calendar-check"></i>
                    </div>

                    <div class="timeline-content">
                        <div class="d-flex justify-content-between gap-2">
                            <strong>Follow-up completed</strong>
                            <small class="text-muted">09:35 AM</small>
                        </div>

                        <p class="mb-0 text-muted small">
                            Prakash More's BP monitoring reminder marked completed.
                        </p>
                    </div>
                </div>


                <div class="timeline-item">
                    <div class="timeline-dot">
                        <i class="bi bi-bell"></i>
                    </div>

                    <div class="timeline-content">
                        <div class="d-flex justify-content-between gap-2">
                            <strong>New reminder created</strong>
                            <small class="text-muted">08:50 AM</small>
                        </div>

                        <p class="mb-0 text-muted small">
                            Sugar monitoring reminder created for Rajesh Kulkarni.
                        </p>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>
</main>
<!-- =========================================================
     ADD NEW REMINDER MODAL
     ========================================================= -->

<div class="modal fade"
     id="addReminderModal"
     tabindex="-1"
     aria-labelledby="addReminderModalLabel"
     aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">

        <div class="modal-content border-0 shadow-lg">

            <div class="modal-header">

                <div>
                    <h5 class="modal-title fw-bold text-white" id="addReminderModalLabel">
                        <i class="bi bi-bell me-2 text-primary"></i>
                        Add New Reminder
                    </h5>

                    <small class=" text-white">
                        Create a follow-up, medicine or monitoring reminder
                    </small>
                </div>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>

            </div>


            <form id="addReminderForm">

                <div class="modal-body p-3 p-lg-4" style="max-height: 60vh; overflow-y: auto;">

                    <!-- Patient -->
                    <div class="reminder-modal-section">

                        <div class="reminder-section-title">
                            <span>01</span>
                            Patient Information
                        </div>

                        <div class="row g-3">

                            <div class="col-12">

                                <label class="form-label">
                                    Search Patient <span class="text-danger">*</span>
                                </label>

                                <div class="input-group">

                                    <span class="input-group-text bg-white">
                                        <i class="bi bi-search"></i>
                                    </span>

                                    <input type="text"
                                           class="form-control"
                                           placeholder="Search patient by name, mobile or registration no."
                                           required>

                                    <button type="button"
                                            class="btn btn-outline-primary">
                                        Search
                                    </button>

                                </div>

                            </div>


                            <div class="col-md-5">

                                <label class="form-label">
                                    Registration No.
                                </label>

                                <input type="text"
                                       class="form-control"
                                       value="VET-10245"
                                       readonly>

                            </div>


                            <div class="col-md-7">

                                <label class="form-label">
                                    Patient Name
                                </label>

                                <input type="text"
                                       class="form-control"
                                       value="Amit More"
                                       readonly>

                            </div>

                        </div>

                    </div>


                    <!-- Reminder Details -->
                    <div class="reminder-modal-section">

                        <div class="reminder-section-title">
                            <span>02</span>
                            Reminder Details
                        </div>

                        <div class="row g-3">

                            <div class="col-md-6">

                                <label class="form-label">
                                    Reminder Type <span class="text-danger">*</span>
                                </label>

                                <select class="form-select" required>
                                    <option value="">Select reminder type</option>
                                    <option>Follow-up Visit</option>
                                    <option>Medicine Completion</option>
                                    <option>BP Monitoring</option>
                                    <option>Sugar Monitoring</option>
                                    <option>Appointment</option>
                                    <option>Medical Review</option>
                                    <option>Other</option>
                                </select>

                            </div>


                            <div class="col-md-6">

                                <label class="form-label">
                                    Reminder Priority
                                </label>

                                <select class="form-select">
                                    <option>Normal</option>
                                    <option>High</option>
                                    <option>Urgent</option>
                                </select>

                            </div>


                            <div class="col-md-6">

                                <label class="form-label">
                                    Reminder Date <span class="text-danger">*</span>
                                </label>

                                <input type="date"
                                       class="form-control"
                                       required>

                            </div>


                            <div class="col-md-6">

                                <label class="form-label">
                                    Reminder Time
                                </label>

                                <input type="time"
                                       class="form-control"
                                       value="09:00">

                            </div>


                            <div class="col-12">

                                <label class="form-label">
                                    Reminder Title <span class="text-danger">*</span>
                                </label>

                                <input type="text"
                                       class="form-control"
                                       placeholder="e.g. Follow-up consultation"
                                       required>

                            </div>


                            <div class="col-12">

                                <label class="form-label">
                                    Reminder Message
                                </label>

                                <textarea class="form-control"
                                          rows="3"
                                          placeholder="Enter reminder message for patient..."></textarea>

                            </div>

                        </div>

                    </div>


                    <!-- Notification -->
                    <div class="reminder-modal-section">

                        <div class="reminder-section-title">
                            <span>03</span>
                            Notification Settings
                        </div>

                        <div class="row g-3">

                            <div class="col-12">

                                <label class="form-label d-block">
                                    Reminder Method
                                </label>

                                <div class="row g-2">

                                    <div class="col-6 col-md-3">
                                        <div class="notification-option">
                                            <input class="form-check-input"
                                                   type="checkbox"
                                                   id="methodWhatsapp"
                                                   checked>

                                            <label for="methodWhatsapp">
                                                <i class="bi bi-whatsapp"></i>
                                                WhatsApp
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-3">
                                        <div class="notification-option">
                                            <input class="form-check-input"
                                                   type="checkbox"
                                                   id="methodSms">

                                            <label for="methodSms">
                                                <i class="bi bi-chat-left-text"></i>
                                                SMS
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-3">
                                        <div class="notification-option">
                                            <input class="form-check-input"
                                                   type="checkbox"
                                                   id="methodCall">

                                            <label for="methodCall">
                                                <i class="bi bi-telephone"></i>
                                                Call
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-3">
                                        <div class="notification-option">
                                            <input class="form-check-input"
                                                   type="checkbox"
                                                   id="methodManual">

                                            <label for="methodManual">
                                                <i class="bi bi-person"></i>
                                                Manual
                                            </label>
                                        </div>
                                    </div>

                                </div>

                            </div>


                            <div class="col-md-6">

                                <label class="form-label">
                                    Send Reminder
                                </label>

                                <select class="form-select">
                                    <option>On reminder date</option>
                                    <option>1 day before</option>
                                    <option>2 days before</option>
                                    <option>3 days before</option>
                                    <option>Custom schedule</option>
                                </select>

                            </div>


                            <div class="col-md-6">

                                <label class="form-label">
                                    Assigned Staff
                                </label>

                                <select class="form-select">
                                    <option>Dr. Samer Jawalkar</option>
                                    <option>Medical Staff</option>
                                    <option>Pharmacy</option>
                                    <option>Nurse</option>
                                    <option>Admin</option>
                                </select>

                            </div>

                        </div>

                    </div>


                    <!-- Additional -->
                    <div class="reminder-modal-section mb-0">

                        <div class="reminder-section-title">
                            <span>04</span>
                            Additional Information
                        </div>

                        <div class="row g-3">

                            <div class="col-md-6">

                                <label class="form-label">
                                    Related Medicine
                                </label>

                                <input type="text"
                                       class="form-control"
                                       placeholder="Optional">

                            </div>


                            <div class="col-md-6">

                                <label class="form-label">
                                    Related Follow-up
                                </label>

                                <input type="text"
                                       class="form-control"
                                       placeholder="Optional">

                            </div>


                            <div class="col-12">

                                <label class="form-label">
                                    Internal Notes
                                </label>

                                <textarea class="form-control"
                                          rows="2"
                                          placeholder="Internal notes for clinic staff..."></textarea>

                            </div>


                            <div class="col-12">

                                <div class="form-check form-switch">

                                    <input class="form-check-input"
                                           type="checkbox"
                                           id="enableReminder"
                                           checked>

                                    <label class="form-check-label"
                                           for="enableReminder">
                                        Enable this reminder
                                    </label>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                <div class="modal-footer bg-light">

                    <button type="button"
                            class="btn btn-light border"
                            data-bs-dismiss="modal">
                        Cancel
                    </button>

                    <button type="submit"
                            class="btn btn-primary">
                        <i class="bi bi-check-lg me-1"></i>
                        Create Reminder
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>


<!-- =========================================================
     VIEW REMINDER MODAL
     ========================================================= -->

<div class="modal fade"
     id="viewReminderModal"
     tabindex="-1"
     aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content border-0 shadow-lg">

            <div class="modal-header">

                <div>
                    <h5 class="modal-title fw-bold">
                        Reminder Details
                    </h5>

                    <small class="text-muted">
                        Reminder #REM-2026-00125
                    </small>
                </div>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"></button>

            </div>

            <div class="modal-body p-3 p-lg-4" style="max-height: 60vh; overflow-y: auto;">

                <div class="reminder-detail-profile">

                    <div class="patient-avatar">
                        AM
                    </div>

                    <div>
                        <h6 class="fw-bold mb-1">
                            Amit More
                        </h6>

                        <small class="text-muted">
                            VET-10245 · 98765 43210
                        </small>
                    </div>

                </div>


                <div class="detail-list mt-4">

                    <div>
                        <span>Reminder Type</span>
                        <strong>Follow-up Visit</strong>
                    </div>

                    <div>
                        <span>Reminder Date</span>
                        <strong>12 Sep 2026, 09:00 AM</strong>
                    </div>

                    <div>
                        <span>Notification</span>
                        <strong>
                            <i class="bi bi-whatsapp me-1"></i>
                            WhatsApp
                        </strong>
                    </div>

                    <div>
                        <span>Status</span>
                        <strong>
                            <span class="reminder-status status-upcoming">
                                Upcoming
                            </span>
                        </strong>
                    </div>

                    <div>
                        <span>Created By</span>
                        <strong>Dr. Samer</strong>
                    </div>

                </div>


                <div class="reminder-message-box mt-3">

                    <small class="text-muted d-block mb-1">
                        Reminder Message
                    </small>

                    <div class="small">
                        Please visit Vetal Clinic for your scheduled follow-up consultation.
                    </div>

                </div>

            </div>

            <div class="modal-footer bg-light">

                <button type="button"
                        class="btn btn-light border"
                        data-bs-dismiss="modal">
                    Close
                </button>

                <button type="button"
                        class="btn btn-primary">
                    <i class="bi bi-send me-1"></i>
                    Send Now
                </button>

            </div>

        </div>

    </div>

</div>


<!-- =========================================================
     RESCHEDULE MODAL
     ========================================================= -->

<div class="modal fade"
     id="rescheduleReminderModal"
     tabindex="-1"
     aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content border-0 shadow-lg">

            <div class="modal-header">

                <div>
                    <h5 class="modal-title fw-bold">
                        <i class="bi bi-calendar2-week me-2 text-primary"></i>
                        Reschedule Reminder
                    </h5>

                    <small class="text-muted">
                        Update reminder date and notification time
                    </small>
                </div>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"></button>

            </div>

            <div class="modal-body p-3 p-lg-4">

                <div class="reschedule-patient mb-4">

                    <div class="patient-avatar">
                        AM
                    </div>

                    <div>
                        <strong>Amit More</strong>
                        <small class="text-muted d-block">
                            Follow-up Visit · VET-10245
                        </small>
                    </div>

                </div>


                <div class="row g-3">

                    <div class="col-md-6">

                        <label class="form-label">
                            New Date
                        </label>

                        <input type="date"
                               class="form-control"
                               value="2026-09-12">

                    </div>

                    <div class="col-md-6">

                        <label class="form-label">
                            New Time
                        </label>

                        <input type="time"
                               class="form-control"
                               value="09:00">

                    </div>

                    <div class="col-12">

                        <label class="form-label">
                            Reason
                        </label>

                        <textarea class="form-control"
                                  rows="3"
                                  placeholder="Reason for rescheduling..."></textarea>

                    </div>

                </div>

            </div>

            <div class="modal-footer bg-light">

                <button type="button"
                        class="btn btn-light border"
                        data-bs-dismiss="modal">
                    Cancel
                </button>

                <button type="button"
                        class="btn btn-primary">
                    <i class="bi bi-calendar-check me-1"></i>
                    Update Reminder
                </button>

            </div>

        </div>

    </div>

</div>


<!-- =========================================================
     PAGE CSS
     Scoped so existing dashboard styling remains untouched.
     ========================================================= -->

<style>

    /* ===============================
       PAGE BASE
       =============================== */

    .reminder-page {
        width: 100%;
        min-width: 0;
    }

    .reminder-page-header {
        padding-top: 2px;
    }

    .reminder-page-icon {
        width: 42px;
        height: 42px;
        border-radius: 12px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: rgba(var(--bs-primary-rgb), .10);
        color: var(--bs-primary);
        font-size: 20px;
        flex: 0 0 auto;
    }

    .reminder-breadcrumb {
        font-size: 12px;
    }

    .reminder-breadcrumb a {
        color: inherit;
        text-decoration: none;
    }

    .reminder-add-btn {
        min-height: 42px;
        padding: 9px 17px;
        font-weight: 600;
        border-radius: 9px;
        white-space: nowrap;
    }


    /* ===============================
       STAT CARDS
       =============================== */

    .reminder-stat-card {
        height: 100%;
        min-height: 118px;
        padding: 18px;
        border: 1px solid rgba(0,0,0,.07);
        border-radius: 14px;
        background: #fff;
        display: flex;
        align-items: center;
        gap: 15px;
        box-shadow: 0 4px 18px rgba(0,0,0,.035);
        transition: all .2s ease;
    }

    .reminder-stat-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(0,0,0,.07);
    }

    .reminder-stat-icon {
        width: 48px;
        height: 48px;
        border-radius: 13px;
        background: rgba(var(--bs-primary-rgb), .10);
        color: var(--bs-primary);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 21px;
        flex: 0 0 auto;
    }

    .reminder-icon-info {
        background: rgba(13, 110, 253, .10);
        color: #0d6efd;
    }

    .reminder-icon-warning {
        background: rgba(255, 193, 7, .14);
        color: #b58100;
    }

    .reminder-icon-success {
        background: rgba(25, 135, 84, .11);
        color: #198754;
    }

    .reminder-stat-content {
        min-width: 0;
    }

    .reminder-stat-content span {
        display: block;
        color: #6c757d;
        font-size: 12px;
        margin-bottom: 3px;
    }

    .reminder-stat-content h3 {
        font-size: 24px;
        margin: 0 0 2px;
        font-weight: 700;
        line-height: 1.1;
    }

    .reminder-stat-content small {
        color: #8a929a;
        font-size: 11px;
    }


    /* ===============================
       CATEGORY CARDS
       =============================== */

    .reminder-category-card {
        min-height: 92px;
        padding: 15px;
        background: #fff;
        border: 1px solid rgba(0,0,0,.07);
        border-radius: 13px;
        display: flex;
        align-items: center;
        gap: 12px;
        cursor: pointer;
        transition: .2s ease;
    }

    .reminder-category-card:hover {
        border-color: rgba(var(--bs-primary-rgb), .30);
        transform: translateY(-2px);
        box-shadow: 0 7px 22px rgba(0,0,0,.05);
    }

    .category-icon {
        width: 42px;
        height: 42px;
        border-radius: 11px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(var(--bs-primary-rgb), .09);
        color: var(--bs-primary);
        flex: 0 0 auto;
    }

    .category-info {
        min-width: 0;
        flex: 1;
    }

    .category-info span {
        display: block;
        color: #6c757d;
        font-size: 12px;
    }

    .category-info strong {
        display: block;
        font-size: 19px;
        line-height: 1.2;
    }

    .category-info small {
        color: #9aa0a6;
        font-size: 10px;
    }

    .category-arrow {
        color: #adb5bd;
    }


    /* ===============================
       MAIN CARD
       =============================== */

    .reminder-main-card {
        overflow: hidden;
        border-radius: 14px;
    }

    .reminder-filter-area {
        padding: 13px;
        background: #f8f9fa;
        border: 1px solid #edf0f2;
        border-radius: 11px;
    }

    .reminder-filter-area .form-control,
    .reminder-filter-area .form-select,
    .reminder-filter-area .input-group-text {
        min-height: 39px;
        font-size: 12px;
        border-color: #e2e6ea;
    }


    /* ===============================
       TABLE
       =============================== */

    .reminder-table-wrapper {
        border-top: 1px solid #edf0f2;
    }

    .reminder-table {
        min-width: 950px;
        font-size: 12px;
    }

    .reminder-table thead th {
        padding: 13px 15px;
        background: #f8f9fa;
        color: #6c757d;
        font-size: 11px;
        font-weight: 700;
        white-space: nowrap;
        border-bottom: 1px solid #e9ecef;
    }

    .reminder-table tbody td {
        padding: 14px 15px;
        border-bottom: 1px solid #f0f1f2;
        vertical-align: middle;
    }

    .reminder-table tbody tr:last-child td {
        border-bottom: 0;
    }

    .reminder-table tbody tr:hover {
        background: rgba(var(--bs-primary-rgb), .025);
    }

    .patient-avatar {
        width: 39px;
        height: 39px;
        border-radius: 11px;
        background: rgba(var(--bs-primary-rgb), .12);
        color: var(--bs-primary);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 11px;
        flex: 0 0 auto;
    }

    .avatar-two {
        background: rgba(111, 66, 193, .11);
        color: #6f42c1;
    }

    .avatar-three {
        background: rgba(13, 110, 253, .10);
        color: #0d6efd;
    }

    .avatar-four {
        background: rgba(25, 135, 84, .11);
        color: #198754;
    }

    .avatar-five {
        background: rgba(220, 53, 69, .10);
        color: #dc3545;
    }

    .reminder-name {
        font-weight: 600;
        display: flex;
        align-items: center;
        gap: 7px;
    }

    .reminder-name i {
        color: var(--bs-primary);
    }

    .method-badge {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        padding: 5px 8px;
        border-radius: 7px;
        background: #f8f9fa;
        border: 1px solid #e9ecef;
        font-size: 10px;
        white-space: nowrap;
    }

    .method-badge i {
        color: #198754;
    }

    .reminder-status {
        display: inline-flex;
        align-items: center;
        padding: 5px 9px;
        border-radius: 20px;
        font-size: 10px;
        font-weight: 600;
        white-space: nowrap;
    }

    .status-upcoming {
        background: rgba(13, 110, 253, .10);
        color: #0d6efd;
    }

    .status-due {
        background: rgba(255, 193, 7, .15);
        color: #966d00;
    }

    .status-completed {
        background: rgba(25, 135, 84, .11);
        color: #198754;
    }

    .status-missed {
        background: rgba(220, 53, 69, .10);
        color: #dc3545;
    }


    /* ===============================
       TIMELINE
       =============================== */

    .reminder-timeline {
        position: relative;
        margin-left: 9px;
    }

    .reminder-timeline::before {
        content: "";
        position: absolute;
        left: 15px;
        top: 17px;
        bottom: 17px;
        width: 1px;
        background: #e5e7eb;
    }

    .timeline-item {
        position: relative;
        display: flex;
        gap: 15px;
        padding-bottom: 22px;
    }

    .timeline-item:last-child {
        padding-bottom: 0;
    }

    .timeline-dot {
        width: 31px;
        height: 31px;
        border-radius: 50%;
        background: rgba(var(--bs-primary-rgb), .10);
        color: var(--bs-primary);
        border: 4px solid #fff;
        box-shadow: 0 0 0 1px #e8eaed;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        z-index: 1;
        flex: 0 0 auto;
        font-size: 12px;
    }

    .timeline-content {
        flex: 1;
        min-width: 0;
        padding-top: 3px;
    }


    /* ===============================
       MODAL
       =============================== */

    .reminder-modal-section {
        padding-bottom: 22px;
        margin-bottom: 22px;
        border-bottom: 1px solid #edf0f2;
    }

    .reminder-section-title {
        display: flex;
        align-items: center;
        gap: 9px;
        font-size: 13px;
        font-weight: 700;
        margin-bottom: 16px;
    }

    .reminder-section-title span {
        width: 27px;
        height: 27px;
        border-radius: 8px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: rgba(var(--bs-primary-rgb), .10);
        color: var(--bs-primary);
        font-size: 10px;
    }

    .reminder-page .form-label,
    .modal .form-label {
        font-size: 11px;
        font-weight: 600;
        color: #495057;
        margin-bottom: 6px;
    }

    .reminder-page .form-control,
    .reminder-page .form-select,
    .modal .form-control,
    .modal .form-select {
        border-radius: 8px;
        min-height: 40px;
        font-size: 12px;
    }

    .modal textarea.form-control {
        min-height: auto;
    }

    .notification-option {
        min-height: 45px;
        border: 1px solid #e3e6e9;
        border-radius: 9px;
        padding: 9px 10px;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: .2s ease;
    }

    .notification-option:hover {
        border-color: rgba(var(--bs-primary-rgb), .35);
        background: rgba(var(--bs-primary-rgb), .025);
    }

    .notification-option label {
        font-size: 11px;
        cursor: pointer;
        flex: 1;
    }

    .notification-option label i {
        color: var(--bs-primary);
        margin-right: 5px;
    }


    /* ===============================
       DETAIL MODAL
       =============================== */

    .reminder-detail-profile,
    .reschedule-patient {
        display: flex;
        align-items: center;
        gap: 13px;
        padding: 13px;
        background: #f8f9fa;
        border: 1px solid #edf0f2;
        border-radius: 10px;
    }

    .detail-list {
        border-top: 1px solid #edf0f2;
    }

    .detail-list > div {
        display: flex;
        justify-content: space-between;
        gap: 15px;
        padding: 11px 0;
        border-bottom: 1px solid #edf0f2;
        font-size: 12px;
    }

    .detail-list span:first-child {
        color: #6c757d;
    }

    .detail-list strong {
        text-align: right;
    }

    .reminder-message-box {
        padding: 12px;
        background: rgba(var(--bs-primary-rgb), .045);
        border: 1px solid rgba(var(--bs-primary-rgb), .10);
        border-radius: 9px;
    }


    /* ===============================
       MOBILE
       =============================== */

    @media (max-width: 991.98px) {

        .reminder-stat-card {
            min-height: 105px;
        }

        .reminder-table-wrapper {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

    }


    @media (max-width: 767.98px) {

        .reminder-page-header h4 {
            font-size: 19px;
        }

        .reminder-add-btn {
            width: 100%;
        }

        .reminder-stat-card {
            padding: 15px;
        }

        .reminder-stat-icon {
            width: 43px;
            height: 43px;
        }

        .reminder-stat-content h3 {
            font-size: 21px;
        }

        .reminder-category-card {
            min-height: 82px;
        }

        .reminder-filter-area {
            padding: 10px;
        }

        .timeline-content .d-flex {
            align-items: flex-start !important;
            flex-direction: column;
            gap: 3px !important;
        }

        .detail-list > div {
            flex-direction: column;
            gap: 4px;
        }

        .detail-list strong {
            text-align: left;
        }

    }


    @media (max-width: 575.98px) {

        .reminder-page-icon {
            width: 38px;
            height: 38px;
            font-size: 17px;
        }

        .reminder-stat-card {
            min-height: 95px;
        }

        .reminder-stat-icon {
            width: 40px;
            height: 40px;
            font-size: 18px;
        }

        .reminder-stat-content h3 {
            font-size: 19px;
        }

        .reminder-category-card {
            padding: 12px;
        }

        .category-icon {
            width: 38px;
            height: 38px;
        }

        .reminder-modal-section {
            padding-bottom: 18px;
            margin-bottom: 18px;
        }

    }

</style>


<!-- =========================================================
     OPTIONAL FORM SUBMIT HANDLER
     Frontend demo only
     ========================================================= -->

<script>

document.addEventListener("DOMContentLoaded", function () {

    const reminderForm = document.getElementById("addReminderForm");

    if (reminderForm) {

        reminderForm.addEventListener("submit", function (event) {

            event.preventDefault();

            if (!reminderForm.checkValidity()) {
                reminderForm.classList.add("was-validated");
                return;
            }

            /*
             * Connect this form to your existing backend/API here.
             * No dashboard shell or theme changes are made.
             */

            const modalElement =
                document.getElementById("addReminderModal");

            const modalInstance =
                bootstrap.Modal.getInstance(modalElement);

            if (modalInstance) {
                modalInstance.hide();
            }

        });

    }

});

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<body>
</html>