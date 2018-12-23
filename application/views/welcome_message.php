<?php $this->load->view("header");?>
        <!-- header -->   
   <div class="banner-round">
    	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
			<ol class="carousel-indicators">
			  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			  <li data-target="#myCarousel" data-slide-to="1"></li>
			  <li data-target="#myCarousel" data-slide-to="2"></li>
			  <li data-target="#myCarousel" data-slide-to="3"></li>
			  <li data-target="#myCarousel" data-slide-to="4"></li>
			  <li data-target="#myCarousel" data-slide-to="5"></li>
			  <li data-target="#myCarousel" data-slide-to="6"></li>
			</ol>
		<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
			    
                                   <div class="item active">
                       <img src="<?php echo base_url();?>assets/uploads/banner1.jpg" alt="New York" width="1200" height="700">
                    </div>
                                        <div class="item">
                       <img src="<?php echo base_url();?>assets/uploads/banner2.jpg" alt="New York" width="1200" height="700">
                    </div>
                                        <div class="item">
                       <img src="<?php echo base_url();?>assets/uploads/banner3.jpg" alt="New York" width="1200" height="700">
                    </div>
                                        <div class="item">
                       <img src="<?php echo base_url();?>assets/uploads/banner4.jpg" alt="New York" width="1200" height="700">
                    </div>
                    <div class="item">
                       <img src="<?php echo base_url();?>assets/uploads/banner5.jpg" alt="New York" width="1200" height="700">
                    </div>
                     <div class="item">
                       <img src="<?php echo base_url();?>assets/uploads/banner6.jpg" alt="New York" width="1200" height="700">
                    </div>
                     <div class="item">
                       <img src="<?php echo base_url();?>assets/uploads/banner111.jpg" alt="New York" width="1200" height="700">
                    </div>
                                  
			</div>
	    </div>
    </div>    
      
   
        
        <!-- /.banner-round -->
        <!-- ============== Banner section ============== -->
        <!-- ============== About and Service section ============== -->
        <div class="second-section">
            <div class="container about-section">
                <div class="row">
                    <div class="col-sm-12 col-lg-4 col-md-4 for-color">
                        <div class="about">
                            <h2>Latest News</h2>
                          <marquee class="new_maquee" behavior="scroll" direction="up" direction="up" scrollamount="1"  onMouseOver="stop()" onMouseOut="start()" width="100%" height="259px" style="padding-left:10px;font-size:12px; font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;" >
		
           <?php $res = $this->db->get("notice")->result();?>
           <?php foreach($res as $row):?>
           <p> <img src="<?php echo base_url();?>assets/images/symbol.jpg" width="15" height="18" />
           <?php echo $row->msg; ?>
            <img src="<?php echo base_url();?>assets/images/new.gif" width="33" height="16" /> </p>
            <?php endforeach;?>
           
            <br />
           
          </marquee>
                           </div>
                        <!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">×</span>
      <h4 style="color:#fefefe; font-weight:normal;">About Us</h4>
    </div>
    <div class="modal-body">
    <p>CPIT ( is a leading organization in skill development & vocational training landscape, building skill manpower pool for industry requirements. The company is also one of the largest skills provider offering training in 8 sectors in IT, Garment, Beauty, Retail , Logistics .,Telecom, Health, Agriculture and Services sector. Good qualification leads to better Placement & for having better placements, students should have the ability to procure placements. The Govt. has made considerable efforts to enhance the skill of Youth to shorten the gap between demand & supply of skilled workforce. In our country a big part of population is underemployed or unemployed & industry is facing shortage of Labour.
	</p>
    
    <p>Our sole aim is to skill youth and inculcate in them the spirit of employability or entrepreneurship. We provide placement linked training in IT-ITes, Retail Management, Beauty & Wellness, Office Management, Mobile Repairing, DTH Installation, Renewable Energy, Construction, Banking & Finance, and more.</p>
    <p>The trainees range from college & school dropouts to 10th pass or those pursuing diploma/ degree and are determined to hone their employability skills. A stringent process is followed at our training centres to ensure holistic development through a mix of domain training, digital literacy, English language and work readiness skills.</p>
    <p>Our end-to-end training and skills development solutions help enhance youth employability making us the partner of choice for any skilling initiative.</p>
    <p>Simultaneously, we seek to improve the quality of life of the learners by providing them access to education, skill development and new employment opportunities. In addition, we work on various organizational initiatives and fee payment models too through our philanthropic arm Foresight Society of Human Resources & Development (FS-HRD), a society registered under the Societies Registration Act, 1860 which is engaged in rural development initiatives impacting grassroots in the field of capacity building and women empowerment, social entrepreneurship programs, enlightenment and advocacy.</p>
    <p>Foresight is recognized by leading national and global forums and received several laurels towards its contribution to the society.</p>
<p>Under the aegis of Foresight Society of Human Resources & Development (FS-HRD), we have successfully partnered Central and State Government bodies (Ministry of Human Resources & Development, Ministry of Panchayati Raj, IGNOU, CAPART- Council of Advancement of People Action & Rural Technology under Ministry of Rural Development; Corporates including CII (Confederation of Indian Industries), Glaxo Smithkline and various organizations in social sector for organizing training programs under CSR. Click here if you find us a suitable partner for your CSR activities.</p>   
<p>For More Information <a href="#" target="_blank" style="color:#0B0080; font-weight:bold;">Click Here</a></p> 
      
    </div>
    <!-- <div class="modal-footer">
      <h3></h3>
    </div> -->
  </div>

</div>
                        <!-- /.about -->
                    </div><br>
                    <!-- /.col-lg-4 col-md-4 col-sm-4 -->
                    <div class="col-sm-12 col-lg-8 col-md-8  service">
                        <!--<h2 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s" id="servicehome">Program</h2>-->
                        <div class="row">
                           
                            <!-- /.col-lg-4 col-md-4 col-sm-4 -->
                            <div class="col-xs-4 col-sm-2 col-md-2">
                                <img src="<?php echo base_url();?>assets/asset/images/icons/pmkvy.png" class="img-responsive serv" alt="online" />
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-8">
                                <div class="business2">
                                    <p class="newse2">PMKVY</p>
                                    <p class="news6">Pradhan Mantri Kaushal Vikas Yojana (PMKVY) </p>
                                     <p><a href="goverment_institutional.html" target="_blank" style="color:#000;">Read More</a></p>
                                </div>
                                <!-- /.business -->
                            </div>
                            <div class="col-xs-4 col-sm-2 col-md-2">
                                <img src="<?php echo base_url();?>assets/asset/images/icons/lawyer.png" class="img-responsive serv" alt="business" />
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-8">
                                <div class="business2 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <p class="newse2">RPL</p>
                                    <p class="news6">Recognition of Prior Learning (RPL) is a platform to provide recognition to the informal learning or learning through work to get equal acceptance as the formal levels of education. </p>
                                    <p><a href="#" target="_blank" style="color:#000;">Read More</a></p>
                                  
                                </div>
                                <!-- /.business -->
                            </div>
                            <!-- /.col-lg-4 col-md-4 col-sm-4 -->
                            <div class="col-xs-4 col-sm-2 col-md-2">
                                <img src="<?php echo base_url();?>assets/asset/images/icons/business.png" class="img-responsive serv" alt="lawyer" />
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-8">
                                <div class="business2">
                                    <p class="newse2">Student Fee Model</p>
                                    <p class="news6">Our milestone over these years is a huge acceptance of our training programmes.</p>
                                     <p><a href="fee_model.html" target="_blank" style="color:#000;">Read More</a></p>
                                </div>
                                <!-- /.business -->
                            </div>
                           
                            <!-- /.col-lg-4 col-md-4 col-sm-4 -->
                            <div class="col-xs-4 col-sm-2 col-md-2">
                                <img src="<?php echo base_url();?>assets/asset/images/icons/NIELIT-Logo.png" class="img-responsive serv" alt="it management" />
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-8">
                                <div class="business2" >
                                    <p class="newse2">NIELIT</p>
                                    <p class="news6"National Institute of Electronics & Information Technology</p>
                                     <p><a href="http://beta.nielit.gov.in/content/computer-course-0" target="_blank" style="color:#000;">Read More</a></p>
                                </div>
                                <!-- /.business -->
                            </div>
                            <!-- /.col-lg-4 col-md-4 col-sm-4 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.service -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <br>
        <!-- /.second-section -->
		
		 <!-- ============== Our Clients ============== -->
      
		
		 
		
        <!-- ============== Project and Happy client section ============== -->
        <div class="third-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <h2 id="servicehome2">Our Programs</h2>
                        <div class="project-wrap relative">
                            <div class="customNavigation">
                                <a class="btn prev"><i class="fa fa-chevron-left"></i></a>
                                <a class="btn next1"><i class="fa fa-chevron-right"></i></a>
                            </div>
                            <div id="owl-demo" class="owl-carousel owl-theme">
                                                                <div class="slide">
                                    <img src="<?php echo base_url();?>assets/uploads/project.png" class="img-responsive" alt="project">
                                    <div class="link-box">
                                        <a href="#" target="_blank">SKILL DEVELOMPMENT</a>
                                    </div>
                                    <!-- /.link-box -->
                                </div>
                                                                <div class="slide">
                                    <img src="<?php echo base_url();?>assets/uploads/project2.png" class="img-responsive" alt="project">
                                    <div class="link-box">
                                        <a href="<?php echo base_url();?>index.php/welcome/retail" target="_blank">RETAIL MANAGEMENT</a>
                                    </div>
                                    <!-- /.link-box -->
                                </div>
                                                                <div class="slide">
                                    <img src="<?php echo base_url();?>assets/uploads/project3.png" class="img-responsive" alt="project">
                                    <div class="link-box">
                                        <a href="#" target="_blank">BEAUTY & WELLNESS</a>
                                    </div>
                                    <!-- /.link-box -->
                                </div>
                                                                <div class="slide">
                                    <img src="<?php echo base_url();?>assets/uploads/project4.png" class="img-responsive" alt="project">
                                    <div class="link-box">
                                        <a href="<?php echo base_url();?>index.php/welcome/apparel" target="_blank">APPAREL</a>
                                    </div>
                                    <!-- /.link-box -->
                                </div>
                                                                <div class="slide">
                                    <img src="<?php echo base_url();?>assets/uploads/project5.png" class="img-responsive" alt="project">
                                    <div class="link-box">
                                        <a href="#" target="_blank">IT-ITES SECTOR</a>
                                    </div>
                                    <!-- /.link-box -->
                                </div>
                                                                <div class="slide">
                                    <img src="<?php echo base_url();?>assets/uploads/project2.png" class="img-responsive" alt="project">
                                    <div class="link-box">
                                        <a href="#" target="_blank">OUR PROGRAMS</a>
                                    </div>
                                    <!-- /.link-box -->
                                </div>
                                                            </div>
                            <!-- /.project -->
                        </div>
						
					
                        
                        <!-- /.add -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.third-section -->
        <!-- ============== News section ============== -->
          
                       
        
      
<?php $this->load->view("footer");?>