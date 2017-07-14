<footer>
	<div class="container">
		<div class="row">
	      <?php if (isset($categories)) { 
	      	foreach($categories as $category){
	      ?>
	      <div class="col-sm-3">
	        <h5><?php echo $category->name; ?></h5>
	        <ul class="list-unstyled">
	          <?php foreach ($category->children as $subcategory) { ?>
	          <li><a href="<?php echo $subcategory->href; ?>"><?php echo $subcategory->name; ?></a></li>
	          <?php } ?>
	        </ul>
	      </div>
	      <?php }} ?>
	    </div>
    <hr>
    <p><?php echo $powered; ?></p>
	</div>
</footer>

<?php 
	if(isset($scripts)){
	foreach ($scripts as $script) { ?>
<script src="<?php echo $script; ?>" type="text/javascript"></script>
<?php }} ?>
</body>
</html>