
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Final Project - A Study Guide</title>
        
        <meta charset="utf-8">
        <meta name="author" content="Jack Robert">
        <meta name="description" content="html and php and studying" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="css/final.css" type="text/css" media="screen">

        
    </head>
    <body id="body">
    
        <?php include "header.php";
        include "nav.php";
        

        $debug = false;

        if (isset($_GET["debug"])) {
            $debug = true;
        }

        $domain = "//";
        
        $server = htmlentities($_SERVER['SERVER_NAME'], ENT_QUOTES, "UTF-8");
        
        $domain .= $server;
        
        $phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");
        
        $path_parts = pathinfo($phpSelf);

        if ($debug) {
            print "<p>php Self: " . $phpSelf;
            print "<p>Path Parts<pre>";
            print_r($path_parts);
            print"</pre></p>";
        }

        print "<!-- include libraries -->";
        require_once('lib/security.php');
        
        if ($path_parts['filename'] == "form") {
            print "<!-- include form libraries -->";
            include "lib/validation-functions.php";
            include "lib/mail-message.php";
        }
        
        print "<!-- finished including libraries -->";
       
        ?>

