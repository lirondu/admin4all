<?
if (isset($_GET['preview']) && $_GET['preview'] === 'true') {
	?>
	<a id="preview_btn" class="btn btn-default" preview-on="true">Exit Preview</a>
	<?
} else {
	?>
	<a id="preview_btn" class="btn btn-default" preview-on="false">Preview</a>
	<?
}
?>

<script src="/admin4all/core/js/preview.js"></script>