<?php  //include_once("scripts/checkuserlog.php");
// Force script errors and warnings to show on page in case php.ini file is set to not display them
//error_reporting(E_ALL);
//ini_set('display_errors', '1');
//-----------------------------------------------------------------------------------------------------------------------------------
// Initialize some vars
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');
include_once "scripts/connect_to_mysql.php";
$dyn_www = $_SERVER['HTTP_HOST'];
$logOptions = '';
if (!isset($_SESSION['idx'])) {
  if (!isset($_COOKIE['idCookie'])) {
     $logOptions =  '<div id="user_cred">
		Hi Friend <a id="popup_link_4" href="#">Login</a> |<a href="register.php">Signup</a>
            </div>

            <div id="popup_4" class="popup">
                <p style="float:right;"><a class="popup_closebox" href="#">[X]</a></p>

                <table width="600" align="center" cellpadding="5">
                    <form action="login.php" method="post" enctype="multipart/form-data" name="signinform" id="signinform">
                        <tr>
                            <td width="23%"><font size="+2"></font></td>
                            <td width="77%"><font color="#FF0000"><?php print "$errorMsg"; ?></font></td>
                        </tr>
                        <tr>
                            <td><strong>Email:</strong></td>
                            <td><input name="email" type="text" id="email" style="width:60%;" /></td>
                        </tr>
                        <tr>
                            <td><strong>Password:</strong></td>
                            <td><input name="pass" type="password" id="pass" maxlength="24" style="width:60%;"/></td>
                        </tr>
                        <tr>
                            <td align="right">&nbsp;</td>
                            <td><input name="remember" type="checkbox" id="remember" value="yes" checked="checked" />
                                Remember Me</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><input name="myButton" type="submit" id="myButton" value="Sign In" /></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>

                        <tr>
                            <td colspan="2">Need an Account? <a href="register.php">Click Here</a><br />        <br /></td>
                        </tr>

                    </form>
                </table>

                <p><a class="popup_closebox" href="#">Close</a></p>
            </div>
            <script type="text/javascript">
                //<![CDATA[
                new Popup("popup_4","popup_link_4",{modal:true,duration:1})
                //]]>
            </script>

            <ul id="menu">

                <li><a href="index.php"><img src="images/but1.gif" alt="" width="64" height="42" /></a></li>
                <li><p><a id="popup_link_6" href="#"><img src="images/but2.gif" alt="" width="108" height="42" /></a></p></li>
                <li><a href="forum.php"><img src="images/but3.gif" alt="" width="93" height="42" /></a></li>
                <li><a href="schedule.php"><img src="images/but4.gif" alt="" width="101" height="42" /></a></li>
                <li><a href="register.php"><img src="images/but5.gif" alt="" width="86" height="42" /></a></li>
                <li><a href="contact.php"><img src="images/but6.gif" alt="" width="102" height="42" /></a></li>
            </ul>

        </div>



        <div id="popup_6" class="popup">
                            <table>
                                <tr>
                                    <td style="padding:10px 10px 10px 10px;">
                                        <h2>RoboTics</h2>
                                        <p><a href="robotics.php">Wreselmania</a></p>
                                        <p><a href="robopolo.php">RoboPolo</a></p>
                                        <p><a href="robolane.php">RoboLane</a></p>
                                    </td>
                                    <td style="padding:10px 10px 10px 10px;">
                                        <h2>Quiz</h2>
                                        <p><a href="quiz.php">Quizzter</a></p>
                                        <p><a href=""></a></p>
                                        <p><a href=""></a></p>
                                    </td>
                                    <td style="padding:10px 10px 10px 10px;">
                                         <h2>Presentations</h2>
                                        <p><a href="paperpresentation.php">Papyrus</a></p>
                                        <p><a href=""></a></p>
                                        <p><a href=""></a></p>
                                    </td>
                                    <td style="padding:10px 10px 10px 10px;">
                                        <h2>Gammania</h2>
                                        <p><a href="games.php">Need for Speed</a></p>
                                        <p><a href="counterstrike.php">Counter Strike</a></p>
                                        <p><a href="callofduty.php">Call of Duty</a></p>
                                    </td>
                                </tr>
                            </table>



                        </div>

        <script type="text/javascript">
            //<![CDATA[
            new Popup("popup_6","popup_link_6",{position:"below",trigger:"click"})
            //]]>
        </script>

        <div id="content">
            <div id="posts">

                

';
   }
}


if (isset($_SESSION['idx'])) {

	$decryptedID = base64_decode($_SESSION['idx']);
	$id_array = explode("p3h9xfn8sq03hs2234", $decryptedID);
	$logOptions_id = $id_array[1];
    // $logOptions_id = $_SESSION['idx'];
    $logOptions_firstname = $_SESSION['firstname'];
    $logOptions_firstname = substr('' . $logOptions_firstname . '', 0, 15); // cut user name down in length if too long
    // Ready the output for this logged in user
     $logOptions = '<div id="user_cred">
		Hi'.$logOptions_firstname.'! <!--a id="popup_link_4" href="#">Login</a --> |<a href="logout.php">Logout</a>
            </div>

            <div id="popup_4" class="popup">
                <p style="float:right;"><a class="popup_closebox" href="#">[X]</a></p>

                <table width="600" align="center" cellpadding="5">
                    <form action="login.php" method="post" enctype="multipart/form-data" name="signinform" id="signinform">
                        <tr>
                            <td width="23%"><font size="+2"></font></td>
                            <td width="77%"><font color="#FF0000"><?php print "$errorMsg"; ?></font></td>
                        </tr>
                        <tr>
                            <td><strong>Email:</strong></td>
                            <td><input name="email" type="text" id="email" style="width:60%;" /></td>
                        </tr>
                        <tr>
                            <td><strong>Password:</strong></td>
                            <td><input name="pass" type="password" id="pass" maxlength="24" style="width:60%;"/></td>
                        </tr>
                        <tr>
                            <td align="right">&nbsp;</td>
                            <td><input name="remember" type="checkbox" id="remember" value="yes" checked="checked" />
                                Remember Me</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><input name="myButton" type="submit" id="myButton" value="Sign In" /></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>

                        <tr>
                            <td colspan="2">Need an Account? <a href="register.php">Click Here</a><br />        <br /></td>
                        </tr>

                    </form>
                </table>

                <p><a class="popup_closebox" href="#">Close</a></p>
            </div>
            <script type="text/javascript">
                //<![CDATA[
                new Popup("popup_4","popup_link_4",{modal:true,duration:1})
                //]]>
            </script>

           <ul id="menu">

                <li><a href="home.php"><img src="images/but1.gif" alt="" width="64" height="42" /></a></li>
                <li><p><a id="popup_link_6" href="#"><img src="images/but2.gif" alt="" width="108" height="42" /></a></p></li>
                <li><a href=""><img src="images/but3.gif" alt="" width="93" height="42" /></a></li>
                <li><a href="ischedule.php"><img src="images/but4.gif" alt="" width="101" height="42" /></a></li>
                <li><a href="roadmap.php"><img src="images/but55.gif" alt="" width="86" height="42" /></a></li>
                <li><a href="icontact.php"><img src="images/but6.gif" alt="" width="102" height="42" /></a></li>
            </ul>

        </div>



         <div id="popup_6" class="popup">
                           <table>
                                <tr>
                                    <td style="padding:10px 10px 10px 10px;">
                                        <h2>RoboTics</h2>
                                        <p><a href="irobotics.php">Wreselmania</a></p>
                                        <p><a href="irobopolo.php">RoboPolo</a></p>
                                        <p><a href="irobolane.php">RoboLane</a></p>
                                    </td>
                                    <td style="padding:10px 10px 10px 10px;">
                                        <h2>Quiz</h2>
                                        <p><a href="iquiz.php">Quizzter</a></p>
                                        <p><a href=""></a></p>
                                        <p><a href=""></a></p>
                                    </td>
                                    <td style="padding:10px 10px 10px 10px;">
                                         <h2>Presentations</h2>
                                        <p><a href="ipaperpresentation.php">Papyrus</a></p>
                                        <p><a href=""></a></p>
                                        <p><a href=""></a></p>
                                    </td>
                                    <td style="padding:10px 10px 10px 10px;">
                                        <h2>Gammania</h2>
                                        <p><a href="igames.php">Need for Speed</a></p>
                                        <p><a href="icounterstrike.php">Counter Strike</a></p>
                                        <p><a href="icallofduty.php">Call of Duty</a></p>
                                    </td>
                                </tr>
                            </table>

                        </div>

        <script type="text/javascript">
            //<![CDATA[
            new Popup("popup_6","popup_link_6",{position:"below",trigger:"click"})
            //]]>
        </script>

        <div id="content">
            <div id="posts">

               
';

} else if (isset($_COOKIE['idCookie'])) {
  $decryptedID = base64_decode($_COOKIE['idCookie']);
	$id_array = explode("nm2c0c4y3dn3727553", $decryptedID);
	$userID = $id_array[1];
	//$userID = $_COOKIE['idCookie'];
	$userPass = $_COOKIE['passCookie'];
	// Get their user first name to set into session var
    $sql_uname = mysql_query("SELECT firstname FROM member WHERE id='$userID' AND password='$userPass' LIMIT 1");
	$numRows = mysql_num_rows($sql_uname);
	if ($numRows == 0) {
		echo 'Something appears wrong with your stored log in credentials. <a href="login.php">Log in again here please</a>';
		exit();
	}
    while($row = mysql_fetch_array($sql_uname)){
	    $firstName = $row["firstname"];
	}
    session_register('id'); // register the session
    $_SESSION['id'] = $userID;
    session_register('idx');
	$_SESSION['idx'] = base64_encode("g4p3h9xfn8sq03hs2234$userID");
    session_register('firstname');
    $_SESSION['firstname'] = $firstName;

    $logOptions_id = $userID;
    $logOptions_uname = $firstName;
    $logOptions_uname = substr('' . $logOptions_uname . '', 0, 15);
//mysql_query("UPDATE myMembers SET last_log_date=now() WHERE id='$logOptions_id'");
     // Ready the output for this logged in user
     $logOptions = '<div id="user_cred">
		Hi'.$logOptions_uname.'! <!--a id="popup_link_4" href="#">Login</a --> |<a href="logout.php">Logout</a>
            </div>

            <div id="popup_4" class="popup">
                <p style="float:right;"><a class="popup_closebox" href="#">[X]</a></p>

                <table width="600" align="center" cellpadding="5">
                    <form action="login.php" method="post" enctype="multipart/form-data" name="signinform" id="signinform">
                        <tr>
                            <td width="23%"><font size="+2"></font></td>
                            <td width="77%"><font color="#FF0000"><?php print "$errorMsg"; ?></font></td>
                        </tr>
                        <tr>
                            <td><strong>Email:</strong></td>
                            <td><input name="email" type="text" id="email" style="width:60%;" /></td>
                        </tr>
                        <tr>
                            <td><strong>Password:</strong></td>
                            <td><input name="pass" type="password" id="pass" maxlength="24" style="width:60%;"/></td>
                        </tr>
                        <tr>
                            <td align="right">&nbsp;</td>
                            <td><input name="remember" type="checkbox" id="remember" value="yes" checked="checked" />
                                Remember Me</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><input name="myButton" type="submit" id="myButton" value="Sign In" /></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>

                        <tr>
                            <td colspan="2">Need an Account? <a href="register.php">Click Here</a><br />        <br /></td>
                        </tr>

                    </form>
                </table>

                <p><a class="popup_closebox" href="#">Close</a></p>
            </div>
            <script type="text/javascript">
                //<![CDATA[
                new Popup("popup_4","popup_link_4",{modal:true,duration:1})
                //]]>
            </script>

           <ul id="menu">

                <li><a href="home.php"><img src="images/but1.gif" alt="" width="64" height="42" /></a></li>
                <li><p><a id="popup_link_6" href="#"><img src="images/but2.gif" alt="" width="108" height="42" /></a></p></li>
                <li><a href=""><img src="images/but3.gif" alt="" width="93" height="42" /></a></li>
                <li><a href="ischedule.php"><img src="images/but4.gif" alt="" width="101" height="42" /></a></li>
                <li><a href="roadmap.php"><img src="images/but55.gif" alt="" width="86" height="42" /></a></li>
                <li><a href="icontact.php"><img src="images/but6.gif" alt="" width="102" height="42" /></a></li>
            </ul>

        </div>



         <div id="popup_6" class="popup">
                           <table>
                                <tr>
                                    <td style="padding:10px 10px 10px 10px;">
                                        <h2>RoboTics</h2>
                                        <p><a href="irobotics.php">Wreselmania</a></p>
                                        <p><a href="irobopolo.php">RoboPolo</a></p>
                                        <p><a href="irobolane.php">RoboLane</a></p>
                                    </td>
                                    <td style="padding:10px 10px 10px 10px;">
                                        <h2>Quiz</h2>
                                        <p><a href="iquiz.php">Quizzter</a></p>
                                        <p><a href=""></a></p>
                                        <p><a href=""></a></p>
                                    </td>
                                    <td style="padding:10px 10px 10px 10px;">
                                         <h2>Presentations</h2>
                                        <p><a href="ipaperpresentation.php">Papyrus</a></p>
                                        <p><a href=""></a></p>
                                        <p><a href=""></a></p>
                                    </td>
                                    <td style="padding:10px 10px 10px 10px;">
                                        <h2>Gammania</h2>
                                        <p><a href="igames.php">Need for Speed</a></p>
                                        <p><a href="icounterstrike.php">Counter Strike</a></p>
                                        <p><a href="icallofduty.php">Call of Duty</a></p>
                                    </td>
                                </tr>
                            </table>
                        </div>

        <script type="text/javascript">
            //<![CDATA[
            new Popup("popup_6","popup_link_6",{position:"below",trigger:"click"})
            //]]>
        </script>

        <div id="content">
            <div id="posts">

               
';
}







$username='';
$errorMsg = '';
$email = '';
$pass = '';
$remember = '';
if (isset($_POST['email'])) {

	$email = $_POST['email'];
	$pass = $_POST['pass'];
	if (isset($_POST['remember'])) {
		$remember = $_POST['remember'];
	}
	$email = stripslashes($email);
	$pass = stripslashes($pass);
	$email = strip_tags($email);
	$pass = strip_tags($pass);

	// error handling conditional checks go here
	if ((!$email) || (!$pass)) {

		$errorMsg = 'Please fill in both fields';

	} else { // Error handling is complete so process the info if no errors
		include 'scripts/connect_to_mysql.php'; // Connect to the database
		$email = mysql_real_escape_string($email); // After we connect, we secure the string before adding to query
	    //$pass = mysql_real_escape_string($pass); // After we connect, we secure the string before adding to query
		$pass = md5($pass); // Add MD5 Hash to the password variable they supplied after filtering it
		// Make the SQL query
        $sql = mysql_query("SELECT * FROM member WHERE email='$email' AND password='$pass'");
		$login_check = mysql_num_rows($sql);
        // If login check number is greater than 0 (meaning they do exist and are activated)
		if($login_check > 0){
    			while($row = mysql_fetch_array($sql)){

					// Pleae note: Adam removed all of the session_register() functions cuz they were deprecated and
					// he made the scripts to where they operate universally the same on all modern PHP versions(PHP 4.0  thru 5.3+)
					// Create session var for their raw id

					$id = $row["id"];// print "sesssion user id".$id;
					$_SESSION['id'] = $id;
                                         //print "sesssion user id".$_SESSION['id'];
					// Create the idx session var
					$_SESSION['idx'] = base64_encode("g4p3h9xfn8sq03hs2234$id");
                    // Create session var for their username
					$username = $row["firstname"];
					$_SESSION['firstname'] = $username;

					//mysql_query("UPDATE myMembers SET last_log_date=now() WHERE id='$id' LIMIT 1");

    			} // close while

    			// Remember Me Section
    			if($remember == "yes"){
                    $encryptedID = base64_encode("g4enm2c0c4y3dn37b27553$id");
    			    setcookie("idCookie", $encryptedID, time()+60*60*24*100, "/"); // Cookie set to expire in about 30 days
			        setcookie("passCookie", $pass, time()+60*60*24*100, "/"); // Cookie set to expire in about 30 days
    			}
    			// All good they are logged in, send them to homepage then exit script
    			header("location: home.php");
    			exit();

		} else { // Run this code if login_check is equal to 0 meaning they do not exist
		    $errorMsg = "Incorrect login data, please try again";
		}


    } // Close else after error checks

} //Close if (isset ($_POST['uname'])){

?>
<?php $contenthead='
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <title>Impulse-2011 ,Technical Festival of Rungta College  of Engineering and Technology,Bhilai(C.G.)</title>
        <META NAME="Keywords" CONTENT="Impulse-2011, Technical Festival,Rungta College of Engineering and Technology,Bhilai(C.G.),RCET,Bhilai(C.G.)">
        <META NAME="Description" CONTENT="Impulse-2011 ,Technical Festival,Rungta College of Engineering and Technology,Bhilai(C.G.)">
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script src="script/prototype.js" type="text/javascript"></script>
        <script src="script/effects.js" type="text/javascript"></script>
        <script src="script/dragdrop.js" type="text/javascript"></script>
        <script src="script/popup.js" type="text/javascript"></script>
        
        
    </head>

    <body>





        <div id="header">
            <span class="logo"><h2>13th to 14th March</h2></span>																																												<div class="inner_copy"><a href="http://www.impulse2011.in/"></a><a href="http://www.impulse2011.in/">free CSS templates</a></div>
            <div id="fb_like">
                <a href="http://www.twitter.com/ea_impulse2011"><img src="http://twitter-badges.s3.amazonaws.com/t_logo-c.png" alt="Follow ea_impulse2011 on Twitter"/></a>
                <br> <br>
                <iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.impulse2011.in&amp;layout=standard&amp;show_faces=true&amp;width=450&amp;action=like&amp;colorscheme=light&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe>
            </div>


'; ?>


<?php print"$contenthead";?>
<?php print"$logOptions"; ?>

<div class="post">
                    <h2>Impulse Login</h2>
                    <div><span class="date">.....</span><span class="categories">Impulse-2011</span></div>
                    <div class="description">
                       <table width="600" align="center" cellpadding="5">
                                    <form action="login.php" method="post" enctype="multipart/form-data" name="signinform" id="signinform">
                                        <tr>
                                            <td width="23%"><font size="+2"></font></td>
                                            <td width="77%"><font color="#FF0000"><?php print "$errorMsg"; ?></font></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Email:</strong></td>
                                            <td><input name="email" type="text" id="email" style="width:60%;" /></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Password:</strong></td>
                                            <td><input name="pass" type="password" id="pass" maxlength="24" style="width:60%;"/></td>
                                        </tr>
                                        <tr>
                                            <td align="right">&nbsp;</td>
                                            <td><input name="remember" type="checkbox" id="remember" value="yes" checked="checked" />
                                            Remember Me</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td><input name="myButton" type="submit" id="myButton" value="Sign In" /></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        
                                        <tr>
                                            <td colspan="2">Need an Account? <a href="register.php">Click Here</a><br />        <br /></td>
                                        </tr>

                                    </form>
                                </table>
                </div>

</div>
</div>

            <div id="sidebar">
                <div id="search">
                    <table>
                        <tr>
                            <td>
                                &nbsp;	&nbsp;	&nbsp;
                            </td>
                            <td>
                                <!-- Facebook Badge START --><a href="http://www.facebook.com/pages/Impulse-2011/196829293678028" target="_TOP" style="font-family: &quot;lucida grande&quot;,tahoma,verdana,arial,sans-serif; font-size: 11px; font-variant: normal; font-style: normal; font-weight: normal; color: #3B5998; text-decoration: none;" title=""><img src="images/fblogo.png" /></a>                    &nbsp;&nbsp;<a href="http://www.twitter.com/ea_impulse2011"><img src="images/twitterlogo.png" /></a>&nbsp;&nbsp;
                            </td>
                            <td>
                                <div align="center"><a href="http://www.amazingcounter.com"><img border="0" src="http://cb.amazingcounters.com/counter.php?i=2950134&c=8850715" alt="home page tracking"></a><br>
                                    </td>
                                    </tr>
                                    </table>

                                </div>
                                <div class="list">

           <script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 4,
  interval: 6000,
  width: 250,
  height: 300,
  theme: {
    shell: {
      background: '#333333',
      color: '#ffffff'
    },
    tweets: {
      background: '#000000',
      color: '#ffffff',
      links: '#4aed05'
    }
  },
  features: {
    scrollbar: false,
    loop: false,
    live: false,
    hashtags: true,
    timestamp: true,
    avatars: false,
    behavior: 'all'
  }
}).render().setUser('ea_impulse2011').start();
</script>

<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FImpulse-2011%2F196829293678028&amp;width=280&amp;colorscheme=light&amp;show_faces=true&amp;stream=true&amp;header=true&amp;height=427" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:427px;" allowTransparency="true"></iframe>



                                </div>
                                </div>
                                </div>
                                <div id="footer">
                                    <p>Copyright &copy;. All rights reserved. Design by <a href="http://www.impulse2011.in" target="_blank" title="">Webmasters: Narendra Soni, Rishabh Tripathi</a></p>																																																																		<div class="inner_copy"><a href="http://www.beautifullife.info/">beautiful</a><a href="http://www.grungemagazine.com/">grunge</a></div>
                                </div>


                                </body>
                                </html>


