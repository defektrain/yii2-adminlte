<?php
/**
 * @copyright Copyright (c) 2015 Yiister
 * @license https://github.com/yiister/yii2-adminlte/blob/master/LICENSE
 * @link http://adminlte.yiister.ru
 */

namespace yiister\adminlte\widgets\grid;

class GridViewAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/bower_components/datatables.net-bs';
    public $css = [
        'css/dataTables.bootstrap.css',
    ];
    public $js = [];
    public $depends = [
        'yiister\adminlte\assets\Asset',
    ];
}
