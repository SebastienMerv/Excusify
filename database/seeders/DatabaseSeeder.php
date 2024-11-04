<?php

namespace Database\Seeders;

use App\Models\Excuse;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $excuses = [
            // Partie 1, Partie 2, Partie 3
            ['partie1' => 'Je suis en retard parce que', 'partie2' => 'un chat a fait tomber mon café', 'partie3' => 'et j’ai dû tout nettoyer avant de partir.'],
            ['partie1' => 'Je n’ai pas pu terminer la tâche car', 'partie2' => 'mon voisin a décidé de tondre son gazon', 'partie3' => 'et j’ai perdu mes clés dans l’action.'],
            ['partie1' => 'Je n’ai pas pu venir à cause de', 'partie2' => 'mon chien a mangé mon chargeur', 'partie3' => 'et ça m’a pris une éternité à résoudre.'],
            ['partie1' => 'Mon téléphone était hors service parce que', 'partie2' => 'un oiseau est entré par la fenêtre', 'partie3' => 'et j’ai dû attendre une assistance technique.'],
            ['partie1' => 'J’ai raté le rendez-vous parce que', 'partie2' => 'mon ordinateur a décidé de faire une mise à jour', 'partie3' => 'et mon chargeur était introuvable.'],
            ['partie1' => 'J’ai pris du retard dans le projet parce que', 'partie2' => 'le vent a fermé la porte derrière moi', 'partie3' => 'et mon Internet n’est revenu qu’après plusieurs heures.'],
            ['partie1' => 'J’ai été distrait parce que', 'partie2' => 'mon réveil n’a pas sonné', 'partie3' => 'et j’ai dû attendre qu’un technicien répare tout.'],
            ['partie1' => 'Je n’ai pas pu être présent car', 'partie2' => 'mon clavier ne répondait plus', 'partie3' => 'et je n’ai pas pu avancer comme prévu.'],
            ['partie1' => 'Je n’ai pas envoyé l’email parce que', 'partie2' => 'mon Internet était coupé', 'partie3' => 'et ça a perturbé mon organisation.'],
            ['partie1' => 'Je n’ai pas pu répondre car', 'partie2' => 'je n’ai pas trouvé mes lunettes', 'partie3' => 'et j’ai fini par me retrouver sans batterie.'],
            ['partie1' => 'J’étais en retard ce matin parce que', 'partie2' => 'un orage a coupé le courant', 'partie3' => 'et ça a été plus compliqué que prévu.'],
            ['partie1' => 'Je n’ai pas pu finir le rapport parce que', 'partie2' => 'mon chat a caché mes clés', 'partie3' => 'et j’ai dû tout recommencer.'],
            ['partie1' => 'J’ai eu du mal à rejoindre la réunion car', 'partie2' => 'mon vélo a crevé en route', 'partie3' => 'et j’ai dû gérer ça en priorité.'],
            ['partie1' => 'J’ai eu un problème technique parce que', 'partie2' => 'ma voiture était coincée dans un embouteillage', 'partie3' => 'et j’ai dû appeler pour de l’aide.'],
            ['partie1' => 'J’ai oublié la présentation car', 'partie2' => 'ma cafetière a débordé', 'partie3' => 'et je me suis perdu en route.'],
            ['partie1' => 'J’ai perdu du temps en chemin parce que', 'partie2' => 'mon téléphone s’est éteint sans prévenir', 'partie3' => 'et ça m’a pris plus de temps que prévu.'],
            ['partie1' => 'J’ai été coincé à cause de', 'partie2' => 'mon imprimante s’est bloquée', 'partie3' => 'et j’ai dû m’occuper des réparations.'],
            ['partie1' => 'J’ai eu un imprévu car', 'partie2' => 'ma chaise a cassé', 'partie3' => 'et je n’ai pas réussi à résoudre le problème tout seul.'],
            ['partie1' => 'Je n’ai pas terminé le dossier parce que', 'partie2' => 'mon sac s’est déchiré en sortant', 'partie3' => 'et j’ai finalement dû abandonner l’idée de venir à temps.'],
            ['partie1' => 'Mon ordinateur était inutilisable car', 'partie2' => 'mon ascenseur est tombé en panne', 'partie3' => 'et je n’ai pas pu continuer sans un dépannage.'],
            // Ajoute encore plus d'excuses pour atteindre 50 !
        ];

        foreach ($excuses as $excuse) {
            Excuse::create($excuse);
        }
    }
}
