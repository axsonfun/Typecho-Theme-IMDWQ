<?php $this->need('head.php'); ?>
<?php $this->need('sidebar.php'); ?>
<main class="is-article"><br><br><section class="page"><section class="project-head project-list"><a><img ks-original="<?php $this->fields->toutu(); ?>" style="border-radius:.5em;max-width:-webkit-fill-available;margin-top:20px"/></a></section><article class="paul-post"><h1 style="font-size:1.8em"><?php $this->title() ?></h1><?php $this->content(); ?><p style="font-size:1.2em;margin-top:.2em"><i class="fa fa-calendar"></i> <?php $this->date('Y-m-d'); ?></p>
<div class="ks-notice yellow"><span class="content"><?php $this->options->banquan(); ?></span></div></article></section>
<?php $this->need('footer.php'); ?>