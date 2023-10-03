<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models\Auth{
/**
 * App\Models\Auth\Permission
 *
 * @property int $id
 * @property string $name
 * @property string $display_name
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $title
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Auth\Role[] $roles
 * @method static \Illuminate\Database\Eloquent\Builder|Permission action($action = 'read')
 * @method static \Illuminate\Database\Eloquent\Builder|Permission collect($sort = 'display_name')
 * @method static \Database\Factories\Permission factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission query()
 * @method static \Illuminate\Database\Eloquent\Builder|Permission sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Permission usingSearchString($string)
 */
	class Permission extends \Eloquent {}
}

namespace App\Models\Auth{
/**
 * App\Models\Auth\Role
 *
 * @property int $id
 * @property string $name
 * @property string $display_name
 * @property string|null $description
 * @property string|null $created_from
 * @property string|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Auth\Permission[] $permissions
 * @method static \Illuminate\Database\Eloquent\Builder|Role collect($sort = 'display_name')
 * @method static \Database\Factories\Role factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|Role sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Role usingSearchString($string)
 */
	class Role extends \Eloquent {}
}

namespace App\Models\Auth{
/**
 * App\Models\Auth\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $last_logged_in_at
 * @property string $locale
 * @property string|null $landing_page
 * @property bool $enabled
 * @property string|null $created_from
 * @property string|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Common\Company[] $companies
 * @property-read \App\Models\Common\Contact|null $contact
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Common\Dashboard[] $dashboards
 * @property-read mixed $last_logged
 * @property-read mixed $picture
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Common\Media[] $media
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Auth\Permission[] $permissions
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Auth\Role[] $roles
 * @method static \Plank\Mediable\MediableCollection|static[] all($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|User collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|User enabled()
 * @method static \Database\Factories\User factory(...$parameters)
 * @method static \Plank\Mediable\MediableCollection|static[] get($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|User isCustomer()
 * @method static \Illuminate\Database\Eloquent\Builder|User isNotCustomer()
 * @method static \Illuminate\Database\Eloquent\Builder|User isNotOwner()
 * @method static \Illuminate\Database\Eloquent\Builder|User isOwner()
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Query\Builder|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|User orWherePermissionIs($permission = '')
 * @method static \Illuminate\Database\Eloquent\Builder|User orWhereRoleIs($role = '', $team = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User source($source)
 * @method static \Illuminate\Database\Eloquent\Builder|User usingSearchString($string)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDoesntHavePermission()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDoesntHaveRole()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereHasMedia($tags = [], bool $matchAll = false)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereHasMediaMatchAll(array $tags)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePermissionIs($permission = '', $boolean = 'and')
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRoleIs($role = '', $team = null, $boolean = 'and')
 * @method static \Illuminate\Database\Eloquent\Builder|User withMedia($tags = [], bool $matchAll = false, bool $withVariants = false)
 * @method static \Illuminate\Database\Eloquent\Builder|User withMediaAndVariants($tags = [], bool $matchAll = false)
 * @method static \Illuminate\Database\Eloquent\Builder|User withMediaAndVariantsMatchAll($tags = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User withMediaMatchAll(bool $tags = [], bool $withVariants = false)
 * @method static \Illuminate\Database\Query\Builder|User withTrashed()
 * @method static \Illuminate\Database\Query\Builder|User withoutTrashed()
 */
	class User extends \Eloquent implements \Illuminate\Contracts\Translation\HasLocalePreference {}
}

namespace App\Models\Banking{
/**
 * App\Models\Banking\Account
 *
 * @property int $id
 * @property int $company_id
 * @property string $name
 * @property string $number
 * @property string $currency_code
 * @property float $opening_balance
 * @property string|null $bank_name
 * @property string|null $bank_phone
 * @property string|null $bank_address
 * @property bool $enabled
 * @property string|null $created_from
 * @property int|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Common\Company $company
 * @property-read \App\Models\Setting\Currency $currency
 * @property-read string $balance
 * @property-read string $expense_balance
 * @property-read string $income_balance
 * @property-read \App\Models\Auth\User|null $owner
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Banking\Transaction[] $transactions
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Account all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Account avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Account cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Account cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Account count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Account disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \Database\Factories\Account factory(...$parameters)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Account flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Account getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Account inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Account insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Account isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Account max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Account min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model monthsOfYear($field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Account name($name)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Account newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Account newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Account number($number)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Account query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Account sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Account truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 */
	class Account extends \Eloquent {}
}

namespace App\Models\Banking{
/**
 * App\Models\Banking\Reconciliation
 *
 * @property int $id
 * @property int $company_id
 * @property int $account_id
 * @property \Illuminate\Support\Carbon $started_at
 * @property \Illuminate\Support\Carbon $ended_at
 * @property float $closing_balance
 * @property bool $reconciled
 * @property string|null $created_from
 * @property int|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Banking\Account $account
 * @property-read \App\Models\Common\Company $company
 * @property-read \App\Models\Auth\User|null $owner
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Reconciliation all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Reconciliation avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Reconciliation cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Reconciliation cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Reconciliation count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Reconciliation disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \Database\Factories\Reconciliation factory(...$parameters)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Reconciliation flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Reconciliation getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Reconciliation inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Reconciliation insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Reconciliation isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Reconciliation max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Reconciliation min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model monthsOfYear($field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Reconciliation newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Reconciliation newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Reconciliation query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Reconciliation sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Reconciliation truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 */
	class Reconciliation extends \Eloquent {}
}

namespace App\Models\Banking{
/**
 * App\Models\Banking\Transaction
 *
 * @property int $id
 * @property int $company_id
 * @property string $type
 * @property \Illuminate\Support\Carbon $paid_at
 * @property float $amount
 * @property string $currency_code
 * @property float $currency_rate
 * @property int $account_id
 * @property int|null $document_id
 * @property int|null $contact_id
 * @property int $category_id
 * @property string|null $description
 * @property string $payment_method
 * @property string|null $reference
 * @property int $parent_id
 * @property string|null $created_from
 * @property int|null $created_by
 * @property int $reconciled
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Banking\Account $account
 * @property-read \App\Models\Document\Document|null $bill
 * @property-read \App\Models\Setting\Category $category
 * @property-read \App\Models\Common\Company $company
 * @property-read \App\Models\Common\Contact|null $contact
 * @property-read \App\Models\Setting\Currency $currency
 * @property-read \App\Models\Document\Document|null $document
 * @property-read float $amount_for_account
 * @property-read string $attachment
 * @property-read bool $has_transfer_relation
 * @property-read string $route_id
 * @property-read string $route_name
 * @property-read mixed $template_path
 * @property-read string $type_title
 * @property-read \App\Models\Document\Document|null $invoice
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Common\Media[] $media
 * @property-read \App\Models\Auth\User|null $owner
 * @property-read \App\Models\Common\Recurring|null $recurring
 * @property-read \App\Models\Auth\User|null $user
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction accountId($account_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction categoryId($category_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction contactId($contact_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction documentId($document_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction expense()
 * @method static \Database\Factories\Transaction factory(...$parameters)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction flushCache(array $tags = [])
 * @method static \Plank\Mediable\MediableCollection|static[] get($columns = ['*'])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction income()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction isDocument()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction isNotDocument()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction isNotReconciled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction isNotTransfer()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction isReconciled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction isTransfer()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction latest()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction monthsOfYear($field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction paid()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction type($types)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction whereHasMedia($tags = [], bool $matchAll = false)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction whereHasMediaMatchAll(array $tags)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction withMedia($tags = [], bool $matchAll = false, bool $withVariants = false)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction withMediaAndVariants($tags = [], bool $matchAll = false)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction withMediaAndVariantsMatchAll($tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transaction withMediaMatchAll(bool $tags = [], bool $withVariants = false)
 */
	class Transaction extends \Eloquent {}
}

namespace App\Models\Banking{
/**
 * App\Models\Banking\Transfer
 *
 * @property int $id
 * @property int $company_id
 * @property int $expense_transaction_id
 * @property int $income_transaction_id
 * @property string|null $created_from
 * @property int|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Common\Company $company
 * @property-read \App\Models\Banking\Transaction $expense_transaction
 * @property-read float $amount
 * @property-read string $attachment
 * @property-read string $description
 * @property-read int $from_account_id
 * @property-read string $from_account_rate
 * @property-read string $from_currency_code
 * @property-read string $payment_method
 * @property-read string $reference
 * @property-read mixed $template_path
 * @property-read int $to_account_id
 * @property-read string $to_account_rate
 * @property-read string $to_currency_code
 * @property-read \App\Models\Banking\date $transferred_at
 * @property-read \App\Models\Banking\Transaction $income_transaction
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Common\Media[] $media
 * @property-read \App\Models\Auth\User|null $owner
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transfer all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transfer avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transfer cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transfer cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transfer count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transfer disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \Database\Factories\Transfer factory(...$parameters)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transfer flushCache(array $tags = [])
 * @method static \Plank\Mediable\MediableCollection|static[] get($columns = ['*'])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transfer getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transfer inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transfer insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transfer isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transfer max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transfer min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model monthsOfYear($field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transfer newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transfer newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transfer query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transfer sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transfer truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transfer whereHasMedia($tags = [], bool $matchAll = false)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transfer whereHasMediaMatchAll(array $tags)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transfer withMedia($tags = [], bool $matchAll = false, bool $withVariants = false)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transfer withMediaAndVariants($tags = [], bool $matchAll = false)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transfer withMediaAndVariantsMatchAll($tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Transfer withMediaMatchAll(bool $tags = [], bool $withVariants = false)
 */
	class Transfer extends \Eloquent {}
}

namespace App\Models\Common{
/**
 * App\Models\Common\Company
 *
 * @property int $id
 * @property string|null $domain
 * @property bool $enabled
 * @property string|null $created_from
 * @property int|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Banking\Account[] $accounts
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Setting\Category[] $categories
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Common\Contact[] $contacts
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Setting\Currency[] $currencies
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Common\Dashboard[] $dashboards
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Document\DocumentHistory[] $document_histories
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Document\DocumentItemTax[] $document_item_taxes
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Document\DocumentItem[] $document_items
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Document\DocumentTotal[] $document_totals
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Document\Document[] $documents
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Common\EmailTemplate[] $email_templates
 * @property-read string $company_logo
 * @property-read mixed $location
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Common\Item[] $items
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Common\Media[] $media
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Module\ModuleHistory[] $module_histories
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Module\Module[] $modules
 * @property-read \App\Models\Auth\User $owner
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Banking\Reconciliation[] $reconciliations
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Common\Recurring[] $recurring
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Common\Report[] $reports
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Setting\Setting[] $settings
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Setting\Tax[] $taxes
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Banking\Transaction[] $transactions
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Banking\Transfer[] $transfers
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Auth\User[] $users
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Common\Widget[] $widgets
 * @method static \Plank\Mediable\MediableCollection|static[] all($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Company autocomplete($filter)
 * @method static \Illuminate\Database\Eloquent\Builder|Company collect($sort = 'name')
 * @method static \Illuminate\Database\Eloquent\Builder|Company enabled($value = 1)
 * @method static \Plank\Mediable\MediableCollection|static[] get($columns = ['*'])
 * @method static \Illuminate\Database\Eloquent\Builder|Company isNotOwner()
 * @method static \Illuminate\Database\Eloquent\Builder|Company isOwner()
 * @method static \Illuminate\Database\Eloquent\Builder|Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company newQuery()
 * @method static \Illuminate\Database\Query\Builder|Company onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Company query()
 * @method static \Illuminate\Database\Eloquent\Builder|Company sortable($defaultParameters = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Company source($source)
 * @method static \Illuminate\Database\Eloquent\Builder|Company userId($user_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Company usingSearchString($string)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereHasMedia($tags = [], bool $matchAll = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereHasMediaMatchAll(array $tags)
 * @method static \Illuminate\Database\Eloquent\Builder|Company withMedia($tags = [], bool $matchAll = false, bool $withVariants = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Company withMediaAndVariants($tags = [], bool $matchAll = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Company withMediaAndVariantsMatchAll($tags = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Company withMediaMatchAll(bool $tags = [], bool $withVariants = false)
 * @method static \Illuminate\Database\Query\Builder|Company withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Company withoutTrashed()
 */
	class Company extends \Eloquent implements \Laratrust\Contracts\Ownable {}
}

namespace App\Models\Common{
/**
 * App\Models\Common\Contact
 *
 * @property int $id
 * @property int $company_id
 * @property string $type
 * @property string $name
 * @property string|null $email
 * @property int|null $user_id
 * @property string|null $tax_number
 * @property string|null $phone
 * @property string|null $address
 * @property string|null $city
 * @property string|null $zip_code
 * @property string|null $state
 * @property string|null $country
 * @property string|null $website
 * @property string $currency_code
 * @property bool $enabled
 * @property string|null $reference
 * @property string|null $created_from
 * @property int|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Common\Company $company
 * @property-read \App\Models\Setting\Currency $currency
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Document\Document[] $documents
 * @property-read mixed $location
 * @property-read string $logo
 * @property-read mixed $unpaid
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Common\Media[] $media
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \App\Models\Auth\User|null $owner
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Banking\Transaction[] $transactions
 * @property-read \App\Models\Auth\User|null $user
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Contact all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Contact avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Contact cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Contact cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Contact count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Contact customer()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Contact disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Contact email($email)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \Database\Factories\Contact factory(...$parameters)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Contact flushCache(array $tags = [])
 * @method static \Plank\Mediable\MediableCollection|static[] get($columns = ['*'])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Contact getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Contact inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Contact insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Contact isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Contact max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Contact min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model monthsOfYear($field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Contact newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Contact newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Contact query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Contact sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Contact truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Contact type($types)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Contact vendor()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Contact whereHasMedia($tags = [], bool $matchAll = false)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Contact whereHasMediaMatchAll(array $tags)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Contact withMedia($tags = [], bool $matchAll = false, bool $withVariants = false)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Contact withMediaAndVariants($tags = [], bool $matchAll = false)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Contact withMediaAndVariantsMatchAll($tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Contact withMediaMatchAll(bool $tags = [], bool $withVariants = false)
 */
	class Contact extends \Eloquent {}
}

namespace App\Models\Common{
/**
 * App\Models\Common\Dashboard
 *
 * @property int $id
 * @property int $company_id
 * @property string $name
 * @property bool $enabled
 * @property string|null $created_from
 * @property int|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Common\Company $company
 * @property-read string $alias
 * @property-read \App\Models\Auth\User|null $owner
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Auth\User[] $users
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Common\Widget[] $widgets
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Dashboard alias($alias)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Dashboard all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Dashboard avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Dashboard cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Dashboard cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Dashboard count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Dashboard disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \Database\Factories\Dashboard factory(...$parameters)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Dashboard flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Dashboard getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Dashboard inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Dashboard insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Dashboard isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Dashboard max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Dashboard min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model monthsOfYear($field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Dashboard newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Dashboard newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Dashboard query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Dashboard sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Dashboard truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Dashboard userId($user_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 */
	class Dashboard extends \Eloquent {}
}

namespace App\Models\Common{
/**
 * App\Models\Common\EmailTemplate
 *
 * @property int $id
 * @property int $company_id
 * @property string $alias
 * @property string $class
 * @property string $name
 * @property string $subject
 * @property string $body
 * @property string|null $params
 * @property string|null $created_from
 * @property string|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Common\Company $company
 * @property-read \App\Models\Auth\User|null $owner
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate alias($alias)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model monthsOfYear($field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|EmailTemplate truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 */
	class EmailTemplate extends \Eloquent {}
}

namespace App\Models\Common{
/**
 * App\Models\Common\Item
 *
 * @property int $id
 * @property int $company_id
 * @property string $name
 * @property string|null $sku
 * @property string|null $description
 * @property float $sale_price
 * @property float $purchase_price
 * @property int $quantity
 * @property int|null $category_id
 * @property int|null $tax_id
 * @property bool $enabled
 * @property string|null $created_from
 * @property int|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Setting\Category|null $category
 * @property-read \App\Models\Common\Company $company
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Document\DocumentItem[] $document_items
 * @property-read string $item_id
 * @property-read string $picture
 * @property-read string $tax_ids
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Common\Media[] $media
 * @property-read \App\Models\Auth\User|null $owner
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Common\ItemTax[] $taxes
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Item all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Item autocomplete($filter)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Item avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Item cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Item cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Item count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Item disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \Database\Factories\Item factory(...$parameters)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Item flushCache(array $tags = [])
 * @method static \Plank\Mediable\MediableCollection|static[] get($columns = ['*'])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Item getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Item inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Item insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Item isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Item max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Item min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model monthsOfYear($field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Item name($name)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Item newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Item newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Item query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Item sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Item truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Item whereHasMedia($tags = [], bool $matchAll = false)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Item whereHasMediaMatchAll(array $tags)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Item withMedia($tags = [], bool $matchAll = false, bool $withVariants = false)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Item withMediaAndVariants($tags = [], bool $matchAll = false)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Item withMediaAndVariantsMatchAll($tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Item withMediaMatchAll(bool $tags = [], bool $withVariants = false)
 */
	class Item extends \Eloquent {}
}

namespace App\Models\Common{
/**
 * App\Models\Common\ItemTax
 *
 * @property int $id
 * @property int $company_id
 * @property int $item_id
 * @property int|null $tax_id
 * @property string|null $created_from
 * @property string|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Common\Company $company
 * @property-read \App\Models\Common\Item $item
 * @property-read \App\Models\Auth\User|null $owner
 * @property-read \App\Models\Setting\Tax|null $tax
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ItemTax all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ItemTax avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ItemTax cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ItemTax cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ItemTax count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ItemTax disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ItemTax flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ItemTax getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ItemTax inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ItemTax insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ItemTax isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ItemTax max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ItemTax min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model monthsOfYear($field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ItemTax newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ItemTax newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ItemTax query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ItemTax sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ItemTax truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 */
	class ItemTax extends \Eloquent {}
}

namespace App\Models\Common{
/**
 * App\Models\Common\Media
 *
 * @property int $id
 * @property int $company_id
 * @property string $disk
 * @property string $directory
 * @property string $filename
 * @property string $extension
 * @property string $mime_type
 * @property string $aggregate_type
 * @property int $size
 * @property string|null $variant_name
 * @property int|null $original_media_id
 * @property string|null $created_from
 * @property string|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read string $basename
 * @property-read Media|null $originalMedia
 * @property-read \Illuminate\Database\Eloquent\Collection|Media[] $variants
 * @method static \Illuminate\Database\Eloquent\Builder|Media forPathOnDisk(string $disk, string $path)
 * @method static \Illuminate\Database\Eloquent\Builder|Media inDirectory(string $disk, string $directory, bool $recursive = false)
 * @method static \Illuminate\Database\Eloquent\Builder|Media inOrUnderDirectory(string $disk, string $directory)
 * @method static \Illuminate\Database\Eloquent\Builder|Media newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Media newQuery()
 * @method static \Illuminate\Database\Query\Builder|Media onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Media query()
 * @method static \Illuminate\Database\Eloquent\Builder|Media unordered()
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereBasename(string $basename)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereIsOriginal()
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereIsVariant(?string $variant_name = null)
 * @method static \Illuminate\Database\Query\Builder|Media withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Media withoutTrashed()
 */
	class Media extends \Eloquent {}
}

namespace App\Models\Common{
/**
 * App\Models\Common\Recurring
 *
 * @property int $id
 * @property int $company_id
 * @property string $recurable_type
 * @property int $recurable_id
 * @property string $frequency
 * @property int $interval
 * @property string $started_at
 * @property int $count
 * @property string|null $created_from
 * @property string|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Common\Company $company
 * @property-read \App\Models\Auth\User|null $owner
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $recurable
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model monthsOfYear($field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Recurring truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 */
	class Recurring extends \Eloquent {}
}

namespace App\Models\Common{
/**
 * App\Models\Common\Report
 *
 * @property int $id
 * @property int $company_id
 * @property string $class
 * @property string $name
 * @property string $description
 * @property object|null $settings
 * @property string|null $created_from
 * @property int|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Common\Company $company
 * @property-read string $alias
 * @property-read \App\Models\Auth\User|null $owner
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report alias($alias)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model monthsOfYear($field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Report truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 */
	class Report extends \Eloquent {}
}

namespace App\Models\Common{
/**
 * App\Models\Common\Widget
 *
 * @property int $id
 * @property int $company_id
 * @property int $dashboard_id
 * @property string $class
 * @property string $name
 * @property int $sort
 * @property object|null $settings
 * @property string|null $created_from
 * @property int|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Common\Company $company
 * @property-read \App\Models\Common\Dashboard $dashboard
 * @property-read \App\Models\Auth\User|null $owner
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Auth\User[] $users
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Widget all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Widget avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Widget cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Widget cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Widget count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Widget disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \Database\Factories\Widget factory(...$parameters)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Widget flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Widget getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Widget inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Widget insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Widget isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Widget max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Widget min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model monthsOfYear($field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Widget newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Widget newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Widget query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Widget sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Widget truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 */
	class Widget extends \Eloquent {}
}

namespace App\Models\Document{
/**
 * App\Models\Document\Document
 *
 * @property int $id
 * @property int $company_id
 * @property string $type
 * @property string $document_number
 * @property string|null $order_number
 * @property string $status
 * @property \Illuminate\Support\Carbon $issued_at
 * @property \Illuminate\Support\Carbon $due_at
 * @property float $amount
 * @property string $currency_code
 * @property float $currency_rate
 * @property int $category_id
 * @property int $contact_id
 * @property string $contact_name
 * @property string|null $contact_email
 * @property string|null $contact_tax_number
 * @property string|null $contact_phone
 * @property string|null $contact_address
 * @property string|null $notes
 * @property string|null $footer
 * @property int $parent_id
 * @property string|null $created_from
 * @property int|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Setting\Category $category
 * @property-read \App\Models\Common\Company $company
 * @property-read \App\Models\Common\Contact $contact
 * @property-read \App\Models\Setting\Currency $currency
 * @property-read string $amount_due
 * @property-read string $amount_without_tax
 * @property-read string $attachment
 * @property-read string $discount
 * @property-read string $paid
 * @property-read mixed $received_at
 * @property-read int $reconciled
 * @property-read mixed $sent_at
 * @property-read string $status_label
 * @property-read mixed $template_path
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Document\DocumentHistory[] $histories
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Document\DocumentItemTax[] $item_taxes
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Document\DocumentItem[] $items
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Common\Media[] $media
 * @property-read \App\Models\Auth\User|null $owner
 * @property-read \App\Models\Common\Recurring|null $recurring
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Document\DocumentTotal[] $totals
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Banking\Transaction[] $transactions
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document accrued()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document bill()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document due($date)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \Database\Factories\Document factory(...$parameters)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document flushCache(array $tags = [])
 * @method static \Plank\Mediable\MediableCollection|static[] get($columns = ['*'])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document invoice()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document latest()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document monthsOfYear($field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document notPaid()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document number(string $number)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document paid()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document type(string $type)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document whereHasMedia($tags = [], bool $matchAll = false)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document whereHasMediaMatchAll(array $tags)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document withMedia($tags = [], bool $matchAll = false, bool $withVariants = false)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document withMediaAndVariants($tags = [], bool $matchAll = false)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document withMediaAndVariantsMatchAll($tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document withMediaMatchAll(bool $tags = [], bool $withVariants = false)
 */
	class Document extends \Eloquent {}
}

namespace App\Models\Document{
/**
 * App\Models\Document\DocumentHistory
 *
 * @property int $id
 * @property int $company_id
 * @property string $type
 * @property int $document_id
 * @property string $status
 * @property int $notify
 * @property string|null $description
 * @property string|null $created_from
 * @property string|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Common\Company $company
 * @property-read \App\Models\Document\Document $document
 * @property-read \App\Models\Auth\User|null $owner
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory bill()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory invoice()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model monthsOfYear($field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory type(string $type)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 */
	class DocumentHistory extends \Eloquent {}
}

namespace App\Models\Document{
/**
 * App\Models\Document\DocumentItem
 *
 * @property int $id
 * @property int $company_id
 * @property string $type
 * @property int $document_id
 * @property int|null $item_id
 * @property string $name
 * @property string|null $description
 * @property string|null $sku
 * @property float $quantity
 * @property float $price
 * @property float $tax
 * @property string $discount_type
 * @property float $discount_rate
 * @property float $total
 * @property string|null $created_from
 * @property string|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Common\Company $company
 * @property-read \App\Models\Document\Document $document
 * @property-read string $discount
 * @property-read \App\Models\Common\Item|null $item
 * @property-read \App\Models\Auth\User|null $owner
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Document\DocumentItemTax[] $taxes
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem bill()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem invoice()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model monthsOfYear($field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem type(string $type)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 */
	class DocumentItem extends \Eloquent {}
}

namespace App\Models\Document{
/**
 * App\Models\Document\DocumentItemTax
 *
 * @property int $id
 * @property int $company_id
 * @property string $type
 * @property int $document_id
 * @property int $document_item_id
 * @property int $tax_id
 * @property string $name
 * @property float $amount
 * @property string|null $created_from
 * @property string|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Common\Company $company
 * @property-read \App\Models\Document\Document $document
 * @property-read \App\Models\Auth\User|null $owner
 * @property-read \App\Models\Setting\Tax $tax
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax bill()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax invoice()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model monthsOfYear($field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax type(string $type)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 */
	class DocumentItemTax extends \Eloquent {}
}

namespace App\Models\Document{
/**
 * App\Models\Document\DocumentTotal
 *
 * @property int $id
 * @property int $company_id
 * @property string $type
 * @property int $document_id
 * @property string|null $code
 * @property string $name
 * @property float $amount
 * @property int $sort_order
 * @property string|null $created_from
 * @property string|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Common\Company $company
 * @property-read \App\Models\Document\Document $document
 * @property-read mixed $title
 * @property-read \App\Models\Auth\User|null $owner
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal bill()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal code($code)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal invoice()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal monthsOfYear($field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal type(string $type)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 */
	class DocumentTotal extends \Eloquent {}
}

namespace App\Models\Module{
/**
 * App\Models\Module\Module
 *
 * @property int $id
 * @property int $company_id
 * @property string $alias
 * @property bool $enabled
 * @property string|null $created_from
 * @property string|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Common\Company $company
 * @property-read \App\Models\Auth\User|null $owner
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module alias($alias)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model monthsOfYear($field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Module truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 */
	class Module extends \Eloquent {}
}

namespace App\Models\Module{
/**
 * App\Models\Module\ModuleHistory
 *
 * @property int $id
 * @property int $company_id
 * @property int $module_id
 * @property string $version
 * @property string|null $description
 * @property string|null $created_from
 * @property string|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Common\Company $company
 * @property-read \App\Models\Auth\User|null $owner
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ModuleHistory all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ModuleHistory avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ModuleHistory cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ModuleHistory cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ModuleHistory count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ModuleHistory disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ModuleHistory flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ModuleHistory getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ModuleHistory inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ModuleHistory insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ModuleHistory isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ModuleHistory max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ModuleHistory min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model monthsOfYear($field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ModuleHistory newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ModuleHistory newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ModuleHistory query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ModuleHistory sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|ModuleHistory truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 */
	class ModuleHistory extends \Eloquent {}
}

namespace App\Models\Setting{
/**
 * App\Models\Setting\Category
 *
 * @property int $id
 * @property int $company_id
 * @property string $name
 * @property string $type
 * @property string $color
 * @property bool $enabled
 * @property string|null $created_from
 * @property int|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Common\Company $company
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Document\Document[] $documents
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Common\Item[] $items
 * @property-read \App\Models\Auth\User|null $owner
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Banking\Transaction[] $transactions
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category expense()
 * @method static \Database\Factories\Category factory(...$parameters)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category income()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category item()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model monthsOfYear($field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category name($name)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category other()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category transfer()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Category type($types)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 */
	class Category extends \Eloquent {}
}

namespace App\Models\Setting{
/**
 * App\Models\Setting\Currency
 *
 * @property int $id
 * @property int $company_id
 * @property string $name
 * @property string $code
 * @property float $rate
 * @property string $precision
 * @property string $symbol
 * @property string $symbol_first
 * @property string $decimal_mark
 * @property string $thousands_separator
 * @property bool $enabled
 * @property string|null $created_from
 * @property int|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Banking\Account[] $accounts
 * @property-read \App\Models\Common\Company $company
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Common\Contact[] $contacts
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Document\Document[] $documents
 * @property-read \App\Models\Auth\User|null $owner
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Banking\Transaction[] $transactions
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Currency all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Currency avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Currency cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Currency cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Currency code($code)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Currency count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Currency disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \Database\Factories\Currency factory(...$parameters)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Currency flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Currency getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Currency inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Currency insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Currency isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Currency max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Currency min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model monthsOfYear($field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Currency newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Currency newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Currency query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Currency sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Currency truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 */
	class Currency extends \Eloquent {}
}

namespace App\Models\Setting{
/**
 * App\Models\Setting\Setting
 *
 * @property int $id
 * @property int $company_id
 * @property string $key
 * @property string|null $value
 * @property-read \App\Models\Common\Company $company
 * @method static \Illuminate\Database\Eloquent\Builder|Setting companyId($company_id)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting prefix($prefix = 'company')
 * @method static \Illuminate\Database\Eloquent\Builder|Setting query()
 */
	class Setting extends \Eloquent {}
}

namespace App\Models\Setting{
/**
 * App\Models\Setting\Tax
 *
 * @property int $id
 * @property int $company_id
 * @property string $name
 * @property float $rate
 * @property string $type
 * @property bool $enabled
 * @property string|null $created_from
 * @property int|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Common\Company $company
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Document\DocumentItemTax[] $document_items
 * @property-read string $title
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Common\Item[] $items
 * @property-read \App\Models\Auth\User|null $owner
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Tax all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Tax avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Tax cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Tax cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Tax compound()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Tax count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Tax disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \Database\Factories\Tax factory(...$parameters)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Tax fixed()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Tax flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Tax getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Tax inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Tax inclusive()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Tax insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Tax isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Tax max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Tax min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model monthsOfYear($field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Tax name($name)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Tax newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Tax newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Tax normal()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Tax notRate($rate)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Tax notWithholding()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Tax query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Tax rate($rate)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Tax sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Tax truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Tax type($types)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Tax withholding()
 */
	class Tax extends \Eloquent {}
}

namespace App\Models\Purchase{
/**
 * App\Models\Purchase\Bill
 *
 * @deprecated 
 * @see Document
 * @property int $id
 * @property int $company_id
 * @property string $type
 * @property string $document_number
 * @property string|null $order_number
 * @property string $status
 * @property \Illuminate\Support\Carbon $issued_at
 * @property \Illuminate\Support\Carbon $due_at
 * @property float $amount
 * @property string $currency_code
 * @property float $currency_rate
 * @property int $category_id
 * @property int $contact_id
 * @property string $contact_name
 * @property string|null $contact_email
 * @property string|null $contact_tax_number
 * @property string|null $contact_phone
 * @property string|null $contact_address
 * @property string|null $notes
 * @property string|null $footer
 * @property int $parent_id
 * @property string|null $created_from
 * @property int|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Setting\Category $category
 * @property-read \App\Models\Common\Company $company
 * @property-read \App\Models\Common\Contact $contact
 * @property-read \App\Models\Setting\Currency $currency
 * @property-read string $amount_due
 * @property-read string $amount_without_tax
 * @property-read string $attachment
 * @property mixed $bill_number
 * @property mixed $billed_at
 * @property-read string $discount
 * @property-read string $paid
 * @property-read mixed $received_at
 * @property-read int $reconciled
 * @property-read mixed $sent_at
 * @property-read string $status_label
 * @property-read mixed $template_path
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Document\DocumentHistory[] $histories
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Document\DocumentItemTax[] $item_taxes
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Document\DocumentItem[] $items
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Common\Media[] $media
 * @property-read \App\Models\Auth\User|null $owner
 * @property-read \App\Models\Common\Recurring|null $recurring
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Document\DocumentTotal[] $totals
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Banking\Transaction[] $transactions
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document accrued()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Bill all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Bill avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document bill()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Bill cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Bill cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Bill count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Bill disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document due($date)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Bill flushCache(array $tags = [])
 * @method static \Plank\Mediable\MediableCollection|static[] get($columns = ['*'])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Bill getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Bill inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Bill insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document invoice()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Bill isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document latest()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Bill max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Bill min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document monthsOfYear($field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Bill newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Bill newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document notPaid()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document number(string $number)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document paid()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Bill query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Bill sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Bill truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document type(string $type)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document whereHasMedia($tags = [], bool $matchAll = false)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document whereHasMediaMatchAll(array $tags)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document withMedia($tags = [], bool $matchAll = false, bool $withVariants = false)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document withMediaAndVariants($tags = [], bool $matchAll = false)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document withMediaAndVariantsMatchAll($tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document withMediaMatchAll(bool $tags = [], bool $withVariants = false)
 */
	class Bill extends \Eloquent {}
}

namespace App\Models\Purchase{
/**
 * App\Models\Purchase\BillHistory
 *
 * @deprecated 
 * @see DocumentHistory
 * @property int $id
 * @property int $company_id
 * @property string $type
 * @property int $document_id
 * @property string $status
 * @property int $notify
 * @property string|null $description
 * @property string|null $created_from
 * @property string|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Common\Company $company
 * @property-read \App\Models\Document\Document $document
 * @property mixed $bill_id
 * @property-read \App\Models\Auth\User|null $owner
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillHistory all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillHistory avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory bill()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillHistory cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillHistory cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillHistory count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillHistory disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillHistory flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillHistory getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillHistory inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillHistory insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory invoice()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillHistory isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillHistory max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillHistory min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model monthsOfYear($field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillHistory newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillHistory newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillHistory query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillHistory sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillHistory truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory type(string $type)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 */
	class BillHistory extends \Eloquent {}
}

namespace App\Models\Purchase{
/**
 * App\Models\Purchase\BillItem
 *
 * @deprecated 
 * @see DocumentItem
 * @property int $id
 * @property int $company_id
 * @property string $type
 * @property int $document_id
 * @property int|null $item_id
 * @property string $name
 * @property string|null $description
 * @property string|null $sku
 * @property float $quantity
 * @property float $price
 * @property float $tax
 * @property string $discount_type
 * @property float $discount_rate
 * @property float $total
 * @property string|null $created_from
 * @property string|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Common\Company $company
 * @property-read \App\Models\Document\Document $document
 * @property mixed $bill_id
 * @property-read string $discount
 * @property-read \App\Models\Common\Item|null $item
 * @property-read \App\Models\Auth\User|null $owner
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Document\DocumentItemTax[] $taxes
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItem all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItem avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem bill()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItem cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItem cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItem count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItem disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItem flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItem getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItem inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItem insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem invoice()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItem isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItem max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItem min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model monthsOfYear($field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItem newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItem newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItem query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItem sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItem truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem type(string $type)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 */
	class BillItem extends \Eloquent {}
}

namespace App\Models\Purchase{
/**
 * App\Models\Purchase\BillItemTax
 *
 * @deprecated 
 * @see DocumentItemTax
 * @property int $id
 * @property int $company_id
 * @property string $type
 * @property int $document_id
 * @property int $document_item_id
 * @property int $tax_id
 * @property string $name
 * @property float $amount
 * @property string|null $created_from
 * @property string|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Common\Company $company
 * @property-read \App\Models\Document\Document $document
 * @property mixed $bill_id
 * @property mixed $bill_item_id
 * @property-read \App\Models\Auth\User|null $owner
 * @property-read \App\Models\Setting\Tax $tax
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItemTax all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItemTax avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax bill()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItemTax cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItemTax cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItemTax count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItemTax disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItemTax flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItemTax getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItemTax inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItemTax insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax invoice()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItemTax isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItemTax max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItemTax min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model monthsOfYear($field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItemTax newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItemTax newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItemTax query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItemTax sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillItemTax truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax type(string $type)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 */
	class BillItemTax extends \Eloquent {}
}

namespace App\Models\Purchase{
/**
 * App\Models\Purchase\BillTotal
 *
 * @deprecated 
 * @see DocumentTotal
 * @property int $id
 * @property int $company_id
 * @property string $type
 * @property int $document_id
 * @property string|null $code
 * @property string $name
 * @property float $amount
 * @property int $sort_order
 * @property string|null $created_from
 * @property string|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Common\Company $company
 * @property-read \App\Models\Document\Document $document
 * @property mixed $bill_id
 * @property-read mixed $title
 * @property-read \App\Models\Auth\User|null $owner
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillTotal all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillTotal avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal bill()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillTotal cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillTotal cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal code($code)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillTotal count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillTotal disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillTotal flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillTotal getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillTotal inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillTotal insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal invoice()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillTotal isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillTotal max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillTotal min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal monthsOfYear($field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillTotal newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillTotal newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillTotal query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillTotal sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|BillTotal truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal type(string $type)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 */
	class BillTotal extends \Eloquent {}
}

namespace App\Models\Sale{
/**
 * App\Models\Sale\Invoice
 *
 * @deprecated 
 * @see Document
 * @property int $id
 * @property int $company_id
 * @property string $type
 * @property string $document_number
 * @property string|null $order_number
 * @property string $status
 * @property \Illuminate\Support\Carbon $issued_at
 * @property \Illuminate\Support\Carbon $due_at
 * @property float $amount
 * @property string $currency_code
 * @property float $currency_rate
 * @property int $category_id
 * @property int $contact_id
 * @property string $contact_name
 * @property string|null $contact_email
 * @property string|null $contact_tax_number
 * @property string|null $contact_phone
 * @property string|null $contact_address
 * @property string|null $notes
 * @property string|null $footer
 * @property int $parent_id
 * @property string|null $created_from
 * @property int|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Setting\Category $category
 * @property-read \App\Models\Common\Company $company
 * @property-read \App\Models\Common\Contact $contact
 * @property-read \App\Models\Setting\Currency $currency
 * @property-read string $amount_due
 * @property-read string $amount_without_tax
 * @property-read string $attachment
 * @property-read string $discount
 * @property mixed $invoice_number
 * @property mixed $invoiced_at
 * @property-read string $paid
 * @property-read mixed $received_at
 * @property-read int $reconciled
 * @property-read mixed $sent_at
 * @property-read string $status_label
 * @property-read mixed $template_path
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Document\DocumentHistory[] $histories
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Document\DocumentItemTax[] $item_taxes
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Document\DocumentItem[] $items
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Common\Media[] $media
 * @property-read \App\Models\Auth\User|null $owner
 * @property-read \App\Models\Common\Recurring|null $recurring
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Document\DocumentTotal[] $totals
 * @property-read \Plank\Mediable\MediableCollection|\App\Models\Banking\Transaction[] $transactions
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document accrued()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Invoice all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Invoice avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document bill()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Invoice cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Invoice cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Invoice count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Invoice disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document due($date)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Invoice flushCache(array $tags = [])
 * @method static \Plank\Mediable\MediableCollection|static[] get($columns = ['*'])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Invoice getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Invoice inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Invoice insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document invoice()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Invoice isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document latest()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Invoice max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Invoice min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document monthsOfYear($field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Invoice newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Invoice newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document notPaid()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document number(string $number)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document paid()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Invoice query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Invoice sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Invoice truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document type(string $type)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document whereHasMedia($tags = [], bool $matchAll = false)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document whereHasMediaMatchAll(array $tags)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document withMedia($tags = [], bool $matchAll = false, bool $withVariants = false)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document withMediaAndVariants($tags = [], bool $matchAll = false)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document withMediaAndVariantsMatchAll($tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Document withMediaMatchAll(bool $tags = [], bool $withVariants = false)
 */
	class Invoice extends \Eloquent {}
}

namespace App\Models\Sale{
/**
 * App\Models\Sale\InvoiceHistory
 *
 * @deprecated 
 * @see DocumentHistory
 * @property int $id
 * @property int $company_id
 * @property string $type
 * @property int $document_id
 * @property string $status
 * @property int $notify
 * @property string|null $description
 * @property string|null $created_from
 * @property string|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Common\Company $company
 * @property-read \App\Models\Document\Document $document
 * @property mixed $invoice_id
 * @property-read \App\Models\Auth\User|null $owner
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceHistory all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceHistory avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory bill()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceHistory cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceHistory cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceHistory count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceHistory disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceHistory flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceHistory getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceHistory inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceHistory insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory invoice()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceHistory isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceHistory max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceHistory min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model monthsOfYear($field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceHistory newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceHistory newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceHistory query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceHistory sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceHistory truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentHistory type(string $type)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 */
	class InvoiceHistory extends \Eloquent {}
}

namespace App\Models\Sale{
/**
 * App\Models\Sale\InvoiceItem
 *
 * @deprecated 
 * @see DocumentItem
 * @property int $id
 * @property int $company_id
 * @property string $type
 * @property int $document_id
 * @property int|null $item_id
 * @property string $name
 * @property string|null $description
 * @property string|null $sku
 * @property float $quantity
 * @property float $price
 * @property float $tax
 * @property string $discount_type
 * @property float $discount_rate
 * @property float $total
 * @property string|null $created_from
 * @property string|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Common\Company $company
 * @property-read \App\Models\Document\Document $document
 * @property-read string $discount
 * @property mixed $invoice_id
 * @property-read \App\Models\Common\Item|null $item
 * @property-read \App\Models\Auth\User|null $owner
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Document\DocumentItemTax[] $taxes
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItem all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItem avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem bill()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItem cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItem cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItem count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItem disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItem flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItem getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItem inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItem insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem invoice()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItem isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItem max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItem min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model monthsOfYear($field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItem newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItem newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItem query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItem sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItem truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItem type(string $type)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 */
	class InvoiceItem extends \Eloquent {}
}

namespace App\Models\Sale{
/**
 * App\Models\Sale\InvoiceItemTax
 *
 * @deprecated 
 * @see DocumentItemTax
 * @property int $id
 * @property int $company_id
 * @property string $type
 * @property int $document_id
 * @property int $document_item_id
 * @property int $tax_id
 * @property string $name
 * @property float $amount
 * @property string|null $created_from
 * @property string|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Common\Company $company
 * @property-read \App\Models\Document\Document $document
 * @property mixed $invoice_id
 * @property mixed $invoice_item_id
 * @property-read \App\Models\Auth\User|null $owner
 * @property-read \App\Models\Setting\Tax $tax
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItemTax all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItemTax avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax bill()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItemTax cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItemTax cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItemTax count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItemTax disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItemTax flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItemTax getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItemTax inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItemTax insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax invoice()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItemTax isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItemTax max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItemTax min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model monthsOfYear($field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItemTax newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItemTax newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItemTax query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItemTax sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceItemTax truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentItemTax type(string $type)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 */
	class InvoiceItemTax extends \Eloquent {}
}

namespace App\Models\Sale{
/**
 * App\Models\Sale\InvoiceTotal
 *
 * @deprecated 
 * @see DocumentTotal
 * @property int $id
 * @property int $company_id
 * @property string $type
 * @property int $document_id
 * @property string|null $code
 * @property string $name
 * @property float $amount
 * @property int $sort_order
 * @property string|null $created_from
 * @property string|null $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Common\Company $company
 * @property-read \App\Models\Document\Document $document
 * @property mixed $invoice_id
 * @property-read mixed $title
 * @property-read \App\Models\Auth\User|null $owner
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model account($accounts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceTotal all($columns = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model allCompanies()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceTotal avg($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal bill()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceTotal cache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceTotal cachedValue(array $arguments, string $cacheKey)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal code($code)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collect($sort = 'name')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model collectForExport($ids = [], $sort = 'name', $id_field = 'id')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model companyId($company_id)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model contact($contacts)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceTotal count($columns = '*')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disableCache()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceTotal disableModelCaching()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model disabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model enabled()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceTotal flushCache(array $tags = [])
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceTotal getModelCacheCooldown(\Illuminate\Database\Eloquent\Model $instance)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceTotal inRandomOrder($seed = '')
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceTotal insert(array $values)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal invoice()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceTotal isCachable()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isNotOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model isOwner()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceTotal max($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceTotal min($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal monthsOfYear($field)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceTotal newModelQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceTotal newQuery()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceTotal query()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model reconciled($value = 1)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model sortable($defaultParameters = null)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model source($source)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceTotal sum($column)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|InvoiceTotal truncate()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|DocumentTotal type(string $type)
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model usingSearchString()
 * @method static \GeneaLabs\LaravelModelCaching\CachedBuilder|Model withCacheCooldownSeconds(?int $seconds = null)
 */
	class InvoiceTotal extends \Eloquent {}
}

