<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'admin' => [
            'users' => 'c,r,u,d',
            'products' => 'c,r,u,d',
        ],
        'ceo' => [
            'products' => 'r',
            'sales_reports' => 'r',
        ],
        'executive_secretary' => [
            'order_requests' => 'r,u',	
            'product_requisition_forms' => 'r',
            'delivery_receipts' => 'r',
        ],
        'sales_manager' => [
            'order_requests' => 'r,u',	
            'product_requisition_forms' => 'r',
            'delivery_receipts' => 'r',	
            'proof_of_payments' => 'r,u',
        ],
        'accounting_head' => [
            'sales_reports' => 'r',
            'purchase_order_forms' => 'r',
            'proof_of_payments' => 'r',
            'invoices' => 'c,r',
        ], 
        'warehouse_manager' => [
            'inventory_lists' => 'c,r',
            'in-out' => 'c,r',
            'product_requisition_forms' => 'c,r',
            'purchase_order_forms' => 'r',
	        'delivery_receipts' => 'c,r,u,d',
        ],
        'depot' => [
            'orders' => 'c,r',
            'order status' => 'r',
            'proof_of_payment' => 'c,r',
            'invoice' => 'r',
	        'delivery receipt' => 'r',
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
