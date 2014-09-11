<?php

namespace Dion\Admin\Sections;

/**
 * Social Media sections
 */
class SocialMedia
{
	
	public static function get()
	{
		$section = array(
            'title' => __('Social Media', 'redux-framework'),
            'icon' => 'el-icon-bullhorn',
            'fields' => array(

                array(
                    'id'        => 'smFacebook',
                    'type'      => 'text',
                    'title'     => __('Facebook', 'dion'),
                    'validate'  => 'no_html',
                    'default'   => '',
                ),

                array(
                    'id'        => 'smTwitter',
                    'type'      => 'text',
                    'title'     => __('Twitter', 'dion'),
                    'validate'  => 'no_html',
                    'default'   => '',
                ),

                array(
                    'id'        => 'smGooglePlus',
                    'type'      => 'text',
                    'title'     => __('Google+', 'dion'),
                    'validate'  => 'no_html',
                    'default'   => '',
                ),

                array(
                    'id'        => 'smPinterest',
                    'type'      => 'text',
                    'title'     => __('Pinterest', 'dion'),
                    'validate'  => 'no_html',
                    'default'   => '',
                ),

                array(
                    'id'        => 'smInstagram',
                    'type'      => 'text',
                    'title'     => __('Instagram', 'dion'),
                    'validate'  => 'no_html',
                    'default'   => '',
                ),

                array(
                    'id'        => 'smYouTube',
                    'type'      => 'text',
                    'title'     => __('YouTube', 'dion'),
                    'validate'  => 'no_html',
                    'default'   => '',
                ),

                array(
                    'id'        => 'smVimeo',
                    'type'      => 'text',
                    'title'     => __('Vimeo', 'dion'),
                    'validate'  => 'no_html',
                    'default'   => '',
                )
            ));

		return $section;
	}
}