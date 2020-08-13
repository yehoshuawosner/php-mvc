
<?php require 'views/header.php'; ?>
    
    <div id="main">
        <h1 class="center">CONTACT</h1>

        <div class="center"><?php echo $this->message;?></div>

        <form class="center" action="<?php echo URL; ?>contact/registerContact" method="post">

            <p>
                <label for="fullname">fullname</label><br>
                <input type="text" name="fullname">
            </p>

            <p>
                <label for="email">email</label><br>
                <input type="text" name="email">
            </p>

            <p>
                <label for="mobile">mobile</label><br>
                <input type="text" name="mobile">
            </p>

            <p>
                <!-- <input type="submit" value="Contact"> -->
                <button type="submit">Contact</button>
            </p>

        </form>

    </div>
    
<?php require 'views/footer.php'; ?>