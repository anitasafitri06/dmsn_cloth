<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Masuk Akun</h2>
						 <h4 style='color:red'>
                   			 <?php echo $this->session->flashdata('flash_msg'); ?> 
			               </h4>
						<form action="<?php echo base_url()?>customer-login" method="post">
							
							<input type="email" placeholder="Email Address" name="cus_email" />
							<input type="password" placeholder="Password" name="cus_password" />
							<span>
								<input type="checkbox" name="remember" value="on" class="checkbox"> 
								Biarkan saya tetap masuk
							</span>
							<button type="submit" class="btn btn-default">Masuk</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">ATAU</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Akun Baru</h2>
						 <h5 style='color:red'> <?php echo validation_errors();?></h5>
						<form action="<?php echo base_url()?>customer-registration" method="post">
							<input type="text" placeholder="Name" name="cus_name" value="<?php echo set_value('cus_name'); ?>"/>
							<input type="email" placeholder="Email Address" name="cus_email" value="<?php echo set_value('cus_email'); ?>"/>
							<input type="password" placeholder="Password" name="cus_password" />
							<input type="password" name="con_pass" placeholder="Confirm Password"/>
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->