<?php $title = 'Administration du site - Modifier un billet' ?>

<?php ob_start(); ?>

<div class="row tinymce-post-row">
    <div class="col-lg-12">
        <h2><i class="fa fa-pencil-square-o"></i> Modifier le billet</h2>
        <form action="index.php?action=updatePost&amp;postId=<?= $post->getId(); ?>" method="post">
            <div class="form-group">
                <label for="title">Titre:</label>
                <input type="text" name="title" value="<?=  $post->getTitle(); ?>" maxlength="255">
            </div>
            <div class="form-group">
                <label for="content">Contenu:</label>
                <textarea id="content" name="content" class="tinymce"><?= $post->getContent(); ?></textarea>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Modifier" class="btn btn-success btn-lg">
                <a href="index.php?action=postsManager" class="btn btn-danger btn-lg">Annuler</a>
            </div>
        </form>
    </div>
</div>


<!-- tinymce editor scripts -->
<script src="../../public/js/tinymce/jquery.tinymce.min.js"></script>
<script src="../../public/js/tinymce/tinymce.min.js"></script>
<script src="../../public/js/tinymce/init-tinymce.js"></script>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
