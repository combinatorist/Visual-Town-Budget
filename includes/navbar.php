<?php
  global $selected_budget;
  $active_sections = $selected_budget -> meta['sections'];
?>

<h2 style="text-align: center"><?php echo $selected_budget -> meta['page_title']; ?></h2>


<div id="avb-menubar" >
  <div class="container" style="width: 100%">
    <div id="navbar-links" style="line-height:30px; background: #eee; padding: 15px; border: dotted 1px #aaa;">
      <div class="entry navbar-margin">

        <?php if(in_array("revenues", $active_sections)):?>
          <span class="menubutton section margin" data-section="revenues">
            <a onclick="switchSection('revenues')">Revenues</a>
          </span>
        <?php endif; ?>

        <?php if(in_array("expenses", $active_sections)):?>
          <span class="menubutton section margin" data-section="expenses">
            <a onclick="switchSection('expenses')">Expenses</a>
          </span>
        <?php endif; ?>

        <?php if(in_array("funds", $active_sections)):?>
          <span class="menubutton section margin" data-section="funds">
            <a id="navbar-funds" onclick="switchSection('funds')">Funds & Reserves</a>
          </span>
        <?php endif; ?>

      </div>

      <div class="entry" id="navbar-right" style="float:right;">
        <input id="searchbox" type="text" class="margin menubutton margin search" placeholder="Search">

        <div class="menubutton margin">
          <span> <i class="icon-th-large"></i> </span>
          <a id="navbar-map" href="javascript:avb.home.hide();switchMode('t'); "> Map view </a>
        </div>
        <div class="menubutton margin">
          <span> <i class="icon-th-list"></i> </span>
          <a id="navbar-table" href="javascript:avb.home.hide();switchMode('l'); "> Tabular view </a>
        </div>

        <!-- YEAR DROP -->
        <ul class="yeardrop nav menubutton">
          <li  class="yeardrop-container dropdown" style="display:none;">
            <a class="yeardrop-label dropdown-toggle" role="button" data-toggle="dropdown" href="#">Dropdown <b class="caret"></b></a>
            <ul class="yeardrop-list dropdown-menu vhscrollable" role="menu"></ul>
          </li>
          <li>
            <select class="yeardrop-container-mobile" style="display:none; width:100px; height:28px">
            </select>
          </li>
        </ul>

      </div>
    </div>
  </div>
</div>


<div style="float: right">

  <label  for="adjustForInflation"
          style="display: inline-block;line-height: 20px;padding-left: 5px;padding-top: 3px;font-size: 14px;"
          >Adjust For Inflation</label>

  <input type="checkbox"
        style="display: block;float: right;margin: 6px 4px;"
        id="adjustForInflation"/>
</div>
<div style="clear: both"></div>
