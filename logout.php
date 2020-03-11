<script type="text/javascript">
        function typePassword()
        {
            var myMsgBox = new Ext.window.MessageBox();
myMsgBox.textField.inputType = 'password';
myMsgBox.prompt('Title','Label',function(btn,result) {
if(btn=='ok') {
if(result!=null) { //handles cancel being hit on the prompt
//use string the user input (stored in result) here in an appropriate manner
}
}
});
        }
</script>

<?php
    session_start();
    if (session_destroy())
        header("location: index.php");
?>