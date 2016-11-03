<?php print_r($cars);?>
<form id="formInsertPart" > 
	Component:
	<select id="components_select">
	  <?php foreach($components as $component) { ?>
	  <option value="<?php echo $component->id; ?>">
	    <?php echo $component->cname; ?>
	  </option> 
	<?php } ?>
	</select>
	Description: <input type="text" id="description" name="description" />
	Price:       <input type="text" id="price"       name="price" />
	Suitable Cars:
	<select id="cars_select" multiple>
	  <?php foreach($cars as $car) { ?>
	  <option value="<?php echo $car->id; ?>">
	    <?php echo $car->company ." ".$car->model_name  ?>
	  </option> 
	<?php } ?>
    </select>
    <input type="submit" onClick="insertPart()" value="insert new part" />
</form>