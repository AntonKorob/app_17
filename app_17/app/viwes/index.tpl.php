<?php require VIWES . '/incs/header.php'?>

<main class="main py-3 ">
    <div class="container">
        <div class="row  ">
            <div class="col-md-8 bg-info">
                <?php foreach($posts as $post): ?>

                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><a href="post/<?= $post['slug']?>"><?= $post['title']?></a>
                        </h5>
                        <p class="card-text"><?= $post['desc']?></p>
                        <a href="post/<?= $post['slug']?>">Go somewhere</a>
                    </div>
                </div>

                <?php endforeach;?>

                <div class="card mb-3">

                </div>
            </div>
            <?php require VIWES . '/incs/sidebar.php'?>
        </div>
    </div>
</main>
<?php require VIWES . '/incs/footer.php'?>

</body>

</div>

</html>