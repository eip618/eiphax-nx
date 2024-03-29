<?php
$title = "FTP Guide";
$desc = "How to use FTP on your Switch without getting a virus";
include "header.php";
?>
<?php
include "nav.php";
?>
        <div class="container">
        <div class="content">
            <center><h1></h1></center>
<center><h1>A guide to using FTP for the Switch</h1></center>
</center><hr />
<p>This guide will teach you how to use FTP or file transfer protocol. The benefits of FTP being that you can move files wirelessly between your pc and Switch. This will not work with Airplane mode, but will work with 90DNS. Guide written by kriegxd on Discord.</p>
<p>Requirements: A FTP server on your Switch, and an FTP client on your computer.</p>
<p>For PC I use and recommend <a href="https://winscp.net/eng/downloads.php">WinSCP.</a> If you are on OS X or GNU/Linux I recommend <a href="https://filezilla-project.org/download.php?type=client">Filezilla.</a> For Switch we are going to use <a href="https://github.com/mtheall/ftpd/releases/latest">FTPD</a>. There are two versions of FTPD, classic and latest. Classic uses a console while the new release has a GUI. For this guide, we will use classic. Place ftpd-classic.nro in the Switch folder on SD root.
<h3>Setting up FTPD.</h3>
<ol>
<li>Install FTPD on your Switch.</li>
<li>Open it</li>
<li>Look at the top screen, next to your FTPD version. What is highlighted in blue is your IP address, what is highlighted in red is your port.</li>
<img src="https://raw.githubusercontent.com/kriegisrei/kriegisrei.github.io/master/images/FTP/ftpd.png" alt="" width="388" height="28" />
<li>Keep FTPD open for the next steps.</li>
</ol>
<h3>Setting up WinSCP</h3>
<ol>
<li>Run the WinSCP installer and wait till it is done downloading.</li>
<li>Once done, open WinSCP. It should automatically provide you a login window.
<p><img src="https://raw.githubusercontent.com/kriegisrei/kriegisrei.github.io/master/images/FTP/ftp2.png" alt="" width="353" height="248" /></p>
</li>
<li>Set file protocol from SFTP to FTP and enter your host name and port number.</li>
<li>Make sure "Anonymous login" is checked.</li>
<li>Your setup should now look like this.
<p><img src="https://raw.githubusercontent.com/kriegisrei/kriegisrei.github.io/master/images/FTP/ftp1.png" alt="" width="341" height="210" /></p>
</li>
<li>Press Login</li>
<li>If you do not want to input your IP address and port every time, you can save the config by pressing the save button.</li>
<li>If successful, you will be able to move files wirelessly between your Switch and computer!</li>
</ol>
<p><img src="https://raw.githubusercontent.com/kriegisrei/kriegisrei.github.io/master/images/FTP/ftp3.png" alt="" width="500" height="268" /></p>

<h2> Troubleshooting </h2>
<p>Troubleshooting FTPD should be fairly simple. If you have trouble connecting, first check for mistakes entering your port/ip address. </p>
<p>Your Switch and PC should be on the same network. FTPD sometimes refuses to work if your PC is on ethernet, while your Switch is connected wirelessly.</p>
<p>If you are having trouble staying connected, make sure your internet connection is stable. If for some reason WinSCP doesn't work for you, you can try another FTP client such as FileZilla.</p>
		
<?php
include "footer.php";
?>
