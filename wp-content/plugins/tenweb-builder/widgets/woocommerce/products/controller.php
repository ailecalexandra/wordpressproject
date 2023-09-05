<?php

namespace Tenweb_Builder\Widgets\Woocommerce\Products;
include_once('widgets/products-base.php');
include_once('classes/products-renderer.php');
include_once('classes/current-query-renderer.php');
include_once('traits/products-trait.php');

use Elementor\Controls_Manager;
use Elementor\Controls_Stack;
use Tenweb_Builder\Classes\Woocommerce\Woocommerce;
use Tenweb_Builder\Widgets\Woocommerce\Products\Widgets\Products_Base;
use Tenweb_Builder\Widgets\Woocommerce\Products\Classes\Products_Renderer;
use Tenweb_Builder\Widgets\Woocommerce\Products\Classes\Current_Query_Renderer;
use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Typography;
use Tenweb_Builder\Widgets\Woocommerce\Products\Traits\Products_Trait;

if ( !defined('ABSPATH') ) {
    exit; // Exit if accessed directly
}

class Products extends Products_Base {

	use Products_Trait;

    public function get_name() {
        return 'twbb_woocommerce-products';
    }

    public function get_title() {
        return esc_html__('Products', 'tenweb-builder');
    }

    public function get_icon() {
        return 'twbb-products twbb-widget-icon';
    }

	public function get_keywords() {
		return [ 'woocommerce', 'shop', 'store', 'product', 'archive', 'upsells', 'cross-sells', 'cross sells', 'related' ];
	}
    public function get_categories() {
        return [ Woocommerce::WOOCOMMERCE_GROUP ];
    }

	/**
	 * @throws \Exception
	 */
	protected function register_query_section() {
		$this->start_controls_section(
			'section_query',
			[
				'label' => esc_html__( 'Query', 'tenweb-builder' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_query_controls( Products_Renderer::QUERY_CONTROL_NAME );

		$this->end_controls_section();
	}

	protected function register_controls() {
		$this->start_controls_section(
			'section_content',
			[
				'label' => esc_html__( 'Content', 'tenweb-builder' ),
			]
		);

        $this->add_responsive_control('columns', [
            'label' => __('Columns', 'tenweb-builder'),
            'type' => Controls_Manager::NUMBER,
            'prefix_class' => 'elementor-grid%s-',
            'min' => 1,
            'max' => 12,
            'default' => 4,
            'tablet_default' => '2',
            'mobile_default' => '1',
            'render_type' => 'template',
            'required' => TRUE,
            'device_args' => [
                Controls_Stack::RESPONSIVE_TABLET => [
                    'required' => FALSE,
                ],
                Controls_Stack::RESPONSIVE_MOBILE => [
                    'required' => FALSE,
                ],
            ],
            'min_affected_device' => [
                Controls_Stack::RESPONSIVE_DESKTOP => Controls_Stack::RESPONSIVE_TABLET,
                Controls_Stack::RESPONSIVE_TABLET => Controls_Stack::RESPONSIVE_TABLET,
            ],
        ]);

		$this->add_control(
			'rows',
			[
				'label' => esc_html__( 'Rows', 'tenweb-builder' ),
				'type' => Controls_Manager::NUMBER,
				'default' => Products_Renderer::DEFAULT_COLUMNS_AND_ROWS,
				'render_type' => 'template',
				'range' => [
					'px' => [
						'max' => 20,
					],
				],
			]
		);

		$this->add_control(
			'paginate',
			[
				'label' => esc_html__( 'Pagination', 'tenweb-builder' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => '',
				'condition' => [
					Products_Renderer::QUERY_CONTROL_NAME . '_post_type!' => [
						'related_products',
						'upsells',
						'cross_sells',
					],
				],
			]
		);

        //10Web Customization for ajax pagination
        $this->add_control('ajax_paginate', [
            'label' => __('Ajax Pagination', 'tenweb-builder'),
            'type' => Controls_Manager::SWITCHER,
            'default' => '',
            'condition' => [
                'paginate' => 'yes',
            ],
        ]);

		$this->add_control(
			'allow_order',
			[
				'label' => esc_html__( 'Allow Order', 'tenweb-builder' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => '',
				'condition' => [
					'paginate' => 'yes',
				],
			]
		);

		$this->add_control(
			'wc_notice_frontpage',
			[
				'type' => Controls_Manager::RAW_HTML,
				'raw' => esc_html__( 'Ordering is not available if this widget is placed in your front page. Visible on frontend only.', 'tenweb-builder' ),
				'content_classes' => 'elementor-panel-alert elementor-panel-alert-info',
				'condition' => [
					'paginate' => 'yes',
					'allow_order' => 'yes',
				],
			]
		);

		$this->add_control(
			'show_result_count',
			[
				'label' => esc_html__( 'Show Result Count', 'tenweb-builder' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => '',
				'condition' => [
					'paginate' => 'yes',
				],
			]
		);
        $this->add_control('hide_products_images', [
            'label' => __('Hide Products Images', 'tenweb-builder'),
            'type' => Controls_Manager::SWITCHER,
            'separator' => 'before',
            'default' => '',
            'selectors' => [
                '{{WRAPPER}}.elementor-wc-products .attachment-woocommerce_thumbnail,
          {{WRAPPER}}.elementor-wc-products .woocommerce-placeholder' => 'display: none',
            ],
        ]);
        $this->add_control('hide_products_titles', [
            'label' => __('Hide Products Titles', 'tenweb-builder'),
            'type' => Controls_Manager::SWITCHER,
            'default' => '',
            'selectors' => [
                '{{WRAPPER}}.elementor-wc-products ul.products li.product .woocommerce-loop-product__title' => 'display: none',
            ],
        ]);
        $this->add_control('hide_products_description', [
            'label' => __('Hide Products Descriptions', 'tenweb-builder'),
            'type' => Controls_Manager::SWITCHER,
            'default' => 'yes',
            'selectors' => [
                '{{WRAPPER}}.elementor-wc-products ul.products li.product .twbb_woocommerce-loop-product__desc' => 'display: none',
            ],
        ]);
        $this->add_control(
            'description_length',
            [
                'label' => __('Description Length', 'tenweb-builder'),
                'type' => Controls_Manager::NUMBER,
                /** This filter is documented in wp-includes/formatting.php */
                'default' => apply_filters('excerpt_length', 25),
                'condition' => [
                    'hide_products_description!' => 'yes',
                ],
            ]
        );

		//10web customization
		$this->add_control('hide_products_buttons', [
			'label' => __('Hide Poducts Buttons', 'tenweb-builder'),
			'type' => Controls_Manager::SWITCHER,
			'default' => '',
		]);
		//End 10web customization
		$this->end_controls_section();

		$this->register_query_section();

		$this->start_controls_section(
			'section_products_title',
			[
				'label' => esc_html__( 'Title', 'tenweb-builder' ),
				'conditions' => [
					'relation' => 'or',
					'terms' => [
						[
							'name' => Products_Renderer::QUERY_CONTROL_NAME . '_post_type',
							'operator' => '=',
							'value' => 'related_products',
						],
						[
							'name' => Products_Renderer::QUERY_CONTROL_NAME . '_post_type',
							'operator' => '=',
							'value' => 'upsells',
						],
						[
							'name' => Products_Renderer::QUERY_CONTROL_NAME . '_post_type',
							'operator' => '=',
							'value' => 'cross_sells',
						],
					],
				],
			]
		);

		$this->add_control(
			'products_title_show',
			[
				'label' => esc_html__( 'Title', 'tenweb-builder' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'tenweb-builder' ),
				'label_off' => esc_html__( 'Hide', 'tenweb-builder' ),
				'default' => '',
				'return_value' => 'show',
				'prefix_class' => 'products-heading-',
			]
		);

		$query_type_strings = [
			'related_products' => esc_html__( 'Related Products', 'tenweb-builder' ),
			'upsells' => esc_html__( 'You may also like...', 'tenweb-builder' ),
			'cross_sells' => esc_html__( 'You may be interested in...', 'tenweb-builder' ),
		];

		foreach ( $query_type_strings as $query_type => $string ) {
			$this->add_control(
				'products_' . $query_type . '_title_text',
				[
					'label' => esc_html__( 'Section Title', 'tenweb-builder' ),
					'type' => Controls_Manager::TEXT,
					'label_block' => true,
					'placeholder' => $string,
					'default' => $string,
					'dynamic' => [
						'active' => true,
					],
					'condition' => [
						'products_title_show!' => '',
						Products_Renderer::QUERY_CONTROL_NAME . '_post_type' => $query_type,
					],
				]
			);
		}

		$this->add_responsive_control(
			'products_title_alignment',
			[
				'label' => esc_html__( 'Alignment', 'tenweb-builder' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'start' => [
						'title' => esc_html__( 'Start', 'tenweb-builder' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'tenweb-builder' ),
						'icon' => 'eicon-text-align-center',
					],
					'end' => [
						'title' => esc_html__( 'End', 'tenweb-builder' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}}' => '--products-title-alignment: {{VALUE}};',
				],
				'condition' => [
					'products_title_show!' => '',
				],
			]
		);

		$this->end_controls_section();

		parent::register_controls();

		$this->start_injection( [
			'type' => 'section',
			'at' => 'start',
			'of' => 'section_design_box',
		] );

		$this->start_controls_section(
			'products_title_style',
			[
				'label' => esc_html__( 'Title', 'tenweb-builder' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'products_title_show!' => '',
				],
				'conditions' => [
					'relation' => 'or',
					'terms' => [
						[
							'name' => Products_Renderer::QUERY_CONTROL_NAME . '_post_type',
							'operator' => '=',
							'value' => 'related_products',
						],
						[
							'name' => Products_Renderer::QUERY_CONTROL_NAME . '_post_type',
							'operator' => '=',
							'value' => 'upsells',
						],
						[
							'name' => Products_Renderer::QUERY_CONTROL_NAME . '_post_type',
							'operator' => '=',
							'value' => 'cross_sells',
						],
					],
				],
			]
		);

		$this->add_control(
			'products_title_color',
			[
				'label' => esc_html__( 'Color', 'tenweb-builder' ),
				'type' => Controls_Manager::COLOR,
				'global' => [
					'default' => Global_Colors::COLOR_PRIMARY,
				],
				'selectors' => [
					'{{WRAPPER}}' => '--products-title-color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'products_title_typography',
				'selector' => '{{WRAPPER}}.products-heading-show .related-products > h2, {{WRAPPER}}.products-heading-show .upsells > h2, {{WRAPPER}}.products-heading-show .cross-sells > h2',
				'global' => [
					'default' => Global_Typography::TYPOGRAPHY_PRIMARY,
				],
			]
		);

		$this->add_responsive_control(
			'products_title_spacing',
			[
				'label' => esc_html__( 'Spacing', 'tenweb-builder' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'em', 'rem', 'custom' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [ 'px' => 0 ],
				'selectors' => [
					'{{WRAPPER}}' => '--products-title-spacing: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		$this->end_injection();
	}

	public static function get_shortcode_object( $settings ) {
		if ( 'current_query' === $settings[ Products_Renderer::QUERY_CONTROL_NAME . '_post_type' ] ) {
			return new Current_Query_Renderer( $settings, 'current_query' );
		}
		return new Products_Renderer( $settings, 'products' );
	}

	protected function render() {

		if ( WC()->session ) {
			wc_print_notices();
		}

		$settings = $this->get_settings_for_display();
		$post_type_setting = $settings[ Products_Renderer::QUERY_CONTROL_NAME . '_post_type' ];

		// Add a wrapper class to the Add to Cart & View Items elements if the automically_align_buttons switch has been selected.
		if ( 'yes' === $settings['automatically_align_buttons'] ) {
			add_filter( 'woocommerce_loop_add_to_cart_link', [ $this, 'add_to_cart_wrapper' ], 10, 1 );
		}
		//10web customization
		if ( 'yes' === $settings['hide_products_buttons'] ) {
			add_filter( 'woocommerce_loop_add_to_cart_link', [ $this, 'remove_add_to_cart' ], 10, 1 );
		}
		//End 10web customization

		if ( 'related_products' === $post_type_setting ) {
			$content = Woocommerce::get_products_related_content( $settings );
		} elseif ( 'upsells' === $post_type_setting ) {
			$content = Woocommerce::get_upsells_content( $settings );
		} elseif ( 'cross_sells' === $post_type_setting ) {
			$content = Woocommerce::get_cross_sells_content( $settings );
		} else {
			// For Products_Renderer.
			if ( ! isset( $GLOBALS['post'] ) ) {
				$GLOBALS['post'] = null; // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
			}

            $this->get_products_min_max_prices();
            $this->set_wc_thumbnail_single_image_width();
			$shortcode = static::get_shortcode_object( $settings );
			$content = $shortcode->get_content();
		}

		if ( $content ) {
			$content = str_replace( '<ul class="products', '<ul class="products elementor-grid', $content );

            //10Web Customization for ajax pagination
            if( $this->get_settings()['ajax_paginate'] == '' ) {
                echo $content;
            } else {
                echo '<div class="twbb_woocommerce-products-ajax-paginate">' . $content . '</div>';
            }
		} elseif ( $this->get_settings_for_display( 'nothing_found_message' ) ) {
			echo '<div class="elementor-nothing-found elementor-products-nothing-found">' . esc_html( $this->get_settings_for_display( 'nothing_found_message' ) ) . '</div>';
		}
	}

    private function set_wc_thumbnail_single_image_width() {
        $settings = $this->get_settings();
        foreach ( [ 'thumbnail_image_width' => 600, 'single_image_width' => 800 ] as $key => $val ) {
            if ( !empty($settings[$key]) ) {
                $separator = '%%';
                $image_width = explode($separator, $settings[$key]);
                $wc_image_width = $val;
                if ( !empty($image_width[1]) ) {
                    $wc_image_width = $image_width[1];
                }
                if ( $settings[$key] == 'custom' && !empty($settings[$key . '_custom']) && !empty($settings[$key . '_custom']) ) {
                    $wc_image_width = $settings[$key . '_custom'];
                }
                update_option( 'twbb_wc_' . $key, intval($wc_image_width) );
            }
        }
    }

    /**
     * Get min and max prices from current products,compare
     * with last values and set actual min and max values
     *
     * @return null
     */
    private function get_products_min_max_prices() {
        $settings = $this->get_settings();
        $is_excludes = in_array('manual_selection', (isset($settings['exclude']) && $settings['exclude'] ? $settings['exclude'] : array()));
        $is_excludes_current = in_array('current_post', (isset($settings['exclude']) && $settings['exclude'] ? $settings['exclude'] : array()));
        $excluded_products_id = $is_excludes ? (!empty($settings['exclude_ids']) ? $settings['exclude_ids'] : array()) : array();
        if ($is_excludes_current) {
            global $product;
            $current_id = (isset($product) && $product ? $product->get_id() : null); // get current product id if these are single product pages
            array_push($excluded_products_id, $current_id);
        }

        if ( !empty($settings['orderby']) && $settings['orderby'] == 'rand') {
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => '-1',
            );
        } else {
            $shortcode_products_count = $settings['paginate'] ? -1 : $settings['rows']*$settings['columns'];
            $args = array(
                'post_type' => 'product',
                'post__not_in' => $excluded_products_id,
                'posts_per_page' => $shortcode_products_count,
                'order' => $settings['order'] ?? ''
            );
        }
        $loop = new \WP_Query($args);
        $available_products_price = array();

        foreach ( $loop->posts as $post ) {
            $product = wc_get_product( $post->ID );
            array_push($available_products_price, $product->get_price());
        }
        if ( count($available_products_price)) {
            if (!isset(self::$products_min_max_prices['allMinPrice'])) {
                self::$products_min_max_prices['allMinPrice'] = min($available_products_price);
            } else if (isset(self::$products_min_max_prices['allMinPrice']) && self::$products_min_max_prices['allMinPrice'] > min($available_products_price)) {
                self::$products_min_max_prices['allMinPrice'] = min($available_products_price);
            }
            if (!isset(self::$products_min_max_prices['allMaxPrice'])) {
                self::$products_min_max_prices['allMaxPrice'] = max($available_products_price);
            } else if (isset(self::$products_min_max_prices['allMaxPrice']) && self::$products_min_max_prices['allMaxPrice'] < max($available_products_price)) {
                self::$products_min_max_prices['allMaxPrice'] = max($available_products_price);
            }
        }
        if (!isset($_POST['min_price']) && !isset(self::$products_min_max_prices['currentMinPrice'])) {
            self::$products_min_max_prices['currentMinPrice'] = (int)self::$products_min_max_prices['allMinPrice'];
        }
        if ( isset($_POST['min_price'])) {
            if ((int)self::$products_min_max_prices['allMinPrice'] <= (int)$_POST['min_price'])
                self::$products_min_max_prices['currentMinPrice'] = (int)$_POST['min_price'];
        }
        if (!isset($_POST['max_price']) && !isset(self::$products_min_max_prices['currentMaxPrice'])) {
            self::$products_min_max_prices['currentMaxPrice'] = (int)self::$products_min_max_prices['allMaxPrice'];
        }
        if ( isset($_POST['max_price'])) {
            if ((int)self::$products_min_max_prices["allMaxPrice"] >= (int)$_POST['max_price'])
                self::$products_min_max_prices['currentMaxPrice'] = (int)$_POST['max_price'];
        }
        return NULL;
    }

    public static $products_min_max_prices = array(
        'currentMinPrice' => NULL,
        'allMinPrice' => NULL,
        'currentMaxPrice' => NULL,
        'allMaxPrice' => NULL
    );

	public function render_plain_content() {}

}

\Elementor\Plugin::instance()->widgets_manager->register(new Products());
