These are custom mobile-first HTML modules I've created and made compatible with Wordpress and the advanced custom fields plugin


# Adding the modules to your Wordpress theme

1. Make sure your (active) theme has a "template-parts" folder in it's root folder or create one.
1. Place the "supercolin-modules" folder inside of the "template-parts" folder in your (active) theme
1. If you're not using ACF, each module has an example code to pull it in as a template-part that can be added to any page.php file to keep them more modular


## Installing the modules as Guttenberg blocks with ACF

1. First import the ACF field groups. Each block has a .JSON file to import it alone or the .JSON folder in root of the folder will import field groups for all blocks
1. In the supercolin-modules folder take a look at the "wp-acf__modules-base.php" and use the code there to import any (or all) of the blocks into your functions.php file