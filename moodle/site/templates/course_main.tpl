<h1><{$title}></h1>
<table class ="table table-striped">
	<tr>
		<th>Instructor</th>
		<td><{$instructor}></td>
	</tr>
	<tr>
		<th>Decsription</th>
		<td><{$class_info.description}></td>
	</tr>
</table>
<h1>Assignmet</h1>
<table class = "table table-striped">
<tr>
<th>id</th><th>Name</th><th>Description</th><th>Due Date</th> <{if $student}> <th>Grade Given</th><{/if}> <th>Total</th> <th>Percentage</th> <{if $teacher}><th>assign grades</th><{/if}>
</tr>
<{section name=id loop=$assignments}>
	<tr>
	<td><{$assignments[id].id}></td>
	<td><{$assignments[id].name}></td>
	<td><{$assignments[id].description}></td>
	<td><{$assignments[id].due_date}></td>
	<td><{$assignments[id].score_given}></td>
	<td><{$assignments[id].total}></td>
	<td><{$assignments[id].percentage}>%</td>
	<{if $teacher}>
	<td><button type="submit" class="btn btn-primary" onclick="window.location='assign_grades_main.php?eid=<{$assignments[id].id}>'">Assign Grades</button></td>
	<{/if}>
	</tr>
<{/section}>

</table>
<{if $teacher}>
	<button class="btn btn-primary" onclick="window.location='create_assignment.php?cid=<{$cid}>'"> Create Assignment</button>
<{/if}>
<h1>Project</h1>
<table class = "table table-striped">
<tr>
<th>id</th><th>Name</th><th>Description</th><th>Due Date</th> <{if $student}> <th>Grade Given</th><{/if}> <th>Total</th> <th>Percentage</th> <{if $teacher}><th>assign grades</th><{/if}>
</tr>
<{section name=id loop=$projects}>
	<tr>
	<td><{$projects[id].id}></td>
	<td><{$projects[id].name}></td>
	<td><{$projects[id].description}></td>
	<td><{$projects[id].due_date}></td>
	<td><{$projects[id].score_given}></td>
	<td><{$projects[id].total}></td>
	<td><{$projects[id].percentage}>%</td>
	<{if $teacher}>
	<td><button type="submit" class="btn btn-primary" onclick="window.location='assign_grades_main.php?eid=<{$projects[id].id}>'">Assign Grades</button></td>
	<{/if}>
	</tr>
<{/section}>

</table>
<{if $teacher}>
	<button class="btn btn-primary" onclick="window.location='create_project.php?cid=<{$cid}>'"> Create Project</button>
<{/if}>
<h1>Quiz</h1>
<table class = "table table-striped">
<tr>
<th>id</th><th>Name</th><th>Description</th><th>Due Date</th> <{if $student}> <th>Grade Given</th><{/if}> <th>Total</th> <th>Percentage</th> <{if $teacher}><th>assign grades</th><{/if}>
</tr>
<{section name=id loop=$quizs}>
	<tr>
	<td><{$quizs[id].id}></td>
	<td><{$quizs[id].name}></td>
	<td><{$quizs[id].description}></td>
	<td><{$quizs[id].due_date}></td>
	<td><{$quizs[id].score_given}></td>
	<td><{$quizs[id].total}></td>
	<td><{$quizs[id].percentage}>%</td>
	<{if $teacher}>
	<td><button type="submit" class="btn btn-primary" onclick="window.location='assign_grades_main.php?eid=<{$quizs[id].id}>'">Assign Grades</button></td>
	<{/if}>
	</tr>
<{/section}>

</table>
<{if $teacher}>
	<button class="btn btn-primary" onclick="window.location='create_quiz.php?cid=<{$cid}>'"> Create Quiz</button>
<{/if}>
<h1>Exam</h1>
<table class = "table table-striped">
<tr>
<th>id</th><th>Name</th><th>Description</th><th>Due Date</th> <{if $student}> <th>Grade Given</th><{/if}> <th>Total</th> <th>Percentage</th> <{if $teacher}><th>assign grades</th><{/if}>
</tr>
<{section name=id loop=$exams}>
	<tr>
	<td><{$exams[id].id}></td>
	<td><{$exams[id].name}></td>
	<td><{$exams[id].description}></td>
	<td><{$exams[id].due_date}></td>
	<td><{$exams[id].score_given}></td>
	<td><{$exams[id].total}></td>
	<td><{$exams[id].percentage}>%</td>
	
	<{if $teacher}>
	<td><button type="submit" class="btn btn-primary" onclick="window.location='assign_grades_main.php?eid=<{$exams[id].id}>'">Assign Grades</button></td>
	<{/if}>
	</tr>
<{/section}>

</table>
<{if $teacher}>
	<button class="btn btn-primary" onclick="window.location='create_exam.php?cid=<{$cid}>'"> Create Exam</button>
<{/if}>