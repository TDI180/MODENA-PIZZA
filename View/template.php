<!DOCTYPE HTML>
<html>
              <head>                
                                          <title>CAPTAIN-PIZZA</title>
                                          
                                          <meta http-equiv="content-type" content="text/html; charset=utf-8">
                                          <meta http-equiv="X-UA-Compatible" content="IE=edge">                                        
                                                                           
                                          <link rel='stylesheet' type='text/css' href="View/CSS/flex-select.css"/>
                                          <link rel='stylesheet' type='text/css' href='View/CSS/jquery-ui.css' />
                                          <link rel='stylesheet' type='text/css' href='View/CSS/smart.css' />
                                          <link rel='stylesheet' type='text/css' href='View/CSS/smart_responsive.css' />
                                          <link rel='stylesheet' type='text/css' href='View/CSS/structure.css' />
                                          <link rel='stylesheet' type='text/css' href='View/CSS/structure-responsive.css' />      
                                        
                                          <style>
                                                        #showimage{ position:absolute;visibility:hidden;border: 1px solid gray;}
                                                        #dragbar{cursor: hand;cursor: pointer;background-color: #EFEFEF;min-width: 100px; }
                                                        #dragbar #closetext{font-weight: bold;margin-right: 1px;}
                                       </style>         
              </head>

<body>

    <noscript>
      <iframe src="//www.googletagmanager.com/ns.html?id=GTM-TM7X93V" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
	
    <script>
                        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                          new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                          j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                          '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
                      })(window,document,'script','dataLayer','GTM-TM7X93V');
	</script>
  
  <script type="text/javascript" src="img.js"></script>

    <div id="lay_bg_header" style="display: none;"></div>
    <div id="lay_bg" style="display: none;"></div>
    <span id="close_popup_button" onclick="topBarClosePopup()">Fermer</span>

    <div class="flash-message" id="item_added_message">
  <div class="flash-message__wrapper">
    <div class="flash-message__content">
    </div>
  </div>
</div>

    <div class="popup_holder">      

    </div>

    <div class="popup_holder" id="popup_holder"></div>

    <div id="container" class="container page_index">
      <div class="container_wrapper">
        
        <header class="header">
        <div class="wrapper clearfix">
    

                                                          <h1 class="logo_layout">   
                                                                                                                  <a href="/" title="CAPTAIN-ZEBI">
                                                                                                                            <img src='View/IMG/logo.png' alt='MODENA-PIZZA'>
                                                                                                                                      <span>
                                                                                                                                                  Les meilleurs ingrédients<br>
                                                                                                                                                  font les meilleures Pizzas CA C EST VRAI
                                                                                                                                     </span>
                                                                                                                  </a>  
                                                          </h1>

                 <div class="user_login">
                                                  <div class="social">
                                               
                                                                                                <a target="_blank" href="https://www.facebook.com/speedrabbitpizza" class="facebook">Facebook</a>
                                                                                                <a target="_blank" href="https://twitter.com/SRP_OFFICIEL" class="twitter">Twitter</a>
                                                                                                <a target="_blank" href="https://www.instagram.com/speedrabbitpizza_officiel" class="instagram">Instagram</a>
                                                                                                <a target="_blank" href="https://plus.google.com/u/0/105010217265263589605/about" class="google">Google+</a>
                                                    </div>
                                                    
                                                        <ul>
                                                                  <li><a href="/login">Connexion</a></li>
                                                                  <li><a href="/register">Créer un compte</a></li>
                                                      </ul>


                                                    <div class="shop_info">
                                                      <a id="shop_info_button" href="#" onclick="topBarOpenInfoPopup(); return false;">Infos restaurant</a>
                                                    </div>
                </div>

                                                   <div class="open_menu_wrapper"><a id="open_menu_button" href="#" title="Menu">Menu</a></div>
 
                                                                          <script type="text/javascript">
                                                                                            $j(document).ready(function(){
                                                                                                            $j('#open_menu_button').on('click', function(){
                                                                                                              $j('#main_menu').toggleClass('open');
                                                                                                              return false;
                                                                                                            });
                                                                                                                        });
                                                                          </script>
  </div>
</header>

<div class='alert_content'><div class='wrapper'></div></div>
  
  <nav id="main_menu" class="menu menu_categories clearfix">
    <div class="wrapper">
      <ul>      

    <li class="home"><a href="/">Accueil</a></li>  
		<li >                            <a href="/Pizza" class=''>     NOS PIZZAS</a></li>
		<li >                            <a href="/Boisson" class=''>NOS BOISSONS</a></li>
		<li >                           <a href="/Paninis" class=''>  NOS PANINIS</a></li>
    <li >                          <a href="/Burgers" class=''>  NOS  BURGERS</a></li>
    <li >                          <a href="/Salades" class=''>   NOS SALADES </a></li>
    <li >                          <a href="/Dessert" class=''>   NOS DESSERTS  </a></li>

<script type="text/javascript">
  window.postalCodesHash = 
{'02100 - SAINT QUENTIN':[1495], '02430 - GAUCHY':[1495], '10000 - TROYES':[1642], '10120 - ST ANDRE LES VERGERS':[1642], '10300 - STE SAVINE':[1642], '10430 - ROSIERES PRES TROYES':[1642], '10450 - BREVIANDES':[1642], '10800 - ST JULIEN LES VILLAS':[1642], '30000 - NIMES':[1464], '30900 - NIMES':[1464], '40100 - DAX':[1494], '40180 - narrosse':[1494], '40990 - ST PAUL LES DAX':[1494], '59125 - TRITH ST LEGER':[1503], '59128 - FLERS EN ESCREBIEUX':[1448], '59174 - LA SENTINELLE':[1503], '59195 - HERIN':[1503], '59300 - AULNOY LEZ VALENCIENNES':[1503], '59300 - VALENCIENNES':[1503], '59410 - ANZIN':[1503], '59450 - SIN LE NOBLE':[1448], '59494 - PETITE FORET':[1503], '59500 - DOUAI':[1448], '59552 - COURCHELETTES':[1448], '59552 - LAMBRES LEZ DOUAI':[1448], '59553 - CUINCY':[1448], '59590 - RAISMES':[1503], '59770 - MARLY':[1503], '59880 - ST SAULVE':[1503], '62112 - CORBEHEM':[1448], '62117 - BREBIERES':[1448], '75008 - PARIS':[1473], '75015 - PARIS':[1469], '75016 - PARIS':[1469,1473], '75017 - PARIS':[1473], '75116 - PARIS':[1469], '78000 - VERSAILLES':[1504], '78140 - VELIZY VILLACOUBLAY':[1504], '78220 - VIROFLAY':[1504], '78350 - JOUY EN JOSAS':[1504], '78350 - LES LOGES EN JOSAS':[1504], '78530 - BUC':[1504], '91160 - BALLAINVILLIERS':[1460], '91160 - CHAMPLAN':[1460], '91160 - LONGJUMEAU':[1460], '91160 - SAULX LES CHARTREUX':[1460], '91300 - MASSY':[1456], '91320 - WISSOUS':[1456], '91360 - EPINAY SUR ORGE':[1460], '91380 - CHILLY MAZARIN':[1460], '91400 - VAL D\'ALBIAN SACLAY':[1504], '91420 - MORANGIS':[1460], '91430 - IGNY':[1456], '91430 - VAUHALLAN':[1456], '91570 - BIEVRES':[1456], '92000 - NANTERRE':[1499], '92100 - BOULOGNE BILLANCOURT':[1469], '92120 - MONTROUGE':[1456], '92130 - ISSY LES MOULINEAUX':[1456], '92140 - CLAMART':[1456], '92150 - SURESNES':[1499], '92160 - ANTONY':[1456], '92170 - VANVES':[1456], '92190 - MEUDON':[1456], '92210 - ST CLOUD':[1499], '92220 - BAGNEUX':[1456], '92240 - MALAKOFF':[1456], '92260 - FONTENAY AUX ROSES':[1456], '92290 - CHATENAY MALABRY':[1456], '92310 - SEVRES':[1456], '92320 - CHATILLON':[1456], '92330 - SCEAUX':[1456], '92340 - BOURG LA REINE':[1456], '92350 - LE PLESSIS ROBINSON':[1456], '92360 - MEUDON':[1456], '92370 - CHAVILLE':[1504], '92380 - GARCHES':[1499], '92500 - RUEIL-MALMAISON':[1499], '92800 - PUTEAUX':[1499], '94000 - CRETEIL':[1436], '94200 - IVRY SUR SEINE':[1508], '94260 - FRESNES':[1456], '94320 - THIAIS':[1508], '94370 - SUCY EN BRIE':[1436], '94380 - BONNEUIL':[1436], '94400 - VITRY SUR SEINE':[1508], '94800 - VILLEJUIF':[1508]};

  function speedrabbit_frShopPicker_postalCodeSelected() {
                                                                                                                               $j("#postalCodeInvalidWarning").hide();
                                                                                                                               frShopPicker_postalCodeSelected(
                                                                                                                                                                                                      function () {
                                                                                                                                                                                                                                $j("#postalCodeInvalidWarning").show();
                                                                                                                                                                                                                                $j("#postalCodeField").on('keydown',keyEvent);
                                                                                                                                                                                                                              }
                                                                                                                                                                                                     )
                                                                                                                        }

  $j(document).ready(function () {
    $j("#postalCodeField").advAutocomplete({ source: Object.keys(window.postalCodesHash), minLength: 2 });
    $j("#postalCodeField").click(function(){
      $j('.shop_selection .warning:visible').hide(500);
      $j(this).select();
      $j("#postalCodeField").off('keydown',keyEvent);
    });

    if (/badpostcode/.exec(window.location.search)){
      $j('#postalCodeWarning').show();
      $j("#postalCodeField").on('keydown',keyEvent);
    }
    $j("input[name='delivery_method']").change(frShopPicker_deliveryMethodSelected);

  });

function keyEvent(){
  $j('.shop_selection .warning:visible').hide(500);
  $j("#postalCodeField").off('keydown',keyEvent);
}

</script>   
</div>

        <script type="text/javascript">
          $j(window).load(homepageSetHeight);
          $j(window).on('resize', homepageSetHeight);
        </script>

  </div>
         </div>
	       </div>
                       <!-- /main -->
  </div>
</div>					
				

<h3 style='margin-top:-20px;margin-left:450px;font-size: 50px;color:yellow;height:420px;width:800px;'>  
	                                            		<?php echo $contentView //----->from the controller?>                             
</h3>	


 <footer class="footer" id="page_footer">
  <div class="wrapper clearfix">
    <div class="copyright">
      &copy; 2024 Speed Rabbit Pizza - Powered by <a class='' href='https://www.livepepper.fr' target='_blank'>LivePepper</a>
    </div>
    <div class="footer_menu">
      <ul>
    <li class=''><a class='' href='https://static.speedrabbitpizza.com/mentions-legales-2/'>Mentions légales</a></li>
		<li class=''><a class='' href='http://static.speedrabbitpizza.com/nous-contacter/'>Nous contacter</a></li>
		<li class=''><a class='' href='http://static.speedrabbitpizza.com/nous-connaitre/'>Nous connaître</a></li>
		<li class=''><a class='' href='http://static.speedrabbitpizza.com/devenir-franchise/'>Devenir franchisé</a></li>
		<li class=''><a class='' href='https://drive.google.com/file/d/1aRJm7PV1HWwb_wg0fXX05JNlBd4csIyM/view?usp=sharing'>Les allergènes</a></li>
		<li class=''><a class='' href='http://speedrabbitpizza.com/le_plus_proche/'>Nos restaurants</a></li>
		<li class=''><a class='' href='http://static.speedrabbitpizza.com/investisseurs/'>Relations investisseurs</a></li>
		<li class=''><a class='' href='https://static.speedrabbitpizza.com/politique-de-confidentialite/'>Politique de confidentialité</a></li>
		<li class=''><a class='' href='/recrutement'>Recrutement</a></li>
      </ul>
    </div>
    <div class="social">
      <a target="_blank" href="https://www.facebook.com/speedrabbitpizza" class="facebook">Facebook</a> |
      <a target="_blank" href="https://twitter.com/SRP_OFFICIEL" class="twitter">Twitter</a> |
      <a target="_blank" href="https://www.instagram.com/speedrabbitpizza_officiel" class="instagram">Instagram</a> |
      <a target="_blank" href="https://plus.google.com/u/0/105010217265263589605/about" class="google">Google+</a>
    </div>
    <div class="additional">
      Pour votre santé, mangez au moins 5 fruits et légumes frais par jour :
      <a href="http://www.mangerbouger.fr" target="_blank">www.mangerbouger.fr</a>
    </div>
  </div>
</footer>

<a href="#" class="scroll-page-up" id="scroll-page-up"><i class="icon-up-open"></i></a>

<script type="text/javascript">
                                                                $j(document).ready(function(){
                                                                  var scrollTop = scrollPageTop();
                                                                  scrollTop.init();
                                                                });
</script>

      </div>
    </div>

    <script type="text/javascript">
                                                                       Product.init('EUR');
    </script>

    


  
    <!-- Google Code for Remarketing Tag -->
    <!--
    Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
    -->
    <script type="text/javascript">
      /* <![CDATA[ */
      var google_conversion_id = 937404938;
      var google_custom_params = window.google_tag_params;
      var google_remarketing_only = true;
      /* ]]> */
    </script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
    </script>
    <noscript>
      <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/937404938/?value=0&amp;guid=ON&amp;script=0"/>
      </div>
    </noscript>


<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
          n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
          document,'script','//connect.facebook.net/en_US/fbevents.js');

  fbq('init', '153086568371148');
  fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=153086568371148&ev=PageView&noscript=1"
/></noscript>

</body>
</html>
  