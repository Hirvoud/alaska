    <div class="row">
        <div class="col-lg-9">
            <h2>Derniers chapitres</h2>
            <p>
                <?php
                foreach ($param1 as $chap) { ?>
                    <div class="posts col-lg-4" style="min-height:325px; text-align:justify;">
                        <h3>
                            <a href="index.php?a=aff&p=<?=htmlspecialchars($chap->getId());?>"><?= htmlspecialchars($chap->getTitle()); ?></a>
                        </h3>
                        <?= mb_strimwidth($chap->getContent(), 0, 400, "…", "UTF-8");?>
                    </div>
                <?php } ?>
            </p>
        </div>

        <div class="col-lg-3">
            <h2>Derniers commentaires</h2>
            <div class="comms">
                <?php
                foreach ($param2 as $comm) { ?>
                    <div class="comm">
                        <h4>
                            <?= htmlspecialchars($comm->getAuthor()); ?>
                        </h4>
                        <a href="index.php?a=aff&p=<?= htmlspecialchars($comm->getPostId()); ?>"><?= mb_strimwidth($comm->getComment(), 0, 100); ?>…</a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>