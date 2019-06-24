AdminLTE templates for Webcore
==============================

For https://github.com/dandisy/webcore

This package based on https://github.com/InfyOmLabs/adminlte-templates

Installation steps are located [here](http://labs.infyom.com/laravelgenerator/docs/master/adminlte-templates)

Note :
for more generic if any artisan command use generate instead infyom

### Usage (if this package is installed manually)

1. add autoload classmap in composer.json

    {
        . . .
        "autoload": {
            "classmap": [
                . . .
                "vendor/dandisy"
            ],
            . . .

2. register this package in config/app.php

    /*
    * Package Service Providers...
    */
    . . .    
    Webcore\ElmerTemplates\ElmerTemplatesServiceProvider::class,

3. composer dump-autoload
