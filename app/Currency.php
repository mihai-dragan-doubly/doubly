<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model {

	protected $table = 'currencies';
	protected $fillable = ['currency','selected','position'];
	protected $hidden = ['user_id'];
	public $timestamps = false;

	public function scopePositionAscending($query)
	{
		return $query->orderBy('position','ASC');
	}

	static function getCurrencyList() {
		return $currencies = [
			'USD' => 'US Dollar (USD)',
			'EUR' => 'Euro (EUR)',
			'GBP' => 'British Pound Sterling (GBP)',
			'CAD' => 'Canadian Dollar (CAD)',
			'AUD' => 'Australian Dollar (AUD)',
			'AFN' => 'Afghan Afghani (AFN)',
			'ALL' => 'Albanian Lek (ALL)',
			'AZN' => 'Azerbaijani Manat (AZN)',
			'DZD' => 'Algerian Dinar (DZD)',
			'AOA' => 'Angolan Kwanza (AOA)',
			'ARS' => 'Argentine Peso (ARS)',
			'AMD' => 'Armenian Dram (AMD)',
			'AWG' => 'Aruban Florin (AWG)',
			'BSD' => 'Bahamian Dollar (BSD)',
			'BHD' => 'Bahraini Dinar (BHD)',
			'BDT' => 'Bangladeshi Taka (BDT)',
			'BBD' => 'Barbadian Dollar (BBD)',
			'BYR' => 'Belarusian Ruble (BYR)',
			'BZD' => 'Belize Dollar (BZD)',
			'BMD' => 'Bermudan Dollar (BMD)',
			'BTN' => 'Bhutanese Ngultrum (BTN)',
			'XBT' => 'Bitcoin (XBT)',
			'BOB' => 'Bolivian Boliviano (BOB)',
			'BAM' => 'Bosnia-Herzegovina Convertible Mark (BAM)',
			'BWP' => 'Botswanan Pula (BWP)',
			'BRL' => 'Brazilian Real (BRL)',
			'BND' => 'Brunei Dollar (BND)',
			'BGN' => 'Bulgarian Lev (BGN)',
			// 'BUK' => 'Burmese Kyat (BUK)',
			'BIF' => 'Burundian Franc (BIF)',
			'KHR' => 'Cambodian Riel (KHR)',
			'CVE' => 'Cape Verdean Escudo (CVE)',
			'XAF' => 'Central African CFA Franc (XAF)',
			'XOF' => 'CFA Franc BCEAO (XOF)',
			'XPF' => 'CFP Franc (XPF)',
			'CZK' => 'Czech Republic Koruna (CZK)',
			'KYD' => 'Cayman Islands Dollar (KYD)',
			'CLP' => 'Chilean Peso (CLP)',
			'CNY' => 'Chinese Yuan (CNY)',
			'COP' => 'Colombian Peso (COP)',
			'KMF' => 'Comorian Franc (KMF)',
			'CDF' => 'Congolese Franc (CDF)',
			'CRC' => 'Costa Rican Colon (CRC)',
			'HRK' => 'Croatian Kuna (HRK)',
			'CUC' => 'Cuban Convertible Peso (CUC)',
			'CUP' => 'Cuban Peso (CUP)',
			'DKK' => 'Danish Krone (DKK)',
			'DJF' => 'Djiboutian Franc (DJF)',
			'DOP' => 'Dominican Peso (DOP)',
			'XCD' => 'East Caribbean Dollar (XCD)',
			'EGP' => 'Egyptian Pound (EGP)',
			// 'GQE' => 'Equatorial Guinean Ekwele (GQE)',
			'ERN' => 'Eritrean Nakfa (ERN)',
			'EEK' => 'Estonian Kroon (EEK)',
			'ETB' => 'Ethiopian Birr (ETB)',
			'FKP' => 'Falkland Islands Pound (FKP)',
			'FJD' => 'Fijian Dollar (FJD)',
			'GMD' => 'Gambian Dalasi (GMD)',
			// 'GEK' => 'Georgian Kupon Larit (GEK)',
			'GEL' => 'Georgian Lari (GEL)',
			'GHS' => 'Ghanaian Cedi (GHS)',
			'GIP' => 'Gibraltar Pound (GIP)',
			'XAU' => 'Gold Ounce (XAU)',
			'GTQ' => 'Guatemalan Quetzal (GTQ)',
			'GGP' => 'Guernsey Pound (GGP)',
			'GNF' => 'Guinean Franc (GNF)',
			'GYD' => 'Guyanaese Dollar (GYD)',
			'HTG' => 'Haitian Gourde (HTG)',
			'HNL' => 'Honduran Lempira (HNL)',
			'HKD' => 'Hong Kong Dollar (HKD)',
			'HUF' => 'Hungarian Forint (HUF)',
			'ISK' => 'Icelandic Krona (ISK)',
			'XDR' => 'IMF Special Drawing Rights (XDR)',
			'INR' => 'Indian Rupee (INR)',
			'IDR' => 'Indonesian Rupiah (IDR)',
			'IRR' => 'Iranian Rial (IRR)',
			'IQD' => 'Iraqi Dinar (IQD)',
			'IMP' => 'Isle of Man Pound (IMP)',
			'ILS' => 'Israeli New Shekel (ILS)',
			'JMD' => 'Jamaican Dollar (JMD)',
			'JPY' => 'Japanese Yen (JPY)',
			'JEP' => 'Jersey Pound (JEP)',
			'JOD' => 'Jordanian Dinar (JOD)',
			'KZT' => 'Kazakhstani Tenge (KZT)',
			'KES' => 'Kenyan Shilling (KES)',
			'KWD' => 'Kuwaiti Dinar (KWD)',
			'KGS' => 'Kyrgystani Som (KGS)',
			'LAK' => 'Laotian Kip (LAK)',
			'LVL' => 'Latvian Lats (LVL)',
			'LBP' => 'Lebanese Pound (LBP)',
			'LSL' => 'Lesotho Loti (LSL)',
			'LRD' => 'Liberian Dollar (LRD)',
			'LYD' => 'Libyan Dinar (LYD)',
			'LTL' => 'Lithuanian Litas (LTL)',
			'MOP' => 'Macanese Pataca (MOP)',
			'MKD' => 'Macedonian Denar (MKD)',
			'MGA' => 'Malagasy Ariary (MGA)',
			'MWK' => 'Malawian Kwacha (MWK)',
			'MYR' => 'Malaysian Ringgit (MYR)',
			'MVR' => 'Maldivian Rufiyaa (MVR)',
			'MRO' => 'Mauritanian Ouguiya (MRO)',
			'MUR' => 'Mauritian Rupee (MUR)',
			'MXN' => 'Mexican Peso (MXN)',
			'MDL' => 'Moldovan Leu (MDL)',
			'MNT' => 'Mongolian Tugrik (MNT)',
			'MAD' => 'Moroccan Dirham (MAD)',
			'MZN' => 'Mozambican Metical (MZN)',
			'MMK' => 'Myanmar Kyat (MMK)',
			'NAD' => 'Namibian Dollar (NAD)',
			'NPR' => 'Nepalese Rupee (NPR)',
			'ANG' => 'Netherlands Antillean Guilder (ANG)',
			'TWD' => 'New Taiwan Dollar (TWD)',
			'NZD' => 'New Zealand Dollar (NZD)',
			'NIO' => 'Nicaraguan Cordoba (NIO)',
			// 'NIC' => 'Nicaraguan Cordoba (1988–1991) (NIC)',
			'NGN' => 'Nigerian Naira (NGN)',
			'KPW' => 'North Korean Won (KPW)',
			'NOK' => 'Norwegian Krone (NOK)',
			'OMR' => 'Omani Rial (OMR)',
			'PKR' => 'Pakistani Rupee (PKR)',
			'XPD' => 'Palladium Ounce (XPD)',
			'PAB' => 'Panamanian Balboa (PAB)',
			'PGK' => 'Papua New Guinean Kina (PGK)',
			'PYG' => 'Paraguayan Guarani (PYG)',
			'PEN' => 'Peruvian Nuevo Sol (PEN)',
			'PHP' => 'Philippine Peso (PHP)',
			'XPT' => 'Platinum Ounce (XPT)',
			'PLN' => 'Polish Zloty (PLN)',
			'QAR' => 'Qatari Rial (QAR)',
			// 'RHD' => 'Rhodesian Dollar (RHD)',
			'RON' => 'Romanian Leu (RON)',
			'RUB' => 'Russian Ruble (RUB)',
			'RWF' => 'Rwandan Franc (RWF)',
			'SHP' => 'Saint Helena Pound (SHP)',
			'WST' => 'Samoan Tala (WST)',
			'STD' => 'Sao Tome and Principe Dobra (STD)',
			'SVC' => 'Salvadoran Colon (SVC)',
			'SAR' => 'Saudi Riyal (SAR)',
			'SPL' => 'Seborgan Luigino (SPL)',
			'RSD' => 'Serbian Dinar (RSD)',
			'SCR' => 'Seychellois Rupee (SCR)',
			'SLL' => 'Sierra Leonean Leone (SLL)',
			'XAG' => 'Silver Ounce (XAG)',
			'SGD' => 'Singapore Dollar (SGD)',
			'SKK' => 'Slovak Koruna (SKK)',
			'SBD' => 'Solomon Islands Dollar (SBD)',
			'SOS' => 'Somali Shilling (SOS)',
			'ZAR' => 'South African Rand (ZAR)',
			'KRW' => 'South Korean Won (KRW)',
			// 'SSP' => 'South Sudanese pound (SSP)',
			'LKR' => 'Sri Lankan Rupee (LKR)',
			'SDG' => 'Sudanese Pound (SDG)',
			'SRD' => 'Surinamese Dollar (SRD)',
			'SZL' => 'Swazi Lilangeni (SZL)',
			'SEK' => 'Swedish Krona (SEK)',
			'CHF' => 'Swiss Franc (CHF)',
			'SYP' => 'Syrian Pound (SYP)',
			'TJS' => 'Tajikistani Somoni (TJS)',
			'TZS' => 'Tanzanian Shilling (TZS)',
			'THB' => 'Thai Baht (THB)',
			'TOP' => 'Tongan Paʻanga (TOP)',
			'TTD' => 'Trinidad and Tobago Dollar (TTD)',
			'TND' => 'Tunisian Dinar (TND)',
			// 'TMM' => 'Turkmenistani Manat (1993–2009) (TMM)',
			'TMT' => 'Turkmenistani Manat (TMT)',
			'TRY' => 'Turkish Lira (TRY)',
			'TVD' => 'Tuvaluan Dollar (TVD)',
			'UGX' => 'Ugandan Shilling (UGX)',
			'UAH' => 'Ukrainian Hryvnia (UAH)',
			'AED' => 'United Arab Emirates Dirham (AED)',
			'UYU' => 'Uruguayan Peso (UYU)',
			'UZS' => 'Uzbekistan Som (UZS)',
			'VUV' => 'Vanuatu Vatu (VUV)',
			// 'VEB' => 'Venezuelan Bolivar (1871–2008) (VEB)',
			'VEF' => 'Venezuelan Bolivar (VEF)',
			'VND' => 'Vietnamese Dong (VND)',
			// 'CHE' => 'WIR Euro (CHE)',
			// 'CHW' => 'WIR Franc (CHW)',
			'YER' => 'Yemeni Rial (YER)',
			// 'ZMK' => 'Zambian Kwacha (1968–2012) (ZMK)',
			'ZMW' => 'Zambian Kwacha (ZMW)',
			// 'ZWD' => 'Zimbabwean Dollar (1980–2008) (ZWD)',
			'ZWD' => 'Zimbabwean Dollar (ZWD)',
			// 'ZWL' => 'Zimbabwean Dollar (ZWL)',
		];
	}

	static function getCurrencySymbols() {
		$currencySymbols = array(
			'AED' => '&#1583;.&#1573;', // ?
			'AFN' => '&#65;&#102;',
			'ALL' => '&#76;&#101;&#107;',
			'AMD' => '',
			'ANG' => '&#402;',
			'AOA' => '&#75;&#122;', // ?
			'ARS' => '&#36;',
			'AUD' => '&#36;',
			'AWG' => '&#402;',
			'AZN' => '&#1084;&#1072;&#1085;',
			'BAM' => '&#75;&#77;',
			'BBD' => '&#36;',
			'BDT' => '&#2547;', // ?
			'BGN' => '&#1083;&#1074;',
			'BHD' => '.&#1583;.&#1576;', // ?
			'BIF' => '&#70;&#66;&#117;', // ?
			'BMD' => '&#36;',
			'BND' => '&#36;',
			'BOB' => '&#36;&#98;',
			'BRL' => '&#82;&#36;',
			'BSD' => '&#36;',
			'BTN' => '&#78;&#117;&#46;', // ?
			'BWP' => '&#80;',
			'BYR' => '&#112;&#46;',
			'BZD' => '&#66;&#90;&#36;',
			'CAD' => '&#36;',
			'CDF' => '&#70;&#67;',
			'CHF' => '&#67;&#72;&#70;',
			'CLF' => '', // ?
			'CLP' => '&#36;',
			'CNY' => '&#165;',
			'COP' => '&#36;',
			'CRC' => '&#8353;',
			'CUP' => '&#8396;',
			'CVE' => '&#36;', // ?
			'CZK' => '&#75;&#269;',
			'DJF' => '&#70;&#100;&#106;', // ?
			'DKK' => '&#107;&#114;',
			'DOP' => '&#82;&#68;&#36;',
			'DZD' => '&#1583;&#1580;', // ?
			'EGP' => '&#163;',
			'ETB' => '&#66;&#114;',
			'EUR' => '&#8364;',
			'FJD' => '&#36;',
			'FKP' => '&#163;',
			'GBP' => '&#163;',
			'GEL' => '&#4314;', // ?
			'GHS' => '&#162;',
			'GIP' => '&#163;',
			'GMD' => '&#68;', // ?
			'GNF' => '&#70;&#71;', // ?
			'GTQ' => '&#81;',
			'GYD' => '&#36;',
			'HKD' => '&#36;',
			'HNL' => '&#76;',
			'HRK' => '&#107;&#110;',
			'HTG' => '&#71;', // ?
			'HUF' => '&#70;&#116;',
			'IDR' => '&#82;&#112;',
			'ILS' => '&#8362;',
			'INR' => '',
			'IQD' => '&#1593;.&#1583;', // ?
			'IRR' => '&#65020;',
			'ISK' => '&#107;&#114;',
			'JEP' => '&#163;',
			'JMD' => '&#74;&#36;',
			'JOD' => '&#74;&#68;', // ?
			'JPY' => '&#165;',
			'KES' => '&#75;&#83;&#104;', // ?
			'KGS' => '&#1083;&#1074;',
			'KHR' => '&#6107;',
			'KMF' => '&#67;&#70;', // ?
			'KPW' => '&#8361;',
			'KRW' => '&#8361;',
			'KWD' => '&#1583;.&#1603;', // ?
			'KYD' => '&#36;',
			'KZT' => '&#1083;&#1074;',
			'LAK' => '&#8365;',
			'LBP' => '&#163;',
			'LKR' => '&#8360;',
			'LRD' => '&#36;',
			'LSL' => '&#76;', // ?
			'LTL' => '&#76;&#116;',
			'LVL' => '&#76;&#115;',
			'LYD' => '&#1604;.&#1583;', // ?
			'MAD' => '&#1583;.&#1605;.', //?
			'MDL' => '&#76;',
			'MGA' => '&#65;&#114;', // ?
			'MKD' => '&#1076;&#1077;&#1085;',
			'MMK' => '&#75;',
			'MNT' => '&#8366;',
			'MOP' => '&#77;&#79;&#80;&#36;', // ?
			'MRO' => '&#85;&#77;', // ?
			'MUR' => '&#8360;', // ?
			'MVR' => '.&#1923;', // ?
			'MWK' => '&#77;&#75;',
			'MXN' => '&#36;',
			'MYR' => '&#82;&#77;',
			'MZN' => '&#77;&#84;',
			'NAD' => '&#36;',
			'NGN' => '&#8358;',
			'NIO' => '&#67;&#36;',
			'NOK' => '&#107;&#114;',
			'NPR' => '&#8360;',
			'NZD' => '&#36;',
			'OMR' => '&#65020;',
			'PAB' => '&#66;&#47;&#46;',
			'PEN' => '&#83;&#47;&#46;',
			'PGK' => '&#75;', // ?
			'PHP' => '&#8369;',
			'PKR' => '&#8360;',
			'PLN' => '&#122;&#322;',
			'PYG' => '&#71;&#115;',
			'QAR' => '&#65020;',
			'RON' => '&#108;&#101;&#105;',
			'RSD' => '&#1044;&#1080;&#1085;&#46;',
			'RUB' => '&#1088;&#1091;&#1073;',
			'RWF' => '&#1585;.&#1587;',
			'SAR' => '&#65020;',
			'SBD' => '&#36;',
			'SCR' => '&#8360;',
			'SDG' => '&#163;', // ?
			'SEK' => '&#107;&#114;',
			'SGD' => '&#36;',
			'SHP' => '&#163;',
			'SLL' => '&#76;&#101;', // ?
			'SOS' => '&#83;',
			'SRD' => '&#36;',
			'STD' => '&#68;&#98;', // ?
			'SVC' => '&#36;',
			'SYP' => '&#163;',
			'SZL' => '&#76;', // ?
			'THB' => '&#3647;',
			'TJS' => '&#84;&#74;&#83;', // ? TJS (guess)
			'TMT' => '&#109;',
			'TND' => '&#1583;.&#1578;',
			'TOP' => '&#84;&#36;',
			'TRY' => '&#8356;', // New Turkey Lira (old symbol used)
			'TTD' => '&#36;',
			'TWD' => '&#78;&#84;&#36;',
			'TZS' => '',
			'UAH' => '&#8372;',
			'UGX' => '&#85;&#83;&#104;',
			'USD' => '&#36;',
			'UYU' => '&#36;&#85;',
			'UZS' => '&#1083;&#1074;',
			'VEF' => '&#66;&#115;',
			'VND' => '&#8363;',
			'VUV' => '&#86;&#84;',
			'WST' => '&#87;&#83;&#36;',
			'XAF' => '&#70;&#67;&#70;&#65;',
			'XCD' => '&#36;',
			'XDR' => '',
			'XOF' => '',
			'XPF' => '&#70;',
			'YER' => '&#65020;',
			'ZAR' => '&#82;',
			'ZMK' => '&#90;&#75;', // ?
			'ZWL' => '&#90;&#36;',
		);

		return $currencySymbols;
	}

}