<?php
namespace Tenweb_Builder;

use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Typography;
use Elementor\Core\Schemes\Color as Scheme_Color;
use Elementor\Core\Schemes\Typography as Scheme_Typography;
use Elementor\Widget_Base;

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}

class Search_Form extends Widget_Base {

  public function get_name() {
    return Builder::$prefix .'search-form';
  }

  public function get_title() {
    return __( 'Search Form', 'tenweb-builder' );
  }

  public function get_icon() {
    return 'twbb-search-form twbb-widget-icon';
  }

  public function get_categories(){
    return ['tenweb-widgets'];
  }

  protected function register_controls() {
    $this->start_controls_section(
      'search_content',
      [
        'label' => __( 'Search Form', 'tenweb-builder' ),
      ]
    );

    $this->add_control(
      'skin',
      [
        'label' => __( 'Skin', 'tenweb-builder' ),
        'type' => Controls_Manager::SELECT,
        'default' => 'classic',
        'options' => [
          'classic' => __( 'Classic', 'tenweb-builder' ),
          'minimal' => __( 'Minimal', 'tenweb-builder' ),
          'full_screen' => __( 'Full Screen', 'tenweb-builder' ),
        ],
        'prefix_class' => 'tenweb-search-form--skin-',
        'render_type' => 'template',
        'frontend_available' => true,
      ]
    );

    $this->add_control(
      'placeholder',
      [
        'label' => __( 'Placeholder', 'tenweb-builder' ),
        'type' => Controls_Manager::TEXT,
        'separator' => 'before',
        'default' => __( 'Search', 'tenweb-builder' ) . '...',
      ]
    );

    $this->add_control(
      'heading_button_content',
      [
        'label' => __( 'Button', 'tenweb-builder' ),
        'type' => Controls_Manager::HEADING,
        'separator' => 'before',
        'condition' => [
          'skin' => 'classic',
        ],
      ]
    );

    $this->add_control(
      'button_type',
      [
        'label' => __( 'Type', 'tenweb-builder' ),
        'type' => Controls_Manager::SELECT,
        'default' => 'icon',
        'options' => [
          'icon' => __( 'Icon', 'tenweb-builder' ),
          'text' => __( 'Text', 'tenweb-builder' ),
        ],
        'prefix_class' => 'tenweb-search-form--button-type-',
        'render_type' => 'template',
        'condition' => [
          'skin' => 'classic',
        ],
      ]
    );

    $this->add_control(
      'button_text',
      [
        'label' => __( 'Text', 'tenweb-builder' ),
        'type' => Controls_Manager::TEXT,
        'default' => __( 'Search', 'tenweb-builder' ),
        'separator' => 'after',
        'condition' => [
          'button_type' => 'text',
          'skin' => 'classic',
        ],
      ]
    );

    $this->add_control(
      'icon',
      [
        'label' => __( 'Icon', 'tenweb-builder' ),
        'type' => Controls_Manager::CHOOSE,
        'label_block' => false,
        'default' => 'search',
        'options' => [
          'search' => [
            'title' => __( 'Search', 'tenweb-builder' ),
            'icon' => 'fa fa-search',
          ],
          'arrow' => [
            'title' => __( 'Arrow', 'tenweb-builder' ),
            'icon' => 'fa fa-arrow-right',
          ],
        ],
        'render_type' => 'template',
        'prefix_class' => 'tenweb-search-form--icon-',
        'condition' => [
          'button_type' => 'icon',
          'skin' => 'classic',
        ],
      ]
    );

    $this->add_control(
      'size',
      [
        'label' => __( 'Size', 'tenweb-builder' ),
        'type' => Controls_Manager::SLIDER,
        'default' => [
          'size' => 50,
        ],
        'selectors' => [
          '{{WRAPPER}} .tenweb-search-form__container' => 'min-height: {{SIZE}}{{UNIT}}',
          '{{WRAPPER}} .tenweb-search-form__submit' => 'min-width: {{SIZE}}{{UNIT}}',
          'body:not(.rtl) {{WRAPPER}} .tenweb-search-form__icon' => 'padding-left: calc({{SIZE}}{{UNIT}} / 3)',
          'body.rtl {{WRAPPER}} .tenweb-search-form__icon' => 'padding-right: calc({{SIZE}}{{UNIT}} / 3)',
          '{{WRAPPER}} .tenweb-search-form__input, {{WRAPPER}}.tenweb-search-form--button-type-text .tenweb-search-form__submit' => 'padding-left: calc({{SIZE}}{{UNIT}} / 3); padding-right: calc({{SIZE}}{{UNIT}} / 3)',
        ],
        'condition' => [
          'skin!' => 'full_screen',
        ],
      ]
    );

    $this->add_control(
      'toggle_button_content',
      [
        'label' => __( 'Toggle', 'tenweb-builder' ),
        'type' => Controls_Manager::HEADING,
        'separator' => 'before',
        'condition' => [
          'skin' => 'full_screen',
        ],
      ]
    );

    $this->add_control(
      'toggle_align',
      [
        'label' => __( 'Alignment', 'tenweb-builder' ),
        'type' => Controls_Manager::CHOOSE,
        'label_block' => false,
        'default' => 'center',
        'options' => [
          'left' => [
            'title' => __( 'Left', 'tenweb-builder' ),
            'icon' => 'eicon-h-align-left',
          ],
          'center' => [
            'title' => __( 'Center', 'tenweb-builder' ),
            'icon' => 'eicon-h-align-center',
          ],
          'right' => [
            'title' => __( 'Right', 'tenweb-builder' ),
            'icon' => 'eicon-h-align-right',
          ],
        ],
        'selectors' => [
          '{{WRAPPER}} .tenweb-search-form' => 'text-align: {{VALUE}}',
        ],
        'condition' => [
          'skin' => 'full_screen',
        ],
      ]
    );

    $this->add_control(
      'toggle_size',
      [
        'label' => __( 'Size', 'tenweb-builder' ),
        'type' => Controls_Manager::SLIDER,
        'default' => [
          'size' => 33,
        ],
        'selectors' => [
          '{{WRAPPER}} .tenweb-search-form__toggle i' => 'font-size: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}}',
        ],
        'condition' => [
          'skin' => 'full_screen',
        ],
      ]
    );

    $this->end_controls_section();

    $this->start_controls_section(
      'section_input_style',
      [
        'label' => __( 'Input', 'tenweb-builder' ),
        'tab' => Controls_Manager::TAB_STYLE,
      ]
    );

    $this->add_responsive_control(
      'icon_size_minimal',
      [
        'label' => __( 'Icon Size', 'tenweb-builder' ),
        'type' => Controls_Manager::SLIDER,
        'range' => [
          'px' => [
            'min' => 0,
            'max' => 100,
          ],
        ],
        'selectors' => [
          '{{WRAPPER}} .tenweb-search-form__icon' => 'font-size: {{SIZE}}{{UNIT}}',
        ],
        'condition' => [
          'skin' => 'minimal',
        ],
        'separator' => 'before',
      ]
    );

    $this->add_control(
      'overlay_background_color',
      [
        'label' => __( 'Overlay Color', 'tenweb-builder' ),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
          '{{WRAPPER}}.tenweb-search-form--skin-full_screen .tenweb-search-form__container' => 'background-color: {{VALUE}}',
        ],
        'condition' => [
          'skin' => 'full_screen',
        ],
      ]
    );

    $this->add_group_control(
      Group_Control_Typography::get_type(),
      [
        'name' => 'input_typography',
        'selector' => '{{WRAPPER}} input[type="search"].tenweb-search-form__input',
        'scheme' => Scheme_Typography::TYPOGRAPHY_3,
      ]
    );

    $this->start_controls_tabs( 'tabs_input_colors' );

    $this->start_controls_tab(
      'tab_input_normal',
      [
        'label' => __( 'Normal', 'tenweb-builder' ),
      ]
    );

    $this->add_control(
      'input_text_color',
      [
        'label' => __( 'Text Color', 'tenweb-builder' ),
        'type' => Controls_Manager::COLOR,
        'scheme' => [
          'type' => Scheme_Color::get_type(),
          'value' => Scheme_Color::COLOR_3,
        ],
        'selectors' => [
          '{{WRAPPER}} .tenweb-search-form__input,
					{{WRAPPER}} .tenweb-search-form__icon,
					{{WRAPPER}} .tenweb-lightbox .dialog-lightbox-close-button,
					{{WRAPPER}} .tenweb-lightbox .dialog-lightbox-close-button:hover,
					{{WRAPPER}}.tenweb-search-form--skin-full_screen input[type="search"].tenweb-search-form__input' => 'color: {{VALUE}}',
        ],
      ]
    );

    $this->add_control(
      'input_background_color',
      [
        'label' => __( 'Background Color', 'tenweb-builder' ),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
          '{{WRAPPER}}:not(.tenweb-search-form--skin-full_screen) .tenweb-search-form__container' => 'background-color: {{VALUE}}',
          '{{WRAPPER}}.tenweb-search-form--skin-full_screen input[type="search"].tenweb-search-form__input' => 'background-color: {{VALUE}}',
        ],
        'condition' => [
          'skin!' => 'full_screen',
        ],
      ]
    );

    $this->add_control(
      'input_border_color',
      [
        'label' => __( 'Border Color', 'tenweb-builder' ),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
          '{{WRAPPER}}:not(.tenweb-search-form--skin-full_screen) .tenweb-search-form__container' => 'border-color: {{VALUE}}',
          '{{WRAPPER}}.tenweb-search-form--skin-full_screen input[type="search"].tenweb-search-form__input' => 'border-color: {{VALUE}}',
        ],
      ]
    );

    $this->add_group_control(
      Group_Control_Box_Shadow::get_type(),
      [
        'name' => 'input_box_shadow',
        'selector' => '{{WRAPPER}} .tenweb-search-form__container',
        'fields_options' => [
          'box_shadow_type' => [
            'separator' => 'default',
          ],
        ],
        'condition' => [
          'skin!' => 'full_screen',
        ],
      ]
    );

    $this->end_controls_tab();

    $this->start_controls_tab(
      'tab_input_focus',
      [
        'label' => __( 'Focus', 'tenweb-builder' ),
      ]
    );

    $this->add_control(
      'input_text_color_focus',
      [
        'label' => __( 'Text Color', 'tenweb-builder' ),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
          '{{WRAPPER}}:not(.tenweb-search-form--skin-full_screen) .tenweb-search-form--focus .tenweb-search-form__input,
					{{WRAPPER}} .tenweb-search-form--focus .tenweb-search-form__icon,
					{{WRAPPER}} .tenweb-lightbox .dialog-lightbox-close-button:hover,
					{{WRAPPER}}.tenweb-search-form--skin-full_screen input[type="search"].tenweb-search-form__input:focus' => 'color: {{VALUE}}',
        ],
      ]
    );

    $this->add_control(
      'input_background_color_focus',
      [
        'label' => __( 'Background Color', 'tenweb-builder' ),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
          '{{WRAPPER}}:not(.tenweb-search-form--skin-full_screen) .tenweb-search-form--focus .tenweb-search-form__container' => 'background-color: {{VALUE}}',
          '{{WRAPPER}}.tenweb-search-form--skin-full_screen input[type="search"].tenweb-search-form__input:focus' => 'background-color: {{VALUE}}',
        ],
        'condition' => [
          'skin!' => 'full_screen',
        ],
      ]
    );

    $this->add_control(
      'input_border_color_focus',
      [
        'label' => __( 'Border Color', 'tenweb-builder' ),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
          '{{WRAPPER}}:not(.tenweb-search-form--skin-full_screen) .tenweb-search-form--focus .tenweb-search-form__container' => 'border-color: {{VALUE}}',
          '{{WRAPPER}}.tenweb-search-form--skin-full_screen input[type="search"].tenweb-search-form__input:focus' => 'border-color: {{VALUE}}',
        ],
      ]
    );

    $this->add_group_control(
      Group_Control_Box_Shadow::get_type(),
      [
        'name' => 'input_box_shadow_focus',
        'selector' => '{{WRAPPER}} .tenweb-search-form--focus .tenweb-search-form__container',
        'fields_options' => [
          'box_shadow_type' => [
            'separator' => 'default',
          ],
        ],
        'condition' => [
          'skin!' => 'full_screen',
        ],
      ]
    );

    $this->end_controls_tab();

    $this->end_controls_tabs();

    $this->add_control(
      'button_border_width',
      [
        'label' => __( 'Border Size', 'tenweb-builder' ),
        'type' => Controls_Manager::DIMENSIONS,
        'selectors' => [
          '{{WRAPPER}}:not(.tenweb-search-form--skin-full_screen) .tenweb-search-form__container' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
          '{{WRAPPER}}.tenweb-search-form--skin-full_screen input[type="search"].tenweb-search-form__input' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
        'separator' => 'before',
      ]
    );

    $this->add_responsive_control(
      'border_radius',
      [
        'label' => __( 'Border Radius', 'tenweb-builder' ),
        'type' => Controls_Manager::SLIDER,
        'range' => [
          'px' => [
            'min' => 0,
            'max' => 200,
          ],
        ],
        'default' => [
          'size' => 3,
          'unit' => 'px',
        ],
        'selectors' => [
          '{{WRAPPER}}:not(.tenweb-search-form--skin-full_screen) .tenweb-search-form__container' => 'border-radius: {{SIZE}}{{UNIT}}',
          '{{WRAPPER}}.tenweb-search-form--skin-full_screen input[type="search"].tenweb-search-form__input' => 'border-radius: {{SIZE}}{{UNIT}}',
        ],
      ]
    );

    $this->end_controls_section();

    $this->start_controls_section(
      'section_button_style',
      [
        'label' => __( 'Button', 'tenweb-builder' ),
        'tab' => Controls_Manager::TAB_STYLE,
        'condition' => [
          'skin' => 'classic',
        ],
      ]
    );

    $this->add_group_control(
      Group_Control_Typography::get_type(),
      [
        'name' => 'button_typography',
        'selector' => '{{WRAPPER}} .tenweb-search-form__submit',
        'scheme' => Scheme_Typography::TYPOGRAPHY_3,
        'condition' => [
          'button_type' => 'text',
        ],
      ]
    );

    $this->start_controls_tabs( 'tabs_button_colors' );

    $this->start_controls_tab(
      'tab_button_normal',
      [
        'label' => __( 'Normal', 'tenweb-builder' ),
      ]
    );

    $this->add_control(
      'button_text_color',
      [
        'label' => __( 'Text Color', 'tenweb-builder' ),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
          '{{WRAPPER}} .tenweb-search-form__submit' => 'color: {{VALUE}}',
        ],
      ]
    );

    $this->add_control(
      'button_background_color',
      [
        'label' => __( 'Background Color', 'tenweb-builder' ),
        'type' => Controls_Manager::COLOR,
        'scheme' => [
          'type' => Scheme_Color::get_type(),
          'value' => Scheme_Color::COLOR_2,
        ],
        'selectors' => [
          '{{WRAPPER}} .tenweb-search-form__submit' => 'background-color: {{VALUE}}',
        ],
      ]
    );

    $this->end_controls_tab();

    $this->start_controls_tab(
      'tab_button_hover',
      [
        'label' => __( 'Hover', 'tenweb-builder' ),
      ]
    );

    $this->add_control(
      'button_text_color_hover',
      [
        'label' => __( 'Text Color', 'tenweb-builder' ),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
          '{{WRAPPER}} .tenweb-search-form__submit:hover' => 'color: {{VALUE}}',
        ],
      ]
    );

    $this->add_control(
      'button_background_color_hover',
      [
        'label' => __( 'Background Color', 'tenweb-builder' ),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
          '{{WRAPPER}} .tenweb-search-form__submit:hover' => 'background-color: {{VALUE}}',
        ],
      ]
    );

    $this->end_controls_tab();

    $this->end_controls_tabs();

    $this->add_responsive_control(
      'icon_size',
      [
        'label' => __( 'Icon Size', 'tenweb-builder' ),
        'type' => Controls_Manager::SLIDER,
        'range' => [
          'px' => [
            'min' => 0,
            'max' => 100,
          ],
        ],
        'selectors' => [
          '{{WRAPPER}} .tenweb-search-form__submit' => 'font-size: {{SIZE}}{{UNIT}}',
        ],
        'condition' => [
          'button_type' => 'icon',
          'skin!' => 'full_screen',
        ],
        'separator' => 'before',
      ]
    );

    $this->add_responsive_control(
      'button_width',
      [
        'label' => __( 'Width', 'tenweb-builder' ),
        'type' => Controls_Manager::SLIDER,
        'range' => [
          'px' => [
            'min' => 1,
            'max' => 10,
            'step' => 0.1,
          ],
        ],
        'selectors' => [
          '{{WRAPPER}} .tenweb-search-form__submit' => 'min-width: calc( {{SIZE}} * {{size.SIZE}}{{size.UNIT}} )',
        ],
        'condition' => [
          'skin' => 'classic',
        ],
      ]
    );

    $this->end_controls_section();

    $this->start_controls_section(
      'section_toggle_style',
      [
        'label' => __( 'Toggle', 'tenweb-builder' ),
        'tab' => Controls_Manager::TAB_STYLE,
        'condition' => [
          'skin' => 'full_screen',
        ],
      ]
    );

    $this->start_controls_tabs( 'tabs_toggle_color' );

    $this->start_controls_tab(
      'tab_toggle_normal',
      [
        'label' => __( 'Normal', 'tenweb-builder' ),
      ]
    );

    $this->add_control(
      'toggle_color',
      [
        'label' => __( 'Color', 'tenweb-builder' ),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
          '{{WRAPPER}} .tenweb-search-form__toggle' => 'color: {{VALUE}}; border-color: {{VALUE}}',
        ],
      ]
    );

    $this->add_control(
      'toggle_background_color',
      [
        'label' => __( 'Background Color', 'tenweb-builder' ),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
          '{{WRAPPER}} .tenweb-search-form__toggle i' => 'background-color: {{VALUE}}',
        ],
      ]
    );

    $this->end_controls_tab();

    $this->start_controls_tab(
      'tab_toggle_hover',
      [
        'label' => __( 'Hover', 'tenweb-builder' ),
      ]
    );

    $this->add_control(
      'toggle_color_hover',
      [
        'label' => __( 'Color', 'tenweb-builder' ),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
          '{{WRAPPER}} .tenweb-search-form__toggle:hover' => 'color: {{VALUE}}; border-color: {{VALUE}}',
        ],
      ]
    );

    $this->add_control(
      'toggle_background_color_hover',
      [
        'label' => __( 'Background Color', 'tenweb-builder' ),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
          '{{WRAPPER}} .tenweb-search-form__toggle i:hover' => 'background-color: {{VALUE}}',
        ],
      ]
    );

    $this->end_controls_tab();

    $this->end_controls_tabs();

    $this->add_control(
      'toggle_icon_size',
      [
        'label' => __( 'Icon Size', 'tenweb-builder' ),
        'type' => Controls_Manager::SLIDER,
        'selectors' => [
          '{{WRAPPER}} .tenweb-search-form__toggle i:before' => 'font-size: calc({{SIZE}}em / 100)',
        ],
        'condition' => [
          'skin' => 'full_screen',
        ],
        'separator' => 'before',
      ]
    );

    $this->add_control(
      'toggle_border_width',
      [
        'label' => __( 'Border Width', 'tenweb-builder' ),
        'type' => Controls_Manager::SLIDER,
        'range' => [
          'px' => [
            'max' => 10,
          ],
        ],
        'selectors' => [
          '{{WRAPPER}} .tenweb-search-form__toggle i' => 'border-width: {{SIZE}}{{UNIT}}',
        ],
        'separator' => 'before',
      ]
    );

    $this->add_control(
      'toggle_border_radius',
      [
        'label' => __( 'Border Radius', 'tenweb-builder' ),
        'type' => Controls_Manager::SLIDER,
        'size_units' => [ 'px', '%' ],
        'selectors' => [
          '{{WRAPPER}} .tenweb-search-form__toggle i' => 'border-radius: {{SIZE}}{{UNIT}}',
        ],
      ]
    );

    $this->end_controls_section();
  }

  protected function render() {
    $settings = $this->get_settings();
    $this->add_render_attribute(
      'input', [
               'placeholder' => $settings['placeholder'],
               'class' => 'tenweb-search-form__input',
               'type' => 'search',
               'name' => 's',
               'title' => __( 'Search', 'tenweb-builder' ),
               'value' => get_search_query(),
             ]
    );

    // Set the selected icon.
    if ( 'icon' == $settings['button_type'] ) {
      $icon_class = 'search';

      if ( 'arrow' == $settings['icon'] ) {
        $icon_class = is_rtl() ? 'arrow-left' : 'arrow-right';
      }

      $this->add_render_attribute( 'icon', [
        'class' => 'fa fa-' . $icon_class,
      ] );
    }

    ?>
    <form class="tenweb-search-form" role="search" action="<?php echo home_url(); ?>" method="get">
      <?php if ( 'full_screen' === $settings['skin'] ) : ?>
        <div class="tenweb-search-form__toggle">
          <i class="fa fa-search" aria-hidden="true"></i>
        </div>
      <?php endif; ?>
      <div class="tenweb-search-form__container">
        <?php if ( 'minimal' === $settings['skin'] ) : ?>
          <div class="tenweb-search-form__icon">
            <i class="fa fa-search" aria-hidden="true"></i>
          </div>
        <?php endif; ?>
        <input <?php echo $this->get_render_attribute_string('input'); ?>>
        <?php if ( 'classic' === $settings['skin'] ) : ?>
          <button class="tenweb-search-form__submit" type="submit">
            <?php if ( 'icon' === $settings['button_type'] ) : ?>
              <i <?php echo $this->get_render_attribute_string('icon'); ?> aria-hidden="true"></i>
            <?php elseif ( ! empty( $settings['button_text'] ) ) : ?>
              <?php echo $settings['button_text']; ?>
            <?php endif; ?>
          </button>
        <?php endif; ?>
        <?php if ( 'full_screen' === $settings['skin'] ) : ?>
          <div class="dialog-lightbox-close-button dialog-close-button">
            <i class="eicon-close" aria-hidden="true"></i>
            <span class="elementor-screen-only"><?php esc_html_e( 'Close', 'tenweb-builder' ); ?></span>
          </div>
        <?php endif ?>
      </div>
    </form>
    <?php
  }
}

\Elementor\Plugin::instance()->widgets_manager->register(new Search_Form());

