<?php

namespace Database\Seeders;

use App\Models\Ship;
use App\Models\ShipClass;
use App\Models\ShipImage;
use Illuminate\Database\Seeder;

class JapaneseShipsSeeder extends Seeder
{
    public function run(): void
    {
        // ============================================
        // KONGŌ CLASS BATTLESHIPS (Class ID: 32)
        // ============================================

        // 1. Kongō
        Ship::updateOrCreate(
            ['name' => 'Kongō'],
            [
                'class_id' => 32,
                'launch_date' => '1912-05-18',
                'commission_date' => '1913-08-16',
                'displacement' => 36600,
                'length' => 222,
                'beam' => 31,
                'draft' => 9.7,
                'max_speed' => 30,
                'crew' => 1400,
                'fate' => 'Sunk by submarine USS Sealion on 21 November 1944 in the Formosa Strait',
                'description' => 'The lead ship of her class, she was the last Japanese capital ship built outside Japan, constructed by Vickers in Britain. She was reclassified as a battleship after a major reconstruction in the 1930s.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 2. Hiei
        Ship::updateOrCreate(
            ['name' => 'Hiei'],
            [
                'class_id' => 32,
                'launch_date' => '1912-11-21',
                'commission_date' => '1914-08-04',
                'displacement' => 36600,
                'length' => 222,
                'beam' => 31,
                'draft' => 9.7,
                'max_speed' => 30,
                'crew' => 1400,
                'fate' => 'Scuttled following the Naval Battle of Guadalcanal on 13 November 1942',
                'description' => 'The second Kongō-class battlecruiser, built at the Yokosuka Naval Arsenal. She was heavily engaged in the Guadalcanal campaign.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 3. Kirishima
        Ship::updateOrCreate(
            ['name' => 'Kirishima'],
            [
                'class_id' => 32,
                'launch_date' => '1913-12-01',
                'commission_date' => '1915-04-19',
                'displacement' => 36600,
                'length' => 222,
                'beam' => 31,
                'draft' => 9.7,
                'max_speed' => 30,
                'crew' => 1400,
                'fate' => 'Sunk during the Naval Battle of Guadalcanal on 15 November 1942',
                'description' => 'The third Kongō-class battlecruiser, built by Mitsubishi in Nagasaki. She was sunk by USS Washington in a night engagement.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 4. Haruna
        Ship::updateOrCreate(
            ['name' => 'Haruna'],
            [
                'class_id' => 32,
                'launch_date' => '1913-12-14',
                'commission_date' => '1915-04-19',
                'displacement' => 36600,
                'length' => 222,
                'beam' => 31,
                'draft' => 9.7,
                'max_speed' => 30,
                'crew' => 1400,
                'fate' => 'Sunk at her moorings by US aircraft on 28 July 1945; raised and scrapped in 1946',
                'description' => 'The fourth and final Kongō-class ship, built by Kawasaki Shipyards in Kobe. She survived the war but was heavily damaged by air attacks.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // SHŌKAKU CLASS CARRIERS (Class ID: 4)
        // ============================================

        // 5. Zuikaku
        Ship::updateOrCreate(
            ['name' => 'Zuikaku'],
            [
                'class_id' => 4,
                'launch_date' => '1939-11-27',
                'commission_date' => '1941-09-25',
                'displacement' => 25675,
                'length' => 257.5,
                'beam' => 26,
                'draft' => 8.8,
                'max_speed' => 34.2,
                'crew' => 1660,
                'fate' => 'Sunk on 25 October 1944 during the Battle of Leyte Gulf by American carrier aircraft',
                'description' => 'The second of the Shōkaku-class carriers, she participated in the attack on Pearl Harbor, the Indian Ocean Raid, and the Battle of the Coral Sea. She was the last of the Pearl Harbor attack carriers to be sunk.',
                'is_aircraft_carrier' => true,
            ]
        );

        // ============================================
        // TAKAO CLASS CRUISERS (Class ID: 9)
        // ============================================

        // 6. Takao
        Ship::updateOrCreate(
            ['name' => 'Takao'],
            [
                'class_id' => 9,
                'launch_date' => '1930-05-12',
                'commission_date' => '1932-05-31',
                'displacement' => 9850,
                'length' => 203.8,
                'beam' => 20.4,
                'draft' => 6.3,
                'max_speed' => 35.5,
                'crew' => 773,
                'fate' => 'Scuttled as target ship by HMS Newfoundland on 29 October 1946',
                'description' => 'Takao was the lead ship of her class of four heavy cruisers, the largest cruisers in the Japanese fleet. She participated in the invasion of the Philippines, the Battle of the Java Sea, the Aleutian campaign, and the Battle of Leyte Gulf.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 7. Atago
        Ship::updateOrCreate(
            ['name' => 'Atago'],
            [
                'class_id' => 9,
                'launch_date' => '1930-06-16',
                'commission_date' => '1932-03-30',
                'displacement' => 9850,
                'length' => 203.76,
                'beam' => 20.73,
                'draft' => 6.32,
                'max_speed' => 35.5,
                'crew' => 773,
                'fate' => 'Torpedoed and sunk by USS Darter on 23 October 1944 at the Battle of the Palawan Passage',
                'description' => 'One of four Takao-class heavy cruisers. She served as a flagship for numerous operations, including the invasions of Malaya and the Philippines, the Battle of the Java Sea, the Battle of Midway, and the Second Naval Battle of Guadalcanal.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 8. Maya
        Ship::updateOrCreate(
            ['name' => 'Maya'],
            [
                'class_id' => 9,
                'launch_date' => '1930-11-08',
                'commission_date' => '1932-06-20',
                'displacement' => 9850,
                'length' => 203.76,
                'beam' => 20.4,
                'draft' => 6.32,
                'max_speed' => 35.5,
                'crew' => 996,
                'fate' => 'Torpedoed and sunk by USS Dace on 23 October 1944 during the Battle of the Palawan Passage',
                'description' => 'One of four Takao-class heavy cruisers. She supported the invasion of the Philippines and the Dutch East Indies, and participated in the Battle of the Eastern Solomons. She underwent a major anti-aircraft refit in 1944.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 9. Chōkai
        Ship::updateOrCreate(
            ['name' => 'Chōkai'],
            [
                'class_id' => 9,
                'launch_date' => '1931-04-05',
                'commission_date' => '1932-06-01',
                'displacement' => 9850,
                'length' => 203.67,
                'beam' => 20.42,
                'draft' => 6.32,
                'max_speed' => 35.5,
                'crew' => 773,
                'fate' => 'Scuttled on 25 October 1944 after the Battle off Samar (Leyte Gulf)',
                'description' => 'The fourth and final Takao-class heavy cruiser. She supported the invasion of Malaya and the Dutch East Indies, participated in the Indian Ocean Raid, and led the Japanese victory at the Battle of Savo Island in August 1942.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // AKIZUKI CLASS DESTROYERS (Class ID: 33)
        // ============================================

        // 10. Hatsuzuki
        Ship::updateOrCreate(
            ['name' => 'Hatsuzuki'],
            [
                'class_id' => 33,
                'launch_date' => '1942-04-03',
                'commission_date' => '1942-12-29',
                'displacement' => 2700,
                'length' => 134.2,
                'beam' => 11.6,
                'draft' => 4.15,
                'max_speed' => 33,
                'crew' => 263,
                'fate' => 'Sunk on 25 October 1944 during the Battle off Cape Engaño',
                'description' => 'An Akizuki-class destroyer originally designed as an anti-aircraft escort. She single-handedly engaged four U.S. cruisers and nine destroyers for two hours to cover the escape of survivors from Zuikaku, Zuihō, and Chitose.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 11. Wakatsuki
        Ship::updateOrCreate(
            ['name' => 'Wakatsuki'],
            [
                'class_id' => 33,
                'launch_date' => '1942-11-24',
                'commission_date' => '1943-05-31',
                'displacement' => 2700,
                'length' => 134.2,
                'beam' => 11.6,
                'draft' => 4.15,
                'max_speed' => 33,
                'crew' => 263,
                'fate' => 'Sunk by US aircraft in Ormoc Bay on 11 November 1944',
                'description' => 'An Akizuki-class destroyer. She participated in rescuing sailors from Shōkaku and Zuikaku. Her wreck was discovered in December 2017 by Paul Allen\'s research vessel RV Petrel.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 12. Niizuki
        Ship::updateOrCreate(
            ['name' => 'Niizuki'],
            [
                'class_id' => 33,
                'launch_date' => '1942-11-29',
                'commission_date' => '1943-03-31',
                'displacement' => 2700,
                'length' => 134.2,
                'beam' => 11.6,
                'draft' => 4.15,
                'max_speed' => 33,
                'crew' => 263,
                'fate' => 'Sunk by U.S. cruisers and destroyers on 6 July 1943 in the Battle of Kula Gulf',
                'description' => 'An Akizuki-class destroyer, designed as an anti-aircraft escort. She served primarily in the Solomon Islands campaign and was the first of her class to be lost in WWII.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // UNRYŪ CLASS CARRIERS (Class ID: 34)
        // ============================================

        // 13. Katsuragi
        Ship::updateOrCreate(
            ['name' => 'Katsuragi'],
            [
                'class_id' => 34,
                'launch_date' => '1944-01-19',
                'commission_date' => '1944-10-15',
                'displacement' => 22534,
                'length' => 227.35,
                'beam' => 22,
                'draft' => 7.93,
                'max_speed' => 32,
                'crew' => 1536,
                'fate' => 'Survived the war; used as a repatriation transport; scrapped between December 1946 and November 1947',
                'description' => 'The third and final Unryū-class carrier, she was completed late in the war and never embarked her full air group. After the war, she transported over 12,000 Japanese soldiers and civilians back to Japan.',
                'is_aircraft_carrier' => true,
            ]
        );

        // ============================================
        // KAMIKAZE CLASS DESTROYERS (Class ID: 35)
        // ============================================

        // 14. Asanagi
        Ship::updateOrCreate(
            ['name' => 'Asanagi'],
            [
                'class_id' => 35,
                'launch_date' => '1924-04-21',
                'commission_date' => '1924-12-29',
                'displacement' => 1422,
                'length' => 102.5,
                'beam' => 9.1,
                'draft' => 2.9,
                'max_speed' => 37.3,
                'crew' => 148,
                'fate' => 'Torpedoed and sunk by USS Pollack on 22 May 1944',
                'description' => 'One of nine Kamikaze-class destroyers built in the 1920s. She participated in the occupation of the Gilbert Islands and the Battle of Wake Island.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // CHITOSE CLASS CARRIERS (Class ID: 36)
        // ============================================

        // 15. Chitose
        Ship::updateOrCreate(
            ['name' => 'Chitose'],
            [
                'class_id' => 36,
                'launch_date' => '1936-11-29',
                'commission_date' => '1944-01-01',
                'displacement' => 11200,
                'length' => 192.5,
                'beam' => 20.8,
                'draft' => 7.51,
                'max_speed' => 28.9,
                'crew' => 800,
                'fate' => 'Sunk on 25 October 1944 during the Battle of Leyte Gulf by U.S. carrier aircraft',
                'description' => 'Originally built as a seaplane tender, she was converted into a light aircraft carrier after the Battle of Midway. She participated in the Battle of the Philippine Sea and was sunk as part of Admiral Ozawa\'s decoy fleet.',
                'is_aircraft_carrier' => true,
            ]
        );

        // 16. Chiyoda
        Ship::updateOrCreate(
            ['name' => 'Chiyoda'],
            [
                'class_id' => 36,
                'launch_date' => '1937-11-19',
                'commission_date' => '1943-12-21',
                'displacement' => 11200,
                'length' => 192.5,
                'beam' => 20.8,
                'draft' => 7.5,
                'max_speed' => 28.9,
                'crew' => 800,
                'fate' => 'Sunk on 25 October 1944 during the Battle of Leyte Gulf',
                'description' => 'The second vessel of the Chitose-class, she was originally constructed as a seaplane tender and could carry midget submarines. She was converted into a light aircraft carrier after Midway.',
                'is_aircraft_carrier' => true,
            ]
        );

        // ============================================
        // FUBUKI CLASS DESTROYERS (Class ID: 37)
        // ============================================

        // 17. Fubuki
        Ship::updateOrCreate(
            ['name' => 'Fubuki'],
            [
                'class_id' => 37,
                'launch_date' => '1927-11-15',
                'commission_date' => '1928-08-10',
                'displacement' => 1750,
                'length' => 118.41,
                'beam' => 10.4,
                'draft' => 3.2,
                'max_speed' => 38,
                'crew' => 219,
                'fate' => 'Sunk on 11 October 1942 during the Battle of Cape Esperance',
                'description' => 'The lead ship of the Fubuki-class destroyers, they were considered the most powerful destroyers in the world when introduced. She was sunk in Ironbottom Sound.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 18. Miyuki
        Ship::updateOrCreate(
            ['name' => 'Miyuki'],
            [
                'class_id' => 37,
                'launch_date' => '1928-06-26',
                'commission_date' => '1929-06-29',
                'displacement' => 1750,
                'length' => 118.41,
                'beam' => 10.4,
                'draft' => 3.2,
                'max_speed' => 38,
                'crew' => 219,
                'fate' => 'Sunk in a collision with Inazuma on 29 June 1934',
                'description' => 'One of the powerful Fubuki-class destroyers. She never served in World War II, being lost in an accident well before the conflict began.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // MYŌKŌ CLASS CRUISERS (Class ID: 38)
        // ============================================

        // 19. Haguro
        Ship::updateOrCreate(
            ['name' => 'Haguro'],
            [
                'class_id' => 38,
                'launch_date' => '1928-03-24',
                'commission_date' => '1929-04-25',
                'displacement' => 10980,
                'length' => 201.7,
                'beam' => 20.73,
                'draft' => 6.32,
                'max_speed' => 36,
                'crew' => 773,
                'fate' => 'Sunk on 16 May 1945 in the Strait of Malacca by Royal Navy destroyers',
                'description' => 'The third of the four Myōkō-class heavy cruisers. She participated in numerous battles including the Battle of the Coral Sea, the Battle of the Eastern Solomons, and the Battle of Leyte Gulf.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // MOGAMI CLASS CRUISERS (Class ID: 39)
        // ============================================

        // 20. Mogami
        Ship::updateOrCreate(
            ['name' => 'Mogami'],
            [
                'class_id' => 39,
                'launch_date' => '1934-03-14',
                'commission_date' => '1935-07-28',
                'displacement' => 11169,
                'length' => 201.6,
                'beam' => 20.6,
                'draft' => 6,
                'max_speed' => 35,
                'crew' => 850,
                'fate' => 'Scuttled on 25 October 1944 during the Battle of Leyte Gulf',
                'description' => 'The lead ship of her class, Mogami was initially built as a light cruiser but was later reclassified as a heavy cruiser. She saw extensive action including the Battle of Midway.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 21. Mikuma
        Ship::updateOrCreate(
            ['name' => 'Mikuma'],
            [
                'class_id' => 39,
                'launch_date' => '1934-05-31',
                'commission_date' => '1935-08-29',
                'displacement' => 11169,
                'length' => 198,
                'beam' => 20,
                'draft' => 6,
                'max_speed' => 35,
                'crew' => 850,
                'fate' => 'Sunk on 6 June 1942 during the Battle of Midway by U.S. carrier aircraft',
                'description' => 'Mikuma participated in the invasion of Malaya and Borneo. She saw action at the Battle of Sunda Strait and was sunk at Midway after colliding with her sister ship Mogami.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 22. Kumano
        Ship::updateOrCreate(
            ['name' => 'Kumano'],
            [
                'class_id' => 39,
                'launch_date' => '1936-10-15',
                'commission_date' => '1937-10-31',
                'displacement' => 13440,
                'length' => 201.6,
                'beam' => 22,
                'draft' => 5.5,
                'max_speed' => 35,
                'crew' => 850,
                'fate' => 'Sunk on 25 November 1944 by aircraft from the USS Ticonderoga',
                'description' => 'Kumano initially served as a light cruiser before being converted to a heavy cruiser. She participated in major operations including the invasion of Malaya, the Battle of the Java Sea, and the Battle off Samar.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // YŪGUMO CLASS DESTROYERS (Class ID: 40)
        // ============================================

        // 23. Makinami
        Ship::updateOrCreate(
            ['name' => 'Makinami'],
            [
                'class_id' => 40,
                'launch_date' => '1941-12-17',
                'commission_date' => '1942-08-18',
                'displacement' => 2520,
                'length' => 119.15,
                'beam' => 10.8,
                'draft' => 3.75,
                'max_speed' => 35.5,
                'crew' => 228,
                'fate' => 'Sunk on 25 November 1943 during the Battle of Cape St. George',
                'description' => 'Makinami spent much of her career on troop transport missions to Guadalcanal. She participated in the Battle of Tassafaronga and was sunk during the Battle of Cape St. George.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 24. Naganami
        Ship::updateOrCreate(
            ['name' => 'Naganami'],
            [
                'class_id' => 40,
                'launch_date' => '1942-03-05',
                'commission_date' => '1942-06-30',
                'displacement' => 2520,
                'length' => 119.15,
                'beam' => 10.8,
                'draft' => 3.75,
                'max_speed' => 35,
                'crew' => 228,
                'fate' => 'Sunk on 11 November 1944 during the Battle of Ormoc Bay',
                'description' => 'A Yūgumo-class destroyer that saw action in the Solomon Islands campaign and the Battle of Leyte Gulf. She was sunk by aircraft while escorting a troop convoy.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // NAGARA CLASS CRUISERS (Class ID: 41)
        // ============================================

        // 25. Natori
        Ship::updateOrCreate(
            ['name' => 'Natori'],
            [
                'class_id' => 41,
                'launch_date' => '1922-02-16',
                'commission_date' => '1922-09-15',
                'displacement' => 5170,
                'length' => 162.1,
                'beam' => 14.2,
                'draft' => 4.8,
                'max_speed' => 36,
                'crew' => 450,
                'fate' => 'Torpedoed and sunk by USS Hardhead on 18 August 1944 east of the Philippines',
                'description' => 'A Nagara-class light cruiser. She participated in the early Pacific campaigns, including the Philippines and Dutch East Indies, and was later used on transport missions.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // RYŪJŌ CLASS CARRIERS (Class ID: 42)
        // ============================================

        // 26. Ryūjō
        Ship::updateOrCreate(
            ['name' => 'Ryūjō'],
            [
                'class_id' => 42,
                'launch_date' => '1931-04-02',
                'commission_date' => '1933-05-09',
                'displacement' => 10600,
                'length' => 179.9,
                'beam' => 20.3,
                'draft' => 7.1,
                'max_speed' => 29,
                'crew' => 924,
                'fate' => 'Sunk on 24 August 1942 during the Battle of the Eastern Solomons',
                'description' => 'A light aircraft carrier designed with a flush-deck hull and no island superstructure. She supported operations in the Dutch East Indies, the Indian Ocean Raid, and the Aleutian Islands campaign.',
                'is_aircraft_carrier' => true,
            ]
        );

        // ============================================
        // NAGATO CLASS BATTLESHIPS (Class ID: 43)
        // ============================================

        // 27. Nagato
        Ship::updateOrCreate(
            ['name' => 'Nagato'],
            [
                'class_id' => 43,
                'launch_date' => '1919-11-09',
                'commission_date' => '1920-11-25',
                'displacement' => 32720,
                'length' => 224.94,
                'beam' => 34.6,
                'draft' => 9.49,
                'max_speed' => 25,
                'crew' => 1734,
                'fate' => 'Sunk as a target ship during Operation Crossroads atomic bomb tests at Bikini Atoll on 29/30 July 1946',
                'description' => 'Lead ship of her class and the first battleship in the world to mount 16-inch guns. She was Admiral Yamamoto\'s flagship during the attack on Pearl Harbor and the only Japanese battleship to survive WWII.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 28. Mutsu
        Ship::updateOrCreate(
            ['name' => 'Mutsu'],
            [
                'class_id' => 43,
                'launch_date' => '1920-05-31',
                'commission_date' => '1921-10-24',
                'displacement' => 32720,
                'length' => 224.94,
                'beam' => 34.6,
                'draft' => 9.46,
                'max_speed' => 25.28,
                'crew' => 1475,
                'fate' => 'Sunk by internal magazine explosion on 8 June 1943 at Hashirajima anchorage, Japan',
                'description' => 'The second and final Nagato-class battleship. Along with her sister ship, she was among the most powerful capital ships in the world upon completion. She was lost in a mysterious explosion with 1,121 crew members.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // EXTRA SHIPS
        // ============================================

        // 29. Akashi (Repair Ship - Unique Class)
        Ship::updateOrCreate(
            ['name' => 'Akashi'],
            [
                'class_id' => 9, // Temporary - no class ID for repair ship
                'launch_date' => '1938-06-29',
                'commission_date' => '1939-07-31',
                'displacement' => 9000,
                'length' => 158.5,
                'beam' => 20.5,
                'draft' => 6.29,
                'max_speed' => 19.2,
                'crew' => 769,
                'fate' => 'Sunk on 30 March 1944 in the Palau Islands by American carrier aircraft',
                'description' => 'The only purpose-built repair ship operated by the Imperial Japanese Navy. She repaired numerous damaged warships including Shōkaku, Yamato, and Mogami.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 30. Kawakaze (Shiratsuyu-class destroyer)
        Ship::updateOrCreate(
            ['name' => 'Kawakaze'],
            [
                'class_id' => 22,
                'launch_date' => '1936-11-01',
                'commission_date' => '1937-04-30',
                'displacement' => 1685,
                'length' => 107.5,
                'beam' => 9.9,
                'draft' => 3.5,
                'max_speed' => 34,
                'crew' => 226,
                'fate' => 'Sunk on 7 August 1943 during the Battle of Vella Gulf',
                'description' => 'A Shiratsuyu-class destroyer. She participated in many major Pacific battles including the Java Sea, Eastern Solomons, Santa Cruz, and Guadalcanal.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 31. Zuihō (Zuihō-class carrier)
        Ship::updateOrCreate(
            ['name' => 'Zuihō'],
            [
                'class_id' => 30,
                'launch_date' => '1936-06-19',
                'commission_date' => '1940-12-27',
                'displacement' => 11443,
                'length' => 205.5,
                'beam' => 18.2,
                'draft' => 6.58,
                'max_speed' => 28,
                'crew' => 785,
                'fate' => 'Sunk on 25 October 1944 during the Battle off Cape Engaño',
                'description' => 'Originally laid down as the submarine tender Takasaki, she was converted to an aircraft carrier during construction. She served as a decoy at Leyte Gulf and was sunk by American aircraft.',
                'is_aircraft_carrier' => true,
            ]
        );

        // 32. Shōhō (Zuihō-class carrier)
        Ship::updateOrCreate(
            ['name' => 'Shōhō'],
            [
                'class_id' => 30,
                'launch_date' => '1935-06-01',
                'commission_date' => '1942-01-15',
                'displacement' => 11262,
                'length' => 205.5,
                'beam' => 18.0,
                'draft' => 6.6,
                'max_speed' => 28,
                'crew' => 785,
                'fate' => 'Sunk on 7 May 1942 during the Battle of the Coral Sea',
                'description' => 'Originally laid down as the submarine tender Tsugumi, she was converted to an aircraft carrier after the war began. She was the first Japanese aircraft carrier sunk in WWII.',
                'is_aircraft_carrier' => true,
            ]
        );

        // 33. Taihō (Taihō-class carrier)
        Ship::updateOrCreate(
            ['name' => 'Taihō'],
            [
                'class_id' => 31,
                'launch_date' => '1943-04-07',
                'commission_date' => '1944-03-07',
                'displacement' => 29300,
                'length' => 260.6,
                'beam' => 27.7,
                'draft' => 9.6,
                'max_speed' => 33.3,
                'crew' => 1751,
                'fate' => 'Sunk on 19 June 1944 during the Battle of the Philippine Sea',
                'description' => 'Japan\'s first armoured flight deck carrier. She was sunk during her first major operation when a torpedo hit caused fuel vapour explosions that destroyed the ship.',
                'is_aircraft_carrier' => true,
            ]
        );

        // 34. Hiryū (Sōryū-class carrier)
        Ship::updateOrCreate(
            ['name' => 'Hiryū'],
            [
                'class_id' => 23,
                'launch_date' => '1937-11-16',
                'commission_date' => '1939-07-05',
                'displacement' => 17600,
                'length' => 227.4,
                'beam' => 22.3,
                'draft' => 7.8,
                'max_speed' => 34,
                'crew' => 1100,
                'fate' => 'Scuttled on 5 June 1942 after the Battle of Midway',
                'description' => 'Hiryū was a modified Sōryū-class aircraft carrier. Her aircraft participated in the attack on Pearl Harbor and the Indian Ocean Raid. At Midway, she was the only Japanese carrier to survive the initial U.S. strikes.',
                'is_aircraft_carrier' => true,
            ]
        );

        // 35. Sōryū (Sōryū-class carrier)
        Ship::updateOrCreate(
            ['name' => 'Sōryū'],
            [
                'class_id' => 23,
                'launch_date' => '1935-12-21',
                'commission_date' => '1937-12-29',
                'displacement' => 15900,
                'length' => 222,
                'beam' => 21.3,
                'draft' => 7.62,
                'max_speed' => 34.5,
                'crew' => 1100,
                'fate' => 'Sunk on 4 June 1942 during the Battle of Midway',
                'description' => 'The lead ship of her class, Sōryū was one of the first purpose-built aircraft carriers for the Imperial Japanese Navy. Her aircraft supported the attack on Pearl Harbor.',
                'is_aircraft_carrier' => true,
            ]
        );

        // 36. Kaga (Kaga-class carrier)
        Ship::updateOrCreate(
            ['name' => 'Kaga'],
            [
                'class_id' => 26,
                'launch_date' => '1921-11-17',
                'commission_date' => '1929-11-30',
                'displacement' => 38200,
                'length' => 247.65,
                'beam' => 32.5,
                'draft' => 9.48,
                'max_speed' => 28,
                'crew' => 1708,
                'fate' => 'Sunk during the Battle of Midway on 4 June 1942',
                'description' => 'Japan\'s first heavy carrier, converted from a battleship hull. Her aircraft participated in the attack on Pearl Harbor. Her wreck was discovered in 2019.',
                'is_aircraft_carrier' => true,
            ]
        );

        // 37. Junyō (Hiyō-class carrier)
        Ship::updateOrCreate(
            ['name' => 'Junyō'],
            [
                'class_id' => 27,
                'launch_date' => '1941-06-26',
                'commission_date' => '1942-05-03',
                'displacement' => 24150,
                'length' => 219.32,
                'beam' => 26.7,
                'draft' => 8.15,
                'max_speed' => 25.5,
                'crew' => 1224,
                'fate' => 'Scrapped in 1947 after surviving the war',
                'description' => 'Originally laid down as the luxury passenger liner Kashiwara Maru, she was converted to an aircraft carrier. She participated in the Aleutian Islands campaign and the Battle of the Santa Cruz Islands.',
                'is_aircraft_carrier' => true,
            ]
        );

        // 38. Hiyō (Hiyō-class carrier)
        Ship::updateOrCreate(
            ['name' => 'Hiyō'],
            [
                'class_id' => 27,
                'launch_date' => '1941-06-24',
                'commission_date' => '1942-07-31',
                'displacement' => 24150,
                'length' => 220,
                'beam' => 26.7,
                'draft' => 8.15,
                'max_speed' => 25.5,
                'crew' => 1224,
                'fate' => 'Sunk on 20 June 1944 during the Battle of the Philippine Sea',
                'description' => 'Originally laid down as the luxury passenger liner Izumo Maru, she was converted to an aircraft carrier. She participated in the Guadalcanal campaign.',
                'is_aircraft_carrier' => true,
            ]
        );

        // 39. Hōshō (Hōshō-class carrier)
        Ship::updateOrCreate(
            ['name' => 'Hōshō'],
            [
                'class_id' => 29,
                'launch_date' => '1921-11-13',
                'commission_date' => '1922-12-27',
                'displacement' => 7470,
                'length' => 168.25,
                'beam' => 18.0,
                'draft' => 6.17,
                'max_speed' => 25,
                'crew' => 550,
                'fate' => 'Scrapped in 1946 after surviving the war',
                'description' => 'The world\'s first purpose-built aircraft carrier. She primarily served as a training carrier during WWII due to her small size and slow speed.',
                'is_aircraft_carrier' => true,
            ]
        );

        // 40. Musashi (Yamato-class battleship)
        Ship::updateOrCreate(
            ['name' => 'Musashi'],
            [
                'class_id' => 3,
                'launch_date' => '1940-11-01',
                'commission_date' => '1942-08-05',
                'displacement' => 65027,
                'length' => 263,
                'beam' => 38.9,
                'draft' => 11,
                'max_speed' => 27,
                'crew' => 2400,
                'fate' => 'Sunk on 24 October 1944 during the Battle of Leyte Gulf',
                'description' => 'The second of the Yamato-class battleships, the largest and most powerful battleships ever built. Her wreck was discovered in March 2015.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 41. Shinano (Yamato-class carrier conversion)
        Ship::updateOrCreate(
            ['name' => 'Shinano'],
            [
                'class_id' => 3,
                'launch_date' => '1944-10-08',
                'commission_date' => '1944-11-19',
                'displacement' => 64800,
                'length' => 266.1,
                'beam' => 38.9,
                'draft' => 10.3,
                'max_speed' => 27.3,
                'crew' => 2400,
                'fate' => 'Torpedoed and sunk by USS Archerfish on 29 November 1944',
                'description' => 'Originally laid down as the third Yamato-class battleship, she was converted to an aircraft carrier after Midway. She was the largest warship ever sunk by a submarine.',
                'is_aircraft_carrier' => true,
            ]
        );

        // ============================================
        // MISSING SHIPS - ADDED NOW!
        // ============================================

        // 42. Yamato (Yamato-class battleship)
        Ship::updateOrCreate(
            ['name' => 'Yamato'],
            [
                'class_id' => 3,
                'launch_date' => '1940-08-08',
                'commission_date' => '1941-12-16',
                'displacement' => 65000,
                'length' => 263,
                'beam' => 38.9,
                'draft' => 10.4,
                'max_speed' => 27,
                'crew' => 2500,
                'fate' => 'Sunk on 7 April 1945 during Operation Ten-Go by American carrier aircraft',
                'description' => 'The largest battleship ever built, lead ship of the Yamato-class. She was the flagship of the Combined Fleet and represented the pinnacle of Japanese naval engineering.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 43. Shōkaku (Shōkaku-class carrier)
        Ship::updateOrCreate(
            ['name' => 'Shōkaku'],
            [
                'class_id' => 4,
                'launch_date' => '1939-06-01',
                'commission_date' => '1941-08-08',
                'displacement' => 25675,
                'length' => 257.5,
                'beam' => 26,
                'draft' => 8.8,
                'max_speed' => 34.2,
                'crew' => 1660,
                'fate' => 'Torpedoed and sunk by USS Cavalla on 19 June 1944 during the Battle of the Philippine Sea',
                'description' => 'The lead ship of her class, she participated in the attack on Pearl Harbor, the Indian Ocean Raid, and the Battle of the Coral Sea. She was one of Japan\'s finest carriers.',
                'is_aircraft_carrier' => true,
            ]
        );

        // 44. Akagi (Akagi-class carrier)
        Ship::updateOrCreate(
            ['name' => 'Akagi'],
            [
                'class_id' => 18,
                'launch_date' => '1925-04-22',
                'commission_date' => '1927-03-25',
                'displacement' => 36500,
                'length' => 260.7,
                'beam' => 31.3,
                'draft' => 8.7,
                'max_speed' => 31.2,
                'crew' => 1600,
                'fate' => 'Scuttled on 5 June 1942 after the Battle of Midway',
                'description' => 'One of the Imperial Japanese Navy\'s largest carriers, converted from a battlecruiser hull. She served as the flagship of the carrier strike force at Pearl Harbor.',
                'is_aircraft_carrier' => true,
            ]
        );

        // 45. Furutaka (Furutaka-class heavy cruiser)
        Ship::updateOrCreate(
            ['name' => 'Furutaka'],
            [
                'class_id' => 28,
                'launch_date' => '1925-02-25',
                'commission_date' => '1926-03-31',
                'displacement' => 7100,
                'length' => 185.1,
                'beam' => 16.55,
                'draft' => 5.56,
                'max_speed' => 34.5,
                'crew' => 625,
                'fate' => 'Torpedoed and sunk by U.S. cruisers at the Battle of Cape Esperance on 12 October 1942',
                'description' => 'The lead ship of her class, she was designed with a distinctive flush-deck hull. She was modernized in the late 1930s and participated in the Battle of Savo Island and the Battle of Cape Esperance.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 46. Kako (Furutaka-class heavy cruiser)
        Ship::updateOrCreate(
            ['name' => 'Kako'],
            [
                'class_id' => 28,
                'launch_date' => '1925-04-10',
                'commission_date' => '1926-07-20',
                'displacement' => 7100,
                'length' => 185.1,
                'beam' => 16.55,
                'draft' => 5.56,
                'max_speed' => 34.5,
                'crew' => 625,
                'fate' => 'Torpedoed and sunk by USS S-44 on 10 August 1942 off Kavieng, New Ireland',
                'description' => 'The second vessel of the two-ship Furutaka-class heavy cruisers. She participated in the invasion of Guam, the Battle of the Coral Sea, and the Battle of Savo Island.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 47. Yūbari (Yūbari-class light cruiser)
        Ship::updateOrCreate(
            ['name' => 'Yūbari'],
            [
                'class_id' => 25,
                'launch_date' => '1923-03-05',
                'commission_date' => '1923-07-31',
                'displacement' => 2890,
                'length' => 137.16,
                'beam' => 11.99,
                'draft' => 3.94,
                'max_speed' => 35.5,
                'crew' => 328,
                'fate' => 'Torpedoed and sunk by USS Bluegill on 27 April 1944 in the Celebes Sea',
                'description' => 'A unique experimental light cruiser designed to be as small as possible while carrying a powerful armament. Her design significantly influenced later Japanese cruisers.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 48. Shimakaze (Shimakaze-class destroyer)
        Ship::updateOrCreate(
            ['name' => 'Shimakaze'],
            [
                'class_id' => 24,
                'launch_date' => '1942-07-18',
                'commission_date' => '1943-05-10',
                'displacement' => 2567,
                'length' => 126.01,
                'beam' => 11.2,
                'draft' => 4.15,
                'max_speed' => 39,
                'crew' => 267,
                'fate' => 'Sunk on 11 November 1944 in Ormoc Bay by U.S. carrier aircraft',
                'description' => 'A unique, one-off destroyer built to test a revolutionary high-pressure steam engine, making her one of the fastest destroyers in the world. She carried fifteen 610mm "Long Lance" torpedo tubes.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 49. Yukikaze (Kagerō-class destroyer)
        Ship::updateOrCreate(
            ['name' => 'Yukikaze'],
            [
                'class_id' => 8,
                'launch_date' => '1939-03-24',
                'commission_date' => '1940-01-20',
                'displacement' => 2033,
                'length' => 118.5,
                'beam' => 10.8,
                'draft' => 4.0,
                'max_speed' => 35.5,
                'crew' => 240,
                'fate' => 'Transferred to the Republic of China Navy in 1947, renamed Tang Yan, served until 1966',
                'description' => 'One of the most famous Japanese destroyers, she gained a legendary reputation as a "lucky ship" for surviving numerous intense campaigns where many other Japanese ships were sunk.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 50. Shigure (Shiratsuyu-class destroyer)
        Ship::updateOrCreate(
            ['name' => 'Shigure'],
            [
                'class_id' => 22,
                'launch_date' => '1935-05-18',
                'commission_date' => '1936-09-07',
                'displacement' => 1685,
                'length' => 107.5,
                'beam' => 9.9,
                'draft' => 3.5,
                'max_speed' => 34,
                'crew' => 180,
                'fate' => 'Torpedoed and sunk by USS Blackfin on 24 January 1945 in the Gulf of Siam',
                'description' => 'Another destroyer famous for her "luck," she survived several major naval battles that resulted in the loss of many other Japanese ships, including the Battle of Vella Gulf and the Battle of the Surigao Strait.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 51. Yūdachi (Shiratsuyu-class destroyer)
        Ship::updateOrCreate(
            ['name' => 'Yūdachi'],
            [
                'class_id' => 22,
                'launch_date' => '1936-06-21',
                'commission_date' => '1937-01-07',
                'displacement' => 1685,
                'length' => 107.5,
                'beam' => 9.9,
                'draft' => 3.5,
                'max_speed' => 34,
                'crew' => 226,
                'fate' => 'Sunk on 13 November 1942 during the First Naval Battle of Guadalcanal',
                'description' => 'Best known for her action during the First Naval Battle of Guadalcanal, where she caused significant damage to an American cruiser formation. Often nicknamed the "Nightmare of Solomon."',
                'is_aircraft_carrier' => false,
            ]
        );

        
        // ============================================
        // ISE CLASS (Hybrid Battleship-Carriers) - Class ID: 46
        // ============================================

        // 1. Ise
        Ship::updateOrCreate(
            ['name' => 'Ise'],
            [
                'class_id' => 46,
                'launch_date' => '1916-11-12',
                'commission_date' => '1917-12-15',
                'displacement' => 35800,
                'length' => 219.62,
                'beam' => 31.71,
                'draft' => 9.03,
                'max_speed' => 25,
                'crew' => 1463,
                'fate' => 'Sunk by American airstrikes on 28 July 1945 at Kure; scrapped 1946-1947',
                'description' => 'Lead ship of her class, Ise was a dreadnought battleship completed in 1917. She was modernized in the 1930s with a pagoda mast style. Following the loss of Japanese carriers at Midway in 1942, she was converted into a hybrid battleship-carrier, with the rear pair of gun turrets replaced by a flight deck to operate floatplanes. However, a lack of aircraft and qualified pilots meant she never operated her air group in combat. She participated in the Battle off Cape Engaño in October 1944 as part of the decoy Northern Force, and later transported fuel during Operation Kita in early 1945. She was sunk by carrier aircraft at Kure in July 1945.',
                'is_aircraft_carrier' => true,
            ]
        );

        // 2. Hyūga
        Ship::updateOrCreate(
            ['name' => 'Hyūga'],
            [
                'class_id' => 46,
                'launch_date' => '1917-01-27',
                'commission_date' => '1918-04-30',
                'displacement' => 39800,
                'length' => 219.62,
                'beam' => 31.71,
                'draft' => 9.03,
                'max_speed' => 25,
                'crew' => 1463,
                'fate' => 'Sunk by American airstrikes on 24/28 July 1945 at Kure; scrapped 1946-1947',
                'description' => 'Second and final ship of the Ise-class. Like her sister, she was converted into a hybrid battleship-carrier after Midway. She participated in the Battle off Cape Engaño and Operation Kita alongside Ise. Sunk at Kure in July 1945 and scrapped after the war.',
                'is_aircraft_carrier' => true,
            ]
        );

        // ============================================
        // FUSŌ CLASS BATTLESHIPS - Class ID: 47
        // ============================================

        // 3. Fusō
        Ship::updateOrCreate(
            ['name' => 'Fusō'],
            [
                'class_id' => 47,
                'launch_date' => '1914-03-28',
                'commission_date' => '1915-11-08',
                'displacement' => 34700,
                'length' => 212.75,
                'beam' => 33.1,
                'draft' => 9.7,
                'max_speed' => 24.5,
                'crew' => 1900,
                'fate' => 'Sunk during the Battle of Surigao Strait on 25 October 1944',
                'description' => 'Lead ship of her class, Fusō was a dreadnought battleship completed in 1915. She was modernized extensively in the 1930s, receiving a distinctive pagoda mast superstructure. Despite these upgrades, she was considered obsolete by WWII and played auxiliary roles for most of the war. She was sunk by torpedoes and naval gunfire at the Battle of Surigao Strait; some reports claim she broke in half and both halves remained afloat briefly. Only 10 of her crew survived.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 4. Yamashiro
        Ship::updateOrCreate(
            ['name' => 'Yamashiro'],
            [
                'class_id' => 47,
                'launch_date' => '1915-11-03',
                'commission_date' => '1917-03-31',
                'displacement' => 34700,
                'length' => 213,
                'beam' => 30,
                'draft' => 10,
                'max_speed' => 25,
                'crew' => 1800,
                'fate' => 'Sunk during the Battle of Surigao Strait on 25 October 1944',
                'description' => 'Second of the Fusō-class. She was the first Japanese battleship equipped with aircraft catapults. Modernized between 1930 and 1935, she was the flagship of Vice-Admiral Nishimura\'s Southern Force at Surigao Strait, where she was sunk by torpedoes and gunfire. Only 3-10 crew members survived.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // AOBA CLASS HEAVY CRUISERS - Class ID: 48
        // ============================================

        // 5. Aoba
        Ship::updateOrCreate(
            ['name' => 'Aoba'],
            [
                'class_id' => 48,
                'launch_date' => '1926-09-25',
                'commission_date' => '1927-09-20',
                'displacement' => 7100,
                'length' => 185.17,
                'beam' => 17.56,
                'draft' => 5.8,
                'max_speed' => 34.5,
                'crew' => 625,
                'fate' => 'Sunk by American airstrikes at Kure, Japan, on 28 July 1945',
                'description' => 'Lead ship of the Aoba-class heavy cruisers, built at Nagasaki. Served as flagship for various squadrons during her career and operated in Chinese waters in the 1920s and 1930s.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 6. Kinugasa
        Ship::updateOrCreate(
            ['name' => 'Kinugasa'],
            [
                'class_id' => 48,
                'launch_date' => '1926-10-24',
                'commission_date' => '1927-09-30',
                'displacement' => 8300,
                'length' => 185.17,
                'beam' => 17.56,
                'draft' => 5.71,
                'max_speed' => 36,
                'crew' => 657,
                'fate' => 'Sunk on 13/14 November 1942 during the Naval Battle of Guadalcanal by U.S. Navy and Marine Corps aircraft',
                'description' => 'Second vessel of the Aoba-class, built by Kawasaki at Kobe. Became the first Japanese combat ship to carry an aircraft catapult in 1928. Extensively modernized between 1937-1940.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // MYŌKŌ CLASS HEAVY CRUISERS - Class ID: 38
        // ============================================

        // 7. Myōkō
        Ship::updateOrCreate(
            ['name' => 'Myōkō'],
            [
                'class_id' => 38,
                'launch_date' => '1927-04-16',
                'commission_date' => '1929-07-31',
                'displacement' => 11633,
                'length' => 204,
                'beam' => 20.73,
                'draft' => 6.36,
                'max_speed' => 36,
                'crew' => 773,
                'fate' => 'Scuttled in the Straits of Malacca on 8 June 1946',
                'description' => 'Lead ship of the Myōkō-class heavy cruisers, built at Yokosuka Naval Arsenal. When introduced, they carried the heaviest armament of any cruiser class in the world. Surrendered to the Royal Navy in September 1945.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 8. Ashigara
        Ship::updateOrCreate(
            ['name' => 'Ashigara'],
            [
                'class_id' => 38,
                'launch_date' => '1928-04-22',
                'commission_date' => '1929-08-20',
                'displacement' => 10980,
                'length' => 203.76,
                'beam' => 20.73,
                'draft' => 6.37,
                'max_speed' => 35.5,
                'crew' => 970,
                'fate' => 'Sunk by the British submarine HMS Trenchant in Bangka Strait on 8 June 1945',
                'description' => 'Fourth and final vessel of the Myōkō-class, built by Kawasaki Shipyards at Kobe.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // NAGARA CLASS LIGHT CRUISERS - Class ID: 41
        // ============================================

        // 9. Nagara
        Ship::updateOrCreate(
            ['name' => 'Nagara'],
            [
                'class_id' => 41,
                'launch_date' => '1921-04-25',
                'commission_date' => '1922-04-21',
                'displacement' => 5570,
                'length' => 162.1,
                'beam' => 14.2,
                'draft' => 4.8,
                'max_speed' => 36,
                'crew' => 450,
                'fate' => 'Torpedoed and sunk on 7 August 1944',
                'description' => 'The lead ship of her class, designed as a destroyer flotilla flagship and saw extensive operations in WWII before being sunk by a U.S. submarine.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 10. Isuzu
        Ship::updateOrCreate(
            ['name' => 'Isuzu'],
            [
                'class_id' => 41,
                'launch_date' => '1921-10-29',
                'commission_date' => '1923-08-15',
                'displacement' => 5570,
                'length' => 162.1,
                'beam' => 14.2,
                'draft' => 4.8,
                'max_speed' => 36,
                'crew' => 450,
                'fate' => 'Sunk on 7 April 1945 by the American submarine USS Charr',
                'description' => 'The second Nagara-class cruiser, converted to an anti-aircraft cruiser in 1944. She participated in the Battle of Leyte Gulf and was later sunk by a U.S. submarine.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 11. Yura
        Ship::updateOrCreate(
            ['name' => 'Yura'],
            [
                'class_id' => 41,
                'launch_date' => '1922-02-15',
                'commission_date' => '1923-03-20',
                'displacement' => 5170,
                'length' => 162.15,
                'beam' => 14.17,
                'draft' => 4.86,
                'max_speed' => 36,
                'crew' => 450,
                'fate' => 'Scuttled on 25 October 1942 after being severely damaged during the Guadalcanal campaign',
                'description' => 'The fourth Nagara-class cruiser, she served as a test platform for aircraft catapults and participated in the Solomon Islands campaign, where she was scuttled.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // SENDAI CLASS LIGHT CRUISER - Class ID: 49
        // ============================================

        // 12. Naka
        Ship::updateOrCreate(
            ['name' => 'Naka'],
            [
                'class_id' => 49,
                'launch_date' => '1925-03-24',
                'commission_date' => '1925-11-30',
                'displacement' => 5195,
                'length' => 162.15,
                'beam' => 14.17,
                'draft' => 4.8,
                'max_speed' => 35.25,
                'crew' => 450,
                'fate' => 'Sunk on 18 February 1944 by carrier aircraft during Operation Hailstone at Truk',
                'description' => 'The third and final Sendai-class light cruiser, she participated in the invasion of the Philippines and was later sunk by U.S. carrier aircraft near Truk.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // IBUKI CLASS AIRCRAFT CARRIER - Class ID: 50
        // ============================================

        // 13. Ibuki
        Ship::updateOrCreate(
            ['name' => 'Ibuki'],
            [
                'class_id' => 50,
                'launch_date' => '1943-05-21',
                'commission_date' => null,
                'displacement' => 12500,
                'length' => 205,
                'beam' => 21.2,
                'draft' => 6.31,
                'max_speed' => 29,
                'crew' => 1015,
                'fate' => 'Scrapped at Sasebo Naval Arsenal, beginning 22 November 1946',
                'description' => 'Originally laid down as a Mogami-class heavy cruiser on 24 April 1942 at Kure Naval Arsenal. Following the loss of four carriers at Midway, the IJN decided to convert her into a light aircraft carrier in August 1943. The conversion involved removing her aft boilers and turbines, constructing a 205-meter flight deck, and adding a small island structure. Work was halted on 16 March 1945 when she was about 80% complete to prioritize the construction of small submarines. She surrendered on 2 September 1945 and was later scrapped.',
                'is_aircraft_carrier' => true,
            ]
        );


        // ============================================
        // KAGERŌ CLASS DESTROYERS (Class ID: 8)
        // ============================================

        // 1. Kagerō
        Ship::updateOrCreate(
            ['name' => 'Kagerō'],
            [
                'class_id' => 8,
                'launch_date' => '1938-09-27',
                'commission_date' => '1939-11-06',
                'displacement' => 2033,
                'length' => 118.5,
                'beam' => 10.8,
                'draft' => 3.8,
                'max_speed' => 35.5,
                'crew' => 240,
                'fate' => 'Sunk in action on 8 May 1943 SW of Rendova, New Georgia',
                'description' => 'The lead ship of her class, she participated in the attack on Pearl Harbor and the Indian Ocean Raid, and took part in the battles of the Eastern Solomons, Santa Cruz, and Guadalcanal.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 2. Shiranui
        Ship::updateOrCreate(
            ['name' => 'Shiranui'],
            [
                'class_id' => 8,
                'launch_date' => '1938-06-28',
                'commission_date' => '1939-12-20',
                'displacement' => 2033,
                'length' => 118.5,
                'beam' => 10.8,
                'draft' => 3.76,
                'max_speed' => 35.5,
                'crew' => 240,
                'fate' => 'Sunk by air attack north of Iloilo, Panay, on 27 October 1944',
                'description' => 'Sometimes referred to as the lead ship of the class in some publications because she was launched before Kagerō.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 3. Kuroshio
        Ship::updateOrCreate(
            ['name' => 'Kuroshio'],
            [
                'class_id' => 8,
                'launch_date' => '1938-10-25',
                'commission_date' => '1940-01-27',
                'displacement' => 2033,
                'length' => 118.5,
                'beam' => 10.8,
                'draft' => 3.76,
                'max_speed' => 35.5,
                'crew' => 240,
                'fate' => 'Mined leaving Vila, Kolombangara, on 8 May 1943',
                'description' => 'A Kagerō-class destroyer that saw service in the Pacific War.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 4. Oyashio
        Ship::updateOrCreate(
            ['name' => 'Oyashio'],
            [
                'class_id' => 8,
                'launch_date' => '1938-11-29',
                'commission_date' => '1940-08-20',
                'displacement' => 2033,
                'length' => 118.5,
                'beam' => 10.8,
                'draft' => 3.76,
                'max_speed' => 35.5,
                'crew' => 240,
                'fate' => 'Crippled by a mine and finished off by air attack leaving Vila, Kolombangara, on 8 May 1943',
                'description' => 'A Kagerō-class destroyer that saw service in the Pacific War.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 5. Hayashio
        Ship::updateOrCreate(
            ['name' => 'Hayashio'],
            [
                'class_id' => 8,
                'launch_date' => '1939-04-19',
                'commission_date' => '1940-08-31',
                'displacement' => 2033,
                'length' => 118.5,
                'beam' => 10.8,
                'draft' => 3.76,
                'max_speed' => 35.5,
                'crew' => 240,
                'fate' => 'Scuttled after air attack in Guna Bay, New Guinea, on 24 November 1942',
                'description' => 'A Kagerō-class destroyer that saw service in the Pacific War.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 6. Natsushio
        Ship::updateOrCreate(
            ['name' => 'Natsushio'],
            [
                'class_id' => 8,
                'launch_date' => '1939-02-23',
                'commission_date' => '1940-08-31',
                'displacement' => 2033,
                'length' => 118.5,
                'beam' => 10.8,
                'draft' => 3.76,
                'max_speed' => 35.5,
                'crew' => 240,
                'fate' => 'Torpedoed by USS S-37 south of Makassar on 9 February 1942',
                'description' => 'The first Japanese destroyer to be sunk by an American submarine during the war. She was built at the Fujinagata Shipyards in Osaka.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 7. Amatsukaze
        Ship::updateOrCreate(
            ['name' => 'Amatsukaze'],
            [
                'class_id' => 8,
                'launch_date' => '1939-10-19',
                'commission_date' => '1940-10-26',
                'displacement' => 2033,
                'length' => 118.5,
                'beam' => 10.8,
                'draft' => 3.76,
                'max_speed' => 35.5,
                'crew' => 240,
                'fate' => 'Scuttled on 10 April 1945 after being crippled by an air attack',
                'description' => 'She was famous for her experimental high-pressure boilers and played a key role in the First Naval Battle of Guadalcanal, sinking the destroyer USS Barton and the cruiser USS Juneau.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 8. Tokitsukaze
        Ship::updateOrCreate(
            ['name' => 'Tokitsukaze'],
            [
                'class_id' => 8,
                'launch_date' => '1939-11-10',
                'commission_date' => '1940-12-15',
                'displacement' => 2033,
                'length' => 118.5,
                'beam' => 10.8,
                'draft' => 3.76,
                'max_speed' => 35.5,
                'crew' => 240,
                'fate' => 'Sunk by aircraft on 3 March 1943 in the Battle of the Bismarck Sea',
                'description' => 'A Kagerō-class destroyer. Part of DesDiv 16 with Yukikaze, Amatsukaze, and Hatsukaze.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // YŪGUMO CLASS DESTROYERS (Class ID: 40)
        // ============================================

        // 9. Yūgumo
        Ship::updateOrCreate(
            ['name' => 'Yūgumo'],
            [
                'class_id' => 40,
                'launch_date' => '1941-03-16',
                'commission_date' => '1941-12-05',
                'displacement' => 2077,
                'length' => 119.03,
                'beam' => 10.8,
                'draft' => 3.76,
                'max_speed' => 35.5,
                'crew' => 225,
                'fate' => 'Sunk during the Battle of Vella Lavella on 6 October 1943',
                'description' => 'Lead ship of her class, she was one of 19 destroyers built for the Imperial Japanese Navy during WWII. She was sunk in a surface action against U.S. destroyers.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 10. Kazagumo
        Ship::updateOrCreate(
            ['name' => 'Kazagumo'],
            [
                'class_id' => 40,
                'launch_date' => '1941-09-26',
                'commission_date' => '1942-03-28',
                'displacement' => 2077,
                'length' => 119.03,
                'beam' => 10.8,
                'draft' => 3.76,
                'max_speed' => 35.5,
                'crew' => 228,
                'fate' => 'Torpedoed at Davao Gulf on 8 June 1944',
                'description' => 'A Yūgumo-class destroyer that was sunk by an American submarine.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // YŪGUMO CLASS DESTROYERS (Class ID: 40)
        // ============================================

        // 1. Makigumo
        Ship::updateOrCreate(
            ['name' => 'Makigumo'],
            [
                'class_id' => 40,
                'launch_date' => '1941-11-05',
                'commission_date' => '1942-03-14',
                'displacement' => 2520,
                'length' => 119.15,
                'beam' => 10.8,
                'draft' => 3.75,
                'max_speed' => 35,
                'crew' => 228,
                'fate' => 'Scuttled on 1 February 1943 after striking a mine off Guadalcanal',
                'description' => 'A Yūgumo-class destroyer. Following the Battle of Midway, her crew captured two American airmen, who were later interrogated and killed. She participated in the aftermath of the Battle of the Santa Cruz Islands, where she helped scuttle the abandoned aircraft carrier USS Hornet. She struck a mine off Guadalcanal and was scuttled by the destroyer Yūgumo.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 2. Takanami
        Ship::updateOrCreate(
            ['name' => 'Takanami'],
            [
                'class_id' => 40,
                'launch_date' => '1942-03-16',
                'commission_date' => '1942-08-31',
                'displacement' => 2520,
                'length' => 119.15,
                'beam' => 10.8,
                'draft' => 3.76,
                'max_speed' => 35.5,
                'crew' => 228,
                'fate' => 'Sunk during the Battle of Tassafaronga on 30 November 1942',
                'description' => 'A Yūgumo-class destroyer. She participated in the Guadalcanal campaign and was sunk during the Battle of Tassafaronga.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 3. Kiyonami
        Ship::updateOrCreate(
            ['name' => 'Kiyonami'],
            [
                'class_id' => 40,
                'launch_date' => '1942-08-17',
                'commission_date' => '1943-01-25',
                'displacement' => 2520,
                'length' => 119.15,
                'beam' => 10.8,
                'draft' => 3.75,
                'max_speed' => 35,
                'crew' => 228,
                'fate' => 'Sunk by USAAF B-25s on 20 July 1943',
                'description' => 'A Yūgumo-class destroyer. On 12 July 1943, she participated in the Battle of Kolombangara, contributing torpedoes that sank USS Gwin and damaged other American cruisers. She was sunk while attempting to rescue the crew of the destroyer Yūgure; only one survivor was rescued from the combined crews of nearly 470 men.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // KAGERŌ CLASS DESTROYERS (Class ID: 8)
        // ============================================

        // 4. Hamakaze
        Ship::updateOrCreate(
            ['name' => 'Hamakaze'],
            [
                'class_id' => 8,
                'launch_date' => '1940-11-25',
                'commission_date' => '1941-06-30',
                'displacement' => 2490,
                'length' => 118.5,
                'beam' => 10.8,
                'draft' => 3.8,
                'max_speed' => 35,
                'crew' => 240,
                'fate' => 'Sunk by American carrier aircraft on 7 April 1945 during Operation Ten-Go',
                'description' => 'A Kagerō-class destroyer. She participated in the Guadalcanal Campaign and the battles of Kula Gulf and Kolombangara in 1943. During Operation Ten-Go, while escorting the battleship Yamato, she was sunk by aircraft from Task Force 58.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 5. Tanikaze
        Ship::updateOrCreate(
            ['name' => 'Tanikaze'],
            [
                'class_id' => 8,
                'launch_date' => '1940-11-01',
                'commission_date' => '1941-04-25',
                'displacement' => 2033,
                'length' => 118.5,
                'beam' => 10.8,
                'draft' => 3.8,
                'max_speed' => 35,
                'crew' => 240,
                'fate' => 'Torpedoed and sunk by USS Harder on 9 June 1944',
                'description' => 'A Kagerō-class destroyer. She participated in numerous Pacific campaigns and was sunk by an American submarine.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 6. Urakaze
        Ship::updateOrCreate(
            ['name' => 'Urakaze'],
            [
                'class_id' => 8,
                'launch_date' => '1940-04-10',
                'commission_date' => '1940-12-15',
                'displacement' => 2033,
                'length' => 118.5,
                'beam' => 10.8,
                'draft' => 3.8,
                'max_speed' => 35,
                'crew' => 240,
                'fate' => 'Torpedoed and sunk by USS Seawolf on 21 November 1944, east of Formosa',
                'description' => 'A Kagerō-class destroyer. She was sunk by an American submarine while escorting a convoy.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 7. Isokaze
        Ship::updateOrCreate(
            ['name' => 'Isokaze'],
            [
                'class_id' => 8,
                'launch_date' => '1939-06-19',
                'commission_date' => '1940-11-30',
                'displacement' => 2033,
                'length' => 118.5,
                'beam' => 10.8,
                'draft' => 3.8,
                'max_speed' => 35,
                'crew' => 240,
                'fate' => 'Scuttled after suffering air attacks on 7 April 1945 during Operation Ten-Go',
                'description' => 'A Kagerō-class destroyer. She was heavily damaged by U.S. carrier aircraft during the same operation that sank Yamato, and was scuttled by a fellow destroyer.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 1. Akizuki (Lead ship)
        Ship::updateOrCreate(
            ['name' => 'Akizuki'],
            [
                'class_id' => 33,
                'launch_date' => '1941-07-02',
                'commission_date' => '1942-06-11',
                'displacement' => 2700,
                'length' => 134.2,
                'beam' => 11.6,
                'draft' => 4.15,
                'max_speed' => 33,
                'crew' => 263,
                'fate' => 'Sunk in action on 25 October 1944 during the Battle off Cape Engaño',
                'description' => 'Lead ship of her class, originally designed as an anti-aircraft escort for carrier battle groups. She participated in the Guadalcanal Campaign and was torpedoed by USS Nautilus in January 1943. She was repaired and later rescued survivors from Taihō and helped protect Zuikaku during the Battle of the Philippine Sea.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 2. Teruzuki
        Ship::updateOrCreate(
            ['name' => 'Teruzuki'],
            [
                'class_id' => 33,
                'launch_date' => '1941-11-21',
                'commission_date' => '1942-08-31',
                'displacement' => 2700,
                'length' => 134.2,
                'beam' => 11.6,
                'draft' => 4.15,
                'max_speed' => 33,
                'crew' => 263,
                'fate' => 'Sunk on 12 December 1942 by torpedoes from PT boats off Cape Esperance, Guadalcanal',
                'description' => 'Served as flagship to Rear Admiral Raizō Tanaka, a renowned tactician in night operations and resupply missions. Her wreck was discovered in July 2025 in Iron Bottom Sound at a depth exceeding 800 meters.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 3. Suzutsuki
        Ship::updateOrCreate(
            ['name' => 'Suzutsuki'],
            [
                'class_id' => 33,
                'launch_date' => '1942-03-04',
                'commission_date' => '1942-12-29',
                'displacement' => 2700,
                'length' => 134.2,
                'beam' => 11.6,
                'draft' => 4.15,
                'max_speed' => 33,
                'crew' => 263,
                'fate' => 'Stricken on 20 November 1945; sold for scrap',
                'description' => 'During Operation Ten-Go (April 1945), she escorted the battleship Yamato. Her bow was torn off by a torpedo from aircraft of Task Force 58, but she survived and returned to Sasebo by steaming in reverse the whole way.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 4. Fuyutsuki
        Ship::updateOrCreate(
            ['name' => 'Fuyutsuki'],
            [
                'class_id' => 33,
                'launch_date' => '1944-01-20',
                'commission_date' => '1944-05-25',
                'displacement' => 2700,
                'length' => 134.2,
                'beam' => 11.6,
                'draft' => 4.15,
                'max_speed' => 33,
                'crew' => 300,
                'fate' => 'Scrapped and converted to breakwater in May 1948',
                'description' => 'Participated in the last mission of the battleship Yamato (6–7 April 1945). She sank the crippled destroyer Kasumi with two torpedoes after taking aboard her crew. She was one of the few surviving ships from that mission.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // MUTSUKI CLASS DESTROYERS (Class ID: 51 - New Class)
        // ============================================

        // Note: You need to create the Mutsuki class first (ID: 51)

        // 5. Mutsuki
        Ship::updateOrCreate(
            ['name' => 'Mutsuki'],
            [
                'class_id' => 51,
                'launch_date' => '1925-07-23',
                'commission_date' => '1926-03-25',
                'displacement' => 1336,
                'length' => 97.5,
                'beam' => 9.2,
                'draft' => 3.0,
                'max_speed' => 37,
                'crew' => 150,
                'fate' => 'Sunk on 25 August 1942 by B-17 bombers 40 miles northeast of Santa Isabel Island',
                'description' => 'Lead ship of her class. She participated in the invasion of Wake Island, the Battle of the Coral Sea, and the bombardment of Henderson Field on Guadalcanal.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 6. Fumizuki
        Ship::updateOrCreate(
            ['name' => 'Fumizuki'],
            [
                'class_id' => 51,
                'launch_date' => '1926-02-16',
                'commission_date' => '1926-07-03',
                'displacement' => 1336,
                'length' => 97.5,
                'beam' => 9.2,
                'draft' => 3.0,
                'max_speed' => 37,
                'crew' => 150,
                'fate' => 'Sunk on 18 February 1944 during Operation Hailstone at Truk Lagoon',
                'description' => 'During the U.S. Navy air raid on Truk, she was hit by a torpedo and stopped dead in the water with 29 killed. She sank near Udot Island in Truk Lagoon. Her wreck lies upright at a depth of 130\' and was discovered in April 1987.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 7. Nagatsuki (Mutsuki-class)
        Ship::updateOrCreate(
            ['name' => 'Nagatsuki'],
            [
                'class_id' => 51,
                'launch_date' => '1926-10-06',
                'commission_date' => '1927-04-30',
                'displacement' => 1336,
                'length' => 97.5,
                'beam' => 9.2,
                'draft' => 3.0,
                'max_speed' => 37,
                'crew' => 150,
                'fate' => 'Sunk on 6 July 1943 during the Battle of Kula Gulf',
                'description' => 'A Mutsuki-class destroyer that participated in the Solomon Islands campaign.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 8. Kikuzuki (Mutsuki-class)
        Ship::updateOrCreate(
            ['name' => 'Kikuzuki'],
            [
                'class_id' => 51,
                'launch_date' => '1926-05-15',
                'commission_date' => '1926-11-20',
                'displacement' => 1336,
                'length' => 97.5,
                'beam' => 9.2,
                'draft' => 3.0,
                'max_speed' => 37,
                'crew' => 150,
                'fate' => 'Sunk on 4 May 1942 during the invasion of Tulagi',
                'description' => 'A Mutsuki-class destroyer. She was sunk during the initial Japanese landings at Tulagi in the Solomon Islands.',
                'is_aircraft_carrier' => false,
            ]
        );

     

        $this->command->info('✅  Japanese ships processed successfully!');
    }
}