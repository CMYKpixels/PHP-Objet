<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Demo</title>
<link rel="stylesheet" href="./css/ex.css" type="text/css" />
<style type="text/css">
form.demoForm fieldset {
    width: 400px;
    margin-bottom: 2em;
}
</style>

<script type="text/javascript">
function checkBeforeSubmit(frm) {
    // JavaScript validation here
    // return false if error(s)
    
    //alert('This is just a demo form with no place to go.');
    //return false;
    
    return true; // to submit
}

</script>
</head>
<body>
    
<h1>Example Form Created Using HTML_Form Class</h1>
    
<?php
require('includes/html_form.class.php');

// arrays for select list demos
$rank = array('Totally fuckedup', 'Minimally useful', 'Pretty good', 'I realy like it', 'Fabulous');

$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 
        'August', 'September', 'October', 'November', 'December');


// create instance of HTML_Form
$frm = new HTML_Form();

// using $frmStr to concatenate long string of form elements
// startForm arguments: action, method, id, optional attributes added in associative array
$frmStr = $frm->startForm('result.php', 'post', 'demoForm',
            array('class'=>'demoForm', 'onsubmit'=>'return checkBeforeSubmit(this)') ) . PHP_EOL .
    
    // fieldset and legend elements
    $frm->startTag('fieldset') . PHP_EOL .
    $frm->startTag('legend') . 'Example Form' . $frm->endTag() . PHP_EOL .
    
    // wrap form elements in paragraphs 
    $frm->startTag('p') . 
    
    // label and text input with optional attributes
    $frm->addLabelFor('firstName', 'First Name: ') .
    // using html5 required attribute
    $frm->addInput('text', 'firstName', '', array('id'=>'firstName', 'size'=>16, 'required'=>true) ) . 
    
    // endTag remembers startTag (but you can pass tag if nesting or for clarity)
    $frm->endTag() . PHP_EOL .
    $frm->startTag('p') . 
    
    // contain checkbox with label using start/endTag (so no need to add id)
    $frm->startTag('label') . 'I like brownies ' . 
    $frm->addInput('checkbox', 'brownies', 'likes' ) .
    // wouldn't need to pass label to endTag
    $frm->endTag('label') . 
    
    // would need to pass p to endTag
    $frm->endTag('p') . PHP_EOL .
    $frm->startTag('p') . 
    
    // add id to just one radio input (for html validity)
    // label tag can't contain both (not valid html)
    $frm->addLabelFor('gender', 'Your gender: ') .
    $frm->addInput('radio', 'gender', 'male', array('id'=>'gender')  ) . ' male ' . PHP_EOL .
    $frm->addInput('radio', 'gender', 'female') . ' female' . 
    
    $frm->endTag() . PHP_EOL .
    $frm->startTag('p') . 
    
    $frm->addLabelFor('comments', 'Your comments: ') .
    $frm->addEmptyTag('br') . PHP_EOL .
    // using html5 placeholder attribute
    $frm->addTextArea('comments', 6, 40, '',
            array('id'=>'comments', 'placeholder'=>'We would love to hear your comments.') ) . 
    
    $frm->endTag() . PHP_EOL .
    $frm->startTag('p') . 
    
    // arguments: name, array of option values, array of option text
    // optional arguments: selected value, header, additional attributes in associative array
    $frm->addSelectListArrays('month', range(1, 12), $months, '', ' - Month - ') .
    
    $frm->endTag() . PHP_EOL .
    $frm->startTag('p') . 
    
    $frm->startTag('label') . 'How would you rank this code? ' . 
    // arguments: name, array containing option text/values
    // include values attributes (boolean),
    // optional arguments: selected value, header, additional attributes in associative array
    $frm->addSelectList('rank', $rank, false, 'Pretty good' ) .
    $frm->endTag('label') . 
    
    $frm->endTag('p') . PHP_EOL .
    $frm->startTag('p') . 
    
    $frm->addInput('submit', 'submit', 'Submit') .
    
    $frm->endTag() . PHP_EOL .
    $frm->endTag('fieldset') . PHP_EOL .
    
    $frm->endForm();

// finally, output the long string
echo $frmStr;


?>


<p>Find more information about the PHP Form Class <a href="http://www.dyn-web.com/code/form_builder/documentation.php">online</a>.</p>

<p>Thank you for visiting <a href="http://www.dyn-web.com/">dyn-web.com</a>!</p>

</body>
</html>