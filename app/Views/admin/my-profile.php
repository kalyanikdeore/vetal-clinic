<?php include('header.php'); ?>

<!-- =========================================================
     VETAL CLINIC OPD
     MY PROFILE PAGE
     CONTENT AREA ONLY
     ========================================================= -->

<main class="content">

    <div class="my-profile-page">

        <!-- PAGE HEADER -->
        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4">

            <div>
                <h4 class="mb-1 fw-bold">My Profile</h4>
                <p class="text-muted mb-0">
                    Manage your profile information and account security.
                </p>
            </div>

            <button type="button"
                    class="btn btn-primary"
                    data-bs-toggle="modal"
                    data-bs-target="#changePasswordModal">

                <i class="bi bi-shield-lock me-1"></i>
                Change Password

            </button>

        </div>


        <!-- =====================================================
            PROFILE OVERVIEW
            ===================================================== -->

        <div class="card profile-cover-card border-0 shadow-sm mb-4">

            <div class="profile-cover"></div>

            <div class="card-body profile-overview-body">

                <div class="profile-main">

                    <div class="profile-avatar">
                        DS
                    </div>

                    <div class="profile-heading">

                        <div class="d-flex flex-wrap align-items-center gap-2">

                            <h4 class="mb-0">
                                Dr. Samer Jawalkar
                            </h4>

                            <span class="profile-active-badge">
                                <span></span>
                                Active
                            </span>

                        </div>

                        <p class="text-muted mb-2">
                            Doctor / Administrator
                        </p>

                        <div class="profile-meta">

                            <span>
                                <i class="bi bi-person-badge"></i>
                                DOC-001
                            </span>

                            <span>
                                <i class="bi bi-envelope"></i>
                                doctor@vetalclinic.com
                            </span>

                            <span>
                                <i class="bi bi-telephone"></i>
                                +91 98XXXXXX45
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- =====================================================
            PROFILE CONTENT
            ===================================================== -->

        <div class="row g-4">


            <!-- =================================================
                LEFT COLUMN
                ================================================= -->

            <div class="col-12 col-xl-8">


                <!-- PERSONAL INFORMATION -->

                <div class="card profile-card border-0 shadow-sm mb-4">

                    <div class="card-header bg-white border-0">

                        <div class="profile-section-heading">

                            <div class="profile-section-icon">
                                <i class="bi bi-person"></i>
                            </div>

                            <div>
                                <h6 class="mb-1 fw-bold">
                                    Personal Information
                                </h6>

                                <small class="text-muted">
                                    Basic information associated with your account
                                </small>
                            </div>

                        </div>

                    </div>


                    <div class="card-body">

                        <div class="row g-3">

                            <div class="col-12 col-md-6">

                                <div class="profile-info-item">

                                    <span>Full Name</span>

                                    <strong>
                                        Dr. Samer Jawalkar
                                    </strong>

                                </div>

                            </div>


                            <div class="col-12 col-md-6">

                                <div class="profile-info-item">

                                    <span>Gender</span>

                                    <strong>
                                        Male
                                    </strong>

                                </div>

                            </div>


                            <div class="col-12 col-md-6">

                                <div class="profile-info-item">

                                    <span>Date of Birth</span>

                                    <strong>
                                        15 March 1982
                                    </strong>

                                </div>

                            </div>


                            <div class="col-12 col-md-6">

                                <div class="profile-info-item">

                                    <span>Mobile Number</span>

                                    <strong>
                                        +91 98XXXXXX45
                                    </strong>

                                </div>

                            </div>


                            <div class="col-12">

                                <div class="profile-info-item">

                                    <span>Email Address</span>

                                    <strong>
                                        doctor@vetalclinic.com
                                    </strong>

                                </div>

                            </div>


                            <div class="col-12">

                                <div class="profile-info-item">

                                    <span>Address</span>

                                    <strong>
                                        Vetal Clinic, Pune, Maharashtra
                                    </strong>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- PROFESSIONAL INFORMATION -->

                <div class="card profile-card border-0 shadow-sm mb-4">

                    <div class="card-header bg-white border-0">

                        <div class="profile-section-heading">

                            <div class="profile-section-icon">
                                <i class="bi bi-person-vcard"></i>
                            </div>

                            <div>

                                <h6 class="mb-1 fw-bold">
                                    Professional Information
                                </h6>

                                <small class="text-muted">
                                    Professional and clinic-related details
                                </small>

                            </div>

                        </div>

                    </div>


                    <div class="card-body">

                        <div class="row g-3">

                            <div class="col-12 col-md-6">

                                <div class="profile-info-item">

                                    <span>Role</span>

                                    <strong>
                                        Doctor / Administrator
                                    </strong>

                                </div>

                            </div>


                            <div class="col-12 col-md-6">

                                <div class="profile-info-item">

                                    <span>Employee ID</span>

                                    <strong>
                                        DOC-001
                                    </strong>

                                </div>

                            </div>


                            <div class="col-12 col-md-6">

                                <div class="profile-info-item">

                                    <span>Department</span>

                                    <strong>
                                        General Medicine
                                    </strong>

                                </div>

                            </div>


                            <div class="col-12 col-md-6">

                                <div class="profile-info-item">

                                    <span>Qualification</span>

                                    <strong>
                                        MBBS, MD
                                    </strong>

                                </div>

                            </div>


                            <div class="col-12 col-md-6">

                                <div class="profile-info-item">

                                    <span>Clinic</span>

                                    <strong>
                                        Vetal Clinic
                                    </strong>

                                </div>

                            </div>


                            <div class="col-12 col-md-6">

                                <div class="profile-info-item">

                                    <span>Joining Date</span>

                                    <strong>
                                        10 January 2024
                                    </strong>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- ACCOUNT INFORMATION -->

                <div class="card profile-card border-0 shadow-sm">

                    <div class="card-header bg-white border-0">

                        <div class="profile-section-heading">

                            <div class="profile-section-icon">
                                <i class="bi bi-person-gear"></i>
                            </div>

                            <div>

                                <h6 class="mb-1 fw-bold">
                                    Account Information
                                </h6>

                                <small class="text-muted">
                                    Login and account activity information
                                </small>

                            </div>

                        </div>

                    </div>


                    <div class="card-body">

                        <div class="row g-3">

                            <div class="col-12 col-md-6">

                                <div class="profile-info-item">

                                    <span>Username</span>

                                    <strong>
                                        dr.samer
                                    </strong>

                                </div>

                            </div>


                            <div class="col-12 col-md-6">

                                <div class="profile-info-item">

                                    <span>Account Status</span>

                                    <strong class="account-status">
                                        <span></span>
                                        Active
                                    </strong>

                                </div>

                            </div>


                            <div class="col-12 col-md-6">

                                <div class="profile-info-item">

                                    <span>Last Login</span>

                                    <strong>
                                        04 Sep 2026, 07:42 PM
                                    </strong>

                                </div>

                            </div>


                            <div class="col-12 col-md-6">

                                <div class="profile-info-item">

                                    <span>Password Last Changed</span>

                                    <strong>
                                        18 Aug 2026
                                    </strong>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- =================================================
                RIGHT COLUMN
                ================================================= -->

            <div class="col-12 col-xl-4">


                <!-- SECURITY CARD -->

                <div class="card security-card border-0 shadow-sm mb-4">

                    <div class="card-body">

                        <div class="security-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>

                        <h6 class="fw-bold mt-3 mb-1">
                            Account Security
                        </h6>

                        <p class="text-muted small mb-3">
                            Keep your account secure by using a strong password
                            and changing it regularly.
                        </p>


                        <div class="security-status">

                            <div>

                                <span class="security-check">
                                    <i class="bi bi-check"></i>
                                </span>

                                <span>
                                    Strong password
                                </span>

                            </div>


                            <div>

                                <span class="security-check">
                                    <i class="bi bi-check"></i>
                                </span>

                                <span>
                                    Account active
                                </span>

                            </div>


                            <div>

                                <span class="security-check">
                                    <i class="bi bi-check"></i>
                                </span>

                                <span>
                                    Email verified
                                </span>

                            </div>

                        </div>


                        <button type="button"
                                class="btn btn-primary w-100 mt-3"
                                data-bs-toggle="modal"
                                data-bs-target="#changePasswordModal">

                            <i class="bi bi-key me-1"></i>
                            Change Password

                        </button>


                        <button type="button"
                                class="btn btn-light border w-100 mt-2"
                                data-bs-toggle="modal"
                                data-bs-target="#resetPasswordModal">

                            <i class="bi bi-arrow-clockwise me-1"></i>
                            Reset Password

                        </button>

                    </div>

                </div>


                <!-- LOGIN ACTIVITY -->

                <div class="card profile-card border-0 shadow-sm">

                    <div class="card-header bg-white border-0">

                        <div class="profile-section-heading">

                            <div class="profile-section-icon">
                                <i class="bi bi-clock-history"></i>
                            </div>

                            <div>

                                <h6 class="mb-1 fw-bold">
                                    Recent Login Activity
                                </h6>

                                <small class="text-muted">
                                    Recent account access
                                </small>

                            </div>

                        </div>

                    </div>


                    <div class="card-body p-0">

                        <div class="login-activity-item">

                            <div class="activity-icon">
                                <i class="bi bi-display"></i>
                            </div>

                            <div>

                                <strong>
                                    Windows Desktop
                                </strong>

                                <small>
                                    Pune, Maharashtra
                                </small>

                                <span>
                                    Today, 07:42 PM
                                </span>

                            </div>

                            <span class="activity-current">
                                Current
                            </span>

                        </div>


                        <div class="login-activity-item">

                            <div class="activity-icon">
                                <i class="bi bi-phone"></i>
                            </div>

                            <div>

                                <strong>
                                    Android Device
                                </strong>

                                <small>
                                    Pune, Maharashtra
                                </small>

                                <span>
                                    03 Sep 2026, 09:18 AM
                                </span>

                            </div>

                        </div>


                        <div class="login-activity-item">

                            <div class="activity-icon">
                                <i class="bi bi-display"></i>
                            </div>

                            <div>

                                <strong>
                                    Windows Desktop
                                </strong>

                                <small>
                                    Pune, Maharashtra
                                </small>

                                <span>
                                    01 Sep 2026, 08:10 PM
                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</main>

<!-- =========================================================
     CHANGE PASSWORD MODAL
     ========================================================= -->

<div class="modal fade"
     id="changePasswordModal"
     tabindex="-1"
     aria-labelledby="changePasswordModalLabel"
     aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content password-modal">

            <div class="modal-header">

                <div class="password-modal-heading">

                    <div class="password-modal-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>

                    <div>

                        <h5 class="modal-title mb-1"
                            id="changePasswordModalLabel">

                            Change Password

                        </h5>

                        <small class="text-muted">
                            Update your account password securely.
                        </small>

                    </div>

                </div>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close">
                </button>

            </div>


            <form id="changePasswordForm">

                <div class="modal-body">

                    <!-- Current Password -->

                    <!-- <div class="password-field mb-3">

                        <label class="form-label">
                            Current Password
                            <span class="text-danger">*</span>
                        </label>

                        <div class="input-group">

                            <span class="input-group-text">
                                <i class="bi bi-lock"></i>
                            </span>

                            <input type="password"
                                   class="form-control password-input"
                                   id="currentPassword"
                                   placeholder="Enter current password"
                                   required>

                            <button type="button"
                                    class="btn password-toggle"
                                    data-target="currentPassword">

                                <i class="bi bi-eye"></i>

                            </button>

                        </div>

                    </div> -->
                    <div class="password-field mb-3">

    <label class="form-label">
        Current Password
        <span class="text-danger">*</span>
    </label>

    <div class="input-group">

        <span class="input-group-text">
            <i class="bi bi-lock"></i>
        </span>

        <input type="password"
               class="form-control password-input"
               id="currentPassword"
               placeholder="Enter current password"
               required>

        <button type="button"
                class="btn password-toggle"
                data-target="currentPassword">

            <i class="bi bi-eye"></i>

        </button>

    </div>

    <div id="currentPasswordError"
         class="password-match error">
    </div>

</div>


                    <!-- New Password -->

                    <div class="password-field mb-3">

                        <label class="form-label">
                            New Password
                            <span class="text-danger">*</span>
                        </label>

                        <div class="input-group">

                            <span class="input-group-text">
                                <i class="bi bi-key"></i>
                            </span>

                            <input type="password"
                                   class="form-control password-input"
                                   id="newPassword"
                                   placeholder="Enter new password"
                                   required>

                            <button type="button"
                                    class="btn password-toggle"
                                    data-target="newPassword">

                                <i class="bi bi-eye"></i>

                            </button>

                        </div>

                    </div>


                    <!-- Password Strength -->

                    <div class="password-strength mb-3">

                        <div class="strength-label">

                            <span>Password strength</span>

                            <strong id="strengthText">
                                Enter password
                            </strong>

                        </div>

                        <div class="strength-bar">
                            <span id="strengthBar"></span>
                        </div>

                    </div>


                    <!-- Confirm Password -->

                    <div class="password-field">

                        <label class="form-label">
                            Confirm New Password
                            <span class="text-danger">*</span>
                        </label>

                        <div class="input-group">

                            <span class="input-group-text">
                                <i class="bi bi-lock-fill"></i>
                            </span>

                            <input type="password"
                                   class="form-control password-input"
                                   id="confirmPassword"
                                   placeholder="Confirm new password"
                                   required>

                            <button type="button"
                                    class="btn password-toggle"
                                    data-target="confirmPassword">

                                <i class="bi bi-eye"></i>

                            </button>

                        </div>

                        <div id="passwordMatch"
                             class="password-match">
                        </div>

                    </div>


                    <div class="password-requirements mt-3">

                        <strong>Password should contain:</strong>

                        <ul>

                            <li id="reqLength">
                                <i class="bi bi-circle"></i>
                                At least 8 characters
                            </li>

                            <li id="reqUpper">
                                <i class="bi bi-circle"></i>
                                One uppercase letter
                            </li>

                            <li id="reqLower">
                                <i class="bi bi-circle"></i>
                                One lowercase letter
                            </li>

                            <li id="reqNumber">
                                <i class="bi bi-circle"></i>
                                One number
                            </li>

                        </ul>

                    </div>

                </div>


                <div class="modal-footer">

                    <button type="button"
                            class="btn btn-light border"
                            data-bs-dismiss="modal">

                        Cancel

                    </button>

                    <button type="submit"
                            class="btn btn-primary">

                        <i class="bi bi-check-circle me-1"></i>
                        Update Password

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>


<!-- =========================================================
     RESET PASSWORD MODAL
     ========================================================= -->

<div class="modal fade"
     id="resetPasswordModal"
     tabindex="-1"
     aria-labelledby="resetPasswordModalLabel"
     aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content password-modal">

            <div class="modal-header">

                <div class="password-modal-heading">

                    <div class="password-modal-icon reset">
                        <i class="bi bi-arrow-clockwise"></i>
                    </div>

                    <div>

                        <h5 class="modal-title mb-1"
                            id="resetPasswordModalLabel">

                            Reset Password

                        </h5>

                        <small class="text-muted">
                            Request a secure password reset.
                        </small>

                    </div>

                </div>

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal">
                </button>

            </div>


            <form id="resetPasswordForm">


<div class="modal-body">

    <div class="reset-info">

        <div class="reset-info-icon">
            <i class="bi bi-info-circle"></i>
        </div>

        <p class="mb-0">
            Enter your registered username and email address.
            A password reset link will be sent to your registered email address.
        </p>

    </div>


    <!-- Username / Full Name -->

    <div class="mb-3">

        <label class="form-label">
            Username 
            <span class="text-danger">*</span>
        </label>

        <div class="input-group">

            <span class="input-group-text">
                <i class="bi bi-person"></i>
            </span>

            <input type="text"
                   class="form-control"
                   name="fullname"
                   id="resetFullname"
                   placeholder="Enter username or full name"
                   required>

        </div>

    </div>


    <!-- Registered Email -->

    <div class="mb-0">

        <label class="form-label">
            Registered Email
            <span class="text-danger">*</span>
        </label>

        <div class="input-group">

            <span class="input-group-text">
                <i class="bi bi-envelope"></i>
            </span>

            <input type="email"
                   class="form-control"
                   name="email"
                   id="resetEmail"
                   placeholder="Enter registered email"
                   required>

        </div>

    </div>



                </div>


                <div class="modal-footer">

                    <button type="button"
                            class="btn btn-light border"
                            data-bs-dismiss="modal">

                        Cancel

                    </button>

                    <button type="submit"
                            class="btn btn-primary">

                        <i class="bi bi-send me-1"></i>
                        Send Reset Request

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>


<!-- =========================================================
     PAGE-SPECIFIC CSS
     ========================================================= -->

<style>

.my-profile-page {
    width: 100%;
}


/* PROFILE COVER */

.profile-cover-card {
    border-radius: 15px;
    overflow: hidden;
}

.profile-cover {
    height: 115px;
    background: linear-gradient(
        135deg,
        rgba(13, 110, 253, .10),
        rgba(13, 110, 253, .025)
    );
    border-bottom: 1px solid #edf0f3;
}

.profile-overview-body {
    padding: 0 25px 24px;
}

.profile-main {
    display: flex;
    align-items: flex-end;
    gap: 17px;
    margin-top: -38px;
}

.profile-avatar {
    width: 82px;
    height: 82px;
    min-width: 82px;
    border-radius: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--bs-primary);
    color: #fff;
    border: 5px solid #fff;
    box-shadow: 0 5px 18px rgba(0,0,0,.12);
    font-size: 24px;
    font-weight: 700;
}

.profile-heading {
    padding-bottom: 2px;
}

.profile-heading h4 {
    font-size: 21px;
}

.profile-active-badge {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    padding: 4px 9px;
    border-radius: 20px;
    background: rgba(25,135,84,.10);
    color: #198754;
    font-size: 11px;
    font-weight: 600;
}

.profile-active-badge span,
.account-status span {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #198754;
}

.profile-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 9px 17px;
    color: #6c757d;
    font-size: 12px;
}

.profile-meta span {
    display: inline-flex;
    align-items: center;
    gap: 5px;
}


/* CARDS */

.profile-card,
.security-card {
    border-radius: 14px;
}

.profile-card .card-header {
    padding: 19px 21px 10px;
}

.profile-card .card-body {
    padding: 18px 21px 21px;
}

.profile-section-heading {
    display: flex;
    align-items: center;
    gap: 11px;
}

.profile-section-icon {
    width: 40px;
    height: 40px;
    min-width: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
    background: rgba(13,110,253,.10);
    color: var(--bs-primary);
    font-size: 17px;
}

.profile-info-item {
    padding: 13px;
    border: 1px solid #edf0f3;
    border-radius: 10px;
    background: #fff;
}

.profile-info-item span {
    display: block;
    color: #8a9299;
    font-size: 10px;
    margin-bottom: 5px;
}

.profile-info-item strong {
    display: block;
    font-size: 13px;
    font-weight: 600;
    word-break: break-word;
}

.account-status {
    display: inline-flex !important;
    align-items: center;
    gap: 6px;
    color: #198754;
}


/* SECURITY */

.security-card {
    padding: 0;
}

.security-card .card-body {
    padding: 21px;
}

.security-icon {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(25,135,84,.10);
    color: #198754;
    font-size: 21px;
}

.security-status {
    padding: 12px;
    border-radius: 10px;
    background: #f8f9fa;
}

.security-status > div {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 9px;
    font-size: 12px;
}

.security-status > div:last-child {
    margin-bottom: 0;
}

.security-check {
    width: 20px;
    height: 20px;
    min-width: 20px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: rgba(25,135,84,.12);
    color: #198754;
    font-size: 11px;
}


/* LOGIN ACTIVITY */

.login-activity-item {
    display: flex;
    align-items: flex-start;
    gap: 11px;
    padding: 15px 20px;
    border-bottom: 1px solid #edf0f3;
}

.login-activity-item:last-child {
    border-bottom: 0;
}

.activity-icon {
    width: 37px;
    height: 37px;
    min-width: 37px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 9px;
    background: #f8f9fa;
    color: var(--bs-primary);
}

.login-activity-item > div:nth-child(2) {
    min-width: 0;
    flex: 1;
}

.login-activity-item strong {
    display: block;
    font-size: 12px;
}

.login-activity-item small,
.login-activity-item span {
    display: block;
    color: #8a9299;
    font-size: 10px;
    margin-top: 2px;
}

.activity-current {
    padding: 3px 7px;
    border-radius: 15px;
    background: rgba(25,135,84,.10);
    color: #198754 !important;
    white-space: nowrap;
}


/* PASSWORD MODALS */

.password-modal {
    border: 0;
    border-radius: 16px;
    overflow: hidden;
}

.password-modal .modal-header {
    padding: 18px 21px;
    border-bottom: 1px solid #edf0f3;
}

.password-modal .modal-body {
    padding: 21px;
}

.password-modal .modal-footer {
    padding: 14px 21px;
    border-top: 1px solid #edf0f3;
}

.password-modal-heading {
    display: flex;
    align-items: center;
    gap: 12px;
}

.password-modal-icon {
    width: 43px;
    height: 43px;
    min-width: 43px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 11px;
    background: rgba(13,110,253,.10);
    color: var(--bs-primary);
    font-size: 19px;
}

.password-modal-icon.reset {
    background: rgba(13,110,253,.10);
}

.password-modal .form-label {
    font-size: 12px;
    font-weight: 600;
    margin-bottom: 7px;
}

.password-modal .form-control {
    min-height: 43px;
    font-size: 13px;
    border-radius: 0;
}

.password-modal .input-group-text {
    min-width: 43px;
    justify-content: center;
    background: #f8f9fa;
}

.password-toggle {
    width: 43px;
    border: 1px solid #dee2e6;
    border-left: 0;
    background: #fff;
    color: #6c757d;
}

.password-toggle:hover {
    color: var(--bs-primary);
}


/* PASSWORD STRENGTH */

.strength-label {
    display: flex;
    justify-content: space-between;
    gap: 10px;
    margin-bottom: 6px;
    font-size: 10px;
    color: #8a9299;
}

.strength-label strong {
    color: #6c757d;
}

.strength-bar {
    height: 5px;
    overflow: hidden;
    border-radius: 10px;
    background: #e9ecef;
}

.strength-bar span {
    display: block;
    width: 0;
    height: 100%;
    transition: width .25s ease;
    background: var(--bs-primary);
}


/* PASSWORD REQUIREMENTS */

.password-requirements {
    padding: 12px;
    border-radius: 10px;
    background: #f8f9fa;
}

.password-requirements strong {
    display: block;
    margin-bottom: 7px;
    font-size: 11px;
}

.password-requirements ul {
    padding: 0;
    margin: 0;
    list-style: none;
}

.password-requirements li {
    margin: 4px 0;
    color: #8a9299;
    font-size: 10px;
}

.password-requirements li i {
    margin-right: 5px;
}

.password-requirements li.valid {
    color: #198754;
}

.password-requirements li.valid i::before {
    content: "\f26a";
}

.password-match {
    margin-top: 5px;
    font-size: 10px;
}

.password-match.success {
    color: #198754;
}

.password-match.error {
    color: #dc3545;
}


/* RESET */

.reset-info {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    padding: 12px;
    margin-bottom: 18px;
    border-radius: 10px;
    background: rgba(13,110,253,.06);
}

.reset-info-icon {
    color: var(--bs-primary);
    font-size: 16px;
}

.reset-info p {
    color: #6c757d;
    font-size: 11px;
    line-height: 1.5;
}


/* BUTTONS */

.my-profile-page .btn {
    border-radius: 8px;
    font-weight: 600;
}


/* MOBILE */

@media (max-width: 767.98px) {

    .profile-cover {
        height: 95px;
    }

    .profile-overview-body {
        padding: 0 15px 18px;
    }

    .profile-main {
        align-items: flex-start;
        flex-direction: column;
        gap: 10px;
        margin-top: -34px;
    }

    .profile-avatar {
        width: 70px;
        height: 70px;
        min-width: 70px;
        border-radius: 15px;
        font-size: 20px;
    }

    .profile-heading h4 {
        font-size: 18px;
    }

    .profile-meta {
        gap: 7px 12px;
    }

    .profile-card .card-header {
        padding: 15px 15px 8px;
    }

    .profile-card .card-body {
        padding: 14px 15px 15px;
    }

    .login-activity-item {
        padding: 13px 15px;
    }

}


/* SMALL MOBILE */

@media (max-width: 575.98px) {

    .profile-heading .profile-meta {
        flex-direction: column;
        align-items: flex-start;
    }

    .password-modal .modal-header {
        padding: 15px;
    }

    .password-modal .modal-body {
        padding: 15px;
    }

    .password-modal .modal-footer {
        padding: 12px 15px;
    }

    .password-modal .modal-footer .btn {
        flex: 1;
    }

}





body.modal-open {
    overflow: hidden !important;
    padding-right: 0 !important;
}

/* Modal open astana normal Bootstrap backdrop */
.modal-backdrop.show {
    opacity: 0.5;
}

</style>


<!-- =========================================================
     JAVASCRIPT
     ========================================================= -->

<script>

document.addEventListener('DOMContentLoaded', function () {


    /* =====================================================
       SHOW / HIDE PASSWORD
       ===================================================== */

    document.querySelectorAll('.password-toggle').forEach(function (button) {

        button.addEventListener('click', function () {

            const targetId =
                this.getAttribute('data-target');

            const input =
                document.getElementById(targetId);

            const icon =
                this.querySelector('i');


            if (!input) {
                return;
            }


            if (input.type === 'password') {

                input.type = 'text';

                icon.classList.remove('bi-eye');
                icon.classList.add('bi-eye-slash');

            } else {

                input.type = 'password';

                icon.classList.remove('bi-eye-slash');
                icon.classList.add('bi-eye');

            }

        });

    });


    /* =====================================================
       PASSWORD STRENGTH
       ===================================================== */

    const newPassword =
        document.getElementById('newPassword');

    const strengthBar =
        document.getElementById('strengthBar');

    const strengthText =
        document.getElementById('strengthText');


    function updatePasswordStrength(password) {

        let score = 0;


        if (password.length >= 8) {
            score++;
        }

        if (/[A-Z]/.test(password)) {
            score++;
        }

        if (/[a-z]/.test(password)) {
            score++;
        }

        if (/[0-9]/.test(password)) {
            score++;
        }

        if (/[^A-Za-z0-9]/.test(password)) {
            score++;
        }


        const widths = [
            '0%',
            '20%',
            '40%',
            '60%',
            '80%',
            '100%'
        ];


        strengthBar.style.width =
            widths[score];


        if (!password) {

            strengthText.textContent =
                'Enter password';

        } else if (score <= 2) {

            strengthText.textContent =
                'Weak';

        } else if (score === 3) {

            strengthText.textContent =
                'Medium';

        } else if (score === 4) {

            strengthText.textContent =
                'Strong';

        } else {

            strengthText.textContent =
                'Very Strong';

        }

    }


    if (newPassword) {

        newPassword.addEventListener('input', function () {

            const password =
                this.value;


            updatePasswordStrength(password);


            updateRequirement(
                'reqLength',
                password.length >= 8
            );

            updateRequirement(
                'reqUpper',
                /[A-Z]/.test(password)
            );

            updateRequirement(
                'reqLower',
                /[a-z]/.test(password)
            );

            updateRequirement(
                'reqNumber',
                /[0-9]/.test(password)
            );


            checkPasswordMatch();

        });

    }


    /* =====================================================
       PASSWORD REQUIREMENTS
       ===================================================== */

    function updateRequirement(id, valid) {

        const element =
            document.getElementById(id);

        if (!element) {
            return;
        }


        if (valid) {

            element.classList.add('valid');

        } else {

            element.classList.remove('valid');

        }

    }


    /* =====================================================
       PASSWORD MATCH
       ===================================================== */

    const confirmPassword =
        document.getElementById('confirmPassword');

    const passwordMatch =
        document.getElementById('passwordMatch');


    function checkPasswordMatch() {

        if (!confirmPassword ||
            !passwordMatch) {
            return;
        }


        if (!confirmPassword.value) {

            passwordMatch.textContent = '';

            passwordMatch.className =
                'password-match';

            return;

        }


        if (newPassword.value === confirmPassword.value) {

            passwordMatch.textContent =
                'Passwords match';

            passwordMatch.className =
                'password-match success';

        } else {

            passwordMatch.textContent =
                'Passwords do not match';

            passwordMatch.className =
                'password-match error';

        }

    }


    if (confirmPassword) {

        confirmPassword.addEventListener(
            'input',
            checkPasswordMatch
        );

    }


        );

    }

});

</script>
<script>

document.addEventListener('DOMContentLoaded', function () {

    /* =====================================================
       ELEMENTS
    ===================================================== */

    const changePasswordForm =
        document.getElementById('changePasswordForm');

    const currentPassword =
        document.getElementById('currentPassword');

    const newPassword =
        document.getElementById('newPassword');

    const confirmPassword =
        document.getElementById('confirmPassword');

    const strengthBar =
        document.getElementById('strengthBar');

    const strengthText =
        document.getElementById('strengthText');

    const passwordMatch =
        document.getElementById('passwordMatch');

    const currentPasswordError =
        document.getElementById('currentPasswordError');


    /* =====================================================
       SHOW / HIDE PASSWORD
    ===================================================== */

    document.querySelectorAll('.password-toggle').forEach(function (button) {

        button.addEventListener('click', function () {

            const targetId =
                this.getAttribute('data-target');

            const input =
                document.getElementById(targetId);

            const icon =
                this.querySelector('i');

            if (!input) {
                return;
            }

            if (input.type === 'password') {

                input.type = 'text';

                icon.classList.remove('bi-eye');
                icon.classList.add('bi-eye-slash');

            } else {

                input.type = 'password';

                icon.classList.remove('bi-eye-slash');
                icon.classList.add('bi-eye');

            }

        });

    });


    /* =====================================================
       CLEAR FIELD ERROR
    ===================================================== */

    function clearErrors() {

        if (currentPasswordError) {

            currentPasswordError.textContent = '';

            currentPasswordError.className =
                'password-match';
        }

        if (passwordMatch) {

            passwordMatch.textContent = '';

            passwordMatch.className =
                'password-match';
        }

        document.querySelectorAll(
            '#changePasswordForm .is-invalid'
        ).forEach(function (element) {

            element.classList.remove('is-invalid');

        });

    }


    /* =====================================================
       SHOW FIELD ERROR
    ===================================================== */

    function showFieldError(field, message) {

        clearErrors();

        let input = null;
        let errorElement = null;

        if (field === 'current_password') {

            input = currentPassword;
            errorElement = currentPasswordError;

        } else if (field === 'new_password') {

            input = newPassword;

        } else if (field === 'confirm_password') {

            input = confirmPassword;

        }

        if (input) {
            input.classList.add('is-invalid');
            input.focus();
        }

        if (errorElement) {

            errorElement.textContent = message;

            errorElement.className =
                'password-match error';

        }

        // For new password
        if (field === 'new_password') {

            let error = document.getElementById(
                'newPasswordError'
            );

            if (!error) {

                error = document.createElement('div');

                error.id = 'newPasswordError';

                error.className =
                    'password-match error';

                newPassword
                    .closest('.password-field')
                    .appendChild(error);
            }

            error.textContent = message;

        }

        // For confirm password
        if (field === 'confirm_password') {

            if (passwordMatch) {

                passwordMatch.textContent =
                    message;

                passwordMatch.className =
                    'password-match error';
            }
        }

    }


    /* =====================================================
       PASSWORD STRENGTH
    ===================================================== */

    function updatePasswordStrength(password) {

        let score = 0;

        if (password.length >= 8) {
            score++;
        }

        if (/[A-Z]/.test(password)) {
            score++;
        }

        if (/[a-z]/.test(password)) {
            score++;
        }

        if (/[0-9]/.test(password)) {
            score++;
        }

        if (/[^A-Za-z0-9]/.test(password)) {
            score++;
        }

        const widths = [
            '0%',
            '20%',
            '40%',
            '60%',
            '80%',
            '100%'
        ];

        strengthBar.style.width =
            widths[score];

        if (!password) {

            strengthText.textContent =
                'Enter password';

        } else if (score <= 2) {

            strengthText.textContent =
                'Weak';

        } else if (score === 3) {

            strengthText.textContent =
                'Medium';

        } else if (score === 4) {

            strengthText.textContent =
                'Strong';

        } else {

            strengthText.textContent =
                'Very Strong';

        }

    }


    /* =====================================================
       REQUIREMENTS
    ===================================================== */

    function updateRequirement(id, valid) {

        const element =
            document.getElementById(id);

        if (!element) {
            return;
        }

        if (valid) {

            element.classList.add('valid');

        } else {

            element.classList.remove('valid');

        }

    }


    /* =====================================================
       PASSWORD MATCH
    ===================================================== */

    function checkPasswordMatch() {

        if (!confirmPassword ||
            !passwordMatch) {
            return;
        }

        if (!confirmPassword.value) {

            passwordMatch.textContent = '';

            passwordMatch.className =
                'password-match';

            return;
        }

        if (newPassword.value === confirmPassword.value) {

            passwordMatch.textContent =
                'Passwords match';

            passwordMatch.className =
                'password-match success';

            confirmPassword.classList.remove(
                'is-invalid'
            );

        } else {

            passwordMatch.textContent =
                'Passwords do not match';

            passwordMatch.className =
                'password-match error';

            confirmPassword.classList.add(
                'is-invalid'
            );

        }

    }


    /* =====================================================
       NEW PASSWORD INPUT
    ===================================================== */

    if (newPassword) {

        newPassword.addEventListener(
            'input',
            function () {

                const password =
                    this.value;

                updatePasswordStrength(
                    password
                );

                updateRequirement(
                    'reqLength',
                    password.length >= 8
                );

                updateRequirement(
                    'reqUpper',
                    /[A-Z]/.test(password)
                );

                updateRequirement(
                    'reqLower',
                    /[a-z]/.test(password)
                );

                updateRequirement(
                    'reqNumber',
                    /[0-9]/.test(password)
                );

                checkPasswordMatch();

            }
        );

    }


    /* =====================================================
       CONFIRM PASSWORD INPUT
    ===================================================== */

    if (confirmPassword) {

        confirmPassword.addEventListener(
            'input',
            function () {

                checkPasswordMatch();

            }
        );

    }


    /* =====================================================
       CURRENT PASSWORD INPUT
    ===================================================== */

    if (currentPassword) {

        currentPassword.addEventListener(
            'input',
            function () {

                if (currentPasswordError) {

                    currentPasswordError.textContent =
                        '';

                    currentPasswordError.className =
                        'password-match';
                }

                currentPassword.classList.remove(
                    'is-invalid'
                );

            }
        );

    }


    /* =====================================================
       CHANGE PASSWORD SUBMIT
    ===================================================== */

    if (changePasswordForm) {

        changePasswordForm.addEventListener(
            'submit',
            function (event) {

                event.preventDefault();

                clearErrors();

                const current =
                    currentPassword.value.trim();

                const newPass =
                    newPassword.value.trim();

                const confirm =
                    confirmPassword.value.trim();


                /* =========================================
                   FRONTEND VALIDATION
                ========================================= */

                if (!current) {

                    showFieldError(
                        'current_password',
                        'Current password is required.'
                    );

                    return;
                }


                if (!newPass) {

                    showFieldError(
                        'new_password',
                        'New password is required.'
                    );

                    return;
                }


                if (newPass.length < 8) {

                    showFieldError(
                        'new_password',
                        'Password must contain at least 8 characters.'
                    );

                    return;
                }


                if (!/[A-Z]/.test(newPass)) {

                    showFieldError(
                        'new_password',
                        'Password must contain at least one uppercase letter.'
                    );

                    return;
                }


                if (!/[a-z]/.test(newPass)) {

                    showFieldError(
                        'new_password',
                        'Password must contain at least one lowercase letter.'
                    );

                    return;
                }


                if (!/[0-9]/.test(newPass)) {

                    showFieldError(
                        'new_password',
                        'Password must contain at least one number.'
                    );

                    return;
                }


                if (!confirm) {

                    showFieldError(
                        'confirm_password',
                        'Please confirm your new password.'
                    );

                    return;
                }


                if (newPass !== confirm) {

                    showFieldError(
                        'confirm_password',
                        'New password and confirm password do not match.'
                    );

                    return;
                }


                if (current === newPass) {

                    showFieldError(
                        'new_password',
                        'New password must be different from current password.'
                    );

                    return;
                }


                /* =========================================
                   BUTTON LOADING
                ========================================= */

                const submitButton =
                    changePasswordForm.querySelector(
                        'button[type="submit"]'
                    );

                const oldButtonText =
                    submitButton.innerHTML;

                submitButton.disabled = true;

                submitButton.innerHTML =
                    '<span class="spinner-border spinner-border-sm me-1"></span> Updating...';


                /* =========================================
                   AJAX REQUEST
                ========================================= */

                const formData =
                    new FormData();

                formData.append(
                    'current_password',
                    current
                );

                formData.append(
                    'new_password',
                    newPass
                );

                formData.append(
                    'confirm_password',
                    confirm
                );


                fetch(
                    '<?= base_url("change-password") ?>',
                    {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-Requested-With':
                                'XMLHttpRequest'
                        }
                    }
                )
                .then(function (response) {

                    if (!response.ok) {
                        throw new Error(
                            'Server error: ' +
                            response.status
                        );
                    }

                    return response.json();

                })
                .then(function (data) {

                    /* =================================
                       BACKEND VALIDATION ERROR
                    ================================= */

                    if (!data.status) {

                        showFieldError(
                            data.field || 'current_password',
                            data.message ||
                            'Unable to change password.'
                        );

                        return;
                    }




                    changePasswordForm.reset();

                    updatePasswordStrength('');

                    document.querySelectorAll(
                        '.password-requirements li'
                    ).forEach(function (item) {

                        item.classList.remove(
                            'valid'
                        );

                    });


                    passwordMatch.textContent =
                        '';

                    passwordMatch.className =
                        'password-match';


                    if (currentPasswordError) {

                        currentPasswordError.textContent =
                            '';

                        currentPasswordError.className =
                            'password-match';

                    }


                    document.querySelectorAll(
                        '.is-invalid'
                    ).forEach(function (element) {

                        element.classList.remove(
                            'is-invalid'
                        );

                    });


                    /* ================================
                       CLOSE MODAL
                    ================================= */

                    const modalElement =
                        document.getElementById(
                            'changePasswordModal'
                        );

                    const modal =
                        bootstrap.Modal.getInstance(
                            modalElement
                        );

                    if (modal) {
                        modal.hide();
                    }

                })
                .catch(function (error) {

                    console.error(
                        'Change Password Error:',
                        error
                    );

                    alert(
                        'Something went wrong. Please try again.'
                    );

                })
                .finally(function () {

                    submitButton.disabled =
                        false;

                    submitButton.innerHTML =
                        oldButtonText;

                });

            }
        );

    }



/* =====================================================
   RESET PASSWORD FORM
===================================================== */

const resetPasswordForm =
    document.getElementById('resetPasswordForm');

if (resetPasswordForm) {

    resetPasswordForm.addEventListener(
        'submit',
        function (event) {

            event.preventDefault();

            const submitButton =
                resetPasswordForm.querySelector(
                    'button[type="submit"]'
                );


            /* =========================================
               PREVENT DOUBLE CLICK
            ========================================= */

            if (submitButton.disabled) {
                return;
            }

            submitButton.disabled = true;


            /* =========================================
               GET FORM DATA
            ========================================= */

            const formData =
                new FormData(resetPasswordForm);


            /* =========================================
               CLOSE MODAL IMMEDIATELY
            ========================================= */

            const modalElement =
                document.getElementById(
                    'resetPasswordModal'
                );

            const modal =
                bootstrap.Modal.getInstance(
                    modalElement
                );

            if (modal) {
                modal.hide();
            }


            /* =========================================
               CLEANUP BACKDROP
            ========================================= */

            setTimeout(function () {

                document
                    .querySelectorAll('.modal-backdrop')
                    .forEach(function (backdrop) {

                        backdrop.remove();

                    });

                document.body.classList.remove(
                    'modal-open'
                );

                document.body.style.removeProperty(
                    'padding-right'
                );

                document.body.style.removeProperty(
                    'overflow'
                );

            }, 100);


            /* =========================================
               RESET FORM
            ========================================= */

            resetPasswordForm.reset();


            /* =========================================
               SEND AJAX IN BACKGROUND
            ========================================= */

            fetch(
                '<?= base_url("reset-password-request") ?>',
                {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With':
                            'XMLHttpRequest'
                    }
                }
            )
            .then(function (response) {

                if (!response.ok) {

                    throw new Error(
                        'Server error: ' +
                        response.status
                    );

                }

                return response.json();

            })
            .then(function (data) {

                if (!data.status) {

                    console.error(
                        'Reset Password:',
                        data.message ||
                        'Unable to send reset request.'
                    );

                }

            })
            .catch(function (error) {

                console.error(
                    'Reset Password Error:',
                    error
                );

            })
            .finally(function () {

                /*
                 * Enable button for next time
                 */

                submitButton.disabled = false;

            });

        }
    );

}




/* =====================================================
   RESET MODAL CLEANUP
===================================================== */

const resetPasswordModal =
    document.getElementById(
        'resetPasswordModal'
    );

if (resetPasswordModal) {

    resetPasswordModal.addEventListener(
        'hidden.bs.modal',
        function () {

            /* Remove any leftover backdrop */

            document
                .querySelectorAll('.modal-backdrop')
                .forEach(function (backdrop) {

                    backdrop.remove();

                });


            /* Remove Bootstrap body state */

            document.body.classList.remove(
                'modal-open'
            );

            document.body.style.removeProperty(
                'padding-right'
            );

            document.body.style.removeProperty(
                'overflow'
            );


            /* Reset form */

            resetPasswordForm.reset();


            /* Enable button again for next use */

            const submitButton =
                resetPasswordForm.querySelector(
                    'button[type="submit"]'
                );

            if (submitButton) {
                submitButton.disabled = false;
            }

        }
    );

}




    /* =====================================================
       RESET MODAL ON CLOSE
    ===================================================== */

    const changePasswordModal =
        document.getElementById(
            'changePasswordModal'
        );

    if (changePasswordModal) {

     changePasswordModal.addEventListener(
    'hidden.bs.modal',
    function () {

        // Remove leftover backdrop
        document.querySelectorAll('.modal-backdrop').forEach(function (backdrop) {
            backdrop.remove();
        });

        // Remove Bootstrap modal state
        document.body.classList.remove('modal-open');
        document.body.style.removeProperty('padding-right');
        document.body.style.removeProperty('overflow');

        // Reset form
        changePasswordForm.reset();

        updatePasswordStrength('');

        document.querySelectorAll(
            '.password-requirements li'
        ).forEach(function (item) {
            item.classList.remove('valid');
        });

        clearErrors();
    }
);

    }

});

</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

<body>
</html>