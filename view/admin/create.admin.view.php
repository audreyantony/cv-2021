<section>
    <div class="contenu">
        <!-- TITLE -->
        <h1>{ Create a project }</h1>
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
                <input type="text" name="titleProjects" placeholder="Title">
            </div>
            <!-- DESCRIPTION INPUT -->
            <div>
                <input type="text" name="descProjects" placeholder="Description">
            </div>
            <!-- URL INPUT -->
            <div>
                <input type="url" name="urlProjects" placeholder="www.link.com">
            </div>
            <!-- FILES IMG INPUT -->
            <div>
                <input type="file" name="imgNameProjects">
            </div>
            <!-- ALT IMG INPUT -->
            <div>
                <input type="text" name="altImgProjects" placeholder="Alt for image">
            </div>
            <!-- TITLE IMG INPUT -->
            <div>
                <input type="text" name="titleImgProjects" placeholder="Title for Image">
            </div>

            <!-- SUBMIT BUTTON -->
            <button type="submit" name="create-project">Submit</button>
        </form>
    </div>
</section>