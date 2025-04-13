# Visitor-IP-Records

访客IP记录正式版1.0.1 已发布 释放

Visitor-IP-Records-Formal1.0.1 It has been released releases

Releases：https://github.com/ShiFengShuA/Visitor-IP-Records/releases/download/Formal/Visitor-IP-Records-Formal1.0.1.zip

1.更新了新的API接口

Updated the new API interface

2.使用手册优化

Optimize the user manual

3.当前正在使用维梦API(https://api.52vmy.cn)提供API接口服务

We are currently using Dream API (https://api.52vmy.cn) to provide API interface services
4.当前配置文件记录的IP信息是完整的

The IP information recorded in the current profile is complete


Dividing-line分界线——————————————————————


注意！ 用于IP解析的API接口均来源于中国！不能确保国外服务器有效！如IP无法解析 请自行更换API接口！

//Note! The API interface for IP resolution is all from China! There is no guarantee that the foreign server will work! If the IP cannot be resolved, please change the API interface by yourself!


//Dividing-line分界线——————————————————————


如需更改API，请进入IP-Ldentification文件夹中，打开Ldentification.php文件
$url = 'https://www.inte.net/tool/ip/api.ashx?ip='.$ip.'&datatype=json';  然后将这行代码中的 “https://www.inte.net/tool/ip/api.ashx?ip=” API请求地址改为自己要换成的API请求地址

If you need to change the API, go to the IP-Ldentification folder and open the Ldentification.php file
$url = 'https://www.inte.net/tool/ip/api.ashx?ip='.$ip.' &datatype=json'; Then change the "https://www.inte.net/tool/ip/api.ashx?ip=" API request address in this line of code to the API request address you want to replace
