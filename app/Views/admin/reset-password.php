
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Reset Password - Vetal Clinic</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        rel="stylesheet">

</head>


<body class="bg-light">


<div class="container">

    <div class="row justify-content-center align-items-center"
         style="min-height:100vh;">

        <div class="col-12 col-md-6 col-lg-5">

            <div class="card border-0 shadow-sm"
                 style="border-radius:16px;">

                <div class="card-body p-4">


                    <div class="text-center mb-4">

                        <div
                            class="mx-auto mb-3"
                            style="
                                width:55px;
                                height:55px;
                                border-radius:14px;
                                background:rgba(13,110,253,.10);
                                color:#0d6efd;
                                display:flex;
                                align-items:center;
                                justify-content:center;
                                font-size:24px;
                            ">

                            <i class="bi bi-shield-lock"></i>

                        </div>


                        <h4 class="fw-bold mb-1">
                            Reset Password
                        </h4>


                        <p class="text-muted small mb-0">
                            Create a new password for your account.
                        </p>

                    </div>


                    <div id="resetMessage"
                         class="alert d-none">
                    </div>


                    <form id="resetPasswordUpdateForm">


                        <!-- NEW PASSWORD -->

                        <div class="mb-3">

                            <label class="form-label fw-semibold">

                                New Password
                                <span class="text-danger">*</span>

                            </label>


                            <div class="input-group">

                                <span class="input-group-text">
                                    <i class="bi bi-key"></i>
                                </span>


                                <input
                                    type="password"
                                    class="form-control"
                                    id="newPassword"
                                    name="new_password"
                                    placeholder="Enter new password"
                                    required>


                                <button
                                    type="button"
                                    class="btn btn-outline-secondary"
                                    id="toggleNewPassword">

                                    <i class="bi bi-eye"></i>

                                </button>

                            </div>

                        </div>


                        <!-- CONFIRM PASSWORD -->

                        <div class="mb-3">

                            <label class="form-label fw-semibold">

                                Confirm Password
                                <span class="text-danger">*</span>

                            </label>


                            <div class="input-group">

                                <span class="input-group-text">
                                    <i class="bi bi-lock-fill"></i>
                                </span>


                                <input
                                    type="password"
                                    class="form-control"
                                    id="confirmPassword"
                                    name="confirm_password"
                                    placeholder="Confirm new password"
                                    required>


                                <button
                                    type="button"
                                    class="btn btn-outline-secondary"
                                    id="toggleConfirmPassword">

                                    <i class="bi bi-eye"></i>

                                </button>

                            </div>


                            <div id="passwordMatch"
                                 class="small mt-1">
                            </div>

                        </div>


                        <!-- REQUIREMENTS -->

                        <div class="bg-light rounded p-3 mb-4">

                            <small class="fw-semibold">
                                Password should contain:
                            </small>


                            <ul class="list-unstyled mb-0 mt-2 small">

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


                        <button
                            type="submit"
                            class="btn btn-primary w-100"
                            id="resetPasswordButton">

                            <i class="bi bi-check-circle me-1"></i>

                            Update Password

                        </button>


                    </form>


                    <div class="text-center mt-3">

                        <a href="<?= base_url('/') ?>"
                           class="text-decoration-none small">

                            <i class="bi bi-arrow-left me-1"></i>
                            Back to Login

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


<script>

document.addEventListener(
    'DOMContentLoaded',
    function () {


        const form =
            document.getElementById(
                'resetPasswordUpdateForm'
            );


        const newPassword =
            document.getElementById(
                'newPassword'
            );


        const confirmPassword =
            document.getElementById(
                'confirmPassword'
            );


        const passwordMatch =
            document.getElementById(
                'passwordMatch'
            );


        const message =
            document.getElementById(
                'resetMessage'
            );


        /* ==========================================
           SHOW / HIDE PASSWORD
           ========================================== */

        document.getElementById(
            'toggleNewPassword'
        ).addEventListener(
            'click',
            function () {

                if (newPassword.type === 'password') {

                    newPassword.type = 'text';

                    this.innerHTML =
                        '<i class="bi bi-eye-slash"></i>';

                } else {

                    newPassword.type = 'password';

                    this.innerHTML =
                        '<i class="bi bi-eye"></i>';

                }

            }
        );


        document.getElementById(
            'toggleConfirmPassword'
        ).addEventListener(
            'click',
            function () {

                if (confirmPassword.type === 'password') {

                    confirmPassword.type = 'text';

                    this.innerHTML =
                        '<i class="bi bi-eye-slash"></i>';

                } else {

                    confirmPassword.type = 'password';

                    this.innerHTML =
                        '<i class="bi bi-eye"></i>';

                }

            }
        );


        /* ==========================================
           PASSWORD REQUIREMENTS
           ========================================== */

        newPassword.addEventListener(
            'input',
            function () {

                const password =
                    this.value;


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


                checkMatch();

            }
        );


        confirmPassword.addEventListener(
            'input',
            checkMatch
        );


        function updateRequirement(
            id,
            valid
        ) {

            const element =
                document.getElementById(id);


            if (valid) {

                element.classList.add(
                    'text-success'
                );

                element.innerHTML =
                    '<i class="bi bi-check-circle-fill"></i> ' +
                    element.textContent.trim();

            } else {

                element.classList.remove(
                    'text-success'
                );

            }

        }


        function checkMatch() {

            if (!confirmPassword.value) {

                passwordMatch.textContent = '';

                return;

            }


            if (
                newPassword.value ===
                confirmPassword.value
            ) {

                passwordMatch.textContent =
                    'Passwords match';

                passwordMatch.className =
                    'text-success small mt-1';

            } else {

                passwordMatch.textContent =
                    'Passwords do not match';

                passwordMatch.className =
                    'text-danger small mt-1';

            }

        }


        /* ==========================================
           FORM SUBMIT
           ========================================== */

        form.addEventListener(
            'submit',
            function (event) {

                event.preventDefault();


                const newPass =
                    newPassword.value.trim();


                const confirmPass =
                    confirmPassword.value.trim();


                /* ===============================
                   FRONTEND VALIDATION
                   =============================== */

                if (newPass.length < 8) {

                    showMessage(
                        'Password must contain at least 8 characters.',
                        'danger'
                    );

                    return;

                }


                if (!/[A-Z]/.test(newPass)) {

                    showMessage(
                        'Password must contain at least one uppercase letter.',
                        'danger'
                    );

                    return;

                }


                if (!/[a-z]/.test(newPass)) {

                    showMessage(
                        'Password must contain at least one lowercase letter.',
                        'danger'
                    );

                    return;

                }


                if (!/[0-9]/.test(newPass)) {

                    showMessage(
                        'Password must contain at least one number.',
                        'danger'
                    );

                    return;

                }


                if (newPass !== confirmPass) {

                    showMessage(
                        'New password and confirm password do not match.',
                        'danger'
                    );

                    return;

                }


                /* ===============================
                   BUTTON
                   =============================== */

                const button =
                    document.getElementById(
                        'resetPasswordButton'
                    );


                const oldText =
                    button.innerHTML;


                button.disabled = true;

                button.innerHTML =
                    '<span class="spinner-border spinner-border-sm me-1"></span> Updating...';


                /* ===============================
                   REQUEST
                   =============================== */

/* ===============================
   REQUEST
   =============================== */

const formData =
    new FormData();

formData.append(
    'new_password',
    newPass
);

formData.append(
    'confirm_password',
    confirmPass
);


/* ===============================
   GET TOKEN FROM RESET URL
   =============================== */

const pathParts =
    window.location.pathname
        .split('/')
        .filter(Boolean);

const token =
    pathParts[pathParts.length - 1];


if (!token) {

    showMessage(
        'Invalid password reset link.',
        'danger'
    );

    button.disabled = false;

    button.innerHTML =
        oldText;

    return;
}


/* ===============================
   ADD TOKEN TO REQUEST
   =============================== */

formData.append(
    'token',
    token
);


/* ===============================
   SEND REQUEST
   =============================== */

fetch(
    '<?= base_url("reset-password-update") ?>',
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

    return response.json();

})

.then(function (data) {

    if (!data.status) {

        showMessage(
            data.message ||
            'Unable to reset password.',
            'danger'
        );

        return;
    }


    showMessage(
        data.message ||
        'Password reset successfully.',
        'success'
    );


    form.reset();


    setTimeout(
        function () {

            window.location.href =
                '<?= base_url("/") ?>';

        },
        2000
    );

})

.catch(function (error) {

    console.error(error);

    showMessage(
        'Something went wrong. Please try again.',
        'danger'
    );

})

.finally(function () {

    button.disabled = false;

    button.innerHTML =
        oldText;

});

            }
        );


        function showMessage(
            text,
            type
        ) {

            message.className =
                'alert alert-' + type;

            message.textContent =
                text;

        }

    }
);

</script>

</body>

</html>

