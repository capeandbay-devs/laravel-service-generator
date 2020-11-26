<?php

namespace CapeAndBay\ServiceGenerator;

use CapeAndBay\ServiceGenerator\Commands\Utility\MakeServiceCommand;

class ServiceGeneratorServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        $this->commands([
            MakeServiceCommand::class
        ]);
    }
}
