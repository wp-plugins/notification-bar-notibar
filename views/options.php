<link href='http://fonts.googleapis.com/css?family=Amarante' rel='stylesheet' type='text/css'/>
<form action="" method="post">
    <?php wp_nonce_field( $namespace . "_options", $namespace . '_update_wpnonce' ); ?>
    <input type="hidden" name="form_action" value="update_options" />
    <div class="wrap">
        <h1 style="font-family: Amarante;font-size:50px;margin:40px 0;">NotiBar</h1>
        <h2>Grab Your Readers's Attention with a Notification Bar</h2>
        <div class="tool-box">
            <h3 class="title">Your NotiBar Code</h3>
			<p>Fetch your NotiBar code from <a href="https://www.notibar.com/login">www.notibar.com</a> and paste it below.</p>
			<textarea rows="10" cols="70" name="notibar_code"><?php echo $notibar_code; ?></textarea>
        </div>
        <p class="submit">
            <input type="submit" name="Submit" class="button-primary" value="<?php esc_attr_e('Save Changes') ?>" />
        </p>
    </div>
</form>