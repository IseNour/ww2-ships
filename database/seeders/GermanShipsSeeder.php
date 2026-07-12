<?php

namespace Database\Seeders;

use App\Models\Ship;
use Illuminate\Database\Seeder;

class GermanShipsSeeder extends Seeder
{
    public function run(): void
    {
        // ============================================
        // AIRCRAFT CARRIER
        // ============================================

        // 1. Graf Zeppelin - Graf Zeppelin-class (ID: 135)
        Ship::updateOrCreate(
            ['name' => 'Graf Zeppelin'],
            [
                'class_id' => 135,
                'launch_date' => '1938-12-08',
                'commission_date' => 'Never commissioned',
                'displacement' => 26900,
                'length' => 262.5,
                'beam' => 36.2,
                'draft' => 8.5,
                'max_speed' => 33.8,
                'crew' => 1760,
                'fate' => 'Construction was abandoned in 1943. The unfinished ship was scuttled by her German crew near Stettin on 25 April 1945 to prevent capture. She was later salvaged by the Soviet Union, studied, and sunk as a target ship in the Baltic Sea on 16 August 1947.',
                'description' => 'Graf Zeppelin was the only German aircraft carrier launched and the lead ship of the Graf Zeppelin class. Although launched in 1938, she was never completed due to changing naval priorities, technical difficulties, and competition for resources with the Luftwaffe and U-boat program. Construction was halted several times, and the ship never entered operational service. She was scuttled by Germany in April 1945, later raised by the Soviet Union for evaluation, and finally sunk as a target in the Baltic Sea in 1947. Her planned air group consisted of 12 Messerschmitt Bf 109T carrier fighters, 30 Junkers Ju 87C carrier dive bombers, and 12 Fieseler Fi 167 torpedo bombers, although the Fi 167 was later intended to be replaced by additional Ju 87C aircraft before the carrier could become operational.',
                'is_aircraft_carrier' => true,
            ]
        );

        // ============================================
        // BATTLESHIPS AND HEAVY CRUISERS
        // ============================================

        // 2. Bismarck - Bismarck-class (ID: 20)
        Ship::updateOrCreate(
            ['name' => 'Bismarck'],
            [
                'class_id' => 20,
                'launch_date' => '1939-02-14',
                'commission_date' => '1940-08-24',
                'displacement' => 41700,
                'length' => 251.0,
                'beam' => 36.0,
                'draft' => 9.3,
                'max_speed' => 30.8,
                'crew' => 2220,
                'fate' => 'Following the Battle of the Denmark Strait and the sinking of HMS Hood, Bismarck was pursued by the Royal Navy. After her rudder was disabled by a torpedo dropped from a Fairey Swordfish aircraft of HMS Ark Royal, she was overwhelmed by British battleships and cruisers and sank on 27 May 1941 in the North Atlantic.',
                'description' => 'Bismarck was the lead ship of the Bismarck class and one of the largest and most powerful battleships ever completed in Europe. Armed with eight 380 mm (15-inch) guns, she combined heavy armor, high speed, and excellent fire-control systems. During her first and only combat operation, Operation Rheinübung, she sank HMS Hood in the Denmark Strait and seriously damaged HMS Prince of Wales. Her destruction after one of history\'s most famous naval pursuits made her one of the most legendary warships of World War II.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 3. Tirpitz - Bismarck-class (ID: 20)
        Ship::updateOrCreate(
            ['name' => 'Tirpitz'],
            [
                'class_id' => 20,
                'launch_date' => '1939-04-01',
                'commission_date' => '1941-02-25',
                'displacement' => 42900,
                'length' => 251.0,
                'beam' => 36.0,
                'draft' => 10.6,
                'max_speed' => 30.8,
                'crew' => 2600,
                'fate' => 'Severely damaged by repeated British attacks before being sunk by RAF Avro Lancaster bombers using Tallboy bombs on 12 November 1944 near Tromsø, Norway.',
                'description' => 'Tirpitz was the second and final Bismarck-class battleship. Although she rarely engaged enemy surface ships, her presence in Norwegian waters forced the Royal Navy to keep powerful fleets available to protect Arctic convoys to the Soviet Union. She often called "The Lonely Queen of the North", she became the target of numerous Royal Navy and RAF operations before finally being destroyed in 1944.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 4. Scharnhorst - Scharnhorst-class (ID: 136)
        Ship::updateOrCreate(
            ['name' => 'Scharnhorst'],
            [
                'class_id' => 136,
                'launch_date' => '1936-10-03',
                'commission_date' => '1939-01-07',
                'displacement' => 31850,
                'length' => 234.9,
                'beam' => 30.0,
                'draft' => 9.9,
                'max_speed' => 31.5,
                'crew' => 1968,
                'fate' => 'Sunk during the Battle of the North Cape on 26 December 1943 by HMS Duke of York, HMS Jamaica, and several destroyers.',
                'description' => 'Scharnhorst was the lead ship of her class and one of Germany\'s fastest capital ships. She participated in the Norwegian Campaign, Atlantic commerce raiding, and the famous Channel Dash (Operation Cerberus). During the Battle of the North Cape she attempted to attack Allied Arctic convoys but was intercepted by superior British forces. After suffering radar failures and torpedo hits, she was overwhelmed and sunk with the loss of nearly her entire crew.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 5. Gneisenau - Scharnhorst-class (ID: 136)
        Ship::updateOrCreate(
            ['name' => 'Gneisenau'],
            [
                'class_id' => 136,
                'launch_date' => '1936-12-08',
                'commission_date' => '1938-05-21',
                'displacement' => 31850,
                'length' => 234.9,
                'beam' => 30.0,
                'draft' => 9.9,
                'max_speed' => 31.5,
                'crew' => 1968,
                'fate' => 'Severely damaged during a British air raid in February 1942. Decommissioned later that year, never returned to service, and was scuttled as a blockship at Gdynia on 27 March 1945.',
                'description' => 'Gneisenau served alongside Scharnhorst during the Norwegian Campaign, Atlantic commerce raiding, and Operation Berlin, where the two ships sank or captured over twenty Allied merchant vessels. She also took part in the daring Channel Dash in February 1942. Plans to rebuild her with six 380 mm (15-inch) guns were abandoned after heavy bomb damage, and she never fought again.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 6. Deutschland (later Lützow) - Deutschland-class (ID: 137)
        Ship::updateOrCreate(
            ['name' => 'Deutschland (later Lützow)'],
            [
                'class_id' => 137,
                'launch_date' => '1931-05-19',
                'commission_date' => '1933-04-01',
                'displacement' => 12100,
                'length' => 186.0,
                'beam' => 20.7,
                'draft' => 7.25,
                'max_speed' => 28,
                'crew' => 1150,
                'fate' => 'Renamed Lützow on 25 January 1940. Severely damaged during the war, scuttled by her crew on 4 May 1945 near Swinemünde; later raised and sunk as a Soviet target ship in 1947.',
                'description' => 'Deutschland was the lead ship of the Deutschland-class "Panzerschiffe," commonly known as "pocket battleships." Built to comply with the Treaty of Versailles\' 10,000-ton displacement limit, though her actual displacement exceeded that figure, she combined battleship-sized 280 mm guns with cruiser speed and diesel propulsion, making her capable of outrunning stronger opponents while overpowering lighter ships. She participated in the Spanish Civil War patrols and commerce raiding operations during WWII. Renamed Lützow in 1940 to avoid the propaganda impact of losing a ship bearing Germany\'s name, she later served in the Baltic supporting German ground forces until the end of the war.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 7. Admiral Graf Spee - Deutschland-class (ID: 137)
        Ship::updateOrCreate(
            ['name' => 'Admiral Graf Spee'],
            [
                'class_id' => 137,
                'launch_date' => '1934-06-30',
                'commission_date' => '1936-01-06',
                'displacement' => 12340,
                'length' => 186.0,
                'beam' => 21.6,
                'draft' => 7.34,
                'max_speed' => 28.5,
                'crew' => 1150,
                'fate' => 'Scuttled by her crew off Montevideo, Uruguay, on 17 December 1939 following the Battle of the River Plate.',
                'description' => 'Admiral Graf Spee was one of Germany\'s most famous commerce raiders. During the opening months of WWII she sank or captured nine Allied merchant ships in the South Atlantic and Indian Oceans while avoiding unnecessary civilian casualties. On 13 December 1939 she fought the British cruisers HMS Exeter, HMS Ajax, and HMNZS Achilles during the Battle of the River Plate. Damaged and believing a superior British force awaited outside Montevideo, Captain Hans Langsdorff ordered the ship scuttled rather than risk destruction or internment.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 8. Admiral Scheer - Deutschland-class (ID: 137)
        Ship::updateOrCreate(
            ['name' => 'Admiral Scheer'],
            [
                'class_id' => 137,
                'launch_date' => '1933-04-01',
                'commission_date' => '1934-11-12',
                'displacement' => 12340,
                'length' => 186.0,
                'beam' => 21.6,
                'draft' => 7.25,
                'max_speed' => 28.5,
                'crew' => 1150,
                'fate' => 'Capsized after an RAF bombing raid at Kiel on 9 April 1945; wreck broken up after the war.',
                'description' => 'Admiral Scheer became Germany\'s most successful surface commerce raider of WWII. Between 1940 and 1941 she captured or sank over 100,000 tons of Allied shipping during a long Atlantic and Indian Ocean cruise. Later she supported operations against Arctic convoys and Soviet forces in the Baltic. Her combination of heavy 280 mm guns, diesel propulsion, and long range made her one of the Kriegsmarine\'s most effective raiders.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 9. Blücher - Admiral Hipper-class (ID: 138)
        Ship::updateOrCreate(
            ['name' => 'Blücher'],
            [
                'class_id' => 138,
                'launch_date' => '1937-06-08',
                'commission_date' => '1939-09-20',
                'displacement' => 14050,
                'length' => 205.9,
                'beam' => 21.3,
                'draft' => 7.9,
                'max_speed' => 32,
                'crew' => 1380,
                'fate' => 'Sunk on 9 April 1940 by Norwegian coastal artillery and torpedoes during the invasion of Norway (Operation Weserübung).',
                'description' => 'Blücher was the second Admiral Hipper-class heavy cruiser and served as the flagship of the force assigned to capture Oslo during Operation Weserübung. As she entered the Oslofjord, she was struck repeatedly by shells from Oscarsborg Fortress before being hit by two old but effective torpedoes. Fires spread rapidly and detonated ammunition stores, causing the cruiser to capsize and sink with heavy loss of life. Her destruction delayed the German occupation of Oslo, allowing Norway\'s government and royal family to escape.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 10. Prinz Eugen - Admiral Hipper-class (ID: 138)
        Ship::updateOrCreate(
            ['name' => 'Prinz Eugen'],
            [
                'class_id' => 138,
                'launch_date' => '1938-08-22',
                'commission_date' => '1940-08-01',
                'displacement' => 16970,
                'length' => 212.5,
                'beam' => 21.7,
                'draft' => 7.2,
                'max_speed' => 32,
                'crew' => 1600,
                'fate' => 'Surrendered to the British in May 1945, transferred to the United States as a war prize, survived both Able and Baker atomic tests during Operation Crossroads, and capsized at Kwajalein Atoll on 22 December 1946 due to progressive flooding caused by the test damage.',
                'description' => 'Prinz Eugen was one of Germany\'s most successful and best-known heavy cruisers. She accompanied Bismarck during Operation Rheinübung and scored the first hits against HMS Hood before Hood exploded. After separating from Bismarck, she continued commerce raiding operations and later supported German forces in the Baltic with naval gunfire against advancing Soviet troops. Captured intact at the end of the war, she became one of the few major warships to survive two atomic bomb explosions before eventually sinking months later.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 11. Lützow (Admiral Hipper-class) - Admiral Hipper-class (ID: 138)
        Ship::updateOrCreate(
            ['name' => 'Lützow (Admiral Hipper-class)'],
            [
                'class_id' => 138,
                'launch_date' => '1939-07-01',
                'commission_date' => 'Never commissioned (sold incomplete to the Soviet Union in 1940)',
                'displacement' => 14050,
                'length' => 210.0,
                'beam' => 21.3,
                'draft' => 7.9,
                'max_speed' => 32,
                'crew' => 0,
                'fate' => 'Sold incomplete to the Soviet Union in February 1940. Renamed Petropavlovsk in 1940, Tallinn in 1943, and Dniepr in 1953 before being scrapped in the late 1950s.',
                'description' => 'Lützow was the fifth Admiral Hipper-class heavy cruiser. Construction was halted when Germany sold the incomplete hull to the Soviet Union under the German-Soviet agreements of 1940. Although she never entered Kriegsmarine service, the partially completed cruiser later provided artillery support during the Siege of Leningrad while serving in the Soviet Navy. She remains historically significant as the only major German cruiser transferred to another navy before completion.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 12. Seydlitz - Admiral Hipper-class (ID: 138)
        Ship::updateOrCreate(
            ['name' => 'Seydlitz'],
            [
                'class_id' => 138,
                'launch_date' => '1939-01-19',
                'commission_date' => 'Never commissioned',
                'displacement' => 14050,
                'length' => 210.0,
                'beam' => 21.3,
                'draft' => 7.9,
                'max_speed' => 32,
                'crew' => 1380,
                'fate' => 'Never completed. Conversion into the proposed aircraft carrier Weser began in 1942 but was abandoned before completion. Seydlitz was scuttled at Königsberg in January 1945 to prevent her capture by advancing Soviet forces. She was later raised and scrapped by the Soviet Union.',
                'description' => 'Seydlitz was the fourth Admiral Hipper-class heavy cruiser. Although launched and nearly complete, she never entered operational service. In 1942, the Kriegsmarine decided to convert her into the proposed aircraft carrier Weser, removing her forward superstructure and part of her armament in preparation for flight-deck installation. However, work was halted due to material shortages and changing strategic priorities, and the conversion was ultimately abandoned before completion. She was eventually scuttled to prevent capture by advancing Soviet forces. Despite never serving in combat, Seydlitz represents Germany\'s unsuccessful attempt to expand its carrier fleet.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // LIGHT CRUISERS
        // ============================================

        // 13. Emden - Emden-class (ID: 141)
        Ship::updateOrCreate(
            ['name' => 'Emden'],
            [
                'class_id' => 141,
                'launch_date' => '1925-01-07',
                'commission_date' => '1925-10-15',
                'displacement' => 5600,
                'length' => 155.1,
                'beam' => 14.2,
                'draft' => 5.3,
                'max_speed' => 29,
                'crew' => 699,
                'fate' => 'Survived WWII; heavily damaged by Allied air raids, scuttled on 3 May 1945 at Kiel. Broken up in 1949–1950.',
                'description' => 'Emden was the first major surface warship built for the post-World War I German Navy. She served as a training cruiser, diplomatic vessel, and commerce raider support ship before participating in the Norwegian Campaign. Throughout WWII she escorted convoys, laid mines, trained cadets, and supported operations in the Baltic. Although less powerful than later German cruisers, Emden had one of the longest service careers in the Kriegsmarine.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 14. Leipzig - Leipzig-class (ID: 140)
        Ship::updateOrCreate(
            ['name' => 'Leipzig'],
            [
                'class_id' => 140,
                'launch_date' => '1929-10-18',
                'commission_date' => '1931-10-08',
                'displacement' => 6710,
                'length' => 177.0,
                'beam' => 16.3,
                'draft' => 5.7,
                'max_speed' => 32,
                'crew' => 850,
                'fate' => 'Survived WWII; badly damaged after colliding with Prinz Eugen in October 1944. Deemed unfit for further service after the war, she was scuttled in the North Sea on 20 July 1946.',
                'description' => 'Leipzig represented an improved design over the earlier Königsberg class, incorporating diesel engines for economical cruising. She took part in neutrality patrols during the Spanish Civil War, the invasion of Poland, and operations in Norwegian waters. After being torpedoed by HMS Salmon in 1939 and later severely damaged in a collision with Prinz Eugen, she spent the remainder of the war in training and coastal support roles.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 15. Nürnberg - Leipzig-class (ID: 140)
        Ship::updateOrCreate(
            ['name' => 'Nürnberg'],
            [
                'class_id' => 140,
                'launch_date' => '1934-12-08',
                'commission_date' => '1935-11-02',
                'displacement' => 6820,
                'length' => 181.3,
                'beam' => 16.4,
                'draft' => 5.7,
                'max_speed' => 32,
                'crew' => 850,
                'fate' => 'Survived WWII; transferred to the Soviet Navy in 1946 as Admiral Makarov. Scrapped between 1959 and 1961.',
                'description' => 'Nürnberg was the final light cruiser built by the Kriegsmarine before WWII and an improved version of Leipzig. She participated in neutrality patrols, minelaying operations, convoy escort missions, and Baltic operations. Unlike many German cruisers, Nürnberg survived the war largely intact and continued serving for the Soviet Navy for more than a decade.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 16. Köln - Königsberg-class (ID: 139)
        Ship::updateOrCreate(
            ['name' => 'Köln'],
            [
                'class_id' => 139,
                'launch_date' => '1928-05-23',
                'commission_date' => '1930-01-15',
                'displacement' => 6000,
                'length' => 174.0,
                'beam' => 15.2,
                'draft' => 5.6,
                'max_speed' => 32,
                'crew' => 850,
                'fate' => 'Severely damaged during Allied air raids in March 1945; capsized in shallow water at Wilhelmshaven. Scrapped after the war.',
                'description' => 'Köln was the third and final ship of the Königsberg class. She served in the Spanish Civil War neutrality patrols before participating in the invasion of Norway and escort operations in the North Sea and Baltic. Later in the war she was used primarily as a training ship and shore bombardment vessel before being destroyed during Allied bombing.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 17. Königsberg - Königsberg-class (ID: 139)
        Ship::updateOrCreate(
            ['name' => 'Königsberg'],
            [
                'class_id' => 139,
                'launch_date' => '1927-03-26',
                'commission_date' => '1929-04-17',
                'displacement' => 6000,
                'length' => 174.0,
                'beam' => 15.2,
                'draft' => 5.6,
                'max_speed' => 32,
                'crew' => 850,
                'fate' => 'Sunk on 10 April 1940 at Bergen, Norway, by Blackburn Skua dive bombers from the British aircraft carrier HMS Ark Royal.',
                'description' => 'Königsberg was the lead ship of her class and participated in Operation Weserübung, the invasion of Norway. After being damaged by Norwegian coastal batteries while landing troops at Bergen, she became the first major warship ever sunk solely by carrier-based dive bombers in combat, marking a significant milestone in naval aviation history.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 18. Karlsruhe - Königsberg-class (ID: 139)
        Ship::updateOrCreate(
            ['name' => 'Karlsruhe'],
            [
                'class_id' => 139,
                'launch_date' => '1927-08-20',
                'commission_date' => '1929-11-06',
                'displacement' => 6000,
                'length' => 174.0,
                'beam' => 15.2,
                'draft' => 5.6,
                'max_speed' => 32,
                'crew' => 850,
                'fate' => 'Torpedoed by the British submarine HMS Truant on 9 April 1940 after landing troops at Kristiansand. With propulsion lost and extensive flooding, she was scuttled later that day by the German torpedo boat Greif.',
                'description' => 'Karlsruhe participated in Operation Weserübung, transporting German troops to Kristiansand during the invasion of Norway. Shortly after completing her mission, she was struck by a torpedo from HMS Truant, leaving her dead in the water. With no hope of saving the cruiser, German escorts evacuated the crew and scuttled her, making her one of the Kriegsmarine\'s first major surface warship losses of World War II.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // DESTROYERS
        // ============================================

        // 19. Z1 Leberecht Maass - Type 1934 (ID: 142)
        Ship::updateOrCreate(
            ['name' => 'Z1 Leberecht Maass'],
            [
                'class_id' => 142,
                'launch_date' => '1935-08-18',
                'commission_date' => '1937-01-14',
                'displacement' => 2223,
                'length' => 119.0,
                'beam' => 11.3,
                'draft' => 4.23,
                'max_speed' => 38,
                'crew' => 325,
                'fate' => 'Sunk on 22 February 1940 during Operation Wikinger after being accidentally bombed by a Luftwaffe Heinkel He 111 and subsequently striking mines. About 280 crew were lost.',
                'description' => 'Z1 Leberecht Maass was the lead ship of Germany\'s first modern destroyer class built after World War I. She participated in fleet exercises, North Sea patrols, and minelaying operations before being lost during the disastrous Operation Wikinger, one of the Kriegsmarine\'s worst friendly-fire incidents.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 20. Z2 Georg Thiele - Type 1934 (ID: 142)
        Ship::updateOrCreate(
            ['name' => 'Z2 Georg Thiele'],
            [
                'class_id' => 142,
                'launch_date' => '1935-08-18',
                'commission_date' => '1937-02-27',
                'displacement' => 2223,
                'length' => 119.0,
                'beam' => 11.3,
                'draft' => 4.23,
                'max_speed' => 38,
                'crew' => 325,
                'fate' => 'Heavily damaged during the Second Battle of Narvik on 13 April 1940 and deliberately run aground near Narvik. Wreck later abandoned.',
                'description' => 'Z2 Georg Thiele was one of the Kriegsmarine\'s most distinguished early destroyers. During the Second Battle of Narvik she fought British destroyers at close range, severely damaging HMS Eskimo by blowing off her bow. After sustaining overwhelming damage, Georg Thiele was intentionally beached to save her surviving crew.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 21. Z3 Max Schultz - Type 1934 (ID: 142)
        Ship::updateOrCreate(
            ['name' => 'Z3 Max Schultz'],
            [
                'class_id' => 142,
                'launch_date' => '1935-11-30',
                'commission_date' => '1937-04-08',
                'displacement' => 2223,
                'length' => 119.0,
                'beam' => 11.3,
                'draft' => 4.23,
                'max_speed' => 38,
                'crew' => 325,
                'fate' => 'Lost with all hands on 22 February 1940 during Operation Wikinger, probably after striking British mines.',
                'description' => 'Z3 Max Schultz carried out patrols and minelaying operations in the North Sea during the opening months of WWII. She disappeared without survivors during Operation Wikinger. Modern historical research concludes that she most likely struck a British minefield rather than being sunk by enemy surface forces.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 22. Z4 Richard Beitzen - Type 1934A (ID: 143)
        Ship::updateOrCreate(
            ['name' => 'Z4 Richard Beitzen'],
            [
                'class_id' => 143,
                'launch_date' => '1935-11-30',
                'commission_date' => '1937-05-13',
                'displacement' => 2171,
                'length' => 119.0,
                'beam' => 11.3,
                'draft' => 4.23,
                'max_speed' => 38,
                'crew' => 325,
                'fate' => 'Survived WWII; transferred to Great Britain in 1946 as a war prize and scrapped in 1949.',
                'description' => 'Z4 Richard Beitzen participated in the Norwegian Campaign, Channel operations, Arctic convoy missions, and minelaying operations throughout the war. She was one of the few early German destroyers to survive WWII and became a valuable source of technical intelligence for the Allies after Germany\'s surrender.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 23. Z5 Paul Jacobi - Type 1934A (ID: 143)
        Ship::updateOrCreate(
            ['name' => 'Z5 Paul Jacobi'],
            [
                'class_id' => 143,
                'launch_date' => '1936-03-24',
                'commission_date' => '1937-06-29',
                'displacement' => 2171,
                'length' => 119.0,
                'beam' => 11.3,
                'draft' => 4.23,
                'max_speed' => 38,
                'crew' => 325,
                'fate' => 'Survived WWII; transferred to the United Kingdom after the war and scrapped in 1949.',
                'description' => 'Z5 Paul Jacobi took part in the Norwegian Campaign, Channel Dash, convoy escort missions, and numerous minelaying operations in the North Sea and Baltic. She survived the conflict despite extensive combat service and was later allocated to Britain as a war prize.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 24. Z6 Theodor Riedel - Type 1934A (ID: 143)
        Ship::updateOrCreate(
            ['name' => 'Z6 Theodor Riedel'],
            [
                'class_id' => 143,
                'launch_date' => '1936-04-22',
                'commission_date' => '1937-07-02',
                'displacement' => 2171,
                'length' => 119.0,
                'beam' => 11.3,
                'draft' => 4.23,
                'max_speed' => 38,
                'crew' => 325,
                'fate' => 'Survived WWII; transferred to France in 1946, commissioned as Kléber, served until 1957, and was scrapped in 1958.',
                'description' => 'Z6 Theodor Riedel participated in the Norwegian Campaign, Operation Cerberus (the Channel Dash), Arctic operations, and Baltic evacuation missions. She survived the war and went on to serve in the French Navy as Kléber, making her one of the longest-serving destroyers originally built for the Kriegsmarine.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 25. Z7 Hermann Schoemann - Type 1934A (ID: 143)
        Ship::updateOrCreate(
            ['name' => 'Z7 Hermann Schoemann'],
            [
                'class_id' => 143,
                'launch_date' => '1936-09-09',
                'commission_date' => '1937-09-09',
                'displacement' => 2171,
                'length' => 119.0,
                'beam' => 11.3,
                'draft' => 4.23,
                'max_speed' => 38,
                'crew' => 325,
                'fate' => 'Severely damaged during the Battle of the Barents Sea on 31 December 1942 and scuttled by her crew after becoming disabled.',
                'description' => 'Z7 Hermann Schoemann served in the Norwegian Campaign, Arctic operations, and convoy escort missions. During the Battle of the Barents Sea she was crippled by gunfire from British cruisers while attacking Convoy JW 51B. Unable to escape, she was abandoned and scuttled, marking one of Germany\'s most significant destroyer losses in Arctic waters.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 26. Z8 Bruno Heinemann - Type 1934A (ID: 143)
        Ship::updateOrCreate(
            ['name' => 'Z8 Bruno Heinemann'],
            [
                'class_id' => 143,
                'launch_date' => '1936-12-15',
                'commission_date' => '1938-01-08',
                'displacement' => 2171,
                'length' => 119.0,
                'beam' => 11.3,
                'draft' => 4.23,
                'max_speed' => 38,
                'crew' => 325,
                'fate' => 'Sunk by a British mine near the Dutch coast on 25 January 1942.',
                'description' => 'Z8 Bruno Heinemann participated in the Norwegian Campaign, North Sea patrols, minelaying operations, and convoy escort missions. While escorting German capital ships through the English Channel, she struck a British mine and sank with heavy loss of life.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 27. Z9 Wolfgang Zenker - Type 1934A (ID: 143)
        Ship::updateOrCreate(
            ['name' => 'Z9 Wolfgang Zenker'],
            [
                'class_id' => 143,
                'launch_date' => '1937-03-27',
                'commission_date' => '1938-07-02',
                'displacement' => 2171,
                'length' => 119.0,
                'beam' => 11.3,
                'draft' => 4.23,
                'max_speed' => 38,
                'crew' => 325,
                'fate' => 'Scuttled by her crew at Wilhelmshaven on 3 May 1945. Raised after the war and scrapped.',
                'description' => 'Z9 Wolfgang Zenker fought during the Norwegian Campaign, escorted major surface units, and took part in Arctic and Baltic operations. She survived years of active service before being scuttled in the final days of the war to prevent capture by Allied forces.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 28. Z10 Hans Lody - Type 1934A (ID: 143)
        Ship::updateOrCreate(
            ['name' => 'Z10 Hans Lody'],
            [
                'class_id' => 143,
                'launch_date' => '1937-05-14',
                'commission_date' => '1938-09-26',
                'displacement' => 2171,
                'length' => 119.0,
                'beam' => 11.3,
                'draft' => 4.23,
                'max_speed' => 38,
                'crew' => 325,
                'fate' => 'Survived WWII; transferred to the United Kingdom after the war and scrapped in 1949.',
                'description' => 'Z10 Hans Lody served in the Norwegian Campaign, Arctic convoy operations, the Channel Dash, and Baltic evacuation missions. She survived the war despite extensive combat service and was allocated to Britain as a war prize before being broken up.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 29. Z11 Bernd von Arnim - Type 1934A (ID: 143)
        Ship::updateOrCreate(
            ['name' => 'Z11 Bernd von Arnim'],
            [
                'class_id' => 143,
                'launch_date' => '1937-03-27',
                'commission_date' => '1938-12-06',
                'displacement' => 2171,
                'length' => 119.0,
                'beam' => 11.3,
                'draft' => 4.23,
                'max_speed' => 38,
                'crew' => 325,
                'fate' => 'Scuttled after the Second Battle of Narvik on 13 April 1940.',
                'description' => 'Z11 Bernd von Arnim was among the German destroyers that transported mountain troops during the invasion of Norway. She fought fiercely in both Battles of Narvik before running out of ammunition and being deliberately scuttled by her crew to avoid capture.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 30. Z12 Erich Giese - Type 1934A (ID: 143)
        Ship::updateOrCreate(
            ['name' => 'Z12 Erich Giese'],
            [
                'class_id' => 143,
                'launch_date' => '1937-03-12',
                'commission_date' => '1939-03-04',
                'displacement' => 2171,
                'length' => 119.0,
                'beam' => 11.3,
                'draft' => 4.23,
                'max_speed' => 38,
                'crew' => 325,
                'fate' => 'Sunk during the Second Battle of Narvik on 13 April 1940 by British destroyers and battleship HMS Warspite.',
                'description' => 'Z12 Erich Giese participated in the invasion of Norway and was one of the destroyers trapped in Narvik after the first battle. During the second engagement she was overwhelmed by British naval gunfire while attempting to defend the harbor, becoming one of the major German destroyer losses of the Norwegian Campaign.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 31. Z13 Erich Koellner - Type 1934A (ID: 143)
        Ship::updateOrCreate(
            ['name' => 'Z13 Erich Koellner'],
            [
                'class_id' => 143,
                'launch_date' => '1937-09-18',
                'commission_date' => '1939-08-28',
                'displacement' => 2171,
                'length' => 119.0,
                'beam' => 11.3,
                'draft' => 4.23,
                'max_speed' => 38,
                'crew' => 325,
                'fate' => 'Sunk during the Second Battle of Narvik on 13 April 1940 after being attacked by British destroyers and aircraft from HMS Furious.',
                'description' => 'Z13 Erich Koellner entered service only weeks before WWII began. She participated in the invasion of Norway, transporting German mountain troops to Narvik. While attempting to ambush British forces during the Second Battle of Narvik, she was detected, heavily bombarded by British destroyers, located by aircraft from HMS Furious and subsequently overwhelmed by British naval gunfire during the Second Battle of Narvik. Her loss contributed to the destruction of the German destroyer force at Narvik.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 32. Z14 Friedrich Ihn - Type 1934A (ID: 143)
        Ship::updateOrCreate(
            ['name' => 'Z14 Friedrich Ihn'],
            [
                'class_id' => 143,
                'launch_date' => '1937-11-07',
                'commission_date' => '1939-04-21',
                'displacement' => 2171,
                'length' => 119.0,
                'beam' => 11.3,
                'draft' => 4.23,
                'max_speed' => 38,
                'crew' => 325,
                'fate' => 'Survived WWII; transferred to the Soviet Navy in 1946, renamed Prytky, and scrapped in the late 1950s.',
                'description' => 'Z14 Friedrich Ihn served throughout the war in Norwegian waters, the Arctic, and the Baltic. She escorted heavy units such as Tirpitz, participated in convoy operations, and helped evacuate civilians and troops from East Prussia during the final months of the war. She was one of the few early destroyers to survive intact.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 33. Z15 Erich Steinbrinck - Type 1934A (ID: 143)
        Ship::updateOrCreate(
            ['name' => 'Z15 Erich Steinbrinck'],
            [
                'class_id' => 143,
                'launch_date' => '1938-09-24',
                'commission_date' => '1939-05-31',
                'displacement' => 2171,
                'length' => 119.0,
                'beam' => 11.3,
                'draft' => 4.23,
                'max_speed' => 38,
                'crew' => 325,
                'fate' => 'Survived WWII; transferred to the Soviet Navy in 1946 as Pylky, later scrapped.',
                'description' => 'Z15 Erich Steinbrinck participated in the Norwegian Campaign, Arctic operations, minelaying missions, and Baltic convoy escorts. She spent much of the later war protecting German shipping and evacuating troops from the eastern Baltic before being surrendered to the Soviet Union.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 34. Z16 Friedrich Eckoldt - Type 1934A (ID: 143)
        Ship::updateOrCreate(
            ['name' => 'Z16 Friedrich Eckoldt'],
            [
                'class_id' => 143,
                'launch_date' => '1938-03-21',
                'commission_date' => '1939-07-28',
                'displacement' => 2171,
                'length' => 119.0,
                'beam' => 11.3,
                'draft' => 4.23,
                'max_speed' => 38,
                'crew' => 325,
                'fate' => 'Sunk during the Battle of the Barents Sea on 31 December 1942 after being mistaken for the German cruiser Admiral Hipper and approaching the British cruiser HMS Sheffield, which destroyed her at close range.',
                'description' => 'Z16 Friedrich Eckoldt served in the Norwegian Campaign and later escorted Arctic operations alongside Germany\'s heavy surface fleet. During the Battle of the Barents Sea she mistakenly identified HMS Sheffield as a friendly ship, allowing the British cruiser to open devastating fire at point-blank range. The destroyer exploded and sank with almost all hands.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 35. Z17 Diether von Roeder - Type 1936 (ID: 144)
        Ship::updateOrCreate(
            ['name' => 'Z17 Diether von Roeder'],
            [
                'class_id' => 144,
                'launch_date' => '1938-08-28',
                'commission_date' => '1939-08-29',
                'displacement' => 2411,
                'length' => 123.4,
                'beam' => 11.8,
                'draft' => 4.5,
                'max_speed' => 38,
                'crew' => 323,
                'fate' => 'Heavily damaged during the First Battle of Narvik on 10 April 1940 and scuttled three days later.',
                'description' => 'Z17 Diether von Roeder represented the improved Type 1936 destroyer design. During the First Battle of Narvik she engaged British destroyers at close range, scoring several hits before suffering crippling damage. Unable to escape or be repaired, she was scuttled by her crew after the battle.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 36. Z18 Hans Lüdemann - Type 1936 (ID: 144)
        Ship::updateOrCreate(
            ['name' => 'Z18 Hans Lüdemann'],
            [
                'class_id' => 144,
                'launch_date' => '1938-08-25',
                'commission_date' => '1939-10-08',
                'displacement' => 2411,
                'length' => 123.4,
                'beam' => 11.8,
                'draft' => 4.5,
                'max_speed' => 38,
                'crew' => 323,
                'fate' => 'Scuttled after the Second Battle of Narvik on 13 April 1940.',
                'description' => 'Z18 Hans Lüdemann transported German troops during the invasion of Norway and fought in both Battles of Narvik. After exhausting her ammunition and suffering damage, she was deliberately scuttled by her crew to prevent capture, becoming one of the ten destroyers lost in the Narvik campaign.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 37. Z19 Hermann Künne - Type 1936 (ID: 144)
        Ship::updateOrCreate(
            ['name' => 'Z19 Hermann Künne'],
            [
                'class_id' => 144,
                'launch_date' => '1938-12-22',
                'commission_date' => '1940-01-12',
                'displacement' => 2411,
                'length' => 123.4,
                'beam' => 11.8,
                'draft' => 4.5,
                'max_speed' => 38,
                'crew' => 323,
                'fate' => 'Scuttled after the Second Battle of Narvik on 13 April 1940.',
                'description' => 'Commissioned only months before the invasion of Norway, Z19 Hermann Künne took part in transporting German mountain troops to Narvik. Trapped after the British counterattack, she fought until her ammunition was nearly exhausted before being scuttled by her crew.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 38. Z20 Karl Galster - Type 1936 (ID: 144)
        Ship::updateOrCreate(
            ['name' => 'Z20 Karl Galster'],
            [
                'class_id' => 144,
                'launch_date' => '1939-06-15',
                'commission_date' => '1940-03-21',
                'displacement' => 2411,
                'length' => 123.4,
                'beam' => 11.8,
                'draft' => 4.5,
                'max_speed' => 38,
                'crew' => 323,
                'fate' => 'Survived WWII; transferred to the Soviet Navy in 1946 as Prochny, later scrapped.',
                'description' => 'Z20 Karl Galster served throughout the war in Norwegian waters, the Arctic, and the Baltic. She escorted heavy warships, participated in minelaying operations, and helped evacuate thousands of German civilians and soldiers during the final months of the conflict. She was one of the few destroyers to survive the entire war.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 39. Z21 Wilhelm Heidkamp - Type 1936 (ID: 144)
        Ship::updateOrCreate(
            ['name' => 'Z21 Wilhelm Heidkamp'],
            [
                'class_id' => 144,
                'launch_date' => '1937-12-20',
                'commission_date' => '1939-06-20',
                'displacement' => 2411,
                'length' => 123.4,
                'beam' => 11.8,
                'draft' => 4.5,
                'max_speed' => 38,
                'crew' => 323,
                'fate' => 'Sunk during the First Battle of Narvik on 10 April 1940 after being struck by a torpedo from HMS Hardy.',
                'description' => 'Serving as Commodore Friedrich Bonte\'s flagship during the invasion of Norway, Z21 Wilhelm Heidkamp led the German destroyer flotilla into Narvik. A torpedo from HMS Hardy detonated her aft ammunition magazine, causing catastrophic damage and killing Commodore Bonte. She later sank in Narvik harbor.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 40. Z22 Anton Schmitt - Type 1936 (ID: 144)
        Ship::updateOrCreate(
            ['name' => 'Z22 Anton Schmitt'],
            [
                'class_id' => 144,
                'launch_date' => '1938-09-20',
                'commission_date' => '1939-09-24',
                'displacement' => 2411,
                'length' => 123.4,
                'beam' => 11.8,
                'draft' => 4.5,
                'max_speed' => 38,
                'crew' => 323,
                'fate' => 'Sunk during the First Battle of Narvik on 10 April 1940 by British destroyers.',
                'description' => 'Z22 Anton Schmitt participated in the invasion of Norway shortly after entering service. During the First Battle of Narvik she engaged British destroyers but was overwhelmed by concentrated gunfire and torpedo attacks. She sank after a fierce engagement, becoming one of the first German destroyers lost in the Norwegian Campaign.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 41. Z23 - Type 1936A (ID: 145)
        Ship::updateOrCreate(
            ['name' => 'Z23'],
            [
                'class_id' => 145,
                'launch_date' => '1939-12-15',
                'commission_date' => '1940-09-15',
                'displacement' => 2603,
                'length' => 127.0,
                'beam' => 12.0,
                'draft' => 4.65,
                'max_speed' => 36,
                'crew' => 332,
                'fate' => 'Survived WWII; transferred to France in 1946 as Leopard. Scrapped in 1958.',
                'description' => 'Z23 was the lead ship of the Type 1936A destroyers. She served in the English Channel, Norwegian waters, and the Bay of Biscay, escorting German surface raiders and U-boats. Later she provided naval gunfire support during operations against Allied forces in France. Damaged by Allied air attacks in 1944, she survived the war and was transferred to the French Navy.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 42. Z24 - Type 1936A (ID: 145)
        Ship::updateOrCreate(
            ['name' => 'Z24'],
            [
                'class_id' => 145,
                'launch_date' => '1940-03-07',
                'commission_date' => '1940-10-26',
                'displacement' => 2603,
                'length' => 127.0,
                'beam' => 12.0,
                'draft' => 4.65,
                'max_speed' => 36,
                'crew' => 332,
                'fate' => 'Sunk by RAF aircraft near Le Verdon, France, on 25 August 1944.',
                'description' => 'Z24 operated in Norwegian waters, the Arctic, and later the Bay of Biscay. She escorted convoys, laid mines, and fought Allied naval forces. During the Allied advance following the Normandy landings, she was heavily damaged and ultimately sunk by British aircraft.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 43. Z25 - Type 1936A (ID: 145)
        Ship::updateOrCreate(
            ['name' => 'Z25'],
            [
                'class_id' => 145,
                'launch_date' => '1940-03-16',
                'commission_date' => '1940-11-30',
                'displacement' => 2603,
                'length' => 127.0,
                'beam' => 12.0,
                'draft' => 4.65,
                'max_speed' => 36,
                'crew' => 332,
                'fate' => 'Survived WWII; transferred to France in 1946 as Hoche. Scrapped in 1961.',
                'description' => 'Z25 served in Norwegian waters, escorted Arctic operations, and participated in the Battle of the Barents Sea. She later supported operations in the Baltic Sea, evacuating German civilians and troops as Soviet forces advanced. After the war she served in the French Navy.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 44. Z26 - Type 1936A (ID: 145)
        Ship::updateOrCreate(
            ['name' => 'Z26'],
            [
                'class_id' => 145,
                'launch_date' => '1940-04-16',
                'commission_date' => '1941-01-11',
                'displacement' => 2603,
                'length' => 127.0,
                'beam' => 12.0,
                'draft' => 4.65,
                'max_speed' => 36,
                'crew' => 332,
                'fate' => 'Sunk on 29 March 1942 during the attacks on Convoy PQ 13 after being heavily damaged by British destroyers.',
                'description' => 'Z26 served primarily with the Kriegsmarine\'s Arctic forces, escorting convoys and operating against Allied shipping. During attacks on Arctic Convoy PQ 13, she engaged British destroyers but was crippled by gunfire and torpedoes before finally sinking.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 45. Z27 - Type 1936A (Mob) (ID: 146)
        Ship::updateOrCreate(
            ['name' => 'Z27'],
            [
                'class_id' => 146,
                'launch_date' => '1941-08-05',
                'commission_date' => '1942-02-26',
                'displacement' => 2657,
                'length' => 127.0,
                'beam' => 12.0,
                'draft' => 4.65,
                'max_speed' => 36,
                'crew' => 332,
                'fate' => 'Sunk on 28 December 1943 during the Battle of the Bay of Biscay.',
                'description' => 'Z27 escorted blockade runners and German merchant ships operating through the Bay of Biscay. During a major engagement with British cruisers and destroyers, she was overwhelmed by superior Allied firepower and sunk along with several accompanying torpedo boats.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 46. Z28 - Type 1936A (Mob) (ID: 146)
        Ship::updateOrCreate(
            ['name' => 'Z28'],
            [
                'class_id' => 146,
                'launch_date' => '1941-08-30',
                'commission_date' => '1942-08-09',
                'displacement' => 2657,
                'length' => 127.0,
                'beam' => 12.0,
                'draft' => 4.65,
                'max_speed' => 36,
                'crew' => 332,
                'fate' => 'Severely damaged by Allied aircraft in March 1945; decommissioned after the war and scrapped in 1946.',
                'description' => 'Z28 served mainly in Norwegian and Baltic waters, escorting convoys, laying mines, and supporting German ground forces. During the final months of the war she participated in evacuation operations across the Baltic before being badly damaged in an Allied air raid, ending her operational service.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 47. Z29 - Type 1936A (Mob) (ID: 146)
        Ship::updateOrCreate(
            ['name' => 'Z29'],
            [
                'class_id' => 146,
                'launch_date' => '1941-10-15',
                'commission_date' => '1942-06-25',
                'displacement' => 2657,
                'length' => 127.0,
                'beam' => 12.0,
                'draft' => 4.65,
                'max_speed' => 36,
                'crew' => 332,
                'fate' => 'Survived WWII; allocated to the United States in 1946 for evaluation. Scrapped in 1948.',
                'description' => 'Z29 served primarily in Norwegian and Arctic waters, escorting convoys and supporting German naval operations. She participated in the Battle of the Barents Sea alongside the heavy cruiser Admiral Hipper. Later, she took part in Baltic evacuation missions before surviving the war.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 48. Z30 - Type 1936A (Mob) (ID: 146)
        Ship::updateOrCreate(
            ['name' => 'Z30'],
            [
                'class_id' => 146,
                'launch_date' => '1941-11-15',
                'commission_date' => '1942-10-09',
                'displacement' => 2657,
                'length' => 127.0,
                'beam' => 12.0,
                'draft' => 4.65,
                'max_speed' => 36,
                'crew' => 332,
                'fate' => 'Survived WWII; transferred to Great Britain after the war and scrapped in 1948.',
                'description' => 'Z30 operated mainly in northern waters, escorting convoys to occupied Norway and protecting German surface units. She also participated in mine-laying operations and escorted battleships and heavy cruisers before surviving the conflict.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 49. Z31 - Type 1936A (Mob) (ID: 146)
        Ship::updateOrCreate(
            ['name' => 'Z31'],
            [
                'class_id' => 146,
                'launch_date' => '1941-05-15',
                'commission_date' => '1942-04-11',
                'displacement' => 2657,
                'length' => 127.0,
                'beam' => 12.0,
                'draft' => 4.65,
                'max_speed' => 36,
                'crew' => 332,
                'fate' => 'Survived WWII; transferred to France as Marceau in 1946. Scrapped in 1958.',
                'description' => 'Z31 served with the German Arctic forces, escorting convoys and supporting naval operations around Norway. She fought during the Battle of the Bay of Biscay and later participated in Baltic evacuation operations. After the war she served successfully in the French Navy.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 50. Z32 - Type 1936A (Mob) (ID: 146)
        Ship::updateOrCreate(
            ['name' => 'Z32'],
            [
                'class_id' => 146,
                'launch_date' => '1941-08-15',
                'commission_date' => '1942-09-15',
                'displacement' => 2657,
                'length' => 127.0,
                'beam' => 12.0,
                'draft' => 4.65,
                'max_speed' => 36,
                'crew' => 332,
                'fate' => 'Ran aground and was destroyed after the Battle of Ushant on 9 June 1944.',
                'description' => 'Z32 operated in the English Channel and Bay of Biscay, escorting blockade runners and defending German coastal waters. During the Battle of Ushant she fought British destroyers, was heavily damaged, ran aground on the French coast, and was destroyed by her own crew.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 51. Z33 - Type 1936A (Mob) (ID: 146)
        Ship::updateOrCreate(
            ['name' => 'Z33'],
            [
                'class_id' => 146,
                'launch_date' => '1942-09-15',
                'commission_date' => '1943-02-06',
                'displacement' => 2657,
                'length' => 127.0,
                'beam' => 12.0,
                'draft' => 4.65,
                'max_speed' => 36,
                'crew' => 332,
                'fate' => 'Survived WWII; transferred to the Soviet Union in 1946 as Provornyy (Проворный). Scrapped in 1961.',
                'description' => 'Z33 served mainly in Norwegian waters, escorting convoys and supporting German operations in the Arctic. She survived the famous Operation Catechism and later helped evacuate German forces from the Baltic before being transferred to the Soviet Navy.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 52. Z34 - Type 1936A (Mob) (ID: 146)
        Ship::updateOrCreate(
            ['name' => 'Z34'],
            [
                'class_id' => 146,
                'launch_date' => '1943-06-05',
                'commission_date' => '1943-08-05',
                'displacement' => 2657,
                'length' => 127.0,
                'beam' => 12.0,
                'draft' => 4.65,
                'max_speed' => 36,
                'crew' => 332,
                'fate' => 'Survived WWII; transferred to the United States in 1946 for trials. Scrapped in 1948.',
                'description' => 'One of the last German destroyers to enter service, Z34 escorted convoys in Norwegian waters and participated in Baltic evacuation operations. She also fought several engagements with Allied aircraft and destroyers during the final year of the war before surviving intact.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 53. Z35 - Type 1936B (ID: 147)
        Ship::updateOrCreate(
            ['name' => 'Z35'],
            [
                'class_id' => 147,
                'launch_date' => '1942-10-05',
                'commission_date' => '1943-09-22',
                'displacement' => 2527,
                'length' => 127.0,
                'beam' => 12.0,
                'draft' => 4.3,
                'max_speed' => 36.5,
                'crew' => 332,
                'fate' => 'Sunk by German minefield on 12 December 1944 in the Gulf of Finland during a night sortie.',
                'description' => 'Z35 was one of the improved Type 1936B destroyers, designed with a revised main armament and better operational reliability. She spent most of her service in the Baltic, escorting convoys and supporting German naval operations. During a night attack against Soviet forces, Z35 accidentally entered a German defensive minefield and was lost together with her sister ship Z36. This tragic incident highlighted the hazards of operating in heavily mined Baltic waters during the final months of the war.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 54. Z36 - Type 1936B (ID: 147)
        Ship::updateOrCreate(
            ['name' => 'Z36'],
            [
                'class_id' => 147,
                'launch_date' => '1943-05-15',
                'commission_date' => '1944-02-19',
                'displacement' => 2527,
                'length' => 127.0,
                'beam' => 12.0,
                'draft' => 4.3,
                'max_speed' => 36.5,
                'crew' => 332,
                'fate' => 'Sunk by a German minefield on 12 December 1944 in the Gulf of Finland.',
                'description' => 'Z36 served in the Baltic during the final year of the war, escorting convoys and supporting German evacuation operations. During a night sortie against Soviet forces, she accidentally entered a German defensive minefield alongside Z35 and was destroyed, illustrating the dangers of late-war naval operations in the Baltic.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 55. Z37 - Type 1936A (Mob) (ID: 146)
        Ship::updateOrCreate(
            ['name' => 'Z37'],
            [
                'class_id' => 146,
                'launch_date' => '1942-02-24',
                'commission_date' => '1942-07-16',
                'displacement' => 2657,
                'length' => 127.0,
                'beam' => 12.0,
                'draft' => 4.65,
                'max_speed' => 36,
                'crew' => 332,
                'fate' => 'Severely damaged after colliding with Z32 during operations off France on 21 January 1944. Declared beyond economical repair, decommissioned, stripped of usable equipment, and scuttled in 1945.',
                'description' => 'Z37 operated in the Bay of Biscay and the English Channel, escorting blockade runners and protecting German coastal shipping. After a collision with Z32 caused a catastrophic fire and explosion, she was beyond economical repair and was decommissioned before the end of the war.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 56. Z38 - Type 1936A (Mob) (ID: 146)
        Ship::updateOrCreate(
            ['name' => 'Z38'],
            [
                'class_id' => 146,
                'launch_date' => '1941-08-20',
                'commission_date' => '1943-03-20',
                'displacement' => 2657,
                'length' => 127.0,
                'beam' => 12.0,
                'draft' => 4.65,
                'max_speed' => 36,
                'crew' => 332,
                'fate' => 'Survived WWII; transferred to Great Britain in 1946 as HMS Nonsuch for trials. Scrapped in 1949.',
                'description' => 'Z38 served in Norwegian waters and the Baltic, escorting convoys and supporting German naval operations. She participated in evacuation missions during the final months of the war and survived intact, later serving briefly under British control for technical evaluation.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 57. Z39 - Type 1936A (Mob) (ID: 146)
        Ship::updateOrCreate(
            ['name' => 'Z39'],
            [
                'class_id' => 146,
                'launch_date' => '1940-12-05',
                'commission_date' => '1943-08-21',
                'displacement' => 2657,
                'length' => 127.0,
                'beam' => 12.0,
                'draft' => 4.65,
                'max_speed' => 36,
                'crew' => 332,
                'fate' => 'Survived WWII; transferred to the United States in 1946 for evaluation. Scrapped in 1948.',
                'description' => 'Z39 was one of Germany\'s most modern destroyers. She served in the Baltic and Norwegian waters, escorting convoys and supporting evacuation operations. Captured intact at the end of the war, she became one of several Kriegsmarine ships examined extensively by the U.S. Navy.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 58. Z43 - Type 1936B (ID: 147)
        Ship::updateOrCreate(
            ['name' => 'Z43'],
            [
                'class_id' => 147,
                'launch_date' => '1943-09-22',
                'commission_date' => '1944-03-24',
                'displacement' => 2527,
                'length' => 127.0,
                'beam' => 12.0,
                'draft' => 4.3,
                'max_speed' => 36.5,
                'crew' => 332,
                'fate' => 'Scuttled by her crew at Wilhelmshaven on 3 May 1945 after being heavily damaged by mines.',
                'description' => 'One of the last destroyers completed by Germany, Z43 served almost exclusively in the Baltic, escorting convoys and supporting evacuation missions. After suffering severe mine damage in April 1945, she was no longer operational and was scuttled shortly before Germany\'s surrender.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 59. Z46 - Type 1936C (ID: 148)
        Ship::updateOrCreate(
            ['name' => 'Z46'],
            [
                'class_id' => 148,
                'launch_date' => 'Not launched',
                'commission_date' => 'Never commissioned',
                'displacement' => 2700,
                'length' => 127.0,
                'beam' => 12.0,
                'draft' => 4.5,
                'max_speed' => 37,
                'crew' => 340,
                'fate' => 'Construction halted in 1945; incomplete hull broken up after the war.',
                'description' => 'Z46 was the lead ship of the planned Type 1936C destroyers, an improved design intended to strengthen Germany\'s late-war destroyer force. Construction was well advanced, but the worsening military situation and shortages of materials prevented her completion before the end of the war.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 60. Z47 - Type 1936C (ID: 148)
        Ship::updateOrCreate(
            ['name' => 'Z47'],
            [
                'class_id' => 148,
                'launch_date' => 'Not launched',
                'commission_date' => 'Never commissioned',
                'displacement' => 2700,
                'length' => 127.0,
                'beam' => 12.0,
                'draft' => 4.5,
                'max_speed' => 37,
                'crew' => 340,
                'fate' => 'Construction cancelled before completion in 1945; hull scrapped after the war.',
                'description' => 'Z47 was the second planned Type 1936C destroyer. Designed to incorporate improved anti-aircraft armament and advanced fire-control systems, she was never completed because of Germany\'s deteriorating industrial situation during the final stages of World War II. Although unfinished, she represents the final evolution of German wartime destroyer design.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // SUBMARINES
        // ============================================

        // 61. U-31 - Type VIIA (ID: 149)
        Ship::updateOrCreate(
            ['name' => 'U-31'],
            [
                'class_id' => 149,
                'launch_date' => '1936-05-25',
                'commission_date' => '1936-07-29',
                'displacement' => 626,
                'length' => 64.5,
                'beam' => 5.85,
                'draft' => 4.37,
                'max_speed' => 17,
                'crew' => 46,
                'fate' => 'Sunk by British aircraft on 11 March 1940 in the Heligoland Bight; later raised, repaired, and returned to service. Finally scuttled on 2 May 1945.',
                'description' => 'One of Germany\'s early Type VII submarines, U-31 had a remarkable career after being salvaged from the seabed following her sinking in 1940. After extensive repairs she returned to combat duty, conducting Atlantic patrols before being scuttled by her crew at the end of the war to prevent capture.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 62. U-37 - Type IXA (ID: 152)
        Ship::updateOrCreate(
            ['name' => 'U-37'],
            [
                'class_id' => 152,
                'launch_date' => '1938-05-14',
                'commission_date' => '1938-08-04',
                'displacement' => 1032,
                'length' => 76.5,
                'beam' => 6.51,
                'draft' => 4.70,
                'max_speed' => 18.2,
                'crew' => 48,
                'fate' => 'Withdrawn from combat in 1941; served as a training submarine. Scuttled on 8 May 1945.',
                'description' => 'U-37 was one of Germany\'s most successful U-boats, sinking 54 merchant ships totaling over 200,000 gross register tons (GRT). After an exceptionally successful combat career in the Atlantic, she was reassigned as a training submarine and survived until Germany\'s surrender.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 63. U-47 - Type VIIB (ID: 150)
        Ship::updateOrCreate(
            ['name' => 'U-47'],
            [
                'class_id' => 150,
                'launch_date' => '1938-10-29',
                'commission_date' => '1938-12-17',
                'displacement' => 753,
                'length' => 66.5,
                'beam' => 6.20,
                'draft' => 4.74,
                'max_speed' => 17.9,
                'crew' => 48,
                'fate' => 'Lost with all hands on 7 March 1941, probably south of Iceland.',
                'description' => 'Commanded by Günther Prien, U-47 became one of the most famous submarines of World War II after penetrating the British naval base at Scapa Flow and sinking the battleship HMS Royal Oak in October 1939. During her career she sank 30 merchant ships and one battleship, becoming a symbol of Germany\'s early U-boat successes.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 64. U-48 - Type VIIB (ID: 150)
        Ship::updateOrCreate(
            ['name' => 'U-48'],
            [
                'class_id' => 150,
                'launch_date' => '1939-03-08',
                'commission_date' => '1939-04-22',
                'displacement' => 753,
                'length' => 66.5,
                'beam' => 6.20,
                'draft' => 4.74,
                'max_speed' => 17.9,
                'crew' => 48,
                'fate' => 'Withdrawn from combat in 1943; scuttled on 3 May 1945.',
                'description' => 'U-48 was the most successful U-boat of World War II, sinking 51 merchant ships totaling approximately 307,900 GRT. Her extraordinary success made her one of the most celebrated submarines of the Kriegsmarine before she was reassigned as a training vessel.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 65. U-69 - Type VIIC (ID: 151)
        Ship::updateOrCreate(
            ['name' => 'U-69'],
            [
                'class_id' => 151,
                'launch_date' => '1940-10-19',
                'commission_date' => '1940-11-02',
                'displacement' => 769,
                'length' => 67.1,
                'beam' => 6.20,
                'draft' => 4.74,
                'max_speed' => 17.7,
                'crew' => 52,
                'fate' => 'Sunk on 17 February 1943 by depth charges from the British destroyer HMS Fame in the North Atlantic.',
                'description' => 'U-69 conducted several Atlantic patrols during the height of the Battle of the Atlantic, sinking numerous Allied merchant ships before being located and destroyed by British escort forces in early 1943.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 66. U-73 - Type VIIB (ID: 150)
        Ship::updateOrCreate(
            ['name' => 'U-73'],
            [
                'class_id' => 150,
                'launch_date' => '1940-05-11',
                'commission_date' => '1940-09-05',
                'displacement' => 753,
                'length' => 66.5,
                'beam' => 6.20,
                'draft' => 4.74,
                'max_speed' => 17.9,
                'crew' => 48,
                'fate' => 'Sunk on 16 December 1943 by U.S. destroyers USS Woolsey and USS Trippe, assisted by aircraft, near Tunisia.',
                'description' => 'U-73 achieved lasting fame by torpedoing and sinking the British aircraft carrier HMS Eagle during Operation Pedestal on 11 August 1942. She later operated extensively in the Mediterranean before being sunk by Allied anti-submarine forces.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 67. U-81 - Type VIIC (ID: 151)
        Ship::updateOrCreate(
            ['name' => 'U-81'],
            [
                'class_id' => 151,
                'launch_date' => '1941-02-22',
                'commission_date' => '1941-04-26',
                'displacement' => 769,
                'length' => 67.1,
                'beam' => 6.20,
                'draft' => 4.74,
                'max_speed' => 17.7,
                'crew' => 52,
                'fate' => 'Sunk by an American air raid at Pozzuoli, Italy, on 9 January 1944 while in dry dock.',
                'description' => 'Commanded by Friedrich Guggenberger, U-81 is best known for torpedoing and sinking the British aircraft carrier HMS Ark Royal on 13 November 1941. She later served in the Mediterranean until being destroyed during an Allied bombing raid while undergoing repairs.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 68. U-96 - Type VIIC (ID: 151)
        Ship::updateOrCreate(
            ['name' => 'U-96'],
            [
                'class_id' => 151,
                'launch_date' => '1940-08-01',
                'commission_date' => '1940-09-14',
                'displacement' => 769,
                'length' => 67.1,
                'beam' => 6.20,
                'draft' => 4.74,
                'max_speed' => 17.7,
                'crew' => 52,
                'fate' => 'Damaged by Allied bombing in Wilhelmshaven on 30 March 1945; decommissioned and scuttled on 3 May 1945.',
                'description' => 'U-96 became one of Germany\'s most famous submarines after serving under Heinrich Lehmann-Willenbrock. She completed eleven successful war patrols, sinking 27 merchant ships totaling over 180,000 GRT. Her wartime patrol logs inspired the novel and film Das Boot, making her the best-known U-boat of World War II.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 69. U-99 - Type VIIB (ID: 150)
        Ship::updateOrCreate(
            ['name' => 'U-99'],
            [
                'class_id' => 150,
                'launch_date' => '1940-03-12',
                'commission_date' => '1940-04-18',
                'displacement' => 753,
                'length' => 66.5,
                'beam' => 6.20,
                'draft' => 4.74,
                'max_speed' => 17.9,
                'crew' => 48,
                'fate' => 'Sunk on 17 March 1941 by British destroyers after depth-charge attacks south of Iceland. The crew survived and were taken prisoner.',
                'description' => 'Commanded by the legendary Otto Kretschmer, Germany\'s highest-scoring U-boat commander, U-99 sank 38 merchant ships totaling over 244,000 GRT, making her one of the most successful submarines of the war. Kretschmer\'s "one torpedo, one ship" doctrine became famous throughout the Kriegsmarine.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 70. U-100 - Type VIIB (ID: 150)
        Ship::updateOrCreate(
            ['name' => 'U-100'],
            [
                'class_id' => 150,
                'launch_date' => '1940-04-10',
                'commission_date' => '1940-05-30',
                'displacement' => 753,
                'length' => 66.5,
                'beam' => 6.20,
                'draft' => 4.74,
                'max_speed' => 17.9,
                'crew' => 48,
                'fate' => 'Sunk on 17 March 1941 by the British destroyers HMS Vanoc and HMS Walker after being detected by one of the first operational shipborne radar sets.',
                'description' => 'Commanded by Joachim Schepke, one of Germany\'s most celebrated U-boat aces, U-100 sank 25 merchant ships totaling over 155,000 GRT. Her destruction marked one of the earliest successful uses of radar against a submarine, representing a major turning point in the Battle of the Atlantic.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 71. U-101 - Type VIIB (ID: 150)
        Ship::updateOrCreate(
            ['name' => 'U-101'],
            [
                'class_id' => 150,
                'launch_date' => '1940-04-13',
                'commission_date' => '1940-06-15',
                'displacement' => 753,
                'length' => 66.5,
                'beam' => 6.20,
                'draft' => 4.74,
                'max_speed' => 17.9,
                'crew' => 48,
                'fate' => 'Withdrawn from combat in 1944; scuttled on 5 May 1945.',
                'description' => 'U-101 was among the Kriegsmarine\'s most successful Atlantic submarines, sinking 22 merchant ships totaling more than 180,000 GRT. After several productive patrols under Ernst Mengersen, she was reassigned to training duties before the end of the war.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 72. U-110 - Type IXB (ID: 153)
        Ship::updateOrCreate(
            ['name' => 'U-110'],
            [
                'class_id' => 153,
                'launch_date' => '1940-08-25',
                'commission_date' => '1940-11-21',
                'displacement' => 1051,
                'length' => 76.5,
                'beam' => 6.76,
                'draft' => 4.70,
                'max_speed' => 18.2,
                'crew' => 56,
                'fate' => 'Boarded by the Royal Navy on 9 May 1941 after depth-charge attacks. Attempts to tow her failed, and she sank on 10 May 1941.',
                'description' => 'U-110 became one of the most historically significant submarines of World War II when British sailors captured her largely intact, recovering an Enigma cipher machine, codebooks, and other secret documents. This intelligence breakthrough provided one of the earliest major captures of Enigma materials, significantly assisting the work at Bletchley Park, influenced the Battle of the Atlantic.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 73. U-123 - Type IXB (ID: 153)
        Ship::updateOrCreate(
            ['name' => 'U-123'],
            [
                'class_id' => 153,
                'launch_date' => '1941-03-02',
                'commission_date' => '1941-05-30',
                'displacement' => 1051,
                'length' => 76.5,
                'beam' => 6.76,
                'draft' => 4.70,
                'max_speed' => 18.2,
                'crew' => 56,
                'fate' => 'Survived WWII; surrendered in May 1945. Transferred to the French Navy as Blaison in 1947 and served until 1959.',
                'description' => 'Commanded by Reinhard Hardegen, U-123 spearheaded Operation Paukenschlag (Operation Drumbeat) against the U.S. East Coast in early 1942. Exploiting weak American coastal defenses, she sank numerous merchant ships and became one of the most successful Type IX submarines of the war.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 74. U-156 - Type IXC (ID: 154)
        Ship::updateOrCreate(
            ['name' => 'U-156'],
            [
                'class_id' => 154,
                'launch_date' => '1941-05-21',
                'commission_date' => '1941-09-04',
                'displacement' => 1120,
                'length' => 76.8,
                'beam' => 6.76,
                'draft' => 4.70,
                'max_speed' => 18.3,
                'crew' => 56,
                'fate' => 'Sunk by American aircraft east of Barbados on 8 March 1943.',
                'description' => 'U-156 became famous for the Laconia Incident in September 1942. After sinking the British troopship Laconia, her commander, Werner Hartenstein, attempted to rescue survivors, including Allied civilians and Italian prisoners of war. Despite displaying Red Cross flags, U-156 was attacked by an American aircraft, leading Admiral Dönitz to issue the controversial Laconia Order, forbidding future rescue attempts by German submarines.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 75. U-181 - Type IXD2 (ID: 155)
        Ship::updateOrCreate(
            ['name' => 'U-181'],
            [
                'class_id' => 155,
                'launch_date' => '1941-12-30',
                'commission_date' => '1942-05-09',
                'displacement' => 1610,
                'length' => 87.6,
                'beam' => 7.50,
                'draft' => 5.35,
                'max_speed' => 20.8,
                'crew' => 63,
                'fate' => 'Surrendered to the Royal Navy at Singapore in August 1945 and scuttled in the Strait of Malacca on 13 February 1946.',
                'description' => 'One of Germany\'s long-range Type IXD2 submarines, U-181 completed extended patrols in the Indian Ocean under Wolfgang Lüth, one of the Kriegsmarine\'s most successful commanders. She sank over 20 Allied merchant ships and demonstrated the global reach of German U-boat operations far beyond the Atlantic.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 76. U-234 - Type XB (ID: 156)
        Ship::updateOrCreate(
            ['name' => 'U-234'],
            [
                'class_id' => 156,
                'launch_date' => '1943-12-23',
                'commission_date' => '1944-03-02',
                'displacement' => 1763,
                'length' => 89.8,
                'beam' => 9.20,
                'draft' => 4.71,
                'max_speed' => 16.4,
                'crew' => 94,
                'fate' => 'Surrendered to the United States on 14 May 1945.',
                'description' => 'U-234 was a large transport submarine carrying advanced military cargo—including aircraft components, radar equipment, technical documents, and 560 kg of uranium oxide—to Japan when Germany surrendered. She turned herself over to the U.S. Navy, making her one of the most valuable intelligence captures of the war.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 77. U-410 - Type VIIC (ID: 151)
        Ship::updateOrCreate(
            ['name' => 'U-410'],
            [
                'class_id' => 151,
                'launch_date' => '1941-08-14',
                'commission_date' => '1941-11-14',
                'displacement' => 769,
                'length' => 67.1,
                'beam' => 6.20,
                'draft' => 4.74,
                'max_speed' => 17.7,
                'crew' => 52,
                'fate' => 'Destroyed during an Allied air raid on Toulon, France, on 11 March 1944.',
                'description' => 'Operating mainly in the Mediterranean, U-410 achieved several notable successes, including sinking the British cruiser HMS Penelope on 18 February 1944. She was destroyed by Allied bombing while undergoing repairs in Toulon only weeks later.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 78. U-505 - Type IXC (ID: 154)
        Ship::updateOrCreate(
            ['name' => 'U-505'],
            [
                'class_id' => 154,
                'launch_date' => '1941-05-25',
                'commission_date' => '1941-08-26',
                'displacement' => 1120,
                'length' => 76.8,
                'beam' => 6.76,
                'draft' => 4.70,
                'max_speed' => 18.3,
                'crew' => 56,
                'fate' => 'Captured by the U.S. Navy on 4 June 1944; preserved today as a museum ship at the Museum of Science and Industry, Chicago.',
                'description' => 'U-505 became the first enemy warship captured by the United States at sea since the War of 1812. Her capture provided the Allies with valuable Enigma codebooks, cipher materials, and intelligence. Today she remains one of the world\'s best-preserved World War II submarines and the only surviving Type IX U-boat.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 79. U-522 - Type VIIC (ID: 151)
        Ship::updateOrCreate(
            ['name' => 'U-522'],
            [
                'class_id' => 151,
                'launch_date' => '1942-01-15',
                'commission_date' => '1942-05-07',
                'displacement' => 769,
                'length' => 67.1,
                'beam' => 6.20,
                'draft' => 4.74,
                'max_speed' => 17.7,
                'crew' => 52,
                'fate' => 'Sunk in the Bay of Biscay by British aircraft on 23 February 1943.',
                'description' => 'U-522 conducted several patrols in the North Atlantic during the height of the Battle of the Atlantic. She successfully attacked Allied merchant shipping before being detected and destroyed by British anti-submarine aircraft while returning to base through the Bay of Biscay.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 80. U-552 - Type VIIC (ID: 151)
        Ship::updateOrCreate(
            ['name' => 'U-552'],
            [
                'class_id' => 151,
                'launch_date' => '1940-09-14',
                'commission_date' => '1940-12-04',
                'displacement' => 769,
                'length' => 67.1,
                'beam' => 6.20,
                'draft' => 4.74,
                'max_speed' => 17.7,
                'crew' => 52,
                'fate' => 'Withdrawn from combat in 1944; scuttled by her crew at Wilhelmshaven on 5 May 1945.',
                'description' => 'Commanded by Erich Topp, U-552—nicknamed the "Red Devil" for her distinctive red devil emblem—was one of Germany\'s most successful submarines. She sank 30 merchant ships, the destroyer USS Reuben James, and several other warships, becoming one of the most famous U-boats of the Battle of the Atlantic.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 81. U-556 - Type VIIC (ID: 151)
        Ship::updateOrCreate(
            ['name' => 'U-556'],
            [
                'class_id' => 151,
                'launch_date' => '1940-12-07',
                'commission_date' => '1941-02-06',
                'displacement' => 769,
                'length' => 67.1,
                'beam' => 6.20,
                'draft' => 4.74,
                'max_speed' => 17.7,
                'crew' => 52,
                'fate' => 'Sunk by British destroyers on 27 June 1941 southwest of Ireland.',
                'description' => 'Known as "Bismarck\'s godchild," U-556 had a close symbolic relationship with the battleship Bismarck, whose crew sponsored the submarine before the war. During the final battle of Bismarck, U-556 was nearby but was unable to assist because she had exhausted all of her torpedoes. She was sunk a month later after a fierce engagement with British destroyers.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 82. U-557 - Type VIIC (ID: 151)
        Ship::updateOrCreate(
            ['name' => 'U-557'],
            [
                'class_id' => 151,
                'launch_date' => '1941-05-22',
                'commission_date' => '1941-09-13',
                'displacement' => 769,
                'length' => 67.1,
                'beam' => 6.20,
                'draft' => 4.74,
                'max_speed' => 17.7,
                'crew' => 52,
                'fate' => 'Accidentally rammed and sunk by the Italian torpedo boat Orione on 16 December 1941 in the Mediterranean.',
                'description' => 'After successful operations in the Mediterranean, including attacks on Allied shipping, U-557 was lost in a tragic friendly-fire accident when she was mistakenly rammed by the Italian torpedo boat Orione while returning to base. There were no survivors.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 83. U-1206 - Type VIIC (ID: 151)
        Ship::updateOrCreate(
            ['name' => 'U-1206'],
            [
                'class_id' => 151,
                'launch_date' => '1944-06-30',
                'commission_date' => '1944-12-16',
                'displacement' => 769,
                'length' => 67.1,
                'beam' => 6.20,
                'draft' => 4.74,
                'max_speed' => 17.7,
                'crew' => 50,
                'fate' => 'Scuttled by her crew off the east coast of Scotland on 14 April 1945 after a malfunction in her high-pressure toilet system forced her to surface, where she came under Allied air attack.',
                'description' => 'U-1206 became famous for one of the most unusual incidents of World War II. While submerged, a malfunction in her advanced high-pressure toilet system allowed seawater to flood the boat, producing chlorine gas after contact with battery acid. Forced to surface, she was attacked by Allied aircraft and subsequently scuttled by her crew.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 84. U-2501 - Type XXI (ID: 157)
        Ship::updateOrCreate(
            ['name' => 'U-2501'],
            [
                'class_id' => 157,
                'launch_date' => '1944-09-02',
                'commission_date' => '1944-12-27',
                'displacement' => 1621,
                'length' => 76.7,
                'beam' => 8.0,
                'draft' => 6.3,
                'max_speed' => 15.6,
                'crew' => 57,
                'fate' => 'Scuttled by her crew at Kiel on 3 May 1945.',
                'description' => 'U-2501 was one of Germany\'s revolutionary Type XXI "Elektroboot" submarines, designed for sustained high-speed underwater operations using advanced batteries, streamlined hulls, and a snorkel system. Commissioned only months before Germany\'s surrender, she never conducted a combat patrol, but the Type XXI design profoundly influenced post-war submarine development worldwide and became the prototype for the first generation of modern submarines.',
                'is_aircraft_carrier' => false,
            ]
        );

        $this->command->info('✅ German ships processed successfully!');
        $this->command->info('📊 Total ships: 84');
        $this->command->info('   • Aircraft Carriers: 1');
        $this->command->info('   • Battleships & Heavy Cruisers: 11');
        $this->command->info('   • Light Cruisers: 6');
        $this->command->info('   • Destroyers: 42');
        $this->command->info('   • Submarines: 24');
    }
}