<div class="row chap">    
    <div class="row">
        <div class="intro">
            <p>Bienvenue sur le site de mon nouveau livre : Billet simple pour l'Alaska.<br />Je publierai ici régulièrement des chapitres du livre et du contenu autour de l'Alaska et de l'écriture.<br /></p><p><small class="signature">Jean Forteroche</small></p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-9">
            <h2>Derniers chapitres</h2>
            <p>    
                <?php 
                foreach ($param1 as $chap) { ?>
                    <a href="post/<?= htmlspecialchars($chap->getId()); ?>">
                        <div class="posts col-lg-4" style="min-height:300px; text-align:justify;">
                            <h3>
                                <?= htmlspecialchars($chap->getTitle()); ?>
                            </h3>
                            <?= mb_strimwidth($chap->getContent(), 0, 410, "…"); ?>
                        </div>
                    </a>
                <?php } ?>
            </p>
        </div>
        
        <div class="col-lg-3 lasts">
            <h2>Derniers commentaires</h2>
            <div class="comms">
                <?php
                foreach ($param2 as $comm) { ?>
                    <div class="comm">
                        <h4>
                            <?= htmlspecialchars($comm->getAuthor()); ?>
                        </h4>
                        <a href="<?= HOST; ?>post/<?= htmlspecialchars($comm->getPostId()); ?>"><?= mb_strimwidth($comm->getComment(), 0, 100); ?>…</a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>