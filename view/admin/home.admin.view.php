<section>
    <div class="contenu">
        <h1>{ Hello <?=$_SESSION['loginUser']?> }</h1>
        <div class="links">
            <h3>Wanna go check the user pages ?</h3>
            <a href="?page=home"><button>Home</button></a>
            <a href="?page=about"><button>About / CV</button></a>
            <a href="?page=projects"><button>Projects</button></a>
            <a href="?page=contact"><button>Contact</button></a>
        </div>

        <div class="projects">
            <h3>Wanna manage the projects ?</h3>
            <div class="projectDisplay">
                <a href="?admin=projects&create=new"><button>Create <br>a new <br>project</button></a>
            </div>
            <?php
            if(isset($help)) :
                ?>
                <small><?=$help?></small>
            <?php
            else:
                foreach ($allProjects AS $i):
                    ?>
                <div class="projectDisplay">
                    <h4><?=$i->gettitleProjects()?></h4>
                    <img src="<?=TARGET_DIR?><?=$i->getimgNameProjects()?>" alt="<?=$i->getaltImgProjects()?>" title="<?=$i->gettitleImgProjects()?>">
                    <p><?=$i->getdescProjects()?> ...</p>
                    <a href="<?=$i->geturlProjects()?>"><?=$i->geturlProjects()?></a>
                    <h5>Par <?=$i->getloginUser()?></h5>
                    <a href="?admin=projects&update=<?=$i->getidProjects()?>"><button>Update</button></a>
                    <a href="?admin=projects&delete=<?=$i->getidProjects()?>"><button>Delete</button></a>
                </div>
                <?php
                endforeach;
            endif;
            ?>
            <div class="theEnd">
                <p>The end</p>
            </div>
        </div>
    </div>
</section>