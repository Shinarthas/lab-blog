<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 20.12.2016
 * Time: 14:34
 */

$this->title = 'Настройка SiteMap';
?>

<table class="table">
    <thead>
    <tr>
        <th>Количество Url</th>
        <th>Дата редактирования</th>

    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?=$data['count'];?></td>
        <td><?=date('d/m/Y H:i:s',$data['date']);?></td>
    </tr>

    </tbody>
</table>

<a href="/sitemap/save-site-map" class="btn btn-info">Перегенерировать sitemap</a>

<table class="table">
    <thead>
    <tr>
        <th> Url</th>
        <th>Приоритет</th>
        <th>Частота</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($xml->url as $url) { ?>
    <tr>
        <td><?=$url->loc?></td>
        <td><?=$url->priority?></td>
        <td><?=$url->changefreq?></td>
    </tr>

    <?php } ?>

    </tbody>
</table>
