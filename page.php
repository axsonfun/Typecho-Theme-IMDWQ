<?php $this->need('head.php'); ?>
<?php $this->need('sidebar.php'); ?>
<main class="is-article">
<br><br>
<section class="page">
<section class="me" style="text-align:center">
        <div class="my-avatar" style="display:contents;margin:0 auto">
            <?php $this->fields->datu(); ?>
        </div>
        <div class="my-info">
            <h1 style="margin-bottom:0"><?php $this->title() ?></h1>
            <p><?php $this->fields->xiaozi(); ?></p>
        </div>
    </section>
<?php $this->content(); ?>
</section>
<?php $this->need('footer.php'); ?>