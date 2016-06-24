<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ����3��meta��ǩ*����*������ǰ�棬�κ��������ݶ�*����*������� -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Linux�������Key�ύ</title>

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
            <a class="navbar-brand" href="./">�ɼ�ͳ����</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="./">��ҳ</a></li>
                        <li><a href="http://smcm.cc">����SMCMCC</a></li>
                        <li><a href="https://www.zning.net.cn" target="_blank">����������</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">����<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="http://www.sdust.edu.cn" target="_blank">ɽ���Ƽ���ѧ</a></li>
                                <li role="separator" class="divider"></li>
                                <li class="dropdown-header">������վ</li>
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
        <h2>Linux�������Key�ύ</h2>
    </div>
</div>

<div class="container theme-showcase" role="main">

    <!-- <div class="alert alert-info" role="alert">
            <strong><a href="jiaocheng.html">����˴��鿴�ϴ��̳�</a> </strong>
        </div>-->

        <div class="alert alert-danger" role="alert">
            <strong>ע��: </strong> �ύ��<b> ��ֹ����Ϊ:2016��6��11��20ʱ�� </b>,��ע��ʱ�䰲��. ���д����ύ����<b> 2016��6��11��22ʱǰ </b>��ϵ��վ����Ա����ϵ��ʽ��<a href="tel:+8613687671402">136-8767-1402</a>(�ֻ������ҳ������绰�ɲ���)
        </div>

    <div  class="jumbotron">

        <div class="page-header">
                    <h1>ҳ����ʾ:</h1>
         </div>

        <?php
        error_reporting(E_ALL^E_NOTICE^E_WARNING);
        //header("Refresh:3;url=windows.html");
        if (is_uploaded_file ( $_FILES ['upfile'] ['tmp_name'] )) {
        	$stuname = $_POST["stuname"];
        	$xuehao =  $_POST["xuehao"];
        	$upfile = $_FILES ["upfile"];
        	$filetype = ".key";
        	//��ȡ���������ֵ
        	$name = $upfile ["name"]; //�ϴ��ļ����ļ���
        	$type = $upfile ["type"]; //�ϴ��ļ�������
        	$size = $upfile ["size"]; //�ϴ��ļ��Ĵ�С
        	$tmp_name = $upfile ["tmp_name"]; //�ϴ��ļ�����ʱ���·��
        	//�ж��Ƿ�ΪͼƬ
        	$okType = true;

        	$str = $xuehao . " " . $stuname . $filetype;

        	if ($okType) {
        		/**
        		 * 0:�ļ��ϴ��ɹ�<br/>
        		 * 1���������ļ���С����php.ini�ļ�������<br/>
        		 * 2���������ļ��Ĵ�СMAX_FILE_SIZEѡ��ָ����ֵ<br/>
        		 * 3���ļ�ֻ�в��ֱ��ϴ�<br/>
        		 * 4��û���ļ����ϴ�<br/>
        		 * 5���ϴ��ļ���СΪ0
        		 */
        		$error = $upfile ["error"]; //�ϴ���ϵͳ���ص�ֵ
        		//���ϴ�����ʱ�ļ��ƶ���upĿ¼����
        		$pic = iconv("UTF-8","gb2312", $str);
        		move_uploaded_file ( $tmp_name, 'uplinux/' . $pic );
        		echo "<p><font size=\"+6\" color=\"#FF0000\"><h1>";
        		if ($error == 0) {
        			echo "�ļ��ϴ��ɹ���";
        		} elseif ($error == 1) {
        			echo "�������ļ���С����php.ini�ļ�������";
        		} elseif ($error == 2) {
        			echo "�������ļ��Ĵ�СMAX_FILE_SIZEѡ��ָ����ֵ";
        		} elseif ($error == 3) {
        			echo "�ļ�ֻ�в��ֱ��ϴ�";
        		} elseif ($error == 4) {
        			echo "û���ļ����ϴ�";
        		} else {
        			echo "�ϴ��ļ���СΪ0";
        		}
        	} else {
        		echo "���ϴ�ָ����ʽ���ļ���";
        	}
        	echo "<a href=\"linux.html\">����˴�����ǰҳ</a></h1></font></p>";
        }
        ?>
    </div>

    <hr>

    <footer>
        <p>Copyright &copy; 2016.����ѧ�� All rights reserved. ³ICP��14014735��-3
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