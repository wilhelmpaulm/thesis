<?php

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Eloquent::unguard();

//        $this->call('UserTableSeeder');
        $this->call('ClientsTableSeeder');
        $this->call('Client_contactsTableSeeder');
        $this->call('Client_typesTableSeeder');
        $this->call('Client_type_tagsTableSeeder');
        $this->call('Client_addressesTableSeeder');


        $this->call('UsersTableSeeder');
        $this->call('DivisionsTableSeeder');
        $this->call('Job_titlesTableSeeder');
        $this->call('LanguagesTableSeeder');
        $this->call('User_languagesTableSeeder');

        $this->call('Civil_statusesTableSeeder');
        $this->call('User_addressesTableSeeder');
        $this->call('Contact_typesTableSeeder');
        $this->call('User_contactsTableSeeder');

        $this->call('SexesTableSeeder');
        $this->call('MessagesTableSeeder');
        $this->call('Message_recipientsTableSeeder');
        $this->call('Message_logsTableSeeder');
        $this->call('TasksTableSeeder');
        $this->call('AppointmentsTableSeeder');
        $this->call('Appointment_receipientsTableSeeder');
        $this->call('User_notificationsTableSeeder');
        $this->call('User_calendarsTableSeeder');
        $this->call('Resource_categoriesTableSeeder');
        $this->call('Resource_statusesTableSeeder');
        $this->call('ResourcesTableSeeder');
        $this->call('Resource_historiesTableSeeder');
        $this->call('Case_typesTableSeeder');
        $this->call('KasesTableSeeder');
        $this->call('Case_type_tagsTableSeeder');
        $this->call('Case_victimsTableSeeder');
        $this->call('Case_subjectsTableSeeder');
        $this->call('Evidence_typesTableSeeder');
        $this->call('Case_evidencesTableSeeder');
        $this->call('Evidence_recordingsTableSeeder');
        $this->call('Evidence_videosTableSeeder');
        $this->call('Evidence_picturesTableSeeder');
        $this->call('Evidence_documentsTableSeeder');
        $this->call('Evidence_objectsTableSeeder');
        $this->call('Evidence_historiesTableSeeder');
        $this->call('ComplaintsTableSeeder');
        $this->call('Complaint_subjectsTableSeeder');
        $this->call('Complaint_victimsTableSeeder');
        $this->call('Complaint_type_tagsTableSeeder');
    	$this->call('Complaint_addressesTableSeeder');
		$this->call('Case_addressesTableSeeder');
	}

}
