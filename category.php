<?php
include ("nav.html");
?>


 <!DOCTYPE html>
<html lang="en"> <head> <meta charset="utf-8"> <meta http-equiv="cleartype" content="on"> <meta name="robots" content="index,follow"> <!-- Mobile Specific Metas --> <meta name="HandheldFriendly" content="True"> <meta name="MobileOptimized" content="320"> <meta name="viewport" content="width=device-width,initial-scale=1"> <meta name="theme-color" content="#f1f1f1"> <title>
      Live Stock</title> <link rel="preconnect dns-prefetch" href="https://fonts.shopifycdn.com" /> <link rel="preconnect dns-prefetch" href="https://cdn.shopify.com" /> <link rel="preconnect dns-prefetch" href="https://v.shopify.com" /> <link rel="preconnect dns-prefetch" href="https://cdn.shopifycloud.com" /> <link rel="preconnect dns-prefetch" href="https://productreviews.shopifycdn.com" /> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.6/jquery.fancybox.css"> <!-- Stylesheets for Turbo 4.1.1 --> <link href="//cdn.shopify.com/s/files/1/0692/1613/t/32/assets/styles.scss.css?8" rel="stylesheet" type="text/css" media="all" /> <!--- Main DND CSS ---> <link href="//cdn.shopify.com/s/files/1/0692/1613/t/32/assets/bsp-ninja.scss.css?8" rel="stylesheet" type="text/css" media="all" /> <!--- Custom CSS ---> <link href="//cdn.shopify.com/s/files/1/0692/1613/t/32/assets/custom.css?8" rel="stylesheet" type="text/css" media="all" /> <script>
      window.lazySizesConfig = window.lazySizesConfig || {};

      lazySizesConfig.expand = 300;
      lazySizesConfig.loadHidden = false;

      /*! lazysizes - v4.1.4 */
      !function(a,b){var c=b(a,a.document);a.lazySizes=c,"object"==typeof module&&module.exports&&(module.exports=c)}(window,function(a,b){"use strict";if(b.getElementsByClassName){var c,d,e=b.documentElement,f=a.Date,g=a.HTMLPictureElement,h="addEventListener",i="getAttribute",j=a[h],k=a.setTimeout,l=a.requestAnimationFrame||k,m=a.requestIdleCallback,n=/^picture$/i,o=["load","error","lazyincluded","_lazyloaded"],p={},q=Array.prototype.forEach,r=function(a,b){return p[b]||(p[b]=new RegExp("(\\s|^)"+b+"(\\s|$)")),p[b].test(a[i]("class")||"")&&p[b]},s=function(a,b){r(a,b)||a.setAttribute("class",(a[i]("class")||"").trim()+" "+b)},t=function(a,b){var c;(c=r(a,b))&&a.setAttribute("class",(a[i]("class")||"").replace(c," "))},u=function(a,b,c){var d=c?h:"removeEventListener";c&&u(a,b),o.forEach(function(c){a[d](c,b)})},v=function(a,d,e,f,g){var h=b.createEvent("Event");return e||(e={}),e.instance=c,h.initEvent(d,!f,!g),h.detail=e,a.dispatchEvent(h),h},w=function(b,c){var e;!g&&(e=a.picturefill||d.pf)?(c&&c.src&&!b[i]("srcset")&&b.setAttribute("srcset",c.src),e({reevaluate:!0,elements:[b]})):c&&c.src&&(b.src=c.src)},x=function(a,b){return(getComputedStyle(a,null)||{})[b]},y=function(a,b,c){for(c=c||a.offsetWidth;c<d.minSize&&b&&!a._lazysizesWidth;)c=b.offsetWidth,b=b.parentNode;return c},z=function(){var a,c,d=[],e=[],f=d,g=function(){var b=f;for(f=d.length?e:d,a=!0,c=!1;b.length;)b.shift()();a=!1},h=function(d,e){a&&!e?d.apply(this,arguments):(f.push(d),c||(c=!0,(b.hidden?k:l)(g)))};return h._lsFlush=g,h}(),A=function(a,b){return b?function(){z(a)}:function(){var b=this,c=arguments;z(function(){a.apply(b,c)})}},B=function(a){var b,c=0,e=d.throttleDelay,g=d.ricTimeout,h=function(){b=!1,c=f.now(),a()},i=m&&g>49?function(){m(h,{timeout:g}),g!==d.ricTimeout&&(g=d.ricTimeout)}:A(function(){k(h)},!0);return function(a){var d;(a=a===!0)&&(g=33),b||(b=!0,d=e-(f.now()-c),0>d&&(d=0),a||9>d?i():k(i,d))}},C=function(a){var b,c,d=99,e=function(){b=null,a()},g=function(){var a=f.now()-c;d>a?k(g,d-a):(m||e)(e)};return function(){c=f.now(),b||(b=k(g,d))}};!function(){var b,c={lazyClass:"lazyload",loadedClass:"lazyloaded",loadingClass:"lazyloading",preloadClass:"lazypreload",errorClass:"lazyerror",autosizesClass:"lazyautosizes",srcAttr:"data-src",srcsetAttr:"data-srcset",sizesAttr:"data-sizes",minSize:40,customMedia:{},init:!0,expFactor:1.5,hFac:.8,loadMode:2,loadHidden:!0,ricTimeout:0,throttleDelay:125};d=a.lazySizesConfig||a.lazysizesConfig||{};for(b in c)b in d||(d[b]=c[b]);a.lazySizesConfig=d,k(function(){d.init&&F()})}();var D=function(){var g,l,m,o,p,y,D,F,G,H,I,J,K,L,M=/^img$/i,N=/^iframe$/i,O="onscroll"in a&&!/(gle|ing)bot/.test(navigator.userAgent),P=0,Q=0,R=0,S=-1,T=function(a){R--,a&&a.target&&u(a.target,T),(!a||0>R||!a.target)&&(R=0)},U=function(a,c){var d,f=a,g="hidden"==x(b.body,"visibility")||"hidden"!=x(a.parentNode,"visibility")&&"hidden"!=x(a,"visibility");for(F-=c,I+=c,G-=c,H+=c;g&&(f=f.offsetParent)&&f!=b.body&&f!=e;)g=(x(f,"opacity")||1)>0,g&&"visible"!=x(f,"overflow")&&(d=f.getBoundingClientRect(),g=H>d.left&&G<d.right&&I>d.top-1&&F<d.bottom+1);return g},V=function(){var a,f,h,j,k,m,n,p,q,r=c.elements;if((o=d.loadMode)&&8>R&&(a=r.length)){f=0,S++,null==K&&("expand"in d||(d.expand=e.clientHeight>500&&e.clientWidth>500?500:370),J=d.expand,K=J*d.expFactor),K>Q&&1>R&&S>2&&o>2&&!b.hidden?(Q=K,S=0):Q=o>1&&S>1&&6>R?J:P;for(;a>f;f++)if(r[f]&&!r[f]._lazyRace)if(O)if((p=r[f][i]("data-expand"))&&(m=1*p)||(m=Q),q!==m&&(y=innerWidth+m*L,D=innerHeight+m,n=-1*m,q=m),h=r[f].getBoundingClientRect(),(I=h.bottom)>=n&&(F=h.top)<=D&&(H=h.right)>=n*L&&(G=h.left)<=y&&(I||H||G||F)&&(d.loadHidden||"hidden"!=x(r[f],"visibility"))&&(l&&3>R&&!p&&(3>o||4>S)||U(r[f],m))){if(ba(r[f]),k=!0,R>9)break}else!k&&l&&!j&&4>R&&4>S&&o>2&&(g[0]||d.preloadAfterLoad)&&(g[0]||!p&&(I||H||G||F||"auto"!=r[f][i](d.sizesAttr)))&&(j=g[0]||r[f]);else ba(r[f]);j&&!k&&ba(j)}},W=B(V),X=function(a){s(a.target,d.loadedClass),t(a.target,d.loadingClass),u(a.target,Z),v(a.target,"lazyloaded")},Y=A(X),Z=function(a){Y({target:a.target})},$=function(a,b){try{a.contentWindow.location.replace(b)}catch(c){a.src=b}},_=function(a){var b,c=a[i](d.srcsetAttr);(b=d.customMedia[a[i]("data-media")||a[i]("media")])&&a.setAttribute("media",b),c&&a.setAttribute("srcset",c)},aa=A(function(a,b,c,e,f){var g,h,j,l,o,p;(o=v(a,"lazybeforeunveil",b)).defaultPrevented||(e&&(c?s(a,d.autosizesClass):a.setAttribute("sizes",e)),h=a[i](d.srcsetAttr),g=a[i](d.srcAttr),f&&(j=a.parentNode,l=j&&n.test(j.nodeName||"")),p=b.firesLoad||"src"in a&&(h||g||l),o={target:a},p&&(u(a,T,!0),clearTimeout(m),m=k(T,2500),s(a,d.loadingClass),u(a,Z,!0)),l&&q.call(j.getElementsByTagName("source"),_),h?a.setAttribute("srcset",h):g&&!l&&(N.test(a.nodeName)?$(a,g):a.src=g),f&&(h||l)&&w(a,{src:g})),a._lazyRace&&delete a._lazyRace,t(a,d.lazyClass),z(function(){(!p||a.complete&&a.naturalWidth>1)&&(p?T(o):R--,X(o))},!0)}),ba=function(a){var b,c=M.test(a.nodeName),e=c&&(a[i](d.sizesAttr)||a[i]("sizes")),f="auto"==e;(!f&&l||!c||!a[i]("src")&&!a.srcset||a.complete||r(a,d.errorClass)||!r(a,d.lazyClass))&&(b=v(a,"lazyunveilread").detail,f&&E.updateElem(a,!0,a.offsetWidth),a._lazyRace=!0,R++,aa(a,b,f,e,c))},ca=function(){if(!l){if(f.now()-p<999)return void k(ca,999);var a=C(function(){d.loadMode=3,W()});l=!0,d.loadMode=3,W(),j("scroll",function(){3==d.loadMode&&(d.loadMode=2),a()},!0)}};return{_:function(){p=f.now(),c.elements=b.getElementsByClassName(d.lazyClass),g=b.getElementsByClassName(d.lazyClass+" "+d.preloadClass),L=d.hFac,j("scroll",W,!0),j("resize",W,!0),a.MutationObserver?new MutationObserver(W).observe(e,{childList:!0,subtree:!0,attributes:!0}):(e[h]("DOMNodeInserted",W,!0),e[h]("DOMAttrModified",W,!0),setInterval(W,999)),j("hashchange",W,!0),["focus","mouseover","click","load","transitionend","animationend","webkitAnimationEnd"].forEach(function(a){b[h](a,W,!0)}),/d$|^c/.test(b.readyState)?ca():(j("load",ca),b[h]("DOMContentLoaded",W),k(ca,2e4)),c.elements.length?(V(),z._lsFlush()):W()},checkElems:W,unveil:ba}}(),E=function(){var a,c=A(function(a,b,c,d){var e,f,g;if(a._lazysizesWidth=d,d+="px",a.setAttribute("sizes",d),n.test(b.nodeName||""))for(e=b.getElementsByTagName("source"),f=0,g=e.length;g>f;f++)e[f].setAttribute("sizes",d);c.detail.dataAttr||w(a,c.detail)}),e=function(a,b,d){var e,f=a.parentNode;f&&(d=y(a,f,d),e=v(a,"lazybeforesizes",{width:d,dataAttr:!!b}),e.defaultPrevented||(d=e.detail.width,d&&d!==a._lazysizesWidth&&c(a,f,e,d)))},f=function(){var b,c=a.length;if(c)for(b=0;c>b;b++)e(a[b])},g=C(f);return{_:function(){a=b.getElementsByClassName(d.autosizesClass),j("resize",g)},checkElems:g,updateElem:e}}(),F=function(){F.i||(F.i=!0,E._(),D._())};return c={cfg:d,autoSizer:E,loader:D,init:F,uP:w,aC:s,rC:t,hC:r,fire:v,gW:y,rAF:z}}});

      /*! lazysizes - v4.1.4 */
      !function(a,b){var c=function(){b(a.lazySizes),a.removeEventListener("lazyunveilread",c,!0)};b=b.bind(null,a,a.document),"object"==typeof module&&module.exports?b(require("lazysizes")):a.lazySizes?c():a.addEventListener("lazyunveilread",c,!0)}(window,function(a,b,c){"use strict";function d(){this.ratioElems=b.getElementsByClassName("lazyaspectratio"),this._setupEvents(),this.processImages()}if(a.addEventListener){var e,f,g,h=Array.prototype.forEach,i=/^picture$/i,j="data-aspectratio",k="img["+j+"]",l=function(b){return a.matchMedia?(l=function(a){return!a||(matchMedia(a)||{}).matches})(b):a.Modernizr&&Modernizr.mq?!b||Modernizr.mq(b):!b},m=c.aC,n=c.rC,o=c.cfg;d.prototype={_setupEvents:function(){var a=this,c=function(b){b.naturalWidth<36?a.addAspectRatio(b,!0):a.removeAspectRatio(b,!0)},d=function(){a.processImages()};b.addEventListener("load",function(a){a.target.getAttribute&&a.target.getAttribute(j)&&c(a.target)},!0),addEventListener("resize",function(){var b,d=function(){h.call(a.ratioElems,c)};return function(){clearTimeout(b),b=setTimeout(d,99)}}()),b.addEventListener("DOMContentLoaded",d),addEventListener("load",d)},processImages:function(a){var c,d;a||(a=b),c="length"in a&&!a.nodeName?a:a.querySelectorAll(k);for(d=0;d<c.length;d++)c[d].naturalWidth>36?this.removeAspectRatio(c[d]):this.addAspectRatio(c[d])},getSelectedRatio:function(a){var b,c,d,e,f,g=a.parentNode;if(g&&i.test(g.nodeName||""))for(d=g.getElementsByTagName("source"),b=0,c=d.length;c>b;b++)if(e=d[b].getAttribute("data-media")||d[b].getAttribute("media"),o.customMedia[e]&&(e=o.customMedia[e]),l(e)){f=d[b].getAttribute(j);break}return f||a.getAttribute(j)||""},parseRatio:function(){var a=/^\s*([+\d\.]+)(\s*[\/x]\s*([+\d\.]+))?\s*$/,b={};return function(c){var d;return!b[c]&&(d=c.match(a))&&(d[3]?b[c]=d[1]/d[3]:b[c]=1*d[1]),b[c]}}(),addAspectRatio:function(b,c){var d,e=b.offsetWidth,f=b.offsetHeight;return c||m(b,"lazyaspectratio"),36>e&&0>=f?void((e||f&&a.console)&&console.log("Define width or height of image, so we can calculate the other dimension")):(d=this.getSelectedRatio(b),d=this.parseRatio(d),void(d&&(e?b.style.height=e/d+"px":b.style.width=f*d+"px")))},removeAspectRatio:function(a){n(a,"lazyaspectratio"),a.style.height="",a.style.width="",a.removeAttribute(j)}},f=function(){g=a.jQuery||a.Zepto||a.shoestring||a.$,g&&g.fn&&!g.fn.imageRatio&&g.fn.filter&&g.fn.add&&g.fn.find?g.fn.imageRatio=function(){return e.processImages(this.find(k).add(this.filter(k))),this}:g=!1},f(),setTimeout(f),e=new d,a.imageRatio=e,"object"==typeof module&&module.exports?module.exports=e:"function"==typeof define&&define.amd&&define(e)}});

      /*! lazysizes - v4.1.5 */
      !function(a,b){var c=function(){b(a.lazySizes),a.removeEventListener("lazyunveilread",c,!0)};b=b.bind(null,a,a.document),"object"==typeof module&&module.exports?b(require("lazysizes")):a.lazySizes?c():a.addEventListener("lazyunveilread",c,!0)}(window,function(a,b,c){"use strict";if(a.addEventListener){var d=/\s+/g,e=/\s*\|\s+|\s+\|\s*/g,f=/^(.+?)(?:\s+\[\s*(.+?)\s*\])(?:\s+\[\s*(.+?)\s*\])?$/,g=/^\s*\(*\s*type\s*:\s*(.+?)\s*\)*\s*$/,h=/\(|\)|'/,i={contain:1,cover:1},j=function(a){var b=c.gW(a,a.parentNode);return(!a._lazysizesWidth||b>a._lazysizesWidth)&&(a._lazysizesWidth=b),a._lazysizesWidth},k=function(a){var b;return b=(getComputedStyle(a)||{getPropertyValue:function(){}}).getPropertyValue("background-size"),!i[b]&&i[a.style.backgroundSize]&&(b=a.style.backgroundSize),b},l=function(a,b){if(b){var c=b.match(g);c&&c[1]?a.setAttribute("type",c[1]):a.setAttribute("media",lazySizesConfig.customMedia[b]||b)}},m=function(a,c,g){var h=b.createElement("picture"),i=c.getAttribute(lazySizesConfig.sizesAttr),j=c.getAttribute("data-ratio"),k=c.getAttribute("data-optimumx");c._lazybgset&&c._lazybgset.parentNode==c&&c.removeChild(c._lazybgset),Object.defineProperty(g,"_lazybgset",{value:c,writable:!0}),Object.defineProperty(c,"_lazybgset",{value:h,writable:!0}),a=a.replace(d," ").split(e),h.style.display="none",g.className=lazySizesConfig.lazyClass,1!=a.length||i||(i="auto"),a.forEach(function(a){var c,d=b.createElement("source");i&&"auto"!=i&&d.setAttribute("sizes",i),(c=a.match(f))?(d.setAttribute(lazySizesConfig.srcsetAttr,c[1]),l(d,c[2]),l(d,c[3])):d.setAttribute(lazySizesConfig.srcsetAttr,a),h.appendChild(d)}),i&&(g.setAttribute(lazySizesConfig.sizesAttr,i),c.removeAttribute(lazySizesConfig.sizesAttr),c.removeAttribute("sizes")),k&&g.setAttribute("data-optimumx",k),j&&g.setAttribute("data-ratio",j),h.appendChild(g),c.appendChild(h)},n=function(a){if(a.target._lazybgset){var b=a.target,d=b._lazybgset,e=b.currentSrc||b.src;if(e){var f=c.fire(d,"bgsetproxy",{src:e,useSrc:h.test(e)?JSON.stringify(e):e});f.defaultPrevented||(d.style.backgroundImage="url("+f.detail.useSrc+")")}b._lazybgsetLoading&&(c.fire(d,"_lazyloaded",{},!1,!0),delete b._lazybgsetLoading)}};addEventListener("lazybeforeunveil",function(a){var d,e,f;!a.defaultPrevented&&(d=a.target.getAttribute("data-bgset"))&&(f=a.target,e=b.createElement("img"),e.alt="",e._lazybgsetLoading=!0,a.detail.firesLoad=!0,m(d,f,e),setTimeout(function(){c.loader.unveil(e),c.rAF(function(){c.fire(e,"_lazyloaded",{},!0,!0),e.complete&&n({target:e})})}))}),b.addEventListener("load",n,!0),a.addEventListener("lazybeforesizes",function(a){if(a.detail.instance==c&&a.target._lazybgset&&a.detail.dataAttr){var b=a.target._lazybgset,d=k(b);i[d]&&(a.target._lazysizesParentFit=d,c.rAF(function(){a.target.setAttribute("data-parent-fit",d),a.target._lazysizesParentFit&&delete a.target._lazysizesParentFit}))}},!0),b.documentElement.addEventListener("lazybeforesizes",function(a){!a.defaultPrevented&&a.target._lazybgset&&a.detail.instance==c&&(a.detail.width=j(a.target._lazybgset))})}});</script> <meta name="description" content="LoveUrns® Handcrafted with Love™ Finest Cremations Urns and related products. Largest collection of fine Cremation Urns for Pets." /> <link rel="shortcut icon" type="image/x-icon" href="//cdn.shopify.com/s/files/1/0692/1613/files/32x32_180x180.png?v=1533709776"> <link rel="apple-touch-icon" href="//cdn.shopify.com/s/files/1/0692/1613/files/32x32_180x180.png?v=1533709776"/> <link rel="apple-touch-icon" sizes="57x57" href="//cdn.shopify.com/s/files/1/0692/1613/files/32x32_57x57.png?v=1533709776"/> <link rel="apple-touch-icon" sizes="60x60" href="//cdn.shopify.com/s/files/1/0692/1613/files/32x32_60x60.png?v=1533709776"/> <link rel="apple-touch-icon" sizes="72x72" href="//cdn.shopify.com/s/files/1/0692/1613/files/32x32_72x72.png?v=1533709776"/> <link rel="apple-touch-icon" sizes="76x76" href="//cdn.shopify.com/s/files/1/0692/1613/files/32x32_76x76.png?v=1533709776"/> <link rel="apple-touch-icon" sizes="114x114" href="//cdn.shopify.com/s/files/1/0692/1613/files/32x32_114x114.png?v=1533709776"/> <link rel="apple-touch-icon" sizes="180x180" href="//cdn.shopify.com/s/files/1/0692/1613/files/32x32_180x180.png?v=1533709776"/> <link rel="apple-touch-icon" sizes="228x228" href="//cdn.shopify.com/s/files/1/0692/1613/files/32x32_228x228.png?v=1533709776"/> <link rel="canonical" href="https://loveurns.com/" /> <meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/6921613/digital_wallets/dialog">
<meta name="shopify-checkout-api-token" content="56a00ef2e53471d60d8b4870d71065ab">
<meta id="in-context-paypal-metadata" data-shop-id="6921613" data-venmo-supported="true" data-environment="production" data-locale="en_US" data-paypal-v4="true" data-currency="USD">
<style media="all">.additional-checkout-button{border:0 !important;border-radius:5px !important;display:inline-block;margin:0 0 10px;padding:0 24px !important;max-width:100%;min-width:150px !important;line-height:44px !important;text-align:center !important}.additional-checkout-button+.additional-checkout-button{margin-left:10px}.additional-checkout-button:last-child{margin-bottom:0}.additional-checkout-button span{font-size:14px !important}.additional-checkout-button img{display:inline-block !important;height:1.3em !important;margin:0 !important;vertical-align:middle !important;width:auto !important}@media (max-width: 500px){.additional-checkout-button{display:block;margin-left:0 !important;padding:0 10px !important;width:100%}}.additional-checkout-button--apple-pay{background-color:#000 !important;color:#fff !important;display:none;font-family:-apple-system, Helvetica Neue, sans-serif !important;min-width:150px !important;white-space:nowrap !important}.additional-checkout-button--apple-pay:hover,.additional-checkout-button--apple-pay:active,.additional-checkout-button--apple-pay:visited{color:#fff !important;text-decoration:none !important}.additional-checkout-button--apple-pay .additional-checkout-button__logo{background:-webkit-named-image(apple-pay-logo-white) center center no-repeat !important;background-size:auto 100% !important;display:inline-block !important;vertical-align:middle !important;width:3em !important;height:1.3em !important}@media (max-width: 500px){.additional-checkout-button--apple-pay{display:none}}.additional-checkout-button--google-pay{line-height:0 !important;padding:0 !important;border-radius:unset !important;width:80px !important}@media (max-width: 500px){.additional-checkout-button--google-pay{width:100% !important}}.gpay-iframe{height:44px !important;width:100%  !important;cursor:pointer;vertical-align:middle !important}.additional-checkout-button--paypal-express{background-color:#ffc439 !important}.additional-checkout-button--paypal,.additional-checkout-button--venmo{vertical-align:top;line-height:0 !important;padding:0 !important}.additional-checkout-button--amazon{background-color:#fad676 !important;position:relative !important}.additional-checkout-button--amazon .additional-checkout-button__logo{-webkit-transform:translateY(4px) !important;transform:translateY(4px) !important}.additional-checkout-button--amazon .alt-payment-list-amazon-button-image{max-height:none !important;opacity:0 !important;position:absolute !important;top:0 !important;left:0 !important;width:100% !important;height:100% !important}.additional-checkout-button-visually-hidden{border:0 !important;clip:rect(0, 0, 0, 0) !important;clip:rect(0 0 0 0) !important;width:1px !important;height:1px !important;margin:-2px !important;overflow:hidden !important;padding:0 !important;position:absolute !important}
</style>
<script id="apple-pay-shop-capabilities" type="application/json">{"shopId":6921613,"countryCode":"US","currencyCode":"USD","merchantCapabilities":["supports3DS"],"merchantId":"gid:\/\/shopify\/Shop\/6921613","merchantName":"LoveUrns®","requiredBillingContactFields":["postalAddress","email","phone"],"requiredShippingContactFields":["postalAddress","email","phone"],"shippingType":"shipping","supportedNetworks":["visa","masterCard","amex","discover"],"total":{"type":"pending","label":"LoveUrns®","amount":"1.00"}}</script>
<script id="shopify-features" type="application/json">{"accessToken":"56a00ef2e53471d60d8b4870d71065ab","betas":[],"domain":"loveurns.com","shopId":6921613,"smart_payment_buttons_url":"https:\/\/cdn.shopifycloud.com\/payment-sheet\/assets\/latest\/spb.en.js"}</script>
<script>var Shopify = Shopify || {};
Shopify.shop = "loveurnsusa.myshopify.com";
Shopify.currency = {"active":"USD","rate":"1.0"};
Shopify.theme = {"name":"Turbo 4.11","id":46310490217,"theme_store_id":null,"role":"main"};
Shopify.theme.handle = "null";
Shopify.theme.style = {"id":null,"handle":null};</script>
<script>window.ShopifyPay = window.ShopifyPay || {};
window.ShopifyPay.apiHost = "pay.shopify.com";</script>
<script>(function() {
  function asyncLoad() {
    var urls = ["\/\/productreviews.shopifycdn.com\/assets\/v4\/spr.js?shop=loveurnsusa.myshopify.com","https:\/\/chimpstatic.com\/mcjs-connected\/js\/users\/456d759e8564a8068da795a98\/1228b58b4b3bc461d654091ac.js?shop=loveurnsusa.myshopify.com","\/\/www.powr.io\/powr.js?powr-token=loveurnsusa.myshopify.com\u0026external-type=shopify\u0026shop=loveurnsusa.myshopify.com"];
    for (var i = 0; i <urls.length; i++) {
      var s = document.createElement('script');
      s.type = 'text/javascript';
      s.async = true;
      s.src = urls[i];
      var x = document.getElementsByTagName('script')[0];
      x.parentNode.insertBefore(s, x);
    }
  };
  if(window.attachEvent) {
    window.attachEvent('onload', asyncLoad);
  } else {
    window.addEventListener('load', asyncLoad, false);
  }
})();</script>
<script id="__st">var __st={"a":6921613,"offset":-18000,"reqid":"b50ee204-5ea9-47bc-a509-311c3f9e58a0","pageurl":"loveurns.com\/","u":"870b3671c14b","p":"home"};</script>
<script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
<script>window.Shopify = window.Shopify || {};
window.Shopify.Checkout = window.Shopify.Checkout || {};
window.Shopify.Checkout.apiHost = "loveurnsusa.myshopify.com";</script>
<script>window['GoogleAnalyticsObject'] = 'ga';
window['ga'] = window['ga'] || function() {
  (window['ga'].q = window['ga'].q || []).push(arguments);
};
window['ga'].l = 1 * new Date();</script>
<script>var _gaUTrackerOptions = {'allowLinker': true};ga('create', 'UA-58229049-1', 'auto', _gaUTrackerOptions);ga('send', 'pageview');
      (function(){
        ga('require', 'linker');
        function addListener(element, type, callback) {
          if (element.addEventListener) {
            element.addEventListener(type, callback);
          }
          else if (element.attachEvent) {
            element.attachEvent('on' + type, callback);
          }
        }
        function decorate(event) {
          event = event || window.event;
          var target = event.target || event.srcElement;
          if (target && (target.action || target.href)) {
            ga(function (tracker) {
              var linkerParam = tracker.get('linkerParam');
              document.cookie = '_shopify_ga=' + linkerParam + '; ' + 'path=/';
            });
          }
        }
        addListener(window, 'load', function(){
          for (var i=0; i<document.forms.length; i++) {
            if(document.forms[i].action && document.forms[i].action.indexOf('/cart') >= 0) {
              addListener(document.forms[i], 'submit', decorate);
            }
          }
          for (var i=0; i<document.links.length; i++) {
            if(document.links[i].href && document.links[i].href.indexOf('/checkout') >= 0) {
              addListener(document.links[i], 'click', decorate);
            }
          }
        })
      }());</script>
<script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
window.ShopifyAnalytics.meta.currency = 'USD';
var meta = {"page":{"pageType":"home"}};
for (var attr in meta) {
  window.ShopifyAnalytics.meta[attr] = meta[attr];
}</script>
<script>window.ShopifyAnalytics.merchantGoogleAnalytics = function() {
  
};
</script>
<script class="analytics">(function () {
  var customDocumentWrite = function(content) {
    var jquery = null;

    if (window.jQuery) {
      jquery = window.jQuery;
    } else if (window.Checkout && window.Checkout.$) {
      jquery = window.Checkout.$;
    }

    if (jquery) {
      jquery('body').append(content);
    }
  };

  var isDuplicatedThankYouPageView = function() {
    return document.cookie.indexOf('loggedConversion=' + window.location.pathname) !== -1;
  }

  var setCookieIfThankYouPage = function() {
    if (window.location.pathname.indexOf('/checkouts') !== -1 &&
        window.location.pathname.indexOf('/thank_you') !== -1) {

      var twoMonthsFromNow = new Date(Date.now())
      twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

      document.cookie = 'loggedConversion=' + window.location.pathname + '; expires=' + twoMonthsFromNow;
    }
  }

  var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
  if (trekkie.integrations) {
    return;
  }
  trekkie.methods = [
    'identify',
    'page',
    'ready',
    'track',
    'trackForm',
    'trackLink'
  ];
  trekkie.factory = function(method) {
    return function() {
      var args = Array.prototype.slice.call(arguments);
      args.unshift(method);
      trekkie.push(args);
      return trekkie;
    };
  };
  for (var i = 0; i <trekkie.methods.length; i++) {
    var key = trekkie.methods[i];
    trekkie[key] = trekkie.factory(key);
  }
  trekkie.load = function(config) {
    trekkie.config = config;
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.onerror = function(e) {
      (new Image()).src = '//v.shopify.com/internal_errors/track?error=trekkie_load';
    };
    script.async = true;
    script.src = 'https://cdn.shopify.com/s/javascripts/tricorder/trekkie.storefront.min.js?v=2017.09.05.1';
    var first = document.getElementsByTagName('script')[0];
    first.parentNode.insertBefore(script, first);
  };
  trekkie.load(
    {"Trekkie":{"appName":"storefront","development":false,"defaultAttributes":{"shopId":6921613,"isMerchantRequest":null,"themeId":46310490217,"themeCityHash":8447208016441770448,"contentLanguage":"en"}},"Performance":{"navigationTimingApiMeasurementsEnabled":true,"navigationTimingApiMeasurementsSampleRate":1.0},"Session Attribution":{}}
  );

  var loaded = false;
  trekkie.ready(function() {
    if (loaded) return;
    loaded = true;

    window.ShopifyAnalytics.lib = window.trekkie;
    

    var originalDocumentWrite = document.write;
    document.write = customDocumentWrite;
    try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch(error) {};
    document.write = originalDocumentWrite;

    if (!isDuplicatedThankYouPageView()) {
      setCookieIfThankYouPage();
      
        window.ShopifyAnalytics.lib.page(
          null,
          {"pageType":"home"}
        );
      
      
    }
  });

  
      var eventsListenerScript = document.createElement('script');
      eventsListenerScript.async = true;
      eventsListenerScript.src = "//cdn.shopify.com/s/assets/shop_events_listener-acf771159f9849ef6e5265782c99efe8b99406214c96a4373224ecafe285d7bb.js";
      document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);
    
})();</script>
<script crossorigin="anonymous" defer="defer" src="//cdn.shopify.com/s/assets/shopify_pay/storefront-8ddbd55cc19e1ebbff92d676e1481c8e6b42e0c2714d3fdf6b810b1f193347b8.js?v=20190107"></script>
<script integrity="sha256-ZGMHgi9G7WU+Z7WiP2suSn84yzoN83sGf9nMWJhVHAw=" defer="defer" src="//cdn.shopify.com/s/assets/storefront/express_buttons-646307822f46ed653e67b5a23f6b2e4a7f38cb3a0df37b067fd9cc5898551c0c.js" crossorigin="anonymous"></script>
<script integrity="sha256-6HOSr+Kf4wcoL05qrRLLS8wq/v1rf+vwtw7f0xX5aEw=" defer="defer" src="//cdn.shopify.com/s/assets/storefront/features-e87392afe29fe307282f4e6aad12cb4bcc2afefd6b7febf0b70edfd315f9684c.js" crossorigin="anonymous"></script>
<script async="async" src="https://www.google-analytics.com/analytics.js"></script>
<script defer="defer" src="//cdn.shopify.com/s/assets/themes_support/ga_urchin_forms-99e991855b3d8ddc69e625c68ab0579dd9927b611c2ec4943d396c72e3af0849.js"></script>



    

<meta name="author" content="LoveUrns®">
<meta property="og:url" content="https://loveurns.com/">
<meta property="og:site_name" content="LoveUrns®"> <meta property="og:type" content="website"> <meta property="og:title" content="LoveUrns®"> <meta property="og:description" content="LoveUrns® Handcrafted with Love™ Finest Cremations Urns and related products. Largest collection of fine Cremation Urns for Pets."> <meta name="twitter:site" content="@loveurns">

<meta name="twitter:card" content="summary">

</head> <noscript> <style>
      .product_section .product_form {
        opacity: 1;
      }

      .multi_select,
      form .select {
        display: block !important;
      }

      .image-element__wrap {
        display: none;
      }
      
      <style>
      
body {
    font-family: 'Source Sans Pro', sans-serif;
    font-size: 100%;
    background: url(http://khaitonline.com/Bakra/css/bg.jpg)no-repeat center;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
     background-attachment: fixed; 
    background-position: center;
}
      
      </style></noscript>
      
      <body style="background: url(http://khaitonline.com/Bakra/css/bg.jpg)no-repeat center;">




<style>
  .main_nav div.logo a {
    padding-top: 0px;
    padding-bottom: 0px;
  }

  div.logo img {
    max-width: 205px;
  }

  .nav {
    
      width: 84%;
      float: left;
    
  }

  
    .nav ul.menu {
      padding-top: 20px;
      padding-bottom: 20px;
    }

    .sticky_nav ul.menu, .sticky_nav .mini_cart {
      padding-top: 10px;
      padding-bottom: 10px;
    }
  

  
    #header .top_bar .icon-search {
      right: 15px;
    }
  

  
    body {
      overscroll-behavior-y: none;
    }
  

</style>


</div> <div class="mega-menu-container"> <div id="shopify-section-mega-menu-1" class="shopify-section mega-menu-section"> <div class="dropdown_container mega-menu mega-menu-1" data-dropdown="products"> <div class="dropdown menu"> <div class="dropdown_content "> <div class="dropdown_column" > <div class="mega-menu__richtext"></div> <div class="mega-menu__image-caption-link"> <a href="/collections/loveurns-people" > <p>LOVEURNS® PEOPLE</p></a></div> <div class="mega-menu__richtext"></div></div> <div class="dropdown_column" > <div class="mega-menu__richtext"></div> <div class="mega-menu__image-caption-link"> <a href="/collections/loveurns-treasure" > <p>LOVEURNS® TREASURE™ ASHES JEWELRY</p></a></div> <div class="mega-menu__richtext"></div></div> <div class="dropdown_column" > <div class="mega-menu__richtext"></div> <div class="mega-menu__image-caption-link"> <a href="/collections/loveurns-pets" > <p>LOVEURNS® FOR PETS</p></a></div> <div class="mega-menu__richtext"></div></div></div></div></div> <ul class="mobile-mega-menu hidden" data-mobile-dropdown="products"> <div> <li class="mobile-mega-menu_block mega-menu__richtext"></li> <li class="mobile-mega-menu_block"  > <a href="/collections/loveurns-people" > <p>LOVEURNS® PEOPLE</p></a></li> <li class="mobile-mega-menu_block"  ></li></div> <div> <li class="mobile-mega-menu_block mega-menu__richtext"></li> <li class="mobile-mega-menu_block"  > <a href="/collections/loveurns-treasure" > <p>LOVEURNS® TREASURE™ ASHES JEWELRY</p></a></li> <li class="mobile-mega-menu_block"  ></li></div> <div> <li class="mobile-mega-menu_block mega-menu__richtext"></li> <li class="mobile-mega-menu_block"  > <a href="/collections/loveurns-pets" > <p>LOVEURNS® FOR PETS</p></a></li> <li class="mobile-mega-menu_block"  ></li></div></ul>


</div> <div id="shopify-section-mega-menu-2" class="shopify-section mega-menu-section">



</div> <div id="shopify-section-mega-menu-3" class="shopify-section mega-menu-section"> <div class="dropdown_container mega-menu mega-menu-3" data-dropdown=""> <div class="dropdown menu"> <div class="dropdown_content "> <div class="dropdown_column" > <div class="mega-menu__richtext"> <p>Add description, images, menus and links to your mega menu</p></div> <div class="mega-menu__richtext"></div></div> <div class="dropdown_column" > <div class="mega-menu__richtext"> <p>A column with no settings can be used as a spacer</p></div> <div class="mega-menu__richtext"></div></div> <div class="dropdown_column" > <div class="mega-menu__richtext"></div> <div class="mega-menu__richtext"></div></div> <div class="dropdown_column" > <div class="mega-menu__richtext"> <p>Link to your collections, sales and even external links</p></div> <div class="mega-menu__richtext"></div></div> <div class="dropdown_column" > <div class="mega-menu__richtext"> <p>Add up to five columns</p></div> <div class="mega-menu__richtext"></div></div></div></div></div> <ul class="mobile-mega-menu hidden" data-mobile-dropdown=""> <div> <li class="mobile-mega-menu_block mega-menu__richtext"> <p>Add description, images, menus and links to your mega menu</p></li> <li class="mobile-mega-menu_block"  ></li></div> <div> <li class="mobile-mega-menu_block mega-menu__richtext"> <p>A column with no settings can be used as a spacer</p></li> <li class="mobile-mega-menu_block"  ></li></div> <div> <li class="mobile-mega-menu_block mega-menu__richtext"></li> <li class="mobile-mega-menu_block"  ></li></div> <div> <li class="mobile-mega-menu_block mega-menu__richtext"> <p>Link to your collections, sales and even external links</p></li> <li class="mobile-mega-menu_block"  ></li></div> <div> <li class="mobile-mega-menu_block mega-menu__richtext"> <p>Add up to five columns</p></li> <li class="mobile-mega-menu_block"  ></li></div></ul>


</div></div> <a name="pagecontent" id="pagecontent"></a>
<div class="index-sections"> <!-- BEGIN content_for_index --><div id="shopify-section-1489283389016" class="shopify-section image-with-text-overlay-section under-menu" style="margin-top: 0px !important;">





<section>





<div class="container"> <div class="sixteen columns center"> <h2 class="title">
          CATEGORIES</h2> <div class="feature_divider"></div></div> <div class="sixteen columns"> <div class="section list-collection-wrapper"> <div class="list-collections clearfix equal-columns--outside-trim equal-columns--clear"> <div class="
            
              one-third column alpha
            
            blank
            thumbnail even
            
              medium-down--one-half
              small-down--one-half
            " > <div class="product-wrap"> <div class="image__container">
                    
















<div class="image-element__wrap" style=" max-width: 1200px;height:370px;"> <img  alt="Awareness™ Collection"
        
        data-src=" https://5.imimg.com/data5/KL/WG/MY-27909549/boer-goat-500x500.jpg"
        data-sizes="auto"
        data-aspectratio="1200/1200"
        data-srcset=" https://5.imimg.com/data5/KL/WG/MY-27909549/boer-goat-500x500.jpg,
   https://5.imimg.com/data5/KL/WG/MY-27909549/boer-goat-500x500.jpg 4500w,
 https://5.imimg.com/data5/KL/WG/MY-27909549/boer-goat-500x500.jpg 4000w,
 https://5.imimg.com/data5/KL/WG/MY-27909549/boer-goat-500x500.jpg 3500w,
 https://5.imimg.com/data5/KL/WG/MY-27909549/boer-goat-500x500.jpg 3000w,
 https://5.imimg.com/data5/KL/WG/MY-27909549/boer-goat-500x500.jpg 2500w,
    http://alhammd.com/cli/wp-content/uploads/2019/03/266-Crestwood-Cremation-Urn-on-Table-768x512.jpg 2000w,
   http://alhammd.com/cli/wp-content/uploads/2019/03/266-Crestwood-Cremation-Urn-on-Table-768x512.jpg 1800w,
    http://alhammd.com/cli/wp-content/uploads/2019/03/266-Crestwood-Cremation-Urn-on-Table-768x512.jpg 1600w,
   https://5.imimg.com/data5/KL/WG/MY-27909549/boer-goat-500x500.jpg 1400w,
 https://5.imimg.com/data5/KL/WG/MY-27909549/boer-goat-500x500.jpg 1200w,
    //cdn.shopify.com/s/files/1/0692/1613/collections/A900_Group_1000x.jpg?v=1535213836 1000w,
    https://5.imimg.com/data5/KL/WG/MY-27909549/boer-goat-500x500.jpg 800w,
    //cdn.shopify.com/s/files/1/0692/1613/collections/A900_Group_600x.jpg?v=1535213836 600w,
 https://5.imimg.com/data5/KL/WG/MY-27909549/boer-goat-500x500.jpg 400w,
 https://5.imimg.com/data5/KL/WG/MY-27909549/boer-goat-500x500.jpg 200w"
        height="1200"
        width="1200"
        style=";"
        class="lazyload transition--appear "
  />
</div>



<noscript> <img src=" https://5.imimg.com/data5/KL/WG/MY-27909549/boer-goat-500x500.jpg" alt="Awareness™ Collection" class="">
</noscript></div> <a href="/collections/awareness-series" class="hidden-product-link">
                  
                    Goat</a> <div class="thumbnail-overlay"> <a href="/collections/awareness-series" class="hidden-product-link">
                      
                        Goat</a> <div class="info"> <div class="collection-details"> <span class="title">
                          
                        Goat</span></div> <a href="/collections/awareness-series"><span class="view_all">View All</span></a></div></div> <a class="collection-info__caption hidden" href="/collections/awareness-series" itemprop="url"> <span class="title">
                    
                     Goat</span></a></div></div> <div class="
            
              one-third column 
            
            blank
            thumbnail even
            
              medium-down--one-half
              small-down--one-half
            " > <div class="product-wrap"> <div class="image__container">
                    










<div class="image-element__wrap" style=" max-width: 1200px;height:370px;"> <img  alt="Imperial™ Collection"
        
        data-src="https://upload.wikimedia.org/wikipedia/commons/b/b4/Cow_horned_portrait.jpg"
        data-sizes="auto"
        data-aspectratio="1200/370"
        data-srcset="https://upload.wikimedia.org/wikipedia/commons/b/b4/Cow_horned_portrait.jpg 5000w,
    https://upload.wikimedia.org/wikipedia/commons/b/b4/Cow_horned_portrait.jpg 4500w,
    https://upload.wikimedia.org/wikipedia/commons/b/b4/Cow_horned_portrait.jpg 4000w,
    https://upload.wikimedia.org/wikipedia/commons/b/b4/Cow_horned_portrait.jpg 3500w,
    https://upload.wikimedia.org/wikipedia/commons/b/b4/Cow_horned_portrait.jpg 3000w,
    https://upload.wikimedia.org/wikipedia/commons/b/b4/Cow_horned_portrait.jpg 2500w,
    https://upload.wikimedia.org/wikipedia/commons/b/b4/Cow_horned_portrait.jpg 2000w,
    https://upload.wikimedia.org/wikipedia/commons/b/b4/Cow_horned_portrait.jpg 1800w,
    https://upload.wikimedia.org/wikipedia/commons/b/b4/Cow_horned_portrait.jpg 1600w,
    https://upload.wikimedia.org/wikipedia/commons/b/b4/Cow_horned_portrait.jpg 1400w,
    https://upload.wikimedia.org/wikipedia/commons/b/b4/Cow_horned_portrait.jpg 1200w,
    https://upload.wikimedia.org/wikipedia/commons/b/b4/Cow_horned_portrait.jpg 1000w,
https://upload.wikimedia.org/wikipedia/commons/b/b4/Cow_horned_portrait.jpg 800w,
https://upload.wikimedia.org/wikipedia/commons/b/b4/Cow_horned_portrait.jpg 600w,
https://upload.wikimedia.org/wikipedia/commons/b/b4/Cow_horned_portrait.jpg 400w,
    https://upload.wikimedia.org/wikipedia/commons/b/b4/Cow_horned_portrait.jpg 200w"
        height="370"
        width="1200"
        style="height:370px;"
        class="lazyload transition--appear "
  />
</div>



<noscript> <img src="https://upload.wikimedia.org/wikipedia/commons/b/b4/Cow_horned_portrait.jpg" alt="Imperial™ Collection" class="">
</noscript></div> <a href="/collections/imperial-series" class="hidden-product-link">
                  
                    Cow</a> <div class="thumbnail-overlay"> <a href="/collections/imperial-series" class="hidden-product-link">
                      
                        Cow</a> <div class="info"> <div class="collection-details"> <span class="title">
                          
                            Cow</span></div> <a href="/collections/imperial-series"><span class="view_all">View All</span></a></div></div> <a class="collection-info__caption hidden" href="/collections/imperial-series" itemprop="url"> <span class="title">
                    
                      Cow</span></a></div></div> <div class="
            
              one-third column omega
            
            blank
            thumbnail odd
            
              medium-down--one-half
              small-down--one-half
            " > <div class="product-wrap"> <div class="image__container">
                    










<div class="image-element__wrap" style=" max-width: 1200px; height:370px;"> <img  alt="Soaring Doves™"
        
        data-src="//cdn.shopify.com/s/files/1/0692/1613/collections/A232_Group_69a701b1-1a8e-4cdf-b350-9695ef2b9de7_1600x.jpg?v=1535199552"
        data-sizes="auto"
        data-aspectratio="1200/1200"
        data-srcset="//cdn.shopify.com/s/files/1/0692/1613/collections/A232_Group_69a701b1-1a8e-4cdf-b350-9695ef2b9de7_5000x.jpg?v=1535199552 5000w,
    //cdn.shopify.com/s/files/1/0692/1613/collections/A232_Group_69a701b1-1a8e-4cdf-b350-9695ef2b9de7_4500x.jpg?v=1535199552 4500w,
    //cdn.shopify.com/s/files/1/0692/1613/collections/A232_Group_69a701b1-1a8e-4cdf-b350-9695ef2b9de7_4000x.jpg?v=1535199552 4000w,
    //cdn.shopify.com/s/files/1/0692/1613/collections/A232_Group_69a701b1-1a8e-4cdf-b350-9695ef2b9de7_3500x.jpg?v=1535199552 3500w,
    //cdn.shopify.com/s/files/1/0692/1613/collections/A232_Group_69a701b1-1a8e-4cdf-b350-9695ef2b9de7_3000x.jpg?v=1535199552 3000w,
    //cdn.shopify.com/s/files/1/0692/1613/collections/A232_Group_69a701b1-1a8e-4cdf-b350-9695ef2b9de7_2500x.jpg?v=1535199552 2500w,
    //cdn.shopify.com/s/files/1/0692/1613/collections/A232_Group_69a701b1-1a8e-4cdf-b350-9695ef2b9de7_2000x.jpg?v=1535199552 2000w,
    //cdn.shopify.com/s/files/1/0692/1613/collections/A232_Group_69a701b1-1a8e-4cdf-b350-9695ef2b9de7_1800x.jpg?v=1535199552 1800w,
    //cdn.shopify.com/s/files/1/0692/1613/collections/A232_Group_69a701b1-1a8e-4cdf-b350-9695ef2b9de7_1600x.jpg?v=1535199552 1600w,
    //cdn.shopify.com/s/files/1/0692/1613/collections/A232_Group_69a701b1-1a8e-4cdf-b350-9695ef2b9de7_1400x.jpg?v=1535199552 1400w,
    //cdn.shopify.com/s/files/1/0692/1613/collections/A232_Group_69a701b1-1a8e-4cdf-b350-9695ef2b9de7_1200x.jpg?v=1535199552 1200w,
    //cdn.shopify.com/s/files/1/0692/1613/collections/A232_Group_69a701b1-1a8e-4cdf-b350-9695ef2b9de7_1000x.jpg?v=1535199552 1000w,
    //cdn.shopify.com/s/files/1/0692/1613/collections/A232_Group_69a701b1-1a8e-4cdf-b350-9695ef2b9de7_800x.jpg?v=1535199552 800w,
    //cdn.shopify.com/s/files/1/0692/1613/collections/A232_Group_69a701b1-1a8e-4cdf-b350-9695ef2b9de7_600x.jpg?v=1535199552 600w,
    http://alhammd.com/cli/wp-content/uploads/2019/03/KGrHqEOKpwFGH6E3UBRyi7bRNYQ60_3.JPG-Copy-Copy-2-300x300.jpeg 400w,
    //cdn.shopify.com/s/files/1/0692/1613/collections/A232_Group_69a701b1-1a8e-4cdf-b350-9695ef2b9de7_200x.jpg?v=1535199552 200w"
        height="254px"
        width="1200"
        style=" height:254px;"
        class="lazyload transition--appear "
  />
</div>



<noscript> <img src="//cdn.shopify.com/s/files/1/0692/1613/collections/A232_Group_69a701b1-1a8e-4cdf-b350-9695ef2b9de7_2000x.jpg?v=1535199552" alt="Soaring Doves™" class="">
</noscript></div> <a href="/collections/soaring-doves" class="hidden-product-link">
                  
                    Soaring Doves™</a> <div class="thumbnail-overlay"> <a href="/collections/soaring-doves" class="hidden-product-link">
                      
                        Soaring Doves™</a> <div class="info"> <div class="collection-details"> <span class="title">
                          
                            Soaring Doves™</span></div> <a href="/collections/soaring-doves"><span class="view_all">View All</span></a></div></div> <a class="collection-info__caption hidden" href="/collections/soaring-doves" itemprop="url"> <span class="title">
                    
                      Soaring Doves™</span></a></div></div> <br class="clear product_clear" /></div></div></div>
  
</div>












</div>
<meta name="p:domain_verify" content="a28504ed049a6eb30549a8c59ed212de"/></div> <div id="shopify-section-footer" class="shopify-section footer-section">









</div> 












<script src="//cdn.shopify.com/s/files/1/0692/1613/t/32/assets/jquery.min.js?8"></script> <script src="//cdn.shopify.com/s/files/1/0692/1613/t/32/assets/vendors.js?8"></script> <script src="//cdn.shopify.com/s/files/1/0692/1613/t/32/assets/sections.js?8"></script> <script src="//cdn.shopify.com/s/files/1/0692/1613/t/32/assets/utilities.js?8"></script> <script src="//cdn.shopify.com/s/files/1/0692/1613/t/32/assets/app.js?8"></script> <script></script> <script src="//cdn.codeblackbelt.com/js/modules/facebook-image-gallery/main.min.js?shop=loveurnsusa.myshopify.com"></script> <script src="//cdn.shopify.com/s/files/1/0692/1613/t/32/assets/bsp-ninja.js?8" type="text/javascript"></script>









</body>
</html>
