echo 'clean up'
rm -Rf public/wp-core/wp-content/plugins
rm -Rf public/wp-core/wp-content/themes

echo 'restore wp-config.php'
cp src/config/wp-config.php public/wp-core/wp-config.php