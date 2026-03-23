<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

// 1. ADD THESE TWO FILAMENT IMPORTS
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;

// 2. IMPLEMENT THE FilamentUser INTERFACE
class User extends Authenticatable implements FilamentUser
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function profile() {
        return $this->hasOne(UserProfile::class);
    }

    public function isAdmin(): bool
    {
        return $this->email === 'admin@lingualink.com';
    }

    // 3. ADD THE FILAMENT GATEKEEPER METHOD
    public function canAccessPanel(Panel $panel): bool
    {
        // This instantly ties Filament's security to your existing logic!
        return $this->isAdmin();
    }
}