<?php
namespace App\Helpers;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use App\Models\User;

class JwtDecoder
{
    public function getUserFromToken($token)
    {
        try {
            // Decode JWT
            $decoded = JWT::decode($token, new Key(env('JWT_SECRET'), 'HS256'));


            $email = $decoded->email ?? null;

            if (!$email) {
                return null;
            }

            return User::where('email', $email)->first();
        } catch (\Exception $e) {
            
            return null;
        }
    }
}
