<?php
/**
 * 个人主页式的卡通Typecho模板主题
 * @package IMDWQ
 * @author kicosoda
 * @version 3.2
 * @link https://www.kicosoda.com
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
    <style>@media screen and (max-width:768px){html.font-auto {font-size:14px}}.row [class*=col-] {margin-bottom:2em;padding:0 1em}.row .col-12 {max-width:100%;flex:0 0 100%}@media screen and (min-width:600px){.row .col-s-6 {flex:0 0 50%;max-width:50%}}@media screen and (min-width:900px){.row .col-m-6 {flex:0 0 50%;max-width:50%}}html {font:16px/1.5 'Microsoft Yahei',PingFang SC,Hiragino Sans GB,sans-serif}@media screen and (min-width:768px){header nav {transform:translateX(0)!important}}*, :after, :before {box-sizing:border-box}</style>
</head>
<body style="margin:0;padding:0">
<?php $this->need('sidebar.php'); ?>
<main class="is-article" style="max-width:50em;margin:0 auto;padding:1.5em 2em;box-sizing:border-box;min-height:calc(100vh - 10vw + 64px - 7.75em)">
<br>
    <section class="me" style="text-align:center;margin-bottom:3em">
        <div class="my-avatar project-list" style="margin:0 auto;height:144px">
            <a href="<?php $this->options->touxianglian(); ?>"><img style="border-radius:50%" ks-original="<?php $this->options->touxiang(); ?>" width="144" height="144"></a>
        </div>
        <div class="my-info">
            <h1 style="font-size:2em;margin-bottom:0;margin:0;padding:0"><?php $this->options->name(); ?></h1>
            <p style="line-height:1.8;margin:0"><?php $this->options->jieshao(); ?></p>
        </div>
    </section>
        <section class="page">
                <section class="project-list">
            <div class="row multi" style="display:flex;flex-wrap:wrap;margin:0 -1em -2em"> 
<?php while($this->next()):?>
<div class="col-12 col-s-6 col-m-6">
                    <a href="<?php $this->permalink() ?>" style="overflow:hidden;position:relative;border-radius:1em;display:block">
                        <img ks-original="<?php $this->fields->toutu2(); ?>" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAisAAAE0AQAAAADFvU5WAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAnRSTlMAAHaTzTgAAAACYktHRAAB3YoTpAAAAAd0SU1FB+QHBxQAFoENqWAAAAAsSURBVHja7cEBDQAAAMKg909tDjegAAAAAAAAAAAAAAAAAAAAAAAAAAAA/g1VbAABMwuB1gAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wNy0wN1QxMjowMDoyMiswODowMFYGf0oAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDctMDdUMTI6MDA6MjIrMDg6MDAnW8f2AAAAAElFTkSuQmCC" style="max-width:100%;vertical-align:middle">
                        <time style="bottom:0;left:0;padding:.5em .75em;position:absolute;background:rgba(0,0,0,.5);transition:transform .3s;border-radius:0 1em 0 0;color:#fff"><?php $this->date('Y-m-d'); ?></time>
                    </a>
                </div>   
<?php endwhile; ?>
				</div>
        </section>   
		<br>
<div class="news-head">
                <h3 class="more" style="float:left"><?php $this->pageLink('<i class="fa fa-chevron-left"></i>'); ?></h3>
			<h3 class="more" style="float:right"><?php $this->pageLink('<i class="fa fa-chevron-right"></i>','next'); ?></h3>
			</div>
		</section>
<?php $this->need('footer.php'); ?>