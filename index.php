<?php 

    require 'vendor/autoload.php';
    use GeoIp2\Database\Reader;

    // This creates the Reader object, which should be reused across
    // lookups.
    $reader = new Reader('GeoIP/GeoLite2-Country.mmdb');
    
    // Use special CloudFlare Headers to get real ip of user
    $ip = $_SERVER['REMOTE_ADDR'] = isset($_SERVER['HTTP_CF_CONNECTING_IP']) ? $_SERVER['HTTP_CF_CONNECTING_IP'] : $_SERVER['REMOTE_ADDR'];

    $record = $reader->country($ip);

    $country_isoCode = $record->country->isoCode; // US
    $country_name = $record->country->name; // United States

    $autoLoadLanguage = array(
        'China',
        'Russia', 
        'Brazil',
        'Vietnam',
        'Japan'
    );

    function check_start_session() {
        if(!session_id()) {
            session_start();
        }
    }

    function set_csrf_token() {
       $_SESSION['previous_csrf_token'] = $_SESSION['csrf_token'];
       $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }

    check_start_session();
    set_csrf_token();

    // include i18n class and initialize it
    require_once 'i18n.class.php';
    $i18n = new i18n('lang/lang_{LANGUAGE}.json', 'langcache/', 'en');
    // Parameters: language file path, cache dir, default language (all optional)

    // init object: load language files, parse them if not cached, and so on.
    $i18n->init();

    if( in_array($country_name, $autoLoadLanguage) ) {
        $lang = strtolower($country_isoCode);
    } else {
        $lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';
    }

    // Language Bar
    switch($lang) {
        case 'br': 
            $lang = "pt";
            break;
        case 'vn': 
            $lang = "vi";
            break;
        default:
            $lang = $lang;
    }    

    // Captcha
    switch($lang) {
        case 'cn': 
            $captcha_language = "zh-CN";
            break;
        case 'jp': 
            $captcha_language = "ja";
            break;
        case 'br': 
            $captcha_language = "pt";
            break;
        default:
            $captcha_language = $lang;
    }

    $languageFullName = array(
        'en' => 'English',
        'ar' => 'Arabic',
        'cn' => 'Chinese',
        'es' => 'Spanish',
        'id' => 'Indonesian',
        'jp' => 'Japanese',
        'ko' => 'Korean',
        'ms' => 'Malay',
        'ru' => 'Russian',
        'th' => 'Thai',
        'vi' => 'Vietnamese',
        'pt' => 'Portuguese'
    );
    
    // Get utm parameters
    $utm_source = filter_input(INPUT_GET, 'utm_source', FILTER_SANITIZE_ENCODED);
    $utm_medium = filter_input(INPUT_GET, 'utm_medium', FILTER_SANITIZE_ENCODED);
    $utm_campaign = filter_input(INPUT_GET, 'utm_campaign', FILTER_SANITIZE_ENCODED);
    $utm_term = filter_input(INPUT_GET, 'utm_term', FILTER_SANITIZE_ENCODED);
    $utm_content = filter_input(INPUT_GET, 'utm_content', FILTER_SANITIZE_ENCODED);

    if( !isset($_GET['lang']) && $lang !='en' ) {
        
        if( !empty($utm_source) ) {
            $utm_parameters = '&utm_source=' . $utm_source;
        }
        
        if( !empty($utm_medium) ) {
            $utm_parameters .= '&utm_medium=' . $utm_medium;
        }
        
        if( !empty($utm_campaign) ) {
            $utm_parameters .= '&utm_campaign=' . $utm_campaign;
        }
        
        if( !empty($utm_term) ) {
            $utm_parameters .= '&utm_term=' . $utm_term;
        }
        
        if( !empty($utm_content) ) {
            $utm_parameters .= '&utm_content=' . $utm_content;
        }
        
        header("Location: ?lang={$lang}{$utm_parameters}");
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="<?php echo $lang == 'ar' ? 'rtl' : 'ltr' ?>">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>trade.io - airdrops </title>
        <meta name="robot" content="index,follow">
        <meta name="copyright" content="Copyright © <?php echo date('Y');?> trade.io. All Rights Reserved.">
        <meta name="author" content="">
        <meta property="og:url" content="https://airdrops.trade.io" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="trade.io- airdrops" />
        <meta property="og:description" content="Enrich your portfolio with potentially hundreds of different Alt Coins trade.io will launch first-of-a-kind massive airdrop campaign to TIO Holders" />
        <meta property="og:image" content="https://airdrops.trade.io/img/airdrops.trade.io-pre-registration.jpg" />
        <meta name="revisit-after" content="30">
        <link rel="shortcut icon" type="image/x-icon" href="">
        <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
        <link rel="stylesheet" type="text/css" href="css/forms.css" media="screen">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/2.8.0/css/flag-icon.min.css"/>
        <!--Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
        <!--AOS library-->
        <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
        <!-- Fav Icon -->
        <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon"/>
        <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png"/>
        <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png"/>
        <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png"/>
        <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png"/>
        <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png"/>
        <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png"/>
        <link rel="icon" type="image/png" href="img/favicon/favicon-32x32.png" sizes="32x32"/>
        <link rel="icon" type="image/png" href="img/favicon/favicon-16x16.png" sizes="16x16"/>
        <!-- Jquery Framework -->
        <script type="text/javascript" src="//code.jquery.com/jquery.min.js"></script>
        <!--Particles Entrty-->
        <script type="text/javascript" src="https://rawgit.com/JulianLaval/canvas-particle-network/master/particle-network.min.js"></script>
        <!--Google reCaptcha-->
        <script src="https://www.google.com/recaptcha/api.js?onload=myCallBack&render=explicit&hl=<?php echo $captcha_language; ?>" async defer></script>
        <!-- charts -->
        <script type="text/javascript" src="js/Chart.js"></script>
        <!-- transform2d -->
        <script type="text/javascript" src="js/plugins/jquery.transform2d.js"></script>
        <!-- transform3d -->
        <script type="text/javascript" src="js/plugins/jquery.transform3d.js"></script>
        <!-- Jquery Easing -->
        <script type="text/javascript" src="js/easing.js"></script>
        <!-- trade.io Checkout-->
        <script type="text/javascript" src="dashboard/js/functions.js"></script>
        <script type="text/javascript" src="js/particles.js"></script>
<!--         <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>-->
        <!-- Custom -->
        <script type="text/javascript" src="js/custom.js"></script>
        <!-- Waypoints -->
        <script type="text/javascript" src="js/waypoints.min.js"></script>
        <!-- trade.io API-->
        <script type="text/javascript" src="api2/api.js"></script>
        <!--AOS library-->
        <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
        
       
        
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WLHR9B4');</script>
        <!-- End Google Tag Manager -->
    </head>
   <body cz-shortcut-listen="true" class="<?php echo $lang; ?>">
       <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WLHR9B4"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
      <div id="mobile-detection"></div>
      <!-- notification -->
      <!--<div class="popup-notification error font-semibold"></div>-->
      <!-- popup overlay -->
      <div id="video-sr-wrapper" style="display: none;">
<!--
         <div id="video-sr" style="opacity: 0; transform: scale(0.9);">
            <iframe src="" width="1000" height="660" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
         </div>
-->
      </div>
      <!-- the start of the website -->
      <div class="stack">
         <!-- header -->
         <div id="header" style="opacity: 1;">
            <!-- navigation -->
            <div class="container logonav">
               <!-- logo -->
                <a href="https://trade.io">
                    <div id="logo" data-aos="fade-down" data-aos-delay="300"></div>
                </a>
               <div class="socialbar">
                  <a data-aos="fade-down" href="https://web.facebook.com/trade.io/?_rdc=1&_rdr" target="_blank">
                     <h3><i class="fab fa-facebook-f"></i></h3>
                  </a>
                  <a data-aos="fade-down" data-aos-delay="300" href="https://twitter.com/tradetoken?lang=en" target="_blank">
                     <h3><i class="fab fa-twitter"></i></h3>
                  </a>
                  <a data-aos="fade-down" data-aos-delay="400" href="https://www.linkedin.com/company/trade-io/" target="_blank">
                     <h3><i class="fab fa-linkedin"></i></h3>
                  </a>
                  <a data-aos="fade-down" data-aos-delay="500" href="https://www.reddit.com/r/TradeIOICO/" target="_blank">
                     <h3><i class="fab fa-reddit"></i></h3>
                  </a>
                  <a data-aos="fade-down" data-aos-delay="600" href="https://t.me/TradeToken" target="_blank">
                     <h3><i class="fab fa-telegram"></i></h3>
                  </a>
               </div>
<!--
                <div id="site-menu">
                    <ul class="mob-menu">
                        <?php include('includes/menu.php') ?>
                    </ul>
                </div>
-->
            </div>
            <!-- header headline -->
            <div id="headline" data-aos="fade-down" data-aos-delay="300">
               <!-- big headline -->
               <span class="font-bold"><?php echo L::section1_line1; ?></span><br><span class="font-light"><?php echo L::section1_line2; ?></span>

               <div class="login">
                  <!--	<h1>Pre-register Now</h1>-->
<!--
                  <form method="post" class="RegisterForm" id="RegisterFormTop" action="">
                     <div id="json-register-error"></div>
                     <div id="json-register-success"><?php echo L::section1_json_register_success; ?></div>
                     <input type="hidden" name="csrf_token" id="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                     <input type="hidden" name="registration_source" id="registration_source" value="AirDrops-Pre-Registration">
                      <input type="hidden" name="user_language" id="user_language" value="<?php echo $languageFullName[$lang]; ?>">
                      <input type="hidden" name="utm_source" id="utm_source" value="<?php echo $utm_source; ?>">
                      <input type="hidden" name="utm_medium" id="utm_medium" value="<?php echo $utm_medium; ?>">
                      <input type="hidden" name="utm_campaign" id="utm_campaign" value="<?php echo $utm_campaign; ?>">
                      <input type="hidden" name="utm_term" id="utm_term" value="<?php echo $utm_term; ?>">
                      <input type="hidden" name="utm_content" id="utm_content" value="<?php echo $utm_content; ?>">
                     <div class="field-left top-username">
                        <input type="text" name="top_form_username" id="top_form_username" placeholder="<?php echo L::section1_username_placeholder; ?>" required="required" />
                        <div class="top_form_username_error"><?php echo L::error_msgs_username; ?></div>
                     </div>
                     <div class="field-right top-email">
                        <input type="email" name="top_form_email" id="top_form_email" placeholder="<?php echo L::section1_email_placeholder; ?>" required="required" />
                        <div class="top_form_email_error"><?php echo L::error_msgs_email; ?></div>
                     </div>
                     <div class="field-left top-password">
                        <input type="password" name="top_form_password" id="top_form_password" placeholder="<?php echo L::section1_password_placeholder; ?>" required="required" />
                        <div class="top_form_password_error"><?php echo L::error_msgs_password; ?></div>
                     </div>
                     <div class="field-right top-confirm-password">
                        <input type="password" name="top_form_confirm_password" id="top_form_confirm_password" placeholder="<?php echo L::section1_confirm_password_placeholder; ?>" required="required" />
                        <div class="top_form_confirm_password_error"><?php echo L::error_msgs_confirm_password; ?></div>
                        <div class="top_form_passwords_do_not_match_error"><?php echo L::error_msgs_passwords_do_not_match; ?></div>
                     </div>
                     <div class="top-captcha">
                        <div class="g-recaptcha" data-sitekey="6Lehw1cUAAAAAA7blz3-HDTp4H_lsF547X1Hzjs8" id="gReCaptcha"></div>
                        <div class="top_form_captcha_error"><?php echo L::error_msgs_captcha; ?></div>
                     </div>
                     <div class="clearfix">
                        <button type="submit" id="pre-register-top-btn" class="btn btn-primary btn-block btn-large"><?php echo L::section1_pre_register_btn; ?></button>
                     </div>
                  </form>
-->
<!--[if lte IE 8]>
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
<![endif]-->
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
<script>
  hbspt.forms.create({
	portalId: "4371728",
	formId: "af7d1187-dc38-4b58-beb1-4ac6be7e63a5",
	css: "",
      onFormSubmit: function(){
          window.dataLayer = window.dataLayer || [];
          window.dataLayer.push({
              event: 'formSubmissionSuccess',
              formId: 'TopForm',
              formName: 'Airdrops May \'18'
          });
      }
});
</script>

               </div>
            </div>
             
            <div id="opacity-extra"></div>
<!--            <div id="play"></div>-->
            <div class="layer"></div>
            <div class="gradient-video"></div>
             <div id="particles-js">
                 <div id="Clouds">
  <div class="Cloud Foreground"></div>
  <div class="Cloud Background"></div>
  <div class="Cloud Foreground"></div>
  <div class="Cloud Background"></div>
  <div class="Cloud Foreground"></div>
  <div class="Cloud Background"></div>
  <div class="Cloud Background"></div>
  <div class="Cloud Foreground"></div>
  <div class="Cloud Background"></div>
  <div class="Cloud Background"></div>
<!--  <svg viewBox="0 0 40 24" class="Cloud"><use xlink:href="#Cloud"></use></svg>-->
</div>

             <div class="bg-image"></div>
             </div>
         
<!--
            <video playsinline="" autoplay="" muted="" loop="" poster="" id="bgvid">
               <source src="video/loop_2.webm" type="video/webm">
               <source src="video/loop_2.mp4" type="video/mp4">
            </video>
-->
            <!-- template thumbnails wrapper
               <div id="template_thumb_wrapper">
               
               	<div class="template_thumb">
               		<div class="template_thumb_img" data-temp="1"></div>
               	</div>
               	<div class="template_thumb">
               		<div class="template_thumb_img" data-temp="2"></div>
               	</div>
               	<div class="template_thumb">
               		<div class="template_thumb_img" data-temp="3"></div>
               	</div>
               	<div class="template_thumb">
               		<div class="template_thumb_img" data-temp="4"></div>
               	</div>
               	<div class="template_thumb">
               		<div class="template_thumb_img" data-temp="5"></div>
               	</div>
               
               </div>
               
               -->
         </div>
         <!-- header simulation -->
         <div id="header_blank"></div>
         <!-- introduction - 3 features -->
          <div id="Qualify" class="column-12" data-aos="fade-in">
              <div class="column-6" data-aos="fade-right" data-aos-delay="300">
         <h1>Enrich Your Portfolio</h1>
         <h3 class="subheaderTIO">With potentially hundreds of different Alt Coins, we're launching a first-of-a-kind massive airdrop campaign to TIO holders. <br><br>
                  Get tokens from TV-TWO, ICO Watchdog, INGOT Coin, DarcMatter, ZerEdge. Another 50 ICOs in the pipeline may make 100 million coins available for airdrop in the coming months.
                  </h3>
            <a class="btn btn-primary btn-block btn-large" href="/downloads/PR_File.pdf" download="PR_File">Read the full PR here </a>
            </div>
              <br><br><br>
              <div class="column-6" data-aos="fade-left" data-aos-delay="300">
            <h1>Who Can Qualify?</h1>
               <!-- the container that hold the features -->


             <h3 class="subheaderTIO">Any and all TIO holders! Our community is automatically qualified to benefit from random airdrops, with tokens from the high potential ICOs who qualify as clients to the trade.io ICO Consulting arm. Such ICOs have undergone a vetted process by the consulting team for AML processes, technical viability and longevity, and as a result have been verified as a high potential investment by trade.io.<br><br></h3>
              </div>
          </div>
          
                    <div id="Offer" data-aos="fade-down">
            <h1>How many tokens are on offer?</h1>
               <!-- the container that hold the features -->


             <p class="Offerrings">We will offer at the very least, 2 million tokens per verified client specifically to our loyal TIO holders. <br><br></p>
             <h1>Which tokens will we be giving away?</h1>           
             <p class="Offerrings">The tokens we airdrop will only ever be from clients who have already passed our strict vetting processes. <br><br>
                        So far, these include: icowatchdog, ingot, darkmatter, zeroedge and TV-TWO.

                        </p>
                        
                        <div id="ICOs" data-aos="fade-up">
                            <img alt="" src="img/ICOs/WatchDog.png"/>
                            <img alt="" src="img/ICOs/IngotCoin.png"/>
                            <img alt="" src="img/ICOs/dmc-logo.png"/>
                            <img alt="" src="img/ICOs/ZeroCoin.png"/>
                            <img alt="" src="img/ICOs/tvTwo.png"/>
                        </div>

          </div>
          
         <div id="introduction">
            
               
                
                
               <h1 data-aos="fade-down"><?php echo L::section2_line1; ?></h1>
               <!-- the container that hold the features -->
               <ul class="clear-fix">
                  <li class="states state_1" data-aos="fade-down">
                     <h4><i class="fab fa-telegram"></i></h4>
                     <h3><?php echo L::section2_point1; ?></h3>
                     <p><?php echo L::section2_point1_text; ?><br><br></p>
                  </li>
                  <li class="states state_2" data-aos="fade-down" data-aos-delay="300">
                     <h4><i class="fas fa-plus-circle"></i></h4>
                     <h3><?php echo L::section2_point2; ?></h3>
                     <p><?php echo L::section2_point2_text; ?><br></p>
                  </li>
                  <li class="states state_4" data-aos="fade-down" data-aos-delay="600">
                     <h4><i class="fas fa-key"></i></h4>
                     <h3><?php echo L::section2_point3; ?></h3>
                     <p><?php echo L::section2_point3_text; ?></p>
                  </li>
                   <li class="states state_4" data-aos="fade-down" data-aos-delay="600">
                     <h4><i class="fas fa-calendar-plus"></i></h4>
                     <h3>Additional Bonus</h3>
                     <p>TIO holders who participate in the ICO via the trade.io link will be eligible to receive additional bonuses over and above what the client ICO is offering.</p>
                  </li>
                   
               </ul>

          
         </div>
         <!-- information about the dashboard -->
         <div id="dashboard" class="" >
            <div id="dashboard_left" data-aos="fade-up" data-aos-delay="300"></div>
            <div id="dashboard_right" data-aos="fade-down" data-aos-delay="300">
               <div class="textwrap" id="DashLight" >
                  <h2><span></span>A quote from our CEO</h2>
<!--
                  <ul class="exchange clear-fix" >
                     <li  data-aos-delay="0"><?php echo L::section3_point1; ?></li>
                     <li data-aos-delay="100"><?php echo L::section3_point2; ?></li>
                     <li  data-aos-delay="200"><?php echo L::section3_point3; ?></li>
                     <li  data-aos-delay="300"><?php echo L::section3_point4; ?></li>
                  </ul>
-->
                   
                <blockquote>
                <p>This airdrop is a win-win situation for all stakeholders.n We are constantly looking for ways to add value to the experience of our loyal community and TIO holders. We feel that an ongoing airdrop of this enormity is the perfect way to both thank our community for their loyalty and to assist new high-potential ICOs in accessing our informed and ambitious community.</p>
                <cite>Jim Preissler</cite>
                </blockquote>
                  <br>
                  <!--				<a href="#" class="open_register font-semibold" style="text-transform: uppercase;">Register an account</a>-->
               </div>
            </div>
         </div>
<!--
         <div id="pes" class="">
            <div id="pes_left" data-aos="fade-down">
               <div class="textwrap pick">
        
                  <h2><i class="fas fa-cogs"></i></h2>
                  <p><?php echo L::section4_point1; ?></p>
                  <br>
                  <p class="paragraph2"><?php echo L::section4_point1_text; ?></p>
               </div>
            </div>
            <div id="pes_middle" data-aos="fade-down" data-aos-delay="300">
               <div class="textwrap edit">

                  <h2><i class="fas fa-chart-area"></i></h2>
                  <p><?php echo L::section4_point2; ?></p>
                  <br>
                  <p class="paragraph2"><?php echo L::section4_point2_text; ?></p>
               </div>
            </div>
            <div id="pes_right" data-aos="fade-down" data-aos-delay="600">
               <div class="textwrap send">

                  <h2><i class="fas fa-plane"></i></h2>
                  <p><?php echo L::section4_point3; ?></p>
                  <br>
                  <p class="paragraph2"><?php echo L::section4_point3_text; ?></p>
                  <div class="start_donut"></div>
               </div>
            </div>
            <div id="pes_right2" data-aos="fade-down" data-aos-delay="900">
               <div class="textwrap send2">

                  <h2><i class="fas fa-server"></i></h2>
                  <p><?php echo L::section4_point4; ?></p>
                  <br>
                  <p class="paragraph2"><?php echo L::section4_point4_text; ?></p>
               </div>
            </div>
         </div>
-->
<!--
         <div id="Walkthrough" data-aos="fade-up" data-aos-delay="1300">
            <br>
            <br>
            <h3><?php echo L::section5_title1; ?></h3>
            <br>
            <br>
            <div id="videobox">
               <div class="videoitem" style = "max-width: 1000px;padding: 0px;" data-aos="fade-down">

                  <div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;">
                     <div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><iframe src="https://fast.wistia.net/embed/iframe/2ecti34i8s?seo=false&videoFoam=true" title="Wistia video player" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="100%" height="100%"></iframe></div>
                  </div>
                  <script src="https://fast.wistia.net/assets/external/E-v1.js" async></script>
               </div>
            </div>
            <br>
            <br>
            <br>
         </div>
-->
<!--
         <div id="Education" data-aos="fade-down">
            <br>
            <br>
            <h1><?php echo L::section6_title1; ?></h1>
            <h3><?php echo L::section6_title2; ?></h3>
            <br>
            <br>
            <div id="videobox">
               <div class="videoitem" data-aos="fade-down">
                  <h2><?php echo L::section6_video1_title; ?></h2>
                  <div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;">
                     <div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><iframe src="https://fast.wistia.net/embed/iframe/7fe7gaerg5?seo=false&videoFoam=true" title="Wistia video player" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="100%" height="100%"></iframe></div>
                  </div>
                  <script src="https://fast.wistia.net/assets/external/E-v1.js" async></script>
               </div>
               <div class="videoitem" data-aos="fade-down" data-aos-delay="300">
                  <h2><?php echo L::section6_video2_title; ?></h2>
                  <div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;">
                     <div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><iframe src="https://fast.wistia.net/embed/iframe/lxoo8o7bvx?seo=false&videoFoam=true" title="Wistia video player" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="100%" height="100%"></iframe></div>
                  </div>
                  <script src="https://fast.wistia.net/assets/external/E-v1.js" async></script>
               </div>
               <div class="videoitem" data-aos="fade-down" data-aos-delay="600">
                  <h2><?php echo L::section6_video3_title; ?></h2>
                  <div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;">
                     <div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><iframe src="https://fast.wistia.net/embed/iframe/tqowq3rgzy?seo=false&videoFoam=true" title="Wistia video player" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="100%" height="100%"></iframe></div>
                  </div>
                  <script src="https://fast.wistia.net/assets/external/E-v1.js" async></script>
               </div>
            </div>
            <br>
            <br>
            <br>
         </div>
-->
         <div id="footer" >
            <div id="register_footer">
               <div class="slogan" style="display: table;">
                  <h2><?php echo L::section7_title1; ?></h2>
               </div>
               <h2 id="registerText" data-aos="fade-down" data-aos-delay="300"><?php echo L::section7_title2; ?></h2>
<!--
               <div id="register-logo">
                  <div class="logo-btm"><a href="#"><img src="../img/footer-logo.png"></a></div>
               </div>
-->
               <!--[if lte IE 8]>
               <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
               <![endif]-->
               <!--
                  <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
                  <script>
                    hbspt.forms.create({
                  	portalId: "4371728",
                  	formId: "8818173b-5098-40d4-86e9-f9bb88d06fde"
                  });
                  </script>
                  -->
               <div class="login" data-aos="fade-up" data-aos-delay="300">
                  <!--	<h1>Pre-register Now</h1>-->
<!--
                  <form method="post" class="RegisterForm" id="RegisterFormBottom" action="">
                     <div id="json-register-error-bottom"></div>
                     <div id="json-register-success-bottom"><?php echo L::section7_json_register_success; ?></div>
                     <input type="hidden" name="csrf_token" id="csrf_token_bottom" value="<?php echo $_SESSION['csrf_token']; ?>">
                     <input type="hidden" name="registration_source" id="registration_source_bottom" value="AirDrops-Pre-Registration">
                      <input type="hidden" name="user_language_bottom" id="user_language_bottom" value="<?php echo $languageFullName[$lang]; ?>">
                      <input type="hidden" name="utm_source_bottom" id="utm_source_bottom" value="<?php echo $utm_source; ?>">
                      <input type="hidden" name="utm_medium_bottom" id="utm_medium_bottom" value="<?php echo $utm_medium; ?>">
                      <input type="hidden" name="utm_campaign_bottom" id="utm_campaign_bottom" value="<?php echo $utm_campaign; ?>">
                      <input type="hidden" name="utm_term_bottom" id="utm_term_bottom" value="<?php echo $utm_term; ?>">
                      <input type="hidden" name="utm_content_bottom" id="utm_content_bottom" value="<?php echo $utm_content; ?>">
                     <div class="field-left top-username">
                        <input type="text" name="bottom_form_username" id="bottom_form_username" placeholder="<?php echo L::section7_username_placeholder; ?>" />
                        <div class="bottom_form_username_error"><?php echo L::error_msgs_username; ?></div>
                     </div>
                     <div class="field-right top-email">
                        <input type="email" name="bottom_form_email" id="bottom_form_email" placeholder="<?php echo L::section7_email_placeholder; ?>" />
                        <div class="bottom_form_email_error"><?php echo L::error_msgs_email; ?></div>
                     </div>
                     <div class="field-left top-password">
                        <input type="password" name="bottom_form_password" id="bottom_form_password" placeholder="<?php echo L::section7_password_placeholder; ?>" />
                        <div class="bottom_form_password_error"><?php echo L::error_msgs_password; ?></div>
                     </div>
                     <div class="field-right top-confirm-password">
                        <input type="password" name="bottom_form_confirm_password" id="bottom_form_confirm_password" placeholder="<?php echo L::section7_confirm_password_placeholder; ?>" />
                        <div class="bottom_form_confirm_password_error"><?php echo L::error_msgs_confirm_password; ?></div>
                        <div class="bottom_form_passwords_do_not_match_error"><?php echo L::error_msgs_passwords_do_not_match; ?></div>
                     </div>
                     <div class="top-captcha">
                        <div class="g-recaptcha" data-sitekey="6Lehw1cUAAAAAA7blz3-HDTp4H_lsF547X1Hzjs8" id="gReCaptchaBottom"></div>
                        <div class="bottom_form_captcha_error"><?php echo L::error_msgs_captcha; ?></div>
                     </div>
                     <div class="clearfix">
                        <button type="submit" id="pre-register-bottom-btn" class="btn btn-primary btn-block btn-large"><?php echo L::section7_pre_register_btn; ?></button>
                     </div>
                  </form>
-->
                   
                   <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
<script>
  hbspt.forms.create({
	portalId: "4371728",
	formId: "af7d1187-dc38-4b58-beb1-4ac6be7e63a5",
	css: "",
      onFormSubmit: function(){
          window.dataLayer = window.dataLayer || [];
          window.dataLayer.push({
              event: 'formSubmissionSuccess',
              formId: 'BottomForm',
              formName: 'Airdrops May \'18'
          });
      }
});
</script>
               </div>
            </div>
            <div class="socialbar">
               <a data-aos="fade-down" href="https://web.facebook.com/trade.io/?_rdc=1&_rdr" target="_blank">
                  <h3><i class="fab fa-facebook-f"></i></h3>
               </a>
               <a data-aos="fade-down" data-aos-delay="300" href="https://twitter.com/tradetoken?lang=en" target="_blank">
                  <h3><i class="fab fa-twitter"></i></h3>
               </a>
               <a data-aos="fade-down" data-aos-delay="400" href="https://www.linkedin.com/company/trade-io/" target="_blank">
                  <h3><i class="fab fa-linkedin"></i></h3>
               </a>
               <a data-aos="fade-down" data-aos-delay="500" href="https://www.reddit.com/r/TradeIOICO/" target="_blank">
                  <h3><i class="fab fa-reddit"></i></h3>
               </a>
               <a data-aos="fade-down" data-aos-delay="600" href="https://t.me/TradeToken" target="_blank">
                  <h3><i class="fab fa-telegram"></i></h3>
               </a>
            </div>
             <div id="risk-disclaimer" data-aos="fade-down" data-aos-delay="300">
                <strong><?php echo L::section8_risk_disclaimer_title; ?></strong><br><?php echo L::section8_risk_disclaimer_text; ?> 
            </div>
            <div id="copyright">
                <div>
                  © trade.io <?php echo date('Y');?> 
               </div>
            </div>
         </div>
      </div>
      <script>
         var recaptcha1;
         var recaptcha2;
         
         var myCallBack = function() {
         
         
             if( document.getElementById('gReCaptcha') !=null ) {
                 //Render the recaptcha1 on the element with ID "recaptcha1"
                 recaptcha1 = grecaptcha.render('gReCaptcha', {
                   'sitekey' : '6Lehw1cUAAAAAA7blz3-HDTp4H_lsF547X1Hzjs8', //Replace this with your Site key
                   'theme' : 'light'
                 });
             }
         
             if( document.getElementById('gReCaptchaBottom') !=null ) {
                 //Render the recaptcha2 on the element with ID "recaptcha2"
                 recaptcha2 = grecaptcha.render('gReCaptchaBottom', {
                   'sitekey' : '6Lehw1cUAAAAAA7blz3-HDTp4H_lsF547X1Hzjs8', //Replace this with your Site key
                   'theme' : 'light'
                 });
             }
         
         };
          // Live Chat
          var chatButton;
          (function (d, src, c) {
            var t = d.scripts[d.scripts.length - 1], s = d.createElement('script');
            s.id = 'la_x2s6df8d';
            s.async = true;
            s.src = src;
            s.onload = s.onreadystatechange = function () {
                var rs = this.readyState;
                if (rs && (rs != 'complete') && (rs != 'loaded')) {
                    return;
                }
                c(this);
            };
                t.parentElement.insertBefore(s, t.nextSibling);
            })(document, 'https://tio.ladesk.com/scripts/track.js', function (e) {
                chatButton = LiveAgent.createButton('7cca1741', e);
            });
            
            $(".languagepicker").css("height", 0);
            // Language Menu
            $('.languagepicker').hover(function (e) {
                var height = $(".languagepicker")[0].scrollHeight;
                $(".languagepicker").css("height", height + "px");
            }, function () {
                $(".languagepicker").css("height", 0);
            });
      </script>
   </body>
</html>