<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
      Vetal Clinic | Login
    </title>
    <!-- Bootstrap 5 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >
    <style>
      /* =========================================
           GLOBAL
        ========================================= */
        * {
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            height: 100%;
            margin: 0;
            overflow: hidden;
        }

        body {
            font-family:
                Inter,
                "Segoe UI",
                Roboto,
                Arial,
                sans-serif;
            background: #f3f7fa;
            color: #18364d;
        }

        /* =========================================
           MAIN WRAPPER
        ========================================= */
        .login-wrapper {
            width: 100%;
            height: 100vh;
            min-height: 100vh;
            display: flex;
            overflow: hidden;
        }

        /* =========================================
           LEFT PANEL
        ========================================= */
        .left-panel {
            width: 52%;
            height: 100vh;
            position: relative;
            overflow: hidden;
            color: #ffffff;
            background:
                radial-gradient(
                    circle at 10% 15%,
                    rgba(86, 221, 211, .25),
                    transparent 28%
                ),
                radial-gradient(
                    circle at 90% 90%,
                    rgba(255, 255, 255, .10),
                    transparent 30%
                ),
                linear-gradient(
                    135deg,
                    #07446f 0%,
                    #087ca0 52%,
                    #12a69a 100%
                );
        }

        /* Decorative Circles */
        .left-panel::before {
            content: "";
            position: absolute;
            width: 450px;
            height: 450px;
            border-radius: 50%;
            border: 1px solid rgba(255,255,255,.12);
            top: -220px;
            left: -180px;
        }

        .left-panel::after {
            content: "";
            position: absolute;
            width: 550px;
            height: 550px;
            border-radius: 50%;
            border: 1px solid rgba(255,255,255,.10);
            right: -300px;
            bottom: -330px;
        }

        /* =========================================
           LEFT CONTENT
        ========================================= */
        .left-content {
            position: relative;
            z-index: 2;
            width: 100%;
            height: 100%;
            padding: 5vh 5vw;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* Logo */
        .clinic-logo {
            width: 58px;
            height: 58px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 16px;
            background: rgba(255,255,255,.15);
            border: 1px solid rgba(255,255,255,.25);
            backdrop-filter: blur(10px);
        }

        .clinic-logo i {
            font-size: 31px;
        }

        .clinic-name {
            margin-top: 12px;
            font-size: 24px;
            font-weight: 800;
        }

        .clinic-subtitle {
            margin-top: 2px;
            font-size: 12px;
            opacity: .75;
        }

        /* Main Message */
        .left-middle {
            max-width: 600px;
            margin-top: auto;
            margin-bottom: auto;
        }

        .left-middle h1 {
            margin: 0 0 15px;
            font-size: clamp(32px, 4vw, 52px);
            line-height: 1.08;
            font-weight: 800;
            letter-spacing: -1.5px;
        }

        .left-middle h1 span {
            color: #91f1e3;
        }

        .left-description {
            max-width: 510px;
            margin: 0;
            color: rgba(255,255,255,.82);
            font-size: 14px;
            line-height: 1.65;
        }
        /* =========================================
           FEATURES
        ========================================= */
        .features {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            margin-top: 25px;
            max-width: 530px;
        }

        .feature {
            display: flex;
            align-items: center;
            gap: 9px;
            padding: 10px 12px;
            border-radius: 10px;
            background: rgba(255,255,255,.09);
            border: 1px solid rgba(255,255,255,.10);
            font-size: 11px;
            color: rgba(255,255,255,.9);
        }

        .feature i {
            font-size: 17px;
            color: #9af3e5;
        }

        .left-footer {
            font-size: 10px;
            color: rgba(255,255,255,.55);
        }

        /* =========================================
           RIGHT PANEL
        ========================================= */
        .right-panel {
            width: 48%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 25px;
            overflow: hidden;
            background: #f8fafc;
        }

        .login-container {
            width: 100%;
            max-width: 430px;
        }

        /* =========================================
           LOGIN CARD
        ========================================= */
        .login-card {
            width: 100%;
            padding: 35px;
            background: #ffffff;
            border: 1px solid #e4ebf1;
            border-radius: 20px;
            box-shadow:
                0 20px 55px rgba(25,60,80,.09);
        }

        /* Header */
        .secure-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 6px 11px;
            margin-bottom: 15px;
            border-radius: 50px;
            color: #087c73;
            background: #e8f8f5;
            font-size: 10px;
            font-weight: 700;
        }

        .login-title {
            margin: 0 0 6px;
            font-size: 29px;
            font-weight: 800;
            letter-spacing: -.6px;
            color: #18364d;
        }

        .login-description {
            margin: 0 0 23px;
            color: #738596;
            font-size: 12px;
            line-height: 1.5;
        }

        /* =========================================
           ROLE SELECTOR
        ========================================= */
        .role-title {
            margin-bottom: 8px;
            color: #647687;
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: .7px;
        }

        .role-selector {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 9px;
            margin-bottom: 21px;
        }

        .role-option {
            position: relative;
        }

        .role-option input {
            position: absolute;
            opacity: 0;
            pointer-events: none;
        }

        .role-option label {
            height: 67px;
            padding: 8px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 4px;
            cursor: pointer;
            border: 1px solid #dce5ec;
            border-radius: 11px;
            color: #687c8d;
            background: #ffffff;
            font-size: 10px;
            font-weight: 700;
            transition: .2s ease;
        }

        .role-option label i {
            font-size: 21px;
        }

        .role-option input:checked + label {
            color: #086da0;
            background: #edf8fd;
            border-color: #1689bd;
            box-shadow:
                0 5px 15px rgba(16,120,170,.08);
        }


        /* =========================================
           FORM
        ========================================= */

        .form-label {
            margin-bottom: 7px;
            color: #385267;
            font-size: 11px;
            font-weight: 700;
        }

        .input-wrapper {
            position: relative;
        }

        .input-icon {
            position: absolute;
            z-index: 2;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #8999a7;
            font-size: 16px;
            pointer-events: none;
        }

        .form-control {
            height: 48px;
            padding-left: 42px;
            padding-right: 42px;
            border-radius: 10px;
            border: 1px solid #dce5ec;
            background: #fbfdff;
            font-size: 12px;
            box-shadow: none;
        }

        .form-control:focus {
            border-color: #2196c5;
            background: #ffffff;
            box-shadow:
                0 0 0 3px rgba(33,150,197,.10);
        }


        /* Password */
        .password-toggle {
            position: absolute;
            z-index: 3;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            border: 0;
            background: transparent;
            color: #8293a1;
            padding: 5px;
            cursor: pointer;
        }


        /* =========================================
           OPTIONS
        ========================================= */
        .login-options {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 12px;
            margin-bottom: 20px;
        }

        .form-check-label {
            color: #748493;
            font-size: 10px;
        }

        .form-check-input {
            margin-top: 1px;
            cursor: pointer;
        }

        .forgot-link {
            color: #0875a5;
            text-decoration: none;
            font-size: 10px;
            font-weight: 700;
        }

        .forgot-link:hover {
            text-decoration: underline;
        }

        /* =========================================
           LOGIN BUTTON
        ========================================= */

        .login-btn {
            width: 100%;
            height: 50px;
            border: 0;
            border-radius: 10px;
            color: #ffffff;
            background:
                linear-gradient(
                    135deg,
                    #0871a5,
                    #16a397
                );
            font-size: 12px;
            font-weight: 700;
            box-shadow:
                0 10px 22px rgba(15,116,157,.20);
            transition: .2s ease;
        }


        .login-btn:hover {
            transform: translateY(-1px);
            box-shadow:
                0 13px 25px rgba(15,116,157,.27);
        }


        /* =========================================
           SECURITY MESSAGE
        ========================================= */

        .security-box {
            display: flex;
            gap: 9px;
            margin-top: 17px;
            padding: 10px 11px;
            border-radius: 9px;
            background: #f5f9fb;
            border: 1px solid #e6edf2;
            color: #738391;
            font-size: 9px;
            line-height: 1.45;
        }

        .security-box i {
            flex-shrink: 0;
            color: #159a77;
            font-size: 15px;
        }

        .copyright {
            margin-top: 15px;
            text-align: center;
            color: #98a5af;
            font-size: 9px;
        }

        /* =========================================
           MOBILE
        ========================================= */

        @media (max-width: 991px) {

            html,
            body {
                overflow: auto;
            }

            .login-wrapper {
                height: auto;
                min-height: 100vh;
                display: block;
                overflow: visible;
            }

            .left-panel {
                display: none;
            }

            .right-panel {
                width: 100%;
                min-height: 100vh;
                height: auto;
                padding: 20px 15px;
                overflow: visible;
            }

            .login-container {
                max-width: 450px;
            }


            .login-card {
                padding: 30px 25px;
            }
        }


        @media (max-width: 575px) {

            .right-panel {
                padding: 12px;
            }

            .login-card {
                padding: 25px 19px;
                border-radius: 16px;
            }

            .login-title {
                font-size: 26px;
            }

            .role-option label {
                height: 63px;
            }
        }

        @media (max-width: 360px) {

            .login-card {
                padding: 22px 15px;
            }

            .login-title {
                font-size: 23px;
            }

            .login-description {
                margin-bottom: 18px;
            }

            .role-selector {
                margin-bottom: 17px;
            }

            .form-control {
                height: 45px;
            }

            .login-btn {
                height: 47px;
            }

        }
    </style>
  </head>
  <body>
    <div class="login-wrapper">
      <!-- =========================================
         LEFT BRAND PANEL
    ========================================== -->
      <section class="left-panel">
        <div class="left-content">
          <!-- BRAND -->
          <div>
            <div class="clinic-logo">
              <i class="bi bi-heart-pulse-fill">
              </i>
            </div>
            <div class="clinic-name">
              Vetal Clinic
            </div>
            <div class="clinic-subtitle">
              OPD & Clinic Management System
            </div>
          </div>
          <!-- CENTER -->
          <div class="left-middle">
            <h1>
              Smart Healthcare.
              <span>
                Simple Management.
              </span>
            </h1>
            <p class="left-description">
              Manage patients, OPD consultations,
                    prescriptions, medical records, billing
                    and clinic operations from one secure
                    healthcare management platform.
            </p>
            <div class="features">
              <div class="feature">
                <i class="bi bi-people-fill">
                </i>
                <span>
                  Patient Management
                </span>
              </div>
              <div class="feature">
                <i class="bi bi-clipboard2-pulse-fill">
                </i>
                <span>
                  OPD Management
                </span>
              </div>
              <div class="feature">
                <i class="bi bi-prescription2">
                </i>
                <span>
                  Digital Prescription
                </span>
              </div>
              <div class="feature">
                <i class="bi bi-bar-chart-fill">
                </i>
                <span>
                  Reports & Analytics
                </span>
              </div>
            </div>
          </div>
          <!-- FOOTER -->
          <div class="left-footer">
            ©
            <span id="leftYear">
            </span>
            Vetal Clinic Management System
          </div>
        </div>
      </section>
      <!-- =========================================
         RIGHT LOGIN
    ========================================== -->
      <main class="right-panel">
        <div class="login-container">
          <div class="login-card">
            <!-- HEADER -->
            <div class="secure-badge">
              <i class="bi bi-shield-check">
              </i>
              Secure Healthcare Login
            </div>
            <h2 class="login-title">
              Welcome Back
            </h2>
            <p class="login-description">
              Sign in to securely access your clinic
                    management dashboard.
            </p>
            <!-- ROLE -->
            <div class="role-title">
              Login As
            </div>
            <div class="role-selector">
              <!-- ADMIN -->
              <div class="role-option">
                <input
                            type="radio"
                            name="login_role"
                            id="adminRole"
                            value="admin"
                            checked
                        >
                <label for="adminRole">
                  <i class="bi bi-person-badge-fill">
                  </i>
                  <span>
                    Admin / Doctor
                  </span>
                </label>
              </div>
              <!-- MEDICAL STAFF -->
              <div class="role-option">
                <input
                            type="radio"
                            name="login_role"
                            id="staffRole"
                            value="medical_staff"
                        >
                <label for="staffRole">
                  <i class="bi bi-person-workspace">
                  </i>
                  <span>
                    Medical Staff
                  </span>
                </label>
              </div>
            </div>
            <!-- LOGIN FORM -->
            <form
                    id="loginForm"
                    method="POST"
                    novalidate
                >
              <!-- CODEIGNITER 4 CSRF -->
              <?php if (function_exists('csrf_field')): ?>
                <?= csrf_field() ?>
                  <?php endif; ?>
                    <!-- USERNAME -->
                    <div class="mb-3">
                      <label
                            class="form-label"
                            for="username"
                        >
                        Username / Email
                      </label>
                      <div class="input-wrapper">
                        <i class="bi bi-person input-icon">
                        </i>
                        <input
                                type="text"
                                id="username"
                                name="email"
                                class="form-control"
                                placeholder="Enter username or email"
                                autocomplete="username"
                                required
                            >
                      </div>
                      <div class="invalid-feedback">
                        Please enter your username or email.
                      </div>
                    </div>
                    <!-- PASSWORD -->
                    <div class="mb-2">
                      <label
                            class="form-label"
                            for="password"
                        >
                        Password
                      </label>
                      <div class="input-wrapper">
                        <i class="bi bi-lock-fill input-icon">
                        </i>
                        <input
                                type="password"
                                id="password"
                                name="password"
                                class="form-control"
                                placeholder="Enter password"
                                autocomplete="current-password"
                                minlength="6"
                                required
                            >
                        <button
                                type="button"
                                class="password-toggle"
                                id="togglePassword"
                                aria-label="Show password"
                            >
                          <i
                                    class="bi bi-eye"
                                    id="passwordIcon"
                                >
                          </i>
                        </button>
                      </div>
                      <div class="invalid-feedback">
                        Password must contain at least 6 characters.
                      </div>
                    </div>
                    <!-- OPTIONS -->
                    <div class="login-options">
                      <div class="form-check">
                        <input
                                class="form-check-input"
                                type="checkbox"
                                id="remember"
                                name="remember"
                                value="1"
                            >
                        <label
                                class="form-check-label"
                                for="remember"
                            >
                          Remember me
                        </label>
                      </div>
                      <a
                            href="<?= base_url('forgot-password') ?>
                        "
                            class="forgot-link"
                        >
                            Forgot Password?
                      </a>
                    </div>
                    <!-- LOGIN BUTTON -->
                    <button
                        type="submit"
                        id="loginButton"
                        class="login-btn"
                    >
                      <span id="loginText">
                        <i class="bi bi-box-arrow-in-right me-1">
                        </i>
                        Sign In to Dashboard
                      </span>
                      <span
                            id="loginLoader"
                            class="spinner-border spinner-border-sm d-none"
                        >
                      </span>
                    </button>
                    <!-- SECURITY -->
                    <div class="security-box">
                      <i class="bi bi-shield-lock-fill">
                      </i>
                      <span>
                        Your clinic and patient information
                            is protected by secure authentication
                            and role-based access controls.
                      </span>
                    </div>
                  </form>
                </div>
                <div class="copyright">
                  ©
                  <span id="currentYear">
                  </span>
                  Vetal Clinic. All rights reserved.
                </div>
              </div>
            </main>
          </div>
          <!-- Bootstrap JS -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
          </script>
          <script>
            /* =========================================
       YEAR
    ========================================= */

    const year = new Date().getFullYear();

    document.getElementById("currentYear").textContent = year;
    document.getElementById("leftYear").textContent = year;


    /* =========================================
       PASSWORD TOGGLE
    ========================================= */

    const password =
        document.getElementById("password");

    const togglePassword =
        document.getElementById("togglePassword");

    const passwordIcon =
        document.getElementById("passwordIcon");


    togglePassword.addEventListener(
        "click",
        function () {

            const isPassword =
                password.type === "password";

            password.type =
                isPassword ? "text" : "password";

            passwordIcon.classList.toggle(
                "bi-eye",
                !isPassword
            );


            passwordIcon.classList.toggle(
                "bi-eye-slash",
                isPassword
            );

        }
    );


    /* =========================================
       FORM VALIDATION
    ========================================= */

    const loginForm =
        document.getElementById("loginForm");

    const loginButton =
        document.getElementById("loginButton");

    const loginText =
        document.getElementById("loginText");

    const loginLoader =
        document.getElementById("loginLoader");


    loginForm.addEventListener(
        "submit",
        function (event) {

            if (!loginForm.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            } else {
                loginButton.disabled = true;
                loginText.classList.add("d-none");
                loginLoader.classList.remove("d-none");
            }

            loginForm.classList.add(
                "was-validated"
            );

        }
    );
          </script>
        </body>
      </html>