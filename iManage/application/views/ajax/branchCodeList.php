<option value="">Select Batch</option>
<?php foreach ($detail  as $row):?>
	<option value="<?php echo $row->timing;?>"><?php echo $row->timing;?></option>
<?php endforeach;?>