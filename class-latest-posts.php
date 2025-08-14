<?php

if (! defined('ABSPATH')) {
    exit;
}

class Latest_Posts_Plugin
{

    private $option_name = 'lpp_post_count';

    public function init()
    {
        // Daftarkan shortcode
        add_shortcode('latest_posts', [$this, 'render_latest_posts']);

        // Tambah menu di dashboard
        add_action('admin_menu', [$this, 'add_admin_menu']);

        // Simpan setting
        add_action('admin_init', [$this, 'register_settings']);
    }

    public function render_latest_posts()
    {
        $count = get_option($this->option_name, 5);

        $args = [
            'post_type'      => 'post',
            'posts_per_page' => intval($count),
            'post_status'    => 'publish',
        ];

        $query = new WP_Query($args);

        if ($query->have_posts()) {
            $output = '<ul>';
            while ($query->have_posts()) {
                $query->the_post();
                $output .= sprintf(
                    '<li><a href="%s">%s</a> - <em>%s</em></li>',
                    esc_url(get_permalink()),
                    esc_html(get_the_title()),
                    esc_html(get_the_date())
                );
            }
            $output .= '</ul>';
            wp_reset_postdata();
        } else {
            $output = '<p>Tidak ada posting terbaru.</p>';
        }

        return $output;
    }

    public function add_admin_menu()
    {
        add_options_page(
            'Latest Posts Settings',
            'Latest Posts',
            'manage_options',
            'latest-posts-plugin',
            [$this, 'settings_page']
        );
    }

    public function register_settings()
    {
        register_setting('lpp_settings_group', $this->option_name, [
            'type'              => 'integer',
            'sanitize_callback' => 'absint',
            'default'           => 5,
        ]);
    }

    public function settings_page()
    {
        ?>
        <div class="wrap">
            <h1>Pengaturan Latest Posts</h1>
            <form method="post" action="options.php">
                <?php
                settings_fields('lpp_settings_group');
                do_settings_sections('lpp_settings_group');
                ?>
                <table class="form-table">
                    <tr valign="top">
                        <th scope="row">Jumlah posting yang ditampilkan</th>
                        <td>
                            <input type="number" name="<?php echo esc_attr($this->option_name); ?>"
                                value="<?php echo esc_attr(get_option($this->option_name, 5)); ?>"
                                min="1" max="20">
                        </td>
                    </tr>
                </table>
                <?php submit_button(); ?>
            </form>
        </div> 
        <?php
    }
}
