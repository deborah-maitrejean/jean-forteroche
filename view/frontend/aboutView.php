<?php $title = 'Billet simple pour l\'Alaska'; ?>
<?php ob_start(); ?>

<div class="row" id="about-view">
    <div class="col-lg-12">
        <h2>Qui suis-je ?</h2>
        <div class="row">
            <div class="col-lg-6">
                <img src="../../public/img/portrait-jean-forteroche.jpg" alt="Portrait noir et blanc de l'auteur Jean Forteroche." class="img-thumbnail img-responsive">
            </div>
            <div class="col-lg-6">
                <p>
                    <strong>Jean Forteroche</strong> est un écrivain fictif né en 1954 en banlieue parisienne.<br>
                    Issu d'un milieu urbain et populaire, Jean Forteroche cherche très tôt refuge dans la littérature.
                    Il commence à s'évader avec <i>Voyage au centre de la terre</i>, <i>De la terre à la lune</i> ou encore <i>Cinq semaines en ballon</i> de Jules Verne.
                    Il poursuit des études en littérature française et roumaine, et sort premier de sa promotion.
                </p>
                <p>
                    Il publie ensuite des poèmes sur la montagne dans la revue mensuelle <i>Fictive</i>, et remporte le premier prix du concours de nouvelles <i>Plume de talent !</i> de sa ville.<br>
                    C'est quand il découvre <i>Journal d’un voyage de Chamouni à la Cime du Mont-Blanc en juillet et aoust 1787</i> de Horace Benedict de Saussure, qu'il décide de partir à l'aventure en Alaska, afin d'écrire son premier livre.<br>
                    Ecrivain généreux et proche de ses lecteurs, Jean Forteroche a choisi de rendre son oeuvre public en la partageant ici, sur ce site, chapitre après chapitre.
                </p>
                <p>
                    Ce projet ambitieux s'achevera par la publication papier d'un livre, qui s'intitulera <strong>Billet simple pour l'Alaska</strong>.<br>
                </p>
            </div>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
