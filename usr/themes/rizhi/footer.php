<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
    <footer id="footer">
            &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>. 主题：<a target="_blank" href="https://minirizhi.com">日志</a>
<?php $this->options->tongji(); ?>
    </footer>
</div>
<?php $this->footer(); ?>
</body>
</html>