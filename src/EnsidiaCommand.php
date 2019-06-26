<?php namespace Console;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Console\Command;
/**
 * Author: Chidume Nnamdi <kurtwanger40@gmail.com>
 */
class EnsidiaCommand extends Command
{
    
    public $roster = array();

    public function configure()
    {
        $this -> setName('war')
            -> setDescription('Comienzan las Ensidia Wars')
            -> setHelp('Este comando hará que el roster de Ensidia se mate hasta que solo quede el mejor')
            //-> addArgument('username', InputArgument::REQUIRED, 'The username of the user.');
            ;

        $this->roster = array(
            "Criptä",
            "Altaira",
            "Eldorest",
            "Eruner",
            "Erî",
            "Javïlol",
            "Patrôn",
            "Saturas",
            "Zykos",
            "Miracolina",
            "Alathariel",
            "Atilaelhuno",
            "Camiba",
            "Catare",
            "Cayro",
            "Cølmilløs",
            "Darklechan",
            "Ecologista",
            "Elborn",
            "Elesar",
            "Exarkun",
            "Ilhitdan",
            "Illidaela",
            "Javilol",
            "Likid",
            "Märly",
            "Mïcha",
            "Mørganá",
            "Ross",
            "Ruinah",
            "Seraphimh",
            "Suary",
            "Sunamum",
            "Trävis",
            "Valhuri",
            "Bely",
            "Berting",
            "Borax",
            "Branda",
            "Danib",
            "Dhasnatas",
            "Glahurung",
            "Illidiael",
            "Kayhur",
            "Lobocaver",
            "Manuels",
            "Martin",
            "Muertovivô",
            "Nereida",
            "Richiard",
            "Rëxxaär",
            "Srmuñón",
            "Tass",
            "Venüss",
            "Voronoi",
            "Wanderwick",
            "Wanderwyck",
            "Berserkèr",
            "Bonhardt",
            "Campurrianas",
            "Cazahdora",
            "Digestive",
            "Elimdor",
            "Kaje",
            "Michunet",
            "Mluisa",
            "Ramadanthys",
            "Tusgul",
            "Uragara",
            "Vanempty",
            "Äzuna",
            "Asherith",
            "Asimov",
            "Citrox",
            "Grondoin",
            "Lúthiem",
            "Montaña",
            "Mörgäná",
            "Panmicha",
            "Shinedark",
            "Thorzeus",
            "Thôrlim",
            "Waarket",
            "Mireïa",
            "Suarï"
        );
    }
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $this -> makeWar($input, $output);
    }

    public function makeWar (InputInterface $input, OutputInterface $output){

    }
}