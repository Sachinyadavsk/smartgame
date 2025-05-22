    <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:url" content="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <script>
        {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "name": "Nwoow",
      "url": "<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://nwoow.com/search?q={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    }
    </script>

    <link href="https://fonts.googleapis.com/css2?family=Coiny&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://nwoow.com/css/swiper-bundle.min.css">
    <link rel="preload" as="style" href="https://nwoow.com/build/assets/app-0f2684b5.css" />
    <link rel="stylesheet" href="https://nwoow.com/build/assets/app-0f2684b5.css" />
    <link rel="modulepreload" href="https://nwoow.com/build/assets/app-8fa53771.js" />
    <script type="module" src="https://nwoow.com/build/assets/app-8fa53771.js"></script>

    <!-- Google tag (gtag.js) -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://nwoow.com/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-W5PRWEXPNR"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-W5PRWEXPNR');
    </script>
    
 <!--  <script>-->
 <!--      window.googletag = window.googletag || { cmd: [] };-->
 <!--     let interstitialSlot;-->
 <!--     googletag.cmd.push(() => {-->
 <!--       interstitialSlot = googletag.defineOutOfPageSlot(-->
 <!--         "/",-->
 <!--         googletag.enums.OutOfPageFormat.INTERSTITIAL,-->
 <!--       );-->

 <!--       if(localStorage.getItem('utm_source')){-->
 <!--         console.log("utm_source:", localStorage.getItem('utm_source'));-->
 <!--         interstitialSlot?.setTargeting('utm_source', localStorage.getItem('utm_source'));-->
 <!--       }-->

 <!--       if (interstitialSlot) {-->
 <!--         interstitialSlot.addService(googletag.pubads()).setConfig({-->
 <!--           interstitial: {-->
 <!--             triggers: {-->
 <!--               navBar: true,-->
 <!--               unhideWindow: true,-->
 <!--             },-->
 <!--           },-->
 <!--         });-->

 <!--         googletag.pubads().addEventListener("slotOnload", (event) => {-->
 <!--           if (interstitialSlot === event.slot) {-->
 <!--               googletag.cmd.push(() => {-->
 <!--                   googletag.display(interstitialSlot);-->
 <!--               });-->
 <!--           }-->
 <!--         });-->

 <!--       }-->
 <!--       googletag.pubads().enableSingleRequest();-->
 <!--       googletag.enableServices();-->
 <!--     });-->
 <!--  </script>-->
 <!--  <script>-->
 <!--         window.googletag = window.googletag || {-->
 <!--         cmd: []-->
 <!--         };-->

 <!--         let anchorSlot;-->
 <!--         let anchorSlotLeft;-->
 <!--         let anchorSlotRight;-->

 <!--          googletag.cmd.push(() => {-->
 <!--             anchorSlot = googletag.defineOutOfPageSlot(-->
 <!--               '/',-->
 <!--               googletag.enums.OutOfPageFormat.BOTTOM_ANCHOR-->
 <!--              );-->
 <!--              anchorSlotLeft = googletag.defineOutOfPageSlot(-->
 <!--               '/',-->
 <!--               googletag.enums.OutOfPageFormat.LEFT_SIDE_RAIL-->
 <!--              );-->
 <!--              anchorSlotRight = googletag.defineOutOfPageSlot(-->
 <!--               '/',-->
 <!--               googletag.enums.OutOfPageFormat.RIGHT_SIDE_RAIL-->
 <!--              );-->
    
 <!--               if(localStorage.getItem('utm_source')){-->
 <!--                   const utmSource = localStorage.getItem('utm_source');-->
 <!--                   console.log("utm_source:", utmSource);-->
 <!--                   anchorSlot?.setTargeting("utm_source",utmSource);-->
 <!--                   anchorSlotLeft?.setTargeting("utm_source",utmSource);-->
 <!--                   anchorSlotRight?.setTargeting("utm_source",utmSource);-->
 <!--               }-->
    
 <!--               if (anchorSlot) {-->
 <!--                   anchorSlot.addService(googletag.pubads());-->
 <!--               }-->
        
 <!--               if (anchorSlotLeft) {-->
 <!--                   anchorSlotLeft.addService(googletag.pubads());-->
 <!--               }-->
        
 <!--               if (anchorSlotRight) {-->
 <!--                   anchorSlotRight.addService(googletag.pubads());-->
 <!--               }-->
 <!--               googletag.pubads().enableSingleRequest();-->
                <!--// Enable SRA and services.-->
 <!--               googletag.enableServices();-->
 <!--           });-->

 <!--          googletag.cmd.push(() => {-->
 <!--              googletag.display(anchorSlot || anchorSlotLeft || anchorSlotRight);-->
 <!--          });-->
 <!--      </script>    -->
 <!--  <script>-->
 <!--   var update_game_time_url = "https://nwoow.com/update-game-time"-->
 <!--   var recent_games_url = "https://nwoow.com/get-recent-games";-->
 <!--   var games_url = "https://nwoow.com/games";-->
 <!--   var game_url = "https://nwoow.com/view-game/";-->
 <!--   var NUMBER_OF_ADS = 4;-->
 <!--</script>-->
 <!--  <script>-->
 <!--        window.googletag = window.googletag || {-->
 <!--        cmd: []-->
 <!--         };-->
 <!--       googletag.cmd.push(() => {-->
 <!--           if(typeof IS_MOBILE_SMALL_AD !== "undefined"){-->
 <!--               const adslotMob = googletag.defineSlot('/', [320,50], `mobile-ad-1`)-->
 <!--               if(localStorage.getItem('utm_source')){-->
 <!--                   const utmSource = localStorage.getItem('utm_source');-->
 <!--                   console.log("utm_source:", utmSource);-->
 <!--                   adslotMob?.setTargeting("utm_source",utmSource);-->
 <!--               }-->
 <!--               adslotMob.addService(googletag.pubads());-->
 <!--           }-->
 <!--           for (var i = 1; i <= NUMBER_OF_ADS; i++) {-->
 <!--               const adslot = googletag-->
 <!--                   .defineSlot('/', ['fluid'], `static-ad-${i}`)-->
 <!--               if(localStorage.getItem('utm_source')){-->
 <!--                   const utmSource = localStorage.getItem('utm_source');-->
 <!--                   console.log("utm_source:", utmSource);-->
 <!--                   adslot?.setTargeting("utm_source",utmSource);-->
 <!--               }-->
 <!--               adslot.addService(googletag.pubads());-->
 <!--           }-->
 <!--           googletag.pubads().enableSingleRequest();-->
 <!--           googletag.enableServices();-->
 <!--       });-->
 <!--   </script>-->
 
</head>