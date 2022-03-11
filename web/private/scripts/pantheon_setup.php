<?php

// Enable Pantheon options
if (isset($_POST['environment'])) {

  // Get site settings
  $req = pantheon_curl('https://api.live.getpantheon.com/sites/self/settings', NULL, 8443);
  $settings = json_decode($req['body'], true);

  // Enable Redis
  if ($settings['allow_cacheserver'] != 1) {
    $req = pantheon_curl('https://api.live.getpantheon.com/sites/self/settings', '{"allow_cacheserver":true}', 8443, 'PUT');
  }
}