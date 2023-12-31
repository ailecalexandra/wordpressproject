<?php
namespace Tenweb_Builder\ElementorPro\Modules\Library\Widgets;

use Elementor\Core\Base\Document;
use Elementor\Widget_Base;
use Tenweb_Builder\ElementorPro\Modules\QueryControl\Module as QueryControlModule;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Template extends Widget_Base {

	public function get_name() {
		return 'template';
	}

	public function get_title() {
		return esc_html__( 'Template', 'elementor-pro' );
	}

	public function get_icon() {
		return 'twbb-widget-icon twbb-templates';
	}

	public function get_keywords() {
		return [ 'elementor', 'template', 'library', 'block', 'page' ];
	}

  public function get_categories() {
    return [ 'tenweb-widgets' ];
  }

	public function is_reload_preview_required() {
		return false;
	}

	public static function on_import_replace_dynamic_content( $config, $map_old_new_post_ids ) {
		if ( isset( $config['settings']['template_id'] ) ) {
			$config['settings']['template_id'] = $map_old_new_post_ids[ $config['settings']['template_id'] ];
		}

		return $config;
	}

	protected function register_controls() {
		$this->start_controls_section(
			'section_template',
			[
				'label' => esc_html__( 'Template', 'elementor-pro' ),
			]
		);

		$document_types = \Elementor\Plugin::instance()->documents->get_document_types( [
			'show_in_library' => true,
		] );

		$this->add_control(
			'template_id',
			[
				'label' => esc_html__( 'Choose Template', 'elementor-pro' ),
				'type' => QueryControlModule::QUERY_CONTROL_ID,
				'label_block' => true,
				'autocomplete' => [
					'object' => QueryControlModule::QUERY_OBJECT_LIBRARY_TEMPLATE,
					'query' => [
						'meta_query' => [
							[
								'key' => Document::TYPE_META_KEY,
								'value' => array_keys( $document_types ),
								'compare' => 'IN',
							],
						],
					],
				],
			]
		);

		$this->end_controls_section();
	}

	protected function render() {
		$template_id = $this->get_settings( 'template_id' );

		if ( 'publish' !== get_post_status( $template_id ) ) {
			return;
		}

		?>
		<div class="elementor-template">
			<?php
			echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $template_id );
			?>
		</div>
		<?php
	}

	public function render_plain_content() {}
}
