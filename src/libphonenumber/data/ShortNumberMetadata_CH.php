<?php
  /* This file is automatically generated by {@link BuildMetadataPHPFromXml}.
   * Please don't modify it directly.
   */


return array (
  'generalDesc' => 
  array (
    'NationalNumberPattern' => '[1-9]\\d{2,5}',
    'PossibleNumberPattern' => '\\d{3,6}',
    'ExampleNumber' => '',
  ),
  'fixedLine' => 
  array (
    'NationalNumberPattern' => '[1-9]\\d{2,5}',
    'PossibleNumberPattern' => '\\d{3,6}',
    'ExampleNumber' => '',
  ),
  'mobile' => 
  array (
    'NationalNumberPattern' => '[1-9]\\d{2,5}',
    'PossibleNumberPattern' => '\\d{3,6}',
    'ExampleNumber' => '',
  ),
  'tollFree' => 
  array (
    'NationalNumberPattern' => '
          1(?:
            16\\d{3}|
            47
          )
        ',
    'PossibleNumberPattern' => '\\d{3,6}',
    'ExampleNumber' => '116000',
  ),
  'premiumRate' => 
  array (
    'NationalNumberPattern' => '
          1(?:
            145|
            8\\d{2}
          )|
          543|
          83111
        ',
    'PossibleNumberPattern' => '\\d{3,5}',
    'ExampleNumber' => '543',
  ),
  'sharedCost' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'personalNumber' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'voip' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'pager' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'uan' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'emergency' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'voicemail' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'shortCode' => 
  array (
    'NationalNumberPattern' => '
          1(?:
            0[78]\\d{2}|
            1(?:
              [278]|
              45|
              6(?:
                000|
                111
              )
            )|
            4(?:
              [03457]|
              1[45]
            )|
            6(?:
              00|
              [1-46]
            )|
            8(?:
              02|
              1[189]|
              50|
              7|
              8[08]|
              99
            )
          )|
          [2-9]\\d{2,4}
        ',
    'PossibleNumberPattern' => '\\d{3,6}',
    'ExampleNumber' => '147',
  ),
  'standardRate' => 
  array (
    'NationalNumberPattern' => '
          1(?:
            4(?:
              [035]|
              1\\d
            )|
            6\\d{1,2}
          )
        ',
    'PossibleNumberPattern' => '\\d{3,4}',
    'ExampleNumber' => '1600',
  ),
  'noInternationalDialling' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'ExampleNumber' => '',
  ),
  'id' => 'CH',
  'countryCode' => 0,
  'internationalPrefix' => '',
  'sameMobileAndFixedLinePattern' => true,
  'numberFormat' => 
  array (
  ),
  'intlNumberFormat' => 
  array (
  ),
  'mainCountryForCode' => NULL,
  'leadingZeroPossible' => NULL,
);
/* EOF */