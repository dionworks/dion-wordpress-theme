<?php

namespace Dion\Admin\Sections;

/**
 * General Settings sections
 */
class GeneralSettings
{
	
	public static function get()
	{
		$section = array(
            'icon'   => 'el-icon-cogs',
            'title'  => __('General Settings', 'dion'),
            'fields' => array(
                array(
                    'id' => 'logo',
                    'type' => 'media',
                    'url' => true,
                    'title' => __('Logo', 'dion'),
                    'compiler' => 'true',
                    'subtitle' => __('320x100 px','dion'),
                    'desc' => __('Upload your own login page logo. ', 'dion'),
                    'default' => array('url' => get_template_directory_uri().'/img/dion-works.png'),
                ),
                array(
                    'id' => 'favicon',
                    'type' => 'media',
                    'url' => true,
                    'title' => __('Favicon', 'dion'),
                    'compiler' => 'true',
                    'subtitle' => __('16x16 px','dion'),
                    'desc' => __('Upload your own favicon. ', 'dion'),
                    'default' => array('url' => get_template_directory_uri().'/img/ico/favicon.ico'),
                ),
                array(
                    'id' => 'favicon57',
                    'type' => 'media',
                    'url' => true,
                    'title' => __('Favicon 57', 'dion'),
                    'subtitle' => __('Apple touch icon 57 precomposed. PNG format.','dion'),
                    'compiler' => 'true',
                    'desc' => __('Upload your own Apple touch icon 57 precomposed. ', 'dion'),
                    'default' => array('url' => get_template_directory_uri().'/img/ico/apple-touch-icon-57-precomposed.png'),
                ),
                array(
                    'id' => 'favicon72',
                    'type' => 'media',
                    'url' => true,
                    'title' => __('Favicon 72', 'dion'),
                    'subtitle' => __('Apple touch icon 72 precomposed. PNG format.','dion'),
                    'compiler' => 'true',
                    'desc' => __('Upload your own Apple touch icon 72 precomposed. ', 'dion'),
                    'default' => array('url' => get_template_directory_uri().'/img/ico/apple-touch-icon-72-precomposed.png'),
                ),
                array(
                    'id' => 'favicon114',
                    'type' => 'media',
                    'url' => true,
                    'title' => __('Favicon 114', 'dion'),
                    'subtitle' => __('Apple touch icon 114 precomposed. PNG format.','dion'),
                    'compiler' => 'true',
                    'desc' => __('Upload your own Apple touch icon 114 precomposed. ', 'dion'),
                    'default' => array('url' => get_template_directory_uri().'/img/ico/apple-touch-icon-114-precomposed.png'),
                ),
                array(
                    'id' => 'favicon144',
                    'type' => 'media',
                    'url' => true,
                    'title' => __('Favicon 144', 'dion'),
                    'subtitle' => __('Apple touch icon 144 precomposed. PNG format.','dion'),
                    'compiler' => 'true',
                    'desc' => __('Upload your own Apple touch icon 144 precomposed. ', 'dion'),
                    'default' => array('url' => get_template_directory_uri().'/img/ico/apple-touch-icon-144-precomposed.png'),
                ),
                array(
                    'id' => 'customCSS',
                    'type' => 'ace_editor',
                    'title' => __('Custom CSS Code', 'dion'),
                    'subtitle' => __('Paste your CSS code here.', 'dion'),
                    'mode' => 'css',
                    'theme' => 'monokai',
                    'default' => "#header{\nmargin: 0 auto;\n}"
                ),
                array(
                    'id' => 'customJS',
                    'type' => 'ace_editor',
                    'title' => __('Custom JS Code', 'dion'),
                    'subtitle' => __('Paste your JS code here.', 'dion'),
                    'mode' => 'javascript',
                    'theme' => 'chrome',
                    'default' => "jQuery(document).ready(function(){\n\n});"
                ),
                array(
                    'id' => 'googleAnalytics',
                    'type' => 'text',
                    'title' => __('Google Analytics', 'dion'),
                    'desc' => __('Add Google Analytics code. Example: UA-12345678-9', 'dion'),
                ),
            )
        );
		return $section;
	}
}