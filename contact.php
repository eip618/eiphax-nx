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
<form action="" method="post" class="cnt-form" id="contact-form" novalidate>
  <table>
    <tr>
      <td><div class="form-input"><label for="name">Name</label></div></td>
      <td>
        <input
          type="text"
          name="name"
          id="name"
          placeholder="Enter your name"
          value="<?php echo !empty($postData['name']) ? htmlspecialchars($postData['name'], ENT_QUOTES, 'UTF-8') : ''; ?>"
          required
          autocomplete="name"
        >
      </td>
    </tr>
    <tr>
      <td><div class="form-input"><label for="email">Email</label></div></td>
      <td>
        <input
          type="email"
          name="email"
          id="email"
          placeholder="Enter your email"
          value="<?php echo !empty($postData['email']) ? htmlspecialchars($postData['email'], ENT_QUOTES, 'UTF-8') : ''; ?>"
          required
          autocomplete="email"
        >
      </td>
    </tr>
    <tr>
      <td><div class="form-input"><label for="usersubject">Subject</label></div></td>
      <td>
        <input
          type="text"
          name="usersubject"
          id="usersubject"
          placeholder="Enter subject"
          value="<?php echo !empty($postData['usersubject']) ? htmlspecialchars($postData['usersubject'], ENT_QUOTES, 'UTF-8') : ''; ?>"
          required
          autocomplete="off"
        >
      </td>
    </tr>
    <tr>
      <td><div class="form-input"><label for="message">Message</label></div></td>
      <td>
        <textarea
          name="message"
          id="message"
          placeholder="Type your message here"
          rows="6"
          required
        ><?php echo !empty($postData['message']) ? htmlspecialchars($postData['message'], ENT_QUOTES, 'UTF-8') : ''; ?></textarea>
      </td>
    </tr>
  </table>

  <!-- anti-bot fields -->
  <input
    type="text"
    name="website"
    id="website"
    tabindex="-1"
    autocomplete="off"
    aria-hidden="true"
    style="position:absolute; left:-10000px; top:auto; width:1px; height:1px; overflow:hidden; opacity:0;"
  >
  <input type="hidden" name="ts" value="<?php echo time(); ?>">

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