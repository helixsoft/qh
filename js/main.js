/*!

 * Flow Slider v1.6.0

 * jQuery content sliding plugin

 * http://FlowSlider.com/

 *

 * Copyright Flow Slider Inc., www.FlowSlider.com

 * 

 * LICENCE:

 * http://www.FlowSlider.com/license-html

 * If you use this plugin, you must keep this copyright notice at all times.

 */

eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('D H=q(n,t,i){D j="T",1U="3c",2s=\'<3d 1V="\',1W="q",p="4g",l=3e,h=1X,b="3f",1Y="3g",g="4h",d="1t",1Z="1c",o=x,f,s,21,a,22;J("4i"==1u n)A 1I(n).H(t);J("4j"==1u n&&n.H)A n.H;J("4k"==1u n)A 1j H.2t(n);D u=o,e=i(n),k,y,v,c,w,n={1v:1Z,23:d,M:g,2u:"1k",24:"2v",12:"4l",3h:q(n,t){J(18 0===t)A n.3i();n.3i(t)},Z:q(n,t){J(18 0===t)A n.1c();n.1c(t)},26:q(n,t){J(18 0===t)A n.1t();n.1t(t)}},3j={1v:d,23:1Z,M:"2v",2u:"3k",24:g,12:"4m",3h:q(n,t){J(18 0===t)A n.2w();n.2w(t)},Z:q(n,t){J(18 0===t)A n.1t();n.1t(t)},26:q(n,t){J(18 0===t)A n.1c();n.1c(t)}},27,28,29,2a,r=i.O({},2x.H.F,t);o.19=q(){A x.3l=u.B.Z(y)},o.3m=q(){A(r.1l-x.I())/(r.1l-(u.B.Z(e)-x.19()-r.2b))},o.T=q(n){A 0>n&&(n=0),1<n&&(n=1),x.G(x.2c(n)),x},o.2c=q(n){A r.1l-n*(r.1l-(u.B.Z(e)-x.19()-r.2b))},o.I=q(){A w.I()},o.G=q(n){A 29(n),x},o.W=q(n){A 2a(n)};D m=q(n){(r.3n||!(u.19()<=u.B.Z(e)))&&w.G(n)},2y=q(n){J(n>r.1l)A r.1l;D t=u.B.Z(e)-u.19()-r.2b;A n<t?t:n},3o=q(n){D t=w.I();1a=u.19()/2,n>1a&&(n%=1a);D i=t+1a-n,t=N.U(t-n)<N.U(i)?n:n-1a,n=2y(n);n!=t&&(w.1J(n>t?1a:-1a),t+=n>t?1a:-1a),w.G(t)},3p=q(n){A n};J(o.2d=q(n){A u.G(u.I()+n)},o.1d=q(n){A u.G(u.W(u.I()+n))},o.2z=q(){J(v=y.1w(),v.3q(r.11+"-1K"),e.E({4n:"4o",T:"4p"}),v.E({4q:g}),(r.1L=1Y)&&!X(e.E(d))){13(D s=v.1b,o=0,t=0,n,f=0;f<s;f++)$1K=i(v[f]),n=X($1K.E("2e-2v")),2f(n)&&(n=0),t=n,n=X($1K.2w()),2f(n)&&(n=0),t+=n,n=X($1K.E("2e-3k")),2f(n)&&(n=0),t+=n,t>o&&(o=t);e.E(d,o)}A 1Y==r.1L&&u.B.Z(k,3r),r.2A?(v.4r(!0).4s(y),29=3o,2a=3p):(29=m,2a=2y),x},o.3s=q(){A y},o.3t=q(n){A i.O(r,n),x.s=r,21(),x},o.V=q(){13(D n=0;n<c.1b;n++)c[n].V();A x},o.P=q(){13(D n=0;n<c.1b;n++)c[n].P();A x},o.1m=q(){e.1n(r.2B,u)},o.2g=q(){e.1n(r.2C,u)},o.1o=q(){e.1n(r.2D,u)},f={1M:q(n,t,i){D r=n.O({},f.1M.F,i),u=!1,e=q(n){n=n[t.B.12]-r.C.G()[t.B.M],t.T((n-r.1x)/(t.B.Z(r.C)-r.1x-r.1N)),u=!1};x.P=q(){r.C.R(b,e),u=!1},x.V=q(){u||(u=!0,r.C.14(b,e))},r.C=r.C?n(r.C):t.$S}},f.1M.F={C:h,1x:50,1N:50},f.2h=q(n,t,i){D c="3u",r=n.O({},f.2h.F,i),s=0,h=!1,o,u=!1,a=q(){t.1d(s),e()},v=q(n){h=!1,n=n[t.B.12]-r.C.G()[t.B.M]-(N.3v(t.B.Z(r.C)/2)+r.3w),s=r.2E?r.2E(n):n<-r.1x||n>r.1N?-r.1p*(n+(0<n?-r.1N:r.1x)):0,u||(a(),o=1O(a,r.1e),u=!0)},l=q(){s=0,u&&(1y(o),u=!1),e(),4t=!1},e=q(){h||(r.C.1f(b,v),h=!0)};x.P=q(){r.C.R(b,v),r.C.R(c,l),u&&(1y(o),u=!1)},x.V=q(){e();r.C.1f(c,l)},r.C=r.C?n(r.C):t.$S},f.2h.F={C:h,1e:50,1x:3x,1N:3x,3w:0,1p:.2,2E:h},f.2F=q(n,t,i){D r=n.O({},f.2F.F,i),h,e=!1,u=0,c=0,o=!1,v=q(i){r.1z&&i.1g(),e=!0,h=i[t.B.12],u=0,n(K).14(r.1A,s);n(K).1f(r.1B,a);o=!1,t.$S.1n("4u",t)},s=q(n){D n,f,i,o;n.1g(),e&&(c=u,u=(n[t.B.12]-h)*r.1p,n=t.I()+u-c,f=t.W(n),n!=f&&(i=N.U(f-n),o=r.1h?r.1h(i):i*r.2i,u+=f<n?o-i:i-o),t.2d(u-c),r.C[0].1C=!0)},a=q(i){r.1z&&i.1g(),t.$S.R(r.1A,s),e=!1,t.1d((i[t.B.12]-h)*r.1p-u),n(K).R(r.1A,s),l(),t.$S.1n("4v",t),2j(q(){r.C[0].1C=!1},r.2k)},l=q(){o||(o=!0,r.C.1f(r.1P,v))};x.P=q(){e&&(n(K).R(r.1A,s),n(K).R(r.1B,a),t.G(t.W(t.I())),e=!1,r.C[0].1C=!1),n(K).R(r.1P,v),o=!1},x.V=q(){l()},r.C=r.C?n(r.C):t.$S},f.2F.F={C:h,1P:"4w",1A:b,1B:"4x",1p:1,2i:.3y,1h:h,2k:3z,1z:!1},f.2l=q(n,t,i){D l="4y",a="4z 4A",c="4B",r=n.O({},f.2l.F,i),y,u=0,h=0,e=!1,o=!1,p=q(i){r.1z&&i.1g(),e=!0,y=i.3A.3B[0][t.B.12],u=0,n(K).14(c,s);n(K).1f(a,w);o=!1,t.$S.1n("4C",t)},s=q(n){D n,f,i,o;n.1g(),e&&(h=u,u=(n.3A.3B[0][t.B.12]-y)*r.1p,n=t.I()+u-h,f=t.W(n),n!=f&&(i=N.U(f-n),o=r.1h?r.1h(i):i*r.2i,u+=f<n?o-i:i-o),t.2d(u-h),r.C[0].1C=!0)},w=q(i){r.1z&&i.1g(),e=!1,n(K).R(r.1A,s),t.G(t.W(t.I())),v(),t.$S.1n("4D",t),2j(q(){r.C[0].1C=!1},r.2k)},v=q(){o||(o=!0,r.C.1f(l,p))};x.P=q(){e&&(n(K).R(c,s),n(K).R(a,w),t.G(t.W(t.I())),e=!1,r.C[0].1C=!1),n(K).R(l,p),o=!1},x.V=q(){v()},r.C=r.C?n(r.C):t.$S},f.2l.F={C:h,1e:50,1p:1,2i:.3y,1h:h,2k:3z,1z:!1},f.2G=q(n,t,i){D o="4E",r=n.O({},f.2G.F,i),e=!1,u=0,h=q(){D n=+1j 2H;n>=u+r.1e?(t.G(t.W(t.I())),e=!1):2j(h,r.1e-(n-u))},s=q(n,i){n.1g(),r.3C&&(i=0<i?1:-1);D f=i*r.1i;G=t.I()+f,2m=t.W(G),G!=2m&&(f=r.1h(i,N.U(2m-G))),r.1e?(t.2d(f),u=+1j 2H,!e&&G!=2m&&(2j(h,r.1e),e=!0)):t.1d(f)};x.P=q(){t.$S.R(o,s)},x.V=q(){t.$S.14(o,s)}},f.2G.F={1i:40,3C:!1,1e:4F,1h:q(n,t){A l<t?0:4G*n/t}},f.2I=q(n,t,i){D r=n.O({},f.2I.F,i),e=n(r.2J),u=q(n){n.3D==r.3E&&t.1d(-r.Y),n.3D==r.3F&&t.1d(r.Y)};x.P=q(){e.R("3G",u)},x.V=q(){e.3G(u)}},f.2I.F={2J:K,Y:l,3E:39,3F:37},f.2K=q(n,t,i){D u=n.O({},f.2K.F,i),r=2x.1D.3H,e=q(){D n=t.I();t.s.2A&&(n%=t.19()/2),2x.1D.3H=N.3v(-n/N.U(u.Y))+1};x.P=q(){},x.V=q(){r&&(r=X(r.4H(1,r.1b-1)),2f(r)&&(r=1),t.G(t.W(-u.Y*(r-1)))),t.$S.14("3I",e)}},f.2K.F={Y:l},f.2L=q(n,t,i){D r=n.O({},f.2L.F,i),e,o=q(){t.1d(-r.Y)},u=q(){1y(e)};x.P=q(){u()},x.V=q(){n(r.C).14(r.1P,q(){J(e=1O(o,r.1E),r.1B)n(r.C).1f(r.1B,u)})}},f.2L.F={1P:"4I",1B:h,C:K,Y:l,1E:4J},f.2M=q(n,t,i){D r=n.O({},f.2M.F,i),u=q(n){J(n.1g(),r.3J){D n=t.I(),i=t.W(n-r.Y);J(n==i){t.T(0<-r.Y?1:0);A}}t.1d(-r.Y)};x.P=q(){r.C.R(r.2N,u)},x.V=q(){r.C.14(r.2N,u)},r.C=r.C?n(r.C):t.$S},f.2M.F={C:h,2N:"4K",Y:l,3J:!0},s={4L:q(n,t){D i;x.I=q(){A i},x.G=q(n){t.1m(),i=n,t.$L.E(t.B.M,i),t.1o()},x.1J=q(){},(i=X(t.$L.E(t.B.M)))||(i=0)},1Q:q(n,t,i){D e="16-4M-q",n=n.O({},s.1Q.F,i),u=X(t.$L.E(t.B.M)),o=t.B.M,c=t.$L[0].1q,f=!0,i="",h=q(){f=!0,t.1o()},r;3K=q(){t.$L.1f("4N",h)},x.I=q(){A u},x.G=q(n){u=n,c[o]=u+p,f&&(f=!1,3K(),t.1m())},(u=X(t.$L.E(o)))||(u=0),i=H.2O.2P(),!1!==i&&(r={},r[i+"16-4O"]=t.B.M,n.2Q&&(r[i+e]=n.2Q),r[i+"16-3L"]=n.1E+"2R",r[i+"16-1F"]=n.1F+"2R",t.$L.E(r),t.$L.E(i+e,n.16))}},s.1Q.F={1F:-20,1E:2S,2Q:"2T-3M(0.3N, 1.0, 0.3O, 0.3P)",16:"2T-3M(0.3N, 1.4P, 0.3O, 0.3P)"},s.2n=q(n,t,i){D o=n.O({},s.2n.F,i),r,u,l,f=!1,e=t.B.M,a=t.$L[0].1q,h,c,v=q(){h=(u-r)*o.3Q,c=.5>N.U(h),u!=r&&!c?(r+=h,a[e]=r+p,t.2g()):(o.3R&&(a[e]=u+p),f&&(1y(l),f=!1,t.1o()))};x.I=q(){A u},x.G=q(n){u=n,f||(l=1O(v,o.1r),f=!0,t.1m())},x.1J=q(n){r+=n,u+=n},(r=X(t.$L.E(e)))||(r=0),u=r},s.2n.F={3R:!1,1r:25,3Q:.25},s.2U=q(n,t,i){D u=n.O({},s.2U.F,i),e,o,a,h=!1,v=t.B.M,w=t.$L[0].1q,r=0,c,l,f,y=q(){(f=o-e)?(r=u.1G?r+(0<f?u.1G:-u.1G):u.1i,u.1H&&(c=N.U(r)/u.1H,l=u.1H*c*(c+1)/2,l>N.U(f-r)&&(r=(0<f?1:-1)*(-1+N.3S(u.1H*(u.1H+8*N.U(f))))/2)),u.3T||(0>f&&0<r&&(r=-u.1G),0<f&&0>r&&(r=u.1G)),r>u.1i&&(r=u.1i),r<-u.1i&&(r=-u.1i),0<f&&r>f&&(r=f),0>f&&r<f&&(r=f),e+=r,w[v]=e+p,t.2g()):(r=0,h&&(1y(a),h=!1,t.1o()))};x.I=q(){A o},x.G=q(n){o=n,h||(a=1O(y,u.1r),h=!0,t.1m())},x.1J=q(n){e+=n,o+=n},(o=e=X(t.$L.E(v)))||(e=0)},s.2U.F={1r:50,1i:50,1G:3,1H:3,3T:!0},s.1I=q(n,t,i){D f=n.O({},s.1I.F,i),r,u=t.B.M;x.I=q(){A r},x.G=q(n){r=n,n={},n[u]=r,t.$L.P(!0).2o(n,f.1E,f.3U,t.1o),t.1m()},(r=X(t.$L.E(u)))||(r=0)},s.1I.F={1E:2S,3U:"4Q"},s.1R=q(n,t,i){D u=n.O({},s.1R.F,i),k,v=!1,h,f,r,d,y,a,o,l=0,e,c,w=t.B.M,b=t.$L[0].1q,g=q(){o=+1j 2H,y!=r&&(l=l>o?o+e+N.U(r-h)*u.2V:o+N.U(r-h)*u.2V-u.1r/2,a=o+u.1F,e=l-a,e>u.2W&&(e=u.2W,l=a+e),e<u.2X&&(e=u.2X,l=a+e),h=f,d=r-h),o>=l?(f=r,b[w]=f+p,v&&(1y(k),v=!1,t.1o())):(c=(o-a)/e,1<c&&(c=1),0>c&&(c=0),f=h+d*u.16(c),b[w]=f+p,y=r,t.2g())};x.I=q(){A r},x.G=q(n){r=n,v||(k=1O(g,u.1r),v=!0,t.1m())},x.1J=q(n){f+=n,r+=n,h+=n,y+=n},(f=X(t.$L.E(t.B.M)))||(f=0),h=r=f},s.1R.F={1F:-20,1r:20,2X:l,2W:4R,2V:10,16:H.1R.3V},21=q(){r.3W&&"4S"3X K.3Y&&(r.1s=["2l"],r.1S=[r.3Z]),c=[];13(D t,n=0;n<r.1s.1b;n++)t=r.1S[n]?r.1S[n]:r.1S[0],c[n]=1j f[r.1s[n]](i,u,t);r.41&&"1Q"!=r.2p&&!1!==H.2O.2P()&&(r.2p="1Q",r.2Y=r.42),w=1j s[r.2p](i,u,r.2Y)},H.1T.43++,1W==1u r.2Z&&e.14(r.2D,r.2Z),1W==1u r.30&&e.14(r.2B,r.30),1W==1u r.31&&e.14(r.2C,r.31),o.B=1Y==r.1L?n:3j,t=r.11+"-L",e.44(\'<4T 1V="\'+t+\'-2" 1q="45:4U-46;"/>\'),e.44(2s+t+\'-1" 1q="T:3c;"/>\'),k=i(e.1w("."+t+"-1")[0]),y=i(k.1w("."+t+"-2")[0]),"4V"==r.1L&&y.E(1Z,"3e%"),o.s=r,o.$S=e,o.$L=k,e.3q(r.11),o.2z(),""==1D.32||"4W"==1D.32||1D.32.4X(/47\\.48/i)||(e.34(\'<a 4Y="49://4Z.47.48" 51="52 53 54&55;56 57 59!" 2J="5a" 1V="\'+r.11+\'-35"></a>\'),a=e.1w("a."+r.11+"-35"),H.1T.4a||(H.1T.4a=!0,t=K.5b("5c"),t.5d="5e/E",n="."+r.11+"-35 {36:5f(5g:5h/5i;5j,5k/5l/5m+5n/5o+5p+5q+5r/5s/5t+5u/5v+5w/Q+5x/6/5y+5z+5A+5B+5C+/n/5D+5E/5F+5G+5H+5I/5J/+5K+5L/5M+5N+5O/5P/5Q+5R/5S/5T+5U+5V+5W+5X/5Y+5Z/i/60+61+62/63+64/65/66+68/69+6a+/6b+6c/6d//6e+6f+6g==);z-6h:3r !38;6i:0 !38;45:46 !38}",t.4b?t.4b.6j=n:t.6k(K.6l(n)),i("6m").34(t)),a.E({2e:0,T:1U,1c:17,1t:17,2e:0,1k:-20}).1F(6n).2o({1k:4},2S),a.6o(q(){a.P().E({"36-T":"-6p 0",1k:-58,1c:6q}).2o({1k:0},l)}),a.3u(q(){a.P().2o({1k:-58},{3L:l,6r:q(){a.E({"36-T":"0 0",1k:4,1c:17})}})})),r.4c){13(t=!1,n=0;n<r.1s.1b;n++)J("1M"==r.1s[n]||"2h"==r.1s[n]){t=!0;3a}t&&(e.34(2s+r.11+\'-2q-1"/><3d 1V="\'+r.11+\'-2q-2"/>\'),27=e.1w("."+r.11+"-2q-1"),28=e.1w("."+r.11+"-2q-2"),27.E(j,1U).E(u.B.1v,u.19()).E(u.B.23,u.B.26(e)).E(u.B.M,0).E(u.B.24,0),28.E(j,1U).E(u.B.1v,u.3l).E(u.B.23,u.B.26(e)).E(u.B.2u,0).E(u.B.24,0),e.3f(q(n){22=n[u.B.12]-e.G()[u.B.M],27.E(u.B.1v,22-r.3b),28.E(u.B.1v,u.B.Z(e)-22-r.3b)}))}13(k.E(o.B.M,o.2c(r.4d)),21(),o.T(r.T),n=0;n<c.1b;n++)c[n].V()};H.F={1L:"3g",2A:!1,2p:"2n",2Y:{},1s:["1M"],1S:[{}],1l:25,2b:25,4d:0,T:.5,4c:!1,3b:7,3W:!0,3Z:{},41:!1,42:{},3n:!1,30:1X,2Z:1X,31:1X,11:"6s",2B:"6t",2D:"3I",2C:"6u"},H.1T={6v:"1.6.0",6w:"6x",6y:!1,43:0},H.2O={2P:q(){D n=H.1T,r,t,i;J(18 0===n.2r){n.2r=!1,r=(K.6z||K.3Y).1q,t={16:"",6A:"-6B-",6C:"-6D-",6E:"-2R-",6F:"-o-"};13(i 3X t)J(18 0!==r[i]){n.2r=t[i];3a}}A n.2r},4e:q(){A"4f:"==K.1D.4e?"4f:":"49:"}},H.2t=q(n){13(D i="19 3m T 2c I G W 2z 3s 3t V P".6G(" "),r=x,t=0;t<i.1b;t++)(q(t){r[t]=q(){13(D u,i,f=0;f<n.1b;f++)J(u=n[f].H,i=u[t].6H(u,6I),18 0!==i&&i!==u)A i;A r}})(i[t]);A x},H.1R={6J:q(){A 1},6K:q(n){A n},6L:q(n){D t=n*n;A n*(-t*n+4*t-6*n+4)},2T:q(n){A n*(4*n*n-9*n+6)},6M:q(n){D t=n*n;A n*(33*t*t-6N*t*n+6O*t-67*n+15)},3V:q(n){A N.3S(1-(n-=1)*n)},6P:q(n,t,i,r,u,f){D v=u?u:.6Q,y=f?f:5,e=3*n,o=3*(i-n)-e,p=2*o,c=1-e-o,a=3*c,s=3*t,h=3*(r-t)-s,l=1-s-h;x.16=q(n){13(D t=n,r=0,i;r<y;r++){J(i=t*(e+t*(o+t*c))-n,N.U(i)<v)3a;t-=i/(e+t*(p+t*a))}A t*(s+t*(h+t*l))}}},q(n){n.6R.H=q(t){A H.2t(x.6S(q(i,r){r.H||(r.H=1j H(r,t,n))}))}}(1I);',62,427,'||||||||||||||||||||||||||function|||||||this|||return|props|el|var|css|defaults|offset|FlowSlider|getOffset|if|document|wrap|edge|Math|extend|stop||unbind|mask|position|abs|start|boundOffset|parseInt|step|fSize||prefix|mouse|for|bind||transition||void|calcSize|half_size|length|width|moveBounded|timeout|one|preventDefault|outFunction|speed|new|right|marginStart|_triggerOnStart|trigger|_triggerOnStop|coefficient|style|frequency|controllers|height|typeof|size|children|mouseStart|clearInterval|prevent|eventMove|eventEnd|fsDragging|location|time|delay|acc|dec|jQuery|shift|item|mode|Hover|mouseEnd|setInterval|eventStart|CSS|Transition|controllerOptions|Global|ht|class|it|null|nt|tt||st|rt|sizeC|edgeC||fSizeC|et|ft|ut|ot|marginEnd|positionToOffset|move|margin|isNaN|_triggerOnMove|HoverCenter|outCoefficient|setTimeout|_delay|Touch|bound|Elastic|animate|animation|overlay|tPrefix|ct|Array|edgeEnd|top|outerHeight|window|at|setupDOM|infinite|eMoveStart|eMove|eMoveStop|moveFunction|Drag|Wheel|Date|Key|target|Hash|Timer|Event|event|Util|transitionPrefix|transitionAlt|ms|1e3|cubic|Accelerating|timeCoefficient|timeMax|timeMin|animationOptions|onMoveStop|onMoveStart|onMove|host||append|branding|background||important||break|overlayPrecision|absolute|div|100|mousemove|horizontal|fOuterSize|outerWidth|vt|bottom|wrapSize|getPosition|moveIfSmaller|yt|pt|addClass|9999999|content|set|mouseleave|round|center|150|125|200|originalEvent|touches|normalize|keyCode|keyFwd|keyRev|keydown|hash|flowSliderMoveStop|rewind|hookStopEvent|duration|bezier|345|535|795|elasticity|snap|sqrt|overshoot|easing|circ|detectTouchDevice|in|documentElement|touchOptions||detectCssTransition|cssAnimationOptions|sliders|wrapInner|display|block|flowslider|com|http|brandingCSS|styleSheet|externalContent|startPosition|protocol|https|px|left|string|object|array|pageX|pageY|overflow|hidden|relative|float|clone|appendTo|eventLeaveOn|flowSliderDragStart|flowSliderDragEnd|mousedown|mouseup|touchstart|touchend|touchcancel|touchmove|flowSliderTouchStart|flowSliderTouchEnd|mousewheel|500|300|substr|ready|3e3|click|None|timing|transitionend|property|650|swing|1500|ontouchstart|span|inline|vertical|localhost|match|href|www||title|Flow|Slider|plugin|mdash|slide|your||HTML|_blank|createElement|STYLE|type|text|url|data|image|png|base64|iVBORw0KGgoAAAANSUhEUgAAAGAAAAARCAYAAAAi5qlcAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2RpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw|eHBhY2tldCBiZWdpbj0i77u|IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8|IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo0MTJEMUUwQ0IxMjlFMTExQTdENUE2NkI4MENGMEUyQSIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo3NjZGQ0EwNDQ3NkIxMUUxQjhBOUNEQUU5RTA3NzY4MiIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo3NjZGQ0EwMzQ3NkIxMUUxQjhBOUNEQUU5RTA3NzY4MiIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M1IFdpbmRvd3MiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpEMzRBQjk2MzZCNDdFMTExQThDOEFBQzQzREU4RDlCMyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo0MTJEMUUwQ0IxMjlFMTExQTdENUE2NkI4MENGMEUyQSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI|PjyGfq4AAASpSURBVHja7FhdSBxXFD4z|6fRdsWEUrJUS1swJKhJaLp9iCJp4gaKPgqlWAxFQ8DkzSd91CehULRgkVKoSIkvBW0h2hSCW2Jt0aJv2pKiSZsmGrImJq7r7k7ud|OZ3J2dWVc67UPZA4c7c|69585837nnzFzNMAz6pxKNRo1QKERer5d0XZdaEHtJp9NSk8kk7ezskNcNpwDe7|fL1uPxFAjYg4BUKmVi5BoBUJ|PZ|6CgjgTgOjna1cIAOCIfCbivyZgcXGRampq|hXfKysrVFZWRsFg0LYPa6Ovvr4|bwK4BU5e7ev1KnF|irOeYdE9omtMti3xTaOH9EN3M|LjNJ2LPqV7ceca8|vZEhpZ3aFPlhMZ9lKvRt|dLqZwuce0xWIx|bKqVFZWUlVVlbyOx|OugA0FmQC9sbGRpqenqb|r6|uR6s7Oz5vjR0VHq7e2lnp4eamho2FfAsnoZ|M9PldoOvvjL5vei|eOLcOmVZDqrD5Om7OYx|E5|x1bi9HqJTjXlfjHGb|VL7|4RcvnS6jcr5lRDkAADEd7a2ura5E|MDBAXV1dVFtbK8lWfWNNRDgIcFu8DD5eWsr8JNHJiDrmqtAzH89uBqz9u|NsEWbwnfwOnSyiG2tJavtpixz80pOkYRLAAvCnpl5w3t7ebl6PjIzIiEQUA7CxsTFqaWmRAOIaBDY1Nck|gK36QYRDJicn5XiQgOjn3QdlwRqDg4MZNlx3dHTQ|Pi4JArrIWgwjncXfFdXV2fuBo44BsHo|9CKJXbAOb6R|QBLnecgufy|94qHfrifov363djYkMAwOGr6ABkAF2kC|QAEAlB4zsTEhFQniUQitLCwIEmwrgmQmWSsg9TDAkKxztLSknwWEI8WvlAjQAr8ZKUjwn|ArpogvbD9aXxwaFW0p00bg6XMs5Ucfg8XEb12QKeb60nar1|8FACAqgJguC4gjTDwfM3jASQik|1mShQRC9ABWDgclnPthMnr7Oy0tfOOxHOycFDYFWpdexQjVn3oN2lUbDPCFhTtcbbJSWKcOs9Ocvl9t3ibNhJpWlx9QDn9Guksv5yC1PSRS7heAHSOaoBcV1eXMY5BYmI4dVhFTTt2dhRsfBDk|1Gge9bvkqq|3mn1|prQ80I9Dv1S7SSX38ghg67feki05rjuc7|pdN7FDLmdI5yjD4WUCQBAHLVcI6xFGKmiu7vb3El2ohJkjXKuJXgGpx2UVYS1tbs|Ydmz5Ux2|EfrWHj9|JXnrLany7KE5ztx9mDS72eaj5zRPUfnWetLW|HZ2|cVB8ARXl|z8BYIaHh2Uuxqdpc3OzjEY1l4MQpCKAq9p3j1MkeCAKYGIu8rhVQBDXE|XfAOO5DqAPPvL5N9ECbUPBXZBDlr5rQj8V||i0C2qkmCv3o5uVTdyoqKigQCJg|Yo|2EnTxyyj9FXuaMeHssRBdOnOUWj67LgLcPs|XCw|TS|U0eGyA|bP|FEIkHb29ukuXEYNzc3Z4AAPg8qHEXkT4ArRxE4XIJTBr5AwN4EADPXzoKYAF5A0zSpBXE|DQVeUFdSEGRmZsbAgRy0QEBuAngXQJ8JMABn2v61okLcyAAAAABJRU5ErkJggg|index|padding|cssText|appendChild|createTextNode|head|5e3|mouseenter|17px|79|complete|www_FlowSlider_com|flowSliderMoveStart|flowSliderMove|VERSION|PACK|Free|pinged|body|MozTransition|moz|WebkitTransition|webkit|MsTransition|OTransition|split|apply|arguments|none|linear|quadratic|elastic|106|126|CubicBezier|001|fn|each'.split('|'),0,{}));

/*********************************************************************
*  #### Twitter Post Fetcher v10.0 ####
*  Coded by Jason Mayes 2013. A present to all the developers out there.
*  www.jasonmayes.com
*  Please keep this disclaimer with my code if you use it. Thanks. :-)
*  Got feedback or questions, ask here: 
*  http://www.jasonmayes.com/projects/twitterApi/
*  Updates will be posted to this site.
*********************************************************************/
var twitterFetcher=function(){function x(e){return e.replace(/<b[^>]*>(.*?)<\/b>/gi,function(c,e){return e}).replace(/class=".*?"|data-query-source=".*?"|dir=".*?"|rel=".*?"/gi,"")}function p(e,c){for(var g=[],f=RegExp("(^| )"+c+"( |$)"),a=e.getElementsByTagName("*"),h=0,d=a.length;h<d;h++)f.test(a[h].className)&&g.push(a[h]);return g}var y="",l=20,s=!0,k=[],t=!1,q=!0,r=!0,u=null,v=!0,z=!0,w=null,A=!0;return{fetch:function(e,c,g,f,a,h,d,b,m,n){void 0===g&&(g=20);void 0===f&&(s=!0);void 0===a&&(a=
!0);void 0===h&&(h=!0);void 0===d&&(d="default");void 0===b&&(b=!0);void 0===m&&(m=null);void 0===n&&(n=!0);t?k.push({id:e,domId:c,maxTweets:g,enableLinks:f,showUser:a,showTime:h,dateFunction:d,showRt:b,customCallback:m,showInteraction:n}):(t=!0,y=c,l=g,s=f,r=a,q=h,z=b,u=d,w=m,A=n,c=document.createElement("script"),c.type="text/javascript",c.src="//cdn.syndication.twimg.com/widgets/timelines/"+e+"?&lang=en&callback=twitterFetcher.callback&suppress_response_codes=true&rnd="+Math.random(),document.getElementsByTagName("head")[0].appendChild(c))},
callback:function(e){var c=document.createElement("div");c.innerHTML=e.body;"undefined"===typeof c.getElementsByClassName&&(v=!1);e=[];var g=[],f=[],a=[],h=[],d=0;if(v)for(c=c.getElementsByClassName("tweet");d<c.length;){0<c[d].getElementsByClassName("retweet-credit").length?a.push(!0):a.push(!1);if(!a[d]||a[d]&&z)e.push(c[d].getElementsByClassName("e-entry-title")[0]),h.push(c[d].getAttribute("data-tweet-id")),g.push(c[d].getElementsByClassName("p-author")[0]),f.push(c[d].getElementsByClassName("dt-updated")[0]);
d++}else for(c=p(c,"tweet");d<c.length;)e.push(p(c[d],"e-entry-title")[0]),h.push(c[d].getAttribute("data-tweet-id")),g.push(p(c[d],"p-author")[0]),f.push(p(c[d],"dt-updated")[0]),0<p(c[d],"retweet-credit").length?a.push(!0):a.push(!1),d++;e.length>l&&(e.splice(l,e.length-l),g.splice(l,g.length-l),f.splice(l,f.length-l),a.splice(l,a.length-l));c=[];d=e.length;for(a=0;a<d;){if("string"!==typeof u){var b=new Date(f[a].getAttribute("datetime").replace(/-/g,"/").replace("T"," ").split("+")[0]),b=u(b);
f[a].setAttribute("aria-label",b);if(e[a].innerText)if(v)f[a].innerText=b;else{var m=document.createElement("p"),n=document.createTextNode(b);m.appendChild(n);m.setAttribute("aria-label",b);f[a]=m}else f[a].textContent=b}b="";s?(r&&(b+='<div class="user">'+x(g[a].innerHTML)+"</div>"),b+='<p class="tweet">'+x(e[a].innerHTML)+"</p>",q&&(b+='<p class="timePosted">'+f[a].getAttribute("aria-label")+"</p>")):e[a].innerText?(r&&(b+='<p class="user">'+g[a].innerText+"</p>"),b+='<p class="tweet">'+e[a].innerText+
"</p>",q&&(b+='<p class="timePosted">'+f[a].innerText+"</p>")):(r&&(b+='<p class="user">'+g[a].textContent+"</p>"),b+='<p class="tweet">'+e[a].textContent+"</p>",q&&(b+='<p class="timePosted">'+f[a].textContent+"</p>"));A&&(b+='<p class="interact"><a href="https://twitter.com/intent/tweet?in_reply_to='+h[a]+'" class="twitter_reply_icon">Reply</a><a href="https://twitter.com/intent/retweet?tweet_id='+h[a]+'" class="twitter_retweet_icon">Retweet</a><a href="https://twitter.com/intent/favorite?tweet_id='+
h[a]+'" class="twitter_fav_icon">Favorite</a></p>');c.push(b);a++}if(null==w){e=c.length;g=0;f=document.getElementById(y);for(h="<ul>";g<e;)h+="<li>"+c[g]+"</li>",g++;f.innerHTML=h+"</ul>"}else w(c);t=!1;0<k.length&&(twitterFetcher.fetch(k[0].id,k[0].domId,k[0].maxTweets,k[0].enableLinks,k[0].showUser,k[0].showTime,k[0].dateFunction,k[0].showRt,k[0].customCallback,k[0].showInteraction),k.splice(0,1))}}}();
var $ = jQuery.noConflict();

jQuery.easing.jswing=jQuery.easing.swing;
jQuery.extend(jQuery.easing,{def:"easeOutQuad",swing:function(e,a,c,b,d){return jQuery.easing[jQuery.easing.def](e,a,c,b,d)},easeInQuad:function(e,a,c,b,d){return b*(a/=d)*a+c},easeOutQuad:function(e,a,c,b,d){return-b*(a/=d)*(a-2)+c},easeInOutQuad:function(e,a,c,b,d){if((a/=d/2)<1)return b/2*a*a+c;return-b/2*(--a*(a-2)-1)+c},easeInCubic:function(e,a,c,b,d){return b*(a/=d)*a*a+c},easeOutCubic:function(e,a,c,b,d){return b*((a=a/d-1)*a*a+1)+c},easeInOutCubic:function(e,a,c,b,d){if((a/=d/2)<1)return b/
2*a*a*a+c;return b/2*((a-=2)*a*a+2)+c},easeInQuart:function(e,a,c,b,d){return b*(a/=d)*a*a*a+c},easeOutQuart:function(e,a,c,b,d){return-b*((a=a/d-1)*a*a*a-1)+c},easeInOutQuart:function(e,a,c,b,d){if((a/=d/2)<1)return b/2*a*a*a*a+c;return-b/2*((a-=2)*a*a*a-2)+c},easeInQuint:function(e,a,c,b,d){return b*(a/=d)*a*a*a*a+c},easeOutQuint:function(e,a,c,b,d){return b*((a=a/d-1)*a*a*a*a+1)+c},easeInOutQuint:function(e,a,c,b,d){if((a/=d/2)<1)return b/2*a*a*a*a*a+c;return b/2*((a-=2)*a*a*a*a+2)+c},easeInSine:function(e,
a,c,b,d){return-b*Math.cos(a/d*(Math.PI/2))+b+c},easeOutSine:function(e,a,c,b,d){return b*Math.sin(a/d*(Math.PI/2))+c},easeInOutSine:function(e,a,c,b,d){return-b/2*(Math.cos(Math.PI*a/d)-1)+c},easeInExpo:function(e,a,c,b,d){return a==0?c:b*Math.pow(2,10*(a/d-1))+c},easeOutExpo:function(e,a,c,b,d){return a==d?c+b:b*(-Math.pow(2,-10*a/d)+1)+c},easeInOutExpo:function(e,a,c,b,d){if(a==0)return c;if(a==d)return c+b;if((a/=d/2)<1)return b/2*Math.pow(2,10*(a-1))+c;return b/2*(-Math.pow(2,-10*--a)+2)+c},
easeInCirc:function(e,a,c,b,d){return-b*(Math.sqrt(1-(a/=d)*a)-1)+c},easeOutCirc:function(e,a,c,b,d){return b*Math.sqrt(1-(a=a/d-1)*a)+c},easeInOutCirc:function(e,a,c,b,d){if((a/=d/2)<1)return-b/2*(Math.sqrt(1-a*a)-1)+c;return b/2*(Math.sqrt(1-(a-=2)*a)+1)+c},easeInElastic:function(e,a,c,b,d){e=1.70158;var f=0,g=b;if(a==0)return c;if((a/=d)==1)return c+b;f||(f=d*0.3);if(g<Math.abs(b)){g=b;e=f/4}else e=f/(2*Math.PI)*Math.asin(b/g);return-(g*Math.pow(2,10*(a-=1))*Math.sin((a*d-e)*2*Math.PI/f))+c},easeOutElastic:function(e,
a,c,b,d){e=1.70158;var f=0,g=b;if(a==0)return c;if((a/=d)==1)return c+b;f||(f=d*0.3);if(g<Math.abs(b)){g=b;e=f/4}else e=f/(2*Math.PI)*Math.asin(b/g);return g*Math.pow(2,-10*a)*Math.sin((a*d-e)*2*Math.PI/f)+b+c},easeInOutElastic:function(e,a,c,b,d){e=1.70158;var f=0,g=b;if(a==0)return c;if((a/=d/2)==2)return c+b;f||(f=d*0.3*1.5);if(g<Math.abs(b)){g=b;e=f/4}else e=f/(2*Math.PI)*Math.asin(b/g);if(a<1)return-0.5*g*Math.pow(2,10*(a-=1))*Math.sin((a*d-e)*2*Math.PI/f)+c;return g*Math.pow(2,-10*(a-=1))*Math.sin((a*
d-e)*2*Math.PI/f)*0.5+b+c},easeInBack:function(e,a,c,b,d,f){if(f==undefined)f=1.70158;return b*(a/=d)*a*((f+1)*a-f)+c},easeOutBack:function(e,a,c,b,d,f){if(f==undefined)f=1.70158;return b*((a=a/d-1)*a*((f+1)*a+f)+1)+c},easeInOutBack:function(e,a,c,b,d,f){if(f==undefined)f=1.70158;if((a/=d/2)<1)return b/2*a*a*(((f*=1.525)+1)*a-f)+c;return b/2*((a-=2)*a*(((f*=1.525)+1)*a+f)+2)+c},easeInBounce:function(e,a,c,b,d){return b-jQuery.easing.easeOutBounce(e,d-a,0,b,d)+c},easeOutBounce:function(e,a,c,b,d){return(a/=
d)<1/2.75?b*7.5625*a*a+c:a<2/2.75?b*(7.5625*(a-=1.5/2.75)*a+0.75)+c:a<2.5/2.75?b*(7.5625*(a-=2.25/2.75)*a+0.9375)+c:b*(7.5625*(a-=2.625/2.75)*a+0.984375)+c},easeInOutBounce:function(e,a,c,b,d){if(a<d/2)return jQuery.easing.easeInBounce(e,a*2,0,b,d)*0.5+c;return jQuery.easing.easeOutBounce(e,a*2-d,0,b,d)*0.5+b*0.5+c}});


/*! fancyBox v2.1.5 fancyapps.com | fancyapps.com/fancybox/#license */
(function(r,G,f,v){var J=f("html"),n=f(r),p=f(G),b=f.fancybox=function(){b.open.apply(this,arguments)},I=navigator.userAgent.match(/msie/i),B=null,s=G.createTouch!==v,t=function(a){return a&&a.hasOwnProperty&&a instanceof f},q=function(a){return a&&"string"===f.type(a)},E=function(a){return q(a)&&0<a.indexOf("%")},l=function(a,d){var e=parseInt(a,10)||0;d&&E(a)&&(e*=b.getViewport()[d]/100);return Math.ceil(e)},w=function(a,b){return l(a,b)+"px"};f.extend(b,{version:"2.1.5",defaults:{padding:15,margin:20,
width:800,height:600,minWidth:100,minHeight:100,maxWidth:9999,maxHeight:9999,pixelRatio:1,autoSize:!0,autoHeight:!1,autoWidth:!1,autoResize:!0,autoCenter:!s,fitToView:!0,aspectRatio:!1,topRatio:0.5,leftRatio:0.5,scrolling:"auto",wrapCSS:"",arrows:!0,closeBtn:!0,closeClick:!1,nextClick:!1,mouseWheel:!0,autoPlay:!1,playSpeed:3E3,preload:3,modal:!1,loop:!0,ajax:{dataType:"html",headers:{"X-fancyBox":!0}},iframe:{scrolling:"auto",preload:!0},swf:{wmode:"transparent",allowfullscreen:"true",allowscriptaccess:"always"},
keys:{next:{13:"left",34:"up",39:"left",40:"up"},prev:{8:"right",33:"down",37:"right",38:"down"},close:[27],play:[32],toggle:[70]},direction:{next:"left",prev:"right"},scrollOutside:!0,index:0,type:null,href:null,content:null,title:null,tpl:{wrap:'<div class="fancybox-wrap" tabIndex="-1"><div class="fancybox-skin"><div class="fancybox-outer"><div class="fancybox-inner"></div></div></div></div>',image:'<img class="fancybox-image" src="{href}" alt="" />',iframe:'<iframe id="fancybox-frame{rnd}" name="fancybox-frame{rnd}" class="fancybox-iframe" frameborder="0" vspace="0" hspace="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen'+
(I?' allowtransparency="true"':"")+"></iframe>",error:'<p class="fancybox-error">The requested content cannot be loaded.<br/>Please try again later.</p>',closeBtn:'<a title="Close" class="fancybox-item fancybox-close" href="javascript:;"></a>',next:'<a title="Next" class="fancybox-nav fancybox-next" href="javascript:;"><span></span></a>',prev:'<a title="Previous" class="fancybox-nav fancybox-prev" href="javascript:;"><span></span></a>'},openEffect:"fade",openSpeed:250,openEasing:"swing",openOpacity:!0,
openMethod:"zoomIn",closeEffect:"fade",closeSpeed:250,closeEasing:"swing",closeOpacity:!0,closeMethod:"zoomOut",nextEffect:"elastic",nextSpeed:250,nextEasing:"swing",nextMethod:"changeIn",prevEffect:"elastic",prevSpeed:250,prevEasing:"swing",prevMethod:"changeOut",helpers:{overlay:!0,title:!0},onCancel:f.noop,beforeLoad:f.noop,afterLoad:f.noop,beforeShow:f.noop,afterShow:f.noop,beforeChange:f.noop,beforeClose:f.noop,afterClose:f.noop},group:{},opts:{},previous:null,coming:null,current:null,isActive:!1,
isOpen:!1,isOpened:!1,wrap:null,skin:null,outer:null,inner:null,player:{timer:null,isActive:!1},ajaxLoad:null,imgPreload:null,transitions:{},helpers:{},open:function(a,d){if(a&&(f.isPlainObject(d)||(d={}),!1!==b.close(!0)))return f.isArray(a)||(a=t(a)?f(a).get():[a]),f.each(a,function(e,c){var k={},g,h,j,m,l;"object"===f.type(c)&&(c.nodeType&&(c=f(c)),t(c)?(k={href:c.data("fancybox-href")||c.attr("href"),title:c.data("fancybox-title")||c.attr("title"),isDom:!0,element:c},f.metadata&&f.extend(!0,k,
c.metadata())):k=c);g=d.href||k.href||(q(c)?c:null);h=d.title!==v?d.title:k.title||"";m=(j=d.content||k.content)?"html":d.type||k.type;!m&&k.isDom&&(m=c.data("fancybox-type"),m||(m=(m=c.prop("class").match(/fancybox\.(\w+)/))?m[1]:null));q(g)&&(m||(b.isImage(g)?m="image":b.isSWF(g)?m="swf":"#"===g.charAt(0)?m="inline":q(c)&&(m="html",j=c)),"ajax"===m&&(l=g.split(/\s+/,2),g=l.shift(),l=l.shift()));j||("inline"===m?g?j=f(q(g)?g.replace(/.*(?=#[^\s]+$)/,""):g):k.isDom&&(j=c):"html"===m?j=g:!m&&(!g&&
k.isDom)&&(m="inline",j=c));f.extend(k,{href:g,type:m,content:j,title:h,selector:l});a[e]=k}),b.opts=f.extend(!0,{},b.defaults,d),d.keys!==v&&(b.opts.keys=d.keys?f.extend({},b.defaults.keys,d.keys):!1),b.group=a,b._start(b.opts.index)},cancel:function(){var a=b.coming;a&&!1!==b.trigger("onCancel")&&(b.hideLoading(),b.ajaxLoad&&b.ajaxLoad.abort(),b.ajaxLoad=null,b.imgPreload&&(b.imgPreload.onload=b.imgPreload.onerror=null),a.wrap&&a.wrap.stop(!0,!0).trigger("onReset").remove(),b.coming=null,b.current||
b._afterZoomOut(a))},close:function(a){b.cancel();!1!==b.trigger("beforeClose")&&(b.unbindEvents(),b.isActive&&(!b.isOpen||!0===a?(f(".fancybox-wrap").stop(!0).trigger("onReset").remove(),b._afterZoomOut()):(b.isOpen=b.isOpened=!1,b.isClosing=!0,f(".fancybox-item, .fancybox-nav").remove(),b.wrap.stop(!0,!0).removeClass("fancybox-opened"),b.transitions[b.current.closeMethod]())))},play:function(a){var d=function(){clearTimeout(b.player.timer)},e=function(){d();b.current&&b.player.isActive&&(b.player.timer=
setTimeout(b.next,b.current.playSpeed))},c=function(){d();p.unbind(".player");b.player.isActive=!1;b.trigger("onPlayEnd")};if(!0===a||!b.player.isActive&&!1!==a){if(b.current&&(b.current.loop||b.current.index<b.group.length-1))b.player.isActive=!0,p.bind({"onCancel.player beforeClose.player":c,"onUpdate.player":e,"beforeLoad.player":d}),e(),b.trigger("onPlayStart")}else c()},next:function(a){var d=b.current;d&&(q(a)||(a=d.direction.next),b.jumpto(d.index+1,a,"next"))},prev:function(a){var d=b.current;
d&&(q(a)||(a=d.direction.prev),b.jumpto(d.index-1,a,"prev"))},jumpto:function(a,d,e){var c=b.current;c&&(a=l(a),b.direction=d||c.direction[a>=c.index?"next":"prev"],b.router=e||"jumpto",c.loop&&(0>a&&(a=c.group.length+a%c.group.length),a%=c.group.length),c.group[a]!==v&&(b.cancel(),b._start(a)))},reposition:function(a,d){var e=b.current,c=e?e.wrap:null,k;c&&(k=b._getPosition(d),a&&"scroll"===a.type?(delete k.position,c.stop(!0,!0).animate(k,200)):(c.css(k),e.pos=f.extend({},e.dim,k)))},update:function(a){var d=
a&&a.type,e=!d||"orientationchange"===d;e&&(clearTimeout(B),B=null);b.isOpen&&!B&&(B=setTimeout(function(){var c=b.current;c&&!b.isClosing&&(b.wrap.removeClass("fancybox-tmp"),(e||"load"===d||"resize"===d&&c.autoResize)&&b._setDimension(),"scroll"===d&&c.canShrink||b.reposition(a),b.trigger("onUpdate"),B=null)},e&&!s?0:300))},toggle:function(a){b.isOpen&&(b.current.fitToView="boolean"===f.type(a)?a:!b.current.fitToView,s&&(b.wrap.removeAttr("style").addClass("fancybox-tmp"),b.trigger("onUpdate")),
b.update())},hideLoading:function(){p.unbind(".loading");f("#fancybox-loading").remove()},showLoading:function(){var a,d;b.hideLoading();a=f('<div id="fancybox-loading"><div></div></div>').click(b.cancel).appendTo("body");p.bind("keydown.loading",function(a){if(27===(a.which||a.keyCode))a.preventDefault(),b.cancel()});b.defaults.fixed||(d=b.getViewport(),a.css({position:"absolute",top:0.5*d.h+d.y,left:0.5*d.w+d.x}))},getViewport:function(){var a=b.current&&b.current.locked||!1,d={x:n.scrollLeft(),
y:n.scrollTop()};a?(d.w=a[0].clientWidth,d.h=a[0].clientHeight):(d.w=s&&r.innerWidth?r.innerWidth:n.width(),d.h=s&&r.innerHeight?r.innerHeight:n.height());return d},unbindEvents:function(){b.wrap&&t(b.wrap)&&b.wrap.unbind(".fb");p.unbind(".fb");n.unbind(".fb")},bindEvents:function(){var a=b.current,d;a&&(n.bind("orientationchange.fb"+(s?"":" resize.fb")+(a.autoCenter&&!a.locked?" scroll.fb":""),b.update),(d=a.keys)&&p.bind("keydown.fb",function(e){var c=e.which||e.keyCode,k=e.target||e.srcElement;
if(27===c&&b.coming)return!1;!e.ctrlKey&&(!e.altKey&&!e.shiftKey&&!e.metaKey&&(!k||!k.type&&!f(k).is("[contenteditable]")))&&f.each(d,function(d,k){if(1<a.group.length&&k[c]!==v)return b[d](k[c]),e.preventDefault(),!1;if(-1<f.inArray(c,k))return b[d](),e.preventDefault(),!1})}),f.fn.mousewheel&&a.mouseWheel&&b.wrap.bind("mousewheel.fb",function(d,c,k,g){for(var h=f(d.target||null),j=!1;h.length&&!j&&!h.is(".fancybox-skin")&&!h.is(".fancybox-wrap");)j=h[0]&&!(h[0].style.overflow&&"hidden"===h[0].style.overflow)&&
(h[0].clientWidth&&h[0].scrollWidth>h[0].clientWidth||h[0].clientHeight&&h[0].scrollHeight>h[0].clientHeight),h=f(h).parent();if(0!==c&&!j&&1<b.group.length&&!a.canShrink){if(0<g||0<k)b.prev(0<g?"down":"left");else if(0>g||0>k)b.next(0>g?"up":"right");d.preventDefault()}}))},trigger:function(a,d){var e,c=d||b.coming||b.current;if(c){f.isFunction(c[a])&&(e=c[a].apply(c,Array.prototype.slice.call(arguments,1)));if(!1===e)return!1;c.helpers&&f.each(c.helpers,function(d,e){if(e&&b.helpers[d]&&f.isFunction(b.helpers[d][a]))b.helpers[d][a](f.extend(!0,
{},b.helpers[d].defaults,e),c)});p.trigger(a)}},isImage:function(a){return q(a)&&a.match(/(^data:image\/.*,)|(\.(jp(e|g|eg)|gif|png|bmp|webp|svg)((\?|#).*)?$)/i)},isSWF:function(a){return q(a)&&a.match(/\.(swf)((\?|#).*)?$/i)},_start:function(a){var d={},e,c;a=l(a);e=b.group[a]||null;if(!e)return!1;d=f.extend(!0,{},b.opts,e);e=d.margin;c=d.padding;"number"===f.type(e)&&(d.margin=[e,e,e,e]);"number"===f.type(c)&&(d.padding=[c,c,c,c]);d.modal&&f.extend(!0,d,{closeBtn:!1,closeClick:!1,nextClick:!1,arrows:!1,
mouseWheel:!1,keys:null,helpers:{overlay:{closeClick:!1}}});d.autoSize&&(d.autoWidth=d.autoHeight=!0);"auto"===d.width&&(d.autoWidth=!0);"auto"===d.height&&(d.autoHeight=!0);d.group=b.group;d.index=a;b.coming=d;if(!1===b.trigger("beforeLoad"))b.coming=null;else{c=d.type;e=d.href;if(!c)return b.coming=null,b.current&&b.router&&"jumpto"!==b.router?(b.current.index=a,b[b.router](b.direction)):!1;b.isActive=!0;if("image"===c||"swf"===c)d.autoHeight=d.autoWidth=!1,d.scrolling="visible";"image"===c&&(d.aspectRatio=
!0);"iframe"===c&&s&&(d.scrolling="scroll");d.wrap=f(d.tpl.wrap).addClass("fancybox-"+(s?"mobile":"desktop")+" fancybox-type-"+c+" fancybox-tmp "+d.wrapCSS).appendTo(d.parent||"body");f.extend(d,{skin:f(".fancybox-skin",d.wrap),outer:f(".fancybox-outer",d.wrap),inner:f(".fancybox-inner",d.wrap)});f.each(["Top","Right","Bottom","Left"],function(a,b){d.skin.css("padding"+b,w(d.padding[a]))});b.trigger("onReady");if("inline"===c||"html"===c){if(!d.content||!d.content.length)return b._error("content")}else if(!e)return b._error("href");
"image"===c?b._loadImage():"ajax"===c?b._loadAjax():"iframe"===c?b._loadIframe():b._afterLoad()}},_error:function(a){f.extend(b.coming,{type:"html",autoWidth:!0,autoHeight:!0,minWidth:0,minHeight:0,scrolling:"no",hasError:a,content:b.coming.tpl.error});b._afterLoad()},_loadImage:function(){var a=b.imgPreload=new Image;a.onload=function(){this.onload=this.onerror=null;b.coming.width=this.width/b.opts.pixelRatio;b.coming.height=this.height/b.opts.pixelRatio;b._afterLoad()};a.onerror=function(){this.onload=
this.onerror=null;b._error("image")};a.src=b.coming.href;!0!==a.complete&&b.showLoading()},_loadAjax:function(){var a=b.coming;b.showLoading();b.ajaxLoad=f.ajax(f.extend({},a.ajax,{url:a.href,error:function(a,e){b.coming&&"abort"!==e?b._error("ajax",a):b.hideLoading()},success:function(d,e){"success"===e&&(a.content=d,b._afterLoad())}}))},_loadIframe:function(){var a=b.coming,d=f(a.tpl.iframe.replace(/\{rnd\}/g,(new Date).getTime())).attr("scrolling",s?"auto":a.iframe.scrolling).attr("src",a.href);
f(a.wrap).bind("onReset",function(){try{f(this).find("iframe").hide().attr("src","//about:blank").end().empty()}catch(a){}});a.iframe.preload&&(b.showLoading(),d.one("load",function(){f(this).data("ready",1);s||f(this).bind("load.fb",b.update);f(this).parents(".fancybox-wrap").width("100%").removeClass("fancybox-tmp").show();b._afterLoad()}));a.content=d.appendTo(a.inner);a.iframe.preload||b._afterLoad()},_preloadImages:function(){var a=b.group,d=b.current,e=a.length,c=d.preload?Math.min(d.preload,
e-1):0,f,g;for(g=1;g<=c;g+=1)f=a[(d.index+g)%e],"image"===f.type&&f.href&&((new Image).src=f.href)},_afterLoad:function(){var a=b.coming,d=b.current,e,c,k,g,h;b.hideLoading();if(a&&!1!==b.isActive)if(!1===b.trigger("afterLoad",a,d))a.wrap.stop(!0).trigger("onReset").remove(),b.coming=null;else{d&&(b.trigger("beforeChange",d),d.wrap.stop(!0).removeClass("fancybox-opened").find(".fancybox-item, .fancybox-nav").remove());b.unbindEvents();e=a.content;c=a.type;k=a.scrolling;f.extend(b,{wrap:a.wrap,skin:a.skin,
outer:a.outer,inner:a.inner,current:a,previous:d});g=a.href;switch(c){case "inline":case "ajax":case "html":a.selector?e=f("<div>").html(e).find(a.selector):t(e)&&(e.data("fancybox-placeholder")||e.data("fancybox-placeholder",f('<div class="fancybox-placeholder"></div>').insertAfter(e).hide()),e=e.show().detach(),a.wrap.bind("onReset",function(){f(this).find(e).length&&e.hide().replaceAll(e.data("fancybox-placeholder")).data("fancybox-placeholder",!1)}));break;case "image":e=a.tpl.image.replace("{href}",
g);break;case "swf":e='<object id="fancybox-swf" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="100%" height="100%"><param name="movie" value="'+g+'"></param>',h="",f.each(a.swf,function(a,b){e+='<param name="'+a+'" value="'+b+'"></param>';h+=" "+a+'="'+b+'"'}),e+='<embed src="'+g+'" type="application/x-shockwave-flash" width="100%" height="100%"'+h+"></embed></object>"}(!t(e)||!e.parent().is(a.inner))&&a.inner.append(e);b.trigger("beforeShow");a.inner.css("overflow","yes"===k?"scroll":
"no"===k?"hidden":k);b._setDimension();b.reposition();b.isOpen=!1;b.coming=null;b.bindEvents();if(b.isOpened){if(d.prevMethod)b.transitions[d.prevMethod]()}else f(".fancybox-wrap").not(a.wrap).stop(!0).trigger("onReset").remove();b.transitions[b.isOpened?a.nextMethod:a.openMethod]();b._preloadImages()}},_setDimension:function(){var a=b.getViewport(),d=0,e=!1,c=!1,e=b.wrap,k=b.skin,g=b.inner,h=b.current,c=h.width,j=h.height,m=h.minWidth,u=h.minHeight,n=h.maxWidth,p=h.maxHeight,s=h.scrolling,q=h.scrollOutside?
h.scrollbarWidth:0,x=h.margin,y=l(x[1]+x[3]),r=l(x[0]+x[2]),v,z,t,C,A,F,B,D,H;e.add(k).add(g).width("auto").height("auto").removeClass("fancybox-tmp");x=l(k.outerWidth(!0)-k.width());v=l(k.outerHeight(!0)-k.height());z=y+x;t=r+v;C=E(c)?(a.w-z)*l(c)/100:c;A=E(j)?(a.h-t)*l(j)/100:j;if("iframe"===h.type){if(H=h.content,h.autoHeight&&1===H.data("ready"))try{H[0].contentWindow.document.location&&(g.width(C).height(9999),F=H.contents().find("body"),q&&F.css("overflow-x","hidden"),A=F.outerHeight(!0))}catch(G){}}else if(h.autoWidth||
h.autoHeight)g.addClass("fancybox-tmp"),h.autoWidth||g.width(C),h.autoHeight||g.height(A),h.autoWidth&&(C=g.width()),h.autoHeight&&(A=g.height()),g.removeClass("fancybox-tmp");c=l(C);j=l(A);D=C/A;m=l(E(m)?l(m,"w")-z:m);n=l(E(n)?l(n,"w")-z:n);u=l(E(u)?l(u,"h")-t:u);p=l(E(p)?l(p,"h")-t:p);F=n;B=p;h.fitToView&&(n=Math.min(a.w-z,n),p=Math.min(a.h-t,p));z=a.w-y;r=a.h-r;h.aspectRatio?(c>n&&(c=n,j=l(c/D)),j>p&&(j=p,c=l(j*D)),c<m&&(c=m,j=l(c/D)),j<u&&(j=u,c=l(j*D))):(c=Math.max(m,Math.min(c,n)),h.autoHeight&&
"iframe"!==h.type&&(g.width(c),j=g.height()),j=Math.max(u,Math.min(j,p)));if(h.fitToView)if(g.width(c).height(j),e.width(c+x),a=e.width(),y=e.height(),h.aspectRatio)for(;(a>z||y>r)&&(c>m&&j>u)&&!(19<d++);)j=Math.max(u,Math.min(p,j-10)),c=l(j*D),c<m&&(c=m,j=l(c/D)),c>n&&(c=n,j=l(c/D)),g.width(c).height(j),e.width(c+x),a=e.width(),y=e.height();else c=Math.max(m,Math.min(c,c-(a-z))),j=Math.max(u,Math.min(j,j-(y-r)));q&&("auto"===s&&j<A&&c+x+q<z)&&(c+=q);g.width(c).height(j);e.width(c+x);a=e.width();
y=e.height();e=(a>z||y>r)&&c>m&&j>u;c=h.aspectRatio?c<F&&j<B&&c<C&&j<A:(c<F||j<B)&&(c<C||j<A);f.extend(h,{dim:{width:w(a),height:w(y)},origWidth:C,origHeight:A,canShrink:e,canExpand:c,wPadding:x,hPadding:v,wrapSpace:y-k.outerHeight(!0),skinSpace:k.height()-j});!H&&(h.autoHeight&&j>u&&j<p&&!c)&&g.height("auto")},_getPosition:function(a){var d=b.current,e=b.getViewport(),c=d.margin,f=b.wrap.width()+c[1]+c[3],g=b.wrap.height()+c[0]+c[2],c={position:"absolute",top:c[0],left:c[3]};d.autoCenter&&d.fixed&&
!a&&g<=e.h&&f<=e.w?c.position="fixed":d.locked||(c.top+=e.y,c.left+=e.x);c.top=w(Math.max(c.top,c.top+(e.h-g)*d.topRatio));c.left=w(Math.max(c.left,c.left+(e.w-f)*d.leftRatio));return c},_afterZoomIn:function(){var a=b.current;a&&(b.isOpen=b.isOpened=!0,b.wrap.css("overflow","visible").addClass("fancybox-opened"),b.update(),(a.closeClick||a.nextClick&&1<b.group.length)&&b.inner.css("cursor","pointer").bind("click.fb",function(d){!f(d.target).is("a")&&!f(d.target).parent().is("a")&&(d.preventDefault(),
b[a.closeClick?"close":"next"]())}),a.closeBtn&&f(a.tpl.closeBtn).appendTo(b.skin).bind("click.fb",function(a){a.preventDefault();b.close()}),a.arrows&&1<b.group.length&&((a.loop||0<a.index)&&f(a.tpl.prev).appendTo(b.outer).bind("click.fb",b.prev),(a.loop||a.index<b.group.length-1)&&f(a.tpl.next).appendTo(b.outer).bind("click.fb",b.next)),b.trigger("afterShow"),!a.loop&&a.index===a.group.length-1?b.play(!1):b.opts.autoPlay&&!b.player.isActive&&(b.opts.autoPlay=!1,b.play()))},_afterZoomOut:function(a){a=
a||b.current;f(".fancybox-wrap").trigger("onReset").remove();f.extend(b,{group:{},opts:{},router:!1,current:null,isActive:!1,isOpened:!1,isOpen:!1,isClosing:!1,wrap:null,skin:null,outer:null,inner:null});b.trigger("afterClose",a)}});b.transitions={getOrigPosition:function(){var a=b.current,d=a.element,e=a.orig,c={},f=50,g=50,h=a.hPadding,j=a.wPadding,m=b.getViewport();!e&&(a.isDom&&d.is(":visible"))&&(e=d.find("img:first"),e.length||(e=d));t(e)?(c=e.offset(),e.is("img")&&(f=e.outerWidth(),g=e.outerHeight())):
(c.top=m.y+(m.h-g)*a.topRatio,c.left=m.x+(m.w-f)*a.leftRatio);if("fixed"===b.wrap.css("position")||a.locked)c.top-=m.y,c.left-=m.x;return c={top:w(c.top-h*a.topRatio),left:w(c.left-j*a.leftRatio),width:w(f+j),height:w(g+h)}},step:function(a,d){var e,c,f=d.prop;c=b.current;var g=c.wrapSpace,h=c.skinSpace;if("width"===f||"height"===f)e=d.end===d.start?1:(a-d.start)/(d.end-d.start),b.isClosing&&(e=1-e),c="width"===f?c.wPadding:c.hPadding,c=a-c,b.skin[f](l("width"===f?c:c-g*e)),b.inner[f](l("width"===
f?c:c-g*e-h*e))},zoomIn:function(){var a=b.current,d=a.pos,e=a.openEffect,c="elastic"===e,k=f.extend({opacity:1},d);delete k.position;c?(d=this.getOrigPosition(),a.openOpacity&&(d.opacity=0.1)):"fade"===e&&(d.opacity=0.1);b.wrap.css(d).animate(k,{duration:"none"===e?0:a.openSpeed,easing:a.openEasing,step:c?this.step:null,complete:b._afterZoomIn})},zoomOut:function(){var a=b.current,d=a.closeEffect,e="elastic"===d,c={opacity:0.1};e&&(c=this.getOrigPosition(),a.closeOpacity&&(c.opacity=0.1));b.wrap.animate(c,
{duration:"none"===d?0:a.closeSpeed,easing:a.closeEasing,step:e?this.step:null,complete:b._afterZoomOut})},changeIn:function(){var a=b.current,d=a.nextEffect,e=a.pos,c={opacity:1},f=b.direction,g;e.opacity=0.1;"elastic"===d&&(g="down"===f||"up"===f?"top":"left","down"===f||"right"===f?(e[g]=w(l(e[g])-200),c[g]="+=200px"):(e[g]=w(l(e[g])+200),c[g]="-=200px"));"none"===d?b._afterZoomIn():b.wrap.css(e).animate(c,{duration:a.nextSpeed,easing:a.nextEasing,complete:b._afterZoomIn})},changeOut:function(){var a=
b.previous,d=a.prevEffect,e={opacity:0.1},c=b.direction;"elastic"===d&&(e["down"===c||"up"===c?"top":"left"]=("up"===c||"left"===c?"-":"+")+"=200px");a.wrap.animate(e,{duration:"none"===d?0:a.prevSpeed,easing:a.prevEasing,complete:function(){f(this).trigger("onReset").remove()}})}};b.helpers.overlay={defaults:{closeClick:!0,speedOut:200,showEarly:!0,css:{},locked:!s,fixed:!0},overlay:null,fixed:!1,el:f("html"),create:function(a){a=f.extend({},this.defaults,a);this.overlay&&this.close();this.overlay=
f('<div class="fancybox-overlay"></div>').appendTo(b.coming?b.coming.parent:a.parent);this.fixed=!1;a.fixed&&b.defaults.fixed&&(this.overlay.addClass("fancybox-overlay-fixed"),this.fixed=!0)},open:function(a){var d=this;a=f.extend({},this.defaults,a);this.overlay?this.overlay.unbind(".overlay").width("auto").height("auto"):this.create(a);this.fixed||(n.bind("resize.overlay",f.proxy(this.update,this)),this.update());a.closeClick&&this.overlay.bind("click.overlay",function(a){if(f(a.target).hasClass("fancybox-overlay"))return b.isActive?
b.close():d.close(),!1});this.overlay.css(a.css).show()},close:function(){var a,b;n.unbind("resize.overlay");this.el.hasClass("fancybox-lock")&&(f(".fancybox-margin").removeClass("fancybox-margin"),a=n.scrollTop(),b=n.scrollLeft(),this.el.removeClass("fancybox-lock"),n.scrollTop(a).scrollLeft(b));f(".fancybox-overlay").remove().hide();f.extend(this,{overlay:null,fixed:!1})},update:function(){var a="100%",b;this.overlay.width(a).height("100%");I?(b=Math.max(G.documentElement.offsetWidth,G.body.offsetWidth),
p.width()>b&&(a=p.width())):p.width()>n.width()&&(a=p.width());this.overlay.width(a).height(p.height())},onReady:function(a,b){var e=this.overlay;f(".fancybox-overlay").stop(!0,!0);e||this.create(a);a.locked&&(this.fixed&&b.fixed)&&(e||(this.margin=p.height()>n.height()?f("html").css("margin-right").replace("px",""):!1),b.locked=this.overlay.append(b.wrap),b.fixed=!1);!0===a.showEarly&&this.beforeShow.apply(this,arguments)},beforeShow:function(a,b){var e,c;b.locked&&(!1!==this.margin&&(f("*").filter(function(){return"fixed"===
f(this).css("position")&&!f(this).hasClass("fancybox-overlay")&&!f(this).hasClass("fancybox-wrap")}).addClass("fancybox-margin"),this.el.addClass("fancybox-margin")),e=n.scrollTop(),c=n.scrollLeft(),this.el.addClass("fancybox-lock"),n.scrollTop(e).scrollLeft(c));this.open(a)},onUpdate:function(){this.fixed||this.update()},afterClose:function(a){this.overlay&&!b.coming&&this.overlay.fadeOut(a.speedOut,f.proxy(this.close,this))}};b.helpers.title={defaults:{type:"float",position:"bottom"},beforeShow:function(a){var d=
b.current,e=d.title,c=a.type;f.isFunction(e)&&(e=e.call(d.element,d));if(q(e)&&""!==f.trim(e)){d=f('<div class="fancybox-title fancybox-title-'+c+'-wrap">'+e+"</div>");switch(c){case "inside":c=b.skin;break;case "outside":c=b.wrap;break;case "over":c=b.inner;break;default:c=b.skin,d.appendTo("body"),I&&d.width(d.width()),d.wrapInner('<span class="child"></span>'),b.current.margin[2]+=Math.abs(l(d.css("margin-bottom")))}d["top"===a.position?"prependTo":"appendTo"](c)}}};f.fn.fancybox=function(a){var d,
e=f(this),c=this.selector||"",k=function(g){var h=f(this).blur(),j=d,k,l;!g.ctrlKey&&(!g.altKey&&!g.shiftKey&&!g.metaKey)&&!h.is(".fancybox-wrap")&&(k=a.groupAttr||"data-fancybox-group",l=h.attr(k),l||(k="rel",l=h.get(0)[k]),l&&(""!==l&&"nofollow"!==l)&&(h=c.length?f(c):e,h=h.filter("["+k+'="'+l+'"]'),j=h.index(this)),a.index=j,!1!==b.open(h,a)&&g.preventDefault())};a=a||{};d=a.index||0;!c||!1===a.live?e.unbind("click.fb-start").bind("click.fb-start",k):p.undelegate(c,"click.fb-start").delegate(c+
":not('.fancybox-item, .fancybox-nav')","click.fb-start",k);this.filter("[data-fancybox-start=1]").trigger("click");return this};p.ready(function(){var a,d;f.scrollbarWidth===v&&(f.scrollbarWidth=function(){var a=f('<div style="width:50px;height:50px;overflow:auto"><div/></div>').appendTo("body"),b=a.children(),b=b.innerWidth()-b.height(99).innerWidth();a.remove();return b});if(f.support.fixedPosition===v){a=f.support;d=f('<div style="position:fixed;top:20px;"></div>').appendTo("body");var e=20===
d[0].offsetTop||15===d[0].offsetTop;d.remove();a.fixedPosition=e}f.extend(b.defaults,{scrollbarWidth:f.scrollbarWidth(),fixed:f.support.fixedPosition,parent:f("body")});a=f(r).width();J.addClass("fancybox-lock-test");d=f(r).width();J.removeClass("fancybox-lock-test");f("<style type='text/css'>.fancybox-margin{margin-right:"+(d-a)+"px;}</style>").appendTo("head")})})(window,document,jQuery);

/*! Copyright (c) 2011 Brandon Aaron (http://brandonaaron.net)
 * Licensed under the MIT License (LICENSE.txt).
 *
 * Thanks to: http://adomas.org/javascript-mouse-wheel/ for some pointers.
 * Thanks to: Mathias Bank(http://www.mathias-bank.de) for a scope bug fix.
 * Thanks to: Seamus Leahy for adding deltaX and deltaY
 *
 * Version: 3.0.6
 * 
 * Requires: 1.2.2+
 */

(function($) {

var types = ['DOMMouseScroll', 'mousewheel'];

if ($.event.fixHooks) {
    for ( var i=types.length; i; ) {
        $.event.fixHooks[ types[--i] ] = $.event.mouseHooks;
    }
}

$.event.special.mousewheel = {
    setup: function() {
        if ( this.addEventListener ) {
            for ( var i=types.length; i; ) {
                this.addEventListener( types[--i], handler, false );
            }
        } else {
            this.onmousewheel = handler;
        }
    },
    
    teardown: function() {
        if ( this.removeEventListener ) {
            for ( var i=types.length; i; ) {
                this.removeEventListener( types[--i], handler, false );
            }
        } else {
            this.onmousewheel = null;
        }
    }
};

$.fn.extend({
    mousewheel: function(fn) {
        return fn ? this.bind("mousewheel", fn) : this.trigger("mousewheel");
    },
    
    unmousewheel: function(fn) {
        return this.unbind("mousewheel", fn);
    }
});


function handler(event) {
    var orgEvent = event || window.event, args = [].slice.call( arguments, 1 ), delta = 0, returnValue = true, deltaX = 0, deltaY = 0;
    event = $.event.fix(orgEvent);
    event.type = "mousewheel";
    
    // Old school scrollwheel delta
    if ( orgEvent.wheelDelta ) { delta = orgEvent.wheelDelta/120; }
    if ( orgEvent.detail     ) { delta = -orgEvent.detail/3; }
    
    // New school multidimensional scroll (touchpads) deltas
    deltaY = delta;
    
    // Gecko
    if ( orgEvent.axis !== undefined && orgEvent.axis === orgEvent.HORIZONTAL_AXIS ) {
        deltaY = 0;
        deltaX = -1*delta;
    }
    
    // Webkit
    if ( orgEvent.wheelDeltaY !== undefined ) { deltaY = orgEvent.wheelDeltaY/120; }
    if ( orgEvent.wheelDeltaX !== undefined ) { deltaX = -1*orgEvent.wheelDeltaX/120; }
    
    // Add event and delta to the front of the arguments
    args.unshift(event, delta, deltaX, deltaY);
    
    return ($.event.dispatch || $.event.handle).apply(this, args);
}

})(jQuery);

/**
 * @version		2.0
 * @package		jquery
 * @subpackage	lofslidernews
 * @copyright	Copyright (C) JAN 2010 LandOfCoder.com <@emai:landofcoder@gmail.com>. All rights reserved.
 * @website     http://landofcoder.com
 * @license		This plugin is dual-licensed under the GNU General Public License and the MIT License 
 */
// JavaScript Document
(function($) {
	 $.fn.lofJSidernews = function( settings ) {
	 	return this.each(function() {
			// get instance of the lofSiderNew.
			new  $.lofSidernews( this, settings ); 
		});
 	 }
	 $.lofSidernews = function( obj, settings ){
		this.settings = {
			direction	    	: '',
			mainItemSelector    : 'li',
			navInnerSelector	: 'ul',
			navSelector  		: 'li' ,
			navigatorEvent		: 'click'/* click|mouseenter */,
			wapperSelector: 	'.sliders-wrap-inner',
			interval	  	 	: 5000,
			auto			    : false, // whether to automatic play the slideshow
			maxItemDisplay	 	: 3,
			startItem			: 0,
			navPosition			: 'vertical',/* values: horizontal|vertical*/ 
			navigatorHeight		: 100,
			navigatorWidth		: 310,
			duration			: 600,
			mobile				: false,
			navItemsSelector    : '.navigator-wrap-inner li',
			navOuterSelector    : '.navigator-wrapper' ,
			isPreloaded			: true,
			easing				: 'easeInOutQuad',
			onPlaySlider:function(obj, slider){},
			onComplete:function(slider, index){  }
		}	
		$.extend( this.settings, settings ||{} );	
		this.nextNo         = null;
		this.previousNo     = null;
		this.maxWidth  = this.settings.mainWidth || 684;
		
		

		this.wrapper = $( obj ).find( this.settings.wapperSelector );	
		var wrapOuter = $('<div class="sliders-wrapper"></div>').width( this.maxWidth );
		this.wrapper.wrap( wrapOuter );
		
		this.slides = this.wrapper.find( this.settings.mainItemSelector ); 
		if( !this.wrapper.length || !this.slides.length ) return ;
		// set width of wapper
		if( this.settings.maxItemDisplay > this.slides.length ){
			this.settings.maxItemDisplay = this.slides.length;	
		}
		this.currentNo      = isNaN(this.settings.startItem)||this.settings.startItem > this.slides.length?0:this.settings.startItem;
		this.navigatorOuter = $( obj ).find( this.settings.navOuterSelector );	
		this.navigatorItems = $( obj ).find( this.settings.navItemsSelector ) ;
		this.navigatorInner = this.navigatorOuter.find( this.settings.navInnerSelector );
		// if use automactic calculate width of navigator
		
	 	if( this.settings.navigatorHeight == null || this.settings.navigatorWidth == null ){
			this.settings.navigatorHeight = this.navigatorItems.eq(0).outerWidth(true);
			this.settings.navigatorWidth = this.navigatorItems.eq(0).outerHeight(true);
			
		}
		if( this.settings.navPosition == 'horizontal' ){ 
			this.navigatorInner.width( this.slides.length * this.settings.navigatorWidth );
			this.navigatorOuter.width( this.settings.maxItemDisplay * this.settings.navigatorWidth );
			this.navigatorOuter.height(	this.settings.navigatorHeight );
			
		} else {
			this.navigatorInner.height( this.slides.length * this.settings.navigatorHeight );	
			
			this.navigatorOuter.height( this.settings.maxItemDisplay * this.settings.navigatorHeight );
			this.navigatorOuter.width(	this.settings.navigatorWidth );
		}		
		this.slides.width( this.settings.mainWidth );	
		this.navigratorStep = this.__getPositionMode( this.settings.navPosition );		 
		this.directionMode = this.__getDirectionMode();  
		
		
		if( this.settings.direction == 'opacity') {
			this.wrapper.addClass( 'lof-opacity' );
			$(this.slides).css({'opacity':0,'z-index':1}).eq(this.currentNo).css({'opacity':1,'z-index':3});
		} else { 
			this.wrapper.css({'left':'-'+this.currentNo*this.maxSize+'px', 'width':( this.maxWidth ) * this.slides.length } );
		}

		
		if( this.settings.isPreloaded ) {
			this.preLoadImage( this.onComplete );
		} else {
			this.onComplete();
		}
		
		$buttonControl = $( ".button-control", obj);
		if( this.settings.auto ){
			$buttonControl.addClass("action-stop");
		} else {
			$buttonControl.addClass("action-start");
		}
		var self = this;
		
		$( obj ).hover(function(){
				self.stop();	
				$buttonControl.addClass("action-start").removeClass("action-stop").addClass("hover-stop");
		}, function(){
			if( $buttonControl.hasClass("hover-stop") ){
		
				if(	self.settings.auto ){
					$buttonControl.removeClass("action-start").removeClass("hover-stop").addClass("action-stop");
					self.play( self.settings.interval,'next', true );		
				}
			}
		} );
		
		
		$buttonControl.click( function() {
			if( $buttonControl.hasClass("action-start") ){
				self.settings.auto =true;
				self.play( self.settings.interval,'next', true );
				$buttonControl.removeClass("action-start").addClass("action-stop");
			} else{
				self.settings.auto =false;
				self.stop();	
				$buttonControl.addClass("action-start").removeClass("action-stop");
			}
		} );
		if(self.settings.mobile){
			self.slides.each(function(i, item){
				$(item).swipe( {
					swipeLeft:function(event, direction, distance, duration, fingerCount) {
						self.next( true);
			        },
			        swipeRight:function(event, direction, distance, duration, fingerCount) {
						self.previous( true);
			        },
			        //Default is 75px, set to 0 for demo so any distance triggers swipe
			        threshold:0
				} );
			})
		}
	 }
     $.lofSidernews.fn =  $.lofSidernews.prototype;
     $.lofSidernews.fn.extend =  $.lofSidernews.extend = $.extend;
	 
	 $.lofSidernews.fn.extend({
							  
		startUp:function( obj, wrapper ) {
			seft = this;

			this.navigatorItems.each( function(index, item ){
				$(item).bind( seft.settings.navigatorEvent,( function(){
					seft.jumping( index, true );
					seft.setNavActive( index, item );					
				} ));
				$(item).css( {'height': seft.settings.navigatorHeight, 'width':  seft.settings.navigatorWidth} );
			})
			this.registerWheelHandler( this.navigatorOuter, this );
			this.setNavActive( this.currentNo );
			this.settings.onComplete( this.slides.eq(this.currentNo ),this.currentNo  );
			if( this.settings.buttons && typeof (this.settings.buttons) == "object" ){
				this.registerButtonsControl( 'click', this.settings.buttons, this );

			}
			if( this.settings.auto ) 
			this.play( this.settings.interval,'next', true );
			
			return this;
		},
		onComplete:function(){
			setTimeout( function(){ $('.preload').fadeOut( 900, function(){  $('.preload').remove(); } ); }, 400 );	this.startUp( );
		},
		preLoadImage:function(  callback ){
			var self = this;
			var images = this.wrapper.find( 'img' );
	
			var count = 0;
			images.each( function(index,image){ 
				if( !image.complete ){				  
					image.onload =function(){
						count++;
						if( count >= images.length ){
							self.onComplete();
						}
					}
					image.onerror =function(){ 
						count++;
						if( count >= images.length ){
							self.onComplete();
						}	
					}
				}else {
					count++;
					if( count >= images.length ){
						self.onComplete();
					}	
				}
			} );
		},
		navivationAnimate:function( currentIndex ) { 
			if (currentIndex <= this.settings.startItem 
				|| currentIndex - this.settings.startItem >= this.settings.maxItemDisplay-1) {
					this.settings.startItem = currentIndex - this.settings.maxItemDisplay+2;
					if (this.settings.startItem < 0) this.settings.startItem = 0;
					if (this.settings.startItem >this.slides.length-this.settings.maxItemDisplay) {
						this.settings.startItem = this.slides.length-this.settings.maxItemDisplay;
					}
			}		
		
			this.navigatorInner.stop().animate( eval('({'+this.navigratorStep[0]+':-'+this.settings.startItem*this.navigratorStep[1]+'})'), 
												{duration:500, easing:'easeInOutQuad'} );	
		},
		setNavActive:function( index, item ){
			if( (this.navigatorItems) ){ 
				this.navigatorItems.removeClass( 'active' );
				$(this.navigatorItems.get(index)).addClass( 'active' );	
				this.navivationAnimate( this.currentNo );	
			}
		},
		__getPositionMode:function( position ){
			if(	position  == 'horizontal' ){
				return ['left', this.settings.navigatorWidth];
			}
			return ['top', this.settings.navigatorHeight];
		},
		__getDirectionMode:function(){
			switch( this.settings.direction ){
				case 'opacity': this.maxSize=0; return ['opacity','opacity'];
				default: this.maxSize=this.maxWidth; return ['left','width'];
			}
		},
		registerWheelHandler:function( element, obj ){ 
			 element.bind('mousewheel', function(event, delta ) {
				var dir = delta > 0 ? 'Up' : 'Down',
					vel = Math.abs(delta);
				if( delta > 0 ){
					obj.previous( true );
				} else {
					obj.next( true );
				}
				return false;
			});
		},
		registerButtonsControl:function( eventHandler, objects, self ){ 
			for( var action in objects ){ 
				switch (action.toString() ){
					case 'next':
						objects[action].click( function() { self.next( true) } );
						break;
					case 'previous':
						objects[action].click( function() { self.previous( true) } );
						break;
				}
			}
			return this;	
		},
		onProcessing:function( manual, start, end ){	 		
			this.previousNo = this.currentNo + (this.currentNo>0 ? -1 : this.slides.length-1);
			this.nextNo 	= this.currentNo + (this.currentNo < this.slides.length-1 ? 1 : 1- this.slides.length);				
			return this;
		},
		finishFx:function( manual ){
			if( manual ) this.stop();
			if( manual && this.settings.auto ){ 
				this.play( this.settings.interval,'next', true );
			}		
			this.setNavActive( this.currentNo );
			this.settings.onPlaySlider( this, $(this.slides).eq(this.currentNo) );
		},
		getObjectDirection:function( start, end ){
			return eval("({'"+this.directionMode[0]+"':-"+(this.currentNo*start)+"})");	
		},
		fxStart:function( index, obj, currentObj ){
				var s = this;
				if( this.settings.direction == 'opacity' ) { 
					
					$(this.slides).stop().animate({opacity:0}, {duration: this.settings.duration, easing:this.settings.easing,complete:function(){ 
																					s.slides.css("z-index","1")
																					s.slides.eq(index).css("z-index","3");															
																						}} );
					$(this.slides).eq(index).stop().animate( {opacity:1}, { duration : this.settings.duration, 
																		    easing   :this.settings.easing,
																		    complete :function(){ s.settings.onComplete($(s.slides).eq(index),index); }} );
				}else {
					this.wrapper.stop().animate( obj, {duration: this.settings.duration, easing:this.settings.easing,complete:function(){ 
																										s.settings.onComplete($(s.slides).eq(index),index)								   
																									} } );
				}
			return this;
		},
		jumping:function( no, manual ){
			this.stop(); 
			if( this.currentNo == no ) return;		
			 var obj = eval("({'"+this.directionMode[0]+"':-"+(this.maxSize*no)+"})");
			this.onProcessing( null, manual, 0, this.maxSize )
				.fxStart( no, obj, this )
				.finishFx( manual );	
				this.currentNo  = no;
		},
		next:function( manual , item){

			this.currentNo += (this.currentNo < this.slides.length-1) ? 1 : (1 - this.slides.length);	
			this.onProcessing( item, manual, 0, this.maxSize )
				.fxStart( this.currentNo, this.getObjectDirection(this.maxSize ), this )
				.finishFx( manual );
		},
		previous:function( manual, item ){
			this.currentNo += this.currentNo > 0 ? -1 : this.slides.length - 1;
			this.onProcessing( item, manual )
				.fxStart( this.currentNo, this.getObjectDirection(this.maxSize ), this )
				.finishFx( manual	);			
		},
		play:function( delay, direction, wait ){	
			this.stop(); 
			if(!wait){ this[direction](false); }
			var self  = this;
			this.isRun = setTimeout(function() { self[direction](true); }, delay);
		},
		stop:function(){ 
			if (this.isRun == null) return;
			clearTimeout(this.isRun);
            this.isRun = null; 
		}
	})
})(jQuery);


/*! (c) Mat Marquis (@wilto). MIT License. http://wil.to/3a */
(function( $, undefined ) {

	var inst = 0;

	$.fn.getPercentage = function() {
		var oPercent = this.attr('style').match(/margin\-left:(.*[0-9])/i) && parseInt(RegExp.$1);

		return oPercent;
	};

	$.fn.adjRounding = function(slide) {
		var $el = $(this),
			$slides = $el.find( slide ),
			diff = $el.parent().width() - $slides.eq(0).width();

		if (diff !== 0) {
			$slides.css( "position", "relative" );
			
			for (var i = 0; i < $slides.length; i++) {
				$slides.eq(i).css( "left", (diff * i) + "px" );
			}
		}

		return this;
	};

	$.fn.carousel = function(config) {

		// Prevent re-init:
		if( this.data( "carousel-initialized" ) ) { return; }

		// Carousel is being initialized:
		this.data( "carousel-initialized", true );

		var defaults = {
			slider			: '.slider',
			slide			: '.slide',
			prevSlide		: null,
			nextSlide		: null,
			slideHed		: null,
			addPagination	: false,
			addNav			: ( config != undefined && ( config.prevSlide || config.nextSlide ) ) ? false : true,
			namespace		: 'carousel',
			speed			: 600,
			backToStart		: true
		},
		opt               = $.extend(defaults, config),
		$slidewrap        = this,
		dBody            = (document.body || document.documentElement),
		transitionSupport = function() {
		    dBody.setAttribute('style', 'transition:top 1s ease;-webkit-transition:top 1s ease;-moz-transition:top 1s ease;');
			var tSupport = !!(dBody.style.transition || dBody.style.webkitTransition || dBody.style.msTransition || dBody.style.OTransition || dBody.style.MozTransition )

			return tSupport;
		},
		carousel = {
			init : function() {
				inst++;

				$slidewrap.each(function(carInt) {
						var $wrap      = $(this),
							$slider    = $wrap.find(opt.slider),
							$slide     = $wrap.find(opt.slide),
							slidenum   = $slide.length,
							transition = "margin-left " + ( opt.speed / 1000 ) + "s ease",
							tmp        = 'carousel-' + inst + '-' + carInt;

						if( $slide.length <= 1 ) {
							return; /* No sense running all this code if the carousel functionality is unnecessary. */
						}

						$wrap
							.css({
								"overflow"           : "hidden",
								"width"              : "100%"
							})
							.attr('role' , 'application');

						$slider
							.attr( 'id', ( $slider[0].id || 'carousel-' + inst + '-' + carInt ) )
							.css({
								"marginLeft"         : "0px",
								"float"              : "left",
								"width"              : 100 * slidenum + "%",
								"-webkit-transition" : transition,
								"-moz-transition"    : transition,
								"-ms-transition"     : transition,
								"-o-transition"      : transition,
								"transition"         : transition
							})
							.bind( 'carouselmove' , carousel.move )
							.bind( 'nextprev'     , carousel.nextPrev )
							.bind( 'navstate'     , carousel.navState );

						$slide
							.css({
								"float": "left",
								width: (100 / slidenum) + "%"
							})
							.each(function(i) {
								var $el = $(this);

								$el.attr({
									"role" : "tabpanel document",
									"id"   : tmp + '-slide' + i
								});

								if( opt.addPagination ) {
									$el.attr('aria-labelledby', tmp + '-tab' + i);
								}
							});

						// Build and insert navigation/pagination, if specified in the options:
						opt.addPagination   && carousel.addPagination();
						opt.addNav 			&& carousel.addNav();

						$slider.trigger( "navstate", { "current": 0 });
				});
			},
			addNav : function() {
				$slidewrap.each(function(i) {
					var $oEl = $(this),
						$slider = $oEl.find(opt.slider),
						currentSlider = $slider[0].id,
						navMarkup = [
							'<ul class="slidecontrols" role="navigation">',
							'	<li role="presentation"><a href="#' + currentSlider + '" class="' + opt.namespace + '-next">Next</a></li>',
							'	<li role="presentation"><a href="#' + currentSlider + '" class="' + opt.namespace + '-prev">Prev</a></li>',
							'</ul>'
							].join(''),
						nextprev = {
							nextSlide : '.' + opt.namespace + '-next',
							prevSlide : '.' + opt.namespace + '-prev'
						};

					opt = $.extend(opt, nextprev);

					$oEl.prepend(navMarkup);
				});
			},
			addPagination : function() {
				$slidewrap.each(function(i) {
					var $oEl        = $(this),
						$pagination = $('<ol class="' + opt.namespace + '-tabs" role="tablist navigation" />'),
						$slider     = $oEl.find(opt.slider),
						$slides     = $oEl.find(opt.slide)
						slideNum    = $slides.length,
						associated  = 'carousel-' + inst + '-' + i;

					while( slideNum-- ) {
						var hed = $slides.eq(slideNum).find( opt.slideHed ).text() || 'Page ' + ( slideNum + 1 ),
							tabMarkup = [
								'<li role="presentation">',
									'<a href="#' + associated + '-slide' + slideNum +'"',
									' aria-controls="' + associated + '-slide' + slideNum +'"',
									' id="' + associated + '-tab' + slideNum + '" role="tab">' + hed + '</a>',
								'</li>'
							].join('');

						$pagination.prepend(tabMarkup);
					};

					$pagination
						.appendTo( $oEl )
						.find('li').keydown( function(e) {
							var $el      = $(this),
								$prevTab = $el.prev().find('a'),
								$nextTab = $el.next().find('a');

							switch( e.which ) {
								case 37:
								case 38:
									$prevTab.length && $prevTab.trigger('click').focus();
									e.preventDefault();
									break;
								case 39:
								case 40:
									$nextTab.length && $nextTab.trigger('click').focus();
									e.preventDefault();
									break;
							}
						})
						.find('a').click( function(e) {
							var $el = $(this);

							if( $el.attr('aria-selected') == 'false' ) {
								var current = $el.parent().index(),
									move    = -( 100 * ( current ) ),
									$slider = $oEl.find( opt.slider );

								$slider.trigger( 'carouselmove', { moveTo: move });
							}
							e.preventDefault();
						});
				});
			},
			roundDown : function(oVal) {
				var val = parseInt(oVal, 10);

				return Math.ceil( (val - (val % 100 ) ) / 100) * 100;
			},
			navState : function(e, ui) {
				var $el          = $(this),
					$slides      = $el.find(opt.slide),
					ind          = -(ui.current / 100),
					$activeSlide = $slides.eq(ind);

				$el.attr('aria-activedescendant', $activeSlide[0].id);

				// Update state of active tabpanel:
				$activeSlide
					.addClass( opt.namespace + "-active-slide" )
					.attr( 'aria-hidden', false )
					.siblings()
						.removeClass( opt.namespace + "-active-slide" )
						.attr( 'aria-hidden', true );

				// Update state of next/prev navigation:
				if( ( !!opt.prevSlide || !!opt.nextSlide ) ) {
					var $target = $('[href*="#' + this.id + '"]');

					$target.removeClass( opt.namespace + '-disabled' );
					if(!opt.backToStart) {
						if( ind == 0 ) {
							$target.filter(opt.prevSlide).addClass( opt.namespace + '-disabled' );
						} else if( ind == $slides.length - 1 ) {
							$target.filter(opt.nextSlide).addClass( opt.namespace + '-disabled' );
						}
					}
				}

				// Update state of pagination tabs:
				if( !!opt.addPagination ) {
					var tabId = $activeSlide.attr('aria-labelledby'),
						$tab  = $('#' + tabId );

					$tab
						.parent()
						.addClass(opt.namespace + '-active-tab')
						.siblings()
						.removeClass(opt.namespace + '-active-tab')
						.find('a')
							.attr({
								'aria-selected' : false,
								'tabindex' : -1
							});

					$tab.attr({
						'aria-selected' : true,
						'tabindex' : 0
					});
				}
			},
			move : function(e, ui) {
				var $el = $(this);

				$el
					.trigger(opt.namespace + "-beforemove")
					.trigger("navstate", { current: ui.moveTo });

				if( transitionSupport() ) {

					$el
						.adjRounding( opt.slide ) /* Accounts for browser rounding errors. Lookinâ€™ at you, iOS Safari. */
						.css('marginLeft', ui.moveTo + "%")
						.one("transitionend webkitTransitionEnd OTransitionEnd", function() {
							$(this).trigger( opt.namespace + "-aftermove" );
						});

				} else {
					$el
						.adjRounding( opt.slide )
						.animate({ "marginLeft": ui.moveTo + "%" }, { "duration" : opt.speed, "queue" : false }, function() {
							$(this).trigger( opt.namespace + "-aftermove" );
						});
				}
			},
			nextPrev : function(e, ui) {
				var $el = $(this),
					left = ( $el ) ? $el.getPercentage() : 0,
					$slide = $el.find(opt.slide),
					constrain = ui.dir === 'prev' ? left != 0 : -left < ($slide.length - 1) * 100,
					$target = $( '[href="#' + this.id + '"]');
					
				if (!$el.is(":animated") && constrain ) {
					
					if ( ui.dir === 'prev' ) {
						left = ( left % 100 != 0 ) ? carousel.roundDown(left) : left + 100;
					} else {
						left = ( ( left % 100 ) != 0 ) ? carousel.roundDown(left) - 100 : left - 100;
					}
					
					$el.trigger('carouselmove', { 'moveTo': left });

					$target
						.removeClass( opt.namespace + '-disabled')
						.removeAttr('aria-disabled');

					if(!opt.backToStart) {
						switch( left ) {
							case ( -($slide.length - 1) * 100 ):
								$target.filter(opt.nextSlide)
									.addClass( opt.namespace + '-disabled')
									.attr('aria-disabled', true);
								break;
							case 0:
								$target.filter(opt.prevSlide)
									.addClass( opt.namespace + '-disabled')
									.attr('aria-disabled', true);
								break;
						}
					}
				} else {
					var reset = carousel.roundDown(left);
					
					if(opt.backToStart) {					
						if ( ui.dir === 'next' ) {
							left = 0;
						} else if ( ui.dir === 'prev' && ui.event === 'notauto' ) {
							left = -($slide.length - 1) * 100;
						}
						$el.trigger('carouselmove', { 'moveTo': left });
					} else {
						$el.trigger('carouselmove', { 'moveTo': reset });
					}
				}

			}
		};

		carousel.init(this);

		$(opt.nextSlide + ',' + opt.prevSlide)
			.bind('click', function(e) {
				var $el = $(this),
					link = this.hash,
					dir = ( $el.is(opt.prevSlide) ) ? 'prev' : 'next',
					$slider = $(link),
					event = '';

					if ( $el.is('.' + opt.namespace + '-disabled') ) {
						return false;
					}

					if(opt.backToStart) {
						event = 'notauto';
					} else {
						event = '';
					}
					
					$slider.trigger('nextprev', { 'dir': dir, 'event': event });

				e.preventDefault();
			})
			.bind('keydown', function(e) {
				var $el = $(this),
			            link = this.hash,
				    event = '';
				
				if(opt.backToStart) {
					event = 'notauto';
				} else {
					event = '';
				}
				
				switch (e.which) {
					case 37:
					case 38:
						$('#' + link).trigger('nextprev', { 'dir': 'next', 'event': event });
						e.preventDefault();
						break;
					case 39:
					case 40:
						$('#' + link).trigger('nextprev', { 'dir': 'prev', 'event': event });
						e.preventDefault();
						break;
				}
			});

		var setup = {
			'wrap' : this,
			'slider' : opt.slider
		};
		$slidewrap.bind( "dragSnap", setup, function(e, ui){
			var $slider = $(this).find( opt.slider ),
			    dir = ( ui.direction === "left" ) ? 'next' : 'prev',
			    event = '';

			if (opt.backToStart) {
				event = 'notauto';
			} else {
				event = '';
			}

			$slider.trigger("nextprev", { 'dir': dir, 'event': event });
		});


		$slidewrap.filter('[data-autorotate]').each(function() {
			var auto,
				$el         = $(this),
				speed       = $el.attr('data-autorotate'),
				slidenum    = $el.find(opt.slide).length,
				autoAdvance = function() {
					var $slider  = $el.find(opt.slider),
						active   = -( $(opt.slider).getPercentage() / 100 ) + 1;
						
					switch( active ) {
						case slidenum:
							clearInterval(auto);
							
							auto = setInterval(function() {
								autoAdvance();
								$slider.trigger("nextprev", { 'dir': 'prev' });
							}, speed);

							break;
						case 1:
							clearInterval(auto);

							auto = setInterval(function() {
								autoAdvance();
								$slider.trigger("nextprev", { 'dir': 'next' });
							}, speed);

							break;
					}
				};

			auto = setInterval(autoAdvance, speed);

			$el
				.attr('aria-live', 'polite')
				.bind('mouseenter click touchstart', function() {
					clearInterval(auto);
				});
		});

		return this;
	};

	$.event.special.dragSnap = {
		setup: function(setup) {

			var $el = $(this),
				transitionSwap = function($el, tog) {
					var speed = .3,
						transition = ( tog ) ? "margin-left " + speed + "s ease" : 'none';

					$el.css({
						"-webkit-transition" : transition,
						"-moz-transition"    : transition,
						"-ms-transition"     : transition,
						"-o-transition"      : transition,
						"transition"         : transition
					});
				},
				roundDown = function(left) {
					var left = parseInt(left, 10);

					return Math.ceil( (left - (left % 100 ) ) / 100) * 100;
				},
				snapBack = function(e, ui) {
					var $el = ui.target,
						currentPos = ( $el.attr('style') != undefined ) ? $el.getPercentage() : 0,
						left = (ui.left === false) ? roundDown(currentPos) - 100 : roundDown(currentPos),
						dBody = document.body,
						transitionSupport = function() {
						    dBody.setAttribute('style', 'transition:top 1s ease;-webkit-transition:top 1s ease;-moz-transition:top 1s ease;');
							var tSupport = !!(dBody.style.transition || dBody.style.webkitTransition || dBody.style.MozTransition )

							return tSupport;
						};

					transitionSwap($el, true);

					if( transitionSupport() ) {
						$el.css('marginLeft', left + "%");
					} else {
						$el.animate({ marginLeft: left + "%" }, opt.speed);
					}
				};

			$el
				.bind("snapback", snapBack)
				.bind("touchstart", function(e) {
					var data = e.originalEvent.touches ? e.originalEvent.touches[0] : e,
						$target = $(e.target),
						start = {
							'time': +new Date,
							'coords': [ data.pageX, data.pageY ],
							'origin': $target.closest( setup.wrap ),
							'interacting': false
						},
						stop,
						$tEl = $target.closest( setup.slider ),
						currentPos = ( $tEl.attr('style') != undefined ) ? $tEl.getPercentage() : 0;

					transitionSwap($tEl, false);

					function moveHandler(e) {
						var data = e.originalEvent.touches ? e.originalEvent.touches[0] : e;
							stop = {
								'time': +new Date,
								'coords': [ data.pageX, data.pageY ]
							},
							deltaX = Math.abs( start.coords[0] - data.pageX ),
							deltaY = Math.abs( start.coords[1] - data.pageY );

						if( !start || deltaX < deltaY || deltaX < 55 ) {
							return;
						}

						// prevent scrolling
						if ( deltaX >= 55 ) {
							start.interacting = true;
							$tEl.css({"margin-left": currentPos + ( ( (stop.coords[0] - start.coords[0]) / start.origin.width() ) * 100 ) + '%' });
							e.preventDefault();
						} else {
							return;
						}
					};

					$el
						.bind("gesturestart", function(e) {
							$el
								.unbind("touchmove", moveHandler)
								.unbind("touchend", moveHandler);
						})
						.bind("touchmove", moveHandler)
						.one("touchend", function(e) {
							$el.unbind("touchmove", moveHandler);

							transitionSwap($tEl, true);

						if (start && stop ) {
						    var deltaX = Math.abs(start.coords[0] - stop.coords[0]),
								deltaY = Math.abs(start.coords[1] - stop.coords[1]),
								left = start.coords[0] > stop.coords[0],
								jumppoint;

								if( deltaX > 20 && ( deltaX > deltaY ) ) {
									e.preventDefault();
								} else {
									if( start.interacting ) {
										$el.trigger('snapback', { 'target': $tEl, 'left': left });
									}
									return;
								}

								jumppoint = start.origin.width() / 4;

								if( -deltaX > jumppoint || deltaX > jumppoint ) {
									start.origin.trigger("dragSnap", {'direction': left ? "left" : "right"});
								} else {
									$el.trigger('snapback', { 'target': $tEl, 'left': left });
								}
						}
						start = stop = undefined;
					});
			});
		}
	};

})(jQuery);


/**
 * jquery.calendario.js v1.0.0
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2012, Codrops
 * http://www.codrops.com
 */
;( function( $, window, undefined ) {
	
	'use strict';

	$.Calendario = function( options, element ) {
		
		this.$el = $( element );
		this._init( options );
		
	};

	// the options
	$.Calendario.defaults = {
		/*
		you can also pass:
		month : initialize calendar with this month (1-12). Default is today.
		year : initialize calendar with this year. Default is today.
		caldata : initial data/content for the calendar.
		caldata format:
		{
			'MM-DD-YYYY' : 'HTML Content',
			'MM-DD-YYYY' : 'HTML Content',
			'MM-DD-YYYY' : 'HTML Content'
			...
		}
		*/
		weeks : [ 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday' ],
		weekabbrs : [ 'Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat' ],
		months : [ 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' ],
		monthabbrs : [ 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' ],
		// choose between values in options.weeks or options.weekabbrs
		displayWeekAbbr : false,
		// choose between values in options.months or options.monthabbrs
		displayMonthAbbr : false,
		// left most day in the calendar
		// 0 - Sunday, 1 - Monday, ... , 6 - Saturday
		startIn : 1,
		onDayClick : function( $el, $content, dateProperties ) { return false; }
	};

	$.Calendario.prototype = {

		_init : function( options ) {
			
			// options
			this.options = $.extend( true, {}, $.Calendario.defaults, options );

			this.today = new Date();
			this.month = ( isNaN( this.options.month ) || this.options.month == null) ? this.today.getMonth() : this.options.month - 1;
			this.year = ( isNaN( this.options.year ) || this.options.year == null) ? this.today.getFullYear() : this.options.year;
			this.caldata = this.options.caldata || {};
			this._generateTemplate();
			this._initEvents();

		},
		_initEvents : function() {

			var self = this;

			this.$el.on( 'click.calendario', 'div.fc-row > div', function() {

				var $cell = $( this ),
					idx = $cell.index(),
					$content = $cell.children( 'div' ),
					dateProp = {
						day : $cell.children( 'span.fc-date' ).text(),
						month : self.month + 1,
						monthname : self.options.displayMonthAbbr ? self.options.monthabbrs[ self.month ] : self.options.months[ self.month ],
						year : self.year,
						weekday : idx + self.options.startIn,
						weekdayname : self.options.weeks[ idx + self.options.startIn ]
					};

				if( dateProp.day ) {
					self.options.onDayClick( $cell, $content, dateProp );
				}

			} );

		},
		// Calendar logic based on http://jszen.blogspot.pt/2007/03/how-to-build-simple-calendar-with.html
		_generateTemplate : function( callback ) {

			var head = this._getHead(),
				body = this._getBody(),
				rowClass;

			switch( this.rowTotal ) {
				case 4 : rowClass = 'fc-four-rows'; break;
				case 5 : rowClass = 'fc-five-rows'; break;
				case 6 : rowClass = 'fc-six-rows'; break;
			}

			this.$cal = $( '<div class="fc-calendar ' + rowClass + '">' ).append( head, body );

			this.$el.find( 'div.fc-calendar' ).remove().end().append( this.$cal );

			if( callback ) { callback.call(); }

		},
		_getHead : function() {

			var html = '<div class="fc-head">';
		
			for ( var i = 0; i <= 6; i++ ) {

				var pos = i + this.options.startIn,
					j = pos > 6 ? pos - 6 - 1 : pos;

				html += '<div>';
				html += this.options.displayWeekAbbr ? this.options.weekabbrs[ j ] : this.options.weeks[ j ];
				html += '</div>';

			}

			html += '</div>';

			return html;

		},
		_getBody : function() {

			var d = new Date( this.year, this.month + 1, 0 ),
				// number of days in the month
				monthLength = d.getDate(),
				firstDay = new Date( this.year, this.month, 1 );

			// day of the week
			this.startingDay = firstDay.getDay();

			var html = '<div class="fc-body"><div class="fc-row">',
				// fill in the days
				day = 1;

			// this loop is for weeks (rows)
			for ( var i = 0; i < 7; i++ ) {

				// this loop is for weekdays (cells)
				for ( var j = 0; j <= 6; j++ ) {

					var pos = this.startingDay - this.options.startIn,
						p = pos < 0 ? 6 + pos + 1 : pos,
						inner = '',
						today = this.month === this.today.getMonth() && this.year === this.today.getFullYear() && day === this.today.getDate(),
						content = '';
					
					if ( day <= monthLength && ( i > 0 || j >= p ) ) {

						inner += '<span class="fc-date">' + day + '</span><span class="fc-weekday">' + this.options.weekabbrs[ j + this.options.startIn > 6 ? j + this.options.startIn - 6 - 1 : j + this.options.startIn ] + '</span>';

						// this day is:
						var strdate = ( this.month + 1 < 10 ? '0' + ( this.month + 1 ) : this.month + 1 ) + '-' + ( day < 10 ? '0' + day : day ) + '-' + this.year,
							dayData = this.caldata[ strdate ];

						if( dayData ) {
							content = dayData;
						}

						if( content !== '' ) {
							inner += '<div>' + content + '</div>';
						}

						++day;

					}
					else {
						today = false;
					}

					var cellClasses = today ? 'fc-today ' : '';
					if( content !== '' ) {
						cellClasses += 'fc-content';
					}

					html += cellClasses !== '' ? '<div>' : '<div>';
					html += inner;
					html += '</div>';

				}

				// stop making rows if we've run out of days
				if (day > monthLength) {
					this.rowTotal = i + 1;
					break;
				} 
				else {
					html += '</div><div class="fc-row">';
				}

			}
			html += '</div></div>';

			return html;

		},
		// based on http://stackoverflow.com/a/8390325/989439
		_isValidDate : function( date ) {

			date = date.replace(/-/gi,'');
			var month = parseInt( date.substring( 0, 2 ), 10 ),
				day = parseInt( date.substring( 2, 4 ), 10 ),
				year = parseInt( date.substring( 4, 8 ), 10 );

			if( ( month < 1 ) || ( month > 12 ) ) {
				return false;
			}
			else if( ( day < 1 ) || ( day > 31 ) )  {
				return false;
			}
			else if( ( ( month == 4 ) || ( month == 6 ) || ( month == 9 ) || ( month == 11 ) ) && ( day > 30 ) )  {
				return false;
			}
			else if( ( month == 2 ) && ( ( ( year % 400 ) == 0) || ( ( year % 4 ) == 0 ) ) && ( ( year % 100 ) != 0 ) && ( day > 29 ) )  {
				return false;
			}
			else if( ( month == 2 ) && ( ( year % 100 ) == 0 ) && ( day > 29 ) )  {
				return false;
			}

			return {
				day : day,
				month : month,
				year : year
			};

		},
		_move : function( period, dir, callback ) {

			if( dir === 'previous' ) {
				
				if( period === 'month' ) {
					this.year = this.month > 0 ? this.year : --this.year;
					this.month = this.month > 0 ? --this.month : 11;
				}
				else if( period === 'year' ) {
					this.year = --this.year;
				}

			}
			else if( dir === 'next' ) {

				if( period === 'month' ) {
					this.year = this.month < 11 ? this.year : ++this.year;
					this.month = this.month < 11 ? ++this.month : 0;
				}
				else if( period === 'year' ) {
					this.year = ++this.year;
				}

			}

			this._generateTemplate( callback );

		},
		/************************* 
		******PUBLIC METHODS *****
		**************************/
		getYear : function() {
			return this.year;
		},
		getMonth : function() {
			return this.month + 1;
		},
		getMonthName : function() {
			return this.options.displayMonthAbbr ? this.options.monthabbrs[ this.month ] : this.options.months[ this.month ];
		},
		// gets the cell's content div associated to a day of the current displayed month
		// day : 1 - [28||29||30||31]
		getCell : function( day ) {

			var row = Math.floor( ( day + this.startingDay - this.options.startIn ) / 7 ),
				pos = day + this.startingDay - this.options.startIn - ( row * 7 ) - 1;

			return this.$cal.find( 'div.fc-body' ).children( 'div.fc-row' ).eq( row ).children( 'div' ).eq( pos ).children( 'div' );

		},
		setData : function( caldata ) {

			caldata = caldata || {};
			$.extend( this.caldata, caldata );
			this._generateTemplate();

		},
		// goes to today's month/year
		gotoNow : function( callback ) {

			this.month = this.today.getMonth();
			this.year = this.today.getFullYear();
			this._generateTemplate( callback );

		},
		// goes to month/year
		goto : function( month, year, callback ) {

			this.month = month;
			this.year = year;
			this._generateTemplate( callback );

		},
		gotoPreviousMonth : function( callback ) {
			this._move( 'month', 'previous', callback );
		},
		gotoPreviousYear : function( callback ) {
			this._move( 'year', 'previous', callback );
		},
		gotoNextMonth : function( callback ) {
			this._move( 'month', 'next', callback );
		},
		gotoNextYear : function( callback ) {
			this._move( 'year', 'next', callback );
		}

	};
	
	var logError = function( message ) {

		if ( window.console ) {

			window.console.error( message );
		
		}

	};
	
	$.fn.calendario = function( options ) {

		var instance = $.data( this, 'calendario' );
		
		if ( typeof options === 'string' ) {
			
			var args = Array.prototype.slice.call( arguments, 1 );
			
			this.each(function() {
			
				if ( !instance ) {

					logError( "cannot call methods on calendario prior to initialization; " +
					"attempted to call method '" + options + "'" );
					return;
				
				}
				
				if ( !$.isFunction( instance[options] ) || options.charAt(0) === "_" ) {

					logError( "no such method '" + options + "' for calendario instance" );
					return;
				
				}
				
				instance[ options ].apply( instance, args );
			
			});
		
		} 
		else {
		
			this.each(function() {
				
				if ( instance ) {

					instance._init();
				
				}
				else {

					instance = $.data( this, 'calendario', new $.Calendario( options, this ) );
				
				}

			});
		
		}
		
		return instance;
		
	};
	
} )( jQuery, window );

/*! End of homepage and product carousel */

 jQuery(document).ready(function($) {
           $("#slider_new").FlowSlider({
                marginStart: 0,
                marginEnd: 0,
                infinite: true,
                animationOptions: {
                    snap: true
                },
                position: 0.0,
                controllers: ["Event", "Event"],
                controllerOptions: [
                    {

                        el: ".btn-right",

                        step: 230

                    },

                    {

                        el: ".btn-left",

                        step: -230

                    }

                ]

            }); 


            $("#slider_bolog_home").FlowSlider({
                marginStart: 0,
                marginEnd: 0,
                infinite: true,
                animationOptions: {
                    snap: true
                },
                position: 0.0,
                controllers: ["Event", "Event"],
                controllerOptions: [
                    {
                        el: ".btn-right-blog",
                        step: 370
                    },
                    {
                        el: ".btn-left-blog",
                        step: -370
                    }
                ]
            }); 
            $("#slider_bolog_home").show();
            $("#slider_movie_home").FlowSlider({
                marginStart: 0,
                marginEnd: 0,
                infinite: true,
                animationOptions: {
                    snap: true
                },
                position: 0.0,
                controllers: ["Event", "Event"],
                controllerOptions: [
                    {
                        el: ".btn-right-movie",
                        step: 175
                    },
                    {
                        el: ".btn-left-movie",
                        step: -175
                    }
                ]
            });     
        });

jQuery(function() {
			
				var cal = $( '#calendar' ).calendario( {
						onDayClick : function( $el, $contentEl, dateProperties ) {

							for( var key in dateProperties ) {
								console.log( key + ' = ' + dateProperties[ key ] );
							}

						},
						caldata : codropsEvents
					} ),
					$month = $( '#custom-month' ).html( cal.getMonthName() ),
					$year = $( '#custom-year' ).html( cal.getYear() );

				$( '#custom-next' ).on( 'click', function() {
					cal.gotoNextMonth( updateMonthYear );
				} );
				$( '#custom-prev' ).on( 'click', function() {
					cal.gotoPreviousMonth( updateMonthYear );
				} );
				$( '#custom-current' ).on( 'click', function() {
					cal.gotoNow( updateMonthYear );
				} );

				function updateMonthYear() {				
					$month.html( cal.getMonthName() );
					$year.html( cal.getYear() );
				}

				
			
			
			});
//hover main navigation
jQuery(document).ready(function() 
{

$('.slidewrap').carousel({
				slider: '.slider',
				slide: '.slide',
				slideHed: '.slidehed',
				nextSlide : '.next',
				prevSlide : '.prev',
				addPagination: true,
				addNav : false
			});
//var $ = jQuery.noConflict();
  //entertainment hover
    $('#menu-item-967').hover(function(e) {
	   $("#menu-item-967 a").addClass('ent_hover');
       if(e.pageY - this.offsetTop>=366 && e.pageY -this.offsetTop<=369)
       {
        $("#hover-cont").delay(500).show(0);
       }else{
             $("#hover-cont").show();
       }            
    },function(){  
	   $("#menu-item-967 a").removeClass('ent_hover');          
       $("#hover-cont").hide();   
    });
    $('#hover-cont').hover(
        function() {       
            $("#hover-cont").show();
		    $("#menu-item-967 a").addClass('ent_hover');
        },
        function(){
		   $("#menu-item-967 a").removeClass('ent_hover');	        
	       $("#hover-cont").hide();   
    });

//entertainment hover ends here			

//art & culture hover
           $('#menu-item-966').hover(function(e) {
		        $("#menu-item-966 a").addClass('art_hover');   
                if(e.pageY - this.offsetTop>=366 && e.pageY -this.offsetTop<=369)
                {
    		        $("#hover-cont2").delay(500).show(0);
                }else{
                    $("#hover-cont2").show();
                }    
                },function(){
		            $("#menu-item-966 a").removeClass('art_hover');	                
                    $("#hover-cont2").hide();
            });
            $('#hover-cont2').hover(function() {       
            $("#hover-cont2").show();
			$("#menu-item-966 a").addClass('art_hover');        
            },function(){ 
			$("#menu-item-966 a").removeClass('art_hover');       
	        $("#hover-cont2").hide();
            });

//art and culture hover ends here

//community hover

           $('#menu-item-965').hover(function(e) {
		   $("#menu-item-965 a").addClass('comm_hover'); 
            if(e.pageY - this.offsetTop>=366 && e.pageY -this.offsetTop<=369)
            {  
                $("#hover-cont3").delay(500).show(0); 
            }else{
                $("#hover-cont3").show()
            }   
           },function(){
		   $("#menu-item-965 a").removeClass('comm_hover');	                
           $("#hover-cont3").hide();
            });
            $('#hover-cont3').hover(function() {       
            $("#hover-cont3").show();
			$("#menu-item-965 a").addClass('comm_hover');        
            },function(){ 
			$("#menu-item-965 a").removeClass('comm_hover');       
	        $("#hover-cont3").hide();
            });

//community hover ends here	

//food hover starts here

$('#menu-item-964').hover(function(e) {

		   $("#menu-item-964 a").addClass('food_hover');   
           if(e.pageY - this.offsetTop>=366 && e.pageY -this.offsetTop<=369)
                       {
                        $("#hover-cont4").delay(500).show(0);
                       }else{
		          $("#hover-cont4").show();    
            }
           },function(){

		   $("#menu-item-964 a").removeClass('food_hover');	                

           $("#hover-cont4").hide();

            });
            $('#hover-cont4').hover(function() {       
            $("#hover-cont4").show();
			$("#menu-item-964 a").addClass('food_hover');        
            },function(){ 
			$("#menu-item-964 a").removeClass('food_hover');       
	        $("#hover-cont4").hide();
            });

//food hover ends here	

//qh slider starts here

$('#menu-item-962').hover(function(e) {

		   $("#menu-item-962 a").addClass('qh_hover');   
           if(e.pageY - this.offsetTop>=366 && e.pageY -this.offsetTop<=369)
                       {
		   $("#hover-cont5").delay(500).show(0);    
        }else{
            $("#hover-cont5").show();
        }
           },function(){

		   $("#menu-item-962 a").removeClass('qh_hover');	                

           $("#hover-cont5").hide();

            });
            $('#hover-cont5').hover(function() {       
            $("#hover-cont5").show();
			$("#menu-item-962 a").addClass('qh_hover');        
            },function(){ 
			$("#menu-item-962 a").removeClass('qh_hover');       
	        $("#hover-cont5").hide();
            });

//qh slider ends here

//sports slider starts here

$('#menu-item-963').hover(function(e) {

		   $("#menu-item-963 a").addClass('sport_hover');   
           if(e.pageY - this.offsetTop>=366 && e.pageY -this.offsetTop<=369)
                       {
		   $("#hover-cont6").delay(500).show(0);  
           }else{
            $("#hover-cont6").show();
           }  

           },function(){

		   $("#menu-item-963 a").removeClass('sport_hover');	                

           $("#hover-cont6").hide();

            });
            $('#hover-cont6').hover(function() {       

            $("#hover-cont6").show();

			$("#menu-item-963 a").addClass('sport_hover');        

            },function(){ 

			$("#menu-item-963 a").removeClass('sport_hover');       

	        $("#hover-cont6").hide();

            });



//sports slider ends here

			//Media Video 

			$('.media-thumb-cont').click(function(){

				var title_vdo=$(this).attr('data-title');

				var dis_vdo=$(this).attr('data-dis');

				var url=$(this).attr('data-url');

				$('#title-video').html(title_vdo);

				$('#dis-video').html(dis_vdo);

				$('#pla_viedo').attr('src','//www.youtube.com/embed/'+url);

				})

//onload media set title

			var title=$('#pla_viedo_media').attr('data-title');

			$('#media_title_vedio_data').html(title);



		var buttons = { 
            previous:$('#jslidernews2 .button-previous') ,
			next:$('#jslidernews2 .button-next') 
        };			 
		$('#jslidernews2').lofJSidernews( { interval:5000,

											 	easing:'easeInOutQuad',

												duration:1200,

												auto:true,

												mainWidth:677,

												mainHeight:410,

												navigatorHeight: 68,

												navigatorWidth: 139,

												maxItemDisplay:6,

												buttons:buttons } );	

		$('.b_see_more').hide();  
    $('#b_but').click(function() {       
        $(".b_see_more").show();        
     });

    $('.fancybox').fancybox();

			$(".list-full-pic-plus").fancybox({

				helpers: {

					title : {

						type : 'outside'

					},

					overlay : {

						speedOut : 0

					}

				}

			});

			 
		$('#light_box_calender').click(function(){
			$('#cal_cont').hide();
		});	 

});



function play_viedo(path)

{

document.getElementById("pla_viedo").innerHTML='<iframe width="500" height="263" src="//www.youtube.com/embed/'+path+'" frameborder="0" allowfullscreen></iframe>';

}

function play_viedo_media(path,title)

{

    $('#pla_viedo').attr('src','//www.youtube.com/embed/'+path);
    document.getElementById('title-video').innerHTML=title;
}

function popup_fuction()

{

	

	//document.getElementById("light_box_calender").style.display = 'block';

	//alert("harry");

	document.getElementById("cont_pop_up").style.display = 'block';

}

function close_calender_pop()

{

	//alert(document.URL);

	//document.getElementById("light_box_calender").style.display = 'none';

	document.getElementById("cal_cont").style.display = 'none';



}

function calender_pop_up()

{

	//var c_url=document.URL;

	//window.location.href=c_url;

window.scrollTo(0,292);

//window.resizeTo("500");

$('#cal_cont').show();

//$('#light_box_calender').show();

}

function close_window()

{

document.getElementById("cont_pop_up").style.display = 'none';	

}

$(function () {

            $('form#request').on('submit', function(e) {

				var name=$('#contact-name').val();

				var email=$('#contact-email').val();

				var msg=$('#contact-msg').val();

				var mail_g=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

				if(name==''){

					$('#contact-name').css({'border-color':'#F00','color':'#F00'})

					return false;

				}

				else if(email==''){

					$('#contact-email').css({'border-color':'#F00','color':'#F00'})

					alert('Enter Valid Email');

					return false;

				}

				else if(!email.match(mail_g)){

					$('#contact-email').css({'border-color':'#F00','color':'#F00'})

					alert('Enter Valid Email');

					return false;

				}

				else if(msg==''){

					$('#contact-msg').css({'border-color':'#F00','color':'#F00'});

					alert('Enter Some Text');

					return false;

				}

				$('#contact-label').html("<img src='http://<?php echo $_SERVER['HTTP_HOST'] ?>/Projects/wordpress/wp-content/themes/twentyeleven/images/contact-loader-ajax.GIF'>");

                $.ajax({

                    type: 'post',

                    url: '<?php echo get_template_directory_uri(); ?>/contact_form.php',

                    data: $('form').serialize(),

                    success: function (response) {

                    console.log(response);

						if(response=='Send'){

							$('#contact-label').html('Thanks for contact us!')

							$('#contact-name').val('');

							$('#contact-email').val('');

							$('#contact-msg').val('');

							$('#contact-name').css({'border-color':'#000','color':'#777777'})

							$('#contact-email').css({'border-color':'#000','color':'#777777'})

							$('#contact-msg').css({'border-color':'#000','color':'#777777'});

						}

                    }

                });

                e.preventDefault();

            });
			 jQuery('.popup-contant').height(924);
			

        });

twitterFetcher.fetch('408626870511341568', '', 1, true, true, true, '', false, handleTweets, false);
                            function handleTweets(tweets){
                                var x = tweets.length;
                                var n = 0;
                                var element = document.getElementById('example1');
                                var html = '';
                                while(n < x) {
                                  html +=  tweets[n];
                                  n++;
                                }
                                html += '';
                                element.innerHTML = html;
                            }