<?php

/**
 * Styles for KML output via views from the KML module.
 *
 * Placemarks can use these styles by adding
 *   <styleUrl>#id</styleUrl>
 * where #id is the id of the style to use.
 *
 * Note: color is in the form aabbggrr where aa=alpha,bb=blue,gg=green,rr=red.
 *
 * Reference - http://code.google.com/apis/kml/documentation/kmlreference.html
 */
?>

<Style id="RedTrack">
  <LineStyle>
    <color>FF0000FC</color>
    <width>2</width>
  </LineStyle>
</Style>

<Style id="RedOrngTrack">
  <LineStyle>
    <color>FF0045FE</color>
    <width>2</width>
  </LineStyle>
</Style>

<Style id="OrangeRedTrack">
  <LineStyle>
    <color>FF006CFF</color>
    <width>2</width>
  </LineStyle>
</Style>

<Style id="OrangeTrack">
  <LineStyle>
    <color>FF0092FF</color>
    <width>2</width>
  </LineStyle>
</Style>

<Style id="GoldenTrack">
  <LineStyle>
    <color>FF00BDFE</color>
    <width>2</width>
  </LineStyle>
</Style>

<Style id="YellowTrack">
  <LineStyle>
    <color>FF00ECFE</color>
    <width>2</width>
  </LineStyle>
</Style>

<Style id="YellowGrnTrack">
  <LineStyle>
    <color>FF00FFE0</color>
    <width>2</width>
  </LineStyle>
</Style>

<Style id="LimeGrnTrack">
  <LineStyle>
    <color>FF00F9AF</color>
    <width>2</width>
  </LineStyle>
</Style>

<Style id="GreenYlwTrack">
  <LineStyle>
    <color>FF00EA79</color>
    <width>2</width>
  </LineStyle>
</Style>

<Style id="GreenTrack">
  <LineStyle>
    <color>FF00E41D</color>
    <width>2</width>
  </LineStyle>
</Style>

<Style id="GreenAquaTrack">
  <LineStyle>
    <color>FF58E800</color>
    <width>2</width>
  </LineStyle>
</Style>

<Style id="AquaGrnTrack">
  <LineStyle>
    <color>FF8EF400</color>
    <width>2</width>
  </LineStyle>
</Style>

<Style id="AquaTrack">
  <LineStyle>
    <color>FFCAFF00</color>
    <width>2</width>
  </LineStyle>
</Style>

<Style id="CyanTrack">
  <LineStyle>
    <color>FFF8FD07</color>
    <width>2</width>
  </LineStyle>
</Style>

<Style id="CyanBlueTrack">
  <LineStyle>
    <color>FFFFDB13</color>
    <width>2</width>
  </LineStyle>
</Style>

<Style id="SkyBlueTrack">
  <LineStyle>
    <color>FFFFBC1D</color>
    <width>2</width>
  </LineStyle>
</Style>

<Style id="BabyBlueTrack">
  <LineStyle>
    <color>FFFFA224</color>
    <width>2</width>
  </LineStyle>
</Style>

<Style id="OtherBlueTrack">
  <LineStyle>
    <color>FFFF8924</color>
    <width>2</width>
  </LineStyle>
</Style>

<Style id="BlueTrack">
  <LineStyle>
    <color>FFFF6C25</color>
    <width>2</width>
  </LineStyle>
</Style>

<Style id="DeepBlueTrack">
  <LineStyle>
    <color>FFFF4F25</color>
    <width>2</width>
  </LineStyle>
</Style>

<?php // Start and end point styles ?>

<Style id="trackStartPoint">
  <IconStyle>
     <Icon>
       <href>
         <?php global $base_root; print $base_root . '/' . path_to_theme() . '/images/track_start.png'; ?>
       </href>
     </Icon>
     <hotSpot x="4" y="2" xunits="pixels" yunits="pixels"></hotSpot>
  </IconStyle>
</Style>

<Style id="trackEndPoint">
  <IconStyle>
     <Icon>
        <href>
          <?php global $base_root; print $base_root . '/' . path_to_theme() . '/images/track_end.png'; ?>
        </href>
     </Icon>
     <hotSpot x="4" y="2" xunits="pixels" yunits="pixels"></hotSpot>
  </IconStyle>
</Style>
