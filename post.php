<?php $this->need('head.php'); ?>
<?php $this->need('sidebar.php'); ?>
<main class="is-article"><br><section class="page"><section class="project-head project-list"><a><img ks-original="<?php $this->fields->toutu(); ?>" style="border-radius:.5em;max-width:-webkit-fill-available;margin-top:20px"/></a></section><article class="paul-post"><?php $this->content(); ?></article></section>
<?php $this->need('footer.php'); ?>