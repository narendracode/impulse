<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Impulse-2011 ,Technical Festival of Rungta College  of Engineering and Technology,Bhilai(C.G.)</title>
        <META NAME="Keywords" CONTENT="Impulse-2011, Technical Festival,Rungta College of Engineering and Technology,Bhilai(C.G.),RCET,Bhilai(C.G.)">
            <META NAME="Description" CONTENT="Impulse-2011 ,Technical Festival,Rungta College of Engineering and Technology,Bhilai(C.G.)">


                <link rel="stylesheet" type="text/css" href="style.css" />
                <script src="script/prototype.js" type="text/javascript"></script>
                <script src="script/effects.js" type="text/javascript"></script>
                <script src="script/dragdrop.js" type="text/javascript"></script>
                <script src="script/popup.js" type="text/javascript"></script>



                        </head>
                        <body>
<?php
//include_once("scripts/checkuserlog.php");


$errorMsg = "";
$firstname = "";
$lastname = "";

$state = "";
$city = "";
$college='';
$zip = "";



$email1 = "";
$phone='';
$pass1 = "";
$pass2 = "";
$sem='';
$branch="";


// This code runs only if the form submit button is pressed
if (isset ($_POST['firstname'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    $state = $_POST['state'];
    $city = $_POST['city'];
    $college = $_POST['college'];
    $zip = $_POST['zip'];


    $email1 = $_POST['email1'];
    $phone=$_POST['phone'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    $sem = $_POST['sem'];
    $branch = $_POST['branch'];



    $firstname = stripslashes($firstname);
    $lastname = stripslashes($lastname);
    $state = stripslashes($state);
    $city = stripslashes($city);
    $college = stripslashes($college);
    $zip = stripslashes($zip);

    $email1 = stripslashes($email1);
    $phone = stripslashes($phone);
    $pass1 = stripslashes($pass1);

    $pass2 = stripslashes($pass2);
    $branch=stripslashes($branch);

    $firstname = strip_tags($firstname);
    $lastname = strip_tags($lastname);
    $state = strip_tags($state);
    $city = strip_tags($city);
    $college = strip_tags($college);
    $zip = strip_tags($zip);

    $email1 = strip_tags($email1);
    $pass1 = strip_tags($pass1);
    $phone=strip_tags($phone);
    $pass2 = strip_tags($pass2);
    $branch=strip_tags($branch);

    $username=$firstname;

    // Connect to database
    include_once "scripts/connect_to_mysql.php";

    $emailCHecker = mysql_real_escape_string($email1);
    // $emailCHecker = preg_replace("`", "", $emailCHecker);
    $sql_email_check = mysql_query("SELECT email FROM member WHERE email='$emailCHecker'");
    $email_check = mysql_num_rows($sql_email_check);
    require_once('recaptchalib.php');
    $privatekey = "6LeiDcESAAAAADRMzL0t42rZG3AXOZ9Ex48ibO72 ";
    $resp = recaptcha_check_answer ($privatekey,
            $_SERVER["REMOTE_ADDR"],
            $_POST["recaptcha_challenge_field"],
            $_POST["recaptcha_response_field"]);

    if ((!$firstname) || (!$lastname) ||  (!$state) || (!$city) ||(!$college) ||(!$zip) || (!$email1) || (!$phone) || (!$pass1) || (!$pass2)||(!$branch)) {

        $errorMsg = 'ERROR: You did not submit the following required information:<br /><br />';

        if(!$firstname) {
            $errorMsg .= ' * First Name<br />';
        }
        if(!$lastname) {
            $errorMsg .= ' * Last Name<br />';
        }

        if(!$state) {
            $errorMsg .= ' * State or Provice<br />';
        }
        if(!$city) {
            $errorMsg .= ' * City<br />';
        }
        if(!$college) {
            $errorMsg .= ' * College<br />';
        }

        if(!$zip) {
            $errorMsg .= ' * Postal or Zip Code<br />';
        }
        if(!$email1) {
            $errorMsg .= ' * Email Address<br />';
        }

        if(!$pass1) {
            $errorMsg .= ' * Login Password<br />';
        }
        if(!$phone) {
            $errorMsg .= ' * Phone number<br />';
        }

        if(!$pass2) {
            $errorMsg .= ' * Confirm Login Password<br />';
        }
        if(!$branch) {
            $errorMsg .= ' * Branch name<br />';
        }
    }

    else if ($pass1 != $pass2) {
        $errorMsg = 'ERROR: Your Password fields below do not match<br />';
    } //else if ($humancheck != "") {
    // $errorMsg = 'ERROR: The Human Check field must be cleared to be sure you are human<br />';}
    else if ($email_check > 0) {
        $errorMsg = "<u>ERROR:</u><br />Your Email address is already in use inside our database. Please use another.<br />";

    }
    else if (!$resp->is_valid) {
        $errorMsg= 'capcha entered is not correct.. try again<br />';

    }

    else {
        $firstname = mysql_real_escape_string($firstname);
        $lastname = mysql_real_escape_string($lastname);
        $state = mysql_real_escape_string($state);
        $city = mysql_real_escape_string($city);
        $college = mysql_real_escape_string($college);
        $zip = mysql_real_escape_string($zip);

        $email1 = mysql_real_escape_string($email1);
        $pass1 = mysql_real_escape_string($pass1);
        $phone = mysql_real_escape_string($phone);
        $branch=mysql_real_escape_string($branch);

        //   $firstname = preg_replace("`", "", $firstname);
        //  $lastname = preg_replace("`", "", $lastname);
        //  $state = preg_replace("`", "", $state);
        //  $city = preg_replace("`", "", $city);
        // $zip = preg_replace("`", "", $zip);
        // $website = preg_replace("`", "", $website);
        // $youtube = preg_replace("`", "", $youtube);
        // $email1 = preg_replace("`", "", $email1);
        //$pass1 = preg_replace("`", "", $pass1);

        // $website = preg_replace("http://", "", $website);
        //$youtube = preg_replace("http://www.youtube.com/user/", "", $youtube);

        // Add MD5 Hash to the password variable
        $db_password = md5($pass1);

        $sql = mysql_query("INSERT INTO member (username,password,firstname, lastname,  email,college, state, city, zip,phone,sem,branch)
                                 VALUES('$username','$db_password','$firstname','$lastname','$email1','$college','$state','$city',$zip,$phone,$sem,'$branch')")
                or die (mysql_error());

        $id = mysql_insert_id();
        $um = umask(0);
        mkdir("paperpresentation/$id", 0777, true);
        umask($um);


        $msgToUser = "<h3>Congratulations</h3>  <h2>$firstname</h2><h3>, you are succuessfully registered for IMPULSE-2011</h4><br />
                               Annual technical festival of RCET bhilai ,Chhattisgarh</h3><br /><br />
                               <br />
                               <br />
                ";


        include_once 'msgToUser.php';

        exit();


    }

}
else {
    $errorMsg = "Fields marked with an [ * ] are required";
    $firstname = "";
    $lastname = "";
    $phone = "";
    $state = "";
    $city = "";
    $zip = "";
    $college = "";

    $email1 = "";

    $pass1 = "";
    $pass2 = "";
    $branch="";
}
?>





                    <div id="header">

                <span class="logo"><h2>13th to 14th March</h2></span>

                        <div id="fb_like">
                        <a href="http://www.twitter.com/ea_impulse2011"><img src="http://twitter-badges.s3.amazonaws.com/t_logo-c.png" alt="Follow ea_impulse2011 on Twitter"/></a>
                        <br> <br>
                            <iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.impulse2011.in&amp;layout=standard&amp;show_faces=true&amp;width=450&amp;action=like&amp;colorscheme=light&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe>
                                    </div>

                                    <div id="user_cred">
                                    Hi Friend! <a id="popup_link_4" href="#">Login</a> |<a href="register.php">Signup</a>
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
                                new Popup('popup_4','popup_link_4',{modal:true,duration:1})
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
                    new Popup('popup_6','popup_link_6',{position:'below',trigger:'click'})
                    //]]>
                </script>

                <div id="content">
                    <div id="posts">
                        <div class="post">
                            <h2>Impulse Registration</h2>
                            <div><span class="date">.....</span><span class="categories">Impulse-2011</span></div>
                            <div class="description">
                                <form action="register.php" method="post" enctype="multipart/form-data">
                                    <table>
                                        <tr>
                                            <td colspan="2"><font color="#FF0000"><?php print "$errorMsg"; ?></font></td>
                                        </tr>
                                        <tr>
                                            <td align="right" class="alignRt">First Name:<span class="brightRed"> *</span></td>
                                            <td><input name="firstname" type="text" class="formFields" id="firstname" value="<?php print "$firstname"; ?>" size="32" maxlength="16" /></td>
                                        </tr>
                                        <tr>
                                            <td align="right" class="alignRt">Last Name:<span class="brightRed"> *</span></td>
                                            <td><input name="lastname" type="text" class="formFields" id="lastname" value="<?php print "$lastname"; ?>" size="32" maxlength="20" /></td>
                                        </tr>
                                        <tr>
                                            <td align="right" class="alignRt">State/Province: <span class="brightRed">*</span></td>
                                            <td><input name="state" type="text" class="formFields" id="state" value="<?php print "$state"; ?>" size="32" maxlength="36" /></td>
                                        </tr>
                                        <tr>
                                            <td align="right" class="alignRt">City: <span class="brightRed">*</span></td>
                                            <td><input name="city" type="text" class="formFields" id="city" value="<?php print "$city"; ?>" size="32" maxlength="36" /></td>
                                        </tr>
                                        <tr>
                                            <td align="right" class="alignRt">Sem: <span class="brightRed">*</span></td>
                                            <td><select name="sem">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>

                                                </select></td>

                                        </tr>
                                        <tr>
                                            <td align="right" class="alignRt">Branch: <span class="brightRed">*</span></td>
                                            <td><input name="branch" type="text" class="formFields" id="city" value="<?php print "$branch"; ?>" size="32" maxlength="36" /></td>
                                        </tr>
                                        <tr>
                                            <td align="right" class="alignRt">College: <span class="brightRed">*</span></td>
                                            <td><input name="college" type="text" class="formFields" id="college" value="<?php print "$college"; ?>" size="40" maxlength="50" /></td>
                                        </tr>
                                        <tr>
                                            <td align="right" class="alignRt">Postal / Zip Code: <span class="brightRed">*</span></td>
                                            <td><input name="zip" type="text" class="formFields" id="zip" value="<?php print "$zip"; ?>" size="32" maxlength="24" /></td>
                                        </tr>
                                        <tr>
                                            <td align="right" class="alignRt">Email Address: <span class="brightRed">*</span></td>
                                            <td><input name="email1" type="text" class="formFields" id="email1" value="<?php print "$email1"; ?>" size="32" maxlength="48" /></td>
                                        </tr>
                                        <tr>
                                            <td align="right" class="alignRt">Phone number: <span class="brightRed">*</span></td>
                                            <td><input name="phone" type="text" class="formFields" id="phone" value="<?php print "$phone"; ?>" size="32" maxlength="48" /></td>
                                        </tr>
                                        <tr>
                                            <td align="right" class="alignRt">Create Password:<span class="brightRed"> *</span></td>
                                            <td><input name="pass1" type="password" class="formFields" id="pass1" maxlength="16" />
                                                <span class="textSize_9px"><span class="greyColor">Alphanumeric Characters Only</span></span></td>
                                        </tr>
                                        <tr>
                                            <td align="right" class="alignRt">Confirm Password:<span class="brightRed"> *</span></td>
                                            <td><input name="pass2" type="password" class="formFields" id="pass2" maxlength="16" />
                                                <span class="textSize_9px"><span class="greyColor">Alphanumeric Characters Only</span></span></td>
                                        </tr>
                                    </table>
                                    <table>
                                        <tr>
                                            <?php
                                            require_once('recaptchalib.php');
                                            $publickey = "6LeiDcESAAAAAP9VmOYmrY_AQ49t5al49zF_HWYP "; // you got this from the signup page
                                            echo recaptcha_get_html($publickey);
                                            ?>
                                        </tr>
                                        <tr>

                                            <input type="submit" name="Submit3" value="Submit Form" />

                                        </tr>
                                    </table>
                                </form>
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
                                        <!-- Facebook Badge START --><a href="http://www.facebook.com/pages/Impulse-2011/196829293678028" target="_TOP" style="font-family: &quot;lucida grande&quot;,tahoma,verdana,arial,sans-serif; font-size: 11px; font-variant: normal; font-style: normal; font-weight: normal; color: #3B5998; text-decoration: none;" title=""><img src="images/fblogo.png" /></a>
                                        &nbsp;&nbsp;<a href="http://www.twitter.com/ea_impulse2011"><img src="images/twitterlogo.png" /></a>&nbsp;&nbsp;
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

<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FImpulse-
2011%2F196829293678028&amp;width=280&amp;colorscheme=light&amp;show_faces=true&amp;stream=true&amp;header=true&amp;height=427" scrolling="no" frameborder="0"
style="border:none; overflow:hidden; width:292px; height:427px;" allowTransparency="true"></iframe>

                                        </div>
                                        </div>
                                        </div>
                                        <div id="footer">
                                            <p>Copyright &copy;. All rights reserved. Design by <a href="http://www.impulse2011.in" target="_blank" title="">Webmasters: Narendra Soni, Rishabh Tripathi</a></p>																																																																		<div class="inner_copy"><a href="http://www.beautifullife.info/">beautiful</a><a href="http://www.grungemagazine.com/">grunge</a></div>
                                        </div>


                                        </body>
                                        </html>
