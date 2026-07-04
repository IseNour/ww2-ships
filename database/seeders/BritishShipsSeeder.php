<?php

namespace Database\Seeders;

use App\Models\Ship;
use Illuminate\Database\Seeder;

class BritishShipsSeeder extends Seeder
{
    public function run(): void
    {
        // ============================================
        // FLEET AIRCRAFT CARRIERS
        // ============================================

        // 1. HMS Ark Royal (91) - Ark Royal-class (ID: 90)
        Ship::updateOrCreate(
            ['name' => 'HMS Ark Royal (91)'],
            [
                'class_id' => 90,
                'launch_date' => '1937-04-13',
                'commission_date' => '1938-11-16',
                'displacement' => 22000,
                'length' => 243.8,
                'beam' => 28.9,
                'draft' => 8.5,
                'max_speed' => 30.5,
                'crew' => 1580,
                'fate' => 'Torpedoed by German submarine U-81 on 13 November 1941; sank the following day while under tow.',
                'description' => 'HMS Ark Royal was one of the Royal Navy\'s most successful and innovative fleet aircraft carriers. Unlike earlier British carriers, she was designed from the outset with an integral flight deck and hangars, allowing her to carry a comparatively large air group. During World War II she participated in the Norwegian Campaign, escorted numerous Malta convoys, hunted the German commerce raider Admiral Graf Spee, and played the decisive role in the pursuit of the battleship Bismarck. On 26 May 1941, aircraft from Ark Royals 818 and 820 Naval Air Squadrons launched Fairey Swordfish torpedo bombers that jammed Bismarck\'s rudder, enabling the Home Fleet to overtake and sink the German battleship. She was torpedoed by German submarine U-81 on 13 November 1941 and sank the following day despite extensive salvage efforts',
                 'is_aircraft_carrier' => true,
            ]
        );

        // 2. HMS Illustrious (87) - Illustrious-class (ID: 91)
        Ship::updateOrCreate(
            ['name' => 'HMS Illustrious (87)'],
            [
                'class_id' => 91,
                'launch_date' => '1939-04-05',
                'commission_date' => '1940-05-25',
                'displacement' => 23000,
                'length' => 225.6,
                'beam' => 29.2,
                'draft' => 8.8,
                'max_speed' => 30.5,
                'crew' => 1300,
                'fate' => 'Survived WWII; scrapped in 1957.',
                'description' => 'HMS Illustrious was the lead ship of the revolutionary Illustrious class and introduced the Royal Navy\'s armored flight deck, providing exceptional protection against bomb attacks. Shortly after entering service she launched the famous air strike against the Italian fleet at Taranto on 11 November 1940, demonstrating the effectiveness of carrier aviation and influencing later naval operations, including the Japanese attack on Pearl Harbor. In January 1941 she survived repeated heavy Luftwaffe bombing in the Mediterranean despite suffering extensive damage. After repairs in the United States, she returned to service and later operated in the Indian Ocean and Pacific, surviving the war before being decommissioned.',
       'is_aircraft_carrier' => true,
            ]
        );

        // 3. HMS Formidable (67) - Illustrious-class (ID: 91)
        Ship::updateOrCreate(
            ['name' => 'HMS Formidable (67)'],
            [
                'class_id' => 91,
                'launch_date' => '1939-08-17',
                'commission_date' => '1940-11-24',
                'displacement' => 23000,
                'length' => 225.6,
                'beam' => 29.2,
                'draft' => 8.8,
                'max_speed' => 30.5,
                'crew' => 1300,
                'fate' => 'Survived WWII; scrapped in 1953.',
                'description' => 'HMS Formidable entered service late in 1940 and immediately became one of the Royal Navy\'s principal fleet carriers. She participated in the Battle of Cape Matapan in March 1941, where her aircraft successfully attacked the Italian fleet and contributed significantly to the British victory. Later she supported operations around Crete, escorted convoys to Malta, and served with the Eastern Fleet in the Indian Ocean before joining the British Pacific Fleet. During the Okinawa campaign she survived several kamikaze attacks, demonstrating the remarkable resilience of the British armored carrier design.',
                    'is_aircraft_carrier' => true,
            ]
        );

        // 4. HMS Victorious (38) - Illustrious-class (ID: 91)
        Ship::updateOrCreate(
            ['name' => 'HMS Victorious (38)'],
            [
                'class_id' => 91,
                'launch_date' => '1939-09-14',
                'commission_date' => '1941-05-15',
                'displacement' => 23000,
                'length' => 225.6,
                'beam' => 29.2,
                'draft' => 8.8,
                'max_speed' => 30.5,
                'crew' => 1300,
                'fate' => 'Survived WWII; modernized after the war and scrapped in 1969.',
                'description' => 'Commissioned in May 1941, HMS Victorious entered service during the final stages of the hunt for the German battleship Bismarck, launching one of the first torpedo attacks against her. Throughout the war she escorted Arctic convoys to the Soviet Union, supported Operation Pedestal, participated in operations against the German battleship Tirpitz, and later joined the British Pacific Fleet. She also briefly served with the United States Navy as USS Robin in 1943, illustrating the close cooperation between Allied navies. After the war she underwent one of the most extensive modernizations ever performed on a British carrier, remaining in service until 1968.',
                     'is_aircraft_carrier' => true,
            ]
        );

        // 5. HMS Indomitable (92) - Illustrious-class Modified (ID: 91)
        Ship::updateOrCreate(
            ['name' => 'HMS Indomitable (92)'],
            [
                'class_id' => 91,
                'launch_date' => '1940-03-26',
                'commission_date' => '1941-10-10',
                'displacement' => 23450,
                'length' => 225.6,
                'beam' => 29.2,
                'draft' => 8.9,
                'max_speed' => 30.5,
                'crew' => 1400,
                'fate' => 'Survived WWII; scrapped in 1955.',
                'description' => 'HMS Indomitable was a modified member of the Illustrious class, incorporating an additional half hangar that significantly increased her aircraft capacity compared with her sister ships. She entered service in late 1941 and participated in Operation Pedestal, one of the most important Malta convoy operations of the war. She later served with the Eastern Fleet in the Indian Ocean before joining the British Pacific Fleet, where she survived multiple kamikaze attacks while supporting the invasion of Okinawa and operations against the Japanese home islands.',
                  'is_aircraft_carrier' => true,
            ]
        );

        // 6. HMS Implacable (R86) - Implacable-class (ID: 92)
        Ship::updateOrCreate(
            ['name' => 'HMS Implacable (R86)'],
            [
                'class_id' => 92,
                'launch_date' => '1942-12-10',
                'commission_date' => '1944-08-28',
                'displacement' => 32110,
                'length' => 234.7,
                'beam' => 41.5,
                'draft' => 8.8,
                'max_speed' => 32,
                'crew' => 2300,
                'fate' => 'Survived WWII; decommissioned in 1954 and scrapped in 1955.',
                'description' => 'HMS Implacable was the lead ship of the final wartime class of British armored fleet carriers. Although based on the Illustrious design, she featured larger hangars, improved machinery, and a substantially increased aircraft capacity. Commissioned in August 1944, she conducted operations against German targets in Norway before joining the British Pacific Fleet. During 1945 she participated in attacks against the Japanese home islands, airfields, and naval installations, contributing to the final Allied offensive in the Pacific. She survived the war and later served as a training carrier before being scrapped in 1955.',
                 'is_aircraft_carrier' => true,
            ]
        );

        // 7. HMS Indefatigable (R10) - Implacable-class (ID: 92)
        Ship::updateOrCreate(
            ['name' => 'HMS Indefatigable (R10)'],
            [
                'class_id' => 92,
                'launch_date' => '1942-12-08',
                'commission_date' => '1944-05-03',
                'displacement' => 32110,
                'length' => 234.7,
                'beam' => 41.5,
                'draft' => 8.8,
                'max_speed' => 32,
                'crew' => 2300,
                'fate' => 'Survived WWII; decommissioned in 1954 and scrapped in 1956.',
                'description' => 'HMS Indefatigable was the first Implacable-class carrier to enter operational service. She participated in operations against the German battleship Tirpitz before joining the British Pacific Fleet. During the Okinawa campaign she survived several kamikaze strikes thanks to her armored flight deck, suffering comparatively light damage compared with American carriers hit under similar circumstances. She later supported air strikes against the Japanese mainland until the end of the war and was present for the Allied occupation of Japan. After post-war service she was decommissioned in 1954 and scrapped in 1956.',
                  'is_aircraft_carrier' => true,
            ]
        );

        // 8. HMS Hermes (95) - Hermes-class (ID: 93)
        Ship::updateOrCreate(
            ['name' => 'HMS Hermes (95)'],
            [
                'class_id' => 93,
                'launch_date' => '1919-09-11',
                'commission_date' => '1924-02-19',
                'displacement' => 10850,
                'length' => 182.9,
                'beam' => 21.4,
                'draft' => 7.1,
                'max_speed' => 25,
                'crew' => 900,
                'fate' => 'Sunk by Japanese carrier aircraft on 9 April 1942 during the Indian Ocean Raid.',
                'description' => 'HMS Hermes was the world\'s first warship designed from the keel up as an aircraft carrier, setting the pattern for future carrier construction worldwide. Although relatively small by World War II standards, she served extensively in the Atlantic, Mediterranean, and Indian Ocean. During the Indian Ocean Raid in April 1942, her aircraft were transferred ashore to strengthen the defense of Ceylon. While returning without an air group, she was attacked by aircraft from the Japanese carriers Akagi, Hiryū, Sōryū, Shōkaku, and Zuikaku. Struck by numerous bombs, she sank on 9 April 1942 southeast of Trincomalee.',   'is_aircraft_carrier' => true,
            ]
        );

        // 9. HMS Glorious - Courageous-class (ID: 94)
        Ship::updateOrCreate(
            ['name' => 'HMS Glorious'],
            [
                'class_id' => 94,
                'launch_date' => '1916-04-20',
                'commission_date' => '1930-10-14',
                'displacement' => 22500,
                'length' => 239.8,
                'beam' => 27.4,
                'draft' => 8.5,
                'max_speed' => 30,
                'crew' => 1200,
                'fate' => 'Sunk by the German battlecruisers Scharnhorst and Gneisenau on 8 June 1940 during the Norwegian Campaign.',
                'description' => 'Originally completed as a battlecruiser during the First World War, HMS Glorious was converted into an aircraft carrier during the 1920s. She participated in operations during the Norwegian Campaign in 1940, ferrying RAF Gladiator and Hurricane fighters to Norway and providing air cover for Allied forces. On 8 June 1940, while returning independently to Britain, she was intercepted by the German battlecruisers Scharnhorst and Gneisenau. Lacking adequate escort and air patrols, she was sunk together with the destroyers HMS Ardent and HMS Acasta, marking one of the Royal Navy\'s most severe carrier losses of the war.',    'is_aircraft_carrier' => true,
            ]
        );

        // 10. HMS Courageous - Courageous-class (ID: 94)
        Ship::updateOrCreate(
            ['name' => 'HMS Courageous'],
            [
                'class_id' => 94,
                'launch_date' => '1916-02-05',
                'commission_date' => '1928-05-05',
                'displacement' => 22500,
                'length' => 239.8,
                'beam' => 27.4,
                'draft' => 8.5,
                'max_speed' => 30,
                'crew' => 1200,
                'fate' => 'Torpedoed and sunk by German submarine U-29 on 17 September 1939.',
                'description' => 'Originally built as a First World War battlecruiser, HMS Courageous was converted into an aircraft carrier during the 1920s as part of the Royal Navy\'s growing naval aviation program. At the outbreak of World War II she conducted anti-submarine patrols in the Western Approaches. On 17 September 1939 she was torpedoed by the German submarine U-29 while operating with destroyer escorts. Her sinking became one of the earliest major Royal Navy losses of the war and led to significant changes in British carrier doctrine, ending routine carrier-based anti-submarine patrols in exposed waters.',
                'is_aircraft_carrier' => true,
            ]
        );

        // 11. HMS Furious (47) - Courageous-class (ID: 94)
        Ship::updateOrCreate(
            ['name' => 'HMS Furious (47)'],
            [
                'class_id' => 94,
                'launch_date' => '1916-08-15',
                'commission_date' => '1925-09-22',
                'displacement' => 22500,
                'length' => 239.8,
                'beam' => 27.4,
                'draft' => 8.4,
                'max_speed' => 30,
                'crew' => 1200,
                'fate' => 'Survived WWII; placed in reserve in 1944, sold for scrap in 1948.',
                'description' => 'Originally laid down as a large light battlecruiser, HMS Furious underwent several conversions before becoming one of the Royal Navy\'s first true fleet aircraft carriers. She pioneered many carrier operating techniques and participated in numerous operations throughout the Second World War, including the Norwegian Campaign, Arctic convoy protection, Malta convoy support, and repeated carrier strikes against the German battleship Tirpitz in northern Norway. After extensive wartime service she was placed in reserve in late 1944, ending one of the longest operational careers of any British aircraft carrier.',
                 'is_aircraft_carrier' => true,
            ]
        );

        // 12. HMS Warrior (R31) - Colossus-class (ID: 95)
        Ship::updateOrCreate(
            ['name' => 'HMS Warrior (R31)'],
            [
                'class_id' => 95,
                'launch_date' => '1944-05-20',
                'commission_date' => '1946-01-24',
                'displacement' => 13190,
                'length' => 211.8,
                'beam' => 34.4,
                'draft' => 7.2,
                'max_speed' => 25,
                'crew' => 1300,
                'fate' => 'Loaned to the Royal Canadian Navy (1946–1948), later sold to Argentina as ARA Independencia in 1958; scrapped in 1971.',
                'description' => 'HMS Warrior was one of the Colossus-class light fleet carriers, a class designed for rapid wartime construction using commercial shipbuilding techniques. Although completed before the end of the Second World War, she was not commissioned until January 1946 and therefore saw no wartime combat. Shortly afterward she was loaned to the Royal Canadian Navy before returning to Britain. In 1958 she was sold to Argentina and commissioned as ARA Independencia, serving as the Argentine Navy\'s first modern aircraft carrier until her retirement in 1971.',
               'is_aircraft_carrier' => true,
            ]
        );

        // 13. HMS Theseus (R64) - Colossus-class (ID: 95)
        Ship::updateOrCreate(
            ['name' => 'HMS Theseus (R64)'],
            [
                'class_id' => 95,
                'launch_date' => '1944-07-06',
                'commission_date' => '1946-02-06',
                'displacement' => 13190,
                'length' => 211.8,
                'beam' => 34.4,
                'draft' => 7.2,
                'max_speed' => 25,
                'crew' => 1300,
                'fate' => 'Served in Korea; scrapped in 1972.',
                'description' => 'HMS Theseus was one of the Colossus-class light fleet carriers constructed under Britain\'s wartime emergency shipbuilding program. Although completed before the end of the Second World War, she was not commissioned until February 1946 and therefore saw no wartime combat. Designed for rapid construction using commercial shipbuilding methods, Theseus combined the striking power of a fleet carrier with the lower cost and faster production of a light carrier. She later served with distinction during the Korean War, launching numerous combat sorties in support of United Nations forces, before returning to training and reserve duties. She was decommissioned in 1962 and sold for scrap in 1972.',
                            'is_aircraft_carrier' => true,
            ]
        );

        // 14. HMS Perseus (R51) - Colossus-class (ID: 95)
        Ship::updateOrCreate(
            ['name' => 'HMS Perseus (R51)'],
            [
                'class_id' => 95,
                'launch_date' => '1944-03-26',
                'commission_date' => '1945-10-19',
                'displacement' => 13190,
                'length' => 211.8,
                'beam' => 34.4,
                'draft' => 7.2,
                'max_speed' => 25,
                'crew' => 1300,
                'fate' => 'Served as an aircraft maintenance carrier; scrapped in 1958.',
                'description' => 'HMS Perseus was built as one of the Colossus-class light fleet carriers but completed specifically as an aircraft maintenance carrier rather than a front-line strike carrier. Commissioned shortly after the end of the Second World War, she provided repair, maintenance, storage, and transportation facilities for naval aircraft, enabling damaged aircraft to be serviced close to operational areas. Although capable of operating aircraft from her flight deck, her primary role was logistical support rather than offensive combat operations. She remained in service throughout the early Cold War before being scrapped in 1958.',
                           'is_aircraft_carrier' => true,
            ]
        );

        // 15. HMS Albion (R07) - Centaur-class (ID: 96)
        Ship::updateOrCreate(
            ['name' => 'HMS Albion (R07)'],
            [
                'class_id' => 96,
                'launch_date' => '1947-05-16',
                'commission_date' => '1954-05-03',
                'displacement' => 22000,
                'length' => 211.8,
                'beam' => 34.4,
                'draft' => 8.4,
                'max_speed' => 28,
                'crew' => 1600,
                'fate' => 'Converted into a commando carrier in the 1960s; scrapped in 1976.',
                'description' => 'Although laid down during the Second World War as part of the Centaur class, HMS Albion was not launched until 1947 and entered service in 1954, too late to participate in the conflict. Designed as an improved development of the wartime light fleet carriers, she featured a larger hull and greater aircraft capacity. During her career she served as a conventional fleet carrier before being converted into a commando carrier in the early 1960s, supporting Royal Marine amphibious operations until her retirement in 1973.',
                'is_aircraft_carrier' => true,
            ]
        );

        // 16. HMS Eagle - Eagle-class (ID: 97)
        Ship::updateOrCreate(
            ['name' => 'HMS Eagle (1918)'],
            [
                'class_id' => 97,
                'launch_date' => '1918-06-08',
                'commission_date' => '1924-02-26',
                'displacement' => 22600,
                'length' => 203.3,
                'beam' => 35.1,
                'draft' => 8.2,
                'max_speed' => 24,
                'crew' => 950,
                'fate' => 'Torpedoed and sunk by German submarine U-73 on 11 August 1942 during Operation Pedestal.',
                'description' => 'Originally laid down as the Chilean battleship Almirante Cochrane, HMS Eagle was purchased by Britain during the First World War and completed as an aircraft carrier. Throughout the interwar years she became one of the Royal Navy\'s principal carrier training and operational vessels. During the Second World War she escorted Atlantic convoys, supported Mediterranean operations, participated in the Battle of Calabria, and repeatedly ferried fighter aircraft to Malta. On 11 August 1942, while escorting the crucial Operation Pedestal convoy, she was struck by four torpedoes fired by German submarine U-73 and sank within minutes, resulting in one of the Royal Navy\'s most significant carrier losses in the Mediterranean.',
                      'is_aircraft_carrier' => true,
            ]
        );

        // 17. HMS Argus (I49) - Argus-class (ID: 99)
        Ship::updateOrCreate(
            ['name' => 'HMS Argus (I49)'],
            [
                'class_id' => 99,
                'launch_date' => '1917-12-02',
                'commission_date' => '1918-09-16',
                'displacement' => 14450,
                'length' => 172.8,
                'beam' => 20.7,
                'draft' => 6.1,
                'max_speed' => 20,
                'crew' => 495,
                'fate' => 'Survived WWII; decommissioned in 1946 and scrapped in 1947.',
                'description' => 'HMS Argus was the world\'s first aircraft carrier to feature a full-length unobstructed flight deck, making her one of the most influential ships in the history of naval aviation. Converted from the incomplete Italian liner Conte Rosso, she entered service during the First World War and became an important experimental platform for carrier operations. During the Second World War she served primarily as an aircraft ferry, training carrier, and convoy escort, transporting hundreds of aircraft to Malta, Gibraltar, and other overseas theaters. Although no longer suitable for front-line combat, her contribution to pilot training and aircraft transport proved invaluable throughout the war.',
                  'is_aircraft_carrier' => true,
            ]
        );

        // 18. HMS Unicorn (I72) - Unicorn-class (ID: 98)
        Ship::updateOrCreate(
            ['name' => 'HMS Unicorn (I72)'],
            [
                'class_id' => 98,
                'launch_date' => '1941-11-20',
                'commission_date' => '1943-03-12',
                'displacement' => 16770,
                'length' => 195.1,
                'beam' => 27.4,
                'draft' => 7.3,
                'max_speed' => 24,
                'crew' => 1200,
                'fate' => 'Served after WWII; decommissioned in 1958 and scrapped in 1960.',
                'description' => 'HMS Unicorn was the Royal Navy\'s first purpose-built aircraft maintenance carrier, combining the capabilities of an aircraft carrier with extensive repair, storage, and engineering facilities. Unlike conventional fleet carriers, Unicorn was designed to repair damaged aircraft, transport replacement aircraft, and provide logistical support to front-line carrier task forces while still retaining the ability to launch and recover aircraft when necessary. Commissioned in 1943, she served in the Atlantic before joining the British Pacific Fleet, where she played a vital role in sustaining carrier operations against Japan by repairing battle-damaged aircraft and supplying replacements. Her unique design made her one of the most valuable support ships in the Fleet Air Arm throughout the war.',
                   'is_aircraft_carrier' => true,
            ]
        );

        // ============================================
        // ESCORT CARRIERS
        // ============================================

        // 19. HMS Chaser (D32) - Attacker-class (ID: 100)
        Ship::updateOrCreate(
            ['name' => 'HMS Chaser (D32)'],
            [
                'class_id' => 100,
                'launch_date' => '1943-02-16',
                'commission_date' => '1943-04-12',
                'displacement' => 11400,
                'length' => 150.0,
                'beam' => 21.2,
                'draft' => 7.9,
                'max_speed' => 18,
                'crew' => 646,
                'fate' => 'Survived WWII; returned to the United States in 1946 under Lend-Lease, later converted to merchant service and scrapped in 1975.',
                'description' => 'Originally built in the United States as the Bogue-class escort carrier USS Breton (CVE-10), she was transferred to the Royal Navy under the Lend-Lease program and commissioned as HMS Chaser. She became one of the Royal Navy\'s most active escort carriers, providing fighter cover and anti-submarine patrols for Atlantic and Arctic convoys. Chaser escorted numerous convoys to the Soviet Union, protected merchant shipping from German U-boats and aircraft, and also served as an aircraft transport carrier. Her reliable service made her one of the most valuable escort carriers in the Royal Navy.',
                           'is_aircraft_carrier' => true,
            ]
        );

        // 20. HMS Vindex (D15) - Nairana-class (ID: 101)
        Ship::updateOrCreate(
            ['name' => 'HMS Vindex (D15)'],
            [
                'class_id' => 101,
                'launch_date' => '1943-11-17',
                'commission_date' => '1943-12-03',
                'displacement' => 14300,
                'length' => 160.0,
                'beam' => 20.1,
                'draft' => 7.2,
                'max_speed' => 17,
                'crew' => 700,
                'fate' => 'Survived WWII; returned to merchant service after the war and scrapped in 1971.',
                'description' => 'HMS Vindex was one of the Royal Navy\'s most successful escort carriers in anti-submarine warfare. Operating mainly with Arctic and North Atlantic convoys, she pioneered the use of escort carriers equipped with radar-equipped fighters and anti-submarine aircraft. Her aircraft helped locate and destroy German U-boats while protecting vital Allied shipping routes. Vindex also participated in operations supporting the liberation of Norway during the final stages of the war.',
                          'is_aircraft_carrier' => true,
            ]
        );

        // 21. HMS Emperor (D98) - Attacker-class (ID: 100)
        Ship::updateOrCreate(
            ['name' => 'HMS Emperor (D98)'],
            [
                'class_id' => 100,
                'launch_date' => '1943-05-20',
                'commission_date' => '1943-08-06',
                'displacement' => 11400,
                'length' => 150.0,
                'beam' => 21.2,
                'draft' => 7.9,
                'max_speed' => 18,
                'crew' => 646,
                'fate' => 'Survived WWII; returned to the United States in 1946 and later sold for merchant service. Scrapped in 1964.',
                'description' => 'Transferred to the Royal Navy under the Lend-Lease program, HMS Emperor served primarily in the Mediterranean and Indian Ocean. She provided fighter cover during the Allied invasion of Southern France (Operation Dragoon) in August 1944 before joining the Eastern Fleet for operations against Japanese-held territory in Southeast Asia. Her aircraft carried out strikes against airfields, shipping, and coastal installations until the end of the war.',
                    'is_aircraft_carrier' => true,
            ]
        );

        // 22. HMS Stalker (D91) - Attacker-class (ID: 100)
        Ship::updateOrCreate(
            ['name' => 'HMS Stalker (D91)'],
            [
                'class_id' => 100,
                'launch_date' => '1942-11-12',
                'commission_date' => '1943-09-30',
                'displacement' => 11400,
                'length' => 150.0,
                'beam' => 21.2,
                'draft' => 7.9,
                'max_speed' => 18,
                'crew' => 646,
                'fate' => 'Survived WWII; returned to the United States in 1946, converted to merchant service, and scrapped in 1975.',
                'description' => 'HMS Stalker was among the Royal Navy\'s busiest escort carriers. She supported the Allied landings at Salerno in September 1943 and later participated in Operation Dragoon, providing continuous fighter patrols and ground attack missions over Southern France. After Mediterranean operations she joined the Eastern Fleet, supporting attacks against Japanese positions in Burma, Malaya, and Sumatra. Her versatility made her one of the Royal Navy\'s most effective escort carriers.',
                'is_aircraft_carrier' => true,
            ]
        );

        // 23. HMS Tracker (D24) - Attacker-class (ID: 100)
        Ship::updateOrCreate(
            ['name' => 'HMS Tracker (D24)'],
            [
                'class_id' => 100,
                'launch_date' => '1943-06-30',
                'commission_date' => '1943-10-08',
                'displacement' => 11400,
                'length' => 150.0,
                'beam' => 21.2,
                'draft' => 7.9,
                'max_speed' => 18,
                'crew' => 646,
                'fate' => 'Survived WWII; returned to the United States in 1946, entered merchant service, and was scrapped in 1964.',
                'description' => 'HMS Tracker served primarily with Atlantic convoy escort groups, protecting merchant shipping from German submarines and long-range reconnaissance aircraft. Operating alongside destroyers and frigates, her aircraft flew anti-submarine patrols, convoy escort missions, and reconnaissance flights across the North Atlantic. She also transported aircraft and personnel between Britain and overseas bases, contributing significantly to Allied maritime logistics during the latter half of the war.',
                     'is_aircraft_carrier' => true,
            ]
        );


        // ============================================
        // KING GEORGE V CLASS BATTLESHIPS (ID: 5)
        // ============================================

        // 1. HMS King George V
        Ship::updateOrCreate(
            ['name' => 'HMS King George V'],
            [
                'class_id' => 5,
                'launch_date' => '1939-02-21',
                'commission_date' => '1940-12-11',
                'displacement' => 36727,
                'length' => 227.1,
                'beam' => 31.4,
                'draft' => 10.8,
                'max_speed' => 28,
                'crew' => 1600,
                'fate' => 'Survived WWII; scrapped in 1958.',
                'description' => 'HMS King George V was the lead ship of Britain\'s last class of battleships. As flagship of the Home Fleet, she played a central role in the pursuit and destruction of the German battleship Bismarck in May 1941. She later escorted Arctic convoys, participated in operations against the German battleship Tirpitz, and joined the British Pacific Fleet for the final campaigns against Japan. She remains one of the Royal Navy\'s most distinguished battleships.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 2. HMS Prince of Wales
        Ship::updateOrCreate(
            ['name' => 'HMS Prince of Wales'],
            [
                'class_id' => 5,
                'launch_date' => '1939-05-03',
                'commission_date' => '1941-01-19',
                'displacement' => 36727,
                'length' => 227.1,
                'beam' => 31.4,
                'draft' => 10.8,
                'max_speed' => 28,
                'crew' => 1600,
                'fate' => 'Sunk by Japanese land-based torpedo bombers on 10 December 1941 off the coast of Malaya while operating with Force Z.',
                'description' => 'Commissioned only months before the hunt for Bismarck, HMS Prince of Wales fought the German battleship in the Denmark Strait alongside HMS Hood, scoring several important hits despite mechanical problems with her main armament. Later dispatched to the Far East as part of Force Z, she was sunk with HMS Repulse by Japanese aircraft, becoming the first modern battleship sunk at sea solely by air power while underway.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 3. HMS Duke of York
        Ship::updateOrCreate(
            ['name' => 'HMS Duke of York'],
            [
                'class_id' => 5,
                'launch_date' => '1940-02-28',
                'commission_date' => '1941-11-04',
                'displacement' => 36727,
                'length' => 227.1,
                'beam' => 31.4,
                'draft' => 10.8,
                'max_speed' => 28,
                'crew' => 1600,
                'fate' => 'Survived WWII; scrapped in 1958.',
                'description' => 'HMS Duke of York became famous for leading the British force that intercepted and sank the German battlecruiser Scharnhorst during the Battle of the North Cape on 26 December 1943. She later escorted Arctic convoys and supported Allied operations in Europe before joining the British Pacific Fleet during the closing months of the war.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 4. HMS Anson
        Ship::updateOrCreate(
            ['name' => 'HMS Anson'],
            [
                'class_id' => 5,
                'launch_date' => '1940-02-24',
                'commission_date' => '1942-06-22',
                'displacement' => 36727,
                'length' => 227.1,
                'beam' => 31.4,
                'draft' => 10.8,
                'max_speed' => 28,
                'crew' => 1600,
                'fate' => 'Survived WWII; scrapped in 1957.',
                'description' => 'HMS Anson spent much of the war with the Home Fleet, escorting Arctic convoys and providing cover against possible sorties by the German battleship Tirpitz. In 1945 she transferred to the British Pacific Fleet, where she supported operations against Japan until the end of the war.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 5. HMS Howe
        Ship::updateOrCreate(
            ['name' => 'HMS Howe'],
            [
                'class_id' => 5,
                'launch_date' => '1940-04-09',
                'commission_date' => '1942-08-29',
                'displacement' => 36727,
                'length' => 227.1,
                'beam' => 31.4,
                'draft' => 10.8,
                'max_speed' => 28,
                'crew' => 1600,
                'fate' => 'Survived WWII; scrapped in 1958.',
                'description' => 'HMS Howe initially served with the Home Fleet before participating in Operation Husky, the Allied invasion of Sicily. She later joined the British Pacific Fleet, conducting shore bombardments and supporting carrier operations against the Japanese Home Islands during the final months of WWII.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // NELSON CLASS BATTLESHIPS (ID: 102)
        // ============================================

        // 6. HMS Rodney
        Ship::updateOrCreate(
            ['name' => 'HMS Rodney'],
            [
                'class_id' => 102,
                'launch_date' => '1925-12-17',
                'commission_date' => '1927-11-10',
                'displacement' => 33730,
                'length' => 216.4,
                'beam' => 32.3,
                'draft' => 9.1,
                'max_speed' => 23,
                'crew' => 1360,
                'fate' => 'Survived WWII; scrapped in 1948.',
                'description' => 'HMS Rodney was one of the Royal Navy\'s famous Big Seven battleships, armed with nine 16-inch (406 mm) guns—the largest guns ever carried by a British battleship. During the hunt for the German battleship Bismarck in May 1941, Rodney closed to point-blank range and inflicted devastating damage with her heavy artillery, playing a decisive role in Bismarck\'s destruction. She later escorted Atlantic convoys, supported the Allied landings in North Africa, Sicily, and Normandy, and provided powerful naval gunfire during the D-Day invasion.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 7. HMS Nelson
        Ship::updateOrCreate(
            ['name' => 'HMS Nelson'],
            [
                'class_id' => 102,
                'launch_date' => '1925-09-03',
                'commission_date' => '1927-08-15',
                'displacement' => 33730,
                'length' => 216.4,
                'beam' => 32.3,
                'draft' => 9.1,
                'max_speed' => 23,
                'crew' => 1360,
                'fate' => 'Survived WWII; decommissioned in 1946 and scrapped in 1949.',
                'description' => 'HMS Nelson, the lead ship of her class, was one of Britain\'s famous Big Seven battleships created under the limitations of the Washington Naval Treaty. Like her sister Rodney, she carried nine powerful 16-inch guns mounted forward of the bridge in a unique arrangement. Throughout WWII she served in the Atlantic and Mediterranean, escorted Malta convoys, supported Operation Torch, and bombarded enemy positions during the Normandy landings. On 29 September 1943, the Italian Armistice was signed aboard HMS Nelson at Malta, making her one of the most historically significant British battleships of the war.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // QUEEN ELIZABETH CLASS BATTLESHIPS (ID: 19)
        // ============================================

        // 8. HMS Warspite
        Ship::updateOrCreate(
            ['name' => 'HMS Warspite'],
            [
                'class_id' => 19,
                'launch_date' => '1913-11-26',
                'commission_date' => '1915-03-08',
                'displacement' => 31100,
                'length' => 196.8,
                'beam' => 31.7,
                'draft' => 10.2,
                'max_speed' => 24,
                'crew' => 1220,
                'fate' => 'Survived WWII; ran aground while being towed for scrapping in 1947 and was subsequently broken up at Prussia Cove, Cornwall.',
                'description' => 'HMS Warspite was one of the most decorated warships in Royal Navy history. A veteran of the Battle of Jutland during World War I, she underwent extensive modernization in the 1930s and returned to frontline service in WWII. She fought in the Norwegian Campaign, played a decisive role at the Battle of Cape Matapan by helping destroy several Italian cruisers, supported the evacuations from Crete, and later provided heavy gunfire during the invasions of Sicily, Salerno, Normandy, and Walcheren. Nicknamed the "Grand Old Lady", Warspite earned 15 battle honours, more than almost any other British warship.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 9. HMS Queen Elizabeth
        Ship::updateOrCreate(
            ['name' => 'HMS Queen Elizabeth'],
            [
                'class_id' => 19,
                'launch_date' => '1913-10-16',
                'commission_date' => '1915-01-15',
                'displacement' => 31100,
                'length' => 196.8,
                'beam' => 31.7,
                'draft' => 10.2,
                'max_speed' => 24,
                'crew' => 1220,
                'fate' => 'Survived WWII; decommissioned in 1946 and scrapped in 1948.',
                'description' => 'The lead ship of the Queen Elizabeth class, HMS Queen Elizabeth revolutionized battleship design by combining eight 15-inch guns with oil-fired boilers and high speed. After a major modernization before WWII, she became flagship of the Mediterranean Fleet. In December 1941 she was severely damaged by Italian human torpedoes during the Raid on Alexandria but was repaired and returned to service in 1943. She later joined the Eastern Fleet and British Pacific Fleet, supporting operations against Japanese forces until the end of the war.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 10. HMS Valiant
        Ship::updateOrCreate(
            ['name' => 'HMS Valiant'],
            [
                'class_id' => 19,
                'launch_date' => '1914-11-04',
                'commission_date' => '1916-02-19',
                'displacement' => 31100,
                'length' => 196.8,
                'beam' => 31.7,
                'draft' => 10.2,
                'max_speed' => 24,
                'crew' => 1220,
                'fate' => 'Survived WWII; placed in reserve in 1945 and scrapped in 1948.',
                'description' => 'HMS Valiant served with distinction throughout the Second World War. Together with HMS Warspite, she helped defeat the Italian Fleet at the Battle of Cape Matapan in March 1941. Later that year she was damaged during the Italian attack on Alexandria using manned torpedoes but was successfully repaired. Returning to service, she joined the Eastern Fleet in the Indian Ocean and supported operations against Japanese forces in Burma, Sumatra, and Malaya during the final stages of the war.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 11. HMS Malaya
        Ship::updateOrCreate(
            ['name' => 'HMS Malaya'],
            [
                'class_id' => 19,
                'launch_date' => '1915-03-18',
                'commission_date' => '1916-02-01',
                'displacement' => 31100,
                'length' => 196.8,
                'beam' => 31.7,
                'draft' => 10.2,
                'max_speed' => 23.5,
                'crew' => 1180,
                'fate' => 'Survived WWII; decommissioned in 1945 and scrapped in 1948.',
                'description' => 'HMS Malaya served primarily with the Atlantic and Mediterranean Fleets during WWII. She escorted numerous Atlantic convoys and participated in operations against German surface raiders. In March 1941 she was torpedoed by the German submarine U-106 but survived and underwent repairs in the United States. After returning to service, she resumed convoy escort duties, helping protect vital Allied shipping routes for the remainder of the war.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 12. HMS Barham
        Ship::updateOrCreate(
            ['name' => 'HMS Barham'],
            [
                'class_id' => 19,
                'launch_date' => '1914-12-31',
                'commission_date' => '1915-08-19',
                'displacement' => 31100,
                'length' => 196.8,
                'beam' => 31.7,
                'draft' => 10.2,
                'max_speed' => 24,
                'crew' => 1180,
                'fate' => 'Torpedoed by German submarine U-331 on 25 November 1941 in the Mediterranean; exploded after her magazines detonated and sank with the loss of 862 crew.',
                'description' => 'HMS Barham was an active member of the Mediterranean Fleet during the early years of WWII, participating in convoy escort operations, the Battle of Calabria, and the Battle of Cape Matapan. On 25 November 1941 she was struck by three torpedoes fired by the German submarine U-331. Minutes later her magazines exploded in one of the most dramatic naval disasters of the war, captured on film by a British cameraman. Her loss highlighted the continuing vulnerability of even the most powerful battleships to submarine attack.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // REVENGE CLASS BATTLESHIPS (ID: 103)
        // ============================================

        // 13. HMS Ramillies
        Ship::updateOrCreate(
            ['name' => 'HMS Ramillies'],
            [
                'class_id' => 103,
                'launch_date' => '1916-09-12',
                'commission_date' => '1917-09-01',
                'displacement' => 29150,
                'length' => 189.2,
                'beam' => 27.0,
                'draft' => 9.9,
                'max_speed' => 21,
                'crew' => 940,
                'fate' => 'Survived WWII; decommissioned in 1945 and scrapped in 1948.',
                'description' => 'HMS Ramillies was the most active of the Revenge-class battleships during WWII. Although slower than newer battleships, she played an essential role escorting Atlantic and Indian Ocean convoys against German surface raiders. In May 1942 she successfully defended the invasion port of Diego Suarez during the Japanese attack on Madagascar despite being torpedoed by a Japanese midget submarine. After repairs, she returned to service and later provided heavy naval gunfire support during the Normandy landings in June 1944, bombarding German coastal defenses before being withdrawn from active service following the war.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 14. HMS Resolution
        Ship::updateOrCreate(
            ['name' => 'HMS Resolution'],
            [
                'class_id' => 103,
                'launch_date' => '1915-01-14',
                'commission_date' => '1916-12-07',
                'displacement' => 29150,
                'length' => 189.2,
                'beam' => 27.0,
                'draft' => 9.9,
                'max_speed' => 21,
                'crew' => 940,
                'fate' => 'Survived WWII; decommissioned in 1948 and scrapped in 1949.',
                'description' => 'HMS Resolution was one of the five Revenge-class battleships built during the First World War. During WWII she participated in the unsuccessful attack on Dakar (Operation Menace) in September 1940, where she was torpedoed by the French submarine Bévéziers. After extensive repairs in the United States, she returned to service as a convoy escort in the Atlantic and later served with the Eastern Fleet in the Indian Ocean, protecting Allied shipping and supporting operations against Japanese forces. Although slower than newer battleships, Resolution provided valuable service throughout the war before being placed in reserve after 1945.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 15. HMS Royal Sovereign
        Ship::updateOrCreate(
            ['name' => 'HMS Royal Sovereign'],
            [
                'class_id' => 103,
                'launch_date' => '1915-04-29',
                'commission_date' => '1916-04-18',
                'displacement' => 29150,
                'length' => 189.2,
                'beam' => 27.0,
                'draft' => 9.9,
                'max_speed' => 21,
                'crew' => 940,
                'fate' => 'Transferred to the Soviet Navy in May 1944 as Arkhangelsk; returned to the Royal Navy in 1949 and scrapped in 1950.',
                'description' => 'HMS Royal Sovereign spent the early years of WWII escorting Atlantic convoys and providing cover against German surface raiders. In 1944 she was transferred to the Soviet Navy under Lend-Lease as Arkhangelsk, replacing the Italian battleship promised to the USSR after Italy\'s surrender. Serving with the Soviet Northern Fleet, she helped protect Arctic waters until the end of the war before being returned to Britain. She remains one of the few British battleships to have served under a foreign flag.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 16. HMS Royal Oak
        Ship::updateOrCreate(
            ['name' => 'HMS Royal Oak'],
            [
                'class_id' => 103,
                'launch_date' => '1914-11-17',
                'commission_date' => '1916-05-01',
                'displacement' => 29150,
                'length' => 189.2,
                'beam' => 27.0,
                'draft' => 9.9,
                'max_speed' => 21,
                'crew' => 940,
                'fate' => 'Torpedoed and sunk by German submarine U-47, commanded by Günther Prien, in Scapa Flow on 14 October 1939. Of her crew, 835 officers and sailors were killed.',
                'description' => 'HMS Royal Oak became one of the earliest and most famous British naval losses of WWII. Anchored in what was believed to be the secure naval base at Scapa Flow, she was penetrated by the German submarine U-47 in a daring night attack. The sinking shocked the British public and exposed serious weaknesses in the base\'s defenses, prompting the construction of the famous Churchill Barriers around Scapa Flow. Today, Royal Oak remains a protected war grave and memorial to her crew.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // VANGUARD CLASS BATTLESHIP (ID: 104)
        // ============================================

        // 17. HMS Vanguard
        Ship::updateOrCreate(
            ['name' => 'HMS Vanguard'],
            [
                'class_id' => 104,
                'launch_date' => '1944-11-30',
                'commission_date' => '1946-05-09',
                'displacement' => 44500,
                'length' => 248.2,
                'beam' => 32.9,
                'draft' => 10.9,
                'max_speed' => 30,
                'crew' => 1975,
                'fate' => 'Served as the Royal Navy\'s flagship after WWII; decommissioned in 1959 and scrapped in 1960.',
                'description' => 'HMS Vanguard was the final battleship ever built for the Royal Navy and the last battleship completed anywhere in the world. Ordered during WWII to supplement Britain\'s battle fleet, construction was delayed by wartime priorities, and she was not commissioned until after the conflict had ended. Designed around four twin 15-inch gun turrets originally intended for the battlecruisers Courageous and Glorious, Vanguard combined proven heavy armament with modern fire-control systems and excellent seakeeping. She served as the Royal Navy\'s flagship during the late 1940s and undertook several prestigious diplomatic voyages, including transporting the Royal Family to South Africa in 1947. Although she never fired her guns in combat, Vanguard represented the final evolution of the battleship before the age of naval aviation and guided missiles.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // ADMIRAL CLASS BATTLECRUISER (ID: 17)
        // ============================================

        // 18. HMS Hood
        Ship::updateOrCreate(
            ['name' => 'HMS Hood'],
            [
                'class_id' => 17,
                'launch_date' => '1918-08-22',
                'commission_date' => '1920-05-15',
                'displacement' => 42100,
                'length' => 262.3,
                'beam' => 31.8,
                'draft' => 9.7,
                'max_speed' => 31,
                'crew' => 1420,
                'fate' => 'Destroyed by the German battleship Bismarck during the Battle of the Denmark Strait on 24 May 1941. Only 3 of her crew of 1,418 survived.',
                'description' => 'HMS Hood was the largest warship in the world when commissioned and became the symbol of British naval supremacy during the interwar period. Nicknamed "The Mighty Hood," she served as the Royal Navy\'s flagship on numerous international cruises and represented British sea power around the world. At the outbreak of WWII she escorted Atlantic convoys and hunted German commerce raiders. On 24 May 1941, while leading the attack on Bismarck in the Denmark Strait, Hood was struck by a shell that penetrated her after magazines, causing a catastrophic explosion that broke the ship in two. Her loss shocked Britain and led directly to the Royal Navy\'s relentless pursuit and destruction of Bismarck three days later.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // RENOWN CLASS BATTLECRUISERS (ID: 105)
        // ============================================

        // 19. HMS Renown
        Ship::updateOrCreate(
            ['name' => 'HMS Renown'],
            [
                'class_id' => 105,
                'launch_date' => '1916-03-04',
                'commission_date' => '1916-09-20',
                'displacement' => 32000,
                'length' => 242.0,
                'beam' => 27.5,
                'draft' => 9.0,
                'max_speed' => 31.5,
                'crew' => 1250,
                'fate' => 'Survived WWII; decommissioned in 1948 and scrapped in 1948.',
                'description' => 'HMS Renown was one of the Royal Navy\'s fastest capital ships and underwent one of the most extensive battleship modernizations ever carried out between the wars. Throughout WWII she served with the Home Fleet, Force H, and the Eastern Fleet, escorting aircraft carriers, hunting German surface raiders, and protecting Atlantic and Arctic convoys. She participated in the Norwegian Campaign, the hunt for Bismarck, and operations in the Mediterranean and Indian Ocean. Her combination of speed, powerful armament, and reliability made her one of Britain\'s most valuable capital ships throughout the conflict.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 20. HMS Repulse
        Ship::updateOrCreate(
            ['name' => 'HMS Repulse'],
            [
                'class_id' => 105,
                'launch_date' => '1916-01-08',
                'commission_date' => '1916-08-18',
                'displacement' => 32000,
                'length' => 242.0,
                'beam' => 27.5,
                'draft' => 8.8,
                'max_speed' => 31.5,
                'crew' => 1180,
                'fate' => 'Sunk by Japanese land-based torpedo bombers on 10 December 1941 while operating with Force Z off the coast of Malaya.',
                'description' => 'HMS Repulse spent much of WWII escorting convoys and hunting German commerce raiders before being assigned to the newly formed Force Z in Singapore alongside HMS Prince of Wales. On 10 December 1941, both ships were attacked by Japanese naval bombers and sunk without friendly air cover, becoming the first capital ships sunk solely by aircraft while underway. The loss demonstrated the growing dominance of naval aviation over heavily armed surface warships.',
                'is_aircraft_carrier' => false,
            ]
        );

    
        
        // ============================================
        // YORK CLASS HEAVY CRUISERS (ID: 106)
        // ============================================

        // 1. HMS Exeter
        Ship::updateOrCreate(
            ['name' => 'HMS Exeter'],
            [
                'class_id' => 106,
                'launch_date' => '1929-07-18',
                'commission_date' => '1931-07-27',
                'displacement' => 8390,
                'length' => 175.3,
                'beam' => 17.7,
                'draft' => 5.8,
                'max_speed' => 32,
                'crew' => 630,
                'fate' => 'Sunk by Japanese cruisers and destroyers during the Battle of the Java Sea on 1 March 1942.',
                'description' => 'HMS Exeter was one of the Royal Navy\'s most famous heavy cruisers. In December 1939, she fought alongside HMS Ajax and HMNZS Achilles in the Battle of the River Plate against the German pocket battleship Admiral Graf Spee. Exeter absorbed the heaviest punishment of the three cruisers, suffering severe damage while continuing to engage the enemy, helping force Graf Spee to withdraw to Montevideo, where the German ship was later scuttled. After extensive repairs, Exeter joined the Allied ABDA Fleet in the Pacific. She fought in the Battle of the Java Sea in February 1942 and, while attempting to escape the following day, was intercepted by superior Japanese forces and sunk on 1 March 1942.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 2. HMS York
        Ship::updateOrCreate(
            ['name' => 'HMS York'],
            [
                'class_id' => 106,
                'launch_date' => '1928-07-17',
                'commission_date' => '1930-05-01',
                'displacement' => 8390,
                'length' => 175.3,
                'beam' => 17.7,
                'draft' => 5.8,
                'max_speed' => 32,
                'crew' => 630,
                'fate' => 'Crippled by Italian explosive motor boats in Suda Bay, Crete, on 26 March 1941. She was later scuttled by British forces in May 1941 before the German capture of Crete.',
                'description' => 'HMS York served in the Atlantic and Mediterranean, escorting convoys and supporting fleet operations. While anchored in Suda Bay during the Battle of Greece, she was successfully attacked by Italian explosive motor boats, which severely damaged her hull and machinery, rendering her immobile. As German forces invaded Crete in May 1941, York was deliberately scuttled by her crew to prevent capture. Her loss demonstrated the effectiveness of small special attack craft against major warships in confined anchorages.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // COUNTY CLASS HEAVY CRUISERS (ID: 107)
        // ============================================

        // 3. HMS Cornwall
        Ship::updateOrCreate(
            ['name' => 'HMS Cornwall'],
            [
                'class_id' => 107,
                'launch_date' => '1926-03-11',
                'commission_date' => '1928-05-06',
                'displacement' => 9850,
                'length' => 192.0,
                'beam' => 20.8,
                'draft' => 6.6,
                'max_speed' => 31.5,
                'crew' => 780,
                'fate' => 'Sunk by Japanese carrier dive bombers on 5 April 1942 during the Indian Ocean Raid.',
                'description' => 'HMS Cornwall served with distinction in the Atlantic and Indian Oceans, escorting convoys and hunting German commerce raiders. During the Indian Ocean Raid in April 1942, she and HMS Dorsetshire were discovered by aircraft from Vice Admiral Chuichi Nagumo\'s carrier strike force. Repeated attacks by Japanese Aichi D3A "Val" dive bombers overwhelmed both cruisers, resulting in their sinking within minutes. Their loss highlighted the vulnerability of surface ships operating without adequate air cover.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 4. HMS Dorsetshire
        Ship::updateOrCreate(
            ['name' => 'HMS Dorsetshire'],
            [
                'class_id' => 107,
                'launch_date' => '1929-01-29',
                'commission_date' => '1930-09-30',
                'displacement' => 9925,
                'length' => 192.0,
                'beam' => 20.8,
                'draft' => 6.6,
                'max_speed' => 31.5,
                'crew' => 780,
                'fate' => 'Sunk by Japanese carrier dive bombers on 5 April 1942 during the Indian Ocean Raid.',
                'description' => 'HMS Dorsetshire is best remembered for her role in the final destruction of Bismarck. On 27 May 1941, after the German battleship had been battered by British battleships, Dorsetshire fired the torpedoes that helped send Bismarck to the bottom before rescuing many survivors. Less than a year later, while operating with HMS Cornwall in the Indian Ocean, she was attacked by aircraft from the Japanese First Air Fleet and sunk during the Indian Ocean Raid. Her career linked two of the most significant naval actions of the Second World War.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 5. HMS Sussex
        Ship::updateOrCreate(
            ['name' => 'HMS Sussex'],
            [
                'class_id' => 107,
                'launch_date' => '1928-02-22',
                'commission_date' => '1929-03-31',
                'displacement' => 9850,
                'length' => 192.0,
                'beam' => 20.8,
                'draft' => 6.6,
                'max_speed' => 31.5,
                'crew' => 780,
                'fate' => 'Survived WWII; decommissioned in 1949 and scrapped in 1950.',
                'description' => 'HMS Sussex served in the Atlantic, Indian Ocean, and Pacific throughout WWII. In September 1942 she was severely damaged by German bombs while in dry dock at Alexandria, requiring extensive repairs in Britain. Returning to service in 1944, she joined the East Indies Fleet and later the British Pacific Fleet, participating in operations against Japanese forces during the final year of the war. After Japan\'s surrender, Sussex represented the Royal Navy during the reoccupation of Hong Kong.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 6. HMS Norfolk
        Ship::updateOrCreate(
            ['name' => 'HMS Norfolk'],
            [
                'class_id' => 107,
                'launch_date' => '1928-12-12',
                'commission_date' => '1930-04-30',
                'displacement' => 10010,
                'length' => 192.0,
                'beam' => 20.9,
                'draft' => 6.7,
                'max_speed' => 31.5,
                'crew' => 800,
                'fate' => 'Survived WWII; scrapped in 1950.',
                'description' => 'HMS Norfolk was one of the Royal Navy\'s most distinguished heavy cruisers. She played a key role in the hunt for Bismarck, maintaining radar contact with the German battleship during her breakout into the Atlantic and shadowing her until British forces closed in. Norfolk later served on numerous Arctic convoy missions and fought in the Battle of the North Cape in December 1943, where she helped defeat the German battlecruiser Scharnhorst. She finished the war serving with the Home Fleet.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 7. HMS Suffolk
        Ship::updateOrCreate(
            ['name' => 'HMS Suffolk'],
            [
                'class_id' => 107,
                'launch_date' => '1926-02-16',
                'commission_date' => '1928-05-31',
                'displacement' => 9850,
                'length' => 192.0,
                'beam' => 20.8,
                'draft' => 6.6,
                'max_speed' => 31.5,
                'crew' => 780,
                'fate' => 'Survived WWII; scrapped in 1948.',
                'description' => 'HMS Suffolk is best remembered for her crucial role during the hunt for Bismarck. Equipped with advanced radar, she detected the German battleship in the Denmark Strait and successfully shadowed her for many hours despite poor visibility, providing continuous reports that enabled the Royal Navy to maintain contact. Suffolk later escorted Arctic convoys to the Soviet Union before being withdrawn from active service due to wear and structural fatigue.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 8. HMS Kent
        Ship::updateOrCreate(
            ['name' => 'HMS Kent'],
            [
                'class_id' => 107,
                'launch_date' => '1926-03-16',
                'commission_date' => '1928-06-25',
                'displacement' => 9850,
                'length' => 192.0,
                'beam' => 20.8,
                'draft' => 6.6,
                'max_speed' => 31.5,
                'crew' => 780,
                'fate' => 'Survived WWII; placed in reserve in 1945 and scrapped in 1948.',
                'description' => 'HMS Kent served extensively in the Far East, Atlantic, and Indian Ocean during WWII. Early in the war she escorted convoys and hunted German commerce raiders before joining operations in the Mediterranean. In 1940 she was heavily damaged by an Italian torpedo but returned to service after lengthy repairs. Later she escorted Arctic convoys to the Soviet Union and participated in operations against German shipping off Norway before finishing the war in the Eastern Fleet.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 9. HMS London
        Ship::updateOrCreate(
            ['name' => 'HMS London'],
            [
                'class_id' => 107,
                'launch_date' => '1927-09-14',
                'commission_date' => '1929-01-31',
                'displacement' => 9850,
                'length' => 192.0,
                'beam' => 20.8,
                'draft' => 6.6,
                'max_speed' => 31.5,
                'crew' => 780,
                'fate' => 'Survived WWII; modernized after the war, decommissioned in 1948, scrapped in 1950.',
                'description' => 'HMS London served throughout WWII in the Atlantic, Arctic, and Mediterranean. She escorted convoys, hunted German surface raiders, and took part in Arctic convoy operations to the Soviet Union. After a major reconstruction before the war, she became one of the Royal Navy\'s most modern heavy cruisers. Following Germany\'s surrender, she served in the Far East before returning home after Japan\'s defeat.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 10. HMS Devonshire
        Ship::updateOrCreate(
            ['name' => 'HMS Devonshire'],
            [
                'class_id' => 107,
                'launch_date' => '1927-10-22',
                'commission_date' => '1929-03-18',
                'displacement' => 9850,
                'length' => 192.0,
                'beam' => 20.8,
                'draft' => 6.6,
                'max_speed' => 31.5,
                'crew' => 780,
                'fate' => 'Survived WWII; scrapped in 1954.',
                'description' => 'HMS Devonshire served in the Atlantic, Arctic, and Indian Ocean throughout the war. She is best remembered for evacuating King Haakon VII of Norway and the Norwegian government during the German invasion in 1940. Later she escorted Arctic convoys, hunted German commerce raiders, and served with the Eastern Fleet in the Indian Ocean. She survived the war with an excellent service record.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // EDINBURGH CLASS LIGHT CRUISERS (ID: 108)
        // ============================================

        // 11. HMS Belfast
        Ship::updateOrCreate(
            ['name' => 'HMS Belfast'],
            [
                'class_id' => 108,
                'launch_date' => '1938-03-17',
                'commission_date' => '1939-08-05',
                'displacement' => 10550,
                'length' => 187.0,
                'beam' => 19.3,
                'draft' => 5.3,
                'max_speed' => 32,
                'crew' => 850,
                'fate' => 'Preserved as a museum ship on the River Thames in London.',
                'description' => 'HMS Belfast is one of the Royal Navy\'s most famous cruisers and the only surviving major British warship from WWII. After being badly damaged by a German magnetic mine in 1939, she underwent extensive reconstruction before returning to service in 1942. She escorted Arctic convoys to the Soviet Union, played an important role in the Battle of the North Cape during the destruction of Scharnhorst, and provided naval gunfire support during the Normandy landings on D-Day. After WWII she also served during the Korean War before becoming a museum ship.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 12. HMS Edinburgh
        Ship::updateOrCreate(
            ['name' => 'HMS Edinburgh'],
            [
                'class_id' => 108,
                'launch_date' => '1938-03-31',
                'commission_date' => '1939-07-06',
                'displacement' => 10550,
                'length' => 187.0,
                'beam' => 19.3,
                'draft' => 5.3,
                'max_speed' => 32,
                'crew' => 850,
                'fate' => 'Torpedoed by German submarine U-456 and later sunk by HMS Foresight on 2 May 1942 after further attacks by German destroyers.',
                'description' => 'The lead ship of her class, HMS Edinburgh served with the Home Fleet escorting Arctic convoys carrying vital supplies to the Soviet Union. While returning from convoy PQ 15 in April 1942, she was torpedoed by U-456 but continued toward home despite severe damage. She was then attacked by German destroyers in the Barents Sea and, after a fierce engagement, was too badly damaged to save. She was scuttled by HMS Foresight. Edinburgh was also carrying approximately 4.5 tons of Soviet gold, much of which was recovered decades later from the wreck.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // TOWN CLASS LIGHT CRUISERS (ID: 109)
        // ============================================

        // 13. HMS Sheffield
        Ship::updateOrCreate(
            ['name' => 'HMS Sheffield'],
            [
                'class_id' => 109,
                'launch_date' => '1936-07-23',
                'commission_date' => '1937-08-25',
                'displacement' => 9100,
                'length' => 180.2,
                'beam' => 18.9,
                'draft' => 6.0,
                'max_speed' => 32,
                'crew' => 750,
                'fate' => 'Survived WWII; scrapped in 1967.',
                'description' => 'HMS Sheffield earned the nickname "Shiny Sheff" because her stainless-steel fittings gave her a distinctive appearance. She participated in the Battle of the River Plate, escorted Arctic convoys, and played a crucial role in the hunt for Bismarck, maintaining contact with the German battleship before the final battle. During that operation she narrowly escaped being hit by British Swordfish torpedoes launched by mistake. Sheffield later fought in the Arctic, Mediterranean, and Normandy operations, surviving the war with distinction.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 14. HMS Southampton
        Ship::updateOrCreate(
            ['name' => 'HMS Southampton'],
            [
                'class_id' => 109,
                'launch_date' => '1936-03-10',
                'commission_date' => '1937-03-06',
                'displacement' => 9100,
                'length' => 180.2,
                'beam' => 18.9,
                'draft' => 6.0,
                'max_speed' => 32,
                'crew' => 750,
                'fate' => 'Badly damaged by German Ju 87 Stuka dive bombers on 11 January 1941 during the Battle of Cape Spartivento operations in the Mediterranean. She was scuttled by HMS Gloucester after the crew was evacuated.',
                'description' => 'The lead ship of the Southampton subclass of the Town-class cruisers, HMS Southampton served with the Home Fleet before joining Mediterranean operations. She escorted convoys, intercepted enemy shipping, and supported Royal Navy operations against Italian forces. On 11 January 1941 she was struck by multiple bombs from German Stuka dive bombers, causing uncontrollable fires. After unsuccessful attempts to save the ship, she was abandoned and scuttled by friendly torpedoes to prevent capture.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 15. HMS Manchester
        Ship::updateOrCreate(
            ['name' => 'HMS Manchester'],
            [
                'class_id' => 109,
                'launch_date' => '1937-04-12',
                'commission_date' => '1938-08-04',
                'displacement' => 9400,
                'length' => 180.2,
                'beam' => 18.9,
                'draft' => 6.0,
                'max_speed' => 32,
                'crew' => 800,
                'fate' => 'Torpedoed by Italian motor torpedo boats during Operation Pedestal on 13 August 1942. Scuttled by her crew after being abandoned.',
                'description' => 'HMS Manchester served with the Home Fleet before transferring to the Mediterranean, where she escorted convoys and supported Allied operations against Italy. During Operation Pedestal, the vital convoy to relieve Malta, she was struck by two torpedoes fired by Italian MAS boats. Unable to continue and fearing capture, her captain ordered the ship scuttled. The decision was later controversial and resulted in a court-martial, making Manchester\'s loss one of the Royal Navy\'s most debated wartime incidents.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 16. HMS Liverpool
        Ship::updateOrCreate(
            ['name' => 'HMS Liverpool'],
            [
                'class_id' => 109,
                'launch_date' => '1937-03-24',
                'commission_date' => '1938-11-02',
                'displacement' => 9400,
                'length' => 180.2,
                'beam' => 18.9,
                'draft' => 6.0,
                'max_speed' => 32,
                'crew' => 800,
                'fate' => 'Survived WWII; decommissioned in 1952 and scrapped in 1958.',
                'description' => 'HMS Liverpool served extensively in the Mediterranean, where she escorted convoys and bombarded enemy positions. She survived two serious torpedo attacks—one by an Italian aircraft in 1940 and another by the German submarine U-409 in 1942—which required lengthy repairs in the United States and Britain. Returning to service in 1945, she participated in the final operations against Japan before ending the war as one of the Royal Navy\'s most battle-hardened light cruisers.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 17. HMS Gloucester
        Ship::updateOrCreate(
            ['name' => 'HMS Gloucester'],
            [
                'class_id' => 109,
                'launch_date' => '1937-10-19',
                'commission_date' => '1939-01-31',
                'displacement' => 9100,
                'length' => 180.2,
                'beam' => 18.9,
                'draft' => 6.0,
                'max_speed' => 32,
                'crew' => 750,
                'fate' => 'Sunk by German Ju 87 Stuka dive bombers off Crete on 22 May 1941.',
                'description' => 'Nicknamed "The Fighting G," HMS Gloucester earned a reputation as one of the Royal Navy\'s most aggressive cruisers during the Mediterranean campaign. She participated in the Battles of Calabria and Cape Matapan before the Battle of Crete. While attempting to rescue the destroyer HMS Greyhound, Gloucester was repeatedly attacked by German dive bombers after exhausting much of her anti-aircraft ammunition. She eventually sank with heavy loss of life, becoming one of the Royal Navy\'s greatest cruiser losses of the war.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 18. HMS Glasgow
        Ship::updateOrCreate(
            ['name' => 'HMS Glasgow'],
            [
                'class_id' => 109,
                'launch_date' => '1936-06-20',
                'commission_date' => '1937-09-09',
                'displacement' => 9100,
                'length' => 180.2,
                'beam' => 18.9,
                'draft' => 6.0,
                'max_speed' => 32,
                'crew' => 750,
                'fate' => 'Survived WWII; scrapped in 1958.',
                'description' => 'HMS Glasgow enjoyed one of the longest and most distinguished wartime careers of any British cruiser. She fought during the Norwegian Campaign, participated in the Battle of the River Plate patrols, escorted Arctic convoys, supported the invasion of Sicily, and provided naval gunfire during the Normandy landings. Glasgow also participated in the Battle of North Cape against Scharnhorst. Surviving numerous battles and air attacks, she finished the war with an exceptional operational record.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 19. HMS Newcastle
        Ship::updateOrCreate(
            ['name' => 'HMS Newcastle'],
            [
                'class_id' => 109,
                'launch_date' => '1936-01-23',
                'commission_date' => '1937-03-05',
                'displacement' => 9100,
                'length' => 180.2,
                'beam' => 18.9,
                'draft' => 6.0,
                'max_speed' => 32,
                'crew' => 750,
                'fate' => 'Survived WWII; decommissioned in 1958 and scrapped in 1959.',
                'description' => 'HMS Newcastle served with distinction in the Atlantic, Mediterranean, Indian Ocean, and Pacific. She escorted Arctic convoys before transferring to the Eastern Fleet, where she participated in operations against Japanese bases and supported Allied advances across Southeast Asia. Following Japan\'s surrender, Newcastle assisted in the reoccupation of British colonies in the Far East before returning home after nearly continuous wartime service.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // MINOTAUR CLASS LIGHT CRUISERS (ID: 110)
        // ============================================

        // 20. HMS Swiftsure
        Ship::updateOrCreate(
            ['name' => 'HMS Swiftsure'],
            [
                'class_id' => 110,
                'launch_date' => '1943-08-04',
                'commission_date' => '1944-04-22',
                'displacement' => 8840,
                'length' => 169.3,
                'beam' => 18.9,
                'draft' => 5.3,
                'max_speed' => 32.25,
                'crew' => 850,
                'fate' => 'Survived WWII; decommissioned in 1962 and scrapped in 1967.',
                'description' => 'HMS Swiftsure was the lead ship of the Minotaur class, the Royal Navy\'s final wartime light cruiser design. Commissioned in 1944, she joined the British Pacific Fleet and took part in carrier escort duties and bombardment operations during the Okinawa campaign and the final attacks on the Japanese home islands. She remained in service after the war, serving in the Korean War before being retired in the early 1960s.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // CROWN COLONY CLASS LIGHT CRUISERS (ID: 111)
        // ============================================

        // 21. HMS Ceylon
        Ship::updateOrCreate(
            ['name' => 'HMS Ceylon'],
            [
                'class_id' => 111,
                'launch_date' => '1942-07-30',
                'commission_date' => '1943-07-13',
                'displacement' => 8530,
                'length' => 169.3,
                'beam' => 18.9,
                'draft' => 5.3,
                'max_speed' => 31.5,
                'crew' => 730,
                'fate' => 'Transferred to the Peruvian Navy as BAP Coronel Bolognesi in 1960; scrapped in 1985.',
                'description' => 'HMS Ceylon entered service in 1943 and joined the Eastern Fleet in the Indian Ocean. She escorted aircraft carriers during strikes against Japanese positions in Sumatra and the Dutch East Indies and later served with the British Pacific Fleet during the final campaigns against Japan. Following WWII, she remained in Royal Navy service before being sold to Peru, where she enjoyed a long second career.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 22. HMS Kenya
        Ship::updateOrCreate(
            ['name' => 'HMS Kenya'],
            [
                'class_id' => 111,
                'launch_date' => '1939-08-18',
                'commission_date' => '1940-09-27',
                'displacement' => 8530,
                'length' => 169.3,
                'beam' => 18.9,
                'draft' => 5.3,
                'max_speed' => 31.5,
                'crew' => 730,
                'fate' => 'Survived WWII; sold for scrap in 1962.',
                'description' => 'Nicknamed "The Pink Lady" after being temporarily painted pink for Arctic operations, HMS Kenya served on Atlantic and Arctic convoy escort missions before transferring to the Mediterranean and later the British Pacific Fleet. She participated in Operation Pedestal, supported the Normandy invasion, and took part in the final operations against Japan. Kenya became one of the Royal Navy\'s most widely deployed cruisers during the war.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 23. HMS Jamaica
        Ship::updateOrCreate(
            ['name' => 'HMS Jamaica'],
            [
                'class_id' => 111,
                'launch_date' => '1940-11-16',
                'commission_date' => '1942-06-29',
                'displacement' => 8530,
                'length' => 169.3,
                'beam' => 18.9,
                'draft' => 5.3,
                'max_speed' => 31.5,
                'crew' => 730,
                'fate' => 'Survived WWII; scrapped in 1960.',
                'description' => 'HMS Jamaica served with the Home Fleet, escorting Arctic convoys and protecting northern sea routes. She played a decisive role in the Battle of the North Cape on 26 December 1943, where she fought alongside HMS Duke of York in the destruction of the German battlecruiser Scharnhorst. Jamaica later participated in the Normandy landings and supported Allied operations in Europe until Germany\'s surrender.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 24. HMS Trinidad
        Ship::updateOrCreate(
            ['name' => 'HMS Trinidad'],
            [
                'class_id' => 111,
                'launch_date' => '1941-03-21',
                'commission_date' => '1941-10-14',
                'displacement' => 8530,
                'length' => 169.3,
                'beam' => 18.9,
                'draft' => 5.3,
                'max_speed' => 31.5,
                'crew' => 730,
                'fate' => 'Badly damaged by German bombers on 15 May 1942 while returning from Arctic convoy duty; scuttled by HMS Matchless on 16 May 1942.',
                'description' => 'HMS Trinidad became famous during the Arctic convoy PQ 13 in March 1942 when one of her own torpedoes malfunctioned, circled back, and struck the cruiser, causing serious damage. After temporary repairs in the Soviet Union, she attempted to return to Britain but came under heavy attack from German bombers. With fires raging and damage beyond repair, Trinidad was abandoned and scuttled by the destroyer HMS Matchless. Her unusual self-inflicted torpedo hit remains one of the most remarkable incidents in Royal Navy history.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // LEANDER CLASS LIGHT CRUISERS (ID: 112)
        // ============================================

        // 25. HMS Ajax
        Ship::updateOrCreate(
            ['name' => 'HMS Ajax'],
            [
                'class_id' => 112,
                'launch_date' => '1934-03-01',
                'commission_date' => '1935-06-03',
                'displacement' => 7270,
                'length' => 169.0,
                'beam' => 17.1,
                'draft' => 5.8,
                'max_speed' => 32.5,
                'crew' => 570,
                'fate' => 'Survived WWII; scrapped in 1949.',
                'description' => 'HMS Ajax became one of the Royal Navy\'s most celebrated cruisers after the Battle of the River Plate in December 1939. Together with HMNZS Achilles and HMS Exeter, she engaged the German pocket battleship Admiral Graf Spee, forcing Captain Hans Langsdorff to seek refuge in Montevideo, where the German ship was later scuttled. Ajax later served in the Mediterranean, took part in the Battle of Crete, escorted Malta convoys, and supported the Normandy landings in 1944.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 26. HMS Orion
        Ship::updateOrCreate(
            ['name' => 'HMS Orion'],
            [
                'class_id' => 112,
                'launch_date' => '1932-11-24',
                'commission_date' => '1934-01-18',
                'displacement' => 7270,
                'length' => 169.0,
                'beam' => 17.1,
                'draft' => 5.8,
                'max_speed' => 32.5,
                'crew' => 570,
                'fate' => 'Survived WWII; scrapped in 1949.',
                'description' => 'HMS Orion served extensively in the Mediterranean throughout WWII. She participated in the Battle of Cape Matapan, the evacuation of Greece and Crete, numerous Malta convoy operations, and later supported the Allied invasion of Sicily and the Normandy landings. She earned thirteen battle honours, making her one of the Royal Navy\'s most decorated cruisers of the war.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 27. HMS Leander
        Ship::updateOrCreate(
            ['name' => 'HMS Leander'],
            [
                'class_id' => 112,
                'launch_date' => '1931-09-24',
                'commission_date' => '1933-03-24',
                'displacement' => 7270,
                'length' => 169.0,
                'beam' => 17.1,
                'draft' => 5.8,
                'max_speed' => 32.5,
                'crew' => 570,
                'fate' => 'Transferred to the Royal New Zealand Navy in 1941; badly damaged during the Battle of Kolombangara (1943); survived the war and was scrapped in 1950.',
                'description' => 'Commissioned as HMS Leander, she was transferred to the Royal New Zealand Navy in 1941 and served as HMNZS Leander. She escorted convoys in the Pacific and fought in the Battle of Kolombangara, where she was severely damaged by Japanese torpedoes. Although repaired, she did not return to front-line combat. Because most of her wartime career was under New Zealand command, she is often associated with the Royal New Zealand Navy.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 28. HMS Neptune
        Ship::updateOrCreate(
            ['name' => 'HMS Neptune'],
            [
                'class_id' => 112,
                'launch_date' => '1933-01-31',
                'commission_date' => '1934-02-12',
                'displacement' => 7270,
                'length' => 169.0,
                'beam' => 17.1,
                'draft' => 5.8,
                'max_speed' => 32.5,
                'crew' => 570,
                'fate' => 'Struck Italian mines and sank off Libya on 19 December 1941; only one crew member survived.',
                'description' => 'HMS Neptune served with the Home Fleet before joining the Mediterranean Fleet. While leading Force K to intercept an Axis convoy, she entered an Italian minefield off Tripoli. Multiple mine explosions disabled the cruiser, and she eventually sank with the loss of almost her entire crew. Only one sailor survived, making it one of the Royal Navy\'s greatest single-ship tragedies of the war.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // ARETHUSA CLASS LIGHT CRUISERS (ID: 113)
        // ============================================

        // 29. HMS Penelope
        Ship::updateOrCreate(
            ['name' => 'HMS Penelope'],
            [
                'class_id' => 113,
                'launch_date' => '1935-10-15',
                'commission_date' => '1936-11-13',
                'displacement' => 5220,
                'length' => 154.3,
                'beam' => 15.5,
                'draft' => 5.0,
                'max_speed' => 32.3,
                'crew' => 580,
                'fate' => 'Torpedoed and sunk by German submarine U-410 on 18 February 1944 near Naples.',
                'description' => 'HMS Penelope became famous for her service with Force K in the Mediterranean, where she repeatedly attacked Axis convoys supplying North Africa. After surviving heavy bombing during the Siege of Malta, her hull was riddled with shrapnel holes, earning her the famous nickname "HMS Pepperpot." She later supported the Allied invasion of Italy before being sunk by U-410.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 30. HMS Aurora
        Ship::updateOrCreate(
            ['name' => 'HMS Aurora'],
            [
                'class_id' => 113,
                'launch_date' => '1936-08-20',
                'commission_date' => '1937-11-12',
                'displacement' => 5220,
                'length' => 154.3,
                'beam' => 15.5,
                'draft' => 5.0,
                'max_speed' => 32.3,
                'crew' => 580,
                'fate' => 'Survived WWII; transferred to the Chinese Navy in 1948 as Chung King.',
                'description' => 'HMS Aurora served with the Home Fleet before joining the Mediterranean, where she became the flagship of Force K. She played a major role in disrupting Axis supply convoys to North Africa and participated in the Malta convoy battles, the invasions of Sicily and Italy, and later supported Allied operations in the Aegean. After the war she was transferred to China, where she served under several names.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 31. HMS Galatea
        Ship::updateOrCreate(
            ['name' => 'HMS Galatea'],
            [
                'class_id' => 113,
                'launch_date' => '1934-08-09',
                'commission_date' => '1935-08-14',
                'displacement' => 5220,
                'length' => 154.3,
                'beam' => 15.5,
                'draft' => 5.0,
                'max_speed' => 32.3,
                'crew' => 580,
                'fate' => 'Torpedoed and sunk by German submarine U-557 off Alexandria on 15 December 1941.',
                'description' => 'HMS Galatea served with the Mediterranean Fleet throughout much of WWII. As part of Force K, she intercepted and destroyed Axis convoys supplying North Africa. After returning to Alexandria from an operation, she was torpedoed by the German submarine U-557 and sank with heavy loss of life. Her service demonstrated the vital role of British light cruisers in disrupting Axis supply lines in the Mediterranean.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 32. HMS Arethusa
        Ship::updateOrCreate(
            ['name' => 'HMS Arethusa'],
            [
                'class_id' => 113,
                'launch_date' => '1934-03-06',
                'commission_date' => '1935-05-23',
                'displacement' => 5220,
                'length' => 154.3,
                'beam' => 15.5,
                'draft' => 5.0,
                'max_speed' => 32.3,
                'crew' => 580,
                'fate' => 'Survived WWII; scrapped in 1950.',
                'description' => 'The lead ship of the Arethusa class, HMS Arethusa served extensively in the Mediterranean and Atlantic. She escorted Malta convoys, supported the Allied landings in North Africa and Sicily, and survived severe damage from German torpedo bombers in November 1942. After extensive repairs in the United States and Britain, she returned to service and continued supporting Allied operations until the end of the war.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // DIDO CLASS LIGHT CRUISERS (ID: 114)
        // ============================================

        // 33. HMS Charybdis
        Ship::updateOrCreate(
            ['name' => 'HMS Charybdis'],
            [
                'class_id' => 114,
                'launch_date' => '1940-09-17',
                'commission_date' => '1941-12-03',
                'displacement' => 5600,
                'length' => 156.0,
                'beam' => 15.4,
                'draft' => 4.3,
                'max_speed' => 32.25,
                'crew' => 530,
                'fate' => 'Sunk by German torpedo boats during Operation Tunnel in the English Channel on 23 October 1943.',
                'description' => 'HMS Charybdis served with the Home Fleet and participated in escorting Arctic convoys and covering carrier operations against Norway. In October 1943 she led an interception force against German blockade runners in the English Channel. During the night action, she was struck by torpedoes fired by German torpedo boats and sank rapidly, becoming one of the Royal Navy\'s largest losses in Channel operations.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 34. HMS Cleopatra
        Ship::updateOrCreate(
            ['name' => 'HMS Cleopatra'],
            [
                'class_id' => 114,
                'launch_date' => '1940-03-27',
                'commission_date' => '1941-12-05',
                'displacement' => 5600,
                'length' => 156.0,
                'beam' => 15.4,
                'draft' => 4.3,
                'max_speed' => 32.25,
                'crew' => 530,
                'fate' => 'Survived WWII; scrapped in 1958.',
                'description' => 'HMS Cleopatra became famous as the flagship of Admiral Sir Philip Vian during the Second Battle of Sirte in March 1942, where British escorts successfully defended a vital Malta convoy against a much stronger Italian fleet. She later served in the Mediterranean, supported the Allied invasion of Sicily, and survived severe torpedo damage before returning to service.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 35. HMS Dido
        Ship::updateOrCreate(
            ['name' => 'HMS Dido'],
            [
                'class_id' => 114,
                'launch_date' => '1939-07-18',
                'commission_date' => '1940-09-30',
                'displacement' => 5600,
                'length' => 156.0,
                'beam' => 15.4,
                'draft' => 4.3,
                'max_speed' => 32.25,
                'crew' => 530,
                'fate' => 'Survived WWII; scrapped in 1957.',
                'description' => 'The lead ship of the Dido class, HMS Dido was designed primarily as an anti-aircraft cruiser to protect the Royal Navy\'s fleets and aircraft carriers. She served extensively in the Mediterranean, escorting Malta convoys and supporting Allied operations in North Africa, Sicily, and Italy. Her powerful dual-purpose armament made her one of the Royal Navy\'s most effective anti-aircraft cruisers.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 36. HMS Sirius
        Ship::updateOrCreate(
            ['name' => 'HMS Sirius'],
            [
                'class_id' => 114,
                'launch_date' => '1940-09-18',
                'commission_date' => '1942-05-06',
                'displacement' => 5600,
                'length' => 156.0,
                'beam' => 15.4,
                'draft' => 4.3,
                'max_speed' => 32.25,
                'crew' => 530,
                'fate' => 'Survived WWII; scrapped in 1956.',
                'description' => 'HMS Sirius spent nearly her entire wartime career in the Mediterranean. She escorted Malta convoys, supported the Allied landings in North Africa (Operation Torch), Sicily (Operation Husky), and mainland Italy (Operation Avalanche), while also providing anti-aircraft protection and naval gunfire support. She emerged from the war as one of the Royal Navy\'s most experienced Dido-class cruisers.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 37. HMS Hermione
        Ship::updateOrCreate(
            ['name' => 'HMS Hermione'],
            [
                'class_id' => 114,
                'launch_date' => '1939-09-26',
                'commission_date' => '1941-06-03',
                'displacement' => 5600,
                'length' => 156.0,
                'beam' => 15.4,
                'draft' => 4.3,
                'max_speed' => 32.25,
                'crew' => 530,
                'fate' => 'Torpedoed and sunk by German submarine U-205 on 16 June 1942 south of Crete.',
                'description' => 'HMS Hermione became one of the Mediterranean Fleet\'s busiest anti-aircraft cruisers. She escorted numerous Malta convoys, protected aircraft carriers during operations against Italian forces, and supported the Battle of Cape Matapan and other Mediterranean operations. She earned the nickname "Busy Bee" because of her exceptionally active operational schedule before being sunk by U-205.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // BELLONA CLASS LIGHT CRUISERS (ID: 115)
        // ============================================

        // 38. HMS Scylla
        Ship::updateOrCreate(
            ['name' => 'HMS Scylla'],
            [
                'class_id' => 115,
                'launch_date' => '1942-04-30',
                'commission_date' => '1943-06-08',
                'displacement' => 5760,
                'length' => 156.0,
                'beam' => 15.4,
                'draft' => 4.3,
                'max_speed' => 32.25,
                'crew' => 530,
                'fate' => 'Badly damaged by a mine in June 1944; never fully repaired. Used as a target ship and scrapped in 1950.',
                'description' => 'HMS Scylla was one of the improved Dido-class (Bellona-class) anti-aircraft cruisers. She escorted Arctic convoys before participating in the Normandy landings (Operation Neptune), where she became one of the first Allied warships to bombard German coastal defenses on D-Day. Shortly afterward, she struck a mine in the English Channel, ending her operational career.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 39. HMS Bellona
        Ship::updateOrCreate(
            ['name' => 'HMS Bellona'],
            [
                'class_id' => 115,
                'launch_date' => '1942-09-29',
                'commission_date' => '1943-10-29',
                'displacement' => 5760,
                'length' => 156.0,
                'beam' => 15.4,
                'draft' => 4.3,
                'max_speed' => 32.25,
                'crew' => 530,
                'fate' => 'Transferred to the Royal New Zealand Navy in 1959 as HMNZS Bellona; scrapped in 1974.',
                'description' => 'Bellona was the lead ship of the improved Bellona subclass, optimized for anti-aircraft defense and fleet escort duties. During WWII she escorted Arctic convoys, supported the Normandy invasion, and later served with the British Pacific Fleet during the final operations against Japan.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 40. HMS Black Prince
        Ship::updateOrCreate(
            ['name' => 'HMS Black Prince'],
            [
                'class_id' => 115,
                'launch_date' => '1942-08-27',
                'commission_date' => '1943-11-17',
                'displacement' => 5760,
                'length' => 156.0,
                'beam' => 15.4,
                'draft' => 4.3,
                'max_speed' => 32.25,
                'crew' => 530,
                'fate' => 'Survived WWII; transferred to the Royal New Zealand Navy in 1962 as HMNZS Black Prince; scrapped in 1966.',
                'description' => 'HMS Black Prince served with the Home Fleet, escorting Arctic convoys to the Soviet Union before supporting the Normandy invasion. In 1945 she joined the British Pacific Fleet and participated in operations against Japan, including strikes on the Japanese home islands.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // EMERALD CLASS LIGHT CRUISERS (ID: 116)
        // ============================================

        // 41. HMS Enterprise
        Ship::updateOrCreate(
            ['name' => 'HMS Enterprise'],
            [
                'class_id' => 116,
                'launch_date' => '1919-12-23',
                'commission_date' => '1926-04-07',
                'displacement' => 7580,
                'length' => 173.7,
                'beam' => 16.8,
                'draft' => 5.8,
                'max_speed' => 33,
                'crew' => 700,
                'fate' => 'Survived WWII; scrapped in 1946.',
                'description' => 'Although built after World War I, HMS Enterprise remained an effective cruiser throughout WWII. She escorted Atlantic convoys, participated in the Bay of Biscay actions against German destroyers and blockade runners, and later provided naval gunfire support during the Normandy landings. She was notable for carrying an experimental twin 6-inch gun turret that influenced later British cruiser designs.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // C-CLASS LIGHT CRUISERS (ID: 117)
        // ============================================

        // 42. HMS Curacoa
        Ship::updateOrCreate(
            ['name' => 'HMS Curacoa'],
            [
                'class_id' => 117,
                'launch_date' => '1917-05-05',
                'commission_date' => '1918-02-18',
                'displacement' => 4290,
                'length' => 137.2,
                'beam' => 13.3,
                'draft' => 4.4,
                'max_speed' => 29,
                'crew' => 460,
                'fate' => 'Accidentally cut in half and sunk by the troopship RMS Queen Mary on 2 October 1942 while escorting her in the North Atlantic.',
                'description' => 'HMS Curacoa spent much of WWII escorting convoys and troopships. During one escort mission, the fast-moving RMS Queen Mary accidentally collided with Curacoa while following a zigzag anti-submarine course. The cruiser split in two and sank rapidly with heavy loss of life. It remains one of the Royal Navy\'s most tragic non-combat accidents.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 43. HMS Curlew
        Ship::updateOrCreate(
            ['name' => 'HMS Curlew'],
            [
                'class_id' => 117,
                'launch_date' => '1917-07-05',
                'commission_date' => '1917-12-14',
                'displacement' => 4290,
                'length' => 137.2,
                'beam' => 13.3,
                'draft' => 4.4,
                'max_speed' => 29,
                'crew' => 460,
                'fate' => 'Sunk by German dive bombers near Narvik, Norway, on 26 May 1940.',
                'description' => 'After conversion into an anti-aircraft cruiser before WWII, HMS Curlew took part in the Norwegian Campaign, protecting Allied naval forces from Luftwaffe attacks. She was sunk by German Junkers Ju 87 Stuka dive bombers during operations near Narvik, highlighting the increasing threat posed by air power to surface warships.',
                'is_aircraft_carrier' => false,
            ]
        );

    
// ============================================
        // ARMED MERCHANT CRUISER
        // ============================================

        // 1. HMS Cheshire
        Ship::updateOrCreate(
            ['name' => 'HMS Cheshire'],
            [
                'class_id' => 118,
                'launch_date' => '1922-12-09',
                'commission_date' => '1939-12-12',
                'displacement' => 20500,
                'length' => 182.9,
                'beam' => 22.3,
                'draft' => 10.0,
                'max_speed' => 15.5,
                'crew' => 700,
                'fate' => 'Returned to civilian service in 1948; scrapped in 1958.',
                'description' => 'Originally built as the passenger liner MV Cheshire, she was requisitioned by the Royal Navy at the beginning of WWII and converted into an Armed Merchant Cruiser. HMS Cheshire escorted Atlantic convoys, hunted German commerce raiders, and later served as a troopship carrying Allied forces between theaters. Although lightly armed compared with true cruisers, she played an important role in protecting Britain\'s vital sea communications.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // MONITORS
        // ============================================

        // 2. HMS Roberts - Roberts-class (ID: 119)
        Ship::updateOrCreate(
            ['name' => 'HMS Roberts'],
            [
                'class_id' => 119,
                'launch_date' => '1941-02-01',
                'commission_date' => '1941-10-27',
                'displacement' => 8100,
                'length' => 113.8,
                'beam' => 27.5,
                'draft' => 3.4,
                'max_speed' => 12.5,
                'crew' => 560,
                'fate' => 'Survived WWII; scrapped in 1965.',
                'description' => 'Built specifically for naval gunfire support, HMS Roberts mounted two powerful 15-inch guns taken from older battleships. She bombarded enemy coastal defenses during the invasions of Sicily, Salerno, Normandy (D-Day), Walcheren, and other amphibious operations. Roberts became one of the Royal Navy\'s most effective shore bombardment vessels of the war.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 3. HMS Abercrombie - Roberts-class (ID: 119)
        Ship::updateOrCreate(
            ['name' => 'HMS Abercrombie'],
            [
                'class_id' => 119,
                'launch_date' => '1942-03-31',
                'commission_date' => '1943-05-05',
                'displacement' => 8100,
                'length' => 113.8,
                'beam' => 27.5,
                'draft' => 3.4,
                'max_speed' => 12.5,
                'crew' => 560,
                'fate' => 'Survived WWII; scrapped in 1954.',
                'description' => 'The second Roberts-class monitor, HMS Abercrombie carried two 15-inch guns intended for heavy naval bombardment. She supported Allied operations in the Mediterranean, including the invasions of Italy and Southern France, delivering accurate heavy gunfire against coastal defenses. Although damaged by mines during the war, she survived and continued serving until after the conflict.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 4. HMS Erebus - Erebus-class (ID: 120)
        Ship::updateOrCreate(
            ['name' => 'HMS Erebus'],
            [
                'class_id' => 120,
                'launch_date' => '1916-06-11',
                'commission_date' => '1916-09-19',
                'displacement' => 8000,
                'length' => 123.4,
                'beam' => 27.4,
                'draft' => 3.6,
                'max_speed' => 12,
                'crew' => 550,
                'fate' => 'Survived WWII; scrapped in 1946.',
                'description' => 'A veteran of both World Wars, HMS Erebus specialized in coastal bombardment using her twin 15-inch guns. During WWII she supported operations in North Africa, Sicily, Italy, and the Normandy landings, providing devastating fire support against fortified enemy positions. She was one of the longest-serving capital ships in Royal Navy history.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 5. HMS Terror - Erebus-class (ID: 120)
        Ship::updateOrCreate(
            ['name' => 'HMS Terror'],
            [
                'class_id' => 120,
                'launch_date' => '1916-05-18',
                'commission_date' => '1916-08-22',
                'displacement' => 8000,
                'length' => 123.4,
                'beam' => 27.4,
                'draft' => 3.6,
                'max_speed' => 12,
                'crew' => 550,
                'fate' => 'Scuttled on 23 February 1941 after suffering severe damage from German air attacks off Libya.',
                'description' => 'Like her sister ship Erebus, HMS Terror was designed for shore bombardment with twin 15-inch guns. During WWII she supported British operations in the Mediterranean, bombarding Italian positions in North Africa. After repeated German air attacks left her crippled, she was abandoned and deliberately sunk to prevent capture.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // SUBMARINES
        // ============================================

        // 6. HMS Upholder (P37) - U-class (ID: 121)
        Ship::updateOrCreate(
            ['name' => 'HMS Upholder (P37)'],
            [
                'class_id' => 121,
                'launch_date' => '1940-07-08',
                'commission_date' => '1940-10-31',
                'displacement' => 540,
                'length' => 58.2,
                'beam' => 4.9,
                'draft' => 4.6,
                'max_speed' => 11.25,
                'crew' => 31,
                'fate' => 'Lost with all hands on 14 April 1942, probably sunk by Italian torpedo boat Pegaso in the Mediterranean.',
                'description' => 'Commanded by Lieutenant Commander Malcolm Wanklyn VC, HMS Upholder became the Royal Navy\'s most successful submarine of WWII. Operating almost exclusively in the Mediterranean, she sank numerous Axis merchant ships, troop transports, and warships, seriously disrupting Axis supply lines to North Africa. Her remarkable combat record earned her the nickname "Upholder of the Mediterranean."',
                'is_aircraft_carrier' => false,
            ]
        );

        // 7. HMS Trenchant (P331) - T-class (ID: 122)
        Ship::updateOrCreate(
            ['name' => 'HMS Trenchant (P331)'],
            [
                'class_id' => 122,
                'launch_date' => '1943-09-24',
                'commission_date' => '1944-02-22',
                'displacement' => 1290,
                'length' => 84.3,
                'beam' => 8.1,
                'draft' => 4.6,
                'max_speed' => 15.5,
                'crew' => 61,
                'fate' => 'Survived WWII; decommissioned in 1963 and scrapped in 1971.',
                'description' => 'HMS Trenchant served in the Far East with the British Pacific Fleet. She became famous for sinking the Japanese heavy cruiser Ashigara on 8 June 1945, one of the largest warships destroyed by a British submarine during the war. She also sank the Japanese submarine I-34 and numerous merchant vessels, making her one of Britain\'s most successful Pacific submarines.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 8. HMS Porpoise (N14) - Porpoise-class (ID: 123)
        Ship::updateOrCreate(
            ['name' => 'HMS Porpoise (N14)'],
            [
                'class_id' => 123,
                'launch_date' => '1932-06-10',
                'commission_date' => '1933-11-02',
                'displacement' => 1475,
                'length' => 90.1,
                'beam' => 7.7,
                'draft' => 5.2,
                'max_speed' => 17,
                'crew' => 59,
                'fate' => 'Survived WWII; scrapped in 1948.',
                'description' => 'HMS Porpoise was the lead ship of her class and served extensively in the Far East. She specialized in laying naval minefields that damaged or destroyed numerous Japanese vessels. Besides offensive patrols, she carried out covert operations, transported commandos and supplies, and supported Allied campaigns against Japanese shipping throughout Southeast Asia.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 9. HMS Seraph (P219) - S-class (ID: 124)
        Ship::updateOrCreate(
            ['name' => 'HMS Seraph (P219)'],
            [
                'class_id' => 124,
                'launch_date' => '1941-10-25',
                'commission_date' => '1942-07-12',
                'displacement' => 842,
                'length' => 66.1,
                'beam' => 7.2,
                'draft' => 3.4,
                'max_speed' => 15,
                'crew' => 48,
                'fate' => 'Survived WWII; scrapped in 1962.',
                'description' => 'HMS Seraph became one of the most famous submarines of the war because of her involvement in several highly secret operations. She secretly landed Allied agents in North Africa, transported General Henri Giraud before Operation Torch, and played the central role in Operation Mincemeat, delivering the body carrying false invasion plans that successfully deceived German intelligence. She also conducted numerous combat patrols in the Mediterranean.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 10. HMS Perseus (N36) - Parthian-class (ID: 125)
        Ship::updateOrCreate(
            ['name' => 'HMS Perseus (N36)'],
            [
                'class_id' => 125,
                'launch_date' => '1929-05-19',
                'commission_date' => '1930-01-08',
                'displacement' => 1475,
                'length' => 87.2,
                'beam' => 8.1,
                'draft' => 4.4,
                'max_speed' => 17,
                'crew' => 53,
                'fate' => 'Struck an Italian mine off Cephalonia, Greece, on 6 December 1941 and sank. Only one crew member, John Capes, survived by escaping through the submarine\'s escape trunk.',
                'description' => 'HMS Perseus served in the Mediterranean during the early years of WWII, conducting patrols against Axis shipping and naval forces. She was lost after hitting an Italian mine near the Greek island of Cephalonia. The dramatic escape of stoker John Capes, who reached the surface using a Davis Submerged Escape Apparatus and swam ashore, became one of the most extraordinary submarine survival stories of the Second World War.',
                'is_aircraft_carrier' => false,
            ]
        );
// ============================================
        // TRIBAL CLASS DESTROYERS (ID: 126)
        // ============================================

        // 1. HMS Cossack (F03)
        Ship::updateOrCreate(
            ['name' => 'HMS Cossack (F03)'],
            [
                'class_id' => 126,
                'launch_date' => '1937-06-08',
                'commission_date' => '1938-06-10',
                'displacement' => 1891,
                'length' => 115.1,
                'beam' => 11.1,
                'draft' => 3.4,
                'max_speed' => 36,
                'crew' => 190,
                'fate' => 'Torpedoed by German submarine U-563 on 23 October 1941; sank under tow on 27 October 1941.',
                'description' => 'HMS Cossack became one of Britain\'s most famous destroyers after the Altmark Incident in February 1940, when her boarding party rescued 299 British prisoners from the German tanker Altmark in Norwegian waters. She later served in the Norwegian Campaign, escorted Arctic convoys, and participated in the hunt for Bismarck. Cossack became a symbol of Royal Navy daring during the early years of the war.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 2. HMS Afridi (F07)
        Ship::updateOrCreate(
            ['name' => 'HMS Afridi (F07)'],
            [
                'class_id' => 126,
                'launch_date' => '1937-06-08',
                'commission_date' => '1938-05-03',
                'displacement' => 1891,
                'length' => 115.1,
                'beam' => 11.1,
                'draft' => 3.4,
                'max_speed' => 36,
                'crew' => 190,
                'fate' => 'Sunk by German Junkers Ju 87 dive bombers on 3 May 1940 during the Norwegian Campaign.',
                'description' => 'As leader of the Tribal-class destroyers, HMS Afridi participated in the Norwegian Campaign, providing gunfire support and evacuating Allied troops from Norway. While carrying hundreds of evacuated soldiers, she was attacked by German Stuka dive bombers and sank after sustaining multiple bomb hits.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // K-CLASS DESTROYERS (ID: 127)
        // ============================================

        // 3. HMS Kelly (F01)
        Ship::updateOrCreate(
            ['name' => 'HMS Kelly (F01)'],
            [
                'class_id' => 127,
                'launch_date' => '1938-10-25',
                'commission_date' => '1939-08-23',
                'displacement' => 1690,
                'length' => 108.7,
                'beam' => 10.9,
                'draft' => 3.8,
                'max_speed' => 36,
                'crew' => 183,
                'fate' => 'Sunk by German Ju 87 Stuka dive bombers off Crete on 23 May 1941.',
                'description' => 'Commanded by Captain Lord Louis Mountbatten, HMS Kelly became one of the Royal Navy\'s most famous destroyers. Despite suffering repeated torpedo and mine damage, she returned to service several times before being sunk during the Battle of Crete. Her wartime exploits inspired the famous 1942 film In Which We Serve.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // J-CLASS DESTROYERS (ID: 128)
        // ============================================

        // 4. HMS Jervis (F00)
        Ship::updateOrCreate(
            ['name' => 'HMS Jervis (F00)'],
            [
                'class_id' => 128,
                'launch_date' => '1938-09-09',
                'commission_date' => '1939-05-08',
                'displacement' => 1690,
                'length' => 108.7,
                'beam' => 10.9,
                'draft' => 3.8,
                'max_speed' => 36,
                'crew' => 183,
                'fate' => 'Survived WWII; scrapped in 1956.',
                'description' => 'HMS Jervis served throughout the Mediterranean campaign, taking part in the Battles of Cape Matapan, Crete, Sirte, Sicily, Salerno, Anzio, and numerous convoy operations. She earned 13 battle honours, the highest awarded to any British destroyer during WWII, and remarkably did not lose a single crew member to enemy action throughout the war, making her one of the Royal Navy\'s most distinguished destroyers.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 5. HMS Janus (F53)
        Ship::updateOrCreate(
            ['name' => 'HMS Janus (F53)'],
            [
                'class_id' => 128,
                'launch_date' => '1938-10-11',
                'commission_date' => '1939-08-05',
                'displacement' => 1690,
                'length' => 108.7,
                'beam' => 10.9,
                'draft' => 3.8,
                'max_speed' => 36,
                'crew' => 183,
                'fate' => 'Sunk by a German guided bomb off Anzio on 23 January 1944.',
                'description' => 'HMS Janus served extensively in the Mediterranean, participating in the Battles of Cape Matapan and Crete, escorting Malta convoys, and supporting the invasions of Sicily and Italy. She was lost during the Anzio landings after being struck by a German air attack, with heavy loss of life.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 6. HMS Jersey (F72)
        Ship::updateOrCreate(
            ['name' => 'HMS Jersey (F72)'],
            [
                'class_id' => 128,
                'launch_date' => '1938-09-26',
                'commission_date' => '1939-09-28',
                'displacement' => 1690,
                'length' => 108.7,
                'beam' => 10.9,
                'draft' => 3.8,
                'max_speed' => 36,
                'crew' => 183,
                'fate' => 'Sunk after striking an Italian mine in Grand Harbour, Malta, on 2 May 1941.',
                'description' => 'HMS Jersey served with the Mediterranean Fleet, escorting convoys and protecting Malta during some of the fiercest fighting in the Mediterranean. She was sunk by a mine while entering Grand Harbour, becoming one of the most notable destroyer losses during the Siege of Malta.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 7. HMS Javelin (F61)
        Ship::updateOrCreate(
            ['name' => 'HMS Javelin (F61)'],
            [
                'class_id' => 128,
                'launch_date' => '1938-12-21',
                'commission_date' => '1939-05-25',
                'displacement' => 1690,
                'length' => 108.7,
                'beam' => 10.9,
                'draft' => 3.8,
                'max_speed' => 36,
                'crew' => 183,
                'fate' => 'Survived WWII; scrapped in 1949.',
                'description' => 'HMS Javelin served in the North Sea, Atlantic, Mediterranean, and Normandy operations. In November 1940 she survived severe torpedo damage that blew off both her bow and stern, yet remained afloat and was successfully repaired. She later participated in Arctic convoy escorts, Mediterranean operations, and the Normandy invasion before surviving the war.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // E-CLASS DESTROYERS (ID: 129)
        // ============================================

        // 8. HMS Electra (H27)
        Ship::updateOrCreate(
            ['name' => 'HMS Electra (H27)'],
            [
                'class_id' => 129,
                'launch_date' => '1934-02-18',
                'commission_date' => '1934-11-30',
                'displacement' => 1405,
                'length' => 100.3,
                'beam' => 10.1,
                'draft' => 3.8,
                'max_speed' => 35.5,
                'crew' => 145,
                'fate' => 'Sunk during the Battle of the Java Sea on 27 February 1942 by Japanese cruisers and destroyers.',
                'description' => 'HMS Electra first gained distinction by rescuing survivors from HMS Hood after her destruction in May 1941. She later joined the Allied ABDA Fleet in the Pacific and fought courageously during the Battle of the Java Sea. Severely damaged while covering the withdrawal of Allied cruisers, she was overwhelmed by superior Japanese forces and sank after a fierce fight.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 9. HMS Express (H61)
        Ship::updateOrCreate(
            ['name' => 'HMS Express (H61)'],
            [
                'class_id' => 129,
                'launch_date' => '1934-05-29',
                'commission_date' => '1934-11-02',
                'displacement' => 1405,
                'length' => 100.3,
                'beam' => 10.1,
                'draft' => 3.8,
                'max_speed' => 35.5,
                'crew' => 145,
                'fate' => 'Survived WWII; transferred to the Royal Canadian Navy in 1943 as HMCS Gatineau; scrapped in 1948.',
                'description' => 'HMS Express served throughout the war in the North Sea, Atlantic, Arctic, and Normandy operations. Converted into a fast minelayer early in the war, she laid defensive minefields and escorted numerous convoys. After transfer to Canada, she continued convoy escort duties until the end of the conflict.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // G-CLASS DESTROYERS (ID: 130)
        // ============================================

        // 10. HMS Glowworm (H92)
        Ship::updateOrCreate(
            ['name' => 'HMS Glowworm (H92)'],
            [
                'class_id' => 130,
                'launch_date' => '1935-07-22',
                'commission_date' => '1936-01-22',
                'displacement' => 1350,
                'length' => 98.5,
                'beam' => 10.1,
                'draft' => 3.8,
                'max_speed' => 36,
                'crew' => 146,
                'fate' => 'Sunk on 8 April 1940 after engaging the German heavy cruiser Admiral Hipper during the Norwegian Campaign.',
                'description' => 'Separated from her task force while searching for a man overboard, HMS Glowworm unexpectedly encountered the much larger German heavy cruiser Admiral Hipper. After a determined gun battle, Commander Gerard Roope deliberately rammed the enemy cruiser before Glowworm was destroyed. Roope was posthumously awarded the Victoria Cross, making Glowworm\'s action one of the most celebrated destroyer engagements of the war.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // A-CLASS DESTROYERS (ID: 131)
        // ============================================

        // 11. HMS Ardent (H41)
        Ship::updateOrCreate(
            ['name' => 'HMS Ardent (H41)'],
            [
                'class_id' => 131,
                'launch_date' => '1929-06-22',
                'commission_date' => '1930-04-14',
                'displacement' => 1350,
                'length' => 98.5,
                'beam' => 9.8,
                'draft' => 3.7,
                'max_speed' => 35,
                'crew' => 138,
                'fate' => 'Sunk on 8 June 1940 while defending HMS Glorious against the German battlecruisers Scharnhorst and Gneisenau.',
                'description' => 'During the evacuation from Norway, HMS Ardent courageously attacked the German battlecruisers threatening the aircraft carrier HMS Glorious. Despite being hopelessly outgunned, she launched torpedo attacks and fought until overwhelmed by heavy gunfire, becoming a symbol of Royal Navy determination.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 12. HMS Acasta (H09)
        Ship::updateOrCreate(
            ['name' => 'HMS Acasta (H09)'],
            [
                'class_id' => 131,
                'launch_date' => '1929-08-08',
                'commission_date' => '1930-02-11',
                'displacement' => 1350,
                'length' => 98.5,
                'beam' => 9.8,
                'draft' => 3.7,
                'max_speed' => 35,
                'crew' => 138,
                'fate' => 'Sunk on 8 June 1940 during the defense of HMS Glorious.',
                'description' => 'While escorting HMS Glorious, HMS Acasta launched a determined torpedo attack against the German battlecruisers Scharnhorst and Gneisenau. One of her torpedoes struck Scharnhorst, causing serious damage and forcing the German ship to return to port for lengthy repairs. Acasta was then destroyed after an intense gun battle, earning lasting recognition for her bravery.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 13. HMS Amazon (D39)
        Ship::updateOrCreate(
            ['name' => 'HMS Amazon (D39)'],
            [
                'class_id' => 131,
                'launch_date' => '1929-01-30',
                'commission_date' => '1929-11-05',
                'displacement' => 1350,
                'length' => 98.5,
                'beam' => 9.8,
                'draft' => 3.7,
                'max_speed' => 35,
                'crew' => 138,
                'fate' => 'Survived WWII; scrapped in 1949.',
                'description' => 'One of the first destroyers of the Royal Navy\'s interwar A-class, HMS Amazon served throughout WWII escorting Atlantic convoys and protecting merchant shipping against German U-boats. She also operated in the Mediterranean and later participated in the Normandy campaign. Although she did not gain fame from a single major battle, her long and reliable service made her a valuable convoy escort throughout the war.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // O-CLASS DESTROYERS (ID: 132)
        // ============================================

        // 14. HMS Onslow (G17)
        Ship::updateOrCreate(
            ['name' => 'HMS Onslow (G17)'],
            [
                'class_id' => 132,
                'launch_date' => '1941-03-31',
                'commission_date' => '1941-10-08',
                'displacement' => 1540,
                'length' => 105.2,
                'beam' => 10.9,
                'draft' => 3.8,
                'max_speed' => 37,
                'crew' => 176,
                'fate' => 'Survived WWII; transferred to Pakistan in 1949 as PNS Tippu Sultan; scrapped in 1980.',
                'description' => 'HMS Onslow became one of the Royal Navy\'s most distinguished destroyer leaders during the Arctic convoy campaign. As flagship of the escort for Convoy JW 51B, she played a central role in the Battle of the Barents Sea on 31 December 1942. Despite suffering heavy damage and severe casualties, Onslow\'s aggressive leadership helped force a superior German surface force—including the heavy cruiser Admiral Hipper—to withdraw, ensuring the convoy reached the Soviet Union safely. She later supported the Normandy landings and served until the end of the war.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // B-CLASS DESTROYERS (ID: 133)
        // ============================================

        // 15. HMS Beagle (H30)
        Ship::updateOrCreate(
            ['name' => 'HMS Beagle (H30)'],
            [
                'class_id' => 133,
                'launch_date' => '1929-09-28',
                'commission_date' => '1931-04-09',
                'displacement' => 1360,
                'length' => 98.5,
                'beam' => 9.8,
                'draft' => 3.7,
                'max_speed' => 35,
                'crew' => 138,
                'fate' => 'Survived WWII; scrapped in 1946.',
                'description' => 'HMS Beagle spent most of the war escorting convoys in the Atlantic, Arctic, and Mediterranean. She protected merchant shipping from submarines and aircraft, participated in Operation Torch, and later supported Allied operations in Europe. Like many escort destroyers, her greatest contribution came through the countless convoys she safely escorted rather than through a single famous engagement.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 16. HMS Bulldog (H91)
        Ship::updateOrCreate(
            ['name' => 'HMS Bulldog (H91)'],
            [
                'class_id' => 133,
                'launch_date' => '1929-12-06',
                'commission_date' => '1931-04-08',
                'displacement' => 1360,
                'length' => 98.5,
                'beam' => 9.8,
                'draft' => 3.7,
                'max_speed' => 35,
                'crew' => 138,
                'fate' => 'Survived WWII; sold for scrap in 1946.',
                'description' => 'HMS Bulldog earned lasting fame during the Battle of the Atlantic. On 9 May 1941, after forcing the German submarine U-110 to surface, a boarding party from Bulldog captured the submarine along with an Enigma cipher machine and valuable codebooks before it sank. This intelligence breakthrough significantly aided Allied codebreakers at Bletchley Park and played an important role in the Battle of the Atlantic. Bulldog continued escort duties for the remainder of the war.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // H-CLASS DESTROYERS (ID: 134)
        // ============================================

        // 17. HMS Hunter (H35)
        Ship::updateOrCreate(
            ['name' => 'HMS Hunter (H35)'],
            [
                'class_id' => 134,
                'launch_date' => '1936-02-25',
                'commission_date' => '1936-09-20',
                'displacement' => 1350,
                'length' => 98.5,
                'beam' => 10.1,
                'draft' => 3.8,
                'max_speed' => 36,
                'crew' => 146,
                'fate' => 'Sunk on 10 April 1940 during the First Battle of Narvik after being rammed during the engagement.',
                'description' => 'HMS Hunter took part in the Norwegian Campaign and fought in the First Battle of Narvik against German destroyers. During the fierce close-range battle she was badly damaged by enemy gunfire and accidentally rammed by HMS Hotspur, leaving her disabled. She quickly sank under continued German fire, becoming one of the Royal Navy\'s first destroyer losses during the Norwegian Campaign.',
                'is_aircraft_carrier' => false,
            ]
        );

        $this->command->info('✅ British ships processed successfully!');
       
    }
}