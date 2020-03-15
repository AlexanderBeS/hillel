<?php


interface ObservableInterface {
    public function register($subscriber);
    public function notify();
}

interface ObserverInterface
{
    public function update();
}

class CacheObserver implements ObservableInterface
{
    private $subscribers;

    public function register($subscriber)
    {
        $this->subscribers[] = $subscriber;
    }

    public function notify()
    {
        foreach ($this->subscribers as $subscriber) {
            $subscriber->update();
        }
    }
}

class Memcache implements ObserverInterface
{
    public function update()
    {
        echo 'Updates Memcache object';
    }
}


class DataProvider implements ObserverInterface
{
    public function update()
    {
        echo 'Updates dataprovider object';
    }
}

class UserImageStore implements ObserverInterface
{
    public function update()
    {
        echo 'Updates User Image Store object' . PHP_EOL;
    }
}

$cacheObserver = new CacheObserver();
$cacheObserver->register(new Memcache());
$cacheObserver->register(new DataProvider());
$cacheObserver->register(new UserImageStore());

$cacheObserver->notify();