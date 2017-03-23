nginx-rtmp-win32
================

Nginx: 1.11.10  
Nginx-Rtmp-Module: 1.1.11  
openssl-1.1.0e  
pcre-8.40  
zlib-1.2.10

# configure arguments
```
nginx version: nginx/1.11.10
built by cl
built with OpenSSL 1.1.0e  16 Feb 2017
TLS SNI support enabled
configure arguments: --with-cc=cl --builddir=objs --with-debug --prefix= --conf-
path=conf/nginx.conf --pid-path=logs/nginx.pid --http-log-path=logs/access.log -
-error-log-path=logs/error.log --sbin-path=nginx.exe --http-client-body-temp-pat
h=temp/client_body_temp --http-proxy-temp-path=temp/proxy_temp --http-fastcgi-te
mp-path=temp/fastcgi_temp --http-scgi-temp-path=temp/scgi_temp --http-uwsgi-temp
-path=temp/uwsgi_temp --with-cc-opt=-DFD_SETSIZE=1024 --with-pcre=objs/lib/pcre-
8.40 --with-zlib=objs/lib/zlib-1.2.11 --with-select_module --with-http_realip_mo
dule --with-http_addition_module --with-http_sub_module --with-http_dav_module -
-with-http_stub_status_module --with-http_flv_module --with-http_mp4_module --wi
th-http_gunzip_module --with-http_gzip_static_module --with-http_auth_request_mo
dule --with-http_random_index_module --with-http_secure_link_module --with-http_
slice_module --with-mail --with-stream --with-openssl=objs/lib/openssl-1.1.0e --
with-openssl-opt=no-asm --with-http_ssl_module --with-mail_ssl_module --with-str
eam_ssl_module --with-ipv6 --add-module=../nginx-rtmp-module
```

# 使用方法
双击nginx.exe
# 简要说明
conf/nginx.conf 为配置文件实例  
RTMP监听 1935 端口，启用live 和hls 两个application  
HTTP监听 8080 端口，
* :8080/stat 查看stream状态  
* :8080/index.html 为一个直播播放与直播发布测试器
* :8080/vod.html 为一个支持RTMP和HLS点播的测试器

# 播放防盗链与推流鉴权
## 加密 URL 构成:
>rtmp://域名/业务名/流名?sign=失效时间戳-HashValue  

1.推流与播放地址:  
> rtmp://192.168.0.10/live/stream123

2.链接失效时间:2017/3/23 10:10:0 计算出来的失效时间戳为  
>1490235000

3.nginx.conf配置key  
>nodemedia2017privatekey

4.组合为HashValue  
>HashValue = md5("/live/stream123-1490235000-nodemedia2017privatekey”)   
>HashValue = d03af0812548d315279936ad76f912be

5.最终请求地址  
>rtmp://192.168.0.10/live/stream123?sign=1490235000-d03af0812548d315279936ad76f912be  
>sign关键字不能修改

## nginx.conf 鉴权配置说明
```
 application live {
     live on;
     live_auth on;  #鉴权开关
     live_auth_secret nodemedia2017privatekey; #鉴权KEY
}
```
## 安全URL的产生  
应该由业务服务器生成安全的URL,防止在客户端泄漏key.可参考auth_gen.php

# 注意
不支持exec

# 直播测试工具 
内置了一个方便测试的pc端推流于播放的工具  
![img](https://github.com/NodeMedia/NodeMediaDevClient/raw/master/QQ20160310-0.png)  
源码在此:https://github.com/NodeMedia/NodeMediaDevClient

# 另一个选择，srs-win32 
支持HTTP-FLV,配合B站开源flv.js实现浏览器HTML5下低延迟直播播放
Simple-Rtmp-Server-win32 https://github.com/illuspas/srs-win32
