<?php include('header.php'); ?>
<!-- =========================================================
     MEDICAL CERTIFICATES PAGE
     CONTENT AREA ONLY
     Existing Vetal Clinic Header / Sidebar / Footer unchanged
========================================================= -->

<main class="content">
<div class="medical-certificates-page">

    <!-- =====================================================
         PAGE HEADER
    ====================================================== -->

    <div class="mc-page-header">

        <div>
            <div class="mc-breadcrumb">
                <i class="bi bi-house"></i>
                <span>Dashboard</span>
                <i class="bi bi-chevron-right"></i>
                <span>Medical Certificates</span>
            </div>

            <h2 class="mc-page-title">
                Medical Certificates
            </h2>

            <p class="mc-page-subtitle">
                Create, manage and print patient medical certificates.
            </p>
        </div>

        <div class="mc-header-action">

            <button
                type="button"
                class="btn mc-primary-btn"
                data-bs-toggle="modal"
                data-bs-target="#createCertificateModal">

                <i class="bi bi-file-earmark-plus me-2"></i>
                Create New Certificate

            </button>

        </div>

    </div>


    <!-- =====================================================
         SUMMARY CARDS
    ====================================================== -->

    <div class="row g-3 mb-4">

        <!-- TOTAL -->

        <div class="col-xl-3 col-md-6">

            <div class="mc-stat-card">

                <div class="mc-stat-icon">
                    <i class="bi bi-file-earmark-medical"></i>
                </div>

                <div class="mc-stat-content">

                    <div class="mc-stat-label">
                        Total Certificates
                    </div>

                    <div class="mc-stat-value">
                        248
                    </div>

                    <div class="mc-stat-meta">
                        <i class="bi bi-arrow-up"></i>
                        12 this month
                    </div>

                </div>

            </div>

        </div>


        <!-- TODAY -->

        <div class="col-xl-3 col-md-6">

            <div class="mc-stat-card">

                <div class="mc-stat-icon">
                    <i class="bi bi-calendar-check"></i>
                </div>

                <div class="mc-stat-content">

                    <div class="mc-stat-label">
                        Issued Today
                    </div>

                    <div class="mc-stat-value">
                        08
                    </div>

                    <div class="mc-stat-meta">
                        Today's certificates
                    </div>

                </div>

            </div>

        </div>


        <!-- FITNESS -->

        <div class="col-xl-3 col-md-6">

            <div class="mc-stat-card">

                <div class="mc-stat-icon">
                    <i class="bi bi-person-check"></i>
                </div>

                <div class="mc-stat-content">

                    <div class="mc-stat-label">
                        Fitness Certificates
                    </div>

                    <div class="mc-stat-value">
                        74
                    </div>

                    <div class="mc-stat-meta">
                        Active records
                    </div>

                </div>

            </div>

        </div>


        <!-- SICK LEAVE -->

        <div class="col-xl-3 col-md-6">

            <div class="mc-stat-card">

                <div class="mc-stat-icon">
                    <i class="bi bi-calendar2-x"></i>
                </div>

                <div class="mc-stat-content">

                    <div class="mc-stat-label">
                        Sick Leave
                    </div>

                    <div class="mc-stat-value">
                        96
                    </div>

                    <div class="mc-stat-meta">
                        Issued certificates
                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- =====================================================
         FILTER + SEARCH
    ====================================================== -->

    <div class="mc-filter-card">

        <div class="row g-3 align-items-end">

            <div class="col-xl-3 col-lg-4 col-md-6">

                <label class="mc-form-label">
                    Search Patient
                </label>

                <div class="mc-input-icon">

                    <i class="bi bi-search"></i>

                    <input
                        type="text"
                        class="form-control"
                        placeholder="Patient name, mobile or certificate no.">

                </div>

            </div>


            <div class="col-xl-2 col-lg-3 col-md-6">

                <label class="mc-form-label">
                    Certificate Type
                </label>

                <select class="form-select">

                    <option value="">
                        All Types
                    </option>

                    <option>
                        Medical Fitness
                    </option>

                    <option>
                        Sick Leave
                    </option>

                    <option>
                        Medical Illness
                    </option>

                    <option>
                        Fit to Resume Duty
                    </option>

                    <option>
                        Medical Rest
                    </option>

                    <option>
                        Other
                    </option>

                </select>

            </div>


            <div class="col-xl-2 col-lg-3 col-md-6">

                <label class="mc-form-label">
                    From Date
                </label>

                <input
                    type="date"
                    class="form-control">

            </div>


            <div class="col-xl-2 col-lg-3 col-md-6">

                <label class="mc-form-label">
                    To Date
                </label>

                <input
                    type="date"
                    class="form-control">

            </div>


            <div class="col-xl-3 col-lg-12">

                <div class="mc-filter-actions">

                    <button
                        type="button"
                        class="btn mc-primary-btn">

                        <i class="bi bi-search me-1"></i>
                        Search

                    </button>

                    <button
                        type="button"
                        class="btn mc-light-btn">

                        <i class="bi bi-arrow-clockwise me-1"></i>
                        Reset

                    </button>

                </div>

            </div>

        </div>

    </div>


    <!-- =====================================================
         CERTIFICATE LIST
    ====================================================== -->

    <div class="mc-list-card">

        <div class="mc-list-header">

            <div>

                <h5>
                    Recent Medical Certificates
                </h5>

                <span>
                    Manage issued patient certificates
                </span>

            </div>

            <div class="mc-record-count">
                248 Records
            </div>

        </div>


        <!-- DESKTOP TABLE -->

        <div class="table-responsive">

            <table class="table mc-table align-middle">

                <thead>

                    <tr>

                        <th>
                            Certificate
                        </th>

                        <th>
                            Patient
                        </th>

                        <th>
                            Type
                        </th>

                        <th>
                            Issue Date
                        </th>

                        <th>
                            Validity
                        </th>

                        <th>
                            Doctor
                        </th>

                        <th class="text-end">
                            Action
                        </th>

                    </tr>

                </thead>

                <tbody>


                    <!-- ROW 1 -->

                    <tr>

                        <td>

                            <div class="mc-certificate-id">

                                <div class="mc-certificate-icon">
                                    <i class="bi bi-file-earmark-medical"></i>
                                </div>

                                <div>

                                    <strong>
                                        MC-2026-0248
                                    </strong>

                                    <small>
                                        Medical Certificate
                                    </small>

                                </div>

                            </div>

                        </td>


                        <td>

                            <div class="mc-patient">

                                <div class="mc-avatar">
                                    DS
                                </div>

                                <div>

                                    <strong>
                                        Divya Sonawane
                                    </strong>

                                    <small>
                                        REG-24634-26
                                    </small>

                                </div>

                            </div>

                        </td>


                        <td>

                            <span class="mc-type-badge fitness">
                                <i class="bi bi-person-check"></i>
                                Medical Fitness
                            </span>

                        </td>


                        <td>
                            05 Sep 2026
                        </td>


                        <td>
                            05 Sep 2026
                        </td>


                        <td>
                            <span class="mc-doctor">
                                Dr. Samer Jawalkar
                            </span>
                        </td>


                        <td>

                            <div class="mc-actions">

                                <button
                                    type="button"
                                    class="mc-action-btn"
                                    title="View">

                                    <i class="bi bi-eye"></i>

                                </button>

                                <button
                                    type="button"
                                    class="mc-action-btn"
                                    title="Print">

                                    <i class="bi bi-printer"></i>

                                </button>

                                <button
                                    type="button"
                                    class="mc-action-btn"
                                    title="Download">

                                    <i class="bi bi-download"></i>

                                </button>

                            </div>

                        </td>

                    </tr>


                    <!-- ROW 2 -->

                    <tr>

                        <td>

                            <div class="mc-certificate-id">

                                <div class="mc-certificate-icon">
                                    <i class="bi bi-file-earmark-text"></i>
                                </div>

                                <div>

                                    <strong>
                                        MC-2026-0247
                                    </strong>

                                    <small>
                                        Medical Certificate
                                    </small>

                                </div>

                            </div>

                        </td>


                        <td>

                            <div class="mc-patient">

                                <div class="mc-avatar">
                                    RK
                                </div>

                                <div>

                                    <strong>
                                        Rahul Kulkarni
                                    </strong>

                                    <small>
                                        REG-24589-26
                                    </small>

                                </div>

                            </div>

                        </td>


                        <td>

                            <span class="mc-type-badge sick">
                                <i class="bi bi-calendar2-x"></i>
                                Sick Leave
                            </span>

                        </td>


                        <td>
                            04 Sep 2026
                        </td>


                        <td>
                            04 - 07 Sep
                        </td>


                        <td>
                            <span class="mc-doctor">
                                Dr. Samer Jawalkar
                            </span>
                        </td>


                        <td>

                            <div class="mc-actions">

                                <button class="mc-action-btn">
                                    <i class="bi bi-eye"></i>
                                </button>

                                <button class="mc-action-btn">
                                    <i class="bi bi-printer"></i>
                                </button>

                                <button class="mc-action-btn">
                                    <i class="bi bi-download"></i>
                                </button>

                            </div>

                        </td>

                    </tr>


                    <!-- ROW 3 -->

                    <tr>

                        <td>

                            <div class="mc-certificate-id">

                                <div class="mc-certificate-icon">
                                    <i class="bi bi-file-medical"></i>
                                </div>

                                <div>

                                    <strong>
                                        MC-2026-0246
                                    </strong>

                                    <small>
                                        Medical Certificate
                                    </small>

                                </div>

                            </div>

                        </td>


                        <td>

                            <div class="mc-patient">

                                <div class="mc-avatar">
                                    AM
                                </div>

                                <div>

                                    <strong>
                                        Amit More
                                    </strong>

                                    <small>
                                        REG-24577-26
                                    </small>

                                </div>

                            </div>

                        </td>


                        <td>

                            <span class="mc-type-badge illness">
                                <i class="bi bi-heart-pulse"></i>
                                Medical Illness
                            </span>

                        </td>


                        <td>
                            03 Sep 2026
                        </td>


                        <td>
                            03 - 10 Sep
                        </td>


                        <td>
                            <span class="mc-doctor">
                                Dr. Samer Jawalkar
                            </span>
                        </td>


                        <td>

                            <div class="mc-actions">

                                <button class="mc-action-btn">
                                    <i class="bi bi-eye"></i>
                                </button>

                                <button class="mc-action-btn">
                                    <i class="bi bi-printer"></i>
                                </button>

                                <button class="mc-action-btn">
                                    <i class="bi bi-download"></i>
                                </button>

                            </div>

                        </td>

                    </tr>


                    <!-- ROW 4 -->

                    <tr>

                        <td>

                            <div class="mc-certificate-id">

                                <div class="mc-certificate-icon">
                                    <i class="bi bi-file-check"></i>
                                </div>

                                <div>

                                    <strong>
                                        MC-2026-0245
                                    </strong>

                                    <small>
                                        Medical Certificate
                                    </small>

                                </div>

                            </div>

                        </td>


                        <td>

                            <div class="mc-patient">

                                <div class="mc-avatar">
                                    SP
                                </div>

                                <div>

                                    <strong>
                                        Sneha Patil
                                    </strong>

                                    <small>
                                        REG-24561-26
                                    </small>

                                </div>

                            </div>

                        </td>


                        <td>

                            <span class="mc-type-badge resume">
                                <i class="bi bi-person-check"></i>
                                Fit to Resume Duty
                            </span>

                        </td>


                        <td>
                            02 Sep 2026
                        </td>


                        <td>
                            02 Sep 2026
                        </td>


                        <td>
                            <span class="mc-doctor">
                                Dr. Samer Jawalkar
                            </span>

                        </td>


                        <td>

                            <div class="mc-actions">

                                <button class="mc-action-btn">
                                    <i class="bi bi-eye"></i>
                                </button>

                                <button class="mc-action-btn">
                                    <i class="bi bi-printer"></i>
                                </button>

                                <button class="mc-action-btn">
                                    <i class="bi bi-download"></i>
                                </button>

                            </div>

                        </td>

                    </tr>

                </tbody>

            </table>

        </div>


        <!-- PAGINATION -->

        <div class="mc-pagination">

            <div class="mc-pagination-info">
                Showing <strong>1-10</strong> of <strong>248</strong>
                certificates
            </div>

            <div class="mc-pages">

                <button class="mc-page-btn">
                    <i class="bi bi-chevron-left"></i>
                </button>

                <button class="mc-page-btn active">
                    1
                </button>

                <button class="mc-page-btn">
                    2
                </button>

                <button class="mc-page-btn">
                    3
                </button>

                <span>...</span>

                <button class="mc-page-btn">
                    25
                </button>

                <button class="mc-page-btn">
                    <i class="bi bi-chevron-right"></i>
                </button>

            </div>

        </div>

    </div>

</div>


<!-- =========================================================
     CREATE MEDICAL CERTIFICATE MODAL
========================================================= -->

<div
    class="modal fade"
    id="createCertificateModal"
    tabindex="-1"
    aria-labelledby="createCertificateModalLabel"
    aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-xl">

        <div class="modal-content mc-modal-content">


            <!-- MODAL HEADER -->

            <div class="modal-header mc-modal-header">

                <div>

                    <div class="mc-modal-icon">
                        <i class="bi bi-file-earmark-medical"></i>
                    </div>

                    <div class="mc-modal-title-area">

                        <h5
                            class="modal-title"
                            id="createCertificateModalLabel">

                            Create Medical Certificate

                        </h5>

                        <p>
                            Generate a professional patient medical certificate.
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

            <div class="modal-body mc-modal-body">

                <form id="medicalCertificateForm">


                    <!-- =================================================
                         PATIENT SECTION
                    ================================================== -->

                    <div class="mc-form-section">

                        <div class="mc-section-heading">

                            <div class="mc-section-number">
                                01
                            </div>

                            <div>

                                <h6>
                                    Patient Information
                                </h6>

                                <span>
                                    Select the patient for this certificate
                                </span>

                            </div>

                        </div>


                        <div class="row g-3">

                            <div class="col-lg-6">

                                <label class="mc-form-label required">
                                    Select Patient
                                </label>

                                <div class="mc-input-icon">

                                    <i class="bi bi-person-search"></i>

                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Search patient by name / mobile / registration no."
                                        required>

                                </div>

                            </div>


                            <div class="col-lg-3">

                                <label class="mc-form-label">
                                    Patient Registration No.
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="REG-XXXXX">

                            </div>


                            <div class="col-lg-3">

                                <label class="mc-form-label">
                                    Certificate Date
                                </label>

                                <input
                                    type="date"
                                    class="form-control"
                                    value="2026-09-05"
                                    required>

                            </div>

                        </div>


                        <!-- SELECTED PATIENT -->

                        <div class="mc-selected-patient">

                            <div class="mc-selected-avatar">
                                DS
                            </div>

                            <div class="mc-selected-details">

                                <strong>
                                    Divya Sonawane
                                </strong>

                                <span>
                                    Female &nbsp;•&nbsp;
                                    29 Years &nbsp;•&nbsp;
                                    REG-24634-26
                                </span>

                            </div>

                            <div class="mc-patient-contact">

                                <i class="bi bi-telephone"></i>
                                9075756144

                            </div>

                        </div>

                    </div>


                    <!-- =================================================
                         CERTIFICATE TYPE
                    ================================================== -->

                    <div class="mc-form-section">

                        <div class="mc-section-heading">

                            <div class="mc-section-number">
                                02
                            </div>

                            <div>

                                <h6>
                                    Certificate Type
                                </h6>

                                <span>
                                    Select the type of medical certificate
                                </span>

                            </div>

                        </div>


                        <div class="row g-3">

                            <div class="col-lg-6">

                                <label class="mc-form-label required">
                                    Certificate Type
                                </label>

                                <select
                                    class="form-select"
                                    id="certificateType"
                                    required>

                                    <option value="">
                                        Select Certificate Type
                                    </option>

                                    <option value="fitness">
                                        Medical Fitness Certificate
                                    </option>

                                    <option value="sick_leave">
                                        Sick Leave Certificate
                                    </option>

                                    <option value="illness">
                                        Medical Illness Certificate
                                    </option>

                                    <option value="resume">
                                        Fit to Resume Duty Certificate
                                    </option>

                                    <option value="rest">
                                        Medical Rest Certificate
                                    </option>

                                    <option value="referral">
                                        Medical Referral Certificate
                                    </option>

                                    <option value="other">
                                        Other Medical Certificate
                                    </option>

                                </select>

                            </div>


                            <div class="col-lg-6">

                                <label class="mc-form-label">
                                    Certificate Purpose
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="e.g. Office, School, College, Travel">

                            </div>

                        </div>


                        <!-- TYPE DESCRIPTION -->

                        <div
                            class="mc-certificate-info"
                            id="certificateTypeInfo">

                            <i class="bi bi-info-circle"></i>

                            <span>
                                Select a certificate type to display
                                relevant information.
                            </span>

                        </div>

                    </div>


                    <!-- =================================================
                         MEDICAL DETAILS
                    ================================================== -->

                    <div class="mc-form-section">

                        <div class="mc-section-heading">

                            <div class="mc-section-number">
                                03
                            </div>

                            <div>

                                <h6>
                                    Medical Details
                                </h6>

                                <span>
                                    Enter clinical information for the certificate
                                </span>

                            </div>

                        </div>


                        <div class="row g-3">

                            <div class="col-lg-6">

                                <label class="mc-form-label required">
                                    Diagnosis / Medical Condition
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Enter diagnosis or medical condition"
                                    required>

                            </div>


                            <div class="col-lg-3">

                                <label class="mc-form-label">
                                    Examination Date
                                </label>

                                <input
                                    type="date"
                                    class="form-control"
                                    value="2026-09-05">

                            </div>


                            <div class="col-lg-3">

                                <label class="mc-form-label">
                                    Consultation / OPD No.
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="OPD-XXXXX">

                            </div>


                            <div class="col-lg-4">

                                <label class="mc-form-label">
                                    Medical Advice
                                </label>

                                <select class="form-select">

                                    <option value="">
                                        Select Advice
                                    </option>

                                    <option>
                                        Rest Advised
                                    </option>

                                    <option>
                                        Treatment Continued
                                    </option>

                                    <option>
                                        Follow-up Required
                                    </option>

                                    <option>
                                        No Restriction
                                    </option>

                                    <option>
                                        Other
                                    </option>

                                </select>

                            </div>


                            <div class="col-lg-4">

                                <label class="mc-form-label">
                                    From Date
                                </label>

                                <input
                                    type="date"
                                    class="form-control">

                            </div>


                            <div class="col-lg-4">

                                <label class="mc-form-label">
                                    To Date
                                </label>

                                <input
                                    type="date"
                                    class="form-control">

                            </div>

                        </div>

                    </div>


                    <!-- =================================================
                         CERTIFICATE CONTENT
                    ================================================== -->

                    <div class="mc-form-section">

                        <div class="mc-section-heading">

                            <div class="mc-section-number">
                                04
                            </div>

                            <div>

                                <h6>
                                    Certificate Statement
                                </h6>

                                <span>
                                    Review or customize the certificate wording
                                </span>

                            </div>

                        </div>


                        <div class="mb-3">

                            <label class="mc-form-label required">
                                Certificate Statement
                            </label>

                            <textarea
                                class="form-control mc-textarea"
                                rows="5"
                                required>I hereby certify that the above-mentioned patient was examined by me and, based on the clinical assessment, the medical certificate is issued for the stated purpose.</textarea>

                            <div class="mc-help-text">
                                The final certificate will use this statement.
                            </div>

                        </div>


                        <div class="row g-3">

                            <div class="col-lg-6">

                                <label class="mc-form-label">
                                    Additional Remarks
                                </label>

                                <textarea
                                    class="form-control"
                                    rows="3"
                                    placeholder="Additional instructions or remarks..."></textarea>

                            </div>


                            <div class="col-lg-6">

                                <label class="mc-form-label">
                                    Restrictions / Recommendations
                                </label>

                                <textarea
                                    class="form-control"
                                    rows="3"
                                    placeholder="Enter restrictions or recommendations..."></textarea>

                            </div>

                        </div>

                    </div>


                    <!-- =================================================
                         DOCTOR / SIGNATURE
                    ================================================== -->

                    <div class="mc-form-section">

                        <div class="mc-section-heading">

                            <div class="mc-section-number">
                                05
                            </div>

                            <div>

                                <h6>
                                    Issuing Doctor
                                </h6>

                                <span>
                                    Doctor information shown on the certificate
                                </span>

                            </div>

                        </div>


                        <div class="row g-3">

                            <div class="col-lg-6">

                                <label class="mc-form-label required">
                                    Doctor
                                </label>

                                <select class="form-select" required>

                                    <option>
                                        Dr. Samer Jawalkar
                                    </option>

                                    <option>
                                        Other Doctor
                                    </option>

                                </select>

                            </div>


                            <div class="col-lg-3">

                                <label class="mc-form-label">
                                    Doctor Registration No.
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    value="DOC-001">

                            </div>


                            <div class="col-lg-3">

                                <label class="mc-form-label">
                                    Certificate No.
                                </label>

                                <input
                                    type="text"
                                    class="form-control"
                                    value="MC-2026-0249"
                                    readonly>

                            </div>

                        </div>

                    </div>


                    <!-- =================================================
                         PREVIEW OPTION
                    ================================================== -->

                    <div class="mc-preview-option">

                        <div class="mc-preview-icon">
                            <i class="bi bi-eye"></i>
                        </div>

                        <div>

                            <strong>
                                Generate PDF Preview
                            </strong>

                            <span>
                                Save the certificate and generate a
                                print-ready PDF document.
                            </span>

                        </div>

                        <label class="mc-switch">

                            <input
                                type="checkbox"
                                checked>

                            <span></span>

                        </label>

                    </div>

                </form>

            </div>


            <!-- MODAL FOOTER -->

            <div class="modal-footer mc-modal-footer">

                <button
                    type="button"
                    class="btn mc-light-btn"
                    data-bs-dismiss="modal">

                    <i class="bi bi-x-lg me-1"></i>
                    Cancel

                </button>


                <button
                    type="button"
                    class="btn mc-outline-btn">

                    <i class="bi bi-eye me-1"></i>
                    Preview

                </button>


                <button
                    type="submit"
                    form="medicalCertificateForm"
                    class="btn mc-primary-btn">

                    <i class="bi bi-file-earmark-check me-1"></i>
                    Create Certificate

                </button>

            </div>

        </div>

    </div>

</div>


<!-- =========================================================
     PAGE-SPECIFIC CSS
========================================================= -->

<style>

.medical-certificates-page {
    width: 100%;
}


/* =========================================================
   PAGE HEADER
========================================================= */

.mc-page-header {
    display: flex;
    align-items: flex-end;
    justify-content: space-between;
    gap: 20px;
    margin-bottom: 24px;
}

.mc-breadcrumb {
    display: flex;
    align-items: center;
    gap: 7px;
    font-size: 12px;
    color: #8a969d;
    margin-bottom: 7px;
}

.mc-breadcrumb i {
    font-size: 10px;
}

.mc-page-title {
    margin: 0;
    font-size: 25px;
    font-weight: 700;
    color: #24343d;
}

.mc-page-subtitle {
    margin: 5px 0 0;
    color: #829097;
    font-size: 13px;
}


/* =========================================================
   BUTTONS
========================================================= */

.mc-primary-btn {
    background: var(--bs-primary);
    border-color: var(--bs-primary);
    color: #ffffff;
    border-radius: 8px;
    padding: 10px 16px;
    font-size: 13px;
    font-weight: 600;
    box-shadow: 0 5px 15px rgba(0,0,0,.07);
}

.mc-primary-btn:hover,
.mc-primary-btn:focus {
    background: var(--bs-primary);
    border-color: var(--bs-primary);
    color: #ffffff;
    opacity: .92;
}

.mc-light-btn {
    background: #f5f7f8;
    border: 1px solid #e1e7e9;
    color: #586971;
    border-radius: 8px;
    padding: 10px 15px;
    font-size: 13px;
    font-weight: 600;
}

.mc-light-btn:hover {
    background: #edf1f2;
    color: #35474f;
}

.mc-outline-btn {
    background: #ffffff;
    border: 1px solid #d6e0e3;
    color: #50636b;
    border-radius: 8px;
    padding: 10px 15px;
    font-size: 13px;
    font-weight: 600;
}


/* =========================================================
   STAT CARDS
========================================================= */

.mc-stat-card {
    min-height: 110px;
    display: flex;
    align-items: center;
    gap: 14px;
    background: #ffffff;
    border: 1px solid #e2e9eb;
    border-radius: 12px;
    padding: 17px;
    transition: .2s ease;
}

.mc-stat-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(38,65,75,.07);
}

.mc-stat-icon {
    width: 48px;
    height: 48px;
    min-width: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 11px;
    background: rgba(var(--bs-primary-rgb), .10);
    color: var(--bs-primary);
    font-size: 20px;
}

.mc-stat-label {
    color: #839097;
    font-size: 11px;
    margin-bottom: 3px;
}

.mc-stat-value {
    color: #263942;
    font-size: 23px;
    font-weight: 700;
    line-height: 1.2;
}

.mc-stat-meta {
    color: #8b989e;
    font-size: 10px;
    margin-top: 3px;
}

.mc-stat-meta i {
    color: var(--bs-primary);
}


/* =========================================================
   FILTER
========================================================= */

.mc-filter-card {
    background: #ffffff;
    border: 1px solid #e1e8ea;
    border-radius: 12px;
    padding: 18px;
    margin-bottom: 20px;
}

.mc-form-label {
    display: block;
    color: #566871;
    font-size: 11px;
    font-weight: 600;
    margin-bottom: 6px;
}

.mc-form-label.required::after {
    content: " *";
    color: #c45562;
}

.mc-filter-card .form-control,
.mc-filter-card .form-select,
.mc-form-section .form-control,
.mc-form-section .form-select {
    min-height: 40px;
    border-color: #dce5e8;
    border-radius: 7px;
    color: #33474f;
    font-size: 12px;
    box-shadow: none;
}

.mc-filter-card .form-control:focus,
.mc-filter-card .form-select:focus,
.mc-form-section .form-control:focus,
.mc-form-section .form-select:focus {
    border-color: var(--bs-primary);
    box-shadow: 0 0 0 .15rem rgba(var(--bs-primary-rgb), .10);
}

.mc-input-icon {
    position: relative;
}

.mc-input-icon > i {
    position: absolute;
    left: 12px;
    top: 50%;
    transform: translateY(-50%);
    color: #8a989e;
    z-index: 2;
}

.mc-input-icon .form-control {
    padding-left: 35px;
}

.mc-filter-actions {
    display: flex;
    gap: 8px;
}


/* =========================================================
   LIST CARD
========================================================= */

.mc-list-card {
    background: #ffffff;
    border: 1px solid #e1e8ea;
    border-radius: 12px;
    overflow: hidden;
}

.mc-list-header {
    padding: 18px 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-bottom: 1px solid #e9eef0;
}

.mc-list-header h5 {
    margin: 0;
    color: #273a43;
    font-size: 15px;
    font-weight: 700;
}

.mc-list-header span {
    display: block;
    margin-top: 3px;
    color: #89969c;
    font-size: 11px;
}

.mc-record-count {
    background: #f2f7f8;
    color: var(--bs-primary);
    border-radius: 20px;
    padding: 6px 11px;
    font-size: 10px;
    font-weight: 700;
}


/* =========================================================
   TABLE
========================================================= */

.mc-table {
    margin: 0;
    min-width: 950px;
}

.mc-table thead th {
    background: #f7f9fa;
    color: #7a898f;
    border-bottom: 1px solid #e1e8ea;
    padding: 11px 14px;
    font-size: 10px;
    font-weight: 700;
    white-space: nowrap;
}

.mc-table tbody td {
    padding: 12px 14px;
    border-bottom: 1px solid #edf1f2;
    color: #5c6c73;
    font-size: 11px;
}

.mc-table tbody tr:last-child td {
    border-bottom: none;
}

.mc-table tbody tr:hover {
    background: #fbfcfc;
}


/* =========================================================
   CERTIFICATE ID
========================================================= */

.mc-certificate-id {
    display: flex;
    align-items: center;
    gap: 9px;
}

.mc-certificate-icon {
    width: 35px;
    height: 35px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(var(--bs-primary-rgb), .09);
    color: var(--bs-primary);
    border-radius: 8px;
    font-size: 15px;
}

.mc-certificate-id strong,
.mc-patient strong {
    display: block;
    color: #30434b;
    font-size: 11px;
}

.mc-certificate-id small,
.mc-patient small {
    display: block;
    color: #98a3a8;
    font-size: 9px;
    margin-top: 2px;
}


/* =========================================================
   PATIENT
========================================================= */

.mc-patient {
    display: flex;
    align-items: center;
    gap: 9px;
}

.mc-avatar {
    width: 34px;
    height: 34px;
    min-width: 34px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: #f1f6f7;
    color: var(--bs-primary);
    font-size: 10px;
    font-weight: 700;
}


/* =========================================================
   CERTIFICATE TYPE BADGES
========================================================= */

.mc-type-badge {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    border-radius: 20px;
    padding: 5px 8px;
    font-size: 9px;
    font-weight: 700;
    white-space: nowrap;
}

.mc-type-badge.fitness {
    background: #eef8f4;
    color: #39856b;
}

.mc-type-badge.sick {
    background: #fff5ed;
    color: #bd7546;
}

.mc-type-badge.illness {
    background: #fdf0f3;
    color: #a85061;
}

.mc-type-badge.resume {
    background: #eef6fb;
    color: #467e9d;
}

.mc-doctor {
    color: #50636b;
    font-size: 10px;
    font-weight: 600;
}


/* =========================================================
   ACTIONS
========================================================= */

.mc-actions {
    display: flex;
    justify-content: flex-end;
    gap: 5px;
}

.mc-action-btn {
    width: 31px;
    height: 31px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border: 1px solid #e0e7e9;
    background: #ffffff;
    color: #6d7d83;
    border-radius: 7px;
    font-size: 12px;
    transition: .15s ease;
}

.mc-action-btn:hover {
    color: var(--bs-primary);
    border-color: rgba(var(--bs-primary-rgb), .35);
    background: rgba(var(--bs-primary-rgb), .05);
}


/* =========================================================
   PAGINATION
========================================================= */

.mc-pagination {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 15px;
    padding: 14px 18px;
    border-top: 1px solid #e9eef0;
}

.mc-pagination-info {
    color: #8a979d;
    font-size: 10px;
}

.mc-pagination-info strong {
    color: #50636b;
}

.mc-pages {
    display: flex;
    align-items: center;
    gap: 4px;
}

.mc-page-btn {
    min-width: 30px;
    height: 30px;
    border: 1px solid #e0e7e9;
    background: #ffffff;
    color: #64757c;
    border-radius: 6px;
    font-size: 10px;
}

.mc-page-btn.active,
.mc-page-btn:hover {
    background: var(--bs-primary);
    color: #ffffff;
    border-color: var(--bs-primary);
}


/* =========================================================
   MODAL
========================================================= */

.mc-modal-content {
    border: none;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 25px 70px rgba(20,40,50,.18);
}

.mc-modal-header {
    padding: 17px 20px;
    border-bottom: 1px solid #e7edef;
    background: #ffffff;
}

.mc-modal-header > div {
    display: flex;
    align-items: center;
    gap: 11px;
}

.mc-modal-icon {
    width: 42px;
    height: 42px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(var(--bs-primary-rgb), .10);
    color: var(--bs-primary);
    border-radius: 10px;
    font-size: 18px;
}

.mc-modal-title-area h5 {
    margin: 0;
    color: #283b43;
    font-size: 15px;
    font-weight: 700;
}

.mc-modal-title-area p {
    margin: 3px 0 0;
    color: #8a979d;
    font-size: 10px;
}

.mc-modal-body {
    max-height: calc(100vh - 190px);
    overflow-y: auto;
    padding: 20px;
    background: #fbfcfc;
}


/* =========================================================
   FORM SECTIONS
========================================================= */

.mc-form-section {
    background: #ffffff;
    border: 1px solid #e1e8ea;
    border-radius: 11px;
    padding: 17px;
    margin-bottom: 14px;
}

.mc-section-heading {
    display: flex;
    align-items: center;
    gap: 10px;
    padding-bottom: 13px;
    margin-bottom: 14px;
    border-bottom: 1px solid #edf1f2;
}

.mc-section-number {
    width: 31px;
    height: 31px;
    min-width: 31px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(var(--bs-primary-rgb), .09);
    color: var(--bs-primary);
    border-radius: 8px;
    font-size: 9px;
    font-weight: 700;
}

.mc-section-heading h6 {
    margin: 0;
    color: #33474f;
    font-size: 12px;
    font-weight: 700;
}

.mc-section-heading span {
    display: block;
    color: #8d999e;
    font-size: 9px;
    margin-top: 2px;
}


/* =========================================================
   SELECTED PATIENT
========================================================= */

.mc-selected-patient {
    display: flex;
    align-items: center;
    gap: 11px;
    margin-top: 14px;
    padding: 11px 12px;
    background: #f5fafb;
    border: 1px solid #dbeaed;
    border-radius: 9px;
}

.mc-selected-avatar {
    width: 40px;
    height: 40px;
    min-width: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(var(--bs-primary-rgb), .12);
    color: var(--bs-primary);
    border-radius: 50%;
    font-size: 11px;
    font-weight: 700;
}

.mc-selected-details {
    flex: 1;
}

.mc-selected-details strong {
    display: block;
    color: #30444c;
    font-size: 11px;
}

.mc-selected-details span {
    display: block;
    color: #89979d;
    font-size: 9px;
    margin-top: 3px;
}

.mc-patient-contact {
    color: #6e7d83;
    font-size: 9px;
}

.mc-patient-contact i {
    color: var(--bs-primary);
}


/* =========================================================
   TYPE INFO
========================================================= */

.mc-certificate-info {
    display: flex;
    align-items: flex-start;
    gap: 8px;
    margin-top: 12px;
    padding: 9px 11px;
    border-radius: 7px;
    background: #f5f9fa;
    color: #77878e;
    font-size: 9px;
    line-height: 1.5;
}

.mc-certificate-info i {
    color: var(--bs-primary);
    margin-top: 1px;
}


/* =========================================================
   TEXTAREA
========================================================= */

.mc-textarea {
    resize: vertical;
    line-height: 1.6;
}

.mc-help-text {
    color: #9aa5aa;
    font-size: 8px;
    margin-top: 4px;
}


/* =========================================================
   PREVIEW OPTION
========================================================= */

.mc-preview-option {
    display: flex;
    align-items: center;
    gap: 10px;
    background: #f5fafb;
    border: 1px solid #dcebed;
    border-radius: 9px;
    padding: 12px;
}

.mc-preview-icon {
    width: 36px;
    height: 36px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #ffffff;
    border-radius: 8px;
    color: var(--bs-primary);
    font-size: 15px;
}

.mc-preview-option > div:nth-child(2) {
    flex: 1;
}

.mc-preview-option strong {
    display: block;
    color: #43565e;
    font-size: 10px;
}

.mc-preview-option span {
    display: block;
    color: #8b989e;
    font-size: 8px;
    margin-top: 2px;
}


/* =========================================================
   SWITCH
========================================================= */

.mc-switch {
    position: relative;
    width: 40px;
    height: 22px;
    display: block;
}

.mc-switch input {
    opacity: 0;
    width: 0;
    height: 0;
}

.mc-switch span {
    position: absolute;
    inset: 0;
    cursor: pointer;
    background: #ccd6da;
    border-radius: 20px;
    transition: .2s;
}

.mc-switch span:before {
    content: "";
    position: absolute;
    width: 16px;
    height: 16px;
    left: 3px;
    top: 3px;
    background: #ffffff;
    border-radius: 50%;
    transition: .2s;
}

.mc-switch input:checked + span {
    background: var(--bs-primary);
}

.mc-switch input:checked + span:before {
    transform: translateX(18px);
}


/* =========================================================
   MODAL FOOTER
========================================================= */

.mc-modal-footer {
    border-top: 1px solid #e5ebed;
    background: #ffffff;
    padding: 12px 18px;
    display: flex;
    justify-content: flex-end;
    gap: 7px;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 991.98px) {

    .mc-page-header {
        align-items: flex-start;
        flex-direction: column;
    }

    .mc-header-action {
        width: 100%;
    }

    .mc-header-action .btn {
        width: 100%;
    }

    .mc-modal-body {
        padding: 15px;
    }

}


@media (max-width: 767.98px) {

    .mc-page-title {
        font-size: 21px;
    }

    .mc-page-subtitle {
        font-size: 11px;
    }

    .mc-filter-actions {
        width: 100%;
    }

    .mc-filter-actions .btn {
        flex: 1;
    }

    .mc-list-header {
        align-items: flex-start;
        gap: 10px;
        flex-direction: column;
    }

    .mc-pagination {
        align-items: flex-start;
        flex-direction: column;
    }

    .mc-pages {
        width: 100%;
        justify-content: center;
    }

    .mc-modal-header {
        padding: 14px;
    }

    .mc-modal-body {
        max-height: calc(100vh - 150px);
    }

    .mc-form-section {
        padding: 13px;
    }

    .mc-selected-patient {
        align-items: flex-start;
        flex-wrap: wrap;
    }

    .mc-patient-contact {
        width: 100%;
        padding-left: 51px;
    }

    .mc-modal-footer {
        flex-wrap: wrap;
    }

    .mc-modal-footer .btn {
        flex: 1;
    }

}


@media (max-width: 575.98px) {

    .mc-page-header {
        margin-bottom: 18px;
    }

    .mc-stat-card {
        min-height: 95px;
        padding: 13px;
    }

    .mc-stat-icon {
        width: 42px;
        height: 42px;
        min-width: 42px;
    }

    .mc-stat-value {
        font-size: 20px;
    }

    .mc-filter-card {
        padding: 13px;
    }

    .mc-list-header {
        padding: 14px;
    }

    .mc-modal-title-area p {
        display: none;
    }

    .mc-modal-footer .btn {
        width: 100%;
        flex: 100%;
    }

}

</style>


<!-- =========================================================
     PAGE-SPECIFIC JS
     Requires Bootstrap 5 bundle already loaded by dashboard
========================================================= -->

<script>

document.addEventListener("DOMContentLoaded", function () {

    const certificateType =
        document.getElementById("certificateType");

    const certificateTypeInfo =
        document.getElementById("certificateTypeInfo");


    if (certificateType && certificateTypeInfo) {

        certificateType.addEventListener("change", function () {

            let message =
                "Select a certificate type to display relevant information.";


            switch (this.value) {

                case "fitness":

                    message =
                        "Medical Fitness Certificate: use this certificate when the doctor certifies the patient's fitness based on clinical examination.";

                    break;


                case "sick_leave":

                    message =
                        "Sick Leave Certificate: specify the medical condition and the recommended leave period.";

                    break;


                case "illness":

                    message =
                        "Medical Illness Certificate: record the diagnosed medical condition and relevant treatment/rest advice.";

                    break;


                case "resume":

                    message =
                        "Fit to Resume Duty Certificate: use this certificate when the doctor determines that the patient can resume work or normal duties.";

                    break;


                case "rest":

                    message =
                        "Medical Rest Certificate: specify the recommended rest period and any relevant medical restrictions.";

                    break;


                case "referral":

                    message =
                        "Medical Referral Certificate: record the referral reason and destination/specialist information.";

                    break;


                case "other":

                    message =
                        "Other Medical Certificate: enter the appropriate purpose and customize the certificate statement.";

                    break;

            }


            certificateTypeInfo.querySelector("span").textContent =
                message;

        });

    }


    /* =====================================================
       FORM SUBMIT PLACEHOLDER
       Replace with your CI4 form submission later
    ====================================================== */

    const form =
        document.getElementById("medicalCertificateForm");


    if (form) {

        form.addEventListener("submit", function (event) {

            event.preventDefault();


            if (!form.checkValidity()) {

                form.classList.add("was-validated");

                return;

            }


            /*
             * Connect this section to your CI4 controller.
             *
             * Recommended workflow:
             *
             * 1. Save certificate
             * 2. Generate certificate number
             * 3. Store certificate data
             * 4. Generate PDF
             * 5. Show preview / print / download
             */


            alert(
                "Medical certificate form is ready for CI4 integration."
            );

        });

    }

});

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<body>
</html>