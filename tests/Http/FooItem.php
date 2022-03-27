<?php
namespace AutoRoute\Http;

//abstract class FooItem
//{}

class FooItem
{
    public function onGet(int $id)
    {
    }

     /**
      * FooItem/Editより優先するメソッド
      * ただし$actionにデフォルト値は設定できない
      */
//     public function __invoke(int $id, string $action)
//     {
//     }
}
