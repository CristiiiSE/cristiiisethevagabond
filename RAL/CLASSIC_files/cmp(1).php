
 var l = ""; if("cmp_getlang" in window){ l = window.cmp_getlang().toLowerCase(); }
 var s = document.createElement("script");
 s.src = "https://a.delivery.consentmanager.net/delivery/cmp.php?__cmpcc=1"+(document.cookie.length>0?"&__cmpfcc=1":"")+"&id=9804&o=1697814844&h=http%3A%2F%2F127.0.0.1%3A5500%2FRAL%2520Colours.html&"+window.cmp_params+"&l="+l+"&odw=0&dlt=1&l=ro";
 s.type = "text/javascript";
 s.setAttribute("data-cmp-ab","1");
 s.async = true;
 if(document.cookie.length==0){ document.cookie = "__cmpcc=1; expires=" + (new Date((new Date()).getTime() + 395 * 86400 * 1000)).toUTCString() + "; path=/"+(location.protocol == "https:" ? ";SameSite=None;Secure" : ";SameSite=Lax"); }
 if(document.body){ document.body.appendChild(s);}
 else if(document.currentScript){ document.currentScript.parentElement.appendChild(s); }
 else{ document.write(s.outerHTML); }