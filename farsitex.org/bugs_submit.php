<!doctype html>
<!-- Server: sfs-consume-3 -->

<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]>--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"VgQOV19AAQoJVlNT"};window.NREUM||(NREUM={}),__nr_require=function(t,n,e){function r(e){if(!n[e]){var o=n[e]={exports:{}};t[e][0].call(o.exports,function(n){var o=t[e][1][n];return r(o||n)},o,o.exports)}return n[e].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<e.length;o++)r(e[o]);return r}({1:[function(t,n,e){function r(t){try{s.console&&console.log(t)}catch(n){}}var o,i=t("ee"),a=t(15),s={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(s.console=!0,o.indexOf("dev")!==-1&&(s.dev=!0),o.indexOf("nr_dev")!==-1&&(s.nrDev=!0))}catch(c){}s.nrDev&&i.on("internal-error",function(t){r(t.stack)}),s.dev&&i.on("fn-err",function(t,n,e){r(e.stack)}),s.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(s,function(t,n){return t}).join(", ")))},{}],2:[function(t,n,e){function r(t,n,e,r,s){try{p?p-=1:o(s||new UncaughtException(t,n,e),!0)}catch(f){try{i("ierr",[f,c.now(),!0])}catch(d){}}return"function"==typeof u&&u.apply(this,a(arguments))}function UncaughtException(t,n,e){this.message=t||"Uncaught error with no additional information",this.sourceURL=n,this.line=e}function o(t,n){var e=n?null:c.now();i("err",[t,e])}var i=t("handle"),a=t(16),s=t("ee"),c=t("loader"),f=t("gos"),u=window.onerror,d=!1,l="nr@seenError",p=0;c.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(h){"stack"in h&&(t(8),t(7),"addEventListener"in window&&t(5),c.xhrWrappable&&t(9),d=!0)}s.on("fn-start",function(t,n,e){d&&(p+=1)}),s.on("fn-err",function(t,n,e){d&&!e[l]&&(f(e,l,function(){return!0}),this.thrown=!0,o(e))}),s.on("fn-end",function(){d&&!this.thrown&&p>0&&(p-=1)}),s.on("internal-error",function(t){i("ierr",[t,c.now(),!0])})},{}],3:[function(t,n,e){t("loader").features.ins=!0},{}],4:[function(t,n,e){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(8),s=t(7),c="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",l="resource",p="-start",h="-end",m="fn"+p,w="fn"+h,v="bstTimer",y="pushState",g=t("loader");g.features.stn=!0,t(6);var b=NREUM.o.EV;o.on(m,function(t,n){var e=t[0];e instanceof b&&(this.bstStart=g.now())}),o.on(w,function(t,n){var e=t[0];e instanceof b&&i("bst",[e,n,this.bstStart,g.now()])}),a.on(m,function(t,n,e){this.bstStart=g.now(),this.bstType=e}),a.on(w,function(t,n){i(v,[n,this.bstStart,g.now(),this.bstType])}),s.on(m,function(){this.bstStart=g.now()}),s.on(w,function(t,n){i(v,[n,this.bstStart,g.now(),"requestAnimationFrame"])}),o.on(y+p,function(t){this.time=g.now(),this.startPath=location.pathname+location.hash}),o.on(y+h,function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+c]?window.performance[f](u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["c"+c]()},!1):window.performance[f]("webkit"+u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["webkitC"+c]()},!1)),document[f]("scroll",r,{passive:!0}),document[f]("keypress",r,!1),document[f]("click",r,!1)}},{}],5:[function(t,n,e){function r(t){for(var n=t;n&&!n.hasOwnProperty(u);)n=Object.getPrototypeOf(n);n&&o(n)}function o(t){s.inPlace(t,[u,d],"-",i)}function i(t,n){return t[1]}var a=t("ee").get("events"),s=t(18)(a,!0),c=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";n.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,n){var e=t[1],r=c(e,"nr@wrapped",function(){function t(){if("function"==typeof e.handleEvent)return e.handleEvent.apply(e,arguments)}var n={object:t,"function":e}[typeof e];return n?s(n,"fn-",null,n.name||"anonymous"):e});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],6:[function(t,n,e){var r=t("ee").get("history"),o=t(18)(r);n.exports=r,o.inPlace(window.history,["pushState","replaceState"],"-")},{}],7:[function(t,n,e){var r=t("ee").get("raf"),o=t(18)(r),i="equestAnimationFrame";n.exports=r,o.inPlace(window,["r"+i,"mozR"+i,"webkitR"+i,"msR"+i],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],8:[function(t,n,e){function r(t,n,e){t[0]=a(t[0],"fn-",null,e)}function o(t,n,e){this.method=e,this.timerDuration=isNaN(t[1])?0:+t[1],t[0]=a(t[0],"fn-",this,e)}var i=t("ee").get("timer"),a=t(18)(i),s="setTimeout",c="setInterval",f="clearTimeout",u="-start",d="-";n.exports=i,a.inPlace(window,[s,"setImmediate"],s+d),a.inPlace(window,[c],c+d),a.inPlace(window,[f,"clearImmediate"],f+d),i.on(c+u,r),i.on(s+u,o)},{}],9:[function(t,n,e){function r(t,n){d.inPlace(n,["onreadystatechange"],"fn-",s)}function o(){var t=this,n=u.context(t);t.readyState>3&&!n.resolved&&(n.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,y,"fn-",s)}function i(t){g.push(t),h&&(x?x.then(a):w?w(a):(E=-E,O.data=E))}function a(){for(var t=0;t<g.length;t++)r([],g[t]);g.length&&(g=[])}function s(t,n){return n}function c(t,n){for(var e in t)n[e]=t[e];return n}t(5);var f=t("ee"),u=f.get("xhr"),d=t(18)(u),l=NREUM.o,p=l.XHR,h=l.MO,m=l.PR,w=l.SI,v="readystatechange",y=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],g=[];n.exports=u;var b=window.XMLHttpRequest=function(t){var n=new p(t);try{u.emit("new-xhr",[n],n),n.addEventListener(v,o,!1)}catch(e){try{u.emit("internal-error",[e])}catch(r){}}return n};if(c(p,b),b.prototype=p.prototype,d.inPlace(b.prototype,["open","send"],"-xhr-",s),u.on("send-xhr-start",function(t,n){r(t,n),i(n)}),u.on("open-xhr-start",r),h){var x=m&&m.resolve();if(!w&&!m){var E=1,O=document.createTextNode(E);new h(a).observe(O,{characterData:!0})}}else f.on("fn-end",function(t){t[0]&&t[0].type===v||a()})},{}],10:[function(t,n,e){function r(t){var n=this.params,e=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<d;r++)t.removeEventListener(u[r],this.listener,!1);if(!n.aborted){if(e.duration=a.now()-this.startTime,4===t.readyState){n.status=t.status;var i=o(t,this.lastSize);if(i&&(e.rxSize=i),this.sameOrigin){var c=t.getResponseHeader("X-NewRelic-App-Data");c&&(n.cat=c.split(", ").pop())}}else n.status=0;e.cbTime=this.cbTime,f.emit("xhr-done",[t],t),s("xhr",[n,e,this.startTime])}}}function o(t,n){var e=t.responseType;if("json"===e&&null!==n)return n;var r="arraybuffer"===e||"blob"===e||"json"===e?t.response:t.responseText;return h(r)}function i(t,n){var e=c(n),r=t.params;r.host=e.hostname+":"+e.port,r.pathname=e.pathname,t.sameOrigin=e.sameOrigin}var a=t("loader");if(a.xhrWrappable){var s=t("handle"),c=t(11),f=t("ee"),u=["load","error","abort","timeout"],d=u.length,l=t("id"),p=t(14),h=t(13),m=window.XMLHttpRequest;a.features.xhr=!0,t(9),f.on("new-xhr",function(t){var n=this;n.totalCbs=0,n.called=0,n.cbTime=0,n.end=r,n.ended=!1,n.xhrGuids={},n.lastSize=null,p&&(p>34||p<10)||window.opera||t.addEventListener("progress",function(t){n.lastSize=t.loaded},!1)}),f.on("open-xhr-start",function(t){this.params={method:t[0]},i(this,t[1]),this.metrics={}}),f.on("open-xhr-end",function(t,n){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&n.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),f.on("send-xhr-start",function(t,n){var e=this.metrics,r=t[0],o=this;if(e&&r){var i=h(r);i&&(e.txSize=i)}this.startTime=a.now(),this.listener=function(t){try{"abort"===t.type&&(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof n.onload))&&o.end(n)}catch(e){try{f.emit("internal-error",[e])}catch(r){}}};for(var s=0;s<d;s++)n.addEventListener(u[s],this.listener,!1)}),f.on("xhr-cb-time",function(t,n,e){this.cbTime+=t,n?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof e.onload||this.end(e)}),f.on("xhr-load-added",function(t,n){var e=""+l(t)+!!n;this.xhrGuids&&!this.xhrGuids[e]&&(this.xhrGuids[e]=!0,this.totalCbs+=1)}),f.on("xhr-load-removed",function(t,n){var e=""+l(t)+!!n;this.xhrGuids&&this.xhrGuids[e]&&(delete this.xhrGuids[e],this.totalCbs-=1)}),f.on("addEventListener-end",function(t,n){n instanceof m&&"load"===t[0]&&f.emit("xhr-load-added",[t[1],t[2]],n)}),f.on("removeEventListener-end",function(t,n){n instanceof m&&"load"===t[0]&&f.emit("xhr-load-removed",[t[1],t[2]],n)}),f.on("fn-start",function(t,n,e){n instanceof m&&("onload"===e&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=a.now()))}),f.on("fn-end",function(t,n){this.xhrCbStart&&f.emit("xhr-cb-time",[a.now()-this.xhrCbStart,this.onload,n],n)})}},{}],11:[function(t,n,e){n.exports=function(t){var n=document.createElement("a"),e=window.location,r={};n.href=t,r.port=n.port;var o=n.href.split("://");!r.port&&o[1]&&(r.port=o[1].split("/")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=n.hostname||e.hostname,r.pathname=n.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname);var i=!n.protocol||":"===n.protocol||n.protocol===e.protocol,a=n.hostname===document.domain&&n.port===e.port;return r.sameOrigin=i&&(!n.hostname||a),r}},{}],12:[function(t,n,e){function r(){}function o(t,n,e){return function(){return i(t,[f.now()].concat(s(arguments)),n?null:this,e),n?void 0:this}}var i=t("handle"),a=t(15),s=t(16),c=t("ee").get("tracer"),f=t("loader"),u=NREUM;"undefined"==typeof window.newrelic&&(newrelic=u);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],l="api-",p=l+"ixn-";a(d,function(t,n){u[n]=o(l+n,!0,"api")}),u.addPageAction=o(l+"addPageAction",!0),u.setCurrentRouteName=o(l+"routeName",!0),n.exports=newrelic,u.interaction=function(){return(new r).get()};var h=r.prototype={createTracer:function(t,n){var e={},r=this,o="function"==typeof n;return i(p+"tracer",[f.now(),t,e],r),function(){if(c.emit((o?"":"no-")+"fn-start",[f.now(),r,o],e),o)try{return n.apply(this,arguments)}catch(t){throw c.emit("fn-err",[arguments,this,t],e),t}finally{c.emit("fn-end",[f.now()],e)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,n){h[n]=o(p+n)}),newrelic.noticeError=function(t){"string"==typeof t&&(t=new Error(t)),i("err",[t,f.now()])}},{}],13:[function(t,n,e){n.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(n){return}}}},{}],14:[function(t,n,e){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),n.exports=r},{}],15:[function(t,n,e){function r(t,n){var e=[],r="",i=0;for(r in t)o.call(t,r)&&(e[i]=n(r,t[r]),i+=1);return e}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],16:[function(t,n,e){function r(t,n,e){n||(n=0),"undefined"==typeof e&&(e=t?t.length:0);for(var r=-1,o=e-n||0,i=Array(o<0?0:o);++r<o;)i[r]=t[n+r];return i}n.exports=r},{}],17:[function(t,n,e){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],18:[function(t,n,e){function r(t){return!(t&&t instanceof Function&&t.apply&&!t[a])}var o=t("ee"),i=t(16),a="nr@original",s=Object.prototype.hasOwnProperty,c=!1;n.exports=function(t,n){function e(t,n,e,o){function nrWrapper(){var r,a,s,c;try{a=this,r=i(arguments),s="function"==typeof e?e(r,a):e||{}}catch(f){l([f,"",[r,a,o],s])}u(n+"start",[r,a,o],s);try{return c=t.apply(a,r)}catch(d){throw u(n+"err",[r,a,d],s),d}finally{u(n+"end",[r,a,c],s)}}return r(t)?t:(n||(n=""),nrWrapper[a]=t,d(t,nrWrapper),nrWrapper)}function f(t,n,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<n.length;c++)s=n[c],a=t[s],r(a)||(t[s]=e(a,f?s+o:o,i,s))}function u(e,r,o){if(!c||n){var i=c;c=!0;try{t.emit(e,r,o,n)}catch(a){l([a,e,r,o])}c=i}}function d(t,n){if(Object.defineProperty&&Object.keys)try{var e=Object.keys(t);return e.forEach(function(e){Object.defineProperty(n,e,{get:function(){return t[e]},set:function(n){return t[e]=n,n}})}),n}catch(r){l([r])}for(var o in t)s.call(t,o)&&(n[o]=t[o]);return n}function l(n){try{t.emit("internal-error",n)}catch(e){}}return t||(t=o),e.inPlace=f,e.flag=a,e}},{}],ee:[function(t,n,e){function r(){}function o(t){function n(t){return t&&t instanceof r?t:t?c(t,s,i):i()}function e(e,r,o,i){if(!l.aborted||i){t&&t(e,r,o);for(var a=n(o),s=h(e),c=s.length,f=0;f<c;f++)s[f].apply(a,r);var d=u[y[e]];return d&&d.push([g,e,r,a]),a}}function p(t,n){v[t]=h(t).concat(n)}function h(t){return v[t]||[]}function m(t){return d[t]=d[t]||o(e)}function w(t,n){f(t,function(t,e){n=n||"feature",y[e]=n,n in u||(u[n]=[])})}var v={},y={},g={on:p,emit:e,get:m,listeners:h,context:n,buffer:w,abort:a,aborted:!1};return g}function i(){return new r}function a(){(u.api||u.feature)&&(l.aborted=!0,u=l.backlog={})}var s="nr@context",c=t("gos"),f=t(15),u={},d={},l=n.exports=o();l.backlog=u},{}],gos:[function(t,n,e){function r(t,n,e){if(o.call(t,n))return t[n];var r=e();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(t,n,e){function r(t,n,e,r){o.buffer([t],r),o.emit(t,n,e)}var o=t("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(t,n,e){function r(t){var n=typeof t;return!t||"object"!==n&&"function"!==n?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");n.exports=r},{}],loader:[function(t,n,e){function r(){if(!x++){var t=b.info=NREUM.info,n=l.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&n))return u.abort();f(y,function(n,e){t[n]||(t[n]=e)}),c("mark",["onload",a()+b.offset],null,"api");var e=l.createElement("script");e.src="https://"+t.agent,n.parentNode.insertBefore(e,n)}}function o(){"complete"===l.readyState&&i()}function i(){c("mark",["domContent",a()+b.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(s=Math.max((new Date).getTime(),s))-b.offset}var s=(new Date).getTime(),c=t("handle"),f=t(15),u=t("ee"),d=window,l=d.document,p="addEventListener",h="attachEvent",m=d.XMLHttpRequest,w=m&&m.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:m,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var v=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1071.min.js"},g=m&&w&&w[p]&&!/CriOS/.test(navigator.userAgent),b=n.exports={offset:s,now:a,origin:v,features:{},xhrWrappable:g};t(12),l[p]?(l[p]("DOMContentLoaded",i,!1),d[p]("load",r,!1)):(l[h]("onreadystatechange",o),d[h]("onload",r)),c("mark",["firstbyte",s],null,"api");var x=0,E=t(17)},{}]},{},["loader",2,10,4,3]);</script><script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","queueTime":1,"licenseKey":"f516fac27e","agent":"","transactionName":"MVRXZBQHCBZRV0wIDAgec0UIBRIMX1oXEgVIUlpeFRMLAB5XVw8XFF5ZXAMUFUtARlcLBgVFD2AUCQwAU0BxDxASUFtTAyUJC0RGVw0PA0MbWQgCAx0=","applicationID":"999221","errorBeacon":"bam.nr-data.net","applicationTime":64}</script>
        
        
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


        <style type="text/css">.Re927e0ffd91d29f8f19399b80492a60503bf00a4 { display: none !important; }</style>
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
    <input type="hidden" name="XL7ax7Lxw_fCT_frOPYoytx_Amxs" value="user">
    <input type="hidden" name="XOqax7KBn6u2cXHm7Nq2TslKO4FQ" value="PSP">
    <div class="clearfix input-group-main">
        <div class="nsw-error-container input-set stacked">
            <div class="error-message"><i>Invalid email address. Please try again.</i></div>
            <input type="email" class="subscriber-email" name="XObCz:Lto69kOcoTEIAcr4Faq0vE" placeholder="Enter your email address" value="" required>
        </div>
        

        <label class="input-set stacked">
            <span class="label">Country</span>
            <span class="input">
<select id="country" name="XO7ax7Lxw_fCozldGSbs5CgCKxGY" required class="use-placeholder-color">
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
<select id="state" name="XOaaq:KZh69kOcoTEIAcr4Faq0vE"  class="use-placeholder-color">
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
    <span class="checkbox"> <input type="checkbox" name="XP76z7LZUTWXd8O14Mu19wEA90Gg" value="farsitex"  data-consent-action data-consent-id=59aed8e456585fa9603b60e8 ></span>
    <span class="checkbox-label">Get notifications on updates for this project.</span>
    

</label>


        
 

<label class="input-set input-set input-set-newsletters-optin-sitewide allow-precheck loose-consent-requirement kmunl_consent">
    <span class="checkbox"> <input type="checkbox" name="XN7u77qFo6v24::fZPIWDNHvcgKw" value="sitewide"  data-consent-action data-consent-id=59aed8e456585fa9603b60e9 ></span>
    <span class="checkbox-label">Get the SourceForge newsletter.</span>
    

</label>


        
 

<label class="input-set input-set input-set-newsletters-optin-all kmunl_consent">
    <span class="checkbox"> <input type="checkbox" name="XN7u77qFo6v24::fZPIWDNHvcgKw" value="sitewide research"  data-consent-action data-consent-id=59aed8e456585fa9603b60ea ></span>
    <span class="checkbox-label">Get newsletters and notices that include site news, special offers and exclusive discounts about IT products &amp; services.</span>
    

</label>



        

<div class="gdpr-consent-requirement gdpr-consent-topics">
    <h4>
        Yes, also send me special offers about products &amp; services regarding:
        </h4>

        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XMbq4_7d2_Na48eXDO6YliKhe6RA" value="artificial-intelligence"  data-consent-action data-consent-id=596517bdc14bed0737e41a50 ></span>
    <span class="checkbox-label">Artificial Intelligence</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XMbq4_7d2_Na48eXDO6YliKhe6RA" value="cloud"  data-consent-action data-consent-id=596517bdc14bed0737e41a4f ></span>
    <span class="checkbox-label">Cloud</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XMbq4_7d2_Na48eXDO6YliKhe6RA" value="network-security"  data-consent-action data-consent-id=596517bdc14bed0737e41a4e ></span>
    <span class="checkbox-label">Network Security</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XMbq4_7d2_Na48eXDO6YliKhe6RA" value="hardware"  data-consent-action data-consent-id=596517bdc14bed0737e41a4d ></span>
    <span class="checkbox-label">Hardware</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XMbq4_7d2_Na48eXDO6YliKhe6RA" value="software-development"  data-consent-action data-consent-id=596517bdc14bed0737e41a4c ></span>
    <span class="checkbox-label">Software Development</span>
    

</label>


        
</div>

<div class="gdpr-consent-requirement gdpr-contact-methods">
    <h4>
    You can contact me via:
    </h4>

    
 

<label class="input-set stacked inset input-set-consent-email minimum-explicit-required">
    <span class="checkbox"> <input type="checkbox" name="XM7ax96Zl7P2T8_DeMLolqw7iOpI" value="email"  data-consent-action data-consent-id=59aed8e456585fa9603b60ec ></span>
    <span class="checkbox-label">Email (required)</span>
    

</label>


    
 

<label class="input-set stacked inset prompt-phone">
    <span class="checkbox"> <input type="checkbox" name="XM7ax96Zl7P2T8_DeMLolqw7iOpI" value="phone"  data-consent-action data-consent-id=596517bdc14bed0737e41a51 ></span>
    <span class="checkbox-label">Phone</span>
    

</label>


    
 

<label class="input-set stacked inset prompt-phone">
    <span class="checkbox"> <input type="checkbox" name="XM7ax96Zl7P2T8_DeMLolqw7iOpI" value="sms"  data-consent-action data-consent-id=596517bdc14bed0737e41a53 ></span>
    <span class="checkbox-label">SMS</span>
    

</label>



    <label class="input-set inset input-phone hide ">
        <span class="label">Phone</span>
        <span class="input">
            <input type="tel" name="XOaW29rxh69kOcoTEIAcr4Faq0vE" value="">
        </span>
        <span class="error-message"></span>
    </label>
</div>


        <input type="hidden" name="XN7u77qFo6v24::fZPIWDNHvcgKw" class="input-assumed-newsletters" value="">
        <input type="hidden" name="XP76z7LZUTWXd8O14Mu19wEA90Gg" class="input-assumed-kmu" value="">
    </div>

        
 

<label class="input-set stacked input-set-agree-general allow-precheck">
    <span class="checkbox"> <input type="checkbox" name="XO7ax96Fh4f2ozldGSbs5CgCKxGY" value="consent"  data-consent-action data-consent-id=5a26cb73ecf83256408fd377 ></span>
    <span class="checkbox-label">I agree to receive these communications from SourceForge.net.  I understand that I can withdraw my consent at anytime. Please refer to our <a href="http://slashdotmedia.com/terms-of-use">Terms of Use</a> and <a href="https://slashdotmedia.com/privacy-statement/">Privacy Policy</a> or <a href="https://sourceforge.net/support">Contact Us</a> for more details.</span>
    

</label>


    
 

<label class="input-set stacked input-set-agree-general-gdpr minimum-explicit-required">
    <span class="checkbox"> <input type="checkbox" name="XO7ax96Fh4f2ozldGSbs5CgCKxGY" value="consent"  data-consent-action data-consent-id=5a26cb73ecf83256408fd378 ></span>
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
    <input type='hidden' name='timestamp' value='1513322909'/>
    <input type='hidden' name='spinner' value='XPNXemdIEj4nMnpWqWNVB2Gqy:H4'/>
    <p class='Re927e0ffd91d29f8f19399b80492a60503bf00a4'><label for='XO72x97d9v7mozldGSbs5CgCKxGY'>You seem to have CSS turned off.
             Please don't fill out this field.</label><input id='XO72x97d9v7mozldGSbs5CgCKxGY' name='XOr2x97d9v:2cXHm7Nq2TslKO4FQ' type=
             'text'/></p>
    <p class='Re927e0ffd91d29f8f19399b80492a60503bf00a4'><label for='XO72x97d9v7iozldGSbs5CgCKxGY'>You seem to have CSS turned off.
             Please don't fill out this field.</label><input id='XO72x97d9v7iozldGSbs5CgCKxGY' name='XOr2x97d9vu2cXHm7Nq2TslKO4FQ' type=
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
    <img class="icon-image" itemprop="image" width="48" height="48" src="data:image/png;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAAeAAD/4QMvaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IE1hY2ludG9zaCIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDoxNzkxMDVGOUJFNTQxMUU3OEYwMUQ3QkI1MjAwNTNGNiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDoxNzkxMDVGQUJFNTQxMUU3OEYwMUQ3QkI1MjAwNTNGNiI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjE3OTEwNUY3QkU1NDExRTc4RjAxRDdCQjUyMDA1M0Y2IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjE3OTEwNUY4QkU1NDExRTc4RjAxRDdCQjUyMDA1M0Y2Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+/+4ADkFkb2JlAGTAAAAAAf/bAIQAEAsLCwwLEAwMEBcPDQ8XGxQQEBQbHxcXFxcXHx4XGhoaGhceHiMlJyUjHi8vMzMvL0BAQEBAQEBAQEBAQEBAQAERDw8RExEVEhIVFBEUERQaFBYWFBomGhocGhomMCMeHh4eIzArLicnJy4rNTUwMDU1QEA/QEBAQEBAQEBAQEBA/8AAEQgAMAAwAwEiAAIRAQMRAf/EAIYAAAICAwAAAAAAAAAAAAAAAAIGBQcAAQQBAAMBAQAAAAAAAAAAAAAAAAECAwQFEAACAQIEAwUHBQEAAAAAAAABAgMABBEhEgYxQQVRYXEiMpGhQrITFDWBI8N0NhURAAICAQIEBAcAAAAAAAAAAAECAAMRIVExQRIEYXGBIrFCUnITI0P/2gAMAwEAAhEDEQA/AJLcm5Z453sLB/piPKaYerVzVTywqJl6B1eSzj6iVM4lGtlxLSqvIkHM4jPKot5GkkaVzi7MWYnmScaZ493Xv/Pkjkt2FzowinRSEzy1EcsBnlWjBUDpA8ZzutbWY2Mw+kDlFbhkayjEUz+YIzY/EATj+tbignmJEMbyEcdClsPZTzPg7QUkkjYPGxRhwZSQfaKadt7lnadLG/f6iyHTFK3qDHgrHnjSqysjFXUqw4qRgfYa2jtG6uuTKQwPeM6DKGEeuxq2BB8xBqxl/wA0P6X8VVzVjL/mh/S/ipLfl85btP6fbA2t+BtfB/nauJ9y9H6VJ9hbQs0cJ0u0YGAb4uJ8x7a7drfgbXwf52pDvbWe0u5LedSsisRn8WeRHbjSqoZmzvK2WMlVRUcVGvpH3qFhY9e6cJYsGdl1W84GBB7D3Y5EVXhBUlSMCMiO8VYe2baa06NClwCjHVJpbIqrHEY0gXLrJczSL6XkZl8CxIpq+LDkJPugCtbkYZhrAkjaORo3GDoSrDvBwNNg3P0wdH+y/c+t9t9H0+XVo0cceGNDuXbc7zvf2Kaw/mmiX1aubKOeNKrxyRtpkUo3YwIPvo+1wPCTP5KGYAaNpk7Swdr/AIG18H+dq4bXd/TJVBv4zFcJlqC61y5qeIqJ6buuXp9jHZrbLIIsfOXIx1Etw0ntqBJxJPacaAryWzvpKt3PStYQ5wuGBEaOt7uS5ge16erKsg0yTNkdJ4hR39tLCIzuqL6mIUDvOVYiO7BUUsx4ADE+6mfbe27j7hL6+QxpGdUUTZMzDgSOQFN7UEl+y9xnX4AT/9k=" alt="WhatsUp&reg; Gold - Start A Free 30-Day Trial Icon">
    <div class="project_info">
        <header><a href="https://a.slashdotmedia.com/www/delivery/ck.php?oaparams=2__bannerid=22074__zoneid=18539__cb=5982105f4b__oadest=https%3A%2F%2Fwww.ipswitch.com%2Fforms%2Ffree-trials%2Fwhatsup-gold%3Futm_campaign%3Dq417_sourceforge%26utm_source%3Dsourceforge%26utm_medium%3Ddisplay%26utm_content%3Dwug_eval" target="_blank" rel="nofollow" itemprop="url" title="Find out more about WhatsUp&reg; Gold - Start A Free 30-Day Trial"><span itemprop="name">WhatsUp&reg; Gold - Start A Free 30-Day Trial</span></a></header>

        <p class="teaser">All-in-one monitoring of your entire infrastructure with the industry's most user friendly pricing. Free trial of our award-winning software</p>
    </div>
    <div class="listing-body clearfix standard">
        

        <div class="tile clearfix">
            <a class="application-image thumbnail " >
                <img  itemprop="image" src="data:image/png;base64,R0lGODlhtgCJAPcAAACSnwCjsACuuqje4wDO2//S0PL5+ozV2gCmswCYpQC1v/90cP/q6wCapzyyu/82NQCotrHh5v/z83fN1ACqueDz9ACbqP9CP4PP1v+Egf+TkQC1wP+lo/9OTADFzQDY5W/I0ACeq2G8xf9gXgCiruf09jK4wgCWo9Pv8ZTX3P/f3v/a2f/////j4mbGz/9GREC8xQCvuxSuuSG0vwCuvEy1v0q+xzCst8zq7QChrgCrtlrDzP9VUwC4w9nx8wDJ1v8vL/+6uACcqf9paACwuwCstwCLmAB9igCfrACNmv/KyQCToQCXpPj8/f/6+gCqtrzm6v87Ov/BvwCQnQCstgmyvQC+x/96eLHb3wDU4QCkrwCVop/c4Mbq7QCgrACYpQC8yACntAC8xQC8yQCptP+ysACwuwCWowCeq7jk6ACsuACfrMPn6wCuutnt7gChrgCntP9EQQCos/+MiAC/zACOmwC2wur29/8/PgCotV/N1QDF0ELEzgBufP94dACmswCJlwCdqh3FzACCkACPnOz4+aLV2wCQnQCMmf+bmdDt7wDCzQCbp/P19wClsu/3+AC4wszp6wC5wgCpuP78/P+sqwCtuQDBygC5xAC/y//OzQCxuv+2tP+9uwCnswCkscXj55na3gCGlP8+PQCwuwDBzQCRnwCZpoDIz8/r7gCgrcvn6gCYpgC8xx6dqACmsgCirACIlgC/x1PZ3pTS1wCPnACkr/r+/v/n5v/GxQCNmgCerODv8BGptACptlLAyfX7+wCotwCKl3XX3QCquACYpQB/jQCWogCKl4fc4ACdqwCDkQCXpACTof/W1QB1ggCcqszt773g5ACOm/f7/AB7iW7Byfv8/f/7+wCrujrK0gCMmQCptZ7S1+Lu7wCuudLp65HN1ACyvf79/f+ysACzvgCKl1i5wv/u7/9JRgB5hgCWogCWowCRngCPnACOm//49wCMmfv9/v/7+gCRndv2+f/29i3T2srm6bjo7ADDzP+1swCksDy6xAB2g/9FQyH/C1hNUCBEYXRhWE1QPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxMzggNzkuMTU5ODI0LCAyMDE2LzA5LzE0LTAxOjA5OjAxICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ0MgMjAxNyAoTWFjaW50b3NoKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo3MEEyMjY3M0JCNDIxMUU3OTEzRUU1OTA3MkM0RTJENyIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo3MEEyMjY3NEJCNDIxMUU3OTEzRUU1OTA3MkM0RTJENyI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjcwQTIyNjcxQkI0MjExRTc5MTNFRTU5MDcyQzRFMkQ3IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjcwQTIyNjcyQkI0MjExRTc5MTNFRTU5MDcyQzRFMkQ3Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+Af/+/fz7+vn49/b19PPy8fDv7u3s6+rp6Ofm5eTj4uHg397d3Nva2djX1tXU09LR0M/OzczLysnIx8bFxMPCwcC/vr28u7q5uLe2tbSzsrGwr66trKuqqainpqWko6KhoJ+enZybmpmYl5aVlJOSkZCPjo2Mi4qJiIeGhYSDgoGAf359fHt6eXh3dnV0c3JxcG9ubWxramloZ2ZlZGNiYWBfXl1cW1pZWFdWVVRTUlFQT05NTEtKSUhHRkVEQ0JBQD8+PTw7Ojk4NzY1NDMyMTAvLi0sKyopKCcm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" alt="WhatsUp&reg; Gold - Start A Free 30-Day Trial Icon">
                
            </a>

            

            <div itemprop="description" class="description ">
            

            If you are like the rest of our user community, your IT team is busy. With pressure to deliver on-time projects, you don’t have a lot of time to spend making your management tools work. You need network monitoring tools that work for you. You want tools that makes it easy to find performance issues before your users do and resolve them before they impact the business. That’s why tens of thousands of customers around the world love WhatsUp Gold.
            </div>

            <div class="download standard">
                
                <img src="https://a.slashdotmedia.com/www/delivery/lg.php?bannerid=22074&amp;campaignid=3336&amp;zoneid=18539&amp;cb=5982105f4b" alt="WhatsUp&reg; Gold - Start A Free 30-Day Trial" width="1" height="1" style="display: none;"/>

                

                
                <a class="sfdl sfdl-lite" target="_blank" rel="nofollow" href="https://a.slashdotmedia.com/www/delivery/ck.php?oaparams=2__bannerid=22074__zoneid=18539__cb=5982105f4b__oadest=https%3A%2F%2Fwww.ipswitch.com%2Fforms%2Ffree-trials%2Fwhatsup-gold%3Futm_campaign%3Dq417_sourceforge%26utm_source%3Dsourceforge%26utm_medium%3Ddisplay%26utm_content%3Dwug_eval">Start a free trial</a>
                
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
                <input type='hidden' name='timestamp' value='1513322909'/>
                <input type='hidden' name='spinner' value='XPNXemdIEj4nMnpWqWNVB2Gqy:H4'/>
                <p class='Re927e0ffd91d29f8f19399b80492a60503bf00a4'><label for='XO72x97d9vrmozldGSbs5CgCKxGY'>You seem to have CSS turned off.
             Please don't fill out this field.</label><input id='XO72x97d9vrmozldGSbs5CgCKxGY' name='XOr2x97d9v:2cXHm7Nq2TslKO4FQ' type=
             'text'/></p>
                <p class='Re927e0ffd91d29f8f19399b80492a60503bf00a4'><label for='XO72x97d9vriozldGSbs5CgCKxGY'>You seem to have CSS turned off.
             Please don't fill out this field.</label><input id='XO72x97d9vriozldGSbs5CgCKxGY' name='XOr2x97d9vu2cXHm7Nq2TslKO4FQ' type=
             'text'/></p>
            <p>Briefly describe the problem (required):
            <input name="XN7G76rF25vm49_rEPIWDNHvcgKw" type="text" required>
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
            <input name="XNbay8LFv0Py:8vH6mjlQthJgkkY" type="url">
            </p>
            <textarea id="gpt-info" name="XOLG_7bNg30sgj_vSir955HKYd1Y"></textarea>
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
        <input type="email" name="XObCz:Lto69kOcoTEIAcr4Faq0vE"  placeholder="email@address.com" value="" required>

        <label class="input-set stacked input-set-country">
            
            <span class="label">Country</span>
            
            <span class="input">
<select id="country-floating" name="XO7ax7Lxw_fCozldGSbs5CgCKxGY" required class="use-placeholder-color">
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
<select id="state-floating" name="XOaaq:KZh69kOcoTEIAcr4Faq0vE"  class="use-placeholder-color">
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
    <span class="checkbox"> <input type="checkbox" name="XMbq4_7d2_Na48eXDO6YliKhe6RA" value="artificial-intelligence"  data-consent-action data-consent-id=596517bdc14bed0737e41a50 ></span>
    <span class="checkbox-label">Artificial Intelligence</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XMbq4_7d2_Na48eXDO6YliKhe6RA" value="cloud"  data-consent-action data-consent-id=596517bdc14bed0737e41a4f ></span>
    <span class="checkbox-label">Cloud</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XMbq4_7d2_Na48eXDO6YliKhe6RA" value="network-security"  data-consent-action data-consent-id=596517bdc14bed0737e41a4e ></span>
    <span class="checkbox-label">Network Security</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XMbq4_7d2_Na48eXDO6YliKhe6RA" value="hardware"  data-consent-action data-consent-id=596517bdc14bed0737e41a4d ></span>
    <span class="checkbox-label">Hardware</span>
    

</label>


        
        
 

<label class="input-set stacked inset">
    <span class="checkbox"> <input type="checkbox" name="XMbq4_7d2_Na48eXDO6YliKhe6RA" value="software-development"  data-consent-action data-consent-id=596517bdc14bed0737e41a4c ></span>
    <span class="checkbox-label">Software Development</span>
    

</label>


        
</div>

<div class="gdpr-consent-requirement gdpr-contact-methods">
    <h4>
    You can contact me via:
    </h4>

    
 

<label class="input-set stacked inset input-set-consent-email minimum-explicit-required">
    <span class="checkbox"> <input type="checkbox" name="XM7ax96Zl7P2T8_DeMLolqw7iOpI" value="email"  data-consent-action data-consent-id=59aed8e456585fa9603b60ec ></span>
    <span class="checkbox-label">Email (required)</span>
    

</label>


    
 

<label class="input-set stacked inset prompt-phone">
    <span class="checkbox"> <input type="checkbox" name="XM7ax96Zl7P2T8_DeMLolqw7iOpI" value="phone"  data-consent-action data-consent-id=596517bdc14bed0737e41a51 ></span>
    <span class="checkbox-label">Phone</span>
    

</label>


    
 

<label class="input-set stacked inset prompt-phone">
    <span class="checkbox"> <input type="checkbox" name="XM7ax96Zl7P2T8_DeMLolqw7iOpI" value="sms"  data-consent-action data-consent-id=596517bdc14bed0737e41a53 ></span>
    <span class="checkbox-label">SMS</span>
    

</label>



    <label class="input-set inset input-phone hide ">
        <span class="label">Phone</span>
        <span class="input">
            <input type="tel" name="XOaW29rxh69kOcoTEIAcr4Faq0vE" value="">
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
    <input type="hidden" name="XN7u77qFo6v24::fZPIWDNHvcgKw" value="sitewide" class="newsletter-optin-assume">
    
 

<label class="input-set input-set-agree-general allow-precheck">
    <span class="checkbox"> <input type="checkbox" name="XO7ax96Fh4f2ozldGSbs5CgCKxGY" value="consent"  data-consent-action data-consent-id=5a26cb73ecf83256408fd377 required></span>
    <span class="checkbox-label">I agree to receive these communications from SourceForge.net.  I understand that I can withdraw my consent at anytime. Please refer to our <a href="http://slashdotmedia.com/terms-of-use">Terms of Use</a> and <a href="https://slashdotmedia.com/privacy-statement/">Privacy Policy</a> or <a href="https://sourceforge.net/support">Contact Us</a> for more details.</span>
    

</label>


            
 

<label class="input-set input-set-agree-general-gdpr allow-precheck hide-initially">
    <span class="checkbox"> <input type="checkbox" name="XO7ax96Fh4f2ozldGSbs5CgCKxGY" value="consent"  data-consent-action data-consent-id=5a26cb73ecf83256408fd378 required></span>
    <span class="checkbox-label">I agree to receive these communications from SourceForge.net via the means indicated above.  I understand that I can withdraw my consent at anytime. Please refer to our <a href="http://slashdotmedia.com/terms-of-use">Terms of Use</a> and <a href="https://slashdotmedia.com/privacy-statement/">Privacy Policy</a> or <a href="https://sourceforge.net/support">Contact Us</a> for more details.</span>
    

</label>


    </p>

    <input type="submit" value="Subscribe" class="bt button blue">

    <input type="hidden" name="source" value="floating">
    <input type="hidden" name="XL7ax7Lxw_fCT_frOPYoytx_Amxs" value="user">
    <input type="hidden" name="XP76z7LZUTWXd8O14Mu19wEA90Gg" value="">


  <input type="hidden" name="_visit_cookie" value="753a9834-4d97-47c0-b3be-f81587655e34"/>
<input type='hidden' name='timestamp' value='1513322909'/>
<input type='hidden' name='spinner' value='XPNXemdIEj4nMnpWqWNVB2Gqy:H4'/>
<p class='Re927e0ffd91d29f8f19399b80492a60503bf00a4'><label for='XO72x97d9vbmozldGSbs5CgCKxGY'>You seem to have CSS turned off.
             Please don't fill out this field.</label><input id='XO72x97d9vbmozldGSbs5CgCKxGY' name='XOr2x97d9v:2cXHm7Nq2TslKO4FQ' type=
             'text'/></p>
<p class='Re927e0ffd91d29f8f19399b80492a60503bf00a4'><label for='XO72x97d9vbiozldGSbs5CgCKxGY'>You seem to have CSS turned off.
             Please don't fill out this field.</label><input id='XO72x97d9vbiozldGSbs5CgCKxGY' name='XOr2x97d9vu2cXHm7Nq2TslKO4FQ' type=
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
