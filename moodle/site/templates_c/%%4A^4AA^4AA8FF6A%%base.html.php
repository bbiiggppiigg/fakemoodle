<?php /* Smarty version 2.6.27, created on 2014-10-24 19:29:04
         compiled from base.html */ ?>

<!DOCTYPE html>
<html lang="en">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "./header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  <body>
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.js"></script>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "./nav.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <div class="container">
    
      <!-- Main hero unit for a primary marketing message or call to action -->
      <?php if ($this->_tpl_vars['msg'] != ''): ?>
        <div class="alert">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong><?php echo $this->_tpl_vars['msg']; ?>
</strong>
        </div>
	  <?php endif; ?>
	  
      <script>console.log('<?php echo $this->_tpl_vars['content']; ?>
');</script>
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['content'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

      <hr>

      <footer>
        <!--<iframe src="https://www.facebook.com/plugins/like.php?href=http://acm.cs.nthu.edu.tw"
          scrolling="no" frameborder="0" style="border:none; width:450px; height:28px"></iframe>-->
        <!--
        <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>-->
        <g:plusone></g:plusone>
        <p>&copy; Fake Moodle, Templates are from Bootstrap Project
        </p>          
      </footer>

    </div> <!-- /container -->
  </body>
</html>