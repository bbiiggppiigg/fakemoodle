<form method="POST" name = "register_as_student">
	<table class="table table-striped">
		<tr>
			<th>Email</th>
			<td><input type="email" name="email" required></input></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><input type="password" name="password" required></input></td>
		</tr>
		<tr>
			<th>Name</th>
			<td><input type="text" name="name" required></input></td>
		</tr>
		

	</table>
	<button type="submit" class="button btn-primary">Register As Student</button>
</form>
<table class = "table table-striped">
<tr>
	<th>Name</th>
	<th>Email</th>
</tr>

<{section name=students loop =$rs}>
	<tr>
		<td><{$rs[students].name}></td>
		<td><{$rs[students].email}></td>
	</tr>
<{/section}>
</table>