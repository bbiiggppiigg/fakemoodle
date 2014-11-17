<h1>Course Haven't been Registered</h1>
<table class = "table table-striped">
<tr>
<th>Course Number</th><th>Course Name</th><th>Instructor</th>
<th>Status</th>
</tr>

<{section name=id loop=$rs}>
<tr>
	<form method="POST">
	<td hidden>
	<input name = "id" type="number" value=<{$rs[id].id}> />
	</td>
	<td><{$rs[id].number}></td>
	<td><{$rs[id].name}></td>
	<td><{$rs[id].instructor}></td>
	<td><input type="submit"></td>
	</form>
</tr>
<{/section}>

</table>
<script>
	function register_course($cid){

	}
</script>