<?php

class Case_typesTableSeeder extends Seeder 
{

	public function run()
	
{
		
// Uncomment the below to wipe the table clean before populating
		
 DB::table('case_types')->truncate();

		
$case_types = array(
   
                
["type" => "Petty Theft"],
                    
["type" => "Prostitution"],
                   
["type" => "Vandalism"],
                    
["type" => "Drunk Driving"],
                    
["type" => "Domestic Violence"],
                    
["type" => "Murder"],
                   
["type" => "Possession of Dangerous Drugs For Sale"],
                    
["type" => "Robbery"],
                    
["type" => "Rape"],
                    
["type" => "Uncategorized"],
["type" => "Treason"],

["type" => "Espionage"],

["type" => "Piracy"],

["type" => "Homicide"],

["type" => "Physical Injuries"],

["type" => "Arbitrary Detention"],

["type" => "Delaying release"],

["type" => "Expulsion"],

["type" => "Violation of domicile"],

["type" => "Prohibition, interruption, and dissolution of peaceful meetings"],

["type" => "Crime against religious worship"],

["type" => "Rebellion"],

["type" => "Sedition"],

["type" => "Disloyalty"],

["type" => "Disturbance of proceedings"],

["type" => "Crime against legislative bodies and similar bodies"],

["type" => "Violation of parliamentary immunity"],

["type" => "Illegal assemblies"],

["type" => "Illegal association"],

["type" => "Direct assault"],

["type" => "Indirect assault"],

["type" => "Disobedience to person in authority and their agents"],

["type" => "Public disorder"],

["type" => "Evasion of service of sentence"],

["type" => "Commision of another crime during service of penalty imposed for another previous offense"],

["type" => "Forgeries"],

["type" => "Counterfeiting"],

["type" => "Falsification"],

["type" => "Fraud"],

["type" => "Possession, preparation and use of prohibited drugs and maintenance of opium dens"],

["type" => "Gambling and Betting"],

["type" => "Grave scandal"],

["type" => "Immortal doctrines, obscene publications and exhibitions"],

["type" => "Dereliction of duty"],

["type" => "Betrayal of trust by an attorney or solicitor"],

["type" => "Knowingly rendering unjust judgement"],

["type" => "Judgement rendered through negligence"],

["type" => "Unjust interlocutory order"],

["type" => "Malicious delay in the administration of justice"],

["type" => "Prosecution of offense"],

["type" => "Bribery"],

["type" => "Corruption of public officials"],

["type" => "Prohibited transaction"],

["type" => "Possession of prohibited interest by a public officer"],

["type" => "Malversation of public funds or property"],

["type" => "Conniving with or consenting to evasion"],

["type" => "Evasion through negligence"],

["type" => "Infidelity"],

["type" => "Relevation of secret"],

["type" => "Disobedience"],

["type" => "Refusal of assistance"],

["type" => "Maltreatment of prisoner"],

["type" => "Anticipation of duties of a public office"],

["type" => "Prolonging performance of duties and powers"],

["type" => "Abandonment of office or position"],

["type" => "Usurpation"],

["type" => "Unlawful appointments"],

["type" => "Abuses against chastity"],

["type" => "Parricide"],

["type" => "Homicide"],

["type" => "Suicide"],

["type" => "Discharge of firearms"],

["type" => "Infanticide"],

["type" => "Abortion"],

["type" => "Duel"],

["type" => "Multilation"],

["type" => "Serious physical injuries"],

["type" => "Serious illegal detention"],

["type" => "Slight illegal detention"],

["type" => "Unlawful arrest"],
                    
		
["type" => "Kidnapping"],

["type" => "Slavery"],

["type" => "Exploitation of child labor"],

["type" => "Services rendered under compulsion in payment of debts"],

["type" => "Abandonment of helpless persons"],
   
["type" => "Exploitation of minors"],

["type" => "Trespassing"],

["type" => "Dwelling"],

["type" => "Grave threats"],

["type" => "Light threats"],
   
["type" => "Grave coercions"],

["type" => "Light coercions"],



["type" => "False keys"],

["type" => "Brigandage"],
   
["type" => "Theft"],

["type" => "Fraudulent insolvency"],

["type" => "Swindling"],

["type" => "Chattel Mortgage"],

["type" => "Arson"],
  
["type" => "Malicious mischief"],
 
["type" => "Person exempt for criminal liability"],
 
["type" => "Adultery"],
 
["type" => "Concubinage"],
 
["type" => "Seduction"],
 
["type" => "Corruption of minor"],
 
["type" => "White slave trade"],
  
["type" => "Abduction"],
 
["type" => "Bigamy"],
 
["type" => "Illegal marriage"],
 
["type" => "Libel"],
 
["type" => "Slander"],
 
["type" => "Incriminatory machination"],

["type" => "Criminal negligence"],
  

 
);

		
// Uncomment the below to run the seeder
		 
DB::table('case_types')->insert($case_types);
	}

}
