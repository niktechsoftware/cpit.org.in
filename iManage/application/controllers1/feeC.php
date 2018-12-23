<?php
class FeeC extends CI_Controller{
	function save_fee(){
		$id = $this->input->post("student_id");
		
		$n = 1000 + $this->invoice_serial->graterId();
		$invoice_no = "GF".$n;
		
		$cl = $this->opening_closing_balance->closing()->closing_balance;
		$clbalance = $cl + $this->input->post("feePay");
		
		if($this->opening_closing_balance->update($clbalance)):
			$in = array(
				"invoice_no" => $invoice_no,
				"reason" => "fee Submit",
				"invoice_date" => date("Y-m-d")
			);
			$data=array(
				"student_id"=>$this->input->post("student_id"),
				"remaing_fee"=>$this->input->post("balance"),
				"paid"=>$this->input->post("feePay"),
				"paid_date"=>$this->input->post("issueDate"),
				"paid_month"=>$this->input->post("monthName"),
				"recieved_by"=>$this->input->post("recieved"),
				"till_date"=>$this->input->post("tillDate"),
				"invoice_no"=>$invoice_no,
				"branch_id" => $this->input->post("branch_id")
			);
			$dayBook = array(
				"paid_to" => $this->session->userdata("name"),
				"paid_by" => $this->input->post("student_id"),
				"reason" => "Student Fee",
				"dabit_cradit" => "credit",
				"amount" => $this->input->post("feePay"),
				"closing_balance" => $clbalance,
				"pay_date" => date("Y-m-d"),
				"pay_mode" => "Cash",
				"branch_id" => $this->input->post("branch_id"),
				"invoice_no" => $invoice_no
			);
			
			$a = $this->invoice_serial->insert($in);
			$b = $this->fee->insert($data);
			$c = $this->day_book->insert($dayBook);
			
			if($a && $b && $c){
				redirect(base_url()."apanel/feeInvoice/$id/$invoice_no");
			}else{
				$mysql->rollback();
			}
		endif;
	}
}