<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>
<head>
	<title>Sardot Travel</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Flight Ticket Booking  Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<style type="text/css">
		.bg{
				background: url(<?php echo base_url();?>assets/images/pesawat.jpg);
				background-size: cover;
		}
		.resp-tabs-list {
			background: #DC143C;
		}
		input[type="submit"]{
			background: #DC143C;
		}
		input[type="submit"]:hover{
			background: #FFEBCD;
		}
		h3{
			color: #DC143C;
		}
		input{
			background:rgba(3, 3, 3, 0.57);
			border: 0;
			color: white;
			border: 1px solid #FFEBCD;
		}
		select{
			background: rgba(3, 3, 3, 0.57);
			color: white;
		}
		.select-kota{
			width: 100%;
		}
		input[type="password"] {
		padding: 10px;
		width: 93%;
		float: left;
	}
	</style>
</head>
<body>
	<h1>Sardot Travel</h1>
	<div class="main-agileinfo">
		<div class="sap_tabs">			
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item"><span>Login</span></li>
					<li class="resp-tab-item"><span>Booking Ticket</span></li>
					<li class="resp-tab-item"><span>Registrasi</span></li>				
				</ul>
				<div class="tab-1 resp-tab-content login">
						<form action="<?php base_url();?>welcome/login" method="post">
							<br>
							<div class="from">
								<h3>User Name</h3>
								<input type="text" name="username" class="" id="username" placeholder="Username" required="">
							</div>
							<div class="to">
								<h3>Password</h3>
								<input type="password" name="password" id="password" class="" placeholder="Password" required="">
							</div>
							<input type="submit" name="kirim" value="Masuk">
						</form>						
					</div>	
				<div class="clearfix"> </div>	
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content roundtrip">
						<form action="<?php echo base_url(); ?>welcome/cari" method="get">
							<div class="from">
								<h3>Keberangkatan</h3>
								<select id="w3_country1" name="rute_from" class="select-kota" onchange="change_country(this.value)" class="frm-field required">
									<option>Jakarta</option>  
									<option>Bandung</option>   
									<option>Surabaya</option>   
									<option>Bali</option>  
									<option>Magelang</option> 
									<option>Yogyakarta</option> 
									<option>Jayapura</option>  	
									<option>Merauke</option>
									<option>Semarang</option>					
								</select>
							</div>
							<div class="to">
								<h3>Tujuan</h3>
								<select id="w3_country1" name="rute_to" class="select-kota"  onchange="change_country(this.value)" class="frm-field required">
									<option>Jakarta</option>  
									<option>Bandung</option>   
									<option>Surabaya</option>   
									<option>Bali</option>  
									<option>Magelang</option> 
									<option>Yogyakarta</option> 
									<option>Jayapura</option>  	
									<option>Merauke</option> 					
								</select>
							</div>
							<div class="clear"></div>
							<div class="date">
									<h3>Tanggal</h3>
									<input  id="datepicker" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
								<div class="clear"></div>
							</div>
							<div class="class">
								<h3>Penumpang</h3>
								<select id="w3_country1" class="select-kota" onchange="change_country(this.value)" class="frm-field required">
									<option value="1">1</option>  
									<option value="2">2</option>   
									<option value="3">3</option>
									<option value="4">4</option>   						
								</select>

							</div>
							<div class="clear"></div>
							<div class="numofppl">
								<!-- <div class="adults">
									<h3>Adult:(12+ yrs)</h3>
									<div class="quantity"> 
										<div class="quantity-select">                           
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value"><span>1</span></div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</div>
								<div class="child">
									<h3>Child:(2-11 yrs)</h3>
									<div class="quantity"> 
										<div class="quantity-select">                           
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value"><span>1</span></div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</div> -->
								<div class="clear"></div>
							</div>
							<div class="clear"></div>
							<input type="submit" value="Cari Penerbangan">
						</form>						
					</div>		
					<div class="tab-1 resp-tab-content register">
						<form action="<?php base_url();?>Welcome/add_user" method="post">
							<div class="from">
								<h3>User Name</h3>
								<input type="text" name="username" class="" id="username" placeholder="Username" required="">
							</div>
							<div class="to">
								<h3>Password</h3>
								<input type="password" name="password" id="password" class="" placeholder="Password" required="">
							</div>
							<div class="from">
								<h3>Full Name</h3>
								<input type="text" name="fullname" id="fullname" class="" placeholder="Full Name" required="">
							</div>
							<div class="to">
								<h3>Level</h3>
								<select id="w3_country1" class="select-kota" name="level" onchange="change_country(this.value)" class="frm-field required">
									<option value="user">User</option>  
									<option value="admin">Admin</option>					
								</select>
							</div>
							<input type="submit" name="kirim" value="Daftar">
						</form>						
					</div>		
				</div>						
			</div>
		</div>
	</div>
	<div class="footer-w3l">
		<p class="agileinfo"> &copy; 2018 Salsa Dita Oktora</p>
	</div>
	<!--script for portfolio-->
	<script src="<?php echo base_url() ?>assets/js/jquery.min.js"> </script>
	<script src="<?php echo base_url() ?>assets/js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion           
					width: 'auto', //auto or any width like 600px
					fit: true   // 100% fit in a container
				});
		});		
	</script>
	<!--//script for portfolio-->
	<!-- Calendar -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery-ui.css" />
	<script src="<?php echo base_url() ?>assets/js/jquery-ui.js"></script>
	<script>
		$(function() {
			$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
		});
	</script>
	<!-- //Calendar -->
	<!--quantity-->
	<script>
		$('.value-plus').on('click', function(){
			var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
			divUpd.text(newVal);
		});

		$('.value-minus').on('click', function(){
			var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
			if(newVal>=1) divUpd.text(newVal);
		});
	</script>
	<!--//quantity-->
	<!--load more-->
	<script>
		$(document).ready(function () {
			size_li = $("#myList li").size();
			x=1;
			$('#myList li:lt('+x+')').show();
			$('#loadMore').click(function () {
				x= (x+1 <= size_li) ? x+1 : size_li;
				$('#myList li:lt('+x+')').show();
			});
			$('#showLess').click(function () {
				x=(x-1<0) ? 1 : x-1;
				$('#myList li').not(':lt('+x+')').hide();
			});
		});
	</script>
	<!-- //load-more -->



</body>
</html>