<h1><{$info[0].name}></h1>
<table class ="table table-striped">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Score</th>
		<th>Total</th>
	</tr>
	<form method="post" id="notworking">
	<{section loop=$students name=id}>
		<tr>
			<td><{$students[id].email}></td>
			<td><{$students[id].name}></td>
			<td>
			<input type="number" step="any" name="scores[]" required style="height:40px" value="<{$students[id].score}>"  />
			</td>
			<td><{$info[0].total}></td>
		</tr>
	<{/section}>
	</form>
</table>
<input type="submit" class="btn btn-primary" form="notworking"/>
	