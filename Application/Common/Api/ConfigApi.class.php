<?php
// +----------------------------------------------------------------------
// | 就要学-在线教育平台 [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.hzmjw.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: Majw <Majw998@gmail.com>
// +----------------------------------------------------------------------

namespace Common\Api;
class ConfigApi{
	public static function lists()
	{
		$data = M('setting')->field('vartype,varname,varvalue')->select();
		$config = array();
        if($data && is_array($data)){
            foreach ($data as $value) {
                $config[$value['varname']] = self::parse($value['vartype'], $value['varvalue']);
            }
        }
      	return $config;
	}
	/**
     * 根据配置类型解析配置
     * @param  integer $type  配置类型
     * @param  string  $value 配置值
     */
    private static function parse($type, $value){
        switch ($type){
            case 3: //解析数组
                $array = preg_split('/[,;\r\n]+/', trim($value, ",;\r\n"));
                if(strpos($value,':')){
                    $value  = array();
                    foreach ($array as $val) {
                        list($k, $v) = explode(':', $val);
                        $value[$k]   = $v;
                    }
                }else{
                    $value =    $array;
                }
                break;
        }
        return $value;
    }
}