<?php

namespace App\config;

class ArrayNavigate
{
    public static function items(): array
    {


        return [
            [
                'divider' => true,
                'label' => 'Home'
            ],
            [
                'icon' => 'fa fa-tachometer',
                'title' => 'Dashboard',
                'badge' => ['class' => 'label-primary', 'count' => 6],
                'children' => [
                    ['title' => 'Dashboard 1', 'route' => 'dashboard'],
                    ['title' => 'Dashboard 2'],
                    ['title' => 'Dashboard 3'],
                    ['title' => 'Dashboard 4'],
                    ['title' => 'Dashboard 5'],
                    ['title' => 'Dashboard 6'],
                ]
            ],
            [
                'divider' => true,
                'label' => 'Layout'
            ],
            [
                'icon' => 'fa fa-columns',
                'title' => 'Layout',
                'children' => [
                    ['title' => 'Blank'],
                    ['title' => 'Boxed'],
                    ['title' => 'Fix Header'],
                    ['title' => 'Fix Sidebar'],
                ]
            ],
            [
                'divider' => true,
                'label' => 'Apps & Charts'
            ],
            [
                'icon' => 'fa fa-envelope',
                'title' => 'Mailbox',
                'children' => [
                    ['title' => 'Compose'],
                    ['title' => 'Read'],
                    ['title' => 'Inbox'],
                ]
            ],
            [
                'icon' => 'fa fa-bar-chart',
                'title' => 'Charts',
                'children' => [
                    ['title' => 'Morris'],
                    ['title' => 'ChartJs'],
                    ['title' => 'Chartist'],
                    ['title' => 'AmChart'],
                    ['title' => 'EChart'],
                    ['title' => 'Sparkline'],
                    ['title' => 'Peity'],
                ]
            ],
            [
                'divider' => true,
                'label' => 'Features'
            ],
            [
                'icon' => 'fa fa-suitcase',
                'title' => 'Ui Elements',
                'badge' => ['class' => 'label-danger', 'count' => 12],
                'children' => [
                    ['title' => 'Alert'],
                    ['title' => 'Button'],
                    ['title' => 'Dropdown'],
                    ['title' => 'Progressbar'],
                    ['title' => 'Tab'],
                    ['title' => 'Typography'],
                    ['title' => 'Calender'],
                    ['title' => 'Datamap'],
                    ['title' => 'Nestedable'],
                    ['title' => 'Sweetalert'],
                    ['title' => 'Toastr'],
                    ['title' => 'Weather'],
                ]
            ],
            [
                'icon' => 'fa fa-wpforms',
                'title' => 'Forms',
                'children' => [
                    ['title' => 'Basic Forms'],
                    ['title' => 'Form Layout', 'route' => 'form_layout'],
                    ['title' => 'Form Validation', 'route' => 'form_validate'],
                    ['title' => 'Editor', 'route' => 'form_edit'],
                    ['title' => 'Dropzone', 'route' => 'form_dropzone'],
                ]
            ],
            [
                'icon' => 'fa fa-table',
                'title' => 'Tables',
                'children' => [
                    ['title' => 'Bootstrap Tables', 'route' => 'table_bootstrap'],
                    ['title' => 'Data Tables'],
                ]
            ],
            [
                'icon' => 'ti-wallet m-r-5',
                'title' => 'Widgets',
                'children' => [
                    ['title' => 'Widgets', 'route' => 'widget'],
                ]
            ],
            [
                'divider' => true,
                'label' => 'EXTRA',
            ],
            [
                'icon' => 'fa fa-book',
                'title' => 'Sample Pages',
                'badge' => ['class' => 'label-success', 'count' => 8],
                'children' => [
                    [
                        'title' => 'Authentication',
                        'badge' => ['class' => 'label-success', 'count' => 3],
                        'children' => [
                            ['title' => 'Login'],
                            ['title' => 'Register'],
                            ['title' => 'Invoice'],
                        ]
                    ],
                    [
                        'title' => 'Error Pages',
                        'children' => [
                            ['title' => '400'],
                            ['title' => '403'],
                            ['title' => '404'],
                            ['title' => '500'],
                            ['title' => '503'],
                        ]
                    ],
                ]
            ],
            [
                'icon' => 'fa fa-map-marker',
                'title' => 'Maps',
                'children' => [
                    ['title' => 'Vector Map'],
                ]
            ],
            [
                'icon' => 'fa fa-level-down',
                'title' => 'Multi level dd',
                'children' => [
                    ['title' => 'item 1,1'],
                    ['title' => 'item 1,2'],
                    [
                        'title' => 'Menu 1,3',
                        'children' => [
                            ['title' => 'item 1,3,1'],
                            ['title' => 'item 1,3,2'],
                            ['title' => 'item 1,3,3'],
                            ['title' => 'item 1,3,4'],
                        ]
                    ],
                    ['title' => 'item 1,4'],
                ]
            ],
        ];
    }
}
