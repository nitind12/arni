<?php defined('BASEPATH') or exit('No direct script access allowed');

class Registration extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Web_model', 'wm');
        $this->load->model('Arni_model', 'arni');
    }

    function submit_registration(){
        echo $resultDB = $this->arni->submit_registration();

        /* Collecting data for email */
        $data['message_email'] = "<p>Thank you for registering with us. You are requested to <b>pay Rs. 2000 within next 5 days</b> for the registration to confirm.</p><p> <b><i style='color: #0000ff'>You can pay online at</i></b> <br> <u>Bank Name</u>: ABC Bank <br> <u>Account number</u>: 00000000 <br> <u>Account Name</u>: XYZ <br> <u>IFSC code</u>:XXX0000AB. </p><p> Also email the payment detail at <em>admission@arni.in</em> with receipt having correct reference/ transaction number.</p> <br> <b>Best wihes,</b> <br><br>______________<br> Arni University,<br> Haldwani";
        $state = explode("_", $this->input->post('cmbState'));
        $school = explode("_", htmlspecialchars($this->input->post('cmbSchool')));
        $degree = explode("_", htmlspecialchars($this->input->post('cmbDegreeDiploma')));
        $course = explode("_", htmlspecialchars($this->input->post('cmbAppliedCourse')));

        $data['candidatename'] = htmlspecialchars($this->input->post('txtName'));
        $data['candidateemail'] = htmlspecialchars($this->input->post('txtEmail'));
        $data['candidatemobile1'] = htmlspecialchars($this->input->post('txtMobile1'));
        $data['candidatemobile2'] = htmlspecialchars($this->input->post('txtMobile2'));
        $data['state'] = $state[1];
        $data['city'] = $this->input->post('txtCity');
        $data['school'] = $school[1];
        $data['degree'] = $degree[1];
        $data['course'] = $course[1];
        $data['_to_'] = "nitin.d12@gmail.com";//"admission@arni.in";
        $data['_cc_'] = "nitin.d12@amrpali.ac.in";//"registrar@arni.in";

        $this->call_email_api_to_candidate($data);
        $this->call_email_api_to_admission_cell($data);
        /* ------------------------- */
    }

    function call_email_api_to_candidate($data){
        $this->email->set_mailtype("html");

        $msg_ = "<h2 style='color: #ff7b30'>Online Registration @ [Arni University]:</h2> <br /><span style='font-size: 15px; color: #121212'>";
        $msg_ = $msg_ . "Dear ".$data['candidatename'].", <br><br>" .$data['message_email'] . "<br><img src='https://www.arni.teamfreelancers.com/arnilogo' style='width:100px'><br /><br />";
        $msg_ = $msg_ . "------------------------ <br />";
        $msg_ = $msg_ . "<b><u>You entered the detail: </u></b> <br />";
        $msg_ = $msg_ . "Name: " . $data['candidatename'] . "<br>";
        $msg_ = $msg_ . "Email: " . $data['candidateemail'] . "<br>";
        $msg_ = $msg_ . "Mobile 1: <a href='tel:'".$data['candidatemobile1']."'>" . $data['candidatemobile1'] . "</a><br>";
        $msg_ = $msg_ . "Mobile 2: " . $data['candidatemobile2'] . "<br>";
        $msg_ = $msg_ . "From: " . $data['city'] . "," . $data['state'] . "<br>";
        $msg_ = $msg_ . "<b>Course Enquired For</b>: " . $data['course'] . " <i>[" . $data['school'] . "]</i>" . "<br>";
        $msg_ = $msg_ . "------------------------ <br />";

        $name_ = "Arni University website";

        $this->email->from("admission@arni.in", $name_);
        $this->email->to($data['candidateemail']);
        $this->email->bcc('ndeepakfreelancer@gmail.com');

        $this->email->subject('Online Registration at Arni University: ');
        $this->email->message($msg_);

        if ($this->email->send()) {
            $ret_data = "Thanks for your query. We will get back soon...";
        } else {
            $ret_data = "X: Server Error !! Try Again...";
        }
        //-------------
        //echo $ret_data;
    }

    function call_email_api_to_admission_cell($data){
        $this->email->set_mailtype("html");

        $msg_ = "<h2 style='color: #ff7b30'>Online Registration @ [Arni University]:</h2> <br /><span style='font-size: 15px; color: #121212'>";
        $msg_ = $msg_ . "------------------------ <br />";
        $msg_ = $msg_ . "<b><u>Candidate Detail</u></b> <br />";
        $msg_ = $msg_ . "Name: " . $data['candidatename'] . "<br>";
        $msg_ = $msg_ . "Email: " . $data['candidateemail'] . "<br>";
        $msg_ = $msg_ . "Mobile 1: <a href='tel:'".$data['candidatemobile1']."'>" . $data['candidatemobile1'] . "</a><br>";
        $msg_ = $msg_ . "Mobile 2: " . $data['candidatemobile2'] . "<br>";
        $msg_ = $msg_ . "From: " . $data['city'] . "," . $data['state'] . "<br>";
        $msg_ = $msg_ . "<b>Course Enquired For</b>: " . $data['course'] . " <i>[" . $data['school'] . "]</i>" . "<br>";
        $msg_ = $msg_ . "------------------------ <br />";

        $name_ = "Arni University website";

        $this->email->from($data['candidateemail'], $name_);
        $this->email->to($data['_to_']);
        $this->email->cc($data['_cc_']);
        $this->email->bcc('ndeepakfreelancer@gmail.com');

        $this->email->subject('Online Registration at Arni University: ');
        $this->email->message($msg_);

        if ($this->email->send()) {
            $ret_data = "Thanks for your query. We will get back soon...";
        } else {
            $ret_data = "X: Server Error !! Try Again...";
        }
        //-------------
        //echo $ret_data;
    }
}