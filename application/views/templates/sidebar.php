<div class="sidebar">
	<div class="sidebar-container">
		<div class="sidebar-header">
			<div class="sidebar-brand">
				<!-- <div class="sidebar-logo"></div> -->
				<i class="fa fa-th-large"></i>
				Testing Admin
			</div>
		</div>
		<nav id="sidebar-menu">
			<ul class="nav sidebar-menu metismenu">
				<li <?php echo ($current_page == 'dashboard') ? 'class="active"' : '';  ?>><a href="<?php echo site_url(); ?>"><i class="fa fa-home"></i> Dashboard</a></li>
				<li <?php echo ($current_page == 'proctored_exams') ? 'class="active dropdown-open"' : ''; ?>>
					<a href="#" class="has-arrow"><i class="fa fa-pencil-square"></i> Proctored Exams <!--<i class="arrow fa fa-chevron-right"></i>--></a>
					<ul class="collapse <?php echo ($current_page == 'proctored_exams') ? 'in' : ''; ?>">
						<li <?php echo ($sub_page == 'avondale') ? 'class="active"' : ''; ?>><a href="<?php echo site_url('proctored_exams/avondale'); ?>">Avondale</a></li>
						<li <?php echo ($sub_page == 'northern') ? 'class="active"' : ''; ?>><a href="<?php echo site_url('proctored_exams/northern'); ?>">Northern</a></li>
						<li <?php echo ($sub_page == 'queen_creek') ? 'class="active"' : ''; ?>><a href="<?php echo site_url('proctored_exams/queen_creek'); ?>">Queen Creek</a></li>
						<li <?php echo ($sub_page == 'surprise') ? 'class="active"' : ''; ?>><a href="<?php echo site_url('proctored_exams/surprise'); ?>">Surprise</a></li>
						<li <?php echo ($sub_page == 'tempe') ? 'class="active"' : ''; ?>><a href="<?php echo site_url('proctored_exams/tempe'); ?>">Tempe</a></li>
						<li <?php echo ($sub_page == 'southern') ? 'class="active"' : ''; ?>><a href="<?php echo site_url('proctored_exams/southern'); ?>">Southern</a></li>
						<li <?php echo ($sub_page == 'thomas') ? 'class="active"' : ''; ?>><a href="<?php echo site_url('proctored_exams/thomas'); ?>">Thomas</a></li>
						<li <?php echo ($sub_page == 'luke') ? 'class="active"' : ''; ?>><a href="<?php echo site_url('proctored_exams/luke'); ?>">Luke</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</div>
</div>