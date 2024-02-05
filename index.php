<?php
// Function to display files in the website root folder as a link tree of links
function listFolderFiles($dir, $rootLength)
{
    $files = scandir($dir);

    foreach ($files as $file) {
        // Skip files or folders starting with a dot
        if ($file[0] == '.') {
            continue;
        }

        // Create a relative path
        $relativePath = substr($dir . '/' . $file, $rootLength);

        echo '<li><a href="' . htmlspecialchars($relativePath) . '">' . $file . '</a>';

        if (is_dir($dir . '/' . $file)) {
            echo '<ul>';
            listFolderFiles($dir . '/' . $file, $rootLength);
            echo '</ul>';
        }

        echo '</li>';
    }
}

// Set rootFolder to the directory of the current script
$rootFolder = __DIR__;

// Length of the root folder path to subtract for relative paths
$rootLength = strlen($rootFolder);

echo '<ul>';
listFolderFiles($rootFolder, $rootLength);
echo '</ul>';
?>
