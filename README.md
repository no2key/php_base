php_base
========
A lightweight and useful PHP base libraries.

##Quick Start
php_base 起初是用于将文本文件导入数据库的一套基础函数库，现将其中与业务无关的公共代码提取出来，以方便以后复用。目前基础代码还比较少，lib目录下存放的主要是开源代码，以后会陆续增加一些自己编写的代码。

##Features
+ 将文件转成数组
+ 对数据库的增删改查
+ 汉字转拼音
+ HTTP下载
+ 省份和城市对应表

##How To
+ [==Clone==]: 在本地安装git，然后执行#git clone git://github.com/elixtang/php_base.git，即可将php_base拷贝到本地。
+ [==Coding=]: 打开app.php，在Model类增加数据处理相关函数，在Controller类增加被主调度函数调用的相关函数。
+ [==Run====]: 执行#php app.php。

##Todo List
+ add memcache handle function
+ add consistent hash function
+ add rabbitmq handle function

##Based On
+ [ezSQL](https://github.com/jv2222/ezSQL)
+ [initphp](https://github.com/zhuli/initphp)
