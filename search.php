<!DOCTYPE html>
<html class="font-auto">
<head>
    <meta charset="UTF-8">
    <title><?php $this->archiveTitle(array('search'    =>  _t('搜索 “%s”')), '', ''); ?> | <?php $this->options->biaoti(); ?></title>
	<link rel="shortcut icon" href="<?php $this->options->icon(); ?>">
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1"/>
</head>
<body>
<?php $this->need('sidebar.php'); ?>
<main class="is-article">
<br><br>
    <section class="me" style="text-align:center">
        <div class="my-avatar" style="display:contents;margin:0 auto">
            <svg height="144px" viewBox="0 0 408 408" width="144px" xmlns="http://www.w3.org/2000/svg"><path d="m246.238281 312.3125c-1.023437 0-2.046875-.390625-2.832031-1.167969l-46.101562-46.105469c-.816407-.816406-1.242188-1.941406-1.167969-3.09375.078125-1.152343.648437-2.210937 1.558593-2.914062 8.226563-6.277344 15.585938-13.640625 21.871094-21.871094.707032-.914062 1.769532-1.488281 2.914063-1.558594 1.175781-.066406 2.28125.351563 3.09375 1.167969l46.105469 46.101563c1.558593 1.5625 1.558593 4.097656 0 5.65625l-22.625 22.625c-.765626.769531-1.789063 1.160156-2.816407 1.160156zm-40.09375-49.761719 40.101563 40.105469 16.96875-16.96875-40.101563-40.101562c-5.105469 6.199218-10.785156 11.878906-16.96875 16.964843zm0 0" fill="#263238"/><path d="m292 24h-32c-2.207031 0-4-1.792969-4-4s1.792969-4 4-4h32c2.207031 0 4 1.792969 4 4s-1.792969 4-4 4zm0 0" fill="#263238"/><path d="m276 40c-2.207031 0-4-1.792969-4-4v-32c0-2.207031 1.792969-4 4-4s4 1.792969 4 4v32c0 2.207031-1.792969 4-4 4zm0 0" fill="#263238"/><path d="m340 64h-32c-2.207031 0-4-1.792969-4-4s1.792969-4 4-4h32c2.207031 0 4 1.792969 4 4s-1.792969 4-4 4zm0 0" fill="#263238"/><path d="m324 80c-2.207031 0-4-1.792969-4-4v-32c0-2.207031 1.792969-4 4-4s4 1.792969 4 4v32c0 2.207031-1.792969 4-4 4zm0 0" fill="#263238"/><path d="m271.695312 282.855469-28.289062 28.289062c-3.125 3.128907-3.125 8.191407 0 11.3125l79.195312 79.191407c3.125 3.128906 8.191407 3.128906 11.308594 0l28.289063-28.289063c3.128906-3.128906 3.128906-8.191406 0-11.3125l-79.191407-79.191406c-3.121093-3.121094-8.183593-3.121094-11.3125 0zm0 0" fill="#40c4ff"/><path d="m328.265625 407.984375c-3.074219 0-6.144531-1.167969-8.488281-3.503906l-79.191406-79.199219c-2.265626-2.257812-3.515626-5.265625-3.515626-8.480469 0-3.199219 1.25-6.226562 3.515626-8.496093l28.277343-28.28125c4.671875-4.679688 12.28125-4.695313 16.976563 0l79.191406 79.191406c4.679688 4.679687 4.679688 12.289062 0 16.96875l-28.289062 28.289062c-2.335938 2.351563-5.40625 3.511719-8.476563 3.511719zm-50.914063-123.472656c-1.0625 0-2.070312.417969-2.832031 1.167969l-28.28125 28.28125c-.757812.757812-1.167969 1.765624-1.167969 2.832031 0 1.0625.417969 2.0625 1.167969 2.824219l79.195313 79.199218c1.558594 1.542969 4.09375 1.542969 5.65625 0l28.285156-28.289062c.761719-.757813 1.167969-1.757813 1.167969-2.832032 0-1.070312-.414063-2.070312-1.167969-2.832031l-79.191406-79.191406c-.75-.742187-1.757813-1.160156-2.832032-1.160156zm0 0" fill="#263238"/><path d="m127.449219 290.886719c-68.378907 0-124-55.621094-124-124 0-68.375 55.621093-124 124-124 68.367187 0 124 55.625 124 124 0 68.378906-55.625 124-124 124zm0-240c-63.960938 0-116 52.042969-116 116 0 63.960937 52.039062 116 116 116 63.957031 0 116-52.039063 116-116 0-63.957031-52.042969-116-116-116zm0 0" fill="#263238"/><path d="m223.449219 166.894531c0 53.015625-42.984375 96-96 96s-96-42.984375-96-96 42.984375-96 96-96c53.023437 0 96 42.976563 96 96zm0 0" fill="#ffd740"/><g fill="#263238"><path d="m127.449219 266.886719c-55.144531 0-100-44.855469-100-100s44.855469-100 100-100c55.136719 0 100 44.855469 100 100s-44.863281 100-100 100zm0-192c-50.730469 0-92 41.273437-92 92 0 50.730469 41.269531 92 92 92 50.726562 0 92-41.269531 92-92 0-50.726563-41.273438-92-92-92zm0 0"/><path d="m199.449219 170.886719c-2.210938 0-4-1.789063-4-4 0-37.496094-30.503907-68-68-68-2.210938 0-4-1.789063-4-4 0-2.207031 1.789062-4 4-4 41.902343 0 76 34.097656 76 76 0 2.21875-1.785157 4-4 4zm0 0"/><path d="m20 338.449219h-16c-2.207031 0-4-1.792969-4-4 0-2.210938 1.792969-4 4-4h16c2.207031 0 4 1.789062 4 4 0 2.207031-1.792969 4-4 4zm0 0"/><path d="m124 338.449219h-88c-2.207031 0-4-1.792969-4-4 0-2.210938 1.792969-4 4-4h88c2.207031 0 4 1.789062 4 4 0 2.207031-1.792969 4-4 4zm0 0"/><path d="m404 218.449219h-16c-2.207031 0-4-1.792969-4-4 0-2.210938 1.792969-4 4-4h16c2.207031 0 4 1.789062 4 4 0 2.207031-1.792969 4-4 4zm0 0"/><path d="m372 218.449219h-88c-2.207031 0-4-1.792969-4-4 0-2.210938 1.792969-4 4-4h88c2.207031 0 4 1.789062 4 4 0 2.207031-1.792969 4-4 4zm0 0"/></g></svg>
        </div>
        <div class="my-info">
            <h1 style="margin-bottom:0"><?php $this->archiveTitle(array('search'    =>  _t('搜索 “%s” 的文章')), '', ''); ?></h1>
            <p>请问您今天要来点兔子吗</p>
        </div>
    </section>
        <section class="page">
                <section class="project-list">
            <div class="row multi">        
<?php if ($this->have()): ?>
<?php while($this->next()): ?>
<div class="col-12 col-s-3 col-m-6">
                    <a href="<?php $this->permalink() ?>" style="overflow:hidden;position:relative;border-radius:1em">
                        <img ks-original="<?php $this->fields->toutu2(); ?>" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAisAAAE0AQAAAADFvU5WAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAnRSTlMAAHaTzTgAAAACYktHRAAB3YoTpAAAAAd0SU1FB+QHBxQAFoENqWAAAAAsSURBVHja7cEBDQAAAMKg909tDjegAAAAAAAAAAAAAAAAAAAAAAAAAAAA/g1VbAABMwuB1gAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wNy0wN1QxMjowMDoyMiswODowMFYGf0oAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDctMDdUMTI6MDA6MjIrMDg6MDAnW8f2AAAAAElFTkSuQmCC" style="max-width:100%;vertical-align:middle">
                        <time style="bottom:0;left:0;padding:.5em .75em;position:absolute;background:rgba(0,0,0,.5);transition:transform .3s;border-radius:0 1em;color:#fff"><i class="fa fa-calendar"></i> <?php $this->date('Y-m-d'); ?></time>
                    </a>
                </div>   
<?php endwhile; ?>		
<?php else: ?>
            <p style="font-size:3em;margin:0 auto">没有找到文章</p></div>
        </section> <br><br><br><br> 
			<div class="news-head" style="text-align:center">
<h3 class="title"><a href="<?php $this->options->siteUrl(); ?>" style="padding:0"><i class="fa fa-home"></i>返回首页</a></h3>
</div>
<?php endif; ?>	  
		<br>
<div class="news-head">
                <h3 class="more" style="float:left"><?php $this->pageLink('<i class="fa fa-chevron-left"></i>'); ?></h3>
			<h3 class="more" style="float:right"><?php $this->pageLink('<i class="fa fa-chevron-right"></i>','next'); ?></h3>
			</div>
		</section>
<?php $this->need('footer.php'); ?>