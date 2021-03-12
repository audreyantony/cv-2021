<section>
    <div class="contenu">
        <!-- TITLE -->
        <h1>{ Update a project }</h1>
        <!-- FORM -->
        <form id="connect" method="post" enctype="multipart/form-data">
            <?php
            if (isset($help)){
                foreach ($help as $item )
                    echo "<small>".$item."</small><br>";
            }
            ?>
            <input type="text" name="id_idUser" value="<?=$_SESSION['idUser']?>" hidden>
            <!-- TITLE INPUT -->
            <div>
                <input type="text" name="titleProjects" placeholder="Title" value="<?=$project->gettitleProjects()?>">
            </div>
            <!-- DESCRIPTION INPUT -->
            <div>
                <input type="text" name="descProjects" placeholder="Description" value="<?=$project->getdescProjects()?>">
            </div>
            <!-- URL INPUT -->
            <div>
                <input type="url" name="urlProjects" placeholder="www.link.com" value="<?=$project->geturlProjects()?>">
            </div>
            <!-- FILES IMG INPUT -->
            <div>
                <label for="imgNameProject">For now, the file is : <?=$project->getimgNameProjects()?></label>
                <input type="file" name="imgNameProjects">
            </div>
            <!-- ALT IMG INPUT -->
            <div>
                <input type="text" name="altImgProjects" placeholder="Alt for image" value="<?=$project->getaltImgProjects()?>">
            </div>
            <!-- TITLE IMG INPUT -->
            <div>
                <input type="text" name="titleImgProjects" placeholder="Title for Image" value="<?=$project->gettitleImgProjects()?>">
            </div>

            <!-- SUBMIT BUTTON -->
            <button type="submit" name="update-project">Submit</button>
        </form>
    </div>
</section>