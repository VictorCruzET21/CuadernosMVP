"use strict";(self.blocksyJsonP=self.blocksyJsonP||[]).push([[466],{2466:function(t,n,o){o.r(n),o.d(n,{mount:function(){return a}});o(1601);var e=o(3409),i=o(2248),s=o(9257);let c="idle",l=null;const a=function(t){if(t.hasListener)return;t.hasListener=!0,(0,s.O)()&&(0,i.Xr)(ct_localizations.dynamic_styles.back_to_top).then((function(){}));const n=function(){var t=document.querySelector(".ct-back-to-top");if(t)if(window.scrollY>300){if("loaded"===c&&t.classList.add("ct-show"),"idle"===c){c="loading";const n=function(){t.removeAttribute("hidden"),c="loaded",t.classList.add("ct-show")};(0,s.O)()?n():(0,i.Xr)(ct_localizations.dynamic_styles.back_to_top).then((function(){n()}))}}else t.classList.remove("ct-show")},o=function(){null!==l&&window.scrollY===l||(l=window.scrollY,n()),requestAnimationFrame(o)};requestAnimationFrame(o),n(),t.addEventListener("click",(function(t){t.preventDefault();var n=window.scrollY,o=null;const i=function(t){o||(o=t);var e=t-o;var s,c,l,a=Math.max((s=e,c=n,l=-n,(s/=700/2)<1?l/2*s*s+c:-l/2*(--s*(s-2)-1)+c),0);scrollTo(0,a),e<700&&requestAnimationFrame(i)};e.areWeDealingWithSafari?requestAnimationFrame(i):scrollTo(0,0)}))}}}]);