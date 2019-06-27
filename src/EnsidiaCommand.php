<?php namespace Console;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Console\i18n\Members;
use Console\i18n\Phrases;
use Console\Command;
/**
* Author: Gon <gonzaloventura@outlook.com>
*/
class EnsidiaCommand extends Command
{
    
    public $roster = array();

    public function configure()
    {
        $this -> setName('war')
            -> setDescription('Comienzan las Ensidia Wars')
            -> setHelp('Este comando hará que el roster de Ensidia se mate hasta que solo quede el mejor')
            ;

        
    }
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $this -> makeWar($input, $output);
    }

    public function makeWar (InputInterface $input, OutputInterface $output){
        $this->roster = Members::$roster;
        shuffle($this->roster);
        $semana = 0;
        foreach($this->roster as $member){
            $phrase = (Phrases::$phrases[array_rand(Phrases::$phrases)]."\n");
            $formattedPhrase = (sprintf($phrase, $member, Members::$roster[array_rand(Members::$roster)]));
            $output = "Semana ".++$semana.": ".$formattedPhrase;
            if ($semana != sizeof(Members::$roster)) echo $output;
            else echo("Semana ".$semana.": ".$member." es el último jugador vivo de Ensidia. Ahora morirá solo.\n");
        }
        
    }
}