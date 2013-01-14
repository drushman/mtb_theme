<?php
/**
 * @file views-view-list.tpl.php
 * Default simple view template to display a list of rows.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $options['type'] will either be ul or ol.
 * - node_type: type node
 * - image_thumbnail: image for node type photos and embedded_video
 * 
 * @ingroup views_templates
 */
?>




<?php print $wrapper_prefix; ?>
  <?php if (!empty($title)) : ?>
    <div class="node-header-wrapper <?php print $class_header_wrapper ?>">
      <span class="<?php print "type-" . $node_type ?>"></span>
      <?php if (isset($image_thumbnail)) : ?>
        <div class="image-thumbnail"><?php print $image_thumbnail; ?></div>
      <?php endif; ?>
      <h3 class="title <?php print "type-" . $node_type ?>"><?php print $title; ?></h3>
    </div>
    
  <?php endif; ?>
  <?php print $list_type_prefix; ?>
    <?php foreach ($rows as $id => $row): ?>
      <li class="<?php print $classes[$id]; ?>"><?php print $row; ?></li>
    <?php endforeach; ?>
  <?php print $list_type_suffix; ?>
<?php print $wrapper_suffix; ?>
