<?php
$nrmlString = 5;
?>
<script type=”text/javascript”>
var normalText = ‘<?php echo $nrmlString; ?>’;
console.log(normalText);
function printaddition(userPHPNumber){
alert(parseInt(userPHPNumber)+5);
}
printaddition(normalText);
</script>