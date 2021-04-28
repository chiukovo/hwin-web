<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HelpersServiceProvider extends ServiceProvider
{
    /**
     * 引入所有helper檔案
     */
    public function register()
    {
        foreach (glob(app('path') . '/Helpers/*.php') as $filename) {
            require_once($filename);
        }
    }
}
