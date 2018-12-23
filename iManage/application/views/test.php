<?php
/*
$this->db->where("user_data !=","");
$a = $this->db->get("ci_sessions");
$b = array();
$i = 1;
foreach($a->result() as $row){
		$custom_data[$i] = unserialize($row->user_data);
		//print_r($custom_data);
		//echo "<br/><br/><br/>";
$i++;
}
echo $custom_data[1]['clinic_name']."<br/>";
echo $custom_data[2]['clinic_name']."<br/>";
*/
$val=$this->db->get("sms_setting")->row();
$senderiD=$val->sender_id;
$authkey=$val->auth_key;
	
$this->load->helper("sms");
$msg =	"Congradulations new branch is added with the user id 10005 and password 12563";
$fmobile = "8382829593";
sms($authkey,$msg,$senderiD,$fmobile);
?>