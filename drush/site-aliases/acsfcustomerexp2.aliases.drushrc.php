<?php

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site acsfcustomerexp2, environment 01live.
$aliases['01live'] = array(
  'root' => '/var/www/html/acsfcustomerexp2.01live/docroot',
  'ac-site' => 'acsfcustomerexp2',
  'ac-env' => '01live',
  'ac-realm' => 'enterprise-g1',
  'uri' => 'acsfcustomerexp201live.enterprise-g1.acquia-sites.com',
  'remote-host' => 'acsfcustomerexp201live.ssh.enterprise-g1.acquia-sites.com',
  'remote-user' => 'acsfcustomerexp2.01live',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  ),
);
$aliases['01live.livedev'] = array(
  'parent' => '@acsfcustomerexp2.01live',
  'root' => '/mnt/gfs/acsfcustomerexp2.01live/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site acsfcustomerexp2, environment 01test.
$aliases['01test'] = array(
  'root' => '/var/www/html/acsfcustomerexp2.01test/docroot',
  'ac-site' => 'acsfcustomerexp2',
  'ac-env' => '01test',
  'ac-realm' => 'enterprise-g1',
  'uri' => 'acsfcustomerexp201test.enterprise-g1.acquia-sites.com',
  'remote-host' => 'acsfcustomerexp201test.ssh.enterprise-g1.acquia-sites.com',
  'remote-user' => 'acsfcustomerexp2.01test',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  ),
);
$aliases['01test.livedev'] = array(
  'parent' => '@acsfcustomerexp2.01test',
  'root' => '/mnt/gfs/acsfcustomerexp2.01test/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site acsfcustomerexp2, environment 01testup.
$aliases['01testup'] = array(
  'root' => '/var/www/html/acsfcustomerexp2.01testup/docroot',
  'ac-site' => 'acsfcustomerexp2',
  'ac-env' => '01testup',
  'ac-realm' => 'enterprise-g1',
  'uri' => 'acsfcustomerexp201testup.enterprise-g1.acquia-sites.com',
  'remote-host' => 'acsfcustomerexp201testup.ssh.enterprise-g1.acquia-sites.com',
  'remote-user' => 'acsfcustomerexp2.01testup',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  ),
);
$aliases['01testup.livedev'] = array(
  'parent' => '@acsfcustomerexp2.01testup',
  'root' => '/mnt/gfs/acsfcustomerexp2.01testup/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site acsfcustomerexp2, environment 01update.
$aliases['01update'] = array(
  'root' => '/var/www/html/acsfcustomerexp2.01update/docroot',
  'ac-site' => 'acsfcustomerexp2',
  'ac-env' => '01update',
  'ac-realm' => 'enterprise-g1',
  'uri' => 'acsfcustomerexp201update.enterprise-g1.acquia-sites.com',
  'remote-host' => 'acsfcustomerexp201update.ssh.enterprise-g1.acquia-sites.com',
  'remote-user' => 'acsfcustomerexp2.01update',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  ),
);
$aliases['01update.livedev'] = array(
  'parent' => '@acsfcustomerexp2.01update',
  'root' => '/mnt/gfs/acsfcustomerexp2.01update/livedev/docroot',
);
