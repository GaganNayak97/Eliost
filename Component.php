<?php
/**
 * Component function
 * Dot notation के आधार पर component file include करता है.
 *
 * @param string $componentName जैसे 'File.name'
 */
function Component($componentName) {
    // Dot notation को directory structure में बदलें.
    // उदाहरण: 'File.name' -> 'File/name'
    $filePath = str_replace('.', DIRECTORY_SEPARATOR, $componentName);
    
    // Component file का path. ध्यान दें कि आप "components" फ़ोल्डर का path अपनी project structure के अनुसार बदल सकते हैं.
    $componentFile = __DIR__ . "/Component/" . $filePath . ".php";
    
    // यदि component file मौजूद है, तो उसे include करें.
    if (file_exists($componentFile)) {
        include $componentFile;
    } else {
        // Error message दिखाएं अगर file न मिले.
        echo "Component file not found: " . $componentFile;
    }
}
?>
 <?php require_once 'Function.php';?>