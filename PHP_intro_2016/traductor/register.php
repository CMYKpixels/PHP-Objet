<?php
    require_once('class.translation.php');

    if(isset($_GET['lang']))
        $translate = new Translator($_GET['lang']);
    else
        $translate = new Translator('en');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>
        <?php
            $translate->__('CSS Registration Form');
        ?>
    </title>

    <link rel="stylesheet" type="text/css" href="css/default.css"/>
</head>
<body>
<form action="" class="register">
    <h1>
        <?php
            $translate->__('Registration');
        ?>
        <a class="flag_deutsch" title="deutsch" href="register.php?lang=de"></a>
        <a
            class="flag_english" title="english" href="register.php"></a></h1>

    <fieldset class="row1">
        <legend><?php $translate->__('Account Details'); ?></legend>
        <p>
            <label><?php $translate->__('Email'); ?> *</label>
            <input type="text"/>
            <label><?php $translate->__('Repeat email'); ?> *</label>
            <input type="text"/>
        </p>
        <p>
            <label><?php $translate->__('Password'); ?>*</label>
            <input type="text"/>
            <label><?php $translate->__('Repeat Password'); ?>*</label>
            <input type="text"/>
            <label class="obinfo">* <?php $translate->__('obligatory fields'); ?></label>
        </p>
    </fieldset>
    <fieldset class="row2">
        <legend><?php $translate->__('Personal Details'); ?></legend>
        <p>
            <label><?php $translate->__('Name'); ?> *</label>
            <input type="text" class="long"/>
        </p>
        <p>
            <label><?php $translate->__('Phone'); ?> *</label>
            <input type="text" maxlength="10"/>
        </p>
        <p>
            <label class="optional"><?php $translate->__('Street'); ?></label>
            <input type="text" class="long"/>
        </p>
        <p>
            <label><?php $translate->__('City'); ?> *</label>
            <input type="text" class="long"/>
        </p>
        <p>
            <label><?php $translate->__('Country'); ?> *</label>
            <select>
                <option>
                </option>
                <option value="1"><?php $translate->__('United States'); ?>
                </option>
            </select>
        </p>
        <p>
            <label class="optional"><?php $translate->__('Website'); ?></label>
            <input class="long" type="text" value="http://"/>

        </p>
    </fieldset>
    <fieldset class="row3">
        <legend><?php $translate->__('Further Information'); ?></legend>
        <p>
            <label><?php $translate->__('Gender'); ?> *</label>
            <input type="radio" value="radio"/>
            <label class="gender"><?php $translate->__('Male'); ?></label>
            <input type="radio" value="radio"/>
            <label class="gender"><?php $translate->__('Female'); ?></label>
        </p>
        <p>
            <label><?php $translate->__('Birthdate'); ?> *</label>
            <select class="date">
                <option value="1">01
                </option>
                <option value="2">02
                </option>
                <option value="3">03
                </option>
                <option value="4">04
                </option>
                <option value="5">05
                </option>
                <option value="6">06
                </option>
                <option value="7">07
                </option>
                <option value="8">08
                </option>
                <option value="9">09
                </option>
                <option value="10">10
                </option>
                <option value="11">11
                </option>
                <option value="12">12
                </option>
                <option value="13">13
                </option>
                <option value="14">14
                </option>
                <option value="15">15
                </option>
                <option value="16">16
                </option>
                <option value="17">17
                </option>
                <option value="18">18
                </option>
                <option value="19">19
                </option>
                <option value="20">20
                </option>
                <option value="21">21
                </option>
                <option value="22">22
                </option>
                <option value="23">23
                </option>
                <option value="24">24
                </option>
                <option value="25">25
                </option>
                <option value="26">26
                </option>
                <option value="27">27
                </option>
                <option value="28">28
                </option>
                <option value="29">29
                </option>
                <option value="30">30
                </option>
                <option value="31">31
                </option>
            </select>
            <select>
                <option value="1"><?php $translate->__('January'); ?>
                </option>
                <option value="2"><?php $translate->__('February'); ?>
                </option>
                <option value="3"><?php $translate->__('March'); ?>
                </option>
                <option value="4"><?php $translate->__('April'); ?>
                </option>
                <option value="5"><?php $translate->__('May'); ?>
                </option>
                <option value="6"><?php $translate->__('June'); ?>
                </option>
                <option value="7"><?php $translate->__('July'); ?>
                </option>
                <option value="8"><?php $translate->__('August'); ?>
                </option>
                <option value="9"><?php $translate->__('September'); ?>
                </option>
                <option value="10"><?php $translate->__('October'); ?>
                </option>
                <option value="11"><?php $translate->__('November'); ?>
                </option>
                <option value="12"><?php $translate->__('December'); ?>
                </option>
            </select>
            <input class="year" type="text" size="4" maxlength="4"/>e.g 1976
        </p>
        <p>
            <label><?php $translate->__('Nationality'); ?> *</label>
            <select>
                <option value="0">
                </option>
                <option value="1"><?php $translate->__('United States'); ?></option>
            </select>
        </p>
        <p>
            <label><?php $translate->__('Children'); ?> *</label>
            <input type="checkbox" value=""/>
        </p>
        <div class="infobox"><h4><?php $translate->__('Helpful Information'); ?></h4>
            <p><?php $translate->__('Here comes some explaining text, sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.'); ?></p>
        </div>
    </fieldset>
    <fieldset class="row4">
        <legend><?php $translate->__('Terms and Mailing'); ?></legend>
        <p class="agreement">
            <input type="checkbox" value=""/>
            <label>* <?php $translate->__('I accept the'); ?> <a
                    href="#"><?php $translate->__('Terms and Conditions'); ?></a></label>
        </p>
        <p class="agreement">
            <input type="checkbox" value=""/>
            <label><?php $translate->__('I want to receive personalized offers by your site'); ?></label>
        </p>
        <p class="agreement">
            <input type="checkbox" value=""/>
            <label><?php $translate->__('Allow partners to send me personalized offers and related services'); ?></label>
        </p>
    </fieldset>
    <div>
        <button class="button"><?php $translate->__('Register'); ?> &raquo;</button>
    </div>
</form>
</body>
</html>