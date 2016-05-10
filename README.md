nginx-rtmp-win32
================

Nginx: 1.9.5  
Nginx-Rtmp-Module: 1.1.7  
openssl-1.0.1p  
pcre-8.36  
zlib-1.2.8  
# 使用方法
双击nginx.exe
# 简要说明
conf/nginx.conf 为配置文件实例  
RTMP监听 1935 端口，启用live 和hls 两个application  
HTTP监听 8080 端口，
* :8080/stat 查看stream状态  
* :8080/index.html 为一个直播播放与直播发布测试器
* :8080/vod.html 为一个支持RTMP和HLS点播的测试器

# 注意
不支持exec

# 直播测试工具 
内置了一个方便测试的pc端推流于播放的工具
![img]
[img]:https://github.com/NodeMedia/NodeMediaDevClient/raw/master/QQ20160310-0.png
源码在此:https://github.com/NodeMedia/NodeMediaDevClient

# 另一个选择(experimental)
Simple-Rtmp-Server-win32 https://github.com/illuspas/srs-win32
