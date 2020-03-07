<?php
/**
 * 自用模板不外传
 * @package IMDWQ
 * @author Dorasees
 * @version 2.5
 * @link https://www.dorasees.com
 */
 ?>
<!DOCTYPE html>
<html class="font-auto">
<head>
    <meta charset="UTF-8">
    <title><?php $this->options->biaoti(); ?> | <?php $this->options->fubiaoti(); ?></title>
	<link rel="shortcut icon" href="<?php $this->options->icon(); ?>">
    <link href="<?php $this->options->themeUrl('css.css'); ?>" rel="stylesheet" type="text/css"/>
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1"/>
    <meta name="keywords" content="<?php $this->options->guanjianci(); ?>"/>
    <meta name="description" content="<?php $this->options->miaoshu(); ?>"/>
    <link href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
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
                    <a href="<?php $this->permalink() ?>">
                        <img ks-original="<?php $this->fields->toutu(); ?>">
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