<!--breadcrumbs start-->
<div id="breadcrumbs-wrapper">
	<!-- Search for small screen -->
	<div class="container">
		<div class="row">
			<div class="col s12 m12 l12">
				
				<h5 class="breadcrumbs-title"><?php echo $this->Lang->write('content_scenes_edit_headline');?></h5>
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

		<nav>
			<div class="nav-wrapper">
				<ul id="nav-mobile" class="left hide-on-med-and-down">
		        <li><a href="/content/scenes/index/"><?php echo $this->Lang->write('content_scene_show_list');?></a></li>
		        <li class="active"><a href="/content/scenes/addscene/"><?php echo $this->Lang->write('content_scene_show_add');?></a></li>
		        <li><a href="javascript:void(0);"><?php echo $this->Lang->write('content_scene_show_edit');?></a></li>
		      </ul>
			</div>
		</nav>

		<div class="action-wrapper">
			<div class="table-datatables">
				
			      <div class="row">
			      
			      <div class="col s12 m4">
			      
			      	<form action="/content/scene/addscene/" method="post" id="addsceneform">

						<div class="row margin">
							<div class="input-field col s12">
					            <input 
					            	placeholder="<?php echo $this->Lang->write('content_scene_label_book_title');?>" 
					            	type="text" id="booktitle" 
					            	name="booktitle" 
					            	value="<?php if(isset($post['booktitle'])) { echo htmlspecialchars($post['booktitle'], ENT_QUOTES, 'UTF-8'); }?>" 
					            />
					            
					            <label for="author" class="center-align"><?php echo $this->Lang->write('content_scene_label_book_title');?></label>
					            <div class="valerror"></div>
							</div>
						</div>
			      	
			      		<div class="row margin">
							<div class="input-field col s12">
					            <input 
					            	placeholder="<?php echo $this->Lang->write('content_scene_label_book_author');?>" 
					            	type="text" id="author" 
					            	name="author" 
					            	value="<?php if(isset($post['author'])) { echo htmlspecialchars($post['author'], ENT_QUOTES, 'UTF-8'); }?>" 
					            />
					            
					            <input type="hidden" name="authorid" id="authorid" value="" />
					            
					            <label for="author" class="center-align"><?php echo $this->Lang->write('content_scene_label_author');?></label>
					            <div class="valerror"></div>
							</div>
						</div>
						
						<div class="row margin">
							<div class="input-field col s12">
					            <textarea 
					            	autocomplete="off"
					            	placeholder="<?php echo $this->Lang->write('content_scene_label_book_quote');?>" 
					            	id="quote" 
					            	name="quote" 
					            	class="materialize-textarea"
					            ><?php if(isset($post['quote'])) { echo htmlspecialchars($post['quote'], ENT_QUOTES, 'UTF-8'); }?></textarea>
					            
					            
					            <label for="author" class="center-align"><?php echo $this->Lang->write('content_scene_label_book_quote');?></label>
					            <div class="valerror"></div>
							</div>
						</div>


			      	
			      	</form>
			      
			      </div>
			      
			</div>
		</div>
	</div>
</div>
       
