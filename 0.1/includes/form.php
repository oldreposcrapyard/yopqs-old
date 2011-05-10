<form method="POST" name="contact-form">
	
	<p>Mo&#380;esz wys&#322;a&#263; mi wiadomo&#347;&#263; u&#380;ywaj&#261;c poni&#380;szego formularza.</p>
	
	<?php if ($this->hasErrors()) : ?>
		<div class="error">
			<p>Wyst&#261;pi&#322;y nast&#281;puj&#261;ce b&#322;&#281;dy:</p>
			<ul>
				<?php $this->displayErrors("<li>","</li>"); ?>
			</ul>
		</div>
	<?php endif; ?>
	<?php if ($this->success()) : ?>
		<div class="success">
			<p><?php $this->getSuccess(); ?></p>
		</div>
	<?php endif; ?>
	
	<p class="required">Pola z gwiazdk&#261; (*) s&#261; wymagane.</p>
	
	<fieldset>
		<legend>Kontakt</legend>
		<p class="first">
			<label for="name">Twoje imi&#281;:<span>*</span></label>
			<span>
				<input type="text" name="name" id="name" value="<?php $this->value('name'); ?>" size="40" />
			</span>
		</p>
		<p>
			<label for="email">Twój email:<span>*</span></label>
			<span>
				<input type="text" name="email" id="email" value="<?php $this->value('email'); ?>" size="40" />
			</span>
		</p>
		<p>
			<label for="subject">Temat:<span>*</span></label>
			<span>
				<input type="text" name="subject" id="subject" value="<?php $this->value('subject'); ?>" size="40" />
			</span>
		</p>
		<p>
			<label for="content">Wiadomo&#347;&#263;:<span>*</span></label>
			<span>
				<textarea name="content" id="content" rows="4" cols="32"><?php $this->value('content'); ?></textarea>
			</span>
		</p>
	</fieldset>
		
	<fieldset class="captcha">
		<legend>Czy jeste&#347; cz&#322;owiekiem?</legend>
		
		<p class="first message">Wprowad&#378; kod z obrazka.</p>
		
		<p>
			<label for="captcha"><?php $this->getCaptcha(); ?></label>
			<input type="text" name="captcha" size="10" />
		</p>
	</fieldset>
	
	<p>
		<input type="submit" name="submit" class="button" value="Wy&#347;lij" />
		<?php $this->generateHash(); ?>
	</p>
	
</form>