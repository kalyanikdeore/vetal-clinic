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

    function dashboard(){
        return view('admin/index');
    }
    
    function signout(){
        return view('admin/signout');
    }

    function my_profile(){
        return view('admin/my-profile');
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
}
