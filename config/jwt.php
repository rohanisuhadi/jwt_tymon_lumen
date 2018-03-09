<?php

/*
 * This file is part of jwt-auth.
 *
 * (c) Sean Tymon <tymon148@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | JWT Authentication Secret
    |--------------------------------------------------------------------------
    |
    | Don't forget to set this in your .env file, as it will be used to sign
    | your tokens. A helper command is provided for this:
    | `php artisan jwt:secret`
    |
    | Note: This will be used for Symmetric algorithms only (HMAC),
    | since RSA and ECDSA use a private/public key combo (See below).
    |
    */

    'secret' => env('JWT_SECRET'),

    /*
    |--------------------------------------------------------------------------
    | JWT Authentication Keys
    |--------------------------------------------------------------------------
    |
    | The algorithm you are using, will determine whether your tokens are
    | signed with a random string (defined in `JWT_SECRET`) or using the
    | following public & private keys.
    |
    | Symmetric Algorithms:
    | HS256, HS384 & HS512 will use `JWT_SECRET`.
    |
    | Asymmetric Algorithms:
    | RS256, RS384 & RS512 / ES256, ES384 & ES512 will use the keys below.
    |
    */

    'keys' => [

        /*
        |--------------------------------------------------------------------------
        | Public Key
        |--------------------------------------------------------------------------
        |
        | A path or resource to your public key.
        |
        | E.g. 'file://path/to/public/key'
        |
        */

        'public' => env('JWT_PUBLIC_KEY'),
        // 'public' => 'AAAAB3NzaC1yc2EAAAADAQABAAACAQCz1Ecob8kAoRbh15k38LTvJK/EAMXgTJtuWzPpmyI4jgEYgtDb125syHjZh3wZdJ0tD7LC8NjBxczZwnG8/foMh+9mzYFRLmNr08+RZ66Irpl2cnISbx1jMM7IEklZLBR0ItlrIUIHpa38hM7gAQBUYnaaxm7ThAlZFF3OfR2EHqJSQYKNGGFIvPhibbFbSbCuyh3jhEGxrcuTVF6Ah/brx87IoLaehTSGdKGgtpdMf5IrsbzFGtk9BZkjHZ+BjzOuMYqSFlQyYBirbBBvbSAuDv/sEFyD/cVXdYFxQgnurOiEkYvquDDLQINxI2yZ8Rk6mcrVNMxKzd95RJjf9VUaenUG3BkKeqf0qoO773HR1GsmjVzTsf3qhSMvBeo9cQ6GldLcOwQ++/LF2QUNPmuuJaIF4CnqK2XEEP+4A7Rk8J6LO0QmNTt0Tx/hPCgGSKoxJUk7snphlKjn9RdC9mMDq7h+8pL+SeeIwJyuPdF/5EKTjs8V5aEmg3Sp8H+IZZ070oPVWEOAJ4bf/8RDLGqSPHzfeR3kvb3R4sXnUEQcHSceyz2mMEgUYHAS2T08n3aGXFMtKwDIGf7rO9nh0mhe8wYg5xFGkHdgSesi0gwx2DeD6W5UnzyHnFWkd66h3GyVxGYUzFDMZMW3V9M2YF64wHA0L1gNoa/oWEoX0vdKnQ==',

        /*
        |--------------------------------------------------------------------------
        | Private Key
        |--------------------------------------------------------------------------
        |
        | A path or resource to your private key.
        |
        | E.g. 'file://path/to/private/key'
        |
        */

        'private' => env('JWT_PRIVATE_KEY'),
        // 'private' => 'MIIJKAIBAAKCAgEAs9RHKG/JAKEW4deZN/C07ySvxADF4Eybblsz6ZsiOI4BGILQ
        // 29dubMh42Yd8GXSdLQ+ywvDYwcXM2cJxvP36DIfvZs2BUS5ja9PPkWeuiK6ZdnJy
        // Em8dYzDOyBJJWSwUdCLZayFCB6Wt/ITO4AEAVGJ2msZu04QJWRRdzn0dhB6iUkGC
        // jRhhSLz4Ym2xW0mwrsod44RBsa3Lk1RegIf268fOyKC2noU0hnShoLaXTH+SK7G8
        // xRrZPQWZIx2fgY8zrjGKkhZUMmAYq2wQb20gLg7/7BBcg/3FV3WBcUIJ7qzohJGL
        // 6rgwy0CDcSNsmfEZOpnK1TTMSs3feUSY3/VVGnp1BtwZCnqn9KqDu+9x0dRrJo1c
        // 07H96oUjLwXqPXEOhpXS3DsEPvvyxdkFDT5rriWiBeAp6itlxBD/uAO0ZPCeiztE
        // JjU7dE8f4TwoBkiqMSVJO7J6YZSo5/UXQvZjA6u4fvKS/knniMCcrj3Rf+RCk47P
        // FeWhJoN0qfB/iGWdO9KD1VhDgCeG3//EQyxqkjx833kd5L290eLF51BEHB0nHss9
        // pjBIFGBwEtk9PJ92hlxTLSsAyBn+6zvZ4dJoXvMGIOcRRpB3YEnrItIMMdg3g+lu
        // VJ88h5xVpHeuodxslcRmFMxQzGTFt1fTNmBeuMBwNC9YDaGv6FhKF9L3Sp0CAwEA
        // AQKCAgBqjLmIxQs0uz3inKslERMzquoV2VtlNh7WOWW94XRaTBFsI356899yxymL
        // whIOxyCl5WpGxQu5bGifEe3wTA/PQu/fWp5nqnOwHPUcs3EffUxieRcLwxiHgBDV
        // TLh3BH4t/cQTDMah31ICj/I/mXhHh3u84xwhaVdcl4upYEqP0NLeqAAhd7OUtJr7
        // PwFaFISCXDFvcBq4m0BG0DOaNnVgaKgmCcuKi2R+0jY+ElH9Oo0yJIKzyt+yn1GI
        // E/JBgsbdTG9Ndbt3iaa0Uzg9vUvW3n5Wsa8Padp2oqIKqFVYPM0cV1yuu2n11AjN
        // jW64m7kWFq+uujTdkbP6l2F5OVSteFhd1MKT08M9rst9Seb/GU+DsLVPgO6MybrV
        // 7CZi10/lITAIucsfs5SeKeICHJWsBSadRPTRq9w/HXMCDP1jAnhLzCVo6gokDzcL
        // uRgdw4jkNWaktXVLLBTWN4cjdgXD2kiR/tTnesEsAxyU3XXEuhBzr8BixSaOXxLE
        // wF9v8jTZcv654hkkTkcUzTeai4J3KTocuAEt2DBiK/AJrxkFum7VVOEZWf2ICsIN
        // Fjave5AJMA33Uz+Q45TkqBFQCEd5cRabzGSnp2uClClGBYgUk8g1x7enZj6zBKyf
        // 3MhLWd5B63Cwlev2dtRM8wSVd8lk+ah2Fa03Xx6UbGBl7WBCgQKCAQEA2sL9nf1h
        // Q3bbaYcOhlxtKcE5seHIn4YsA+Lbro65dL9g5Q5fLctGZBHdBElSSNjCEpk6YnM3
        // uIo+KeJnPourhvFL3tqXZ9OUL3GZ/7IMPunQYGIQiK+/3je6sZVneQygtnJJ8gmU
        // 9WaaJ+f5jY6b5Z0Fq7xnsTn9ow7N0e4b1JgUlGTDcElmohYjb3Qb2+CoD+7HNDlb
        // XnjfMxn7hkyuyhuHkM6uehQbbIy9wGCdcPW7pMaJ4vLyLMXL2//OQNjbB55/ITrz
        // SVRZId1eXPZshGuokZFiLLi+ZUPdOjcX7/6QPZbbV2N+DN3QN0QBBCdbv8Nta9jC
        // pPzdS7oVqvRioQKCAQEA0nC4qoj2rw8tKdoqCSbYEb/TeV5WXY0jpCYVGZUGA8so
        // t0sPA7eG/YWx6tZgv3MTWRqKIlhigF9+zEMCVKA6yB8Pxa0Xvgti4WR8pimFvuTb
        // YLIEjJ9LPZ/vyN44hIj/0uQDkv5dBhlsCjv+gaI9OkUGqCP++X0cHZcTRdOAFUic
        // nO3t0ax89Ktbq1Vy9Uoc8Iv46eGu16t2LneO1oVZPyh32wqQ+kDatc+RkDeOd7Rm
        // o8Ak03agEEVt8+WnCvEHgxvB850dIbxLXBxIhDU8piPikbsNqZvtNxkh1XrOzy5A
        // iHJwY7JbwRY+gszEgSLZNU0jY8hpcxqkthnQIfHifQKCAQA2r63008V/tvOskq2H
        // 2w0S9hG1LQsZDdJs+kYOgfFMhRb0y73xVbJ4C5sjmiyutzj0q0dUGxdf03csw0Mp
        // +IJdjm53/E8DDnopzg1ARUMYaxzDK2CUutKM+4N5Jy8hrI10bmeb0Ndi7U42EaBp
        // ya+hG7qyLrwBKs0D+QxsoUhlwcrLOdE9favhcwVStETOl3+L1BYKMRhtKmwpeyJM
        // dVjwfydJhNFLBUHBxgEdWUmiVludGmCX0kHF/YAzs+PchBlk8zM2nGT6/NH3TD5t
        // oNCJ3dva3+wZ3+kAqZFhHyqlvQ5TxyV32BBHqR+G4UIbxrcB3hm5bwthcTDk4FTQ
        // Up1hAoIBAA+Sy/fC3w6hfuQkAwxeVYsquQm4U4fk1Ahn0RPtlV5egIrgASJzSIgm
        // hr4sU0iXyYzEjAhypgd+CbIwG1IL8Y2xzscAQkuMKCsp9peNZxpzcVC8m92UREsx
        // NNuWpnQYd2Yx/Zm5PUUgSICRZApP6VwQk6eJ0mrAOX5vGbwHJOluUDjE2t6zdyPc
        // MpKBZlqEu5OJqEgWrYvEYqCZtHZns+0an5QUOhprBkSCMfGMSvzM2vOvWopTsxDB
        // MpvkGPKUV8v6F+ZhcDB48NLGPQ+bqPtamH/UafRtV6bGM1zLE9b9Q0VVwr9+CZBG
        // hyXC5Z/w5kYtiTrvL+6WwC3Bx0db0TkCggEBAMTkBMXwura1uCIIE6biMXPvoNLJ
        // YFD4AkBJn/0rafSa/tAJg4vZwtqhaL2eSKpuJBW+PaoTSAnZokCpqK8mnFHuAx0f
        // G16t/uTfNG/r7CcwbJQM9Z5BJ9vyr1S6DbFCFSC+9NNnG7xg1Se8O6bqWdXytdUs
        // 72zK8NprVaAR5wZhI95mAAylEE2bFUesZFVQLhDPGWZIay4h9VQT3SUmomY28NdC
        // ZgbwYG1GtXbGadPAvOEMWCmV90/XGbfTkgyhFnbFKObAvZMJc1/8BMnDAVfINjVe
        // jGiVcDa02Tz63Z7ibJalJMqkeMIHiuItmmgQDo7jX6XQ0AXSibuS2CuLgPA',

        /*
        |--------------------------------------------------------------------------
        | Passphrase
        |--------------------------------------------------------------------------
        |
        | The passphrase for your private key. Can be null if none set.
        |
        */

         'passphrase' => env('JWT_PASSPHRASE'),
         // 'passphrase' => null,

    ],

    /*
    |--------------------------------------------------------------------------
    | JWT time to live
    |--------------------------------------------------------------------------
    |
    | Specify the length of time (in minutes) that the token will be valid for.
    | Defaults to 1 hour.
    |
    | You can also set this to null, to yield a never expiring token.
    | Some people may want this behaviour for e.g. a mobile app.
    | This is not particularly recommended, so make sure you have appropriate
    | systems in place to revoke the token if necessary.
    |
    */

    'ttl' => env('JWT_TTL', 1),

    /*
    |--------------------------------------------------------------------------
    | Refresh time to live
    |--------------------------------------------------------------------------
    |
    | Specify the length of time (in minutes) that the token can be refreshed
    | within. I.E. The user can refresh their token within a 2 week window of
    | the original token being created until they must re-authenticate.
    | Defaults to 2 weeks.
    |
    | You can also set this to null, to yield an infinite refresh time.
    | Some may want this instead of never expiring tokens for e.g. a mobile app.
    | This is not particularly recommended, so make sure you have appropriate
    | systems in place to revoke the token if necessary.
    |
    */

    'refresh_ttl' => env('JWT_REFRESH_TTL', 20160),

    /*
    |--------------------------------------------------------------------------
    | JWT hashing algorithm
    |--------------------------------------------------------------------------
    |
    | Specify the hashing algorithm that will be used to sign the token.
    |
    | See here: https://github.com/namshi/jose/tree/master/src/Namshi/JOSE/Signer/OpenSSL
    | for possible values.
    |
    */

    'algo' => env('JWT_ALGO', 'HS512'),

    /*
    |--------------------------------------------------------------------------
    | Required Claims
    |--------------------------------------------------------------------------
    |
    | Specify the required claims that must exist in any token.
    | A TokenInvalidException will be thrown if any of these claims are not
    | present in the payload.
    |
    */

    'required_claims' => [
        'iss',
        'iat',
        'exp',
        'nbf',
        'sub',
        'jti',
    ],

    /*
    |--------------------------------------------------------------------------
    | Persistent Claims
    |--------------------------------------------------------------------------
    |
    | Specify the claim keys to be persisted when refreshing a token.
    | `sub` and `iat` will automatically be persisted, in
    | addition to the these claims.
    |
    | Note: If a claim does not exist then it will be ignored.
    |
    */

    'persistent_claims' => [
        // 'foo',
        // 'bar',
    ],

    /*
    |--------------------------------------------------------------------------
    | Lock Subject
    |--------------------------------------------------------------------------
    |
    | This will determine whether a `prv` claim is automatically added to
    | the token. The purpose of this is to ensure that if you have multiple
    | authentication models e.g. `App\User` & `App\OtherPerson`, then we
    | should prevent one authentication request from impersonating another,
    | if 2 tokens happen to have the same id across the 2 different models.
    |
    | Under specific circumstances, you may want to disable this behaviour
    | e.g. if you only have one authentication model, then you would save
    | a little on token size.
    |
    */

    'lock_subject' => true,

    /*
    |--------------------------------------------------------------------------
    | Leeway
    |--------------------------------------------------------------------------
    |
    | This property gives the jwt timestamp claims some "leeway".
    | Meaning that if you have any unavoidable slight clock skew on
    | any of your servers then this will afford you some level of cushioning.
    |
    | This applies to the claims `iat`, `nbf` and `exp`.
    |
    | Specify in seconds - only if you know you need it.
    |
    */

    'leeway' => env('JWT_LEEWAY', 0),

    /*
    |--------------------------------------------------------------------------
    | Blacklist Enabled
    |--------------------------------------------------------------------------
    |
    | In order to invalidate tokens, you must have the blacklist enabled.
    | If you do not want or need this functionality, then set this to false.
    |
    */

    'blacklist_enabled' => env('JWT_BLACKLIST_ENABLED', true),

    /*
    | -------------------------------------------------------------------------
    | Blacklist Grace Period
    | -------------------------------------------------------------------------
    |
    | When multiple concurrent requests are made with the same JWT,
    | it is possible that some of them fail, due to token regeneration
    | on every request.
    |
    | Set grace period in seconds to prevent parallel request failure.
    |
    */

    'blacklist_grace_period' => env('JWT_BLACKLIST_GRACE_PERIOD', 0),

    /*
    |--------------------------------------------------------------------------
    | Cookies encryption
    |--------------------------------------------------------------------------
    |
    | By default Laravel encrypt cookies for security reason.
    | If you decide to not decrypt cookies, you will have to configure Laravel
    | to not encrypt your cookie token by adding its name into the $except
    | array available in the middleware "EncryptCookies" provided by Laravel.
    | see https://laravel.com/docs/master/responses#cookies-and-encryption
    | for details.
    |
    | Set it to true if you want to decrypt cookies.
    |
    */

    'decrypt_cookies' => false,

    /*
    |--------------------------------------------------------------------------
    | Providers
    |--------------------------------------------------------------------------
    |
    | Specify the various providers used throughout the package.
    |
    */

    'providers' => [

        /*
        |--------------------------------------------------------------------------
        | JWT Provider
        |--------------------------------------------------------------------------
        |
        | Specify the provider that is used to create and decode the tokens.
        |
        */

        'jwt' => Tymon\JWTAuth\Providers\JWT\Lcobucci::class,

        /*
        |--------------------------------------------------------------------------
        | Authentication Provider
        |--------------------------------------------------------------------------
        |
        | Specify the provider that is used to authenticate users.
        |
        */

        'auth' => Tymon\JWTAuth\Providers\Auth\Illuminate::class,

        /*
        |--------------------------------------------------------------------------
        | Storage Provider
        |--------------------------------------------------------------------------
        |
        | Specify the provider that is used to store tokens in the blacklist.
        |
        */

        'storage' => Tymon\JWTAuth\Providers\Storage\Illuminate::class,

    ],

];
