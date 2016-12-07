<nav>
    <ol>
        <?php
        print '<li class="';
        if ($path_parts['filename'] == "index") {
            print ' activePage ';
        }
        print '">';
        print '<a href="index.php">Home</a>';
        print '</li>';

        print '<li class="';
        if ($path_parts['filename'] == "html") {
            print ' activePage ';
        }

        print '">';
        print '<a href="html.php">HTML Page</a>';
        print '</li>';


        print '<li class="';
        if ($path_parts['filename'] == "css") {
            print ' activePage ';
        }
        print '">';
        print '<a href="css.php">CSS Page</a>';
        print '</li>';


        print '<li class="';
        if ($path_parts['filename'] == "php") {
            print ' activePage ';
        }

        print '">';
        print '<a href="php.php">PHP Facts</a>';
        print '</li>';

        print '<li class="';
        if ($path_parts['filename'] == "form") {
            print ' activePage ';
        }

        print '">';
        print '<a href="form.php">Sign Up</a>';
        print '</li>';

        print '<li class="';
        if ($path_parts['filename'] == "contact") {
            print ' activePage ';
        }

        print '">';
        print '<a href="contact.php">Contact Us</a>';
        print '</li>';
        ?>
    </ol>
</nav>