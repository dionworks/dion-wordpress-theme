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
            'title'  => __('Genel Ayarlar', 'dion'),
            'fields' => array(
                array(
                    'id' => 'logo',
                    'type' => 'media',
                    'url' => true,
                    'title' => __('Logo', 'dion'),
                    'compiler' => 'true',
                    'subtitle' => __('320x100 px <br/><br/>WordPress giriş panelindeki giriş logosudur.','dion'),
                    'default' => array('url' => get_template_directory_uri().'/img/dion-works.png'),
                ),
                array(
                    'id' => 'favicon',
                    'type' => 'media',
                    'url' => true,
                    'title' => __('Favicon', 'dion'),
                    'compiler' => 'true',
                    'subtitle' => __('16x16px <br/><br/>Tarayıcı sekmenizin sol tarafından görünen 16x16px\'lik ufak favicondur.', 'dion'),
                    'default' => array('url' => get_template_directory_uri().'/img/ico/favicon.ico'),
                ),
                array(
                    'id' => 'favicon57',
                    'type' => 'media',
                    'url' => true,
                    'title' => __('Favicon 57', 'dion'),
                    'compiler' => 'true',
                    'subtitle' => __('57x57px <br/><br/>Mobil ve Tablet\'de sayfayı kaydettiğinizde düzgün görünmesini sağlayan ikondur.', 'dion'),
                    'default' => array('url' => get_template_directory_uri().'/img/ico/apple-touch-icon-57-precomposed.png'),
                ),
                array(
                    'id' => 'favicon72',
                    'type' => 'media',
                    'url' => true,
                    'title' => __('Favicon 72', 'dion'),
                    'compiler' => 'true',
                    'subtitle' => __('72x72px <br/><br/>Mobil ve Tablet\'de sayfayı kaydettiğinizde düzgün görünmesini sağlayan ikondur.', 'dion'),
                    'default' => array('url' => get_template_directory_uri().'/img/ico/apple-touch-icon-72-precomposed.png'),
                ),
                array(
                    'id' => 'favicon114',
                    'type' => 'media',
                    'url' => true,
                    'title' => __('Favicon 114', 'dion'),
                    'compiler' => 'true',
                    'subtitle' => __('114x114px <br/><br/>Mobil ve Tablet\'de sayfayı kaydettiğinizde düzgün görünmesini sağlayan ikondur.', 'dion'),
                    'default' => array('url' => get_template_directory_uri().'/img/ico/apple-touch-icon-114-precomposed.png'),
                ),
                array(
                    'id' => 'favicon144',
                    'type' => 'media',
                    'url' => true,
                    'title' => __('Favicon 144', 'dion'),
                    'compiler' => 'true',
                    'subtitle' => __('144x144px <br/><br/>Mobil ve Tablet\'de sayfayı kaydettiğinizde düzgün görünmesini sağlayan ikondur.', 'dion'),
                    'default' => array('url' => get_template_directory_uri().'/img/ico/apple-touch-icon-144-precomposed.png'),
                ),
                array(
                    'id' => 'customCSS',
                    'type' => 'ace_editor',
                    'title' => __('Özel CSS Kodu', 'dion'),
                    'subtitle' => __('Tema dosyanızı değiştirmeden buradan CSS\'lerinizi tanımlayabilirsiniz.', 'dion'),
                    'mode' => 'css',
                    'theme' => 'monokai',
                    'default' => "#header{\nmargin: 0 auto;\n}"
                ),
                array(
                    'id' => 'customJS',
                    'type' => 'ace_editor',
                    'title' => __('Özek JS Kodu', 'dion'),
                    'subtitle' => __('Tema dosyanızı değiştirmeden buradan JS\'lerinizi tanımlayabilirsiniz.', 'dion'),
                    'mode' => 'javascript',
                    'theme' => 'chrome',
                    'default' => "jQuery(document).ready(function(){\n\n});"
                ),
                array(
                    'id' => 'googleAnalytics',
                    'type' => 'text',
                    'title' => __('Google Analiz', 'dion'),
                    'subtitle' => __('Google analiz kodunu buraya yazarak izlemeleri etkinleştirebilirsiniz. <br/><br/>Örnek kullanım: UA-12345678-9', 'dion'),
                ),
            )
        );
		return $section;
	}
}