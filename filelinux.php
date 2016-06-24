//使用系统前务必检查上传文件夹是否为www用户读写权限
//如果不是,则需要用下述命令进行修改:
//chown -R www:www 需要上传文件夹路径

<?php
    header("Content-Type:text/html; charset=utf-8");
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type"content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Linux程序设计Key提交</title>

    <!-- Bootstrap core CSS -->
    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="//v3.bootcss.com/examples/jumbotron/jumbotron.css" rel="stylesheet">
    <!--<link href="http://v3.bootcss.com/examples/theme/theme.css" rel="stylesheet">-->
</head>


<body role="document">

<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./">成绩统计网</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="./">首页</a></li>
                        <li><a href="http://smcm.cc">返回SMCMCC</a></li>
                        <li><a href="https://www.zning.net.cn" target="_blank">返回张宁网</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">更多<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="http://www.sdust.edu.cn" target="_blank">山东科技大学</a></li>
                                <li role="separator" class="divider"></li>
                                <li class="dropdown-header">更多网站</li>
                                <li><a href="https://www.google.com/ncr" target="_blank">Google</a></li>
                                <li><a href="https://www.github.com" target="_blank">GitHub</a></li>
                                <li><a href="https://www.facebook.com" target="_blank">Facebook</a></li>
                                <li><a href="https://www.twitter.com" target="_blank">Twitter</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
    </div>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h2>Linux程序设计Key提交</h2>
    </div>
</div>

<div class="container theme-showcase" role="main">

    <!-- <div class="alert alert-info" role="alert">
            <strong><a href="jiaocheng.html">点击此处查看上传教程</a> </strong>
        </div>-->

        <div class="alert alert-danger" role="alert">
            <strong>注意: </strong> 提交的<b> 截止日期为:2016年6月11日20时整 </b>,请注意时间安排. 如有错误提交请于<b> 2016年6月11日22时前 </b>联系网站管理员。联系方式：<a href="tel:+8613687671402">136-8767-1402</a>(手机浏览网页，点击电话可拨打)
        </div>

    <div  class="jumbotron">

        <div class="page-header">
                    <h1>页面提示:</h1>
         </div>

        <?php
        error_reporting(E_ALL^E_NOTICE^E_WARNING);
        //header("Refresh:3;url=windows.html");
        if (is_uploaded_file ( $_FILES ['upfile'] ['tmp_name'] )) {
        	$stuname = $_POST["stuname"];
        	$xuehao =  $_POST["xuehao"];
        	$upfile = $_FILES ["upfile"];
        	$filetype = ".key";
        	//获取数组里面的值
        	$name = $upfile ["name"]; //上传文件的文件名
        	$type = $upfile ["type"]; //上传文件的类型
        	$size = $upfile ["size"]; //上传文件的大小
        	$tmp_name = $upfile ["tmp_name"]; //上传文件的临时存放路径
        	//判断是否为图片
        	$okType = true;

        	$str = $xuehao . " " . $stuname . $filetype;

        	if ($okType) {
        		/**
        		 * 0:文件上传成功<br/>
        		 * 1：超过了文件大小，在php.ini文件中设置<br/>
        		 * 2：超过了文件的大小MAX_FILE_SIZE选项指定的值<br/>
        		 * 3：文件只有部分被上传<br/>
        		 * 4：没有文件被上传<br/>
        		 * 5：上传文件大小为0
        		 */
        		$error = $upfile ["error"]; //上传后系统返回的值
        		//把上传的临时文件移动到up目录下面
        		$pic = $str;
        		//$pic = iconv("UTF-8","gb2312", $str);
        		move_uploaded_file ( $tmp_name, 'uplinux/' . $pic );
        		echo "<p><font size=\"+6\" color=\"#FF0000\"><h1>";
        		if ($error == 0) {
        			echo "文件上传成功！";
        		} elseif ($error == 1) {
        			echo "超过了文件大小，在php.ini文件中设置";
        		} elseif ($error == 2) {
        			echo "超过了文件的大小MAX_FILE_SIZE选项指定的值";
        		} elseif ($error == 3) {
        			echo "文件只有部分被上传";
        		} elseif ($error == 4) {
        			echo "没有文件被上传";
        		} else {
        			echo "上传文件大小为0";
        		}
        	} else {
        		echo "请上传指定格式的文件！";
        	}
        	echo "<a href=\"linux.html\">点击此处跳回前页</a></h1></font></p>";
        }
        ?>
    </div>

    <hr>

    <footer>
        <p>Copyright &copy; 2016.智凝学会 All rights reserved. 鲁ICP备14014735号-3
            <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1870283'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s96.cnzz.com/stat.php%3Fid%3D1870283' type='text/javascript'%3E%3C/script%3E"));</script>       </p>
    </footer>


</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="//v3.bootcss.com/assets/js/docs.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="//v3.bootcss.com/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>