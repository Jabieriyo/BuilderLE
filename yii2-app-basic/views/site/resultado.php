<?php

use yii\grid\GridView;

?>

<div class="jumboton">
    <h2><?=$titulo?></h2>
    
    <p class="lead"><?= $enunciado ?></p><!-- comment -->
    <div class="well">
        <?= $sql ?>
    </div>   
</div>
<?= GridView::widget([
    'dataProvider'=> $resultados,
    'columns'=>$campos
]);
?>