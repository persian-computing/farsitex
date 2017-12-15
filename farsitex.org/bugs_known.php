<!doctype html>
<!-- Server: sfs-consume-20 -->

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
                    bids: [{'params': {'tagid': '364652'}, 'bidder': 'sovrn'},
                            {'params': {'cp': 558092, 'cf': '728x90', 'ct': '472229'}, 'bidder': 'pulsepoint'},
                            {'params': {'placementId': 12407704}, 'bidder': 'brealtime'},
                            {'params': {'siteId': '103240', 'position': 'atf', 'sizes': [2], 'accountId': '15680', 'zoneId': '486000'}, 'bidder': 'rubicon'},
                            {'params': {'placementId': 9265107}, 'bidder': 'appnexus'},
                            {'params': {'placement': 4224507, 'network': '10676.1'}, 'bidder': 'aol'},
                            {'params': {'placementId': '65725'}, 'bidder': 'rhythmone'},
                            {'params': {'id': 178246}, 'bidder': 'districtmDMX'},
                            ],
                    code: 'div-gpt-ad-1394209358853-0',
                    tag: 'SF_ProjectSum_728x90_A',
                    
                    sizes: [[728, 90]]
                });
            }
            if (SF.initial_breakpoints_visible.large) {
                SF.Ads.prebidUnits.push({
                    bids: [{'params': {'tagid': '364649'}, 'bidder': 'sovrn'},
                            {'params': {'cp': 558092, 'cf': '300x250', 'ct': '472224'}, 'bidder': 'pulsepoint'},
                            {'params': {'placementId': 12407717}, 'bidder': 'brealtime'},
                            {'params': {'siteId': '103240', 'position': 'atf', 'sizes': [15, 10], 'accountId': '15680', 'zoneId': '486000'}, 'bidder': 'rubicon'},
                            {'params': {'placementId': 9265108}, 'bidder': 'appnexus'},
                            {'params': {'placement': 4224499, 'network': '10676.1'}, 'bidder': 'aol'},
                            {'params': {'placementId': '65725'}, 'bidder': 'rhythmone'},
                            {'params': {'id': 178242}, 'bidder': 'districtmDMX'},
                            ],
                    code: 'div-gpt-ad-1394209358855-0',
                    tag: 'SF_ProjectSum_300x250_A',
                    
                    sizes: [[300, 250], [300, 600], [300, 1050]]
                });
            }
            if (SF.initial_breakpoints_visible.large) {
                SF.Ads.prebidUnits.push({
                    bids: [{'params': {'tagid': '364650'}, 'bidder': 'sovrn'},
                            {'params': {'cp': 558092, 'cf': '300x250', 'ct': '472225'}, 'bidder': 'pulsepoint'},
                            {'params': {'placementId': 12407693}, 'bidder': 'brealtime'},
                            {'params': {'siteId': '103240', 'sizes': [15], 'accountId': '15680', 'zoneId': '486010'}, 'bidder': 'rubicon'},
                            {'params': {'placementId': 9265109}, 'bidder': 'appnexus'},
                            {'params': {'placement': 4224496, 'network': '10676.1'}, 'bidder': 'aol'},
                            {'params': {'placementId': '65725'}, 'bidder': 'rhythmone'},
                            {'params': {'id': 178243}, 'bidder': 'districtmDMX'},
                            ],
                    code: 'div-gpt-ad-1394209358856-0',
                    tag: 'SF_ProjectSum_300x250_B',
                    
                    sizes: [[300, 250]]
                });
            }
            if (SF.initial_breakpoints_visible.large) {
                SF.Ads.prebidUnits.push({
                    bids: [{'params': {'tagid': '364651'}, 'bidder': 'sovrn'},
                            {'params': {'cp': 558092, 'cf': '300x250', 'ct': '472226'}, 'bidder': 'pulsepoint'},
                            {'params': {'placementId': 12407694}, 'bidder': 'brealtime'},
                            {'params': {'siteId': '103240', 'sizes': [15], 'accountId': '15680', 'zoneId': '486010'}, 'bidder': 'rubicon'},
                            {'params': {'placementId': 9265110}, 'bidder': 'appnexus'},
                            {'params': {'placement': 4224501, 'network': '10676.1'}, 'bidder': 'aol'},
                            {'params': {'placementId': '65725'}, 'bidder': 'rhythmone'},
                            {'params': {'id': 178245}, 'bidder': 'districtmDMX'},
                            ],
                    code: 'div-gpt-ad-1394209358857-0',
                    tag: 'SF_ProjectSum_300x250_C',
                    
                    sizes: [[300, 250]]
                });
            }
            if (SF.initial_breakpoints_visible.leaderboard) {
                SF.Ads.prebidUnits.push({
                    bids: [{'params': {'tagid': '364655'}, 'bidder': 'sovrn'},
                            {'params': {'cp': 558092, 'cf': '728x90', 'ct': '472228'}, 'bidder': 'pulsepoint'},
                            {'params': {'placementId': 12407705}, 'bidder': 'brealtime'},
                            {'params': {'siteId': '103240', 'sizes': [2], 'accountId': '15680', 'zoneId': '486010'}, 'bidder': 'rubicon'},
                            {'params': {'placementId': 9265111}, 'bidder': 'appnexus'},
                            {'params': {'placement': 4224512, 'network': '10676.1'}, 'bidder': 'aol'},
                            {'params': {'placementId': '65725'}, 'bidder': 'rhythmone'},
                            {'params': {'id': 178247}, 'bidder': 'districtmDMX'},
                            ],
                    code: 'div-gpt-ad-1392148208790-0',
                    tag: 'SF_ProjectSum_728x90_B',
                    
                    sizes: [[728, 90]]
                });
            }
            SF.Ads.prebidAdjustments = {"bidder_deflations": {"komoona": 0.92, "onefiftytwo": 0.9, "indexexchange": 0.95, "sovrn": 0.91, "aardvark": 0.95, "aol": 0.94, "brealtime": 0.87, "districtmdmx": 0.79, "oftmedia": 0.9, "appnexus": 0.81, "pulsepoint": 0.87, "rubicon": 1, "indexex#hange": 0.98, "springserve": 0.001, "rubiconlite": 0.9, "rhythmone": 0.85}, "inflation": 1.2, "floor": 0.02};
        </script>
        <script type="text/javascript" id="pbjs_script" data-dom="https://d3tglifpd8whs6.cloudfront.net"  src="https://a.fsdn.com/con/js/sftheme/vendor/bizx-prebid.js?1513198786" ></script>
        
        <meta id="project_name" name="project_name" content="farsitex">
    <meta name="description" content="Download FarsiTeX for free.  FarsiTeX is a free Persian/English bidirectional typesetting system based on Donald Knuth&#39;s TeX and Leslie Lamport&#39;s LaTeX. Currently FarsiTeX is based on old LaTeX2.09." />



<meta property="og:title" content="FarsiTeX"/>
<meta property="og:type" content="product"/>
<meta property="og:url" content="https://sourceforge.net/projects/farsitex/"/>
<meta property="og:site_name" content="SourceForge"/>
<meta property="og:description" content="Download FarsiTeX for free.  FarsiTeX is a free Persian/English bidirectional typesetting system based on Donald Knuth&#39;s TeX and Leslie Lamport&#39;s LaTeX. Currently FarsiTeX is based on old LaTeX2.09."/>


        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FarsiTeX download | SourceForge.net</title>
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
 
<link rel="stylesheet" href="https://a.fsdn.com/con/css/sf-psp.css?1513198786" type="text/css">



    <style type="text/css" >.sfdl { width:250px;height:48px;padding:0;position:relative;font:bold 12px/1.17 sans-serif !important; border:1px solid #aaa;display:inline;float:left;text-decoration:none;box-shadow:rgba(255, 255, 255, 0.6) 0 1px 0 0;border-radius:4px;background:no-repeat #e5e5e5 8px center url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAANCAYAAABPeYUaAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAANFJREFUeNqcUosNgjAUbE0HcARGwAnqZxBxBCbQDXQE2UOkTIAj4AZsgPfMa1JeGqhecimU63HvvepxHFUq6mebY2nAdbi/Ur/hKg0IRv2H3WFvnX/Rj9qRcxH7A+BIjDK2eCYewQy8g2/WDJSk4w8xWDICz2ziUchyvMGLXIVJK9acE0+0VM53PIitE6bTcKJJT0wg6ESSHiwhHpbMDYszjhrDKcVkE5mO5dhZyrwNx72J2i9iGvMmODB372U/aCpV2NSlG0sGVbiBw2VM+BFgALYfPdL6UCEWAAAAAElFTkSuQmCC);background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAANCAYAAABPeYUaAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAANFJREFUeNqcUosNgjAUbE0HcARGwAnqZxBxBCbQDXQE2UOkTIAj4AZsgPfMa1JeGqhecimU63HvvepxHFUq6mebY2nAdbi/Ur/hKg0IRv2H3WFvnX/Rj9qRcxH7A+BIjDK2eCYewQy8g2/WDJSk4w8xWDICz2ziUchyvMGLXIVJK9acE0+0VM53PIitE6bTcKJJT0wg6ESSHiwhHpbMDYszjhrDKcVkE5mO5dhZyrwNx72J2i9iGvMmODB372U/aCpV2NSlG0sGVbiBw2VM+BFgALYfPdL6UCEWAAAAAElFTkSuQmCC), linear-gradient(to bottom, #fff 0%, #ccc 100%);background-position:8px center, 0 0;margin:0 10px 0px 0;overflow:hidden;color:#555 !important;}.sfdl:hover { cursor:pointer;text-decoration:none;background:8px center no-repeat #eee url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAANCAYAAABPeYUaAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAANFJREFUeNqcUosNgjAUbE0HcARGwAnqZxBxBCbQDXQE2UOkTIAj4AZsgPfMa1JeGqhecimU63HvvepxHFUq6mebY2nAdbi/Ur/hKg0IRv2H3WFvnX/Rj9qRcxH7A+BIjDK2eCYewQy8g2/WDJSk4w8xWDICz2ziUchyvMGLXIVJK9acE0+0VM53PIitE6bTcKJJT0wg6ESSHiwhHpbMDYszjhrDKcVkE5mO5dhZyrwNx72J2i9iGvMmODB372U/aCpV2NSlG0sGVbiBw2VM+BFgALYfPdL6UCEWAAAAAElFTkSuQmCC);}.sfdl-lite { background:0 center no-repeat #337733 none;color:white !important;height:auto;padding:0.5em 1em;text-align:center;border-radius:4px;background-image:linear-gradient(to bottom, #339933 0%, #337733 100%);}.sfdl-lite:hover { background:0 center no-repeat #339933;}.sfdl span { border-radius:3px;display:block;margin:3px;margin-left:35px;padding:4px;text-align:left;color:#FFF;background:#363;background-image:linear-gradient(to bottom, #393 0%, #373 100%);overflow:hidden;height:34px;}.sfdl b { display:block;line-height:17.0px;}.sfdl small { display:block;line-height:17.0px;color:#ADC2AD; font-weight:normal;white-space:nowrap;overflow:hidden;font-size:77%;}.info-circle{ right:10px;bottom:16px;}.direct-dl{ font-size:10px;text-align:right;display:inline-block;width:100%;}</style>


        <style type="text/css">.x640cea481d6189fbed1d3e52cdf7b41cd55d37e0 { display: none !important; }</style>
    <link rel="alternate" type="application/rss+xml" title="FarsiTeX&#8230;Recent Activity" href="https://sourceforge.net/p/farsitex/activity/feed" />
    <link rel="alternate" type="application/rss+xml" title="FarsiTeX&#8230;File Releases" href="https://sourceforge.net/projects/farsitex/rss?path=/" />
    <link rel="canonical" href="bugs_submit.php">

        
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
            gptadslots.push(googletag.defineSlot('/41014381/Sourceforge/SF_ProjectSum_728x90_A',[728, 90],'div-gpt-ad-1394209358853-0')
                                                    .addService(googletag.pubads())
                                                        .setTargeting('tpc',['farsitex', 'wordprocessors', 'c', 'scientific', 'editors', 'other', 'cpp', 'mathematics'])
                                                        .setTargeting('shortname','farsitex')
                                                        .setTargeting('aud',['endusers', 'scienceresearch'])
                                                        .setTargeting('mirror','False')
                                                        .setTargeting('dc_ref','https://sourceforge.net/projects/farsitex/')
                                                        .setTargeting('sz','728x90')
                                                        .setTargeting('page_type','pg_project'));
            gptadComplements['/41014381/Sourceforge/SF_ProjectSum_728x90_A'] = ["SF_ProjectSum_HubIcon_200x90_A", ["728x90"]] ;
            gptadslots.push(googletag.defineSlot('/41014381/Sourceforge/SF_ProjectSum_HubIcon_200x90_A',[200, 90],'div-gpt-ad-1394209358854-0')
                                                    .addService(googletag.pubads())
                                                        .setTargeting('tpc',['farsitex', 'wordprocessors', 'c', 'scientific', 'editors', 'other', 'cpp', 'mathematics'])
                                                        .setTargeting('shortname','farsitex')
                                                        .setTargeting('aud',['endusers', 'scienceresearch'])
                                                        .setTargeting('mirror','False')
                                                        .setTargeting('dc_ref','https://sourceforge.net/projects/farsitex/')
                                                        .setTargeting('sz','200x90')
                                                        .setTargeting('page_type','pg_project'));
            gptadslots.push(googletag.defineSlot('/41014381/Sourceforge/SF_ProjectSum_300x250_A',[[300, 250], [300, 600], [300, 1050]],'div-gpt-ad-1394209358855-0')
                                                    .addService(googletag.pubads())
                                                        .setTargeting('tpc',['farsitex', 'wordprocessors', 'c', 'scientific', 'editors', 'other', 'cpp', 'mathematics'])
                                                        .setTargeting('shortname','farsitex')
                                                        .setTargeting('aud',['endusers', 'scienceresearch'])
                                                        .setTargeting('mirror','False')
                                                        .setTargeting('dc_ref','https://sourceforge.net/projects/farsitex/')
                                                        .setTargeting('sz','300x250,300x600,300x1050')
                                                        .setTargeting('page_type','pg_project'));
            gptadslots.push(googletag.defineSlot('/41014381/Sourceforge/SF_ProjectSum_300x250_B',[300, 250],'div-gpt-ad-1394209358856-0')
                                                    .addService(googletag.pubads())
                                                        .setTargeting('tpc',['farsitex', 'wordprocessors', 'c', 'scientific', 'editors', 'other', 'cpp', 'mathematics'])
                                                        .setTargeting('shortname','farsitex')
                                                        .setTargeting('aud',['endusers', 'scienceresearch'])
                                                        .setTargeting('mirror','False')
                                                        .setTargeting('dc_ref','https://sourceforge.net/projects/farsitex/')
                                                        .setTargeting('sz','300x250')
                                                        .setTargeting('page_type','pg_project'));
            gptadslots.push(googletag.defineSlot('/41014381/Sourceforge/SF_ProjectSum_300x250_C',[300, 250],'div-gpt-ad-1394209358857-0')
                                                    .addService(googletag.pubads())
                                                        .setTargeting('tpc',['farsitex', 'wordprocessors', 'c', 'scientific', 'editors', 'other', 'cpp', 'mathematics'])
                                                        .setTargeting('shortname','farsitex')
                                                        .setTargeting('aud',['endusers', 'scienceresearch'])
                                                        .setTargeting('mirror','False')
                                                        .setTargeting('dc_ref','https://sourceforge.net/projects/farsitex/')
                                                        .setTargeting('sz','300x250')
                                                        .setTargeting('page_type','pg_project'));
            gptadslots.push(googletag.defineSlot('/41014381/Sourceforge/SF_ProjectSum_728x90_B',[728, 90],'div-gpt-ad-1392148208790-0')
                                                    .addService(googletag.pubads())
                                                        .setTargeting('tpc',['farsitex', 'wordprocessors', 'c', 'scientific', 'editors', 'other', 'cpp', 'mathematics'])
                                                        .setTargeting('shortname','farsitex')
                                                        .setTargeting('aud',['endusers', 'scienceresearch'])
                                                        .setTargeting('mirror','False')
                                                        .setTargeting('dc_ref','https://sourceforge.net/projects/farsitex/')
                                                        .setTargeting('sz','728x90')
                                                        .setTargeting('page_type','pg_project'));
            gptadslots.push(googletag.defineSlot('/7346874/SF-300x250',[300, 250],'div-gpt-ad-1392148208795-0')
                                                    .addService(googletag.pubads())
                                                        .setTargeting('tpc',['farsitex', 'wordprocessors', 'c', 'scientific', 'editors', 'other', 'cpp', 'mathematics'])
                                                        .setTargeting('shortname','farsitex')
                                                        .setTargeting('aud',['endusers', 'scienceresearch'])
                                                        .setTargeting('mirror','False')
                                                        .setTargeting('dc_ref','https://sourceforge.net/projects/farsitex/')
                                                        .setTargeting('sz','300x250')
                                                        .setTargeting('page_type','pg_project'));
            

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
                ga('set', 'dimension10', 'pg_project');
                ga('set', 'dimension12', 'psp_normal');
                    
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
            dimension2: 'pg_project',
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

<script type="text/javascript">
/*global _taboola*/
window._taboola = window._taboola || [];
_taboola.push({ category:'auto'});
(function (e, f, u) {
    e.async = 1;
    e.src = u;
    f.parentNode.insertBefore(e, f);
})(document.createElement('script'),
    document.getElementsByTagName('script')[0],
    '//cdn.taboola.com/libtrc/sourceforge/loader.js');
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
    <body id="pg_project" class="bluesteel user anonymous  body_class">
        
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



        
        
        
<div id="messages">
</div>



        <div id="page-body">

    <div id="banner-sterling" class="sterling">
        
        
        


 
    


<div class="sticky-anchor"></div>
<div class="sticky">

<div id="SF_ProjectSum_728x90_A_wrapped" data-id="div-gpt-ad-1394209358853-0" class="draper leaderboard  
visibility_rules 
 v_728_leaderboard  v_970_billboard "
>
<script type="text/javascript">
/*global googletag */
if (SF.initial_breakpoints_visible.leaderboard) {
(function(){
    
    document.write('<div id="div-gpt-ad-1394209358853-0"></div>');
}());

gptadRenderers['SF_ProjectSum_728x90_A'] = function(){  // jshint ignore:line
    googletag.cmd.push(function() {
        googletag.display('div-gpt-ad-1394209358853-0');
    });
};
gptadRenderers['SF_ProjectSum_728x90_A']();  // jshint ignore:line
}
</script>
</div>


</div>
<script type="text/javascript">
    if (!SF.adblock) {
        SF.Ads.stickyLeader = new SF.Stickify($('.sticky').eq(0));
    }
</script>
        
        


 
    



<div id="SF_ProjectSum_HubIcon_200x90_A_wrapped" data-id="div-gpt-ad-1394209358854-0" class="draper hub  
visibility_rules 
 v_200_billboard "
>
<script type="text/javascript">
/*global googletag */
if (SF.initial_breakpoints_visible.billboard) {
(function(){
    
    document.write('<div id="div-gpt-ad-1394209358854-0"></div>');
}());

gptadRenderers['SF_ProjectSum_HubIcon_200x90_A'] = function(){  // jshint ignore:line
    googletag.cmd.push(function() {
        googletag.display('div-gpt-ad-1394209358854-0');
    });
};
gptadRenderers['SF_ProjectSum_HubIcon_200x90_A']();  // jshint ignore:line
}
</script>
</div>


    </div>

    
    <nav id="breadcrumbs" class="breadcrumbs">
        <ul>
            <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
            <a itemprop="url" href="https://sourceforge.net/"><span itemprop="title">Home</span></a></li>
            <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="https://sourceforge.net/directory"><span itemprop="title">Browse</span></a></li><li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="https://sourceforge.net/directory/science-engineering/"><span itemprop="title">Science &amp; Engineering</span></a></li><li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="https://sourceforge.net/directory/science-engineering/mathematics/"><span itemprop="title">Mathematics</span></a></li><li class="project">FarsiTeX</li>
            
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
                    FarsiTeX</h1>
        </div>
        <p id="maintainers" itemprop="author" itemscope itemtype="http://schema.org/Person">
        Brought to you by:
        <a href="http://sourceforge.net/users/behdad" itemprop="url"><span itemprop="name">behdad</span></a></p>
        
    </div>
    

</div>
    </div>
<article id="project" class="content-wrapper" itemscope itemtype="http://schema.org/SoftwareApplication">
    <meta itemprop="image" content="https://a.fsdn.com/con/img/project_default.png"/>
    <nav>
        
    <div id="top_nav"><div id="top_nav_admin">
        <ul class="dropdown">
            
            <li class="selected">
                <a href="https://sourceforge.net/projects/farsitex/?source=navbar"
                >
                <span>Summary</span></a>
                
            </li>
            
            <li >
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

    
    <section id="main-content">
        <section id="call-to-action">
            <section id="counts-sharing">
                <section class="project-info">
                    <section class="content">
                        <b data-icon="" class="ico" title="Star">&#9733;</b>
                        <a href="https://sourceforge.net/projects/farsitex/reviews/" title="Browse reviews" id="call-to-action-reviews">0.0 Stars</a>
                        <span>(1)</span>
                    </section>
                </section>
                <section id="download-stats" class="project-info">
                    <section class="content">
                        <b data-icon="}" class="ico ico-downarrow" title="Down"></b>
                        
                        <a href="https://sourceforge.net/projects/farsitex/files/stats/timeline" title="Downloads This Week" id="call-to-action-stats">11 Downloads</a>
                        <span>(This Week)</span>
                    </section>
                </section>
                <section id="last-updated" class="project-info">
                    <section class="content">
                        <b data-icon="\" class="ico ico-calendar" title="Last Update"></b>
                        Last Update:
                        <time class="dateUpdated" datetime="2013-04-03">2013-04-03</time>
                    </section>
                </section>

                
<section class="social-sharing">
    <!-- Twitter -->
    <script src="https://platform.twitter.com/widgets.js" type="text/javascript"></script>
    <a href="https://twitter.com/share"
       rel="nofollow"
       class="twitter-share-button"
       data-count="horizontal"
       data-url="https://sf.net/projects/farsitex/"
       data-counturl="https://sourceforge.net/projects/farsitex/"
       data-via="sourceforge"
       data-text="Download FarsiTeX for free! "></a>
    <!-- Google +1 -->
    <script type="text/javascript">
        (function() {
         var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
         po.src = '//apis.google.com/js/plusone.js';
         var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
         })();
    </script>
    
    <div class="g-plusone"
         data-size="medium"
         data-annotation="bubble"
         data-href="https://sourceforge.net/projects/farsitex/"></div>
    <!-- Facebook -->
    <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fsourceforge.net%2Fprojects%2Ffarsitex%2F&amp;send=false&amp;layout=button_count&amp;width=80&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:80px; height:21px;" allowTransparency="true"></iframe>
</section>


                
                
    

                
            </section>

            <section id="download_button">
                    
                        
                        
<a href="https://sourceforge.net/projects/farsitex/files/latest/download" title="Download /FarsiTeX (experimental)/1.0pre1/farsitex-1.0pre1-setup.exe from SourceForge  - 23.8 MB" class="sfdl ">
    
        <span>
            <b>Download</b>
            <small >farsitex-1.0pre1-setup.exe</small>
        </span>
    
</a>
                    <meta itemprop="fileSize" content="23781603"/><meta itemprop="fileFormat" content="application/octet-stream; charset=binary"/><div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                        <meta itemprop="price" content="0"/>
                        <meta itemprop="priceCurrency" content="USD" />
                        <link itemprop="availability" href="http://schema.org/InStock" />
                    </div>
                    <a href="download.php" id="files-link" title="Browse All Files">Browse All Files</a>
                    <section class="project-info">
                        
                        <span class="platform-icon windows"><meta itemprop="operatingSystems" content="Windows"/>Windows</span>
                        
                        <span class="platform-icon mac"><meta itemprop="operatingSystems" content="Mac"/>Mac</span>
                        
                        <span class="platform-icon linux"><meta itemprop="operatingSystems" content="Linux"/>Linux</span>
                        
                    </section>
            </section>
        </section>

        


        <section id="project-description">
            <header>
                <h2>Description</h2>
            </header>
            <p id="description" itemprop="description">FarsiTeX is a free Persian/English bidirectional typesetting system based on Donald Knuth&#39;s TeX and Leslie Lamport&#39;s LaTeX. Currently FarsiTeX is based on old LaTeX2.09. Windows and Linux ports are available.</p>

            
            <p>
            <a id="homepage" class="pspbtn" href="index.html" title="FarsiTeX Web Site" rel="nofollow">FarsiTeX Web Site</a>
            </p>
        </section>

        <section id="project-categories-and-license">
            <div class="project-container">
                <section>
                    <header>
                        <h4>Categories</h4>
                    </header><a href="https://sourceforge.net/directory/science-engineering/mathematics/" itemprop="softwareApplicationSubCategory">Mathematics</a>, <a href="https://sourceforge.net/directory/other/nonlisted-topic/other/" itemprop="softwareApplicationSubCategory">Other/Nonlisted Topic</a>, <a href="https://sourceforge.net/directory/development/wordprocessors/" itemprop="softwareApplicationSubCategory">Word Processors</a></section>
                <section>
                    <section class="project-info">
    <header>
        <h3>License</h3>
    </header>
    <section class="content"><a href="https://sourceforge.net/directory/license:gpl/">GNU General Public License version 2.0 (GPLv2)</a></section>
</section>


                </section>
            </div>
        </section>

        <div class="psp_newsletter_subscribe">
              <h3>KEEP ME UPDATED</h3>
              <span class="subscribe-tagline">Get project updates, sponsored content from our select partners, and more.</span>

              

<form action="https://sourceforge.net/user/newsletters/subscribe?source=PSP" method="post" class="newsletter-subscribe-form compliance-form optin-wide kmunl-subscribe-form" data-shortname="farsitex" data-handler="KMUNSWidget">
    <input type="hidden" name="XTwFKkt90YDG3u5OyDl1kg3MipjY" value="user">
    <input type="hidden" name="XWhFKksNjdwbj1rmNH_JRoueH6SE" value="PSP">
    <div class="clearfix input-group-main">
        <div class="nsw-error-container input-set stacked">
            <div class="error-message"><i>Invalid email address. Please try again.</i></div>
            <input type="email" class="subscriber-email" name="XWQdIhthsXEPmnaeim0RZDdF8t4U" placeholder="Enter your email address" value="" required>
        </div>
        

        <label class="input-set stacked">
            <span class="label">Country</span>
            <span class="input">
<select id="country" name="XWwFKkt90YDGm0_KTMHbnqkixEn8" required class="use-placeholder-color">
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
<select id="state" name="XWRFRhsVlXEPmnaeim0RZDdF8t4U"  class="use-placeholder-color">
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
    </div>

    <div class="clearfix input-group-kmunl-optins">
        
 

<label class="input-set input-set input-set-kmu kmunl_consent">
    <span class="checkbox"> <input type="checkbox" name="XXwlIkv8LHA2zrAyQJePAwHSGNLc" value="farsitex"  data-consent-action data-consent-id=59aed8e456585fa9603b60e8 ></span>
    <span class="checkbox-label">Get notifications on updates for this project.</span>
    

</label>


        
 

<label class="input-set input-set input-set-newsletters-optin-sitewide allow-precheck loose-consent-requirement kmunl_consent">
    <span class="checkbox"> <input type="checkbox" name="XVwxAkMJsdzycvY6lJQkZqV0kNRU" value="sitewide"  data-consent-action data-consent-id=59aed8e456585fa9603b60e9 ></span>
    <span class="checkbox-label">Get the SourceForge newsletter.</span>
    

</label>


        
 

<label class="input-set input-set input-set-newsletters-optin-all kmunl_consent">
    <span class="checkbox"> <input type="checkbox" name="XVwxAkMJsdzycvY6lJQkZqV0kNRU" value="sitewide research"  data-consent-action data-consent-id=59aed8e456585fa9603b60ea ></span>
    <span class="checkbox-label">Get newsletters and notices that include site news, special offers and exclusive discounts about IT products &amp; services.</span>
    

</label>



        

<div class="gdpr-consent-requirement gdpr-consent-topics">
    <h4>
        Yes, also send me special offers about products &amp; services regarding:
        </h4>

        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XUQ1DgdRyYRect4y_CHFZ5wgVnic" value="artificial-intelligence"  data-consent-action data-consent-id=596517bdc14bed0737e41a50 ></span>
    <span class="checkbox-label">Artificial Intelligence</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XUQ1DgdRyYRect4y_CHFZ5wgVnic" value="cloud"  data-consent-action data-consent-id=596517bdc14bed0737e41a4f ></span>
    <span class="checkbox-label">Cloud</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XUQ1DgdRyYRect4y_CHFZ5wgVnic" value="network-security"  data-consent-action data-consent-id=596517bdc14bed0737e41a4e ></span>
    <span class="checkbox-label">Network Security</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XUQ1DgdRyYRect4y_CHFZ5wgVnic" value="hardware"  data-consent-action data-consent-id=596517bdc14bed0737e41a4d ></span>
    <span class="checkbox-label">Hardware</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XUQ1DgdRyYRect4y_CHFZ5wgVnic" value="software-development"  data-consent-action data-consent-id=596517bdc14bed0737e41a4c ></span>
    <span class="checkbox-label">Software Development</span>
    

</label>


        
</div>

<div class="gdpr-consent-requirement gdpr-contact-methods">
    <h4>
    You can contact me via:
    </h4>

    
 

<label class="input-set stacked inset input-set-consent-email minimum-explicit-required">
    <span class="checkbox"> <input type="checkbox" name="XUwFKicVhcTy3tZmiA21zn0hbyxY" value="email"  data-consent-action data-consent-id=59aed8e456585fa9603b60ec ></span>
    <span class="checkbox-label">Email (required)</span>
    

</label>


    
 

<label class="input-set stacked inset prompt-phone">
    <span class="checkbox"> <input type="checkbox" name="XUwFKicVhcTy3tZmiA21zn0hbyxY" value="phone"  data-consent-action data-consent-id=596517bdc14bed0737e41a51 ></span>
    <span class="checkbox-label">Phone</span>
    

</label>


    
 

<label class="input-set stacked inset prompt-phone">
    <span class="checkbox"> <input type="checkbox" name="XUwFKicVhcTy3tZmiA21zn0hbyxY" value="sms"  data-consent-action data-consent-id=596517bdc14bed0737e41a53 ></span>
    <span class="checkbox-label">SMS</span>
    

</label>



    <label class="input-set inset input-phone hide ">
        <span class="label">Phone</span>
        <span class="input">
            <input type="tel" name="XWRJNiN9lXEPmnaeim0RZDdF8t4U" value="">
        </span>
        <span class="error-message"></span>
    </label>
</div>


        <input type="hidden" name="XVwxAkMJsdzycvY6lJQkZqV0kNRU" class="input-assumed-newsletters" value="">
        <input type="hidden" name="XXwlIkv8LHA2zrAyQJePAwHSGNLc" class="input-assumed-kmu" value="">
    </div>

        
 

<label class="input-set stacked input-set-agree-general allow-precheck">
    <span class="checkbox"> <input type="checkbox" name="XWwFKicJlfDym0_KTMHbnqkixEn8" value="consent"  data-consent-action data-consent-id=5a26cb73ecf83256408fd377 ></span>
    <span class="checkbox-label">I agree to receive these communications from SourceForge.net.  I understand that I can withdraw my consent at anytime. Please refer to our <a href="http://slashdotmedia.com/terms-of-use">Terms of Use</a> and <a href="https://slashdotmedia.com/privacy-statement/">Privacy Policy</a> or <a href="https://sourceforge.net/support">Contact Us</a> for more details.</span>
    

</label>


    
 

<label class="input-set stacked input-set-agree-general-gdpr minimum-explicit-required">
    <span class="checkbox"> <input type="checkbox" name="XWwFKicJlfDym0_KTMHbnqkixEn8" value="consent"  data-consent-action data-consent-id=5a26cb73ecf83256408fd378 ></span>
    <span class="checkbox-label">I agree to receive these communications from SourceForge.net via the means indicated above.  I understand that I can withdraw my consent at anytime. Please refer to our <a href="http://slashdotmedia.com/terms-of-use">Terms of Use</a> and <a href="https://slashdotmedia.com/privacy-statement/">Privacy Policy</a> or <a href="https://sourceforge.net/support">Contact Us</a> for more details.</span>
    

</label>



        

      
        
    
    <div class="js-required fielderror">JavaScript is required for this form.</div>
    
    <div class="g-recaptcha"
          data-sitekey="6LeVgCEUAAAAACtawUTrPTBy0mTrGtjpPn_Xh-ZW"
          data-badge="inline"
          data-size="invisible"
          >
    </div>


        <button type="submit" class="subscriber-submit  right">
            <span>
                Follow
            </span>
        </button>
    
  <input type="hidden" name="_visit_cookie" value="753a9834-4d97-47c0-b3be-f81587655e34"/>
    <input type='hidden' name='timestamp' value='1513322907'/>
    <input type='hidden' name='spinner' value='XXGIl57EAEkjo2PzWawIX7AZQxVM'/>
    <p class='x640cea481d6189fbed1d3e52cdf7b41cd55d37e0'><label for='XWwpKidR5Inim0_KTMHbnqkixEn8'>You seem to have CSS turned off.
             Please don't fill out this field.</label><input id='XWwpKidR5Inim0_KTMHbnqkixEn8' name='XWgpKidR5Igbj1rmNH_JRoueH6SE' type=
             'text'/></p>
    <p class='x640cea481d6189fbed1d3e52cdf7b41cd55d37e0'><label for='XWwpKidR5Inmm0_KTMHbnqkixEn8'>You seem to have CSS turned off.
             Please don't fill out this field.</label><input id='XWwpKidR5Inmm0_KTMHbnqkixEn8' name='XWgpKidR5Iwbj1rmNH_JRoueH6SE' type=
             'text'/></p>
</form>
<script>
    $('.newsletter-subscribe-form').each(SF.wire_up_subscribe_form);
</script>



          </div>





<section id="project-nel" class="">
    <header>
        <h2>Other Useful Business Software</h2>
    </header>
    




<div class="enhanced-listing standard">
    <img class="icon-image" itemprop="image" width="48" height="48" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwEAYAAAAHkiXEAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAABmJLR0QAAAAAAAD5Q7t/AAAACXBIWXMAAC4hAAAuIQEHW/z/AAAAB3RJTUUH4QESADU7xYb/sQAALSFJREFUeNrNnHd4VdW29n9zrb3TdgohQOggECBU6UV6ld47oiBgoYogSFFROoI0KQJKkSLSBKRLlRJ6CxA6BAg9JCHZba05vj+Ix3s9x3vOvefce77xz8heT571zPW+8x1jrDHm3op/s60efXZsmzJgX9JROhuBqoRyURGv2oaoLaqYnaYnSDGzgDXDviNP7VpKq2yMkdE0pRHBhHumpWfz5yH1naG1v9z2yu/3/eajIzeaZ8XMPiliUGBJPjDLGDcZyZeek/4a2pGlr9oqbxJcIdyO0cUkS/FGdqp0l6BbjZhiDFRzdpm2Uy+Syz7bV90fbK8zwvVH0pueqkjQZNKIsE+98UHp9gHfwIKt59/3FcUIeS98mfMRused2CcbUv7x51f/14CvDT93rm0usLPo7XoIASqJQcTio75qQSVm2oP0ALqbu3RT2SMD7Obnxj9s6PYzrMCqsCnBz0lz5QyuL+ULjNNDWUydCjv1dv2TfFU4TAcLUjTLBV2fpuy1Rsn7Mk46PbqgO9OHcxfH67P6B/Gd6paa6JnsL52yqXCzyMmhPcFeLcclPk+EvMk2Odz9lB2su0hIwwP2AClIy3XtvL1521624KD1lX1BvtDNzN4yXNUxK+vCHGevvRTNKUxi8SM8J4juRh264OlXufK+n9/7/4iA9WUu0LYEWAOsfVKfILKRA41H5VSKEuqMHSB7JTexzFWp9JZA2SAP5aesB+1+Oifn3vXprOKXqn1SdbTEMq5ga11MWkh32motBgtYqovyilQnTEpILJvI0BWlslRnqX5NqrGf93QOqS81Hj+SvvTn2vYr2kO8dJj5NNXrGeX/5GTr4uejUsPGg/uOtcIOKnpZH5QXUn+Z086mf6FOvoJ2Tbkuxbo+ZT9TZOr+HNYgnU2izUH2JmnLBB3EbnbyVCZzm6eAS/nMSHqQPuBIlU+31vxzXIz/beB/ir9Uqr0T5ZzsHGbMhJCpwUXMjwkwzhvXmKomc1+Ki1deNR6rIewKjmGNzOWTj5OksaSoWkdWkk4GZ9qcwI1Frk2d1AoVT72+LmOrWV4ltFunIo1eTOl8Wo1jHTWHdKYObSi8pDh16EbBa5/iIQ0/Hq5zmpTsC2SFzOX4G7nlngSw7Xhy6OQAl7P48nfv5XtR3TMpZ85HO9MXe7dfKW5l1a2lUdXCHCaF5O8nE88uUvZlt/tIGIunbn2RTVJoqitSRprKXI5LGntZp+7bEfpLeUG65bJmy3JcM8YciWty7/8DBaxbf75TmwdE2Fn1r2zivrJooD7BpVao83K4zHd6t1yjQc8mOouUkCaJYbo6x8m3urdOtSZIi/urjGrqPdWetWZA8E51ku6d3i3RfkMInp9HPE/v2g7u9EhISFlLz8DvnF+avfnOPiiNJcb5wn/Uv0ifr6HsjXJRCg18rKPEZHHLmTqnZJMqxkwpIQXlB2zdSnrT6kGUhLKPhl17eOpahXXM3hnRBUO8AT+APOAdzD5PbbeUF/83We0y4pPaO8rbl2Q7czu84TQC3jBLpw3xlfP2tSoqyz6hu8hpceBRrxBBUGC20BzO83gGtH718ua9/4cK2FT20tT2Jcjuj/Xv1Qn0ZJAuK9NwORqb11gV24lslOFknsKSVZbg+mSFUU/dU0Wnu5xxapyKuF/nUS9/hncMdB1YIXzjJdr/Bvxv97+17tSz5Go4rQnpaTqS79yDUyr4ZzL10a+Pc3imW33c66xbdtLeJ9YLe4Q+2qag+pCN5Kg5noKUIf/ZJ+QgKyaQyFHs6POSJB3lzV1TAz4wH6s5Xbc+uu8u7nUC7zObEgujeEZpcr07iKOyg6TGpygoSTJhe37vVO8Qa134ZcMyg6gpDuOsUV4dVyN1shySL/G456X19E3E/CM+jv9tAlRd1Y3xZHXdCunjtJmhItU0zppX/DmtSfLKvdt1kksty37lUq31J46XuXuKbp513g+s/OD6OvitgDHZL4e+bkQ4epZNn/8kbmTzi0VrylmeczWrQxeggAzW+/QpfVGKPZmvZ+s68uTKLzqf0ZidZ1VQvMNpFE5eFbrFvGuehvR6dlH7W7NH/pgcnvDbh0Puv5rcLt1VMcGT25vh9814jyJkkK3fah7xgOeMk2byHmkrRptLlGV47dYPAzPK+Zb8sDHb06COzhELZlFZDcIsGEeiNCJ1xFE5Il5JW7MpvazvuD2neXRQsnEjoLFV3lyhisoZlvge+IP0JvpM9R/p0KQr9rA91X7ctpK/ZuRfZSu7n/mkdUXUuuV7Cty9wdPUz9yx/m7g6h0y2XFVXXlSK+OWd5Un584eV5bdPMSW7INChoR2qCfOI45489TUTbqZnJKB0xfIh9xgRd/3qS0RMrmZLQ8pwr16syVNqknf+pZUkGBmt3jCVwhF3hqnZ8hpZr+9XBoxWp2u0tj7WDrpeqnL7BvqF8fFaxXSY9NvZtTmUHovb6L92HgsRSWv2rilnzqnClIiZbHkJ5SSTTaKEMbPerU0o5WMb9lSdVZr2LNnpvuufVcvS5zgahN81Bm0b7P9zHpXF6neQc4xBavRZMNDDmNilkg2IvJse3ddUI5IM/Pg+6m1pxQLl4yjS6/rx5cIalX1w7wlHmD9y0PQqgNnLrROR3le96z1D8BsuL5y2eyfICWvvrIjHPMLFaeWMlfviBgQlOAcl79S0RNZvokus8mQz6UlL345L5v4gbh2P3GTeDyRg3AShAICcOLwHaY4Vcj2vD0FiCUiNQwvPsT+iAACMYCLcpS0bM35mRlyqN1NxklXnm9LI9UOtDYe7OaeZjeXb6vs1lPZIMOtUrox2WRroFP/LNEyZsZdrqn6nOz/KlXIRx6jM7e4SVJgZWkkbxC4bJOK4QM1LXudjJPuHyzTLs9p1ZsmA1dQn8oUSGsvzWSMbB/4tnVROkjxtm6dTgID7Kfz3jxY8cpyM49+k1ephjttQvJcn6D+ZQpY0+p8rjZzwS5j75EYXI6ixgmjJF6zjKOR4TM381iJCrP7GJ+rsurVBmOkvDwnedcHYpLBL6+mSUHKUtW6TT2Oc/5IDflW7VVz5lnUZiexEzvKDAqq2RNvq6VGLvVk+ucyTe3h6df1KSKDif2uhYxUs6m5vbIMIh3z1hVx4iEm9BA7yc/B6DaSTLJsKFBe2kplfui1l7OUUJHq9WJG1JYKS3/Z8nhYxvWkJ86rclHakP/oKIX6lGzGh9KSUArXDpS9XGJd1lJymY/5Ntui9CbeRN3yp8Sg1xzL1KMnM9jNJeBjaSRNVEz9sjpUXsGsuEIfoI2sWd5df6CmqxEZi8ysaqO6qLC/sE/pbwj+p6ugLa1vJnW4Di/eT1nk30EIKewlkQw9Q2pKc7O31OdXvrYXqfm8QeMWbu2XTzm67oguKQWllrOunixTWL6ltfzAaZ58Xu/5r7fCCDg+KKJBrotk4z3jWnBDCnDwrfXl62yayYU/W8f0bw7XblKBOkP6Vt+/7SQHvj53pm2Ts+pLNy+eSEC1SnqW/kEcw7bpShLOiBYFdDkayxSzr+yQTQz+4RuZYtwzYt54lWNWE6u4Huz90FfZ19Y+Evx+cGDQ/g0xupIolra+ot1SVDoDlXjA0kbj1Wl1lxm7RrvqOT91TI3obp3WNWRzXDF7o54g/mKj9QPpLd0m1OAdEvGPOqSqEIwy23NWPVBX7K3/NAE/zj9fq80TDHbJbvairSz2C0k3RpGfm2q4Hs9ItRhPpX16vx6u5/7aSlckhmXeYDkmtznT51s1Sy1UB35o6ggxjqurrE9v5cOapkJkJ24ZaY7TU2UZy+SMfMJAVusrUpTucp1x2i2JdCJKf6bLSj21RLemq7ytGulHehGvqz12c11Hhtoh3vXSW96TpeY9Y5OaT0X1VH6SSnXjtCG7JNucMB0kFp1LxOrlMhrPeqcu4zhuze74XnAxxymziD3bbuHPrlblqmcv0vdJiOuvn0mSVMrXRqbKRJYdfNN1J/xZUEidJ/ZXGVl8HfRWNUMVoG7/GvZ0vYZGsw/at+RneeXpUhlENoLLNeE2hwhMjFY1GEK4Wvg/JmDrtJvdOvrhxaSUDH8MwXo8q2QC180McyxNya0+I0U1CJ3vr269LpXP5NOfSUXpHNpPElRlxtZtwThZIysvzbY36UpsceTSm+nHYJ2gHxtOyaprSX7VSrfgjFHRPm0UwzRWmf2NTdhvzSjn+mnX7+uY+XUcTa+D/75vmR2B6XCZUWzApr7aY5i0t4ZafeSqecC+r29LCF341XhPhtkz+YgJXHblt1Lt/Pw4r6eOlXQZ9sZnsovptJ3dQiqKrRMHbjE/NpTjEXCP+jKv21npKRES9H0ZfVdCGQdSjwAKti5klFbPmf/TzaAYR22zcLYqdk/tkVInu9n7ZaxI/gHaLb2k1+eDqYaHQp/OVMOoTqB59X+chDP8ae3891DkNH1KY0hT6cAQs7kVbm0QG6x4O03qTXxKVfLyIqdD3TRKK3e1Q+YXKpvaeGk2LxilxjgOqU+MD0mwShhtVVHCdbjzG8mhhnIh+LZjvLML9KpScfjmAX8N/G82qF8VthaGoeNr9tiRDZuLjlqObeB1+0fqW2wwW5ifsdd+5FoestQYaS+Tmvqy6mL29PbxZ+ib7lDvUGuhtbzHWKqo9/BN6iffy2qMAZulPJ8bNbucttySoDfCnou7txwasaIsyZTn5o4L5MRDEEgdBki/vl97Lnlek1fBnq5/0FuexLGSrHjXLlQNyUkWoBfjOdtV26aaTmJIFSudbcTZMf9jBfy49OyBNs0IlLscpI7K4B068ZqY6n1Vndyli+kz+kM5FPeWvswsNr/eSU2iADkPFNJZpJhMcUzVn+hweWANw8V9LEJUD1Mb75PR7YtX123c/s8Gxt9t8spfE15/H+zBVrpOIAQvWQkmA1H9KauWWGd0oNQx2tnRcoNFdphxUb0g16wcMk6qsvqthbKXAxJYdKKxSFlcenBUteaQmlCnh3SUa1zau1RflDxS3TorA9UPnK6QzznEmKeqnotyFFdrVYtqx7RPfmXg4UrWOhkvUSDDZTfJLa6QShLOLcX+2wrYMCi+VNtvQb1FTd4mq1SSxyw2HLJDvudtkFYijPskgV/Ul+qdOQ/MQhxQDw8Uwsd52jou6jV2K1Zaw4w0dceoQ6h52rnZWP+vB/43G961RrHtcyGga8hzczUZEqO68RFOqUl++spbap/qpebr/Gq9IBVN07fCH22vGfhIprNP9hx/KKflJFUnBOj1ehPlwDvV10Ba7VtGAK9R+OeWKNLRjrJSSNK41bKjf4GOkoOgXjEzUCff5i55CTq7mEhJBZCODJWJLVtJE5kqM/4nrYir8rNag0FB1Zk7arDZzzhOZ1vMbcZTBhUdr2bSjIics0jia6U/uRG6xvU4CHDUMxsYO6ydRobKxT2CzShHE9WVF12ylvFsHPqvB/6PNnRG5XrbsgMVVAM1Eb/eIctlGQ4+p4dUl2RyGE/opn9x1HN2N+qCClTNed5lDLN5SnDVPXoUe3m/pNeRxxmq3gTSVXUqf/OMbIThAI6yH2ezu2Pfqhu/azWmf5Y/jLq+83KAAFz72qsaKi9ZgFGyhbgaC61i6keZFdTvv02AtdyvdSlMHnGe20aUJJDIcyALHtztbHVOneaVpafNd9UoGefZnB6QUc5TweysS0o7ycJgxzZnsvEYT6f7ZfpuGPe/D/wfbdSCWmN3bIOgI2FXnQ2wdG3pg58A1YMQNUnqyEodQGXzmP2u/obRjx7yPckUmdadbzjK/d4RMl8ay3gwxqpJxrJdk0gniqRr1bnKZaTq5TGn9uRoOKfwRr2Fd+QT4BvOk/prNoqQj1CQ3RzgSZEY46E8UA9LF/xvE2DudvZSDajhfO7IaZ6yewdp51jHWeMVJhJCaI49TFaJlFhTS5VWs2gK5krzR3XSDmO67MZLYMeoMq9vmIH830P/n21YpQo5t1YDM945y9iNT0+UdAnGZfcyupnr7cbSW3bpBO6Ed3GWCj7y7X7pRzL7zLN6AjUkS/Q6n8M+Y2921yRSfUTgj/0R/PiAQ9Ri9KuX9U7pKjWAEiqCLOda4eIVlOcGaTzFdkYzgm4kVYr+hwn4ecbVyA5TgBF6LkmqhvXMGqxrg9/pj7EbxxZQlxiqVl4opRrIFLUytSe15JQaapyx5vnP6yEsdSQ4nhjT8P67gf+jjT5RI2PHblBnjenqKulqrDXeakI6C9RW9YUxMHmKv0lGJUliKqVl5KbmfMsOnpfuzjoaiw3Y1CLrlhlkZPbVBkl/WVgp3l4tsyUnyEO26iF3hnKEy9y9M51oAgkCWSYHOFLu0T9MgL3ZipIRwIdqMjHqmdqiNtIcOKYe0CF6uXqo5rDoaISy1HnGg+qsbDbLYuOq47aqjLRdW3LLuuR/N9x/bp/NrNNx13owCpl7VGO09OUQe/UD0mQ5FvBQJuI82pnXGKjau02KkkVlAcfbjjDV7OQdLsot5HkJcgGq3Gjt1g3pBPZIy6v2e6oBecl+sz05MHEAftUAd7Ep/zABzpJmDbMBinMMI0l+5DiDuQ1qrXKpmt6v2EJd9t94l+9px1HgXVyskBOO6ma6EYP/3w3wP2qO+MDi5lws0vVcrnDG+SJsivMukVZcakN/0Rfb1XDjECsulpNxvE5WR2NPrK+z9nofklWVIPeRq6TyAG/RV7yP3L3tUUCKysFaoCCNiL1jqzxkJRhYKmPleJ6D/zAB/nj7V3s3EeYn5hFVUB6ZX5v3VQnDb6xQRXkvqWdAckAzI8Odz9nUuc74iTY60S4ixTjV+kaJzetS/92w/uP2yanXFu1YCOqO8Yhv8Vv1X8z1VyPZUTDigfMor0iG/ZqkJ/9AXxlHsCxSp9igWgKPKUDw4R/lBCd4Gt0peH3oSke94MmsoAnPQepLdXYnrSYv0YQAe9jJnai9jr1N71/tWojA5/6n6zzDjdscZDt31RZchOLkIoIgeO00q5TOyht2DStGOuhlocMiPM5LxFjv+aNkXlJ5x0/OnOobYBjLyEuS/3Vfff0pQet7njvQtjletUPdpJNRnM18zzX1JU4CMNmOiQOFIY+4TwY11GnlpafcCOoRMiDlHT3ix5HTO77XDbLPzbs6aRXj9DzdSQ6Yz7jJVblECIEEEYw/c51/vqEUCkUqFhYWLdUGdVRd1vmlpISKR2Lx48NHuOtAaPvwjqTqLo6uK/tj6632fYlB4SIYkzWqkaHpTnHJq3uRna2UoyAhIG+SB+PsFPZxj1RnWf2uXitNXW9JopGfb93D1df8rIY8O0IQggmSioUdUkftHnH32y7N/2oyZv32x9O+j266e+IgECcKS8pql9RjqLNUwBqzBFvMAuYDlZ8+LxZ6HtjxDA2e6XQZfpRsl5LyE5qSlCOKinYL2yG3aGa0UgPUVMbKD3zHVZzhH2Q9Hmj8VYhyZXrvH9fz+rUC21Y/+b9TxNi8h+43SuL36Xl+oghFWXc8J/QoIzvdVF1y6kfUphHFSvq01nnkQtxsmrOBR7EdHUOMp2pgYj4jUoWqJW9P1Zv1EamwaKh1WKaLw7qqrlQV6fsezeOXx2d/8nb9O2yRlVyPfEYYWQiw8qLRiLyBxkYCM2ipehJzKTfzpS37z3dTCSqHGqBGBj8Lbm4elwnpzdyDLTdBqpJ8xDOVmxACMOUGKZQjrFw+EjjF05iqKEyUtwVOnBi8xgMSSQ/4XN1V2VT/e2UDE0I2PT94eMia8dO69OsJOX7IF3ivs8svC6S77G1YWW5xlUvKTwguQiUXAghhmTAFZvrfy12FQslGbCyswLxqHUfUpQvDpZSEae/FPvjx41OtXDvCGoc3lZ8+Gzsgvuf+PydmzJ09VoPdqqF6pJJUG9mlhqiPeS3atKZYlXXNU9ukjLQkscZ+Z1tDq143xxtFVKT6/q3OOk7uS83vVllxMkOcltdxuftlz7NkZ4xM16eZNf8OCZzhaZFEAknBIZVfPoYugIUfbTbjkhwnestjmUp5drWA63JTwlVE+tWM8tYxKUpRJhJJfv2VfldeoTHNqUchhqm1Kpf68KvVJJFCSu3qmDhROh8mJgZpPMWN23gu81ksn+z/Tu02D/ov1iFwc/Br7leBH4mTXnluyFQZKWXW12UyCcSraThx4mQINjY20//rEGSdfRmCHGXZpj7mzpQoCgI9h/MyBJk3OCMTZYwF0JL/ggAucoFdMlENVKPkErs4oI6p1ukxnKIQz551Va1VJWLsrtRTz8gJaOUi1FAoOfof7hLj8A/x39IbAt8TnxyTzwIaSTJP8QAOHCi7a+Y/7sCHF5tmqhB+spS9Z8w0X1dNXFXlqIzjXPpwaSWBjOUBhVQuAtRQBhrjVEUZxhnyERTdSe/Vd6VG2YZynLM8IP1ljtEnURgo+ZhkHuM2UKPZQkygw3k1+HLyAwgi5Im7EJCNR+yU/XhxE2R1w0M66WYiLnKSU48kmBBcqgcajf4zBdi3MwnYRRAhPLG2E0Uo0VTOzAHPCSOCSODxfx2aZIkWCeKwdkt2xgPD6CglrVbUI4Gkx5+o/KqsWuUZq5YSq2YAXWUK7UIi8HIVDSqCABzp4x3WTamkPcFVmCpDOOkyGUE6Fo8xMFDmazgwUAwgAzc2Y/iAAELzfaG/tx28XnwxbzMA+2RJonmG35gu63W8XFLHsfEjNpRSnVWeCgk8lcYyNEs6n5KOrfvh5DnKcRCNAj2LFJ7iBd6Sw5R2ta/fIEfUuQiGD+8+aeecrSQRShsO0hEvG3jVSKQQsZQ08qmyqpsxvPPXLGeOTIsbRVayEx3qRKOx9an/TAAdX4Ygc6F6oIKU+5Gb7LjwAxYB+K1pHFJ31As6kuvvJAeTMJ6RKkqK8i2wlUR5bLzFbDqqCY+KG+2MSarji1Uqi7yNjymEcI+MyEiekYYXqE5Nij79xqGL62GUCB5CBk9xBz5F0JnxFFAD5OWnfsqBAfZBbBLAhLYyTMpXeYejzOXmSTDIh1IDqMEQKtGfYAIwyc8H3JUetTsxS57SLhMKdGfxkwFGQxVIAEr1knQs/NxQtblA/uDBCy7u/HBQJ8e+xIcXXfnKWcX8V7ytA39WhXhMd0qxnigiyAJqv7qunt/az3riuHynPy9IIc74ZrIesWXAF7rvn8D3+/X7/+n63wf+NxumatCPgmiZRH7ASQ61OEiparxGtqQsiSEPHCmBGTUK1oxeFBEPapOKpU7O5jyQPKQCI9UAyiS+6pDvVEdqhTTTxfR6yRlwj5PsJQkIJQsBolmLjfW8FasAM2IBfnzYoN4llcrVJ8jrUosv59bCRW6ysNb+1Pbr6nqSWqtG0x6MGmYX40CNfiznEk3gZdL1P+InHMjz2qxCMLPdYA3p+IGFxJMzqJgzISQxuWTASOf7gd4cNyz8m72dA5ZRiR3ARSw0NjZwibNy0rhNdnJyAGSyDJf+RvaP5k0Mn+Uj5x8U4H6pAF5lnTqsLsp1Skm4+OTuyyRMcMjG0FphtXB/1nrAop7/RbPQaG9olUoHGSa3SKQ7uclH1lCPNJJt0vHW+Dwh0bFhuWgpw/VKioHKYfamcP4IeUYOgoHVsl+FXh7l0Fslh3RyndRnRCSHsz2HyOAuEIyBQyLoyQjKnXmT1czkfJ1FZODGDzRjKs6KE42KjvnqJ7OQ9dzzvs5lPzM/cDYyKvKQ07RjW56t+oYkyI9lihDPE57xkBo0Ie+j/USRi9BbjdjGCq7UJvO9APaTSGjQV5QwpvuOBowyawWs9W3MWKeq0J+91OJzFtEY/ZuWiCCSrLqrXOIMJznGC3VQ7dFPp7w34tiARfrBn+C3n2J/87qb1lzhwJ8DP7HH8flNvoeM3ml5/X71Hec5TFkBgyCyh49RB9QG9dk1t0qlH6UhwA6cSrCztnXBqsHFwtPxU4NKLOZN9TpVT49y2G5pICGhG2WcNKG56i3XiSKZhS/P2Ri71Ho1hA7nPpelUo0tr43iIYm8CFhHXqKIKJJPj7fqyOtFAmnqaKYKJXxhf6fvSgBQgNfJVem6fMavNA99SCrZ8IBqTBFirnTlOQ9If9xMThDJAw7gwIEBRKIICvhOSqsZdtnASUYn53e+9UAFdUle0AAopw7y+wn8l9VPKwxMDAbzglRSePujBRPjZ/k5mrnzwYsXD5CPgqowKIcRq+qxjqOyn90kk0YKyajJM0dU7m/9ebfWCvQF6IvAPDqTk96kyWNy8C6FVQWigoKx5XtaXKtnLDfuqdvsli5SQY3Oc5VEYuVaobEEEAaEqV3KouLx9Q7b1K0lPPQt+UBOUwf4hPuk6+qEEkmAAV/KTipcrMogWpHy/B4aA5UDFCfBXMAr0pCI8u3YxV2SEmAQdygLhGKSt2YAH3ObaMCHFw0sJYSSJ6cRQQ3CIhYzmpUcAQIIwpQluHiBM3C8rkEtvTrwkvrMvGPF4uQFj3lNtQa205almbC+vK8XVAd68T7oj3VtnQfxtHS73dWQ/0CAgQfISzDVwMhjFFEdENknuQkA0gklFZgJbPhzBaiqRrxaA5SkGG3IDqoBkaC2cVY1dl9Vv6o4wu8/Mkeo/uo5SFs9kralljCSL8kSWFuVojjBF1tZvTmsP7+wxGF3kmmSO2wrPaQsdWnPC3z45ASBpGJSkmnqI/XRjelcl1qy/G4kB9lEYo6XgBnAMNpRpVI/GUFVtq1aL4vsstIOjInmQZVYZRhJPKcQfQkiBBPUJnVKfX5EZLxUkf0Nd7GaDFzEEISBUxZikAzOD3V7pul7wdHqkNne2g+UUZ/Ke7TlCXXVI4zMchO8+HGzSBYxjXGg0o3PjFQWz871xeURJ1j8N1E8n+k3AsX/8vIG/ANzCidBmAQEv+Oa7SgnyfRRX6qKPPHn86TYAx58xET/mzIv4w2eSSO5xD5qqBxqbK0kEnlEOjBNNaLSnk7OXNLeUL6WDt1Fz6ZaWD2ZxzA5CbhJw894oshNCG8an6kgaj58W/8sBg0TprKCm3K2/O8xOw/9VViFwSRRgkhQVc21anT28vYKeZsRsSU4R7w8AApQlEgwbqsVdDg+QNeXm+RtnJNvuCt3AQdODL3zZQXmcMl8aafrBb1FbbOBtZhgPHxPF/U16dxhsSrLVS5ynvq6vo7VsvQwSxhA87QRL3e8eWjY9AnM7CaXMxXw7csQpOaRj4IUpqVyqpJGgw5zOMo+2XUz8mUIUjunLPz4nYGNpNGfKmCgWkkN/GYux1OjFagENYlVVLYq4+Zo8rMGDSr2jqitv31Y81l//xkVFN/m9hJ3UsMY8RJATsCmter1U1GVR6USAg57vGyTWuE5WS33aAF4cWPRlFyqEGEgg/Usfk7LKROklrQ/E8c5SaddF8ggDR9QXFWVDrHp+deXeieyKVfu9L3wUfKJwoGc5wB1s+bnqTykFVBfdaHAzVDfu54p9vtJ6Y5ZzkFGc+MCJ+UxLQFBQBIJV1EEUly+ozrHQ3KpokacvQzYqj4Wm3e4Rj8MquLBTQZwnpPExZYgiCBCmIggmSk6EzEUilx48eAmGQOFgUkOCvDC9UFmzoA0UkhR4/6eEKx9/rz6NcTdKLW5/xFERru6Ovdw14ySxkQRt3/q2YmpsynHr1xWtSrcwks28r4arapRnkIJwXqjGkTW/XNYTz8KgsNuLXukWvh1ykkKsTTAzQsstZQSOMjODLOqkY0PrVy6rv5Gcp1OkM/E5heKk0waHt2IaK7iyn79VtkLm5P75cvHd9JB9pcKk+myiMNcxEMGFlCWa2Q79o7qaH6tpjNdl5Xv5GspLkPlKd/Dy16ThBFLFrKD+l4tldrBR7hvPNPriKUYC+RzqvAzVznGeCKJIjurqUwt6q8cz1H2suvuQFyEERbQ7mWI+osCDmUm4dJkISvZqP6ye/q4FQqFwQwMDAxx/70I5LgecMbIA/dmhsVJL3A50obKShzqc6mAQ8VLPunAMlAnVGmiOx0hP30QWvMhH1Lsm/vOAH6hiT+r+pZpBJlXHHqOPi/Nwh+SwiO8QAap+FUU5Uknt3xLH70BW3roWF2b3PHLWcFDuWZXIYVnZBjDcEo8JtBRfcWwkrVoziApWnoAi+U1ogEngZhALuqpWvsPECjdZCdQkzdVId8brJL5cpmVL5t+VCO7nCeEO7TjpPR0ddO9OKb3gQpUvXlILJ8ygC5SnAIUoRgYZ43sZp0ZZZjPBRl6/A5ppPDQKDnZP2LjgE/1u3/Ab+3fRLXeX1LA8b9HQK622V4PWQCBz5KuZ3xKsL0RU3IqwyzuHGkcs7ura0ykfdY2vlArXZb03KTKU5ZSj1uySJ1Xl5eMUxXJSRCo71Re0nQ3hz1WbtA8vO9fpJvOc3yqj6pKOnk9nSRBLpBGex/+Vfb6+z85pzq3GH2vnZHtsowbxcrifHksXP1Ic5lUdSDfsZS3SlWVI3KX64jKQxHC7MGUIoc0Pfwlh6QUb1GHj1guM90umSH3aZOpAC1vqwicBAFHOCPZQirKCJrp4pySFJLlI9Wcr1Dc5Uc0Nhawl59lg7mSI+qe2k0NHaNv6p2O4GHvTPhw5hgdkakAnakAMzMHGMqpSqkG1kLi2Mcu2pHKc54TPOXXj+cNHMGfKiHlwcPS7sUY5nZ1X23DbYfrUDlsnLZtu6D8apdTo9U8hr35Bjbv8yKqDQN5h8hBbc1SxON/tkGFEMUZsyfX6MhQe7lDG3SUIeEz2CSzuMwkUnmCl+FcpwgVfG4zQ/2ixtnNzAKOwkrzk31a35Ymp6/zC1u5V6wsFslooCV9CG14nVflCnXyvWAb+ykBHCaGqGu5zaPmFNUp4Wv7uPWBbAbVj9VUdMdLXylJi78831w24cPBp5Thqpx1nZfJNNC9gViq8gV1gGf0zJwPKKAQxShhn5SCIrIK1HMVpUpYlhFqfGIe0b/P4n6bMKQDv3WIfqQdxaj6H/B18yvz/hbwcyYfe7vZfPDV8/SwvyBQjzSeUU1FBbzpWGjUtMupUSxXn0Yu9fksy5Yx1VRLoODZLd5NZhm1+ut7RAfNMSdCyPeetrbLLuHvZX2hH+F06J+kOX3D3qS33JANZFYjwFL5kWh/MS7a8/Vif0c9XO5QFVjLa1hxg5gqA+Rg57b48aHt7YhMQKrsALbwMgsaQFfqEUGRY9nt275jMsrzo3piVGUesEm2qzruehSROJkOeMnAkgM4CMAAwtglZ13X9LdEy8/AWZrLYl4FnvHrX+Ej/+nrhoJM+mp4RL/d//zxl4Unzx5s2QfcS9N3WUdwBYjpNMqS7i2uy+p7Zi5rntVMZ7HuGs+MQWr3J/1VV3VA5YpM5Q26S8UGk1yj5SDv2seo7n5k+42uqnnQHjOfHuYopzoRDg79hqyVymEiy2U0HQEX4QQANsfQ3t22zyor2vuAstShJNNUG9WKV45Xl8Vi0gnwobCM8oALpZoAGuEgJg5MuqqvVH8aHVgoA+nKXlD9xU8roK5qIAM9bWSxTKEj4MHEIg3jLy9OSdLTlVWG8K3c4zGv05mdFCQICPlnYf379u2ac3datQL3wvRI6wrB5moVr06TbhUWl55i/mDEGQPVLquTWU1tU8VrnbHdupJYg8uygvFUfnejo4/6TG09dUhfljbytTnOm2od1Lvs0eYN9x0JIHDkktondhbC67C/1OekblhTvmcReblFIDYOwEUWnL5mqpPxWK3z5eUyX3EFcLOcwIsz9R5Jkc5PhpDAcZ5lm04AIZjaix8P2gwgJ4UIoYw6Sh7qHw0jmXL0Bl1HD2IJ8CvNuey5zll20IQKL8tQcmd6eCFPiXV9rnvIR1KPTqznKbsJoQFQGsdfOrbXuUy8WUAdUw+VH6SRduokx5NhwydMmjnHzvgDrr6XTmX+qIEMJYhggu2FmS92t4jkFa5g+u67p+2aRYCZaMRzCbcdqZfTxBitOhhtjIZ2p4DZKhfdsiX5U+yP9c8bTqhEYtSXU21HgBpP8wVt7Fx6vXxgDhkWWbPy4G32mEnP9sd9VROXEW+2NL4kHZgP4NAL5KI0ds2WM6RRBlQAFiYQjMbpiQs8HFjIfNNnpiQ8ne8JVFkcfme8kTs5l+NrxyIjNf65bGMHF2ujXGgCdU1JJxmvEaeqUY2CVy8H9QpZ4+x/edSLLikHvWuMumaMo7TRSI9X2Ukl1NsL9bKGygSmRSYBJ+WxPCSfK7d2SiSbgIGcJpzH1CcITS4cOHACTemgutsf0F7OyhBQhkpVeawsUyZ/PGJgf/33tDLqLzv+zMlXWsaAPcFeoGfhxEd9auDWIh+roUZz45gxWC7rcYHljOJGZOA5d0v/l3bq3qLqjMpB3xU7nKYapup/VMH6WbeU9eYYxyjnKWOMfX7m2bOeOZeRgBaBp8z+ZHyYWG3otq2/L8Bhz5ITtHBVZzXJpALLSEYBuSlGmHdD2qLnO33l6O24FljF7G02VjvUVUpaO+wl8pgGx1PYheZe7Qi2kYbhW8FObGwHrCSVnHGt0uulHfdtsj5TttlcRQbc1w0kF+/5xrOPaII8bUniMmmQOYcY8BcFrJRHBLhKy2Y5xVaQLTzEz3MuMpD76h3uc4dbnNNvSiud0nobKfKlqNhAoslNmeAFw6wJzWdu0n/8jnr3l85846VPTSaYEEJ+WH1p6o6FqrN93Pb7xzu81C++tmn1rTUUyqIwcXqLI0OFq/sRr/oG2Ym608o16oh6mwZLLzi2yS5lfVnAnyIj5bJ5RwUbI8luf2cP1sf0eTZyM30TLswPE19buX0r9h93gEO3kONS2bUxM/mVxI8Xm6rkJ5UIz4cy0kikKugT8hX9GaT2c4D17KCSai894z6S5lKUzawmlWR8js8IIRQH36tFjKbu/ilyhSG8z1qVXSoTrJqxkVSpD0QRRojnA26TTMpvBKhFmUS8hV+CsUIr6ha6rjoDrJG8ajUJlMdgIOu4zTWuANNljHwwcg6BePEyhzvc4AqT/vaGl9hMpfV86e+VfjnKXN+NX+QbStvHo/vH3r00RA02ZnGBC9JQLVNZ1PP8+60lskwm9XmoopRNswktHRnqU1X+UJB/mF1FeptJdGAz3ew5kiz7ecx44y4O9ROOgEEhJxy//H6q468IsJdLktQKDn5ZL2sfHl7gN6AutSniqaJz6vcllZ0qw6hJVjljPFGd1U4gv7xP3PGFnCCa1B0/YuBAZAkOnDgcK+QD7qMOlOQ8/UgDyScFZZk+LysZyzEgCsHl3cVZ7nGPcpnAbyXt5WhSjWM5FUKW2F/bx1R5apBbFvOmTKQcZ9iCGxMnTiCYYELsnS/b0rI687lqZPr0PxBw+aV3Zn72z0VhoCXmeef783Ld5uMaY3t3XxYnDVPiH/TNMzcyt3+LT+tiBQ+rY3xE+tRrji7GY1UvtaOvj5VL3zaXUt78WRW0W5qx7FJrOc5KWSnzMAe8W/Xp1rA/B/43+3+txfXBxTN5IQAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAxNy0wMS0xOFQwMDo1Mzo1OS0wNTowMJpo+gIAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMTctMDEtMThUMDA6NTM6NTktMDU6MDDrNUK+AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAABJRU5ErkJggg==" alt="ManageEngine Applications Manager Icon">
    <div class="project_info">
        <header><a href="https://a.slashdotmedia.com/www/delivery/ck.php?oaparams=2__bannerid=21874__zoneid=18449__cb=ac8a9af907__oadest=https%3A%2F%2Fad.doubleclick.net%2Fddm%2Fclk%2F315773013%3B143900812%3Bt" target="_blank" rel="nofollow" itemprop="url" title="Find out more about ManageEngine Applications Manager"><span itemprop="name">ManageEngine Applications Manager</span></a></header>

        <p class="teaser">A single monitoring console for all your servers that eliminates the risks of frequent downtimes and ensures maximum business productivity.</p>
    </div>
    <div class="listing-body clearfix standard">
        

        <div class="tile clearfix">
            <a class="application-image thumbnail " >
                <img  itemprop="image" src="data:image/png;base64,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" alt="ManageEngine Applications Manager Icon">
                
            </a>

            

            <div itemprop="description" class="description ">
            

            ManageEngine's Applications Manager is a comprehensive monitoring tool for business organizations across the world to ensure uninterrupted business operations and profitability. Globally, IT admins across 100+ countries trust Applications Manager's capability in tackling critical issues and ensuring maximum efficiency among business critical servers. It is easy to use and supports a wide range of servers. Download now for a 30 day free trial.
            </div>

            <div class="download standard">
                
                <img src="https://a.slashdotmedia.com/www/delivery/lg.php?bannerid=21874&amp;campaignid=3308&amp;zoneid=18449&amp;cb=ac8a9af907" alt="ManageEngine Applications Manager" width="1" height="1" style="display: none;"/>

                

                
                <a class="sfdl sfdl-lite" target="_blank" rel="nofollow" href="https://a.slashdotmedia.com/www/delivery/ck.php?oaparams=2__bannerid=21874__zoneid=18449__cb=ac8a9af907__oadest=https%3A%2F%2Fad.doubleclick.net%2Fddm%2Fclk%2F315773013%3B143900812%3Bt">DOWNLOAD NOW</a>
                
            </div>
        </div> 

        

    </div> 
    <div class="sponsored-by">Advertisement</div>
</div>


</section>



        
<section id="ratings">
    
    <header class="ui-helper-clearfix">
        <h2>
            User Ratings
        </h2>
        

    </header>
    

    
    <section class="recommended-percentage item" itemscope itemtype="http://schema.org/AggregateRating" itemprop="aggregateRating">
        <span class="rating">
            <span class="average" itemprop="ratingValue">0.0</span>
            <meta itemprop="bestRating" content="5"/>
            <meta itemprop="worstRating" content="1"/>
            <meta itemprop="ratingCount" content="1"/>
            <span class="recommended">out of 5 stars</span>
        </span>
    </section>
    <section class="stars">
        <div class="star-text stars-5">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        <div class="star-text stars-4">&#9733;&#9733;&#9733;&#9733;</div>
        <div class="star-text stars-3">&#9733;&#9733;&#9733;</div>
        <div class="star-text stars-2">&#9733;&#9733;</div>
        <div class="star-text stars-1">&#9733;</div>
    </section>
    <section class="bargraph">
        <div class="stars-5" style="border-left-width: 1px">
            0
        </div>
        <div class="stars-4" style="border-left-width: 1px">
            0
        </div>
        <div class="stars-3" style="border-left-width: 1px">
            0
        </div>
        <div class="stars-2" style="border-left-width: 1px">
            0
        </div>
        <div class="stars-1" style="border-left-width: 1px">
            0
        </div>
    </section>

    
<div class="dimensional-ratings">
    

<div class="dimensional-rating">
    
    <span class="label">ease</span>
    <span title="1 of 5" class="rating ">1 of 5</span>
    <span title="2 of 5" class="rating ">2 of 5</span>
    <span title="3 of 5" class="rating ">3 of 5</span>
    <span title="4 of 5" class="rating ">4 of 5</span>
    <span title="5 of 5" class="rating ">5 of 5</span>
    <span class="rating-score">
        <span class="dim-rate">0</span> / 5
    </span>
</div>

    

<div class="dimensional-rating">
    
    <span class="label">features</span>
    <span title="1 of 5" class="rating ">1 of 5</span>
    <span title="2 of 5" class="rating ">2 of 5</span>
    <span title="3 of 5" class="rating ">3 of 5</span>
    <span title="4 of 5" class="rating ">4 of 5</span>
    <span title="5 of 5" class="rating ">5 of 5</span>
    <span class="rating-score">
        <span class="dim-rate">0</span> / 5
    </span>
</div>

    

<div class="dimensional-rating">
    
    <span class="label">design</span>
    <span title="1 of 5" class="rating ">1 of 5</span>
    <span title="2 of 5" class="rating ">2 of 5</span>
    <span title="3 of 5" class="rating ">3 of 5</span>
    <span title="4 of 5" class="rating ">4 of 5</span>
    <span title="5 of 5" class="rating ">5 of 5</span>
    <span class="rating-score">
        <span class="dim-rate">0</span> / 5
    </span>
</div>

    

<div class="dimensional-rating">
    
    <span class="label">support</span>
    <span title="1 of 5" class="rating ">1 of 5</span>
    <span title="2 of 5" class="rating ">2 of 5</span>
    <span title="3 of 5" class="rating ">3 of 5</span>
    <span title="4 of 5" class="rating ">4 of 5</span>
    <span title="5 of 5" class="rating ">5 of 5</span>
    <span class="rating-score">
        <span class="dim-rate">0</span> / 5
    </span>
</div>

</div>


    <div id="divider-bottom"></div>

</section>


        


    
        <aside class="project-activity-main" id="project-activity"></aside>
    

    <script type="text/x-handlebars-template" id="project-activity-template">
        <header>
        
            <h2>
                Project Activity
                <a id="follow-action" class="header-links {{#if following}}active{{/if}}" href="https://sourceforge.net/projects/farsitex/{{followee.activity_url}}activity/follow?source=project_activity" title="{{followee.activity_name}}">
                    <b data-icon="S" class="ico ico-star"></b>
                </a>
                <a id="rss-feed" class="header-links" href="https://sourceforge.net/projects/farsitex/{{followee.activity_url}}activity/feed?source=project_activity" title="RSS"><b data-icon="f" class="ico ico-feed"></b></a>
            </h2>
        
        </header>
        
        <ul class="list-of-activities">
            {{#each timeline}}
            <li class="item">
                <h4>
                    {{#ifTagged "release"}}
                      {{ cap this.verb }}
                    {{else}}
                      {{ icon this.actor.activity_extras.icon_url }}
                      {{ activity_obj this.actor }}
                      {{ this.verb }}
                    {{/ifTagged}}
                    {{ activity_obj this.obj }}
                    {{#if this.target.activity_name}} on {{ activity_obj this.target }}{{/if}}
                </h4>
                {{#if this.obj.activity_extras.summary}}
                  <p>{{ this.obj.activity_extras.summary }}</p>
                {{/if}}
                <time datetime="{{ this.published }}" title="{{ this.published }}">{{ ago this.published }}</time>
            </li>
            {{/each}}
        </ul>
        <a class="all-activities" href="https://sourceforge.net/projects/farsitex/{{followee.activity_url}}activity?source=project_activity">See All Activities</a>
        
    </script>



        
<section id="reviews-n-ratings">
    <header>
        <a class="pspbtn" href="https://sourceforge.net/projects/farsitex/reviews/new">Write a Review</a>
        <h2>User Reviews</h2>
    </header>
    <section class="content">
                <p>Be the first to <a href="https://sourceforge.net/projects/farsitex/reviews/new">post a review</a> of FarsiTeX!</p>
    </section>
</section>


        
<section id="project-additional-trove" class="content-supplement">
    <header>
        <h2>Additional Project Details</h2>
    </header>
    <div class="project-container">
        <section class="project-info">
    <header>
        <h3>Languages</h3>
    </header>
    <section class="content"><a href="https://sourceforge.net/directory/natlanguage:english/" itemprop=inLanguage>English</a>, <a href="https://sourceforge.net/directory/natlanguage:persian/" itemprop=inLanguage>Persian</a></section>
</section>


        <section class="project-info">
    <header>
        <h3>Intended Audience</h3>
    </header>
    <section class="content"><a href="https://sourceforge.net/directory/audience:endusers/">End Users/Desktop</a>, <a href="https://sourceforge.net/directory/audience:scienceresearch/">Science/Research</a></section>
</section>


        <section class="project-info">
    <header>
        <h3>User Interface</h3>
    </header>
    <section class="content"><a href="https://sourceforge.net/directory/environment:win32/">Win32 (MS Windows)</a>, <a href="https://sourceforge.net/directory/environment:x11/">X Window System (X11)</a></section>
</section>


        <section class="project-info">
    <header>
        <h3>Programming Language</h3>
    </header>
    <section class="content"><a href="https://sourceforge.net/directory/language:c/">C</a>, <a href="https://sourceforge.net/directory/language:cpp/">C++</a></section>
</section>


        <section class="project-info">
            <header>
                <h4>Registered</h4>
            </header>
            <section class="content">
                2000-07-02
            </section>
        </section>

        
    </div>
</section>


    </section>

    <section id="sidebar" class="scroll-fixable">

        
        <section class="sterling">
            


 
    
    



<div id="SF_ProjectSum_300x250_A_wrapped" data-id="div-gpt-ad-1394209358855-0" class="draper multisize  
visibility_rules 
 v_300_large "
>
<script type="text/javascript">
/*global googletag */
if (SF.initial_breakpoints_visible.large) {
(function(){
    
    document.write('<div id="div-gpt-ad-1394209358855-0"></div>');
}());

gptadRenderers['SF_ProjectSum_300x250_A'] = function(){  // jshint ignore:line
    googletag.cmd.push(function() {
        googletag.display('div-gpt-ad-1394209358855-0');
    });
};
gptadRenderers['SF_ProjectSum_300x250_A']();  // jshint ignore:line
}
</script>
</div>


            


 
    



<div id="SF_ProjectSum_300x250_B_wrapped" data-id="div-gpt-ad-1394209358856-0" class="draper medrec  
visibility_rules 
 v_300_large "
>
<script type="text/javascript">
/*global googletag */
if (SF.initial_breakpoints_visible.large) {
(function(){
    
    document.write('<div id="div-gpt-ad-1394209358856-0"></div>');
}());

gptadRenderers['SF_ProjectSum_300x250_B'] = function(){  // jshint ignore:line
    googletag.cmd.push(function() {
        googletag.display('div-gpt-ad-1394209358856-0');
    });
};
gptadRenderers['SF_ProjectSum_300x250_B']();  // jshint ignore:line
}
</script>
</div>


        </section>

        

<div id="taboola-right-rail-thumbnails"></div>
<script type="text/javascript">
/*global _taboola*/
window._taboola = window._taboola || [];
_taboola.push({
    mode: 'thumbnails-rr-abp',
    container: 'taboola-right-rail-thumbnails',
    placement: 'Right Rail Thumbnails',
    target_type: 'mix'
});
</script>

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
    
    

    
    <section class="sterling">
        


 
    



<div id="SF_ProjectSum_300x250_C_wrapped" data-id="div-gpt-ad-1394209358857-0" class="draper medrec  
visibility_rules 
 v_300_large "
>
<script type="text/javascript">
/*global googletag */
if (SF.initial_breakpoints_visible.large) {
(function(){
    
    document.write('<div id="div-gpt-ad-1394209358857-0"></div>');
}());

gptadRenderers['SF_ProjectSum_300x250_C'] = function(){  // jshint ignore:line
    googletag.cmd.push(function() {
        googletag.display('div-gpt-ad-1394209358857-0');
    });
};
gptadRenderers['SF_ProjectSum_300x250_C']();  // jshint ignore:line
}
</script>
</div>


    </section>

        

    
    
        <aside class="sidebar-widget project-related-keywords ">
            <header>
                <h3>Top Searches</h3>
            </header>
            <ul id="project-top-searches">
            
                <li class="search_term">
                    <b><a href="https://sourceforge.net/directory/?q=farsitex">farsitex</a></b>
                </li>
            
            </ul>
        </aside>
    
        <a id="report-inappropriate" href="https://sourceforge.net/projects/farsitex/report_inappropriate">Report inappropriate content</a>

    </section>
    

    
<script type="text/javascript">
if (!SF.adblock) {
    
    SF.Ads.scrollFixable = new SF.ScrollFixable($('.scroll-fixable').eq(0), null);
    
}
</script>
</article>
        </div>
  
    <div class="project-footer-drapercontainer">
    


 
    



<div id="SF_ProjectSum_728x90_B_wrapped" data-id="div-gpt-ad-1392148208790-0" class="draper leaderboard  
visibility_rules 
 v_728_leaderboard  v_970_xlarge "
>
<script type="text/javascript">
/*global googletag */
if (SF.initial_breakpoints_visible.leaderboard) {
(function(){
    
    document.write('<div id="div-gpt-ad-1392148208790-0"></div>');
}());

gptadRenderers['SF_ProjectSum_728x90_B'] = function(){  // jshint ignore:line
    googletag.cmd.push(function() {
        googletag.display('div-gpt-ad-1392148208790-0');
    });
};
gptadRenderers['SF_ProjectSum_728x90_B']();  // jshint ignore:line
}
</script>
</div>


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
            <a href="bugs_submit.php#" id="btn-blockthis-close">X</a>
            
  <input type="hidden" name="_visit_cookie" value="753a9834-4d97-47c0-b3be-f81587655e34"/>
                <input type='hidden' name='timestamp' value='1513322907'/>
                <input type='hidden' name='spinner' value='XXGIl57EAEkjo2PzWawIX7AZQxVM'/>
                <p class='x640cea481d6189fbed1d3e52cdf7b41cd55d37e0'><label for='XWwpKidR5I3im0_KTMHbnqkixEn8'>You seem to have CSS turned off.
             Please don't fill out this field.</label><input id='XWwpKidR5I3im0_KTMHbnqkixEn8' name='XWgpKidR5Igbj1rmNH_JRoueH6SE' type=
             'text'/></p>
                <p class='x640cea481d6189fbed1d3e52cdf7b41cd55d37e0'><label for='XWwpKidR5I3mm0_KTMHbnqkixEn8'>You seem to have CSS turned off.
             Please don't fill out this field.</label><input id='XWwpKidR5I3mm0_KTMHbnqkixEn8' name='XWgpKidR5Iwbj1rmNH_JRoueH6SE' type=
             'text'/></p>
            <p>Briefly describe the problem (required):
            <input name="XVwZAlNJyezicsZO4JQkZqV0kNRU" type="text" required>
            </p>

            <div class="upload-text">Upload screenshot of ad (required):</div>
            <div id='upload-it'>
                <a href="bugs_submit.php#" onclick="return false">Select a file</a>, or drag & drop file here.
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
            <input name="XVQFJjtJrTT2atLLdZUdMmPYWi7I" type="url">
            </p>
            <textarea id="gpt-info" name="XWAZEk9BOGUatg4gmLUz2OyoiE6I"></textarea>
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
        <input type="email" name="XWQdIhthsXEPmnaeim0RZDdF8t4U"  placeholder="email@address.com" value="" required>

        <label class="input-set stacked input-set-country">
            
            <span class="label">Country</span>
            
            <span class="input">
<select id="country-floating" name="XWwFKkt90YDGm0_KTMHbnqkixEn8" required class="use-placeholder-color">
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
<select id="state-floating" name="XWRFRhsVlXEPmnaeim0RZDdF8t4U"  class="use-placeholder-color">
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
    <span class="checkbox"> <input type="checkbox" name="XUQ1DgdRyYRect4y_CHFZ5wgVnic" value="artificial-intelligence"  data-consent-action data-consent-id=596517bdc14bed0737e41a50 ></span>
    <span class="checkbox-label">Artificial Intelligence</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XUQ1DgdRyYRect4y_CHFZ5wgVnic" value="cloud"  data-consent-action data-consent-id=596517bdc14bed0737e41a4f ></span>
    <span class="checkbox-label">Cloud</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XUQ1DgdRyYRect4y_CHFZ5wgVnic" value="network-security"  data-consent-action data-consent-id=596517bdc14bed0737e41a4e ></span>
    <span class="checkbox-label">Network Security</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XUQ1DgdRyYRect4y_CHFZ5wgVnic" value="hardware"  data-consent-action data-consent-id=596517bdc14bed0737e41a4d ></span>
    <span class="checkbox-label">Hardware</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XUQ1DgdRyYRect4y_CHFZ5wgVnic" value="software-development"  data-consent-action data-consent-id=596517bdc14bed0737e41a4c ></span>
    <span class="checkbox-label">Software Development</span>
    

</label>


        
</div>

<div class="gdpr-consent-requirement gdpr-contact-methods">
    <h4>
    You can contact me via:
    </h4>

    
 

<label class="input-set stacked inset input-set-consent-email minimum-explicit-required">
    <span class="checkbox"> <input type="checkbox" name="XUwFKicVhcTy3tZmiA21zn0hbyxY" value="email"  data-consent-action data-consent-id=59aed8e456585fa9603b60ec ></span>
    <span class="checkbox-label">Email (required)</span>
    

</label>


    
 

<label class="input-set stacked inset prompt-phone">
    <span class="checkbox"> <input type="checkbox" name="XUwFKicVhcTy3tZmiA21zn0hbyxY" value="phone"  data-consent-action data-consent-id=596517bdc14bed0737e41a51 ></span>
    <span class="checkbox-label">Phone</span>
    

</label>


    
 

<label class="input-set stacked inset prompt-phone">
    <span class="checkbox"> <input type="checkbox" name="XUwFKicVhcTy3tZmiA21zn0hbyxY" value="sms"  data-consent-action data-consent-id=596517bdc14bed0737e41a53 ></span>
    <span class="checkbox-label">SMS</span>
    

</label>



    <label class="input-set inset input-phone hide ">
        <span class="label">Phone</span>
        <span class="input">
            <input type="tel" name="XWRJNiN9lXEPmnaeim0RZDdF8t4U" value="">
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
    <input type="hidden" name="XVwxAkMJsdzycvY6lJQkZqV0kNRU" value="sitewide" class="newsletter-optin-assume">
    
 

<label class="input-set input-set-agree-general allow-precheck">
    <span class="checkbox"> <input type="checkbox" name="XWwFKicJlfDym0_KTMHbnqkixEn8" value="consent"  data-consent-action data-consent-id=5a26cb73ecf83256408fd377 required></span>
    <span class="checkbox-label">I agree to receive these communications from SourceForge.net.  I understand that I can withdraw my consent at anytime. Please refer to our <a href="http://slashdotmedia.com/terms-of-use">Terms of Use</a> and <a href="https://slashdotmedia.com/privacy-statement/">Privacy Policy</a> or <a href="https://sourceforge.net/support">Contact Us</a> for more details.</span>
    

</label>


            
 

<label class="input-set input-set-agree-general-gdpr allow-precheck hide-initially">
    <span class="checkbox"> <input type="checkbox" name="XWwFKicJlfDym0_KTMHbnqkixEn8" value="consent"  data-consent-action data-consent-id=5a26cb73ecf83256408fd378 required></span>
    <span class="checkbox-label">I agree to receive these communications from SourceForge.net via the means indicated above.  I understand that I can withdraw my consent at anytime. Please refer to our <a href="http://slashdotmedia.com/terms-of-use">Terms of Use</a> and <a href="https://slashdotmedia.com/privacy-statement/">Privacy Policy</a> or <a href="https://sourceforge.net/support">Contact Us</a> for more details.</span>
    

</label>


    </p>

    <input type="submit" value="Subscribe" class="bt button blue">

    <input type="hidden" name="source" value="floating">
    <input type="hidden" name="XTwFKkt90YDG3u5OyDl1kg3MipjY" value="user">
    <input type="hidden" name="XXwlIkv8LHA2zrAyQJePAwHSGNLc" value="">


  <input type="hidden" name="_visit_cookie" value="753a9834-4d97-47c0-b3be-f81587655e34"/>
<input type='hidden' name='timestamp' value='1513322907'/>
<input type='hidden' name='spinner' value='XXGIl57EAEkjo2PzWawIX7AZQxVM'/>
<p class='x640cea481d6189fbed1d3e52cdf7b41cd55d37e0'><label for='XWwpKidR5IHim0_KTMHbnqkixEn8'>You seem to have CSS turned off.
             Please don't fill out this field.</label><input id='XWwpKidR5IHim0_KTMHbnqkixEn8' name='XWgpKidR5Igbj1rmNH_JRoueH6SE' type=
             'text'/></p>
<p class='x640cea481d6189fbed1d3e52cdf7b41cd55d37e0'><label for='XWwpKidR5IHmm0_KTMHbnqkixEn8'>You seem to have CSS turned off.
             Please don't fill out this field.</label><input id='XWwpKidR5IHmm0_KTMHbnqkixEn8' name='XWgpKidR5Iwbj1rmNH_JRoueH6SE' type=
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
<script src="https://a.fsdn.com/con/js/lib/jquery.fancybox-2.1.5.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/lib/jquery.nivo.slider.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/lib/jquery.rating.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/lib/jquery.pajinate.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/lib/jquery.qtip.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/lib/date.format.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/lib/string.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/lib/bootstrap-scrollspy.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/lib/handlebars.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/lib/jquery.dotdotdot-1.8.3.min.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/sftheme/jquery.notify.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/sftheme/shared.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/widgets.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/global.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/project.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/reviews.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/screenshots.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/callouts.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/activity.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/madmen.js?1513198786" type="text/javascript"></script>
<script src="https://a.fsdn.com/con/js/nel.js?1513198786" type="text/javascript"></script>



        
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




<script type="text/javascript">
/*global _taboola*/
window._taboola = window._taboola || [];
_taboola.push({flush: true});
</script>

      </body>
</html>

