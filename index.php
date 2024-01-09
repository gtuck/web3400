<?php

function listFolderFiles($dir){
    $files = scandir($dir);

    foreach($files as $file){
        if ($file != '.' && $file != '..'){
            echo '<li><a href="' . htmlspecialchars($dir . '/' . $file) . '">' . $file . '</a>';

            if (is_dir($dir . '/' . $file)) {
                echo '<ul>';
                listFolderFiles($dir . '/' . $file);
                echo '</ul>';
            }

            echo '</li>';
        }
    }
}

$rootFolder = '/'; // Replace with the path to your root folder

echo '<ul>';
listFolderFiles($rootFolder);
echo '</ul>';

?>