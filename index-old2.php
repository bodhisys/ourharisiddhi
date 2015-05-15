<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta name="keywords" content="harisiddhi, history of nepal, oldest city of nepal, newar, jala, jatala, harsiddhi, ourharisiddhi, our harisiddhi, first harisiddhi portal, newa, nepal, neplbhasha, newari, model, movie, shubhay, interview, culture, festival, wallpapers, wallpaper, nhuda, nepalsambat, maharjan, temples, scripts, mask dance, first mask dance, marriage ceremony of newar community, maharjan, newari website, newari websites ,newari site, newars of lalitpur, lalitpur, kathmandu, bhaktapur, nepal, kutumba, origin of kutumba band, hari, siddhi, shiva, trisakti, tri sakti, tri sakti bhawani, jaladya, jala dya, dya, godawari, dya, pyakha" />
<meta name="description" content="Our Harisiddhi is a portal site dedicated to the newa community of harisiddhi." />
<meta name="copyright" content="&copy; 2011, Our Harisiddhi" />
<meta name="slogan" content="Share with us, Grow with us." />
<meta name="info" content="commercial" />
<meta name="language" content="english" />
<meta name="copyright" content="www.ourhairisddhi.com" />
<meta name="allow-search" content="Yes" />
<meta name="revisit-after" content="1 day" />
<meta name="rating" content="General" />
<meta name="category" content="Portal, Social, Community, Network" />
<meta name="robots" content="index, follow, all" />
<meta name="googlebot" content="index, follow, all" />
<title>Our Harisiddhi - First Harisiddhi Newa Portal - Harsiddhi - Jatala - Jala - Jestapur - Trishakti - Jala Dya - Harisiddhi Bhawani - Home</title>
<style type="text/css">
@import url(css/style.css);
@import url(css/jquery.jcarousel.css);
@import url(css/skin.css);
</style>

<link rel="icon" href="favicon.png" type="image/png"/>

<!-- scroll banner style and script starts -->
<script type="text/javascript" language="javascript" src="js/jquery-1.3.2.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.pack.js"></script>
<script type="text/javascript">
function mycarousel_initCallback(carousel)
{
    // Disable autoscrolling if the user clicks the prev or next button.
    carousel.buttonNext.bind('click', function() {
        carousel.startAuto(3);
    });

    carousel.buttonPrev.bind('click', function() {
        carousel.startAuto(3);
    });

    // Pause autoscrolling if the user moves with the cursor over the clip.
    carousel.clip.hover(function() {
        carousel.stopAuto();
    }, function() {
        carousel.startAuto();
    });
};

jQuery(document).ready(function() {
    jQuery('#mycarouse').jcarousel({
        auto: 3,
        wrap: 'last',
        initCallback: mycarousel_initCallback
    });
});

</script>
<!-- scroll banner style and script ends -->

<!-- fade in fade out script starts -->
<script src="js/jquery.innerfade.js" type="text/javascript"></script>
<!-- fade in fade out script ends -->

<!-- directory script starts -->
<script type="text/javascript">
            $(document).ready(function(){

                $("#directoryHdr").click(function(){
                    if ($("#directoryContent").is(":hidden")){
                        $("#directoryContent").slideDown("slow");
                    }
                    else{
                        $("#directoryContent").slideUp("slow");
                    }
                });
                
            });
        </script>
<!-- directory script ends -->

<!-- sticky slidebar script starts -->
<script type="text/javascript">

$(document).ready(function(){
var obj = $('#sticky');
var offset = obj.offset();
var topOffset = offset.top;
var leftOffset = offset.left;
var marginTop = obj.css("marginTop");
var marginLeft = obj.css("marginLeft");

$(window).scroll(function() {
var scrollTop = $(window).scrollTop();

	if (scrollTop >= topOffset){

		obj.css({
			marginTop: 0,
			marginLeft: leftOffset,
			position: 'fixed',
		});
	}

	if (scrollTop < topOffset){

		obj.css({
			marginTop: marginTop,
			marginLeft: marginLeft,
			position: 'relative',
		});
	}
});
});

</script>
<!-- sticky slidebar script ends -->

<!-- tab script starts -->
<script type="text/javascript" src="js/jtabber.js"></script>
<script type="text/javascript">

	$(document).ready(function(){
		
		$.jtabber({
			mainLinkTag: "#nav a", // much like a css selector, you must have a 'title' attribute that links to the div id name
			activeLinkClass: "selected", // class that is applied to the tab once it's clicked
			hiddenContentClass: "hiddencontent", // the class of the content you are hiding until the tab is clicked
			showDefaultTab: 1, // 1 will open the first tab, 2 will open the second etc.  null will open nothing by default
			showErrors: true, // true/false - if you want errors to be alerted to you
			effect: 'slide', // null, 'slide' or 'fade' - do you want your content to fade in or slide in?
			effectSpeed: 'fast' // 'slow', 'medium' or 'fast' - the speed of the effect
		})
		
	})
	
	
</script>
<!-- tab script ends -->

<script type="text/javascript" src="js/DD_roundies_0.0.2a-min.js"></script>
<script type="text/javascript">
	DD_roundies.addRule('ul.topNav', '0 0 6px 6px', true);
</script>

</head>

<body>
<!-- wrapper starts -->
<div class="wrapper">
  <!-- header starts -->
  <div class="header">
	<?php include('include/header.php'); ?>
    <div class="CB"></div>
  </div>
  <!-- header ends -->
  
  <!-- main menu starts -->
  <div class="mainMenu">
	<?php include('include/mainMenu.php'); ?>
  </div>
  <!-- main menu ends -->  
</div>
<!-- wrapper ends -->

<!-- sticky starts -->
<div id="sticky">
  <div id="carbonads-container">
	<div class="carbonad">
	  <div id="azcarbon"></div>
		<a href="https://www.facebook.com/groups/visitharisiddhi/" target="_blank" class="fb"></a>
	  </div>
	</div>
</div>
<!-- sticky ends -->
        
<!-- banner starts -->
<div class="banner">
  <!-- wrapper starts -->
  <div class="wrapper">
    <!-- left anim bnr starts -->
    <div class="leftAnimBnr">
      <!-- scroll gallery starts -->
      <div class="scrolgall" style="width:418px; height:312px; padding-top:0px; border:3px solid #000;">
        <!--<ul id="mycarouse" class="jcarousel-skin-tango">
          <li><img src="http://www.ourharisiddhi.com/images/scrollbnr/img7.png" alt="ourharisiddhi image 1" /></li>
          <li><img src="http://www.ourharisiddhi.com/images/scrollbnr/img1.jpg" alt="ourharisiddhi image 1" /></li>
          <li><img src="http://www.ourharisiddhi.com/images/scrollbnr/img2.jpg" alt="ourharisiddhi image 2" /></li>
          <li><img src="http://www.ourharisiddhi.com/images/scrollbnr/img3.jpg" alt="ourharisiddhi image 3" /></li>
          <li><img src="http://www.ourharisiddhi.com/images/scrollbnr/img4.jpg" alt="ourharisiddhi image 4" /></li>
          <li><img src="http://www.ourharisiddhi.com/images/scrollbnr/img5.jpg" alt="ourharisiddhi image 5" /></li>
          <li><img src="http://www.ourharisiddhi.com/images/scrollbnr/img6.jpg" alt="ourharisiddhi image 6" /></li>
        </ul>-->
        
        <iframe width="420" height="315" src="http://www.youtube.com/embed/0TJDLMz3fw4" frameborder="0" allowfullscreen></iframe>
      </div>
      <!-- scroll gallery ends -->
    </div>
    <!-- left anim bnr ends -->
    
    <!-- right anim bnr starts -->
    <div class="rightAnimBnr">
	<script type="text/javascript">
							/*
						 	$('ID or class of the element containing the fading objects').innerfade({
              animationtype: Type of animation 'fade' or 'slide' (Default: 'fade'),
              speed: Fadingspeed in milliseconds or keywords (slow, normal or fast)(Default: 'normal'),
              timeout: Time between the fades in milliseconds (Default: '2000'),
              type: Type of slideshow: 'sequence', 'random' or 'random_start' (Default: 'sequence'),
              containerheight: Height of the containing element in any css-height-value (Default: 'auto')
              runningclass: CSS-Class which the container get's applied (Default: 'innerfade')
							});
							*/
              $(document).ready(
                function(){
                  $('#imageAnimation').innerfade({
                    speed: 'slow',
                    timeout: 4000,
                    type: 'sequence',
                    containerheight: '309px'
                  });
	               }
              );
            </script>
	  <ul id="imageAnimation" style="height:297px; overflow:hidden;">
        <li> <img src="http://www.ourharisiddhi.com/images/fadebnr/img1.png" width="478" height="309" alt="Our Harisiddhi Image 1"/> </li>
        <li> <img src="http://www.ourharisiddhi.com/images/fadebnr/img2.png" width="478" height="309" alt="Our Harisiddhi Image 2"/> </li>
        <li> <img src="http://www.ourharisiddhi.com/images/fadebnr/img3.png" width="478" height="309" alt="Our Harisiddhi Image 3"/> </li>
        <li> <img src="http://www.ourharisiddhi.com/images/fadebnr/img4.png" width="478" height="309" alt="Our Harisiddhi Image 4"/> </li>
      </ul>
    </div>
    <!-- right anim bnr ends -->
    
    <div class="CB"></div>
  </div>
  <!-- wrapper ends -->
</div>
<!-- banner ends -->

<!-- top block starts -->
<div class="topBlock">
  <!-- wrapper starts -->
  <div class="wrapper">
    <!-- interview starts -->
    <div class="interview">
      <!-- title starts -->
      <div class="title">
        <a href="#">Interview</a>
      </div>
      <!-- title ends -->
      
      <!-- content starts -->
      <div class="content">
        <img src="http://www.ourharisiddhi.com/images/interview/img1.jpg" alt="Krishna Ram Maharjan" />यस हरिसिद्धि गाविसको राजनैतिक स्थितिकोवारेमा चर्चा गर्नुपर्दा यहाँ नेकपा माओवादी, नेपाली काँग्रेस, एमाले, राष्ट्रिय जनमोर्चा आदि ४ पार्टीको अस्तितव रहेको छ । यिनै पार्टीहरुले गाविसको प्रतिनिधीत्व गरीरहेका छन् । यी पार्टीहरुवीच आपसी समझदारी...<br /> 
        <a href="interview.php" class="more">[+] Read more</a>
        
        <div class="CB"></div>
        
        <!-- interview info starts -->
        <div class="interviewInfo">
          <h3>Krishna Ram Maharjan</h3>
          <p>Politician</p>
        </div>
        <!-- interview info ends -->
      </div>
      <!-- content ends -->
    </div>
    <!-- interview ends -->
    
    <!-- event starts -->
    <div class="event">
      <!-- title starts -->
      <div class="title">
        <a href="#">Our Latest Events</a>
      </div>
      <!-- title ends -->
      
      <!-- content starts -->
      <div class="content">
        <!-- event block starts -->
        <div class="eventBlock">
          <a href="#" class="eventImg"><img src="http://www.ourharisiddhi.com/images/eventImg1.jpg" alt="Mini Football Tournament" /></a>
          <h3>Mini Football Tournament</h3>
          <p>Date : 31 Bhadra - 14 Asoj</p>
          <input name="" type="button" class="btnMore" />
        </div>
        <!-- event block ends -->
        
        <!-- event block starts -->
        <div class="eventBlock" style="padding-right:0px; margin-right:0px; border-right:0px;">
          <a href="#" class="eventImg"><img src="http://www.ourharisiddhi.com/images/eventImg2.jpg" alt="Mini Football Tournament" /></a>
          <h3>Dashai Festival</h3>
          <p>Date : 7th October 2011</p>
          <input name="" type="button" class="btnMore" />
        </div>
        <!-- event block ends -->
      </div>
      <!-- content ends -->
    </div>
    <!-- event ends -->
    
    <!-- donate starts -->
    <div class="donate">
      <!-- title starts -->
      <div class="title">
        <a href="#">Donation for poor</a>
      </div>
      <!-- title ends -->
      
      <!-- content starts -->
      <div class="content">
        <a href="#" class="donateImg"><img src="http://www.ourharisiddhi.com/images/donateImg.jpg" alt="Donate for Poor" /></a>
        <p>Your Small Help Can Change someone's future.Plz do help other and it will satisfy your heavy heart helping other.</p>
        <input name="" type="button" class="btnMore" />
      </div>
      <!-- content ends -->
    </div>
    <!-- donate ends -->
    
    <div class="CB"></div>
  </div>
  <!-- wrapper ends -->
</div>
<!-- top block ends -->

<!-- wrapper starts -->
<div class="wrapper">
  <!-- main content wrapper starts -->
  <div class="mainContentWrapper">
    <!-- left content starts -->
    <div class="leftContent">
      <!-- block starts -->
      <div class="block">
        <!-- title starts -->
        <div class="title">
          <a href="#">Wallpapers</a>
        </div>
        <!-- title ends -->
        
        <!-- content starts -->
        <div class="content">
          <!-- wall block starts -->
          <div class="wallBlock">
			<h2><a href="#">Model Wallpaper</a></h2>
            <a href="#" class="wallImg"><img src="http://www.ourharisiddhi.com/images/modelThumbImg.jpg" alt="Models" /></a>
            <ul>
          	  <li><a href="#">Model Number 1</a></li>
          	  <li><a href="#">Model Number 2</a></li>
              <li style="border:0px;"><a href="#">View All</a></li>
            </ul>
          </div>
          <!-- wall block ends -->
          
          <!-- wall block starts -->
          <div class="wallBlock">
			<h2><a href="#">Glimpse of Our Harisiddhi</a></h2>
            <a href="#" class="wallImg"><img src="http://www.ourharisiddhi.com/images/harisiddhiThumbImg.jpg" alt="Models" /></a>
            <ul>
          	  <li><a href="nhuda.php">Nepal Sambat 1132 Nhuda:</a></li>
          	  <li><a href="indrajatra.php">Indra Jatra</a></li>
              <li style="border:0px;"><a href="wallpaper.php">View All</a></li>
            </ul>
          </div>
          <!-- wall block ends -->
          
          <!-- wall block starts -->
          <div class="wallBlock" style="border-right:0px;">
			<h2><a href="#">Wonders of Nepal</a></h2>
            <a href="#" class="wallImg"><img src="http://www.ourharisiddhi.com/images/nepalThumbImg.jpg" alt="Models" /></a>
            <ul>
          	  <li><a href="#">Annapurna Base Camp</a></li>
          	  <li><a href="#">Pokhara</a></li>
              <li style="border:0px;"><a href="#">View All</a></li>
            </ul>
          </div>
          <!-- wall block ends -->
          
          <div class="CB"></div>
        </div>
        <!-- content ends -->
      </div>
      <!-- block ends -->
      
      <!-- block starts -->
      <div class="block featuredVideo">
        <!-- title starts -->
        <div class="title">
          <a href="#">Featured Videos</a>
        </div>
        <!-- title ends -->
        
        <!-- content starts -->
        <div class="content">
          <!-- video block starts -->
          <div class="videoBlock">
            <a href="#" class="videoImg"><img src="http://www.ourharisiddhi.com/images/videoImg1.jpg" alt="Mask Dance(Dya Pyakha) in Dashai Festival" /></a>
            <h3><a href="#">Our Harisiddhi</a></h3>
            <p>We made a slideshow, check it out.</p>
          </div>
          <!-- video block ends -->
          
          <!-- video block starts -->
          <div class="videoBlock" style="border-right:0px;">
            <a href="#" class="videoImg"><img src="http://www.ourharisiddhi.com/images/videoImg2.jpg" alt="Mask Dance(Dya Pyakha) in Dashai Festival" /></a>
            <h3><a href="#">Mini Football Tournament</a></h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          </div>
          <!-- video block ends -->
          
          <div class="CB"></div>
          
          <!-- border style starts -->
          <div class="borderStyle">
            <input name="" type="button" class="btnViewAll" />
          </div>
          <!-- border style ends -->
          
          <div class="CB"></div>
        </div>
        <!-- content ends -->
      </div>
      <!-- block ends -->
      
      <!-- block starts -->
      <div class="block newsArticle">
        <!-- title starts -->
        <div class="title">
          <a href="#">News &amp; Articles</a>
        </div>
        <!-- title ends -->
        
        <!-- content starts -->
        <div class="content">
          <!-- news block starts -->
          <div class="newsBlock">
            <a href="#" class="newsImg"><img src="images/newsImg4.jpg" alt="Mini Football Tournament 2068" /></a>
            <!-- news content starts -->
            <div class="newsContent">
              <h3>Daboo Magazine</h3>
              <p>The first magazine with the contents related to our village Harsiddhi is soon to be released. The group of "36 youth group" ...</p>
              <a href="daboo_magazine.php" class="more">[+] Read more</a>
            </div>
            <!-- news content ends -->
            <div class="CB"></div>
          </div>
          <!-- news block ends -->
          
          <!-- news block starts -->
          <div class="newsBlock" style="padding-bottom:10px;">
            <a href="#" class="newsImg"><img src="images/newsImg3.jpg" alt="Dashain Festival" /></a>
            <!-- news content starts -->
            <div class="newsContent">
              <h3>Nhu Dan 1132:</h3>
              <p>"Vintuna: du vintuna !!!.. Nhu dan: 1132 ya vintuna" !! This years' nhu dan: festivity has been fixed on 10th Kartik...</p>
              <a href="nhuda1132.php" class="more">[+] Read more</a>
            </div>
            <!-- news content ends -->
            <div class="CB"></div>
          </div>
          <!-- news block ends -->
          
          <div class="CB"></div>
          
          <!-- border style starts -->
          <div class="borderStyle">
            <input name="" type="button" onClick="location.href='articles.php'" class="btnViewAll" />
          </div>
          <!-- border style ends -->
          
          <div class="CB"></div>
        </div>
        <!-- content ends -->
      </div>
      <!-- block ends -->
      
      <div class="CB"></div>
      
      <!-- block starts -->
      <div class="block">
        <!-- title starts -->
        <div class="title">
          <a href="#">Window shopping / Latest Products on Our Harisiddhi</a>
        </div>
        <!-- title ends -->
        
        <!-- content starts -->
        <div class="content">
          <p class="shoppingStyle">If you are planning for shopping you can also get you order from 1 click. you can shop from our website. Down below are some of the products for shopping.</p>
          
          <!-- product block starts -->
          <div class="productBlock">
            <a href="#"><img src="http://www.ourharisiddhi.com/images/products/img1.jpg" alt="Product 1" /></a>
            <h3><a href="#">Twilight Earflap Hat</a></h3>
            <p>OurHarisiddhi.com</p>
          </div>
          <!-- product block ends -->
          
          <!-- product block starts -->
          <div class="productBlock">
            <a href="#"><img src="http://www.ourharisiddhi.com/images/products/img2.jpg" alt="Product 2" /></a>
            <h3><a href="#">Wedding Shoes</a></h3>
            <p>OurHarisiddhi.com</p>
          </div>
          <!-- product block ends -->
          
          <!-- product block starts -->
          <div class="productBlock">
            <a href="#"><img src="http://www.ourharisiddhi.com/images/products/img3.jpg" alt="Product 3" /></a>
            <h3><a href="#">Newari Cardigan Sweater</a></h3>
            <p>OurHarisiddhi.com</p>
          </div>
          <!-- product block ends -->
          
          <!-- product block starts -->
          <div class="productBlock">
            <a href="#"><img src="http://www.ourharisiddhi.com/images/products/img4.jpg" alt="Product 4" /></a>
            <h3><a href="#">Pashmina Shawl</a></h3>
            <p>OurHarisiddhi.com</p>
          </div>
          <!-- product block ends -->
          
          <div class="CB"></div>
        </div>
        <!-- content ends -->
      </div>
      <!-- block ends -->
    </div>
    <!-- left content ends -->
    
    <!-- right content starts -->
    <div class="rightContent">
      <a href="#" class="adStyle"><img src="http://www.ourharisiddhi.com/images/ad/ad1.jpg" alt="Advertise with us" /></a>
      <a href="http://www.nepstyl-kreation.com" class="adStyle"><img src="http://www.ourharisiddhi.com/images/ad/ad2.jpg" alt="NepStyl Kreation Media" /></a>
      
      <!-- advertisement starts -->
      <div class="advertisement">
		<?php include('include/ads.php'); ?>
      </div>
      <!-- advertisement ends -->
    </div>
    <!-- right content ends -->
    
    <div class="CB"></div>
  </div>
  <!-- main content wrapper ends -->
</div>
<!-- wrapper ends -->

<!-- directory starts -->
<div class="directory">
  <!-- directory hdr starts -->
  <div id="directoryHdr"></div>
  <!-- directory hdr ends -->
    
  <!-- directory content starts -->
  <div id="directoryContent">
	<!-- wrapper starts -->
    <div class="wrapper">
	  <?php include('include/directory.php'); ?>
      <div class="CB"></div>
	</div>
    <!-- wrapper ends -->
  </div>
  <!-- directory content ends -->
</div>
<!-- directory ends -->

<!-- footer starts -->
<div class="footer">
  <!-- wrapper starts -->
  <div class="wrapper">
    <?php include('include/footer.php'); ?>    
  </div>
  <!-- wrapper ends -->
</div>
<!-- footer ends -->




<div style="display:none;"><script charset="UTF-8" src="http://widget24.com/code/statistics-summary?data%5BWidget%5D%5Bdescription%5D=Statistics&data%5BWidget%5D%5Burl%5D=http%3A%2F%2Fwww.ourharisiddhi.com&data%5BWidget%5D%5Bstyle%5D=style_2&data%5BWidget%5D%5Bcss%5D=white&data%5BWidget%5D%5Bcolor%5D=%23336699&data%5BWidget%5D%5Bicons%5D=1&data%5BWidget%5D%5Btypes%5D%5B%5D=pageviews&data%5BWidget%5D%5Btypes%5D%5B%5D=visits&data%5BWidget%5D%5Btypes%5D%5B%5D=visits_day&data%5BWidget%5D%5Btypes%5D%5B%5D=pagerank" type="text/javascript"></script>
<a href="http://widget24.com/widget/statistics-summary" title="Statistics summary for website">Statistics summary for website</a></div>

<div style="text-align:center; display:none;">
<a href="http://www.prchecker.info/" title="Display Pagerank" target="_blank">
<img src="http://pr.prchecker.info/getpr.php?codex=aHR0cDovL291cmhhcmlzaWRkaGkuY29t&tag=3" alt="Display Pagerank" style="border:0;" /></a>
</div>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-24320959-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script> 


</body>
</html>
