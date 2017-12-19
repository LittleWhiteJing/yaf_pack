<?php
/**
 * @name Bootstrap
 * @desc 所有在Bootstrap类中, 以_init开头的方法, 都会被Yaf调用
 * 这些方法, 都接受一个参数:Yaf_Dispatcher $dispatcher
 * 调用的次序, 和申明的次序相同
 */
class Bootstrap extends Yaf_Bootstrap_Abstract {

	/**
	 * @desc 注册配置
	 * @path /conf/application
	 * 初始化后这些配置可以全局读取
	 */
	public function _initConfig() {
		$arrConfig = new Yaf_Config_Ini(dirname(__FILE__).'/../conf/application.ini');
		Yaf_Registry::set('config', $arrConfig);
	}

	/**
	  * @desc 注册插件
	  * @path APP_PATH/plugins
	  * 
	  */
	public function _initPlugin(Yaf_Dispatcher $dispatcher) {
		$objSamplePlugin = new SamplePlugin();
		$dispatcher->registerPlugin($objSamplePlugin);
	}

	/**
	  * @desc 注册路由
	  * @desc 定义为index.php?m=module&c=controller&a=action
	  * 后添加的路由将优先解析
	  */
	public function _initRoute(Yaf_Dispatcher $dispatcher) { 
		$router = Yaf_Dispatcher::getInstance()->getRouter();
		$route = new Yaf_Route_Simple("m", "c", "a");
		$router->addRoute("name", $route);
	}

	/**
	  * @desc 导入全局函数和类库
	  * @path APP_PATH/library
	  * 加载后这些函数和类可以全局使用
	  */
	public function _initImport(Yaf_Dispatcher $dispatcher) {
		Yaf_Loader::import('Util.php');
	}



}