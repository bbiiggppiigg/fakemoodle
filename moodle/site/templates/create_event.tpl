<h1>Create <{$event_type}></h1>
<form method="POST">
<table class="table table-striped">
	<tr>
		<th>Name</th>
		<td><input name="event_name" type="text" required style="width:500px;height:50px"/></td>
	</tr>
	<tr>
		<th>Due Date</th>
		<td><input name="due_date" type="datetime-local" style="width:500px;height:50px" required /></td>
	</tr>
	<tr>
		<th>Type</th>
		<td>
			<select name ="event_type">
				<option value="assignment" <{if $event_type =="assignment"}>selected = "selected"<{/if}> >Assignment</option>
				<option value="project" <{if $event_type =="project"}>selected = "selected"<{/if}> >Project</option>
				<option value="quiz" <{if $event_type =="quiz"}>selected = "selected"<{/if}> >Quiz</option>
				<option value="exam" <{if $event_type =="exam"}>selected = "selected"<{/if}> >Exam</option>
			</select>
		</td>
	</tr>
	<tr>
		<th>Description</th>
		<td>
				<textarea rol="40" col="100" style="width:500px;height:500px" name="descript" ></textarea>
		</td>
	</tr>
	<tr>
		<th>Percentage:</th><td><input type="number"  max="100" min="1" name="percentage"/></td>
	</tr>
	<tr>
		<th>Total:</th><td><input type="number" step="any" min="0" name="total"/></td>
	</tr>
</table>
<input class="btn btn-primary" type="submit"></button> 
</form>