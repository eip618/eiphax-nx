<?php
$title = "Contact Me";
$desc = "contact me (or don't?)";
include "header.php";
?>
<?php
include "nav.php";
?>
<?php 
// Include form submission script 
include_once 'submit.php'; 
?>
        <div class="container">
        <div class="content">
            <center><h1>contact me</h1>
            <hr>
        <p>please note that this contact form is intended primarily for issues with the website. contacting me for console hacking help is likely to have a faster response if you instead <a href="https://discord.gg/dQgV6ZG">contact nintendo homebrew</a>
<?php if(!empty($statusMsg)){ ?>
    <div class="status-msg <?php echo $status; ?>" style="text-align: center; margin: 1em 0;">
        <?php echo $statusMsg; ?>
    </div>
<?php } ?>
<!-- form "borrowed" from codexworld.com -->
<!-- Google recaptcha API library -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<!-- Contact form fields -->
<form action="" method="post" class="cnt-form">
<table>
    <tr>
	<td><div class="form-input">
        <label for="name">Name</label></td>
        <td><input type="text" name="name" placeholder="Enter your name" value="<?php echo !empty($postData['name'])?$postData['name']:''; ?>" required=""></td>
    </div>
	</tr>
	<tr>
    <td><div class="form-input">
        <label for="email">Email</label></td>
        <td><input type="email" name="email" placeholder="Enter your email" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>" required=""></td>
    </div>
	</tr>
	<tr>
    <td><div class="form-input">
        <label for="usersubject">Subject</label></td>
        <td><input type="text" name="usersubject" placeholder="Enter subject" value="<?php echo !empty($postData['usersubject'])?$postData['usersubject']:''; ?>" required=""></td>
    </div>
	</tr>
	<tr>
    <td><div class="form-input">
        <label for="message">Message</label></td>
        <td><textarea name="message" placeholder="Type your message here" required=""><?php echo !empty($postData['message'])?$postData['message']:''; ?></textarea></td>
    </div>
	</tr>
</table>
<p />
    <div class="form-input">
        <!-- Google reCAPTCHA box -->
        <div class="g-recaptcha" data-sitekey="<?php echo $siteKey; ?>"></div>
    </div>
    <input type="submit" name="submit" class="btn" value="Submit">
</form>
<p />
<!-- Status message -->
<?php if(!empty($statusMsg)){ ?>
    <div class="status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></div>
<?php } ?>
</center>
<?php
include "footer.php";
?>