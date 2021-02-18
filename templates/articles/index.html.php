
<h1>Nos articles</h1>
<div class="row">
    <?php foreach ($articles as $article) : ?>
        <div class="col-md-4">
            <div class="card mt-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $article['title'] ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Ecrit le <?= $article['created_at'] ?></h6>
                    <p class="card-text"><?= $article['introduction'] ?></p>
                    <a href="index.php?controller=article&task=show&id=<?= $article['id'] ?>" class="card-link">Lire la suit</a>
                    <a href="index.php?controller=article&task=delete&id=<?= $article['id'] ?>" onclick="return window.confirm(`Êtes vous sur de vouloir supprimer cet article ?!`)"class="card-link">Supprimer</a>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>