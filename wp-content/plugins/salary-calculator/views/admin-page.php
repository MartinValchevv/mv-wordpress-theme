<?php
if (!defined('ABSPATH')) exit;
global $salaryCalculatorPlugin;
?>

<div class="wrapper">
        <h1><?php echo esc_html(get_admin_page_title()); ?></h1> 


        <form method="post" action="<?php echo esc_html(admin_url('admin-post.php')); ?>">
        <input type="hidden" name="salary-admin-form" value="1" />
                <div class="information">
                        <h2><?php _e('Настройки'); ?></h2>
            <p>
                <label><?php _e('Ставка на час'); ?></label><br />
                <input name="sum_per_hour" value="<?php echo $salaryCalculatorPlugin->getOption('sum_per_hour'); ?>" />
            </p>
            <p>
                <label><?php _e('Продължителност на работния ден (часове)'); ?></label><br />
                <input name="day_hours" value="<?php echo $salaryCalculatorPlugin->getOption('day_hours'); ?>" />
            </p>
           
        </div><!-- .information -->
        
        <?php
        wp_nonce_field('salary-save', 'salary-message');
        submit_button(); ?>  
    </form>
</div><!-- .wrapper -->