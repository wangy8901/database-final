<?php
include 'bootstraplink.php';
?>
<html>
    <head>
        <title>New Life Hospital</title>
        <!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
<style>
    
    .setSearch{
        width: 300px;
        padding-top: -20px;
        padding: 20px;
    }
    .header{
	height: 150px;
	width: 1000px;
	background-color: #ebebeb;
        border:  2px solid firebrick;
        border-radius: 15px;
}
.aligner{
	margin-left: 200px;
	padding: 12px;
}
.content ul li{
    float: left;
    margin-left: 55px;
    margin-top: 30px;
    font-size: 20px;
    padding: 5px;
    font-style: normal;
    list-style-type: none;
}
.content ,ul ,li:hover{
   background: #d39e00;
}
.footer{
    align :center;
	height: 150px;
	width: 1000px;
	background-color: black;
        border:  2px solid firebrick;
        border-radius: 15px;
        margin: auto;
        margin-top: 20px;
	
}
.footerText p marquee{
	 text-align: center;
    padding-top: 30px;
    color: aquamarine;
    font-size: 60px;
}
.clear{
    clear: both;
}
body{
    background-color: #138496;
}
</style>
    </head>
    <body>
<div class="aligner">
		<div class="header">
			<div class="content">
			
				<ul>
					<li>
                                            <a href="viewAllPatients.php" target="_self">PATIENTS</a>
					</li>
					<li>
                                            <a href="viewAllDoctors.php" target="_self">DOCTORS</a> 
					</li>
					<li>
                                            <a href="viewOnlyNurse.php" target="_self">NURSES </a>
					</li>
					<li>
						<a href="admin.php" target="_self">ADMIN </a>
					</li>
					<li>
						<a href="https://www.facebook.com/" target="_self">SOCIAL  f</a>
					</li>
					<li>
                                            <a href="fortdesk.php" target="_self"> FRONT DESK</a>
					</li>
                                        
				</ul>
			</div>
                    <div class="setSearch">
                         <input type="text" class="form-control" placeholder="Search" width="100px;" >
                    </div>
		</div>
    
		</div>
             
        
        <!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="data1/images/eight.jpg" alt="Doctor Emily" title="Doctor Emily" id="wows1_0"/></li>
		<li><img src="data1/images/five.jpg" alt="Lily+1." title="Lily+1." id="wows1_1"/></li>
		<li><img src="data1/images/four.jpg" alt="Olivia-3" title="Olivia-3" id="wows1_2"/></li>
		<li><img src="data1/images/one.jpg" alt="sla+2." title="sla+2." id="wows1_3"/></li>
		<li><img src="data1/images/seven.jpg" alt="seven" title="seven" id="wows1_4"/></li>
		<li><img src="data1/images/six.png" alt="Isabella-1" title="Isabella-1" id="wows1_5"/></li>
		<li><a href="http://wowslider.com"><img src="data1/images/three.jpg" alt="wowslideshow" title="Ava+2" id="wows1_6"/></a></li>
		<li><img src="data1/images/two.jpg" alt="Isabella-1" title="Isabella-1" id="wows1_7"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="Doctor Emily"><span><img src="data1/tooltips/eight.jpg" alt="Doctor Emily"/>1</span></a>
		<a href="#" title="Lily+1."><span><img src="data1/tooltips/five.jpg" alt="Lily+1."/>2</span></a>
		<a href="#" title="Olivia-3"><span><img src="data1/tooltips/four.jpg" alt="Olivia-3"/>3</span></a>
		<a href="#" title="sla+2."><span><img src="data1/tooltips/one.jpg" alt="sla+2."/>4</span></a>
		<a href="#" title="seven"><span><img src="data1/tooltips/seven.jpg" alt="seven"/>5</span></a>
		<a href="#" title="Isabella-1"><span><img src="data1/tooltips/six.png" alt="Isabella-1"/>6</span></a>
		<a href="#" title="Ava+2"><span><img src="data1/tooltips/three.jpg" alt="Ava+2"/>7</span></a>
		<a href="#" title="Isabella-1"><span><img src="data1/tooltips/two.jpg" alt="Isabella-1"/>8</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">bootstrap slider</a> by WOWSlider.com v8.6</div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->

				
		
			<div class="footer">
				<div class="footerText">
					<p>   <marquee> Today 12 cases of poliovirus exist in two countries, and the Gates Foundation is optimistic the last case of polio could be seen this year. </marquee>
				 </p>
				</div>
			</div>
    </body>
</html>