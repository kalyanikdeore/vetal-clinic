<?php

namespace App\Controllers;

use App\Models\CommonModel; 

class Admin extends BaseController
{

    public function __construct(){
        $this->CommonModel = new CommonModel(); 
        $session = session();
        $session = \Config\Services::session();
    }

    public function index()
    {
        $session = session();

        if($this->request->getPost()){
            $loginArray = [
                'email' => $this->request->getPost('email'),
                'password' => md5($this->request->getPost('password'))
            ];

        //print_r($loginArray);die;
        $result = $this->CommonModel->checkWhere('tbl_users', $loginArray);
            if(count($result)>0){
                $userData = [
                    'user_id'     => $result[0]->user_id,
                    'role_id'     => $result[0]->role_id,
                    'fullname'     => $result[0]->fullname,
                    'email'     => $result[0]->email,
                    'is_logged' => true
                ];
                $session->set($userData);
                return redirect()->to('dashboard');
            }
        }
        return view('admin/sign-in');
    }
    public function dashboard()
{
    $session = session();

    // User login केलेला नसेल तर login page वर पाठवा
    if (!$session->get('is_logged')) {
        return redirect()->to(base_url('/'));
    }

    // Browser cache मध्ये dashboard ठेवू नका
    $this->response->setHeader(
        'Cache-Control',
        'no-store, no-cache, must-revalidate, max-age=0'
    );
    $this->response->setHeader('Pragma', 'no-cache');
    $this->response->setHeader('Expires', '0');

    return view('admin/index');
}
public function logout()
{
    $session = session();

    $session->destroy();

    return redirect()->to(base_url('/'));
}


    // function dashboard(){
    //     return view('admin/index');
    // }
    
    function signout(){
        return view('admin/signout');
    }

    // function my_profile(){
    //     return view('admin/my-profile');
    // }
    public function my_profile()
{
    $session = session();

    if (!$session->get('is_logged')) {
        return redirect()->to(base_url('/'));
    }

    $userId = $session->get('user_id');

    $userResult = $this->CommonModel->checkWhere(
        'tbl_users',
        [
            'user_id' => $userId
        ]
    );

    if (!$userResult || count($userResult) === 0) {
        return redirect()->to(base_url('/'));
    }

    $user = [
        'user_id' => $userResult[0]->user_id,
        'fullname' => $userResult[0]->fullname,
        'email' => $userResult[0]->email
    ];

    return view('admin/my-profile', [
        'user' => $user
    ]);
}
    /* =====================================================
   CHANGE PASSWORD
   ===================================================== */

public function change_password()
{
    $session = session();

    // Check login
    if (!$session->get('is_logged')) {
        return $this->response->setJSON([
            'status'  => false,
            'field'   => 'session',
            'message' => 'Your session has expired. Please login again.'
        ]);
    }

    $userId = $session->get('user_id');

    // Get POST values
    $currentPassword = trim((string) $this->request->getPost('current_password'));
    $newPassword     = trim((string) $this->request->getPost('new_password'));
    $confirmPassword = trim((string) $this->request->getPost('confirm_password'));

    // Current password required
    if ($currentPassword === '') {
        return $this->response->setJSON([
            'status'  => false,
            'field'   => 'current_password',
            'message' => 'Current password is required.'
        ]);
    }

    // New password required
    if ($newPassword === '') {
        return $this->response->setJSON([
            'status'  => false,
            'field'   => 'new_password',
            'message' => 'New password is required.'
        ]);
    }

    // Confirm password required
    if ($confirmPassword === '') {
        return $this->response->setJSON([
            'status'  => false,
            'field'   => 'confirm_password',
            'message' => 'Please confirm your new password.'
        ]);
    }

    // Get logged-in user
    $user = $this->CommonModel->checkWhere(
        'tbl_users',
        [
            'user_id' => $userId
        ]
    );

    if (!$user || count($user) === 0) {
        return $this->response->setJSON([
            'status'  => false,
            'field'   => 'current_password',
            'message' => 'User account not found.'
        ]);
    }

    // Check current password
    $currentPasswordMd5 = md5($currentPassword);

    if ($user[0]->password !== $currentPasswordMd5) {
        return $this->response->setJSON([
            'status'  => false,
            'field'   => 'current_password',
            'message' => 'Current password is incorrect.'
        ]);
    }

    // Confirm password
    if ($newPassword !== $confirmPassword) {
        return $this->response->setJSON([
            'status'  => false,
            'field'   => 'confirm_password',
            'message' => 'New password and confirm password do not match.'
        ]);
    }

    // Minimum 8 characters
    if (strlen($newPassword) < 8) {
        return $this->response->setJSON([
            'status'  => false,
            'field'   => 'new_password',
            'message' => 'Password must contain at least 8 characters.'
        ]);
    }

    // Uppercase
    if (!preg_match('/[A-Z]/', $newPassword)) {
        return $this->response->setJSON([
            'status'  => false,
            'field'   => 'new_password',
            'message' => 'Password must contain at least one uppercase letter.'
        ]);
    }

    // Lowercase
    if (!preg_match('/[a-z]/', $newPassword)) {
        return $this->response->setJSON([
            'status'  => false,
            'field'   => 'new_password',
            'message' => 'Password must contain at least one lowercase letter.'
        ]);
    }

    // Number
    if (!preg_match('/[0-9]/', $newPassword)) {
        return $this->response->setJSON([
            'status'  => false,
            'field'   => 'new_password',
            'message' => 'Password must contain at least one number.'
        ]);
    }

    // Same password
    if ($currentPassword === $newPassword) {
        return $this->response->setJSON([
            'status'  => false,
            'field'   => 'new_password',
            'message' => 'New password must be different from current password.'
        ]);
    }

    // Update password
    $newPasswordMd5 = md5($newPassword);

    $updated = $this->CommonModel->updateData(
        'tbl_users',
        'user_id',
        $userId,
        [
            'password' => $newPasswordMd5
        ]
    );

    if ($updated) {

        return $this->response->setJSON([
            'status'  => true,
            'message' => 'Password changed successfully.'
        ]);
    }

    return $this->response->setJSON([
        'status'  => false,
        'message' => 'Password could not be updated in database.'
    ]);
}

/* =====================================================
   RESET PASSWORD REQUEST
   ===================================================== */

public function reset_password_request()
{
    $email = trim((string) $this->request->getPost('email'));
    $fullname = trim((string) $this->request->getPost('fullname'));

    if ($email === '') {

        return $this->response->setJSON([
            'status'  => false,
            'field'   => 'email',
            'message' => 'Email is required.'
        ]);
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        return $this->response->setJSON([
            'status'  => false,
            'field'   => 'email',
            'message' => 'Please enter a valid email address.'
        ]);
    }

    if ($fullname === '') {

        return $this->response->setJSON([
            'status'  => false,
            'field'   => 'fullname',
            'message' => 'fullname is required.'
        ]);
    }


    /* =================================================
       FIND USER
       ================================================= */

    $user = $this->CommonModel->checkWhere(
        'tbl_users',
        [
            'email'    => $email,
            'fullname' => $fullname
        ]
    );


    if (!$user || count($user) === 0) {

        return $this->response->setJSON([
            'status'  => false,
            'message' => 'Email and fullname do not match our records.'
        ]);
    }


    $userId = $user[0]->user_id;


    /* =================================================
       GENERATE SECURE TOKEN
       ================================================= */

    $token = bin2hex(random_bytes(32));

    $expiry = date(
        'Y-m-d H:i:s',
        time() + (30 * 60)
    );


    /* =================================================
       SAVE TOKEN
       ================================================= */

    $updated = $this->CommonModel->updateData(
        'tbl_users',
        'user_id',
        $userId,
        [
            'reset_token'        => hash('sha256', $token),
            'reset_token_expiry' => $expiry,
            'reset_token_used'   => 0
        ]
    );


    if (!$updated) {

        return $this->response->setJSON([
            'status'  => false,
            'message' => 'Unable to create password reset request.'
        ]);
    }


    /* =================================================
       RESET LINK
       ================================================= */

    $resetLink =
        base_url('reset-password/' . $token);


    /* =================================================
       EMAIL
       ================================================= */

    $emailService = \Config\Services::email();

    $emailService->setTo($email);

    $emailService->setSubject(
        'Vetal Clinic - Password Reset Request'
    );

    // $message = '
    //     <div style="font-family:Arial,sans-serif;line-height:1.6;">

    //         <h2>Vetal Clinic</h2>

    //         <p>Hello ' . htmlspecialchars($user[0]->fullname) . ',</p>

    //         <p>
    //             We received a request to reset your password.
    //         </p>

    //         <p>
    //             Click the button below to create a new password:
    //         </p>

    //         <p>
    //             <a href="' . $resetLink . '"
    //                style="
    //                    display:inline-block;
    //                    padding:12px 20px;
    //                    background:#0d6efd;
    //                    color:#fff;
    //                    text-decoration:none;
    //                    border-radius:6px;
    //                ">
    //                 Reset Password
    //             </a>
    //         </p>

    //         <p>
    //             This link will expire in <strong>30 minutes</strong>.
    //         </p>

    //         <p>
    //             If you did not request a password reset,
    //             you can safely ignore this email.
    //         </p>

    //         <p>
    //             Regards,<br>
    //             Vetal Clinic
    //         </p>

    //     </div>
    // ';
$message = '
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
</head>

<body style="margin:0; padding:0; background:#f5f6f8; font-family:Arial, Helvetica, sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background:#f5f6f8; padding:40px 15px;">
        <tr>
            <td align="center">

                <table width="600" cellpadding="0" cellspacing="0" border="0"
                       style="max-width:600px; width:100%; background:#ffffff; border-radius:10px; overflow:hidden;">

                    <!-- Header -->
                    <tr>
                        <td style="background:#0d6efd; padding:25px; text-align:center;">
                            <h1 style="margin:0; color:#ffffff; font-size:24px;">
                                Vetal Clinic
                            </h1>
                        </td>
                    </tr>

                    <!-- Content -->
                    <tr>
                        <td style="padding:35px 30px; color:#333333;">

                            <h2 style="margin-top:0; font-size:22px; color:#222222;">
                                Password Reset Request
                            </h2>

                            <p style="font-size:15px; line-height:1.6;">
                                Hello <strong>' . htmlspecialchars($user[0]->fullname) . '</strong>,
                            </p>

                            <p style="font-size:15px; line-height:1.6;">
                                We received a request to reset the password
                                for your Vetal Clinic account.
                            </p>

                            <p style="font-size:15px; line-height:1.6;">
                                Click the button below to create a new password:
                            </p>

                            <!-- Button -->
                            <table cellpadding="0" cellspacing="0" border="0" style="margin:25px 0;">
                                <tr>
                                    <td align="center" style="border-radius:6px; background:#0d6efd;">

                                        <a href="' . $resetLink . '"
                                           style="
                                                display:inline-block;
                                                padding:13px 25px;
                                                font-size:15px;
                                                font-weight:bold;
                                                color:#ffffff;
                                                text-decoration:none;
                                                background:#0d6efd;
                                                border-radius:6px;
                                           ">
                                            Reset Password
                                        </a>

                                    </td>
                                </tr>
                            </table>

                            <p style="font-size:14px; line-height:1.6; color:#555555;">
                                This password reset link will expire in
                                <strong>30 minutes</strong>.
                            </p>

                            <p style="font-size:14px; line-height:1.6; color:#555555;">
                                If you did not request a password reset,
                                you can safely ignore this email.
                            </p>

                            <p style="font-size:15px; line-height:1.6; margin-top:30px;">
                                Regards,<br>
                                <strong>Vetal Clinic</strong>
                            </p>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background:#f1f3f5; padding:18px 25px; text-align:center;">

                            <p style="margin:0; font-size:12px; color:#777777;">
                                This is an automated email. Please do not reply to this email.
                            </p>

                            <p style="margin:8px 0 0; font-size:12px; color:#777777;">
                                &copy; ' . date('Y') . ' Vetal Clinic. All rights reserved.
                            </p>

                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>
</html>
';



    $emailService->setMessage($message);
$emailService->setMailType('html');

    if (!$emailService->send()) {

        return $this->response->setJSON([
            'status'  => false,
            'message' => 'Reset request created, but email could not be sent.'
        ]);
    }


    return $this->response->setJSON([
        'status'  => true,
        'message' => 'Password reset link has been sent to your registered email.'
    ]);
}
/* =====================================================
   RESET PASSWORD PAGE
   ===================================================== */

public function reset_password($token)
{
    if (empty($token)) {

        return redirect()->to(base_url('/'));
    }


    $hashedToken =
        hash('sha256', $token);


    $user = $this->CommonModel->checkWhere(
        'tbl_users',
        [
            'reset_token' => $hashedToken
        ]
    );


    if (!$user || count($user) === 0) {

        return view(
            'admin/reset-password-invalid'
        );
    }


    $userData = $user[0];


    /* ================================================
       CHECK TOKEN USED
       ================================================ */

    if ((int) $userData->reset_token_used === 1) {

        return view(
            'admin/reset-password-invalid'
        );
    }


    /* ================================================
       CHECK TOKEN EXPIRY
       ================================================ */

    if (
        empty($userData->reset_token_expiry) ||
        strtotime($userData->reset_token_expiry) < time()
    ) {

        return view(
            'admin/reset-password-invalid'
        );
    }


    return view(
        'admin/reset-password'
    );
}
/* =====================================================
   RESET PASSWORD UPDATE
   ===================================================== */

public function reset_password_update()
{
     $token = trim(
        (string) $this->request->getPost('token')
    );

    if (!$token) {

        return $this->response->setJSON([
            'status'  => false,
            'message' => 'Invalid password reset token.'
        ]);
    }


    $hashedToken = hash(
        'sha256',
        $token
    );


    $user = $this->CommonModel->checkWhere(
        'tbl_users',
        [
            'reset_token' => $hashedToken
        ]
    );


    if (!$user) {

        return $this->response->setJSON([
            'status'  => false,
            'message' => 'Invalid or expired password reset link.'
        ]);
    }



    $userData =
        $user[0];


    /* ================================================
       TOKEN USED
       ================================================ */

    if ((int) $userData->reset_token_used === 1) {

        return $this->response->setJSON([
            'status'  => false,
            'message' => 'This password reset link has already been used.'
        ]);
    }


    /* ================================================
       TOKEN EXPIRY
       ================================================ */

    if (
        empty($userData->reset_token_expiry) ||
        strtotime($userData->reset_token_expiry) < time()
    ) {

        return $this->response->setJSON([
            'status'  => false,
            'message' => 'This password reset link has expired.'
        ]);
    }


    /* ================================================
       PASSWORDS
       ================================================ */

    $newPassword =
        trim(
            (string) $this->request
                ->getPost('new_password')
        );


    $confirmPassword =
        trim(
            (string) $this->request
                ->getPost('confirm_password')
        );


    /* ================================================
       REQUIRED
       ================================================ */

    if ($newPassword === '') {

        return $this->response->setJSON([
            'status'  => false,
            'message' => 'New password is required.'
        ]);
    }


    if ($confirmPassword === '') {

        return $this->response->setJSON([
            'status'  => false,
            'message' => 'Confirm password is required.'
        ]);
    }


    /* ================================================
       MATCH
       ================================================ */

    if ($newPassword !== $confirmPassword) {

        return $this->response->setJSON([
            'status'  => false,
            'message' => 'New password and confirm password do not match.'
        ]);
    }


    /* ================================================
       LENGTH
       ================================================ */

    if (strlen($newPassword) < 8) {

        return $this->response->setJSON([
            'status'  => false,
            'message' => 'Password must contain at least 8 characters.'
        ]);
    }


    /* ================================================
       UPPERCASE
       ================================================ */

    if (!preg_match('/[A-Z]/', $newPassword)) {

        return $this->response->setJSON([
            'status'  => false,
            'message' => 'Password must contain at least one uppercase letter.'
        ]);
    }


    /* ================================================
       LOWERCASE
       ================================================ */

    if (!preg_match('/[a-z]/', $newPassword)) {

        return $this->response->setJSON([
            'status'  => false,
            'message' => 'Password must contain at least one lowercase letter.'
        ]);
    }


    /* ================================================
       NUMBER
       ================================================ */

    if (!preg_match('/[0-9]/', $newPassword)) {

        return $this->response->setJSON([
            'status'  => false,
            'message' => 'Password must contain at least one number.'
        ]);
    }


    /* ================================================
       UPDATE PASSWORD
       ================================================ */

    $newPasswordMd5 =
        md5($newPassword);


    $updated =
        $this->CommonModel->updateData(
            'tbl_users',
            'user_id',
            $userData->user_id,
            [
                'password'           => $newPasswordMd5,

                // Token invalidate
                'reset_token'        => null,

                'reset_token_expiry' => null,

                'reset_token_used'   => 1
            ]
        );


    if (!$updated) {

        return $this->response->setJSON([
            'status'  => false,
            'message' => 'Password could not be updated.'
        ]);
    }


    return $this->response->setJSON([
        'status'  => true,
        'message' => 'Password reset successfully. Please login with your new password.'
    ]);
}






}
