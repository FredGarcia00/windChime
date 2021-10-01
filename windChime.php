<?

$exitLink = 'https://tidycarcan.com/product/salespage.php?affId='.$_GET['affId'].'&c1='.$_GET['c1'].'&c2='.$_GET['c2'];

?>
<html>
<head>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<? date_default_timezone_set('America/Los_Angeles'); ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">

<script src="../js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/jquery-ui.min.js"></script>
<script src="../js/angular.min.js"></script>

<link rel="icon" type="image/png" href="../img/icon.png">

<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">



<style type="text/css">
body{
  margin: 0 0 0 0;
  font-family: 'Open Sans', sans-serif;
  background: #d5d4d0;
  padding-top: 15px;
}
a:link,
a:visited{
	text-decoration: inherit;
	color: inherit;
}
a.articleLink:link,
a.articleLink:visited{
  text-decoration: inherit;
	color:#205cc3;
  font-weight: bold;
}
a.articleLink:hover{
  color:#2b75f5;
  text-decoration: underline;
}
.clear{
	clear: both;
}
.addedTop{
  width: 100%;
  height: auto;
  text-align: center;
  color: #333;
  font-size: 17px;
  padding: 4px 0px;
}
#mainBox{
  width: 1600px;
  height: auto;
  background: #fff;
  margin: 0 auto;
  box-shadow: 0px 0px 7px #000;
}
#header{
  width: 100%;
  height: auto;
  margin: 0 auto;
  border-bottom: 2px solid #ccc;
  padding-top: 7px;
  padding-bottom: 7px;
}
#headerInner{
  width: 1250px;
  height: auto;
  margin: 0 auto;
}
#logoLeft{
  height: 70px;
  width: auto;
  float: left;
}
#textRight{
  height: 70px;
  width: auto;
  float: right;
  line-height: 70px;
  font-style: italic;
  color: #333;
  font-size: 17px;
}
#titleBox{
  width: 100%;
  height: auto;
  margin: 0 auto;
}
#titleInner{
  width: 1250px;
  height: auto;
  margin: 0 auto;
  text-align: center;
  padding-top: 20px;
}
#headline{
  width: 100%;
  height: auto;
  font-size: 34px;
  font-weight: bold;
  color: #222;
}
#author{
  width: 300px;
  height: auto;
  margin: 0 auto;
  font-size: 14px;
  font-weight: bold;
  color: #555;
  margin-top: 15px;
  padding-top: 10px;
  border-top: 1px solid #ccc;
}
#articleBox{
  width: 100%;
  height: auto;
  margin: 0 auto;
}
#articleInner{
  width: 1250px;
  height: auto;
  margin: 0 auto;
  padding-top: 35px;
}
#sidebar{
  width: 300px;
  height: auto;
  float: right;
}
.sidebarTitle{
  width: 100%;
  height: auto;
  font-size: 20px;
  text-align: left;
  font-weight: bold;
  color: #333;
  padding-bottom: 10px;
  border-bottom: 2px solid #ccc;
}
.sidebarNative{
  width: 100%;
  height: auto;
  margin: 0 auto;
  margin-top: 15px;
}
.nativeImg{
  width: 45%;
  height: auto;
  float: left;
}
.nativeText{
  width: 52%;
  height: auto;
  float: right;
  font-size: 13px;
  text-align: left;
  color: #444;
}
.nativeText:hover{
  text-decoration: underline;
}


.sidebarImg{
  width: 100%;
  height: auto;
  margin-top: 15px;
}
.sideBarText{
  width: 100%;
  height: auto;
  font-size: 17px;
  text-align: left;
  color: #333;
  margin-top: 10px;
}
#mainContent{
  width: 800px;
  height: auto;
  float: left;
  padding-bottom: 30px;
}
.articleImg{
  width: 100%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
}
.articleImgsmall{
  width: 72%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
}
.articleSubheader{
  width: 100%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 15px;
  font-size: 22px;
  font-weight: bold;
  line-height: 28px;
  color: #17191c;
}
.blockQuote{
  width: calc(90% - 50px);
  height: auto;
  margin: 0 auto;
  border-left: 10px solid #ccc;
  background-color: #f9f9f9;
  background-image: url(../img/blockquote.png);
  background-repeat: no-repeat;
  line-height: 28px;
	padding: 10px 20px 10px 40px;
  margin-bottom: 20px;
}
.articleText{
  width: 100%;
  height: auto;
  margin: 0 auto;
  /*padding-bottom: 20px;*/
  font-size: 17px;
  line-height: 26px;
  color: #333;
}
.articleIndent{
  width: 90%;
  height: auto;
  margin: 0 auto;
  /*padding-bottom: 20px;*/
  font-size: 17px;
  line-height: 26px;
  color: #333;
}
.articleButton{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  padding: 8px;
  color: #fff;
  font-family: 'Open Sans';
  font-size: 18px;
  font-weight: bold;
  text-align: center;
  background-image: linear-gradient(to bottom,#f0ad4e 0,#eb9316 100%);
  background-repeat: repeat-x;
  border: 1px solid #e67919;
  border-radius: 4px;
}

.commentBreak{
	width:100%;
	border-bottom: 1px solid #198fff;
	margin:0 auto;
	height:80px;
}
#map {
  width: 700px;
  height: 405px
}
#footer{
  width: 100%;
  height: auto;
  margin: 0 auto;
  margin-top:60px;
  background: #5a787c;
}
#footerInner{
  width: 1040px;
  height: auto;
  margin: 0 auto;
  padding: 25px 0px;
  color: #fff;
  font-family: 'Roboto';
  font-size: 14px;
  text-align: center;
}
.linkLine{
  width: 300px;
  height: auto;
  margin: 0 auto;
  padding-top: 15px;
  color: #fff;
  font-family: 'Roboto';
  font-size: 14px;
  text-align: center;
}
.articleSubimg{
  width: 500px;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
}
.imageSub{
  width: 100%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
  text-align: center;
  font-size: 16px;
  color: #777;
  font-style: italic;
}
li{
  padding-bottom: 15px;
}
.finalBox{
  width: calc(100% - 42px);
  height: auto;
  margin: 0 auto;
  padding: 30px 20px;
  border: 1px solid #dedede;
  margin-top: 30px;
  margin-bottom: 30px;
}
.articleButton{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  padding: 10px;
  color: #fff;
  font-family: 'Roboto';
  font-size: 30px;
  text-align: center;
  background: #63d021;
  border: none;
  outline: none;
}
.articleButton:hover{
  background: #49a511;
}
.updateBox{
  width: 100%;
  height: auto;
  margin: 0 auto;
  margin-bottom: 20px;
}
.updateTop{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  background: #459ef7;
  color: #fff;
  padding: 20px 10px;
  border-radius: 5px;
  font-size: 20px;
  font-weight: 700;
}
.updateBot{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  background: #f4f4c3;
  color: #111;
  padding: 20px 10px;
  border-radius: 2px;
  font-size: 18px;
  font-weight: 400;
}
.paperBox{
  width: calc(100% - 50px);
  height: auto;
  margin: 0 auto;
  padding: 25px;
  margin-bottom: 25px;
  background: url(../img/paperbg.jpg);
  background-repeat: repeat;
  box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.8);
}
.paperTitle{
  width: 100%;
  height: auto;
  color: #222;
  font-size: 24px;
  font-weight: 700;
  text-align: center;
  padding-bottom: 20px;
}
.paperText{
  width: 100%;
  height: auto;
  color: #222;
  font-size: 18px;
  font-weight: 400;
  text-align: left;
  padding-bottom: 20px;
}
.reviewBox{
  width: calc(100% - 50px);
  height: auto;
  padding: 25px;
  border-bottom: 1px solid #ddd;
}
.namePic{
  width: 34px;
  height: 34px;
  background: #a7a7a7;
  border-radius: 50%;
  float: left;
  position: relative;
  text-align: center;
  color: #fff;
  line-height: 34px;
  font-size: 20px;
}
.nameCheck{
  width: 12px;
  height: 12px;
  position: absolute;
  right: 0;
  bottom: 0;
  z-index: 10;
}
.dateRight{
  width: 120px;
  height: auto;
  float: right;
  font-size: 14px;
  color: #777;
}
.reviewHeader{
  width: calc(100% - 184px);
  height: 34px;
  float: left;
  margin-left: 15px;
}
.rh1{
  width: 100%;
  height: 20px;
  text-align: left;
  font-size: 14px;
  color: #777;
  line-height: 20px;
}
.rh2{
  width: 100%;
  height: 14px;
}
.reviewText{
  width: 100%;
  height: auto;
  margin-top: 15px;
  font-size: 16px;
  font-style: italic;
  color: #333;
}


@media screen and (max-width: 1600px) {
  body{
    padding-top: 10px;
  }
  #mainBox{
    width: 100%;
  }
  #headerInner,
  #titleInner,
  #articleInner{
    width: 1250px;
  }
  #mainContent{
    width: 750px;
  }
}

@media screen and (max-width: 1250px) {
  #headerInner,
  #titleInner,
  #articleInner{
    width: 95%;
  }
  .barLeft{
    width: 120px;
    font-size: 15px;
  }
  .barRight{
    width: 170px;
    font-size: 12px;
  }
  .barCenter{
    width: calc(100% - 290px);
    font-size: 11px;
  }
  #mainContent{
    width: 100%;
  }
  #sidebar{
    display: none;
  }
  #footerInner{
    width: 95%;
    font-size: 12px;
    padding: 20px 0px;
  }
  .imgSubheader{
    padding-bottom: 12px;
    font-size: 18px;
    line-height: 24px;
  }
  .articleImgsmall{
    width: 80%;
  }
  .articleSubheader{
    padding-bottom: 12px;
    font-size: 26px;
    line-height: 30px;
  }
  .articleText,
  .articleIndent{
    padding-bottom: 12px;
    font-size: 22px;
    line-height: 32px;
  }
  .articleButton{
    font-size: 24px;
  }
  #footerInner{
    width: 95%;
    font-size: 11px;
    padding: 15px 0px;
  }
  #map{
    transform: scale(0.8);
    margin-left: -80px;
  }
  .updateTop{
    width: calc(100% - 16px);
    padding: 16px 8px;
    font-size: 18px;
  }
  .updateBot{
    width: calc(100% - 16px);
    padding: 16px 8px;
    font-size: 17px;
  }
  .rh1{
    font-size: 11px;
  }
}
@media screen and (max-width: 750px) {
  .blockQuote{
		font-size:18px;
		line-height:24px;
  }
  .articleSubimg{
    width: 80%;
  }
}
</style>


</head>
<body>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '552365194970012');
fbq('track', 'PageView');
fbq('track', 'ViewContent', {
  content_ids: ['<?php echo $_GET['utm_term'] ?>'],
  content_type: 'product',
  content_category: ['tidycar']
});
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=552365194970012&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->



<div id="mainBox">
  <div id="header">
    <div id="headerInner">
      <div id="logoLeft">
        <img src="../img/logo1.png" height="100%" />
      </div>
      <div id="textRight">
        Advertisement - Sponsored by TidyCar
      </div>
      <div class="clear"></div>
    </div>
  </div>



  <div id="titleBox">
    <div id="titleInner">
      <div id="headline">
        Wind Chime
      </div>
      <div id="author">
        Joseph Lewis | <?=date('l\, F d\, Y',strtotime('-9 days'));?>
      </div>
    </div>
  </div>


  <div id="articleBox">
    <div id="articleInner">
      <div id="sidebar">
        <div class="sidebarTitle">
          Sponsored By:
        </div>
        <div class="sidebarImg">
          <a href="https://about.att.com/pages/5g/how-5g-works.html" target="_blank">
            <img src="../img/attban.jpg" width="100%" />
          </a>
        </div>
        <div class="sidebarImg">
          <a href="https://www.mazdausa.com/vehicles/2020-cx-3" target="_blank">
            <img src="../img/mazdaban.jpg" width="100%" />
          </a>
        </div>
      </div>

      <div id="mainContent">
    <div class="articleImg">
      <img src="../img/Splash-Image-CarTrash.jpg" width="100%" />
    </div>
    <div class="articleText">
      <p>The power of memory is like a drug.</p>

      <p>I don’t advocate drug use, but I do understand the wisdom in this statement. I went through a life-altering experience recently that I didn’t think I could recover from. My father passed away a little over a year ago. I don’t need to go into the depths of grief and sorrow that I was drowning in for that first six months…we’ve all lost someone, and that pain is something that never really heals.</p>

      <p>Fortunately for me, I was able to reconnect with my father in a surprising way.</p>

      <p>I went to therapy and one of the first things I was told was not to bottle up my feelings, and also to try to find healthy ways to express myself. To try to relax. Easier said than done, right? I decided I’d spend some time in my father’s garden. It was his favorite place on earth, as he frequently told me. I walked through the clusters of beautiful plants and their bright whites, pinks and yellows, a slight breeze carrying their fresh, super-oxygenated scents in a gentle wave over me. I found myself wondering why I never thought to spend some time with him out here when he was alive. Why didn’t I ever take the time to learn about these flowers, what they were called, how had he taken them from seeds and planted them, cared for them until they could grow into such an aesthetic array of beauty?</p>

      <p>I heard the most soothing sound at that very moment. </p>

      <p>	I couldn’t see the source of the sound, not at first. It was a gentle tinkling, and my brain in that moment could only picture a star. Polaris, the north star. My father had shown this to me one clear night when I was just a girl, almost thirty years ago.</p>

      <p>Tears ran down my face, and I smiled.</p>

      <p>The sound was so beautiful. It stirred a sense of calm deep within me.</p>

	<div class="articleImgsmall">
      <img src="../img/CarTrash2-1.jpg" width="100%" />
      </div>

      <p>Almost a full minute passed when I realized the sound wasn’t in my head. It was a real sound, floating over the garden, passing between the flowers as they danced in the breeze.</p>

      <p>I tracked it down to the most curious wind chime.</p>

      <p>It hung on the porch at the threshold of the garden, a simple elegance that I had overlooked. As the breeze picked up again, the chime shifted, emitting that mellifluous series of tones that had so enraptured me a moment ago.</p>

      <p>I was taken with it. I decided that bring it with me back to my own home and hang it on my porch.</p>

      <p>Imagine my despair when a week later one of my kids decided it was a good idea to pull it down and use some of the chimes as drumsticks. Yes, they took the scissors out of their craft kit and cut ALL of the tubes off. </p>

      <p>	Looking at the wreckage of the wind chime, I knew I couldn’t fix it. I set to the internet immediately to try to locate another one, for the first time wondering where my father had gotten this particular wind chime.</p>

      <p>That’s when I found out about [Product Name].</p>

      <div class="blockQuote">
         <i>““Oh, man,” he said, “we all deal with that problem. I couldn’t believe it until it happened to me, but I got a one star review because one of my riders left a banana peel and chewing tobacco flakes on the seat, and I didn’t see it until it was too late. You have got to get yourself a <a class="articleLink" href="<?=$exitLink;?>">TidyCar Car Trash Can</a>. Once you have it, you’ll be kicking yourself that you didn’t get it earlier.”
		Wow, I thought. That does sound like an easy fix.
		“How much is it?”
		He smiled. “It’s not expensive at all. You get a discount if you order it straight from the company website, and I’m telling you, it’s nice. People instinctually use it because it’s so convenient, and you just empty it out at the end of your shift.”
		</i>
      </div>

      <p>That made the wait at the DMV a lot less annoying. I thanked him for the information and I began to research the TidyCar Car Trash Can right away. If it was everything this guy claimed it was, then it really was a no-brainer.</p>

      </div>
    <div class="articleSubheader">
      What Is It And How Does It Work?
    </div>
    <div class="articleImgsmall">
      <img src="../img/CarTrash1.jpg" width="100%" />
    </div>
    <div class="articleText">
      <p>The <a class="articleLink" href="<?=$exitLink;?>">TidyCar Car Trash Can</a> is a versatile container for all trash items that fits neatly into any vehicle. Structurally designed to prevent collapse or tipping over, plus a built-in waterproof interior so you don’t have to worry about drink spillage, this is the best trash can for your car.</p>

      <p>TidyCar Car Trash Can has an incredible 2 gallon capacity, and comes with an adjustable buckle so you can fasten it around your center console. The opening is large enough for most drink containers, and if you need to dispose of a fast food bag or something larger, simply lift the easy access lid’s Velcro lip to open the top of the bag.</p>

      <p>There’s no need to let garbage accumulate in your vehicle; TidyCar Car Trash Can provides a way to collect excess papers, drink cups, food wrappers and anything else you don’t need in one simple, waterproof space that is easy to empty out and clean once you’re done driving.</p>
    </div>
    <div class="articleImgsmall">
      <img src="../img/CarTrash2.jpg" width="100%" />
    </div>
    <div class="articleSubheader">
      But…Is It Really Worth All This Hype?
    </div>
    <div class="articleText">
      <p>So far, the <a class="articleLink" href="<?=$exitLink;?>">TidyCar Car Trash Can</a> has sold over 10 million units directly to consumers, even without the help of being sold in stores. The TidyCar Car Trash Can has been SELLING OUT every time new stock becomes available, it’s become THAT popular.</p>

      <p>And, it’s all from word of mouth. People just like you are loving it so much that they’re posting about it on instagram and telling everyone they know about it!</p>
    </div>
    <div class="articleImgsmall">
      <img src="../img/IGCarTrash1.jpg" width="100%" style="border: 1px solid #ddd;" />
    </div>
    <div class="articleImgsmall">
      <img src="../img/IGCarTrash2.jpg" width="100%" style="border: 1px solid #ddd;" />
    </div>
    <div class="articleText">
      <p>The TidyCar Car Trash Can has started to develop a cult following, and with over 8,000 5-star reviews, it makes sense. Here’s what customers are saying about it:</p>
    </div>
    <div class="reviewBox">
      <div class="namePic">
        M
        <div class="nameCheck">
          <img src="../img/revcheck.png" width="100%" />
        </div>
      </div>
      <div class="reviewHeader">
        <div class="rh1">
          <span style="font-weight: 700; color: #444; font-size: 15px;">Luke L.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        3/27/21
      </div>
      <div class="clear"></div>
      <div class="reviewText">
        The product was larger than I expected, in a good way ;). The materials are solid and the interior looks like it could definitely handle a few spills. The support sticks used to hold it open seem like they could fall out since there is no sleeve, but otherwise everything looks good.
      </div>
    </div>
    <div class="reviewBox">
      <div class="namePic">
        H
        <div class="nameCheck">
          <img src="../img/revcheck.png" width="100%" />
        </div>
      </div>
      <div class="reviewHeader">
        <div class="rh1">
          <span style="font-weight: 700; color: #444; font-size: 15px;">Anne A.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        3/30/21
      </div>
      <div class="clear"></div>
      <div class="reviewText">
         Love this car trashcan! Fits my 2008 Toyota Corolla. Both passenger and driver can easily reach it. Can use a regular plastic bag from Walmart to fit inside. I especially like the Velcro strip on the underside that sticks to the carpet to secure it in place. Highly Recommend! Great price!
      </div>
    </div>
    <div class="reviewBox" style="border-bottom: none;">
      <div class="namePic">
        E
        <div class="nameCheck">
          <img src="../img/revcheck.png" width="100%" />
        </div>
      </div>
      <div class="reviewHeader">
        <div class="rh1">
          <span style="font-weight: 700; color: #444; font-size: 15px;">Kim C.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        4/2/21
      </div>
      <div class="clear"></div>
      <div class="reviewText">
          I was pleasantly surprised by the quality. It might sound silly but I wanted something that would stand up to a fair amount of use as the kids and I spend a LOT of time driving and often eat on the go, creating all kinds of garbage.
			This was perfect for my needs. Good size and well designed.

      </div>
    </div>
    <div class="articleText">
      <p>After seeing the incredible reviews this product was getting and the recommendation from my brother, I knew I had to try it for myself. I logged on to the company’s <a class="articleLink" href="<?=$exitLink;?>">official website</a> and ordered one the moment it came back in stock.</p>
    </div>
    <div class="articleSubheader">
      …Here’s What I Found.
    </div>
    <div class="articleText">
      <p>The TidyCar Car Trash Can arrived in just 2 days. The installation was just as simple as I hoped it would be: I took it out of the box, unfolded it and used the adjustable strap to affix it over my center console, and it was ready to rock!</p>
	  <p>It felt so official, having this high quality trash can available in my vehicle. It may seem like a simple thing, and that’s because it is: I get so much use out of it, let me tell you. It’s one of the first things riders see when they get in my vehicle, and almost every single rider uses it instinctively; I don’t even have to point it out to them. It’s really nice, and it takes a lot of the burden of clean up off of my shoulders as the driver.</p>
      <div class="articleImg">
        <img src="../img/CarTrash3.jpg" width="100%" />
      </div>

      <p>The absolute best part of using the TidyCar Car Trash Can is how easy the clean up is. It’s large enough that I can do a six or eight hour shift without having to empty it until the end of the day. I just remove it from the car, empty the trash into a dumpster, and wipe out the interior with some disinfectant wipes. At the end of the week, I bring it inside and scrub the interior with some dish soap and leave it to air dry, and it’s ready to go for me on Monday morning. The entire cleaning process takes about five minutes—compared to the constant cleaning of my backseat I was doing before.</p>

      <p>Of course, I loved the ease and convenience of TidyCar Car Trash Can so much I bought one for my wife’s car. She used to do this cute thing where she would get a grocery bag and use that as a trash can, but there isn’t a really good place to hang the handles, and there’s been times when she put a drink cup in there, and it ended in disaster. Now, she’s got a care-free solution and never has to worry about spills or trash accumulating in her car ever again!</p>
    </div>
    <div class="articleSubheader">
      How Much Does It Cost?
    </div>
    <div class="articleText">
      <p>It’s currently on sale at their <a class="articleLink" href="<?=$exitLink;?>">official website</a> for just the price of $15.97!</p>
    </div>
    <div class="articleSubheader">
      Is It Worth It?
    </div>
    <div class="articleText">
      <p>	Of course! My wife is stuck carting the kids to and from school and all over the city for their sports. If you have kids, you know they tend to be messy—especially our kids, when they’re constantly moving between activities—and the TidyCar Car Trash Can is an easy way to cut down on that mess significantly. I can’t recommend TidyCar Car Trash Can enough. I just wish I knew about it sooner; I might have been able to save myself that three-star review!</p>

      </div>
    <div class="updateBox">
      <div class="updateTop">
        UPDATE
      </div>
      <div class="updateBot">
        <b>UPDATE <?=date('l\, F d\, Y',strtotime('-0 days'));?></b> - Ever since <a class="articleLink" href="<?=$exitLink;?>">TidyCar</a> was featured on TV, an incredible amount of buzz has been generated and has since sold over 10 million units. Due to its popularity and positive reviews, the company is so confident in their product that they are now offering a <b>one-time discount of 50% off. To see if they are still available, click on the button below.</b>
      </div>
    </div>


    <a href="<?=$exitLink;?>">
      <div class="articleButton">
        Apply Discount & Check Availability >>
      </div>
    </a>





        <div class="commentBreak" style="margin-bottom: 30px;"></div>
        <!-- Load comments -->
        <?
        $commentsUrl= 'http://blackin.top/comments/tidycar.php'; // comments location
        $commentsCh = curl_init();
        $commentsTimeout = 5;
        curl_setopt($commentsCh,CURLOPT_URL,$commentsUrl);
        curl_setopt($commentsCh,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($commentsCh,CURLOPT_CONNECTTIMEOUT,$commentsTimeout);
        $commentsData = curl_exec($commentsCh);
        curl_close($commentsCh);
        echo $commentsData;
        ?>
        <!-- End comments -->







      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>







<!--Footer-->
<div id="footer">
  <div id="footerInner">
    THIS IS AN ADVERTISEMENT AND NOT AN ACTUAL NEWS ARTICLE, BLOG, OR CONSUMER PROTECTION UPDATE
    <br /><br />
    MARKETING DISCLOSURE: This website is a market place. As such you should know that the owner has a monetary connection to the product and services advertised on the site. The owner receives payment whenever a qualified lead is referred but that is the extent of it.
    <br /><br />
    ADVERTISING DISCLOSURE: This website and the products & services referred to on the site are advertising marketplaces. This website is an advertisement and not a news publication. Any photographs of persons used on this site are models. The owner of this site and of the products and services referred to on this site only provides a service where consumers can obtain and compare.
    <br /><br />
    © <?=date('Y'); ?> All Rights Reserved.
    <br /><br />
      <a href="../contact.php" class="textLink" target="_blank" style="color: white;">Contact Us</a> -
      <a href="../terms.php" class="textLink" target="_blank" style="color: white;">Terms & Conditions</a> -
      <a href="../privacy.php" class="textLink" target="_blank" style="color: white;">Privacy Policy</a>
    <? include_once('../dmca.php'); ?>
  </div>
</div>
</body>
</html>
