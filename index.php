<?php
  $venue = "allbarone";
  $venue_googlemaps_url = "http://maps.google.co.uk/maps?q=weatherspoon,+mk9&hl=en&ll=52.037135,-0.767037&spn=0.007451,0.009313&sll=52.037693,-0.767601&sspn=0.029805,0.037251&t=m&hq=weatherspoon,&hnear=MK9,+United+Kingdom&z=17";

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

  <meta name="description" content="">


  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="/css/style.css">

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

    </div>
    <footer>
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