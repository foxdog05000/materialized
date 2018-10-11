#pma_navigation #recentTableList {
  text-align: center;
  padding: 10px
}

#pma_navigation #recentTableList select {
  min-width: 100%
}

#pma_navigation #databaseList {
  text-align: center;
  margin: 10px
}

#pma_navigation #navipanellinks {
  padding: 1em 7px;
  text-align: center;
}

div#left_tableList li:hover a:first-child:before {
  color: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>
}

#navipanellinks a {
  display: inline-block;
  margin: 0 4px;
  padding: 2px
}

#navipanellinks a:hover {
  background-color: #eee;
  border-radius: 5px
}

#pma_navigation #serverChoice, #pma_navigation #databaseList, #pma_navigation div.pageselector.dbselector {
  text-align: center;
  padding: 5px 10px 0;
  border: 0
}

#pma_navigation_content>img.throbber {
  display: none;
  margin: .3em auto 0
}

/* Navigation tree*/
#pma_navigation_tree {
  margin: 0;
  margin-left: 10px;
  overflow: hidden;
  height: 74%;
  position: relative
}

#pma_navigation_select_database {
  text-align: left;
  padding: 0 0 0;
  border: 0;
  margin: 0
}

#pma_navigation_db_select {
  margin-top: 0.5em;
  margin-left: 0.75em
}

#pma_navigation_db_select select {
  border: 1px solid #bbb;
  border-top: 1px solid #bbb;
  color: #333;
  padding: 4px 6px;
  margin: 0 0 0;
  width: 92%
}

#pma_navigation_tree_content {
  width: 100%;
  overflow: hidden;
  overflow-y: auto;
  position: absolute;
  height: 100%;
  margin: 20px 0
}

#pma_navigation_tree_content::-webkit-scrollbar {
  width: 10px;
  height: 10px
}

#pma_navigation_tree_content::-webkit-scrollbar-thumb {
  background-color: rgba(0,0,0,.2);
  visibility: hidden
}

#pma_navigation_tree_content::-webkit-scrollbar-track {
  background-color: #e6e6e6;
  visibility: hidden
}

#pma_navigation_tree_content:hover::-webkit-scrollbar-thumb {
  visibility: visible
}

#pma_navigation_tree_content:hover::-webkit-scrollbar-track {
  visibility: visible
}

#pma_navigation_tree li .dbItemControls {
  padding-left: 4px;
  top: 6px;
  position: relative
}

#pma_navigation_tree li .navItemControls {
  display: none;
  padding-left: 4px;
  top: 6px;
  position: relative
}

#pma_navigation_tree li .navItemControls .icon, #pma_navigation_tree li .dbItemControls .icon {
  width: 15px;
  height: 15px;
  background-color: #444
}

#pma_navigation_tree li.activePointer .navItemControls {
  display: inline;
  opacity: 0.5
}

#pma_navigation_tree li.activePointer .navItemControls:hover {
  display: inline;
  opacity: 1.0
}

#pma_navigation_tree_content a.hover_show_full {
  position: relative;
  z-index: 100;
  top: 7px
}

#pma_navigation_tree a {
  color: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>
}

#pma_navigation_tree ul {
  clear: both;
  padding: 0;
  list-style-type: none;
}

#pma_recent_list, #pma_favorite_list {
  overflow: hidden;
  border-radius: 2px;
  margin: 6px 10px 0 2px!important;
  padding: 10px 0!important;
  box-shadow: <?php echo $GLOBALS['cfg']['Shadow'] ?>
}

#pma_navigation_tree ul ul {
  position: relative
}

#pma_navigation_tree li {
  white-space: nowrap;
  clear: both;
  min-height: 25px
}

#pma_navigation_tree .icon {
  display: none
}

#pma_navigation_tree i {
  display: block
}

#pma_navigation_tree div.block {
  position: relative;
  width: 1.5em;
  height: 2em;
  min-width: 16px;
  min-height: 16px;
  float: left
}

#pma_navigation_tree div.block.double {
  width: 2.5em
}

#pma_navigation_tree div.block i, #pma_navigation_tree div.block b {
  width: 1.5em;
  height: 2em;
  min-width: 16px;
  min-height: 8px;
  position: absolute;
  bottom: 0.7em;
  left: 0.88em;
  z-index: 0;
  margin-top: -4px
}

#pma_navigation_tree div.block i {
  /* Top and right segments for the tree element connections */
  display: block;
  border-left: 1px solid #CFD8DC;
  border-bottom: 1px solid #CFD8DC;
  position: relative;
  z-index: 0
}

#pma_navigation_tree div.block i.first {
  /* Removes top segment */
  border-left: 0
}

#pma_navigation_tree div.block b {
  /* Bottom segment for the tree element connections */
  display: block;
  bottom: -0.6em;
  border-left: 1px solid #CFD8DC
}

#pma_navigation_tree div.block a, #pma_navigation_tree div.block u {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 10
}

#pma_navigation_tree div.block a+a {
  left: 100%
}

#pma_navigation_tree div.block.double a, #pma_navigation_tree div.block.double u {
  left: 33%
}

#pma_navigation_tree div.block.double a+a {
  left: 85%
}

#pma_navigation_tree div.block img {
  position: relative;
  top: -0.6em;
  left: 0;
  margin-left: -7px;
  width: 18px;
  height: 18px;
  background-color: #546E7A
}

#pma_navigation_tree li.selected div.block img {
  background-color: <?php echo $GLOBALS['cfg']['AccentColor'] ?>
}

#pma_navigation_tree div.throbber img {
  top: 2px;
  left: 2px
}

#pma_navigation_tree li.last>ul {
  background: none
}

#pma_navigation_tree .list_container {
  border-left: 1px solid #CFD8DC;
  margin-left: .9em;
  padding-left: .5em
}

#pma_navigation_tree .last>.list_container {
  border-left: 0 solid #616161
}


#pma_navigation_tree_content .ic_b_minus, #pma_navigation_tree_content .ic_b_plus {
 display: initial
}

/* Fast filter */
li.fast_filter {
  margin-left: 0.75em;
  padding-right: 15px;
}

li.fast_filter span {
  position: relative;
  right: 1.5em;
  padding: 0.2em;
  top: 1px;
  cursor: pointer;
  font-weight: bold;
  color: #800
}

li.fast_filter.db_fast_filter {
  border: 0;
  margin-left: 0;
  margin-right: 10px
}

#navigation_controls_outer {
  min-height: 21px !important;
  margin-top: 25px!important
}

#pma_navigation_collapse {
  padding-right: 2px
}

#navigation_controls_outer.activePointer {
  background-color: transparent!important
}

#navigation_controls {
  margin: 0 10px 0 0;
  text-align: center
}

#navigation_controls .icon, #pma_favorite_list .icon, #pma_navigation_tree .navItemControls .icon, #pma_navigation_tree .dbItemControls .icon {
  display: inherit
}

/* Resize handler */
#pma_navigation_resizer {
  width: 3px;
  height: 100%;
  background-color: transparent;
  cursor: col-resize;
  position: fixed;
  top: 0;
  left: 250px;
  z-index: 801
}

#pma_navigation_collapser {
  width: 24px;
  height: 24px;
  color: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>;
  position: fixed;
  margin-left: 18px;
  margin-top: 14px;
  padding: 3px;
  top: 0;
  left: <?php echo $GLOBALS['cfg']['NaviWidth'] ?>px;
  text-align: center;
  text-indent: -9999px;
  background-image: url("./themes/<?php echo $slug ?>/img/b_back.png")!important;
  background-repeat: no-repeat;
  background-position: center;
  cursor: pointer;
  border-radius: 50%;
  transition: all .3s ease-in-out;
  z-index: 801
}

#pma_navigation_collapser[style="left: 3px;"] {
  transform: rotate(180deg);
  transition: all .3s ease-in-out
}

#pma_navigation_collapser:hover {
  background-color: rgba(255, 255, 255, .12)
}

/* Quick warp links */
.pma_quick_warp {
  margin-top: 20px;
  margin-left: 4px;
  position: relative
}

.pma_quick_warp .drop_list {
  float: left;
  margin-left: 5px;
  padding: 2px 0
}

.pma_quick_warp .drop_button {
  padding: .5em .9em;
  cursor: pointer;
  box-shadow: 0 1px 1px #bbb;
  border-radius: 2px
}

.pma_quick_warp .drop_list:hover .drop_button {
  background: #EEE
}

.pma_quick_warp .drop_list ul {
  position: absolute;
  margin: 0;
  padding: 0;
  overflow: hidden;
  overflow-y: auto;
  list-style: none;
  background: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>;
  top: 100%;
  left: 3px;
  right: 0;
  display: none;
  z-index: 802
}

.pma_quick_warp .drop_list:hover ul {
  display: block
}

.pma_quick_warp .drop_list li {
  white-space: nowrap;
  padding: 0
}

.pma_quick_warp .drop_list li img {
  vertical-align: sub
}

.pma_quick_warp .drop_list li:hover {
  background: #f2f2f2
}

.pma_quick_warp .drop_list a {
  display: block;
  line-height: 30px;
  padding: 0 15px
}

.pma_quick_warp .drop_list a.favorite_table_anchor {
  clear: left;
  float: left;
  height: 24px;
  margin-top: 3px;
  padding-right: 7px
}

/* Table Sticky */

table.sticky_columns {
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.2)
}
