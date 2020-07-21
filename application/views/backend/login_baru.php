<div id="login">
	<?php
	$attributes = array('id' => 'login-form','method' => 'POST');
	echo form_open(site_url('login'), $attributes);
	?>
		<aside>
			<h4>
				<label class="login-title">
					Logo <?php echo $site_name; ?>
				</label>
			</h4>
			<hr/>
			  <form>
				<div class="access_social">
					<a href="#0" class="social_bt facebook">Masuk dengan Akun Facebook</a>
					<a href="#0" class="social_bt google">Masuk dengan Akun Google</a>
				</div>
				<div class="divider"><span>Atau</span></div>
				<div class="form-group">
				<input class="form-control" type="text" placeholder="<?php echo get_msg( 'user_email' ); ?>" name='email' value="<?php echo set_value( 'email' ); ?>">
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
				<input class="form-control" type="password" placeholder="<?php echo get_msg( 'user_password' ); ?>" name='password' value="<?php echo set_value( 'password' ); ?>">
					<i class="icon_lock_alt"></i>
				</div>
				<div class="clearfix add_bottom_30">
					<div class="checkboxes float-left">
						<label class="container_check">Ingat saya
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
					</div>
					<div class="float-right"><a id="forgot" href="<?php echo site_url( 'reset_request' ); ?>">Lupa Password?</a></div>
				</div>
				<button class="btn_1 full-width" type="submit"><?php echo get_msg( 'sign_in' ); ?></button>
				<div class="text-center add_top_10">Pengguna baru? <strong><a href="register.html">Daftar!</a></strong></div>
			</form>
			<div class="copy">© 2020 Mubaligh</div>
		</aside>
	<?php echo form_close();  ?>
</div>
<!-- /login -->

<script src="<?php echo base_url( 'assets/baru/js/common_scripts.min.js' ); ?>"></script>
<script src="<?php echo base_url( 'assets/baru/js/common_func.js' ); ?>"></script>
<script src="<?php echo base_url( 'assets/baru/assets/validate.js' ); ?>"></script>