<?php

class FormConstructor
{
    private $fields = [];


    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
    }

    public function __get()
    {

    }

    public function render()
    {
        $formHtml = '<form>';
        foreach ($this->fields as $name=>$value)
        {
            $formHtml . = '<input type="text" name=>';
        }
        $formHtml .= '</form>';
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return '';
    }
}


$formConstructor = new FormConstructor();
$formConstructor->first_name = 'Your first name';
$formConstructor->last_name = 'Your last name';
$formConstructor->email = 'Your email';
$formConstructor->address = 'Your address';



echo $formConstructor->render();



/*
<form>
<input type="text" name="propertyName" value="propertyValue" />

</form>
*/
