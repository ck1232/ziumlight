<div id="category_sort_wrap" class="col-lg-12">
<script type="text/javascript">
	function selectSort(){
		$('#sortForm').submit();
		return false;
	}
</script>
<div class="row">
	<div class="col-md-6 col-sm-6 col-6">
		<div class="hidden-lg-up" style="text-align: left;">
		<?php
		$this->load->helper('form');
		$menuAttributes = array('id' => 'menuForm', 'name' => 'menuForm');
		echo form_open('', $menuAttributes);
		if(isset($sorts)){
			?>
			
			<span class="" style="display:inline-block">Category:</span>
			<select class="col-md-9 col-sm-8 col-12" id="menuOption" name="menuOption" onchange="">
			<?php 
			foreach ($sorts as $sort){
				?>
				<option class="list-inline-item" value="<?php echo $sort->name;?>" <?php if ($sort->isActive == true){echo 'selected';}?>><?php echo $sort->name;?></option>
				<?php
			}
			?>
			</select>
			
			<?php 
		}
		echo form_close();
		?>
		</div>
	</div>

	<div class="offset-lg-6 offset-md-0 offset-sm-0 offset-0 col-lg-6 col-md-6 col-sm-6 col-6">
		<?php
		$sortAttributes = array('id' => 'sortForm', 'name' => 'sortForm');
		echo form_open('', $sortAttributes);
		if(isset($sorts)){
			?>
			<span class="" style="display:inline-block">Sort by:</span>
			<select class="col-xl-7 col-lg-12 col-md-9 col-sm-9 col-12" id="sortOption" name="sortOption" onchange="selectSort();">
			<?php 
			foreach ($sorts as $sort){
				?>
				<option class="list-inline-item" value="<?php echo $sort->name;?>" <?php if ($sort->isActive == true){echo 'selected';}?>><?php echo $sort->name;?></option>
				<?php
			}
			?>
			</select>
			<?php 
		}
		echo form_close();
		?>
	</div>
</div>
</div>