function Swipe(r,e){function y(){k=c.children;D=k.length;2>k.length&&(e.continuous=!1);p.transitions&&e.continuous&&3>k.length&&(c.appendChild(k[0].cloneNode(!0)),c.appendChild(c.children[1].cloneNode(!0)),k=c.children);m=Array(k.length);d=r.getBoundingClientRect().width||r.offsetWidth;c.style.width=k.length*d+"px";for(var b=k.length;b--;){var q=k[b];q.style.width=d+"px";q.setAttribute("data-index",b);p.transitions&&(q.style.left=b*-d+"px",g(b,a>b?-d:a<b?d:0,0))}e.continuous&&p.transitions&&(g(h(a-
1),-d,0),g(h(a+1),d,0));p.transitions||(c.style.left=a*-d+"px");r.style.visibility="visible"}function z(){e.continuous?w(a+1):a<k.length-1&&w(a+1)}function h(b){return(k.length+b%k.length)%k.length}function w(b,q){if(a!=b){if(p.transitions){var c=Math.abs(a-b)/(a-b);if(e.continuous){var f=c,c=-m[h(b)]/d;c!==f&&(b=-c*k.length+b)}for(f=Math.abs(a-b)-1;f--;)g(h((b>a?b:a)-f-1),d*c,0);b=h(b);g(a,d*c,q||n);g(b,0,q||n);e.continuous&&g(h(b-c),-(d*c),0)}else b=h(b),H(a*-d,b*-d,q||n);a=b;c=e.callback&&e.callback(a,
k[a]);setTimeout(c||A,0)}}function g(b,a,c){t(b,a,c);m[b]=a}function t(b,a,c){if(b=(b=k[b])&&b.style)b.webkitTransitionDuration=b.MozTransitionDuration=b.msTransitionDuration=b.OTransitionDuration=b.transitionDuration=c+"ms",b.webkitTransform="translate("+a+"px,0)translateZ(0)",b.msTransform=b.MozTransform=b.OTransform="translateX("+a+"px)"}function H(b,d,f){if(f)var g=+new Date,h=setInterval(function(){var l=+new Date-g;l>f?(c.style.left=d+"px",u&&(B=setTimeout(z,u)),e.transitionEnd&&e.transitionEnd.call(event,
a,k[a]),clearInterval(h)):c.style.left=Math.floor(l/f*100)/100*(d-b)+b+"px"},4);else c.style.left=d+"px"}function x(){u=0;clearTimeout(B)}var A=function(){},p={addEventListener:!!window.addEventListener,touch:"ontouchstart"in window||window.DocumentTouch&&document instanceof DocumentTouch,transitions:function(b){var a=["transitionProperty","WebkitTransition","MozTransition","OTransition","msTransition"],c;for(c in a)if(void 0!==b.style[a[c]])return!0;return!1}(document.createElement("swipe"))};if(r){var c=
r.children[0],k,m,d,D;e=e||{};var a=parseInt(e.startSlide,10)||0,n=e.speed||300;e.continuous=void 0!==e.continuous?e.continuous:!0;var u=e.auto||0,B,E,F,G,f,C,v,l={handleEvent:function(b){switch(b.type){case "touchstart":this.start(b);break;case "touchmove":this.move(b);break;case "touchend":var a=this.end(b);setTimeout(a||A,0);break;case "webkitTransitionEnd":case "msTransitionEnd":case "oTransitionEnd":case "otransitionend":case "transitionend":a=this.transitionEnd(b);setTimeout(a||A,0);break;case "resize":a=
y.call(),setTimeout(a||A,0)}e.stopPropagation&&b.stopPropagation()},start:function(a){a=a.touches[0];E=a.pageX;F=a.pageY;G=+new Date;C=f=v=void 0;c.addEventListener("touchmove",this,!1);c.addEventListener("touchend",this,!1)},move:function(b){if(!(1<b.touches.length||b.scale&&1!==b.scale)){e.disableScroll&&b.preventDefault();var c=b.touches[0];f=c.pageX-E;C=c.pageY-F;"undefined"==typeof v&&(v=!!(v||Math.abs(f)<Math.abs(C)));v||(b.preventDefault(),x(),e.continuous?(t(h(a-1),f+m[h(a-1)],0),t(a,f+m[a],
0),t(h(a+1),f+m[h(a+1)],0)):(f/=!a&&0<f||a==k.length-1&&0>f?Math.abs(f)/d+1:1,t(a-1,f+m[a-1],0),t(a,f+m[a],0),t(a+1,f+m[a+1],0)))}},end:function(b){b=250>Number(+new Date-G)&&20<Math.abs(f)||Math.abs(f)>d/2;var q=!a&&0<f||a==k.length-1&&0>f;e.continuous&&(q=!1);var p=0>f;v||(b&&!q?(p?(e.continuous?(g(h(a-1),-d,0),g(h(a+2),d,0)):g(a-1,-d,0),g(a,m[a]-d,n),g(h(a+1),m[h(a+1)]-d,n),a=h(a+1)):(e.continuous?(g(h(a+1),d,0),g(h(a-2),-d,0)):g(a+1,d,0),g(a,m[a]+d,n),g(h(a-1),m[h(a-1)]+d,n),a=h(a-1)),e.callback&&
e.callback(a,k[a])):e.continuous?(g(h(a-1),-d,n),g(a,0,n),g(h(a+1),d,n)):(g(a-1,-d,n),g(a,0,n),g(a+1,d,n)));c.removeEventListener("touchmove",l,!1);c.removeEventListener("touchend",l,!1)},transitionEnd:function(b){parseInt(b.target.getAttribute("data-index"),10)==a&&(u&&(B=setTimeout(z,u)),e.transitionEnd&&e.transitionEnd.call(b,a,k[a]))}};y();u&&(B=setTimeout(z,u));p.addEventListener?(p.touch&&c.addEventListener("touchstart",l,!1),p.transitions&&(c.addEventListener("webkitTransitionEnd",l,!1),c.addEventListener("msTransitionEnd",
l,!1),c.addEventListener("oTransitionEnd",l,!1),c.addEventListener("otransitionend",l,!1),c.addEventListener("transitionend",l,!1)),window.addEventListener("resize",l,!1)):window.onresize=function(){y()};return{setup:function(){y()},slide:function(a,c){x();w(a,c)},prev:function(){x();e.continuous?w(a-1):a&&w(a-1)},next:function(){x();z()},getPos:function(){return a},getNumSlides:function(){return D},kill:function(){x();c.style.width="auto";c.style.left=0;for(var a=k.length;a--;){var d=k[a];d.style.width=
"100%";d.style.left=0;p.transitions&&t(a,0,0)}p.addEventListener?(c.removeEventListener("touchstart",l,!1),c.removeEventListener("webkitTransitionEnd",l,!1),c.removeEventListener("msTransitionEnd",l,!1),c.removeEventListener("oTransitionEnd",l,!1),c.removeEventListener("otransitionend",l,!1),c.removeEventListener("transitionend",l,!1),window.removeEventListener("resize",l,!1)):window.onresize=null}}}}
(window.jQuery||window.Zepto)&&function(r){r.fn.Swipe=function(e){return this.each(function(){r(this).data("Swipe",new Swipe(r(this)[0],e))})}}(window.jQuery||window.Zepto);$(function(){$(".panel-body #timetitle").click(function(){$(this).next().slideToggle("slow");$(this).find("#showip").toggleClass("i-icon-arrow-up")})});
$(function(){$("#show68 li").click(function(){$("#show68 li").find("span").removeClass("active");$(this).find("span").addClass("active");$("#best_time").val($(this).find("p").html());$("#peisongtime").html($(this).find("p").html());document.getElementById("show68").style.display="none";$("#showip").removeClass("i-icon-arrow-up");$("#showip").addClass("i-icon-arrow-down")})});$(function(){$(".panel-body #peisongtitle").click(function(){$(this).next().slideToggle("slow");$(this).find("#peisongip").toggleClass("i-icon-arrow-up")})});
$(function(){$("#peisongip li").click(function(){$("#peisongip li").find("span").removeClass("active");$(this).find("span").addClass("active")})});$(function(){$(".panel-body #zhifutitle").click(function(){$(this).next().slideToggle("slow");$(this).find("#zhifuip").toggleClass("i-icon-arrow-up")})});$(function(){$("#zhifuip li").click(function(){$("#zhifuip li").find("span").removeClass("active");$(this).find("span").addClass("active");$("#zhifuip").removeClass("i-icon-arrow-up");$("#zhifuip").addClass("i-icon-arrow-down")})});
$(function(){$(".panel-body #jifentitle").click(function(){$(this).next().slideToggle("slow");$(this).find("#jifenip").toggleClass("i-icon-arrow-up")})});$(function(){$("#jifenpip li").click(function(){$("#jifenip li").find("span").removeClass("active");$(this).find("span").addClass("active");$("#jifenpip").removeClass("i-icon-arrow-up");$("#jifenpip").addClass("i-icon-arrow-down")})});$(function(){$(".panel-body #hongbaotitle").click(function(){$(this).next().slideToggle("slow");$(this).find("#hongbaoip").toggleClass("i-icon-arrow-up")})});
$(function(){$("#hongbaopip li").click(function(){$("#hongbaoip li").find("span").removeClass("active");$(this).find("span").addClass("active")})});$(function(){$(".panel-body #hekatitle").click(function(){$(this).next().slideToggle("slow");$(this).find("#hekaip").toggleClass("i-icon-arrow-up")})});$(function(){$("#hekapip li").click(function(){$("#hekaip li").find("span").removeClass("active");$(this).find("span").addClass("active");$("#hekaip").removeClass("i-icon-arrow-up");$("#hekaip").addClass("i-icon-arrow-down")})});
$(function(){$(".panel-body #fuyantitle").click(function(){$(this).next().slideToggle("slow");$(this).find("#fuyanip").toggleClass("i-icon-arrow-up")})});$(function(){$("#fuyanpip li").click(function(){$("#fuyanip").removeClass("i-icon-arrow-up");$("#fuyanip").addClass("i-icon-arrow-down");$("#fuyanip li").find("span").removeClass("active");$(this).find("span").addClass("active")})});$(function(){$(".panel-body #yuetitle").click(function(){$(this).next().slideToggle("slow");$(this).find("#yueip").toggleClass("i-icon-arrow-up")})});
$(function(){$("#yueipip li").click(function(){$("#yueipip li").find("span").removeClass("active");$(this).find("span").addClass("active")})});$(function(){$(".panel-body #baozhuangtitle").click(function(){$(this).next().slideToggle("slow");$(this).find("#baozhuangip").toggleClass("i-icon-arrow-up")})});$(function(){$(".panel-body #Invoice_title").click(function(){$(this).next().slideToggle("slow");$(this).find("#Invoiceip").toggleClass("i-icon-arrow-up")})});
$(function(){$("#baozhuangpip li").click(function(){$("#baozhuangip li").find("span").removeClass("active");$(this).find("span").addClass("active")})});