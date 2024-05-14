<? if(!isset($_SESSION['admin'])) { 
echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=/admin/auth.php">';
}

echo '<li class="nav-item has-treeview menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"><img src="main.png"></i>
                  <p>Главная</p>
				  <i class="fa fa-circle-o nav-icon"><img src="right.png"></i>
                </a>
              </li>
			

		  '; ?>