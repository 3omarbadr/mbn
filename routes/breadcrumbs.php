<?php

use App\Models\Commission;
use App\Models\Contract;
use App\Models\User;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;
use Spatie\Permission\Models\Role;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('dashboard'));
});

// Home > Dashboard
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Dashboard', route('dashboard'));
});

// Home > Dashboard > User Management
Breadcrumbs::for('user-management.index', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('User Management', route('user-management.users.index'));
});

// Home > Dashboard > User Management > Users
Breadcrumbs::for('user-management.users.index', function (BreadcrumbTrail $trail) {
    $trail->parent('user-management.index');
    $trail->push('Users', route('user-management.users.index'));
});

// Home > Dashboard > User Management > Users > [User]
Breadcrumbs::for('user-management.users.show', function (BreadcrumbTrail $trail, User $user) {
    $trail->parent('user-management.users.index');
    $trail->push(ucwords($user->name), route('user-management.users.show', $user));
});

// Home > Dashboard > User Management > Roles
Breadcrumbs::for('user-management.roles.index', function (BreadcrumbTrail $trail) {
    $trail->parent('user-management.index');
    $trail->push('Roles', route('user-management.roles.index'));
});

// Home > Dashboard > User Management > Roles > [Role]
Breadcrumbs::for('user-management.roles.show', function (BreadcrumbTrail $trail, Role $role) {
    $trail->parent('user-management.roles.index');
    $trail->push(ucwords($role->name), route('user-management.roles.show', $role));
});

// Home > Dashboard > User Management > Permission
Breadcrumbs::for('user-management.permissions.index', function (BreadcrumbTrail $trail) {
    $trail->parent('user-management.index');
    $trail->push('Permissions', route('user-management.permissions.index'));
});

// Home > Dashboard > Contract Management > Contracts
Breadcrumbs::for('contracts.index', function (BreadcrumbTrail $trail) {
    $trail->parent('contracts.index');
    $trail->push('Contracts', route('contracts.index'));
});

// Home > Dashboard > Contract Management > Contracts > [Contract]
Breadcrumbs::for('contracts.show', function (BreadcrumbTrail $trail, Contract $contract) {
    $trail->parent('contracts.index');
    $trail->push(ucwords($contract->name), route('contracts.show', $contract));
});

// Home > Dashboard > Commission Management > Commission
Breadcrumbs::for('commission.index', function (BreadcrumbTrail $trail) {
    $trail->parent('commission.index');
    $trail->push('commission', route('commission.index'));
});

// Home > Dashboard > commission Management > commissions > [commission]
Breadcrumbs::for('commission.show', function (BreadcrumbTrail $trail, Commission $commission) {
    $trail->parent('commission.index');
    $trail->push('Commission', route('commission.show', $commission));
});
