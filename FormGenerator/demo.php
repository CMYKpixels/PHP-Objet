<?php
    require 'views/header.php';
    require 'autoloader.php';
    require 'views/footer.php';

    /*
 * Testing begins!
 */
    $form = new Form(
        array(
            'action' => 'demo.php',
            'method' => Form::METHOD_GET,
            ));

    $field = new Fieldset("Fieldset");
    $field->add(new Input("text", "name", new Label("Input inside of Fieldset")));
    $form
        ->add(
            new Input(
                "text", //Type
                "test", //Name
                new Label("Testing Input", array("class" => "label")), //Label
                "Woot", //Default value
                array("id" => "test") //Attribute List
            )
        )
        ->add(new Submit("Go"));

    echo $form . "\n\n";

    echo "<pre>";
    echo print_r($form);
    echo "</pre>";
