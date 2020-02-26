<?php
/*
class Tv
{
    private $render;
    public function __construct(AbstractRender $render) //должен быть объект типа AbstractRender, инъекция зависимостей
    {
        $this->render = $render;
    }
    private function renderTeletextFrame(string $text, $frameNumber)
    {
        $frame = $this->render->getFrame($frameNumber);
        $frame['text'] = $text;
        $this->render->setFrame($frame);
    }

    private function getRender()
    {
        return new Render;
    }

    public function setRemote($remoteModer)
    {

    }

    public function volumeUp()
    {

    }

    public function volumeDown()
    {

    }

    public function volumeMute()
    {

    }
}
class LcdRenderer extends AbstractRender
{
    public function setFrame(array $data)
    {

    }
    public function getFrame(int $frameNumber): array
    {

    }
}
class OledRenderer extends AbstractRender
{
    public function setFrame(array $data)
    {

    }
    public function getFrame(int $frameNumber): array
    {

    }
}

abstract class AbstractRender
{
    abstract public function setFrame(array $data);
    abstract public function getFrame(int $frameNumber): array;
}

$tv = new Tv(new OledRenderer());



--------------------------

interface WorkerInterface //в интерфейсах только публичные методы
{
    public function sleep();
    public function work();
}

class HumanWorker implements WorkerInterface //нужно определить все методы
{
    public function sleep()
    {
        echo 'I am sleeping';
    }

    public function work()
    {
        echo 'I am working';
    }
}

class RobotWorker implements WorkerInterface
{
    public function work()
    {
        echo 'I am sleeping';
    }

    public function sleep()
    {
    }
}

$humanWorker = new HumanWorker();


 --------------------------
 --------------------------
*/


interface IdleInterface //в интерфейсах только публичные методы
{
    public function sleep();
}

interface WorkableInterface
{
    public function work();
}

interface RobotTypes
{
    public const KILLER = 'killer';
    public const DIGGER = 'digger';
    public const CLEANER = 'cleaner';
}

class HumanWorker implements WorkableInterface, IdleInterface  //нужно определить все методы
{
    public function sleep()
    {
        echo 'I am sleeping';
    }

    public function work()
    {
        echo 'I am working';
    }
}

class RobotWorker implements WorkableInterface
{
    private $robotType;
    public function work()
    {
        echo 'I am sleeping';
    }

    public function setType(string $type)
    {
        switch ($type){
            case RobotTypes::CLEANER:
                echo 'I am cleaner';
                break;
            case RobotTypes::DIGGER:
                echo 'I am digger';
                break;
        }
    }
}


class Manager
{
    public function manage($worker)
    {
        if ($worker instanceof IdleInterface)
        {
            $worker->sleep();
        }

        if ($worker instanceof WorkableInterface)
        {
            $worker->work();
        }

    }
}