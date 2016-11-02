<?php print_r($components);?>
<form> 
Component:
<select>
  <?php foreach($components as $component) { ?>
  <option value="<?php echo $component->id; ?>">
    <?php echo $component->cname; ?>
  </option> 
<?php } ?>
</select>
Description: <input type="text" id="description" name="description" />
Price:       <input type="text" id="price"       name="price" />
Cui:
<select multiple>
  <?php foreach($cars as $car) { ?>
  <option value="<?php echo $car->id; ?>">
    <?php echo $car->company ." ".$car->model_name  ?>
  </option> 
<?php } ?>
</form>