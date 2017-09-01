
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <title>野生程序员的成长之路</title>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script><style type="text/css">
        .container{padding-bottom:40px;}
        .jumbotron p{font-size:14px;}
        body{padding:7px;}
        .testList{margin-top:7px;}
        .testList div{margin-bottom:20px;}
        .enabled{font-weight:bold;}
        .disabled{color:#909090;}
        body header.jumbotron{padding:5px;}
        header .links{text-align:right;}
        .updateLogContent ul{list-style-type:none;}
        .friendsLinks ul{list-style-type:none;}
        .friendsLinks li{float:left; margin-right:15px;}
        .btnLoadLogs{margin-left:42px;}
    </style>
    <script src="/it/assets/js/help.js?v=1503654891"></script>
</head>
<body>
<div class="container">
    <header class="jumbotron">
        <h2 class="text-center">野生程序员的成长之路</h2>
        <div>
            <p>我是一个初中学历自学过来的野生程序员，2012年转行做IT。下面都是08年至今买书看网帖和视频以及工作积累等方式掌握到的知识，有的学得不深，而并不是我学得有多么深奥了才写下文章分享给大家</p>
            <p>反正也可以当作笔记自查，与朋友交流时直接给出网址作为个人观点免得再重复打字。对于大牛来说，我这些知识都只是皮毛</p>
            <p>主要都是针对工作中用到的来讲，用不到的就先略微提提或者暗示你去自己搜索资料研究就好了</p>
            <p>写博客的感觉不错！建议看看 <a href="/it/leaning-share/guide-write-blog.html" target="_blank">写博客的好处</a></p>
            <p>附个人创办的开源项目，还在慢慢挤时间开发中：<a href="https://github.com/kk8686/xoa" target="_blank">小OA</a>（该项目能给到你的参考点：前后分离开发的实现、gulp构建环境的应用、Yii2框架的应用Demo、Codeception测试框架的运用、前端自动同步后端的字典集）</p>
            <p class="links">
                <a href="#update-log">文章更新记录</a>
            </p>
        </div>
    </header>

    <div class="row testList" id="testList">

        <div class="col-xs-6 col-md-3">
            <a href="/it/html-base/guide-README.html"  target="_blank"class="enabled">网页制作常用基础</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="/it/js-base/guide-README.html"  target="_blank"class="enabled">JavaScript常用基础</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="/it/php-base/guide-README.html"  target="_blank"class="enabled">PHP基础</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="javascript:alert(disabledTip);" class="disabled">Web服务器与HTTP协议</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="/it/mysql-base/guide-README.html"  target="_blank"class="enabled">MySql数据库常用基础</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="/it/jquery/guide-README.html"  target="_blank"class="enabled">jQuery基础</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="/it/thinkphp/guide-index.html"  target="_blank"class="enabled">ThinkPHP框架</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="javascript:alert(disabledTip);" class="disabled">移动端Web开发</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="/it/first-job/guide-README.html"  target="_blank"class="enabled">是时候去找你的第一份工作了</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="/it/svn/guide-README.html"  target="_blank"class="enabled">SVN</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="/it/php-adv/guide-README.html"  target="_blank"class="enabled">PHP进阶</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="/it/js-adv/guide-README.html"  target="_blank"class="enabled">JS+JQ进阶</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="/it/regexp/guide-README.html"  target="_blank"class="enabled">正则表达式</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="javascript:alert(disabledTip);" class="disabled">HTTP协议常识</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="/it/mysql-adv/guide-README.html"  target="_blank"class="enabled">MySql进阶</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="javascript:alert(disabledTip);" class="disabled">Linux系统基础</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="/it/svn-server/guide-README.html"  target="_blank"class="enabled">SVN服务器管理</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="/it/codeception/guide-README.html"  target="_blank"class="enabled">PHP-Codeception测试开发</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="/it/web-debug/guide-README.html"  target="_blank"class="enabled">Web开发调试方案分享</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="/it/expr/guide-README.html"  target="_blank"class="enabled">其它经验分享</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="/it/code-standard/guide-README.html"  target="_blank"class="enabled">编码规范与PSR标准</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="/it/programing-expr/guide-README.html"  target="_blank"class="enabled">程序设计心得分享</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="/it/secure/guide-README.html"  target="_blank"class="enabled">安全</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="/it/composer/guide-README.html"  target="_blank"class="enabled">Composer</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="/it/yii2/guide-README.html"  target="_blank"class="enabled">PHP-Yii2框架基础入门</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="/it/yii2-adv/guide-README.html"  target="_blank"class="enabled">Yii2经验分享</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="javascript:alert(disabledTip);" class="disabled">聊聊面向对象与MVC模式</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="javascript:alert(disabledTip);" class="disabled">Redis</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="/it/reprint/guide-README.html"  target="_blank"class="enabled">转载收藏</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="javascript:alert(disabledTip);" class="disabled">SOAP与REST接口设计</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="/it/apache2.4/guide-README.html"  target="_blank"class="enabled">Apache2.4</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="javascript:alert(disabledTip);" class="disabled">Nginx</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="/it/jenkins/guide-README.html"  target="_blank"class="enabled">Jenkins持续集成</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="/it/nodejs/guide-README.html"  target="_blank"class="enabled">Node.js</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="javascript:alert(disabledTip);" class="disabled">C语言基础</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="javascript:alert(disabledTip);" class="disabled">C# + WinForm笔记</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="javascript:alert('敬请期待~\n如果你真想学这种东西最好去学NSIS或InstallShield')" class="disabled">InnoSetup安装包UI开发</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="javascript:alert(disabledTip);" class="disabled">Java + Android笔记</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="/it/gulp-build-dev-env/guide-README.html"  target="_blank"class="enabled">用gulp搭建前后分离的开发环境</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="/it/team-manage/guide-README.html"  target="_blank"class="enabled">当管理者的感受</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="javascript:alert(disabledTip);" class="disabled">我们必须注重自动化</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="/it/python/guide-index.html"  target="_blank"class="enabled">Python</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="/it/chrome-extension/guide-README.html"  target="_blank"class="enabled">Chrome插件开发</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="javascript:alert(disabledTip);" class="disabled">Git</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="/it/markdown/guide-README.html"  target="_blank"class="enabled">用Markdown写文档</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="javascript:alert(disabledTip);" class="disabled">Linux系统进阶</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="javascript:alert(disabledTip);" class="disabled">awk脚本</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="javascript:alert(disabledTip);" class="disabled">Squid反向代理与LVS</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="javascript:alert(disabledTip);" class="disabled">WebSocket与PHP-Workerman框架</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="javascript:alert(disabledTip);" class="disabled">PHP-Yaf框架</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="/it/leaning-share/guide-README.html"  target="_blank"class="enabled">自学经验分享</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="/it/product/guide-README.html"  target="_blank"class="enabled">产品观念</a>
        </div>
        <div class="col-xs-6 col-md-3">
            <a href="/it/oth/guide-README.html"  target="_blank"class="enabled">杂谈</a>
        </div>
    </div>

    <hr />

    <!-- UY BEGIN -->
    <div id="uyan_frame"></div>
    <script type="text/javascript" src="http://v2.uyan.cc/code/uyan.js?uid=2143006"></script>
    <!-- UY END -->
<!--    <div id="update-log">-->
<!--        <h3>最近的文章动态</h3>-->
<!--        <div id="updateLogContent" class="updateLogContent"></div>-->
<!--        <h4><button class="btn btn-primary btnLoadLogs" type="button" onclick="loadUpdateLog(logUrl, true, this)" id="btnShowAllLogs">显示全部动态</button></h4>-->
<!--    </div>-->
<!---->
<!--    <div id="commentBox" class="cloud-tie-wrapper"></div>-->
<!---->
<!--    <hr />-->
<!--    <div id="friendsLinks" class="friendsLinks">-->
<!--        <h4>友情博客：</h4>-->
<!--        <ul>-->
<!--            <li><a href="http://www.wyqblog.com">蝶舞恋天涯</a></li>-->
<!--        </ul>-->
<!---->
<!--    </div>-->
</div>
<script src="https://cdn.bootcss.com/bootstrap/3.3.2/js/bootstrap.min.js"></script><script type="text/javascript">
    var logUrl = '/it/site/log';
    var disabledTip = '敬请期待~你也可以先自行上网搜索资料学习哦';
    $(function(){
        $('#testList div').each(function(i){
            $(this).prepend((i + 1) + '、');
        });

        loadUpdateLog(logUrl, false);
    });
</script>

</body>
</html>
