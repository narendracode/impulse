<?php include_once 'scripts/checkuserlog.php';?>

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
<FONT SIZE="4" FACE="courier" COLOR=blue><MARQUEE WIDTH=100% BEHAVIOR=SCROLL HSPACE=15 VSPACE=25 BGColor=yellow>Candidates missed to upload their  paper can mail to sharat@impulse2011.in</MARQUEE></FONT>




			<div class="post">
    <h2>Papyrus</h2>
    <div><span class="date">.....</span><span class="categories">Impulse-2011</span></div>
    <div class="description">
        <p><img src="images/paperpresentation.jpg" alt="" width="470" height="370" /></p><br><br><br>

        <h2>Phase-1</h2><br>
       <p> <h3>During the first phase of this event, a paper based on a emerging new trends, technologies & innovative concepts which will aid to counter the challenges faced in India with all the facts and demographics available for the issue has to be uploaded. You can download the double column format for submitting the paper on tab of the same name. The candidates are required to come up with a conclusion to the matter discussed in the paper. The default Presentation Templates are provided under the tab of the same name. Or you can browse on Office.com. It’s not necessary to prepare on the same templates, the participant may use other templates based upon his/her choice. Candidates can submit their finished Papers by uploading them in the Applicant Access on the website.

       </h3></p>
             <br><br>
             <h3>
                 <p>
                     All entries received during Round 1 will be judged by the eminent professors of the renowned institutes of India. The best entries will be called up for the Round-2 of this event to be held on Day 1 of the event.


                 </p>
             </h3>
             <br><br><br>><br>
             <h3>
                 <p>
                     Meanwhile on spot registrations (Wild Card Entry round) will be organized on first day of Impulse , ie; on March 13, 2011 at Rungta College for all the participants who were unable to upload the paper on the website. Registrations for the wild card entry round will be done on the Desk. 3 Candidates will be selected out of the Wild Card Entry round by a panel of judges to join the existing finalists in Round 2.

                 </p>
             </h3>
             <br><br><br>
             <h2>Phase-2</h2><br>

             <h3>
                 <p>
                     For the second phase, all the finalists will be required to start afresh as they will be asked to present their papers in front of a panel of judges on Day 1 of Impulse. All participants will be provided with kits, markers and CD’s containing the Papers of the selected candidates. There will be an added advantage for the contestants as there will be scores for audience polls as well.
The Judges panel will then select the some best entries and declare the winner.

                 </p>
    </h3><br><br>
    
    <br>
    









    </div>

</div>





			 <div class="post">
                    

				<div class="description">
                                    <FONT SIZE="4" FACE="courier" COLOR=blue><MARQUEE WIDTH=100% BEHAVIOR=ALTERNATE BGColor=yellow>On the spot submission of papers on 13th march will be entertained...</MARQUEE></FONT><br>
                                    <br>
					  <p>
                                         <h3>   <a id="popup_link_7" href="#">click here to register for Paper presentation</a></h3> 


            <div id="popup_7" class="popup">
                <p style="float:right;"><a class="popup_closebox" href="#"><img src="images/close.png" /></a></p>


                <table>
                    <form action="ipaperpresentation.php" method="get" enctype="multipart/form-data" >
                    <tr><td><?php print "Are you sure you want to register for Paper presentataion?"?></td></tr>
                             <input name="event_id" type="hidden" value="3" />

                    <tr><td> <input name="parse_var" type="hidden" value="paper" />
                            <input type="submit" value="register" />
                        </td></tr>

                    </form>
                </table>

                <p><a class="popup_closebox" href="#">Close</a></p>
            </div>
            <script type="text/javascript">
                //<![CDATA[
                new Popup('popup_7','popup_link_7',{modal:true,duration:1})
                //]]>
            </script>


</p>
                                </div>
			</div>

                    <div class="post">
				<h2>Upload Paper:</h2>
				<div><span class="date">.....</span><span class="categories">Impulse-2011</span></div>
				<div class="description">
					
                                        <p>
                                            <br><br><br><h3><a id="popup_link_9" href="#"><b>click here to Upload file</b></a></h3>
                                          <div id="popup_9" class="popup">
                <p style="float:right;"><a class="popup_closebox" href="#"><img src="images/close.png" /></a></p>

                <?php require_once("maxUpload.class.php"); ?>
                <table>
                    <tr><td><?php print"Upload Your Paper here:"; ?></td></tr>
                    <tr><td>
                        <?php $id=$_SESSION['id']; $myUpload = new maxUpload();
                        $myUpload->originalDir='paperpresentation/'.$id.'/'; ?></td></tr>
                    <tr><td><?php $myUpload->uploadFile(); ?></td></tr>

                </table>

                <p><a class="popup_closebox" href="#">Close</a></p>
            </div>
            <script type="text/javascript">
                //<![CDATA[
                new Popup('popup_9','popup_link_9',{modal:true,duration:1})
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
                                                <!-- Facebook Badge START --><a href="http://www.facebook.com/pages/Impulse-2011/196829293678028"target="_TOP" style="font-family: &quot;lucida grande&quot;,tahoma,verdana,arial,sans-serif; font-size: 11px; font-variant: normal; font-style: normal; font-weight: normal; color: #3B5998; text-decoration: none;" title=""><img src="images/fblogo.png" /></a>
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

<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FImpulse-2011%2F196829293678028&amp;width=280&amp;colorscheme=light&amp;show_faces=true&amp;stream=true&amp;header=true&amp;height=427" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:427px;" allowTransparency="true"></iframe>




                                                </div>
                                                </div>
                                                </div>
                                                <div id="footer">
		<p>Copyright &copy;. All rights reserved. Design by <a href="http://www.impulse2011.in" target="_blank" title="">Narendra Soni, Rishabh Tripathi</a></p>																																																																		<div class="inner_copy"><a href="http://www.beautifullife.info/">beautiful</a><a href="http://www.grungemagazine.com/">grunge</a></div>
	</div>
   <?php
if ($_GET['parse_var'] == "paper"){
        $user_id=$_SESSION['id'];
        print($user_id.'...........');
         $event_id=$_GET['event_id'];
        include_once 'scripts/connect_to_mysql.php';
          $sql_registration_check = mysql_query("SELECT event_id FROM participation WHERE user_id=$user_id and event_id=$event_id");
            $registration_check = mysql_num_rows($sql_registration_check);
        if (!$registration_check>0){
             $sql = mysql_query("INSERT INTO participation (user_id,event_id)
                             VALUES($user_id,$event_id)")
                       or die (mysql_error());
              $success_msg = '<font color="#009900">you are successfully registered for Call of Duty.</font>';

        } else {
			$error_msg = '<font color="#FF0000">you are already registered for Call Of Duty</font>';
		}

}

?>


                                                </body>
                                                </html>
