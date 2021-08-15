<?php

Route::middleware(['admin.access'])->group(function(){

    // Dashboard
    Route::get('/admin', 'Admin\AdminController@dashboard')->name('dashboard');

    // Products
    Route::resource('/admin/products', 'Admin\ProductController')->names([
        'index'   => 'admin.products.index',
        'create'  => 'admin.products.create',
        'store'   => 'admin.products.store',
        'show'    => 'admin.products.show',
        'edit'    => 'admin.products.edit',
        'update'  => 'admin.products.update',
        'destroy' => 'admin.products.destroy',
    ]);

    // Messages
    Route::resource('/admin/messages', 'Admin\MessageController')->names([
        'index'   => 'admin.messages.index',
        'create'  => 'admin.messages.create',
        'store'   => 'admin.messages.store',
        'show'    => 'admin.messages.show',
        'edit'    => 'admin.messages.edit',
        'update'  => 'admin.messages.update',
        'destroy' => 'admin.messages.destroy',
    ]);

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

    // Posts
    Route::resource('/admin/posts', 'Admin\PostsController')->names([
        'index'   => 'admin.posts.index',
        'create'  => 'admin.posts.create',
        'store'   => 'admin.posts.store',
        'show'    => 'admin.posts.show',
        'edit'    => 'admin.posts.edit',
        'update'  => 'admin.posts.update',
        'destroy' => 'admin.posts.destroy',
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
