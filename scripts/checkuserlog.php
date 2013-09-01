<?php
//$logOptions_id="";
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');
include_once "scripts/connect_to_mysql.php";
$dyn_www = $_SERVER['HTTP_HOST'];
$logOptions = "";
if (!isset($_SESSION['idx'])) {
  if (!isset($_COOKIE['idCookie'])) {
     $logOptions = '<div id="user_cred">
		Hi Friend <a id="popup_link_4" href="#">Login</a> |<a href="register.php">Signup</a>
            </div>

            <div id="popup_4" class="popup">
                <p style="float:right;"><a class="popup_closebox" href="#"><img src="images/close.png" /></a></p>

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
                 <li><a href="attractions.php"><img src="images/but66.gif" alt="" width="102" height="42" /></a></li>
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
                                        <p><a href="fifa.php">FIFA</a></p>
                                        <p><a href="smackdown.php">SMACKDOWN</a></p>

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
		Hi '.$logOptions_firstname.'! <!--a id="popup_link_4" href="#">Login</a --> |<a href="logout.php">Logout</a>
            </div>

            <div id="popup_4" class="popup">
                <p style="float:right;"><a class="popup_closebox" href="#"><img src="images/close.png" /></a></p>

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
                 <li><a href="attractions.php"><img src="images/but66.gif" alt="" width="102" height="42" /></a></li>
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
                                        <p><a href="ififa.php">FIFA</a></p>
                                        <p><a href="ismackdown.php">SMACKDOWN</a></p>
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
		print 'Something appears wrong with your stored log in credentials. <a href="http://www.impulse2011.in/login.php">Log in again here please</a>';
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

     $logOptions = '<div id="user_cred">
		Hi'.$logOptions_uname.'! <!--a id="popup_link_4" href="#">Login</a --> |<a href="logout.php">Logout</a>
            </div>

            <div id="popup_4" class="popup">
                <p style="float:right;"><a class="popup_closebox" href="#"><img src="images/close.png" /></a></p>

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
                 <li><a href="attractions.php"><img src="images/but66.gif" alt="" width="102" height="42" /></a></li>
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
                                        <p><a href="ififa.php">FIFA</a></p>
                                        <p><a href="ismackdown.php">SMACKDOWN</a></p>
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
 ?>
   