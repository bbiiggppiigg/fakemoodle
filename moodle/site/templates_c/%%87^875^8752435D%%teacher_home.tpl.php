<?php /* Smarty version 2.6.27, created on 2014-11-11 07:53:32
         compiled from teacher_home.tpl */ ?>
<div><strong>My Courses</strong>
<table class ="table table-striped">
	<tr>
		<th>Course Number</th>
		<th>Course Name</th>
		<th>Number of Students Invovled</th>
	</tr>
	<?php unset($this->_sections['id']);
$this->_sections['id']['name'] = 'id';
$this->_sections['id']['loop'] = is_array($_loop=$this->_tpl_vars['rs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
		<td><?php echo $this->_tpl_vars['rs'][$this->_sections['id']['index']]['number']; ?>
</td>
		<td><a href="course_main.php?cid=<?php echo $this->_tpl_vars['rs'][$this->_sections['id']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['rs'][$this->_sections['id']['index']]['name']; ?>
</a></td>
		<td><?php echo $this->_tpl_vars['rs'][$this->_sections['id']['index']]['num']; ?>
</td>
	</tr>
	<?php endfor; endif; ?>
</table>
<button > <a href = "create_course.php">Add A course</a></button>
</div>