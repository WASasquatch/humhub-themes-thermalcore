<?php 

if (Yii::app()->getController()->id == 'dashboard') {
    $placeholder = Yii::t("PostModule.widgets_views_postForm", "Post to your profile");
} else {
    $placeholder = Yii::t("PostModule.widgets_views_postForm", "Whats on your mind?");
}

echo CHtml::textArea("message", '', array('id'=>'contentForm_message', 'class' => 'form-control autosize contentForm', 'rows' => '1', 'placeholder' => $placeholder)); ?>