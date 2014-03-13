<?php

class Evidence_documentsTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('evidence_documents')->truncate();

        $evidence_documents = array(
            ["user_id" => 10930191, "case_id" => 1, "details" => "Theft", "owner" => "Matteo Guidicelli",
                "title" => "Justin Bieber - Theft at High School in Marikina", "date_received" => "2014-01-26", "file_name" => "1.doc"],
            ["user_id" => 10930191, "case_id" => 2, "details" => "Rape", "owner" => "Jay Contreras",
                "title" => "Maria Aguilar - Woman Claims to be Raped by Musician Chris Brown", "date_received" => "2014-02-12", "file_name" => "2.doc"],
            ["user_id" => 10930191, "case_id" => 3, "details" => "Public Scandal", "owner" => "Jonathan Obrero",
                "title" => "Logan Alpay - Drunk Guy Orders Bulalo in a Bakery Shop and Started a Scandal", "date_received" => "2014-12-13", "file_name" => "3.doc"],
            ["user_id" => 10930191, "case_id" => 4, "details" => "Prostitution", "owner" => "Willie So",
                "title" => "Kris Aquino & Claire Baclayan - Waitresses charged with misdemeanor prostitution", "date_received" => "2009-03-12", "file_name" => "4.doc"],
            ["user_id" => 10930191, "case_id" => 5, "details" => "Murder", "owner" => "Uma Sumbingco",
                "title" => "Mike Jones - Engineer Stabbed by Garbage Collector", "date_received" => "2013-04-23", "file_name" => "5.doc"],
            ["user_id" => 10930191, "case_id" => 6, "details" => "Shootout", "owner" => "Raven Bojos",
                "title" => "2 Engineers and 1 Principal Shot Dead in Surigao", "date_received" => "2013-01-15", "file_name" => "6.doc"],
            ["user_id" => 10930191, "case_id" => 7, "details" => "Suicide", "owner" => "Domingo Arita",
                "title" => "Raymond Cadang - College Student from FEU Leapt from 25th Floor of His Condominium", "date_received" => "2013-01-26", "file_name" => "7.doc"],
            ["user_id" => 10930191, "case_id" => 8, "details" => "Murder", "owner" => "Pierce Jonota",
                "title" => "Assistant Lecturer from DLSU found dead at Agno Gate with stabs in the head", "date_received" => "2013-02-07", "file_name" => "8.doc"],
            ["user_id" => 10930191, "case_id" => 9, "details" => "Cannibalism", "owner" => "Rod Strunk",
                "title" => "Kristina Gacutan - Mother Ate Her 2 Children", "date_received" => "2013-03-06", "file_name" => "9.doc"],
            ["user_id" => 10930191, "case_id" => 10, "details" => "Illegal Gambling", "owner" => "Recca Madoka",
                "title" => "3 Americans Allegedly Participated in Illegal Gambling in San Juan City", "date_received" => "2013-02-20", "file_name" => "10.doc"],
            ["user_id" => 10930191, "case_id" => 11, "details" => "Terrorism", "owner" => "Adolf Hitler",
                "title" => "Bus Conductor from Leyte Planted Atomic Bomb On Bus", "date_received" => "2013-02-20", "file_name" => "11.doc"],
            ["user_id" => 10930191, "case_id" => 12, "details" => "Counterfeiting", "owner" => "Atom Araullo",
                "title" => "Chistopher Sese, Gong Wai See, Karlo Martinez - 2 Businessmen and 1 Househusband Found Guilty of Counterfeiting Coins", "date_received" => "2013-04-01", "file_name" => "12.doc"],
            ["user_id" => 10930191, "case_id" => 13, "details" => "Abduction", "owner" => "Zee Ambrosio",
                "title" => "Businessman From China Abducted 5 Children", "date_received" => "2013-04-10", "file_name" => "13.doc"],
            ["user_id" => 10930191, "case_id" => 14, "details" => "Illegal Drugs", "owner" => "Juni Silva",
                "title" => "2 Drug Dealers Found Dealing Marijuana in Benguet", "date_received" => "2013-05-03", "file_name" => "14.doc"],
            ["user_id" => 10930191, "case_id" => 15, "details" => "Illegal Drugs", "owner" => "Joey Ty",
                "title" => "Top Drug Lord Spotted in Taguig", "date_received" => "2013-05-23", "file_name" => "15.doc"],
            ["user_id" => 10930191, "case_id" => 16, "details" => "Money Laundering", "owner" => "Wilhelm Hung",
                "title" => "Serendra - Serendra Developers Convicted Of Laundering Thousands of Dollars", "date_received" => "2013-06-10", "file_name" => "16.doc"],
            ["user_id" => 10930191, "case_id" => 17, "details" => "Stray Bullet", "owner" => "Jose Maria Villacorta",
                "title" => "Gym Instructor Hit By A Stray Bullet in the Head While Jogging in the Morning", "date_received" => "2013-06-17", "file_name" => "17.doc"],
            ["user_id" => 10930191, "case_id" => 18, "details" => "Illegal Drugs", "owner" => "Kali Kariman",
                "title" => "Drug Pusher Found Dead In Caloocan City After Trying To Sell Illegal Drugs", "date_received" => "2013-07-08", "file_name" => "18.doc"],
            ["user_id" => 10930191, "case_id" => 19, "details" => "Rape", "owner" => "Jun Sabayton",
                "title" => "Boyfriend Forced Girlfriend To Have Sex With Her", "date_received" => "2013-07-27", "file_name" => "19.doc"],
            ["user_id" => 10930191, "case_id" => 20, "details" => "Accidental Shooting", "owner" => "Mikasa Ackerman",
                "title" => "Veronica Co - Woman Accidentally Fires His Gun at His Three Friends During at a Shooting Range", "date_received" => "2013-08-12", "file_name" => "20.doc"],
            ["user_id" => 10930191, "case_id" => 21, "details" => "Illegal Drugs", "owner" => "Eren Jaeger",
                "title" => "Sylvia Ang - Top Druglord in Zamboanga Strikes Again After Being Released From Jail", "date_received" => "2013-08-29", "file_name" => "21.doc"],
            ["user_id" => 10930191, "case_id" => 22, "details" => "Inflicing Physical Injuries", "owner" => "Habab Baluda",
                "title" => "Mariz Tamboa - Paramedic Stabbed By a Woman While Taking A Leak", "date_received" => "2013-09-11", "file_name" => "22.doc"],
            ["user_id" => 10930191, "case_id" => 23, "details" => "Drunk Driving", "owner" => "Rreuno Velasco",
                "title" => "Monica Velasco - Female DUI of Alcohol Shot A Bypasser Jogging on the Roadside", "date_received" => "2013-09-22", "file_name" => "23.doc"],
            ["user_id" => 10930191, "case_id" => 24, "details" => "Robbery", "owner" => "Martin Quinahan",
                "title" => "5 Suspects Robbed Security Bank in Alabang", "date_received" => "2013-09-23", "file_name" => "24.doc"],
            ["user_id" => 10930191, "case_id" => 25, "details" => "Suicide", "owner" => "Jim Paredes",
                "title" => "Jack Baloala - Architect Commited Suicide In Pasay City", "date_received" => "2013-10-23", "file_name" => "25.doc"],
            ["user_id" => 10930191, "case_id" => 26, "details" => "Rape", "owner" => "Georges St. Pierre",
                "title" => "Richmond Collins - American Accountant Raped Filipina Co-Worker", "date_received" => "2013-11-03", "file_name" => "26.doc"],
            ["user_id" => 10930191, "case_id" => 27, "details" => "Prostitution", "owner" => "Dim Dumaual",
                "title" => "Tyrone Tecson, Eun Hyuk Park, & Bert Lee - DLSU Professors Reported To Be Prostitutes Giving Service To Clients In Pubs At Pedro Gil", "date_received" => "2013-11-23", "file_name" => "27.doc"],
            ["user_id" => 10930191, "case_id" => 28, "details" => "Illegal Drug Dealing", "owner" => "Herbert Bautista",
                "title" => "Sungyeol Choi & Myungsoo Choi - 2 Korean Students Caught Dealing Illegal Drugs In Quezon City", "date_received" => "2013-12-01", "file_name" => "28.doc"],
            ["user_id" => 10930191, "case_id" => 29, "details" => "Rape", "owner" => "Matthew McDonald",
                "title" => "Gary Michael Waters - Uncle Rapes Her Niece On Her Birthday", "date_received" => "2013-12-18", "file_name" => "29.doc"],
            ["user_id" => 10930191, "case_id" => 30, "details" => "Counterfeiting", "owner" => "Biboy Ortiz",
                "title" => "Johnson Smith & Simon Davis - African-American Businessmen Providing Shops Fake Cellular Phones and Mobile Phone Equipment", "date_received" => "2013-12-28", "file_name" => "30.doc"],
            ["user_id" => 10930191, "case_id" => 31, "details" => "Murder", "owner" => "Scott Brooks",
                "title" => "Gino Haparam - DLSU Student Shot Dead Outside EGI Apartment in Manila", "date_received" => "2013-01-02", "file_name" => "31.doc"],
            ["user_id" => 10930191, "case_id" => 32, "details" => "Fraud", "owner" => "Gumba Sotto",
                "title" => "Mark Anthony Collins & Jacob Reed - Butcher and Fireman indicted on fraud charges", "date_received" => "2013-04-18", "file_name" => "32.doc"],
            ["user_id" => 10930191, "case_id" => 33, "details" => "Fraud", "owner" => "Jobert Sucaldito",
                "title" => "Matthew Morgan - American Fireman Accused Of Using A Contractor's License And Fraudaulent Use Of Funds", "date_received" => "2014-01-13", "file_name" => "33.doc"],
            ["user_id" => 10930191, "case_id" => 34, "details" => "Fraud", "owner" => "Luke Walton",
                "title" => "Liam Morgan - American Manager To Be Sentencet In Court To 12 Years For Defrauding Filipino Businessman", "date_received" => "2014-02-04", "file_name" => "34.doc"],
            ["user_id" => 10930191, "case_id" => 35, "details" => "Fraud", "owner" => "Kier Legaspi",
                "title" => "Jackson Kelly - Attempted Fraud on Gift Cards", "date_received" => "2014-03-05", "file_name" => "35.doc"],
            ["user_id" => 10930191, "case_id" => 36, "details" => "Fraud", "owner" => "Ramone Parica",
                "title" => "Ryan Dylan Wood - Mastermind of a multi-billion dollar fraud", "date_received" => "2014-01-28", "file_name" => "36.doc"],
            ["user_id" => 10930191, "case_id" => 37, "details" => "Robbery", "owner" => "Lanus Crassus",
                "title" => "2 Masked Men Robbed RCBC in Quezon City", "date_received" => "2014-03-18", "file_name" => "37.doc"],
            ["user_id" => 10930191, "case_id" => 38, "details" => "Road Rage Shooting", "owner" => "Bill Laimbeer",
                "title" => "Landon Jordan - Australian Politician Charged With Multiple Counts Of Range Shooting Resulting To Multiple Deaths", "date_received" => "2013-05-29", "file_name" => "38.doc"],
            ["user_id" => 10930191, "case_id" => 39, "details" => "Arson", "owner" => "Jack Nicholson",
                "title" => "Jack Marshall - Australian Politician Sets Elementary School Teacher's House On fire", "date_received" => "2013-02-02", "file_name" => "39.doc"],
            ["user_id" => 10930191, "case_id" => 40, "details" => "Robbery", "owner" => "Boom Gonzalez",
                "title" => "Connor Charles Hunter - Australian Pilot Accused of Robbing an IT Professional in a supermarket in Sta. Mesa", "date_received" => "2013-07-13", "file_name" => "40.doc"],
            ["user_id" => 10930191, "case_id" => 41, "details" => "Female Mutilation", "owner" => "Jinggo Madamba",
                "title" => "Lay Zhang - Female Mutilation of San Beda Student, Clarice Ona", "date_received" => "2013-04-24", "file_name" => "41.doc"],
            ["user_id" => 10930191, "case_id" => 42, "details" => "Battered Wife", "owner" => "Kevin Durant",
                "title" => "Yi Wu - Battered His Wife, Hanna Wu", "date_received" => "2013-01-16", "file_name" => "42.doc"],
            ["user_id" => 10930191, "case_id" => 43, "details" => "Kidnapping", "owner" => "Serge Ibaka",
                "title" => "Ming Chiu - Chinese Plumber Kidnapped And Enslaved 10-Year Old Boy", "date_received" => "2013-01-26", "file_name" => "43.doc"],
            ["user_id" => 10930191, "case_id" => 44, "details" => "Rape", "owner" => "Ming Yao",
                "title" => "Ming Chiu - Chinese Plumber Raped a Business Student", "date_received" => "2013-02-07", "file_name" => "44.doc"],
            ["user_id" => 10930191, "case_id" => 45, "details" => "Child Abduction", "owner" => "Rick Fox",
                "title" => "Bing Ng - Abducted Jasper Hans Chua", "date_received" => "2012-02-20", "file_name" => "45.doc"],
            ["user_id" => 10930191, "case_id" => 46, "details" => "Abandonment of a Helpless Person", "owner" => "Derek Fisher",
                "title" => "Chuan Tsui - Disregarded A Man Being Attacked", "date_received" => "2013-03-05", "file_name" => "46.doc"],
            ["user_id" => 10930191, "case_id" => 47, "details" => "Illegal Drug Possession", "owner" => "Rob Thomas",
                "title" => "Minami Takahashi - Seen In Possession of Illegal Drugs inside a Hotel in Pedro Gil", "date_received" => "2013-03-30", "file_name" => "47.doc"],
            ["user_id" => 10930191, "case_id" => 48, "details" => "Trespassing", "owner" => "Johnny Abarrientos",
                "title" => "Atsuko Maeda - AKB48 Frontman Trespassed A Private Property In Quezon City", "date_received" => "2013-03-20", "file_name" => "48.doc"],
            ["user_id" => 10930191, "case_id" => 49, "details" => "Medical Malpractice", "owner" => "Michael Bibby",
                "title" => "Sakura Yamamoto - Japan-based nurse injected an illegal drug to a patient", "date_received" => "2013-04-01", "file_name" => "49.doc"],
            ["user_id" => 10930191, "case_id" => 50, "details" => "Child Abuse", "owner" => "Simon Atkins",
                "title" => "Bing Ng - Child Abused and Threatened a Filipino-Amrican Child", "date_received" => "2013-04-01", "file_name" => "50.doc"],
            ["user_id" => 10930191, "case_id" => 51, "details" => "Slavery", "owner" => "Beau Belga",
                "title" => "Bing Ng - Enslaved his Son, Bo Ng at Home", "date_received" => "2013-05-22", "file_name" => "51.doc"],
            ["user_id" => 10930191, "case_id" => 52, "details" => "Brigandage", "owner" => "Jayson Castro",
                "title" => "Batsi Gang - Brigandage In SM Sta. Mesa", "date_received" => "2013-06-12", "file_name" => "52.doc"],
            ["user_id" => 10930191, "case_id" => 53, "details" => "Brigandage", "owner" => "Mark Caguioa",
                "title" => "Batsi Gang - Robbery Of Rafael Lazo", "date_received" => "2013-06-17", "file_name" => "53.doc"],
            ["user_id" => 10930191, "case_id" => 54, "details" => "Theft", "owner" => "June Mar Fajardo",
                "title" => "A Vietnamese Woman Stole An Antique Jar From Richard Rabago, a Businessman", "date_received" => "2013-05-23", "file_name" => "54.doc"],
            ["user_id" => 10930191, "case_id" => 55, "details" => "Swindling", "owner" => "Marko Moraga",
                "title" => "Watanabe Mayu - Swindled P150M from Actor Vice Ganda", "date_received" => "2013-07-28", "file_name" => "55.doc"],
            ["user_id" => 10930191, "case_id" => 56, "details" => "Arson", "owner" => "Dick Joaquin",
                "title" => "Jack Marshall - Arson Attacks On Parked Cars, Scorched Buildings, and Public Disturbance In The City", "date_received" => "2013-08-11", "file_name" => "56.doc"],
            ["user_id" => 10930191, "case_id" => 57, "details" => "Rape", "owner" => "Migo Elisan",
                "title" => "Chris Brown - Suspected Father of Stephanie Germanotta, A Woman He Raped", "date_received" => "2013-08-30", "file_name" => "57.doc"],
            ["user_id" => 10930191, "case_id" => 58, "details" => "Rape", "owner" => "Mark Heussaff",
                "title" => "Chris Brown - Raped Filipina Actress Anne Curtis-Smith", "date_received" => "2013-09-10", "file_name" => "58.doc"],
            ["user_id" => 10930191, "case_id" => 59, "details" => "Bribery", "owner" => "Ogie Alcasid",
                "title" => "Christian Tiangco - Bribed Boy Abunda P10M To Reveal Showbiz Scoops", "date_received" => "2013-09-21", "file_name" => "59.doc"],
            ["user_id" => 10930191, "case_id" => 60, "details" => "Kidnapping", "owner" => "Rally Coronacion",
                "title" => "Ming Li Chiu - Abducted Children For Human Trafficking", "date_received" => "2013-10-12", "file_name" => "60.doc"],
            ["user_id" => 10930191, "case_id" => 61, "details" => "Abortion", "owner" => "Bon Bernales",
                "title" => "Sabel Sadural - Aborted Her Baby and Shared It On Social Media", "date_received" => "2013-10-15", "file_name" => "61.doc"],
            ["user_id" => 10930191, "case_id" => 62, "details" => "Infanticide", "owner" => "Rajko Toriman",
                "title" => "Anton Saley - Killed His Own Son After Cricket Practice", "date_received" => "2013-10-12", "file_name" => "62.doc"],
            ["user_id" => 10930191, "case_id" => 63, "details" => "Rape", "owner" => "Thomas Cruz",
                "title" => "Yamato Akitsuki - Japanese Exchange Student Raped His Professor", "date_received" => "2013-06-04", "file_name" => "63.doc"],
            ["user_id" => 10930191, "case_id" => 64, "details" => "Theft", "owner" => "Ricardo Panganiban",
                "title" => "Karla Talaba - Nurse from Makati Memorial Center stole radioactive cobalt-60", "date_received" => "2008-12-15", "file_name" => "64.doc"],
            ["user_id" => 10930191, "case_id" => 65, "details" => "Parricide", "owner" => "Michael Millanes",
                "title" => "Justin Tomawis - Killed His Father While Driving Him To School", "date_received" => "2013-06-10", "file_name" => "65.doc"],
            ["user_id" => 10930191, "case_id" => 66, "details" => "Murder", "owner" => "Ernie Escayde",
                "title" => "Albert Agonoy - Pushed co-welder off the roof after a heated argument", "date_received" => "2013-06-10", "file_name" => "66.doc"],
            ["user_id" => 10930191, "case_id" => 67, "details" => "Murder", "owner" => "Ramil de Jesus",
                "title" => "Aldrich Cabello - Murder of His Girlfriend Mica Reyes Inside The Car", "date_received" => "2008-12-15", "file_name" => "67.doc"],
            ["user_id" => 10930191, "case_id" => 68, "details" => "Murder", "owner" => "Jejomar Binay",
                "title" => "Julio Macaraeg - Murder of Own Son, MJ Macaraeg In Exchange For Marijuana", "date_received" => "2008-12-15", "file_name" => "68.doc"],
            ["user_id" => 10930191, "case_id" => 69, "details" => "Robbery", "owner" => "Juliano Panganiban",
                "title" => "Sebastian Hastings - Robbed A Bingo Hall And Inflicted Physical Injuries On A CEU Nursing Student", "date_received" => "2013-07-27", "file_name" => "69.doc"],
            ["user_id" => 10930191, "case_id" => 70, "details" => "Libel", "owner" => "Lou Chua",
                "title" => "Anthony Manalo - False Accusation Against Jim Dwyer", "date_received" => "2013-04-01", "file_name" => "70.doc"],
            ["user_id" => 10930191, "case_id" => 71, "details" => "Adultery", "owner" => "John Paul Fernandez",
                "title" => "Jack Marshall - Had An Affair With Another Woman And Set An Abandoned Building On Fire", "date_received" => "2009-07-27", "file_name" => "71.doc"],
            ["user_id" => 10930191, "case_id" => 72, "details" => "Slander", "owner" => "Jomari Yllana",
                "title" => "Allan Cardona - Corruption", "date_received" => "2013-04-01", "file_name" => "72.doc"],
            ["user_id" => 10930191, "case_id" => 73, "details" => "Defamation & Malicious Prosecution", "owner" => "Ricardo Panganiban",
                "title" => "Landon Jordan - Australian Politician Sued $60M In A Maternity Ward Scuffle", "date_received" => "2013-08-10", "file_name" => "73.doc"],
            ["user_id" => 10930191, "case_id" => 74, "details" => "Robbery", "owner" => "Ricardo Panganiban",
                "title" => "Paulo Arcilla & Samson Sangui - Attempted Robbery Of Card Numbers", "date_received" => "2013-08-10", "file_name" => "74.doc"],
            ["user_id" => 10930191, "case_id" => 75, "details" => "Rape", "owner" => "Ricardo Panganiban",
                "title" => "Richmond Collins - American Raped Korean Student Krystal Jung Inside A Boarding House In Malate", "date_received" => "2013-08-10", "file_name" => "75.doc"],
            ["user_id" => 10930191, "case_id" => 76, "details" => "Adultery", "owner" => "Enzo Ortiz",
                "title" => "Lance Kurtis Alipio - Cheated On His Wife By Raping His Niece", "date_received" => "2013-09-13", "file_name" => "76.doc"],
            ["user_id" => 10930191, "case_id" => 77, "details" => "Murder", "owner" => "Jomal Linao",
                "title" => "Sungyeol Choi - Deals Drugs to High School Students", "date_received" => "2010-01-13", "file_name" => "77.doc"],
            ["user_id" => 10930191, "case_id" => 78, "details" => "Counterfeiting", "owner" => "Gus Abelgas",
                "title" => "Counterfeit iPhones being sold in Greenhills Shopping Center", "date_received" => "2010-12-30", "file_name" => "78.doc"],
            ["user_id" => 10930191, "case_id" => 79, "details" => "Counterfeiting", "owner" => "Noli De Castro",
                "title" => "Gong Wai See - Printing Of Fake Dollar Bills", "date_received" => "2010-12-03", "file_name" => "79.doc"],
            ["user_id" => 10930191, "case_id" => 80, "details" => "Kidnapping", "owner" => "Julius Babao",
                "title" => "Xiong Chua - Chinese Businessman Kidnapped A 7-Year Old Girl", "date_received" => "2009-12-23", "file_name" => "80.doc"],
            ["user_id" => 10930191, "case_id" => 81, "details" => "Forged Signature", "owner" => "Ricardo Panganiban",
                "title" => "Bea Puzon - Forged Signature", "date_received" => "2008-12-15", "file_name" => "81.doc"],
            ["user_id" => 10930191, "case_id" => 82, "details" => "Street Gambling", "owner" => "Ramon Sto. Domingo",
                "title" => "Bernice Bassig - Street Gambling", "date_received" => "2008-12-05", "file_name" => "82.doc"],
            ["user_id" => 10930191, "case_id" => 83, "details" => "Sexual Abuse", "owner" => "Rodolfo Fuentes",
                "title" => "Natasha Ocampo - Sexually Abused Teenager", "date_received" => "2008-12-15", "file_name" => "83.doc"],
            ["user_id" => 10930191, "case_id" => 84, "details" => "Grave Scandal", "owner" => "Onemig Bondoc",
                "title" => "Katherine Pascual - Grave Scandal", "date_received" => "2010-12-16", "file_name" => "84.doc"],
            ["user_id" => 10930191, "case_id" => 85, "details" => "Public Disorder", "owner" => "Nonnatus Rojas",
                "title" => "Timi Gatdula - Public Disorder", "date_received" => "2012-12-20", "file_name" => "85.doc"],
            ["user_id" => 10930191, "case_id" => 86, "details" => "Direct Assault", "owner" => "Cedric Lee",
                "title" => "Mia Serra - Direct Assault", "date_received" => "2011-12-16", "file_name" => "86.doc"],
            ["user_id" => 10930191, "case_id" => 87, "details" => "Forgery", "owner" => "Ramiro Rey",
                "title" => "Elayssa Feryas - Forgery", "date_received" => "2011-12-20", "file_name" => "87.doc"],
            ["user_id" => 10930191, "case_id" => 88, "details" => "Bribery", "owner" => "James Calleja",
                "title" => "Pamela Mendiola - Bribery", "date_received" => "2011-12-18", "file_name" => "88.doc"],
            ["user_id" => 10930191, "case_id" => 89, "details" => "Prohibited Transaction Case", "owner" => "James Tosoc",
                "title" => "Judith Pasay - Prohibited Transaction Case", "date_received" => "2011-12-22", "file_name" => "89.doc"],
            ["user_id" => 10930191, "case_id" => 90, "details" => "Infidelity", "owner" => "Santino Gajo",
                "title" => "Mikaella Makati - Infidelity Case", "date_received" => "2013-12-25", "file_name" => "90.doc"],
            ["user_id" => 10930191, "case_id" => 91, "details" => "Disobedience", "owner" => "Johnny Rocket",
                "title" => "Junelle Recto - Disobedience", "date_received" => "2008-12-05", "file_name" => "91.doc"],
            ["user_id" => 10930191, "case_id" => 92, "details" => "Unidentified Case", "owner" => "Ramon Villacorta",
                "title" => "Jesebel Osmena - Unidentified Case", "date_received" => "2011-11-13", "file_name" => "92.doc"],
            ["user_id" => 10930191, "case_id" => 93, "details" => "Maltreatment", "owner" => "Magtanggol Gatdula",
                "title" => "SPO1 Michael Enriquez - Maltreatment in the PNP", "date_received" => "2012-12-25", "file_name" => "93.doc"],
            ["user_id" => 10930191, "case_id" => 94, "details" => "Usurpation", "owner" => "Leomar Pedron",
                "title" => "Usurpation - Corazon Aquino", "date_received" => "2012-12-24", "file_name" => "94.doc"],
            ["user_id" => 10930191, "case_id" => 95, "details" => "Suicide", "owner" => "Tomas Quinahan",
                "title" => "James Martinez - Commited Suicide", "date_received" => "2012-12-30", "file_name" => "95.doc"],
            ["user_id" => 10930191, "case_id" => 96, "details" => "Abortion", "owner" => "Juan Ballesteros",
                "title" => "Lucila Criselda - Abortion", "date_received" => "2012-12-26", "file_name" => "96.doc"],
            ["user_id" => 10930191, "case_id" => 97, "details" => "Infanticide", "owner" => "Julio Climaco",
                "title" => "Fernando Amorsolo - Infanticide", "date_received" => "2013-12-30", "file_name" => "97.doc"],
            ["user_id" => 10930191, "case_id" => 98, "details" => "Illegal Detention", "owner" => "Allan Cornejo",
                "title" => "Janet Lim Napoles - Pork Barrel Queen", "date_received" => "2013-12-30", "file_name" => "98.doc"],
            ["user_id" => 10930191, "case_id" => 99, "details" => "Kidnapping", "owner" => "Zimmer Ranz",
                "title" => "Darwin Daroy - Kidnapping ", "date_received" => "2014-01-05", "file_name" => "99.doc"],
            ["user_id" => 10930191, "case_id" => 100, "details" => "Slavery", "owner" => "Cesar Milan",
                "title" => "Enrico Roco - Slavery", "date_received" => "2014-01-07", "file_name" => "100.doc"],
            ["user_id" => 10930191, "case_id" => 101, "details" => "Drunk Driving", "owner" => "Ernesto Tauyan",
                "title" => "Jonathan Ochoa - DUI of Alcohol", "date_received" => "2009-05-05", "file_name" => "101.doc"],
            ["user_id" => 10930191, "case_id" => 102, "details" => "Drug Possession", "owner" => "Jimboy Garcia",
                "title" => "Ernesto Villamin - Illegal Possession of Drugs", "date_received" => "2009-05-04", "file_name" => "102.doc"],
            ["user_id" => 10930191, "case_id" => 103, "details" => "Vandalism", "owner" => "Jonathan Canete",
                "title" => "Armando Villena - Vandalism", "date_received" => "2010-05-05", "file_name" => "103.doc"],
            ["user_id" => 10930191, "case_id" => 104, "details" => "Robbery", "owner" => "Michael Noble",
                "title" => "Carlo Sta. Ana & Patrick Hubalde - Robbery", "date_received" => "2010-05-05", "file_name" => "104.doc"],
            ["user_id" => 10930191, "case_id" => 105, "details" => "Treason", "owner" => "Vic Sotto",
                "title" => "Algeirn Cupido - Treason", "date_received" => "2013-11-01", "file_name" => "105.doc"],
            ["user_id" => 10930191, "case_id" => 106, "details" => "Espionage", "owner" => "Mark Galarpe",
                "title" => "Joey Gutierrez - Espionage", "date_received" => "2012-05-13", "file_name" => "106.doc"],
            ["user_id" => 10930191, "case_id" => 107, "details" => "Robbery", "owner" => "Marvin Schaer",
                "title" => "Andy Kanto - Robbery", "date_received" => "2012-05-18", "file_name" => "107.doc"],
            ["user_id" => 10930191, "case_id" => 108, "details" => "Rape", "owner" => "Earl Flores",
                "title" => "Kevin Macatangay - Rape", "date_received" => "2013-05-20", "file_name" => "108.doc"],
            ["user_id" => 10930191, "case_id" => 109, "details" => "Domestic Violence", "owner" => "Jem Sedayao",
                "title" => "Juan Abadicio - Domestic Violence", "date_received" => "2013-05-25", "file_name" => "109.doc"],
            ["user_id" => 10930191, "case_id" => 110, "details" => "Petty Theft", "owner" => "Justin Miranda",
                "title" => "Abo Acleb - Petty Theft", "date_received" => "2013-05-30", "file_name" => "110.doc"],
            ["user_id" => 10930191, "case_id" => 111, "details" => "Arbitrary Detention", "owner" => "Inigo Jimenez",
                "title" => "Carlito Alupido - Arbitrary Detention", "date_received" => "2010-02-03", "file_name" => "111.doc"],
            ["user_id" => 10930191, "case_id" => 112, "details" => "Expulsion", "owner" => "Michael Lee",
                "title" => "Samuel Aglipay - Expulsion", "date_received" => "2010-02-03", "file_name" => "112.doc"],
            ["user_id" => 10930191, "case_id" => 113, "details" => "Violation of Domicile", "owner" => "Nigel Bojos",
                "title" => "Ricardo Aglido - Violation of Domicile", "date_received" => "2010-02-09", "file_name" => "113.doc"],
            ["user_id" => 10930191, "case_id" => 114, "details" => "Prohibition, Interruption, and Dissolution of Peaceful Meetings", "owner" => "Angelo Dayot",
                "title" => "Benigno Afrilami - Multiple Offensed During Peaceful Meetings", "date_received" => "2011-02-15", "file_name" => "114.doc"],
            ["user_id" => 10930191, "case_id" => 115, "details" => "Rebellion", "owner" => "Vince Salles",
                "title" => "Daniel Bercasio - Rebellion", "date_received" => "2011-02-18", "file_name" => "115.doc"],
            ["user_id" => 10930191, "case_id" => 116, "details" => "Disloyalty", "owner" => "Gabriel Domingo",
                "title" => "Eclestio Borromeo - Disloyalty", "date_received" => "2013-02-18", "file_name" => "116.doc"],
            ["user_id" => 10930191, "case_id" => 117, "details" => "Disturbance of Proceedings", "owner" => "Alex Carcaso",
                "title" => "Mark Bermudez - Disturbance of Proceedings", "date_received" => "2013-02-20", "file_name" => "117.doc"],
            ["user_id" => 10930191, "case_id" => 118, "details" => "Illegal Assemblies", "owner" => "Jerome Bermudez",
                "title" => "Dave Bermillo - Illegal Assemblies", "date_received" => "2013-02-22", "file_name" => "118.doc"],
            ["user_id" => 10930191, "case_id" => 119, "details" => "Direct Assault", "owner" => "Andres Bonifacio",
                "title" => "Annete Cruz - Direct Assault", "date_received" => "2014-02-27", "file_name" => "119.doc"],
            ["user_id" => 10930191, "case_id" => 120, "details" => "Direct Assault", "owner" => "Jose Rizal",
                "title" => "Angela Criselda - Direct Assault", "date_received" => "2014-02-29", "file_name" => "120.doc"],
            ["user_id" => 10930191, "case_id" => 121, "details" => "Public Disorder", "owner" => "Rujie De Veyra",
                "title" => "Aubrey Catindig - Public Disorder", "date_received" => "2009-10-03", "file_name" => "121.doc"],
            ["user_id" => 10930191, "case_id" => 122, "details" => "Forgery", "owner" => "Dindin Agustin",
                "title" => "Miley Cauricio - Forgery", "date_received" => "2009-10-03", "file_name" => "122.doc"],
            ["user_id" => 10930191, "case_id" => 123, "details" => "Falsification", "owner" => "Jun Vergara",
                "title" => "Ashley Dagonoy - Falsification of Documents ", "date_received" => "2010-10-04", "file_name" => "123.doc"],
            ["user_id" => 10930191, "case_id" => 124, "details" => "Fraud", "owner" => "Dom Brucal",
                "title" => "Nicole Dalig - Electronic Card Fraud", "date_received" => "2010-10-07", "file_name" => "124.doc"],
            ["user_id" => 10930191, "case_id" => 125, "details" => "Dereliction of Duty", "owner" => "Joma Pantango",
                "title" => "Trixie Duterte - Dereliction of Duty", "date_received" => "2014-01-07", "file_name" => "125.doc"],
            ["user_id" => 10930191, "case_id" => 126, "details" => "Bribery", "owner" => "Clarence Goyokpin",
                "title" => "Rosanna Fernando - Bribery", "date_received" => "2011-10-15", "file_name" => "126.doc"],
            ["user_id" => 10930191, "case_id" => 127, "details" => "Prohibited Transaction", "owner" => "Johnny Bravo",
                "title" => "Rosanne Fuentes - Prohibited Transaction", "date_received" => "2012-10-16", "file_name" => "127.doc"],
            ["user_id" => 10930191, "case_id" => 128, "details" => "Infidelity", "owner" => "Uma Sundiaco",
                "title" => "Reggie Faminial - Infidelity", "date_received" => "2012-10-22", "file_name" => "128.doc"],
            ["user_id" => 10930191, "case_id" => 129, "details" => "Disobedience", "owner" => "Goran Morato",
                "title" => "Lauren Marinias - Disobedience", "date_received" => "2012-10-23", "file_name" => "129.doc"],
            ["user_id" => 10930191, "case_id" => 130, "details" => "Forgery", "owner" => "Michael Miniano",
                "title" => "Lovely Bueno & Leslie Antonio - Forgery", "date_received" => "2013-11-01", "file_name" => "130.doc"],
        );

        // Uncomment the below to run the seeder
        DB::table('evidence_documents')->insert($evidence_documents);
    }

}
