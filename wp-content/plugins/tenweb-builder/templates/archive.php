<?php

namespace Tenweb_Builder;

include_once 'base.php';

class ArchiveTemplate extends BaseTemplate {

  public static function get_slug(){
    return "twbb_archive";
  }

  public static function get_title(){
    return 'Archive';
  }

  public static function print_twbb_template($template_id, $name = ""){
    if(\Elementor\Plugin::instance()->preview->is_preview_mode()) {
      echo \Elementor\Plugin::instance()->preview->builder_wrapper('');
    } else {
      self::print_builder_content($template_id);
    }
  }

}
