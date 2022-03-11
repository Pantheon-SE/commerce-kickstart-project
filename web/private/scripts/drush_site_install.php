<?php

// Get Pantheon site metadata
$req = pantheon_curl('https://api.live.getpantheon.com/sites/self/attributes', NULL, 8443);
$meta = json_decode($req['body'], true);
$title = $meta['label'];
$email = $_POST['user_email'];

// Install from profile.
echo "Installing Commerce Kickstart profile...\n";
passthru('drush site:install commerce_kickstart --account-mail="' . $email . '" --site-name="' . $title . '" --account-name="superuser" -y && drush en commerce_kickstart_basic_catalog -y');
