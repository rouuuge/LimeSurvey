<?php
/**
 *  LimeSurvey
 * Copyright (C) 2007-2011 The LimeSurvey Project Team / Carsten Schmitz
 * All rights reserved.
 * License: GNU/GPL License v2 or later, see LICENSE.php
 * LimeSurvey is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

namespace ls\tests\controllers;

use ls\tests\TestBaseClassView;

/**
 * Class AdminViewsTest
 * This test loops through all basic admin view pages and cheks if they open withour errors
 *
 * @package ls\tests
 */
class AdminViewsTest extends TestBaseClassView
{

    public function addDataProvider(){
        return require __DIR__."/../data/views/adminViews.php";

    }

    /**
     * @dataProvider addDataProvider
     */
    public function testAdminViews($name,$view){
        if($name=='login'){
            // skip login
            $this->assertTrue(true);
            return;
        }
        $this->findViewTag($name,$view);
    }

}