# Biography Package For Laravel Framework
Package biography.<br>
Ready for development and installation.

1. [Create folder for package.](#create-folder-for-package)<br>
2. [Checkout repository.](#checkout-repository)<br>
3. [Set path for development installation.](#set-path-for-development-installation)<br>
4. [Install package locally.](#install-package-locally)<br>


### Create folder for package
application\packages\\__vilbur\biography__


### Checkout repository
In folder application\packages\vilbur\biography run command below.
``` bash
git init &&git remote add origin https://github.com/vilbur/laravel-package-biography.git &&git pull origin master
```


### Set path for development installation
Add to __application\composer.json__.
``` json
"repositories": {
    "biography": {
        "type": "path",
        "url": "packages/vilbur/biography",
        "options": {
            "symlink": true
        }
    }
}
```

### Install package locally
``` bash
composer require vilbur/biography @dev
```