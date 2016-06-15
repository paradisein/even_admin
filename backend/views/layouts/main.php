<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>"  class="app">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link  href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <?=Html::cssFile('@web/css/font.css')?>
    <?=Html::cssFile('@web/css/bootstrap_calendar.css')?>
    <?=Html::cssFile('@web/css/app.v2.css')?>
    <?=Html::jsFile('@web/js/app.v2.js')?>
    <?=Html::jsFile('@web/js/html5shiv.js')?>
    <?=Html::jsFile('@web/js/respond.min.js')?>
    <?=Html::jsFile('@web/js/excanvas.js')?>
    <?php $this->head() ?>
</head>
<style>
    .fa-20x{font-family: 'Microsoft YaHei';font-size: 20px;line-height: 2em;}
    .fa-10x{font-family: 'Microsoft YaHei';font-size: 18px;line-height: 1em;}
    div.dataTables_wrapper select{width: auto;margin: 0 4px;}
    .navbar-brand .logo{max-height: 30px;border-radius: 3px;}
    table td{word-wrap: break-word;}
    .flleft{float: left;padding-left: 10%;}
</style>
<body>
<?php $this->beginBody() ?>

<section class="vbox">
<header class="bg-dark dk header navbar navbar-fixed-top-xs">
    <div class="navbar-header aside-md">
        <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav">
            <i class="fa fa-bars"></i>
        </a>
        <a href="#" class="navbar-brand" data-toggle="fullscreen">
            <img src="<?=Url::to('@web/images/logo.png');?>" class="m-r-sm logo">资源系统
        </a>
        <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user">
            <i class="fa fa-cog"></i>
        </a>
    </div>
    <ul class="nav navbar-nav hidden-xs">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle dker" data-toggle="dropdown">
                <i class="fa fa-building-o"></i>
                <span class="font-bold">个人信息</span>
            </a>
            <section class="dropdown-menu aside-xl on animated fadeInLeft no-borders lt">
                <div class="wrapper lter m-t-n-xs">
                    <a href="#" class="thumb pull-left m-r">
                        <img src="<?=Url::to('@web/images/avatar.jpg');?>" class="img-circle">
                    </a>
                    <div class="clear">
                        <a href="#">
                            <span class="text-white font-bold">XXX</span>
                        </a>
                        <small class="block">XXX</small>
                        <a href="#">
                            <span class="text-white font-bold">XXX@XXX.cn</span>
                        </a>
                    </div>
                </div>
                <div class="row m-l-none m-r-none m-b-n-xs text-center">
                    <div class="col-xs-4">
                        <div class="padder-v">
                            <span class="m-b-xs h4 block text-white">245</span>
                            <small class="text-muted">代办事务</small>
                        </div>
                    </div>
                    <div class="col-xs-4 dk">
                        <div class="padder-v">
                            <span class="m-b-xs h4 block text-white">55</span>
                            <small class="text-muted">通知公告</small>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="padder-v">
                            <span class="m-b-xs h4 block text-white">2,035</span>
                            <small class="text-muted">邮件</small>
                        </div>
                    </div>
                </div>
            </section>
        </li>
        <li>
            <div class="m-t m-l">
                <a href="price.html" class="dropdown-toggle btn btn-xs btn-primary" title="Upgrade">
                    <i class="fa fa-long-arrow-up"></i>
                </a>
            </div>
        </li>
    </ul>
    <div class="flleft">&nbsp;</div>
    <a href="#" class="btn btn-rounded btn-sm btn-twitter"><i class="fa fa-fw fa-envelope"></i>信息中心</a>
    <a href="#" class="btn btn-rounded btn-sm btn-facebook"><i class="fa fa-fw fa-book"></i>我的办公桌</a>
    <a href="#" class="btn btn-rounded btn-sm btn-gplus"><i class="fa fa-fw fa-folder"></i>文档中心</a>
    <ul class="nav navbar-nav navbar-right hidden-xs nav-user">
        <li class="hidden-xs">
            <a href="#" class="dropdown-toggle dk" data-toggle="dropdown">
                <i class="fa fa-bell"></i>
                <span class="badge badge-sm up bg-danger m-l-n-sm count">2</span>
            </a>
            <section class="dropdown-menu aside-xl">
                <section class="panel bg-white">
                    <header class="panel-heading b-light bg-light">
                        <strong>你有<span class="count">3</span>条消息</strong>
                    </header>
                    <div class="list-group list-group-alt animated fadeInRight">
                        <a href="#" class="media list-group-item">
                                    <span class="pull-left thumb-sm">
                                        <img src="<?=Url::to('@web/images/avatar.jpg');?>" alt="John said" class="img-circle">
                                    </span>
                                    <span class="media-body block m-b-none">加入自动部署上传系统<br>
                                        <small class="text-muted">10分钟前</small>
                                    </span>
                        </a>
                        <a href="#" class="media list-group-item">
                                    <span class="media-body block m-b-none">加入办公平台<br>
                                        <small class="text-muted">1小时前</small>
                                    </span>
                        </a>
                    </div>
                    <footer class="panel-footer text-sm">
                        <a href="#" class="pull-right">
                            <i class="fa fa-cog"></i>
                        </a>
                        <a href="#notes" data-toggle="class:show animated fadeInRight">查看所有消息</a>
                    </footer>
                </section>
            </section>
        </li>
        <li class="dropdown hidden-xs"><a href="#" class="dropdown-toggle dker" data-toggle="dropdown"><i class="fa fa-fw fa-search"></i></a>
            <section class="dropdown-menu aside-xl animated fadeInUp">
                <section class="panel bg-white">
                    <form role="search">
                        <div class="form-group wrapper m-b-none">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="搜索">
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-info btn-icon"><i class="fa fa-search"></i></button>
                                        </span>
                            </div>
                        </div>
                    </form>
                </section>
            </section>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="thumb-sm avatar pull-left">
                            <img src="<?=Url::to('@web/images/avatar.jpg');?>">
                        </span>会唐<b class="caret"></b>
            </a>
            <ul class="dropdown-menu animated fadeInRight">
                <span class="arrow top"></span>
                <li><a href="#">修改密码</a> </li>
                <li><a href="#">退出</a> </li>
            </ul>
        </li>
    </ul>
</header>
<!--公用头部  end-->
<section>
    <section class="hbox stretch">
        <!-- 公用左侧导航  begin-->
        <aside class="bg-dark lter aside-md hidden-print" id="nav">
            <section class="vbox">
                <header class="header bg-primary lter text-center clearfix">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-dark btn-icon" title="New project">
                            <i class="fa fa-plus"></i>
                        </button>
                        <div class="btn-group hidden-nav-xs">
                            <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown">
                                添加应用
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu text-left">
                                <li><a href="#">添加内部应用</a></li>
                                <li><a href="#">添加外部应用</a></li>
                            </ul>
                        </div>
                    </div>
                </header>
                <section class="w-f scrollable">
                    <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
                        <!-- 左侧大导航 begin -->
                        <nav class="nav-primary hidden-xs">
                            <ul class="nav">
                                <li class="active">
                                    <a href="#" class="active">
                                        <i class="fa fa-home icon">
                                            <b class="bg-danger"></b>
                                        </i>
                                        <span>首页</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#询单管理">
                                        <i class="fa fa-desktop icon">
                                            <b class="bg-success"></b>
                                        </i>
                                                <span class="pull-right">
                                                    <i class="fa fa-angle-down text"></i>
                                                    <i class="fa fa-angle-up text-active"></i>
                                                </span>
                                        <span>询单管理</span>
                                    </a>
                                    <ul class="nav lt">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-angle-down text"></i>
                                                <i class="fa fa-angle-up text-active"></i>
                                                <span>场地询单</span>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-angle-down text"></i>
                                                <i class="fa fa-angle-up text-active"></i>
                                                <span>套餐咨询</span>
                                            </a>
<!--                                            <ul class="nav bg">-->
<!--                                                <li><a href="../../html_V2/Introduction/ind.html"><i class="fa fa-angle-right"></i><span>OA介绍</span> </a></li>-->
<!--                                                <li><a href="../../html_V2/Introduction/Ethan.html"><i class="fa fa-angle-right"></i><span>响应式布局</span> </a></li>-->
<!--                                                <li><a href="../../html_V2/Introduction/Elements.html"><i class="fa fa-angle-right"></i><span>元素内容</span> </a></li>-->
<!--                                                <li><a href="../../html_V2/Introduction/Extension.html"><i class="fa fa-angle-right"></i><span>扩展与普及</span> </a></li>-->
<!--                                            </ul>-->
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#订单管理">
                                        <i class="fa fa-upload icon">
                                            <b class="bg-info"></b>
                                        </i>
                                                <span class="pull-right">
                                                    <i class="fa fa-angle-down text"></i>
                                                    <i class="fa fa-angle-up text-active"></i>
                                                </span><span>订单管理</span>
                                    </a>
                                    <ul class="nav lt">
                                        <li class="active">
                                            <a href="#">
                                                <i class="fa fa-angle-down text"></i>
                                                <i class="fa fa-angle-up text-active"></i>
                                                <span>场地订单</span>
                                            </a>

                                        </li>
                                        <li class="active">
                                            <a href="#">
                                                <i class="fa fa-angle-down text"></i>
                                                <i class="fa fa-angle-up text-active"></i>
                                                <span>套餐订单</span>
                                            </a>

                                        </li>
                                        <li class="active">
                                            <a href="#">
                                                <i class="fa fa-angle-down text"></i>
                                                <i class="fa fa-angle-up text-active"></i>
                                                <span>返佣订单</span>
                                            </a>

                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#商品管理">
                                        <i class="fa fa-edit icon">
                                            <b class="bg-dark"></b>
                                        </i>
                                                <span class="pull-right">
                                                    <i class="fa fa-angle-down text"></i>
                                                    <i class="fa fa-angle-up text-active"></i>
                                                </span><span>商品管理</span>
                                    </a>
                                    <ul class="nav lt">
                                        <li>
                                            <a href="<?=Url::to(['placeinfo/index']);?>">
                                                <i class="fa fa-angle-down text"></i>
                                                <i class="fa fa-angle-up text-active"></i>
                                                <span>场地管理</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-angle-down text"></i>
                                                <i class="fa fa-angle-up text-active"></i>
                                                <span>套餐管理</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-angle-down text"></i>
                                                <i class="fa fa-angle-up text-active"></i>
                                                <span>酒店品牌维护</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-angle-down text"></i>
                                                <i class="fa fa-angle-up text-active"></i>
                                                <span>地理位置管理</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#推广管理">
                                        <i class="fa fa-edit icon">
                                            <b class="bg-dark"></b>
                                        </i>
                                                <span class="pull-right">
                                                    <i class="fa fa-angle-down text"></i>
                                                    <i class="fa fa-angle-up text-active"></i>
                                                </span><span>推广管理</span>
                                    </a>
                                    <ul class="nav lt">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-angle-down text"></i>
                                                <i class="fa fa-angle-up text-active"></i>
                                                <span>咨询管理</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-angle-down text"></i>
                                                <i class="fa fa-angle-up text-active"></i>
                                                <span>焦点图管理</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-angle-down text"></i>
                                                <i class="fa fa-angle-up text-active"></i>
                                                <span>首页推广</span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li>
                                    <a href="#审核管理">
                                        <i class="fa fa-edit icon">
                                            <b class="bg-dark"></b>
                                        </i>
                                                <span class="pull-right">
                                                    <i class="fa fa-angle-down text"></i>
                                                    <i class="fa fa-angle-up text-active"></i>
                                                </span><span>审核管理</span>
                                    </a>
                                    <ul class="nav lt">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-angle-down text"></i>
                                                <i class="fa fa-angle-up text-active"></i>
                                                <span>密钥管理</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-angle-down text"></i>
                                                <i class="fa fa-angle-up text-active"></i>
                                                <span>商品审核</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-angle-down text"></i>
                                                <i class="fa fa-angle-up text-active"></i>
                                                <span>场地认领</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-angle-down text"></i>
                                                <i class="fa fa-angle-up text-active"></i>
                                                <span>企业实名制审核</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-angle-down text"></i>
                                                <i class="fa fa-angle-up text-active"></i>
                                                <span>授信资料审核</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-angle-down text"></i>
                                                <i class="fa fa-angle-up text-active"></i>
                                                <span>店铺管理</span>
                                            </a>
                                        </li>
                                        </ul>
                                        </li>
                                        <li>
                                            <a href="#会员管理">
                                                <i class="fa fa-desktop icon">
                                                    <b class="bg-success"></b>
                                                </i>
                                                <span class="pull-right">
                                                    <i class="fa fa-angle-down text"></i>
                                                    <i class="fa fa-angle-up text-active"></i>
                                                </span>
                                                <span>会员管理</span>
                                            </a>
                                            <ul class="nav lt">
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-angle-down text"></i>
                                                        <i class="fa fa-angle-up text-active"></i>
                                                        <span>个人会员</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#系统管理">
                                                <i class="fa fa-desktop icon">
                                                    <b class="bg-success"></b>
                                                </i>
                                                <span class="pull-right">
                                                    <i class="fa fa-angle-down text"></i>
                                                    <i class="fa fa-angle-up text-active"></i>
                                                </span>
                                                <span>系统管理</span>
                                            </a>
                                            <ul class="nav lt">
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-angle-down text"></i>
                                                        <i class="fa fa-angle-up text-active"></i>
                                                        <span>场地维护</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-angle-down text"></i>
                                                        <i class="fa fa-angle-up text-active"></i>
                                                        <span>操作日志</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <!-- 左面大导航 end -->
                    </div>
                </section>
                <footer class="footer lt hidden-xs b-t b-dark">
                    <nav class=" on aside-md m-l-n dropup" id="chat">
                        <ul class="dropdown-menu aside-md panel-body">
                            <li><a href="javascript:;">SysV2</a></li>
                            <li><a href="javascript:;">Ucenter</a></li>
                            <li><a href="javascript:;">中心信息</a></li>
                            <li><a href="javascript:;">沟通平台</a></li>
                            <li><a href="javascript:;">考勤管理</a></li>
                            <li><a href="javascript:;">运维事务</a></li>
                        </ul>
                    </nav>
                    <a href="#nav" data-toggle="class:nav-xs" class="pull-right btn btn-sm btn-dark btn-icon">
                        <i class="fa fa-angle-left text"></i>
                        <i class="fa fa-angle-right text-active"></i>
                        <i class="fa fa-angle-right text-active"></i>
                    </a>
                    <div class="btn-group hidden-nav-xs">
                        <button type="button" title="Chats" class="btn  btn-dark" data-toggle="dropdown" data-target="#chat">
                            <i class="fa fa-laptop"></i>
                            外部系统
                        </button>
                    </div>
                </footer>
            </section>
        </aside>
        <!-- 公用左侧导航  end-->
        <section id="content" style="width:100%;">
            <section class="vbox">

                <section class="scrollable padder"><?= Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]) ?>
                    <?= $content ?>
                </section>
            </section>
        </section>
<footer class="footer">

</footer>

</body>
</html>
