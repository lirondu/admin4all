<?
if (!Session::Validate()) {
	return ;
}

?>

<!-- Load jquery if not defined -->
<script>
	if (typeof jQuery === 'undefined') {
		document.write('<script src="https://code.jquery.com/jquery-1.12.3.min.js"><\/script>');
	}
</script>

<!-- jquery UI CSS -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

<!-- bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- jquery UI JS -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

<!-- bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<?
// load preview button and logic
require_once 'admin4all/core/php/preview.php';

// if preview mode don't load admin components
if (isset($_GET['preview']) && $_GET['preview'] === 'true') {
	return;
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/admin4all/params/parameters.php';
require_once 'admin4all/core/php/cms-inline-elements.php';
require_once 'admin4all/core/php/cms-dynamic-elements.php';
require_once 'admin4all/site-specific/site-specific.php';
?>


<link rel="stylesheet" href="/admin4all/externals/elFinder-2.1.6/css/elfinder.min.css">
<link rel="stylesheet" href="/admin4all/core/css/bootstrap-override.css">
<link rel="stylesheet" href="/admin4all/core/css/inline-content.css">
<link rel="stylesheet" href="/admin4all/core/css/thumb-maker.css">
<link rel="stylesheet" href="/admin4all/core/css/grid-manager.css">
<link rel="stylesheet" href="/admin4all/core/css/gallery-manager.css">
<link rel="stylesheet" href="/admin4all/site-specific/site-specific.css">

<script src="http://cdn.ckeditor.com/4.5.9/full/ckeditor.js"></script>
<script src="/admin4all/externals/elFinder-2.1.6/js/elfinder.min.js"></script>

<script src="/admin4all/params/parameters.js"></script>
<script src="/admin4all/core/js/config.js"></script>
<script src="/admin4all/core/js/common.js"></script>
<script src="/admin4all/core/js/dynamic-elements.js"></script>
<script src="/admin4all/core/js/inline-content-submit.js"></script>
<script src="/admin4all/core/js/thumb-maker.js"></script>
<script src="/admin4all/core/js/grid-manager.js"></script>
<script src="/admin4all/core/js/gallery-manager.js"></script>
<script src="/admin4all/core/js/gallery-inline.js"></script>
<script src="/admin4all/core/js/inline-content-init.js"></script>
<script src="/admin4all/site-specific/site-specific.js"></script>
