<!-- フッターエリア -->
<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-info">
                <h3>WP Practice</h3>
                <p>WordPressテーマ化の学習用デモサイトです。</p>
            </div>
            <nav class="footer-links">
                <?php
                $args = [
                    'menu' => '',
                    'menu_class' => '',
                    'container' => 'false',
                ];
                wp_nav_menu($args);
                ?>
            </nav>
        </div>
        <div class="copyright">
            <p>&copy; 2026 WP Practice. All Rights Reserved.</p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>