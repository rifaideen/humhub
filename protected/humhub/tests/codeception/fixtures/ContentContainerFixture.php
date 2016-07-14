<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2015 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace tests\codeception\fixtures;

use yii\test\ActiveFixture;

class ContentContainerFixture extends ActiveFixture
{
    public $modelClass = 'humhub\modules\content\models\ContentContainer';
    public $dataFile = '@modules/content/tests/codeception/_data/contentcontainer.php';
    
    public $depends = [
        'tests\codeception\fixtures\ContentContainerPermissionFixture'
    ];

}