<?php

/**
 * This file defines the Command class to genarte the error's code of the REST API
 *
 * @category HCHDemoBundle
 * @package Command
 * @author HCH <chaabani.hammadi@gmail.com>
 * @copyright 2016-2017 HCH
 * @version 1.0.0
 * @since File available since Release 1.0.0
 */
namespace HCH\DemoBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Command class to genarte the error's code for API services
 *
 * @category HCHDemoBundle
 * @package Command
 * @author HCH <chaabani.hammadi@gmail.com>
 * @copyright 2016-2017 HCH
 * @version 1.0.0
 * @since File available since Release 1.0.0
 *
 */
class CreateErrorCodeCommand extends Command {

  protected function configure() {
    $this
      // the name of the command (the part after "app/console")
      ->setName('app:create-error-code')

      // the short description shown while running "php app/console list"
      ->setDescription('Create code error file.')

      // the full command description shown when running the command with
      // the "--help" option
      ->setHelp("This command allows you to create the code error file")
    ;
  }

  protected function execute(InputInterface $input, OutputInterface $output) {

    $content = "; this is an INI file \n [parameters] \n \n ;400 \n 4001 = No article found \n \n ;500 \n 5001 = An intenal error has occured";
    $fp = fopen(__DIR__ . '../../../../../app/config/errors_code.ini', "wb");
    fwrite($fp, $content);
    fclose($fp);
  } 
}
