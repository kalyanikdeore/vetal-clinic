<?php include('header.php'); ?>
<!-- =========================================================
     VETAL CLINIC OPD
     BP PATIENTS MANAGEMENT
     
     CONTENT AREA ONLY
     Existing Header / Sidebar / Footer unchanged
========================================================= -->
<main class="content">
<div class="bp-patients-page">

    <!-- =====================================================
         PAGE HEADER
    ====================================================== -->

    <div class="bp-page-header">

        <div>

            <div class="bp-breadcrumb">

                <span>
                    <i class="bi bi-house"></i>
                    Dashboard
                </span>

                <i class="bi bi-chevron-right"></i>

                <span>
                    BP Patients
                </span>

            </div>

            <h2 class="bp-page-title">
                BP Patients
            </h2>

            <p class="bp-page-subtitle">
                Monitor blood pressure patients, readings, treatment and follow-ups.
            </p>

        </div>


        <div class="bp-page-header-action">

            <button
                type="button"
                class="btn bp-primary-btn"
                data-bs-toggle="modal"
                data-bs-target="#addBPPatientModal">

                <i class="bi bi-person-plus me-2"></i>

                Add New BP Patient

            </button>

        </div>

    </div>


    <!-- =====================================================
         STATISTICS
    ====================================================== -->

    <div class="row g-3 mb-4">


        <!-- TOTAL -->

        <div class="col-xl-3 col-md-6">

            <div class="bp-stat-card">

                <div class="bp-stat-icon">

                    <i class="bi bi-people"></i>

                </div>

                <div class="bp-stat-content">

                    <div class="bp-stat-label">
                        Total BP Patients
                    </div>

                    <div class="bp-stat-value">
                        386
                    </div>

                    <div class="bp-stat-note">
                        Registered patients
                    </div>

                </div>

            </div>

        </div>


        <!-- HIGH BP -->

        <div class="col-xl-3 col-md-6">

            <div class="bp-stat-card">

                <div class="bp-stat-icon high">

                    <i class="bi bi-heart-pulse"></i>

                </div>

                <div class="bp-stat-content">

                    <div class="bp-stat-label">
                        High BP
                    </div>

                    <div class="bp-stat-value">
                        74
                    </div>

                    <div class="bp-stat-note">
                        Need monitoring
                    </div>

                </div>

            </div>

        </div>


        <!-- CONTROLLED -->

        <div class="col-xl-3 col-md-6">

            <div class="bp-stat-card">

                <div class="bp-stat-icon controlled">

                    <i class="bi bi-check-circle"></i>

                </div>

                <div class="bp-stat-content">

                    <div class="bp-stat-label">
                        Controlled BP
                    </div>

                    <div class="bp-stat-value">
                        247
                    </div>

                    <div class="bp-stat-note">
                        Under monitoring
                    </div>

                </div>

            </div>

        </div>


        <!-- FOLLOW UP -->

        <div class="col-xl-3 col-md-6">

            <div class="bp-stat-card">

                <div class="bp-stat-icon followup">

                    <i class="bi bi-calendar-check"></i>

                </div>

                <div class="bp-stat-content">

                    <div class="bp-stat-label">
                        Follow-ups Due
                    </div>

                    <div class="bp-stat-value">
                        18
                    </div>

                    <div class="bp-stat-note">
                        Next 7 days
                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- =====================================================
         QUICK BP MONITORING PANEL
    ====================================================== -->

    <div class="bp-monitor-card mb-4">

        <div class="bp-monitor-left">

            <div class="bp-monitor-icon">

                <i class="bi bi-heart-pulse-fill"></i>

            </div>

            <div>

                <strong>
                    Blood Pressure Monitoring
                </strong>

                <span>
                    Track patient readings and identify patients
                    requiring closer monitoring.
                </span>

            </div>

        </div>


        <div class="bp-monitor-summary">

            <div>

                <small>
                    Today's Readings
                </small>

                <strong>
                    42
                </strong>

            </div>

            <div>

                <small>
                    High Reading
                </small>

                <strong>
                    07
                </strong>

            </div>

            <div>

                <small>
                    Follow-up Due
                </small>

                <strong>
                    05
                </strong>

            </div>

        </div>

    </div>


    <!-- =====================================================
         FILTER CARD
    ====================================================== -->

    <div class="bp-filter-card">

        <div class="row g-3 align-items-end">


            <!-- SEARCH -->

            <div class="col-xl-3 col-lg-4 col-md-6">

                <label class="bp-form-label">
                    Search Patient
                </label>

                <div class="bp-input-icon">

                    <i class="bi bi-search"></i>

                    <input
                        type="text"
                        class="form-control"
                        placeholder="Name, mobile or registration no.">

                </div>

            </div>


            <!-- BP STATUS -->

            <div class="col-xl-2 col-lg-3 col-md-6">

                <label class="bp-form-label">
                    BP Status
                </label>

                <select class="form-select">

                    <option value="">
                        All Status
                    </option>

                    <option>
                        Normal
                    </option>

                    <option>
                        Elevated
                    </option>

                    <option>
                        High BP
                    </option>

                    <option>
                        Critical
                    </option>

                </select>

            </div>


            <!-- FOLLOW UP -->

            <div class="col-xl-2 col-lg-3 col-md-6">

                <label class="bp-form-label">
                    Follow-up
                </label>

                <select class="form-select">

                    <option value="">
                        All
                    </option>

                    <option>
                        Due Today
                    </option>

                    <option>
                        Due This Week
                    </option>

                    <option>
                        Upcoming
                    </option>

                    <option>
                        Overdue
                    </option>

                </select>

            </div>


            <!-- DATE -->

            <div class="col-xl-2 col-lg-3 col-md-6">

                <label class="bp-form-label">
                    Last Reading
                </label>

                <select class="form-select">

                    <option value="">
                        Any Date
                    </option>

                    <option>
                        Today
                    </option>

                    <option>
                        Last 7 Days
                    </option>

                    <option>
                        Last 30 Days
                    </option>

                    <option>
                        More than 30 Days
                    </option>

                </select>

            </div>


            <!-- ACTION -->

            <div class="col-xl-3 col-lg-12">

                <div class="bp-filter-actions">

                    <button
                        type="button"
                        class="btn bp-primary-btn">

                        <i class="bi bi-search me-1"></i>

                        Search

                    </button>

                    <button
                        type="button"
                        class="btn bp-light-btn">

                        <i class="bi bi-arrow-clockwise me-1"></i>

                        Reset

                    </button>

                </div>

            </div>

        </div>

    </div>


    <!-- =====================================================
         PATIENT LIST
    ====================================================== -->

    <div class="bp-list-card">


        <!-- LIST HEADER -->

        <div class="bp-list-header">

            <div>

                <h5>
                    BP Patient Records
                </h5>

                <span>
                    Patients currently under blood pressure monitoring
                </span>

            </div>


            <div class="bp-record-count">

                386 Patients

            </div>

        </div>


        <!-- =================================================
             TABLE
        ================================================== -->

        <div class="table-responsive">

            <table class="table bp-table align-middle">

                <thead>

                    <tr>

                        <th>
                            Patient
                        </th>

                        <th>
                            Latest BP
                        </th>

                        <th>
                            Pulse
                        </th>

                        <th>
                            BP Status
                        </th>

                        <th>
                            Medication
                        </th>

                        <th>
                            Next Follow-up
                        </th>

                        <th class="text-end">
                            Action
                        </th>

                    </tr>

                </thead>


                <tbody>


                    <!-- =================================================
                         PATIENT 1
                    ================================================== -->

                    <tr>

                        <td>

                            <div class="bp-patient">

                                <div class="bp-avatar">
                                    DS
                                </div>

                                <div>

                                    <strong>
                                        Divya Sonawane
                                    </strong>

                                    <small>
                                        REG-24634-26
                                    </small>

                                    <small>
                                        29 Years • Female
                                    </small>

                                </div>

                            </div>

                        </td>


                        <td>

                            <div class="bp-reading">

                                <strong>
                                    128/82
                                </strong>

                                <small>
                                    mmHg
                                </small>

                            </div>

                            <div class="bp-reading-date">
                                05 Sep 2026
                            </div>

                        </td>


                        <td>

                            <span class="bp-pulse">
                                76 bpm
                            </span>

                        </td>


                        <td>

                            <span class="bp-status normal">

                                <i class="bi bi-check-circle"></i>

                                Normal

                            </span>

                        </td>


                        <td>

                            <span class="bp-medication active">

                                <i class="bi bi-capsule"></i>

                                Active

                            </span>

                        </td>


                        <td>

                            <div class="bp-followup">

                                <strong>
                                    12 Sep 2026
                                </strong>

                                <small>
                                    7 days
                                </small>

                            </div>

                        </td>


                        <td>

                            <div class="bp-actions">

                                <button
                                    type="button"
                                    class="bp-action-btn"
                                    title="View Patient">

                                    <i class="bi bi-eye"></i>

                                </button>


                                <button
                                    type="button"
                                    class="bp-action-btn"
                                    title="BP History">

                                    <i class="bi bi-graph-up"></i>

                                </button>


                                <button
                                    type="button"
                                    class="bp-action-btn"
                                    title="Add Reading">

                                    <i class="bi bi-plus-circle"></i>

                                </button>

                            </div>

                        </td>

                    </tr>


                    <!-- =================================================
                         PATIENT 2
                    ================================================== -->

                    <tr>

                        <td>

                            <div class="bp-patient">

                                <div class="bp-avatar">
                                    RK
                                </div>

                                <div>

                                    <strong>
                                        Rahul Kulkarni
                                    </strong>

                                    <small>
                                        REG-24589-26
                                    </small>

                                    <small>
                                        47 Years • Male
                                    </small>

                                </div>

                            </div>

                        </td>


                        <td>

                            <div class="bp-reading high-value">

                                <strong>
                                    158/96
                                </strong>

                                <small>
                                    mmHg
                                </small>

                            </div>

                            <div class="bp-reading-date">
                                05 Sep 2026
                            </div>

                        </td>


                        <td>

                            <span class="bp-pulse">
                                88 bpm
                            </span>

                        </td>


                        <td>

                            <span class="bp-status high">

                                <i class="bi bi-exclamation-circle"></i>

                                High BP

                            </span>

                        </td>


                        <td>

                            <span class="bp-medication active">

                                <i class="bi bi-capsule"></i>

                                Active

                            </span>

                        </td>


                        <td>

                            <div class="bp-followup due">

                                <strong>
                                    Today
                                </strong>

                                <small>
                                    Follow-up due
                                </small>

                            </div>

                        </td>


                        <td>

                            <div class="bp-actions">

                                <button class="bp-action-btn">
                                    <i class="bi bi-eye"></i>
                                </button>

                                <button class="bp-action-btn">
                                    <i class="bi bi-graph-up"></i>
                                </button>

                                <button class="bp-action-btn">
                                    <i class="bi bi-plus-circle"></i>
                                </button>

                            </div>

                        </td>

                    </tr>


                    <!-- =================================================
                         PATIENT 3
                    ================================================== -->

                    <tr>

                        <td>

                            <div class="bp-patient">

                                <div class="bp-avatar">
                                    AM
                                </div>

                                <div>

                                    <strong>
                                        Amit More
                                    </strong>

                                    <small>
                                        REG-24577-26
                                    </small>

                                    <small>
                                        56 Years • Male
                                    </small>

                                </div>

                            </div>

                        </td>


                        <td>

                            <div class="bp-reading critical-value">

                                <strong>
                                    176/108
                                </strong>

                                <small>
                                    mmHg
                                </small>

                            </div>

                            <div class="bp-reading-date">
                                04 Sep 2026
                            </div>

                        </td>


                        <td>

                            <span class="bp-pulse">
                                94 bpm
                            </span>

                        </td>


                        <td>

                            <span class="bp-status critical">

                                <i class="bi bi-exclamation-triangle"></i>

                                Critical

                            </span>

                        </td>


                        <td>

                            <span class="bp-medication pending">

                                <i class="bi bi-capsule"></i>

                                Review

                            </span>

                        </td>


                        <td>

                            <div class="bp-followup overdue">

                                <strong>
                                    Overdue
                                </strong>

                                <small>
                                    2 days ago
                                </small>

                            </div>

                        </td>


                        <td>

                            <div class="bp-actions">

                                <button class="bp-action-btn">
                                    <i class="bi bi-eye"></i>
                                </button>

                                <button class="bp-action-btn">
                                    <i class="bi bi-graph-up"></i>
                                </button>

                                <button class="bp-action-btn">
                                    <i class="bi bi-plus-circle"></i>
                                </button>

                            </div>

                        </td>

                    </tr>


                    <!-- =================================================
                         PATIENT 4
                    ================================================== -->

                    <tr>

                        <td>

                            <div class="bp-patient">

                                <div class="bp-avatar">
                                    SP
                                </div>

                                <div>

                                    <strong>
                                        Sneha Patil
                                    </strong>

                                    <small>
                                        REG-24561-26
                                    </small>

                                    <small>
                                        38 Years • Female
                                    </small>

                                </div>

                            </div>

                        </td>


                        <td>

                            <div class="bp-reading">

                                <strong>
                                    134/86
                                </strong>

                                <small>
                                    mmHg
                                </small>

                            </div>

                            <div class="bp-reading-date">
                                03 Sep 2026
                            </div>

                        </td>


                        <td>

                            <span class="bp-pulse">
                                79 bpm
                            </span>

                        </td>


                        <td>

                            <span class="bp-status elevated">

                                <i class="bi bi-dash-circle"></i>

                                Elevated

                            </span>

                        </td>


                        <td>

                            <span class="bp-medication active">

                                <i class="bi bi-capsule"></i>

                                Active

                            </span>

                        </td>


                        <td>

                            <div class="bp-followup">

                                <strong>
                                    10 Sep 2026
                                </strong>

                                <small>
                                    5 days
                                </small>

                            </div>

                        </td>


                        <td>

                            <div class="bp-actions">

                                <button class="bp-action-btn">
                                    <i class="bi bi-eye"></i>
                                </button>

                                <button class="bp-action-btn">
                                    <i class="bi bi-graph-up"></i>
                                </button>

                                <button class="bp-action-btn">
                                    <i class="bi bi-plus-circle"></i>
                                </button>

                            </div>

                        </td>

                    </tr>


                </tbody>

            </table>

        </div>


        <!-- =================================================
             PAGINATION
        ================================================== -->

        <div class="bp-pagination">

            <div class="bp-pagination-info">

                Showing
                <strong>1-10</strong>
                of
                <strong>386</strong>
                patients

            </div>


            <div class="bp-pages">

                <button class="bp-page-btn">

                    <i class="bi bi-chevron-left"></i>

                </button>

                <button class="bp-page-btn active">
                    1
                </button>

                <button class="bp-page-btn">
                    2
                </button>

                <button class="bp-page-btn">
                    3
                </button>

                <span>
                    ...
                </span>

                <button class="bp-page-btn">
                    39
                </button>

                <button class="bp-page-btn">

                    <i class="bi bi-chevron-right"></i>

                </button>

            </div>

        </div>

    </div>

</div>
</main>

<!-- =========================================================
     ADD NEW BP PATIENT MODAL
========================================================= -->

<div
    class="modal fade"
    id="addBPPatientModal"
    tabindex="-1"
    aria-labelledby="addBPPatientModalLabel"
    aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-xl">

        <div class="modal-content bp-modal">


            <!-- =================================================
                 MODAL HEADER
            ================================================== -->

            <div class="modal-header bp-modal-header">

                <div class="bp-modal-heading">

                    <div class="bp-modal-icon">

                        <i class="bi bi-heart-pulse"></i>

                    </div>

                    <div>

                        <h5
                            class="modal-title text-white"
                            id="addBPPatientModalLabel">

                            Add New BP Patient

                        </h5>

                        <p class="text-white">
                            Register a patient for blood pressure monitoring.
                        </p>

                    </div>

                </div>


                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close">
                </button>

            </div>


            <!-- =================================================
                 MODAL BODY
            ================================================== -->

            <div class="modal-body bp-modal-body">

                <form id="addBPPatientForm">


                    <!-- =================================================
                         SECTION 01
                    ================================================== -->

                    <div class="bp-form-section">

                        <div class="bp-section-heading">

                            <div class="bp-section-number">
                                01
                            </div>

                            <div>

                                <h6>
                                    Patient Information
                                </h6>

                                <span>
                                    Select an existing patient or register patient details.
                                </span>

                            </div>

                        </div>


                        <div class="row g-3">


                            <!-- PATIENT -->

                            <div class="col-lg-6">

                                <label class="bp-form-label required">
                                    Patient
                                </label>

                                <div class="bp-input-icon">

                                    <i class="bi bi-person-search"></i>

                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Search patient by name, mobile or registration no."
                                        required>

                                </div>

                            </div>


                            <!-- REG NO -->

                            <div class="col-lg-3">

                                <label class="bp-form-label">
                                    Registration No.
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="REG-XXXXX">

                            </div>


                            <!-- DATE -->

                            <div class="col-lg-3">

                                <label class="bp-form-label required">
                                    Monitoring Start Date
                                </label>

                                <input
                                    type="date"
                                    class="form-control"
                                    value="2026-09-05"
                                    required>

                            </div>


                            <!-- SELECTED PATIENT -->

                            <div class="col-12">

                                <div class="bp-selected-patient">

                                    <div class="bp-selected-avatar">
                                        DS
                                    </div>

                                    <div class="bp-selected-info">

                                        <strong>
                                            Divya Sonawane
                                        </strong>

                                        <span>
                                            Female • 29 Years • REG-24634-26
                                        </span>

                                    </div>

                                    <div class="bp-selected-contact">

                                        <i class="bi bi-telephone"></i>

                                        9075756144

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                    <!-- =================================================
                         SECTION 02
                    ================================================== -->

                    <div class="bp-form-section">

                        <div class="bp-section-heading">

                            <div class="bp-section-number">
                                02
                            </div>

                            <div>

                                <h6>
                                    Initial BP Reading
                                </h6>

                                <span>
                                    Record the patient's baseline blood pressure measurement.
                                </span>

                            </div>

                        </div>


                        <div class="row g-3">


                            <!-- SYSTOLIC -->

                            <div class="col-lg-3 col-md-6">

                                <label class="bp-form-label required">
                                    Systolic BP
                                </label>

                                <div class="bp-unit-input">

                                    <input
                                        type="number"
                                        class="form-control"
                                        placeholder="120"
                                        min="1"
                                        required>

                                    <span>
                                        mmHg
                                    </span>

                                </div>

                            </div>


                            <!-- DIASTOLIC -->

                            <div class="col-lg-3 col-md-6">

                                <label class="bp-form-label required">
                                    Diastolic BP
                                </label>

                                <div class="bp-unit-input">

                                    <input
                                        type="number"
                                        class="form-control"
                                        placeholder="80"
                                        min="1"
                                        required>

                                    <span>
                                        mmHg
                                    </span>

                                </div>

                            </div>


                            <!-- PULSE -->

                            <div class="col-lg-3 col-md-6">

                                <label class="bp-form-label">
                                    Pulse Rate
                                </label>

                                <div class="bp-unit-input">

                                    <input
                                        type="number"
                                        class="form-control"
                                        placeholder="72"
                                        min="1">

                                    <span>
                                        bpm
                                    </span>

                                </div>

                            </div>


                            <!-- READING DATE -->

                            <div class="col-lg-3 col-md-6">

                                <label class="bp-form-label required">
                                    Reading Date
                                </label>

                                <input
                                    type="date"
                                    class="form-control"
                                    value="2026-09-05"
                                    required>

                            </div>


                            <!-- BP STATUS -->

                            <div class="col-lg-4">

                                <label class="bp-form-label">
                                    Initial BP Status
                                </label>

                                <select class="form-select">

                                    <option>
                                        Normal
                                    </option>

                                    <option>
                                        Elevated
                                    </option>

                                    <option>
                                        High BP
                                    </option>

                                    <option>
                                        Critical
                                    </option>

                                </select>

                            </div>


                            <!-- POSITION -->

                            <div class="col-lg-4">

                                <label class="bp-form-label">
                                    Measurement Position
                                </label>

                                <select class="form-select">

                                    <option>
                                        Sitting
                                    </option>

                                    <option>
                                        Standing
                                    </option>

                                    <option>
                                        Lying
                                    </option>

                                </select>

                            </div>


                            <!-- ARM -->

                            <div class="col-lg-4">

                                <label class="bp-form-label">
                                    Measurement Arm
                                </label>

                                <select class="form-select">

                                    <option>
                                        Left Arm
                                    </option>

                                    <option>
                                        Right Arm
                                    </option>

                                </select>

                            </div>

                        </div>


                        <!-- BP READING PREVIEW -->

                        <div class="bp-reading-preview">

                            <div class="bp-preview-heart">

                                <i class="bi bi-heart-pulse-fill"></i>

                            </div>

                            <div>

                                <span>
                                    Current Reading
                                </span>

                                <strong>
                                    120 / 80
                                    <small>mmHg</small>
                                </strong>

                            </div>

                            <div class="bp-preview-status">
                                Normal
                            </div>

                        </div>

                    </div>


                    <!-- =================================================
                         SECTION 03
                    ================================================== -->

                    <div class="bp-form-section">

                        <div class="bp-section-heading">

                            <div class="bp-section-number">
                                03
                            </div>

                            <div>

                                <h6>
                                    Medical & Treatment Information
                                </h6>

                                <span>
                                    Record relevant clinical and treatment information.
                                </span>

                            </div>

                        </div>


                        <div class="row g-3">


                            <!-- DIAGNOSIS -->

                            <div class="col-lg-6">

                                <label class="bp-form-label">
                                    Diagnosis / Clinical Notes
                                </label>

                                <textarea
                                    class="form-control"
                                    rows="3"
                                    placeholder="Enter diagnosis or clinical notes..."></textarea>

                            </div>


                            <!-- HISTORY -->

                            <div class="col-lg-6">

                                <label class="bp-form-label">
                                    Medical History
                                </label>

                                <textarea
                                    class="form-control"
                                    rows="3"
                                    placeholder="Hypertension history, previous readings, relevant conditions..."></textarea>

                            </div>


                            <!-- MEDICATION -->

                            <div class="col-lg-4">

                                <label class="bp-form-label">
                                    Medication Status
                                </label>

                                <select class="form-select">

                                    <option>
                                        Not Started
                                    </option>

                                    <option>
                                        Active
                                    </option>

                                    <option>
                                        Review Required
                                    </option>

                                    <option>
                                        Completed
                                    </option>

                                </select>

                            </div>


                            <!-- MEDICINE -->

                            <div class="col-lg-4">

                                <label class="bp-form-label">
                                    Current Medicine
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Medicine name / dosage">

                            </div>


                            <!-- DOCTOR -->

                            <div class="col-lg-4">

                                <label class="bp-form-label">
                                    Assigned Doctor
                                </label>

                                <select class="form-select">

                                    <option>
                                        Dr. Samer Jawalkar
                                    </option>

                                    <option>
                                        Other Doctor
                                    </option>

                                </select>

                            </div>

                        </div>

                    </div>


                    <!-- =================================================
                         SECTION 04
                    ================================================== -->

                    <div class="bp-form-section">

                        <div class="bp-section-heading">

                            <div class="bp-section-number">
                                04
                            </div>

                            <div>

                                <h6>
                                    Follow-up & Reminder
                                </h6>

                                <span>
                                    Set the next BP monitoring and patient reminder schedule.
                                </span>

                            </div>

                        </div>


                        <div class="row g-3">


                            <!-- FOLLOWUP -->

                            <div class="col-lg-4">

                                <label class="bp-form-label required">
                                    Next Follow-up Date
                                </label>

                                <input
                                    type="date"
                                    class="form-control"
                                    required>

                            </div>


                            <!-- FREQUENCY -->

                            <div class="col-lg-4">

                                <label class="bp-form-label">
                                    Monitoring Frequency
                                </label>

                                <select class="form-select">

                                    <option>
                                        Daily
                                    </option>

                                    <option>
                                        Every 3 Days
                                    </option>

                                    <option selected>
                                        Weekly
                                    </option>

                                    <option>
                                        Every 15 Days
                                    </option>

                                    <option>
                                        Monthly
                                    </option>

                                    <option>
                                        As Advised
                                    </option>

                                </select>

                            </div>


                            <!-- REMINDER -->

                            <div class="col-lg-4">

                                <label class="bp-form-label">
                                    Reminder Before Follow-up
                                </label>

                                <select class="form-select">

                                    <option>
                                        1 Day Before
                                    </option>

                                    <option selected>
                                        2 Days Before
                                    </option>

                                    <option>
                                        3 Days Before
                                    </option>

                                    <option>
                                        5 Days Before
                                    </option>

                                </select>

                            </div>


                            <!-- REMINDER METHODS -->

                            <div class="col-12">

                                <label class="bp-form-label">
                                    Reminder Method
                                </label>

                                <div class="bp-reminder-options">


                                    <label class="bp-check-option">

                                        <input
                                            type="checkbox"
                                            checked>

                                        <span class="bp-check-box">

                                            <i class="bi bi-check"></i>

                                        </span>

                                        <span>
                                            Dashboard Reminder
                                        </span>

                                    </label>


                                    <label class="bp-check-option">

                                        <input
                                            type="checkbox">

                                        <span class="bp-check-box">

                                            <i class="bi bi-check"></i>

                                        </span>

                                        <span>
                                            WhatsApp
                                        </span>

                                    </label>


                                    <label class="bp-check-option">

                                        <input
                                            type="checkbox">

                                        <span class="bp-check-box">

                                            <i class="bi bi-check"></i>

                                        </span>

                                        <span>
                                            SMS
                                        </span>

                                    </label>

                                </div>

                            </div>

                        </div>

                    </div>


                    <!-- =================================================
                         SECTION 05
                    ================================================== -->

                    <div class="bp-form-section">

                        <div class="bp-section-heading">

                            <div class="bp-section-number">
                                05
                            </div>

                            <div>

                                <h6>
                                    Additional Notes
                                </h6>

                                <span>
                                    Add any additional instructions for future monitoring.
                                </span>

                            </div>

                        </div>


                        <textarea
                            class="form-control"
                            rows="3"
                            placeholder="Enter additional notes, lifestyle advice or monitoring instructions..."></textarea>

                    </div>


                    <!-- =================================================
                         SYSTEM NOTICE
                    ================================================== -->

                    <div class="bp-system-notice">

                        <div class="bp-notice-icon">

                            <i class="bi bi-shield-check"></i>

                        </div>

                        <div>

                            <strong>
                                Patient monitoring record
                            </strong>

                            <span>
                                The patient will be added to the BP monitoring list
                                and future readings can be maintained in the patient's
                                BP history.
                            </span>

                        </div>

                    </div>


                </form>

            </div>


            <!-- =================================================
                 MODAL FOOTER
            ================================================== -->

            <div class="modal-footer bp-modal-footer">

                <button
                    type="button"
                    class="btn bp-light-btn"
                    data-bs-dismiss="modal">

                    <i class="bi bi-x-lg me-1"></i>

                    Cancel

                </button>


                <button
                    type="button"
                    class="btn bp-outline-btn">

                    <i class="bi bi-eye me-1"></i>

                    Preview

                </button>


                <button
                    type="submit"
                    form="addBPPatientForm"
                    class="btn bp-primary-btn">

                    <i class="bi bi-person-check me-1"></i>

                    Add BP Patient

                </button>

            </div>

        </div>

    </div>

</div>


<!-- =========================================================
     PAGE-SPECIFIC CSS
========================================================= -->

<style>

/* =========================================================
   PAGE
========================================================= */

.bp-patients-page {
    width: 100%;
}


/* =========================================================
   PAGE HEADER
========================================================= */

.bp-page-header {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    gap: 20px;
    margin-bottom: 24px;
}

.bp-breadcrumb {
    display: flex;
    align-items: center;
    gap: 7px;
    color: #8b989e;
    font-size: 11px;
    margin-bottom: 7px;
}

.bp-breadcrumb i {
    font-size: 9px;
}

.bp-page-title {
    margin: 0;
    color: #263a42;
    font-size: 25px;
    font-weight: 700;
}

.bp-page-subtitle {
    margin: 5px 0 0;
    color: #859299;
    font-size: 12px;
}


/* =========================================================
   BUTTONS
========================================================= */

.bp-primary-btn {
    background: var(--bs-primary);
    border-color: var(--bs-primary);
    color: #fff;
    border-radius: 8px;
    padding: 10px 16px;
    font-size: 12px;
    font-weight: 600;
    box-shadow: 0 5px 15px rgba(0,0,0,.06);
}

.bp-primary-btn:hover,
.bp-primary-btn:focus {
    background: var(--bs-primary);
    border-color: var(--bs-primary);
    color: #fff;
    opacity: .92;
}

.bp-light-btn {
    background: #f5f7f8;
    border: 1px solid #e0e7e9;
    color: #596a71;
    border-radius: 8px;
    padding: 10px 15px;
    font-size: 12px;
    font-weight: 600;
}

.bp-light-btn:hover {
    background: #edf1f2;
    color: #35474d;
}

.bp-outline-btn {
    background: #fff;
    border: 1px solid #d8e1e4;
    color: #53656c;
    border-radius: 8px;
    padding: 10px 15px;
    font-size: 12px;
    font-weight: 600;
}


/* =========================================================
   STAT CARDS
========================================================= */

.bp-stat-card {
    display: flex;
    align-items: center;
    gap: 13px;
    min-height: 105px;
    background: #fff;
    border: 1px solid #e1e8ea;
    border-radius: 12px;
    padding: 16px;
    transition: .2s ease;
}

.bp-stat-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(30,55,65,.07);
}

.bp-stat-icon {
    width: 46px;
    height: 46px;
    min-width: 46px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 11px;
    background: rgba(var(--bs-primary-rgb),.10);
    color: var(--bs-primary);
    font-size: 19px;
}

.bp-stat-icon.high {
    background: #fff3ef;
    color: #c66552;
}

.bp-stat-icon.controlled {
    background: #edf8f4;
    color: #3f9273;
}

.bp-stat-icon.followup {
    background: #f2f5fb;
    color: #617da8;
}

.bp-stat-label {
    color: #87949a;
    font-size: 10px;
    margin-bottom: 3px;
}

.bp-stat-value {
    color: #293d45;
    font-size: 23px;
    font-weight: 700;
    line-height: 1.2;
}

.bp-stat-note {
    color: #99a4a8;
    font-size: 9px;
    margin-top: 3px;
}


/* =========================================================
   MONITOR CARD
========================================================= */

.bp-monitor-card {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    padding: 16px 18px;
    border: 1px solid #dfe8ea;
    border-radius: 12px;
    background: linear-gradient(
        100deg,
        #f6fbfb,
        #ffffff
    );
}

.bp-monitor-left {
    display: flex;
    align-items: center;
    gap: 12px;
}

.bp-monitor-icon {
    width: 43px;
    height: 43px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
    background: rgba(var(--bs-primary-rgb),.10);
    color: var(--bs-primary);
    font-size: 18px;
}

.bp-monitor-left strong {
    display: block;
    color: #33474e;
    font-size: 12px;
}

.bp-monitor-left span {
    display: block;
    color: #8a979d;
    font-size: 9px;
    margin-top: 3px;
}

.bp-monitor-summary {
    display: flex;
    align-items: center;
    gap: 28px;
}

.bp-monitor-summary div {
    text-align: right;
}

.bp-monitor-summary small {
    display: block;
    color: #8b989d;
    font-size: 8px;
}

.bp-monitor-summary strong {
    display: block;
    color: #33474d;
    font-size: 16px;
    margin-top: 2px;
}


/* =========================================================
   FILTER
========================================================= */

.bp-filter-card {
    background: #fff;
    border: 1px solid #e1e8ea;
    border-radius: 12px;
    padding: 17px;
    margin-bottom: 20px;
}

.bp-form-label {
    display: block;
    color: #586a71;
    font-size: 10px;
    font-weight: 600;
    margin-bottom: 6px;
}

.bp-form-label.required::after {
    content: " *";
    color: #c45764;
}

.bp-filter-card .form-control,
.bp-filter-card .form-select,
.bp-form-section .form-control,
.bp-form-section .form-select {
    min-height: 40px;
    border-color: #dce5e8;
    border-radius: 7px;
    color: #35484f;
    font-size: 11px;
    box-shadow: none;
}

.bp-filter-card .form-control:focus,
.bp-filter-card .form-select:focus,
.bp-form-section .form-control:focus,
.bp-form-section .form-select:focus {
    border-color: var(--bs-primary);
    box-shadow: 0 0 0 .15rem rgba(var(--bs-primary-rgb),.10);
}

.bp-input-icon {
    position: relative;
}

.bp-input-icon > i {
    position: absolute;
    left: 12px;
    top: 50%;
    transform: translateY(-50%);
    color: #89969b;
    z-index: 2;
}

.bp-input-icon .form-control {
    padding-left: 34px;
}

.bp-filter-actions {
    display: flex;
    gap: 8px;
}


/* =========================================================
   LIST
========================================================= */

.bp-list-card {
    background: #fff;
    border: 1px solid #e1e8ea;
    border-radius: 12px;
    overflow: hidden;
}

.bp-list-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 17px 19px;
    border-bottom: 1px solid #e8edef;
}

.bp-list-header h5 {
    margin: 0;
    color: #2d4048;
    font-size: 14px;
    font-weight: 700;
}

.bp-list-header span {
    display: block;
    color: #8b989d;
    font-size: 10px;
    margin-top: 3px;
}

.bp-record-count {
    background: #f2f7f8;
    color: var(--bs-primary);
    padding: 6px 10px;
    border-radius: 20px;
    font-size: 9px;
    font-weight: 700;
}


/* =========================================================
   TABLE
========================================================= */

.bp-table {
    margin: 0;
    min-width: 1050px;
}

.bp-table thead th {
    background: #f7f9fa;
    border-bottom: 1px solid #e2e8ea;
    color: #7b898f;
    font-size: 9px;
    font-weight: 700;
    padding: 11px 13px;
    white-space: nowrap;
}

.bp-table tbody td {
    color: #607077;
    font-size: 10px;
    padding: 12px 13px;
    border-bottom: 1px solid #edf1f2;
}

.bp-table tbody tr:last-child td {
    border-bottom: none;
}

.bp-table tbody tr:hover {
    background: #fbfcfc;
}


/* =========================================================
   PATIENT
========================================================= */

.bp-patient {
    display: flex;
    align-items: center;
    gap: 9px;
}

.bp-avatar {
    width: 36px;
    height: 36px;
    min-width: 36px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: #f0f6f7;
    color: var(--bs-primary);
    font-size: 10px;
    font-weight: 700;
}

.bp-patient strong {
    display: block;
    color: #33474d;
    font-size: 10px;
}

.bp-patient small {
    display: block;
    color: #96a2a7;
    font-size: 8px;
    margin-top: 2px;
}


/* =========================================================
   BP READING
========================================================= */

.bp-reading strong {
    color: #34484f;
    font-size: 14px;
    font-weight: 700;
}

.bp-reading small {
    color: #89979c;
    font-size: 8px;
    margin-left: 2px;
}

.bp-reading.high-value strong {
    color: #bd654f;
}

.bp-reading.critical-value strong {
    color: #ad4e59;
}

.bp-reading-date {
    color: #99a4a8;
    font-size: 8px;
    margin-top: 3px;
}

.bp-pulse {
    color: #566970;
    font-size: 10px;
    font-weight: 600;
}


/* =========================================================
   STATUS
========================================================= */

.bp-status {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    padding: 5px 8px;
    border-radius: 20px;
    font-size: 8px;
    font-weight: 700;
    white-space: nowrap;
}

.bp-status.normal {
    color: #39836b;
    background: #edf8f4;
}

.bp-status.elevated {
    color: #92703d;
    background: #fbf6e9;
}

.bp-status.high {
    color: #b6624f;
    background: #fff2ee;
}

.bp-status.critical {
    color: #a84f5c;
    background: #fdf0f3;
}


/* =========================================================
   MEDICATION
========================================================= */

.bp-medication {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    font-size: 8px;
    font-weight: 700;
}

.bp-medication.active {
    color: #43846e;
}

.bp-medication.pending {
    color: #b7674e;
}


/* =========================================================
   FOLLOW UP
========================================================= */

.bp-followup strong {
    display: block;
    color: #4b5e65;
    font-size: 9px;
}

.bp-followup small {
    display: block;
    color: #97a3a8;
    font-size: 8px;
    margin-top: 2px;
}

.bp-followup.due strong {
    color: #b6674f;
}

.bp-followup.overdue strong {
    color: #aa505b;
}


/* =========================================================
   ACTIONS
========================================================= */

.bp-actions {
    display: flex;
    justify-content: flex-end;
    gap: 5px;
}

.bp-action-btn {
    width: 30px;
    height: 30px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border: 1px solid #dfe7e9;
    background: #fff;
    color: #718087;
    border-radius: 7px;
    font-size: 11px;
    transition: .15s ease;
}

.bp-action-btn:hover {
    color: var(--bs-primary);
    border-color: rgba(var(--bs-primary-rgb),.35);
    background: rgba(var(--bs-primary-rgb),.05);
}


/* =========================================================
   PAGINATION
========================================================= */

.bp-pagination {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 15px;
    padding: 13px 18px;
    border-top: 1px solid #e8edef;
}

.bp-pagination-info {
    color: #89969b;
    font-size: 9px;
}

.bp-pagination-info strong {
    color: #50636d;
}

.bp-pages {
    display: flex;
    align-items: center;
    gap: 4px;
}

.bp-page-btn {
    min-width: 29px;
    height: 29px;
    border: 1px solid #dfe7e9;
    background: #fff;
    color: #697980;
    border-radius: 6px;
    font-size: 9px;
}

.bp-page-btn.active,
.bp-page-btn:hover {
    background: var(--bs-primary);
    border-color: var(--bs-primary);
    color: #fff;
}


/* =========================================================
   MODAL
========================================================= */

.bp-modal {
    border: none;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 25px 70px rgba(20,40,50,.18);
}

.bp-modal-header {
    padding: 16px 19px;
    background: #fff;
    border-bottom: 1px solid #e6edef;
}

.bp-modal-heading {
    display: flex;
    align-items: center;
    gap: 11px;
}

.bp-modal-icon {
    width: 43px;
    height: 43px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(var(--bs-primary-rgb),.10);
    color: var(--bs-primary);
    border-radius: 10px;
    font-size: 19px;
}

.bp-modal-heading h5 {
    margin: 0;
    color: #2e424a;
    font-size: 15px;
    font-weight: 700;
}

.bp-modal-heading p {
    margin: 3px 0 0;
    color: #89969b;
    font-size: 9px;
}

.bp-modal-body {
    max-height: calc(100vh - 185px);
    overflow-y: auto;
    background: #fbfcfc;
    padding: 19px;
}


/* =========================================================
   FORM SECTION
========================================================= */

.bp-form-section {
    background: #fff;
    border: 1px solid #e0e8ea;
    border-radius: 11px;
    padding: 16px;
    margin-bottom: 14px;
}

.bp-section-heading {
    display: flex;
    align-items: center;
    gap: 10px;
    padding-bottom: 12px;
    margin-bottom: 14px;
    border-bottom: 1px solid #edf1f2;
}

.bp-section-number {
    width: 31px;
    height: 31px;
    min-width: 31px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(var(--bs-primary-rgb),.09);
    color: var(--bs-primary);
    border-radius: 8px;
    font-size: 9px;
    font-weight: 700;
}

.bp-section-heading h6 {
    margin: 0;
    color: #33474c;
    font-size: 11px;
    font-weight: 700;
}

.bp-section-heading span {
    display: block;
    color: #909ca1;
    font-size: 8px;
    margin-top: 2px;
}


/* =========================================================
   SELECTED PATIENT
========================================================= */

.bp-selected-patient {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 11px 12px;
    border: 1px solid #dbe9eb;
    border-radius: 9px;
    background: #f5fafb;
}

.bp-selected-avatar {
    width: 40px;
    height: 40px;
    min-width: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: rgba(var(--bs-primary-rgb),.11);
    color: var(--bs-primary);
    font-size: 10px;
    font-weight: 700;
}

.bp-selected-info {
    flex: 1;
}

.bp-selected-info strong {
    display: block;
    color: #34474e;
    font-size: 10px;
}

.bp-selected-info span {
    display: block;
    color: #8c999e;
    font-size: 8px;
    margin-top: 3px;
}

.bp-selected-contact {
    color: #6e7d83;
    font-size: 8px;
}

.bp-selected-contact i {
    color: var(--bs-primary);
}


/* =========================================================
   UNIT INPUT
========================================================= */

.bp-unit-input {
    display: flex;
    align-items: stretch;
}

.bp-unit-input .form-control {
    border-radius: 7px 0 0 7px !important;
}

.bp-unit-input span {
    min-width: 55px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #f4f7f8;
    border: 1px solid #dce5e8;
    border-left: none;
    border-radius: 0 7px 7px 0;
    color: #859298;
    font-size: 8px;
}


/* =========================================================
   READING PREVIEW
========================================================= */

.bp-reading-preview {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-top: 15px;
    padding: 11px 13px;
    background: #f5fafb;
    border: 1px solid #dcebed;
    border-radius: 9px;
}

.bp-preview-heart {
    width: 35px;
    height: 35px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 8px;
    background: #fff;
    color: var(--bs-primary);
    font-size: 15px;
}

.bp-reading-preview > div:nth-child(2) {
    flex: 1;
}

.bp-reading-preview span {
    display: block;
    color: #89979d;
    font-size: 8px;
}

.bp-reading-preview strong {
    display: block;
    color: #34484f;
    font-size: 14px;
    margin-top: 2px;
}

.bp-reading-preview strong small {
    color: #89969b;
    font-size: 8px;
    font-weight: 400;
}

.bp-preview-status {
    background: #edf8f4;
    color: #3c876d;
    border-radius: 20px;
    padding: 5px 9px;
    font-size: 8px;
    font-weight: 700;
}


/* =========================================================
   REMINDER OPTIONS
========================================================= */

.bp-reminder-options {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 9px;
}

.bp-check-option {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    min-height: 38px;
    padding: 7px 11px;
    border: 1px solid #dfe7e9;
    background: #fff;
    border-radius: 8px;
    color: #66767d;
    font-size: 9px;
    cursor: pointer;
}

.bp-check-option input {
    display: none;
}

.bp-check-box {
    width: 16px;
    height: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid #ccd8db;
    border-radius: 4px;
    color: #fff;
    font-size: 9px;
}

.bp-check-option input:checked + .bp-check-box {
    background: var(--bs-primary);
    border-color: var(--bs-primary);
}

.bp-check-option input:checked + .bp-check-box i {
    display: block;
}

.bp-check-box i {
    display: none;
}


/* =========================================================
   NOTICE
========================================================= */

.bp-system-notice {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    padding: 11px 13px;
    border: 1px solid #dcebed;
    background: #f5fafb;
    border-radius: 9px;
}

.bp-notice-icon {
    width: 34px;
    height: 34px;
    min-width: 34px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #fff;
    border-radius: 8px;
    color: var(--bs-primary);
}

.bp-system-notice strong {
    display: block;
    color: #455960;
    font-size: 9px;
}

.bp-system-notice span {
    display: block;
    color: #8b989d;
    font-size: 8px;
    line-height: 1.5;
    margin-top: 2px;
}


/* =========================================================
   MODAL FOOTER
========================================================= */

.bp-modal-footer {
    display: flex;
    justify-content: flex-end;
    gap: 7px;
    padding: 12px 17px;
    background: #fff;
    border-top: 1px solid #e5ebed;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 991.98px) {

    .bp-page-header {
        align-items: flex-start;
        flex-direction: column;
    }

    .bp-page-header-action,
    .bp-page-header-action .btn {
        width: 100%;
    }

    .bp-monitor-card {
        align-items: flex-start;
        flex-direction: column;
    }

    .bp-monitor-summary {
        width: 100%;
        justify-content: space-between;
    }

    .bp-monitor-summary div {
        text-align: left;
    }

    .bp-modal-body {
        padding: 15px;
    }

}


@media (max-width: 767.98px) {

    .bp-page-title {
        font-size: 21px;
    }

    .bp-page-subtitle {
        font-size: 10px;
    }

    .bp-filter-actions {
        width: 100%;
    }

    .bp-filter-actions .btn {
        flex: 1;
    }

    .bp-list-header {
        align-items: flex-start;
        flex-direction: column;
        gap: 8px;
    }

    .bp-pagination {
        align-items: flex-start;
        flex-direction: column;
    }

    .bp-pages {
        width: 100%;
        justify-content: center;
    }

    .bp-form-section {
        padding: 13px;
    }

    .bp-selected-patient {
        align-items: flex-start;
        flex-wrap: wrap;
    }

    .bp-selected-contact {
        width: 100%;
        padding-left: 50px;
    }

    .bp-modal-footer {
        flex-wrap: wrap;
    }

    .bp-modal-footer .btn {
        flex: 1;
    }

}


@media (max-width: 575.98px) {

    .bp-page-header {
        margin-bottom: 18px;
    }

    .bp-stat-card {
        min-height: 90px;
        padding: 13px;
    }

    .bp-stat-icon {
        width: 41px;
        height: 41px;
        min-width: 41px;
    }

    .bp-stat-value {
        font-size: 20px;
    }

    .bp-monitor-card {
        padding: 13px;
    }

    .bp-monitor-summary {
        gap: 12px;
    }

    .bp-monitor-summary strong {
        font-size: 14px;
    }

    .bp-filter-card {
        padding: 13px;
    }

    .bp-list-header {
        padding: 14px;
    }

    .bp-modal-heading p {
        display: none;
    }

    .bp-modal-footer .btn {
        width: 100%;
        flex: 100%;
    }

    .bp-reminder-options {
        flex-direction: column;
        align-items: stretch;
    }

    .bp-check-option {
        width: 100%;
    }

}

</style>


<!-- =========================================================
     PAGE JS
========================================================= -->

<script>

document.addEventListener("DOMContentLoaded", function () {

    const form =
        document.getElementById("addBPPatientForm");


    if (form) {

        form.addEventListener("submit", function (event) {

            event.preventDefault();


            if (!form.checkValidity()) {

                form.classList.add("was-validated");

                return;

            }


            /*
             * CI4 integration point.
             *
             * Recommended backend workflow:
             *
             * 1. Check patient_id
             * 2. Create BP monitoring record
             * 3. Save initial BP reading
             * 4. Calculate/store BP status
             * 5. Save medication information
             * 6. Save follow-up date
             * 7. Create reminder record
             * 8. Redirect to BP patient history
             */


            alert(
                "BP patient form is ready for CI4 integration."
            );

        });

    }


    /* =====================================================
       BP READING PREVIEW
    ====================================================== */

    const systolic =
        document.querySelector(
            '#addBPPatientForm input[type="number"]'
        );


    const diastolicInputs =
        document.querySelectorAll(
            '#addBPPatientForm .bp-unit-input input'
        );


    const preview =
        document.querySelector(
            ".bp-reading-preview strong"
        );


    const previewStatus =
        document.querySelector(
            ".bp-preview-status"
        );


    if (
        diastolicInputs.length >= 2 &&
        preview &&
        previewStatus
    ) {

        function updateBPPreview() {

            const sys =
                parseInt(
                    diastolicInputs[0].value
                ) || 120;

            const dia =
                parseInt(
                    diastolicInputs[1].value
                ) || 80;


            preview.innerHTML =
                sys +
                " / " +
                dia +
                ' <small>mmHg</small>';


            let status = "Normal";


            if (sys >= 180 || dia >= 120) {

                status = "Critical";

            }
            else if (sys >= 140 || dia >= 90) {

                status = "High BP";

            }
            else if (sys >= 130 || dia >= 80) {

                status = "Elevated";

            }


            previewStatus.textContent =
                status;


            previewStatus.style.background =
                status === "Critical"
                    ? "#fdf0f3"
                    : status === "High BP"
                        ? "#fff2ee"
                        : status === "Elevated"
                            ? "#fbf6e9"
                            : "#edf8f4";


            previewStatus.style.color =
                status === "Critical"
                    ? "#a84f5c"
                    : status === "High BP"
                        ? "#b6624f"
                        : status === "Elevated"
                            ? "#92703d"
                            : "#39836b";

        }


        diastolicInputs.forEach(function (input) {

            input.addEventListener(
                "input",
                updateBPPreview
            );

        });

    }

});

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<body>
</html>
