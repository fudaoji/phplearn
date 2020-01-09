<?php

/**
 * 模板编译器
 *
 *
 */
class CompileClass {
	private $template; //待编译文件
	private $content; //需要替换的文本
	private $compile; //编译后的文件
	private $left = '{'; //左定界符
	private $right = '}'; //右定界符
	private $value = []; //变量数组

	public function __construct() {

	}

	public function compile($source, $destFile) {
		file_put_contents($destFile, file_get_contents($source));
	}
}