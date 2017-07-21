<?php
/**
* This file render the list of surveys
* It use the Survey model search method to build the data provider.
*
* @var $model  obj    the QuestionGroup model
*/
?>
<?php $pageSize=Yii::app()->user->getState('pageSize',Yii::app()->params['defaultPageSize']);?>
<div class="col-sm-12 list-surveys">
    <div class="pagetitle h3"><?php eT('Survey list'); ?></div>

    <!-- Survey List widget -->
    <?php $this->widget('ext.admin.survey.ListSurveysWidget.ListSurveysWidget', array(
                'pageSize' => Yii::app()->user->getState('pageSize', Yii::app()->params['defaultPageSize']),
                'model' => $model
        ));
    ?>


    <h3><?php eT('Surveys Groups:'); ?></h3>

    <div class="row">
        <div class="col-sm-12 content-right">
            <?php
            $this->widget('bootstrap.widgets.TbGridView', array(
                'dataProvider' => $groupModel->search(),
            ));
            ?>
        </div>
    </div>

</div>
