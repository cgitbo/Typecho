<?php
/**
 * @package 日志
 * @author 迷你日志
 * @version 1.1
 * @link https://minirizhi.com
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<main id="main">
	<?php while($this->next()): ?>
        <article class="post">
			<h2 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
			<ul class="meta">
				<li><time><?php $this->date('Y-m-d'); ?></time></li>
				<li><?php $this->category(','); ?></li>
				<li><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 评论', '%d 评论'); ?></a></li>
			</ul>
            <div class="post-excerpt">
    			<?php $this->excerpt(180); ?>
            </div>
            <div class="clearfix"></div>
        </article>
	<?php endwhile; ?>
    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</main>
<?php $this->need('footer.php'); ?>