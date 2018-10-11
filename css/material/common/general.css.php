html {
  font-size: <?php echo $theme->getFontSize() ?>
}

input, select, textarea {
  font-size: 1em
}

body {
  background: <?php echo $GLOBALS['cfg']['BackgroundColor'] ?>;
  color: <?php echo $GLOBALS['cfg']['GreyDarkColor'] ?>;
<?php if ( !empty($GLOBALS['cfg']['FontFamily']) ) { ?>
  font-family: <?php echo $GLOBALS['cfg']['FontFamily'] ?>;
<?php } ?>
  line-height: 1;
  margin-left: 250px;
  padding: 0
}

a, a:link, a:visited, a:active, button.mult_submit, .checkall_box+label {
  text-decoration: none;
  color: <?php echo $GLOBALS['cfg']['GreyDarkColor'] ?>;
  cursor: pointer;
  outline: none
}

a:hover, button.mult_submit:hover, button.mult_submit:focus, .checkall_box+label:hover {
  text-decoration: none;
  color: <?php echo $GLOBALS['cfg']['BlackColor'] ?>
}

font[color=red], span[style="color: #ff0000"] {
  color: <?php echo $GLOBALS['cfg']['WarningColor'] ?>!important
}

strong {
  font-weight: normal
}

<?php if ( !empty($GLOBALS['cfg']['FontFamilyFixed']) ) { ?>
code, pre, textarea, tt {
  font-family: <?php echo $GLOBALS['cfg']['FontFamilyFixed'] ?>!important
}
<?php } ?>

fieldset.left {
  margin-top: 20px
}

fieldset legend {
  color: <?php echo $GLOBALS['cfg']['PrimaryColor'] ?>;
  font-size: 24px;
  position: relative;
  margin-bottom: 20px
}

fieldset p {
  margin-bottom: 10px
}