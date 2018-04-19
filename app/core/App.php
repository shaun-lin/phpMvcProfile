<?php

class App
{
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];

    //此文件主要用來實現MVC url[0] 帶Ccontroller url[1] 帶function url[2...] 參數 get 參數用

    public function __construct()
    {

        $url = $this->parseUrl();

        
        //file_exists 檢查檔案是否存在 
        if( file_exists('../app/controllers/' . $url[0] . '.php' ))
        {
            //存在 $controller替換呈現在url[0]
            $this->controller = $url[0];
            // 移除url[0] 保持之後get $params 乾淨
            unset($url[0]);
        }

        // 引入現在對應的controller
        require_once '../app/controllers/' . $this->controller . '.php';

        $this->controller = new $this->controller;

        // 確認url是否有輸入[1]值用來做檢查方法是否存在
        if(isset($url[1]))
        {
            // method_exists 確認function是否存在
            if(method_exists($this->controller, $url[1])){
                // 存在則取代 $this->method
                $this->method = $url[1];
                
            }else{
                echo 'method_doesn"t //'. $url[1] . '// exists<br>';
            }
            // 移除url[1] 保持之後get $params 乾淨
            unset($url[1]);
        }
        //array_values 返回陣列值 但不保留原key值 將重新定義為0 1 2 3...
        // 確認是否有帶參數 有的話 array_values 沒有等於空陣列
        // if簡寫 if ?YES:NO;
        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->method], $this->params);
        // var_dump($this->controller);

        
    }

    public function parseUrl()
    {
        if(isset($_GET['url'])) {
            //url 處理 rtrim 把右側斜線移除 防呆，以免多斜線 會多一個空白參數
            // filter_var 過濾器 過濾 FILTER_SANITIZE_URL<= 所有URL非法字元
            // explode 數組依照條件打散成陣列
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }
}