<div class="hero">
    <div class="hero-contant">
        <h1 class="hero-header">Confirm Web Presence</h1>
        <p class="paragraph-white">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeius mod tempor incididunt ut labore et dolore magna.
        </p>
        <div class="hero-search">
            <?php
            if (isset($_POST['submit'])) {
                $serach = $_POST['search'];
                header("Location:https://www.namecheap.com/domains/registration/results/?domain=$serach");
            }
            ?>
            <form action="" method="post">
                <input type="text" class="input" name="search" required placeholder="Search you domain .. .com">
                <input type="submit" value="Serach" name="submit" formtarget="_blank">
            </form>
        </div>
        <p>
            Domainpixel is offering fully automated domain purchases including free whois protection, email hosting and advanced DNS management.
        </p>
    </div>
</div>