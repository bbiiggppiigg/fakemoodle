<?php /* Smarty version 2.6.27, created on 2014-11-17 00:06:38
         compiled from assign_grades_main.tpl */ ?>
<h1><?php echo $this->_tpl_vars['info'][0]['name']; ?>
</h1>
<table class ="table table-striped">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Score</th>
		<th>Total</th>
	</tr>
	<form method="post" id="notworking">
	<?php unset($this->_sections['id']);
$this->_sections['id']['loop'] = is_array($_loop=$this->_tpl_vars['students']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['id']['name'] = 'id';
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
			<td><?php echo $this->_tpl_vars['students'][$this->_sections['id']['index']]['email']; ?>
</td>
			<td><?php echo $this->_tpl_vars['students'][$this->_sections['id']['index']]['name']; ?>
</td>
			<td>
			<input type="number" step="any" name="scores[]" required style="height:40px" value="<?php echo $this->_tpl_vars['students'][$this->_sections['id']['index']]['score']; ?>
"  />
			</td>
			<td><?php echo $this->_tpl_vars['info'][0]['total']; ?>
</td>
		</tr>
	<?php endfor; endif; ?>
	</form>
</table>
<input type="submit" class="btn btn-primary" form="notworking"/>
	