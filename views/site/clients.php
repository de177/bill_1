
<h1><?php echo $cl_var1InView; ?></h1>


<div>

    <?php foreach ($arrayInView as $item): ?>
        <p>
            <a href ="/site/view/<?= $item ->id?>"><?php echo $item -> name ?></a>
        </p>


    <?php endforeach; ?>






</div>