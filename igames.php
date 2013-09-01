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





<div class="post">
    <h2>Need For Speed</h2>
    <div><span class="date">.....</span><span class="categories">Impulse-2011</span></div>
    <div class="description">
        <p><img src="images/nfs.jpg" alt="" width="470" height="370" />
        <p><h2>Competition Structure</h2></p><br>
    <h3> <p><b>1. </b>The tournament will be knock out. The player who wins will be going on  to the next round.</p>
        <p><b>2. </b>The knock out continues till we get final 4 top scoring players for the semi finals.</p>
        <p><b>3. </b> There will not be any match played for the third spot.</p></h3><br><br>
         <p><h2>Match Format</h2></p><br>
    <h3> <p><b>1. </b>Sprint Races will be played by 4 players in the preliminary matches.</p>
        <p><b>2. </b>Players getting the 1st position in the sprints shall qualify for the next round.</p>
        <p><b>3. </b> For the Pre-Quarter finals, game mode will be circuit(2 laps).</p>
        <p><b>4. </b> For the Quarter finals, game mode will be best of 2 races(1 circuit, 1 sprint).</p>
        <p><b>5. </b>For the Semi-final, game mode will be best of 3 races(1 circuit, 1 sprint, 1 drag).</p>
        <p><b>6. </b>For the Finals, game mode will be best of 5 races(2 circuit, 1 sprint, 1 drag, 1 speedtrap).</p></h3><br><br>

         <p><h2>Game Settings</h2></p><br>
    <h3> <p><b>1. </b>	Courses: Diamond, Dunwich Bay, Heritage Heights, Bay Bridge, East Park, Forest Green, Heritage and Diamond and Seaside & Lennox.</p>
        <p><b>2. </b>Car Settings: Visual Upgrade allowed, Part, Performance (Pro, Super Pro, Ultimate)allowed,UPGRADED CARS WILL BE AVAILABLE. Junkman not allowed. When using Stock Spoiler and Stock</p>
        <p><b>3. </b>Race Mode Options:
        <br>&nbsp;&nbsp;a. Nitrous: On<br>&nbsp;&nbsp;b. Collision Detection: No<br>&nbsp;&nbsp;c. Performance Matching: Off<br>&nbsp;&nbsp;d.	Units: Player's own discretion

    </p>
        <p><b>4. </b>Player Mode Options:
        <br>&nbsp;&nbsp;a. Game Moment Camera: Off<br>&nbsp;&nbsp;b. Car Damage: Off<br>&nbsp;&nbsp;c.	Rear View Mirror: Player's own discretion

    </p>
        <p><h2>Rules</h2></p><br>
    <h3> <p><b>1. </b>Players must be present in the tournament area at the notifications schedule. Players are advised to be present a few minutes before the schedule to avoid any unpredictable delay. If the player is not present at the notification schedule, he shall be disqualified.</p>
        <p><b>2. </b>Players will be given 5 minutes to choose their car and tune them before racing.</p>
        <p><b>3. </b> All the above rules should be followed without argument with the tournament official, the violation of which may result in player or team disqualification, the decision to do the same lies in the hand of the tournament official present there</p></h3><br><br>
        </h3><br><br>
        <br><br><br><br><h1> Registration fee- Rs.50 </h1><h2>&nbsp;per head</h2>
       

    </div>

    <hr>





 <p>
   <h3>  <a id="popup_link_5" href="#">Click here to register for NFS </a></h3>
        </p>
        <div id="popup_5" class="popup">
            <p style="float:right;"><a class="popup_closebox" href="#"><img src="images/close.png" /></a></p>


            <table>
                <form action="igames.php" method="get" enctype="multipart/form-data" >
                    <tr><td><?php print "Are you sure you want to register for need for speed?"?></td></tr>
                    <input name="event_id" type="hidden" value="4" />
                    <input name="user_id" type="hidden" value="<?php $logOptions_id ?>"
                           <tr><td> <input name="parse_var" type="hidden" value="nfs" />
                            <input type="submit" value="register" />
                        </td></tr>

                </form>
            </table>

            <p><a class="popup_closebox" href="#">Close</a></p>
        </div>
        <script type="text/javascript">
            //<![CDATA[
            new Popup('popup_5','popup_link_5',{modal:true,duration:1})
            //]]>
        </script>



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
                                type: 'list',
                                rpp: 30,
                                interval: 6000,
                                title: 'Techfest,RCET Bhilai(C.G.)',
                                subject: 'IMPULSEive tweets',
                                width: 250,
                                height: 300,
                                theme: {
                                    shell: {
                                        background: '#0d0c0d',
                                        color: '#ffffff'
                                    },
                                    tweets: {
                                        background: '#ffffff',
                                        color: '#444444',
                                        links: '#b740c2'
                                    }
                                },
                                features: {
                                    scrollbar: true,
                                    loop: false,
                                    live: true,
                                    hashtags: true,
                                    timestamp: true,
                                    avatars: true,
                                    behavior: 'all'
                                }
                            }).render().setList('ea_impulse2011', '').start();
                        </script>



                        <iframe src="http://www.facebook.com/plugins/recommendations.php?site=http%3A%2F%2Fwww.impulse2011.in&amp;width=250&amp;height=300&amp;header=true&amp;colorscheme=light" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:300px;" allowTransparency="true"></iframe>



                    </div>
                    </div>
                    </div>
                    <div id="footer">
                        <p>Copyright &copy;. All rights reserved. Design by <a href="http://www.impulse2011.in" target="_blank" title="">Narendra Soni, Rishabh Tripathi</a></p>																																																																		<div class="inner_copy"><a href="http://www.beautifullife.info/">beautiful</a><a href="http://www.grungemagazine.com/">grunge</a></div>
                    </div>
                    <?php

                    if ($_GET['parse_var'] == "nfs") {
                        $user_id=$_SESSION['id'];
                        print($user_id.'...........');
                        $event_id=$_GET['event_id'];
                        include_once 'scripts/connect_to_mysql.php';
                        $sql_registration_check = mysql_query("SELECT event_id FROM participation WHERE user_id=$user_id and event_id=$event_id");
                        $registration_check = mysql_num_rows($sql_registration_check);
                        if (!$registration_check>0) {
                            $sql = mysql_query("INSERT INTO participation (user_id,event_id)
                             VALUES($user_id,$event_id)")
                                    or die (mysql_error());
                            $success_msg = '<font color="#009900">you are successfully registered.</font>';

                        } else {
                            $error_msg = '<font color="#FF0000">you are already registered for NFS</font>';
                        }

                    }

?>
                    </body>
                    </html>
