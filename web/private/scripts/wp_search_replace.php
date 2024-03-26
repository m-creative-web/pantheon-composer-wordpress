<?php
echo "Replacing previous environment urls with new environment urls... \n";

if ( ! empty( $_ENV['PANTHEON_ENVIRONMENT'] ) ) {
	switch( $_ENV['PANTHEON_ENVIRONMENT'] ) {
		case 'test':
			passthru('wp search-replace "wordpress-site.umich.edu" "test-wordpress-site.pantheonsite.io" --all-tables ');
			break;
		case 'dev':
			passthru('wp search-replace "wordpress-site.umich.edu" "dev-wordpress-site.pantheonsite.io" --all-tables ');
			break;
		case 'develop':
			passthru('wp search-replace "wordpress-site.umich.edu" "develop-wordpress-site.pantheonsite.io" --all-tables ');
			break;
	}
}
?>