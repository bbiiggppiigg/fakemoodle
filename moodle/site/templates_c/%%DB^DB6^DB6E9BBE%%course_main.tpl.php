<?php /* Smarty version 2.6.27, created on 2014-11-17 00:48:31
         compiled from course_main.tpl */ ?>
<h1><?php echo $this->_tpl_vars['title']; ?>
</h1>
<table class ="table table-striped">
	<tr>
		<th>Instructor</th>
		<td><?php echo $this->_tpl_vars['instructor']; ?>
</td>
	</tr>
	<tr>
		<th>Decsription</th>
		<td><?php echo $this->_tpl_vars['class_info']['description']; ?>
</td>
	</tr>
</table>
<h1>Assignmet</h1>
<table class = "table table-striped">
<tr>
<th>id</th><th>Name</th><th>Description</th><th>Due Date</th> <?php if ($this->_tpl_vars['student']): ?> <th>Grade Given</th><?php endif; ?> <th>Total</th> <th>Percentage</th> <?php if ($this->_tpl_vars['teacher']): ?><th>assign grades</th><?php endif; ?>
</tr>
<?php unset($this->_sections['id']);
$this->_sections['id']['name'] = 'id';
$this->_sections['id']['loop'] = is_array($_loop=$this->_tpl_vars['assignments']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['id']['show'] = true;
$this->_sections['id']['max'] = $this->_sections['id']['loop'];
$this->_sections['id']['step'] = 1;
$this->_sections['id']['start'] = $this->_sections['id']['step'] > 0 ? 0 : $this->_sections['id']['loop']-1;
if ($this->_sections['id']['show']) {
    $this->_sections['id']['total'] = $this->_sections['id']['loop'];
    if ($this->_sections['id']['total'] == 0)
        $this->_sections['id']['show'] = false;
} else
    $this->_sections['id']['total'] = 0;
if ($this->_sections['id']['show']):

            for ($this->_sections['id']['index'] = $this->_sections['id']['start'], $this->_sections['id']['iteration'] = 1;
                 $this->_sections['id']['iteration'] <= $this->_sections['id']['total'];
                 $this->_sections['id']['index'] += $this->_sections['id']['step'], $this->_sections['id']['iteration']++):
$this->_sections['id']['rownum'] = $this->_sections['id']['iteration'];
$this->_sections['id']['index_prev'] = $this->_sections['id']['index'] - $this->_sections['id']['step'];
$this->_sections['id']['index_next'] = $this->_sections['id']['index'] + $this->_sections['id']['step'];
$this->_sections['id']['first']      = ($this->_sections['id']['iteration'] == 1);
$this->_sections['id']['last']       = ($this->_sections['id']['iteration'] == $this->_sections['id']['total']);
?>
	<tr>
	<td><?php echo $this->_tpl_vars['assignments'][$this->_sections['id']['index']]['id']; ?>
</td>
	<td><?php echo $this->_tpl_vars['assignments'][$this->_sections['id']['index']]['name']; ?>
</td>
	<td><?php echo $this->_tpl_vars['assignments'][$this->_sections['id']['index']]['description']; ?>
</td>
	<td><?php echo $this->_tpl_vars['assignments'][$this->_sections['id']['index']]['due_date']; ?>
</td>
	<td><?php echo $this->_tpl_vars['assignments'][$this->_sections['id']['index']]['score_given']; ?>
</td>
	<td><?php echo $this->_tpl_vars['assignments'][$this->_sections['id']['index']]['total']; ?>
</td>
	<td><?php echo $this->_tpl_vars['assignments'][$this->_sections['id']['index']]['percentage']; ?>
%</td>
	<?php if ($this->_tpl_vars['teacher']): ?>
	<td><button type="submit" class="btn btn-primary" onclick="window.location='assign_grades_main.php?eid=<?php echo $this->_tpl_vars['assignments'][$this->_sections['id']['index']]['id']; ?>
'">Assign Grades</button></td>
	<?php endif; ?>
	</tr>
<?php endfor; endif; ?>

</table>
<?php if ($this->_tpl_vars['teacher']): ?>
	<button class="btn btn-primary" onclick="window.location='create_assignment.php?cid=<?php echo $this->_tpl_vars['cid']; ?>
'"> Create Assignment</button>
<?php endif; ?>
<h1>Project</h1>
<table class = "table table-striped">
<tr>
<th>id</th><th>Name</th><th>Description</th><th>Due Date</th> <?php if ($this->_tpl_vars['student']): ?> <th>Grade Given</th><?php endif; ?> <th>Total</th> <th>Percentage</th> <?php if ($this->_tpl_vars['teacher']): ?><th>assign grades</th><?php endif; ?>
</tr>
<?php unset($this->_sections['id']);
$this->_sections['id']['name'] = 'id';
$this->_sections['id']['loop'] = is_array($_loop=$this->_tpl_vars['projects']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['id']['show'] = true;
$this->_sections['id']['max'] = $this->_sections['id']['loop'];
$this->_sections['id']['step'] = 1;
$this->_sections['id']['start'] = $this->_sections['id']['step'] > 0 ? 0 : $this->_sections['id']['loop']-1;
if ($this->_sections['id']['show']) {
    $this->_sections['id']['total'] = $this->_sections['id']['loop'];
    if ($this->_sections['id']['total'] == 0)
        $this->_sections['id']['show'] = false;
} else
    $this->_sections['id']['total'] = 0;
if ($this->_sections['id']['show']):

            for ($this->_sections['id']['index'] = $this->_sections['id']['start'], $this->_sections['id']['iteration'] = 1;
                 $this->_sections['id']['iteration'] <= $this->_sections['id']['total'];
                 $this->_sections['id']['index'] += $this->_sections['id']['step'], $this->_sections['id']['iteration']++):
$this->_sections['id']['rownum'] = $this->_sections['id']['iteration'];
$this->_sections['id']['index_prev'] = $this->_sections['id']['index'] - $this->_sections['id']['step'];
$this->_sections['id']['index_next'] = $this->_sections['id']['index'] + $this->_sections['id']['step'];
$this->_sections['id']['first']      = ($this->_sections['id']['iteration'] == 1);
$this->_sections['id']['last']       = ($this->_sections['id']['iteration'] == $this->_sections['id']['total']);
?>
	<tr>
	<td><?php echo $this->_tpl_vars['projects'][$this->_sections['id']['index']]['id']; ?>
</td>
	<td><?php echo $this->_tpl_vars['projects'][$this->_sections['id']['index']]['name']; ?>
</td>
	<td><?php echo $this->_tpl_vars['projects'][$this->_sections['id']['index']]['description']; ?>
</td>
	<td><?php echo $this->_tpl_vars['projects'][$this->_sections['id']['index']]['due_date']; ?>
</td>
	<td><?php echo $this->_tpl_vars['projects'][$this->_sections['id']['index']]['score_given']; ?>
</td>
	<td><?php echo $this->_tpl_vars['projects'][$this->_sections['id']['index']]['total']; ?>
</td>
	<td><?php echo $this->_tpl_vars['projects'][$this->_sections['id']['index']]['percentage']; ?>
%</td>
	<?php if ($this->_tpl_vars['teacher']): ?>
	<td><button type="submit" class="btn btn-primary" onclick="window.location='assign_grades_main.php?eid=<?php echo $this->_tpl_vars['projects'][$this->_sections['id']['index']]['id']; ?>
'">Assign Grades</button></td>
	<?php endif; ?>
	</tr>
<?php endfor; endif; ?>

</table>
<?php if ($this->_tpl_vars['teacher']): ?>
	<button class="btn btn-primary" onclick="window.location='create_project.php?cid=<?php echo $this->_tpl_vars['cid']; ?>
'"> Create Project</button>
<?php endif; ?>
<h1>Quiz</h1>
<table class = "table table-striped">
<tr>
<th>id</th><th>Name</th><th>Description</th><th>Due Date</th> <?php if ($this->_tpl_vars['student']): ?> <th>Grade Given</th><?php endif; ?> <th>Total</th> <th>Percentage</th> <?php if ($this->_tpl_vars['teacher']): ?><th>assign grades</th><?php endif; ?>
</tr>
<?php unset($this->_sections['id']);
$this->_sections['id']['name'] = 'id';
$this->_sections['id']['loop'] = is_array($_loop=$this->_tpl_vars['quizs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['id']['show'] = true;
$this->_sections['id']['max'] = $this->_sections['id']['loop'];
$this->_sections['id']['step'] = 1;
$this->_sections['id']['start'] = $this->_sections['id']['step'] > 0 ? 0 : $this->_sections['id']['loop']-1;
if ($this->_sections['id']['show']) {
    $this->_sections['id']['total'] = $this->_sections['id']['loop'];
    if ($this->_sections['id']['total'] == 0)
        $this->_sections['id']['show'] = false;
} else
    $this->_sections['id']['total'] = 0;
if ($this->_sections['id']['show']):

            for ($this->_sections['id']['index'] = $this->_sections['id']['start'], $this->_sections['id']['iteration'] = 1;
                 $this->_sections['id']['iteration'] <= $this->_sections['id']['total'];
                 $this->_sections['id']['index'] += $this->_sections['id']['step'], $this->_sections['id']['iteration']++):
$this->_sections['id']['rownum'] = $this->_sections['id']['iteration'];
$this->_sections['id']['index_prev'] = $this->_sections['id']['index'] - $this->_sections['id']['step'];
$this->_sections['id']['index_next'] = $this->_sections['id']['index'] + $this->_sections['id']['step'];
$this->_sections['id']['first']      = ($this->_sections['id']['iteration'] == 1);
$this->_sections['id']['last']       = ($this->_sections['id']['iteration'] == $this->_sections['id']['total']);
?>
	<tr>
	<td><?php echo $this->_tpl_vars['quizs'][$this->_sections['id']['index']]['id']; ?>
</td>
	<td><?php echo $this->_tpl_vars['quizs'][$this->_sections['id']['index']]['name']; ?>
</td>
	<td><?php echo $this->_tpl_vars['quizs'][$this->_sections['id']['index']]['description']; ?>
</td>
	<td><?php echo $this->_tpl_vars['quizs'][$this->_sections['id']['index']]['due_date']; ?>
</td>
	<td><?php echo $this->_tpl_vars['quizs'][$this->_sections['id']['index']]['score_given']; ?>
</td>
	<td><?php echo $this->_tpl_vars['quizs'][$this->_sections['id']['index']]['total']; ?>
</td>
	<td><?php echo $this->_tpl_vars['quizs'][$this->_sections['id']['index']]['percentage']; ?>
%</td>
	<?php if ($this->_tpl_vars['teacher']): ?>
	<td><button type="submit" class="btn btn-primary" onclick="window.location='assign_grades_main.php?eid=<?php echo $this->_tpl_vars['quizs'][$this->_sections['id']['index']]['id']; ?>
'">Assign Grades</button></td>
	<?php endif; ?>
	</tr>
<?php endfor; endif; ?>

</table>
<?php if ($this->_tpl_vars['teacher']): ?>
	<button class="btn btn-primary" onclick="window.location='create_quiz.php?cid=<?php echo $this->_tpl_vars['cid']; ?>
'"> Create Quiz</button>
<?php endif; ?>
<h1>Exam</h1>
<table class = "table table-striped">
<tr>
<th>id</th><th>Name</th><th>Description</th><th>Due Date</th> <?php if ($this->_tpl_vars['student']): ?> <th>Grade Given</th><?php endif; ?> <th>Total</th> <th>Percentage</th> <?php if ($this->_tpl_vars['teacher']): ?><th>assign grades</th><?php endif; ?>
</tr>
<?php unset($this->_sections['id']);
$this->_sections['id']['name'] = 'id';
$this->_sections['id']['loop'] = is_array($_loop=$this->_tpl_vars['exams']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['id']['show'] = true;
$this->_sections['id']['max'] = $this->_sections['id']['loop'];
$this->_sections['id']['step'] = 1;
$this->_sections['id']['start'] = $this->_sections['id']['step'] > 0 ? 0 : $this->_sections['id']['loop']-1;
if ($this->_sections['id']['show']) {
    $this->_sections['id']['total'] = $this->_sections['id']['loop'];
    if ($this->_sections['id']['total'] == 0)
        $this->_sections['id']['show'] = false;
} else
    $this->_sections['id']['total'] = 0;
if ($this->_sections['id']['show']):

            for ($this->_sections['id']['index'] = $this->_sections['id']['start'], $this->_sections['id']['iteration'] = 1;
                 $this->_sections['id']['iteration'] <= $this->_sections['id']['total'];
                 $this->_sections['id']['index'] += $this->_sections['id']['step'], $this->_sections['id']['iteration']++):
$this->_sections['id']['rownum'] = $this->_sections['id']['iteration'];
$this->_sections['id']['index_prev'] = $this->_sections['id']['index'] - $this->_sections['id']['step'];
$this->_sections['id']['index_next'] = $this->_sections['id']['index'] + $this->_sections['id']['step'];
$this->_sections['id']['first']      = ($this->_sections['id']['iteration'] == 1);
$this->_sections['id']['last']       = ($this->_sections['id']['iteration'] == $this->_sections['id']['total']);
?>
	<tr>
	<td><?php echo $this->_tpl_vars['exams'][$this->_sections['id']['index']]['id']; ?>
</td>
	<td><?php echo $this->_tpl_vars['exams'][$this->_sections['id']['index']]['name']; ?>
</td>
	<td><?php echo $this->_tpl_vars['exams'][$this->_sections['id']['index']]['description']; ?>
</td>
	<td><?php echo $this->_tpl_vars['exams'][$this->_sections['id']['index']]['due_date']; ?>
</td>
	<td><?php echo $this->_tpl_vars['exams'][$this->_sections['id']['index']]['score_given']; ?>
</td>
	<td><?php echo $this->_tpl_vars['exams'][$this->_sections['id']['index']]['total']; ?>
</td>
	<td><?php echo $this->_tpl_vars['exams'][$this->_sections['id']['index']]['percentage']; ?>
%</td>
	
	<?php if ($this->_tpl_vars['teacher']): ?>
	<td><button type="submit" class="btn btn-primary" onclick="window.location='assign_grades_main.php?eid=<?php echo $this->_tpl_vars['exams'][$this->_sections['id']['index']]['id']; ?>
'">Assign Grades</button></td>
	<?php endif; ?>
	</tr>
<?php endfor; endif; ?>

</table>
<?php if ($this->_tpl_vars['teacher']): ?>
	<button class="btn btn-primary" onclick="window.location='create_exam.php?cid=<?php echo $this->_tpl_vars['cid']; ?>
'"> Create Exam</button>
<?php endif; ?>