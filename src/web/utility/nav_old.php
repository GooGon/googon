<nav class="navbar">  
    <!-- LOGO -->
    <div class="logo">GooGon</div>
    <!-- NAVIGATION MENU -->
    <ul class="nav-links" style="margin-bottom: 0rem;">
        <input type="checkbox" id="checkbox_toggle" />
        <label for="checkbox_toggle" class="hamburger">&#9776;</label>

        <!-- NAVIGATION MENUS -->
        <div class="menu">
            <li><a href='<?php echo constant("URL"); ?>src/blog.php'>Blog</a></li>
            <li><a href='<?php echo constant("URL"); ?>src/portofolio.php'>Portofolio</a> </li>
            <li><a href='<?php echo constant("URL"); ?>src/curiculum_vitae.php'>Curiculum Vitae</a> </li>
            <li><a href='<?php echo constant("URL"); ?>src/contact_me.php'>Contact Me</a></li>
            <button><a href='<?php echo constant("URL"); ?>src/sign_in.php'>Login</a></button>
        </div>
    </ul>
</nav>