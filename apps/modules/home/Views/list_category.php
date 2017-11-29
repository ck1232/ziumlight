<div class="display-block">
	<div class="categoryTitle">
		<h3 class="categoryTitleText">Category</h3>
	</div>
	<div class="row">
		<div class="offset-lg-1 col-lg-11 offset-md-1 col-md-10 col-sm-12 col-12 horziontal-div">
			<ul class="horizontal-list">
				<?php 
				if(isset($categoryList)){
					foreach($categoryList as $category){
				?>
					<li style="padding: 0 5% 0 0" class="pull-left">
						<a href="./<?php echo $category->href;?>" style="display: inline-block">
							<img alt="<?php echo $category-> name;?>" src="<?php echo $category-> img;?>" width="90px" height="90px" />
							<span class="categoryItemText" style="display: block"><?php echo $category-> name;?></span>
						</a>
					</li>
				<?php 
					}
				}
				?>
			</ul>
		</div>
	</div>
</div>