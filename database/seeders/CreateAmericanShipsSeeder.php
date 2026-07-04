<?php

namespace Database\Seeders;

use App\Models\Ship;
use App\Models\ShipClass;
use App\Models\ShipImage;
use Illuminate\Database\Seeder;

class CreateAmericanShipsSeeder extends Seeder
{
    public function run(): void
    {
        // ============================================
        // AIRCRAFT CARRIERS
        // ============================================

        // 1. USS Bunker Hill (CV-17) - Essex-class (Class ID: 6)
        Ship::updateOrCreate(
            ['name' => 'USS Bunker Hill (CV-17)'],
            [
                'class_id' => 6,
                'launch_date' => '1942-12-07',
                'commission_date' => '1943-05-25',
                'displacement' => 27100,
                'length' => 265.8,
                'beam' => 45,
                'draft' => 10.41,
                'max_speed' => 33,
                'crew' => 3448,
                'fate' => 'Sold for scrap in May 1973',
                'description' => 'An Essex-class aircraft carrier commissioned in May 1943. She participated in major Pacific campaigns including strikes on Rabaul, the Gilbert and Marshall Islands, Truk, the Marianas (including the Battle of the Philippine Sea), Iwo Jima, and Okinawa. On 11 May 1945, while covering the invasion of Okinawa, she was struck by two kamikaze aircraft in quick succession, causing severe damage and heavy casualties of 373 killed or missing and 264 wounded. She was the second hardest-hit U.S. carrier to survive the war, after USS Franklin. After repairs, she served in Operation Magic Carpet bringing troops home. Decommissioned in 1947, she was never recommissioned and was sold for scrap in 1973. Aircraft Complement: 90-100 aircraft. A typical WWII air group consisted of: 36 × Grumman F6F Hellcat fighters, 37 × Curtiss SB2C Helldiver dive bombers, 18 × Grumman TBF Avenger torpedo bombers.',
                'is_aircraft_carrier' => true,
            ]
        );

        // 2. USS Enterprise (CV-6) - Yorktown-class (Class ID: 2)
        Ship::updateOrCreate(
            ['name' => 'USS Enterprise (CV-6)'],
            [
                'class_id' => 2,
                'launch_date' => '1936-10-03',
                'commission_date' => '1938-05-12',
                'displacement' => 19800,
                'length' => 246.7,
                'beam' => 33.2,
                'draft' => 7.9,
                'max_speed' => 32.5,
                'crew' => 2217,
                'fate' => 'Scrapped 1958–1960',
                'description' => 'Nicknamed "The Big E" and "The Grey Ghost," she was the most decorated U.S. warship of WWII with 20 battle stars. She participated in more major actions against Japan than any other U.S. ship, including the Doolittle Raid, Midway, Eastern Solomons, Santa Cruz, Philippine Sea, and Leyte Gulf. The Japanese repeatedly claimed her sunk, giving her the "Ghost" nickname. Aircraft Complement: Up to 96 aircraft maximum; typically 80-90 on board.',
                'is_aircraft_carrier' => true,
            ]
        );

        // 3. USS Yorktown (CV-5) - Yorktown-class (Class ID: 2)
        Ship::updateOrCreate(
            ['name' => 'USS Yorktown (CV-5)'],
            [
                'class_id' => 2,
                'launch_date' => '1936-04-04',
                'commission_date' => '1937-09-30',
                'displacement' => 19800,
                'length' => 246.7,
                'beam' => 33.4,
                'draft' => 7.9,
                'max_speed' => 32.5,
                'crew' => 2217,
                'fate' => 'Sunk on 7 June 1942 during the Battle of Midway',
                'description' => 'Lead ship of her class, she was heavily damaged at the Battle of the Coral Sea but repaired in just 72 hours to fight at Midway. Her aircraft helped sink the Japanese carriers Soryu and Hiryu. She was torpedoed by submarine I-168 and sank the following day. Her wreck was discovered by Dr. Robert Ballard in 1988. Aircraft Complement: 90 aircraft.',
                'is_aircraft_carrier' => true,
            ]
        );

        // 4. USS Hornet (CV-8) - Yorktown-class (Class ID: 2)
        Ship::updateOrCreate(
            ['name' => 'USS Hornet (CV-8)'],
            [
                'class_id' => 2,
                'launch_date' => '1940-12-14',
                'commission_date' => '1941-10-20',
                'displacement' => 19900,
                'length' => 251.4,
                'beam' => 33.4,
                'draft' => 8.5,
                'max_speed' => 32.5,
                'crew' => 2919,
                'fate' => 'Sunk on 27 October 1942 during the Battle of the Santa Cruz Islands',
                'description' => 'Famous for launching the Doolittle Raid on Tokyo in April 1942. She also participated in the Battle of Midway. She was irreparably damaged by enemy dive bombers and torpedoes at Santa Cruz and later scuttled by U.S. destroyers. Aircraft Complement: 72–90 aircraft.',
                'is_aircraft_carrier' => true,
            ]
        );

        // 5. USS Franklin (CV-13) - Essex-class short hull (Class ID: 6)
        Ship::updateOrCreate(
            ['name' => 'USS Franklin (CV-13)'],
            [
                'class_id' => 6,
                'launch_date' => '1943-10-14',
                'commission_date' => '1944-01-31',
                'displacement' => 27100,
                'length' => 265.8,
                'beam' => 28.3,
                'draft' => 8.7,
                'max_speed' => 33,
                'crew' => 3448,
                'fate' => 'Scrapped in 1966',
                'description' => 'Nicknamed "Big Ben," she was the hardest-hit U.S. carrier to survive WWII. On 19 March 1945, a Japanese bomb hit her flight deck, causing massive fires and explosions that killed 724 crew and 265 wounded. She was the most heavily damaged U.S. carrier to return to port and survive the war. Aircraft Complement: 82 aircraft.',
                'is_aircraft_carrier' => true,
            ]
        );

        // 6. USS Ticonderoga (CV-14) - Essex-class long hull (Class ID: 6)
        Ship::updateOrCreate(
            ['name' => 'USS Ticonderoga (CV-14)'],
            [
                'class_id' => 6,
                'launch_date' => '1944-02-07',
                'commission_date' => '1944-05-08',
                'displacement' => 27100,
                'length' => 265.8,
                'beam' => 28.3,
                'draft' => 8.7,
                'max_speed' => 33,
                'crew' => 3448,
                'fate' => 'Scrapped in 1975',
                'description' => 'An Essex-class aircraft carrier commissioned in May 1944. She participated in the Marianas campaign, the Battle of Leyte Gulf, and the Okinawa campaign. She was hit by two kamikazes off Okinawa in April 1945 but survived. After the war, she served in the Korean and Vietnam Wars. Aircraft Complement: Up to 103 aircraft.',
                'is_aircraft_carrier' => true,
            ]
        );

        // 7. USS Randolph (CV-15) - Essex-class long hull (Class ID: 6)
        Ship::updateOrCreate(
            ['name' => 'USS Randolph (CV-15)'],
            [
                'class_id' => 6,
                'launch_date' => '1944-06-28',
                'commission_date' => '1944-10-09',
                'displacement' => 27100,
                'length' => 265.8,
                'beam' => 28.3,
                'draft' => 8.7,
                'max_speed' => 33,
                'crew' => 3448,
                'fate' => 'Scrapped in 1975',
                'description' => 'An Essex-class aircraft carrier commissioned in October 1944. She participated in the Okinawa campaign and the attacks on the Japanese home islands. After the war, she served in the Korean and Vietnam Wars. Aircraft Complement: Up to 103 aircraft.',
                'is_aircraft_carrier' => true,
            ]
        );

        // 8. USS Hancock (CV-19) - Essex-class long hull (Class ID: 6)
        Ship::updateOrCreate(
            ['name' => 'USS Hancock (CV-19)'],
            [
                'class_id' => 6,
                'launch_date' => '1944-01-24',
                'commission_date' => '1944-04-15',
                'displacement' => 27100,
                'length' => 265.8,
                'beam' => 28.3,
                'draft' => 8.7,
                'max_speed' => 33,
                'crew' => 3448,
                'fate' => 'Scrapped in 1976',
                'description' => 'An Essex-class aircraft carrier commissioned in April 1944. She participated in the Marianas campaign, the Battle of Leyte Gulf, the Iwo Jima and Okinawa campaigns, and the attacks on the Japanese home islands. She was hit by a kamikaze off Okinawa in April 1945 but survived. Aircraft Complement: Up to 103 aircraft.',
                'is_aircraft_carrier' => true,
            ]
        );

        // 9. USS Intrepid (CV-11) - Essex-class long hull (Class ID: 6)
        Ship::updateOrCreate(
            ['name' => 'USS Intrepid (CV-11)'],
            [
                'class_id' => 6,
                'launch_date' => '1943-04-26',
                'commission_date' => '1943-08-16',
                'displacement' => 27100,
                'length' => 265.8,
                'beam' => 28.3,
                'draft' => 8.7,
                'max_speed' => 33,
                'crew' => 3448,
                'fate' => 'Museum ship since 1982; permanently docked at the Intrepid Sea, Air & Space Museum in New York City',
                'description' => 'Served in the Pacific, surviving three kamikaze attacks and a torpedo hit. Later served in the Korean and Vietnam Wars. Notably, it was one of the ships that recovered astronauts from the Project Mercury and Gemini space missions. Aircraft Complement: Up to 90 aircraft; typical mix: 36 × F6F Hellcat fighters, 36 × SB2C Helldiver dive bombers, 18 × TBF Avenger torpedo bombers.',
                'is_aircraft_carrier' => true,
            ]
        );

        // 10. USS Lexington (CV-2) - Lexington-class (Class ID: 61)
        Ship::updateOrCreate(
            ['name' => 'USS Lexington (CV-2)'],
            [
                'class_id' => 61,
                'launch_date' => '1925-10-03',
                'commission_date' => '1927-12-14',
                'displacement' => 33000,
                'length' => 270.7,
                'beam' => 32.1,
                'draft' => 9.3,
                'max_speed' => 33.25,
                'crew' => 2791,
                'fate' => 'Sunk on 8 May 1942 during the Battle of the Coral Sea',
                'description' => 'Nicknamed "Lady Lex," she was one of the first U.S. aircraft carriers. She was heavily damaged by Japanese dive bombers and torpedoes at Coral Sea and was scuttled by U.S. destroyers to prevent capture. Her wreck was discovered in March 2018 by Paul Allen\'s research vessel. Aircraft Complement: 80-90 aircraft (1942).',
                'is_aircraft_carrier' => true,
            ]
        );

        // 11. USS Saratoga (CV-3) - Lexington-class (Class ID: 61)
        Ship::updateOrCreate(
            ['name' => 'USS Saratoga (CV-3)'],
            [
                'class_id' => 61,
                'launch_date' => '1925-04-07',
                'commission_date' => '1927-11-16',
                'displacement' => 33000,
                'length' => 270.7,
                'beam' => 32.1,
                'draft' => 9.3,
                'max_speed' => 33.25,
                'crew' => 2791,
                'fate' => 'Sunk as a target during Operation Crossroads at Bikini Atoll on 25 July 1946',
                'description' => 'Nicknamed "Sara Maru," she served throughout WWII in the Pacific. She survived multiple torpedo hits and participated in the Guadalcanal campaign. She was one of only three pre-war carriers to survive the war, alongside Enterprise and Ranger. Aircraft Complement: 80-90 aircraft.',
                'is_aircraft_carrier' => true,
            ]
        );

        // 12. USS Wasp (CV-7) - Wasp-class (Class ID: 62)
        Ship::updateOrCreate(
            ['name' => 'USS Wasp (CV-7)'],
            [
                'class_id' => 62,
                'launch_date' => '1939-04-04',
                'commission_date' => '1940-04-25',
                'displacement' => 14700,
                'length' => 225.6,
                'beam' => 24.6,
                'draft' => 7.1,
                'max_speed' => 29.5,
                'crew' => 1800,
                'fate' => 'Torpedoed and sunk on 15 September 1942 by Japanese submarine I-19',
                'description' => 'Built as a smaller, more economical carrier due to tonnage limitations. She served in the Atlantic and Mediterranean before transferring to the Pacific. She was sunk by torpedoes from I-19 while escorting transports to Guadalcanal. Aircraft Complement: 80-90 aircraft.',
                'is_aircraft_carrier' => true,
            ]
        );

        // 13. USS Independence (CVL-22) - Independence-class (Class ID: 63)
        Ship::updateOrCreate(
            ['name' => 'USS Independence (CVL-22)'],
            [
                'class_id' => 63,
                'launch_date' => '1942-08-22',
                'commission_date' => '1943-01-14',
                'displacement' => 11000,
                'length' => 189.7,
                'beam' => 33.3,
                'draft' => 7.3,
                'max_speed' => 31.5,
                'crew' => 1500,
                'fate' => 'Sunk as a target during Operation Crossroads on 28 July 1946',
                'description' => 'Lead ship of her class, converted from a Cleveland-class light cruiser hull. She served throughout the Pacific, participating in the Gilbert and Marshall Islands campaigns, the Marianas, and Okinawa. Aircraft Complement: 30-35 aircraft.',
                'is_aircraft_carrier' => true,
            ]
        );

        // 14. USS Princeton (CVL-23) - Independence-class (Class ID: 63)
        Ship::updateOrCreate(
            ['name' => 'USS Princeton (CVL-23)'],
            [
                'class_id' => 63,
                'launch_date' => '1942-10-18',
                'commission_date' => '1943-02-25',
                'displacement' => 11000,
                'length' => 189.7,
                'beam' => 33.3,
                'draft' => 7.3,
                'max_speed' => 31.5,
                'crew' => 1500,
                'fate' => 'Scuttled on 24 October 1944 after being heavily damaged by a Japanese dive bomber at the Battle of Leyte Gulf',
                'description' => 'An Independence-class light carrier, she was hit by a Japanese dive bomber during the Battle of Leyte Gulf, causing massive fires and explosions. She was abandoned and scuttled by U.S. cruisers. Aircraft Complement: 30-35 aircraft.',
                'is_aircraft_carrier' => true,
            ]
        );

        // 15. USS Belleau Wood (CVL-24) - Independence-class (Class ID: 63)
        Ship::updateOrCreate(
            ['name' => 'USS Belleau Wood (CVL-24)'],
            [
                'class_id' => 63,
                'launch_date' => '1942-12-06',
                'commission_date' => '1943-03-31',
                'displacement' => 11000,
                'length' => 189.7,
                'beam' => 33.3,
                'draft' => 7.3,
                'max_speed' => 31.5,
                'crew' => 1500,
                'fate' => 'Transferred to France in 1953 as Bois Belleau; scrapped in 1960',
                'description' => 'Named after the Battle of Belleau Wood in WWI. She served extensively in the Pacific, including the Marianas, Leyte Gulf, and Okinawa. Aircraft Complement: 30-35 aircraft.',
                'is_aircraft_carrier' => true,
            ]
        );

        // 16. USS Cowpens (CVL-25) - Independence-class (Class ID: 63)
        Ship::updateOrCreate(
            ['name' => 'USS Cowpens (CVL-25)'],
            [
                'class_id' => 63,
                'launch_date' => '1943-01-17',
                'commission_date' => '1943-05-28',
                'displacement' => 11000,
                'length' => 189.7,
                'beam' => 33.3,
                'draft' => 7.3,
                'max_speed' => 31.5,
                'crew' => 1500,
                'fate' => 'Scrapped in 1960',
                'description' => 'An Independence-class light carrier, she participated in the Gilbert and Marshall Islands campaigns, the Marianas, and the Battle of Leyte Gulf. Aircraft Complement: 30-35 aircraft.',
                'is_aircraft_carrier' => true,
            ]
        );

        // 17. USS Monterey (CVL-26) - Independence-class (Class ID: 63)
        Ship::updateOrCreate(
            ['name' => 'USS Monterey (CVL-26)'],
            [
                'class_id' => 63,
                'launch_date' => '1943-02-28',
                'commission_date' => '1943-06-17',
                'displacement' => 11000,
                'length' => 189.7,
                'beam' => 33.3,
                'draft' => 7.3,
                'max_speed' => 31.5,
                'crew' => 1500,
                'fate' => 'Scrapped in 1970',
                'description' => 'An Independence-class light carrier. Future U.S. President Gerald Ford served aboard her as a gunnery officer during the war. She participated in the Marianas, the Battle of the Philippine Sea, and Okinawa. Aircraft Complement: 30-35 aircraft.',
                'is_aircraft_carrier' => true,
            ]
        );

        // 18. USS Cabot (CVL-28) - Independence-class (Class ID: 63)
        Ship::updateOrCreate(
            ['name' => 'USS Cabot (CVL-28)'],
            [
                'class_id' => 63,
                'launch_date' => '1943-04-04',
                'commission_date' => '1943-07-24',
                'displacement' => 11000,
                'length' => 189.7,
                'beam' => 33.3,
                'draft' => 7.3,
                'max_speed' => 31.5,
                'crew' => 1500,
                'fate' => 'Scrapped in 2002',
                'description' => 'An Independence-class light carrier that served in the Pacific, participating in the Marianas, Iwo Jima, and Okinawa. She was the last surviving Independence-class carrier. Aircraft Complement: 30-35 aircraft.',
                'is_aircraft_carrier' => true,
            ]
        );

        // 19. USS Ranger (CV-4) - Ranger-class (Class ID: 64)
        Ship::updateOrCreate(
            ['name' => 'USS Ranger (CV-4)'],
            [
                'class_id' => 64,
                'launch_date' => '1933-02-25',
                'commission_date' => '1934-06-04',
                'displacement' => 14500,
                'length' => 234.4,
                'beam' => 24.4,
                'draft' => 6.8,
                'max_speed' => 29.3,
                'crew' => 2148,
                'fate' => 'Scrapped in 1947',
                'description' => 'The first U.S. ship designed and built from the keel up as an aircraft carrier. Too slow for Pacific operations, she served primarily in the Atlantic, providing air support for the invasion of North Africa (Operation Torch) and the Normandy landings. Aircraft Complement: 80-86 aircraft.',
                'is_aircraft_carrier' => true,
            ]
        );

        // 20. USS Langley (CV-1) - Langley-class (Class ID: 65)
        Ship::updateOrCreate(
            ['name' => 'USS Langley (CV-1)'],
            [
                'class_id' => 65,
                'launch_date' => '1912-08-14',
                'commission_date' => '1922-03-20',
                'displacement' => 11500,
                'length' => 165.2,
                'beam' => 19.9,
                'draft' => 7.3,
                'max_speed' => 15.5,
                'crew' => 468,
                'fate' => 'Scuttled on 27 February 1942 after being damaged by Japanese aircraft',
                'description' => 'The first aircraft carrier of the U.S. Navy, converted from the collier USS Jupiter. She served as a test platform for carrier aviation. During WWII, she was converted to a seaplane tender (AV-3) and was scuttled after being damaged by Japanese bombers. Aircraft Complement: Up to 30-55 aircraft (as carrier).',
                'is_aircraft_carrier' => true,
            ]
        );

        // 21. USS Midway (CV-41) - Midway-class (Class ID: 66)
        Ship::updateOrCreate(
            ['name' => 'USS Midway (CV-41)'],
            [
                'class_id' => 66,
                'launch_date' => '1945-03-20',
                'commission_date' => '1945-09-10',
                'displacement' => 45000,
                'length' => 295,
                'beam' => 34.4,
                'draft' => 10.9,
                'max_speed' => 33,
                'crew' => 4104,
                'fate' => 'Museum ship since 2003; permanently docked in San Diego, California',
                'description' => 'The lead ship of her class and the largest carrier built during WWII. She was commissioned just after the war ended but served extensively in the Cold War, Korean War, and Vietnam War. She was the longest-serving U.S. aircraft carrier of the 20th century. Aircraft Complement: Up to 100-130 aircraft.',
                'is_aircraft_carrier' => true,
            ]
        );

        // 22. USS Gambier Bay (CVE-73) - Casablanca-class (Class ID: 67)
        Ship::updateOrCreate(
            ['name' => 'USS Gambier Bay (CVE-73)'],
            [
                'class_id' => 67,
                'launch_date' => '1943-11-22',
                'commission_date' => '1943-12-28',
                'displacement' => 7800,
                'length' => 156.1,
                'beam' => 19.9,
                'draft' => 6.9,
                'max_speed' => 19.3,
                'crew' => 860,
                'fate' => 'Sunk on 25 October 1944 during the Battle off Samar',
                'description' => 'A Casablanca-class escort carrier. She was the only U.S. aircraft carrier sunk by enemy naval gunfire in WWII, sunk by the Japanese Center Force at the Battle off Samar. Aircraft Complement: 27 aircraft.',
                'is_aircraft_carrier' => true,
            ]
        );

        // 23. USS St. Lo (CVE-63) - Casablanca-class (Class ID: 67)
        Ship::updateOrCreate(
            ['name' => 'USS St. Lo (CVE-63)'],
            [
                'class_id' => 67,
                'launch_date' => '1943-08-17',
                'commission_date' => '1943-10-23',
                'displacement' => 7800,
                'length' => 156.1,
                'beam' => 19.9,
                'draft' => 6.9,
                'max_speed' => 19.3,
                'crew' => 860,
                'fate' => 'Sunk on 25 October 1944 by a kamikaze attack',
                'description' => 'Originally named USS Midway, she was renamed after the Battle of Midway. She was the first U.S. aircraft carrier to be sunk by a kamikaze attack during the Battle off Samar. Aircraft Complement: 27 aircraft.',
                'is_aircraft_carrier' => true,
            ]
        );

        // 24. USS White Plains (CVE-66) - Casablanca-class (Class ID: 67)
        Ship::updateOrCreate(
            ['name' => 'USS White Plains (CVE-66)'],
            [
                'class_id' => 67,
                'launch_date' => '1943-09-27',
                'commission_date' => '1943-11-15',
                'displacement' => 7800,
                'length' => 156.1,
                'beam' => 19.9,
                'draft' => 6.9,
                'max_speed' => 19.3,
                'crew' => 860,
                'fate' => 'Scrapped in 1958',
                'description' => 'A Casablanca-class escort carrier. She survived the Battle off Samar and participated in the Iwo Jima and Okinawa campaigns. Aircraft Complement: 27 aircraft.',
                'is_aircraft_carrier' => true,
            ]
        );

        // 25. USS Kitkun Bay (CVE-71) - Casablanca-class (Class ID: 67)
        Ship::updateOrCreate(
            ['name' => 'USS Kitkun Bay (CVE-71)'],
            [
                'class_id' => 67,
                'launch_date' => '1943-11-08',
                'commission_date' => '1943-12-15',
                'displacement' => 7800,
                'length' => 156.1,
                'beam' => 19.9,
                'draft' => 6.9,
                'max_speed' => 19.3,
                'crew' => 860,
                'fate' => 'Scrapped in 1946',
                'description' => 'A Casablanca-class escort carrier that participated in the Battle off Samar and the later campaigns in the Pacific. Aircraft Complement: 27 aircraft.',
                'is_aircraft_carrier' => true,
            ]
        );

        // 26. USS Hornet (CV-12) - Essex-class long hull (Class ID: 6)
        Ship::updateOrCreate(
            ['name' => 'USS Hornet (CV-12)'],
            [
                'class_id' => 6,
                'launch_date' => '1943-08-30',
                'commission_date' => '1943-11-29',
                'displacement' => 27100,
                'length' => 265.8,
                'beam' => 28.3,
                'draft' => 8.7,
                'max_speed' => 33,
                'crew' => 3448,
                'fate' => 'Museum ship since 1998; permanently docked at the USS Hornet Museum in Alameda, California',
                'description' => 'Originally named USS Kearsarge, she was renamed in honor of CV-8 (sunk in 1942). Nicknamed "The Grey Ghost," she earned the Presidential Unit Citation and 7 battle stars. She recovered the Apollo 11 and Apollo 12 astronauts upon their return from the Moon. Aircraft Complement: Up to 103 aircraft (1944-1945); typical mix: 36 × F6F Hellcat fighters, 36 × SB2C Helldiver dive bombers, 18 × TBF Avenger torpedo bombers.',
                'is_aircraft_carrier' => true,
            ]
        );

        // ============================================
        // BATTLESHIPS
        // ============================================

        // 27. USS Arizona (BB-39) - Pennsylvania-class (Class ID: 53)
        Ship::updateOrCreate(
            ['name' => 'USS Arizona (BB-39)'],
            [
                'class_id' => 53,
                'launch_date' => '1915-06-19',
                'commission_date' => '1916-10-17',
                'displacement' => 29158,
                'length' => 185.3,
                'beam' => 29.6,
                'draft' => 8.9,
                'max_speed' => 21,
                'crew' => 1385,
                'fate' => 'Sunk during the attack on Pearl Harbor, 7 December 1941. Now a memorial.',
                'description' => 'A Pennsylvania-class "super-dreadnought" battleship, Arizona was commissioned in 1916 and served in World War I as a gunnery training ship. She was modernized in 1929-1931 with new masts, boilers, and turbines. Her most significant historical moment came on 7 December 1941, when a Japanese bomb struck her forward magazine, causing a catastrophic explosion that claimed 1,177 lives. The wreck was not salvaged and remains a war memorial at Pearl Harbor.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 28. USS Missouri (BB-63) - Iowa-class (Class ID: 1)
        Ship::updateOrCreate(
            ['name' => 'USS Missouri (BB-63)'],
            [
                'class_id' => 1,
                'launch_date' => '1944-01-29',
                'commission_date' => '1944-06-11',
                'displacement' => 48110,
                'length' => 270.4,
                'beam' => 33,
                'draft' => 11.5,
                'max_speed' => 33,
                'crew' => 2978,
                'fate' => 'Museum ship since 1999; permanently moored at Pearl Harbor, Hawaii.',
                'description' => 'An Iowa-class battleship, Missouri is the last battleship commissioned by the United States. She served in the Pacific Theater during WWII, participating in the Battles of Iwo Jima and Okinawa. Her quarterdeck was the historic site of the Japanese surrender on 2 September 1945. She later served in the Korean War and was modernized in the 1980s, serving in the Persian Gulf War in 1991 before her final decommissioning in 1992.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 29. USS Iowa (BB-61) - Iowa-class (Class ID: 1)
        Ship::updateOrCreate(
            ['name' => 'USS Iowa (BB-61)'],
            [
                'class_id' => 1,
                'launch_date' => '1942-08-27',
                'commission_date' => '1943-02-22',
                'displacement' => 45000,
                'length' => 270.4,
                'beam' => 33,
                'draft' => 11.3,
                'max_speed' => 33,
                'crew' => 2978,
                'fate' => 'Museum ship since 2012; permanently moored at the Port of Los Angeles, California.',
                'description' => 'Lead ship of her class, Iowa had a unique distinction: she was specially fitted with a bathtub for President Franklin D. Roosevelt, whom she transported to the Casablanca Conference in 1943. She served in the Pacific, earning 11 battle stars. After the war, she served in Korea and was reactivated in the 1980s. A tragic turret explosion in 1989 killed 47 crewmen. She was decommissioned for the final time in 1990.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 30. USS New Jersey (BB-62) - Iowa-class (Class ID: 1)
        Ship::updateOrCreate(
            ['name' => 'USS New Jersey (BB-62)'],
            [
                'class_id' => 1,
                'launch_date' => '1942-12-07',
                'commission_date' => '1943-05-23',
                'displacement' => 48110,
                'length' => 270.4,
                'beam' => 33,
                'draft' => 11.5,
                'max_speed' => 33,
                'crew' => 2978,
                'fate' => 'Museum ship since 2001; permanently moored in Camden, New Jersey.',
                'description' => 'The most decorated battleship in U.S. Navy history, earning 19 battle stars. She participated in nearly all Western Pacific campaigns during WWII, including the Battles of the Philippine Sea, Leyte Gulf, Iwo Jima, and Okinawa. She was the only U.S. battleship to provide gunfire support during the Vietnam War. Nicknamed "Big J" or "Black Dragon," she served as a flagship for Admirals Spruance and Halsey.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 31. USS North Carolina (BB-55) - North Carolina-class (Class ID: 21)
        Ship::updateOrCreate(
            ['name' => 'USS North Carolina (BB-55)'],
            [
                'class_id' => 21,
                'launch_date' => '1940-06-13',
                'commission_date' => '1941-04-09',
                'displacement' => 35000,
                'length' => 222.1,
                'beam' => 33,
                'draft' => 10.8,
                'max_speed' => 28,
                'crew' => 2339,
                'fate' => 'Museum ship since 1962; permanently moored in Wilmington, North Carolina.',
                'description' => 'The lead ship of her class and the first new U.S. battleship built in nearly two decades. Commissioned just months before Pearl Harbor, she entered the Pacific in June 1942 and participated in the Guadalcanal campaign. She earned 15 battle stars, the most of any U.S. battleship.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 32. USS Washington (BB-56) - North Carolina-class (Class ID: 21)
        Ship::updateOrCreate(
            ['name' => 'USS Washington (BB-56)'],
            [
                'class_id' => 21,
                'launch_date' => '1940-06-01',
                'commission_date' => '1941-05-15',
                'displacement' => 35000,
                'length' => 222.1,
                'beam' => 33,
                'draft' => 10.8,
                'max_speed' => 28,
                'crew' => 2300,
                'fate' => 'Sold for scrap on 24 May 1961; broken up.',
                'description' => 'Second of the North Carolina-class. She famously sank the Japanese battleship Kirishima during the Second Naval Battle of Guadalcanal on 14 November 1942, making her the only U.S. battleship to sink an enemy battleship in a one-on-one gun duel.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 33. USS South Dakota (BB-57) - South Dakota-class (Class ID: 54)
        Ship::updateOrCreate(
            ['name' => 'USS South Dakota (BB-57)'],
            [
                'class_id' => 54,
                'launch_date' => '1941-06-07',
                'commission_date' => '1942-03-20',
                'displacement' => 35000,
                'length' => 207.4,
                'beam' => 32.9,
                'draft' => 10.7,
                'max_speed' => 27.5,
                'crew' => 2500,
                'fate' => 'Scrapped in 1962.',
                'description' => 'Lead ship of her class, she was heavily armored and served extensively in the Pacific. She participated in the Battle of the Eastern Solomons and was damaged during the Naval Battle of Guadalcanal. Earning 13 battle stars, she was the first U.S. battleship to bombard the Japanese mainland.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 34. USS West Virginia (BB-48) - Colorado-class (Class ID: 55)
        Ship::updateOrCreate(
            ['name' => 'USS West Virginia (BB-48)'],
            [
                'class_id' => 55,
                'launch_date' => '1921-11-19',
                'commission_date' => '1923-12-01',
                'displacement' => 32600,
                'length' => 190.2,
                'beam' => 29.7,
                'draft' => 9.3,
                'max_speed' => 21,
                'crew' => 1407,
                'fate' => 'Scrapped in 1961.',
                'description' => 'A Colorado-class battleship, she was sunk at Pearl Harbor on 7 December 1941 with the loss of 106 crew. She was salvaged, extensively rebuilt, and rejoined the fleet in 1944. She participated in the Battles of Leyte Gulf and Okinawa, and was present in Tokyo Bay for the Japanese surrender.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 35. USS California (BB-44) - Tennessee-class (Class ID: 56)
        Ship::updateOrCreate(
            ['name' => 'USS California (BB-44)'],
            [
                'class_id' => 56,
                'launch_date' => '1919-11-20',
                'commission_date' => '1921-08-10',
                'displacement' => 32300,
                'length' => 190.2,
                'beam' => 29.7,
                'draft' => 9.3,
                'max_speed' => 21,
                'crew' => 2100,
                'fate' => 'Sold for scrap in 1959.',
                'description' => 'Lead ship of her class, she was sunk at Pearl Harbor on 7 December 1941 with 104 killed. She was salvaged, rebuilt, and returned to service in 1944. She participated in the Battle of Leyte Gulf and the Okinawa campaign, earning 7 battle stars.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 36. USS Tennessee (BB-43) - Tennessee-class (Class ID: 56)
        Ship::updateOrCreate(
            ['name' => 'USS Tennessee (BB-43)'],
            [
                'class_id' => 56,
                'launch_date' => '1919-04-30',
                'commission_date' => '1920-06-03',
                'displacement' => 32300,
                'length' => 190.2,
                'beam' => 29.7,
                'draft' => 9.3,
                'max_speed' => 21,
                'crew' => 2050,
                'fate' => 'Sold for scrap in 1959.',
                'description' => 'Second of the Tennessee-class, she was damaged at Pearl Harbor on 7 December 1941. She was repaired, modernized, and rejoined the fleet in 1943. She participated in the Battles of Leyte Gulf, Iwo Jima, and Okinawa, earning 10 battle stars.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 37. USS Maryland (BB-46) - Colorado-class (Class ID: 55)
        Ship::updateOrCreate(
            ['name' => 'USS Maryland (BB-46)'],
            [
                'class_id' => 55,
                'launch_date' => '1920-03-20',
                'commission_date' => '1921-07-21',
                'displacement' => 32600,
                'length' => 190.2,
                'beam' => 29.7,
                'draft' => 9.3,
                'max_speed' => 21,
                'crew' => 1407,
                'fate' => 'Scrapped in 1959.',
                'description' => 'A Colorado-class battleship, she was damaged by Japanese bombs at Pearl Harbor on 7 December 1941 but was the first ship in her mooring line to be refloated. She participated in the Battles of the Gilbert Islands, the Marshall Islands, the Philippine Sea, and Leyte Gulf, earning 7 battle stars.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 38. USS Pennsylvania (BB-38) - Pennsylvania-class (Class ID: 53)
        Ship::updateOrCreate(
            ['name' => 'USS Pennsylvania (BB-38)'],
            [
                'class_id' => 53,
                'launch_date' => '1915-03-16',
                'commission_date' => '1916-06-12',
                'displacement' => 29158,
                'length' => 185.3,
                'beam' => 29.6,
                'draft' => 8.9,
                'max_speed' => 21,
                'crew' => 2300,
                'fate' => 'Sunk as a target ship in Operation Crossroads on 10 February 1948 after surviving the atomic bomb tests',
                'description' => 'Lead ship of her class, she was the flagship of the U.S. Pacific Fleet at the time of Pearl Harbor and was in dry dock during the attack, suffering minor damage. She participated in the battles of the Aleutian Islands, the Gilbert Islands, the Marshall Islands, the Marianas, Leyte Gulf, and Okinawa. She earned 8 battle stars and was decommissioned in 1946.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 39. USS Nevada (BB-36) - Nevada-class (Class ID: 57)
        Ship::updateOrCreate(
            ['name' => 'USS Nevada (BB-36)'],
            [
                'class_id' => 57,
                'launch_date' => '1914-07-11',
                'commission_date' => '1916-03-11',
                'displacement' => 27500,
                'length' => 177.7,
                'beam' => 29.1,
                'draft' => 8.7,
                'max_speed' => 20.5,
                'crew' => 2200,
                'fate' => 'Scrapped in 1948',
                'description' => 'Lead ship of her class, she was the only battleship to get underway during the Pearl Harbor attack, earning her the nickname "The Gallant Lady." She was heavily damaged but was refloated and rebuilt. She participated in the Normandy landings (Operation Overlord), the invasion of Southern France (Operation Dragoon), and the Battles of Iwo Jima and Okinawa. She earned 7 battle stars.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 40. USS Massachusetts (BB-59) - South Dakota-class (Class ID: 54)
        Ship::updateOrCreate(
            ['name' => 'USS Massachusetts (BB-59)'],
            [
                'class_id' => 54,
                'launch_date' => '1941-09-23',
                'commission_date' => '1942-05-12',
                'displacement' => 35000,
                'length' => 207.3,
                'beam' => 32.9,
                'draft' => 10.7,
                'max_speed' => 27.5,
                'crew' => 2500,
                'fate' => 'Museum ship since 1965; permanently moored at Battleship Cove in Fall River, Massachusetts',
                'description' => 'A South Dakota-class battleship, she is famous for engaging the French battleship Jean Bart during the Naval Battle of Casablanca in November 1942. She also participated in the invasions of North Africa, the Marshall Islands, the Marianas, Iwo Jima, and Okinawa. She earned 11 battle stars.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 41. USS Alabama (BB-60) - South Dakota-class (Class ID: 54)
        Ship::updateOrCreate(
            ['name' => 'USS Alabama (BB-60)'],
            [
                'class_id' => 54,
                'launch_date' => '1942-02-16',
                'commission_date' => '1942-08-16',
                'displacement' => 35000,
                'length' => 207.3,
                'beam' => 32.9,
                'draft' => 10.7,
                'max_speed' => 27.5,
                'crew' => 2500,
                'fate' => 'Museum ship since 1965; permanently moored at Battleship Memorial Park in Mobile, Alabama',
                'description' => 'A South Dakota-class battleship, she served in the Atlantic and Pacific, participating in the Naval Battle of Casablanca, the Battle of the Philippine Sea, and the Battles of Iwo Jima and Okinawa. She earned 9 battle stars.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 42. USS Texas (BB-35) - New York-class (Class ID: 58)
        Ship::updateOrCreate(
            ['name' => 'USS Texas (BB-35)'],
            [
                'class_id' => 58,
                'launch_date' => '1912-05-18',
                'commission_date' => '1914-03-12',
                'displacement' => 27000,
                'length' => 172.2,
                'beam' => 29,
                'draft' => 8.7,
                'max_speed' => 21,
                'crew' => 2000,
                'fate' => 'Museum ship since 1948; permanently moored at San Jacinto State Park, Texas',
                'description' => 'The last surviving dreadnought battleship in the world. She served in both World Wars, participating in the bombardment of Normandy on D-Day (6 June 1944) and later in the Battles of Iwo Jima and Okinawa. She is credited with firing the first American shots of the Normandy invasion. She earned 5 battle stars in WWII.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 43. USS New York (BB-34) - New York-class (Class ID: 58)
        Ship::updateOrCreate(
            ['name' => 'USS New York (BB-34)'],
            [
                'class_id' => 58,
                'launch_date' => '1912-10-30',
                'commission_date' => '1914-05-15',
                'displacement' => 27000,
                'length' => 172.2,
                'beam' => 29,
                'draft' => 8.7,
                'max_speed' => 21,
                'crew' => 2000,
                'fate' => 'Sunk as a target ship during Operation Crossroads on 8 July 1946',
                'description' => 'Lead ship of her class, she served in both World Wars. In WWII, she participated in the invasion of North Africa and the Normandy landings. She survived the atomic bomb tests at Bikini Atoll but was later sunk as a target. She earned 3 battle stars.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 44. USS Arkansas (BB-33) - Wyoming-class (Class ID: 59)
        Ship::updateOrCreate(
            ['name' => 'USS Arkansas (BB-33)'],
            [
                'class_id' => 59,
                'launch_date' => '1911-01-14',
                'commission_date' => '1912-09-17',
                'displacement' => 26000,
                'length' => 171.3,
                'beam' => 28.4,
                'draft' => 8.7,
                'max_speed' => 20.5,
                'crew' => 2000,
                'fate' => 'Sunk as a target ship during Operation Crossroads on 25 July 1946',
                'description' => 'A Wyoming-class battleship, she served in both World Wars. In WWII, she participated in the Normandy landings, the invasion of Southern France, and the Battles of Iwo Jima and Okinawa. She was later used as a target for the atomic bomb tests at Bikini Atoll. She earned 4 battle stars.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 45. USS Colorado (BB-45) - Colorado-class (Class ID: 55)
        Ship::updateOrCreate(
            ['name' => 'USS Colorado (BB-45)'],
            [
                'class_id' => 55,
                'launch_date' => '1921-03-22',
                'commission_date' => '1923-08-30',
                'displacement' => 32600,
                'length' => 190.2,
                'beam' => 29.7,
                'draft' => 9.3,
                'max_speed' => 21,
                'crew' => 2000,
                'fate' => 'Sold for scrap in 1959',
                'description' => 'Lead ship of her class, she was the last U.S. battleship completed with a cage mast. She was not present at Pearl Harbor. She participated in the battles of the Gilbert Islands, the Marshall Islands, the Marianas, Iwo Jima, and Okinawa. She earned 7 battle stars.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 46. USS Idaho (BB-42) - New Mexico-class (Class ID: 60)
        Ship::updateOrCreate(
            ['name' => 'USS Idaho (BB-42)'],
            [
                'class_id' => 60,
                'launch_date' => '1917-06-30',
                'commission_date' => '1919-03-24',
                'displacement' => 32000,
                'length' => 190.2,
                'beam' => 29.7,
                'draft' => 9.3,
                'max_speed' => 21,
                'crew' => 2000,
                'fate' => 'Scrapped in 1947',
                'description' => 'A New Mexico-class battleship, she served as a gunnery training ship during WWI. In WWII, she participated in the Aleutian Islands campaign, the Gilbert and Marshall Islands campaigns, the Philippine Sea, Iwo Jima, and Okinawa. She earned 7 battle stars.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 47. USS Mississippi (BB-41) - New Mexico-class (Class ID: 60)
        Ship::updateOrCreate(
            ['name' => 'USS Mississippi (BB-41)'],
            [
                'class_id' => 60,
                'launch_date' => '1917-01-25',
                'commission_date' => '1917-12-18',
                'displacement' => 32000,
                'length' => 190.2,
                'beam' => 29.7,
                'draft' => 9.3,
                'max_speed' => 21,
                'crew' => 2000,
                'fate' => 'Sold to Argentina in 1951, renamed ARA General Belgrano; sunk in 1982 during the Falklands War',
                'description' => 'A New Mexico-class battleship, she participated in the Battles of the Gilbert Islands, the Marshall Islands, the Marianas, and Okinawa. After WWII, she was sold to Argentina and served as ARA General Belgrano until she was sunk by a British submarine during the Falklands War in 1982.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 48. USS New Mexico (BB-40) - New Mexico-class (Class ID: 60)
        Ship::updateOrCreate(
            ['name' => 'USS New Mexico (BB-40)'],
            [
                'class_id' => 60,
                'launch_date' => '1917-04-13',
                'commission_date' => '1918-05-20',
                'displacement' => 32000,
                'length' => 190.2,
                'beam' => 29.7,
                'draft' => 9.3,
                'max_speed' => 21,
                'crew' => 2000,
                'fate' => 'Scrapped in 1947',
                'description' => 'Lead ship of her class, she was the first U.S. battleship with an electric-powered turret drive and turboelectric drive for her main engine. She participated in the Aleutian Islands campaign, the Gilbert and Marshall Islands campaigns, the Marianas, and Okinawa. She earned 6 battle stars.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 49. USS Oklahoma (BB-37) - Nevada-class (Class ID: 57)
        Ship::updateOrCreate(
            ['name' => 'USS Oklahoma (BB-37)'],
            [
                'class_id' => 57,
                'launch_date' => '1914-03-23',
                'commission_date' => '1916-05-02',
                'displacement' => 27500,
                'length' => 177.7,
                'beam' => 29.1,
                'draft' => 8.7,
                'max_speed' => 20.5,
                'crew' => 1398,
                'fate' => 'Capsized and sank on 7 December 1941 during the attack on Pearl Harbor. Refloated in 1943 and decommissioned in 1944. Sank while under tow to the mainland on 17 May 1947.',
                'description' => 'USS Oklahoma was the second of the Nevada-class battleships and the first U.S. Navy ship with oil-fired boilers. She was one of the U.S. Navy\'s "Standard-type" battleships. During World War I, she escorted convoys in European waters and later escorted President Wilson to France. In 1936, she was sent to Spain to rescue American citizens and other refugees during the Spanish Civil War. She was moored in Battleship Row at Pearl Harbor when Japan attacked on 7 December 1941. She was hit by numerous torpedoes, capsized, and sank within 20 minutes, with 429 crew members killed. She was later righted and salvaged, but deemed too damaged to return to service.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 50. USS Utah (BB-31/AG-16) - Florida-class (Class ID: 68)
        Ship::updateOrCreate(
            ['name' => 'USS Utah (BB-31/AG-16)'],
            [
                'class_id' => 68,
                'launch_date' => '1909-12-23',
                'commission_date' => '1911-08-31',
                'displacement' => 21825,
                'length' => 158.95,
                'beam' => 26.9,
                'draft' => 8.7,
                'max_speed' => 20.75,
                'crew' => 471,
                'fate' => 'Sunk on 7 December 1941 during the attack on Pearl Harbor. Hull was partially righted and remains at Pearl Harbor as a memorial.',
                'description' => 'USS Utah was a Florida-class dreadnought battleship commissioned in 1911. She served in the Atlantic and participated in the Vera Cruz incident in 1914 and World War I. Under the terms of the 1930 London Naval Treaty, she was demilitarized, converted into a radio-controlled target ship, and redesignated AG-16 on 1 July 1931. She also served as an anti-aircraft gunnery training ship. On 7 December 1941, while moored at Pearl Harbor, she was hit by two Japanese torpedoes, rolled over, and sank within 11 minutes, with 58 crew members killed. A memorial was erected near the wreck in 1972.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // CRUISERS
        // ============================================

        // 51. USS Helena (CL-50) - St. Louis-class (Class ID: 76)
        Ship::updateOrCreate(
            ['name' => 'USS Helena (CL-50)'],
            [
                'class_id' => 76,
                'launch_date' => '1939-08-27',
                'commission_date' => '1939-09-18',
                'displacement' => 10000,
                'length' => 185.5,
                'beam' => 18.8,
                'draft' => 6,
                'max_speed' => 33,
                'crew' => 888,
                'fate' => 'Sunk on 5 July 1943 during the Battle of Kula Gulf after being hit by three torpedoes',
                'description' => 'A St. Louis-class light cruiser, she was at Pearl Harbor during the Japanese attack and damaged by a torpedo but survived. She played a key role in the Battles of Cape Esperance and Guadalcanal, and was the first ship to receive the Navy Unit Commendation. Her wreck was discovered in April 2018 by RV Petrel.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 52. USS Boise (CL-47) - Brooklyn-class (Class ID: 75)
        Ship::updateOrCreate(
            ['name' => 'USS Boise (CL-47)'],
            [
                'class_id' => 75,
                'launch_date' => '1936-12-03',
                'commission_date' => '1938-08-12',
                'displacement' => 10000,
                'length' => 185.4,
                'beam' => 18.8,
                'draft' => 5.9,
                'max_speed' => 33.6,
                'crew' => 868,
                'fate' => 'Decommissioned on 1 July 1946; sold to Argentina on 11 January 1951, renamed ARA Nueve de Julio, and served until 1978.',
                'description' => 'A Brooklyn-class light cruiser, she was damaged at the Battle of Cape Esperance in October 1942, suffering 107 killed and 32 wounded. She later served in the Mediterranean, supporting the invasions of Sicily and Italy, and in the Pacific, participating in the Battle of Surigao Strait and supporting the Lingayen Gulf landings.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 53. USS Phoenix (CL-46) - Brooklyn-class (Class ID: 75)
        Ship::updateOrCreate(
            ['name' => 'USS Phoenix (CL-46)'],
            [
                'class_id' => 75,
                'launch_date' => '1938-03-13',
                'commission_date' => '1938-10-03',
                'displacement' => 10000,
                'length' => 185.4,
                'beam' => 18.8,
                'draft' => 5.9,
                'max_speed' => 33.6,
                'crew' => 868,
                'fate' => 'Decommissioned on 3 July 1946; sold to Argentina on 9 April 1951, renamed ARA Diecisiete de Octubre (later ARA General Belgrano). Sunk on 2 May 1982 during the Falklands War by HMS Conqueror.',
                'description' => 'A Brooklyn-class light cruiser, she earned 9 battle stars for WWII service. She participated in numerous Pacific campaigns, including the invasion of the Philippines and the Battle of Leyte Gulf. After the war, she served in the Argentine Navy for over three decades before being sunk during the Falklands War.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 54. USS Atlanta (CL-51) - Atlanta-class (Class ID: 77)
        Ship::updateOrCreate(
            ['name' => 'USS Atlanta (CL-51)'],
            [
                'class_id' => 77,
                'launch_date' => '1941-09-06',
                'commission_date' => '1941-12-24',
                'displacement' => 6000,
                'length' => 165,
                'beam' => 16.1,
                'draft' => 6.3,
                'max_speed' => 33.6,
                'crew' => 673,
                'fate' => 'Scuttled on 13 November 1942 after being heavily damaged during the Naval Battle of Guadalcanal',
                'description' => 'The lead ship of her class, she was designed as a destroyer flotilla leader but proved highly effective as an anti-aircraft cruiser. She participated in the Battles of Midway and the Eastern Solomons. She was sunk at the Naval Battle of Guadalcanal after being hit by a torpedo and friendly fire, with Rear Admiral Norman Scott killed on her bridge. Her wreck rests at a depth of 430 feet in Iron Bottom Sound.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 55. USS Salt Lake City (CA-25) - Pensacola-class (Class ID: 69)
        Ship::updateOrCreate(
            ['name' => 'USS Salt Lake City (CA-25)'],
            [
                'class_id' => 69,
                'launch_date' => '1929-01-23',
                'commission_date' => '1929-12-11',
                'displacement' => 9200,
                'length' => 178.5,
                'beam' => 19.9,
                'draft' => 4.9,
                'max_speed' => 32,
                'crew' => 650,
                'fate' => 'Decommissioned on 29 August 1946; sunk as a target on 25 May 1948',
                'description' => 'A Pensacola-class heavy cruiser, she fought at the Battle of Cape Esperance, the Battle of the Komandorski Islands (where she was damaged but survived), and the Battle of Tassafaronga. She earned 11 battle stars for WWII service.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 56. USS Pensacola (CA-24) - Pensacola-class (Class ID: 69)
        Ship::updateOrCreate(
            ['name' => 'USS Pensacola (CA-24)'],
            [
                'class_id' => 69,
                'launch_date' => '1929-04-25',
                'commission_date' => '1930-02-06',
                'displacement' => 9200,
                'length' => 178.5,
                'beam' => 19.9,
                'draft' => 4.9,
                'max_speed' => 32,
                'crew' => 653,
                'fate' => 'Decommissioned on 26 August 1946; sunk as a target on 10 November 1948',
                'description' => 'The lead ship of her class, she escorted the famous "Pensacola Convoy" to the Philippines when the war began. She was at the Battle of Midway, helped escort Enterprise, and was torpedoed at the Battle of Tassafaronga, suffering 125 casualties. She survived the atomic bomb tests at Bikini Atoll (Operation Crossroads) before being sunk as a target.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 57. USS Northampton (CA-26) - Northampton-class (Class ID: 70)
        Ship::updateOrCreate(
            ['name' => 'USS Northampton (CA-26)'],
            [
                'class_id' => 70,
                'launch_date' => '1929-09-05',
                'commission_date' => '1930-05-17',
                'displacement' => 9200,
                'length' => 182.9,
                'beam' => 20.1,
                'draft' => 5.9,
                'max_speed' => 32.5,
                'crew' => 800,
                'fate' => 'Sunk on 1 December 1942 during the Battle of Tassafaronga after being hit by two torpedoes',
                'description' => 'The lead ship of her class, she escorted USS Enterprise during the Doolittle Raid and participated in the Battle of Midway. She was sunk at the Battle of Tassafaronga, with only 50 crew killed; 775 survivors were rescued.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 58. USS San Diego (CL-53) - Atlanta-class (Class ID: 77)
        Ship::updateOrCreate(
            ['name' => 'USS San Diego (CL-53)'],
            [
                'class_id' => 77,
                'launch_date' => '1941-07-26',
                'commission_date' => '1942-01-10',
                'displacement' => 6000,
                'length' => 165,
                'beam' => 16.1,
                'draft' => 6.3,
                'max_speed' => 33.6,
                'crew' => 673,
                'fate' => 'Decommissioned on 4 November 1946; sold for scrap in December 1946',
                'description' => 'An Atlanta-class light cruiser, she was the most decorated U.S. cruiser of WWII, earning 18 battle stars. She fought in the Pacific from 1942 to 1945.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 59. USS Detroit (CL-8) - Omaha-class (Class ID: 74)
        Ship::updateOrCreate(
            ['name' => 'USS Detroit (CL-8)'],
            [
                'class_id' => 74,
                'launch_date' => '1922-06-29',
                'commission_date' => '1923-07-31',
                'displacement' => 7050,
                'length' => 169.3,
                'beam' => 16.9,
                'draft' => 4.1,
                'max_speed' => 34,
                'crew' => 458,
                'fate' => 'Decommissioned on 11 January 1946; sold for scrap on 27 February 1946.',
                'description' => 'An Omaha-class light cruiser, she was commissioned in 1923 and served in both the Atlantic and Pacific fleets during the interwar period. On 7 December 1941, she was moored at Pearl Harbor and managed to get underway, shooting down several Japanese aircraft. During WWII, she served as a convoy escort in the Pacific, a flagship in the Aleutian Islands campaign, and participated in bombardments of the Kurile Islands in 1944. She was present at the Japanese surrender in Tokyo Bay.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 60. USS San Francisco (CA-38) - New Orleans-class (Class ID: 71)
        Ship::updateOrCreate(
            ['name' => 'USS San Francisco (CA-38)'],
            [
                'class_id' => 71,
                'launch_date' => '1933-03-09',
                'commission_date' => '1934-02-10',
                'displacement' => 9950,
                'length' => 179.2,
                'beam' => 18.8,
                'draft' => 5.9,
                'max_speed' => 32.7,
                'crew' => 1199,
                'fate' => 'Decommissioned on 10 February 1946; sold for scrap on 9 September 1959.',
                'description' => 'A New Orleans-class heavy cruiser, she was one of the most decorated U.S. warships of WWII, earning 17 battle stars and a Presidential Unit Citation. She survived the Pearl Harbor attack and saw extensive action in the Pacific, including the Naval Battle of Guadalcanal where she took 45 direct hits but survived.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 61. USS Indianapolis (CA-35) - Portland-class (Class ID: 70)
        Ship::updateOrCreate(
            ['name' => 'USS Indianapolis (CA-35)'],
            [
                'class_id' => 70,
                'launch_date' => '1931-11-07',
                'commission_date' => '1932-11-15',
                'displacement' => 9950,
                'length' => 186,
                'beam' => 20.1,
                'draft' => 5.3,
                'max_speed' => 32.7,
                'crew' => 1199,
                'fate' => 'Torpedoed and sunk by Japanese submarine I-58 on 30 July 1945.',
                'description' => 'A Portland-class heavy cruiser, she famously delivered the atomic bomb components to Tinian Island in July 1945. On her return voyage, she was torpedoed by a Japanese submarine and sank in 12 minutes. Due to a communication failure, the survivors were not rescued for four days, and only 316 of the 1,199 crew survived.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 62. USS Houston (CA-30) - Northampton-class (Class ID: 70)
        Ship::updateOrCreate(
            ['name' => 'USS Houston (CA-30)'],
            [
                'class_id' => 70,
                'launch_date' => '1929-09-07',
                'commission_date' => '1930-06-17',
                'displacement' => 9050,
                'length' => 182.9,
                'beam' => 20.1,
                'draft' => 7,
                'max_speed' => 32.7,
                'crew' => 1000,
                'fate' => 'Sunk on 1 March 1942 during the Battle of Sunda Strait.',
                'description' => 'A Northampton-class heavy cruiser and flagship of the U.S. Asiatic Fleet, she fought valiantly in the Battle of the Java Sea and was later sunk alongside HMAS Perth in the Battle of Sunda Strait.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 63. USS Astoria (CA-34) - New Orleans-class (Class ID: 71)
        Ship::updateOrCreate(
            ['name' => 'USS Astoria (CA-34)'],
            [
                'class_id' => 71,
                'launch_date' => '1933-12-16',
                'commission_date' => '1934-04-28',
                'displacement' => 9375,
                'length' => 179,
                'beam' => 18.8,
                'draft' => 5.9,
                'max_speed' => 32.7,
                'crew' => 899,
                'fate' => 'Sunk on 9 August 1942 during the Battle of Savo Island.',
                'description' => 'A New Orleans-class heavy cruiser, she escorted aircraft carriers in the early Pacific War, including at the Battles of Coral Sea and Midway. She was sunk on 9 August 1942 during the Battle of Savo Island, the first major naval battle of the Guadalcanal campaign.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 64. USS Quincy (CA-39) - New Orleans-class (Class ID: 71)
        Ship::updateOrCreate(
            ['name' => 'USS Quincy (CA-39)'],
            [
                'class_id' => 71,
                'launch_date' => '1935-06-19',
                'commission_date' => '1936-06-09',
                'displacement' => 9375,
                'length' => 179,
                'beam' => 18.8,
                'draft' => 5.7,
                'max_speed' => 32.7,
                'crew' => 807,
                'fate' => 'Sunk on 9 August 1942 during the Battle of Savo Island.',
                'description' => 'A New Orleans-class heavy cruiser, she served in the Atlantic on Neutrality Patrols before transferring to the Pacific in 1942. She was sunk at the Battle of Savo Island after a fierce engagement with Japanese forces.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 65. USS Vincennes (CA-44) - New Orleans-class (Class ID: 71)
        Ship::updateOrCreate(
            ['name' => 'USS Vincennes (CA-44)'],
            [
                'class_id' => 71,
                'launch_date' => '1936-05-21',
                'commission_date' => '1937-02-24',
                'displacement' => 9400,
                'length' => 179,
                'beam' => 18.8,
                'draft' => 5.7,
                'max_speed' => 32.7,
                'crew' => 866,
                'fate' => 'Sunk on 9 August 1942 during the Battle of Savo Island.',
                'description' => 'A New Orleans-class heavy cruiser, she escorted USS Hornet (CV-8) during the Doolittle Raid in April 1942 and also participated in the Battle of Midway. She was sunk on 9 August 1942 during the Battle of Savo Island, taking 85 hits before sinking.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 66. USS Chester (CA-27) - Northampton-class (Class ID: 70)
        Ship::updateOrCreate(
            ['name' => 'USS Chester (CA-27)'],
            [
                'class_id' => 70,
                'launch_date' => '1929-07-03',
                'commission_date' => '1930-06-24',
                'displacement' => 9300,
                'length' => 183,
                'beam' => 20,
                'draft' => 7,
                'max_speed' => 32,
                'crew' => 700,
                'fate' => 'Sold for scrap on 11 August 1959',
                'description' => 'A Northampton-class heavy cruiser, she was at sea during the Pearl Harbor attack. She suffered her first casualties when a bomb struck her well deck during operations in the Marshall Islands. On 20 October 1942, she was torpedoed by Japanese submarine I-176 but survived and made her own way to Espiritu Santo for repairs. She participated in bombardments of the Kurile Islands, Iwo Jima, and Okinawa, and earned 11 battle stars for her WWII service.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 67. USS Louisville (CA-28) - Northampton-class (Class ID: 70)
        Ship::updateOrCreate(
            ['name' => 'USS Louisville (CA-28)'],
            [
                'class_id' => 70,
                'launch_date' => '1930-09-01',
                'commission_date' => '1931-01-15',
                'displacement' => 9300,
                'length' => 183,
                'beam' => 20,
                'draft' => 7,
                'max_speed' => 32,
                'crew' => 700,
                'fate' => 'Decommissioned 17 June 1946; struck 1 March 1959; sold 14 September 1959 for scrap',
                'description' => 'She built at Puget Sound Navy Yard and earned 13 battle stars for WWII service. She served throughout WWII and participated in the Aleutian Islands campaign. She was decommissioned after the war.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 68. USS Chicago (CA-29) - Northampton-class (Class ID: 70)
        Ship::updateOrCreate(
            ['name' => 'USS Chicago (CA-29)'],
            [
                'class_id' => 70,
                'launch_date' => '1930-04-10',
                'commission_date' => '1931-03-09',
                'displacement' => 9300,
                'length' => 183,
                'beam' => 20.1,
                'draft' => 5,
                'max_speed' => 32,
                'crew' => 800,
                'fate' => 'Sunk on 30 January 1943 during the Battle of Rennell Island after being hit by four torpedoes',
                'description' => 'A Northampton-class heavy cruiser, she was at sea during the Pearl Harbor attack. She participated in the Battle of the Coral Sea and was lightly damaged. At the Battle of Savo Island, she was hit by a torpedo, causing minor damage. On 29 January 1943, during the Battle of Rennell Island, she was hit by two torpedoes and taken under tow. The next day, she was hit by four more torpedoes and sank. She earned three battle stars.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 69. USS New Orleans (CA-32) - New Orleans-class (Class ID: 71)
        Ship::updateOrCreate(
            ['name' => 'USS New Orleans (CA-32)'],
            [
                'class_id' => 71,
                'launch_date' => '1933-04-12',
                'commission_date' => '1934-02-15',
                'displacement' => 9975,
                'length' => 179,
                'beam' => 18.8,
                'draft' => 5.9,
                'max_speed' => 32.7,
                'crew' => 866,
                'fate' => 'Sold for scrap on 1 March 1959',
                'description' => 'A New Orleans-class heavy cruiser, she was moored at Pearl Harbor during the attack and her anti-aircraft guns were in action within ten minutes. She participated in the Battles of Coral Sea and Midway, rescuing survivors from USS Lexington. On 30 November 1942, during the Battle of Tassafaronga, she was struck by a torpedo that tore away her bow, but she remained afloat and entered Tulagi Harbor under her own power. She received a new bow and returned to action in September 1943, earning 16 battle stars.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 70. USS Minneapolis (CA-36) - New Orleans-class (Class ID: 71)
        Ship::updateOrCreate(
            ['name' => 'USS Minneapolis (CA-36)'],
            [
                'class_id' => 71,
                'launch_date' => '1933-09-06',
                'commission_date' => '1934-05-19',
                'displacement' => 9975,
                'length' => 179,
                'beam' => 18.8,
                'draft' => 5.9,
                'max_speed' => 32.7,
                'crew' => 866,
                'fate' => 'Scrapped after WWII',
                'description' => 'She lost her original bow in the Battle of Tassafaronga on 30 November 1942. She was fitted with a new bow at Pearl Harbor Navy Yard on 11 April 1943.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 71. USS Tuscaloosa (CA-37) - New Orleans-class (Class ID: 71)
        Ship::updateOrCreate(
            ['name' => 'USS Tuscaloosa (CA-37)'],
            [
                'class_id' => 71,
                'launch_date' => '1933-11-15',
                'commission_date' => '1934-08-17',
                'displacement' => 9975,
                'length' => 179,
                'beam' => 18.82,
                'draft' => 5.92,
                'max_speed' => 32.7,
                'crew' => 866,
                'fate' => 'Sold for scrap on 25 June 1959',
                'description' => 'A New Orleans-class heavy cruiser, she spent most of her career in the Atlantic and Caribbean, participating in several European wartime operations. In early 1945, she transferred to the Pacific and assisted in shore bombardment of Iwo Jima and Okinawa. Never damaged in battle, she earned 7 battle stars.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 72. USS Wichita (CA-45) - Wichita-class (Class ID: 72)
        Ship::updateOrCreate(
            ['name' => 'USS Wichita (CA-45)'],
            [
                'class_id' => 72,
                'launch_date' => '1937-11-16',
                'commission_date' => '1939-02-16',
                'displacement' => 10000,
                'length' => 185.4,
                'beam' => 18.8,
                'draft' => 6,
                'max_speed' => 32.5,
                'crew' => 929,
                'fate' => 'Scrapped after WWII',
                'description' => 'The first and only ship of her class, Wichita was a one-off design that served as a bridge between the New Orleans-class and the later Baltimore-class heavy cruisers.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 73. USS Baltimore (CA-68) - Baltimore-class (Class ID: 73)
        Ship::updateOrCreate(
            ['name' => 'USS Baltimore (CA-68)'],
            [
                'class_id' => 73,
                'launch_date' => '1942-07-28',
                'commission_date' => '1943-04-15',
                'displacement' => 13600,
                'length' => 205,
                'beam' => 21.6,
                'draft' => 6.25,
                'max_speed' => 33,
                'crew' => 1142,
                'fate' => 'Struck from Navy list on 15 February 1971',
                'description' => 'The lead ship of her class, she was commissioned in 1943. She served in the Pacific, protecting fast carrier task groups as they launched strikes against Japanese positions in the Philippines. She later served in the Korean War.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 74. USS Boston (CA-69) - Baltimore-class (Class ID: 73)
        Ship::updateOrCreate(
            ['name' => 'USS Boston (CA-69)'],
            [
                'class_id' => 73,
                'launch_date' => '1942-08-26',
                'commission_date' => '1943-06-30',
                'displacement' => 13600,
                'length' => 205,
                'beam' => 21.6,
                'draft' => 6.25,
                'max_speed' => 33,
                'crew' => 1142,
                'fate' => 'Decommissioned 29 October 1946; recommissioned as guided missile cruiser on 1 November 1955; decommissioned 5 May 1970; sold for scrap 28 March 1975',
                'description' => 'A Baltimore-class heavy cruiser, she was later converted into a guided missile cruiser (CAG-1).',
                'is_aircraft_carrier' => false,
            ]
        );

        // 75. USS Canberra (CA-70) - Baltimore-class (Class ID: 73)
        Ship::updateOrCreate(
            ['name' => 'USS Canberra (CA-70)'],
            [
                'class_id' => 73,
                'launch_date' => '1943-04-19',
                'commission_date' => '1943-10-14',
                'displacement' => 13600,
                'length' => 205,
                'beam' => 21.6,
                'draft' => 6.25,
                'max_speed' => 33,
                'crew' => 1142,
                'fate' => 'Sold for scrap on 31 July 1980',
                'description' => 'Originally named USS Pittsburgh, she was renamed to honor the Australian heavy cruiser HMAS Canberra, which was sunk at the Battle of Savo Island. She is the only U.S. Navy ship named after a foreign warship and a foreign city. She was torpedoed during the Taiwan Air Battle in October 1944 and returned to the U.S. for repairs. Later converted into a guided missile cruiser (CAG-2).',
                'is_aircraft_carrier' => false,
            ]
        );

        // 76. USS Juneau (CL-52) - Atlanta-class (Class ID: 77)
        Ship::updateOrCreate(
            ['name' => 'USS Juneau (CL-52)'],
            [
                'class_id' => 77,
                'launch_date' => '1941-10-25',
                'commission_date' => '1942-02-14',
                'displacement' => 6000,
                'length' => 165,
                'beam' => 16.2,
                'draft' => 5,
                'max_speed' => 32,
                'crew' => 623,
                'fate' => 'Sunk on 13 November 1942 during the Naval Battle of Guadalcanal',
                'description' => 'An Atlanta-class light cruiser, she was sunk at the Naval Battle of Guadalcanal. She was the ship on which the five Sullivan brothers served; all were killed when she went down. Their deaths led to the Sullivan Family policy. Her wreck was discovered in March 2018 by RV Petrel.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 77. USS San Juan (CL-54) - Atlanta-class (Class ID: 77)
        Ship::updateOrCreate(
            ['name' => 'USS San Juan (CL-54)'],
            [
                'class_id' => 77,
                'launch_date' => '1941-09-06',
                'commission_date' => '1942-02-28',
                'displacement' => 6000,
                'length' => 165,
                'beam' => 16.2,
                'draft' => 6.35,
                'max_speed' => 31.8,
                'crew' => 820,
                'fate' => 'Sold for scrap on 31 October 1961',
                'description' => 'An Atlanta-class light cruiser, she provided gunfire support for the landings at Tulagi and served as an escort for carriers in the Pacific. She survived the Battle of Santa Cruz Islands with damage when a bomb passed through her stern. She later liberated Allied prisoners of war in Japan and earned 13 battle stars.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 78. USS Savannah (CL-42) - Brooklyn-class (Class ID: 75)
        Ship::updateOrCreate(
            ['name' => 'USS Savannah (CL-42)'],
            [
                'class_id' => 75,
                'launch_date' => '1937-05-08',
                'commission_date' => '1938-03-10',
                'displacement' => 9475,
                'length' => 185.3,
                'beam' => 18.8,
                'draft' => 5.8,
                'max_speed' => 32,
                'crew' => 868,
                'fate' => 'Scrapped after WWII',
                'description' => 'A Brooklyn-class light cruiser, she served in the Atlantic and Mediterranean. She was one of the cruisers that participated in the naval battles of the European theater and supported Allied landings in Italy and Southern France.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 79. USS Honolulu (CL-48) - Brooklyn-class (Class ID: 75)
        Ship::updateOrCreate(
            ['name' => 'USS Honolulu (CL-48)'],
            [
                'class_id' => 75,
                'launch_date' => '1937-08-26',
                'commission_date' => '1938-06-15',
                'displacement' => 9650,
                'length' => 185.4,
                'beam' => 18.8,
                'draft' => 5.9,
                'max_speed' => 33,
                'crew' => 868,
                'fate' => 'Sold for scrap on 17 November 1949',
                'description' => 'A Brooklyn-class light cruiser, she was moored at Pearl Harbor during the attack and suffered light damage from a near miss. Nicknamed "Blue Goose," she participated in the Aleutian Islands campaign. She survived the Battle of Tassafaronga undamaged and was torpedoed at the Battle of Kolombangara but survived. Later, at the Leyte landings, she was hit by a torpedo and beached for emergency repairs. She earned eight battle stars.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 80. USS St. Louis (CL-49) - St. Louis-class (Class ID: 76)
        Ship::updateOrCreate(
            ['name' => 'USS St. Louis (CL-49)'],
            [
                'class_id' => 76,
                'launch_date' => '1938-04-15',
                'commission_date' => '1939-05-19',
                'displacement' => 10000,
                'length' => 185.4,
                'beam' => 18.8,
                'draft' => 6,
                'max_speed' => 33,
                'crew' => 888,
                'fate' => 'Sold for scrap after WWII',
                'description' => 'A St. Louis-class light cruiser, she was at Pearl Harbor during the Japanese attack and successfully got underway and cleared the harbor, pursued by a Japanese midget submarine. She participated in the Aleutian Islands campaign, the Battle of Kolombangara (where she was torpedoed), and the Marianas campaign. She earned battle stars for her service.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 81. USS Raleigh (CL-7) - Omaha-class (Class ID: 74)
        Ship::updateOrCreate(
            ['name' => 'USS Raleigh (CL-7)'],
            [
                'class_id' => 74,
                'launch_date' => '1922-10-25',
                'commission_date' => '1924-02-06',
                'displacement' => 7050,
                'length' => 169.3,
                'beam' => 16.9,
                'draft' => 4.1,
                'max_speed' => 34,
                'crew' => 458,
                'fate' => 'Decommissioned on 2 November 1945; sold for scrap on 27 February 1946',
                'description' => 'An Omaha-class light cruiser, she was in drydock at Pearl Harbor during the Japanese attack on 7 December 1941. She was hit by a torpedo but survived, she earned 3 battle stars. She later participated in the Aleutian Islands campaign and earned battle stars for her WWII service.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 82. USS Birmingham (CL-62) - Cleveland-class (Class ID: 76)
        Ship::updateOrCreate(
            ['name' => 'USS Birmingham (CL-62)'],
            [
                'class_id' => 76,
                'launch_date' => '1942-03-20',
                'commission_date' => '1943-01-29',
                'displacement' => 10000,
                'length' => 185.9,
                'beam' => 20.2,
                'draft' => 7.5,
                'max_speed' => 32.5,
                'crew' => 1285,
                'fate' => 'Decommissioned 2 January 1947; sold for scrap 12 November 1959',
                'description' => 'A Cleveland-class light cruiser, she may have been one of the unluckiest ships of her class. On 8 November 1943, she was torpedoed and bombed during operations off Bougainville. On 24 October 1944, she was severely damaged by an explosion on USS Princeton (CVL-23) at the Battle of Leyte Gulf, suffering 237 killed and 426 injured. On 4 May 1945, she was struck by a kamikaze at Okinawa, causing 51 killed and 81 wounded. She earned 8 battle stars for her WWII service.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // DESTROYERS
        // ============================================

        // 83. USS Sims (DD-409) - Sims-class (Class ID: 83)
        Ship::updateOrCreate(
            ['name' => 'USS Sims (DD-409)'],
            [
                'class_id' => 83,
                'launch_date' => '1939-04-08',
                'commission_date' => '1939-08-01',
                'displacement' => 1570,
                'length' => 106.15,
                'beam' => 11,
                'draft' => 4.07,
                'max_speed' => 35,
                'crew' => 192,
                'fate' => 'Sunk by Japanese aircraft on 7 May 1942 during the Battle of the Coral Sea',
                'description' => 'Lead ship of her class, built by Bath Iron Works. On 7 May 1942, while escorting the oiler USS Neosho, she was attacked by Japanese dive bombers from the carrier Shōkaku, which misidentified the oiler as a carrier. She was hit by at least three bombs, broke in two, and sank rapidly. Only 14 of her crew survived.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 84. USS Hammann (DD-412) - Sims-class (Class ID: 83)
        Ship::updateOrCreate(
            ['name' => 'USS Hammann (DD-412)'],
            [
                'class_id' => 83,
                'launch_date' => '1939-02-04',
                'commission_date' => '1939-08-11',
                'displacement' => 1570,
                'length' => 106,
                'beam' => 11,
                'draft' => 4,
                'max_speed' => 35,
                'crew' => 192,
                'fate' => 'Torpedoed and sunk on 6 June 1942 during the Battle of Midway',
                'description' => 'Built by Federal Shipbuilding and Drydock Company. Served in the Atlantic before transferring to the Pacific in early 1942. Participated in the Battle of the Coral Sea, rescuing 500 survivors from USS Lexington. At the Battle of Midway (4-7 June), she was sunk while alongside USS Yorktown providing damage control support. She was hit by a torpedo from submarine I-168, broke in half, and sank in four minutes; depth charge explosions killed many survivors. 80 of her crew were lost.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 85. USS Shaw (DD-373) - Mahan-class (Class ID: 80)
        Ship::updateOrCreate(
            ['name' => 'USS Shaw (DD-373)'],
            [
                'class_id' => 80,
                'launch_date' => '1935-10-28',
                'commission_date' => '1936-09-18',
                'displacement' => 1500,
                'length' => 104,
                'beam' => 10.8,
                'draft' => 2.9,
                'max_speed' => 36.5,
                'crew' => 158,
                'fate' => 'Sold for scrap in July 1946',
                'description' => 'USS Shaw was a Mahan-class destroyer. During the attack on Pearl Harbor on 7 December 1941, she was in drydock YFD-2 with her bow blown off by three bombs. The forward ammunition magazines detonated in a spectacular blast, completely removing the bow. She was given a temporary bow at Pearl Harbor and steamed to Mare Island Navy Yard for a permanent replacement, returning to service in August 1942. She served throughout the Pacific war.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 86. USS O'Bannon (DD-450) - Fletcher-class (Class ID: 7)
        Ship::updateOrCreate(
            ['name' => 'USS O\'Bannon (DD-450)'],
            [
                'class_id' => 7,
                'launch_date' => '1942-02-19',
                'commission_date' => '1942-06-26',
                'displacement' => 2050,
                'length' => 114.7,
                'beam' => 12,
                'draft' => 5.3,
                'max_speed' => 36.5,
                'crew' => 329,
                'fate' => 'Decommissioned in 1970; scrapped',
                'description' => 'A Fletcher-class destroyer, she received the Presidential Unit Citation for valiant service during the Guadalcanal campaign and earned 17 battle stars for WWII and 3 more for the Korean War, while O\'Bannon is highly decorated, Nicholas holds the record for the most battle stars among destroyers (30). She attacked the Japanese battleship Hiei and participated in numerous Pacific campaigns. She later served in the Korean and Vietnam Wars.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 87. USS Johnston (DD-557) - Fletcher-class (Class ID: 7)
        Ship::updateOrCreate(
            ['name' => 'USS Johnston (DD-557)'],
            [
                'class_id' => 7,
                'launch_date' => '1943-03-25',
                'commission_date' => '1943-10-27',
                'displacement' => 2050,
                'length' => 114.7,
                'beam' => 12,
                'draft' => 5.3,
                'max_speed' => 36.5,
                'crew' => 329,
                'fate' => 'Sunk on 25 October 1944 during the Battle off Samar',
                'description' => 'A Fletcher-class destroyer, she was commanded by Lieutenant Commander Ernest E. Evans. She was sunk during the Battle off Samar while valiantly defending the escort carrier task force from a superior Japanese force, contributing to the Japanese fleet being turned away. Her wreck was found in March 2021 at a depth of 21,180 feet, making it the deepest shipwreck ever discovered at the time (2021).',
                'is_aircraft_carrier' => false,
            ]
        );

        // 88. USS Hoel (DD-533) - Fletcher-class (Class ID: 7)
        Ship::updateOrCreate(
            ['name' => 'USS Hoel (DD-533)'],
            [
                'class_id' => 7,
                'launch_date' => '1942-12-19',
                'commission_date' => '1943-07-29',
                'displacement' => 2050,
                'length' => 115,
                'beam' => 12,
                'draft' => 4,
                'max_speed' => 36,
                'crew' => 336,
                'fate' => 'Sunk on 25 October 1944 during the Battle off Samar',
                'description' => 'A Fletcher-class destroyer, she was named for Civil War hero William R. Hoel. She participated in the Gilbert Islands campaign and rescued survivors from the escort carrier USS Liscome Bay after it was torpedoed and sunk in November 1943. She was sunk during the Battle off Samar in October 1944.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 89. USS Heermann (DD-532) - Fletcher-class (Class ID: 7)
        Ship::updateOrCreate(
            ['name' => 'USS Heermann (DD-532)'],
            [
                'class_id' => 7,
                'launch_date' => '1942-12-05',
                'commission_date' => '1943-07-06',
                'displacement' => 2050,
                'length' => 114.7,
                'beam' => 12,
                'draft' => 5.3,
                'max_speed' => 36.5,
                'crew' => 329,
                'fate' => 'Transferred to Argentina in 1961, renamed ARA Almirante Brown; scrapped in 1982',
                'description' => 'A Fletcher-class destroyer, she served during WWII and was decommissioned in 1946. She was recommissioned in 1951 and served during the Korean War. She was transferred to the Argentine Navy in 1961 and scrapped in 1982.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 90. USS Laffey (DD-724) - Allen M. Sumner-class (Class ID: 85)
        Ship::updateOrCreate(
            ['name' => 'USS Laffey (DD-724)'],
            [
                'class_id' => 85,
                'launch_date' => '1943-11-21',
                'commission_date' => '1944-02-08',
                'displacement' => 2200,
                'length' => 114.8,
                'beam' => 12.5,
                'draft' => 4.8,
                'max_speed' => 34,
                'crew' => 336,
                'fate' => 'Museum ship since 1981; permanently docked at Patriots Point, Mount Pleasant, South Carolina',
                'description' => 'An Allen M. Sumner-class destroyer, she earned the nickname "The Ship That Would Not Die" for surviving extensive damage from kamikaze attacks off Okinawa. She participated in the Normandy landings on D-Day and survived atomic bomb tests at Bikini Atoll. She was designated a National Historic Landmark in 1986.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 91. USS Aaron Ward (DD-483) - Gleaves-class (Class ID: 84)
        Ship::updateOrCreate(
            ['name' => 'USS Aaron Ward (DD-483)'],
            [
                'class_id' => 84,
                'launch_date' => '1941-11-22',
                'commission_date' => '1942-03-04',
                'displacement' => 1630,
                'length' => 106.1,
                'beam' => 11,
                'draft' => 5.3,
                'max_speed' => 35,
                'crew' => 276,
                'fate' => 'Sunk on 7 April 1943 after being bombed by Japanese aircraft off Guadalcanal',
                'description' => 'A Gleaves-class destroyer, she served as a screening ship at Guadalcanal. On 7 April 1943, she was attacked by Japanese dive bombers, suffering severe damage. She sank later that day despite attempts to beach her, with 20 crew killed and 59 wounded.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 92. USS Fletcher (DD-445) - Fletcher-class (Class ID: 7)
        Ship::updateOrCreate(
            ['name' => 'USS Fletcher (DD-445)'],
            [
                'class_id' => 7,
                'launch_date' => '1942-05-03',
                'commission_date' => '1942-06-30',
                'displacement' => 2050,
                'length' => 114.7,
                'beam' => 12,
                'draft' => 5.3,
                'max_speed' => 36.5,
                'crew' => 329,
                'fate' => 'Sold for scrap in February 1972',
                'description' => 'The lead ship of her class, the largest destroyer class in U.S. Navy history with 175 ships built. She participated in the Guadalcanal Campaign, the Naval Battle of Guadalcanal, and the Gilbert and Marshall Islands campaigns. She was recommissioned during the Korean War and later decommissioned in 1969.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 93. USS Nicholas (DD-449) - Fletcher-class (Class ID: 7)
        Ship::updateOrCreate(
            ['name' => 'USS Nicholas (DD-449)'],
            [
                'class_id' => 7,
                'launch_date' => '1942-02-19',
                'commission_date' => '1942-06-04',
                'displacement' => 2050,
                'length' => 114.7,
                'beam' => 12,
                'draft' => 5.3,
                'max_speed' => 36.5,
                'crew' => 329,
                'fate' => 'Sold for scrap in 1970',
                'description' => 'A Fletcher-class destroyer, she received the Presidential Unit Citation and 30 battle stars for WWII and Korean War service. She was decommissioned in 1970 alongside her sister ship O\'Bannon at Pearl Harbor. She was the first Fletcher-class destroyer to be commissioned (4 June 1942) and the last to be decommissioned (1970).',
                'is_aircraft_carrier' => false,
            ]
        );

        // 94. USS Porter (DD-356) - Porter-class (Class ID: 79)
        Ship::updateOrCreate(
            ['name' => 'USS Porter (DD-356)'],
            [
                'class_id' => 79,
                'launch_date' => '1935-12-12',
                'commission_date' => '1936-08-25',
                'displacement' => 1850,
                'length' => 116.1,
                'beam' => 11,
                'draft' => 3.2,
                'max_speed' => 35,
                'crew' => 238,
                'fate' => 'Sunk on 26 October 1942 during the Battle of the Santa Cruz Islands',
                'description' => 'The lead ship of her class, she was torpedoed by a submarine during the Battle of the Santa Cruz Islands. After the crew abandoned ship, she was sunk by gunfire from USS Shaw. She earned one battle star.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 95. USS Selfridge (DD-357) - Porter-class (Class ID: 79)
        Ship::updateOrCreate(
            ['name' => 'USS Selfridge (DD-357)'],
            [
                'class_id' => 79,
                'launch_date' => '1936-04-18',
                'commission_date' => '1936-11-25',
                'displacement' => 1805,
                'length' => 115.98,
                'beam' => 11.02,
                'draft' => 3.12,
                'max_speed' => 37,
                'crew' => 206,
                'fate' => 'Sold for scrap in October 1947',
                'description' => 'A Porter-class destroyer. She was at Pearl Harbor during the attack but was not damaged. She participated in the Guadalcanal campaign and was torpedoed at the Battle of Vella Lavella in 1943. After repairs, she served in the Pacific before transferring to the Atlantic in late 1944. She earned four battle stars.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 96. USS Phelps (DD-360) - Porter-class (Class ID: 79)
        Ship::updateOrCreate(
            ['name' => 'USS Phelps (DD-360)'],
            [
                'class_id' => 79,
                'launch_date' => '1935-07-18',
                'commission_date' => '1936-02-26',
                'displacement' => 1805,
                'length' => 116,
                'beam' => 11,
                'draft' => 3.1,
                'max_speed' => 37,
                'crew' => 276,
                'fate' => 'Scrapped in 1947',
                'description' => 'A Porter-class destroyer, she shot down a Japanese plane at Pearl Harbor during the attack. She helped sink USS Lexington (CV-2) to prevent her capture at the Battle of the Coral Sea. She participated in the Battle of Midway, the Guadalcanal campaign, the Aleutian Islands campaign, and the Marshall Islands and Marianas campaigns. She earned twelve battle stars.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 97. USS Clark (DD-361) - Porter-class (Class ID: 79)
        Ship::updateOrCreate(
            ['name' => 'USS Clark (DD-361)'],
            [
                'class_id' => 79,
                'launch_date' => '1935-10-15',
                'commission_date' => '1936-05-20',
                'displacement' => 1850,
                'length' => 116.1,
                'beam' => 11,
                'draft' => 3.2,
                'max_speed' => 35,
                'crew' => 238,
                'fate' => 'Scrapped in 1946',
                'description' => 'A Porter-class destroyer, she served throughout WWII. She was decommissioned on 23 October 1945 and sold for scrap on 29 March 1946.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 98. USS Mugford (DD-389) - Gridley-class (Class ID: 81)
        Ship::updateOrCreate(
            ['name' => 'USS Mugford (DD-389)'],
            [
                'class_id' => 81,
                'launch_date' => '1936-10-31',
                'commission_date' => '1937-08-16',
                'displacement' => 1500,
                'length' => 104.1,
                'beam' => 10.6,
                'draft' => 3,
                'max_speed' => 36.5,
                'crew' => 200,
                'fate' => 'Scuttled on 25 March 1948 after being used as a target in Operation Crossroads',
                'description' => 'A Gridley-class destroyer, she shot down three Japanese planes during the attack on Pearl Harbor. She participated in the Guadalcanal campaign and later served as a target ship for Operation Crossroads nuclear tests in 1946. She was scuttled at sea on 25 March 1948.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 99. USS Jarvis (DD-393) - Bagley-class (Class ID: 82)
        Ship::updateOrCreate(
            ['name' => 'USS Jarvis (DD-393)'],
            [
                'class_id' => 82,
                'launch_date' => '1937-05-06',
                'commission_date' => '1937-10-27',
                'displacement' => 1500,
                'length' => 104.1,
                'beam' => 10.6,
                'draft' => 3,
                'max_speed' => 36.5,
                'crew' => 200,
                'fate' => 'Sunk on 9 August 1942 during the Battle of Savo Island by Japanese aircraft',
                'description' => 'A Bagley-class destroyer, she was the sister ship of USS Mugford. She was sunk during the Battle of Savo Island at Guadalcanal.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 100. USS Downes (DD-375) - Mahan-class (Class ID: 80)
        Ship::updateOrCreate(
            ['name' => 'USS Downes (DD-375)'],
            [
                'class_id' => 80,
                'launch_date' => '1936-04-22',
                'commission_date' => '1937-01-15',
                'displacement' => 1500,
                'length' => 104,
                'beam' => 10.8,
                'draft' => 2.9,
                'max_speed' => 36.5,
                'crew' => 158,
                'fate' => 'Sold for scrap in November 1947',
                'description' => 'A Mahan-class destroyer, she was in drydock with USS Cassin at Pearl Harbor during the attack. Both were hit by Japanese bombs and heavily damaged. She was rebuilt and returned to service in November 1943, serving in the Pacific for the remainder of the war.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 101. USS Cassin (DD-372) - Mahan-class (Class ID: 80)
        Ship::updateOrCreate(
            ['name' => 'USS Cassin (DD-372)'],
            [
                'class_id' => 80,
                'launch_date' => '1935-10-28',
                'commission_date' => '1936-08-21',
                'displacement' => 1500,
                'length' => 104,
                'beam' => 10.8,
                'draft' => 2.9,
                'max_speed' => 36.5,
                'crew' => 158,
                'fate' => 'Sold for scrap in 1947',
                'description' => 'A Mahan-class destroyer, she was in drydock with USS Downes at Pearl Harbor during the attack. Both were heavily damaged. She was rebuilt and returned to service in 1944, earning 4 battle stars.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 102. USS Farragut (DD-348) - Farragut-class (Class ID: 78)
        Ship::updateOrCreate(
            ['name' => 'USS Farragut (DD-348)'],
            [
                'class_id' => 78,
                'launch_date' => '1934-03-15',
                'commission_date' => '1934-06-18',
                'displacement' => 1365,
                'length' => 104,
                'beam' => 10.4,
                'draft' => 4.93,
                'max_speed' => 37,
                'crew' => 160,
                'fate' => 'Decommissioned 23 October 1945; sold for scrap 14 August 1947',
                'description' => 'Lead ship of her class, she was the first U.S. destroyer built in nearly 14 years. She carried President Franklin D. Roosevelt on a cruise to the Bahamas in 1935. At Pearl Harbor on 7 December 1941, she was moored in a nest of destroyers; Ensign James Benham got her underway and kept up steady fire, earning a Bronze Star. She fought in the Battle of the Coral Sea, the Battle of the Eastern Solomons, the Aleutian Islands campaign, and the invasions of Kwajalein, Saipan, and Guam. She earned 14 battle stars for WWII service.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 103. USS Dewey (DD-349) - Farragut-class (Class ID: 78)
        Ship::updateOrCreate(
            ['name' => 'USS Dewey (DD-349)'],
            [
                'class_id' => 78,
                'launch_date' => '1934-07-28',
                'commission_date' => '1934-10-04',
                'displacement' => 1726,
                'length' => 104,
                'beam' => 10.4,
                'draft' => 3.12,
                'max_speed' => 36,
                'crew' => 160,
                'fate' => 'Decommissioned 19 October 1945; sold for scrap 20 December 1946',
                'description' => 'Named for Admiral George Dewey. At Pearl Harbor on 7 December 1941, she was undergoing tender overhaul and opened fire on Japanese planes. She escorted USS Lexington (CV-2) and rescued 112 survivors after the carrier sank at the Battle of the Coral Sea. She fought at the Battle of Midway, the Battle of the Eastern Solomons, and supported the Guadalcanal, Attu, and Kiska landings. In Typhoon Cobra on 18 December 1944, she nearly capsized but survived by jettisoning topside weights and re-ballasting. She earned 13 battle stars for WWII service.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 104. USS Hull (DD-350) - Farragut-class (Class ID: 78)
        Ship::updateOrCreate(
            ['name' => 'USS Hull (DD-350)'],
            [
                'class_id' => 78,
                'launch_date' => '1934-01-31',
                'commission_date' => '1935-01-11',
                'displacement' => 1395,
                'length' => 104,
                'beam' => 10.4,
                'draft' => 2.69,
                'max_speed' => 36,
                'crew' => 160,
                'fate' => 'Foundered and sank on 18 December 1944 during Typhoon Cobra',
                'description' => 'Named for Commodore Isaac Hull. She was one of three destroyers sunk by Typhoon Cobra on 18 December 1944. As an older Farragut-class destroyer, she had over 500 tons of extra equipment added, making her top-heavy. She was at 70% fuel and hadn\'t taken on saltwater ballast, contributing to her loss. A gust of wind estimated at 110 knots pinned her on her beam ends; water poured down her funnels and into the pilothouse, and she capsized and sank with 202 of her crew lost; only 62 survived. She had earned 10 battle stars for her WWII service.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 105. USS Bristol (DD-453) - Gleaves-class (Class ID: 84)
        Ship::updateOrCreate(
            ['name' => 'USS Bristol (DD-453)'],
            [
                'class_id' => 84,
                'launch_date' => '1941-07-25',
                'commission_date' => '1941-10-22',
                'displacement' => 1630,
                'length' => 106.15,
                'beam' => 11,
                'draft' => 5.33,
                'max_speed' => 37.5,
                'crew' => 276,
                'fate' => 'Torpedoed and sunk by German submarine U-371 on 13 October 1943',
                'description' => 'A Gleaves-class destroyer, she served primarily in the North Atlantic and Mediterranean, escorting convoys and supporting landings. She participated in Operation Torch (North Africa, November 1942), Operation Husky (Sicily, July-August 1943), and the Salerno landings (September 1943). On 11 September 1943, she rescued 70 survivors from the torpedoed USS Rowan. At 04:30 on 13 October 1943, while escorting a convoy to Oran, Algeria, she was struck by a torpedo from U-371, broke in half, and sank within minutes. 52 of her crew were lost. She earned 3 battle stars.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 106. USS Ingraham (DD-444) - Gleaves-class (Class ID: 84)
        Ship::updateOrCreate(
            ['name' => 'USS Ingraham (DD-444)'],
            [
                'class_id' => 84,
                'launch_date' => '1941-02-15',
                'commission_date' => '1941-07-19',
                'displacement' => 1600,
                'length' => 105.99,
                'beam' => 11,
                'draft' => 3.61,
                'max_speed' => 35,
                'crew' => 208,
                'fate' => 'Sunk in collision with oiler USS Chemung on 22 August 1942 off Nova Scotia',
                'description' => 'A Gleaves-class destroyer, she was escorting a Scotland-bound convoy out of Halifax when a series of collisions occurred in heavy fog. On the night of 22 August 1942, after investigating a collision between the destroyer Buck and a merchant vessel, Ingraham collided with the oil tanker Chemung. She sank almost immediately, and depth charges on her stern exploded. Only 11 of her crew survived. She was struck from the Naval Vessel Register on 11 September 1942.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 107. USS Cooper (DD-695) - Allen M. Sumner-class (Class ID: 85)
        Ship::updateOrCreate(
            ['name' => 'USS Cooper (DD-695)'],
            [
                'class_id' => 85,
                'launch_date' => '1944-02-09',
                'commission_date' => '1944-03-27',
                'displacement' => 2200,
                'length' => 114.8,
                'beam' => 12.2,
                'draft' => 4.8,
                'max_speed' => 34,
                'crew' => 336,
                'fate' => 'Torpedoed and sunk on 3 December 1944 during the Battle of Ormoc Bay',
                'description' => 'An Allen M. Sumner-class destroyer, she arrived in the Pacific in late 1944 and screened carriers during air attacks on Luzon, Ormoc Bay, and Manila Bay. On 2 December 1944, she sailed with USS Allen M. Sumner (DD-692) and USS Moale (DD-693) to intercept a Japanese convoy in Ormoc Bay. In the early hours of 3 December, during the Battle of Ormoc Bay, she was hit amidships on the starboard side by a torpedo from the Japanese destroyer Take. The explosion broke her in two and she sank in less than a minute. 191 of her crew were lost; 168 survivors were later rescued by PBY "Black Cat" aircraft. She earned 1 battle star for her WWII service.',
                'is_aircraft_carrier' => false,
            ]
        );

        // ============================================
        // SUBMARINES
        // ============================================

        // 108. USS Tang (SS-306) - Balao-class (Class ID: 86)
        Ship::updateOrCreate(
            ['name' => 'USS Tang (SS-306)'],
            [
                'class_id' => 86,
                'launch_date' => '1943-08-17',
                'commission_date' => '1943-10-15',
                'displacement' => 1490,
                'length' => 95,
                'beam' => 8,
                'draft' => 5,
                'max_speed' => 20,
                'crew' => 83,
                'fate' => 'Sunk on 24 October 1944 by her own circular-running torpedo in the Formosa Strait',
                'description' => 'Commanded by the legendary Lieutenant Commander Richard H. O\'Kane, Tang sank 31 Japanese vessels totaling 227,800 tons — one of the most devastating records of the war. On her final patrol, she fired her last torpedo at a damaged transport, but the torpedo malfunctioned and circled back, striking Tang\'s aft torpedo room. Only 9 of the 83 crew survived, including O\'Kane, who was captured by the Japanese and became a POW. O\'Kane received the Medal of Honor for his actions. She earned 4 battle stars and 2 Presidential Unit Citations.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 109. USS Wahoo (SS-238) - Gato-class (Class ID: 87)
        Ship::updateOrCreate(
            ['name' => 'USS Wahoo (SS-238)'],
            [
                'class_id' => 87,
                'launch_date' => '1942-02-14',
                'commission_date' => '1942-05-15',
                'displacement' => 1525,
                'length' => 95,
                'beam' => 8.3,
                'draft' => 4.6,
                'max_speed' => 20.25,
                'crew' => 79,
                'fate' => 'Sunk on 11 October 1943 by Japanese aircraft and surface craft in La Perouse Strait',
                'description' => 'Under Commander Dudley W. "Mush" Morton, Wahoo became one of the most aggressive and successful submarines in the Pacific. She was the first submarine to penetrate a Japanese harbor (Wewak, New Guinea) and the first to sink a Japanese destroyer with a "down the throat" torpedo shot. Morton was nicknamed "The One-Boat Wolf Pack." On her final patrol, she was sunk while attempting to exit the Sea of Japan. Morton was one of the top three submarine skippers of the war, and all 79 crew members were lost. Wahoo earned 6 battle stars and a Presidential Unit Citation.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 110. USS Barb (SS-220) - Gato-class (Class ID: 87)
        Ship::updateOrCreate(
            ['name' => 'USS Barb (SS-220)'],
            [
                'class_id' => 87,
                'launch_date' => '1942-03-02',
                'commission_date' => '1942-07-08',
                'displacement' => 1525,
                'length' => 95,
                'beam' => 8.3,
                'draft' => 4.6,
                'max_speed' => 20.25,
                'crew' => 80,
                'fate' => 'Decommissioned 1947; recommissioned 1951; transferred to Italy in 1954; scrapped in 1975',
                'description' => 'Under Commander Eugene B. "Lucky" Fluckey, Barb became the third-highest scoring U.S. submarine by tonnage, credited with destroying 96,628 tons of enemy shipping. She is famous for a commando raid on the Japanese mainland — the only hostile landing by U.S. naval forces on Japanese soil during WWII — where her crew blew up a 16-car train. She also sank the escort carrier Unyo. Fluckey received the Medal of Honor. Barb earned 4 Presidential Unit Citations, a Navy Unit Commendation, and 8 battle stars.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 111. USS Nautilus (SS-168) - Narwhal-class (Class ID: 88)
        Ship::updateOrCreate(
            ['name' => 'USS Nautilus (SS-168)'],
            [
                'class_id' => 88,
                'launch_date' => '1930-03-15',
                'commission_date' => '1930-07-01',
                'displacement' => 2730,
                'length' => 113,
                'beam' => 10.1,
                'draft' => 4.8,
                'max_speed' => 17,
                'crew' => 88,
                'fate' => 'Decommissioned 1945; scrapped 1946',
                'description' => 'One of the largest U.S. submarines of WWII, Nautilus was designed for long-range patrols and could cruise up to 25,000 miles. She fought at the Battle of Midway and sank the Japanese destroyer Yamakaze on 25 June 1942. Despite faulty torpedoes that plagued early war patrols, she earned a Navy Cross for her commanding officer, Lieutenant Commander William H. Brockman Jr. She earned 14 battle stars for her service.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 112. USS Tautog (SS-199) - Tambor-class (Class ID: 89)
        Ship::updateOrCreate(
            ['name' => 'USS Tautog (SS-199)'],
            [
                'class_id' => 89,
                'launch_date' => '1940-01-27',
                'commission_date' => '1940-07-03',
                'displacement' => 1475,
                'length' => 93.6,
                'beam' => 8.3,
                'draft' => 4.4,
                'max_speed' => 20.4,
                'crew' => 60,
                'fate' => 'Sold for scrap 1960',
                'description' => 'Nicknamed "The Terrible T," Tautog was the second-highest scoring U.S. submarine by number of ships sunk, with 26 Japanese vessels totaling 72,606 tons. She sank the Japanese destroyers Isonami and Shirakumo, as well as submarines Ro-30 and I-28. She was one of only five Tambor-class submarines to survive the war. She earned 14 battle stars and a Navy Unit Commendation.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 113. USS Archerfish (SS-311) - Balao-class (Class ID: 86)
        Ship::updateOrCreate(
            ['name' => 'USS Archerfish (SS-311)'],
            [
                'class_id' => 86,
                'launch_date' => '1943-05-28',
                'commission_date' => '1943-09-04',
                'displacement' => 1526,
                'length' => 95,
                'beam' => 8.3,
                'draft' => 5.13,
                'max_speed' => 20.25,
                'crew' => 81,
                'fate' => 'Sunk as a target off California on 19 October 1968 by USS Snook (SSN-592)',
                'description' => 'Best known for sinking the Japanese aircraft carrier Shinano in November 1944 — the largest warship ever sunk by a submarine. She received a Presidential Unit Citation for this achievement. She served through multiple recommissionings and was finally sunk as a target in 1968.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 114. USS Dace (SS-247) - Gato-class (Class ID: 87)
        Ship::updateOrCreate(
            ['name' => 'USS Dace (SS-247)'],
            [
                'class_id' => 87,
                'launch_date' => '1943-04-25',
                'commission_date' => '1943-07-23',
                'displacement' => 1525,
                'length' => 95,
                'beam' => 8.3,
                'draft' => 5.18,
                'max_speed' => 21,
                'crew' => 80,
                'fate' => 'Transferred to Italy in 1955 as Leonardo da Vinci (S-510); stricken 1972 and scrapped 1975',
                'description' => 'Alongside USS Darter, she ambushed Japanese heavy cruisers in the Battle of the Palawan Passage on 23 October 1944, sinking Atago and Maya. Earned the Navy Unit Commendation and 7 battle stars. Later transferred to the Italian Navy and served for nearly two decades.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 115. USS Albacore (SS-218) - Gato-class (Class ID: 87)
        Ship::updateOrCreate(
            ['name' => 'USS Albacore (SS-218)'],
            [
                'class_id' => 87,
                'launch_date' => '1942-02-17',
                'commission_date' => '1942-06-01',
                'displacement' => 1525,
                'length' => 95,
                'beam' => 8.3,
                'draft' => 5.18,
                'max_speed' => 21,
                'crew' => 60,
                'fate' => 'Lost on 7 November 1944, probably sunk by a Japanese mine off northern Hokkaidō',
                'description' => 'Holds the distinction of sinking the highest warship tonnage of any U.S. submarine, including the aircraft carrier Taihō and light cruiser Tenryū. Earned the Presidential Unit Citation and 9 battle stars. She was lost with all hands in November 1944, likely to a mine.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 116. USS Flasher (SS-249) - Gato-class (Class ID: 87)
        Ship::updateOrCreate(
            ['name' => 'USS Flasher (SS-249)'],
            [
                'class_id' => 87,
                'launch_date' => '1943-06-20',
                'commission_date' => '1943-09-25',
                'displacement' => 1525,
                'length' => 95,
                'beam' => 8.3,
                'draft' => 5.18,
                'max_speed' => 21,
                'crew' => 80,
                'fate' => 'Sold for scrap on 8 June 1963; conning tower preserved as a memorial in Groton, Connecticut',
                'description' => 'One of the most successful U.S. submarines by tonnage, sinking 100,231 tons of Japanese shipping. Earned the Presidential Unit Citation and 6 battle stars. Her conning tower is a memorial at the Electric Boat facility in Groton.',
                'is_aircraft_carrier' => false,
            ]
        );

        // 117. USS Cavalla (SS-244) - Gato-class (Class ID: 87)
        Ship::updateOrCreate(
            ['name' => 'USS Cavalla (SS-244)'],
            [
                'class_id' => 87,
                'launch_date' => '1943-11-14',
                'commission_date' => '1944-02-29',
                'displacement' => 1525,
                'length' => 95,
                'beam' => 8.3,
                'draft' => 5.18,
                'max_speed' => 21,
                'crew' => 80,
                'fate' => 'Museum ship since 1971 at Seawolf Park, Galveston, Texas',
                'description' => 'Famous for sinking the Japanese aircraft carrier Shōkaku — one of the carriers that attacked Pearl Harbor — on 19 June 1944. Earned the Presidential Unit Citation and 4 battle stars. Nicknamed "The Luckiest Ship in the Submarine Service."',
                'is_aircraft_carrier' => false,
            ]
        );

        $this->command->info('✅ American ships processed successfully!');
        $this->command->info('📊 Total ships: 117');
        $this->command->info('   • Aircraft Carriers: 26');
        $this->command->info('   • Battleships: 24');
        $this->command->info('   • Cruisers: 32');
        $this->command->info('   • Destroyers: 25');
        $this->command->info('   • Submarines: 10');
    }
}