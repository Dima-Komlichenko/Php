<?php
    if(isset($_POST['color'])) {
        $spanBackground = $_POST['color'][0]. ', ' .$_POST['color'][1]. ', '. $_POST['color'][2];
        $spanColor = "138,43,226";
        print_r("Background: $spanBackground <br/> Text: $spanColor <br>");
}
?>

<style>
    span {
        background:rgb(
            <?php
                if(isset($spanBackground)) echo($spanBackground);
             ?>);
        color:rgb(
            <?php
                if(isset($spanColor)) echo($spanColor);
             ?>);)
        }
</style>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="number" min="0" max="255" name="color[]">
    <input type="number" min="0" max="255" name="color[]">
    <input type="number" min="0" max="255" name="color[]">
    <input type="submit" value="Accept"/>

    <br/><span>desired color</span><br/>
</form>