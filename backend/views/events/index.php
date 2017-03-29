<?php
use yii\helpers\Html;
?>
<h1>Events</h1>
<ul>
<?php foreach ($events as $country): ?>
    <li>
        <?= Html::encode("{$country->id_event} {$country->event_name}") ?>:
        <?= $country->event_date ?>
    </li>
<?php endforeach; ?>
</ul>