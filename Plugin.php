<?php
/**
 * 一个 用于Typecho的 复制代码 的插件</a>
 * 
 * @package CodeCopy 
 * @author 兔子昂
 * @version 1.0.0
 * @link https://www.tuziang.com
 */
class CodeCopy_Plugin implements Typecho_Plugin_Interface {
     /**
     * 激活插件方法,如果激活失败,直接抛出异常
     * 
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function activate() {
        Typecho_Plugin::factory('Widget_Archive')->header = array(codecopy_Plugin, 'header');
        Typecho_Plugin::factory('Widget_Archive')->footer = array(codecopy_Plugin, 'footer');
    }

    /**
     * 禁用插件方法,如果禁用失败,直接抛出异常
     * 
     * @static
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function deactivate(){}

    /**
     * 获取插件配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form 配置面板
     * @return void
     */
    public static function config(Typecho_Widget_Helper_Form $form){
        //设置代码风格样式

    }

    /**
     * 个人用户的配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form
     * @return void
     */
    public static function personalConfig(Typecho_Widget_Helper_Form $form){}

    /**
     * 插件实现方法
     * 
     * @access public
     * @return void
     */
    public static function render() {
        
    }

    /**
     *为header添加css文件
     *@return void
     */
    public static function header() {
       
    }

    /**
     *为footer添加js文件
     *@return void
     */
    public static function footer() {
      
		$path = Helper::options()->pluginUrl . '/codecopy/';
		echo '<script type="text/javascript" src="' . $path . 'codecopy.js"></script>';
    }
}
