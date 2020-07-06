<?php
/**
 * 个人主页式的卡通Typecho模板主题
 * https://github.com/kicosoda/Typecho-Theme-IMDWQ
 * @package IMDWQ
 * @author kicosoda
 * @version 3.1
 * @link https://kicosoda.com
 */
 ?>
<!DOCTYPE html>
<html class="font-auto">
<head>
    <meta charset="UTF-8">
    <title><?php $this->options->biaoti(); ?> | <?php $this->options->fubiaoti(); ?></title>
	<link rel="shortcut icon" href="<?php $this->options->icon(); ?>">
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1"/>
    <meta name="keywords" content="<?php $this->options->guanjianci(); ?>"/>
    <meta name="description" content="<?php $this->options->miaoshu(); ?>"/>
</head>
<body>
<?php $this->need('sidebar.php'); ?>
<main class="is-article">
<br>
    <section class="me">
        <div class="my-avatar project-list" style="display: contents;margin: 0 auto;">
            <a href="<?php $this->options->touxianglian(); ?>"><img style="border-radius:66%;max-height:144px;" ks-original="<?php $this->options->touxiang(); ?>"></a>
        </div>
        <div class="my-info">
            <h1 style="margin-bottom: 0;"><?php $this->options->name(); ?></h1>
            <p><?php $this->options->jieshao(); ?></p>
        </div>
    </section>
        <section class="page">
                <section class="project-list">
            <div class="row multi"> 
<?php while($this->next()): ?>
<div class="col-12 col-s-6 col-m-6">
                    <a href="<?php $this->permalink() ?>" style="overflow:hidden;position:relative;border-radius:1em">
                        <img ks-original="<?php $this->fields->toutu(); ?>">
                        <time style="bottom:0;left:0;padding:.5em .75em;position:absolute;background:rgba(0,0,0,.5);transition:transform .3s;border-radius:0 1em 0 0;color:#fff"><?php $this->date('Y-m-d'); ?></time>
                    </a>
                </div>   
<?php endwhile; ?>
				</div>
        </section>   
		<br>
<div class="news-head">
                <h3 class="more" style="float: left;"><?php $this->pageLink('<i class="fa fa-chevron-left"></i>'); ?></h3>
			<h3 class="more" style="float: right;"><?php $this->pageLink('<i class="fa fa-chevron-right"></i>','next'); ?></h3>
			</div>
		</section>
<?php $this->need('footer.php'); ?>