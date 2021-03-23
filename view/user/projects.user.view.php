<section id="projects">
    <div class="contenu">
        <!-- TITLE -->
        <h1>{ Projects }</h1>
        <!-- Flex Box -->
        <div class="projectsContainer">
            <?php
            if(isset($help)) :
                ?>
                <small><?=$help?></small>
            <?php
            else:
                foreach ($project AS $i):
                    ?>
                    <div class="projectsFlex">
                        <h4><?=$i->gettitleProjects()?></h4>
                        <img src="<?=TARGET_DIR?><?=$i->getimgNameProjects()?>" alt="<?=$i->getaltImgProjects()?>" title="<?=$i->gettitleImgProjects()?>">
                        <p><?=$i->getdescProjects()?><br><a href="<?=$i->geturlProjects()?>" target="_blank">Let's see it !</a></p>
                    </div>
                <?php
                endforeach;
            endif;
            ?>
        </div>
    </div>
</section>