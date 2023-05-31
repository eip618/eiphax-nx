<?php
$title = "title downgrade guide";
$desc = "how to downgrade a title version (hello TOTK players)";
include "header.php";
?>
<?php
include "nav.php";
?>
        <div class="container">
        <div class="content">
<center><h1>downgrading your software version on a hacked switch</h1></center>
<hr />
<p>this guide will attempt to teach you how to remove an accidental software update (aka 'downgrade' a piece of software such as a game).</p>
<h3>what you need</h3>
<ul>
	<li><a href="https://github.com/XorTroll/Goldleaf/releases/latest">the goldleaf homebrew utility</a> available on your console via the homebrew menu</li>
	<li><a href="https://github.com/J-D-K/JKSV/releases/latest">jk's save manager</a> available on your console via the homebrew menu</li>
	<li>some free space on your sd card</li>
	<li>automatic software updates disabled in <div class="code">System Settings > System</div></li>
</ul>
<p /><h3>how to do the thing</h3>
<div class="info">please note that this process will reset your title's version <i>entirely</i>, as in: if you installed update 1.2.0 and you want to go back to 1.1.0, this process will take you all the way back to 1.0.0</div>
<ol>
	<li>if you do not already have goldleaf and jk's save manager in your <div class="code">switch</div> folder on your sd card so you can use them via the homebrew menu, put them there now</li>
	<li>use title takeover to launch the homebrew menu via an installed title. on systems with the default atmosphere config, you can do this by holding the <div class="code">right shoulder</div> button while launching an installed title, and continuing to hold it until you see the homebrew menu</li>
	<li>launch jk's save manager (jksv) from the homebrew menu and make a backup of any saves you care about (usage instructions can be found at <a href="https://github.com/J-D-K/JKSV">jksv's github</a> if you need them)</li>
	<li>press the <div class="code">+</div> button to go back to the homebrew menu and launch goldleaf</li>
	<li>navigate to <div class="code">Manage console contents</div></li>
	<li>you will need to work out whether your title and update are stored on your sd card <div class="code">(SD card)</div>, or in the console's nand storage <div class="code">(NAND USER)</div>, and select the relevant option <b>for the update</b> in this menu. if you are unsure, you can check <div class="code">system settings > data management > software</div></li>
	<li>in the relevant menu listing, find and select your title, then select <div class="code">Update</div></li>
	<li>select <div class="code">Export > Yes</div> and wait for this process to complete. this is a backup of the update you are intending to remove in case you need to install it again. if you do, it will be in <div class="code">SD:/switch/goldleaf/export/</div></li>
	<li>select the <div class="code">Update</div> entry again, and this time select <div class="code">Remove > Yes > Yes</div></li>
	<li>now navigate to the listing <b>for the game</b>, which might be in the same place you are now, or might be somewhere else (remember step 6)</li>
	<li>select the game, then select <div class="code">Reset launch version > Yes</div></li>
</ol>
<div class="blue">that's it, the game should allow you to launch now without the update. the game will probably prompt you for an update if/when it is connected to the internet again, but you should be given the option to download it, or to start the game without it.</div>
<div class="info">be warned that <b>there is a chance saves from a newer update will not work on an older version</b>, which is why this guide has you make backups during the process. if anything goes wrong, reinstall the update and restore the save backup you made.</div>
<?php
include "footer.php";
?>
