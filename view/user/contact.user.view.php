<section>
    <div class="contenu">
        <h1>{ Contact }</h1>
        <form method="post" >
            <?php
            if (isset($warning)){
                echo "<span class='warning'>".$warning."</span>";
            } else {
                echo "<span class='warning'> </span>";
            }
            ?>
            <div class="grid-container">
                <input class="name" type="text" name="name" placeholder="Your name" value="<?=$name?>">
                <input class="email" type="email" name="mail" placeholder="Your e-mail" value="<?=$mail?>">
                <input class="phone" type="tel" name="phone" placeholder="your phone number" value="<?=$phone?>">
                <textarea class="msg" name="message" placeholder="Your question, suggestion or thought"><?=$message?></textarea>
            </div>
            <img src="img/picture/owl.png" alt="small owl" title="drawing of an owl">
            <input type="submit" name="envoyer" value="Envoyer" class="btnenvoyer">

        </form>
    </div>
</section>