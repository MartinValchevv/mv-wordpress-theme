<?php
if (!defined('ABSPATH')) exit;
/*
    Plugin Name: Salary Calculator
    Plugin URI: 
    description: Salary Calculator
    Version: 0.0.1
    Author: Martin Valchev
    Author URI: 
    License: GPL2
*/

class SalaryCalculatorPlugin
{
    public function __construct()
    {
        add_action('admin_menu', array($this, 'adminMenu'));
        add_action('wp_enqueue_scripts', array($this, 'enqueueScripts'));
        add_action('admin_post', array($this, 'save'));
        add_shortcode('salary-calculator-plugin', array($this, 'shortcodeAction'));
    }

    public function adminMenu()
    {
        add_options_page(
            'Salary Calculator Administration Page',
            'Salary Calculator',
            'manage_options',
            'salary-calculator-admin-page',
            array($this, 'renderPage')
        );
    }

    public function renderPage()
    {
        include_once 'views/admin-page.php';
    }

    public function enqueueScripts()
    {
        wp_enqueue_style('salary-calculator-plugin-styles', plugins_url('assets/styles.css', __FILE__));
        wp_enqueue_script( 'jqyery-js', "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" );
    }

    public function shortcodeAction()
    {
        ob_start();
        include_once 'views/frontend-page.php';
        $html = ob_get_contents();
        ob_end_clean();

        return $html;
    }

    public function save()
    {
        // First, validate the nonce and verify the user as permission to save.
        if (!($this->has_valid_nonce() && current_user_can('manage_options'))) {
            echo 'Not a valid nonce';
        }

        if (isset($_POST['salary-admin-form'])) {
            $data = array(
                'sum_per_hour' => sanitize_text_field($_POST['sum_per_hour']),
                'day_hours' => sanitize_text_field($_POST['day_hours']),
            );

            update_option('salary-data', json_encode($data));
        }

        $this->redirect();
    }

    public function getOption($name) //email
    {
        $data = get_option('salary-data');
        if (empty($data)) {
            return false;
        }

        $data = json_decode($data);
        if (isset($data->$name)) {
            return stripslashes($data->$name);
        }

        return false;
    }

    private function has_valid_nonce()
    {
        // If the field isn't even in the $_POST, then it's invalid.
        if (!isset($_POST['salary-message'])) {
            return false;
        }

        $field  = wp_unslash($_POST['salary-message']);
        $action = 'salary-save';

        return wp_verify_nonce($field, $action);
    }

    private function redirect()
    {
        // To make the Coding Standards happy, we have to initialize this.
        if (!isset($_POST['_wp_http_referer'])) {
            $_POST['_wp_http_referer'] = wp_login_url();
        }

        // Sanitize the value of the $_POST collection for the Coding Standards.
        $url = sanitize_text_field(
            wp_unslash($_POST['_wp_http_referer'])
        );

        // Finally, redirect back to the admin page.
        wp_safe_redirect($url);
        exit;
    }
}

$salaryCalculatorPlugin = new SalaryCalculatorPlugin();
