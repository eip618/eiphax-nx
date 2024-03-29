<?php
$title = "Switch Bans";
$desc = "Information about bans on the Switch and how to avoid them.";
include "header.php";
?>
			<!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<?php
include "nav.php";
?>
        <div class="container">
        <div class="content">
            <center><h1>Switch Ban Essentials: Q&A</h1></center>
            <hr>
			<p>Bans are scary and Nintendo hasn’t been shy about banning hacked Switch consoles. However, educated hackers know that bans are avoidable and they know how to avoid them. The Q&A below should answer any questions you may have on how bans work and how to avoid getting your console banned.
			<p>This guide was written by Discord user Gunther#8698 (and eip). Click on a question below to reveal the answer. If you have further questions, you can ask on the <a href="https://discord.gg/C29hYvh">Nintendo Homebrew Discord server</a>.
        <p>
	<div id="page-content-wrapper">
		<div class="container-fluid fade show active" id="operations">
		<div class="accordion" id="accordionOperations">
			<div class="card">
				<div class="card-header" id="e1">
				<h2 class="mb-0">
				<button class="btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				<b>[1]</b> What is a ban and how does it happen?
				</button>
				</h2>
				</div>
				<div id="collapseOne" class="collapse" aria-labelledby="e1" data-parent="#accordionOperations">
				<div class="card-body">
				Put simply, a ban is when Nintendo decides not to let a specific console or Nintendo account use its online services. Most bans associated with hacking are console bans, meaning that the specific console that Nintendo has banned will be unable to use Nintendo’s online services, including the eshop, game updates, and online play. Nintendo reserves the right to withhold these services per their <a href="https://accounts.nintendo.com/term/eula/US?lang=en-US">user agreement</a>.
				</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="e2">
				<h2 class="mb-0">
				<button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				<b>[2]</b> What does Nintendo ban consoles for?
				</button>
				</h2>
				</div>
				<div id="collapseTwo" class="collapse" aria-labelledby="e2" data-parent="#accordionOperations">
				<div class="card-body">
				<h4>The following actions will cause an immediate ban of your Nintendo Switch:</h4>
				<ul>
					<li>Piracy of any sort</li>
					<li>Homebrew NSPs (installed to the home menu)</li>
					<li>Changing user icon through Homebrew</li>
					<li>Sketchy eShop behavior</li>
				</ul>
				<h4>The following actions will not result in an immediate ban, but will still result in a ban:</h4>
				<ul>
					<li>Modding online games</li>
					<li>Cheating in online games</li>
					<li>Clearing error logs after they’ve been uploaded to Nintendo (this may extend to using both emuMMC and sysMMC online, due to mismatched logs)</li>
				</ul>
				<h4>The following actions have not resulted in a ban (so far):</h4>
				<ul>
					<li>Atmosphere itself</li>
					<li>Using the Homebrew Menu (via launch takeover, eg by album or a gamecart/installed title)</li>
					<li>Custom themes</li>
					<li>Custom sysmodules</li>
					<li>Mods/cheating in offline games</li>
					<li>Overclocking with sys-clk</li>
					<li>EmuMMC</li>
				</ul>
				<p>(Thanks to Discord user Val#8035 on the ReSwitched Discord server for this list)
				</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="e3">
				<h2 class="mb-0">
				<button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				<b>[3]</b> How does Nintendo know I did any of the things they ban for?
				</button>
				</h2>
				</div>
				<div id="collapseThree" class="collapse" aria-labelledby="e3" data-parent="#accordionOperations">
				<div class="card-body">
				Nintendo has significantly upgraded the quality of their telemetry systems. Telemetry systems basically monitor what the user does on the console, including what games they install, what games they play, and a bunch of other data too. The Nintendo Switch stores this data constantly, even while offline, and will send these data logs to Nintendo as soon as it connects to the internet and Nintendo’s servers. This means that if a bannable action is performed on the Switch (even while offline) and the console connects to the internet at any point afterward, even briefly, Nintendo will receive the telemetry log and ban the console.
				</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="e4">
				<h2 class="mb-0">
				<button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
				<b>[4]</b> How do I prevent getting banned?
				</button>
				</h2>
				</div>
				<div id="collapseFour" class="collapse" aria-labelledby="e4" data-parent="#accordionOperations">
				<div class="card-body">
				There are essentially two ways to prevent getting banned. The first is to avoid performing any of the actions that Nintendo bans for on your Switch. The second is to keep your console permanently offline so that even if you take a bannable action, Nintendo will never be sent the telemetry log and will never find out about it.
				</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="e5">
				<h2 class="mb-0">
				<button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
				<b>[5]</b> What is an emuNAND/emuMMC? Can it prevent me from getting banned?
				</button>
				</h2>
				</div>
				<div id="collapseFive" class="collapse" aria-labelledby="e5" data-parent="#accordionOperations">
				<div class="card-body">
				NAND is simply a type of data storage that is used in a variety of electronic devices. eMMC is the type of NAND that is used in the Switch as its internal data storage. All of the Switch’s data is stored on its eMMC, which is an internal component of the Switch. This internal storage is sometimes referred to as the system NAND/eMMC or sysNAND/sysMMC. An emuNAND or emuMMC (emulated NAND or emulated eMMC) is a copy of the SysNAND stored on the SD card. 
				<p>Since the telemetry logs are stored in the Switch’s NAND, an emuNAND is useful because it allows you to have two copies of the Switch’s internal storage. Your sysNAND can be used for online play and eshop purchases while your emuNAND can be used for CFW and hacking and be kept permanently offline. This lets you have the best of both worlds! If you followed the recommended CFW setup on <a href="https://nh-server.github.io/switch-guide/">Nintendo Homebrew’s guide</a>, you should already have an emuNAND set up.
				</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="e6">
				<h2 class="mb-0">
				<button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
				<b>[6]</b> So I can’t get banned if I use an emuNAND, right?
				</button>
				</h2>
				</div>
				<div id="collapseSix" class="collapse" aria-labelledby="e6" data-parent="#accordionOperations">
				<div class="card-body">
				Wrong. 
				<p>An emuNAND is a tool to help prevent bans, it is not a magic bullet. You have to keep your emuNAND permanently offline or it won’t help you very much. It is also important to note that even though the internal storage of your sysNAND and emuNAND are separate, they are still copies of the same system with the same unique identifiers. If Nintendo bans your emuNAND then your sysNAND gets banned too and vice versa.
				</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="e7">
				<h2 class="mb-0">
				<button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
				<b>[7]</b> But what if I want to use online homebrew tools like FTP or the Homebrew Store?
				</button>
				</h2>
				</div>
				<div id="collapseSeven" class="collapse" aria-labelledby="e7" data-parent="#accordionOperations">
				<div class="card-body">
				If you still want to use your internet connection on your always-offline console (or emuNAND), there is a way to do so. You just need to make sure that even though your console may be connected to the internet, it won’t be able to connect to Nintendo’s servers and therefore won’t be able to send the telemetry logs. 
				<p>The recommended way to do this is dns-mitm, which is an on-console custom DNS black hole that allows connection to the internet, but blocks Nintendo’s servers. The NH Switch guide sets up dns-mitm by default <a href="https://nh-server.github.io/switch-guide/">here</a>.
				</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="e8">
				<h2 class="mb-0">
				<button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
				<b>[8]</b> What about Incognito/Incognito RCM?
				</button>
				</h2>
				</div>
				<div id="collapseEight" class="collapse" aria-labelledby="e8" data-parent="#accordionOperations">
				<div class="card-body">
				Incognito is not recommended for a variety of reasons. It functions by blanking parts of your console’s PRODINFO, which is console-unique data that your console requires to boot. If Incognito goes wrong, malfunctions, or if you lose the backup, it can result in damage to the functionality of your console, up to and including a brick and never being able to go online again.
				<p>Part of the way Incognito functions is by forcing your console to send "invalid data" when connecting to Nintendo servers, which at the time reject such invalid connections. If Nintendo wanted to, they could simply set their servers to receive these connections, and then everyone and anyone relying on Incognito will be sending all of their telemetry to Nintendo instantly.
				<p>The other issue with Incognito is that what it does delete, is (to speak simply) significantly short of everything that it <i>should</i> delete to have the functionality it claims to have. This is roughly equivalent to blanking out your street address when showing your driver's license to the police, but showing your full legal name.
				<p>As of Atmosphere 0.12.0, a virtual PRODINFO blanking feature is included, which is safer than Incognito as the relevant data is redirected not deleted, but this method of protection is still not a viable replacement for 90DNS.
				<p>(Thanks to Discord user noirscape#6666 on the Nintendo Homebrew Discord server for the explanation of why Incognito is bad, also denn and meme)
				</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="e9">
				<h2 class="mb-0">
				<button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
				<b>[9]</b> My console is banned. How can I unban it?
				</button>
				</h2>
				</div>
				<div id="collapseNine" class="collapse" aria-labelledby="e9" data-parent="#accordionOperations">
				<div class="card-body">
				In any meaningful way, you can’t. Sorry.
				</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="e10">
				<h2 class="mb-0">
				<button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
				<b>[10]</b> I performed a bannable action on my offline sysNAND but now I want to go online. What do I do?
				</button>
				</h2>
				</div>
				<div id="collapseTen" class="collapse" aria-labelledby="e10" data-parent="#accordionOperations">
				<div class="card-body">
				Restore a “clean” NAND backup of the system from before you performed the bannable action. You can find instructions for doing that <a href="https://nh-server.github.io/switch-guide/extras/nandrestore/">here</a>. 
				<p>Using the Switch’s stock “factory format” feature does not erase telemetry logs and will not protect you from a ban.
				</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="e11">
				<h2 class="mb-0">
				<button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
				<b>[11]</b> What if I lost my NAND backup or never made one?
				</button>
				</h2>
				</div>
				<div id="collapseEleven" class="collapse" aria-labelledby="e11" data-parent="#accordionOperations">
				<div class="card-body">
				You messed up. Make sure to make a NAND backup for the future. 
				<p>There is <a href="https://suchmememanyskill.github.io/guides/unbrick/#system-wipe">a method for manually resetting the NAND’s data</a>, but it is not as reliable as restoring a NAND backup and should not be your preferred option.
				</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="e12">
				<h2 class="mb-0">
				<button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
				<b>[12]</b> So if I follow the advice here I’m guaranteed not to get banned?
				</button>
				</h2>
				</div>
				<div id="collapseTwelve" class="collapse" aria-labelledby="e12" data-parent="#accordionOperations">
				<div class="card-body">
				Nothing in life is guaranteed. The information here is based on quite a lot of experience, but Nintendo can always decide to change what actions they consider bannable or add new ways of gathering telemetry. Part of hacking your console means accepting a little risk and taking responsibility for your decisions.
			</div>
			<!-- last card div -->
		</div>
		</div>
    <!-- /#container -->

  </div>
  <!-- /#wrapper -->
<?php
include "footer.php";
?>
  <!-- BLANK CARD FOR SUBMITTING ADDITIONAL ELEMENTS
		Do not forget to replace the relevant elements based on the prior element and ordering.
		These are e1 and collapseOne along with the title card number.
		There are six of them that must be changed. I have left them as a placeholder here.
		Please ensure you coordinate with other contributors that you do not submit a colliding or overwriting ID.
				<div class="card">
				<div class="card-header" id="e1">
				<h2 class="mb-0">
				<button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
				<b>[X]</b> TITLE
				</button>
				</h2>
				</div>
				<div id="collapseOne" class="collapse" aria-labelledby="e1" data-parent="#accordionOperations">
				<div class="card-body">
				CONTENT
				
				</div> -->