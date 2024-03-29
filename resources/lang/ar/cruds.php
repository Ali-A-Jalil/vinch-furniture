<?php

return [
    'userManagement' => [
        'title'          => 'إدارة المستخدمين',
        'title_singular' => 'إدارة المستخدمين',
    ],
    'masterData' => [
        'title'          => 'البيانات الأساسية',
        'title_singular' => 'البيانات الأساسية',
    ],
    'operation' => [
        'title'          => 'إدارة العمليات',
        'title_singular' => 'إدارة العمليات',
    ],
    'permission' => [
        'title'          => 'الصلاحيات',
        'title_singular' => 'الصلاحية',
        'fields'         => [
            'id'                => 'الرقم التعريفي',
            'id_helper'         => ' ',
            'title'             => 'العنوان',
            'title_helper'      => ' ',
            'created_at'        => 'تاريخ الإنشاء',
            'created_at_helper' => ' ',
            'updated_at'        => 'اخر تحديث',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'تاريخ الحذف',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'المجموعات',
        'title_singular' => 'مجموعة',
        'fields'         => [
            'id'                 => 'الرقم التعريفي',
            'id_helper'          => ' ',
            'title'              => 'العنوان',
            'title_helper'       => ' ',
            'permissions'        => 'الصلاحيات',
            'permissions_helper' => ' ',
            'created_at'         => 'تاريخ الإنشاء',
            'created_at_helper'  => ' ',
            'updated_at'         => 'اخر تحديث',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'تاريخ الحذف',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'المستخدمين',
        'title_singular' => 'مستخدم',
        'fields'         => [
            'id'                       => 'الرقم التعريفي',
            'id_helper'                => ' ',
            'name'                     => 'الاسم',
            'name_helper'              => ' ',
            'email'                    => 'البريد الالكتروني',
            'email_helper'             => ' ',
            'email_verified_at'        => 'تم التفعيل في',
            'email_verified_at_helper' => ' ',
            'password'                 => 'كلمة المرور',
            'password_helper'          => ' ',
            'roles'                    => 'الأدوار',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'تاريخ الإنشاء',
            'created_at_helper'        => ' ',
            'updated_at'               => 'اخر تحديث',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'تاريخ الحذف',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'division' => [
        'title'          => 'المناطق',
        'title_singular' => 'منطقة',
        'fields'         => [
            'id'                        => 'الرقم التعريفي',
            'id_helper'                 => ' ',
            'name'                      => 'الإسم',
            'name_helper'               => ' ',
            'created_at'                => 'تاريخ الإنشاء',
            'created_at_helper'         => ' ',
            'updated_at'                => 'اخر تحديث',
            'updated_at_helper'         => ' ',
            'deleted_at'                => 'تاريخ الحذف',
            'deleted_at_helper'         => ' ',
        ],
    ],
    'city' => [
        'title'          => 'المدن',
        'title_singular' => 'مدينة',
        'fields'         => [
            'id'                        => 'الرقم التعريفي',
            'id_helper'                 => ' ',
            'name'                      => 'الإسم',
            'name_helper'               => ' ',
            'division'                      => 'المنطقة',
            'division_helper'               => ' ',
            'created_at'                => 'تاريخ الإنشاء',
            'created_at_helper'         => ' ',
            'updated_at'                => 'اخر تحديث',
            'updated_at_helper'         => ' ',
            'deleted_at'                => 'تاريخ الحذف',
            'deleted_at_helper'         => ' ',
        ],
    ],
    'area' => [
        'title'          => 'المحافظات',
        'title_singular' => 'محافظة',
        'fields'         => [
            'id'                        => 'الرقم التعريفي',
            'id_helper'                 => ' ',
            'name'                      => 'الإسم',
            'name_helper'               => ' ',
            'city'                      => 'المدينة',
            'city_helper'               => ' ',
            'created_at'                => 'تاريخ الإنشاء',
            'created_at_helper'         => ' ',
            'updated_at'                => 'اخر تحديث',
            'updated_at_helper'         => ' ',
            'deleted_at'                => 'تاريخ الحذف',
            'deleted_at_helper'         => ' ',
        ],
    ],
    'category' => [
        'title'          => 'أنواع المنتجات',
        'title_singular' => 'نوع المنتج',
        'fields'         => [
            'id'                        => 'الرقم التعريفي',
            'id_helper'                 => ' ',
            'name'                      => 'الإسم',
            'name_helper'               => ' ',
            'created_at'                => 'تاريخ الإنشاء',
            'created_at_helper'         => ' ',
            'updated_at'                => 'اخر تحديث',
            'updated_at_helper'         => ' ',
            'deleted_at'                => 'تاريخ الحذف',
            'deleted_at_helper'         => ' ',
        ],
    ],
    'branch' => [
        'title'          => 'الفروع',
        'title_singular' => 'فرع',
        'fields'         => [
            'id'                 => 'الرقم التعريفي',
            'id_helper'          => ' ',
            'name'               => 'إسم الفرع',
            'name_helper'        => ' ',
            'phone'               => 'رقم الجوال',
            'phone_helper'        => ' ',
            'address_details'               => 'العنوان',
            'address_details_helper'        => ' ',
            'area'               => 'المنطقة',
            'area_helper'        => ' ',
            'division'               => 'المنطقة',
            'division_helper'        => ' ',
            'manager'               => 'المدير',
            'manager_helper'        => ' ',
            'created_at'                => 'تاريخ الإنشاء',
            'created_at_helper'         => ' ',
            'updated_at'                => 'اخر تحديث',
            'updated_at_helper'         => ' ',
            'deleted_at'                => 'تاريخ الحذف',
            'deleted_at_helper'         => ' ',
        ],
    ],
    'customer_types' => [
        'title'          => 'انواع العملاء',
        'title_singular' => 'نوع العميل',
        'fields'         => [
            'id'                 => 'الرقم التعريفي',
            'id_helper'          => ' ',
            'name'               => 'الاسم',
            'name_helper'        => ' ',
            'created_at'                => 'تاريخ الإنشاء',
            'created_at_helper'         => ' ',
            'updated_at'                => 'اخر تحديث',
            'updated_at_helper'         => ' ',
        ],
    ],
    'employee' => [
        'title'          => 'الموظفين',
        'title_singular' => 'موظف',
        'fields'         => [
            'id'                        => 'ID',
            'id_helper'                 => ' ',
            'name'                      => 'الإسم',
            'name_helper'               => ' ',
            'phone'                     => 'رقم الجوال',
            'phone_helper'              => ' ',
            'status'                    => 'الحالة',
            'status_helper'             => ' ',
            'national'                  => 'رقم الهوية',
            'national_helper'           => ' ',
            'supervisor'                => 'المشرف',
            'supervisor_helper'         => ' ',
            'branch'                  => 'الفرع',
            'branch_helper'           => ' ',
            'role'                  => 'الدور',
            'role_helper'           => ' ',
            'created_at'                => 'تاريخ الإنشاء',
            'created_at_helper'         => ' ',
            'updated_at'                => 'اخر تحديث',
            'updated_at_helper'         => ' ',
            'deleted_at'                => 'تاريخ الحذف',
            'deleted_at_helper'         => ' ',
        ],
    ],
    'customer' => [
        'title'          => 'العملاء',
        'title_singular' => 'عميل',
        'fields'         => [
            'id'                        => 'ألرقم التعريفي ',
            'id_helper'                 => ' ',
            'name'                      => 'الإسم',
            'name_helper'               => ' ',
            'phone'                     => 'رقم الجوال',
            'phone_helper'              => ' ',
            'status'                    => 'الحالة',
            'status_helper'             => ' ',
            'national'                  => 'رقم الهوية',
            'national_helper'           => ' ',
            'commercial_record'                  => 'السجل التجاري',
            'commercial_record_helper'           => ' ',
            'created_at'                => 'تاريخ الإنشاء',
            'created_at_helper'         => ' ',
            'updated_at'                => 'اخر تحديث',
            'updated_at_helper'         => ' ',
            'deleted_at'                => 'تاريخ الحذف',
            'deleted_at_helper'         => ' ',
        ],
    ],
    'service_request' => [
        'title'          => 'طلبات الصيانة',
        'title_singular' => 'طلب صيانة',
        'fields'         => [
            'id'                        => 'الرقم التعريفي',
            'id_helper'                 => ' ',
            'name'                      => 'إسم العميل',
            'name_helper'               => ' ',
            'phone'                     => 'رقم الجوال',
            'phone_helper'              => ' ',
            'status'                    => 'حالة الطلب',
            'status_helper'             => ' ',
            'ref'                       => 'الرقم المرجعي',
            'ref_helper'                => ' ',
            'agent'                     => 'مسئول الصيانة',
            'agent_helper'              => ' ',
            'customer'                  => 'العميل',
            'customer_helper'           => ' ',
            'area'                      => 'المحافظة',
            'area_helper'               => ' ',
            'division'                  => 'المنطقة',
            'division_helper'           => ' ',
            'date'                      => 'التاريخ',
            'date_helper'               => ' ',
            'in_warranty'               => 'في الضمان',
            'in_warranty_helper'        => ' ',
            'notes'                     => 'الملاحظات',
            'notes_helper'              => ' ',
            'address'                   => 'تفاصيل العنوان',
            'address_helper'            => ' ',
            'new'                       => 'نوع الطلب',
            'new_helper'                => ' ',
            'description'                       => 'وصف المشكلة',
            'description_helper'                => ' ',
            'created_at'                => 'أنشئ في',
            'created_at_helper'         => ' ',
            'updated_at'                => 'تم التعديل في',
            'updated_at_helper'         => ' ',
            'deleted_at'                => 'حذف في',
            'deleted_at_helper'         => ' ',
        ],
    ],
];
