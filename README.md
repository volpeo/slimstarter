# Slimstarter

A simple starter for php slim framework.

## Dependencies
Install dependencies via composer
  
    composer install
    
## Organisation

Router + controllers are in index.php, you can decouple it and organize it better.

Models are in models folder, you must require them in index.php.

Views are un views folder, there are folders for each concerns. Views templates are required in each controller, you can use a template system like twig.

## Layout

Using slim-layout-view for layout (reuse header and footer).

https://github.com/petebrowne/slim-layout-view

## Named routes

After each route block, there's a method "name". You can call thoses routes with urlFor (I pass the $app variable to the view with a hook). 