<?php

namespace App\Logging;

use Monolog\Formatter\LineFormatter;
use Monolog\Logger;
use Monolog\Processor\IntrospectionProcessor;
use Monolog\Processor\WebProcessor;
use Monolog\Processor\ProcessIdProcessor;

class CustomizeFormatter
{
   private $logFormat = '[%datetime% %channel%.%level_name% ip:%extra.ip% pid:%extra.process_id% %extra.class%::%extra.function%(%extra.line%)] %message% %context%' . PHP_EOL;

   private $dateFormat = 'Y/m/d H:i:s.v';

   /**
    * Customize the given Monolog instance.
    *
    * @param  \Monolog\Logger  $monolog
    *
    * @return void
    */
   public function __invoke($monolog)
   {
       $formatter = new LineFormatter($this->logFormat, $this->dateFormat, true, true);

       $ip = new IntrospectionProcessor(Logger::DEBUG, ['Illuminate\\']);

       $wp = new WebProcessor();

       $pid = new ProcessIdProcessor();

       foreach ($monolog->getHandlers() as $handler) {
           $handler->setFormatter($formatter);
           $handler->pushProcessor($ip);
           $handler->pushProcessor($wp);
           $handler->pushProcessor($pid);
       }
   }
}
