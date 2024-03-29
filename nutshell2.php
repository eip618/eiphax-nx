<?php
$title = "Nutshell (shorter version)";
$desc = "An EVEN SHORTER summary of Switch hacks and tools";
include "header.php";
?>
<?php
include "nav.php";
?>
<script>
document.addEventListener('DOMContentLoaded', function() {
document.querySelectorAll('.btn-toggle-visibility').forEach(function(currentToggleVisibilityButton) {
  currentToggleVisibilityButton.addEventListener('click', function () {
    document.querySelector(currentToggleVisibilityButton.getAttribute('data-target')).classList.toggle('hidden');
  });
 });
});
</script>
        <div class="container">
        <div class="content">
            <center><h1>Information</h1></center>
            <hr>
        <p>Click a button to open or close the content for that section.
		<p><button class="btn-toggle-visibility" data-target="#sec1"><h3>An explanation of Custom Firmware</h3></button>
		<div class="box hidden" id="sec1">
		<p>Custom Firmware can be thought of as full system access to your device's software and firmware. It allows you to do or change anything that you want to.
		<p>The Switch's options for Custom Firmware are limited at the moment due to a lack of exploits. Nintendo have been very careful to make their device as secure as possible.
		</div>
		<p><button class="btn-toggle-visibility" data-target="#sec2"><h3>An explanation of Homebrew</h3></button>
		<div class="box hidden" id="sec2">
		<p>Homebrew can be thought of as limited system access to your device's software and firmware. It allows you to do things with your system that would not normally be possible.
		<p>These things include save management, emulation and filesystem access, for example.
		<p>On the Switch, at this point, most of the tools used are homebrew-based, but generally must be run with custom firmware access.
		<p>Homebrew can usually be used while on custom firmware, and it will have a greater level of access if it is. However, having homebrew access does not always mean custom firmware is present.
		</div>
		<p><button class="btn-toggle-visibility" data-target="#sec3"><h3>Hacking a Switch device</h3></button>
		<div class="box hidden" id="sec3">
		<p>If you want to hack your Switch, the easiest method relies on your unit being vulnerable to a "hardware exploit", which is a flaw with the physical hardware inside your console.
		<p>Only a Switch unit produced around or before July of 2018 will have this flaw. If you want to check whether your console is vulnerable, consult the Nintendo Homebrew server's <a href="					https://nh-server.github.io/switch-guide" target="_blank">Switch guide</a>.
		<p>The only way to hack a Switch that is not vulnerable to the hardware exploit is to have acquired it on a low firmware version (1.0.0 - 4.0.1) and use one of the few existing software exploits. However, a unit that comes with firmware this low will also likely be vulnerable to the hardware exploit.
		</div>
		<p><button class="btn-toggle-visibility" data-target="#sec4"><h3>Why Atmosphere?</h3></button>
		<div class="box hidden" id="sec4">
		<p>Atmosphere is recommended because it is currently in development, includes many safety features to avoid detection by Nintendo, and is likely to receive consistent and timely updates when Nintendo releases new firmware versions.
		<p>ReiNX is a "fork", or copy of Atmosphere. ReiNX is not recommended because it is frequently outdated, and the only notable features it includes are easily available on Atmosphere with a small amount of user configuration.
		<p>SX OS is another Custom Firmware for the Switch, however this is also not recommended as it uses a large amount of Atmosphere code, but charges money for use, and falls largely into the same category as ReiNX. Additionally, with recent updates, SX OS has decided to include Nintendo encryption keys in their software openly, which makes it illegal to own.
		<p>Given these factors, there is no reason not to use Atmosphere.
		</div>
		<p><button class="btn-toggle-visibility" data-target="#sec5"><h3>Risks</h3></button>
		<div class="box hidden" id="sec5">
		<p>There is currently a slight risk of getting banned due to hacking your Switch console. At this time, there are safety measures recommended in the Switch guide linked above, notably emuNAND/emuMMC and 90dns. Instructions for using these measures are in the NH Switch guide linked above.
		<p>Broadly speaking, it is not advised to install anything to the home menu, connect to Nintendo online features while in Custom Firmware, or modify your game data in an online game.
		<p>However, at this time it is believed that using common functions such as save managing, some save editing, theming and emulation are "safe", to a point.
		<p>Your results may vary.
		</div>
<?php
include "footer.php";
?>