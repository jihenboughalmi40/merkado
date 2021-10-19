<?php

namespace NotificationX\Core\Rest;

use NotificationX\Core\Analytics as CoreAnalytics;
use NotificationX\GetInstance;
use NotificationX\NotificationX;
use WP_REST_Controller;
use WP_REST_Response;
use WP_REST_Server;
use WP_Error;

class Analytics {
    /**
     * Instance of Analytics
     *
     * @var Analytics
     */
    use GetInstance;

    /**
     * Post type.
     *
     * @since 4.7.0
     * @var string
     */
    protected $post_type;

    /**
     * Constructor.
     *
     * @since 4.7.0
     *
     * @param string $post_type Post type.
     */
    public function __construct() {
        $this->namespace = 'notificationx/v1';
        $this->rest_base = 'analytics';
        add_action('rest_api_init', [$this, 'register_routes']);
    }

    /**
     * Registers the routes for the objects of the controller.
     *
     * @since 4.7.0
     *
     * @see register_rest_route()
     */
    public function register_routes() {
        register_rest_route(
            $this->namespace,
            '/' . $this->rest_base,
            array(
                // For backend analytics
                array(
                    'methods'             => WP_REST_Server::READABLE,
                    'callback'            => array($this, 'get_analytics'),
                    // maybe use
                    'permission_callback' => [$this, 'read_analytics'],
                ),
                // For Frontend analytics
                array(
                    'methods'             => WP_REST_Server::EDITABLE,
                    'callback'            => array($this, 'insert_analytics'),
                    'permission_callback' => '__return_true',
                ),
            )
        );

    }

    public function read_analytics( $request ) {
        return current_user_can('read_notificationx_analytics');
    }

    public function get_analytics($request){
        $params = $request->get_params();
        $result = CoreAnalytics::get_instance()->get_stats($params);
        wp_send_json($result);
    }

    public function insert_analytics($request){
        $params = $request->get_params();
        $result = CoreAnalytics::get_instance()->insert_analytics($params['nx_id'], 'clicks');
        wp_send_json_success($result);
    }
}