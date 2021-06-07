<?php
use yii\helpers\Html;
?>
<p>Terima kasih sudah menginputkan data pada form :</p>
<ul>
    <li>
        <label >Name</label>: <?=Html::encode($model->name) ?>
    </li>

    <li>
        <label >Email</label>: <?=Html::encode($model->email) ?>
    </li>
</ul>