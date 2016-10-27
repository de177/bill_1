<h1>Детальная информация о клиенте</h1>

<h3><?= $one -> org_form ?>&nbsp<?= $one -> name ?></h3>

<p>
    <?= $one -> email ?>
</p>


<h1><?php echo $cl_var1InView; ?></h1>


<div>

    <?php foreach ($arrayInView as $item): ?>
        <p>
            <a href ="/site/clients_detail/<?= $item ->id?>"><?php echo $item -> name ?></a>
        </p>


    <?php endforeach; ?>


</div>
