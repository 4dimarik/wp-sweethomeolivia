<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter46815777 = new Ya.Metrika({
                        id:46815777,
                        clickmap:true,
                        trackLinks:true,
                        accurateTrackBounce:true
                    });
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110486194-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-110486194-1');
    </script>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="yandex-verification" content="78b1c1e316cbe1f1" />
    <meta name="google-site-verification" content="s6SrkXU71IQ3vSUeCz2Re6F15Nrfh05OAj5HUc2LxEU" />

    <link rel="shortcut icon" href="https://sweethomeolivia.ru/wp-content/uploads/2017/11/favicon.ico   " type="image/x-icon">    

    <title>
        <?php bloginfo( 'name'); ?>
         | Кофейня | Сергиев Посад <? wp_title();?>
    </title>
    <?php wp_head(); ?>
        <script type='application/ld+json'>
        {
            "@context": "http://www.schema.org",
            "@type": "CafeOrCoffeeShop",
            "name": "Sweet Home Olivia",
            "url": "https://sweethomeolivia.ru",
            "telephone": "+79030094913",
            "logo": "https://sweethomeolivia.ru/wp-content/uploads/2017/11/Olivia-web-logo.png",
            "image": "https://sweethomeolivia.ru/wp-content/uploads/2017/11/Olivia_w100.png",
            "description": "Уютное место с бодрящим кофе, полезными завтраками и вкуснейшими десертами.",
            "sameAs" : ["https://vk.com/sweethomeolivia","https://www.instagram.com/sweethomeolivia","https://www.tripadvisor.ru/Restaurant_Review-g445047-d12829952-Reviews-Sweet_Home_Olivia-Sergiyev_Posad_Sergiyevo_Posadsky_District_Moscow_Oblast_Centr.html"],
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Сергиевская, 21",
                "addressLocality": "Сергиев Посад",
                "addressRegion": "МО"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": "38.1357273",
                "longitude": "56.304732"
            },
            "openingHours": "Пн, Вт, Ср, Чт, Пт, Сб, Вс 08:00-22:00",
            "contactPoint": {
                "@type": "ContactPoint",
                "contactType": "customer service",
                "telephone": "+79030094913"
            }
        }
         </script>
</head>
<body>

<noscript><div><img src="https://mc.yandex.ru/watch/46815777" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
  <header>
      <!--Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark default-color">
          <div class="container">
              <a class="navbar-brand" href="<? echo home_url(); ?>"><?php bloginfo( 'name'); ?></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                  aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <?php
                    if ( has_nav_menu( 'navbar' ) ) {
                      wp_nav_menu( array(
                      'menu'              => 'navbar',
                      'theme_location'    => 'navbar',
                      'depth'             => 2,
                      'menu_class'        => 'navbar-nav mr-auto',
                      'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                      'container'         => false,
                      'walker'            => new MDBBootstrapNavMenuWalker())
                      );
                    } else
                    echo "Please assign Navbar Menu in Wordpress Admin -> Appearance -> Menus -> Manage Locations";
                    ?> 
                  </ul>
<!--                  <form class="form-inline">
                      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                  </form>-->
                  <div class="wtime"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;Пн - Вс: c 8:00 до 22:00</div>
              </div>
          </div>
      </nav>
      <!--/.Navbar-->
  </header>