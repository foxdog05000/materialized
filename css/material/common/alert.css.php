.attention {
  color: red;
  font-weight: bold
}

.allfine {
  color: green
}

/* Message Boxes: Error, Confirmation */

#pma_errors, #pma_demo, #pma_footer {
  padding: 0 20px
}

#pma_errors #pma_errors {
  padding: 0
}

.success h1, .notice h1, div.error h1 {
  text-align: left;
  margin: 0 0 0.2em 0;
  color: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>
}

.success, .notice, .error, .footnotes {
  margin: 0 0 20px;
  padding: 10px;
  border-radius: 2px
}

.success .icon, .error .icon, .footnotes .icon {
  background-color: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>
}

form + .notice {
  margin: 20px 0 0
}

.ajax_notification .error {
  box-shadow: none;
  border-radius: 2px;
  border: none!important;
  padding: 15px 20px;
  margin: 0 -24px
}

div.success {
  margin: 0 0 1em 0;
  border: none
}

.success a, .notice a, .error a {
  text-decoration: underline;
}

.success {
  color: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>;
  background-color: <?php echo $GLOBALS['cfg']['SuccessColor'] ?>
}

h1.success, div.success {
  background: #4caf50!important
}

.notice, .footnotes {
  color: #000;
  background-color: #FFE082
}

.error {
  color: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>;
  background-color: <?php echo $GLOBALS['cfg']['WarningColor'] ?>
}

.confirmation {
  color: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>;
  background-color: <?php echo $GLOBALS['cfg']['WarningColor'] ?>
}

fieldset.confirmation legend {
  background-color: #d03912
}

#error_notification {
  border-radius: 0;
  line-height: 35px
}

/* End Message Boxes */

/* Forbidden, No Privileges */

.noPrivileges {
  color: #ff0000;
  font-weight: bold
}

/* End Forbidden */

fieldset.caution {
  background: <?php echo $GLOBALS['cfg']['WarningColor'] ?>;
  border-radius: 2px;
  padding: 20px;
  margin-bottom: 20px
}

fieldset.caution legend {
  top: 35px!important;
  color: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>!important
}

fieldset.caution a {
  text-transform: uppercase;
  color: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>;
  font-weight: normal
}

fieldset.caution ul, #tbl_maintenance {
  padding: 0
}

fieldset.caution li, #tbl_maintenance li {
  display: block
}

fieldset.caution li:before {
  content: '';
  margin-left: 45px
}

fieldset.caution img {
  background-color: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>
}