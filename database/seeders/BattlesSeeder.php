<?php

namespace Database\Seeders;

use App\Models\Battle;
use Illuminate\Database\Seeder;

class BattlesSeeder extends Seeder
{
    public function run(): void
    {
        $battles = [
            // ============================================
            // PACIFIC THEATER - 1941
            // ============================================

            [
                'name' => 'Attack on Pearl Harbor',
                'battle_date' => '1941-12-07',
                'battle_site' => 'Pearl Harbor, Hawaii',
                'description' => 'The surprise military strike by the Imperial Japanese Navy against the United States naval base at Pearl Harbor, bringing the United States into World War II.The attack damaged all eight U.S. battleships present at Pearl Harbor, sinking four of them in the harbor. Most were later salvaged and returned to service, except USS Arizona and USS Oklahoma. It was a turning point in the Pacific War, galvanizing American public opinion in favor of entering the conflict.',
            ],
            [
                'name' => 'Battle of the Java Sea',
                'battle_date' => '1942-02-27',
                'battle_site' => 'Java Sea, Dutch East Indies',
                'description' => 'A decisive naval battle in which the combined American-British-Dutch-Australian (ABDA) fleet was decisively defeated by the Imperial Japanese Navy. The battle marked the end of major Allied naval resistance in the Dutch East Indies and opened the way for the Japanese invasion of Java.',
            ],
            [
                'name' => 'Battle of Sunda Strait',
                'battle_date' => '1942-02-28',
                'battle_site' => 'Sunda Strait, Dutch East Indies',
                'description' => 'A naval battle that occurred during the Japanese invasion of Java. The Japanese cruisers and destroyers sank the Australian cruiser HMAS Perth and the American heavy cruiser USS Houston, with the loss of over 1,000 Allied sailors. The battle marked the end of Allied naval presence in the region.',
            ],

            // ============================================
            // PACIFIC THEATER - 1942
            // ============================================

            [
                'name' => 'Battle of the Coral Sea',
                'battle_date' => '1942-05-04',
                'battle_site' => 'Coral Sea, Pacific Ocean',
                'description' => 'The first carrier-vs-carrier battle in history, where neither fleet ever sighted the other. The battle was a strategic Allied victory, stopping the Japanese advance on Port Moresby and saving Australia from potential invasion. Both sides suffered losses, including the sinking of USS Lexington, but the Japanese were forced to abandon their invasion plans.',
            ],
            [
                'name' => 'Battle of Midway',
                'battle_date' => '1942-06-04',
                'battle_site' => 'Midway Atoll, Pacific Ocean',
                'description' => 'The turning point of the Pacific War. During the battle, American dive bombers sank four Japanese aircraft carriers: Akagi, Kaga, Sōryū, and Hiryū. The battle was a decisive American victory that crippled Japan\'s carrier fleet and shifted the balance of naval power in the Pacific. It marked the beginning of the Allied island-hopping campaign.',
            ],
            [
                'name' => 'Battle of the Eastern Solomons',
                'battle_date' => '1942-08-24',
                'battle_site' => 'Solomon Islands, Pacific Ocean',
                'description' => 'A carrier battle fought during the Guadalcanal campaign. American carrier aircraft sank the Japanese light carrier Ryūjō, while Japanese forces damaged USS Enterprise. The battle was a strategic victory for the Allies, protecting the vital supply lines to Guadalcanal and ensuring the success of the American landings.',
            ],
            [
                'name' => 'Battle of the Santa Cruz Islands',
                'battle_date' => '1942-10-25',
                'battle_site' => 'Santa Cruz Islands, Pacific Ocean',
                'description' => 'A fierce carrier battle during the Guadalcanal campaign. The Japanese damaged USS Enterprise and sank USS Hornet, while the Americans heavily damaged the Japanese carriers Shōkaku and Zuihō. Although a tactical victory for Japan, the battle crippled their carrier air groups and prevented them from supporting the ground forces on Guadalcanal.',
            ],
            [
                'name' => 'Naval Battle of Guadalcanal',
                'battle_date' => '1942-11-12',
                'battle_site' => 'Guadalcanal, Solomon Islands',
                'description' => 'A series of naval engagements over several days that decided the fate of the Guadalcanal campaign. The battle resulted in the sinking of the Japanese battleship Hiei and the destruction of several other ships. The American victory secured Guadalcanal and marked the beginning of the Allied offensive in the Pacific.',
            ],
            [
                'name' => 'Battle of Tassafaronga',
                'battle_date' => '1942-11-30',
                'battle_site' => 'Tassafaronga, Guadalcanal',
                'description' => 'A night engagement during the Guadalcanal campaign where Japanese destroyers sank the American heavy cruiser USS Northampton and damaged USS Minneapolis, USS New Orleans, and USS Pensacola. Despite this tactical victory, the Japanese were unable to resupply their troops on Guadalcanal, contributing to their eventual withdrawal.',
            ],

            // ============================================
            // PACIFIC THEATER - 1943
            // ============================================

            [
                'name' => 'Battle of the Bismarck Sea',
                'battle_date' => '1943-03-02',
                'battle_site' => 'Bismarck Sea, Pacific Ocean',
                'description' => 'A major Allied air-sea victory in which American and Australian aircraft destroyed a Japanese convoy carrying troops to New Guinea. The battle destroyed eight Japanese transports and four destroyers, killing over 3,000 Japanese soldiers. It demonstrated the effectiveness of Allied air power against surface shipping.',
            ],
            [
                'name' => 'Battle of Empress Augusta Bay',
                'battle_date' => '1943-11-01',
                'battle_site' => 'Empress Augusta Bay, Bougainville',
                'description' => 'A night engagement in which American cruisers and destroyers defeated a Japanese force attempting to disrupt the Bougainville landings. The American victory secured the beachhead and protected the invasion force from Japanese naval interference.',
            ],
            [
                'name' => 'Battle of Cape St. George',
                'battle_date' => '1943-11-25',
                'battle_site' => 'Cape St. George, New Ireland',
                'description' => 'A night battle in which American destroyers sank three Japanese destroyers without loss. It was the last major surface engagement of the Solomon Islands campaign and demonstrated the growing superiority of American naval forces in night fighting.',
            ],

            // ============================================
            // PACIFIC THEATER - 1944
            // ============================================

            [
                'name' => 'Battle of the Philippine Sea',
                'battle_date' => '1944-06-19',
                'battle_site' => 'Philippine Sea, Pacific Ocean',
                'description' => 'Known as the "Great Marianas Turkey Shoot," this battle saw American carrier aircraft destroy over 400 Japanese aircraft and sink three Japanese carriers. The battle decimated Japan\'s naval air arm and effectively ended Japanese carrier operations in the Pacific. It secured the Marianas Islands and opened the way for the invasion of the Philippines.',
            ],
            [
                'name' => 'Battle of Leyte Gulf',
                'battle_date' => '1944-10-23',
                'battle_site' => 'Leyte Gulf, Philippines',
                'description' => 'The largest naval battle in history, involving over 200 ships and 200,000 sailors. The battle was a decisive Allied victory that destroyed the Japanese Combined Fleet and effectively ended Japanese naval power. It comprised four main engagements: the Battle of the Sibuyan Sea, the Battle of Surigao Strait, the Battle off Samar, and the Battle off Cape Engaño.',
            ],
            [
                'name' => 'Battle of Sibuyan Sea',
                'battle_date' => '1944-10-24',
                'battle_site' => 'Sibuyan Sea, Philippines',
                'description' => 'Part of the Battle of Leyte Gulf, American carrier aircraft attacked the Japanese Center Force, sinking the super-battleship Musashi and damaging other ships. The battle forced the Japanese to turn back, preventing them from reaching the Allied invasion forces in Leyte Gulf.',
            ],
            [
                'name' => 'Battle of Surigao Strait',
                'battle_date' => '1944-10-25',
                'battle_site' => 'Surigao Strait, Philippines',
                'description' => 'The last battleship-vs-battleship engagement in history. American and Australian battleships crossed the "T" of the Japanese Southern Force, sinking the battleships Fusō and Yamashiro. The battle was a decisive American victory and demonstrated the supremacy of naval gunfire in night actions.',
            ],
            [
                'name' => 'Battle off Samar',
                'battle_date' => '1944-10-25',
                'battle_site' => 'Off Samar, Philippines',
                'description' => 'Part of the Battle of Leyte Gulf, a small American escort carrier force successfully defended against a much larger Japanese Center Force. The American destroyers and escort carriers fought heroically, sinking three Japanese cruisers and forcing the Japanese to retreat. It is considered one of the most heroic naval actions in American history.',
            ],
            [
                'name' => 'Battle off Cape Engaño',
                'battle_date' => '1944-10-25',
                'battle_site' => 'Cape Engaño, Luzon, Philippines',
                'description' => 'Part of the Battle of Leyte Gulf, American carrier aircraft sank the Japanese carriers Chitose, Chiyoda, and Zuikaku. The battle effectively destroyed the remaining Japanese carrier force and marked the end of Japanese naval aviation. It was the last major carrier battle of the war.',
            ],
            [
                'name' => 'Battle of Ormoc Bay',
                'battle_date' => '1944-11-11',
                'battle_site' => 'Ormoc Bay, Leyte, Philippines',
                'description' => 'A series of naval engagements in which American aircraft and ships destroyed Japanese convoys attempting to reinforce their troops on Leyte. The battle secured American control of Leyte and prevented Japanese reinforcements from reaching the island.',
            ],

            // ============================================
            // PACIFIC THEATER - 1945
            // ============================================

            [
                'name' => 'Operation Hailstone',
                'battle_date' => '1944-02-17',
                'battle_site' => 'Truk Lagoon, Caroline Islands',
                'description' => 'A major American carrier strike against the Japanese naval base at Truk, known as the "Gibraltar of the Pacific." The attack sank over 40 Japanese ships and destroyed hundreds of aircraft, effectively neutralizing the base and forcing the Japanese to withdraw from the area.',
            ],
            [
                'name' => 'Operation Ten-Go',
                'battle_date' => '1945-04-07',
                'battle_site' => 'East China Sea, near Okinawa',
                'description' => 'The final sortie of the Japanese battleship Yamato, the largest battleship ever built. Yamato was sent on a suicide mission to attack American ships off Okinawa. She was intercepted by American carrier aircraft and sunk, marking the end of Japan\'s last great naval offensive.',
            ],
            [
                'name' => 'Battle of Okinawa',
                'battle_date' => '1945-04-01',
                'battle_site' => 'Okinawa, Japan',
                'description' => 'The largest amphibious assault in the Pacific War, involving over 1,300 ships and 500,000 men. The battle was the bloodiest of the Pacific campaign, with over 100,000 Japanese and 50,000 Allied casualties. The naval phase included massive kamikaze attacks that sank dozens of American ships.',
            ],

            // ============================================
            // ATLANTIC THEATER
            // ============================================

            [
                'name' => 'Battle of the Atlantic',
                'battle_date' => '1939-09-03',
                'battle_site' => 'North Atlantic Ocean',
                'description' => 'The longest continuous campaign of World War II, lasting from 1939 to 1945. The battle was fought between German U-boats and Allied naval forces protecting merchant shipping. It was the most important battle of the war, securing the Allied supply lines that made victory possible. Over 3,000 Allied ships were sunk, but the Allies eventually prevailed with advances in anti-submarine warfare and intelligence.',
            ],
            [
                'name' => 'Battle of the Denmark Strait',
                'battle_date' => '1941-05-24',
                'battle_site' => 'Denmark Strait, North Atlantic',
                'description' => 'A brief but decisive naval engagement in which the German battleship Bismarck and heavy cruiser Prinz Eugen sank the British battlecruiser HMS Hood, with the loss of over 1,400 lives. The battle was a shock to Britain and led to the relentless pursuit that resulted in Bismarck\'s destruction three days later.',
            ],
            [
                'name' => 'Convoy HX 84',
                'battle_date' => '1940-11-05',
                'battle_site' => 'North Atlantic Ocean',
                'description' => 'A famous convoy battle where the German pocket battleship Admiral Scheer attacked a 37-ship convoy. The armed merchant cruiser HMS Jervis Bay defended the convoy heroically, allowing most ships to escape. Jervis Bay was sunk, but her captain was awarded the Victoria Cross for his bravery.',
            ],
            [
                'name' => 'Convoy PQ 17',
                'battle_date' => '1942-06-27',
                'battle_site' => 'Arctic Ocean',
                'description' => 'One of the most disastrous Allied convoy operations of the war. Due to a mistaken fear of a German sortie by Tirpitz, the convoy was ordered to scatter. German submarines and aircraft subsequently sank 24 of the 35 merchant ships, resulting in the loss of over 400,000 tons of supplies. The disaster highlighted the dangers of Arctic convoys.',
            ],

            // ============================================
            // MEDITERRANEAN THEATER
            // ============================================

            [
                'name' => 'Attack on Taranto',
                'battle_date' => '1940-11-11',
                'battle_site' => 'Taranto, Italy',
                'description' => 'A British carrier attack on the Italian fleet anchored at Taranto. Twenty-one Fairey Swordfish torpedo bombers from HMS Illustrious attacked the harbor, sinking one Italian battleship and damaging two others. The attack demonstrated the effectiveness of carrier-based air power and inspired the Japanese attack on Pearl Harbor.',
            ],
            [
                'name' => 'Battle of Calabria',
                'battle_date' => '1940-07-09',
                'battle_site' => 'Calabria, Italy',
                'description' => 'The first major fleet engagement between the British and Italian navies in the Mediterranean. Both sides suffered damage, but the battle was inconclusive. It marked the beginning of the Mediterranean naval campaign and demonstrated the determination of both fleets.',
            ],
            [
                'name' => 'Battle of Cape Spartivento',
                'battle_date' => '1940-11-27',
                'battle_site' => 'Cape Spartivento, Sardinia',
                'description' => 'An inconclusive naval engagement between British and Italian fleets. Both sides withdrew without decisive losses, but the battle slowed Italian naval operations and prevented them from interfering with Allied operations in the Mediterranean.',
            ],
            [
                'name' => 'Mers-el-Kébir',
                'battle_date' => '1940-07-03',
                'battle_site' => 'Mers-el-Kébir, Algeria',
                'description' => 'A controversial attack by the British Royal Navy on the French fleet anchored at Mers-el-Kébir to prevent it from falling into German hands. The attack resulted in the sinking of three French battleships and the deaths of over 1,200 French sailors, souring relations between Britain and France.',
            ],
            [
                'name' => 'Battle of Cape Matapan',
                'battle_date' => '1941-03-27',
                'battle_site' => 'Cape Matapan, Greece',
                'description' => 'A decisive British victory in the Mediterranean. Under the command of Admiral Andrew Cunningham, the Royal Navy intercepted and destroyed an Italian fleet, sinking three heavy cruisers and two destroyers with no British losses. The battle severely weakened Italian naval power and allowed the British to dominate the Eastern Mediterranean.',
            ],
            [
                'name' => 'Battle of Cape Bon',
                'battle_date' => '1941-12-13',
                'battle_site' => 'Cape Bon, Tunisia',
                'description' => 'A night engagement in which British destroyers sank two Italian light cruisers and a destroyer. The battle disrupted Axis supply lines to North Africa and demonstrated the effectiveness of British night-fighting tactics.',
            ],
            [
                'name' => 'First Battle of Sirte',
                'battle_date' => '1941-12-17',
                'battle_site' => 'Gulf of Sirte, Mediterranean',
                'description' => 'An inconclusive naval engagement between British and Italian forces during a Malta convoy operation. Both sides suffered minor damage, but the battle delayed the convoy and highlighted the challenges of Mediterranean operations.',
            ],
            [
                'name' => 'Second Battle of Sirte',
                'battle_date' => '1942-03-22',
                'battle_site' => 'Gulf of Sirte, Mediterranean',
                'description' => 'A British victory in which a small escort force successfully defended a Malta convoy against a larger Italian fleet. The British destroyers and light cruisers fought valiantly, forcing the Italian battleships to withdraw. The battle demonstrated the effectiveness of determined escort tactics.',
            ],
            [
                'name' => 'Operation Pedestal',
                'battle_date' => '1942-08-09',
                'battle_site' => 'Mediterranean Sea, near Malta',
                'description' => 'A vital Allied convoy operation to relieve Malta. The convoy was heavily attacked by Axis aircraft, submarines, and surface forces, resulting in the loss of many ships. However, the tanker SS Ohio was saved and delivered fuel to Malta, allowing the island to survive. The operation was a costly but critical victory for the Allies.',
            ],

            // ============================================
            // ARCTIC THEATER
            // ============================================

            [
                'name' => 'Battle of the Barents Sea',
                'battle_date' => '1942-12-31',
                'battle_site' => 'Barents Sea, Arctic Ocean',
                'description' => 'A night engagement in which British destroyers and cruisers protected Convoy JW 51B from the German heavy cruiser Admiral Hipper and pocket battleship Lützow. The battle was a British victory that prevented the destruction of the convoy and led to Hitler\'s decision to decommission Germany\'s surface fleet.',
            ],
            [
                'name' => 'Battle of the North Cape',
                'battle_date' => '1943-12-26',
                'battle_site' => 'North Cape, Norway',
                'description' => 'The final engagement of the German battlecruiser Scharnhorst. British battleship HMS Duke of York and her escorts intercepted and sank Scharnhorst in a night battle in the Arctic. The battle eliminated Germany\'s last operational capital ship and ended the threat to Arctic convoys.',
            ],

            // ============================================
            // NORMANDY AND WESTERN EUROPE
            // ============================================

            [
                'name' => 'D-Day Naval Bombardment',
                'battle_date' => '1944-06-06',
                'battle_site' => 'Normandy, France',
                'description' => 'The naval bombardment component of Operation Neptune, the largest amphibious invasion in history. Over 6,000 ships supported the landings at Normandy, providing naval gunfire support, transporting troops, and protecting the invasion fleet from German naval and air attacks.',
            ],
            [
                'name' => 'Operation Neptune',
                'battle_date' => '1944-06-06',
                'battle_site' => 'Normandy, France',
                'description' => 'The naval component of the D-Day landings. It involved the largest naval force ever assembled, including 6,000 ships and landing craft. The operation successfully transported over 150,000 troops to the beaches of Normandy and established a foothold in Europe.',
            ],
            [
                'name' => 'Battle of Ushant',
                'battle_date' => '1944-06-09',
                'battle_site' => 'Ushant, Brittany, France',
                'description' => 'A night battle between British and German destroyers in the English Channel. British destroyers intercepted a German naval force attempting to attack Allied shipping off Normandy, sinking one German destroyer and damaging another. The battle secured control of the Channel approaches to Normandy.',
            ],

            // ============================================
            // MAJOR OPERATIONS
            // ============================================

            [
                'name' => 'Operation Torch',
                'battle_date' => '1942-11-08',
                'battle_site' => 'North Africa',
                'description' => 'The Allied invasion of North Africa, the largest amphibious operation of the war at that time. Over 100,000 troops landed in Algeria and Morocco, supported by a powerful Allied naval force. The operation was a success and opened the way for the conquest of North Africa.',
            ],
            [
                'name' => 'Operation Husky',
                'battle_date' => '1943-07-09',
                'battle_site' => 'Sicily, Italy',
                'description' => 'The Allied invasion of Sicily, At the time, it was the largest amphibious operation of the war. Over 3,000 ships and landing craft transported 160,000 troops to Sicily. The operation was a success and led to the fall of Mussolini and Italy\'s surrender.',
            ],
        ];

        foreach ($battles as $battleData) {
            Battle::updateOrCreate(
                ['name' => $battleData['name']],
                [
                    'battle_date' => $battleData['battle_date'],
                    'battle_site' => $battleData['battle_site'],
                    'description' => $battleData['description'],
                    'image_url' => null,
                ]
            );
        }

        $this->command->info('✅ Battles seeded successfully!');
        $this->command->info('📊 Total battles: ' . count($battles));
    }
}