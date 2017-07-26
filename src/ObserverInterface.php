<?php
/**
 * Created by PhpStorm.
 * User: moritzschillinger
 * Date: 26.07.17
 * Time: 21:45
 */

namespace Schilli91\ObserverPattern;


interface ObserverInterface{

    /**
     * @return void
     */
    public function update();

}