<?php
/**
 * The template for displaying the footer
 *
 */

defined( 'ABSPATH' ) || exit; // Exit if accessed directly


do_action( 'TieLabs/after_main_content' );


TIELABS_HELPER::get_template_part( 'templates/footer' );

?>

		</div><!-- #tie-wrapper /-->

		<?php get_sidebar( 'slide' ); ?>

	</div><!-- #tie-container /-->
</div><!-- .background-overlay /-->

<script>
    document.addEventListener("DOMContentLoaded", loadScripts);

    function loadScripts() {
        // if browser is supported service worker
        if ('serviceWorker' in navigator) {
            // Supported!
            navigator.serviceWorker.register('<?php echo get_template_directory_uri().DIRECTORY_SEPARATOR ?>/sw.js');
        }

        const pwaBanner = document.getElementById('pwa-banner');
        let deferredPrompt;
        window.addEventListener('beforeinstallprompt', (e) => {
            e.preventDefault();

            deferredPrompt = e;

            pwaBanner.style.display = 'block';
        });

        pwaBanner.addEventListener('click', event => {
            event.preventDefault();
            if(deferredPrompt) {
                deferredPrompt.prompt('آیا مایل به نصب اپلیکیشن هستید؟')
            }
        });
    }
</script>
<?php wp_footer(); ?>

</body>
</html>
