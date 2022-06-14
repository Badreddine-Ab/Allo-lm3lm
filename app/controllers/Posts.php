<?php
class Posts extends Controller
{
    public function __construct()
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }

        $this->postModel = $this->model('Post');
    }



    public function index()
    {
        // Get posts
        $posts = $this->postModel->getPosts();
        $data = [
            'posts' => $posts
        ];

        $this->view('posts/index', $data);
    }

    public function startwork()
    {
        $data = [];

        $this->view('posts/startwork', $data);
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // Sanitize POST
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'title' => trim($_POST['title']),
                'phone' => trim($_POST['phone']),
                'user_id' => trim($_POST['user_id']),
                'contry' => trim($_POST['contry']),
                'city' => trim($_POST['city']),
                'work_place_name' => trim($_POST['work_place_name']),
                'certificate' => trim($_POST['certificate']),
                'field' => trim($_POST['field']),
                'instagram' => trim($_POST['instagram']),
                'facebook' => trim($_POST['facebook']),
                'whatsapp' => trim($_POST['whatsapp']),
                'work_place_adress' => trim($_POST['work_place_adress']),
                'email' => trim($_POST['email']),

                'title_err' => '',
                'phone_err' => '',
                'contry_err' => '',
                'city_err' => '',
                'work_place_name_err' => '',
                'certificate_err' => '',
                'field_err' => '',
                'instagram_err' => '',
                'facebook_err' => '',
                'whatsapp_err' => '',
                'work_place_adress_err' => '',
                'email_err' => '',
            ];

            // Validate data
            if (empty($data['title'])) {
                $data['title_err'] = 'Please enter a title';
            }
            if (empty($data['phone'])) {
                $data['phone_err'] = 'Please enter body text';
            }

            // Make sure no errors
            if (empty($data['title_err']) && empty($data['phone_err']) && empty($data['contry_err']) && empty($data['city_err']) && empty($data['work_place_name_err']) && empty($data['certificate_err']) && empty($data['field_err']) && empty($data['instagram_err']) && empty($data['facebook_err']) && empty($data['whatsapp_err']) && empty($data['work_place_adress_err']) && empty($data['email_err'])) {
                // Validated
                if ($this->postModel->addPost($data)) {
                    flash('post_message', 'Offer Added');
                    redirect('posts');
                } else {
                    die('Something went wrong');
                }
            } else {
                // Load view with errors
                $this->view('posts/add', $data);
            }
        }
        $data = [
            'title' => '',
            'phone' => '',
            'contry' =>'',
            'city' => '',
            'work_place_name' =>'',
            'certificate' =>'',
            'field' => '',
            'instagram' => '',
            'facebook' => '',
            'whatsapp' =>'',
            'work_place_adress' => '',
            'email' =>''
        ];

        $this->view('posts/add', $data);
    }
}
