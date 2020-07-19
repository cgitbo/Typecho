<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<main id="main">
    <article class="post">
			<h2 class="post-title"><?php $this->title() ?></h2>
        <div class="post-content">
            <?php $this->content(); ?>
        </div>
    </article>
    <?php $this->need('comments.php'); ?>
</main>

<?php $this->need('footer.php'); ?>
