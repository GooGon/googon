<!-- Web Title-->
<title>GooGon Testing Website</title>

<?php 
#Error Handling
if (!isset($page_name)) {
    $page_name = null;
}
?>

<?php if($page_name == 'sign_in'){ ?>
    <!--Style - Sign In (css) -->
    <link rel="stylesheet" href="<?php echo URL; ?>style/sign_in.css">
    <link rel="stylesheet" href="<?php echo URL; ?>style/footer.css">
<?php } else {?>
    <!-- Style - General (css) -->
    <link rel="stylesheet" href="<?php echo URL; ?>style/utilities.css">
    <link rel="stylesheet" href="<?php echo URL; ?>style/nav.css">
    <link rel="stylesheet" href="<?php echo URL; ?>style/section.css">
    <link rel="stylesheet" href="<?php echo URL; ?>style/footer.css">
<?php } ?>