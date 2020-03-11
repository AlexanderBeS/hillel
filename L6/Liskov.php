<?php

interface LesssonDataInterface
{
    public function getAll(): array;
}

class DbLessonData implements LesssonDataInterface
{
    public function getAll(): array
    {
        // TODO: Implement getAll() method.
        return new stdClass();
    }
}

class FileLessonData implements LesssonDataInterface
{
    public function getAll(): array
    {
        // TODO: Implement getAll() method.
        return [123];
    }
}

class LessonProcessor
{
    private $lessonData;

    public function __construct(LesssonDataInterface $lessonData)
    {
        $this->lessonData = $lessonData;
    }

    public function process()
    {
        $first = $this->lessonData->getAll()[0];
        return $first;
    }
}




