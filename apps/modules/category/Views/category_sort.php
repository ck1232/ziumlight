<div id="category_sort_wrap" class="row">
<script type="text/javascript">
	function selectSort(){
		$('#sortForm').submit();
		return false;
	}
</script>

<div class="col-md-5 col-sm-5 col-5">
	<div class="hidden-lg-up row">
	<?php
	$this->load->helper('form');
	$menuAttributes = array('id' => 'menuForm', 'name' => 'menuForm');
	echo form_open('', $menuAttributes);
	if(isset($sorts)){
		?>
		
		<span class="col-5" style="display:inline-block">Category:</span>
		<select class="col-6" id="menuOption" name="sortOption" onchange="selectSort();">
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
	?>
	</div>
</div>

<div class="offset-lg-7 col-lg-5 col-md-5 col-sm-5 col-5">
	<div class="row">
	<?php
	$sortAttributes = array('id' => 'sortForm', 'name' => 'sortForm');
	echo form_open('', $sortAttributes);
	if(isset($sorts)){
		?>
		<span class="col-6" style="display:inline-block">Sort by:</span>
		<select class="col-6" id="sortOption" name="sortOption" onchange="selectSort();">
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