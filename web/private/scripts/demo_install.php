<?php

// Install Commerce Demo content and Redis
echo "Installing Commerce Demo...\n";
passthru('drush en commerce_demo redis -y');