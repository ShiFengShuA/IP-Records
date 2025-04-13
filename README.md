# Visitor-IP-Records

Visitor-IP-Records-Formal1.0.1 It has been released releases

Github Releases Download：https://github.com/ShiFengShuA/Visitor-IP-Records/releases/download/Formal/Visitor-IP-Records-Formal1.0.1.zip

Gitee Releases Download：https://gitee.com/ShiFengShuA/Visitor-IP-Records/releases/download/正式版/Visitor-IP-Records-Formal1.0.1.zip

1.Updated the new API interface

2.Optimize the user manual

3.We are currently using Dream API (https://api.52vmy.cn) to provide API interface services

4.The IP information recorded in the current profile is complete


Dividing-line——————————————————————


Note! The API interface for IP resolution is all from China! There is no guarantee that the foreign server will work! If the IP cannot be resolved, please change the API interface by yourself!


Dividing-line——————————————————————


If you need to change the API, go to the IP-Ldentification folder and open the Ldentification.php file

$url = 'https://www.inte.net/tool/ip/api.ashx?ip='.$ip.' &datatype=json'; Then change the "https://www.inte.net/tool/ip/api.ashx?ip=" API request address in this line of code to the API request address you want to replace
