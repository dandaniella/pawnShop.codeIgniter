<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Access extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */

    public function login()
    {
        $this->session->sess_destroy();
        $this->load->view('access/login');
    }

    public function oAuth()
    {
        if ($_GET['token'] != null) {
            //set session
            if ($_GET['user_type'] === "Admin") {
                $this->session->set_userdata(
                    array(
                        'TOKEN' => $_GET['token'],
                        'USER_NAME' =>  $_GET['user_name'],
                        'USER_EMAIL' =>  $_GET['user_email'],
                        'USER_TYPE' =>  $_GET['user_type'],
                    )
                );

                redirect(base_url('./SystemSetup/dashboard'));
            } else if ($_GET['user_type'] === "Client") {
                $this->session->set_userdata(
                    array(
                        'TOKEN' => $_GET['token'],
                        'USER_NAME' =>  $_GET['user_name'],
                        'USER_EMAIL' =>  $_GET['user_email'],
                        'USER_TYPE' =>  $_GET['user_type'],
                    )
                );

                redirect(base_url('./Client/dashboard'));
            }
        }

        //redirect to System setup Dashboard
    }
}
