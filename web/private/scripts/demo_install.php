<?php

// Install Commerce Demo content and Redis
echo "Installing Commerce Demo...\n";
shell_exec('drush en commerce_demo redis -y &');