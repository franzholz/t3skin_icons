<?php

/*********************************************************************
* Extension configuration file for ext "t3skin_icons".
*
*********************************************************************/

$EM_CONF[$_EXTKEY] = [
  'title' => 'TYPO3 Skin Icons',
  'description' => 'This library offers the t3skin icons.',
  'category' => 'misc',
  'version' => '1.1.0',
  'state' => 'stable',
  'uploadfolder' => 0,
  'clearcacheonload' => 0,
  'author' => 'Franz Holzinger',
  'author_email' => 'franz@ttproducts.de',
  'author_company' => 'jambage.com',
  'constraints' =>
  [
    'depends' =>
    [
      'typo3' => '12.4.0-14.3.99'
    ],
    'suggests' =>
    [
    ],
    'conflicts' =>
    [
    ],
  ]
];



