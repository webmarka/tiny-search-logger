<?php
global $wpdb;

$table_queries_log = $wpdb->prefix . "search_log";

$sql = "CREATE TABLE $table_queries_log (
  id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  query_term text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  timestamp timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  results INT UNSIGNED NOT NULL,
  PRIMARY KEY  (id)
);";

require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
dbDelta( $sql );
