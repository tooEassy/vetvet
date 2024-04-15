<?php

namespace App\Filament\Plugins;

use Filament\Plugin\Plugin;

class ChatPlugin extends Plugin
{
    public function registerAssets()
    {
        // Регистрация скриптов или стилей

    }

    public function registerViews()
    {
        // Регистрация представления с кнопкой
        $this->view('header', 'filament-my-plugin::header');
    }
}
