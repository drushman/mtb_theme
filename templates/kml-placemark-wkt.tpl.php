<?php if (!empty($start_points)): ?>
  <?php foreach ($start_points as $start_point): // There might be multiple Line Strings. ?>
    <Placemark>
      <styleUrl><?php print '#trackStartPoint'; ?></styleUrl>
      <name>
        <?php print t('Start'); ?>
      </name>
      <description>
        <![CDATA[<?php print t('Start of ') . strip_tags($name); ?>]]>
      </description>
      <Point>
        <coordinates><?php print check_plain(str_replace(' ', ',', $start_point)) . ',0'; ?></coordinates>
      </Point>
    </Placemark>
  <?php endforeach; ?>
<?php endif; ?>
<Placemark>
  <name>
    <![CDATA[<?php print strip_tags($name) ?>]]>
  </name>
  <description>
    <![CDATA[<?php print $description ?>]]>
  </description>
  <?php if ($styleURL): ?>
    <styleUrl><?php echo $styleURL; ?></styleUrl>
  <?php endif; ?>
  <?php print $geometry ?>
</Placemark>
<?php if (!empty($end_points)): ?>
  <?php foreach ($end_points as $end_point): // There might be multiple Line Strings. ?>
    <Placemark>
      <styleUrl><?php print '#trackEndPoint'; ?></styleUrl>
      <name>
        <?php print t('End'); ?>
      </name>
      <description>
        <![CDATA[<?php print t('End of ') . strip_tags($name); ?>]]>
      </description>
      <Point>
        <coordinates><?php print check_plain(str_replace(' ', ',', $end_point)) . ',0'; ?></coordinates>
      </Point>
    </Placemark>
  <?php endforeach; ?>
<?php endif; ?>
