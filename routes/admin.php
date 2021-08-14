<?php

Route::middleware(['admin.access'])->group(function(){

    // Dashboard
    Route::get('/admin', 'Admin\AdminController@dashboard')->name('dashboard');

    // Users
    Route::resource('/admin/users', 'Admin\UserController')->names([
        'index'   => 'admin.users.index',
        'create'  => 'admin.users.create',
        'store'   => 'admin.users.store',
        'show'    => 'admin.users.show',
        'edit'    => 'admin.users.edit',
        'update'  => 'admin.users.update',
        'destroy' => 'admin.users.destroy',
    ]);

    // Roles
    Route::resource('/admin/roles', 'Admin\RoleController')->names([
        'index'   => 'admin.roles.index',
    ]);

    // Newsletter Data
    Route::resource('/admin/newsletter', 'Admin\NewsletterController')->names([
        'index'   => 'admin.newsletter.index',
        'create'  => 'admin.newsletter.create',
        'store'   => 'admin.newsletter.store',
        'show'    => 'admin.newsletter.show',
        'edit'    => 'admin.newsletter.edit',
        'update'  => 'admin.newsletter.update',
        'destroy' => 'admin.newsletter.destroy',
    ]);

    // Pages
    Route::resource('/admin/pages', 'Admin\PagesController')->names([
        'index'   => 'admin.pages.index',
        'create'  => 'admin.pages.create',
        'store'   => 'admin.pages.store',
        'show'    => 'admin.pages.show',
        'edit'    => 'admin.pages.edit',
        'update'  => 'admin.pages.update',
        'destroy' => 'admin.pages.destroy',
    ]);
});
