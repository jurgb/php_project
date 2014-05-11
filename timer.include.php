<script type="text/javascript">
document.write ('<p id="date-time">', new Date().toLocaleString(), '<\/p>')
if (document.getElementById) onload = function () {
	setInterval ("document.getElementById ('date-time').firstChild.data = new Date().toLocaleString()", 80)
}
</script>