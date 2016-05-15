<!--breadcrumbs start-->
<div id="breadcrumbs-wrapper">
	<!-- Search for small screen -->
	<div class="container">
		<div class="row">
			<div class="col s12 m12 l12">
				
				<h5 class="breadcrumbs-title"><?php echo $this->Lang->write('content_scenes_index_headline');?></h5>
				<ol class="breadcrumbs">
					<li>
						<a href="/">
							<?php echo $this->Lang->write('app_breadcrumbs_home');?>
						</a>
						 <i class="mdi-hardware-keyboard-arrow-right" style="line-height: 15px;"></i>
						<?php echo $this->Lang->write('dashboard_breadcrumbs_dashboard');?>
						</li>
				</ol>
			</div>
		</div>
	</div>
</div>
<!--breadcrumbs end-->
        
<!--start container-->
<div class="container content-wrapper">
	<div class="section">
	
		<nav>
			<div class="nav-wrapper">
				<ul id="nav-mobile" class="left hide-on-med-and-down">
		        <li class="active"><a href="/content/scenes/index/"><?php echo $this->Lang->write('content_scene_show_list');?></a></li>
		        <li><a href="/content/scenes/addscene/"><?php echo $this->Lang->write('content_scene_show_add');?></a></li>
		        <li><a href="javascript:void(0);"><?php echo $this->Lang->write('content_scene_show_edit');?></a></li>
		      </ul>
			</div>
		</nav>

		<div class="action-wrapper">
			<div class="table-datatables">
				
			      <div class="row">
			      
			      <div class="col s12 m4">
			      
			      	List of content will be here....
			      
			      </div>
			      
			</div>
		</div>
	</div>
</div>
       
