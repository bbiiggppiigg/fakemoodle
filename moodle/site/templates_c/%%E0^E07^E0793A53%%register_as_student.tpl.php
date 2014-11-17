<?php /* Smarty version 2.6.27, created on 2014-11-11 05:59:32
         compiled from register_as_student.tpl */ ?>
<form method="POST" name = "register_as_student">
	<table class="table table-striped">
		<tr>
			<th>Email</th>
			<td><input type="email" name="email" required></input></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><input type="text" name="password" required></input></td>
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

<?php unset($this->_sections['students']);
$this->_sections['students']['name'] = 'students';
$this->_sections['students']['loop'] = is_array($_loop=$this->_tpl_vars['rs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['students']['show'] = true;
$this->_sections['students']['max'] = $this->_sections['students']['loop'];
$this->_sections['students']['step'] = 1;
$this->_sections['students']['start'] = $this->_sections['students']['step'] > 0 ? 0 : $this->_sections['students']['loop']-1;
if ($this->_sections['students']['show']) {
    $this->_sections['students']['total'] = $this->_sections['students']['loop'];
    if ($this->_sections['students']['total'] == 0)
        $this->_sections['students']['show'] = false;
} else
    $this->_sections['students']['total'] = 0;
if ($this->_sections['students']['show']):

            for ($this->_sections['students']['index'] = $this->_sections['students']['start'], $this->_sections['students']['iteration'] = 1;
                 $this->_sections['students']['iteration'] <= $this->_sections['students']['total'];
                 $this->_sections['students']['index'] += $this->_sections['students']['step'], $this->_sections['students']['iteration']++):
$this->_sections['students']['rownum'] = $this->_sections['students']['iteration'];
$this->_sections['students']['index_prev'] = $this->_sections['students']['index'] - $this->_sections['students']['step'];
$this->_sections['students']['index_next'] = $this->_sections['students']['index'] + $this->_sections['students']['step'];
$this->_sections['students']['first']      = ($this->_sections['students']['iteration'] == 1);
$this->_sections['students']['last']       = ($this->_sections['students']['iteration'] == $this->_sections['students']['total']);
?>
	<tr>
		<td><?php echo $this->_tpl_vars['rs'][$this->_sections['students']['index']]['name']; ?>
</td>
		<td><?php echo $this->_tpl_vars['rs'][$this->_sections['students']['index']]['email']; ?>
</td>
	</tr>
<?php endfor; endif; ?>
</table>