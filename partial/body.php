<header class="p-2">
    <i class="fa-brands fa-spotify text-white fa-2x"></i>
</header>

<!--struttura per i dischi-->
<div class="container">
    <div class="row pb-4">
        <?php foreach ($database as $elem) { ?>
            <div class="col-4 g-3">
                <div class="card text-white" style="width: 18rem;">
                    <img src="<?php echo $elem['poster'] ?>" class="card-img-top" alt="<?php echo $elem['title'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $elem['title'] ?></h5>
                        <p class="card-text"><?php echo $elem['genre'] ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>