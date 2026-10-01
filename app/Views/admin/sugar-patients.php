<?php include('header.php'); ?>
<!-- =========================================================
     VETAL CLINIC OPD
     SUGAR PATIENTS MANAGEMENT PAGE
     
     CONTENT AREA ONLY
     Existing Header / Sidebar / Footer unchanged
========================================================= -->
<main class="content">
<div class="sugar-patients-page">

    <!-- =====================================================
         PAGE HEADER
    ====================================================== -->

    <div class="sugar-page-header">

        <div>

            <div class="sugar-breadcrumb">
                <span>
                    <i class="bi bi-house"></i>
                    Dashboard
                </span>

                <i class="bi bi-chevron-right"></i>

                <span>
                    Sugar Patients
                </span>
            </div>

            <h2 class="sugar-page-title">
                Sugar Patients
            </h2>

            <p class="sugar-page-subtitle">
                Monitor blood glucose patients, readings, medication and follow-ups.
            </p>

        </div>

        <div class="sugar-page-header-action">

            <button
                type="button"
                class="btn sugar-primary-btn"
                data-bs-toggle="modal"
                data-bs-target="#addSugarPatientModal">

                <i class="bi bi-person-plus me-2"></i>
                Add New Sugar Patient

            </button>

        </div>

    </div>


    <!-- =====================================================
         STATISTICS
    ====================================================== -->

    <div class="row g-3 mb-4">

        <!-- TOTAL -->

        <div class="col-xl-3 col-md-6">

            <div class="sugar-stat-card">

                <div class="sugar-stat-icon">

                    <i class="bi bi-people"></i>

                </div>

                <div class="sugar-stat-content">

                    <div class="sugar-stat-label">
                        Total Sugar Patients
                    </div>

                    <div class="sugar-stat-value">
                        428
                    </div>

                    <div class="sugar-stat-note">
                        Patients under monitoring
                    </div>

                </div>

            </div>

        </div>


        <!-- HIGH SUGAR -->

        <div class="col-xl-3 col-md-6">

            <div class="sugar-stat-card">

                <div class="sugar-stat-icon high">

                    <i class="bi bi-droplet-half"></i>

                </div>

                <div class="sugar-stat-content">

                    <div class="sugar-stat-label">
                        High Sugar
                    </div>

                    <div class="sugar-stat-value">
                        86
                    </div>

                    <div class="sugar-stat-note">
                        Need close monitoring
                    </div>

                </div>

            </div>

        </div>


        <!-- CONTROLLED -->

        <div class="col-xl-3 col-md-6">

            <div class="sugar-stat-card">

                <div class="sugar-stat-icon controlled">

                    <i class="bi bi-check-circle"></i>

                </div>

                <div class="sugar-stat-content">

                    <div class="sugar-stat-label">
                        Controlled
                    </div>

                    <div class="sugar-stat-value">
                        281
                    </div>

                    <div class="sugar-stat-note">
                        Within monitoring range
                    </div>

                </div>

            </div>

        </div>


        <!-- FOLLOW-UP -->

        <div class="col-xl-3 col-md-6">

            <div class="sugar-stat-card">

                <div class="sugar-stat-icon followup">

                    <i class="bi bi-calendar-check"></i>

                </div>

                <div class="sugar-stat-content">

                    <div class="sugar-stat-label">
                        Follow-ups Due
                    </div>

                    <div class="sugar-stat-value">
                        23
                    </div>

                    <div class="sugar-stat-note">
                        Next 7 days
                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- =====================================================
         GLUCOSE MONITORING SUMMARY
    ====================================================== -->

    <div class="sugar-monitor-card mb-4">

        <div class="sugar-monitor-left">

            <div class="sugar-monitor-icon">

                <i class="bi bi-droplet-fill"></i>

            </div>

            <div>

                <strong>
                    Blood Sugar Monitoring
                </strong>

                <span>
                    Track glucose readings and identify patients requiring
                    closer monitoring.
                </span>

            </div>

        </div>


        <div class="sugar-monitor-summary">

            <div>

                <small>
                    Today's Readings
                </small>

                <strong>
                    57
                </strong>

            </div>

            <div>

                <small>
                    High Reading
                </small>

                <strong>
                    11
                </strong>

            </div>

            <div>

                <small>
                    Follow-up Due
                </small>

                <strong>
                    06
                </strong>

            </div>

        </div>

    </div>


    <!-- =====================================================
         FILTERS
    ====================================================== -->

    <div class="sugar-filter-card">

        <div class="row g-3 align-items-end">


            <!-- SEARCH -->

            <div class="col-xl-3 col-lg-4 col-md-6">

                <label class="sugar-form-label">
                    Search Patient
                </label>

                <div class="sugar-input-icon">

                    <i class="bi bi-search"></i>

                    <input
                        type="text"
                        class="form-control"
                        placeholder="Name, mobile or registration no.">

                </div>

            </div>


            <!-- SUGAR STATUS -->

            <div class="col-xl-2 col-lg-3 col-md-6">

                <label class="sugar-form-label">
                    Sugar Status
                </label>

                <select class="form-select">

                    <option value="">
                        All Status
                    </option>

                    <option>
                        Controlled
                    </option>

                    <option>
                        Elevated
                    </option>

                    <option>
                        High
                    </option>

                    <option>
                        Critical
                    </option>

                </select>

            </div>


            <!-- READING TYPE -->

            <div class="col-xl-2 col-lg-3 col-md-6">

                <label class="sugar-form-label">
                    Reading Type
                </label>

                <select class="form-select">

                    <option value="">
                        All Readings
                    </option>

                    <option>
                        Fasting
                    </option>

                    <option>
                        Post Meal
                    </option>

                    <option>
                        Random
                    </option>

                    <option>
                        HbA1c
                    </option>

                </select>

            </div>


            <!-- FOLLOW UP -->

            <div class="col-xl-2 col-lg-3 col-md-6">

                <label class="sugar-form-label">
                    Follow-up
                </label>

                <select class="form-select">

                    <option>
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


            <!-- ACTION -->

            <div class="col-xl-3 col-lg-12">

                <div class="sugar-filter-actions">

                    <button
                        type="button"
                        class="btn sugar-primary-btn">

                        <i class="bi bi-search me-1"></i>
                        Search

                    </button>

                    <button
                        type="button"
                        class="btn sugar-light-btn">

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

    <div class="sugar-list-card">

        <div class="sugar-list-header">

            <div>

                <h5>
                    Sugar Patient Records
                </h5>

                <span>
                    Patients currently under blood glucose monitoring
                </span>

            </div>

            <div class="sugar-record-count">
                428 Patients
            </div>

        </div>


        <!-- =================================================
             TABLE
        ================================================== -->

        <div class="table-responsive">

            <table class="table sugar-table align-middle">

                <thead>

                    <tr>

                        <th>
                            Patient
                        </th>

                        <th>
                            Latest Reading
                        </th>

                        <th>
                            Reading Type
                        </th>

                        <th>
                            Sugar Status
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


                    <!-- PATIENT 1 -->

                    <tr>

                        <td>

                            <div class="sugar-patient">

                                <div class="sugar-avatar">
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

                            <div class="sugar-reading normal-value">

                                <strong>
                                    96
                                </strong>

                                <small>
                                    mg/dL
                                </small>

                            </div>

                            <div class="sugar-reading-date">
                                05 Sep 2026
                            </div>

                        </td>


                        <td>

                            <span class="sugar-reading-type">
                                Fasting
                            </span>

                        </td>


                        <td>

                            <span class="sugar-status normal">

                                <i class="bi bi-check-circle"></i>
                                Controlled

                            </span>

                        </td>


                        <td>

                            <span class="sugar-medication active">

                                <i class="bi bi-capsule"></i>
                                Active

                            </span>

                        </td>


                        <td>

                            <div class="sugar-followup">

                                <strong>
                                    12 Sep 2026
                                </strong>

                                <small>
                                    7 days
                                </small>

                            </div>

                        </td>


                        <td>

                            <div class="sugar-actions">

                                <button
                                    type="button"
                                    class="sugar-action-btn"
                                    title="View Patient">

                                    <i class="bi bi-eye"></i>

                                </button>

                                <button
                                    type="button"
                                    class="sugar-action-btn"
                                    title="Sugar History">

                                    <i class="bi bi-graph-up"></i>

                                </button>

                                <button
                                    type="button"
                                    class="sugar-action-btn"
                                    title="Add Reading">

                                    <i class="bi bi-plus-circle"></i>

                                </button>

                            </div>

                        </td>

                    </tr>


                    <!-- PATIENT 2 -->

                    <tr>

                        <td>

                            <div class="sugar-patient">

                                <div class="sugar-avatar">
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

                            <div class="sugar-reading high-value">

                                <strong>
                                    186
                                </strong>

                                <small>
                                    mg/dL
                                </small>

                            </div>

                            <div class="sugar-reading-date">
                                05 Sep 2026
                            </div>

                        </td>


                        <td>

                            <span class="sugar-reading-type">
                                Fasting
                            </span>

                        </td>


                        <td>

                            <span class="sugar-status high">

                                <i class="bi bi-exclamation-circle"></i>
                                High

                            </span>

                        </td>


                        <td>

                            <span class="sugar-medication active">

                                <i class="bi bi-capsule"></i>
                                Active

                            </span>

                        </td>


                        <td>

                            <div class="sugar-followup due">

                                <strong>
                                    Today
                                </strong>

                                <small>
                                    Follow-up due
                                </small>

                            </div>

                        </td>


                        <td>

                            <div class="sugar-actions">

                                <button class="sugar-action-btn">
                                    <i class="bi bi-eye"></i>
                                </button>

                                <button class="sugar-action-btn">
                                    <i class="bi bi-graph-up"></i>
                                </button>

                                <button class="sugar-action-btn">
                                    <i class="bi bi-plus-circle"></i>
                                </button>

                            </div>

                        </td>

                    </tr>


                    <!-- PATIENT 3 -->

                    <tr>

                        <td>

                            <div class="sugar-patient">

                                <div class="sugar-avatar">
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

                            <div class="sugar-reading critical-value">

                                <strong>
                                    312
                                </strong>

                                <small>
                                    mg/dL
                                </small>

                            </div>

                            <div class="sugar-reading-date">
                                04 Sep 2026
                            </div>

                        </td>


                        <td>

                            <span class="sugar-reading-type">
                                Random
                            </span>

                        </td>


                        <td>

                            <span class="sugar-status critical">

                                <i class="bi bi-exclamation-triangle"></i>
                                Critical

                            </span>

                        </td>


                        <td>

                            <span class="sugar-medication review">

                                <i class="bi bi-capsule"></i>
                                Review

                            </span>

                        </td>


                        <td>

                            <div class="sugar-followup overdue">

                                <strong>
                                    Overdue
                                </strong>

                                <small>
                                    2 days ago
                                </small>

                            </div>

                        </td>


                        <td>

                            <div class="sugar-actions">

                                <button class="sugar-action-btn">
                                    <i class="bi bi-eye"></i>
                                </button>

                                <button class="sugar-action-btn">
                                    <i class="bi bi-graph-up"></i>
                                </button>

                                <button class="sugar-action-btn">
                                    <i class="bi bi-plus-circle"></i>
                                </button>

                            </div>

                        </td>

                    </tr>


                    <!-- PATIENT 4 -->

                    <tr>

                        <td>

                            <div class="sugar-patient">

                                <div class="sugar-avatar">
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

                            <div class="sugar-reading elevated-value">

                                <strong>
                                    128
                                </strong>

                                <small>
                                    mg/dL
                                </small>

                            </div>

                            <div class="sugar-reading-date">
                                03 Sep 2026
                            </div>

                        </td>


                        <td>

                            <span class="sugar-reading-type">
                                Fasting
                            </span>

                        </td>


                        <td>

                            <span class="sugar-status elevated">

                                <i class="bi bi-dash-circle"></i>
                                Elevated

                            </span>

                        </td>


                        <td>

                            <span class="sugar-medication active">

                                <i class="bi bi-capsule"></i>
                                Active

                            </span>

                        </td>


                        <td>

                            <div class="sugar-followup">

                                <strong>
                                    10 Sep 2026
                                </strong>

                                <small>
                                    5 days
                                </small>

                            </div>

                        </td>


                        <td>

                            <div class="sugar-actions">

                                <button class="sugar-action-btn">
                                    <i class="bi bi-eye"></i>
                                </button>

                                <button class="sugar-action-btn">
                                    <i class="bi bi-graph-up"></i>
                                </button>

                                <button class="sugar-action-btn">
                                    <i class="bi bi-plus-circle"></i>
                                </button>

                            </div>

                        </td>

                    </tr>

                </tbody>

            </table>

        </div>


        <!-- PAGINATION -->

        <div class="sugar-pagination">

            <div class="sugar-pagination-info">

                Showing
                <strong>1-10</strong>
                of
                <strong>428</strong>
                patients

            </div>

            <div class="sugar-pages">

                <button class="sugar-page-btn">
                    <i class="bi bi-chevron-left"></i>
                </button>

                <button class="sugar-page-btn active">
                    1
                </button>

                <button class="sugar-page-btn">
                    2
                </button>

                <button class="sugar-page-btn">
                    3
                </button>

                <span>...</span>

                <button class="sugar-page-btn">
                    43
                </button>

                <button class="sugar-page-btn">
                    <i class="bi bi-chevron-right"></i>
                </button>

            </div>

        </div>

    </div>

</div>
</main>

<!-- =========================================================
     ADD NEW SUGAR PATIENT MODAL
========================================================= -->

<div
    class="modal fade"
    id="addSugarPatientModal"
    tabindex="-1"
    aria-labelledby="addSugarPatientModalLabel"
    aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-xl">

        <div class="modal-content sugar-modal">


            <!-- MODAL HEADER -->

            <div class="modal-header sugar-modal-header">

                <div class="sugar-modal-heading">

                    <div class="sugar-modal-icon">

                        <i class="bi bi-droplet-half"></i>

                    </div>

                    <div>

                        <h5
                            class="modal-title text-white"
                            id="addSugarPatientModalLabel">

                            Add New Sugar Patient

                        </h5>

                        <p class="text-white">
                            Register a patient for blood glucose monitoring.
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


            <!-- MODAL BODY -->

            <div class="modal-body sugar-modal-body">

                <form id="addSugarPatientForm">
                    
                    <!-- =================================================
                         SECTION 01
                    ================================================== -->

                    <div class="sugar-form-section">

                        <div class="sugar-section-heading">

                            <div class="sugar-section-number">
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


                            <div class="col-lg-6">

                                <label class="sugar-form-label required">
                                    Patient
                                </label>

                                <div class="sugar-input-icon">

                                    <i class="bi bi-person-search"></i>

                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Search patient by name, mobile or registration no."
                                        required>

                                </div>

                            </div>


                            <div class="col-lg-3">

                                <label class="sugar-form-label">
                                    Registration No.
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="REG-XXXXX">

                            </div>


                            <div class="col-lg-3">

                                <label class="sugar-form-label required">
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

                                <div class="sugar-selected-patient">

                                    <div class="sugar-selected-avatar">
                                        DS
                                    </div>

                                    <div class="sugar-selected-info">

                                        <strong>
                                            Divya Sonawane
                                        </strong>

                                        <span>
                                            Female • 29 Years • REG-24634-26
                                        </span>

                                    </div>

                                    <div class="sugar-selected-contact">

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

                    <div class="sugar-form-section">

                        <div class="sugar-section-heading">

                            <div class="sugar-section-number">
                                02
                            </div>

                            <div>

                                <h6>
                                    Initial Sugar Reading
                                </h6>

                                <span>
                                    Record the patient's baseline blood glucose measurement.
                                </span>

                            </div>

                        </div>


                        <div class="row g-3">


                            <!-- READING -->

                            <div class="col-lg-3 col-md-6">

                                <label class="sugar-form-label required">
                                    Blood Sugar
                                </label>

                                <div class="sugar-unit-input">

                                    <input
                                        type="number"
                                        id="initialSugarValue"
                                        class="form-control"
                                        placeholder="100"
                                        min="1"
                                        required>

                                    <span>
                                        mg/dL
                                    </span>

                                </div>

                            </div>


                            <!-- READING TYPE -->

                            <div class="col-lg-3 col-md-6">

                                <label class="sugar-form-label required">
                                    Reading Type
                                </label>

                                <select
                                    id="initialSugarType"
                                    class="form-select"
                                    required>

                                    <option value="Fasting">
                                        Fasting
                                    </option>

                                    <option value="Post Meal">
                                        Post Meal
                                    </option>

                                    <option value="Random">
                                        Random
                                    </option>

                                </select>

                            </div>


                            <!-- READING DATE -->

                            <div class="col-lg-3 col-md-6">

                                <label class="sugar-form-label required">
                                    Reading Date
                                </label>

                                <input
                                    type="date"
                                    class="form-control"
                                    value="2026-09-05"
                                    required>

                            </div>


                            <!-- READING TIME -->

                            <div class="col-lg-3 col-md-6">

                                <label class="sugar-form-label">
                                    Reading Time
                                </label>

                                <input
                                    type="time"
                                    class="form-control"
                                    value="09:00">

                            </div>


                            <!-- HbA1c -->

                            <div class="col-lg-4">

                                <label class="sugar-form-label">
                                    Latest HbA1c
                                </label>

                                <div class="sugar-unit-input">

                                    <input
                                        type="number"
                                        step="0.1"
                                        class="form-control"
                                        placeholder="6.5">

                                    <span>
                                        %
                                    </span>

                                </div>

                            </div>


                            <!-- FASTING DURATION -->

                            <div class="col-lg-4">

                                <label class="sugar-form-label">
                                    Fasting Duration
                                </label>

                                <select class="form-select">

                                    <option>
                                        Not Applicable
                                    </option>

                                    <option>
                                        8 Hours
                                    </option>

                                    <option>
                                        10 Hours
                                    </option>

                                    <option>
                                        12 Hours
                                    </option>

                                </select>

                            </div>


                            <!-- DEVICE -->

                            <div class="col-lg-4">

                                <label class="sugar-form-label">
                                    Measurement Method
                                </label>

                                <select class="form-select">

                                    <option>
                                        Glucometer
                                    </option>

                                    <option>
                                        Laboratory
                                    </option>

                                    <option>
                                        Other
                                    </option>

                                </select>

                            </div>

                        </div>


                        <!-- READING PREVIEW -->

                        <div class="sugar-reading-preview">

                            <div class="sugar-preview-icon">

                                <i class="bi bi-droplet-fill"></i>

                            </div>

                            <div>

                                <span>
                                    Current Reading
                                </span>

                                <strong id="sugarPreviewValue">
                                    100
                                    <small>mg/dL</small>
                                </strong>

                            </div>

                            <div
                                class="sugar-preview-status"
                                id="sugarPreviewStatus">

                                Controlled

                            </div>

                        </div>

                    </div>


                    <!-- =================================================
                         SECTION 03
                    ================================================== -->

                    <div class="sugar-form-section">

                        <div class="sugar-section-heading">

                            <div class="sugar-section-number">
                                03
                            </div>

                            <div>

                                <h6>
                                    Diabetes & Treatment Information
                                </h6>

                                <span>
                                    Record relevant clinical and treatment information.
                                </span>

                            </div>

                        </div>


                        <div class="row g-3">


                            <div class="col-lg-6">

                                <label class="sugar-form-label">
                                    Diagnosis / Clinical Notes
                                </label>

                                <textarea
                                    class="form-control"
                                    rows="3"
                                    placeholder="Enter diagnosis or clinical notes..."></textarea>

                            </div>


                            <div class="col-lg-6">

                                <label class="sugar-form-label">
                                    Medical History
                                </label>

                                <textarea
                                    class="form-control"
                                    rows="3"
                                    placeholder="Diabetes history, previous readings, relevant conditions..."></textarea>

                            </div>


                            <div class="col-lg-4">

                                <label class="sugar-form-label">
                                    Diabetes Type
                                </label>

                                <select class="form-select">

                                    <option>
                                        Type 1
                                    </option>

                                    <option selected>
                                        Type 2
                                    </option>

                                    <option>
                                        Gestational
                                    </option>

                                    <option>
                                        Other / Unspecified
                                    </option>

                                </select>

                            </div>


                            <div class="col-lg-4">

                                <label class="sugar-form-label">
                                    Medication Status
                                </label>

                                <select class="form-select">

                                    <option>
                                        Not Started
                                    </option>

                                    <option selected>
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


                            <div class="col-lg-4">

                                <label class="sugar-form-label">
                                    Current Medicine
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Medicine name / dosage">

                            </div>


                            <div class="col-lg-6">

                                <label class="sugar-form-label">
                                    Assigned Doctor
                                </label>

                                <select class="form-select">

                                    <option selected>
                                        Dr. Samer Jawalkar
                                    </option>

                                    <option>
                                        Other Doctor
                                    </option>

                                </select>

                            </div>


                            <div class="col-lg-6">

                                <label class="sugar-form-label">
                                    Diet / Lifestyle Advice
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Diet, exercise or lifestyle instructions">

                            </div>

                        </div>

                    </div>


                    <!-- =================================================
                         SECTION 04
                    ================================================== -->

                    <div class="sugar-form-section">

                        <div class="sugar-section-heading">

                            <div class="sugar-section-number">
                                04
                            </div>

                            <div>

                                <h6>
                                    Follow-up & Reminder
                                </h6>

                                <span>
                                    Schedule future sugar monitoring and patient reminders.
                                </span>

                            </div>

                        </div>


                        <div class="row g-3">


                            <div class="col-lg-4">

                                <label class="sugar-form-label required">
                                    Next Follow-up Date
                                </label>

                                <input
                                    type="date"
                                    class="form-control"
                                    required>

                            </div>


                            <div class="col-lg-4">

                                <label class="sugar-form-label">
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


                            <div class="col-lg-4">

                                <label class="sugar-form-label">
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


                            <!-- REMINDERS -->

                            <div class="col-12">

                                <label class="sugar-form-label">
                                    Reminder Method
                                </label>

                                <div class="sugar-reminder-options">


                                    <label class="sugar-check-option">

                                        <input
                                            type="checkbox"
                                            checked>

                                        <span class="sugar-check-box">

                                            <i class="bi bi-check"></i>

                                        </span>

                                        <span>
                                            Dashboard Reminder
                                        </span>

                                    </label>


                                    <label class="sugar-check-option">

                                        <input
                                            type="checkbox">

                                        <span class="sugar-check-box">

                                            <i class="bi bi-check"></i>

                                        </span>

                                        <span>
                                            WhatsApp
                                        </span>

                                    </label>


                                    <label class="sugar-check-option">

                                        <input
                                            type="checkbox">

                                        <span class="sugar-check-box">

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

                    <div class="sugar-form-section">

                        <div class="sugar-section-heading">

                            <div class="sugar-section-number">
                                05
                            </div>

                            <div>

                                <h6>
                                    Additional Notes
                                </h6>

                                <span>
                                    Add instructions for future sugar monitoring.
                                </span>

                            </div>

                        </div>


                        <textarea
                            class="form-control"
                            rows="3"
                            placeholder="Enter additional notes, diet advice or monitoring instructions..."></textarea>

                    </div>


                    <!-- NOTICE -->

                    <div class="sugar-system-notice">

                        <div class="sugar-notice-icon">

                            <i class="bi bi-shield-check"></i>

                        </div>

                        <div>

                            <strong>
                                Sugar monitoring record
                            </strong>

                            <span>
                                The patient will be added to the sugar monitoring
                                list. Future glucose readings can be maintained
                                in the patient's sugar history.
                            </span>

                        </div>

                    </div>

                </form>

            </div>


            <!-- MODAL FOOTER -->

            <div class="modal-footer sugar-modal-footer">

                <button
                    type="button"
                    class="btn sugar-light-btn"
                    data-bs-dismiss="modal">

                    <i class="bi bi-x-lg me-1"></i>
                    Cancel

                </button>


                <button
                    type="button"
                    class="btn sugar-outline-btn">

                    <i class="bi bi-eye me-1"></i>
                    Preview

                </button>


                <button
                    type="submit"
                    form="addSugarPatientForm"
                    class="btn sugar-primary-btn">

                    <i class="bi bi-person-check me-1"></i>
                    Add Sugar Patient

                </button>

            </div>

        </div>

    </div>

</div>


<!-- =========================================================
     PAGE CSS
========================================================= -->

<style>

/* =========================================================
   PAGE
========================================================= */

.sugar-patients-page {
    width: 100%;
}


/* =========================================================
   HEADER
========================================================= */

.sugar-page-header {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    gap: 20px;
    margin-bottom: 24px;
}

.sugar-breadcrumb {
    display: flex;
    align-items: center;
    gap: 7px;
    color: #8b989e;
    font-size: 11px;
    margin-bottom: 7px;
}

.sugar-breadcrumb i {
    font-size: 9px;
}

.sugar-page-title {
    margin: 0;
    color: #263a42;
    font-size: 25px;
    font-weight: 700;
}

.sugar-page-subtitle {
    margin: 5px 0 0;
    color: #859299;
    font-size: 12px;
}


/* =========================================================
   BUTTONS
========================================================= */

.sugar-primary-btn {
    background: var(--bs-primary);
    border-color: var(--bs-primary);
    color: #fff;
    border-radius: 8px;
    padding: 10px 16px;
    font-size: 12px;
    font-weight: 600;
    box-shadow: 0 5px 15px rgba(0,0,0,.06);
}

.sugar-primary-btn:hover,
.sugar-primary-btn:focus {
    background: var(--bs-primary);
    border-color: var(--bs-primary);
    color: #fff;
    opacity: .92;
}

.sugar-light-btn {
    background: #f5f7f8;
    border: 1px solid #e0e7e9;
    color: #596a71;
    border-radius: 8px;
    padding: 10px 15px;
    font-size: 12px;
    font-weight: 600;
}

.sugar-light-btn:hover {
    background: #edf1f2;
}

.sugar-outline-btn {
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

.sugar-stat-card {
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

.sugar-stat-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(30,55,65,.07);
}

.sugar-stat-icon {
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

.sugar-stat-icon.high {
    background: #fff3ef;
    color: #c66552;
}

.sugar-stat-icon.controlled {
    background: #edf8f4;
    color: #3f9273;
}

.sugar-stat-icon.followup {
    background: #f2f5fb;
    color: #617da8;
}

.sugar-stat-label {
    color: #87949a;
    font-size: 10px;
    margin-bottom: 3px;
}

.sugar-stat-value {
    color: #293d45;
    font-size: 23px;
    font-weight: 700;
    line-height: 1.2;
}

.sugar-stat-note {
    color: #99a4a8;
    font-size: 9px;
    margin-top: 3px;
}


/* =========================================================
   MONITOR CARD
========================================================= */

.sugar-monitor-card {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    padding: 16px 18px;
    border: 1px solid #dfe8ea;
    border-radius: 12px;
    background: linear-gradient(100deg,#f6fbfb,#fff);
}

.sugar-monitor-left {
    display: flex;
    align-items: center;
    gap: 12px;
}

.sugar-monitor-icon {
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

.sugar-monitor-left strong {
    display: block;
    color: #33474e;
    font-size: 12px;
}

.sugar-monitor-left span {
    display: block;
    color: #8a979d;
    font-size: 9px;
    margin-top: 3px;
}

.sugar-monitor-summary {
    display: flex;
    align-items: center;
    gap: 28px;
}

.sugar-monitor-summary div {
    text-align: right;
}

.sugar-monitor-summary small {
    display: block;
    color: #8b989d;
    font-size: 8px;
}

.sugar-monitor-summary strong {
    display: block;
    color: #33474d;
    font-size: 16px;
    margin-top: 2px;
}


/* =========================================================
   FILTER
========================================================= */

.sugar-filter-card {
    background: #fff;
    border: 1px solid #e1e8ea;
    border-radius: 12px;
    padding: 17px;
    margin-bottom: 20px;
}

.sugar-form-label {
    display: block;
    color: #586a71;
    font-size: 10px;
    font-weight: 600;
    margin-bottom: 6px;
}

.sugar-form-label.required::after {
    content: " *";
    color: #c45764;
}

.sugar-filter-card .form-control,
.sugar-filter-card .form-select,
.sugar-form-section .form-control,
.sugar-form-section .form-select {
    min-height: 40px;
    border-color: #dce5e8;
    border-radius: 7px;
    color: #35484f;
    font-size: 11px;
    box-shadow: none;
}

.sugar-filter-card .form-control:focus,
.sugar-filter-card .form-select:focus,
.sugar-form-section .form-control:focus,
.sugar-form-section .form-select:focus {
    border-color: var(--bs-primary);
    box-shadow: 0 0 0 .15rem rgba(var(--bs-primary-rgb),.10);
}

.sugar-input-icon {
    position: relative;
}

.sugar-input-icon > i {
    position: absolute;
    left: 12px;
    top: 50%;
    transform: translateY(-50%);
    color: #89969b;
    z-index: 2;
}

.sugar-input-icon .form-control {
    padding-left: 34px;
}

.sugar-filter-actions {
    display: flex;
    gap: 8px;
}


/* =========================================================
   LIST
========================================================= */

.sugar-list-card {
    background: #fff;
    border: 1px solid #e1e8ea;
    border-radius: 12px;
    overflow: hidden;
}

.sugar-list-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 17px 19px;
    border-bottom: 1px solid #e8edef;
}

.sugar-list-header h5 {
    margin: 0;
    color: #2d4048;
    font-size: 14px;
    font-weight: 700;
}

.sugar-list-header span {
    display: block;
    color: #8b989d;
    font-size: 10px;
    margin-top: 3px;
}

.sugar-record-count {
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

.sugar-table {
    margin: 0;
    min-width: 1080px;
}

.sugar-table thead th {
    background: #f7f9fa;
    border-bottom: 1px solid #e2e8ea;
    color: #7b898f;
    font-size: 9px;
    font-weight: 700;
    padding: 11px 13px;
    white-space: nowrap;
}

.sugar-table tbody td {
    color: #607077;
    font-size: 10px;
    padding: 12px 13px;
    border-bottom: 1px solid #edf1f2;
}

.sugar-table tbody tr:last-child td {
    border-bottom: none;
}

.sugar-table tbody tr:hover {
    background: #fbfcfc;
}


/* =========================================================
   PATIENT
========================================================= */

.sugar-patient {
    display: flex;
    align-items: center;
    gap: 9px;
}

.sugar-avatar {
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

.sugar-patient strong {
    display: block;
    color: #33474d;
    font-size: 10px;
}

.sugar-patient small {
    display: block;
    color: #96a2a7;
    font-size: 8px;
    margin-top: 2px;
}


/* =========================================================
   READING
========================================================= */

.sugar-reading strong {
    color: #34484f;
    font-size: 14px;
    font-weight: 700;
}

.sugar-reading small {
    color: #89979c;
    font-size: 8px;
    margin-left: 2px;
}

.sugar-reading.high-value strong {
    color: #bd654f;
}

.sugar-reading.critical-value strong {
    color: #ad4e59;
}

.sugar-reading.elevated-value strong {
    color: #967542;
}

.sugar-reading-date {
    color: #99a4a8;
    font-size: 8px;
    margin-top: 3px;
}

.sugar-reading-type {
    color: #617279;
    font-size: 9px;
    font-weight: 600;
}


/* =========================================================
   STATUS
========================================================= */

.sugar-status {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    padding: 5px 8px;
    border-radius: 20px;
    font-size: 8px;
    font-weight: 700;
    white-space: nowrap;
}

.sugar-status.normal {
    color: #39836b;
    background: #edf8f4;
}

.sugar-status.elevated {
    color: #92703d;
    background: #fbf6e9;
}

.sugar-status.high {
    color: #b6624f;
    background: #fff2ee;
}

.sugar-status.critical {
    color: #a84f5c;
    background: #fdf0f3;
}


/* =========================================================
   MEDICATION
========================================================= */

.sugar-medication {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    font-size: 8px;
    font-weight: 700;
}

.sugar-medication.active {
    color: #43846e;
}

.sugar-medication.review {
    color: #b7674e;
}


/* =========================================================
   FOLLOW UP
========================================================= */

.sugar-followup strong {
    display: block;
    color: #4b5e65;
    font-size: 9px;
}

.sugar-followup small {
    display: block;
    color: #97a3a8;
    font-size: 8px;
    margin-top: 2px;
}

.sugar-followup.due strong {
    color: #b6674f;
}

.sugar-followup.overdue strong {
    color: #aa505b;
}


/* =========================================================
   ACTIONS
========================================================= */

.sugar-actions {
    display: flex;
    justify-content: flex-end;
    gap: 5px;
}

.sugar-action-btn {
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

.sugar-action-btn:hover {
    color: var(--bs-primary);
    border-color: rgba(var(--bs-primary-rgb),.35);
    background: rgba(var(--bs-primary-rgb),.05);
}


/* =========================================================
   PAGINATION
========================================================= */

.sugar-pagination {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 15px;
    padding: 13px 18px;
    border-top: 1px solid #e8edef;
}

.sugar-pagination-info {
    color: #89969b;
    font-size: 9px;
}

.sugar-pagination-info strong {
    color: #50636d;
}

.sugar-pages {
    display: flex;
    align-items: center;
    gap: 4px;
}

.sugar-page-btn {
    min-width: 29px;
    height: 29px;
    border: 1px solid #dfe7e9;
    background: #fff;
    color: #697980;
    border-radius: 6px;
    font-size: 9px;
}

.sugar-page-btn.active,
.sugar-page-btn:hover {
    background: var(--bs-primary);
    border-color: var(--bs-primary);
    color: #fff;
}


/* =========================================================
   MODAL
========================================================= */

.sugar-modal {
    border: none;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 25px 70px rgba(20,40,50,.18);
}

.sugar-modal-header {
    padding: 16px 19px;
    background: #fff;
    border-bottom: 1px solid #e6edef;
}

.sugar-modal-heading {
    display: flex;
    align-items: center;
    gap: 11px;
}

.sugar-modal-icon {
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

.sugar-modal-heading h5 {
    margin: 0;
    color: #2e424a;
    font-size: 15px;
    font-weight: 700;
}

.sugar-modal-heading p {
    margin: 3px 0 0;
    color: #89969b;
    font-size: 9px;
}

.sugar-modal-body {
    max-height: calc(100vh - 185px);
    overflow-y: auto;
    background: #fbfcfc;
    padding: 19px;
}


/* =========================================================
   FORM SECTION
========================================================= */

.sugar-form-section {
    background: #fff;
    border: 1px solid #e0e8ea;
    border-radius: 11px;
    padding: 16px;
    margin-bottom: 14px;
}

.sugar-section-heading {
    display: flex;
    align-items: center;
    gap: 10px;
    padding-bottom: 12px;
    margin-bottom: 14px;
    border-bottom: 1px solid #edf1f2;
}

.sugar-section-number {
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

.sugar-section-heading h6 {
    margin: 0;
    color: #33474c;
    font-size: 11px;
    font-weight: 700;
}

.sugar-section-heading span {
    display: block;
    color: #909ca1;
    font-size: 8px;
    margin-top: 2px;
}


/* =========================================================
   SELECTED PATIENT
========================================================= */

.sugar-selected-patient {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 11px 12px;
    border: 1px solid #dbe9eb;
    border-radius: 9px;
    background: #f5fafb;
}

.sugar-selected-avatar {
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

.sugar-selected-info {
    flex: 1;
}

.sugar-selected-info strong {
    display: block;
    color: #34474e;
    font-size: 10px;
}

.sugar-selected-info span {
    display: block;
    color: #8c999e;
    font-size: 8px;
    margin-top: 3px;
}

.sugar-selected-contact {
    color: #6e7d83;
    font-size: 8px;
}

.sugar-selected-contact i {
    color: var(--bs-primary);
}


/* =========================================================
   UNIT INPUT
========================================================= */

.sugar-unit-input {
    display: flex;
    align-items: stretch;
}

.sugar-unit-input .form-control {
    border-radius: 7px 0 0 7px !important;
}

.sugar-unit-input span {
    min-width: 58px;
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

.sugar-reading-preview {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-top: 15px;
    padding: 11px 13px;
    background: #f5fafb;
    border: 1px solid #dcebed;
    border-radius: 9px;
}

.sugar-preview-icon {
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

.sugar-reading-preview > div:nth-child(2) {
    flex: 1;
}

.sugar-reading-preview span {
    display: block;
    color: #89979d;
    font-size: 8px;
}

.sugar-reading-preview strong {
    display: block;
    color: #34484f;
    font-size: 14px;
    margin-top: 2px;
}

.sugar-reading-preview strong small {
    color: #89969b;
    font-size: 8px;
    font-weight: 400;
}

.sugar-preview-status {
    background: #edf8f4;
    color: #3c876d;
    border-radius: 20px;
    padding: 5px 9px;
    font-size: 8px;
    font-weight: 700;
}


/* =========================================================
   REMINDERS
========================================================= */

.sugar-reminder-options {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 9px;
}

.sugar-check-option {
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

.sugar-check-option input {
    display: none;
}

.sugar-check-box {
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

.sugar-check-option input:checked + .sugar-check-box {
    background: var(--bs-primary);
    border-color: var(--bs-primary);
}

.sugar-check-box i {
    display: none;
}

.sugar-check-option input:checked + .sugar-check-box i {
    display: block;
}


/* =========================================================
   NOTICE
========================================================= */

.sugar-system-notice {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    padding: 11px 13px;
    border: 1px solid #dcebed;
    background: #f5fafb;
    border-radius: 9px;
}

.sugar-notice-icon {
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

.sugar-system-notice strong {
    display: block;
    color: #455960;
    font-size: 9px;
}

.sugar-system-notice span {
    display: block;
    color: #8b989d;
    font-size: 8px;
    line-height: 1.5;
    margin-top: 2px;
}


/* =========================================================
   MODAL FOOTER
========================================================= */

.sugar-modal-footer {
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

    .sugar-page-header {
        align-items: flex-start;
        flex-direction: column;
    }

    .sugar-page-header-action,
    .sugar-page-header-action .btn {
        width: 100%;
    }

    .sugar-monitor-card {
        align-items: flex-start;
        flex-direction: column;
    }

    .sugar-monitor-summary {
        width: 100%;
        justify-content: space-between;
    }

    .sugar-monitor-summary div {
        text-align: left;
    }

    .sugar-modal-body {
        padding: 15px;
    }

}


@media (max-width: 767.98px) {

    .sugar-page-title {
        font-size: 21px;
    }

    .sugar-page-subtitle {
        font-size: 10px;
    }

    .sugar-filter-actions {
        width: 100%;
    }

    .sugar-filter-actions .btn {
        flex: 1;
    }

    .sugar-list-header {
        align-items: flex-start;
        flex-direction: column;
        gap: 8px;
    }

    .sugar-pagination {
        align-items: flex-start;
        flex-direction: column;
    }

    .sugar-pages {
        width: 100%;
        justify-content: center;
    }

    .sugar-form-section {
        padding: 13px;
    }

    .sugar-selected-patient {
        align-items: flex-start;
        flex-wrap: wrap;
    }

    .sugar-selected-contact {
        width: 100%;
        padding-left: 50px;
    }

    .sugar-modal-footer {
        flex-wrap: wrap;
    }

    .sugar-modal-footer .btn {
        flex: 1;
    }

}


@media (max-width: 575.98px) {

    .sugar-page-header {
        margin-bottom: 18px;
    }

    .sugar-stat-card {
        min-height: 90px;
        padding: 13px;
    }

    .sugar-stat-icon {
        width: 41px;
        height: 41px;
        min-width: 41px;
    }

    .sugar-stat-value {
        font-size: 20px;
    }

    .sugar-monitor-card {
        padding: 13px;
    }

    .sugar-monitor-summary {
        gap: 12px;
    }

    .sugar-monitor-summary strong {
        font-size: 14px;
    }

    .sugar-filter-card {
        padding: 13px;
    }

    .sugar-list-header {
        padding: 14px;
    }

    .sugar-modal-heading p {
        display: none;
    }

    .sugar-modal-footer .btn {
        width: 100%;
        flex: 100%;
    }

    .sugar-reminder-options {
        flex-direction: column;
        align-items: stretch;
    }

    .sugar-check-option {
        width: 100%;
    }

}

</style>


<!-- =========================================================
     PAGE JAVASCRIPT
========================================================= -->

<script>

document.addEventListener("DOMContentLoaded", function () {

    const form =
        document.getElementById("addSugarPatientForm");

    const sugarInput =
        document.getElementById("initialSugarValue");

    const sugarPreview =
        document.getElementById("sugarPreviewValue");

    const sugarStatus =
        document.getElementById("sugarPreviewStatus");

    const sugarType =
        document.getElementById("initialSugarType");


    /* =====================================================
       FORM VALIDATION
    ====================================================== */

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
             * 1. Validate patient_id
             * 2. Create sugar monitoring record
             * 3. Save initial glucose reading
             * 4. Save reading type
             * 5. Save HbA1c if available
             * 6. Save diabetes/treatment information
             * 7. Save follow-up date
             * 8. Create reminder
             * 9. Redirect to Sugar Patient History
             */

            alert(
                "Sugar patient form is ready for CI4 integration."
            );

        });

    }


    /* =====================================================
       SUGAR READING PREVIEW
    ====================================================== */

    function updateSugarPreview() {

        if (!sugarInput || !sugarPreview || !sugarStatus) {
            return;
        }

        const value =
            parseFloat(sugarInput.value) || 100;

        sugarPreview.innerHTML =
            value +
            ' <small>mg/dL</small>';


        /*
         * These are interface categories only.
         * Final clinical interpretation should be determined
         * by the doctor/clinic workflow.
         */

        let status = "Controlled";

        if (value >= 300) {

            status = "Critical";

        }
        else if (value >= 200) {

            status = "High";

        }
        else if (value >= 126) {

            status = "Elevated";

        }


        sugarStatus.textContent = status;


        if (status === "Critical") {

            sugarStatus.style.background = "#fdf0f3";
            sugarStatus.style.color = "#a84f5c";

        }
        else if (status === "High") {

            sugarStatus.style.background = "#fff2ee";
            sugarStatus.style.color = "#b6624f";

        }
        else if (status === "Elevated") {

            sugarStatus.style.background = "#fbf6e9";
            sugarStatus.style.color = "#92703d";

        }
        else {

            sugarStatus.style.background = "#edf8f4";
            sugarStatus.style.color = "#39836b";

        }

    }


    if (sugarInput) {

        sugarInput.addEventListener(
            "input",
            updateSugarPreview
        );

    }


    if (sugarType) {

        sugarType.addEventListener(
            "change",
            updateSugarPreview
        );

    }


    updateSugarPreview();

});

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<body>
</html>