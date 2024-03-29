<?php
$title = "The NX Nutshell";
$desc = "A short summary of current tools and methods for Switch CFW";
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
            <center><h1>The State of Things</h1></center>
            <hr>
			<p>Click an item to open it. If you're confused about anything here, or need additional help, see the <a href="https://discord.gg/dQgV6ZG" target="_blank">Nintendo Homebrew discord</a>.
        <p>
	<div id="page-content-wrapper">
		<div class="container-fluid fade show active" id="operations">
		<div class="accordion" id="accordionOperations">
			<div class="card">
				<div class="card-header" id="e1">
				<h2 class="mb-0">
				<button class="btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				<b>[1]</b> Fantastic Hacks and How to Understand Them
				</button>
				</h2>
				</div>
				<div id="collapseOne" class="collapse" aria-labelledby="e1" data-parent="#accordionOperations">
				<div class="card-body">
				At this point, the only accessible homebrew on Switch is actually via CFW (custom firmware). CFW allows total system access, including, for example, installing and using unsigned packages and payloads. Homebrew (aka userland-only access), on the other hand, is weaker and usually only useful for things like save editing and has much less system access.
				<p>Currently, there is <b>no widely supported software-based exploit</b> for the Switch on any firmware version <b>above 4.1.0</b>. Software-based access to CFW is in progress for 5.0.0 to 7.0.1, but not finished yet. Notably, there is a hardware exploit that can get CFW. However, only a Switch unit produced during or before July 2018 is likely to be able to access it. You can check your serial number to see if you're vulnerable to the exploit. For a how-to on that and the rest of the process, see the Nintendo Homebrew server's <a href="https://nh-server.github.io/switch-guide" target="_blank">Switch guide</a>.
				<h3>What's a hardware exploit?</h3>
				It's some kind of flaw or bug in the hardware that can be taken advantage of. The exploit you are taking advantage of is a bug in the Switch's NVIDIA Tegra processor (yes, you read that right). The Nintendo Switch has a hidden boot mode called RCM (Recovery Mode). This allows Nintendo to repair the device's software without having to take it apart. It's usually entered by using a physical piece of hardware called a "jig", which is a small piece of plastic with wire in it, but there are other methods (which won't be discussed here due to safety concerns).
				<p>There's also Maintenance Mode, which would be more often accessed by end-users. RCM and Maintenance Mode are different. See the Switch Guide linked above for more information about what RCM is and how to get into it.
				<p>Normally, only Nintendo can use RCM to do anything. However, this recovery mode has a bug in it (on systems with the vulnerability) which allows us to run our own code (called a "payload", which is a fancy term for a data package) and thus boot CFW (custom firmware), recovery tools, or even other operating systems like Linux. The most common payload users run is Hekate.
				</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="e2">
				<h2 class="mb-0">
				<button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				<b>[2]</b> What's Hekate?
				</button>
				</h2>
				</div>
				<div id="collapseTwo" class="collapse" aria-labelledby="e2" data-parent="#accordionOperations">
				<div class="card-body">
				Hekate is a bootloader that can load other payloads. Hekate runs before any of the other Switch firmware, so can do things like manage your Switch's NAND (internal system drive) and make backups from and restores to it, access your secret console keys (necessary for further use and console restoration) and force the Switch to load its own native firmware with the desired additions. These additions are usually a CFW, which for most purposes should be Atmosphere.
				</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="e3">
				<h2 class="mb-0">
				<button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				<b>[3]</b> What's Atmosphere?
				</button>
				</h2>
				</div>
				<div id="collapseThree" class="collapse" aria-labelledby="e3" data-parent="#accordionOperations">
				<div class="card-body">
				Atmosphere is currently, arguably, the most in development CFW for the Switch. There are others, notably ReiNX and SX OS, however Atmosphere is usually recommended. The reasons for this are violently debated across the Switch scene. Lots of users prefer SX OS because it's easier and supports piracy out-of-the-box, but SX steals most of their code from Atmos, and then makes you pay for it (Atmos is free, so this is a crappy practice). Others prefer ReiNX for similar reasons, mostly including piracy, but it copies Atmos code and claims it doesn't, and then takes six weeks to directly copy Atmos' latest patches and fixes (additionally, see <a href="https://github.com/Reisyukaku/NX_Sysmodules/commit/ec72f51531165f78d8d567abd6287a49d91e2800" target="_blank">this</a> and <a href="img/rei2.png" target="_blank">this</a>).
				<p>Regardless, Atmos does support the addition of sigpatches, which is what enables installing unsigned packages to the home menu (and piracy), but requires additional configuration to make it work. So, in essence, there's no real reason to use anything but Atmos. Also, Atmos has implemented emuNAND/emuMMC functionality, which makes using CFW on the Switch much safer. For additional support with emuMMC/Atmosphere setup, see the <a href="https://discord.gg/dQgV6ZG" target="_blank">Nintendo Homebrew discord</a>.
				</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="e4">
				<h2 class="mb-0">
				<button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
				<b>[4]</b> How safe is it now?
				</button>
				</h2>
				</div>
				<div id="collapseFour" class="collapse" aria-labelledby="e4" data-parent="#accordionOperations">
				<div class="card-body">
				At the moment, we <b>speculate</b> that using CFW functions on an emuNAND/emuMMC is safe, <i>if you use dns-mitm/90dns or never connect to the Internet</i> on your emuMMC. dns-mitm is a functionality that comes built in to Atmosphere and is set up automatically if you use the NH Switch Guide linked earlier. dns-mitm and 90dns are used to block connections to Nintendo servers, which allows you to use your console without the console sending telemetry to Nintendo. It's recommended that dns-mitm be used, because it applies automatically to all connections whereas 90dns has to be set individually per connection.
				<p>Additionally, we <b>speculate</b> that using low-impact functions on sysNAND, such as running the homebrew launcher through the album, is safe. However, your experience may vary. If you need additional advice about the information here, see the <a href="https://discord.gg/dQgV6ZG" target="_blank">Nintendo Homebrew discord</a>.
				<p>The problem with CFW is that the Switch has an awful lot of telemetry and logging, which it sends back to Nintendo, and Nintendo seems to have implemented an awful lot of systems set up to track hacked consoles. While in CFW, you should use airplane mode/90DNS to redirect the sending of these logs, but that's not a guaranteed solution, as the console may store some logs and send them the next time it is able. Atmosphere has gone to efforts to redirect and disable the logging modules, but nobody is quite sure if that's effective, and we don't know how much gets through as we have no way to monitor it. The safer option at this time is using an emuNAND/emuMMC, which functions like a "second Switch" inside your Switch.
				<p>You can find a full explanation of how bans work on Switch (and how to avoid them) <a href="./ban">here</a>.
				</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="e5">
				<h2 class="mb-0">
				<button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
				<b>[5]</b> What's an emuNAND?
				</button>
				</h2>
				</div>
				<div id="collapseFive" class="collapse" aria-labelledby="e5" data-parent="#accordionOperations">
				<div class="card-body">
				An emuNAND/emuMMC is sort of like a "second Switch" inside your Switch, which lives on your SD card and runs only when you tell it to (by using Hekate to load it). As long as you keep your emuNAND/emuMMC offline (or use 90dns on it), Nintendo will never know you are using one, because no information gets sent to them.
				<p>This means that you can safely use hacks on your emuNAND/emuMMC (so long as you keep it offline), and use your sysNAND for online play or normal usage. By doing this, you can get the best of both worlds: hacks on your emuNAND, and online play on your sysNAND, without having to buy two Switches for it.
				</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="e6">
				<h2 class="mb-0">
				<button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
				<b>[6]</b> What's next?
				</button>
				</h2>
				</div>
				<div id="collapseSix" class="collapse" aria-labelledby="e6" data-parent="#accordionOperations">
				<div class="card-body">
				In the future, a software exploit called D&eacute;j&agrave; Vu should be released, which will enable some form of hacks on consoles on software versions 7.0.1 and below. At this time, we believe newer "red box" Mariko Switches are unhackable, along with Switch Lites. We'll have to wait and see what happens next.
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