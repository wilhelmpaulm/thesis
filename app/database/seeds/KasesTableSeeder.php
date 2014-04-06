<?php

class KasesTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
        DB::table('kases')->truncate();

        $kases = array(
            //1
            ["name" => "Theft at a high school in Marikina", "complaint_id" => 1, "agent_id" => 10930216, "complainant_id" => 1,
                "status" => "Ongoing", "date_assigned" => "2014-01-25", "date_reported" => "2014-02-12", "division" => "FLD"],
            //2        
            ["name" => "Rape in BGC Condominium", "complaint_id" => 2, "agent_id" => 10930216, "complainant_id" => 102,
                "status" => "Ongoing", "date_assigned" => "2014-02-12", "date_reported" => "2014-02-10", "division" => "FLD"],
            //3        
            ["name" => "Bulalo outbreak in Pedro Gil", "complaint_id" => 3, "agent_id" => 10930193, "complainant_id" => 3,
                "status" => "Non-viable", "date_assigned" => "", "date_reported" => "2014-02-12", "division" => "FLD"],
            //4        
            ["name" => "Prostitutes in Malate", "complaint_id" => 4, "agent_id" => 10930193, "complainant_id" => 4,
                "status" => "Pending", "date_assigned" => "2009-03-11", "date_reported" => "2009-03-09", "division" => "FLD"],
            //5        
            ["name" => "Woman stabbed in the heart, dead", "complaint_id" => 5, "agent_id" => 10930216, "complainant_id" => 5,
                "status" => "Closed_Finished", "date_assigned" => "2013-04-23", "date_reported" => "2013-04-18", "division" => "FLD"],
            //6        
            ["name" => "3 men dead during a shootout in Surigao", "complaint_id" => 6, "agent_id" => 10930216, "complainant_id" => 6,
                "status" => "Closed_Finished", "date_assigned" => "2013-01-15", "date_reported" => "2013-01-02", "division" => "FLD"],
            //7        
            ["name" => "Scholar dead upon leaping from the 25th floor of his condominium veranda", "complaint_id" => 7, "agent_id" => 10930216, "complainant_id" => 7,
                "status" => "Closed_Finished", "date_assigned" => "2013-01-26", "date_reported" => "2013-01-11", "division" => "FLD"],
            //8        
            ["name" => "Teacher of DLSU found dead and stabbed in the brain 6 times", "complaint_id" => 8, "agent_id" => 10930216, "complainant_id" => 8,
                "status" => "Closed_Unfinished", "date_assigned" => "2013-02-07", "date_reported" => "2013-01-29", "division" => "FLD"],
            //9
            ["name" => "Mother found dead, reported to have eaten her own children", "complaint_id" => 9, "agent_id" => 10930216, "complainant_id" => 9,
                "status" => "Closed_Unfinished", "date_assigned" => "2013-03-05", "date_reported" => "2013-02-27", "division" => "FLD"],
            //10        
            ["name" => "3 Americans reported in illegal gambling site", "complaint_id" => 10, "agent_id" => 10930216, "complainant_id" => 10,
                "status" => "Closed_Finished", "date_assigned" => "2013-02-20", "date_reported" => "2013-02-03", "division" => "FLD"],
            //11
            ["name" => "Bus conductor from Leyte planted atomic bomb on bus, casualties are five of his friends", "complaint_id" => 11, "agent_id" => 10930193, "complainant_id" => 11,
                "status" => "Pending", "date_assigned" => "2013-03-30", "date_reported" => "2013-03-03", "division" => "FLD"],
            //12        
            ["name" => "Counterfeiting in XYZ Company", "complaint_id" => 12, "agent_id" => 10930216, "complainant_id" => 12,
                "status" => "Ongoing", "date_assigned" => "2013-04-01", "date_reported" => "2013-03-20", "division" => "FLD"],
            //13        
            ["name" => "Businessman from China abducted 5 children", "complaint_id" => 13, "agent_id" => 10930216, "complainant_id" => 13,
                "status" => "Ongoing", "date_assigned" => "2013-04-10", "date_reported" => "2013-04-01", "division" => "FLD"],
            //14        
            ["name" => "2 marijuana dealers in Benguet", "complaint_id" => 14, "agent_id" => 10930193, "complainant_id" => 14,
                "status" => "Pending", "date_assigned" => "2013-05-03", "date_reported" => "2013-04-01", "division" => "FLD"],
            //15        
            ["name" => "Shabu lab in Taguig invaded, drug lord spotted to be high", "complaint_id" => 15, "agent_id" => 10930217, "complainant_id" => 15,
                "status" => "Ongoing", "date_assigned" => "2013-05-22", "date_reported" => "2013-04-20", "division" => "FLD"],
            //16        
            ["name" => "2 Serendra developers involved in 30 million dollar fraud deal", "complaint_id" => 16, "agent_id" => 10930193, "complainant_id" => 16,
                "status" => "Non-viable", "date_assigned" => "2013-06-10", "date_reported" => "2013-04-12", "division" => "FLD"],
            //17        
            ["name" => "Man shot in the head by a stray bullet", "complaint_id" => 17, "agent_id" => 10930193, "complainant_id" => 17,
                "status" => "Non-viable", "date_assigned" => "2013-06-17", "date_reported" => "2013-05-12", "division" => "FLD"],
            //18        
            ["name" => "Drug pusher dead, 2 injured in Caloocan City", "complaint_id" => 18, "agent_id" => 10930193, "complainant_id" => 18,
                "status" => "Non-viable", "date_assigned" => "2013-07-07", "date_reported" => "2013-05-20", "division" => "FLD"],
            //19        
            ["name" => "Pinay allegedly raped by boyfriend", "complaint_id" => 19, "agent_id" => 10930193, "complainant_id" => 19,
                "status" => "Pending", "date_assigned" => "2013-07-27", "date_reported" => "2013-04-10", "division" => "FLD"],
            //20        
            ["name" => "3 dead in shooting range", "complaint_id" => 20, "agent_id" => 10930193, "complainant_id" => 20,
                "status" => "Non-viable", "date_assigned" => "2013-08-11", "date_reported" => "2013-05-20", "division" => "FLD"],
            //21
            ["name" => "Top druglord of Zamboanga, released", "complaint_id" => 21, "agent_id" => 10930193, "complainant_id" => 21,
                "status" => "Non-viable", "date_assigned" => "2013-08-29", "date_reported" => "2013-07-07", "division" => "FLD"],
            //22
            ["name" => "Paramedic stabbed in roadside ambush", "agent_id" => 10930193, "complaint_id" => 22, "complainant_id" => 22,
                "status" => "Pending", "date_assigned" => "2013-09-10", "date_reported" => "2013-04-22", "division" => "FLD"],
            //23
            ["name" => "Drunk driver shoots civilian jogging", "complaint_id" => 23, "agent_id" => 10930217, "complainant_id" => 23,
                "status" => "Ongoing", "date_assigned" => "2013-09-21", "date_reported" => "2013-07-12", "division" => "FLD"],
            //24        
            ["name" => "5 men involved in robbery and homicide inside Security Bank Alabang", "complaint_id" => 24, "agent_id" => 10930193, "complainant_id" => 24,
                "status" => "Pending", "date_assigned" => "2013-10-11", "date_reported" => "2013-09-22", "division" => "FLD"],
            //25        
            ["name" => "Man committed suicide after vandalizing in Pasay", "complaint_id" => 25, "agent_id" => 10930193, "complainant_id" => 25,
                "status" => "Pending", "date_assigned" => "2013-10-22", "date_reported" => "2013-08-12", "division" => "FLD"],
            //26        
            ["name" => "Secretary raped by an American in boarding house", "complaint_id" => 26, "agent_id" => 10930193, "complainant_id" => 26,
                "status" => "Pending", "date_assigned" => "2013-11-03", "date_reported" => "2013-09-09", "division" => "FLD"],
            //27        
            ["name" => "3 prostitutes identified to be professors in well-known university", "complaint_id" => 27, "agent_id" => 10930217, "complainant_id" => 27,
                "status" => "Ongoing", "date_assigned" => "2013-11-23", "date_reported" => "2013-10-22", "division" => "FLD"],
            //28        
            ["name" => "2 Korean students in possession of drugs, caught dealing to high school students", "complaint_id" => 28, "agent_id" => 10930193, "complainant_id" => 28,
                "status" => "Ongoing", "date_assigned" => "2013-12-01", "date_reported" => "2013-10-28", "division" => "FLD"],
            //29        
            ["name" => "Girl raped by her own uncle on her birthday", "complaint_id" => 29, "agent_id" => 10930217, "complainant_id" => 29,
                "status" => "Closed_Finished", "date_assigned" => "2013-12-18", "date_reported" => "2013-11-12", "division" => "FLD"],
            //30        
            ["name" => "African-American businessmen counterfeiting cellular phones", "complaint_id" => 30, "agent_id" => 10930193, "complainant_id" => 30,
                "status" => "Ongoing", "date_assigned" => "2013-12-27", "date_reported" => "2013-11-20", "division" => "FLD"],
            //**AFAD**//
            //31
            ["name" => "Man shot dead while running from gunmen outside EGI apartment", "complaint_id" => 31, "agent_id" => 10916644, "complainant_id" => 31,
                "status" => "Closed_Finished", "date_assigned" => "2013-01-02", "date_reported" => "2012-12-28", "division" => "AFAD"],
            //32
            ["name" => "2 men involved in investment fraud case", "complaint_id" => 32, "agent_id" => 10930195, "complainant_id" => 32,
                "status" => "Non-viable", "date_assigned" => "2013-07-04", "date_reported" => "2013-07-01", "division" => "AFAD"],
            //33
            ["name" => "American fireman arrested for using phony license", "complaint_id" => 33, "agent_id" => 10930195, "complainant_id" => 33,
                "status" => "Pending", "date_assigned" => "2014-01-13", "date_reported" => "2013-01-10", "division" => "AFAD"],
            //34
            ["name" => "American manager charged with defrauding", "complaint_id" => 34, "agent_id" => 10930195, "complainant_id" => 34,
                "status" => "Pending", "date_assigned" => "2014-02-04", "date_reported" => "2012-02-01", "division" => "AFAD"],
            //35
            ["name" => "Gift card fraud leads to drug dealing, counterfeiting", "complaint_id" => 35, "agent_id" => 10916644, "complainant_id" => 35,
                "status" => "Closed_Finished", "date_assigned" => "2014-03-05", "date_reported" => "2014-03-02", "division" => "AFAD"],
            //36
            ["name" => "Criminal investment fraud case by wealthy businessman", "complaint_id" => 36, "agent_id" => 10916645, "complainant_id" => 36,
                "status" => "Closed_Finished", "date_assigned" => "2014-01-27", "date_reported" => "2014-01-25", "division" => "AFAD"],
            //37
            ["name" => "Chase with bank robbery suspects in Quezon City", "complaint_id" => 37, "agent_id" => 10916645, "complainant_id" => 37,
                "status" => "Closed_Finished", "date_assigned" => "2014-03-18", "date_reported" => "2014-03-17", "division" => "AFAD"],
            //38
            ["name" => "Woman shot dead after allegedly going into a police officer’s home", "complaint_id" => 38, "agent_id" => 10916645, "complainant_id" => 38,
                "status" => "Closed_Finished", "date_assigned" => "2013-05-28", "date_reported" => "2013-05-26", "division" => "AFAD"],
            //39
            ["name" => "Man sets woman's house on fire; woman dead", "complaint_id" => 39, "agent_id" => 10916644, "complainant_id" => 39,
                "status" => "Ongoing", "date_assigned" => "2013-02-01", "date_reported" => "2013-01-27", "division" => "AFAD"],
            //40
            ["name" => "Shots fired, customers forced to the ground during holdup of IT professional", "complaint_id" => 40, "agent_id" => 10930195, "complainant_id" => 40,
                "status" => "Pending", "date_assigned" => "2013-07-16", "date_reported" => "2013-07-13", "division" => "AFAD"],
            //**AGD**//
            //41
            ["name" => "Female mutilation case against Chinese newsreader", "complaint_id" => 41, "agent_id" => 10930197, "complainant_id" => 41,
                "status" => "Pending", "date_assigned" => "2013-04-23", "date_reported" => "2013-04-18", "division" => "AGD"],
            //42
            ["name" => "Battered wife suffered from serious physical injuries", "complaint_id" => 42, "agent_id" => 10930197, "complainant_id" => 42,
                "status" => "Pending", "date_assigned" => "2013-01-15", "date_reported" => "2013-01-02", "division" => "AGD"],
            //43
            ["name" => "Chinese plumber kidnapped Filipino kid", "complaint_id" => 43, "agent_id" => 10916646, "complainant_id" => 43,
                "status" => "Closed_Finished", "date_assigned" => "2013-01-26", "date_reported" => "2013-01-11", "division" => "AGD"],
            //44
            ["name" => "Chinese plumber raped UST medical student", "complaint_id" => 44, "agent_id" => 10916646, "complainant_id" => 44,
                "status" => "Closed_Finished", "date_assigned" => "2013-02-07", "date_reported" => "2013-01-29", "division" => "AGD"],
            //45
            ["name" => "Slavery case against Bing Ng", "complaint_id" => 45, "agent_id" => 10916647, "complainant_id" => 45,
                "status" => "Closed_Finished", "date_assigned" => "2012-02-20", "date_reported" => "2012-02-03", "division" => "AGD"],
            //46
            ["name" => "Abandonment of helpless person in Pasig river", "complaint_id" => 46, "agent_id" => 10930197, "complainant_id" => 46,
                "status" => "Non-viable", "date_assigned" => "2013-03-05", "date_reported" => "2013-02-27", "division" => "AGD"],
            //47    
            ["name" => "Japanese prostitute in possession of illegal drugs", "complaint_id" => 47, "agent_id" => 10916647, "complainant_id" => 47,
                "status" => "Closed_Finished", "date_assigned" => "2013-03-30", "date_reported" => "2013-03-03", "division" => "AGD"],
            //48
            ["name" => "Ex-singer from Japan trespass private property in Quezon City", "complaint_id" => 48, "agent_id" => 10930197, "complainant_id" => 48,
                "status" => "Non-viable", "date_assigned" => "2013-04-01", "date_reported" => "2013-03-20", "division" => "AGD"],
            //49
            ["name" => "Japanese nurse injecting illegal drug to patient", "complaint_id" => 49, "agent_id" => 10916647, "complainant_id" => 49,
                "status" => "Closed_Unfinished", "date_assigned" => "2013-04-10", "date_reported" => "2013-04-01", "division" => "AGD"],
            //50
            ["name" => "Child sex abuse suspect found in hotel", "complaint_id" => 50, "agent_id" => 10930197, "complainant_id" => 50,
                "status" => "Closed_Unfinished", "date_assigned" => "2013-05-03", "date_reported" => "2013-04-01", "division" => "AGD"],
            //**AHTRAD**//
            //51
            ["name" => "Bing Ng slaves his son", "complaint_id" => 51, "agent_id" => 10916648, "complainant_id" => 1,
                "status" => "Ongoing", "date_assigned" => "2013-05-22", "date_reported" => "2013-04-20", "division" => "AHTRAD"],
            //52
            ["name" => "Batsi gang brigandage in SM Sta. Mesa", "complaint_id" => 52, "agent_id" => 10916648, "complainant_id" => 2,
                "status" => "Closed_Finished", "date_assigned" => "2013-06-10", "date_reported" => "2013-04-12", "division" => "AHTRAD"],
            //53
            ["name" => "Brigandage case in Quezon City", "complaint_id" => 53, "agent_id" => 10916648, "complainant_id" => 3,
                "status" => "Ongoing", "date_assigned" => "2013-06-17", "date_reported" => "2013-05-12", "division" => "AHTRAD"],
            //54
            ["name" => "Theft case against Vietnamese Librarian", "complaint_id" => 54, "agent_id" => 10930199, "complainant_id" => 4,
                "status" => "Non-viable", "date_assigned" => "2013-07-07", "date_reported" => "2013-05-20", "division" => "AHTRAD"],
            //55
            ["name" => "Swindling case against Watanabe Mayu", "complaint_id" => 55, "agent_id" => 10930199, "complainant_id" => 5,
                "status" => "Pending", "date_assigned" => "2013-07-27", "date_reported" => "2013-04-10", "division" => "AHTRAD"],
            //56
            ["name" => "Arson case against Australian politician Jack Marshall", "complaint_id" => 56, "agent_id" => 10916649, "complainant_id" => 6,
                "status" => "Closed_Finished", "date_assigned" => "2013-08-11", "date_reported" => "2013-05-20", "division" => "AHTRAD"],
            //57
            ["name" => "Teenager gets pregnant by alleged rapist", "complaint_id" => 57, "agent_id" => 10916649, "complainant_id" => 2,
                "status" => "Closed_Unfinished", "date_assigned" => "2013-08-29", "date_reported" => "2013-08-07", "division" => "AHTRAD"],
            //58
            ["name" => "Anne Curtis-Smith raped in an inn", "complaint_id" => 58, "agent_id" => 10916649, "complainant_id" => 7,
                "status" => "Closed_Finished", "date_assigned" => "2013-09-10", "date_reported" => "2013-08-22", "division" => "AHTRAD"],
            //59
            ["name" => "Boy Abunda bribed for 10 million pesos", "complaint_id" => 59, "agent_id" => 10930199, "complainant_id" => 8,
                "status" => "Non-viable", "date_assigned" => "2013-09-21", "date_reported" => "2013-07-12", "division" => "AHTRAD"],
            //60
            ["name" => "Abduction case against Ming Li Chiu", "complaint_id" => 60, "agent_id" => 10916649, "complainant_id" => 9,
                "status" => "Closed_Finished", "date_assigned" => "2013-10-11", "date_reported" => "2013-09-22", "division" => "AHTRAD"],
            //**AOCD**//
            //61
            ["name" => "OFW aborted her daughter", "complaint_id" => 61, "agent_id" => 10930111, "complainant_id" => 10,
                "status" => "Pending", "date_assigned" => "2013-10-12", "date_reported" => "2013-06-29", "division" => "AOCD"],
            //62
            ["name" => "Man killed his own son in their own house", "complaint_id" => 62, "agent_id" => 10916650, "complainant_id" => 11,
                "status" => "Closed_Finished", "date_assigned" => "2013-10-12", "date_reported" => "2013-06-28", "division" => "AOCD"],
            //63
            ["name" => "High school exchange student raped his teacher", "complaint_id" => 63, "agent_id" => 10916650, "complainant_id" => 12,
                "status" => "Closed_Finished", "date_assigned" => "2013-10-12", "date_reported" => "2013-06-04", "division" => "AOCD"],
            //64
            ["name" => "Theft in Makati Memorial Center", "complaint_id" => 64, "agent_id" => 10930111, "complainant_id" => 13,
                "status" => "Non-viable", "date_assigned" => "2013-10-12", "date_reported" => "2013-06-04", "division" => "AOCD"],
            //65
            ["name" => "Teen charged with killing his father in Cebu", "complaint_id" => 65, "agent_id" => 10916650, "complainant_id" => 14,
                "status" => "Closed_Finished", "date_assigned" => "2013-06-10", "date_reported" => "2013-02-04", "division" => "AOCD"],
            //66
            ["name" => "Welder from Surigao pushed co-welder off the roof, co-welder dead on arrival", "complaint_id" => 66, "agent_id" => 10930111, "complainant_id" => 15,
                "status" => "Pending", "date_assigned" => "2013-06-10", "date_reported" => "2013-02-04", "division" => "AOCD"],
            //67
            ["name" => "Girl dead inside boyfriend's car", "complaint_id" => 67, "agent_id" => 10930111, "complainant_id" => 16,
                "status" => "Pending", "date_assigned" => "2013-07-27", "date_reported" => "2013-01-05", "division" => "AOCD"],
            //68
            ["name" => "Father killed his son in exchange for drugs", "complaint_id" => 68, "agent_id" => 10916651, "complainant_id" => 17,
                "status" => "Closed_Finished", "date_assigned" => "2013-07-27", "date_reported" => "2013-02-28", "division" => "AOCD"],
            //69
            ["name" => "Man arrested in bingo hall armed robbery", "complaint_id" => 69, "agent_id" => 10916651, "complainant_id" => 18,
                "status" => "Closed_Finished", "date_assigned" => "2013-07-27", "date_reported" => "2013-06-10", "division" => "AOCD"],
            //70
            ["name" => "Libel case against Mass Communications student, Anthony Manalo", "complaint_id" => 70, "agent_id" => 10930111, "complainant_id" => 19,
                "status" => "Pending", "date_assigned" => "2013-04-01", "date_reported" => "2013-02-04", "division" => "AOCD"],
            //**CCD**//
            //71
            ["name" => "Politician sets abandoned building on fire after having an affair", "complaint_id" => 71, "agent_id" => 10916652, "complainant_id" => 20,
                "status" => "Closed_Finished", "date_assigned" => "2009-07-27", "date_reported" => "2009-06-10", "division" => "CCD"],
            //72
            ["name" => "Slander case against blogger about first amendment questions", "complaint_id" => 72, "agent_id" => 10930113, "complainant_id" => 21,
                "status" => "Pending", "date_assigned" => "2013-04-01", "date_reported" => "2013-02-03", "division" => "CCD"],
            //73
            ["name" => "$60 million libel lawsuit case against politician", "complaint_id" => 73, "agent_id" => 10930113, "complainant_id" => 22,
                "status" => "Pending", "date_assigned" => "2013-08-10", "date_reported" => "2013-06-03", "division" => "CCD"],
            //74
            ["name" => "Robbery inside Citibank Alabang", "complaint_id" => 74, "agent_id" => 10916652, "complainant_id" => 23,
                "status" => "Closed_Finished", "date_assigned" => "2013-08-10", "date_reported" => "2013-06-03", "division" => "CCD"],
            //75
            ["name" => "American raped Korean student inside Malate boarding house", "complaint_id" => 75, "agent_id" => 10916652, "complainant_id" => 27,
                "status" => "Closed_Finished", "date_assigned" => "2013-08-10", "date_reported" => "2013-06-03", "division" => "CCD"],
            //76
            ["name" => "Doctor cheated on his wife and raped his niece", "complaint_id" => 76, "agent_id" => 10930113, "complainant_id" => 24,
                "status" => "Pending", "date_assigned" => "2013-09-13", "date_reported" => "2013-09-10", "division" => "CCD"],
            //77
            ["name" => "Korean drug dealer murdered high school student", "complaint_id" => 77, "agent_id" => 10916653, "complainant_id" => 25,
                "status" => "Closed_Finished", "date_assigned" => "2010-01-13", "date_reported" => "2010-12-31", "division" => "CCD"],
            //78
            ["name" => "Fake iPhone 5S units in Greenhills counterfeited by African-Americans", "complaint_id" => 78, "agent_id" => 10916653, "complainant_id" => 26,
                "status" => "Closed_Unfinished", "date_assigned" => "2010-12-29", "date_reported" => "2010-12-04", "division" => "CCD"],
            //79
            ["name" => "Counterfeit dollar bills printed for bank payment", "complaint_id" => 79, "agent_id" => 10916653, "complainant_id" => 28,
                "status" => "Closed_Unfinished", "date_assigned" => "2010-12-03", "date_reported" => "2010-11-11", "division" => "CCD"],
            //80
            ["name" => "Chinese businessman kidnaps elementary school kid", "complaint_id" => 80, "agent_id" => 10916653, "complainant_id" => 29,
                "status" => "Closed_Finished", "date_assigned" => "2009-12-23", "date_reported" => "2009-11-21", "division" => "CCD"],
            //EWPID
            //81-90
            ["name" => "Forgery case against Bea Puzon", "complaint_id" => 81, "agent_id" => 10930204, "complainant_id" => 61,
                "status" => "Closed_Finished", "date_assigned" => "2008-12-11", "date_reported" => "2008-11-30", "division" => "EWPID"],
            ["name" => "Gambling in the street case against Bernice Bassig", "complaint_id" => 82, "agent_id" => 10930204, "complainant_id" => 62,
                "status" => "Closed_Finished", "date_assigned" => "2008-12-12", "date_reported" => "2008-11-01", "division" => "EWPID"],
            ["name" => "Sexual Abuse case against Natasha Ocampo", "complaint_id" => 83, "agent_id" => 10930204, "complainant_id" => 63,
                "status" => "Closed_Finished", "date_assigned" => "2008-12-13", "date_reported" => "2008-11-02", "division" => "EWPID"],
            ["name" => "Grave Scandal against Katherine Pascual", "complaint_id" => 84, "agent_id" => 10930205, "complainant_id" => 64,
                "status" => "Closed_Finished", "date_assigned" => "2010-12-14", "date_reported" => "2010-11-03", "division" => "EWPID"],
            ["name" => "Public disorder against Timi Gatdula", "complaint_id" => 85, "agent_id" => 10930205, "complainant_id" => 65,
                "status" => "Closed_Unfinished", "date_assigned" => "2010-12-15", "date_reported" => "2010-11-04", "division" => "EWPID"],
            ["name" => "Direct Assault against Mia Serra", "complaint_id" => 86, "agent_id" => 10930205, "complainant_id" => 66,
                "status" => "Closed_Finished", "date_assigned" => "2011-12-16", "date_reported" => "2011-11-05", "division" => "EWPID"],
            ["name" => "Forgery against Elayssa Ferias", "complaint_id" => 87, "agent_id" => 10930205, "complainant_id" => 67,
                "status" => "Pending", "date_assigned" => "2011-12-17", "date_reported" => "2011-11-06", "division" => "EWPID"],
            ["name" => "Bribery against Pamela Mendiola", "complaint_id" => 88, "agent_id" => 10930206, "complainant_id" => 68,
                "status" => "Pending", "date_assigned" => "2011-12-18", "date_reported" => "2011-11-07", "division" => "EWPID"],
            ["name" => "Prohibited transaction case against Judith Pasay", "complaint_id" => 89, "agent_id" => 10930206, "complainant_id" => 69,
                "status" => "Ongoing", "date_assigned" => "2011-12-19", "date_reported" => "2011-11-08", "division" => "EWPID"],
            ["name" => "Infidelity against Mikaella Makati", "complaint_id" => 90, "agent_id" => 10930206, "complainant_id" => 70,
                "status" => "Ongoing", "date_assigned" => "2013-12-20", "date_reported" => "2013-11-09", "division" => "EWPID"],
            //DID
            //91-100
            ["name" => "Disobedience against Junelle Recto", "complaint_id" => 91, "agent_id" => 10930201, "complainant_id" => 71,
                "status" => "Closed_Finished", "date_assigned" => "2011-12-21", "date_reported" => "2011-11-10", "division" => "DID"],
            ["name" => "Relevance of secret case against Jesebel Osmena", "complaint_id" => 92, "agent_id" => 10930201, "complainant_id" => 722,
                "status" => "Closed_Unfinished", "date_assigned" => "2011-12-22", "date_reported" => "2011-11-11", "division" => "DID"],
            ["name" => "Maltreatment of Prisoner against SPO1. Michael Enriquez", "complaint_id" => 93, "agent_id" => 10930201, "complainant_id" => 73,
                "status" => "Closed_Finished", "date_assigned" => "2012-12-23", "date_reported" => "2012-11-12", "division" => "DID"],
            ["name" => "Usurpation againts Corazon Cojuangco", "complaint_id" => 94, "agent_id" => 10930201, "complainant_id" => 74,
                "status" => "Pending", "date_assigned" => "2012-12-24", "date_reported" => "2012-11-13", "division" => "DID"],
            ["name" => "Suicide committed by James Martinez", "complaint_id" => 95, "agent_id" => 10930202, "complainant_id" => 75,
                "status" => "Ongoing", "date_assigned" => "2012-12-25", "date_reported" => "2012-11-14", "division" => "DID"],
            ["name" => "Abortion against Lucila Criselda", "complaint_id" => 96, "agent_id" => 10930202, "complainant_id" => 76,
                "status" => "Pending", "date_assigned" => "2012-12-26", "date_reported" => "2012-11-15", "division" => "DID"],
            ["name" => "Infanticide against Fernando Amorsolo", "complaint_id" => 97, "agent_id" => 10930202, "complainant_id" => 77,
                "status" => "Closed_Unfinished", "date_assigned" => "2013-12-27", "date_reported" => "2013-11-16", "division" => "DID"],
            ["name" => "Serious illegal detention against Janet Lim Napoles", "complaint_id" => 98, "agent_id" => 10930202, "complainant_id" => 78,
                "status" => "Ongoing", "date_assigned" => "2013-12-28", "date_reported" => "2013-11-17", "division" => "DID"],
            ["name" => "Kidnapping against Darwin Daroy", "complaint_id" => 99, "agent_id" => 10930203, "complainant_id" => 79,
                "status" => "Closed_Finished", "date_assigned" => "2013-12-29", "date_reported" => "2013-11-18", "division" => "DID"],
            ["name" => "Slavery against Enrico Roco", "complaint_id" => 100, "agent_id" => 10930203, "complainant_id" => 80,
                "status" => "Pending", "date_assigned" => "2013-12-30", "date_reported" => "2013-11-19", "division" => "DID"],
            //IPRD
            //101-110
            ["name" => "Drunk driving case against Jonathan Ochoa", "complaint_id" => 101, "agent_id" => 10930207, "complainant_id" => 51,
                "status" => "Closed_Finished", "date_assigned" => "2009-05-02", "date_reported" => "2009-05-01", "division" => "IPRD"],
            ["name" => "Possession of dangerous drugs for sale against Ernesto Villamin", "complaint_id" => 102, "agent_id" => 10930207, "complainant_id" => 52,
                "status" => "Closed_Finished", "date_assigned" => "2009-05-04", "date_reported" => "2009-05-02", "division" => "IPRD"],
            ["name" => "Vandalism case against Armando Villena", "complaint_id" => 103, "agent_id" => 10930207, "complainant_id" => 53,
                "status" => "Closed_Finished", "date_assigned" => "2010-05-05", "date_reported" => "2010-05-03", "division" => "IPRD"],
            ["name" => "Robbery case against Carlo Sta. Cruz and Patrick Hubalde", "complaint_id" => 104, "agent_id" => 10930208, "complainant_id" => 54,
                "status" => "Closed_Finished", "date_assigned" => "2010-05-06", "date_reported" => "2010-05-05", "division" => "IPRD"],
            ["name" => "Treason case against Algeirn Cupido", "complaint_id" => 105, "agent_id" => 10930208, "complainant_id" => 55,
                "status" => "Closed_Finished", "date_assigned" => "2011-05-10", "date_reported" => "2011-05-08", "division" => "IPRD"],
            ["name" => "Espionage case against Joey Gutierrez", "complaint_id" => 106, "agent_id" => 10930208, "complainant_id" => 56,
                "status" => "Closed_Unfinished", "date_assigned" => "2012-05-13", "date_reported" => "2012-05-10", "division" => "IPRD"],
            ["name" => "Robbery case against Andy Kanto", "complaint_id" => 107, "agent_id" => 10930208, "complainant_id" => 57,
                "status" => "Ongoing", "date_assigned" => "2012-05-18", "date_reported" => "2012-05-10", "division" => "IPRD"],
            ["name" => "Rape case against Kevin Macatangay", "complaint_id" => 108, "agent_id" => 10930208, "complainant_id" => 58,
                "status" => "Ongoing", "date_assigned" => "2013-05-20", "date_reported" => "2013-05-18", "division" => "IPRD"],
            ["name" => "Domestic violence case against Juan Abadicio", "complaint_id" => 109, "agent_id" => 10930209, "complainant_id" => 59,
                "status" => "Ongoing", "date_assigned" => "2013-05-25", "date_reported" => "2013-05-18", "division" => "IPRD"],
            ["name" => "Petty Theft case against Abo Acleb", "complaint_id" => 110, "agent_id" => 10930209, "complainant_id" => 60,
                "status" => "Pending", "date_assigned" => "2013-05-30", "date_reported" => "2013-05-18", "division" => "IPRD"],
            //RAID
            //111-120
            ["name" => "Arbitrary detention case against Carlito Alupido ", "complaint_id" => 111, "agent_id" => 10930210, "complainant_id" => 81,
                "status" => "Closed_Unfinished", "date_assigned" => "2010-02-02", "date_reported" => "2010-01-30", "division" => "RAID"],
            ["name" => "Expulsion against Samuel Aglipay", "complaint_id" => 112, "agent_id" => 10930210, "complainant_id" => 82,
                "status" => "Closed_Unfinished", "date_assigned" => "2010-02-03", "date_reported" => "2010-02-02", "division" => "RAID"],
            ["name" => "Violation of domicile case against Ricardo Aglido", "complaint_id" => 113, "agent_id" => 10930210, "complainant_id" => 83,
                "status" => "Closed_Finished", "date_assigned" => "2010-02-07", "date_reported" => "2010-02-02", "division" => "RAID"],
            ["name" => "Prohibition, interruption, and dissolution of peaceful meetings case Benigno Afrilami", "complaint_id" => 114, "agent_id" => 10930210, "complainant_id" => 84,
                "status" => "Closed_Finished", "date_assigned" => "2011-02-15", "date_reported" => "2011-02-10", "division" => "RAID"],
            ["name" => "Rebellion case against Daniel Bercasio", "complaint_id" => 115, "agent_id" => 10930211, "complainant_id" => 85,
                "status" => "Closed_Finished", "date_assigned" => "2011-02-17", "date_reported" => "2011-02-10", "division" => "RAID"],
            ["name" => "Disloyalty case against Eclestio Borromeo", "complaint_id" => 116, "agent_id" => 10930211, "complainant_id" => 86,
                "status" => "Closed_Finished", "date_assigned" => "2013-02-18", "date_reported" => "2013-02-16", "division" => "RAID"],
            ["name" => "Disturbance of proceedings case against Mark Bermudez", "complaint_id" => 117, "agent_id" => 10930211, "complainant_id" => 87,
                "status" => "Ongoing", "date_assigned" => "2013-02-20", "date_reported" => "2013-02-19", "division" => "RAID"],
            ["name" => "Illegal Assemblies case against Dave Bermillo", "complaint_id" => 118, "agent_id" => 10930212, "complainant_id" => 88,
                "status" => "Ongoing", "date_assigned" => "2013-02-22", "date_reported" => "2013-02-22", "division" => "RAID"],
            ["name" => "Direct assault against Annete Cruz", "complaint_id" => 119, "agent_id" => 10930212, "complainant_id" => 89,
                "status" => "Ongoing", "date_assigned" => "2014-02-27", "date_reported" => "2014-02-27", "division" => "RAID"],
            ["name" => "Direct assault against Angela Criselda", "complaint_id" => 120, "agent_id" => 10930212, "complainant_id" => 90,
                "status" => "Pending", "date_assigned" => "2014-02-28", "date_reported" => "2014-02-27", "division" => "RAID"],
            //VAWCD
            //121-130
            ["name" => "Public disorder case against Aubrey Catindig", "complaint_id" => 121, "agent_id" => 10930213, "complainant_id" => 91,
                "status" => "Closed_Finished", "date_assigned" => "2009-10-01", "date_reported" => "2009-09-30", "division" => "VAWCD"],
            ["name" => "Forgery against Miley Cauricio", "complaint_id" => 122, "agent_id" => 10930213, "complainant_id" => 92,
                "status" => "Closed_Finished", "date_assigned" => "2009-10-01", "date_reported" => "2009-10-01", "division" => "VAWCD"],
            ["name" => "Falsification case against Ashley Dagonoy", "complaint_id" => 123, "agent_id" => 10930213, "complainant_id" => 93,
                "status" => "Closed_Finished", "date_assigned" => "2010-10-04", "date_reported" => "2010-10-02", "division" => "VAWCD"],
            ["name" => "Fraud case against Nicole Dalig", "complaint_id" => 124, "agent_id" => 10930214, "complainant_id" => 94,
                "status" => "Closed_Unfinished", "date_assigned" => "2010-10-07", "date_reported" => "2010-10-06", "division" => "VAWCD"],
            ["name" => "Dereliction of duty case against Trixie Duterte", "complaint_id" => 125, "agent_id" => 10930214, "complainant_id" => 95,
                "status" => "Pending", "date_assigned" => "2011-10-11", "date_reported" => "2011-10-10", "division" => "VAWCD"],
            ["name" => "Bribery against Rosanna Fernando", "complaint_id" => 126, "agent_id" => 10930214, "complainant_id" => 96,
                "status" => "Closed_Finished", "date_assigned" => "2011-10-12", "date_reported" => "2011-10-12", "division" => "VAWCD"],
            ["name" => "Prohibited transaction case against Rosanne Fuentes", "complaint_id" => 127, "agent_id" => 10930214, "complainant_id" => 97,
                "status" => "Closed_Finished", "date_assigned" => "2012-10-16", "date_reported" => "2012-10-15", "division" => "VAWCD"],
            ["name" => "Infidelity case against Reggie Faminial", "complaint_id" => 128, "agent_id" => 10930215, "complainant_id" => 98,
                "status" => "Ongoing", "date_assigned" => "2012-10-22", "date_reported" => "2012-10-20", "division" => "VAWCD"],
            ["name" => "Disobedience case againt Lauren Marinias", "complaint_id" => 129, "agent_id" => 10930215, "complainant_id" => 99,
                "status" => "Ongoing", "date_assigned" => "2012-10-23", "date_reported" => "2012-10-20", "division" => "VAWCD"],
            ["name" => "Forgery against Lovely Bueno and Leslie Antonio", "complaint_id" => 130, "agent_id" => 10930215, "complainant_id" => 100,
                "status" => "Pending", "date_assigned" => "2013-10-30", "date_reported" => "2013-10-29", "division" => "VAWCD"],
        );

        // Uncomment the below to run the seeder
        DB::table('kases')->insert($kases);
    }

}
