<?php


interface FormConstructorInterface
{
    public function render(): string;
}


class FormConstructor implements FormConstructorInterface
{
    private $fields = [];

    function __construct() {
        //print "Создан объект от " . __CLASS__  . "\n";
    }

    public function __set($name, $value)
    {
        $this->fields[$name] = $value;
    }

    public function __get($name): string
    {
        return '__get метод - ' . $this->fields[$name]  . "\n";
    }

    public function render(): string
    {
        $formHtml = '<form>' . "\n";
        foreach ($this->fields as $name=>$value)
        {
            $formHtml .= '<input type="text" name="' . $name . '" value="' . $value . '" />' . "\n";
        }
        $formHtml .= '</form>' . "\n";

        return $formHtml;
    }

    public function __toString(): string
    {
        $text = '';
        foreach ($this->fields as $name=>$value)
        {
            $text .= $name . "=>" . $value . "\n";
        }

        echo ' __toString() метод.' . "\n";
        return $text;
    }

    public function __destruct()
    {
        //print "Уничтожены объекты " . __CLASS__  . "\n";
    }

    public function __invoke()
    {
       echo '__invoke() метод.' . "\n";
       var_dump($this->fields);
    }

}


$formConstructor = new FormConstructor();
$formConstructor->first_name = 'Your first name'; //вызов метода __set
$formConstructor->last_name = 'Your last name';
$formConstructor->email = 'Your email';
$formConstructor->address = 'Your address';

//echo ($formConstructor->email); //вызов метода __get
//echo($formConstructor); //вызов метода __toString
//$formConstructor(); //вызов метода __invoke
//echo $formConstructor->render(); //вызов метода render

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php echo $formConstructor->render(); ?>
</body>
</html>
