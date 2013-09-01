
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
       <title>Impulse-2011 ,Technical Festival of Rungta College of Rungta College of Engineering and Technology,Bhilai(C.G.)</title>
        <META NAME="Keywords" CONTENT="Impulse-2011, Technical Festival, Rungta College of Rungta College of Engineering and Technology,Bhilai(C.G.),RCET,Bhilai(C.G.)">
        <META NAME="Description" CONTENT="Impulse-2011 ,Technical Festival of Rungta College of Rungta College of Engineering and Technology,Bhilai(C.G.)">

            <link rel="stylesheet" type="text/css" href="style.css" />
            <link href="facebox.css" media="screen" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="jquery-1.2.6.min.js"></script>
<script type="text/javascript" src="jquery.livequery.js"></script>
<link href="dependencies/screen.css" type="text/css" rel="stylesheet" />

<script src="jquery.elastic.js" type="text/javascript" charset="utf-8"></script>

<script src="jquery.watermarkinput.js" type="text/javascript"></script>
<script type="text/javascript">

	// <![CDATA[

	$(document).ready(function(){

		$('#shareButton').click(function(){

			var a = $("#watermark").val();
			if(a != "What's on your mind?")
			{
				$.post("posts.php?value="+a, {

				}, function(response){

					$('#posting').prepend($(response).fadeIn('slow'));
					$("#watermark").val("What's on your mind?");
				});
			}
		});


		$('.commentMark').livequery("focus", function(e){

			var parent  = $(this).parent();
			$(".commentBox").children(".commentMark").css('width','320px');
			$(".commentBox").children("a#SubmitComment").hide();
			$(".commentBox").children(".CommentImg").hide();

			var getID =  parent.attr('id').replace('record-','');
			$("#commentBox-"+getID).children("a#SubmitComment").show();
			$('.commentMark').css('width','300px');
			$("#commentBox-"+getID).children(".CommentImg").show();
		});

		//showCommentBox
		$('a.showCommentBox').livequery("click", function(e){

			var getpID =  $(this).attr('id').replace('post_id','');

			$("#commentBox-"+getpID).css('display','');
			$("#commentMark-"+getpID).focus();
			$("#commentBox-"+getpID).children("img.CommentImg").show();
			$("#commentBox-"+getpID).children("a#SubmitComment").show();
		});

		//SubmitComment
		$('a.comment').livequery("click", function(e){

			var getpID =  $(this).parent().attr('id').replace('commentBox-','');
			var comment_text = $("#commentMark-"+getpID).val();

			if(comment_text != "Write a comment...")
			{
				$.post("add_comment.php?comment_text="+comment_text+"&post_id="+getpID, {

				}, function(response){

					$('#CommentPosted'+getpID).append($(response).fadeIn('slow'));
					$("#commentMark-"+getpID).val("Write a comment...");
				});
			}

		});

		//more records show
		$('a.more_records').livequery("click", function(e){

			var next =  $(this).attr('id').replace('more_','');

			$.post("posts.php?show_more_post="+next, {

			}, function(response){
				$('#bottomMoreButton').remove();
				$('#posting').append($(response).fadeIn('slow'));

			});

		});

		//deleteComment
		$('a.c_delete').livequery("click", function(e){

			if(confirm('Are you sure you want to delete this comment?')==false)

			return false;

			e.preventDefault();
			var parent  = $(this).parent();
			var c_id =  $(this).attr('id').replace('CID-','');

			$.ajax({

				type: 'get',

				url: 'delete_comment.php?c_id='+ c_id,

				data: '',

				beforeSend: function(){

				},

				success: function(){

					parent.fadeOut(200,function(){

						parent.remove();

					});

				}

			});
		});

		/// hover show remove button
		$('.friends_area').livequery("mouseenter", function(e){
			$(this).children("a.delete").show();
		});
		$('.friends_area').livequery("mouseleave", function(e){
			$('a.delete').hide();
		});
		/// hover show remove button


		$('a.delete').livequery("click", function(e){

		if(confirm('Are you sure you want to delete this post?')==false)

		return false;

		e.preventDefault();

		var parent  = $(this).parent();

		var temp    = parent.attr('id').replace('record-','');

		var main_tr = $('#'+temp).parent();

			$.ajax({

				type: 'get',

				url: 'delete.php?id='+ parent.attr('id').replace('record-',''),

				data: '',

				beforeSend: function(){

				},

				success: function(){

					parent.fadeOut(200,function(){

						main_tr.remove();

					});

				}

			});

		});

		$('textarea').elastic();

		jQuery(function($){

		   $("#watermark").Watermark("What's on your mind?");
		   $(".commentMark").Watermark("Write a comment...");

		});

		jQuery(function($){

		   $("#watermark").Watermark("watermark","#369");
		   $(".commentMark").Watermark("watermark","#EEEEEE");

		});

		function UseData(){

		   $.Watermark.HideAll();

		   //Do Stuff

		   $.Watermark.ShowAll();

		}

	});

	// ]]>

</script>

    </head>

    <body>
        <div id="header">

          <span class="logo"><h2>13th to 14th March</h2></span>

            <div id="fb_like">
                <a href="http://www.twitter.com/ea_impulse2011"><img src="http://twitter-badges.s3.amazonaws.com/t_logo-c.png" alt="Follow ea_impulse2011 on Twitter"/></a>
                <br> <br>
                <iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.impulse2011.in&amp;layout=standard&amp;show_faces=true&amp;width=450&amp;action=like&amp;colorscheme=light&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe>
            </div>
            <div id="user_cred">
		Hi Friend! <a  href="login.php">Login</a> |<a href="register.php">Signup</a>
            </div>



            <ul id="menu">


                <li><a href="index.php"><img src="images/but1.gif" alt="" width="64" height="42" /></a></li>

            </ul>

        </div>

        <div id="content">
                <div class="post" align="center">
                    <h2>IMPULSE Open Social discussion forum</h2>
                    <div><span class="date">Discussion Forum </span><span class="categories">IMPULSE-2011</span></div>

	<div align="center">

		<form action="" method="post" name="postForm">

                    <div class="UIComposer_Box" align="center">

		<span class="w">
		<textarea class="input" id="watermark" name="watermark" style="height:80px" cols="60"></textarea>
		</span>

			<br clear="all" />

			<div align="left" style="height:30px; padding:10px 5px;">


				<a id="shareButton" style="float:left" class="small button Detail"> Share</a>

			</div>

		</div>

		</form>

		<br clear="all" />

		<div id="posting" align="center">

		<?php
		include('dbcon.php');

		include_once('posts.php');?>

		</div>
	</div>

<br clear="all" /><br clear="all" /><br clear="all" />
<br clear="all" />



			  <br clear="all" /><br clear="all" /><br clear="all" />
               </div>


            <div id="sidebar">
                                <div id="search">
                                    <table>
                                        <tr>
                                            <td>
                                                &nbsp;	&nbsp;	&nbsp;
                                            </td>
                                            <td>
                                                <!-- Facebook Badge START --><a href="http://www.facebook.com/pages/KillerMobi/145620182125991" target="_TOP" style="font-family: &quot;lucida grande&quot;,tahoma,verdana,arial,sans-serif; font-size: 11px; font-variant: normal; font-style: normal; font-weight: normal; color: #3B5998; text-decoration: none;" title="KillerMobi"><img src="images/fblogo.png" /></a>
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

<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FImpulse-2011%2F196829293678028&amp;width=275&amp;colorscheme=light&amp;show_faces=true&amp;stream=true&amp;header=true&amp;height=427" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:427px;" allowTransparency="true"></iframe>

                                                </div>
                                                </div>

                </div>




                                <div id="footer">
                                    <p>Copyright &copy;. All rights reserved. Design by <a href="http://www.impulse2011.in" target="_blank" title="">Narendra Soni, Rishabh Tripathi</a></p>																																																																		<div class="inner_copy"><a href="http://www.beautifullife.info/">beautiful</a><a href="http://www.grungemagazine.com/">grunge</a></div>
                                </div>


                                </body>
                                </html>
