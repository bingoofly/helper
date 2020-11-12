<?php


namespace Bingoofly\Helper;


class ArrayHelper
{
    /**
     * 字符串转数组
     * @param string $text 待转内容
     * @param string $separ 分隔字符
     * @param null|array $allow 限定规则
     * @return array
     */
  public static  function str2arr(string $text, string $separ = ',', ?array $allow = null): array
    {
        $text = trim($text, $separ);
        $data = strlen($text) ? explode($separ, $text) : [];
        if (is_array($allow)) foreach ($data as $key => $item) {
            if (!in_array($item, $allow)) unset($data[$key]);
        }
        return $data;
    }

}