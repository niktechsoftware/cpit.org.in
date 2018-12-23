<?php $this->load->view('header.php')?>
	
        <hr>
		
	<div class="inner-banner inner">
            <img src="<?php echo base_url();?>assets/asset/images/about-banner.png" alt="about banner" />
        </div>
        <hr>
        <div class="container">
		 <div class="row   wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.2s">
                <h3><strong>Downloads</strong></h3>
            </div>
		<div class="row">
               
                <div class="col-xs-8 col-lg-10 col-md-10  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                   
                    <p class="news7">
                   <table>
<?php $res = $this->db->get("download")->result();?>
                <?php foreach($res as $row):?>
<tr>
<td style="width:80%"><?php echo $row->name; ?></td>
<td><a href="<?php echo base_url();?>iManage/assets/images/download/<?php echo $row->image; ?>" target="_blank" title=""><b style="color: black">Download</b></a></td>
</tr>
 <?php endforeach;?>
</table>

</p>
                </div>
                
         </div>
		<br>
		
		
		
		
		
		
		
        </div>
        <br>

	

<?php $this->load->view('footer.php')?>