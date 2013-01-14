<div class="track-header row">
  <div class="six columns"> <h3><?php print $node->content['tracks_map_button']['#value'] ?> </h3>&nbsp;&nbsp;&nbsp;<h3><?php print $node->title; ?> (<?php print $node->field_track_status[0]['view'] ?>)</h3></div><!-- end end .six / .columns -->
  <div class="six columns">
    <h3><?php print $node->field_track_length[0]['view'] ?> <?php foreach ((array)$node->field_track_type as $item) { ?><?php print $item['view'] ?><?php } ?> <?php print $node->field_track_terrain[0]['view'] ?> <?php print $node->field_track_difficulty[0]['view'] ?></h3>
  </div><!-- end end .six / .columns -->
</div><!-- end .track-header -->
<div class="track-map">
  <div class="map"><?php print $node->field_track_map[0]['view'] ?></div><!-- end .map -->
</div><!-- end .track-map -->
<div class="track-footer">
  <div class="six columns">
    <?php if ($node->field_track_gps_file[0]['view']): ?>
      <a href="<?php print $node->field_track_gps_file[0]['view'] ?>">Trail File Download</a>
    <?php endif; ?>
  </div><!-- end .six / .columns -->
  <div class="six columns">
    <a href="#">Share This</a>
  </div><!-- end .six / .columns -->
</div><!-- end .track-footer -->
