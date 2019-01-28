<?php
class Apanel extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->is_login();
	}
	
	function is_login(){
		$is_login = $this->session->userdata('is_login');
		$is_lock = $this->session->userdata('is_lock');
		$logtype = $this->session->userdata('login_type');
		if(!$is_login){
			//echo $is_login;
			redirect(base_url()."login/index");
		}
		elseif(!$is_lock){
			redirect(base_url()."login/lockPage");
		}
	}
	
	function index(){
		// Opening balance closing balance code start
		$clinic_id = $this->session->userdata("clinic_id");
		$clo1 = $this->db->query("select * from opening_closing_balance WHERE clinic_id = '$clinic_id' ORDER BY id DESC LIMIT 1");
		$clo = $clo1->row();
		if($clo1->num_rows() <=0 ){
			$balance = array(
				"opening_balance" => 0,
				"closing_balance" => 0,
				"clinic_id" => $clinic_id,
				"opening_date" => date("Y-m-d"),
				"closing_date" => date("Y-m-d")			);
			$this->db->insert('opening_closing_balance',$balance);
		}else{
			$cl_date = $clo->closing_date;
			$cl_balance = $clo->closing_balance;
			$cr_date = date('Y-m-d');
			if($cl_date != $cr_date)
			{
				$balance = array(
						"opening_balance" => $cl_balance,
						"closing_balance" => $cl_balance,
						"clinic_id" => $clinic_id,
						"opening_date" => $cr_date,
						"closing_date" => $cr_date
				);
				$this->db->insert('opening_closing_balance',$balance);
			}
			// Opening balance closing balance code end
		}
		$data['subPage'] = 'Home';
		$data['smallTitle'] = 'Dashboard';
		$data['pageTitle'] = 'Overview of all Section';
		
		
		$data['title'] = 'Welfare Club | Dashboard';
		$data['headerCss'] = 'headerCss/dashboardCss';
		$data['footerJs'] = 'footerJs/dashboardJs';
		$data['mainContent'] = 'dashboard';
		$this->load->view("include/template", $data);
	
	}
	
	
	function profile(){
		$data['subPage'] = 'Profile';
		$data['smallTitle'] = 'Profile';
		$data['pageTitle'] = 'Your Profile';
		$data['title'] = 'Welfare Club | Profile';
		$data['headerCss'] = 'headerCss/messageCss';
		$data['footerJs'] = 'footerJs/profileJs';
		$data['mainContent'] = 'profile';
		
		$this->load->view("include/template", $data);
	}
	function updateRollNo(){
		$id = $this->input->post("id");
		$status = $this->input->post("status");
		echo $status;
		if($status == "submitted")
		{
			$sn = $this->db->query("select * from registration WHERE form_no = '$id'");
			$sno = $sn->row();
			$roll = $sno->s_no + 175000;
			$data = array(
					"roll_no" => $roll,
					"status" => $status
			);
			$this->db->where('form_no', $id);
			$this->db->update('registration', $data);
			
		}
	}
	function addprofile(){
		$data['subPage'] = 'Profile';
		$data['smallTitle'] = 'New Branch';
		$data['pageTitle'] = 'Add New Branch';
		$data['title'] = 'Welfare Club | New Branch';
		$data['headerCss'] = 'headerCss/messageCss';
		$data['footerJs'] = 'footerJs/profileJs';
		$data['mainContent'] = 'newBranch';
	
		$this->load->view("include/template", $data);
	}
	
	function branchList(){
		$data['subPage'] = 'Branch';
		$data['smallTitle'] = 'Branch List';
		$data['pageTitle'] = 'Branch List';
		$data['title'] = 'Welfare Club | Branch List';
		$data['headerCss'] = 'headerCss/messageCss';
		$data['footerJs'] = 'footerJs/profileJs';
		$data['mainContent'] = 'branchList';
		
		$data['branchList'] = $this->db->get("general_settings");
		$this->load->view("include/template", $data);
	}
	
	function branchFormDetail(){
		$data['subPage'] = 'Branch Form Detail';
		$data['smallTitle'] = 'Branch Form Detail';
		$data['pageTitle'] = 'Branch Form Detail';
		$data['title'] = 'Branch Form Detail';
		$data['headerCss'] = 'headerCss/messageCss';
		$data['footerJs'] = 'footerJs/profileJs';
		$data['mainContent'] = 'branchFormDetail';
	
		$data['branchList'] = $this->db->get("general_settings");
		$this->load->view("include/template", $data);
	}
	
	function formPaymentDetail(){
		$data['subPage'] = 'Payment Detail';
		$data['smallTitle'] = 'Payment Detail';
		$data['pageTitle'] = 'Payment Detail';
		$data['title'] = 'Payment Detail';
		$data['headerCss'] = 'headerCss/messageCss';
		$data['footerJs'] = 'footerJs/profileJs';
		$data['mainContent'] = 'formPaymentDetail';
		$this->db->distinct();
		$this->db->select("branchId");
		$data['payment'] = $this->db->get("branchform");
		$this->load->view("include/template", $data);
	}
	
	public function studentRegister(){
		$data['subPage'] = 'Student';
		$data['title'] = "New Student Registration";
		$data['smallTitle'] = "Student Registration";
		$data['pageTitle'] = "Student Registration";
		$data['mainContent'] = "studentRegister";
		$data['headerCss'] = "headerCss/studentRegisterCss";
		$data['footerJs'] = "footerJs/studentRegisterJs";
		$this->load->view("include/template",$data);
	}
	
	public function printRegister(){
		$data['subPage'] = 'Student';
		$data['smallTitle'] = "Admission Invoice";
		$data['pageTitle'] = "Student Profile/Admission Invoice";
		$data['title'] = "Student Profile";
		$data['mainContent'] = "printRegister";
		$data['headerCss'] = "headerCss/dashboardCss";
		$data['footerJs'] = "footerJs/dashboardJs";
		$data['stu_id'] = $this->uri->segment(3);
		$this->load->view("include/template",$data);
	}
	
	public function studentList(){
		$data['subPage'] = 'Student';
		$data['title'] = "Student List";
		$data['smallTitle'] = "Student List";
		$data['pageTitle'] = "Student List";
		$data['mainContent'] = "studentList";
		$data['headerCss'] = "headerCss/studentListCss";
		$data['footerJs'] = "footerJs/studentListJs";
		$this->load->view("include/template",$data);
	}
	public function makeOldStudent(){
		$data['subPage'] = 'Student';
		$data['title'] = "Student List";
		$data['smallTitle'] = "Student List";
		$data['pageTitle'] = "Student List";
		$data['mainContent'] = "makeOldStudent";
		$data['headerCss'] = "headerCss/studentListCss";
		$data['footerJs'] = "footerJs/studentListJs";
		$this->load->view("include/template",$data);
	}
	public function oldStudentList(){
		$data['subPage'] = 'Student';
		$data['title'] = "Old Student List";
		$data['smallTitle'] = "Old Student List";
		$data['pageTitle'] = "Old Student List";
		$data['mainContent'] = "oldStudentList";
		$data['headerCss'] = "headerCss/studentListCss";
		$data['footerJs'] = "footerJs/studentListJs";
		$this->load->view("include/template",$data);
	}
	function inquiry(){
		$data['res'] = $this->inquiry->getAll();
		
		$data['subPage'] = 'Website';
		$data['title'] = "Enquiry";
		$data['smallTitle'] = "Enquiry";
		$data['pageTitle'] = "Students Enquiry List";
		$data['mainContent'] = "inquiry";
		$data['headerCss'] = "headerCss/studentListCss";
		$data['footerJs'] = "footerJs/studentListJs";
		$this->load->view("include/template",$data);
	}
	
	function vacancies(){	
		$data['subPage'] = 'Website';
		$data['title'] = "Vacancies";
		$data['smallTitle'] = "Vacancies";
		$data['pageTitle'] = "Enter New Vacancies";
		$data['mainContent'] = "vacancies";
		$data['headerCss'] = "headerCss/studentRegisterCss";
		$data['footerJs'] = "footerJs/studentRegisterJs";
		$this->load->view("include/template",$data);
	}
	
	public function freeDemo(){
		$data['subPage'] = 'Website';
		$data['title'] = "Demo Class List";
		$data['smallTitle'] = "Website";
		$data['pageTitle'] = "Demo Class List";
		$data['mainContent'] = "freeDemo";
		$data['headerCss'] = "headerCss/studentListCss";
		$data['footerJs'] = "footerJs/studentListJs";
		$this->load->view("include/template",$data);
	}
	
	public function career(){
		$data['subPage'] = 'Website';
		$data['title'] = "Career List";
		$data['smallTitle'] = "Website";
		$data['pageTitle'] = "Career List";
		$data['mainContent'] = "career";
		$data['headerCss'] = "headerCss/studentListCss";
		$data['footerJs'] = "footerJs/studentListJs";
		$this->load->view("include/template",$data);
	}
	
	public function singleSms(){
		$data['subPage'] = 'SMS';
		$data['title'] = "Single SMS";
		$data['smallTitle'] = "SMS";
		$data['pageTitle'] = "Single SMS";
		$data['mainContent'] = "singleSms";
		$data['headerCss'] = "headerCss/studentRegisterCss";
		$data['footerJs'] = "footerJs/studentRegisterJs";
		$this->load->view("include/template",$data);
	}
	
	public function batchWise(){
		$data['branch'] = $this->general_settings->allInfo();
		$data['subPage'] = 'SMS';
		$data['title'] = "Batch Wise SMS";
		$data['smallTitle'] = "SMS";
		$data['pageTitle'] = "Batch Wise SMS";
		$data['mainContent'] = "batchSms";
		$data['headerCss'] = "headerCss/studentRegisterCss";
		$data['footerJs'] = "footerJs/studentRegisterJs";
		$this->load->view("include/template",$data);
	}
	
	public function allStudent(){
		$data['subPage'] = 'SMS';
		$data['title'] = "All Student";
		$data['smallTitle'] = "SMS";
		$data['pageTitle'] = "All Student";
		$data['mainContent'] = "allStudent";
		$data['headerCss'] = "headerCss/studentRegisterCss";
		$data['footerJs'] = "footerJs/studentRegisterJs";
		$this->load->view("include/template",$data);
	}
	
	public function takeFee(){
		$data['subPage'] = 'FEE';
		$data['title'] = "Fee Recieve";
		$data['smallTitle'] = "FEE";
		$data['pageTitle'] = "Fee Recieve";
		$data['mainContent'] = "takeFee";
		$data['headerCss'] = "headerCss/listCss";
		$data['footerJs'] = "footerJs/listJs";
		$this->load->view("include/template",$data);
	}
	
	public function viewfeeD(){
		$id = $this->uri->segment(3);
		
		$this->db->where("student_id",$id);
		$data['row'] = $this->db->get("student_info")->row();
		
		$this->db->where("student_id",$id);
		$row = $this->db->get("fee");
		if($row->num_rows() > 0){
			$val = $this->db->query("SELECT remaing_fee FROM fee WHERE student_id = '$id' ORDER BY sno DESC LIMIT 1")->row()->remaing_fee;
			$data['balance'] = $val;
		}else{
			$data['balance'] = $data['row']->total_fee;
		}
		
		$data['subPage'] = 'FEE';
		$data['title'] = "FEE Detail";
		$data['smallTitle'] = "FEE";
		$data['pageTitle'] = "FEE Detail";
		$data['mainContent'] = "viewfeeD";
		$data['headerCss'] = "headerCss/feeCss";
		$data['footerJs'] = "footerJs/feeJs";
		$this->load->view("include/template",$data);
	}
	
	public function branchAddForm(){
		$id = $this->uri->segment(3);
		$this->db->where("clinic_id",$id);
		$data['row'] = $this->db->get("general_settings")->row();
		$data['subPage'] = 'Branch Form Detail';
		$data['title'] = "Branch Form Detail";
		$data['smallTitle'] = "Branch Form Detail";
		$data['pageTitle'] = "Branch Form Detail";
		$data['mainContent'] = "branchAddForm";
		$data['headerCss'] = "headerCss/feeCss";
		$data['footerJs'] = "footerJs/feeJs";
		$this->load->view("include/template",$data);
	}
	
	
	public function feeInvoice(){
		$data['studentId'] = $this->uri->segment(3);
		$data['invoice'] = $this->uri->segment(4);
		$data['subPage'] = 'Invoice';
		$data['title'] = "Fee Recieve Invoice";
		$data['smallTitle'] = "FEE Invoice";
		$data['pageTitle'] = "Fee Recieve Invoice";
		$data['mainContent'] = "feeInvoice";
		$data['headerCss'] = "headerCss/listCss";
		$data['footerJs'] = "footerJs/listJs";
		$this->load->view("include/template",$data);
	}
	
	public function branchPaymentInvice(){
		$data['branchId'] = $this->uri->segment(3);
		$data['invoice'] = $this->uri->segment(4);
		$data['subPage'] = 'Invoice';
		$data['title'] = "Payment Recieve Invoice";
		$data['smallTitle'] = " Invoice";
		$data['pageTitle'] = " Recieve Invoice";
		$data['mainContent'] = "branchPaymentInvice";
		$data['headerCss'] = "headerCss/listCss";
		$data['footerJs'] = "footerJs/listJs";
		$this->load->view("include/template",$data);
	}
	
	public function feeSlipList(){
		$data['subPage'] = 'Fee';
		$data['title'] = "Fee Recieve Invoice";
		$data['smallTitle'] = "FEE Invoice";
		$data['pageTitle'] = "Fee Recieve Invoice";
		$data['mainContent'] = "feeSlipList";
		$data['headerCss'] = "headerCss/listCss";
		$data['footerJs'] = "footerJs/listJs";
		$this->load->view("include/template",$data);
	}
	
	public function dailyExpense(){
		$data['subPage'] = 'Accounting';
		$data['title'] = "Daily Expense";
		$data['smallTitle'] = "Account";
		$data['pageTitle'] = "Daily Expense";
		$data['mainContent'] = "dailyExpense";
		$data['headerCss'] = "headerCss/studentRegisterCss";
		$data['footerJs'] = "footerJs/expenseJs";
		$this->load->view("include/template",$data);
	}
	
	public function dayBook(){
		$data['subPage'] = 'Accounting';
		$data['title'] = "Day Book";
		$data['smallTitle'] = "Day Book";
		$data['pageTitle'] = "Day Book";
		$data['mainContent'] = "dayBook";
		$data['headerCss'] = "headerCss/studentRegisterCss";
		$data['footerJs'] = "footerJs/studentRegisterJs";
		$this->load->view("include/template",$data);
	}
	
	public function courses(){
		$data['subPage'] = 'Settings';
		$data['title'] = "Course";
		$data['smallTitle'] = "Settings";
		$data['pageTitle'] = "Course";
		$data['mainContent'] = "courses";
		$data['headerCss'] = "headerCss/studentRegisterCss";
		$data['footerJs'] = "footerJs/studentRegisterJs";
		$this->load->view("include/template",$data);
	}
	
	public function batchTime(){
		$data['subPage'] = 'Settings';
		$data['title'] = "Batch Time";
		$data['smallTitle'] = "Settings";
		$data['pageTitle'] = "Batch Time";
		$data['mainContent'] = "batchTime";
		$data['headerCss'] = "headerCss/studentRegisterCss";
		$data['footerJs'] = "footerJs/studentRegisterJs";
		$this->load->view("include/template",$data);
	}
	
	public function batchTimeSpecial(){
		$data['subPage'] = 'Settings';
		$data['title'] = "Special Batch Time";
		$data['smallTitle'] = "Special Batch";
		$data['pageTitle'] = "Special Batch Time";
		$data['mainContent'] = "batchTimeSpecial";
		$data['headerCss'] = "headerCss/studentRegisterCss";
		$data['footerJs'] = "footerJs/studentRegisterJs";
		$this->load->view("include/template",$data);
	}
	public function batchTimeNew(){
		$data['subPage'] = 'Settings';
		$data['title'] = "New Batch Time";
		$data['smallTitle'] = "New Batch";
		$data['pageTitle'] = "New Batch Time";
		$data['mainContent'] = "batchTimeNew";
		$data['headerCss'] = "headerCss/studentRegisterCss";
		$data['footerJs'] = "footerJs/studentRegisterJs";
		$this->load->view("include/template",$data);
	}
	
	public function expenseList(){
		$data['subPage'] = 'Settings';
		$data['title'] = "Expense List";
		$data['smallTitle'] = "Expense";
		$data['pageTitle'] = "Expense List";
		$data['mainContent'] = "expenseList";
		$data['headerCss'] = "headerCss/studentRegisterCss";
		$data['footerJs'] = "footerJs/studentRegisterJs";
		$this->load->view("include/template",$data);
	}
	
	function test(){
		$this->load->view("test");
	}
	
	
	function studentAttendance(){
		$data['v']=false;
		$data['v'] = $this->uri->segment(3);
		$data['subPage'] = 'Attendance';
		$data['title'] = "Student Attendance";
		$data['smallTitle'] = "Attendance";
		$data['pageTitle'] = "Student Attendance";
		$data['mainContent'] = "StudentAttendanceList";
		$data['headerCss'] = "headerCss/studentRegisterCss";
		$data['footerJs'] = "footerJs/studentRegisterJs";
		$this->load->view("include/template",$data);
	}
	
	function studentAttenReport(){
		$data['subPage'] = 'Attendance Report';
		$data['title'] = "Student Attendance Report";
		$data['smallTitle'] = "Attendance Report";
		$data['pageTitle'] = "Student Attendance";
		$data['mainContent'] = "StudentAttendanceReport";
		$data['headerCss'] = "headerCss/studentAttenReportCss";
		$data['footerJs'] = "footerJs/studentAttenReportJs";
		$this->load->view("include/template",$data);
	}
	
	public function examRegistration(){
		$data['subPage'] = 'Student';
		$data['title'] = "Exam Student List";
		$data['smallTitle'] = "Exam Student List";
		$data['pageTitle'] = "Exam Student List";
		$data['mainContent'] = "examRegistration";
		$data['headerCss'] = "headerCss/studentListCss";
		$data['footerJs'] = "footerJs/studentListJs";
		$this->load->view("include/template",$data);
	}
	public function empProfile(){
		$data['subPage'] = 'Employee Profile';
		$data['smallTitle'] = 'Employee Profile';
		$data['pageTitle'] = 'Employee Profile';
		$data['title'] = 'JMD Fnance | Profile';
		$data['headerCss'] = 'headerCss/messageCss';
		$data['footerJs'] = 'footerJs/profileJs';
		$data['mainContent'] = 'empProfile';
	
		$this->load->view("include/template", $data);
	}
	
}