<?php /* Smarty version 2.6.27, created on 2014-11-11 06:09:18
         compiled from register_as_teacher.tpl */ ?>
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
	<button type="submit" class="button btn-primary">Register As Teacher</button>
</form>
<table class = "table table-striped">
<tr>
	<th>Name</th>
	<th>Email</th>
</tr>

<?php unset($this->_sections['teachers']);
$this->_sections['teachers']['name'] = 'teachers';
$this->_sections['teachers']['loop'] = is_array($_loop=$this->_tpl_vars['rs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['teachers']['show'] = true;
$this->_sections['teachers']['max'] = $this->_sections['teachers']['loop'];
$this->_sections['teachers']['step'] = 1;
$this->_sections['teachers']['start'] = $this->_sections['teachers']['step'] > 0 ? 0 : $this->_sections['teachers']['loop']-1;
if ($this->_sections['teachers']['show']) {
    $this->_sections['teachers']['total'] = $this->_sections['teachers']['loop'];
    if ($this->_sections['teachers']['total'] == 0)
        $this->_sections['teachers']['show'] = false;
} else
    $this->_sections['teachers']['total'] = 0;
if ($this->_sections['teachers']['show']):

            for ($this->_sections['teachers']['index'] = $this->_sections['teachers']['start'], $this->_sections['teachers']['iteration'] = 1;
                 $this->_sections['teachers']['iteration'] <= $this->_sections['teachers']['total'];
                 $this->_sections['teachers']['index'] += $this->_sections['teachers']['step'], $this->_sections['teachers']['iteration']++):
$this->_sections['teachers']['rownum'] = $this->_sections['teachers']['iteration'];
$this->_sections['teachers']['index_prev'] = $this->_sections['teachers']['index'] - $this->_sections['teachers']['step'];
$this->_sections['teachers']['index_next'] = $this->_sections['teachers']['index'] + $this->_sections['teachers']['step'];
$this->_sections['teachers']['first']      = ($this->_sections['teachers']['iteration'] == 1);
$this->_sections['teachers']['last']       = ($this->_sections['teachers']['iteration'] == $this->_sections['teachers']['total']);
?>
	<tr>
		<td><?php echo $this->_tpl_vars['rs'][$this->_sections['teachers']['index']]['name']; ?>
</td>
		<td><?php echo $this->_tpl_vars['rs'][$this->_sections['teachers']['index']]['email']; ?>
</td>
	</tr>
<?php endfor; endif; ?>
</table>