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
      Aubree Valentine | <?=date('l\, F d\, Y',strtotime('-9 days'));?>
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
    <div class="articleImg" >
      <img src="img/splash.jpg" width="100%" />
    </div>
    <div class="articleText">
      <p>The power of memory is like a drug.</p>

      <p>Aubree doesn't advocate drug use, but she does understand the wisdom in this statement. She went through a life-altering experience recently that she didn’t think she could recover from. Aubree's father passed away a little over a year ago. She doesn't need to go into the depths of grief and sorrow that she was drowning in for that first six months…we’ve all lost someone, and that pain is something that never really heals.</p>

      <p>Fortunately for Aubree, she was able to reconnect with her father in a surprising way.</p>

      <p>Aubree went to therapy and one of the first things she was told was not to bottle up her feelings, and also to try to find healthy ways to express herself. To try to relax. Easier said than done, right? she decided she'd spend some time in her father’s garden. It was his favorite place on earth, as he frequently told her. Aubree walked through the clusters of beautiful plants and their bright whites, pinks and yellows, a slight breeze carrying their fresh, super-oxygenated scents in a gentle wave over her. Aubree found herself wondering why she never thought to spend some time with him out there when he was alive. Why didn’t she ever take the time to learn about these flowers, what they were called, how had he taken them from seeds and planted them, cared for them until they could grow into such an aesthetic array of beauty?</p>

      <p>Aubree heard the most soothing sound at that very moment. </p>

      <p>	She couldn’t see the source of the sound, not at first. It was a gentle tinkling, and her brain in that moment could only picture a star. Polaris, the north star. Her father had shown this to her one clear night when she was just a girl, almost thirty years ago.</p>

      <p>Tears ran down her face, and she smiled.</p>

      <p>The sound was so beautiful. It stirred a sense of calm deep within her.</p>

	<div class="articleImgsmall">
      <img src="img/enjoy.jpg" width="100%" />
      </div>

      <p>Almost a full minute passed when Aubree realized the sound wasn’t in her head. It was a real sound, floating over the garden, passing between the flowers as they danced in the breeze.</p>

      <p>She tracked it down to the most curious <a class="articleLink" href="<?=$exitLink;?>">wind chime</a>.</p>

      <p>It hung on the porch at the threshold of the garden, a simple elegance that she had overlooked. As the breeze picked up again, the chime shifted, emitting that mellifluous series of tones that had so enraptured her a moment ago.</p>

      <p>Aubree was taken with it. She decided to bring it with back to her own home and hang it on the porch.</p>

      <p>Imagine her despair when a week later one of her kids decided it was a good idea to pull it down and use some of the chimes as drumsticks. Yes, they took the scissors out of their craft kit and cut ALL of the tubes off.</p>


      <div class="blockQuote">
         <i>"Looking at the wreckage of the wind chime, I knew I couldn’t fix it. I set to the internet immediately to try to locate another one, for the first time wondering where my father had gotten this particular wind chime." said Aubree.
		  </i>
      </div>
      <p>That’s when she found out about <a class="articleLink" href="<?=$exitLink;?>">AriaBreeze</a>.</p>


      </div>
    <div class="articleSubheader">
      What Is It And How Does It Work?
    </div>
    <div class="articleImgsmall" style="width:10%;">
      <img src="img/product.jpg" width="100%" />
    </div>
    <div class="articleText">
      <p>The <a class="articleLink" href="<?=$exitLink;?>">AriaBreeze</a> is a wind chime for people who actually LIKE their neighbors.</p>

      <p>Don’t be that guy or gal who hangs up a noisy contraption of stainless steel tubes that bang together to make a sound like a robot in the throes of a grand mal seizure. If there’s no musicality, no soul in the sound, it’s just a sound—and that might be why your neighbors are giving you those dirty looks every time a breeze sets off those ear-grating wind chimes of the past.</p>

      <p>The AriaBreeze is a medium sized chime, measuring a total of 29” from the top of the hanging ring to the bottom of the wind-catcher. Its 6 aluminum tubes measure from 10”-14” and have been expertly calibrated to create pleasing, harmonies.</p>

      <p>AriaBreeze was designed by a concert violinist whose musical passion has been felt by the world for generations. This wind chime is like no other—music is the universal language of the human experience—and this wind chime has been designed to evoke a calming sensation deep within all who hear it. How can this be achieved? It’s more than the highest quality bamboo wind-catcher and aluminum tubes…it’s the magic of the pentatonic scale.</p>

      <p>After hours of study and decades of music experience, the expert sat down and wrote a five-note scale that has been proven to calm the listener. In the same way that psychologists recognize the Pavlov’s Dog effect (most animals, and most people, can be conditioned to associate a particular sound with a particular response) musicians have discovered that this particular scale universally induces a relaxed response in any person who hears it.</p>

      <p>Apply that to a wind chime, and you have the cherry on top to your favorite relaxation area. Whether you’re camping, enjoying a cold drink on a hot day on your patio or in your backyard, or if you enjoy gardening and you want to add the perfect touch to the ambiance, <a class="articleLink" href="<?=$exitLink;?>">AriaBreeze</a> is what you’ve been missing! </p>
    </div>
   
    <div class="articleSubheader">
      But…Is It Really Worth All This Hype?
    </div>
    <div class="articleText">
      <p>Now that the secret is out, the <a class="articleLink" href="<?=$exitLink;?>">AriaBreeze</a> has sold over 8 million units directly to consumers, even without the help of being sold in stores. The AriaBreeze has been SELLING OUT every time new stock becomes available, it’s become THAT popular.</p>

      <p>And, it’s all from word of mouth. People just like you are loving it so much that they’re posting about it on Instagram and telling everyone they know about it!</p>
    </div>
    <div class="articleImgsmall">
      <img src="img/igPost.jpg" width="100%" style="border: 1px solid #ddd;" />
    </div>
    <div class="articleImgsmall">
      <img src="img/igPost2.jpg" width="100%" style="border: 1px solid #ddd;" />
    </div>
    <div class="articleText">
      <p>The <a class="articleLink" href="<?=$exitLink;?>">AriaBreeze</a> has started to develop a cult following, and with over 8,000 5-star reviews, it’s easy to see why. Here’s what customers are saying about it:</p>
    </div>
    <div class="reviewBox">
      <div class="namePic">
        L
        <div class="nameCheck">
          <img src="../img/revcheck.png" width="100%" />
        </div>
      </div>
      <div class="reviewHeader">
        <div class="rh1">
          <span style="font-weight: 700; color: #444; font-size: 15px;">Logan L.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        9/27/21
      </div>
      <div class="clear"></div>
      <div class="reviewText">
      My wife picked this out & I wasn't super excited to get a wind chime. But after a few days of it being out back, I started to enjoy it more & more every time I heard it. This got me more interested to look at it more closely & the hexagon pattern is really nice. Modern & minimal. I have to say I am really impressed with it.
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
          <span style="font-weight: 700; color: #444; font-size: 15px;">Harold A.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        9/28/21
      </div>
      <div class="clear"></div>
      <div class="reviewText">
      I wanted a wind chime that I could enjoy so I bought this one.The construction is sturdy, the colors are beautiful, and when we have a chance to have the windows open, the chimes gently ring when breezes wend their way onto our porch. It’s awesome.
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
          <span style="font-weight: 700; color: #444; font-size: 15px;">Elena C.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        10/1/21
      </div>
      <div class="clear"></div>
      <div class="reviewText">
      These are beautiful, well crafted, and lovely sounding chimes. I bought them for myself as a birthday gift and I love them. They come in basic packaging, which is a little deceiving for the quality of the chimes. I will be buying more for my family members as I know it will make them smile as I have.

      </div>
    </div>
  
    <div class="articleSubheader">
    Aubree Tried It Herself…Here’s What She Found
    </div>
    <div class="articleText">
      <p>After Aubree discovered the <a class="articleLink" href="<?=$exitLink;?>">official website</a> where her father had gotten his wind chime, she ordered two of them on the official website. Aubree's wind chimes showed up at her door 2 days later. She was amazed…nowadays, that’s even faster than Amazon!</p>

      <div class="articleImg">
        <img src="img/unboxing.jpg" width="100%" />
      </div>

	  <p>Aubree <a class="articleLink" href="<?=$exitLink;?>">unboxed them</a>, amazed at the quality of the bamboo wind-catchers and the high quality aluminum tubes. Aubree hung one of the porch where she placed her father’s, and put the other one out by the front door. She was so relieved to have them hanging up and playing their music all day as the wind came and went…it was a sigh of relief.</p>

      <p>Beyond that, Aubree found herself spending more time enjoying her backyard and actually watching her kids play, rather than holing up inside. The music from these chimes is ethereal. That scale, the pentatonic scale they use in the AriaBreeze, really does work. Whether she's having a rough day or just missing her father, Aubree can spend as little as five or ten minutes just sitting and relaxing, letting her feelings out and her thoughts wander as the gentle tinkling of the chime passes over her.</p>

      <div class="articleImg" style="width:40%;">
        <img src="img/porch.jpg" width="100%" />
      </div>

      <p>Aubree's therapist even said this was exactly what she was talking about.</p>

      <p>A healthy way to deal with her feelings, something constructive and relaxing.</p>

      <p>It’s pretty easy to see all those five star reviews were there for a reason. Aubree appreciates the simplicity and the elegance of the AriaBreeze. It’s given her a better backyard experience! The visual appeal of the <a class="articleLink" href="<?=$exitLink;?>">AriaBreeze</a> over her porch is…it just looks like it belongs there. And to tell you, people take notice.</p>

      <p>Aubree has friends over just about every weekend, and it never fails they notice her new AriaBreeze, and when the wind kicks in, the response is always pleasant surprise. Things like “Wow, that’s beautiful! Where’d you get something like that?” or, “Woah, that’s the most melodic wind chime she's ever heard!” Aubree is more than happy to talk about how her father was the one who discovered it, and in a way it’s the last connection she'll ever share with him. She always points people to the official website, and she knows a few of her friends have already ordered their own AriaBreezes for their patios and backyards.</p>

      <p>To put it plainly, the AriaBreeze is exactly what Aubree needed.</p>

      <p>It works wonders for her, and she knows it will for you, too. </p>
    </div>
    <div class="articleSubheader">
      How Much Does It Cost?
    </div>
    <div class="articleText">
      <p>It’s currently on sale at the <a class="articleLink" href="<?=$exitLink;?>">official website</a> for just $34.94!</p>

      <p>Get your hands on the revolutionary AriaBreeze and experience the elegance for yourself. Don’t spend another day torturing yourself and your neighbors with those junkyard-quality chimes, enduring dirty looks from anyone in earshot. From relaxing at home in your backyard to camping in the great outdoors, AriaBreeze bathes you in a soothing melody so you can relax and enjoy yourself. Take action now and let AriaBreeze enhance your life!</p>
    </div>
   
    <div class="updateBox">
      <div class="updateTop">
        UPDATE
      </div>
      <div class="updateBot">
        <b>UPDATE <?=date('l\, F d\, Y',strtotime('-0 days'));?></b> - Ever since <a class="articleLink" href="<?=$exitLink;?>">AriaBreeze</a> was featured on TV, an incredible amount of buzz has been generated and has since sold over 8 million units. Due to its popularity and positive reviews, the company is so confident in their product that they are now offering a <b>one-time discount of 50% off. To see if they are still available, click on the button below.</b>
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
