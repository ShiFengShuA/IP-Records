
//将此段代码添加进自己网站根目录中的网站首页运行文件中，需处于“<?php”代码下方一行处(例如index.php)↓
//Add this code to the homepage runtime file in the root directory of your website, on the line below the "<?php" code (for example, index.php)

include_once ("ip.php");




//Dividing-line分界线——————————————————————




//若网站首页运行文件是html，则需要将后缀改成php，然后添加一下代码在文件内容第一行/顶部(HTML和PHP语言兼容问题请用户自行处理)
//If the homepage of the website is running in HTML, you need to change the suffix to PHP, and then add the code in the first line/top of the file content (please deal with the compatibility between HTML and PHP)

<?php

//注：若已有这段↑ 则只在 “<?php” 下方一行处 添加以下代码↓
//Note: If you already have this ↑, only add the following code ↓ to the line below "<?php".

include_once ("ip.php");




//Dividing-line分界线——————————————————————




//网站根目录下的ip.php文件用于获取ip
//The ip.php file in the root directory of the website is used to obtain the IP address

//IP-Ldentification文件夹请复制进自己网站的根目录中，文件夹中的Function.php将用于分析ip.php所获取访问者ip的所在地区，例如省份
//The IP-Ldentification folder is copied into the root directory of your website, and the Function.php in the folder will be used to analyze the region where the IP of the ip.php is obtained, such as the province

//ip.txt文件用于储存已记录的ip和地区，删除此文件将清楚之前记录的ip和地区
//The ip.txt file is used to store the IP addresses and regions that have been recorded, and deleting this file will make it clear that the IP addresses and regions have been logged before

//安装完后续重新访问已安装ip获取模块的网站，然后网站根目录下才会生成ip.txt文件
//After the installation is completed, revisit the website where the IP acquisition module is installed, and then the ip.txt file will be generated in the root directory of the website




//Dividing-line分界线——————————————————————


//当前正在使用维梦API(https://api.52vmy.cn)提供API接口服务

//注意！ 用于IP解析的API接口均来源于中国！不能确保国外服务器有效！如IP无法解析 请自行更换API接口！

//Note! The API interface for IP resolution is all from China! There is no guarantee that the foreign server will work! If the IP cannot be resolved, please change the API interface by yourself!




//Dividing-line分界线——————————————————————




//如需更改API，请进入IP-Ldentification文件夹中，打开Ldentification.php文件
// $url = 'https://www.inte.net/tool/ip/api.ashx?ip='.$ip.'&datatype=json';  然后将这行代码中的 “https://www.inte.net/tool/ip/api.ashx?ip=” API请求地址改为自己要换成的API请求地址

//If you need to change the API, go to the IP-Ldentification folder and open the Ldentification.php file
// $url = 'https://www.inte.net/tool/ip/api.ashx?ip='.$ip.' &datatype=json'; Then change the "https://www.inte.net/tool/ip/api.ashx?ip=" API request address in this line of code to the API request address you want to replace