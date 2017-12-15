<!doctype html>
<!-- Server: sfs-consume-19 -->

<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]>--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        
        <script type='text/javascript'>
            /*global unescape, window, SF*/
            // Setup our namespace
            if (!window.SF) { window.SF = {}; }
            if (!window.net) { window.net = {}; }
            if (!window.net.sf) { window.net.sf = {}; }
            SF.Ads = {};
            SF.cdn = '//a.fsdn.com/con';
            SF.deploy_time = '1513198786';
            SF.sandiego = false;
            SF.sandiego_chrome = false;
            
            SF.Breakpoints = {
              small: 0,
              medium: 640,
              leaderboard: 743,
              billboard: 985,
              large: 1053,
              xlarge: 1295,
              xxlarge: 1366
            };
            SF.initial_breakpoints_visible = {};
            for (var bp in SF.Breakpoints) {
                if (!SF.Breakpoints.hasOwnProperty(bp)) {
                    continue;
                }
                SF.initial_breakpoints_visible[bp] = !window.matchMedia || window.matchMedia('(min-width: ' + SF.Breakpoints[bp] + 'px)').matches;
            }
        </script><script type='text/javascript'>
            SF.Ads.prebidOptions = {
                showIndicators: false,
                analytics: true,
                timeout: 650,
                timeouts_by_bids: {500: 5, 650: 0},
                };

            SF.Ads.prebidUnits = [];
            if (SF.initial_breakpoints_visible.leaderboard) {
                SF.Ads.prebidUnits.push({
                    bids: [{'params': {'tagid': '364648'}, 'bidder': 'sovrn'},
                            {'params': {'cp': 558092, 'cf': '728x90', 'ct': '472223'}, 'bidder': 'pulsepoint'},
                            {'params': {'placementId': 12407703}, 'bidder': 'brealtime'},
                            {'params': {'siteId': '103240', 'position': 'atf', 'sizes': [2], 'accountId': '15680', 'zoneId': '486110'}, 'bidder': 'rubicon'},
                            {'params': {'placementId': 9265078}, 'bidder': 'appnexus'},
                            {'params': {'placement': 4224498, 'network': '10676.1'}, 'bidder': 'aol'},
                            {'params': {'placementId': '65725'}, 'bidder': 'rhythmone'},
                            {'params': {'id': 178241}, 'bidder': 'districtmDMX'},
                            ],
                    code: 'div-gpt-ad-1393435113147-0',
                    tag: 'SF_ProjectFiles_728x90_A',
                    
                    sizes: [[728, 90]]
                });
            }
            if (SF.initial_breakpoints_visible.large) {
                SF.Ads.prebidUnits.push({
                    bids: [{'params': {'tagid': '364646'}, 'bidder': 'sovrn'},
                            {'params': {'cp': 558092, 'cf': '300x250', 'ct': '472221'}, 'bidder': 'pulsepoint'},
                            {'params': {'placementId': 12407713}, 'bidder': 'brealtime'},
                            {'params': {'siteId': '103240', 'position': 'atf', 'sizes': [15, 10], 'accountId': '15680', 'zoneId': '486110'}, 'bidder': 'rubicon'},
                            {'params': {'placementId': 9265076}, 'bidder': 'appnexus'},
                            {'params': {'placement': 4224505, 'network': '10676.1'}, 'bidder': 'aol'},
                            {'params': {'placementId': '65725'}, 'bidder': 'rhythmone'},
                            {'params': {'id': 178239}, 'bidder': 'districtmDMX'},
                            ],
                    code: 'div-gpt-ad-1392147725721-0',
                    tag: 'SF_ProjectFiles_300x250_A',
                    
                    sizes: [[300, 250], [300, 600], [300, 1050]]
                });
            }
            if (SF.initial_breakpoints_visible.large) {
                SF.Ads.prebidUnits.push({
                    bids: [{'params': {'tagid': '364647'}, 'bidder': 'sovrn'},
                            {'params': {'cp': 558092, 'cf': '300x250', 'ct': '472222'}, 'bidder': 'pulsepoint'},
                            {'params': {'placementId': 12407692}, 'bidder': 'brealtime'},
                            {'params': {'siteId': '103240', 'sizes': [15], 'accountId': '15680', 'zoneId': '486112'}, 'bidder': 'rubicon'},
                            {'params': {'placementId': 9265082}, 'bidder': 'appnexus'},
                            {'params': {'placement': 4224503, 'network': '10676.1'}, 'bidder': 'aol'},
                            {'params': {'placementId': '65725'}, 'bidder': 'rhythmone'},
                            {'params': {'id': 178240}, 'bidder': 'districtmDMX'},
                            ],
                    code: 'div-gpt-ad-1392148208789-0',
                    tag: 'SF_ProjectFiles_300x250_B',
                    
                    sizes: [[300, 250]]
                });
            }
            SF.Ads.prebidAdjustments = {"bidder_deflations": {"komoona": 0.92, "onefiftytwo": 0.9, "indexexchange": 0.95, "sovrn": 0.91, "aardvark": 0.95, "aol": 0.94, "brealtime": 0.87, "districtmdmx": 0.79, "oftmedia": 0.9, "appnexus": 0.81, "pulsepoint": 0.87, "rubicon": 1, "indexex#hange": 0.98, "springserve": 0.001, "rubiconlite": 0.9, "rhythmone": 0.85}, "inflation": 1.2, "floor": 0.02};
        </script>
        <script type="text/javascript" id="pbjs_script" data-dom="https://d3tglifpd8whs6.cloudfront.net"  src="https://a.fsdn.com/con/js/sftheme/vendor/bizx-prebid.js?1513198786" ></script>
        
        <meta id="project_name" name="project_name" content="farsitex">
        
        <meta name="description" content="FarsiTeX is a free Persian/English bidirectional typesetting system based on Donald Knuth&#39;s TeX and Leslie Lamport&#39;s LaTeX. Currently FarsiTeX is…">
        <meta name="keywords" content="Mathematics, Other/Nonlisted Topic, Word Processors,  Open Source, Open Source Software, Development, Community, Source Code, Secure,  Downloads, Free Software">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FarsiTeX -  Browse Files at SourceForge.net</title>
        <link rel="shortcut icon" href="https://a.fsdn.com/con/img/sftheme/favicon.ico">
        
        <script type="text/javascript">
            /*global unescape, window, console, jQuery, $, net, SF, DD_belatedPNG, ga */
            if (!window.SF) {
                window.SF = {};
            }
        </script>

        <script type="text/javascript">
            SF.EU_country_codes = ["BE", "FR", "BG", "DK", "VG", "WF", "HR", "BM", "DE", "HU", "JE", "FI", "FK", "YT", "NL", "PT", "CW", "NC", "LV", "RE", "LT", "LU", "PF", "GI", "TF", "RO", "PN", "TC", "PL", "PM", "GS", "GR", "GP", "EE", "IT", "GG", "CZ", "CY", "SX", "IO", "AT", "AW", "AX", "GL", "IE", "KY", "ES", "ME", "MF", "BL", "GF", "SK", "MT", "SI", "SH", "MQ", "MS", "AI", "SE", "GB"];
            SF.unknown_country_codes = ["", "A1", "A2", "O1"];
        </script>
        
<script src="https://a.fsdn.com/con/js/sftheme/vendor/modernizr.3.3.1.custom.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/sftheme/vendor/jquery-1.11.1.min.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/lib/jquery.core.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/bootstrap.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/sftheme/sticky.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/sftheme/shared_head.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/sftheme-typescript/compliance.js?1513198786" type="text/javascript"></script>


<!--[if lt IE 7 ]>
  <script src="//a.fsdn.com/con/js/sftheme/vendor/dd_belatedpng.js"></script>
  <script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
<![endif]-->


<link href='https://fonts.googleapis.com/css?family=Ubuntu:regular' rel='stylesheet' type='text/css'>
<style type="text/css">
    @font-face {
        font-family: "Pictos";
        src: url('https://a.fsdn.com/con/css/fonts/sftheme/pictos-web.eot');
        src: local("☺"), url('https://a.fsdn.com/con/css/fonts/sftheme/pictos-web.woff') format('woff'), url('https://a.fsdn.com/con/css/fonts/sftheme/pictos-web.ttf') format('truetype'), url('https://a.fsdn.com/con/css/fonts/sftheme/pictos-web.svg') format('svg');
    }
</style>
 
<link rel="stylesheet" href="https://a.fsdn.com/con/css/sf-files.css?1513198786" type="text/css">



        <style type="text/css">.xc7772c60ede7a3c521b0e669f92d35ee3ff70052 { display: none !important; }</style>

        
<script type="text/javascript">
    SF.adblock = true;
</script><script type='text/javascript'>
       /*global Foundation */
           /*global googletag, bizxPrebid */
       var gptadslots=[];
       var gptadHandlers={};
       var gptadRenderers=[];
       var gptadComplements={};

       googletag.cmd.push(function() {
           var leaderboard = googletag.sizeMapping()
               .addSize([970, 200], [[970, 250], [728, 90]])
               .addSize([728, 200], [[728, 90]])
               .build();
           var leaderboardInContent = googletag.sizeMapping()
               .addSize([1280, 200], [[970, 250], [728, 90]])
               .addSize([728, 200], [[728, 90]])
               .build();

            //prebid_log('GPT push define slots and targeting');
            googletag.pubads()
               .setForceSafeFrame(true)
               .setTargeting('usingSafeFrame','1')
               .setSafeFrameConfig({
                    allowOverlayExpansion: true,
                    allowPushExpansion: true,
                    sandbox: true
            });
            gptadslots.push(googletag.defineSlot('/41014381/Sourceforge/SF_ProjectFiles_728x90_A',[728, 90],'div-gpt-ad-1393435113147-0')
                                                    .addService(googletag.pubads())
                                                        .setTargeting('tpc',['farsitex', 'wordprocessors', 'c', 'scientific', 'editors', 'other', 'cpp', 'mathematics'])
                                                        .setTargeting('shortname','farsitex')
                                                        .setTargeting('aud',['endusers', 'scienceresearch'])
                                                        .setTargeting('mirror','False')
                                                        .setTargeting('dc_ref','https://sourceforge.net/projects/farsitex/files/')
                                                        .setTargeting('sz','728x90')
                                                        .setTargeting('page_type','pg_files'));
            gptadComplements['/41014381/Sourceforge/SF_ProjectFiles_728x90_A'] = ["SF_ProjectFiles_HubIcon_200x90_A", ["728x90"]] ;
            gptadslots.push(googletag.defineSlot('/41014381/Sourceforge/SF_ProjectFiles_300x250_A',[[300, 250], [300, 600], [300, 1050]],'div-gpt-ad-1392147725721-0')
                                                    .addService(googletag.pubads())
                                                        .setTargeting('tpc',['farsitex', 'wordprocessors', 'c', 'scientific', 'editors', 'other', 'cpp', 'mathematics'])
                                                        .setTargeting('shortname','farsitex')
                                                        .setTargeting('aud',['endusers', 'scienceresearch'])
                                                        .setTargeting('mirror','False')
                                                        .setTargeting('dc_ref','https://sourceforge.net/projects/farsitex/files/')
                                                        .setTargeting('sz','300x250,300x600,300x1050')
                                                        .setTargeting('page_type','pg_files'));
            gptadslots.push(googletag.defineSlot('/41014381/Sourceforge/SF_ProjectFiles_300x250_B',[300, 250],'div-gpt-ad-1392148208789-0')
                                                    .addService(googletag.pubads())
                                                        .setTargeting('tpc',['farsitex', 'wordprocessors', 'c', 'scientific', 'editors', 'other', 'cpp', 'mathematics'])
                                                        .setTargeting('shortname','farsitex')
                                                        .setTargeting('aud',['endusers', 'scienceresearch'])
                                                        .setTargeting('mirror','False')
                                                        .setTargeting('dc_ref','https://sourceforge.net/projects/farsitex/files/')
                                                        .setTargeting('sz','300x250')
                                                        .setTargeting('page_type','pg_files'));
            gptadslots.push(googletag.defineSlot('/41014381/Sourceforge/SF_ProjectFiles_HubIcon_200x90_A',[200, 90],'div-gpt-ad-1392148098424-0')
                                                    .addService(googletag.pubads())
                                                        .setTargeting('tpc',['farsitex', 'wordprocessors', 'c', 'scientific', 'editors', 'other', 'cpp', 'mathematics'])
                                                        .setTargeting('shortname','farsitex')
                                                        .setTargeting('aud',['endusers', 'scienceresearch'])
                                                        .setTargeting('mirror','False')
                                                        .setTargeting('dc_ref','https://sourceforge.net/projects/farsitex/files/')
                                                        .setTargeting('sz','200x90')
                                                        .setTargeting('page_type','pg_files'));
            gptadslots.push(googletag.defineSlot('/7346874/SF-300x250',[300, 250],'div-gpt-ad-1392148208795-0')
                                                    .addService(googletag.pubads())
                                                        .setTargeting('tpc',['farsitex', 'wordprocessors', 'c', 'scientific', 'editors', 'other', 'cpp', 'mathematics'])
                                                        .setTargeting('shortname','farsitex')
                                                        .setTargeting('aud',['endusers', 'scienceresearch'])
                                                        .setTargeting('mirror','False')
                                                        .setTargeting('dc_ref','https://sourceforge.net/projects/farsitex/files/')
                                                        .setTargeting('sz','300x250')
                                                        .setTargeting('page_type','pg_files'));
            

            googletag.pubads().setTargeting('requestSource', 'GPT');
            googletag.pubads().enableAsyncRendering();

            googletag.pubads().collapseEmptyDivs();
            googletag.pubads().addEventListener('slotOnload', function(event) {
                SF.Ads.Helpers.getSizeAndSetClass.call(this, event);
            });
            googletag.pubads().addEventListener('slotRenderEnded', function(event) {
                var unitName = event.slot.getName();
                if ( unitName in gptadHandlers ) {
                   for (var i = 0; i < gptadHandlers[unitName].length; i++) {
                       try {
                           SF.Ads.RenderHandlers[gptadHandlers[unitName][i]].call(this, event);
                       } catch (e) {
                       }
                   }
                }

                SF.Ads.RenderHandlers.decorateSizeDelivered.call(this, event);
            });
            googletag.pubads().addEventListener('impressionViewable', SF.Ads.RenderHandlers.viewabilityInstrumentation);
            
            googletag.pubads().addEventListener('slotRenderEnded', SF.Ads.listenerForBlockThis);
            bizxPrebid.Ads.pushToGoogle();

            googletag.enableServices();
        });
   </script> 

        

        
<!-- CCM Tag -->
<script type="text/javascript">
  (function () {
    /*global _ml:true, window */
    _ml = window._ml || {};
    _ml.eid = '771';

    var s = document.getElementsByTagName('script')[0], cd = new Date(), mltag = document.createElement('script');
    mltag.type = 'text/javascript'; mltag.async = true;
    mltag.src = '//ml314.com/tag.aspx?' + cd.getDate() + cd.getMonth() + cd.getFullYear();
    s.parentNode.insertBefore(mltag, s);
  })();
</script>
<!-- End CCM Tag -->

        
        <script type="text/javascript" src="https://a.fsdn.com/con/js/adframe.js?1513198786"></script>
        <script type="text/javascript">

            /*jshint ignore:start*/
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function() {
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            /*jshint ignore:end*/

            //var $ = jQuery.noConflict(); // jshint ignore:line
        </script>
        <script type="text/javascript">
            SF.devicePixelRatio = Math.round(window.getDevicePixelRatio()*10)/10;
                ga('create', 'UA-36130941-1', {
                    'name': '1', 'sampleRate': 9});
                ga('create', 'UA-36130941-1', 'auto', {   'sampleRate': 9});
            /*global _ml:true */
            if (typeof _ml !== 'undefined' && _ml.us) {
                if (_ml.us.tp && _ml.us.tp.length > 0) {
                    ga('set', 'dimension2', _ml.us.tp[0]);
                }
                if (_ml.us.pc && _ml.us.pc.length > 0) {
                    ga('set', 'dimension7', _ml.us.pc[0]);
                }
                ga('set', 'dimension3', _ml.us.ind);
                ga('set', 'dimension4', _ml.us.cr);
                ga('set', 'dimension5', _ml.us.cs);
                ga('set', 'dimension6', _ml.us.dm);
                ga('set', 'dimension8', _ml.us.sn);
            }

            
                ga('set', 'dimension9', 'farsitex');
                ga('set', 'dimension10', 'pg_files');
                    
                ga('set', 'dimension13', 'Logged Out');
                ga('set', 'dimension14', 'No');  
                ga('set', 'dimension15', 'desktop');
                ga('set', 'dimension16', 'sync');
                ga('set', 'dimension17', SF.devicePixelRatio);
                ga('send', 'pageview');

            
        </script>
        <script type="text/javascript">
        var _paq = _paq || [];
        _paq.push(['trackPageView', document.title, {
                dimension1: 'farsitex',
            dimension2: 'pg_files',
            dimension3: SF.devicePixelRatio
        }]);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u="//analytics.slashdotmedia.com/";
            _paq.push(['setTrackerUrl', u+'sf.php']);
            _paq.push(['setSiteId', 39]);
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'sf.js'; s.parentNode.insertBefore(g,s);
        })();
        </script>

        <script type="text/javascript"> try{(function(){ var cb = new Date().getTime(); var s = document.createElement("script"); s.defer = true; s.src = "//tag.crsspxl.com/s1.js?d=2396&cb="+cb; var s0 = document.getElementsByTagName('script')[0]; s0.parentNode.insertBefore(s, s0); })();}catch(e){} </script>


        
        
<script>
 /*jshint ignore:start*/
 (function (s,o,n,a,r,i,z,e) {s['StackSonarObject']=r;s[r]=s[r]||function(){
 (s[r].q=s[r].q||[]).push(arguments)},s[r].l=1*new Date();i=o.createElement(n),
 z=o.getElementsByTagName(n)[0];i.async=1;i.src=a;z.parentNode.insertBefore(i,z)
 })(window,document,'script','https://www.stack-sonar.com/ping.js','stackSonar');
 stackSonar('stack-connect', '105');
 /*jshint ignore:end*/
</script>

        
    </head>
    <body id="pg_files" class="
    user
     bluesteel
 anonymous  body_class">
        
        <div id="busy-spinner"></div>
        

<header id="site-header">
    <div class="wrapper">
        <a href="https://sourceforge.net/" class="logo">
            <span>SourceForge</span>
        </a>
        <form method="get" action="https://sourceforge.net/directory/">
            <input type="text" id="words" name="q" placeholder="Search">
        </form>
        <!--Switch to {language}-->
        <nav id="nav-site">
            <a href="https://sourceforge.net/directory/" title="Browse our software.">Browse</a>
            <a href="https://sourceforge.net/directory/enterprise" title="Browse our Enterprise software.">Enterprise</a>
            <a href="https://sourceforge.net/blog/" title="Read the latest news from the SF HQ.">Blog</a>
            <a href="https://sourceforge.net/articles/" title="Read the latest industry news about products and updates from leading cloud, network, and developer tool service providers">Articles</a>
            <a href="https://deals.sourceforge.net/?utm_source=sourceforge&amp;utm_medium=navbar&amp;utm_campaign=homepage" title="Discover and Save on the Best Gear, Gadgets, and Software" class="featured-link" target="_blank">Deals</a>
            <a href="https://sourceforge.net/support" title="Contact us for help and feedback.">Help</a>
            <a href="https://sourceforge.net/create"  class="featured-link blue" title="Create and publish Open Source software for free.">Create</a>
        </nav>
        <nav id="nav-account">
            
              <div class="logged_out">
                  <a href="https://sourceforge.net/auth/">Log In</a>
                <span>or</span>
                <a href="https://sourceforge.net/user/registration">Join</a>
              </div>
            
        </nav>
    </div>
</header>
<header id="site-sec-header">
    <div class="wrapper">
        <nav id="nav-hubs">
            <h4>Solution Centers</h4>
            
        </nav>
        <nav id="nav-collateral">
            <a href="https://library.slashdotmedia.com/">Resources</a>
            <a href="https://sourceforge.net/user/newsletters?source=sfnet_header">Newsletters</a>

            <a href="https://sourceforge.net/cloud-storage-providers/?source=sfnet_header">Cloud Storage Providers</a>
            <a href="https://sourceforge.net/business-voip/?source=sfnet_header">Business VoIP Providers</a>
            
            <a href="https://sourceforge.net/speedtest/?source=sfnet_header">Internet Speed Test</a>
            
            <a href="https://sourceforge.net/call-center-providers/?source=sfnet_header">Call Center Providers</a>
        </nav>
        <nav id="nav-social">
            
<span></span>
<a href="https://twitter.com/sourceforge" class="twitter" rel="nofollow" target="_blank">

<svg  viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1684 408q-67 98-162 167 1 14 1 42 0 130-38 259.5t-115.5 248.5-184.5 210.5-258 146-323 54.5q-271 0-496-145 35 4 78 4 225 0 401-138-105-2-188-64.5t-114-159.5q33 5 61 5 43 0 85-11-112-23-185.5-111.5t-73.5-205.5v-4q68 38 146 41-66-44-105-115t-39-154q0-88 44-163 121 149 294.5 238.5t371.5 99.5q-8-38-8-74 0-134 94.5-228.5t228.5-94.5q140 0 236 102 109-21 205-78-37 115-142 178 93-10 186-50z"/></svg></a>
<a href="https://www.facebook.com/sourceforgenet/" class="facebook" rel="nofollow" target="_blank">

<svg  viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1343 12v264h-157q-86 0-116 36t-30 108v189h293l-39 296h-254v759h-306v-759h-255v-296h255v-218q0-186 104-288.5t277-102.5q147 0 228 12z"/></svg></a>
<a href="https://plus.google.com/+sourceforge" class="google" rel="nofollow publisher" target="_blank">

<svg   viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M896 786h725q12 67 12 128 0 217-91 387.5t-259.5 266.5-386.5 96q-157 0-299-60.5t-245-163.5-163.5-245-60.5-299 60.5-299 163.5-245 245-163.5 299-60.5q300 0 515 201l-209 201q-123-119-306-119-129 0-238.5 65t-173.5 176.5-64 243.5 64 243.5 173.5 176.5 238.5 65q87 0 160-24t120-60 82-82 51.5-87 22.5-78h-436v-264z"/></svg></a>
<a href="https://www.linkedin.com/company/sourceforge.net" class="linkedin" rel="nofollow" target="_blank">

<svg  viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M477 625v991h-330v-991h330zm21-306q1 73-50.5 122t-135.5 49h-2q-82 0-132-49t-50-122q0-74 51.5-122.5t134.5-48.5 133 48.5 51 122.5zm1166 729v568h-329v-530q0-105-40.5-164.5t-126.5-59.5q-63 0-105.5 34.5t-63.5 85.5q-11 30-11 81v553h-329q2-399 2-647t-1-296l-1-48h329v144h-2q20-32 41-56t56.5-52 87-43.5 114.5-15.5q171 0 275 113.5t104 332.5z"/></svg></a>
<span></span>
        </nav>
    </div>
</header>



        
        <header id="page-header">
    
    <div id="banner-sterling" class="sterling">
        
        
        


 
    


<div class="sticky-anchor"></div>
<div class="sticky">

<div id="SF_ProjectFiles_728x90_A_wrapped" data-id="div-gpt-ad-1393435113147-0" class="draper leaderboard  
visibility_rules 
 v_728_leaderboard  v_970_billboard "
>
<script type="text/javascript">
/*global googletag */
if (SF.initial_breakpoints_visible.leaderboard) {
(function(){
    
    document.write('<div id="div-gpt-ad-1393435113147-0"></div>');
}());

gptadRenderers['SF_ProjectFiles_728x90_A'] = function(){  // jshint ignore:line
    googletag.cmd.push(function() {
        googletag.display('div-gpt-ad-1393435113147-0');
    });
};
gptadRenderers['SF_ProjectFiles_728x90_A']();  // jshint ignore:line
}
</script>
</div>


</div>
<script type="text/javascript">
    if (!SF.adblock) {
        SF.Ads.stickyLeader = new SF.Stickify($('.sticky').eq(0));
    }
</script>
        
        


 
    



<div id="SF_ProjectFiles_HubIcon_200x90_A_wrapped" data-id="div-gpt-ad-1392148098424-0" class="draper hub  
visibility_rules 
 v_200_billboard "
>
<script type="text/javascript">
/*global googletag */
if (SF.initial_breakpoints_visible.billboard) {
(function(){
    
    document.write('<div id="div-gpt-ad-1392148098424-0"></div>');
}());

gptadRenderers['SF_ProjectFiles_HubIcon_200x90_A'] = function(){  // jshint ignore:line
    googletag.cmd.push(function() {
        googletag.display('div-gpt-ad-1392148098424-0');
    });
};
gptadRenderers['SF_ProjectFiles_HubIcon_200x90_A']();  // jshint ignore:line
}
</script>
</div>


    </div>

    
    <nav id="breadcrumbs" class="breadcrumbs">
        <ul>
            <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
            <a itemprop="url" href="https://sourceforge.net/"><span itemprop="title">Home</span></a></li>
            <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="https://sourceforge.net/directory"><span itemprop="title">Browse</span></a></li><li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="https://sourceforge.net/directory/science-engineering/"><span itemprop="title">Science &amp; Engineering</span></a></li><li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="https://sourceforge.net/directory/science-engineering/mathematics/"><span itemprop="title">Mathematics</span></a></li><li class="project"><a href="bugs_submit.php">FarsiTeX</a></li>
            
              <li>Files</li>
            
        </ul>
    </nav>

    <div id="project-header" itemscope itemtype="http://schema.org/SoftwareApplication">
        

<section id="project-icon" class="noneditable">
    <img itemscope itemtype="http://schema.org/ImageObject" itemprop="image" alt="FarsiTeX Icon" 



    src="https://a.fsdn.com/con/img/project_default.png?&amp;w=48"
    
 height="48" width="48"/>
</section>
<div id="project-title" class="project-mirror">
    <div>
        <div>
            <h1 itemprop="name">
                    <a href="bugs_submit.php" itemprop="url">FarsiTeX</a></h1>
        </div>
        <p id="maintainers" itemprop="author" itemscope itemtype="http://schema.org/Person">
        Brought to you by:
        <a href="http://sourceforge.net/users/behdad" itemprop="url"><span itemprop="name">behdad</span></a></p>
        
    </div>
    

</div>
<nav id="project-nav">
    
    <div id="top_nav"><div id="top_nav_admin">
        <ul class="dropdown">
            
            <li >
                <a href="https://sourceforge.net/projects/farsitex/?source=navbar"
                >
                <span>Summary</span></a>
                
            </li>
            
            <li class="selected">
                <a href="https://sourceforge.net/projects/farsitex/files/?source=navbar"
                >
                <span>Files</span></a>
                
            </li>
            
            <li >
                <a href="https://sourceforge.net/projects/farsitex/reviews?source=navbar"
                >
                <span>Reviews</span></a>
                
            </li>
            
            <li >
                <a href="https://sourceforge.net/projects/farsitex/support?source=navbar"
                >
                <span>Support</span></a>
                
            </li>
            
            <li >
                <a href="https://sourceforge.net/p/farsitex/wiki/?source=navbar"
                >
                <span>Wiki</span></a>
                
            </li>
            
            <li >
                <a href="https://sourceforge.net/p/farsitex/mailman/?source=navbar"
                >
                <span>Mailing Lists</span></a>
                
            </li>
            
            <li >
                <a href="https://sourceforge.net/p/farsitex/patches/?source=navbar"
                >
                <span>Patches</span></a>
                
            </li>
            
            <li >
                <a href="https://sourceforge.net/p/farsitex/news/?source=navbar"
                >
                <span>News</span></a>
                
            </li>
            
            <li >
                <a href="https://sourceforge.net/p/farsitex/donate/?source=navbar"
                data-external=true>
                <span>Donate</span></a>
                
            </li>
            
            <li >
                <a href="https://sourceforge.net/p/farsitex/code/?source=navbar"
                >
                <span>Code</span></a>
                
            </li>
            
            
        </ul>
        
    </div></div>
    
</nav>


    </div>
</header>


        
<div id="messages">
</div>



        <div id="page-body">
    <noscript>
        <p>The interactive file manager requires Javascript. Please enable it or use <a href="https://sourceforge.net/p/forge/documentation/Release%20Files%20for%20Download#scp">sftp or scp</a>.
        <br/>You may still <em>browse</em> the files here.</p>
    </noscript>
    <div id="files">
      <div class="download-bar">Looking for the latest version? <strong>
            <a href="https://sourceforge.net/projects/farsitex/files/latest/download?source=files" title="/FarsiTeX (experimental)/1.0pre1/farsitex-1.0pre1-setup.exe:  released on 2006-02-14 19:16:07 UTC">
                <span>Download farsitex-1.0pre1-setup.exe (23.8 MB)</span>
            </a>
            </strong>
        </div><div class="files-breadcrumb">
            <span class="actions"><a href="https://sourceforge.net/projects/farsitex/rss?path=/" title="Monitor this project's files using RSS" data-icon="f" class="ico ico-feed"></a></span>
            
            Home
            
            

        </div>

        <table id="files_list" title="This is a list of the files for this project">
            <col class="name-column">
            <col class="date-column">
            <col class="size-column">
            <col class="downloads-column">
            <col class="status-column">
            <thead>
                <tr>
                    <th title="The file or folder's name" id="files_name_h" class="first">Name</th>
                    <th title="The file or folder's last modified date" id="files_date_h" class="opt">Modified</th>
                    <th title="The file size" id="files_size_h" class="opt">Size</th>
                    <th title="The weekly download count" id="files_downloads_h" class="opt">Downloads / Week</th>
                    <th title="A snapshot of the file or folder's status" id="files_status_h" class="typesort">Status</th>
                </tr>
                
            </thead>
            <tbody>
                
                <tr title="FarsiTeX (experimental)" class="folder ">
                    <th scope="row" headers="files_name_h"><span data-icon="o" class="ico ico-folder"></span>
                        
                        
                        <a href="https://sourceforge.net/projects/farsitex/files/FarsiTeX%20%28experimental%29/"
                           title="Click to enter FarsiTeX (experimental)"
                           class="name">
                        FarsiTeX (experimental)</a></th>
                    <td headers="files_date_h" class="opt"><abbr title="2006-02-14 19:12:30 UTC">2006-02-14</abbr></td>
                    <td headers="files_size_h" class="opt"></td>
                    <td headers="files_downloads_h" class="opt">
                        5<a href="https://sourceforge.net/projects/farsitex/files/FarsiTeX%20%28experimental%29/stats/timeline" class="fs-stats ui-corner-all folder" rel="nofollow"><img class="fs-sparklines folder" src="https://a.fsdn.com/con/img/gallery/opa75.png" data-src="https://chart.googleapis.com/chart?cht=ls&amp;chs=20x16&amp;chco=0685c6&amp;chm=B,0685c6,0,0,0&amp;chd=t:0,2,0,0,0,3,0&amp;chds=0,3" title="5 weekly downloads" alt="5 weekly downloads" width="20" height="16" /></a></td>
                    <td headers="files_status_h" class="status folder"></td>
                </tr>
                <tr title="FarsiTeX for Windows" class="folder ">
                    <th scope="row" headers="files_name_h"><span data-icon="o" class="ico ico-folder"></span>
                        
                        
                        <a href="https://sourceforge.net/projects/farsitex/files/FarsiTeX%20for%20Windows/"
                           title="Click to enter FarsiTeX for Windows"
                           class="name">
                        FarsiTeX for Windows</a></th>
                    <td headers="files_date_h" class="opt"><abbr title="2002-03-06 10:01:07 UTC">2002-03-06</abbr></td>
                    <td headers="files_size_h" class="opt"></td>
                    <td headers="files_downloads_h" class="opt">
                        1<a href="https://sourceforge.net/projects/farsitex/files/FarsiTeX%20for%20Windows/stats/timeline" class="fs-stats ui-corner-all folder" rel="nofollow"><img class="fs-sparklines folder" src="https://a.fsdn.com/con/img/gallery/opa75.png" data-src="https://chart.googleapis.com/chart?cht=ls&amp;chs=20x16&amp;chco=0685c6&amp;chm=B,0685c6,0,0,0&amp;chd=t:0,0,0,0,0,0,1&amp;chds=0,3" title="1 weekly downloads" alt="1 weekly downloads" width="20" height="16" /></a></td>
                    <td headers="files_status_h" class="status folder"></td>
                </tr>
                <tr title="Windows Editor" class="folder ">
                    <th scope="row" headers="files_name_h"><span data-icon="o" class="ico ico-folder"></span>
                        
                        
                        <a href="https://sourceforge.net/projects/farsitex/files/Windows%20Editor/"
                           title="Click to enter Windows Editor"
                           class="name">
                        Windows Editor</a></th>
                    <td headers="files_date_h" class="opt"><abbr title="2001-09-14 08:57:13 UTC">2001-09-14</abbr></td>
                    <td headers="files_size_h" class="opt"></td>
                    <td headers="files_downloads_h" class="opt">
                        2<a href="https://sourceforge.net/projects/farsitex/files/Windows%20Editor/stats/timeline" class="fs-stats ui-corner-all folder" rel="nofollow"><img class="fs-sparklines folder" src="https://a.fsdn.com/con/img/gallery/opa75.png" data-src="https://chart.googleapis.com/chart?cht=ls&amp;chs=20x16&amp;chco=0685c6&amp;chm=B,0685c6,0,0,0&amp;chd=t:0,0,0,0,0,0,2&amp;chds=0,3" title="2 weekly downloads" alt="2 weekly downloads" width="20" height="16" /></a></td>
                    <td headers="files_status_h" class="status folder"></td>
                </tr>
                <tr title="FarsiTeX for DOS (obsolete)" class="folder ">
                    <th scope="row" headers="files_name_h"><span data-icon="o" class="ico ico-folder"></span>
                        
                        
                        <a href="https://sourceforge.net/projects/farsitex/files/FarsiTeX%20for%20DOS%20%28obsolete%29/"
                           title="Click to enter FarsiTeX for DOS (obsolete)"
                           class="name">
                        FarsiTeX for DOS (obsolete)</a></th>
                    <td headers="files_date_h" class="opt"><abbr title="2001-06-08 18:26:14 UTC">2001-06-08</abbr></td>
                    <td headers="files_size_h" class="opt"></td>
                    <td headers="files_downloads_h" class="opt">
                        0<a class="fs-stats ui-corner-all no-recent-downloads folder" href="https://sourceforge.net/projects/farsitex/files/FarsiTeX%20for%20DOS%20%28obsolete%29/stats/timeline" title="4,546 downloads (all-time), none recently." rel="nofollow"></a></td>
                    <td headers="files_status_h" class="status folder"></td>
                </tr>
                <tr title="mini MiKTeX" class="folder ">
                    <th scope="row" headers="files_name_h"><span data-icon="o" class="ico ico-folder"></span>
                        
                        
                        <a href="https://sourceforge.net/projects/farsitex/files/mini%20MiKTeX/"
                           title="Click to enter mini MiKTeX"
                           class="name">
                        mini MiKTeX</a></th>
                    <td headers="files_date_h" class="opt"><abbr title="2001-03-08 18:04:57 UTC">2001-03-08</abbr></td>
                    <td headers="files_size_h" class="opt"></td>
                    <td headers="files_downloads_h" class="opt">
                        3<a href="https://sourceforge.net/projects/farsitex/files/mini%20MiKTeX/stats/timeline" class="fs-stats ui-corner-all folder" rel="nofollow"><img class="fs-sparklines folder" src="https://a.fsdn.com/con/img/gallery/opa75.png" data-src="https://chart.googleapis.com/chart?cht=ls&amp;chs=20x16&amp;chco=0685c6&amp;chm=B,0685c6,0,0,0&amp;chd=t:0,0,0,0,0,3,0&amp;chds=0,3" title="3 weekly downloads" alt="3 weekly downloads" width="20" height="16" /></a></td>
                    <td headers="files_status_h" class="status folder"></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td id="totals"><span class="label">Totals: </span>5 Items</td>
                    <td class="opt">&nbsp;</td>
                    <td headers="files_size_h" class="opt"></td>
                    <td headers="files_downloads_h" class="opt">11</td>
                    <td headers="files_status_h">
                        
                    </td>
                </tr>
            </tfoot>
        </table>
        <div id="files-drawer" class="fs-widget fs-drawer consumer">
        </div>
    </div>

    
    <div id="files-sidebar" class="scroll-fixable" data-floor-compensate="145">
        <div class="sterling">
        


 
    
    



<div id="SF_ProjectFiles_300x250_A_wrapped" data-id="div-gpt-ad-1392147725721-0" class="draper multisize  
visibility_rules 
 v_300_large "
>
<script type="text/javascript">
/*global googletag */
if (SF.initial_breakpoints_visible.large) {
(function(){
    
    document.write('<div id="div-gpt-ad-1392147725721-0"></div>');
}());

gptadRenderers['SF_ProjectFiles_300x250_A'] = function(){  // jshint ignore:line
    googletag.cmd.push(function() {
        googletag.display('div-gpt-ad-1392147725721-0');
    });
};
gptadRenderers['SF_ProjectFiles_300x250_A']();  // jshint ignore:line
}
</script>
</div>


        </div>
                <aside class="sidebar-widget">
        <header>
        <h3>Recommended Projects</h3>
        </header>
    <ul class="vertical">

        

            
                <li class="item odd">
                <a href="https://sourceforge.net/projects/texniccenter/?source=recommended" title="TeXnicCenter"><img alt="Icon" src="https://a.fsdn.com/allura/p/texniccenter/icon?1372637505" /></a>
                <div class="pinfo-content recommended">
                <a class="project-name" href="https://sourceforge.net/projects/texniccenter/?source=recommended"
                        title="Learn more about TeXnicCenter ">TeXnicCenter</a>
                        <div class="summary">
                        A feature-rich environment for writing LaTeX documents on Windows
                        </div>
                    </div>

            </li>
            
                <li class="item even">
                <a href="https://sourceforge.net/projects/virastyar/?source=recommended" title="Virastyar"><img alt="Icon" src="https://a.fsdn.com/allura/p/virastyar/icon?1399223752" /></a>
                <div class="pinfo-content recommended">
                <a class="project-name" href="https://sourceforge.net/projects/virastyar/?source=recommended"
                        title="Learn more about Virastyar ">Virastyar</a>
                        <div class="summary">
                        Virastyar is an spell checker for Persian Language
                        </div>
                    </div>

            </li>
            
                <li class="item odd last">
                <a href="https://sourceforge.net/projects/miktex/?source=recommended" title="MiKTeX"><img alt="Icon" src="https://a.fsdn.com/allura/p/miktex/icon?1504598967" /></a>
                <div class="pinfo-content recommended">
                <a class="project-name" href="https://sourceforge.net/projects/miktex/?source=recommended"
                        title="Learn more about MiKTeX ">MiKTeX</a>
                        <div class="summary">
                        MiKTeX source code moved to GitHub
                        </div>
                    </div>

            </li>
            
        
    </ul>
</aside>


        


 
    



<div id="SF_ProjectFiles_300x250_B_wrapped" data-id="div-gpt-ad-1392148208789-0" class="draper medrec  
visibility_rules 
 v_300_large "
>
<script type="text/javascript">
/*global googletag */
if (SF.initial_breakpoints_visible.large) {
(function(){
    
    document.write('<div id="div-gpt-ad-1392148208789-0"></div>');
}());

gptadRenderers['SF_ProjectFiles_300x250_B'] = function(){  // jshint ignore:line
    googletag.cmd.push(function() {
        googletag.display('div-gpt-ad-1392148208789-0');
    });
};
gptadRenderers['SF_ProjectFiles_300x250_B']();  // jshint ignore:line
}
</script>
</div>



        
            <div class="sterling" id="deals-widget">
                
    
        <aside class="sidebar-widget stackcommerce-widget">
        <header id="stackcommerce-header">
            <img src="https://a.fsdn.com/con/img/sf_logo250x32.png" width="125" height="16" alt="sourceforge.net logo" />
            <h3>Deals</h3>
        </header>
        


 
    



<div id="SF-300x250_wrapped" data-id="div-gpt-ad-1392148208795-0" class="draper medrec  
visibility_rules 
 v_300_large "
>
<script type="text/javascript">
/*global googletag */
if (SF.initial_breakpoints_visible.large) {
(function(){
    
    document.write('<div id="div-gpt-ad-1392148208795-0"></div>');
}());

gptadRenderers['SF-300x250'] = function(){  // jshint ignore:line
    googletag.cmd.push(function() {
        googletag.display('div-gpt-ad-1392148208795-0');
    });
};
gptadRenderers['SF-300x250']();  // jshint ignore:line
}
</script>
</div>


    </aside>
    
    

            </div>
        
    </div>
    
    
<script type="text/javascript">
if (!SF.adblock) {
    
    SF.Ads.scrollFixableEnabled = true;
    
}
</script>

        </div>
        

        
            
    <div id="overlay-blockthis-wrapper">
    <div id="overlay-blockthis">
        <div class="instructions">
            <h2>Thanks for helping keep SourceForge clean.</h2>
            <p>
            <u>Screenshot instructions:</u><br>
            <a data-external target=_blank href="http://windows.microsoft.com/en-us/windows/take-screen-capture-print-screen#take-screen-capture-print-screen=windows-8">Windows</a><br>
            <a data-external target=_blank href="https://support.apple.com/en-us/HT201361">Mac</a><br>
            <a data-external target=_blank href="https://access.redhat.com/solutions/2178">Red Hat Linux</a> &nbsp;
            <a data-external target=_blank href="https://help.ubuntu.com/stable/ubuntu-help/screen-shot-record.html">Ubuntu</a>
            </p>
            <p>
                <u>Click URL instructions:</u><br>
                Right-click on ad, choose "Copy Link", then paste here &rarr;<br>
                (This may not be possible with some types of ads)
            </p>
            <a class="more-info" href="https://sourceforge.net/p/forge/documentation/Report%20a%20problem%20with%20Ad%20content/" target="_blank">More information about our ad policies</a>
        </div>
        <form class="dropzone" action="https://sourceforge.net/api/instrumentation/gpt" id="blockthisForm" method="POST">
            <a href="download.php#" id="btn-blockthis-close">X</a>
            
  <input type="hidden" name="_visit_cookie" value="753a9834-4d97-47c0-b3be-f81587655e34"/>
                <input type='hidden' name='timestamp' value='1513322901'/>
                <input type='hidden' name='spinner' value='X4HKmydr:r9Lzu_x4AisprklR4tI'/>
                <p class='xc7772c60ede7a3c521b0e669f92d35ee3ff70052'><label for='X5xrJp7:Hn:LjQFLDrBYKJNEChpw'>You seem to have CSS turned off.
             Please don't fill out this field.</label><input id='X5xrJp7:Hn:LjQFLDrBYKJNEChpw' name='X5hrJp7:Hn8IIFUfWPwijNho1rL0' type=
             'text'/></p>
                <p class='xc7772c60ede7a3c521b0e669f92d35ee3ff70052'><label for='X5xrJp7:Hn:PjQFLDrBYKJNEChpw'>You seem to have CSS turned off.
             Please don't fill out this field.</label><input id='X5xrJp7:Hn:PjQFLDrBYKJNEChpw' name='X5hrJp7:HnsIIFUfWPwijNho1rL0' type=
             'text'/></p>
            <p>Briefly describe the problem (required):
            <input name="X6xbDurmMxqKH0pMWEtCHFedswVg" type="text" required>
            </p>

            <div class="upload-text">Upload screenshot of ad (required):</div>
            <div id='upload-it'>
                <a href="download.php#" onclick="return false">Select a file</a>, or drag & drop file here.
            </div>
            <div id="upload-it-placeholder"></div> 

            <div class="dropzone-previews" style="display: none"></div>
            <div class="dz-message" style="display: none"></div> 
            
            <div id="dropzone-preview-template" style="display: none">
                <div class="dz-preview dz-file-preview">
                    <img data-dz-thumbnail src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" alt=""/>
                    <div class="dz-success-mark"><span>✔</span></div>
                    <div class="dz-error-mark"><span>✘</span></div>
                    <div class="dz-error-message"><span data-dz-errormessage></span></div>
                </div>
            </div>
            <p></p>
            <p>Please provide the ad click URL, if possible:
            <input name="X6RHKoLmV8KeB1:yDrJCHk2rbeoE" type="url">
            </p>
            <textarea id="gpt-info" name="X5BbHvbvuVHxIFcFbiLN6ygc:230"></textarea>
            <input type="submit" id="btn-blockthis-submit" value="Submit Report">
        </form>
    </div>
    </div>

        

        <script type="text/javascript" src="https://ads.pro-market.net/ads/scripts/site-143572.js"></script>

<footer id="site-footer">
    <div class="wrapper">
        <nav>
            <h5>SourceForge</h5>
            <a href="https://sourceforge.net/about">About</a>
            <a href="https://sourceforge.net/blog/category/sitestatus/">Site Status</a>
            <a href="https://twitter.com/sfnet_ops">@sfnet_ops</a>
        </nav>
        <nav>
            <h5>Find and Develop Software</h5>
            <a href="https://sourceforge.net/create/">Create a Project</a>
            <a href="https://sourceforge.net/directory/">Software Directory</a>
            <a href="https://sourceforge.net/top">Top Downloaded Projects</a>
        </nav>
        <nav>
            <h5>Community</h5>
            <a href="https://sourceforge.net/blog/">Blog</a>
            <a href="https://twitter.com/sourceforge">@sourceforge</a>
            <a href="https://library.slashdotmedia.com/">Resources</a>
        </nav>
        <nav>
            <h5>Help</h5>
            <a href="https://p.sf.net/sourceforge/docs">Site Documentation</a>
            <a href="https://sourceforge.net/support">Support Request</a>
        </nav>
    </div>
</footer>
<footer id="site-copyright-footer">
    <div class="wrapper">
        <div id="copyright">
            &copy; 2017 Slashdot Media. All Rights Reserved.<br />
        </div>
        <nav>
            <a href="https://slashdotmedia.com/terms-of-use/">Terms</a>
            <a href="https://slashdotmedia.com/privacy-statement/">Privacy</a>
            <span id='teconsent'></span>
            <a href="https://slashdotmedia.com/opt-out-choices/">Opt Out Choices</a>
            <a href="https://slashdotmedia.com">Advertise</a>
        </nav>
    </div>
</footer>

        
<div id="newsletter-floating" class="goth-form">
    <h2>Get latest updates about Open Source Projects, Conferences and News.</h2>
    <div class="teaser">
    <input type="submit" value="Sign Up" class="bt">
    </div>
    <div class="form-itself">
    


<form action="https://sourceforge.net/user/newsletters/subscribe" method="post" class="newsletter-subscribe-form compliance-form "  >

    <div class="form">
        <div class="fielderror"></div>
        <input type="email" name="X5RfLqLOSvyldAFJFIaGx_S0fjes"  placeholder="email@address.com" value="" required>

        <label class="input-set stacked input-set-country">
            
            <span class="label">Country</span>
            
            <span class="input">
<select id="country-floating" name="X5xHJvLSK3avjQFLDrBYKJNEChpw" required class="use-placeholder-color">
    <option value=""></option>
    <option value="AF">Afghanistan</option>
    <option value="AX">Aland Islands</option>
    <option value="AL">Albania</option>
    <option value="DZ">Algeria</option>
    <option value="AS">American Samoa</option>
    <option value="AD">Andorra</option>
    <option value="AO">Angola</option>
    <option value="AI">Anguilla</option>
    <option value="AQ">Antarctica</option>
    <option value="AG">Antigua and Barbuda</option>
    <option value="AR">Argentina</option>
    <option value="AM">Armenia</option>
    <option value="AW">Aruba</option>
    <option value="AU">Australia</option>
    <option value="AT">Austria</option>
    <option value="AZ">Azerbaijan</option>
    <option value="BS">Bahamas</option>
    <option value="BH">Bahrain</option>
    <option value="BD">Bangladesh</option>
    <option value="BB">Barbados</option>
    <option value="BY">Belarus</option>
    <option value="BE">Belgium</option>
    <option value="BZ">Belize</option>
    <option value="BJ">Benin</option>
    <option value="BM">Bermuda</option>
    <option value="BT">Bhutan</option>
    <option value="BO">Bolivia</option>
    <option value="BA">Bosnia and Herzegovina</option>
    <option value="BW">Botswana</option>
    <option value="BV">Bouvet Island</option>
    <option value="BR">Brazil</option>
    <option value="IO">British Indian Ocean Territory</option>
    <option value="BN">Brunei Darussalam</option>
    <option value="BG">Bulgaria</option>
    <option value="BF">Burkina Faso</option>
    <option value="BI">Burundi</option>
    <option value="KH">Cambodia</option>
    <option value="CM">Cameroon</option>
    <option value="CA">Canada</option>
    <option value="CV">Cape Verde</option>
    <option value="KY">Cayman Islands</option>
    <option value="CF">Central African Republic</option>
    <option value="TD">Chad</option>
    <option value="CL">Chile</option>
    <option value="CN">China</option>
    <option value="CX">Christmas Island</option>
    <option value="CC">Cocos (Keeling) Islands</option>
    <option value="CO">Colombia</option>
    <option value="KM">Comoros</option>
    <option value="CG">Congo</option>
    <option value="CD">Congo, The Democratic Republic of the</option>
    <option value="CK">Cook Islands</option>
    <option value="CR">Costa Rica</option>
    <option value="CI">Cote D&#39;Ivoire</option>
    <option value="HR">Croatia</option>
    <option value="CU">Cuba</option>
    <option value="CY">Cyprus</option>
    <option value="CZ">Czech Republic</option>
    <option value="DK">Denmark</option>
    <option value="DJ">Djibouti</option>
    <option value="DM">Dominica</option>
    <option value="DO">Dominican Republic</option>
    <option value="EC">Ecuador</option>
    <option value="EG">Egypt</option>
    <option value="SV">El Salvador</option>
    <option value="GQ">Equatorial Guinea</option>
    <option value="ER">Eritrea</option>
    <option value="EE">Estonia</option>
    <option value="ET">Ethiopia</option>
    <option value="FK">Falkland Islands (Malvinas)</option>
    <option value="FO">Faroe Islands</option>
    <option value="FJ">Fiji</option>
    <option value="FI">Finland</option>
    <option value="FR">France</option>
    <option value="GF">French Guiana</option>
    <option value="PF">French Polynesia</option>
    <option value="TF">French Southern Territories</option>
    <option value="GA">Gabon</option>
    <option value="GM">Gambia</option>
    <option value="GE">Georgia</option>
    <option value="DE">Germany</option>
    <option value="GH">Ghana</option>
    <option value="GI">Gibraltar</option>
    <option value="GR">Greece</option>
    <option value="GL">Greenland</option>
    <option value="GD">Grenada</option>
    <option value="GP">Guadeloupe</option>
    <option value="GU">Guam</option>
    <option value="GT">Guatemala</option>
    <option value="GG">Guernsey</option>
    <option value="GN">Guinea</option>
    <option value="GW">Guinea-Bissau</option>
    <option value="GY">Guyana</option>
    <option value="HT">Haiti</option>
    <option value="HM">Heard Island and McDonald Islands</option>
    <option value="VA">Holy See (Vatican City State)</option>
    <option value="HN">Honduras</option>
    <option value="HK">Hong Kong</option>
    <option value="HU">Hungary</option>
    <option value="IS">Iceland</option>
    <option value="IN">India</option>
    <option value="ID">Indonesia</option>
    <option value="IR">Iran, Islamic Republic of</option>
    <option value="IQ">Iraq</option>
    <option value="IE">Ireland</option>
    <option value="IM">Isle of Man</option>
    <option value="IL">Israel</option>
    <option value="IT">Italy</option>
    <option value="JM">Jamaica</option>
    <option value="JP">Japan</option>
    <option value="JE">Jersey</option>
    <option value="JO">Jordan</option>
    <option value="KZ">Kazakhstan</option>
    <option value="KE">Kenya</option>
    <option value="KI">Kiribati</option>
    <option value="KP">Korea, Democratic People&#39;s Republic of</option>
    <option value="KR">Korea, Republic of</option>
    <option value="XK">Kosovo</option>
    <option value="KW">Kuwait</option>
    <option value="KG">Kyrgyzstan</option>
    <option value="LA">Lao People&#39;s Democratic Republic</option>
    <option value="LV">Latvia</option>
    <option value="LB">Lebanon</option>
    <option value="LS">Lesotho</option>
    <option value="LR">Liberia</option>
    <option value="LY">Libyan Arab Jamahiriya</option>
    <option value="LI">Liechtenstein</option>
    <option value="LT">Lithuania</option>
    <option value="LU">Luxembourg</option>
    <option value="MO">Macau</option>
    <option value="MK">Macedonia</option>
    <option value="MG">Madagascar</option>
    <option value="MW">Malawi</option>
    <option value="MY">Malaysia</option>
    <option value="MV">Maldives</option>
    <option value="ML">Mali</option>
    <option value="MT">Malta</option>
    <option value="MH">Marshall Islands</option>
    <option value="MQ">Martinique</option>
    <option value="MR">Mauritania</option>
    <option value="MU">Mauritius</option>
    <option value="YT">Mayotte</option>
    <option value="MX">Mexico</option>
    <option value="FM">Micronesia, Federated States of</option>
    <option value="MD">Moldova, Republic of</option>
    <option value="MC">Monaco</option>
    <option value="MN">Mongolia</option>
    <option value="ME">Montenegro</option>
    <option value="MS">Montserrat</option>
    <option value="MA">Morocco</option>
    <option value="MZ">Mozambique</option>
    <option value="MM">Myanmar</option>
    <option value="NA">Namibia</option>
    <option value="NR">Nauru</option>
    <option value="NP">Nepal</option>
    <option value="NL">Netherlands</option>
    <option value="AN">Netherlands Antilles</option>
    <option value="NC">New Caledonia</option>
    <option value="NZ">New Zealand</option>
    <option value="NI">Nicaragua</option>
    <option value="NE">Niger</option>
    <option value="NG">Nigeria</option>
    <option value="NU">Niue</option>
    <option value="NF">Norfolk Island</option>
    <option value="MP">Northern Mariana Islands</option>
    <option value="NO">Norway</option>
    <option value="OM">Oman</option>
    <option value="PK">Pakistan</option>
    <option value="PW">Palau</option>
    <option value="PS">Palestinian Territory</option>
    <option value="PA">Panama</option>
    <option value="PG">Papua New Guinea</option>
    <option value="PY">Paraguay</option>
    <option value="PE">Peru</option>
    <option value="PH">Philippines</option>
    <option value="PN">Pitcairn Islands</option>
    <option value="PL">Poland</option>
    <option value="PT">Portugal</option>
    <option value="PR">Puerto Rico</option>
    <option value="QA">Qatar</option>
    <option value="RE">Reunion</option>
    <option value="RO">Romania</option>
    <option value="RU">Russian Federation</option>
    <option value="RW">Rwanda</option>
    <option value="BL">Saint Barthelemy</option>
    <option value="SH">Saint Helena</option>
    <option value="KN">Saint Kitts and Nevis</option>
    <option value="LC">Saint Lucia</option>
    <option value="MF">Saint Martin</option>
    <option value="PM">Saint Pierre and Miquelon</option>
    <option value="VC">Saint Vincent and the Grenadines</option>
    <option value="WS">Samoa</option>
    <option value="SM">San Marino</option>
    <option value="ST">Sao Tome and Principe</option>
    <option value="SA">Saudi Arabia</option>
    <option value="SN">Senegal</option>
    <option value="RS">Serbia</option>
    <option value="SC">Seychelles</option>
    <option value="SL">Sierra Leone</option>
    <option value="SG">Singapore</option>
    <option value="SK">Slovakia</option>
    <option value="SI">Slovenia</option>
    <option value="SB">Solomon Islands</option>
    <option value="SO">Somalia</option>
    <option value="ZA">South Africa</option>
    <option value="GS">South Georgia and the South Sandwich Islands</option>
    <option value="ES">Spain</option>
    <option value="LK">Sri Lanka</option>
    <option value="SD">Sudan</option>
    <option value="SR">Suriname</option>
    <option value="SJ">Svalbard and Jan Mayen</option>
    <option value="SZ">Swaziland</option>
    <option value="SE">Sweden</option>
    <option value="CH">Switzerland</option>
    <option value="SY">Syrian Arab Republic</option>
    <option value="TW">Taiwan</option>
    <option value="TJ">Tajikistan</option>
    <option value="TZ">Tanzania, United Republic of</option>
    <option value="TH">Thailand</option>
    <option value="TL">Timor-Leste</option>
    <option value="TG">Togo</option>
    <option value="TK">Tokelau</option>
    <option value="TO">Tonga</option>
    <option value="TT">Trinidad and Tobago</option>
    <option value="TN">Tunisia</option>
    <option value="TR">Turkey</option>
    <option value="TM">Turkmenistan</option>
    <option value="TC">Turks and Caicos Islands</option>
    <option value="TV">Tuvalu</option>
    <option value="UG">Uganda</option>
    <option value="UA">Ukraine</option>
    <option value="AE">United Arab Emirates</option>
    <option value="GB">United Kingdom</option>
    <option value="US" selected>United States</option>
    <option value="UM">United States Minor Outlying Islands</option>
    <option value="UY">Uruguay</option>
    <option value="UZ">Uzbekistan</option>
    <option value="VU">Vanuatu</option>
    <option value="VE">Venezuela</option>
    <option value="VN">Vietnam</option>
    <option value="VG">Virgin Islands, British</option>
    <option value="VI">Virgin Islands, U.S.</option>
    <option value="WF">Wallis and Futuna</option>
    <option value="EH">Western Sahara</option>
    <option value="YE">Yemen</option>
    <option value="ZM">Zambia</option>
    <option value="ZW">Zimbabwe</option>
</select>
</span>
        </label>
        <label class="input-set stacked input-set-state">
            
            <span class="label">State</span>
            
            <span class="input">
<select id="state-floating" name="X5QHSqK6bvyldAFJFIaGx_S0fjes"  class="use-placeholder-color">
    <option value=""></option>
    <option value="AL">Alabama</option>
    <option value="AK">Alaska</option>
    <option value="AZ">Arizona</option>
    <option value="AR">Arkansas</option>
    <option value="CA" selected>California</option>
    <option value="CO">Colorado</option>
    <option value="CT">Connecticut</option>
    <option value="DE">Delaware</option>
    <option value="DC">District of Columbia</option>
    <option value="FL">Florida</option>
    <option value="GA">Georgia</option>
    <option value="HI">Hawaii</option>
    <option value="ID">Idaho</option>
    <option value="IL">Illinois</option>
    <option value="IN">Indiana</option>
    <option value="IA">Iowa</option>
    <option value="KS">Kansas</option>
    <option value="KY">Kentucky</option>
    <option value="LA">Louisiana</option>
    <option value="ME">Maine</option>
    <option value="MD">Maryland</option>
    <option value="MA">Massachusetts</option>
    <option value="MI">Michigan</option>
    <option value="MN">Minnesota</option>
    <option value="MS">Mississippi</option>
    <option value="MO">Missouri</option>
    <option value="MT">Montana</option>
    <option value="NE">Nebraska</option>
    <option value="NV">Nevada</option>
    <option value="NH">New Hampshire</option>
    <option value="NJ">New Jersey</option>
    <option value="NM">New Mexico</option>
    <option value="NY">New York</option>
    <option value="NC">North Carolina</option>
    <option value="ND">North Dakota</option>
    <option value="OH">Ohio</option>
    <option value="OK">Oklahoma</option>
    <option value="OR">Oregon</option>
    <option value="PA">Pennsylvania</option>
    <option value="PR">Puerto Rico</option>
    <option value="RI">Rhode Island</option>
    <option value="SC">South Carolina</option>
    <option value="SD">South Dakota</option>
    <option value="TN">Tennessee</option>
    <option value="TX">Texas</option>
    <option value="UT">Utah</option>
    <option value="VT">Vermont</option>
    <option value="VA">Virginia</option>
    <option value="WA">Washington</option>
    <option value="WV">West Virginia</option>
    <option value="WI">Wisconsin</option>
    <option value="WY">Wyoming</option>
</select>
</span>
        </label>

        

<div class="gdpr-consent-requirement gdpr-consent-topics">
    <h4>
        Yes, also send me special offers about products &amp; services regarding:
        </h4>

        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="X7R3Ar7:M3I2H1IwRYVg5VefqTO8" value="artificial-intelligence"  data-consent-action data-consent-id=596517bdc14bed0737e41a50 ></span>
    <span class="checkbox-label">Artificial Intelligence</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="X7R3Ar7:M3I2H1IwRYVg5VefqTO8" value="cloud"  data-consent-action data-consent-id=596517bdc14bed0737e41a4f ></span>
    <span class="checkbox-label">Cloud</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="X7R3Ar7:M3I2H1IwRYVg5VefqTO8" value="network-security"  data-consent-action data-consent-id=596517bdc14bed0737e41a4e ></span>
    <span class="checkbox-label">Network Security</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="X7R3Ar7:M3I2H1IwRYVg5VefqTO8" value="hardware"  data-consent-action data-consent-id=596517bdc14bed0737e41a4d ></span>
    <span class="checkbox-label">Hardware</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="X7R3Ar7:M3I2H1IwRYVg5VefqTO8" value="software-development"  data-consent-action data-consent-id=596517bdc14bed0737e41a4c ></span>
    <span class="checkbox-label">Software Development</span>
    

</label>


        
</div>

<div class="gdpr-consent-requirement gdpr-contact-methods">
    <h4>
    You can contact me via:
    </h4>

    
 

<label class="input-set stacked inset input-set-consent-email minimum-explicit-required">
    <span class="checkbox"> <input type="checkbox" name="X7xHJp66fzKas1pkMakRN3VmqTGk" value="email"  data-consent-action data-consent-id=59aed8e456585fa9603b60ec ></span>
    <span class="checkbox-label">Email (required)</span>
    

</label>


    
 

<label class="input-set stacked inset prompt-phone">
    <span class="checkbox"> <input type="checkbox" name="X7xHJp66fzKas1pkMakRN3VmqTGk" value="phone"  data-consent-action data-consent-id=596517bdc14bed0737e41a51 ></span>
    <span class="checkbox-label">Phone</span>
    

</label>


    
 

<label class="input-set stacked inset prompt-phone">
    <span class="checkbox"> <input type="checkbox" name="X7xHJp66fzKas1pkMakRN3VmqTGk" value="sms"  data-consent-action data-consent-id=596517bdc14bed0737e41a53 ></span>
    <span class="checkbox-label">SMS</span>
    

</label>



    <label class="input-set inset input-phone hide ">
        <span class="label">Phone</span>
        <span class="input">
            <input type="tel" name="X5QLOprSbvyldAFJFIaGx_S0fjes" value="">
        </span>
        <span class="error-message"></span>
    </label>
</div>


        

      
        
    
    <div class="js-required fielderror">JavaScript is required for this form.</div>
    
    <div class="g-recaptcha"
          data-sitekey="6LeVgCEUAAAAACtawUTrPTBy0mTrGtjpPn_Xh-ZW"
          data-badge="inline"
          data-size="invisible"
          >
    </div>


    </div>

    <p class="details">
    <span class="fielderror"></span>
    <input type="hidden" name="X6xzDvqmSyqaH3o4LEtCHFedswVg" value="sitewide" class="newsletter-optin-assume">
    
 

<label class="input-set input-set-agree-general allow-precheck">
    <span class="checkbox"> <input type="checkbox" name="X5xHJp6mbwabjQFLDrBYKJNEChpw" value="consent"  data-consent-action data-consent-id=5a26cb73ecf83256408fd377 required></span>
    <span class="checkbox-label">I agree to receive these communications from SourceForge.net.  I understand that I can withdraw my consent at anytime. Please refer to our <a href="http://slashdotmedia.com/terms-of-use">Terms of Use</a> and <a href="https://slashdotmedia.com/privacy-statement/">Privacy Policy</a> or <a href="https://sourceforge.net/support">Contact Us</a> for more details.</span>
    

</label>


            
 

<label class="input-set input-set-agree-general-gdpr allow-precheck hide-initially">
    <span class="checkbox"> <input type="checkbox" name="X5xHJp6mbwabjQFLDrBYKJNEChpw" value="consent"  data-consent-action data-consent-id=5a26cb73ecf83256408fd378 required></span>
    <span class="checkbox-label">I agree to receive these communications from SourceForge.net via the means indicated above.  I understand that I can withdraw my consent at anytime. Please refer to our <a href="http://slashdotmedia.com/terms-of-use">Terms of Use</a> and <a href="https://slashdotmedia.com/privacy-statement/">Privacy Policy</a> or <a href="https://sourceforge.net/support">Contact Us</a> for more details.</span>
    

</label>


    </p>

    <input type="submit" value="Subscribe" class="bt button blue">

    <input type="hidden" name="source" value="floating">
    <input type="hidden" name="X8xHJvLSK3aus2JMcZ3RawTwjgbc" value="user">
    <input type="hidden" name="X4xnLvMoFAWldht_ymnhN4CZoTQo" value="">


  <input type="hidden" name="_visit_cookie" value="753a9834-4d97-47c0-b3be-f81587655e34"/>
<input type='hidden' name='timestamp' value='1513322901'/>
<input type='hidden' name='spinner' value='X4HKmydr:r9Lzu_x4AisprklR4tI'/>
<p class='xc7772c60ede7a3c521b0e669f92d35ee3ff70052'><label for='X5xrJp7:HnuLjQFLDrBYKJNEChpw'>You seem to have CSS turned off.
             Please don't fill out this field.</label><input id='X5xrJp7:HnuLjQFLDrBYKJNEChpw' name='X5hrJp7:Hn8IIFUfWPwijNho1rL0' type=
             'text'/></p>
<p class='xc7772c60ede7a3c521b0e669f92d35ee3ff70052'><label for='X5xrJp7:HnuPjQFLDrBYKJNEChpw'>You seem to have CSS turned off.
             Please don't fill out this field.</label><input id='X5xrJp7:HnuPjQFLDrBYKJNEChpw' name='X5hrJp7:HnsIIFUfWPwijNho1rL0' type=
             'text'/></p>
</form>


    </div>
    <a id="btn-float-close">No, Thank you</a>
</div>

        

<script src="https://a.fsdn.com/con/js/sftheme/vendor/dropzone-4.3.0.min.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/sftheme/vendor/dragster.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/lib/jquery.metadata.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/lib/jquery-ui-1.11.1.custom.min.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/lib/jquery.cookie.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/lib/jquery.tablesorter.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/lib/jquery.scrollTo-1.4.2.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/lib/date.format.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/lib/string.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/lib/handlebars.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/lib/jquery.dotdotdot-1.8.3.min.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/sftheme/jquery.notify.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/sftheme/shared.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/jquery.seltext.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/jquery.drawer.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/jquery.files.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/global.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/project.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/madmen.js?1513198786" type="text/javascript"></script>



        
            <script type="text/javascript" src="https://consent-st.truste.com/get?name=notice.js&amp;domain=slashdot.org&amp;c=teconsent&amp;text=true"></script>
            <noscript><p><img src="https://analytics.slashdotmedia.com/sf.php?idsite=39" style="border:0;" alt="" /></p></noscript><script src="https://www.google.com/recaptcha/api.js?onload=recaptchaLoadCallback&render=explicit" async defer></script><script type="text/javascript">
            _linkedin_data_partner_id = "97055";
            </script><script type="text/javascript">
            (function(){var s = document.getElementsByTagName("script")[0];
            var b = document.createElement("script");
            b.type = "text/javascript";b.async = true;
            b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
            s.parentNode.insertBefore(b, s);})();
            </script>
            <noscript>
            <img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=97055&fmt=gif" />
            </noscript>
<script type="text/javascript" src="https://a.fsdn.com/con/js/files.js?1513198786"></script>


<script type="text/x-handlebars-template" id="file-drawer-template">

<form class="bp" action="https://sourceforge.net/projects/farsitex/files/{{files_url}}{{full_path}}&#32;method="put" id="file_properties_content">
    <table id="drawer_row">
        <col class="name-column">
        <col class="date-column">
        <col class="size-column">
        <col class="downloads-column">
        <col class="status-column">
        <tbody>
            <tr title="{{name}}">
                <td>
                {{#if authorized }}
                    <input type="text" class="title" name="name" value="{{name}}">
                {{else}}
                    <a href="https://sourceforge.net/projects/farsitex/files/{{file_title_url&#32;this}}" class="name">{{name}}</a>
                {{/if}}
                </td>
                <td class="files-date"></td>
                <td class="files-size"></td>
                <td class="files-downloads"></td>
                <td class="files-status status"></td>
            </tr>
            {{#if authorized}}
                <tr>
                    <td colspan="5" id="name_message" class="invalid hide"></td>
                </tr>
                {{#if d_type}}
                <tr>
                    <td colspan="5">
                        <input type="checkbox" name="stage" id="stage" value="1" style="vertical-align: baseline" {{checked this.staged}} {{stage_onclick this}} />
                        <label for="stage" title="Only release technicians will see this folder in the file browser." {{stage_onclick this}}>{{stage_message this staging_days}}</label>
                        <span title="Only release technicians will see this folder in the file browser." class="ico-help">?</span>
                        {{stage_date this}}
                    </td>
                </tr>
                {{/if}}
            {{/if}}
        </tbody>
    </table>

    <div id="file-details">
        {{#if f_type}}
        <div id="file-info">
            {{stage_date this}}

            <div class="label">
                <span>SHA1:</span>
            </div>
            <div class="value">
                <pre class="selectable">{{sha1}}</pre>
            </div>

            <div class="label">
                <span>MD5:</span>
            </div>
            <div class="value">
                <pre class="selectable">{{md5}}</pre>
            </div>

            {{#if authorized}}
            <div class="label">
                <span>Download URL:</span>
            </div>
            <div class="value">
                {{#if not_downloadable}}
                    <pre class="selectable" title="This file will be ready for download shortly.">This file will be ready for download shortly.</pre>
                {{else}}
                <pre class="selectable" title="{{download_url}}">{{download_url}}</pre>
                {{/if}}
            </div>

            <div class="label">
                <label for="download_label">Download Button:</label>
            </div>
            <div class="value">
                <span class="text"><input id="download_label" type="text" class="text" name="download_label" placeholder="Change the label used on the download button" value="{{download_label}}"></span>
            </div>

            <div class="label">
                <label for="exclude_reports">Exclude Stats:</label>
            </div>
            <div class="value">
                <span class="checkbox"><input type="checkbox" id="exclude_reports" name="exclude_reports" value="1" {{should_exclude_reports exclude_reports}}></span>
            </div>
            {{/if}}

            {{#if legacy_release_notes}}
            <div class="value no-label">
                <span><a href="https://sourceforge.net/projects/farsitex/files/{{legacy_release_notes}}">Release Notes</a></span>
            </div>
            {{/if}}
        </div>

        <div id="download-info">
            <div class="label" style="width: 137px">
                <span>Downloads (All-Time):</span>
            </div>
            <div class="value" style="width:100px">
                <span>{{download_display downloads}}</span>
            </div>

            {{#if authorized}}
            <div class="label">
                <span>Mirror Status:</span>
            </div>
            <div class="value">
                <span id="mirror_count">Loading ...</span>
            </div>
            {{/if}}

            <div class="default">
                {{#if show_platforms}}
                <div class="drawer-label">
                    <span>Default Download For:</span>
                </div>
                {{/if}}
                <div class="drawer-value">
                    <ul>
                    {{#each platforms}}
                        {{> platform}}
                    {{/each}}

                    {{#if authorized}}
                    <li><a href="download.php#select_all" title="Select all">Select all</a></li>
                    {{/if}}
                    </ul>
                </div>
            </div>
        </div>
        {{/if}}

        {{#if authorized}}
        <hr />
        <p><input type="submit" value="Save"> <a href="download.php#" id="cancel" class="btn link cancel">Cancel</a></p>
        {{/if}}
    </div>
</form>

</script>

<script type="text/x-handlebars-template" id="platform-partial">

    <li>
        <label>
            {{#if authorized}}
            <input type="checkbox" name="default" value="{{value}}" {{_checked}}>
            <span title="{{title}}" class="platform-icon {{value}}">{{title}}</span>
            {{/if}}

            {{#unless authorized}}
            {{#unless skip}}
            <span title="{{title}}" class="platform-icon {{value}}">{{title}}</span>
            {{/unless}}
            {{/unless}}
        </label>
    </li>

</script>

<script type="text/javascript">
    net.sf.files = {"Windows Editor": {"staging_days": 3, "legacy_release_notes": null, "mirrors": 0, "downloads": 54310, "exclude_reports": false, "explicitly_staged": false, "files_url": "/projects/farsitex/files/", "link": "", "path": "", "stage": 0, "sha1": "", "name": "Windows Editor", "default": "", "staged": false, "download_url": "https://sourceforge.net/projects/farsitex/files/Windows%20Editor/download", "url": "/projects/farsitex/files/Windows%20Editor/", "downloadable": false, "authorized": null, "download_label": "", "md5": "", "type": "d", "full_path": "Windows Editor"}, "mini MiKTeX": {"staging_days": 3, "legacy_release_notes": null, "mirrors": 0, "downloads": 15003, "exclude_reports": false, "explicitly_staged": false, "files_url": "/projects/farsitex/files/", "link": "", "path": "", "stage": 0, "sha1": "", "name": "mini MiKTeX", "default": "", "staged": false, "download_url": "https://sourceforge.net/projects/farsitex/files/mini%20MiKTeX/download", "url": "/projects/farsitex/files/mini%20MiKTeX/", "downloadable": false, "authorized": null, "download_label": "", "md5": "", "type": "d", "full_path": "mini MiKTeX"}, "FarsiTeX (experimental)": {"staging_days": 3, "legacy_release_notes": null, "mirrors": 0, "downloads": 36108, "exclude_reports": false, "explicitly_staged": false, "files_url": "/projects/farsitex/files/", "link": "", "path": "", "stage": 0, "sha1": "", "name": "FarsiTeX (experimental)", "default": "", "staged": false, "download_url": "https://sourceforge.net/projects/farsitex/files/FarsiTeX%20%28experimental%29/download", "url": "/projects/farsitex/files/FarsiTeX%20%28experimental%29/", "downloadable": false, "authorized": null, "download_label": "", "md5": "", "type": "d", "full_path": "FarsiTeX (experimental)"}, "FarsiTeX for Windows": {"staging_days": 3, "legacy_release_notes": null, "mirrors": 0, "downloads": 40290, "exclude_reports": false, "explicitly_staged": false, "files_url": "/projects/farsitex/files/", "link": "", "path": "", "stage": 0, "sha1": "", "name": "FarsiTeX for Windows", "default": "", "staged": false, "download_url": "https://sourceforge.net/projects/farsitex/files/FarsiTeX%20for%20Windows/download", "url": "/projects/farsitex/files/FarsiTeX%20for%20Windows/", "downloadable": false, "authorized": null, "download_label": "", "md5": "", "type": "d", "full_path": "FarsiTeX for Windows"}, "FarsiTeX for DOS (obsolete)": {"staging_days": 3, "legacy_release_notes": null, "mirrors": 0, "downloads": 4546, "exclude_reports": false, "explicitly_staged": false, "files_url": "/projects/farsitex/files/", "link": "", "path": "", "stage": 0, "sha1": "", "name": "FarsiTeX for DOS (obsolete)", "default": "", "staged": false, "download_url": "https://sourceforge.net/projects/farsitex/files/FarsiTeX%20for%20DOS%20%28obsolete%29/download", "url": "/projects/farsitex/files/FarsiTeX%20for%20DOS%20%28obsolete%29/", "downloadable": false, "authorized": null, "download_label": "", "md5": "", "type": "d", "full_path": "FarsiTeX for DOS (obsolete)"}};
    net.sf.staging_days = 3;
    $(function ($) {
        $('#files').files();
    });
    $(window).load(function() {
        $('.fs-sparklines').each(function(){
          $(this).attr('src', $(this).attr('data-src'));
        });

        var tsConfig = {
            widgets: ['zebra'],
            sortForce: [[4, 0]],
            headers: {
                1: { sorter: 'abbrdate' },
                2: { sorter: 'filesize' },
                3: { sorter: 'localnum' },
                4: { sorter: 'type'}
            },
            textExtraction: function (node) {
                return node.innerHTML;
            }
        };

        if ($('#files_list tbody tr').length) {
            $('#files_list').tablesorter(tsConfig);
            $('#files_list tr th#parent_folder').unbind();
            $('#files_list tr th.header').not('.typesort').not('#parent_folder').addClass('usersortable').append('<span class="ui-icon fs-toggle"><\/span>');
        }
    });
</script>

      </body>
</html>

