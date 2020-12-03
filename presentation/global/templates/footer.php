<?php
session_start();
include_once("../../aggregation/data_classes/user.php");
$user = unserialize($_SESSION["user"]);
//echo print_r($user);
?>

<footer>
    <section id="footer-links">
        <div id='newsletter'>
            <h2>NEWSLETTER</h2>
            <form>
                <input type="email" id='news-email' name="news-email">
                <input type='submit' class='btn btn-regular' value='subscribe'>
            </form>
        </div>
        <div id='social'>
            <h3>Social</h3>
            <a href="https://www.instagram.com/sweetbsja/" target="_blank"><img src="../global/icons/instagram-white.svg"></a>
        </div>
        <div id='acc-details'>
            <h3>My Account</h3>
            <ul>
                <li><a href=''>Personal</a></li>

                <?php
                if ($user == null) :
                ?>
                    <li><a href='login.php'>Login</a></li>
                    <li><a href='register.php'>Sign up</a></li>
                <?php endif; ?>

                <?php
                if ($user != null) :
                ?>
                    <li><a href='' onclick="logout()">Logout</a></li>
                <?php endif; ?>
            </ul>
        </div>
        <div id='shop'>
            <h3>Shop</h3>
            <ul>
                <li><a href='menu.php'>Menu</a></li>
                <li><a href='menu.php'>Order</a></li>
                <li><a href='cart.php'>My Cart</a></li>
            </ul>
        </div>
        <div id='additional-info'>
            <h3><a href='contact.php'>Contact Us</a></h3>
            <h3><a href='about.php'>About Us</a></h3>
        </div>
    </section>
    <section id="terms-copyright">
        <ul>
            <li><a href='#'>Terms</a></li>
            <li><a href='#'>Privacy Policy</a></li>
        </ul>
        <p>
            Copyright &copy 2020
        </p>
    </section>
</footer>

<script>
    async function logout() {
        await fetch("../../aggregation/accounts/logout.php", {
            method: "POST",
            body: "end session"
        }).then(_ => {
            window.location.href = "index.php";
            window.location.reload();
        }).catch(err => console.log(err));
    }
</script>