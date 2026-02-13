<?php
$title = "Contact Me";
$desc = "contact me (or don't?)";
include "header.php";
?>
<?php
include "nav.php";
?>
<?php 
$formConfig = [
  'toEmail'   => 'eip@eiphax.tech',
  'fromName'  => 'nx contact',
  'formEmail' => 'form@eiphax.tech',
  'subject'   => 'New submission from NX FORM',
];

require '/var/www/eipmain/lib/submit.php';
?>
        <div class="container">
        <div class="content">
            <center><h1>contact me</h1>
            <hr>
        <p>please note that this contact form is intended primarily for issues with the website. contacting me for console hacking help is likely to have a faster response if you instead <a href="https://discord.gg/dQgV6ZG">contact nintendo homebrew</a>
      <form class="form" action="" method="post" novalidate>
        <div class="status-msg" role="status" aria-live="polite" <?php echo empty($statusMsg) ? 'hidden' : ''; ?>>
          <?php if (!empty($statusMsg)) echo $statusMsg; ?>
        </div>

        <label>
          Name
          <input name="name" required autocomplete="name"
                 value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8') : ''; ?>">
        </label>

        <label>
          Email
          <input type="email" name="email" required autocomplete="email"
                 value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8') : ''; ?>">
        </label>

        <label>
          Subject
          <input type="text" name="usersubject" required autocomplete="off" placeholder="Enter subject"
                 value="<?php echo isset($_POST['usersubject']) ? htmlspecialchars($_POST['usersubject'], ENT_QUOTES, 'UTF-8') : ''; ?>">
        </label>

        <label>
          Message
          <textarea name="message" rows="6" required><?php
            echo isset($_POST['message']) ? htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8') : '';
          ?></textarea>
        </label>

        <input type="hidden" name="token" value="">
        <!-- honeypot + time gate -->
        <label class="hp" aria-hidden="true"
               style="position:absolute; left:-10000px; top:auto; width:1px; height:1px; overflow:hidden; opacity:0;">
          Website
          <input name="favourite-colour" tabindex="-1" autocomplete="new-password">
        </label>
        <input type="hidden" name="ts" value="<?php echo time(); ?>">

        <button class="btn" type="submit" name="submit">Send</button>
      </form>
</center>
<?php
include "footer.php";
?>