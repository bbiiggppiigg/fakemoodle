<div><strong>My Courses</strong>
<table class ="table table-striped">
	<tr>
		<th>Course Number</th>
		<th>Course Name</th>
		<th>Number of Students Invovled</th>
	</tr>
	<{section name=id loop=$rs}>
	<tr>
		<td><{$rs[id].number}></td>
		<td><a href="course_main.php?cid=<{$rs[id].id}>"><{$rs[id].name}></a></td>
		<td><{$rs[id].num}></td>
	</tr>
	<{/section}>
</table>
<button > <a href = "create_course.php">Add A course</a></button>
</div>