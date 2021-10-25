<?php

namespace Rehub\Gutenberg\Blocks;

defined( 'ABSPATH' ) OR exit;

class AdvancedListing extends Basic {
	protected $name = 'advanced-listing';

	protected function __construct() {
		parent::__construct();
	}

	static $fonts = array();

	protected $attributes = array(
		'select_type' => array(
			'type' => 'string',
			'default' => 'custom',
		),
		'cat' => array(
			'type' => 'array',
			'default' => null
		),
		'tag' => array(
			'type' => 'array',
			'default' => null
		),
		'tax_name' => array(
			'type' => 'string',
			'default' => '',
		),
		'tax_slug' => array(
			'type' => 'array',
			'default' => null
		),
		'tax_slug_exclude' => array(
			'type' => 'array',
			'default' => null
		),
		'user_id' => array(
			'type' => 'array',
			'default' => null
		),
		'type' => array(
			'type' => 'string',
			'default' => 'recent',
		),
		'ids' => array(
			'type' => 'array',
			'default' => null
		),
		'order' => array(
			'type' => 'string',
			'default' => 'desc',
		),
		'orderby' => array(
			'type' => 'string',
			'default' => 'date',
		),
		'meta_key' => array(
			'type' => 'string',
			'default' => '',
		),
		'show' => array(
			'type' => 'number',
			'default' => 12,
		),
		'offset' => array(
			'type' => 'string',
			'default' => '',
		),
		'enable_pagination' => array(
			'type' => 'string',
			'default' => '0',
		),
	);

	protected function render( $settings = array(), $inner_content = '' ) {
		if(!empty($settings['listargs'])){

			foreach($settings['listargs']['section'] as $index=>$section){
				if(!empty($section['imageMapper'])){
					$imagearray = array();
					foreach($section['imageMapper'] as $image){
						$imageindex = $image['image']['id'];
						$valueindex = $image['value'];
						$imagearray[$imageindex] = $valueindex;
					}
					$settings['listargs']['section'][$index]['imageMapper'] = $imagearray;
				}
			}
			
			if(!empty($settings['listargs']['section'][0]['t'])){
				foreach($settings['listargs']['section'] as $index=>$section){
					unset($settings['listargs']['section'][$index]['t']);
				}
			}
			$settings['listargs'] = json_encode( $settings['listargs']);
		}
		$this->normalize_arrays( $settings );
		if ( !empty( $settings['filterpanel'] ) ) {
            $settings['filterpanel'] = $this->filter_values( $settings['filterpanel'] );
            $settings['filterpanel'] = rawurlencode( json_encode( $settings['filterpanel'] ) );
        }
		$output = str_replace( "{{ content }}", wpsm_list_constructor( $settings ), $inner_content );
		
		echo $output;
	}
}