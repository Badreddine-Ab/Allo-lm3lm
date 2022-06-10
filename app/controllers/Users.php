<?php
class Users extends Controller
{
  public function __construct()
  {
  }

  public function register()
  {
    // Check for POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Process form

      //Sanitize POST data
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      // Init data
      $data = [
        'name' => trim($_POST['name']),
        'email' => trim($_POST['email']),
        'password' => trim($_POST['password']),
        'confirm_password' =>  trim($_POST['confirm_password']),
        'adress' => trim($_POST['adress']),
        'phone' =>  trim($_POST['phone']),
        'name_err' => '',
        'email_err' => '',
        'password_err' => '',
        'confirm_password_err' => '',
        'phone_err' => '',
        'adress_err' => ''
      ];


      // Validate Email 
      if (empty($data['email'])) {
        $data['email_err'] = 'Please enter email';
      }

      // Validate Name
      if (empty($data['name'])) {
        $data['name_err'] = 'Please enter name';
      }

      // Validate Password
      if (empty($data['password'])) {
        $data['password_err'] = 'Please enter password';
      } elseif (strlen($data['password']) < 6) {
        $data['password_err'] = 'Password must be at least 6 characters';
      }

      // Validate Confirm password
      if (empty($data['confirm_password'])) {
        $data['confirm_password_err'] = 'Please enter confirm password';
      } else {
        if ($data['password'] != $data['confirm_password']) {
          $data['confirm_password_err'] = 'Password do not match';
        }
      }




      // Validate adress
      if (empty($data['adress'])) {
        $data['adress_err'] = 'Please enter adress';
      }

      // Validate phone
      if (empty($data['phone'])) {
        $data['phone_err'] = 'Please enter phone';
      }

      // Make sure errors are empty
      if (empty($data['email_err']) && empty($data['name_err']) && empty($data['password_err']) && empty($data['confirm_password_err']) && empty($data['adress_err']) && empty($data['phone_err'])) {
        //Validated
        die('SUCCESS');
      } else {
        // Load view with errors
        $this->view('users/register', $data);
      }
    } else {
      // Init data
      $data = [
        'name' => '',
        'email' => '',
        'password' => '',
        'confirm_password' => '',
        'adress' => '',
        'phone' => '',
        'name_err' => '',
        'email_err' => '',
        'password_err' => '',
        'confirm_password_err' => '',
        'phone_err' => '',
        'adress_err' => ''
      ];

      // Load view
      $this->view('users/register', $data);
    }
  }

  public function login()
  {
    // Check for POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Process form
      //Sanitize POST data
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      // Init data
      $data = [

        'email' => trim($_POST['email']),
        'password' => trim($_POST['password']),


        'email_err' => '',
        'password_err' => '',

      ];

      if (empty($data['email'])) {
        $data['email_err'] = 'Please enter email';
      }

      if (empty($data['password'])) {
        $data['password_err'] = 'Please enter password';
      }

      // Make sure errors are empty 
      if (empty($data['email_err'])  && empty($data['password_err']) ) {
        //Validated
        die('SUCCESS');
      } else {
        // Load view with errors
        $this->view('users/login', $data);
      }

      
    } else {
      // Init data
      $data = [

        'email' => '',
        'password' => '',




        'email_err' => '',
        'password_err' => ''


      ];

      // Load view
      $this->view('users/login', $data);
    }
  }
}
