nginx-rtmp-win32
================

* Nginx: 1.13.12  
* Nginx-Rtmp-Module: 1.2.1  
* openssl-1.0.2o
* pcre-8.42
* zlib-1.2.11

# configure arguments
```
nginx version: nginx/1.13.12
built by cl 16.00.30319.01 for 80x86
built with OpenSSL 1.0.2o  27 Mar 2018
TLS SNI support enabled
configure arguments: --with-cc=cl --builddir=objs --prefix= --conf-path=conf/ngi
nx.conf --pid-path=logs/nginx.pid --http-log-path=logs/access.log --error-log-pa
th=logs/error.log --sbin-path=nginx.exe --http-client-body-temp-path=temp/client
_body_temp --http-proxy-temp-path=temp/proxy_temp --http-fastcgi-temp-path=temp/
fastcgi_temp --http-scgi-temp-path=temp/scgi_temp --http-uwsgi-temp-path=temp/uw
sgi_temp --with-cc-opt=-DFD_SETSIZE=1024 --with-openssl=objs/lib/openssl-1.0.2o
--with-openssl-opt=no-asm --with-pcre=objs/lib/pcre-8.42 --with-zlib=objs/lib/zl
ib-1.2.11 --with-select_module --with-http_v2_module --with-http_realip_module -
-with-http_addition_module --with-http_sub_module --with-http_dav_module --with-
http_stub_status_module --with-http_flv_module --with-http_mp4_module --with-htt
p_gunzip_module --with-http_gzip_static_module --with-http_auth_request_module -
-with-http_random_index_module --with-http_secure_link_module --with-http_slice_
module --with-mail --with-stream --with-stream_realip_module --with-http_ssl_mod
ule --with-mail_ssl_module --with-stream_ssl_module --add-module=objs/lib/nginx-
rtmp-module
```

# Instructions
Run nginx.exe

# A brief description
conf/nginx.conf - Configuration file
RTMP monitor at 1935 port, Enable live RTMP and HLS within application  
HTTP monitor at  8080 port,
* :8080/stat - View stream status
* :8080/index.html - Publish tester for live broadcast and live broadcast
* :8080/vod.html test player that supports RTMP and HLS on demand

# Note
exec is not supported

# Live test tool
Built-in tool for easy testing of PC-side push-to-play
![img](https://github.com/NodeMedia/NodeMediaDevClient/raw/master/QQ20160310-0.png)
Source code here: https://github.com/NodeMedia/NodeMediaDevClient

# For another option, support HTTP-FLV
Based on Node.js implementation, high performance, native cross-platform, support for RTMP/HTTP-FLV/GOPcache
https://github.com/illuspas/Node-Media-Server 
