#pma_navigation {
  width: <?php echo $GLOBALS['cfg']['NaviWidth'] ?>px;
  overflow: hidden;
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  background: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>;
  color: <?php echo $GLOBALS['cfg']['MainColor'] ?>;
  z-index: 800
}

#pma_navigation a img {
  border: 0;
  margin: 0
}

#pma_navigation a:link, #pma_navigation a:visited, #pma_navigation a:active {
  text-decoration: none;
  color: <?php echo $GLOBALS['cfg']['GreyDarkColor'] ?>
}

#pma_navigation select#select_server, #pma_navigation select#lightm_db {
  width: 100%
}

/* buttons in some browsers (eg. Konqueror) are block elements,
   this breaks design */
#pma_navigation button {
  display: inline
}

#pma_navigation_content {
  width: 100%;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 0
}

#pma_navigation form {
  margin: 0;
  padding: 0;
  display: inline;
  box-shadow: none;
  background-color: transparent
}
