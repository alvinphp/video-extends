<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>

<!-- Header of the page -->
<header class="headervideo-extends">
    <h1><?php esc_html_e( 'Video Extends Plugin Documentation', 'video-extends' ); ?></h1>
</header>

<!-- Documentation Content -->
<div class="content">
    <section id="basic_usage">
        <h2><?php esc_html_e( 'Basic Usage of the Plugin', 'video-extends' ); ?></h2>
        <pre>
[video_extends video="Sintel.mp4" logo="logo.png" width="800" height="450" autoplay="true" loop="true"]
        </pre>
    </section>

    <section id="usage_with_markers">
        <h2><?php esc_html_e( 'Usage with Markers', 'video-extends' ); ?></h2>
        <pre>
[video_extends video="Sintel.mp4" logo="logo.png" width="800" height="450" autoplay="true" loop="true" markers="0:39=Intro,5:50=Chapter 2,7:50=Chapter 3,9:00=Chapter 4"]
        </pre>
    </section>

    <section id="file_locations">
        <h2><?php esc_html_e( 'File Locations (Videos and Logos)', 'video-extends' ); ?></h2>
        <p><?php esc_html_e( 'For the plugin to work properly, you must place the video, logo, and poster files in the following folders within your plugin structure:', 'video-extends' ); ?></p>
        <ul>
            <li><strong><?php esc_html_e( 'Videos:', 'video-extends' ); ?></strong> <?php esc_html_e( 'Video files should be located in the', 'video-extends' ); ?> <code><?php echo esc_html( 'assets/video/' ); ?></code> <?php esc_html_e( 'folder. Example:', 'video-extends' ); ?> <code><?php echo esc_html( 'assets/video/Sintel.mp4' ); ?></code></li>
            <li><strong><?php esc_html_e( 'Logos:', 'video-extends' ); ?></strong> <?php esc_html_e( 'Logo image files should be located in the', 'video-extends' ); ?> <code><?php echo esc_html( 'assets/img/' ); ?></code> <?php esc_html_e( 'folder. Example:', 'video-extends' ); ?> <code><?php echo esc_html( 'assets/img/logo.png' ); ?></code></li>
            <li><strong><?php esc_html_e( 'Posters:', 'video-extends' ); ?></strong> <?php esc_html_e( 'Poster image files (optional) should be located in the', 'video-extends' ); ?> <code><?php echo esc_html( 'assets/img/' ); ?></code> <?php esc_html_e( 'folder. Example:', 'video-extends' ); ?> <code><?php echo esc_html( 'assets/img/poster.png' ); ?></code></li>
        </ul>
    </section>

    <br>

    <section>
        <a href="<?php echo esc_url( 'https://github.com/alvinphp/documentation-video-extends/wiki' ); ?>">
            <?php esc_html_e( 'Complete documentation', 'video-extends' ); ?>
        </a>
    </section>
</div>
