<?php
class Account extends CI_Controller{
	function dailyExpense(){
		$name = $this->input->post("name");
		$reason = $this->input->post("reason");
		$paid = $this->input->post("paid");
		$paidBy = $this->input->post("paidBy");
		$balance = $this->input->post("balance");
		
		$n = 1000 + $this->invoice_serial->graterId();
		$invoice_no = "GF".$n;
		
		$clbalance = $balance - $paid;
		
		$in = array(
				"invoice_no" => $invoice_no,
				"reason" => $reason,
				"invoice_date" => date("Y-m-d")
		);
		$dayBook = array(
				"paid_to" => $name,
				"paid_by" => $paidBy,
				"reason" => "dailyExpense",
				"detail" => $reason,
				"dabit_cradit" => "dabit",
				"amount" => $paid,
				"closing_balance" => $clbalance,
				"pay_date" => date("Y-m-d"),
				"pay_mode" => "Cash",
				"branch_id" => $this->session->userdata("clinic_id"),
				"invoice_no" => $invoice_no
		);
		
		$a = $this->invoice_serial->insert($in);
		$b = $this->opening_closing_balance->update($clbalance);
		$c = $this->day_book->insert($dayBook);
		
		if($a && $b && $c){
			redirect(base_url()."apanel/dailyExpense/true");
		}else{
			redirect(base_url()."apanel/dailyExpense/false");
		}
	}
	
	public function dayBookDetail(){
		$dt1 = date("Y-m-d", strtotime($this->input->post("sdt")));
		$dt2 =  date("Y-m-d", strtotime($this->input->post("edt")));
		$detailType = $this->input->post("detailType");
		$drCr = $this->input->post("drCr");
		$branchId = $this->input->post("branchId");
		if($branchId == 'all'){
			if(($detailType == "all") && ($drCr == "all")):
				$a = $this->db->query("select * from day_book where pay_date >= '$dt1' AND pay_date <= '$dt2'");
			elseif($detailType == "all"):
				$a = $this->db->query("select * from day_book where dabit_cradit = '$drCr' AND pay_date >= '$dt1' AND pay_date <= '$dt2'");
			elseif($detailType == "all"):
				$a = $this->db->query("select * from day_book where reason = '$detailType' AND pay_date >= '$dt1' AND pay_date <= '$dt2'");
			else:
				$a = $this->db->query("select * from day_book where dabit_cradit = '$drCr' AND reason = '$detailType' AND pay_date >= '$dt1' AND pay_date <= '$dt2'");
			endif;
		}else{
			if(($detailType == "all") && ($drCr == "all")):
			$a = $this->db->query("select * from day_book where pay_date >= '$dt1' AND pay_date <= '$dt2' AND clinic_id='$branchId'");
			elseif($detailType == "all"):
			$a = $this->db->query("select * from day_book where dabit_cradit = '$drCr' AND pay_date >= '$dt1' AND pay_date <= '$dt2' AND clinic_id='$branchId'");
			elseif($detailType == "all"):
			$a = $this->db->query("select * from day_book where reason = '$detailType' AND pay_date >= '$dt1' AND pay_date <= '$dt2' AND clinic_id='$branchId'");
			else:
			$a = $this->db->query("select * from day_book where dabit_cradit = '$drCr' AND reason = '$detailType' AND pay_date >= '$dt1' AND pay_date <= '$dt2' AND clinic_id='$branchId'");
			endif;
		}
		$b = $a->num_rows();
		if($b > 0){
			$data['table'] = $a;
			$data['subPage'] = 'Daybook Detail';
			$data['title'] = "Accounting";
			$data['smallTitle'] = "Daybook Detail";
			$data['pageTitle'] = "Daybook Detail";
			$data['mainContent'] = "dayBookDetail";
			$data['headerCss'] = "headerCss/studentRegisterCss";
			$data['footerJs'] = "footerJs/studentRegisterJs";
			$this->load->view("include/template",$data);
		}
		else{
			echo $dt1.$dt2.$detailType.$drCr.$b;
		}
	}
}