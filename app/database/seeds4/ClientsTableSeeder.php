<?php

class ClientsTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
         DB::table('clients')->truncate();

        $clients = array(
            
            //1
            ["last_name" => "Cyrus", "first_name" => "Miley", "middle_name" => "Ray", "alias" => "Miley",
                "birthdate" => "1992-11-23", "occupation" => "Singer", "sex" => "Female", 
                "civil_status" => "Single", "citizenship" => "American", "birth_place" => "",
                "educational_attainment" => "", "hair_color" => "", "eye_color" => "",
                "complexion" => "", "build" => "", "Race" => ""],
            //2    
            ["last_name" => "Germanotta", "first_name" => "Stephanie", "middle_name" => "Joanne", "alias" => "Lady Gaga",
                "birthdate" => "1986-03-28", "occupation" => "Businesswoman", "sex" => "Female", 
                "civil_status" => "Married", "citizenship" => "American", "birth_place" => "",
                "educational_attainment" => "", "hair_color" => "", "eye_color" => "",
                "complexion" => "", "build" => "", "Race" => ""],
            //3    
            ["last_name" => "Aquino", "first_name" => "Benigno Simeon III", "middle_name" => "Cojuangco", "alias" => "Noynoy",
                "birthdate" => "1960-02-08", "occupation" => "Politician", "sex" => "Male", 
                "civil_status" => "Annulled", "citizenship" => "Filipino", "birth_place" => "",
                "educational_attainment" => "", "hair_color" => "", "eye_color" => "",
                "complexion" => "", "build" => "", "Race" => ""],
            //4    
            ["last_name" => "Navarro", "first_name" => "Ferdinand", "middle_name" => "Hipolito", "alias" => "Vhong",
                "birthdate" => "1977-01-04", "occupation" => "Actor", "sex" => "Male", 
                "civil_status" => "Single", "citizenship" => "Filipino", "birth_place" => "",
                "educational_attainment" => "", "hair_color" => "", "eye_color" => "",
                "complexion" => "", "build" => "", "Race" => ""],
            //5    
            ["last_name" => "Viceral", "first_name" => "Jose Marie", "middle_name" => "Borja", "alias" => "Vice Ganda",
                "birthdate" => "1976-03-31", "occupation" => "Comedian", "sex" => "Male", 
                "civil_status" => "Married", "citizenship" => "Filipino", "birth_place" => "",
                "educational_attainment" => "", "hair_color" => "", "eye_color" => "",
                "complexion" => "", "build" => "", "Race" => ""],
            //6    
            ["last_name" => "Padilla", "first_name" => "Daniel John", "middle_name" => "Ford", "alias" => "Daniel",
                "birthdate" => "1992-04-26", "occupation" => "Actor", "sex" => "Male", 
                "civil_status" => "Single", "citizenship" => "Filipino", "birth_place" => "",
                "educational_attainment" => "", "hair_color" => "", "eye_color" => "",
                "complexion" => "", "build" => "", "Race" => ""],
            //7    
            ["last_name" => "Curtis-Smith", "first_name" => "Anne", "middle_name" => "Ojales", "alias" => "Anne",
                "birthdate" => "1977-01-04", "occupation" => "Actress", "sex" => "Female", 
                "civil_status" => "Single", "citizenship" => "Filipino-Australian", "birth_place" => "",
                "educational_attainment" => "", "hair_color" => "", "eye_color" => "",
                "complexion" => "", "build" => "", "Race" => ""],
            //8    
            ["last_name" => "Abunda", "first_name" => "Eugenio", "middle_name" => "Romerica", "alias" => "Boy",
                "birthdate" => "1955-10-29", "occupation" => "Host", "sex" => "Male", 
                "civil_status" => "Married", "citizenship" => "Filipino", "birth_place" => "",
                "educational_attainment" => "", "hair_color" => "", "eye_color" => "",
                "complexion" => "", "build" => "", "Race" => ""],
            //9    
            ["last_name" => "Bernardo", "first_name" => "Kathryn Chandria", "middle_name" => "Manuel", "alias" => "Kathryn",
                "birthdate" => "1996-03-26", "occupation" => "Actress", "sex" => "Female", 
                "civil_status" => "Single", "citizenship" => "Filipino-Australian", "birth_place" => "",
                "educational_attainment" => "", "hair_color" => "", "eye_color" => "",
                "complexion" => "", "build" => "", "Race" => ""],
            //10    
            ["last_name" => "Tawile", "first_name" => "Jessy", "middle_name" => "Mendiola", "alias" => "Maria Mercedes",
                "birthdate" => "1992-12-03", "occupation" => "Actress", "sex" => "Female", 
                "civil_status" => "Single", "citizenship" => "Filipino", "birth_place" => "",
                "educational_attainment" => "", "hair_color" => "", "eye_color" => "",
                "complexion" => "", "build" => "", "Race" => ""],  // end of complainant

            //11
            ["last_name" => "Garcia", "first_name" => "Gerald", "middle_name" => "Chua", "alias" => "Gerald",
                "birthdate" => "1970-02-20", "occupation" => "Attorney", "sex" => "Male", 
                "civil_status" => "Married", "citizenship" => "Filipino", "birth_place" => "",
                "educational_attainment" => "", "hair_color" => "", "eye_color" => "",
                "complexion" => "", "build" => "", "Race" => ""],
            //12    
            ["last_name" => "Dantic", "first_name" => "Alain", "middle_name" => "Lamang", "alias" => "Alain",
                "birthdate" => "1988", "occupation" => "Student", "sex" => "Male", 
                "civil_status" => "Single", "citizenship" => "Filipino", "birth_place" => "",
                "educational_attainment" => "", "hair_color" => "", "eye_color" => "",
                "complexion" => "", "build" => "", "Race" => ""],
            //13    
                
            ["last_name" => "Bernal", "first_name" => "Camille", "middle_name" => "Tuason", "alias" => "Cams",
                "birthdate" => "1891-01-30", "occupation" => "Hair stylist", "sex" => "Femal", 
                "civil_status" => "Single", "citizenship" => "Filipino", "birth_place" => "",
                "educational_attainment" => "", "hair_color" => "", "eye_color" => "",
                "complexion" => "", "build" => "", "Race" => ""],
            //14     
                
            ["last_name" => "Lagdameo", "first_name" => "Arrianne", "middle_name" => "Paulino", "alias" => "Arrianne",
                "birthdate" => "1977-12-21", "occupation" => "OFW", "sex" => "Female", 
                "civil_status" => "Married", "citizenship" => "Filipino", "birth_place" => "",
                "educational_attainment" => "", "hair_color" => "", "eye_color" => "",
                "complexion" => "", "build" => "", "Race" => ""],
            //15     
                
            ["last_name" => "Santos", "first_name" => "Maria Elise", "middle_name" => "Munti", "alias" => "Elise",
                "birthdate" => "1960-10-13", "occupation" => "Employee", "sex" => "Female", 
                "civil_status" => "Married", "citizenship" => "Filipino", "birth_place" => "",
                "educational_attainment" => "", "hair_color" => "", "eye_color" => "",
                "complexion" => "", "build" => "", "Race" => ""],
            //16     
                
            ["last_name" => "Lomboy", "first_name" => "Anthony", "middle_name" => "Bustamante", "alias" => "Tony",
                "birthdate" => "1893-06-13", "occupation" => "Professor", "sex" => "Male", 
                "civil_status" => "Single", "citizenship" => "Filipino", "birth_place" => "",
                "educational_attainment" => "", "hair_color" => "", "eye_color" => "",
                "complexion" => "", "build" => "", "Race" => ""],
            //17     
                
            ["last_name" => "Casas", "first_name" => "James", "middle_name" => "Roman", "alias" => "James",
                "birthdate" => "1987-09-22", "occupation" => "System Analyst", "sex" => "Male", 
                "civil_status" => "Single", "citizenship" => "Filipino", "birth_place" => "",
                "educational_attainment" => "", "hair_color" => "", "eye_color" => "",
                "complexion" => "", "build" => "", "Race" => ""],
            //18     
                
            ["last_name" => "Aguas", "first_name" => "Kyle", "middle_name" => "Garcia", "alias" => "Kyle",
                "birthdate" => "1983-02-14", "occupation" => "Seaman", "sex" => "Male", 
                "civil_status" => "Single", "citizenship" => "Filipino", "birth_place" => "",
                "educational_attainment" => "", "hair_color" => "", "eye_color" => "",
                "complexion" => "", "build" => "", "Race" => ""],
            //19     
                
            ["last_name" => "Vergara", "first_name" => "Kevin", "middle_name" => "Pascual", "alias" => "Kevs",
                "birthdate" => "1972-06-07", "occupation" => "Actor", "sex" => "Male", 
                "civil_status" => "Single", "citizenship" => "Filipino", "birth_place" => "",
                "educational_attainment" => "", "hair_color" => "", "eye_color" => "",
                "complexion" => "", "build" => "", "Race" => ""],
            //20     
                
            ["last_name" => "Aguilar", "first_name" => "Nene", "middle_name" => "Arroyo", "alias" => "Nene",
                "birthdate" => "1963-07-15", "occupation" => "Mayor", "sex" => "Male", 
                "civil_status" => "Married", "citizenship" => "Filipino", "birth_place" => "",
                "educational_attainment" => "", "hair_color" => "", "eye_color" => "",
                "complexion" => "", "build" => "", "Race" => ""],         

            //21    
            ["last_name" => "Napoles", "first_name" => "Janet", "middle_name" => "Lee", "alias" => "Janet",
                "birthdate" => "1965-10-19", "occupation" => "Dealer", "sex" => "Female", 
                "civil_status" => "Married", "citizenship" => "Filipino", "birth_place" => "",
                "educational_attainment" => "", "hair_color" => "", "eye_color" => "",
                "complexion" => "", "build" => "", "Race" => ""],
            //22    

            ["last_name" => "Castro", "first_name" => "Kyle", "middle_name" => "Leon", "alias" => "Kyle",
                "birthdate" => "1975-11-1", "occupation" => "Driver", "sex" => "Male", 
                "civil_status" => "Single", "citizenship" => "Filipino", "birth_place" => "",
                "educational_attainment" => "", "hair_color" => "", "eye_color" => "",
                "complexion" => "", "build" => "", "Race" => ""],
            //23     

             ["last_name" => "Yalung", "first_name" => "Patrick", "middle_name" => "Midas", "alias" => "Pat",
                "birthdate" => "1979-1-12", "occupation" => "Messenger", "sex" => "Male", 
                "civil_status" => "Married", "citizenship" => "Filipino", "birth_place" => "",
                "educational_attainment" => "", "hair_color" => "", "eye_color" => "",
                "complexion" => "", "build" => "", "Race" => ""], //end of informants

            //24    

             ["last_name" => "Verastigue", "first_name" => "Michael", "middle_name" => "Diamitas", "alias" => "Mike",
                "birthdate" => "1992-1-12", "occupation" => "Student", "sex" => "Male", 
                "civil_status" => "Single", "citizenship" => "Filipino", "birth_place" => "",
                "educational_attainment" => "", "hair_color" => "", "eye_color" => "",
                "complexion" => "", "build" => "", "Race" => ""], 
            //25    

             ["last_name" => "Galang", "first_name" => "John", "middle_name" => "Erese", "alias" => "John",
                "birthdate" => "1991-10-12", "occupation" => "Student", "sex" => "Male", 
                "civil_status" => "Single", "citizenship" => "Filipino", "birth_place" => "",
                "educational_attainment" => "", "hair_color" => "", "eye_color" => "",
                "complexion" => "", "build" => "", "Race" => ""],
            //26    

            ["last_name" => "Jones", "first_name" => "William", "middle_name" => "Kind", "alias" => "WIlliam",
                "birthdate" => "1980-06-12", "occupation" => "General Manager", "sex" => "Male", 
                "civil_status" => "Annulled", "citizenship" => "American", "birth_place" => "",
                "educational_attainment" => "", "hair_color" => "", "eye_color" => "",
                "complexion" => "", "build" => "", "Race" => ""], // end of witnesses 


            //27    

            ["last_name" => "Bieber", "first_name" => "Justin", "middle_name" => "Drew", "alias" => "JB",
                "birthdate" => "1994-03-01", "occupation" => "Welder", "sex" => "Male", 
                "civil_status" => "Single", "citizenship" => "Canadian", "birth_place" => "California",
                "educational_attainment" => "High School", "hair_color" => "Light Brown", "eye_color" => "Hazel",
                "complexion" => "Fair", "build" => "Ectomorph", "Race" => "Caucasian"],

            //28    
            ["last_name" => "Aquino", "first_name" => "Kristina Bernadette", "middle_name" => "Cojuangco", "alias" => "Kris",
                "birthdate" => "1971-02-14", "occupation" => "Host", "sex" => "Female", 
                "civil_status" => "Annulled", "citizenship" => "Filipino", "birth_place" => "Quezon City",
                "educational_attainment" => "College", "hair_color" => "Black", "eye_color" => "Black",
                "complexion" => "Fair", "build" => "Mesomorph", "Race" => "Mongolian"],

            //29    
            ["last_name" => "Brown", "first_name" => "Christopher", "middle_name" => "Maurice", "alias" => "Chris",
                "birthdate" => "1989-05-05", "occupation" => "Doctor", "sex" => "Male", 
                "civil_status" => "Divorced", "citizenship" => "American", "birth_place" => "Tappahannock, Virginia",
                "educational_attainment" => "Middle School", "hair_color" => "Black", "eye_color" => "Black",
                "complexion" => "Black", "build" => "Ectomorph", "Race" => "Negro"],
            //30    
            ["last_name" => "Jones", "first_name" => "Mike", "middle_name" => "Single", "alias" => "Mike",
                "birthdate" => "1970-07-05", "occupation" => "Garbage Collector", "sex" => "Male", 
                "civil_status" => "Single", "citizenship" => "Canadian", "birth_place" => "Toronto, Canada",
                "educational_attainment" => "Middle School", "hair_color" => "Brown", "eye_color" => "Blue",
                "complexion" => "Fair", "build" => "Ectomorph", "Race" => "Caucasian"],

            //31    
            ["last_name" => "Jones", "first_name" => "Mike", "middle_name" => "Single", "alias" => "Mike",
                "birthdate" => "1970-07-05", "occupation" => "Garbage Collector", "sex" => "Male", 
                "civil_status" => "Single", "citizenship" => "Canadian", "birth_place" => "Toronto, Canada",
                "educational_attainment" => "Middle School", "hair_color" => "Brown", "eye_color" => "Blue",
                "complexion" => "Fair", "build" => "Ectomorph", "Race" => "Caucasian"],

            //32    
            ["last_name" => "Santos", "first_name" => "James Joseph", "middle_name" => "Bautista", "alias" => "JJ",
                "birthdate" => "1979-01-14", "occupation" => "Office Employee", "sex" => "Male", 
                "civil_status" => "Married", "citizenship" => "Filipino", "birth_place" => "Cotabato City",
                "educational_attainment" => "High School", "hair_color" => "Black", "eye_color" => "Black",
                "complexion" => "Fair", "build" => "Mesomorph", "Race" => "Mongolian"],

            //33    
            ["last_name" => "Torres", "first_name" => "Larry", "middle_name" => "Lando", "alias" => "Larry",
                "birthdate" => "1981-02-14", "occupation" => "House husband", "sex" => "Male", 
                "civil_status" => "Married", "citizenship" => "Filipino", "birth_place" => "Makati City",
                "educational_attainment" => "College", "hair_color" => "Black", "eye_color" => "Black",
                "complexion" => "Fair", "build" => "Mesomorph", "Race" => "Mongolian"],

            //34    
            ["last_name" => "Wai", "first_name" => "Gong", "middle_name" => "Chi", "alias" => "Gong",
                "birthdate" => "1975-02-19", "occupation" => "Host", "sex" => "Female", 
                "civil_status" => "Single", "citizenship" => "Korean", "birth_place" => "Seoul, Korea",
                "educational_attainment" => "College", "hair_color" => "Black", "eye_color" => "Black",
                "complexion" => "Fair", "build" => "Mesomorph", "Race" => "Mongolian"],

            //35    
            ["last_name" => "Kristy", "first_name" => "Shawn", "middle_name" => "Michaels", "alias" => "Shawn",
                "birthdate" => "1982-05-05", "occupation" => "Teller", "sex" => "Male", 
                "civil_status" => "Married", "citizenship" => "American", "birth_place" => "Los Angeles, California",
                "educational_attainment" => "High School", "hair_color" => "Black", "eye_color" => "Black",
                "complexion" => "Black", "build" => "Ectomorph", "Race" => "Negro"],

            //36    
            ["last_name" => "Anthony", "first_name" => "Lebron", "middle_name" => "Country", "alias" => "LB",
                "birthdate" => "1982-07-05", "occupation" => "Engineer", "sex" => "Male", 
                "civil_status" => "Divorced", "citizenship" => "American", "birth_place" => "Houston, Texas",
                "educational_attainment" => "College", "hair_color" => "White", "eye_color" => "Blue",
                "complexion" => "Fair", "build" => "Ectomorph", "Race" => "Caucasian"],

                //37

                ["last_name" => "Williams", "first_name" => "Terrence", "middle_name" => "Lawson", "alias" => "Terrence",
                "birthdate" => "1974-11-05", "occupation" => "Businessman", "sex" => "Male", 
                "civil_status" => "Married", "citizenship" => "American", "birth_place" => "Washington, DC",
                "educational_attainment" => "College", "hair_color" => "Brown", "eye_color" => "Black",
                "complexion" => "Fair", "build" => "Ectomorph", "Race" => "Caucasian"],

                //38

                ["last_name" => "Bono", "first_name" => "Ken John", "middle_name" => "Tolomia", "alias" => "Ken",
                "birthdate" => "1985-01-14", "occupation" => "Welder", "sex" => "Male", 
                "civil_status" => "Single", "citizenship" => "Filipino", "birth_place" => "Quezon City",
                "educational_attainment" => "High School", "hair_color" => "Black", "eye_color" => "Black",
                "complexion" => "Fair", "build" => "Mesomorph", "Race" => "Mongolian"],

                //39

                ["last_name" => "Mendiola", "first_name" => "Lorenzo", "middle_name" => "Pandigo", "alias" => "Enzo",
                "birthdate" => "1981-07-14", "occupation" => "Bus conductor", "sex" => "Male", 
                "civil_status" => "Married", "citizenship" => "Filipino", "birth_place" => "Leyte City",
                "educational_attainment" => "High School", "hair_color" => "Black", "eye_color" => "Black",
                "complexion" => "Fair", "build" => "Mesomorph", "Race" => "Mongolian"], 

                //40  

                ["last_name" => "Martinez", "first_name" => "Karlo", "middle_name" => "Groto", "alias" => "Karlo",
                "birthdate" => "1960-01-14", "occupation" => "House husband", "sex" => "Male", 
                "civil_status" => "Married", "citizenship" => "Filipino", "birth_place" => "Cavite City",
                "educational_attainment" => "High School", "hair_color" => "Black", "eye_color" => "Black",
                "complexion" => "Fair", "build" => "Mesomorph", "Race" => "Mongolian"],

                //41

                ["last_name" => "Sese", "first_name" => "Christopher", "middle_name" => "Dela Cruz", "alias" => "Toph",
                "birthdate" => "1965-06-26", "occupation" => "Businessman", "sex" => "Male", 
                "civil_status" => "Married", "citizenship" => "Filipino", "birth_place" => "Makati City",
                "educational_attainment" => "High School", "hair_color" => "Black", "eye_color" => "Black",
                "complexion" => "Fair", "build" => "Mesomorph", "Race" => "Mongolian"], 

                //42

                ["last_name" => "See", "first_name" => "Gong Wai", "middle_name" => "Chi", "alias" => "Gong",
                "birthdate" => "1984-11-10", "occupation" => "Businessman", "sex" => "Male", 
                "civil_status" => "Single", "citizenship" => "Korean", "birth_place" => "Seoul, Korea",
                "educational_attainment" => "College", "hair_color" => "Brown", "eye_color" => "Black",
                "complexion" => "Fair", "build" => "Ectomorph", "Race" => "Caucasian"],

                //43  

                ["last_name" => "Chua", "first_name" => "Xiong", "middle_name" => "Lee", "alias" => "Xiong",
                "birthdate" => "1985-08-17", "occupation" => "Model", "sex" => "Male", 
                "civil_status" => "Single", "citizenship" => "Chinese", "birth_place" => "Beijing, China",
                "educational_attainment" => "College", "hair_color" => "Brown", "eye_color" => "Black",
                "complexion" => "Fair", "build" => "Ectomorph", "Race" => "Caucasian"],

                //44

                ["last_name" => "Long", "first_name" => "Kirk", "middle_name" => "Law", "alias" => "Kirk",
                "birthdate" => "1979-05-05", "occupation" => "Programmer", "sex" => "Male", 
                "civil_status" => "Single", "citizenship" => "American", "birth_place" => "Brooklyn, New York",
                "educational_attainment" => "College", "hair_color" => "Gray", "eye_color" => "Green",
                "complexion" => "Fair", "build" => "Ectomorph", "Race" => "Caucasian"],

                //45

                ["last_name" => "House", "first_name" => "Freddy", "middle_name" => "Green", "alias" => "Fred",
                "birthdate" => "1983-04-15", "occupation" => "House Developer", "sex" => "Male", 
                "civil_status" => "Single", "citizenship" => "American", "birth_place" => "Los Angeles, California",
                "educational_attainment" => "College", "hair_color" => "Black", "eye_color" => "Black",
                "complexion" => "Fair", "build" => "Ectomorph", "Race" => "Caucasian"],

                //46

                ["last_name" => "Plumlee", "first_name" => "Maynard", "middle_name" => "Jones", "alias" => "Maynard",
                "birthdate" => "1986-04-02", "occupation" => "Basketball Player", "sex" => "Male", 
                "civil_status" => "Single", "citizenship" => "American", "birth_place" => "Kansas City",
                "educational_attainment" => "Middle School", "hair_color" => "Brown", "eye_color" => "Blue",
                "complexion" => "Fair", "build" => "Ectomorph", "Race" => "Caucasian"],

                //47
                ["last_name" => "Manalo", "first_name" => "Jose Wally", "middle_name" => "Tamayo", "alias" => "Jose",
                "birthdate" => "1969-04-11", "occupation" => "Paintor", "sex" => "Male", 
                "civil_status" => "Divorced", "citizenship" => "Filipino", "birth_place" => "Baguio City",
                "educational_attainment" => "High School", "hair_color" => "Black", "eye_color" => "Black",
                "complexion" => "Fair", "build" => "Mesomorph", "Race" => "Mongolian"],      
                 //end of suspect 

                //add 10 more. connect to case subject. put 2 suspect on a single case

                 

            
        );

        // Uncomment the below to run the seeder
         DB::table('clients')->insert($clients);
    }

}
