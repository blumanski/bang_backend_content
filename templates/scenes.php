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
						<?php echo $this->Lang->write('content_scenes_bread_module');?>
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

		<div class="action-wrapper">
			<div class="table-datatables">
				
			      <div class="row">
			      
			      <div class="col s12 m4">
			      
			      	<form action="/content/scene/addscene/" method="post" id="addsceneform">

			      	
			      		<div class="row margin">
							<div class="input-field col s12">
					            <input 
					            	autocomplete="off"
					            	placeholder="<?php echo $this->Lang->write('content_scene_label_author');?>" 
					            	type="text" id="author" 
					            	name="author" 
					            	value="<?php if(isset($post['author'])) { echo htmlspecialchars($post['author'], ENT_QUOTES, 'UTF-8'); }?>" 
					            />
					            <label for="author" class="center-align"><?php echo $this->Lang->write('content_scene_label_author');?></label>
					            <div class="valerror"></div>
							</div>
						</div>


			      	
			      	</form>
			      
			      </div>
			      
			</div>
		</div>
	</div>
</div>
       
