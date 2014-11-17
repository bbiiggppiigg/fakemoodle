<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container-fluid">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <{if $login}>
      <{else}>
      <div class="nav-collapse collapse">
        <ul class="nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Register<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="./register_as_student.php">register as student</a></li>
              <li><a href="./register_as_teacher.php">register as teacher</a></li>
              
            </ul>
          </li>
      </div>
      <{/if}>
      <{if $login}>
      <div class="nav-collapse collapse">
        <ul class="nav">
          <li class="dropdown">
            <a href="logout.php" class="dropdown-toggle" data-toggle="dropdown">Logout<b class="caret"></b></a>
          </li>
      </div>
      <{else}>
      <div class="nav-collapse collapse">
        <ul class="nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="./login_as_student.php">login as student</a></li>
              <li><a href="./login_as_teacher.php">login as teacher</a></li>
              
            </ul>
          </li>
      </div>
      <{/if}>
      <{if $teacher}>
      <div class="nav-collapse collapse">
        <ul class="nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Courses<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="./create_course.php">Create Course</a></li>
              <li><a href="./teacher_home.php">Manage My Course</a></li>
            </ul>
          </li>
      </div>

      <{/if}>
    <{if $student}>
      <div class="nav-collapse collapse">
        <ul class="nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Courses<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="./register_course.php">Register Courses</a></li>
              <li><a href="./student_home.php">Manage My Course</a></li>
            </ul>
          </li>
      </div>

      <{/if}>
    </div>
  </div>
</div>
