<?php include_once 'scripts/checkuserlog.php';
$error_msg='';
$success_msg='';?>

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
            </div>'; ?>


<?php print"$contenthead";?>
<?php print"$logOptions"; ?>
<FONT SIZE="4" FACE="courier" COLOR=blue><MARQUEE WIDTH=100% BEHAVIOR=SCROLL HSPACE=15 VSPACE=25 BGColor=yellow>Candidates missing online registrations can register on the spot as well..!!</MARQUEE></FONT>

<div class="post">
				<h2>SMACKDOWN!!</h2>
				<div><span class="date">.....</span><span class="categories">Impulse-2011</span></div>
				<div class="description">
        <p><img src="images/smackdown.jpg" alt="" width="470" height="370" />
        <p><h2>Round(I)</h2></p><br>
    <h3> <p>*All rounds will be knockouts.Re-entries allowed till phase-3</p></h3>
     <h3> <p>*6 players at a time</p></h3>
     <h3> <p>*Match Type:Hell in a Cell</p></h3>
     <h3> <p>*Player with least body damages advances 2 d next round</p></h3>
     <h3> <p>*Time limit:10 minutes</p></h3>
     <h3> <p>*Rules nd regulations can be changed at any time during the game</p></h3>
        <br><br>
         <p><h2>Round(II)</h2></p><br>
    <h3> <p>*Finalists from round(I) wil enter in the :Elimination Chamber Match.</p></h3>


<p><h2>Round(III)</h2></p><br>
    <h3> <p>*The 2 finalists from Round(II) will battle each other in Ironman Match</p></h3>
    <h3> <p>*Player with max. no: of pinfall or submissions wins</p></h3>




        <br><br><br><br><h1> Registration fee- Rs.50 </h1><h2>&nbsp;per head</h2><br><br>
        <p>
           <h3> <a id="popup_link_8" href="#">click here to register for SMACKDOWN!! </a></h3>
        <div id="popup_8" class="popup">
            <p style="float:right;"><a class="popup_closebox" href="#"><img src="images/close.png" /></a></p>
            <table>
                <form action="ismackdown.php" method="get" enctype="multipart/form-data" >
                    <tr><td><?php print "Are you sure you want to register for smackdown?"?></td></tr>
                    <input name="event_id" type="hidden" value="10" />
                    <input name="user_id" type="hidden" value="<?php $logOptions_id ?>"
                           <tr><td> <input name="parse_var" type="hidden" value="cs" />
                            <input type="submit" value="register" />
                        </td></tr>

                </form>
            </table>

            <p><a class="popup_closebox" href="#">Close</a></p>
        </div>
        <script type="text/javascript">
            //<![CDATA[
            new Popup('popup_8','popup_link_8',{modal:true,duration:1})
            //]]>
        </script>


        </p>
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
                        <p>Copyright &copy;. All rights reserved. Design by <a href="http://www.impulse2011.in" target="_blank" title="">Narendra Soni, Rishabh Tripathi</a></p>																																																																		<div class="inner_copy"><a href="http://www.beautifullife.info/">beautiful</a><a href="http://www.grungemagazine.com/">grunge</a></div>
                    </div>




                    <?php
                    if ($_GET['parse_var'] == "cs") {
                        $user_id=$_SESSION['id'];

                        $event_id=$_GET['event_id'];
                        include_once 'scripts/connect_to_mysql.php';
                        $sql_registration_check = mysql_query("SELECT event_id FROM participation WHERE user_id=$user_id and event_id=$event_id");
                        $registration_check = mysql_num_rows($sql_registration_check);
                        if (!$registration_check>0) {
                            $sql = mysql_query("INSERT INTO participation (user_id,event_id)
                             VALUES($user_id,$event_id)")
                                    or die (mysql_error());
                            $success_msg = '<font color="#009900">h3><you are successfully registered for smackdown.</h3></font>';

                        } else {
                            $error_msg = '<font color="#FF0000">you are already registered for smackdown</font>';
                        }

                    }

?>
                    </body>
                    </html>
