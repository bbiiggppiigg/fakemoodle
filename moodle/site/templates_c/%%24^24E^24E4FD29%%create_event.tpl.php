<?php /* Smarty version 2.6.27, created on 2014-11-14 19:55:47
         compiled from create_event.tpl */ ?>
<h1>Create <?php echo $this->_tpl_vars['event_type']; ?>
</h1>
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
				<option value="assignment" <?php if ($this->_tpl_vars['event_type'] == 'assignment'): ?>selected = "selected"<?php endif; ?> >Assignment</option>
				<option value="project" <?php if ($this->_tpl_vars['event_type'] == 'project'): ?>selected = "selected"<?php endif; ?> >Project</option>
				<option value="quiz" <?php if ($this->_tpl_vars['event_type'] == 'quiz'): ?>selected = "selected"<?php endif; ?> >Quiz</option>
				<option value="exam" <?php if ($this->_tpl_vars['event_type'] == 'exam'): ?>selected = "selected"<?php endif; ?> >Exam</option>
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