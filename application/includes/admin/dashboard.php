<div id="main" class="liquid">
  <? exec_action('mw_admin_dashboard_main'); ?>
  <div class="mw_clear" style="padding-bottom: 20px;">&nbsp;</div>
  <div class="quick-lists">
    <div class="quick-links-case left">
      <h2>Quick Add</h2>
      <ul class="mw-quick-links">
        <li><a href="<?php print admin_url('view:content'); ?>#action=new:page"><span class="mw-ui-btn-plus">&nbsp;</span><span class="ico ipage"></span><span>New Page</span></a></li>
        <li><a href="<?php print admin_url(); ?>"><span class="mw-ui-btn-plus">&nbsp;</span><span class="ico ipost"></span><span>New Post</span></a></li>
        <li><a href="<?php print admin_url(); ?>"><span class="mw-ui-btn-plus">&nbsp;</span><span class="ico icategory"></span><span>New Category</span></a></li>
        <li><a href="<?php print admin_url(); ?>"><span class="mw-ui-btn-plus">&nbsp;</span><span class="ico iproduct"></span><span>New Product</span></a></li>
      </ul>
    </div>
    <div class="quick-links-case">
      <h2>Quick Links</h2>
      <ul class="mw-quick-links left">
        <? exec_action('mw_admin_dashboard_quick_link'); ?>
        <li><a href="<?php print admin_url(); ?>"><span class="ico imanage-website"></span><span>Manage Website</span></a></li>
        <li><a href="<?php print admin_url(); ?>"><span class="ico imanage-module"></span><span>Manage Modules</span></a></li>
      </ul>
    </div>
    <div class="quick-links-case">
      <ul class="mw-quick-links left">
        <li><a href="<?php print admin_url(); ?>"><span class="ico iupgrade"></span><span>Upgrades</span></a></li>
        <li><a href="<?php print admin_url(); ?>"><span class="ico inotification"></span><span>Notifications</span></a></li>
        <li><a href="<?php print admin_url(); ?>"><span class="ico iupload"></span><span>Upload Files</span></a></li>
        <? if(is_module('updates')): ?>
        <li><a href="<?php print admin_url(); ?>view:updates"><span class="ico iupdate"></span><span>Updates</span></a></li>
        <? endif; ?>
        <? exec_action('mw_admin_dashboard_quick_link2'); ?>
       </ul>
    </div>
    <div class="quick-links-case">
      <ul class="mw-quick-links left">
        <li><a href="<?php print admin_url(); ?>"><span class="ico ireport"></span><span>Report a Bug</span></a></li>
        <li><a href="<?php print admin_url(); ?>"><span class="ico isuggest"></span><span>Suggest feature</span></a></li>
        <? if(is_module('help')): ?>
        <li><a href="<?php print admin_url(); ?>view:help"><span class="ico ihelp"></span><span>Help &amp; Support</span></a></li>
        <? endif; ?>
         <? exec_action('mw_admin_dashboard_help_link'); ?>
      </ul>
    </div>
  </div>
  <br />
  <br />
  <br />
</div>
