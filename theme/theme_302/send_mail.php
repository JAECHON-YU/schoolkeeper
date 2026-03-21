<!-------------------------- 폼메일 -------------------------->

	<div class="row">
		<div class="col-md-12 margin30">
			<div class="divide30"></div>
			<div class="form-contact">
				<form name="message" id="frm" class="contact-form" method="post" novalidate>
				<input type="hidden" id="send_url" value="<?php echo G5_THEME_URL?>">
					<div class="row">
						<div class="col-md-6">
							<div class="row control-group">
								<div class="form-group col-xs-12 controls">
									<label class="kn">담당자<span>*</span></label>
									<input type="text" class="form-control" placeholder="Name" name="name" id="name" required data-validation-required-message="Please enter your name.">
									<p class="help-block"></p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row control-group">
								<div class="form-group col-xs-12 controls">
									<label>E-mail<span>*</span></label>
									<input type="email" class="form-control" name="email" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
									<p class="help-block"></p>
								</div>
							</div> 
						</div>
					</div>
					<div class="row control-group">
						<div class="form-group col-xs-12  controls">
							<label class="kn">연락처</label>
							<input type="tel" class="form-control" placeholder="phone" name="tel" id="phone" autocomplete="off">
						</div>
					</div>
					<div class="row control-group">
						<div class="form-group col-xs-12 controls">
							<label class="kn">아래 보안코드를 입력해주세요.<span>*</span></label>
							<input type="text" name="secode" id="secode" class="form-control" placeholder="<?php echo rand(000,999)?>" aria-describedby="sizing-addon2" required autocomplete="off">
						</div>
					</div> 

					<div class="row control-group">
						<div class="form-group col-xs-12 controls">
							<label class="kn">문의내용<span>*</span></label>
							<textarea rows="5" class="form-control" placeholder="Message" name="content" id="content" required data-validation-required-message="Please enter a message."></textarea>
							<p class="help-block"></p>
						</div>
					</div>

					<div class="row control-group">
						<div class="form-group col-xs-12 controls">
							<a href="<?php echo G5_URL?>/content/privacy" target="_blank" class="btn btn-xs ko" style="color:#000">[개인정보처리방침안내]</a>
							<input type="checkbox" class="" name="agree" value=""> 동의
						</div>
					</div>

					<div id="success"></div>
					<div class="row">
						<div class="form-group col-xs-12 text-right">
							<button type="button" class="btn btn-lg ko" id="msg">SEND MESSAGE</button>
						</div>
					</div>
				</form>
			</div><!--contact form-->
		</div><!-- ./col -->
	</div>
