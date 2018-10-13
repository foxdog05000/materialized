#floating_menubar {
  background-color: <?php echo $GLOBALS['cfg']['PrimaryColor'] ?>;
}

/* Topmenu */

#topmenu .error {
  background: #eee;
  border: 0!important;
  color: #aaa
}

#topmenu, #topmenu2 {
  display: flex;
  list-style-type: none;
  margin: 0
}

#topmenu .icon, #topmenu2 .active .icon, #topmenu2 a:hover .icon {
  background-color: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>
}

.tabs {
  list-style-type: none;
  margin: 0
}

ul#topmenu li, ul#topmenu2 li {
  float: left;
  margin: 0;
  vertical-align: middle;
}

.menucontainer {
  height: 40px;
  box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.2)
}

.scrollindicator {
  display: none
}

#topmenu .tabactive, #topmenu a:hover {
  border-bottom: 3px solid <?php echo $GLOBALS['cfg']['AccentColor'] ?>;
  font-weight: 500;
}

#topmenu2 {
  margin-bottom: 15px;
  padding: 0;
  overflow: hidden;
  overflow: auto;
  clear: both
}

#topmenu2 a {
  display: block;
  margin: 6px;
  border-radius: 50px;
  padding: 5px 15px;
  line-height: 20px;
  white-space: nowrap;
  color: <?php echo $GLOBALS['cfg']['GreyDarkColor'] ?>;
  text-transform: uppercase;
  background-color: rgba(0,0,0,.06)
}

#topmenu2 .tabactive, #topmenu2 a:hover {
  background: <?php echo $GLOBALS['cfg']['AccentColor'] ?>;
  color: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>;
  font-weight: 500
}

#topmenu2 .icon {
  width: 18px;
  height: 18px;
  vertical-align: -4.5px
}

#topmenu2::-webkit-scrollbar, .responsivetable::-webkit-scrollbar, #table_columns::-webkit-scrollbar, .ui-dialog .ui-dialog-content::-webkit-scrollbar, #trackedForm::-webkit-scrollbar {
  width: 10px;
  height: 10px
}

#topmenu2::-webkit-scrollbar-thumb, .responsivetable::-webkit-scrollbar-thumb, #table_columns::-webkit-scrollbar-thumb, .ui-dialog .ui-dialog-content::-webkit-scrollbar-thumb, #trackedForm::-webkit-scrollbar-thumb {
  background-color: rgba(0,0,0,.2);
  visibility: hidden
}

#topmenu2::-webkit-scrollbar-track, .responsivetable::-webkit-scrollbar-track, #table_columns::-webkit-scrollbar-track, .ui-dialog .ui-dialog-content::-webkit-scrollbar-track, #trackedForm::-webkit-scrollbar-track {
  background-color: #e6e6e6;
  visibility: hidden
}

#topmenu2:hover::-webkit-scrollbar-thumb, .responsivetable:hover::-webkit-scrollbar-thumb,
#table_columns:hover::-webkit-scrollbar-thumb, .ui-dialog .ui-dialog-content:hover::-webkit-scrollbar-thumb, #trackedForm:hover::-webkit-scrollbar-thumb {
  visibility: visible
}

#topmenu2:hover::-webkit-scrollbar-track, .responsivetable:hover::-webkit-scrollbar-track,
#table_columns:hover::-webkit-scrollbar-track, .ui-dialog .ui-dialog-content:hover::-webkit-scrollbar-track, #trackedForm:hover::-webkit-scrollbar-track {
  visibility: visible
}

#topmenu {
  padding-left: 20px;
  padding-right: 20px
}

ul#topmenu ul.only {
  left: 0
}

ul#topmenu a, ul#topmenu span {
  padding: 0 16px;
  line-height: 40px;
  font-size: 16px;
  color: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>;
  font-weight: normal;
  margin-top: -3px
}

ul#topmenu ul li:first-child a {
  border-width: 0
}

ul#topmenu>li>a:hover, ul#topmenu>li>.tabactive {
  text-decoration: none;
  color: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>
}

ul#topmenu ul a:hover, ul#topmenu ul .tabactive {
  text-decoration: none
}

ul#topmenu2 a, ul#topmenu2 a:hover {
  text-decoration: none
}

ul#topmenu>li.active {
  border-right: 0
}

#topmenucontainer {
  width: 100%
}

ul#topmenu ul.notonly a{
  color: #444;
  border: none;
  margin: 0
}

/* End Topmenu */

/* Calendar */

table.calendar {
  width: 100%
}

table.calendar td {
  text-align: center
}

table.calendar td a {
  display: block
}

table.calendar td a:hover {
  background-color: #CCFFCC
}

table.calendar th {
  background-color: #D3DCE3
}

table.calendar td.selected {
  background-color: #FFCC99
}

img.calendar {
  border: none
}

form.clock {
  text-align: center
}

/* End Calendar */

/* Server Info */

#serverinfo {
  padding: 15px 0 15px 65px;
  overflow: hidden;
  margin: 0;
  font-family: <?php echo $GLOBALS['cfg']['FontFamily'] ?>;
  color: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>;
  line-height: 28px
}

#serverinfo .item {
  font-family: <?php echo $GLOBALS['cfg']['FontFamily'] ?>;
  white-space: nowrap;
  color: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>;
  font-size: 15px
}

#serverinfo a:hover {
  text-decoration: none
}

#serverinfo a:first-child {
  display: none!important
}

#serverinfo .icon {
  display: none
}

#serverinfo .separator {
  margin-right: 5px
}

#serverinfo img {
  margin: 0 .1em 0;
  margin-left: .2em
}

/* End Server Info */

/* User Privileges */

#fieldset_add_user_login div.item {
  padding: 10px 0
}

#fieldset_add_user_login input {
  margin: 0 15px
}

#fieldset_add_user_login span.options input {
  width: auto
}

#fieldset_add_user_login span.options input[type=button] {
  margin: 4px
}

#fieldset_user_priv div.item {
  float: left;
  width: 9em;
  max-width: 100%
}

#fieldset_user_priv div.item div.item {
  float: none
}

#fieldset_user_priv div.item label {
  white-space: nowrap
}

#fieldset_user_priv div.item select {
  width: 100%
}

#fieldset_user_global_rights fieldset {
  float: left
}

#fieldset_user_group_rights fieldset {
  float: left;
  margin-top: 20px
}

/* End user privileges */

/* Server Status */

.linkElem:hover {
  text-decoration: underline;
  color: <?php echo $GLOBALS['cfg']['AccentColor'] ?>;
  cursor: pointer
}

h3#serverstatusqueries span {
  font-size: 60%;
  display: inline
}

div#serverStatusTabs {
  margin-top: 1em
}

.buttonlinks {
  float: right;
  white-space: nowrap
}

div#serverstatusquerieschart {
  float: left;
  width: 500px;
  height: 350px;
  padding-left: 30px
}

table#serverstatusqueriesdetails th {
  min-width: 35px
}

table#serverstatusvariables {
  width: 100%;
  margin-bottom: 1em
}

table#serverstatusvariables .name {
  width: 18em;
  white-space: nowrap
}

table#serverstatusvariables .value {
  width: 6em
}

div#serverstatus table tbody td.descr a, div#serverstatus table .tblFooters a {
  white-space: nowrap
}

div.tabLinks {
  margin-left: 0.3em;
  float: left;
  padding: 5px 0
}

div.tabLinks a, div.tabLinks label {
  margin-right: 7px
}

div.tabLinks .icon {
  margin: -0.2em 0.3em 0 0
}

.popupContent {
  display: none;
  position: absolute;
  overflow: hidden;
  border-radius: 2px;
  padding: 16px;
  box-shadow: <?php echo $GLOBALS['cfg']['Shadow'] ?>;
  background-color: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>;
  z-index: 2
}

div#logTable {
  padding-top: 10px;
  clear: both
}

div#logTable table {
  width: 100%
}

div#queryAnalyzerDialog {
  min-width: 700px
}

div#queryAnalyzerDialog div.CodeMirror-scroll {
  height: auto
}

div#queryAnalyzerDialog div#queryProfiling {
  height: 300px
}

div#queryAnalyzerDialog td.explain {
  width: 250px
}

div#queryAnalyzerDialog table.queryNums {
  display: none
  border: 0;
  text-align: left
}

.ajaxContent {
  margin-top: 20px
}

.smallIndent {
  padding-left: 7px;
  margin-bottom: 10px
}

#serverstatus h3 {
  margin: 15px 0;
  font-weight: normal;
  color: #999;
  font-size: 1.7em
}

/* End Server Status */

/* Chart */

div.liveChart {
  clear: both;
  min-width: 500px;
  height: 400px;
  padding-bottom: 80px
}

#addChartDialog input[type="text"] {
  margin: 0;
  padding: 3px
}

div#chartVariableSettings {
  margin-left: 10px
}

table#chartGrid div.monitorChart {
  background: <?php echo $GLOBALS['cfg']['ThBackground'] ?>;
  box-shadow: 0 2px 2px <?php echo $GLOBALS['cfg']['WhiteColor'] ?>;
  overflow: hidden
}

div#profilingchart {
  width: 850px;
  height: 370px;
  float: left
}

#resizer {
  border: 1px solid silver
}

#inner-resizer {
  padding: 10px
}

.chartOption {
  float: left;
  margin-right: 40px
}

/* End Chart */

/* Server Variables */

#serverVariables .var-action {
  width: 200px
}

#serverVariables .var-name.session {
  font-weight: normal;
  font-style: italic
}

#serverVariables .var-value {
  text-align: right
}

#serverVariables .var-doc {
  overflow: visible;
  float: right
}

#serverVariables .editLink {
  padding-right: 1em;
  float: left;
  font-family: sans-serif
}

#serverVariables .serverVariableEditor {
  width: 100%;
  overflow: hidden
}

#serverVariables .serverVariableEditor input {
  width: 100%;
  margin: 0 0.5em;
  box-sizing: border-box;
  -ms-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  height: 2.2em
}

#serverVariables .serverVariableEditor div {
  display: block;
  overflow: hidden;
  padding-right: 1em
}

#serverVariables .serverVariableEditor a {
  float: right;
  margin: 0 0.5em;
  line-height: 2em
}

/* End Server Variables */

/* Querybox */

#togglequerybox {
  margin: 0 10px
}

#sectionlinks {
  padding: 16px 0
}

#sectionlinks a, .buttonlinks a, a.button {
  line-height: 35px;
  margin-right: 7px;
  padding: 6px 10px;
  border-radius: 2px;
  text-decoration: none;
  background: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>;
  white-space: nowrap;
  box-shadow: 0 1px 1px #bbb
}

div#sqlquerycontainer {
  float: left;
  width: 69%
}

div#tablefieldscontainer {
  float: right;
  width: 29%;
  margin-top: -20px
}

div#tablefieldscontainer select {
  width: 100%;
  background: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>;
  max-width: initial;
  border: 1px solid #ccc
}

textarea#sqlquery {
  width: 100%;
  border: 1px solid #aaa;
  padding: 5px;
  font-family: inherit
}

textarea#sql_query_edit {
  height: 7em;
  width: 95%;
  display: block
}

div#queryboxcontainer div#bookmarkoptions {
  margin-top: .5em
}

#queryboxcontainer legend a {
  vertical-align: .1em
}

/* End Querybox */

/* Main Page */

#mysqlmaininformation, #pmamaininformation {
  float: left;
  width: 49%
}

#maincontainer ul {
  list-style-type: disc;
  vertical-align: middle;
  color: <?php echo $GLOBALS['cfg']['ThColor'] ?>;
}

#maincontainer ul li {
  line-height: 1.5
}

#full_name_layer {
  position: absolute;
  padding: 2px;
  margin-top: -3px;
  z-index: 801;
  border: solid 1px #888;
  background: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>
}

/* End main page */

/* Iconic view for ul items */

li br {
  display: none
}

li.no_bullets {
  list-style-type: none!important
}

li#li_mysql_client_version {
  overflow: hidden;
  text-overflow: ellipsis
}

li#li_create_database form {
  margin-bottom: 20px;
  display: inherit
}

li#li_create_database form p {
  font-size: 24px;
  display: flex;
  align-items: center;
  margin-bottom: 15px;
  color: <?php echo $GLOBALS['cfg']['PrimaryColor'] ?>
}

li#li_create_database form label .icon {
  display: none
}

li#li_create_database form input[type=submit] {
  float: right;
  margin-top: -5px;
}

#li_select_mysql_collation, #li_select_theme, #li_select_lang, #li_select_fontsize, #li_user_preferences {
  display: block;
  padding: 10px;
  font-family: <?php echo $GLOBALS['cfg']['FontFamilyLight'] ?>
}

li#li_select_mysql_collation select {
  margin: 0!important
}

li#li_select_mysql_collation {
  display: block;
  padding: 10px;
  font-family: <?php echo $GLOBALS['cfg']['FontFamilyLight'] ?>
}

li#li_change_password {
  display: block;
  padding: 10px!important;
  padding-left: 20px;
  font-family: <?php echo $GLOBALS['cfg']['FontFamilyLight'] ?>
}

li#li_switch_dbstats {
  background-color: #f6f6f6;
  padding: 10px;
  border: 1px solid <?php echo $GLOBALS['cfg']['BorderColor'] ?>;
  display: block
}

form i{
  vertical-align: .28em
}

#updateTemplate, #deleteTemplate, #createTemplate {
  float: right;
  margin-top: -3px;
  margin-left: 25px
}

/* End iconic view for ul items */

#body_browse_foreigners {
  background: <?php echo $GLOBALS['cfg']['AccentColor'] ?>;
  margin: .5em .5em 0 .5em
}

#bodyquerywindow {
  background: <?php echo $GLOBALS['cfg']['AccentColor'] ?>
}

#bodythemes {
  width: 500px;
  margin: auto;
  text-align: center
}

#bodythemes img {
  border: .1em solid #000
}

#bodythemes a:hover img {
  border: .1em solid red
}

#fieldset_select_fields {
  float: left
}

#selflink {
  clear: both;
  display: block;
  margin: 20px 0;
  padding-top: 10px;
  border-top: 1px solid silver;
  text-align: right
}

#table_innodb_bufferpool_usage, #table_innodb_bufferpool_activity {
  float: left
}

#div_mysql_charset_collations table th, #div_mysql_charset_collations table td {
  padding: 10px 18px 
}

.operations_half_width {
  width: 100%;
  float: left;
  margin-bottom: 10px
}

.operations_full_width {
  width: 100%;
  clear: both
}

#qbe_div_table_list {
  float: left
}

#qbe_div_sql_query {
  float: left
}

label.desc {
  width: 30em;
  float: left
}

label.desc sup {
  position: absolute
}

.sqlOuter code.sql, div.sqlvalidate, #inline_editor_outer {
  display: block;
  padding: 1em;
  margin: 1em 0;
  overflow: auto;
  background-color: <?php echo $GLOBALS['cfg']['BackgroundColor'] ?>;
  direction: ltr
}

#main_pane_left {
  min-width: 260px;
  float: left
}

#main_pane_right {
  overflow: hidden;
  min-width: 160px;
  padding-left: 1em;
  padding-bottom: 10px
}

#main_pane_right ul {
  margin-left: 20px
}

.group {
  border: 1px solid <?php echo $GLOBALS['cfg']['BorderColor'] ?>;
  padding: 20px;
  border-radius: 2px;
  margin-bottom: 1.5em;
  margin-right: .5em
}

.group input[type=submit] {
  float: right;
  margin-top: 20px
}

.group h2 {
  color: <?php echo $GLOBALS['cfg']['AccentColor'] ?>;
  font-size: 25px;
  font-weight: normal;
  font-family: <?php echo $GLOBALS['cfg']['FontFamilyLight'] ?>;
  margin-top: 0;
  margin-bottom: 0.6em
}

.group-cnt {
  padding: 0 0 0 0.5em;
  display: inline-block;
  width: 98%
}

.group-cnt p {
  margin: 5px 0 15px 30px
}

textarea#partitiondefinition {
  height: 3em
}

/* For elements that should be revealed only via js */

.hide {
  display: none
}

#list_server {
  list-style-image: none;
  padding: 0
}

/* Progress Bar styles */

div.upload_progress {
  width: 400px;
  margin: 3em auto;
  text-align: center
}

div.upload_progress_bar_outer {
  width: 202px;
  position: relative;
  margin: 0 auto 1em;
  color: <?php echo $GLOBALS['cfg']['MainColor'] ?>
}

div.upload_progress_bar_inner {
  background-color: <?php echo $GLOBALS['cfg']['AccentColor'] ?>;
  width: 0;
  height: 12px;
  margin: 1px;
  overflow: hidden;
  position: relative;
    <?php if ($GLOBALS['cfg']['BrowseMarkerEnable']) { ?>
  color: <?php echo $GLOBALS['cfg']['BrowseMarkerColor'] ?>
    <?php } ?>
}

div.upload_progress_bar_outer div.percentage {
  position: absolute;
  top: 0;
  left: 0;
  width: 202px
}

div.upload_progress_bar_inner div.percentage {
  top: -1px;
  left: -1px
}

div#statustext {
  margin-top: .5em
}

.width100, #rulesFired {
  margin-top: 20px
}

/* End Progress Bar */

/* Validation error message styles */

input[type=text].invalid_value, input[type=password].invalid_value, input[type=number].invalid_value, input[type=date].invalid_value .invalid_value {
  background: #ffcccc;
}

/* Ajax notification styling */

.ajax_notification {
  max-width: 500px;
  bottom: 25px;
  right: 25px;
  position: fixed;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-pack: start;
  justify-content: flex-start;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  border-radius: 3px;
  background-color: #323232;
  will-change: transform;
  font-size: 1rem;
  line-height: 1.5rem;
  font-weight: 400;
  letter-spacing: .03125em;
  text-decoration: inherit;
  text-transform: inherit;
  min-height: 48px;
  padding: 0 24px;
  color: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>;
  overflow: hidden;
  box-shadow: <?php echo $GLOBALS['cfg']['Shadow'] ?>;
  z-index: 100000
}

.ajax_notification div {
  margin: 0;
  background: transparent;
  box-shadow: none;
  color: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>
}

.dismissable {
  /*bottom -50px*/
}

#index_div {
  width: auto
}

#index_div .responsivetable {
  margin-top: 20px
}

#loading_parent {
  /* Need this parent to properly center the notification division */
  position: relative;
  width: 100%
}

/* Export and Import styles */

.export_table_list_container {
  display: inline-block;
  max-height: 20em;
  overflow-y: scroll
}

.export_table_select th {
  text-align: center;
  vertical-align: middle
}

.export_table_select .all {
  font-weight: bold;
}

.export_structure, .export_data {
  text-align: center
}

.export_table_name {
  vertical-align: middle
}

.exportoptions h3, .importoptions h3 {
  border-bottom: 1px #ccc solid;
  margin-bottom: 20px;
  padding-bottom: 7px
}

.exportoptions ul, .importoptions ul, .format_specific_options ul {
  list-style-type: none;
  margin-bottom: 15px
}

.exportoptions li, .importoptions li {
  margin: 7px
}

#csv_options label.desc, #ldi_options label.desc, #latex_options label.desc, #output label.desc {
  float: left;
  width: 15em
}

.exportoptions #buttonGo, .importoptions #buttonGo {
  padding: 5px 12px;
  text-decoration: none;
  cursor: pointer;
  margin: 0;
  float: right
}

.format_specific_options h3 {
  margin: 10px 0 0;
  margin-left: 10px;
  border: 0
}

.format_specific_options {
  border: 1px solid #999;
  margin: 7px 0;
  padding: 3px
}

p.desc {
  margin: 5px
}

/* Export styles only */

select#db_select, select#table_select {
  width: 400px
}

.export_sub_options h4 {
  border-bottom: 1px solid #999
}

.export_sub_options li.subgroup {
  display: inline-block;
  margin-top: 0
}

.export_sub_options li {
  margin-bottom: 0
}

#output_quick_export {
  display: none
}

/* Import styles only */

.importoptions #import_notification {
  margin: 10px 0;
  font-style: italic
}

input#input_import_file {
  margin: 5px
}

.formelementrow {
  margin: 15px 0
}

#popup_background {
  display: none;
  position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: #000;
  z-index: 1000;
  overflow: hidden
}

/* Indexes */

#index_frm .index_info input, #index_frm .index_info select {
  width: 14em;
  box-sizing: border-box;
  -ms-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box
}

#index_frm .index_info div {
  padding: .2em 0
}

#index_frm .index_info .label {
  float: left;
  min-width: 12em
}

#index_frm .slider {
  width: 10em;
  margin: .6em;
  float: left
}

#index_frm .add_fields {
  float: left
}

#index_frm .add_fields input {
  margin-left: 1em
}

#index_frm input {
  margin: 0
}

#index_frm td {
  vertical-align: middle
}

table#index_columns {
  width: 100%
}

table#index_columns select {
  width: 85%;
  float: right
}

#move_columns_dialog div {
  padding: 1em
}

#move_columns_dialog ul {
  list-style: none;
  margin: 0;
  padding: 0
}

#move_columns_dialog li {
  background: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>;
  border: 1px solid #aaa;
  color: <?php echo $GLOBALS['cfg']['ThColor'] ?>;
  font-weight: bold;
  margin: .4em;
  padding: .2em
}

#fieldset_add_user {
  margin: 20px 0
}

fieldset .item {
  margin-bottom: 5px
}

/* Config Forms */
.config-form {
  border: 1px solid <?php echo $GLOBALS['cfg']['BorderColor'] ?>;
  border-radius: 2px
}

.config-form ul.tabs {
  display: inline-block;
  width: 100%;
  padding: 0;
  list-style: none;
  background: <?php echo $GLOBALS['cfg']['PrimaryColor'] ?>
}

.config-form ul.tabs:after {
  display: none
}

.config-form ul.tabs li {
  display: inline-block
}

.config-form ul.tabs li a {
  display: inline-block;
  color: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>;
  padding: 0 16px;
  font-size: 14px;
  line-height: 38px
}

.config-form ul.tabs li.active a, .config-form ul.tabs li a:hover, .config-form ul.tabs li a:active {
  background: rgba(0,0,0,.16);
  font-weight: 500;
  text-decoration: none
}

.config-form fieldset {
  margin-top: 0;
  padding: 0;
  clear: both;
  background: none
}

.config-form legend {
  display: none
}

.config-form fieldset p {
  margin: 0;
  padding: 10px;
  background: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>;
  font-family: <?php echo $GLOBALS['cfg']['FontFamilyLight'] ?>;
  font-size: 16px
}

.config-form fieldset .errors {
  /* form error list */
  margin: 0 -2px 1em;
  padding: .5em 1.5em;
  background: #FBEAD9;
  border-width: 1px 0;
  list-style: none;
  font-family: sans-serif;
  font-size: small
}

.config-form fieldset .inline_errors {
  /* field error list */
  margin: .3em .3em .3em;
  margin-left: 0;
  padding: 0;
  list-style: none;
  color: #9a0000;
  font-size: small
}

.config-form fieldset table {
  border: none
}

.config-form fieldset label {
  font-weight: normal;
  vertical-align: bottom
}

.config-form fieldset textarea, .insertRowTable textarea {
  margin: 5px;
  padding: 5px
}

.config-form fieldset .disabled-notice {
  font-size: 80%;
  text-transform: uppercase;
  color: #e00;
  cursor: help
}

.config-form fieldset th small {
  display: block;
  font-weight: normal;
  font-family: sans-serif;
  font-size: x-small;
  color: #444
}

.config-form .lastrow {
  padding: 1em;
  text-align: right
}

.config-form .lastrow input {
  margin-right: 5px
}

.config-form span.checkbox {
  padding: 2px;
  display: inline-block
}

.config-form .custom {
  /* customized field */
  background: #ffc
}

.config-form span.checkbox.custom {
  padding: 1px;
  border: 1px #edec90 solid;
  background: #ffc
}

.config-form .field-error {
  border-color: #a11!important
}

.config-form input[type="text"], .config-form input[type="password"], .config-form input[type="number"], .config-form select, .config-form textarea {
  font-family: <?php echo $GLOBALS['cfg']['FontFamily'] ?>;
  font-size: 1rem;
  line-height: 1.75rem;
  font-weight: 400;
  letter-spacing: .00937em;
  text-decoration: inherit;
  text-transform: inherit;
  padding: 6px 12px;
  border: none;
  border-bottom: 1px solid rgba(0,0,0,.42);
  border-radius: 0;
  background: none
}

.config-form .field-comment-mark {
  font-family: serif;
  color: #007;
  cursor: help;
  padding: 0 .2em;
  font-weight: bold;
  font-style: italic
}

.config-form .field-comment-warning {
  color: #a00
}

.config-form dd {
  margin-left: .5em
}

.config-form dd:before {
  content: "\25B8"
}

/* Export &amp; Import */

#export_templates .floatleft {
  margin-bottom: 20px
}

.exportoptions li, .importoptions li, select#plugins, .exportoptions#databases_and_tables div {
  margin: 16px 9px!important
}

#export_templates .floatleft #templateName, #export_templates .floatleft label[for="template"], select#plugins, .exportoptions select#db_select {
  margin-left: 0
}

/* Central Columns */

table.navigation.nospacing.nopadding {
  width: auto!important;
  max-width: 100%!important
}

/* Table Search */

fieldset#fieldset_table_qbe {
  margin-bottom: 20px
}

fieldset#fieldset_table_search a.ajax {
  margin-left: 20px
}

/* Others */

h2 .nowrap {
  display: none
}

div h2 {
  margin-top: 0
}

p.print_ignore {
  padding: 15px;
  margin: -20px 0 20px
}

.prefsmanage_opts .localStorage-empty .notice, .prefsmanage_opts .localStorage-empty .notice {
  margin-top: 20px
}

.slide-wrapper {
  margin-top:15px
}

#fieldset_user_global_rights input[type=checkbox] {
  margin-left: 10px
}

.checkall_box + label, .sub_checkall_box + label {
  vertical-align: 0!important
}

#div_view_options {
  background: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>
}

/* Fix element position for demo server */

#pma_navigation #serverChoice, #pma_navigation #databaseList, #pma_navigation div.pageselector.dbselector {
  margin-top: 10px
}

li.fast_filter.db_fast_filter {
  margin-top: 20px;
  margin-left: -8px!important
}

/* End */
