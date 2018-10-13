.responsivetable, #trackedForm {
  overflow: hidden;
  overflow-x: auto;
  margin-bottom: 20px
}

.responsivetable + .floatleft {
  margin-top: -20px
}

table {
  position: relative;
  width: 100%;
  border: 1px solid <?php echo $GLOBALS['cfg']['BorderColor'] ?>;
  border-radius: 2px;
  overflow: hidden
}

table + table {
  margin-top: 20px
}

table.relationalTable {
  border: 1px solid <?php echo $GLOBALS['cfg']['BorderColor'] ?>!important
}

table.noclick {
  width: 100%
}

table caption, table th, table td {
  padding: 0.8em 1em;
  font-weight: 500
}

table thead th, thead th a, table thead td, thead td a {
  color: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>!important;
  font-size: 16px;
  font-weight: 400
}

thead th, thead th a:hover {
  text-decoration: none
}

thead th .icon {
  background-color: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>
}

table:not(#index_columns) thead th, #table_columns thead th, table:not(#index_columns) thead td, #table_columns thead td {
  position: relative;
  vertical-align: bottom;
  text-overflow: ellipsis;
  line-height: 24px;
  letter-spacing: 0;
  height: 48px;
  padding: 0 10px 12px;
  box-sizing: border-box;
  white-space: nowrap;
  background: <?php echo $GLOBALS['cfg']['HeaderTable'] ?>
}

thead th:first-child, thead td:first-child, tbody th:first-child, tbody td:first-child, #table_columns th:first-child {
  padding-left: 20px!important  
}

thead th:last-child, thead td:last-child, tbody th:last-child, tbody td:last-child, #table_columns th:last-child {
  padding-right: 20px!important
}

tbody td, tbody th {
  position: relative;
  padding: 9px 12px;
  line-height: 16px
}

th {
  text-align: left
}

th, th a {
  display: table-cell
}

table.nospacing {
  border-spacing: 0
}

table.nopadding tr th, table.nopadding tr td {
  padding: 5px 10px
}

th.left, td.left {
  text-align: left
}

th.center, td.center {
  text-align: center
}

th.right, td.right {
  text-align: right;
  padding-right: 1em
}

tr.vmiddle th, tr.vmiddle td, th.vmiddle, td.vmiddle {
  vertical-align: middle
}

tr.vbottom th, tr.vbottom td, th.vbottom, td.vbottom {
  vertical-align: bottom
}

tr:nth-child(n+2):after, #tabledatabases:after, #structureTable:after, #tablestructure:after, tfoot:before {
  content: "";
  position: absolute;
  height: 1px;
  left: 18px;
  right: 18px;
  background: <?php echo $GLOBALS['cfg']['BorderColor'] ?>
}

tr.group-header:after {
  display: none!important
}

td p {
 display: inline 
}

#tableFilter {
  margin-bottom: 20px
}

#tablesForm, .create_table_form {
  padding: 0!important
}

.create_table_form .responsivetable:nth-child(2n), .create_table_form .tblFooters, form#addColumns,
fieldset.tblFooters form {
  padding: 20px;
  margin: 0
}

fieldset.tblFooters form {
  box-shadow: none;
  background: transparent;
  padding: 0
}

#tablestatistics, #partitions, #index_div {
  padding: 0 20px 20px;
  margin-top: 20px
}

#structure-action-links {
  padding: 10px
}

#table_name_col_no_outer {
  padding: 10px
}

#table_name_col_no_outer .vmiddle {
 float: none 
}

#table_name_col_no_outer input[type=button], form#addColumns input[type=submit],
fieldset.tblFooters form input[type=submit] {
  float: right
}

#initials_table {
  background: <?php echo $GLOBALS['cfg']['ThBackground'] ?>;
  border: 1px solid <?php echo $GLOBALS['cfg']['BorderColor'] ?>;
  margin-bottom: 10px
}

#initials_table a {
  background: <?php echo $GLOBALS['cfg']['MainBackground'] ?>;
  border: 1px solid <?php echo $GLOBALS['cfg']['BorderColor'] ?>;
  padding: 4px 8px
}

#initials_table td {
  padding: 8px!important
}

#tableFilter input[type=submit] {
  float: right
}

table tr th, table tr {
  text-align: left
}

table tr.marked:not(.nomarker) {
  box-shadow: inset 3px 0 <?php echo $GLOBALS['cfg']['AccentColor'] ?>
}

table tr.hover:not(.nopointer) th {
  background-color: <?php echo $GLOBALS['cfg']['BrowseMarkerBackground'] ?>;
  color: <?php echo $GLOBALS['cfg']['ThPointerColor'] ?>
}

th.condition, th.condition a {
  border: 1px solid <?php echo $GLOBALS['cfg']['BrowseWarningColor'] ?>;
  background: <?php echo $GLOBALS['cfg']['BrowseWarningColor'] ?>;
  color: <?php echo $GLOBALS['cfg']['MainBackground'] ?>!important
}

td.condition {
  border: 1px solid
}

td.null {
  font-style: italic;
}

table .valueHeader {
  text-align: right;
  white-space: normal
}

table .value {
  text-align: left;
  white-space: normal
}

/* IE doesnt handles 'pre' right */

table [class=value] {
  white-space: normal
}

/* End IE */

#partitions fieldset.tblFooters {
  margin: 0
}

.tblcomment {
  font-size: 70%;
  font-weight: normal;
  color: #000099
}

.tblHeaders {
  color: #000;
  background: #a5d6a7;
  font-weight: 500;
  text-align: left;
  margin-bottom: -1px
}

.tblHeaders a:link, .tblHeaders a:active, .tblHeaders a:visited, div.tools a:link, div.tools a:visited, div.tools a:active, .tblFooters a:link, .tblFooters a:active, .tblFooters a:visited {
  color: #0000ff
}

.tblHeaders a:hover, div.tools a:hover, .tblFooters a:hover {
  color: #ff0000
}

#tbl_maintenance li a {
  text-transform: uppercase;
  font-weight: normal
}

#tbl_maintenance li:before {
  content: "%";
  margin-right: 10px
}

table#tableFieldsId {
  width: 100%
}

#usersForm .width100 {
  margin-top: 0
}

#change_password_form table tr:after {
  display: none
}

#generated_pw {
  margin-left: 15px
}

/* Table stats */

div#tablestatistics table {
  float: left;
  margin-bottom: .5em;
  margin-right: 1.5em;
  margin-top: .5em;
  min-width: 16em
}

/* End table stats */

/* Server Privileges */

#tableuserrights td, #tablespecificuserrights td, #tabledatabases td {
  vertical-align: middle
}

/* End server privileges */

#structure-action-links a {
  margin-right: 1em
}

#create_table_form_minimal {
  display: block
}

#db_or_table_specific_priv .tblFooters {
  margin-top: -68px
}

.pma_table {
  margin-top: 0;
  border: none
}

.pma_table td {
  position: static
}

.pma_table th.draggable span, .pma_table tbody td span {
  display: block;
  overflow: hidden
}

.pma_hint {
  display: table-cell;
  position: relative;
  top: -1.5px
}

.pma_hint .icon {
    margin-left: .3em;
    margin-right: 0;
}

.pma_table tbody td span code span {
  display: inline
}

.insertRowTable td, .insertRowTable th {
  vertical-align: middle
}

table.show_create {
  margin-top: 1em
}

table.show_create td {
  border-right: 1px solid #bbb
}

#alias_modal table th {
  vertical-align: middle;
  padding-left: 1em
}

#alias_modal label.col-2 {
  min-width: 20%;
  display: inline-block
}

#alias_modal select {
  width: 25%;
  margin-right: 2em
}

#alias_modal label {
  font-weight: bold
}

/* styles for sortable tables created with tablesorter jquery plugin */
th.header {
  cursor: pointer
}

th.header .sorticon {
  width: 24px;
  height: 24px;
  display: inline-block;
  margin-left: 20px;
  margin-bottom: -6px
}

th.headerSortUp .sorticon, th.headerSortDown:hover .sorticon {
  -webkit-mask-image: url(<?php echo $theme->getImgPath('svg/sort-descending.svg');
  ?>);
  mask-image: url(<?php echo $theme->getImgPath('svg/sort-descending.svg');
  ?>);
  background-color: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>;
}

th.headerSortDown .sorticon, th.headerSortUp:hover .sorticon {
  -webkit-mask-image: url(<?php echo $theme->getImgPath('svg/sort-ascending.svg');
  ?>);
  mask-image: url(<?php echo $theme->getImgPath('svg/sort-ascending.svg');
  ?>);
  background-color: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>;
}
/* end of styles of sortable tables */
