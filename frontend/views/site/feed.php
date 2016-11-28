<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">
        <h1>Feed de Noticias via Rest API</h1>
        
        <?php foreach($data as $row): ?>
        <p>ID:<?=$row['id']?></p>
        <p>TITULO:<?=$row['title']?></p>
        <p>ESTADO:<?=$row['publicar']?></p>
        <?php endforeach; ?>
    </div>
  </div>