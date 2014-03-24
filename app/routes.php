<?php

Route::when('chief*', 'auth');
Route::when('agent*', 'auth');
Route::when('secretary*', 'auth');
Route::when('executive_officer*', 'auth');


Route::when('chief*', 'chief');
Route::when('agent*', 'agent');
Route::when('secretary*', 'secretary');
Route::when('executive_officer*', 'executive_officer');






Route::controller('form_coordinations', 'Form_coordinationsController');
Route::controller('coordination_members', 'Coordination_membersController');
Route::controller('coordination_vehicles', 'Coordination_vehiclesController');
Route::controller('form_dispositions', 'Form_dispositionsController');
Route::controller('disposition_anexxes', 'Disposition_anexxesController');
Route::controller('form_transmitals', 'Form_transmitalsController');
Route::controller('transmital_anexxes', 'Transmital_anexxesController');
Route::controller('case_forms', 'Case_formsController');
Route::controller('agent', 'AgentController');
Route::controller('secretary', 'SecretaryController');
Route::controller('chief', 'ChiefController');
Route::controller('executive_officer', 'Executive_OfficerController');
Route::controller('executive', 'ExecutiveOfficerController');
Route::controller('director', 'DeputyDirectorController');
Route::controller('users', 'UsersController');
Route::controller('divisions', 'DivisionsController');
Route::controller('job_titles', 'Job_titlesController');
Route::controller('languages', 'LanguagesController');
Route::controller('user_languages', 'User_languagesController');
Route::controller('civil_statuses', 'Civil_statusesController');
Route::controller('user_languages', 'User_languagesController');
Route::controller('user_addresses', 'User_addressesController');
Route::controller('contact_types', 'Contact_typesController');
Route::controller('contact_types', 'Contact_typesController');
Route::controller('user_contacts', 'User_contactsController');
Route::controller('client_contacts', 'Client_contactsController');
Route::controller('clients', 'ClientsController');
Route::controller('client_types', 'Client_typesController');
Route::controller('client_type_tags', 'Client_type_tagsController');
Route::controller('sexes', 'SexesController');
Route::controller('client_addresses', 'Client_addressesController');
Route::controller('messages', 'MessagesController');
Route::controller('message_recipients', 'Message_recipientsController');
Route::controller('message_logs', 'Message_logsController');
Route::controller('tasks', 'TasksController');
Route::controller('appointments', 'AppointmentsController');
Route::controller('appointment_recipients', 'Appointment_recipientsController');
Route::controller('user_notifications', 'User_notificationsController');
Route::controller('user_calendars', 'User_calendarsController');
Route::controller('resource_categories', 'Resource_categoriesController');
Route::controller('resource_statuses', 'Resource_statusesController');
Route::controller('resources', 'ResourcesController');
Route::controller('resource_histories', 'Resource_historiesController');
Route::controller('case_types', 'Case_typesController');
Route::controller('cases', 'KasesController');
Route::controller('case_type_tags', 'Case_type_tagsController');
Route::controller('case_victims', 'Case_victimsController');
Route::controller('case_subjects', 'Case_subjectsController');
Route::controller('evidence_types', 'Evidence_typesController');
Route::controller('case_evidences', 'Case_evidencesController');
Route::controller('evidence_recordings', 'Evidence_recordingsController');
Route::controller('evidence_videos', 'Evidence_videosController');
Route::controller('evidence_pictures', 'Evidence_picturesController');
Route::controller('evidence_documents', 'Evidence_documentsController');
Route::controller('evidence_objects', 'Evidence_objectsController');
Route::controller('evidence_histories', 'Evidence_historiesController');
Route::controller('complaints', 'ComplaintsController');
Route::controller('complaint_subjects', 'Complaint_subjectsController');
Route::controller('complaint_victims', 'Complaint_victimsController');
Route::controller('complaint_type_tags', 'Complaint_type_tagsController');
Route::controller('case_statuses', 'Case_statusesController');
Route::controller('complaint_addresses', 'Complaint_addressesController');
Route::controller('case_addresses', 'Case_addressesController');
Route::controller('tags', 'TagsController');
Route::controller('case_observations', 'Case_observationsController');
Route::controller('cross_references', 'Cross_referencesController');
Route::controller('system_logs', 'System_logsController');
Route::controller('case_keys', 'Case_keysController');
Route::controller('case_requirements', 'Case_requirementsController');
Route::controller('form_subpoenas', 'Form_subpoenasController');


Route::controller('', 'MainController');



