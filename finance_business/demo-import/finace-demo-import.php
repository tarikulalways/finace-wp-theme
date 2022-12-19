<?php 

function finace_data_import() {
	return array(
		array(
			'import_file_name'             => __('Finace demo data import', 'finace'),
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'export/finace-export-all.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'export/finace-widget-all.wie'
		)
	);
}
add_filter( 'ocdi/import_files', 'finace_data_import' );
?>