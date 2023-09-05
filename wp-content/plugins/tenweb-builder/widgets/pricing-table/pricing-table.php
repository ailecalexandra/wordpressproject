<?php
namespace Tenweb_Builder;

use Elementor\Controls_Manager;
use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Typography;
use Elementor\Icons_Manager;
use Elementor\Repeater;
use Elementor\Widget_Base;

if(!defined('ABSPATH')) exit; // Exit if accessed directly

class Pricing_Table extends Widget_Base {

  public function get_name(){
    return 'twbb-pricing-table';
  }

  public function get_title(){
    return __('Pricing Table', 'tenweb-builder');
  }

  public function get_icon(){
    return 'twbb-pricing-table twbb-widget-icon';
  }

  public function get_categories(){
    return ['tenweb-widgets'];
  }

  public function get_keywords() {
    return [ 'pricing', 'table', 'product', 'image', 'plan', 'button' ];
  }

  protected function register_controls(){
    $this->start_controls_section(
      'twbb_section_header',
      [
        'label' => __('Header', 'tenweb-builder'),
      ]
    );

    $this->add_control(
      'twbb_heading',
      [
        'label' => __('Title', 'tenweb-builder'),
        'type' => Controls_Manager::TEXT,
        'default' => __('Product title', 'tenweb-builder'),
      ]
    );

    $this->add_control(
      'twbb_sub_heading',
      [
        'label' => __('Description', 'tenweb-builder'),
        'type' => Controls_Manager::TEXT,
        'default' => __('Product description', 'tenweb-builder'),
      ]
    );

    $this->add_control(
      'twbb_heading_tag',
      [
        'label' => __( 'Title HTML Tag', 'tenweb-builder' ),
        'type' => Controls_Manager::SELECT,
        'options' => [
          'h2' => 'H2',
          'h3' => 'H3',
          'h4' => 'H4',
          'h5' => 'H5',
          'h6' => 'H6',
        ],
        'default' => 'h3',
      ]
    );

    $this->end_controls_section();

    $this->start_controls_section(
      'twbb_section_pricing',
      [
        'label' => __('Pricing', 'tenweb-builder'),
      ]
    );


    $this->add_control(
      'twbb_currency_symbol',
      [
        'label' => __('Currency Symbol', 'tenweb-builder'),
        'type' => Controls_Manager::SELECT2,
        'options' => [
          'AED' => '&#1583;.&#1573; ' . _x('UAE Dirham', 'Currency Symbol', 'tenweb-builder') . ' (AED)', // ?
          'AFN' => '&#65;&#102; ' . _x('Afghani', 'Currency Symbol', 'tenweb-builder') . ' (AFN)',
          'ALL' => '&#76;&#101;&#107; ' . _x('Lek', 'Currency Symbol', 'tenweb-builder') . ' (ALL)',
          'AMD' => 'Դ ' . _x('Armenian Dram', 'Currency Symbol', 'tenweb-builder') . ' (AMD)',
          'ANG' => '&#402; ' . _x('Netherlands Antillean guilder', 'Currency Symbol', 'tenweb-builder') . ' (ANG)',
          'AOA' => '&#75;&#122; ' . _x('Kwanza', 'Currency Symbol', 'tenweb-builder') . ' (AOA)', // ?
          'ARS' => '&#36; ' . _x('Argentine Peso', 'Currency Symbol', 'tenweb-builder') . ' (ARS)',
          'AUD' => '&#36; ' . _x('Australian Dollar', 'Currency Symbol', 'tenweb-builder') . ' (AUD)',
          'AWG' => '&#402; ' . _x('Aruban Guilder/Florin', 'Currency Symbol', 'tenweb-builder') . ' (AWG)',
          'AZN' => '&#1084;&#1072;&#1085; ' . _x('Azerbaijanian Manat', 'Currency Symbol', 'tenweb-builder') . ' (AZN)',
          'BAM' => '&#75;&#77; ' . _x('Konvertibilna Marka', 'Currency Symbol', 'tenweb-builder') . ' (BAM)',
          'BBD' => '&#36; ' . _x('Barbados Dollar', 'Currency Symbol', 'tenweb-builder') . ' (BBD)',
          'BDT' => '&#2547; ' . _x('Taka', 'Currency Symbol', 'tenweb-builder') . ' (BDT)', // ?
          'BGN' => '&#1083;&#1074; ' . _x('Bulgarian Lev', 'Currency Symbol', 'tenweb-builder') . ' (BGN)',
          'BHD' => '.&#1583;.&#1576; ' . _x('Bahraini Dinar', 'Currency Symbol', 'tenweb-builder') . ' (BHD)', // ?
          'BIF' => '&#70;&#66;&#117; ' . _x('Burundi Franc', 'Currency Symbol', 'tenweb-builder') . ' (BIF)', // ?
          'BMD' => '&#36; ' . _x('Bermudian Dollar', 'Currency Symbol', 'tenweb-builder') . ' (BMD)',
          'BND' => '&#36; ' . _x('Brunei Dollar', 'Currency Symbol', 'tenweb-builder') . ' (BND)',
          'BOB' => '&#36;&#98; ' . _x('Boliviano', 'Currency Symbol', 'tenweb-builder') . ' (BOB)',
          'BRL' => '&#82;&#36; ' . _x('Brazilian Real', 'Currency Symbol', 'tenweb-builder') . ' (BRL)',
          'BSD' => '&#36; ' . _x('Bahamian Dollar', 'Currency Symbol', 'tenweb-builder') . ' (BSD)',
          'BTN' => '&#78;&#117;&#46; ' . _x('Ngultrum', 'Currency Symbol', 'tenweb-builder') . ' (BTN)', // ?
          'BWP' => '&#80; ' . _x('Pula', 'Currency Symbol', 'tenweb-builder') . ' (BWP)',
          'BYR' => '&#112;&#46; ' . _x('Belarussian Ruble', 'Currency Symbol', 'tenweb-builder') . ' (BYR)',
          'BZD' => '&#66;&#90;&#36; ' . _x('Belize Dollar', 'Currency Symbol', 'tenweb-builder') . ' (BZD)',
          'CAD' => '&#36; ' . _x('Canadian Dollar', 'Currency Symbol', 'tenweb-builder') . ' (CAD)',
          'CDF' => '&#70;&#67; ' . _x('Congolese Franc', 'Currency Symbol', 'tenweb-builder') . ' (CDF)',
          'CHF' => '&#67;&#72;&#70; ' . _x('Swiss Franc', 'Currency Symbol', 'tenweb-builder') . ' (CHF)',
          'CLP' => '&#36; ' . _x('Chilean Peso', 'Currency Symbol', 'tenweb-builder') . ' (CLP)',
          'CNY' => '&#165; ' . _x('Yuan', 'Currency Symbol', 'tenweb-builder') . ' (CNY)',
          'COP' => '&#36; ' . _x('Colombian Peso', 'Currency Symbol', 'tenweb-builder') . ' (COP)',
          'CRC' => '&#8353; ' . _x('Costa Rican Colon', 'Currency Symbol', 'tenweb-builder') . ' (CRC)',
          'CUP' => '&#8396; ' . _x('Cuban Peso', 'Currency Symbol', 'tenweb-builder') . ' (CUP)',
          'CVE' => '&#36; ' . _x('Cape Verde Escudo', 'Currency Symbol', 'tenweb-builder') . ' (CVE)', // ?
          'CZK' => '&#75;&#269; ' . _x('Czech Koruna', 'Currency Symbol', 'tenweb-builder') . ' (CZK)',
          'DJF' => '&#70;&#100;&#106; ' . _x('Djibouti Franc', 'Currency Symbol', 'tenweb-builder') . ' (DJF)', // ?
          'DKK' => '&#107;&#114; ' . _x('Danish Krone', 'Currency Symbol', 'tenweb-builder') . ' (DKK)',
          'DOP' => '&#82;&#68;&#36; ' . _x('Dominican Peso', 'Currency Symbol', 'tenweb-builder') . ' (DOP)',
          'DZD' => '&#1583;&#1580; ' . _x('Algerian Dinar', 'Currency Symbol', 'tenweb-builder') . ' (DZD)', // ?
          'EGP' => '&#163; ' . _x('Egyptian Pound', 'Currency Symbol', 'tenweb-builder') . ' (EGP)',
          'ERN' => 'Nfk ' . _x('Nakfa', 'Currency Symbol', 'tenweb-builder') . ' (ERN)',
          'ETB' => '&#66;&#114; ' . _x('Ethiopian Birr', 'Currency Symbol', 'tenweb-builder') . ' (ETB)',
          'EUR' => '&#8364; ' . _x('Euro', 'Currency Symbol', 'tenweb-builder') . ' (EUR)',
          'FJD' => '&#36; ' . _x('Fiji Dollar', 'Currency Symbol', 'tenweb-builder') . ' (FJD)',
          'FKP' => '&#163; ' . _x('Falkland Islands Pound', 'Currency Symbol', 'tenweb-builder') . ' (FKP)',
          'GBP' => '&#163; ' . _x('Pound Sterling', 'Currency Symbol', 'tenweb-builder') . ' (GBP)',
          'GEL' => '&#4314; ' . _x('Lari', 'Currency Symbol', 'tenweb-builder') . ' (GEL)', // ?
          'GHS' => '&#162; ' . _x('Cedi', 'Currency Symbol', 'tenweb-builder') . ' (GHS)',
          'GIP' => '&#163; ' . _x('Gibraltar Pound', 'Currency Symbol', 'tenweb-builder') . ' (GIP)',
          'GMD' => '&#68; ' . _x('Dalasi', 'Currency Symbol', 'tenweb-builder') . ' (GMD)', // ?
          'GNF' => '&#70;&#71; ' . _x('Guinea Franc', 'Currency Symbol', 'tenweb-builder') . ' (GNF)', // ?
          'GTQ' => '&#81; ' . _x('Quetzal', 'Currency Symbol', 'tenweb-builder') . ' (GTQ)',
          'GYD' => '&#36; ' . _x('Guyana Dollar', 'Currency Symbol', 'tenweb-builder') . ' (GYD)',
          'HKD' => '&#36; ' . _x('Hong Kong Dollar', 'Currency Symbol', 'tenweb-builder') . ' (HKD)',
          'HNL' => '&#76; ' . _x('Lempira', 'Currency Symbol', 'tenweb-builder') . ' (HNL)',
          'HRK' => '&#107;&#110; ' . _x('Croatian Kuna', 'Currency Symbol', 'tenweb-builder') . ' (HRK)',
          'HTG' => '&#71; ' . _x('Gourde', 'Currency Symbol', 'tenweb-builder') . ' (HTG)', // ?
          'HUF' => '&#70;&#116; ' . _x('Forint', 'Currency Symbol', 'tenweb-builder') . ' (HUF)',
          'IDR' => '&#82;&#112; ' . _x('Rupiah', 'Currency Symbol', 'tenweb-builder') . ' (IDR)',
          'ILS' => '&#8362; ' . _x('New Israeli Shekel', 'Currency Symbol', 'tenweb-builder') . ' (ILS)',
          'INR' => '&#8377; ' . _x('Indian Rupee', 'Currency Symbol', 'tenweb-builder') . ' (INR)',
          'IQD' => '&#1593;.&#1583; ' . _x('Iraqi Dinar', 'Currency Symbol', 'tenweb-builder') . ' (IQD)', // ?
          'IRR' => '&#65020; ' . _x('Iranian Rial', 'Currency Symbol', 'tenweb-builder') . ' (IRR)',
          'ISK' => '&#107;&#114; ' . _x('Iceland Krona', 'Currency Symbol', 'tenweb-builder') . ' (ISK)',
          'JEP' => '&#163; ' . _x('Jersey Pound', 'Currency Symbol', 'tenweb-builder') . ' (JEP)',
          'JMD' => '&#74;&#36; ' . _x('Jamaican Dollar', 'Currency Symbol', 'tenweb-builder') . ' (JMD)',
          'JOD' => '&#74;&#68; ' . _x('Jordanian Dinar', 'Currency Symbol', 'tenweb-builder') . ' (JOD)', // ?
          'JPY' => '&#165; ' . _x('Yen', 'Currency Symbol', 'tenweb-builder') . ' (JPY)',
          'KES' => '&#75;&#83;&#104; ' . _x('Kenyan Shilling', 'Currency Symbol', 'tenweb-builder') . ' (KES)', // ?
          'KGS' => '&#1083;&#1074; ' . _x('Som', 'Currency Symbol', 'tenweb-builder') . ' (KGS)',
          'KHR' => '&#6107; ' . _x('Riel', 'Currency Symbol', 'tenweb-builder') . ' (KHR)',
          'KMF' => '&#67;&#70; ' . _x('Comoro franc', 'Currency Symbol', 'tenweb-builder') . ' (KMF)', // ?
          'KPW' => '&#8361; ' . _x('North Korean Won', 'Currency Symbol', 'tenweb-builder') . ' (KPW)',
          'KRW' => '&#8361; ' . _x('South Korean Won', 'Currency Symbol', 'tenweb-builder') . ' (KRW)',
          'KWD' => '&#1583;.&#1603; ' . _x('Kuwaiti Dinar', 'Currency Symbol', 'tenweb-builder') . ' (KWD)', // ?
          'KYD' => '&#36; ' . _x('Cayman Islands Dollar', 'Currency Symbol', 'tenweb-builder') . ' (KYD)',
          'KZT' => '&#1083;&#1074; ' . _x('Tenge', 'Currency Symbol', 'tenweb-builder') . ' (KZT)',
          'LAK' => '&#8365; ' . _x('Kip', 'Currency Symbol', 'tenweb-builder') . ' (LAK)',
          'LBP' => '&#163; ' . _x('Lebanese Pound', 'Currency Symbol', 'tenweb-builder') . ' (LBP)',
          'LKR' => '&#8360; ' . _x('Sri Lanka Rupee', 'Currency Symbol', 'tenweb-builder') . ' (LKR)',
          'LRD' => '&#36; ' . _x('Liberian Dollar', 'Currency Symbol', 'tenweb-builder') . ' (LRD)',
          'LSL' => '&#76; ' . _x('loti', 'Currency Symbol', 'tenweb-builder') . ' (LSL)', // ?
          'LTL' => '&#76;&#116; ' . _x('Lithuania Litas', 'Currency Symbol', 'tenweb-builder') . ' (LTL)',
          'LVL' => '&#76;&#115; ' . _x('Latvia Lat', 'Currency Symbol', 'tenweb-builder') . ' (LVL)',
          'LYD' => '&#1604;.&#1583; ' . _x('Libyan Dinar', 'Currency Symbol', 'tenweb-builder') . ' (LYD)', // ?
          'MAD' => '&#1583;.&#1605;. ' . _x('Moroccan Dirham', 'Currency Symbol', 'tenweb-builder') . ' (MAD)', //?
          'MDL' => '&#76; ' . _x('Moldavian Leu', 'Currency Symbol', 'tenweb-builder') . ' (MDL)',
          'MGA' => '&#65;&#114; ' . _x('Malagasy Ariary', 'Currency Symbol', 'tenweb-builder') . ' (MGA)', // ?
          'MKD' => '&#1076;&#1077;&#1085; ' . _x('Denar', 'Currency Symbol', 'tenweb-builder') . ' (MKD)',
          'MMK' => '&#75; ' . _x('Kyat', 'Currency Symbol', 'tenweb-builder') . ' (MMK)',
          'MNT' => '&#8366; ' . _x('Tugrik', 'Currency Symbol', 'tenweb-builder') . ' (MNT)',
          'MOP' => '&#77;&#79;&#80;&#36; ' . _x('Pataca', 'Currency Symbol', 'tenweb-builder') . ' (MOP)', // ?
          'MRO' => '&#85;&#77; ' . _x('Ouguiya', 'Currency Symbol', 'tenweb-builder') . ' (MRO)', // ?
          'MUR' => '&#8360; ' . _x('Mauritius Rupee', 'Currency Symbol', 'tenweb-builder') . ' (MUR)', // ?
          'MVR' => '.&#1923; ' . _x('Rufiyaa', 'Currency Symbol', 'tenweb-builder') . ' (MVR)', // ?
          'MWK' => '&#77;&#75; ' . _x('Kwacha', 'Currency Symbol', 'tenweb-builder') . ' (MWK)',
          'MXN' => '&#36; ' . _x('Mexican Peso', 'Currency Symbol', 'tenweb-builder') . ' (MXN)',
          'MYR' => '&#82;&#77; ' . _x('Malaysian Ringgit', 'Currency Symbol', 'tenweb-builder') . ' (MYR)',
          'MZN' => '&#77;&#84; ' . _x('Metical', 'Currency Symbol', 'tenweb-builder') . ' (MZN)',
          'NAD' => '&#36; ' . _x('Namibia Dollar', 'Currency Symbol', 'tenweb-builder') . ' (NAD)',
          'NGN' => '&#8358; ' . _x('Naira', 'Currency Symbol', 'tenweb-builder') . ' (NGN)',
          'NIO' => '&#67;&#36; ' . _x('Cordoba Oro', 'Currency Symbol', 'tenweb-builder') . ' (NIO)',
          'NOK' => '&#107;&#114; ' . _x('Norwegian Krone', 'Currency Symbol', 'tenweb-builder') . ' (NOK)',
          'NPR' => '&#8360; ' . _x('Nepalese Rupee', 'Currency Symbol', 'tenweb-builder') . ' (NPR)',
          'NZD' => '&#36; ' . _x('New Zealand Dollar', 'Currency Symbol', 'tenweb-builder') . ' (NZD)',
          'OMR' => '&#65020; ' . _x('Rial Omani', 'Currency Symbol', 'tenweb-builder') . ' (OMR)',
          'PAB' => '&#66;&#47;&#46; ' . _x('Balboa', 'Currency Symbol', 'tenweb-builder') . ' (PAB)',
          'PEN' => '&#83;&#47;&#46; ' . _x('Nuevo Sol', 'Currency Symbol', 'tenweb-builder') . ' (PEN)',
          'PGK' => '&#75; ' . _x('Kina', 'Currency Symbol', 'tenweb-builder') . ' (PGK)', // ?
          'PHP' => '&#8369; ' . _x('Philippine Peso', 'Currency Symbol', 'tenweb-builder') . ' (PHP)',
          'PKR' => '&#8360; ' . _x('Pakistan Rupee', 'Currency Symbol', 'tenweb-builder') . ' (PKR)',
          'PLN' => '&#122;&#322; ' . _x('PZloty', 'Currency Symbol', 'tenweb-builder') . ' (PLN)',
          'PYG' => '&#71;&#115; ' . _x('Guarani', 'Currency Symbol', 'tenweb-builder') . ' (PYG)',
          'QAR' => '&#65020; ' . _x('Qatari Rial', 'Currency Symbol', 'tenweb-builder') . ' (QAR)',
          'RON' => '&#108;&#101;&#105; ' . _x('Leu', 'Currency Symbol', 'tenweb-builder') . ' (RON)',
          'RSD' => '&#1044;&#1080;&#1085;&#46; ' . _x('Serbian Dinar', 'Currency Symbol', 'tenweb-builder') . ' (RSD)',
          'RUB' => '&#1088;&#1091;&#1073; ' . _x('Russian Ruble', 'Currency Symbol', 'tenweb-builder') . ' (RUB)',
          'RWF' => '&#1585;.&#1587; ' . _x('Rwanda Franc', 'Currency Symbol', 'tenweb-builder') . ' (RWF)',
          'SAR' => '&#65020; ' . _x('Saudi Riyal', 'Currency Symbol', 'tenweb-builder') . ' (SAR)',
          'SBD' => '&#36; ' . _x('Solomon Islands Dollar', 'Currency Symbol', 'tenweb-builder') . ' (SBD)',
          'SCR' => '&#8360; ' . _x('Seychelles Rupee', 'Currency Symbol', 'tenweb-builder') . ' (SCR)',
          'SDG' => '&#163; ' . _x('Sudanese Pound', 'Currency Symbol', 'tenweb-builder') . ' (SDG)', // ?
          'SEK' => '&#107;&#114; ' . _x('Swedish Krona', 'Currency Symbol', 'tenweb-builder') . ' (SEK)',
          'SGD' => '&#36; ' . _x('Singapore Dollar', 'Currency Symbol', 'tenweb-builder') . ' (SGD)',
          'SHP' => '&#163; ' . _x('Saint Helena Pound', 'Currency Symbol', 'tenweb-builder') . ' (SHP)',
          'SLL' => '&#76;&#101; ' . _x('Leone', 'Currency Symbol', 'tenweb-builder') . ' (SLL)', // ?
          'SOS' => '&#83; ' . _x('Somali Shilling', 'Currency Symbol', 'tenweb-builder') . ' (SOS)',
          'SRD' => '&#36; ' . _x('Suriname Dollar', 'Currency Symbol', 'tenweb-builder') . ' (SRD)',
          'STD' => '&#68;&#98; ' . _x('Dobra', 'Currency Symbol', 'tenweb-builder') . ' (STD)', // ?
          'SVC' => '&#36; ' . _x('El Salvador Colon', 'Currency Symbol', 'tenweb-builder') . ' (SVC)',
          'SYP' => '&#163; ' . _x('Syrian Pound', 'Currency Symbol', 'tenweb-builder') . ' (SYP)',
          'SZL' => '&#76; ' . _x('Lilangeni', 'Currency Symbol', 'tenweb-builder') . ' (SZL)', // ?
          'THB' => '&#3647; ' . _x('Baht', 'Currency Symbol', 'tenweb-builder') . ' (THB)',
          'TJS' => '&#84;&#74;&#83; ' . _x('Somoni', 'Currency Symbol', 'tenweb-builder') . ' (TJS)', // ? TJS (guess)
          'TMT' => '&#109; ' . _x('Manat', 'Currency Symbol', 'tenweb-builder') . ' (TMT)',
          'TND' => '&#1583;.&#1578; ' . _x('Tunisian Dinar', 'Currency Symbol', 'tenweb-builder') . ' (TND)',
          'TOP' => '&#84;&#36; ' . _x('Pa’anga', 'Currency Symbol', 'tenweb-builder') . ' (TOP)',
          'TRY' => '&#8356; ' . _x('Turkish Lira', 'Currency Symbol', 'tenweb-builder') . ' (TRY)', // New Turkey Lira (old symbol used)
          'TTD' => '&#36; ' . _x('Trinidad and Tobago Dollar', 'Currency Symbol', 'tenweb-builder') . ' (TTD)',
          'TWD' => '&#78;&#84;&#36; ' . _x('Taiwan Dollar', 'Currency Symbol', 'tenweb-builder') . ' (TWD)',
          'TZS' => 'Sh ' . _x('Tanzanian Shilling', 'Currency Symbol', 'tenweb-builder') . ' (TZS)',
          'UAH' => '&#8372; ' . _x('Hryvnia', 'Currency Symbol', 'tenweb-builder') . ' (UAH)',
          'UGX' => '&#85;&#83;&#104; ' . _x('Uganda Shilling', 'Currency Symbol', 'tenweb-builder') . ' (UGX)',
          'USD' => '&#36; ' . _x('US Dollar', 'Currency Symbol', 'tenweb-builder') . ' (USD)',
          'UYU' => '&#36;&#85; ' . _x('Peso Uruguayo', 'Currency Symbol', 'tenweb-builder') . ' (UYU)',
          'UZS' => '&#1083;&#1074; ' . _x('Uzbekistan Sum', 'Currency Symbol', 'tenweb-builder') . ' (UZS)',
          'VEF' => '&#66;&#115; ' . _x('Bolivar Fuerte', 'Currency Symbol', 'tenweb-builder') . ' (VEF)',
          'VND' => '&#8363; ' . _x('Dong', 'Currency Symbol', 'tenweb-builder') . ' (VND)',
          'VUV' => '&#86;&#84; ' . _x('Vatu', 'Currency Symbol', 'tenweb-builder') . ' (VUV)',
          'WST' => '&#87;&#83;&#36; ' . _x('Tala', 'Currency Symbol', 'tenweb-builder') . ' (WST)',
          'XAF' => '&#70;&#67;&#70;&#65; ' . _x('CFA Franc BCEAO', 'Currency Symbol', 'tenweb-builder') . ' (XAF)',
          'XCD' => '&#36; ' . _x('East Caribbean Dollar', 'Currency Symbol', 'tenweb-builder') . ' (XCD)',
          'XPF' => '&#70; ' . _x('CFP Franc', 'Currency Symbol', 'tenweb-builder') . ' (XPF)',
          'YER' => '&#65020; ' . _x('Yemeni Rial', 'Currency Symbol', 'tenweb-builder') . ' (YER)',
          'ZAR' => '&#82; ' . _x('Rand', 'Currency Symbol', 'tenweb-builder') . ' (ZAR)',
          'ZWL' => '&#90;&#36; ' . _x('Zimbabwe Dollar', 'Currency Symbol', 'tenweb-builder') . ' (ZWL)',
        ],
        'default' => 'USD',
      ]
    );


    $this->add_control(
      'twbb_price',
      [
        'label' => __('Price', 'tenweb-builder'),
        'type' => Controls_Manager::TEXT,
        'default' => '39.99',
      ]
    );
    /* $this->add_control(
       'twbb_currency_symbol_custom',
       [
         'label' => __('Custom Symbol', 'tenweb-builder'),
         'type' => Controls_Manager::TEXT,
         'condition' => [
           'currency_symbol' => 'custom',
         ],
       ]
     );

     $this->add_control(
       'twbb_currency_format',
       [
         'label' => __('Currency Format', 'tenweb-builder'),
         'type' => Controls_Manager::SELECT,
         'options' => [
           '' => '1,234.56 (Default)',
           ',' => '1.234,56',
         ],
       ]
     );*/

    $this->add_control(
      'twbb_sale',
      [
        'label' => __('Sale', 'tenweb-builder'),
        'type' => Controls_Manager::SWITCHER,
        'label_on' => __('On', 'tenweb-builder'),
        'label_off' => __('Off', 'tenweb-builder'),
        'default' => '',
      ]
    );

    $this->add_control(
      'twbb_original_price',
      [
        'label' => __('Original Price', 'tenweb-builder'),
        'type' => Controls_Manager::NUMBER,
        'default' => '59',
        'condition' => [
          'twbb_sale' => 'yes',
        ]
      ]
    );

    $this->add_control(
      'twbb_period',
      [
        'label' => __('Period', 'tenweb-builder'),
        'type' => Controls_Manager::TEXT,
        'default' => __('Monthly', 'tenweb-builder'),
      ]
    );

    $this->end_controls_section();

    $this->start_controls_section(
      'twbb_section_features',
      [
        'label' => __('Features', 'tenweb-builder'),
      ]
    );

    $repeater = new Repeater();

    $repeater->add_control(
      'twbb_item_text',
      [
        'label' => __('Text', 'tenweb-builder'),
        'type' => Controls_Manager::TEXT,
        'default' => __('List Item', 'tenweb-builder'),
      ]
    );

    $default_icon = [
      'value' => 'far fa-check-circle',
      'library' => 'fa-regular',
    ];

    $repeater->add_control(
      'twbb_selected_item_icon',
      [
        'label' => __('Icon', 'tenweb-builder'),
        'type' => Controls_Manager::ICONS,
        'fa4compatibility' => 'twbb_item_icon',
        'default' => $default_icon,
      ]
    );

    $repeater->add_control(
      'twbb_item_icon_color',
      [
        'label' => __('Icon Color', 'tenweb-builder'),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
          '{{WRAPPER}} {{CURRENT_ITEM}} i' => 'color: {{VALUE}}',
          '{{WRAPPER}} {{CURRENT_ITEM}} svg' => 'fill: {{VALUE}}',
        ],
      ]
    );

    $this->add_control(
      'twbb_features_list',
      [
        'type' => Controls_Manager::REPEATER,
        'fields' => $repeater->get_controls(),
        'default' => [
          [
            'twbb_item_text' => __('Feature 1', 'tenweb-builder'),
            'selected_item_icon' => $default_icon,
          ],
          [
            'twbb_item_text' => __('Feature 2', 'tenweb-builder'),
            'selected_item_icon' => $default_icon,
          ],
          [
            'twbb_item_text' => __('Feature 3', 'tenweb-builder'),
            'selected_item_icon' => $default_icon,
          ],
        ],
        'title_field' => '{{{ twbb_item_text }}}',
      ]
    );

    $this->end_controls_section();

    $this->start_controls_section(
      'twbb_section_footer',
      [
        'label' => __('Footer', 'tenweb-builder'),
      ]
    );

    $this->add_control(
      'twbb_button_text',
      [
        'label' => __('Button Text', 'tenweb-builder'),
        'type' => Controls_Manager::TEXT,
        'default' => __('Buy Now', 'tenweb-builder'),
      ]
    );

    $this->add_control(
      'twbb_link',
      [
        'label' => __('Link', 'tenweb-builder'),
        'type' => Controls_Manager::URL,
        'placeholder' => __('https://your-link.com', 'tenweb-builder'),
        'default' => [
          'url' => '#',
        ],
        'dynamic' => [
          'active' => true,
        ],
      ]
    );

    $this->add_control(
      'twbb_footer_additional_info',
      [
        'label' => __('Additional Info', 'tenweb-builder'),
        'type' => Controls_Manager::TEXTAREA,
        'default' => __('This is text element', 'tenweb-builder'),
        'rows' => 2,
      ]
    );

    $this->end_controls_section();

    $this->start_controls_section(
      'twbb_section_ribbon',
      [
        'label' => __('Ribbon', 'tenweb-builder'),
      ]
    );

    $this->add_control(
      'twbb_show_ribbon',
      [
        'label' => __('Show', 'tenweb-builder'),
        'type' => Controls_Manager::SWITCHER,
        'default' => 'yes',
        'separator' => 'before',
      ]
    );

    $this->add_control(
      'twbb_ribbon_title',
      [
        'label' => __('Title', 'tenweb-builder'),
        'type' => Controls_Manager::TEXT,
        'default' => __('Popular', 'tenweb-builder'),
        'condition' => [
          'twbb_show_ribbon' => 'yes',
        ],
      ]
    );

    $this->add_control(
      'twbb_ribbon_horizontal_position',
      [
        'label' => __('Horizontal Position', 'tenweb-builder'),
        'type' => Controls_Manager::CHOOSE,
        'label_block' => false,
        'options' => [
          'left' => [
            'title' => __('Left', 'tenweb-builder'),
            'icon' => 'eicon-h-align-left',
          ],
          'right' => [
            'title' => __('Right', 'tenweb-builder'),
            'icon' => 'eicon-h-align-right',
          ],
        ],
        'default' => 'right',
        'condition' => [
          'twbb_show_ribbon' => 'yes',
        ],
      ]
    );

    $this->end_controls_section();

    $this->start_controls_section(
      'twbb_section_header_style',
      [
        'label' => __('Header', 'tenweb-builder'),
        'tab' => Controls_Manager::TAB_STYLE,
        'show_label' => false,
      ]
    );

    $this->add_control(
      'twbb_header_bg_color',
      [
        'label' => __('Background Color', 'tenweb-builder'),
        'type' => Controls_Manager::COLOR,
        'global' => [
          'default' => Global_Colors::COLOR_PRIMARY,
        ],
        'selectors' => [
          '{{WRAPPER}} .twbb-pricing-table__header' => 'background-color: {{VALUE}}',
        ],
      ]
    );

    $this->add_responsive_control(
      'twbb_header_padding',
      [
        'label' => __('Padding', 'tenweb-builder'),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em'],
        'default' => [
          'top' => '12',
          'right' => '20',
          'bottom' => '22',
          'left' => '20',
          'unit' => 'px',
          'isLinked' => false
        ],
        'selectors' => [
          '{{WRAPPER}} .twbb-pricing-table__header' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
      ]
    );

    $this->add_control(
      'twbb_heading_heading_style',
      [
        'label' => __('Title', 'tenweb-builder'),
        'type' => Controls_Manager::HEADING,
        'separator' => 'before',
      ]
    );

    $this->add_control(
      'twbb_heading_color',
      [
        'label' => __('Color', 'tenweb-builder'),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
          '{{WRAPPER}} .twbb-pricing-table__heading' => 'color: {{VALUE}}',
        ],
      ]
    );

    $this->add_group_control(
      Group_Control_Typography::get_type(),
      [
        'name' => 'twbb_heading_typography',
        'fields_options' => [
          'font_size' => [
            'default' => ['unit' => 'px', 'size' => 32]
          ],
          'line_height' => [
            'default' => ['unit' => 'em', 'size' => 1.6]
          ],
          'font_weight' => [
            'default' => 800,//['unit' => 'px', 'size' => 0.5]
          ],
        ],
        'selector' => '{{WRAPPER}} .twbb-pricing-table__heading',
        'global' => [
          'default' => Global_Typography::TYPOGRAPHY_PRIMARY,
        ],
      ]
    );

    $this->add_control(
      'twbb_heading_sub_heading_style',
      [
        'label' => __('Description', 'tenweb-builder'),
        'type' => Controls_Manager::HEADING,
        'separator' => 'before',
      ]
    );
    $this->add_control(
      'twbb_heading_sub_color',
      [
        'label' => __('Color', 'tenweb-builder'),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
          '{{WRAPPER}} .twbb-pricing-table__subheading' => 'color: {{VALUE}}',
        ],
      ]
    );

    /*    $this->add_control(
          'twbb_sub_heading_color',
          [
            'label' => __('Color', 'tenweb-builder'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
              '{{WRAPPER}} .twbb-pricing-table__subheading' => 'color: {{VALUE}}',
            ],
          ]
        );*/

    $this->add_group_control(
      Group_Control_Typography::get_type(),
      [
        'name' => 'twbb_sub_heading_typography',
        'fields_options' => [
          'font_size' => [
            'default' => ['unit' => 'px', 'size' => 16]
          ],
          'line_height' => [
            'default' => ['unit' => 'em', 'size' => 1]
          ],
          'letter_spacing' => [
            'default' => ['unit' => 'px', 'size' => 0.6]
          ],
          'font_weight' => [
            'default' => 300,
          ],
        ],
        'selector' => '{{WRAPPER}} .twbb-pricing-table__subheading',
        'global' => [
          'default' => Global_Typography::TYPOGRAPHY_SECONDARY,
        ],
      ]
    );

    $this->end_controls_section();

    $this->start_controls_section(
      'twbb_section_pricing_element_style',
      [
        'label' => __('Pricing', 'tenweb-builder'),
        'tab' => Controls_Manager::TAB_STYLE,
        'show_label' => false,
      ]
    );

    $this->add_control(
      'twbb_pricing_element_bg_color',
      [
        'label' => __( 'Background Color', 'tenweb-builder' ),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
          '{{WRAPPER}} .twbb-pricing-table__price' => 'background-color: {{VALUE}}',
        ],
      ]
    );

    $this->add_responsive_control(
      'twbb_pricing_element_padding',
      [
        'label' => __('Padding', 'tenweb-builder'),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em'],
        'default' => [
          'top' => '40',
          'right' => '40',
          'bottom' => '6',
          'left' => '40',
          'unit' => 'px',
          'isLinked' => false
        ],
        'selectors' => [
          '{{WRAPPER}} .twbb-pricing-table__price' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
      ]
    );

    $this->add_control(
      'twbb_price_color',
      [
        'label' => __('Color', 'tenweb-builder'),
        'type' => Controls_Manager::COLOR,
        'global' => [
          'default' => Global_Colors::COLOR_SECONDARY,
        ],
        'selectors' => [
          '{{WRAPPER}} .twbb-pricing-table__currency, {{WRAPPER}} .twbb-pricing-table__integer-part, {{WRAPPER}} .twbb-pricing-table__fractional-part' => 'color: {{VALUE}}',
        ],
        'separator' => 'before',
      ]
    );

    $this->add_group_control(
      Group_Control_Typography::get_type(),
      [
        'name' => 'twbb_price_typography',
        'fields_options' => [
          'font_size' => [
            'default' => ['unit' => 'px', 'size' => 64]
          ],
          'line_height' => [
            'default' => ['unit' => 'em', 'size' => 0.1]
          ],
          'font_weight' => [
            'default' => 800,//['unit' => 'px', 'size' => 0.5]
          ],
        ],
        'selector' => '{{WRAPPER}} .twbb-pricing-table__price',
        'global' => [
          'default' => Global_Typography::TYPOGRAPHY_PRIMARY,
        ],
      ]
    );

    $this->add_control(
      'twbb_heading_currency_style',
      [
        'label' => __('Currency Symbol', 'tenweb-builder'),
        'type' => Controls_Manager::HEADING,
        'separator' => 'before',
        'condition' => [
          'twbb_currency_symbol!' => '',
        ],
      ]
    );

    $this->add_control(
      'twbb_currency_size',
      [
        'label' => __('Size', 'tenweb-builder'),
        'type' => Controls_Manager::SLIDER,
        'range' => [
          'px' => [
            'min' => 0,
            'max' => 100,
          ],
        ],
        'default' => ['unit' => 'px', 'size' => 24],
        'selectors' => [
          '{{WRAPPER}} .twbb-pricing-table__currency' => 'font-size: calc({{SIZE}}em/100)',
        ],
        'condition' => [
          'twbb_currency_symbol!' => '',
        ],
      ]
    );

    $this->add_control(
      'twbb_currency_position',
      [
        'label' => __('Position', 'tenweb-builder'),
        'type' => Controls_Manager::CHOOSE,
        'label_block' => false,
        'default' => 'before',
        'options' => [
          'before' => [
            'title' => __('Before', 'tenweb-builder'),
            'icon' => 'eicon-h-align-left',
          ],
          'after' => [
            'title' => __('After', 'tenweb-builder'),
            'icon' => 'eicon-h-align-right',
          ],
        ],
      ]
    );

    $this->add_control(
      'twbb_currency_vertical_position',
      [
        'label' => __('Vertical Position', 'tenweb-builder'),
        'type' => Controls_Manager::CHOOSE,
        'label_block' => false,
        'options' => [
          'top' => [
            'title' => __('Top', 'tenweb-builder'),
            'icon' => 'eicon-v-align-top',
          ],
          'middle' => [
            'title' => __('Middle', 'tenweb-builder'),
            'icon' => 'eicon-v-align-middle',
          ],
          'bottom' => [
            'title' => __('Bottom', 'tenweb-builder'),
            'icon' => 'eicon-v-align-bottom',
          ],
        ],
//        'default' => 'top',
        'selectors_dictionary' => [
          'top' => 'flex-start',
          'middle' => 'center',
          'bottom' => 'flex-end',
        ],
        'selectors' => [
          '{{WRAPPER}} .twbb-pricing-table__currency' => 'align-self: {{VALUE}}',
        ],
        'condition' => [
          'twbb_currency_symbol!' => '',
        ],
      ]
    );

    $this->add_control(
      'twbb_fractional_part_style',
      [
        'label' => __( 'Fractional Part', 'tenweb-builder' ),
        'type' => Controls_Manager::HEADING,
        'separator' => 'before',
      ]
    );

    $this->add_control(
      'twbb_fractional-part_size',
      [
        'label' => __( 'Size', 'tenweb-builder' ),
        'type' => Controls_Manager::SLIDER,
        'range' => [
          'px' => [
            'min' => 0,
            'max' => 100,
          ],
        ],
        'selectors' => [
          '{{WRAPPER}} .twbb-pricing-table__fractional-part' => 'font-size: calc({{SIZE}}em/100)',
        ],
      ]
    );

    $this->add_control(
      'twbb_fractional_part_vertical_position',
      [
        'label' => __( 'Vertical Position', 'tenweb-builder' ),
        'type' => Controls_Manager::CHOOSE,
        'options' => [
          'top' => [
            'title' => __( 'Top', 'tenweb-builder' ),
            'icon' => 'eicon-v-align-top',
          ],
          'middle' => [
            'title' => __( 'Middle', 'tenweb-builder' ),
            'icon' => 'eicon-v-align-middle',
          ],
          'bottom' => [
            'title' => __( 'Bottom', 'tenweb-builder' ),
            'icon' => 'eicon-v-align-bottom',
          ],
        ],
        'default' => 'top',
        'selectors_dictionary' => [
          'top' => 'flex-start',
          'middle' => 'center',
          'bottom' => 'flex-end',
        ],
        'condition' => ['twbb_period_position!' => 'beside'],
        'selectors' => [
          '{{WRAPPER}} .twbb-pricing-table__after-price' => 'justify-content: {{VALUE}}',
        ],
      ]
    );

    $this->add_control(
      'twbb_heading_original_price_style',
      [
        'label' => __('Original Price', 'tenweb-builder'),
        'type' => Controls_Manager::HEADING,
        'separator' => 'before',
        'condition' => [
          'twbb_sale' => 'yes',
          'twbb_original_price!' => '',
        ],
      ]
    );

    $this->add_control(
      'twbb_original_price_color',
      [
        'label' => __('Color', 'tenweb-builder'),
        'type' => Controls_Manager::COLOR,
        'global' => [
          'default' => Global_Colors::COLOR_SECONDARY,
        ],
        'selectors' => [
          '{{WRAPPER}} .twbb-pricing-table__original-price' => 'color: {{VALUE}}',
        ],
        'condition' => [
          'twbb_sale' => 'yes',
          'twbb_original_price!' => '',
        ],
      ]
    );

    $this->add_group_control(
      Group_Control_Typography::get_type(),
      [
        'name' => 'twbb_original_price_typography',
        'selector' => '{{WRAPPER}} .twbb-pricing-table__original-price',
        'global' => [
          'default' => Global_Typography::TYPOGRAPHY_PRIMARY,
        ],
        'condition' => [
          'twbb_sale' => 'yes',
          'twbb_original_price!' => '',
        ],
      ]
    );

    $this->add_control(
      'twbb_original_price_vertical_position',
      [
        'label' => __('Vertical Position', 'tenweb-builder'),
        'type' => Controls_Manager::CHOOSE,
        'label_block' => false,
        'options' => [
          'top' => [
            'title' => __('Top', 'tenweb-builder'),
            'icon' => 'eicon-v-align-top',
          ],
          'middle' => [
            'title' => __('Middle', 'tenweb-builder'),
            'icon' => 'eicon-v-align-middle',
          ],
          'bottom' => [
            'title' => __('Bottom', 'tenweb-builder'),
            'icon' => 'eicon-v-align-bottom',
          ],
        ],
        'selectors_dictionary' => [
          'top' => 'flex-start',
          'middle' => 'center',
          'bottom' => 'flex-end',
        ],
        'default' => 'bottom',
        'selectors' => [
          '{{WRAPPER}} .twbb-pricing-table__original-price' => 'align-self: {{VALUE}}',
        ],
        'condition' => [
          'twbb_sale' => 'yes',
          'twbb_original_price!' => '',
        ],
      ]
    );

    $this->add_control(
      'twbb_heading_period_style',
      [
        'label' => __('Period', 'tenweb-builder'),
        'type' => Controls_Manager::HEADING,
        'separator' => 'before',
        'condition' => [
          'twbb_period!' => '',
        ],
      ]
    );

    $this->add_control(
      'twbb_period_color',
      [
        'label' => __('Color', 'tenweb-builder'),
        'type' => Controls_Manager::COLOR,
        'global' => [
          'default' => Global_Colors::COLOR_SECONDARY,
        ],
        'selectors' => [
          '{{WRAPPER}} .twbb-pricing-table__period' => 'color: {{VALUE}}',
        ],
        'condition' => [
          'twbb_period!' => '',
        ],
      ]
    );

    $this->add_group_control(
      Group_Control_Typography::get_type(),
      [
        'name' => 'twbb_period_typography',
        'selector' => '{{WRAPPER}} .twbb-pricing-table__period',
        'fields_options' => [
          'line_height' => [
            'default' => ['unit' => 'em', 'size' => 2.5]
          ],
          'font_weight' => [
            'default' => 400,
          ],
          'letter_spacing' => [
            ['unit' => 'px', 'size' => 0]
          ]
        ],
        'global' => [
          'default' => Global_Typography::TYPOGRAPHY_SECONDARY,
        ],
        'condition' => [
          'twbb_period!' => '',
        ],
      ]
    );

    $this->add_control(
      'twbb_period_position',
      [
        'label' => __( 'Position', 'tenweb-builder' ),
        'type' => Controls_Manager::SELECT,
        'label_block' => false,
        'options' => [
          'below' => __( 'Below', 'tenweb-builder' ),
          'beside' => __( 'Beside', 'tenweb-builder' ),
        ],
        'default' => 'below',
        'condition' => [
          'twbb_period!' => '',
          'twbb_currency_position!' => 'after',
        ],
      ]
    );

    $this->end_controls_section();

    $this->start_controls_section(
      'twbb_section_features_list_style',
      [
        'label' => __('Features', 'tenweb-builder'),
        'tab' => Controls_Manager::TAB_STYLE,
        'show_label' => false,
      ]
    );

    $this->add_control(
      'twbb_features_list_bg_color',
      [
        'label' => __( 'Background Color', 'tenweb-builder' ),
        'type' => Controls_Manager::COLOR,
        'separator' => 'before',
        'selectors' => [
          '{{WRAPPER}} .twbb-pricing-table__features-list' => 'background-color: {{VALUE}}',
        ],
      ]
    );

    $this->add_responsive_control(
      'twbb_features_list_padding',
      [
        'label' => __('Padding', 'tenweb-builder'),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em'],
        'default' => [
          'top' => '8',
          'right' => '8',
          'bottom' => '8',
          'left' => '8',
          'unit' => 'px',
          'isLinked' => true
        ],
        'selectors' => [
          '{{WRAPPER}} .twbb-pricing-table__features-list' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
          '{{WRAPPER}} .twbb-pricing-table__features-list li' => 'padding: {{BOTTOM}}{{UNIT}} 0 0 0;',

          '{{WRAPPER}} .twbb-pricing-table__features-list li:before' => 'margin: 0 0 {{TOP}}{{UNIT}} 0;',
        ],
      ]
    );

    $this->add_control(
      'twbb_features_list_color',
      [
        'label' => __('Color', 'tenweb-builder'),
        'type' => Controls_Manager::COLOR,
        'global' => [
          'default' => Global_Colors::COLOR_TEXT,
        ],
        'separator' => 'before',
        'selectors' => [
          '{{WRAPPER}} .twbb-pricing-table__features-list' => 'color: {{VALUE}}',
        ],
      ]
    );

    $this->add_group_control(
      Group_Control_Typography::get_type(),
      [
        'name' => 'twbb_features_list_typography',
        'fields_options' => [
          'font_size' => [
            'default' => ['unit' => 'px', 'size' => 16]
          ],
          'font_weight' => [
            'default' => 500,
          ],
        ],
        'selector' => '{{WRAPPER}} .twbb-pricing-table__features-list li',
        'global' => [
          'default' => Global_Typography::TYPOGRAPHY_TEXT,
        ],
      ]
    );

    $this->add_control(
      'twbb_features_list_alignment',
      [
        'label' => __('Alignment', 'tenweb-builder'),
        'type' => Controls_Manager::CHOOSE,
        'label_block' => false,
        'default' => 'center',
        'options' => [
          'left' => [
            'title' => __('Left', 'tenweb-builder'),
            'icon' => 'fa fa-align-left',
          ],
          'center' => [
            'title' => __('Center', 'tenweb-builder'),
            'icon' => 'fa fa-align-center',
          ],
          'right' => [
            'title' => __('Right', 'tenweb-builder'),
            'icon' => 'fa fa-align-right',
          ],
        ],
        'selectors' => [
          '{{WRAPPER}} .twbb-pricing-table__features-list' => 'text-align: {{VALUE}}',
        ],
      ]
    );

    $this->add_responsive_control(
      'twbb_item_width',
      [
        'label' => __('Width', 'tenweb-builder'),
        'type' => Controls_Manager::SLIDER,
        'range' => [
          '%' => [
            'min' => 25,
            'max' => 100,
          ],
        ],
        'default' => ['unit' => '%', 'size' => 100],
        'selectors' => [
          '{{WRAPPER}} .twbb-pricing-table__feature-inner' => 'margin-left: calc((100% - {{SIZE}}%)/2); margin-right: calc((100% - {{SIZE}}%)/2)',
        ],
      ]
    );

    $this->add_control(
      'twbb_list_divider',
      [
        'label' => __('Divider', 'tenweb-builder'),
        'type' => Controls_Manager::SWITCHER,
        'default' => 'no',
        'separator' => 'before',
      ]
    );

    $this->add_control(
      'twbb_divider_style',
      [
        'label' => __( 'Style', 'tenweb-builder' ),
        'type' => Controls_Manager::SELECT,
        'options' => [
          'solid' => __( 'Solid', 'tenweb-builder' ),
          'double' => __( 'Double', 'tenweb-builder' ),
          'dotted' => __( 'Dotted', 'tenweb-builder' ),
          'dashed' => __( 'Dashed', 'tenweb-builder' ),
        ],
        'default' => 'solid',
        'condition' => [
          'list_divider' => 'yes',
        ],
        'selectors' => [
          '{{WRAPPER}} .twbb-pricing-table__features-list li:before' => 'border-top-style: {{VALUE}};',
        ],
      ]
    );

    $this->add_control(
      'twbb_divider_color',
      [
        'label' => __('Color', 'tenweb-builder'),
        'type' => Controls_Manager::COLOR,
        'default' => '#ddd',
        'global' => [
          'default' => Global_Colors::COLOR_TEXT,
        ],
        'condition' => [
          'twbb_list_divider' => 'yes',
        ],
        'selectors' => [
          '{{WRAPPER}} .twbb-pricing-table__features-list li:before' => 'border-top-color: {{VALUE}};',
        ],
      ]
    );

    $this->add_control(
      'twbb_divider_weight',
      [
        'label' => __('Weight', 'tenweb-builder'),
        'type' => Controls_Manager::SLIDER,
        'default' => [
          'size' => 2,
          'unit' => 'px',
        ],
        'range' => [
          'px' => [
            'min' => 1,
            'max' => 10,
          ],
        ],
        'condition' => [
          'twbb_list_divider' => 'yes',
        ],
        'selectors' => [
          '{{WRAPPER}} .twbb-pricing-table__features-list li:before' => 'border-top-width: {{SIZE}}{{UNIT}};',
        ],
      ]
    );

    $this->add_control(
      'twbb_divider_width',
      [
        'label' => __('Width', 'tenweb-builder'),
        'type' => Controls_Manager::SLIDER,
        'condition' => [
          'twbb_list_divider' => 'yes',
        ],
        'selectors' => [
          '{{WRAPPER}} .twbb-pricing-table__features-list li:before' => 'margin-left: calc((100% - {{SIZE}}%)/2); margin-right: calc((100% - {{SIZE}}%)/2)',
        ],
      ]
    );

    $this->add_control(
      'twbb_divider_gap',
      [
        'label' => __( 'Gap', 'tenweb-builder' ),
        'type' => Controls_Manager::SLIDER,
        'default' => [
          'size' => 15,
          'unit' => 'px',
        ],
        'range' => [
          'px' => [
            'min' => 1,
            'max' => 50,
          ],
        ],
        'condition' => [
          'list_divider' => 'yes',
        ],
        'selectors' => [
          '{{WRAPPER}} .twbb-pricing-table__features-list li:before' => 'margin-top: {{SIZE}}{{UNIT}}; margin-bottom: {{SIZE}}{{UNIT}}',
        ],
      ]
    );

    $this->end_controls_section();

    $this->start_controls_section(
      'twbb_section_footer_style',
      [
        'label' => __('Footer', 'tenweb-builder'),
        'tab' => Controls_Manager::TAB_STYLE,
        'show_label' => false,
      ]
    );

    $this->add_control(
      'twbb_footer_bg_color',
      [
        'label' => __('Background Color', 'tenweb-builder'),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
          '{{WRAPPER}} .twbb-pricing-table__footer' => 'background-color: {{VALUE}}',
        ],
      ]
    );

    $this->add_responsive_control(
      'twbb_footer_padding',
      [
        'label' => __('Padding', 'tenweb-builder'),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em'],
        'selectors' => [
          '{{WRAPPER}} .twbb-pricing-table__footer' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
      ]
    );




    $this->add_control(
      'twbb_heading_footer_button',
      [
        'label' => __('Button', 'tenweb-builder'),
        'type' => Controls_Manager::HEADING,
        'separator' => 'before',
        'condition' => [
          'twbb_button_text!' => '',
        ],
      ]
    );



    $this->add_control(
      'twbb_button_size',
      [
        'label' => __('Size', 'tenweb-builder'),
        'type' => Controls_Manager::SELECT,
        'default' => 'sm',
        'options' => [
          'xs' => __('Extra Small', 'tenweb-builder'),
          'sm' => __('Small', 'tenweb-builder'),
          'md' => __('Medium', 'tenweb-builder'),
          'lg' => __('Large', 'tenweb-builder'),
          'xl' => __('Extra Large', 'tenweb-builder'),
        ],
        'condition' => [
          'twbb_button_text!' => '',
        ],
      ]
    );

    $this->start_controls_tabs('tabs_button_style');

    $this->start_controls_tab(
      'twbb_tab_button_normal',
      [
        'label' => __('Normal', 'tenweb-builder'),
        'condition' => [
          'twbb_button_text!' => '',
        ],
      ]
    );

    $this->add_control(
      'twbb_button_text_color',
      [
        'label' => __('Text Color', 'tenweb-builder'),
        'type' => Controls_Manager::COLOR,
        'default' => '',
        'selectors' => [
          '{{WRAPPER}} .twbb-pricing-table__button' => 'color: {{VALUE}};',
        ],
        'condition' => [
          'twbb_button_text!' => '',
        ],
      ]
    );

    $this->add_group_control(
      Group_Control_Typography::get_type(),
      [
        'name' => 'twbb_button_typography',
        'global' => [
          'default' => Global_Typography::TYPOGRAPHY_ACCENT,
        ],
        'selector' => '{{WRAPPER}} .twbb-pricing-table__button',
        'condition' => [
          'twbb_button_text!' => '',
        ],
      ]
    );

    $this->add_control(
      'twbb_button_background_color',
      [
        'label' => __('Background Color', 'tenweb-builder'),
        'type' => Controls_Manager::COLOR,
        'global' => [
          'default' => Global_Colors::COLOR_ACCENT,
        ],
        'selectors' => [
          '{{WRAPPER}} .twbb-pricing-table__button' => 'background-color: {{VALUE}};',
        ],
        'condition' => [
          'twbb_button_text!' => '',
        ],
      ]
    );

    $this->add_group_control(
      Group_Control_Border::get_type(), [
        'name' => 'twbb_button_border',
        'placeholder' => '1px',
        'default' => '1px',
        'selector' => '{{WRAPPER}} .twbb-pricing-table__button',
        'condition' => [
          'twbb_button_text!' => '',
        ],
        'separator' => 'before',
      ]
    );

    $this->add_control(
      'twbb_button_border_radius',
      [
        'label' => __('Border Radius', 'tenweb-builder'),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%'],
        'default' => [
          'top' => '30',
          'right' => '30',
          'bottom' => '30',
          'left' => '30',
          'unit' => 'px',
          'isLinked' => true
        ],
        'selectors' => [
          '{{WRAPPER}} .twbb-pricing-table__button' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
        'condition' => [
          'twbb_button_text!' => '',
        ],
      ]
    );

    $this->add_responsive_control(
      'twbb_button_text_padding',
      [
        'label' => __('Padding', 'tenweb-builder'),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', 'em', '%'],
        'default' => [
          'top' => '10',
          'right' => '80',
          'bottom' => '10',
          'left' => '80',
          'unit' => 'px',
          'isLinked' => false
        ],
        'selectors' => [
          '{{WRAPPER}} .twbb-pricing-table__button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
        ],
        'condition' => [
          'twbb_button_text!' => '',
        ],
      ]
    );

    $this->end_controls_tab();

    $this->start_controls_tab(
      'twbb_tab_button_hover',
      [
        'label' => __('Hover', 'tenweb-builder'),
        'condition' => [
          'twbb_button_text!' => '',
        ],
      ]
    );

    $this->add_control(
      'twbb_button_hover_color',
      [
        'label' => __('Text Color', 'tenweb-builder'),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
          '{{WRAPPER}} .twbb-pricing-table__button:hover' => 'color: {{VALUE}};',
        ],
        'condition' => [
          'twbb_button_text!' => '',
        ],
      ]
    );

    $this->add_control(
      'twbb_button_background_hover_color',
      [
        'label' => __('Background Color', 'tenweb-builder'),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
          '{{WRAPPER}} .twbb-pricing-table__button:hover' => 'background-color: {{VALUE}};',
        ],
        'condition' => [
          'twbb_button_text!' => '',
        ],
      ]
    );

    $this->add_control(
      'twbb_button_hover_border_color',
      [
        'label' => __('Border Color', 'tenweb-builder'),
        'type' => Controls_Manager::COLOR,
        'selectors' => [
          '{{WRAPPER}} .twbb-pricing-table__button:hover' => 'border-color: {{VALUE}};',
        ],
        'condition' => [
          'twbb_button_text!' => '',
        ],
      ]
    );

    $this->add_control(
      'twbb_button_hover_animation',
      [
        'label' => __('Animation', 'tenweb-builder'),
        'type' => Controls_Manager::HOVER_ANIMATION,
        'condition' => [
          'twbb_button_text!' => '',
        ],
      ]
    );

    $this->end_controls_tab();

    $this->end_controls_tabs();

    $this->add_control(
      'twbb_heading_additional_info',
      [
        'label' => __('Additional Info', 'tenweb-builder'),
        'type' => Controls_Manager::HEADING,
        'separator' => 'before',
        'condition' => [
          'twbb_footer_additional_info!' => '',
        ],
      ]
    );

    $this->add_control(
      'twbb_additional_info_color',
      [
        'label' => __('Color', 'tenweb-builder'),
        'type' => Controls_Manager::COLOR,
        'global' => [
          'default' => Global_Colors::COLOR_TEXT,
        ],
        'selectors' => [
          '{{WRAPPER}} .twbb-pricing-table__additional_info' => 'color: {{VALUE}}',
        ],
        'condition' => [
          'twbb_footer_additional_info!' => '',
        ],
      ]
    );

    $this->add_group_control(
      Group_Control_Typography::get_type(),
      [
        'name' => 'twbb_additional_info_typography',
        'fields_options' => [
          'font_size' => [
            'default' => ['unit' => 'px', 'size' => 16]
          ],
          'line_height' => [
            'default' => ['unit' => 'em', 'size' => 0.9]
          ],
          'font_weight' => [
            'default' => 500,
          ],
        ],
        'selector' => '{{WRAPPER}} .twbb-pricing-table__additional_info',
        'global' => [
          'default' => Global_Typography::TYPOGRAPHY_TEXT,
        ],
        'condition' => [
          'twbb_footer_additional_info!' => '',
        ],
      ]
    );

    $this->add_control(
      'twbb_additional_info_margin',
      [
        'label' => __('Margin', 'tenweb-builder'),
        'type' => Controls_Manager::DIMENSIONS,
        'size_units' => ['px', '%', 'em'],
        'default' => [
          'top' => 20,
          'right' => 10,
          'bottom' => 30,
          'left' => 10,
          'unit' => 'px',
        ],
        'selectors' => [
          '{{WRAPPER}} .twbb-pricing-table__additional_info' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
        ],
        'condition' => [
          'twbb_footer_additional_info!' => '',
        ],
      ]
    );

    $this->end_controls_section();

    $this->start_controls_section(
      'twbb_section_ribbon_style',
      [
        'label' => __('Ribbon', 'tenweb-builder'),
        'tab' => Controls_Manager::TAB_STYLE,
        'show_label' => false,
        'condition' => [
          'twbb_show_ribbon' => 'yes',
        ],
      ]
    );

    $this->add_control(
      'twbb_ribbon_bg_color',
      [
        'label' => __('Background Color', 'tenweb-builder'),
        'type' => Controls_Manager::COLOR,
        'global' => [
          'default' => Global_Colors::COLOR_ACCENT,
        ],
        'selectors' => [
          '{{WRAPPER}} .twbb-pricing-table__ribbon-inner' => 'background-color: {{VALUE}}',
        ],
      ]
    );

    $ribbon_distance_transform = is_rtl() ? 'translateY(-50%) translateX({{SIZE}}{{UNIT}}) rotate(-45deg)' : 'translateY(-50%) translateX(-50%) translateX({{SIZE}}{{UNIT}}) rotate(-45deg)';

    $this->add_responsive_control(
      'twbb_ribbon_distance',
      [
        'label' => __('Distance', 'tenweb-builder'),
        'type' => Controls_Manager::SLIDER,
        'range' => [
          'px' => [
            'min' => 0,
            'max' => 50,
          ],
        ],
        'default' => ['unit' => 'px', 'size' => 40],
        'selectors' => [
          '{{WRAPPER}} .twbb-pricing-table__ribbon-inner' => 'margin-top: {{SIZE}}{{UNIT}}; transform: ' . $ribbon_distance_transform,
        ],
      ]
    );

    $this->add_control(
      'twbb_ribbon_text_color',
      [
        'label' => __('Text Color', 'tenweb-builder'),
        'type' => Controls_Manager::COLOR,
        'default' => '#ffffff',
        'separator' => 'before',
        'selectors' => [
          '{{WRAPPER}} .twbb-pricing-table__ribbon-inner' => 'color: {{VALUE}}',
        ],
      ]
    );

    $this->add_group_control(
      Group_Control_Typography::get_type(),
      [
        'name' => 'twbb_ribbon_typography',
        'fields_options' => [
          'font_size' => [
            'default' => ['unit' => 'px', 'size' => 16]
          ],
        ],
        'selector' => '{{WRAPPER}} .twbb-pricing-table__ribbon-inner',
        'global' => [
          'default' => Global_Typography::TYPOGRAPHY_ACCENT,
        ],
      ]
    );

    $this->add_group_control(
      Group_Control_Box_Shadow::get_type(),
      [
        'name' => 'twbb_box_shadow',
        'selector' => '{{WRAPPER}} .twbb-pricing-table__ribbon-inner',
      ]
    );

    $this->end_controls_section();
  }

  private function render_currency_symbol($symbol, $location){
    $currency_position = $this->get_settings('twbb_currency_position');
    $location_setting = !empty($currency_position) ? $currency_position : 'before';
    if(!empty($symbol) && $location === $location_setting) {
      echo '<span class="twbb-pricing-table__currency twbb-currency--' . $location . '">' . $symbol . '</span>';
    }
  }

  private function get_currency_symbol($symbol_name){
    $symbols = [
      'AED' => '&#1583;.&#1573;', // ?
      'AFN' => '&#65;&#102;',
      'ALL' => '&#76;&#101;&#107;',
      'AMD' => 'Դ',
      'ANG' => '&#402;',
      'AOA' => '&#75;&#122;', // ?
      'ARS' => '&#36;',
      'AUD' => '&#36;',
      'AWG' => '&#402;',
      'AZN' => '&#1084;&#1072;&#1085;',
      'BAM' => '&#75;&#77;',
      'BBD' => '&#36;',
      'BDT' => '&#2547;', // ?
      'BGN' => '&#1083;&#1074;',
      'BHD' => '.&#1583;.&#1576;', // ?
      'BIF' => '&#70;&#66;&#117;', // ?
      'BMD' => '&#36;',
      'BND' => '&#36;',
      'BOB' => '&#36;&#98;',
      'BRL' => '&#82;&#36;',
      'BSD' => '&#36;',
      'BTN' => '&#78;&#117;&#46;', // ?
      'BWP' => '&#80;',
      'BYR' => '&#112;&#46;',
      'BZD' => '&#66;&#90;&#36;',
      'CAD' => '&#36;',
      'CDF' => '&#70;&#67;',
      'CHF' => '&#67;&#72;&#70;',
      'CLP' => '&#36;',
      'CNY' => '&#165;',
      'COP' => '&#36;',
      'CRC' => '&#8353;',
      'CUP' => '&#8396;',
      'CVE' => '&#36;', // ?
      'CZK' => '&#75;&#269;',
      'DJF' => '&#70;&#100;&#106;', // ?
      'DKK' => '&#107;&#114;',
      'DOP' => '&#82;&#68;&#36;',
      'DZD' => '&#1583;&#1580;', // ?
      'EGP' => '&#163;',
      'ETB' => '&#66;&#114;',
      'EUR' => '&#8364;',
      'FJD' => '&#36;',
      'FKP' => '&#163;',
      'GBP' => '&#163;',
      'GEL' => '&#4314;', // ?
      'GHS' => '&#162;',
      'GIP' => '&#163;',
      'GMD' => '&#68;', // ?
      'GNF' => '&#70;&#71;', // ?
      'GTQ' => '&#81;',
      'GYD' => '&#36;',
      'HKD' => '&#36;',
      'HNL' => '&#76;',
      'HRK' => '&#107;&#110;',
      'HTG' => '&#71;', // ?
      'HUF' => '&#70;&#116;',
      'IDR' => '&#82;&#112;',
      'ILS' => '&#8362;',
      'INR' => '&#8377;',
      'IQD' => '&#1593;.&#1583;', // ?
      'IRR' => '&#65020;',
      'ISK' => '&#107;&#114;',
      'JEP' => '&#163;',
      'JMD' => '&#74;&#36;',
      'JOD' => '&#74;&#68;', // ?
      'JPY' => '&#165;',
      'KES' => '&#75;&#83;&#104;', // ?
      'KGS' => '&#1083;&#1074;',
      'KHR' => '&#6107;',
      'KMF' => '&#67;&#70;', // ?
      'KPW' => '&#8361;',
      'KRW' => '&#8361;',
      'KWD' => '&#1583;.&#1603;', // ?
      'KYD' => '&#36;',
      'KZT' => '&#1083;&#1074;',
      'LAK' => '&#8365;',
      'LBP' => '&#163;',
      'LKR' => '&#8360;',
      'LRD' => '&#36;',
      'LSL' => '&#76;', // ?
      'LTL' => '&#76;&#116;',
      'LVL' => '&#76;&#115;',
      'LYD' => '&#1604;.&#1583;', // ?
      'MAD' => '&#1583;.&#1605;.', //?
      'MDL' => '&#76;',
      'MGA' => '&#65;&#114;', // ?
      'MKD' => '&#1076;&#1077;&#1085;',
      'MMK' => '&#75;',
      'MNT' => '&#8366;',
      'MOP' => '&#77;&#79;&#80;&#36;', // ?
      'MRO' => '&#85;&#77;', // ?
      'MUR' => '&#8360;', // ?
      'MVR' => '.&#1923;', // ?
      'MWK' => '&#77;&#75;',
      'MXN' => '&#36;',
      'MYR' => '&#82;&#77;',
      'MZN' => '&#77;&#84;',
      'NAD' => '&#36;',
      'NGN' => '&#8358;',
      'NIO' => '&#67;&#36;',
      'NOK' => '&#107;&#114;',
      'NPR' => '&#8360;',
      'NZD' => '&#36;',
      'OMR' => '&#65020;',
      'PAB' => '&#66;&#47;&#46;',
      'PEN' => '&#83;&#47;&#46;',
      'PGK' => '&#75;', // ?
      'PHP' => '&#8369;',
      'PKR' => '&#8360;',
      'PLN' => '&#122;&#322;',
      'PYG' => '&#71;&#115;',
      'QAR' => '&#65020;',
      'RON' => '&#108;&#101;&#105;',
      'RSD' => '&#1044;&#1080;&#1085;&#46;',
      'RUB' => '&#1088;&#1091;&#1073;',
      'RWF' => '&#1585;.&#1587;',
      'SAR' => '&#65020;',
      'SBD' => '&#36;',
      'SCR' => '&#8360;',
      'SDG' => '&#163;', // ?
      'SEK' => '&#107;&#114;',
      'SGD' => '&#36;',
      'SHP' => '&#163;',
      'SLL' => '&#76;&#101;', // ?
      'SOS' => '&#83;',
      'SRD' => '&#36;',
      'STD' => '&#68;&#98;', // ?
      'SVC' => '&#36;',
      'SYP' => '&#163;',
      'SZL' => '&#76;', // ?
      'THB' => '&#3647;',
      'TJS' => '&#84;&#74;&#83;', // ? TJS (guess)
      'TMT' => '&#109;',
      'TND' => '&#1583;.&#1578;',
      'TOP' => '&#84;&#36;',
      'TRY' => '&#8356;', // New Turkey Lira (old symbol used)
      'TTD' => '&#36;',
      'TWD' => '&#78;&#84;&#36;',
      'TZS' => 'Sh',
      'UAH' => '&#8372;',
      'UGX' => '&#85;&#83;&#104;',
      'USD' => '&#36;',
      'UYU' => '&#36;&#85;',
      'UZS' => '&#1083;&#1074;',
      'VEF' => '&#66;&#115;',
      'VND' => '&#8363;',
      'VUV' => '&#86;&#84;',
      'WST' => '&#87;&#83;&#36;',
      'XAF' => '&#70;&#67;&#70;&#65;',
      'XCD' => '&#36;',
      'XPF' => '&#70;',
      'YER' => '&#65020;',
      'ZAR' => '&#82;',
      'ZWL' => '&#90;&#36;',
    ];
    return isset($symbols[$symbol_name]) ? $symbols[$symbol_name] : '';
  }

  protected function render() {
    $settings = $this->get_settings_for_display();
    $symbol = '';

    if ( ! empty( $settings['twbb_currency_symbol'] ) ) {
      if ( 'custom' !== $settings['twbb_currency_symbol'] ) {
        $symbol = $this->get_currency_symbol( $settings['twbb_currency_symbol'] );
      } else {
        $symbol = $settings['twbb_currency_symbol_custom'];
      }
    }
    $currency_format = empty( $settings['twbb_currency_format'] ) ? '.' : $settings['twbb_currency_format'];
    $price = explode( $currency_format, $settings['twbb_price'] );
    $intpart = $price[0];
    $fraction = '';
    if ( 2 === count( $price ) ) {
      $fraction = $price[1];
    }

    $this->add_render_attribute( 'twbb_button_text', 'class', [
      'twbb-pricing-table__button',
      'elementor-button',
      'elementor-size-' . $settings['twbb_button_size'],
    ] );

    if ( ! empty( $settings['twbb_link']['url'] ) ) {
      $this->add_link_attributes( 'twbb_button_text', $settings['twbb_link'] );
    }

    if ( ! empty( $settings['twbb_button_hover_animation'] ) ) {
      $this->add_render_attribute( 'twbb_button_text', 'class', 'elementor-animation-' . $settings['button_hover_animation'] );
    }

    $this->add_render_attribute( 'twbb_heading', 'class', 'twbb-pricing-table__heading' );
    $this->add_render_attribute( 'twbb_sub_heading', 'class', 'twbb-pricing-table__subheading' );
    $this->add_render_attribute( 'twbb_period', 'class', [ 'twbb-pricing-table__period', 'elementor-typo-excluded' ] );
    $this->add_render_attribute( 'twbb_footer_additional_info', 'class', 'twbb-pricing-table__additional_info' );
    $this->add_render_attribute( 'twbb_ribbon_title', 'class', 'twbb-pricing-table__ribbon-inner' );

    $this->add_inline_editing_attributes( 'twbb_heading', 'none' );
    $this->add_inline_editing_attributes( 'twbb_sub_heading', 'none' );
    $this->add_inline_editing_attributes( 'twbb_period', 'none' );
    $this->add_inline_editing_attributes( 'twbb_footer_additional_info' );
    $this->add_inline_editing_attributes( 'twbb_button_text' );
    $this->add_inline_editing_attributes( 'twbb_ribbon_title' );

    $period_position = !empty($settings['twbb_period_position']) ? $settings['twbb_period_position'] : 'below';
    $period_element = '<span ' . $this->get_render_attribute_string( 'twbb_period' ) . '>' . $settings['twbb_period'] . '</span>';
    $heading_tag = $settings['twbb_heading_tag'];

    $migration_allowed = Icons_Manager::is_migration_allowed();
    ?>

    <div class="twbb-pricing-table">
      <?php if ( $settings['twbb_heading'] || $settings['twbb_sub_heading'] ) : ?>
        <div class="twbb-pricing-table__header">
          <?php if ( ! empty( $settings['twbb_heading'] ) ) : ?>
            <<?php echo $heading_tag . ' ' . $this->get_render_attribute_string( 'twbb_heading' ); ?>><?php echo $settings['twbb_heading'] . '</' . $heading_tag; ?>>
          <?php endif; ?>

          <?php if ( ! empty( $settings['twbb_sub_heading'] ) ) : ?>
            <span <?php echo $this->get_render_attribute_string( 'twbb_sub_heading' ); ?>><?php echo $settings['twbb_sub_heading']; ?></span>
          <?php endif; ?>
        </div>
      <?php endif; ?>

      <div class="twbb-pricing-table__price">
        <?php if ( 'yes' === $settings['twbb_sale'] && ! empty( $settings['twbb_original_price'] ) ) : ?>
          <div class="twbb-pricing-table__original-price elementor-typo-excluded">
	          <?php
	          $location_setting = !empty( $settings['twbb_currency_position']) ? $settings['twbb_currency_position'] : 'before';
              if ( $location_setting == 'after' ) {
	              echo $settings['twbb_original_price'] . $symbol;
	          } else {
		          echo $symbol . $settings['twbb_original_price'];
	          }?>
          </div>
        <?php endif; ?>
        <?php $this->render_currency_symbol( $symbol, 'before' ); ?>
        <?php if ( ! empty( $intpart ) || 0 <= $intpart ) : ?>
          <span class="twbb-pricing-table__integer-part"><?php echo $intpart; ?></span>
        <?php endif; ?>

        <?php if ( '' !== $fraction || ( ! empty( $settings['twbb_period'] ) && 'beside' === $period_position ) ) : ?>
          <div class="twbb-pricing-table__after-price">
            <span class="twbb-pricing-table__fractional-part"><?php echo $fraction; ?></span>

            <?php if ( ! empty( $settings['twbb_period'] ) && 'beside' === $period_position ) : ?>
              <?php echo $period_element; ?>
            <?php endif; ?>
          </div>
        <?php endif; ?>

        <?php $this->render_currency_symbol( $symbol, 'after' ); ?>

        <?php if ( ! empty( $settings['twbb_period'] ) && 'below' === $period_position ) : ?>
          <?php echo $period_element; ?>
        <?php endif; ?>
      </div>

      <?php if ( ! empty( $settings['twbb_features_list'] ) ) : ?>
        <ul class="twbb-pricing-table__features-list">
          <?php
          foreach ( $settings['twbb_features_list'] as $index => $item ) :
            $repeater_setting_key = $this->get_repeater_setting_key( 'twbb_item_text', 'twbb_features_list', $index );
            $this->add_inline_editing_attributes( $repeater_setting_key );

            $migrated = isset( $item['__fa4_migrated']['twbb_selected_item_icon'] );
            // add old default
            if ( ! isset( $item['twbb_item_icon'] ) && ! $migration_allowed ) {
              $item['twbb_item_icon'] = 'fa fa-check-circle';
            }
            $is_new = ! isset( $item['twbb_item_icon'] ) && $migration_allowed;
            ?>
            <li class="elementor-repeater-item-<?php echo $item['_id']; ?>">
              <div class="twbb-pricing-table__feature-inner">
                <?php if ( ! empty( $item['twbb_item_icon'] ) || ! empty( $item['twbb_selected_item_icon'] ) ) :
                  if ( $is_new || $migrated ) :
                    Icons_Manager::render_icon( $item['twbb_selected_item_icon'], [ 'aria-hidden' => 'true' ] );
                  else : ?>
                    <i class="<?php echo esc_attr( $item['twbb_item_icon'] ); ?>" aria-hidden="true"></i>
                  <?php
                  endif;
                endif; ?>
                <?php if ( ! empty( $item['twbb_item_text'] ) ) : ?>
                  <span <?php echo $this->get_render_attribute_string( $repeater_setting_key ); ?>>
										<?php echo $item['twbb_item_text']; ?>
									</span>
                <?php
                else :
                  echo '&nbsp;';
                endif;
                ?>
              </div>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>

      <?php if ( ! empty( $settings['twbb_button_text'] ) || ! empty( $settings['twbb_footer_additional_info'] ) ) : ?>
        <div class="twbb-pricing-table__footer">
          <?php if ( ! empty( $settings['twbb_button_text'] ) ) : ?>
            <a <?php echo $this->get_render_attribute_string( 'twbb_button_text' ); ?>><?php echo $settings['twbb_button_text']; ?></a>
          <?php endif; ?>

          <?php if ( ! empty( $settings['twbb_footer_additional_info'] ) ) : ?>
            <div <?php echo $this->get_render_attribute_string( 'twbb_footer_additional_info' ); ?>><?php echo $settings['twbb_footer_additional_info']; ?></div>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </div>

    <?php
    if ( 'yes' === $settings['twbb_show_ribbon'] && ! empty( $settings['twbb_ribbon_title'] ) ) :
      $this->add_render_attribute( 'twbb_ribbon-wrapper', 'class', 'twbb-pricing-table__ribbon' );

      if ( ! empty( $settings['twbb_ribbon_horizontal_position'] ) ) :
        $this->add_render_attribute( 'twbb_ribbon-wrapper', 'class', 'twbb-ribbon-' . $settings['twbb_ribbon_horizontal_position'] );
      endif;

      ?>
      <div <?php echo $this->get_render_attribute_string( 'twbb_ribbon-wrapper' ); ?>>
        <div <?php echo $this->get_render_attribute_string( 'twbb_ribbon_title' ); ?>><?php echo $settings['twbb_ribbon_title']; ?></div>
      </div>
    <?php
    endif;
  }
}

\Elementor\Plugin::instance()->widgets_manager->register(new Pricing_Table());
