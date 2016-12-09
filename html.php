<?php
include "top.php";
?>



<?php
//ok so we need to display whatever element the user wanted
$elementChoice = htmlentities($_GET['elm'], ENT_QUOTES, "UTF-8");
if ($elementChoice == "paragraph") {
    print "<p>This is an example paragraph. There are many like it, but this one is mine.</p>";
}
elseif ($elementChoice == "head1"){
    print "<h1>THIS IS A HEADER</h1>";
}
elseif ($elementChoice == "head2") {
    print "<h2>THIS IS A SLIGHTLY SMALLER HEADER</h2>";
}
elseif ($elementChoice == "head3") {
    print "<h3>THIS IS AN EVEN SLIGHTLY SMALLER HEADER</h3>";
}
elseif ($elementChoice == "figure") {
    print "<figure class='smallFig'>\n";
    print "\t<img src='meandjack.jpg' alt=''>\n";
    print "\t<figcaption>Jack and I working on our project</figcaption>\n";
    print "</figure>";
}
elseif ($elementChoice == "article") {
    print "<article class='right'>\n";
    print "<p>Haha articles essentially just contain paragraphs, but typically have their own classes to differentiate them.</p>\n";
    print "</article>";
}
elseif ($elementChoice == "aside") {
    print "<aside class='right'>\n";
    print "<p>Haha asides essentially just contain paragraphs, but typically have their own classes to differentiate them.</p>\n";
    print "</aside>";
}
elseif ($elementChoice == "header") {
    print "<header>This is a header. Don't get a concussion!</header>";
}
elseif ($elementChoice == "footer") {
    print "<footer>This is a footer. I don't have any puns for it unlike header, sorry.</footer>";
}
print "<p class='gray'>I need to put in some placeholder paragraphs here, otherwise the headers and footers really don't make any sense.</p>";
print "<h4 class='gray'>if you're bored, look up <em>important vidoes</em> on youtube</h4>";
print "<p class='gray'>Batman is probably the best superhero, but I don't really put a lot of thought into it.</p>";
print "<h4 class='gray'>Metaethical response theory should not be considered objective, however it does constitute realism</h4>";
if ($elementChoice == "footer") {
    print "<footer>This is a footer. I don't have any puns for it unlike header, sorry.</footer>";
}
?>

<?php
$element = "paragraph";
?>


<form action = "<?php print $phpSelf; ?>" method = "get" id = "frmHTML">
    <fieldset class = "listbox <?php if ($htmlERROR) print ' mistake' ?>">
        <label for = "lstHTML">HTML Element to display?</label>
        <select id = "lstHTML"
                name = "lstHTML"
                tabindex = "120">
            <option <?php if ($element == "paragraph") print " selected "; ?>
                value="paragraph">&#60;p&#62;</option>

            <option <?php if ($element == "head1") print " selected "; ?>
                value="head1">&#60;h1&#62;</option>

            <option <?php if ($element == "head2") print " selected "; ?>
                value="head2">&#60;h2&#62;</option>
            
            <option <?php if ($element == "head3") print " selected "; ?>
                value="head3">&#60;h3&#62;</option>
            
            <option <?php if ($element == "figure") print " selected "; ?>
                value="figure">&#60;figure&#62;</option>
            
            <option <?php if ($element == "aside") print " selected "; ?>
                value="aside">&#60;aside&#62;</option>
            
            <option <?php if ($element == "article") print " selected "; ?>
                value="article">&#60;article&#62;</option>
            
            <option <?php if ($element == "header") print " selected "; ?>
                value="header">&#60;header&#62;</option>
            
            <option <?php if ($element == "footer") print " selected "; ?>
                value="footer">&#60;footer&#62;</option>
        </select>
    </fieldset>
    <fieldset class="buttons">
            <legend></legend>
            <input type="submit" id="btnSubmit" name="btn" value="submit" tabindex="900" class="button" >
        </fieldset>

</form>


<?php 
$submitted = htmlentities($_GET["btn"], ENT_QUOTES, "UTF-8");
$element = htmlentities($_GET["lstHTML"], ENT_QUOTES, "UTF-8");
if ($submitted == "submit"){
    print "<a href='html.php?elm=". $element . "'>Check it out!</a>";
}
?>

<?php include "footer.php"; ?> 
</body>
</html>


