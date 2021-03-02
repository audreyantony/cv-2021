<section>
    <div class="contenu">
        <!-- TITLE -->
        <h1>{ Connection }</h1>
        <!-- FORM -->
        <form method="post">
            <?php
            if (isset($help)){
                echo "<small>".$help."</small>";
            }
            ?>
            <!-- NICKNAME INPUT -->
            <div>
                <input type="text" name="loginUser" placeholder="Login">
            </div>
            <!-- PASSWORD INPUT -->
            <div>
                <input type="password" name="pwdUser" placeholder="Password">
            </div>

            <!-- SUBMIT BUTTON -->
            <button type="submit" name="signIn">Submit</button>
        </form>
    </div>
</section>