<footer class="footer">
    <div class="container">
        <div class="footer-inner">
            <div class="footer-logo">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo.png"
                    alt="<?php bloginfo('name'); ?>">
                <p class="company-name">
                    <?php bloginfo('name'); ?>
                </p>
            </div>
            <div class="footer-links">
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/company/')); ?>">会社概要</a></li>
                    <li><a href="<?php echo esc_url(home_url('/#guide')); ?>">寮案内</a></li>
                    <li><a href="<?php echo esc_url(home_url('/flow/')); ?>">ご入居の流れ</a></li>
                    <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a></li>
                    <li><a href="<?php echo esc_url(home_url('/recruit/')); ?>">採用情報</a></li>
                    <li><a href="<?php echo esc_url(home_url('/privacy/')); ?>">プライバシーポリシー</a></li>
                </ul>
            </div>
        </div>
        <p class="copyright">&copy;
            <?php echo date('Y'); ?> Mew Seed Co., Ltd. All Rights Reserved.
        </p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>