<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'Isian :attribute harus diterima.',
    'active_url'           => 'Isian :attribute bukan URL yang valid.',
    'after'                => 'Isian :attribute harus tanggal setelah :date.',
    'after_or_equal'       => 'Isian :attribute harus berupa tanggal setelah atau sama dengan tanggal :date.',
    'alpha'                => 'Isian :attribute hanya boleh berisi huruf.',
    'alpha_dash'           => 'Isian :attribute hanya boleh berisi huruf, angka, dan strip.',
    'alpha_num'            => 'Isian :attribute hanya boleh berisi huruf dan angka.',
    'array'                => 'Isian :attribute harus berupa sebuah array.',
    'before'               => 'Isian :attribute harus tanggal sebelum :date.',
    'before_or_equal'      => 'Isian :attribute harus berupa tanggal sebelum atau sama dengan tanggal :date.',
    'between'              => [
        'numeric' => 'Isian :attribute harus antara :min dan :max.',
        'file'    => 'Bidang :attribute harus antara :min dan :max kilobita.',
        'string'  => 'Isian :attribute harus antara :min dan :max karakter.',
        'array'   => 'Isian :attribute harus antara :min dan :max item.',
    ],
    'boolean'              => 'Isian :attribute harus berupa true atau false',
    'confirmed'            => 'Konfirmasi :attribute tidak cocok.',
    'date'                 => 'Isian :attribute bukan tanggal yang valid.',
    'date_equals'          => 'The :attribute must be a date equal to :date.',
    'date_format'          => 'Isian :attribute tidak cocok dengan format :format.',
    'different'            => 'Isian :attribute dan :other harus berbeda.',
    'digits'               => 'Isian :attribute harus berupa angka :digits.',
    'digits_between'       => 'Isian :attribute harus antara angka :min dan :max.',
    'dimensions'           => 'Bidang :attribute tidak memiliki dimensi gambar yang valid.',
    'distinct'             => 'Bidang isian :attribute memiliki nilai yang duplikat.',
    'email'                => 'Isian :attribute harus berupa alamat surel yang valid.',
    'exists'               => 'Isian :attribute yang dipilih tidak valid.',
    'file'                 => 'Bidang :attribute harus berupa sebuah berkas.',
    'filled'               => 'Isian :attribute harus memiliki nilai.',
    'gt'                   => [
        'numeric' => 'Isian :attribute harus lebih besar dari :value.',
        'file'    => 'Bidang :attribute harus lebih besar dari :value kilobita.',
        'string'  => 'Isian :attribute harus lebih besar dari :value karakter.',
        'array'   => 'Isian :attribute harus lebih dari :value item.',
    ],
    'gte'                  => [
        'numeric' => 'Isian :attribute harus lebih besar dari atau sama dengan :value.',
        'file'    => 'Bidang :attribute harus lebih besar dari atau sama dengan :value kilobita.',
        'string'  => 'Isian :attribute harus lebih besar dari atau sama dengan :value karakter.',
        'array'   => 'Isian :attribute harus mempunyai :value item atau lebih.',
    ],
    'image'                => 'Isian :attribute harus berupa gambar.',
    'in'                   => 'Isian :attribute yang dipilih tidak valid.',
    'in_array'             => 'Bidang isian :attribute tidak terdapat dalam :other.',
    'integer'              => 'Isian :attribute harus merupakan bilangan bulat.',
    'ip'                   => 'Isian :attribute harus berupa alamat IP yang valid.',
    'ipv4'                 => 'Isian :attribute harus berupa alamat IPv4 yang valid.',
    'ipv6'                 => 'Isian :attribute harus berupa alamat IPv6 yang valid.',
    'json'                 => 'Isian :attribute harus berupa JSON string yang valid.',
    'lt'                   => [
        'numeric' => 'Isian :attribute harus kurang dari :value.',
        'file'    => 'Bidang :attribute harus kurang dari :value kilobita.',
        'string'  => 'Isian :attribute harus kurang dari :value karakter.',
        'array'   => 'Isian :attribute harus kurang dari :value item.',
    ],
    'lte'                  => [
        'numeric' => 'Isian :attribute harus kurang dari atau sama dengan :value.',
        'file'    => 'Bidang :attribute harus kurang dari atau sama dengan :value kilobita.',
        'string'  => 'Isian :attribute harus kurang dari atau sama dengan :value karakter.',
        'array'   => 'Isian :attribute harus tidak lebih dari :value item.',
    ],
    'max'                  => [
        'numeric' => 'Isian :attribute seharusnya tidak lebih dari :max.',
        'file'    => 'Bidang :attribute seharusnya tidak lebih dari :max kilobita.',
        'string'  => 'Isian :attribute seharusnya tidak lebih dari :max karakter.',
        'array'   => 'Isian :attribute seharusnya tidak lebih dari :max item.',
    ],
    'mimes'                => 'Isian :attribute harus dokumen berjenis : :values.',
    'mimetypes'            => 'Isian :attribute harus dokumen berjenis : :values.',
    'min'                  => [
        'numeric' => 'Isian :attribute harus minimal :min.',
        'file'    => 'Bidang :attribute harus minimal :min kilobita.',
        'string'  => 'Isian :attribute harus minimal :min karakter.',
        'array'   => 'Isian :attribute harus minimal :min item.',
    ],
    'not_in'               => 'Isian :attribute yang dipilih tidak valid.',
    'not_regex'            => 'Format isian :attribute tidak valid.',
    'numeric'              => 'Isian :attribute harus berupa angka.',
    'present'              => 'Bidang isian :attribute wajib ada.',
    'regex'                => 'Format isian :attribute tidak valid.',
    'required'             => 'Bidang isian :attribute wajib diisi.',
    'required_if'          => 'Bidang isian :attribute wajib diisi bila :other adalah :value.',
    'required_unless'      => 'Bidang isian :attribute wajib diisi kecuali :other memiliki nilai :values.',
    'required_with'        => 'Bidang isian :attribute wajib diisi bila terdapat :values.',
    'required_with_all'    => 'Bidang isian :attribute wajib diisi bila terdapat :values.',
    'required_without'     => 'Bidang isian :attribute wajib diisi bila tidak terdapat :values.',
    'required_without_all' => 'Bidang isian :attribute wajib diisi bila tidak terdapat ada :values.',
    'same'                 => 'Isian :attribute dan :other harus sama.',
    'size'                 => [
        'numeric' => 'Isian :attribute harus berukuran :size.',
        'file'    => 'Bidang :attribute harus berukuran :size kilobyte.',
        'string'  => 'Isian :attribute harus berukuran :size karakter.',
        'array'   => 'Isian :attribute harus mengandung :size item.',
    ],
    'starts_with'          => 'The :attribute must start with one of the following: :values',
    'string'               => 'Isian :attribute harus berupa string.',
    'timezone'             => 'Isian :attribute harus berupa zona waktu yang valid.',
    'unique'               => 'Isian :attribute sudah ada sebelumnya.',
    'uploaded'             => 'Isian :attribute gagal diunggah.',
    'url'                  => 'Format isian :attribute tidak valid.',
    'uuid'                 => 'The :attribute must be a valid UUID.',

    /*
    |---------------------------------------------------------------------------------------
    | Baris Bahasa untuk Validasi Kustom
    |---------------------------------------------------------------------------------------
    |
    | Di sini Anda dapat menentukan pesan validasi kustom untuk atribut dengan menggunakan
    | konvensi "attribute.rule" dalam penamaan baris. Hal ini membuat cepat dalam
    | menentukan spesifik baris bahasa kustom untuk aturan atribut yang diberikan.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],


    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [

        'backend' => [
            'access' => [
                'permissions' => [
                    'associated_roles' => 'Associated Roles',
                    'dependencies'     => 'Dependencies',
                    'display_name'     => 'Display Name',
                    'group'            => 'Group',
                    'group_sort'       => 'Group Sort',
                    'name'             => 'Name',
                    'sort'             => 'Sort',

                    'groups' => [
                        'name' => 'Group Name',
                    ],

                    'name'   => 'Name',
                    'system' => 'System?',
                ],

                'roles' => [
                    'associated_permissions' => 'Associated Permissions',
                    'name'                   => 'Name',
                    'sort'                   => 'Sort',
                    'active'                 => 'Active',
                ],

                'users' => [
                    'active'                  => 'Active',
                    'associated_roles'        => 'Associated Roles',
                    'confirmed'               => 'Confirmed',
                    'email'                   => 'E-mail Address',
                    'firstName'               => 'First Name',
                    'lastName'                => 'Last Name',
                    'other_permissions'       => 'Other Permissions',
                    'old_password'            => 'Old password',
                    'password'                => 'New Password',
                    'password_confirmation'   => 'New Password Confirmation',
                    'send_confirmation_email' => 'Send Confirmation E-mail',
                ],
            ],
            'pages' => [
                'title'           => 'Title',
                'description'     => 'Description',
                'cannonical_link' => 'Cannonical Link',
                'seo_title'       => 'SEO Title',
                'seo_keyword'     => 'SEO Keyword',
                'seo_description' => 'SEO Description',
                'is_active'       => 'Active',
            ],

            'blogcategories' => [
                'title'     => 'Blog Category',
                'is_active' => 'Active',
            ],

            'blogtags' => [
                'title'     => 'Blog Tag',
                'is_active' => 'Active',
            ],

            'blogs' => [
                'title'            => 'Blog Title',
                'category'         => 'Blog Category',
                'publish'          => 'Publish Date & Time',
                'image'            => 'Featured Image/File',
                'content'          => 'Content',
                'tags'             => 'Tags',
                'meta-title'       => 'Meta Title',
                'slug'             => 'Slug',
                'cannonical_link'  => 'Cannonical Link',
                'meta_keyword'     => 'Meta Keyword',
                'meta_description' => 'Meta Description',
                'status'           => 'Status',
            ],

            'finances' => [
                'title'            => 'Annual Title',
                'publish'          => 'Publish Date & Time',
                'image'            => 'Featured File',
                'content'          => 'Content',
                'meta-title'       => 'Meta Title',
                'slug'             => 'Slug',
                'cannonical_link'  => 'Cannonical Link',
                'meta_keyword'     => 'Meta Keyword',
                'meta_description' => 'Meta Description',
                'status'           => 'Status',
            ],
            'settings' => [
                'sitelogo'        => 'Site Logo',
                'favicon'         => 'Fav Icon',
                'metatitle'       => 'Meta Title',
                'metakeyword'     => 'Meta Keyawords',
                'metadescription' => 'Meta Description',
                'companydetails'  => [
                    'address'       => 'Company Address',
                    'contactnumber' => 'Contact Number',
                ],
                'mail' => [
                    'fromname'  => 'From Name',
                    'fromemail' => 'From Email',
                ],
                'footer' => [
                    'text'      => 'Footer Text',
                    'copyright' => 'Copyright Text',
                ],
                'termscondition' => [
                    'terms'      => 'Terms & Condition',
                    'disclaimer' => 'Disclaimer',
                ],
                'google' => [
                    'analytic' => 'Google Analytics',
                ],
            ],
            'faqs' => [
                    'question' => 'Question',
                    'answer'   => 'Answer',
                    'status'   => 'Status',
            ],
        ],

        'frontend' => [
            
            'register-user' => [
                'email'                     => 'E-mail Address',
                'firstName'                 => 'First Name',
                'lastName'                  => 'Last Name',
                'password'                  => 'Password',
                'address'                   => 'Address',
                'country'                   => 'Country',
                'state'                     => 'Select State',
                'city'                      => 'Select City',
                'zipcode'                   => 'Zip Code',
                'ssn'                       => 'SSN',
                'password_confirmation'     => 'Password Confirmation',
                'old_password'              => 'Old Password',
                'new_password'              => 'New Password',
                'new_password_confirmation' => 'New Password Confirmation',
                'terms_and_conditions'      => 'terms and conditions',
            ],
        ],
    ],

    'api' => [
        'login' => [
            'email_required'                => 'Please enter email',
            'valid_email'                   => 'Please enter valid email address.',
            'password_required'             => 'Please enter passsword.',
            'username_password_didnt_match' => 'Please enter valid credentials.',
        ],

        'forgotpassword' => [
            'email_required'  => 'Please enter email',
            'valid_email'     => 'Please enter valid email address.',
            'email_not_valid' => 'Email you entered is not register with fin builders.',
        ],

        'resetpassword' => [
            'email_required'            => 'Please enter email',
            'valid_email'               => 'Please enter valid email address.',
            'password_required'         => 'Please enter passsword.',
            'password_confirmed'        => 'passsword and confirm passsword do not match.',
            'token_required'            => 'Please enter token.',
            'confirm_password_required' => 'Please enter confirm password.',
            'token_not_valid'           => 'Given token is invalid.',
            'email_not_valid'           => 'Email you entered is not register with fin builders.',
        ],
        'register' => [
            'state_required' => 'Please enter state.',
            'city_required'  => 'Please enter city.',
        ],
        'confirmaccount' => [
           'already_confirmed' => 'Account is already confirmed.',
           'invalid_otp'       => 'Please enter valid otp.',
            'invalid_email'    => 'Email is not register with fin builders',
        ],
    ],

];
