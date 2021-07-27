<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = [
            //cabello
            [
                'url' => '../img/products/cabello/AceitedeARGAN.jpg',
                'Imageable_id' => '1',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/cabello/AceitedeCOCO.jpg',
                'Imageable_id' => '2',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/cabello/AceitedeVITAMINAE.jpg',
                'Imageable_id' => '3',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/cabello/AfterShave100mlREUZEL.jpg',
                'Imageable_id' => '4',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/cabello/DailyConditioner350mlREUZEL.jpg',
                'Imageable_id' => '5',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/cabello/DailyShampoo350mlREUZEL.jpg',
                'Imageable_id' => '6',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/cabello/POMADAClayMatteREUZEL4OzCabelloDebilYDelgado.jpg',
                'Imageable_id' => '7',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/cabello/PomadaGreenGreaseReuzel4OzBaseDeCeraYAceite.jpg',
                'Imageable_id' => '8',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/cabello/POMADAWaterSolubleRed4OzSolublealagua.jpg',
                'Imageable_id' => '9',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/cabello/ShaveCream1OzREUZEL.jpg',
                'Imageable_id' => '10',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/cabello/TurbantedeSecadoRapidoALUVIA.jpg',
                'Imageable_id' => '11',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/cabello/VinchadealgodonNEGRA.jpg',
                'Imageable_id' => '12',
                'imageable_type' => 'App\Models\Product',
            ],
            //CEJAS//////////////////////////////////////////
            [
                'url' => '../img/products/cejas/Brochaparacejas.jpg',
                'Imageable_id' => '13',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/cejas/LapizdeCEJASRudeCosmetics.jpg',
                'Imageable_id' => '14',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/cejas/Peineparapestañasycejasdesechables.jpg',
                'Imageable_id' => '15',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/cejas/PinzaDeCejasProfesionalEnPuntadeACEROINOXIDABLE.jpg',
                'Imageable_id' => '16',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/cejas/PinzaSlantProfesionaldeACEROINOXIDABLE.jpg',
                'Imageable_id' => '17',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/cejas/PinzaSlantProfesionalNEGRAdeACEROINOXIDABLE.jpg',
                'Imageable_id' => '18',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/cejas/PinzaSlantProfesionalROJAdeACEROINOXIDABLE.jpg',
                'Imageable_id' => '19',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/cejas/PomadadeCejasMarronOscuro.jpg',
                'Imageable_id' => '20',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/cejas/SERUMFORTALECEDORdecejasypestañas.jpg',
                'Imageable_id' => '21',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/cejas/TijeraROSEGOLD.jpg',
                'Imageable_id' => '22',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                //CUIDADO PERSONAL
                'url' => '../img/products/cuidadopersonal/AfterShave100mlREUZEL.jpg',
                'Imageable_id' => '23',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/cuidadopersonal/DailyConditioner350mlREUZEL.jpg',
                'Imageable_id' => '24',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/cuidadopersonal/DailyShampoo350mlREUZEL.jpg',
                'Imageable_id' => '25',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/cuidadopersonal/EffaclarGelLimpiadorMicroExfoliante200mlLAROCHEPOSAY.jpg',
                'Imageable_id' => '26',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/cuidadopersonal/PACKAcneGOODMOLECULES.jpg',
                'Imageable_id' => '27',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/cuidadopersonal/PACKAntiarrugas.jpg',
                'Imageable_id' => '28',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/cuidadopersonal/PACKPielSecaGOODMOLECULES.jpg',
                'Imageable_id' => '29',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/cuidadopersonal/POMADAClayMatteREUZEL4OzCabelloDebilYDelgado.jpg',
                'Imageable_id' => '30',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/cuidadopersonal/PomadaGreenGreaseReuzel4OzBaseDeCeraYAceite.jpg',
                'Imageable_id' => '31',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/cuidadopersonal/POMADAWaterSolubleRed4OzSolublealagua.jpg',
                'Imageable_id' => '32',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/cuidadopersonal/ShaveCream1OzREUZEL.jpg',
                'Imageable_id' => '33',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                //Depilador
                'url' => '../img/products/depilador/DepiladoraPHILIPSBRE650.jpg',
                'Imageable_id' => '34',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/depilador/DepiladorCejasRostroElectricoInalambrico.jpg',
                'Imageable_id' => '35',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/depilador/DepiladorCorporaldePiernas.jpg',
                'Imageable_id' => '36',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/depilador/DepiladorCorporalYESparaVellosdeRostroPiernasBrazos.jpg',
                'Imageable_id' => '37',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/depilador/DepiladorFacialEléctricoInalámbrico.jpg',
                'Imageable_id' => '38',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/depilador/DepiladorMultizonaFemeninoSM.jpg',
                'Imageable_id' => '39',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/depilador/MaquinaDepiladoraKemeiKM35182en1EléctricaRecargable.jpg',
                'Imageable_id' => '40',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/depilador/RasuradorDepiladorSweetSensitivePrecisiónMujer5en1.jpg',
                'Imageable_id' => '41',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/depilador/RemovedorDepiladorRecargable DeVelloFacialCejas.jpg',
                'Imageable_id' => '42',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/depilador/RemovedorDepiladorRecargableDeVelloFacial.jpg',
                'Imageable_id' => '43',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                //Labios//////////////////////
                'url' => '../img/products/labios/aplicadordelabialesdesechables.jpg',
                'Imageable_id' => '44',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/labios/BalsamolabialAtodermBaumeLevresBIODERMA.jpg',
                'Imageable_id' => '45',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/labios/BalsamoLabialdemiel.jpg',
                'Imageable_id' => '46',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/labios/LabialHuaMULAN.jpg',
                'Imageable_id' => '47',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/labios/LabialliquidoStrongChiMULAN.jpg',
                'Imageable_id' => '48',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/labios/LabialWhatAPucker.jpg',
                'Imageable_id' => '49',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                //OJOSSSSSSSSS//////////////
                'url' => '../img/products/ojos/brochaparadifuminarpelonaturaltaperedblending.jpg',
                'Imageable_id' => '50',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/ojos/brochapremiumparadifuminarfluffyblendingpelonatural.jpg',
                'Imageable_id' => '51',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/ojos/delineadorencremanegroinglot.jpg',
                'Imageable_id' => '52',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/ojos/desinfectantedemaquillajeenpolvo.jpg',
                'Imageable_id' => '53',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/ojos/lavadoraparalimpiezadeesponjasybrochas.jpg',
                'Imageable_id' => '54',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/ojos/limpiadordebrochascinemasecrets.jpg',
                'Imageable_id' => '55',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/ojos/packde5pestañassinteticas.jpg',
                'Imageable_id' => '56',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/ojos/paletadesombrasstrawberryshakecolourpop.jpg',
                'Imageable_id' => '57',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/ojos/plumondelineadorbissu.jpg',
                'Imageable_id' => '58',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                //PERFUMES////////////////////////////
                //1
                'url' => '../img/products/perfumes/CalvinKleinShockForWomen100MLEDT.jpg',
                'Imageable_id' => '59',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                //2
                'url' => '../img/products/perfumes/CarolinaHerreraChicMen60MLEDT.jpg',
                'Imageable_id' => '60',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                //3
                'url' => '../img/products/perfumes/CarolinaHerreraCHTPriveMujer30MLEDP.jpg',
                'Imageable_id' => '61',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                //4
                'url' => '../img/products/perfumes/PacoRabannePourHomme200MLEDT.jpg',
                'Imageable_id' => '62',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                //5
                'url' => '../img/products/perfumes/SetCliniqueHidratanteMoistureSurge100H30MLDKNYBeExtraDeliciousMujer50MLEDPNeceser.jpg',
                'Imageable_id' => '63',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                //6
                'url' => '../img/products/perfumes/SetDKNYGoldenDeliciousMujer50MLEDPCartera.jpg',
                'Imageable_id' => '64',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                //7
                'url' => '../img/products/perfumes/SetDKNYGoldenDelicius50MLEDPDKNYStories3MLEDPCartera.jpg',
                'Imageable_id' => '65',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                //8
                'url' => '../img/products/perfumes/SetDKNYStoriesEDT100mlDKNYStoriesmarker3mlcarteraDKNY.jpg',
                'Imageable_id' => '66',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                //9
                'url' => '../img/products/perfumes/SetHugoBossMan200MLEDTTermodeAceroHugo.jpg',
                'Imageable_id' => '67',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                //10
                'url' => '../img/products/perfumes/SetTommyMen30MLEDTNeceserTommyHilfiger.jpg',
                'Imageable_id' => '68',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                //11
                'url' => '../img/products/perfumes/TommyMen200MLEDT.jpg',
                'Imageable_id' => '69',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                //PIEL
                'url' => '../img/products/piel/EffaclarGelLimpiadorMicroExfoliante200mlLAROCHE POSAY.jpg',
                'Imageable_id' => '70',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/piel/PACKAcneGOODMOLECULES.jpg',
                'Imageable_id' => '71',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/piel/PACKAntiarrugas.jpg',
                'Imageable_id' => '72',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/piel/PACKHidratacionIntensaCERAVE.jpg',
                'Imageable_id' => '73',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/piel/PACKPielGrasaBIODERMA.jpg',
                'Imageable_id' => '74',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/piel/PACKPielLuminosa.jpg',
                'Imageable_id' => '75',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/piel/PACKPielMixtayGrasaCERAVE.jpg',
                'Imageable_id' => '76',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/piel/PACKPielSecaBIODERMA.jpg',
                'Imageable_id' => '77',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/piel/PACKPielSecaCERAVE.jpg',
                'Imageable_id' => '78',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/piel/PACKPielSecaGOODMOLECULES.jpg',
                'Imageable_id' => '79',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/piel/PACKPielSensibleBIODERMA.jpg',
                'Imageable_id' => '80',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/piel/PACKSAAntirugosidadesCeraVE.jpg',
                'Imageable_id' => '81',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                //Rostro
                'url' => '../img/products/rostro/ChampuLimpiadordebrochasyesponjasCINEMASECRETS.jpg',
                'Imageable_id' => '82',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/rostro/CorrectoresHDLiftingELF.jpg',
                'Imageable_id' => '83',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/rostro/DesinfectantedemaquillajeenPOLVO.jpg',
                'Imageable_id' => '84',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/rostro/GellimpiadorparapielesMIXTASyGRASASMoussantBIODERMA200ml.jpg',
                'Imageable_id' => '85',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/rostro/GellimpiadorparapielesSENSIBLESMoussantBIODERMA200ml.jpg',
                'Imageable_id' => '86',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/rostro/LimpiadordebrochasdeSilicon.jpg',
                'Imageable_id' => '87',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/rostro/PaletamezcladoraconespatuladeACEROINOXIDABLE.jpg',
                'Imageable_id' => '88',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/rostro/ProtectorSolarenSprayPhotodermMAXSPF50BIODERMA150ML.jpg',
                'Imageable_id' => '89',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/rostro/ProtectorSolarPhotodermMSPF50BIODERMA40ML.jpg',
                'Imageable_id' => '90',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' => '../img/products/rostro/ProtectorSolarSPOTAGESPF50BIODERMA40ML.jpg',
                'Imageable_id' => '91',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' =>
                '../img/products/rostro/SensibioLIGHTBIODERMA40mlPielNormalaMixta.jpg',
                'Imageable_id' => '92',
                'imageable_type' => 'App\Models\Product',
            ],
            [
                'url' =>
                '../img/products/rostro/SensibioRICHBIODERMA40mlPielessecasymuysecas.jpg',
                'Imageable_id' => '93',
                'imageable_type' => 'App\Models\Product',
            ],
        ];
        foreach($images as $image)
        {
            Image::create($image);
        }
    }
}
