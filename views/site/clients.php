
<h1><?php echo $cl_var1InView; ?></h1>


<div>

    <ul>

        <?php foreach ($arrayInView as $item): ?>
        <li><?php echo $item -> name ?> </li>
        <?php endforeach; ?>

    </ul>




</div>