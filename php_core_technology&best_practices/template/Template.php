<?php

class Template {

	private $arrayConfig = [
		'suffix' => '.m', //设置模板文件后缀
		'templateDir' => 'template/', //设置模板所在目录,
		'compileDir' => 'cache/', //设置编译后文件存放的目录
		'cache_html' => false, //是否编译成静态文件
		'suffix_cache' => '.html', //设置编译文件的后缀
		'cache_time' => 7200, //多长时间自动更新，单位秒
	];

	public $file; //模板文件名
	private $value; //模板变量
	private $compileTool; //编译器

	static private $instance = null; //实例

	public function __construct($config = []) {
		$this->arrayConfig = array_merge($this->arrayConfig, $config);
		include "CompileClass.php";
		$this->compileTool = new CompileClass();
	}

	/**
	 *
	 * 调取模板显示
	 */
	public function show($file = '') {
		$this->file = $file;
		if (!is_file($this->path())) {
			exit("找不到模板文件");
		}

		$compileFile = $this->arrayConfig['compileDir'] . '/' . md5($this->file) . $this->arrayConfig['suffix_cache'];
		if (!is_file($compileFile)) {
			mkdir($this->arrayConfig['compileDir']);
			$this->compileTool->compile($this->path(), $compileFile);
			readfile($compileFile);
		} else {
			readfile($compileFile);
		}
	}

	/**
	 * 文件路径
	 */
	public function path() {
		return $this->arrayConfig['templateDir'] . $this->file . $this->arrayConfig['suffix'];
	}

	/**
	 * 单个赋值
	 */
	public function assign($key, $value) {
		$this->value[$key] = $value;
	}

	/**
	 * 批量赋值
	 */
	public function assignArray($array) {
		if (is_array($array)) {
			foreach ($array as $key => $value) {
				$this->value[$key] = $value;
			}
		}
	}

	/**
	 * 获取单例实例
	 */
	public static function getInstance() {
		if (is_null(self::$instance)) {
			self::$instance = new Template();
		}
		return self::$instance;
	}

	public function setConfig($key, $value = null) {
		if (is_array($key)) {
			array_merge($this->arrayConfig, $key);
		} else {
			$this->arrayConfig[$key] = $value;
		}
	}

	public function getConfig($key = null) {
		if ($key) {
			return $this->arrayConfig[$key];
		}
		return $this->arrayConfig;
	}
}

?>