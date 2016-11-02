<p>Here is a list of all parts:</p>

<?php foreach($parts as $part) { ?>
  <p>
    <?php echo $part->description; ?>
    <a href='?controller=posts&action=show&id=<?php echo $part->id; ?>'>See content</a>
  </p>
<?php } ?>