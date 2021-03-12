<section>
    <div class="contenu">
        <!-- TITLE -->
        <h1>{ Delete a project }</h1>
        <!-- PROJECT -->
        <div class="delete">
            <h3><?=$project->gettitleProjects()?></h3>
            <img src="<?=TARGET_DIR?><?=$project->getimgNameProjects()?>" alt="<?=$project->getaltImgProjects()?>" title="<?=$project->gettitleImgProjects()?>">
            <p> Description : <?=$project->getdescProjects()?> ...<br>
                Url : <a href="<?=$project->geturlProjects()?>"><?=$project->geturlProjects()?></a><br>
                Image : <?=$project->getimgNameProjects()?><br>
                Image Alt : <?=$project->getaltImgProjects()?><br>
                Image Title : <?=$project->gettitleImgProjects()?>
            </p>
            <a href="?admin=projects&update=<?=$project->getidProjects()?>"><button>Update</button></a> or
            <a href="?admin=projects&delete=<?=$project->getidProjects()?>&ok"><button>Delete this project</button></a>
        </div>
    </div>
</section>