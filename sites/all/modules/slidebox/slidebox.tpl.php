<div id="slidebox">
  <a class="close"></a>
  <p><?php t('Next post'); ?></p>
  <h2><?php echo $title; ?></h2>
  <?php echo l(t("Read More &raquo;"), "node/{$nid}", array('html' => TRUE, 'attributes' => array('class' => array('more')))); ?>
</div>
<div id="slidebox_manual">
  <a class="open"></a>
</div>
<div id="slidebox_cookie">
  <a class="set"><?php echo t('Do not show recommendations again this session.'); ?></a>
</div>

