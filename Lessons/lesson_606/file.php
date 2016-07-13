<?php
    /**
     * Created by PhpStorm.
     * User: CMYKpixels
     * Date: 29/06/2016
     * Time: 12:17
     */
    /*
     * r = read file
     * w = xrite file
     */

    $fh = fopen("testfile.txt", "w") or die ("failed to create file");
    $text
        = <<<_WRITE
    Line 1
    Line 2
    Line 3
_WRITE;
    fwrite($fh, $text) or die ("Could not write in file");
    fclose($fh);
    echo "File 'testfile.txt' written succesfully";

    $fh = fopen("testfile.txt", "r") or die ("failed to create file");
//filesize donne la taille du fichier
//donc la longueur de lecture.
    $text = ftread($fh, filesize($fh));

    fclose($fh);

    echo "$text";

    if (rename('testfile.txt', 'testfile3.new'))
        echo "could not rename file";
    else echo "File successfully renamed ! to ['testfile3.new']";

////////////////////////////////////////////////////////////
///////////////MANQUE UNE PARTIE DU COURS//////////////////
////////////////////////////////////////////////////////////

    $cmd = "dir /s"; //windows
//  $cmd = "ls"; //Linux, Unix, Mac
    exec(escapeshellcmd($cmd), $output, $status);
    //Si 0 alors tout est OK
    if ($status) {
        echo "Exec Command Failed";
    } else {
        echo "<pre>";
        foreach ($output as $line) echo htmlspecialchars("$line\n");
        echo "</pre>";
    }
