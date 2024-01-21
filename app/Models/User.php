<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Carbon\Carbon;
use DateTimeInterface;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    public $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function getIsAdminAttribute()
    {
        return $this->roles()->where('id', 1)->exists();
    }

    public function getEmailVerifiedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setEmailVerifiedAtAttribute($value)
    {
        $this->attributes['email_verified_at'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }
    public function setPasswordAttribute($input)
    {
        if ($input) {
            $this->attributes['password'] = app('hash')->needsRehash($input) ? bcrypt($input) : $input;
        }
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function employee()
    {
        return $this->hasOne(Employee::class, 'user_id');
    }

    public function logs()
    {
        return $this->hasMany(AuditLog::class, 'user_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function service_requests(): HasMany
    {
        return $this->hasMany(ServiceRequest::class, 'agent_id', 'id');
    }
    
    public function agents(): HasMany
    {
        return $this->hasMany(Employee::class, 'supervisor_id', 'id');
    }

    public function pending_service_requests(): HasMany
    {
        return $this->hasMany(ServiceRequest::class, 'agent_id', 'id')->whereStatus('pending');
    }

    public function confirmed_service_requests(): HasMany
    {
        return $this->hasMany(ServiceRequest::class, 'agent_id', 'id')->whereStatus('confirmed');
    }

    public function cancelled_service_requests(): HasMany
    {
        return $this->hasMany(ServiceRequest::class, 'agent_id', 'id')->whereStatus('cancelled');
    }

    public function done_service_requests(): HasMany
    {
        return $this->hasMany(ServiceRequest::class, 'agent_id', 'id')->whereStatus('done');
    }
}
