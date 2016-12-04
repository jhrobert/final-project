<?php
include "header.php";
include "top.php";
include "nav.php";


if (isset($_GET["debug"])) {
    $debug = true;
}

$filelocation = "data/";

$myFileName = "definitions";

$fileExt = ".csv";

$filename = $filelocation . $myFileName . $fileExt ;

if ($debug)
    print "\n\n<p>filename is " . $filename;

$file = fopen($filename, "r");

// the variable $file will be empty or false if the file does not open
if ($file) {
    if ($debug)
        print "<p>File Opened</p>\n";
}
// the variable $file will be empty or false if the file does not open
if ($file) {

    if ($debug)
        print "<p>Begin reading data into an array.</p>\n";

    // This reads the first row, which in our case is the column headers
    $headers[] = fgetcsv($file);

    if ($debug) {
        print "<p>Finished reading headers.</p>\n";
        print "<p>My header array<p><pre> ";
        print_r($headers);
        print "</pre></p>";
    }
    // the while (similar to a for loop) loop keeps executing until we reach 
// the end of the file at which point it stops. the resulting variable 
// $records is an array with all our data.

    while (!feof($file)) {
        $records[] = fgetcsv($file);
    }

    //closes the file
    fclose($file);

    if ($debug) {
        print "<p>Finished reading data. File closed.</p>\n";
        print "<p>My data array<p><pre> ";
        print_r($records);
        print "</pre></p>";
    }
} // ends if file was opened


if ($debug)
    print "<p>End of processing.</p>\n";

?>

<style>
    article {
        background-color: beige;
    }
</style>

<article
    <h2>Want To Expand Your Knowledge?</h2>
    <h4>Check out these PHP Tricks</h4> 
    
    
    <?php
// print table here


    print "<table>";
    print "<tr><th>Name</th><th>Definiton</th></tr>";

    foreach($records as $record){
    print "<tr>";
    
    print "<td>";
    print $record [0];
    print "</td>";
    
    print "<td class='nametext'>";
    print $record [1];
    print " ";
    print $record [2];
    print "</td>";
    
    print "</tr>";
}
    print "</table>";
    
    ?>
    
    
<?php include "footer.php"; ?>    
    
</body>
</html>