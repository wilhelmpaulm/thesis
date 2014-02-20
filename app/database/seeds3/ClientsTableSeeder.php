<?php

class ClientsTableSeeder extends Seeder {

    public function run() {
        // Uncomment the below to wipe the table clean before populating
         DB::table('clients')->truncate();

        $clients = array(
            ["last_name" => "Cyrus", "first_name" => "Miley", "middle_name" => "Ray", "alias" => "Miley",
                "birthdate" => "1992-11-23", "occupation" => "Singer", "sex" => "Female", 
                "civil_status" => "Single", "citizenship" => "American", "birth_place" => "",
                "educational_attainment" => "", "hair_color" => "", "eye_color" => "",
                "complexion" => "", "build" => "", "race" => ""],
            ["last_name" => "Germanotta", "first_name" => "Stephanie", "middle_name" => "Joanne", "alias" => "Lady Gaga",
                "birthdate" => "1986-03-28", "occupation" => "Businesswoman", "sex" => "Female", 
                "civil_status" => "Married", "citizenship" => "American", "birth_place" => "",
                "educational_attainment" => "", "hair_color" => "", "eye_color" => "",
                "complexion" => "", "build" => "", "race" => ""],
            ["last_name" => "Aquino", "first_name" => "Benigno Simeon III", "middle_name" => "Cojuangco", "alias" => "Noynoy",
                "birthdate" => "1960-02-08", "occupation" => "Politician", "sex" => "Male", 
                "civil_status" => "Annulled", "citizenship" => "Filipino", "birth_place" => "",
                "educational_attainment" => "", "hair_color" => "", "eye_color" => "",
                "complexion" => "", "build" => "", "race" => ""],
            ["last_name" => "Navarro", "first_name" => "Ferdinand", "middle_name" => "Hipolito", "alias" => "Vhong",
                "birthdate" => "1977-01-04", "occupation" => "Actor", "sex" => "Male", 
                "civil_status" => "Single", "citizenship" => "Filipino", "birth_place" => "",
                "educational_attainment" => "", "hair_color" => "", "eye_color" => "",
                "complexion" => "", "build" => "", "race" => ""],
            ["last_name" => "Viceral", "first_name" => "Jose Marie", "middle_name" => "Borja", "alias" => "Vice Ganda",
                "birthdate" => "1976-03-31", "occupation" => "Comedian", "sex" => "Male", 
                "civil_status" => "Married", "citizenship" => "Filipino", "birth_place" => "",
                "educational_attainment" => "", "hair_color" => "", "eye_color" => "",
                "complexion" => "", "build" => "", "race" => ""],
            ["last_name" => "Padilla", "first_name" => "Daniel John", "middle_name" => "Ford", "alias" => "Daniel",
                "birthdate" => "1992-04-26", "occupation" => "Actor", "sex" => "Male", 
                "civil_status" => "Single", "citizenship" => "Filipino", "birth_place" => "",
                "educational_attainment" => "", "hair_color" => "", "eye_color" => "",
                "complexion" => "", "build" => "", "race" => ""],
            ["last_name" => "Curtis-Smith", "first_name" => "Anne", "middle_name" => "Ojales", "alias" => "Anne",
                "birthdate" => "1977-01-04", "occupation" => "Actress", "sex" => "Female", 
                "civil_status" => "Single", "citizenship" => "Filipino-Australian", "birth_place" => "",
                "educational_attainment" => "", "hair_color" => "", "eye_color" => "",
                "complexion" => "", "build" => "", "race" => ""],
            ["last_name" => "Abunda", "first_name" => "Eugenio", "middle_name" => "Romerica", "alias" => "Boy",
                "birthdate" => "1955-10-29", "occupation" => "Host", "sex" => "Male", 
                "civil_status" => "Married", "citizenship" => "Filipino", "birth_place" => "",
                "educational_attainment" => "", "hair_color" => "", "eye_color" => "",
                "complexion" => "", "build" => "", "race" => ""],
            ["last_name" => "Bernardo", "first_name" => "Kathryn Chandria", "middle_name" => "Manuel", "alias" => "Kathryn",
                "birthdate" => "1996-03-26", "occupation" => "Actress", "sex" => "Female", 
                "civil_status" => "Single", "citizenship" => "Filipino-Australian", "birth_place" => "",
                "educational_attainment" => "", "hair_color" => "", "eye_color" => "",
                "complexion" => "", "build" => "", "race" => ""],
            ["last_name" => "Tawile", "first_name" => "Jessy", "middle_name" => "Mendiola", "alias" => "Maria Mercedes",
                "birthdate" => "1992-12-03", "occupation" => "Actress", "sex" => "Female", 
                "civil_status" => "Single", "citizenship" => "Filipino", "birth_place" => "",
                "educational_attainment" => "", "hair_color" => "", "eye_color" => "",
                "complexion" => "", "build" => "", "race" => ""],
            ["last_name" => "Bieber", "first_name" => "Justin", "middle_name" => "Drew", "alias" => "JB",
                "birthdate" => "1994-03-01", "occupation" => "Welder", "sex" => "Male", 
                "civil_status" => "Single", "citizenship" => "Canadian", "birth_place" => "California",
                "educational_attainment" => "High School", "hair_color" => "Light Brown", "eye_color" => "Hazel",
                "complexion" => "Fair", "build" => "Ectomorph", "race" => "German"],
            ["last_name" => "Aquino", "first_name" => "Kristina Bernadette", "middle_name" => "Cojuangco", "alias" => "Kris",
                "birthdate" => "1971-02-14", "occupation" => "Host", "sex" => "Female", 
                "civil_status" => "Annulled", "citizenship" => "Filipino", "birth_place" => "Quezon City",
                "educational_attainment" => "College", "hair_color" => "Black", "eye_color" => "Black",
                "complexion" => "Fair", "build" => "Mesomorph", "race" => "Filipino"],
            ["last_name" => "Brown", "first_name" => "Christopher", "middle_name" => "Maurice", "alias" => "Chris",
                "birthdate" => "1989-05-05", "occupation" => "Doctor", "sex" => "Male", 
                "civil_status" => "Divorced", "citizenship" => "American", "birth_place" => "Tappahannock, Virginia",
                "educational_attainment" => "Middle School", "hair_color" => "Black", "eye_color" => "Black",
                "complexion" => "Black", "build" => "Ectomorph", "race" => "African-American"]
            
        );

        // Uncomment the below to run the seeder
         DB::table('clients')->insert($clients);
    }

}
