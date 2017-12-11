<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert(
            [
                [
                    'user_id'    => '1',
                    'product_id' => '1',
                    'content'    => 'tam duoc',
                    'rated'      => '5.0',

                ],
                [
                    'user_id'    => '2',
                    'product_id' => '1',
                    'content'    => 'cung tam duoc',
                    'rated'      => '4.0',

                ],
                [
                    'user_id'    => '3',
                    'product_id' => '1',
                    'content'    => 'cung tam duoasdasdsadasdc',
                    'rated'      => '3.0',

                ],
                [
                    'user_id'    => '1',
                    'product_id' => '2',
                    'content'    => 'casdasdasdasdung tam duoc',
                    'rated'      => '4.0',

                ],
                [
                    'user_id'    => '4',
                    'product_id' => '2',
                    'content'    => 'csdsadasdaungascascasc tam duoc',
                    'rated'      => '1.0',

                ],
                [
                    'user_id'    => '5',
                    'product_id' => '2',
                    'content'    => 'cqdqwdqwdqwdqwdqwdung tam duoc',
                    'rated'      => '3.5',

                ],
                [
                    'user_id'    => '1',
                    'product_id' => '3',
                    'content'    => 'cuasdasdasdasdasdasdacsacng tam duoc',
                    'rated'      => '4.0',

                ],
                [
                    'user_id'    => '2',
                    'product_id' => '3',
                    'content'    => 'casdcunascgasc asctascasamc ascduoc',
                    'rated'      => '2.0',

                ],
                [
                    'user_id'    => '3',
                    'product_id' => '3',
                    'content'    => 'csacaskcaslkcnaslknclsakung tam duoc',
                    'rated'      => '4.0',

                ],
                [
                    'user_id'    => '4',
                    'product_id' => '4',
                    'content'    => 'casdasdasdasdasdung tam duoc',
                    'rated'      => '4.0',

                ],
                [
                    'user_id'    => '5',
                    'product_id' => '4',
                    'content'    => 'csdacuavnasg tsavavasvasvam duoc',
                    'rated'      => '1.0',

                ],
                [
                    'user_id'    => '1',
                    'product_id' => '4',
                    'content'    => 'cungvxzvzzzzzzzzzzzzzzzz tam duoc',
                    'rated'      => '5.0',

                ],
                [
                    'user_id'    => '1',
                    'product_id' => '5',
                    'content'    => 'cung xxxxxxxxxxxxxxxxtam duoc',
                    'rated'      => '5.0',

                ],
                [
                    'user_id'    => '2',
                    'product_id' => '5',
                    'content'    => 'ccvvvvvvvvvvvvvung tam duoc',
                    'rated'      => '5.0',

                ],
                [
                    'user_id'    => '3',
                    'product_id' => '5',
                    'content'    => 'ccccccung tam duoc',
                    'rated'      => '5.0',

                ],
                [
                    'user_id'    => '3',
                    'product_id' => '6',
                    'content'    => 'cung tam duoascascsacascascascc',
                    'rated'      => '4.0',

                ],
                [
                    'user_id'    => '4',
                    'product_id' => '6',
                    'content'    => 'cung tam duxxcxcoascascsacascascascc',
                    'rated'      => '4.0',

                ],
                [
                    'user_id'    => '5',
                    'product_id' => '6',
                    'content'    => 'cung tamcsacascascascc',
                    'rated'      => '4.0',

                ],
                [
                    'user_id'    => '1',
                    'product_id' => '7',
                    'content'    => 'cacaslkcnaslcknaslkcnaslcung tamcsacascascascc',
                    'rated'      => '2.0',

                ],
                [
                    'user_id'    => '2',
                    'product_id' => '7',
                    'content'    => 'cunacascsacascascacg tamcsacascascascc',
                    'rated'      => '2.0',

                ],
                [
                    'user_id'    => '3',
                    'product_id' => '7',
                    'content'    => 'cung tamcsacascascascc',
                    'rated'      => '2.0',

                ],
                [
                    'user_id'    => '2',
                    'product_id' => '8',
                    'content'    => 'cung tamcsacascascascc',
                    'rated'      => '3.0',

                ],
                [
                    'user_id'    => '3',
                    'product_id' => '8',
                    'content'    => 'cung tamcsacascascassssssssssssscc',
                    'rated'      => '4.0',

                ],
                [
                    'user_id'    => '4',
                    'product_id' => '8',
                    'content'    => 'cung tamcsacascascasddddddddscc',
                    'rated'      => '4.0',

                ],
                [
                    'user_id'    => '3',
                    'product_id' => '9',
                    'content'    => 'cung tamcsacascascascc',
                    'rated'      => '4.5',

                ],
                [
                    'user_id'    => '4',
                    'product_id' => '9',
                    'content'    => 'cung tamcsacascaswdwwwwwwwwwwwwwwwwwwwcascc',
                    'rated'      => '4.5',

                ],
                [
                    'user_id'    => '5',
                    'product_id' => '9',
                    'content'    => 'cung tamcsacascascascascaasaaaaaaaaaaaaaaascc',
                    'rated'      => '4.0',

                ],
                [
                    'user_id'    => '1',
                    'product_id' => '10',
                    'content'    => 'cung tamcsacascascascc',
                    'rated'      => '1.0',

                ],
                [
                    'user_id'    => '3',
                    'product_id' => '10',
                    'content'    => 'cuascascsacacascascng tamcsacascascascc',
                    'rated'      => '5.0',

                ],
                [
                    'user_id'    => '1',
                    'product_id' => '11',
                    'content'    => 'cung tcascascascamcsacascascascc',
                    'rated'      => '1.0',

                ],
                [
                    'user_id'    => '2',
                    'product_id' => '11',
                    'content'    => 'cung tamcsacascabdbdsbsdbsdbsdbsdbscascc',
                    'rated'      => '4.0',

                ],
                [
                    'user_id'    => '1',
                    'product_id' => '12',
                    'content'    => 'cung tamcsacascasca              scc',
                    'rated'      => '3.0',

                ],
                [
                    'user_id'    => '2',
                    'product_id' => '12',
                    'content'    => 'cung tamcccccdcdcdcdcsacascascascc',
                    'rated'      => '4.0',

                ],
                [
                    'user_id'    => '3',
                    'product_id' => '13',
                    'content'    => 'cung tamcsacascZZZZZZZZZZascascc',
                    'rated'      => '4.0',

                ],
                [
                    'user_id'    => '4',
                    'product_id' => '13',
                    'content'    => 'cung tamcsacascasCCCCCCCCCCcascc',
                    'rated'      => '5.0',

                ],
                [
                    'user_id'    => '5',
                    'product_id' => '14',
                    'content'    => 'czxvzxvzxvzvung tamcsacascascascc',
                    'rated'      => '4.0',

                ],
                [
                    'user_id'    => '1',
                    'product_id' => '14',
                    'content'    => 'cung tamcsac        ascascascc',
                    'rated'      => '3.0',

                ],
                [
                    'user_id'    => '2',
                    'product_id' => '15',
                    'content'    => 'cavasvas    ung tamcsacascascascc',
                    'rated'      => '1.0',

                ],
                [
                    'user_id'    => '3',
                    'product_id' => '15',
                    'content'    => 'cung tamcsacascascascc',
                    'rated'      => '1.0',

                ],
                [
                    'user_id'    => '4',
                    'product_id' => '16',
                    'content'    => 'casfasvvv  ung tamcsacascascascc',
                    'rated'      => '3.5',

                ],
                [
                    'user_id'    => '5',
                    'product_id' => '16',
                    'content'    => 'cun  g tamcsacascascascc',
                    'rated'      => '3.0',

                ],
                [
                    'user_id'    => '1',
                    'product_id' => '17',
                    'content'    => 'cung tamcsacascascascc',
                    'rated'      => '4.0',

                ], [
                'user_id'    => '2',
                'product_id' => '17',
                'content'    => 'c               ung tamcsacascascascc',
                'rated'      => '4.5',

            ],
                [
                    'user_id'    => '3',
                    'product_id' => '18',
                    'content'    => 'cx    xxxung tamcsacascascascc',
                    'rated'      => '3.0',

                ],
                [
                    'user_id'    => '4',
                    'product_id' => '18',
                    'content'    => 'cung tamcsacascascascc',
                    'rated'      => '3.0',

                ],
                [
                    'user_id'    => '5',
                    'product_id' => '19',
                    'content'    => 'ccsacascasc  ung tamcsacascascascc',
                    'rated'      => '1.0',

                ],
                [
                    'user_id'    => '1',
                    'product_id' => '19',
                    'content'    => 'cascascascsacascSSSSung tamcsacascascascc',
                    'rated'      => '4.5',

                ],
                [
                    'user_id'    => '2',
                    'product_id' => '20',
                    'content'    => 'cascascascascascung tamcsacascascascc',
                    'rated'      => '4.0',

                ],
                [
                    'user_id'    => '3',
                    'product_id' => '20',
                    'content'    => 'cascsacascascascascung tamcsacascascascc',
                    'rated'      => '3.0',

                ],
                [
                    'user_id'    => '4',
                    'product_id' => '21',
                    'content'    => 'cascasc     ung tamcsacascascascc',
                    'rated'      => '4.5',

                ],
                [
                    'user_id'    => '5',
                    'product_id' => '21',
                    'content'    => 'cacasca   AAAAAung tamcsacascascascc',
                    'rated'      => '4.5',

                ], [
                'user_id'    => '1',
                'product_id' => '22',
                'content'    => 'casca   ung tamcsacascascascc',
                'rated'      => '3.0',

            ],
                [
                    'user_id'    => '2',
                    'product_id' => '22',
                    'content'    => 'casc    ung tamcsacascascascc',
                    'rated'      => '5.0',

                ],
                [
                    'user_id'    => '3',
                    'product_id' => '23',
                    'content'    => 'cung tamcsascc',
                    'rated'      => '5.0',

                ],
                [
                    'user_id'    => '4',
                    'product_id' => '23',
                    'content'    => 'c            ung tamcsacascascascc',
                    'rated'      => '4.0',

                ],
                [
                    'user_id'    => '5',
                    'product_id' => '24',
                    'content'    => 'cung HAHAHAHAtamcsacascascascc',
                    'rated'      => '4.5',

                ],
                [
                    'user_id'    => '1',
                    'product_id' => '24',
                    'content'    => 'cXXXXXXXXXXung tamcsacascascascc',
                    'rated'      => '4.5',

                ],
                [
                    'user_id'    => '2',
                    'product_id' => '25',
                    'content'    => 'cung tamcsacascascascc',
                    'rated'      => '4.0',

                ],
                [
                    'user_id'    => '3',
                    'product_id' => '25',
                    'content'    => 'cAAAAAAAAAung tamcsacascascascc',
                    'rated'      => '3.0',

                ],
                [
                    'user_id'    => '4',
                    'product_id' => '26',
                    'content'    => 'ccsaaaaaaaaaaaaaaaaung tamcsacascascascc',
                    'rated'      => '4.5',

                ],
                [
                    'user_id'    => '5',
                    'product_id' => '26',
                    'content'    => 'cZZZZZZZZung tamcsacascascascc',
                    'rated'      => '1.0',

                ],
                [
                    'user_id'    => '1',
                    'product_id' => '27',
                    'content'    => 'cSSSSSSSSSSSung tamcsacascascascc',
                    'rated'      => '4.5',

                ],
                [
                    'user_id'    => '2',
                    'product_id' => '27',
                    'content'    => 'cAcascascascung tamcsacascascascc',
                    'rated'      => '5.0',

                ],
                [
                    'user_id'    => '3',
                    'product_id' => '28',
                    'content'    => 'cavavasvasvung tamcsacascascascc',
                    'rated'      => '5.0',

                ],
                [
                    'user_id'    => '4',
                    'product_id' => '28',
                    'content'    => 'cascascacascung tamcsacascascascc',
                    'rated'      => '4.5',

                ],
                [
                    'user_id'    => '5',
                    'product_id' => '29',
                    'content'    => 'csacsacascsacavasvabsfngngsgwegwevsdvdsvsdvung tamcsacascascascc',
                    'rated'      => '4.5',

                ],
                [
                    'user_id'    => '1',
                    'product_id' => '29',
                    'content'    => 'cuascascascasvasvaasvng tamcsacascascascc',
                    'rated'      => '3.0',

                ],
                [
                    'user_id'    => '2',
                    'product_id' => '29',
                    'content'    => 'csalkaslkvnsavaiojgupawvnpasovpaosnvpoasuvjpasnvasvung tamcsacascascascc',
                    'rated'      => '3.0',

                ],
                [
                    'user_id'    => '3',
                    'product_id' => '30',
                    'content'    => 'caslknaslvnaslkvaslnvaslknvaslkvnlsaknvlasknvung tamcsacascascascc',
                    'rated'      => '4.0',

                ],
                [
                    'user_id'    => '4',
                    'product_id' => '30',
                    'content'    => 'cascnasoncasklnclknclkasnclkanlksanclkanclkasnclksacung tamcsacascascascc',
                    'rated'      => '4.5',

                ],
                [
                    'user_id'    => '5',
                    'product_id' => '30',
                    'content'    => 'cung tamcsacascascascc',
                    'rated'      => '2.5',

                ],
                [
                    'user_id'    => '1',
                    'product_id' => '31',
                    'content'    => 'cascnsalnclanslskacung tamcsacascascascc',
                    'rated'      => '5.0',

                ],
                [
                    'user_id'    => '2',
                    'product_id' => '31',
                    'content'    => 'clakflaksnfklasnflkasnflkasnflkasnflksanflkasnflaksnflkasnflskanflkasnfung tamcsacascascascc',
                    'rated'      => '5.0',

                ],

            ]

        );
    }
}
