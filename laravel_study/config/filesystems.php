<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | 在这里，您可以指定应使用的默认文件系统磁盘
    | 通过框架。 “本地”磁盘以及各种云
    | 基于磁盘的磁盘可用于您的应用程序。 只是存放！
    |
    */

    'default' => env('FILESYSTEM_DRIVER', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Default Cloud Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | 许多应用程序都在本地和云中存储文件。 为了这
    | 因此，您可以在此处指定默认的“云”驱动程序。 这个司机
    | 将绑定为容器中的云磁盘实现。
    |
    */

    'cloud' => env('FILESYSTEM_CLOUD', 's3'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | 在这里，您可以根据需要配置任意数量的文件系统“磁盘”，并且您可以
    | 甚至可以配置同一驱动程序的多个磁盘。 默认有
    | 已为每个驱动程序进行了设置，作为必需选项的示例。
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3", "rackspace"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
        ],

    ],

];
