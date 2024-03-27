<?php

use App\Http\Controllers\vendor\Chatify\MentorMessagesController;
use Illuminate\Support\Facades\Route;


Route::controller(MentorMessagesController::class)->middleware('auth:mentor')->prefix('mentors.chat')->group(function () {

    /*
    * This is the main app route [Chatify Messenger]
    */
    Route::get('/', 'index')->name('mentors.chat');

    /**
     *  Fetch info for specific id [user/group]
     */
    Route::post('/idInfo', 'idFetchData');

    /**
     * Send message route
     */
    Route::post('/sendMessage', 'send')->name('mentor.send.message');

    /**
     * Fetch messages
     */
    Route::post('/fetchMessages', 'fetch')->name('mentor.fetch.messages');

    /**
     * Download attachments route to create a downloadable links
     */
    Route::get('/download/{fileName}', 'download')->name('mentor.attachment.download');

    /**
     * Authentication for pusher private channels
     */
    Route::post('/chat/auth', 'pusherAuth')->name('mentor.pusher.auth');

    /**
     * Make messages as seen
     */
    Route::post('/makeSeen', 'seen')->name('mentor.messages.seen');

    /**
     * Get contacts
     */
    Route::get('/getContacts', 'getContacts')->name('mentor.contacts.get');

    /**
     * Update contact item data
     */
    Route::post('/updateContacts', 'updateContactItem')->name('mentor.contacts.update');


    /**
     * Star in favorite list
     */
    Route::post('/star', 'favorite')->name('mentor.star');

    /**
     * get favorites list
     */
    Route::post('/favorites', 'getFavorites')->name('mentor.favorites');

    /**
     * Search in messenger
     */
    Route::get('/search', 'search')->name('mentor.search');

    /**
     * Get shared photos
     */
    Route::post('/shared', 'sharedPhotos')->name('mentor.shared');

    /**
     * Delete Conversation
     */
    Route::post('/deleteConversation', 'deleteConversation')->name('mentor.conversation.delete');

    /**
     * Delete Message
     */
    Route::post('/deleteMessage', 'deleteMessage')->name('mentor.message.delete');

    /**
     * Update setting
     */
    Route::post('/updateSettings', 'updateSettings')->name('mentor.avatar.update');

    /**
     * Set active status
     */
    Route::post('/setActiveStatus', 'setActiveStatus')->name('mentor.activeStatus.set');



    /*
    * [Group] view by id
    */
    Route::get('/group/{id}', 'index')->name('mentor.group');

    /*
    * user view by id.
    * Note : If you added routes after the [User] which is the below one,
    * it will considered as user id.
    *
    * e.g. - The commented routes below :
    */
// Route::get('/route', function(){ return 'Munaf'; }); // works as a route
    Route::get('/{id}', 'index')->name('mentor.user');
// Route::get('/route', function(){ return 'Munaf'; }); // works as a user id

});
