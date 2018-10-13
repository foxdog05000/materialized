<?php
// Unplanned execution path
if (!defined('PMA_MINIMUM_COMMON') && !defined('TESTSUITE') ) {
    exit();
} ?>
/* ----------------------------------------------------- */

.resizable-menu a, .resizable-menu span {
  display: flex;
  align-items: center;
  margin: 0;
  padding: 0;
  white-space: nowrap
}

.resizable-menu .submenu {
  display: none;
  position: relative
}

.resizable-menu .submenu ul .icon {
  background-color: #000!important
}

ul.resizable-menu .shown {
  display: inline-block
}

ul.resizable-menu ul {
  margin: 0;
  padding: 15px 0;
  position: absolute;
  list-style-type: none;
  display: none;
  z-index: 2;
  right: 0;
  border-radius: 0 0 3px 3px;
  box-shadow: <?php echo $GLOBALS['cfg']['Shadow'] ?>
}

ul.resizable-menu li:hover {

}

ul.resizable-menu li:hover ul, ul.resizable-menu .submenuhover ul {
  display: block;
  background: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>
}

ul.resizable-menu ul li {
  width: 100%
}
