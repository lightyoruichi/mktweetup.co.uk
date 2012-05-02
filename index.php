<?php
  $venue = "allbarone";
  $venue_googlemaps_url = "http://maps.google.co.uk/maps?q=all+bar+one,+MK9+2EA&hl=en&sll=52.038818,-0.763013&sspn=0.007662,0.010643&hq=all+bar+one,+MK9+2EA&t=m&z=15";

  $tweetup_date = strtotime("first Thursday of this month 8pm");
  
  if(strtotime('now') > $tweetup_date){
    $tweetup_date = strtotime("first Thursday of next month 8pm");
  }
?><!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <title>MK Tweetup - The home of Milton Keynes geeks, established 2009</title>

  <meta name="description" content="A monthly meeting for web designers, developers, digital creatives, photographers, artists, internet professionals and indeed anyone from in and around Milton Keynes (MK) and the surrounding areas.">

  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="/css/style.css">

  <meta property="og:title" content="MK Tweetup" />
  <meta property="og:description" content="A monthly meeting for web designers, developers, digital creatives, photographers, artists, internet professionals and indeed anyone from in and around Milton Keynes (MK) and the surrounding areas." />
  <meta property="og:image" content="http://mktweetup.co.uk/img/assets/header_logo.png" />

  <meta property="image_src" content="http://mktweetup.co.uk/img/assets/header_logo.png" />
 
  <meta name="DC.title" content="MK:Tweetup">
  <meta name="DC.subject" content="A monthly meeting for web designers, developers, digital creatives, photographers, artists, internet professionals and indeed anyone from in and around Milton Keynes (MK) and the surrounding areas.">
  <meta name="DC.creator" content="Bitmode Ltd - http://bitmodelabs.com">
   
  <meta name="geo.position"   content="52.059447, -0.830169">
  <meta name="geo.country"  content="GB">
  <meta name="geo.region"   content="GB-MIK">
  <meta name="geo.placename"  content="Milton Keynes, United Kingdom">

  <script src="/js/libs/modernizr-2.5.3.min.js"></script>
</head>
<body>
  
  <div id="container">

    <header>
        <hgroup>
          <h1>MKTweetup</h1>
        </hgroup>
        <p>
          <span>The home</span> <span>of</span> <span>MK based</span><span>geeks!</span>
        </p>
    </header>

    

    <div id="main" role="main">

        <article class="primary">
          Next tweetup <time><span class="day"><?php echo date("j", $tweetup_date);?>
<sup><?php echo date("S", $tweetup_date);?></sup></span> <span class="month"><?php echo date("M", $tweetup_date);?></span> <span class="year"><?php echo date("Y", $tweetup_date);?></span> <span class="time">8pm</span></time>
        </article>

        <article class="secondary" >
            <a href="<?php echo $venue_googlemaps_url ?>" title="View the MK Tweetup location on Google Maps." class="map" data-state="0" style="background-image: url(/img/<?php echo $venue?>_map.png)">
              View on Google maps
            </a>
            
        </article>

        <div id="map_information">
              <h3>All Bar One</h3>
              
              <a href="#" class="close">Close</a>

              <a href="<?php echo $venue_googlemaps_url ?>" class="streetview">
                <img src="/img/<?php echo $venue?>_streetview.jpg" title="View on Google Maps" />
              </a>

              <address>
                Bouverie Square<br/>
                201 Midsummer Boulevard,<br/>
                Milton Keynes<br/>
                MK9 1EA
              </address>
              <tel>01908 606 07</tel>

              <a href="<?php echo $venue_googlemaps_url ?>" class="button">View on Google Maps</a>
        </div>

        <article class="tertiary">
            <h2>MK:tweetup</h2>
            <p>is a monthly meeting for web designers, developers, digital creatives, photographers, artists, internet professionals and indeed anyone from in and around Milton Keynes (MK) and the surrounding areas.</p>
        </article>

        <nav>
          <ul>
            <li>
              <a href="http://twitter.com/mktweetup" title="Follow the Milton Keynes Tweetup on Twitter" class="twitter">Twitter</a>
            </li>
            <li>
              <a href="https://twitter.com/#!/mktweetup/mk-tweetup-attendees" title="View our regular attendees" class="attendees">Attendees</a>
            </li>
            <li>
              <a href="http://mkhackday.com" title="Find out about MK Hackday" class="mkhackday">MKHackday</a>
            </li>
            <li>
              <a href="http://bitmodelabs.com" title="Site designed and developed by Bitmode Ltd." class="bitmode">Bitmode</a>
            </li>
          </ul>
        </nav>
    </div>
    <footer>
      
        <div id="subscribe">
          <p>If you’re not like us and basically check twitter all day every day  then why not subscribe to our email newsletter that comes to you once a month and we’ll let you know when and where the next event will be. We promise (like properly swear!) that we will not provide your details to any third party or spam you.</p>
          <form action="http://mailer.bitmodelabs.com/t/r/s/wjrhrj/" method="post" id="subForm">
            
            <div>
            <input type="text" name="cm-wjrhrj-wjrhrj" id="wjrhrj-wjrhrj" placeholder="Email" />

            <input type="submit" value="Subscribe" class="button" />
            </div>
          </form>

          <div id="sponsor">
            Sponsored by:  
            <ul>
              <li><a href="http://www.crunch.co.uk/?utm_source=PAP&utm_medium=224x130&utm_campaign=symbols&amp;a_aid=bitmode&amp;a_bid=248d0937" id="crunch">Crunch</a></li>
              <li><a href="http://campaignmonitor.com" id="campaign_monitor" title="Campaign Monitor - Email marketing software for web designers">Campaign Monitor <img style="border:0" src="http://affiliatenetwork.crunch.co.uk/scripts/imp.php?a_aid=bitmode&amp;a_bid=248d0937" width="1" height="1" alt="" /></a></li>
              
            </ul>
          </div>

          <p>Copyright Bitmode Ltd. All rights reserved, MKTweetup is a non-profit event and is run voluntarily to benefit the local community.</p>

        </div>
    </footer>
  </div>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="/js/libs/jquery-1.7.1.min.js"><\/script>')</script>

  <script>
    $('<img />')
    .attr('src', '/img/<?php echo $venue?>_background.png')
    .load(function(){
        $("#container").css('background-image', 'url(/img/<?php echo $venue?>_background.png)').css('backgroundPosition', '0 0');
    });

    $("a.map").on('mouseenter', function(e){
        $("#map_information").fadeIn();     
    });
    $("#map_information a.close").on('click', function(e){
        e.preventDefault();
        $("#map_information").fadeOut();     
    });
  </script>
  
  <script>
    var _gaq=[['_setAccount','UA-12544305-1'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
</body>
</html>