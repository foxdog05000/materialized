input[type=checkbox], input[type=radio] {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  -o-appearance: none;
  appearance: none;
  position: relative;
  right: 0;
  bottom: 0;
  left: 0;
  height: 20px;
  width: 20px;
  transition:all .15s ease-out 0s;
  color: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>;
  cursor: pointer;
  display: inline-block;
  margin: 0;
  top: 2px;
  outline: none;
  border-radius: 2px;
  border: 2px solid #737373;
  margin-right: 7px
}

input[type=checkbox]:before,input[type=checkbox]:after {
    position: absolute;
    content: "";
    background: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>;
    transition: all .2s ease-in-out
}

input[type=checkbox]:before {
    left: 2px;
    top: 6px;
    width: 0;
    height: 2px;
    transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    -o-transform: rotate(45deg)
}

input[type=checkbox]:after {
    right: 9px;
    bottom: 3px;
    width: 2px;
    height: 0;
    transform: rotate(40deg);
    -webkit-transform: rotate(40deg);
    -moz-transform: rotate(40deg);
    -ms-transform: rotate(40deg);
    -o-transform: rotate(40deg);
    transition-delay: .2s
}

input[type=checkbox]:checked:before {
    left: 1px;
    top: 10px;
    width: 6px;
    height: 2px
}

input[type=checkbox]:checked:after {
    right: 5px;
    bottom: 1px;
    width: 2px;
    height: 14px
}

input[type=checkbox]:indeterminate:before,input[type=checkbox]:indeterminate:after {
    width: 7px;
    height: 2px;
    transform: rotate(0);
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0)
}

input[type=checkbox]:indeterminate:before {
    left: 1px;
    top: 7px
}

input[type=checkbox]:indeterminate:after {
    right: 1px;
    bottom: 7px
}

input[type=checkbox]:checked, input[type=checkbox]:indeterminate {
    background: <?php echo $GLOBALS['cfg']['AccentColor'] ?>;
    border: 2px solid <?php echo $GLOBALS['cfg']['AccentColor'] ?>
}

input[type=radio] {
  border-radius: 50%;
}

input[type=radio]:checked:before {
    transform: scale(1);
}

input[type=radio]:before {
  content: "";
  display: block;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  margin: 3px;
  transform: scale(0);
  transition: all ease-out 250ms;
}

input[type=radio]:checked:before {
  background: <?php echo $GLOBALS['cfg']['AccentColor'] ?>
}

input[type=radio] {
  border: 2px solid <?php echo $GLOBALS['cfg']['AccentColor'] ?>
}

input[type=checkbox] + label, input[type=radio] + label,
input[type=checkbox] + strong, input[type=radio] + strong {
    vertical-align: .28em
}

input[type=text], input[type=password], input[type=number], textarea {
  font-family: <?php echo $GLOBALS['cfg']['FontFamily'] ?>;
  font-size: 14px;
  line-height: 1.3rem;
  font-weight: 400;
  letter-spacing: .00937em;
  text-decoration: inherit;
  text-transform: inherit;
  padding: 7px 12px;
  border: none;
  border-bottom: 1px solid rgba(0,0,0,.42);
  border-radius: 0;
  background: none;
  margin-right: 7px;
}

input[type=submit], input[type=reset], input[type=button] {
  color: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>;
  background-color: <?php echo $GLOBALS['cfg']['AccentColor'] ?>;
  font-family: <?php echo $GLOBALS['cfg']['FontFamily'] ?>;
  font-size: 14px;
  font-weight: 500;
  min-width: 64px;
  height: 36px;
  border: none;
  outline: none;
  margin-left: 5px;
  cursor: pointer;
  padding: 0 16px;
  line-height: inherit;
  user-select: none;
  -webkit-appearance: none;
  overflow: hidden;
  vertical-align: middle;
  border-radius: 4px;
  letter-spacing: .08929em;
  text-decoration: none;
  text-transform: uppercase;
  box-sizing: border-box;
}

.queryboxf fieldset {
  top: -15px;
  margin-bottom: 0
}

#boxContainer fieldset {
  margin: 5px
}

fieldset fieldset {
  margin-bottom: 20px;
  min-width: 49.5%
}

tr.noclick input[type=checkbox] {
  opacity: .5
}

fieldset.tblFooters {
  margin: 20px 0;
  text-align: right
}

fieldset .formelement {
  float: left;
  margin-right: 0.5em
}

fieldset div[class=formelement] {
  white-space: normal
}

fieldset .group-header th {
  background: <?php echo $GLOBALS['cfg']['BgTwo'] ?>;
}

fieldset .group-header+tr th {
  padding-top: .6em
}

fieldset .group-field-1 th, fieldset .group-header-2 th {
  padding-left: 1.5em
}

fieldset .group-field-2 th, fieldset .group-header-3 th {
  padding-left: 3em
}

fieldset .group-field-3 th {
  padding-left: 4.5em
}

fieldset .disabled-field th, fieldset .disabled-field th small, fieldset .disabled-field td {
  color: #666;
  background-color: #ddd
}

form.create_table_form fieldset.tblFooters, form#multi_edit_central_columns fieldset.tblFooters, .new_central_col table {
  background: none;
  border: none
}

from.create_table_form, form#untrackedForm {
  padding: 0!important
}

#untrackedForm table {
  margin-top: 20px
}

#untrackedForm #untrackedForm_checkall {
  margin-left: 37px
}

#untrackedForm #untrackedForm_checkall + label, #untrackedForm i, #untrackedForm .mult_submit {
  margin: 20px 0
}

form#tableOptionsForm input[name="comment"], form#tableOptionsForm select[name="tbl_collation"] {
  width: 130px
}

/* Table structure styles */

#fieldsForm ul.table-structure-actions {
  margin: 0;
  padding: 0;
  list-style: none
}

#fieldsForm ul.table-structure-actions li {
  float: left;
  margin-right: 0.3em
  /* same as padding of "table td" */
}

#fieldsForm ul.table-structure-actions .submenu li {
  padding: 0;
  margin: 0
}

#fieldsForm ul.table-structure-actions .submenu li:not(.primary) a, #fieldsForm ul.table-structure-actions .submenu .primary, #fieldsForm ul.table-structure-actions .submenu .spatial {
  padding: 0 15px;
  line-height: 40px
}

#fieldsForm ul.table-structure-actions .submenu li:hover a,
#fieldsForm ul.table-structure-actions .submenu .primary:hover,
#fieldsForm ul.table-structure-actions .submenu .spatial:hover {
  background: #eee
}

#fieldset_zoom_search table th, #fieldset_zoom_search table td {
  line-height: 35px
}

#fieldset_table_qbe table th, #fieldset_table_qbe table td {
  line-height: 35px
}

form.append_fields_form .tblFooters {
  background: none;
  border: none
}

.checkcall_box {
  top: 5px;
  margin-right: 5px
}

#table_columns input[type="text"], #table_columns input[type="password"], #table_columns input[type="number"], #table_columns input[type="date"], #table_columns select {
  width: 10em;
  box-sizing: border-box;
  -ms-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box
}

#table_columns select {
  margin: 6px
}

#placeholder {
  position: relative;
  border: 1px solid #aaa;
  float: right;
  overflow: hidden
}

.placeholderDrag {
  cursor: move
}

#placeholder .button {
  position: absolute
}

.doubleFieldset fieldset {
  width: 48%;
  float: left;
  padding: 0
}

.doubleFieldset fieldset.left {
  margin-right: 1%
}

.doubleFieldset fieldset.right {
  margin-left: 1%
}

.modal-copy input {
  display: block;
  width: 100%;
  margin-top: 1.5em;
  padding: .3em 0
}

fieldset#fieldset_delete_user_footer {
  margin-top: -30px
}

#parameterized, .new_central_col {
  margin-top: 20px
}

#sqlquerycontainerfull a{
  vertical-align: .2em
}

.no_bullets form, #li_select_fontsize form, .group form, .tools form, .ui-dialog .ui-dialog-content form, #tableFilter form, table form, .relationalTable {
  background: transparent!important;
  box-shadow: none!important;
  border: 0;
  border-radius: 0;
  margin: 0;
  padding: 0
}

.config-form, form[name="resultsForm"] {
  padding: 0
}

.no_bullets form, #li_select_fontsize form {
  display: initial
}

#database_specific_priv table {
  margin: 0 0 20px;
  border: 1px solid #ccc;
  border-radius: 2px
}

form[name="resultsForm"] div.print_ignore {
  padding: 25px 29px 15px
}

form[name="resultsForm"] div.print_ignore:before {
  content: "";
  position: absolute;
  height: 1px;
  left: 18px;
  right: 18px;
  background: #E7E7E7;
  margin-top: -15px
}
