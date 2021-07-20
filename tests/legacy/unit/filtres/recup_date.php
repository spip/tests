<?php
/**
 * Test unitaire de la fonction recup_date
 * du fichier inc/filtres.php
 *
 * genere automatiquement par TestBuilder
 * le 
 */

	$test = 'recup_date';
	$remonte = "";
	while (!is_file($remonte."test.inc"))
		$remonte = "../$remonte";
	require $remonte.'test.inc';
	find_in_path("inc/filtres.php",'',true);

	//
	// hop ! on y va
	//
	$err = tester_fun('recup_date', essais_recup_date());
	
	// si le tableau $err est pas vide ca va pas
	if ($err) {
		die ('<dl>' . join('', $err) . '</dl>');
	}

	echo "OK";
	

	function essais_recup_date(){
		$essais = array (
  0 => 
  array (
    0 => 
    array (
      0 => '2001',
      1 => '1',
      2 => '1',
      3 => '12',
      4 => '33',
      5 => '44',
    ),
    1 => '2001-00-00 12:33:44',
    2 => true,
  ),
  1 => 
  array (
    0 => 
    array (
      0 => '2001',
      1 => '00',
      2 => '0',
      3 => '12',
      4 => '33',
      5 => '44',
    ),
    1 => '2001-00-00 12:33:44',
    2 => false,
  ),
  2 => 
  array (
    0 => 
    array (
      0 => '2001',
      1 => '03',
      2 => '1',
      3 => '09',
      4 => '12',
      5 => '57',
    ),
    1 => '2001-03-00 09:12:57',
    2 => true,
  ),
  3 => 
  array (
    0 => 
    array (
      0 => '2001',
      1 => '03',
      2 => '0',
      3 => '09',
      4 => '12',
      5 => '57',
    ),
    1 => '2001-03-00 09:12:57',
    2 => false,
  ),
  4 => 
  array (
    0 => 
    array (
      0 => '2001',
      1 => '02',
      2 => '29',
      3 => '14',
      4 => '12',
      5 => '33',
    ),
    1 => '2001-02-29 14:12:33',
    2 => true,
  ),
  5 => 
  array (
    0 => 
    array (
      0 => '2001',
      1 => '02',
      2 => '29',
      3 => '14',
      4 => '12',
      5 => '33',
    ),
    1 => '2001-02-29 14:12:33',
    2 => false,
  ),
  6 => 
  array (
    0 => 
    array (
      0 => '0000',
      1 => '1',
      2 => '1',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '0000-00-00',
    2 => true,
  ),
  7 => 
  array (
    0 => 
    array (
      0 => '0000',
      1 => '00',
      2 => '0',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '0000-00-00',
    2 => false,
  ),
  8 => 
  array (
    0 => 
    array (
      0 => '0001',
      1 => '01',
      2 => '1',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '0001-01-01',
    2 => true,
  ),
  9 => 
  array (
    0 => 
    array (
      0 => '0001',
      1 => '01',
      2 => '1',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '0001-01-01',
    2 => false,
  ),
  10 => 
  array (
    0 => 
    array (
      0 => '1970',
      1 => '01',
      2 => '1',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '1970-01-01',
    2 => true,
  ),
  11 => 
  array (
    0 => 
    array (
      0 => '1970',
      1 => '01',
      2 => '1',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '1970-01-01',
    2 => false,
  ),
  12 => 
  array (
    0 => 
    array (
      0 => '2001',
      1 => '07',
      2 => '5',
      3 => '18',
      4 => '25',
      5 => '24',
    ),
    1 => '2001-07-05 18:25:24',
    2 => true,
  ),
  13 => 
  array (
    0 => 
    array (
      0 => '2001',
      1 => '07',
      2 => '5',
      3 => '18',
      4 => '25',
      5 => '24',
    ),
    1 => '2001-07-05 18:25:24',
    2 => false,
  ),
  14 => 
  array (
    0 => 
    array (
      0 => '2001',
      1 => '01',
      2 => '1',
      3 => '00',
      4 => '00',
      5 => '00',
    ),
    1 => '2001-01-01 00:00:00',
    2 => true,
  ),
  15 => 
  array (
    0 => 
    array (
      0 => '2001',
      1 => '01',
      2 => '1',
      3 => '00',
      4 => '00',
      5 => '00',
    ),
    1 => '2001-01-01 00:00:00',
    2 => false,
  ),
  16 => 
  array (
    0 => 
    array (
      0 => '2001',
      1 => '12',
      2 => '31',
      3 => '23',
      4 => '59',
      5 => '59',
    ),
    1 => '2001-12-31 23:59:59',
    2 => true,
  ),
  17 => 
  array (
    0 => 
    array (
      0 => '2001',
      1 => '12',
      2 => '31',
      3 => '23',
      4 => '59',
      5 => '59',
    ),
    1 => '2001-12-31 23:59:59',
    2 => false,
  ),
  18 => 
  array (
    0 => 
    array (
      0 => '2001',
      1 => '03',
      2 => '1',
      3 => '14',
      4 => '12',
      5 => '33',
    ),
    1 => '2001-03-01 14:12:33',
    2 => true,
  ),
  19 => 
  array (
    0 => 
    array (
      0 => '2001',
      1 => '03',
      2 => '1',
      3 => '14',
      4 => '12',
      5 => '33',
    ),
    1 => '2001-03-01 14:12:33',
    2 => false,
  ),
  20 => 
  array (
    0 => 
    array (
      0 => '2004',
      1 => '02',
      2 => '29',
      3 => '14',
      4 => '12',
      5 => '33',
    ),
    1 => '2004-02-29 14:12:33',
    2 => true,
  ),
  21 => 
  array (
    0 => 
    array (
      0 => '2004',
      1 => '02',
      2 => '29',
      3 => '14',
      4 => '12',
      5 => '33',
    ),
    1 => '2004-02-29 14:12:33',
    2 => false,
  ),
  22 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '03',
      2 => '20',
      3 => '12',
      4 => '00',
      5 => '00',
    ),
    1 => '2012-03-20 12:00:00',
    2 => true,
  ),
  23 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '03',
      2 => '20',
      3 => '12',
      4 => '00',
      5 => '00',
    ),
    1 => '2012-03-20 12:00:00',
    2 => false,
  ),
  24 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '03',
      2 => '21',
      3 => '12',
      4 => '00',
      5 => '00',
    ),
    1 => '2012-03-21 12:00:00',
    2 => true,
  ),
  25 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '03',
      2 => '21',
      3 => '12',
      4 => '00',
      5 => '00',
    ),
    1 => '2012-03-21 12:00:00',
    2 => false,
  ),
  26 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '03',
      2 => '22',
      3 => '12',
      4 => '00',
      5 => '00',
    ),
    1 => '2012-03-22 12:00:00',
    2 => true,
  ),
  27 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '03',
      2 => '22',
      3 => '12',
      4 => '00',
      5 => '00',
    ),
    1 => '2012-03-22 12:00:00',
    2 => false,
  ),
  28 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '06',
      2 => '20',
      3 => '12',
      4 => '00',
      5 => '00',
    ),
    1 => '2012-06-20 12:00:00',
    2 => true,
  ),
  29 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '06',
      2 => '20',
      3 => '12',
      4 => '00',
      5 => '00',
    ),
    1 => '2012-06-20 12:00:00',
    2 => false,
  ),
  30 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '06',
      2 => '21',
      3 => '12',
      4 => '00',
      5 => '00',
    ),
    1 => '2012-06-21 12:00:00',
    2 => true,
  ),
  31 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '06',
      2 => '21',
      3 => '12',
      4 => '00',
      5 => '00',
    ),
    1 => '2012-06-21 12:00:00',
    2 => false,
  ),
  32 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '06',
      2 => '22',
      3 => '12',
      4 => '00',
      5 => '00',
    ),
    1 => '2012-06-22 12:00:00',
    2 => true,
  ),
  33 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '06',
      2 => '22',
      3 => '12',
      4 => '00',
      5 => '00',
    ),
    1 => '2012-06-22 12:00:00',
    2 => false,
  ),
  34 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '09',
      2 => '20',
      3 => '12',
      4 => '00',
      5 => '00',
    ),
    1 => '2012-09-20 12:00:00',
    2 => true,
  ),
  35 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '09',
      2 => '20',
      3 => '12',
      4 => '00',
      5 => '00',
    ),
    1 => '2012-09-20 12:00:00',
    2 => false,
  ),
  36 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '09',
      2 => '21',
      3 => '12',
      4 => '00',
      5 => '00',
    ),
    1 => '2012-09-21 12:00:00',
    2 => true,
  ),
  37 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '09',
      2 => '21',
      3 => '12',
      4 => '00',
      5 => '00',
    ),
    1 => '2012-09-21 12:00:00',
    2 => false,
  ),
  38 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '09',
      2 => '22',
      3 => '12',
      4 => '00',
      5 => '00',
    ),
    1 => '2012-09-22 12:00:00',
    2 => true,
  ),
  39 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '09',
      2 => '22',
      3 => '12',
      4 => '00',
      5 => '00',
    ),
    1 => '2012-09-22 12:00:00',
    2 => false,
  ),
  40 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '12',
      2 => '20',
      3 => '12',
      4 => '00',
      5 => '00',
    ),
    1 => '2012-12-20 12:00:00',
    2 => true,
  ),
  41 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '12',
      2 => '20',
      3 => '12',
      4 => '00',
      5 => '00',
    ),
    1 => '2012-12-20 12:00:00',
    2 => false,
  ),
  42 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '12',
      2 => '21',
      3 => '12',
      4 => '00',
      5 => '00',
    ),
    1 => '2012-12-21 12:00:00',
    2 => true,
  ),
  43 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '12',
      2 => '21',
      3 => '12',
      4 => '00',
      5 => '00',
    ),
    1 => '2012-12-21 12:00:00',
    2 => false,
  ),
  44 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '12',
      2 => '22',
      3 => '12',
      4 => '00',
      5 => '00',
    ),
    1 => '2012-12-22 12:00:00',
    2 => true,
  ),
  45 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '12',
      2 => '22',
      3 => '12',
      4 => '00',
      5 => '00',
    ),
    1 => '2012-12-22 12:00:00',
    2 => false,
  ),
  46 => 
  array (
    0 => 
    array (
      0 => '2001',
      1 => '07',
      2 => '5',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2001-07-05',
    2 => true,
  ),
  47 => 
  array (
    0 => 
    array (
      0 => '2001',
      1 => '07',
      2 => '5',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2001-07-05',
    2 => false,
  ),
  48 => 
  array (
    0 => 
    array (
      0 => '2001',
      1 => '01',
      2 => '1',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2001-01-01',
    2 => true,
  ),
  49 => 
  array (
    0 => 
    array (
      0 => '2001',
      1 => '01',
      2 => '1',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2001-01-01',
    2 => false,
  ),
  50 => 
  array (
    0 => 
    array (
      0 => '2001',
      1 => '12',
      2 => '31',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2001-12-31',
    2 => true,
  ),
  51 => 
  array (
    0 => 
    array (
      0 => '2001',
      1 => '12',
      2 => '31',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2001-12-31',
    2 => false,
  ),
  52 => 
  array (
    0 => 
    array (
      0 => '2001',
      1 => '03',
      2 => '1',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2001-03-01',
    2 => true,
  ),
  53 => 
  array (
    0 => 
    array (
      0 => '2001',
      1 => '03',
      2 => '1',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2001-03-01',
    2 => false,
  ),
  54 => 
  array (
    0 => 
    array (
      0 => '2004',
      1 => '02',
      2 => '29',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2004-02-29',
    2 => true,
  ),
  55 => 
  array (
    0 => 
    array (
      0 => '2004',
      1 => '02',
      2 => '29',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2004-02-29',
    2 => false,
  ),
  56 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '03',
      2 => '20',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012-03-20',
    2 => true,
  ),
  57 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '03',
      2 => '20',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012-03-20',
    2 => false,
  ),
  58 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '03',
      2 => '21',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012-03-21',
    2 => true,
  ),
  59 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '03',
      2 => '21',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012-03-21',
    2 => false,
  ),
  60 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '03',
      2 => '22',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012-03-22',
    2 => true,
  ),
  61 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '03',
      2 => '22',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012-03-22',
    2 => false,
  ),
  62 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '06',
      2 => '20',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012-06-20',
    2 => true,
  ),
  63 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '06',
      2 => '20',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012-06-20',
    2 => false,
  ),
  64 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '06',
      2 => '21',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012-06-21',
    2 => true,
  ),
  65 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '06',
      2 => '21',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012-06-21',
    2 => false,
  ),
  66 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '06',
      2 => '22',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012-06-22',
    2 => true,
  ),
  67 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '06',
      2 => '22',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012-06-22',
    2 => false,
  ),
  68 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '09',
      2 => '20',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012-09-20',
    2 => true,
  ),
  69 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '09',
      2 => '20',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012-09-20',
    2 => false,
  ),
  70 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '09',
      2 => '21',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012-09-21',
    2 => true,
  ),
  71 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '09',
      2 => '21',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012-09-21',
    2 => false,
  ),
  72 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '09',
      2 => '22',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012-09-22',
    2 => true,
  ),
  73 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '09',
      2 => '22',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012-09-22',
    2 => false,
  ),
  74 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '12',
      2 => '20',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012-12-20',
    2 => true,
  ),
  75 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '12',
      2 => '20',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012-12-20',
    2 => false,
  ),
  76 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '12',
      2 => '21',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012-12-21',
    2 => true,
  ),
  77 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '12',
      2 => '21',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012-12-21',
    2 => false,
  ),
  78 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '12',
      2 => '22',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012-12-22',
    2 => true,
  ),
  79 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '12',
      2 => '22',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012-12-22',
    2 => false,
  ),
  80 => 
  array (
    0 => 
    array (
      0 => 2005,
      1 => '07',
      2 => '1',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2001/07/05',
    2 => true,
  ),
  81 => 
  array (
    0 => 
    array (
      0 => 2005,
      1 => '07',
      2 => '1',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2001/07/05',
    2 => false,
  ),
  82 => 
  array (
    0 => 
    array (
      0 => 2001,
      1 => '01',
      2 => '1',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2001/01/01',
    2 => true,
  ),
  83 => 
  array (
    0 => 
    array (
      0 => 2001,
      1 => '01',
      2 => '1',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2001/01/01',
    2 => false,
  ),
  84 => 
  array (
    0 => 
    array (
      0 => 2031,
      1 => '12',
      2 => '1',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2001/12/31',
    2 => true,
  ),
  85 => 
  array (
    0 => 
    array (
      0 => 2031,
      1 => '12',
      2 => '1',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2001/12/31',
    2 => false,
  ),
  86 => 
  array (
    0 => 
    array (
      0 => 2001,
      1 => '03',
      2 => '1',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2001/03/01',
    2 => true,
  ),
  87 => 
  array (
    0 => 
    array (
      0 => 2001,
      1 => '03',
      2 => '1',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2001/03/01',
    2 => false,
  ),
  88 => 
  array (
    0 => 
    array (
      0 => 2029,
      1 => '02',
      2 => '4',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2004/02/29',
    2 => true,
  ),
  89 => 
  array (
    0 => 
    array (
      0 => 2029,
      1 => '02',
      2 => '4',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2004/02/29',
    2 => false,
  ),
  90 => 
  array (
    0 => 
    array (
      0 => 2020,
      1 => '03',
      2 => '12',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012/03/20',
    2 => true,
  ),
  91 => 
  array (
    0 => 
    array (
      0 => 2020,
      1 => '03',
      2 => '12',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012/03/20',
    2 => false,
  ),
  92 => 
  array (
    0 => 
    array (
      0 => 2021,
      1 => '03',
      2 => '12',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012/03/21',
    2 => true,
  ),
  93 => 
  array (
    0 => 
    array (
      0 => 2021,
      1 => '03',
      2 => '12',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012/03/21',
    2 => false,
  ),
  94 => 
  array (
    0 => 
    array (
      0 => 2022,
      1 => '03',
      2 => '12',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012/03/22',
    2 => true,
  ),
  95 => 
  array (
    0 => 
    array (
      0 => 2022,
      1 => '03',
      2 => '12',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012/03/22',
    2 => false,
  ),
  96 => 
  array (
    0 => 
    array (
      0 => 2020,
      1 => '06',
      2 => '12',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012/06/20',
    2 => true,
  ),
  97 => 
  array (
    0 => 
    array (
      0 => 2020,
      1 => '06',
      2 => '12',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012/06/20',
    2 => false,
  ),
  98 => 
  array (
    0 => 
    array (
      0 => 2021,
      1 => '06',
      2 => '12',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012/06/21',
    2 => true,
  ),
  99 => 
  array (
    0 => 
    array (
      0 => 2021,
      1 => '06',
      2 => '12',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012/06/21',
    2 => false,
  ),
  100 => 
  array (
    0 => 
    array (
      0 => 2022,
      1 => '06',
      2 => '12',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012/06/22',
    2 => true,
  ),
  101 => 
  array (
    0 => 
    array (
      0 => 2022,
      1 => '06',
      2 => '12',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012/06/22',
    2 => false,
  ),
  102 => 
  array (
    0 => 
    array (
      0 => 2020,
      1 => '09',
      2 => '12',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012/09/20',
    2 => true,
  ),
  103 => 
  array (
    0 => 
    array (
      0 => 2020,
      1 => '09',
      2 => '12',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012/09/20',
    2 => false,
  ),
  104 => 
  array (
    0 => 
    array (
      0 => 2021,
      1 => '09',
      2 => '12',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012/09/21',
    2 => true,
  ),
  105 => 
  array (
    0 => 
    array (
      0 => 2021,
      1 => '09',
      2 => '12',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012/09/21',
    2 => false,
  ),
  106 => 
  array (
    0 => 
    array (
      0 => 2022,
      1 => '09',
      2 => '12',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012/09/22',
    2 => true,
  ),
  107 => 
  array (
    0 => 
    array (
      0 => 2022,
      1 => '09',
      2 => '12',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012/09/22',
    2 => false,
  ),
  108 => 
  array (
    0 => 
    array (
      0 => 2020,
      1 => '12',
      2 => '12',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012/12/20',
    2 => true,
  ),
  109 => 
  array (
    0 => 
    array (
      0 => 2020,
      1 => '12',
      2 => '12',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012/12/20',
    2 => false,
  ),
  110 => 
  array (
    0 => 
    array (
      0 => 2021,
      1 => '12',
      2 => '12',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012/12/21',
    2 => true,
  ),
  111 => 
  array (
    0 => 
    array (
      0 => 2021,
      1 => '12',
      2 => '12',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012/12/21',
    2 => false,
  ),
  112 => 
  array (
    0 => 
    array (
      0 => 2022,
      1 => '12',
      2 => '12',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012/12/22',
    2 => true,
  ),
  113 => 
  array (
    0 => 
    array (
      0 => 2022,
      1 => '12',
      2 => '12',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '2012/12/22',
    2 => false,
  ),
  114 => 
  array (
    0 => 
    array (
      0 => '2001',
      1 => '07',
      2 => '5',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '05/07/2001',
    2 => true,
  ),
  115 => 
  array (
    0 => 
    array (
      0 => '2001',
      1 => '07',
      2 => '5',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '05/07/2001',
    2 => false,
  ),
  116 => 
  array (
    0 => 
    array (
      0 => '2001',
      1 => '01',
      2 => '1',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '01/01/2001',
    2 => true,
  ),
  117 => 
  array (
    0 => 
    array (
      0 => '2001',
      1 => '01',
      2 => '1',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '01/01/2001',
    2 => false,
  ),
  118 => 
  array (
    0 => 
    array (
      0 => '2001',
      1 => '12',
      2 => '31',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '31/12/2001',
    2 => true,
  ),
  119 => 
  array (
    0 => 
    array (
      0 => '2001',
      1 => '12',
      2 => '31',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '31/12/2001',
    2 => false,
  ),
  120 => 
  array (
    0 => 
    array (
      0 => '2001',
      1 => '03',
      2 => '1',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '01/03/2001',
    2 => true,
  ),
  121 => 
  array (
    0 => 
    array (
      0 => '2001',
      1 => '03',
      2 => '1',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '01/03/2001',
    2 => false,
  ),
  122 => 
  array (
    0 => 
    array (
      0 => '2004',
      1 => '02',
      2 => '29',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '29/02/2004',
    2 => true,
  ),
  123 => 
  array (
    0 => 
    array (
      0 => '2004',
      1 => '02',
      2 => '29',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '29/02/2004',
    2 => false,
  ),
  124 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '03',
      2 => '20',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '20/03/2012',
    2 => true,
  ),
  125 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '03',
      2 => '20',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '20/03/2012',
    2 => false,
  ),
  126 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '03',
      2 => '21',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '21/03/2012',
    2 => true,
  ),
  127 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '03',
      2 => '21',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '21/03/2012',
    2 => false,
  ),
  128 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '03',
      2 => '22',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '22/03/2012',
    2 => true,
  ),
  129 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '03',
      2 => '22',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '22/03/2012',
    2 => false,
  ),
  130 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '06',
      2 => '20',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '20/06/2012',
    2 => true,
  ),
  131 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '06',
      2 => '20',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '20/06/2012',
    2 => false,
  ),
  132 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '06',
      2 => '21',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '21/06/2012',
    2 => true,
  ),
  133 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '06',
      2 => '21',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '21/06/2012',
    2 => false,
  ),
  134 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '06',
      2 => '22',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '22/06/2012',
    2 => true,
  ),
  135 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '06',
      2 => '22',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '22/06/2012',
    2 => false,
  ),
  136 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '09',
      2 => '20',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '20/09/2012',
    2 => true,
  ),
  137 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '09',
      2 => '20',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '20/09/2012',
    2 => false,
  ),
  138 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '09',
      2 => '21',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '21/09/2012',
    2 => true,
  ),
  139 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '09',
      2 => '21',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '21/09/2012',
    2 => false,
  ),
  140 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '09',
      2 => '22',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '22/09/2012',
    2 => true,
  ),
  141 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '09',
      2 => '22',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '22/09/2012',
    2 => false,
  ),
  142 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '12',
      2 => '20',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '20/12/2012',
    2 => true,
  ),
  143 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '12',
      2 => '20',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '20/12/2012',
    2 => false,
  ),
  144 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '12',
      2 => '21',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '21/12/2012',
    2 => true,
  ),
  145 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '12',
      2 => '21',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '21/12/2012',
    2 => false,
  ),
  146 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '12',
      2 => '22',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '22/12/2012',
    2 => true,
  ),
  147 => 
  array (
    0 => 
    array (
      0 => '2012',
      1 => '12',
      2 => '22',
      3 => 0,
      4 => 0,
      5 => 0,
    ),
    1 => '22/12/2012',
    2 => false,
  ),
);
		return $essais;
	}
