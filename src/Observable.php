<?php
/**
 * Created by PhpStorm.
 * User: moritzschillinger
 * Date: 26.07.17
 * Time: 21:47
 */

namespace Schilli91\ObserverPattern;

/**
 * Class Observable
 * @package Schilli91\ObserverPattern
 */
class Observable{

    /**
     * @var ObserverInterface[]
     */
    protected $observers;

    /**
     * Observable constructor.
     */
    public function __construct(){
        $this->observers = [];
    }

    /**
     * @param ObserverInterface $observer
     */
    public function addObserver(ObserverInterface $observer){
        if (!in_array($observer, $this->observers)) {
            $this->observers[] = $observer;
        }
    }

    /**
     * @param ObserverInterface $observer
     */
    public function removeObserver(ObserverInterface $observer){
        if ($index = array_search($observer, $this->observers, true)) {
            unset($this->observers[$index]);
        }
    }

    /**
     *
     */
    public function notifyObservers(){
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }

}