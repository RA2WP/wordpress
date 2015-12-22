<?php

class WPDM_UserDashboard
{

    public $dashboard_menu;
    public $dashboard_menu_actions;

    function __construct(){
        add_action("wp", array($this, 'DashboardMenuInit'));
        add_shortcode("wpdm_user_dashboard", array($this, 'Dashboard'));
    }

    function DashboardMenuInit(){
        $this->dashboard_menu[''] = array('name'=> 'Profile', 'callback' => array($this, 'Profile'));
        $this->dashboard_menu['download-history'] = array('name'=> 'Download History', 'callback' => array($this, 'DownloadHistory'));
        $this->dashboard_menu['edit-profile'] = array('name'=> 'Edit Profile', 'callback' => array($this, 'EditProfile'));
        $this->dashboard_menu['logout'] = array('name'=> 'Logout', 'callback' => array($this, 'Logout'));
        $this->dashboard_menu = apply_filters("wpdm_user_dashboard_menu", $this->dashboard_menu);
        $this->dashboard_menu_actions = apply_filters("wpdm_dashboard_menu_actions", $this->dashboard_menu_actions);
    }

    function Dashboard(){
        global $wp_query;

        if(!is_user_logged_in()) {
            include wpdm_tpl_path('wpdm-be-member.php');
            return;
        }

        $udb_page = isset($wp_query->query_vars['udb_page'])?$wp_query->query_vars['udb_page']:'';
        $udb_page_parts = explode("/", $udb_page);
        $udb_page = $udb_page_parts[0];
        if(isset($this->dashboard_menu[$udb_page]['callback']))
            $dashboard_contents = call_user_func($this->dashboard_menu[$udb_page]['callback'], $udb_page_parts);
        else if(isset($this->dashboard_menu[$udb_page]['shortcode']))
            $dashboard_contents = do_shortcode($this->dashboard_menu[$udb_page]['shortcode']);
        else if(isset($this->dashboard_menu_actions[$udb_page]))
            $dashboard_contents = call_user_func($this->dashboard_menu_actions[$udb_page], $udb_page_parts);
        //else if(isset($this->dashboard_menu_actions[$udb_page]['shortcode']))
        //    $dashboard_contents = do_shortcode($this->dashboard_menu_actions[$udb_page]['shortcode']);

        include_once wpdm_tpl_path('wpdm-dashboard.php');
    }

    function Profile(){
        ob_start();
        include_once wpdm_tpl_path('user-dashboard/profile.php');
        return ob_get_clean();
    }

    function DownloadHistory(){
        global $wpdb, $current_user;
        ob_start();
        include_once wpdm_tpl_path('user-dashboard/download-history.php');
        return ob_get_clean();
    }

    function EditProfile(){
        global $wpdb, $current_user;
        ob_start();
        include_once wpdm_tpl_path('user-dashboard/edit-profile.php');
        return ob_get_clean();
    }

    function Logout(){
        wp_logout();
    }

}

new WPDM_UserDashboard();