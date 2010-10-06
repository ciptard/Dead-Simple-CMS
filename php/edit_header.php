<link rel="stylesheet" type="text/css" href="<?php echo $url.'css/screen.css'; ?>" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo $url.'css/e.css'; ?>" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo $url.'css/jquery.wysiwyg.css'; ?>" media="screen" />

<script src="<?php echo $url.'js/jquery.min.js'; ?>" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $url.'js/jquery.wysiwyg.js'; ?>" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $url.'js/jquery.jeditable.js'; ?>" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $url.'js/jquery.jeditable.wysiwyg.js'; ?>" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript" charset="utf-8">

$(function() {

$('.content').editable('<?php echo $url.'php/save.php'; ?>', { 
    indicator : '<img src="<?php echo $url.'img/indicator.gif'; ?>">',
    type      : 'wysiwyg',
    width     : 'auto',
    height    : 'auto',
    onblur    : 'ignore',
    submit    : 'Save',
    cancel    : 'Cancel'
  });

});
</script>